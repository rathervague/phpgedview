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
 * @subpackage Languages
 * @version $Id: admin.es.php 6985 2010-09-27 21:30:41Z jsanchez $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["module_admin"]			= "Administración de módulos";
$pgv_lang["mod_admin_installed"]	= "Módulos instalados";
$pgv_lang["mod_admin_tabs"]			= "Gestionar pestañas";
$pgv_lang["mod_admin_menus"]		= "Gestionar menús";
$pgv_lang["mod_admin_intro"]		= "A continuación se muestra la lista de todos los módulos instalados en esta instalación de PhpGedView.  Los módulos se instalan colocándolos en el directorio <i>modules</i>.  Aquí puede fijar el nivel de acceso en cada GEDCOM para cada módulo.  Si un módulo incluye pestañas para la página de persona o menús para la barra de menús, también puede fijar el nivel de acceso y el orden de cada uno de ellos.";
$pgv_lang["mod_admin_active"]		= "Activo";
$pgv_lang["mod_admin_name"]			= "Nombre del módulo";
$pgv_lang["mod_admin_description"]	= "Descripción";
$pgv_lang["mod_admin_version"]		= "Versión / PGV";
$pgv_lang["mod_admin_hastab"]		= "¿Pestaña?";
$pgv_lang["mod_admin_hasmenu"]		= "¿Menú?";
$pgv_lang["mod_admin_access_level"]	= "Nivel de acceso";
$pgv_lang["mod_admin_order"]		= "Orden";
$pgv_lang["mod_admin_config"]		= "Ajustes de módulos";
$pgv_lang["mod_admin_settings"]		= "Ajustes de configuración de módulos";
$pgv_lang["ret_module_admin"]		= "Volver a la página de Administración de Módulos";
$pgv_lang["ret_admin"]				= "Volver a la página de Administración";

$pgv_lang["enter_comment"]	= "Aquí puede introducir un comentario.";
$pgv_lang["upload_a_gedcom"] 		= "Subir un archivo GEDCOM";
$pgv_lang["start_entering"] 		= "Comenzar la introducción de datos";
$pgv_lang["add_gedcom_from_path"] 	= "Añadir un GEDCOM a partir de un archivo ya subido";
$pgv_lang["get_started_instructions"]	= "Elija una de las opciones siguientes para comenzar a utilizar PhpGedView";

$pgv_lang["admin_users_exists"]		= "Ya existen los siguientes usuarios administradores:";
$pgv_lang["install_step_1"] = "Comprobación del entorno";
$pgv_lang["install_step_2"] = "Conexión con la base de datos";
$pgv_lang["install_step_3"] = "Creación de tablas";
$pgv_lang["install_step_4"] = "Configuración del sitio";
$pgv_lang["install_step_5"] = "Idiomas";
$pgv_lang["install_step_6"] = "Guardar la configuración";
$pgv_lang["install_step_7"] = "Creación del usuario administrador";
$pgv_lang["install_wizard"] = "Ayudante de instalación";
$pgv_lang["basic_site_config"] = "Ajustes básicos";
$pgv_lang["adv_site_config"] = "Ajustes avanzados";
$pgv_lang["config_not_saved"] = "Sus ajustes no se salvarán<br />hasta el paso 6";
$pgv_lang["download_config"] = "Descargar config.php";
$pgv_lang["site_unavailable"] = "El sitio no está disponible en este momento";
$pgv_lang["to_manage_users"] = "Para gestionar los usuarios, utilice la página <a href=\"useradmin.php\">Administración de usuarios</a>.";
$pgv_lang["db_tables_created"] = "Se crearon con éxito las tablas de la base de datos";
$pgv_lang["config_saved"] = "Se salvó con éxito la configuración";
$pgv_lang["checking_errors"]		= "Comprobando si hay errores...";
$pgv_lang["checking_php_version"]		= "Comprobando la versión requerida de PHP:";
$pgv_lang["failed"]		= "Falló";
$pgv_lang["pgv_requires_version"]		= "PhpGedView requiere la versión de PHP #PGV_REQUIRED_PHP_VERSION# o superior.";
$pgv_lang["using_php_version"]		= "Está utilizando la versión #PGV_ACTUAL_PHP_VERSION# de PHP";
$pgv_lang["checking_db_support"]		= "Comprobando las capacidades de base de datos:";
$pgv_lang["no_db_extensions"]		= "Vd. no tiene ninguna de las extensiones de base de datos que puede utilizar este programa.";
$pgv_lang["db_ext_support"]		= "Vd. tiene la extensión #DBEXT#";
$pgv_lang["checking_config.php"]		= "Comprobando config.php:";
$pgv_lang["config.php_missing"]		= "No se encontró el archivo config.php.";
$pgv_lang["config.php_missing_instr"]		= "Este ayudante de instalación no podrá guardar sus ajustes en el archivo config.php.  Puede hacer una copia del archivo config.dist y cambiarle el nombre a config.php.  O bien, tras completar este ayudante, tendrá oportunidad de descargar sus ajustes y subir el archivo config.php resultante.";
$pgv_lang["config.php_not_writable"]		= "No se puede escribir en el archivo config.php.";
$pgv_lang["config.php_not_writable_instr"]		= "Este ayudante de instalación no podrá guardar sus ajustes en el archivo config.php.  Puede dar permiso de escritura al archivo o, tras completar este ayudante, tendrá la oportunidad de descargar sus ajustes y subir el archivo config.php resultante.";
$pgv_lang["passed"]		= "Correcto";
$pgv_lang["config.php_writable"]		= "El archivo config.php está presente y se puede escribir en él.";
$pgv_lang["checking_warnings"]		= "Comprobando si hay deficiencias...";
$pgv_lang["checking_timelimit"]		= "Comprobando si se puede cambiar el límite de tiempo:";
$pgv_lang["cannot_change_timelimit"]		= "No se puede cambiar el límite de tiempo.";
$pgv_lang["cannot_change_timelimit_instr"]		= "Quizá no pueda utilizar todas las funciones en grandes GEDCOMs con muchas personas.";
$pgv_lang["current_max_timelimit"]		= "Su límite máximo de tiempo es";
$pgv_lang["check_memlimit"]		= "Comprobando si se puede cambiar el límite de memoria:";
$pgv_lang["cannot_change_memlimit"]		= "No se puede cambiar el límite de memoria.";
$pgv_lang["cannot_change_memlimit_instr"]		= "Quizá no pueda usar todas las funciones en grandes GEDCOMs con muchas personas.";
$pgv_lang["current_max_memlimit"]		= "Su límite de memoria actual es";
$pgv_lang["check_upload"]		= "Comprobando si se pueden subir archivos";
$pgv_lang["current_max_upload"]		= "El tamaño máximo de archivo que se puede subir es:";
$pgv_lang["check_gd"]		= "Comprobando la biblioteca de tratamiento de imágenes GD:";
$pgv_lang["cannot_use_gd"]		= "Vd. no tiene la biblioteca de tratamiento de imágenes GD.  No podrá crear automáticamente miniaturas para las imágenes.";
$pgv_lang["check_sax"]		= "Comprobando la biblioteca XML SAX:";
$pgv_lang["cannot_use_sax"]		= "Vd. no tiene la biblioteca XML SAX.  No podrá generar informes o utilizar algunas funciones auxiliares.";
$pgv_lang["check_dom"]		= "Comprobando la biblioteca XML DOM:";
$pgv_lang["cannot_use_dom"]		= "Vd. no tiene la biblioteca XML DOM.  No podrá exportar en formato XML.";
$pgv_lang["check_calendar"]		= "Comprobando la biblioteca avanzada de calendario:";
$pgv_lang["cannot_use_calendar"]		= "Vd. no tiene la biblioteca avanzada de calendario. No podrá utilizar algunas funciones avanzadas de calendario.";
$pgv_lang["warnings_passed"]		= "Superadas todas las pruebas de deficiencias.";
$pgv_lang["warning_instr"]		= "Si se detectó alguna deficiencia, puede de todos modos utilizar PhpGedView en este servidor, pero algunas funciones pueden estar desactivadas o el rendimiento puede ser deficiente.";

