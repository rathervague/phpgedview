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
 * @version $Id: help_text.pl.php  2008-04-19 16:36:59Z wooc$
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_CONFIG"]           = "Konfiguracja Googlemap";
$pgv_lang["GOOGLEMAP_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />W tym miejscu możesz skonfigurować wszystkie aspekty modułu  Googlemap.";

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Włącz Googlemap";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Używając tej opcji możesz włączać i wyłączać moduł Googlemap.<br />Jeśli moduł jest wyłączony zakładka Mapa na stronie z danymi osoby jest pokazana, ale nie wyświetla mapy. Odnośnik konfiguracyjny dla administratora jest dostępny. Jeśli moduł jest wyłączony hierarchia miejsc jest wyświetlana standardowo.";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Google-map API key";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "~#pgv_lang[GOOGLEMAP_API_KEY]#~<br /><br />Wprowadź tu swój klucz Google Map API. Możesz go otrzymać tutaj: <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\">http://www.google.com/apis/maps/</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]         = "Typ mapy";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />Wybierz domyślny typ mapy. Dostępne typy map: zwykła Mapa, Satelitarna, Hybrydowa i Terenowa.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]         = "Rozmiar mapy";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Rozmiar mapy w pikselach. Mapa wyświetlana na stronie osoby będzie miała podany rozmiar.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]         = "Współczynnik powiększenia";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Minimalny i maksymalny współczynnik powiększenia dla mapy Google. 1 - cała mapa, 15 - pojedyncze domy. Współczynnik 15 dostępny jest tylko w pewnych miejscach.";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Precyzja współrzędnych";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "~#pgv_lang[GOOGLEMAP_PRECISION]#~<br /><br />Możesz określić precyzję dla wprowadzanych współrzędnych dla różnych poziomów. Na przykład: Kraj może być określony z precyzją 0 (brak miejsc po przecinku), podczas gdy miejscowości potrzebują precyzji 3-4 miejsc po przecinku.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Domyślna wartość głównego poziomu";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Tu możesz zdefiniować domyślną wartość dla głównego poziomu w hierarchii miejsc. Jeśli miejsce nie zostanie znaleznione jego nazwa zostanie dodana jako najwyższy poziom (kraj) i baza zostanie przeszukana ponownie.";

$pgv_lang["GM_NOF_LEVELS"]              = "Liczba poziomów miejsc";
$pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />W tym miejscu można określić liczbę poziomów w hierarchii miejsc, która jest używana przez moduł Googlemap.<br />Wartością domyślną jest 4 (Kraj, województwo, powiat, miejscowość). Jeśli chcesz dodać dodatkowe poziomy (na przykład szkoły, cmentarze) możesz zmienić liczbę poziomów. Jeśli chcesz usunąć poziom (na przykład Kraj) możesz zmniejszyć tą wartość, ale pamiętaj, że pliki zawierające współrzędne miejsc mają strukturę 4-poziomową.";

$pgv_lang["GM_NAME_PREFIX"]             = "Przedrostek dla nazw w tym poziomie";
$pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />Ta wartość będzie dodana na początku nazw tego poziomu. Różne wartości mogą być używane, ale należy rozdzielić je średnikiem.";

$pgv_lang["GM_NAME_POSTFIX"]            = "Przyrostek dla nazw w tym poziomie";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />Ta wartość będzie dodana na końcu nazw tego poziomu. Różne wartości mogą być używane, ale należy rozdzielić je średnikiem.";

$pgv_lang["GM_NAME_PRE_POST"]           = "Porządek przedrostka/przyrostka";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />To pole wyznacza porządek w jakim nazwy będą używać przedrostka i przyrostka. Możliwe wartości:<br /><ul><li>Brak</li><li>Normalny, przedrostek, przyrostek, oba</li><li>Normalny, przyrostek, przedrostek, oba</li><li>Przedrostek, przyrostek, oba, normalny</li><li>Przyrostek, przedrostek, oba, normalny</li><li>Przedrostek, przyrostek, normalny, oba</li><li>Przyrostek, przedrostek, normalny, oba</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Edytuj lub usuń miejsce";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "~#pgv_lang[PL_EDIT_LOCATION]#~<br /><br />W tym miejscu można edytować lub usuwać miejsca. Jeśli klikniejsz na Edytuj zostanie otwarte nowe okno, w którym będzie można zmienić dane geograficzne.<br />Jeśli klikniesz na czerwony krzyżyk miejsce zostanie usunięte. Usunąć można jedynie miejsca, które nie mają miejsc podrzędnych.";

$pgv_lang["PL_ADD_LOCATION"]            = "Dodaj nowe miejsce";
$pgv_lang["PL_ADD_LOCATION_help"]       = "~#pgv_lang[PL_ADD_LOCATION]#~<br /><br />Użyj w celu dodania miejsca do tablicy. Miejsce będzie dodane w bieżącym poziomie.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Importuj z bieżącego GEDCOMu";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "~#pgv_lang[PL_IMPORT_GEDCOM]#~<br /><br />Importuj miejsca z bieżącego GEDCOMu. Bieżący plik GEDCOM będzie przeskanowany i wszystkie miejsca będą dodane do tablicy. Jeśli współrzędne są dostępne będą również dodane.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Importuj ze wszystkich GEDCOMów";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "~#pgv_lang[PL_IMPORT_ALL_GEDCOM]#~<br /><br />Importuj miejsca ze wszystkich GEDCOMów. Wszystkie pliki GEDCOM będą przeskanowane i wszystkie miejsca będą dodane do tablicy. Jeśli współrzędne są dostępne będą również dodane.";

$pgv_lang["PL_IMPORT_FILE"]             = "Importuj z pliku";
$pgv_lang["PL_IMPORT_FILE_help"]        = "~#pgv_lang[PL_IMPORT_FILE]#~<br /><br />Importuj miejsca z pliku. Plik powinie być zapisany w postaci CSV na komputerze. Separator rekordów: ';'";

$pgv_lang["PL_EXPORT_FILE"]             = "Eksportuj aktualny widok do pliku";
$pgv_lang["PL_EXPORT_FILE_help"]        = "~#pgv_lang[PL_EXPORT_FILE]#~<br /><br />Eksportuj aktualny widok do pliku. Ta opcja pozwala na zapisanie bieżącego widoku miejsc w pliku na komputerze. Oznacza to, że jeśli jest wybrany poziom Kraju i wyświetlone są województwa, do pliku zostaną zapisane dane województw i wszystkie miejsca podrzędne.";

$pgv_lang["PL_EXPORT_ALL_FILE"]			= "Eksportuj wszystkie lokalizacje do pliku";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "~#pgv_lang[PL_EXPORT_ALL_FILE]#~<br /><br />Eksportuj wszystkie lokalizacje do pliku. Ta opcja pozwala na zapisanie wszystkich miejsc w pliku na komputerze.";

$pgv_lang["GOOGLEMAP_COORD"]            = "Wyświetl współrzędne";
$pgv_lang["GOOGLEMAP_COORD_help"]       = "~#pgv_lang[GOOGLEMAP_COORD]#~<br /><br />Ta opcja określa czy współrzędne miejsc mają być wyświetlone w dymkach powiązanych ze znacznikami miejsca";

// Help texts for places_edit.php
$pgv_lang["PLE_EDIT"]               	= "Edytuj położenie geograficzne miejsc";
$pgv_lang["PLE_EDIT_help"]              = "~#pgv_lang[PLE_EDIT]#~<br /><br />W tym miejscu możesz dodawać, edytować lub usuwać szczegóły dotyczące miejsca.";

$pgv_lang["PLE_PLACES"]                 = "Nazwa miejsca";
$pgv_lang["PLE_PLACES_help"]            = "~#pgv_lang[PLE_PLACES]#~<br /><br />W tym miejscu możesz dodać lub edytować nazwę miejsca.<br />Opcja 'Szukaj na tym poziomie' pozwala na wyszukanie współrzędnych miejsca mającego podaną nazwę tylko wśród miejsc z tego poziomu.<br />Opcja 'Szukaj wszystkie' pozwala na wyszukanie współrzędnych wszystkich miejsc mających podaną nazwę. Niektóre miejsca niższych poziomów mogą zostać nie wyświetlone przy tej metodzie szukania.";

$pgv_lang["PLE_PRECISION"]              = "Precyzja";
$pgv_lang["PLE_PRECISION_help"]         = "~#pgv_lang[PLE_PRECISION]#~<br /><br />W tym miejscu możesz ustawić precyzję. Liczba miejsc po przecinku we współrzędnych odnosi się do tej wartości.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Wprowadź współrzędne geograficzne";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "~#pgv_lang[PLE_LATLON_CTRL]#~<br /><br />W tym miejscu możesz ustawić współrzędne. Najpierw ustaw szerokość i długość geograficzną (E/W lub N/S). Następnie wprowadź współrzędne. Powinny być w formacie dziesiętnym.<br />Wartości dziesiętne można obliczyć przeliczając minuty i sekundy według podanego wzoru:<br />stopnie_dziesiętne = ((sekundy / 60) + minuty) / 60 + stopnie.";

$pgv_lang["PLE_ZOOM"]                   = "Powiększenie";
$pgv_lang["PLE_ZOOM_help"]              = "~#pgv_lang[PLE_ZOOM]#~<br /><br />W tym miejscu możesz ustawić powiększenie. Ta wartość będzie używana jako minimalna wartość podczas wyświetlania miejsc na mapie.";

$pgv_lang["PLE_ICON"]                   = "Wybierz flagę miejsca";
$pgv_lang["PLE_ICON_help"]              = "~#pgv_lang[PLE_ICON]#~<br /><br />W tym miejscu możesz ustawić lub usunąć flagę dla tego miejsca. Podczas wyświetlania miejsc flaga będzie używana jako znacznik.";

$pgv_lang["PLE_FLAGS"]                  = "Wybierz flagę";
$pgv_lang["PLE_FLAGS_help"]             = "~#pgv_lang[PLE_FLAGS]#~<br /><br />Używając rozwijanej listy możesz wybrać kraj, dla którego będą wyświetlone flagi. Jeśli nie ma flag oznacza to, że nie ma ich zdefiniowanych dla danego kraju.";

$pgv_lang["PLIF_FILENAME"]              = "Wprowadź nazwę pliku";
$pgv_lang["PLIF_FILENAME_help"]         = "~#pgv_lang[PLIF_FILENAME]#~<br /><br />Przeglądaj komputer w celu znalezienia pliku w formacie CSV zawierającego miejsca.";
$pgv_lang["PLIF_LOCALFILE_help"]        = "~#pgv_lang[PLIF_FILENAME]#~<br /><br />Wybierz plik z listy istniejących na serwerze zawierający miejsca.";

$pgv_lang["PLIF_CLEAN"]                 = "Wyczyść bazę miejsc";
$pgv_lang["PLIF_CLEAN_help"]            = "~#pgv_lang[PLIF_CLEAN]#~<br /><br />Jeśli ta opcja jest włączona baza lokalizacji miejsc zostanie wyczyszczona. To oznacza, że tylko miejsca występujące w tej tablicy zostaną usunięte. Ta opcja nie zmienia miejsc w pliku GEDCOM.";

$pgv_lang["PLIF_UPDATE"]                = "Aktualizuj tylko istniejące miejsca";
$pgv_lang["PLIF_UPDATE_help"]           = "~#pgv_lang[PLIF_UPDATE]#~<br /><br />Aktualizuj tylko istniejące w bazie miejsca.<br />Jeśli ta opcja jest włączona tylko istniejące miejsca będą zaktualizowane. This can be used to fill in latitude and longitude of places that have been imported from a GEDCOM. No new places will be added to the database.";

$pgv_lang["PLIF_OVERWRITE"]             = "Nadpisać dane lokalizacji danymi z pliku";
$pgv_lang["PLIF_OVERWRITE_help"]        = "~#pgv_lang[PLIF_OVERWRITE]#~<br /><br />Nadpisać dane lokalizacji w bazie danymi z pliku.<br />Jeśli ta opcja jest włączona, dane w bazie (współrzędne, powiększenie i flaga) zostaną nadpisane danymi z pliku, jeśli w pliku będą dostępne. Jeśli miejsce nie istnieje w bazie zostanie stworzony nowy wpis, ale tylko gdy opcja Aktualizuj tylko istniejące miejsca nie będzie zaznaczona.";

$pgv_lang["PLE_ACTIVE"]             	= "Pokaż miejsca nieaktywne";
$pgv_lang["PLE_ACTIVE_help"]        	= "~#pgv_lang[PLE_ACTIVE]#~<br /><br /><strong>Lista miejsc w tablicy GoogleMaps, które nie są używane w pliku GEDCOM.</strong><br /><br />Domyślnie jest włączona opcja wyświetlania miejsc, które występują w tablicy GoogleMaps i pliku GEDCOM jednocześnie.<br /><br />Jeśli ta opcja jest zaznaczona i zostanie wciśnięty przycisk \"Pokaż\" na liście zostaną wyświetlone wszystkie miejsca z tego poziomu.";

// Help text for placecheck.php
$pgv_lang["GOOGLEMAP_PLACECHECK"]       = "Sprawdź miejsca";
$pgv_lang["GOOGLEMAP_PLACECHECK_help"]  = "~#pgv_lang[GOOGLEMAP_PLACECHECK]#~<br /><br /><strong>To narzędzie</strong> pozwala na porównanie miejsc z pliku GEDCOM i tablicy GoogleMaps.<br /><br /><strong>Dane</strong> mogą być wyświetlone dla danego pliku GEDCOM; dla danego kraju w tym pliku; i dla innych obszarów (na przykład województwo lub powiat) w danym kraju.<br /><br /><strong>Miejsca</strong> są wyświetlane alfabetycznie.<br /><br /><strong>Na liście</strong> wyników porównania możesz kliknąć na nazwę miejsca, zostaniesz odesłany do jednej z trzech opcji:<br /><br /><strong>1 - </strong>Dla miejsc z pliku GEDCOM zostaniesz odesłany do Hierarchii miejsc. Tam będziesz mógł zobaczyć wszystko co jest połączone z danym miejscem.<br /><br /><strong>2 - </strong>Dla miejsc istniejących w pliku GEDCOM, ale nie istniejących w tablicy Googlemap (wyświetlone na czerwono) zostaniesz odesłany do opcji \"Dodaj miejsce\".<br /><br /><strong>3 - </strong>Dla miejsc istniejących w pliku GEDCOM i tablicy Googlemap (prawdopodobnie bez wspórzędnych) zostaniesz odesłany do opcji \"Edytuj miejsce\". Tam będziesz mógł edytować opcje wykorzystywane do wyświetlania danego miejsca.<br /><br /><strong>Najeżdżając</strong> kursorem na miesjce zostanie wyświetlona informacja na temat ustawionego powiększenia dla tego miejsca.";
$pgv_lang["PLACECHECK_FILTER"]       	= "Sprawdź miejsca - Opcje filtrowania listy";
$pgv_lang["PLACECHECK_FILTER_help"]  	= "~#pgv_lang[PLACECHECK_FILTER]#~<br /><br />Tutaj możesz określać miejsca jakie będą wyświetlone.";
$pgv_lang["PLACECHECK_MATCH"]       	= "Dołącz identyczne miejsca";
$pgv_lang["PLACECHECK_MATCH_help"]  	= "~#pgv_lang[PLACECHECK_MATCH]#~<br /><br />Domyślnie nie są wyświetlane miejsca będące identyczne w pliku GEDCOM i tablicy GoogleMap.<br />Identyczne, to znaczy wszystkie poziomy są takie same w pliku GEDCOM i tablicy GoogleMap i w tablicy są podane współrzędne dla każdego poziomu.<br /><br />Zaznacz w celu dołączenia do listy tych miejsc";

//wooc Options for Place Hierarchy display
$pgv_lang["GOOGLEMAP_PH"]				= "Użyj Googlemap do wyświetlania hierarchii miejsc";
$pgv_lang["GOOGLEMAP_PH_help"]			= "~#pgv_lang[GOOGLEMAP_PH]#~<br /><br />Jeśli zostanie wybrane Tak, hierarchia miejsc będzie wyświetlana za pomocą Googlemap, w przeciwnym razie będzie wyświetlana standardowo. Dla wyświetlania wymagana jest jeszcze opcja włączenia modułu Googlemap. Przed włączeniem zaleca się wprowadzenie wszystkich miejsc do tablicy Googlemap.";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE"]		= "Wielkość mapy w hierarchii miejsc (w pikselach)";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE_help"]	= "~#pgv_lang[GOOGLEMAP_PH_MAP_SIZE]#~<br /><br />Rozmiar mapy w pikselach. Mapa wyświetlana na stronie hierarchii miejsc będzie miała podany rozmiar.";
$pgv_lang["GOOGLEMAP_PH_MARKER"]		= "Typ znacznika miejsca w hierarchii miejsc";
$pgv_lang["GOOGLEMAP_PH_MARKER_help"]	= "~#pgv_lang[GOOGLEMAP_PH_MARKER]#~<br /><br />Tutaj możesz określić czy do wyświetlania miejsc w hierarchii będzie użyty standardowy znacznik czy przypisana flaga (jeśli brak przypisanej flagi, będzie wyświetlony standardowy znacznik).";
$pgv_lang["GM_DISP_SHORT_PLACE"]		= "Wyświetl skrócone nazwy miejsc";
$pgv_lang["GM_DISP_SHORT_PLACE_help"]	= "~#pgv_lang[GM_DISP_SHORT_PLACE]#~<br /><br />Tutaj możesz określić czy miejsca wyświetlane w hierarchii będą miały wyświetlone pełne nazwy czy tylko będzie wyświetlona nazwa aktualnego poziomu/miejsca.<br /><b>Przykłady:<br />Pełna nazwa: </b>Warszawa, Mazowieckie, Polska<br /><b>Skrócona nazwa: </b>Warszawa<br /><b>Pełna nazwa: </b>Mazowieckie, Polska<br /><b>Skrócona nazwa: </b>Mazowieckie";
$pgv_lang["GM_DISP_COUNT"]				= "Wyświetl liczbę osób i rodzin połączonych z danym miejscem";
$pgv_lang["GM_DISP_COUNT_help"]			= "~#pgv_lang[GM_DISP_COUNT]#~<br /><br />Możesz określić czy liczba osób i rodzin powiązana z danym miejscem będzie wyświetlana. Przy dużej ilości osób i miejsc zaleca się wyłączenie tej opcji (powyżej tysiąca osób powoduje duże spowolnienie w wyświetlaniu mapy).";
$pgv_lang["GOOGLEMAP_PH_WHEEL"]			= "Użyj rolki myszki do przybliżania/oddalania";
$pgv_lang["GOOGLEMAP_PH_WHEEL_help"]	= "~#pgv_lang[GOOGLEMAP_PH_WHEEL]#~<br /><br />Możesz określić czy rolka myszki będzie używana do przybliżania lub oddalania mapy.";
$pgv_lang["GOOGLEMAP_PH_CONTROLS"]		= "Ukryj kontrolki mapy";
$pgv_lang["GOOGLEMAP_PH_CONTROLS_help"]	= "~#pgv_lang[GOOGLEMAP_PH_CONTROLS]#~<br /><br />Możesz określić czy kontrolki mapy (np. wybór typu mapy) będą ukryte dopóki nie najedziesz myszką na mapę.";

