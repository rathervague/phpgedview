<?php
/**
 * Slovenian texts
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
 * @translator Silvana Orel Kos
 * @translator Leon Kos
 * @version $Id: lang.sl.php 6989 2010-11-09 03:26:25Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["gedcomid"]			= "GEDCOM INDI zapis ID";
$pgv_lang["sortby"]			= "Razvrsti";
$pgv_lang["exact"]			= "Natančno";
$pgv_lang["begins_with"]		= "Se začne z";
$pgv_lang["contains"]			= "Vsebuje";
$pgv_lang["sounds_like"]		= "Se sliši kot";
$pgv_lang["advanced_search"] 		= "Napredno iskanje";
$pgv_lang["more_fields"]		= "Dodaj več polj";
$pgv_lang["install_step_8"] 		= "Začni";
$pgv_lang["parent_family"]		= "Družina staršev";
$pgv_lang["step_parent_family"]		= "Družina mačehe/očima";
$pgv_lang["immediate_family"]		= "Neposredna družina";

$pgv_lang["load_full_tree"]		= "Poglej to drevo kot polno interaktivno drevo";
$pgv_lang["hide_show_spouses"]		= "Pokaži ali skrij več partnerjev";
$pgv_lang["interactive_tree"]		= "Interaktivno drevo";
$pgv_lang["example"]			= "Primer:";
$pgv_lang["tree"]			= "Drevo";
$pgv_lang["ellipsis"]			= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]		= "Pokaži neznani spol";
$pgv_lang["count"]			= "Prešteto";
$pgv_lang["age_differences"]		= "Pokaži razlike v datumih";
$pgv_lang["multi_site_search"] 		= "Iskanje po več spletnih straneh";
$pgv_lang["switch_lifespan"]		= "Pokaži preglednico po starosti";
$pgv_lang["switch_timeline"]		= "Pokaži časovnico";
$pgv_lang["differences"]		= "Razlike";
$pgv_lang["charts_block"]		= "Blok preglednic";
$pgv_lang["charts_block_descr"]		= "Blok preglednic vam omogoča postavitev preglednic na pozdravno stran ali na stran MyGedView portala.  Blok lahko nastavite tako, da vam kaže prednike, potomce ali oboje hkrati. Izberete lahko tudi izhodiščno osebo.";
$pgv_lang["charts_click_box"]		= "Kliknite na katerikoli okvirček za več podatkov o osebi.";
$pgv_lang["chart_type"]			= "Tip reglednice";
$pgv_lang["changedate1"]		= "Končni obseg spremenjenih datumov";
$pgv_lang["changedate2"]		= "Začetni obseg spremenjenih datumov";
$pgv_lang["search_place_word"]		= "Samo cele besede";
$pgv_lang["invalid_search_input"] 	= "Poleg leta napišite tudi ime, priimek ali kraj";
$pgv_lang["duplicate_username"] 	= "Podvoji uporabniško ime.  Uporabnik s takim imenom že obstaja.Izberi drugo uporabniško ime.";
$pgv_lang["cache_life"]			= "Življenjska doba vmesnega pomnilnika";
$pgv_lang["genealogy"]			= "rodoslovje";
$pgv_lang["activate"]			= "Aktiviraj";
$pgv_lang["deactivate"]			= "Deaktiviraj";
$pgv_lang["play"]			= "Zaženi";
$pgv_lang["stop"]			= "Ustavi";
$pgv_lang["random_media_start_slide"]	= "Začni diaprojekcijo ob naložitvi strani?";
$pgv_lang["random_media_ajax_controls"]	= "Prikaži upravljalnik diaprojekcije?";
$pgv_lang["description"]		= "Opis";
$pgv_lang["current_dir"]		= "Trenutni imenik";
$pgv_lang["SHOW_ID_NUMBERS"]		= "Pokaži ID-številke ob imenih";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Pokaži želene slike v okvirčkih oseb";
$pgv_lang["view_img_details"]		= "Pokaži podrobnosti slik";
$pgv_lang["server_folder"]		= "Predalček na strežniku";
$pgv_lang["medialist_recursive"]	= "Razvrsti datoteke v podimenikih";
$pgv_lang["media_options"]		= "Fotografske nastavitve";
$pgv_lang["confirm_password"]		= "Potrdi geslo.";
$pgv_lang["enter_email"]		= "Vpiši e-naslov.";
$pgv_lang["enter_fullname"] 		= "Vpiši ime in priimek.";
$pgv_lang["name"]			= "Ime";
$pgv_lang["names"]			= "Imena";
$pgv_lang["children"]			= "Otroci";
$pgv_lang["lchildren"]			= "otroci";
$pgv_lang["child"]			= "Otrok";
$pgv_lang["grandchildren"]		= "pravnuki";
$pgv_lang["family"] 			= "Družina";
$pgv_lang["as_child"]			= "Družina s starši";
$pgv_lang["shared_note_menu"]		= "Možnosti za skupen zapisek";
$pgv_lang["source_menu"]		= "Možnosti za vire";
$pgv_lang["repo_menu"]			= "Možnosti za kraj poslednjega počivališča";
$pgv_lang["other_records"]		= "Zapisi, ki se navezujejo na ta vir:";
$pgv_lang["other_repo_records"]		= "Zapisi, ki se navezujejo na ta kraj počitka:";
$pgv_lang["repo_info"]			= "Podatki o kraju počitka";
$pgv_lang["enter_terms"]		= "Vnesi iskalne pogoje";
$pgv_lang["search_asso_label"]		= "Znanci";
$pgv_lang["search_asso_text"]		= "Pokaži sorodne osebe/družine";
$pgv_lang["search_DM"]			= "Daitch-Mokotoff";
$pgv_lang["search_fams"]		= "Družine";
$pgv_lang["search_gedcom"]		= "Preišči podatkovne baze";
$pgv_lang["search_geds"]		= "Išči v naslednjih podatkovnih bazah";
$pgv_lang["search_indis"]		= "Osebe";
$pgv_lang["search_notes"]		= "Skupne zapiske";
$pgv_lang["search_inrecs"]		= "Išči";
$pgv_lang["search_prtall"]		= "Išči vse osebe";
$pgv_lang["search_prthit"]		= "Imena z zadetki";
$pgv_lang["results_per_page"]		= "rezultatov na stran";
$pgv_lang["firstname_search"]		= "osebno ime";
$pgv_lang["search_prtnames"]		= "Osebe'<br />imena za izpis:";
$pgv_lang["other_searches"]		= "Druga iskanja";
$pgv_lang["add_to_cart"]		= "Dodaj v košarico za izrez";
$pgv_lang["view_gedcom"]		= "Poglej GEDCOM-ov zapis";
$pgv_lang["welcome"]			= "Zdravo,";
$pgv_lang["son"]			= "Sin";
$pgv_lang["daughter"]			= "Hči";
$pgv_lang["welcome_page"]		= "Pozdravna stran";
$pgv_lang["editowndata"]		= "Moj račun";
$pgv_lang["user_admin"] 		= "Upravljanje uporabnikov";
$pgv_lang["manage_media"]		= "Urejanje fotografij";
$pgv_lang["search_general"]		= "Splošno iskanje";
$pgv_lang["clipping_privacy"]		= "Nekaterih podatkov ni bilo mogoče vključiti zaradi omejitev zasebnosti";
$pgv_lang["chart_new"]			= "Družinsko drevo";
$pgv_lang["loading"]			= "Nalagam...";
$pgv_lang["clear_chart"]		= "Izbriši preglednico";
$pgv_lang["file_information"]		= "Datotečni podatki";
$pgv_lang["choose_file_type"]		= "Tip datoteke";
$pgv_lang["add_individual_by_id"]	= "Dodaj osebo po ID-številki";
$pgv_lang["advanced_options"]		= "Napredne možnosti";
$pgv_lang["zip_files"]			= "Zazipaj dateteko/e";
$pgv_lang["include_media"]		= "Vključi fotografije (avtomatično zazipane datoteteke)";
$pgv_lang["roman_surn"]			= "Romanizirani priimki";
$pgv_lang["roman_givn"]			= "Romanizirana osebna imena";
$pgv_lang["include"]			= "Vključi:";
$pgv_lang["page_x_of_y"]		= "Stran #GLOBALS[currentPage]# of #GLOBALS[lastPage]#";
$pgv_lang["options"]			= "Možnosti:";
$pgv_lang["config_update_ok"]		= "Konfiguracijska datoteka uspešno naložena.";
$pgv_lang["page_size"]			= "Velikost strani";
$pgv_lang["font"]			= "Pisava";
$pgv_lang["use_colors"]			= "Uporabi barve";
$pgv_lang["record_not_found"]		= "Zahtevani GEDCOM-ov zapis ni najden. Vzrok za to je lahko povezava na napačno osebo ali pokvarjena GEDCOM-ova datoteka.";
$pgv_lang["result_page"]		= "Stran rezultatov";
$pgv_lang["edit_media"]			= "Uredi fotografijo (#GLOBALS[pid]#)";
$pgv_lang["wiki_main_page"]		= "Glavna Wiki-stran";
$pgv_lang["wiki_users_guide"]		= "Uporabniška Wiki-navodila";
$pgv_lang["wiki_admin_guide"]		= "Upraviteljeva Wiki-navodila";
$pgv_lang["no_search_for"]		= "Zagotovo izberi možnosti iskanja..";
$pgv_lang["no_search_site"]		= "Zagotovo izberi vsaj eno oddaljeno mesto.";
$pgv_lang["search_sites"] 		= "Mesta iskanja";
$pgv_lang["site_list"]			= "Mesto: ";
$pgv_lang["site_had"]			= " je vsebovalo naslednje";
$pgv_lang["label_search_engine_detected"]  = "Zaznano iskanje z iskalnim pajkom";

$pgv_lang["ex-spouse"] 			= "nekdanji zakonec";
$pgv_lang["ex-wife"] 			= "nekdanja žena";
$pgv_lang["ex-husband"]			= "nekdanji mož";
$pgv_lang["noemail"] 			= "Naslovi brez e-naslovov";
$pgv_lang["onlyemail"] 			= "Samo naslovi z e-naslovi";
$pgv_lang["maxviews_exceeded"]		= "Dovoljeni čas #GLOBALS[MAX_VIEWS]# za ogled strani presežen za #GLOBALS[MAX_VIEW_TIME]# sekund.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Pošlji sporočilo uporabnikom, ki se že šest mesecev niso logirali";
$pgv_lang["broadcast_never_logged_in"]	= "Pošilji sporočilo uporabnikom, ki se sploh še niso logirali";
$pgv_lang["stats_to_show"]		= "Izberi statistične podatke za prikaz v tem sklopu";
$pgv_lang["stat_avg_age_at_death"]	= "Povprečna starost ob smrti";
$pgv_lang["stat_longest_life"]		= "Oseba z najdaljšo življenjsko dobo";
$pgv_lang["stat_most_children"]		= "Družina z največ otroki";
$pgv_lang["stat_average_children"]	= "Povprečno število otrok na družino";
$pgv_lang["stat_events"]		= "Število vnesenih dogodkov";
$pgv_lang["stat_media"]			= "Število fotografij";
$pgv_lang["stat_surnames"]		= "Število priimkov";
$pgv_lang["stat_users"]			= "Število uporabnikov";
$pgv_lang["no_family_facts"]		= "Za to družino ni navedenih dejstev.";
$pgv_lang["stat_males"]			= "moških";
$pgv_lang["stat_females"]		= "žensk";
$pgv_lang["stat_unknown"]		= "oseb neznanega spola";
$pgv_lang["stat_link"]			= "Poglej statistiko v preglednicah";
$pgv_lang["print_stat_link"]		= "Pokaži povezave na statistične preglednice?";

$pgv_lang["sunday_1st"]			= "ned";
$pgv_lang["monday_1st"]			= "pon";
$pgv_lang["tuesday_1st"]		= "tor";
$pgv_lang["wednesday_1st"]		= "sre";
$pgv_lang["thursday_1st"]		= "čet";
$pgv_lang["friday_1st"]			= "pet";
$pgv_lang["saturday_1st"]		= "sob";

$pgv_lang["jan_1st"]			= "januarja";
$pgv_lang["feb_1st"]			= "februarja";
$pgv_lang["mar_1st"]			= "marca";
$pgv_lang["apr_1st"]			= "aprila";
$pgv_lang["may_1st"]			= "maja";
$pgv_lang["jun_1st"]			= "junija";
$pgv_lang["jul_1st"]			= "julija";
$pgv_lang["aug_1st"]			= "avgusta";
$pgv_lang["sep_1st"]			= "septembra";
$pgv_lang["oct_1st"]			= "oktobra";
$pgv_lang["nov_1st"]			= "novembra";
$pgv_lang["dec_1st"]			= "decembra";

$pgv_lang["edit_source"]		= "Uredi vir";
$pgv_lang["edit_shared_note"]		= "Uredi skupen zapisek";
$pgv_lang["familybook_chart"]		= "Družinska preglednica";
$pgv_lang["family_of"]			= "Družina:&nbsp;";
$pgv_lang["descent_steps"]		= "Število rodov";
$pgv_lang["cancel"]			= "Prekini";
$pgv_lang["cookie_help"]		= "Ta strežnik uporablja piškotke (cookies), da sledi vašemu stanju prijave.<br /><br />Zdi se, da piškotki niso vključeni v vašem brskalniku. Vključiti morate piškotke za ta mrežni naslov. Poglejte pomoč vašega brskalnika, kako se vključijo piškotki.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]		= "Podatek za to osebo je bil vnešen z drugega mesta.";
$pgv_lang["link_remote"]		= "Poveži na oddaljeno osebo";
//Add Remote Link
$pgv_lang["title_search_link"]		= "Dodaj lokalno povezavo";
$pgv_lang["label_site_url2"]		= "URL-stran";
//new stuff

$pgv_lang["delete_family_confirm"]	= "Z izbrisom družine se bodo izbrisale povezave med posamezniki, le-ti pa bodo ostali na svojem mestu. Ali res želite izbrisati to družino?";
$pgv_lang["delete_family"]		= "Izbriši družino";
$pgv_lang["add_favorite"]		= "Dodaj novo priljubljeno osebo";
$pgv_lang["url"]			= "URL";
$pgv_lang["add_fav_enter_note"]		= "Po želji dodaj zapis o priljubljeni osebi";
$pgv_lang["add_fav_or_enter_url"]	= "ALI<br />\nvpiši URL stran in naslov";
$pgv_lang["add_fav_enter_id"]		= "Vpiši ID-številko osebe, družine ali vira";
$pgv_lang["next_email_sent"]		= "Naslednje elektronsko opozorilo bo poslano ";
$pgv_lang["last_email_sent"]		= "Zadnje elektronsko opozorilo je bilo poslano ";
$pgv_lang["remove_child"]		= "Odstrani tega otroka iz družine";
$pgv_lang["link_new_husb"]		= "Dodaj moža izmed obstoječih oseb";
$pgv_lang["link_new_wife"]		= "Dodaj ženo izmed obstoječih oseb";
$pgv_lang["address_labels"]		= "Etikete z naslovi";
$pgv_lang["filter_address"]		= "Pokaži naslove, ki vsebujejo:";
$pgv_lang["address_list"]		= "Seznam naslovov";
$pgv_lang["index_edit_advice"]		= "Označi ime sklopa in klikni na eno od puščičnih podob za prenos označenega sklopa v želeno smer.";
$pgv_lang["changelog"]			= "#VERSION# različica spremembs";
$pgv_lang["html_block_descr"]		= "To je preprost HTML-jev sklop, ki ga lahko namestite na svoje stran za dodajanje kakršnihkoli želenih sporočil.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Vnesi svoj naslov</b></p><br /><p>Klikni konfiguracijski gumb";
$pgv_lang["html_block_sample_part2"]	= "za spremembo tu natisnjenih podatkov.</p>";
$pgv_lang["html_block_name"]		= "HTML";
$pgv_lang["htmlplus_block_name"]	= "Napredni HTML";
$pgv_lang["htmlplus_block_descr"]	= "To je HTML-jev sklop, ki ga lahko namestite na svojo stran za dodajanje kakršnihkoli želenih sporočil. V HTML-jevo besedilo lahko vnesete tudi reference podatkov iz vašega GEDCOM-a.";
$pgv_lang["htmlplus_block_templates"] 	= "Predloge";
$pgv_lang["htmlplus_block_content"] 	= "Vsebina";
$pgv_lang["htmlplus_block_narrative"] 	= "Pripovedni slog";
$pgv_lang["htmlplus_block_custom"]	= "Standardno";
$pgv_lang["htmlplus_block_keyword"]	= "Primeri ključnih besed";
$pgv_lang["htmlplus_block_taglist"]	= "Seznam označb -- Tag List";
$pgv_lang["htmlplus_block_compat"]	= "Kompatibilni način";
$pgv_lang["htmlplus_block_ui"]		= "Razširjeni vmesnik";
$pgv_lang["htmlplus_block_current"]	= "Trenutni";
$pgv_lang["htmlplus_block_default"]	= "Privzeti";
$pgv_lang["htmlplus_block_gedcom"]	= "Družinsko drevo";
$pgv_lang["htmlplus_block_birth"]	= "rojstvo";
$pgv_lang["htmlplus_block_death"]	= "smrt";
$pgv_lang["htmlplus_block_marrage"]	= "poroka";
$pgv_lang["htmlplus_block_adoption"]	= "posvojitev";
$pgv_lang["htmlplus_block_burial"]	= "pogreb";
$pgv_lang["htmlplus_block_census"]	= "dodan popis prebivalcev";
$pgv_lang["num_to_show"]		= "Število podatkov za prikaz";
$pgv_lang["days_to_show"]		= "Število dni za prikaz";
$pgv_lang["before_or_after"]		= "Štetje krajev pred ali za imenom?";
$pgv_lang["before"]			= "pred";
$pgv_lang["after"]			= "za";
$pgv_lang["config_block"]		= "Konfiguriraj";
$pgv_lang["enter_comments"]		= "Vstavi svoje sorodstveno razmerje do oseb v polju za komentarje.";
$pgv_lang["comments"]			= "Komentarji";
$pgv_lang["child-family"]		= "Starši ter bratje in sestre";
$pgv_lang["spouse-family"]		= "Zakonec in otroci";
$pgv_lang["direct-ancestors"]		= "Neposredni predniki";
$pgv_lang["ancestors"]			= "Neposredni predniki in njihove družine";
$pgv_lang["descendants"]		= "Potomci";
$pgv_lang["choose_relatives"]		= "Izberi sorodnike";
$pgv_lang["relatives_report"]		= "Poročilo o sorodnikih";
$pgv_lang["total_unknown"]		= "Neznanih";
$pgv_lang["total_living"]		= "Živečih";
$pgv_lang["total_dead"]			= "Umrlih";
$pgv_lang["total_not_born"]		= "Nerojenih";
$pgv_lang["remove_custom_tags"]		= "Odstrani uporabniške PGV označbe? (eg. _PGVU, _THUM)";
$pgv_lang["cookie_login_help"]		= "Ta stran vas pomni s prejšnjega obiska. To vam omogoča dostop do zasebnih podatkov in drugih funkcij, ki jih določa uporabnik. Če pa želite to stran urejati ali upravljati, se morate zaradi višjih varnostnih zahtev ponovno logirati.";
$pgv_lang["remember_me"]		= "Zapomni si moj dostop s tega računalnika?";
$pgv_lang["fams_with_surname"]		= "Družine s priimkom #surname#";
$pgv_lang["support_contact"]		= "Kontaktna oseba za tehnično pomoč";
$pgv_lang["genealogy_contact"]		= "Kontaktna oseba za rodoslovne podatke";
$pgv_lang["common_upload_errors"]	= "Ta napaka verjetno pomeni, da ste skušali naložili datoteko, ki presega omejitev, ki jo določil gostitelj. Privzeta omejitev v PHP je 2MB.  Obrnite se na gostiteljevo skupino za tehnično podporo za zvišanje omejitve dateteke php.ini ali pa naložite datoteko ob uporabi FTP-ja.  Za dodajanje GEDCOM-ove datoteke, ki ste jo naložili ob uporabi FTPja, uporabite stran <a href=\"uploadgedcom.php?action=add_form\"><b>Dodaj GEDCOM</b></a>.";
$pgv_lang["total_memory_usage"]		= "Količina porabljenega spomina:";
$pgv_lang["mothers_family_with"]	= "Materina družina z ";
$pgv_lang["fathers_family_with"]	= "Očetova družina z ";
$pgv_lang["family_with"]		= "Družina z";
$pgv_lang["halfsibling"]		= "polbrat/-sestra";
$pgv_lang["halfbrother"]		= "polbrat";
$pgv_lang["halfsister"]			= "polsestra";
$pgv_lang["family_timeline"]		= "Prikaži družinske člane na časovnici";
$pgv_lang["children_timeline"]		= "Prikaži otroke na časovnici";
$pgv_lang["other"]			= "Drugo";
$pgv_lang["others"]			= "Drugi";
$pgv_lang["sort_by_marriage"]		= "Razvrsti po poročnem datumu";
$pgv_lang["reorder_families"]		= "Spremeni vrstni red družin";
$pgv_lang["indis_with_surname"]		= "Osebe s priimkom #surname#";
$pgv_lang["first_letter_name"]		= "Izberi črko za prikaz družin, katerih priimek se začne z izbrano črko.";
$pgv_lang["first_letter_sfname"]	= "Izberi črko za prikaz družin, katerih zakonec ima ime, ki se začne s to črko.";
$pgv_lang["first_letter_iname"]		= "Izberi črko za prikaz oseb, katerih priimek se začne z izbrano črko.";
$pgv_lang["first_letter_fname"]		= "Izberi črko za prikaz oseb, katerih ime se začne z izbrano črko.";
$pgv_lang["total_names"]			= "Vseh imen";
$pgv_lang["total_changes"]			= "Vseh sprememb";
$pgv_lang["total_links"]			= "Vseh povezav";
$pgv_lang["top10_pageviews_nohits"]	= "Ni želenih zadetkov.";
$pgv_lang["top10_pageviews_msg"]	= "Števec zadetkov mora biti vključen v GEDCOM-ovi nastavitvi, v razdelkih Prikaz in Videz, skupini Skrij in Prikaži.";
$pgv_lang["review_changes_descr"]	= "Nerazrešene skupine sprememb bodo omogočale uporabnikom s pravicami urejanja dostop do seznama spremenjenih zapisov, ki jih je treba še pregledati in odobriti. Spremembe čakajo na potrditev ali zavrnitev.<br /><br />Če je ta skupina omogočena, bodo uporabniki s pravicami odobravanja prejeli dnevno e-sporočilo z obvestilom, da je treba pregledati spremembe.";
$pgv_lang["review_changes_block"]	= "Nerazrešene spremembe";
$pgv_lang["review_changes_email"]	= "Razpošlji opozorilna e-sporočila?";
$pgv_lang["review_changes_email_freq"]	= "Pogostnost opozorilnih e-sporočil (na število dni)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Preglej spremembes";
$pgv_lang["review_changes_body"]	= "V rodoslovni podatkovni bazi so bile opravljene online spremembe. Spremembe je treba pregledati in odobriti, preden bodo prikazane vsem uporabnikom. Uporabite spodnji URL za vstop dotične strani PhpGedView site in se logirajte za pregled sprememb.";
$pgv_lang["show_pending"]		= "Pokaži nerazrešene spremembe";
$pgv_lang["show_spouses"]		= "Pokaži zakonca";
$pgv_lang["quick_update_title"]		= "Hitra obnova podatkov";
$pgv_lang["quick_update_instructions"]	= "Ta stran vam omogoča hitro obnovitev podatkov za osebo. Preprosto vnesite nove podatke ali spremembe podatkov, ki so že vključeni v podatkovno bazo. Vnešene spremebe bo pred prikazom vsem uporabnikom pregledal upravljalec.";
$pgv_lang["update_name"] 		= "Obnovi podatke v imenu";
$pgv_lang["update_fact"]		= "Obnovi podatke med dejstvi";
$pgv_lang["update_fact_restricted"]	= "Nedovoljena sprememba tega dejstva:";
$pgv_lang["select_fact"]		= "Izberi dejstvo ...";
$pgv_lang["update_address"]		= "Obnovi podatke v naslovu";
$pgv_lang["top10_pageviews_descr"]	= "V tem sklopu je prizakanih deset najpogosteje gledanih zapisov. Ta sklop zahteva vključitev štetja zadetkov v GEDCOM-ovih konfiguracijskih nastavitvah.";
$pgv_lang["top10_pageviews"]		= "Najpogosteje gledani zapisi";
$pgv_lang["top10_pageviews_block"]	= "Najpogosteje gledani zapisi";
$pgv_lang["stepparent"]			= "Krušni starši";
$pgv_lang["stepdad"]			= "Očim";
$pgv_lang["stepmom"]			= "Mačeha";
$pgv_lang["stepsister"]			= "Polsestra";
$pgv_lang["stepbrother"]		= "Polbrat";
$pgv_lang["fams_charts"]		= "Možnosti za družino";
$pgv_lang["indis_charts"]		= "Možnosti za osebo";
$pgv_lang["none"]			= "Nič";
$pgv_lang["facts"]			= "Dejstva";
$pgv_lang["locked"]			= "Ne spreminjaj";
$pgv_lang["privacy"]			= "Zasebno";
$pgv_lang["number_sign"]		= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"] 			= "?";
$pgv_lang["qm_ah"]			= "?";
$pgv_lang["page_help"]			= "Pomoč";
$pgv_lang["help_for_this_page"] 	= "Pomoč za to stran";
$pgv_lang["help_contents"]		= "Vsebina napotkov";
$pgv_lang["show_context_help"]		= "Pokaži sprotno pomoč";
$pgv_lang["hide_context_help"]		= "Skrij sprotno pomoč";
$pgv_lang["sorry"]			= "<b>Napotek za to stran ali funkcijo še ni na voljo.</b>";
$pgv_lang["help_not_exist"] 		= "<b>Napotek za to stran ali funkcijo še ni na voljo.</b>";
$pgv_lang["var_not_exist"]		= "<span style=\"font-weight: bold\">The language variable does not exist. Please report this as it is an error.</span>";
$pgv_lang["resolution"] 		= "Ločljivost zaslona";
$pgv_lang["menu"]			= "Meni";
$pgv_lang["header"] 			= "Glava";
$pgv_lang["imageview"]			= "Pregledovalnik slik";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"] 		= "Prijava uporabnika programa PhpGedView";
$pgv_lang["for_support"]		= "Tehnična pomoč in informacije:";
$pgv_lang["for_contact"]		= "Na rodoslovna vprašanja vam odgovarja";
$pgv_lang["for_all_contact"]		= "Tehnična pomoč ali rodoslovna vprašanja:";
$pgv_lang["choose_username"]		= "Želeno uporabniško ime";
$pgv_lang["username"]			= "Uporabniško ime";
$pgv_lang["invalid_username"]		= "Uporabniško ime vsebuje neveljavne znake";
$pgv_lang["firstname"]			= "Ime";
$pgv_lang["lastname"]			= "Priimek";
$pgv_lang["choose_password"]		= "Željeno geslo";
$pgv_lang["password"]			= "Geslo";
$pgv_lang["confirm"]			= "Potrdi geslo";
$pgv_lang["login"]			= "Prijava";
$pgv_lang["logout"] 			= "Odjava";
$pgv_lang["admin"]			= "Upravljanje";
$pgv_lang["logged_in_as"]		= "Prijavljen kot ";
$pgv_lang["my_pedigree"]		= "Moj rodovnik";
$pgv_lang["my_indi"]			= "Moj osebni zapis";
$pgv_lang["yes"]			= "Da";
$pgv_lang["no"] 			= "Ne";
$pgv_lang["change_theme"]		= "Spremeni temo";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Rodovnik";
$pgv_lang["gen_ped_chart"]		= "Število prikazanih rodov: #PEDIGREE_GENERATIONS#";
$pgv_lang["generations"]		= "Število rodov";
$pgv_lang["view"]			= "Poglej";
$pgv_lang["fam_spouse"] 		= "Družina z zakoncem";
$pgv_lang["rootid"] 			= "Izhodiščna oseba rodovnika";
$pgv_lang["root_person"]		= "ID-številka izhodiščne osebe";
$pgv_lang["hide_details"]		= "Skrij podrobnosti";
$pgv_lang["show_details"]		= "Pokaži podrobnosti";
$pgv_lang["person_links"]		= "Povezave na preglednice, družine in bližnjih sorodnikov izbrane osebe. Za ogled strani, začenši pri izbrani osebi, kliknite na to podobo.";
$pgv_lang["zoom_box"]			= "Približaj/oddalji okvirček.";
$pgv_lang["orientation"]		= "Smer prikaza";
$pgv_lang["portrait"]			= "Pokončno";
$pgv_lang["landscape"]			= "Vodoravno";
$pgv_lang["landscape_top"]		= "Najstarejši na vrhu";
$pgv_lang["landscape_down"]		= "Najstarejši na dnu";
$pgv_lang["start_at_parents"]		= "Začni pri starših";
$pgv_lang["charts"] 			= "Preglednice";
$pgv_lang["lists"]			= "Seznami";
$pgv_lang["box_width"] 			= "Širina okvirčka";
$pgv_lang["random_surn"]		= "Naključen priimek";
$pgv_lang["generation_number"]		= "Rodov";


//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Nisem našel družine z ID-številko";
$pgv_lang["unable_to_find_record"]	= "Nisem našel zapisa z ID-številko";
$pgv_lang["title"]			= "Naslov:";
$pgv_lang["living"] 			= "Živeči";
$pgv_lang["private"]			= "Zasebno";
$pgv_lang["birth"]			= "Rojstvo:";
$pgv_lang["death"]			= "Smrt:";
$pgv_lang["descend_chart"]		= "Prikaz potomcev";
$pgv_lang["individual_list"]		= "Osebe";
$pgv_lang["family_list"]		= "Družine";
$pgv_lang["branch_list"]		= "Veje";
$pgv_lang["source_list"]		= "Viri";
$pgv_lang["shared_note_list"]		= "Zapiski";
$pgv_lang["place_list"] 		= "Kraji";
$pgv_lang["place_list_aft"] 		= "Seznam krajev po";
$pgv_lang["media_list"] 		= "Fotografije";
$pgv_lang["repo_list"]			= "Kraji počitka";
$pgv_lang["search"] 			= "Iskanje";
$pgv_lang["clippings_cart"] 		= "Košarica za izreze družinskih vej";
$pgv_lang["print_preview"]		= "Tiskalniku prijazen iztis";
$pgv_lang["cancel_preview"] 		= "Nazaj na običajni ogled";
$pgv_lang["change_lang"]		= "Spremeni jezik";
$pgv_lang["print"]			= "Natisni";
$pgv_lang["total_queries"]		= "Število vpogledov v podatkovno bazo: ";
$pgv_lang["total_privacy_checks"]	= "Število primerov nadzora zasebnosti: ";
$pgv_lang["back"]			= "Nazaj";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]			= "po domače";
$pgv_lang["male"]			= "moški";
$pgv_lang["males"]			= "Moški";
$pgv_lang["female"] 			= "ženska";
$pgv_lang["females"]			= "Ženske";
$pgv_lang["temple"] 			= "Mormonsko svetišče";
$pgv_lang["temple_code"]		= "Koda mormonskega svetišča:";
$pgv_lang["status"] 			= "Stan";
$pgv_lang["source"] 			= "Vir";
$pgv_lang["text"]			= "Zapis vira:";
$pgv_lang["note"]			= "Zapisek";
$pgv_lang["NN"] 			= "(neznano)";
$pgv_lang["PN"] 			= "(neznano)";
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
$pgv_lang["NNvietnamese"]		= "(vô danh)";
$pgv_lang["PNvietnamese"]		= "(không biết tuổi)";
$pgv_lang["NNthai"] 			= "(neznano)";
$pgv_lang["PNthai"] 			= "(neznano)";
$pgv_lang["NNother"] 			= "(neznano)";
$pgv_lang["PNother"] 			= "(neznano)";
$pgv_lang["unrecognized_code"]		= "Neprepoznana GEDCOM koda";
$pgv_lang["unrecognized_code_msg"]	= "To je napaka. Ker bi jo radi odpravili, napako prijavite";
$pgv_lang["indi_info"]			= "Podatki o osebi";
$pgv_lang["pedigree_chart"] 		= "Družinsko drevo";
$pgv_lang["individual"]			= "Oseba";
$pgv_lang["as_spouse"]			= "Družina z zakoncem";
$pgv_lang["privacy_error"]		= "Ta podatek je zaseben in ga ni moč prikazati.";
$pgv_lang["more_information"]		= "Nadaljnje podatke vam lahko posreduje";
$pgv_lang["given_name"] 		= "Ime:";
$pgv_lang["surname"]			= "Priimek:";
$pgv_lang["suffix"] 			= "Naziv:";
$pgv_lang["sex"]			= "Spol";
$pgv_lang["personal_facts"] 		= "Osebna dejstva in podrobnosti";
$pgv_lang["type"]			= "Tip";
$pgv_lang["parents"]			= "Starši";
$pgv_lang["gparents"]			= "Stari starši";
$pgv_lang["siblings"]			= "Brat/sestra";
$pgv_lang["father"] 			= "Oče";
$pgv_lang["mother"] 			= "Mati";
$pgv_lang["parent"] 			= "Roditelj";
$pgv_lang["parent_age"] 		= "Starost roditelja";
$pgv_lang["father_age"]			= "Očetova starost";
$pgv_lang["mother_age"]			= "Materina starost";
$pgv_lang["self"] 			= "Jaz";
$pgv_lang["relatives"]			= "Najbližji sorodniki";
$pgv_lang["relatives_events"]		= "Dogodki najbližjih sorodnikov";
$pgv_lang["historical_facts"]		= "Zgodovinska dejstva";
$pgv_lang["partner"] 			= "Roditelj";
$pgv_lang["spouse"] 			= "Zakonec";
$pgv_lang["spouses"] 			= "Zakonci";
$pgv_lang["surnames"]			= "Priimki";
$pgv_lang["adopted"]			= "Posvojenec/ka";
$pgv_lang["foster"] 			= "Rejenec/ka";
$pgv_lang["sealing"]			= "Odobreno";
$pgv_lang["challenged"]			= "Izpodbito";
$pgv_lang["disproved"]			= "Neodobreno";
$pgv_lang["infant"]			= "Dojenček";
$pgv_lang["stillborn"]			= "Mrtvorojen/a";
$pgv_lang["deceased"]			= "Pokojni/a";
$pgv_lang["link_as_wife"]		= "To osebo vključi v obstoječo družino kot ženo";
$pgv_lang["no_tab1"]			= "Za to osebo ni dejstev.";
$pgv_lang["no_tab2"]			= "Za to osebo ni opomb.";
$pgv_lang["no_tab3"]			= "Za to osebo ni navedkov iz virov.";
$pgv_lang["no_tab4"]			= "Za to osebo ni fotografij.";
$pgv_lang["no_tab5"]			= "Za to osebo ni bližnjih sorodnikov.";
$pgv_lang["no_tab6"]			= "Za to osebo ni raziskovalnih nalog.";
$pgv_lang["show_fact_sources"]		= "Pokaži vse vire";
$pgv_lang["show_fact_notes"]		= "Pokaži vse opombe";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Podatki o družini";
$pgv_lang["family_group_info"]		= "Skupni podatki o družini";
$pgv_lang["husband"]			= "Mož";
$pgv_lang["wife"]			= "Žena";
$pgv_lang["marriage"]			= "Poroka:";
$pgv_lang["lds_sealing"]		= "Mormonska poroka:";
$pgv_lang["marriage_license"]		= "Poročni list:";
$pgv_lang["no_children"]		= "Ni otrok";
$pgv_lang["known_child"]		= "En otrok";
$pgv_lang["known_children"]		= "otrok";
$pgv_lang["childless_family"]		= "V tej družini ni bilo otrok";
$pgv_lang["parents_timeline"]		= "Pokaži zakonski par na časovnici";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "Košarica za izrez";
$pgv_lang["which_links"]		= "Katere druge povezave iz te družine bi radi dodali?";
$pgv_lang["just_family"]		= "Dodaj samo ta družinski zapis.";
$pgv_lang["parents_and_family"] 	= "Dodaj zapise staršev skupaj s tem družinskim zapisom";
$pgv_lang["parents_and_child"]		= "Dodaj zapise staršev in otrok skupaj z zapisom te družine.";
$pgv_lang["parents_desc"]		= "Dodaj zapise staršev in potomcev skupaj z zapisom te družine.";
$pgv_lang["continue"]			= "Nadaljuj dodajanje";
$pgv_lang["which_p_links"]		= "Katere povezave s to osebo bi še želeli dodati?";
$pgv_lang["just_person"]		= "Dodaj samo to osebo.";
$pgv_lang["person_parents_sibs"]	= "Dodaj to osebo, njene starše ter brate in sestre.";
$pgv_lang["person_ancestors"]		= "Dodaj to osebo in njene neposredne prednike.";
$pgv_lang["person_ancestor_fams"]	= "Dodaj to osebo, njene neposredne prednike in njihove družine.";
$pgv_lang["person_spouse"]		= "Dodaj to osebo, njenega zakonca in otroke.";
$pgv_lang["person_desc"]		= "Dodaj to osebo, njenega zakonca in vse potomce.";
$pgv_lang["which_s_links"]		= "Katere zapise, povezane s tem virom, je treba dodati?";
$pgv_lang["just_source"]		= "Dodaj samo ta vir.";
$pgv_lang["linked_source"]		= "Dodaj ta vir in družine/osebe, povezane z virom.";
$pgv_lang["person_private"] 		= "Podrobnosti o tej osebi so zasebne. Osebni podatki ne bodo vključeni.";
$pgv_lang["family_private"] 		= "Podrobnosti o tej družini so zasebne. Družinske podrobnosti ne bodo vključene.";
$pgv_lang["media_private"] 		= "Podrobnosti o medijskih datotekah so zasebne. Podrobnosti medijev ne bodo vključene.";
$pgv_lang["download"]			= "Z desnim gumbom na miški klikni spodnje povezave in izberi &quot;Save target as&quot; za naložitev izbranih datotek.";
$pgv_lang["cart_is_empty"]		= "Vaša košarice za izreze je prazna.";
$pgv_lang["id"] 			= "ID-številka";
$pgv_lang["ID"] 			= "ID-številka";
$pgv_lang["name_description"]		= "Ime / Opis";
$pgv_lang["remove"] 			= "Odstrani";
$pgv_lang["empty_cart"] 		= "Izprazni košarico";
$pgv_lang["download_now"]		= "Prenesi zdaj";
$pgv_lang["download_file"]		= "Prenesi datoteko #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Prenesli ste podatke o tej osebi iz:";
$pgv_lang["family_downloaded_from"]	= "Prenesli ste podatke o tej družini iz:";
$pgv_lang["source_downloaded_from"]	= "Prenesli ste podatke o tem viru iz:";
$pgv_lang["enter_person_generations"]	= "Število rodov:";
$pgv_lang["convertPath"]		= "Pretvori pot medijev v";
$pgv_lang["convertSlashes"]		= "Pretvori ločila imenika medija v";
$pgv_lang["forwardSlashes"]		= "Poševnice : /";
$pgv_lang["backSlashes"]		= "Leve poševnice : \\";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "Najdene povezave s kraji";
$pgv_lang["top_level"]			= "Najvišja raven";
$pgv_lang["form"]			= "Kraji so zapisani v obliki: ";
$pgv_lang["default_form"]		= "Mesto, pokrajina, država";
$pgv_lang["default_form_info"]		= "(privzeto)";
$pgv_lang["unknown"]			= "neznano";
$pgv_lang["individuals"]		= "oseb";
$pgv_lang["view_records_in_place"]	= "Ogled vseh zapisov z omembo tega kraja";
$pgv_lang["place_list2"] 		= "Seznam krajev";
$pgv_lang["show_place_hierarchy"]	= "Seznam krajev";
$pgv_lang["show_place_list"]		= "Pokaži seznam vseh krajev";
$pgv_lang["total_unic_places"]		= "Število posameznih krajev";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "Slikovno gradivo";
$pgv_lang["multi_title"]		= "Seznam fotografij";
$pgv_lang["media_found"]		= "najdenih fotografij";
$pgv_lang["view_person"]		= "Poglej osebo";
$pgv_lang["view_family"]		= "Poglej družino";
$pgv_lang["view_source"]		= "Poglej vir";
$pgv_lang["view_object"]		= "Poglej predmet";
$pgv_lang["prev"]			= "&lt; nazaj";
$pgv_lang["next"]			= "naprej &gt;";
$pgv_lang["next_image"]			= "naslednja fotografija";
$pgv_lang["file_not_found"] 		= "Datoteka ni najdena.";
$pgv_lang["medialist_show"] 		= "Pokaži";
$pgv_lang["per_page"]			= "Število fotografij na stran";
$pgv_lang["media_format"]		= "Format fotografije";
$pgv_lang["image_size"]			= "Velikost slike";
$pgv_lang["media_id"]			= "ID-številka fotografije";
$pgv_lang["invalid_id"]			= "Take ID-številke ni v tej GEDCOM-ovi datoteki.";
$pgv_lang["record_updated"]		= "Zapis #pid# uspešno obnovljen.";
$pgv_lang["record_not_updated"]		= "Zapisa #pid# ni bilo mogoče obnoviti.";
$pgv_lang["record_removed"]		= "Zapis #xref# uspešno odstranjen iz GEDCOM-a.";
$pgv_lang["record_not_removed"]		= "Zapisa #xref# ni bilo mogoče odstraniti iz GEDCOM-a.";
$pgv_lang["record_added"]		= "Zapis #xref# uspešno dodan GEDCOM-u.";
$pgv_lang["record_not_added"]		= "Zapisa #xref# ni bilo mogoče dodati GEDCOM-u.";

//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"] 		= "Poišči verjetni zapis imena(Soundex)";
$pgv_lang["sources"]			= "Viri";
$pgv_lang["shared_notes"]		= "Skupne zapiske";
$pgv_lang["lastname_search"]		= "Priimek";
$pgv_lang["search_place"]		= "Kraj";
$pgv_lang["search_year"]		= "Leto";
$pgv_lang["no_results"] 		= "Ni rezultatov.";
$pgv_lang["search_soundex"]		= "Iskanje s Soundexom";
$pgv_lang["search_replace"]		= "Poišči in zamenjaj";
$pgv_lang["search_sources"]		= "Viri";
$pgv_lang["search_shared_notes"]	= "Skupni zapiski";
$pgv_lang["search_more_chars"]		= "Napiši več kot eno črko";
$pgv_lang["search_soundextype"]		= "Tip Soundexa:";
$pgv_lang["search_russell"]		= "Osnovno";
$pgv_lang["search_tagfilter"]		= "Izključi filter";
$pgv_lang["search_tagfon"]		= "Izključi nerodoslovne podatke";
$pgv_lang["search_tagfoff"]		= "Izključeno";
$pgv_lang["associate"]			= "Povezana oseba";
$pgv_lang["search_record"]		= "Celoten zapis";
$pgv_lang["search_to"]			= "za";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]		= "Naslovi";
$pgv_lang["find_source"]		= "Poišči vir";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repository"] 		= "Kraj počitka";
$pgv_lang["repos_found"]		= "Najdeni kraji počitka";
$pgv_lang["find_repository"]		= "Poišči kraj počitka";
$pgv_lang["total_repositories"]		= "Število krajev počitka";
$pgv_lang["confirm_delete_repo"]	= "Ali res želite izbrisati ta kraj počitka iz podatkovne baze?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Podatki o viru";
$pgv_lang["people"] 			= "Osebe";
$pgv_lang["families"]			= "Družine";
$pgv_lang["total_sources"]		= "Število virov";

//-- SHARED NOTE FILE MESSAGES
$pgv_lang["shared_note"]			= "Skupen zapisek";
$pgv_lang["shared_notes_found"]			= "Najdenih skupnih zapiskov";
$pgv_lang["find_shared_note"]			= "Poišči skupni zapisek";
$pgv_lang["shared_note_info"]			= "Podatki skupnega zapiska";
$pgv_lang["total_shared_notes"]			= "Vseh skupnih zapiskov";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]		= "Neveljaven GEDCOM-ov format";
$pgv_lang["exec_time"]			= "Čas izvajanja:";
$pgv_lang["unable_to_create_index"]	= "Ni mogoče ustvariti datoteke s kazalom. Preverite, ali je na direktoriju PhpGedView nastavljeno dovoljenje za zapis. Dovoljenje je ponastavljeno po zapisu datotek s kazalom.";
$pgv_lang["changes_present"]		= "V trenutnem GEDCOM-u je treba pregledati nerazrešene spremembe. Če boste nadaljevali ta uvoz podatkov, bodo sprememenjeni podatki nemudoma poslani v podatkovno bazo. Priporočljivo je, da pred nadaljevanjem vnosa pregledate spremembe.";
$pgv_lang["sec"]			= "sekund";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"] 		= "Število družin";
$pgv_lang["total_indis"]		= "Število oseb";
$pgv_lang["notes"]			= "Zapiski";
$pgv_lang["ssourcess"]			= "Viri";
$pgv_lang["media"]			= "Fotografije";
$pgv_lang["name_contains"]		= "Ime vsebuje:";
$pgv_lang["filter"] 			= "Filter";
$pgv_lang["apply_filter"]		= "Apliciraj filter";
$pgv_lang["find_individual"]		= "Poišči ID osebe";
$pgv_lang["find_familyid"]		= "Poišči ID družine";
$pgv_lang["find_sourceid"]		= "Poišči ID vira";
$pgv_lang["find_specialchar"]		= "Find Special Characters";
$pgv_lang["magnify"]			= "Povečaj";
$pgv_lang["skip_surnames"]		= "Preskoči seznam priimkov";
$pgv_lang["show_surnames"]		= "Pokaži seznam priimkov";
$pgv_lang["skip_marnms"]		= "Izključi poročni priimek";
$pgv_lang["show_marnms"]		= "Vključi poročni priimek";
$pgv_lang["all"]			= "VSE";
$pgv_lang["hidden"]			= "Skrito";
$pgv_lang["confidential"]		= "Zaupno";
$pgv_lang["alpha_index"]		= "Abecedni seznam";
$pgv_lang["name_list"] 			= "Seznam imen";
$pgv_lang["firstname_alpha_index"] 	= "Imenski seznam";
$pgv_lang["roots"]		 	= "Korenine";
$pgv_lang["leaves"] 			= "Listi";
$pgv_lang["widow"] 			= "Vdova";
$pgv_lang["widower"] 			= "Vdovec";
$pgv_lang["show_parents"] 		= "Pokaži starše";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]			= "Starost";
$pgv_lang["husb_age"]			= "Starost moža";
$pgv_lang["wife_age"]			= "Starost žene";
$pgv_lang["days"]			= "dni";
$pgv_lang["year1"]			= "leto";
$pgv_lang["years2"]			= "leti";	// 2 years
$pgv_lang["years"]			= "let";
$pgv_lang["month1"]                    	= "mesec";
$pgv_lang["months"]          		= "mesecev"; // >2 months
$pgv_lang["day1"]			= "dnevom";
$pgv_lang["days"]			= "dnevi";
$pgv_lang["week1"]			= "tednom";
$pgv_lang["weeks"]			= "tedni";
$pgv_lang["month1"]			= "mesec";
$pgv_lang["year1"]			= "leto";
$pgv_lang["after_death"]        	= "po smrti";
$pgv_lang["at_death_day"]      		= "na dan smrti";
$pgv_lang["timeline_title"] 		= "PhpGedView časovnica";
$pgv_lang["timeline_chart"] 		= "Časovnica";
$pgv_lang["remove_person"]		= "Odstrani osebo";
$pgv_lang["show_age"]			= "Pokaži kazalec let";
$pgv_lang["add_another"]		= "Dodaj še eno osebo na stran:<br />ID osebe:";
$pgv_lang["find_id"]			= "Poišči ID";
$pgv_lang["show"]			= "Pokaži";
$pgv_lang["year"]			= "Leto:";
$pgv_lang["timeline_instructions"]	= "V večini brskalnikov lahko kliknete in prenesete okvirčke na različna mesta v preglednici.";
$pgv_lang["zoom_in"]			= "Približaj";
$pgv_lang["zoom_out"]			= "Oddalji";
$pgv_lang["timeline_beginYear"]		= "Začetno leto";
$pgv_lang["timeline_endYear"]		= "Končno leto";
$pgv_lang["timeline_scrollSpeed"]	= "Hitrost";
$pgv_lang["timeline_controls"]		= "nadzor časovnice";
$pgv_lang["include_family"]		= "Vključi neposredno družino";
$pgv_lang["lifespan_chart"]		= "Preglednica po starosti";

// calendar conversion options
$pgv_lang["cal_none"]                 = "Brez spremembe koledarja";
$pgv_lang["cal_gregorian"]            = "gregorjanski";
$pgv_lang["cal_julian"]               = "julijanski";
$pgv_lang["cal_french"]               = "francoski";
$pgv_lang["cal_jewish"]               = "židovski";
$pgv_lang["cal_hebrew"]               = "hebrejski";
$pgv_lang["cal_jewish_and_gregorian"] = "židovski in gregorjanski";
$pgv_lang["cal_hebrew_and_gregorian"] = "hebrejski in gregorjanski";
$pgv_lang["cal_hijri"]                = "hijri";
$pgv_lang["cal_arabic"]               = "arabski";

// some religious dates
$pgv_lang["easter"]     = "velika noč";
$pgv_lang["ascension"]  = "vnebohod";
$pgv_lang["pentecost"]  = "binkošti";
$pgv_lang["assumption"] = "vnebovzetje";
$pgv_lang["all_saints"] = "vsi sveti";
$pgv_lang["christmas"]  = "božič";

// am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."]			= "dopoldan";
$pgv_lang["p.m."]         		= "popoldan";
$pgv_lang["noon"]         		= "opoldan";
$pgv_lang["midn"]         		= "opolnoči";

//-- MONTH NAMES
$pgv_lang["jan"]			= "januar";
$pgv_lang["feb"]			= "februar";
$pgv_lang["mar"]			= "marec";
$pgv_lang["apr"]			= "april";
$pgv_lang["may"]			= "maj";
$pgv_lang["jun"]			= "junij";
$pgv_lang["jul"]			= "julij";
$pgv_lang["aug"]			= "avgust";
$pgv_lang["sep"]			= "september";
$pgv_lang["oct"]			= "oktober";
$pgv_lang["nov"]			= "november";
$pgv_lang["dec"]			= "december";

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

$pgv_lang["b.c."]         = "B.C.";

$pgv_lang["abt"]			= "okoli";
$pgv_lang["aft"]			= "po";
$pgv_lang["and"]			= "in";
$pgv_lang["bef"]			= "pred";
$pgv_lang["bet"]			= "med";
$pgv_lang["cal"]			= "izračunano";
$pgv_lang["est"]			= "ocenjeno";
$pgv_lang["from"]			= "od";
$pgv_lang["int"]			= "razloženo";
$pgv_lang["to"] 			= "do";
$pgv_lang["cir"]			= "okoli";
$pgv_lang["apx"]			= "približno.";

//-- Admin File Messages
$pgv_lang["password_mismatch"]		= "Gesli se ne ujemata.";
$pgv_lang["enter_username"] 		= "Vnesite uporabniško ime.";
$pgv_lang["enter_password"] 		= "Vnesite geslo.";
$pgv_lang["save"]			= "Shrani";
$pgv_lang["saveandgo"]			= "Shrani in pojdi na nov zapis";
$pgv_lang["delete"] 			= "Izbriši";
$pgv_lang["edit"]			= "Uredi";
$pgv_lang["no_login"]			= "Uporabnika ni bilo mogoče prijaviti.";
$pgv_lang["basic_realm"]		= "Sistem prijave PhpGedView";
$pgv_lang["basic_auth_failure"]		= "Za dostop do želenega vira vpišite veljavno uporabniško ime in geslo";
$pgv_lang["basic_auth"]			= "Osnovna prijava";
$pgv_lang["digest_auth"]		= "Skupinska prijava";
$pgv_lang["no_auth_needed"]		= "Brez prijave";
$pgv_lang["file_not_exists"]		= "Vnešeno ime datoteke ne obstaja.";
$pgv_lang["research_assistant"]		= "Raziskovalna pomoč";
$pgv_lang["utf8_to_ansi"]		= "Spremeni UTF-8 v ANSI (ISO-8859-1)";
$pgv_lang["media_linked"]		= "Ta fotografija je povezana z naslednjimi osebami:";
$pgv_lang["media_not_linked"]		= "Ta fotografija ni povezano z nobenim GEDCOM-ovim zapisom.";
$pgv_lang["media_dir_1"]		= "Fotografija se nahaja na zunanjem strežniku";
$pgv_lang["media_dir_2"]		= "Fotografija je v standardnem imeniku fotografij";
$pgv_lang["media_dir_3"]		= "Fotografija je zaščitenem imeniku fotografij";
$pgv_lang["thumb_dir_1"]		= "Sličica se nahaja na zunanjem strežniku";
$pgv_lang["thumb_dir_2"]		= "Sličica je v standarnem imeniku fotografij";
$pgv_lang["thumb_dir_3"]		= "Sličica je v zaščitenem imeniku fotografij";
$pgv_lang["moveto_2"]			= "Premakni v zaščiteni imenik";
$pgv_lang["moveto_3"]			= "Premakni v standardni imenik";
$pgv_lang["move_standard"]		= "Premakni v standardno";
$pgv_lang["move_protected"]		= "Premakni v zaščiteno";
$pgv_lang["move_mediadirs"]		= "Premakni v imenike fotografij";
$pgv_lang["setperms"]			= "Nastavi dovoljenja za fotografije";
$pgv_lang["setperms_fix"]		= "Popravi preberi/napiši/izvedi dovoljenja";
$pgv_lang["setperms_success"]		= "Dovoljenja so nastavljena";
$pgv_lang["setperms_failure"]		= "Dovoljenja niso nastavljena";
$pgv_lang["setperms_time_exceeded"]	= "Dosežen je bil konec izvajalnega časa. Ukaz izvedite na manj obsežnem direktoriju.";
$pgv_lang["move_time_exceeded"]		= "Dosežen je bil konec izvajalnega časa. S ponovnim ukazom poskušajte prenesti preostale datoteke.";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "Zahtevani požarni zid fotografij ne obstaja. Najprej ga morate ustvariti.";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "Imenika zaščitenih fotografij ni bilo mogoče ustvariti v izhodiščnem imeniku požarnega zidu fotografij. Ustvarite ta imenik in ga nastavite na splošen dostop za pisanje.";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "Imenik zaščitenih fotografij v izhodiščnem imeniku požarnega zidu fotografij ni nastavljen na splošen dostop za pisanje. ";
$pgv_lang["media_firewall_invalid_dir"]	= "Napaka: Požarni zid fotografij ni bil zagnan z imenika fotografij.";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Poglej podrobnosti ...";
$pgv_lang["view_fam_nav_notes"]		= "Poglej zapiske za ...";
$pgv_lang["view_fam_nav_sources"]	= "Poglej vire za ...";
$pgv_lang["view_fam_nav_media"]		= "Poglej fotografije za ...";
$pgv_lang["view_fam_nav_album"]		= "Poglej album za ...";
$pgv_lang["view_fam_nav_relatives"]	= "Poglej sorodnike za ...";
$pgv_lang["view_fam_nav_tree"]		= "Poglej drevo za ...";
$pgv_lang["view_fam_nav_research"]	= "Poglej raziskave za ...";
$pgv_lang["view_fam_nav_map"]		= "Poglej zemljevid za ...";
$pgv_lang["view_fam_nav_spare"]		= "Poglej proste podatke za ...";
$pgv_lang["navigator"]			= "Navigator";
$pgv_lang["fam_navigator"]		= "Družinski navigator";

$pgv_lang["relationship_great"]		= "Veliko";
$pgv_lang["relationship_chart"] 	= "Sorodstvena razmerja";
$pgv_lang["person1"]			= "Oseba 1";
$pgv_lang["person2"]			= "Oseba 2";
$pgv_lang["no_link_found"]		= "Ni povezave med osebama.";
$pgv_lang["no_other_link_found"]	= "Med osebama ni možno najti druge povezave.";
$pgv_lang["sibling"]			= "brat/sestra";
$pgv_lang["follow_spouse"]		= "Poišči povezavo po zakonskih zvezah";
$pgv_lang["timeout_error"]		= "Program je onemogel, preden je našel sorodstveno razmerje.";
$pgv_lang["grandchild"]			= "Vnuk";
$pgv_lang["grandson"]			= "Vnuk";
$pgv_lang["granddaughter"]		= "Vnukinja";
$pgv_lang["greatgrandchild"]		= "Pravnuk";
$pgv_lang["greatgrandson"]		= "Pravnuk";
$pgv_lang["greatgranddaughter"]		= "Pravnukinja";
$pgv_lang["brother"]			= "Brat";
$pgv_lang["sister"] 			= "Sestra";
$pgv_lang["aunt"]			= "Teta";
$pgv_lang["uncle"]			= "Stric";
$pgv_lang["nephew"]			= "Nečak";
$pgv_lang["niece"]			= "Nečakinja";
$pgv_lang["firstcousin"]		= "Bratranec/Sestrična";
$pgv_lang["femalecousin"]		= "Sestrična";
$pgv_lang["malecousin"]			= "Bratranec";
$pgv_lang["relationship_to_me"] 	= "V razmerju do mene";
$pgv_lang["rela_husb"]			= "V razmerju do moža";
$pgv_lang["rela_wife"]			= "V razmerju do žene";
$pgv_lang["next_path"]			= "Poišči naslednjo pot";
$pgv_lang["show_path"]			= "Pokaži pot";
$pgv_lang["line_up_generations"]	= "Poravnaj iste rodove";
$pgv_lang["oldest_top"]             	= "Pokaži najstarejše na vrhu";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s je %2\$s osebe z imenom %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s je %2\$s osebe z imenom %3\$s.";

$pgv_lang["mother_in_law"]		= "Tašča";
$pgv_lang["father_in_law"]		= "Tast";
$pgv_lang["brother_in_law"]		= "Svak";
$pgv_lang["sister_in_law"]		= "Svakinja";
$pgv_lang["brothers_wife"]		= "Svakinja"; // brother's wife
$pgv_lang["son_in_law"]		        = "Zet";
$pgv_lang["daughter_in_law"]		= "Snaha";
$pgv_lang["uncle_in_law"]		= "možev/ženin stric";
$pgv_lang["aunt_in_law"]		= "moževa/ženina teta";
$pgv_lang["cousin_in_law"]		= "možev/ženin bratranec ali sestrična";
$pgv_lang["m_cousin_in_law"]		= "možev/ženin bratranec";
$pgv_lang["f_cousin_in_law"]		= "moževa/ženina sestrična";
$pgv_lang["step_son"]		        = "Pastorek";
$pgv_lang["step_daughter"]	    	= "Pastorka";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 	= "Nečak";
$pgv_lang["bosa_brothers_offspring_3"] 	= "Nečakinja";
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] 	= "Pranečak";
$pgv_lang["bosa_brothers_offspring_5"] 	= "Pranečakinja";
$pgv_lang["bosa_brothers_offspring_6"] 	= "Prenečak";
$pgv_lang["bosa_brothers_offspring_7"] 	= "Pranečakinja";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = "%2\$d x pranečak";
$pgv_lang["n_x_brothers_daughter"] = "%2\$d x pranečakinja";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 	= "Nečak";
$pgv_lang["bosa_sisters_offspring_3"] 	= "Nečakinja";
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 	= "Pranečak";
$pgv_lang["bosa_sisters_offspring_5"] 	= "Pranečakinja";
$pgv_lang["bosa_sisters_offspring_6"] 	= "Prenečak";
$pgv_lang["bosa_sisters_offspring_7"] 	= "Pranečakinja";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = "%2\$d x pranečak";
$pgv_lang["n_x_sisters_daughter"] = "%2\$d x pranečakinja";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 			= "Sin";                   // son";
$pgv_lang["bosa_3"] 			= "Hči";              // daughter";
// 2nd generation
$pgv_lang["bosa_4"] 			= "Vnuk";
$pgv_lang["bosa_5"] 			= "Vnukinja";
$pgv_lang["bosa_6"] 			= "Vnuk";
$pgv_lang["bosa_7"] 			= "Vnukinja";
// 3rd generation
$pgv_lang["bosa_8"]			= "Pravnuk";
$pgv_lang["bosa_9"] 			= "Pravnukinja";
$pgv_lang["bosa_10"] 			= "Pravnuk";
$pgv_lang["bosa_11"] 			= "Pravnukinja";
$pgv_lang["bosa_12"] 			= "Pravnuk";
$pgv_lang["bosa_13"] 			= "Pravnukinja";
$pgv_lang["bosa_14"] 			= "Pravnuk";
$pgv_lang["bosa_15"] 			= "Pravnukinja";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = "%3\$d x pravnuk";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d x pravnukinja";
$pgv_lang["n_x_grandson_from_daughter"]	  = "%3\$d x pravnuk";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d x pravnukinja";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 			= "Stric";
$pgv_lang["sosa_uncle_3"] 			= "Stric";
// 2nd generation
$pgv_lang["sosa_uncle_4"] 			= "Stari stric";
$pgv_lang["sosa_uncle_5"] 			= "Stari stric";
$pgv_lang["sosa_uncle_6"] 			= "Stari stric";
$pgv_lang["sosa_uncle_7"] 			= "Stari stric";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= "%2\$d x great uncle";
$pgv_lang["n_x_maternal_uncle"]	    = "%2\$d x great uncle";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 			= "Teta";
$pgv_lang["sosa_aunt_3"] 			= "Teta";
// 2nd generation
$pgv_lang["sosa_aunt_4"] 			= "Stara teta";
$pgv_lang["sosa_aunt_5"] 			= "Stara teta";
$pgv_lang["sosa_aunt_6"] 			= "Stara teta";
$pgv_lang["sosa_aunt_7"] 			= "Stara teta";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= "%2\$d x stara teta";
$pgv_lang["n_x_maternal_aunt"]	    = "%2\$d x stara teta";

// the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"] 			= "Stric";
$pgv_lang["sosa_uncle_bm_3"] 			= "Stric";
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"] 			= "Stari stric";
$pgv_lang["sosa_uncle_bm_5"] 			= "Stari stric";
$pgv_lang["sosa_uncle_bm_6"] 			= "Stari stric";
$pgv_lang["sosa_uncle_bm_7"] 			= "Stari stric";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]		= "%2\$d x stari stric";
$pgv_lang["n_x_maternal_uncle_bm"]	    = "%2\$d x stari stric";

// the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"] 			= "Teta";
$pgv_lang["sosa_aunt_bm_3"] 			= "Teta";
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"] 			= "Stara teta";
$pgv_lang["sosa_aunt_bm_5"] 			= "Stara teta";
$pgv_lang["sosa_aunt_bm_6"] 			= "Stara teta";
$pgv_lang["sosa_aunt_bm_7"] 			= "Stara teta";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]		= "%2\$d x stara teta";
$pgv_lang["n_x_maternal_aunt_bm"]	    = "%2\$d x stara teta";

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              = "prvi bratranec/sestrična";
$pgv_lang["male_cousin_2"]              = "drugi bratranec/sestrična";
$pgv_lang["male_cousin_3"]              = "tretji bratranec/sestrična";
$pgv_lang["male_cousin_4"]              = "četrti bratranec/sestrična";
$pgv_lang["male_cousin_5"]              = "peti bratranec/sestrična";
$pgv_lang["male_cousin_6"]              = "šesti bratranec/sestrična";
$pgv_lang["male_cousin_7"]              = "sedmi bratranec/sestrična";
$pgv_lang["male_cousin_8"]              = "osmi bratranec/sestrična";
$pgv_lang["male_cousin_9"]              = "deveti bratranec/sestrična";
$pgv_lang["male_cousin_10"]             = "deseti bratranec/sestrična";
$pgv_lang["male_cousin_11"]             = "enajsti bratranec/sestrična";
$pgv_lang["male_cousin_12"]             = "dvanajsti bratranec/sestrična";
$pgv_lang["male_cousin_13"]             = "trinajsti bratranec/sestrična";
$pgv_lang["male_cousin_14"]             = "štirinajsti bratranec/sestrična";
$pgv_lang["male_cousin_15"]             = "petnajsti bratranec/sestrična";
$pgv_lang["male_cousin_16"]             = "šestnajst bratranec/sestrična";
$pgv_lang["male_cousin_17"]             = "sedemnajsti bratranec/sestrična";
$pgv_lang["male_cousin_18"]             = "osemnajsti bratranec/sestrična";
$pgv_lang["male_cousin_19"]             = "devetnajsti bratranec/sestrična";
$pgv_lang["male_cousin_20"]             = "dvajseti bratranec/sestrična";
$pgv_lang["male_cousin_n"]              = "%d x bratranec/sestrična";
$pgv_lang["female_cousin_1"]            = "prvi bratranec/sestrična";
$pgv_lang["female_cousin_2"]            = "drugi bratranec/sestrična";
$pgv_lang["female_cousin_3"]            = "tretji bratranec/sestrična";
$pgv_lang["female_cousin_4"]            = "četrti bratranec/sestrična";
$pgv_lang["female_cousin_5"]            = "peti bratranec/sestrična";
$pgv_lang["female_cousin_6"]            = "šesti bratranec/sestrična";
$pgv_lang["female_cousin_7"]            = "sedmi bratranec/sestrična";
$pgv_lang["female_cousin_8"]            = "osmi bratranec/sestrična";
$pgv_lang["female_cousin_9"]            = "deveti bratranec/sestrična";
$pgv_lang["female_cousin_10"]           = "deseti bratranec/sestrična";
$pgv_lang["female_cousin_11"]           = "enajsti bratranec/sestrična";
$pgv_lang["female_cousin_12"]           = "dvanajsti bratranec/sestrična";
$pgv_lang["female_cousin_13"]           = "trinajsti bratranec/sestrična";
$pgv_lang["female_cousin_14"]           = "štirinajsti bratranec/sestrična";
$pgv_lang["female_cousin_15"]           = "petnajsti bratranec/sestrična";
$pgv_lang["female_cousin_16"]           = "šestnajsti bratranec/sestrična";
$pgv_lang["female_cousin_17"]           = "sedemenajsti bratranec/sestrična";
$pgv_lang["female_cousin_18"]           = "osemnajsti bratranec/sestrična";
$pgv_lang["female_cousin_19"]           = "devetnajsti bratranec/sestrična";
$pgv_lang["female_cousin_20"]           = "dvajseti bratranec/sestrična";
$pgv_lang["female_cousin_n"]            = "%d x bratranec/sestrična";

// Only referenced from english specific functions
$pgv_lang["removed_ascending_1"]   = " v 2. kolenu navzgor";
$pgv_lang["removed_ascending_2"]   = " v 3. kolenu navzgor";
$pgv_lang["removed_ascending_3"]   = " v 4. kolenu navzgor";
$pgv_lang["removed_ascending_4"]   = " v 5. kolenu navzgor";
$pgv_lang["removed_ascending_5"]   = " v 6. kolenu navzgor";
$pgv_lang["removed_ascending_6"]   = " v 7. kolenu navzgor";
$pgv_lang["removed_ascending_7"]   = " v 8. kolenu navzgor";
$pgv_lang["removed_ascending_8"]   = " v 9. kolenu navzgor";
$pgv_lang["removed_ascending_9"]   = " v 10. kolenu navzgor";
$pgv_lang["removed_ascending_10"]  = " v 11. kolenu navzgor";
$pgv_lang["removed_ascending_11"]  = " v 12. kolenu navzgor";
$pgv_lang["removed_ascending_12"]  = " v 13. kolenu navzgor";
$pgv_lang["removed_ascending_13"]  = " v 14. kolenu navzgor";
$pgv_lang["removed_ascending_14"]  = " v 15. kolenu navzgor";
$pgv_lang["removed_ascending_15"]  = " v 16. kolenu navzgor";
$pgv_lang["removed_ascending_16"]  = " v 17. kolenu navzgor";
$pgv_lang["removed_ascending_17"]  = " v 18. kolenu navzgor";
$pgv_lang["removed_ascending_18"]  = " v 19. kolenu navzgor";
$pgv_lang["removed_ascending_19"]  = " v 20. kolenu navzgor";
$pgv_lang["removed_ascending_20"]  = " v 21. kolenu navzgor";
$pgv_lang["removed_descending_1"]  = " v 2. kolenu navzdol";
$pgv_lang["removed_descending_2"]  = " v 3. kolenu navzdol";
$pgv_lang["removed_descending_3"]  = " v 4. kolenu navzdol";
$pgv_lang["removed_descending_4"]  = " v 5. kolenu navzdol";
$pgv_lang["removed_descending_5"]  = " v 6. kolenu navzdol";
$pgv_lang["removed_descending_6"]  = " v 7. kolenu navzdol";
$pgv_lang["removed_descending_7"]  = " v 8. kolenu navzdol";
$pgv_lang["removed_descending_8"]  = " v 9. kolenu navzdol";
$pgv_lang["removed_descending_9"]  = " v 10. kolenu navzdol";
$pgv_lang["removed_descending_10"] = " v 11. kolenu navzdol";
$pgv_lang["removed_descending_11"] = " v 12. kolenu navzdol";
$pgv_lang["removed_descending_12"] = " v 13. kolenu navzdol";
$pgv_lang["removed_descending_13"] = " v 14. kolenu navzdol";
$pgv_lang["removed_descending_14"] = " v 15. kolenu navzdol";
$pgv_lang["removed_descending_15"] = " v 16. kolenu navzdol";
$pgv_lang["removed_descending_16"] = " v 17. kolenu navzdol";
$pgv_lang["removed_descending_17"] = " v 18. kolenu navzdol";
$pgv_lang["removed_descending_18"] = " v 19. kolenu navzdol";
$pgv_lang["removed_descending_19"] = " v 20. kolenu navzdol";
$pgv_lang["removed_descending_20"] = " v 21. kolenu navzdol";

//-- GEDCOM edit utility
$pgv_lang["check_delete"]			= "Ali res želite izbrisati GEDCOM-ovo dejstvo?";
$pgv_lang["access_denied"]			= "<b>Dostop zavrnjen</b><br />Nimate dovoljenja za dostop do tega vira.";
$pgv_lang["changes_exist"]			= "Ta GEDCOM je bil dopolnjen.";
$pgv_lang["find_place"] 			= "Poišči kraj";
$pgv_lang["close_window"]			= "Zapri okno";
$pgv_lang["close_window_without_refresh"] 	= "Zapri okno brez osvežitve";
$pgv_lang["place_contains"] 		  	= "Kraj vključuje:";
$pgv_lang["add"]				= "Dodaj";
$pgv_lang["custom_event"]			= "Uporabniški dogodek";
$pgv_lang["delete_person"]			= "Izbriši to osebo";
$pgv_lang["confirm_delete_person"]		= "Ali res želite izbrisati to osebo iz GEDCOM-ove datoteke?";
$pgv_lang["find_media"] 			= "Poišči fotografije";
$pgv_lang["set_link"]				= "Vzpostavi povezavo";
$pgv_lang["delete_source"]			= "Izbriši ta vir";
$pgv_lang["delete_shared_note"]			= "Izbriši ta skupen zapisek";
$pgv_lang["confirm_delete_source"]		= "Ali res želite izbrisati ta vir iz GEDCOM-ov datoteke?";
$pgv_lang["confirm_delete_shared_note"]		= "Ali res želite izbrisati za skupen zapisek?";
$pgv_lang["find_family"]			= "Poišči družino";
$pgv_lang["find_fam_list"]			= "Poišči družinski seznam";
$pgv_lang["edit_name"]				= "Popravi ime";
$pgv_lang["delete_name"]			= "Izbriši ime";
$pgv_lang["select_date"]			= "Izberi datum";
$pgv_lang["user_cannot_edit"]			= "Ta uporabnik ne morete urejati GEDCOM-a.";
$pgv_lang["ged_noshow"]				= "Dostop do te strani je onemogočil upravitelj.";

//-- calendar.php messages
$pgv_lang["bdm"]				= "Rojstva, smrti, poroke";
$pgv_lang["on_this_day"]			= "Na današnji dan ...";
$pgv_lang["in_this_month"]			= "V tem mesecu ...";
$pgv_lang["in_this_year"]			= "V tem letu ...";
$pgv_lang["year_anniversary"]		        = "#year_var#. obletnica";
$pgv_lang["today"]				= "Danes";
$pgv_lang["day"]				= "Dan:";
$pgv_lang["month"]				= "Mesec:";
$pgv_lang["showcal"]				= "Pokaži dogodke osebe z imenom:";
$pgv_lang["anniversary"]			= "Obletnica";
$pgv_lang["anniversary_calendar"]	        = "Koledar obletnic";
$pgv_lang["sunday"] 				= "nedelja";
$pgv_lang["monday"] 				= "ponedeljek";
$pgv_lang["tuesday"]				= "torek";
$pgv_lang["wednesday"]				= "sreda";
$pgv_lang["thursday"]				= "četrtek";
$pgv_lang["friday"] 				= "petek";
$pgv_lang["saturday"]				= "sobota";
$pgv_lang["viewday"]				= "Pokaži dan";
$pgv_lang["viewmonth"]				= "Pokaži mesec";
$pgv_lang["viewyear"]				= "Pokaži leto";
$pgv_lang["all_people"] 			= "vsi ljudje";
$pgv_lang["living_only"]			= "živeči";
$pgv_lang["recent_events"]			= "polpretekla zgodovina (&lt; 100 let);lt; 100 let)";
$pgv_lang["day_not_set"]			= "Dan ni določen";

//-- user self registration module
$pgv_lang["lost_password"]			= "Ste pozabili geslo?";
$pgv_lang["requestpassword"]			= "Zahtevaj novo geslo";
$pgv_lang["no_account_yet"] 			= "Nimate računa?";
$pgv_lang["requestaccount"] 			= "Zahtevajte nov uporabniški račun";
$pgv_lang["emailadress"]			= "E-poštni naslov";
$pgv_lang["mandatory"] 				= "Polja označena z * so obvezna.";
$pgv_lang["mail01_line01"]			= "Zdravo, #user_fullname# ...";
$pgv_lang["mail01_line02"]			= "Na strežnik #SERVER_NAME# je bil sprejet zahtevek za vzpostavitev računa PhpGedView z vašim e-poštnim naslovom #user_email#.";
$pgv_lang["mail01_line03"]			= "Podatki o zahtevku so prikazani na spodnji povezavi.";
$pgv_lang["mail01_line04"]			= "Kliknite na naslednjo povezavo in vpišite zahtevane podatke za potrditev zahtevka in elektronskega naslova.";
$pgv_lang["mail01_line05"]			= "Izbrišite sporočilo, če računa niste zahtevali.";
$pgv_lang["mail01_line06"]			= "S te strani ne boste več prejemali sporočil, ker bo zahtevek po računu samodejno izbrisan v sedmih dneh.";
$pgv_lang["mail01_subject"] 			= "Registrirali ste se na strežniku #SERVER_NAME#";

$pgv_lang["mail02_line01"]			= "Zdravo, upravitelj ...";
$pgv_lang["mail02_line02"]			= "Možni uporabnik se je prijavil pri PhpGedView na strežniku #SERVER_NAME#.";
$pgv_lang["mail02_line03"]			= "Uporabnik je prejel elektronsko sporočilo z zahtevanimi podatki za potrditev zahtevka po dostopu.";
$pgv_lang["mail02_line04"]			= "Po elektronski pošti boste obveščeni, ko bo možni uporabnik potrdil svoj zahtevek. Z aktivacijo uporabniškega imena lahko postopek zaključite. Novi uporabnik se ne bo mogel prijaviti, dokler ne aktivirate računa.";
$pgv_lang["mail02_line04a"]			= "Po elektronski pošti boste obveščeni, kdaj je možni uporabnik potrdil svoj zahtevek. Potem se bo lahko uporabnik prijavil brez vašega posredovanja.";
$pgv_lang["mail02_subject"] 			= "Nova registracija na strežniku #SERVER_NAME#";

$pgv_lang["hashcode"]				= "Koda za preverjanje:";
$pgv_lang["thankyou"]				= "Zdravo, #user_fullname# ...<br />Zahvaljujemo se, da ste se registrirali.";
$pgv_lang["pls_note06"] 			= "Na elektronski naslov <b>#user_email# vam bomo poslali potrdilo</b>. Zahtevek po računu morate potrditi po navodilih, ki jih boste dobili po elektronski pošti. Če računa ne potrdite v tednu dni, bo vaša prijava samodejno zavrnjena. Morali se boste ponovno prijaviti.<br /><br />Po izpolnitvi navodil v elektronskem sporočilu bo upravitelj moral vaš zahtevek najprej odobriti, šele potem boste lahko uporabljali račun.<br /><br />Za prijavo na to stran sta potrebna uporabniško ime in geslo.<br /><br />";
$pgv_lang["pls_note06a"] 			= "Zdaj vam bomo poslali sporočilo s potrdilom  na elektronski naslov <b>#user_email#</b>. Zahtevek po računu morate potarditi po navodilih, ki jih boste prejeli po elektronski pošti. Če računa ne potrdite v tednu dni, bo vaša prijava samodejno zavrnjenja. Morali se boste ponovno prijaviti.<br /><br />Po izpolnitvi navodil v elektronskem sporočilu bo upravitelj moral vaš zahtevek najprej odobriti, šele potem boste lahko uporabljali račun. Za prijavo na to stran sta potrebna uporabniško ime in geslo.<br /><br />";

$pgv_lang["registernew"]			= "Potrditev novega računa";
$pgv_lang["user_verify"]			= "Preverjanje uporabnika";
$pgv_lang["send"]					= "Pošlji";

$pgv_lang["pls_note07"] 			= "~#pgv_lang[user_verify]#~<br /><br />Za potrditev zahtevka po računu vtipkajte svoje uporabniško ime, geslo in kodo za preverjanje, ki ste jo prejeli po elektronski pošti.";
$pgv_lang["pls_note08"] 			= "Podatki za uporabnika z imenom <b>#user_name#</b> so preverjeni.";

$pgv_lang["mail03_line01"]			= "Zdravo, upravljalec ...";
$pgv_lang["mail03_line02"]			= "Uporabnik #newuser[username]# (#newuser[fullname]#) je potrdil zahtevek po odprtju računa.";
$pgv_lang["mail03_line03"]			= "Kliknite na spodnjo povezavo za prijavo na vašo stran. Najprej uredite (edit) uporabnika, da se bo račun aktiviral in omogočil uporabniku dostop na vašo stran.";
$pgv_lang["mail03_line03a"]			= "Ni vam več treba posredovati. Uporabnik se lahko sam prijavi.";
$pgv_lang["mail03_subject"] 		= "Nov uporabnik na strežniku #SERVER_NAME#";

$pgv_lang["pls_note09"] 			= "Potrdili ste zahtevek za registriranega uporabnika.";
$pgv_lang["pls_note10"] 			= "Upravitelj je prejel obvestilo. Ko vam bo dal dovoljenje za prijavo, se boste lahko prijavljali sami s svojim uporabniškim imenom in geslom.";
$pgv_lang["pls_note10a"]			= "Zdaj se lahko prijavite s svojim uporabniškim imenom in geslom.";
$pgv_lang["data_incorrect"] 		= "Podatki niso pravi. Poskusite še enkrat";
$pgv_lang["user_not_found"] 		= "Vpisanih podatkov ni bilo mogoče preverite. Za podrobnejše informacije se obrnite na upravitelja strani.";

$pgv_lang["lost_pw_reset"]			= "Zahtevek za pozabljeno geslo";
$pgv_lang["pls_note11"] 			= "Za spremembo gesla vpišite svoje uporabniško ime.<br /><br />Po elektronski pošti boste prejeli obvestilo na elektronski naslov, ki je prijavljen na vašem računu. V obvestilu bosta navedena URL in koda za potrditev računa. Na tem URL-ju boste lahko spremenili svoje geslo in se prijavili na našo stran. Iz varnostnih razlogov nikomur ne posredujte svoje kode za potrditev računa.<br /><br />Če potrebujete pomoč s strani upravitelja, uporabite spodnjo povezavo.";

$pgv_lang["mail04_line01"]			= "Zdravo, #user_fullname# ...";
$pgv_lang["mail04_line02"]			= "Novo geslo je bilo zahtevano za vaše uporabniško ime.";
$pgv_lang["mail04_line03"]			= "Priporočilo:";
$pgv_lang["mail04_line04"]			= "Kliknite na spodno povezavo ali pa jo prelepite v brskalnik. Prijavite se z novim geslom in ga takoj zamenjajte, da ohranite vaše podatke varne.";
$pgv_lang["mail04_line05"]			= "Potem ko ste se prijavili izberite povezavo «#pgv_lang[editowndata]#» v meniju «#pgv_lang[mygedview]#» in izpolnite polji za geslo.";
$pgv_lang["mail04_subject"] 		= "Zahtevek za podatke na #SERVER_NAME#";

$pgv_lang["pwreqinfo"]				= "Zdravo,...<br /><br />Pošta z vašim novim geslom je bila poslana na naveden naslov za uporabnika <b>#user[email]#</b>.<br /><br />Preverite vaš poštni predal. Sporočilo boste prejeli v kratkem.<br /><br />Nasvet:<br />Ponovno se prijavite semkaj kakor hitro je to mogoče in zamenjajte geslo, da ohranite varnost podatkov.";

$pgv_lang["myuserdata"] 			= "Moj račun";
$pgv_lang["user_theme"] 			= "Moja tema";
$pgv_lang["mgv"]				= "Portal";
$pgv_lang["mygedview"]				= "Uporabnikov portal";
$pgv_lang["passwordlength"] 			= "Geslo mora vsebovati vsaj šest znakov.";
$pgv_lang["welcome_text_auth_mode_1"]		= "<center><b>Lepo pozdravljeni na naši rodoslovni spletni strani</b></center><br />Dostop je dovoljen obiskovalcem z uporabniškim računom.<br /><br />Če imate uporabniški račun, lahko že vstopite. Če ga še nimate, lahko zanj zaprosite tako, da kliknete na ustrezno povezavo spodaj.<br /><br />Po potrditvi prijavnice bo upravitelj strani aktiviral vaš račun. O odobritvi vaše prijave boste obveščeni po elektronski pošti.";
$pgv_lang["welcome_text_auth_mode_2"]		= "<center><b>Lepo pozdravljeni na naši rodoslovni spletni strani</b></center><br />Dostop je dovoljen samo <u>prijavljenim</u> uporabnikom.<br /><br />Če imate uporabniški račun, lahko že vstopite. Če ga še nimate, lahko zanj zaprosite tako, da kliknete na ustrezno povezavo spodaj.<br /><br />Po pregledu podatkov se bo upravitelj odločil, ali bo vašo prijavo odobril ali zavrnil. O odobritvi vaše prijave boste obveščeni po elektronski pošti.";
$pgv_lang["welcome_text_auth_mode_3"]		= "<center><b>Lepo pozdravljeni na naši rodoslovni spletni strani</b></center><br />Dostop je dovoljen <u>samo družinskim članom</u>.<br /><br />Če imate uporabniški račun, lahko že vstopite. Če ga še nimate, lahko zanj zaprosite tako, da kliknete na ustrezno povezavo spodaj.<br /><br />Po potrditvi posredovanih podatkov bo upravitelj vaš zahtevek za račun odobril ali pa zavrnil. O odobritvi zahtevka boste obveščeni po elektronski pošti.";
$pgv_lang["welcome_text_cust_head"] 		= "<center><b>Lepo pozdravljeni na naši rodoslovni spletni strani</b></center><br />Dostop je dovolje uporabnikom, ki imajo odprt uporabniški račun in geslo za to spletno stran.<br />";
$pgv_lang["acceptable_use"]			= "<div class=\"largeError\">Opozorilo:</div><div class=\"error\">Z vlogo izpolnjenega obrazca se strinjate,<ul><li>da boste varovali zasebnost živečih oseb na seznamu spletne strani,</li><li>v spodnjem okvirčku pa navedite osebo, s katero ste v sorodu, ali pa nam posredujte podatke o osebi, ki naj bi jo uvrstili na seznam naše spletne strani.</li></ul></div>";


//-- mygedview page
$pgv_lang["upcoming_events"]			= "Bližnji dogodki";
$pgv_lang["living_or_all"]			= "Pokaži dogodke samo živečih oseb?";
$pgv_lang["basic_or_all"]			= "Pokaži samo rojstva, smrti in poroke?";
$pgv_lang["style"]				= "Predstavitveni način";
$pgv_lang["style1"]				= "Seznam";
$pgv_lang["style2"]				= "Razpredelnica";
$pgv_lang["style3"]				= "Oblak označb";
$pgv_lang["sort_style"]				= "Način razveščanja";
$pgv_lang["by_anniv"]				= "Po obletnici";
$pgv_lang["by_alpha"]				= "Abecedno";
$pgv_lang["cal_download"]			= "Omogoči naložitev pregleda dogodkov?";
$pgv_lang["no_events_living"]			= "V naslednjih #pgv_lang[global_num1]# dneh ni posebnih dogodkov živečih oseb.";
$pgv_lang["no_events_living1"]			= "Jutri ni posebnih dogodkov živečih oseb..";
$pgv_lang["no_events_all"]			= "V naslednjih #pgv_lang[global_num1]# dneh ni posebnih dogodkov živečih oseb.";
$pgv_lang["no_events_all1"]			= "Jutri ni posebnih dogodkov.";
$pgv_lang["no_events_privacy"]			= "V naslednjih #pgv_lang[global_num1]# dneh se bo zvrstilo nekaj posebnih podatkov, vendar jih zaradi omejitve zasebnosti ne morete videti.";
$pgv_lang["no_events_privacy1"]			= "Jutri se bo zvrstilo nekaj posebnih dogodkov, vendar jih zaradi omejitve zasebnosti ne morete videti.";
$pgv_lang["more_events_privacy"]		= "<br />V naslednjih #pgv_lang[global_num1]# dneh se bo zvrstilo še nekaj posebnih dogodkov, vendar jih zaradi omejitve zasebnosti ne morete videti.";
$pgv_lang["more_events_privacy1"]		= "<br />Jutri se bo zvrstilo še nekaj posebnih dogodkov, vendar jih zaradi omejitve zasebnosti ne morete videti.";
$pgv_lang["none_today_living"]			= "Danes ni posebnih dogodkov živečih oseb.";
$pgv_lang["none_today_all"]			= "Danes ni posebnih dogodkov.";
$pgv_lang["none_today_privacy"]			= "Danes je nekaj posebnih dogodkov, vendar jih zaradi omejitve zasebnosti me morete videti.";
$pgv_lang["more_today_privacy"]		= "<br />Danes je še več posebnih dogodkov, vendar jih zaradi omejitve zasebnosti ne morete videti.";
$pgv_lang["chat"]				= "Klepetalnica";
$pgv_lang["users_logged_in"]			= "Prijavljeni uporabniki";
$pgv_lang["anon_user"]				= "1 anonimen prijavljen uporabnik";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# anonimnih prijavljenih uporabnikov";
$pgv_lang["login_user"]				= "1 prijavljen uporabnik";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# prijavljenih uporabnikov";
$pgv_lang["no_login_users"]			= "Nič prijavljenih ali anonimnih uporabnikov";
$pgv_lang["message"]				= "Pošlji sporočilo";
$pgv_lang["my_messages"]			= "Moja sporočila";
$pgv_lang["date_created"]			= "Datum odpošiljanja:";
$pgv_lang["message_from"]			= "E-naslov:";
$pgv_lang["message_from_name"]			= "Vaše ime:";
$pgv_lang["message_to"] 			= "Sporočilo za:";
$pgv_lang["message_subject"]			= "Predmet:";
$pgv_lang["message_body"]			= "Vsebina sporočila:";
$pgv_lang["no_to_user"] 			= "Niste navedli prejemnika. Postopka ni mogoče izpeljati.";
$pgv_lang["provide_email"]			= "Napišite svoj elektronski naslov, da vam bomo lahko odgovorili, sicer to ne bo mogoče. Vaš elektronski naslov bomo uporabili samo za odziv na vaše sporočilo.";
$pgv_lang["reply"]				= "Odgovori";
$pgv_lang["message_deleted"]			= "Sporočilo je zbrisano";
$pgv_lang["message_sent"]			= "Sporočilo je bil uspešno poslano uporabniku #TO_USER#";
$pgv_lang["reset"]				= "Ponastavi";
$pgv_lang["site_default"]			= "Privzete vrednosti";
$pgv_lang["mygedview_desc"] 			= "Ta stran omogoča hranjenje zaznamkov priljubljenih oseb, sledenje bližnjih dogodkov in sodelovanje z drugimi uporabniki.";
$pgv_lang["no_messages"]			= "Nimate čakajočih sporočil.";
$pgv_lang["clicking_ok"]			= "Ko kliknete OK, se odpre novo okno, v katerem lahko kontaktirate #user[fullname]#";
$pgv_lang["favorites"]				= "Priljubljeni zaznamki";
$pgv_lang["my_favorites"]			= "Moji priljubljeni zaznamki";
$pgv_lang["no_favorites"]			= "Niste izbrali priljubljenih zaznamkov.<br /><br />Osebo, družino ali vir dodate med priljubljene zaznamke tako, da kliknete na povezavo <b>#pgv_lang[add_favorite]#</b>, ki bo odkrila polja, v katera lahko vstavite ali iščete ID-številke.  Namesto ID-številke ahko vnesete URL in naslov.";
$pgv_lang["add_to_my_favorites"]		= "Dodaj med Moje priljubljene zaznamke";
$pgv_lang["gedcom_favorites"]			= "Priljubljeni zaznamki";
$pgv_lang["no_gedcom_favorites"]		= "Ta trenutek ni izbranih priljubljenih.	Upravitelj lahko doda priljubljene za prikaz ob začetku.";
$pgv_lang["confirm_fav_remove"] 		= "Res želite odstraniti to s seznama priljubljenih?";
$pgv_lang["invalid_email"]			= "Vnesite delujoč e-poštni naslov.";
$pgv_lang["enter_subject"]			= "Vnesite Zadevo za sporočilo.";
$pgv_lang["enter_body"] 			= "Vnesite nekaj besedila pred pošiljanjem.";
$pgv_lang["confirm_message_delete"]		= "Res želite zbrisati to sporočilo? Kasneje ga ne bo možno obnoviti.";
$pgv_lang["message_email1"] 			= "Naslednje sporočilo je bilo poslano na vaš PhpGedView uporabniški račun od upravitelja ";
$pgv_lang["message_email2"] 			= "Naslednje sporočilo ste poslali PhpGedView uporabniku:";
$pgv_lang["message_email3"] 			= "Naslednje sporočilo ste poslali PhpGedViewupraviltelju:";
$pgv_lang["viewing_url"]			= "To sporočilo je bilo poslano med gledanjem naslednjega URL: ";
$pgv_lang["messaging2_help"]			= "Ko boste poslali to sporočilo, boste sprejeli kopijo po pošti na naslov, ki ste ga posredovali.";
$pgv_lang["random_picture"] 		= "Naključna slika";
$pgv_lang["message_instructions"]	= "<b>Pomnite:</b> Zasebni podatki živečih ljudi bodo vidni le sorodnikom in prijateljem. Vprašani boste za vašo povezavo preden boste sprejeli zasebne podatke. Včasih so lahko zasebni tudi podatki umrlih. To je lahko tudi zato, ker ni dovolj infomracij o osebi, da bi lahko ugotovili ali je živa ali mrtva.<br /><br />Preden vprašate, preverite ali sprašujete za pravo osebo s tem da preverite datume, kraje in bližnje sorodnike.  Če vpišete rodoslovne popravke navedite tudi vire, kje ste podatke pridobili..<br /><br />";
$pgv_lang["sending_to"] 			= "To sporočilo bo poslano uporabniku #TO_USER#";
$pgv_lang["preferred_lang"] 		= "Ta uporabnik najraje sprejema sporočila v jeziku #USERLANG#";
$pgv_lang["gedcom_created_using"]	= "Ta GEDCOM je bil izdelan z <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]		= "Ta GEDCOM je bil izdelan <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_created_on2"] 	= " dne <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]		= "GEDCOM-ova statistika";
$pgv_lang["stat_individuals"]		= "oseb";
$pgv_lang["stat_families"]		= "družin";
$pgv_lang["stat_sources"]		= "virov";
$pgv_lang["stat_other"] 		= "Drugih zapisov";
$pgv_lang["stat_earliest_birth"] 	= "Najzgodnejše rojstno leto";
$pgv_lang["stat_latest_birth"] 		= "Zadnje rojstno leto";
$pgv_lang["stat_earliest_death"] 	= "Najzgodnejše leto smrti";
$pgv_lang["stat_latest_death"] 		= "Zadnja smrt v letu";
$pgv_lang["customize_page"] 		= "Priredi MyGedView portal";
$pgv_lang["customize_gedcom_page"]	= "Priredi to GEDCOM-ovo pozdravno stran";
$pgv_lang["upcoming_events_block"]	= "Bližnji dogodki";
$pgv_lang["upcoming_events_descr"]	= "Prihajajoči dogodki kažejo bližnje obletnice. Nastavite lahko količino podrobnosti. Upravitelj lahko nastavi tudi, kako daleč v prihodnost bo ta sklop kazal.";
$pgv_lang["todays_events_block"]	= "Na današnji dan";
$pgv_lang["todays_events_descr"]	= "Na današnji dan v vaši zgodovini... Sklop kaže obletnice za danes. Nastavite lahko količino prikazanih podrobnosti.";
$pgv_lang["todo_block"] = "&quot;Domače naloge&quot;";
$pgv_lang["todo_descr"] = "Sklop Domače naloge navaja vsa pomembna _TODO dejstva v bazi.";
$pgv_lang["todo_show_other"]     = "Pokaži naloge drugih uporabnikov";
$pgv_lang["todo_show_unassigned"]= "Pokaži nedoločene zadolžitve";
$pgv_lang["todo_show_future"]    = "Pokaži prihodnje naloge";
$pgv_lang["todo_nothing"]        = "Ni več &quot;Še naredi&quot; nalog.";
$pgv_lang["yahrzeit_block"]			= "Bližnje obletnice";
$pgv_lang["yahrzeit_descr"]			= "Bližnje obletnice kažejo obletnice smrti, ki se bodo zgodile v bližnji prihodnosti. Nastavite lahko obdobje prikaza. Upravitelj lahko nastavi, kako daleč v prihodnost kaže sklop.";
$pgv_lang["logged_in_users_block"]	= "Prijavljeni uporabniki";
$pgv_lang["logged_in_users_descr"]	= "Sklop Prijavljeni uporabniki kaže seznam trenutno prijavljenih uporabnikov.";
$pgv_lang["user_messages_block"]	= "Sporočila za uporabnike";
$pgv_lang["user_messages_descr"]	= "Sklop Sporočila za uporabnike kaže seznam sporočil, ki so bila poslana aktivnim uporabnikom.";
$pgv_lang["user_favorites_block"]	= "Uporabnikove najbolj priljubljene osebe";
$pgv_lang["user_favorites_descr"]	= "Sklop Uporabnikove najbolj priljubljene osebe kaže uporabniku seznam njegovih najbolj priljubljenih oseb v podatkovni bazi za preprostejši vpogled v njihove zapise.";
$pgv_lang["welcome_block"]			= "Pozdravna stran za uporabnika";
$pgv_lang["welcome_descr"]			= "Sklop Pozdravna stran za uporabnika kaže uporabniku tekoči datum in čas, hitre povezave za prenovo uporabniškega računa ali za hiter vpogled v njegovo preglednico prednikov in povezavo za za spremebe osebnega portala MyGedView po lastnih željah.";
$pgv_lang["random_media_block"] 	= "Naključne fotografije";
$pgv_lang["random_media_descr"] 	= "Sklop Naključne fotografije naključno izbere fotografijo ali drugo slikovno gradivo iz trenutno aktivirane podatkovne baze in jo prikaže uporabniku.<br /><br />Upravitelj določi, ali je slikovno gradivo prikazano v povezavi z osebo ali dogodkom.";
$pgv_lang["random_media_persons_or_all"]	= "Pokaži samo osebe, dogodke ali oboje?";
$pgv_lang["random_media_persons"]	= "Osebe";
$pgv_lang["random_media_events"]	= "Dogodki";
$pgv_lang["gedcom_block"]			= "GEDCOM-ov pozdrav";
$pgv_lang["gedcom_descr"]			= "Sklop GEDCOM-ov pozdrav deluje tako kot pozdravna stran za uporabnika. Pozdravi obiskovalca spletne strani in prikaže naslov trenutno aktivirane podatkovne baze kot tudi tekoči datum in čas.";
$pgv_lang["gedcom_favorites_block"] = "GEDCOM-ove najljubše osebe";
$pgv_lang["gedcom_favorites_descr"] = "Sklop GEDCOM-ove najljubše osebe daje upravitelju možnost, da določi osebe iz podatkovne baze, katerih podatki bodo preprosto dostopni vsem uporabnikom. Tako lahko izpostavite osebe, ki so še posebej pomembne za zgodovino rodbine.";
$pgv_lang["gedcom_stats_block"] 	= "GEDCOM-ovi statistični podatki";
$pgv_lang["gedcom_stats_descr"] 	= "Sklop GEDCOM-ovi statistični podatki kaže obiskovalcu osnovne podatke o podatkovnih bazah, npr. kdaj je bila ustvarjena in koliko ljudi vključuje.<br /><br />Vsebuje tudi seznam najpogostejših priimkov. Sklop lahko nastavite tako, da ne prikazuje seznama najpogostejših priimkov, GEDCOM pa lahko nastavite tudi tako, da s seznama odstranite ali dodate priimke. V GEDCOM-ovih nastavitvah lahko določite mejno število pojavitev za ta seznam.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Pokaži pogoste priimke?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Mesta posameznih sklopov na strani lahko prilagodite svojim željam.<br /><br />Stran je razdeljena na <b>glavne</b> in <b>desne</b> razdelke.	<b>Glavni</b> sklopi se pojavljajo v večjih sklopih neposredno pod naslovom strani. <b>Desni</b> razdelek se začne ob desni strani naslova in sega do dna strani.<br /><br />Vsak razdelek ima svoj seznam sklopov, ki bodo natisnjeni na strani v navedenem zaporedju. Sklope lahko dodate, odstranite ali prerazporedite po svojih željah. <br />Če kakšen od sklopov ostane nekoriščen, drugi sklopi zavzamejo celotno širino strani.<br /><br />";
$pgv_lang["login_block"]			= "Prijava";
$pgv_lang["login_descr"]			= "Sklop Prijava sprejme uporabnikovo ime in geslo in tako omogoči uporabniku vstop.";
$pgv_lang["theme_select_block"] 	= "Izbira teme";
$pgv_lang["theme_select_descr"] 	= "Sklop Izbira teme prikazuje tematski izbirnik, tudi kadar je izključena funkcija spreminjanja teme.";
$pgv_lang["block_top10_title"]		= "Deset najpogstejših priimkov";
$pgv_lang["block_top10"]			= "Deset najpogostejših priimkov";
$pgv_lang["block_top10_descr"]		= "Ta sklop prikazuje razpredelnico desetih najpogostejših priimkov v podatkovni bazi. Število prikazanih priimkov je nastavljivo. GEDCOM lahko nastavite tako, da s tega seznama določene priimke lahko odstranite.";
$pgv_lang["block_givn_top10_title"]		= "Deset najpogostejših osebnih imen";
$pgv_lang["block_givn_top10"]			= "Deset najpogostejših osebnih imen";
$pgv_lang["block_givn_top10_descr"]		= "Ta sklop kaže razpredelnico desetih najpogostejših osebnih imen v podatkovni bazi. Število prikazanih osebnih imen je nastavljivo.";

$pgv_lang["gedcom_news_block"]		= "GEDCOM-ove novice";
$pgv_lang["gedcom_news_descr"]		= "Sklop GEDCOM-ove novice kaže uporabniku novice ali članke, ki jih posreduje uporabnik z upraviteljskimi pooblastili.<br /><br />Ta sklop je primerno mesto za naznanjanje pomembnih sprememb v podatkovni bazi, družinskih srečanj ali obvestil o rojstvu otroka.";
$pgv_lang["gedcom_news_limit"]		= "Prikaz omeji po:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Brez omejitev";
$pgv_lang["gedcom_news_limit_date"]		= "Starost novic";
$pgv_lang["gedcom_news_limit_count"]	= "Število prikazanih novic";
$pgv_lang["gedcom_news_flag"]		= "Omejitev:";
$pgv_lang["gedcom_news_archive"] 	= "Poglej v arhiv";
$pgv_lang["user_news_block"]		= "Uporabnikov dnevnik";
$pgv_lang["user_news_descr"]		= "Sklop Uporabnikov dnevnik omogoča uporabniku elektronske zapiske ali elektronski dnevnik.";
$pgv_lang["my_journal"] 			= "Moj dnevnik";
$pgv_lang["no_journal"] 			= "Niste vpisali novih dnevniških zapisov.";
$pgv_lang["confirm_journal_delete"] = "Ali res želite zbrisati ta dnevniški zapis?";
$pgv_lang["add_journal"]			= "Dodaj dnevniški zapis";
$pgv_lang["gedcom_news"]			= "Novice";
$pgv_lang["confirm_news_delete"]	= "Ali res želite izbrisati to novico?";
$pgv_lang["add_news"]				= "Dodaj članek";
$pgv_lang["no_news"]				= "Ni novih člankov.";
$pgv_lang["edit_news"]				= "Dodaj/urejaj dnevniški zapis/novico";
$pgv_lang["enter_title"]			= "Dodaj naslov.";
$pgv_lang["enter_text"] 			= "Vpišite besedilo za ta dnevniški zapis/novico.";
$pgv_lang["news_saved"] 			= "Dnevniški zapis/novica uspešno shranjena.";
$pgv_lang["article_text"]			= "Besedilo zapisa:";
$pgv_lang["main_section"]			= "Sklopi glavnega razdelka";
$pgv_lang["right_section"]			= "Sklopi desnega razdelka";
$pgv_lang["available_blocks"]		= "Razpoložljivi sklopi";
$pgv_lang["move_up"]				= "Premakni gor";
$pgv_lang["move_down"]				= "Premakni dol";
$pgv_lang["move_right"] 			= "Premakni desno";
$pgv_lang["move_left"]				= "Premakni levo";
$pgv_lang["broadcast_all"]			= "Oznani vsem uporabnikom";
$pgv_lang["hit_count"]				= "Štetje zadetkov:";
$pgv_lang["phpgedview_message"] 	= "Sporočilo PhpGedView-a";
$pgv_lang["common_surnames"]		= "Najpogostejši priimki";
$pgv_lang["default_news_title"] 	= "Lepo pozdravljeni v našem rodovniku";
$pgv_lang["default_news_text"]		= "Rodoslovne podatke na tej spletni strani poganja <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a>.  Na tej strani sta uvod in splošen pregled rodovnika.<br /><br />Podatke v rodovniku začnete uporabljati tako, da izberete eno od preglednic s seznama preglednic, osebo s seznama posameznih oseb ali pa poiščete neko ime ali kraj.<br /><br />Če imate pri tem težave, kliknite na ikono za pomoč, kjer boste našli podatke o tem, kako uporabljati stran, ki jo trenutno gledate.<br /><br />Hvala za obisk teh strani.";
$pgv_lang["reset_default_blocks"]	= "Povrni na privzete sklope.";
$pgv_lang["recent_changes"] 		= "Zadnje spremembe";
$pgv_lang["recent_changes_block"]	= "Zadnje spremembe";
$pgv_lang["recent_changes_descr"]	= "Sklop Zadnje spremembe bo izpisal vse spremembe, ki so bile narejene v bazi zadnji mesec. Ta sklop vam pomaga slediti narejenim spremembam. Spremembe so zaznane samodejno z oznako CHAN, ki je definirana v standardu GEDCOM.";
$pgv_lang["recent_changes_none"]	= "<b>V zadnjih #pgv_lang[global_num1]# dneh ni bilo sprememb.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Spremembe v zadnjih #pgv_lang[global_num1]# dneh</b><br />";
$pgv_lang["show_empty_block"]		= "Naj bo ta sklop skrit, kadar je prazen?";
$pgv_lang["hide_block_warn"]		= "Če skrijete prazen sklop, ne boste mogli spreminjati njegih nastavitev, dokler ne bo spet viden z vpisom podatkov.";
$pgv_lang["delete_selected_messages"]	= "Izbriši izbrana sporočila";
$pgv_lang["use_blocks_for_default"]	= "Boste uporabljali te sklope kot privzeto nastavitev sklopa za vse uporabnike?";
$pgv_lang["block_not_configure"]	= "Tega sklopa ni mogoče nastaviti.";

//-- validate GEDCOM
$pgv_lang["add_media_tool"] 		= "Dodaj orodje za urejanje fotografij";

//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "Potomci in predniki";

//-- report engine
$pgv_lang["choose_report"]		= "Izberi želeno poročilo";
$pgv_lang["enter_report_values"]	= "Vnesi vrednosti poročila";
$pgv_lang["selected_report"]		= "Izbrano poročilo";
$pgv_lang["select_report"]		= "Izberi poročilo";
$pgv_lang["download_report"]		= "Prenesi poročilo";
$pgv_lang["reports"]			= "Poročila";
$pgv_lang["pdf_reports"]		= "Poročila PDF";
$pgv_lang["html_reports"]		= "Poročila HTML";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Rodovniško poročilo";
$pgv_lang["ahnentafel_header"]		= "Rodovniško poročilo za ";
$pgv_lang["ahnentafel_generation"]	= "Rod ";
$pgv_lang["ahnentafel_pronoun_m"]	= " ";
$pgv_lang["ahnentafel_pronoun_f"]	= " ";
$pgv_lang["ahnentafel_born_m"]		= "Rodil se je";
$pgv_lang["ahnentafel_born_f"]		= "Rodila se je";
$pgv_lang["ahnentafel_christened_m"] 	= "Krščen je bil";
$pgv_lang["ahnentafel_christened_f"]   = "Krščena je bila";
$pgv_lang["ahnentafel_married_m"]	= "Poročil se je z";
$pgv_lang["ahnentafel_married_f"]	= "Poročila se je z";
$pgv_lang["ahnentafel_married_post"]	= "&nbsp;";
$pgv_lang["ahnentafel_died_m"]		= "Umrl je";
$pgv_lang["ahnentafel_died_f"]		= "Umrla je";
$pgv_lang["ahnentafel_buried_m"]	= "Pokopan je bil";
$pgv_lang["ahnentafel_buried_f"]	= "Pokopana je bila";
$pgv_lang["ahnentafel_place"]		= " v ";
$pgv_lang["ahnentafel_no_details"]	= " vendar podrobnosti niso znane";
$pgv_lang["ahnentafel_on"]		= " ";

//-- Changes report
$pgv_lang["changes_report"]		= "Poročilo spremeb";
$pgv_lang["changes_pending_tot"]	= "Skupno število nerazrešenih sprememb: ";
$pgv_lang["changes_accepted_tot"]	= "Skupno število sprejetih sprememb: ";

//-- Descendancy report
$pgv_lang["descend_report"]		= "Poročilo o potomcih";
$pgv_lang["descendancy_header"]		= "Poročilo o potomcih za ";
$pgv_lang["son_of"]				= "sin od";
$pgv_lang["daughter_of"]			= "hči od";
$pgv_lang["child_of"]				= "Otrok od ";
$pgv_lang["children_of"]			= "Otroci od ";
$pgv_lang["descendancy_pronoun_m"]	= "On je ";
$pgv_lang["descendancy_pronoun_f"]	= "Ona je ";


$pgv_lang["family_group_report"]	= "Družinsko poročilo";
$pgv_lang["page"]					= "Stran";
$pgv_lang["of"] 					= "od";
$pgv_lang["enter_famid"]			= "Vnesi ID-številko družine";
$pgv_lang["show_sources"]			= "Prikaz virov?";
$pgv_lang["show_notes"] 			= "Prikaz zapiskov?";
$pgv_lang["show_basic"] 			= "Natisni osnovne dogodke, tudi kadar ni podatkov?";
$pgv_lang["show_photos"]			= "Pokaži slike?";
$pgv_lang["relatives_report_ext"]	= "Razširjeno poročilo sorodnikov";
$pgv_lang["with"]					= "z";
$pgv_lang["on"]						= "na";
$pgv_lang["in"]						= "v";
$pgv_lang["individual_report"]		= "Poročilo za osebo";
$pgv_lang["individual_with_rela_report"]	= "Poročilo bližnjih sorodnikov";
$pgv_lang["enter_pid"]				= "Vpiši ID-številko osebe";
$pgv_lang["generated_by"]			= "Pripravil";
$pgv_lang["list_children"]			= "Razvrsti otroke po datumu rojstva.";
$pgv_lang["birth_report"]			= "Rojstni dan in kraj";
$pgv_lang["birthplace"]				= "Rojstni kraj vsebuje";
$pgv_lang["birthdate1"]				= "Začetek razpona rojstnih datumov";
$pgv_lang["birthdate2"]				= "Konec razpona rojstnih datumov";
$pgv_lang["death_report"]			= "Smrt in kraj";
$pgv_lang["deathplace"]				= "Kraj smrti vsebuje";
$pgv_lang["deathdate1"]				= "Začetek razpona datumov smrti";
$pgv_lang["deathdate2"]				= "Konec razpona datumov smrti";
$pgv_lang["marr_report"]			= "Poročilo dneva in kraja poroke";
$pgv_lang["marrplace"]				= "Kraj poroke vsebuje";
$pgv_lang["marrdate1"]				= "Začetek razpona poročnih datumov";
$pgv_lang["marrdate2"]				= "Konec razpona poročnih datumov";
$pgv_lang["sort_by"]				= "Razvrsti po";
$pgv_lang["cemetery_report"]			= "Pokopališko poročilo";
$pgv_lang["burialplace"]			= "Mesto pokopa vsebuje";
$pgv_lang["fact_sources_report"]		= "Viri dejstev";
$pgv_lang["missing_facts_report"]		= "Manjkajoči podatki sorodnikov";
$pgv_lang["sources_to_events"]			= "Viri za dogodke";

$pgv_lang["cleanup"]				= "Počisti";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["statistics"] 			= "Statistični podatki";
$pgv_lang["show_stats_charts"]			= "Pokaži statistične preglednice";
$pgv_lang["decade_birth"]			= "Dekada rojstva";
$pgv_lang["decade_death"]			= "Dekada smrti";
$pgv_lang["decade_marriage"]			= "Dekada poroke";
$pgv_lang["avg_age"]				= "Povprečna starost";

//-- Merge Records
$pgv_lang["merge_same"] 			= "Zapisi niso istega tipa. Nemogoče je spojiti zapise različnih tipov.";
$pgv_lang["merge_step1"]			= "Spoji 1. korak od 3";
$pgv_lang["merge_step2"]			= "Spoji 2. korak od 3";
$pgv_lang["merge_step3"]			= "Spoji 3. korak od 3";
$pgv_lang["select_gedcom_records"]	= "Izberi dva GEDCOM-ova zapisa za spojitev. Zapisa morata biti istega tipa.";
$pgv_lang["merge_to"]				= "Spoji z ID-številko:";
$pgv_lang["merge_from"] 			= "Spoji z ID-številke:";
$pgv_lang["merge_facts_same"]		= "Naslednja dejstva so bila popolnoma enaka in bodo samodejno spojena.";
$pgv_lang["no_matches_found"]		= "Ni primerljivih dejstev";
$pgv_lang["unmatching_facts"]		= "Naslednja dejstva se ne ujamajo. Izberite podatek, ki bi ga radi obdržali.";
$pgv_lang["record"] 				= "Zapis";
$pgv_lang["adding"] 				= "Dodajanje";
$pgv_lang["updating_linked"]		= "Obnovitev povezanega zapisa";
$pgv_lang["merge_more"] 			= "Spoji več zapisov.";
$pgv_lang["same_ids"]				= "Vpisali ste isto ID-številko. Ne morete spojiti istih zapisov.";
$pgv_lang["updated_favorites"] 			= "obnovljenih priljubljenih povezav.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		= "Prikaz prednikov";
$pgv_lang["gen_ancestry_chart"]		= "#PEDIGREE GENERERATIONS# Preglednica prednikov po rodovih";
$pgv_lang["chart_style"]			= "Slog preglednice";
$pgv_lang["chart_list"]			= "Seznam";
$pgv_lang["chart_booklet"]   	= "Knjižica";
$pgv_lang["show_cousins"]			= "Pokaži bratrance/sestrične";
// 1st generation
$pgv_lang["sosa_2"] 				= "oče";
$pgv_lang["sosa_3"] 				= "mati";
// 2nd generation
$pgv_lang["sosa_4"] 				= "dedek";
$pgv_lang["sosa_5"] 				= "babica";
$pgv_lang["sosa_6"] 				= "dedek";
$pgv_lang["sosa_7"] 				= "babica";
// 3rd generation
$pgv_lang["sosa_8"] 				= "pradedek";
$pgv_lang["sosa_9"] 				= "prababica";
$pgv_lang["sosa_10"]				= "pradedek";
$pgv_lang["sosa_11"]				= "prababica";
$pgv_lang["sosa_12"]				= "pradedek";
$pgv_lang["sosa_13"]				= "prababica";
$pgv_lang["sosa_14"]				= "pradedek";
$pgv_lang["sosa_15"]				= "prababica";
// 4th generation
$pgv_lang["sosa_16"]				= "prapradedek";
$pgv_lang["sosa_17"]				= "praprababica";
$pgv_lang["sosa_18"]				= "prapradedek";
$pgv_lang["sosa_19"]				= "praprababica";
$pgv_lang["sosa_20"]				= "prapradedek";
$pgv_lang["sosa_21"]				= "praprababica";
$pgv_lang["sosa_22"]				= "prapradedek";
$pgv_lang["sosa_23"]				= "praprababica";
$pgv_lang["sosa_24"]				= "prapradedek";
$pgv_lang["sosa_25"]				= "praprababica";
$pgv_lang["sosa_26"]				= "prapradedek";
$pgv_lang["sosa_27"]				= "praprababica";
$pgv_lang["sosa_28"]				= "prapradedek";
$pgv_lang["sosa_29"]				= "praprababica";
$pgv_lang["sosa_30"]				= "prapradedek";
$pgv_lang["sosa_31"]				= "praprababica";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x pradedek po očetovi strani";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x prababica po očetovi strani";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x pradedek po mamini strani";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x prababica po mamini strani";

//-- FAN CHART
$pgv_lang["compact_chart"]			= "Zgoščen pregled";
$pgv_lang["fan_chart"]				= "Krožni prikaz";
$pgv_lang["gen_fan_chart"]  		= "#PEDIGREE_GENERATIONS# Število rodov krožnega prikaza";
$pgv_lang["fan_width"]				= "Širina";
$pgv_lang["gd_library"]				= "Napačna nastavitev PHP strežnika: za uporabo slikovnih funkcij je zahtevana knjižnica GD 2.x.";
$pgv_lang["gd_freetype"]			= "Napačna nastavitev PHP strežnika: za uporabo fontov TrueType je zahtevana knjižnica Free Type.";
$pgv_lang["gd_helplink"]			= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]			= "Datoteke s fonti ni na PHP strežniku";
$pgv_lang["fanchart_IE"]			= "Vaš brskalnik ne omogoča neposrednega natisa pahljačaste preglednice. Pritisnite desni gumb na miški, potem pa shranite in natisnite.";

//-- RSS Feed
$pgv_lang["rss_descr"]				= "Novice in povezave s spletne strani #GEDCOM_TITLE#";
$pgv_lang["rss_logo_descr"]			= "Objave PhpGedView";
$pgv_lang["rss_feeds"]				= "RSS objave";
$pgv_lang["no_feed_title"]			= "Ni objav";
$pgv_lang["no_feed"]				= "Za to stran PhpGedView ni objav";
$pgv_lang["feed_login"]				= "Če imate uporabniški račun za stran PhpGedView, se lahko <a href=\"#AUTH_URL#\">prijavite</a> na strežnik z osnovno HTTP zaščito in si ogledate zasebne podatke.";
$pgv_lang["authenticated_feed"]		= "Zasebne objave";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] = "spremljevalec";
$pgv_lang["attending"] = "spremljanje";
$pgv_lang["best_man"] = "priča";
$pgv_lang["bridesmaid"] = "družica";
$pgv_lang["buyer"] = "kupec";
$pgv_lang["circumciser"] = "obrezovalec";
$pgv_lang["civil_registrar"] = "matičar";
$pgv_lang["employee"] = "Uslužbenec";
$pgv_lang["foster_child"] = "pastorek";
$pgv_lang["foster_father"] = "krušni oče";
$pgv_lang["foster_mother"] = "krušna mati";
$pgv_lang["employer"] = "Delodajalec";
$pgv_lang["friend"] = "prijatelj";
$pgv_lang["godfather"] = "boter";
$pgv_lang["godmother"] = "botra";
$pgv_lang["godparent"] = "boter/botra";
$pgv_lang["godson"]		= "krščenec";
$pgv_lang["goddaughter"] = "krščenka";
$pgv_lang["godchild"]	= "krščenec/ka";
$pgv_lang["guardian"]	= "skrbnik";
$pgv_lang["informant"] = "obveščevalec";
$pgv_lang["lodger"] = "podnajemnik";
$pgv_lang["nanny"] = "dojilja";
$pgv_lang["nurse"] = "medicinska sestra";
$pgv_lang["owner"] = "lastnik";
$pgv_lang["priest"] = "duhovnik";
$pgv_lang["rabbi"] = "rabin";
$pgv_lang["registry_officer"] = "uslužbenec na matičnem uradu";
$pgv_lang["seller"] = "prodajalec";
$pgv_lang["servant"] = "služabnik";
$pgv_lang["slave"] = "suženj";
$pgv_lang["twin"] = "dvojček";
$pgv_lang["twin_brother"] = "dvojček";
$pgv_lang["twin_sister"] = "dvojčica";
$pgv_lang["ward"] = "rejenec";
$pgv_lang["witness"] = "priča";

//-- statistics utility
$pgv_lang["stat_create"]		= "Ustvari svojo preglednico";
$pgv_lang["statutci"]			= "kazala ni mogoče ustvariti";
$pgv_lang["statnnames"]                = "Skupno število imen";
$pgv_lang["statnfam"]                  = "Skupno število družin";
$pgv_lang["statnmale"]                 = "Skupno število moških";
$pgv_lang["statnfemale"]               = "Skupno število žensk";
$pgv_lang["with_sources"]	       = "Z viri";
$pgv_lang["without_sources"]	       = "Brez virov";
$pgv_lang["stat_sindi"]                = "Oseb z viri";
$pgv_lang["stat_sfam"]                 = "Družin z viri";
$pgv_lang["statvars"]		       = "Vnesi naslednje parametre za izris";
$pgv_lang["statlxa"]		       = "Izberi vrsto preglednice::";
$pgv_lang["statlya"]		       = "rezultati:";
$pgv_lang["statlza"]		       = "kategorije";
$pgv_lang["map_type"]                  = "Vrsta zemljevida";
$pgv_lang["stat_1_map"]                = "Porazdelitev oseb";
$pgv_lang["stat_2_map"]                = "Rojstva po državah";
$pgv_lang["stat_3_map"]                = "Smrti po državah";
$pgv_lang["stat_4_map"]                = "Poroke po državah";
$pgv_lang["stat_5_birth"]	       = "Rojstva po stoletjih";
$pgv_lang["stat_6_death"]	       = "Smrti po stoletjih";
$pgv_lang["stat_7_marr"]	       = "Porok po stoletjih";
$pgv_lang["stat_7_div"]		       = "Ločitev po stoletjih";
$pgv_lang["stat_8_fam"]                = "Družin z viri";
$pgv_lang["stat_9_indi"]               = "Osebe z viri";
$pgv_lang["stat_10_none"]		 = "Nič";
$pgv_lang["stat_11_mb"]			 = "Mesec rojstva";
$pgv_lang["stat_12_md"]			 = "Mesec smrti";
$pgv_lang["stat_13_mm"]			 = "Mesec poroke";
$pgv_lang["stat_14_mb1"]		= "Mesec rojstva prvega otroka v sorodu";
$pgv_lang["stat_15_mm1"]		= "Mesec prve poroke";
$pgv_lang["stat_16_mmb"]		= "Število mesecev med poroko in prvim otrokom";
$pgv_lang["stat_17_arb"]			 = "Starost glede na leto rojstva";
$pgv_lang["stat_18_ard"]			 = "Starost glede na leto smrti";
$pgv_lang["stat_18_aard"]		= "Povprečna starost glede na smrti v stoletju";
$pgv_lang["stat_19_arm"]			 = "Starost v letu poroke";
$pgv_lang["stat_19_aarm"]		= "Povprečna starost v stoletju poroke";
$pgv_lang["stat_20_arm1"]			 = "Starost v letu prve poroke";
$pgv_lang["stat_21_nok"]			 = "Število vseh otrok";
$pgv_lang["stat_22_fwok"]		= "Število družin brez otrok";
$pgv_lang["stat_200_none"]			 = "Vse (ali prazno)";
$pgv_lang["stat_201_num"]			 = "V številkah";
$pgv_lang["stat_202_perc"]			 = "V odstotkih";
$pgv_lang["stat_300_none"]		= "Nič";
$pgv_lang["stat_301_mf"]			 = "Spol";
$pgv_lang["stat_302_cgp"]			 = "Obdobja med datumi";
$pgv_lang["century"]			= "stoletje";
$pgv_lang["stat_age"]			= "Starost";
$pgv_lang["no_date_fam"]		= "neznano";
$pgv_lang["statar_xgp"]			 = "meje za časovna obdobja:";
$pgv_lang["statar_xgl"]			 = "meje za starosti:";
$pgv_lang["statar_xgm"]			 = "meje za mesec:";
$pgv_lang["statar_xga"]			 = "meje za številke:";
$pgv_lang["statar_zgp"]			 = "meje za obdobja med datumi:";
$pgv_lang["less"]               	 = "manj kot";
$pgv_lang["over"]                        = "preko";
$pgv_lang["interval"]                  	 = "obdobje";
$pgv_lang["aft_marr"]                  	 = "mesecev po poroki";
$pgv_lang["bef_marr"]                  	 = "mesecev pred poroko";
$pgv_lang["quarters"]                  	 = "trimesečij po poroki";
$pgv_lang["half_year"]                	 = "polletij po poroki";
$pgv_lang["one_child"]                 	 = "obdobje enega otroka";
$pgv_lang["two_children"]             	 = "obdobje med otrokoma";
$pgv_lang["statreset"]			 = "Ponastavi";
$pgv_lang["statsubmit"]			 = "Pokaži izris";
$pgv_lang["stat_largest_families"] 	 = "Največje družine";
$pgv_lang["stat_own_charts"]		 = "Lastne preglednice";
$pgv_lang["statnliving"]		 = "Vseh živečih";
$pgv_lang["statndead"]			 = "Vseh mrtvih";
$pgv_lang["stat_births"]		 = "Vseh rojstev";
$pgv_lang["stat_marriages"]		 = "Vseh porok";
$pgv_lang["stat_divorces"]		 = "Vseh ločitev";
$pgv_lang["stat_deaths"]		 = "Vseh smrti";
$pgv_lang["stat_first_birth"]		= "Najzgodnejše rojstvo";
$pgv_lang["stat_first_marriage"]	= "Najzgodnejša poroka";
$pgv_lang["stat_first_divorce"]		= "Najzgodnejša ločitev";
$pgv_lang["stat_first_death"]		= "Najzgodnejš smrt";
$pgv_lang["stat_last_birth"]		= "Zadnje rojstvo";
$pgv_lang["stat_last_marriage"]		= "Zadnja poroka";
$pgv_lang["stat_last_divorce"]		= "Zadnja ločitev";
$pgv_lang["stat_last_death"]		= "Zadnja smrt";
$pgv_lang["stat_lifespan"]		= "Življenska doba";
$pgv_lang["stat_lived_longest"]		= "Najvišja starost ob smrti";
$pgv_lang["stat_live_longest"]		= "Najstarejši živeči ljudje";
$pgv_lang["stat_marr_age"]		= "Trajanje zakona";
$pgv_lang["stat_long_marr_age"]		= "Najdaljši zakon";
$pgv_lang["stat_short_marr_age"]	= "Najkrajši zakon";
$pgv_lang["stat_youngest_male"]		= "Najmlajši fantek";
$pgv_lang["stat_youngest_female"]	= "Najmlajša deklica";
$pgv_lang["stat_oldest_male"]		= "Najstarejši moški";
$pgv_lang["stat_oldest_female"]		= "Najstarejša ženska";
$pgv_lang["stat_childbirth_age"]	= "Starost ob rojstvu otroka";
$pgv_lang["stat_youngest_father"]	= "Najmlajši oče";
$pgv_lang["stat_youngest_mother"]	= "Najmlajša mater";
$pgv_lang["stat_oldest_father"]		= "Najstarejši oče";
$pgv_lang["stat_oldest_mother"]		= "Najstarejša mater";
$pgv_lang["stat_children_in_fam"]	= "Otrok v družini";
$pgv_lang["stat_largest_gfamilies"]	= "Največja družina prastaršev";
$pgv_lang["stat_age_difference"]	= "Razlika v starosti";
$pgv_lang["stat_age_siblings"]		= "Starost med potomci";
$pgv_lang["stat_top_age_siblings"]	= "Največja razlika v letih med potomci";
$pgv_lang["stat_age_mf_spouse"]		= "Starost med možem in ženo";
$pgv_lang["stat_age_fm_spouse"]		= "Starost med ženo in možem";
$pgv_lang["stat_names"]			= "Imena";
$pgv_lang["statnsurnames"]		= "Vseh priimkov";
$pgv_lang["statngivennames"]		= "Vseh imen";
$pgv_lang["top_surnames"]		= "Napogostejši priimki";
$pgv_lang["top_givennames"]		= "Najpogostejša imena";
$pgv_lang["events"]			= "Dogodki";
$pgv_lang["stat_records"]		= "Zapisi";
$pgv_lang["stat_notes"]			= "Zapiski";
$pgv_lang["stat_first_event"]		= "Prvi dogodek";
$pgv_lang["stat_last_event"]		= "Zadnji dogodek";
$pgv_lang["stat_places"]		= "Kraji";
$pgv_lang["stat_birth_places"]		= "Rojstni kraji";
$pgv_lang["stat_marriage_places"]	= "Kraji porok";
$pgv_lang["stat_death_places"]		= "Kraji smrti";
$pgv_lang["stat_countries"]		= "Dogodki v državah";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Izris statističnih podatkov";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplinfo"]			 = "podatki o izrisu:";
$pgv_lang["stpltype"]			 = "tip:";
$pgv_lang["stplnoim"]			 = " v delu:";
$pgv_lang["stplmf"]			 = " po spolu";
$pgv_lang["stplipot"]			 = " na časovno obdobje";
$pgv_lang["stplmonth"]			 = "mesec";
$pgv_lang["stplnumbers"]		 = "številke za družino";
$pgv_lang["stplnuch"] 			 = "otrok";
$pgv_lang["stplage"]			 = "starost";
$pgv_lang["stplperc"]			 = "odstotki";
$pgv_lang["stplnumof"]			 = "Prešteto ";
$pgv_lang["stplmarrbirth"]		 = "Število mesecev med poroko in prvim otrokom";
$pgv_lang["indi_distribution_chart"]     = "Porazdelitev oseb";
$pgv_lang["surname_distribution_chart"]	 = "Porazdelitev priimkov";
$pgv_lang["g_chart_high"]    		 = "Največja populacija";
$pgv_lang["g_chart_low"]               	 = "Najmanjša populacija";
$pgv_lang["g_chart_nobody"]            	 = "Prazno";
$pgv_lang["area_chart"]                	 = "Geografsko področje";
$pgv_lang["europe_chart"]              	 = "Evropa";
$pgv_lang["s_america_chart"]  		 = "Južna Amerika";
$pgv_lang["asia_chart"]               	 = "Azija";
$pgv_lang["middle_east_chart"]		 = "Bližnji vzhod";
$pgv_lang["africa_chart"]              	 = "Afrika";
$pgv_lang["world_chart"]               	 = "Svet";

//-- alive in year
$pgv_lang["alive_in_year"]			= "Živi v letu";
$pgv_lang["is_alive_in"]			= "živeč/a v letu #YEAR#";
$pgv_lang["alive"]					= "Živ/a ";
$pgv_lang["dead"]					= "Mrtev/a ";
$pgv_lang["maybe"]					= "Mogoče ";
$pgv_lang["both_alive"]					= "Oba živa ";
$pgv_lang["both_dead"]					= "Oba mrtva ";

//-- Help system
$pgv_lang["definitions"]			= "Definicije";

//-- Index_edit
$pgv_lang["block_desc"]				= "Označi opise";
$pgv_lang["click_here"]				= "Klikni za nadaljevanje";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Kliknite ta gumb za shranitev sprememb.<br /><br />Čeprav se boste vrnili na #pgv_lang[welcome]# ali #pgv_lang[mygedview]# stran, vaših sprememb mogoče ne bo videti. Za ustrezen prikaz sprememb boste mogoče morali uporabiti funkcijo ponovnega nalaganja na vašem brskalniku.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Tu je kratek opis posameznih blokov, ki jih lahko postavite na #pgv_lang[welcome]# ali #pgv_lang[mygedview]# stran.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]	= "&nbsp;";

//-- Find page
$pgv_lang["total_places"]			= "Najdeni kraji";
$pgv_lang["media_contains"]			= "Fotografija vsebuje:";
$pgv_lang["repo_contains"]			= "Kraj počitka vsebuje:";
$pgv_lang["shared_note_contains"]		= "Skupen zapisek vsebuje:";
$pgv_lang["source_contains"]			= "Vir vsebuje:";
$pgv_lang["display_all"]			= "Prikaži vse";

// FAQ Page
$pgv_lang["add_faq_header"] = "Zaglavje pogostih vprašanj";
$pgv_lang["add_faq_body"] = "Vsebina pogostih vprašanj";
$pgv_lang["add_faq_order"] = "Mesto pogostih vprašanj";
$pgv_lang["add_faq_visibility"] = "Prikaz pogostih vprašanj";
$pgv_lang["no_faq_items"] = "Seznam pogostih vprašanj je prazen.";
$pgv_lang["position_item"] = "Postavitveno mesto";
$pgv_lang["faq_list"] = "Seznam pogostih vprašanj";
$pgv_lang["confirm_faq_delete"] = "Ali res želite izbrisati vnešeno vprašanje";
$pgv_lang["preview"] =  "Predogled";
$pgv_lang["no_id"] = "ID-številka vprašanja ni navedena!";

// Help search
$pgv_lang["hs_title"] 			= "Pomoč pri iskanju";
$pgv_lang["hs_search"] 			= "Išči";
$pgv_lang["hs_close"] 			= "Zapri okno";
$pgv_lang["hs_results"] 		= "Najdeni rezultati:";
$pgv_lang["hs_keyword"] 		= "Poišči";
$pgv_lang["hs_searchin"]		= "Išči v";
$pgv_lang["hs_searchuser"]		= "Pomoč za uporabnika";
$pgv_lang["hs_searchmodules"]	= "Pomoč za module";
$pgv_lang["hs_searchconfig"]	= "Pomoč za upravitelja";
$pgv_lang["hs_searchhow"]		= "Iskalni tip";
$pgv_lang["hs_searchall"]		= "Vse besede";
$pgv_lang["hs_searchany"]		= "Poljubna beseda";
$pgv_lang["hs_searchsentence"]	= "Natačno ta zveza";
$pgv_lang["hs_intruehelp"]		= "Samo besedilo za pomoč";
$pgv_lang["hs_inallhelp"]		= "Celotno besedilo";

// Media import
$pgv_lang["choose"] = "Izberi: ";
$pgv_lang["account_information"] = "Podatki o računu";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] = "avdioposnetek";
$pgv_lang["TYPE__book"] = "knjiga";
$pgv_lang["TYPE__card"] = "kartica";
$pgv_lang["TYPE__certificate"] = "potrdilo";
$pgv_lang["TYPE__coat"] = "Grb";
$pgv_lang["TYPE__document"] = "dokument";
$pgv_lang["TYPE__electronic"] = "elektronski medij";
$pgv_lang["TYPE__fiche"] = "mikrofiš";
$pgv_lang["TYPE__film"] = "microfilm";
$pgv_lang["TYPE__magazine"] = "revija";
$pgv_lang["TYPE__manuscript"] = "rokopis";
$pgv_lang["TYPE__map"] = "zemljevid";
$pgv_lang["TYPE__newspaper"] = "časopis";
$pgv_lang["TYPE__photo"] = "fotografija";
$pgv_lang["TYPE__tombstone"] = "nagrobnik";
$pgv_lang["TYPE__video"] = "videoposentek";
$pgv_lang["TYPE__painting"] = "likovno delo";
$pgv_lang["TYPE__other"] = "drugo";

//-- Other media suff
$pgv_lang["view_slideshow"] 		= "Prikaži diaprojekcijo";
$pgv_lang["download_image"]			= "Prenesi datoteko";
$pgv_lang["no_media"]				= "Ni najdenih fotografij";
$pgv_lang["media_privacy"]			= "Zaradi omejitve zasebnosti tega ne morete videti.";
$pgv_lang["relations_heading"]		= "Slika se navezuje na:";
$pgv_lang["file_size"]				= "Velikost datoteke";
$pgv_lang["img_size"]				= "Velikost slike";
$pgv_lang["media_broken"]			= "Datoteka fotografije je okvarjena, zato je ne morete označiti z vodnim žigom";
$pgv_lang["unknown_mime"]			= "Napaka v požarnem zidu fotografij: >Unknown Mimetype< za datoteko";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "Naznano dejanje: [action].";
$pgv_lang["module_error_unknown_type"] = "Neznani tip modula.";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "Pokaži osebe, ki so živele v označenem letu.";
$pgv_lang["button_BIRT_Y100"] = "Pokaži osebe, ki so se rodile v zadnjih sto letih.";
$pgv_lang["button_BIRT_YES"] = "Pokaži osebe, ki so se rodile pred več kot sto leti.";
$pgv_lang["button_DEAT_H"] = "Pokaži pare, pri katerih je pokojni samo mož.";
$pgv_lang["button_DEAT_N"] = "Pokaži še živeče pare oz. pare, pri katerih sta živa oba zakonca.";
$pgv_lang["button_DEAT_W"] = "Pokaži pare, pri katerih je pokojna samo žena.";
$pgv_lang["button_DEAT_Y"] = "Pokaži že pokojne ljudi oz. pare, pri katerih sta umrla že oba zakonca.";
$pgv_lang["button_DEAT_Y100"] = "Pokaži ljudi, ki so umrli v zadnjih sto letih.";
$pgv_lang["button_DEAT_YES"] = "Pokaži ljudi, ki so umrli pred več kot sto leti.";
$pgv_lang["button_MARR_DIV"] = "Pokaži ločene pare.";
$pgv_lang["button_MARR_U"] = "Pokaži pare z neznanim datumom poroke.";
$pgv_lang["button_MARR_Y100"] = "Pokaži pare, ki so se poročili v zadnji sto letih.";
$pgv_lang["button_MARR_YES"] = "Pokaži pare, ki so se poročili pred več kot sto leti.";
$pgv_lang["button_reset"] = "Ponastavi na privzete vredosti seznama.";
$pgv_lang["button_SEX_F"] = "Pokaži samo ženske.";
$pgv_lang["button_SEX_M"] = "Pokaži samo moške.";
$pgv_lang["button_SEX_U"] = "Pokaži samo osebe, katerih spol ni znan.";
$pgv_lang["button_TREE_L"] = "Pokaži pare ali osebe, ki so «listi».  Te osebe so žive, vendar v bazi nimajo zapisov otrok.";
$pgv_lang["button_TREE_R"] = "Pokaži «izhodiščne» pare ali posamezne osebe. Te ljudi bi lahko imenovali tudi «patriarhi».  Te osebe nimajo zapisov staršev v bazi.";
$pgv_lang["sort_column"] = "Razvrsti po tem stolpcu.";
?>
