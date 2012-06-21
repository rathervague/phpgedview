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
 * @version $Id: lang.da.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$png["autosearch_ssurname"] = "Inkludér ægtefælles efternavn:";
$pgv_lang["autosearch_sgivennames"] = "Inkludér ægtefælles fornavn(e):";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Genealogy-Search-Help.com plugin";

$pgv_lang["add_task_inst"]              = "Hvis der endnu ikke er oprettet en opgave til dine forskningsresultater, bør du oprette opgaven først, og derefter vælge at gemme og færdiggøre opgaven.";
$pgv_lang["complete_task_inst"] = "Vælg en opgave fra den nedenstående opgaveliste for at færdiggøre opgaven og indtast så dine resultater:";
$pgv_lang["enter_results"]              = "Indtast resultater";
$pgv_lang["auto_gen_inst"]              = "Nogle programmer lader dig indtaste forskningsopgaver som TODO emner i din GEDCOM fil. Denne indstilling vil søge i din GEDCOM fil og automatisk konvertere alle TODO emner til en forskingsopgave.";
$pgv_lang["choose_search_site"] = "Vælg et søgewebsite";
$pgv_lang["pid_search_for"]             = "Hvem ønsker du at søge efter?";
$pgv_lang["manage_research_inst"]       = "Disse punkter vil hjælpe dig med at håndtere dine forskingsopgaver.  Forskningsopgaver hjælper dig med at holde styr på din forskning og at samarbejde med andre forskere.";
$pgv_lang["manage_research"]    = "Håndtér forskning";
$pgv_lang["manage_sources"]             = "Håndtér kilder";
$pgv_lang["part_of"]                    = "Del af (valgfri)";
$pgv_lang["search_fhl"]                 = "Søg i Family History Library kataloget";
$pgv_lang["determine_sources"]  = "Stadfæst mulige kilder";
$pgv_lang["analyze_database"]   = "Analysér database";
$pgv_lang["pid_know_more"]              = "Hvem ønsker du at vide mere om?";
$pgv_lang["analyze_people"]             = "Analysér personer";
$pgv_lang["analyze_data"]               = "Analysér mine data";
$pgv_lang["missing_info"] 		= "Mangler oplysninger";
$pgv_lang["auto_search"]		= "Denne funktion vil automatisk søge på Ancestry og FamilySearch, du kan vælge at søge på navn og født/død dato <br />";
$pgv_lang["auto_search_text"]	= "Autosøgning";
$pgv_lang["task_list"]			= "Opgaver";
$pgv_lang["task_list_text"]		= "Dette område viser opgaver du har oprettet, klik på <b>Vis</b> for at se opgaverne";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]							= "Mine opgaver";
$pgv_lang["add_task"]							= "Tilføj opgave";
$pgv_lang["view_folders"]						= "Vis foldere";
$pgv_lang["view_probabilities"]					= "Vis sandsynligheder";
$pgv_lang["up_folder"]							= "Mappe tilbage";
$pgv_lang["edit_folder"]						= "Tilføj/rediger folder";
$pgv_lang["gen_tasks"]							= "Opret automatisk opgaver";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]							= "Rediger opgave";
$pgv_lang["completed"]							= "Færdig";
$pgv_lang["complete"]							= "Færdige";
$pgv_lang["incomplete"]							= "Ikke færdige";
$pgv_lang["created"]							= "Oprettet";
$pgv_lang["details"]							= "Detaljer";
$pgv_lang["result"]                     		= "Resultat";
$pgv_lang["okay"]                               = "Ok";
$pgv_lang["editform"]							= "Rediger formulardata";
$pgv_lang["FilterBy"]							= "Filtrer via";
$pgv_lang["Recalculate"]						= "Genudregn";
$pgv_lang["LocalData"]							= "Lokale data";
$pgv_lang["RelatedRecord"]						= "Relateret post";
$pgv_lang["RelatedData"]						= "Relateret data";
$pgv_lang["Percent"]							= "Procent";
$pgv_lang["Fields"]								= "Antal felter";
$pgv_lang["FieldName"]							= "Feltnavn";
$pgv_lang["InputType"]							= "Inputtype";
$pgv_lang["Values"]								= "Værdier";
$pgv_lang["FormBuilder"]                                                = "FormBuilder";
$pgv_lang["FormName"]							= "Indtast formularnavnet";
$pgv_lang["MultiplePeople"]						= "Angår formularen flere personer?";
$pgv_lang["EnterGEDCOMExtension"]				= "Indtast venligst GEDCOM udvidelsen for formularens fakta-type";
$pgv_lang['FormDesciption']						= "Indtast venligst en beskrivelse af formularen";
$pgv_lang["FormGeneration"]						= "Formular generering færdig!";
$pgv_lang["CustomField"]						= "Tilpasset feltnavn";
$pgv_lang["txt"]							= "Tekst";
$pgv_lang["checkbox"]                                                   = "Afkrydsningsfelt";
$pgv_lang["radiobutton"]                                                = "Radioknap";
$pgv_lang["EnterResults"]                                               = "Indtast resultater";
$pgv_lang["ra_submit"]                                                  = "Indsend";
$pgv_lang["ra_generate_tasks"]                                  = "Generér opgaver fra TODO'er";
$pgv_lang["TaskDescription"]                                    = "Opgavebeskrivelse";
$pgv_lang["SelectFolder"]                       = "Vælg folder:";
$pgv_lang["ra_done"]                                                    = "Færdig";
$pgv_lang["ra_generate"]                                                = "Generer";
$pgv_lang["LocalPercent"]                                               = "Lokal procentdel";
$pgv_lang["GlobalPercent"]                                              = "Global procentdel";
$pgv_lang["Average"]                                                    = "Gennemsnit";
$pgv_lang["NoData"]                                                             = "Ingen data!";
$pgv_lang["NotEnoughData"]                                              = "Ikke nok data!";
$pgv_lang["InferIndvBirthPlac"]                                 = "Der er %PERCENT% chance for at fødselsstedet er:";
$pgv_lang["InferIndvDeathPlac"]                                 = "Der er %PERCENT% chance for at dødsstedet er:";
$pgv_lang["InferIndvSurn"]                                              = "Der er %PERCENT% chance for at efternavnet er:";
$pgv_lang["InferIndvMarriagePlace"]                             = "Der er %PERCENT% chance for at giftestedet er:";
$pgv_lang["InferIndvGivn"]                                              = "Der er %PERCENT% chance for at fornavnet er:";
$pgv_lang["All"]                                                                = "Alle";
$pgv_lang["More"]                                                               = "Mere";
$pgv_lang["ThereIsChance"]                                              = "Mulige kilder kan indeholde:";
$pgv_lang["TheMostLikely"]                                              = "Det mest sandsynlige sted for denne kilde er:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]                                   = "Data sammenhæng";
$pgv_lang["ViewProbExplanation"]					= "Denne side analyserer data fra den aktive GEDCOM's datasæt, og viser sammenhæng i mellem forskellige dataelementer. For eksempel kunne der være en 95% sammenhæng i at efternavnet på den aktuelle post er det samme som efternavnet på faderens post.  Dette ville betyde at 95% af personerne i denne GEDCOM database har samme efternavn som deres far. I denne version af Forskningsassistenten bruges disse beregninger ikke i andre dele af programmet, og vises kun som en hjælp til din forskning.  Vi har dog planer om i fremtiden at bruge disse data til hjælpe dig med meningsfulde forslag til fremtidige forskning. ";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                             = "Folder:";
$pgv_lang["Edit_Gen_Task"]                              = "Rediger genereret opgave";
$pgv_lang["Start_Date"]                 		= "Startdato";
$pgv_lang["Task_Name"]                			= "Opgavenavn";
$pgv_lang["Folder_Name"]                		= "Foldernavn";
$pgv_lang["Folder_View"]                		= "Foldervisning";
$pgv_lang["Task_View"]                  		= "Opgavevisning";
$pgv_lang["page_header"]						= "Forskningsassistent mapper";
$pgv_lang["no_folder_name"]             		= "Feltet foldernavn skal udfyldes.";
$pgv_lang["add_folder"]                 		= "Tilføj folder";
$pgv_lang["folder_name"]                		= "Foldernavn:";
$pgv_lang["Parent_Folder:"]             		= "Overliggende folder:";
$pgv_lang["No_Parent"]                  		= "Ingen overliggende";
$pgv_lang["Folder_Description:"]        		= "Folderbeskrivelse:";
$pgv_lang["Folder_names_must_be_unique"]		= "Foldernavne skal være unikke.";
$pgv_lang["folder_submitted"]          			= "Din folder er indsendt"; 
$pgv_lang["folder_problem"]             		= "Der var et problem med tilføjelsen af din folder, prøv venligst igen.";

