<?php
/**
 * phpGedView Research Assistant Tool - Form Loader Engine.
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
 * Language author: Łukasz Wileński <wooc(at)sourceforge.net>
 * @package PhpGedView
 * @subpackage Research_Assistant
 * @version $Id: lang.pl.php 6875 2010-01-29 18:31:40Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["missing_info"]		= "Brakujące informacje";
$pgv_lang["task_list"]			= "Zadania";
$pgv_lang["task_list_text"]		= "Ten obszar wyświetla zadania które utworzyłeś, kliknij <b>Pokaż</b> aby zobaczyć dane zadanie.";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]							= "Moje zadania";
$pgv_lang["add_task"]							= "Dodaj zadanie";
$pgv_lang["view_folders"]						= "Pokaż foldery";
$pgv_lang["view_probabilities"]					= "Pokaż prawdopodobieństwa";
$pgv_lang["up_folder"]							= "Folder wyżej";
$pgv_lang["edit_folder"]						= "Dodaj/edytuj folder";
$pgv_lang["gen_tasks"]							= "Automatycznie generuj zadania";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]							= "Edytuj zadanie";
$pgv_lang["completed"]							= "Ukończone";
$pgv_lang["complete"]							= "Zakończ";
$pgv_lang["incomplete"]							= "Niedokończone";
$pgv_lang["created"]							= "Utworzono";
$pgv_lang["details"]							= "Szczegóły";
$pgv_lang["result"]								= "Rezultaty";
$pgv_lang["okay"]								= "Ok";
$pgv_lang["editform"]							= "Edytuj formularz danych";
$pgv_lang["FilterBy"]							= "Filtruj po";
$pgv_lang["Recalculate"]						= "Przelicz";
$pgv_lang["LocalData"]							= "Dane lokalne";
$pgv_lang["RelatedRecord"]						= "Wpis powiązany";
$pgv_lang["RelatedData"]						= "Dane powiązane";
$pgv_lang["Percent"]							= "Procent";
$pgv_lang["Fields"]								= "Liczba pól";
$pgv_lang["FieldName"]							= "Pole Nazwy";
$pgv_lang["InputType"]							= "Typ wejścia";
$pgv_lang["Values"]								= "Wartości";
$pgv_lang["FormBuilder"]						= "Formularz konstrukcji";
$pgv_lang["FormName"]							= "Wprowadź nazwę formularza";
$pgv_lang["MultiplePeople"]						= "Czy formularz jest stosowany do kilku osób?";
$pgv_lang["EnterGEDCOMExtension"]				= "Wprowadź symbol GEDCOM dla faktu";
$pgv_lang["FormDesciption"]						= "Wprowadź opis formularza";
$pgv_lang["FormGeneration"]						= "Wygenerowano formularz";
$pgv_lang["CustomField"]						= "Domyślna nazwa pola";
$pgv_lang["txt"]								= "Tekst";
$pgv_lang["checkbox"]							= "Przycisk wyboru";
$pgv_lang["radiobutton"]						= "Przycisk opcji";
$pgv_lang["EnterResults"]						= "Wprowadź wyniki";
$pgv_lang["ra_submit"]							= "Zatwierdź";
$pgv_lang["ra_generate_tasks"]					= "Generuj zadania z tagów TODO";
$pgv_lang["TaskDescription"]					= "Opis zadania";
$pgv_lang["SelectFolder"]						= "Wybierz folder:";
$pgv_lang["ra_done"]							= "Zrobione";
$pgv_lang["ra_generate"]						= "Generuj";
$pgv_lang["LocalPercent"]						= "Procent";
$pgv_lang["GlobalPercent"]						= "Globalnie procent";
$pgv_lang["Average"]							= "Średnio";
$pgv_lang["NoData"]								= "Brak danych!";
$pgv_lang["NotEnoughData"]						= "Nie wystarczające dane!";
$pgv_lang["InferIndvBirthPlac"]					= "Jest %PERCENT% prawdopodobieństwa, że miejsce urodzenia to:";
$pgv_lang["InferIndvDeathPlac"]					= "Jest %PERCENT% prawdopodobieństwa, że miejsce śmierci to:";
$pgv_lang["InferIndvSurn"]						= "Jest %PERCENT% prawdopodobieństwa, że nazwisko osoby to:";
$pgv_lang["InferIndvMarriagePlace"]				= "Jest %PERCENT% prawdopodobieństwa, że miejsce ślubu to:";
$pgv_lang["InferIndvGivn"]						= "Jest %PERCENT% prawdopodobieństwa, że imię osoby to:";
$pgv_lang["All"]								= "Wszystko";
$pgv_lang["More"]								= "Więcej";
$pgv_lang["ThereIsChance"]						= "Prawdopodobnie źródła mogą zawierać:";
$pgv_lang["TheMostLikely"]						= "Najbardziej prawdopodobne miejsce dla tego źródła to:";
$pgv_lang["DataCorrelations"]					= "Współzależności danych";
$pgv_lang["ViewProbExplanation"]				= "Ta strona analizuje dane z aktywnego pliku GEDCOM i pokazuje współzależności pomiędzy różnymi danymi. Na przykład może być 95% współzależności między nazwiskiem osoby a nazwiskiem jej ojca. To znaczy, że 95% osób w danym pliku GEDCOM ma nazwisko po swoim ojcu.";
$pgv_lang["Folder"]								= "Folder:";
$pgv_lang["Edit_Gen_Task"]						= "Edytuj wygenerowane zadanie";

// -- RA_FOLDER MESSAGES
$pgv_lang["Start_Date"]							= "Data początkowa";
$pgv_lang["Task_Name"]							= "Nazwa zadania";
$pgv_lang["Folder_Name"]						= "Nazwa folderu";
$pgv_lang["Folder_View"]						= "Pokaż folder";
$pgv_lang["Task_View"]							= "Pokaż zadanie";
$pgv_lang["page_header"]						= "Foldery asystenta badań";
$pgv_lang["no_folder_name"]						= "Pole nazwy folderu musi być wypełnione.";
$pgv_lang["add_folder"]				 			= "Dodaj folder";
$pgv_lang["edit_folder"]						= "Edytuj folder";
$pgv_lang["folder_name"]						= "Nazwa folderu:";
$pgv_lang["Parent_Folder:"]						= "Folder nadrzędny:";
$pgv_lang["No_Parent"]							= "Brak nadrzędnego";
$pgv_lang["Folder_Description:"]				= "Opis folderu:";
$pgv_lang["Folder_names_must_be_unique"]		= "Nazwy folderów muszą być unikatowe.";
$pgv_lang["folder_submitted"]					= "Twój folder został wysłany";
$pgv_lang["folder_problem"]						= "Wystąpił problem podczas dodawania twojego folderu, spróbuj jeszcze raz";

// -- Missing Information Help 
$pgv_lang["ra_missing_info_help"] = "Ten obszar wyświetla brakujące informacje o rekordzie. Wybierz element i folder po czym naciśnij przycisk Dodaj zadanie aby utworzyć zadanie dla brakującego elementu. Już utworzone zadania będą wyświetlone ze znacznikiem 'Pokaż' zamiast opcji zaznaczenia.<br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]						= "Utwórz nowe zadanie";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]						= "Aktualnie nie istnieje żaden folder. Najpierw utwórz folder.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]				= "<H2><B>Widok folderu:</B></H2><ul><li><B>Nazwa folderu:</B> Kolumna zawiera nazwy wszystkich istniejących folderów.</li><li><B>Opis:</B> Kolumna zawiera opisy folderów.</li></ul><br /><br /><a href=\"helpvids/ResearchAssistantUserHelp.htm\">Podręcznik asystenta badań</a>";
$pgv_lang["ra_add_task_help"]				= "<H2><B>Dodaj zadanie:</B></H2></H2><ul><li><B>Nazwa zadania:</B>To pole powinno zawierać nazwę aktualnie dodawanego zadania.</li><li><B>Folder:</B>W tym polu możesz określić folder do którego zostanie dodane zadanie.</li><li><B>Opis:</B> Wpisz opis zadania które chesz dodać.</li><li><B>Źródła:</B> Skojarz źródła z tym zadaniem.</li><li><B>Osoby:</B> Skojarz osoby z tym zadaniem.</li></ul>";
$pgv_lang["ra_edit_folder_help"]			= "<H2><B>Edytuj folder:</B></H2><ul><li><B>Nazwa folderu:</B> Tutaj powinieneś umieścić nazwę folderu który edytujesz.</B></li><li><B>Folder nadrzędny:</B> Tu możesz przypisać folder nadrzędny do aktualnie edytowanego folderu.</B></li><li><B>Opis folderu:</B> To jest opis folderu który edytujesz.</B></li><ul>";
$pgv_lang["ra_add_folder_help"]				= "<H2><B>Dodaj folder:</B></H2><ul><li><B>Nazwa folderu:</B> To pole powinno zawierać nazwę aktualnie dodawanego zadania.</B></li><li><B>Folder nadrzędny:</B> Tu możesz przypisać folder nadrzędny do aktualnie dodawanego folderu.</B></li><li><B>Opis folderu:</B> To jest opis folderu który dodajesz.</B></li><ul>";
$pgv_lang["ra_view_task_help"]				= "<H2><B>Widok zadań:</B></H2><ul><li><B>Nazwa zadania:</B> Ta kolumna zawiera nazwy wszystkich zadań.</B></li><li><B>Opis:</B> Ta kolumna zawiera opisy zadań.</li><li><B>Data początkowa:</B> Ta kolumna zawiera daty początkowe każdego z zadań.</li><li><B>Zakończone:</B>Kolumna pokazuje czy dane zadanie zostało zakończone.</li><li><B>Szczegóły:</B>Kolumna pokazuje szczegóły dotyczące każdego z zadań.</li><li><B>Usuń:</B>Opcja usunie zadanie.</li><ul><br /><a href=\"helpvids/MissingInformationUserHelp.htm\">Podręcznik użytkownika</a>";
$pgv_lang["ra_task_view_help"]				= "<H2><B>Pokaż zadanie:</B></H2><ul><li><B>Nazwa:</B>Pole powinno zawierać nazwę zadania.</li><li><B>Osoby:</B> Skojarz osoby z tym zadaniem.</li><li><B>Opis:</B> Podaj opis dodawanego zadania.</li><li><B>Źródła:</B> Skojarz źródła z tym zadaniem.</li><li>Naciśnij przycisk 'Edytuj zadanie' aby zmienić szczegóły z nim związane.</li></ul>";
$pgv_lang["ra_comments_help"]				= "<H2><B>Komentarze:</B></H2><ul><li>Tu będą widoczne komentarze związane z tym zadaniem. Naciśnij przycisk 'Dodaj komentarz' aby dodać komentarz.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]			= "<H2><B>Generuj zadania:</B></H2><p>Ten formularz generuje zadania z tagów _TODO zawartych w twoim pliku GEDCOM.</p><ul><li><B>Generuj:</B> zaznacz każde zadanie do wygenerowania w momencie naciśnięcia przycisku 'Generuj'.</li><li><B>Nazwa zadania:</B> To jest nazwa która będzie nadana zadaniu.  Domyślnie jest to tekst zawarty w tagu _TODO, wyłączając tagi CONT</li><li><B>Opis zadania:</B> Opis jaki będzie nadany zadaniu.  Jest on generowany na podstawie tekstu zawartego w tagu _TODO oraz wszystkich związanych tagów CONT.  </li><li><B>Edytuj:</B> kliknij łącze aby edytować zadanie.</li><li><B>Wybierz folder:</B> wybierz folder w którym będą umieszczane wygenerowane zadania.</li><li><B>Generuj:</B> generuje zadania które zostały zaznaczone.</li><li><B>Zakończ:</B> przekierowuje cię do strony z podglądem folderów.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"]		= "<H2><B>Edytuj wygenerowane zadanie:</B></H2><p>Ten formularz pozwala na edycję zadań wygenerowanych z tagów _TODO zawartych w pliku GEDCOM.</p><ul><li><B>Nazwa zadania:</B> To jest nazwa zadania.  </li><li><B>Opis zadania:</B> To jest opis zadania. </li><li><B>Osoby:</B> kliknij łącze aby wybrać osobę do skojarzenia z tym zadaniem.</li><li><B>Źródła:</B> kliknij łącze aby wybrać źródło do skojarzenia z tym zadaniem.</li><li><B>Zapisz:</B> zapisuje wszystkie zmiany i przekierowuje do strony generowania zadań.</li><li><B>Anuluj:</B> odrzuca wszystkie wprowadzone zmiany i przekierowuje do strony generowania zadań.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]		= "<H2><B>Konfiguruj opcje prywatności:</B></H2></H2><ul><li><B>Pokaż wszystkim:</B> Pozwala każdemu oglądać to zadanie.</li><li><B>Pokaż tylko użytkownikom zalogowanym:</B> Pokazuje to zadanie tylko zalogowanym użytkownikom.</li><li><B> Pokaż tylko administratorom:</B> Pokazuje zadanie tylko administratorom.</li><li><B> Ukryj nawet przed administratorami:</B> Nie pokazuje tego zadania nikomu.</li></ul>";
$pgv_lang["ra_edit_task_help"]				= "~Edytuj zadanie~<ul><li><b>Tytuł:</b> Powinien zawierać tytuł edytowanego zadania.</li><li><b>Folder:</b> W tym polu możesz przypisać folder do danego zadania.</li><li><b>Opis:</b> Wprowadź opis edytowanego zadania.</li><li><b>Źródła:</b> Przypisz lub edytuj źródła powiązane z zadaniem.</li><li><b>Osoby:</b> Przypisz lub edytuj osoby powiązane z tym zadaniem.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]					= "Pokaż zadanie";
$pgv_lang["add_new_comment"]			= "Dodaj komentarz";
$pgv_lang["no_sour_tasks"]				= "Brak zadań połączonych z tym źródłem";
$pgv_lang["no_indi_tasks"]				= "Nie ma zadań skojarzonych z tą osobą";
$pgv_lang["edit_comment"]				= "Edytuj komentarz";
$pgv_lang["comment_success"]			= "Komentarz został dodany pomyślnie.";
$pgv_lang["comment_body"]				= "Komentarz";

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]		= "Czy na pewno chcesz usunąć ten komentarz?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]				= "Dodaj zadanie";
$pgv_lang["submit"]						= "Wyślij";
$pgv_lang["save_and_complete"]			= "Zapisz i zakończ";
$pgv_lang["assign_task"]				= "Przypisz zadanie";
$pgv_lang["AddTask"]					= "Dodaj zadanie";

//-- RA_EDITTASK MESSAGES
$pgv_lang["edit_task"]					= "Edytuj zadanie";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]			= "Konfiguruj opcje prywatności";
$pgv_lang["show_my_tasks"]				= "Pokaż 'Moje zadania'";
$pgv_lang["show_add_task"]				= "Pokaż 'Dodaj zadanie'";
$pgv_lang["show_auto_gen_task"]			= "Pokaż 'Automatyczne generowanie zadań'";
$pgv_lang["show_view_folders"]			= "Pokaż 'Widok folderów'";
$pgv_lang["show_add_folder"]			= "Pokaż 'Dodaj folder'";
$pgv_lang["show_add_unlinked_source"]	= "Pokaż 'Dodaj niepowiązane źródło'";
$pgv_lang["show_view_probabilities"]	= "Pokaż 'Widok prawdopodobieństw'";

//-- Census Forms
$pgv_lang["rows"]						= "Liczba wierszy";
$pgv_lang["state"]						= "Stan";
$pgv_lang["call/url"]					= "Numer telefonu/URL";
$pgv_lang["enumDate"]					= "Data enumeracji";
$pgv_lang["county"]						= "Hrabstwo/powiat";
$pgv_lang["city"]						= "Miasto";
$pgv_lang["complete_title"]				= "Zakończ zadanie";
$pgv_lang["select_form"]				= "Wybierz formularz";
$pgv_lang["choose_form_label"]			= "Wybierz wspólny formularz asystenta badań";
$pgv_lang["book"]				 		= "Książka";
$pgv_lang["folio"]						= "Folio";
$pgv_lang["uk_county"]					= "powiat";
$pgv_lang["uk_boro"]					= "Miasto lub okręg";
$pgv_lang["uk_place"]					= "Miejscowość";
$pgv_lang["AssIndiFacts"]				= "Skojarzone fakty osobowe";
$pgv_lang["AssFamFacts"]				= "Skojarzone fakty rodzinne";
$pgv_lang["ra_facts"]					= "Fakty";
$pgv_lang["ra_fact"]					= "Fakt";
$pgv_lang["ra_remove"]					= "usuń";
$pgv_lang["ra_inferred_facts"]			= "Wywnioskowane fakty";
$pgv_lang["ra_person"]					= "Osoba";
$pgv_lang["ra_reason"]					= "Powód";
$pgv_lang["success"]					= "Sukces!";
$pgv_lang["registration_no"]			= "Numer rejestracyjny";
$pgv_lang["serial_no"]					= "Numer seryjny";
$pgv_lang["ra_no"]						= "Numer:";
$pgv_lang["order_no"]					= "Numer zamówienia:";
$pgv_lang["mytasks_block_descr"]		= "Blok #pgv_lang[my_tasks]# pokazuje zadania użytkownika. Może pokazywać zadania ukończone lub zadania, które nie są przypisane.";
$pgv_lang["mytasks_block"] 				= "Asystent Badań";
$pgv_lang["mytasks_edit"]				= "Edytuj";
$pgv_lang["mytasks_unassigned"]			= "Nieprzypisane";
$pgv_lang["mytasks_takeOn"]				= "Podjęte";
$pgv_lang["mytasks_help"]				= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]			= "Pokazać nieprzypisane zadania?";
$pgv_lang["mytask_show_completed"]		= "Pokazać ukończone zadania?";

//-- Auto Search Assistant
$pgv_lang["autosearch_surname"]			= "Dołącz nazwisko:";
$pgv_lang["autosearch_givenname"]		= "Dołącz imiona:";
$pgv_lang["autosearch_byear"]			= "Dołącz rok urodzenia:";
$pgv_lang["autosearch_bloc"]			= "Dołącz miejsce urodzenia:";
$pgv_lang["autosearch_myear"]			= "Dołącz rok ślubu:";
$pgv_lang["autosearch_mloc"]			= "Dołącz miejsce ślubu:";
$pgv_lang["autosearch_dyear"]			= "Dołącz rok śmierci:";
$pgv_lang["autosearch_dloc"]			= "Dołącz miejsce śmierci:";
$pgv_lang["autosearch_gender"]			= "Dołącz płeć:";
$pgv_lang["autosearch_plugin_name"]		= "";
$pgv_lang["autosearch_fsurname"]		= "Dołącz nazwisko ojca:";
$pgv_lang["autosearch_fgivennames"]		= "Dołącz imię ojca:";
$pgv_lang["autosearch_ffullname"]		= "Dołącz imię i nazwisko ojca:";
$pgv_lang["autosearch_msurname"]		= "Dołącz nazwisko matki:";
$pgv_lang["autosearch_mgivennames"]		= "Dołącz imię matki:"; 
$pgv_lang["autosearch_mfullname"]		= "Dołącz imię i nazwisko matki:";
$pgv_lang["autosearch_country"]			= "Dołącz kraj:";
$pgv_lang["autosearch_ssurname"]		= "Dołącz nazwisko współmałżonka:";
$pgv_lang["autosearch_sgivennames"]		= "Dołącz imię współmałżonka:";
$pgv_lang["autosearch_sfullname"]		= "Dołącz imię i nazwisko współmałżonka:";
$pgv_lang["autosearch_plugin_name_ancestry"]	= "Plugin Ancestry.com";
$pgv_lang["autosearch_plugin_name_ancestrycouk"]= "Plugin Ancestry.co.uk";
$pgv_lang["autosearch_plugin_name_ellisisland"] = "Plugin EllisIslandRecords.org";
$pgv_lang["autosearch_plugin_name_geneanet"]	= "Plugin GeneaNet.com";
$pgv_lang["autosearch_plugin_name_genealogy"]	= "Plugin Genealogy.com";
$pgv_lang["autosearch_plugin_name_familysearch"]= "Plugin FamilySearch.org";
$pgv_lang["autosearch_plugin_name_werelate"]	= "Plugin Werelate.org";
$pgv_lang["autosearch_search"]					= "Szukaj";
$pgv_lang["autosearch_keywords"]				= "Słowa kluczowe:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "Plugin Genealogy-Search-Help.com";
$pgv_lang["auto_search"]						= "Ta opcja spowoduje automatyczne przeszukanie baz Ancestry i FamilySearch, możesz wybrać poszukiwania po nazwisku i dacie narodzin/śmierci.<br />";
$pgv_lang["auto_search_text"]					= "Automatyczne wyszukiwanie";

$pgv_lang["add_task_inst"]		= "Jeśli zadanie nie zostało jeszcze utworzonie, powinno się najpierw utworzyć zadanie a następnie wybrać opcje do zapisania i ukończenia zadania.";
$pgv_lang["complete_task_inst"]	= "Wybierz zadanie z listy swoich zadań poniżej aby wprowadzić wyniki:";
$pgv_lang["enter_results"]		= "Wprowadź wyniki";
$pgv_lang["auto_gen_inst"]		= "Masz możliwość wprowadzania zadań do wykonania w pliku GEDCOM. Ta opcja przeszuka plik GEDCOM i automatycznie przekształci tagi TODO w zadania asystenta badań.";
$pgv_lang["choose_search_site"]	= "Wybierz stronę wyszukiwania";
$pgv_lang["pid_search_for"]		= "Co chcesz znaleźć?";
$pgv_lang["manage_research_inst"] = "Ta pozycja pozwala na zarządzanie zadaniami asystenta badań. Zadania pomagają w organizacji badań.";
$pgv_lang["manage_research"]	= "Zarządzaj badaniami";
$pgv_lang["manage_sources"]		= "Zarządzaj źródłami";
$pgv_lang["part_of"]			= "Część (opcjonalnie)";
$pgv_lang["search_fhl"]			= "Przeszukaj Katalog Family History Library";
$pgv_lang["determine_sources"]	= "Ustal możliwe źródła";
$pgv_lang["analyze_database"]	= "Analizuj bazę";
$pgv_lang["pid_know_more"]		= "O kim chcesz się więcej dowiedzieć?";
$pgv_lang["analyze_people"]		= "Analizuj osoby";
$pgv_lang["analyze_data"]		= "Analizuj moje dane";

//Folder deletion error messages
$pgv_lang["has_tasks"]			= "Folder obecnie zawiera zadania i nie może być usunięty";
$pgv_lang["has_folders"]		= "Folder obecnie zawiera inne foldery i nie może być usunięty";
?>
