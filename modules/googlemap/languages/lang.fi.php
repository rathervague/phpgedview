<?php
/**
 * Finnish Language file for PhpGedView.
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
 * @translator Jani Miettinen, Marko Kohtala
 * @version $Id: lang.fi.php 4203 2008-10-31 13:44:03Z meliza $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              	= "Kartasto";
$pgv_lang["no_gmtab"]               	= "Ei kartta tietoa tällä henkilöllä";
$pgv_lang["gm_disabled"]            	= "Google-kartasto -moduli estetty";

$pgv_lang["gm_redraw_map"]          	= "Näytä kartta uudelleen";
$pgv_lang["gm_map"]                 	= "Kartta";
$pgv_lang["gm_physical"]            	= "Maasto";
$pgv_lang["gm_satellite"]           	= "Satelliitti";
$pgv_lang["gm_hybrid"]              	= "Hybridi";

// Configuration texts
$pgv_lang["gm_manage"]              	= "Hallitse Google-kartasto -asetuksia";
$pgv_lang["configure_googlemap"]    = "Google-kartasto -asetukset";
$pgv_lang["gm_admin_error"]         	= "Sivu vain ylläpitäjille";
$pgv_lang["gm_db_error"]            	= "placelocation-taulua ei löydy tietokannasta";
$pgv_lang["gm_table_created"]       	= "placelocation-taulu luotu";
$pgv_lang["googlemap_enable"]       	= "Ota käyttöön Google-kartasto";
$pgv_lang["googlemapkey"]           	= "Google-kartasto sovellusliittymäavain";
$pgv_lang["gm_map_type"]            	= "Oletuskarttatyyppi";
$pgv_lang["gm_map_size"]            	= "Kartan koko (pikseleinä)";
$pgv_lang["gm_map_size_x"]          	= "Leveys";
$pgv_lang["gm_map_size_y"]          	= "Korkeus";
$pgv_lang["gm_map_zoom"]            	= "Kartan zoomauskerroin";
$pgv_lang["gm_digits"]              	= "taso"; //"luku";
$pgv_lang["gm_min"]                 	= "Min.";
$pgv_lang["gm_max"]                 	= "Max.";
$pgv_lang["gm_default_level0"]      	= "Vakio ylätason arvo";
$pgv_lang["gm_nof_levels"]          	= "Tasojen määrä";
$pgv_lang["gm_config_per_level"]    	= "Tasojen asetukset";
$pgv_lang["gm_name_prefix"]         	= "Etuliite";
$pgv_lang["gm_name_postfix"]        	= "Jälkiliite";
$pgv_lang["gm_name_pre_post"]       = "Etu- ja jälkiliitteiden järjestys";
$pgv_lang["gm_level"]               	= "Taso";
$pgv_lang["gm_pp_none"]             	= "Ei etu-/jälkiliitettä";
$pgv_lang["gm_pp_n_pr_po_b"]       	= "Normaali, etuliite, jälkiliite, kumpikin";
$pgv_lang["gm_pp_n_po_pr_b"]        	= "Normaali, jälkiliite, etuliite, kumpikin";
$pgv_lang["gm_pp_pr_po_b_n"]        	= "Etuliite, jälkiliite, kumpikin, normaali";
$pgv_lang["gm_pp_po_pr_b_n"]        	= "Jälkiliite, etuliite, kumpikin, normaali";
$pgv_lang["gm_pp_pr_po_n_b"]        	= "Etuliite, jälkiliite, normal, kumpikin";
$pgv_lang["gm_pp_po_pr_n_b"]        	= "Jälkiliite, etuliite, normal, kumpikin";
$pgv_lang["googlemap_coord"]        	= "Näytä kartta koordinaatit";

//wooc place hierarchy
$pgv_lang["gm_place_hierarchy"]     	= "Käytä Googlemappia paikkahierarkiaa varten"; 
$pgv_lang["gm_ph_map_size"]	= "Paikkahierarkiakartan koko (pikseleinä)"; 
$pgv_lang["gm_ph_marker_type"]      	= "Paikkahierarkian paikkamerkkien tyyppi";
$pgv_lang["gm_standard_marker"]     	= "Vakio"; 
$pgv_lang["gm_no_coord"]            	= "Tällä paikalla ei ole koordinaatteja"; 
$pgv_lang["gm_ph_placenames"]       = "Näytetäänkö lyhyet paikannimet?";
$pgv_lang["gm_ph_count"]            	= "Näytä henkilö- ja perheluvut"; 
$pgv_lang["gm_ph_wheel"]            	= "Käytetäänkö hiiren vieritysrullaa zoomauksessa?"; 
$pgv_lang["gm_ph_controls"]         	= "Piilota karttastimet"; 

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   	= "Muokkaa sijaintipaikkatietoja";
$pgv_lang["pl_no_places_found"]     	= "Paikkoja ei löytynyt";
$pgv_lang["pl_zoom_factor"]         	= "Zoomauskerroin";
$pgv_lang["pl_place_icon"]          	= "Ikoni";
$pgv_lang["pl_edit"]                		= "Muokkaa paikan sijaintia";
$pgv_lang["pl_add_place"]           	= "Lisää paikka";
$pgv_lang["pl_import_gedcom"]       	= "Tuo nykyisestä GEDCOM:sta";
$pgv_lang["pl_import_all_gedcom"]   	= "Tuo kaikista GEDCOM:eista";
$pgv_lang["pl_import_file"]         	= "Tuo tiedostosta";
$pgv_lang["pl_export_file"]         	= "Vie nykyinen näkymä tiedostoon";
$pgv_lang["pl_export_all_file"]     	= "Vie kaikki sijainnit tiedostoon";
$pgv_lang["pl_north_short"]         	= "P";
$pgv_lang["pl_south_short"]         	= "E";
$pgv_lang["pl_east_short"]          	= "I";
$pgv_lang["pl_west_short"]          	= "L";
$pgv_lang["pl_places_localfile"]	= "Palvelintiedosto, joka sisältää paikkoja (CSV)";
$pgv_lang["pl_places_filename"]     	= "Tiedosto sisältää paikkoja (CSV)";
$pgv_lang["pl_clean_db"]            	= "Siivoa kaikki paikkatiedot ennen tuontia?";
$pgv_lang["pl_update_only"]         	= "Päivitä vain olemassaolevat paikat?";
$pgv_lang["pl_overwrite_data"]      	= "Korvaa paikkatiedot tiedoston tiedoilla?";
$pgv_lang["pl_use_this_value"]      	= "Käytä tätä arvoa";
$pgv_lang["pl_precision"]           	= "Tarkkuus";
$pgv_lang["pl_country"]             	= "Maa";
$pgv_lang["pl_countries"]           	= "Maat";
$pgv_lang["pl_state"]               		= "Lääni";
$pgv_lang["pl_city"]                		= "Kaupunki";
$pgv_lang["pl_neighborhood"]        	= "Naapurusto";
$pgv_lang["pl_house"]               	= "Talo";
$pgv_lang["pl_max"]                 	= "Maksimi";
$pgv_lang["pl_delete"]              	= "Poista sijaintipaikka";
$pgv_lang["pl_search_level"]        	= "Etsi tällä tasolla";
$pgv_lang["pl_search_all"]          	= "Etsi kaikkialla";
$pgv_lang["pl_unknown"]		= "Tuntematon";
$pgv_lang["pl_flag"]                		= "Lippu";
$pgv_lang["flags_edit"]             	= "Valitse lippu";
$pgv_lang["pl_change_flag"]         	= "Vaihda lippu";
$pgv_lang["pl_remove_flag"]         	= "Poista lippu";

$pgv_lang["pl_remove_location"]     	= "Poista tämä sijainti?";
$pgv_lang["pl_delete_error"]        	= "Sijaintia ei poistettu: tämä sijainti sisältää alikohteita";
$pgv_lang["list_inactive"]        		= "Klikkaa tässä nähdäksesi joutilaat paikat";

//Placecheck specific text
$pgv_lang["placecheck"]		= "Paikkojen tarkistus";
$pgv_lang["placecheck_text"]		= "Tämä listaa kaikki paikat valitusta GEDCOM-tiedostosta. Oletuksena tämä ei sisällytä paikkoja, jotka täysin vastaavat GEDCOM tiedostoa ja Google-kartaston tauluja";
$pgv_lang["placecheck_top"]		= "Ylimmän tason paikat";
$pgv_lang["placecheck_one"]		= "Tason yksi paikat";
$pgv_lang["placecheck_select1"]	= "Valitse ylin taso...";
$pgv_lang["placecheck_select2"]	= "Valitse seuraava taso...";
$pgv_lang["placecheck_key"]		= "Avainvärit joita käytetään";
$pgv_lang["placecheck_key1"]	= "tämä paikka ja sen koordinaatteja ei löydy Google-kartaston taulusta";
$pgv_lang["placecheck_key2"]	= "tämä paikka on Google-kartaston taulussa, mutta ei sisällä koordinaatteja";
$pgv_lang["placecheck_key3"]	= "tämä paikkataso on tyhjä GEDCOM tiedostossasi. Se olisi hyvä lisätä <br/>Google-kartaston paikkoihin tekstillä \"tuntematon\" koordinaattien kanssa edelliseltä<br/>tasolta ennen kuin lisäät paikkoja seuraavalle tasolle";
$pgv_lang["placecheck_key4"]	= "tämä paikkataso on tyhjä sinun GEDCOM tiedostossasi, mutta näkyy tekstillä 'tuntematon'<br/> Google-kartaston paikkataulussa koordinaattien kera. Se ei vaadi toimenpiteitä<br/>ennen kuin kadoksissa oleva taso voidaan lisätä";
$pgv_lang["placecheck_head"]	= "Paikkalista GEDCOM tiedostosta";
$pgv_lang["placecheck_gedheader"]	= "GEDCOM-tiedoston paikkadata<br/>(2 PLAC tag)";
$pgv_lang["placecheck_gm_header"]	= "Google-kartaston paikkatauludata";
$pgv_lang["placecheck_unique"]	= "yhteensä yksilöllisiä paikkoja";
$pgv_lang["placecheck_zoom"]        	= "Zoomaus=";
$pgv_lang["placecheck_options"]     	= "Paikkatarkistuslistan valinnat";
$pgv_lang["placecheck_filter_text"] 	= "Listan suodatusvalinnat";
$pgv_lang["placecheck_match"] 	= "Sisällytä täysin vastaavat paikat: ";
$pgv_lang["placecheck_lati"] 		= "Leveysaste";
$pgv_lang["placecheck_long"] 	= "Pituusaste";
?>
