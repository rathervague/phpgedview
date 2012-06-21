<?php
/**
 * Menu for Gallery 2 Module
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
 * @subpackage Modules, Gallery2
 * @version $Id: menu.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Patrick Kellum
 */
//-- security check, only allow access from module.php
if(strstr($_SERVER['SCRIPT_NAME'], 'menu.php')){print "Now, why would you want to do that.  You're not hacking are you?";exit;}

//require_once PGV_ROOT.'modules/gallery2/pgv.php';
//mod_gallery2_load(getUserName());

// Load PGV embeding language file
global $language_settings, $LANGUAGE, $pgv_lang;
require_once PGV_ROOT.'modules/gallery2/language/mod_en.php';
// Load other language file if needed
if ($language_settings[$LANGUAGE]['lang_short_cut'] != 'en' && file_exists('./modules/gallery2/language/mod_'.$language_settings[$LANGUAGE]['lang_short_cut'].'.php')) {
	require_once PGV_ROOT.'modules/gallery2/language/mod_'.$language_settings[$LANGUAGE]['lang_short_cut'].'.php';
}

class gallery2_ModuleMenu
{
	/**
	 * get the gallery2 menu
	 * @todo	create a way to abstract menus for plugins
	 * @return Menu 	the menu item
	 */
	function &getMenu()
	{
		global $TEXT_DIRECTION, $PGV_IMAGE_DIR, $PGV_IMAGES, $GEDCOM, $pgv_lang;
		global $gallery;
		if(!file_exists('modules/gallery2.php') || !file_exists('modules/gallery2/embed.php')){return null;}

		if($TEXT_DIRECTION == 'rtl'){$ff = '_rtl';}else{$ff = '';}

		// Gallery
		$menu = new Menu($pgv_lang['mod_gallery2'], 'module.php?mod=gallery2', 'down');
		if(!empty($PGV_IMAGES['menu_gallery']['large'])){$menu->addIcon("{$PGV_IMAGE_DIR}/{$PGV_IMAGES['menu_gallery']['large']}");}
		$menu->addClass("menuitem{$ff}", "menuitem_hover{$ff}", "submenu{$ff}", "icon_large_menu_gallery");

		// Advanced Search
		$submenu = new Menu($pgv_lang['mod_gallery2_advsearch'], 'module.php?mod=gallery2&amp;g2_view=search.SearchScan');
		$submenu->addIcon("{$PGV_IMAGE_DIR}/{$PGV_IMAGES['search']['small']}");
		$submenu->addClass("submenuitem{$ff}", "submenuitem_hover{$ff}", "", "icon_small_search");
		$menu->addSubmenu($submenu);

		// User Album
/*
		list($ret, $pluginStatus) = GalleryCoreApi::fetchPluginStatus('module');
		if(!$ret)
		{
			if(!empty($pluginStatus['useralbum']))
			{
				if($pluginStatus['useralbum']['active'] == true)
				{
					$username = getUserName();
					list($ret, $idMap) = GalleryEmbed::getExternalIdMap('externalId');
					if($username && isset($idMap[$username]) && !$ret)
					{
						list($ret, $params) = GalleryCoreApi::fetchAllPluginParameters('module', 'useralbum');
						if(!$ret && count($params))
						{
							if(!$ret)
							{
								list($ret, $albumId) = GalleryCoreApi::getPluginParameter('module', 'useralbum', 'albumId', $idMap[$username]['entityId']);
								if(!$ret)
								{
									if(empty($albumId))
									{
										$submenu = new Menu($pgv_lang['mod_gallery2_useralbum'], 'module.php?mod=gallery2&amp;g2_controller=useralbum.UserAlbum');
									}
									else
									{
										$submenu = new Menu($pgv_lang['mod_gallery2_useralbum'], "module.php?mod=gallery2&amp;g2_controller=useralbum.UserAlbum&amp;g2_view=core.ShowItem&amp;g2_itemId={$albumId}");
									}
									$submenu->addIcon("{$PGV_IMAGE_DIR}/{$PGV_IMAGES['indis']['small']}");
									$submenu->addClass("submenuitem{$ff}", "submenuitem_hover{$ff}");
									$menu->addSubmenu($submenu);
								}
							}
						}
					}
				}
			}
		}
*/

		// Site Admin
		if(userIsAdmin(getUserName()))
		{
			$submenu = new Menu($pgv_lang['mod_gallery2_siteadmin'], 'module.php?mod=gallery2&amp;g2_view=core.SiteAdmin');
			$submenu->addIcon("{$PGV_IMAGE_DIR}/{$PGV_IMAGES['admin']['small']}");
			$submenu->addClass("submenuitem{$ff}", "submenuitem_hover{$ff}", "", "icon_small_admin");
			$menu->addSubmenu($submenu);
		}

		return $menu;
	}
}
?>
