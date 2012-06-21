<?php
/**
 * Spanish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team. All rights reserved.
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
 * @translator: Julio Sánchez Fernández
 * @package PhpGedView
 * @subpackage BatchUpdate
 * @version $Id: lang.es.php 6974 2010-07-12 05:27:11Z jsanchez $
 */
if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]="Realizar cambios en bloque a su GEDCOM";
$pgv_lang["bu_update_chan"]="Actualizar el registro CHAN";
$pgv_lang["bu_nothing"]="No se encontró nada.";
$pgv_lang["bu__desc"]="Seleccione una actualización en bloque de esta lista.";
$pgv_lang["bu_button_update"]="Actualizar";
$pgv_lang["bu_button_update_all"]="Actualizar todo";
$pgv_lang["bu_button_delete"]="Suprimir";
$pgv_lang["bu_button_delete_all"]="Suprimir todos";

$pgv_lang["bu_search_replace"]="Buscar y reemplazar";
$pgv_lang["bu_search_replace_desc"]="Buscar y/o reemplazar datos en su GEDCOM usando búsquedas simples o avanzadas mediante patrones.";
$pgv_lang["bu_search"]="Buscar texto/patrón";
$pgv_lang["bu_replace"]="Texto de la sustitución";
$pgv_lang["bu_method"]="Método de búsqueda";
$pgv_lang["bu_exact"]="Texto exacto";
$pgv_lang["bu_exact_desc"]="Coincidir con el texto exacto, incluso en mitad de una palabra.";
$pgv_lang["bu_words"]="Sólo palabras completas";
$pgv_lang["bu_words_desc"]="Coincidir con el texto exacto, salvo que ocurra en mitad de una palabra.";
$pgv_lang["bu_wildcards"]="Comodines";
$pgv_lang["bu_wildcards_desc"]="Use una &laquo;?&raquo; para coincidir con un solo carácter, use &laquo;*&raquo; para coincidir con cero o más caracteres.";
$pgv_lang["bu_regex"]="Expresión regular";
$pgv_lang["bu_regex_desc"]="Las expresiones regulares constituyen una técnica avanzada de búsqueda por patrones.  Vea <a href=\"http://php.net/manual/en/regexp.reference.php\" target=\"_new\">php.net/manual/en/regexp.reference.php</a> (en inglés) para más detalles.";
$pgv_lang["bu_regex_bad"]="La expresión regular parece contener un error.  No puede utilizarse.";
$pgv_lang["bu_case"]="No distinguir mayúsculas y minúsculas";
$pgv_lang["bu_case_desc"]="Marque esta casilla para que coincida tanto con letras mayúsculas como minúsculas";

$pgv_lang["bu_birth_y"]="Agregar registros ausentes de nacimiento";
$pgv_lang["bu_birth_y_desc"]="Puede mejorar el rendimiento de PGV asegurándose de que todas las personas tengan un evento de &laquo;comienzo de vida&raquo;.";

$pgv_lang["bu_death_y"]="Agregar registros ausentes de defunción";
$pgv_lang["bu_death_y_desc"]="Puede mejorar el rendimiento de PGV asegurándose de que todas las personas tengan (si procede) un evento de &laquo;fin de vida&raquo;.";

$pgv_lang["bu_married_names"]="Agregar nombres ausentes de casada";
$pgv_lang["bu_married_names_desc"]="Puede hacer más fácil la búsqueda de mujeres casadas registrando su nombre de casada.<br />Sin embargo, no todas las mujeres adoptan el apellido de su esposo, así que tenga cuidado de no introducir datos incorrectos en su GEDCOM.";
$pgv_lang["bu_surname_option"]="Opción de apellidos";
$pgv_lang["bu_surname_replace"]="El apellido de la esposa se cambia al del esposo";
$pgv_lang["bu_surname_add"]="El apellido de soltera de la esposa se convierte en un nuevo nombre de pila";

$pgv_lang["bu_name_format"]="Arreglar barras y espacios en los nombres";
$pgv_lang["bu_name_format_desc"]="Corregir los registro NAME del tipo 'John/DOE/' o 'John /DOE' producidos por programas antiguos de genealogía.";

$pgv_lang["bu_duplicate_links"]="Borrar vínculos duplicados";
$pgv_lang["bu_duplicate_links_desc"]="Es un error corriente en gedcom el tener varios vínculos al mismo registro, como por ejemplo tener al mismo hijo más de una vez en un registro de familia.";

$pgv_lang["bu_tmglatlon"]="Reparar coordenadas geográficas de TMG";
$pgv_lang["bu_tmglatlon_desc"]="Convierte las coordenadas geográficas en formato propietario de The Master Genealogist al formato del estándar GEDCOM 5.5.1 que PGV entiende.  Nota: los cambios no se resaltan en la salida final que se muestra más abajo.";
?>
