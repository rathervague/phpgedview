<?php
/**
 * Lightbox Album module for phpGedView
 * Display media Items using Lightbox
 * Catalan language file
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 to 2009  PGV Development Team.  All rights reserved.
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
 * @version $Id: lang.ca.php 5586 2009-05-25 23:35:18Z canajun2eh $
 * @author Brian Holland
 * @translator: Antoni Planas i Vilà
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.2.2
$pgv_lang["TYPE__notinDB"]			= "No és la la BD";
$pgv_lang["ROW_TYPE__notinDB"]		= $pgv_lang["TYPE__notinDB"];


// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]	= "Torna a la pàgina d'Administració";
$pgv_lang["lb_manage"]				= "Configuració del Projector d'Imatges";
$pgv_lang["lb_generalhelp"]			= "Pàgina de persona - Ajuda general del Projector d'Imatges";
$pgv_lang["lb_viewedit"]			= "Mostra/Edita";
$pgv_lang["lb_viewnotes"]			= "Mostra les Notes";
$pgv_lang["lb_viewdetails"]			= "Mostra els Detalls";
$pgv_lang["lb_viewsource"]			= "Mostra la Font";
$pgv_lang["lb_editmedia"]			= "Edita Multimèdia";
$pgv_lang["lb_unlinkmedia"]			= "Multimèdia sense enllaç";
$pgv_lang["lb_balloon_true"]		= "Globus";
$pgv_lang["lb_balloon_false"]		= "Normal";
$pgv_lang["lb_tt_balloon"]			= "Pestanya de l'Àlbum de Miniatures - Notes de l'enllaç a l'eina d'ajuda visual";
$pgv_lang["lb_ttAppearance"]		= "Notes - Aparença de l'eina d'ajuda visual";
$pgv_lang["view_lightbox"]			= "Mostra l'àlbum de ...";
$pgv_lang["lb_notes"]				= "Notes";
$pgv_lang["lb_notes_info"]			= "";

// Added in VERSION 4.1.4
$pgv_lang["lb_details"]			= "Detalls";
$pgv_lang["lb_detail_info"]		= "Veure els detalls d'aquest objecte ...  I altres opcions d'objectes - Pàgina del visor d'objectes";
$pgv_lang["lb_pause_ss"]		= "Atura la presentació";
$pgv_lang["lb_start_ss"]		= "Comença la presentació";
$pgv_lang["lb_music"]			= "Activa/descativa la música";
$pgv_lang["lb_zoom_off"]		= "Desactiva el zoom";
$pgv_lang["lb_zoom_on"]			= "Zoom activat ... Empreu la roda del ratolí o les tecles 'i' i 'o' per acostar o allunyar";
$pgv_lang["lb_close_win"]		= "Tanca la finestra del 'Projector d'Imatges'";


// VERSION 4.1.3
//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]			= "Projector d'Imatges-Configuració de l'Àlbum";
$pgv_lang["mediatab"]       			= "Pàgina de persona - Pestanya multimèdia";
$pgv_lang["lb_appearance"]				= "Aspecte";
$pgv_lang["lb_linkAppearance"]			= "Aspecte del vincle";
$pgv_lang["lb_MP3Only"]					= "(solament mp3)";
$pgv_lang["lb_admin_error"]				= "Pàgina exclusiva per a administradors";
$pgv_lang["lb_toAlbumPage"]				= "Torna a la pàgina de l'Àlbum";

$pgv_lang["lb_icon"]					= "Icona";
$pgv_lang["lb_text"]					= "Text";
$pgv_lang["lb_both"]					= "Ambdós";
$pgv_lang["lb_none"]					= "Cap";

$pgv_lang["lb_al_head_links"]			= "Pàgina de persona - Encapçalament de la pestanya Àlbum";
$pgv_lang["lb_al_thumb_links"]			= "Pàgina de persona - Encapçalament de la pestanya de Miniatures";
$pgv_lang["lb_ml_thumb_links"]			= "Pàgina de Multimèdia - Miniatures";
$pgv_lang["lb_music_file"]				= "Fons sonor de la presentació";
$pgv_lang["lb_musicFileAdvice"]			= "Ubicació de l'arxiu amb el fons sonor (deixeu-ho en blanc si no n'hi ha)";
$pgv_lang["lb_ss_speed"]				= "Velocitat de la projecció";
$pgv_lang["lb_ss_SpeedAdvice"]			= "Temps, en segons, de permanència de la imatge";

$pgv_lang["lb_transition"]				= "Velocitat de transició entre imatges";
$pgv_lang["lb_normal"]					= "Normal";
$pgv_lang["lb_double"]					= "Doble";
$pgv_lang["lb_warp"]					= "Salt";
$pgv_lang["lb_url_dimensions"]			= "Mida de la finestra";
$pgv_lang["lb_url_dimensionsAdvice"]	= "Amplada i alçada en píxels de la finestra";
$pgv_lang["lb_width"]					= "Amplada";
$pgv_lang["lb_height"]					= "Alçada";

// ---------------------------------------------------------------------

$pgv_lang["lb_help"] 		 = "Ajuda de l'Àlbum";
$pgv_lang["lightbox"]		 = "Àlbum";
$pgv_lang["showmenu"] 		 = "Mostra el Menú:";

$pgv_lang["TYPE__footnotes"] = "Notes al peu";

$pgv_lang["census_text"]  	 = "\"Aquestes imatges del cens s'han obtingut d'\"Arxius Oficials\", custodis dels registres originals, ";
$pgv_lang["census_text"] 	.= "i surten aquí amb llur autorització sota la condició de que no se'n faci ús comercial sense llur permís." . "\n" ;
$pgv_lang["census_text"] 	.= "Les sol·licituts per la utilització comercial d'aquestes o altres imatges de censos que apareixen en aquest lloc web cal adreçar-les a: ";
$pgv_lang["census_text"] 	.= "Image Library, The National Archives, Kew, Surrey, TW9 4DU, United Kingdom.\"" . "\n" ;

$pgv_lang["lb_edit_details"] 	= "Edita detalls";
$pgv_lang["lb_view_details"] 	= "Veure detalls";
$pgv_lang["lb_edit_media"] 		= "Edita els detalls d'aquest objecte audiovisual";
$pgv_lang["lb_delete_media"] 	= "Elimina aquest objecte audiovisual - Solament s'esborrarà el vincle a aquesta persona - No s'esborrarà l'arxiu audiovisual ni altres vincles";
$pgv_lang["lb_view_media"] 		= "Veure els detalls d'aquest objecte audiovisual.\nMés altres opcions d'objectes - Pàgina del visor d'objectes";
$pgv_lang["lb_add_media"] 		= "Afegeix un nou objecte audiovisual";
$pgv_lang["lb_add_media_full"] 	= "Afegeix un nou objecte audiovisual a aquesta persona";
$pgv_lang["lb_link_media"] 		= "Vincula a un objecte audiovisual existent";
$pgv_lang["lb_link_media_full"] = "Vincula aquesta persona a un objecte audiovisual existent";

$pgv_lang["lb_slide_show"] 		= "Projecció d'imatges";
$pgv_lang["turn_edit_ON"] 		= "Activa el modus d'edició";
$pgv_lang["turn_edit_OFF"] 		= "Desactiva el modus d'edició";

$pgv_lang["lb_source_avail"] 	= "Hi ha informació de la font - Polseu aquí.";

$pgv_lang["lb_private"] 		= "Imatge vinculada <br /> a una persona privada";
$pgv_lang["lb_view_source_tip"] = "Veure la font : ";
$pgv_lang["lb_view_details_tip"] = "Veure els detalls de l'objecte : ";

?>
