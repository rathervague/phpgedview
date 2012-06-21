<?php
/**
 * Polish Language file for PhpGedView.
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
 * @subpackage BatchUpdate
 * @author Łukasz Wileński <wooc@users.sourceforge.net>
 * @version $Id: lang.pl.php 6932 2010-02-15 20:06:14Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]			="Uaktualnij informacje";
$pgv_lang["bu_update_chan"]			="Uaktualnij wpis CHAN (ostatnia zmiana)";
$pgv_lang["bu_nothing"]				="Nic nie znaleziono.";
$pgv_lang["bu__desc"]				="Wybierz informację do uaktualnienia z listy";
$pgv_lang["bu_button_update"]		="Uaktualnij";
$pgv_lang["bu_button_update_all"]	="Uaktualnij wszystkie";
$pgv_lang["bu_button_delete"]		="Usuń";
$pgv_lang["bu_button_delete_all"]	="Usuń wszystkie";

$pgv_lang["bu_search_replace"]		="Wyszukaj i zastąp";
$pgv_lang["bu_search_replace_desc"]	="Wyszukaj i/lub zastąp dane w Twoim pliku GEDCOM używając prostego wyszukiwania lub zaawansowanego podstawiania do wzoru.";
$pgv_lang["bu_search"]			="Wyszukaj tekst";
$pgv_lang["bu_replace"]			="Zastąp tekst";
$pgv_lang["bu_method"]			="Metoda wyszukiwania";
$pgv_lang["bu_exact"]			="Dokładny tekst";
$pgv_lang["bu_exact_desc"]		="Dopasuje dokładny tekst, nawet jeśli występuje w środku wyrazu.";
$pgv_lang["bu_words"]			="Tylko całe wyrazy";
$pgv_lang["bu_words_desc"]		="Dopasuje dokładny tekst, tylko gdy jest wyrazem.";
$pgv_lang["bu_wildcards"]		="Znaki kluczowe";
$pgv_lang["bu_wildcards_desc"]	="Użyj &laquo;?&raquo; by zastąpić pojedynczy dowolny znak, lub użyj &laquo;*&raquo; by zastąpić wiele dowolnych znaków.";
$pgv_lang["bu_regex"]			="Wyrażenia regularne";
$pgv_lang["bu_regex_desc"]		="Używanie wyrażeń regularnych jest zaawansowaną techniką wyszukiwania. Więcej informacji na: <a href=\"http://php.net/manual/en/regexp.reference.php\" target=\"_new\">php.net/manual/pl/regexp.reference.php</a>.";
$pgv_lang["bu_regex_bad"]		="Wyrażenia regularne zawierają błąd i nie będą użyte.";
$pgv_lang["bu_case"]			="Nie uwzględniaj wielkości liter";
$pgv_lang["bu_case_desc"]		="Zaznacz by traktować tak samo małe i wielkie litery.";

$pgv_lang["bu_birth_y"]			="Dodaj brakujące wpisy urodzin";
$pgv_lang["bu_birth_y_desc"]	="Możesz ulepszyć działanie PGV zapewniając, by wszystkie osoby w bazie posiadały wpis urodzin.";

$pgv_lang["bu_death_y"]			="Dodaj brakujące wpisy śmierci";
$pgv_lang["bu_death_y_desc"]	="Możesz ulepszyć działanie PGV zapewniając, by wszystkie osoby w bazie posiadały (gdy prawidłowy) wpis śmierci.";

$pgv_lang["bu_married_names"]	="Dodaj brakujące nazwiska po ślubie";
$pgv_lang["bu_married_names_desc"]	="Możesz łatwiej znaleźć kobiety zamężne wprowadzając ich nazwiska po ślubie.<br/>Jednakże nie wszystkie kobiety przyjmują nazwiska męża po ślubie, więc zachowaj szczególną uwagę korzystając z tej funkcji, by nie wprowadzić niepoprawnych danych do bazy.";
$pgv_lang["bu_surname_option"]	="Opcje nazwiska";
$pgv_lang["bu_surname_replace"]	="Nazwisko żony zastąp nazwiskiem męża";
$pgv_lang["bu_surname_add"]		="Nazwisko panieńskie żony staje się nowym imieniem";

$pgv_lang["bu_name_format"]		="Popraw wpisy imion i nazwisk";
$pgv_lang["bu_name_format_desc"]="Poprawia wpisy NAME z 'Jan/KOWALSKI/' lub 'Jan /KOWALSKI', które są generowane przez starsze programy genealogiczne, na 'Jan /KOWALSKI/'.";	 

$pgv_lang["bu_duplicate_links"] ="Usuń powtarzające się odnośniki";
$pgv_lang["bu_duplicate_links_desc"] ="Częstym błędem jest posiadanie kilku odnośników do tego samego wpisu, na przykład to samo dziecko jest dodane więcej niż raz do rodziny.";

$pgv_lang["bu_tmglatlon"]		="Popraw współrzędne geograficzne z programu TMG";
$pgv_lang["bu_tmglatlon_desc"]	="Zmienia sposób zapisu współrzędnych geograficznych wykorzystywany w programie The Master Genealogist's  na format standardu GEDCOM 5.5.1 czytelny dla PGV. Uwaga: zmiany nie są podświetlone.";
?>