<?php
/**
 * French Language file for Research_assistant.
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
 * @version $Id: lang.fr.php 3858 2008-09-13 23:34:58Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

#pgv_lang["autosearch_ssurname"]        = "Include spouse's surname:";
#pgv_lang["autosearch_sgivennames"]     = "Include spouse's given names:";
#pgv_lang["autosearch_plugin_name_gensearchhelp"]= "Genealogy-Search-Help.com Plug-in";

#pgv_lang["add_task_inst"]              = "If a task for your research results has not yet been created, you should create the task first and then choose the option to save and complete the task.";
#pgv_lang["complete_task_inst"]         = "Choose a task from the list of your tasks below to complete the task and enter your results:";
$pgv_lang["enter_results"]              = "Résultats";
#pgv_lang["auto_gen_inst"]              = "Some programs allow you to enter research tasks as TODO items in your GEDCOM file.  This option will search through your GEDCOM file and automatically convert any TODO item into a research task.";
$pgv_lang["choose_search_site"]         = "Choisir un site de recherche";
$pgv_lang["pid_search_for"]             = "Qui rechercher ?";
#pgv_lang["manage_research_inst"]       = "These items will help you to manage your research tasks.  Research tasks help you keep track of your research and collaborate with other researchers.";
$pgv_lang["manage_research"]            = "Gérer les Recherches";
$pgv_lang["manage_sources"]             = "Gérer les Sources";
#pgv_lang["part_of"]                    = "Part of (optional)";
#pgv_lang["search_fhl"]                 = "Search Family History Library Catalog"; 
$pgv_lang["determine_sources"]          = "Déterminer les sources possibles";
$pgv_lang["analyze_database"]           = "Analyser la base";
$pgv_lang["pid_know_more"]              = "Qui étudier ?";
$pgv_lang["analyze_people"]             = "Analyser des individus";
$pgv_lang["analyze_data"]               = "Analyser mes données";
$pgv_lang["missing_info"]               = "Informations manquantes";
#pgv_lang["auto_search"]                = "This feature will automatically search Ancestry and FamilySearch. You may choose to search by name, and birth/death date.<br />";
$pgv_lang["auto_search_text"]           = "Recherche automatique";
$pgv_lang["task_list"]                  = "Tâches";
#pgv_lang["task_list_text"]             = "This area displays tasks you have created. Click <b>View</b> to see the tasks.";

// -- HELP COMMENTS
#pgv_lang["help_comments"]              = "Here you can add comments. Other people can see them and add their own comments.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]                   = "Mes Tâches";
$pgv_lang["add_task"]                   = "Ajouter une Tâche";
$pgv_lang["view_folders"]               = "Voir les Dossiers";
$pgv_lang["view_probabilities"]         = "Voir les Probabilités";
#pgv_lang["up_folder"]                  = "Up Folder";
#pgv_lang["edit_folder"]                = "Add/Edit Folder";
#pgv_lang["gen_tasks"]                  = "Auto Generate Tasks";


// -- RA GENERAL MESSAGES
#pgv_lang["edit_task"]                  = "Edit Task";
$pgv_lang["completed"]                  = "Terminé";
#pgv_lang["complete"]                   = "Complete";
#pgv_lang["incomplete"]                 = "Incomplete";
$pgv_lang["comres"]                     = "Commentaires/Résultats";
#pgv_lang["description"]                = "Description";
$pgv_lang["created"]                    = "Créé";
$pgv_lang["modified"]                   = "Modifié";
$pgv_lang["folder_list"]                = "Liste des dossiers";
$pgv_lang["details"]                    = "Détails";
$pgv_lang["result"]                     = "Résultat";
$pgv_lang["okay"]                       = "Ok";
#pgv_lang["editform"]                   = "Edit Form Data";
$pgv_lang["FilterBy"]                   = "Filtrer par";
$pgv_lang["Recalculate"]                = "Recalculer";
$pgv_lang["LocalData"]                  = "Données locales";
$pgv_lang["RelatedRecord"]              = "Enregistrement lié";
$pgv_lang["RelatedData"]                = "Données liées";
$pgv_lang["Percent"]                    = "%";
$pgv_lang["Fields"]                     = "Nombre de champs";
$pgv_lang["FieldName"]                  = "Nom du champ";
#pgv_lang["InputType"]                  = "Input Type";
$pgv_lang["Values"]                     = "Valeurs";
#pgv_lang["FormBuilder"]                = "FormBuilder"; 
$pgv_lang["FormName"]                   = "Titre du formulaire";
#pgv_lang["MultiplePeople"]             = "Does the form apply to multiple people?";
#pgv_lang["EnterGEDCOMExtension"]       = "Please enter the GEDCOM extension for the form's fact type";
#pgv_lang['FormDesciption']             = "Please enter a description for the form";
#pgv_lang["FormGeneration"]             = "Form Generation Complete!";
#pgv_lang["CustomField"]                = "Custom Field Name";
$pgv_lang["txt"]                        = "Texte";
$pgv_lang["checkbox"]                   = "Cocher";
$pgv_lang["radiobutton"]                = "Boutons Radio";
#pgv_lang["EnterResults"]               = "Enter Results"; 
$pgv_lang["ra_submit"]                  = "Envoyer";
$pgv_lang["ra_generate_tasks"]          = "Générer les Tâches à partir de la liste 'A Faire'";
$pgv_lang["TaskDescription"]            = "Description de la Tâche";
$pgv_lang["SelectFolder"]               = "Choisir un dossier:";
$pgv_lang["ra_done"]                    = "Terminé";
$pgv_lang["ra_generate"]                = "Générer";
$pgv_lang["LocalPercent"]               = "% Local";
$pgv_lang["GlobalPercent"]              = "% Global";
$pgv_lang["Average"]                    = "Moyenne";
$pgv_lang["NoData"]                     = "Aucune donnée !";
$pgv_lang["NotEnoughData"]              = "Pas assez de données !";
#pgv_lang["InferIndvBirthPlac"]         = "There is a %PERCENT% chance that the birth place is:";
#pgv_lang["InferIndvDeathPlac"]         = "There is a %PERCENT% chance that the death place is:";
#pgv_lang["InferIndvSurn"]              = "There is a %PERCENT% chance that the Surname is:";
#pgv_lang["InferIndvMarriagePlace"]     = "There is a %PERCENT% chance that the marriage place is:";
#pgv_lang["InferIndvGivn"]              = "There is a %PERCENT% chance that the given name is:";
$pgv_lang["All"]                        = "Tous";
$pgv_lang["More"]                       = "Suite";
#pgv_lang["ThereIsChance"]              = "Possible Sources may include:";
#pgv_lang["TheMostLikely"]              = "The most likely place for this source is:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]           = "Corrélations";
#pgv_lang["ViewProbExplanation"]        = "This page analyzes the data for the active GEDCOM dataset and shows the correlations between different data elements. For example, there could be a 95% correlation that the surname in a local record is the same as the surname in the father's record.  This would mean that 95% of the people in this GEDCOM dataset share the same surname as their father. In this version of the Research Assistant, these calculations are not being used in other areas of the program and are only provided as a help to you in your research.  In the future we plan to use this data to help provide you with meaningful suggestions of where you should focus some of your future research. ";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                     = "Dossier :";
$pgv_lang["Edit_Task"]                  = "Modifier la Tâche";
$pgv_lang["Edit_Gen_Task"]              = "Modifier la Tâche générée";
$pgv_lang["End_Date"]                   = "Date de fin";
$pgv_lang["Start_Date"]                 = "Date de début";
$pgv_lang["Task_Name"]                  = "Nom de la Tâche";
$pgv_lang["Folder_Name"]                = "Nom du dossier";
#pgv_lang["Folder_View"]                = "Folder View";
#pgv_lang["Task_View"]                  = "Task View";
#pgv_lang["page_header"]                = "Research Assistant Folders";
#pgv_lang["folder_new"]                 = "Create New Folder";
#pgv_lang["folder_delete_check"]        = "Are you sure you want to delete this folder?";
#pgv_lang["no_folder_name"]             = "Folder name field must be filled in.";
$pgv_lang["add_folder"]                 = "Ajouter un dossier";
#pgv_lang["folder_name"]                = "Folder Name:";
$pgv_lang["Parent_Folder:"]             = "Dossier parent :";
$pgv_lang["No_Parent"]                  = "Aucun parent";
$pgv_lang["Folder_Description:"]        = "Description du dossier :";
$pgv_lang["Folder_names_must_be_unique"]= "Un nom de dossier doit être unique.";
$pgv_lang["folder_submitted"]           = "Dossier soumis";
#pgv_lang["folder_problem"]             = "There has a been problem with adding your folder, please try again";

// -- Missing Information Help 
#pgv_lang["ra_missing_info_help"]       = "This area displays missing information about the record. Select a checkbox and folder and click <b>Add Task</b> to create a task for the missing item. Existing tasks will show <b>View</b> instead of a checkbox.<br />";

// -- RA_EDITFOLDER MESSAGES	
#pgv_lang["edit_research_folder"]       = "Edit Research Folder";
#pgv_lang["folder_not_exist"]           = "This folder does not exist: ";
#pgv_lang["folder_parent"]              = "Parent Folder";
$pgv_lang["parent_id"]                  = "Aucun";
#pgv_lang["folder_users"]               = "Other Users who can see this folder";

// -- RA_EDITLOG MESSAGES
#pgv_lang["edit_research_log"]          = "Edit Research Log";
#pgv_lang["log_not_exist"]              = "This log does not exist: ";

// -- RA_LOG MESSAGES
#pgv_lang["edit_log_entry"]             = "Edit Research Log Entry";
#pgv_lang["log_no_entry"]               = "ERROR: You do not have permission to access this item.";
$pgv_lang["log_modified"]               = "Dernière modification";
$pgv_lang["log_modified_by"]            = "par";
#pgv_lang["log_edit_entry"]             = "Edit this entry";

// -- RA_LISTLOGS MESSAGES
#pgv_lang["research_logs"]              = "Research Logs";
#pgv_lang["log_no_entry_folder"]        = "ERROR: You do not have permission to access this folder.";
#pgv_lang["folder_sub"]                 = "Sub Folders";
#pgv_lang["folder_sub_new"]             = "Create New Sub Folder";
#pgv_lang["task_entry"]                 = "Create new task.";
#pgv_lang["log_show"]                   = "Show All Logs";
#pgv_lang["log_show_uncomplete"]        = "Show Uncompleted Logs";
#pgv_lang["log_show_complete"]          = "Show Completed Logs";
#pgv_lang["log_delete_check"]           = "Are you sure you want to delete this log entry?";

// -- RA_FUNCTIONS MESSAGES
#pgv_lang["function_folder_delete"]     = "ERROR: Cannot delete this folder because it still contains research log entries.<br />First move or delete these research log entries and then try to delete the folder again.";
#pgv_lang["function_subfolder_delete"]  = "ERROR: Cannot delete this folder because it still contains subfolders.<br />First move or delete these subfolders and then try to delete the folder again.";
$pgv_lang["folder_delete_ok"]           = "Le dossier #folder_name# a été supprimé.";
$pgv_lang["folder_update_ok"]           = "Le dossier #folder_name# a été mis à jour.";
$pgv_lang["folder_added"]               = "Le dossier #folder_name# a été ajouté.";

//-- RA_SEARCH MESSAGES
#pgv_lang["search_results"]             = "Search Results";
#pgv_lang["nothing_found"]              = "No matching logs found.";

//-- ERROR MESSAGES
#pgv_lang["no_folder"]                  = "No folder exists yet. Please create a new folder first.";

//-- HELP MESSAGES
#pgv_lang["help_rs_folders.php"]        = "Research Assistant Folders<br /> #pgv_lang[sorry]#";
#pgv_lang["help_rs_editfolder.php"]     = "Research Assistant Edit Folders<br />#pgv_lang[sorry]#";
#pgv_lang["help_rs_editlog.php"]        = "Research Assistant Edit Log<br />#pgv_lang[sorry]#";
#pgv_lang["ra_fold_name_help"]          = "~Folder View~<ul><li><b>Folder Name:</b> This column contains the names of all of the folders you have created.</li><li><b>Description:</b> This column contains the description of the folders.</li></ul>";
#pgv_lang["ra_add_task_help"]           = "~Add New Task~<ul><li><b>Title:</b> This should contain the title of the task that you are adding.</li><li><b>Folder:</b> In this field you can assign which folder you want your new task to go to.</li><li><b>Description:</b> Enter a description of the task you want to add.</li><li><b>Sources:</b> Assign any sources that you have for the task.</li><li><b>People:</b> Assign any people associated for the new task.</li></ul>";
#pgv_lang["ra_edit_folder_help"]        = "~Edit Folder~<ul><li><b>Folder Name:</b> This is where you should add the title of the folder that you are editing.</b></li><li><b>Parent folder:</b> You can assign the parent folder, if any, of the folder you are editing.</b></li><li><b>Folder description:</b> This is the description of the folder you are editing.</b></li></ul>";
#pgv_lang["ra_add_folder_help"]         = "~Add Folder~<ul><li><b>Folder Name:</b> This is where you should add the title of the folder that you are adding.</b></li><li><b>Parent folder:</b> You can assign the parent folder, if any, of the folder you are adding.</b></li><li><b>Folder description:</b> This is the description of the folder you are adding.</b></li></ul>";
#pgv_lang["ra_view_task_help"]          = "~Task View~<ul><li><b>Task Name:</b> This column contains the name of each task.</b></li><li><b>Start Date:</b> This will contain the start dates of all the tasks.</li><li><b>Completed:</b> This will show whether or not a task is completed.</li><li><b>Edit:</b> This will take you to edit the task</li><li><b>Delete:</b> This will delete the task.</li><li><b>Complete:</b> This will take you immediately to choose the form and edit the task</li></ul>";
#pgv_lang["ra_task_view_help"]          = "~View Task~<ul><li><b>Title:</b> This should contain the title of the task that you are adding.</li><li><b>People:</b> Assign any people associated for the new task.</li><li><b>Description:</b> Enter a description of the task you want to add.</li><li><b>Sources:</b> Assign any sources that you have for the task.</li><li>Click <b>Edit Task</b> to edit the details of the task.</li></ul>";
#pgv_lang["ra_comments_help"]           = "~Comments~<ul><li>This will contain any comments related to the task. Click <b>Add New Comment</b> to add any comments.</li></ul>";
#pgv_lang["ra_GenerateTasks_help"]      = "~Generate Tasks~<p>This form generates tasks from the _TODO tags in your GEDCOM file.</p><ul><li><b>Generate:</b> check each task to generate when you click <b>Generate</b>.</li><li><b>Task Name:</b> This is the name the task will be given.  This defaults to the text in the actual _TODO tag, excluding any CONT tags</li><li><b>Task Description:</b> The description the task will be given.  This is generated from the text in the _TODO tag plus all of the associated CONT tags.  </li><li><b>Edit:</b> click the link to edit that task.</li><li><b>Select Folder:</b> select the folder to put the generated tasks in.</li><li><b>Generate:</b> generates the tasks that have been checked.</li><li><b>Done:</b> redirects you to the Folder View page.</li></ul>";
#pgv_lang["ra_EditGenerateTasks_help"]  = "~Edit Generated Task~<p>This form allows you to edit the tasks generated from _TODO tags in your GEDCOM file.</p><ul><li><b>Task Name:</b> This is the name the task will be given.  </li><li><b>Task Description:</b> The description the task will be given. </li><li><b>People:</b> click the link to select the person to associate the task with.</li><li><b>Source:</b> click the link to select the source to associate the task with.</li><li><b>Save:</b> saves all your changes and redirects you to the Generate tasks page.</li><li><b>Cancel:</b> disregards all your changes and redirects you to the Generate tasks page.</li></ul>";
#pgv_lang["ra_configure_privacy_help"]  = "~Configure Privacy~<ul><li><b>#pgv_lang[PRIV_PUBLIC]#:</b> The specified task is available to everyone.</li><li><b>#pgv_lang[PRIV_USER]#:</b> The specified task is available only to authenticated users.</li><li><b>#pgv_lang[PRIV_NONE]#</b> The specified task is available only to users with Admin rights.</li><li><b>#pgv_lang[PRIV_HIDE]#:</b> The specified task is not available to anyone.</li></ul>";
#pgv_lang["ra_edit_task_help"]          = "~Edit Task~<ul><li><b>Title:</b> This should contain the title of the task that you are editing.</li><li><b>Folder:</b> In this field you can assign which folder you want your new task to go to.</li><li><b>Description:</b> Enter a description of the task you want to edit.</li><li><b>Sources:</b> Assign or edit any sources that you have for the task.</li><li><b>People:</b> Assign or edit any people associated for the task.</li></ul>";

//-- RA_VIEWTASK MESSAGES
#pgv_lang["view_task"]                  = "View Task";
#pgv_lang["add_new_comment"]            = "Add New Comment";
#pgv_lang["no_sources"]                 = "There are no sources associated with this task.";
#pgv_lang["no_people"]                  = "There are no people associated with this task.";
#pgv_lang["no_indi_tasks"]              = "No tasks associated with this individual.";
#pgv_lang["no_sour_tasks"]              = "No tasks associated with this source.";
#pgv_lang["edit_comment"]               = "Edit Comment";
#pgv_lang["comment_success"]            = "Your comment was successfully added.";
#pgv_lang['comment_body']               = 'Comment';

//-- RA_COMMENT MESSAGES
#pgv_lang["comment_delete_check"]       = "Are you sure you want to delete this comment?";

//-- RA_ADDTASK MESSAGES
#pgv_lang["add_new_task"]               = "Add New Task";
#pgv_lang["submit"]                     = "Submit";
#pgv_lang["save_and_complete"]          = "Save and Complete";
#pgv_lang["assign_task"]                = "Assign Task";
#pgv_lang["AddTask"]                    = "Add Task";

//-- RA_CONFIGURE PRIVACY MESSAGES
#pgv_lang["configure_privacy"]          = "Configure Privacy";
#pgv_lang["show_my_tasks"]              = "Show My Tasks";
#pgv_lang["show_add_task"]              = "Show Add Task";
#pgv_lang["show_auto_gen_task"]         = "Show Auto Generate Task";
#pgv_lang["show_view_folders"]          = "Show View Folders";
#pgv_lang["show_add_folder"]            = "Show Add Folder";
#pgv_lang["show_add_unlinked_source"]   = "Show Add Unlinked Source";
#pgv_lang["show_view_probabilities"]    = "Show View Probabilities";

//-- COMMENT HELP
#pgv_lang["comment_title_help"]         = "Comment Title Help here.";
#pgv_lang["comment_help"]               = "Click here for help.";

//-- Census Forms
#pgv_lang["rows"]                       = "Number of Rows";
#pgv_lang["state"]                      = "State";
#pgv_lang["call/url"]                   = "Call Number/URL";
#pgv_lang["enumDate"]                   = "Enumeration Date";
#pgv_lang["county"]                     = "County";
#pgv_lang["city"]                       = "City";
#pgv_lang["complete_title"]             = "Complete A Task";
#pgv_lang["select_form"]                = "Select Form";
#pgv_lang['choose_form_label']          = "Choose a common research form:";
#pgv_lang["book"]                       = "Book";
#pgv_lang["folio"]                      = "Folio";
#pgv_lang["uk_county"]                  = "County";
#pgv_lang["uk_boro"]                    = "City or Borough";
#pgv_lang["uk_place"]                   = "Place";

#pgv_lang["AssIndiFacts"]               = "Associate Individual Facts"; 
#pgv_lang["AssFamFacts"]                = "Associate Family Facts";  
#pgv_lang["ra_facts"]                   = "Facts"; 	
#pgv_lang["ra_fact"]                    = "Fact"; 
#pgv_lang["ra_remove"]                  = "remove";   
#pgv_lang["ra_inferred_facts"]          = "Inferred Facts"; 
#pgv_lang["ra_person"]                  = "Person"; 
#pgv_lang["ra_reason"]                  = "Reason"; 
#pgv_lang["success"]                    = "Success!"; 

#pgv_lang["registration_no"]            = "Registration Number:";
#pgv_lang["serial_no"]                  = "Serial No.:";
#pgv_lang["ra_no"]                      = "Number:";
#pgv_lang["order_no"]                   = "Order Number:";

//-- MY TASK BLOCK
#pgv_lang["mytasks_block_descr"]        = "The #pgv_lang[my_tasks]# block shows tasks for the current user. It can be configured to show completed tasks or to show tasks that are currently unassigned.";
#pgv_lang["mytasks_block"]              = "Research Assistant";
#pgv_lang["mytasks_edit"]               = "Edit";
#pgv_lang["mytasks_unassigned"]         = "Unassigned";
#pgv_lang["mytasks_takeOn"]             = "TakeOn";
#pgv_lang["mytasks_help"]               = "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
#pgv_lang["mytask_show_tasks"]          = "Show unassigned tasks?";
#pgv_lang["mytask_show_completed"]      = "Show completed tasks?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]         = "Inclure le nom de famille:";
$pgv_lang["autosearch_givenname"]       = "Inclure le prénom:";
$pgv_lang["autosearch_byear"]           = "Inclure l'année de naissance:";
$pgv_lang["autosearch_bloc"]            = "Inclure le lieu de naissance:";
$pgv_lang["autosearch_dyear"]           = "Inclure l'année de décès:";
$pgv_lang["autosearch_dloc"]            = "Inclure le lieu de décès:";
$pgv_lang["autosearch_gender"]          = "Inclure le sexe:";
#pgv_lang["autosearch_plugin_name"]     = "";  
$pgv_lang["autosearch_fsurname"]        = "Inclure le nom de famille du père:";
$pgv_lang["autosearch_fgivennames"]     = "Inclure le prénom du père:";
$pgv_lang["autosearch_msurname"]        = "Inclure le nom de famille de la mère:";
$pgv_lang["autosearch_mgivennames"]     = "Inclure le prénom de la mère:";
$pgv_lang["autosearch_country"]         = "Inclure le pays:";
#pgv_lang["autosearch_plugin_name_ancestry"]= "Ancestry.com Plug-in";
#pgv_lang["autosearch_plugin_name_ancestrycouk"]= "Ancestry.co.uk Plug-in";
#pgv_lang["autosearch_plugin_name_ellisIsland"]= "EllisIslandRecords.org Plug-in";
#pgv_lang["autosearch_plugin_name_genNet"]= "GeneaNet.com Plug-in";
#pgv_lang["autosearch_plugin_name_gen"] = "Genealogy.com Plug-in"; 
#pgv_lang["autosearch_plugin_name_fs"]  = "FamilySearch.org Plug-in";
#pgv_lang["autosearch_plugin_name_werelate"]= "Werelate.org Plug-in";
$pgv_lang["autosearch_search"]          = "Rechercher";
$pgv_lang["autosearch_keywords"]        = "Mots-clés:";

//Folder deletion error messages
#pgv_lang["has_tasks"]                  ="The folder currently contains tasks and cannot be deleted";
#pgv_lang["has_folders"]                ="The folder currently countains folders and cannot be deleted";
?>
