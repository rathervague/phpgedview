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
 * @subpackage GoogleMap
 * @author: Łukasz Wileński
 * @version $Id: lang.pl.php 6708 2010-01-13 20:46:55Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]				= "Mapa";
$pgv_lang["no_gmtab"]				= "Brak danych o mapie dla tej osoby";
$pgv_lang["gm_disabled"]			= "Moduł Googlemap wyłączony";

$pgv_lang["gm_redraw_map"]			= "Odśwież mapę";
$pgv_lang["gm_map"]					= "Mapa";
$pgv_lang["gm_physical"]			= "Terenowa";
$pgv_lang["gm_satellite"]			= "Satelitarna";
$pgv_lang["gm_hybrid"]				= "Hybrydowa";

// Configuration texts
$pgv_lang["gm_manage"]				= "Zarządzaj konfiguracją Googlemap";
$pgv_lang["configure_googlemap"]	= "Konfiguracja Googlemap";
$pgv_lang["gm_admin_error"]			= "Strona tylko dla administratorów";
$pgv_lang["gm_db_error"]			= "Tabela placelocation nie została znaleziona w bazie danych";
$pgv_lang["gm_table_created"]		= "Tabela placelocation została utworzona";
$pgv_lang["googlemap_enable"]		= "Włącz Googlemap";
$pgv_lang["googlemapkey"]			= "Klucz Google Map API";
$pgv_lang["gm_map_type"]			= "Domyślny typ mapy";
$pgv_lang["gm_map_size"]			= "Wielkość mapy (w pikselach)";
$pgv_lang["gm_map_size_x"]			= "Szerokość";
$pgv_lang["gm_map_size_y"]			= "Wysokość";
$pgv_lang["gm_map_zoom"]			= "Współczynnik powiększenia mapy";
$pgv_lang["gm_digits"]				= "cyfr(y)";
$pgv_lang["gm_min"]					= "Min.";
$pgv_lang["gm_max"]					= "Maks.";
$pgv_lang["gm_default_level0"]		= "Domyślna wartość głównego poziomu";
$pgv_lang["gm_nof_levels"]			= "Liczba poziomów";
$pgv_lang["gm_config_per_level"]	= "Konfiguracja dla poziomu";
$pgv_lang["gm_name_prefix"]			= "Przedrostek";
$pgv_lang["gm_name_postfix"]		= "Przyrostek";
$pgv_lang["gm_name_pre_post"]		= "Porządek przedrostka i przyrostka";
$pgv_lang["gm_level"]				= "Poziom";
$pgv_lang["gm_pp_none"]				= "Brak";
$pgv_lang["gm_pp_n_pr_po_b"]		= "Normalny, przedrostek, przyrostek, oba";
$pgv_lang["gm_pp_n_po_pr_b"]		= "Normalny, przyrostek, przedrostek, oba";
$pgv_lang["gm_pp_pr_po_b_n"]		= "Przedrostek, przyrostek, oba, normalny";
$pgv_lang["gm_pp_po_pr_b_n"]		= "Przyrostek, przedrostek, oba, normalny";
$pgv_lang["gm_pp_pr_po_n_b"]		= "Przedrostek, przyrostek, normalny, oba";
$pgv_lang["gm_pp_po_pr_n_b"]		= "Przyrostek, przedrostek, normalny, oba";
$pgv_lang["googlemap_coord"]		= "Wyświetl współrzędne";
//wooc place hierarchy
$pgv_lang["gm_place_hierarchy"]		= "Użyj Googlemap do wyświetlania hierarchii miejsc";
$pgv_lang["gm_ph_map_size"]			= "Wielkość mapy w hierarchii miejsc (w pikselach)";
$pgv_lang["gm_ph_marker_type"]		= "Typ znacznika miejsca w hierarchii miejsc";
$pgv_lang["gm_standard_marker"]		= "Standardowy";
$pgv_lang["gm_no_coord"]			= "Miejsce nie ma ustawionych współrzędnych";
$pgv_lang["gm_ph_placenames"]		= "Wyświetl skrócone nazwy miejsc";
$pgv_lang["gm_ph_count"]			= "Wyświetl liczbę osób i rodzin połączonych z danym miejscem";
$pgv_lang["gm_ph_wheel"]			= "Użyj rolki myszki do przybliżania/oddalania";
$pgv_lang["gm_ph_controls"]			= "Ukryj kontrolki mapy";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]	= "Edytuj położenie geograficzne miejsc";
$pgv_lang["pl_no_places_found"]		= "Nie znaleziono podanych miejsc";
$pgv_lang["pl_zoom_factor"]			= "Powiększenie";
$pgv_lang["pl_place_icon"]			= "Ikona";
$pgv_lang["pl_edit"]				= "Edytuj położenie geograficzne";
$pgv_lang["pl_add_place"]			= "Dodaj nowe miejsce";
$pgv_lang["pl_import_gedcom"]		= "Importuj z bieżącego GEDCOMu";
$pgv_lang["pl_import_all_gedcom"]	= "Importuj ze wszystkich GEDCOMów";
$pgv_lang["pl_import_file"]			= "Importuj z pliku";
$pgv_lang["pl_export_file"]			= "Eksportuj aktualny widok do pliku";
$pgv_lang["pl_export_all_file"]		= "Eksportuj wszystkie lokalizacje do pliku";
$pgv_lang["pl_north_short"]			= "N";
$pgv_lang["pl_south_short"]			= "S";
$pgv_lang["pl_east_short"]			= "E";
$pgv_lang["pl_west_short"]			= "W";
$pgv_lang["pl_places_localfile"]	= "Plik znajdujący się na serwerze zawierający miejsca (CSV)";
$pgv_lang["pl_places_filename"]		= "Plik zawierający miejsca (CSV)";
$pgv_lang["pl_clean_db"]			= "Wyczyść wszystkie miejsca przed importem";
$pgv_lang["pl_update_only"]			= "Aktualizuj tylko istniejące miejsca";
$pgv_lang["pl_overwrite_data"]		= "Nadpisać dane lokalizacji danymi z pliku";
$pgv_lang["pl_use_this_value"]		= "Użyj tej wartości";
$pgv_lang["pl_precision"]			= "Precyzja współrzędnych";
$pgv_lang["pl_country"]				= "Kraj";
$pgv_lang["pl_countries"]			= "Państwa";
$pgv_lang["pl_state"]				= "Województwo";
$pgv_lang["pl_county"]				= "Powiat";
$pgv_lang["pl_city"]				= "Miejscowość";
$pgv_lang["pl_place"]				= "Miejsce";
$pgv_lang["pl_neighborhood"]		= "Sąsiedztwo";
$pgv_lang["pl_house"]				= "Dom";
$pgv_lang["pl_max"]					= "Maksimum";
$pgv_lang["pl_delete"]				= "Usuń lokalizację";
$pgv_lang["pl_search_level"]		= "Szukaj na tym poziomie";
$pgv_lang["pl_search_all"]			= "Szukaj wszystkie";
$pgv_lang["pl_unknown"]				= "nieznane";

