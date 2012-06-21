<?php
/**
 * Getting Started Block
 *
 * Prints out a helpful menu to help users get started
 *
 * Admins
 *  - upload a gedcom
 *  - start entering data
 *  - Add a gedcom on the server
 *  - Manage GEDCOMs
 *  - Admin Users
 * Editors
 * Users
 * Visitors
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008  PGV Development Team.  All rights reserved.
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
 * @version $Id: getting_started.php 6459 2009-11-25 23:52:17Z fisharebest $
 * @package PhpGedView
 * @subpackage Blocks
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_GETTING_STARTED_BLOCK_PHP', '');



$PGV_BLOCKS["getting_started_block"]["name"]		= $pgv_lang["install_step_8"];
$PGV_BLOCKS["getting_started_block"]["descr"]		= "gedcom_descr";
$PGV_BLOCKS["getting_started_block"]["type"]		= "none";
$PGV_BLOCKS["getting_started_block"]["canconfig"]	= false;
$PGV_BLOCKS["getting_started_block"]["config"]		= array("cache"=>5);

//-- function to print the gedcom block
function getting_started_block($block = true, $config="", $side, $index) {
	global $pgv_lang, $SHOW_COUNTER;

	$id = "getting_started";
	$title = $pgv_lang["install_step_8"];
	$content = $pgv_lang['get_started_instructions'];
	$content .= '<ul>';
	$content .= '<li style="padding: 5px;"><a class="imenu" href="editconfig_gedcom.php?source=upload_form">'.$pgv_lang['upload_a_gedcom'].'</a></li>';
	// -- not read yet, need to design a new page for it
	// $content .= '<li style="padding: 5px;"><a class="imenu" href="#">'.$pgv_lang['start_entering'].'</a></li>';
	$content .= '<li style="padding: 5px;"><a class="imenu" href="editconfig_gedcom.php?source=add_form">'.$pgv_lang['add_gedcom_from_path'].'</a></li>';
	$content .= '<li style="padding: 5px;"><a class="imenu" href="editgedcoms.php">'.$pgv_lang['manage_gedcoms'].'</a></li>';
	$content .= '<li style="padding: 5px;"><a class="imenu" href="useradmin.php">'.$pgv_lang["user_admin"].'</a></li>';
	$content .= '<li style="padding: 5px;"><a class="imenu" href="admin.php">'.$pgv_lang["admin"].'</a></li>';
	$content .= '</ul>';

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'/templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'/templates/block_main_temp.php';
	}
}
?>
