<?php
/**
 * Update the RA module database schema from version 0 to version 1
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
 * @version $Id: db_schema_0_1.php 5694 2009-06-13 08:32:37Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
header('HTTP/1.0 403 Forbidden');
exit;
}

define('PGV_RA_DB_SCHEMA_0_1', '');

// Create all of the tables needed for this module
if (!self::table_exists("{$TBLPREFIX}tasks")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}tasks (".
		" t_id          ".self::$INT4_TYPE."         NOT NULL,".
		" t_fr_id       ".self::$INT4_TYPE."         NOT NULL,".
		" t_title       ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" t_description ".self::$TEXT_TYPE."         NOT NULL,".
		" t_startdate   ".self::$INT4_TYPE."         NOT NULL,".
		" t_enddate     ".self::$INT4_TYPE."             NULL,".
		" t_results     ".self::$TEXT_TYPE."             NULL,".
		" t_form        ".self::$VARCHAR_TYPE."(255)     NULL,".
		" t_username    ".self::$VARCHAR_TYPE."(45)      NULL,".
		" PRIMARY KEY (t_id)".
		") ".self::$UTF8_TABLE
	);
} else {
	if (!self::column_exists("{$TBLPREFIX}tasks", 't_form')) {
		self::exec("ALTER TABLE {$TBLPREFIX}tasks ADD t_form ".self::$VARCHAR_TYPE."(255) NULL");
	}
}

if (!self::table_exists("{$TBLPREFIX}comments")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}comments (".
		" c_id         ".self::$INT4_TYPE."        NOT NULL,".
		" c_t_id       ".self::$INT4_TYPE."        NOT NULL,".
		" c_u_username ".self::$VARCHAR_TYPE."(30) NOT NULL,".
		" c_body       ".self::$TEXT_TYPE."        NOT NULL,".
		" c_datetime   ".self::$INT4_TYPE."        NOT NULL,".
		" PRIMARY KEY (c_id)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}tasksource")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}tasksource (".
		" ts_t_id  ".self::$INT4_TYPE."         NOT NULL,".
		" ts_s_id  ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" ts_page  ".self::$VARCHAR_TYPE."(255)     NULL,".
		" ts_date  ".self::$VARCHAR_TYPE."(50)      NULL,".
		" ts_text  ".self::$TEXT_TYPE."             NULL,".
		" ts_quay  ".self::$VARCHAR_TYPE."(50)      NULL,".
		" ts_obje  ".self::$VARCHAR_TYPE."(20)      NULL,".
		" ts_array ".self::$TEXT_TYPE."             NULL,".
		" PRIMARY KEY (ts_s_id, ts_t_id)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}folders")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}folders (".
		" fr_id          ".self::$INT4_TYPE."         NOT NULL,".
		" fr_name        ".self::$VARCHAR_TYPE."(255)     NULL,".
		" fr_description ".self::$TEXT_TYPE."             NULL,".
		" fr_parentid    ".self::$INT4_TYPE."             NULL,".
		" PRIMARY KEY (fr_id)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}individualtask")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}individualtask (".
		" it_t_id   ".self::$INT4_TYPE."         NOT NULL,".
		" it_i_id   ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" it_i_file ".self::$INT4_TYPE."         NOT NULL,".
		" PRIMARY KEY (it_t_id, it_i_id,it_i_file)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}taskfacts")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}taskfacts (".
		" tf_id       ".self::$INT4_TYPE."         NOT NULL,".
		" tf_t_id     ".self::$INT4_TYPE."             NULL,".
		" tf_factrec  ".self::$TEXT_TYPE."             NULL,".
		" tf_people   ".self::$VARCHAR_TYPE."(255)     NULL,".
		" tf_multiple ".self::$VARCHAR_TYPE."(3)       NULL,".
		" tf_type     ".self::$VARCHAR_TYPE."(4)       NULL,".
		" PRIMARY KEY (tf_id)".
		") ".self::$UTF8_TABLE
	);
} else {
	if (!self::column_exists("{$TBLPREFIX}taskfacts", 'tf_multiple')) {
		self::exec("ALTER TABLE {$TBLPREFIX}taskfacts ADD tf_multiple ".self::$VARCHAR_TYPE."(3) NULL");
	}
	if (!self::column_exists("{$TBLPREFIX}taskfacts", 'tf_type')) {
		self::exec("ALTER TABLE {$TBLPREFIX}taskfacts ADD tf_type ".self::$VARCHAR_TYPE."(4) NULL");
	}
}

if (!self::table_exists("{$TBLPREFIX}user_comments")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}user_comments (".
		" uc_id       ".self::$INT4_TYPE."         NOT NULL,".
		" uc_username ".self::$VARCHAR_TYPE."(45)  NOT NULL,".
		" uc_datetime ".self::$INT4_TYPE."         NOT NULL,".
		" uc_comment  ".self::$TEXT_TYPE."         NOT NULL,".
		" uc_p_id     ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" uc_f_id     ".self::$INT4_TYPE."         NOT NULL,".
		" PRIMARY KEY (uc_id)".
		") ".self::$UTF8_TABLE
	);
}

/**
 * Note on the probabbilities table.
 * It is used to store the calculated percentages of specific facts.
 * An example of these facts follow.
 * The individuals surname matches their fathers 98% of the time
 *
 * The break down is the first level element, second level element, relationship, percentage
 */
