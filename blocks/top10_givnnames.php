<?php
/**
 * Top 10 Given Names Block
 *
 * This block will show the top 10 given names that occur most frequently in the active gedcom
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008  PGV Development Team.  All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License or,
 * at your discretion, any later version.
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
 * @version $Id: top10_givnnames.php 6459 2009-11-25 23:52:17Z fisharebest $
 * @author kiwi_pgv
 * @package PhpGedView
 * @subpackage Blocks
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_TOP10_GIVNNAMES_PHP', '');

$PGV_BLOCKS["print_block_givn_top10"]["name"]		= $pgv_lang["block_givn_top10"];
$PGV_BLOCKS["print_block_givn_top10"]["descr"]		= "block_givn_top10_descr";
$PGV_BLOCKS["print_block_givn_top10"]["type"]		= "both";
$PGV_BLOCKS["print_block_givn_top10"]["infoStyle"]	= "style2";
$PGV_BLOCKS["print_block_givn_top10"]["canconfig"]	= true;
$PGV_BLOCKS["print_block_givn_top10"]["config"]		= array(
	"cache"=>7,
	"num"=>10,
	"infoStyle"=>"style2",
	"showUnknown"=>"yes"
	);

/**
 * Print First Names Block
 */
function print_block_givn_top10($block=true, $config="", $side, $index) {
	global $pgv_lang, $TEXT_DIRECTION, $PGV_BLOCKS, $ctype, $PGV_IMAGES, $PGV_IMAGE_DIR;

	if (empty($config)) $config = $PGV_BLOCKS["print_block_givn_top10"]["config"];
	if (isset($config["infoStyle"])) $infoStyle = $config["infoStyle"];  // "style1" or "style2"
	else $infoStyle = "style2";
	if (isset($config["showUnknown"])) $showUnknown = $config["showUnknown"];  // "yes" or "no"
	else $showUnknown = "yes";

	$stats=new Stats(PGV_GEDCOM);

	//Print block header

	$id="top10givennames";
	$title = print_help_link("index_common_given_names_help", "qm","",false,true);
	if ($PGV_BLOCKS["print_block_givn_top10"]["canconfig"]) {
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
	$title .= str_replace("10", $config["num"], $pgv_lang["block_givn_top10_title"]);

	$content = '<div class="normal_inner_block">';
	//Select List or Table
	switch ($infoStyle) {
	case "style1":	// Output style 1:  Simple list style.  Better suited to left side of page.
		if ($TEXT_DIRECTION=='ltr') $padding = 'padding-left: 15px';
		else $padding = 'padding-right: 15px';
		$params=array(1,$config['num'],'rcount');
		//List Female names
		$totals=$stats->commonGivenFemaleTotals($params);
		if ($totals) {
			$content.='<b>'.$pgv_lang['female'].'</b><div class="wrap" style="'.$padding.'">'.$totals.'</div><br />';
		}
		//List Male names
		$totals=$stats->commonGivenMaleTotals($params);
		if ($totals) {
			$content.='<b>'.$pgv_lang['male'].'</b><div class="wrap" style="'.$padding.'">'.$totals.'</div><br />';
		}
		//List Unknown names
		$totals=$stats->commonGivenUnknownTotals($params);
		if ($totals && $showUnknown=="yes") {
			$content.='<b>'.$pgv_lang['unknown'].'</b><div class="wrap" style="'.$padding.'">'.$totals.'</div><br />';
		}
		break;
	case "style2":	// Style 2: Tabular format.  Narrow, 2 or 3 column table, good on right side of page
		$params=array(1,$config['num'],'rcount');
		$content.='<table class="center"><tr valign="top"><td>'.$stats->commonGivenFemaleTable($params).'</td>';
		$content.='<td>'.$stats->commonGivenMaleTable($params).'</td>';
		if ($showUnknown=="yes") {
			$content.='<td>'.$stats->commonGivenUnknownTable($params).'</td>';
		}
		$content.='</tr></table>';
		break;
	}
	$content .=  "</div>";

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}

function print_block_givn_top10_config($config) {
	global $pgv_lang, $ctype, $PGV_BLOCKS, $TEXT_DIRECTION;
	if (empty($config)) $config = $PGV_BLOCKS["print_block_givn_top10"]["config"];
	if (!isset($config["cache"])) $config["cache"] = $PGV_BLOCKS["print_block_givn_top10"]["config"]["cache"];
	if (!isset($config["infoStyle"])) $config["infoStyle"] = "style2";
	if (!isset($config["showUnknown"])) $config["showUnknown"] = "yes";

	print "<tr><td class=\"descriptionbox wrap width33\">".$pgv_lang["num_to_show"]."</td>";?>
	<td class="optionbox">
		<input type="text" name="num" size="2" value="<?php print $config["num"]; ?>" />
	</td></tr>

	<tr><td class="descriptionbox wrap width33">
	<?php
	print_help_link("style_help", "qm");
	print $pgv_lang["style"];
	?>
	</td><td class="optionbox">
		<select name="infoStyle">
			<option value="style1"<?php if ($config["infoStyle"]=="style1") print " selected=\"selected\"";?>><?php print $pgv_lang["style1"]; ?></option>
			<option value="style2"<?php if ($config["infoStyle"]=="style2") print " selected=\"selected\"";?>><?php print $pgv_lang["style2"]; ?></option>
		</select>
	</td></tr>

	<tr><td class="descriptionbox wrap width33">
	<?php
	print_help_link("showUnknown_help", "qm");
	print $pgv_lang["showUnknown"];
	?>
	</td><td class="optionbox">
		<select name="showUnknown">
			<option value="yes"<?php if ($config["showUnknown"]=="yes") print " selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
			<option value="no"<?php if ($config["showUnknown"]=="no") print " selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
		</select>
	</td></tr>

<?php	// Cache file life
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
