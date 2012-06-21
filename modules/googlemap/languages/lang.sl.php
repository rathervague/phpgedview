<?php
/**
 * English Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team. All rights reserved.
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
 * @translator Leon Kos
 * @version $Id: lang.sl.php 6938 2010-02-20 12:58:04Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              = "Zemljevid";
$pgv_lang["no_gmtab"]               = "Ni lokacijskih podatkov za to osebo";
$pgv_lang["gm_disabled"]            = "Modul GoogleMap je izključen";

$pgv_lang["gm_redraw_map"]          = "Preriši zemljevid";
$pgv_lang["gm_map"]                 = "Zemljevid";
$pgv_lang["gm_physical"]            = "Teren";
$pgv_lang["gm_satellite"]           = "Satelit";
$pgv_lang["gm_hybrid"]              = "Hibrid";

// Configuration texts
$pgv_lang["gm_manage"]              = "Upravljaj nastavitve GoogleMap";
$pgv_lang["configure_googlemap"]    = "Nastavitve GoogleMap";
$pgv_lang["gm_admin_error"]         = "Stran samo za upravitelje";
$pgv_lang["googlemap_enable"]       = "Vključi GoogleMap";
$pgv_lang["googlemapkey"]           = "GoogleMap API ključ";
$pgv_lang["gm_map_type"]            = "Privzet tip zemljevida";
$pgv_lang["gm_map_size"]            = "Velikost (v pikslih)";
$pgv_lang["gm_map_size_x"]          = "Širina";
$pgv_lang["gm_map_size_y"]          = "Višina";
$pgv_lang["gm_map_zoom"]            = "Faktor povečave zemljevida";
$pgv_lang["gm_digits"]              = "cifer";
$pgv_lang["gm_min"]                 = "Min.";
$pgv_lang["gm_max"]                 = "Max.";
$pgv_lang["gm_default_level0"]      = "Default top level value";
$pgv_lang["gm_nof_levels"]          = "Number of levels";
$pgv_lang["gm_config_per_level"]    = "Configuration per level";
$pgv_lang["gm_name_prefix"]         = "Prefix";
$pgv_lang["gm_name_postfix"]        = "Postfix";
$pgv_lang["gm_name_pre_post"]       = "Prefix / Postfix vrstni red";
$pgv_lang["gm_level"]               = "Nivo";
$pgv_lang["gm_pp_none"]             = "Brez pre/postfix";
$pgv_lang["gm_pp_n_pr_po_b"]        = "Normal, prefix, postfix, both";
$pgv_lang["gm_pp_n_po_pr_b"]        = "Normal, postfix, prefix, both";
$pgv_lang["gm_pp_pr_po_b_n"]        = "Prefix, postfix, both, normal";
$pgv_lang["gm_pp_po_pr_b_n"]        = "Postfix, prefix, both, normal";
$pgv_lang["gm_pp_pr_po_n_b"]        = "Prefix, postfix, normal, both";
$pgv_lang["gm_pp_po_pr_n_b"]        = "Postfix, prefix, normal, both";
$pgv_lang["googlemap_coord"]        = "Pokaži koordinate zemljevida";
//wooc place hierarchy
$pgv_lang["gm_place_hierarchy"]  	= "Uporabi Googlemap za hierarhijo lokacij";
$pgv_lang["gm_ph_map_size"]			= "Velikost hieriarhije zemljevida (v pikslih)";
$pgv_lang["gm_ph_marker_type"]		= "Tip markerjev v hieriarhiji lokacij";
$pgv_lang["gm_standard_marker"]		= "Standardno";
$pgv_lang["gm_no_coord"]			= "To mesto nima koordinat";
$pgv_lang["gm_ph_placenames"]		= "Prikaži kratka krajevna imena";
$pgv_lang["gm_ph_count"]			= "Pokaži števce oseb in družin";
$pgv_lang["gm_ph_wheel"]			= "Uporabi kolešček miške za povečavo";
$pgv_lang["gm_ph_controls"]			= "Skrij kontrolnik zemljevida";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   = "Uredi geografske položaje";
$pgv_lang["pl_no_places_found"]     = "Mesta niso najdena";
$pgv_lang["pl_zoom_factor"]         = "Faktor povečave";
$pgv_lang["pl_place_icon"]          = "Ikona";
$pgv_lang["pl_edit"]                = "Uredi geogradski položaj";
$pgv_lang["pl_add_place"]           = "Dodaj mesto";
$pgv_lang["pl_import_gedcom"]       = "Uvozi iz trenutnega GEDCOM-a";
$pgv_lang["pl_import_all_gedcom"]   = "Uvozi iz vseh GEDCOM-ov";
$pgv_lang["pl_import_file"]         = "Uvozi iz datoteke";
$pgv_lang["pl_export_file"]         = "Izvozi trenutni pogled v datoteko";
$pgv_lang["pl_export_all_file"]     = "Izvozi vse lokacije v datoteko";
$pgv_lang["pl_north_short"]         = "S";
$pgv_lang["pl_south_short"]         = "J";
$pgv_lang["pl_east_short"]          = "V";
$pgv_lang["pl_west_short"]          = "Z";
$pgv_lang["pl_places_localfile"]    = "Datoteka strežnika, ki vsebuje kraje (CSV)";
$pgv_lang["pl_places_filename"]     = "Datoteka, ki vsebije kraje (CSV)";
$pgv_lang["pl_clean_db"]            = "Izbriži vse krajevne popožaje pred uvozom?";
$pgv_lang["pl_update_only"]         = "Obnovi samo obstoječe kraje?";
$pgv_lang["pl_overwrite_data"]      = "Prepiši podatke lokacij s podatki v datoteki?";
$pgv_lang["pl_use_this_value"]      = "Uporabi to vrednost";
$pgv_lang["pl_precision"]           = "Ločljivost";
$pgv_lang["pl_country"]				= "Država";
$pgv_lang["pl_countries"]			= "Države";
$pgv_lang["pl_state"]               = "Pokrajina";
$pgv_lang["pl_city"]                = "Mesto";
$pgv_lang["pl_neighborhood"]        = "Soseska";
$pgv_lang["pl_house"]               = "Hiša";
$pgv_lang["pl_max"]                 = "Največ";
$pgv_lang["pl_delete"]              = "Izbriši geografski položaj";
$pgv_lang["pl_search_level"]		= "Išči na tem nivoju";
$pgv_lang["pl_search_all"]			= "Išči vse";
$pgv_lang["pl_unknown"]				= "Neznano";

$pgv_lang["pl_flag"]                = "Zastava";
$pgv_lang["flags_edit"]             = "Izberi zastavo";
$pgv_lang["pl_change_flag"]         = "Spremeni zastavo";
$pgv_lang["pl_remove_flag"]         = "Odstrani zastavo";

$pgv_lang["pl_remove_location"]     = "Ostrani to lokacijo?";
$pgv_lang["pl_delete_error"]        = "Lokacija ni bila odstranjena: ta lokacija vsebuje pod-lokacije";
$pgv_lang["list_inactive"]        	= "Kliknite sem za prikaz neaktivnih mest";

//Placecheck specific text
$pgv_lang["placecheck"]				= "Kontrola mesta";
$pgv_lang["placecheck_text"]		= "To je seznam vseh mest iz izbrane GEDCOM datoteke. Ptivzeto ta NE VKLJUČUJE mesta, ki popolnoma ustrezajo med GEDCOM datoteko in tabelami GoogleMap";
$pgv_lang["placecheck_top"]			= "Najvišji nivo";
$pgv_lang["placecheck_one"]			= "Nivo ena";
$pgv_lang["placecheck_select1"]		= "Izberi najvišji nivo...";
$pgv_lang["placecheck_select2"]		= "Izberi naslednji nivo...";
$pgv_lang["placecheck_key"]		= "Ključ za spodnje barve";
$pgv_lang["placecheck_key1"]		= "to mesto in njegove kootdinate ne obstajajo v GoogleMap tabelah";
$pgv_lang["placecheck_key2"]		= "to mesto obstaja v GoogleMap tabelah, vendar nima koordinat";
$pgv_lang["placecheck_key3"]		= "to mesto je prazno v vaši GEDCOM datoteki. Potrebno ga je dodati v <br />GoogleMap mesta kot \"unknown\" s koordinatami na višji nivo<br />preden dodate kaerokoli mesto na naslednjem nivoju";
$pgv_lang["placecheck_key4"]		= "to mesto je prazno v vaši GEDCOM datoteki, vedar obstaja kot 'unknown'<br />v GoogleMap tabelah mest s koordinatami. Ni potrebna nobena akcija<br />dokler ni vnešen manjkajoči nivo";
$pgv_lang["placecheck_head"]		= "Seznam mest v GEDCOM datoteki";
$pgv_lang["placecheck_gedheader"]	= "Podatki mesta GEDCOM-ove datoteke<br />(2 PLAC označba)";
$pgv_lang["placecheck_gm_header"]	= "Podatki GoogleMap tabele mest";
$pgv_lang["placecheck_unique"]		= "Skupno število unikatnih mest";
$pgv_lang["placecheck_zoom"]        = "Povečava=";
$pgv_lang["placecheck_options"]     = "Možnosti seznama PlaceCheck";
$pgv_lang["placecheck_filter_text"] = "Seznam filtriranih možnosti";
$pgv_lang["placecheck_match"] 		= "Vključi polno ujemajoča mesta: ";
$pgv_lang["placecheck_lati"] 		= "Zemplepisna širina";
$pgv_lang["placecheck_long"] 		= "Zemljepisna dolžina";

// Pedigree map
$pgv_lang["pedigree_map"]			= "Zemljevid sorodnikov";
$pgv_lang["pm_grandparent"] 			= "Stari starši";
$pgv_lang["pm_grandmother"] 			= "Babica";
$pgv_lang["pm_grandfather"] 			= "Dedek";
$pgv_lang["pm_gt"]						= "Gt";
$pgv_lang["pm_zoom_in"]					= "Približaj";
$pgv_lang["pm_zoom_out"]				= "Oddalji";
$pgv_lang["zoom_in_here"]				= "Približaj&nbsp;tu";
$pgv_lang["zoom_out_here"]				= "Oddalji&nbsp;tu";
$pgv_lang["centre_map"]					= "Usredini&nbsp;zemljevid&nbsp;tu";
$pgv_lang["pm_individual_displayed"]	= "oseba prikazano od skupno";
$pgv_lang["pm_2individuals_displayed"]	= "osebi prikazani od skupno";	// For Polish 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["pm_individuals_displayed"]	= "oseb prikazanih od skupno";
$pgv_lang["pm_individual_private"]		= "oseba je zasebna.";
$pgv_lang["pm_individuals_private"]		= "oseb je zasebnih.";
$pgv_lang["pm_missing_birth"]			= "osebi manjkajo koordinate rojstva na zamljevidu:";
$pgv_lang["pm_2missing_births"]			= "osebam manjkajo koordinate rojstva na zamljevidu:";	// For Polish 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["pm_missing_births"]			= "osebam manjkajo koordinate rojstva na zamljevidu:";
$pgv_lang["pm_missings"]				= "Ni prednikov v podatkovni bazi.";
$pgv_lang["pm_from"]					= "od";
$pgv_lang["pm_for"]						= "do";
$pgv_lang["pm_gens"]					= "rodov";
$pgv_lang["pm_root"]					= "Koren";

?>