$pgv_lang["pl_flag"]				= "Flaga";
$pgv_lang["flags_edit"]				= "Wybierz flagę";
$pgv_lang["pl_change_flag"]			= "Zmień flagę";
$pgv_lang["pl_remove_flag"]			= "Usuń flagę";
$pgv_lang["pl_no_flags"]			= "<b>Brak folderu z flagami</b><br /><br />Do działania flag proszę skopiować folder <b>flags</b> z katalogu <b>images</b> do katalogu <b>places</b> lub skorzystać z <b>pełnej wersji PGV</b>.";

$pgv_lang["pl_remove_location"]		= "Usunąć to miejsce?";
$pgv_lang["pl_delete_error"]		= "Miejsce nie zostało usunięte: ta lokalizacja zawiera lokalizacje pochodne";
$pgv_lang["list_inactive"]			= "Pokaż miejsca nieaktywne";

//Placecheck specific text
$pgv_lang["placecheck"]				= "Sprawdź miejsca";
$pgv_lang["placecheck_text"]		= "Lista wszystkich miejsc z danego pliku GEDCOM. Domyślnie NIE BĘDĄ ZAŁĄCZONE miejsca identyczne znajdujące się w pliku GEDCOM i tablicach miejsc GoogleMap";
$pgv_lang["placecheck_top"]			= "Miejsca najwyższego poziomu";
$pgv_lang["placecheck_one"]			= "Miejsca pierwszego poziomu";
$pgv_lang["placecheck_select1"]		= "Wybierz najwyższy poziom...";
$pgv_lang["placecheck_select2"]		= "Wybierz następny poziom...";
$pgv_lang["placecheck_key"]			= "Kod koloru użytego poniżej";
$pgv_lang["placecheck_key1"]		= "to miejsce i te współrzędne nie istnieją w tablicach miejsc GoogleMap";
$pgv_lang["placecheck_key2"]		= "to miejsce istnieje w tablicach miejsc GoogleMap, ale nie ma współrzędnych";
$pgv_lang["placecheck_key3"]		= "ten poziom jest pusty w Twoim pliku GEDCOM. Powinien być dodany do tablic miejsc GoogleMap jako miejsce \"nieznane\" z współrzędnymi z poziomu powyższego zanim dodasz jakiekolwiek miejsce do następnego poziomu";
$pgv_lang["placecheck_key4"]		= "ten poziom jest pusty w Twoim pliku GEDCOM, ale w tablicach miejsc GoogleMap istnieje jako miejsce 'nieznane' wraz ze współrzędnymi. Nie wymagana jest edycja dopóki ten poziom nie będzie wprowadzony";
$pgv_lang["placecheck_head"]		= "Lista miejsc dla pliku GEDCOM";
$pgv_lang["placecheck_gedheader"]	= "Dane z pliku GEDCOM<br />(tag 2 PLAC)";
$pgv_lang["placecheck_gm_header"]	= "Tablica miejsc GoogleMap";
$pgv_lang["placecheck_unique"]		= "Liczba unikalnych miejsc";
$pgv_lang["placecheck_zoom"]		= "Zoom=";
$pgv_lang["placecheck_options"]		= "Opcje listy Sprawdź Miejsca";
$pgv_lang["placecheck_filter_text"] = "Opcje filtrowania listy";
$pgv_lang["placecheck_match"]		= "Dołącz identyczne miejsca: ";
$pgv_lang["placecheck_lati"]		= "Szerokość";
$pgv_lang["placecheck_long"]		= "Długość";

