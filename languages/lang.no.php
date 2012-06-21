<?php
/**
 * Norwegian texts
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
 * # $Id: lang.no.php 6989 2010-11-09 03:26:25Z canajun2eh $
 *
 * @translator Geir Håkon Eikland
 * @translator Thomas Rindal
 * @package PhpGedView
 * @subpackage Languages
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["exact"]				= "lik";
$pgv_lang["begins_with"]		= "begynner med";
$pgv_lang["contains"]			= "inneholder";
$pgv_lang["sounds_like"]		= "høres ut som";
$pgv_lang["advanced_search"] 	= "Avansert søk";
$pgv_lang["more_fields"]		= "Legg til flere felter";
$pgv_lang["install_step_8"] 		= "Kom i gang";
$pgv_lang["parent_family"]			= "Foreldrenes familie";
$pgv_lang["step_parent_family"]		= "Ste-foreldres familie";
$pgv_lang["immediate_family"]		= "Nærmeste familie";

$pgv_lang["load_full_tree"]			= "Se dette treet i et helsides interaktivt tre";
$pgv_lang["hide_show_spouses"]		= "Vis eller skjul flere ektefeller";
$pgv_lang["interactive_tree"]		= "Interaktivt tre";
$pgv_lang["example"]				= "Eksempel:";
$pgv_lang["tree"]					= "Interaktivt tre";
$pgv_lang["ellipsis"]				= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]			= "Vis ukjent kjønn";
$pgv_lang["count"]					= "Antall";
$pgv_lang["age_differences"]		="Vis aldersforskjeller";
$pgv_lang["date_of_entry"]			= "Angitt dato i originalkilde";
$pgv_lang["multi_site_search"] 		= "Søk på flere nettsteder";
$pgv_lang["switch_lifespan"]		="Vis livslinjediagram";
$pgv_lang["switch_timeline"]		="Vis tidslinjediagram";
$pgv_lang["differences"]			="Forskjeller";
$pgv_lang["charts_block"]			="Diagramblokken";
$pgv_lang["charts_block_descr"]		="Med Diagramblokken kan du plassere et diagram på velkomstsiden eller MyGedView-siden Du kan konfigurere blokken til å vise et anediagram, etterkommerdiagram eller timeglassvisning.  Du kan også bestemme rotpersonen til diagrammet.";
$pgv_lang["charts_click_box"]		= "Klikk en av boksene for å se mer informasjon om personen.";
$pgv_lang["chart_type"]				="Diagramtype";
$pgv_lang["changedate1"]			="Siste endringsdato";
$pgv_lang["changedate2"]			="Første endringsdato";
$pgv_lang["search_place_word"]		="Kun hele ord";
$pgv_lang["invalid_search_input"]	="Vennligs oppgi et fornavn, etternavn og et sted i tillegg til årstall";
$pgv_lang["duplicate_username"]		="Brukernavnet er allerede brukt. Velg et annet brukernavn";
$pgv_lang["cache_life"]				="Varighet for hurtigminne-fila";
$pgv_lang["genealogy"]				="Slektsforskning";
$pgv_lang["activate"]				="Aktiver";
$pgv_lang["deactivate"]				="Deaktiver";
$pgv_lang["play"]					="Start avspilling";
$pgv_lang["stop"]					="Stopp avspilling";
$pgv_lang["random_media_start_slide"]	="Start lysbildevisning ved lasting av side?";
$pgv_lang["random_media_ajax_controls"]	="Vis lysbildekontroller?";
$pgv_lang["description"]		= "Beskrivelse";
$pgv_lang["current_dir"]		= "Nåværende mappe: ";
$pgv_lang["SHOW_ID_NUMBERS"]		="Vis ID-nummer ved siden av navn?";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	="Vis hovedbilde ved siden av personnavn i diagrammet?";
$pgv_lang["view_img_details"]		="Se bildedetaljer";
$pgv_lang["server_folder"]				= "Mappenavn på server";
$pgv_lang["medialist_recursive"]	= "List opp filer i undemapper";
$pgv_lang["media_options"]			="Valg for media";
$pgv_lang["confirm_password"]		= "Du må bekrefte passordet.";
$pgv_lang["enter_email"]		= "Du må oppgi en epost-adresse.";
$pgv_lang["enter_fullname"]			= "Du må oppgi et fullt navn.";
$pgv_lang["name"]				= "Navn";
$pgv_lang["children"]			= "Barn";
$pgv_lang["child"]				= "Barn";
$pgv_lang["family"]					="Familie";
$pgv_lang["as_child"]			= "Familie med foreldre";
$pgv_lang["source_menu"]			= "Valg for kilde";
$pgv_lang["repo_menu"]			= "Valg for oppbevaringssted";
$pgv_lang["other_records"]		= "Navn som er knyttet til denne kilden:";
$pgv_lang["other_repo_records"]		= "Kilder som er knyttet til dette oppbevaringsstedet:";
$pgv_lang["repo_info"]				= "Informasjon om oppbevaringssted";
$pgv_lang["enter_terms"]			= "Skriv inn søkeord";
$pgv_lang["search_asso_label"]		= "Vise i tillegg";
$pgv_lang["search_asso_text"]		= "Beslektede personer / familier";
$pgv_lang["search_DM"]				= "Daitch-Mokotoff";
$pgv_lang["search_fams"]			= "familier";
$pgv_lang["search_gedcom"]			= "Søke i slektsfilen";
$pgv_lang["search_geds"]			= "Slektsbase det skal søkes i";
$pgv_lang["search_indis"]			= "personer";
$pgv_lang["search_inrecs"]			= "Søk etter";
$pgv_lang["search_prtall"]			= "Alle navn";
$pgv_lang["search_prthit"]			= "Navn med antall treff";
$pgv_lang["results_per_page"]		="Resultater pr side";
$pgv_lang["firstname_search"]		= "Fornavn";
$pgv_lang["search_prtnames"]		= "Vise";
$pgv_lang["other_searches"]				= "Andre søk";
$pgv_lang["add_to_cart"]		= "Legg i utklippsmappen";
$pgv_lang["view_gedcom"]		= "Vis opplysningene i slektsfilen";
$pgv_lang["welcome"]				= "Velkommen";
$pgv_lang["son"]					= "Sønn";
$pgv_lang["daughter"]				= "Datter";
$pgv_lang["welcome_page"]		= "Hovedside";
$pgv_lang["editowndata"]		= "Min konto";
$pgv_lang["user_admin"]				= "Brukere og rettigheter";
$pgv_lang["manage_media"]		= "Behandling av bilder";
$pgv_lang["search_general"]			= "Generelt søk";
$pgv_lang["clipping_privacy"]		="Noen objekter kunne ikke legges til pga personvernrestriksjoner";
$pgv_lang["chart_new"]				="Familietrediagram";
$pgv_lang["loading"]				="Laster...";
$pgv_lang["clear_chart"]			="Nullstill diagram";
$pgv_lang["file_information"]		= "Fil-informasjon";
$pgv_lang["choose_file_type"]		= "Velg filtype";
$pgv_lang["add_individual_by_id"]	= "Legg til person ved hjelp av ID";
$pgv_lang["advanced_options"]		= "Avanserte valg";
$pgv_lang["zip_files"]				= "Zip-fil(er)";
$pgv_lang["include_media"]			= "Inkluder media (automatisk zip-er filer)";
$pgv_lang["roman_surn"]				= "Romanisert etternavn";
$pgv_lang["roman_givn"]				= "Romanisert fornavn";
$pgv_lang["include"]				= "Inkluder:";
$pgv_lang["page_x_of_y"]			= "Side #GLOBALS[currentPage]# av #GLOBALS[lastPage]#";
$pgv_lang["options"]				= "Valg:";
$pgv_lang["config_update_ok"]		= "Oppdatering av konfigurasjonsfilen er utført.";
$pgv_lang["page_size"]					= "Sidestørrelse";
$pgv_lang["record_not_found"]			= "Fant ikke den ønskede slektbase-oppføringen. Det kan ha sin årsak i en kobling til en ugyldig person eller en ødelagt slektsfil (ged).";
$pgv_lang["result_page"]				= "Resultatside";
$pgv_lang["edit_media"]					= "Rediger mediaobjekt";
$pgv_lang["wiki_main_page"]				= "Wiki hovedside";
$pgv_lang["wiki_users_guide"]			= "Wiki brukerveiledning";
$pgv_lang["wiki_admin_guide"]			= "Wiki administrator-veiledning";
$pgv_lang["no_search_for"]				= "Husk å velge en katagori å søke etter.";
$pgv_lang["no_search_site"]				= "Husk å velge minst et eksternt nettsted.";
$pgv_lang["search_sites"] 				= "Søk på nettsteder";
$pgv_lang["site_list"]				= "Nettsteder: ";
$pgv_lang["site_had"]				= " inneholder følgende";
$pgv_lang["label_search_engine_detected"]  = "Oppdagede søkemaskinspioner";

$pgv_lang["ex-spouse"] 				= "Eks-ektefelle";
$pgv_lang["ex-wife"] 				= "Eks-hustru";
$pgv_lang["ex-husband"] 			= "Eks-ektemann";
$pgv_lang["noemail"] 				= "Adresser uten epost";
$pgv_lang["onlyemail"] 				= "Bare adresser med epost";
$pgv_lang["maxviews_exceeded"]		= "Du har ikke tilgang til å se flere sider. - Prøv igjen senere.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Send beskjed til brukere som ikke har logget seg inn siste 6 måneder";
$pgv_lang["broadcast_never_logged_in"]	= "Send beskjed til brukere som aldri har logget seg inn";
$pgv_lang["stats_to_show"]			= "Velg statistikk som skal vises i denne rammen";
$pgv_lang["stat_avg_age_at_death"]	= "Gjennomsnittsalder ved død";
$pgv_lang["stat_longest_life"]		= "Person som har levd lengst";
$pgv_lang["stat_most_children"]		= "Familie med flest barn";
$pgv_lang["stat_average_children"]	= "Gjennomsnittsantall med barn pr. familie";
$pgv_lang["stat_events"]			= "Antall hendelser";
$pgv_lang["stat_media"]				="Mediaobjekter";
$pgv_lang["stat_surnames"]			= "Antall etternavn";
$pgv_lang["stat_users"]				= "Antall brukere";
$pgv_lang["no_family_facts"]		= "Ingen faktopplysninger for denne familien.";
$pgv_lang["stat_males"]				="Totalt antall hankjønn";
$pgv_lang["stat_females"]			="Totalt antall hunnkjønn";
$pgv_lang["stat_unknown"]			= "ukjent";

$pgv_lang["sunday_1st"]				= "S";
$pgv_lang["monday_1st"]				= "M";
$pgv_lang["tuesday_1st"]			= "Ti";
$pgv_lang["wednesday_1st"]			= "O";
$pgv_lang["thursday_1st"]			= "To";
$pgv_lang["friday_1st"]				= "F";
$pgv_lang["saturday_1st"]			= "L";

$pgv_lang["jan_1st"]					= "Jan";
$pgv_lang["feb_1st"]					= "Feb";
$pgv_lang["mar_1st"]					= "Mars";
$pgv_lang["apr_1st"]					= "April";
$pgv_lang["may_1st"]					= "Mai";
$pgv_lang["jun_1st"]					= "Juni";
$pgv_lang["jul_1st"]					= "July";
$pgv_lang["aug_1st"]					= "Aug";
$pgv_lang["sep_1st"]					= "Sep";
$pgv_lang["oct_1st"]					= "Okt";
$pgv_lang["nov_1st"]					= "Nov";
$pgv_lang["dec_1st"]					= "Des";

$pgv_lang["edit_source"]			= "Rediger kilde";
$pgv_lang["familybook_chart"]		= "Familiebok";
$pgv_lang["family_of"]				= "Familie av:&nbsp;";
$pgv_lang["descent_steps"]			= "Etterkommerledd";

$pgv_lang["cancel"]					= "Avbryt";
$pgv_lang["cookie_help"]			= "Dette nettstedet bruker 'cookies' for å følge med på din innloggings-status.<br /><br />Det ser ut som om at cookies ikke er godtatt i nettleseren din. Du må aktivere cookies for dette nettstedet før du kan logge deg inn.  Du kan se i hjelpefilen til nettleseren din for informasjon om å aktivere cookies.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]			= "Opplysninger om denne personen er hentet fra et eksternt nettsted.";
$pgv_lang["link_remote"]            = "Lag kobling til ekstern person";
//Add Remote Link
$pgv_lang["title_search_link"]      = "Legg til intern kobling";
$pgv_lang["label_site_url2"]        = "URL til nettsted";
//new stuff

$pgv_lang["delete_family_confirm"]	= "Dersom du sletter denne familien vil alle koblinger mellom familiemedlemmene også bli fjernet. Personene vil selvsagt <u>ikke</u> bli slettet !<br />Er du sikker på at du vil slette denne familien ?";
$pgv_lang["delete_family"]			= "Slett familie";
$pgv_lang["add_favorite"]			= "Legg til en ny favoritt";
$pgv_lang["url"]					= "URL";
$pgv_lang["add_fav_enter_note"]		= "Beskrivelse av denne favoritten (valgfritt)";
$pgv_lang["add_fav_or_enter_url"]	= "eller<br />\nen internettadresse (URL) og en tittel";
$pgv_lang["add_fav_enter_id"]		= "Angi ID til en person, family eller kilde";
$pgv_lang["next_email_sent"]		= "Neste påminnelse vil bli sendt med epost etter ";
$pgv_lang["last_email_sent"]		= "Siste påminnelse med epost ble sendt ";
$pgv_lang["remove_child"]			= "Fjerne koblingen til familien for dette barnet";
$pgv_lang["link_new_husb"]			= "Legg til en ektemann/partner ved å bruke en registrert person";
$pgv_lang["link_new_wife"]			= "Legg til en hustru/partner ved å bruke en registrert person";
$pgv_lang["address_labels"]			= "Adresse-etiketter";
$pgv_lang["filter_address"]			= "Vis adresser som inneholder:";
$pgv_lang["address_list"]			= "Adresseliste";
$pgv_lang["autocomplete"]			= "Auto-fullfør";
$pgv_lang["index_edit_advice"]		= "Merk navnet til en ramme og klikk på en av pilene for å flytte rammen i ønket retning.";
$pgv_lang["changelog"]				= "Endringer i versjon #VERSION#";
$pgv_lang["html_block_descr"]		= "Dette er en enkel ramme som du kan legge på siden din for å vise en beskjed (i HTML-format).";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Sett inn tittelen din her</b></p><br /><p>Klikk på knappen for oppsett";
$pgv_lang["html_block_sample_part2"]	= "for å endre det som skal stå her.</p>";
$pgv_lang["html_block_name"]		= "Rammen Enkle beskjeder (HTML)";
$pgv_lang["htmlplus_block_name"]	= "Avansert HTML";
$pgv_lang["htmlplus_block_descr"]	= "Dette er en HTML-ramme som du kan plassere på siden din for å vise ulike beskjeder.  Du kan legge inn referanser til opplysninger i slektsbasen din inn i HTML-teksten.";
$pgv_lang["htmlplus_block_templates"] = "Maler";
$pgv_lang["htmlplus_block_content"] = "Innhold";
$pgv_lang["htmlplus_block_narrative"] = "Fortellende stil (bare engelsk)";
$pgv_lang["htmlplus_block_custom"]	="Brukertilpasset";
$pgv_lang["htmlplus_block_keyword"]	="Nøkkelordeksempler (kun på engelsk)";
$pgv_lang["htmlplus_block_taglist"]	="Tag-liste";
$pgv_lang["htmlplus_block_compat"]	="Kompatibilitetsmodus";
$pgv_lang["htmlplus_block_ui"]		= "Utvidet grenesnitt";
$pgv_lang["htmlplus_block_current"]	="Nåværende valg";
$pgv_lang["htmlplus_block_default"]	="Standardvalg";
$pgv_lang["htmlplus_block_gedcom"]	="Slektstre";
$pgv_lang["htmlplus_block_birth"]	="født";
$pgv_lang["htmlplus_block_death"]	="død";
$pgv_lang["htmlplus_block_marrage"]	="ekteskap";
$pgv_lang["htmlplus_block_adoption"]	="adopsjon";
$pgv_lang["htmlplus_block_burial"]	="gravlagt";
$pgv_lang["htmlplus_block_census"]	="folketelling lagt til";
$pgv_lang["num_to_show"]			= "Antall deler som skal vises";
$pgv_lang["days_to_show"]			= "Antall dager som skal vises";
$pgv_lang["before_or_after"]		= "Plasser antall før eller etter navn?";
$pgv_lang["before"]					= "før";
$pgv_lang["after"]					= "etter";
$pgv_lang["config_block"]			= "Endre oppsett for rammen";
$pgv_lang["enter_comments"]			= "Vennligst angi slektskapet ditt til noen i slektsbasen i feltet Kommentarer.";
$pgv_lang["comments"]				= "Kommentarer";
$pgv_lang["child-family"]			= "Foreldre og søsken";
$pgv_lang["spouse-family"]			= "Ektefelle og barn";
$pgv_lang["direct-ancestors"]		= "Forfedre i direkte linje";
$pgv_lang["ancestors"]				= "Forfedre i direkte linje og deres familier";
$pgv_lang["descendants"]			= "Etterkommere";
$pgv_lang["choose_relatives"]		= "Velg slektninger";
$pgv_lang["relatives_report"]		= "Slektninger";
$pgv_lang["total_unknown"]			= "ukjent";
$pgv_lang["total_living"]			= "Antall levende";
$pgv_lang["total_dead"]				= "Antall døde";
$pgv_lang["total_not_born"]			= "Antall ikke født enda";
$pgv_lang["remove_custom_tags"]		= "Fjerne fakta-koder laget av phpGedView?";
$pgv_lang["cookie_login_help"]		= "Nettstedet ser at du har logget deg inn her tidligere.  Dette gjør at du nå har tilgang til privat informasjon og andre bruker-relaterte funksjoner. <br/>- Men for å kunne endre eller adiministere nettstedet, så må du av hensyn til sikkerhet logge deg inn på nytt.";
$pgv_lang["remember_me"]			= "Huske meg?";
$pgv_lang["fams_with_surname"]		= "Familier med etternavnet #surname#";
$pgv_lang["support_contact"]		= "Teknisk hjelp";
$pgv_lang["genealogy_contact"]		= "Slektsspørsmål";
$pgv_lang["common_upload_errors"]	= "Denne feilen skyldes sannsynligvis at filen som du prøvde å hente (upload) var for stor i forhold til grenser satt av verten til serveren.  Standard grense i PHP er 2MB.  Du kan prøve å kontakte eierene av serveren for å få dem til å heve denne grensen som er er angitt i filen php.ini, eller så kan du laste opp (upload) filen ved hjelp av FTP.  Bruk siden <a href=\"uploadgedcom.php?action=add_form\"><b>Legg til slektsfil</b></a> for å legge til en slektsfil som du har lastet opp ved hjelp av FTP.";
$pgv_lang["total_memory_usage"]		= "Totalt bruk av minne:";
$pgv_lang["mothers_family_with"]	= "Familien til mor til ";
$pgv_lang["fathers_family_with"]	= "Familien til far til ";
$pgv_lang["family_with"]		= "Familie med";
$pgv_lang["halfsibling"]			= "Halvsøsken";
$pgv_lang["halfbrother"]			= "Halvbror";
$pgv_lang["halfsister"]				= "Halvsøster";
$pgv_lang["family_timeline"]		= "Vis familie på en tidslinje";
$pgv_lang["children_timeline"]		= "Vis barn på en tidslinje";
$pgv_lang["other"]					= "Annet";
$pgv_lang["others"]					= "Andre";
$pgv_lang["sort_by_marriage"]		= "Sortert på dato for ekteskap";
$pgv_lang["reorder_families"]		= "Vis familier i annen rekkefølge";
$pgv_lang["indis_with_surname"]		= "Personer med etternavn som begynner på #surname#";
$pgv_lang["first_letter_name"]		= "Velg en bokstav for å vise etter/familienavn som begynner på bokstaven.";
$pgv_lang["first_letter_iname"]		= "Velg en bokstav for å vise personer med etter/familienavn som begynner på bokstaven.";
$pgv_lang["first_letter_fname"]		= "Velg en bokstav for å vise personer med fornavn som begynner på bokstaven.";
$pgv_lang["total_names"]			= "Antall navn";
$pgv_lang["total_changes"]			= "Sum endringer";
$pgv_lang["total_links"]			= "Sum lenker";
$pgv_lang["top10_pageviews_nohits"]	= "Det er ingen treff for denne siden.";
$pgv_lang["top10_pageviews_msg"]	= "Telleren må aktiveres i konfigurasjonen for slektsfilen for at denne rammen skal virke.";
$pgv_lang["review_changes_descr"]	= "Rammen Endringer på vent, vil gi brukere med rett til å endre opplysninger online, en mulighet til å se en endringsliste før disse er blitt godkjent.  Disse endringen kan enten bli godkjent eller forkastet.<br /><br />Dersom denne rammen er aktiv, vil brukere med rettighet til å godkjenne motta en e-post daglig som en påminning om å sjekke endringer.";
$pgv_lang["review_changes_block"]	= "Rammen Endringer på vent";
$pgv_lang["review_changes_email"]	= "Sende påminnelse med epost?";
$pgv_lang["review_changes_email_freq"]	= "Hvor ofte skal påminnelser sendes (dager)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Vis endringer";
$pgv_lang["review_changes_body"]	= "Endringer i slektsbasen er blitt gjort online.  Disse endringene må sjekkes og eventuelt godkjennes før de kan vises for alle brukere.  Vennligst bruk adressen (URL) under for å gå til PhpGedView på nettet for å se endringene (du må oppgi brukernavn og passord).";
$pgv_lang["show_pending"]			="Vis endringer på vent";
$pgv_lang["show_spouses"]			= "Vis ektefeller";
$pgv_lang["quick_update_title"] 	= "Hurtig-oppdatering";
$pgv_lang["quick_update_instructions"] = "Denne siden gir deg mulighet til å foreta en hurtig-oppdatering av informasjon til en person.  Du trenger bare å fylle ut informasjon som er ny eller som skal endres.  Etter at endringene har blitt sendt, må de sjekks av en bruker med rett til å godkjenne før de blir vist for andre brukere.";
$pgv_lang["update_name"] 			= "Oppdater navn";
$pgv_lang["update_fact"] 			= "Oppdater en faktaopplysning";
$pgv_lang["update_fact_restricted"] = "Oppdatering av denne er begrenset:";
$pgv_lang["update_photo"] 			= "Oppdater bilde";
$pgv_lang["select_fact"] 			= "Velg en faktaopplysning...";
$pgv_lang["update_address"] 		= "Oppdater adresse";
$pgv_lang["top10_pageviews_descr"]	= "Denne rammen vil vise de 10 mest viste personen/familiene.  Denne rammen krever at telleren er aktivert i innstillingene for konfigurasjonen for slektsfilen.";
$pgv_lang["top10_pageviews"]		= "Vist flest ganger";
$pgv_lang["top10_pageviews_block"]	= "Rammen Vist flest ganger";
$pgv_lang["stepparent"]             = "Steforelder";
$pgv_lang["stepdad"]				= "Stefar";
$pgv_lang["stepmom"]				= "Stemor";
$pgv_lang["stepsister"]				= "Stesøster";
$pgv_lang["stepbrother"]			= "Stebror";
$pgv_lang["fams_charts"]			= "Valg for denne familien";
$pgv_lang["indis_charts"]			= "Valg for denne personen";
$pgv_lang["none"]					= "Ingen";
$pgv_lang["locked"]					= "Ikke gjør endringer";
$pgv_lang["facts"]					= "fakta";
$pgv_lang["privacy"]				= "Personvern";
$pgv_lang["number_sign"]			= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"] 					= "?";
$pgv_lang["qm_ah"]					= "?";
$pgv_lang["page_help"]			= "Hjelp";
$pgv_lang["help_for_this_page"]	= "Hjelp for denne siden";
$pgv_lang["help_contents"]		= "Emner i Hjelp";
$pgv_lang["show_context_help"]	= "Vis Hjelp <b><i>?</i></b> til tekst";
$pgv_lang["hide_context_help"]	= "Skjul Hjelp <b><i>?</i></b> til tekst";
$pgv_lang["sorry"]				= "<b>Beklager, men vi er ikke ferdig med hjelpeteksten for denne siden eller delen enda...</b>";
$pgv_lang["help_not_exist"]		= "<b>Hjelpeteksten for denne siden eller delen er ikke lagt inn enda</b>";
$pgv_lang["var_not_exist"]		= "<span style=font-weight: bold>Kan ikke finne noen hjelpetekst.<br />Vennligst gi oss en melding om dette fordi det er en feil.</span>";
$pgv_lang["resolution"]			= "Skjermoppløsning";
$pgv_lang["menu"]				= "Meny";
$pgv_lang["header"]				= "Toppfelt";
$pgv_lang["imageview"]			= "Bildeframviser";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"]			= "PhpGedView innlogging for brukere";
$pgv_lang["for_support"]		= "For teknisk hjelp og informasjon, kontakt";
$pgv_lang["for_contact"]		= "For hjelp med slektsspørsmål, kontakt";
$pgv_lang["for_all_contact"]	= "For teknisk hjelp og slektsspørsmål, kontakt";
$pgv_lang["choose_username"]		="Ønsket brukeravn";
$pgv_lang["username"]			= "Brukernavn";
$pgv_lang["invalid_username"]	= "Brukernavnet inneholder ugyldige tegn";
$pgv_lang["firstname"]			= "Fornavn";
$pgv_lang["lastname"]			= "Etternavn";
$pgv_lang["choose_password"]		="Ønsket passord";
$pgv_lang["password"]			= "Passord";
$pgv_lang["confirm"]			= "Bekreft passord";
$pgv_lang["login"]				= "Logg inn";
$pgv_lang["logout"]				= "Logg ut";
$pgv_lang["admin"]				= "Admin";
$pgv_lang["logged_in_as"]		= "Logget inn som ";
$pgv_lang["my_pedigree"]		= "Mitt anetre";
$pgv_lang["my_indi"]			= "Meg selv";
$pgv_lang["yes"]				= "Ja";
$pgv_lang["no"]					= "Nei";
$pgv_lang["change_theme"]		= "Bytt stil";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Anetre";
$pgv_lang["gen_ped_chart"]		= "Anetre - #PEDIGREE_GENERATIONS# slektsledd";
$pgv_lang["generations"]		= "Slektsledd&nbsp;";
$pgv_lang["view"]				= "Vis";
$pgv_lang["fam_spouse"]			= "Familie med partner";
$pgv_lang["root_person"]		= "ID til startperson&nbsp;";
$pgv_lang["hide_details"]		= "Skjul detaljer";
$pgv_lang["show_details"]		= "Vis detaljer";
$pgv_lang["person_links"]		= "Linker til diagram, familie(r), og nære slektninger til denne personen. - Klikk her for å vise denne personen som startperson i diagrammet.";
$pgv_lang["zoom_box"]			= "Zoom denne boksen inn/ut";
$pgv_lang["orientation"]		= "Retning";
$pgv_lang["portrait"]			= "Stående tre";
$pgv_lang["landscape"]			= "Liggende tre";
$pgv_lang["start_at_parents"]	= "Start med foreldrene";
$pgv_lang["charts"]				= "Diagram";
$pgv_lang["lists"]				= "Lister";
$pgv_lang["box_width"]			= "Boksbredde";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Kan ikke finne familien med id ";
$pgv_lang["unable_to_find_record"]	= "Kan ikke finne oppføringen med id ";
$pgv_lang["title"]				= "Tittel:";
$pgv_lang["living"]				= "Lever";
$pgv_lang["private"]			= "Privat";
$pgv_lang["birth"]				= "Født:";
$pgv_lang["death"]				= "Død:";
$pgv_lang["descend_chart"]		= "Etterkommere";
$pgv_lang["individual_list"]	= "Personer";
$pgv_lang["family_list"]		= "Familier";
$pgv_lang["source_list"]		= "Kilder";
$pgv_lang["place_list"]			= "Stedsnavn";
$pgv_lang["place_list_aft"] 	= "Stedsnavn etter";
$pgv_lang["media_list"]			= "Bilder / medier";
$pgv_lang["search"]				= "Søk person";
$pgv_lang["clippings_cart"]		= "Utklippsmappe";
$pgv_lang["print_preview"]		= "Utskrifts-vennlig utgave";
$pgv_lang["cancel_preview"]		= "Tilbake til vanlig visning";
$pgv_lang["change_lang"]		= "Velg språk (Language)";
$pgv_lang["print"]				= "Skriv ut";
$pgv_lang["total_queries"]		= "Antall søk i databasen:";
$pgv_lang["total_privacy_checks"]	= " - Antall kontroller av personvern: ";
$pgv_lang["back"]				= "Tilbake";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]				= "Også kjent som";
$pgv_lang["male"]				= "Mann";
$pgv_lang["female"]				= "Kvinne";
$pgv_lang["temple"]				= "Mormoner-tempel";
$pgv_lang["temple_code"]		= "Mormoner-tempel-kode:";
$pgv_lang["status"]				= "Status";
$pgv_lang["source"]				= "Kilde";
$pgv_lang["text"]				= "Kildetekst:";
$pgv_lang["note"]				= "Note";
$pgv_lang["NN"]					= "(ukjent)";
$pgv_lang["PN"]					= "(ukjent)";
$pgv_lang["NNhebrew"] 			= "(לא ידוע)";
$pgv_lang["PNhebrew"] 			= "(לא ידוע)";
$pgv_lang["NNarabic"] 			= "(غير معروف)";
$pgv_lang["PNarabic"] 			= "(غير معروف)";
$pgv_lang["NNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["PNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["NNrussian"] 			= "(неопределено)";
$pgv_lang["PNrussian"] 			= "(неопределено)";
$pgv_lang["NNchinese"] 			= "(未知)";
$pgv_lang["PNchinese"] 			= "(未知)";
$pgv_lang["NNvietnamese"] 		= "(vô danh)";
$pgv_lang["PNvietnamese"] 		= "(không biết tuổi)";
$pgv_lang["NNthai"] 			= "(ukjent))";
$pgv_lang["PNthai"] 			= "(ukjent)";
$pgv_lang["NNother"] 			= "(ukjent)";
$pgv_lang["PNother"] 			= "(ukjent)";
$pgv_lang["unrecognized_code"]	= "Ukjent kode i slektsfilen";
$pgv_lang["unrecognized_code_msg"]	= "Dette er en feil som vi ønsker å rette på. Vennligst rapporter denne feilen til";
$pgv_lang["indi_info"]			= "Person-opplysninger";
$pgv_lang["pedigree_chart"]		= "Anetre";
$pgv_lang["individual"]			= "Person";
$pgv_lang["as_spouse"]			= "Familie med ektefelle/partner";
$pgv_lang["privacy_error"]		= "Opplysninger om denne personen er privat.<br />";
$pgv_lang["more_information"]	= "For mer informasjon, kontakt";
$pgv_lang["given_name"]			= "Fornavn:";
$pgv_lang["surname"]			= "Etternavn:";
$pgv_lang["suffix"]				= "Suffiks:";
$pgv_lang["sex"]				= "Kjønn";
$pgv_lang["personal_facts"]		= "Fakta og detaljer om personen";
$pgv_lang["type"]				= "Type";
$pgv_lang["parents"] 			= "Foreldre:";
$pgv_lang["siblings"] 			= "Søsken";
$pgv_lang["father"] 			= "Far";
$pgv_lang["mother"] 			= "Mor";
$pgv_lang["parent"] 			= "En av foreldrene";
$pgv_lang["parent_age"] 			= "Foreldrenes alder";
$pgv_lang["father_age"]				= "Farens alder";
$pgv_lang["mother_age"]				= "Morens alder";
$pgv_lang["self"] 					= "Selv";
$pgv_lang["relatives"]			= "Nære slektninger";
$pgv_lang["relatives_events"]	= "Hendelser til nære slektninger";
$pgv_lang["historical_facts"]		= "Historiske fakta";
$pgv_lang["partner"] 				= "Partner";
$pgv_lang["spouse"]				= "Ektefelle/partner";
$pgv_lang["spouses"]				="Partnere";
$pgv_lang["surnames"]			= "Etternavn";
$pgv_lang["adopted"]			= "Adoptert";
$pgv_lang["foster"]				= "Fosterbarn";
$pgv_lang["sealing"]			= "Kobling";
$pgv_lang["challenged"]			= "Innsigelser";
$pgv_lang["disproved"]			= "Motbevist";
$pgv_lang["infant"]				= "Spedbarn";
$pgv_lang["stillborn"]			= "Ufødt";
$pgv_lang["deceased"]			= "Døde";
$pgv_lang["link_as_wife"]		= "Knytt denne personen til en eksisterende familie som en hustru";
$pgv_lang["no_tab1"]			= "Det er ikke noen fakta / opplysninger om denne personen.";
$pgv_lang["no_tab2"]			= "Det er ikke noen noter for denne personen.";
$pgv_lang["no_tab3"]			= "Det er ikke noen kilder knyttet til denne personen.";
$pgv_lang["no_tab4"]			= "Det er ikke noen bilder eller andre medier knyttet til denne personen.";
$pgv_lang["no_tab5"]			= "Det er ikke noen nære slektninger knyttet til denne personen.";
$pgv_lang["no_tab6"]			= "Det er ikke noen forsker-logg knyttet til denne personen.";
$pgv_lang["show_fact_sources"]		= "Vis alle kilder";
$pgv_lang["show_fact_notes"]		= "Vis alle notater";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Familie-opplysninger";
$pgv_lang["family_group_info"]	= "Familie-opplysninger";
$pgv_lang["husband"]			= "Ektemann";
$pgv_lang["wife"]				= "Hustru";
$pgv_lang["marriage"]			= "Bryllup:";
$pgv_lang["lds_sealing"]		= "LDS besegling:";
$pgv_lang["marriage_license"]	= "Ekteskapsattest:";
$pgv_lang["no_children"]		= "Ingen registerte barn";
$pgv_lang["childless_family"]	= "Denne familien fikk aldri noen barn";
$pgv_lang["parents_timeline"]	= "Vis partnere på en tidslinje";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "Utklippsmappe";
$pgv_lang["which_links"]		= "Merk av hvilke opplysninger du ønsker å kopiere fra den valgte familien.";
$pgv_lang["just_family"]		= "Bare familien alene.";
$pgv_lang["parents_and_family"]	= "Familien og foreldre.";
$pgv_lang["parents_and_child"]	= "Familien, foreldre og barn.";
$pgv_lang["parents_desc"]		= "Familien, foreldre og alle etterkommere.";
$pgv_lang["continue"]			= "Neste skritt...";
$pgv_lang["which_p_links"]		= "Merk av hvilke opplysninger du ønsker å kopiere fra den valgte personen.";
$pgv_lang["just_person"]		= "Bare personen alene.";
$pgv_lang["person_parents_sibs"]	= "Personen, foreldre og søsken.";
$pgv_lang["person_ancestors"]		= "Personen og slektninger i direkte linje.";
$pgv_lang["person_ancestor_fams"]	= "Personen og slektninger i direkte linje med deres familier.";
$pgv_lang["person_spouse"]		= "Personen, samt ektefelle/partner og barn.";
$pgv_lang["person_desc"]		= "Personen, ektefelle/partner, og alle etterkommere.";
$pgv_lang["which_s_links"]			="Hvile poster linket til denne kilden skal legges til?";
$pgv_lang["just_source"]			="Legg bare til denne kilden";
$pgv_lang["linked_source"]			="Legg til denne kilden og familier/personer den er linket til";
$pgv_lang["person_private"]		= "Data for denne personen er private. Personlige data vises derfor ikke.";
$pgv_lang["family_private"]		= "Data for denne familien er private. Familiære data vises derfor ikke.";
$pgv_lang["download"]			= "Høyreklikk (control-click på Mac) på linken under og Velg \"Lagre som\" for å laste ned (download) filene.";
$pgv_lang["cart_is_empty"]		= "<b>Utklippsmappen din er tom!</b>";
$pgv_lang["id"]					= "ID";
$pgv_lang["ID"]					= "ID";
$pgv_lang["name_description"]	= "Navn / beskrivelse";
$pgv_lang["remove"]				= "Fjern";
$pgv_lang["empty_cart"]			= "Fjern alt i mappen";
$pgv_lang["download_now"]		= "Laste ned (download) nå";
$pgv_lang["download_file"]			="Last ned filen #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Denne personen er hentet fra:";
$pgv_lang["family_downloaded_from"]	= "Denne familien er hentet fra:";
$pgv_lang["source_downloaded_from"]	= "Denne kilden er hentet fra:";
$pgv_lang["enter_person_generations"] = "Antall generasjoner:";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= " stedsnavn som inneholder";
$pgv_lang["top_level"]			= "Lands-/toppnivå";
$pgv_lang["form"]				= "Stedsnavn lagret som: ";
$pgv_lang["default_form"]		= "Grend/bydel, sted/by, kommune/sogn, fylke/region, land";
$pgv_lang["default_form_info"]	= "(Standard)";
$pgv_lang["unknown"]			= "Ukjent";
$pgv_lang["individuals"]		= "Personer";
$pgv_lang["view_records_in_place"]	= " Vis alle personer / familier knyttet til stedet ";
$pgv_lang["place_list2"] 		= "Alle stedsnavn";
$pgv_lang["show_place_hierarchy"]	= "Vis stedsnavn etter nivå";
$pgv_lang["show_place_list"]	= "Vis alle stedsnavn";
$pgv_lang["total_unic_places"]	= "Antall unike steder";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]	= "Eksterne objekt";
$pgv_lang["multi_title"]		= "Bilder eller andre medier";
$pgv_lang["media_found"]		= " bilder / medier funnet";
$pgv_lang["view_person"]		= "Vis person";
$pgv_lang["view_family"]		= "Vis familie";
$pgv_lang["view_source"]		= "Vis kilde";
$pgv_lang["view_object"]		= "Vis objekt";
$pgv_lang["prev"]				= "&lt; Forrige";
$pgv_lang["next"]				= "Neste &gt;";
$pgv_lang["next_image"]				="Neste bilde";
$pgv_lang["file_not_found"]		= "Fant ikke filen.";
$pgv_lang["medialist_show"]		= "Vis ";
$pgv_lang["per_page"]			= " bilder / medier pr. side";
$pgv_lang["media_format"]		= "Media-filtype";
$pgv_lang["image_size"]			= "Bilde-størrelser";
$pgv_lang["media_id"]			= "Media ID";
$pgv_lang["invalid_id"]			= "Ukjent ID i denne slektsbasen.";
$pgv_lang["record_updated"]			= "Oppføringen #pid# er nå oppdatert.";
$pgv_lang["record_not_updated"]		= "Klarte ikke å oppdatere oppføringen #pid#.";
$pgv_lang["record_removed"]			= "Oppføringen #xref# er nå fjernet fra slektsfilen.";
$pgv_lang["record_not_removed"]		= "Klarte ikke å fjerne oppføringen #xref# i slektsfilen.";
$pgv_lang["record_added"]			= "Oppføringen #xref# er nå lagt til slektsfilen.";
$pgv_lang["record_not_added"]		= "Klarte ikke å legge til oppføringen #xref# til slektsfilen.";

//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"]			= "Søk slik du <i>tror</i> navnet er skrevet";
$pgv_lang["sources"]				= "Kilder";
$pgv_lang["lastname_search"]		= "Etternavn";
$pgv_lang["search_place"]			= "Stedsnavn";
$pgv_lang["search_year"]			= "År";
$pgv_lang["no_results"]				= "Fant ingen...";
$pgv_lang["search_soundex"]			= "Soundex-søk";
$pgv_lang["search_replace"]			= "Søk og erstatt";
$pgv_lang["search_sources"]			= "Kilder";
$pgv_lang["search_more_chars"]      = "Du må søke etter mer enn bare en bokstav";
$pgv_lang["search_soundextype"]		= "Metode";
$pgv_lang["search_russell"]			= "Russell";
$pgv_lang["search_tagfilter"]		= "Begrensning";
$pgv_lang["search_tagfon"]			= "Utelat enkelte ikke-tilknyttede slektsdata";
$pgv_lang["search_tagfoff"]			= "Av";
$pgv_lang["associate"]				= "tilknyttede";
$pgv_lang["search_record"]			="Hele posten";
$pgv_lang["search_to"]				="til";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]			= "Titler";
$pgv_lang["find_source"]			= "Finn kilde";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]				= "Oppbevaringssteder";
$pgv_lang["repos_found"]			= " oppbevaringssteder funnet";
$pgv_lang["find_repository"]		= "Finn oppbevaringssted";
$pgv_lang["total_repositories"]		= "Antall oppbevaringssteder";
$pgv_lang["confirm_delete_repo"]	= "Er du sikker på at du vil slette dette oppbevaringsstedet fra slektsbasen?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Informasjon om kilde";
$pgv_lang["people"]				= "Personer";
$pgv_lang["families"]			= "Familier";
$pgv_lang["total_sources"]		= "Antall kilder";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]	= "Ugyldig GEDCOM 5.5 format";
$pgv_lang["exec_time"]			= "Utføringstid:";
$pgv_lang["unable_to_create_index"]	= "<b>Indeksfil kan ikke opprettes.</b><br />Sørg for nødvendige skrive-tillatelser i PhpGedView mappen (index).<br />Skrivebeskyttelsen kan evt. etableres igjen når indeksfilene er opprettet.";
$pgv_lang["changes_present"]	= "Denne slektsbasen har endringer på vent.  Dersom du fortsetter denne importen, vil disse endringene bli lagt til databasen uten at du at du får godkjent dem først.  Du BØR se gjennom endringene før du fortsetter importen!";
$pgv_lang["sec"]				= "sek.";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]			= "Antall familier";
$pgv_lang["total_indis"]		= "Antall personer";
$pgv_lang["notes"]				= "Noter";
$pgv_lang["ssourcess"]			= "Kilder";
$pgv_lang["media"]				= "Bilder / medier";
$pgv_lang["name_contains"]		= "Navn inneholder:";
$pgv_lang["filter"]				= "Søk";
$pgv_lang["apply_filter"]			= "Bruk filter";
$pgv_lang["find_individual"]	= "Finn person";
$pgv_lang["find_familyid"]		= "Finn familie";
$pgv_lang["find_sourceid"]		= "Finn kilde";
$pgv_lang["find_specialchar"]	= "Finn spesielle bokstaver";
$pgv_lang["magnify"]			= "Forstørr";
$pgv_lang["skip_surnames"]		= "Vis utvidet liste";
$pgv_lang["show_surnames"]		= "Vis kun etternavn";
$pgv_lang["skip_marnms"]			= "Utelat navn som gift";
$pgv_lang["show_marnms"]			= "Ta med navn som gift";
$pgv_lang["all"]				= "ALLE";
$pgv_lang["hidden"]				= "Skjulte";
$pgv_lang["confidential"]		= "Fortrolig";
$pgv_lang["alpha_index"]		= "Alfabetisk indeks";
$pgv_lang["name_list"] 			= "Navneliste";
$pgv_lang["firstname_alpha_index"] 	= "Alfabetisk indeks for fornavn";
$pgv_lang["roots"]					="Personer uten etterkommere ";
$pgv_lang["leaves"]					="Personer uten forfedre";
$pgv_lang["widow"]					="Enke";
$pgv_lang["widower"]				="Enkemann";
$pgv_lang["show_parents"] 			= "Vis foreldre";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]				= "Alder";
$pgv_lang["husb_age"]				= "Mannens alder";
$pgv_lang["wife_age"]				= "Konens alder";
$pgv_lang["year1"]				= "år";
$pgv_lang["years2"]					= "år";	// 2 years
$pgv_lang["years"]				= "år";
$pgv_lang["month1"]				= "måned";
$pgv_lang["months2"]				= "måneder"; // 2 months
$pgv_lang["months"]				= "måneder";
$pgv_lang["week1"]					= "uke";
$pgv_lang["weeks"]					= "uker";	// 2 weeks
$pgv_lang["day1"]				= "dag";
$pgv_lang["days"]				= "dager";
$pgv_lang["hour1"]					= "time";
$pgv_lang["hours2"]					= "timer"; // 2 hours
$pgv_lang["hours"]					= "timer"; // >2 hours
$pgv_lang["minute1"]				= "minutt";
$pgv_lang["minutes2"]				= "minutter"; // 2 minutes
$pgv_lang["minutes"]				= "minutter"; // >2 minutes
$pgv_lang["ago"]					= "siden";
$pgv_lang["after_death"]        ="etter dødsdagen";
$pgv_lang["at_death_day"]      		= "på dødsdagen";
$pgv_lang["timeline_title"]		= "PhpGedView tidslinje";
$pgv_lang["timeline_chart"]		= "Tidslinje";
$pgv_lang["remove_person"]		= "Fjern person";
$pgv_lang["show_age"]			= "Vis markør for alder";
$pgv_lang["add_another"]		= "Legg til en person på tidslinjen:<br />Person ID:";
$pgv_lang["find_id"]			= "Finn ID";
$pgv_lang["show"]				= "Vis";
$pgv_lang["year"]				= "År";
$pgv_lang["timeline_instructions"]	= "- <i><b>PS!</b>  Du kan flytte på boksene under ved hjelp av musa!</i> (I de nyeste nettleserne)";
$pgv_lang["zoom_out"]			= "Zoom ut";
$pgv_lang["zoom_in"]			= "Zoom inn";
$pgv_lang["timeline_beginYear"]		="Første år";
$pgv_lang["timeline_endYear"]		="Siste år";
$pgv_lang["timeline_scrollSpeed"]	="hastighet";
$pgv_lang["timeline_controls"]		="Instillinger for tidslinje";
$pgv_lang["include_family"]			="Inkluder nærmeste familie";
$pgv_lang["lifespan_chart"]			="Livslinjediagram";

// calendar conversion options
$pgv_lang["cal_none"]                 = "Ingen kalenderkonvertering";
$pgv_lang["cal_gregorian"]            = "Gregoriansk";
$pgv_lang["cal_julian"]               = "Juliansk";
$pgv_lang["cal_french"]               = "Fransk";
$pgv_lang["cal_jewish"]               = "Jødisk";
$pgv_lang["cal_hebrew"]               = "Hebraisk";
$pgv_lang["cal_jewish_and_gregorian"] = "Jødisk og Gregoriansk";
$pgv_lang["cal_hebrew_and_gregorian"] = "Hebraisk og Gregoriansk";
$pgv_lang["cal_hijri"]                = "Hijri";
$pgv_lang["cal_arabic"]               = "Arabisk";

// some religious dates
$pgv_lang["easter"]     = "Påske";
$pgv_lang["ascension"]  = "Kristi himmelfartsdag";
$pgv_lang["pentecost"]  = "Pinse";
$pgv_lang["assumption"] = "Marias Opptakelse";
$pgv_lang["all_saints"] = "Allehelgensdag";
$pgv_lang["christmas"]  = "Jul";

// am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."]         = "før middag";
$pgv_lang["p.m."]         = "etter middag";
$pgv_lang["noon"]         = "middag";
$pgv_lang["midn"]         = "midnatt";

//-- MONTH NAMES
$pgv_lang["jan"]				= "januar";
$pgv_lang["feb"]				= "februar";
$pgv_lang["mar"]				= "mars";
$pgv_lang["apr"]				= "april";
$pgv_lang["may"]				= "mai";
$pgv_lang["jun"]				= "juni";
$pgv_lang["jul"]				= "juli";
$pgv_lang["aug"]				= "august";
$pgv_lang["sep"]				= "september";
$pgv_lang["oct"]				= "oktober";
$pgv_lang["nov"]				= "november";
$pgv_lang["dec"]				= "desember";

$pgv_lang["vend"]         = "Vendémiaire";
$pgv_lang["brum"]         = "Brumaire";
$pgv_lang["frim"]         = "Frimaire";
$pgv_lang["nivo"]         = "Nivôse";
$pgv_lang["pluv"]         = "Pluviôse";
$pgv_lang["vent"]         = "Ventôse";
$pgv_lang["germ"]         = "Germinal";
$pgv_lang["flor"]         = "Floréal";
$pgv_lang["prai"]         = "Prairial";
$pgv_lang["mess"]         = "Messidor";
$pgv_lang["ther"]         = "Thermidor";
$pgv_lang["fruc"]         = "Fructidor";
$pgv_lang["comp"]         = "jours complémentaires";

$pgv_lang["tsh"]          = "Tishrei";
$pgv_lang["csh"]          = "Heshvan";
$pgv_lang["ksl"]          = "Kislev";
$pgv_lang["tvt"]          = "Tevet";
$pgv_lang["shv"]          = "Shevat";
$pgv_lang["adr"]          = "Adar";
$pgv_lang["adr_leap_year"]= "Adar I";
$pgv_lang["ads"]          = "Adar II";
$pgv_lang["nsn"]          = "Nissan";
$pgv_lang["iyr"]          = "Iyar";
$pgv_lang["svn"]          = "Sivan";
$pgv_lang["tmz"]          = "Tamuz";
$pgv_lang["aav"]          = "Av";
$pgv_lang["ell"]          = "Elul";

$pgv_lang["muhar"]        = "Muharram";
$pgv_lang["safar"]        = "Safar";
$pgv_lang["rabia"]        = "Rabi' al-awwal";
$pgv_lang["rabit"]        = "Rabi' al-thani";
$pgv_lang["jumaa"]        = "Jumada al-awwal";
$pgv_lang["jumat"]        = "Jumada al-thani";
$pgv_lang["rajab"]        = "Rajab";
$pgv_lang["shaab"]        = "Sha'aban";
$pgv_lang["ramad"]        = "Ramadan";
$pgv_lang["shaww"]        = "Shawwal";
$pgv_lang["dhuaq"]        = "Dhu al-Qi'dah";
$pgv_lang["dhuah"]        = "Dhu al-Hijjah";

$pgv_lang["b.c."]         = "f.Kr.";

$pgv_lang["abt"]				= "omkring";
$pgv_lang["aft"]				= "etter";
$pgv_lang["and"]				= "og";
$pgv_lang["bef"]				= "før";
$pgv_lang["bet"]				= "mellom";
$pgv_lang["cal"]				= "beregnet";
$pgv_lang["est"]				= "anslått";
$pgv_lang["from"]				= "fra";
$pgv_lang["int"]				= "tolket";
$pgv_lang["to"]					= "til";
$pgv_lang["cir"]				= "cirka";
$pgv_lang["apx"]				= "ca";

//-- Admin File Messages
$pgv_lang["password_mismatch"]		= "De to passordene er forskjellige.";
$pgv_lang["enter_username"]			= "Du må oppgi et brukernavn.";
$pgv_lang["enter_password"]			= "Du må oppgi et passord.";
$pgv_lang["save"]					= "Lagre";
$pgv_lang["saveandgo"]				= "Lagre og gå til den nye posten";
$pgv_lang["delete"]					= "Slett";
$pgv_lang["edit"]					= "Endre";
$pgv_lang["no_login"]				= "Bruker kan ikke godkjennes.";
$pgv_lang["basic_realm"]			= "PhpGedView autoriseringssystem";
$pgv_lang["basic_auth_failure"]		= "Du må angi et gyldig brukernavn og passord for få tilgang til denne delen";
$pgv_lang["basic_auth"]				= "Enkel autorisasjon";
$pgv_lang["digest_auth"]			= "Oversikt autorisasjon"; //not used in code yet
$pgv_lang["no_auth_needed"]			= "Ingen autorisasjon";
$pgv_lang["file_not_exists"]		= "Oppgitt filnavn finnes ikke!";
$pgv_lang["research_assistant"]		= "Forsknings-assistent";
$pgv_lang["utf8_to_ansi"]			= "Konvertere fra UTF-8 til ANSI tegnsett?";
$pgv_lang["media_linked"]			= "Dette media-objektet er knyttet til:";
$pgv_lang["media_not_linked"]		= "Dette media-objektet er ikke knyttet til noe(n) i slektsfilen.";
$pgv_lang["media_dir_1"]			= "Dette mediaobjektet er lagret på en ekstern tjener";
$pgv_lang["media_dir_2"]			= "Dette mediaobjektet er lagret i standard media-mappe";
$pgv_lang["media_dir_3"]			= "Dette mediaobjektet er lagret i den beskyttede media-mappa";
$pgv_lang["thumb_dir_1"]			= "Dette miniatyrbildet er lagret på en ekstern tjener";
$pgv_lang["thumb_dir_2"]			= "Dette miniatyrbildet er lagret i standard media-mappe";
$pgv_lang["thumb_dir_3"]			= "Dette miniatyrbildet er lagret i den beskyttede media-mappa";
$pgv_lang["moveto_2"]				= "Flytt til den beskyttede media-mappa";
$pgv_lang["moveto_3"]				= "Flytt til standard media-mappe";
$pgv_lang["move_standard"]			= "Flytt til standard";
$pgv_lang["move_protected"]			= "Flytt til beskyttet";
$pgv_lang["move_mediadirs"]			= "Flytt media-mapper";
$pgv_lang["setperms"]				= "Sett mediatilganger";
$pgv_lang["setperms_fix"]			= "Korrekte lese/skrive/utfør-tilganger";
$pgv_lang["setperms_success"]		= "Tilganger er gitt";
$pgv_lang["setperms_failure"]		= "Tilganger er ikke gitt";
$pgv_lang["setperms_time_exceeded"]	= "Kjøretidsbegrensning er overskredet.  Forsøk igjen med en mindre mappe";
$pgv_lang["move_time_exceeded"]		= "Kjøretidsbegrensning er overskredet.  Forsøk igjen for å behandle de resterende filene";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "Rotkatalogen for Mediabrannmuren du ba om eksisterer ikket.  Du må opprette den først.";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "Den beskyttede mediakatalogen kunne ikke opprettes i rotkatalogen for Mediabrannmuren.  Vennligst opprett denne katalogen og gjør den world-skrivbar.";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "Den beskyttede mediakatalogen i rotkatalogen til Mediabrannmuren er skrivebeskyttet. ";
$pgv_lang["media_firewall_invalid_dir"]	= "Feil: Mediabrannmuren ble startet fra en annen katalog enn mediamappen.";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Vis detaljer om ...";
$pgv_lang["view_fam_nav_notes"]		= "Vis notater for ...";
$pgv_lang["view_fam_nav_sources"]	= "Vis kilder for ...";
$pgv_lang["view_fam_nav_media"]		= "Vis media for ...";
$pgv_lang["view_fam_nav_album"]		= "Vis album for ...";
$pgv_lang["view_fam_nav_relatives"]	= "Vis slektninger for ...";
$pgv_lang["view_fam_nav_tree"]		= "Vis tre for ...";
$pgv_lang["view_fam_nav_research"]	= "Vis forskning for ...";
$pgv_lang["view_fam_nav_map"]		= "Vis kart for ...";
$pgv_lang["view_fam_nav_spare"]		= "Vis ekstrainfo for ...";
$pgv_lang["navigator"]				= "Navigatør";

$pgv_lang["relationship_great"]		= "Beste";
$pgv_lang["relationship_chart"] 	= "Slektskapsdiagram";
$pgv_lang["person1"]				= "Person 1";
$pgv_lang["person2"]				= "Person 2";
$pgv_lang["no_link_found"]			= "Ingen (annen) forbindelse mellom de to personene finnes.";
$pgv_lang["sibling"]				= "Søsken";
$pgv_lang["follow_spouse"]			= "Sjekk slektskap via inngifte";
$pgv_lang["timeout_error"]			= "The script timed out before a relationship could be found.";
$pgv_lang["grandchild"]				= "Barnebarn";
$pgv_lang["grandson"]				= "Barnebarn";
$pgv_lang["granddaughter"]			= "Barnebarn";
$pgv_lang["greatgrandchild"]		= "Oldebarn";
$pgv_lang["greatgrandson"]			= "Oldebarn";
$pgv_lang["greatgranddaughter"]		= "Oldebarn";
$pgv_lang["brother"]				= "Bror";
$pgv_lang["sister"] 				= "Søster";
$pgv_lang["aunt"]					= "Tante";
$pgv_lang["uncle"]				= "Onkel";
$pgv_lang["nephew"]				= "Nevø";
$pgv_lang["niece"]				= "Niese";
$pgv_lang["firstcousin"]			= "Søskenbarn";
$pgv_lang["femalecousin"]			= "Kusine";
$pgv_lang["malecousin"]				= "Fetter";
$pgv_lang["relationship_to_me"] 	= "Slektskap til meg";
$pgv_lang["rela_husb"]				= "Slektskap til ektemann";
$pgv_lang["rela_wife"]				= "Slektskap til hustru";
$pgv_lang["next_path"]				= "Finn neste slektslinje";
$pgv_lang["show_path"]				= "Slektslinje";
$pgv_lang["line_up_generations"]	= "Vis like slektsledd på linje";
$pgv_lang["oldest_top"]				= "Vis de eldste øverst";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"]	="%1\$s er %2\$s til %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"]	="%1\$s er %2\$s til %3\$s.";

$pgv_lang["mother_in_law"]			="svigermor";
$pgv_lang["father_in_law"]			="svigerfar";
$pgv_lang["brother_in_law"]			="svoger";
$pgv_lang["sister_in_law"]			="svigerinne";
$pgv_lang["son_in_law"]				="svigersønn";
$pgv_lang["daughter_in_law"]		="svigerdatter";
$pgv_lang["uncle_in_law"]			= "Inngiftet onkel";
$pgv_lang["aunt_in_law"]			= "Inngiftet tante";
$pgv_lang["cousin_in_law"]			= "Svigersøskenbarn";
$pgv_lang["m_cousin_in_law"]		= "Svigerfetter";
$pgv_lang["f_cousin_in_law"]		= "Svigerkusine";
$pgv_lang["step_son"]				="stesønn";
$pgv_lang["step_daughter"]			="stedatter";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] ="nevø";
$pgv_lang["bosa_brothers_offspring_3"]	="niese";
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"]	="grandnevø";
$pgv_lang["bosa_brothers_offspring_5"]	="grandniese";
$pgv_lang["bosa_brothers_offspring_6"]	="grandnevø";
$pgv_lang["bosa_brothers_offspring_7"]	="grandniese";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]			="%2\$d x grandnevø";
$pgv_lang["n_x_brothers_daughter"]		="%2\$d x grandniese";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"]	="nevø";
$pgv_lang["bosa_sisters_offspring_3"]	="niese";
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"]	="grandnevø";
$pgv_lang["bosa_sisters_offspring_5"]	="grandniese";
$pgv_lang["bosa_sisters_offspring_6"]	="grandnevø";
$pgv_lang["bosa_sisters_offspring_7"]	="grandniese";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]			="%2\$d x grandnevø";
$pgv_lang["n_x_sisters_daughter"]		="%2\$d x grandniese";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"]					="sønn";
$pgv_lang["bosa_3"]					="datter";
// 2nd generation
$pgv_lang["bosa_4"]					="sønnesønn";
$pgv_lang["bosa_5"]					="sønnedatter";
$pgv_lang["bosa_6"]					="dattersønn";
$pgv_lang["bosa_7"]					="datterdatter";
// 3rd generation
$pgv_lang["bosa_8"]					="sønnesønns sønn";
$pgv_lang["bosa_9"]					="sønnesønns datter";
$pgv_lang["bosa_10"]				="sønnedatters sønn";
$pgv_lang["bosa_11"]				="sønnedatters datter";
$pgv_lang["bosa_12"]				="dattersønns sønn";
$pgv_lang["bosa_13"]				="dattersønns datter";
$pgv_lang["bosa_14"]				="datterdatters sønn";
$pgv_lang["bosa_15"]				="datterdatters datter";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	="%3\$d x tippoldebarn";
$pgv_lang["n_x_granddaughter_from_son"]	="%3\$d x tippoldebarn";
$pgv_lang["n_x_grandson_from_daughter"]	="%3\$d x tippoldebarn";
$pgv_lang["n_x_granddaughter_from_daughter"]	="%3\$d x tippoldebarn";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"]			="onkel";
$pgv_lang["sosa_uncle_3"]			="onkel";
// 2nd generation
$pgv_lang["sosa_uncle_4"]			="grandonkel";
$pgv_lang["sosa_uncle_5"]			="grandonkel";
$pgv_lang["sosa_uncle_6"]			="grandonkel";
$pgv_lang["sosa_uncle_7"]			="grandonkel";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		="%2\$d x grandonkel";
$pgv_lang["n_x_maternal_uncle"]		="%2\$d x grandonkel";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"]			="tante";
$pgv_lang["sosa_aunt_3"]			="tante";
// 2nd generation
$pgv_lang["sosa_aunt_4"]			="grandtante";
$pgv_lang["sosa_aunt_5"]			="grandtante";
$pgv_lang["sosa_aunt_6"]			="grandtante";
$pgv_lang["sosa_aunt_7"]			="grandtante";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		="%2\$d x grandtante";
$pgv_lang["n_x_maternal_aunt"]		="%2\$d x grandtante";

// the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"]		="inngiftet onkel";
$pgv_lang["sosa_uncle_bm_3"]		="inngiftet onkel";
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"]		="grandfilleonkel";
$pgv_lang["sosa_uncle_bm_5"]		="grandfillonkel";
$pgv_lang["sosa_uncle_bm_6"]		="grandfillonkel";
$pgv_lang["sosa_uncle_bm_7"]		="grandfillonkel";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]	="%2\$d x grandfillonkel";
$pgv_lang["n_x_maternal_uncle_bm"]	="%2\$d x grandfillonkel";

// the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"]			="inngiftet tante";
$pgv_lang["sosa_aunt_bm_3"]			="inngiftet tante";
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"]			="grandfilltante";
$pgv_lang["sosa_aunt_bm_5"]			="grandfilltante";
$pgv_lang["sosa_aunt_bm_6"]			="grandfilltante";
$pgv_lang["sosa_aunt_bm_7"]			="grandfilltante";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]	="%2\$d x grandfilltante";
$pgv_lang["n_x_maternal_aunt_bm"]	="%2\$d x grandfilltante";

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]			="fetter";
$pgv_lang["male_cousin_2"]			="tremenning";
$pgv_lang["male_cousin_3"]			="firmenning";
$pgv_lang["male_cousin_4"]			="femmenning";
$pgv_lang["male_cousin_5"]			="seksmenning";
$pgv_lang["male_cousin_6"]			="syvmenning";
$pgv_lang["male_cousin_7"]			="åttemenning";
$pgv_lang["male_cousin_8"]			="nimenning";
$pgv_lang["male_cousin_9"]			="timennng";
$pgv_lang["male_cousin_10"]			="ellevemenning";
$pgv_lang["male_cousin_11"]			="tolvemnning";
$pgv_lang["male_cousin_12"]			="trettenmenning";
$pgv_lang["male_cousin_13"]			="fjortenmenning";
$pgv_lang["male_cousin_14"]			="femtenmenning";
$pgv_lang["male_cousin_15"]			="sekstenmenning";
$pgv_lang["male_cousin_16"]			="syttenmenning";
$pgv_lang["male_cousin_17"] 		="attenmenning";
$pgv_lang["male_cousin_18"]			="nittenmenning";
$pgv_lang["male_cousin_19"]			="tjuemenning";
$pgv_lang["male_cousin_20"]			="tjueenmenning";
$pgv_lang["male_cousin_n"]			="%d x menning";
$pgv_lang["female_cousin_1"]		="kusine";
$pgv_lang["female_cousin_2"] 		="tremenning";
$pgv_lang["female_cousin_3"] 		="firmenning";
$pgv_lang["female_cousin_4"]	 	="femmenning";
$pgv_lang["female_cousin_5"] 		="seksmenning";
$pgv_lang["female_cousin_6"] 		="syvmenning";
$pgv_lang["female_cousin_7"] 		="åttemenning";
$pgv_lang["female_cousin_8"] 		="nimenning";
$pgv_lang["female_cousin_9"] 		="timennng";
$pgv_lang["female_cousin_10"] 		="ellevemenning";
$pgv_lang["female_cousin_11"]	 	="tolvemnning";
$pgv_lang["female_cousin_12"] 		="trettenmenning";
$pgv_lang["female_cousin_13"] 		="fjortenmenning";
$pgv_lang["female_cousin_14"] 		="femtenmenning";
$pgv_lang["female_cousin_15"] 		="sekstenmenning";
$pgv_lang["female_cousin_16"] 		="syttenmenning";
$pgv_lang["female_cousin_17"] 		="attenmenning";
$pgv_lang["female_cousin_18"] 		="nittenmenning";
$pgv_lang["female_cousin_19"] 		="tjuemenning";
$pgv_lang["female_cousin_20"] 		="tjueenmenning";
$pgv_lang["female_cousin_n"] 		="%d x menning";

// Only referenced from english specific functions
##$pgv_lang["removed_ascending_1"]   = " once removed ascending";
##$pgv_lang["removed_ascending_2"]   = " twice removed ascending";
##$pgv_lang["removed_ascending_3"]   = " three times removed ascending";
##$pgv_lang["removed_ascending_4"]   = " four times removed ascending";
##$pgv_lang["removed_ascending_5"]   = " five times removed ascending";
##$pgv_lang["removed_ascending_6"]   = " six times removed ascending";
##$pgv_lang["removed_ascending_7"]   = " seven times removed ascending";
##$pgv_lang["removed_ascending_8"]   = " eight times removed ascending";
##$pgv_lang["removed_ascending_9"]   = " nine times removed ascending";
##$pgv_lang["removed_ascending_10"]  = " ten times removed ascending";
##$pgv_lang["removed_ascending_11"]  = " eleven times removed ascending";
##$pgv_lang["removed_ascending_12"]  = " twelve times removed ascending";
##$pgv_lang["removed_ascending_13"]  = " thirteen times removed ascending";
##$pgv_lang["removed_ascending_14"]  = " fourteen times removed ascending";
##$pgv_lang["removed_ascending_15"]  = " fifteen times removed ascending";
##$pgv_lang["removed_ascending_16"]  = " sixteen times removed ascending";
##$pgv_lang["removed_ascending_17"]  = " seventeen times removed ascending";
##$pgv_lang["removed_ascending_18"]  = " eighteen times removed ascending";
##$pgv_lang["removed_ascending_19"]  = " nineteen times removed ascending";
##$pgv_lang["removed_ascending_20"]  = " twenty times removed ascending";
##$pgv_lang["removed_descending_1"]  = " once removed descending";
##$pgv_lang["removed_descending_2"]  = " twice removed descending";
##$pgv_lang["removed_descending_3"]  = " three times removed descending";
##$pgv_lang["removed_descending_4"]  = " four times removed descending";
##$pgv_lang["removed_descending_5"]  = " five times removed descending";
##$pgv_lang["removed_descending_6"]  = " six times removed descending";
##$pgv_lang["removed_descending_7"]  = " seven times removed descending";
##$pgv_lang["removed_descending_8"]  = " eight times removed descending";
##$pgv_lang["removed_descending_9"]  = " nine times removed descending";
##$pgv_lang["removed_descending_10"] = " ten times removed descending";
##$pgv_lang["removed_descending_11"] = " eleven times removed descending";
##$pgv_lang["removed_descending_12"] = " twelve times removed descending";
##$pgv_lang["removed_descending_13"] = " thirteen times removed descending";
##$pgv_lang["removed_descending_14"] = " fourteen times removed descending";
##$pgv_lang["removed_descending_15"] = " fifteen times removed descending";
##$pgv_lang["removed_descending_16"] = " sixteen times removed descending";
##$pgv_lang["removed_descending_17"] = " seventeen times removed descending";
##$pgv_lang["removed_descending_18"] = " eighteen times removed descending";
##$pgv_lang["removed_descending_19"] = " nineteen times removed descending";
##$pgv_lang["removed_descending_20"] = " twenty times removed descending";

//-- GEDCOM edit utility
$pgv_lang["check_delete"]		= "Er du sikker på at du vil slette disse slektsdataene?";
$pgv_lang["access_denied"]		= "<h3><b>Ingen adgang!</b></h3><br />Du har ikke tilgang til denne delen.";
$pgv_lang["changes_exist"]		= "Det er gjort endringer i denne slektsbasen.";
$pgv_lang["find_place"]			= "Finn stedsnavn";
$pgv_lang["close_window"]		= "Lukk vinduet";
$pgv_lang["close_window_without_refresh"]	= "Lukk vinduet uten å oppdatere skjermen";
$pgv_lang["place_contains"]		= "Stedsnavn inneholder:";
$pgv_lang["add"]				= "Legg til";
$pgv_lang["custom_event"]		= "Egendef. hendelse";
$pgv_lang["delete_person"]		= "Slett denne personen";
$pgv_lang["confirm_delete_person"]	= "Er du sikker på at du vil slette denne personen fra slektsbasen?";
$pgv_lang["find_media"]			= "Finn media";
$pgv_lang["set_link"]			= "Lag kobling";
$pgv_lang["delete_source"]		= "Slett denne kilden";
$pgv_lang["confirm_delete_source"]	= "Er du sikker på at du vil slette denne kilden fra slektsbasen?";
$pgv_lang["find_family"]		= "Finn familie";
$pgv_lang["find_fam_list"]		= "Finn Familieliste";
$pgv_lang["edit_name"]			= "Rediger navn";
$pgv_lang["delete_name"]		= "Slett navn";
$pgv_lang["select_date"]		= "Velg en dato";
$pgv_lang["user_cannot_edit"]		= "Dette brukernavnet har ikke rettigheter til å endre denne slektsbase.";
$pgv_lang["ged_noshow"]			= "Denne siden er deaktivert av administratoren til nettstedet.";

//-- calendar.php messages
$pgv_lang["bdm"]				= "Fødselsdager, dødsfall og giftemål";
$pgv_lang["on_this_day"]		= "Årsdag for hendelser i slekten...";
$pgv_lang["in_this_month"]		= "Årsdager for hendelser i slekten...";
$pgv_lang["in_this_year"]		= "Hendelser i slekten...";
$pgv_lang["year_anniversary"]	= "#year_var#. årsdag";
$pgv_lang["today"]				= "I dag";
$pgv_lang["day"]				= "Dag";
$pgv_lang["month"]				= "Måned";
$pgv_lang["showcal"]			= "Vis hendelser for";
$pgv_lang["anniversary"]			= "Årsdag";
$pgv_lang["anniversary_calendar"] = "Historisk kalender";
$pgv_lang["sunday"]				= "søndag";
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
$pgv_lang["living_only"]		= "Nålevende personer";
$pgv_lang["recent_events"]		= "De siste 100 årene";
$pgv_lang["day_not_set"]		= "Dag ikke angitt";

//-- user self registration module
$pgv_lang["lost_password"]		= "Glemt passordet ditt?";
$pgv_lang["requestpassword"]	= "Be om nytt passord";
$pgv_lang["no_account_yet"]		= "Har du ikke <b>egen</b> konto enda!?";
$pgv_lang["requestaccount"]		= "Søke om brukerkonto";
$pgv_lang["emailadress"]		= "Epost-adresse";
$pgv_lang["mandatory"] 			= "Felt merket med * må fylles ut.";
$pgv_lang["mail01_line01"]		= "Hei #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "En anmodning er gjort på ( #SERVER_NAME# ) om å få en brukerkonto med din epost-adresse ( #user_email# ).";
$pgv_lang["mail01_line03"]		= "Opplysningene om deg ble gitt ved forespørsel om brukerkonto.";
$pgv_lang["mail01_line04"]		= "Vennligst klikk på linken under og fyll ut riktige data for å bekrefte kontoen og epost-adressen din.";
$pgv_lang["mail01_line05"]		= "Dersom du ikke har bedt om å få en konto, kan du bare slette denne e-posten.";
$pgv_lang["mail01_line06"]		= "Du vil ikke få tilsendt flere e-poster herfra, fordi kontoen vil bli slettet etter 7 dager dersom den ikke bekreftes.";
$pgv_lang["mail01_subject"]		= "Din registrering hos #SERVER_NAME#";

$pgv_lang["mail02_line01"]		= "Hei administrator ...";
$pgv_lang["mail02_line02"]		= "En ny bruker har registreret seg hos ( #SERVER_NAME# ).";
$pgv_lang["mail02_line03"]		= "Brukeren har fått tilsendt en e-post med de nødvendige data for å bekrefte ønske om konto.";
$pgv_lang["mail02_line04"]		= "Så snart brukeren har bekreftet kontoen, vil du få en epost der du blir bedt om å gi denne brukeren tillatelse til å få en konto.";
$pgv_lang["mail02_line04a"]		= "Så snart brukeren har bekreftet kontoen, vil du få en epost om dette.  Brukeren vil nå kunne logge seg inn uten at du trenger å gjøre noe.";
$pgv_lang["mail02_subject"]		= "Ny registrering på #SERVER_NAME#";

$pgv_lang["hashcode"]			= "Kontrollkode:";
$pgv_lang["thankyou"]			= "Hei #user_fullname# og takk for søknaden din om å få en brukerkonto.";
$pgv_lang["pls_note06"]			= "Du vil nå få tilsendt en bekreftelses-epost til adressen ( #user_email# ).<br />Ved hjelp av denne e-posten kan du aktivere kontoen din. Dersom du ikke aktiverer kontoen din innen 7 dager, vil den bli slettet (du kan registrere kontoen igjen etter de 7 dagene, om du ønsker det). For å logge deg inn på dette nettstedet, kreves det at du oppgir et brukernavn og passord.<br /><br /><br /><br />";
$pgv_lang["pls_note06a"] 		= "Vi vil nå sende en bekreftelse på e-post til adressen ( #user_email# ). Du må bekrefte ønske ditt om å få en konto ved å følge instruksene i i e-posten. Dersom du ikke bekrefter ønsket om å få en konto innen 7 dager, vil ønsket om en konto bli avslått automatisk.  Dersom senere ønsker å få en ny konto, må du søke på nytt.<br /><br />Etter at du har fulgt instruksjonene i bekreftelses-e-posten, kan du logge deg inn.  For å logge deg inn på denne nettsiden, kreves det at du oppgir brukernavnrt og passordet ditt.<br /><br />";

$pgv_lang["registernew"]		= "Bekreftelse av ny konto";
$pgv_lang["user_verify"]		= "Bruker-godkjenning";
$pgv_lang["send"]				= "Send";

$pgv_lang["pls_note07"]			= "Oppgi det brukernavnet, passordet og kontrollkoden du fikk tilsendt pr. epost fra dette nettstedet som en bekreftelse på søknaden din.";
$pgv_lang["pls_note08"]			= "Informasjonen om brukeren <b>#user_name#</b> er sjekket.";

$pgv_lang["mail03_line01"]		= "Hei administrator ...";
$pgv_lang["mail03_line02"]		= "#newuser[username]# ( #newuser[fullname]# ) har bekreftet ønsket om å få en brukerkonto.";
$pgv_lang["mail03_line03"]		= "Klikk på linken \"Admin\" på siden \"Logg inn\" på PhpGedView for å godkjenne den nye brukeren på nettstedet ditt.";
$pgv_lang["mail03_line03a"]		= "Du behøver ikke forta deg noe; brukeren kan nå logge seg inn.";
$pgv_lang["mail03_subject"]		= "Ny bekreftelse fra #SERVER_NAME#";

$pgv_lang["pls_note09"]			= "Du er gjenkjent som en søker på dette nettstedet.";
$pgv_lang["pls_note10"]			= "Administratoren til nettstedet har fått beskjed om søknaden.<br />Så snart vedkommende har godkjent kontoen din,<br />kan du logge deg inn med ditt brukernavn og passord.";
$pgv_lang["pls_note10a"]		= "Du kan nå logge deg inn med brukernavnet og passordet ditt.";
$pgv_lang["data_incorrect"]		= "Data var ugyldig!<br />- Prøv igjen!";
$pgv_lang["user_not_found"]		= "Kunne ikke gjenkjenne opplysningene du oppga! Gå tilbake og prøv igjen.";

$pgv_lang["lost_pw_reset"]		= "Nytt passord";
$pgv_lang["pls_note11"]			= "For å få et nytt passord, må du oppgi brukernavnet og epost-adressen til brukerkontoen din. <br /><br />Vi vil deretter sende deg en epost med en spesiell internettadresse, som inneholder en bekreftelses-kode for kontoen din.<br />På denne internettsiden vil du kunne endre passordet for å få tilgang til brukersiden din igjen.<br />Av sikkerhetsgrunner, bør du ikke vise denne bekreftelses-koden til noen, inkludert administrator(ene) til denne siden (vi vil heller ikke spørre etter den).<br /><br />Dersom du ønsker å få mer hjelp vedrørende dette, så kontakt administrator.";

$pgv_lang["mail04_line01"]		= "Hei #user_fullname# ...";
$pgv_lang["mail04_line02"]		= "Det ble bestilt et nytt passord til brukernavnet ditt!";
$pgv_lang["mail04_line03"]		= "Anbefaling:";
$pgv_lang["mail04_line04"]		= "Vennligst klikk på linken under. Logg deg inn med det nye passordet. Du bør så angi et nytt passord for å verne om sikkerheten til dataene dine.";
$pgv_lang["mail04_line05"]		= "Etter at du har logget deg inn, velg da '#pgv_lang[myuserdata]#' i menyen '#pgv_lang[mygedview]#' og angi et nytt passord i feltet for å endre passordet ditt.";
$pgv_lang["mail04_subject"]		= "Data anmodning fra #SERVER_NAME#";

$pgv_lang["pwreqinfo"]			= "Hei...<br /><br />En epost med det nye passordet ble sendt til epost-adressen (#user[email]#).<br /><br />Vær vennlig å sjekk epost-kontoen din om noen minutter.<br /><br />Anbefaling:<br /><br />Etter at du har mottatt eposten, bør du logge deg inn på dette nettstedet med ditt nye passord og endre det. Dette bør gjøres for å verne om sikkerheten til dataene din.";

$pgv_lang["myuserdata"]			= "Min konto";
$pgv_lang["user_theme"]			= "Min stil";
$pgv_lang["mgv"]				= "Min side";
$pgv_lang["mygedview"]			= "Min GedView";
$pgv_lang["passwordlength"]		= "Passordet må inneholde minst 6 tegn.";
$pgv_lang["welcome_text_auth_mode_1"]	= "<center><h3><b>Velkommen til disse slektssidene !</b></h3>PS! - <i>Sidene er tilgjengelig for <b>alle</b> besøkende som har en brukerkonto.</i><br />Har du en brukerkonto, kan du logge deg inn under.<br /><br />Dersom du ikke har en brukerkonto enda, kan du søke om å få en<br />ved å klikke på linken \"Søke om brukerkonto\".<br />Etter å ha sjekket informasjonen i søknaden, vil administratoren til nettstedet aktivere kontoen din.<br />Du vil motta en e-post når den er godkjent.</center>";
$pgv_lang["welcome_text_auth_mode_2"]	= "<center><h3><b>Velkommen til disse slektssidene !</b></h3>PS! - <i>Sidene er <b>bare</b> tilgjengelig for <b>registrerte</b> brukere!</i><br />Har du en brukerkonto, kan du logge deg inn under.<br /><br />Dersom du ikke har en konto enda, kan søke om å få opprettet en konto<br />ved å klikke på linken \"Søke om brukerkonto\".<br />Etter å ha sjekket informasjonen i søknaden din,<br />kan administratoren til nettstedet enten godkjenne eller avslå den.<br />Du vil motta en e-post med beskjed dersom søknaden din blir akseptert.</center>";
$pgv_lang["welcome_text_auth_mode_3"]	= "<center><h3><b>Velkommen til disse slektssidene !</b></h3>PS! - <i>Sidene er <b>bare</b> tilgjengelig for <b>medlemmer av familien</b>.</i><br />Har du en brukerkonto, kan du logge deg inn under.<br /><br />Dersom du ikke har en konto enda, kan søke om å få opprettet en konto<br />ved å klikke på linken \"Søke om brukerkonto\".<br />Etter å ha sjekket informasjonen i søknaden din,<br />kan administratoren til nettstedet enten godkjenne eller avslå den.<br />Du vil motta en e-post dersom den blir godkjent.</center>";
$pgv_lang["welcome_text_cust_head"]		= "<center><h3><b>Velkommen til disse slektssidene !</b></h3>PS! - <i>Sidene er <b>bare</b> tilgjengelig for brukere som har <b>gyldig</b> brukernavn og passord.</i></center><br />";
$pgv_lang["acceptable_use"]			="<div class=\"largeError\">Viktig:</div><div class=\"error\">Ved å fylle ut og sende inn dette skjemaet, bekrefter du at du:<ul><li>beskytte privatlivets fred og pesonvernet til de levende personer som er nevnt på dette nettstedet;</li><li>og i tekstfeltet nedenfor, forklar hvem du har slektskap til,eller bidra med informasjon om hvem som skal eller bør være nevnt.</li></ul></div>";


//-- mygedview page
$pgv_lang["upcoming_events"]		= "Kommende begivenheter";
$pgv_lang["living_or_all"]			= "Vise bare hendelser for levende personer?";
$pgv_lang["basic_or_all"]			= "Vise bare fødselsdager, dødsfall og giftemål?";
$pgv_lang["style"]					="Presentasjonsstil";
$pgv_lang["style1"]					="Liste";
$pgv_lang["style2"]					="Tabell";
$pgv_lang["style3"]					="Tagcloud";
$pgv_lang["cal_download"]			="Tillat nedlasting av hendelser fra kalenderen?";
$pgv_lang["no_events_living"]		= "Fant ingen hendelser for levende personer for de neste #pgv_lang[global_num1]# dagene.";
$pgv_lang["no_events_living1"]		= "Fant ingen hendelser for levende personer for i morgen.";
$pgv_lang["no_events_all"]			= "Fant ingen hendelser for de neste #pgv_lang[global_num1]# dagene.";
$pgv_lang["no_events_all1"]			= "Fant ingen hendelser for i morgen.";
$pgv_lang["no_events_privacy"]		= "Det finnes hendelser for de neste #pgv_lang[global_num1]# dagene, men på grunn av hensyn til personvern vises ikke disse.";
$pgv_lang["no_events_privacy1"]		= "Det finnes hendelser for i morgen, men på grunn av hensyn til personvern vises ikke disse.";
$pgv_lang["more_events_privacy"]	= "<br />Det finnes flere hendelser for de neste #pgv_lang[global_num1]# dagene, men på grunn av hensyn til personvern vises ikke disse.";
$pgv_lang["more_events_privacy1"]	= "<br />Det finnes flere hendelser for i morgen, men på grunn av hensyn til personvern vises ikke disse.";
$pgv_lang["none_today_living"]		= "Fant ingen hendelser for levende personer for i dag.";
$pgv_lang["none_today_all"]			= "Fant ingen hendelser for i dag.";
$pgv_lang["none_today_privacy"]		= "Det finnes hendelser for i dag, men på grunn av hensyn til personvern vises ikke disse.";
$pgv_lang["more_today_privacy"]		= "<br />Det finnes flere hendelser for i dag, men på grunn av hensyn til personvern vises ikke disse.";
$pgv_lang["chat"]					= "Chat";
$pgv_lang["users_logged_in"]		= "Brukere som er pålogget";
$pgv_lang["anon_user"]				= "1 anonym bruker pålogget";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# anonyme brukere pålogget";
$pgv_lang["login_user"]				= "1 bruker pålogget";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# brukere pålogget";
$pgv_lang["no_login_users"]			= "Ingen brukere er pålogget";
$pgv_lang["message"]				= "Ny beskjed til ";
$pgv_lang["my_messages"]			= "Mine beskjeder";
$pgv_lang["date_created"]			= "Dato sendt:";
$pgv_lang["message_from"]			= "Epost-adresse:";
$pgv_lang["message_from_name"]		= "Ditt navn:";
$pgv_lang["message_to"]				= "Beskjed til:";
$pgv_lang["message_subject"]		= "Emne:";
$pgv_lang["message_body"]			= "Din beskjed:";
$pgv_lang["no_to_user"]				= "Det ble ikke oppgitt en annen bruker som mottaker. - Kan ikke fortsette.";
$pgv_lang["provide_email"]			= "Dersom du vil ha en tilbakemelding på denne henvendelsen, må du oppgi epost-adressen din.<br />Hvis ikke, har vi ikke mulig til å besvare denne forespørselen.<br />PS. Epost-adressen din vil ikke bli brukt til annet enn å besvare denne forespørselen.";
$pgv_lang["reply"]					= "Svar";
$pgv_lang["message_deleted"]		= "Beskjed slettet";
$pgv_lang["message_sent"]			= "Beskjed sendt";
$pgv_lang["reset"]					= "Vanlig størrelse / oppsett";
$pgv_lang["site_default"]			= "Standard på siden";
$pgv_lang["mygedview_desc"]			= "Dette er <i>din side</i> der du kan velge egne <i>favoritter</i>, bli påminnet om <i>kommende begivenheter</i> og <i>samarbeide med andre brukere</i>.";
$pgv_lang["no_messages"]			= "Det er ingen beskjeder til deg.";
$pgv_lang["clicking_ok"]			= "Ved å klikke på OK, åpnes det et nytt vindu, der du kan kontakte #user[fullname]#";
$pgv_lang["favorites"]				= "Favoritter";
$pgv_lang["my_favorites"]			= "Mine favoritter";
$pgv_lang["no_favorites"]			= "<i>Du har ikke valgt noen favoritter enda!</i><br />For å legge til en person til dine favoritter, kan du enten finne siden med fakta om personen og så klikke på linken <br />\"Legg til i Mine favoritter\" eller bruk ID-feltet under for å legge til en person ved hjelp av personens ID-nummer.";
$pgv_lang["add_to_my_favorites"] 	= "Legg til i Mine favoritter";
$pgv_lang["gedcom_favorites"]	 	= "Favoritter i denne slektsbasen";
$pgv_lang["no_gedcom_favorites"] 	= "Det er ikke valgt noen Favoritter enda.  Det er administrator som kan legge til personer her, slik at disse vises ved oppstart.";
$pgv_lang["confirm_fav_remove"]		= "Er du sikker på at du vil fjerne denne personen fra favorittene dine?";
$pgv_lang["invalid_email"]			= "Tast inn en gyldig epost-adresse.";
$pgv_lang["enter_subject"]			= "Tast inn en tekst i feltet for emne.";
$pgv_lang["enter_body"]				= "Skriv inn en beskjed / tekst før den sendes.";
$pgv_lang["confirm_message_delete"]	= "Er du sikker på du vil slette denne beskjeden? Når den er slettet, kan den ikke hentes tilbake igjen.";
$pgv_lang["message_email1"]			= "Følgende beskjed ble sendt til kontoen din i PhpGedView fra ";
$pgv_lang["message_email2"]			= "Du sendte følgende beskjed til en bruker av PhpGedView:";
$pgv_lang["message_email3"]			= "Du sendte følgende beskjed til administratoren av PhpGedView:";
$pgv_lang["viewing_url"]			= "Denne beskjed ble sendt da du var på følgende url: ";
$pgv_lang["messaging2_help"]		= "Når du sender denne beskjeden, vil du også motta en kopi til den epost-adressen din som du har oppgitt.";
$pgv_lang["random_picture"]			= "Tilfeldig utvalgt bilde / medie";
$pgv_lang["message_instructions"]	= "<b>PS:</b> Privat informasjon om levende personer vil bare bli gitt til slektninger og nære venner.  Du vil bli spurt om å bekrefte din tilknytning / slektskap før du vil få se private data.  Av og til kan informasjon om døde personer også være private.  Hvis dette er tilfelle, er det på grunn av at det ikke funnet nok informasjon om personen til å avgjøre om vedkommende lever eller ikke, eller andre opplysninger om personen.<br /><br />Før du gjør en foresprsel, vennligst sjekk opp at det er riktig person ved å se på datoer, steder og nære slektninger.  Dersom du legger inn endringer i slektsdataene, vær vennlig å oppgi kildene der du fant dataene.<br /><br />";
$pgv_lang["sending_to"]				= "- Beskjeden vil bli sendt til #TO_USER#";
$pgv_lang["preferred_lang"]	 		= "- som ønsker at du skriver beskjeden på #USERLANG#<br />";
$pgv_lang["gedcom_created_using"]	= "Denne slektsfila (GEDCOM) ble laget med <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]		= "Denne slektsfila (GEDCOM) ble laget den <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_created_on2"] 	= " den <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]			= "Statistikk for slektsbasen";
$pgv_lang["stat_individuals"]		= "Personer";
$pgv_lang["stat_families"]			= "Familier";
$pgv_lang["stat_sources"]			= "Kilder";
$pgv_lang["stat_other"]				= "Andre oppføringer";
$pgv_lang["stat_earliest_birth"] 	= "Tidligste fødselsår";
$pgv_lang["stat_latest_birth"] 		= "Siste fødselsår";
$pgv_lang["stat_earliest_death"] 	= "Tidligste dødsår";
$pgv_lang["stat_latest_death"] 		= "Siste dødsår";
$pgv_lang["customize_page"]			= "Endre <i>din egen</i> side";
$pgv_lang["customize_gedcom_page"]	= "Endre hovedsiden til denne slektsbasen";
$pgv_lang["upcoming_events_block"]	= "Rammen Kommende begivenheter";
$pgv_lang["upcoming_events_descr"]	= "Rammen for kommende begivenheter viser en liste med begivenheter i den aktive slektsfilen som vil skje de neste 30 dagene.  For en bruker vil denne rammen bare vise levende personer.  På hovedsiden vil alle personer/familier bli vist (NB. Her vil personvern-valg kunne redusere listen).";
$pgv_lang["todays_events_block"]	= "Rammen Årsdag for hendelser i slekten";
$pgv_lang["todays_events_descr"]	= "Rammen for Årsdag for hendelser viser en personliste som er knyttet til hendelser i den aktive slektsfilen dagen i dag.  Dersom det ikke er noen hendelser, vises heller ikke rammen.  På \"din\" GedView side vil denne rammen bare vise levende personer.  På hovedsiden vil alle personer / familier bli vist (NB. Her vil personvern-valg kunne redusere listen).";
$pgv_lang["todo_block"] = "&quot;Skulle ha gjort&quot;-gjøremål";
$pgv_lang["todo_descr"] = "Skulle ha gjort-blokka lister alle utestående _TODO fakta i databasen.";
$pgv_lang["todo_show_other"]     = "Vis andre brukeres gjøremål";
$pgv_lang["todo_show_unassigned"]= "Vis utilegnede gjøremål";
$pgv_lang["todo_show_future"]    = "Vis fremtidige gjøremål";
$pgv_lang["todo_nothing"]        = "Det er ingen &quot;Skulle ha gjort&quot;-gjøremål.";
$pgv_lang["yahrzeit_block"]			= "Kommende Yahrzeiten";
$pgv_lang["yahrzeit_descr"]			= "Blokka Kommende Yahrzeiten viser årsdager for dødsdatoer som inntreffer i nær framtid.  Du kan konfigurere tiden fram, og administratoren kan konfigurere hvor langt inn i framtida denne blokka skal vise.";
$pgv_lang["logged_in_users_block"]	= "Rammen Brukere som er logget inn";
$pgv_lang["logged_in_users_descr"]	= "Rammen for brukere som er logget inn, viser en liste med bruker som er logget inn på det gjeldende tidspunktet...";
$pgv_lang["user_messages_block"]	= "Rammen Bruker-beskjeder";
$pgv_lang["user_messages_descr"]	= "Rammen for bruker-beskjeder viser en liste med beskjeder som har blitt sendt til de aktive brukerne.";
$pgv_lang["user_favorites_block"]	= "Rammen Brukeres favoritter-personer";
$pgv_lang["user_favorites_descr"]	= "Rammen for brukeres Favoritter viser en liste med deres egne \"favoritt-personer\" i slekten slik at de lett kan finnes igjen.";
$pgv_lang["welcome_block"]			= "Rammen Bruker/eier-info";
$pgv_lang["welcome_descr"]			= "Rammen for brukeres egen siden viser brukeren, gjeldende dato og tid, hurtiglinker for endre egen konto eller å gå til deres eget slektstre, og en link for å tilpasse egen siden.";
$pgv_lang["random_media_block"]		= "Rammen Tilfeldig utvalgt bilde- / mediefil";
$pgv_lang["random_media_descr"]		= "Rammen for tilfeldig viste bilde / mediefil velger et tilfeldig foto eller annet medie-objekt i den aktive slektsbasen og viser det til brukeren.";
$pgv_lang["random_media_persons_or_all"]	= "Vise bare personer, hendelser eller alle?";
$pgv_lang["random_media_persons"]	= "Personer";
$pgv_lang["random_media_events"]	= "Hendelser";
$pgv_lang["gedcom_block"]			= "Rammen Slektsbase-info";
$pgv_lang["gedcom_descr"]			= "Rammen for informasjon virker på samme måte som den enkelte brukers velkomstmelding, ved at besøkende på siden ønskes velkommen, viser tittelen på standard aktive slektsfil og gjeldende dato og tid.";
$pgv_lang["gedcom_favorites_block"]	= "Rammen Favoritter i slektsbasen";
$pgv_lang["gedcom_favorites_descr"]	= "Rammen for Favoritter gir administrator på nettstedet muligheten til å velge ut noen sentrale personer i slektsfilen som vil være av interesse for de fleste besøkende. På den måten kan de lett finne disse favoritt-personene og er en måte å fremheve disse personene som sentrale i slekthistorien.";
$pgv_lang["gedcom_stats_block"]		= "Rammen Statistikk for slektsbasen";
$pgv_lang["gedcom_stats_descr"]		= "Rammen for statistikk viser besøkende en del basis-informasjon om slektsfilen, slik som når den ble lagd og hvor mange personer, familier og kilder som finnes i slektsbasen.<br /><br />Den har også en liste med de etternavnene som er registrert flest ganger i slektsbasen.  Du kan velge om du vil vise disse etternavnene i rammen eller ikke.<br />Du kan også velge at visse navn ikke skal vises i listen eller legge legge til navn som du mener bør være med (selv om de ikke fyller kravet om å være med i listen).<br />Du kan angi antall ganger et navn må være registrert for å vises i listen i konfigurasjonsfilen for slektsbasen.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Vise Mest brukte etternavn?";
$pgv_lang["portal_config_intructions"]	= "Her kan du tilpasse siden ved å bestemme hvor de ulike rammene på siden skal plasseres.<br />Siden er delt opp i to seksjoner, 'Hoved'-seksjonen og 'Høyre' seksjon.<br />'Hoved'-seksjonen er tildelt en større bredde og kommer under velkomsttittel på siden.<br />Den 'høyre' seksjonen begynner til høyre for tittelen og fremstår som en mer hurtiginformasjons-blokk.<br />Hver seksjon har sin egen liste med rammer som vil bli vist på siden i den rekkefølgen som de er listet.<br />Du kan legge til, fjerne og omorganisere rammene slik du ønsker det.<br /><br />Dersom listen for en av seksjonene er tom, vil de andre rammene bruke hele bredden på siden.<br /><br />";
$pgv_lang["login_block"]			= "Rammen Logg inn";
$pgv_lang["login_descr"]			= "Rammen for 'Logg inn' skriver et brukernavn og passord for brukere slik at de kan logg seg inn.";
$pgv_lang["theme_select_block"]		= "Rammen Velg stil";
$pgv_lang["theme_select_descr"]		= "Rammen for stilvalg viser valgfeltet for ønsket stil selv om valget for å bytte stil ikke er aktivert.";
$pgv_lang["block_top10_title"]		= "Mest viste etternavn";
$pgv_lang["block_top10"]			= "Rammen Topp 10 etternavn";
$pgv_lang["block_top10_descr"]		= "Rammen viser en tabell med de 10 mest viste etternavnene i slektsbasen";
$pgv_lang["block_givn_top10_title"]		= "Topp 10 fornavn";
$pgv_lang["block_givn_top10"]			= "Topp 10 fornavn";
$pgv_lang["block_givn_top10_descr"]		= "Denne blokka viser en tabell av de 10 mest brukte fornavn i databasen.  Antallet fornavn som skal vises i denne blokka er konfigurerbart.";
$pgv_lang["gedcom_news_block"]		= "Rammen Nyheter for slektsbasen";
$pgv_lang["gedcom_news_descr"]		= "Nyhetsrammen viser besøkende siste nytt eller artikler lagt inn av en bruker med administrator-rettigheter.<br />Rammen er et fint sted å bekjentgjøre oppdatering av slektsbasen eller et slektstevne.";
$pgv_lang["gedcom_news_limit"]		= "Nyheter utløper:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Aldri";
$pgv_lang["gedcom_news_limit_date"]		= "Alder på artikkel";
$pgv_lang["gedcom_news_limit_count"]	= "Antall artikler";
$pgv_lang["gedcom_news_flag"]		= "Grense:";
$pgv_lang["gedcom_news_archive"] 	= "Vis arkiv";
$pgv_lang["user_news_block"]		= "Rammen Notatblokk for bruker";
$pgv_lang["user_news_descr"]		= "Rammen med en notatblokk lar den enkelte bruker legge inn notater eller som en online-oppslagstavle.";
$pgv_lang["my_journal"]				= "Min notatblokk";
$pgv_lang["no_journal"]				= "Du har ikke laget noen notater enda.";
$pgv_lang["confirm_journal_delete"]	= "Er du sikker på at du vil slette dette notatet?";
$pgv_lang["add_journal"]			= "Legg inn et nytt notat";
$pgv_lang["gedcom_news"]			= "Nyheter";
$pgv_lang["confirm_news_delete"]	= "Er du sikker på at du vil slette denne nyhetsartiklen?";
$pgv_lang["add_news"]				= "Legg inn et nyhetsinnlegg";
$pgv_lang["no_news"]				= "Ingen nyhetsartikler er blitt lagt inn...!";
$pgv_lang["edit_news"]				= "Legg til / endre notat- / nyhetsinnlegg";
$pgv_lang["enter_title"]			= "Du må oppgi en tittel.";
$pgv_lang["enter_text"]				= "Du må legg inn en tekst for dette nyhets- eller notatblokk-innlegget.";
$pgv_lang["news_saved"]				= "Nyhets- / Notablokkinnlegg er lagret...!";
$pgv_lang["article_text"]			= "Sett inn tekst:";
$pgv_lang["main_section"]			= "Hoved seksjons-rammer";
$pgv_lang["right_section"]			= "Høyre seksjons-rammer";
$pgv_lang["available_blocks"]		= "Tilgjengelige rammer";
$pgv_lang["move_up"]				= "Flytt opp";
$pgv_lang["move_down"]				= "Flytt ned";
$pgv_lang["move_right"]				= "Flytt til høyre";
$pgv_lang["move_left"]				= "Flytt til venstre";
$pgv_lang["broadcast_all"]			= "Send til alle brukere";
$pgv_lang["hit_count"]				= "Antall treff:";
$pgv_lang["phpgedview_message"]		= "PhpGedView beskjed";
$pgv_lang["common_surnames"]		= "Mest brukte etternavn";
$pgv_lang["default_news_title"]		= "Velkommen til disse slektssidene";
$pgv_lang["default_news_text"]		= "Informasjon om slekten(e) på dette nettstedet blir vist ved hjelp av <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a><br />Sidene gir deg et innblikk og en oversikt over denne slekten/slektssamlingen.<br />Som en start, kan du velge personlisten på menyen, et av diagrammene eller søke etter et navn eller et sted.<br /><br />Dersom det er noe du ikke forstår på en side, sjekk Hjelp i menyen!<br />Der vil du til enhver tid få informasjon om den siden du er på.<br /><br /><b><i>Takk for at du besøker dette nettstedet.</i></b>";
$pgv_lang["reset_default_blocks"]	= "Tilbakestill til standardrammer";
$pgv_lang["recent_changes"]			= "Siste endringer";
$pgv_lang["recent_changes_block"]	= "Rammen Siste endringer";
$pgv_lang["recent_changes_descr"]	= "Rammen <i>Siste endringer</i> vil vise en liste med alle endringer som er gjort i slektsbasen/-filen den siste måneden.  Denne rammen kan hjelpe deg til å holde deg oppdatert med de endringene som er gjort.  Endringene som vises er knyttet til CHAN-merket (tag).";
$pgv_lang["recent_changes_none"]	= "<b>Det har ikke vært gjort noen endringer de siste #pgv_lang[global_num1]# dagene.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Endringer gjort de siste #pgv_lang[global_num1]# dagene</b><br />";
$pgv_lang["show_empty_block"]		= "Ikke vise denne rammen dersom den er tom?";
$pgv_lang["hide_block_warn"]		= "Dersom du velger å ikke vise en tom ramme, vil du heller ikke kunne endre oppsettet for rammen før den vises igjen ved at den ikke lenger er tom.";
$pgv_lang["delete_selected_messages"]	= "Slett beskjeder som er merket";
$pgv_lang["use_blocks_for_default"]	= "Bruke dette ramme-oppsettet som standard for alle brukere?";
$pgv_lang["block_not_configure"]	=	"Denne rammen har ingen valgmuligheter.";

//-- validate GEDCOM
$pgv_lang["add_media_tool"]			= "Lage koblinger til bilder / andre medier i slektsfilen";

//-- hourglass chart
$pgv_lang["hourglass_chart"]	= "Timeglass";

//-- report engine
$pgv_lang["choose_report"]		= "Velg rapport";
$pgv_lang["enter_report_values"]	= "Oppsett for rapport";
$pgv_lang["selected_report"]	= "Valgt rapport";
$pgv_lang["select_report"]		= "Neste >>";
$pgv_lang["download_report"]	= "Lagre rapport";
$pgv_lang["reports"]			= "Rapporter";
$pgv_lang["pdf_reports"]		= "PDF rapporter";
$pgv_lang["html_reports"]		= "HTML rapporter";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Forfedre";
$pgv_lang["ahnentafel_header"]		= "Forfedre til ";
$pgv_lang["ahnentafel_generation"]	= "Generasjon ";
$pgv_lang["ahnentafel_pronoun_m"]	= "Han ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Hun ";
$pgv_lang["ahnentafel_born_m"]		= "ble født";			// male
$pgv_lang["ahnentafel_born_f"]		= "ble født";			// female
$pgv_lang["ahnentafel_christened_m"] = "ble døpt";			// male
$pgv_lang["ahnentafel_christened_f"] = "ble døpt";			// female
$pgv_lang["ahnentafel_married_m"]	= "ektet";				// male
$pgv_lang["ahnentafel_married_f"]	= "ektet";				// female
$pgv_lang["ahnentafel_died_m"]		= "døde";				// male
$pgv_lang["ahnentafel_died_f"]		= "døde";				// female
$pgv_lang["ahnentafel_buried_m"]	= "ble gravlagt";		// male
$pgv_lang["ahnentafel_buried_f"]	= "ble gravlagt";		// female
$pgv_lang["ahnentafel_place"]		= " i/på ";				// place name follows this
$pgv_lang["ahnentafel_no_details"]	= " men detaljene er ukjent";

//-- Changes report
$pgv_lang["changes_report"]		= "Endringsrapport";
$pgv_lang["changes_pending_tot"]	= "Antall endringer til godkjenning: ";
$pgv_lang["changes_accepted_tot"]	= "Antall aksepterte endringer: ";

//-- Descendancy report
$pgv_lang["descend_report"]		= "Etterkommere";
$pgv_lang["descendancy_header"]	= "Etterkommere til ";

$pgv_lang["family_group_report"]	= "Familie";
$pgv_lang["page"]				= "Side";
$pgv_lang["of"]					= "av";
$pgv_lang["enter_famid"]		= "Angi FamilieID";
$pgv_lang["show_sources"]		= "Vise kilder?";
$pgv_lang["show_notes"]			= "Vise noter?";
$pgv_lang["show_basic"]			= "Skriv ut de vanligste hendelsene<br />&nbsp;&nbsp;&nbsp;- selv om disse er tomme?";
$pgv_lang["show_photos"]		= "Vise bilder?";
$pgv_lang["relatives_report_ext"]	= "Mange slektninger";
$pgv_lang["with"]				= "med";
$pgv_lang["on"]					= "den";			// for precise dates
$pgv_lang["in"]					= "i";			// for imprecise dates
$pgv_lang["individual_report"]	= "Person";
$pgv_lang["enter_pid"]			= "Angi PersonID";
$pgv_lang["generated_by"]		= "Laget av";
$pgv_lang["list_children"]		= "(Sortert etter alder)";
$pgv_lang["birth_report"]		= "Fødselsdato og -sted";
$pgv_lang["birthplace"]			= "Fødested inneholder ";
$pgv_lang["birthdate1"]			= "Vis fødte <b>fra</b> dato ";
$pgv_lang["birthdate2"]			= "Vis fødte <b>til</b> dato ";
$pgv_lang["death_report"]		= "Dødsdato og -sted";
$pgv_lang["deathplace"]			= "Dødssted inneholder ";
$pgv_lang["deathdate1"]			= "Vis døde <b>fra</b> dato";
$pgv_lang["deathdate2"]			= "Vis døde <b>til</b> dato ";
$pgv_lang["marr_report"]		= "Ekteskapdato og -sted";
$pgv_lang["marrplace"]			= "Ekteskapsted inneholder ";
$pgv_lang["marrdate1"]			= "Vis ekteskap <b>fra</b> dato ";
$pgv_lang["marrdate2"]			= "Vis ekteskap <b>til</b> dato ";
$pgv_lang["sort_by"]			= "Sortert på ";

$pgv_lang["cleanup"]			= "Rydd";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["statistics"]			= "Statistikk";
$pgv_lang["show_stats_charts"]		= "Vis statistiske diagrammer";
$pgv_lang["decade_birth"]			= "Tiår for fødsel";
$pgv_lang["decade_death"]			= "Tiår for død";
$pgv_lang["decade_marriage"]		= "Tiår for ekteskap";
$pgv_lang["avg_age"]				= "Gjennomsnittlig alder";

//-- Merge Records
$pgv_lang["merge_same"]			= "Dataene er ikke av samme type.  Kan ikke flette data som er av forskjellig type!";
$pgv_lang["merge_step1"]		= "Flettesteg 1 av 3";
$pgv_lang["merge_step2"]		= "Flettesteg 2 av 3";
$pgv_lang["merge_step3"]		= "Flettesteg 3 av 3";
$pgv_lang["select_gedcom_records"]	= "Velg 2 oppføringer i slektsbasen som skal flettes.  Oppføringene må være av samme type.";
$pgv_lang["merge_to"]			= "Flett til ID:";
$pgv_lang["merge_from"]			= "Flett fra ID:";
$pgv_lang["merge_facts_same"]	= "Følgende fakta /opplysninger er nøyaktig like i begge oppføringer og vil bli flettet automatisk";
$pgv_lang["no_matches_found"]	= "Fant ingen like fakta-felt";
$pgv_lang["unmatching_facts"]	= "Følgende faktafelt har forskjellig innhold.  Velg de opplysningene du ønsker å beholde.";
$pgv_lang["record"]				= "Oppføring";
$pgv_lang["adding"]				= "Legger til";
$pgv_lang["updating_linked"]	= "Oppdaterer data som er knyttet til denne";
$pgv_lang["merge_more"]			= "Flette flere oppføringer.";
$pgv_lang["same_ids"]			= "Du oppgav to like IDer.  Du kan ikke flette en oppføring med seg selv.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"]		= "Forfedre";
$pgv_lang["gen_ancestry_chart"]	= "Forfedre - #PEDIGREE_GENERATIONS# slektsledd";
$pgv_lang["chart_style"]		= "Utforming";
$pgv_lang["chart_list"]			= "Forfedre";
$pgv_lang["chart_booklet"]   	= "Hefte";
$pgv_lang["show_cousins"]		= "Vis søskenbarn";
// 1st generation
$pgv_lang["sosa_2"]					="Far";
$pgv_lang["sosa_3"]					="Mor";
// 2nd generation
$pgv_lang["sosa_4"]					="Farfar";
$pgv_lang["sosa_5"]					="Farmor";
$pgv_lang["sosa_6"]					="Morfar";
$pgv_lang["sosa_7"]					="Mormor";
// 3rd generation
$pgv_lang["sosa_8"]					="Oldefar";
$pgv_lang["sosa_9"]					="Oldemor";
$pgv_lang["sosa_10"]				="Oldefar";
$pgv_lang["sosa_11"]				="Oldemor";
$pgv_lang["sosa_12"]				="Oldefar";
$pgv_lang["sosa_13"]				="Oldemor";
$pgv_lang["sosa_14"]				="Oldefar";
$pgv_lang["sosa_15"]				="Oldemor";
// 4th generation
$pgv_lang["sosa_16"] 				="Tippoldefar";
$pgv_lang["sosa_17"] 				="Tippoldemor";
$pgv_lang["sosa_18"] 				="Tippoldefar";
$pgv_lang["sosa_19"] 				="Tippoldemor";
$pgv_lang["sosa_20"] 				="Tippoldefar";
$pgv_lang["sosa_21"] 				="Tippoldemor";
$pgv_lang["sosa_22"] 				="Tippoldefar";
$pgv_lang["sosa_23"] 				="Tippoldemor";
$pgv_lang["sosa_24"] 				="Tippoldefar";
$pgv_lang["sosa_25"] 				="Tippoldemor";
$pgv_lang["sosa_26"] 				="Tippoldefar";
$pgv_lang["sosa_27"] 				="Tippoldemor";
$pgv_lang["sosa_28"] 				="Tippoldefar";
$pgv_lang["sosa_29"] 				="Tippoldemor";
$pgv_lang["sosa_30"] 				="Tippoldefar";
$pgv_lang["sosa_31"] 				="Tippoldemor";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_female_n_generations"]	="%3\$d x tippoldefar";
$pgv_lang["sosa_paternal_male_n_generations"]	="%3\$d x tippoldemor";
$pgv_lang["sosa_maternal_female_n_generations"]	="%3\$d x tippoldefar";
$pgv_lang["sosa_maternal_male_n_generations"]	="%3\$d x tippoldemor";

//-- FAN CHART
$pgv_lang["compact_chart"]		= "Kompakt";
$pgv_lang["fan_chart"]			= "Sirkel";
$pgv_lang["gen_fan_chart"]		= "Sirkeldiagram - #PEDIGREE_GENERATIONS# slektsledd";
$pgv_lang["fan_width"]			= "Bredde";
$pgv_lang["gd_library"]			= "Ugyldig konfigurasjon av PHP server: Biblioteket GD 2.x er nødvendig for bilde-funksjonen.";
$pgv_lang["gd_freetype"]		= "Ugyldig konfigurasjon av PHP server: Biblioteket Freetype er nødvendig for TrueType skrifttyper.";
$pgv_lang["gd_helplink"]		= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]		= "Fant ikke nødvendige filer med skrifttyper på PHP serveren";
$pgv_lang["fanchart_IE"]		= "Dette slekts-hjulet kan ikke bli skrevet ut direkte fra din nettleser. Bruk høyre-klikk og velg så Lagre bilde. Så må du åpne bilde i et annet program for så å skrive det ut derfra.";

//-- RSS Feed
$pgv_lang["rss_descr"]			= "Nyheter og lenker fra nettstedet #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]		= "Oppføringen er laget av PhpGedView #VERSION#";
$pgv_lang["rss_feeds"]			= "RSS lenker";
$pgv_lang["no_feed_title"]		= "Ingen lenker tilgjengelig";
$pgv_lang["no_feed"]			= "Det er ingen RSS-lenker tilgjengelig på dette PhpGedView-nettstedet";
$pgv_lang["feed_login"]			= "Dersom du har en konto på dette PhpGedView-nettstedet, kan du <a href=\"#AUTH_URL#\">logge deg inn</a> på tjeneren som bruker enkel HTTP-autorisering for å se private opplysninger.";
$pgv_lang["authenticated_feed"]		="Autentisert Feed";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] 			= "Deltagere";
$pgv_lang["attending"] 			= "Observatør";
$pgv_lang["best_man"] 			= "Forlover til brudgomen";
$pgv_lang["bridesmaid"] 		= "Forlover til bruden";
$pgv_lang["buyer"] 				= "Kjøper";
$pgv_lang["circumciser"]		= "Omskjærer";
$pgv_lang["civil_registrar"] 	= "Sorenskriver";
$pgv_lang["employee"] 			= "Arbeidstaker";
$pgv_lang["employer"] 			= "Arbeidgiver";
$pgv_lang["friend"] 			= "Venn";
$pgv_lang["godfather"] 			= "Fadder/Gudfar";
$pgv_lang["godmother"] 			= "Fadder/Gudmor";
$pgv_lang["godparent"] 			= "Gudforeldre";
$pgv_lang["godson"]		= "Fadderbarn";
$pgv_lang["goddaughter"] = "Fadderbarn";
$pgv_lang["godchild"]	= "Fadderbarn/Gudbarn";
$pgv_lang["informant"] 			= "Informant";
$pgv_lang["lodger"] 			= "Losjerende";
$pgv_lang["nurse"] 				= "Pleier";
$pgv_lang["owner"] 				= "Eier";
$pgv_lang["priest"]				= "Prest";
$pgv_lang["rabbi"] 				= "Rabbi";
$pgv_lang["registry_officer"] 	= "Sorenskriver";
$pgv_lang["seller"] 			= "Selger";
$pgv_lang["servant"] 			= "Tjener";
$pgv_lang["slave"] 				= "Slave";
$pgv_lang["twin"] 				= "Tvilling";
$pgv_lang["twin_brother"] 		= "Tvillingbror";
$pgv_lang["twin_sister"] 		= "Tvillingsøster";
$pgv_lang["witness"] 			= "Vitne";

//-- statistics utility
$pgv_lang["statutci"]			= "klarte ikke å lage indeks";
$pgv_lang["statnnames"]         = "antall navn";
$pgv_lang["statnfam"]           = "antall familier";
$pgv_lang["statnmale"]          = "antall menn";
$pgv_lang["statnfemale"]        = "antall kvinner";
$pgv_lang["stat_sindi"]			= "Personer med kilder";
$pgv_lang["stat_sfam"]			= "Familier med kilder";
$pgv_lang["statvars"]			= "Fyll inn følgende variabler for diagrammet";
$pgv_lang["statlxa"]			= "langs x-aksen:";
$pgv_lang["statlya"]			= "langs y-aksen:";
$pgv_lang["statlza"]			= "langs z-aksen";
$pgv_lang["map_type"]			= "Karttype";
$pgv_lang["stat_1_map"]			= "Personfordelingn";
$pgv_lang["stat_2_map"]			= "Fødsler pr. land";
$pgv_lang["stat_3_map"]			= "Dødsfall pr. land";
$pgv_lang["stat_4_map"]			= "Ekteskap sorter på land";
$pgv_lang["stat_8_fam"]			= "Familier med kilder";
$pgv_lang["stat_9_indi"]		= "Personer med kilder";
$pgv_lang["stat_10_none"]		= "ingen";
$pgv_lang["stat_11_mb"]			= "Fødselsmåned";
$pgv_lang["stat_12_md"]			= "Dødsmåned";
$pgv_lang["stat_13_mm"]			= "Måned for vielse";
$pgv_lang["stat_14_mb1"]		= "Fødselsmåned til første barn i et forhold";
$pgv_lang["stat_15_mm1"]		= "Måned for første eksteskap";
$pgv_lang["stat_16_mmb"]		= "Måneder mellom ekteskap og første barn";
$pgv_lang["stat_17_arb"]		= "Alder i forhold til fødeår";
$pgv_lang["stat_18_ard"]		= "Alder i forhold til dødsår";
$pgv_lang["stat_19_arm"]		= "Alder i vielsesåret";
$pgv_lang["stat_20_arm1"]		= "Alder i året for første ekteskap";
$pgv_lang["stat_21_nok"]		= "Antall barn";
$pgv_lang["stat_200_none"]		= "alle (eller blank)";
$pgv_lang["stat_201_num"]		= "nummer";
$pgv_lang["stat_202_perc"]		= "prosent";
$pgv_lang["stat_300_none"]		= "ingen";
$pgv_lang["stat_301_mf"]		= "kjønn";
$pgv_lang["stat_302_cgp"]		= "datoperioder";
$pgv_lang["statar_xgp"]			= "grenseverdi for perioder:";
$pgv_lang["statar_xgl"]			= "grenseverdi for alder:";
$pgv_lang["statar_xgm"]			= "grenseverdi for måneder:";
$pgv_lang["statar_xga"]			= "grenseverdi for tall:";
$pgv_lang["statar_zgp"]			= "grenseverdi for datoperioder:";
$pgv_lang["less"]				= "mindre enn";
$pgv_lang["over"]				= "over";
$pgv_lang["interval"]			    = "intervall";
$pgv_lang["aft_marr"]			= "måneder etter vielse";
$pgv_lang["bef_marr"]			= "måneder før vielse";
$pgv_lang["quarters"]			= "kvartaler etter vielse";
$pgv_lang["half_year"]			= "halvår etter vielse";
$pgv_lang["one_child"]			= "intervall ett barn";
$pgv_lang["two_children"]		= "intervall to barn";
$pgv_lang["statreset"]			= "Nullstill";
$pgv_lang["statsubmit"]			= "Vis diagram";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistisk graf";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplinfo"]			= "diagram-informasjon:";
$pgv_lang["stpltype"]			= "type:";
$pgv_lang["stplnoim"]			= " ikke tilgjengelig:";
$pgv_lang["stplmf"]			 	= " / mann-kvinne";
$pgv_lang["stplipot"]			= " / per tidsperiode";
$pgv_lang["stplmonth"]			= "måned";
$pgv_lang["stplnumbers"]		= "antall for en familie";
$pgv_lang["stplnuch"]			= "barn";
$pgv_lang["stplage"]			= "alder";
$pgv_lang["stplperc"]			= "prosent";
$pgv_lang["stplnumof"]			= "Antall ";
$pgv_lang["stplmarrbirth"]		= "Måneder mellom ekteskap og fødselsdato til første barn";
$pgv_lang["indi_distribution_chart"]	= "Personfordelingsdiagram";
$pgv_lang["surname_distribution_chart"]	= "Fordeling av etternavn-diagram";
$pgv_lang["g_chart_high"]		= "Høyeste befolkning";
$pgv_lang["g_chart_low"]		= "Laveste befolkning";
$pgv_lang["g_chart_nobody"]		= "Ingen";
$pgv_lang["area_chart"]			= "GeograSK område";
$pgv_lang["europe_chart"]		= "Europa";
$pgv_lang["s_america_chart"]	= "Sør-Amerika";
$pgv_lang["asia_chart"]			= "Asia";
$pgv_lang["middle_east_chart"]	= "Midtøsten";
$pgv_lang["africa_chart"]		= "Afrika";
$pgv_lang["world_chart"]		= "Verden";

//-- alive in year
$pgv_lang["alive_in_year"]		= "Levde i året...";
$pgv_lang["is_alive_in"]		= "<i>Levde i året&nbsp;&nbsp;#YEAR#</i>";
$pgv_lang["alive"]				= "Levende ";
$pgv_lang["dead"]				= "Død ";
$pgv_lang["maybe"]				= "Kanskje ";
$pgv_lang["both_alive"]				="Begge i live";
$pgv_lang["both_dead"]				="Begge døde";

//-- Help system
$pgv_lang["definitions"]		= "Definisjoner";

//-- Index_edit
$pgv_lang["block_desc"]			= "Beskrivelse av rammer";
$pgv_lang["click_here"]			= "Klikk her for å fortsette";
$pgv_lang["click_here_help"]	= "~#pgv_lang[click_here]#~<br /><br />Klikk på denne knappen for godkjenne endringer du har lagret tidligere.";
$pgv_lang["block_summaries"]	= "~#pgv_lang[block_desc]#~<br /><br />Her er en kort beskrivelse for hver av de rammene du har valgt for sidene #pgv_lang[welcome]# eller #pgv_lang[mygedview]#.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]	= "&nbsp;";

//-- Find page
$pgv_lang["total_places"]		= "steder funnet";
$pgv_lang["media_contains"]		= "Media inneholder:";
$pgv_lang["repo_contains"]		= "Oppbevaringsstedet inneholder:";
$pgv_lang["source_contains"]	= "Kilde inneholder:";
$pgv_lang["display_all"]		= "Vis alle";

// FAQ Page
$pgv_lang["add_faq_header"]		= "Tittel spørsmål & svar";
$pgv_lang["add_faq_body"]		= "Tekst spørsmål & svar";
$pgv_lang["add_faq_order"]		= "Plassering spørsmål & svar";
$pgv_lang["add_faq_visibility"]		="FAQ visning";
$pgv_lang["no_faq_items"]		= "Listen med spørsmål & svar er tom.";
$pgv_lang["position_item"]		= "Plassering";
$pgv_lang["faq_list"]			= "Spørsmål & svar";
$pgv_lang["confirm_faq_delete"] = "Er du sikker på at du vil slette dette spørsmål & svar";
$pgv_lang["preview"]			= "Forhåndsvis";
$pgv_lang["no_id"]				= "Ingen spørsmål & svar-ID er angitt !";

// Help search
$pgv_lang["hs_title"] 			= "Søk i hjelpetekst";
$pgv_lang["hs_search"] 			= "Søk";
$pgv_lang["hs_close"] 			= "Lukk vindu";
$pgv_lang["hs_results"] 		= "Resultat funnet:";
$pgv_lang["hs_keyword"] 		= "Søk etter";
$pgv_lang["hs_searchin"]		= "Søk i";
$pgv_lang["hs_searchuser"]		= "Brukerhjelp";
$pgv_lang["hs_searchmodules"]		="Modulhjelp";
$pgv_lang["hs_searchconfig"]	= "Administrator-hjelp";
$pgv_lang["hs_searchhow"]		= "Søketype";
$pgv_lang["hs_searchall"]		= "Alle ord";
$pgv_lang["hs_searchany"]		= "Vilkårlige ord";
$pgv_lang["hs_searchsentence"]	= "Nøyaktig";
$pgv_lang["hs_intruehelp"]		= "Bare i hjelpetekst";
$pgv_lang["hs_inallhelp"]		= "All tekst";

// Media import
$pgv_lang["choose"]				 = "Velg: ";
$pgv_lang["account_information"] = "Konto-informasjon";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"]		= "Lyd";
$pgv_lang["TYPE__book"]			= "Bok";
$pgv_lang["TYPE__card"]			= "Kort";
$pgv_lang["TYPE__certificate"]	= "Sertifikat";
$pgv_lang["TYPE__coat"] 		= "Våpenskjold";
$pgv_lang["TYPE__document"]		= "Dokument";
$pgv_lang["TYPE__electronic"]	= "Elektronisk";
$pgv_lang["TYPE__fiche"]		= "Mikrokort";
$pgv_lang["TYPE__film"]			= "Mikrofilm";
$pgv_lang["TYPE__magazine"]		= "Magasin";
$pgv_lang["TYPE__manuscript"]	= "Manuskript";
$pgv_lang["TYPE__map"]			= "Kart";
$pgv_lang["TYPE__newspaper"]	= "Avis";
$pgv_lang["TYPE__photo"]		= "Bilde";
$pgv_lang["TYPE__tombstone"]	= "Gravstein";
$pgv_lang["TYPE__video"]		= "Video";
$pgv_lang["TYPE__painting"] 	= "Maleri";
$pgv_lang["TYPE__other"] = "Annet";

//-- Other media suff
$pgv_lang["view_slideshow"]			="Vis som lysbilder";
$pgv_lang["download_image"]			="Last ned fil";
$pgv_lang["no_media"]				="Ingen media funnet";
$pgv_lang["media_privacy"]			= "Personvernet forhindrer visning av dette mediaobjektet ";
$pgv_lang["relations_heading"]		="Bildet er relatert til";
$pgv_lang["file_size"]				="Filstørrelse";
$pgv_lang["img_size"]				="Bildestørrelse";
$pgv_lang["media_broken"]			= "Denne mediafilen er skadet og kan ikke vannmerkes";
$pgv_lang["unknown_mime"]			= "Mediabrannmur-feil: >UKjent Mime-type< for fil";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"]	="Ukjent handling: [action].";
$pgv_lang["module_error_unknown_type"]	="Ukjent modul.";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] 	="Vis personer som levde i det angitte år.";
$pgv_lang["button_BIRT_Y100"] 	="Vis personer som er født i løpet av de siste 100 år.";
$pgv_lang["button_BIRT_YES"] 	="Vis personer født for mer enn 100 år siden.";
$pgv_lang["button_DEAT_H"] 	="Vis bare par hvor den mannlige partneren er død";
$pgv_lang["button_DEAT_N"] 	="Vis personer som lever eller par hvor begge partnere lever";
$pgv_lang["button_DEAT_W"] 	="Vis bare par hvor bare den kvinnelige partneren er død.";
$pgv_lang["button_DEAT_Y"] 	="Vis personer som er døde eller par hvor begge partnere er døde.";
$pgv_lang["button_DEAT_Y100"] 	="Vis personer som er død i løpet av de siste 100 år.";
$pgv_lang["button_DEAT_YES"] 	="Vis personer som død for mer enn 100 år siden.";
$pgv_lang["button_MARR_DIV"] 	="Vis skilte par";
$pgv_lang["button_MARR_U"] 	="Vis par med ukjent dato for ekteskap.";
$pgv_lang["button_MARR_Y100"] 	="Vis par som er gift i løet av de siste 100 år.";
$pgv_lang["button_MARR_YES"] 	="Vis par som er gift for mer enn 100 år siden";
$pgv_lang["button_reset"] 	="Tilbakestill til listens standardverdi.";
$pgv_lang["button_SEX_F"] 	="Vis bare hunkjønn.";
$pgv_lang["button_SEX_M"] 	="Vis bare hankjønn.";
$pgv_lang["button_SEX_U"] 	="Vis bare personer hvor kjønn ikke er kjent.";
$pgv_lang["button_TREE_L"] 	="Vis bare levende personer eller par uten barn registrert i dabasen.";
$pgv_lang["button_TREE_R"] 	="Vis bare personer eller par uten forfedre registrert i databasen.";
$pgv_lang["sort_column"] 	="Sorter etter denne kolonnen.";
?>
