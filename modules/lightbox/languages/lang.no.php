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
 * @version $Id: lang.no.php 4944 2009-01-29 03:04:28Z canajun2eh $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]	= "Gå tilbake til oppsettsiden";
$pgv_lang["lb_manage"]				= "Lightboxkonfigurasjon";
$pgv_lang["lb_generalhelp"]			= "Personopplysninger - Lightbox Generell hjelp";
$pgv_lang["lb_viewedit"]			= "Vis/rediger";
$pgv_lang["lb_viewnotes"]			= "Vis noter";
$pgv_lang["lb_viewdetails"]			= "Vis detaljer";
$pgv_lang["lb_viewsource"]			= "Vis kilder";
$pgv_lang["lb_editmedia"]			= "Rediger media";
$pgv_lang["lb_unlinkmedia"]			= "Fjern kobling til media";
$pgv_lang["lb_balloon_true"]		= "Ballong-tips";
$pgv_lang["lb_balloon_false"]		= "Normal";
$pgv_lang["lb_tt_balloon"]			= "Albumsiden - visning av noter";
$pgv_lang["lb_ttAppearance"]		= "Noter - verktøytipstype";
$pgv_lang["view_lightbox"]			= "Vis album for ...";
$pgv_lang["lb_notes"]				= "Noter";
$pgv_lang["lb_notes_info"]			= "";


// Added in VERSION 4.1.4
$pgv_lang["lb_details"]			= "Detaljer";
$pgv_lang["lb_detail_info"]		= "Vis detaljerfor dette mediaobjektet ...  pluss andre mediavalg - Mediaframviser";
$pgv_lang["lb_pause_ss"]		= "Pause i lysbildevisning";
$pgv_lang["lb_start_ss"]		= "Begynn lysbildevisning";
$pgv_lang["lb_music"]			= "Skru av/på musikk";
$pgv_lang["lb_zoom_off"]		= "Slå av Zoom";
$pgv_lang["lb_zoom_on"]			= "Zoom er aktivisert ... bruk musehjulet eller i og o-tastene for å zoome inn og ut";
$pgv_lang["lb_close_win"]		= "Lukk Lightbox-vinduet";


// VERSION 4.1.3

//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]			= "Lightbox Albumkonfigurasjon";
$pgv_lang["mediatab"]       			= "Om mediafanen skal vises (i tillegg til albumfanen)";
$pgv_lang["lb_appearance"]				= "Visning";
$pgv_lang["lb_linkAppearance"]			= "Type lenke";
$pgv_lang["lb_MP3Only"]					= "(kun mp3)";
$pgv_lang["lb_admin_error"]				= "Side kun for administratorer";
$pgv_lang["lb_toAlbumPage"]				= "Gå tilbake til albumsiden";

$pgv_lang["lb_icon"]					= "Ikon";
$pgv_lang["lb_text"]					= "Tekst";
$pgv_lang["lb_both"]					= "Begge";
$pgv_lang["lb_none"]					= "Ingen";

$pgv_lang["lb_al_head_links"]			= "Header for albumsiden";
$pgv_lang["lb_al_thumb_links"]			= "Albumsiden - miniatyrbilder";
$pgv_lang["lb_ml_thumb_links"]			= "Multimediaside - miniatyrbilder";
$pgv_lang["lb_music_file"]				= "Musikkspor for lysbildevisning";
$pgv_lang["lb_musicFileAdvice"]			= "Plassering av lydfil (Behold blankt hvis du ikke skal ha lydspor)";
$pgv_lang["lb_ss_speed"]				= "Hastighet for lysbildevisning";
$pgv_lang["lb_ss_SpeedAdvice"]			= "Lysbildevisning forløp i sekunder";

$pgv_lang["lb_transition"]				= "Hastighet mellom bideveksling";
$pgv_lang["lb_normal"]					= "Normal";
$pgv_lang["lb_double"]					= "Dobbel";
$pgv_lang["lb_warp"]					= "Warp";
$pgv_lang["lb_url_dimensions"]			= "Størrelse på URL-vindu";
$pgv_lang["lb_url_dimensionsAdvice"]	= "Bredde og høyde på URL-vindu i punkter";
$pgv_lang["lb_width"]					= "Bredde";
$pgv_lang["lb_height"]					= "Høyde";


// ---------------------------------------------------------------------


$pgv_lang["lb_help"] 		 = "Albumhjelp";
$pgv_lang["lightbox"]		 = "Album";
$pgv_lang["showmenu"] 		 = "Vis meny:";

// $pgv_lang["TYPE__other"] 			= "Other";
$pgv_lang["TYPE__footnotes"]		= "Fotnoter";

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

$pgv_lang["lb_edit_details"] 	= "Rediger detaljer";
$pgv_lang["lb_view_details"] 	= "Vis detaljer";
$pgv_lang["lb_edit_media"] 		= "Rediger dette mediaobjektets detaljer";
$pgv_lang["lb_delete_media"] 	= "Fjern dette mediaobjektet - Fjerner kun koblingen til denne personen - Sletter ikke mediafilen eller andre koblinger";
$pgv_lang["lb_view_media"] 		= "Vis dette mediobjektets detaljer \nPluss andre mediavalg - Mediaframviserside";
$pgv_lang["lb_add_media"] 		= "Legg til et nytt mediaobjekt";
$pgv_lang["lb_add_media_full"] 	= "Legg til et nytt multimediaobjekt til denne personen";
$pgv_lang["lb_link_media"] 		= "Lag kobling til et eksisterende mediaobjekt";
$pgv_lang["lb_link_media_full"] = "Koble denne personen til et eksisterende multimediaobjekt";

$pgv_lang["lb_slide_show"] 		= "Lysbildevisning";
$pgv_lang["turn_edit_ON"] 		= "Slå PÅ redigeringsmodus";
$pgv_lang["turn_edit_OFF"] 		= "Slå AV redigeringsmodus";

$pgv_lang["lb_source_avail"] 	= "Kildeinformasjon tilgjengelig - klikk her.";

$pgv_lang["lb_private"] 		= "Bilde lenket <br /> til person som er utilgjengelig av personvernhensyn (Privat) ";
$pgv_lang["lb_view_source_tip"] = "Vis kilde : ";
$pgv_lang["lb_view_details_tip"] = "Vis mediadetaljer : ";



?>
