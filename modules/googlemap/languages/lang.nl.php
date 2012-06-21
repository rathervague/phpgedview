<?php
/*=================================================
   charset=utf-8
   Project:         phpGedView
   File:            lang.nl.php
   Author:          Johan Borkhuis
   Comments:        Dutch Language file for Google map module
===================================================*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              = "Landkaart";
$pgv_lang["no_gmtab"]               = "Geen gegevens voor deze persoon";
$pgv_lang["gm_disabled"]            = "Googlemap module uitgeschakeld";

$pgv_lang["gm_redraw_map"]          = "Ververs kaart";
$pgv_lang["gm_map"]                 = "Kaart";
$pgv_lang["gm_satellite"]           = "Satelliet";
$pgv_lang["gm_hybrid"]              = "Combinatie";


// Configuration texts
$pgv_lang["gm_manage"]              = "Beheer Googlemap configuratie";
$pgv_lang["configure_googlemap"]    = "Googlemap Configuratie";
$pgv_lang["gm_admin_error"]         = "Alleen voor Administrator";
$pgv_lang["gm_db_error"]            = "placelocation tabel niet gevonden";
$pgv_lang["gm_table_created"]       = "placelocation tabel aangemaakt";
$pgv_lang["googlemap_enable"]       = "Googlemap aanzetten";
$pgv_lang["googlemapkey"]           = "Google Map API key";
$pgv_lang["gm_map_type"]            = "Standaard kaart soort";
$pgv_lang["gm_map_size"]            = "Afmeting van de kaart (in pixels)";
$pgv_lang["gm_map_size_x"]          = "Breedte";
$pgv_lang["gm_map_size_y"]          = "Hoogte";
$pgv_lang["gm_map_zoom"]            = "Zoom factor van de kaart";
$pgv_lang["gm_digits"]              = "cijfers";
$pgv_lang["gm_min"]                 = "Min.";
$pgv_lang["gm_max"]                 = "Max.";
$pgv_lang["gm_default_level0"]      = "Standaard waarde hoogste nivo";
$pgv_lang["gm_nof_levels"]          = "Aantal nivo's";
$pgv_lang["gm_config_per_level"]    = "Configuratie per nivo";
$pgv_lang["gm_name_prefix"]         = "Voorvoegsel";
$pgv_lang["gm_name_postfix"]        = "Achtervoegsel";
$pgv_lang["gm_name_pre_post"]       = "Volgorde voor gebuik";
$pgv_lang["gm_level"]               = "Nivo";
$pgv_lang["gm_pp_none"]             = "Geen voor/achtervoegsel";
$pgv_lang["gm_pp_n_pr_po_b"]        = "Normaal, voor, achter, beide";
$pgv_lang["gm_pp_n_po_pr_b"]        = "Normaal, achter, voor, beide";
$pgv_lang["gm_pp_pr_po_b_n"]        = "Voor, achter, beide, normaal";
$pgv_lang["gm_pp_po_pr_b_n"]        = "Achter, voor, beide, normaal";
$pgv_lang["gm_pp_pr_po_n_b"]        = "Voor, achter, normaal, beide";
$pgv_lang["gm_pp_po_pr_n_b"]        = "Achter, voor, normaal, beide";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   = "Wijzigen locatie gegevens";
$pgv_lang["pl_no_places_found"]     = "Geen plaatsen gevonden";
$pgv_lang["pl_zoom_factor"]         = "Zoom factor";
$pgv_lang["pl_place_icon"]          = "Icoon";
$pgv_lang["pl_edit"]                = "Wijzig locatie";
$pgv_lang["pl_add_place"]           = "Plaats toevoegen";
$pgv_lang["pl_import_gedcom"]       = "Importeren uit huidige GEDCOM";
$pgv_lang["pl_import_all_gedcom"]   = "Importeren uit alle GEDCOMs";
$pgv_lang["pl_import_file"]         = "Importeren uit bestand";
$pgv_lang["pl_export_file"]         = "Exporteer huidige lijst naar bestand";
$pgv_lang["pl_export_all_file"]     = "Exporteer alle locaties naar bestand";
$pgv_lang["pl_north_short"]         = "N";
$pgv_lang["pl_south_short"]         = "Z";
$pgv_lang["pl_east_short"]          = "O";
$pgv_lang["pl_west_short"]          = "W";
$pgv_lang["pl_places_filename"]     = "Bestand met locatiegegevens (CSV)";
$pgv_lang["pl_clean_db"]            = "Alle locatiegegevens verwijderen voor importeren?";
$pgv_lang["pl_update_only"]         = "Alleen bestaande plaatsten bijwerken?";
$pgv_lang["pl_overwrite_data"]      = "Locatie-data overschrijven met nieuwe data?";
$pgv_lang["pl_no_places_found"]     = "Geen plaatsen gevonden";
$pgv_lang["pl_use_this_value"]      = "Deze waarde gebruiken";
$pgv_lang["pl_precision"]           = "Precisie";
$pgv_lang["pl_country"]             = "Land";
$pgv_lang["pl_state"]               = "Provincie/Staat";
$pgv_lang["pl_city"]                = "Plaats";
$pgv_lang["pl_neighborhood"]        = "Buurt";
$pgv_lang["pl_house"]               = "Huis";
$pgv_lang["pl_max"]                 = "Max";

$pgv_lang["pl_flag"]                = "Vlag";
$pgv_lang["flags_edit"]             = "Selecteer vlag";
$pgv_lang["pl_change_flag"]         = "Wijzig vlag";
$pgv_lang["pl_remove_flag"]         = "Verwijder vlag";

$pgv_lang["pl_remove_location"]     = "Deze locatie verwijderen?";
$pgv_lang["pl_delete_error"]        = "Locatie niet verwijderd: deze locatie bevat sub-locaties";
?>
