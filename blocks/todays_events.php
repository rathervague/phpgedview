<?php
/**
 * On This Day Events Block
 *
 * This block will print a list of today's events
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
 * @version $Id: todays_events.php 6481 2009-11-28 20:17:25Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_TODAYS_EVENTS_PHP', '');

require_once PGV_ROOT.'includes/functions/functions_print_lists.php';

$PGV_BLOCKS["print_todays_events"]["name"]		= $pgv_lang["todays_events_block"];
$PGV_BLOCKS["print_todays_events"]["descr"]		= "todays_events_descr";
$PGV_BLOCKS["print_todays_events"]["infoStyle"]	= "style2";
$PGV_BLOCKS["print_todays_events"]["sortStyle"]	= "alpha";
$PGV_BLOCKS["print_todays_events"]["canconfig"]	= true;
$PGV_BLOCKS["print_todays_events"]["config"]	= array(
	"cache"=>1,
	"filter"=>"all",
	"onlyBDM"=>"no",
	"infoStyle"=>"style2",
	"sortStyle"=>"alpha",
	"allowDownload"=>"yes"
	);

//-- today's events block
//-- this block prints a list of today's upcoming events of living people in your gedcom
function print_todays_events($block=true, $config="", $side, $index) {
  global $pgv_lang, $SHOW_ID_NUMBERS, $ctype, $TEXT_DIRECTION;
  global $PGV_IMAGE_DIR, $PGV_IMAGES, $PGV_BLOCKS;

  $block = true;		// Always restrict this block's height

	$todayjd=client_jd();

  if (empty($config)) $config = $PGV_BLOCKS["print_todays_events"]["config"];
  if (isset($config["filter"])) $filter = $config["filter"];  // "living" or "all"
  else $filter = "all";
  if (isset($config["onlyBDM"])) $onlyBDM = $config["onlyBDM"];  // "yes" or "no"
  else $onlyBDM = "no";
  if (isset($config["infoStyle"])) $infoStyle = $config["infoStyle"];  // "style1" or "style2"
  else $infoStyle = "style2";
  if (isset($config["sortStyle"])) $sortStyle = $config["sortStyle"];  // "alpha" or "anniv"
  else $sortStyle = "alpha";
  if (isset($config["allowDownload"])) $allowDownload = $config["allowDownload"];	// "yes" or "no"
  else $allowDownload = "yes";

  // Don't permit calendar download if not logged in
  if (!PGV_USER_ID) $allowDownload = "no";

  //-- Start output
  $id ="on_this_day_events";
  $title = print_help_link("index_onthisday_help", "qm","",false,true);
  if ($PGV_BLOCKS["print_todays_events"]["canconfig"]) {
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
  $title .= $pgv_lang["on_this_day"];

  $content = "";
	switch ($infoStyle) {
	case "style1":
		// Output style 1:  Old format, no visible tables, much smaller text.  Better suited to right side of page.
		$content .= print_events_list($todayjd, $todayjd, $onlyBDM=='yes'?'BIRT MARR DEAT':'', $filter=='living', $sortStyle);
		break;
	case "style2":
		// Style 2: New format, tables, big text, etc.  Not too good on right side of page
		ob_start();
		$content .= print_events_table($todayjd, $todayjd, $onlyBDM=='yes'?'BIRT MARR DEAT':'', $filter=='living', $allowDownload=='yes', $sortStyle);
		$content .= ob_get_clean();
		break;
	}

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}

function print_todays_events_config($config) {
	global $pgv_lang, $PGV_BLOCKS;
	if (empty($config)) $config = $PGV_BLOCKS["print_todays_events"]["config"];
	if (!isset($config["filter"])) $config["filter"] = "all";
	if (!isset($config["onlyBDM"])) $config["onlyBDM"] = "no";
	if (!isset($config["infoStyle"])) $config["infoStyle"] = "style2";
	if (!isset($config["sortStyle"])) $config["sortStyle"] = "alpha";
	if (!isset($config["allowDownload"])) $config["allowDownload"] = "yes";

	?>
	<tr><td class="descriptionbox wrap width33">
	<?php
	print $pgv_lang["living_or_all"];
	?>
	</td><td class="optionbox">
		<select name="filter">
			<option value="all"<?php if ($config["filter"]=="all") print " selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
			<option value="living"<?php if ($config["filter"]=="living") print " selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
		</select>
	</td></tr>

	<tr><td class="descriptionbox wrap width33">
	<?php
	print_help_link("basic_or_all_help", "qm");
	print $pgv_lang["basic_or_all"];
	?>
	</td><td class="optionbox">
		<select name="onlyBDM">
			<option value="no"<?php if ($config["onlyBDM"]=="no") print " selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
			<option value="yes"<?php if ($config["onlyBDM"]=="yes") print " selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
		</select>
	</td></tr>

	<tr><td class="descriptionbox wrap width33">
	<?php
	print_help_link("style_help", "qm");
	print $pgv_lang["style"]."</td>";
	?>
	<td class="optionbox">
		<select name="infoStyle">
			<option value="style1"<?php if ($config["infoStyle"]=="style1") print " selected=\"selected\"";?>><?php print $pgv_lang["style1"]; ?></option>
			<option value="style2"<?php if ($config["infoStyle"]=="style2") print " selected=\"selected\"";?>><?php print $pgv_lang["style2"]; ?></option>
		</select>
	</td></tr>

	<tr><td class="descriptionbox wrap width33">
	<?php
	print_help_link("sort_style_help", "qm");
	print $pgv_lang["sort_style"]."</td>";
	?>
	<td class="optionbox">
		<select name="sortStyle">
			<option value="alpha"<?php if ($config["sortStyle"]=="alpha") print " selected=\"selected\"";?>><?php print $pgv_lang["by_alpha"]; ?></option>
			<option value="anniv"<?php if ($config["sortStyle"]=="anniv") print " selected=\"selected\"";?>><?php print $pgv_lang["by_anniv"]; ?></option>
		</select>
	</td></tr>

	<tr><td class="descriptionbox wrap width33">
	<?php
	print_help_link("cal_dowload_help", "qm");
	print $pgv_lang["cal_download"]."</td>";
	?>
	<td class="optionbox">
		<select name="allowDownload">
			<option value="yes"<?php if ($config["allowDownload"]=="yes") print " selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
			<option value="no"<?php if ($config["allowDownload"]=="no") print " selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
		</select>
		<input type="hidden" name="cache" value="1" />
	</td></tr>
  <?php
}
?>
