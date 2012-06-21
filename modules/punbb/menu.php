<?php
/**
* Menu for punBB Module
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
* @subpackage Modules, punBB
* @version $Id: menu.php 6481 2009-11-28 20:17:25Z fisharebest $
* @author Patrick Kellum
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Load PGV embeding language file
global $language_settings, $LANGUAGE, $pgv_lang;
require_once PGV_ROOT.'modules/punbb/language/mod_en.php';
// Load other language file if needed
if ($language_settings[$LANGUAGE]['lang_short_cut'] != 'en' && file_exists(PGV_ROOT.'modules/punbb/language/mod_'.$language_settings[$LANGUAGE]['lang_short_cut'].'.php')) {
	require_once PGV_ROOT.'modules/punbb/language/mod_'.$language_settings[$LANGUAGE]['lang_short_cut'].'.php';
}

class punbb_ModuleMenu
{
	/**
	* get the punbb menu
	* @todo create a way to abstract menus for plugins
	* @return Menu the menu item
	*/
	function &getMenu()
	{
		global $TEXT_DIRECTION, $PGV_IMAGE_DIR, $PGV_IMAGES, $GEDCOM, $pgv_lang;
		global $gallery;
		if(!file_exists('modules/punbb.php') || !file_exists('modules/punbb/config.php')){return null;}

		if($TEXT_DIRECTION == 'rtl'){$ff = '_rtl';}else{$ff = '';}

		// punBB
		$menu = new Menu($pgv_lang['mod_punbb'], 'module.php?mod=punbb', 'down');
		if(!empty($PGV_IMAGES['menu_punbb']['large'])){$menu->addIcon("{$PGV_IMAGE_DIR}/{$PGV_IMAGES['menu_punbb']['large']}");}
		$menu->addClass("menuitem{$ff}", "menuitem_hover{$ff}", "submenu{$ff}", "icon_large_menu_punbb");

		// Search
		$submenu = new Menu($pgv_lang['mod_punbb_search'], 'module.php?mod=punbb&amp;pgvaction=search');
		$submenu->addIcon("{$PGV_IMAGE_DIR}/{$PGV_IMAGES['search']['small']}");
		$submenu->addClass("submenuitem{$ff}", "submenuitem_hover{$ff}", "", "icon_small_search");
		$menu->addSubmenu($submenu);

		// Site Admin
		if(userIsAdmin(getUserName()))
		{
			$submenu = new Menu();$submenu->isSeparator();$menu->addSubmenu($submenu);

			$submenu = new Menu($pgv_lang['mod_punbb_admin'], 'module.php?mod=punbb&amp;pgvaction=admin_index');
			$submenu->addIcon("{$PGV_IMAGE_DIR}/{$PGV_IMAGES['admin']['small']}");
			$submenu->addClass("submenuitem{$ff}", "submenuitem_hover{$ff}", "", "icon_small_admin");
			$menu->addSubmenu($submenu);
		}

		return $menu;
	}
}
?>
