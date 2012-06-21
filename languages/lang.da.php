<?php
/**
 * Danish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
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
 *
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: lang.da.php 6989 2010-11-09 03:26:25Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["date_of_entry"]				= "Indtastningsdato i original kilde";
$pgv_lang["genealogy"]					= "slægtsforskning";
$pgv_lang["activate"]					= "Aktivér";
$pgv_lang["deactivate"]					= "Deaktivér";
$pgv_lang["play"]					= "Afspil";
$pgv_lang["stop"]					= "Stop";
$pgv_lang["random_media_start_slide"]	= "Start fremvisning automatisk når siden er læst ind?";
$pgv_lang["random_media_ajax_controls"]	= "Vis kontrolknapper for fremvisningen?";
$pgv_lang["description"]			= "Beskrivelse";
$pgv_lang["current_dir"]			= "Nuværende mappe";
$pgv_lang["SHOW_ID_NUMBERS"]		= "Vis ID numre ved siden af navne";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Vis billede ud for personen";
$pgv_lang["view_img_details"]		= "Vis billeddetaljer";
$pgv_lang["server_folder"]			= "Mappenavn på server";
$pgv_lang["medialist_recursive"]	= "Vis filer fra undermapper";
$pgv_lang["media_options"]			= "Medieindstillinger";
$pgv_lang["confirm_password"]		= "Du skal bekræfte adgangskoden ved at indtaste den i begge felter.";
$pgv_lang["enter_email"]		= "Du skal opgive en e-mail-adresse.";
$pgv_lang["enter_fullname"]			= "Du skal opgive for- og efternavn.";
$pgv_lang["name"]					= "Navn";
$pgv_lang["children"]			= "Børn";
$pgv_lang["child"]				= "Barn";
$pgv_lang["family"] 				= "Familie";
$pgv_lang["as_child"]			= "Forældre og familie";
$pgv_lang["source_menu"]			= "Menu til kilder";
$pgv_lang["repo_menu"]			= "Indstillinger for opbevaringssted";
$pgv_lang["other_records"]		= "Poster, der er knyttet til denne kilde:";
$pgv_lang["other_repo_records"]		= "Kilder, der er knyttet til dette opbevaringssted:";
$pgv_lang["repo_info"]				= "Information om opbevaringssted";
$pgv_lang["enter_terms"]		= "Skriv søgeord";
$pgv_lang["search_asso_label"]		= "Beslægtede";
$pgv_lang["search_asso_text"]		= "Vis beslægtede personer/familier";
$pgv_lang["search_DM"]				= "<A HREF=\"http://en.wikipedia.org/wiki/Daitch-Mokotoff_Soundex\">Daitch-Mokotoff</A> (1985 - bedre)";
$pgv_lang["search_fams"]			= "Familienavne";
$pgv_lang["search_gedcom"]		= "Søg i slægtsdatabasen";
$pgv_lang["search_geds"]			= "Søg i disse slægtsdatabaser";
$pgv_lang["search_indis"]			= "Personer";
$pgv_lang["search_inrecs"]			= "Søg efter";
$pgv_lang["search_prtall"]			= "Alle navne";
$pgv_lang["search_prthit"]			= "Navne med hit";
$pgv_lang["results_per_page"]		= "Resultater per side";
$pgv_lang["firstname_search"]	= "Fornavn";
$pgv_lang["search_prtnames"]		= "Personnavne, der udskrives";
$pgv_lang["other_searches"]			= "Andre søgninger";
$pgv_lang["add_to_cart"]		= "Tilføj til udklipsholderen";
$pgv_lang["view_gedcom"]		= "Vis GEDCOM-post";
$pgv_lang["welcome"]			= "Velkommen";
$pgv_lang["son"]				= "Søn";
$pgv_lang["daughter"]			= "Datter";
$pgv_lang["welcome_page"]		= "Forside";
$pgv_lang["editowndata"]		= "Min Konto";
$pgv_lang["user_admin"]				= "Brugere og rettigheder";
$pgv_lang["manage_media"]			= "Håndtér mediefiler";
$pgv_lang["search_general"]			= "Generel søgning";
$pgv_lang["clipping_privacy"]		= "Nogle emner kunne ikke tilføjes på grund af privatlivs-begrænsninger";
$pgv_lang["chart_new"]				= "Anetræ graf";
$pgv_lang["loading"]				= "Indlæser...";
$pgv_lang["clear_chart"]			= "Nulstil graf";
$pgv_lang["file_information"]		= "Filinformation";
$pgv_lang["choose_file_type"]		= "Vælg filtype";
$pgv_lang["add_individual_by_id"]		= "Tilføj individ via ID";
$pgv_lang["advanced_options"]		= "Avancerede indstillinger";
$pgv_lang["zip_files"]				= "Komprimér fil(er)";
$pgv_lang["include_media"]			= "Inkluder medie (komprimerer automatisk filer)";
$pgv_lang["roman_givn"]				= "Fornavn(e) med latinske bogstaver";
$pgv_lang["roman_surn"]				= "Efternavn med latinske bogstaver";
$pgv_lang["include"]			= "Inkludér:";
$pgv_lang["page_x_of_y"]				= "Side #GLOBALS[currentPage]# af #GLOBALS[lastPage]#";
$pgv_lang["options"]			= "Valg:";
$pgv_lang["config_update_ok"]	= "Opdatering af konfigurationsfilen er udført.";
$pgv_lang["page_size"]					= "Sidestørrelse";
$pgv_lang["record_not_found"]			= "Den søgte GEDCOM-post kunne ikke findes.  Dette kan skyldes et link til en ugyldig person eller en fejl i GEDCOM-filen.";
$pgv_lang["result_page"]				= "Resultatside";
$pgv_lang["edit_media"]					= "Redigér mediefil";
$pgv_lang["wiki_main_page"]				= "Wiki hovedside";
$pgv_lang["wiki_users_guide"]			= "Wiki brugervejledning";
$pgv_lang["wiki_admin_guide"]			= "Wiki administrators vejledning";
$pgv_lang["no_search_for"]			= "Vær sikker på at angive et valg, der skal søges efter.";
$pgv_lang["no_search_site"]			= "Vær sikker på at vælge mindst en ekstern hjemmeside.";
$pgv_lang["search_sites"] 			= "Søg i disse hjemmesider";
$pgv_lang["site_list"]				= "Eksterne hjemmesider: ";
$pgv_lang["site_had"]				= " indeholdt følgende";
$pgv_lang["link_remote"]            = "Opret reference til ekstern person";
$pgv_lang["label_search_engine_detected"]  = "Søgemaskine opdaget";
$pgv_lang["ex-spouse"]              =	"Eks";
$pgv_lang["ex-wife"]                =	"Ekskone";
$pgv_lang["ex-husband"]             =	"Eksmand";
$pgv_lang["noemail"] 				= "Adresser uden e-mails";
$pgv_lang["onlyemail"] 				= "Kun adresser med e-mails";
$pgv_lang["maxviews_exceeded"]		= "Antal sidevisninger overskredet, forsøg igen senere.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Send meddelelse til brugere, der ikke har logget ind i 6 måneder";
$pgv_lang["broadcast_never_logged_in"]	= "Send meddelelse til brugere, der aldrig har logget ind";
$pgv_lang["stats_to_show"]			= "Vælg statistik, der skal vises i denne ramme";
$pgv_lang["stat_avg_age_at_death"]	= "Gennemsnitlig alder ved død";
$pgv_lang["stat_longest_life"]		= "Den længstlevende person";
$pgv_lang["stat_most_children"]		= "Familie med flest børn";
$pgv_lang["stat_average_children"]	= "Gennemsnitlig antal børn pr. familie";
$pgv_lang["stat_events"]			= "Total antal begivenheder";
$pgv_lang["stat_media"]				= "Medieobjekter";
$pgv_lang["stat_surnames"]			= "Total antal efternavne";
$pgv_lang["stat_users"]				= "Total antal brugere";
$pgv_lang["no_family_facts"]		= "Ingen fakta for denne familie.";
$pgv_lang["stat_males"]				= "Total antal mænd";
$pgv_lang["stat_females"]			= "Total antal kvinder";
$pgv_lang["stat_unknown"]			= "Ukendt total";
$pgv_lang["sunday_1st"]					= "Sø";
$pgv_lang["monday_1st"]					= "Ma";
$pgv_lang["tuesday_1st"]				= "Ti";
$pgv_lang["wednesday_1st"]			= "On";
$pgv_lang["thursday_1st"]				= "To";
$pgv_lang["friday_1st"]					= "Fr";
$pgv_lang["saturday_1st"]				= "Lø";
$pgv_lang["jan_1st"]          = "Jan";
$pgv_lang["feb_1st"]          = "Feb";
$pgv_lang["mar_1st"]          = "Marts";
$pgv_lang["apr_1st"]          = "April";
$pgv_lang["may_1st"]          = "Maj";
$pgv_lang["jun_1st"]          = "Juni";
$pgv_lang["jul_1st"]          = "Juli";
$pgv_lang["aug_1st"]          = "Aug";
$pgv_lang["sep_1st"]          = "Sep";
$pgv_lang["oct_1st"]          = "Okt";
$pgv_lang["nov_1st"]          = "Nov";
$pgv_lang["dec_1st"]          = "Dec";
$pgv_lang["edit_source"]			= "Redigér kilde";
$pgv_lang["familybook_chart"]		= "Familiebogsgraf";
$pgv_lang["family_of"]				= "Familie til:&nbsp;";
$pgv_lang["descent_steps"]			= "Efterkommertrin";
$pgv_lang["cancel"]					= "Afbryd";
$pgv_lang["cookie_help"]			= "Denne hjemmeside anvender cookies for at holde styr på din login status.<br /><br />Cookies er tilsyneladende ikke aktiveret i din browser. Du skal aktivere cookies for denne hjemmeside før du kan logge ind.  Se i din browsers hjælp for information vedrørende aktivering af cookies.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]		= "Informationen for denne person blev linket via en ekstern site.";
$pgv_lang["link_remote"]            = "Link til ekstern person";
//Add Remote Link
$pgv_lang["title_search_link"]      = "Tilføj lokal link";
$pgv_lang["label_site_url2"]        = "Hjemmesidens internetadresse (URL)";
//new stuff
$pgv_lang["delete_family_confirm"]	= "Slettes familien vil alle links mellem personer fjernes, men personerne vil ikke blive slettet.  Er du sikker på at du ønsker at slette denne familie?";
$pgv_lang["delete_family"]			= "Slet familie";
$pgv_lang["add_favorite"]			= "Tilføj en ny favorit";
$pgv_lang["url"]					= "URL";
$pgv_lang["add_fav_enter_note"]		= "Skriv en note om denne favorit (valgfri)";
$pgv_lang["add_fav_or_enter_url"]	= "ELLER<br />\nAngiv en fuldstændig internetadresse (URL) og en titel";
$pgv_lang["add_fav_enter_id"]		= "Angiv en person, familie eller kilde ID";
$pgv_lang["next_email_sent"]		= "Den næste påmindelse via e-mail vil blive sendt efter ";
$pgv_lang["last_email_sent"]		= "Den sidste påmindelse via e-mail er sendt ";
$pgv_lang["remove_child"]			= "Fjern dette barn fra familien";
$pgv_lang["link_new_husb"]			= "Tilføj en eksisterende person som ægtemand";
$pgv_lang["link_new_wife"]			= "Tilføj en eksisterende person som hustru";
$pgv_lang["address_labels"]			= "Adresser";
$pgv_lang["filter_address"]			= "Vis adresser, der indeholder:";
$pgv_lang["address_list"]			= "Adresseliste";
$pgv_lang["autocomplete"]			= "Autofærdigør";
$pgv_lang["index_edit_advice"]		= "Markér navnet på en ramme og klik på en af pilene for at flytte den markerede ramme i pilens retning.";
$pgv_lang["changelog"]				= "Ændringer i version #VERSION#";
$pgv_lang["html_block_descr"]		= "Dette er en simpel HTML blok, som du kan placere på din side for at vise en besked (i HTML-format).";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Anbring din titel her</b></p><br /><p>Klik på konfigurationsknappen";
$pgv_lang["html_block_sample_part2"]	= " for at ændre det, der printes.</p>";
$pgv_lang["html_block_name"]		= "HTML blok til enkle beskeder";
$pgv_lang["htmlplus_block_name"]	= "Avanceret HTML";
$pgv_lang["htmlplus_block_descr"]	= "Dette er en HTML blok, som du kan placere på din side for at tilføje den type af meddelelse du ønsker.  Du kan indsætte referencer til information fra slægtsdatabasen ind i HTML teksten.";
$pgv_lang["htmlplus_block_templates"] = "Skabeloner";
$pgv_lang["htmlplus_block_content"] = "Indhold";
$pgv_lang["htmlplus_block_narrative"] = "Fortællende stil (kun på engelsk)";
$pgv_lang["htmlplus_block_custom"]	= "Brugertilpasset";
$pgv_lang["htmlplus_block_keyword"]	= "Nøgleord eksempler (kun engelsk)";
$pgv_lang["htmlplus_block_taglist"]	= "Mærkeliste";
$pgv_lang["htmlplus_block_compat"]	= "Kompatabilitets tilstand";
$pgv_lang["htmlplus_block_ui"]		= "Udvidet grænseflade";
$pgv_lang["htmlplus_block_current"]	= "Nuværende";
$pgv_lang["htmlplus_block_default"]	= "Standard";
$pgv_lang["htmlplus_block_gedcom"]	= "Anetræ";
$pgv_lang["htmlplus_block_birth"]	= "fødsel";
$pgv_lang["htmlplus_block_death"]	= "død";
$pgv_lang["htmlplus_block_marrage"]	= "ægteskab";
$pgv_lang["htmlplus_block_adoption"]= "adoption";
$pgv_lang["htmlplus_block_burial"]	= "begravelse";
$pgv_lang["htmlplus_block_census"]	= "folketælling tilføjet";
$pgv_lang["num_to_show"]			= "Antal elementer der skal vises";
$pgv_lang["days_to_show"]			= "Antal dage der skal vises";
$pgv_lang["before_or_after"]		= "Sæt antal før eller efter navnet?";
$pgv_lang["before"]					= "før";
$pgv_lang["after"]					= "efter";
$pgv_lang["config_block"]			= "Konfigurér rammen";
$pgv_lang["enter_comments"]			= "Angiv venligst i kommentarfeltet, hvordan du er i familie med personer i slægtsdatabasen.";
$pgv_lang["comments"]				= "Kommentarer";
$pgv_lang["child-family"]			= "Forældre og søskende";
$pgv_lang["spouse-family"]			= "Ægtefælle og børn";
$pgv_lang["direct-ancestors"]		= "Forfædre i direkte linie";
$pgv_lang["ancestors"]				= "Forfædre i direkte linie og deres familier";
$pgv_lang["descendants"]			= "Efterkommere";
$pgv_lang["choose_relatives"]		= "Vælg slægtninge";
$pgv_lang["relatives_report"]		= "Slægtningeudskrift";
$pgv_lang["total_unknown"]			= "Ukendt total";
$pgv_lang["total_living"]			= "Antal levende";
$pgv_lang["total_dead"]				= "Antal døde";
$pgv_lang["total_not_born"]			= "Antal ikke fødte endnu";
$pgv_lang["remove_custom_tags"]		= "Fjern brugerdefinerede PGV tags? (f.eks. _PGVU, _THUM)";
$pgv_lang["cookie_login_help"]		= "Hjemmesiden kan huske dig fra sidste gang du loggede ind. Det betyder at du har adgang til beskyttede data og andre specielle funktioner. Dog skal du af sikkerhedshensyn logge dig på igen før du har adgang til at rette i data eller lave om på indstillingerne for hjemmesiden.";
$pgv_lang["remember_me"]			= "Husk mig?";
$pgv_lang["fams_with_surname"]		= "Familier med efternavnet #surname#";
$pgv_lang["support_contact"]		= "Teknisk hjælp";
$pgv_lang["genealogy_contact"]		= "Slægtsspørgsmål";
$pgv_lang["common_upload_errors"]	= "Denne fejl skyldes sandsynligvis, at filen som du prøvede at uploade, var for stor i forhold til en øvre grænse, sat af serverens vært (host).  Standard grænsen i PHP er 2MB.  Du kan prøve at kontakte ejerne af serveren for at få dem til at hæve denne grænse, som er angivet i filen php.ini, så du kan uploade filen ved hjælp af FTP.  Brug siden <a href=\"uploadgedcom.php?action=add_form\"><b>Tilføj GEDCOM-fil</b></a> for at tilføje en GEDCOM-fil, du har uploadet ved hjælp af FTP.";
$pgv_lang["total_memory_usage"]		= "Brugt hukommelse:";
$pgv_lang["mothers_family_with"]	= "Moderens familie med";
$pgv_lang["fathers_family_with"]	= "Faderens familie med ";
$pgv_lang["family_with"]		= "Personens familie med";
$pgv_lang["halfsibling"]			= "Halvsøskende";
$pgv_lang["halfbrother"]			= "Halvbror";
$pgv_lang["halfsister"]				= "Halvsøster";
$pgv_lang["family_timeline"]		= "Vis familie på en tidslinie";
$pgv_lang["children_timeline"]		= "Vis børn på en tidslinie";
$pgv_lang["other"]					= "Andet";
$pgv_lang["sort_by_marriage"]		= "Sortér efter vielsesdato";
$pgv_lang["reorder_families"]		= "Vis familier i anden rækkefølge";
$pgv_lang["indis_with_surname"]		= "Personer med efternavnet #surname#";
$pgv_lang["first_letter_fname"]		= "Vælg et bogstav for at vise personer med fornavn som begynder med dette bogstav.";
$pgv_lang["total_names"]			= "Antal navne";
$pgv_lang["top10_pageviews_nohits"]	= "Der er ikke registret besøg på siderne.";
$pgv_lang["top10_pageviews_msg"]	= "Tælleren skal aktiveres i hjemmesideindstillingerne for at denne ramme skal kunne fungere.";
$pgv_lang["review_changes_descr"]	= "Rammen <i>Ventende ændringer</i>, giver brugere med ret til at ændre oplysninger online mulighed for at se en liste over de ændringer, som mangler gennemsyn og godkendelse.  Disse ændringer kan enten godkendes eller forkastes.<br /><br />Hvis denne ramme er aktiv, vil brugere med rettighed til at godkende, modtage en e-mail dagligt, med en påmindelse om at gennemse ændringerne.";
$pgv_lang["review_changes_block"]	= "Ventende ændringer";
$pgv_lang["review_changes_email"]	= "Send påmindelse via e-mails?";
$pgv_lang["review_changes_email_freq"]	= "Hyppighed for påmindelse via e-mail (i dage)";
$pgv_lang["review_changes_subject"]	= "Gennemse ændringer";
$pgv_lang["show_pending"]		= "Vis ventende ændringer";
$pgv_lang["review_changes_body"]	= "Data i slægtsdatabasen er ændret på hjemmesiden. Disse ændringer skal ses gennem og godkendes, før de kan vises for alle brugere.  Brug venligst adressen (URL) nedenfor for at se ændringerne (du skal anføre brugernavn og adgangskode).";
$pgv_lang["show_spouses"]			= "Vis ægtefæller";
$pgv_lang["quick_update_title"] 	= "Hurtig opdatering";
$pgv_lang["quick_update_instructions"] = "Denne side giver dig mulighed for at foretage en hurtig opdatering af informationerne for en person.  Du behøver blot at udfylde den nye information eller den information, der skal ændres  Efter at ændringerne er sendt, bliver de set gennem og godkendt af en administrator før de bliver vist til andre brugere.";
$pgv_lang["update_name"] 			= "Opdatér navn";
$pgv_lang["update_fact"] 			= "Opdatér en faktaoplysning";
$pgv_lang["update_fact_restricted"] = "Opdatering af dette er begrænset:";
$pgv_lang["update_photo"] 			= "Opdatér billede";
$pgv_lang["select_fact"] 			= "Vælg en faktaoplysning...";
$pgv_lang["update_address"] 		= "Opdatér adresse";
$pgv_lang["top10_pageviews_descr"]	= "Denne ramme vil vise de 10 mest viste personer/familier.  Denne ramme kræver at tælleren er aktiveret i indstillingerne for hjemmesideindstillingerne.";
$pgv_lang["top10_pageviews"]		= "Vist flest gange";
$pgv_lang["top10_pageviews_block"]	= "Vist flest gange";
$pgv_lang["stepdad"]				= "Stedfar";
$pgv_lang["stepmom"]				= "Stedmor";
$pgv_lang["stepsister"]				= "Stedsøster";
$pgv_lang["stepbrother"]			= "Stedbror";
$pgv_lang["fams_charts"]			= "Instillinger for denne familie";
$pgv_lang["indis_charts"]			= "Indstillinger for denne person";
$pgv_lang["none"]					= "Ingen";
$pgv_lang["locked"]					= "Ret ikke";
$pgv_lang["privacy"]				= "Privatliv";
$pgv_lang["number_sign"]			= "nr.";
//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]					= "?";
$pgv_lang["qm_ah"]				= "?";
$pgv_lang["page_help"]			= "Hjælp";
$pgv_lang["help_for_this_page"]	= "Hjælp til denne side";
$pgv_lang["help_contents"]		= "Emner i Hjælp";
$pgv_lang["show_context_help"]	= "Vis Hjælp <b><i>?</i></b> til tekst";
$pgv_lang["hide_context_help"]	= "Skjul Hjælp <b><i>?</i></b> til tekst";
$pgv_lang["sorry"]				= "<b>Beklager, men vi er ikke færdige med hjælpeteksten til dette emne...</b>";
$pgv_lang["help_not_exist"]		= "<b>Hjælpeteksten til dette emne er ikke lagt ind endnu</b>";
$pgv_lang["var_not_exist"]			= "<span style=font-weight: bold>Sprog variablen eksisterer ikke. Venligst rapporter dette, da det er en fejl.</span>";
$pgv_lang["resolution"]			= "Skærmopløsning";
$pgv_lang["menu"]				= "Menu";
$pgv_lang["header"]				= "Sidehoved";
$pgv_lang["imageview"]			= "Billedvisning";
//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]			= "Adgang for brugere";
$pgv_lang["for_support"]		= "For teknisk hjælp og information, kontakt&nbsp;";
$pgv_lang["for_contact"]		= "For hjælp med slægtsspørgsmål, kontakt&nbsp;";
$pgv_lang["for_all_contact"]	= "For teknisk hjælp og slægtsspørgsmål, kontakt&nbsp;";
$pgv_lang["build_error"]		= "GEDCOM-fil er blevet opdateret.";
$pgv_lang["choose_username"]		= "Ønsket brugernavn";
$pgv_lang["username"]			= "Brugernavn";
$pgv_lang["invalid_username"]	= "Brugernavnet indeholder ugyldige tegn";
$pgv_lang["firstname"]			= "Fornavn(e)";
$pgv_lang["choose_password"]		= "Ønsket adgangskode";
$pgv_lang["lastname"]			= "Efternavn";
$pgv_lang["password"]			= "Adgangskode";
$pgv_lang["confirm"]			= "Bekræft adgangskode";
$pgv_lang["login"]				= "Log ind";
$pgv_lang["logout"]				= "Log ud";
$pgv_lang["admin"]				= "Administration";
$pgv_lang["logged_in_as"]		= "Logget ind som";
$pgv_lang["my_pedigree"]		= "Mit anetræ";
$pgv_lang["my_indi"]			= "Mig selv";
$pgv_lang["yes"]				= "Ja";
$pgv_lang["no"]					= "Nej";
$pgv_lang["change_theme"]		= "Skift udseende";
//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Anetræ";
$pgv_lang["gen_ped_chart"]		= "Anetræ - #PEDIGREE_GENERATIONS# generationer";
$pgv_lang["generations"]		= "Generationer&nbsp;";
$pgv_lang["view"]				= "Vis";
$pgv_lang["fam_spouse"]			= "Familie med ægtefælle";
$pgv_lang["root_person"]		= "Startperson ID";
$pgv_lang["hide_details"]		= "Skjul detaljer";
$pgv_lang["show_details"]		= "Vis detaljer";
$pgv_lang["person_links"]		= "Slægtstræer, familie(r) og nære slægtninge til denne person. Klik her for at vise disse data med denne person som start ID.";
$pgv_lang["zoom_box"]			= "Zoom ind/ud på denne boks";
$pgv_lang["orientation"]		= "Orientering";
$pgv_lang["portrait"]			= "Stående";
$pgv_lang["landscape"]			= "Liggende";
$pgv_lang["start_at_parents"]	= "Start med forældrene";
$pgv_lang["charts"]				= "Slægtstræer";
$pgv_lang["lists"]				= "Slægtslister";
$pgv_lang["box_width"]			= "Boksbredde";
//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Kan ikke finde familien med ID ";
$pgv_lang["unable_to_find_record"]	= "Kan ikke finde posten med ID ";
$pgv_lang["title"]				= "Titel";
$pgv_lang["living"]				= "Lever";
$pgv_lang["private"]			= "Privat";
$pgv_lang["birth"]				= "Fødsel:";
$pgv_lang["death"]				= "Død:";
$pgv_lang["descend_chart"]		= "Efterkommergraf";
$pgv_lang["individual_list"]	= "Personliste";
$pgv_lang["family_list"]		= "Familieliste";
$pgv_lang["source_list"]		= "Kildeliste";
$pgv_lang["place_list"]			= "Stednavne";
$pgv_lang["place_list_aft"] 	= "Stednavn efter";
$pgv_lang["media_list"]			= "Multimedieliste";
$pgv_lang["search"]				= "Søg";
$pgv_lang["clippings_cart"]		= "Udklipsholder";
$pgv_lang["print_preview"]		= "Udskriftsvenlig version";
$pgv_lang["cancel_preview"]		= "Tilbage til almindelig visning";
$pgv_lang["change_lang"]		= "Vælg sprog";
$pgv_lang["print"]				= "Udskriv";
$pgv_lang["total_queries"]		= "Antal søgninger i databasen:";
$pgv_lang["total_privacy_checks"]	= "Antal check af privatlivsbeskyttelse: ";
$pgv_lang["back"]				= "Tilbage";
//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]				= "Også kendt som";
$pgv_lang["male"]				= "Mand";
$pgv_lang["female"]				= "Kvinde";
$pgv_lang["temple"]				= "Mormon tempel";
$pgv_lang["temple_code"]		= "Mormon tempelkode:";
$pgv_lang["status"]				= "Status";
$pgv_lang["source"]				= "Kilde";
$pgv_lang["text"]				= "Kildetekst:";
$pgv_lang["note"]				= "Note";
$pgv_lang["NN"]					= "(ukendt)";
$pgv_lang["PN"]					= "(ukendt)";
$pgv_lang["NNthai"] 			= "(ukendt)";
$pgv_lang["PNthai"] 			= "(ukendt)";
$pgv_lang["NNother"] 			= "(ukendt)";
$pgv_lang["PNother"] 			= "(ukendt)";
$pgv_lang["unrecognized_code"]	= "Ukendt GEDCOM-kode";
$pgv_lang["unrecognized_code_msg"]	= "Dette er en fejl, som vi ønsker at rette. Rapporter venligst denne fejl til";
$pgv_lang["indi_info"]			= "Personoplysninger";
$pgv_lang["pedigree_chart"]		= "Anetræ";
$pgv_lang["individual"]				= "Individ";
$pgv_lang["as_spouse"]			= "Familie med ægtefælle/partner";
$pgv_lang["privacy_error"]		= "Oplysninger om denne person er privat.<br />";
$pgv_lang["more_information"]	= "For yderligere information, kontakt";
$pgv_lang["given_name"]			= "Fornavn(e)";
$pgv_lang["surname"]			= "Efternavn";
$pgv_lang["suffix"]				= "Suffiks";
$pgv_lang["sex"]				= "Køn";
$pgv_lang["personal_facts"]		= "Fakta og detaljer om personen";
$pgv_lang["type"]				= "Type";
$pgv_lang["parents"] 			= "Forældre:";
$pgv_lang["siblings"] 			= "Søskende";
$pgv_lang["father"] 			= "Far";
$pgv_lang["mother"] 			= "Mor";
$pgv_lang["parent"] 				= "Forælder";
$pgv_lang["self"] 					= "Sig selv";
$pgv_lang["relatives"]			= "Nære slægtninge";
$pgv_lang["relatives_events"]		= "Begivenheder for nære slægtninge";
$pgv_lang["historical_facts"]		= "Historisk Fakta";
$pgv_lang["partner"] 				= "";
$pgv_lang["partner"] 				= "partner";
$pgv_lang["spouse"]				= "Ægtefælle/partner";
$pgv_lang["spouses"] 				= "Ægtefæller";
$pgv_lang["surnames"]			= "Efternavne";
$pgv_lang["adopted"]			= "Adopteret";
$pgv_lang["foster"]				= "Adoptivbarn";
$pgv_lang["sealing"]			= "Besegling (bekræftelse)";
$pgv_lang["challenged"]			= "Indsigelser";
$pgv_lang["disproved"]			= "Modbevist";
$pgv_lang["infant"]				= "Spædbarn";
$pgv_lang["stillborn"]				= "Dødfødt";
$pgv_lang["deceased"]				= "Afdød";
$pgv_lang["link_as_wife"]		= "Knyt denne person til en eksisterende familie som en hustru";
$pgv_lang["no_tab1"]			= "Der er ingen fakta / oplysninger om denne person.";
$pgv_lang["no_tab2"]			= "Der er ingen noter om denne person.";
$pgv_lang["no_tab3"]			= "Der er ingen kilder knyttet til denne person.";
$pgv_lang["no_tab4"]			= "Der er ingen billeder eller andre medier knyttet til denne person.";
$pgv_lang["no_tab5"]			= "Der er ingen nære slægtninge knyttet til denne person.";
$pgv_lang["no_tab6"]			= "Der er ingen efterforsknings-log knyttet til denne person.";
$pgv_lang["show_fact_sources"]		= "Vis alle kilder";
$pgv_lang["show_fact_notes"]		= "Vis alle noter";
//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Familieoplysninger";
$pgv_lang["family_group_info"]	= "Familiegruppe oplysninger";
$pgv_lang["husband"]			= "Ægtemand";
$pgv_lang["wife"]				= "Hustru";
$pgv_lang["marriage"]			= "Bryllup:";
$pgv_lang["lds_sealing"]		= "Mormon besegling:";
$pgv_lang["marriage_license"]	= "Kongebrev:";
$pgv_lang["no_children"]		= "Ingen registrerede børn";
$pgv_lang["childless_family"]		= "Denne familie forblev barnløs";
$pgv_lang["parents_timeline"]	= "Vis par på en tidslinie";
//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "Udklipsholder";
$pgv_lang["which_links"]		= "Hvilke links vil du tilføje til denne familie?";
$pgv_lang["just_family"]		= "Tilføj kun denne familie.";
$pgv_lang["parents_and_family"]	= "Tilføj familie og forældre.";
$pgv_lang["parents_and_child"]	= "Tilføj forældre og barn.";
$pgv_lang["parents_desc"]		= "Tilføj forældre og alle efterkommere.";
$pgv_lang["continue"]			= "Fortsæt med at tilføje";
$pgv_lang["which_p_links"]		= "Hvilke links vil du tilføje til denne person?";
$pgv_lang["just_person"]		= "Tilføj kun denne person.";
$pgv_lang["person_parents_sibs"]	= "Tilføj denne person, hans forældre og søskende.";
$pgv_lang["person_ancestors"]		= "Tilføj denne person og hans slægtninge i direkte linie.";
$pgv_lang["person_ancestor_fams"]	= "Tilføj denne person, hans slægtninge i direkte linie og deres familier.";
$pgv_lang["person_spouse"]		= "Tilføj denne person, hans ægtefælle og børn.";
$pgv_lang["person_desc"]		= "Tilføj denne person, hans ægtefælle/partner, og alle efterkommere.";
$pgv_lang["which_s_links"]			= "Hvilke poster der har link til denne kilde skal tilføjes?";
$pgv_lang["just_source"]		= "Tilføj kun denne kilde.";
$pgv_lang["linked_source"]		= "Tilføj denne kilde og familier/individer der er kædet til den.";
$pgv_lang["person_private"]		= "Data for denne person er private. Personlige data vises derfor ikke.";
$pgv_lang["family_private"]		= "Data for denne familie er private. Familiære data vises derfor ikke.";
$pgv_lang["download"]			= "Højreklik (control-klik på Mac) på linket nedenunder og vælg &quot;Gem som&quot; for at hente filerne.";
$pgv_lang["cart_is_empty"]		= "Din udklipsholder er tom.";
$pgv_lang["id"]					= "ID";
$pgv_lang["ID"]					= "ID";
$pgv_lang["name_description"]	= "Navn / beskrivelse";
$pgv_lang["remove"]				= "Fjern";
$pgv_lang["empty_cart"]			= "Tøm mappen";
$pgv_lang["download_now"]		= "Hent nu";
$pgv_lang["download_file"]			= "Hent filen #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Denne person er hentet fra:";
$pgv_lang["family_downloaded_from"]	= "Denne familie er hentet fra:";
$pgv_lang["source_downloaded_from"]	= "Denne kilde er hentet fra:";
//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "Forbindelse til stednavne fundet";
$pgv_lang["top_level"]			= "Top niveau";
$pgv_lang["form"]				= "Stednavn gemt som: ";
$pgv_lang["default_form"]		= "By/sted/sogn, herred/amt, stat/provins, land";
$pgv_lang["default_form_info"]	= "(Standard)";
$pgv_lang["unknown"]			= "ukendt";
$pgv_lang["individuals"]		= "Personer";
$pgv_lang["view_records_in_place"]	= " Vis alle personer / familier knyttet til stedet ";
$pgv_lang["place_list2"] 		= "Alle stednavne";
$pgv_lang["show_place_hierarchy"]	= "Vis stednavn efter niveau";
$pgv_lang["show_place_list"]	= "Vis alle stednavne";
$pgv_lang["total_unic_places"]	= "Antal entydige stednavne";
//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "Eksterne objekter";
$pgv_lang["multi_title"]		= "Billeder eller andre mediefiler";
$pgv_lang["media_found"]		= "Billeder eller mediefiler fundet";
$pgv_lang["view_person"]		= "Vis person";
$pgv_lang["view_family"]		= "Vis familie";
$pgv_lang["view_source"]		= "Vis kilde";
$pgv_lang["view_object"]			= "Vis Objekt";
$pgv_lang["prev"]				= "&lt; Forrige";
$pgv_lang["next"]				= "Næste &gt;";
$pgv_lang["next_image"]				= "Næste billede";
$pgv_lang["file_not_found"]		= "Fandt ikke filen.";
$pgv_lang["medialist_show"]		= "Vis ";
$pgv_lang["per_page"]			= "billeder eller mediefiler pr. side";
$pgv_lang["media_format"]			= "Medieformat";
$pgv_lang["image_size"]				= "Billeddimensioner";
$pgv_lang["media_id"]				= "Medie ID";
$pgv_lang["invalid_id"]				= "Dette ID findes ikke i denne GEDCOM-fil.";
$pgv_lang["record_updated"]		= "Posten #pid# blev opdateret.";
$pgv_lang["record_not_updated"]		= "Posten #pid# kunne ikke opdateres.";
$pgv_lang["record_removed"]		= "Posten #xref# blev fjernet fra slægtsdatabasen.";
$pgv_lang["record_not_removed"]		= "Posten #xref# kunne ikke fjernes fra slægtsdatabasen.";
$pgv_lang["record_added"]			= "Posten #xref# blev korrekt tilføjet til slægtsdatabasen.";
$pgv_lang["record_not_added"]		= "Posten #xref# kunne ikke tilføjes til slægtsdatabasen.";
//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"]		= "Søg som du tror det staves (fonetisk søgning)";
$pgv_lang["sources"]			= "Kilder";
$pgv_lang["lastname_search"]	= "Efternavn";
$pgv_lang["search_place"]		= "Stednavn";
$pgv_lang["search_year"]		= "År";
$pgv_lang["no_results"]			= "Fandt ingenting";
$pgv_lang["search_soundex"]			= "Fonetisk søgning";
$pgv_lang["search_replace"]			= "Søg og erstat";
$pgv_lang["search_sources"]			= "Kilder";
$pgv_lang["search_more_chars"]      = "Skriv venligst mere end et bogstav";
$pgv_lang["search_soundextype"]		= "Type af fonetisk søgning:";
$pgv_lang["search_russell"]			= "<A HREF=\"http://en.wikipedia.org/wiki/Soundex\">Russell</A> (1922 - hurtigst)";
$pgv_lang["search_tagfilter"]		= "Udelad filter";
$pgv_lang["search_tagfon"]			= "Udelad nogle ikke-genealogiske data";
$pgv_lang["search_tagfoff"]			= "Fra";
$pgv_lang["associate"]				= "tilknyt";
$pgv_lang["search_record"]			= "Hele posten";
$pgv_lang["search_to"]				= "til";
//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]		= "Titler";
$pgv_lang["find_source"]		= "Find kilde";
//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]				= "Opbevaringssteder";
$pgv_lang["repos_found"]			= "Opbevaringssteder fundet";
$pgv_lang["find_repository"]		= "Find opbevaringssted";
$pgv_lang["total_repositories"]		= "Antal opbevaringssteder";
$pgv_lang["confirm_delete_repo"]	= "Er du sikker på at du vil slette dette opbevaringssted fra slægtsdatabasen?";
//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Information om kilde";
$pgv_lang["people"]				= "Personer";
$pgv_lang["families"]			= "Familier";
$pgv_lang["total_sources"]		= "Antal kilder";
//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]	= "Ugyldig GEDCOM 5.5 format";
$pgv_lang["exec_time"]			= "Eksekveringstid:";
$pgv_lang["unable_to_create_index"]	= "Indeksfiler kan ikke oprettes. Kontrollér at index-mappen i PhpGedView-installationen har de nødvendige skriverettigheder. Skrivebeskyttelsen kan evt. etableres igen når indeksfilerne er oprettet.";
$pgv_lang["changes_present"]	= "Denne slægtsdatabase har &quot;Ventende ændringer&quot;.  Hvis du fortsætter med at importere, vil ændringerne blive føjet til databasen uden at du får godkendt dem først.  Du BØR se ændringerne igennem, før du fortsætter importeringen!";
$pgv_lang["sec"]				= "sek";
//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]			= "Antal familier";
$pgv_lang["total_indis"]		= "Antal personer";
$pgv_lang["notes"]				= "Noter";
$pgv_lang["ssourcess"]			= "Kilder";
$pgv_lang["media"]				= "Billeder- og medier";
$pgv_lang["name_contains"]		= "Navn indeholder:";
$pgv_lang["filter"]				= "Filter";
$pgv_lang["find_individual"]	= "Find en persons ID";
$pgv_lang["find_familyid"]		= "Find en families ID";
$pgv_lang["find_sourceid"]		= "Find kilde";
$pgv_lang["find_specialchar"]	= "Find specielle karakterer";
$pgv_lang["magnify"]			= "Forstør";
$pgv_lang["skip_surnames"]		= "Vis ikke efternavn";
$pgv_lang["show_surnames"]		= "Vis kun efternavn";
$pgv_lang["all"]				= "ALLE";
$pgv_lang["hidden"]				= "Skjult";
$pgv_lang["confidential"]		= "Fortrolig";
$pgv_lang["alpha_index"]				= "Alfabetisk liste";
$pgv_lang["name_list"] 				= "Navneliste";
$pgv_lang["firstname_alpha_index"] 	= "Alfabetisk liste over fornavne";
$pgv_lang["roots"]		 				= "Rødder";
$pgv_lang["leaves"] 					= "Blade";
$pgv_lang["widow"] 					= "Enke";
$pgv_lang["widower"] 				= "Enkemand";
$pgv_lang["show_parents"] 			= "Vis forældre";
//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]					= "Alder";
$pgv_lang["days"]					= "dage";
$pgv_lang["weeks"]					= "uger";
$pgv_lang["months"]					= "måneder";
$pgv_lang["years"]					= "år";
$pgv_lang["day1"]					= "dag";
$pgv_lang["week1"]					= "uge";
$pgv_lang["month1"]					= "måned";
$pgv_lang["year1"]					= "år";
$pgv_lang["after_death"]        ="efter død";
$pgv_lang["timeline_title"]		= "Slægtens tidslinie";
$pgv_lang["timeline_chart"]		= "Tidsliniegraf";
$pgv_lang["remove_person"]		= "Fjern person";
$pgv_lang["show_age"]			= "Vis aldersmarkør";
$pgv_lang["add_another"]		= "Tilføj en person til tidslinien:<br />Person ID:";
$pgv_lang["find_id"]			= "Find ID";
$pgv_lang["show"]				= "Vis";
$pgv_lang["year"]				= "År:";
$pgv_lang["timeline_instructions"]	= "I nyere browsere kan du kan flytte på boksene nedenunder ved hjælp af musen!";
$pgv_lang["zoom_in"]			= "Zoom ind";
$pgv_lang["zoom_out"]			= "Zoom ud";
$pgv_lang["timeline_beginYear"] = "Start år";
$pgv_lang["timeline_endYear"] = "Slut år";
$pgv_lang["timeline_scrollSpeed"] = "Hastighed";
$pgv_lang["timeline_controls"] = "Tidslinje kontroller";
$pgv_lang["cal_none"]                 = "Ingen kalender konvertering";
$pgv_lang["include_family"] = "Inkludér nærmeste familie";
$pgv_lang["lifespan_chart"] = "Livsforløb diagram";

$pgv_lang["cal_gregorian"]            = "Gregoriansk";
$pgv_lang["cal_julian"]               = "Juliansk";
$pgv_lang["cal_french"]               = "Fransk";
$pgv_lang["cal_jewish"]               = "Jødisk";
$pgv_lang["cal_hebrew"]               = "Hebræisk";
$pgv_lang["cal_jewish_and_gregorian"] = "Jødisk og Gregoriansk";
$pgv_lang["midn"]         = "mn";
$pgv_lang["noon"]         = "m";
$pgv_lang["p.m."]         = "pm";
$pgv_lang["a.m."]         = "am";
$pgv_lang["cal_hebrew_and_gregorian"] = "Hebræisk og Gregoriansk";
$pgv_lang["cal_hijri"]                = "Hijri";
$pgv_lang["easter"]     = "Påske";
$pgv_lang["ascension"]  = "Kr. Himmelfartsdag";
$pgv_lang["pentecost"]  = "Pinse";
$pgv_lang["assumption"] = "Maria himmelfart";
$pgv_lang["all_saints"] = "Allehelgensdag";
$pgv_lang["cal_arabic"]               = "Arabisk";
$pgv_lang["christmas"]  = "Jul";

//-- MONTH NAMES
$pgv_lang["jan"]				= "januar";
$pgv_lang["feb"]				= "februar";
$pgv_lang["mar"]				= "marts";
$pgv_lang["apr"]				= "april";
$pgv_lang["may"]				= "maj";
$pgv_lang["jun"]				= "juni";
$pgv_lang["jul"]				= "juli";
$pgv_lang["aug"]				= "august";
$pgv_lang["adr_leap_year"]= "Adar I";
$pgv_lang["sep"]				= "september";
$pgv_lang["dhuah"]        = "Dhu al-Hijjah";
$pgv_lang["dhuaq"]        = "Dhu al-Qi\'dah";
$pgv_lang["shaww"]        = "Shawwal";
$pgv_lang["ramad"]        = "Ramadan";
$pgv_lang["shaab"]        = "Sha\'aban";
$pgv_lang["rajab"]        = "Rajab";
$pgv_lang["jumat"]        = "Jumada al-thani";
$pgv_lang["jumaa"]        = "Jumada al-awwal";
$pgv_lang["rabit"]        = "Rabi\' al-thani";
$pgv_lang["rabia"]        = "Rabi\' al-awwal";
$pgv_lang["safar"]        = "Safar";
$pgv_lang["muhar"]        = "Muharram";
$pgv_lang["oct"]				= "oktober";
$pgv_lang["nov"]				= "november";
$pgv_lang["dec"]				= "december";
$pgv_lang["nivo"]         = "Nivôse";
$pgv_lang["comp"]         = "jours complémentaires";
$pgv_lang["adr"]          = "Adar";
$pgv_lang["tmz"]          = "Tamuz";
$pgv_lang["ell"]          = "Elul";
$pgv_lang["aav"]          = "Av";
$pgv_lang["svn"]          = "Sivan";
$pgv_lang["iyr"]          = "Iyar";
$pgv_lang["nsn"]          = "Nissan";
$pgv_lang["ads"]          = "Adar Sheni";
$pgv_lang["shv"]          = "Shevat";
$pgv_lang["tvt"]          = "Tevet";
$pgv_lang["ksl"]          = "Kislev";
$pgv_lang["csh"]          = "Heshvan";
$pgv_lang["tsh"]          = "Tishrei";
$pgv_lang["fruc"]         = "Fructidor";
$pgv_lang["ther"]         = "Thermidor";
$pgv_lang["mess"]         = "Messidor";
$pgv_lang["prai"]         = "Prairial";
$pgv_lang["flor"]         = "Floréal";
$pgv_lang["germ"]         = "Germinal";
$pgv_lang["vent"]         = "Ventôse";
$pgv_lang["pluv"]         = "Pluviôse";
$pgv_lang["frim"]         = "Frimaire";
$pgv_lang["brum"]         = "Brumaire";
$pgv_lang["vend"]         = "Vendémiaire";
$pgv_lang["b.c."]         = "f.Kr.";
$pgv_lang["abt"]				= "omkring";
$pgv_lang["aft"]				= "efter";
$pgv_lang["and"]				= "og";
$pgv_lang["bef"]				= "før";
$pgv_lang["bet"]				= "mellem";
$pgv_lang["cal"]				= "beregnet";
$pgv_lang["est"]				= "anslået";
$pgv_lang["from"]				= "fra";
$pgv_lang["int"]				= "fortolket";
$pgv_lang["to"]					= "til";
$pgv_lang["cir"]				= "cirka";
$pgv_lang["move_mediadirs"]			= "Flyt medie mapper";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "Den beskyttet Media mappe, kunne ikke oprettes i roden. Opret venligst denne mappe og lav den skriv-bar.";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "Media mappen findes ikke. Du skal oprette den først.";
$pgv_lang["move_time_exceeded"]		= "Varrigheden er nået. Prøv kommandoen igen til at flytte resten af filerne.";
$pgv_lang["setperms_time_exceeded"]	= "Varrigheden er nået. Prøv kommando'en igen i en mindre mappe.";
$pgv_lang["setperms_failure"]		= "Adgang ikke sat";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "Den beskyttede media mappe i Media Firewall rode mappen er ikke skrivbar.";
$pgv_lang["media_firewall_invalid_dir"]	= "Fejl: Media firewall var sat igang via. en mappe anden ind media mappen.";
$pgv_lang["setperms_success"]		= "Adgang sat";
$pgv_lang["setperms_readonly"]		= "Lav Verden-kun læs";
$pgv_lang["setperms_writable"]		= "Lave verden-skrivbar";
$pgv_lang["setperms"]				= "Set Media Adgang";
$pgv_lang["move_protected"]			= "Flyt til beskyttet";
$pgv_lang["move_standard"]			= "Flyt til standard";
$pgv_lang["moveto_3"]				= "Flyt til standard mappen";
$pgv_lang["moveto_2"]				= "Flyt til beskyttet mappe";
$pgv_lang["thumb_dir_3"]			= "Miniaturen er i den beskyttede medie mappe";
$pgv_lang["thumb_dir_2"]			= "Miniaturen er i standard medie mappen";
$pgv_lang["thumb_dir_1"]			= "Miniaturen er placeret på en ekstern server";
$pgv_lang["media_dir_3"]			= "Medieobjektet er i den beskyttede medie mappe";
$pgv_lang["media_dir_2"]			= "Medieobjektet er i standard medie mappen";
$pgv_lang["media_dir_1"]			= "Medieobjektet er placeret på en ekstern server";
$pgv_lang["apx"]				= "ca.";
//-- Admin File Messages
$pgv_lang["rebuild_indexes"]		= "Opbyg indeksene påny";
$pgv_lang["password_mismatch"]		= "De to adgangskoder er forskellige.";
$pgv_lang["enter_username"]			= "Du skal opgive et brugernavn.";
$pgv_lang["enter_password"]			= "Du skal opgive en adgangskode.";
$pgv_lang["save"]					= "Gem";
$pgv_lang["saveandgo"]		= "Gem og gå til næste";
$pgv_lang["delete"]					= "Slet";
$pgv_lang["edit"]					= "Ret";
$pgv_lang["no_login"]				= "Bruger kan ikke godkendes.";
$pgv_lang["basic_realm"]			= "Hjemmesidens adgangskontrol";
$pgv_lang["basic_auth_failure"]		= "Du skal indtaste et korrekt login ID og adgangskode for at få adgang til denne side";
$pgv_lang["basic_auth"]				= "Simpel adgangskontrol";
$pgv_lang["digest_auth"]				= "Udvidet adgangskontrol";
$pgv_lang["no_auth_needed"]			= "Uden godkendelse";
$pgv_lang["file_not_exists"]		= "Filnavnet findes ikke.";
$pgv_lang["research_assistant"]		= "Efterforskningsassistent";
$pgv_lang["utf8_to_ansi"]			= "Ønsker du at konvertere fra UTF-8 til ANSI (ISO-8859-1)?";
$pgv_lang["media_linked"]			= "Dette medieobjekt refererer til følgende:";
$pgv_lang["media_not_linked"]		= "Dette medieobjekt refererer ikke til noget.";
//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Se Detaljer af ..."; 
$pgv_lang["relationship_great"]		= "Fint";
$pgv_lang["relationship_chart"]	= "Slægtskabsdiagram";
$pgv_lang["person1"]			= "1. person";
$pgv_lang["person2"]			= "2. person";
$pgv_lang["no_link_found"]		= "Kan ikke finde (flere) relationer mellem de to personer!";
$pgv_lang["sibling"]			= "Søskende";
$pgv_lang["follow_spouse"]		= "Find slægtskab efter giftemål";
$pgv_lang["timeout_error"]		= "FEJL: Fandt ingen slægtsbånd indenfor den maksimale søgetid.";
$pgv_lang["grandchild"]				= "Barnebarn";
$pgv_lang["grandson"]				= "Barnebarn";
$pgv_lang["granddaughter"]			= "Barnebarn";
$pgv_lang["greatgrandchild"]		= "Barnebarn";
$pgv_lang["greatgranddaughter"]		= "Oldebarn";
$pgv_lang["greatgrandson"]			= "Oldebarn";
$pgv_lang["brother"]			= "Bror";
$pgv_lang["sister"]				= "Søster";
$pgv_lang["aunt"]					= "Tante";
$pgv_lang["uncle"]				= "Onkel";
$pgv_lang["niece"]				= "Niece";
$pgv_lang["nephew"]				= "Nevø";
$pgv_lang["firstcousin"]			= "Fætter/kusine";
$pgv_lang["femalecousin"]			= "Kusine";
$pgv_lang["malecousin"]				= "Fætter";
$pgv_lang["relationship_to_me"]	= "Slægtskab til dig";
$pgv_lang["rela_husb"]			= "Slægtskab til ægtemand";
$pgv_lang["rela_wife"]			= "Slægtskab til hustru";
$pgv_lang["next_path"]			= "Find næste sti";
$pgv_lang["show_path"]			= "Vis sti";
$pgv_lang["line_up_generations"]	= "Vis generationer på linie";
$pgv_lang["oldest_top"]			= "Vis de ældste øverst";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s er %2\$s til %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s er %2\$s til %3\$s.";

$pgv_lang["mother_in_law"]		    = "svigermor";
$pgv_lang["father_in_law"]		    = "svigerfar";
$pgv_lang["brother_in_law"]		    = "svoger";
$pgv_lang["aunt_in_law"]			= "Svigerinde";
$pgv_lang["cousin_in_law"]			= "Fætter eller kusines ægtefælle";
$pgv_lang["uncle_in_law"]			= "Svoger";
$pgv_lang["sister_in_law"]		    = "svigerinde";
$pgv_lang["son_in_law"]		        = "svigersøn";
$pgv_lang["daughter_in_law"]		= "svigerdatter";

$pgv_lang["step_son"]		        = "stedsøn";
$pgv_lang["step_daughter"]	    	= "steddatter";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 				= "nevø";
$pgv_lang["bosa_brothers_offspring_3"] 				= "niece";
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] 				= "grandnevø";
$pgv_lang["bosa_brothers_offspring_5"] 				= "grandniece";
$pgv_lang["bosa_brothers_offspring_6"] 				= "grandnevø";
$pgv_lang["bosa_brothers_offspring_7"] 				= "grandniece";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = "%2\$d x grandnevø";
$pgv_lang["n_x_brothers_daughter"] = "%2\$d x grandniece";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 				= "nevø";
$pgv_lang["bosa_sisters_offspring_3"] 				= "niece";
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 				= "grandnevø";
$pgv_lang["bosa_sisters_offspring_5"] 				= "grandniece";
$pgv_lang["bosa_sisters_offspring_6"] 				= "grandnevø";
$pgv_lang["bosa_sisters_offspring_7"] 				= "grandniece";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = "%2\$d x grandnevø";
$pgv_lang["n_x_sisters_daughter"] = "%2\$d x grandniece";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "søn";
$pgv_lang["bosa_3"] 				= "datter";
// 2nd generation
$pgv_lang["bosa_4"] 				= "sønnesøn";
$pgv_lang["bosa_5"] 				= "barnebarn";
$pgv_lang["bosa_6"] 				= "dattersøn";
$pgv_lang["bosa_7"] 				= "barnebarn";
// 3rd generation
$pgv_lang["bosa_8"] 				= "oldebarn";
$pgv_lang["bosa_9"] 				= "oldebarn";
$pgv_lang["bosa_10"] 				= "oldebarn";
$pgv_lang["bosa_11"] 				= "oldebarn";
$pgv_lang["bosa_12"] 				= "oldebarn";
$pgv_lang["bosa_13"] 				= "oldebarn";
$pgv_lang["bosa_14"] 				= "oldebarn";
$pgv_lang["bosa_15"] 				= "oldebarn";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = "%3\$d x tipoldebarn";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d x tipoldebarn";
$pgv_lang["n_x_grandson_from_daughter"]	  = "%3\$d x tipoldebarn";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d x tipoldebarn";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow for language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= "farbror";
$pgv_lang["sosa_uncle_3"] 				= "morbror";
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "grandonkel";
$pgv_lang["sosa_uncle_5"] 				= "grandonkel";
$pgv_lang["sosa_uncle_6"] 				= "grandonkel";
$pgv_lang["sosa_uncle_7"] 				= "grandonkel";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= "%2\$d x grandonkel";
$pgv_lang["n_x_maternal_uncle"]	    = "%2\$d x grandonkel";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= "faster";
$pgv_lang["sosa_aunt_3"] 				= "moster";
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "grandtante";
$pgv_lang["sosa_aunt_5"] 				= "grandtante";
$pgv_lang["sosa_aunt_6"] 				= "grandtante";
$pgv_lang["sosa_aunt_7"] 				= "grandtante";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= "%2\$d x grandtante";
$pgv_lang["n_x_maternal_aunt"]	    = "%2\$d x grandtante";

// the sosa_uncle_bm name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"] 				= "onkel";
$pgv_lang["sosa_uncle_bm_3"] 				= "onkel";
$pgv_lang["sosa_uncle_bm_4"] 				= "grandonkel";
$pgv_lang["sosa_uncle_bm_5"] 				= "grandonkel";
$pgv_lang["sosa_uncle_bm_6"] 				= "grandonkel";
$pgv_lang["sosa_uncle_bm_7"] 				= "grandonkel";

$pgv_lang["n_x_paternal_uncle_bm"]  = "%2\$d x grandonkel";
$pgv_lang["n_x_maternal_uncle_bm"]  = "%2\$d x grandonkel";
// the sosa_aunt_bm name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"] 				= "tante";
$pgv_lang["sosa_aunt_bm_3"] 				= "tante";
$pgv_lang["sosa_aunt_bm_4"] 				= "grandtante";
$pgv_lang["sosa_aunt_bm_5"] 				= "grandtante";
$pgv_lang["sosa_aunt_bm_6"] 				= "grandtante";
$pgv_lang["sosa_aunt_bm_7"] 				= "grandtante";
$pgv_lang["n_x_paternal_aunt_bm"]  = "%2\$d x grandtante";
$pgv_lang["n_x_maternal_aunt_bm"]  = "%2\$d x grandtante";


// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              = "fætter";
$pgv_lang["male_cousin_2"]              = "";
$pgv_lang["male_cousin_3"]              = "";
$pgv_lang["male_cousin_4"]              = "";
$pgv_lang["male_cousin_5"]              = "";
$pgv_lang["male_cousin_6"]              = "";
$pgv_lang["male_cousin_7"]              = "";
$pgv_lang["male_cousin_8"]              = "";
$pgv_lang["male_cousin_9"]              = "";
$pgv_lang["male_cousin_10"]             = "";
$pgv_lang["male_cousin_11"]             = "";
$pgv_lang["male_cousin_12"]             = "";
$pgv_lang["male_cousin_13"]             = "";
$pgv_lang["male_cousin_14"]             = "";
$pgv_lang["male_cousin_15"]             = "";
$pgv_lang["male_cousin_16"]             = "";
$pgv_lang["male_cousin_17"]             = "";
$pgv_lang["male_cousin_18"]             = "";
$pgv_lang["male_cousin_19"]             = "";
$pgv_lang["male_cousin_20"]             = "";
$pgv_lang["male_cousin_n"]              = "";
$pgv_lang["female_cousin_1"]            = "kusine";
$pgv_lang["female_cousin_2"]            = "";
$pgv_lang["female_cousin_3"]            = "";
$pgv_lang["female_cousin_4"]            = "";
$pgv_lang["female_cousin_5"]            = "";
$pgv_lang["female_cousin_6"]            = "";
$pgv_lang["female_cousin_7"]            = "";
$pgv_lang["female_cousin_8"]            = "";
$pgv_lang["female_cousin_9"]            = "";
$pgv_lang["female_cousin_10"]           = "";
$pgv_lang["female_cousin_11"]           = "";
$pgv_lang["female_cousin_12"]           = "";
$pgv_lang["female_cousin_13"]           = "";
$pgv_lang["female_cousin_14"]           = "";
$pgv_lang["female_cousin_15"]           = "";
$pgv_lang["female_cousin_16"]           = "";
$pgv_lang["female_cousin_17"]           = "";
$pgv_lang["female_cousin_18"]           = "";
$pgv_lang["female_cousin_19"]           = "";
$pgv_lang["female_cousin_20"]           = "";
$pgv_lang["female_cousin_n"]            = "";

// Only referenced from english specific functions
$pgv_lang["removed_ascending_1"]   = "";
$pgv_lang["removed_ascending_2"]   = "";
$pgv_lang["removed_ascending_3"]   = "";
$pgv_lang["removed_ascending_4"]   = "";
$pgv_lang["removed_ascending_5"]   = "";
$pgv_lang["removed_ascending_6"]   = "";
$pgv_lang["removed_ascending_7"]   = "";
$pgv_lang["removed_ascending_8"]   = "";
$pgv_lang["removed_ascending_9"]   = "";
$pgv_lang["removed_ascending_10"]  = "";
$pgv_lang["removed_ascending_11"]  = "";
$pgv_lang["removed_ascending_12"]  = "";
$pgv_lang["removed_ascending_13"]  = "";
$pgv_lang["removed_ascending_14"]  = "";
$pgv_lang["removed_ascending_15"]  = "";
$pgv_lang["removed_ascending_16"]  = "";
$pgv_lang["removed_ascending_17"]  = "";
$pgv_lang["removed_ascending_18"]  = "";
$pgv_lang["removed_ascending_19"]  = "";
$pgv_lang["removed_ascending_20"]  = "";
$pgv_lang["removed_descending_1"]  = "";
$pgv_lang["removed_descending_2"]  = "";
$pgv_lang["removed_descending_3"]  = "";
$pgv_lang["removed_descending_4"]  = "";
$pgv_lang["removed_descending_5"]  = "";
$pgv_lang["removed_descending_6"]  = "";
$pgv_lang["removed_descending_7"]  = "";
$pgv_lang["removed_descending_8"]  = "";
$pgv_lang["removed_descending_9"]  = "";
$pgv_lang["removed_descending_10"] = "";
$pgv_lang["removed_descending_11"] = "";
$pgv_lang["removed_descending_12"] = "";
$pgv_lang["removed_descending_13"] = "";
$pgv_lang["removed_descending_14"] = "";
$pgv_lang["removed_descending_15"] = "";
$pgv_lang["removed_descending_16"] = "";
$pgv_lang["removed_descending_17"] = "";
$pgv_lang["removed_descending_18"] = "";
$pgv_lang["removed_descending_19"] = "";
$pgv_lang["removed_descending_20"] = "";


//-- GEDCOM edit utility
$pgv_lang["check_delete"]		= "Er du sikker på at du vil slette disse data?";
$pgv_lang["access_denied"]		= "<b>Ingen adgang!</b><br />Du har ikke adgang til denne del.";
$pgv_lang["changes_exist"]		= "Der er foretaget ændringer i denne slægtsdatabase.";
$pgv_lang["find_place"]			= "Find stednavn";
$pgv_lang["close_window"]		= "Luk vinduet";
$pgv_lang["close_window_without_refresh"]	= "Luk vinduet uden at opdatere listen";
$pgv_lang["place_contains"]		= "Stednavn indeholder:";
$pgv_lang["add"]				= "Tilføj";
$pgv_lang["custom_event"]		= "Egen defineret begivenhed";
$pgv_lang["delete_person"]		= "Slet denne person";
$pgv_lang["confirm_delete_person"]	= "Er du sikker på at du vil slette denne person fra slægtsdatabasen?";
$pgv_lang["find_media"]			= "Find billeder og andre medier";
$pgv_lang["set_link"]			= "Sæt reference";
$pgv_lang["delete_source"]		= "Slet denne kilde";
$pgv_lang["confirm_delete_source"]	= "Er du sikker på, at du vil slette denne kilde fra slægtsdatabasen?";
$pgv_lang["find_family"]		= "Find familie";
$pgv_lang["find_fam_list"]		= "Find familieliste";
$pgv_lang["edit_name"]			= "Ret navn";
$pgv_lang["delete_name"]		= "Slet navn";
$pgv_lang["select_date"]		= "Vælg en dato";
$pgv_lang["user_cannot_edit"]		= "Denne bruger har ikke rettigheder til at ændre i slægtsdatabasen.";
$pgv_lang["ged_noshow"]				= "Denne side er slået fra af hjemmesidens administrator.";
//-- calendar.php messages
$pgv_lang["bdm"]					= "Fødsler, Dødsfald, Vielser";
$pgv_lang["on_this_day"]			= "I dag ...";
$pgv_lang["in_this_month"]		= "I denne måned...";
$pgv_lang["in_this_year"]		= "I dette år...";
$pgv_lang["year_anniversary"]	= "#year_var#. årsdag";
$pgv_lang["today"]				= "I dag";
$pgv_lang["day"]				= "Dag:";
$pgv_lang["month"]				= "Måned:";
$pgv_lang["showcal"]			= "Vis begivenheder for:";
$pgv_lang["anniversary"]			= "Årsdag";
$pgv_lang["anniversary_calendar"] = "Årsdag kalender";
$pgv_lang["sunday"] 				= "søndag";
$pgv_lang["monday"]				= "mandag";
$pgv_lang["tuesday"]			= "tirsdag";
$pgv_lang["wednesday"]			= "onsdag";
$pgv_lang["thursday"]			= "torsdag";
$pgv_lang["friday"]				= "fredag";
$pgv_lang["saturday"]			= "lørdag";
$pgv_lang["viewday"]			= "Vis dag";
$pgv_lang["viewmonth"]			= "Vis måned";
$pgv_lang["viewyear"]			= "Vis år";
$pgv_lang["all_people"]			= "Alle personer";
$pgv_lang["living_only"]		= "Nulevende personer";
$pgv_lang["recent_events"]		= "De sidste 100 år";
$pgv_lang["day_not_set"]		= "Dag ikke angivet";
//-- user self registration module
$pgv_lang["lost_password"]		= "Har du glemt din adgangskode?";
$pgv_lang["requestpassword"]	= "Bestil en ny adgangskode";
$pgv_lang["no_account_yet"]		= "Har du ikke en konto endnu?";
$pgv_lang["requestaccount"]		= "Ansøg om brugerkonto";
$pgv_lang["emailadress"]		= "E-mail-adresse";
$pgv_lang["mandatory"] 			= "Felter markeret med * skal udfyldes.";
$pgv_lang["mail01_line01"]		= "Hej #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "Der er anmodet (på #SERVER_NAME# ) om at få en brugerkonto med din e-mail-adresse ( #user_email# ).";
$pgv_lang["mail01_line03"]		= "Oplysninger om anmodningen findes under linket nedenfor.";
$pgv_lang["mail01_line04"]		= "Klik venligst på linket nedenfor og udfyld de korrekte data for at bekræfte din konto og e-mail-adresse.";
$pgv_lang["mail01_line05"]		= "Hvis det ikke er dig, der har bedt om at få en konto, kan du bare ignorere denne e-mail.";
$pgv_lang["mail01_line06"]		= "Du vil ikke få tilsendt flere e-mails herfra, fordi anmodningen vil blive slettet efter 7 dage, hvis den ikke bliver bekræftet.";
$pgv_lang["mail01_subject"]		= "Din registrering på #SERVER_NAME#";
$pgv_lang["mail02_line01"]		= "Hej administrator ...";
$pgv_lang["mail02_line02"]		= "En ny bruger har anmodet om at få en konto på #SERVER_NAME#.";
$pgv_lang["mail02_line03"]		= "Brugeren har fået tilsendt en e-mail med de nødvendige data for at bekræfte anmodningen om en konto.";
$pgv_lang["mail02_line04"]		= "Du vil blive informeret via email, når den nye bruger har bekræftet sin forespørgel. Derefter skal du som administrator godkende kontoen på hjemmesiden #SERVER_NAME# før brugeren kan logge ind første gang.";
$pgv_lang["mail02_line04a"]		= "Du vil blive informeret via e-mail, når nye bruger har bekræftet sin anmodning. Efter dette vil brugeren kunne logge ind uden din indblanding.";
$pgv_lang["mail02_subject"]		= "Ny registrering på #SERVER_NAME#";
$pgv_lang["hashcode"]			= "Kontrolkode:";
$pgv_lang["thankyou"]			= "Hej #user_fullname# og tak for din ansøgning om at få en brugerkonto.";
$pgv_lang["pls_note06"]			= "Der vil nu blive sendt en bekræftelse via e-mail til adressen <b>#user_email#</b>. Du skal bekræfte din ansøgning om en konto ved at følge vejledningen i e-mailen. Hvis du ikke bekræfter din tilmelding inden for 7 dage, vil ansøgningen automatisk blive afvist, og du skal derefter ansøge igen.<br /><br />Efter du har fulgt vejledningen i emailen, skal en administrator også godkende din ansøgning før din konto kan bruges.<br /><br />For at logge ind på denne hjemmeside skal du huske dit brugernavn og adgangskode.<br /><br />";
$pgv_lang["pls_note06a"] 		= "Vil vil nu sende en bekræftelse via email til emailadressen <b>#user_email#</b>. Du skal godkende din kontoforespørgsel ved at følge vejledningen i emailen. Hvis du ikke bekræfter din tilmelding inden for 7 dage, vil forespørgsel automatisk blive afvist. Du skal derefter ansøge igen.<br /><br />Efter du har fulgt vejledningen i emailen, kan du logge ind.<br /><br />For at logge ind på dette hjemmeside skal du huske dit brugernavn og adgangskode<br /><br />";
$pgv_lang["registernew"]		= "Bekræftelse af ny konto";
$pgv_lang["user_verify"]		= "Brugergodkendelse";
$pgv_lang["send"]				= "Send";
$pgv_lang["pls_note07"]			= "Opgiv det brugernavn, adgangskode og kontrolkode du fik tilsendt som en bekræftelse på din ansøgning med e-post fra denne hjemmeside.";
$pgv_lang["pls_note08"]			= "Informationen om brugeren <b>#user_name#</b> er checket.";
$pgv_lang["mail03_line01"]		= "Hej administrator ...";
$pgv_lang["mail03_line02"]		= "#newuser[username]# ( #newuser[fullname]# ) har bekræftet ønsket om at få en brugerkonto.";
$pgv_lang["mail03_line03"]		= "Tryk på linket nedenunder for at logge ind på hjemmesiden. Brugerkontoen bliver ikke aktiv før du går ind i indstillingerne for brugerens konto og godkender vedkommende. Først da kan han/hun logge ind.";
$pgv_lang["mail03_line03a"]		= "Du behøver ikke at foretage dig noget; brugeren kan nu logge sig ind.";
$pgv_lang["mail03_subject"]		= "Ny bruger på #SERVER_NAME#";
$pgv_lang["pls_note09"]			= "Du har bekræftet din anmodning om at få en konto på hjemmesiden.";
$pgv_lang["pls_note10"]			= "Administratoren af hjemmesiden har fået besked om din anmodning om en brugerkonto. Så snart vedkommende har godkendt din konto, kan du logge dig ind med dit brugernavn og adgangskode.";
$pgv_lang["pls_note10a"]		= "Du kan nu logge dig ind med dit brugernavn og adgangskode.";
$pgv_lang["data_incorrect"]		= "Data var ugyldige! Vær venlig at prøve igen.";
$pgv_lang["user_not_found"]		= "Kunne ikke genkende dig ud fra de oplysninger, du gav. Vær venlig at prøve igen eller kontant hjemmesidens administrator for at får hjælp eller yderligere information.";
$pgv_lang["lost_pw_reset"]		= "Bestil en ny adgangskode";
$pgv_lang["pls_note11"]			= "For at få en ny adgangskode, skal du opgive dit brugernavn. <br /><br />Vi vil derefter sende dig en e-mail med en speciel internetadresse, som indeholder en bekræftelseskode på din konto.<br />På denne måde kan du ændre adgangskoden for at få adgang til din konto igen.<br />Af sikkerhedsmæssige grunde, bør du ikke vise denne bekræftelseskode til nogen, inklusiv administratoren for denne hjemmeside (vi vil heller ikke spørge efter den).<br /><br />Hvis du ønsker at få mere hjælp vedrørende dette, så kontakt administratoren via linket for neden på siden.";
$pgv_lang["mail04_line01"]		= "Hej #user_fullname# ...";
$pgv_lang["mail04_line02"]		= "Der bliver bestilt en ny adgangskode til dit brugernavn!";
$pgv_lang["mail04_line03"]		= "Anbefaling:";
$pgv_lang["mail04_line04"]		= "Klik venligst på linket nedenfor og log dig ind med den nye adgangskode. Af sikkerhedshensyn skal du ændre kodeord med det samme, for at andre  ikke kan opsnappe det og bruge det i stedet for dig selv.";
$pgv_lang["mail04_line05"]			= "Efter at du har logget ind, så vælg linket '#pgv_lang[myuserdata]#' under '#pgv_lang[mygedview]#' menuen og udfyld feltet med adgangskoden for at ændre din adgangskode.";
$pgv_lang["mail04_subject"]		= "Data anmodning fra #SERVER_NAME#";
$pgv_lang["pwreqinfo"]			= "Hej...<br /><br />En e-mail med den nye adgangskode blev sendt til e-mail-adressen (#user[email]#).<br /><br />Check venligst din e-mail om et øjeblik.<br /><br />Anbefaling:<br /><br />Efter at du har modtaget e-mailen, bør du logge dig ind på denne hjemmeside med din midlertidige adgangskode og ændre den. Dette bør gøres af hensyn til sikkerheden for dine data.";
$pgv_lang["myuserdata"]			= "Min Konto";
$pgv_lang["user_theme"]			= "Mit Udseende";
$pgv_lang["mgv"]				= "Min Forside";
$pgv_lang["mygedview"]			= "Mine Sider";
$pgv_lang["passwordlength"]		= "Adgangskoden skal indeholde mindst 6 tegn.";
$pgv_lang["welcome_text_auth_mode_1"]	= "<center><b>Velkommen til disse slægtssider !</b><br />Siderne er kun tilgængelig for besøgende med en brugerkonto.<br />Har du en brugerkonto, kan du logge dig ind herunder.<br /><br />Hvis du ikke har en brugerkonto endnu, kan du søge om at få en<br />ved at klikke på linket <i>#pgv_lang[requestaccount]#</i> neden for.<br />Efter at have godkendt din ansøgning, vil administratoren af hjemmesiden aktivere din konto.<br />Du vil modtage en e-mail når du kan komme ind på siden med dit brugernavn og kodeord.</center>";
$pgv_lang["welcome_text_auth_mode_2"]	= "<center><b>Velkommen til disse slægtssider !</b><br />Siderne er kun tilgængelig for <i>registrerede</i> brugere med en konto.<br />Har du en brugerkonto, kan du logge dig ind herunder.<br /><br />Hvis du ikke har en brugerkonto endnu, kan du søge om at få en<br />ved at klikke på linket #pgv_lang[requestaccount]#.<br />Efter at have godkendt din ansøgning, vil administratoren af hjemmesiden aktivere din konto.<br />Du vil modtage en e-mail når du kan komme ind på siden med dit brugernavn og kodeord.</center>";
$pgv_lang["welcome_text_auth_mode_3"]	= "<center><b>Velkommen til disse slægtssider !</b><br />Siderne er kun tilgængelig for <i>familliemedlemmer</i>.<br />Har du en brugerkonto, kan du logge dig ind herunder.<br /><br />Hvis du ikke har en brugerkonto endnu, kan du søge om at få en<br />ved at klikke på linket #pgv_lang[requestaccount]#.<br />Efter at have godkendt din ansøgning, vil administratoren af hjemmesiden aktivere din konto.<br />Du vil modtage en e-mail når du kan komme ind på siden med dit brugernavn og kodeord.</center>";
$pgv_lang["welcome_text_cust_head"]		= "<center><b>Velkommen til disse slægtssider !</b><br />Siderne er <i>kun</i> tilgængelig for brugere som har gyldigt brugernavn og adgangskode.</center><br />";
$pgv_lang["acceptable_use"]			= "<div class=\"largeError\">Bemærk:</div><div class=\"error\">Ved at udfylde of indsende denne formular, accepterer du:<ul><li>at beskytte privatlivets fred for levende menesker der vises på dette sted;</li><li>og forklare i den nedenstående tekstboks, hvem du er relateret til eller give os oplysninger om nogen der burde vises på vores sted.</li></ul></div>";
//-- mygedview page
$pgv_lang["upcoming_events"]	= "Kommende begivenheder";
$pgv_lang["living_or_all"]			= "Vis kun begivenheder hørende til nulevende personer?";
$pgv_lang["basic_or_all"]			= "Vis kun fødsler, dødsfald og vielser?";
$pgv_lang["style"]					= "Visningsmåde";
$pgv_lang["style1"]					= "Tekst";
$pgv_lang["style2"]					= "Tabel";
$pgv_lang["style3"]					= "Mærkesky";
$pgv_lang["cal_download"]			= "Må brugere hente begivenheder til deres egen computer som fil?";
$pgv_lang["no_events_living"]		= "Ingen begivenheder registreret for nulevende personer for de næste #pgv_lang[global_num1]# dage.";
$pgv_lang["no_events_living1"]		= "Ingen begivenheder registreret for nulevende personer for i morgen.";
$pgv_lang["no_events_all"]			= "Ingen begivenheder registreret for de næste #pgv_lang[global_num1]# dage.";
$pgv_lang["no_events_all1"]			= "Ingen begivenheder registreret for i morgen.";
$pgv_lang["no_events_privacy"]		= "Der findes begivenheder for de næste #pgv_lang[global_num1]# dage, men beskyttelse af privatliv forhindrer dig i at se dem.";
$pgv_lang["no_events_privacy1"]		= "Der findes begivenheder for i morgen, men beskyttelse af privatliv forhindrer dig i at se dem.";
$pgv_lang["more_events_privacy"]	= "<br />Der findes flere begivenheder for de næste #pgv_lang[global_num1]# dage, men beskyttelse af privatliv forhindrer dig i at se dem.";
$pgv_lang["more_events_privacy1"]	= "<br />Der findes flere begivenheder for i morgen, men beskyttelse af privatliv forhindrer dig i at se dem.";
$pgv_lang["none_today_living"]		= "Ingen begivenheder er registreret for nulevende personer for i dag.";
$pgv_lang["none_today_all"]			= "Ingen begivenheder er registreret for i dag.";
$pgv_lang["none_today_privacy"]		= "Der findes begivenheder for i dag, men beskyttelse af privatliv forhindrer dig i at se dem.";
$pgv_lang["more_today_privacy"]		= "<br />Der findes flere begivenheder for i dag, men beskyttelse af privatliv forhindrer dig i at se dem.";
$pgv_lang["chat"]				= "Chat";
$pgv_lang["users_logged_in"]	= "Online brugere";
$pgv_lang["anon_user"]				= "1 anonym bruger";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# anonyme brugere";
$pgv_lang["login_user"]				= "1 bruger logget ind";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# brugere logget ind";
$pgv_lang["no_login_users"]			= "Ingen logget ind og ingen anonyme brugere";
$pgv_lang["message"]			= "Send besked";
$pgv_lang["my_messages"]		= "Mine Beskeder";
$pgv_lang["date_created"]		= "Dato sendt:";
$pgv_lang["message_from"]		= "E-mail-adresse:";
$pgv_lang["message_from_name"]	= "Dit navn:";
$pgv_lang["message_to"]			= "Besked til:";
$pgv_lang["message_subject"]	= "Emne:";
$pgv_lang["message_body"]		= "Din besked:";
$pgv_lang["no_to_user"]			= "Skriv hvilken bruger, beskeden er til.";
$pgv_lang["provide_email"]		= "Opgiv venligst din e-mail-adresse, så vi kan besvare dit brev.<br />Hvis du ikke opgiver din e-mail-adresse, har vi ikke mulighed for at komme i kontakt med dig.<br />PS. Din e-mail-adresse vil ikke blive brugt til andet end at besvare denne forespørgsel.";
$pgv_lang["reply"]				= "Svar";
$pgv_lang["message_deleted"]	= "Besked slettet";
$pgv_lang["message_sent"]		= "Besked sendt til #TO_USER#";
$pgv_lang["reset"]				= "Nulstil";
$pgv_lang["site_default"]		= "Standard på hjemmesiden";
$pgv_lang["mygedview_desc"]		= "Dette er <em>Mine Sider</em>, hvor du kan vælge egne <em>favoritter</em>, få en påmindelse om <em>begivenheder</em> og <em>samarbejde med andre brugere</em>.";
$pgv_lang["no_messages"]		= "Der er ingen bye beskeder til dig.";
$pgv_lang["clicking_ok"]		= "Ved at klikke på OK, åbnes der et nyt vindue, hvor du kan kontakte #user[fullname]#";
$pgv_lang["favorites"]				= "Favoritter";
$pgv_lang["my_favorites"]		= "Mine Favoritter";
$pgv_lang["no_favorites"]		= "Du har ikke valgt nogle favoritter endnu!<br /><br />Du kan nedenfor tilføje en person, en familie eller en kilde til dine favoritter ved enten søge efter eller skrive et ID-nummer. Du kan også henvise til en anden hjemmeside med data ved at skrive den fuldstændige internetadresse (URL) sammen med en husketitel. <BR /> Endelig kan du på alle personsider med bruge funktionen i feltet Andet -> Tilføj til Mine Favoritter.";
$pgv_lang["add_to_my_favorites"] = "Tilføj til Mine Favoritter";
$pgv_lang["gedcom_favorites"]	 = "Favoritter i denne slægtsdatabase";
$pgv_lang["no_gedcom_favorites"] = "Der er ikke valgt nogle Favoritter endnu.  Det er administratoren som tilføjer personer her, således at disse vises ved opstart.";
$pgv_lang["confirm_fav_remove"]	= "Er du sikker på at du vil fjerne denne person fra din liste med favoritter?";
$pgv_lang["invalid_email"]		= "Indtast en gyldig e-mail-adresse.";
$pgv_lang["enter_subject"]		= "Indtast en tekst i emnefeltet.";
$pgv_lang["enter_body"]			= "Skriv en beskedtekst før den sendes.";
$pgv_lang["confirm_message_delete"]	= "Er du sikker på du vil slette denne besked? Når den er slettet, kan den ikke genskabes.";
$pgv_lang["message_email1"]		= "Følgende besked blev sendt til din brugerkonto fra ";
$pgv_lang["message_email2"]		= "Du sendte følgende besked til en anden bruger af hjemmesiden:";
$pgv_lang["message_email3"]		= "Du sendte følgende besked til administratoren af hjemmesiden:";
$pgv_lang["viewing_url"]		= "Denne besked blev sendt, da du var på følgende fuldstændige internetadresse (URL): ";
$pgv_lang["messaging2_help"]	= "Når du sender denne besked, vil du også modtage en kopi på den e-mail-adresse du har opgivet.";
$pgv_lang["random_picture"]		= "Tilfældigt udvalgt billede";
$pgv_lang["message_instructions"]	= "<b>Bemærk:</b> Privat information om levende personer vil kun blive givet til slægtninge og nære venner.  Det er påkrævet at du godtgør din tilknytning / slægtskab til personen, før du får adgang til at se private data.  Til tider vil information om døde personer også være private, hvis der ikke er fundet nok information om personen til at afgøre om vedkommende lever endnu.<br /><br />Før du sender eventuelle spørgsmål, så check venligst at det er den rigtige person du spørger om ved at se på datoer, steder og nære slægtninge.  Hvis du har adgang til at ændre i slægtsdataene, så oplys venligst hvilker kilder du har dataene fra.<br /><br />";
$pgv_lang["sending_to"]			= "Beskeden bliver sendt til #TO_USER#";
$pgv_lang["preferred_lang"]	 	= "Denne bruger foretrækker at få beskeder på #USERLANG# <br /><br />";
$pgv_lang["gedcom_created_using"]	= "Denne slægtsdatabase blev sidst opdateret ved hjælp af <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]	= "Slægtsdatabasen blev oprettet d.<b>#DATE#</b>.";
$pgv_lang["gedcom_created_on2"]	= ", den <b>#CREATED_DATE#</b>.";
$pgv_lang["gedcom_stats"]		= "Statistik for slægtsdatabasen";
$pgv_lang["stat_individuals"]	= "Individer";
$pgv_lang["stat_families"]		= "Familier";
$pgv_lang["stat_sources"]		= "Kilder";
$pgv_lang["stat_other"]			= "Andre poster";
$pgv_lang["stat_earliest_birth"] 	= "Tidligste fødselsår";
$pgv_lang["stat_latest_birth"] 	= "Seneste fødselsår";
$pgv_lang["stat_earliest_death"] 	= "Tidligste dødsår";
$pgv_lang["stat_latest_death"] 	= "Seneste dødsår";
$pgv_lang["customize_page"]		= "Tilpas <em>Mine Sider</em>";
$pgv_lang["customize_gedcom_page"]	= "Tilpas denne velkomstside";
$pgv_lang["upcoming_events_block"]	= "Begivenheder";
$pgv_lang["upcoming_events_descr"]	= "Rammen med Begivenheder viser årsdage, som falder inden for den nærmeste fremtid. Du kan indstille, hvor mange detaljer der skal vises, og administratoren kan indstille hvor langt ind i fremtiden, årsdage vil blive vist for.";
$pgv_lang["todays_events_block"]	= "I dag ...";
$pgv_lang["yahrzeit_block"]			= "Kommende Yahrzeiten";
$pgv_lang["yahrzeit_descr"]			= "Kommende Yahrzeiten blokken viser årsdagen for dødsdatoer der vil komme i den nærmeste fremtid. Du kan vælge den viste periode og administratoren kan vælge hvor langt ud i fremtiden blokken skal kigge.";
$pgv_lang["todays_events_descr"]	= "I dag ... viser årsdage som falder i dag. Du kan indstille hvor mange detaljer, der skal vises.";
$pgv_lang["todo_block"] = "&quot;To Do&quot; opgaver";
$pgv_lang["todo_nothing"]        = "Der er ingen &quot;Todo&quot; opgaver.";
$pgv_lang["todo_show_future"]    = "Vis fremtidige opgaver";
$pgv_lang["todo_show_unassigned"]= "Vis utilknyttede opgaver";
$pgv_lang["todo_show_other"]     = "Vis andre brugers opgaver";
$pgv_lang["todo_descr"] = "Todo blokken viser alle udestående _TODO fakta i databasen.";
$pgv_lang["logged_in_users_block"]	= "Online Brugere";
$pgv_lang["logged_in_users_descr"]	= "Online Brugere viser en liste over brugere, der er logget ind på hjemmesiden lige nu.";
$pgv_lang["user_messages_block"]	= "Brugerbeskeder";
$pgv_lang["user_messages_descr"]	= "Brugerbeskeder viser de beskeder, der er sendt til de aktive brugere.";
$pgv_lang["user_favorites_block"]	= "Brugeres Favoritter";
$pgv_lang["user_favorites_descr"]	= "Brugeres Favoritter viser en liste med deres egne favoritpersoner, så de let kan findes igen.";
$pgv_lang["welcome_block"]		= "Velkommen ...";
$pgv_lang["welcome_descr"]		= "Velkommen... viser dato og tid, hurtiglinks for ændring af egen konto eller til at gå til sit eget slægtstræ, og et link til at tilpasse Mine Sider.";
$pgv_lang["random_media_block"]	= "Tilfældig Udvalgt Billede";
$pgv_lang["random_media_descr"]	= "Rammen med Tilfælgit Udvalgt Billede viser et tilfældigt billede eller andet materiale fra slægtsdatabasen. Administratoren bestemmer om der kan vises materiale relateret til personer, til begivenheder eller til begge.";
$pgv_lang["random_media_persons_or_all"]	= "Vis materiale relateret til personer, begivenheder eller alt?";
$pgv_lang["random_media_persons"]	= "Personer";
$pgv_lang["random_media_events"]	= "Begivenheder";
$pgv_lang["gedcom_block"]		= "Velkommen til Slægtsdatabasen";
$pgv_lang["gedcom_descr"]		= "Velkommen til Slægtsdatabasen virker på samme måde som den enkelte brugers velkomsthilsen (Velkommen ...), idet den besøgende ønskes velkommen, og titlen på den slægtsdatabasen vises sammen med aktuel dato og tid.";
$pgv_lang["gedcom_favorites_block"]	= "Favoritter i Slægtsdatabasen";
$pgv_lang["gedcom_favorites_descr"]	= "Favoritter i Slægtsdatabasen giver administratoren af hjemmesiden mulighed for at udvælge nogle centrale personer i slægtsdatabasen. Personerne bliver dermed nemme at komme til at se detaljerne for, og bliver på den måde fremhævet som centrale i slægtshistorien.";
$pgv_lang["gedcom_stats_block"]	= "Statistik for Slægtsdatabasen";
$pgv_lang["gedcom_stats_descr"]	= "Statistik for Slægtsdatabasen viser en del grundlæggende information om slægtsfilen, såsom hvornår den blev oprettet, og hvor mange personer, familier, begivenheder og kilder der findes i den. Den har ydermere en liste med oftest forekommende efternavne.<br /><br /><br />Administratoren kan indstille om og hvor mange efternavne, der skal vises.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Vis oftest forekommende efternavne?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Du kan tilpasse siden ved at anbringe rammerne på siden, som du har lyst.<br /><br />Siden er inddelt i <b>Hovedsektionen</b> og <b>Højresektionen</b>.	<b>Hovedsektionens</b> rammer er større og vises under sidens titel.  <b>Højresektionen</b> begynder til højre for titlen og går ned i højre side.<br /><br />Hver sektion har sit eget indhold med rammer, der vil blive vist på siden i den rækkefølge de er vist i listen.  Du kan tilføje, fjerne og sætte rammerne i rækkefølge, som du har lyst.<br /><br />Når en af listerne er tom, vil den anden ramme optage hele bredden af siden.<br /><br />";
$pgv_lang["login_block"]		= "Log ind";
$pgv_lang["login_descr"]		= "I &quot;log ind&quot;-feltet kan brugere skrive deres brugernavn og kodeord for at få adgang til deres konto på siden.";
$pgv_lang["theme_select_block"]	= "Vælg Udseende";
$pgv_lang["theme_select_descr"]	= "Vælg Udseende rammen giver brugeren mulighed for at vælge sidens udseende, selv hvis denne funktion er slået fra af administratoren.";
$pgv_lang["block_top10_title"]	= "De 10 oftest forekommende efternavne";
$pgv_lang["block_top10"]		= "Top 10 efternavne";
$pgv_lang["block_top10_descr"]	= "Rammen viser en tabel med de 10 oftest forekommende efternavne i slægtsdatabasen. Det viste antal navne kan indstilles, og det kan vælges ikke at viste bestemte efternavne.";
$pgv_lang["block_givn_top10_title"]		= "Top 10 fornavne";
$pgv_lang["block_givn_top10"]			= "Top 10 efternavne";
$pgv_lang["block_givn_top10_descr"]		= "Denne blok viser en liste over de 10 oftest forekommende fornavne i databasen. Det reelle antal af viste fornavne i denne blok kan ændres.";
$pgv_lang["gedcom_news_block"]	= "Nyheder";
$pgv_lang["gedcom_news_descr"]	= "Nyhedsrammen viser besøgende sidste nyt eller artikler indlagt af en bruger med administratorrettigheder.<br />Rammen er et fint sted til at bekendtgøre opdateringer af slægtsdatabasen, en sammenkomst, en fødsel og meget mere....";
$pgv_lang["gedcom_news_limit"]		= "Begræns visning efter:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Ingen begrænsning";
$pgv_lang["gedcom_news_limit_date"]		= "Indlæggets alder";
$pgv_lang["gedcom_news_limit_count"]	= "Antal indlæg";
$pgv_lang["gedcom_news_flag"]		= "Grænse:";
$pgv_lang["gedcom_news_archive"] 	= "Vis nyhedsarkiv";
$pgv_lang["user_news_block"]	= "Notatblok";
$pgv_lang["user_news_descr"]	= "Notatblokken giver den enkelte bruger mulighed for at gøre notater eller anvende den som dagbog/logbog.";
$pgv_lang["my_journal"]			= "Min Notesblok";
$pgv_lang["no_journal"]			= "Du har ikke skrevet nogle notater endnu.";
$pgv_lang["confirm_journal_delete"]	= "Er du sikker på at du vil slette dette notat?";
$pgv_lang["add_journal"]		= "Tilføj nyt notat";
$pgv_lang["gedcom_news"]		= "Nyheder";
$pgv_lang["confirm_news_delete"]	= "Er du sikker på at du vil slette dette indlæg?";
$pgv_lang["add_news"]			= "Tilføj et nyhedsindlæg";
$pgv_lang["no_news"]			= "Der findes ingen nyhedsartikler endnu.";
$pgv_lang["edit_news"]			= "Tilføj/ændr notat- eller nyhedsindlæg";
$pgv_lang["enter_title"]		= "Anfør venligst en overskrift.";
$pgv_lang["enter_text"]			= "Tilføj venligst en tekst for dette nyheds- eller notatblok-indlæg.";
$pgv_lang["news_saved"]			= "Nyheds- / notablokindlæg er gemt...!";
$pgv_lang["article_text"]		= "Indsæt tekst:";
$pgv_lang["main_section"]		= "Hovedsektionens rammer";
$pgv_lang["right_section"]		= "Højresektionens rammer";
$pgv_lang["available_blocks"]		= "Mulige rammer";
$pgv_lang["move_up"]			= "Flyt op";
$pgv_lang["move_down"]			= "Flyt ned";
$pgv_lang["move_right"]			= "Flyt til højre";
$pgv_lang["move_left"]			= "Flyt til venstre";
$pgv_lang["broadcast_all"]		= "Send til alle brugere";
$pgv_lang["hit_count"]			= "Antal visninger:";
$pgv_lang["phpgedview_message"]	= "Besked";
$pgv_lang["common_surnames"]	= "Oftest forekommende efternavne";
$pgv_lang["default_news_title"]		= "Velkommen til disse slægtssider";
$pgv_lang["default_news_text"]		= "Information om slægten på denne hjemmeside bliver vist ved hjælp af <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a><br />Siderne giver dig et indblik og en oversigt over denne slægt.<br />Til at starte med, kan du for eksempel vælge Slægtstræer eller Slægtslister på menuen for oven, eller søge efter et navn eller et sted.<br /><br />Hvis der er noget, du ikke forstår på en af siderne, så se Hjælp i menuen, hvor der til enhver tid vil være information om brugen af denne side.<br /><br /><b><i>Tak fordi du besøger denne hjemmeside.</i></b>";
$pgv_lang["reset_default_blocks"]	= "Indstil til standard rammer";
$pgv_lang["recent_changes"]			= "Seneste Ændringer";
$pgv_lang["recent_changes_block"]	= "Seneste Ændringer";
$pgv_lang["recent_changes_descr"]	= "Rammen <i>Seneste Ændringer</i> viser en liste over alle de ændringer, der er udført i slægtsdatabasen indenfor den sidste måned.  Rammen kan hjælpe dig med  at holde dig opdateret med ændringer, der er foretaget.  ";
$pgv_lang["recent_changes_none"]	= "<b>Der er ingen ændringer sket i de sidste #pgv_lang[global_num1]# dage.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Ændringer foretaget indenfor de sidste #pgv_lang[global_num1]# dage</b><br />";
$pgv_lang["show_empty_block"]		= "Skal denne ramme skjules når den er tom?";
$pgv_lang["hide_block_warn"]		= "Hvis du skjuler en tom ramme, vil du ikke kunne ændre opsætningen af den før den bliver synlig igen (ved ikke længere at være tom).";
$pgv_lang["delete_selected_messages"]	= "Slet valgte beskeder";
$pgv_lang["use_blocks_for_default"]	= "Brug denne rammeopsætning som standard for alle brugere?";
$pgv_lang["block_not_configure"]	=	"Denne ramme kan ikke ændres.";
//-- validate GEDCOM
$pgv_lang["add_media_tool"]			= "Tilføj billeder og andre mediefiler";
//-- hourglass chart
$pgv_lang["hourglass_chart"]	= "Timeglasvisning";
//-- report engine
$pgv_lang["choose_report"]		= "Vælg en udskriftstype";
$pgv_lang["enter_report_values"]	= "Opsætning af udskrift";
$pgv_lang["selected_report"]	= "Valgt udskrift:";
// XXX HERTIL
$pgv_lang["select_report"]		= "Type";
$pgv_lang["download_report"]	= "Vis udskrift";
$pgv_lang["reports"]			= "Udskrifter";
$pgv_lang["pdf_reports"]		= "PDF udskrifter";
$pgv_lang["html_reports"]		= "HTML udskrifter";
//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Anetræsudskrift";
$pgv_lang["ahnentafel_header"]		= "Anetræsudskrift for ";
$pgv_lang["ahnentafel_generation"]	= "Generation ";
$pgv_lang["ahnentafel_pronoun_m"]	= "Han ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Hun ";
$pgv_lang["ahnentafel_born_m"]		= "blev født";
$pgv_lang["ahnentafel_born_f"]		= "blev født";
$pgv_lang["ahnentafel_christened_m"] = "blev døbt";
$pgv_lang["ahnentafel_christened_f"] = "blev døbt";
$pgv_lang["ahnentafel_married_m"]	= "blev gift med";
$pgv_lang["ahnentafel_married_f"]	= "blev gift med";
$pgv_lang["ahnentafel_married_post"]= "&nbsp;";
$pgv_lang["ahnentafel_died_m"]		= "døde";
$pgv_lang["ahnentafel_died_f"]		= "døde";
$pgv_lang["ahnentafel_buried_m"]	= "blev begravet";
$pgv_lang["ahnentafel_buried_f"]	= "blev begravet";
$pgv_lang["ahnentafel_place"]		= " i ";
$pgv_lang["ahnentafel_no_details"]	= " men detaljerne er ukendte";
$pgv_lang["ahnentafel_on"]			= " ";

//-- Descendency report
$pgv_lang["descendancy_header"]		= "Efterkommerudskrift for";
$pgv_lang["descend_report"]		= "Efterkommerudskrift";
$pgv_lang["son_of"]					= "søn af";
$pgv_lang["daughter_of"]			= "datter af";
$pgv_lang["child_of"]				= "Barn af ";
$pgv_lang["children_of"]			= "Børn af ";

$pgv_lang["family_group_report"]	= "Familiegruppeudskrift";
$pgv_lang["page"]				= "Side";
$pgv_lang["of"]					= "af";
$pgv_lang["enter_famid"]		= "Angiv Familie ID";
$pgv_lang["show_sources"]		= "Vis kilder?";
$pgv_lang["show_notes"]			= "Vis noter?";
$pgv_lang["show_basic"]			= "Vis de grundlæggende begivenheder<br />&nbsp;&nbsp;&nbsp;- selv om disse er tomme?";
$pgv_lang["show_photos"]		= "Vis billeder?";
$pgv_lang["relatives_report_ext"]	= "Udvidet udskrift over slægtninge";
$pgv_lang["with"]					= "med";
$pgv_lang["on"]						= "den";
$pgv_lang["in"]						= "i";
$pgv_lang["individual_report"]	= "Personudskrift";
$pgv_lang["enter_pid"]			= "Angiv Person ID&nbsp;";
$pgv_lang["generated_by"]		= "Genereret af";
$pgv_lang["list_children"]		= "List børn sorteret efter alder";
$pgv_lang["birth_report"]		= "Fødselsdato og -stedudskrift";
$pgv_lang["birthplace"]			= "Fødested indeholder";
$pgv_lang["birthdate1"]			= "Fødselsdato interval start";
$pgv_lang["birthdate2"]			= "Fødselsdato interval slut";
$pgv_lang["death_report"]			= "Udskrift over dødsdato og -sted";
$pgv_lang["deathplace"]				= "Dødsstedet indeholder";
$pgv_lang["deathdate1"]				= "Dødsdato interval start";
$pgv_lang["deathdate2"]				= "Dødsdato interval slut";
$pgv_lang["marr_report"]			= "Udskrift over ægteskabsdato og sted";
$pgv_lang["marrplace"]				= "Ægteskabssted indeholder";
$pgv_lang["marrdate1"]				= "Ægteskabsdato interval start";
$pgv_lang["marrdate2"]				= "Ægteskabsdato interval slut";
$pgv_lang["sort_by"]			= "Sorteret efter";
$pgv_lang["cleanup"]			= "Ryd op";
//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["dynasty_list"]		= "Liste over familier";
$pgv_lang["patriarch_list"]		= "Stamfædreliste";
$pgv_lang["statistics"]			= "Statistik";
//-- Merge Records
$pgv_lang["merge_same"]			= "Posterne er ikke af samme type.  Kan ikke flette poster som er af forskellig type!";
$pgv_lang["merge_step1"]		= "Fletning trin 1 af 3";
$pgv_lang["merge_step2"]		= "Fletning trin 2 af 3";
$pgv_lang["merge_step3"]		= "Fletning trin 3 af 3";
$pgv_lang["select_gedcom_records"]	= "Vælg 2 database-poster, som skal flettes.  Posterne skal være af samme type.";
$pgv_lang["merge_to"]			= "Flet til ID:";
$pgv_lang["merge_from"]			= "Flet fra ID:";
$pgv_lang["merge_facts_same"]	= "Følgende oplysninger er nøjagtig ens i begge poster og vil blive flettet automatisk";
$pgv_lang["no_matches_found"]	= "Fandt ingen ens oplysninger";
$pgv_lang["unmatching_facts"]	= "Følgende faktafelter har forskelligt indhold.  Vælg de oplysninger du ønsker at beholde.";
$pgv_lang["record"]				= "Post";
$pgv_lang["adding"]				= "Tilføjer";
$pgv_lang["updating_linked"]	= "Opdaterer poster som er knyttet til denne";
$pgv_lang["merge_more"]			= "Flette flere poster.";
$pgv_lang["same_ids"]			= "Du opgav to ens ID numre.  Du kan ikke flette en post med sig selv.";
//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"]		= "Stamtræ";
$pgv_lang["gen_ancestry_chart"]	= "Forfædre - #PEDIGREE_GENERATIONS# slægtsled";
$pgv_lang["chart_style"]		= "Udformning";
$pgv_lang["chart_booklet"]   	= "Hæfte";
$pgv_lang["chart_list"]			= "Liste";
$pgv_lang["show_cousins"]		= "Vis fætre og kusiner";
// 1st generation
$pgv_lang["sosa_2"] 				= "Far";
$pgv_lang["sosa_3"] 				= "Mor";
// 2nd generation
$pgv_lang["sosa_4"] 				= "Farfar";
$pgv_lang["sosa_5"] 				= "Farmor";
$pgv_lang["sosa_6"] 				= "Morfar";
$pgv_lang["sosa_7"] 				= "Mormor";
// 3rd generation
$pgv_lang["sosa_8"] 				= "Oldefar";
$pgv_lang["sosa_9"] 				= "Oldemor";
$pgv_lang["sosa_10"]				= "Oldefar";
$pgv_lang["sosa_11"]				= "Oldemor";
$pgv_lang["sosa_12"]				= "Oldefar";
$pgv_lang["sosa_13"]				= "Oldemor";
$pgv_lang["sosa_14"]				= "Oldefar";
$pgv_lang["sosa_15"]				= "Oldemor";
// 4th generation
$pgv_lang["sosa_16"]				= "Tip-oldefar";
$pgv_lang["sosa_17"]				= "Tip-oldemor";
$pgv_lang["sosa_18"]				= "Tip-oldefar";
$pgv_lang["sosa_19"]				= "Tip-oldemor";
$pgv_lang["sosa_20"]				= "Tip-oldefar";
$pgv_lang["sosa_21"]				= "Tip-oldemor";
$pgv_lang["sosa_22"]				= "Tip-oldefar";
$pgv_lang["sosa_23"]				= "Tip-oldemor";
$pgv_lang["sosa_24"]				= "Tip-oldefar";
$pgv_lang["sosa_25"]				= "Tip-oldemor";
$pgv_lang["sosa_26"]				= "Tip-oldefar";
$pgv_lang["sosa_27"]				= "Tip-oldemor";
$pgv_lang["sosa_28"]				= "Tip-oldefar";
$pgv_lang["sosa_29"]				= "Tip-oldemor";
$pgv_lang["sosa_30"]				= "Tip-oldefar";
$pgv_lang["sosa_31"]				= "Tip-oldemor";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x tip oldefar";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x tip oldemor";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x tip oldefar";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x tip oldemor";

//-- FAN CHART
$pgv_lang["compact_chart"]			= "Kompakt anetræ";
$pgv_lang["fan_chart"]			= "Anehjul";
$pgv_lang["gen_fan_chart"]		= "Anehjul - #PEDIGREE_GENERATIONS# slægtsled";
$pgv_lang["fan_width"]			= "Hjulbredde";
$pgv_lang["gd_library"]			= "Ugyldig konfiguration af PHP server: Programpakken GD 2.x er nødvendig for at benytte billedfunktionen.";
$pgv_lang["gd_freetype"]		= "Ugyldig konfiguration af PHP server: Programpakken Freetype er nødvendig for TrueType skrifttyper.";
$pgv_lang["gd_helplink"]		= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]		= "Fandt ikke nødvendige filer med skrifttyper på serveren";
$pgv_lang["fanchart_IE"]		= "Dette anehjul kan ikke skrives direkte ud fra din browser. Højreklik på billedet og vælg så Gem billede. Så skal du åbne billedet i et andet program for så at printe det ud derfra.";
//-- RSS Feed
$pgv_lang["rss_descr"]			= "Nyheder og links fra hjemmesiden #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]		= "Beskrivelsen er lavet af PhpGedView #VERSION#";
$pgv_lang["rss_feeds"]			= "RSS links";
$pgv_lang["no_feed_title"]			= "Feed er ikke tilgængligt";
$pgv_lang["no_feed"]				= "Der er ikke nogen RSS feeds tilgængelig for denne hjemmeside";
$pgv_lang["feed_login"]				= "Hvis du har en konto på denne hjemmeside, kan du <a href=\"#AUTH_URL#\">logge ind</a> på serveren for at se private oplysninger.";
$pgv_lang["authenticated_feed"]		= "Godkendt feed";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] 			= "Deltagere";
$pgv_lang["attending"] 			= "Observatør";
$pgv_lang["best_man"] = "Forlover";
$pgv_lang["bridesmaid"] = "Brudepige";
$pgv_lang["buyer"] = "Køber";
$pgv_lang["circumciser"]		= "Omskærer";
$pgv_lang["civil_registrar"] 	= "Giftefoged";
$pgv_lang["friend"] 			= "Ven";
$pgv_lang["godfather"] 			= "Gudfar";
$pgv_lang["godmother"] 			= "Gudmor";
$pgv_lang["godparent"] 			= "Gudforældre";
$pgv_lang["informant"] 			= "Hjemmelsmand";
$pgv_lang["lodger"] 			= "Lejer";
$pgv_lang["nurse"] 				= "Sygeplejerske";
$pgv_lang["priest"]				= "Præst";
$pgv_lang["rabbi"] 				= "Rabbiner";
$pgv_lang["registry_officer"] 	= "Registerfører";
$pgv_lang["seller"] = "Sælger";
$pgv_lang["servant"] 			= "Tjener";
$pgv_lang["twin"] 				= "Tvilling";
$pgv_lang["twin_brother"] 		= "Tvillingebror";
$pgv_lang["twin_sister"] 		= "Tvillingesøster";
$pgv_lang["witness"] 			= "Vidne";
//-- statistics utility
$pgv_lang["statutci"]			= "Kunne ikke oprette indeks";
$pgv_lang["statnnames"]         = "antal navne     =";
$pgv_lang["statnfam"]           = "antal familier =";
$pgv_lang["statnmale"]          = "antal mænd     =";
$pgv_lang["statnfemale"]        = "antal kvinder  =";
$pgv_lang["statvars"]			= "Udfyld følgende variabler til diagrammet";
$pgv_lang["statlxa"]			= "langs x-aksen:";
$pgv_lang["statlya"]			= "langs y-aksen:";
$pgv_lang["statlza"]			= "langs z-aksen";
$pgv_lang["stat_10_none"]		= "ingen";
$pgv_lang["stat_11_mb"]			= "Fødselsmåned";
$pgv_lang["stat_12_md"]			= "Dødsmåned";
$pgv_lang["stat_13_mm"]			= "Ægteskabsmåned";
$pgv_lang["stat_14_mb1"]		= "Fødselsmåned for førstefødte i familie";
$pgv_lang["stat_15_mm1"]		= "Måned for første ægteskab";
$pgv_lang["stat_16_mmb"]		= "Måneder mellem ægteskab og første barn.";
$pgv_lang["stat_17_arb"]		= "alder i forhold til fødselsår.";
$pgv_lang["stat_18_ard"]		= "alder i forhold til dødsår.";
$pgv_lang["stat_19_arm"]		= "alder i forhold til vielsesår.";
$pgv_lang["stat_20_arm1"]		= "alder ved første ægteskab.";
$pgv_lang["stat_21_nok"]		= "antal børn.";
$pgv_lang["stat_200_none"]		= "alle (eller tom)";
$pgv_lang["stat_201_num"]		= "antal";
$pgv_lang["stat_202_perc"]		= "procent";
$pgv_lang["stat_300_none"]		= "ingen";
$pgv_lang["stat_301_mf"]		= "mand/kvinde";
$pgv_lang["stat_302_cgp"]		= "perioder. Check akse-værdier (z-akse)";
$pgv_lang["statmess1"]			= "<b>Udfyld kun næste rækker for tidligere værdier for x-akse eller z-akse</b>";
$pgv_lang["statar_xgp"]			= "akse-værdier for perioder (x-akse):";
$pgv_lang["statar_xgl"]			= "akse-værdier for alder    (x-akse):";
$pgv_lang["statar_xgm"]			= "akse-værdier for måned    (x-akse):";
$pgv_lang["statar_xga"]			= "akse-værdier for antal   (x-akse):";
$pgv_lang["statar_zgp"]			= "akse-værdier for perioder (z-akse):";
$pgv_lang["statreset"]			= "Nulstil";
$pgv_lang["statsubmit"]			= "Vis diagram";
//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistikplot";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplGDno"]			= "Grafisk programpakke (GD) er ikke tilgængelig i PHP 4. Kontakt venligst administratoren for din hjemmesideserver";
$pgv_lang["stpljpgraphno"]		= "JPgraph moduler findes ikke i mappen <i>phpgedview/jpgraph/</i>.  Hent dem venligst hos http://www.aditus.nu/jpgraph/jpdownload.php<br> <h3>Installer først JPgraph i mappen <i>phpgedview/jpgraph/</i></h3><br>";
$pgv_lang["stplinfo"]			= "diagraminformation:";
$pgv_lang["stpltype"]			= "type:";
$pgv_lang["stplnoim"]			= " ikke tilgængelig:";
$pgv_lang["stplmf"]			 	= " / mand-kvinde";
$pgv_lang["stplipot"]			= " / pr. tidsenhed";
$pgv_lang["stplgzas"]			= "grænser på z-akse:";
$pgv_lang["stplmonth"]			= "måned";
$pgv_lang["stplnumbers"]		= "antal for en familie";
$pgv_lang["stplage"]			= "alder";
$pgv_lang["stplperc"]			= "procent";
$pgv_lang["stplnumof"]			 = "Antal ";
$pgv_lang["stplmarrbirth"]		 = "Måneder mellem ægteskab og første barns fødsel";

//-- alive in year
$pgv_lang["alive_in_year"]		= "I live i år";
$pgv_lang["is_alive_in"]	   	= "Er i live i #YEAR#";
$pgv_lang["alive"]			     	= "Levende ";
$pgv_lang["dead"]			      	= "Død ";
$pgv_lang["maybe"]			     	= "Måske ";
$pgv_lang["both_alive"]					= "Begge i live ";
$pgv_lang["both_dead"]					= "Begge døde ";

//-- Help system
$pgv_lang["definitions"]			= "Definitioner";
//-- Index_edit
$pgv_lang["block_desc"]				= "Beskrivelse af rammer";
$pgv_lang["click_here"]				= "Klik her for at fortsætte";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Klik på denne knap for at gemme dine ændringer.<br /><br />Du vil blive sendt tilbage til en af siderne:<b>#pgv_lang[welcome]# eller #pgv_lang[mygedview]#</b>, men dine ændringer bliver muligvis ikke vist.  Du skal muligvis klikke på din browsers opdateringsknap (Reload/Refresh) for at se ændringerne.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Her gives en kort beskrivelse af hver af de rammer du kan placere på #pgv_lang[welcome]# eller #pgv_lang[mygedview]# siden.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]	= "&nbsp;";
//-- Find page
$pgv_lang["total_places"]			= "Steder fundet";
$pgv_lang["media_contains"]			= "Medie indehold:";
$pgv_lang["repo_contains"]			= "Opbevaringssteder indeholder:";
$pgv_lang["source_contains"]		= "Kilder indholder:";
$pgv_lang["display_all"]			= "Vis alle";
$pgv_lang["add_faq_visibility"] = "FAQ synlighed";
// FAQ Page
$pgv_lang["add_faq_header"] = "FAQ-hoved";
$pgv_lang["add_faq_body"] = "FAQ-indhold";
$pgv_lang["add_faq_order"] = "FAQ-placering";
$pgv_lang["no_faq_items"] = "FAQ-listen er tom.";
$pgv_lang["position_item"] = "Placer punkt";
$pgv_lang["hs_searchmodules"]	= "Moduler hjælp";
$pgv_lang["faq_list"] = "FAQ-liste";
$pgv_lang["confirm_faq_delete"] = "Er du sikker på at du vil slette dette FAQ emne";
$pgv_lang["preview"] =  "Vis";
$pgv_lang["no_id"] = "Der er ikke angivet nogen FAQ ID !";
// Help search
$pgv_lang["hs_title"] 			= "Søg hjælpetekst";
$pgv_lang["hs_search"] 			= "Søg";
$pgv_lang["hs_close"] 			= "Luk vindue";
$pgv_lang["hs_results"] 		= "Fundne resultater:";
$pgv_lang["hs_keyword"] 		= "Søg efter";
$pgv_lang["hs_searchin"]		= "Søg i";
$pgv_lang["hs_searchuser"]		= "Brugerhjælp";
$pgv_lang["hs_searchconfig"]	= "Administratorhjælp";
$pgv_lang["hs_searchhow"]		= "Søgningstype";
$pgv_lang["hs_searchall"]		= "Alle ord";
$pgv_lang["hs_searchany"]		= "Vilkårligt ord";
$pgv_lang["hs_searchsentence"]	= "Nøjagtig udtryk";
$pgv_lang["hs_intruehelp"]		= "Kun hjælpetekst";
$pgv_lang["hs_inallhelp"]		= "Al tekst";
// Media import
$pgv_lang["choose"] = "Vælg: ";
$pgv_lang["account_information"] = "Kontooplysning";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] = "Lyd";
$pgv_lang["TYPE__book"] = "Bog";
$pgv_lang["TYPE__card"] = "Kort";
$pgv_lang["TYPE__certificate"] = "Certifikat";
$pgv_lang["TYPE__document"] = "Dokument";
$pgv_lang["TYPE__electronic"] = "Elektronisk";
$pgv_lang["TYPE__fiche"] = "Microfiche";
$pgv_lang["media_privacy"]			= "Privatlivs begrænsninger forhindrer dig i at se dette emne";
$pgv_lang["TYPE__film"] = "Microfilm";
$pgv_lang["TYPE__magazine"] = "Magasin";
$pgv_lang["TYPE__manuscript"] = "Manuskript";
$pgv_lang["TYPE__map"] = "Kort";
$pgv_lang["unknown_mime"]			= "Media Firewall Fejl: >Unknown Mimetype< til file";
$pgv_lang["TYPE__newspaper"] = "Avis";
$pgv_lang["media_broken"]			= "Mediefilen er i stykker og kan ikke vandmærkes";
$pgv_lang["TYPE__photo"] = "Foto";
$pgv_lang["TYPE__tombstone"] = "Gravsten";
$pgv_lang["TYPE__video"] = "Video";
$pgv_lang["TYPE__painting"] = "Malleri";
$pgv_lang["TYPE__other"] = "Andet";
$pgv_lang["view_slideshow"] = "Se som lysbilledshow";

//-- Other media stuff
$pgv_lang["download_image"]			= "Hent filen";
$pgv_lang["no_media"]				= "Ingen medier fundet";
$pgv_lang["relations_heading"]		= "Billedet relatere til:";
$pgv_lang["module_error_unknown_type"] = "Ukendt modultype.";
$pgv_lang["module_error_unknown_action_v2"] = "Ukendt handling: [Handling].";
$pgv_lang["file_size"]				= "Filstørrelse";
$pgv_lang["img_size"]				= "Billedstørrelse";

//-- Modules
$pgv_lang["button_DEAT_N"] = "Vis personer som er i live eller par hvor begge partnere er i live.";
$pgv_lang["button_reset"] = "Nultil til listens standardindstillinger.";
$pgv_lang["button_MARR_U"] = "Vis par med en ukendt bryllupsdato.";
$pgv_lang["button_MARR_YES"] = "Vis par som blev gift for mere end 100 år siden.";
$pgv_lang["button_MARR_Y100"] = "Vis par som er blevet gift inden for de sidst 100 år.";
$pgv_lang["button_MARR_DIV"] = "Vis skilte par.";
$pgv_lang["button_DEAT_YES"] = "Vis personer som døde for mere end 100 år siden.";
$pgv_lang["button_DEAT_Y100"] = "Vis personer som er døde inden for de sidste 100 år.";
$pgv_lang["button_DEAT_Y"] = "Vis personer der er døde eller par hvor begge partnere er døde.";
$pgv_lang["button_DEAT_W"] = "Vis par hvor kun den kvindelige partner er død.";
$pgv_lang["button_DEAT_H"] = "Vis par hvor kun den mandlige partner er død.";
$pgv_lang["button_BIRT_YES"] = "Vis personer der er født for mere end 100 år siden.";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "Vis personer i live i det valgte år.";
$pgv_lang["button_BIRT_Y100"] = "Vis personer født inden for de sidste 100 år.";
$pgv_lang["button_TREE_L"] = "Vis «blade» par eller personer. Dette er personer der er i live, men som ikke har nogen børn der er registreret i databasen.";
$pgv_lang["button_TREE_R"] = "Vis «Rod» par eller personer. Disse personer kan også kaldes «patriarker». Det er personer der ikke har nogen forældre registreret i databasen.";
$pgv_lang["button_SEX_F"] = "Vis kun kvinder.";
$pgv_lang["button_SEX_M"] = "Vis kun mænd.";
$pgv_lang["button_SEX_U"] = "Vis kun personer med ukendt køn.";
$pgv_lang["invalid_search_input"] 	= "Skriv også et fornavn, efternavn eller sted sammen med årstallet";
$pgv_lang["duplicate_username"] 	= "Brugernavnet eksisterer allerede. Vælg venligst et andet brugernavn.";
$pgv_lang["cache_life"]				= "Levetid for midlertidige (cache) filer";
$pgv_lang["sort_column"] = "Sortér efter denne kolonne.";
$pgv_lang["search_place_word"]		= "Kun hele ord";
$pgv_lang["switch_lifespan"]		= "Vis livsforløb diagram";
$pgv_lang["switch_timeline"]		= "Vis tidslinjegraf";
$pgv_lang["differences"]			= "Forskelligheder";
$pgv_lang["changedate2"]			= "Startområde for ændringsdatoer";
$pgv_lang["changedate1"]			= "Slutområde for ændringsdatoer";
$pgv_lang["charts_block"]			= "Diagramblok";
$pgv_lang["charts_block_descr"]		= "Denne chart blok tillader dig at placer en chart på velkomst eller myGedview portal siden. Du kan konfigure bloken til at vise efterkommende, forfæder eller timeglas visning. Du kan også vælge rod person for chart.";
$pgv_lang["charts_click_box"]		= "Tryk på hvilket som helst boks for at få mere information omkring den person.";
$pgv_lang["chart_type"]				= "Diagramtype";
$pgv_lang["changes_report"]			= "Ændringsrapport";
$pgv_lang["changes_accepted_tot"]	= "Total antal ændringer lavet:";
$pgv_lang["changes_pending_tot"]	= "Total antal ændringer der venter:";
$pgv_lang["changes_accepted_tot"]	= "Total Accepteret ændringer";
$pgv_lang["multi_site_search"] 		= "Flersteds søgning";
$pgv_lang["age_differences"]		= "Vis aldersforskel";
$pgv_lang["tree"]					= "Træ";
$pgv_lang["ellipsis"]				= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]			= "Vis ukendt køn";
$pgv_lang["count"]					= "Optælling";
$pgv_lang["load_full_tree"]			= "Vis dette træ i helside interaktivt træ";
$pgv_lang["hide_show_spouses"]		= "Vis eller skjul flere ægtefæller";
$pgv_lang["interactive_tree"]		= "Interaktivt træ";
$pgv_lang["example"]				= "Eksempel:";
$pgv_lang["first_letter_name"]		= "Vælg et bogstav for at vise familier, hvis navn starter med det bogstav.";
$pgv_lang["first_letter_iname"]		= "Vælg et bogstav for at vise individer, hvis efternavn starter med det bogstav.";
$pgv_lang["apply_filter"]			= "Anvend filter";
$pgv_lang["husb_age"]				= "Ægtemands alder";
$pgv_lang["wife_age"]				= "Hustrus alder";
$pgv_lang["at_death_day"]      		= "på dødsdagen";
$pgv_lang["view_fam_nav_details"]	= "Vis detaljer for ...";
$pgv_lang["godson"]		= "Gudsøn";
$pgv_lang["goddaughter"] = "Guddatter";
$pgv_lang["godchild"]	= "Gudbarn";
$pgv_lang["m_cousin_in_law"]		= "Cousin-in-law";
$pgv_lang["m_cousin_in_law"]		= "Svigerfætter";
$pgv_lang["f_cousin_in_law"]		= "Svigerkusine";
?>
