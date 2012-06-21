<?php
/**
 * phpGedView Gallery 2 Module.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  John Finlay and Others
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
 * @subpackage Gallery2
 * @version $Id: pgv.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Patrick Kellum
 */
/*
 * Seperated out of G2 embeding for use elseware.
 */

global $SERVER_URL, $language_settings, $LANGUAGE, $modinfo, $pgv_lang;

// For block support
if(!defined('PGV_MOD_SIMPLE')){$modinfo = parse_ini_file(PGV_ROOT.'modules/gallery2.php', true);}

// Gallery path sanity check
if(!file_exists($modinfo['Gallery2']['path'])){$modinfo['Gallery2']['path'] = PGV_ROOT.'modules/gallery2';}

// Check if gallery installed, if not then return false
if(!file_exists("{$modinfo['Gallery2']['path']}/embed.php"))
{
	define('PGV_GALLERY2_INIT', false);
	return;
}
define('PGV_GALLERY2_INIT', true);

// Load the embeding API
require_once $modinfo['Gallery2']['path'].'/embed.php';

// Load PGV embeding language file
require_once PGV_ROOT.'modules/gallery2/language/mod_en.php';

// Load other language file if needed
if ($language_settings[$LANGUAGE]['lang_short_cut'] != 'en' && file_exists(PGV_ROOT.'modules/gallery2/language/mod_'.$language_settings[$LANGUAGE]['lang_short_cut'].'.php')) {
	require_once PGV_ROOT.'modules/gallery2/language/mod_'.$language_settings[$LANGUAGE]['lang_short_cut'].'.php';
}

// Load some tools for embeding ease of use
require_once PGV_ROOT.'modules/gallery2/G2EmbedDiscoveryUtilities.class';

function mod_gallery2_load($uid)
{
	global $SERVER_URL, $language_settings, $LANGUAGE, $modinfo, $pgv_lang;

	$user_id=get_user_id($uid); // $uid is the gallery2 user-name, $user_id is the PGV user-id 

	// Rebuild the url, just to be sure we have a clean one
	$bits = parse_url($SERVER_URL);
	if(isset($bits['query'])){$bits['query'] = "&{$bits['query']}";}else{$bits['query'] = '';}
	if(isset($bits['fragment'])){$bits['fragment'] = "#{$bits['fragment']}";}else{$bits['fragment'] = '';}
	$url = "{$bits['scheme']}://{$bits['host']}/module.php?mod=gallery2{$bits['query']}{$bits['fragment']}";

	$init = GalleryEmbed::init(array(
		'embedUri'		=> G2EmbedDiscoveryUtilities::normalizeEmbedUri($url),
		'g2Uri'			=> G2EmbedDiscoveryUtilities::normalizeG2Uri($modinfo['Gallery2']['path']),
		'activeUserId'		=> $uid,
		'activeLanguage'	=> $language_settings[$LANGUAGE]['lang_short_cut'],
		'apiVersion'		=> array(1, 1)
	));
	// Check for error when initialising the gallery
	if($init)
	{
		// Did we get an error because the user isn't mapped in g2 yet?
		$is_mapped = GalleryEmbed::isExternalIdMapped($uid, 'GalleryUser');
		if($is_mapped && $is_mapped->getErrorCode() & ERROR_MISSING_OBJECT)
		{
			/* The user does not exist in G2 yet. Create in now on-the-fly */
			$language = get_user_setting($user_id, 'language');
			if($language)
			{
				$lang = $language_settings[$language]['lang_short_cut'];
			}
			else
			{
				$lang = 'en';
			}
			$create_user = GalleryEmbed::createUser($uid, array(
				'username'			=> $uid,
				'email'				=> get_user_setting($user_id, 'email'),
				'fullname'			=> getUserFullName($user_id),
				'language'			=> $lang,
				'hashedpassword'		=> get_user_password($user_id),
				'hashmethod'			=> 'crypt',
				'creationtimestamp'		=> get_user_setting($user_id, 'reg_timestamp')
			));
			if($create_user)
			{
				// Could not create the user, is it because the user already exists in g2?
				list($not_mapped, $g2u) = GalleryCoreApi::fetchUserByUserName(get_user_setting($user_id, 'username'));
				if($not_mapped)
				{
					print "{$pgv_lang['mod_gallery2_error_user_create']}<br />\n".$not_mapped->getAsHtml();
					exit;
				}
				// Yes, the user already exists, let's go ahead and map them so we won't have this problem in the future
				else
				{
					$add_map = GalleryCoreApi::addMapEntry('ExternalIdMap', array(
						'externalId' => $uid,
						'entityType' => 'GalleryUser',
						'entityId' => $g2u->getId()
					));
				}
			}
		}
		else
		{
			// The error we got wasn't due to a missing user, it was a real error
			if($is_mapped)
			{
				print "{$pgv_lang['mod_gallery2_error_user_check']}<br />\n".$is_mapped->getAsHtml()."<br />\n";
			}
			print "{$pgv_lang['mod_gallery2_error_init']}<br />\n".$init->getAsHtml();
			exit;
		}
		// Initialize again to clear up a bug where it seems to remember the last logged in user, very bad when the last user was an admin ^_^
		$init = GalleryEmbed::init(array(
			'embedUri'		=> G2EmbedDiscoveryUtilities::normalizeEmbedUri($url),
			'g2Uri'			=> G2EmbedDiscoveryUtilities::normalizeG2Uri($modinfo['Gallery2']['path']),
			'activeUserId'		=> $uid,
			'activeLanguage'	=> $language_settings[$LANGUAGE]['lang_short_cut'],
			'apiVersion'		=> array(1, 1)
		));
	}

	// if admin, we need to add them to the admin group if not already added
	if(userIsAdmin($user_id) == 'Y')
	{
		// This should be much faster the in the past after the first time loading for admins
		list($ret, $isAdmin) = GalleryCoreApi::isUserInSiteAdminGroup();
		if(!$isAdmin)
		{
			// Load G2 user
			list($ret, $user) = GalleryCoreApi::loadEntityByExternalId($uid, 'GalleryUser');
			if($ret){return;}
			// Load the module plugin system
			list($ret, $module) = GalleryCoreApi::loadPlugin('module', 'core');
			if($ret){return;}
			// Get the id of the admin group
			list($ret, $group) = $module->getParameter('id.adminGroup');
			if($ret){return;}
			// Add the user to the group
			GalleryCoreApi::addUserToGroup($user->getId(), $group);
		}
	}
}
