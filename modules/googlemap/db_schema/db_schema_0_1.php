<?php
/**
 * Update the GM module database schema from version 0 to version 1
 *
 * Version 0: empty database
 * Version 1: create the tables, as per PGV 4.2.1
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
 * @version $Id: db_schema_0_1.php 6615 2009-12-23 23:17:10Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
header('HTTP/1.0 403 Forbidden');
exit;
}

define('PGV_GM_DB_SCHEMA_0_1', '');

// Create all of the tables needed for this module
if (!PGV_DB::table_exists("{$TBLPREFIX}placelocation")) {
	PGV_DB::exec(
		"CREATE TABLE {$TBLPREFIX}placelocation (".
		" pl_id        ".self::$INT4_TYPE."         NOT NULL,".
		" pl_parent_id ".self::$INT4_TYPE."             NULL,".
		" pl_level     ".self::$INT4_TYPE."             NULL,".
		" pl_place     ".self::$VARCHAR_TYPE."(255)     NULL,".
		" pl_long      ".self::$VARCHAR_TYPE."(30)      NULL,".
		" pl_lati      ".self::$VARCHAR_TYPE."(30)      NULL,".
		" pl_zoom      ".self::$INT4_TYPE."             NULL,".
		" pl_icon      ".self::$VARCHAR_TYPE."(255)     NULL,".
		" PRIMARY KEY (pl_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}pl_level     ON {$TBLPREFIX}placelocation (pl_level    )");
	self::exec("CREATE INDEX {$TBLPREFIX}pl_long      ON {$TBLPREFIX}placelocation (pl_long     )");
	self::exec("CREATE INDEX {$TBLPREFIX}pl_lati      ON {$TBLPREFIX}placelocation (pl_lati     )");
	self::exec("CREATE INDEX {$TBLPREFIX}pl_name      ON {$TBLPREFIX}placelocation (pl_place    )");
	self::exec("CREATE INDEX {$TBLPREFIX}pl_parent_id ON {$TBLPREFIX}placelocation (pl_parent_id)");

}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);