// -- Missing Information Help 
$pgv_lang["ra_missing_info_help"] = "Dette område viser manglende information om posten. Vælg en markeringsboks og en folder, og tryk derefter på <b>Tilføj opgave</b> for at oprette en opgave for det manglende emne. Opgaver der allerede er oprettet vil vise <b>vis</b> i stedet for en markeringsboks.<br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]						= "Opret ny opgave.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "Der eksisterer ikke nogen foldere endnu. Opret venligst en ny folder først.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]			= "~Foldervisning~<ul><li><b>Foldernavn:</b> Denne kolonne indeholder navnene på alle de foldere du har oprettet.</li><li><b>Beskrivelse:</B> Denne kolonne indeholder beskrivelsen af folderne.</li></ul>";
$pgv_lang["ra_add_task_help"]				= "~Tilføj ny opgave~<ul><li><b>Titel:</B> Her bør titlen på den opgave du laver stå.</li><li><b>Folder:</B> Her kan du vælge hvilken mappe du ønsker at tilknytte den nye opgave til.</li><li><b>Beskrivelse:</b> Indtast en beskrivelse af den opgave du ønsker at tilføje.</li><li><b>Kilder:</b> Tilkny de eventuelle kilder du har til denne opgave.</li><li><b>Personer:</b> Tilkny eventuelle personer der relateret til den nye opgave.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "<H2><B>Edit Folder:</B></H2><ul><li><B>Folder Name:</B> This is where you should add the title of the folder that you are editing.</B></li><li><B>Parent folder:</B> You can assign the parent folder, if any, of the folder you are editing.</B></li><li><B>Folder description:</B> This is the description of the folder you are editing.</B></li></ul>";
$pgv_lang["ra_add_folder_help"]				= "<H2><B>Add Folder:</B></H2><ul><li><B>Folder Name:</B> This is where you should add the title of the folder that you are adding.</B></li><li><B>Parent folder:</B> You can assign the parent folder, if any, of the folder you are adding.</B></li><li><B>Folder description:</B> This is the description of the folder you are adding.</B></li></ul>";
$pgv_lang["ra_view_task_help"]				= "<H2><B>Task View:</B></H2><ul><li><B>Task Name:</B> This column contains the name of all of the tasks you.</B></li><li><B>Description:</B> This column contains the description of the tasks.</li><li><B>Start Date:</B> This will contain the start dates of all the tasks.</li><li><B>Completed:</B> This will show whether or not a task is completed.</li><li><B>Details:</B> This will show all the details of a task.</li><li><B>Delete:</B> This will delete the task.</li></ul>";
$pgv_lang["ra_task_view_help"]				= "<H2><B>View Task:</B></H2><ul><li><B>Title:</B> This should contain the title of the task that you are adding.</li><li><B>People:</B> Assign any people associated for the new task.</li><li><B>Description:</B> Enter a description of the task you want to add.</li><li><B>Sources:</B> Assign any sources that you have for the task.</li><li>Click the 'Edit Task' button to edit the details of the task.</li></ul>";
$pgv_lang["ra_comments_help"]				= "<H2><B>Comments:</B></H2><ul><li>This will contain any comments related to the task. Click the 'Add New Comment' button to add any comments.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "<H2><B>Generate Tasks:</B></H2><p>This form generates tasks from the _TODO tags in your GEDCOM file.</p><ul><li><B>Generate:</B> check each task to generate when you press the Generate button.</li><li><B>Task Name:</B> This is the name the task will be given.  This defaults to the text in the actual _TODO tag, excluding any CONT tag&quot;s</li><li><B>Task Description:</B> The description the task will be given.  This is generated from the text in the _TODO tag plus all of the associated CONT tag&quots.  </li><li><B>Edit:</B> click the link to edit that task.</li><li><B>Select Folder:</B> select the folder to put the generated tasks in.</li><li><B>Generate:</B> generates the tasks that have been checked.</li><li><B>Done:</B> redirects you to the Folder View page.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]		= "<H2><B>Edit Generated Task:</B></H2><p>This form allows you to edit the tasks generated from _TODO tags in your GEDCOM file.</p><ul><li><B>Task Name:</B> This is the name the task will be given.  </li><li><B>Task Description:</B> The description the task will be given. </li><li><B>People:</B> click the link to select the person to associate the task with.</li><li><B>Source:</B> click the link to select the source to associate the task with.</li><li><B>Save:</B> saves all your changes and redirects you to the Generate tasks page.</li><li><B>Cancel:</B> disregards all your changes and redirects you to the Generate tasks page.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]		= "<H2><B>Configure Privacy:</B></H2></H2><ul><li><B>Show To Public:</B> Makes specified task available to everyone.</li><li><B>Show Only To Authenticated Users:</B> Makes specified task available to authenticated users only.</li><li><B> Show To Admin Users:</B> Makes specified task available to admin users only.</li><li><B> Hide Even From Admin Users:</B> Makes specified task not available to anyone.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "<H2><B>Edit Task:</B></H2></H2><ul><li><B>Title:</B> This should contain the title of the task that you are editing.</li><li><B>Folder:</B> In this field you can assign which folder you want your new task to go to.</li><li><B>Description:</B> Enter a description of the task you want to edit.</li><li><B>Sources:</B> Assign or edit any sources that you have for the task.</li><li><B>People:</B> Assign or edit any people associated for the task.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]						= "Vis opgave";
$pgv_lang["add_new_comment"]				= "Tilføj ny kommentar";
$pgv_lang["no_indi_tasks"]					= "Ingen opgaver tilknyttet dette individ.";
$pgv_lang["no_sour_tasks"]					= "Ingen opgaver tilknyttet denne kilde.";
$pgv_lang["edit_comment"]					= "Rediger kommentar";
$pgv_lang["comment_success"]				= "Din kommentar er korrekt tilføjet.";
$pgv_lang['comment_body']					= 'Kommentar';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "Er du sikker på at du ønsker at slette denne kommentar?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]				= "Tilføj ny opgave";
$pgv_lang["submit"]						= "Indsend";
$pgv_lang["save_and_complete"]          = "Gem og færdiggør";
$pgv_lang["assign_task"]				= "Tildel opgave";
$pgv_lang["AddTask"]					= "Tilføj opgave";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]		    = "Configure Privacy";
$pgv_lang["show_my_tasks"]              = "Vis mine opgaver";
$pgv_lang["show_add_task"]		        = "Vis Tilføj opgave";
$pgv_lang["show_auto_gen_task"]         = "Show Auto Generate Task";
$pgv_lang["show_view_folders"]		    = "Vis Vis mapper";
$pgv_lang["show_add_folder"]		    = "Vis Tilføj mappe";
$pgv_lang["show_add_unlinked_source"]   = "Show Add Unlinked Source";
$pgv_lang["show_view_probabilities"]	= "Show View Probabilities";

