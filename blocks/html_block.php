<?php
/**
 * Simple HTML Block
 *
 * This block will print simple HTML text entered by an admin
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
 * @version $Id: html_block.php 6578 2009-12-20 09:51:08Z volschin $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_HTML_BLOCK_PHP', '');

$PGV_BLOCKS["print_html_block"]["name"]			= $pgv_lang["html_block_name"];
$PGV_BLOCKS["print_html_block"]["descr"]		= "html_block_descr";
$PGV_BLOCKS["print_html_block"]["canconfig"]= true;
$PGV_BLOCKS["print_html_block"]["config"]		= array(
	"cache"=>1,
	"html"=>$pgv_lang["html_block_sample_part1"]." <img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["admin"]["small"]."\" alt=\"".$pgv_lang["config_block"]."\" /> ".$pgv_lang["html_block_sample_part2"]
);

function print_html_block($block=true, $config="", $side, $index) {
	global $pgv_lang, $PGV_IMAGE_DIR, $TEXT_DIRECTION, $PGV_IMAGES, $HTML_BLOCK_COUNT, $PGV_BLOCKS, $ctype;

	if (empty($config)) $config = $PGV_BLOCKS["print_html_block"]["config"];
	if (!isset($HTML_BLOCK_COUNT)) $HTML_BLOCK_COUNT = 0;
	$HTML_BLOCK_COUNT++;

	$id = "html_block$HTML_BLOCK_COUNT";
	$title = "";

	$ct = preg_match("/#(.+)#/", $config["html"], $match);
	if ($ct>0) {
		if (isset($pgv_lang[$match[1]])) $config["html"] = str_replace($match[0], $pgv_lang[$match[1]], $config["html"]);
	}
	$ct = preg_match("/#(.+)#/", $config["html"], $match);
	if ($ct>0) {
		if (isset($pgv_lang[$match[1]])) $config["html"] = str_replace($match[0], $pgv_lang[$match[1]], $config["html"]);
		$varname = $match[1];
		if (!empty($$varname)) {
			$value = $$varname;
			$config["html"] = str_replace($match[0], $value, $config["html"]);
		}
	}
	$content = $config["html"];

	if ($PGV_BLOCKS["print_html_block"]["canconfig"]) {
		if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
			if ($ctype=="gedcom") {
				$name = PGV_GEDCOM;
			} else {
				$name = PGV_USER_NAME;
			}
			$content .= "<br /><a href=\"javascript:;\" onclick=\"window.open('".encode_url("index_edit.php?name={$name}&ctype={$ctype}&action=configure&side={$side}&index={$index}")."', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
			$content .= "<img class=\"adminicon\" src=\"$PGV_IMAGE_DIR/".$PGV_IMAGES["admin"]["small"]."\" width=\"15\" height=\"15\" border=\"0\" alt=\"".$pgv_lang["config_block"]."\" title=\"".$pgv_lang["config_block"]."\" /></a>\n";
		}
	}

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}

function print_html_block_config($config) {
	global $pgv_lang, $ctype, $PGV_BLOCKS, $TEXT_DIRECTION, $LANGUAGE, $language_settings;
	$useFCK = file_exists(PGV_ROOT.'modules/FCKeditor/fckeditor.php');
	if($useFCK){
		require PGV_ROOT.'modules/FCKeditor/fckeditor.php';
	}
	if (empty($config)) $config = $PGV_BLOCKS["print_html_block"]["config"];
	if (empty($config["cache"])) $config["cache"] = $PGV_BLOCKS["print_html_block"]["config"]["cache"];
	?>
	<tr>
	<td class="optionbox" colspan="2"><?php
	if ($useFCK) { // use FCKeditor module
		$oFCKeditor = new FCKeditor('html') ;
		$oFCKeditor->BasePath =  './modules/FCKeditor/';
		$oFCKeditor->Value = $config["html"];
		$oFCKeditor->Width = 700;
		$oFCKeditor->Height = 250;
		$oFCKeditor->Config['AutoDetectLanguage'] = false ;
		$oFCKeditor->Config['DefaultLanguage'] = $language_settings[$LANGUAGE]["lang_short_cut"];
		$oFCKeditor->Create() ;
	} else { //use standard textarea
		print "<textarea name=\"html\" rows=\"10\" cols=\"80\">" . str_replace("<", "&lt;", $config["html"]) ."</textarea>";
	}
	?></td>
	</tr>
	<?php
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
