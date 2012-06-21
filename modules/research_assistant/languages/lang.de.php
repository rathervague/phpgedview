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
 * @version $Id: lang.de.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_task_inst"]		= "Falls für Ihre Forschungsergebnisse noch keine Aufgabe existiert, sollten Sie zuerst eine neue Aufgabe erzeugen und dann die Option «Sichern und abschließen» auswählen.";
$pgv_lang["complete_task_inst"]	= "Bitte wählen Sie eine Aufgabe aus der untenstehenden Liste um Ihre Ergebnisse einzugeben und/oder die Aufgabe abzuschließen:";
$pgv_lang["enter_results"]		= "Ergebnisse eingeben";
$pgv_lang["auto_gen_inst"]		= "Einige Programme erlauben es, Forschungsaufgaben als «TODO-Aufgabe» in der GEDCOM-Datei abzuspeichern.  Diese Option durchsucht GEDCOM-Dateien und konvertiert alle «TODO-Aufgaben» in Forschungsaufgaben.";
$pgv_lang["choose_search_site"]	= "Datenbank wählen";
$pgv_lang["pid_search_for"]		= "Nach wem möchten Sie suchen?";
$pgv_lang["manage_research_inst"]	= "Diese Punkte helfen Ihnen, den Überblick über Ihre Forschungsaufgaben zu behalten. Forschungsaufgaben helfen Ihnen, Ihre Forschungen gezielter durchzuführen und mit anderen Forschern zusammen zu arbeiten.";
$pgv_lang["manage_research"]	= "Koordiniere Forschungen";
$pgv_lang["manage_sources"]		= "Koordiniere Quellen";
$pgv_lang["part_of"]			= "Teil von (optional)";
$pgv_lang["search_fhl"]			= "Suche im Family History Library Catalog"; 
$pgv_lang["determine_sources"]	= "Bestimme mögliche Quellen";
$pgv_lang["analyze_database"]	= "Analysiere Datenbank";
$pgv_lang["pid_know_more"]		= "Von wem möchten Sie mehr erfahren?";
$pgv_lang["analyze_people"]		= "Analysiere Personen";
$pgv_lang["analyze_data"]		= "Analysiere Daten";
$pgv_lang["missing_info"] 		= "Fehlende Informationen";
$pgv_lang["auto_search"]		= "Dieser Programmpunkt sucht automatisch in den Datenbanken von Ancestry und FamilySearch. Sie können nach dem Namen, Geburts- und Todesdaten suchen.<br />";
$pgv_lang["auto_search_text"]	= "Automatische Suche";
$pgv_lang["task_list"]			= "Aufgaben";
$pgv_lang["task_list_text"]		= "Dieses Feld zeigt die von Ihnen erzeugten Aufgaben. <b>Anzeige</b> klicken um die Aufgaben zu sehen.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]							= "Meine Aufgaben";
$pgv_lang["add_task"]							= "Neue Aufgabe";
$pgv_lang["view_folders"]						= "Ordner";
$pgv_lang["view_probabilities"]						= "Wahrscheinlichkeiten";
$pgv_lang["up_folder"]							= "Übergeordneter Ordner";
$pgv_lang["edit_folder"]						= "Neuer Ordner/Ändern";
$pgv_lang["gen_tasks"]							= "Erstelle Aufgaben automatisch";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]							= "Aufgabe bearbeiten";
$pgv_lang["completed"]							= "Abgeschlossen";
$pgv_lang["complete"]							= "Komplett";
$pgv_lang["incomplete"]							= "Mit Lücken";
$pgv_lang["created"]							= "Erstellt";
$pgv_lang["details"]							= "Details";
$pgv_lang["result"]                     		= "Ergebnis";
$pgv_lang["okay"]                               = "In Ordnung";
$pgv_lang["editform"]							= "Bearbeite Formulardaten";
$pgv_lang["FilterBy"]							= "Filtere mit";
$pgv_lang["Recalculate"]						= "Neu berechnen";
$pgv_lang["LocalData"]							= "Lokale Daten";
$pgv_lang["RelatedRecord"]						= "Verwandte Aufzeichnung";
$pgv_lang["RelatedData"]						= "Verwandte Daten";
$pgv_lang["Percent"]							= "von Hundert";
$pgv_lang["Fields"]								= "Anzahl der Felder";
$pgv_lang["FieldName"]							= "Feldname";
$pgv_lang["InputType"]							= "Eingabeart";
$pgv_lang["Values"]								= "Werte";
$pgv_lang["FormBuilder"]						= "Formular-Automat"; 
$pgv_lang["FormName"]							= "Gib den Formularnamen ein";
$pgv_lang["MultiplePeople"]						= "Ist das Formular für mehrere Personen gültig?";
$pgv_lang["EnterGEDCOMExtension"]				= "Bitte geben Sie eine GEDCOM-Erweiterung für den Ereignistyp des Formulars ein.";
$pgv_lang["FormDesciption"]						= "Bitte geben Sie eine Beschreibung des Formulars ein.";
$pgv_lang["FormGeneration"]						= "Formularerstellung abgeschlossen!";
$pgv_lang["CustomField"]						= "Benutzerfeldname";
$pgv_lang["txt"]								= "Text";
$pgv_lang["checkbox"]							= "Häkchenkasten";
$pgv_lang["radiobutton"]						= "Radioknopf";
$pgv_lang["EnterResults"]						= "Bitte geben Sie Ergebnisse ein"; 
$pgv_lang["ra_submit"]							= "Abschicken";
$pgv_lang["ra_generate_tasks"]					= "Erstelle Aufgaben aus der TODO-Datei";
$pgv_lang["TaskDescription"]					= "Aufgabenbeschreibung";
$pgv_lang["SelectFolder"]                       = "Ordner wählen:";
$pgv_lang["ra_done"]							= "Fertig";
$pgv_lang["ra_generate"]						= "Erstellen";
$pgv_lang["LocalPercent"]						= "Lokale Prozent";
$pgv_lang["GlobalPercent"]						= "Globale Prozent";
$pgv_lang["Average"]							= "Durchschnitt";
$pgv_lang["NoData"]								= "Keine Daten!";
$pgv_lang["NotEnoughData"]						= "Nicht genug Daten!";
$pgv_lang["InferIndvBirthPlac"]					= "Der Geburtsort heißt mit einer Wahrscheinlichkeit von %PERCENT%:";
$pgv_lang["InferIndvDeathPlac"]					= "Der Todesort heißt mit einer Wahrscheinlichkeit von %PERCENT%:";
$pgv_lang["InferIndvSurn"]						= "Der Nachname lautet mit einer Wahrscheinlichkeit von %PERCENT%:";
$pgv_lang["InferIndvMarriagePlace"]				= "Die Ehe fand mit einer Wahrscheinlichkeit von %PERCENT% an diesem Ort statt:";
$pgv_lang["InferIndvGivn"]						= "Der Vorname lautet mit einer Wahrscheinlichkeit von %PERCENT%:";
$pgv_lang["All"]								= "Alle";
$pgv_lang["More"]								= "Weiter";
$pgv_lang["ThereIsChance"]						= "Mögliche Quellen sind:";
$pgv_lang["TheMostLikely"]						= "Der wahrscheinlichste Platz für diese Quelle ist:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]					= "Datenbeziehungen";
$pgv_lang["ViewProbExplanation"]				= "Diese Seite analysiert die Daten der aktiven GEDCOM-Datei und zeigt die Beziehungen zwischen verschiedenen Datenelementen.<br /><br />Zum Beispiel könnte eine Auswertung eine Wahrscheinlichkeit von 95% für die Annahme ergeben, dass der Nachname einer Person genauso lautet wie der Nachnahme des Vaters dieser Person.  Dies würde bedeuten, dass 95% aller Personen in dieser GEDCOM-Datenbank den gleichen Nachnahmen wie ihr Vater haben.<br /><br />In der aktuellen Version des Forschungsassistenten werden diese Berechnungen nicht in anderen Bereichen von PhpGedView benutzt und dienen ausschließlich zur Hilfe bei Nachforschungen. Für die Zukunft planen wir, anhand dieser Daten fundierte Vorschläge für die weiteren Forschungsschwerpunkte zu liefern. ";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]								= "Ordner:";
$pgv_lang["Edit_Gen_Task"]                 		= "Bearbeite automatisch erstellte Aufgabe";
$pgv_lang["Start_Date"]                 		= "Startdatum";
$pgv_lang["Task_Name"]                			= "Aufgabenname";
$pgv_lang["Folder_Name"]                		= "Ordnername";
$pgv_lang["Folder_View"]                		= "Ordneransicht";
$pgv_lang["Task_View"]                  		= "Aufgabenansicht";
$pgv_lang["page_header"]						= "Forschungsassistenten-Ordner";
$pgv_lang["no_folder_name"]             		= "Bitte einen Ordnernamen eingeben.";
$pgv_lang["add_folder"]                 		= "Neuer Ordner";
$pgv_lang["folder_name"]                		= "Ordnername";
$pgv_lang["Parent_Folder:"]             		= "Übergeordneter Ordner";
$pgv_lang["No_Parent"]                  		= "Kein übergeordneter Ordner";
$pgv_lang["Folder_Description:"]        		= "Beschreibung des Ordners";
$pgv_lang["Folder_names_must_be_unique"]		= "Ordnernamen dürfen nicht mehrfach vorkommen.";
$pgv_lang["folder_submitted"]          			= "Das Anlegen des Ordners wurde angefordert"; 
$pgv_lang["folder_problem"]             		= "Es gab ein Problem, den Ordner anzulegen, bitte versuchen Sie es noch einmal";

