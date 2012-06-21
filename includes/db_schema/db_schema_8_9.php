<?php
/**
  * Update the database schema from version 8 to version 9
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
 *
 * The script should assume that it can be interrupted at
 * any point, and be able to continue by re-running the script.
 * Fatal errors, however, should be allowed to throw exceptions,
 * which will be caught by the framework.
 * It shouldn't do anything that might take more than a few
 * seconds, for systems with low timeout values.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2009 Greg Roach
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
 * @version $Id: db_schema_8_9.php 5694 2009-06-13 08:32:37Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_SCHEMA_8_9', '');

try {
	// These columns may have been created in an earlier versions of PGV.  Update them to the preferred type.
	self::exec("ALTER TABLE {$TBLPREFIX}favorites   MODIFY fv_gid     ".self::$COL_XREF." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}nextid      MODIFY ni_type    ".self::$COL_TAG ." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}nextid      MODIFY ni_id      ".self::$COL_XREF." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}nextid      MODIFY ni_gedfile ".self::$COL_FILE." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}other       MODIFY o_file     ".self::$COL_FILE." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}other       MODIFY o_id       ".self::$COL_XREF." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}other       MODIFY o_type     ".self::$COL_TAG ." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}placelinks  MODIFY pl_file    ".self::$COL_FILE." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}placelinks  MODIFY pl_gid     ".self::$COL_XREF." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}places      MODIFY p_file     ".self::$COL_FILE." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}remotelinks MODIFY r_gid      ".self::$COL_XREF." NOT NULL");
	self::exec("ALTER TABLE {$TBLPREFIX}remotelinks MODIFY r_file     ".self::$COL_FILE." NOT NULL");
} catch (PDOException $ex) {
	// Not all databases can alter column datatypes - either when the column contains data, or at all.
	// Ignore any errors, failing to update any of these will not break anything.
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);

