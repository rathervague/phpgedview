<?php
/**
 * Top-of-page menus for Wood theme
 *
 * PhpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
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
 * @subpackage Themes
 * @version $Id: toplinks.php 6988 2010-11-09 02:51:44Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

global $SEARCH_SPIDER;
$menubar = new MenuBar();

print "<br />\n";
$menu = $menubar->getGedcomMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getMygedviewMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getChartsMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getListsMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getCalendarMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getReportsMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getClippingsMenu();
if((!is_null($menu)) && ($menu->link != "")) {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getSearchMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menu = $menubar->getOptionalMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}
$menus = $menubar->getModuleMenus();
foreach($menus as $m=>$menu) {
	if($menu->link != "") {
		print "<br />\n";
		$menu->addLabel("", "right");
		$menu->printMenu();
	}
}
$menu = $menubar->getHelpMenu();
if($menu->link != "") {
	print "<br />\n";
	$menu->addLabel("", "right");
	$menu->printMenu();
}

print "<br />\n";
print_user_links();
print "<br />\n";
print "<br />\n";

if(empty($SEARCH_SPIDER)) {
	print contact_links();
	}
?>
</td>
</tr>
</table>
</div>
<!-- close div for div id="header" -->
<?php print "<div id=\"content\">\n"; ?>
