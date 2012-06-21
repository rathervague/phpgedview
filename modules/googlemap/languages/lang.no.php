<?php
/**
 * Norwegian Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @subpackage GoogleMap
 * @version $Id: lang.no.php 4944 2009-01-29 03:04:28Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]		 	= "Kart";
$pgv_lang["no_gmtab"]			= "Ingen kartdata for denne personen";
$pgv_lang["gm_disabled"]		= "GoogleMap-modulen er slått av";

$pgv_lang["gm_redraw_map"]		= "Tegn kart på nytt";
$pgv_lang["gm_map"]				= "Kart";
$pgv_lang["gm_physical"]		= "Terreng";
$pgv_lang["gm_satellite"]		= "Satellitt";
$pgv_lang["gm_hybrid"]			= "Hybrid";

// Configuration texts
$pgv_lang["gm_manage"]			= "Kontroller kofigurasjonen av GoogleMap";
$pgv_lang["configure_googlemap"] = "GoogleMapkonfigurasjon";
$pgv_lang["gm_admin_error"]		= "Side kun for administratorer";
$pgv_lang["gm_db_error"]		= "tabell for stedplassering finnes ikke i databasen";
$pgv_lang["gm_table_created"]	= "tabell for stedplassering er opprettet";
$pgv_lang["googlemap_enable"]	= "Aktiver GoogleMap";
$pgv_lang["googlemapkey"]		= "GoogleMap API-nøkkel";
$pgv_lang["gm_map_type"]		= "Standard karttype";
$pgv_lang["gm_map_size"]		= "Størrelse på kart (i punkter)";
$pgv_lang["gm_map_size_x"]		= "Bredde";
$pgv_lang["gm_map_size_y"]		= "Høyde";
$pgv_lang["gm_map_zoom"]		= "Zoomfaktor på kart";
$pgv_lang["gm_digits"]			= "desimaler";
$pgv_lang["gm_min"]				= "Min.";
$pgv_lang["gm_max"]				= "Maks.";
$pgv_lang["gm_default_level0"]	= "Standardverdi for toppnivå";
$pgv_lang["gm_nof_levels"]		= "Antall nivåer";
$pgv_lang["gm_config_per_level"] = "Konfigurasjon pr nivå";
$pgv_lang["gm_name_prefix"]		= "Prefix";
$pgv_lang["gm_name_postfix"]	= "Postfix";
$pgv_lang["gm_name_pre_post"]	= "Prefix / Postfix order";
$pgv_lang["gm_level"]			= "Nivå";
$pgv_lang["gm_pp_none"]			= "No pre/postfix";
$pgv_lang["gm_pp_n_pr_po_b"]	= "Normal, prefix, postfix, begge";
$pgv_lang["gm_pp_n_po_pr_b"]	= "Normal, postfix, prefix, begge";
$pgv_lang["gm_pp_pr_po_b_n"]	= "Prefix, postfix, begge, normal";
$pgv_lang["gm_pp_po_pr_b_n"]	= "Postfix, prefix, begge, normal";
$pgv_lang["gm_pp_pr_po_n_b"]	= "Prefix, postfix, normal, begge";
$pgv_lang["gm_pp_po_pr_n_b"]	= "Postfix, prefix, normal, begge";
$pgv_lang["googlemap_coord"]	= "Vis koordinater på kart";
//wooc place hierarchy
$pgv_lang["gm_place_hierarchy"] = "Bruk GoogleMap for stedhierarki";
$pgv_lang["gm_ph_map_size"]		= "Størrelse på stedhierarkikart (i punkter)";
$pgv_lang["gm_ph_marker_type"]	= "Type stedmarkør i stedhierarki";
$pgv_lang["gm_standard_marker"]	= "Standard";
$pgv_lang["gm_no_coord"]		= "Dette stedet har ingen koordinater";
$pgv_lang["gm_ph_placenames"]	= "Vis kortversjon av stednavn";
$pgv_lang["gm_ph_count"]		= "Vis antall personer og familier på sted";
$pgv_lang["gm_ph_wheel"]		= "Bruk musehjuleet for å zoome";
$pgv_lang["gm_ph_controls"]		= "Ikke vis kartkontroller";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"] = "Rediger geografiske stedplasseringer";
$pgv_lang["pl_no_places_found"]	= "Ingen steder funnet";
$pgv_lang["pl_zoom_factor"]		= "Zoomfaktor";
$pgv_lang["pl_place_icon"]		= "Ikon";
$pgv_lang["pl_edit"]			= "Rediger geografisk sted";
$pgv_lang["pl_add_place"]		= "Legg til sted";
$pgv_lang["pl_import_gedcom"]	= "Importer fra gjeldende GEDCOM-fil";
$pgv_lang["pl_import_all_gedcom"] = "Importer fra alle GEDCOM-filer";
$pgv_lang["pl_import_file"]		= "Importer fra fil";
$pgv_lang["pl_export_file"]		= "Eksporter nåværende visning til fil";
$pgv_lang["pl_export_all_file"]	= "Eksporter alle steder til fil";
$pgv_lang["pl_north_short"]		= "N";
$pgv_lang["pl_south_short"]		= "S";
$pgv_lang["pl_east_short"]		= "Ø";
$pgv_lang["pl_west_short"]		= "V";
$pgv_lang["pl_places_localfile"] = "Fil på tjener som inneholder steder (CSV)";
$pgv_lang["pl_places_filename"]	= "Fil som inneholder steder (CSV)";
$pgv_lang["pl_clean_db"]		= "Slett alle stedplasseringer før import?";
$pgv_lang["pl_update_only"]		= "Oppdater bare eksisterende steder?";
$pgv_lang["pl_overwrite_data"]	= "Overskriv sted-data med data fra fil?";
$pgv_lang["pl_use_this_value"]	= "Bruk denne verdien";
$pgv_lang["pl_precision"]		= "Presisjon";
$pgv_lang["pl_country"]			= "Land";
$pgv_lang["pl_countries"]		= "Land";
$pgv_lang["pl_state"]			= "Stat";
$pgv_lang["pl_county"]			= "Fylke";
$pgv_lang["pl_city"]			= "By";
$pgv_lang["pl_place"]			= "Sted";
$pgv_lang["pl_neighborhood"]	= "Nabolag";
$pgv_lang["pl_house"]			= "Hus";
$pgv_lang["pl_max"]				= "Maks";
$pgv_lang["pl_delete"]			= "Slett geografisk sted";
$pgv_lang["pl_search_level"]	= "Søk på dette nivå";
$pgv_lang["pl_search_all"]		= "Søk alle";
$pgv_lang["pl_unknown"]			= "Ukjent";

$pgv_lang["pl_flag"]			= "Flagg";
$pgv_lang["flags_edit"]			= "Velg flagg";
$pgv_lang["pl_change_flag"]		= "Endre flagg";
$pgv_lang["pl_remove_flag"]		= "Slett flagg";

$pgv_lang["pl_remove_location"]	= "Slett dette stedet?";
$pgv_lang["pl_delete_error"]	= "Stedet er ikke slettet: dette stedet har andre steder knyttet opp til seg";
$pgv_lang["list_inactive"]		= "Klikk her for å vise inaktive steder";

//Placecheck specific text
$pgv_lang["placecheck"]			= "Stedsjekk";
$pgv_lang["placecheck_text"]	= "Funksjonen vil liste alle steder fra den valge GEDCOM-filen. Som standard vil dette IKKE INKLUDERE steder som matcher 100% mellom GEDCOM-filen og GoogleMap tabellene";
$pgv_lang["placecheck_top"]		= "Toppnivåsted";
$pgv_lang["placecheck_one"]		= "Nivå-1 sted";
$pgv_lang["placecheck_select1"]	= "Velg toppnivå.";
$pgv_lang["placecheck_select2"]	= "Velg neste nivå.";
$pgv_lang["placecheck_key"]		= "Forklaring til fargekodene som er brukt under";
$pgv_lang["placecheck_key1"]	= "dette stedet og dets kordinaterfinnes ikke i GoogleMap-tabellene";
$pgv_lang["placecheck_key2"]	= "dette stedet finnes i GoogleMap tabellene, men har ingen koordinater";
$pgv_lang["placecheck_key3"]	= "dette stednivå er blankt i GEDCOM-filen din. Det bør legges til<br />GoogleMap-steder som \"ukjent\" med koordinater fra sitt sted på nivået over<br />før du legger noe sted til på neste nivå";
$pgv_lang["placecheck_key4"]	= "dette stednivå er blankt i GEDCOM-filen, men eksisterer som 'ukjent'<br />med koordinater i GoogleMap stedtabellen. Ingen behandling nødvendig<br />før det manglende nivå kan legges inn";
$pgv_lang["placecheck_head"]	= "Stedliste for GEDCOM-fil";
$pgv_lang["placecheck_gedheader"] = "GEDCOM-fil sted<br />(2 PLAC tag)";
$pgv_lang["placecheck_gm_header"] = "GoogleMaptabell sted";
$pgv_lang["placecheck_unique"]	= "Antall unike steder";
$pgv_lang["placecheck_zoom"]	= "Zoom=";
$pgv_lang["placecheck_options"]	= "Valg for stedsjekkliste";
$pgv_lang["placecheck_filter_text"] = "Filtervalg for stedliste";
$pgv_lang["placecheck_match"] 	= "Inkluder steder med 100% match: ";
$pgv_lang["placecheck_lati"] 	= "Breddegrad";
$pgv_lang["placecheck_long"] 	= "Lengdegrad";
?>
