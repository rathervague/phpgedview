<?php
/**
 * Spanish language file for PhpGedView
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
 * @author PGV Developers
 * @translator: Julio Sánchez Fernández
 * @package PhpGedView
 * @subpackage Research Assistant
 * @version $Id: lang.es.php 6969 2010-07-01 14:25:47Z jsanchez $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["autosearch_ssurname"] = "Incluir apellido del cónyuge:";
$pgv_lang["autosearch_sgivennames"] = "Incluir los nombres de pila del cónyuge:";
$pgv_lang["autosearch_sfullname"] = "Incluir el nombre del cónyuge:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Módulo para Genealogy-Search-Help.com";

$pgv_lang["add_task_inst"]		= "Si no se ha creado una tarea aún para sus resultados de investigación, debería crearla antes y después elegir la opción de Guardar y completar la tarea.";
$pgv_lang["complete_task_inst"]	= "Escoja una tarea de la lista de tareas que se muestra para completarla e introduzca los resultados de la tarea:";
$pgv_lang["enter_results"]		= "Introducir resultados";
$pgv_lang["auto_gen_inst"]		= "Algunos programas le permiten introducir las tareas de investigación como elementos TODO en su archivo GEDCOM.  Esta opción buscará en su archivo GEDCOM y convertirá automáticamente cualquier elemento TODO en una tarea de investigación.";
$pgv_lang["choose_search_site"]	= "Escoja un sitio de búsqueda";
$pgv_lang["pid_search_for"]		= "¿Qué persona quiere buscar?";
$pgv_lang["manage_research_inst"]	= "Estos elementos le ayudarán a gestionar sus tareas de investigación.  Las tareas de investigación le permiten hacer el seguimiento de de su investigación y colaborar con otros investigadores.";
$pgv_lang["manage_research"]	= "Gestionar investigación";
$pgv_lang["manage_sources"]		= "Gestionar fuentes";
$pgv_lang["part_of"]			= "Parte de (opcional)";
$pgv_lang["search_fhl"]			= "Buscar en el Catálogo de la Biblioteca de Historia Familiar";
$pgv_lang["determine_sources"]	= "Determinar posibles fuentes";
$pgv_lang["analyze_database"]	= "Analizar la base de datos";
$pgv_lang["pid_know_more"]		= "¿De quién desea saber más?";
$pgv_lang["analyze_people"]		= "Analizar personas";
$pgv_lang["analyze_data"]		= "Analizar mis datos";
$pgv_lang["missing_info"] 		= "Información que falta";
$pgv_lang["auto_search"]		= "Esta característica busca automáticamente en Ancestry y en FamilySearch. Puede escoger buscar por nombre y fecha de nacimiento/defunción.<br />";
$pgv_lang["auto_search_text"]	= "Búsqueda automática";
$pgv_lang["task_list"]			= "Tareas";
$pgv_lang["task_list_text"]		= "En esta área se muestran las tareas que ha creado. Haga clic en <b>Ver</b> para ver las tareas.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]							= "Mis tareas";
$pgv_lang["add_task"]							= "Agregar tarea";
$pgv_lang["view_folders"]						= "Ver carpetas";
$pgv_lang["view_probabilities"]					= "Ver probabilidades";
$pgv_lang["up_folder"]							= "Subir a la carpeta superior";
$pgv_lang["edit_folder"]						= "Agregar/modificar carpeta";
$pgv_lang["gen_tasks"]							= "Auto-generar tareas";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]							= "Modificar tarea";
$pgv_lang["completed"]							= "Completada";
$pgv_lang["complete"]							= "Completada";
$pgv_lang["incomplete"]							= "Incompleta";
$pgv_lang["created"]							= "Creada";
$pgv_lang["details"]							= "Detalles";
$pgv_lang["result"]                     		= "Resultado";
$pgv_lang["okay"]                               = "Aceptar";
$pgv_lang["editform"]							= "Modificar datos del formulario";
$pgv_lang["FilterBy"]							= "Filtrar por";
$pgv_lang["Recalculate"]						= "Recalcular";
$pgv_lang["LocalData"]							= "Datos locales";
$pgv_lang["RelatedRecord"]						= "Registro relacionado";
$pgv_lang["RelatedData"]						= "Datos relacionados";
$pgv_lang["Percent"]							= "Porcentaje";
$pgv_lang["Fields"]								= "Número de campos";
$pgv_lang["FieldName"]							= "Nombre del campo";
$pgv_lang["InputType"]							= "Tipo de entrada";
$pgv_lang["Values"]								= "Valores";
$pgv_lang["FormBuilder"]						= "Constructor de formularios";
$pgv_lang["FormName"]							= "Introduzca el nombre del formulario";
$pgv_lang["MultiplePeople"]						= "¿Se aplica este formulario a múltiples personas?";
$pgv_lang["EnterGEDCOMExtension"]				= "Introduzca por favor la extensión GEDCOM para el tipo del hecho del formulario";
$pgv_lang["FormDesciption"]						= "Introduzca por favor una descripción para el formulario";
$pgv_lang["FormGeneration"]						= "Completada la generación del formulario";
$pgv_lang["CustomField"]						= "Nombre del campo personalizado";
$pgv_lang["txt"]								= "Texto";
$pgv_lang["checkbox"]							= "Casilla de selección";
$pgv_lang["radiobutton"]						= "Botón de radio";
$pgv_lang["EnterResults"]						= "Introducir resultados";
$pgv_lang["ra_submit"]							= "Enviar";
$pgv_lang["ra_generate_tasks"]					= "Generar tareas a partir de TODO (pendientes)";
$pgv_lang["TaskDescription"]					= "Descripción de la tarea";
$pgv_lang["SelectFolder"]                       = "Seleccionar carpeta:";
$pgv_lang["ra_done"]							= "Hecho";
$pgv_lang["ra_generate"]						= "Generar";
$pgv_lang["LocalPercent"]						= "Porcentaje local";
$pgv_lang["GlobalPercent"]						= "Porcentaje global";
$pgv_lang["Average"]							= "Promedio";
$pgv_lang["NoData"]								= "No hay datos";
$pgv_lang["NotEnoughData"]						= "¡No hay suficientes datos!";
$pgv_lang["InferIndvBirthPlac"]					= "Existe una probabilidad del %PERCENT% de que el lugar de nacimiento sea:";
$pgv_lang["InferIndvDeathPlac"]					= "Existe una probabilidad del %PERCENT% de que el lugar de defunción sea:";
$pgv_lang["InferIndvSurn"]						= "Existe una probabilidad del %PERCENT% de que el apellido sea:";
$pgv_lang["InferIndvMarriagePlace"]				= "Existe una probabilidad del %PERCENT% de que el lugar de matrimonio sea:";
$pgv_lang["InferIndvGivn"]						= "Existe una probabilidad del %PERCENT% de que el nombre de pila sea:";
$pgv_lang["All"]								= "TODOS";
$pgv_lang["More"]								= "Más";
$pgv_lang["ThereIsChance"]						= "Entre las fuentes posibles se incluyen:";
$pgv_lang["TheMostLikely"]						= "El lugar más probable para esta fuente es:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]					= "Correlaciones de datos";
$pgv_lang["ViewProbExplanation"]				= "Esta página analiza los datos del GEDCOM activo y muestra las correlaciones entre los distintos elementos. Por ejemplo, podría haber una correlación del 95% entre el apellido en un registro y el apellido en el registro del padre.  Esto significaría que el 95% de las personas de este GEDCOM comparten el apellido con su padre. En esta versión del Ayudante de Investigación, estos cálculos no se usan en otras áreas del programa y se proporcionan únicamente para ayudarle en su investigación.  En el futuro planeamos usar estos datos para ayudar a proporcionarle sugerencias más significativas de hacia dónde debería encaminar parte de su futura investigación. ";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                             = "Carpeta en el servidor";
$pgv_lang["Edit_Gen_Task"]                 		= "Modificar la tarea generada";
$pgv_lang["Start_Date"]                 		= "Fecha de comienzo";
$pgv_lang["Task_Name"]                			= "Nombre de la tarea";
$pgv_lang["Folder_Name"]                		= "Nombre de la carpeta";
$pgv_lang["Folder_View"]                		= "Vista de carpetas";
$pgv_lang["Task_View"]                  		= "Vista de tareas";
$pgv_lang["page_header"]						= "Carpetas del ayudante de investigación";
$pgv_lang["no_folder_name"]             		= "Debe rellenarse el campo del nombre de carpeta.";
$pgv_lang["add_folder"]                 		= "Agregar carpeta";
$pgv_lang["folder_name"]                		= "Nombre de carpeta";
$pgv_lang["Parent_Folder:"]             		= "Carpeta superior:";
$pgv_lang["No_Parent"]                  		= "No hay carpeta superior";
$pgv_lang["Folder_Description:"]        		= "Descripción de la carpeta:";
$pgv_lang["Folder_names_must_be_unique"]		= "Los nombres de la carpetas deben ser únicos.";
$pgv_lang["folder_submitted"]          			= "Su carpeta se ha enviado";
$pgv_lang["folder_problem"]             		= "Ha habido problemas agregando su carpeta, inténtelo otra vez, por favor";

// -- Missing Information Help
$pgv_lang["ra_missing_info_help"] = "Esta área muestra la información que falta acerca del registro. Seleccione una casilla y una carpeta y haga clic en <b>Agregar Tarea</b> para crear una tarea para el dato que falta. Las tareas existentes mostrarán <b>Ver</b> en vez de una casilla.<br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]						= "Crear nueva tarea.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "No existe ninguna carpeta aún. Cree por favor una nueva carpeta antes.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]				= "~Vista de carpeta~<ul><li><b>Nombre de la carpeta:</b> Esta columna contiene los nombres de las carpetas que ha creado.</li><li><b>Descripción:</b> Esta columna contiene la descripción de las carpetas.</li></ul>";
$pgv_lang["ra_add_task_help"]				= "~Agregar nueva tarea~<ul><li><b>Título:</b> Esto debería contener el título de la tarea que está agregando.</li><li><b>Carpeta:</b> En este campo debería asignar a qué carpeta quiere que vaya su nueva tarea.</li><li><b>Descripción:</b> Introduzca una descripción de la tarea que desea agregar.</li><li><b>Fuentes:</b> Asignar las fuentes que tenga para la tarea.</li><li><b>Personas:</b> Asignar las personas asociadas para la nueva tarea.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "~Modificar carpeta~<ul><li><b>Nombre de la carpeta:</b> Aquí es donde debería añadir el título de la carpeta que está modificando.</b></li><li><b>Carpeta superior:</b> Aquí puede asignar la carpeta que contiene a ésta carpeta, si es una subcarpeta lo que está modificando.</b></li><li><b>Descripción de la carpeta:</b> Ésta es la descripción de la carpeta que está modificando.</b></li></ul>";
$pgv_lang["ra_add_folder_help"]				= "~Agregar carpeta~<ul><li><b>Nombre de la carpeta:</b> Aquí es donde debería añadir el título de la carpeta que está agregando.</b></li><li><b>Carpeta superior:</b> Aquí puede asignar la carpeta que contiene a esta carpeta, si es una subcarpeta la que está agregando.</b></li><li><b>Descripción de la carpeta:</b> Ésta es la descripción de la carpeta que está agregando.</b></li></ul>";
$pgv_lang["ra_view_task_help"]				= "~Vista de tareas~<ul><li><b>Nombre de la tarea:</b> Esta columna contiene el nombre de cada tarea.</b></li><li><b>Fecha de comienzo:</b> Este campo contendrá las fechas de comienzo para todas las tareas.</li><li><b>Completado:</b> Esto mostrará si está terminada o no una tarea.</li><li><b>Modificar:</b> Esto le llevará a modificar la tarea</li><li><b>Borrar:</b> Esto borrará la tarea.</li><li><b>Completar:</b> Esto le llevará a escoger el formulario y modificar la tarea</li></ul>";
$pgv_lang["ra_task_view_help"]				= "~Ver Tarea~<ul><li><b>Título:</b> Esto debería contener el título de la tarea que está agregando.</li><li><b>Personas:</b> Asigne las personas asociadas para la nueva tarea.</li><li><b>Descripción:</b> Introduzca una descripción de la tarea que desea agregar.</li><li><b>Fuentes:</b> Asigne las fuentes que tenga para la tarea.</li><li>Haga clic en <b>Modificar Tarea</b> para modificar los detalles de la tarea.</li></ul>";
$pgv_lang["ra_comments_help"]				= "~Comentarios~<ul><li>Esto contendrá cualquier comentario relacionado con la tarea. Haga clic en <b>Agregar nuevo comentario</b> para agregar cualquier comentario.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "~Generar Tareas~<p>Este formulario genera tareas a partir de las etiquetas _TODO del archivo GEDCOM.</p><ul><li><b>Generar:</b> marque cada tarea a generar cuando haga clic en <b>Generar</b>.</li><li><b>Nombre de la tarea:</b> Es el nombre que se dará a la tarea.  Por omisión es el texto en la etiqueta _TODO real, excluyendo las etiquetas CONT, si es que existen</li><li><b>Descripción de la tarea:</b> La descripción que se dará a la tarea.  Esto se genera del texto en la etiqueta _TODO más todas las etiquetas CONT asociadas.  </li><li><b>Modificar:</b> haga clic en el vínculo para modificar esa tarea.</li><li><b>Seleccionar Carpeta:</b> seleccionar la carpeta en la que poner las tareas generadas.</li><li><b>Generar:</b> genera las tareas que se han marcado.</li><li><b>Hecho:</b> le redirige a la página de Ver Carpeta.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]		= "~Modificar la Tarea Generada~<p>Este formulario le permite modificar las tareas generadas a partir de las etiquetas _TODO del archivo GEDCOM.</p><ul><li><b>Nombre de la tarea:</b> Es el nombre que se dará a la tarea.  </li><li><b>Descripción de la tarea:</b> La descripción que se dará a la tarea. </li><li><b>Personas:</b> haga clic en el vínculo para seleccionar la persona con la que asociar la tarea.</li><li><b>Fuente:</b> hacer clic en el vínculo para seleccionar la fuente con la que asociar la tarea.</li><li><b>Guardar:</b> guarda todos los cambios y le redirige a la página de Generar tareas.</li><li><b>Cancelar:</b> descarta todos los cambios y le redirige a la página de Generar tareas.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]		= "~Configurar privacidad~<ul><li><b>#pgv_lang[PRIV_PUBLIC]#:</b> La tarea especificada está disponible para todos.</li><li><b>#pgv_lang[PRIV_USER]#:</b> La tarea especificada está disponible solamente para usuarios autenticados.</li><li><b>#pgv_lang[PRIV_NONE]#</b> La tarea especificada está disponible solamente a usuarios con derechos de administración.</li><li><b>#pgv_lang[PRIV_HIDE]#:</b> La tarea especificada no está disponible para nadie.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "~Editar Tarea~<ul><li><b>Título:</b> Esto debería contener el título de la tarea que está editando.</li><li><b>Carpeta:</b> En este campo puede asignar en qué carpeta quiere que se coloque su tarea.</li><li><b>Descripción:</b> Introduzca la descripción de la tarea que quiere editar.</li><li><b>Fuentes:</b> Asigne o edite las fuentes que tenga para la tarea.</li><li><b>Personas:</b> Asigne o modifique las personas asociadas para esta tarea.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]						= "Ver tarea";
$pgv_lang["add_new_comment"]				= "Agregar nuevo comentario";
$pgv_lang["no_indi_tasks"]					= "No hay tareas asociadas con esta persona.";
$pgv_lang["no_sour_tasks"]					= "No hay tareas asociadas con esta fuente.";
$pgv_lang["edit_comment"]					= "Modificar comentario";
$pgv_lang["comment_success"]				= "Su comentario se agregó con éxito.";
$pgv_lang["comment_body"]					= 'Comentario';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "¿Está seguro de que quiere borrar este comentario?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]				= "Agregar nueva tarea";
$pgv_lang["submit"]						= "Enviar";
$pgv_lang["save_and_complete"]          = "Guardar y completar";
$pgv_lang["assign_task"]				= "Asignar tarea";
$pgv_lang["AddTask"]					= "Agregar tarea";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]		    = "Configurar privacidad";
$pgv_lang["show_my_tasks"]              = "Mostrar Mis Tareas";
$pgv_lang["show_add_task"]		        = "Mostrar Agregar Tarea";
$pgv_lang["show_auto_gen_task"]         = "Mostrar Generación Automática de Tarea";
$pgv_lang["show_view_folders"]		    = "Mostrar Ver Carpetas";
$pgv_lang["show_add_folder"]		    = "Mostrar Agregar Carpeta";
$pgv_lang["show_add_unlinked_source"]   = "Mostrar Agregar Fuente sin Vincular";
$pgv_lang["show_view_probabilities"]	= "Mostrar Ver Probabilidades";

//-- Census Forms
$pgv_lang["rows"]                       = "Número de filas";
$pgv_lang["state"]                      = "Estado/Provincia";
$pgv_lang["call/url"]                   = "Referencia/URL";
$pgv_lang["enumDate"]                   = "Fecha de la enumeración";
$pgv_lang["county"]                     = "Condado";
$pgv_lang["city"]                       = "Población";
$pgv_lang["complete_title"]				= "Completar una tarea";
$pgv_lang["select_form"]				= "Seleccionar formulario";
$pgv_lang["choose_form_label"]			= "Escoja un formulario de investigación común:";
$pgv_lang["book"]                 		= "Libro";
$pgv_lang["folio"]                   	= "Folio";
$pgv_lang["uk_county"]					= "Condado";
$pgv_lang["uk_boro"]						= "Población o distrito";
$pgv_lang["uk_place"]					= "Lugar";

$pgv_lang["AssIndiFacts"]				= "Asociar hechos personales";
$pgv_lang["AssFamFacts"]				= "Asociar hechos familiares";
$pgv_lang["ra_facts"]					= "Hechos";
$pgv_lang["ra_fact"]					= "Hecho";
$pgv_lang["ra_remove"]					= "eliminar";
$pgv_lang["ra_inferred_facts"]			= "Hechos deducidos";
$pgv_lang["ra_person"]					= "Persona";
$pgv_lang["ra_reason"]					= "Razón";
$pgv_lang["success"]					= "¡Éxito!";

$pgv_lang["registration_no"]			= "Número de registro:";
$pgv_lang["serial_no"]					= "Número de serie:";
$pgv_lang["ra_no"]						= "Número:";
$pgv_lang["order_no"]					= "Número de orden:";

//-- MY TASK BLOCK
$pgv_lang["mytasks_block_descr"]		= "El bloque #pgv_lang[my_tasks]# muestra las tareas para el usuario actual. Puede configurarse para mostrar taras completadas o para mostrar tareas que están sin asignar.";
$pgv_lang["mytasks_block"] 				= "Ayudante de investigación";
$pgv_lang["mytasks_edit"]               = "Modificar";
$pgv_lang["mytasks_unassigned"]			= "Sin asignar";
$pgv_lang["mytasks_takeOn"]				= "Tomar";
$pgv_lang["mytasks_help"]				= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]   		= "¿Mostrar tareas sin asignar?";
$pgv_lang["mytask_show_completed"]		= "¿Mostrar tareas completadas?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]		    = "Incluir apellido:";
$pgv_lang["autosearch_givenname"]	    = "Incluir nombres de pila:";
$pgv_lang["autosearch_byear"]		    = "Incluir año de nacimiento:";
$pgv_lang["autosearch_bloc"]		    = "Incluir el lugar de nacimiento:";
$pgv_lang["autosearch_myear"]		    = "Incluir año de matrimonio:";
$pgv_lang["autosearch_mloc"]		    = "Incluir el lugar de matrimonio:";
$pgv_lang["autosearch_dyear"]		    = "Incluir año de defunción:";
$pgv_lang["autosearch_dloc"]		    = "Incluir el lugar de defunción:";
$pgv_lang["autosearch_gender"]          = "Incluir sexo:";
// $pgv_lang["autosearch_plugin_name"]     = "";
$pgv_lang["autosearch_fsurname"]		= "Incluir el apellido del padre:";
$pgv_lang["autosearch_fgivennames"]		= "Incluir los nombres de pila del padre:";
$pgv_lang["autosearch_ffullname"]		= "Incluir el nombre del padre:";
$pgv_lang["autosearch_msurname"]		= "Incluir el apellido de la madre:";
$pgv_lang["autosearch_mgivennames"]	    = "Incluir los nombres de pila de la madre:";
$pgv_lang["autosearch_mfullname"]		= "Incluir el nombre de la madre:";
$pgv_lang["autosearch_country"]  	    = "Incluir país:";
$pgv_lang["autosearch_plugin_name_ancestry"] = "Módulo para Ancestry.com";
$pgv_lang["autosearch_plugin_name_ancestrycouk"] = "Módulo para Ancestry.co.uk";
$pgv_lang["autosearch_plugin_name_ellisisland"] = "Módulo para EllisIslandRecords.org";
$pgv_lang["autosearch_plugin_name_geneanet"] = "Módulo para GeneaNet.com";
$pgv_lang["autosearch_plugin_name_genealogy"]  = "Módulo para Genealogy.com";
$pgv_lang["autosearch_plugin_name_familysearch"]   = "Módulo para FamilySearch.org";
$pgv_lang["autosearch_plugin_name_werelate"]   = "Módulo para Werelate.org";
$pgv_lang["autosearch_search"]           = "Buscar";
$pgv_lang["autosearch_keywords"] = "Palabras clave:";

//Folder deletion error messages
$pgv_lang["has_tasks"]                 ="La carpeta contiene actualmente tareas y no puede borrarse";
$pgv_lang["has_folders"]               ="La carpeta contiene actualmente otras carpetas y no puede borrarse";
?>
