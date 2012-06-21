<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2007 to 2008  PGV Development Team.  All rights reserved.
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
 * @subpackage Module
 * @translator Leon Kos
 * @version $Id: lang.sl.php 4690 2009-01-07 09:04:40Z fisharebest $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]		= "Vrni se na stran upravitelja";
$pgv_lang["lb_manage"]				= "Upravljaj Lightbox nastavitve";
$pgv_lang["lb_generalhelp"]			= "Osebna stran - Splošna pomoč za Lightbox";
$pgv_lang["lb_viewedit"]			= "Poglej/Urejaj";
$pgv_lang["lb_viewnotes"]			= "Poglej zapiske";
$pgv_lang["lb_viewdetails"]			= "Poglej podrobnosti";
$pgv_lang["lb_viewsource"]			= "Poglej izvorno kodo";
$pgv_lang["lb_editmedia"]			= "Uredi fotografijo";
$pgv_lang["lb_unlinkmedia"]			= "Razveži povezavo fotografije";
$pgv_lang["lb_balloon_true"]			= "Balon";
$pgv_lang["lb_balloon_false"]			= "Normalno";
$pgv_lang["lb_tt_balloon"]			= "Osebna stran - Sličica albuma - Balonček zapisov";
$pgv_lang["lb_ttAppearance"]			= "Zapiski - Prikaz lastnosti gumba (Tooltip)";
$pgv_lang["view_lightbox"]			= "Poglej album za ...";
$pgv_lang["lb_notes"]				= "Zapiski";
$pgv_lang["lb_notes_info"]			= "";
 

// Added in VERSION 4.1.4 
$pgv_lang["lb_details"]			= "Podrobnosti";
$pgv_lang["lb_detail_info"]		= "Poglej podrobnosti te fotografije na strani za pregled fotografij";
$pgv_lang["lb_pause_ss"]		= "Ustavi diaprojekcijo";
$pgv_lang["lb_start_ss"]		= "Začni diaprojekcijo";
$pgv_lang["lb_music"]			= "Vključi ali izključi glasbo";
$pgv_lang["lb_zoom_off"]		= "Izključi povečavo";
$pgv_lang["lb_zoom_on"]			= "Povečava je vključena ... Uporabi miškin kolešček ali tipki i,o za približanje in oddaljevanje";
$pgv_lang["lb_close_win"]		= "Zapri okno";


// VERSION 4.1.3 

//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]			= "Nastavitve Lightbox-Albuma";
$pgv_lang["mediatab"]       			= "Osebna stran - Zavihek fotografij";
$pgv_lang["lb_appearance"]			= "Izgled";
$pgv_lang["lb_linkAppearance"]			= "Izgled povezave";
$pgv_lang["lb_MP3Only"]				= "(samo mp3)";
$pgv_lang["lb_admin_error"]			= "Stran samo za upravitelja";
$pgv_lang["lb_toAlbumPage"]			= "Vrni se na stran albuma";

$pgv_lang["lb_icon"]				= "Ikona";
$pgv_lang["lb_text"]				= "Besedilo";
$pgv_lang["lb_both"]				= "Oboje";
$pgv_lang["lb_none"]				= "Nič";

$pgv_lang["lb_al_head_links"]			= "Osebna stran - Naslov zavihka albuma";
$pgv_lang["lb_al_thumb_links"]			= "Osebna stran - Sličice zavihka albuma";
$pgv_lang["lb_ml_thumb_links"]			= "Stran fotografij - Sličice";
$pgv_lang["lb_music_file"]			= "Zvočni zapis diaprojekcije";
$pgv_lang["lb_musicFileAdvice"]			= "Mesto datoteke zvočne sledi (Pustite prazno, če zvok ni željen)";
$pgv_lang["lb_ss_speed"]			= "Hitrost diaprojekcije";
$pgv_lang["lb_ss_SpeedAdvice"]			= "Čas prikaza posamezne fotografije v sekundah";

$pgv_lang["lb_transition"]				= "Hitros prehoda slike";
$pgv_lang["lb_normal"]					= "Normalno";
$pgv_lang["lb_double"]					= "Dvojno";
$pgv_lang["lb_warp"]					= "Hitro";
$pgv_lang["lb_url_dimensions"]				= "Velikost URL okna";
$pgv_lang["lb_url_dimensionsAdvice"]			= "Širina in višina URL okna v pikslih";
$pgv_lang["lb_width"]					= "Širina";
$pgv_lang["lb_height"]					= "Višina";
									

// ---------------------------------------------------------------------


$pgv_lang["lb_help"] 		 = "Pomoč albuma";
$pgv_lang["lightbox"]		 = "Album";
$pgv_lang["showmenu"] 		 = "Pokaži meni:";

// $pgv_lang["TYPE__other"] 			= "Other";
$pgv_lang["TYPE__footnotes"]		= "Opombe pod črto";

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

 $pgv_lang["census_text"]  	 = "\"UK census images have been obtained from \"The National Archives\", the custodian of the original records, ";
 $pgv_lang["census_text"] 	.= "and appear here with their approval on the condition that no commercial use is made of them without permission." . "\n" ;
 $pgv_lang["census_text"] 	.= "Requests for commercial publication of these or other UK census images appearing on this website should be directed to: ";
 $pgv_lang["census_text"] 	.= "Image Library, The National Archives, Kew, Surrey, TW9 4DU, United Kingdom.\"" . "\n" ;
// $pgv_lang["census_text"]  	 = "";

$pgv_lang["lb_edit_details"] 	   = "Uredi podrobnosti";
$pgv_lang["lb_view_details"] 	   = "Poglej podrobnosti";
$pgv_lang["lb_edit_media"] 	   = "Uredi podrobnsti te fotografije";
$pgv_lang["lb_delete_media"] 	   = "Remove this Media Item - Only Removes link to this individual - Does not delete Media File or other links";
$pgv_lang["lb_view_media"] 	   = "Poglej podrobnosti tega medija \nin druge možnosti medija - Stran pregledovalnika";
$pgv_lang["lb_add_media"] 	   = "Dodaj novo fotografijo";
$pgv_lang["lb_add_media_full"] 	   = "Dodaj nov multimedijski objekt tej osebi";
$pgv_lang["lb_link_media"] 	   = "Povezava na obstoječo fotografijo";
$pgv_lang["lb_link_media_full"]    = "Poveži to osebo z obstoječim multimedijskim objektom";

$pgv_lang["lb_slide_show"] 		= "Diaprojekcija";
$pgv_lang["turn_edit_ON"] 		= "Vključi način urejanja";
$pgv_lang["turn_edit_OFF"] 		= "Izključi način urejanja";

$pgv_lang["lb_source_avail"] 		= "Podatki vira so dostopni - Kliknite tukaj.";

$pgv_lang["lb_private"] 		= "Fotografija povezana <br /> na zasebno osebo";
$pgv_lang["lb_view_source_tip"] 	= "Poglej vir : ";
$pgv_lang["lb_view_details_tip"] 	= "Poglej podrobnosti fotografije : ";

?>
