<?php
/**
 * Greek texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
 *
 * @package PhpGedView
 * @author Nicholas G. Antimisiaris
 * @version $Id: editor.el.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"]						= "Αποδοχή / Απόρριψη Αλλαγών";
$pgv_lang["replace"]							= "Αντικατάσταση Στοιχείου";
$pgv_lang["append"]								= "Append Record";
$pgv_lang["review_changes"]						= "Ανασκόπιση Αλλαγών GEDCOM";
$pgv_lang["add_obje"]							= "Προσθήκη νέου αντικειμένου πολυμέσων";
$pgv_lang["add_name"]							= "Προσθήκη Νέου Ονόματος";
$pgv_lang["edit_raw"]							= "Edit raw GEDCOM record";
$pgv_lang["accept"]								= "Αποδοχή";
$pgv_lang["accept_all"]							= "Αποδοχή όλων των Αλλαγών";
$pgv_lang["accept_gedcom"]						= "Decide for each change to either accept or reject it.<br />To accept all changes at once, click \"Accept all changes\" in the box below.<br />To get more information about a change, <br />click \"View change diff\" to see the differences between old and new situation, <br />or click \"View GEDCOM record\" to see the new situation in GEDCOM format.";
$pgv_lang["accept_successful"]					= "Επιτυχής ενημέρωση αλλαγών στη βάση δεδομένων";
$pgv_lang["add_child"]							= "Προσθήκη Παιδιού";
$pgv_lang["add_child_to_family"]				= "Προσθήκη παιδιού στην οικογένεια αυτή";
$pgv_lang["add_fact"]							= "Προσθήκη νέου στοιχείου";
$pgv_lang["add_father"]							= "Προσθήκη νέου πατέρα";
$pgv_lang["add_husb"]							= "Προσθήκη Συζύγου-Άνδρα";
$pgv_lang["add_husb_to_family"]					= "Προσθήκη Συζύγου-Άνδρα σε αυτή την οικογένεια";
$pgv_lang["add_media"]							= "Προσθήκη νέου τύπου Πολυμέσων";
$pgv_lang["add_media_lbl"]						= "Προσθήκη Πολυμέσων";
$pgv_lang["add_mother"]							= "Προσθήκη νέας μητέρας";
$pgv_lang["add_new_husb"]						= "Προσθήκη νέου συζύγου";
$pgv_lang["add_new_wife"]						= "Προσθήκη νέας συζύγου";
$pgv_lang["add_note"]							= "Προσθήκη νέου Σημειώματος/Σχολίου";
$pgv_lang["add_note_lbl"]						= "Προσθήκη Σημείωσης/Σχολίων";
$pgv_lang["add_sibling"]						= "Προσθήκη Αδελφού ή Αδελφής";
$pgv_lang["add_son_daughter"]					= "Προσθήκη Υιού ή Θυγατέρας";
$pgv_lang["add_source"]							= "Add a new Source Citation";
$pgv_lang["add_source_lbl"]						= "Add Source Citation";
$pgv_lang["add_wife"]							= "Προσθήκη Συγύζου-Γυναίκας";
$pgv_lang["add_wife_to_family"]					= "Προσθήκη Συζύγου-Γυναίκας σε αυτή την οικογένεια";
$pgv_lang["changes_occurred"]					= "The following changes occured to this individual:";
$pgv_lang["create_source"]						= "Δημιουργία νέας πηγής";
$pgv_lang["date"]								= "Ημερομηνία";
$pgv_lang["file_missing"]						= "No file was received. Upload again.";
$pgv_lang["file_partial"]						= "File was only partially uploaded, please try again";
$pgv_lang["file_success"]						= "Η Αποστολή Αρχείου ολοκληρώθηκε με επιτυχία";
$pgv_lang["file_too_big"]						= "Uploaded file exceeds the allowed size";
$pgv_lang["gedcom_editing_disabled"]			= "Editing this GEDCOM has been disabled by the system administrator.";
$pgv_lang["gedcomid"]							= "GEDCOM INDI record ID";
$pgv_lang["gedrec_deleted"]						= "GEDCOM record succesfully deleted.";
$pgv_lang["hide_changes"]						= "Επιλέξτε εδώ για απόκρυψη αλλαγών.";
$pgv_lang["highlighted"]						= "Highlited Image";
$pgv_lang["media_file"]							= "Αρχείο Πολυμέσων";
$pgv_lang["must_provide"]						= "You must provide a ";
$pgv_lang["new_source_created"]					= "New source created successfully.";
$pgv_lang["no_changes"]							= "There are currently no changes that need to be reviewed.";
$pgv_lang["no_temple"]							= "No Temple - Living Ordinance";
$pgv_lang["paste_id_into_field"]				= "Paste the following source ID into your editing fields to reference this source ";
$pgv_lang["privacy_not_granted"]				= "You have no access to";
$pgv_lang["privacy_prevented_editing"]			= "The privacy settings prevent you from editing this record.";
$pgv_lang["show_changes"]						= "This record has been updated.  Click here to show changes.";
$pgv_lang["thumbnail"]							= "Thumbnail";
$pgv_lang["undo"]								= "Undo";
$pgv_lang["undo_successful"]					= "Undo Successful";
$pgv_lang["update_successful"]					= "Ενημερώθηκε επιτυχώς";
$pgv_lang["upload_error"]						= "Υπήρχε σφάλμα κατά την αποστολή του αρχείου.";
$pgv_lang["upload_media"]						= "Αποστολή Αρχείων Πολυμέσων";
$pgv_lang["upload_successful"]					= "Επιτυχής Αποστολή";
$pgv_lang["view_change_diff"]					= "View Change Diff";


?>
