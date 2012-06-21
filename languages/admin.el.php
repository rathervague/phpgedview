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
 * @version $Id: admin.el.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["step2"]								= "Βήμα 2 από 4:";
$pgv_lang["gedcom_deleted"]						= "GEDCOM [#GED#] succesfully deleted.";
$pgv_lang["full_name"]							= "Ονοματεπώνυμο";
$pgv_lang["error_header"]						= "Το αρχείο GEDCOM, [#GEDCOM#], δεν υπάρχει στο συγκεκριμένο χώρο.";
$pgv_lang["manage_gedcoms"]						= "Διαχείριση GEDCOMs και Διαμόρφωση Προστασίας Προσωπικών Δεδομένων";
$pgv_lang["created_indis"]						= "Επιτυχής δημιουργία <i>Individuals</i> πίνακα.";
$pgv_lang["created_indis_fail"]					= "Ανεπιτυχής δημιουργία <i>Individuals</i> πίνακα.";
$pgv_lang["created_fams"]						= "Επιτυχής δημιουργία <i>Families</i> πίνακα.";
$pgv_lang["created_fams_fail"]					= "Ανεπιτυχής δημιουργία <i>Families</i> πίνακα.";
$pgv_lang["created_sources"]					= "Επιτυχής δημιουργία <i>Sources</i> πίνακα.";
$pgv_lang["created_sources_fail"]				= "Ανεπιτυχής δημιουργία <i>Sources</i> πίνακα.";
$pgv_lang["created_other"]						= "Successfully created <i>Other</i> table.";
$pgv_lang["created_other_fail"]					= "Unable to create <i>Other</i> table.";
$pgv_lang["created_places"]						= "Successfully created <i>Places</i> table.";
$pgv_lang["created_places_fail"]				= "Unable to create <i>Places</i> table.";
$pgv_lang["folder_created"]						= "Δημιουργήθηκε Φάκελος";
$pgv_lang["add_gedcom"]							= "Προσθήκη GEDCOM";
$pgv_lang["add_new_gedcom"]						= "Δημιουργία Νέου Αρχείου GEDCOM";
$pgv_lang["admin_approved"]						= "Your account at #SERVER_NAME# has been approved";
$pgv_lang["admin_gedcom"]						= "Διαχείριση GEDCOM";
$pgv_lang["administration"]						= "Διαχείριση";
$pgv_lang["ansi_encoding_detected"]				= "ANSI File Encoding detected.   PhpGedView works best with files encoded in UTF-8.";
$pgv_lang["ansi_to_utf8"]						= "Μετατροπή ANSI encoded GEDCOM σε UTF-8?";
$pgv_lang["bytes_read"]							= "Bytes Διαβάστηκαν:";
$pgv_lang["change_id"]							= "Change Individual ID to:";
$pgv_lang["cleanup_places"]						= "Cleanup Places";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Click here to go the the pedigree tree.";
$pgv_lang["configuration"]						= "Διαμόρφωση";
$pgv_lang["confirm_user_delete"]				= "Σίγουρα θέλετε να διαγράψτε τον χρήστη";
$pgv_lang["create_user"]						= "Δημιουργία Χρήστη";
$pgv_lang["dataset_exists"]						= "A GEDCOM with this filename has already been imported into the database.";
$pgv_lang["day_before_month"]					= "Ημέρα πριν από Μήνα (ΗΗ ΜΜ ΕΕΕΕ)";
$pgv_lang["do_not_change"]						= "Do not change";
$pgv_lang["download_gedcom"]					= "Λήψη Αρχείου GEDCOM";
$pgv_lang["download_note"]						= "NOTE: Large GEDCOMs can take a long time to process before downloading.  If PHP times out before the download is complete, then you may not get a complete download.  You can check the downloaded GEDCOM for the 0 TRLR line at the end of the file to make sure it downloaded correctly.  In general it could take as much time to download as it took to import your GEDCOM.";
$pgv_lang["editaccount"]						= "Allow this user to edit their account information";
$pgv_lang["empty_dataset"]						= "Do you want to erase the old data and replace it with this new data?";
$pgv_lang["empty_lines_detected"]				= "Empty lines were detected in your GEDCOM file.   On cleanup, these empty lines will be removed.";
$pgv_lang["error_header_write"]					= "Το αρχείο GEDCOM, [#GEDCOM#], δεν είναι εγγράψιμο. Ελέγξτε τις ιδιότητες και τα δικαιώματα πρόσβασης.";
$pgv_lang["example_date"]						= "Example of invalid date from your GEDCOM:";
$pgv_lang["found_record"]						= "Βρέθηκαν στοιχεία";
$pgv_lang["ged_import"]							= "Εισαγωγή";
$pgv_lang["gedcom_config_write_error"]			= "Error!!! Cannot write to the GEDCOM configuration file.";
$pgv_lang["img_admin_settings"]					= "Edit Image Manipulation Configuration";
$pgv_lang["import_complete"]					= "Import Complete";
$pgv_lang["import_progress"]					= "Πρόοδος Διαδικασίας Εισαγωγής...";
$pgv_lang["inc_languages"]						= " Γλώσσες";
$pgv_lang["invalid_dates"]						= "Detected invalid date formats, on cleanup these will be changed to format of DD MMM YYYY (ie. 1 JAN 2004).";
$pgv_lang["invalid_header"]						= "Detected lines before the GEDCOM header (0 HEAD).  On cleanup these lines will be removed.";
$pgv_lang["logfile_content"]					= "Content of log-file";
$pgv_lang["macfile_detected"]					= "Macintosh file detected.  On cleanup your file will be converted to a DOS file.";
$pgv_lang["merge_records"]						= "Merge Records";
$pgv_lang["month_before_day"]					= "Μήνας πριν από Ημέρα (ΜΜ ΗΗ ΕΕΕΕ)";
$pgv_lang["performing_validation"]				= "Performing GEDCOM validation, select the necessary options then click 'Cleanup'";
$pgv_lang["pgv_registry"]						= "Εμφάνιση άλλων σελίδων που χρησιμοποιούν την εφαρμογή PhpGedView";
$pgv_lang["place_cleanup_detected"]				= "Invalid place encodings were detected.  These errors should be fixed.  The following sample shows the invalid place that was detected: ";
$pgv_lang["please_be_patient"]					= "ΠΑΡΑΚΑΛΩ ΥΠΟΜΟΝΗ";
$pgv_lang["reading_file"]						= "Επεξεργασία Αρχείου GEDCOM";
$pgv_lang["readme_documentation"]				= "README Κείμενο Τεκμηρίωσης";
$pgv_lang["rootid"]								= "Pedigree Chart Root Person";
$pgv_lang["select_an_option"]					= "Επιλέξτε ένα από τα ακόλουθα:";
$pgv_lang["skip_cleanup"]						= "Skip Cleanup";
$pgv_lang["update_myaccount"]					= "Update MyAccount";
$pgv_lang["update_user"]						= "Ενημέρωση Λογαριασμού Χρήστη";
$pgv_lang["upload_gedcom"]						= "Αποστολή Αρχείου GEDCOM";
$pgv_lang["user_contact_method"]				= "Προτιμητέα Μέθοδος Επικοινωνίας";
$pgv_lang["user_create_error"]					= "Unable to add user.  Please go back and try again.";
$pgv_lang["user_created"]						= "Ο Χρήστης δημιουργήθηκε επιτυχώς.";
$pgv_lang["valid_gedcom"]						= "Valid GEDCOM Detected.   No cleanup required.";
$pgv_lang["validate_gedcom"]					= "Validate GEDCOM";
$pgv_lang["verified"]							= "User verified himself";
$pgv_lang["verified_by_admin"]					= "User Approved by Admin";
$pgv_lang["verify_upload_instructions"]			= "If you choose to continue, the old GEDCOM file will be replaced with the file that you uploaded and the import process will begin again.  If you choose to cancel, the old GEDCOM will remain unchanged.";
$pgv_lang["view_logs"]							= "View logfiles";
$pgv_lang["visibleonline"]						= "Visible to other users when online";
$pgv_lang["you_may_login"]						= " by the site administrator.  You may now login to the PhpGedView Site by going to the link below:";


?>