// Pedigree map
$pgv_lang["pedigree_map"]				= "Mapa rodowa";
$pgv_lang["pm_grandparent"] 			= "Dziadek/Babcia";
$pgv_lang["pm_grandmother"] 			= "Babcia";
$pgv_lang["pm_grandfather"] 			= "Dziadek";
$pgv_lang["pm_gt"]						= "Pra";
$pgv_lang["pm_zoom_in"]					= "Powiększ";
$pgv_lang["pm_zoom_out"]				= "Zmniejsz";
$pgv_lang["zoom_in_here"]				= "Powiększ&nbsp;tutaj";
$pgv_lang["zoom_out_here"]				= "Zmniejsz&nbsp;tutaj";
$pgv_lang["centre_map"]					= "Wycentruj&nbsp;mapę&nbsp;tutaj";
$pgv_lang["pm_individual_displayed"]	= "osoba jest wyświetlona spośród wszystkich";
$pgv_lang["pm_2individuals_displayed"]	= "osoby są wyświetlone spośród wszystkich";	// For Polish 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["pm_individuals_displayed"]	= "osób jest wyświetlonych spośród wszystkich";
$pgv_lang["pm_individual_private"]		= "osoby dane są prywatne.";
$pgv_lang["pm_individuals_private"]		= "osób dane są prywatne.";
$pgv_lang["pm_missing_birth"]			= "osoba ma nieznane współrzędne miejsca urodzenia:";
$pgv_lang["pm_2missing_births"]			= "osoby mają nieznane współrzędne miejsca urodzenia:";	// For Polish 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["pm_missing_births"]			= "osób ma nieznane współrzędne miejsca urodzenia:";
$pgv_lang["pm_missings"]				= "Brak przodków w bazie danych.";
$pgv_lang["pm_from"]					= "z";
$pgv_lang["pm_for"]						= "-";
$pgv_lang["pm_gens"]					= "pokoleń";
$pgv_lang["pm_root"]					= "Główna osoba";
?>
