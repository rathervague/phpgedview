<?php
/**
 * phpGedView Research Assistant Tool - Form Loader Engine.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  John Finlay and Others
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
 * @subpackage Research_Assistant
 * @translator Carmen Pijpers-Knegt
 * @version $Id: lang.nl.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["autosearch_ssurname"] = "Inclusief achternaam partner:";
$pgv_lang["autosearch_sgivennames"] = "Inclusief voorna(a)m(en) partner:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Genealogy-Search-Help.com Plug-in";

$pgv_lang["add_task_inst"]		= "Het is niet mogelijk de resultaten in te voeren als er nog geen taak is aangemaakt. Klik op de button om een taak aan te maken.";
$pgv_lang["complete_task_inst"]	= "Kies een taak uit de lijst hieronder om de resultaten in te voeren:";
$pgv_lang["enter_results"]		= "Resultaten";
$pgv_lang["auto_gen_inst"]		= "In sommige programma's is het mogelijk om onderzoekstaken als To Do taken in te voeren in het GEDCOM bestand. Deze optie doorzoekt uw GEDCOM bestand en converteert automatisch alle To Do taken naar een onderzoekstaak.";
$pgv_lang["choose_search_site"]	= "Kies een zoekmachine";
$pgv_lang["pid_search_for"]		= "Naar wie bent u op zoek? Klik op het poppetje om de persoons-ID op te zoeken in de database.";
$pgv_lang["manage_research_inst"]	= "Met deze items kunt u uw onderzoekstaken beheren. Door gebruik te maken van onderzoekstaken kunt u het verloop van uw stamboomonderzoek gemakkelijk volgen en samenwerken met andere onderzoekers.";
$pgv_lang["manage_research"]	= "Onderzoeksbeheer";
$pgv_lang["manage_sources"]		= "Bronbeheer";
$pgv_lang["part_of"]			= "Deel van (optioneel)";
$pgv_lang["search_fhl"]			= "Doorzoek de 'Family History Library Catalog'"; 
$pgv_lang["determine_sources"]	= "Bronnen";
$pgv_lang["analyze_database"]	= "Zoeken in de database";
$pgv_lang["pid_know_more"]		= "Klik op het poppetje om te zoeken naar een persoon in de database.<br />Klik vervolgens op 'Ververs pagina'";
$pgv_lang["analyze_people"]		= "Persoonsgegevens.";
$pgv_lang["analyze_data"]		= "Gegevens";
$pgv_lang["missing_info"] 		= "Ontbrekende informatie";
$pgv_lang["auto_search"]		= "Hiermee kunt u zoeken in de databases van 'Ancestry' en 'FamilySearch'. U kunt zoeken op naam en geboorte- of overlijdensdatum.<br />";
$pgv_lang["auto_search_text"]	= "Automatisch zoeken";
$pgv_lang["task_list"]			= "Taken";
$pgv_lang["task_list_text"]		= "Klik op <b>taken bekijken</b> voor een overzicht van de door u aangemaakte taken.";

// -- HELP COMMENTS
$pgv_lang["help_comments"] = "Hier kunt u uw commentaar toevoegen. Anderen kunnen uw commentaar lezen en hun eigen commentaar toevoegen.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]							= "Mijn taken";
$pgv_lang["add_task"]							= "Nieuwe taak";
$pgv_lang["view_folders"]						= "Folders";
$pgv_lang["view_probabilities"]					= "Bekijk mogelijkheden";
$pgv_lang["up_folder"]							= "Folder omhoog";
$pgv_lang["edit_folder"]						= "Folder wijzigen";
$pgv_lang["gen_tasks"]							= "Automatisch taken genereren";


// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]							= "Taak wijzigen";
$pgv_lang["completed"]							= "Voltooid";
$pgv_lang["complete"]							= "Voltooien";
$pgv_lang["incomplete"]							= "Onvoltooid";
$pgv_lang["comres"]								= "Commentaar/Resultaten";
$pgv_lang["description"]						= "Beschrijving";
$pgv_lang["created"]							= "Toegevoegd";
$pgv_lang["modified"]							= "Gewijzigd";
$pgv_lang["folder_list"]						= "Folders";
$pgv_lang["details"]							= "Details";
$pgv_lang["result"]                     		= "Resultaat";
$pgv_lang["okay"]                               = "Ok";
$pgv_lang["editform"]							= "Wijzig formuliergegevens";
$pgv_lang["FilterBy"]							= "Selecteer op";
$pgv_lang["Recalculate"]						= "Herberekenen";
$pgv_lang["LocalData"]							= "Data in huidig record";
$pgv_lang["RelatedRecord"]						= "Gerelateerde gegevens";
$pgv_lang["RelatedData"]						= "Overeenkomst";
$pgv_lang["Percent"]							= "Procent";
$pgv_lang["Fields"]								= "Aantal velden";
$pgv_lang["FieldName"]							= "Veldnaam";
$pgv_lang["InputType"]							= "Soort veld";
$pgv_lang["Values"]								= "Waarden";

$pgv_lang["FormBuilder"]						= "Formulieren Generator"; 
$pgv_lang["FormName"]							= "Vul de naam van het formulier in";
$pgv_lang["MultiplePeople"]						= "Heeft het formulier betrekking op meerdere personen?";
$pgv_lang["EnterGEDCOMExtension"]				= "Vul de GEDCOM extensie in om de gebeurtenis te bepalen waarop dit formulier betrekking heeft.";
$pgv_lang['FormDesciption']						= "Geef een beschrijving van het formulier";
$pgv_lang["FormGeneration"]						= "Het formulier is opgebouwd!";
$pgv_lang["CustomField"]						= "Eigen veld";
$pgv_lang["txt"]								= "Tekst";
$pgv_lang["checkbox"]							= "Aankruisvakje";
$pgv_lang["radiobutton"]						= "Keuzeknop";
$pgv_lang["EnterResults"]						= "Beschrijf hier de resultaten van uw onderzoek"; 
$pgv_lang["ra_submit"]							= "Toevoegen";
$pgv_lang["ra_generate_tasks"]					= "Genereer taken vanuit de To Do-lijst";
$pgv_lang["TaskDescription"]					= "Taakomschrijving";
$pgv_lang["SelectFolder"]                       = "Selecteer Folder:";
$pgv_lang["ra_done"]							= "Klaar";
$pgv_lang["ra_generate"]						= "Genereer";
$pgv_lang["LocalPercent"]						= "Percentage";
$pgv_lang["GlobalPercent"]						= "Global Percentage";
$pgv_lang["Average"]							= "Gemiddelde";
$pgv_lang["NoData"]								= "Geen gegevens!";
$pgv_lang["NotEnoughData"]						= "Niet genoeg gegevens!";
$pgv_lang["InferIndvBirthPlac"]					= "Er is een kans van %PERCENT% dat de geboorteplaats is:";
$pgv_lang["InferIndvDeathPlac"]					= "Er is een kans van %PERCENT% dat de persoon overleden is in:";
$pgv_lang["InferIndvSurn"]						= "Er is een kans van %PERCENT% dat de achternaam luidt:";
$pgv_lang["InferIndvMarriagePlace"]				= "Er is een kans van %PERCENT% dat het huwelijk heeft plaatsgevonden in:";
$pgv_lang["InferIndvGivn"]						= "Er is een kans van %PERCENT% dat de voornaam luidt:";
$pgv_lang["All"]								= "";
$pgv_lang["More"]								= "Meer";
$pgv_lang["ThereIsChance"]						= "Mogelijke bronnen kunnen bevatten:";
$pgv_lang["TheMostLikely"]						= "De meest voor de hand liggende plaats voor deze bron is:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]					= "Samenhang tussen gegevens";
$pgv_lang["ViewProbExplanation"]				= "Deze pagina onderzoekt de gegevens van het actieve GEDCOM bestand en laat de samenhang tussen de verschillende data elementen zien. Er is bijvoorbeeld een kans van 95% dat de achternaam van de onderzochte persoon gelijk is aan de achternaam van de vader. Dit betekent dat 95% van de personen in dit GEDCOM bestand dezelfde achternaam hebben als hun vader. In deze versie van de Research Assistent worden deze berekeningen niet op andere plaatsen in het programma gebruikt, maar zijn ze zuiver bedoeld als hulpmiddel bij uw onderzoek. In een toekomstige versie van de Research Assistent zijn we van plan om deze gegevens te gebruiken om u van de juiste suggesties te voorzien welke van belang kunnen zijn voor uw onderzoek.";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                             = "Folder:";
$pgv_lang["Edit_Task"]                 			= "Taak wijzigen";
$pgv_lang["Edit_Gen_Task"]                 		= "Wijzig gegenereerde taak";
$pgv_lang["End_Date"]                 			= "Einddatum";
$pgv_lang["Start_Date"]                 		= "Begindatum";
$pgv_lang["Task_Name"]                			= "Naam Taak";
$pgv_lang["Folder_Name"]                		= "Naam Folder";
$pgv_lang["Folder_View"]                		= "Overzicht Folders";
$pgv_lang["Task_View"]                  		= "Mijn Taken";
$pgv_lang["page_header"]						= "Research Assistent Folders";
$pgv_lang["folder_new"]							= "Nieuwe Folder";
$pgv_lang["folder_delete_check"]				= "Weet u zeker dat u deze folder wilt verwijderen?";
$pgv_lang["no_folder_name"]             		= "Er is geen naam voor de folder ingevuld.";
$pgv_lang["add_folder"]                 		= "Folder toevoegen";
$pgv_lang["folder_name"]                		= "Naam Folder:";
$pgv_lang["Parent_Folder:"]             		= "Folder hoger:";
$pgv_lang["No_Parent"]                  		= "Geen hogere folder";
$pgv_lang["Folder_Description:"]        		= "Folder omschrijving:";
$pgv_lang["Folder_names_must_be_unique"]		= "Deze naam bestaat al. Kies een andere naam voor de folder";
$pgv_lang["folder_submitted"]          			= "De folder is toegevoegd"; 
$pgv_lang["folder_problem"]             		= "Probleem bij het toevoegen van de folder. S.v.p. opnieuw proberen";

// -- Missing Information Help 
$pgv_lang["ra_missing_info_help"] = "Hier wordt ontbrekende informatie weergegeven. Maak een keuze uit de verschillende opties en folders en klik op <b>Taak Toevoegen</b> om een nieuwe taak voor de ontbrekende data aan te maken. Bestaande taken zullen worden getoond in plaats van een keuzebox.<br />";

// -- RA_EDITFOLDER MESSAGES	
$pgv_lang["edit_research_folder"]			= "Onderzoeksfolder wijzigen";
$pgv_lang["folder_not_exist"]				= "Deze folder bestaat niet: ";
$pgv_lang["folder_parent"]					= "Folder hoger";
$pgv_lang["parent_id"]						= "Geen";
$pgv_lang["folder_users"]					= "Andere gebruikers die toegang hebben tot deze folder";

// -- RA_EDITLOG MESSAGES
$pgv_lang["edit_research_log"]				= "Research Log wijzigen";
$pgv_lang["log_not_exist"]					= "Deze log bestaat niet: ";

// -- RA_LOG MESSAGES
$pgv_lang["edit_log_entry"]					= "Research Log Entry wijzigen";
$pgv_lang["log_no_entry"]					= "FOUT: U hebt geen toegang tot dit item.";
$pgv_lang["log_modified"]					= "Laatst aangepast";
$pgv_lang["log_modified_by"]				= "Laatst aangepast door";
$pgv_lang["log_edit_entry"]					= "Deze entry wijzigen";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["research_logs"]					= "Research Logs";
$pgv_lang["log_no_entry_folder"]			= "FOUT: U hebt geen toegang tot deze folder.";
$pgv_lang["folder_sub"]						= "Sub Folders";
$pgv_lang["folder_sub_new"]					= "Nieuwe Sub Folder aanmaken";
$pgv_lang["task_entry"]						= "Nieuwe taak aanmaken";
$pgv_lang["log_show"]						= "Laat alle Logs zien";
$pgv_lang["log_show_uncomplete"]			= "Laat onvoltooide Logs zien";
$pgv_lang["log_show_complete"]				= "Laat voltooide Logs zien";
$pgv_lang["log_delete_check"]				= "Weet u zeker dat u deze Log Entry wilt verwijderen?";

// -- RA_FUNCTIONS MESSAGES
$pgv_lang["function_folder_delete"]			= "FOUT: Deze folder bevat research log entries en kan daarom niet worden verwijderd.<br />Verplaats of verwijder eerst de research log entries en probeer dan de folder opnieuw te verwijderen.";
$pgv_lang["function_subfolder_delete"]		= "FOUT: Deze folder bevat subfolders en kan daarom niet worden verwijderd.<br />Verplaats of verwijder eerst de subfolders en probeer dan de folder opnieuw te verwijderen.";
$pgv_lang["folder_delete_ok"]				= "De folder #folder_name# is succesvol verwijderd.";
$pgv_lang["folder_update_ok"]				= "De folder #folder_name# is geupdate.";
$pgv_lang["folder_added"]					= "De folder #folder_name# is toegevoegd.";

//-- RA_SEARCH MESSAGES
$pgv_lang["search_results"]					= "Zoekresultaten";
$pgv_lang["nothing_found"]					= "Er zijn geen logs gevonden die aan de zoekcriteria voldoen.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "Er zijn nog geen folders aangemaakt. Maak eerst een nieuwe folder aan.";

//-- HELP MESSAGES
$pgv_lang["help_rs_folders.php"]			= "Research Assistent Folders<br /> #pgv_lang[sorry]#";
$pgv_lang["help_rs_editfolder.php"]			= "Research Assistent Folders wijzigen<br />#pgv_lang[sorry]#";
$pgv_lang["help_rs_editlog.php"]			= "Research Assistent Log wijzigen<br />#pgv_lang[sorry]#";
$pgv_lang["ra_fold_name_help"]				= "~Bekijk folders~<ul><li><b>Naam van de folder:</b> In deze kolom ziet u alle folders die u heeft aangemaakt.</li><li><b>Omschrijving:</b> In deze kolom staat de folderomschrijving.</li></ul>";
$pgv_lang["ra_add_task_help"]				= "~Nieuwe taak toevoegen~<ul><li><b>Titel:</b> De titel van de taak die u wilt toevoegen.</li><li><b>Folder:</b> In dit veld kunt u opgeven in welke folder de nieuwe taak geplaatst dient te worden.</li><li><b>Omschrijving:</b> Geef hier een omschrijving van de taak die u wilt toevoegen..</li><li><b>Bronnen:</b> Hier kunt u bronnen toewijzen aan de taak.</li><li><b>Personen:</b> Vermeld hier de personen die bij de taak horen.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "~Folder wijzigen~<ul><li><b>Naam Folder:</b> Geef hier de titel aan van de folder die u wilt wijzigen.</b></li><li><b>Folder hoger:</b> Kies hier de hogere folder waar deze folder in moet worden geplaatst.</b></li><li><b>Folder omschrijving:</b> De omschrijving van de te wijzigen folder</b></li></ul>";
$pgv_lang["ra_add_folder_help"]				= "~Folder toevoegen~<ul><li><b>Naam Folder:</b> Vermeld hier de titel van de folder die u wilt toevoegen.</b></li><li><b>Folder hoger:</b> Kies hier de hogere folder waar de nieuwe folder in moet worden geplaatst.</b></li><li><b>Folder omschrijving:</b> De omschrijving van de folder.</b></li></ul>";
$pgv_lang["ra_view_task_help"]				= "~Mijn taken~<ul><li><b>Naam taak:</b> Deze kolom bevat de naam van de taak.</b></li><li><b>Begindatum:</b> De datum waarop de taak is aangemaakt.</li><li><b>Voltooid:</b> In deze kolom wordt aangegeven of de taak al dan niet voltooid is.</li><li><b>Wijzigen:</b> Klik hierop om de taak aan te passen.</li><li><b>Verwijderen:</b> Klik hierop om de taak te verwijderen.</li><li><b>Complete:</b> Klik hierop om een forumulier in te vullen en de taak te voltooien.</li></ul>";
$pgv_lang["ra_task_view_help"]				= "~Nieuwe Taak~<ul><li><b>Titel:</b> Vul hier de titel in van de taak die u wilt toevoegen.</li><li><b>Taak toewijzen aan:</b> Wijs de taak aan iemand toe.</li><li><b>Omschrijving:</b> Vul hier een beschrijving in voor de taak die u wilt toevoegen.</li><li><b>Bronnen:</b> Vul hier de bronnen in die bij de nieuwe taak horen.</li><li>Klik op <b>Taak wijzigen</b> om de details van de taak aan te passen.</li></ul>";
$pgv_lang["ra_comments_help"]				= "~Commentaar~<ul><li>Hier kunt u uw notities met betrekking tot de taak kwijt. Klik op <b>Commentaar toevoegen</b> om een nieuw commetaar toe te voegen.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "~Taken genereren~<p>Dit formulier genereert taken vanuit de _TODO tags in uw GEDCOM bestand.</p><ul><li><b>Genereren:</b> Klik hierop om automatisch taken te genereren.</li><li><b>Naam Taak:</b> Dit is de naam die aan de taak wordt gegeven. Dit is standaard de naam uit de tekst in de actuele _TODO tag, exclusief CONT tags.</li><li><b>Taak omschrijving:</b> De omschrijving die aan de taak wordt gegeven. Deze wordt gegenereert vanuit de tekst in de _TODO tag inclusief alle bijbehorende CONT tags. </li><li><b>Wijzigen:</b> Klik op de link om de taak te wijzigen.</li><li><b>Kies een folder:</b> Kies de folder waarin de gegenereerde taak dient te worden opgeslagen.</li><li><b>Genereer:</b> Genereer de aangevinkte taken.</li><li><b>Klaar:</b> U wordt doorverwezen naar de Folderpagina.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]		= "~Gegenereerde taken wijzigen~<p>Dit formulier stelt u in staat om wijzigingen aan te brengen in taken die automatisch zijn gegenereert vanuit de _TODO tags in uw GEDCOM bestand.</p><ul><li><b>Naam Taak:</b> Dit is de naam die aan de taak wordt gegeven.</li><li><b>Taakomschrijving:</b> De omschrijving van de taak.</li><li><b>Personen:</b> Klik op de link om de persoon te selecteren aan wie de taak moet worden toegewezen.</li><li><b>Bron:</b> Klik op de link op de bij de taak behorende bron te selecteren.</li><li><b>Opslaan:</b> Hiermee slaat u de wijzigingen op en wordt u doorverwezen naar de pagina voor het genereren van taken.</li><li><b>Ongedaan maken:</b> Al uw wijzigingen worden ongedaan gemaakt en u keert terug naar de pagina voor het genereren van taken.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]		= "~Privacy instellen~<ul><li><b>#pgv_lang[PRIV_PUBLIC]#:</b> De specifieke taak is voor iedereen toegankelijk.</li><li><b>#pgv_lang[PRIV_USER]#:</b> De specifieke taak is alleen toegankelijk voor geautoriseerde gebruikers.</li><li><b>#pgv_lang[PRIV_NONE]#</b> De specifieke taak is aleen toegankelijk voor gebruikers met beheerdersrechten.</li><li><b>#pgv_lang[PRIV_HIDE]#:</b> De specifieke taak is voor niemand toegankelijk.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "~Taak wijzigen~<ul><li><b>Titel:</b> Dit veld bevat de titel van de te wijzigen taak.</li><li><b>Folder:</b> In dit veld kunt u de folder selecteren waaraan de nieuwe taak dient te worden toegewezen.</li><li><b>Description:</b> Vul hier een omschrijving in van de te wijzigen taak.</li><li><b>Sources:</b> Selecteer of wijzig een of meerdere bronnen die bij de taak horen.</li><li><b>Personen:</b> Selecteer of wijzig de persoon aan wie de taak dient te worden toegewezen.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]						= "Overzicht taken";
$pgv_lang["add_new_comment"]				= "Commentaar toevoegen";
$pgv_lang["no_sources"]						= "Er zijn geen bronnen toegevoegd aan deze taak.";
$pgv_lang["no_people"]						= "Er zijn geen personen toegevoegd aan deze taak.";
$pgv_lang["no_indi_tasks"]					= "Voor deze persoon zijn geen taken aangemaakt.";
$pgv_lang["no_sour_tasks"]					= "Voor deze bron zijn geen taken aangemaakt.";
$pgv_lang["edit_comment"]					= "Commentaar wijzigen";
$pgv_lang["comment_success"]				= "Uw commentaar is succesvol aangepast.";
$pgv_lang['comment_body']					= 'Commentaar';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "Weet u zeker dat u dit commentaar wilt verwijderen?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]				= "Nieuwe taak toevoegen";
$pgv_lang["submit"]						= "Toevoegen";
$pgv_lang["save_and_complete"]          = "Opslaan en voltooien";
$pgv_lang["assign_task"]				= "Taak toewijzen aan:";
$pgv_lang["AddTask"]					= "Taak toevoegen";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]		    = "Privacy";
$pgv_lang["show_my_tasks"]              = "Bekijk Mijn taken";
$pgv_lang["show_add_task"]		        = "Taken toevoegen";
$pgv_lang["show_auto_gen_task"]         = "Automatisch taken genereren";
$pgv_lang["show_view_folders"]		    = "Bekijk Folders";
$pgv_lang["show_add_folder"]		    = "Folder toevoegen";
$pgv_lang["show_add_unlinked_source"]   = "Niet-gekoppelde bron toevoegen";
$pgv_lang["show_view_probabilities"]	= "Bekijk mogelijkheden";

//-- COMMENT HELP
$pgv_lang["comment_title_help"]			= "?";
$pgv_lang["comment_help"]				= "Klik hier voor help.";

//-- Census Forms -- uitgeschakeld in nederlandse versie
$pgv_lang["rows"]                       = "Aantal rijen";
$pgv_lang["state"]                      = "Staat";
$pgv_lang["call/url"]                   = "Telefoonnummer/URL";
$pgv_lang["enumDate"]                   = "Datum Volkstelling";
$pgv_lang["county"]                     = "Provincie";
$pgv_lang["city"]                       = "Stad";
$pgv_lang["complete_title"]				= "Taak voltooien";
$pgv_lang["select_form"]				= "Maak een selectie";
$pgv_lang['choose_form_label']			= "Kies een formulier:";
$pgv_lang["book"]                 		= "Boek";
$pgv_lang["folio"]                   	= "Folio";
$pgv_lang["uk_county"]					= "Provincie";
$pgv_lang["uk_boro"]					= "Kiesdistrict";
$pgv_lang["uk_place"]					= "Plaats";

$pgv_lang["AssIndiFacts"]				= "Feiten voor deze persoon"; 
$pgv_lang["AssFamFacts"]				= "Feiten voor deze familie";  
$pgv_lang["ra_facts"]					= "Feiten"; 	
$pgv_lang["ra_fact"]					= "Feit"; 
$pgv_lang["ra_remove"]					= "Verwijderen";   
$pgv_lang["ra_inferred_facts"]			= "Afgeleide feiten"; 
$pgv_lang["ra_person"]					= "Persoon"; 
$pgv_lang["ra_reason"]					= "Reden"; 
$pgv_lang["success"]					= "Succes!"; 

$pgv_lang["registration_no"]			= "Registratienummer:";
$pgv_lang["serial_no"]					= "Serienummer.:";
$pgv_lang["ra_no"]						= "Nummer:";
$pgv_lang["order_no"]					= "Ordernummer:";

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]		= "Het #pgv_lang[my_tasks]# blok laat de taken van de huidige gebruiker zien. U kunt kiezen om naast de onvoltooide taken ook de voltooide en/of nog niet toegewezen taken te laten zien.";
$pgv_lang["mytasks_block"] 				= "Research Assistent";
$pgv_lang["mytasks_edit"]               = "Wijzigen";
$pgv_lang["mytasks_completed"]			= "Voltooide taken";
$pgv_lang["mytasks_unassigned"]			= "Nog niet toegewezen taken";
$pgv_lang["mytasks_takeOn"]				= "Opdracht aannemen";
$pgv_lang["mytasks_help"]				= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]   		= "Taken";
$pgv_lang["mytask_show_completed"]		= "Voltooide taken laten zien?";
$pgv_lang["mytask_show_unassigned"]		= "Nog niet toegewezen taken laten zien?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]		    = "Inclusief achternaam:";
$pgv_lang["autosearch_givenname"]	    = "Inclusief voorna(a)m(en):";
$pgv_lang["autosearch_byear"]		    = "Inclusief geboortejaar:";
$pgv_lang["autosearch_bloc"]		    = "Inclusief geboorteplaats:";  
$pgv_lang["autosearch_dyear"]		    = "Inclusief jaar van overlijden:";
$pgv_lang["autosearch_dloc"]		    = "Inclusief plaats van overlijden:";
$pgv_lang["autosearch_gender"]          = "Inclusief geslacht:";
$pgv_lang["autosearch_plugin_name"]     = "";  
$pgv_lang["autosearch_fsurname"]		= "Inclusief achternaam vader:";
$pgv_lang["autosearch_fgivennames"]		= "Inclusief voorna(a)m(en):";
$pgv_lang["autosearch_msurname"]		= "Inclusief achternaam moeder:";
$pgv_lang["autosearch_mgivennames"]	    = "Include voorna(a)m(en) moeder:"; 
$pgv_lang["autosearch_country"]  	    = "Inclusief land:"; 
$pgv_lang["autosearch_plugin_name_ancestry"] = "Ancestry.com Plug-in";
$pgv_lang["autosearch_plugin_name_ancestrycouk"] = "Ancestry.co.uk Plug-in";
$pgv_lang["autosearch_plugin_name_ellisIsland"] = "EllisIslandRecords.org Plug-in";
$pgv_lang["autosearch_plugin_name_genNet"] = "GeneaNet.com Plug-in";
$pgv_lang["autosearch_plugin_name_gen"]  = "Genealogy.com Plug-in"; 
$pgv_lang["autosearch_plugin_name_fs"]   = "FamilySearch.org Plug-in";
$pgv_lang["autosearch_plugin_name_werelate"]   = "Werelate.org Plug-in";
$pgv_lang["autosearch_search"]           = "Zoeken";
$pgv_lang["autosearch_keywords"] = "Trefwoorden:";

//Folder deletion error messages
$pgv_lang["has_tasks"]                 ="De folder bevat momenteel taken en kan daarom niet worden verwijderd.";
$pgv_lang["has_folders"]               ="Deze folder bevat nog subfolders en kan daarom niet worden verwijderd.";

?>
