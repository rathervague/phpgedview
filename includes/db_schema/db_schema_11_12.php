<?php
/**
  * Update the database schema from version 10 to version 11
 *
 * Version 0: empty database
 * Version 1: create the pgv_site_setting table
 * Version 2: create the user tables, as per PhpGedView 4.2.1
 * Version 3: create the genealogy tables, as per PhpGedView 4.2.1
 *   From Version 4 onwards, we make incremental changes, rather than
 *   trying to introspect/update.  It's more efficient, flexible,
 *   and allows us to update column types, indexes, etc.
 * Version 4: Performance tuning: update column definitions for pgv_dates
 * Version 5: Performance tuning: update column definitions for pgv_individuals
 * Version 6: Performance tuning: update column definitions for pgv_families
 * Version 7: Performance tuning: update column definitions for pgv_sources
 * Version 8: Performance tuning: update column definitions for pgv_media/media_mapping
 * Version 9: Performance tuning: update column definitions for pgv_favorites/nextid/other/placelinks/places/remotelinks
 * Version 10: Move the $DEFAULT_GEDCOM setting from gedcoms.php to pgv_site_setting
 * Version 11: Add the modules and module_privacy tables for module administration
 * Version 12: Move $GEDCOMS from gedcoms.php to pgv_gedcom and pgv_gedcom_setting, split pgv_users into pgv_user/pgv_user_setting/pgv_user_gedcom_setting
 *
 * The script should assume that it can be interrupted at
 * any point, and be able to continue by re-running the script.
 * Fatal errors, however, should be allowed to throw exceptions,
 * which will be caught by the framework.
 * It shouldn't do anything that might take more than a few
 * seconds, for systems with low timeout values.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2010 Greg Roach
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
 * @version $Id: db_schema_11_12.php 6802 2010-01-22 09:12:26Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_SCHEMA_11_12', '');

if (!self::table_exists("{$TBLPREFIX}gedcom")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}gedcom (".
		" gedcom_id   ".self::$AUTO_ID_TYPE."      NOT NULL,".
		" gedcom_name ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" CONSTRAINT {$TBLPREFIX}gedcom_ux1 UNIQUE (gedcom_name)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}gedcom_setting")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}gedcom_setting (".
		" gedcom_id     ".self::$COL_FILE.    "      NOT NULL,".
		" setting_name  ".self::$VARCHAR_TYPE."(32)  NOT NULL,".
		" setting_value ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" PRIMARY KEY (gedcom_id, setting_name)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}user")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}user (".
		" user_id   ".self::$AUTO_ID_TYPE."      NOT NULL,".
		" user_name ".self::$VARCHAR_TYPE."(32)  NOT NULL,".
		" password  ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" CONSTRAINT {$TBLPREFIX}user_ux1 UNIQUE (user_name)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}user_setting")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}user_setting (".
		" user_id       ".self::$ID_TYPE.     "      NOT NULL,".
		" setting_name  ".self::$VARCHAR_TYPE."(32)  NOT NULL,".
		" setting_value ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" PRIMARY KEY (user_id, setting_name)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}user_gedcom_setting")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}user_gedcom_setting (".
		" user_id       ".self::$ID_TYPE.     "      NOT NULL,".
		" gedcom_id     ".self::$COL_FILE."          NOT NULL,".
		" setting_name  ".self::$VARCHAR_TYPE."(32)  NOT NULL,".
		" setting_value ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" PRIMARY KEY (user_id, gedcom_id, setting_name)".
		") ".self::$UTF8_TABLE
	);
}

// Migrate the data from gedcoms.php to these new tables
global $INDEX_DIRECTORY;
if (file_exists("{$INDEX_DIRECTORY}gedcoms.php")) {
	require_once "{$INDEX_DIRECTORY}gedcoms.php";
	if (isset($GEDCOMS) && is_array($GEDCOMS)) {
		foreach ($GEDCOMS as $array) {
			try {
				self::prepare("INSERT INTO {$TBLPREFIX}gedcom (gedcom_id, gedcom_name) VALUES (?,?)")
					->execute(array($array['id'], $array['gedcom']));
			} catch (PDOException $ex) {
				// Ignore duplicates
			}
			// insert gedcom
			foreach ($array as $key=>$value) {
				if ($key!='id' && $key!='gedcom' && $key!='commonsurnames') {
					try {
						self::prepare("INSERT INTO {$TBLPREFIX}gedcom_setting (gedcom_id, setting_name, setting_value) VALUES (?,?, ?)")
							->execute(array($array['id'], $key, $value));
					} catch (PDOException $ex) {
						// Ignore duplicates
					}
				}
			}
		}
	}
	// TODO: Uncomment these lines before the next release
	//@unlink("{$INDEX_DIRECTORY}gedcoms.php.delete");
	//@rename("{$INDEX_DIRECTORY}gedcoms.php", "{$INDEX_DIRECTORY}gedcoms.php.delete");
}

// Migrate the data from pgv_users into pgv_user/pgv_user_setting/pgv_user_gedcom_setting
try {
	self::exec("INSERT INTO {$TBLPREFIX}user (user_name, password) SELECT u_username, u_password FROM {$TBLPREFIX}users");
} catch (PDOException $ex) {
	// This could only fail if;
	// a) we've already done it (upgrade)
	// b) it doesn't exist (new install)
}

try {
	self::exec(
		"INSERT INTO {$TBLPREFIX}user_setting (user_id, setting_name, setting_value)".
		"	SELECT user_id, 'firstname', u_firstname".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'lastname', u_lastname".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'canadmin', u_canadmin".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'email', u_email".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'verified', u_verified".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'verified_by_admin', u_verified_by_admin".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'language', u_language".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'pwrequested', u_pwrequested".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'reg_timestamp', u_reg_timestamp".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'reg_hashcode', u_reg_hashcode".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'theme', u_theme".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'loggedin', u_loggedin".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'sessiontime', u_sessiontime".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'contactmethod', u_contactmethod".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'visibleonline', u_visibleonline".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'editaccount', u_editaccount".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'defaulttab', u_defaulttab".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'comment', u_comment".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'comment_exp', u_comment_exp".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'sync_gedcom', u_sync_gedcom".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'relationship_privacy', u_relationship_privacy".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'max_relation_path', u_max_relation_path".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)".
		" UNION ALL".
		"	SELECT user_id, 'auto_accept', u_auto_accept".
		" FROM {$TBLPREFIX}users".
		" JOIN {$TBLPREFIX}user ON (user_name=u_username)"
	);
} catch (PDOException $ex) {
	// This could only fail if;
	// a) we've already done it (upgrade)
	// b) it doesn't exist (new install)
}

try {
	$user_gedcom_settings=
		self::prepare(
			"SELECT user_id, u_gedcomid, u_rootid, u_canedit".
			" FROM {$TBLPREFIX}users".
			" JOIN {$TBLPREFIX}user ON (user_name=u_username)"
		)->fetchAll();
	foreach ($user_gedcom_settings as $setting) {
		@$array=unserialize($setting->u_gedcomid);
		if (is_array($array)) {
			foreach ($array as $gedcom=>$value) {
				$id=get_id_from_gedcom($gedcom);
				if ($id) {
					// Allow for old/invalid gedcom values in array
					set_user_gedcom_setting($setting->user_id, $id, 'gedcomid', $value);
				}
			}
		}
		@$array=unserialize($setting->u_rootid);
		if (is_array($array)) {
			foreach ($array as $gedcom=>$value) {
				$id=get_id_from_gedcom($gedcom);
				if ($id) {
					// Allow for old/invalid gedcom values in array
				 	set_user_gedcom_setting($setting->user_id, $id, 'rootid', $value);
				}
			}
		}
		@$array=unserialize($setting->u_canedit);
		if (is_array($array)) {
			foreach ($array as $gedcom=>$value) {
				$id=get_id_from_gedcom($gedcom);
				if ($id) {
					// Allow for old/invalid gedcom values in array
				 	set_user_gedcom_setting($setting->user_id, $id, 'canedit', $value);
				}
			}
		}
	}

	// TODO: Uncomment this lines before the next release
	//self::exec("DROP TABLE {$TBLPREFIX}users");

} catch (PDOException $ex) {
	// This could only fail if;
	// a) we've already done it (upgrade)
	// b) it doesn't exist (new install)
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);

