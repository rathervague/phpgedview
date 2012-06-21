<?php
/**
 * Danish Language file for PhpGedView.
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
 * @package PhpGedView
 * @subpackage GoogleMap
 * @version $Id: lang.da.php 6911 2010-02-03 13:20:29Z hylle $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              = "Kort";
$pgv_lang["no_gmtab"]               = "Ingen kortdata for denne person";
$pgv_lang["gm_disabled"]            = "Googlemap modul deaktiveret";

$pgv_lang["gm_redraw_map"]          = "Gentegn kort";
$pgv_lang["gm_map"]                 = "Kort";
$pgv_lang["gm_physical"]            = "Terræn";
$pgv_lang["gm_satellite"]           = "Satellit";
$pgv_lang["gm_hybrid"]              = "Hybrid";

// Configuration texts
$pgv_lang["gm_manage"]              = "Håndter Googlemap konfiguration";
$pgv_lang["configure_googlemap"]    = "Googlemap konfiguration";
$pgv_lang["gm_admin_error"]         = "Siden er kun for administratorer";
$pgv_lang["gm_db_error"]            = "placelocation tabel ikke fundet i databasen";
$pgv_lang["gm_table_created"]       = "placelocation tabel oprettet";
$pgv_lang["googlemap_enable"]       = "Aktiver Googlemap";
$pgv_lang["googlemapkey"]           = "Google Map API nøgle";
$pgv_lang["gm_map_type"]            = "Standard korttype";
$pgv_lang["gm_map_size"]            = "Størrelse på kort (i pixler)";
$pgv_lang["gm_map_size_x"]          = "Bredde";
$pgv_lang["gm_map_size_y"]          = "Højde";
$pgv_lang["gm_map_zoom"]            = "Zoom faktor på kort";
$pgv_lang["gm_digits"]              = "decimaler";
$pgv_lang["gm_min"]                 = "Min.";
$pgv_lang["gm_max"]                 = "Maks.";
$pgv_lang["gm_default_level0"]      = "Standard topniveau værdi";
$pgv_lang["gm_nof_levels"]          = "Antal niveauer";
$pgv_lang["gm_config_per_level"]    = "Konfiguration per niveau";
$pgv_lang["gm_name_prefix"]         = "Præfiks";
$pgv_lang["gm_name_postfix"]        = "Postfiks";
$pgv_lang["gm_name_pre_post"]       = "Præfiks / Postfiks rækkefølge";
$pgv_lang["gm_level"]               = "Niveau";
$pgv_lang["gm_pp_none"]             = "Ingen præ/postfiks";
$pgv_lang["gm_pp_n_pr_po_b"]        = "Normal, præfiks, postfiks, begge";
$pgv_lang["gm_pp_n_po_pr_b"]        = "Normal, postfiks, præfiks, begge";
$pgv_lang["gm_pp_pr_po_b_n"]        = "Præfiks, postfiks, begge, normal";
$pgv_lang["gm_pp_po_pr_b_n"]        = "Postfiks, præfiks, begge, normal";
$pgv_lang["gm_pp_pr_po_n_b"]        = "Præfiks, postfiks, normal, begge";
$pgv_lang["gm_pp_po_pr_n_b"]        = "Postfiks, præfiks, normal, begge";
$pgv_lang["googlemap_coord"]        = "Vis kort koordinater";
//wooc place hierarchy
$pgv_lang["gm_place_hierarchy"]         = "Brug Googlemap for stedhieraki";
$pgv_lang["gm_ph_map_size"]                     = "Størrelse på stedhieraki kortet (i pixler)";
$pgv_lang["gm_ph_marker_type"]          = "Typer af stedmarkører i stedhieraki";
$pgv_lang["gm_standard_marker"]         = "Standard";
$pgv_lang["gm_no_coord"]                        = "Dette sted har ingen koordinater";
$pgv_lang["gm_ph_placenames"]           = "Vis korte stednavne";
$pgv_lang["gm_ph_count"]                        = "Vis individ- og familieoptælling";
$pgv_lang["gm_ph_wheel"]                        = "Brug musehjul for zoom";
$pgv_lang["gm_ph_controls"]                     = "Skjul kort-kontroller";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   = "Rediger geografiske sted placeringer";
$pgv_lang["pl_no_places_found"]     = "Ingen steder fundet";
$pgv_lang["pl_zoom_factor"]         = "Zoom faktor";
$pgv_lang["pl_place_icon"]          = "Ikon";
$pgv_lang["pl_edit"]                = "Rediger geografisk placering";
$pgv_lang["pl_add_place"]           = "Tilføj sted";
$pgv_lang["pl_import_gedcom"]       = "Importer fra aktuel GEDCOM";
$pgv_lang["pl_import_all_gedcom"]   = "Importer fra alle GEDCOM'er";
$pgv_lang["pl_import_file"]         = "Importer fra fil";
$pgv_lang["pl_export_file"]         = "Eksporter aktuelle visning til fil";
$pgv_lang["pl_export_all_file"]     = "Eksporter alle placeringer til fil";
$pgv_lang["pl_north_short"]         = "N";
$pgv_lang["pl_south_short"]         = "S";
$pgv_lang["pl_east_short"]          = "Ø";
$pgv_lang["pl_west_short"]          = "V";
$pgv_lang["pl_places_localfile"]    = "Serverfil indeholdende steder (CSV)";
$pgv_lang["pl_places_filename"]     = "Fil indeholdende steder (CSV)";
$pgv_lang["pl_clean_db"]            = "Fjern alle sted-placeringer før import?";
$pgv_lang["pl_update_only"]         = "Opdater kun eksisterende steder?";
$pgv_lang["pl_overwrite_data"]      = "Overskriv placeringsdata med data fra fil?";
$pgv_lang["pl_use_this_value"]      = "Brug denne værdi";
$pgv_lang["pl_precision"]           = "Præcision";
$pgv_lang["pl_country"]             = "Land";
$pgv_lang["pl_countries"]           = "Lande";
$pgv_lang["pl_state"]               = "Stat";
$pgv_lang["pl_county"]              = "Amt";
$pgv_lang["pl_city"]                = "By";
$pgv_lang["pl_place"]               = "Sted";
$pgv_lang["pl_neighborhood"]        = "Kvarter";
$pgv_lang["pl_house"]               = "Hus";
$pgv_lang["pl_max"]                 = "Maks.";
$pgv_lang["pl_delete"]              = "Slet geografisk sted";
$pgv_lang["pl_search_level"]            = "Søg på dette niveau";
$pgv_lang["pl_search_all"]                      = "Søg alle";
$pgv_lang["pl_unknown"]             = "Ukendt";

$pgv_lang["pl_flag"]                = "Flag";
$pgv_lang["flags_edit"]             = "Vælg flag";
$pgv_lang["pl_change_flag"]         = "Skift flag";
$pgv_lang["pl_remove_flag"]         = "Fjern flag";
$pgv_lang["pl_no_flags"]                = "<b>Flagmappen findes ikke</b><br /><br />For at flagene skal virke, skal du kopiere <b>flags</b> mappen fra <b>images</b> mappen til <b>places</b> mappen, eller downloade flagene fra den fulde udgave.";

$pgv_lang["pl_remove_location"]     = "Fjern dette sted?";
$pgv_lang["pl_delete_error"]        = "Stedet ikke fjernet: dette sted indeholder under-steder";
$pgv_lang["list_inactive"]              = "Klik her for at vise inaktive steder";

//Placecheck specific text
$pgv_lang["placecheck"]                         = "Kontroller steder";
$pgv_lang['placecheck_text']            = "Dette vil vise alle stederne fra den valgte gedcom fil. Som standard vil dette ikke inkludere steder der er korrekt sammenkørt imellem GEDCOM filen og Googlemap tabellerne";
$pgv_lang['placecheck_top']                     = "Topniveau sted";
$pgv_lang['placecheck_one']                     = "Niveau ét sted";
$pgv_lang['placecheck_select1']         = "Vælg topniveau...";
$pgv_lang['placecheck_select2']         = "Vælg næste niveau...";
$pgv_lang['placecheck_key']                     = "Oversigt over nedenfor brugte farver";
$pgv_lang['placecheck_key1']            = "dette sted og dets koordinater findes ikke i googlemap tabellerne";
$pgv_lang['placecheck_key2']            = "dette sted findes i googlemap tabellerne, men har ingen koordinater";
$pgv_lang['placecheck_key3']            = "dette stedniveau er blankt i din gedcomfil. Det bør tilføjes til googlemap<br/>steder som \"unknown\" med koordinater fra dens forældre niveau<br/>før du tilføjer noget sted til det næste niveau";
$pgv_lang['placecheck_key4']            = "dette stedniveau er blankt i din gedcomfil, men eksistere som 'unknown'<br/>i googlemap stedtabllen med koordinater. Der kræves ikke nogen<br/>handling før det manglende niveau kan indtastes";
$pgv_lang["placecheck_head"]            = "Stedliste for GEDCOM-filen";
$pgv_lang['placecheck_gedheader']       = "Gedcom-fil steddata<br/>(2 PLAC mærke)";
$pgv_lang['placecheck_gm_header']       = "GoogleMap steder tabeldata";
$pgv_lang['placecheck_unique']          = "Totalt antal unikke steder";
$pgv_lang["placecheck_zoom"]         = "Zoom=";
$pgv_lang["placecheck_options"]     = "Stedkontrol liste indstillinger";
$pgv_lang["placecheck_filter_text"] = "Vis filtrerings indstillinger";
$pgv_lang["placecheck_match"]           = "Inkludér korrekt sammenkørte steder: ";
$pgv_lang["placecheck_lati"] 		= "Breddegrad";
$pgv_lang["placecheck_long"] 		= "Længdegrad";

// Pedigree map
$pgv_lang["pedigree_map"]                               = "Stamtræskort";
$pgv_lang["pm_grandparent"]                     = "Bedsteforælder";
$pgv_lang["pm_grandmother"]                     = "Bedstemor";
$pgv_lang["pm_grandfather"]                     = "Bedstefar";
$pgv_lang["pm_gt"]                                              = "Gt";
$pgv_lang["pm_zoom_in"]                                 = "Zoom&nbsp;ind";
$pgv_lang["pm_zoom_out"]                                = "Zoom&nbsp;ud";
$pgv_lang["zoom_in_here"]                               = "Zoom&nbsp;ind&nbsp;her";
$pgv_lang["zoom_out_here"]                              = "Zoom&nbsp;ud&nbsp;her";
$pgv_lang["centre_map"]                                 = "Centrer&nbsp;kort&nbsp;her";
$pgv_lang["pm_individual_displayed"]    = "individ vist ud af den normale total på";
$pgv_lang["pm_2individuals_displayed"]  = "individer vist us af den normale total på";   // For Polish 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["pm_individuals_displayed"]   = "individer vist ud af den normale total på";
$pgv_lang["pm_individual_private"]              = "individ er privat.";
$pgv_lang["pm_individuals_private"]             = "individer er private.";
$pgv_lang["pm_missing_birth"]                   = "individid mangler fødselssteds koordinater:";
$pgv_lang["pm_2missing_births"]                 = "individer mangler fødselssteds koordinater:";       // For Polish 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["pm_missing_births"]                  = "individer mangler fødselssteds koordinater:";
$pgv_lang["pm_missings"]                                = "Ingen slægtninge i databasen.";
$pgv_lang["pm_from"]                                    = "fra";
$pgv_lang["pm_for"]                                             = "for";
$pgv_lang["pm_gens"]                                    = "generationer";
$pgv_lang["pm_root"]                                    = "Rod";
?>
