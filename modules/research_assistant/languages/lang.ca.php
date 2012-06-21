<?php
/**
 * Catalan language file for PhpGedView
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team. All rights reserved.
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
 * @author PGV Developers
 * @translator: Antoni Planas i Vilà
 * @package PhpGedView
 * @subpackage Research Assistant
 * @version $Id: lang.ca.php 5586 2009-05-25 23:35:18Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["autosearch_ssurname"] = "Incloure el cognom del cònjuge:";
$pgv_lang["autosearch_sgivennames"] = "Incloure els noms de pila del cònjuge:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Mòdul per a Genealogy-Search-Help.com";

$pgv_lang["add_task_inst"]		= "Si no heu creat encara una tasca per als vostres resultats d'investigació, caldria que ho féssiu abans i desprès escolliu l'opció de salvar i completar la tasca.";
$pgv_lang["complete_task_inst"]	= "Escolliu una tasca de la lista que es mostra per completarla i introduiu-hi els resultats:";
$pgv_lang["enter_results"]		= "Introduir resultats";
$pgv_lang["auto_gen_inst"]		= "Alguns programes us permeten introduir les tasques d'investigació com elements TODO al vostre arxiu GEDCOM. Aquesta opció cercarà al vostre arxiu GEDCOM y convertirà automàticament qualsevol element TODO en una tasca d'investigació.";
$pgv_lang["choose_search_site"]	= "Escolliu un lloc de recerca";
$pgv_lang["pid_search_for"]		= "Qúina persona voleu buscar?";
$pgv_lang["manage_research_inst"]	= "Aquests elements us ajudaran a gestionar les vostres tasques d'investigació. Les tasques d'investigació us permeten fer el seguiment dels vostres treballs i col·laborar amb altres investigadors.";
$pgv_lang["manage_research"]	= "Gestionar investigació";
$pgv_lang["manage_sources"]		= "Gestionar fonts";
$pgv_lang["part_of"]			= "Part de (opcional)";
$pgv_lang["search_fhl"]			= "Buscar al Catàleg de la Biblioteca d'Història Familiar";
$pgv_lang["determine_sources"]	= "Determinar possibles fonts";
$pgv_lang["analyze_database"]	= "Analitzar la base de dades";
$pgv_lang["pid_know_more"]		= "De qui desitgeu saber-ne més?";
$pgv_lang["analyze_people"]		= "Analitzar persones";
$pgv_lang["analyze_data"]		= "Analitzar les meves dades";
$pgv_lang["missing_info"] 		= "Informació que manca";
$pgv_lang["auto_search"]		= "Aquesta característica recerca automàticament a Ancestry i a FamilySearch. Podeu escollir buscar pel nom i la data de naixement/defunció.<br />";
$pgv_lang["auto_search_text"]	= "Recerca automàtica";
$pgv_lang["task_list"]			= "Tasques";
$pgv_lang["task_list_text"]		= "En aquesta èrea es mostren les tasques que heu creat. Polseu a <b>Veure</b> per veure-les.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]							= "Les meves tasques";
$pgv_lang["add_task"]							= "Afegir tasca";
$pgv_lang["view_folders"]						= "Veure carpetes";
$pgv_lang["view_probabilities"]					= "Veure possibilitats";
$pgv_lang["up_folder"]							= "Pujar a la carpeta superior";
$pgv_lang["edit_folder"]						= "Afegir/Modificar Carpeta";
$pgv_lang["gen_tasks"]							= "Auto-generar tasques";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]							= "Modificar tasca";
$pgv_lang["completed"]							= "Completada";
$pgv_lang["complete"]							= "Completada";
$pgv_lang["incomplete"]							= "Incompleta";
$pgv_lang["created"]							= "Creada";
$pgv_lang["details"]							= "Detalls";
$pgv_lang["result"]                     		= "Resultat";
$pgv_lang["okay"]                               = "Acceptar";
$pgv_lang["editform"]							= "Modificar dades del formulari";
$pgv_lang["FilterBy"]							= "Filtrar per";
$pgv_lang["Recalculate"]						= "Recalcular";
$pgv_lang["LocalData"]							= "Dades locals";
$pgv_lang["RelatedRecord"]						= "Registre relacionat";
$pgv_lang["RelatedData"]						= "Dades relacionades";
$pgv_lang["Percent"]							= "Percentatge";
$pgv_lang["Fields"]								= "Nombre de camps";
$pgv_lang["FieldName"]							= "Nome del camp";
$pgv_lang["InputType"]							= "Tipus d'entrada";
$pgv_lang["Values"]								= "Valors";
$pgv_lang["FormBuilder"]						= "Constructor de formularis";
$pgv_lang["FormName"]							= "Introduiu el nom del formulari";
$pgv_lang["MultiplePeople"]						= "S'aplica aquest formulari a múltiples persones?";
$pgv_lang["EnterGEDCOMExtension"]				= "Introduiu l'extensió GEDCOM per al tipus del fet del formulari";
$pgv_lang["FormDesciption"]						= "Introduiu una descripció per al formulari";
$pgv_lang["FormGeneration"]						= "S'ha completat la generació del formulari";
$pgv_lang["CustomField"]						= "Nom del camp personalitzat";
$pgv_lang["txt"]								= "Text";
$pgv_lang["checkbox"]							= "Casella de selecció";
$pgv_lang["radiobutton"]						= "Botó de ràdio";
$pgv_lang["EnterResults"]						= "Introduiu resultats";
$pgv_lang["ra_submit"]							= "Enviar";
$pgv_lang["ra_generate_tasks"]					= "Generar tasques a partir de TODO (pendents)";
$pgv_lang["TaskDescription"]					= "Descripció de la Tasca";
$pgv_lang["SelectFolder"]                       = "Seleccionar carpeta:";
$pgv_lang["ra_done"]							= "Fet";
$pgv_lang["ra_generate"]						= "Generar";
$pgv_lang["LocalPercent"]						= "Percentatge local";
$pgv_lang["GlobalPercent"]						= "Porcentatge global";
$pgv_lang["Average"]							= "Promig";
$pgv_lang["NoData"]								= "No hi ha dades";
$pgv_lang["NotEnoughData"]						= "No hi ha proutes dades!";
$pgv_lang["InferIndvBirthPlac"]					= "Existeix una probabilitat del %PERCENT% de que el lloc de naixement sigui:";
$pgv_lang["InferIndvDeathPlac"]					= "Existeix una probabilitat del %PERCENT% de que el lloc de defunció sigui:";
$pgv_lang["InferIndvSurn"]						= "Existeix una probabilitat del %PERCENT% de que el cognom sigui:";
$pgv_lang["InferIndvMarriagePlace"]				= "Existeix una probabilitat del %PERCENT% de que el lloc de casament sigui:";
$pgv_lang["InferIndvGivn"]						= "Existeix una probabilitat del %PERCENT% de que el nom de pila sigui:";
$pgv_lang["All"]								= "TOTS";
$pgv_lang["More"]								= "Més";
$pgv_lang["ThereIsChance"]						= "Entre les fonts possibles s'inclouen:";
$pgv_lang["TheMostLikely"]						= "El lloc més probable per a aquesta font és:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]					= "Correlacions de dades";
$pgv_lang["ViewProbExplanation"]				= "Aquesta pàgina analitza les dades del GEDCOM actiu i mostra les correlacions entre els diferents elements. Per exemple, podría haver-hi una correlació del 95% entre el cognom en un registre i el cognom en el registre del pare. Això vol dir que el 95% de les persones d'aquest GEDCOM comparteixen cognom amb el seu pare. En aquesta versió de l'Ajudant d'Investigació, aquests càlculs no s'empren en altres àrees del programa i es proporcionen únicament per ajudar-vos en la vostra investigació. En wl futur planegem emprar aquestes dades per ajudar a proporcionar-vos suggeriments més significatius de cap a on caldria encaminar part de la vostra futura investigació. ";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                             = "Carpeta al servidor";
$pgv_lang["Edit_Gen_Task"]                 		= "Modificar la tasca generada";
$pgv_lang["Start_Date"]                 		= "Data d'inici";
$pgv_lang["Task_Name"]                			= "Nom de la tasca";
$pgv_lang["Folder_Name"]                		= "Nom de la carpeta";
$pgv_lang["Folder_View"]                		= "Vista de carpetes";
$pgv_lang["Task_View"]                  		= "Vista de tasques";
$pgv_lang["page_header"]						= "Carpetes de l'ajudant d'investigació";
$pgv_lang["no_folder_name"]             		= "Cal que ompliu el camp del nom de carpeta.";
$pgv_lang["add_folder"]                 		= "Afegir carpeta";
$pgv_lang["folder_name"]                		= "Nom de carpeta";
$pgv_lang["Parent_Folder:"]             		= "Carpeta superior:";
$pgv_lang["No_Parent"]                  		= "No hi ha carpeta superior";
$pgv_lang["Folder_Description:"]        		= "Descripció de la carpeta:";
$pgv_lang["Folder_names_must_be_unique"]		= "Els noms de les carpetes han d'ésser únics.";
$pgv_lang["folder_submitted"]          			= "S'ha enviat la vostra carpeta";
$pgv_lang["folder_problem"]             		= "Ha sorgit un problema tot afegint la vostra carpetat, intenteu-ho de nou si us plau.";

// -- Missing Information Help
$pgv_lang["ra_missing_info_help"] = "Aquesta àrea mostra la informació que manca al registre. Seleccioneu una casella i una carpeta i polseu a <b>Afegir Tasca</b> par crear una tasca per a la dada que manca. Las tasques existents mostraran  <b>Veure</b> per comptes d'una casella.<br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]						= "Crear nova tasca.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "No hi ha cap carpeta encara. Creeu-ne abans una.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]				= "~Vista de carpeta~<ul><li><b>Nom de la carpeta:</b> Aquesta columna conté els noms de les carpetes que heu creat.</li><li><b>Descripció:</b> Aquesta columna conté la descripció de les carpetes.</li></ul>";
$pgv_lang["ra_add_task_help"]				= "~Afegir nova Tasca~<ul><li><b>Título:</b> Aixó hauria de contenir el títol de la tasca que esteu afegint.</li><li><b>Carpeta:</b> En aquest camp caldria que assignessiu a quina carpeta voleu que vagi la vostra nova tasca.</li><li><b>Descripció:</b> Introduiu una descripció de la tasca que desitgeu afegir.</li><li><b>Fonts:</b> Assineu les fonts que tingui la tasca.</li><li><b>Persones:</b> Assigneu les persones associades per a la nova tasca.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "~Modificar carpeta~<ul><li><b>Nom de la carpeta:</b> Aquí és on caldria afegir el títol de la carpeta que esteu modificant.</b></li><li><b>Carpeta superior:</b> Aquí podeu assignar la carpeta que conté a aquesta carpeta, si és una subcarpeta el que esteu modificant.</b></li><li><b>Descripció de la carpeta:</b> Aquesta és la descripció de la carpeta que esteu modificant.</b></li></ul>";
$pgv_lang["ra_add_folder_help"]				= "~Afegir Carpeta~<ul><li><b>Nom de la carpeta:</b> Aquí es on caldria afegir el títol de la carpeta que esteu afegint.</b></li><li><b>Carpeta superior:</b> Aquí podeu assignar la carpeta que conté a aquesta carpeta, si és una subcarpeta la que esteu afegint.</b></li><li><b>Descripció de la carpeta:</b> Aquesta és la descripció de la carpeta que esteu afegint.</b></li></ul>";
$pgv_lang["ra_view_task_help"]				= "~Vista de tasques~<ul><li><b>Nom de la tasca:</b> Aquesta columna conté el nom de cada tasca.</b></li><li><b>Data Fecha d'inici:</b> Aquest camp contindrà les dades de començament per a totes les tasques.</li><li><b>Completat:</b> Això mostrarà si s'ha acabat o no una tasca.</li><li><b>Modificar:</b> Això us menarà a modificar la tasca</li><li><b>Esborrar:</b> Això esborrarà la tasca.</li><li><b>Completar:</b> Això us menerà a escollir el formulari i modificar la tasca</li></ul>";
$pgv_lang["ra_task_view_help"]				= "~Veure Tasca~<ul><li><b>Títol:</b> Això hauria de contenir el títolde la tasca que esteu afegint.</li><li><b>Persones:</b> Assigneu les persones associades per a la nova tasca.</li><li><b>Descripció:</b> Introduiu una descripció de la tasca que voleu afagir.</li><li><b>Fonts:</b> Assigneu les fonts que tingueu per a la tasca.</li><li>Polseu a <b>Modificar Tasca</b> per modificar els detalls de la tasca.</li></ul>";
$pgv_lang["ra_comments_help"]				= "~Comentaris~<ul><li>Això contindrà qualsevol comentari relacionat amb la tasca. Polseu a <b>Afegir nou Comentari</b> per afergir-ne un.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "~Generar Tasques~<p>Aquest formulari genera tasques a partir de les etiquetes _TODO de l'arxiu GEDCOM.</p><ul><li><b>Generar:</b> marqueu cada tasca tasca a generar quan polseu a <b>Generar</b>.</li><li><b>Nom de la tasca:</b> És el nom que es donarà a la tasca. Per defecte és el text a l'etiqueta  _TODO real, excluyent les etiquetes CONT, si é que n'hi ha</li><li><b>Descripció de la tasca:</b> La descripció que es donarà a la tasca. Això es genera del text de l'etiqueta _TODO més totes les etiquetes CONT associades.  </li><li><b>Modificar:</b> polseu el vincle per modificar aquesta tasca.</li><li><b>Seleccionar Carpeta:</b> seleccionar la carpeta en la que posar les tasques generades.</li><li><b>Generar:</b> genera las tasques que hagueu marcat.</li><li><b>Fet:</b> us redirigeix a la pàgina de Veure Carpeta.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]		= "~Modificar la Tasca Generada~<p>Aquest formulari us permet modificar les tasques generades a partir de les etiquetes _TODO de l'arxiu GEDCOM.</p><ul><li><b>Nom de la tasca:</b> És el nom que es donarà a la tasca.  </li><li><b>Descripció de la tasca:</b> La descripció que es donarà a la tasca. </li><li><b>Persones:</b> polseu el vincle per seleccionar la persona amb la que associar la tasca.</li><li><b>Font:</b> polseu el vincle per seleccionar la font amb la que associar la tasca.</li><li><b>Salvar:</b> salva tots els canvis i us redirigeix a la pàgina de Generar tasques.</li><li><b>Cancelar:</b> descarta tots els canvis i us redirigeix a la pàgina de Generar tasques.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]		= "~Configurar privacitat~<ul><li><b>#pgv_lang[PRIV_PUBLIC]#:</b> La tasca especificada és disponible per a tot-hom.</li><li><b>#pgv_lang[PRIV_USER]#:</b> La tasca especificada està disponible solament per a usuaris connectats.</li><li><b>#pgv_lang[PRIV_NONE]#</b> La tasca especificada està disponible solament a usuaris amb drets d'administració.</li><li><b>#pgv_lang[PRIV_HIDE]#:</b> La tasca especificada no esrà disponible per a ningú.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "~Editar Tasca~<ul><li><b>Título:</b> Això hauria de contenir el títol de la tasca que esteu editant.</li><li><b>Carpeta:</b> En este camp podeu assignar en quina carpeta voleu colocar la vostra tasca.</li><li><b>Descripció:</b> Introduiu la descripció de la tasca que voleu editar.</li><li><b>Fonts:</b> Assigneu o editeu les fonts que tingueu per a aquesta tasca.</li><li><b>Persones:</b> Asigneu o modifiqueu les persones associades per a aquesta tasca.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]						= "Veure tasca";
$pgv_lang["add_new_comment"]				= "Afegir nou comentari";
$pgv_lang["no_indi_tasks"]					= "No hi ha tasques associades amb aquesta persona.";
$pgv_lang["no_sour_tasks"]					= "No hi ha tasques associades amb aquesta font.";
$pgv_lang["edit_comment"]					= "Modificar Comentari";
$pgv_lang["comment_success"]				= "S'ha afegit correctament el vostre comentari.";
$pgv_lang["comment_body"]					= 'Comentari';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "Esteu segur que voleu esborrar aquest comentari?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]				= "Agregar Nova Tasca";
$pgv_lang["submit"]						= "Enviar";
$pgv_lang["save_and_complete"]          = "Salvar i Completar";
$pgv_lang["assign_task"]				= "Assignar tasca";
$pgv_lang["AddTask"]					= "Afegir tasca";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]		    = "Configurar privacitat";
$pgv_lang["show_my_tasks"]              = "Mostrar les meves tasques";
$pgv_lang["show_add_task"]		        = "Mostrar Afegir Tasca";
$pgv_lang["show_auto_gen_task"]         = "Mostrar Generació Automàtica de Tasca";
$pgv_lang["show_view_folders"]		    = "Mostrar Veure Carpetes";
$pgv_lang["show_add_folder"]		    = "Mostrar Afegir Carpeta";
$pgv_lang["show_add_unlinked_source"]   = "Mostrar Agregar Fonts sense Vincular";
$pgv_lang["show_view_probabilities"]	= "Mostrar Veure Probabilitats";

//-- Census Forms
$pgv_lang["rows"]                       = "Nombre de files";
$pgv_lang["state"]                      = "Estat/Provincia";
$pgv_lang["call/url"]                   = "Referència/URL";
$pgv_lang["enumDate"]                   = "Data de la enumeració";
$pgv_lang["county"]                     = "Comtat";
$pgv_lang["city"]                       = "Població";
$pgv_lang["complete_title"]				= "Completar una tasca";
$pgv_lang["select_form"]				= "Seleccionar formulari";
$pgv_lang["choose_form_label"]			= "Escolliu un formulario d'investigació comú:";
$pgv_lang["book"]                 		= "Llibre";
$pgv_lang["folio"]                   	= "Fol";
$pgv_lang["uk_county"]					= "Comtat";
$pgv_lang["uk_boro"]						= "Població o Districte";
$pgv_lang["uk_place"]					= "Lloc";

$pgv_lang["AssIndiFacts"]				= "Associar Esdeveniments Personals";
$pgv_lang["AssFamFacts"]				= "Associar Esdeveniments Familiars";
$pgv_lang["ra_facts"]					= "Esdeveniments";
$pgv_lang["ra_fact"]					= "Fet";
$pgv_lang["ra_remove"]					= "eliminar";
$pgv_lang["ra_inferred_facts"]			= "Esdeveniments deduits";
$pgv_lang["ra_person"]					= "Persona";
$pgv_lang["ra_reason"]					= "Raó";
$pgv_lang["success"]					= "Èxit!";

$pgv_lang["registration_no"]			= "Número de Registre:";
$pgv_lang["serial_no"]					= "Número de sèrie:";
$pgv_lang["ra_no"]						= "Número:";
$pgv_lang["order_no"]					= "Número d'ordre:";

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]		= "El bloc #pgv_lang[my_tasks]# mostra les tasques per a l'usuari actual. Pot configurar-se per mostrar tasques completes o per mostrar tasques que son encara sense assignar.";
$pgv_lang["mytasks_block"] 				= "Ajudant d'investigació";
$pgv_lang["mytasks_edit"]               = "Modificar";
$pgv_lang["mytasks_unassigned"]			= "Sense assignar";
$pgv_lang["mytasks_takeOn"]				= "Pendre";
$pgv_lang["mytasks_help"]				= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]   		= "Mostrar tasques sense assignar?";
$pgv_lang["mytask_show_completed"]		= "Mostrar tasques completades?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]		    = "Incloure el cognom:";
$pgv_lang["autosearch_givenname"]	    = "Incloure noms de pila:";
$pgv_lang["autosearch_byear"]		    = "Incloure l'any de naixement:";
$pgv_lang["autosearch_bloc"]		    = "Incloure el lloc de naixement";
$pgv_lang["autosearch_dyear"]		    = "Incloure l'any de defunció:";
$pgv_lang["autosearch_dloc"]		    = "Incloure el lloc de defunció:";
$pgv_lang["autosearch_gender"]          = "Incloure el sexe:";
// $pgv_lang["autosearch_plugin_name"]     = "";
$pgv_lang["autosearch_fsurname"]		= "Incloure el cognom del pare:";
$pgv_lang["autosearch_fgivennames"]		= "Inclure els noms de pila del pare:";
$pgv_lang["autosearch_msurname"]		= "Incloure el cognom de la mare:";
$pgv_lang["autosearch_mgivennames"]	    = "Inclure els noms de pila de la mare:";
$pgv_lang["autosearch_country"]  	    = "Incluore el país:";
$pgv_lang["autosearch_plugin_name_ancestry"] = "Mòdulo per Ancestry.com";
$pgv_lang["autosearch_plugin_name_ancestrycouk"] = "Mòdul per Ancestry.co.uk";
$pgv_lang["autosearch_plugin_name_ellisIsland"] = "Mòdul per EllisIslandRecords.org";
$pgv_lang["autosearch_plugin_name_genNet"] = "Mòdul per GeneaNet.com";
$pgv_lang["autosearch_plugin_name_gen"]  = "Mòdul per Genealogy.com";
$pgv_lang["autosearch_plugin_name_fs"]   = "Mòdul per FamilySearch.org";
$pgv_lang["autosearch_plugin_name_werelate"]   = "Mòdul per Werelate.org";
$pgv_lang["autosearch_search"]           = "Buscar";
$pgv_lang["autosearch_keywords"] = "Paraules clau:";

//Folder deletion error messages
$pgv_lang["has_tasks"]                 ="La carpeta actualment conté tasques i no pot esborrar-se";
$pgv_lang["has_folders"]               ="La carpeta actualment conté altres carpetes i no pot esborrar-se";
?>
