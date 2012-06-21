<?php
/**
 * User Welcome Block
 *
 * This block will print basic information and links for the user.
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
 * @version $Id: user_welcome.php 6578 2009-12-20 09:51:08Z volschin $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_USER_WELCOME_PHP', '');

$PGV_BLOCKS["print_welcome_block"]["name"]		= $pgv_lang["welcome_block"];
$PGV_BLOCKS["print_welcome_block"]["descr"]		= "welcome_descr";
$PGV_BLOCKS["print_welcome_block"]["type"]		= "user";
$PGV_BLOCKS["print_welcome_block"]["canconfig"]	= false;
$PGV_BLOCKS["print_welcome_block"]["config"]	= array("cache"=>0);

//-- function to print the welcome block
function print_welcome_block($block=true, $config="", $side, $index) {
	global $pgv_lang, $PGV_IMAGE_DIR, $PGV_IMAGES;

	$id="user_welcome";
	$title = $pgv_lang["welcome"]." ".getUserFullName(PGV_USER_ID);

	$content = "<table class=\"blockcontent\" cellspacing=\"0\" cellpadding=\"0\" style=\" width: 100%; direction:ltr;\"><tr>";
	$content .= "<td class=\"tab_active_bottom\" colspan=\"3\" ></td></tr><tr>";
	if (get_user_setting(PGV_USER_ID, 'editaccount')=='Y') {
		$content .= "<td class=\"center details2\" style=\" width: 33%; clear: none; vertical-align: top; margin-top: 2px;\"><a href=\"edituser.php\"><img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["mygedview"]["small"]."\" border=\"0\" alt=\"".$pgv_lang["myuserdata"]."\" title=\"".$pgv_lang["myuserdata"]."\" /><br />".$pgv_lang["myuserdata"]."</a></td>";
	}
	if (PGV_USER_GEDCOM_ID) {
		$content .= "<td class=\"center details2\" style=\" width: 34%; clear: none; vertical-align: top; margin-top: 2px;\"><a href=\"".encode_url("pedigree.php?rootid=".PGV_USER_GEDCOM_ID)."\"><img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["pedigree"]["small"]."\" border=\"0\" alt=\"".$pgv_lang["my_pedigree"]."\" title=\"".$pgv_lang["my_pedigree"]."\" /><br />".$pgv_lang["my_pedigree"]."</a></td>";
		$content .= "<td class=\"center details2\" style=\" width: 33%; clear: none; vertical-align: top; margin-top: 2px;\"><a href=\"".encode_url("individual.php?pid=".PGV_USER_GEDCOM_ID)."\"><img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["indis"]["small"]."\" border=\"0\" alt=\"".$pgv_lang["my_indi"]."\" title=\"".$pgv_lang["my_indi"]."\" /><br />".$pgv_lang["my_indi"]."</a></td>";
	}
	$content .= "</tr><tr><td class=\"center\" colspan=\"3\">";
	$content .= print_help_link("mygedview_customize_help", "qm","",false,true);
	$content .= "<a href=\"javascript:;\" onclick=\"window.open('".encode_url("index_edit.php?name=".PGV_USER_NAME."&ctype=user")."', '_blank', 'top=50,left=10,width=600,height=350,scrollbars=1,resizable=1');\">".$pgv_lang["customize_page"]."</a>";
	$content .= "<br />".format_timestamp(client_time());
	$content .= "</td>";
	$content .= "</tr></table>";

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}
?>
