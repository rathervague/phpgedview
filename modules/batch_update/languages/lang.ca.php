<?php
/**
 * Catalan Language file for PhpGedView.
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
 * @translator: Antoni Planas i Vilà
 * @package PhpGedView
 * @subpackage BatchUpdate
 * @version $Id: lang.ca.php 5586 2009-05-25 23:35:18Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]="Canvis en bloc a GEDCOM";
$pgv_lang["bu_update_chan"]="Actualitza el registre CHAN";
$pgv_lang["bu_nothing"]="No s'ha trobat res.";
$pgv_lang["bu__desc"]="Seleccioneu una actualizació en bloc d'aquesta llista.";
$pgv_lang["bu_button_update"]="Actualitza";
$pgv_lang["bu_button_update_all"]="Actualiza-ho tot";
$pgv_lang["bu_button_delete"]="Suprimeix";
$pgv_lang["bu_button_delete_all"]="Suprimeix-ho tot";

$pgv_lang["bu_search_replace"]="Cerca i canvia";
$pgv_lang["bu_search_replace_desc"]="Cercar i/o canviar dades al vostre GEDCOM emprant recerques senzilles o avançades mitjançant patrons.";
$pgv_lang["bu_search"]="Carca text/patró";
$pgv_lang["bu_replace"]="Text de la substitució";
$pgv_lang["bu_method"]="Mètode de recerca";
$pgv_lang["bu_exact"]="Text exacte";
$pgv_lang["bu_exact_desc"]="Coincidint exactament amb el tex, fins i tot entremig d'una paraula.";
$pgv_lang["bu_words"]="Solament paraules complertes";
$pgv_lang["bu_words_desc"]="Coincidint exactament amb el text, llevat que sigui entremig d'una paraula.";
$pgv_lang["bu_wildcards"]="Comodins";
$pgv_lang["bu_wildcards_desc"]="Empreu un &laquo;?&raquo; per a que coincideixi amb un sol caràcter, empreu &laquo;*&raquo; per a que coincideixi amb zero o més caràcters.";
$pgv_lang["bu_regex"]="Expressió regular";
$pgv_lang["bu_regex_desc"]="Les expressions regulars constitueixen una tàcnica avançada de recerca per patrons. Mireu-vos <a href=\"http://php.net/manual/en/regexp.reference.php\" target=\"_new\">php.net/manual/en/regexp.reference.php</a> (en anglès) per saber-ne més.";
$pgv_lang["bu_regex_bad"]="L'expressió regular sembla contenir un error. No pot emprar-se.";
$pgv_lang["bu_case"]="No distigeixis entre majúscules i minúscules";
$pgv_lang["bu_case_desc"]="Marqueu aquesta casella per a que coincideixi tant amb lletres majúscules com amb minúscules";

$pgv_lang["bu_birth_y"]="Afegeix registres de naixement absents";
$pgv_lang["bu_birth_y_desc"]="Podeu millorar el rendiment de PGV assegurant-vos que totes les persones tinguin un esdeveniment d' &laquo;inici de vida&raquo;.";

$pgv_lang["bu_death_y"]="Afegeix registres de defunció absents";
$pgv_lang["bu_death_y_desc"]="Puedeu millorar el rendiment de PGV asegurant-vos que totes les persones tinguin (si cal) un esdeveniment de &laquo;fi de vida&raquo;.";

$pgv_lang["bu_married_names"]="Afegeix noms de casada absents";
$pgv_lang["bu_married_names_desc"]="Podeu fer més fàcil la recerca de dones casades enregistrant llur nom de casada.<br/>Tanmateix, no totes les dones adopten el cognom de l'espòs, per tant cal que aneu en compte per no introduïr dades incirrectes al GEDCOM.";
$pgv_lang["bu_surname_option"]="Opció de cognoms";
$pgv_lang["bu_surname_replace"]="L'esposa adquireix el cognom del marit";
$pgv_lang["bu_surname_add"]="El cognom de soltera de l'esposa es converteix en un nou nom de pila";

$pgv_lang["bu_name_format"]="Arranja barres i espais als noms";
$pgv_lang["bu_name_format_desc"]="Corregir els registres NAME del tipus 'John/DOE/' o 'John /DOE' produïts per antics programes de genealogia.";

$pgv_lang["bu_duplicate_links"]="Esborra vincles duplicats";
$pgv_lang["bu_duplicate_links_desc"]="És un error força corrent al fitxer gedcom tenir diversos vincles al mateix registre. Per exemple tenir al mateix fill més d'un cop en un regitre de família.";

$pgv_lang["bu_tmglatlon"]="Reparara les coordenades geogràfiques de TMG";
$pgv_lang["bu_tmglatlon_desc"]="Converteix les coordenades geogràfiques en format propietari de The Master Genealogist al format de l'estàndar GEDCOM 5.5.1 que és el que entén el PGV.  Nota: els canvis no es ressalten a la sortida final que es mostre més avall.";
?>