$pgv_lang["associated_files"]		= "Archivos asociados:";
$pgv_lang["remove_all_files"]		= "Borrar todos los archivos no esenciales";
$pgv_lang["warn_file_delete"]		= "Este archivo contiene información importante como ajustes de idioma o datos de los cambios pendientes.  ¿Está seguro de que desea borrar este archivo?";
$pgv_lang["deleted_files"]          = "Archivos borrados:";
$pgv_lang["index_dir_cleanup_inst"]	= "Para borrar un archivo del directorio de índice, arrástrelo a la basura o marque su casilla de selección.  Haga clic en el botón Borrar para eliminar permanentemente los archivos de la basura.<br /><br />Los archivos marcados con <img src=\"./images/RESN_confidential.gif\" /> se requieren para el correcto funcionamiento y no pueden eliminarse.<br />Los archivos marcados con <img src=\"./images/RESN_locked.gif\" /> tienen ajustes importantes o datos de cambios pendientes y sólo debería borrarlos si está seguro de lo que hace.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Limpieza del directorio de índice";
$pgv_lang["clear_cache_succes"]		= "Se han borrado los archivos recordados.";
$pgv_lang["clear_cache"]			= "Limpiar los archivos de recuerdo";
$pgv_lang["sanity_err0"]			= "Errores:";
$pgv_lang["sanity_err1"]			= "Necesita tener PHP versión #PGV_REQUIRED_PHP_VERSION# o superior.";
$pgv_lang["sanity_err2"]			= "El archivo o directorio <i>#GLOBALS[whichFile]#</i> no existe. Verifique por favor que el archivo o directorio existe, su nombre esté escrito correctamente y que los permisos de lectura sean los adecuados.";
$pgv_lang["sanity_err3"]			= "No se pudo subir correctamente el archivo <i>#GLOBALS[whichFile]#</i>. Intente por favor subirlo nuevamente.";
$pgv_lang["sanity_err4"]			= "El archivo <i>config.php</i> está corrupto.";
$pgv_lang["sanity_err5"]			= "No se puede escribir en el archivo <i>config.php</i>.";
$pgv_lang["sanity_err6"]			= "No se puede escribir el directorio <i>#GLOBALS[INDEX_DIRECTORY]#</i>.";
$pgv_lang["sanity_warn0"]			= "Advertencias:";
$pgv_lang["sanity_warn1"]			= "No se puede escribir en el directorio <i>#GLOBALS[MEDIA_DIRECTORY]#</i>.  No podrá subir archivos audiovisuales o generar miniaturas en PhpGedView.";
$pgv_lang["sanity_warn2"]			= "El directorio <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> no se puede escribir.  No podrá subir miniaturas ni generarlas con PhpGedView.";
$pgv_lang["sanity_warn3"]			= "No existe la biblioteca de manejo de imágenes GD. PhpGedView funcionará a pesar de ello, pero algunas funciones, como la generación de miniaturas y el diagrama en círculo, no funcionarán sin la biblioteca GD.  Para más información, por favor consulte <a href='http://www.php.net/manual/en/ref.image.php'>http://www.php.net/manual/en/ref.image.php</a> (en inglés).";
$pgv_lang["sanity_warn4"]			= "No existe la biblioteca XML Parser. PhpGedView funcionará a pesar de ello, pero algunas de las funciones, como la generación de informes y los servicios web, no funcionarán sin la biblioteca XML Parser. Para más información, por favor consulte <a href='http://www.php.net/manual/en/ref.xml.php'>http://www.php.net/manual/en/ref.xml.php</a> (en inglés).";
$pgv_lang["sanity_warn5"]			= "No existe la biblioteca DOM XML. PhpGedView funcionará a pesar de ello, pero algunas funciones, como la exportación en formato Gramps en el carrito genealógico, la descarga y los servicios web no funcionarán. Para más información, por favor consulte <a href='http://www.php.net/manual/en/ref.domxml.php'>http://www.php.net/manual/en/ref.domxml.php</a> (en inglés).";
$pgv_lang["sanity_warn6"]			= "No existe la biblioteca Calendar. PhpGedView funcionará a pesar de ello, pero algunas funciones, como la conversión a otros calendarios como el hebreo o el francés revolucionario, no funcionarán.  No es esencial para utilizar PhpGedView. Para más información, por favor consulte <a href='http://www.php.net/manual/es/ref.calendar.php'>http://www.php.net/manual/es/ref.calendar.php</a>.";
$pgv_lang["ip_address"]				= "Dirección IP";
$pgv_lang["date_time"]				= "Fecha y hora";
$pgv_lang["log_message"]			= "Mensaje en el registro";
$pgv_lang["searchtype"]				= "Tipo de búsqueda";
$pgv_lang["query"]					= "Búsqueda";
$pgv_lang["user"]					= "Usuario autenticado";
$pgv_lang["editors"]				= "Modificadores";
$pgv_lang["gedcom_admins"]			= "Administradores del GEDCOM";
$pgv_lang["site_admins"]			= "Administradores del sitio";
$pgv_lang["nobody"]					= "Nadie";
$pgv_lang["thumbnail_deleted"]		= "Archivo de miniatura borrado con éxito.";
$pgv_lang["thumbnail_not_deleted"]	= "No se pudo borrar el archivo de miniatura.";
$pgv_lang["step2"]					= "Paso 2 de 4:";
$pgv_lang["refresh"]				= "Refrescar";
$pgv_lang["move_file_success"]		= "Archivos principal y miniatura movidos con éxito.";
$pgv_lang["media_folder_corrupt"]	= "La carpeta de archivos audiovisuales está corrupta.";
$pgv_lang["media_file_not_deleted"]	= "No se pudo borrar el archivo audiovisual.";
$pgv_lang["gedcom_deleted"] 		= "GEDCOM [#GED#] eliminado correctamente.";
$pgv_lang["gedadmin"]				= "Administrador del GEDCOM";
$pgv_lang["full_name"]				= "Nombre completo";
$pgv_lang["error_header"]			= "El archivo GEDCOM, <b>#GEDCOM#</b>, no existe en la ubicación especificada.";
$pgv_lang["confirm_delete_file"]	= "¿Está seguro de querer borrar este archivo?";
$pgv_lang["confirm_folder_delete"] = "¿Está seguro de querer borrar esta carpeta?";
$pgv_lang["confirm_remove_links"]	= "¿Está seguro de querer borrar todos los vínculos a este objeto?";
$pgv_lang["PRIV_PUBLIC"]			= "Mostrar a todos";
$pgv_lang["PRIV_USER"]				= "Mostrar sólo a usuarios registrados";
$pgv_lang["PRIV_NONE"]				= "Mostrar sólo a administradores";
$pgv_lang["PRIV_HIDE"]				= "Ocultar incluso a los administradores";
$pgv_lang["manage_gedcoms"] 		= "Administrar GEDCOMs";
$pgv_lang["keep_media"]				= "Conservar los vínculos a objetos audiovisuales";
$pgv_lang["current_links"]			= "Vínculos";
$pgv_lang["add_more_links"]			= "Agregar más vínculos";
$pgv_lang["enter_pid_or_name"]		= "Introduzca el ID o el nombre de una persona";
$pgv_lang["set_links"]				= "Fijar vínculos";
$pgv_lang["add_or_remove_links"]	= "Administrar vínculos";

