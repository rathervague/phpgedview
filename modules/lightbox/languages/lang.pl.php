<?php
/**
 * Polish language file for Lightbox Album module
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team. All rights reserved.
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
 * @author Łukasz Wileński <wooc@users.sourceforge.net>
 * @version $Id: lang.pl.php 6585 2009-12-21 16:08:46Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.2.2
$pgv_lang["TYPE__notinDB"]		= "Brak w bazie danych";
$pgv_lang["ROW_TYPE__notinDB"]	= $pgv_lang["TYPE__notinDB"];

// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]	= "Wróć do poprzedniej strony";
$pgv_lang["lb_manage"]				= "Zarządzaj konfiguracją Lightbox-Album";
$pgv_lang["lb_generalhelp"]     = "Strona informacji o osobie - Pomoc Ogólna - Lightbox";
$pgv_lang["lb_viewedit"]		= "Zobacz/Edytuj";
$pgv_lang["lb_viewnotes"]		= "Zobacz notatki";
$pgv_lang["lb_viewdetails"]		= "Zobacz szczegóły";
$pgv_lang["lb_viewsource"]		= "Zobacz źródło";
$pgv_lang["lb_editmedia"]		= "Edytuj multimedia";
$pgv_lang["lb_unlinkmedia"]		= "Skasuj odnośniki";
$pgv_lang["lb_balloon_true"]	= "Dymek";
$pgv_lang["lb_balloon_false"]	= "Normalne";
$pgv_lang["lb_tt_balloon"]		= "Strona informacji o osobie - Album - Miniaturki - Okienko notatek";
$pgv_lang["lb_ttAppearance"]	= "Wygląd okienka notatek";
$pgv_lang["view_lightbox"]		= "Zobacz Album ...";
$pgv_lang["lb_notes"]			= "Notatki";
$pgv_lang["lb_notes_info"]		= "";


// Added in VERSION 4.1.4 
$pgv_lang["lb_details"]			= "Szczegóły";
$pgv_lang["lb_detail_info"]		= "Pokaż szczegóły - Strona przeglądarki multimediów";
$pgv_lang["lb_pause_ss"]		= "Pauza";
$pgv_lang["lb_start_ss"]		= "Start";
$pgv_lang["lb_music"]			= "Wyłącz/Włącz Muzykę";
$pgv_lang["lb_zoom_off"]		= "Wyłącz zoom";
$pgv_lang["lb_zoom_on"]			= "Zoom jest włączony ... Użyj rolki myszki lub klawiszy I oraz O aby powiększyć lub pomniejszyć";
$pgv_lang["lb_close_win"]		= "Zamknij";

//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]		= "Konfiguracja <br />Lightbox-Album";
$pgv_lang["mediatab"]       		= "Strona informacji o osobie - Multimedia";
$pgv_lang["lb_appearance"]			= "Wyświetl zakładkę";
$pgv_lang["lb_linkAppearance"]		= "Wygląd odnośnika";
$pgv_lang["lb_MP3Only"]				= "tylko format mp3";
$pgv_lang["lb_admin_error"]			= "Strona tylko dla Administratora";
$pgv_lang["lb_toAlbumPage"]			= "Powrót do Albumu";

$pgv_lang["lb_icon"]				= "Ikona";
$pgv_lang["lb_text"]				= "Tekst";
$pgv_lang["lb_both"]				= "Ikona i tekst";
$pgv_lang["lb_none"]				= "Brak";

$pgv_lang["lb_al_head_links"]			= "Strona informacji o osobie - Album - Nagłówek";
$pgv_lang["lb_al_thumb_links"]			= "Strona informacji o osobie - Album - Miniaturki";
$pgv_lang["lb_ml_thumb_links"]			= "Strona multimediów - Miniaturki";
$pgv_lang["lb_music_file"]				= "Muzyka podczas pokazu slajdów";
$pgv_lang["lb_musicFileAdvice"]			= "Lokalizacja pliku dźwiękowego (puste jeśli bez muzyki)";
$pgv_lang["lb_ss_speed"]				= "Szybkość pokazu slajdów";
$pgv_lang["lb_ss_SpeedAdvice"]			= "Szybkość pokazu slajdów w sekundach na jeden obraz";

$pgv_lang["lb_transition"]				= "Opóźnienie zmiany obrazów";
$pgv_lang["lb_normal"]					= "Normalne";
$pgv_lang["lb_double"]					= "Podwójne";
$pgv_lang["lb_warp"]					= "Różne";
$pgv_lang["lb_url_dimensions"]			= "Rozmiary okna";
$pgv_lang["lb_url_dimensionsAdvice"]	= "Szerokość i wysokość okna w pikselach";
$pgv_lang["lb_width"]					= "Szerokość";
$pgv_lang["lb_height"]					= "Wysokość";


// ---------------------------------------------------------------------


$pgv_lang["lb_help"] 		 = "Album - Pomoc";
$pgv_lang["lightbox"]		 = "Album";
$pgv_lang["showmenu"] 		 = "Pokaż Menu:";

$pgv_lang["TYPE__other"] 	 = "Inne";
$pgv_lang["TYPE__footnotes"] = "Notes";
$pgv_lang["census_text"]  	 = "" ;

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

$pgv_lang["lb_edit_details"] 	= "Edytuj szczegóły";
$pgv_lang["lb_view_details"] 	= "Pokaż szczegóły";
$pgv_lang["lb_edit_media"] 		= "Edytuj szczegóły dla tych multimediów";
$pgv_lang["lb_delete_media"] 	= "Usuń multimedia - usuwa tylko odnośnik do strony z informacjami o osobie - nie usuwa pliku lub innych odnośników";
$pgv_lang["lb_view_media"] 		= "Zobacz szczegóły oraz inne opcje multimediów - Strona przeglądarki multimediów";
$pgv_lang["lb_add_media"] 		= "Dodaj nowe <br />multimedia";
$pgv_lang["lb_add_media_full"] 	= "Dodaj nowe multimedia dla tej osoby";
$pgv_lang["lb_link_media"] 		= "Ustaw odnośnik do<br />istniejących multimediów";
$pgv_lang["lb_link_media_full"] = "Powiąż tą osobę z istniejącymi multimediami";

$pgv_lang["lb_slide_show"] 		= "Pokaz slajdów";
$pgv_lang["turn_edit_ON"] 		= "Włącz tryb edycji";
$pgv_lang["turn_edit_OFF"] 		= "Wyłącz tryb edycji";

$pgv_lang["lb_source_avail"] 	= "Dostępne informacje źródłowe";

$pgv_lang["lb_private"] 		= "Obraz połączony<br /> z danymi prywatnymi";
$pgv_lang["lb_view_source_tip"] = "Pokaż źródło: ";
$pgv_lang["lb_view_details_tip"] = "Pokaż szczegóły: ";

?>
