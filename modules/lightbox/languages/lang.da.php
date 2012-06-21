<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2007 to 2009  PGV Development Team.  All rights reserved.
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
 * @version $Id: lang.da.php 6069 2009-08-19 00:28:51Z canajun2eh $
 * @author Jens Hyllegaard
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6
$pgv_lang["lb_generalhelp"]     = "Individside - Lightbox generel hjælp";
$pgv_lang["lb_viewedit"]                = "Vis/rediger";
$pgv_lang["lb_viewnotes"]               = "Vis noter";
$pgv_lang["lb_viewdetails"]             = "Vis detaljer";
$pgv_lang["lb_viewsource"]              = "Vis kilde";
$pgv_lang["lb_editmedia"]               = "Rediger medie";
$pgv_lang["lb_unlinkmedia"]             = "Fjern link til medie";
$pgv_lang["lb_balloon_true"]    = "Ballon";
$pgv_lang["lb_balloon_false"]   = "Normal";
$pgv_lang["lb_tt_balloon"]              = "Individside - Albumfanen miniaturer - værktøjstip for noter";
$pgv_lang["lb_ttAppearance"]    = "Noter - Værktøjstip-udseende";
$pgv_lang["view_lightbox"]              = "Vis album for ...";
$pgv_lang["lb_notes"]                   = "Noter";
$pgv_lang["lb_notes_info"]              = "";

// Added in VERSION 4.1.4 

$pgv_lang["lb_details"]			= "Detaljer";
$pgv_lang["lb_detail_info"]		= "Vis dette medieemnes detaljer ... plus andre medieindstillinger - Medieviser side";
$pgv_lang["lb_pause_ss"]		= "Pause diasshow";
$pgv_lang["lb_start_ss"]		= "Start diasshow";
$pgv_lang["lb_music"]			= "Slå musik til/fra";
$pgv_lang["lb_zoom_off"]		= "Deaktivér zoom";
$pgv_lang["lb_zoom_on"]			= "Zoom er aktiveret ... Brug musehjul eller i og o taster for at zoome ind og ud";
$pgv_lang["lb_close_win"]		= "Luk Lightbox vinduet";




// VERSION 4.1.3 

//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]			= "Lightbox-album konfiguration";
$pgv_lang["mediatab"]       			= "Individside - Mediefanen";
$pgv_lang["lb_appearance"]				= "Udseende";
$pgv_lang["lb_linkAppearance"]			= "Link-udseende";
$pgv_lang["lb_MP3Only"]					= "(kun mp3)";
$pgv_lang["lb_admin_error"]				= "Siden er kun for administratorer";
$pgv_lang["lb_toAlbumPage"]				= "Tilbage til albumsiden";

$pgv_lang["lb_icon"]					= "Ikon";
$pgv_lang["lb_text"]					= "Tekst";
$pgv_lang["lb_both"]					= "Begge";
$pgv_lang["lb_none"]					= "Ingen";

$pgv_lang["lb_al_head_links"]			= "Individside - Albumfanen";
$pgv_lang["lb_al_thumb_links"]			= "Individside - Albumfanen miniaturer";
$pgv_lang["lb_ml_thumb_links"]			= "Multimedieside - miniaturer";
$pgv_lang["lb_music_file"]				= "Diasshow lydspor";
$pgv_lang["lb_musicFileAdvice"]			= "Lydspors placering (blankt for ingen lydspor)";
$pgv_lang["lb_ss_speed"]				= "Diasshow hastighed";
$pgv_lang["lb_ss_SpeedAdvice"]			= "Sekunder mellem billedskift";

$pgv_lang["lb_transition"]				= "Billedovergangs-hastighed";
$pgv_lang["lb_normal"]					= "Normal";
$pgv_lang["lb_double"]					= "Dobbelt";
$pgv_lang["lb_warp"]					= "Warp";
$pgv_lang["lb_url_dimensions"]			= "URL-vindues størrelse";
$pgv_lang["lb_url_dimensionsAdvice"]	= "Bredde og højde på URL-vinduet i pixler";
$pgv_lang["lb_width"]					= "Bredde";
$pgv_lang["lb_height"]					= "Højde";
									

// ---------------------------------------------------------------------


$pgv_lang["lb_help"] 		 = "Albumhjælp";
$pgv_lang["lightbox"]		 = "Album";
$pgv_lang["showmenu"] 		 = "Vis menu:";

$pgv_lang["TYPE__other"] 	 = "Andet";
$pgv_lang["TYPE__footnotes"] = "Fodnoter";

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

$pgv_lang["census_text"]  	 = "\"These census images have been obtained from \"The National Archives\", the custodian of the original records, ";
$pgv_lang["census_text"] 	.= "and appear here with their approval on the condition that no commercial use is made of them without permission." . "\n" ;
$pgv_lang["census_text"] 	.= "Requests for commercial publication of these or other census images appearing on this website should be directed to: ";
$pgv_lang["census_text"] 	.= "Image Library, The National Archives, Kew, Surrey, TW9 4DU, United Kingdom.\"" . "\n" ;

$pgv_lang["lb_edit_details"] 	= "Rediger detaljer";
$pgv_lang["lb_view_details"] 	= "Vis detaljer";
$pgv_lang["lb_edit_media"] 		= "Rediger dette medieemnes detaljer";
$pgv_lang["lb_delete_media"] 	= "Fjern dette medieemne - fjerner kun linket til dette individ - Sletter ikke mediefilen eller andre links";
$pgv_lang["lb_view_media"] 		= "Vis dette medieemnes detaljer \nPlus andre medieindstillinger - Medieviser side";
$pgv_lang["lb_add_media"] 		= "Tilføj et nyt medieobjekt";
$pgv_lang["lb_add_media_full"] 	= "Tilføj et nyt multimedieobjekt til dette individ";
$pgv_lang["lb_link_media"] 		= "Link til et eksisterende medieobjekt";
$pgv_lang["lb_link_media_full"] = "Link dette individ til et eksisterende multimedieobjekt";

$pgv_lang["lb_slide_show"] 		= "Diasshow";
$pgv_lang["turn_edit_ON"] 		= "Aktivér redigeringstilstand";
$pgv_lang["turn_edit_OFF"] 		= "Deaktivér redigeringstilstand";

$pgv_lang["lb_source_avail"] 	= "Kildeoplysninger tilgænglig - klik her.";

$pgv_lang["lb_private"] 		= "Billedet er linket <br /> til et privat individ";
$pgv_lang["lb_view_source_tip"] = "Vis kilde: ";
$pgv_lang["lb_view_details_tip"] = "Vis mediedetaljer: ";
?>