// -- Missing Information Help 
$pgv_lang["ra_missing_info_help"] = "Diese Ansicht zeigt an, welche Informationen in diesem Datensatz noch fehlen.<br /><br />Sie sollten ein Häkchen setzen, einen Ordner wählen, und <b>Neue Aufgabe</b> klicken um eine neue Aufgabe für die fehlende Information zu erstellen. Bereits existierende Aufgaben werden durch ein <b>Ansehen</b> anstelle eines Häkchenkastens gekennzeichnet.<br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]							= "Neue Aufgabe erstellen.";

//-- FEHLER MESSAGES
$pgv_lang["no_folder"]							= "Es existiert noch kein Ordner. Bitte erstellen Sie zuerst einen neuen Ordner.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]				= "~#pgv_lang[Folder_View]#~<ul><li><b>Ordner:</b> Diese Spalte enthält die Namen aller von Ihnen erstellten Ordner.</li><li><b>Beschreibung:</b> Diese Spalte enthält die Beschreibungen aller Ordner.</li></ul>";
$pgv_lang["ra_add_task_help"]				= "~#pgv_lang[add_new_task]#~<ul><li><b>Titel:</b> Hier sollte der Titel der hinzuzufügenden Aufgabe stehen.</li><li><b>Ordner:</b> In diesem Feld bestimmen Sie, in welchem Ordner die neue Aufgabe abgelegt wird.</li><li><b>Beschreibung:</b> Geben Sie eine Beschreibung der neuen Aufgabe ein.</li><li><b>Quellen:</b> Fügen Sie Quellen für die neue Aufgabe hinzu.</li><li><b>Personen:</b> Stellen Sie eine Verbindung zu Personen her, die mit der neuen Aufgabe zu tun haben.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "~Ordner bearbeiten~<ul><li><b>#pgv_lang[Folder_Name]#:</b> Hier sollten Sie den Namen des gerade editierten Ordners angeben.</b></li><li><b>Übergeordnete Ordner:</b> Falls der gerade bearbeitete Ordner einen übergeordneten Ordner besitzt, steht hier dessen Name.</b></li><li><b>Beschreibung des Ordners:</b> Dies ist die Beschreibung des gerade bearbeiteten Ordners.</b></li></ul>";
$pgv_lang["ra_add_folder_help"]				= "~Neuen Ordner hinzufügen~<ul><li><b>#pgv_lang[Folder_Name]#:</b> Hier sollten Sie den Namen des neu hinzuzufügenden Ordners angeben.</b></li><li><b>Übergeordneter Ordner:</b> Falls der neue Ordner einen übergeordneten Ordner besitzen soll, steht hier dessen Name.</b></li><li><b>Beschreibung des Ordners:</b> Dies ist die Beschreibung des neuen Ordners.</b></li></ul>";
$pgv_lang["ra_view_task_help"]				= "~Task View~<ul><li><b>Task Name:</b> This column contains the name of each task.</b></li><li><b>Start Date:</b> This will contain the start dates of all the tasks.</li><li><b>Completed:</b> This will show whether or not a task is completed.</li><li><b>Edit:</b> This will take you to edit the task</li><li><b>Delete:</b> This will delete the task.</li><li><b>Complete:</b> This will take you immediately to choose the form and edit the task</li></ul>";
$pgv_lang["ra_task_view_help"]				= "~View Task~<ul><li><b>Title:</b> This should contain the title of the task that you are adding.</li><li><b>People:</b> Assign any people associated for the new task.</li><li><b>Description:</b> Enter a description of the task you want to add.</li><li><b>Sources:</b> Assign any sources that you have for the task.</li><li>Click <b>Edit Task</b> to edit the details of the task.</li></ul>";
$pgv_lang["ra_comments_help"]				= "~Comments~<ul><li>This will contain any comments related to the task. Click <b>Add New Comment</b> to add any comments.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "~Generate Tasks~<p>This form generates tasks from the _TODO tags in your GEDCOM file.</p><ul><li><b>Generate:</b> check each task to generate when you click <b>Generate</b>.</li><li><b>Task Name:</b> This is the name the task will be given.  This defaults to the text in the actual _TODO tag, excluding any CONT tags</li><li><b>Task Description:</b> The description the task will be given.  This is generated from the text in the _TODO tag plus all of the associated CONT tags.  </li><li><b>Edit:</b> click the link to edit that task.</li><li><b>Select Folder:</b> select the folder to put the generated tasks in.</li><li><b>Generate:</b> generates the tasks that have been checked.</li><li><b>Done:</b> redirects you to the Folder View page.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]			= "~Edit Generated Task~<p>This form allows you to edit the tasks generated from _TODO tags in your GEDCOM file.</p><ul><li><b>Task Name:</b> This is the name the task will be given.  </li><li><b>Task Description:</b> The description the task will be given. </li><li><b>People:</b> click the link to select the person to associate the task with.</li><li><b>Source:</b> click the link to select the source to associate the task with.</li><li><b>Save:</b> saves all your changes and redirects you to the Generate tasks page.</li><li><b>Cancel:</b> disregards all your changes and redirects you to the Generate tasks page.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]			= "~Configure Privacy~<ul><li><b>#pgv_lang[PRIV_PUBLIC]#:</b> The specified task is available to everyone.</li><li><b>#pgv_lang[PRIV_USER]#:</b> The specified task is available only to authenticated users.</li><li><b>#pgv_lang[PRIV_NONE]#</b> The specified task is available only to users with Admin rights.</li><li><b>#pgv_lang[PRIV_HIDE]#:</b> The specified task is not available to anyone.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "~Edit Task~<ul><li><b>Title:</b> This should contain the title of the task that you are editing.</li><li><b>Folder:</b> In this field you can assign which folder you want your new task to go to.</li><li><b>Description:</b> Enter a description of the task you want to edit.</li><li><b>Sources:</b> Assign or edit any sources that you have for the task.</li><li><b>People:</b> Assign or edit any people associated for the task.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]					= "Zeige Aufgaben";
$pgv_lang["add_new_comment"]			= "Füge neuen Kommentar hinzu";
$pgv_lang["no_indi_tasks"]				= "Mit dieser Person sind keine Aufgaben verbunden.";
$pgv_lang["no_sour_tasks"]				= "Mit dieser Quelle sind keine Aufgaben verbunden.";
$pgv_lang["edit_comment"]				= "Bearbeite Kommentar";
$pgv_lang["comment_success"]			= "Ihr Kommentar wurde erfolgreich hinzugefügt.";
$pgv_lang["comment_body"]				= "Kommentar";

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "Sind Sie sicher, dass Sie dieses Kommentar löschen möchten?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]				= "Neue Aufgabe hinzufügen";
$pgv_lang["submit"]						= "Anlegen";
$pgv_lang["save_and_complete"]      	= "Sichern und abschließen";
$pgv_lang["assign_task"]				= "Aufgabe zuweisen";
$pgv_lang["AddTask"]					= "Aufgabe hinzufügen";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]			= "Konfiguriere Datenschutzeinstellungen";
$pgv_lang["show_my_tasks"]      		= "Zeige meine Aufgaben";
$pgv_lang["show_add_task"]				= "Zeige «Aufgabe hinzufügen»";
$pgv_lang["show_auto_gen_task"]         = "Zeige «Aufgabe automatisch erstellen»";
$pgv_lang["show_view_folders"]			= "Zeige «Ordner anzeigen»";
$pgv_lang["show_add_folder"]			= "Zeige «Ordner hinzugügen»";
$pgv_lang["show_add_unlinked_source"]   = "Zeige «Nicht verbundene Quelle anzeigen»";
$pgv_lang["show_view_probabilities"]	= "Zeige «Wahrscheinlichkeiten betrachten»";

