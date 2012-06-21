<?php
/**
 * Login/Logout Block
 *
 * This block prints a form that will allow a user to login
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
 * @version $Id: login_block.php 6879 2010-01-30 11:35:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_LOGIN_BLOCK_PHP', '');

$PGV_BLOCKS["print_login_block"]["name"]		= $pgv_lang["login_block"];
$PGV_BLOCKS["print_login_block"]["descr"]		= "login_descr";
$PGV_BLOCKS["print_login_block"]["type"]		= "both";		// On Portal page, this becomes a Logout block
$PGV_BLOCKS["print_login_block"]["canconfig"]	= false;
$PGV_BLOCKS["print_login_block"]["config"]		= array("cache"=>0);

/**
 * Print Login Block
 *
 * Prints a block allowing the user to login to the site directly from the portal
 */
function print_login_block($block = true, $config="", $side, $index) {
	global $pgv_lang, $QUERY_STRING, $USE_REGISTRATION_MODULE, $LOGIN_URL;
	global $TEXT_DIRECTION;

	if (PGV_USER_ID) {
		$id="logout_block";
		$title = $pgv_lang["logout"];

		$i = 0;			// Initialize tab index

		$content = '<div class="center"><form method="post" action="index.php?logout=1" name="logoutform" onsubmit="return true;">';
		$content .= '<br /><a href="edituser.php" class="name2">'.$pgv_lang["logged_in_as"].' ('.PGV_USER_NAME.')</a><br /><br />';

		$i++;
		$content .= "<input type=\"submit\" tabindex=\"{$i}\" value=\"".$pgv_lang["logout"]."\" />";

		$content .= "<br /><br /></form></div>";
	} else {
		$id="login_block";
		$title = "";

		$i = 0;			// Initialize tab index

		if ($USE_REGISTRATION_MODULE) $title .= print_help_link("index_login_register_help", "qm", "", false, true);
		else $title .= print_help_link("index_login_help", "qm", "", false, true);
		$title .= $pgv_lang["login"];
		$content = "<div class=\"center\"><form method=\"post\" action=\"$LOGIN_URL\" name=\"loginform\" onsubmit=\"t = new Date(); document.loginform.usertime.value=t.getFullYear()+'-'+(t.getMonth()+1)+'-'+t.getDate()+' '+t.getHours()+':'+t.getMinutes()+':'+t.getSeconds(); return true;\">";
		$content .= "<input type=\"hidden\" name=\"url\" value=\"index.php\" />";
		$content .= "<input type=\"hidden\" name=\"ged\" value=\"";
		$content .= PGV_GEDCOM;
		$content .= "\" />";
		$content .= "<input type=\"hidden\" name=\"pid\" value=\"";
		if (isset($pid)) $content .= $pid;
		$content .= "\" />";
		$content .= "<input type=\"hidden\" name=\"usertime\" value=\"\" />";
		$content .= "<input type=\"hidden\" name=\"action\" value=\"login\" />";
		$content .= "<table class=\"center tabs_table\">";

		// Row 1: Userid
		$i++;
		$content .= "<tr><td ";
		$content .= write_align_with_textdir_check("right", true);
		$content .= " class=\"{$TEXT_DIRECTION} wrap width50\">";
		$content .= print_help_link("username_help", "qm", "username", false, true);
		$content .= $pgv_lang["username"]."</td>";
		$content .= "<td ";
		$content .= write_align_with_textdir_check("left", true);
		$content .= " class=\"{$TEXT_DIRECTION}\"><input type=\"text\" tabindex=\"{$i}\" name=\"username\"  size=\"20\" class=\"formField\" />";
		$content .= "</td></tr>";

		// Row 2: Password
		$i++;
		$content .= "<tr><td ";
		$content .= write_align_with_textdir_check("right", true);
		$content .= " class=\"{$TEXT_DIRECTION} wrap width50\">";
		$content .= print_help_link("password_help", "qm", "password", false, true);
		$content .= $pgv_lang["password"]."</td>";
		$content .= "<td ";
		$content .= write_align_with_textdir_check("left", true);
		$content .= " class=\"{$TEXT_DIRECTION}\"><input type=\"password\" tabindex=\"{$i}\" name=\"password\"  size=\"20\" class=\"formField\" />";
		$content .= "</td></tr>";

		// Row 3: "Login" link
		$i++;
		$content .= "<tr><td colspan=\"2\" class=\"center\">";
		$content .= "<input type=\"submit\" tabindex=\"{$i}\" value=\"".$pgv_lang["login"]."\" />&nbsp;";
		$content .= "</td></tr>";

		if ($USE_REGISTRATION_MODULE) {

			// Row 4: "Request Account" link
			$i++;
			$content .= "<tr><td ";
			$content .= write_align_with_textdir_check("right", true);
			$content .= " class=\"{$TEXT_DIRECTION} wrap width50\"><br />";
			$content .= print_help_link("new_user_help", "qm", "", false, true);
			$content .= $pgv_lang["no_account_yet"]."</td>";
			$content .= "<td ";
			$content .= write_align_with_textdir_check("left", true);
			$content .= " class=\"{$TEXT_DIRECTION}\"><br />";
			$content .= "<a href=\"login_register.php?action=register\" tabindex=\"{$i}\">";
			$content .= $pgv_lang["requestaccount"];
			$content .= "</a>";
			$content .= "</td></tr>";

			// Row 5: "Lost Password" link
			$i++;
			$content .= "<tr><td ";
			$content .= write_align_with_textdir_check("right", true);
			$content .= " class=\"{$TEXT_DIRECTION} wrap width50\">";
			$content .= print_help_link("new_password_help", "qm", "", false, true);
			$content .= $pgv_lang["lost_password"]."</td>";
			$content .= "<td ";
			$content .= write_align_with_textdir_check("left", true);
			$content .= " class=\"{$TEXT_DIRECTION}\">";
			$content .= "<a href=\"login_register.php?action=pwlost\" tabindex=\"{$i}\">";
			$content .= $pgv_lang["requestpassword"];
			$content .= "</a>";
			$content .= "</td></tr>";
		}

		$content .= "</table>";
		$content .= "</form></div>";
	}

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}
?>
