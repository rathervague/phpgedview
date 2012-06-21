<?php
//
// Provide a mechanism for contact management systems such as Joomla! to
// embed PhpGedView within an <iframe> or a javascript popup window.
//
// phpGedView: Genealogy Viewer
// Copyright (C) 2008 Greg Roach, all rights reserved
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License or,
// at your discretion, any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// @author Greg Roach
// @package PhpGedView
// @version $Id: cms_login.php 4194 2008-10-30 10:45:46Z fisharebest $

require '../../config.php';

// TODO: When someone provides documentation of how to identify an
// authenticated session in the parent application, we can implement
// much tighter integration and better security.

// To use this module supply the username and password via any of the
// GET/POST/COOKIE variables.  For example embed the following HTML in
// an outer web page:
//
// <iframe src="http://www.example.com/phpGedView/cms_login.php?cms_username=USERNAME&cms_password=PASSWORD">
//   Your browser does not support IFRAMES.
// </iframe>
//
// Configuration options:
$CMS_LOGIN_URL='../../index.php'; // Go to this page after logging in

// Variables to be supplied by the caller
$cms_username =array_key_exists('cms_username',  $_REQUEST) ? $_REQUEST['cms_username' ] : '';
$cms_password =array_key_exists('cms_password',  $_REQUEST) ? $_REQUEST['cms_password' ] : '';

// This module can also *CREATE* user accounts where they do not already exist.
// To enable this, set $CMS_AUTO_ADD_USERS to true.  Use at your own risk.
// Configuration options
$CMS_AUTO_ADD_USERS        =false;
$CMS_USER_ACCESS_LEVEL     ='access'; // none/access/edit/accept/admin
$CMS_USER_VERIFIED         ='yes';
$CMS_USER_VERIFIED_BY_ADMIN='yes';
$CMS_LANGUAGE              ='english';
$CMS_THEME                 ='standard';
$CMS_CONTACT_METHOD        ='messaging2';
$CMS_DEFAULT_TAB           =$GEDCOM_DEFAULT_TAB;
$CMS_USER_COMMENT          ='User created automatically using '.__FILE__;
$CMS_USER_AUTO_ACCEPT      ='N';
$CMS_SYNC_GEDCOM           ='N';
$CMS_VISIBLE_ONLINE        ='N';
$CMS_USER_EDIT_ACCOUNT     ='N';
$CMS_RELATIONSHIP_PRIVACY  ='N';
$CMS_MAX_RELATION_PATH     =2;
$CMS_LOGIN_URL             ='../../index.php?ctype=gedcom"';
// Variables to be supplied by the caller via GET/POST/COOKIE
$cms_firstname=array_key_exists('cms_firstname', $_REQUEST) ? $_REQUEST['cms_firstname'] : 'firstname';
$cms_lastname =array_key_exists('cms_lastname',  $_REQUEST) ? $_REQUEST['cms_lastname' ] : 'lastname';
$cms_email    =array_key_exists('cms_email',     $_REQUEST) ? $_REQUEST['cms_email'    ] : 'email@example.com';
$cms_language =array_key_exists('cms_language',  $_REQUEST) ? $_REQUEST['cms_language' ] : $CMS_LANGUAGE;
$cms_theme    =array_key_exists('cms_theme',     $_REQUEST) ? $_REQUEST['cms_theme'    ] : $CMS_THEME;
$cms_contact  =array_key_exists('cms_contact',   $_REQUEST) ? $_REQUEST['cms_contact'  ] : $CMS_CONTACT_METHOD;

if ($cms_username && $cms_password) {
	if ($user_id=get_user_id($cms_username)) {
		// User exists - try to log in
		if (authenticateUser($user_id, $cms_password)) {
			AddToLog("External login successful ->" . $cms_username ."<-");
			header('Location: '.$CMS_LOGIN_URL);
		} else {
			header('Location: login.php?url='.urlencode($CMS_LOGIN_URL));
		}
	} else {
		// User does not exist - create one if allowed
		if ($CMS_AUTO_ADD_USERS) {
			if ($user_id=create_user($cms_username, crypt($cms_password))) {
				set_user_setting($user_id, 'firstname',            $cms_firstname);
				set_user_setting($user_id, 'lastname',             $cms_lastname);
				set_user_setting($user_id, 'email',                $cms_email);
				set_user_setting($user_id, 'theme',                $cms_theme);
				set_user_setting($user_id, 'language',             $cms_language);
				set_user_setting($user_id, 'contactmethod',        $cms_contact);
				set_user_setting($user_id, 'defaulttab',           $CMS_DEFAULT_TAB);
				set_user_setting($user_id, 'comment',              $CMS_USER_COMMENT);
				set_user_setting($user_id, 'max_relation_path',    $CMS_MAX_RELATION_PATH);
				set_user_setting($user_id, 'relationship_privacy', $CMS_RELATIONSHIP_PRIVACY);
				set_user_setting($user_id, 'auto_accept',          $CMS_USER_AUTO_ACCEPT);
				set_user_setting($user_id, 'canadmin',             'N');
				set_user_setting($user_id, 'visibleonline',        $CMS_VISIBLE_ONLINE);
				set_user_setting($user_id, 'editaccount',          $CMS_USER_EDIT_ACCOUNT);
				set_user_setting($user_id, 'verified',             $CMS_USER_VERIFIED);
				set_user_setting($user_id, 'verified_by_admin',    $CMS_USER_VERIFIED_BY_ADMIN);
				set_user_setting($user_id, 'sync_gedcom',          $CMS_SYNC_GEDCOM);
				set_user_setting($user_id, 'reg_timestamp',        time()); 
				foreach (get_all_gedcoms() as $ged_id=>$ged_name) {
					set_user_gedcom_setting($user_id, $ged_id, 'canedit', $CMS_USER_ACCESS_LEVEL);
				}
				AddToLog(__FILE__.' login for '.$cms_username);
				$_SESSION['pgv_user'] = $user_id;
			} else {
				// Create user failed.
				AddToLog(__FILE__.' failed to create user account for '.$cms_username);
				header('Location: index.php?logout=1');
			}
		}
	}
}

header('Location: '.$CMS_LOGIN_URL);
?>