//-- Census Forms
$pgv_lang["rows"]                       = "Antal rækker";
$pgv_lang["state"]                      = "Stat";
$pgv_lang["call/url"]                   = "Call Number/URL";
$pgv_lang["enumDate"]                   = "Enumeration Date";
$pgv_lang["county"]                     = "Amt";
$pgv_lang["city"]                       = "By";
$pgv_lang["complete_title"]				= "Færdiggør opgaven";
$pgv_lang["select_form"]				= "Vælg formular";
$pgv_lang['choose_form_label']			= "Choose a common research form:";
$pgv_lang["book"]                 		= "Bog";
$pgv_lang["folio"]                   	= "Folio";
$pgv_lang["uk_county"]					= "Amt";
$pgv_lang["uk_boro"]					= "By eller område";
$pgv_lang["uk_place"]					= "Sted";

$pgv_lang["AssIndiFacts"]                               = "Associate Individual Facts";
$pgv_lang["AssFamFacts"]                                = "Associate Family Facts";
$pgv_lang["ra_facts"]                                   = "Fakta";
$pgv_lang["ra_fact"]                                    = "Fakta";
$pgv_lang["ra_remove"]                                  = "fjern";
$pgv_lang["ra_inferred_facts"]                  = "Inferred Facts";
$pgv_lang["ra_person"]                                  = "Person";
$pgv_lang["ra_reason"]                                  = "Årsag";
$pgv_lang["success"]                                    = "Succes!";

