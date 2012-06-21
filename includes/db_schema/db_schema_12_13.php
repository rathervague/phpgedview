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
 * Version 13: Move the hit-counters to a database table
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
 * @version $Id: db_schema_12_13.php 6824 2010-01-24 14:27:01Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_SCHEMA_12_13', '');

if (!self::table_exists("{$TBLPREFIX}hit_counter")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}hit_counter (".
		" gedcom_id      ".self::$ID_TYPE."          NOT NULL,".
		" page_name      ".self::$VARCHAR_TYPE."(32) NOT NULL,".
		" page_parameter ".self::$VARCHAR_TYPE."(32) NOT NULL,".
		" page_count     ".self::$INT4_TYPE.   "     NOT NULL,".
		" PRIMARY KEY (gedcom_id, page_name, page_parameter)".
		") ".self::$UTF8_TABLE
	);
}

// Migrate the data from *pgv_counters.txt to the new table
global $INDEX_DIRECTORY;

$statement=PGV_DB::prepare("INSERT INTO {$TBLPREFIX}hit_counter (gedcom_id, page_name, page_parameter, page_count) VALUES (?, ?, ?, ?)");

foreach (get_all_gedcoms() as $ged_id=>$ged_name) {
	// Caution these files might be quite large...
	$file=$INDEX_DIRECTORY.$ged_name.'pgv_counters.txt';
	if (file_exists($file)) {
		foreach (file($file) as $line) {
			if (preg_match('/(@('.PGV_REGEX_XREF.')@ )?(\d+)/', $line, $match)) {
				if ($match[2]) {
					$page_name='individual.php';
					$page_parameter=$match[2];
				} else {
					$page_name='index.php';
					$page_parameter='gedcom:'.$ged_id;
				}
				try {
					$statement->execute(array($ged_id, $page_name, $page_parameter, $match[3]));
				} catch (PDOException $ex) {
					// Primary key violation?  Ignore?
				}
			}
		}
		@unlink($file);
	}
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);
