<?php
/**
 * Update the database schema from version 2 to version 3
 *
 * Version 0: empty database
 * Version 1: create the pgv_site_setting table
 * Version 2: create the user tables, as per PhpGedView 4.2.1
 * Version 3: create the genealogy tables, as per PhpGedView 4.2.1
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
 * @version $Id: db_schema_2_3.php 5703 2009-06-13 15:46:32Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_SCHEMA_2_3', '');

$sqlite=($DRIVER_NAME=="sqlite" || $DRIVER_NAME=="sqlite2");

if (!self::table_exists("{$TBLPREFIX}individuals") || $sqlite && (!self::column_exists("{$TBLPREFIX}individuals", 'i_rin') || self::column_exists("{$TBLPREFIX}individuals", 'i_letter') || self::column_exists("{$TBLPREFIX}individuals", 'i_surname') || self::column_exists("{$TBLPREFIX}individuals", 'i_name') || !self::column_exists("{$TBLPREFIX}individuals", 'i_sex'))) {
	if ($sqlite && self::table_exists("{$TBLPREFIX}individuals")) {
		self::exec("DROP TABLE {$TBLPREFIX}individuals");
	}
	self::exec(
		"CREATE TABLE {$TBLPREFIX}individuals (".
		" i_id     ".self::$COL_XREF."      NOT NULL,".
		" i_file   ".self::$COL_FILE."      NOT NULL,".
		" i_rin    ".self::$COL_XREF."          NULL,".
		" i_isdead ".self::$INT4_TYPE."     NOT NULL,".
		" i_sex    ".self::$CHAR_TYPE."(1)  NOT NULL,".
		" i_gedcom ".self::$LONGTEXT_TYPE." NOT NULL,".
		" PRIMARY KEY (i_id, i_file)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}indi_id   ON {$TBLPREFIX}individuals (i_id  )");
	self::exec("CREATE INDEX {$TBLPREFIX}indi_file ON {$TBLPREFIX}individuals (i_file)");
} else { // check columns in the table
	if (!self::column_exists("{$TBLPREFIX}individuals", 'i_rin')) {
		self::exec("ALTER TABLE {$TBLPREFIX}individuals ADD i_rin ".self::$COL_XREF." NULL");
	}
	if (self::column_exists("{$TBLPREFIX}individuals", 'i_letter')) {
		self::exec("ALTER TABLE {$TBLPREFIX}individuals DROP COLUMN i_letter");
	}
	if (self::column_exists("{$TBLPREFIX}individuals", 'i_surname')) {
		self::exec("ALTER TABLE {$TBLPREFIX}individuals DROP COLUMN i_surname");
	}
	if (self::column_exists("{$TBLPREFIX}individuals", 'i_name')) {
		self::exec("ALTER TABLE {$TBLPREFIX}individuals DROP COLUMN i_name");
	}
	if (!self::column_exists("{$TBLPREFIX}individuals", 'i_sex')) {
		self::exec("ALTER TABLE {$TBLPREFIX}individuals ADD i_sex ".self::$CHAR_TYPE."(1) NOT NULL DEFAULT 'U'");
	}
}
if (!self::table_exists("{$TBLPREFIX}families") || $sqlite && (self::column_exists("{$TBLPREFIX}families", 'f_name') || !self::column_exists("{$TBLPREFIX}families", 'f_numchil'))) {
	if ($sqlite && self::table_exists("{$TBLPREFIX}families")) {
		self::exec("DROP TABLE {$TBLPREFIX}families");
	}
	self::exec(
		"CREATE TABLE {$TBLPREFIX}families (".
		" f_id      ".self::$COL_XREF."      NOT NULL,".
		" f_file    ".self::$COL_FILE."      NOT NULL,".
		" f_husb    ".self::$COL_XREF."          NULL,".
		" f_wife    ".self::$COL_XREF."          NULL,".
		" f_chil    ".self::$TEXT_TYPE."         NULL,".
		" f_gedcom  ".self::$LONGTEXT_TYPE."     NULL,".
		" f_numchil ".self::$INT4_TYPE."         NULL,".
		" PRIMARY KEY (f_id, f_file)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}fam_id   ON {$TBLPREFIX}families (f_id  )");
	self::exec("CREATE INDEX {$TBLPREFIX}fam_file ON {$TBLPREFIX}families (f_file)");
	self::exec("CREATE INDEX {$TBLPREFIX}fam_husb ON {$TBLPREFIX}families (f_husb)");
	self::exec("CREATE INDEX {$TBLPREFIX}fam_wife ON {$TBLPREFIX}families (f_wife)");
} else { // check columns in the table
	if (self::column_exists("{$TBLPREFIX}families", 'f_name')) {
		self::exec("ALTER TABLE {$TBLPREFIX}families DROP COLUMN f_name");
	}
	if (!self::column_exists("{$TBLPREFIX}families", 'f_numchil')) {
		self::exec("ALTER TABLE {$TBLPREFIX}families ADD f_numchil ".self::$INT4_TYPE." NULL");
	}
}
if (!self::table_exists("{$TBLPREFIX}places") || $sqlite && (self::column_exists("{$TBLPREFIX}places", 'p_gid') || !self::column_exists("{$TBLPREFIX}places", 'p_std_soundex') || !self::column_exists("{$TBLPREFIX}places", 'p_dm_soundex'))) {
	if ($sqlite && self::table_exists("{$TBLPREFIX}places")) {
		self::exec("DROP TABLE {$TBLPREFIX}places");
	}
	self::exec(
		"CREATE TABLE {$TBLPREFIX}places (".
		" p_id          ".self::$INT4_TYPE."         NOT NULL,".
		" p_place       ".self::$VARCHAR_TYPE."(150)     NULL,".
		" p_level       ".self::$INT4_TYPE."             NULL,".
		" p_parent_id   ".self::$INT4_TYPE."             NULL,".
		" p_file        ".self::$INT4_TYPE."             NULL,".
		" p_std_soundex ".self::$TEXT_TYPE."             NULL,".
		" p_dm_soundex  ".self::$TEXT_TYPE."             NULL,".
		" PRIMARY KEY (p_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}place_place  ON {$TBLPREFIX}places (p_place    )");
	self::exec("CREATE INDEX {$TBLPREFIX}place_level  ON {$TBLPREFIX}places (p_level    )");
	self::exec("CREATE INDEX {$TBLPREFIX}place_parent ON {$TBLPREFIX}places (p_parent_id)");
	self::exec("CREATE INDEX {$TBLPREFIX}place_file   ON {$TBLPREFIX}places (p_file     )");
} else {
	if (self::column_exists("{$TBLPREFIX}places", 'p_gid')) {
		self::exec("ALTER TABLE {$TBLPREFIX}places DROP COLUMN p_gid");
	}
	if (!self::column_exists("{$TBLPREFIX}places", 'p_std_soundex')) {
		self::exec("ALTER TABLE {$TBLPREFIX}places ADD p_std_soundex ".self::$TEXT_TYPE." NULL");
	}
	if (!self::column_exists("{$TBLPREFIX}places", 'p_dm_soundex')) {
		self::exec("ALTER TABLE {$TBLPREFIX}places ADD p_dm_soundex ".self::$TEXT_TYPE." NULL");
	}
}
if (!self::table_exists("{$TBLPREFIX}placelinks")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}placelinks (".
		" pl_p_id ".self::$INT4_TYPE." NOT NULL,".
		" pl_gid  ".self::$COL_XREF."  NOT NULL,".
		" pl_file ".self::$COL_FILE."  NOT NULL,".
		" PRIMARY KEY (pl_p_id, pl_gid, pl_file)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}plindex_place ON {$TBLPREFIX}placelinks (pl_p_id)");
	self::exec("CREATE INDEX {$TBLPREFIX}plindex_gid   ON {$TBLPREFIX}placelinks (pl_gid )");
	self::exec("CREATE INDEX {$TBLPREFIX}plindex_file  ON {$TBLPREFIX}placelinks (pl_file)");
}
// The old pgv_names table is now merged with the new pgv_name table
if (self::table_exists("{$TBLPREFIX}names")) {
	self::exec("DROP TABLE {$TBLPREFIX}names", false);
}
if (!self::table_exists("{$TBLPREFIX}dates") || $sqlite && (!self::column_exists("{$TBLPREFIX}dates", 'd_mon') || !self::column_exists("{$TBLPREFIX}dates", 'd_julianday1'))) {
	if ($sqlite && self::table_exists("{$TBLPREFIX}dates")) {
		self::exec("DROP TABLE {$TBLPREFIX}dates");
	}
	self::exec(
		"CREATE TABLE {$TBLPREFIX}dates (".
		" d_day        ".self::$COL_DAY."      NOT NULL,".
		" d_month      ".self::$CHAR_TYPE."(5)     NULL,".
		" d_mon        ".self::$COL_MON."      NOT NULL,".
		" d_year       ".self::$COL_YEAR."     NOT NULL,".
		" d_julianday1 ".self::$COL_JD."       NOT NULL,".
		" d_julianday2 ".self::$COL_JD."       NOT NULL,".
		" d_fact       ".self::$COL_TAG."      NOT NULL,".
		" d_gid        ".self::$COL_XREF."     NOT NULL,".
		" d_file       ".self::$COL_FILE."     NOT NULL,".
		" d_type       ".self::$COL_CAL."      NOT NULL".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}date_day        ON {$TBLPREFIX}dates (d_day        )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_month      ON {$TBLPREFIX}dates (d_month      )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_mon        ON {$TBLPREFIX}dates (d_mon        )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_year       ON {$TBLPREFIX}dates (d_year       )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_julianday1 ON {$TBLPREFIX}dates (d_julianday1 )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_julianday2 ON {$TBLPREFIX}dates (d_julianday2 )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_gid        ON {$TBLPREFIX}dates (d_gid        )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_file       ON {$TBLPREFIX}dates (d_file       )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_type       ON {$TBLPREFIX}dates (d_type       )");
	self::exec("CREATE INDEX {$TBLPREFIX}date_fact_gid   ON {$TBLPREFIX}dates (d_fact, d_gid)");
} else {
	if (!self::column_exists("{$TBLPREFIX}dates", 'd_mon')) {
		self::exec("ALTER TABLE {$TBLPREFIX}dates ADD d_mon ".self::$COL_MON." NULL");
		self::exec("CREATE INDEX date_mon ON {$TBLPREFIX}dates (d_mon)");
	}
	if (!self::column_exists("{$TBLPREFIX}dates", 'd_julianday1')) {
		self::exec("ALTER TABLE {$TBLPREFIX}dates ADD d_julianday1 ".self::$COL_JD." NULL");
		self::exec("ALTER TABLE {$TBLPREFIX}dates ADD d_julianday2 ".self::$COL_JD." NULL");
		self::exec("CREATE INDEX date_julianday1 ON {$TBLPREFIX}dates (d_julianday1)");
		self::exec("CREATE INDEX date_julianday2 ON {$TBLPREFIX}dates (d_julianday2)");
	}
}
if (!self::table_exists("{$TBLPREFIX}media")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}media (".
		" m_id      ".self::$INT4_TYPE."         NOT NULL,".
		" m_media   ".self::$COL_XREF."              NULL,".
		" m_ext     ".self::$VARCHAR_TYPE."(6)       NULL,".
		" m_titl    ".self::$VARCHAR_TYPE."(255)     NULL,".
		" m_file    ".self::$VARCHAR_TYPE."(255)     NULL,".
		" m_gedfile ".self::$COL_FILE."              NULL,".
		" m_gedrec  ".self::$LONGTEXT_TYPE."         NULL,".
		" PRIMARY KEY (m_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}m_media      ON {$TBLPREFIX}media (m_media           )");
	self::exec("CREATE INDEX {$TBLPREFIX}m_media_file ON {$TBLPREFIX}media (m_media, m_gedfile)");
}
if (!self::table_exists("{$TBLPREFIX}remotelinks")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}remotelinks (".
		" r_gid    ".self::$COL_XREF."          NOT NULL,".
		" r_linkid ".self::$VARCHAR_TYPE."(255)     NULL,".
		" r_file   ".self::$COL_FILE."          NOT NULL".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}r_gid     ON {$TBLPREFIX}remotelinks (r_gid   )");
	self::exec("CREATE INDEX {$TBLPREFIX}r_link_id ON {$TBLPREFIX}remotelinks (r_linkid)");
	self::exec("CREATE INDEX {$TBLPREFIX}r_file    ON {$TBLPREFIX}remotelinks (r_file  )");
}
if (!self::table_exists("{$TBLPREFIX}media_mapping")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}media_mapping (".
		" mm_id      ".self::$INT4_TYPE."     NOT NULL,".
		" mm_media   ".self::$COL_XREF."      NOT NULL DEFAULT '',".
		" mm_gid     ".self::$COL_XREF."      NOT NULL DEFAULT '',".
		" mm_order   ".self::$INT4_TYPE."     NOT NULL DEFAULT '0',".
		" mm_gedfile ".self::$COL_FILE."          NULL,".
		" mm_gedrec  ".self::$LONGTEXT_TYPE."     NULL,".
		" PRIMARY KEY (mm_id)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}mm_media_id      ON {$TBLPREFIX}media_mapping (mm_media, mm_gedfile)");
	self::exec("CREATE INDEX {$TBLPREFIX}mm_media_gid     ON {$TBLPREFIX}media_mapping (mm_gid, mm_gedfile  )");
	self::exec("CREATE INDEX {$TBLPREFIX}mm_media_gedfile ON {$TBLPREFIX}media_mapping (mm_gedfile          )");
}
if (!self::table_exists("{$TBLPREFIX}nextid")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}nextid (".
		" ni_id      ".self::$INT4_TYPE." NOT NULL,".
		" ni_type    ".self::$COL_TAG."   NOT NULL,".
		" ni_gedfile ".self::$COL_FILE."  NOT NULL,".
		" PRIMARY KEY (ni_type, ni_gedfile)".
		") ".self::$UTF8_TABLE
	);
}
if (!self::table_exists("{$TBLPREFIX}other")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}other (".
		" o_id     ".self::$COL_XREF."      NOT NULL,".
		" o_file   ".self::$COL_FILE."      NOT NULL,".
		" o_type   ".self::$COL_TAG."           NULL,".
		" o_gedcom ".self::$LONGTEXT_TYPE."     NULL,".
		" PRIMARY KEY (o_id, o_file)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}other_id   ON {$TBLPREFIX}other (o_id  )");
	self::exec("CREATE INDEX {$TBLPREFIX}other_file ON {$TBLPREFIX}other (o_file)");
}
if (!self::table_exists("{$TBLPREFIX}sources") || $sqlite && (!self::column_exists("{$TBLPREFIX}sources", 's_dbid'))) {
	if ($sqlite && self::table_exists("{$TBLPREFIX}sources")) {
		self::exec("DROP TABLE {$TBLPREFIX}sources");
	}
	self::exec(
		"CREATE TABLE {$TBLPREFIX}sources (".
		" s_id     ".self::$COL_XREF."          NOT NULL,".
		" s_file   ".self::$COL_FILE."              NULL,".
		" s_name   ".self::$VARCHAR_TYPE."(255)     NULL,".
		" s_gedcom ".self::$LONGTEXT_TYPE."         NULL,".
		" s_dbid   ".self::$CHAR_TYPE."(1)          NULL,".
		" PRIMARY KEY (s_id, s_file)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}sour_id   ON {$TBLPREFIX}sources (s_id  )");
	self::exec("CREATE INDEX {$TBLPREFIX}sour_name ON {$TBLPREFIX}sources (s_name)");
	self::exec("CREATE INDEX {$TBLPREFIX}sour_file ON {$TBLPREFIX}sources (s_file)");
	self::exec("CREATE INDEX {$TBLPREFIX}sour_dbid ON {$TBLPREFIX}sources (s_dbid)");
} else {
	if (!self::column_exists("{$TBLPREFIX}sources", 's_dbid')) {
		self::exec("ALTER TABLE {$TBLPREFIX}sources ADD s_dbid CHAR(1) NULL");
		self::exec("CREATE INDEX {$TBLPREFIX}sour_dbid ON {$TBLPREFIX}sources (s_dbid)");
	}
}
// The old pgv_soundex table is now merged with the new pgv_name table
if (self::table_exists("{$TBLPREFIX}soundex")) {
	self::exec("DROP TABLE {$TBLPREFIX}soundex");
}
if (!self::table_exists("{$TBLPREFIX}link")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}link (".
		" l_file    ".self::$COL_FILE." NOT NULL,".
		" l_from    ".self::$COL_XREF." NOT NULL,".
		" l_type    ".self::$COL_TAG."  NOT NULL,".
		" l_to      ".self::$COL_XREF." NOT NULL,".
		" PRIMARY KEY (l_from, l_file, l_type, l_to)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE UNIQUE INDEX {$TBLPREFIX}ux1 ON {$TBLPREFIX}link (l_to, l_file, l_type, l_from)");
}
if (!self::table_exists("{$TBLPREFIX}name")) {
	self::exec(
		"CREATE TABLE {$TBLPREFIX}name (".
		" n_file             ".self::$COL_FILE."          NOT NULL,".
		" n_id               ".self::$COL_XREF."          NOT NULL,".
		" n_num              ".self::$INT4_TYPE."         NOT NULL,".
		" n_type             ".self::$VARCHAR_TYPE."(15)  NOT NULL,".
		" n_sort             ".self::$VARCHAR_TYPE."(255) NOT NULL,". // e.g. "GOGH,VINCENT WILLEM"
		" n_full             ".self::$VARCHAR_TYPE."(255) NOT NULL,". // e.g. "Vincent Willem van GOGH"
		" n_list             ".self::$VARCHAR_TYPE."(255) NOT NULL,". // e.g. "van GOGH, Vincent Willem"
		// These fields are only used for INDI records
		" n_surname          ".self::$VARCHAR_TYPE."(255)     NULL,". // e.g. "van GOGH"
		" n_surn             ".self::$VARCHAR_TYPE."(255)     NULL,". // e.g. "GOGH"
		" n_givn             ".self::$VARCHAR_TYPE."(255)     NULL,". // e.g. "Vincent Willem"
		" n_soundex_givn_std ".self::$VARCHAR_TYPE."(255)     NULL,".
		" n_soundex_surn_std ".self::$VARCHAR_TYPE."(255)     NULL,".
		" n_soundex_givn_dm  ".self::$VARCHAR_TYPE."(255)     NULL,".
		" n_soundex_surn_dm  ".self::$VARCHAR_TYPE."(255)     NULL,".
		" PRIMARY KEY (n_id, n_file, n_num)".
		") ".self::$UTF8_TABLE
	);
	self::exec("CREATE INDEX {$TBLPREFIX}name_file ON {$TBLPREFIX}name (n_file)");
}

// Update the version to indicate sucess
set_site_setting($schema_name, $next_version);
