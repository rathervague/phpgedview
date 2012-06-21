<?php
/**
 * Update the database schema from version 1 to version 2
 *
 * Version 0: empty database
 * Version 1: create the pgv_site_setting table
 * Version 2: create the user tables, as per PhpGedView 4.2.1
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
 * @version $Id: db_schema_1_2.php 6802 2010-01-22 09:12:26Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_SCHEMA_1_2', '');

$sqlite=($DRIVER_NAME=="sqlite" || $DRIVER_NAME=="sqlite2");

if (!self::table_exists("{$TBLPREFIX}messages")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}messages (".
		" m_id      ".self::$INT4_TYPE."         NOT NULL,".
		" m_from    ".self::$VARCHAR_TYPE."(255)     NULL,".
		" m_to      ".self::$VARCHAR_TYPE."(30)      NULL,".
		" m_subject ".self::$VARCHAR_TYPE."(255)     NULL,".
		" m_body    ".self::$TEXT_TYPE."             NULL,".
		" m_created ".self::$VARCHAR_TYPE."(255)     NULL,".
		" PRIMARY KEY (m_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}messages_to ON {$TBLPREFIX}messages (m_to)");
}
if (!self::table_exists("{$TBLPREFIX}favorites") || $sqlite && !self::column_exists("{$TBLPREFIX}favorites", 'fv_note')) {
	if ($sqlite && self::table_exists("{$TBLPREFIX}favorites")) self::exec("DROP TABLE {$TBLPREFIX}favorites");
	self::exec(
		"CREATE TABLE {$TBLPREFIX}favorites (".
		" fv_id       ".self::$INT4_TYPE."         NOT NULL,".
	 	" fv_username ".self::$VARCHAR_TYPE."(30)      NULL,".
		" fv_gid      ".self::$COL_XREF."              NULL,".
		" fv_type     ".self::$COL_TAG."               NULL,".
		" fv_file     ".self::$VARCHAR_TYPE."(100)     NULL,".
		" fv_url      ".self::$VARCHAR_TYPE."(255)     NULL,".
	 	" fv_title    ".self::$VARCHAR_TYPE."(255)     NULL,".
		" fv_note     ".self::$TEXT_TYPE."             NULL,".
		" PRIMARY KEY (fv_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}favorites_username ON {$TBLPREFIX}favorites (fv_username)");
} else {
	if (!self::column_exists("{$TBLPREFIX}favorites", 'fv_note')) {
		self::exec("ALTER TABLE {$TBLPREFIX}favorites ADD fv_url   ".self::$VARCHAR_TYPE."(255) NULL");
		self::exec("ALTER TABLE {$TBLPREFIX}favorites ADD fv_title ".self::$VARCHAR_TYPE."(255) NULL");
		self::exec("ALTER TABLE {$TBLPREFIX}favorites ADD fv_note  ".self::$TEXT_TYPE."         NULL");
	}
}
if (!self::table_exists("{$TBLPREFIX}blocks") || $sqlite && !self::column_exists("{$TBLPREFIX}blocks", 'b_config')) {
	if ($sqlite && self::table_exists("{$TBLPREFIX}blocks")) self::exec("DROP TABLE {$TBLPREFIX}blocks");
	self::exec(
		"CREATE TABLE {$TBLPREFIX}blocks (".
		" b_id       ".self::$INT4_TYPE."         NOT NULL,".
		" b_username ".self::$VARCHAR_TYPE."(100)     NULL,".
		" b_location ".self::$VARCHAR_TYPE."(30)      NULL,".
	 	" b_order    ".self::$INT4_TYPE."             NULL,".
		" b_name     ".self::$VARCHAR_TYPE."(255)     NULL,".
		" b_config   ".self::$TEXT_TYPE."             NULL,".
		" PRIMARY KEY (b_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}blocks_username ON {$TBLPREFIX}blocks (b_username)");
} else {
	if (!self::column_exists("{$TBLPREFIX}blocks", 'b_config')) {
		self::exec("ALTER TABLE {$TBLPREFIX}blocks ADD b_config ".self::$TEXT_TYPE." NOT NULL");
	}
}
if (!self::table_exists("{$TBLPREFIX}news")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}news (".
		" n_id       ".self::$INT4_TYPE."         NOT NULL,".
		" n_username ".self::$VARCHAR_TYPE."(100)     NULL,".
		" n_date     ".self::$INT4_TYPE."             NULL,".
		" n_title    ".self::$VARCHAR_TYPE."(255)     NULL,".
		" n_text     ".self::$TEXT_TYPE."             NULL,".
		" PRIMARY KEY (n_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}news_username ON {$TBLPREFIX}news (n_username)");
}
if (!self::table_exists("{$TBLPREFIX}mutex")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}mutex (".
		" mx_id     ".self::$INT4_TYPE."         NOT NULL,".
		" mx_name   ".self::$VARCHAR_TYPE."(255)     NULL,".
	 	" mx_thread ".self::$VARCHAR_TYPE."(255)     NULL,".
		" mx_time   ".self::$INT4_TYPE."             NULL,".
		" PRIMARY KEY (mx_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}mutex_name ON {$TBLPREFIX}mutex (mx_name)");
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);
