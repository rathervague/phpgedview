<?php
/**
 * Top 10 Surnames Block
 *
 * This block will show the top 10 surnames that occur most frequently in the active gedcom
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
 * @version $Id: top10_surnames.php 6459 2009-11-25 23:52:17Z fisharebest $
 * @package PhpGedView
 * @subpackage Blocks
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_TOP10SURNAMES_PHP', '');

$PGV_BLOCKS["print_block_name_top10"]["name"]		= $pgv_lang["block_top10"];
$PGV_BLOCKS["print_block_name_top10"]["descr"]		= "block_top10_descr";
$PGV_BLOCKS["print_block_name_top10"]["canconfig"]	= true;
$PGV_BLOCKS["print_block_name_top10"]["config"]		= array(
	"cache"=>7,
	"num"=>10,
	);

function top_surname_sort($a, $b) {
	$counta=0;
	foreach ($a as $x) {
		$counta+=count($x);
	}
	$countb=0;
	foreach ($b as $x) {
		$countb+=count($x);
	}
	return $countb - $counta;
}

function print_block_name_top10($block=true, $config="", $side, $index) {
	global $pgv_lang, $COMMON_NAMES_ADD, $COMMON_NAMES_REMOVE, $COMMON_NAMES_THRESHOLD, $PGV_BLOCKS, $ctype, $PGV_IMAGES, $PGV_IMAGE_DIR, $SURNAME_LIST_STYLE;

	if (empty($config)) {
		$config=$PGV_BLOCKS["print_block_name_top10"]["config"];
	}

	// This next function is a bit out of date, and doesn't cope well with surname variants
	$top_surnames=get_top_surnames(PGV_GED_ID, 1, $config["num"]);

	$all_surnames=array();
	foreach (array_keys($top_surnames) as $top_surname) {
		$all_surnames=array_merge($all_surnames, get_indilist_surns($top_surname, '', false, false, PGV_GED_ID));
	}

	// Insert from the "Add Names" list if not already in there
	if ($COMMON_NAMES_ADD) {
		foreach (preg_split('/[,; ]+/', $COMMON_NAMES_ADD) as $addname) {
			$ADDNAME=UTF8_strtoupper($addname);
			if (isset($all_surnames[$ADDNAME])) {
				$SURNAME=$ADDNAME;
				foreach (array_keys($all_surnames[$ADDNAME]) as $surname) {
					if ($SURNAME!=$surname && $SURNAME==UTF8_strtoupper($surname)) {
						$all_surnames[$ADDNAME][$SURNAME]=$all_surnames[$ADDNAME][$surname];
						unset ($all_surnames[$ADDNAME][$surname]);
					}
				}
				if (isset($all_surnames[$ADDNAME][$SURNAME])) {
					$n=count($all_surnames[$ADDNAME][$SURNAME]);
					$all_surnames[$ADDNAME][$SURNAME]=array_fill(0, max($n, $COMMON_NAMES_THRESHOLD), true);
				} else {
					$all_surnames[$ADDNAME][$SURNAME]=array_fill(0, $COMMON_NAMES_THRESHOLD, true);
				}
			} else {
				$all_surnames[$ADDNAME][$ADDNAME]=array_fill(0, $COMMON_NAMES_THRESHOLD, true);
			}
		}
	}

	// Remove names found in the "Remove Names" list
	if ($COMMON_NAMES_REMOVE) {
		foreach (preg_split("/[,; ]+/", $COMMON_NAMES_REMOVE) as $delname) {
			unset($all_surnames[UTF8_strtoupper($delname)]);
		}
	}

	$id="top10surnames";
	$title = print_help_link("index_common_names_help", "qm","",false,true);
	if ($PGV_BLOCKS["print_block_name_top10"]["canconfig"]) {
		if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
			if ($ctype=="gedcom") {
				$name = PGV_GEDCOM;
			} else {
				$name = PGV_USER_NAME;
			}
			$title .= "<a href=\"javascript: configure block\" onclick=\"window.open('".encode_url("index_edit.php?name={$name}&ctype={$ctype}&action=configure&side={$side}&index={$index}")."', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
			$title .= "<img class=\"adminicon\" src=\"$PGV_IMAGE_DIR/".$PGV_IMAGES["admin"]["small"]."\" width=\"15\" height=\"15\" border=\"0\" alt=\"".$pgv_lang["config_block"]."\" /></a>";
		}
	}
	$title .= str_replace("10", $config["num"], $pgv_lang["block_top10_title"]);

	switch ($SURNAME_LIST_STYLE) {
	case 'style3':
		uksort($all_surnames,'stringsort');	
		$content=format_surname_tagcloud($all_surnames, 'indilist', true);
		break;
	case 'style2':
	default:
		uasort($all_surnames, "top_surname_sort");	
		$content=format_surname_table($all_surnames, 'indilist');
		break;
	}

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}

function print_block_name_top10_config($config) {
	global $pgv_lang, $ctype, $PGV_BLOCKS;
	if (empty($config)) $config = $PGV_BLOCKS["print_block_name_top10"]["config"];
	if (!isset($config["cache"])) $config["cache"] = $PGV_BLOCKS["print_block_name_top10"]["config"]["cache"];
?>
	<tr>
		<td class="descriptionbox wrap width33"><?php print $pgv_lang["num_to_show"] ?></td>
	<td class="optionbox">
		<input type="text" name="num" size="2" value="<?php print $config["num"]; ?>" />
	</td></tr>

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
