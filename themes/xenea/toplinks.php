<?php
/**
 * Top-of-page menu for Xenea theme
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
<table width="100%" border="0" cellspacing="0" cellpadding="4" bgcolor="#FFFFFF" style="border: 1px solid #84beff">
  <tr>
    <td>
      <div align="center">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
	  <tr>
		<td width="10">
			&nbsp;
		</td>
		<?php
		$menu = $menubar->getHomeMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getGedcomMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getMygedviewMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getChartsMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getListsMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getCalendarMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getReportsMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getClippingsMenu();
		if ((!is_null($menu)) && ($menu->link != "")) { ?>
			<td width="7%" valign="top"><?php $menu->printMenu(); ?></td>
			<?php
		}
		$menu = $menubar->getSearchMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menu = $menubar->getOptionalMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		$menus = $menubar->getModuleMenus();
		foreach($menus as $m=>$menu) {
			if($menu->link != "") {
				print "\t<td width=\"7%\" valign=\"top\">\n";
				$menu->printMenu();
				print "\t</td>\n";
			}
		}
		$menu = $menubar->getHelpMenu();
		if($menu->link != "") {
			print "\t<td width=\"7%\" valign=\"top\">\n";
			$menu->printMenu();
			print "\t</td>\n";
		}
		?>
		<td width="10">
			&nbsp;
		</td>
	  </tr>
        </table>
      </div>
    </td>
  </tr>
</table>
</td></tr></table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-image:url('<?php print $PGV_IMAGE_DIR; ?>/sombra.gif'); height:4px;">
	<tr>
		<td><img src="<?php print $PGV_IMAGE_DIR; ?>/pixel.gif" width="1" height="1" alt="" /></td>
	</tr>
</table>
<br />
</div>
<!-- close div for div id="header" -->
<?php print "<div id=\"content\">\n"; ?>
