<?php
/*=================================================
   charset=utf-8
   Project:         phpGedView
   File:            lang.hu.php
   Comments:        Hungarian Language file for Google map module
===================================================*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              = "Térkép";
$pgv_lang["no_gmtab"]               = "Nincsen térképe annek a személynek";
$pgv_lang["gm_disabled"]            = "Googlemap module lekapcsolva";

$pgv_lang['gm_redraw_map']          = "Térkép újrarajzolása";
$pgv_lang["gm_map"]                 = "Térkép";
$pgv_lang["gm_satellite"]           = "Szatelit";
$pgv_lang["gm_hybrid"]              = "Ősszevetve";

// Configuration texts
$pgv_lang["gm_manage"]              = "Googlemap konfiguráció kezelése";
$pgv_lang["configure_googlemap"]    = "Googlemap konfiguráció";
$pgv_lang["gm_admin_error"]         = "Csak adminisztátor";
$pgv_lang["gm_db_error"]            = "placelocation tábla nem található az adatbázisban";
$pgv_lang["gm_table_created"]       = "placelocation tábla létrehozva";
$pgv_lang["googlemap_enable"]       = "Googlemap bekapcsolva";
$pgv_lang["googlemapkey"]           = "Google Map API kulcs";
$pgv_lang["gm_map_type"]            = "Alapértelmezett térkép típus";
$pgv_lang["gm_map_size"]            = "Térkép nagysága (pixel)";
$pgv_lang["gm_map_size_x"]          = "Szélesség";
$pgv_lang["gm_map_size_y"]          = "Magasság";
$pgv_lang["gm_map_zoom"]            = "Térkép nagyítása";
$pgv_lang["gm_digits"]              = "szám";
$pgv_lang["gm_min"]                 = "Min.";
$pgv_lang["gm_max"]                 = "Max.";
$pgv_lang["gm_default_level0"]      = "Alapértelmezett legmagasabb szint értéke";
$pgv_lang["gm_nof_levels"]          = "Szintek száma";
$pgv_lang["gm_config_per_level"]    = "Konfiguráció szintenként";
$pgv_lang["gm_name_prefix"]         = "Előtag";
$pgv_lang["gm_name_postfix"]        = "Utótag";
$pgv_lang["gm_name_pre_post"]       = "Előtag / Utótag sorrendje";
$pgv_lang["gm_level"]               = "Szint";
$pgv_lang["gm_pp_none"]             = "Elő/utótag nélkűl";
$pgv_lang["gm_pp_n_pr_po_b"]        = "Normál, előtag, utótag, mindkettő";
$pgv_lang["gm_pp_n_po_pr_b"]        = "Normál, utótag, előtag, mindkettő";
$pgv_lang["gm_pp_pr_po_b_n"]        = "Előtag, utótag, mindkettő, normál";
$pgv_lang["gm_pp_po_pr_b_n"]        = "Utótag, előtag, mindkettő, normál";
$pgv_lang["gm_pp_pr_po_n_b"]        = "Előtag, utótag, normál, mindkettő";
$pgv_lang["gm_pp_po_pr_n_b"]        = "Utótag, előtag, normál, mindkettő";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   = "Földrajzi helyszínek szerkesztése";
$pgv_lang["pl_no_places_found"]     = "Nincs helyszín találva";
$pgv_lang["pl_zoom_factor"]         = "Nagyítási szint";
$pgv_lang["pl_place_icon"]          = "Ikon";
$pgv_lang["pl_edit"]                = "Földrajzi helyek szerkesztése";
$pgv_lang["pl_add_place"]           = "Helyszín hozzáadás";
$pgv_lang["pl_import_gedcom"]       = "Importálás a GEDCOM-ból";
$pgv_lang["pl_import_all_gedcom"]   = "Importálás minden GEDCOM-ból";
$pgv_lang["pl_import_file"]         = "Importálás egy állományból";
$pgv_lang["pl_export_file"]         = "Jelen oldal exportálása egy állományba";
$pgv_lang["pl_export_all_file"]     = "Minden helyszín exportálása egy állományba";
$pgv_lang["pl_north_short"]         = "É";
$pgv_lang["pl_south_short"]         = "D";
$pgv_lang["pl_east_short"]          = "K";
$pgv_lang["pl_west_short"]          = "Ny";
$pgv_lang["pl_places_filename"]     = "Az állomány tartalmaz helyszíneket (CSV)";
$pgv_lang["pl_clean_db"]            = "Minden helyszín tőrlése importálás elött?";
$pgv_lang["pl_update_only"]         = "Csak a már meglévő helyszínek frissitése?";
$pgv_lang["pl_overwrite_data"]      = "Helyszín adatok átírása az állomány adataiból?";
$pgv_lang["pl_no_places_found"]     = "Helyszíneket nem találtunk";
$pgv_lang["pl_use_this_value"]      = "Használd ezt az értéket";
$pgv_lang["pl_precision"]           = "Pontosság";
$pgv_lang["pl_country"]             = "Ország";
$pgv_lang["pl_state"]               = "Megye";
$pgv_lang["pl_city"]                = "Város";
$pgv_lang["pl_neighborhood"]        = "Környék";
$pgv_lang["pl_house"]               = "Ház";
$pgv_lang["pl_max"]                 = "Max";

$pgv_lang["pl_flag"]                = "Zászló";
$pgv_lang["flags_edit"]             = "Zászló választás";
$pgv_lang["pl_change_flag"]         = "Zászló csere";
$pgv_lang["pl_remove_flag"]         = "Zászló tőrlés";

$pgv_lang["pl_remove_location"]     = "Ennek a helyszín törlése?";
$pgv_lang["pl_delete_error"]        = "Helyszín nem lett törőlve: ez a helyszín alsó-helyszíneket tartalmaz";
?>