//-- Census Forms
$pgv_lang["rows"]                       = "Anzahl der Reihen";
$pgv_lang["state"]                      = "Staat";
$pgv_lang["call/url"]                   = "Call Number/URL";
$pgv_lang["enumDate"]                   = "Zählungsdatum";
$pgv_lang["county"]                     = "Bezirk";
$pgv_lang["city"]                       = "Stadt";
$pgv_lang["complete_title"]				= "Aufgabe abschließen";
$pgv_lang["select_form"]				= "Maske wählen";
$pgv_lang["choose_form_label"]			= "Choose a common research form:";
$pgv_lang["book"]                 		= "Buch";
$pgv_lang["folio"]                   	= "Folio";
$pgv_lang["uk_county"]					= "Landstrich";
$pgv_lang["uk_boro"]					= "Stadt oder Bezirk";
$pgv_lang["uk_place"]					= "Ort";

$pgv_lang["AssIndiFacts"]				= "Associate Individual Facts"; 
$pgv_lang["AssFamFacts"]				= "Associate Family Facts";  
$pgv_lang["ra_facts"]					= "Facts"; 	
$pgv_lang["ra_fact"]					= "Fact"; 
$pgv_lang["ra_remove"]					= "remove";   
$pgv_lang["ra_inferred_facts"]			= "Inferred Facts"; 
$pgv_lang["ra_person"]					= "Person"; 
$pgv_lang["ra_reason"]					= "Grund"; 
$pgv_lang["success"]					= "Erfolg!"; 

