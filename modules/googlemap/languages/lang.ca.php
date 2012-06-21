<?php
/**
 * Catalan language file for PhpGedView
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 to 2009  PGV Development Team.  All rights reserved.
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
 * @subpackage GoogleMap
 * @version $Id: lang.ca.php 5586 2009-05-25 23:35:18Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              = "Mapa";
$pgv_lang["no_gmtab"]               = "No hi han dades de mapa per a aquesta persona";
$pgv_lang["gm_disabled"]            = "Mòdul GoogleMap desactivat";

$pgv_lang["gm_redraw_map"]          = "Re-dibuixa el mapa";
$pgv_lang["gm_map"]                 = "Mapa";
$pgv_lang["gm_satellite"]           = "Satèl·lit";
$pgv_lang["gm_hybrid"]              = "Híbrid";
$pgv_lang["gm_physical"]            = "Relleu";

// Configuration texts
$pgv_lang["gm_manage"]              = "Configuració de GoogleMap";
$pgv_lang["configure_googlemap"]    = "Configuració de GoogleMap";
$pgv_lang["gm_admin_error"]         = "Pàgina únicament per a administradors";
$pgv_lang["gm_db_error"]            = "No s'ha trobat la taula 'placelocation' a la base de dades";
$pgv_lang["gm_table_created"]       = "S'ha creat la taula 'placelocation'";
$pgv_lang["googlemap_enable"]       = "Activa GoogleMap";
$pgv_lang["googlemapkey"]           = "Clau per a l'API de GoogleMap";
$pgv_lang["gm_map_type"]            = "Tipus de mapa predeterminat";
$pgv_lang["gm_map_size"]            = "Mida del mapa (en píxels)";
$pgv_lang["gm_map_size_x"]          = "Amplada";
$pgv_lang["gm_map_size_y"]          = "Alçària";
$pgv_lang["gm_map_zoom"]            = "Factor d'ampliació del mapa";
$pgv_lang["gm_digits"]              = "dígits";
$pgv_lang["gm_min"]                 = "Mín.";
$pgv_lang["gm_max"]                 = "Màx.";
$pgv_lang["gm_default_level0"]      = "Valor predeterminat pel nivell més alt";
$pgv_lang["gm_nof_levels"]          = "Nombre de nivells";
$pgv_lang["gm_config_per_level"]    = "Configuració per nivell";
$pgv_lang["gm_name_prefix"]         = "Prefix";
$pgv_lang["gm_name_postfix"]        = "Sufix";
$pgv_lang["gm_name_pre_post"]       = "Ordre de Prefix / Sufix";
$pgv_lang["gm_level"]               = "Nivell";
$pgv_lang["gm_pp_none"]             = "Ni prefix ni sufix";
$pgv_lang["gm_pp_n_pr_po_b"]        = "Normal, prefix, sufix, ambdós";
$pgv_lang["gm_pp_n_po_pr_b"]        = "Normal, sufix, prefix, ambdós";
$pgv_lang["gm_pp_pr_po_b_n"]        = "Prefix, sufix, ambdós, normal";
$pgv_lang["gm_pp_po_pr_b_n"]        = "Sufix, prefix, ambdós, normal";
$pgv_lang["gm_pp_pr_po_n_b"]        = "Prefix, sufix, normal, ambdós";
$pgv_lang["gm_pp_po_pr_n_b"]        = "Sufix, prefix, normal, ambdós";
$pgv_lang["googlemap_coord"]        = "Mostra les coordenadas del mapa";


// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   = "Edició de les posicions geogràfiques dels llocs";
$pgv_lang["pl_zoom_factor"]         = "Factor d'augment";
$pgv_lang["pl_place_icon"]          = "Icona";
$pgv_lang["pl_edit"]                = "Modifica la posició geogràfica";
$pgv_lang["pl_add_place"]           = "Afegeix un lloc";
$pgv_lang["pl_import_gedcom"]       = "Importa del GEDCOM actual";
$pgv_lang["pl_import_all_gedcom"]   = "Importa de tots els GEDCOM";
$pgv_lang["pl_import_file"]         = "Importa d'un arxiu";
$pgv_lang["pl_export_file"]         = "Exporta la vista actual a un arxiu";
$pgv_lang["pl_export_all_file"]     = "Exporta totes les posicions a un arxiu";
$pgv_lang["pl_north_short"]         = "N";
$pgv_lang["pl_south_short"]         = "S";
$pgv_lang["pl_east_short"]          = "E";
$pgv_lang["pl_west_short"]          = "O";
$pgv_lang["pl_places_localfile"]	= "Arxiu al servidor amb els llocs (CSV)";
$pgv_lang["pl_places_filename"]     = "Arxiu amb els llocs (CSV)";
$pgv_lang["pl_clean_db"]            = "Netejo totes les posisions de llocs abans de la importació?";
$pgv_lang["pl_update_only"]         = "Actualitzo solament els llocs existents?";
$pgv_lang["pl_overwrite_data"]      = "Substitueixo les dades actuals d'ubicació per les de l'arxiu?";
$pgv_lang["pl_no_places_found"]     = "No s'han trobat llocs";
$pgv_lang["pl_use_this_value"]      = "Fes servir aquest valor";
$pgv_lang["pl_precision"]           = "Precisió";
$pgv_lang["pl_country"]             = "País";
$pgv_lang["pl_state"]               = "Estat/Província";
$pgv_lang["pl_city"]                = "Població";
$pgv_lang["pl_neighborhood"]        = "Barri";
$pgv_lang["pl_house"]               = "Edifici";
$pgv_lang["pl_max"]                 = "Màxim";
$pgv_lang["pl_delete"]              = "Esborra la posició geogràfica";

$pgv_lang["pl_flag"]                = "Bandera";
$pgv_lang["flags_edit"]             = "Selecciona la bandera";
$pgv_lang["pl_change_flag"]         = "Canvia la bandera";
$pgv_lang["pl_remove_flag"]         = "Esborra la bandera";

$pgv_lang["pl_remove_location"]     = "Esborra aquesta ubicació?";
$pgv_lang["pl_delete_error"]        = "Ubicació no esborrada perquè en te altres de subordinades";
$pgv_lang["list_inactive"]        	= "Polseu aquí per veure els llocs inactius";

//Placecheck specific text
$pgv_lang["placecheck"]				= "Comprovació de llocs";
$pgv_lang["placecheck_text"]		= "Aixó llistarà tots els llocs de l'arxiu GEDCOM seleccionat. Per defecte NO S'INCLOURAN aquells que coincideixen completament entre l'arxiu GEDCOM i les taules GoogleMap";
$pgv_lang["placecheck_top"]			= "Nivell més alt de la Jerarquia de Llocs";
$pgv_lang["placecheck_one"]			= "Lloc de Nivell Ü";
$pgv_lang["placecheck_select1"]		= "Seleccioneu el nivell més alt...";
$pgv_lang["placecheck_select2"]		= "Seleccioneu el següent nivell...";
$pgv_lang["placecheck_key"]			= "Explicació dels colors emprats a continuació";
$pgv_lang["placecheck_key1"]		= "aquest lloc i les seves coordenades no existeix a les taules de GoogleMap";
$pgv_lang["placecheck_key2"]		= "aquest lloc existeix a les taules de GoogleMap, pero no te coordenades";
$pgv_lang["placecheck_key3"]		= "aquest lloc és en blanc al vostre arxiu GEDCOM. Caldria afegir-lo als llocs<br/>GoogleMap com a \"desconegut\" amb les coordenades del seu nivell superior<br/>abans d'afegir cap altre lloc al següent nivell";
$pgv_lang["placecheck_key4"]		= "el nivell d'aquest lloc és en blanc al vostre arxiu GEDCOM, però existeix com a 'desconegut'<br/>a la taula de llocs GoogleMap amb coordenades. No cal que feu res<br/>fins que es pugui introduir el nivell que manca";
$pgv_lang["placecheck_head"]		= "Llista de llocs de l'arxiu GEDCOM";
$pgv_lang["placecheck_gedheader"]	= "Dades de llocs a l'arxiu GEDCOM<br/>(etiqueta 2 PLAC)";
$pgv_lang["placecheck_gm_header"]	= "Dades de la taula de llocs GoogleMap";
$pgv_lang["placecheck_unique"]		= "Total de llocs diferents";
$pgv_lang["placecheck_zoom"]        = "Zoom=";
$pgv_lang["placecheck_options"]     = "Llista les opcions per a la comprovació de llocs";
$pgv_lang["placecheck_filter_text"] = "Opcions de filtratge de llistes";
$pgv_lang["placecheck_match"] 		= "Inclou-hi llocs que coincideixin completament -";
$pgv_lang["gm_place_hierarchy"] = "Empra Googlemap per a la jerarquia de llocs";
$pgv_lang["gm_ph_map_size"]		= "Mida del mapa en la jerarquia de llocs (en píxels)";
$pgv_lang["gm_ph_marker_type"]	= "Tipus de marcadors de llocs en la jerarquia de llocs";
$pgv_lang["gm_standard_marker"]	= "Estàndar";
$pgv_lang["gm_no_coord"]		= "Aquest llocs no té coordenades";
$pgv_lang["gm_ph_placenames"]	= "Mostra noms de lloc abreujats";
$pgv_lang["gm_ph_count"]		= "Mostra el comptador de persones i famílies";
$pgv_lang["gm_ph_wheel"]		= "Roda del ratolí per acostar i allunyar";
$pgv_lang["gm_ph_controls"]		= "Amaga els controls del mapa";
$pgv_lang["pl_countries"]		= "Països";
$pgv_lang["pl_county"]			= "Comtat";
$pgv_lang["pl_place"]			= "Lloc";
$pgv_lang["pl_search_level"]	= "Cercar en aquest nivell";
$pgv_lang["pl_search_all"]		= "Cerca-ho per tot";
$pgv_lang["pl_unknown"]			= "Desconegut";
$pgv_lang["placecheck_lati"] 	= "Latitud";
$pgv_lang["placecheck_long"] 	= "Longitud";
?>
