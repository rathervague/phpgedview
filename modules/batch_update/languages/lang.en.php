<?php
/**
 * English Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 to 2010  PGV Development Team.  All rights reserved.
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
 * @package PhpGedView
 * @subpackage BatchUpdate
 * @version $Id: lang.en.php 6931 2010-02-12 20:45:23Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]="Batch Update";
$pgv_lang["bu_update_chan"]="Update the CHAN record";
$pgv_lang["bu_nothing"]="Nothing found.";
$pgv_lang["bu__desc"]="Select a batch update from this list.";
$pgv_lang["bu_button_update"]="Update";
$pgv_lang["bu_button_update_all"]="Update all";
$pgv_lang["bu_button_delete"]="Delete";
$pgv_lang["bu_button_delete_all"]="Delete all";

$pgv_lang["bu_search_replace"]="Search and Replace";
$pgv_lang["bu_search_replace_desc"]="Search and/or replace data in your GEDCOM using simple searches or advanced pattern matching.";
$pgv_lang["bu_search"]="Search text/pattern";
$pgv_lang["bu_replace"]="Replacement text";
$pgv_lang["bu_method"]="Search method";
$pgv_lang["bu_exact"]="Exact text";
$pgv_lang["bu_exact_desc"]="Match the exact text, even if it occurs in the middle of a word.";
$pgv_lang["bu_words"]="Whole words only";
$pgv_lang["bu_words_desc"]="Match the exact text, unless it occurs in the middle of a word.";
$pgv_lang["bu_wildcards"]="Wildcards";
$pgv_lang["bu_wildcards_desc"]="Use a &laquo;?&raquo; to match a single character, use &laquo;*&raquo; to match zero or more characters.";
$pgv_lang["bu_regex"]="Regular expression";
$pgv_lang["bu_regex_desc"]="Regular expressions are an advanced pattern matching technique.  See <a href=\"http://php.net/manual/en/regexp.reference.php\" target=\"_new\">php.net/manual/en/regexp.reference.php</a> for futher details.";
$pgv_lang["bu_regex_bad"]="The regex appears to contain an error.  It can't be used.";
$pgv_lang["bu_case"]="Case insensitive";
$pgv_lang["bu_case_desc"]="Tick this box to match both upper and lower case letters.";

$pgv_lang["bu_birth_y"]="Add missing birth records";
$pgv_lang["bu_birth_y_desc"]="You can improve the performance of PGV by ensuring that all individuals have a &laquo;start of life&raquo; event.";

$pgv_lang["bu_death_y"]="Add missing death records";
$pgv_lang["bu_death_y_desc"]="You can improve the performance of PGV by ensuring that all individuals have (where appropriate) an &laquo;end of life&raquo; event.";

$pgv_lang["bu_married_names"]="Add missing married names";
$pgv_lang["bu_married_names_desc"]="You can make it easier to search for married women by recording their married name.<br />However not all women take their husband's surname, so beware of introducing incorrect information into your database.";
$pgv_lang["bu_surname_option"]="Surname Option";
$pgv_lang["bu_surname_replace"]="Wife's surname replaced by husband's surname";
$pgv_lang["bu_surname_add"]="Wife's maiden surname becomes new given name";

$pgv_lang["bu_name_format"]="Fix name slashes and spaces";
$pgv_lang["bu_name_format_desc"]="Correct NAME records of the form 'John/DOE/' or 'John /DOE', as produced by older genealogy programs.";

$pgv_lang["bu_duplicate_links"]="Remove duplicate links";
$pgv_lang["bu_duplicate_links_desc"]="A common error is to have multiple links to the same record, for example listing the same child more than once in a family record.";

$pgv_lang["bu_tmglatlon"]="Fix TMG latlon data";
$pgv_lang["bu_tmglatlon_desc"]="Converts The Master Genealogist's proprietary lat/lon format to the GEDCOM 5.5.1 standard that PGV can read.  Note: changes are not highlighted in the final output shown below.";
?>