$pgv_lang["keep"]					= "Mantener";
$pgv_lang["unlink"]					= "Desvincular";
$pgv_lang["nav"]					= "Navegador";
$pgv_lang["fam_nav"]				= "Navegador de familias";
$pgv_lang["remove"]					= "Borrar";
$pgv_lang["keep_link"]				= "Mantener el vínculo en la lista";
$pgv_lang["remove_link"]			= "Borrar el vínculo de la lista";
$pgv_lang["open_nav"]				= "Abrir el navegador de familias";
$pgv_lang["link_exists"]			= "Este vínculo ya existe";
$pgv_lang["id_not_valid"]			= "No es un ID válido de persona, familia o fuente";
$pgv_lang["add_fam_other_links"]	= "Agregar vínculos de agregar familia y de buscar";
$pgv_lang["search_add_links"]		= "Buscar personas a agregar a la lista de Agregar Vínculos.";
$pgv_lang["enter_name"]				= "Introduzca un nombre";
$pgv_lang["add_indi_to_link_list"]	= "Haga clic en el nombre para agregar la persona a la lista de Agregar Vínculos.";
$pgv_lang["click_choose_head"]		= "Haga clic en #GLOBALS[tempStringHead]# para escoger la persona como cabeza de familia.";
$pgv_lang["click_choose_head_text"]	= "Haga clic para escoger la persona como cabeza de familia.";
$pgv_lang["head"]					= "Cabeza";
$pgv_lang["id_empty"]				= "No se puede dejar el campo ID en blanco al agregar un vínculo.";
$pgv_lang["link_deleted"]			= "Vínculo a #GLOBALS[remLinkId]# borrado";
$pgv_lang["link_added"]				= "Vínculo a #GLOBALS[addLinkId]# agregado";
$pgv_lang["no_update_CHANs"]		= "No actualizar los registros CHAN (último cambio)";
$pgv_lang["no_CHANs_update"]		= "No se actualizó ningún registro CHAN (último cambio)";

