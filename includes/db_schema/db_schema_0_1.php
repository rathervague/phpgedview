<?php
/**
 * Update the database schema from version 0 to version 1
 *
 * Version 0: empty database
 * Version 1: create the pgv_site_setting table
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
 * @version $Id: db_schema_0_1.php 5694 2009-06-13 08:32:37Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_DB_SCHEMA_0_1', '');

if (!self::table_exists("{$TBLPREFIX}site_setting")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}site_setting (".
		" site_setting_name  ".self::$VARCHAR_TYPE."(32)  NOT NULL,".
		" site_setting_value ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" PRIMARY KEY (site_setting_name),".
		" CONSTRAINT {$TBLPREFIX}site_setting_ux1 UNIQUE (site_setting_name, site_setting_value)".
		") ".self::$UTF8_TABLE
	);
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);