if (!self::table_exists("{$TBLPREFIX}probabilities")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}probabilities (".
		" pr_id      ".self::$INT4_TYPE."         NOT NULL,".
		" pr_f_lvl   ".self::$VARCHAR_TYPE."(200) NOT NULL,".
		" pr_s_lvl   ".self::$VARCHAR_TYPE."(200) NOT NULL,".
		" pr_rel     ".self::$VARCHAR_TYPE."(200) NOT NULL,".
		" pr_matches ".self::$INT4_TYPE."         NOT NULL,".
		" pr_count   ".self::$INT4_TYPE."         NOT NULL,".
		" pr_file    ".self::$INT4_TYPE."             NULL,".
		" PRIMARY KEY (pr_id)".
		") ".self::$UTF8_TABLE
	);
}

if (!self::table_exists("{$TBLPREFIX}factlookup")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}factlookup (".
		" id          ".self::$AUTO_ID_TYPE."      NOT NULL,".
		" description ".self::$VARCHAR_TYPE."(255) NOT NULL,".
		" startdate   ".self::$INT4_TYPE."         NOT NULL,".
		" enddate     ".self::$INT4_TYPE."         NOT NULL,".
		" gedcom_fact ".self::$VARCHAR_TYPE."(10)      NULL,".
		" pl_lv1      ".self::$VARCHAR_TYPE."(255)     NULL,".
		" pl_lv2      ".self::$VARCHAR_TYPE."(255)     NULL,".
		" pl_lv3      ".self::$VARCHAR_TYPE."(255)     NULL,".
		" pl_lv4      ".self::$VARCHAR_TYPE."(255)     NULL,".
		" pl_lv5      ".self::$VARCHAR_TYPE."(255)     NULL,".
		" sour_id     ".self::$VARCHAR_TYPE."(255)     NULL,".
		" comment     ".self::$VARCHAR_TYPE."(255)     NULL".
		") ".self::$UTF8_TABLE
	);
	$statement=self::prepare("INSERT INTO {$TBLPREFIX}factlookup (description, startdate, enddate, gedcom_fact, pl_lv1) VALUES (?, ?, ?, ?, ?)");
	// Do the insertion of Census facts
	$statement->execute(array('US Census 1800', 18000000, 18001231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1810', 18100000, 18101231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1820', 18200000, 18201231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1830', 18300000, 18301231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1840', 18100000, 18401231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1850', 18500000, 18501231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1860', 18600000, 18601231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1870', 18700000, 18701231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1880', 18800000, 18801231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1890', 18900000, 18901231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1900', 19000000, 19001231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1910', 19100000, 19101231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1920', 19200000, 19201231, 'CENS', 'USA'));
	$statement->execute(array('US Census 1930', 19300000, 19301231, 'CENS', 'USA'));
	$statement->execute(array('UK Census 1841', 18410000, 18411231, 'CENS', 'UK' ));
	$statement->execute(array('UK Census 1851', 18510000, 18511231, 'CENS', 'UK' ));
	$statement->execute(array('UK Census 1861', 18610000, 18611231, 'CENS', 'UK' ));
	$statement->execute(array('UK Census 1871', 18710000, 18711231, 'CENS', 'UK' ));
	$statement->execute(array('UK Census 1881', 18810000, 18811231, 'CENS', 'UK' ));
	$statement->execute(array('UK Census 1891', 18910000, 18911231, 'CENS', 'UK' ));
	$statement->execute(array('UK Census 1901', 19010000, 19011231, 'CENS', 'UK' ));

	// Insert War facts here
	$statement->execute(array('Civil War',  18610412, 18651231, '_MILI', 'USA'));
	$statement->execute(array('WWI',        19140412, 19181231, '_MILI', null ));
	$statement->execute(array('WWII',       19390412, 19451231, '_MILI', null ));
	$statement->execute(array('Korean War', 19500625, 19531231, '_MILI', null ));
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);
