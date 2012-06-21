<?php
/**
 * Fun wordwearch module to pass the time
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package PhpGedView
 * @subpackage Modules
 * @version 0.2beta
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class wordsearch
{
	function main()
	{
		global
			$GEDCOM,
			$stylesheet,
			$COMMON_NAMES_THRESHOLD
		;
		// Load configuration
		$config = parse_ini_file('modules/wordsearch/config.ini', FALSE);
		$config['loopcolor'] = $this->colorCodeConvert($config['loopcolor'], 'rgb');
		$config['foundcolor'] = $this->colorCodeConvert($config['foundcolor'], 'rgb');
		if($config['top_surnames_number'] == 'default'){$config['top_surnames_number'] = $COMMON_NAMES_THRESHOLD;}

		// get list
		if(!isset($_REQUEST['list']))
		{
			$_REQUEST['list'] = $config['default_wordlist'];
		}

		// Serious Security Fix
		$_REQUEST['list'] = basename($_REQUEST['list']);

		// see if list is an ini file
		if(file_exists("modules/wordsearch/lists/{$_REQUEST['list']}.ini"))
		{
			$ini = parse_ini_file("modules/wordsearch/lists/{$_REQUEST['list']}.ini");
			$listtitle = $ini['title'];
			$wordlist = $ini['wordlist'];
		}
		// see if list is a Word Search Factory V3 file
		// http://www.schoolhousetech.com/vocabulary/WordLists.aspx
		elseif(file_exists("modules/wordsearch/lists/{$_REQUEST['list']}.vwl"))
		{
			$listtitle = str_replace('_', ' ', $_REQUEST['list']);
			$vwl = join('', file("modules/wordsearch/lists/{$_REQUEST['list']}.vwl"));
			$p = xml_parser_create();
			xml_parse_into_struct($p, $vwl, $data, $idx);
			xml_parser_free($p);
			$wordlist = array();
			foreach($data as $word)
			{
				if(strtoupper($word['tag']) == 'WORD')
				{
					$wordlist[] = str_replace(' ', '', $word['value']);
				}
			}
			$wordlist = join(' ', $wordlist);
		}
		// if not a file, it's a generated list
		else
		{
			switch($_REQUEST['list'])
			{
				default:
				case 'topsurnames':
				{
					$listtitle = 'Common Surnames';
					$surnames=get_top_surnames(PGV_GED_ID, $config['top_surnames_number'], 0);
					$wordlist = implode(' ', array_keys($surnames));
					break;
				}
			}
		}

		// get css values
		require_once PGV_ROOT.'includes/cssparser.inc.php';
		$css = new cssparser();
		$css->Parse($stylesheet);
		$style = $css->GetSection('body');
		$style = array_change_key_case($style, CASE_LOWER);
		$fgcolor = $this->colorCodeConvert($style['color'], 'rgb');
		$bgcolor = $this->colorCodeConvert($style['background-color'], 'rgb');

		// display wordsearch
		$out = mod_print_header('Wordsearch')
			.'<center>'
			."<table><tr><td width=\"{$config['width']}\" valign=\"top\">"
			."<table width=\"{$config['width']}\"><tr><td>"
			.'<div class="block">'
			.'<table class="blockheader" cellpadding="0" cellspacing="0" style="direction:ltr;padding:0;margin:0;"><tr>'
			.'<td class="blockh1"></td>'
			."<td class=\"blockh2\"><div class=\"blockhc\"><b>{$listtitle}</b></div></td>"
			."<td class=\"blockh3\"></td></tr></table>\n"
			.'<div class="blockcontent">'
			.'<div class="center">'
			// start of wordsearch
			."<applet codebase=\"modules/wordsearch\" code=\"Wordsearch6.class\" width=\"{$config['width']}\" height=\"{$config['height']}\" />\n"
			."\t<param name=\"copyright\" value=\"Wordsearch applet, Copyright 1996 Sun Microsystems, Inc., all rights reserved.\" />\n"
			."\t<param name=\"documentation\" value=\"Documentation found at: http://www.xm.com/cafe/\" />\n"
			."\t<param name=\"wordlist\" value=\"{$wordlist}\" />\n"
			."\t<param name=\"listname\" value=\"{$listtitle}\" />\n"
			."\t<param name=\"bgcolor\" value=\"{$bgcolor}\" />\n"
			."\t<param name=\"textcolor\" value=\"{$fgcolor}\" />\n"
			."\t<param name=\"cellsize\" value=\"{$config['cellsize']}\" />\n"
			."\t<param name=\"fontname\" value=\"{$config['fontname']}\" />\n"
			."\t<param name=\"fontsize\" value=\"{$config['fontsize']}\" />\n"
			."\t<param name=\"fontstyle\" value=\"{$config['fontstyle']}\" />\n"
			."\t<param name=\"found.sound\" value=\"modules/wordsearch/click2.au\" />\n"
			."\t<param name=\"solved.sound\" value=\"modules/wordsearch/fanfare.au\" />\n"
			."\t<param name=\"puzzle.columns\" value=\"{$config['columns']}\" />\n"
			."\t<param name=\"puzzle.rows\" value=\"{$config['rows']}\" />\n"
			."\t<param name=\"puzzle.bgcolor\" value=\"{$bgcolor}\" />\n"
			."\t<param name=\"puzzle.textcolor\" value=\"{$fgcolor}\" />\n"
			."\t<param name=\"puzzle.loopcolor\" value=\"{$config['loopcolor']}\" />\n"
			."\t<param name=\"puzzle.drawnloopcolor\" value=\"{$config['foundcolor']}\" />\n"
			."</applet>\n"
			// end of wordsearch
			.'</div></div></div></td></tr></table>'
			//
			.'</td><td valign="top">'
			.'<table ><tr><td>'
			."<div class=\"block\">\n"
			."<table class=\"blockheader\" cellpadding=\"0\" cellspacing=\"0\" style=\"direction:ltr;padding:0;margin:0;\"><tr>"
			."<td class=\"blockh1\"></td>"
			."<td class=\"blockh2\"><div class=\"blockhc\">"
			."<b>Available Wordlists</b>"
			."</div></td>"
			."<td class=\"blockh3\"></td></tr></table>\n"
			."<div class=\"blockcontent\">"
			."<div class=\"center\">"
			// start of wordsearch list
		;
		$index = $this->getWordlistIndex();
		foreach($index as $id=>$title)
		{
			$title = str_replace('_', ' ', $title);
			if($id{0} == '_')
			{
				$out .= "<span style=\"font-weight: bold\">{$title}</span><br />";
			}
			else
			{
				$out .= "<a href=\"module.php?mod=wordsearch&amp;list={$id}\">{$title}</a><br />\n";
			}
		}
		$out .= ''
			// end of wordsearch list
			."</div>"
			."</div>\n"
			."</div>"
			.'</td></tr></table>'
			.'</td></tr></table>'
			.'</center>'
			."<div class=\"font9 center\">The Wordsearch6 applet may be used freely by anyone. Neither <a href=\"http://www.sun.com/\">Sun Microsystems, Inc.</a> nor <a href=\"http://www.ericharshbarger.com/java/\">Eric C. Harshbarger</a> is responsible for any problems resulting from the malfunction or misuse of this applet.<br /><br />\n"
			."&copy; Copyright 1996, Sun Microsystems, Inc.</div>\n"
			.mod_print_footer()
		;
		return $out;
	}

	function getWordlistIndex()
	{
		$wordlists = array();
		// files
		$d = dir('modules/wordsearch/lists/');
		while(false !== ($fn = $d->read()))
		{
			switch(substr($fn, -3))
			{
				case 'ini':
				{
					$ini = parse_ini_file("modules/wordsearch/lists/{$fn}");
					$fn = substr($fn, 0, -4);
					$wordlists[$fn] = $ini['title'];
					break;
				}
				case 'vwl':
				{
					$fn = substr($fn, 0, -4);
					$wordlists[$fn] = $fn;
					break;
				}
			}
		}
		$d->close();
		asort($wordlists);
		// generated
		$wordlists = array(
			'_ours' => 'Our Family Tree Wordlists',
			'topsurnames' => 'Top Surnames',
			'_other' => 'Other Wordlists'
		) + $wordlists;
		return $wordlists;
	}

	function colorCodeConvert($color, $to)
	{
		// color list taken from CSS specification.
		$colorKeywords = array('aqua'=>'00FFFF', 'black'=>'000000', 'blue'=>'0000FF', 'fuchsia'=>'FF00FF', 'gray'=>'808080', 'green'=>'008000', 'lime'=>'00FF00', 'maroon'=>'800000', 'navy'=>'000080', 'olive'=>'808000', 'purple'=>'800080', 'red'=>'FF0000', 'silver'=>'C0C0C0', 'teal'=>'008080', 'white'=>'FFFFFF', 'yellow'=>'FFFF00');
		// check if color keyword used, if so then convert to hex.
		if(isset($colorKeywords[$color]))
		{
			if($to == 'keyword')
			{
				return $color;
			}
			$color = $colorKeywords[$color];
		}
		// get rid of pound sign.
		if($color{0} == '#')
		{
			$color = substr($color, 1);
		}
		// check if RGB.
		if(substr($color, 0, 3) == 'rgb')
		{
			$color = str_replace(array('rgb', '(', ')', '{', '}', ';'), '', $color);
		}
		$dec = explode(',', $color);
		if(count($dec) == 3)
		{
			if($to == 'rgb')
			{
				// get rid of spaces.
				return "{$dec[0]},{$dec[1]},{$dec[2]}";
			}
			$color = str_pad($dec[0], 2, '0', STR_PAD_LEFT).str_pad($dec[1], 2, '0', STR_PAD_LEFT).str_pad($dec[2], 2, '0', STR_PAD_LEFT);
		}
		// hex, but convert if needed.
		if($to == 'keyword')
		{
			// gotta figure this out.
		}
		if($to == 'rgb')
		{
			$color = hexdec(substr($color, 0, 2)).','.hexdec(substr($color, 2, 2)).','.hexdec(substr($color, 4, 2));
		}
		return $color;
	}
}