$pgv_lang["registration_no"]                    = "Registreringsnummer:"; //@@
$pgv_lang["serial_no"]                                  = "Serienr.:"; //@@
$pgv_lang["ra_no"]                                              = "Nummer:"; //@@
$pgv_lang["order_no"]                                   = "Ordrenummer:"; //@@

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]		= "The #pgv_lang[my_tasks]# shows the task for the current user and can be configured to show completed tasks or to show task that are currently unassigned";
$pgv_lang["mytasks_block"] 				= "Research Assistant";
$pgv_lang["mytasks_edit"]               = "Rediger";
$pgv_lang["mytasks_unassigned"]			= "Ikke tildelt";
$pgv_lang["mytasks_takeOn"]				= "TakeOn";
$pgv_lang["mytasks_help"]				= "~MY TASK BLOCK~<br /><br />The My Task Block shows the task for the current user<br />and can be configured to show completed tasks or to show<br />task that are currently unassigned";
$pgv_lang["mytask_show_tasks"]   		= "Vis ikke tildelte opgaver?";
$pgv_lang["mytask_show_completed"]		= "Vis færdige opgaver?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]		    = "Inkluder efternavn:";
$pgv_lang["autosearch_givenname"]	    = "Inkluder fornavne:";
$pgv_lang["autosearch_byear"]		    = "Inkluder fødselsår:";
$pgv_lang["autosearch_bloc"]		    = "Inkluder fødselssted:";  
$pgv_lang["autosearch_dyear"]		    = "Inkluder dødsår:";
$pgv_lang["autosearch_dloc"]		    = "Inkluder dødssted:";
$pgv_lang["autosearch_gender"]          = "Inkluder køn:";
$pgv_lang["autosearch_plugin_name"]     = "";  
$pgv_lang["autosearch_fsurname"]		= "Inkluder faders efternavn:";
$pgv_lang["autosearch_fgivennames"]		= "Inkluder faders fornavne:";
$pgv_lang["autosearch_msurname"]		= "Inkluder moders efternavn:";
$pgv_lang["autosearch_mgivennames"]	    = "Inkluder moders fornavne:"; 
$pgv_lang["autosearch_country"]  	    = "Inkluder land:"; 
$pgv_lang["autosearch_plugin_name_ancestry"] = "Ancestry.com Plug-in";
$pgv_lang["autosearch_plugin_name_ancestrycouk"] = "Ancestry.co.uk Plug-in";
$pgv_lang["autosearch_plugin_name_ellisIsland"] = "EllisIslandRecords.org Plug-in";
$pgv_lang["autosearch_plugin_name_genNet"] = "GeneaNet.com Plug-in";
$pgv_lang["autosearch_plugin_name_gen"]  = "Genealogy.com Plug-in"; 
$pgv_lang["autosearch_plugin_name_fs"]   = "FamilySearch.org Plug-in";
$pgv_lang["autosearch_plugin_name_werelate"]   = "Werelate.org Plug-in";
$pgv_lang["autosearch_search"]           = "Søg";
$pgv_lang["autosearch_keywords"] = "Nøgleord:";

//Folder deletion error messages
$pgv_lang["has_tasks"]                 ="Denne mappe indeholder i øjeblikket opgaver og kan ikke slettes";
$pgv_lang["has_folders"]               ="Denne mappe indeholder i øjeblikket mapper og kan ikke slettes";
?>
