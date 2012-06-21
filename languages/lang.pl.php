<?php
/**
 * Polish texts
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
 * @author Łukasz Wileński <wooc@users.sourceforge.net>
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: lang.pl.php 6989 2010-11-09 03:26:25Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["gedcomid"]			= "ID wpisu osoby w pliku GEDCOM";
$pgv_lang["sortby"]				= "Sortuj według";
$pgv_lang["exact"]				= "Dokładnie";
$pgv_lang["begins_with"]		= "Zaczyna się od";
$pgv_lang["contains"]			= "Zawiera";
$pgv_lang["sounds_like"]		= "Brzmi jak";
$pgv_lang["advanced_search"]	= "Wyszukiwanie zaawansowane";
$pgv_lang["more_fields"]		= "Dodaj więcej pól";
$pgv_lang["install_step_8"] 	= "Rozpocznij korzystanie";
$pgv_lang["parent_family"]		= "Rodzice i rodzeństwo";
$pgv_lang["step_parent_family"]	= "Przyrodni rodzice i rodzeństwo";
$pgv_lang["immediate_family"]	= "Najbliższa rodzina";

$pgv_lang["load_full_tree"]		= "Zobacz to drzewo na stronie Interaktywnego drzewa";
$pgv_lang["hide_show_spouses"]	= "Pokaż lub ukryj wielu małżonków";
$pgv_lang["interactive_tree"]	= "Interaktywne drzewo";
$pgv_lang["example"]			= "Przykład:";
$pgv_lang["tree"]				= "Drzewo";
$pgv_lang["ellipsis"]			= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]		= "Pokaż osoby o nieznanej płci";
$pgv_lang["count"]				= "Liczba";
$pgv_lang["age_differences"]	= "Pokaż różnicę wieku";
$pgv_lang["multi_site_search"] 	= "Wyszukiwanie na zdalnych stronach";
$pgv_lang["switch_lifespan"]	= "Pokaż wykres długości życia";
$pgv_lang["switch_timeline"]	= "Pokaż wykres osi czasu";
$pgv_lang["differences"]		= "Różnice";
$pgv_lang["charts_block"]		= "Blok diagramów";
$pgv_lang["charts_block_descr"]	= "Blok diagramów pozwala umieścić na stronie głównej lub stronie portalu diagram. Możesz zmieniać ustawienia bloku tak, aby pokazywać przodków, potomków lub układ klepsydrowy. Możesz także wybrać główną osobę dla diagramu.";
$pgv_lang["charts_click_box"]	= "Kliknij na ramkę aby otrzymać więcej informacji o osobie.";
$pgv_lang["chart_type"]			= "Typ diagramu";
$pgv_lang["changedate1"]		= "Koniec zakresu zmian";
$pgv_lang["changedate2"]		= "Początek zakresu zmian";
$pgv_lang["search_place_word"]	= "tylko całe słowa";
$pgv_lang["invalid_search_input"] = "Podaj imię, nazwisko lub miejsce oraz rok";
$pgv_lang["duplicate_username"]	= "Zduplikowana nazwa użytkownika. Użytkownik o tej nazwie już istnieje. Wybierz inną nazwę.";
$pgv_lang["cache_life"]			= "Żywotność pliku cache";
$pgv_lang["genealogy"]			= "genealogia";
$pgv_lang["activate"]			= "Włącz";
$pgv_lang["deactivate"]			= "Wyłącz";
$pgv_lang["play"]				= "Odtwórz";
$pgv_lang["stop"]				= "Zatrzymaj";
$pgv_lang["random_media_start_slide"]	= "Włącz pokaz slajdów po wczytaniu strony";
$pgv_lang["random_media_ajax_controls"]	= "Pokaż panel kontrolny pokazu slajdów";
$pgv_lang["description"]			= "Opis";
$pgv_lang["current_dir"]			= "Aktualny katalog";
$pgv_lang["SHOW_ID_NUMBERS"]		= "Pokaż identyfikatory obok nazwisk";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Pokaż wyróżnione zdjęcia";
$pgv_lang["view_img_details"]		= "Pokaż szczegóły zdjęcia";
$pgv_lang["server_folder"]			= "Nazwa katalogu na serwerze";
$pgv_lang["medialist_recursive"]	= "Pokaż pliki w podkatalogach";
$pgv_lang["media_options"]			= "Opcje multimediów";
$pgv_lang["confirm_password"]	= "Potwierdź hasło.";
$pgv_lang["enter_email"]		= "Musisz podać adres email.";
$pgv_lang["enter_fullname"]		= "Podaj imię i nazwisko.";
$pgv_lang["name"]				= "Imię / Nazwisko";
$pgv_lang["names"]				= "Imiona";
$pgv_lang["children"]			= "Dzieci";
$pgv_lang["lchildren"]			= "dzieci";
$pgv_lang["child"]				= "Dziecko";
$pgv_lang["grandchildren"]		= "wnucząt";
$pgv_lang["family"] 			= "Rodzina";
$pgv_lang["as_child"]			= "Rodzice";
$pgv_lang["shared_note_menu"]	= "Opcje wspólnej notatki";
$pgv_lang["source_menu"]		= "Opcje źródła";
$pgv_lang["repo_menu"]			= "Opcje repozytorium";
$pgv_lang["other_records"]		= "Wpisy powiązane z tym źródłem:";
$pgv_lang["other_repo_records"]	= "Wpisy powiązane z tym repozytorium:";
$pgv_lang["repo_info"]			= "Informacje o repozytorium";
$pgv_lang["enter_terms"]		= "Szukane słowa";
$pgv_lang["search_asso_label"]	= "Powiązania";
$pgv_lang["search_asso_text"]	= "Pokaż powiązane osoby/rodziny";
$pgv_lang["search_DM"]			= "Daitch-Mokotoff";
$pgv_lang["search_fams"]		= "Rodziny";
$pgv_lang["search_gedcom"]		= "Przeszukaj plik GEDCOM";
$pgv_lang["search_geds"]		= "Bazy do przeszukania";
$pgv_lang["search_indis"]		= "Osoby";
$pgv_lang["search_notes"]		= "Wspólne notatki";
$pgv_lang["search_inrecs"]		= "Szukany typ danych";
$pgv_lang["search_prtall"]		= "Wszystkie nazwiska";
$pgv_lang["search_prthit"]		= "Tylko pasujące";
$pgv_lang["results_per_page"]	= "Wyników na stronę";
$pgv_lang["firstname_search"]	= "Imię";
$pgv_lang["search_prtnames"]	= "Imiona i nazwiska<br />do wyświetlenia:";
$pgv_lang["other_searches"]		= "Inne typy wyszukiwania";
$pgv_lang["add_to_cart"]		= "Dodaj do wycinków";
$pgv_lang["view_gedcom"]		= "Pokaż wpis GEDCOM";
$pgv_lang["welcome"]			= "Witaj,";
$pgv_lang["son"]				= "Syn";
$pgv_lang["daughter"]			= "Córka";
$pgv_lang["welcome_page"]		= "Strona główna";
$pgv_lang["editowndata"]		= "Moje konto";
$pgv_lang["user_admin"]			= "Zarządzaj użytkownikami";
$pgv_lang["manage_media"]		= "Zarządzaj multimediami";
$pgv_lang["search_general"]		= "Wyszukiwanie proste";
$pgv_lang["clipping_privacy"]	= "Ze względu na ograniczenia prywatności nie dodano wszystkiego";
$pgv_lang["chart_new"]			= "Diagram drzewa rodziny";
$pgv_lang["loading"]			= "Trwa ładowanie...";
$pgv_lang["clear_chart"]		= "Wyczyść diagram";
$pgv_lang["file_information"]	= "Parametry pliku";
$pgv_lang["choose_file_type"]	= "Typ pliku";
$pgv_lang["add_individual_by_id"] = "Dodaj do wycinków";
$pgv_lang["advanced_options"]	= "Opcje zaawansowane";
$pgv_lang["zip_files"]			= "Kompresja ZIP";
$pgv_lang["include_media"]		= "Dołącz multimedia (ZIP)";
$pgv_lang["roman_surn"]			= "Zlatynizowane nazwisko";
$pgv_lang["roman_givn"]			= "Zlatynizowane imiona";
$pgv_lang["include"]			= "Dołącz";
$pgv_lang["page_x_of_y"]		= "Strona #GLOBALS[currentPage]# z #GLOBALS[lastPage]#";
$pgv_lang["options"]			= "Opcje";
$pgv_lang["config_update_ok"]	= "Plik konfiguracyjny został pomyślnie zaktualizowany.";
$pgv_lang["page_size"]			= "Format strony";
$pgv_lang["font"]				= "Czcionka";
$pgv_lang["use_colors"]			= "Użyj kolorów";
$pgv_lang["record_not_found"]	= "Nie znaleziono szukanego wpisu GEDCOM. Błąd mógł nastąpić w przypadku, kiedy odnośnik prowadzi do nieistniejącej osoby, lub plik GEDCOM jest uszkodzony.";
$pgv_lang["result_page"]		= "Wyniki";
$pgv_lang["edit_media"]			= "Edytuj obiekt multimedialny (#GLOBALS[pid]#)";
$pgv_lang["wiki_main_page"]		= "Główna strona Wiki";
$pgv_lang["wiki_users_guide"]	= "Podręcznik użytkownika Wiki";
$pgv_lang["wiki_admin_guide"]	= "Podręcznik administratora Wiki";
$pgv_lang["no_search_for"]		= "Upewnij się, że jest wybrana opcja wyszukiwania.";
$pgv_lang["no_search_site"]		= "Upewnij się, że przynajmniej jedna strona zdalna została wybrana.";
$pgv_lang["search_sites"] 		= "Strony do przeszukiwania";
$pgv_lang["site_list"]			= "Strona: ";
$pgv_lang["site_had"]			= " zawiera";
$pgv_lang["label_search_engine_detected"] = "Wykryto wyszukiwarkę indeksującą";

$pgv_lang["ex-spouse"] 			= "Były małżonek";
$pgv_lang["ex-wife"] 			= "Była żona";
$pgv_lang["ex-husband"] 		= "Były mąż";
$pgv_lang["noemail"] 			= "Tylko adresy bez emaili";
$pgv_lang["onlyemail"] 			= "Tylko adresy z emailami";
$pgv_lang["maxviews_exceeded"]	= "Przekroczono dozwoloną częstość przeglądania #GLOBALS[MAX_VIEWS]# na #GLOBALS[MAX_VIEW_TIME]# sek.";
$pgv_lang["broadcast_not_logged_6mo"]  = "Do użytkowników nie zalogowanych przez ostatnie 6 miesięcy";
$pgv_lang["broadcast_never_logged_in"] = "Do użytkowników nigdy nie zalogowanych";
$pgv_lang["stats_to_show"]			= "Wybierz statystyki, które mają się pokazać w tym bloku";
$pgv_lang["stat_avg_age_at_death"]	= "Średnia długość życia";
$pgv_lang["stat_longest_life"]		= "Osoba żyjąca najdłużej";
$pgv_lang["stat_most_children"]		= "Najwięcej dzieci w rodzinie";
$pgv_lang["stat_average_children"]	= "Średnia liczba dzieci w rodzinie";
$pgv_lang["stat_events"]			= "Wydarzeń";
$pgv_lang["stat_media"]				= "Multimediów";
$pgv_lang["stat_surnames"]			= "Nazwisk";
$pgv_lang["stat_users"]				= "Użytkowników";
$pgv_lang["no_family_facts"]		= "Brak faktów dla tej rodziny.";
$pgv_lang["stat_males"]				= "Mężczyzn";
$pgv_lang["stat_females"]			= "Kobiet";
$pgv_lang["stat_unknown"]			= "Nieznanych";
$pgv_lang["stat_link"]				= "Zobacz wykresy statystyk";
$pgv_lang["print_stat_link"]		= "Pokaż odnośnik do wykresów statystyk";

$pgv_lang["sunday_1st"]			= "nd";
$pgv_lang["monday_1st"]			= "pn";
$pgv_lang["tuesday_1st"]		= "wt";
$pgv_lang["wednesday_1st"]		= "śr";
$pgv_lang["thursday_1st"]		= "cz";
$pgv_lang["friday_1st"]			= "pt";
$pgv_lang["saturday_1st"]		= "so";

$pgv_lang["jan_1st"]			= "sty";
$pgv_lang["feb_1st"]			= "lut";
$pgv_lang["mar_1st"]			= "mar";
$pgv_lang["apr_1st"]			= "kwi";
$pgv_lang["may_1st"]			= "maj";
$pgv_lang["jun_1st"]			= "cze";
$pgv_lang["jul_1st"]			= "lip";
$pgv_lang["aug_1st"]			= "sie";
$pgv_lang["sep_1st"]			= "wrz";
$pgv_lang["oct_1st"]			= "paź";
$pgv_lang["nov_1st"]			= "lis";
$pgv_lang["dec_1st"]			= "gru";

$pgv_lang["edit_source"]		= "Edytuj źródło";
$pgv_lang["edit_shared_note"]	= "Edytuj wspólną notatkę";
$pgv_lang["familybook_chart"]	= "Diagram księgi rodzinnej";
$pgv_lang["family_of"]			= "Rodzina osoby:&nbsp;";
$pgv_lang["descent_steps"]		= "Liczba pokoleń potomków";
$pgv_lang["cancel"]				= "Anuluj";
$pgv_lang["cookie_help"]		= "Ta strona korzysta z plików cookie (\"ciasteczek\") do przechowywania twojego stanu zalogowania. Twoja przeglądarka ma prawdopodobnie wyłączoną obsługę plików cookie. Musisz ją włączyć zanim będzie można się zalogować. Zajrzyj do pomocy swojej przeglądarki aby dowiedzieć się, jak to zrobić.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]		= "Dane tej osoby zostały dołączone ze zdalnej strony.";
$pgv_lang["link_remote"]		= "Powiąż z osobą z zewnątrz";
//Add Remote Link
$pgv_lang["title_search_link"]	= "Dodaj odnośnik lokalny";
$pgv_lang["label_site_url2"]	= "Adres URL strony";
//new stuff

$pgv_lang["delete_family_confirm"]	= "Usunięcie rodziny spowoduje usunięcie powiązań między jej członkami, ale pozostawi osoby. Czy na pewno chcesz usunąć rodzinę?";
$pgv_lang["delete_family"]		= "Usuń rodzinę";
$pgv_lang["add_favorite"]		= "Dodaj do ulubionych";
$pgv_lang["url"]				= "Adres URL";
$pgv_lang["add_fav_enter_note"]	= "Dodatkowy komentarz do tego elementu";
$pgv_lang["add_fav_or_enter_url"]	= "<br/>LUB adres URL i tytuł";
$pgv_lang["add_fav_enter_id"]	= "ID osoby, rodziny lub źródła";
$pgv_lang["next_email_sent"]	= "Następny email z przypomnieniem zostanie wysłany po";
$pgv_lang["last_email_sent"]	= "Ostatni email z przypomnieniem wysłano";
$pgv_lang["remove_child"]		= "Usuń to dziecko z rodziny";
$pgv_lang["link_new_husb"]		= "Dodaj męża spośród istniejących osób";
$pgv_lang["link_new_wife"]		= "Dodaj żonę spośród istniejących osób";
$pgv_lang["address_labels"]		= "Etykiety adresowe";
$pgv_lang["filter_address"]		= "Adres zawiera";
$pgv_lang["address_list"]		= "Lista adresów";
$pgv_lang["index_edit_advice"]	= "Zaznacz nazwę bloku, a następnie kliknij odpowiednią strzałkę aby przesunąć blok we wskazanym kierunku.";
$pgv_lang["changelog"]			= "Zmiany w wersji #VERSION#";
$pgv_lang["html_block_descr"]		 = "To jest prosty blok HTML, który możesz umieścić na swojej stronie aby dodać dowolny rodzaj wiadomości.";
$pgv_lang["html_block_sample_part1"] = "<p class=\"blockhc\"><b>Tutaj umieść tytuł</b></p><br /><p>Wciśnij przycisk konfiguracji";
$pgv_lang["html_block_sample_part2"] = "aby zmienić to, co będzie tu wyświelane.</p>";
$pgv_lang["html_block_name"]		 = "HTML";
$pgv_lang["htmlplus_block_name"]	 = "Zaawansowany HTML";
$pgv_lang["htmlplus_block_descr"]	 = "To jest blok HTML, który możesz umieścić na swojej stronie aby dodać dowolny rodzaj wiadomości. W tekst HTML możesz także wstawiać odnośniki do informacji z pliku GEDCOM.";
$pgv_lang["htmlplus_block_templates"] = "Szablony";
$pgv_lang["htmlplus_block_content"]	= "Zawartość";
$pgv_lang["htmlplus_block_narrative"] = "Styl narracji (tylko język angielski)";
$pgv_lang["htmlplus_block_custom"]	= "Personalizacja";
$pgv_lang["htmlplus_block_keyword"]	= "Przykłady słów kluczowych (tylko język angielski)";
$pgv_lang["htmlplus_block_taglist"]	= "Lista haseł";
$pgv_lang["htmlplus_block_compat"]	= "Tryb kompatybilności";
$pgv_lang["htmlplus_block_ui"]		= "Rozszerzony interfejs";
$pgv_lang["htmlplus_block_current"]	= "Bieżący";
$pgv_lang["htmlplus_block_default"]	= "Domyślny";
$pgv_lang["htmlplus_block_gedcom"]	= "Drzewo genealogiczne";
$pgv_lang["htmlplus_block_birth"]	= "urodziny";
$pgv_lang["htmlplus_block_death"]	= "śmierć";
$pgv_lang["htmlplus_block_marrage"]	= "małżeństwo";
$pgv_lang["htmlplus_block_adoption"]= "adopcja";
$pgv_lang["htmlplus_block_burial"]	= "pogrzeb";
$pgv_lang["htmlplus_block_census"]	= "spis ludności";
$pgv_lang["num_to_show"]			= "Liczba elementów do pokazania";
$pgv_lang["days_to_show"]			= "Liczba dni do pokazania";
$pgv_lang["before_or_after"]		= "Gdzie umieścić liczniki?";
$pgv_lang["before"]					= "przed";
$pgv_lang["after"]					= "po";
$pgv_lang["config_block"]			= "Konfiguruj";
$pgv_lang["enter_comments"]			= "Podaj swoje pokrewieństwo z danymi w komentarzu";
$pgv_lang["comments"]				= "Komentarze";
$pgv_lang["child-family"]			= "Rodzice i rodzeństwo";
$pgv_lang["spouse-family"]			= "Małżonek i dzieci";
$pgv_lang["direct-ancestors"]		= "Przodkowie w linii prostej";
$pgv_lang["ancestors"]				= "Przodkowie w linii prostej i ich rodziny";
$pgv_lang["descendants"]			= "Potomkowie";
$pgv_lang["choose_relatives"]		= "Wybierz krewnych";
$pgv_lang["relatives_report"]		= "Raport o krewnych (podstawowy)";
$pgv_lang["total_unknown"]			= "Nieznanych";
$pgv_lang["total_living"]			= "Żyjących";
$pgv_lang["total_dead"]				= "Zmarłych";
$pgv_lang["total_not_born"]			= "Urodzonych martwych";
$pgv_lang["remove_custom_tags"]		= "Usuń znaczniki faktów PhpGedView (_PGVU, _THUM)";
$pgv_lang["cookie_login_help"]		= "Strona zapamiętała twoje dane z ostatniego logowania. Da Ci to dostęp do poufnej informacji i innych uprawnień użytkownika, ale, dla większego bezpieczeństwa, aby edytować lub zarządzać stroną będzie konieczne ponowne zalogowanie się.";
$pgv_lang["remember_me"]			= "Zapamiętaj moje dane";
$pgv_lang["fams_with_surname"]		= "Rodziny o nazwisku #surname#";
$pgv_lang["support_contact"]		= "Kontakt techniczny";
$pgv_lang["genealogy_contact"]		= "Kontakt genealogiczny";
$pgv_lang["common_upload_errors"]	= "Błąd: Prawdopodobnie próbowano załadować plik większy niż dozwolona wielkość. Domyślnie w PHP limit jest ustawiony na 2MB. Skontaktuj się z administratorem aby zwiększył limit w pliku php.ini lub załaduj plik używając FTP. Użyj strony <a href=\"uploadgedcom.php?action=add_form\"><b>Dodaj GedCom</b></a> po przegraniu pliku GedCom za pomocą FTP.";
$pgv_lang["total_memory_usage"]		= "Zużycie pamięci:";
$pgv_lang["mothers_family_with"]	= "Rodzina matki z: ";
$pgv_lang["fathers_family_with"]	= "Rodzina ojca z: ";
$pgv_lang["family_with"]			= "Rodzina z:";
$pgv_lang["halfsibling"]			= "Rodzeństwo przyrodnie";
$pgv_lang["halfbrother"]			= "Brat przyrodni";
$pgv_lang["halfsister"]				= "Siostra przyrodnia";
$pgv_lang["family_timeline"]		= "Pokaż rodzinę na wykresie osi czasu";
$pgv_lang["children_timeline"]		= "Pokaż dzieci na wykresie osi czasu";
$pgv_lang["other"]					= "Inne";
$pgv_lang["others"]					= "Pozostałe";
$pgv_lang["sort_by_marriage"]		= "Sortuj według daty ślubu";
$pgv_lang["reorder_families"]		= "Uporządkuj rodziny";
$pgv_lang["indis_with_surname"]		= "Osoby o nazwisku #surname#";
$pgv_lang["first_letter_name"]		= "Wybierz pierwszą literę nazwiska członków rodziny";
$pgv_lang["first_letter_sfname"]	= "Wybierz pierwszą literę imienia członków rodziny";
$pgv_lang["first_letter_iname"]		= "Wybierz pierwszą literę nazwiska osoby";
$pgv_lang["first_letter_fname"]		= "Wybierz pierwszą literę imienia osoby";
$pgv_lang["total_names"]			= "Wszystkich nazwisk";
$pgv_lang["total_changes"]			= "Wszystkich zmian";
$pgv_lang["total_links"]			= "Wszystkich powiązań";
$pgv_lang["top10_pageviews_nohits"]	= "Na razie brak odwiedzin do wyświetlenia.";
$pgv_lang["top10_pageviews_msg"]	= "Należy włączyć liczniki odwiedzin w konfiguracji pliku GEDCOM (sekcja wyglądu, grupa Ukryj i pokaż).";
$pgv_lang["review_changes_descr"]	= "Blok \"Zmiany w toku\" pokazuje użytkownikom z prawami edycji listę wpisów, które zostały zmienione i oczekują na przejrzenie i zaakceptowanie. Zmiany w toku zostaną zaakceptowane lub odrzucone.<br /><br />Jeśli ten blok jest włączony, użytkownicy z prawami zatwierdzania będą dostawać email informujący o konieczności przejrzenia zmian.";
$pgv_lang["review_changes_block"]	= "Oczekujące zmiany";
$pgv_lang["review_changes_email"]	= "Wysyłaj emaile przypominające";
$pgv_lang["review_changes_email_freq"]	= "Częstotliwość przypomnień przez email (dni)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Przegląd zmian";
$pgv_lang["review_changes_body"]	= "Wprowadzono zmiany do genealogicznej bazy danych. Zmiany te należy przejrzeć i zatwierdzić zanim staną się widoczne dla wszystkich użytkowników. Skorzystaj z adresu URL poniżej aby wejść na stronę, zalogować się i przejrzeć zmiany.";
$pgv_lang["show_pending"]			= "Pokaż zmiany w toku";
$pgv_lang["show_spouses"]			= "Pokaż małżonków";
$pgv_lang["quick_update_title"] 	= "Szybka aktualizacja";
$pgv_lang["quick_update_instructions"] 	= "Ta strona pozwala na szybkie aktualizowanie informacji o osobie. Wystarczy wypełnić pola, w których dane wymagają uzupełnienia lub poprawienia. Zmiany będą widoczne dopiero po zatwierdzeniu przez administratora.";
$pgv_lang["update_name"] 			= "Zaktualizuj nazwisko";
$pgv_lang["update_fact"] 			= "Zaktualizuj wydarzenie";
$pgv_lang["update_fact_restricted"] = "Aktualizacja tego faktu jest ograniczona:";
$pgv_lang["select_fact"] 			= "Wybierz wydarzenie...";
$pgv_lang["update_address"] 		= "Zaktualizuj adres";
$pgv_lang["top10_pageviews_descr"]	= "Ten blok wyświetla 10 osób, które były najczęściej odwiedzane. Blok wymaga włączenia licznika odwiedzin w ustawieniach konfiguracyjnych GEDCOM.";
$pgv_lang["top10_pageviews"]		= "Najczęściej odwiedzane";
$pgv_lang["top10_pageviews_block"]	= "Najczęściej odwiedzane";
$pgv_lang["stepparent"]				= "Ojczym/Macocha";
$pgv_lang["stepdad"]				= "Ojczym";
$pgv_lang["stepmom"]				= "Macocha";
$pgv_lang["stepsister"]				= "Siostra przyrodnia";
$pgv_lang["stepbrother"]			= "Brat przyrodni";
$pgv_lang["fams_charts"]			= "Opcje dla rodziny";
$pgv_lang["indis_charts"]			= "Opcje dla osoby";
$pgv_lang["none"]					= "Brak";
$pgv_lang["facts"]					= "Fakty";
$pgv_lang["locked"]					= "Edycja zablokowana";
$pgv_lang["privacy"]				= "Dane prywatne";
$pgv_lang["number_sign"]			= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]					= "?";
$pgv_lang["qm_ah"]				= "?";
$pgv_lang["page_help"]			= "Pomoc";
$pgv_lang["help_for_this_page"]	= "Pomoc dla tej strony";
$pgv_lang["help_contents"]		= "Pomoc ogólna";
$pgv_lang["show_context_help"]	= "Pokaż pomoc kontekstową";
$pgv_lang["hide_context_help"]	= "Ukryj pomoc kontekstową";
$pgv_lang["sorry"]				= "<b>Treść pomocy dla tej strony nie została jeszcze przygotowana</b>";
$pgv_lang["help_not_exist"]		= "<b>Pomoc dla tego elementu lub strony jest niedostępna</b>";
$pgv_lang["var_not_exist"]		= "<span style=\"font-weight: bold\">Zmienna językowa nie istnieje. Powiadom nas o tym błędzie.</span>";
$pgv_lang["resolution"]			= "Rozdzielczość ekranu";
$pgv_lang["menu"]				= "Menu";
$pgv_lang["header"]				= "Nagłówek";
$pgv_lang["imageview"]			= "Przeglądarka obrazów";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]			= "Logowanie użytkownika";
$pgv_lang["for_support"]		= "Pomocy i informacji udziela";
$pgv_lang["for_contact"]		= "Na pytania genealogiczne odpowiada";
$pgv_lang["for_all_contact"]	= "Pomocy i informacji udziela administrator strony ";
$pgv_lang["choose_username"]	= "Proponowany login";
$pgv_lang["username"]			= "Login";
$pgv_lang["invalid_username"]	= "Login zawiera niedozwolone znaki";
$pgv_lang["firstname"]			= "Imię";
$pgv_lang["lastname"]			= "Nazwisko";
$pgv_lang["choose_password"]	= "Proponowane hasło";
$pgv_lang["password"]			= "Hasło";
$pgv_lang["confirm"]			= "Potwierdź hasło";
$pgv_lang["login"]				= "Zaloguj";
$pgv_lang["logout"]				= "Wyloguj";
$pgv_lang["admin"]				= "Administracja";
$pgv_lang["logged_in_as"]		= "Użytkownik:";
$pgv_lang["my_pedigree"]		= "Mój rodowód";
$pgv_lang["my_indi"]			= "Moje dane";
$pgv_lang["yes"]				= "Tak";
$pgv_lang["no"]					= "Nie";
$pgv_lang["change_theme"]		= "Zmień motyw";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Drzewo rodowe";
$pgv_lang["gen_ped_chart"]		= "#PEDIGREE_GENERATIONS# - pokoleniowy wykres rodowy";
$pgv_lang["generations"]		= "Liczba pokoleń";
$pgv_lang["view"]				= "Pokaż";
$pgv_lang["fam_spouse"]			= "Małżeństwo z";
$pgv_lang["rootid"]				= "Główna osoba wykresu rodowego";
$pgv_lang["root_person"]		= "ID osoby głównej";
$pgv_lang["hide_details"]		= "Ukryj szczegóły";
$pgv_lang["show_details"]		= "Pokaż szczegóły";
$pgv_lang["person_links"]		= "Odnośniki do wykresów, rodzin i bliskich krewnych tej osoby.";
$pgv_lang["zoom_box"]			= "Powiększ/pomniejsz tę ramkę";
$pgv_lang["orientation"]		= "Typ orientacji";
$pgv_lang["portrait"]			= "pionowy";
$pgv_lang["landscape"]			= "poziomy";
$pgv_lang["landscape_top"]		= "starsi na górze";
$pgv_lang["landscape_down"]		= "starsi na dole";
$pgv_lang["start_at_parents"]	= "Zacznij od rodziców";
$pgv_lang["charts"]				= "Diagramy";
$pgv_lang["lists"]				= "Listy";
$pgv_lang["box_width"]			= "Szerokość ramki";
$pgv_lang["random_surn"]		= "Losowe nazwisko";
$pgv_lang["generation_number"]	= "Numer pokolenia";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Nie znaleziono rodziny o tym identyfikatorze";
$pgv_lang["unable_to_find_record"]	= "Nie znaleziono wpisu o tym identyfikatorze";
$pgv_lang["title"]				= "Tytuł";
$pgv_lang["living"]				= "Żyjący(a)";
$pgv_lang["private"]			= "Prywatne";
$pgv_lang["birth"]				= "Urodziny:";
$pgv_lang["death"]				= "Śmierć:";
$pgv_lang["descend_chart"]		= "Diagram potomków";
$pgv_lang["individual_list"]	= "Lista osób";
$pgv_lang["family_list"]		= "Lista rodzin";
$pgv_lang["branch_list"]		= "Lista gałęzi";
$pgv_lang["source_list"]		= "Lista źródeł";
$pgv_lang["shared_note_list"]	= "Lista wspólnych notatek";
$pgv_lang["place_list"]			= "Hierarchia miejsc";
$pgv_lang["place_list_aft"] 	= "Lista miejsc po";
$pgv_lang["media_list"]			= "Lista multimediów";
$pgv_lang["repo_list"]			= "Lista repozytoriów";
$pgv_lang["search"]				= "Szukaj";
$pgv_lang["clippings_cart"]		= "Wycinki";
$pgv_lang["print_preview"]		= "Wersja do druku";
$pgv_lang["cancel_preview"]		= "Powrót do normalnego widoku";
$pgv_lang["change_lang"]		= "Zmień język";
$pgv_lang["print"]				= "Drukuj";
$pgv_lang["total_queries"]		= "Zapytań do bazy danych:";
$pgv_lang["total_privacy_checks"]	= "Sprawdzeń prywatności:";
$pgv_lang["back"]				= "Wstecz";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]				= "znany(a) także jako";
$pgv_lang["male"]				= "Mężczyzna";
$pgv_lang["males"]				= "Mężczyźni";
$pgv_lang["female"]				= "Kobieta";
$pgv_lang["females"]			= "Kobiety";
$pgv_lang["temple"]				= "Świątynia Mormońska";
$pgv_lang["temple_code"]		= "Kod Świątyni Mormońskiej:";
$pgv_lang["status"]				= "Status";
$pgv_lang["source"]				= "Źródło";
$pgv_lang["text"]				= "Tekst źródłowy:";
$pgv_lang["note"]				= "Notatka";
$pgv_lang["NN"]					= "(nieznane)";
$pgv_lang["PN"]					= "(nieznane)";
$pgv_lang["NNhebrew"] 			= "(לא-ידוע)";
$pgv_lang["PNhebrew"] 			= "(לא-ידוע)";
$pgv_lang["NNarabic"] 			= "(غير معروف)";
$pgv_lang["PNarabic"] 			= "(غير معروف)";
$pgv_lang["NNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["PNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["NNrussian"] 			= "(неопределено)";
$pgv_lang["PNrussian"] 			= "(неопределено)";
$pgv_lang["NNchinese"] 			= "(未知)";
$pgv_lang["PNchinese"] 			= "(未知)";
$pgv_lang["NNvietnamese"]		= "(vô danh)";
$pgv_lang["PNvietnamese"]		= "(không biết tuổi)";
$pgv_lang["NNthai"] 			= "(nieznane)";
$pgv_lang["PNthai"] 			= "(nieznane)";
$pgv_lang["NNother"] 			= "(nieznane)";
$pgv_lang["PNother"] 			= "(nieznane)";
$pgv_lang["unrecognized_code"]	= "Nieznany kod GEDCOM";
$pgv_lang["unrecognized_code_msg"]	= "Wystąpił błąd, który należy naprawić. Zgłoś go do";
$pgv_lang["indi_info"]			= "Informacje o osobie";
$pgv_lang["pedigree_chart"]		= "Diagram rodowy";
$pgv_lang["individual"]			= "Osoba";
$pgv_lang["as_spouse"]			= "Małżeństwo z:";
$pgv_lang["privacy_error"]	  	= "Dane te są prywatne i nie mogą być pokazane.";
$pgv_lang["more_information"]	= "Więcej informacji udziela";
$pgv_lang["given_name"]			= "Imię:";
$pgv_lang["surname"]			= "Nazwisko:";
$pgv_lang["suffix"]				= "Przyrostek:";
$pgv_lang["sex"]				= "Płeć";
$pgv_lang["personal_facts"]		= "Fakty i dane osoby";
$pgv_lang["type"]				= "Typ";
$pgv_lang["parents"] 			= "Rodzice";
$pgv_lang["gparents"] 			= "Dziadkowie";
$pgv_lang["siblings"] 			= "Rodzeństwo";
$pgv_lang["father"] 			= "Ojciec";
$pgv_lang["mother"] 			= "Matka";
$pgv_lang["parent"] 			= "Rodzic";
$pgv_lang["parent_age"] 		= "Wiek rodzica";
$pgv_lang["father_age"]			= "Wiek ojca";
$pgv_lang["mother_age"]			= "Wiek matki";
$pgv_lang["self"] 				= "Siebie";
$pgv_lang["relatives"]			= "Bliscy";
$pgv_lang["relatives_events"]	= "Wydarzenia dotyczące bliskich";
$pgv_lang["historical_facts"]	= "Fakty historyczne";
$pgv_lang["partner"] 			= "Partner";
$pgv_lang["spouse"]				= "Związek z";
$pgv_lang["spouses"] 			= "Małżonkowie";
$pgv_lang["surnames"]			= "Wszystkich nazwisk";
$pgv_lang["adopted"]			= "Adopcja";
$pgv_lang["foster"]				= "Przybranie";
$pgv_lang["sealing"]			= "Naznaczenie";
$pgv_lang["challenged"]			= "Dysputowane";
$pgv_lang["disproved"]			= "Odrzucone";
$pgv_lang["infant"]				= "Niemowlę";
$pgv_lang["stillborn"]			= "Narodzone martwe";
$pgv_lang["deceased"]			= "Zmarły(a)";
$pgv_lang["link_as_wife"]		= "Powiąż jako żonę z istniejącą rodziną";
$pgv_lang["no_tab1"]			= "Brak faktów dla tej osoby.";
$pgv_lang["no_tab2"]			= "Brak notatek dla tej osoby.";
$pgv_lang["no_tab3"]			= "Brak źródeł powiązanych z tą osobą.";
$pgv_lang["no_tab4"]			= "Brak multimediów powiązanych z tą osobą.";
$pgv_lang["no_tab5"]			= "Brak bliskich krewnych tej osoby.";
$pgv_lang["no_tab6"]			= "Brak danych Asystenta badań powiązanych z tą osobą.";
$pgv_lang["show_fact_sources"]	= "Pokaż wszystkie źródła";
$pgv_lang["show_fact_notes"]	= "Pokaż wszystkie notatki";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Dane rodziny";
$pgv_lang["family_group_info"]	= "Dane grupy rodzinnej";
$pgv_lang["husband"]			= "Mąż";
$pgv_lang["wife"]				= "Żona";
$pgv_lang["marriage"]			= "Małżeństwo:";
$pgv_lang["lds_sealing"]		= "Naznaczenie mormońskie:";
$pgv_lang["marriage_license"]	= "Akt ślubu:";
$pgv_lang["no_children"]		= "Brak dzieci";
$pgv_lang["known_child"]		= "1 dziecko";
$pgv_lang["known_children"]		= "dzieci";
$pgv_lang["childless_family"]	= "Małżeństwo bezdzietne";
$pgv_lang["parents_timeline"]	= "Pokaż parę na osi czasu";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "Wycinki";
$pgv_lang["which_links"]		= "Które powiązania tej rodziny chcesz dodać?";
$pgv_lang["just_family"]		= "Dodaj tylko wpis o tej rodzinie.";
$pgv_lang["parents_and_family"]	= "Dodaj wpisy rodziców wraz z wpisem o tej rodzinie.";
$pgv_lang["parents_and_child"]	= "Dodaj wpisy rodziców i dzieci wraz z wpisem o tej rodzinie.";
$pgv_lang["parents_desc"]		= "Dodaj wpisy rodziców i wpisy wszystkich potomków wraz z wpisem o tej rodzinie.";
$pgv_lang["continue"]			= "Dalej";
$pgv_lang["which_p_links"]		= "Które powiązania tej osoby chcesz dodać?";
$pgv_lang["just_person"]		= "Dodaj tylko tę osobę.";
$pgv_lang["person_parents_sibs"]	= "Dodaj tę osobę, rodziców i rodzeństwo.";
$pgv_lang["person_ancestors"]		= "Dodaj tę osobę i przodków w linii prostej.";
$pgv_lang["person_ancestor_fams"]	= "Dodaj tę osobę, przodków w linii prostej i ich rodziny.";
$pgv_lang["person_spouse"]			= "Dodaj tę osobę, małżonka i dzieci.";
$pgv_lang["person_desc"]			= "Dodaj tę osobę, małżonka i wszystkich potomków.";
$pgv_lang["which_s_links"]			= "Które wpisy powiązane z tym źródłem chcesz dodać?";
$pgv_lang["just_source"]			= "Dodaj samo źródło.";
$pgv_lang["linked_source"]			= "Dodaj źródło i rodziny/osoby z nim powiązane.";
$pgv_lang["person_private"]			= "Szczegółowe informacje o tej osobie są poufne i nie zostaną pokazane.";
$pgv_lang["family_private"]			= "Szczegółowe informacje o tej rodzinie są poufne i nie zostaną pokazane.";
$pgv_lang["media_private"]			= "Szczegółowe informacje o tych multimediach są poufne i nie zostaną pokazane.";
$pgv_lang["download"]				= "Kliknij prawym przyciskiem (control-click na Mac'u) na odnośnikach poniżej i wybierz &quot;Zapisz element docelowy jako...&quot; aby pobrać pliki.";
$pgv_lang["cart_is_empty"]			= "Brak wycinków.";
$pgv_lang["id"]						= "ID";
$pgv_lang["ID"]						= "ID";
$pgv_lang["name_description"]		= "Nazwisko / Opis";
$pgv_lang["remove"]					= "Usuń";
$pgv_lang["empty_cart"]				= "Usuń wszystkie wycinki";
$pgv_lang["download_now"]			= "Pobierz";
$pgv_lang["download_file"]			= "Pobierz plik #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Ta osoba została pobrana z:";
$pgv_lang["family_downloaded_from"]	= "Ta rodzina została pobrana z:";
$pgv_lang["source_downloaded_from"]	= "To źródło zostało pobrane z:";
$pgv_lang["enter_person_generations"] = "Liczba pokoleń:";
$pgv_lang["convertPath"]			= "Zamień ścieżkę dostępu multimediów na";
$pgv_lang["convertSlashes"]			= "Zamień separatory folderów z multimediami";
$pgv_lang["forwardSlashes"]			= "Ukośniki : /";
$pgv_lang["backSlashes"]			= "Ukośniki : \\";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "powiązań z miejscem";
$pgv_lang["top_level"]			= "Najwyższy poziom hierarchii";
$pgv_lang["form"]				= "Miejsca są zakodowane w postaci: ";
$pgv_lang["default_form"]		= "miejscowość, powiat, województwo, kraj";
$pgv_lang["default_form_info"]	= "(domyślne)";
$pgv_lang["unknown"]			= "nieznane";
$pgv_lang["individuals"]		= "Osoby";
$pgv_lang["view_records_in_place"]	= "Zobacz wszystkie wpisy dotyczące tego miejsca";
$pgv_lang["place_list2"] 			= "Lista miejsc";
$pgv_lang["show_place_hierarchy"]	= "Pokaż miejsca w postaci hierarchii";
$pgv_lang["show_place_list"]		= "Pokaż miejsca w postaci listy";
$pgv_lang["total_unic_places"]		= "Różnych miejsc:";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "Zewnętrzne obiekty";
$pgv_lang["multi_title"]			= "Lista obiektów multimedialnych";
$pgv_lang["media_found"]			= "Znalezionych obiektów multimedialnych:";
$pgv_lang["view_person"]			= "Zobacz osobę";
$pgv_lang["view_family"]			= "Zobacz rodzinę";
$pgv_lang["view_source"]			= "Zobacz źródło";
$pgv_lang["view_object"]			= "Zobacz obiekt";
$pgv_lang["prev"]					= "< poprzednia";
$pgv_lang["next"]					= "następna >";
$pgv_lang["next_image"]				= "następny obraz";
$pgv_lang["file_not_found"]			= "Nie znaleziono pliku:";
$pgv_lang["medialist_show"] 		= "Pokaż";
$pgv_lang["per_page"]				= "Liczba obiektów na stronę";
$pgv_lang["media_format"]			= "Format multimediów";
$pgv_lang["image_size"]				= "Wymiary obrazka";
$pgv_lang["media_id"]				= "Identyfikator multimediów";
$pgv_lang["invalid_id"]				= "Brak podanego identyfikatora w tym pliku GEDCOM.";
$pgv_lang["record_updated"]			= "Wpis #pid# został pomyślnie zaktualizowany.";
$pgv_lang["record_not_updated"]		= "Aktualizacja wpisu #pid# nie powiodła się.";
$pgv_lang["record_removed"]			= "Wpis #xref# został usunięty z pliku GEDCOM.";
$pgv_lang["record_not_removed"]		= "Usuwanie wpisu #xref# z pliku GEDCOM nie powiodło się.";
$pgv_lang["record_added"]			= "Wpis #xref# został dodany do pliku GEDCOM.";
$pgv_lang["record_not_added"]		= "Dodawanie wpisu #xref# do pliku GEDCOM nie powiodło się.";

//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"]			= "Wyszukiwanie fonetyczne (Soundex)";
$pgv_lang["sources"]				= "Źródła";
$pgv_lang["shared_notes"]			= "Wspólne notatki";
$pgv_lang["lastname_search"]		= "Nazwisko";
$pgv_lang["search_place"]			= "Miejsce";
$pgv_lang["search_year"]			= "Rok";
$pgv_lang["no_results"]				= "Nic nie znaleziono.";
$pgv_lang["search_soundex"]			= "Wyszukiwanie fonetyczne";
$pgv_lang["search_replace"]			= "Znajdź i zamień";
$pgv_lang["search_sources"]			= "Źródła";
$pgv_lang["search_shared_notes"]	= "Wspólne notatki";
$pgv_lang["search_more_chars"]		= "Wprowadź więcej niż jeden znak";
$pgv_lang["search_soundextype"]		= "Typ Soundexu:";
$pgv_lang["search_russell"]			= "Podstawowy";
$pgv_lang["search_tagfilter"]		= "Filtrowanie";
$pgv_lang["search_tagfon"]			= "Pomiń dane niegenealogiczne";
$pgv_lang["search_tagfoff"]			= "Nie pomijaj żadnych danych";
$pgv_lang["associate"]				= "powiązany";
$pgv_lang["search_record"]			= "Cały wpis";
$pgv_lang["search_to"]				= "do";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]			= "Tytuły";
$pgv_lang["find_source"]			= "Znajdź źrodło";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repository"]				= "Repozytoria";
$pgv_lang["repos_found"]			= "Znaleziono repozytoria";
$pgv_lang["find_repository"]		= "Znajdź repozytorium";
$pgv_lang["total_repositories"]		= "Wszystkich repozytoriów";
$pgv_lang["confirm_delete_repo"]	= "Czy na pewno chcesz usunąć to repozytorium?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]			= "Dane źródła";
$pgv_lang["people"]					= "Osoby";
$pgv_lang["families"]				= "Rodziny";
$pgv_lang["total_sources"]			= "Wszystkich źródeł";

//-- SHARED NOTE FILE MESSAGES
$pgv_lang["shared_note"]				= "Wspólna notatka";
$pgv_lang["shared_note_list"]			= "Lista wspólnych notatek";
$pgv_lang["shared_notes_found"]			= "Znalezionych notatek";
$pgv_lang["find_shared_note"]			= "Znajdź wspólną notatkę";
$pgv_lang["shared_note_info"]			= "Dane wspólnej notatki";
$pgv_lang["total_shared_notes"]			= "Wszystkich notatek";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]		= "Nieprawidłowy format GEDCOM 5.5";
$pgv_lang["exec_time"]				= "Czas wykonania:";
$pgv_lang["unable_to_create_index"]	= "Utworzenie indeksu nie powiodło się. Upewnij się, że masz prawa zapisu w katalogu phpGedView. Uprawnienia mogą zostać przywrócone po utworzeniu indeksów.";
$pgv_lang["changes_present"]		= "W tym pliku GEDCOM znajdują się zmiany czekające na zatwierdzenie. Jeżeli będziesz kontynuować import, wszystkie te zmiany zostaną odrzucone. Zaleca się przejrzeć wszystkie oczekujące zmiany przed importem pliku GEDCOM.";
$pgv_lang["sec"]					= "sek.";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]				= "Wszystkich rodzin";
$pgv_lang["total_indis"]			= "Wszystkich osób";
$pgv_lang["notes"]					= "Notatki";
$pgv_lang["ssourcess"]				= "Źródła";
$pgv_lang["media"]					= "Multimedia";
$pgv_lang["name_contains"]			= "Nazwa zawiera:";
$pgv_lang["filter"]					= "Szukaj";
$pgv_lang["apply_filter"]			= "Zastosuj";
$pgv_lang["find_individual"]		= "Znajdź ID osoby";
$pgv_lang["find_familyid"]			= "Znajdź ID rodziny";
$pgv_lang["find_sourceid"]			= "Znajdź ID źródła";
$pgv_lang["find_specialchar"]		= "Znajdź znaki specjalne";
$pgv_lang["magnify"]				= "Powiększ";
$pgv_lang["skip_surnames"]			= "Pomiń listę nazwisk";
$pgv_lang["show_surnames"]			= "Pokaż listę nazwisk";
$pgv_lang["skip_marnms"]			= "Pomiń nazwiska po ślubie";
$pgv_lang["show_marnms"]			= "Pokaż nazwiska po ślubie";
$pgv_lang["all"]					= "Wszystkie";
$pgv_lang["hidden"]					= "Ukryte";
$pgv_lang["confidential"]			= "Poufne";
$pgv_lang["alpha_index"]			= "Spis alfabetyczny";
$pgv_lang["name_list"]				= "Lista nazwisk";
$pgv_lang["firstname_alpha_index"]	= "Spis alfabetyczny imion";
$pgv_lang["roots"]					= "Korzenie";
$pgv_lang["leaves"] 				= "Liście";
$pgv_lang["widow"] 					= "Wdowa";
$pgv_lang["widower"] 				= "Wdowiec";
$pgv_lang["show_parents"]			= "Pokaż rodziców";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]					= "Wiek";
$pgv_lang["husb_age"]				= "Wiek męża";
$pgv_lang["wife_age"]				= "Wiek żony";
$pgv_lang["year1"]					= "rok";
$pgv_lang["years"]					= "lat";
$pgv_lang["years2"]					= "lata";
$pgv_lang["month1"]					= "miesiąc";
$pgv_lang["months"]					= "miesięcy";
$pgv_lang["week1"]					= "tydzień";
$pgv_lang["weeks"]					= "tygodni";
$pgv_lang["day1"]					= "dzień";
$pgv_lang["days"]					= "dni";
$pgv_lang["after_death"]			= "po śmierci";
$pgv_lang["at_death_day"]			= "w dniu śmierci";
$pgv_lang["timeline_title"]			= "Oś czasu";
$pgv_lang["timeline_chart"]			= "Wykres osi czasu";
$pgv_lang["remove_person"]			= "Usuń osobę";
$pgv_lang["show_age"]				= "Pokaż znacznik wieku";
$pgv_lang["add_another"]			= "Dodaj nową osobę do wykresu:<br />Identyfikator osoby:";
$pgv_lang["find_id"]				= "Znajdź ID";
$pgv_lang["show"]					= "Pokaż";
$pgv_lang["year"]					= "Rok:";
$pgv_lang["timeline_instructions"]	= "W większości nowych przeglądarek można przeciągać ramki po wykresie.";
$pgv_lang["zoom_in"]				= "Powiększ";
$pgv_lang["zoom_out"]				= "Pomniejsz";
$pgv_lang["timeline_beginYear"]		= "Rok początkowy";
$pgv_lang["timeline_endYear"]		= "Rok końcowy";
$pgv_lang["timeline_scrollSpeed"]	= "Prędkość";
$pgv_lang["timeline_controls"]		= "Panel kontrolny osi czasu";
$pgv_lang["include_family"]			= "Uwzględnij najbliższą rodzinę";
$pgv_lang["lifespan_chart"]			= "Wykres długości życia";

// calendar conversion options
$pgv_lang["cal_none"]			= "Brak konwersji kalendarza";
$pgv_lang["cal_gregorian"]		= "Kalendarz gregoriański";
$pgv_lang["cal_julian"]			= "juliański";
$pgv_lang["cal_french"]			= "francuski";
$pgv_lang["cal_jewish"]			= "żydowski";
$pgv_lang["cal_hebrew"]			= "hebrajski";
$pgv_lang["cal_jewish_and_gregorian"] = "żydowski i gregoriański";
$pgv_lang["cal_hebrew_and_gregorian"] = "hebrajski i gregoriański";
$pgv_lang["cal_hijri"]			= "Hijri";
$pgv_lang["cal_arabic"]			= "arabski";

// some religious dates
$pgv_lang["easter"]			= "Wielkanoc";
$pgv_lang["ascension"]		= "Wniebowstąpienie";
$pgv_lang["pentecost"]		= "Zielone Świątki";
$pgv_lang["assumption"]		= "Wniebowzięcie Najświętszej Maryi Panny";
$pgv_lang["all_saints"]		= "Wszystkich Świętych";
$pgv_lang["christmas"] 		= "Boże Narodzenie";

// am/pm suffixes for 12 hour clocks
$pgv_lang["midn"]				= "mn";
$pgv_lang["noon"]				= "m";
$pgv_lang["p.m."]				= "pm";
$pgv_lang["a.m."]				= "am";

//-- MONTH NAMES
$pgv_lang["jan"]				= "styczeń";
$pgv_lang["feb"]				= "luty";
$pgv_lang["mar"]				= "marzec";
$pgv_lang["apr"]				= "kwiecień";
$pgv_lang["may"]				= "maj";
$pgv_lang["jun"]				= "czerwiec";
$pgv_lang["jul"]				= "lipiec";
$pgv_lang["aug"]				= "sierpień";
$pgv_lang["sep"]				= "wrzesień";
$pgv_lang["oct"]				= "październik";
$pgv_lang["nov"]				= "listopad";
$pgv_lang["dec"]				= "grudzień";

$pgv_lang["vend"]				= "Vendémiaire";
$pgv_lang["brum"]				= "Brumaire";
$pgv_lang["frim"]				= "Frimaire";
$pgv_lang["nivo"]				= "Nivôse";
$pgv_lang["pluv"]				= "Pluviôse";
$pgv_lang["vent"]				= "Ventôse";
$pgv_lang["germ"]				= "Germinal";
$pgv_lang["flor"]				= "Floréal";
$pgv_lang["prai"]				= "Prairial";
$pgv_lang["mess"]				= "Messidor";
$pgv_lang["ther"]				= "Thermidor";
$pgv_lang["fruc"]				= "Fructidor";
$pgv_lang["comp"]				= "jours complémentaires";

$pgv_lang["tsh"]				= "Tishrei";
$pgv_lang["csh"]				= "Heshvan";
$pgv_lang["ksl"]				= "Kislev";
$pgv_lang["tvt"]				= "Tevet";
$pgv_lang["shv"]				= "Shevat";
$pgv_lang["adr"]				= "Adar";
$pgv_lang["adr_leap_year"]		= "Adar I";
$pgv_lang["ads"]				= "Adar II";
$pgv_lang["nsn"]				= "Nissan";
$pgv_lang["iyr"]				= "Iyar";
$pgv_lang["svn"]				= "Sivan";
$pgv_lang["tmz"]				= "Tamuz";
$pgv_lang["aav"]				= "Av";
$pgv_lang["ell"]				= "Elul";

$pgv_lang["muhar"]				= "Muharram";
$pgv_lang["safar"]				= "Safar";
$pgv_lang["rabia"]				= "Rabi' al-awwal";
$pgv_lang["rabit"]				= "Rabi' al-thani";
$pgv_lang["jumaa"]				= "Jumada al-awwal";
$pgv_lang["jumat"]				= "Jumada al-thani";
$pgv_lang["rajab"]				= "Rajab";
$pgv_lang["shaab"]				= "Sha'aban";
$pgv_lang["ramad"]				= "Ramadan";
$pgv_lang["shaww"]				= "Shawwal";
$pgv_lang["dhuaq"]				= "Dhu al-Qi'dah";
$pgv_lang["dhuah"]				= "Dhu al-Hijjah";

$pgv_lang["b.c."]				= "p.n.e.";

$pgv_lang["abt"]				= "ok.";
$pgv_lang["aft"]				= "po";
$pgv_lang["and"]				= "i";
$pgv_lang["bef"]				= "przed";
$pgv_lang["bet"]				= "między";
$pgv_lang["cal"]				= "wyliczone";
$pgv_lang["est"]				= "szacowane";
$pgv_lang["from"]				= "od";
$pgv_lang["int"]				= "zinterpretowane";
$pgv_lang["to"]					= "do";
$pgv_lang["cir"]				= "ok.";
$pgv_lang["apx"]				= "ok.";

//-- Admin File Messages
$pgv_lang["password_mismatch"]		= "Niepoprawne hasło.";
$pgv_lang["enter_username"]			= "Podaj login.";
$pgv_lang["enter_password"]			= "Podaj hasło.";
$pgv_lang["save"]					= "Zapisz";
$pgv_lang["saveandgo"]				= "Zapisz i idź do nowego wpisu";
$pgv_lang["delete"]					= "Usuń";
$pgv_lang["edit"]					= "Edytuj";
$pgv_lang["no_login"]				= "Niepoprawny login lub hasło.";
$pgv_lang["basic_realm"]			= "System autoryzacji PhpGedView";
$pgv_lang["basic_auth_failure"]		= "Aby uzyskać dostęp do tego zasobu, wymagane jest podanie loginu i hasła.";
$pgv_lang["basic_auth"]				= "Autoryzacja podstawowa";
$pgv_lang["digest_auth"]			= "Autoryzacja przekrojowa";
$pgv_lang["no_auth_needed"]			= "Brak autoryzacji";
$pgv_lang["file_not_exists"]		= "Podany plik nie istnieje.";
$pgv_lang["research_assistant"]		= "Asystent badań";
$pgv_lang["utf8_to_ansi"]			= "Konwertuj z UTF-8 do ANSI";
$pgv_lang["media_linked"]			= "Ten obiekt multimedialny jest powiązany z:";
$pgv_lang["media_not_linked"]		= "Ten obiekt multimedialny nie jest powiązany z żadnym wpisem GEDCOM.";
$pgv_lang["media_dir_1"]			= "Ten obiekt jest zlokalizowany na zewnętrznym serwerze";
$pgv_lang["media_dir_2"]			= "Ten obiekt znajduje się w katalogu standardowym multimediów";
$pgv_lang["media_dir_3"]			= "Ten obiekt znajduje się w katalogu chronionym multimediów";
$pgv_lang["thumb_dir_1"]			= "Ta miniaturka jest zlokalizowana na zewnętrznym serwerze";
$pgv_lang["thumb_dir_2"]			= "Ta miniaturka znajduje się w katalogu standardowym multimediów";
$pgv_lang["thumb_dir_3"]			= "Ta miniaturka znajduje się w katalogu chronionym multimediów";
$pgv_lang["moveto_2"]				= "Przenieś do katalogu chronionego";
$pgv_lang["moveto_3"]				= "Przenieś do katalogu standardowego";
$pgv_lang["move_standard"]			= "Przenieś do standardowego";
$pgv_lang["move_protected"]			= "Przenieś do chronionego";
$pgv_lang["move_mediadirs"]			= "Przenieś katalogi multimediów";
$pgv_lang["setperms"]				= "Ustaw atrybuty multimediów";
$pgv_lang["setperms_fix"]			= "Popraw atrybuty multimediów";
$pgv_lang["setperms_success"]		= "Atrybuty";
$pgv_lang["setperms_failure"]		= "Atrybuty nie ustwione";
$pgv_lang["setperms_time_exceeded"]	= "Czas wykonania został przekroczony. Spróbuj ponownie dla mniejszego katalogu.";
$pgv_lang["move_time_exceeded"]		= "Czas wykonania został przekroczony. Spróbuj ponownie aby przenieść pozostałe pliki.";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "Katalog Firewalla multimediów nie istnieje. Musisz go stworzyć najpierw.";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "Katalog chroniony multimediów nie może być stworzony w katalogu głównym Firewalla multimediów. Stwórz ten katalog w innym miejscu i ustaw atrybuty na możliwość zapisu dla wszystkich.";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "katalog chroniony multimediów w katalogu głównym Firewlla multimediów nie jest dostępny dla wszystkich jako zapisywalny.";
$pgv_lang["media_firewall_invalid_dir"]					= "Błąd: Firewall multimediów został włączony z innego katalogu niż katalog multimediów.";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Zobacz szczegóły ...";
$pgv_lang["view_fam_nav_notes"]		= "Zobacz notatki ...";
$pgv_lang["view_fam_nav_sources"]	= "Zobacz źródła ...";
$pgv_lang["view_fam_nav_media"]		= "Zobacz multimedia ...";
$pgv_lang["view_fam_nav_album"]		= "Zobacz album ...";
$pgv_lang["view_fam_nav_relatives"]	= "Zobacz bliskich ...";
$pgv_lang["view_fam_nav_tree"]		= "Zobacz drzewo ...";
$pgv_lang["view_fam_nav_research"]	= "Zobacz Asystenta badań ...";
$pgv_lang["view_fam_nav_map"]		= "Zobacz mapę ...";
$pgv_lang["view_fam_nav_spare"]		= "Zobacz informacje ...";
$pgv_lang["navigator"]				= "Nawigator";
$pgv_lang["fam_navigator"]			= "Przewodnik";

$pgv_lang["relationship_great"]		= "pra";
$pgv_lang["relationship_chart"]		= "Diagram pokrewieństwa";
$pgv_lang["person1"]				= "Pierwsza osoba";
$pgv_lang["person2"]				= "Druga osoba";
$pgv_lang["no_link_found"]			= "Nie znaleziono powiązania między tymi osobami.";
$pgv_lang["no_other_link_found"]	= "Nie znaleziono innego powiązania między tymi osobami.";
$pgv_lang["sibling"]				= "Rodzeństwo";
$pgv_lang["follow_spouse"]			= "Sprawdź pokrewieństwo przez małżeństwo";
$pgv_lang["timeout_error"]			= "Przekroczono limit czasu przed zakończeniem poszukiwania.";
$pgv_lang["grandchild"]				= "Wnuczę";
$pgv_lang["grandson"]				= "Wnuk";
$pgv_lang["granddaughter"]			= "Wnuczka";
$pgv_lang["greatgrandchild"]		= "Prawnuk/Prawnuczka";
$pgv_lang["greatgrandson"]			= "Prawnuk";
$pgv_lang["greatgranddaughter"]		= "Prawnuczka";
$pgv_lang["brother"]				= "Brat";
$pgv_lang["sister"]					= "Siostra";
$pgv_lang["aunt"]					= "Ciotka";
$pgv_lang["uncle"]					= "Wuj";
$pgv_lang["nephew"]					= "Siostrzeniec/Bratanek";
$pgv_lang["niece"]					= "Siostrzenica/Bratanica";
$pgv_lang["firstcousin"]			= "Bliski kuzyn";
$pgv_lang["femalecousin"]			= "Kuzynka";
$pgv_lang["malecousin"]				= "Kuzyn";
$pgv_lang["relationship_to_me"]		= "Pokrewieństwo ze mną";
$pgv_lang["rela_husb"]				= "Pokrewieństwo z mężem";
$pgv_lang["rela_wife"]				= "Pokrewieństwo z żoną";
$pgv_lang["next_path"]				= "Pokaż następną ścieżkę";
$pgv_lang["show_path"]				= "Pokaż ścieżkę";
$pgv_lang["line_up_generations"]	= "Pokaż te same pokolenia w jednej linii";
$pgv_lang["oldest_top"]				= "Pokaż starszych u góry";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"]		= "%1\$s to %2\$s dla osoby: %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"]	= "%1\$s to %2\$s dla osoby: %3\$s.";

$pgv_lang["mother_in_law"]		= "Teściowa";
$pgv_lang["father_in_law"]		= "Teść";
$pgv_lang["brother_in_law"]		= "Szwagier";
$pgv_lang["sister_in_law"]		= "Szwagierka";
$pgv_lang["brothers_wife"]		= "Bratowa"; // żona brata
$pgv_lang["son_in_law"]			= "Zięć";
$pgv_lang["daughter_in_law"]	= "Synowa";
$pgv_lang["uncle_in_law"]		= "Wuj";
$pgv_lang["aunt_in_law"]		= "Ciotka";
$pgv_lang["cousin_in_law"]		= "Kuzyn/Kuzynka";
$pgv_lang["m_cousin_in_law"]	= "Kuzyn";
$pgv_lang["f_cousin_in_law"]	= "Kuzynka";
$pgv_lang["step_son"]			= "Pasierb";
$pgv_lang["step_daughter"]		= "Pasierbica";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"]	= "bratanek";  // syn brata
$pgv_lang["bosa_brothers_offspring_3"]	= "bratanica"; // córka brata
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"]	= "prabratanek";  // brother's son's son
$pgv_lang["bosa_brothers_offspring_5"]	= "prabratanica"; // brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"]	= "prabratanek";  // brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"]	= "prabratanica"; // brother's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]			= "%2\$d x pra bratanek";
$pgv_lang["n_x_brothers_daughter"]		= "%2\$d x pra bratanica";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"]	= "siostrzeniec";  // syn siostry
$pgv_lang["bosa_sisters_offspring_3"]	= "siostrzenica";  // córka siostry
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"]	= "prasiostrzeniec"; // sister's son's son
$pgv_lang["bosa_sisters_offspring_5"]	= "prasiostrzenica"; // sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"]	= "prasiostrzeniec"; // sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"]	= "prasiostrzenica"; // sister's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]			= "%2\$d x pra siostrzeniec";
$pgv_lang["n_x_sisters_daughter"]		= "%2\$d x pra siostrzenica";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"]				= "syn";		// syn
$pgv_lang["bosa_3"]				= "córka";		// córka
// 2nd generation
$pgv_lang["bosa_4"]				= "wnuk";		// son's son
$pgv_lang["bosa_5"]				= "wnuczka";	// son's daughter
$pgv_lang["bosa_6"]				= "wnuk";		// daughter's son
$pgv_lang["bosa_7"]				= "wnuczka";	// daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"]				= "prawnuk";	// son's son's son
$pgv_lang["bosa_9"]				= "prawnuczka";	// son's son's daughter
$pgv_lang["bosa_10"]			= "prawnuk";	// son's daughter's son
$pgv_lang["bosa_11"]			= "prawnuczka";	// son's daughter's daughter
$pgv_lang["bosa_12"]			= "prawnuk";	// daughter's son's son
$pgv_lang["bosa_13"]			= "prawnuczka";	// daughter's son's daughter
$pgv_lang["bosa_14"]			= "prawnuk";	// daughter's daughter's son
$pgv_lang["bosa_15"]			= "prawnuczka";	// daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]			 = "%3\$d x pra wnuk";
$pgv_lang["n_x_granddaughter_from_son"] 	 = "%3\$d x pra wnuczka";
$pgv_lang["n_x_grandson_from_daughter"]	  	 = "%3\$d x pra wnuk";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d x pra wnuczka";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"]		= "stryj";		// father's brother
$pgv_lang["sosa_uncle_3"]		= "wuj";		// mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_4"]		= "prastryj";	// fathers's father's brother
$pgv_lang["sosa_uncle_5"]		= "prawuj";		// father's mother's brother
$pgv_lang["sosa_uncle_6"]		= "prastryj";	// mother's father's brother
$pgv_lang["sosa_uncle_7"]		= "prawuj";		// mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]	= "%2\$d x pra stryj";
$pgv_lang["n_x_maternal_uncle"]	= "%2\$d x pra wuj";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"]		= "stryjenka";		// father's sister
$pgv_lang["sosa_aunt_3"]		= "ciotka";			// mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_4"]		= "prastryjenka";	// fathers's father's sister
$pgv_lang["sosa_aunt_5"]		= "praciotka";		// father's mother's sister
$pgv_lang["sosa_aunt_6"]		= "prastryjenka";	// mother's father's sister
$pgv_lang["sosa_aunt_7"]		= "praciotka";		// mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]	= "%2\$d x pra stryjenka";
$pgv_lang["n_x_maternal_aunt"]	= "%2\$d x pra ciotka";

// the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"]	= "stryj";		// father's brother
$pgv_lang["sosa_uncle_bm_3"]	= "wuj";		// mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"]	= "prastryj";	// fathers's father's brother
$pgv_lang["sosa_uncle_bm_5"]	= "prawuj";		// father's mother's brother
$pgv_lang["sosa_uncle_bm_6"]	= "prastryj";	// mother's father's brother
$pgv_lang["sosa_uncle_bm_7"]	= "prawuj";		// mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]	= "%2\$d x pra stryj";
$pgv_lang["n_x_maternal_uncle_bm"]	= "%2\$d x pra wuj";

// the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"]		= "stryjenka";		// father's sister
$pgv_lang["sosa_aunt_bm_3"]		= "ciotka";			// mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"]		= "prastryjenka";	// fathers's father's sister
$pgv_lang["sosa_aunt_bm_5"]		= "praciotka";		// father's mother's sister
$pgv_lang["sosa_aunt_bm_6"]		= "prastryjenka";	// mother's father's sister
$pgv_lang["sosa_aunt_bm_7"]		= "praciotka";		// mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]	= "%2\$d x pra stryjenka";
$pgv_lang["n_x_maternal_aunt_bm"]	= "%2\$d x pra ciotka";

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]		= "kuzyn pierwszego stopnia";
$pgv_lang["male_cousin_2"]		= "kuzyn drugiego stopnia";
$pgv_lang["male_cousin_3"]		= "kuzyn trzeciego stopnia";
$pgv_lang["male_cousin_4"]		= "kuzyn czwartego stopnia";
$pgv_lang["male_cousin_5"]		= "kuzyn piątego stopnia";
$pgv_lang["male_cousin_6"]		= "kuzyn szóstego stopnia";
$pgv_lang["male_cousin_7"]		= "kuzyn siódmego stopnia";
$pgv_lang["male_cousin_8"]		= "kuzyn ósmego stopnia";
$pgv_lang["male_cousin_9"]		= "kuzyn dziewiątego stopnia";
$pgv_lang["male_cousin_10"]		= "kuzyn dziesiątego stopnia";
$pgv_lang["male_cousin_11"]		= "kuzyn jedenastego stopnia";
$pgv_lang["male_cousin_12"]		= "kuzyn dwunastego stopnia";
$pgv_lang["male_cousin_13"]		= "kuzyn trzynastego stopnia";
$pgv_lang["male_cousin_14"]		= "kuzyn czternastego stopnia";
$pgv_lang["male_cousin_15"]		= "kuzyn piętnastego stopnia";
$pgv_lang["male_cousin_16"]		= "kuzyn szesnastego stopnia";
$pgv_lang["male_cousin_17"]		= "kuzyn siedemnastego stopnia";
$pgv_lang["male_cousin_18"]		= "kuzyn osiemnastego stopnia";
$pgv_lang["male_cousin_19"]		= "kuzyn dziewiętnastego stopnia";
$pgv_lang["male_cousin_20"]		= "kuzyn dwudziestego stopnia";
$pgv_lang["male_cousin_n"]		= "kuzyn %d stopnia";
$pgv_lang["female_cousin_1"]	= "kuzynka pierwszego stopnia";
$pgv_lang["female_cousin_2"]	= "kuzynka drugiego stopnia";
$pgv_lang["female_cousin_3"]	= "kuzynka trzeciego stopnia";
$pgv_lang["female_cousin_4"]	= "kuzynka czwartego stopnia";
$pgv_lang["female_cousin_5"]	= "kuzynka piątego stopnia";
$pgv_lang["female_cousin_6"]	= "kuzynka szóstego stopnia";
$pgv_lang["female_cousin_7"]	= "kuzynka siódmego stopnia";
$pgv_lang["female_cousin_8"]	= "kuzynka ósmego stopnia";
$pgv_lang["female_cousin_9"]	= "kuzynka dziewiątego stopnia";
$pgv_lang["female_cousin_10"]	= "kuzynka dziesiątego stopnia";
$pgv_lang["female_cousin_11"]	= "kuzynka jedenastego stopnia";
$pgv_lang["female_cousin_12"]	= "kuzynka dwunastego stopnia";
$pgv_lang["female_cousin_13"]	= "kuzynka trzynastego stopnia";
$pgv_lang["female_cousin_14"]	= "kuzynka czternastego stopnia";
$pgv_lang["female_cousin_15"]	= "kuzynka piętnastego stopnia";
$pgv_lang["female_cousin_16"]	= "kuzynka szesnastego stopnia";
$pgv_lang["female_cousin_17"]	= "kuzynka siedemnastego stopnia";
$pgv_lang["female_cousin_18"]	= "kuzynka osiemnastego stopnia";
$pgv_lang["female_cousin_19"]	= "kuzynka dziwiętnastego stopnia";
$pgv_lang["female_cousin_20"]	= "kuzynka dwudziestego stopnia";
$pgv_lang["female_cousin_n"]	= "kuzynka %d stopnia";

// Only referenced from english specific functions
$pgv_lang["removed_ascending_20"]	= "dwadzieścia razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_19"]	= "dziewiętnaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_18"]	= "osiemnaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_17"]	= "siedemnaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_16"]	= "szesnaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_15"]	= "piętnaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_14"]	= "czternaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_13"]	= "trzynaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_12"]	= "dwanaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_11"]	= "jedenaście razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_10"]	= "dziesięć razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_9"]	= "dziewięć razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_8"]	= "osiem razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_7"]	= "siedem razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_6"]	= "sześć razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_5"]	= "pięć razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_4"]	= "cztery razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_3"]	= "trzy razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_2"]	= "dwa razy przesunięty(a) w górę";
$pgv_lang["removed_ascending_1"]	= "raz przesunięty(a) w górę";
$pgv_lang["removed_descending_20"]	= "dwadzieścia razy przesunięty(a) w dół";
$pgv_lang["removed_descending_19"]	= "dziewiętnaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_18"]	= "osiemnaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_17"]	= "siedemnaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_16"]	= "szesnaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_15"]	= "piętnaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_14"]	= "czternaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_13"]	= "trzynaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_12"]	= "dwanaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_11"]	= "jedenaście razy przesunięty(a) w dół";
$pgv_lang["removed_descending_10"]	= "dziesięć razy przesunięty(a) w dół";
$pgv_lang["removed_descending_9"]	= "dziewięć razy przesunięty(a) w dół";
$pgv_lang["removed_descending_8"]	= "osiem razy przesunięty(a) w dół";
$pgv_lang["removed_descending_7"]	= "siedem razy przesunięty(a) w dół";
$pgv_lang["removed_descending_6"]	= "sześć razy przesunięty(a) w dół";
$pgv_lang["removed_descending_5"]	= "pięć razy przesunięty(a) w dół";
$pgv_lang["removed_descending_4"]	= "cztery razy przesunięty(a) w dół";
$pgv_lang["removed_descending_3"]	= "trzy razy przesunięty(a) w dół";
$pgv_lang["removed_descending_2"]	= "dwa razy przesunięty(a) w dół";
$pgv_lang["removed_descending_1"]	= "raz przesunięty(a) w dół";

//-- GEDCOM edit utility
$pgv_lang["check_delete"]			= "Czy na pewno chcesz usunąć ten fakt?";
$pgv_lang["access_denied"]			= "<b>Brak dostępu</b><br />Nie masz uprawnień dostępu do tego zasobu.";
$pgv_lang["changes_exist"]			= "Plik GEDCOM został zmieniony.";
$pgv_lang["find_place"]				= "Znajdź miejsce";
$pgv_lang["close_window"]			= "Zamknij okno";
$pgv_lang["close_window_without_refresh"] 	= "Zamknij okno bez odświeżania";
$pgv_lang["place_contains"]			= "Miejsce zawiera:";
$pgv_lang["add"]					= "Dodaj";
$pgv_lang["custom_event"]			= "Inne wydarzenie";
$pgv_lang["delete_person"]			= "Usuń tę osobę";
$pgv_lang["confirm_delete_person"]	= "Czy na pewno chcesz usunąć tą osobę?";
$pgv_lang["find_media"]				= "Znajdź multimedia";
$pgv_lang["set_link"]				= "Ustaw odnośnik";
$pgv_lang["delete_source"]			= "Usuń to źródło";
$pgv_lang["delete_shared_note"]		= "Usuń tą wspólną notatkę";
$pgv_lang["confirm_delete_source"]	= "Czy na pewno chcesz usunąć to źródło?";
$pgv_lang["confirm_delete_shared_note"] = "Czy na pewno chcesz usunąć tą notatkę?";
$pgv_lang["find_family"]			= "Znajdź rodzinę";
$pgv_lang["find_fam_list"]			= "Znajdź rodziny";
$pgv_lang["edit_name"]				= "Edytuj imię i nazwisko";
$pgv_lang["delete_name"]			= "Usuń imię i nazwisko";
$pgv_lang["select_date"]			= "Wybierz datę";
$pgv_lang["user_cannot_edit"]		= "Ten użytkownik nie może edytować tego pliku GEDCOM.";
$pgv_lang["ged_noshow"]				= "Ta strona została ukryta przez administratora.";

//-- calendar.php messages
$pgv_lang["bdm"]					= "Urodziny, zgony, małżeństwa";
$pgv_lang["on_this_day"]			= "Tego dnia...";
$pgv_lang["in_this_month"]			= "W tym miesiącu...";
$pgv_lang["in_this_year"]			= "W tym roku...";
$pgv_lang["year_anniversary"]		= "#year_var# rocznica";
$pgv_lang["today"]					= "Dzisiaj";
$pgv_lang["day"]					= "Dzień:";
$pgv_lang["month"]					= "Miesiąc:";
$pgv_lang["showcal"]				= "Pokaż wydarzenia:";
$pgv_lang["anniversary"]			= "Rocznica";
$pgv_lang["anniversary_calendar"]	= "Kalendarium";
$pgv_lang["sunday"]					= "niedziela";
$pgv_lang["monday"]					= "poniedziałek";
$pgv_lang["tuesday"]				= "wtorek";
$pgv_lang["wednesday"]				= "środa";
$pgv_lang["thursday"]				= "czwartek";
$pgv_lang["friday"]					= "piątek";
$pgv_lang["saturday"]				= "sobota";
$pgv_lang["viewday"]				= "Pokaż dzień";
$pgv_lang["viewmonth"]				= "Pokaż miesiąc";
$pgv_lang["viewyear"]				= "Pokaż rok";
$pgv_lang["all_people"]				= "Wszystkie osoby";
$pgv_lang["living_only"]			= "Osoby żyjące";
$pgv_lang["recent_events"]			= "Ostatnie stulecie";
$pgv_lang["day_not_set"]			= "Brak daty dziennej";

//-- user self registration module
$pgv_lang["lost_password"]		= "Nie pamiętasz hasła?";
$pgv_lang["requestpassword"]	= "Zamów nowe hasło";
$pgv_lang["no_account_yet"]		= "Nie masz konta?";
$pgv_lang["requestaccount"]		= "Załóż nowe konto";
$pgv_lang["emailadress"]		= "Adres email";
$pgv_lang["mandatory"]			= "Pola oznaczone gwiazdką * są obowiązkowe.";
$pgv_lang["mail01_line01"]		= "Witaj #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "Podczas rejestracji na ( #SERVER_NAME# ) podany został Twój adres email ( #user_email# ).";
$pgv_lang["mail01_line03"]		= "Dane zgłoszenia znajdują się pod poniższym odnośnikiem.";
$pgv_lang["mail01_line04"]		= "Kliknij na odnośnik poniżej i wpisz wymagane informacje aby zweryfikować swoje konto i adres email.";
$pgv_lang["mail01_line05"]		= "Jeśli nie proszono o utworzenie konta można zignorować tę wiadomość.";
$pgv_lang["mail01_line06"]		= "Nie otrzymasz więcej emaili od nas, ponieważ wniosek o nowe konto zostanie usunięty po upływie siedmiu dni.";
$pgv_lang["mail01_subject"]		= "Rejestracja na #SERVER_NAME#";
$pgv_lang["mail02_line01"]		= "Witaj administratorze ...";
$pgv_lang["mail02_line02"]		= "Nowy użytkownik zarejestrował się na #SERVER_NAME#.";
$pgv_lang["mail02_line03"]		= "Użytkownik otrzymał email z informacjami niezbędnymi do potwierdzenia chęci przyłączenia się.";
$pgv_lang["mail02_line04"]		= "Otrzymasz email powiadamiający gdy użytkownik potwierdzi prośbę. Wówczas będziesz mógł zakończyć proces aktywując użytkownika. Nowy użytkownik nie będzie mógł się zalogować dopóki tego nie aktywujesz jego konta.";
$pgv_lang["mail02_line04a"]		= "Zostaniesz poinformowany przy pomocy poczty elektronicznej kiedy przyszły użytkownik zweryfikuje swoje dane. Po weryfikacji, użytkownik ten będzie mógł zalogować się bez twojego udziału.";
$pgv_lang["mail02_subject"]		= "Nowa rejestracja na #SERVER_NAME#";
$pgv_lang["hashcode"]			= "Kod weryfikacyjny:";
$pgv_lang["thankyou"]			= "Witaj #user_fullname# ...<br />Dziękujemy za rejestrację";
$pgv_lang["pls_note06"]			= "Wkrótce otrzymasz email na adres podany przy rejestracji. Postępuj według instrukcji zawartych w emailu aby aktywować swoje konto. Jeśli nie aktywujesz konta w przeciągu siedmiu dni, zostanie ono usunięte i będziesz musiał(a) ponownie się rejestrować. Aby w pełni korzystać z zasobów tej strony musisz zapamiętać swój login i hasło.";
$pgv_lang["pls_note06a"]		= "Wkrótce otrzymasz email na adres podany przy rejestracji. Postępuj według instrukcji zawartych w emailu aby aktywować swoje konto. Jeśli nie aktywujesz konta w przeciągu trzech dni, zostanie ono usunięte i będziesz musiał(a) ponownie się rejestrować. Aby w pełni korzystać z zasobów tej strony musisz zapamiętać swój login i hasło.";

$pgv_lang["registernew"]		= "Potwierdzenie założenia nowego konta";
$pgv_lang["user_verify"]		= "Weryfikacja użytkownika";
$pgv_lang["send"]				= "Wyślij";

$pgv_lang["pls_note07"]			= "~#pgv_lang[user_verify]#~<br /><br />Aby potwierdzić chęć przystąpienia, proszę o podanie swojego loginu, hasła oraz kodu potwierdzającego otrzymanego emailem.";
$pgv_lang["pls_note08"]			= "Informacje o użytkowniku #user_name# zostały potwierdzone.";

$pgv_lang["mail03_line01"]		= "Witaj Administratorze ...";
$pgv_lang["mail03_line02"]		= "Użytkownik #newuser[username]# (#newuser[fullname]#) potwierdził chęć utworzenia konta.";
$pgv_lang["mail03_line03"]		= "Skorzystaj z poniższego odnośnika aby zalogować się na stronę. Aktywuj konto użytkownika tak, aby mógł zalogować się na stronę.";
$pgv_lang["mail03_line03a"]			= "Nie musisz już nic robić, użytkownik może się teraz zalogować.";
$pgv_lang["mail03_subject"]		= "Nowy użytkownik na #SERVER_NAME#";

$pgv_lang["pls_note09"]			= "Twoje zgłoszenie zostania zarejestrowanym użytkownikiem zostało potwierdzone.";
$pgv_lang["pls_note10"]			= "Administrator został o tym poinformowany.<br />Gdy tylko udzieli zezwolenia będzie możliwe zalogowanie się na stronie korzystając ze swojego loginu i hasła.";
$pgv_lang["pls_note10a"]		= "Możesz teraz się zalogować używając swojego loginu i hasła.";
$pgv_lang["data_incorrect"]		= "Dane nie są prawidłowe, spróbuj ponownie.";
$pgv_lang["user_not_found"]		= "Nie można potwierdzić podanej informacji. Spróbuj ponownie lub skontaktuj się z administratorem.";

$pgv_lang["lost_pw_reset"]		= "Zapomniane hasło";
$pgv_lang["pls_note11"]			= "Aby twoje hasło zostało przywrócone, podaj swój login.<br /><br />Wyślemy Ci email na adres podany przy rejestracji. Email będzie zawierał odnośnik i kod potwierdzający dla twojego konta. Odwiedzając podany adres będzie można zmienić swoje hasło i zalogować się na stronie. Ze względów bezpieczeństwa nie powinno się udostępniać nikomu kodu potwierdzającego.<br /><br />Jeśli potrzebujesz pomocy, użyj odnośnika poniżej.";

$pgv_lang["mail04_line01"]		= "Witaj #user_fullname# ...";
$pgv_lang["mail04_line02"]		= "Otrzymaliśmy zamówienie na nowe hasło dla twojego konta.";
$pgv_lang["mail04_line03"]		= "Zalecenie:";
$pgv_lang["mail04_line04"]		= "Kliknij na odnośnik poniżej lub wklej go do przeglądarki, zaloguj się korzystając z nowego hasła i od razu zmień je dla bezpieczeństwa swoich danych.";
$pgv_lang["mail04_line05"]		= "Aby zmienić hasło, po zalogowaniu wybierz odnośnik «#pgv_lang[editowndata]#» w menu «#pgv_lang[mygedview]#» i wypełnij pola hasła.";
$pgv_lang["mail04_subject"]		= "Prośba o dane na #SERVER_NAME#";

$pgv_lang["pwreqinfo"]			= "Witaj...<br /><br />Email z twoim nowym hasłem został wysłany na adres #user[email]#<br /><br />Sprawdź pocztę; wiadomość powinna dojść w ciągu kilku minut.<br /><br />Ze względów bezpieczeństwa zaleca się, żeby jak najszybciej po otrzymaniu emaila zalogować się i zmienić hasło.";

$pgv_lang["myuserdata"]			= "Moje konto";
$pgv_lang["user_theme"]			= "Mój motyw";
$pgv_lang["mgv"]				= "Mój portal";
$pgv_lang["mygedview"]			= "Mój portal";
$pgv_lang["passwordlength"]		= "Hasło musi zawierać przynajmniej 6 znaków.";
$pgv_lang["welcome_text_auth_mode_1"]	= "<center><b>Witaj na naszej stronie genealogicznej</b></center><br /><br />Dostęp do tej strony mają wszystkie osoby posiadające konto użytkownika.<br />Jeżeli już masz swoje konto, zaloguj się.<br /><br />Jeśli nie posiadasz jeszcze konta, załóż je klikając na odpowiedni odnośnik poniżej. Po weryfikacji danych administrator aktywuje twoje konto. Otrzymasz email z powiadomieniem o aktywacji.";
$pgv_lang["welcome_text_auth_mode_2"]	= "<center><b>Witaj na naszej stronie genealogicznej</b></center><br /><br />Dostęp do tej strony mają tylko <b>autoryzowani</b> użytkownicy.<br />Jeżeli masz już swoje konto, zaloguj się.<br /><br />Jeśli nie posiadasz jeszcze konta, załóż je klikając na odpowiedni odnośnik poniżej.<br />Po weryfikacji danych administrator przyjmie lub odrzuci twoje zgłoszenie.<br />Otrzymasz email z powiadomieniem o akceptacji.";
$pgv_lang["welcome_text_auth_mode_3"]	= "<center><b>Witaj na naszej stronie genealogicznej</b></center><br />Dostęp do tej strony mają jedynie <b>członkowie rodziny</b>. Jeżeli już masz swoje konto, zaloguj się.<br /><br />Jeśli nie posiadasz jeszcze konta, załóż je klikając na odpowiedni odnośnik poniżej.<br />Po weryfikacji danych administrator przyjmie lub odrzuci twoje zgłoszenie.<br />Otrzymasz email z powiadomieniem o akceptacji.";
$pgv_lang["welcome_text_cust_head"]		= "<center><b>Witaj na naszej stronie genealogicznej</b></center><br />Dostęp do tej strony ma każdy, kto posiada konto i hasło do tej strony.<br />";
$pgv_lang["acceptable_use"]				= "<div class=\"largeError\">Uwaga:</div><div class=\"error\">Wypełniając i wysyłając do nas ten formularz zobowiązujesz się do:<ul><li>ochrony prywatności osób żyjących występujących na naszej stronie</li><li>wyjaśnienia w polu niżej, z kim jesteś spokrewniony, lub dostarczenia informacji na temat osoby, która powinna zostać dodana do naszej strony.</li></ul></div>";

//-- mygedview page
$pgv_lang["upcoming_events"]		= "Nadchodzące wydarzenia";
$pgv_lang["living_or_all"]			= "Tylko wydarzenia dla osób żyjących";
$pgv_lang["basic_or_all"]			= "Tylko urodziny, zgony i śluby";
$pgv_lang["style"]					= "Styl prezentacji";
$pgv_lang["style1"]					= "Lista";
$pgv_lang["style2"]					= "Tabela";
$pgv_lang["style3"]					= "Mapa skojarzeniowa";
$pgv_lang["sort_style"]				= "Reguła sortowania";
$pgv_lang["by_anniv"]				= "Według rocznic";
$pgv_lang["by_alpha"]				= "Alfabetycznie";
$pgv_lang["cal_download"]			= "Zezwalać na pobieranie wydarzeń z kalendarium?";
$pgv_lang["no_events_living"]		= "Brak wydarzeń dla osób żyjących na najbliższe #pgv_lang[global_num1]# dni.";
$pgv_lang["no_events_living1"]		= "Brak wydarzeń dla osób żyjących na jutro.";
$pgv_lang["no_events_all"]			= "Brak wydarzeń na najbliższe #pgv_lang[global_num1]# dni.";
$pgv_lang["no_events_all1"]			= "Brak wydarzeń na jutro.";
$pgv_lang["no_events_privacy"]		= "Istnieją wydarzenia na najbliższe #pgv_lang[global_num1]# dni, ale ustawienia prywatności nie pozwalają ich wyświetlić.";
$pgv_lang["no_events_privacy1"]		= "Istnieją wydarzenia na jutro, ale ustawienia prywatności nie pozwalają ich wyświetlić.";
$pgv_lang["more_events_privacy"]	= "<br />Istnieje więcej wydarzeń na najbliższe #pgv_lang[global_num1]# dni, ale ustawienia prywatności nie pozwalają ich wyświetlić.";
$pgv_lang["more_events_privacy1"]	= "<br />Istnieje więcej wydarzeń na jutro, ale ustawienia prywatności nie pozwalają ich wyświetlić.";
$pgv_lang["none_today_living"]		= "Brak wydarzeń dla osób żyjących na dziś.";
$pgv_lang["none_today_all"]			= "Brak wydarzeń na dziś.";
$pgv_lang["none_today_privacy"]		= "Istnieją wydarzenia na dziś, ale ustawienia prywatności nie pozwalają ich wyświetlić.";
$pgv_lang["more_today_privacy"]		= "<br />Istnieje więcej wydarzeń na dziś, ale ustawienia prywatności nie pozwalają ich wyświetlić.";
$pgv_lang["chat"]					= "Czat";
$pgv_lang["users_logged_in"]		= "Zalogowani użytkownicy";
$pgv_lang["anon_user"]				= "1 zalogowany anonimowy użytkownik";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# zalogowanych anonimowych użytkowników";
$pgv_lang["login_user"]				= "1 zalogowany użytkownik";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# zalogowanych użytkowników";
$pgv_lang["no_login_users"]			= "Brak zalogowanych użytkowników";
$pgv_lang["message"]				= "Wyślij wiadomość";
$pgv_lang["my_messages"]			= "Moje wiadomości";
$pgv_lang["date_created"]			= "Data wysłania:";
$pgv_lang["message_from"]			= "Adres email:";
$pgv_lang["message_from_name"]		= "Imię i nazwisko:";
$pgv_lang["message_to"]				= "Wiadomość do:";
$pgv_lang["message_subject"]		= "Temat:";
$pgv_lang["message_body"]			= "Treść:";
$pgv_lang["no_to_user"]				= "Nie podano odbiorcy, nie można kontynuować.";
$pgv_lang["provide_email"]			= "Podaj swój adres email abyśmy mogli skontaktować się z tobą. Jeśli go nie podasz, nie będziemy mogli odpowiedzieć na twoje pytanie. Twój adres nie zostanie wykorzystany w żadnym innym celu poza wysłaniem odpowiedzi.";
$pgv_lang["reply"]					= "Odpowiedz";
$pgv_lang["message_deleted"]		= "Wiadomość usunięta";
$pgv_lang["message_sent"]			= "Wiadomość do #TO_USER# została wysłana";
$pgv_lang["reset"]					= "Wyczyść";
$pgv_lang["site_default"]			= "Domyślne ustawienia strony";
$pgv_lang["mygedview_desc"]			= "Na stronie Twojego portalu możesz zapamiętywać ulubione osoby, śledzić nadchodzące wydarzenia i współpracować z innymi użytkownikami.";
$pgv_lang["no_messages"]			= "Brak wiadomości.";
$pgv_lang["clicking_ok"]			= "Kliknij OK aby otworzyć nowe okno, które umożliwi ci skontaktowanie się z #user[fullname]#";
$pgv_lang["favorites"]				= "Ulubione";
$pgv_lang["my_favorites"]			= "Moje ulubione";
$pgv_lang["no_favorites"]			= "Brak ulubionych elementów.<br /><br />Aby dodać osobę, rodzinę lub źródło do ulubionych, kliknij na odnośnik <b>#pgv_lang[add_favorite]#</b> aby wyświetlić pola, w które możesz wprowadzić lub wyszukać identyfikator. Zamiast identyfikatora możesz wpisać adres URL i tytuł.";
$pgv_lang["add_to_my_favorites"]	= "Dodaj do ulubionych";
$pgv_lang["gedcom_favorites"]		= "Ulubione GEDCOM";
$pgv_lang["no_gedcom_favorites"]	= "W tej chwili brak ulubionych elementów. Administrator może dodać elementy ulubione.";
$pgv_lang["confirm_fav_remove"]		= "Czy na pewno chcesz usunąć ten element z listy ulubionych?";
$pgv_lang["invalid_email"]			= "Podaj prawidłowy adres email.";
$pgv_lang["enter_subject"]			= "Podaj tytuł wiadomości.";
$pgv_lang["enter_body"]				= "Wpisz tekst wiadomości przed wysłaniem.";
$pgv_lang["confirm_message_delete"]	= "Czy na pewno chcesz usunąć tę wiadomość? Nie będzie można tego cofnąć.";
$pgv_lang["message_email1"]			= "Poniższa wiadomość została nadesłana na twoje konto od ";
$pgv_lang["message_email2"]			= "Została wysłana następująca wiadomość do użytkownika:";
$pgv_lang["message_email3"]			= "Została wysłana następująca wiadomość do administratora:";
$pgv_lang["viewing_url"]			= "Ta wiadomość została wysłana podczas przeglądania następującego adresu URL: ";
$pgv_lang["messaging2_help"]		= "Po wysłaniu tej wiadomości otrzymasz jej kopię na podany adres email.";
$pgv_lang["random_picture"]			= "Losowe zdjęcie";
$pgv_lang["message_instructions"]	= "<b>Uwaga:</b> Informacje na temat osób żyjących są udostępniane jedynie członkom rodziny i bliskim znajomym. Przed uzyskaniem jakichkolwiek danych konieczne jest zweryfikowanie swojego pokrewieństwa. Czasem informacje o osobach zmarłych również mogą być ukryte, najczęściej kiedy brak informacji, czy dana osoba ta żyje, czy nie.<br /><br />Przed zadaniem pytania sprawdź czy interesujesz się właściwą osobą, sprawdzając daty, miejsca i bliskich krewnych. Jeśli wysyłasz nowe dane genealogiczne, dołącz także informacje o źródłach pochodzenia tych danych.<br /><br />";
$pgv_lang["sending_to"]				= "Tą wiadomość otrzyma #TO_USER#.";
$pgv_lang["preferred_lang"]	 		= "Ten użytkownik preferuje język #USERLANG# w wiadomościach.";
$pgv_lang["gedcom_created_using"]	= "Plik GEDCOM utworzony przez <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]		= "Plik GEDCOM utworzony dnia <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_created_on2"]		= " dnia <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]			= "Statystyki Rodziny";
$pgv_lang["stat_individuals"]		= "Osób";
$pgv_lang["stat_families"]			= "Rodzin";
$pgv_lang["stat_sources"]			= "Źródeł";
$pgv_lang["stat_other"]				= "Innych wpisów";
$pgv_lang["stat_earliest_birth"]	= "Rok pierwszych urodzin";
$pgv_lang["stat_latest_birth"]		= "Rok ostatnich urodzin";
$pgv_lang["stat_latest_death"]		= "Rok ostatniej śmierci";
$pgv_lang["stat_earliest_death"]	= "Rok pierwszej śmierci";
$pgv_lang["customize_page"]			= "Dostosuj portal";
$pgv_lang["customize_gedcom_page"]	= "Dostosuj stronę główną";
$pgv_lang["upcoming_events_block"]	= "Nadchodzące wydarzenia";
$pgv_lang["upcoming_events_descr"]	= "Blok nadchodzących wydarzeń wyświetla rocznice wydarzeń, które będą miały miejsce w najbliższej przyszłości. Możesz zmienić poziom szczegółowości informacji, zaś administrator może decydować, jak daleko w przyszłość będą wybiegać.";
$pgv_lang["todays_events_block"]	= "Tego dnia";
$pgv_lang["todays_events_descr"]	= "Blok \"Tego dnia\" wyświetla dzisiejsze rocznice wydarzeń. Możesz zmienić poziom szczegółowości wyświetlanych informacji.";
$pgv_lang["todo_block"]				= "Zadania do zrobienia";
$pgv_lang["todo_descr"]				= "Blok 'Zadania do zrobienia' prezentuje wszystkie fakty _TODO będące w bazie.";
$pgv_lang["todo_show_other"]		= "Pokaż inne zadania użytkownika";
$pgv_lang["todo_show_unassigned"]	= "Pokaż nieprzypisane zadania";
$pgv_lang["todo_show_future"]		= "Pokaż przyszłe zadania";
$pgv_lang["todo_nothing"]			= "Brak zadań do zrobinia.";
$pgv_lang["yahrzeit_block"]			= "Yahrzeit (rocznice śmierci)";
$pgv_lang["yahrzeit_descr"]			= "Blok Yahrzeit (rocznice śmierci) pokazuje rocznice śmierci, które wydarzą się w niedalekiej przyszłości. Możesz skonfigurować okres do pokazania, a Administrator może skonfigurować jak daleko w przyszłość ten blok będzie sięgał.";
$pgv_lang["logged_in_users_block"]	= "Zalogowani użytkownicy";
$pgv_lang["logged_in_users_descr"]	= "Blok zalogowanych użytkowników wyświetla listę użytkowników, którzy są aktualnie zalogowane na stronie.";
$pgv_lang["user_messages_block"]	= "Wiadomości użytkownika";
$pgv_lang["user_messages_descr"]	= "Blok wiadomości użytkownika wyświetla listę wiadomości, które zostały wysłane do aktywnego użytkownika.";
$pgv_lang["user_favorites_block"]	= "Ulubione użytkownika";
$pgv_lang["user_favorites_descr"]	= "Blok ulubionych użytkownika wyświetla listę wybranych przez niego osób, do których chciałby mieć szybki dostęp.";
$pgv_lang["welcome_block"]			= "Powitanie użytkownika";
$pgv_lang["welcome_descr"]			= "Blok powitania użytkownika wyświetla dzisiejszą datę i godzinę, odnośniki do zmiany ustawień konta i diagramu rodowego użytkownika oraz do dostosowania strony.";
$pgv_lang["random_media_block"]		= "Losowe multimedia";
$pgv_lang["random_media_descr"]		= "Blok losowych multimediów wybiera i wyświetla losowe zdjęcie lub inny obiekt multimedialny z aktywnej bazy danych.<br /><br />Administrator decyduje czy ten blok może pokazywać obiekty związane z osobami lub wydarzeniami.";
$pgv_lang["random_media_persons_or_all"]	= "Pokazywać osoby, wydarzenia, czy wszystko?";
$pgv_lang["random_media_events"]	= "Wydarzenia";
$pgv_lang["random_media_persons"]	= "Osoby";
$pgv_lang["gedcom_block"]			= "Powitanie GEDCOM";
$pgv_lang["gedcom_descr"]			= "Blok powitania GEDCOM działa tak samo jak blok powitania użytkownika. Wyświetla powitanie, tytuł aktywnej bazy danych, dzisiejszą datę i godzinę.";
$pgv_lang["gedcom_favorites_block"]	= "Ulubione GEDCOM";
$pgv_lang["gedcom_favorites_descr"]	= "Blok ulubionych GEDCOM pozwala administratorowi wyróżnić pewne osoby z bazy danych, aby informacja o nich była łatwo dostępna dla wszystkich. W ten sposób można podkreślić osoby ważne w historii rodziny.";
$pgv_lang["gedcom_stats_block"]		= "Statystyki GEDCOM";
$pgv_lang["gedcom_stats_descr"]		= "Blok statystyk GEDCOM wyświetla kilka podstawowych informacji o bazie danych, takich jak data utworzenia i liczba występujących w niej osób.<br /><br />Zawiera także listę najczęściej występujących nazwisk. Możesz wyłączyć pokazywanie tej listy oraz dodawać lub usuwać nazwiska z listy. Możesz ustawić próg występowania dla tej listy w konfiguracji GEDCOM.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Pokazać najczęstsze nazwiska?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Możesz dostosować stronę zmieniając układ bloków.<br /><br />Strona podzielona jest na dwie części: <b>Główną</b> i <b>Prawą</b>. Bloki części <b>Głównej</b> są wyświetlane jako większe i umieszczone pod tytułem strony. Część <b>Prawa</b> zaczyna się po prawej stronie tytułu i znajduje się po prawej stronie.<br /><br />Każda część ma własną listę bloków, które będą wyświetlane na stronie w kolejności, w jakiej występują na liście. Możesz dowolnie dodawać, usuwać i zmieniać kolejność bloków.<br /><br />Kiedy jednen z bloków jest pusty, pozostałe bloki zapełnią całą szerokość strony.<br /><br />";
$pgv_lang["login_block"]			= "Logowanie";
$pgv_lang["login_descr"]			= "Blok logowania służy do wprowadzania loginu i hasła przez użytkowników w celu zalogowania.";
$pgv_lang["theme_select_block"]		= "Wybór motywu";
$pgv_lang["theme_select_descr"]		= "Wybór motywu wyświetla listę wyboru motywów nawet wtedy, gdy możliwość zmieniania motywów przez użytkowników jest wyłączona.";
$pgv_lang["block_top10_title"]		= "Najczęściej występujące nazwiska";
$pgv_lang["block_top10"]			= "Najczęściej występujące nazwiska";
$pgv_lang["block_top10_descr"]		= "Ten blok wyświetla tabelkę z nazwiskami, które występują najczęściej w bazie danych. Liczba nazwisk przedstawionych w tabeli jest konfigurowalna. Możesz dowolnie usuwać nazwiska za pomocą konfiguracji GEDCOM.";
$pgv_lang["block_givn_top10_title"]		= "Najczęściej występujące imiona";
$pgv_lang["block_givn_top10"]			= "Najczęściej występujące imiona";
$pgv_lang["block_givn_top10_descr"]		= "Ten blok pokazuje tabelę z najczęściej występującymi imionami w bazie danych. Liczba imion przedstawionych w tabeli jest konfigurowalna.";

$pgv_lang["gedcom_news_block"]		= "Artykuły GEDCOM";
$pgv_lang["gedcom_news_descr"]		= "Blok artykułów GEDCOM pokazuje artykuły nadesłane przez administratora. To dobre miejsce na ogłoszenie ważnej aktualizacji w bazie danych, zjazdu rodzinnego lub narodzin dziecka.";
$pgv_lang["gedcom_news_limit"]		= "Ogranicz wyświetlanie:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "bez ograniczenia";
$pgv_lang["gedcom_news_limit_date"]	= "wiekiem elementu";
$pgv_lang["gedcom_news_limit_count"]	= "liczbą elementów";
$pgv_lang["gedcom_news_flag"]		= "Ograniczenie:";
$pgv_lang["gedcom_news_archive"]	= "Pokaż archiwum";
$pgv_lang["user_news_block"]		= "Dziennik użytkownika";
$pgv_lang["user_news_descr"]		= "Blok dziennika użytkownika pozwala użytkownikowi robić notatki lub prowadzić internetowy dziennik.";
$pgv_lang["my_journal"]				= "Mój dziennik";
$pgv_lang["no_journal"]				= "Brak wpisów w dzienniku.";
$pgv_lang["confirm_journal_delete"]	= "Czy na pewno chcesz usunąć ten wpis?";
$pgv_lang["add_journal"]			= "Dodaj nowy wpis do dziennika";
$pgv_lang["gedcom_news"]			= "Artykuły";
$pgv_lang["confirm_news_delete"]	= "Czy na pewno chcesz usunąć ten artykuł?";
$pgv_lang["add_news"]				= "Dodaj artykuł";
$pgv_lang["no_news"]				= "Brak nadesłanych artykułów.";
$pgv_lang["edit_news"]				= "Dodaj/Zmień artykuł lub wpis do dziennika";
$pgv_lang["enter_title"]			= "Podaj tytuł.";
$pgv_lang["enter_text"]				= "Wpisz tekst dla tego artykułu lub wpisu do dziennika.";
$pgv_lang["news_saved"]				= "Zapisywanie wpisu do dziennika lub artykułu powiodło się.";
$pgv_lang["article_text"]			= "Treść:";
$pgv_lang["main_section"]			= "Bloki części głównej";
$pgv_lang["right_section"]			= "Bloki części prawej";
$pgv_lang["available_blocks"]		= "Dostępne bloki";
$pgv_lang["move_up"]				= "W górę";
$pgv_lang["move_down"]				= "W dół";
$pgv_lang["move_right"]				= "W prawo";
$pgv_lang["move_left"]				= "W lewo";
$pgv_lang["broadcast_all"]			= "Do wszystkich użytkowników";
$pgv_lang["hit_count"]				= "Odwiedzin:";
$pgv_lang["phpgedview_message"]		= "Wiadomość";
$pgv_lang["common_surnames"]		= "Najczęstsze nazwiska";
$pgv_lang["default_news_title"]		= "Witaj w swojej genealogii";
$pgv_lang["default_news_text"]		= "Informacje genealogiczne na tej stronie są wyświetlane dzięki <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a>. Ta strona jest wprowadzeniem i przeglądem tej genealogii. Aby rozpocząć pracę z danymi, wybierz jeden z diagramów z menu Diagramy powyżej, przejdź do listy osób, lub skorzystaj z wyszukiwarki nazwisk lub miejsc.<br /><br />Jeśli masz kłopoty z korzystaniem ze strony, możesz kliknąć ikonkę pomocy aby uzyskać informacje dotyczące strony, którą właśnie widzisz.<br /><br />Dziękujemy za odwiedzenie naszej strony.";
$pgv_lang["reset_default_blocks"]	= "Przywróć domyślne bloki";
$pgv_lang["recent_changes"]			= "Ostatnie zmiany";
$pgv_lang["recent_changes_block"]	= "Blok ostatnich zmian";
$pgv_lang["recent_changes_descr"]	= "Blok ostatnich zmian wyświelna listę modyfikacji, którym uległa baza danych w ciągu ostatniego miesiąca. Ten blok ma za zadanie pomóc ci być na bieżąco z wprowadzanymi zmianami. Zmiany są wykrywane automatycznie na podstawie znacznika CHAN, określonego w standardzie GEDCOM.";
$pgv_lang["recent_changes_none"]	= "<b>Brak zmian w ciągu ostatnich #pgv_lang[global_num1]# dni.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Zmiany dokonane w ciągu ostatnich #pgv_lang[global_num1]# dni</b><br />";
$pgv_lang["show_empty_block"]		= "Ukryj pusty blok";
$pgv_lang["hide_block_warn"]		= "Jeśli ukryjesz pusty blok, nie będziesz w stanie zmienić jego konfiguracji do momentu gdy pojawi się w nim zawartość i stanie się widoczny.";
$pgv_lang["delete_selected_messages"]	= "Usuń zaznaczone wiadomości";
$pgv_lang["use_blocks_for_default"]		= "Czy użyć tych bloków jako ustawienie domyślne bloków dla wszystkich użytkowników?";
$pgv_lang["block_not_configure"]		= "Tego bloku nie można konfigurować.";

//-- validate GEDCOM
$pgv_lang["add_media_tool"]			= "Narzędzie dodawania multimediów";

//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "Diagram klepsydrowy";

//-- report engine
$pgv_lang["choose_report"]			= "Wybierz raport do utworzenia";
$pgv_lang["enter_report_values"]	= "Parametry raportu";
$pgv_lang["selected_report"]		= "Typ raportu";
$pgv_lang["select_report"]			= "Wybierz raport";
$pgv_lang["download_report"]		= "Pobierz raport";
$pgv_lang["reports"]				= "Raporty";
$pgv_lang["pdf_reports"]			= "Raporty PDF";
$pgv_lang["html_reports"]			= "Raporty HTML";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Wywód przodków";
$pgv_lang["ahnentafel_header"]		= "Wywód przodków dla: ";
$pgv_lang["ahnentafel_generation"]	= "Pokolenie ";
$pgv_lang["ahnentafel_pronoun_m"]	= " ";
$pgv_lang["ahnentafel_pronoun_f"]	= " ";
$pgv_lang["ahnentafel_born_m"]		= "urodził się";
$pgv_lang["ahnentafel_born_f"]		= "urodziła się";
$pgv_lang["ahnentafel_christened_m"]= "Został ochrzczony";
$pgv_lang["ahnentafel_christened_f"]= "Została ochrzczona";
$pgv_lang["ahnentafel_married_m"]	= "Ożenił się z";
$pgv_lang["ahnentafel_married_f"]	= "Wyszła za mąż za";
$pgv_lang["ahnentafel_married_post"]= " ";
$pgv_lang["ahnentafel_died_m"]		= "Zmarł";
$pgv_lang["ahnentafel_died_f"]		= "Zmarła";
$pgv_lang["ahnentafel_buried_f"]	= "Została pochowana";
$pgv_lang["ahnentafel_buried_m"]	= "Został pochowany";
$pgv_lang["ahnentafel_place"]		= " w miejscowości ";
$pgv_lang["ahnentafel_no_details"]	= ", ale szczegóły są nieznane";
$pgv_lang["ahnentafel_on"]			= " ";

//-- Changes report
$pgv_lang["changes_report"]			= "Raport o zmianach";
$pgv_lang["changes_pending_tot"]	= "Wszystkie oczekujące zmiany:";
$pgv_lang["changes_accepted_tot"]	= "Wszystkich zaakceptowanych zmian:";

//-- Descendancy report
$pgv_lang["descend_report"]			= "Raport o potomkach";
$pgv_lang["descendancy_header"]		= "Raport o potomkach dla: ";
$pgv_lang["son_of"]					= "syna";
$pgv_lang["daughter_of"]			= "córką";
$pgv_lang["child_of"]				= "Dziecko rodziny ";
$pgv_lang["children_of"]			= "Dzieci rodziny ";
$pgv_lang["descendancy_pronoun_m"]	= "Który";
$pgv_lang["descendancy_pronoun_f"]	= "Która";

$pgv_lang["family_group_report"]	= "Raport o grupie rodzinnej";
$pgv_lang["page"]					= "Strona";
$pgv_lang["of"] 					= "z";
$pgv_lang["enter_famid"]			= "Identyfikator rodziny";
$pgv_lang["show_sources"]			= "Pokaż źródła";
$pgv_lang["show_notes"]				= "Pokaż notatki";
$pgv_lang["show_basic"]				= "Pokaż puste wydarzenia";
$pgv_lang["show_photos"]			= "Pokaż zdjęcia";
$pgv_lang["relatives_report_ext"]	= "Raport o krewnych (szczegółowy)";
$pgv_lang["with"]					= "z";
$pgv_lang["on"]						= "dnia";
$pgv_lang["in"]						= "w";
$pgv_lang["individual_report"]		= "Raport osobowy";
$pgv_lang["individual_with_rela_report"] = "Raport o bliskich";
$pgv_lang["enter_pid"]				= "Identyfikator osoby";
$pgv_lang["generated_by"]			= "Utworzony przez";
$pgv_lang["list_children"]			= "według daty urodzin";
$pgv_lang["birth_report"]			= "Raport o datach i miejscach urodzenia";
$pgv_lang["birthplace"]				= "Miejsce urodzenia zawiera";
$pgv_lang["birthdate1"]				= "Początek zakresu dat urodzin";
$pgv_lang["birthdate2"]				= "Koniec zakresu dat urodzin";
$pgv_lang["death_report"]			= "Raport o datach i miejscach śmierci";
$pgv_lang["deathplace"]				= "Miejsce śmierci zawiera";
$pgv_lang["deathdate1"]				= "Początek zakresu dat śmierci";
$pgv_lang["deathdate2"]				= "Koniec zakresu dat śmierci";
$pgv_lang["marr_report"]			= "Raport o datach i miejscach ślubów";
$pgv_lang["marrplace"]				= "Miejsce zawiera";
$pgv_lang["marrdate1"]				= "Początek zakresu dat ślubów";
$pgv_lang["marrdate2"]				= "Koniec zakresu dat ślubów";
$pgv_lang["sort_by"]				= "Kryterium sortowania";
$pgv_lang["cemetery_report"]		= "Raport o cmentarzach";
$pgv_lang["burialplace"]			= "Nazwa miejscowości pochówku";
$pgv_lang["fact_sources_report"]	= "Źródła wydarzeń";
$pgv_lang["missing_facts_report"]	= "Brakujące informacje o krewnych";
$pgv_lang["sources_to_events"]		= "Źródła wydarzeń";

$pgv_lang["cleanup"]				= "Porządkowanie";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["statistics"]				= "Statystyki";
$pgv_lang["show_stats_charts"]		= "Pokaż wykresy statystyk";
$pgv_lang["decade_birth"]			= "Dekada urodzin";
$pgv_lang["decade_death"]			= "Dekada śmierci";
$pgv_lang["decade_marriage"]		= "Dekada ślubu";
$pgv_lang["avg_age"]				= "Średni wiek";

//-- Merge Records
$pgv_lang["merge_same"]			= "Wpisy nie są tego samego typu. Nie można scalać wpisów różnego typu.";
$pgv_lang["merge_step1"]		= "1 z 3 kroków scalania";
$pgv_lang["merge_step2"]		= "2 z 3 kroków scalania";
$pgv_lang["merge_step3"]		= "3 z 3 kroków scalania";
$pgv_lang["select_gedcom_records"]	= "Wybierz dwa wpisy GEDCOM do scalenia. Wpisy muszą być tego samego typu.";
$pgv_lang["merge_to"]			= "ID do którego scalić dane:";
$pgv_lang["merge_from"]			= "ID z którego scalić dane:";
$pgv_lang["merge_facts_same"]	= "Poniższe fakty są identyczne w obu wpisach i zostaną scalone automatycznie:";
$pgv_lang["no_matches_found"]	= "Nie znaleziono zgodnych faktów.";
$pgv_lang["unmatching_facts"]	= "Poniższe fakty różnią się. Zaznacz dane, które chcesz zachować:";
$pgv_lang["record"]				= "Wpis";
$pgv_lang["adding"]				= "Dodawanie";
$pgv_lang["updating_linked"]	= "Uaktualnianie powiązanego wpisu";
$pgv_lang["merge_more"]			= "Scal więcej wpisów";
$pgv_lang["same_ids"]			= "Wprowadzono jednakowe identyfikatory. Nie można scalać wpisu samego ze sobą.";
$pgv_lang["updated_favorites"] 	= "uaktualniono ulubionych.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"]		= "Diagram przodków";
$pgv_lang["gen_ancestry_chart"]	= "Diagram przodków pokoleń: #PEDIGREE_GENERATIONS#";
$pgv_lang["chart_style"]		= "Styl wykresu";
$pgv_lang["chart_list"]			= "Lista";
$pgv_lang["chart_booklet"]		= "Broszura";
$pgv_lang["show_cousins"]		= "Pokaż kuzynostwo";

// 1st generation
$pgv_lang["sosa_2"]				= "ojciec";
$pgv_lang["sosa_3"]				= "matka";
// 2nd generation
$pgv_lang["sosa_4"]				= "dziadek";
$pgv_lang["sosa_5"]				= "babcia";
$pgv_lang["sosa_6"]				= "dziadek";
$pgv_lang["sosa_7"]				= "babcia";
// 3rd generation
$pgv_lang["sosa_8"]				= "pradziadek";
$pgv_lang["sosa_9"]				= "prababcia";
$pgv_lang["sosa_10"]			= "pradziadek";
$pgv_lang["sosa_11"]			= "prababcia";
$pgv_lang["sosa_12"]			= "pradziadek";
$pgv_lang["sosa_13"]			= "prababcia";
$pgv_lang["sosa_14"]			= "pradziadek";
$pgv_lang["sosa_15"]			= "prababcia";
// 4th generation
$pgv_lang["sosa_16"]			= "prapradziadek";
$pgv_lang["sosa_17"]			= "praprababcia";
$pgv_lang["sosa_18"]			= "prapradziadek";
$pgv_lang["sosa_19"]			= "praprababcia";
$pgv_lang["sosa_20"]			= "prapradziadek";
$pgv_lang["sosa_21"]			= "praprababcia";
$pgv_lang["sosa_22"]			= "prapradziadek";
$pgv_lang["sosa_23"]			= "praprababcia";
$pgv_lang["sosa_24"]			= "prapradziadek";
$pgv_lang["sosa_25"]			= "praprababcia";
$pgv_lang["sosa_26"]			= "prapradziadek";
$pgv_lang["sosa_27"]			= "praprababcia";
$pgv_lang["sosa_28"]			= "prapradziadek";
$pgv_lang["sosa_29"]			= "praprababcia";
$pgv_lang["sosa_30"]			= "prapradziadek";
$pgv_lang["sosa_31"]			= "praprababcia";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//			%2\$d is replaced with the number of generations - 1
//			%3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x pra dziadek";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x pra babcia";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x pra dziadek";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x pra babcia";

//-- FAN CHART
$pgv_lang["compact_chart"]			= "Diagram kompaktowy";
$pgv_lang["fan_chart"]				= "Diagram kołowy";
$pgv_lang["gen_fan_chart"]			= "#PEDIGREE_GENERATIONS# Pokoleniowy wykres kołowy";
$pgv_lang["fan_width"]				= "Szerokość wykresu";
$pgv_lang["gd_library"]				= "Błędnie skonfigurowany serwer PHP: do korzystania z funkcji graficznych wymagana jest biblioteka GD 2.x.";
$pgv_lang["gd_freetype"]			= "Błędnie skonfigurowany serwer PHP: do obsługi czcionek TrueType wymagana jest biblioteka Freetype.";
$pgv_lang["gd_helplink"]			= "http://pl2.php.net/manual/pl/book.image.php";
$pgv_lang["fontfile_error"]			= "Nie znaleziono pliku czcionki na serwerze PHP";
$pgv_lang["fanchart_IE"]			= "Twoja przeglądarka nie może bezpośrednio wydrukować tego obrazu Diagramu kołowego. Kliknij prawym przyciskiem, a następnie wybierz opcję Zapisz i Drukuj.";

//-- RSS Feed
$pgv_lang["rss_descr"]				= "Artykuły i odnośniki ze strony #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]			= "Kanał RSS utworzony przez PhpGedView";
$pgv_lang["rss_feeds"]				= "Kanały RSS";
$pgv_lang["no_feed_title"]			= "Kanał RSS niedostępny";
$pgv_lang["no_feed"]				= "Brak kanału RSS dla tej strony PhpGedView";
$pgv_lang["feed_login"]				= "Jeśli masz konto na tej stronie PhpGedView, możesz <a href=\"#AUTH_URL#\">zalogować się</a> na serwer za pomocą Podstawowej Autoryzacji HTTP aby uzyskać dostęp do poufnych danych.";
$pgv_lang["authenticated_feed"]		= "Kanał autoryzowany";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"]			= "Pomocnik";
$pgv_lang["attending"]			= "Obsługujący";
$pgv_lang["best_man"]			= "Drużba";
$pgv_lang["bridesmaid"]			= "Druhna";
$pgv_lang["buyer"]				= "Kupiec";
$pgv_lang["circumciser"]		= "Obrzezujący";
$pgv_lang["civil_registrar"]	= "Urzędnik cywilny";
$pgv_lang["employee"]			= "Pracownik";
$pgv_lang["employer"]			= "Pracodawca";
$pgv_lang["foster_child"]		= "Przybrane dziecko";
$pgv_lang["foster_father"]		= "Przybrany ojciec";
$pgv_lang["foster_mother"]		= "Przybrana matka";
$pgv_lang["friend"]				= "Przyjaciel";
$pgv_lang["godfather"]			= "Ojciec chrzestny";
$pgv_lang["godmother"]			= "Matka chrzestna";
$pgv_lang["godparent"]			= "Rodzic chrzestny";
$pgv_lang["godson"]				= "Chrześniak";
$pgv_lang["goddaughter"]		= "Chrześniaczka";
$pgv_lang["godchild"]			= "Chrześniak/Chrześniaczka";
$pgv_lang["guardian"]			= "Opiekun";
$pgv_lang["informant"]			= "Informator";
$pgv_lang["lodger"]				= "Lokator";
$pgv_lang["nanny"]				= "Niania";
$pgv_lang["nurse"]				= "Pielęgniarka";
$pgv_lang["owner"]				= "Właściciel";
$pgv_lang["priest"]				= "Ksiądz";
$pgv_lang["rabbi"]				= "Rabin";
$pgv_lang["registry_officer"]	= "Urzędnik stanu cywilnego";
$pgv_lang["seller"]				= "Sprzedawca";
$pgv_lang["servant"]			= "Służący";
$pgv_lang["slave"]				= "Niewolnik";
$pgv_lang["twin"]				= "Bliźniak";
$pgv_lang["twin_brother"]		= "Brat-bliźniak";
$pgv_lang["twin_sister"]		= "Siostra-bliźniaczka";
$pgv_lang["ward"]				= "Wychowanek";
$pgv_lang["witness"]			= "Świadek";

//-- statistics utility
$pgv_lang["stat_create"]	= "Pokaż własne wykresy statystyk";
$pgv_lang["statutci"]		= "Nie można utworzyć indeksu";
$pgv_lang["statnnames"]		= "Liczba osób";
$pgv_lang["statnfam"]		= "Liczba rodzin";
$pgv_lang["statnmale"]		= "Liczba mężczyzn";
$pgv_lang["statnfemale"]	= "Liczba kobiet";
$pgv_lang["with_sources"]	= "Ze źródłami";
$pgv_lang["without_sources"]= "Bez źródeł";
$pgv_lang["stat_sindi"]		= "Osób ze źródłami";
$pgv_lang["stat_sfam"]		= "Rodzin ze źródłami";
$pgv_lang["statvars"]		= "Podaj następujące parametry wykresu";
$pgv_lang["statlxa"]		= "Rodzaj wykresu";
$pgv_lang["statlya"]		= "postać wyników";
$pgv_lang["statlza"]		= "Rodzaj danych";
$pgv_lang["map_type"]		= "Typ mapy";
$pgv_lang["stat_1_map"]		= "Rozmieszczenie osób";
$pgv_lang["stat_2_map"]		= "Kraj urodzin";
$pgv_lang["stat_3_map"]		= "Kraj śmierci";
$pgv_lang["stat_4_map"]		= "Kraj ślubu";
$pgv_lang["stat_5_birth"]	= "Liczba urodzeń według wieku";
$pgv_lang["stat_6_death"]	= "Liczba zgonów według wieku";
$pgv_lang["stat_7_marr"]	= "Liczba ślubów według wieku";
$pgv_lang["stat_7_div"]		= "Liczba rozwodów według wieku";
$pgv_lang["stat_8_fam"]		= "Liczba rodzin powiązanych ze źródłami";
$pgv_lang["stat_9_indi"]	= "Liczba osób powiązanych ze źródłami";
$pgv_lang["stat_10_none"]	= "brak";
$pgv_lang["stat_11_mb"]		= "Miesiąc urodzin";
$pgv_lang["stat_12_md"]		= "Miesiąc śmierci";
$pgv_lang["stat_13_mm"]		= "Miesiąc ślubu";
$pgv_lang["stat_14_mb1"]	= "Miesiąc urodzin pierwszego dziecka";
$pgv_lang["stat_15_mm1"]	= "Miesiąc pierwszego ślubu";
$pgv_lang["stat_16_mmb"]	= "Liczba miesięcy między ślubem a pierwszym dzieckiem";
$pgv_lang["stat_17_arb"]	= "Długość życia względem roku urodzenia";
$pgv_lang["stat_18_ard"]	= "Długość życia względem roku śmierci";
$pgv_lang["stat_18_aard"]	= "Średnia długość życia względem wieku śmierci";
$pgv_lang["stat_19_arm"]	= "Liczba lat podczas ślubu";
$pgv_lang["stat_19_aarm"]	= "Średnia liczba lat podczas ślubu";
$pgv_lang["stat_20_arm1"]	= "Liczba lat podczas pierwszego ślubu";
$pgv_lang["stat_21_nok"]	= "Liczba dzieci w rodzinie";
$pgv_lang["stat_22_fwok"]	= "Liczba bezdzietnych rodzin";
$pgv_lang["stat_200_none"]	= "wszystko (albo puste)";
$pgv_lang["stat_201_num"]	= "ilościowa";
$pgv_lang["stat_202_perc"]	= "procentowa";
$pgv_lang["stat_300_none"]	= "ogólny";
$pgv_lang["stat_301_mf"]	= "płeć";
$pgv_lang["stat_302_cgp"]	= "okresy czasu";
$pgv_lang["century"]		= "wiek";
$pgv_lang["stat_age"]		= "Liczba lat";
$pgv_lang["no_date_fam"]	= "nieznany";
$pgv_lang["statar_xgp"]		= "wartości dla okresów (oś x):";
$pgv_lang["statar_xgl"]		= "wartości dla liczby lat (oś x):";
$pgv_lang["statar_xgm"]		= "wartości dla liczby miesięcy (oś x):";
$pgv_lang["statar_xga"]		= "wartości dla liczb (oś x):";
$pgv_lang["statar_zgp"]		= "Wybierz okresy czasu";
$pgv_lang["less"]			= "mniej niż";
$pgv_lang["over"]			= "ponad";
$pgv_lang["interval"]		= "co";
$pgv_lang["aft_marr"]		= "miesiące po ślubie";
$pgv_lang["bef_marr"]		= "miesiące przed i po ślubie";
$pgv_lang["quarters"]		= "kwartały po ślubie";
$pgv_lang["half_year"]		= "półrocza po ślubie";
$pgv_lang["one_child"]		= "pojedynczo";
$pgv_lang["two_children"]	= "dwuosobowe grupy";
$pgv_lang["statreset"]		= "Wyczyść";
$pgv_lang["statsubmit"]		= "Pokaż wykres";
$pgv_lang["stat_largest_families"] = "Rodziny z największą liczbą dzieci";

$pgv_lang["stat_own_charts"]		= "Własne wykresy statystyk";
$pgv_lang["statnliving"]			= "Liczba żyjących";
$pgv_lang["statndead"]				= "Liczba zmarłych";
$pgv_lang["stat_births"]			= "Liczba urodzeń";
$pgv_lang["stat_marriages"]			= "Liczba ślubów";
$pgv_lang["stat_divorces"]			= "Liczba rozwodów";
$pgv_lang["stat_deaths"]			= "Liczba zgonów";
$pgv_lang["stat_first_birth"]		= "Pierwsze urodziny";
$pgv_lang["stat_first_marriage"]	= "Pierwszy ślub";
$pgv_lang["stat_first_divorce"]		= "Pierwszy rozwód";
$pgv_lang["stat_first_death"]		= "Pierwsza śmierć";
$pgv_lang["stat_last_birth"]		= "Ostatnie urodziny";
$pgv_lang["stat_last_marriage"]		= "Ostatni ślub";
$pgv_lang["stat_last_divorce"]		= "Ostatni rozwód";
$pgv_lang["stat_last_death"]		= "Ostatnia śmierć";
$pgv_lang["stat_lifespan"]			= "Długość życia";
$pgv_lang["stat_lived_longest"]		= "Osoby, które żyły najdłużej";
$pgv_lang["stat_live_longest"]		= "Najstarsze żyjące osoby";
$pgv_lang["stat_marr_age"]			= "Staż małżeński";
$pgv_lang["stat_long_marr_age"]		= "Najdłuższy staż";
$pgv_lang["stat_short_marr_age"]	= "Najkrótszy staż";
$pgv_lang["stat_youngest_male"]		= "Najmłodszy mężczyzna";
$pgv_lang["stat_youngest_female"]	= "Najmłodsza kobieta";
$pgv_lang["stat_oldest_male"]		= "Najstarszy mężczyzna";
$pgv_lang["stat_oldest_female"]		= "Najstarsza kobieta";
$pgv_lang["stat_childbirth_age"]	= "Liczba lat podczas narodzin dziecka";
$pgv_lang["stat_youngest_father"]	= "Najmłodszy ojciec";
$pgv_lang["stat_youngest_mother"]	= "Najmłodsza matka";
$pgv_lang["stat_oldest_father"]		= "Najstarszy ojciec";
$pgv_lang["stat_oldest_mother"]		= "Najstarsza matka";
$pgv_lang["stat_children_in_fam"]	= "Dzieci w rodzinie";
$pgv_lang["stat_largest_gfamilies"]	= "Rodziny z największą liczbą wnucząt";
$pgv_lang["stat_age_difference"]	= "Różnica wieku";
$pgv_lang["stat_age_siblings"]		= "Różnica wieku rodzeństwa";
$pgv_lang["stat_top_age_siblings"]	= "Rodzeństwo z największą różnicą wieku";
$pgv_lang["stat_age_mf_spouse"]		= "Różnica wieku między mężem a żoną";
$pgv_lang["stat_age_fm_spouse"]		= "Różnica wieku między żoną a mężem";
$pgv_lang["stat_names"]				= "Nazwiska i imiona";
$pgv_lang["statnsurnames"]			= "Liczba nazwisk";
$pgv_lang["statngivennames"]		= "Liczba imion";
$pgv_lang["top_surnames"]			= "Najczęściej występujące nazwiska";
$pgv_lang["top_givennames"]			= "Najczęściej występujące imiona";
$pgv_lang["events"]					= "Wydarzenia";
$pgv_lang["stat_records"]			= "Wpisów";
$pgv_lang["stat_notes"]				= "Notatek";
$pgv_lang["stat_first_event"]		= "Pierwsze wydarzenie";
$pgv_lang["stat_last_event"]		= "Ostatnie wydarzenie";
$pgv_lang["stat_places"]			= "Miejsc";
$pgv_lang["stat_birth_places"]		= "Najczęstsze miejsca urodzenia";
$pgv_lang["stat_marriage_places"]	= "Najczęstsze miejsca ślubu";
$pgv_lang["stat_death_places"]		= "Najczęstsze miejsca śmierci";
$pgv_lang["stat_countries"]			= "Państwa z największą liczbą wydarzeń";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]= "Wykres statystyk";
$pgv_lang["stpl"]			= "...";
$pgv_lang["stplinfo"]		= "dane wykresu:";
$pgv_lang["stpltype"]		= "typ:";
$pgv_lang["stplnoim"]		= " nie zaimplementowane";
$pgv_lang["stplmf"]			= " w zależności od płci";
$pgv_lang["stplipot"]		= " w danym okresie";
$pgv_lang["stplmonth"]		= "miesiąc";
$pgv_lang["stplnumbers"]	= "ilość";
$pgv_lang["stplnuch"]		= "liczba dzieci";
$pgv_lang["stplage"]		= "wiek";
$pgv_lang["stplperc"]		= "procenty";
$pgv_lang["stplnumof"]		= "Razem";
$pgv_lang["stplmarrbirth"]	= "Liczba miesięcy między ślubem a narodzinami pierwszego dziecka";
$pgv_lang["indi_distribution_chart"]	= "Rozmieszczenie wszystkich osób";
$pgv_lang["surname_distribution_chart"]	= "Rozmieszczenie osób z danym nazwiskiem";
$pgv_lang["g_chart_high"]		= "Duża liczba osób";
$pgv_lang["g_chart_low"]		= "Mała liczba osób";
$pgv_lang["g_chart_nobody"]		= "Nikt";
$pgv_lang["area_chart"]			= "Obszar geograficzny";
$pgv_lang["europe_chart"]		= "Europa";
$pgv_lang["s_america_chart"]	= "Ameryka Południowa";
$pgv_lang["asia_chart"]			= "Azja";
$pgv_lang["middle_east_chart"]	= "Bliski Wschód";
$pgv_lang["africa_chart"]		= "Afryka";
$pgv_lang["world_chart"]		= "Świat";

//-- alive in year
$pgv_lang["alive_in_year"]	= "Żyjący w roku";
$pgv_lang["is_alive_in"]	= "Żyje w roku #YEAR#";
$pgv_lang["alive"]			= "Żyjący ";
$pgv_lang["dead"]			= "Zmarli";
$pgv_lang["maybe"]			= "Być może";
$pgv_lang["both_alive"]		= "Oboje żyjący";
$pgv_lang["both_dead"]		= "Oboje zmarli";

//-- Help system
$pgv_lang["definitions"]	= "Definicje";

//-- Index_edit
$pgv_lang["block_desc"]		= "Opisy bloków";
$pgv_lang["click_here"]		= "Dalej";
$pgv_lang["click_here_help"] = "~#pgv_lang[click_here]#~<br /><br />Kliknij ten przycisk aby zapisać zmiany.<br /><br />Zostaniesz przekierowany(a) na stronę #pgv_lang[welcome]# lub #pgv_lang[mygedview]#, ale twoje zmiany mogą nie być widoczne. Aby je zobaczyć, prawdopodobnie trzeba będzie odświeżyć stronę za pomocą odpowiedniej funkcji Twojej przeglądarki.";
$pgv_lang["block_summaries"] = "~#pgv_lang[block_desc]#~<br /><br />Oto krótki opis każdego z bloków, które możesz umieszczać na stronie #pgv_lang[welcome]# lub #pgv_lang[mygedview]#.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"] = "&nbsp;";

//-- Find page
$pgv_lang["total_places"]	= "znalezionych miejsc";
$pgv_lang["media_contains"]	= "Obiekt multimedialny zawiera:";
$pgv_lang["repo_contains"]	= "Repozytorium zawiera:";
$pgv_lang["shared_note_contains"] = "Wspólna notatka zawiera:";
$pgv_lang["source_contains"] = "Źródło zawiera:";
$pgv_lang["display_all"]	= "Pokaż wszystko";

// FAQ Page
$pgv_lang["add_faq_header"]		= "Nagłówek FAQ";
$pgv_lang["add_faq_body"]		= "Treść FAQ";
$pgv_lang["add_faq_order"]		= "Pozycja FAQ";
$pgv_lang["add_faq_visibility"] = "Widoczność FAQ";
$pgv_lang["no_faq_items"]		= "Lista FAQ jest pusta.";
$pgv_lang["position_item"]		= "Umieść element";
$pgv_lang["faq_list"]			= "Lista FAQ";
$pgv_lang["confirm_faq_delete"] = "Czy na pewno usunąć wpis FAQ?";
$pgv_lang["preview"]			= "Podgląd";
$pgv_lang["no_id"]				= "Nie podano żadnego identyfikatora FAQ!";

// Help search
$pgv_lang["hs_title"]			= "Szukaj w pomocy";
$pgv_lang["hs_search"]			= "Szukaj";
$pgv_lang["hs_close"]			= "Zamknij okno";
$pgv_lang["hs_results"]			= "Znaleziono wyników:";
$pgv_lang["hs_keyword"]			= "Szukaj";
$pgv_lang["hs_searchin"]		= "Szukaj w";
$pgv_lang["hs_searchuser"]		= "Pomoc użytkownika";
$pgv_lang["hs_searchmodules"]	= "Pomoc do modułów";
$pgv_lang["hs_searchconfig"]	= "Pomoc administratora";
$pgv_lang["hs_searchhow"]		= "Typ wyszukiwania";
$pgv_lang["hs_searchall"]		= "Wszystkie słowa";
$pgv_lang["hs_searchany"]		= "Dowolne słowo";
$pgv_lang["hs_searchsentence"]	= "Dokładne wyrażenie";
$pgv_lang["hs_intruehelp"]		= "Tylko treść pomocy";
$pgv_lang["hs_inallhelp"]		= "Cała treść";

// Media import
$pgv_lang["choose"]				 = "Wybierz: ";
$pgv_lang["account_information"] = "Informacja o koncie";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"]		= "Dźwięk";
$pgv_lang["TYPE__book"]			= "Książka";
$pgv_lang["TYPE__card"]			= "Karta";
$pgv_lang["TYPE__certificate"]	= "Akt";
$pgv_lang["TYPE__coat"]			= "Herb";
$pgv_lang["TYPE__document"]		= "Dokument";
$pgv_lang["TYPE__electronic"]	= "Elektroniczny";
$pgv_lang["TYPE__fiche"]		= "Mikrofisza";
$pgv_lang["TYPE__film"]			= "Mikrofilm";
$pgv_lang["TYPE__magazine"]		= "Magazyn";
$pgv_lang["TYPE__manuscript"]	= "Rękopis";
$pgv_lang["TYPE__map"]			= "Mapa";
$pgv_lang["TYPE__newspaper"]	= "Gazeta";
$pgv_lang["TYPE__photo"]		= "Fotografia";
$pgv_lang["TYPE__tombstone"]	= "Nagrobek";
$pgv_lang["TYPE__other"]		= "Inne";
$pgv_lang["TYPE__painting"]		= "Obraz";
$pgv_lang["TYPE__video"]		= "Film";

//-- Other media suff
$pgv_lang["view_slideshow"]		= "Uruchom pokaz slajdów";
$pgv_lang["download_image"]		= "Pobierz plik";
$pgv_lang["no_media"]			= "Nie znaleziono obiektów multimedialnych";
$pgv_lang["media_privacy"]		= "Ograniczenie prywatności uniemożliwia Ci oglądanie tego.";
$pgv_lang["relations_heading"]	= "Ten obraz odnosi się do:";
$pgv_lang["file_size"]			= "Rozmiar pliku";
$pgv_lang["img_size"]			= "Rozmiar obrazu";
$pgv_lang["media_broken"]		= "Te multimedia są uszkodzone i nie mogą być zaznaczone znakiem wodnym";
$pgv_lang["unknown_mime"]		= "Błąd Firewalla multimediów: >Nieznany Mimetype< dla pliku";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "Nieznana czynność: [action].";
$pgv_lang["module_error_unknown_type"]		= "Nieznany typ modułu.";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "Pokaż osoby żyjące we wskazanym roku.";
$pgv_lang["button_BIRT_Y100"]	= "Pokaż osoby urodzone w ciągu ostatnich 100 lat.";
$pgv_lang["button_BIRT_YES"]	= "Pokaż osoby urodzone ponad 100 lat temu.";
$pgv_lang["button_DEAT_H"]		= "Pokaż pary, w których tylko mężczyzna nie żyje.";
$pgv_lang["button_DEAT_N"]		= "Pokaż osoby żyjące lub pary, w których obie osoby żyją.";
$pgv_lang["button_DEAT_W"]		= "Pokaż pary, w których tylko kobieta nie żyje.";
$pgv_lang["button_DEAT_Y"]		= "Pokaż osoby zmarłe lub pary, w których obie osoby nie żyją.";
$pgv_lang["button_DEAT_Y100"]	= "Pokaż osoby, które zmarły w ciągu ostatnich 100 lat.";
$pgv_lang["button_DEAT_YES"]	= "Pokaż osoby, które zmarły ponad 100 lat temu.";
$pgv_lang["button_MARR_DIV"]	= "Pokaż pary rozwiedzione.";
$pgv_lang["button_MARR_U"]		= "Pokaż pary z nieznaną datą ślubu.";
$pgv_lang["button_MARR_Y100"]	= "Pokaż pary, które pobrały się w ciągu ostatnich 100 lat.";
$pgv_lang["button_MARR_YES"]	= "Pokaż pary, które pobrały się ponad 100 lat temu.";
$pgv_lang["button_reset"]		= "Przywróć domyślne wartości listy";
$pgv_lang["button_SEX_F"]		= "Pokaż tylko kobiety";
$pgv_lang["button_SEX_M"]		= "Pokaż tylko mężczyzn";
$pgv_lang["button_SEX_U"]		= "Pokaż tylko osoby, których płeć jest nieznana.";
$pgv_lang["button_TREE_L"]		= "Pokaż osoby- lub pary-liście. Są to osoby żyjące, które nie mają dzieci wprowadzonych do bazy danych.";
$pgv_lang["button_TREE_R"]		= "Pokaż osoby- lub pary-korzenie, zwane także patriarchami. Są to osoby, które nie mają żadnych rodziców wprowadzonych do bazy danych.";
$pgv_lang["sort_column"]		= "Sortuj wg tej kolumny";
?>