// Pedigree map
$pgv_lang["PEDIGREE_MAP_help1"]		= "Używanie mapy";
$pgv_lang["PEDIGREE_MAP_help2"]		= "~#pgv_lang[root_person]#~<br /><br />Wybierz osobę, która ma być <strong>główną osobą</strong> wprowadzając jej identyfikator lub używając ikony <strong>Znajdź ID</strong>.";
$pgv_lang["PEDIGREE_MAP_help3"]		= "~#pgv_lang[generations]#~<br /><br />Wybierz liczbę pokoleń, jaką chcesz zobaczyć. Sensownym maksimum jest 8, które wyświetla 255 osób.";
$pgv_lang["PEDIGREE_MAP_help4"]		= "Kliknij na imię po prawej stronie mapy lub na ikonę na mapie aby wyświetlić okno z informacjami dotyczącymi miejsca.";
$pgv_lang["PEDIGREE_MAP_help5"]		= "Kliknij na szczegóły w wyświetlonym oknie z informacjami aby pokazać mapę z daną osobą jako główną.";

$pgv_lang["PEDIGREE_MAP_clustersize"]		= "Wielkość klastra";
$pgv_lang["PEDIGREE_MAP_clustersize_help"]	= "~#pgv_lang[PEDIGREE_MAP_clustersize]#~<br /><br />Liczba znaczników, które będą umieszczone w jednym punkcie, kolejne zostaną przesunięte na północny-wschód za pokoleniem młodszym. Przesunięcie jest zauważalne tylko przy dużych powiększeniach.";
$pgv_lang["PEDIGREE_MAP_hidelines"]			= "Ukryj linie";
$pgv_lang["PEDIGREE_MAP_hidelines_help"]	= "~#pgv_lang[PEDIGREE_MAP_hidelines]#~<br /><br />Ukrywa linie łączące dziecko z jego rodzicami jeśli są pokazani na mapie.";
$pgv_lang["PEDIGREE_MAP_hideflags"]			= "Ukryj flagi";
$pgv_lang["PEDIGREE_MAP_hideflags_help"]	= "~#pgv_lang[PEDIGREE_MAP_hideflags]#~<br /><br />Ukrywa flagi, które są skonfigurowane w module googlemap. Naogół używane są do oznaczenia państw i województw. Flagi pokazują obszar administracyjny znaczników zgrupowanych wokół nich.";
$pgv_lang["PEDIGREE_MAP_help"]				= "~#pgv_lang[PEDIGREE_MAP_help1]#~<br /><br />#pgv_lang[PEDIGREE_MAP_help4]#<br />#pgv_lang[PEDIGREE_MAP_help5]#<br /><br />#pgv_lang[PEDIGREE_MAP_help2]#<br /><br />#pgv_lang[PEDIGREE_MAP_help3]#<br /><br />#pgv_lang[PEDIGREE_MAP_clustersize_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hidelines_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hideflags_help]#<br /><br />";
?>