$pgv_lang["files_in_backup"]		= "Archivos incluidos en esta copia de seguridad";
$pgv_lang["created_remotelinks"]	= "Creada la tabla <i>Vínculos remotos</i> con éxito.";
$pgv_lang["created_remotelinks_fail"] 	= "No se pudo crear la tabla de <i>Vínculos remotos</i>.";
$pgv_lang["created_indis"]			= "Tabla de <i>Personas</i> creada con éxito.";
$pgv_lang["created_indis_fail"] 	= "No se pudo crear la tabla de <i>Personas</i>";
$pgv_lang["created_fams"]			= "Tabla de <i>Familias</i> creada con éxito.";
$pgv_lang["created_fams_fail"]		= "No se pudo crear la tabla de <i>Familias</i>.";
$pgv_lang["created_sources"]		= "Tabla de <i>Fuentes</i> creada con éxito.";
$pgv_lang["created_sources_fail"]	= "No se pudo crear la tabla de <i>Fuentes</i>.";
$pgv_lang["created_other"]			= "Tabla de <i>Otros</i> creada con éxito.";
$pgv_lang["created_other_fail"] 	= "No se pudo crear la tabla de <i>Otros</i>.";
$pgv_lang["created_places"] 		= "Tabla de <i>Lugares</i> creada con éxito.";
$pgv_lang["created_places_fail"]	= "No se pudo crear la tabla de <i>Lugares</i>.";
$pgv_lang["created_placelinks"] 	= "Tabla de <i>Vínculos a lugares</i> creada con éxito.";
$pgv_lang["created_placelinks_fail"]	= "No se pudo crear la tabla de <i>Vínculos a lugares</i>.";
$pgv_lang["created_media_fail"]	= "No se pudo crear la tabla de <i>Objetos</i>.";
$pgv_lang["created_media_mapping_fail"]	= "No se pudo crear la tabla <i>Media mappings</i>.";
$pgv_lang["no_thumb_dir"]			= " directorio para miniaturas no existe y no se pudo crear.";
$pgv_lang["folder_created"]			= "Directorio creado";
$pgv_lang["folder_no_create"]		= "No se pudo crear el directorio";
$pgv_lang["security_no_create"]		= "Advertencia de seguridad: No existe el archivo <b><i>index.php</i></b> en ";
$pgv_lang["security_not_exist"]		= "Advertencia de seguridad: No se pudo crear el archivo <b><i>index.php</i></b> en ";
$pgv_lang["label_delete"]           	= "Borrar";
$pgv_lang["progress_bars_info"]			= "Las barras de estado que aparecen abajo le permiten ver el progreso de la importación.  Si se alcanza el límite de tiempo, se detendrá la importación y se le pedirá que haga clic en el botón <b>Continuar</b>.  Si no ve el botón <b>Continuar</b>, debe reintentar la importación con un límite de tiempo más pequeño.";
$pgv_lang["upload_replacement"]			= "Subir sustitución";
$pgv_lang["about_user"]					= "Primero debe crear el usuario de administración principal.  Este usuario tendrá privilegios para actualizar los archivos de configuración, ver datos privados, y crear otros usuarios.";
$pgv_lang["access"]						= "Acceso";
$pgv_lang["add_gedcom"] 				= "Añadir GEDCOM";
$pgv_lang["add_new_gedcom"] 			= "Crear un nuevo GEDCOM";
$pgv_lang["add_new_language"]			= "Agregar archivos y ajustes para un nuevo idioma";
$pgv_lang["add_user"]					= "Agregar un nuevo usuario";
$pgv_lang["admin_gedcom"]				= "Administrar GEDCOM";
$pgv_lang["admin_gedcoms"]				= "Haga clic aquí para administrar los GEDCOMs.";
$pgv_lang["admin_geds"]					= "Administración de datos y GEDCOMs";
$pgv_lang["admin_info"]					= "Informativo";
$pgv_lang["admin_site"]					= "Administración del sitio";
$pgv_lang["admin_user_warnings"]		= "Una o más cuentas tienen avisos";
$pgv_lang["admin_verification_waiting"] = "Cuenta(s) de usuario(s) esperando verificación del Administrador";
$pgv_lang["administration"] 			= "Administración";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]		= "Permitir a los visitantes cambiar de GEDCOM";
$pgv_lang["ALLOW_USER_THEMES"]			= "Permitir a los usuarios seleccionar su propio tema";
$pgv_lang["ansi_encoding_detected"] 	= "Archivo detectado con codificación ANSI. PhpGedView funciona mejor con archivos codificados en UTF-8.";
$pgv_lang["ansi_to_utf8"]				= "¿Quiere convertir este GEDCOM desde ANSI (ISO-8859-1) a UTF-8?";
$pgv_lang["apply_privacy"]				= "¿Aplicar ajustes de privacidad?";
$pgv_lang["back_useradmin"]				= "Volver a Administración de usuarios";
$pgv_lang["bytes_read"] 				= "Octetos leídos:";
$pgv_lang["can_admin"]					= "El usuario puede administrar";
$pgv_lang["can_edit"]					= "Nivel de acceso";
$pgv_lang["change_id"]					= "Cambiar el ID de persona a:";
$pgv_lang["choose_priv"]				= "Escoja nivel de privacidad:";
$pgv_lang["cleanup_places"] 			= "Limpiar lugares";
$pgv_lang["cleanup_users"]				= "Limpiar usuarios";
$pgv_lang["click_here_to_continue"]		= "Haga clic aquí para continuar.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Haga clic aquí para ir al Árbol de ascendientes.";
$pgv_lang["comment"]							= "Comentarios del administrador acerca del usuario";
$pgv_lang["comment_exp"]						= "Avisar al administrador en la fecha";
$pgv_lang["config_help"]						= "Ayuda de la configuración";
$pgv_lang["config_still_writable"]				= "Su archivo <i>config.php</i> todavía se puede escribir. Por seguridad, si ha finalizado la configuración de su sitio, debería modificar los permisos de escritura de este archivo a sólo-lectura.";
$pgv_lang["configuration"]						= "Configuración";
$pgv_lang["configure"]							= "Configurar PhpGedView";
$pgv_lang["configure_head"]						= "Configuración de PhpGedView";
$pgv_lang["confirm_gedcom_delete"]				= "Está seguro de querer eliminar este GEDCOM";
$pgv_lang["confirm_user_delete"]				= "Seguro que quiere borrar el usuario";
$pgv_lang["create_user"]						= "Crear usuario";
$pgv_lang["current_users"]						= "Lista de usuarios";
$pgv_lang["daily"]								= "Diariamente";
$pgv_lang["dataset_exists"] 					= "Un archivo GEDCOM con este nombre ya ha sido importado en esta Base de datos.";
$pgv_lang["unsync_warning"] 					= "Este archivo GEDCOM <em>no</em> está sincronizado con la base de datos.  Puede que no contenga la última versión de sus datos.  Para reimportar desde la base de datos en vez de desde el archivo, descargue el archivo desde la base de datos y vuelva a subir el archivo resultante.";
$pgv_lang["date_registered"]					= "Fecha de registro";
$pgv_lang["day_before_month"]					= "Día antes del mes (DD MM AAAA)";
$pgv_lang["DEFAULT_GEDCOM"]						= "GEDCOM por omisión";
$pgv_lang["default_user"]						= "Cree el usuario de administración por omisión.";
$pgv_lang["del_gedrights"]						= "El GEDCOM ya no está activo, eliminar referencias de usuarios.";
$pgv_lang["del_proceed"]						= "Continuar";
$pgv_lang["del_unvera"]							= "Usuario no verificado por un administrador.";
$pgv_lang["del_unveru"]							= "El usuario no verificó su dirección en 7 días.";
$pgv_lang["do_not_change"]						= "No modificar";
$pgv_lang["download_gedcom"]					= "Descargar GEDCOM";
$pgv_lang["download_here"]						= "Haga clic aquí para descargar el archivo.";
$pgv_lang["download_note"]						= "NOTA: Los archivos GEDCOM de gran tamaño pueden demorar mucho tiempo de proceso antes de su descarga. Si expira el plazo para el proceso PHP antes de que termine la descarga, ésta podría quedar incompleta.<br /><br />Para asegurarse de que el archivo se descargó correctamente, compruebe la existencia de la línea <b>0&nbsp;TRLR</b> al final del archivo si tiene formato GEDCOM o que la última línea de un archivo en formato XML sea <b>&lt;/database&gt;</b>.  Estos archivos son de texto, puede utilizar cualquier editor de texto para comprobarlo, pero asegúrese de <u>no guardar</u> el archivo después de haberlo inspeccionado.<br /><br />En general, podría costar tanto tiempo descargarlo como costó importar su archivo GEDCOM.";
$pgv_lang["editaccount"]						= "Permitir que este usuario modifique la información de su cuenta";
$pgv_lang["empty_dataset"]						= "¿Desea borrar la información anterior y reemplazarla con la nueva información?";
$pgv_lang["empty_lines_detected"]				= "Se detectaron líneas vacías en su archivo GEDCOM. Al realizar limpieza, se eliminarán las líneas vacías.";
$pgv_lang["enable_disable_lang"]				= "Configurar los idiomas del sitio";
$pgv_lang["error_ban_server"]					= "Dirección IP inválida.";
$pgv_lang["error_delete_person"]				= "Debe seleccionar la persona cuyo vínculo remoto desee borrar.";
$pgv_lang["error_header_write"]					= "El archivo GEDCOM, [#GEDCOM#], no es grabable. Controle sus atributos y privilegios de acceso.";
$pgv_lang["error_remove_site"]					= "No se pudo suprimir el servidor remoto.";
$pgv_lang["error_remove_site_linked"]			= "El servidor remoto no se pudo suprimir porque no está vacía su lista de conexiones.";
$pgv_lang["error_remote_duplicate"]				= "Esta base de datos remota ya se encuentra en la lista como <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]				= "Falló la autenticación con el sitio remoto";
$pgv_lang["error_url_blank"]					= "Por favor, no deje en blanco ni el título del sitio remoto ni la URL";
$pgv_lang["error_view_info"]					= "Debe seleccionar la persona cuya información desee ver.";
$pgv_lang["example_date"]						= "Ejemplo de fecha inválida en su GEDCOM:";
$pgv_lang["example_place"]						= "Ejemplo de lugar inválido en su GEDCOM:";
$pgv_lang["fbsql"]								= "FrontBase";
$pgv_lang["found_record"]						= "Registro encontrado";
$pgv_lang["ged_download"]						= "Descargar";
$pgv_lang["ged_import"]							= "Importar";
$pgv_lang["ged_export"]							= "Exportar";
$pgv_lang["ged_check"]							= "Comprobar";
$pgv_lang["gedcom_adm_head"]					= "Administración GEDCOM";
$pgv_lang["gedcom_config_write_error"]			= "¡¡¡ E R R O R !!!<br />No se pudo escribir el archivo <i>#GLOBALS[whichFile]#</i>. Verifique si posee permisos de escritura adecuados.";
$pgv_lang["gedcom_downloadable"]				= "¡Este archivo GEDCOM puede descargarse desde Internet!<br />Por favor, vea la sección SECURITY del archivo <a href=\"readme.txt\">readme.txt</a> para solventar este problema";
$pgv_lang["gedcom_file"]						= "Archivo GEDCOM:";
$pgv_lang["gedcom_not_imported"]				= "Este GEDCOM no ha sido importado todavía.";
$pgv_lang["ibase"]								= "InterBase";
$pgv_lang["ifx"]								= "Informix";
$pgv_lang["img_admin_settings"]					= "Editar la configuración de manejo de imágenes";
$pgv_lang["autoContinue"]						= "Pulsar automáticamente el botón «Continuar»";
$pgv_lang["import_complete"]					= "Importación completa";
$pgv_lang["import_options"]						= "Opciones de importación";
$pgv_lang["import_progress"]					= "Progreso de la importación...";
$pgv_lang["import_statistics"]					= "Estadísticas de la importación";
$pgv_lang["import_time_exceeded"]				= "Se sobrepasó el tiempo límite de ejecución.  Haga clic en el botón Continuar para proseguir la importación del archivo GEDCOM.";
$pgv_lang["inc_languages"]						= " Idiomas";
$pgv_lang["INDEX_DIRECTORY"]					= "Directorio de los archivos de índice";
$pgv_lang["invalid_dates"]						= "Se detectaron formatos de fecha inválidos, al realizar limpieza se cambiarán al formato DD MMM AAAA (p.ej. 1 ENE 2004).";
$pgv_lang["BOM_detected"]						= "Se detectó una Marca de Orden de Octetos (BOM) al principio del archivo.  Al limpiar, este código especial se eliminará.";
$pgv_lang["invalid_header"]						= "Se detectaron registros antes del encabezamiento GEDCOM <b>0&nbsp;HEAD</b>. Al realizar limpieza, estos registros se eliminarán.";
$pgv_lang["label_added_servers"]				= "Servidores remotos";
$pgv_lang["label_banned_servers"]				= "Excluir sitios por IP";
$pgv_lang["label_families"]						= "Familias";
$pgv_lang["label_gedcom_id2"]					= "ID de la base de datos:";
$pgv_lang["label_individuals"]					= "Personas";
$pgv_lang["label_manual_search_engines"]		= "Identificar manualmente motores de búsqueda por IP";
$pgv_lang["label_new_server"]					= "Agregar nuevo sitio";
$pgv_lang["label_password_id"]					= "Contraseña";
$pgv_lang["label_server_info"]					= "Todas las personas vinculadas remotamente a través de este sitio: ";
$pgv_lang["label_server_url"]					= "URL/IP del sitio";
$pgv_lang["label_username_id"]					= "Identificador de usuario";
$pgv_lang["label_view_local"]					= "Ver la información local de la persona";
$pgv_lang["label_view_remote"]					= "Ver la información remota de la persona";
$pgv_lang["LANG_SELECTION"] 					= "Idiomas seleccionables";
$pgv_lang["LANGUAGE_DEFAULT"]					= "No ha configurado los idiomas de su sitio.<br />PhpGedView utilizará sus opciones por omisión.";
$pgv_lang["last_login"]							= "Última entrada";
$pgv_lang["lasttab"]							= "Última pestaña visitada en Personas";
$pgv_lang["leave_blank"]						= "Deje la contraseña en blanco si quiere conservar la contraseña actual.";
$pgv_lang["link_manage_servers"]				= "Gestionar sitios";
$pgv_lang["logfile_content"]					= "Contenido del archivo de registro";
$pgv_lang["macfile_detected"]					= "Se detectó un archivo Macintosh. Al realizar limpieza será convertido a archivo DOS.";
$pgv_lang["mailto"]								= "Vínculo mailto";
$pgv_lang["merge_records"]						= "Mezclar registros";
$pgv_lang["message_to_all"]						= "Enviar un mensaje a todos los usuarios";
$pgv_lang["messaging"]							= "Mensajes internos de PhpGedView";
$pgv_lang["messaging2"]							= "Mensajes internos con correo electrónico";
$pgv_lang["messaging3"]							= "PhpGedView envía correo electrónico sin almacenamiento";
$pgv_lang["month_before_day"]					= "Mes antes del día (MM DD AAAA)";
$pgv_lang["monthly"]							= "Mensualmente";
$pgv_lang["msql"]								= "Mini SQL";
$pgv_lang["mssql"]								= "Microsoft SQL server";
$pgv_lang["mysql"]								= "MySQL";
$pgv_lang["never"]								= "Nunca";
$pgv_lang["no_logs"]							= "Registro de usuarios desactivado";
$pgv_lang["no_messaging"]						= "Ningún método de contacto";
$pgv_lang["oci8"]								= "Oracle 7+";
$pgv_lang["page_views"]							= "&nbsp;&nbsp;visualizaciones de páginas en&nbsp;&nbsp;";
$pgv_lang["performing_validation"]				= "Realizando validación del GEDCOM...";
$pgv_lang["pgsql"]								= "PostgreSQL";
$pgv_lang["pgv_config_write_error"]				= "¡¡¡Error!!! No se pudo escribir el archivo de configuración de PhpGedView.  Por favor, compruebe los permisos de archivo y directorio y pruebe nuevamente.";
$pgv_lang["PGV_MEMORY_LIMIT"]					= "Límite máximo de memoria.";
$pgv_lang["PGV_SESSION_SAVE_PATH"]				= "Ruta para Guardar Sesión:";
$pgv_lang["PGV_SESSION_TIME"]					= "Duración de la Sesión";
$pgv_lang["PGV_SIMPLE_MAIL"]					= "Usar encabezamientos simples en los correos electrónicos externos";
$pgv_lang["PGV_SMTP_ACTIVE"]					= "Utilizar SMTP para enviar el correo externo";
$pgv_lang["PGV_SMTP_HOST"]						= "Nombre del servidor de correo electrónico saliente (SMTP)";
$pgv_lang["PGV_SMTP_HELO"]						= "Nombre de dominio para el envío";
$pgv_lang["PGV_SMTP_PORT"]						= "Puerto de SMTP";
$pgv_lang["PGV_SMTP_AUTH"]						= "Utilizar identificador y contraseña";
$pgv_lang["PGV_SMTP_AUTH_USER"]					= "Identificador de usuario";
$pgv_lang["PGV_SMTP_AUTH_PASS"]					= "Contraseña";
$pgv_lang["PGV_SMTP_SSL"]						= "Usar SSL";
$pgv_lang["PGV_SMTP_FROM_NAME"] 				= "Nombre del remitente";
$pgv_lang["PGV_STORE_MESSAGES"]					= "Permitir el almacenamiento de mensajes en línea:";
$pgv_lang["phpinfo"]							= "Información de PHP";
$pgv_lang["place_cleanup_detected"]				= "Se detectaron codificaciones de lugar incorrectas. Estos errores deberían corregirse.";
$pgv_lang["please_be_patient"]					= "POR FAVOR SEA PACIENTE";
$pgv_lang["privileges"]							= "Privilegios";
$pgv_lang["reading_file"]						= "Leyendo archivo GEDCOM";
$pgv_lang["readme_documentation"]				= "Documentación LÉAME";
$pgv_lang["remove_ip"]							= "Eliminar IP";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"]	= "Requerir que un administrador apruebe el registro de nuevos usuarios";
$pgv_lang["review_readme"]						= "Debería revisar primero el archivo <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> antes de continuar configurando PhpGedView.<br /><br />";
$pgv_lang["seconds"]							= "&nbsp;&nbsp;segundos";
$pgv_lang["select_an_option"]					= "Seleccione una opción:";
$pgv_lang["SERVER_URL"]							= "URL de PhpGedView";
$pgv_lang["show_phpinfo"]						= "Ver la página de información de PHP";
$pgv_lang["siteadmin"]							= "Administrador del sitio";
$pgv_lang["sqlite"]								= "SQLite";
$pgv_lang["sybase"]								= "Sybase";
$pgv_lang["sync_gedcom"]						= "Sincronizar los ajustes de usuario con los datos GEDCOM";
$pgv_lang["system_time"]						= "Hora actual del servidor:";
$pgv_lang["user_time"]							= "Hora actual del usuario:";
$pgv_lang["TBLPREFIX"]							= "Prefijo de las tablas de la base de datos";
$pgv_lang["themecustomization"]					= "Personalización del tema";
$pgv_lang["time_limit"]							= "Límite de tiempo:";
$pgv_lang["title_manage_servers"]				= "Gestionar sitios";
$pgv_lang["title_view_conns"]					= "Ver conexiones";
$pgv_lang["translator_tools"]					= "Herramientas para el traductor";
$pgv_lang["update_myaccount"]					= "Actualizar mi cuenta";
$pgv_lang["update_user"]						= "Actualizar usuario";
$pgv_lang["upload_gedcom"]						= "Subir GEDCOM";
$pgv_lang["USE_REGISTRATION_MODULE"]			= "Permitir registrarse a los usuarios:";
$pgv_lang["user_auto_accept"]					= "Aceptar automáticamente los cambios hechos por este usuario";
$pgv_lang["user_contact_method"]				= "Método preferido de contacto";
$pgv_lang["user_create_error"]					= "No es posible agregar el usuario.  Por favor, inténtelo nuevamente.";
$pgv_lang["user_created"]						= "Usuario creado correctamente.";
$pgv_lang["user_default_tab"]					= "Pestaña a mostrar por omisión en la página de información de una persona";
$pgv_lang["user_path_length"]					= "Máxima longitud de la ruta de privacidad por parentesco";
$pgv_lang["user_relationship_priv"]				= "Limitar el acceso a familiares";
$pgv_lang["users_admin"]						= "Administradores del sitio";
$pgv_lang["users_gedadmin"]						= "Administradores de GEDCOM";
$pgv_lang["users_total"]						= "Número total de usuarios";
$pgv_lang["users_unver"]						= "No verificados por el usuario";
$pgv_lang["users_unver_admin"]					= "No verificados por un administrador";
$pgv_lang["usr_deleted"]						= "Usuario borrado: ";
$pgv_lang["usr_idle"]							= "Número de meses desde la última conexión para que una cuenta de usuario se considere inactiva: ";
$pgv_lang["usr_idle_toolong"]					= "La cuenta de usuario ha estado inactiva demasiado tiempo: ";
$pgv_lang["usr_no_cleanup"]						= "No se encontró nada que limpiar";
$pgv_lang["usr_unset_gedcomid"]					= "Borrando el ID GEDCOM de ";
$pgv_lang["usr_unset_rights"]					= "Eliminando derechos de acceso GEDCOM de ";
$pgv_lang["usr_unset_rootid"]					= "Eliminando el ID raíz de ";
$pgv_lang["valid_gedcom"]						= "Se detectó un GEDCOM válido. No se requiere 'Limpieza'.";
$pgv_lang["validate_gedcom"]					= "Validar GEDCOM";
$pgv_lang["verified"]							= "Usuario autoverificado";
$pgv_lang["verified_by_admin"]					= "Usuario aprobado por el administrador";
$pgv_lang["verify_gedcom"]						= "Verificar el GEDCOM";
$pgv_lang["verify_upload_instructions"]			= "Se ha encontrado un archivo GEDCOM con el mismo nombre. Si decide continuar, el viejo archivo GEDCOM será reemplazado por el archivo que subió y el proceso de Importación comenzará de nuevo.  Si decide cancelar, el viejo GEDCOM permanecerá sin cambios.";
$pgv_lang["view_changelog"]						= "Ver el archivo changelog.txt";
$pgv_lang["view_logs"]							= "Ver archivos de registro";
$pgv_lang["view_readme"]						= "Ver el archivo readme.txt";
$pgv_lang["visibleonline"]						= "Visible para los demás usuarios cuando esté conectado";
$pgv_lang["visitor"]							= "Visitante";
$pgv_lang["warn_users"]							= "Usuarios con avisos";
$pgv_lang["weekly"]								= "Semanalmente";
$pgv_lang["welcome_new"]						= "Bienvenido a su nuevo sitio PhpGedView.";
$pgv_lang["yearly"]								= "Anualmente";
$pgv_lang["admin_OK_subject"]					= "Aprobación de la cuenta en #SERVER_NAME#";
$pgv_lang["admin_OK_message"]					= "El administrador del sitio PhpGedView #SERVER_NAME# ha aprobado su solicitud de cuenta.  Ya puede entrar de forma identificada accediendo al siguiente vínculo:\r\n\r\n#SERVER_NAME#\r\n";

