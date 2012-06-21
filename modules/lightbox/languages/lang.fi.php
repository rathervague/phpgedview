<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  John Finlay and Others
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
 * @version $Id: lang.fi.php 6616 2009-12-24 16:32:30Z meliza $
 * @author Brian Holland
 * @translator Matti Valve, Marko Kohtala
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.2.2
$pgv_lang["TYPE__notinDB"]			= "Ei tietokannassa";
$pgv_lang["ROW_TYPE__notinDB"]		= $pgv_lang["TYPE__notinDB"];


// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]	= "Palaa ylläpitosivulle";
$pgv_lang["lb_manage"]				= "Hallitse Lightbox asetuksia";
$pgv_lang["lb_generalhelp"]     	= "Henkilösivu - Lightboxin yleinen apu";
$pgv_lang["lb_viewedit"]		= "Näytä/Muokkaa";
$pgv_lang["lb_viewnotes"]		= "Näytä lisätiedot";
$pgv_lang["lb_viewdetails"]		= "Näytä yksityiskohdat";
$pgv_lang["lb_viewsource"]		= "Näytä lähteet";
$pgv_lang["lb_editmedia"]		= "Muokkaa mediaa"; 
$pgv_lang["lb_unlinkmedia"]		= "Poista yhteys mediaan";
$pgv_lang["lb_balloon_true"]		= "Pallo";  
$pgv_lang["lb_balloon_false"]		= "Normaali";
$pgv_lang["lb_tt_balloon"]		= "Henkilösivu - Albumivälilehden  pienoiskuva - Lisätiedot työkaluvihje";
$pgv_lang["lb_ttAppearance"]		= "Lisätiedot - Työkaluvihjeen ulkonäkö";   //tooltip appearance
$pgv_lang["view_lightbox"]		= "Näytä albumi ..."; 
$pgv_lang["lb_notes"]			= "Lisätiedot";
$pgv_lang["lb_notes_info"]		= "";

// Added in VERSION 4.1.4 
$pgv_lang["lb_details"]		= "Tiedot";
$pgv_lang["lb_detail_info"] 		= "Tarkastele tämän mediakohteen tietoja ...  sekä muita media-asetuksia – Median tarkastelusivu";
$pgv_lang["lb_pause_ss"] 		= "Pysäytä diaesitys";
$pgv_lang["lb_start_ss"] 		= "Aloita diaesitys";
$pgv_lang["lb_music"] 		= "Musiikki päälle/pois";
$pgv_lang["lb_zoom_off"] 		= "Estä zoomaus";
$pgv_lang["lb_zoom_on"] 		= "Zoomaus käytössä ... käytä hiiren vierintärullaa tai i- tai o-näppäintä lähentämään ja loitontamaan";
$pgv_lang["lb_close_win"] 		= "Sulje Lightbox ikkuna";

// Added in VERSION 4.1.3 
//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"] 	= "Lightbox asetukset";
$pgv_lang["mediatab"]       		= "Henkilösivu - Mediavälilehti";
$pgv_lang["lb_appearance"]		= "Ulkonäkö";
$pgv_lang["lb_linkAppearance"]	= "Liitteen ulkonäkö";
$pgv_lang["lb_MP3Only"]		= "(vain mp3)";
$pgv_lang["lb_admin_error"]		= "Vain ylläpitäjille tarkoitettu sivu";
$pgv_lang["lb_toAlbumPage"]		= "Palaa albumisivulle";

$pgv_lang["lb_icon"]			= "Kuvake";
$pgv_lang["lb_text"]			= "Teksti";
$pgv_lang["lb_both"]			= "Kumpikin";
$pgv_lang["lb_none"]			= "Ei mikään";

