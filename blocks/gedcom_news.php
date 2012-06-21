<?php
/**
 * Gedcom News Block
 *
 * This block allows administrators to enter news items for the active gedcom
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @subpackage Blocks
 * @version $Id: gedcom_news.php 6578 2009-12-20 09:51:08Z volschin $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_GEDCOM_NEWS_PHP', '');

$PGV_BLOCKS['print_gedcom_news']['name']		= $pgv_lang['gedcom_news_block'];
$PGV_BLOCKS['print_gedcom_news']['descr']		= 'gedcom_news_descr';
$PGV_BLOCKS['print_gedcom_news']['type']		= 'gedcom';
$PGV_BLOCKS['print_gedcom_news']['canconfig']	= true;
$PGV_BLOCKS['print_gedcom_news']['config']		= array(
	'cache'=>7,
	'limit' => 'nolimit',
	'flag' => 0
);

/**
 * Prints a gedcom news/journal
 *
 * @todo Add an allowed HTML translation
 */
function print_gedcom_news($block = true, $config='', $side, $index)
{
	global $pgv_lang, $PGV_IMAGE_DIR, $PGV_IMAGES, $TEXT_DIRECTION, $ctype, $PGV_BLOCKS;

	if(empty($config)) {
		$config = $PGV_BLOCKS['print_gedcom_news']['config'];
	}
	if ($config['flag'] == 0) {
		$config['limit'] = 'nolimit';
	}
	if (isset($_REQUEST['gedcom_news_archive'])) {
		$config['limit'] = 'nolimit';
		$config['flag'] = 0;
	}

	$usernews = getUserNews(PGV_GEDCOM);

	$id = "gedcom_news";
	$title = "";
	if(PGV_USER_GEDCOM_ADMIN) {
		$title .= print_help_link('index_gedcom_news_ahelp', 'qm_ah',"", false, true);
	} else {
		$title .= print_help_link('index_gedcom_news_help', 'qm', "", false, true);
	}
	if ($PGV_BLOCKS['print_gedcom_news']['canconfig']) {
		if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
			if ($ctype=="gedcom") {
				$name = PGV_GEDCOM;
			} else {
				$name = PGV_USER_NAME;
			}
			$title .= "<a href=\"javascript: configure block\" onclick=\"window.open('index_edit.php?name={$name}&amp;ctype={$ctype}&amp;action=configure&amp;side={$side}&amp;index={$index}', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">"
			."<img class=\"adminicon\" src=\"{$PGV_IMAGE_DIR}/{$PGV_IMAGES['admin']['small']}\" width=\"15\" height=\"15\" border=\"0\" alt=\"{$pgv_lang['config_block']}\" /></a>\n"
			;
		}
	}
	$title .= $pgv_lang['gedcom_news'];
	$content = "";
	if(count($usernews) == 0)
	{
		$content .= $pgv_lang['no_news'].'<br />';
	}
	$c = 0;
	$td = time();
	foreach($usernews as $news)
	{
		if ($config['limit'] == 'count') {
			if ($c >= $config['flag']) {
				break;
			}
			$c++;
		}
		if ($config['limit'] == 'date') {
			if (floor(($td - $news['date']) / 86400) > $config['flag']) {
				break;
			}
		}
		//		print "<div class=\"person_box\" id=\"{$news['anchor']}\">\n";
		$content .= "<div class=\"news_box\" id=\"{$news['anchor']}\">\n";

		// Look for $pgv_lang, $factarray, and $GLOBALS substitutions in the News title
		$newsTitle = print_text($news['title'], 0, 2);
		$ct = preg_match("/#(.+)#/", $newsTitle, $match);
		if($ct > 0) {
			if(isset($pgv_lang[$match[1]])) {
				$newsTitle = str_replace("$match[0]", $pgv_lang[$match[1]], $newsTitle);
			}
		}
		$content .= "<span class=\"news_title\">".PrintReady($newsTitle)."</span><br />\n";
		$content .= "<span class=\"news_date\">".format_timestamp($news['date'])."</span><br /><br />\n";

		// Look for $pgv_lang, $factarray, and $GLOBALS substitutions in the News text
		$newsText = print_text($news['text'], 0, 2);
		$ct = preg_match("/#(.+)#/", $newsText, $match);
		if($ct > 0) {
			if(isset($pgv_lang[$match[1]])) {
				$newsText = str_replace("$match[0]", $pgv_lang[$match[1]], $newsText);
			}
		}
		$ct = preg_match("/#(.+)#/", $newsText, $match);
		if ($ct > 0) {
			$varname = $match[1];
			if (isset($pgv_lang[$varname])) {
				$newsText = str_replace("$match[0]", $pgv_lang[$varname], $newsText);
			} else {
				if (defined('PGV_'.$varname)) {
					// e.g. global $VERSION is now constant PGV_VERSION
					$varname='PGV_'.$varname;
				}
				if (defined($varname)) {
					$newsText = str_replace("$match[0]", constant($varname), $newsText);
				} else {
					if (isset($$varname)) {
						$newsText = str_replace("$match[0]", $$varname, $newsText);
					}
				}
			}
		}
		$trans = get_html_translation_table(HTML_SPECIALCHARS);
		$trans = array_flip($trans);
		$newsText = strtr($newsText, $trans);
		$newsText = nl2br($newsText);
		$content .= PrintReady($newsText)."<br />\n";

		// Print Admin options for this News item
		if(PGV_USER_GEDCOM_ADMIN) {
			$content .= "<hr size=\"1\" />"
			."<a href=\"javascript:;\" onclick=\"editnews('".$news['id']."'); return false;\">{$pgv_lang['edit']}</a> | "
			."<a href=\"".encode_url("index.php?action=deletenews&news_id=".$news['id']."&ctype={$ctype}")."\" onclick=\"return confirm('{$pgv_lang['confirm_news_delete']}');\">{$pgv_lang['delete']}</a><br />";
		}
		$content .= "</div>\n";
	}
	$printedAddLink = false;
	if (PGV_USER_GEDCOM_ADMIN) {
		$content .= "<a href=\"javascript:;\" onclick=\"addnews('".urlencode(PGV_GEDCOM)."'); return false;\">".$pgv_lang["add_news"]."</a>";
		$printedAddLink = true;
	}
	if ($config['limit'] == 'date' || $config['limit'] == 'count') {
		if ($printedAddLink) $content .= "&nbsp;&nbsp;|&nbsp;&nbsp;";
		$content .= print_help_link("gedcom_news_archive_help", "qm", "", false, true);
		$content .= "<a href=\"".encode_url("index.php?gedcom_news_archive=yes&ctype={$ctype}")."\">".$pgv_lang['gedcom_news_archive']."</a><br />";
	}

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}