$pgv_lang["batch_update"]="Realizar cambios en bloque a su GEDCOM";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     = "Comprobador de Gedcom";          // Module title
$pgv_lang["gedcheck_text"]= "Este módulo comprueba el formato de un archivo GEDCOM contra la <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">Especificación GEDCOM 5.5.1</a>.  También comprueba la existencia de una serie de errores corrientes en sus datos.  Nótese que hay muchas versiones, extensiones y variaciones de la especificación, así que no debería preocuparse por problemas salvo los señalados como \"Críticos\".  La explicación para cada uno de los errores se encuentra en la especificación. Consúltela, por favor, antes de solicitar ayuda.";
$pgv_lang["gedcheck_sync"] = "Las modificaciones a la base de datos no se reflejan en el archivo #GLOBALS[ged]#.  El contenido del archivo puede estar desactualizado.  Puede sincronizarlo con la base de datos ahora realizando una <b><a \"#GLOBALS[ged_link]#\">exportación</a></b>.";
$pgv_lang["gedcheck_nothing"] = "No se encontraron errores a este nivel.";
$pgv_lang["level"]        = "Nivel";                   // Levels of checking
$pgv_lang["critical"]     = "Crítico";
$pgv_lang["error"]        = "Error";
$pgv_lang["warning"]      = "Aviso";
$pgv_lang["info"]         = "Información";
$pgv_lang["open_link"]    = "Abrir vínculos en";           // Where to open links
$pgv_lang["same_win"]     = "La misma pestaña/ventana";
$pgv_lang["new_win"]      = "Una nueva pestaña/ventana";
$pgv_lang["context_lines"]= "Líneas de contexto GEDCOM"; // Number of lines either side of error
$pgv_lang["all_rec"]      = "Todos los registros";             // What to show
$pgv_lang["err_rec"]      = "Registros con errores";
$pgv_lang["missing"]      = "faltan";                 // General error messages
$pgv_lang["multiple"]     = "múltiples";
$pgv_lang["invalid"]      = "inválido";
$pgv_lang["too_many"]     = "demasiados";
$pgv_lang["too_few"]      = "insuficientes";
$pgv_lang["no_link"]      = "no vincula de vuelta";
$pgv_lang["data"]         = "datos";                    // Specific errors (used with general errors)
$pgv_lang["see"]          = "ver";
$pgv_lang["noref"]        = "Ningún registro hace referencia a éste";
$pgv_lang["tag"]          = "etiqueta";
$pgv_lang["spacing"]      = "espaciado";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Hechos avanzados para nombres";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Hechos avanzados para los nombres de lugares";
$pgv_lang["SURNAME_TRADITION"]		= "Tradición de apellidos"; // Default surname inheritance
$pgv_lang["tradition_spanish"]		= "Español";
$pgv_lang["tradition_portuguese"]	= "Portugués";
$pgv_lang["tradition_icelandic"]	= "Islandés";
$pgv_lang["tradition_paternal"]		= "Paterno";
$pgv_lang["tradition_polish"]		= "Polaca";
$pgv_lang["tradition_none"]			= "Ninguno";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]	=	"1 año";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# años";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# años";
$pgv_lang["elapsedMonth1"]	=	"1 mes";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# meses";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# meses";
$pgv_lang["elapsedDay1"]	=	"1 día";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# días";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# días";
$pgv_lang["elapsedHour1"]	=	"1 hora";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# horas";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# horas";
$pgv_lang["elapsedMinute1"]	=	"1 minuto";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# minutos";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# minutos";

$pgv_lang["elapsedAgo"]		=	"#pgv_lang[global_string1]# atrás";

?>
