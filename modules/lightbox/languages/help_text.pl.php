<?php
/**
 * Polish language file for Lightbox Album module
 *
 * Display media Items using Lightbox
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
 * @subpackage Module
 * @author Łukasz Wileński <wooc@users.sourceforge.net>
 * @version $Id: help_text.pl.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6

$pgv_lang["LIGHTBOX_CONFIG"]		= "Konfiguracja Lightbox-Album";
$pgv_lang["LIGHTBOX_CONFIG_help"]	= "~#pgv_lang[LIGHTBOX_CONFIG]#~<br /><br />W tym miejscu możesz skonfigurować wszystkie aspekty modułu  Lightbox-Album.";

// Lightbox general help file  ---------------------------------------------------------------------------------------------------------
$pgv_lang["lb_generalLegend"]		 = "Album Lightbox - Pomoc Ogólna";
$pgv_lang["lb_general_help"]		 = "~#pgv_lang[lb_generalLegend]#~<br /><br /><ul>#pgv_lang[lb_general_help1]##pgv_lang[lb_general_help2]##pgv_lang[lb_general_help3]##pgv_lang[lb_general_help4]##pgv_lang[lb_general_help5]##pgv_lang[lb_general_help6]##pgv_lang[lb_general_help7]##pgv_lang[lb_general_help8]##pgv_lang[lb_general_help9]##pgv_lang[lb_general_help10]#</ul>";
$pgv_lang["lb_general_help1"]		 = "<li>~Oglądanie notatek lub szczegółów powiązanych z obrazem~<br /><b>Rozwijane menu:</b><br />Najedź kursorem na link <b>#pgv_lang[lb_viewedit]#</b> poniżej miniaturki a rozwinie się menu. Dostępne opcje: <b>#pgv_lang[lb_viewnotes]#</b> (jeśli jakieś są dostępne), <b>#pgv_lang[lb_viewdetails]#</b> oraz <b>#pgv_lang[lb_viewsource]#</b>.<br /><br /><b>Wyświetlanie:</b><br />Klikając <b>#pgv_lang[lb_viewnotes]#</b> zostanie wyświetlony dymek lub okienko z notatkami. Kliknij ponownie by je wyłączyć.<br />Klikając <b>#pgv_lang[lb_viewdetails]#</b> zostaniesz przeniesiony do strony przeglądarki multimediów, natomiast <b>#pgv_lang[lb_viewsource]#</b> przenosi (jeśli jesteś zalogowany) do strony źródła.<br /><br /><b>Edytowanie:</b><br />(Dostępna jest opcja \"Edytuj\" dla użytkowników z uprawnieniami edytorskimi)<br /><br /><b>Otwarty obraz:</b><br />Podczas oglądania obrazu ikony <b>#pgv_lang[lb_viewnotes]#</b> i <b>#pgv_lang[lb_viewdetails]#</b> są dostępne w części poniżej obrazu.<br /><br /></li>";
$pgv_lang["lb_general_help2"]		 = "<li>~Oglądanie obrazów~<br />Kliknij na miniaturkę. Tytuł obrazu będzie widoczny nad wyświetlanym obrazem.<br /><br /></li>";
$pgv_lang["lb_general_help3"]		 = "<li>~Używanie powiększenia~<br /><b>WAŻNE:</b><br />Pokaz slajdów musi być wyłączony aby była dostępna ikona powiększenia.<br /><br /><b>Włącz powiększenie:</b><br />Jeśli jest widoczny zielony znak plusa w prawym dolnym rogu obrazka, powiększenie jest dostępne. Użyj rolki myszki aby zamieniać rozmiar obrazka, lub użyj klawiszy \"I\" oraz \"O\". Ikona zielonego plusa się zmieni na czerwony minus.<br />Jeśli rozmiar powiększonego obrazu jest większy niż rozmiar strony, użyj strzałek aby przesuwać obraz.<br /><br /><b>Wyłącz powiększenie:</b><br />Aby powrócić do normalnego widoku kliknij dwa razy na obraz, lub kliknij na czerwony znak minusa w prawym dolnym rogu, lub użyj klawisza \"Z\".<br /><br /></li>";
$pgv_lang["lb_general_help4"]		 = "<li>~Zamknij obraz~<br />Kliknij na zewnątrz obrazu, lub kliknij na czerwony <font color=red><b>X</b></font> w prawym dolnym rogu, lub użyj klawisza \"X\".<br /><br /></li>";
$pgv_lang["lb_general_help5"]		 = "<li>~Pokaż następny lub poprzedni obraz~<br />Kiedy kursor myszki jest nad obrazem i jeśli powiększenie jest wyłączone, po lewej stronie pojawi się symbol <b>&lt;</b>, a po prawej <b>&gt;</b>. Kliknij w dowolne miejsce po prawej stronie obrazu aby zobaczyć następny lub po lewej stronie by zobaczyć poprzedni obraz.<br /><br /></li>";
$pgv_lang["lb_general_help6"]		 = "<li>~Skok do innego obrazu w Albumie~<br />Kiedy kursor myszki jest w górnej części obrazu i jeśli powiększenie jest wyłączone, będzie dostępna galeria miniaturek. Jeśli to konieczne przesuń kursor myszki w lewo lub w prawo by zobaczyć kolejne cześci galerii. Kliknij na wybraną miniaturkę aby zobaczyć obraz.<br /><br />Przyciski <b>Następny</b>, <b>Poprzedni</b> oraz <b>Skok do innego obrazu w Albumie</b> działają również podczas pokazu slajdów.<br /><br /></li>";
$pgv_lang["lb_general_help7"]		 = "<li>~Uruchomienie pokazu slajdów~<br />Kliknij na ikonkę startu w lewym dolnym rogu. Jeśli jest dostępny plik z muzyką, pojawi się ikonka głośnika. Kliknij na nią aby włączyć lub wyłączyć muzykę. Kliknij na przycisk pauzy aby zatrzymać pokaz.<br /><br /></li>";
$pgv_lang["lb_general_help8"]		 = "<li>~Nawigacja...~<br />Użyj tabeli <b>#pgv_lang[view_lightbox]#</b> znajdującej się po prawej stronie aby wybrać Album innej osoby.<br /><br /></li>";
$pgv_lang["lb_general_help9"]		 = "<li>~Uwaga:~<br />Miniaturki, które nie są obrazami, takie jak pliki PDF, audio lub wideo, mogą być oglądane oddzielnie, ale nie będą dostępne w pokazie slajdów.<br /><br /></li>";
$pgv_lang["lb_general_help10"]		 = "<li>~Uwaga dla administratora:~<br />Jeśli jakieś pliki obrazów (jpg, bmp, gif, itp.) reprezentujące typy obrazów jak fotografie, certyfikaty, dokumenty, itp. pojawią się w sekcji <b>Inne</b>, konieczne będzie ustawienie typu poprzez ustawienie wartości <b>#factarray[TYPE]#</b> dla tych multimediów.</li>";
//End Lightbox General Help File ----------------------------------------------------------------------------------------------------------------------------- 
$pgv_lang["lb_tt_balloonLegend"]		= "Album - Miniaturki - Okienko notatek";
$pgv_lang["lb_tt_balloon_help"]			= "~#pgv_lang[lb_tt_balloonLegend]#~<br />Ta opcja pozwala wybrać czy notatki danej miniaturki będą wyświetlane w dymku czy w zwykłym okienku (tzw. tooltip).<br /><br />W dymku zostaną wyświetlone notatki danego obiektu multimedialnego (jeśli istnieją).<br />";

// VERSION 4.1.3 
$pgv_lang["mediatabLegend"]				= "Właściwości zakładki Multimedia";
$pgv_lang["mediatab_help"]				= "~#pgv_lang[mediatab]#~<br />Ta opcja pozwala na określenie czy zakładka Multimediów ma być widoczna na stronie #pgv_lang[indi_info]#.<br /><br />Jeśli ta opcja jest ustawiona na <b>#pgv_lang[hide]#</b>, tylko zakładka <b>#pgv_lang[lightbox]#</b> będzie widoczna.<br />";
$pgv_lang["lb_al_head_linksLegend"]		= "Właściwości zakładki Album";
$pgv_lang["lb_al_head_links_help"]		= "~#pgv_lang[lb_al_head_linksLegend]#~<br />Ta opcja pozwala na określenie czy nagłowek zakładki #pgv_lang[lightbox]#, który zawiera odnośniki kontroli różnych opcji Albumu, powinien zawierać tylko ikony, tylko tekst, czy ikony wraz z tekstem.<br /><br />Opcja <b>#pgv_lang[lb_icon]#</b> raczej nie jest bardzo pomocna dopóki nie zobaczysz podpisów gdy najedziesz kursorem na nie.<br />";
$pgv_lang["lb_al_thumb_linksLegend"]	= "Wygląd odnośnika";
$pgv_lang["lb_al_thumb_links_help"]		= "~#pgv_lang[lb_al_thumb_linksLegend]#~<br />Ta opcja pozwala na określenie czy odnośniki znajdujące się przy miniaturkach będą zawierały tekst lub ikony. Odnośniki te pozwalają na edytowanie szczegółów lub usuwanie multimediów.<br />";
$pgv_lang["lb_ml_thumb_linksLegend"]	= "Strona Multimediów - wygląd odnośników";
$pgv_lang["lb_ml_thumb_links_help"]		= "~#pgv_lang[lb_ml_thumb_linksLegend]#~<br />Ta opcja pozwala na określenie czy odnośniki znajdujące się przy miniaturkach będą zawierały tekst, ikony lub obie rzeczy jednocześnie. Odnośniki te pozwalają na edytownie różnych szczegółów multimediów.<br /><br />Opcja <b>#pgv_lang[lb_none]#</b> ukrywa te odnośniki i sprawia, że użytkownik nie będzie posiadał żadnych praw do edycji.<br />";
$pgv_lang["lb_ss_speedLegend"]			= "Prędkość pokazu slajdów";
$pgv_lang["lb_ss_speed_help"]			= "~#pgv_lang[lb_ss_speedLegend]#~<br />Ta opcja określa czas przez jaki ma być wyświetlany jeden element w pokazie slajdów.<br />";
$pgv_lang["lb_music_fileLegend"]		= "Muzyka podczas pokazu slajdów";
$pgv_lang["lb_music_file_help"]			= "~#pgv_lang[lb_music_fileLegend]#~<br />Ta opcja pozwala na określenie muzyki, jaka ma być odtwarzana podczas pokazu slajdów. Jeśli zostawisz to pole puste muzyka nie będzie grała.<br /><br />Ta opcja pozwala na ustawienie jedynie plików muzycznych w formcie mp3. Inne nie będą odtwarzane.<br />";
$pgv_lang["lb_transitionLegend"]		= "Opóźnienie zmiany obrazów";
$pgv_lang["lb_transition_help"]			= "~#pgv_lang[lb_transitionLegend]#~<br />Ta opcja pozwala na określenie opóźnienia zmiany obrazów i ma zastosowanie podczas pokazu slajdów, jak również podczas zmiany obrazu na następny przy zatrzymanym pokazie slajdów.<br /><br />Opcja <b>#pgv_lang[lb_none]#</b> wyłącza opóźnienie i następny obraz natychmiast zastępuje poprzedni bez widocznych przejść.<br />";
$pgv_lang["lb_url_dimensionsLegend"]	= "Szerokość i wysokość okna w pikselach"; 
$pgv_lang["lb_url_dimensions_help"]		= "~#pgv_lang[lb_url_dimensionsLegend]#~<br />Określa rozmiary okna, w którym zostanie wyświetlony obraz, gdy klikniesz na jego miniaturkę.<br /><br />Powinna być mniejsza niż rozmiar okna przeglądarki i rozdzielczość ekranu, na którym będą wyświetlane obrazy.<br />";

?>