function print_gedcom_news_config($config)
{
	global $pgv_lang, $ctype, $PGV_BLOCKS;
	if (empty ($config)) $config = $PGV_BLOCKS["print_gedcom_news"]["config"];
	if (!isset ($config["limit"])) $config["limit"] = "nolimit";
	if (!isset ($config["flag"])) $config["flag"] = 0;
	if (!isset($config["cache"])) $config["cache"] = $PGV_BLOCKS["print_gedcom_news"]["config"]["cache"];

	// Limit Type
	print '<tr><td class="descriptionbox wrap width33">';
	print_help_link("gedcom_news_limit_help", "qm");
	print $pgv_lang['gedcom_news_limit'].'</td>';
	$output = '<td class="optionbox">'
	.'<select name="limit">'
	.'<option value="nolimit"'.($config['limit'] == 'nolimit'?' selected="selected"':'').">{$pgv_lang['gedcom_news_limit_nolimit']}</option>\n"
	.'<option value="date"'.($config['limit'] == 'date'?' selected="selected"':'').">{$pgv_lang['gedcom_news_limit_date']}</option>\n"
	.'<option value="count"'.($config['limit'] == 'count'?' selected="selected"':'').">{$pgv_lang['gedcom_news_limit_count']}</option>\n"
	.'</select></td></tr>'
	;
	print $output;

	// Flag to look for
	print '<tr><td class="descriptionbox wrap width33">';
	print_help_link("gedcom_news_flag_help", "qm");
	print $pgv_lang['gedcom_news_flag'].'</td>';
	$output = '<td class="optionbox"><input type="text" name="flag" size="4" maxlength="4" value="'
	.$config['flag']
	.'" /></td></tr>';
	print $output;

	// Cache file life
	if ($ctype=="gedcom") {
		print "<tr><td class=\"descriptionbox wrap width33\">";
		print_help_link("cache_life_help", "qm");
		print $pgv_lang["cache_life"];
		print "</td><td class=\"optionbox\">";
		print "<input type=\"text\" name=\"cache\" size=\"2\" value=\"".$config["cache"]."\" />";
		print "</td></tr>";
	}
}
?>
