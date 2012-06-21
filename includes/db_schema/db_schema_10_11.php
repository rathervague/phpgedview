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
 * Version 10: Move the $DEFAULT_GEDCOM setting from gedcoms.php to pgv_site_settings
 * Version 11: Add the modules and module_privacy tables for module administration
 *
 * The script should assume that it can be interrupted at
 * any point, and be able to continue by re-running the script.
 * Fatal errors, however, should be allowed to throw exceptions,
 * which will be caught by the framework.
 * It shouldn't do anything that might take more than a few
 * seconds, for systems with low timeout values.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2009 John Finlay
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
 * @version $Id: db_schema_10_11.php 6720 2010-01-15 20:04:14Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_SCHEMA_10_11', '');

if (!self::table_exists("{$TBLPREFIX}module")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}module (".
		" mod_id           ".self::$AUTO_ID_TYPE." NOT NULL,".
		" mod_name         ".self::$VARCHAR_TYPE."(40) NOT NULL,".
		" mod_description  ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" mod_taborder     ".self::$INT1_TYPE." NOT NULL, ".
		" mod_menuorder    ".self::$INT1_TYPE." NOT NULL, ".
		" mod_sidebarorder ".self::$INT1_TYPE." NOT NULL ".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}module_privacy")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}module_privacy (".
		" mp_id     ".self::$AUTO_ID_TYPE." NOT NULL,".
		" mp_mod_id ".self::$ID_TYPE." NOT NULL,".
		" mp_file   ".self::$COL_FILE." NOT NULL,".
		" mp_access ".self::$INT1_TYPE." NOT NULL,".
		" mp_type   ".self::$CHAR_TYPE."(1) NOT NULL".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}module_privacy_ix1 ON {$TBLPREFIX}module_privacy (mp_mod_id, mp_file, mp_access)");
	self::exec("CREATE INDEX {$TBLPREFIX}module_privacy_ix2 ON {$TBLPREFIX}module_privacy (mp_mod_id, mp_access)");
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);
