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
 * @version $Id: lang.de.php 6583 2009-12-21 12:55:11Z canajun2eh $
 * @author Brian Holland
 * @translator  Gerd Kroll
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.2.2
$pgv_lang["TYPE__notinDB"]			= "Nicht in der Datenbank vorhanden";
$pgv_lang["ROW_TYPE__notinDB"]		= $pgv_lang["TYPE__notinDB"];


// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]	= "Zurück zur Verwaltungsseite";
$pgv_lang["lb_manage"]				= "Lightbox-Konfiguration verwalten";
$pgv_lang["lb_generalhelp"]     = "Persönliche Fakten Seite - Lightbox Allgemeine Hilfe";
$pgv_lang["lb_viewedit"]		= "Zeigen/Bearbeiten";
$pgv_lang["lb_viewnotes"]		= "Bemerkungen zeigen";
$pgv_lang["lb_viewdetails"]		= "Details zeigen";
$pgv_lang["lb_viewsource"]		= "Quelle zeigen";
$pgv_lang["lb_editmedia"]		= "Medienobjekt bearbeiten";
$pgv_lang["lb_unlinkmedia"]		= "Verbindung löschen";
$pgv_lang["lb_balloon_true"]	= "Sprechblase";
$pgv_lang["lb_balloon_false"]	= "Normal";
$pgv_lang["lb_tt_balloon"]		= "Persönliche Fakten Seite - Album Ordner Miniaturbild Bereich";
$pgv_lang["lb_ttAppearance"]	= "Behandlung der Links zu Bemerkungen";
$pgv_lang["view_lightbox"]		= "Von ... Album zeigen";
$pgv_lang["lb_notes"]			= "Bemerkungen";
$pgv_lang["lb_notes_info"]		= "";
 

// Added in VERSION 4.1.4 
$pgv_lang["lb_details"]			= "Details";
$pgv_lang["lb_detail_info"]		= "Details des Medien-Objektes zeigen ...  weitere Optionen - Medienbetrachter Seite";
$pgv_lang["lb_pause_ss"]		= "Diavortrag unterbrechen";
$pgv_lang["lb_start_ss"]		= "Diavortrag Start";
$pgv_lang["lb_music"]			= "Ton ein/abschalten";
$pgv_lang["lb_zoom_off"]		= "Zoom abschalten";
$pgv_lang["lb_zoom_on"]			= "Zoom ist eingeschaltet ... Sie können mit dem Mausrad oder den <b>i</b> und <b>o</b> Tasten die Zoom-Funktionen bewirken.";
$pgv_lang["lb_close_win"]		= "Fenster schließen";


// VERSION 4.1.3 
// Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]		= "Album Konfiguration";
$pgv_lang["mediatab"]       		= "Persönliche Fakten Seite - Multimedia Ordner";
$pgv_lang["lb_appearance"]			= "Darstellung";
$pgv_lang["lb_linkAppearance"]		= "Darstellung der Links";
$pgv_lang["lb_MP3Only"]				= "(nur mp3 unterstützt)";
$pgv_lang["lb_admin_error"]         = "Nur für Verwalter bestimmt";
$pgv_lang["lb_toAlbumPage"]			= "Zurück zur Album-Seite";

$pgv_lang["lb_icon"]				= "Ikon";
$pgv_lang["lb_text"]				= "Text";
$pgv_lang["lb_both"]				= "Beide";
$pgv_lang["lb_none"]				= "Keine";

$pgv_lang["lb_al_head_links"]		= "Persönliche Fakten Seite - Album Ordner Kopfbereich";
$pgv_lang["lb_al_thumb_links"]		= "Persönliche Fakten Seite - Album Ordner Miniaturbild Bereich";
$pgv_lang["lb_ml_thumb_links"]		= "MultiMedia Seite - Minaturbilder";
$pgv_lang["lb_music_file"]			= "Dia-Vortrag Tonspur";
$pgv_lang["lb_musicFileAdvice"]		= "Lagerort der gewählten Tonspur (wenn leer: keine Tonspur)";
$pgv_lang["lb_ss_speed"]			= "Dia-Vortrag Geschwindigkeit";
$pgv_lang["lb_ss_SpeedAdvice"]		= "Dia-Vortrag Geschwindigkeit in Sekunden";

$pgv_lang["lb_transition"]			= "Dia-Wechsel Geschwindigkeit";
$pgv_lang["lb_normal"]				= "Normal";
$pgv_lang["lb_double"]				= "Doppelt";
$pgv_lang["lb_warp"]				= "Super";
$pgv_lang["lb_url_dimensions"]		= "URL-Fenster Maß";
$pgv_lang["lb_url_dimensionsAdvice"]	= "Breite und Höhe des URL-Fensters in Pixel";
$pgv_lang["lb_width"]				= "Breite";
$pgv_lang["lb_height"]				= "Höhe";
									
									
									
// ---------------------------------------------------------------------
$pgv_lang["lb_help"] = "Album Hilfe";
$pgv_lang["lightbox"] = "Album";
$pgv_lang["showmenu"] = "Menü zeigen:";

$pgv_lang["TYPE__footnotes"] = "Fußnoten";

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

$pgv_lang["census_text"]  	 = "\"UK census images have been obtained from \"The National Archives\", the custodian of the original records, ";
$pgv_lang["census_text"] 	.= "and appear here with their approval on the condition that no commercial use is made of them without permission." . "\n" ;
$pgv_lang["census_text"] 	.= "Requests for commercial publication of these or other UK census images appearing on this website should be directed to: ";
$pgv_lang["census_text"] 	.= "Image Library, The National Archives, Kew, Surrey, TW9 4DU, United Kingdom.\"" . "\n" ;

$pgv_lang["lb_edit_details"] = "Einzelheiten bearbeiten";
$pgv_lang["lb_view_details"] = "Einzelheiten zeigen";
$pgv_lang["lb_edit_media"] = "Einzelheiten des Medien-Objektes bearbeiten";
$pgv_lang["lb_delete_media"] = "Medien-Objekt löschen - Nur die Verbindung zu dieser Person wird gelöscht -- Medien-Datei und andere Verbindungen werden nicht gelöscht.";
$pgv_lang["lb_view_media"] = "Einzelheiten des Medien-Objektes zeigen.\nAndere Bearbeitungs-Optionen sind auf der Medien-Betrachter Seite zu finden";
$pgv_lang["lb_add_media"] = "Neues Medien-Objekt hinzufügen";
$pgv_lang["lb_add_media_full"] = "Neues Medien-Objekt zu dieser Person hinzufügen";
$pgv_lang["lb_link_media"] = "Mit bereits bestehendem Medien-Objekt verbinden";
$pgv_lang["lb_link_media_full"] = "Diese Person mit bereits bestehendem Medien-Objekt verbinden";

$pgv_lang["lb_slide_show"] = "Dia-Vortrag";
$pgv_lang["turn_edit_ON"] = "Bearbeitungs-Modus EIN schalten";
$pgv_lang["turn_edit_OFF"] = "Bearbeitungs-Modus AUS schalten";

$pgv_lang["lb_source_avail"] = "Quellen-Details sind vorhanden -- Hier klicken.";

$pgv_lang["lb_private"] = "Dieses Bild ist mit einer<br />privaten Person verbunden";
$pgv_lang["lb_view_source_tip"] = "Quelle zeigen: ";
$pgv_lang["lb_view_details_tip"] = "Einzelheiten zeigen: ";

?>
