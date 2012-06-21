<?php
/**
 * Dutch texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
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
 * @subpackage Languages
 * @authors Erik Bent, Jans B. Luder, Boudewijn Sjouke, Eduard Wustenveld
 * @version $Id: editor.nl.php 6979 2010-09-09 02:04:28Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]				= "Huwelijksdetails toevoegen";
$pgv_lang["edit_concurrency_change"] 	= "Deze kaart is het laatst gewijzigd door <i>#CHANGEUSER#</i> op #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]		= "De kaart met id #PID# is gewijzigd door een andere gebruiker sinds u het heeft bekeken.";
$pgv_lang["edit_concurrency_msg1"]		= "Een fout is opgetreden bij het maken van het Wijzigen Formulier.  Een andere gebruiker kan de kaart hebben gewijzigd sinds u het heeft bekeken.";
$pgv_lang["edit_concurrency_reload"]	= "Herlaad a.u.b. de vorige pagina, om er zeker van te zijn dat u met de meest recente kaart werkt.";
$pgv_lang["admin_override"]				= "Beheerder's Optie";
$pgv_lang["no_update_CHAN"]				= "De CHAN (Laatste Wijziging) -kaart niet bijwerken";
$pgv_lang["select_events"]				= "Selecteer Gebeurtenissen";
$pgv_lang["source_events"]				= "Gebeurtenis met deze bron verbinden";
$pgv_lang["advanced_name_fields"]		= "Toegevoegde names (roepnaam, huwelijkse naam, etc.)";
$pgv_lang["accept_changes"]				= "Wijzigingen accepteren/ongedaan maken";
$pgv_lang["replace"]					= "Gegevens vervangen";
$pgv_lang["append"]						= "Gegevens toevoegen";
$pgv_lang["review_changes"]				= "Beoordeel GEDCOM-wijzigingen";
$pgv_lang["remove_object"]				= "Verwijder object";
$pgv_lang["remove_links"]				= "Verwijder koppelingen";
$pgv_lang["media_not_deleted"]			= "Multimediamap niet verwijderd";
$pgv_lang["thumbs_not_deleted"]			= "Map voor miniweergaves niet verwijderd";
$pgv_lang["thumbs_deleted"]				= "Map miniweergaves succesvol verwijderd";
$pgv_lang["show_thumbnail"]				= "Toon miniweergaves";
$pgv_lang["link_media"]					= "Koppel multimedia";
$pgv_lang["to_person"]					= "aan een persoon";
$pgv_lang["to_family"]					= "aan een gezin";
$pgv_lang["to_source"]					= "aan een bron";
$pgv_lang["to_note"]					= "aan een Gedeelde Notitie";
$pgv_lang["to_repository"]				= "aan een bewaarplaats";
$pgv_lang["edit_fam"]					= "Wijzig gezin";
$pgv_lang["edit_repo"]					= "Wijzig bewaarplaats";
$pgv_lang["copy"]						= "Kopiëren";
$pgv_lang["cut"]						= "Knippen";
$pgv_lang["sort_by_birth"]				= "Sorteren op geboortedatum";
$pgv_lang["reorder_children"]			= "Kinderen herschikken";
$pgv_lang["reorder_media"]				= "Media hersorteren";
$pgv_lang["reorder_media_title"]		= "Drag-and-drop miniweergaves om media items te hersorteren";
$pgv_lang["reorder_media_window"]		= "Media hersorteren(window)";
$pgv_lang["reorder_media_window_title"]	= "Klik op een rij, dan drag-and-drop om media te hersorteren";
$pgv_lang["reorder_media_save"]			= "Gesorteerde media opslaan";
$pgv_lang["reorder_media_reset"]		= "Terugzetten in de originele volgorde";
$pgv_lang["reorder_media_cancel"]		= "Afbreken en terug";
$pgv_lang["add_from_clipboard"]			= "Toevoegen vanaf klembord";
$pgv_lang["record_copied"]				= "Gegevens naar klembord gekopieerd";
$pgv_lang["add_unlinked_person"]		= "Niet gekoppeld persoon toevoegen";
$pgv_lang["add_unlinked_source"]		= "Niet gekoppelde bron toevoegen";
$pgv_lang["add_unlinked_note"]			= "Ongekoppelde notitie toevoegen";
$pgv_lang["add_unlinked"]				= "Ongekoppelde kaarten";
$pgv_lang["server_file"]				= "Bestandsnaam op server";
$pgv_lang["server_file_advice"]			= "Niet wijzigen om originele bestandsnaam te behouden.";
$pgv_lang["server_file_advice2"]		= "Hier kan een URL worden ingevoerd, beginnend met &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]		= "Voer maximaal #GLOBALS[MEDIA_DIRECTORY_LEVELS]# mapnamen in, welke komen na &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Voer niet het  &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; deel van de mapnaam in.";
$pgv_lang["server_folder_advice2"]		= "Dit veld wordt genegeerd indien een URL is ingevoerd in het bestandsnaam veld.";
$pgv_lang["add_linkid_advice"]			= "Voer de ID van de persoon, familie of bron in (of zoek hiernaar) met welke dit mediabestand moet worden verbonden.";
$pgv_lang["use_browse_advice"]			= "Gebruik de knop &laquo;Bladeren&raquo; of &laquo;Browse&raquo; om op uw computer naar de gewenste file te zoeken.";
$pgv_lang["add_media_other_folder"]		= "Andere map ... voer in";
$pgv_lang["add_media_file"]				= "Bestaand mediabestand op server";
$pgv_lang["main_media_ok1"]				= "Mediabestand <b>#GLOBALS[oldMediaName]#</b> hernoemd naar <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]				= "Mediabestand <b>#GLOBALS[oldMediaName]#</b> verplaatst van <b>#GLOBALS[oldMediaFolder]#</b> naar <b>#GLOBALS[newMediaFolder]#</b>";
$pgv_lang["main_media_ok3"]				= "Mediabestand verplaatst en hernoemd van <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> naar <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "Mediabestand <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> bestaat niet.";
$pgv_lang["main_media_fail1"]			= "Mediabestand <b>#GLOBALS[oldMediaName]#</b> kan nier worden hernoemd naar <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Mediabestand <b>#GLOBALS[oldMediaName]#</b> kan niet worden verplaatst van <b>#GLOBALS[oldMediaFolder]#</b> naar <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]			= "Mediabestand kan niet worden verplaatst en hernoemd van <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> naar <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Opmerking: U moet de 'Gebruik GEDCOM (RESN) Privacy beperking' aanzetten, om deze instelling effectief te maken.";
$pgv_lang["thumb_media_ok1"]			= "Miniatuurweergave <b>#GLOBALS[oldMediaName]#</b> hernoemd naar <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]			= "Miniatuurweergave <b>#GLOBALS[oldMediaName]#</b> verplaatst van <b>#GLOBALS[oldThumbFolder]#</b> naar <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]			= "Miniatuurweergave verplaatst en hernoemd van <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> naar <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.|";
$pgv_lang["thumb_media_fail0"]			= "Miniatuurweergave <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> bestaat niet.";
$pgv_lang["thumb_media_fail1"]			= "Miniatuurweergave <b>#GLOBALS[oldMediaName]#</b> kan niet worden hernoemd naar <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Miniatuurweergave <b>#GLOBALS[oldMediaName]#</b> kan niet worden verplaatst van <b>#GLOBALS[oldThumbFolder]#</b> naar <b>#GLOBALS[newThumbFolder]#</b>.|";
$pgv_lang["thumb_media_fail3"]			= "Miniatuurweergave kan niet worden verplaatst en hernoemd van <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> naar <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]					= "Nieuwe relatie toevoegen";
$pgv_lang["edit_sex"]					= "Wijzig geslacht";
$pgv_lang["add_obje"]					= "Multimedia-object toevoegen";
$pgv_lang["add_name"]					= "Nieuwe voor/achternaam toevoegen";
$pgv_lang["edit_raw"]					= "Wijzig GEDCOM-gegevens";
$pgv_lang["label_add_remote_link"]  	= "Koppeling toevoegen";
$pgv_lang["label_gedcom_id"]        	= "GEDCOM-ID";
$pgv_lang["label_local_id"]         	= "Persoons-ID";
$pgv_lang["accept"]						= "Accepteer";
$pgv_lang["accept_all"]					= "Accepteer alle wijzigingen";
$pgv_lang["accept_gedcom"]				= "Geef voor iedere wijziging aan of deze geaccepteerd moet worden of ongedaan gemaakt.<br />Klik \"Accepteer alle wijzigingen\" om alle in een handeling door te voeren.<br />Klik \"Toon wijzigingen\" om de oude en nieuwe situatie te zien,<br />klik \"Toon GEDCOM-gegevens\" om de nieuwe situatie in GEDCOM-formaat te bekijken.";
$pgv_lang["accept_successful"]			= "Wijzigingen succesvol aangebracht in de database";
$pgv_lang["add_child"]					= "Kind toevoegen";
$pgv_lang["add_child_to_family"]		= "Kind toevoegen aan dit gezin";
$pgv_lang["add_fact"]					= "Nieuw feit toevoegen";
$pgv_lang["add_father"]					= "Vader toevoegen";
$pgv_lang["add_husb"]					= "Partner toevoegen";
$pgv_lang["add_opf_child"]				= "Voeg kind toe, om een 1-ouder gezin te maken";
$pgv_lang["add_husb_to_family"]			= "Voeg partner toe aan dit gezin";
$pgv_lang["add_media"]					= "Koppeling met nieuw mediabestand toevoegen";
$pgv_lang["add_media_lbl"]				= "Koppeling met multimedia toevoegen";
$pgv_lang["add_mother"]					= "Moeder toevoegen";
$pgv_lang["add_new_chil"]				= "Nieuw kind toevoegen";
$pgv_lang["add_new_husb"]				= "Nieuwe partner toevoegen";
$pgv_lang["add_new_wife"]				= "Nieuwe partner toevoegen";
$pgv_lang["add_note"]					= "Nieuwe notitie toevoegen";
$pgv_lang["add_note_lbl"]				= "Notitie toevoegen";
$pgv_lang["add_shared_note"]			= "Gedeelde notitie toevoegen";
$pgv_lang["add_shared_note_lbl"]		= "Gedeelde notitie toevoegen";
$pgv_lang["add_sibling"]				= "Broer of zus toevoegen";
$pgv_lang["add_son_daughter"]			= "Zoon of dochter toevoegen";
$pgv_lang["add_source"]					= "Nieuwe bronvermelding toevoegen";
$pgv_lang["add_source_lbl"]				= "Bronvermelding toevoegen";
$pgv_lang["add_wife"]					= "Partner toevoegen";
$pgv_lang["add_wife_to_family"]			= "Partner aan dit gezin toevoegen";
$pgv_lang["advanced_search_discription"] = "Geavanceerd zoeken";
$pgv_lang["auto_thumbnail"]				= "Automatische miniweergave";
$pgv_lang["basic_search"]				= "Zoeken";
$pgv_lang["basic_search_discription"] 	= "Eenvoudig zoeken";
$pgv_lang["birthdate_search"]			= "Geboortedatum: ";
$pgv_lang["birthplace_search"]			= "Geboorteplaats: ";
$pgv_lang["change"]						= "Wijzig";
$pgv_lang["change_family_instr"]		= "Op deze pagina kunt u gezinsleden wijzigen en verwijderen.<br /><br />Voor ieder gezinslid kunt u de koppeling \"Wijzig\" gebruiken om en ander persoon de desbetreffende rol binnen het gezin te geven. U kunt ook de koppeling \"Verwijderen\"gebruiken om de persoon uit het gezin te verwijderen.<br /><br />Als u klaar bent met aanpassen van de gezinsleden, kunt u de wijzigingen opslaan met de \"Opslaan\"-knop.<br />";
$pgv_lang["change_family_members"]		= "Wijzig gezinsleden";
$pgv_lang["changes_occurred"]			= "De volgende wijzigingen zijn voorgekomen voor deze persoon:";
$pgv_lang["confirm_remove"]				= "Weet u zeker dat u deze persoon uit het gezin wilt verwijderen?";
$pgv_lang["confirm_remove_object"]		= "Object uit database verwijderen?";
$pgv_lang["create_repository"]			= "Maak nieuwe bewaarplaats";
$pgv_lang["shared_note_assisted"]		= "Gedeelde Notitie m.b.v. Assistent";
$pgv_lang["create_shared_note"]				= "Maak nieuwe Gedeelde Notitie";
$pgv_lang["create_shared_note_assisted"]	= "Maak nieuwe Gedeelde Notitie m.b.v. Assistent";
$pgv_lang["add_new_event_assisted"]		= "Maak een nieuwe Gebeurtenis, met gebruik van de Assistent";
$pgv_lang["create_source"]				= "Nieuwe bron";
$pgv_lang["current_person"]         	= "Zelfde als huidige";
$pgv_lang["date"]						= "Datum";
$pgv_lang["deathdate_search"]			= "Overlijdensdatum: ";
$pgv_lang["deathplace_search"]			= "Plaats van overlijden: ";
$pgv_lang["delete_dir_success"]			= "Mappen voor multimedia en miniweergaves succesvol verwijderd";
$pgv_lang["delete_file"]				= "Verwijder bestand";
$pgv_lang["delete_repo"]				= "Verwijder bewaarplaats";
$pgv_lang["directory_not_empty"]		= "Map is niet leeg";
$pgv_lang["directory_not_exist"]		= "Map bestaat niet";
$pgv_lang["error_remote"]           	= "U heeft een gekoppelde site geselecteerd.";
$pgv_lang["error_same"]             	= "U heeft dezelfde site geselecteerd.";
$pgv_lang["external_file"]				= "Dit mediabestand bestaat niet op deze server. Het kan niet worden verwijderd, verplaatsts of hernoemd.";
$pgv_lang["file_missing"]				= "Geen bestand ontvangen. Verstuur het bestand opnieuw.";
$pgv_lang["file_partial"]				= "Het bestand is slechts gedeeltelijk overgestuurd. Probeer het opnieuw.";
$pgv_lang["file_success"]				= "Het bestand is goed verstuurd";
$pgv_lang["file_too_big"]				= "Het bestand is te groot.";
$pgv_lang["file_no_temp_dir"]			= "Missende PHP tijdelijke map";
$pgv_lang["file_cant_write"]			= "PHP kan niet naar de schijf schrijven";
$pgv_lang["file_bad_extension"]			= "PHP blokkeert bestand door foute extensie";
$pgv_lang["file_unkown_err"]			= "Obekende bestands upload foutcode #pgv_lang[global_num1]#. Rapporteer dit a.u.b. als een bug.";
$pgv_lang["folder"]		 				= "Map";
$pgv_lang["gedcom_editing_disabled"]	= "De beheerder staat het wijzigen van deze genealogie niet toe.";
$pgv_lang["gedrec_deleted"]				= "GEDCOM-record verwijderd.";
$pgv_lang["gen_thumb"]					= "Genereren miniweergave";
$pgv_lang["gen_missing_thumbs"]			= "Maak missende miniweergaves";
$pgv_lang["gen_missing_thumbs_lbl"]		= "Missende miniweergaves";
$pgv_lang["gender_search"]				= "Geslacht: ";
$pgv_lang["generate_thumbnail"]			= "Genereer automatisch miniweergave van ";
$pgv_lang["hebrew_givn"]				= "Hebreeuwse voornamen";
$pgv_lang["hebrew_surn"]				= "Hebreeuwse achternaam";
$pgv_lang["hide_changes"]				= "Klik hier om wijzigingen te verbergen.";
$pgv_lang["highlighted"]				= "Primaire afbeelding";
$pgv_lang["illegal_chars"]				= "Ongeldige karakters in de naam";
$pgv_lang["invalid_search_multisite_input"] = "Voer één van de volgende gegevens in: Naam, Geboortedatum, Geboorteplaats, Overlijdensdatum, Plaats van overlijden of Geslacht";
$pgv_lang["invalid_search_multisite_input_gender"] = "Zoek nogmaals met meer informatie dan alleen geslacht";
$pgv_lang["label_diff_server"]      	= "Andere site";
$pgv_lang["label_location"]         	= "Locatie";
$pgv_lang["label_password_id2"]			= "Wachtwoord: ";
$pgv_lang["label_rel_to_current"]   	= "Relatie met huidige persoon";
$pgv_lang["label_same_server"]      	= "Zelfde site";
$pgv_lang["label_site"]             	= "Site";
$pgv_lang["label_site_url"]         	= "Website URL:";
$pgv_lang["label_username_id2"]			= "Gebruikersnaam: ";
$pgv_lang["lbl_server_list"]        	= "Gebruik een bestaande site.";
$pgv_lang["lbl_type_server"]         	= "Voer nieuwe site in:";
$pgv_lang["link_as_child"]				= "Koppel deze persoon als kind aan een bestaand gezin";
$pgv_lang["link_as_husband"]			= "Koppel deze persoon als partner aan een bestaand gezin";
$pgv_lang["link_success"]				= "Koppeling toegevoegd";
$pgv_lang["link_to_existing_media"]		= "Verbind met bestaand mediabestand";
$pgv_lang["max_media_depth"]			= "U kunt niet meer dan #MEDIA_DIRECTORY_LEVELS# niveaus diep in de mappen gaan";
$pgv_lang["max_upload_size"]			= "Maximale uploadgrootte: ";
$pgv_lang["media_deleted"]				= "Multimediamap succesvol verwijderd";
$pgv_lang["media_exists"]				= "Multimediabestand bestaat al.";
$pgv_lang["media_file"]					= "Mediabestand";
$pgv_lang["media_file_deleted"]			= "Mediabestand verwijderd.";
$pgv_lang["media_file_moved"]			= "Media bestand niet verplaatst.";
$pgv_lang["media_file_not_moved"]		= "Mediabestand kan niet worden verplaatst.";
$pgv_lang["media_file_not_renamed"]		= "Mediabestand kan niet worden verplaatst of hernoemd.";
$pgv_lang["media_thumb_exists"]			= "Miniweergave bestaat al.";
$pgv_lang["multiple_gedcoms"]			= "Deze file is gekoppeld aan een andere genealogische database op deze server. De file kan niet worden verwijderd, verplaatsts of hernoemd totdat deze koppelingen zijn verwijderd.";
$pgv_lang["must_provide"]				= "Invoeren:";
$pgv_lang["name_search"]				= "Naam: ";
$pgv_lang["new_repo_created"]			= "Nieuwe bewaarplaats aangemaakt";
$pgv_lang["new_shared_note_created"] 	= "Nieuwe Gedeelde Notitie aangemaakt.";
$pgv_lang["shared_note_updated"] 		= "Gedeelde Notitie bijgewerkt.";
$pgv_lang["new_source_created"]			= "Bron succesvol aangemaakt.";
$pgv_lang["no_changes"]					= "Er zijn op dit moment geen wijzigingen ter beoordeling.";
$pgv_lang["no_known_servers"]			= "Geen bekende servers<br/>Geen resultaten gevonden";
$pgv_lang["no_temple"]					= "Geen Temple - Living Ordinance";
$pgv_lang["no_upload"]					= "Het uploaden van multimediabestanden is niet toegestaan omdat gebruik van multimedia is uitgeschakeld, of omdat u in de multimediamap geen schrijfrechten heeft.";
$pgv_lang["paste_id_into_field"]		= "Plak dit bron-ID in de invoervelden voor verwijzing naar deze bron ";
$pgv_lang["paste_rid_into_field"]		= "Plak het ID van de bewaarplaats in uw invoerpagina om de verwijzing naar de bewaarplaats over te nemen ";
$pgv_lang["privacy_not_granted"]		= "U heeft geen toegang tot";
$pgv_lang["privacy_prevented_editing"]	= "Volgens de privacy-instellingen heeft u geen rechten om deze gegevens te wijzigen.";
$pgv_lang["record_marked_deleted"]		= "Dit record wordt verwijderd na goedkeuring door de beheerder.";
$pgv_lang["replace_with"]				= "Vervang door";
$pgv_lang["show_changes"]				= "Deze kaart is gewijzigd. Klik hier om de wijzigingen te tonen.";
$pgv_lang["thumb_genned"]				= "Miniweergave is automatisch gegenereerd.";
$pgv_lang["thumbgen_error"]				= "Kan miniweergave niet genereren voor ";
$pgv_lang["thumbnail"]					= "Miniweergave";
$pgv_lang["title_remote_link"]      	= "Koppeling naar andere site toevoegen";
$pgv_lang["undo"]						= "Maak ongedaan";
$pgv_lang["undo_all"]					= "Alle wijzigingen ongedaan maken";
$pgv_lang["undo_all_confirm"]			= "Weet u zeker dat u alle wijzigingen ongedaan wilt maken?";
$pgv_lang["undo_successful"]			= "Ongedaan maken geslaagd";
$pgv_lang["update_successful"]			= "Bijwerken geslaagd.";
$pgv_lang["upload"]						= "Upload";
$pgv_lang["upload_error"]				= "Er is een fout opgetreden bij het uploaden van het bestand.";
$pgv_lang["copy_error"]					= "Het bestand #GLOBALS[whichFile2]# kon niet worden gekopiëerd van #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]				= "Uploaden mediabestanden";
$pgv_lang["upload_media_help"]			= "Selecteer de bestanden op uw computer die u naar de server wilt uploaden. Alle bestanden worden geplaatst in de map <b>#MEDIA_DIRECTORY#</b> of een van de submappen.<br /><br />Mapnamen die u specificeert worden toegevoegd aan #MEDIA_DIRECTORY#, bijvoorbeeld #MEDIA_DIRECTORY#fotoos. Als de map voor miniweergaves niet bestaat, wordt deze automatisch aangemaakt.<br /><br />";
$pgv_lang["upload_successful"]			= "Upload geslaagd";
$pgv_lang["view_change_diff"]			= "Toon wijzigingen";

?>
