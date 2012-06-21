<?php
/**
 * Top-of-page menu for SimplyRed theme
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

$menubar = new MenuBar();
?>
<div>
	<table width="100%">
		<tr>
			<?php
			$menu = $menubar->getGedcomMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getMygedviewMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getChartsMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getListsMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getCalendarMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getReportsMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getClippingsMenu();
			if((!is_null($menu)) && ($menu->link != "")) {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getSearchMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menu = $menubar->getOptionalMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			$menus = $menubar->getModuleMenus();
			foreach($menus as $m=>$menu) {
				if($menu->link != "") {
					print "\t<td width=\"7%\" valign=\"top\">\n";
					$menu->addIcon(null);
					$menu->printMenu();
					print "\t</td>\n";
				}
			}
			$menu = $menubar->getHelpMenu();
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->addIcon(null);
				$menu->printMenu();
				print "\t</td>\n";
			}
			?>
		</tr>
	</table>
	<br />
</div>
</div>
<!-- close div for div id="header" -->
<?php print "<div id=\"content\" style=\"direction: $TEXT_DIRECTION;\">\n"; ?>