$pgv_lang["registration_no"]			= "Registrierungsnummer:";
$pgv_lang["serial_no"]					= "Fortlaufende Nummer:";
$pgv_lang["ra_no"]						= "Nummer:";
$pgv_lang["order_no"]					= "Ordnungsnummer:";

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]		= "Der #pgv_lang[my_tasks]# Block zeigt die Aufgaben des jeweiligen Benutzers. Er kann so eingestellt werden, dass alle fertiggestellten oder alle noch nicht zugewiesenen Aufgaben dargestellt werden.";
$pgv_lang["mytasks_block"] 				= "Forschungsassistent";
$pgv_lang["mytasks_edit"]               = "Bearbeite";
$pgv_lang["mytasks_unassigned"]			= "Nicht zugewiesen";
$pgv_lang["mytasks_takeOn"]				= "Aufgabe übernehmen";
$pgv_lang["mytasks_help"]				= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]   		= "Nicht zugewiesene Aufgaben zeigen?";
$pgv_lang["mytask_show_completed"]		= "Fertiggestellte Aufgaben zeigen?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]			= "Einschließlich Nachname:";
$pgv_lang["autosearch_givenname"]		= "Einschließlich Vornamen:";
$pgv_lang["autosearch_byear"]		    = "Einschließlich Geburtsjahr:";
$pgv_lang["autosearch_bloc"]		    = "Einschließlich Geburtsort:";  
$pgv_lang["autosearch_dyear"]		    = "Einschließlich Todesjahr:";
$pgv_lang["autosearch_dloc"]		    = "Einschließlich Todesort:";
$pgv_lang["autosearch_gender"]          = "Einschließlich Geschlecht:";
$pgv_lang["autosearch_plugin_name"]     = "";  
$pgv_lang["autosearch_fsurname"]		= "Einschließlich Vaters Nachname:";
$pgv_lang["autosearch_fgivennames"]		= "Einschließlich Vaters Vornamen:";
$pgv_lang["autosearch_msurname"]		= "Einschließlich Mutters Nachname:";
$pgv_lang["autosearch_mgivennames"]	    = "Einschließlich Mutters Vornamen:"; 
$pgv_lang["autosearch_country"]  	    = "Einschließlich Ort bzw. Land:"; 
$pgv_lang["autosearch_plugin_name_ancestry"] 		= "Ancestry.com Plugin";
$pgv_lang["autosearch_plugin_name_ancestrycouk"] 	= "Ancestry.co.uk Plugin";
$pgv_lang["autosearch_plugin_name_ellisIsland"] 	= "EllisIslandRecords.org Plugin";
$pgv_lang["autosearch_plugin_name_genNet"] 			= "GeneaNet.com Plugin";
$pgv_lang["autosearch_plugin_name_gen"]  			= "Genealogy.com Plugin"; 
$pgv_lang["autosearch_plugin_name_fs"]   			= "FamilySearch.org Plugin";
$pgv_lang["autosearch_plugin_name_werelate"]   		= "Werelate.org Plugin";
$pgv_lang["autosearch_search"]			= "Suche";
$pgv_lang["autosearch_keywords"]		= "Schlüsselwörter:";

//Folder deletion FEHLER messages
$pgv_lang["has_tasks"]					="Der Ordner enthält noch Aufgaben und kann daher nicht gelöscht werden.";
$pgv_lang["has_folders"]				="Der Ordner enthält noch untergeordnete Ordner und kann daher nicht gelöscht werden.";
?>