$pgv_lang["lb_al_head_links"]		= "Henkilösivu – Albumivälilehden otsikko";
$pgv_lang["lb_al_thumb_links"]	= "Henkilösivu – Albumivälilehden pienoiskuvat";
$pgv_lang["lb_ml_thumb_links"]	= "Multimediasivu - Pienoiskuvat";
$pgv_lang["lb_music_file"]		= "Diaesityksen ääniraita";
$pgv_lang["lb_musicFileAdvice"]	= "Ääniraitatiedoston sijainti (jätä tyhjäksi, jos tiedostoa ei ole)";
$pgv_lang["lb_ss_speed"]		= "Diaesityksen nopeus";
$pgv_lang["lb_ss_SpeedAdvice"]	= "Diaesityksen ajastus sekunteina";

$pgv_lang["lb_transition"]		= "Kuvavaihdon nopeus";
$pgv_lang["lb_normal"]		= "Normaali";
$pgv_lang["lb_double"]		= "Kaksinkertainen";
$pgv_lang["lb_warp"]			= "Jatka alusta";
$pgv_lang["lb_url_dimensions"]	= "URL-ikkunan mitat";
$pgv_lang["lb_url_dimensionsAdvice"] = "URL-ikkunan leveys ja korkeus pikseleinä";
$pgv_lang["lb_width"]			= "Leveys";
$pgv_lang["lb_height"]			= "Korkeus";
									

// ---------------------------------------------------------------------


$pgv_lang["lb_help"] 		 	= "Albumin ohje";
$pgv_lang["lightbox"]			= "Albumi";
$pgv_lang["showmenu"] 		= "Näytä menu:";

$pgv_lang["TYPE__other"] 	 	= "Muu"; 
$pgv_lang["TYPE__footnotes"]	= "Alaviite"; 

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

$pgv_lang["census_text"]  	 	= "\"Nämä CENSUS kuvat on saatu \"Kansallisarkistosta\", joka hallitsee alkuperäisiä tiedostoja, ";
$pgv_lang["census_text"] 		.= "ja on pantu esille tänne heidän suostumuksellaan edellyttäen, ettei niitä luvatta käytetä aupallisesti hyväksi.\".\"\n";
$pgv_lang["census_text"] 		.= "Lupa näiden tai muiden täll sivustolla olevien CENSUS kuvien kaupalliseen käyttöön on pyydettävä: ";
$pgv_lang["census_text"] 		.= "Image Library, The National Archives, Kew, Surrey, TW9 4DU, United Kingdom.\"" . "\n" ;

$pgv_lang["lb_edit_details"] 		= "Muokkaa tiedot";
$pgv_lang["lb_view_details"] 		= "Näytä tiedot";
$pgv_lang["lb_edit_media"] 		= "Muokkaa tämän mediakohteen tietoja";
$pgv_lang["lb_delete_media"] 	= "Poista tämä mediakohde - Poistaa vain linkin tähän henkilöön - ei poista itse mediatiedostoa tai muita linkkejä";
$pgv_lang["lb_view_media"] 		= "Näytä tämän mediakohteen tietoja. \n ynnä muita mediavalintoja - Mediannäyttösivu";

$pgv_lang["lb_add_media"] 		= "Lisää uusi media"; 
$pgv_lang["lb_add_media_full"] 	= "Lisää uusi multimediakohde tälle henkilölle";
$pgv_lang["lb_link_media"] 		= "Liitä olemassaolevaan mediaan"; 
$pgv_lang["lb_link_media_full"] 	= "Liitä tämä henkilö olemassa olevaan multimediakohteeseen";

$pgv_lang["lb_slide_show"] 		= "Diaesitys";
$pgv_lang["turn_edit_ON"] 		= "Muokkaustila päälle"; 
$pgv_lang["turn_edit_OFF"] 		= "Muokkaustila pois"; 

$pgv_lang["lb_source_avail"] 		= "Lähdetietoa olemassa - näpäytä tästä.";

$pgv_lang["lb_private"] 		= "Kuva liitetty <br />yksityiseen henkilöön";
$pgv_lang["lb_view_source_tip"] 	= "Näytä lähde: ";
$pgv_lang["lb_view_details_tip"] 	= "Näytä median tiedot: ";

?>
