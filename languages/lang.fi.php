<?php
/**
 * Finnish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team
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
 * @subpackage Languages
 * @author Jaakko Sarell, Jani Miettinen, Matti Valve, Marko Kohtala
 * @version $Id: lang.fi.php 6989 2010-11-09 03:26:25Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
$pgv_lang["gedcomid"]		= "GEDCOM INDI-tietueen ID";
$pgv_lang["exact"]			= "Tarkka";
$pgv_lang["more_fields"]		= "Lisää uusia kenttiä";
$pgv_lang["install_step_8"] 		= "Aloita";
$pgv_lang["parent_family"]		= "Vanhempien perhe";
$pgv_lang["step_parent_family"]	= "Puolivanhemman perhe";
$pgv_lang["immediate_family"]	= "Oma perhe";

$pgv_lang["load_full_tree"]		= "Näytä tämä puu täyden sivun interaktiivisena puuna";
$pgv_lang["hide_show_spouses"]	= "Näytä tai piilota useammat puolisot";

$pgv_lang["interactive_tree"]		= "Interaktiivinen puu";
$pgv_lang["example"]			= "Esimerkki:";
$pgv_lang["tree"]			= "Puu";
$pgv_lang["ellipsis"]			= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]		= "Näytä tuntematon sukupuoli";
$pgv_lang["age_differences"]		= "Näytä ikäerot";
$pgv_lang["multi_site_search"] 	= "Haku monesta palvelusta";
$pgv_lang["switch_lifespan"]		= "Näytä elinkaarikaavio";
$pgv_lang["switch_timeline"]		= "Näytä aikajanakaavio";
$pgv_lang["differences"]		= "Eroavuudet";
$pgv_lang["charts_block"]		= "Kaavioalue";
$pgv_lang["charts_block_descr"]	= "Kaavioalueen avulla voit sijoittaa kaavion tervetuloasivulle tai OmaGedView-portaalisivulle. Voit konfiguroida alueen näyttämään esipovi-, jälkipolvi- tai tiimalasinäkymän. Voit myös valita kaavion lähtöhenkilön.";
$pgv_lang["charts_click_box"]		= "Klikkaa mitä tahansa ruutua saadaksesi lisätietoa kyseisestä henkilöstä.";
$pgv_lang["chart_type"]		= "Kaaviotyyppi";
$pgv_lang["changedate1"]		= "Muutospäivämäärien loppualue";
$pgv_lang["changedate2"]		= "Muutospäivämäärien alkualue";
$pgv_lang["search_place_word"]	= "Vain kokonaiset sanat";
$pgv_lang["invalid_search_input"] 	= "Anna vuosiluvun lisäksi etunimi, sukunimi tai paikka.";
$pgv_lang["duplicate_username"] 	= "Tämä käyttäjätunnus on jo olemassa. Valitse toinen käyttäjätunnus.";
$pgv_lang["cache_life"]		= "Välimuistitiedoston elinikä";
$pgv_lang["genealogy"]		= "sukututkimus";
$pgv_lang["activate"]			= "Aktivoi";
$pgv_lang["deactivate"]		= "Poista käytöstä";
$pgv_lang["play"]			= "Käynnistä";
$pgv_lang["stop"]			= "Pysäytä";
$pgv_lang["random_media_start_slide"]	= "Aloitetaanko diaesitys sivun latautuessa?";
$pgv_lang["random_media_ajax_controls"]	= "Näytetäänkö AJAX-kontrollit?";
$pgv_lang["description"]		= "Kuvaus";
$pgv_lang["current_dir"]		= "Nykyinen kansio";
$pgv_lang["SHOW_ID_NUMBERS"]	= "Näytä ID-tunnus nimen vieressä";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Näytä korostetut kuvat henkilöalueilla";
$pgv_lang["view_img_details"]	= "Näytä kuvan tiedot";
$pgv_lang["server_folder"]		= "Kansion nimi palvelimella";
$pgv_lang["medialist_recursive"]	= "Luettele tiedostot alikansioissa";
$pgv_lang["media_options"]		= "Media-asetukset";
$pgv_lang["confirm_password"]	= "Salasana on toistettava.";
$pgv_lang["enter_email"]		= "Sinun on täytettävä sähköpostiosoite.";
$pgv_lang["name"]			= "Nimi";
$pgv_lang["children"]			= "Lapset";
$pgv_lang["child"]			= "Lapsi";
$pgv_lang["family"] 			= "Perhe";
$pgv_lang["source_menu"]		= "Vaihtoehtoja lähteille";
$pgv_lang["repo_menu"]		= "Vaihtoehtoja tietovarastolle";
$pgv_lang["search_DM"]		= "Daitch-Mokotoff";
$pgv_lang["other_searches"]		= "Muita hakuja";
$pgv_lang["welcome_page"]		= "Tervetulosivu";
$pgv_lang["loading"]			= "Ladataan...";
$pgv_lang["clear_chart"]		= "Tyhjennä kaavio";
$pgv_lang["file_information"]		= "Tiedostoinformaatio";
$pgv_lang["choose_file_type"]	= "Valitse tiedostomuoto";
$pgv_lang["add_individual_by_id"]	= "Lisää henkilö ID-tunnuksen avulla";
$pgv_lang["advanced_options"]	= "Lisäasetukset";
$pgv_lang["zip_files"]			= "Zip-tiedosto(t)";
$pgv_lang["include_media"]		= "Sisällytä media (automaattisesti zip-tiedosto)";
$pgv_lang["roman_surn"]		= "Romanisoitu sukunimi";
$pgv_lang["roman_givn"]		= "Romanisoidut etunimet";
$pgv_lang["include"]			= "Sisällytä:";
$pgv_lang["page_x_of_y"]		= "Sivu #GLOBALS[currentPage]# / #GLOBALS[lastPage]#";
$pgv_lang["page_size"]		= "Sivun koko";

$pgv_lang["record_not_found"]	= "Pyydettyä GEDCOM-tietuetta ei löytynyt. Se voi johtua joko linkistä virheelliseen henkilöön tai vikaantuneesta GEDCOM-tiedostosta.";
$pgv_lang["result_page"]		= "Tulossivu";
$pgv_lang["edit_media"]		= "Muokkaa mediaa (#GLOBALS[pid]#)";
$pgv_lang["wiki_main_page"]		= "Wiki pääsivu";
$pgv_lang["wiki_users_guide"]	= "Wiki käyttäjän opas";
$pgv_lang["wiki_admin_guide"]	= "Wiki ylläpitäjän opas";
$pgv_lang["no_search_for"]		= "Valitse haettava vaihtoehto.";
$pgv_lang["no_search_site"]		= "Valitse vähintään yksi etäsivusto.";
$pgv_lang["search_sites"] 		= "Sivustot, joilta haku suoritetaan";
$pgv_lang["site_list"]			= "Sivusto: ";
$pgv_lang["site_had"]			= "sisälsi seuraavan";

$pgv_lang["label_search_engine_detected"]  = "Havaittu hakurobotti";
$pgv_lang["ex-spouse"] 		= "Entinen puoliso";
$pgv_lang["ex-wife"] 			= "Entinen vaimo";
$pgv_lang["ex-husband"] 		= "Entinen mies";
$pgv_lang["noemail"] 			= "Osoitteet ilman sähköpostiosoitetta";
$pgv_lang["onlyemail"] 		= "Vain osoitteet, joilla on sähköpostiosoite";
$pgv_lang["maxviews_exceeded"]	= "Sivun hakumäärä #GLOBALS[MAX_VIEWS]# / #GLOBALS[MAX_VIEW_TIME]# sekuntia ylittynyt.";
$pgv_lang["broadcast_not_logged_6mo"] = "Lähetä viesti käyttäjille, jotka eivät ole kirjautuneet 6 kuukauteen.";
$pgv_lang["broadcast_never_logged_in"]  = "Lähetä viesti käyttäjille, jotka eivät koskaan ole kirjautuneet.";
$pgv_lang["stats_to_show"]		= "Valitse tässä lohkossa näytettävät tilastotiedot";
$pgv_lang["stat_avg_age_at_death"]	= "Keskimääräinen ikä kuollessa";
$pgv_lang["stat_longest_life"]		= "Vanhimman henkilön ikä";
$pgv_lang["stat_most_children"]	= "Suurin lapsiluku perheessä";
$pgv_lang["stat_average_children"]	= "Keskimääräinen lapsiluku perheessä";
$pgv_lang["stat_events"]		= "Tapahtumia yhteensä";
$pgv_lang["stat_media"]		= "Mediakohteita";
$pgv_lang["stat_surnames"]		= "Sukunimiä yhteensä";
$pgv_lang["stat_users"]		= "Käyttäjiä yhteensä";
$pgv_lang["no_family_facts"]		= "Ei tietoja tästä perheestä";
$pgv_lang["stat_males"]		= "Miehiä";
$pgv_lang["stat_females"]		= "Naisia";
$pgv_lang["stat_link"]			= "Näytä tilastotiedot graaffeina";
$pgv_lang["print_stat_link"]		= "Näytä linkki tilastotietokaavioihin?";

$pgv_lang["sunday_1st"]		= "su";
$pgv_lang["monday_1st"]		= "ma";
$pgv_lang["tuesday_1st"]		= "ti";
$pgv_lang["wednesday_1st"]		= "ke";
$pgv_lang["thursday_1st"]		= "to";
$pgv_lang["friday_1st"]		= "pe";
$pgv_lang["saturday_1st"]		= "la";

$pgv_lang["jan_1st"]			= "tammi";
$pgv_lang["feb_1st"]			= "helmi";
$pgv_lang["mar_1st"]			= "maalis";
$pgv_lang["apr_1st"]			= "huhti";
$pgv_lang["may_1st"]			= "touko";
$pgv_lang["jun_1st"]			= "kesä";
$pgv_lang["jul_1st"]			= "heinä";
$pgv_lang["aug_1st"]			= "elo";
$pgv_lang["sep_1st"]			= "syys";
$pgv_lang["oct_1st"]			= "loka";
$pgv_lang["nov_1st"]			= "marras";
$pgv_lang["dec_1st"]			= "joulu";

$pgv_lang["edit_source"]		= "Muokkaa lähdettä";
$pgv_lang["familybook_chart"]		= "Sukukirjakaavio";
$pgv_lang["family_of"]			= "Perhe:&nbsp;";
$pgv_lang["descent_steps"]		= "Jälkipolvien lukumäärä";
$pgv_lang["cancel"]			= "Peruuta";

$pgv_lang["cookie_help"]		= "Tämä sivusto käyttää evästeitä seuraamaan sisääkirjautumistilaasi.<br /><br />Et näytä sallineen evästeitä selaimessasi. Sinun on sallittava evästeiden käyttö ennen kuin voit kirjautua. Katso selaimesi aputoiminnoista (helpeistä) miten evästeet sallitaan.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]		= "Tämän henkilön tiedot on yhdistetty toisesta palvelusta.";
$pgv_lang["link_remote"]            	= "Yhdistä ulkoinen henkilö";
$pgv_lang["title_search_link"]      	= "Lisää paikallinen yhteys";
$pgv_lang["label_site_url2"]        	= "Verkko-osoite (URL)";
//new stuff

$pgv_lang["delete_family_confirm"]	= "Perheen poistaminen poistaa kaikki henkilöiden väliset yhteydet mutta jättää henkilöt paikalleen. Haluatko todella poistaa tämän perheen?";
$pgv_lang["delete_family"]		= "Poista perhe";
$pgv_lang["add_favorite"]		= "Lisää uusi suosikki";
$pgv_lang["url"]			= "URL";
$pgv_lang["add_fav_enter_note"]	= "Kirjoita lisätieto tästä suosikista";
$pgv_lang["add_fav_or_enter_url"]	= "TAI<br />\nlisää URL-osoite ja otsikko";
$pgv_lang["add_fav_enter_id"]	= "Lisää henkilö, perhe tai lähde-ID";
$pgv_lang["next_email_sent"]		= "Seuraava sähköpostimuistutus lähetetään ";
$pgv_lang["last_email_sent"]		= "Viimeisin sähköpostimuistutus lähetettiin ";
$pgv_lang["remove_child"]		= "Poista tämä lapsi perheestä";
$pgv_lang["link_new_husb"]		= "Liitä mies puolisoksi käyttäen tiedostossa olevaa henkilöä.";
$pgv_lang["link_new_wife"]		= "Liitä vaimo käyttäen tiedostossa olevaa henkilöä.";
$pgv_lang["address_labels"]		= "Osoitetarrat";
$pgv_lang["filter_address"]		= "Näytä osoitteet, jotka sisältävät:";
$pgv_lang["address_list"]		= "Osoiteluettelo";
$pgv_lang["index_edit_advice"]	= "Korosta aluenimeä ja klikkaa sitten nuolikuvaketta siirtääksesi aluetta haluttuun suuntaan.";
$pgv_lang["changelog"]		= "Version #VERSION# muutoksia";
$pgv_lang["html_block_descr"]	= "Tämä on yksinkertainen HTML-alue jonka voit sijoittaa sivullesi lisätäksesi minkä tahansa viestin.";
$pgv_lang["html_block_sample_part1"] = "<p class=\"blockhc\"><b>Kirjoita otsikkosi tähän </b></p><br /><p>Klikkaa Konfiguraatio-painiketta.";
$pgv_lang["html_block_sample_part2"] = "muuttaaksesi sen, mikä on tulostettu tähän.</p>";
$pgv_lang["html_block_name"]	= "HTML";
$pgv_lang["htmlplus_block_name"]	= "Edistynyt HTML";
$pgv_lang["htmlplus_block_descr"]	= "Tämä on HTML-alue, jonka voit sijoittaa sivullesi lisätäksesi minkä tahansa haluamasi viestin. Voit lisätä viittauksia GEDCOM-tiedostosi tietoihin HTML-tekstiin.";
$pgv_lang["htmlplus_block_templates"] = "Mallipohjat";
$pgv_lang["htmlplus_block_content"] 	= "Sisällys";
$pgv_lang["htmlplus_block_narrative"] = "Kertova tyyli (vain englanniksi)";
$pgv_lang["htmlplus_block_custom"]	= "Omat asetukset";
$pgv_lang["htmlplus_block_keyword"]	= "Esimerkkejä avainsanoista (vain englanniksi)";
$pgv_lang["htmlplus_block_taglist"]	= "Merkitsinluettelo";
$pgv_lang["htmlplus_block_compat"]	= "Yhteensopivuustila";
$pgv_lang["htmlplus_block_current"]	= "Nykyinen";
$pgv_lang["htmlplus_block_default"]	= "Oletusarvo";
$pgv_lang["htmlplus_block_gedcom"]	= "Sukupuu";
$pgv_lang["htmlplus_block_birth"]	= "syntymä";
$pgv_lang["htmlplus_block_death"]	= "kuolema";
$pgv_lang["htmlplus_block_marrage"]	= "avioliitto";
$pgv_lang["htmlplus_block_adoption"]= "adoptio";
$pgv_lang["htmlplus_block_burial"]	= "hautaus";
$pgv_lang["htmlplus_block_census"]	= "väestönlaskenta lisätty";
$pgv_lang["num_to_show"]		= "Näytettävien kohteiden lukumäärä";
$pgv_lang["days_to_show"]		= "Näytettävien päivien lukumäärä";
$pgv_lang["before_or_after"]		= "Sijoita lukumäärät ennen nimeä tai sen jälkeen?";
$pgv_lang["before"]			= "ennen";
$pgv_lang["after"]			= "jälkeen";
$pgv_lang["config_block"]		= "Konfiguraatio";
$pgv_lang["enter_comments"]		= "Täytä suhteesi tietoon kommenttikenttään.";
$pgv_lang["comments"]		= "Kommentteja";
$pgv_lang["child-family"]		= "Vanhemmat ja sisarukset";
$pgv_lang["spouse-family"]		= "Puoliso ja lapset";
$pgv_lang["direct-ancestors"]		= "Esivanhemmat suoraan ylenevässä polvessa";
$pgv_lang["ancestors"]		= "Esivanhemmat ja heidän perheensä suoraan ylenevässä polvessa";
$pgv_lang["descendants"]		= "Jälkipolvet";
$pgv_lang["choose_relatives"]	= "Valitse sukulaiset";
$pgv_lang["relatives_report"]		= "Raportti sukulaisista";
$pgv_lang["total_living"]		= "eläviä";
$pgv_lang["total_dead"]		= "kuolleita";
$pgv_lang["total_not_born"]		= "kuolleena syntyneitä";
$pgv_lang["remove_custom_tags"]	= "Poista räätälöidyt PGV-merkitsimet? (Esim. _PGVU, _THUM)";
$pgv_lang["cookie_login_help"]	= "Tämä sivusto muistaa sinut aiemmasta sisäänkirjautumisesta. Pääset käsiksi yksityistietoihin ja muihin käyttäjäominaisuuksiin, mutta jos haluat muuttaa tai ylläpitää sivustoa, sinun on kirjauduttava tietoturvan takia.";
$pgv_lang["remember_me"]		= "Muista minut tällä tietokoneella?";
$pgv_lang["fams_with_surname"]	= "Perheet, joilla on sukunimi #surname#";
$pgv_lang["support_contact"]		= "Teknisen avun yhteyshenkilö";
$pgv_lang["genealogy_contact"]	= "Sukututkimuksen yhteyshenkilö";
$pgv_lang["common_upload_errors"]	= "Tämä virhe tarkoittaa luultavasti, että yritit ladata suurempaa tiedostoa kuin mitä palvelin sallii. Oletusraja on 2 MB. Ota yhteyttä ylläpitäjään saadaksesi suuremman raja-arvon php.ini-tiedostossa tai yritä ladata tiedosto käyttämällä FTP-tiedostonsiirtoa. Käytä sivua <a href=\"uploadgedcom.php?action=add_form\">Lisää GEDCOM</a> ladataksesi palvelimelle GEDCOM-tiedoston käyttämällä FTP:tä.";
$pgv_lang["total_memory_usage"]	= "Muistia käytössä:";
$pgv_lang["mothers_family_with"]	= "Perhe - äiti ja ";
$pgv_lang["fathers_family_with"]	= "Perhe - isä ja ";
$pgv_lang["family_with"]		= "Perhe - itse ja";
$pgv_lang["halfsibling"]		= "Puolisisarus";
$pgv_lang["halfbrother"]		= "Velipuoli";
$pgv_lang["halfsister"]			= "Sisarpuoli";
$pgv_lang["family_timeline"]		= "Näytä perhe aikajanalla";
$pgv_lang["children_timeline"]		= "Näytä lapset aikajanalla";
$pgv_lang["other"]			= "Muut";
$pgv_lang["sort_by_marriage"]	= "Lajittele avioitumispäivän mukaan";
$pgv_lang["reorder_families"]		= "Järjestä perheet";
$pgv_lang["indis_with_surname"]	= "henkilöt, joilla on sukunimi #surname#";
$pgv_lang["first_letter_fname"]	= "Valitse kirjain näyttääksesi henkilöt, joiden etunimi alkaa kyseisellä kirjaimella.";
$pgv_lang["total_names"]		= "Nimiä yhteensä";
$pgv_lang["top10_pageviews_nohits"] = "Ei osumia.";
$pgv_lang["top10_pageviews_msg"]	= "Laskurit on aktivoitava GEDCOM-konfiguraatiossa jotta tämä alue toimisi.";
$pgv_lang["review_changes_descr"]	= "Alue \"vireillä olevat muutokset\" näyttää muokkaamiseen oikeutetuille käyttäjälle luettelon niistä tietueista, joita on muutettu on-line tilassa ja jotka vielä täytyy tarkistaa ja hyväksyä. Nämä muutokset odottavat hyväksyntää tai hylkäystä.<br /><br />Jos tämä alue on käytössä, muutosten hyväksymiseen oikeutettuja käyttäjiä pyydetään kerran päivässä sähköpostiviestillä tarkistamaan muutokset.";
$pgv_lang["review_changes_block"]	= "Vireillä olevat muutokset";
$pgv_lang["review_changes_email"]	= "Lähetä muistutusviestit?";
$pgv_lang["review_changes_email_freq"] = "Muistutusviestien väli (päiviä)";
$pgv_lang["review_changes_subject"] = "PhpGedView - Tarkista muutokset";
$pgv_lang["review_changes_body"]	= "Sukutietokantaan on tehty on-line muutoksia. Nämä muutokset on tarkastettava ja hyväksyttävä ennen niiden näkymistä kaikille käyttäjille. Käytä alla olevaa linkkiä siirtyäksesi PhpGedView sivustolle ja kirjaudu järjestelmään tarkastaaksesi muutokset.";
$pgv_lang["show_pending"]		= "Näytä vireillä olevat muutokset";
$pgv_lang["show_spouses"]		= "Näytä puolisot";
$pgv_lang["quick_update_title"] 	= "Pikapäivitys";
$pgv_lang["quick_update_instructions"] = "Tällä sivulla voit nopeasti päivittää henkilön tiedot. Sinun tarvitsee vain lisätä uudet tai muuttaa tällä sivustolla jo olevat tiedot. Kun muutokset on lähetetty, ylläpitäjä tarkistaa ne ennen kuin ne näkyvät verkkosivuilla.";
$pgv_lang["update_name"] 		= "Päivitä nimi";
$pgv_lang["update_fact"] 		= "Päivitä tieto";
$pgv_lang["update_fact_restricted"] 	= "Tämän tiedon päivittämistä on rajoitettu";
$pgv_lang["select_fact"] 		= "Valitse tieto...";
$pgv_lang["update_address"] 		= "Päivitä osoite";
$pgv_lang["top10_pageviews_descr"] = "Tällä alueella näytetään 10 useimmin katsottua tietuetta. Tämä vaatii osumalaskurin aktivoimisen GEDCOM konfiguraatiossa.";
$pgv_lang["top10_pageviews"]	= "Useimmin katsotut asiat";
$pgv_lang["top10_pageviews_block"]	= "Suosikkikohteet";
$pgv_lang["stepdad"]			= "Isäpuoli";
$pgv_lang["stepmom"]		= "Äitipuoli";
$pgv_lang["stepsister"]		= "Sisarpuoli";
$pgv_lang["stepbrother"]		= "Velipuoli";
$pgv_lang["fams_charts"]		= "Perheen asetukset";
$pgv_lang["indis_charts"]		= "Henkilökaaviot";
$pgv_lang["none"]			= "Ei ole";
$pgv_lang["locked"]			= "Älä muokkaa";
$pgv_lang["privacy"]			= "Yksityisyys";
$pgv_lang["number_sign"]		= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"]			= "?";
$pgv_lang["qm_ah"]			= "?";
$pgv_lang["page_help"]		= "Ohje";
$pgv_lang["help_for_this_page"]	= "Tämän sivun ohje";
$pgv_lang["help_contents"]		= "Ohjeen sisältö";
$pgv_lang["show_context_help"]	= "Näytä pika-avusteet ";
$pgv_lang["hide_context_help"]	= "Piilota pika-avusteet ";
$pgv_lang["sorry"]			= "<b>Valitettavasti emme ole viimeistelleet tämän sivun tai kohteen ohjetta</b>";
$pgv_lang["help_not_exist"] 		= "<b>Tämän sivun tai kohteen ohjetta ei vielä ole olemassa</b>";
$pgv_lang["var_not_exist"]		= "<span style=font-weight: bold>Kielimuuttuja puuttuu. Ilmoita tästä koska se on virhe.</span>";
$pgv_lang["resolution"] 		= "Näytön tarkkuus";
$pgv_lang["menu"]			= "Valikko";
$pgv_lang["header"]			= "Otsikko";
$pgv_lang["imageview"]		= "Kuvakatselin";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"] 		= "PhpGedView Käyttäjän sisäänkirjautuminen";
$pgv_lang["for_support"]		= "Teknisissä asioissa ota yhteys:";
$pgv_lang["for_contact"]		= "Sukuasioissa ota yhteys:";
$pgv_lang["for_all_contact"]		= "Teknisissä tai sukuasioissa ota yhteys:";
$pgv_lang["choose_username"]	= "Toivottu käyttäjätunnus";
$pgv_lang["username"]		= "Käyttäjätunnus";
$pgv_lang["invalid_username"]	= "Käyttäjätunnuksessa on virheellisiä merkkejä";
$pgv_lang["firstname"]			= "Etunimi";
$pgv_lang["lastname"]			= "Sukunimi";
$pgv_lang["choose_password"]	= "Toivottu salasana";
$pgv_lang["password"]		= "Salasana";
$pgv_lang["confirm"]        		= "Vahvista salasana";
$pgv_lang["login"]			= "Kirjaudu sisään";
$pgv_lang["logout"]			= "Kirjaudu ulos";
$pgv_lang["admin"]			= "Ylläpito";
$pgv_lang["logged_in_as"]		= "Kirjautunut nimellä";
$pgv_lang["my_pedigree"]		= "Esivanhempani";
$pgv_lang["my_indi"]			= "Tietoni";
$pgv_lang["yes"]			= "Kyllä";
$pgv_lang["no"]			= "Ei";
$pgv_lang["change_theme"]		= "Vaihda teema";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Esipolvet";
$pgv_lang["gen_ped_chart"]		= "#PEDIGREE_GENERATIONS# sukupolven esipolvitaulu";
$pgv_lang["generations"]		= "Sukupolvia";
$pgv_lang["view"]			= "Näytä";
$pgv_lang["fam_spouse"]		= "Perhe puolison kanssa";
$pgv_lang["root_person"]		= "Lähtöhenkilön numero";
$pgv_lang["hide_details"]		= "Piilota yksityiskohdat";
$pgv_lang["show_details"]		= "Näytä yksityiskohdat";
$pgv_lang["person_links"]		= "Linkit tämän henkilön kaavioihin, perheisiin sekä lähisukulaisiin. Klikkaa tätä ikonia jos haluat nähdä sivun jossa tämä henkilö on lähtöhenkilö.";
$pgv_lang["zoom_box"]		= "Suurenna/pienennä";
$pgv_lang["orientation"]		= "Sivun asento";
$pgv_lang["portrait"]			= "Pystysuoraan";
$pgv_lang["landscape"]		= "Vaakasuoraan";
$pgv_lang["start_at_parents"]		= "Aloita vanhemmista";
$pgv_lang["charts"]			= "Kaaviot";
$pgv_lang["lists"]			= "Luettelot";
$pgv_lang["box_width"] 		= "Leveys";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Ei löydy perhettä, jonka ID on";
$pgv_lang["unable_to_find_record"]	= "Ei löydy tietuetta, jonka ID on";
$pgv_lang["title"]			= "Nimike:";
$pgv_lang["living"]			= "Elossa";
$pgv_lang["private"]			= "Yksityinen";
$pgv_lang["birth"]			= "Syntymä:";
$pgv_lang["death"]			= "Kuolema:";
$pgv_lang["descend_chart"]		= "Jälkipolvet";
$pgv_lang["individual_list"]		= "Henkilöluettelo";
$pgv_lang["family_list"]		= "Perheet";
$pgv_lang["source_list"]		= "Lähteet";
$pgv_lang["place_list"]		= "Paikkahierarkia";
$pgv_lang["place_list_aft"] 		= "Hierarkia tämän jälkeen: ";
$pgv_lang["media_list"]		= "Multimedia";
$pgv_lang["search"]			= "Hae";
$pgv_lang["clippings_cart"]		= "Sukupuun leikekori";
$pgv_lang["print_preview"]		= "Tulostuksen esikatselu";
$pgv_lang["cancel_preview"]		= "Takaisin tavalliseen katseluun";
$pgv_lang["change_lang"]		= "Vaihda kieli";
$pgv_lang["print"]			= "Tulosta";
$pgv_lang["total_queries"]		= "Tiedostokysymykset: ";
$pgv_lang["total_privacy_checks"]	= "Tietosuojavarmistus:";
$pgv_lang["back"]			= "Takaisin";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]			= "Lisänimi";
$pgv_lang["male"]			= "Mies";
$pgv_lang["female"]			= "Nainen";
$pgv_lang["temple"]			= "Mormonitemppeli";
$pgv_lang["temple_code"]		= "Mormonitemppelin koodi:";
$pgv_lang["status"]			= "Tila";
$pgv_lang["source"]			= "Lähde";
$pgv_lang["text"]			= "Teksti:";
$pgv_lang["note"]			= "Lisätieto";
$pgv_lang["NN"]			= "(Tuntematon)";
$pgv_lang["PN"]			= "(Tuntematon)";
$pgv_lang["NNhebrew"] 		= "(לא-ידוע)";
$pgv_lang["PNhebrew"] 		= "(לא-ידוע)";
$pgv_lang["NNarabic"] 		= "(غير-معروف)";
$pgv_lang["PNarabic"] 		= "(غير-معروف)";
$pgv_lang["NNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["PNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["NNrussian"] 		= "(неопределено)";
$pgv_lang["PNrussian"] 		= "(неопределено)";
$pgv_lang["NNchinese"] 		= "(未知)";
$pgv_lang["PNchinese"] 		= "(未知)";
$pgv_lang["NNvietnamese"] 		= "(vô danh)";
$pgv_lang["PNvietnamese"] 		= "(không biết tuổi)";
$pgv_lang["NNthai"] 			= "(Tuntematon)";
$pgv_lang["PNthai"] 			= "(Tuntematon)";
$pgv_lang["NNother"] 			= "(Tuntematon)";
$pgv_lang["PNother"] 			= "(Tuntematon)";
$pgv_lang["unrecognized_code"]	= "Tuntematon GEDCOM-koodi";
$pgv_lang["unrecognized_code_msg"]	= "Tämä on virhe jonka haluaisimme korjata. Ilmoita virhe osoitteeseen";
$pgv_lang["indi_info"]		= "Henkilökohtainen tieto";
$pgv_lang["pedigree_chart"]	= "Esipolvitaulu";
$pgv_lang["individual"]		= "Henkilö";
$pgv_lang["as_spouse"]	= "Oma perhe";
$pgv_lang["as_child"]		= "Vanhempien perhe";
$pgv_lang["view_gedcom"]	= "Näytä GEDCOM-tietue";
$pgv_lang["add_to_cart"]	= "Lisää leikekoriin";
$pgv_lang["privacy_error"]	= "Tämän henkilön tiedot on suojattu.<br />";
$pgv_lang["more_information"]= "Lisätietoja varten on yhteyshenkilö";
$pgv_lang["given_name"]	= "Etunimi:";
$pgv_lang["surname"]		= "Sukunimi:";
$pgv_lang["suffix"]		= "Etuliite:";
$pgv_lang["sex"]		= "Sukupuoli";
$pgv_lang["personal_facts"]	= "Henkilötiedot";
$pgv_lang["type"]		= "Tyyppi";
$pgv_lang["parents"] 		= "Vanhemmat";
$pgv_lang["siblings"] 		= "Sisarukset";
$pgv_lang["father"] 		= "Isä";
$pgv_lang["mother"] 		= "Äiti";
$pgv_lang["parent"] 		= "Vanhempi";
$pgv_lang["self"] 		= "Itse";
$pgv_lang["relatives"]		= "Lähisukulaiset";
$pgv_lang["relatives_events"]	= "Lähisukulaisten tapahtumia";
$pgv_lang["historical_facts"]	= "Historialliset tiedot";
$pgv_lang["partner"] 		= "Yhteistyökumppani";
$pgv_lang["child"]		= "Lapsi";
$pgv_lang["family"]		= "Perhe";
$pgv_lang["spouse"]		= "Puoliso";
$pgv_lang["spouses"] 		= "Puolisot";
$pgv_lang["surnames"]	= "Sukunimi";
$pgv_lang["adopted"]		= "Adoptoitu";
$pgv_lang["foster"]		= "Kasvatti";
$pgv_lang["sealing"]		= "Sinetöinti";
$pgv_lang["challenged"]	= "Kyseenalainen ";
$pgv_lang["disproved"]	= "Ei hyväksytty";
$pgv_lang["infant"]		= "Sylilapsi";
$pgv_lang["stillborn"]		= "Kuolleena syntynyt";
$pgv_lang["deceased"]	= "Kuollut";
$pgv_lang["link_as_wife"]	= "Liitä tämä henkilö vaimoksi olemassa olevaan perheeseen.";
$pgv_lang["no_tab1"]		= "Tällä henkilöllä ei ole tietoja.";
$pgv_lang["no_tab2"]		= "Tällä henkilöllä ei ole lisätietoja.";
$pgv_lang["no_tab3"]		= "Tällä henkilöllä ei ole lähteitä.";
$pgv_lang["no_tab4"]		= "Tällä henkilöllä ei ole multimediakohteita.";
$pgv_lang["no_tab5"]		= "Tällä henkilöllä ei ole lähisukulaisia.";
$pgv_lang["no_tab6"]		= "Tälle henkilölle ei ole tutkimuslokia.";
$pgv_lang["show_fact_notes"] = "Näytä kaikki lisätiedot";
$pgv_lang["show_fact_sources"] = "Näytä kaikki lähteet";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Perhetieto";
$pgv_lang["family_group_info"]	= "Perheen ryhmätieto";
$pgv_lang["husband"]			= "Mies";
$pgv_lang["wife"]			= "Vaimo";
$pgv_lang["marriage"]			= "Avioliitto:";
$pgv_lang["lds_sealing"]		= "Mormoni sinetöinti:";
$pgv_lang["marriage_license"]	= "Vihkitodistus:";
$pgv_lang["children"]			= "Lapset";
$pgv_lang["no_children"]		= "Ei lapsia rekisterissä";
$pgv_lang["childless_family"]		= "Tämä perhe jäi lapsettomaksi";
$pgv_lang["parents_timeline"]		= "Näytä pariskunta aikajanalla";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]			= "Leikekori";
$pgv_lang["which_links"]		= "Mitä muita yhteyksiä tästä perheestä haluat lisätä?";
$pgv_lang["just_family"]		= "Lisää vain tämän perheen tietue.";
$pgv_lang["parents_and_family"]	= "Lisää vanhemmat tämän perheen tietueeseen.";
$pgv_lang["parents_and_child"]	= "Lisää tähän tietueeseen vanhempien ja lasten tietueet.";
$pgv_lang["parents_desc"]		= "Lisää tähän tietueeseen vanhempien ja kaikkien jälkeläisten tietueet.";
$pgv_lang["continue"]			= "Jatka lisäämistä";
$pgv_lang["which_p_links"]		= "Mitä muita yhteyksiä tästä henkilöstä haluat lisätä?";
$pgv_lang["just_person"]		= "Lisää vain tämä henkilö.";
$pgv_lang["person_parents_sibs"]	= "Lisää tämä henkilö vanhempineen ja sisaruksineen.";
$pgv_lang["person_ancestors"]	= "Lisää tämä henkilö suorine esivanhempineen.";
$pgv_lang["person_ancestor_fams"]	= "Lisää tämä henkilö suorine esivanhempineen sekä näiden perheet.";
$pgv_lang["person_spouse"]		= "Lisää tämä henkilö puolisoineen ja lapsineen.";
$pgv_lang["person_desc"]		= "Lisää tämä henkilö puolisoineen sekä kaikkien heidän jälkeläistensä tietueet.";
$pgv_lang["which_s_links"]		= "Mitkä tähän lähteeseen liitetyt tietueet tulisi lisätä?";
$pgv_lang["just_source"]		= "Lisää vain tämä lähde.";
$pgv_lang["linked_source"]		= "Lisää tämä lähde ja siihen liitetyt perheet/henkilöt.";
$pgv_lang["person_private"]		= "Tämän henkilön tiedot ovat yksityisiä.  Henkilön tietoja ei oteta mukaan.";
$pgv_lang["family_private"]		= "Tämän perheen tiedot ovat yksityisiä. Perheen tietoja ei oteta mukaan.";
$pgv_lang["download"]		= "Klikkaa hiiren oikealla napilla (tai control + klikkaus Mac-koneessa) alla olevaa linkkiä ja valitse &quot;Tallenna kohde nimellä&quot; ladataksesi tiedostot koneellesi.";
$pgv_lang["cart_is_empty"]		= "Leikekorisi on tyhjä.";
$pgv_lang["id"]				= "ID";
$pgv_lang["ID"]				= "ID";
$pgv_lang["name_description"]	= "Nimi / Kuvaus";
$pgv_lang["remove"]			= "Poista        ";
$pgv_lang["empty_cart"]		= "Tyhjennä leikekori";
$pgv_lang["download_now"]		= "Lataa nyt omalle koneelle";
$pgv_lang["download_file"]		= "Lataa tiedosto #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Henkilö on ladattu omalle koneelle tiedostosta:";
$pgv_lang["family_downloaded_from"] = "Perhe on ladattu omalle koneelle tiedostosta:";
$pgv_lang["source_downloaded_from"] = "Lähde on ladattu omalle koneelle tiedostosta:";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "Paikkalinkki löytynyt";
$pgv_lang["top_level"]			= "Ylin taso";
$pgv_lang["form"]			= "Paikat ovat muodossa:";
$pgv_lang["default_form"]		= "Kylä, pitäjä, lääni, maa";
$pgv_lang["default_form_info"]	= "(Oletusasetus)";
$pgv_lang["unknown"]			= "tuntematon";
$pgv_lang["individuals"]		= "Henkilöt";
$pgv_lang["view_records_in_place"]	= "Näytä kaikki paikan tiedot";
$pgv_lang["place_list2"] 		= "Paikkaluettelo";
$pgv_lang["show_place_hierarchy"]	= "Näytä paikat hierarkiana";
$pgv_lang["show_place_list"]		= "Näytä kaikki paikat listassa";
$pgv_lang["total_unic_places"]	= "Paikkoja yhteensä";
$pgv_lang["external_objects"]		= "Ulkoiset kohteet";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["multi_title"]			= "Multimedialuettelo";
$pgv_lang["media_found"]		= "Mediakohteita löytynyt";
$pgv_lang["view_person"]		= "Katso henkilöä";
$pgv_lang["view_family"]		= "Katso perhettä";
$pgv_lang["view_source"]		= "Katso lähdettä";
$pgv_lang["view_object"]		= "Katso kohdetta";
$pgv_lang["prev"]			= "&lt; Edellinen";
$pgv_lang["next"]			= "Seuraava &gt;";
$pgv_lang["next_image"]		= "Seuraava";
$pgv_lang["file_not_found"]		= "Tiedostoa ei löydy.";
$pgv_lang["medialist_show"]     	= "Näytä";
$pgv_lang["per_page"]          		= "Mediakohdetta sivulla";
$pgv_lang["media_format"]		= "Mediaformaatti";
$pgv_lang["image_size"]		= "Kuvan mitat";
$pgv_lang["media_id"]			= "Media ID";
$pgv_lang["invalid_id"]			= "Tätä ID-tunnusta ei ole tässä GEDCOM-tiedostossa.";
$pgv_lang["record_updated"]		= "Tietue #pid# päivitetty.";
$pgv_lang["record_not_updated"]	= "Tietuetta #pid# ei voitu päivittää.";
$pgv_lang["record_removed"]		= "Tietue #xref# poistettu GEDCOM-tiedostosta.";
$pgv_lang["record_not_removed"]	= "Tietuetta #xref# ei voitu poistaa GEDCOM-tiedostosta.";
$pgv_lang["record_added"]		= "Tietueen #xref# lisäys GEDCOM-tiedostoon onnistui.";
$pgv_lang["record_not_added"]	= "Tietuetta #xref# ei voitu lisätä GEDCOM-tiedostoon.";

//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]		= "Hae tiedostoista";
$pgv_lang["enter_terms"]		= "Anna hakuehdot:";
$pgv_lang["soundex_search"]		= "- tai hae siten kuin kuvittelet nimen kirjoitettavan (Soundex):";
$pgv_lang["sources"]			= "Lähteet";
$pgv_lang["firstname_search"]	= "Etunimi";
$pgv_lang["lastname_search"]	= "Sukunimi";
$pgv_lang["search_place"]		= "Paikka";
$pgv_lang["search_year"]		= "Vuosi";
$pgv_lang["no_results"]		= "Hakua vastaavia tuloksia ei löytynyt.";
$pgv_lang["search_geds"]		= "Haetaan seuraavista tiedostoista";
$pgv_lang["search_general"]		= "Yleishaku";
$pgv_lang["search_soundex"]		= "Soundex-haku";
$pgv_lang["search_replace"]		= "Etsi ja korvaa";
$pgv_lang["search_inrecs"]		= "Hae";
$pgv_lang["search_fams"]		= "Perheitä";
$pgv_lang["search_indis"]		= "Henkilöitä";
$pgv_lang["search_sources"]		= "Lähteitä";
$pgv_lang["search_more_chars"]      	= "Anna enemmän kuin yksi merkki";
$pgv_lang["search_soundextype"]	= "Soundex-tyyppi";
$pgv_lang["search_russell"]		= "Russell";
$pgv_lang["search_DM"]		= "Daitch-Mokotoff";
$pgv_lang["search_prtnames"]	= "Henkilöiden <br />tulostettavat nimet";
$pgv_lang["search_prthit"]		= "Löytyneet nimet";
$pgv_lang["search_prtall"]		= "Kaikki nimet";
$pgv_lang["search_tagfilter"]		= "Ohita suodatin";
$pgv_lang["search_tagfon"]		= "Ohita jokin ei-sukututkimuksellinen tieto";
$pgv_lang["search_tagfoff"]		= "Ei";
$pgv_lang["associate"]		= "läheinen";
$pgv_lang["search_asso_label"]	= "Läheiset";
$pgv_lang["search_asso_text"]	= "Näytä sukulaishenkilöt ja -perheet.";
$pgv_lang["results_per_page"]	= "Tuloksia sivulla";
$pgv_lang["search_record"]		= "Koko tietue";
$pgv_lang["search_to"]		= "-";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]		= "Otsikot";
$pgv_lang["find_source"]		= "Hae lähde";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]			= "Tietovarastoluettelo";
$pgv_lang["repos_found"]		= "Löydetty tietovarastoja";
$pgv_lang["find_repository"]		= "Hae tietovarasto";
$pgv_lang["total_repositories"]	= "Tietovarastoja yhteensä";
$pgv_lang["repo_info"]		= "Tietovarastoinformaatiota";
$pgv_lang["other_repo_records"]	= "Tietueet, jotka yhdistyvät tähän tietovarastoon:";
$pgv_lang["confirm_delete_repo"]	= "Oletko varma, että haluat poistaa tämän tietovaraston GEDCOM-tiedostosta?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Lähdetieto";
$pgv_lang["other_records"]		= "Tähän lähteeseen viittaavat tietueet:";
$pgv_lang["people"]			= "Henkilöitä";
$pgv_lang["families"]			= "Perheitä";
$pgv_lang["total_sources"]		= "Lähteiden kokonaismäärä";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]	= "GEDCOM muoto ei kelpaa";
$pgv_lang["exec_time"]		= "Suoritusaika:";
$pgv_lang["unable_to_create_index"] = "Indeksitiedostoa ei voi luoda. Varmista kirjoitusoikeutesi PhpGedView kansioon. Oikeudet voidaan palauttaa sen jälkeen kun indeksitiedostot on kirjoitettu. ";
$pgv_lang["changes_present"]	= "Tässä GEDCOM-tiedostossa on vielä vireillä olevia muutoksia, jotka menetetään tuotaessa uusi tiedosto.";
$pgv_lang["sec"]			= "s.";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"]		= "Perheiden kokonaismäärä";
$pgv_lang["total_indis"]		= "Henkilöiden kokonaismäärä";
$pgv_lang["notes"]			= "Lisätiedot";
$pgv_lang["ssourcess"]		= "Lähteet";
$pgv_lang["media"]			= "Media";
$pgv_lang["name_contains"]		= "Nimi sisältää:";
$pgv_lang["filter"]			= "Suodatus";
$pgv_lang["find_individual"]		= "Hae henkilön ID";
$pgv_lang["find_familyid"]		= "Hae perheen ID";
$pgv_lang["find_sourceid"]		= "Hae lähde-ID";
$pgv_lang["find_specialchar"]		= "Hae erikoismerkkejä";
$pgv_lang["magnify"]			= "Suurenna";
$pgv_lang["skip_surnames"]		= "Ohita sukunimiluettelo";
$pgv_lang["show_surnames"]		= "Näytä sukunimiluettelo";
$pgv_lang["all"]			= "Kaikki";
$pgv_lang["hidden"]			= "Piilotettu";
$pgv_lang["confidential"]		= "Luottamuksellinen";
$pgv_lang["alpha_index"]		= "Aakkosellinen hakemisto";
$pgv_lang["name_list"] 		= "Nimiluettelo";
$pgv_lang["firstname_alpha_index"] 	= "Aakkosellinen etunimihakemisto";
$pgv_lang["roots"]		 	= "Juuret";
$pgv_lang["leaves"] 			= "Lehdet";
$pgv_lang["widow"] 			= "Leski";
$pgv_lang["widower"] 			= "Leski";
$pgv_lang["show_parents"] 		= "Näytä vanhemmat";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]			= "Ikä";
$pgv_lang["husb_age"]		= "Miehen ikä";
$pgv_lang["wife_age"]		= "Vaimon ikä";
$pgv_lang["days"]			= "päivää";
$pgv_lang["weeks"]			= "viikkoa";
$pgv_lang["months"]			= "kuukautta";
$pgv_lang["years"]			= "vuotta";
$pgv_lang["years2"]			= "vuotta";
$pgv_lang["day1"]			= "päivä";
$pgv_lang["week1"]			= "viikko";
$pgv_lang["month1"]			= "kuukausi";
$pgv_lang["year1"]			= "vuosi";
$pgv_lang["after_death"]        = "Kuoleman jälkeen";
$pgv_lang["at_death_day"]      	= "päivänä, jona kuolema";
$pgv_lang["timeline_title"]		= "PhpGedView aikajana";
$pgv_lang["timeline_chart"]		= "Aikajana";
$pgv_lang["remove_person"]		= "Poista henkilö kaaviosta";
$pgv_lang["show_age"]		= "Näytä ikämerkitsin";
$pgv_lang["add_another"]		= "Lisää uusi henkilö kaavioon:<br />Henkilön ID:";
$pgv_lang["find_id"]			= "Hae ID";
$pgv_lang["show"]			= "Näytä";
$pgv_lang["year"]			= "Vuosi:";
$pgv_lang["timeline_instructions"]	= "Useimmissa uusissa selaimissa laatikoita voi siirtää hiirellä kaaviossa paikasta toiseen.";
$pgv_lang["zoom_out"]		= "Loitonna";
$pgv_lang["timeline_beginYear"] 	= "Aloitusvuosi";
$pgv_lang["timeline_endYear"] 	= "Lopetusvuosi";
$pgv_lang["timeline_scrollSpeed"] 	= "Nopeus";
$pgv_lang["timeline_controls"] 	= "Aikajanaohjaimet";
$pgv_lang["include_family"] 		= "Sisällytä ydinperhe";
$pgv_lang["lifespan_chart"] 		= "Elinkaarikaavio";
$pgv_lang["cal_none"]                 	= "Ei kalenterimuunnosta";
$pgv_lang["zoom_in"]			= "Lähennä";

$pgv_lang["cal_gregorian"]            	= "Gregoriaaninen";
$pgv_lang["cal_julian"]               	= "Juliaaninen";
$pgv_lang["cal_french"]               	= "Ranskalainen";
$pgv_lang["cal_jewish"]               	= "Juutalainen";
$pgv_lang["cal_hebrew_and_gregorian"] = "Heprealainen ja Gregoriaaninen";
$pgv_lang["cal_hijri"]                		= "Hijri";
$pgv_lang["cal_jewish_and_gregorian"] = "Juutalainen ja Gregoriaaninen";
$pgv_lang["cal_hebrew"]               	= "Heprealainen";
$pgv_lang["cal_arabic"]               	= "Arabialainen";
$pgv_lang["easter"]     			= "Pääsiäinen";
$pgv_lang["ascension"]  		= "Helatorstai";
$pgv_lang["pentecost"]  		= "Helluntai";
$pgv_lang["assumption"] 		= "Kristuksen taivaaseenastuminen";
$pgv_lang["all_saints"] 		= "Pyhäinmiestenpäivä";
$pgv_lang["christmas"]  		= "Joulu";

// am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."]         = "ap.";
$pgv_lang["p.m."]         = "ip.";
$pgv_lang["noon"]         = "keskipäivä";
$pgv_lang["midn"]         = "keskiyö";

//-- MONTH NAMES
$pgv_lang["jan"]			= "tammikuu";
$pgv_lang["feb"]			= "helmikuu";
$pgv_lang["mar"]			= "maaliskuu";
$pgv_lang["apr"]			= "huhtikuu";
$pgv_lang["may"]			= "toukokuu";
$pgv_lang["jun"]			= "kesäkuu";
$pgv_lang["jul"]			= "heinäkuu";
$pgv_lang["aug"]			= "elokuu";
$pgv_lang["sep"]			= "syyskuu";
$pgv_lang["oct"]			= "lokakuu";
$pgv_lang["nov"]			= "marraskuu";
$pgv_lang["dec"]			= "joulukuu";

$pgv_lang["vend"]         		= "Vendémiaire";
$pgv_lang["brum"]         		= "Brumaire";
$pgv_lang["frim"]         			= "Frimaire";
$pgv_lang["nivo"]         			= "Nivôse";
$pgv_lang["pluv"]         			= "Pluviôse";
$pgv_lang["vent"]         		= "Ventôse";
$pgv_lang["germ"]         		= "Germinal";
$pgv_lang["flor"]         			= "Floréal";
$pgv_lang["prai"]         			= "Prairial";
$pgv_lang["mess"]         		= "Messidor";
$pgv_lang["ther"]         			= "Thermidor";
$pgv_lang["fruc"]         			= "Fructidor";
$pgv_lang["comp"]         		= "jours complémentaires";

$pgv_lang["tsh"]          			= "tishri-kuu";
$pgv_lang["csh"]          		= "chesvan-kuu";
$pgv_lang["ksl"]          			= "kislev-kuu";
$pgv_lang["tvt"]          			= "tevet-kuu";
$pgv_lang["shv"]          			= "shvat-kuu";
$pgv_lang["adr"]          			= "adar-kuu";
$pgv_lang["adr_leap_year"]		= "adar I-kuu";
$pgv_lang["ads"]          		= "adar II-kuu";
$pgv_lang["nsn"]          		= "nisan-kuu";
$pgv_lang["iyr"]          			= "ijar-kuu";
$pgv_lang["svn"]          			= "sivan-kuu";
$pgv_lang["tmz"]          		= "tamuz-kuu";
$pgv_lang["aav"]          			= "av-kuu";
$pgv_lang["ell"]          			= "elul-kuu";

$pgv_lang["muhar"]        		= "muharram";
$pgv_lang["safar"]        		= "safar";
$pgv_lang["rabia"]        		= "rabi` al-awwal";
$pgv_lang["rabit"]        			= "rabi` al-sani";
$pgv_lang["jumaa"]        		= "jumada-al-awwal";
$pgv_lang["jumat"]        		= "jumada-al-sani";
$pgv_lang["rajab"]        		= "rajab";
$pgv_lang["shaab"]        		= "sha`ban";
$pgv_lang["ramad"]        		= "ramadan";
$pgv_lang["shaww"]        		= "shawwal";
$pgv_lang["dhuaq"]        		= "dhul-qa`da";
$pgv_lang["dhuah"]        		= "dhul-hijja";

$pgv_lang["b.c."]         			= "eKr";
$pgv_lang["abt"]			= "noin";
$pgv_lang["aft"]			= "jälkeen";
$pgv_lang["and"]			= "-";
$pgv_lang["bef"]			= "ennen";
$pgv_lang["bet"]			= "välillä";
$pgv_lang["cal"]			= "laskettu";
$pgv_lang["est"]			= "arviolta";
$pgv_lang["from"]			= "lähtien";

$pgv_lang["int"]			= "tulkittu";
$pgv_lang["to"]			= "saakka";

$pgv_lang["cir"]			= "noin";
$pgv_lang["apx"]			= "noin";

//-- Admin File Messages
$pgv_lang["user_admin"]		= "Käyttäjien hallinta";
$pgv_lang["manage_media"]		= "Ylläpidä multimediaa";
$pgv_lang["password_mismatch"]	= "Salasana ei täsmää.";
$pgv_lang["enter_username"]		= "Käyttäjätunnus on annettava.";
$pgv_lang["enter_fullname"]		= "Täydellinen nimi on annettava.";
$pgv_lang["enter_password"]		= "Salasana on pakollinen.";

$pgv_lang["save"]			= "Tallenna";
$pgv_lang["saveandgo"]		= "Tallenna ja mene uuteen tietueeseen";
$pgv_lang["delete"]			= "Poista";
$pgv_lang["edit"]			= "Muokkaa";
$pgv_lang["no_login"]			= "Sisäänkirjautuminen epäonnistui.";
$pgv_lang["basic_realm"]		= "PhpGedView autentikointijärjestelmä";
$pgv_lang["basic_auth_failure"]	= "Sinun on lisättävä käypä tunnus ja salasana päästäksesi tähän palveluun";
$pgv_lang["basic_auth"]		= "Perustunnistus";
$pgv_lang["digest_auth"]		= "Yhteenveto tunnistuksesta";
$pgv_lang["no_auth_needed"]		= "Ei tunnistusta";
$pgv_lang["file_not_exists"]		= "Annettua tiedostonimeä ei ole.";
$pgv_lang["research_assistant"]	= "Tutkimusavustaja";
$pgv_lang["utf8_to_ansi"]		= "Muunnetaanko tämä UTF-8-koodattu GEDCOM ANSI (ISO-8859-1) muotoon?";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Näytä tiedot ...";
$pgv_lang["relationship_chart"]	= "Sukulaisuus";
$pgv_lang["person1"]			= "Henkilö 1";
$pgv_lang["person2"]			= "Henkilö 2";
$pgv_lang["no_link_found"]		= "Sukuyhteyttä näiden kahden henkilön välillä ei löydy.";
$pgv_lang["sibling"]			= "Sisarus";
$pgv_lang["follow_spouse"]		= "Tarkista sukulaisuus myös avioliiton kautta";
$pgv_lang["timeout_error"]		= "Aika loppui ennen sukulaisuuden löytymistä.";
$pgv_lang["son"]			= "Poika";
$pgv_lang["daughter"]			= "Tytär";
$pgv_lang["clipping_privacy"]		= "Joitakin kohteita ei voitu lisätä yksityisyysrajoitusten vuoksi.";
$pgv_lang["chart_new"]		= "Sukupuukaavio";
$pgv_lang["grandchild"]		= "Lapsenlapsi";
$pgv_lang["grandson"]			= "Pojan-/tyttärenpoika";
$pgv_lang["granddaughter"]		= "Pojan-/tyttärentytär";
$pgv_lang["greatgrandchild"]		= "Lapsenlapsen lapsi";
$pgv_lang["greatgrandson"]		= "Lapsenlapsen poika";
$pgv_lang["greatgranddaughter"]	= "Lapsenlapsen tytär";
$pgv_lang["brother"]			= "Veli";
$pgv_lang["sister"]			= "Sisar";
$pgv_lang["aunt"]			= "Täti";
$pgv_lang["uncle"]			= "Eno/Setä";
$pgv_lang["nephew"]			= "Veljen/sisarenpoika";
$pgv_lang["niece"]			= "Veljen/sisarentytär";
$pgv_lang["firstcousin"]		= "Serkku";
$pgv_lang["femalecousin"]		= "Naispuolinen serkku";
$pgv_lang["malecousin"]		= "Miespuolinen serkku";
$pgv_lang["relationship_to_me"]	= "Sukulaisuus minuun";
$pgv_lang["rela_husb"]		= "Sukulaisuus mieheen";
$pgv_lang["rela_wife"]			= "Sukulaisuus vaimoon";
$pgv_lang["next_path"]		= "Hae toinen reitti";
$pgv_lang["show_path"]		= "Näytä polku";
$pgv_lang["line_up_generations"]	= "Aseta sama sukupolvi riviin";
$pgv_lang["oldest_top"]             	= "Näytä vanhin huipulla";
$pgv_lang["check_delete"]		= "Haluatko varmasti poistaa tämän GEDCOM-tiedon?";
$pgv_lang["access_denied"]		= "<b>Pääsy kielletty</b><br />Sinulla ei ole oikeutta tähän resurssiin.";
$pgv_lang["relationship_male_1_is_the_2_of_3"] 	= "%1\$s - %3\$s - %2\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"] 	= "%1\$s - %3\$s - %2\$s.";
$pgv_lang["mother_in_law"]		= "Anoppi";
$pgv_lang["father_in_law"]		= "Appi";
$pgv_lang["brother_in_law"]		= "Lanko";
$pgv_lang["sister_in_law"]		= "Käly";
$pgv_lang["son_in_law"]		= "Vävy";
$pgv_lang["daughter_in_law"]		= "Miniä";
$pgv_lang["aunt_in_law"]		= "Täti";
$pgv_lang["uncle_in_law"]		= "Eno/Setä";
$pgv_lang["cousin_in_law"]		= "Serkku";
$pgv_lang["m_cousin_in_law"]	= "Serkkupoika";
$pgv_lang["f_cousin_in_law"]		= "Serkkutyttö";
$pgv_lang["step_son"]			= "poikapuoli";
$pgv_lang["step_daughter"]	    	= "tytärpuoli";
// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 	= "veljenpoika";
$pgv_lang["bosa_brothers_offspring_3"] 	= "veljentytär";
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] 	= "veljenpojanpoika";
$pgv_lang["bosa_brothers_offspring_5"] 	= "veljenpojantytär";
$pgv_lang["bosa_brothers_offspring_6"] 	= "veljentyttärenpoika";
$pgv_lang["bosa_brothers_offspring_7"] 	= "veljentyttärentytär";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  	= "veljenpoika %1\$d. polvessa";
$pgv_lang["n_x_brothers_daughter"] 		= "veljentytär %1\$d. polvessa";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 	= "sisarenpoika";
$pgv_lang["bosa_sisters_offspring_3"] 	= "sisarentytär";
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 	= "sisarenpojanpoika";
$pgv_lang["bosa_sisters_offspring_5"] 	= "sisarenpojantytär";
$pgv_lang["bosa_sisters_offspring_6"] 	= "sisarentyttärenpoika";
$pgv_lang["bosa_sisters_offspring_7"] 	= "sisarentyttärentytär";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  		= "sisarenpoika %1\$d. polvessa";
$pgv_lang["n_x_sisters_daughter"] 		= "sisarentytär %1\$d. polvessa";
// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "poika";
$pgv_lang["bosa_3"] 				= "tytär";
// 2nd generation
$pgv_lang["bosa_4"] 				= "pojanpoika";
$pgv_lang["bosa_5"] 				= "pojantytär";
$pgv_lang["bosa_6"] 				= "tyttärenpoika";
$pgv_lang["bosa_7"] 				= "tyttärentytär";
// 3rd generation
$pgv_lang["bosa_8"] 				= "pojanpojanpoika";
$pgv_lang["bosa_9"] 				= "pojanpojantytär";
$pgv_lang["bosa_10"] 			= "pojantyttärenpoika";
$pgv_lang["bosa_11"] 			= "pojantyttärentytär";
$pgv_lang["bosa_12"] 			= "tyttärenpojanpoika";
$pgv_lang["bosa_13"] 			= "tyttärenpojantytär";
$pgv_lang["bosa_14"] 			= "tyttärentyttärenpoika";
$pgv_lang["bosa_15"] 			= "tyttärentyttärentytär";
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	= "pojanpoika %2\$d. polvessa";
$pgv_lang["n_x_granddaughter_from_son"]	= "pojantytär %2\$d. polvessa";
$pgv_lang["n_x_grandson_from_daughter"]	= "tyttärenpoika %2\$d. polvessa";
$pgv_lang["n_x_granddaughter_from_daughter"] = "tyttärentytär %2\$d. polvessa";
// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow for language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 			= "Setä";
$pgv_lang["sosa_uncle_3"] 			= "Eno";
// 2nd generation
$pgv_lang["sosa_uncle_4"] 			= "isosetä";
$pgv_lang["sosa_uncle_5"] 			= "isosetä";
$pgv_lang["sosa_uncle_6"] 			= "isoeno";
$pgv_lang["sosa_uncle_7"] 			= "isoeno";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= "setä %1\$d. polvessa";
$pgv_lang["n_x_maternal_uncle"]	    	= "eno %1\$d. polvessa";
// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow for language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 			= "täti";
$pgv_lang["sosa_aunt_3"] 			= "täti";
// 2nd generation
$pgv_lang["sosa_aunt_4"] 			= "isotäti";
$pgv_lang["sosa_aunt_5"] 			= "isotäti";
$pgv_lang["sosa_aunt_6"] 			= "isotäti";
$pgv_lang["sosa_aunt_7"] 			= "isotäti";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= "täti %1\$d. polvessa";
$pgv_lang["n_x_maternal_aunt"]	    	= "täti %1\$d. polvessa";
// the sosa_uncle_bm name is used for uncles (by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow for language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"] 		= "setä";
$pgv_lang["sosa_uncle_bm_3"] 		= "eno";
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"] 		= "isosetä";
$pgv_lang["sosa_uncle_bm_5"] 		= "isosetä";
$pgv_lang["sosa_uncle_bm_6"] 		= "isoeno";
$pgv_lang["sosa_uncle_bm_7"] 		= "isoeno";
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]		= "setä %1\$d. polvessa";
$pgv_lang["n_x_maternal_uncle_bm"]	    	= "eno %1\$d. polvessa";
// the sosa_aunt_bm name is used for aunts (by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow for language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"] 		= "täti";
$pgv_lang["sosa_aunt_bm_3"] 		= "täti";
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"] 		= "isotäti";
$pgv_lang["sosa_aunt_bm_5"] 		= "isotäti";
$pgv_lang["sosa_aunt_bm_6"] 		= "isotäti";
$pgv_lang["sosa_aunt_bm_7"] 		= "isotäti";
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]		= "täti %1\$d. polvessa";
$pgv_lang["n_x_maternal_aunt_bm"]	    	= "täti %1\$d. polvessa";
// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              	= "serkku";
$pgv_lang["male_cousin_2"]              	= "pikkuserkku";
$pgv_lang["male_cousin_3"]              	= "sokeriserkku";
$pgv_lang["male_cousin_4"]              	= "serkku 4. polvessa";
$pgv_lang["male_cousin_5"]              	= "serkku 5. polvessa";
$pgv_lang["male_cousin_6"]              	= "serkku 6. polvessa";
$pgv_lang["male_cousin_7"]              	= "serkku 7. polvessa";
$pgv_lang["male_cousin_8"]              	= "serkku 8. polvessa";
$pgv_lang["male_cousin_9"]              	= "serkku 9. polvessa";
$pgv_lang["male_cousin_10"]             	= "serkku 10. polvessa";
$pgv_lang["male_cousin_11"]             	= "serkku 11. polvessa";
$pgv_lang["male_cousin_12"]             	= "serkku 12. polvessa";
$pgv_lang["male_cousin_13"]             	= "serkku 13. polvessa";
$pgv_lang["male_cousin_14"]             	= "serkku 14. polvessa";
$pgv_lang["male_cousin_15"]             	= "serkku 15. polvessa";
$pgv_lang["male_cousin_16"]             	= "serkku 16. polvessa";
$pgv_lang["male_cousin_17"]             	= "serkku 17. polvessa";
$pgv_lang["male_cousin_18"]             	= "serkku 18. polvessa";
$pgv_lang["male_cousin_19"]             	= "serkku 19. polvessa";
$pgv_lang["male_cousin_20"]             	= "serkku 20. polvessa";
$pgv_lang["male_cousin_n"]                = "serkku %d. polvessa";
$pgv_lang["female_cousin_1"]            = "serkku";
$pgv_lang["female_cousin_2"]            = "pikkuserkku";
$pgv_lang["female_cousin_3"]            = "sokeriserkku";
$pgv_lang["female_cousin_4"]            = "serkku 4. polvessa";
$pgv_lang["female_cousin_5"]            = "serkku 5. polvessa";
$pgv_lang["female_cousin_6"]	= "serkku 6. polvessa";
$pgv_lang["female_cousin_7"]            = "serkku 7. polvessa";
$pgv_lang["female_cousin_8"]            = "serkku 8. polvessa";
$pgv_lang["female_cousin_9"]            = "serkku 9. polvessa";
$pgv_lang["female_cousin_10"]          = "serkku 10. polvessa";
$pgv_lang["female_cousin_11"]          = "serkku 11. polvessa";
$pgv_lang["female_cousin_12"]          = "serkku 12. polvessa";
$pgv_lang["female_cousin_13"]          = "serkku 13. polvessa";
$pgv_lang["female_cousin_14"]          = "serkku 14. polvessa";
$pgv_lang["female_cousin_15"]          = "serkku 15. polvessa";
$pgv_lang["female_cousin_16"]          = "serkku 16. polvessa";
$pgv_lang["female_cousin_17"]          = "serkku 17. polvessa";
$pgv_lang["female_cousin_18"]          = "serkku 18. polvessa";
$pgv_lang["female_cousin_19"]          = "serkku 19. polvessa";
$pgv_lang["female_cousin_20"]          = "serkku 20. polvessa";
$pgv_lang["female_cousin_n"]            = "serkku %d. polvessa";

//-- GEDCOM edit utility
$pgv_lang["changes_exist"]		= "Tätä GEDCOM-tiedostoa on muutettu.";
$pgv_lang["find_place"]		= "hae paikka";
$pgv_lang["close_window"]		= "Sulje ikkuna";
$pgv_lang["close_window_without_refresh"] = "Sulje ikkuna lataamatta sitä uudelleen";
$pgv_lang["place_contains"]		= "Paikka sisältää:";
$pgv_lang["add"]			= "Lisää";
$pgv_lang["custom_event"]		= "Erikoistapahtuma";
$pgv_lang["confirm_delete_person"]	= "Haluatko varmasti poistaa henkilön GEDCOM-tiedostosta?";
$pgv_lang["delete_person"]		= "Poista tämä henkilö";
$pgv_lang["find_media"]		= "Etsi media";
$pgv_lang["set_link"]			= "Liitä";
$pgv_lang["confirm_delete_source"]	= "Haluatko varmasti poistaa lähteen GEDCOM-tiedostosta?";
$pgv_lang["delete_source"]		= "Poista lähde";
$pgv_lang["find_family"]		= "Hae perhe";
$pgv_lang["find_fam_list"]		= "Hae perheluettelo";
$pgv_lang["edit_name"]		= "Muokkaa nimeä";
$pgv_lang["delete_name"]		= "Pyyhi nimi";
$pgv_lang["select_date"]		= "Valitse päivämäärä";
$pgv_lang["user_cannot_edit"]	= "Tämä käyttäjätunnus ei voi muokata tätä GEDCOM-tiedostoa.";
$pgv_lang["ged_noshow"]		= "Ylläpito on poistanut tämän sivun käytöstä.";
$pgv_lang["bdm"]			= "Syntymät, kuolemat, avioliitot";

//-- calendar.php messages
$pgv_lang["on_this_day"]		= "Tänä päivänä tapahtui...";
$pgv_lang["in_this_month"]		= "Tässä kuussa, historiassa...";
$pgv_lang["in_this_year"]		= "Historialliset tapahtumat vuonna...";
$pgv_lang["year_anniversary"]		= "#year_var#. vuosipäivä";
$pgv_lang["today"]			= "Tänään";
$pgv_lang["day"]			= "Päivä:";
$pgv_lang["month"]			= "Kuukausi:";
$pgv_lang["showcal"]			= "Näytä tapahtumat:";
$pgv_lang["anniversary"]		= "Vuosipäivä";
$pgv_lang["anniversary_calendar"]	= "Vuosipäiväkalenteri";
$pgv_lang["sunday"]			= "Sunnuntai";
$pgv_lang["monday"]			= "Maanantai";
$pgv_lang["tuesday"]			= "Tiistai";
$pgv_lang["wednesday"]		= "Keskiviikko";
$pgv_lang["thursday"]			= "Torstai";
$pgv_lang["friday"]			= "Perjantai";
$pgv_lang["saturday"]			= "Lauantai";
$pgv_lang["viewday"]			= "Näytä päivä";
$pgv_lang["viewmonth"]		= "Näytä kuukausi";
$pgv_lang["viewyear"]			= "Näytä vuosi";
$pgv_lang["all_people"]		= "Kaikki henkilöt";
$pgv_lang["living_only"]		= "Elossa olevat";
$pgv_lang["recent_events"]		= "Viimeiset vuodet (< 100 vuotta)";
$pgv_lang["day_not_set"]		= "Päivää ei ole asetettu";

//-- user self registration module
$pgv_lang["lost_password"]		= "Salasana on hukassa?";
$pgv_lang["requestpassword"]	= "Pyydä uusi salasana";
$pgv_lang["no_account_yet"]		= "Ei ole vielä käyttäjätiliä?";
$pgv_lang["requestaccount"]		= "Pyydä uusi käyttäjätili";
$pgv_lang["emailadress"]		= "Sähköpostiosoite";
$pgv_lang["mandatory"] 		= "*:llä merkitty ovat pakollisia.";
$pgv_lang["mail01_line01"]		= "Hei #user_fullname# ...";
$pgv_lang["mail01_line02"]		= "Olemme saaneet pyynnön kirjautua koneeseen (#SERVER_NAME#) sähköpostiosoitteellasi (#user_email#).";
$pgv_lang["mail01_line03"]		= "Seuraavat tiedot olivat käytössä.";
$pgv_lang["mail01_line04"]		= "Klikkaa alla olevaa linkkiä, täytä tiedot ja varmista tilisi ja sähköpostiosoitteesi.";
$pgv_lang["mail01_line05"]		= "Jos sinä et pyytänyt tätä tietoa, voit pyyhkiä tämän ilmoituksen.";
$pgv_lang["mail01_line06"]		= "Et tule saamaan lisäviestejä tältä järjestelmältä ja tili pyyhitään seitsemän päivän kuluttua jos tätä ei vahvisteta.";
$pgv_lang["mail01_subject"]		= "Kirjoittautumisesi koneella #SERVER_NAME#";
$pgv_lang["mail02_line01"]		= "Hei ylläpitäjä...";
$pgv_lang["mail02_line02"]		= "Uusi käyttäjä rekisteröityi (#SERVER_NAME#) lle";
$pgv_lang["mail02_line03"]		= "Käyttäjä sai sähköpostin jossa on tarpeelliset tiedot joiden avulla hän voi vahvistaa tilinsä.";
$pgv_lang["mail02_line04"]		= "Heti kun käyttäjä on vahvistanut tilin, tulet saamaan sähköposti ilmoituksen jonka mukaan sinun tulee antaa käyttäjälle oikeudet kirjoittautua verkkopaikallesi.";
$pgv_lang["mail02_line04a"]		= "Sinulle ilmoitetaan sähköpostitse, kun tämä käyttäjäehdokas on varmentanut itsensä. Varmennuksen jälkeen käyttäjä voi kirjautua järjestelmään ilman sinun toimenpiteitäsi.";
$pgv_lang["mail02_subject"]		= "Uusi kirjoittautuminen koneella #SERVER_NAME#";
$pgv_lang["hashcode"]		= "Vahvistuskoodi:";
$pgv_lang["thankyou"]			= "Hei #user_fullname# ...<br />Kiitos rekisteröinnistäsi";
$pgv_lang["pls_note06"]		= "Tulet saamaan koodin sähköpostissa osoitteeseen (#user_email#). Käytä viesti tilisi vahvistukseen. Tilisi pyyhitään seitsemän päivän kuluttua jos et vahvista sitä (voit sen jälkeen rekisteröidä tilin uudelleen). Kirjautuminen sivuille vaatii käyttäjätunnuksen ja salasanan.<br /><br />";
$pgv_lang["pls_note06a"] 		= "Lähetämme nyt varmistusviestin osoitteeseen <b>#user_email#</b>. Sinun on varmistettava käyttäjätilipyyntösi noudattamalla viestin ohjeita. Mikäli et varmista tiliäsi seitsemän vuorokauden kuluessa, pyyntösi hylätään automaattisesti. Sen jälkeen sinun on tehtävä uusi anomus.<br /><br />Toimittuasi viestin edellyttämällä tavalla, voit kirjautua järjestelmään. Voidaksesi kirjautua tänne, sinun on tiedettävä käyttäjätunnuksesi ja salasanasi.<br /><br />";
$pgv_lang["registernew"]		= "Uuden käyttäjätilin vahvistus";
$pgv_lang["user_verify"]		= "Käyttäjävahvistus";
$pgv_lang["send"]			= "Lähetä";
$pgv_lang["pls_note07"]		= "Täytä käyttäjätunnus, salasana ja vahvistuskoodi, jonka sait sähköpostissa järjestelmästä, voidaksesi aktivoida tilisi.";
$pgv_lang["pls_note08"]		= "Käyttäjä #user_name# - tiedot on tarkastettu.";
$pgv_lang["mail03_line01"]		= "Hei hallinnoitsija...";
$pgv_lang["mail03_line02"]		= "#newuser[username]# ( #newuser[fullname]# ) on vahvistanut rekisteröintitiedot.";
$pgv_lang["mail03_line03"]		= "Huom! Klikkaa alla olevaa linkkiä, kirjaudu verkkopaikkaan ja anna hänelle lupa kirjautua sivuillesi.";
$pgv_lang["mail03_line03a"]		= "Sinun ei tarvitse tehdä mitään; käyttäjä voi nyt kirjautua.";
$pgv_lang["mail03_subject"]		= "Uusi vahvistus koneella #SERVER_NAME#";
$pgv_lang["pls_note09"]		= "Sinut on tunnistettu rekisteröidyksi käyttäjäksi.";
$pgv_lang["pls_note10"]		= "Ylläpitäjä on saanut ilmoituksen. Heti kun hän on antanut sinulle oikeuden kirjautua, voit kirjautua käyttäjätunnuksella ja salasanalla.";
$pgv_lang["pls_note10a"]		= "Voit nyt kirjautua järjestelmään käyttäjätunnuksellasi ja salasanallasi.";
$pgv_lang["data_incorrect"]		= "Tiedot eivät ole oikeita. Yritä uudelleen";
$pgv_lang["user_not_found"]		= "Täyttämiäsi tietoja ei voinut vahvistaa. Yritä uudelleen.";
$pgv_lang["lost_pw_reset"]		= "Pyydä uusi salasana";
$pgv_lang["pls_note11"]		= "Tarvitsemme tilisi käyttäjätunnuksen ja sähköpostiosoitteen jos haluat että muutamme salasanasi.<br /><br />Tulemme lähettämään erikois-URLin sähköpostissa. Se tulee sisältämään tilisi vahvistuskoodin. Vieraile lähetetyssä URLissa ja voit muuttaa verkkopaikan salasanan ja käyttäjätunnuksen. Turvallisuussyistä sinun tulee olla antamatta vahvistuskoodia kenellekään, ei edes tämän verkkopaikan ylläpitäjälle (emme tule pyytämään sitä).<br /><br />Jos tarvitset apua tämän verkkopaikan ylläpitäjältä, ota häneen yhteyttä.";
$pgv_lang["mail04_line01"]		= "Hei #user_fullname#...";
$pgv_lang["mail04_line02"]		= "Uusi salasana on pyydetty käyttäjätunnuksellesi!";
$pgv_lang["mail04_line03"]		= "Suosittelu:";
$pgv_lang["mail04_line04"]		= "Klikkaa aihe-linkkiä, kirjoittaudu sisään uudella salasanalla ja vaihda salasana niin että tietosuoja säilyy.";
$pgv_lang["mail04_line05"]		= "Kirjauduttuasi, valitse linkki '#pgv_lang[myuserdata]#' '#pgv_lang[mygedview]#'-valikosta ja täytä salasanakentät vaihtaaksesi salasanasi.";
$pgv_lang["mail04_subject"]		= "Tietopyyntö koneelta #SERVER_NAME#";
$pgv_lang["pwreqinfo"]		= "Hei...<br /><br />Sähköposti, jossa on uusi salasana, on lähetetty osoitteeseen <b>#user[email]#</b>.<br /><br />Tutki sähköpostitiliäsi parin minuutin kuluttua. Sinun tulisi saada posti siihen mennessä.<br /><br />Suosittelu:<br />Saatuasi sähköpostisi sinun tulee kirjoittautua ja muuttaa salasanasi lisätäksesi tietosuoja kokonaisuutta.";
$pgv_lang["editowndata"]		= "Käyttäjätilini";
$pgv_lang["myuserdata"]		= "Käyttäjätilini";
$pgv_lang["user_theme"]		= "Teemani";
$pgv_lang["mgv"]			= "OmaGedView";
$pgv_lang["mygedview"]		= "OmaGedView";
$pgv_lang["passwordlength"]		= "Salasanassa pitää olla vähintään 6 merkkiä.";
$pgv_lang["welcome_text_auth_mode_1"] = "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun</b></center><br />Jokaisella käyttäjällä, jolla on käyttäjätili, on pääsy tänne.<br /><br />Mikäli sinulla on käyttäjätili, voit kirjautua tältä sivulta. Mikäli sinulla ei ole käyttäjätiliä, voit pyytää sellaisen klikkaamalla alla olevaa linkkiä.<br /><br />Todennettuaan pyyntösi ylläpitäjä aktivoi käyttäjätilisi. Saat sähköpostiviestin kun pyyntösi on hyväksytty. ";
$pgv_lang["welcome_text_auth_mode_2"] = "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun.</b></center><br />Pääsy näille sivuille on sallittu vain niille käyttäjille, joille on annettu <b>käyttöoikeus</b>.<br /><br />Mikäli sinulla jo on käyttäjätili, voit kirjautua järjestelmään tällä sivulla. Mikäli sinulla ei ole käyttäjätiliä, voit pyytää sellaista klikkaamalla asianomaista linkkiä tällä sivulla.<br /><br />Varmistuttuaan antamistasi tiedoista ylläpitäjä joko hyväksyy tai hylkää pyyntösi. Tulet saamaan sähköpostiviestin kun pyyntösi on hyväksytty.";
$pgv_lang["welcome_text_auth_mode_3"] = "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun</b></center><br />Pääsy tänne on sallittu ainoastaan <u>sukulaisille</u>.<br /><br />Mikäli sinulla on käyttäjätili voit kirjautua sivustolle. Mikäli sinulla ei vielä ole käyttäjätiliä, voit pyytää sellaista klikkaamalla asianomaista linkkiä tällä sivulla.<br /><br />Tarkistettuaan tietosi sivun ylläpitäjä joko hyväksyy tai hylkää pyyntösi. Saat sähköpostiviestin kun pyyntösi on hyväksytty.";
$pgv_lang["welcome_text_cust_head"]	= "<center><b>Tervetuloa tähän sukututkimuksen verkkopalveluun</b></center><br />Pääsy on sallittu käyttäjille, joilla on käyttäjätunnus ja salasana tähän verkkopalveluun.<br />";
$pgv_lang["acceptable_use"]		= "<div class=\"largeError\">Huomautus:</div><div class=\"error\">Täyttämällä ja lähettämällä tämän lomakkeen sitoudut:<ul><li>suojaamaan sivustoillamme esiintyvien elävien henkilöiden yksityisyyden;</li><li>ja kertomaan alla olevassa tekstikentässä kenelle olet sukua tai toimittamaan meille tietoa henkilöstä, jonka tulisi olla sivustollamme.</li></ul></div>";
//-- mygedview page
$pgv_lang["welcome"]			= "Tervetuloa";
$pgv_lang["upcoming_events"]	= "Tulevat tapahtumat";
$pgv_lang["living_or_all"]		= "Näytä vain elossa olevien henkilöiden tapahtumat?";
$pgv_lang["basic_or_all"]		= "Näytä vain syntymät, kuolemat ja avioliitot?";
$pgv_lang["style"]			= "Esitystyyli";
$pgv_lang["style1"]			= "Lista";
$pgv_lang["style2"]			= "Taulukko";
$pgv_lang["style3"]			= "Merkitsinpilvi";
$pgv_lang["cal_download"]		= "Sallitko kalenteritapahtumien latauksen?";
$pgv_lang["no_events_living"]		= "Elossa olevien henkilöiden tapahtumia ei ole seuraavien #pgv_lang[global_num1]# päivän aikana.";
$pgv_lang["no_events_living1"]	= "Elossa olevien henkilöiden tapahtumia ei ole huomenna.";
$pgv_lang["no_events_all"]		= "Mitään tapahtumia ei ole seuraavien #pgv_lang[global_num1]# päivän aikana.";
$pgv_lang["no_events_all1"]		= "Mitään tapahtumia ei ole huomenna.";
$pgv_lang["no_events_privacy"]	= "Tapahtumia esiintyy seuraavien #pgv_lang[global_num1]# päivän aikana, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["no_events_privacy1"]	= "Tapahtumia esiintyy huomenna, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["more_events_privacy"]	= "<br />Lisää tapahtumia esiintyy seuraavien #pgv_lang[global_num1]# päivän aikana, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["more_events_privacy1"]	= "<br />Lisää tapahtumia esiintyy huomenna, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["none_today_living"]	= "Tänään ei ole elävien henkilöiden tapahtumia.";
$pgv_lang["none_today_all"]		= "Tänään ei ole tapahtumia.";
$pgv_lang["none_today_privacy"]	= "Tapahtumia esiintyy tänään, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["more_today_privacy"]	= "<br />Lisää tapahtumia esiintyy tänään, mutta yksityisyysasetukset estävät niiden näkymisen.";
$pgv_lang["chat"]			= "Rupattelu";
$pgv_lang["users_logged_in"]		= "Sisäänkirjautuneet käyttäjät";
$pgv_lang["anon_user"]		= "1 tuntematon käyttäjä kirjautunut";
$pgv_lang["anon_users"]		= "#pgv_lang[global_num1]# kirjautunutta tuntematonta käyttäjää";
$pgv_lang["login_user"]		= "1 kirjautunut käyttäjä";
$pgv_lang["login_users"]		= "#pgv_lang[global_num1]# kirjautunutta käyttäjää";
$pgv_lang["no_login_users"]		= "Ei kirjautuneita eikä tuntemattomia käyttäjiä";
$pgv_lang["message"]			= "Lähetä viesti";
$pgv_lang["my_messages"]		= "Viestini";
$pgv_lang["date_created"]		= "Luontipäivä:";
$pgv_lang["message_from"]		= "Sähköposti:";
$pgv_lang["message_from_name"]	= "Lähettäjän nimi:";
$pgv_lang["message_to"]		= "Vastaanottaja:";
$pgv_lang["message_subject"]	= "Aihe:";
$pgv_lang["message_body"]		= "Viesti:";
$pgv_lang["no_to_user"]		= "Vastaanottajaa ei annettu. Ei voi jatkaa.";
$pgv_lang["provide_email"]		= "Ilmoita sähköpostiosoitteesi, jotta voimme ottaa yhteyttä vastataksemme viestiisi. Ilman sitä emme voi vastata tiedusteluihisi. Sähköpostiosoitettasi ei tulla käyttämään mihinkään muuhun tarkoitukseen, kuin kysymyksiisi vastaamiseen.";
$pgv_lang["reply"]			= "Vastaa";
$pgv_lang["message_deleted"]	= "Viesti pyyhitty";
$pgv_lang["message_sent"]		= "Viesti lähetetty";
$pgv_lang["reset"]			= "Palauta";
$pgv_lang["site_default"]		= "Sivuston oletusarvo";
$pgv_lang["mygedview_desc"]	= "OmaGedView-sivusi antaa mahdollisuuden pitää luetteloa suosikkihenkilöistäsi, tarkastella tulevia merkkipäiviä ja olla yhteistyössä muiden PhpGedView-käyttäjien kanssa.";
$pgv_lang["no_messages"]		= "Ei viestejä odottamassa. ";
$pgv_lang["clicking_ok"]		= "Klikkaa OK ja uusi ikkuna avautuu, josta voit ottaa yhteyttä henkilöön #user[fullname]#";
$pgv_lang["favorites"]			= "Suosikit";
$pgv_lang["no_favorites"]		= "Et ole valinnut suosikkeja. Lisää henkilö suosikkeihisi etsimällä hänen tietonsa ja klikkaamalla \"Lisää suosikkeihini\" -linkkiä tai käytä alla olevaa ID laatikkoa ja lisää henkilö hänen ID numeronsa avulla.";
$pgv_lang["my_favorites"]		= "Suosikkini";
$pgv_lang["add_to_my_favorites"]	= "Lisää suosikkeihini";
$pgv_lang["no_gedcom_favorites"]	= "Toistaiseksi ei ole valittuja suosikkeja. Ylläpitäjä voi lisätä suosikkeja jotka näytetään aloitettaessa.";
$pgv_lang["gedcom_favorites"]	= "Tämän GEDCOM-tiedoston suosikit";
$pgv_lang["confirm_fav_remove"]	= "Haluatko varmasti poistaa tämän tietueen suosikeistasi?";
$pgv_lang["invalid_email"]		= "Huom! Anna hyväksyttävä sähköpostiosoite.";
$pgv_lang["enter_subject"]		= "Huom! Anna viestin aihe.";
$pgv_lang["enter_body"]		= "Huom! Muista kirjoittaa myös tekstisi.";
$pgv_lang["confirm_message_delete"]	= "Haluatko varmasti poistaa tämän viestin? Sitä ei voi palauttaa myöhemmin.";
$pgv_lang["message_email1"]	= "Seuraava viesti on lähetetty PhpGedView käyttäjätilillesi: ";
$pgv_lang["message_email2"]	= "Olet lähettänyt seuraavan viestin PhpGedView käyttäjätilille: ";
$pgv_lang["message_email3"]	= "Olet lähettänyt seuraavan viestin PhpGedView hallinnoitsijalle: ";
$pgv_lang["viewing_url"]		= "Tämä viesti lähetettiin seuraavasta urlistä: ";
$pgv_lang["messaging2_help"]	= "Kun lähetät tämän viestin, saat siitä kopion edellä antamaasi sähköpostiosoitteeseen.";
$pgv_lang["random_picture"]		= "Satunnainen kuva";
$pgv_lang["message_instructions"]	= "<b>Huomaa:</b> Yksityistä tietoa elävistä henkilöistä annetaan ainoastaan sukulaisille ja läheisille ystäville. Sinun on pyydettäessä osoitettava sukulaisuutesi. Toisinaan voivat kuolleidenkin henkilöiden tiedot olla yksityisiä. Näin voi olla siinä tapauksessa, että kyseisestä henkilöstä ei valitettavasti ole riittävästi tietoja käytettävissämme.<br /><br />Ennen kuin esität kysymyksiä, ole hyvä ja tarkista henkilön oikeellisuus päivämääristä, paikoista ja lähisukulaisista. Jos lähetät muutoksia tai lisäyksiä sukutietoihin, niin ilmoitathan myös lähteen, josta tieto on peräisin.<br /><br />";
$pgv_lang["sending_to"]		= "Tämän viestin vastaanottaja on: #TO_USER#";
$pgv_lang["preferred_lang"]	 	= "Suosituskieli tälle vastaanottajalle on: #USERLANG#";
$pgv_lang["gedcom_created_using"]	= "Tämä GEDCOM on luotu ohjelmalla: <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]	= "Luontipäivä: <b>#CREATED_DATE#</b>.";
$pgv_lang["gedcom_created_on2"]	= ", <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]		= "GEDCOM tilastotietoa:";
$pgv_lang["stat_individuals"]		= "Henkilöitä";
$pgv_lang["stat_families"]		= "Perheitä";
$pgv_lang["stat_sources"]		= "Lähteitä";
$pgv_lang["stat_other"]		= "Muita tietueita";
$pgv_lang["stat_earliest_birth"] 	= "Aikaisin syntymävuosi";
$pgv_lang["stat_latest_birth"] 		= "Myöhäisin syntymävuosi";
$pgv_lang["stat_earliest_death"] 	= "Aikaisin kuolinvuosi";
$pgv_lang["stat_latest_death"] 	= "Myöhäisin kuolinvuosi";
$pgv_lang["customize_page"]		= "Muokkaa oma portaalisi";
$pgv_lang["customize_gedcom_page"]	= "Muokkaa GEDCOM-portaalia";
$pgv_lang["upcoming_events_block"]	= "Tulevat tapahtumat";
$pgv_lang["upcoming_events_descr"]= "Tulevat tapahtumat -alue aktiivisessa GEDCOMissa näyttää luettelon 30 seuraavan vuorokauden aikana sattuvista tapahtumista. Käyttäjän OmaGedView -sivun alueella luetteloidaan vain elävät henkilöt. GEDCOM tervetuloa -sivulla näytetään kaikki henkilöt.";
$pgv_lang["todays_events_block"]	= "Tänä päivänä";
$pgv_lang["todays_events_descr"]	= "Tänä päivänä omassa historiassasi... alueella näytetään luettelo tämän päivän vuosipäivistä. Voit asetuksilla määrätä miten paljon yksityiskohtia näytetään.";
$pgv_lang["todo_block"] 		= "&quot;Tehtävät&quot;";
$pgv_lang["todo_show_other"]     	= "Näytä muiden käyttäjien tehtävät";
$pgv_lang["todo_show_unassigned"]	= "Näytä määrittämättömät tehtävät";
$pgv_lang["todo_show_future"]    	= "Näytä tulevat tehtävät";
$pgv_lang["todo_nothing"]        	= "Ei ole &quot;Tehtäviä&quot;";
$pgv_lang["yahrzeit_block"]		= "Tulevat jortsaitit";
$pgv_lang["yahrzeit_descr"]		= "Tulevat jortsaitit-alue näyttää lähitulevaisuudessa esiintyvät kuolinaikojen vuosipäivät. Voit muokata näytettävää ajanjaksoa ja ylläpitäjä voi muokata miten kauaksi tulevaisuuteen alueella katsotaan.";
$pgv_lang["logged_in_users_block"]	= "Sisäänkirjautuneet käyttäjät ";
$pgv_lang["logged_in_users_descr"]	= "Sisäänkirjautuneet-alue näyttää luettelon tällä hetkellä sisäänkirjautuneista käyttäjistä.";
$pgv_lang["user_messages_block"]	= "Käyttäjän viestit";
$pgv_lang["user_messages_descr"]	= "Käyttäjän viestialue näyttää luettelon aktiiviselle käyttäjälle lähetetyistä viesteistä.";
$pgv_lang["user_favorites_block"]	= "Käyttäjän suosikit";
$pgv_lang["user_favorites_descr"]	= "Käyttäjän suosikit -alue näyttää luettelon suosituimmista henkilöistä jotta niihin on helppo muodostaa linkki.";
$pgv_lang["welcome_block"]		= "Käyttäjän tervetuloalue";
$pgv_lang["welcome_descr"]		= "Käyttäjän tervetuloalue näyttää sen hetkisen päivämäärän ja kellonajan, pikalinkit käyttäjätietojen muuttamiseksi sekä omaan sukupuuhun ja linkin, josta pääsee muokkaamaan OmaGedView-sivua.";
$pgv_lang["random_media_block"]	= "Satunnainen kuva";
$pgv_lang["random_media_descr"] 	= "Satunnaisen kuvan alue valitsee satunnaisen kuvan tai muun median aktiivisesta GEDCOM-tiedostosta ja näyttää sen.";
$pgv_lang["random_media_persons_or_all"] = "Näytetäänkö ainoastaan henkilöt, tapahtumat vai kaikki?";
$pgv_lang["random_media_persons"]	= "Henkilöt";
$pgv_lang["random_media_events"]	= "Tapahtumat";
$pgv_lang["gedcom_block"]		= "GEDCOM tervetuloalue";
$pgv_lang["gedcom_descr"]		= "GEDCOM tervetuloalue toimii samoin kuin Käyttäjän tervetuloalue toivottamalla kävijä tervetulleeksi sivustolle ja näyttämällä aktiivisen GEDCOM-tiedoston otsikon sekä päivämäärän ja kellonajan.";
$pgv_lang["gedcom_favorites_block"]	= "GEDCOM suosikit";
$pgv_lang["gedcom_favorites_descr"] 	= "GEDCOM suosikit -alue mahdollistaa ylläpitäjää valitsemaan suosikkihenkilönsä niin, että kävijä helposti löytää heidät. Tällä tavoin voidaan osoittaa sukuhistoriasi tärkeät henkilöt.";
$pgv_lang["gedcom_stats_block"]	= "GEDCOM tilastotieto";
$pgv_lang["gedcom_stats_descr"] 	= "GEDCOM tilastotietoalue näyttää kävijälle joitakin GEDCOMia koskevia perustietoja kuten luontipäivämäärän ja montako henkilöä siinä on.";
$pgv_lang["gedcom_stats_show_surnames"] = "Näytä tavalliset sukunimet?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />Voit muokata sivua asettelemalla alueita haluamallasi tavalla.<br /><br /> Sivu on jaettu kahteen osastoon: <b>pääosastoon</b> ja <b>oikeanpuoleiseen</p> osastoon. <b>Pääosaston</p> alueet näkyvät suurempina ja sijoittuvat sivun otsakkeen alle. <b>Oikeanpuoleinen</b> osasto alkaa otsakkeen oikealla puolella ja jatkuu alaspäin sivun oikeaa laitaa.<br /><br /> Jokaisella osastolla on oma luettelonsa niistä alueista jotka kirjoitetaan sivulle siinä järjestyksessä kun ne on lueteltu. Voit lisätä, poistaa ja järjestää uudelleen alueita haluamallasi tavalla.<br /><br />Jos jokin alue on tyhjä, täyttävät muut alueet vapaan tila koko sivun leveydeltä.<br /><br />";
$pgv_lang["login_block"]		= "Sisäänkirjautuminen";
$pgv_lang["login_descr"]		= "Sisäänkirjautumisalue hyväksyy käyttäjätunnuksen ja salasanan sisäänkirjautumista varten.";
$pgv_lang["theme_select_block"]     	= "Teemavalinta";
$pgv_lang["theme_select_descr"] 	= "Teemavalinta-alue näyttää teemavalikon vaikka \"muuta teema\" valinta on poistettu käytöstä.";
$pgv_lang["block_top10_title"]      	= "Yleisimmät sukunimet";
$pgv_lang["block_top10"]            	= "Yleisimmät sukunimet";
$pgv_lang["block_top10_descr"]	= "Tämä alue näyttää taulukon tietokannan 10 yleisimmästä sukunimestä.";
$pgv_lang["block_givn_top10_title"]	= "Yleisimmät etunimet";
$pgv_lang["block_givn_top10"]	= "Yleisimmät etunimet";

$pgv_lang["gedcom_news_block"]	= "GEDCOM uutiset";
$pgv_lang["gedcom_news_descr"]	= "GEDCOM uutisalue näyttää vierailijalle ylläpitäjän lähettämiä uusia päivityksiä tai artikkeleita. Uutiset on hyvä paikka ilmoittaa päivitetystä GEDCOM-tiedostosta tai perhetapaamisista.";
$pgv_lang["gedcom_news_limit"]	= "Rajoita näyttö seuraavasti:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Ei rajoituksia";
$pgv_lang["gedcom_news_limit_date"]	= "Kohteen ikä";
$pgv_lang["gedcom_news_limit_count"]	= "Kohteiden lukumäärä";
$pgv_lang["gedcom_news_flag"]	= "Rajoitus:";
$pgv_lang["gedcom_news_archive"] 	= "Näytä arkisto";
$pgv_lang["user_news_block"]	= "Käyttäjän päiväkirja";
$pgv_lang["user_news_descr"]	= "Käyttäjän päiväkirja -alueella käyttäjä voi ylläpitää päiväkirjaa tai tehdä sinne muistiinpanoja.";
$pgv_lang["my_journal"]		= "Päiväkirjani";
$pgv_lang["no_journal"]		= "Et ole luonnut päiväkirjamerkintöjä.";
$pgv_lang["confirm_journal_delete"]	= "Haluatko varmasti poistaa tämän päiväkirjamerkinnän?";
$pgv_lang["add_journal"]		= "Lisää päiväkirjamerkintä";
$pgv_lang["gedcom_news"]		= "Uutisia";
$pgv_lang["confirm_news_delete"]	= "Haluatko varmasti poistaa tämän uutisen?";
$pgv_lang["add_news"]		= "Lisää uutisartikkeli";
$pgv_lang["no_news"]			= "Uutisartikkeleita ei ole lähetetty.";
$pgv_lang["edit_news"]		= "Muokkaa päiväkirja-/uutisartikkelimerkintää";
$pgv_lang["enter_title"]		= "Täytä otsikko.";
$pgv_lang["enter_text"]		= "Täytä teksti tähän uutis- tai päiväkirja-artikkeliin. ";
$pgv_lang["news_saved"]		= "Päiväkirja-/uutisartikkelimerkintä on säilytetty.";
$pgv_lang["article_text"]		= "Teksti:";
$pgv_lang["main_section"]		= "Pääosaan alueet";
$pgv_lang["right_section"]		= "Oikean osaan alueet";
$pgv_lang["available_blocks"]		= "Käytettävissä olevat alueet";
$pgv_lang["move_up"]			= "Siirrä ylös       ";
$pgv_lang["move_down"]		= "Siirrä alas       ";
$pgv_lang["move_right"]		= "Siirrä oikealle";
$pgv_lang["move_left"]		= "Siirrä vasemmalle";
$pgv_lang["broadcast_all"]		= "Lähetä kaikille käyttäjille";
$pgv_lang["hit_count"]			= "Osumalaskuri:";
$pgv_lang["phpgedview_message"]	= "PhpGedView viesti";
$pgv_lang["reset_default_blocks"]	= "Palauta alkuperäiset alueet";
$pgv_lang["common_surnames"]	= "Yleisimmät sukunimet";
$pgv_lang["default_news_title"]	= "Tervetuloa sukututkimukseesi";
$pgv_lang["default_news_text"]	= "Tätä sukututkimussivustoa käyttää  <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a>. Tämä sivu johdattelee tähän sukututkimukseen. Aloittaaksesi tietojen käsittelyn, valitse yksi kaaviomalli kaaviovalikosta, mene henkilöluetteloon tai hae nimi tai paikka.<br /><br />Mikäli sinulla on vaikeuksia käyttää sivustoa, klikkaamalla Ohje-valikkoa saat tietoa kuinka käyttää parhaillaan katselemaasi sivua. <br /><br />Kiitos kun käyt tällä sivustolla.";
$pgv_lang["recent_changes"]		= "Viimeiset muutokset";
$pgv_lang["recent_changes_block"]	= "Viimeiset muutokset";
$pgv_lang["recent_changes_descr"]	= "Viimeisten muutosten alueella luetteloidaan GEDCOM-tiedostoon tehdyt muutokset viimeisen kuukauden aikana. Tämä alue pitää sinut ajan tasalla tehtyjen muutosten suhteen. Muutokset havaitaan CHAN-merkitsimen avulla.";
$pgv_lang["recent_changes_none"]	= "<b>Ei muutoksia viimeisen #pgv_lang[global_num1]# päivän aikana.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Muutoksia viimeisten #pgv_lang[global_num1]# päivän aikana</b><br />";
$pgv_lang["show_empty_block"]	= "Tulisiko tämän alueen olla piilossa kun se on tyhjä?";
$pgv_lang["hide_block_warn"]		= "Mikäli piilotat tyhjän alueen, et voi muuttaa sen asetusta, ennen kuin se taas tulee näkyviin sisältäessään tietoa.";
$pgv_lang["delete_selected_messages"]	= "Poista merkityt viestit";
$pgv_lang["use_blocks_for_default"]	= "Käytä näitä alueita kaikkien käyttäjien oletusalueasetuksina?";
$pgv_lang["block_not_configure"]	= "Tätä aluetta ei voi konfiguroida.";
$pgv_lang["options"]			= "Asetukset:";
$pgv_lang["config_update_ok"]	= "Konfiguraatiotiedoston päivitys onnistui.";

//-- validate GEDCOM
$pgv_lang["add_media_tool"] 		= "\"Lisää media\"-työkalu";
$pgv_lang["media_linked"]		= "Tämä mediaobjekti on liitetty seuraavaan:";
$pgv_lang["media_not_linked"]	= "Tätä mediaobjektia ei ole liitetty mihinkään GEDCOM-tietueeseen.";
$pgv_lang["media_dir_1"]		= "Mediatiedosto sijaitsee ulkoisella palvelimella";
$pgv_lang["media_dir_2"]		= "Mediatiedosto sijaitsee vakiomediakansiossa";
$pgv_lang["media_dir_3"]		= "Mediatiedosto sijaitsee suojatussa mediakansiossa";
$pgv_lang["thumb_dir_1"]		= "Pienoiskuva sijaitsee ulkoisella palvelimella";
$pgv_lang["thumb_dir_2"]		= "Pienoiskuva on vakiomediakansiossa";
$pgv_lang["thumb_dir_3"]		= "Pienoiskuva sijaitsee suojatussa mediakansiossa";
$pgv_lang["moveto_2"]		= "Siirrä suojattuun kansioon";
$pgv_lang["moveto_3"]		= "Siirrä vakiokansioon";
$pgv_lang["move_standard"]		= "Siirrä vakioon";
$pgv_lang["move_protected"]		= "Siirrä suojattuun";
$pgv_lang["move_mediadirs"]		= "Siirrä mediakansioita";
$pgv_lang["setperms"]		= "Aseta mediaoikeudet";
$pgv_lang["setperms_success"]	= "Oikeudet asetettu";
$pgv_lang["setperms_failure"]		= "Oikeuksia ei ole asetettu";
$pgv_lang["setperms_time_exceeded"]	= "Suoritusaikaraja on savutettu. Yritä komentoa uudelleen pienemmällä kansiolla.";
$pgv_lang["move_time_exceeded"]	= "Suoritusaikaraja on saavutettu. Yritä komentoa uudelleen siirtämään loput tiedostot.";
$pgv_lang["media_firewall_rootdir_no_exist"]		= "Hakemaasi mediapalomuurijuurikansiota ei ole. Se on ensin luotava.";
$pgv_lang["media_firewall_protected_dir_no_exist"]	= "Suojattua mediakansiota ei voitu luoda mediapalomuurijuurikansioon. Luo tämä kansio ja tee se kirjoituskelpoiseksi.";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "Suojattu mediakansio mediapalomuurijuurikansiossa ei ole kirjoituskelpoinen.";
$pgv_lang["media_firewall_invalid_dir"]	= "Virhe: Mediapalomuuri käynnistettiin muualta kuin mediakansiosta.";
$pgv_lang["relationship_great"]	= "iso";

//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "Tiimalasikaavio";

//-- report engine
$pgv_lang["choose_report"]          	= "Valitse ajettava raportti";
$pgv_lang["enter_report_values"]    	= "Syötä raporttiarvot";
$pgv_lang["selected_report"]        	= "Valittu raportti";
$pgv_lang["select_report"]          	= "Valitse raportti";
$pgv_lang["download_report"]       	= "Talleta raportti";
$pgv_lang["reports"]               		= "Raportit";
$pgv_lang["pdf_reports"]            	= "PDF raportti";
$pgv_lang["html_reports"]           	= "HTML raportti";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]	= "Sukutauluraportti";
$pgv_lang["ahnentafel_header"]	= "Sukutauluraportti henkilölle ";
$pgv_lang["ahnentafel_generation"]	= "Sukupolvi ";
$pgv_lang["ahnentafel_pronoun_m"]	= "Hän ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Hän ";
$pgv_lang["ahnentafel_born_m"]	= "syntyi";
$pgv_lang["ahnentafel_born_f"]	= "syntyi";
$pgv_lang["ahnentafel_christened_m"]= "kastettiin";
$pgv_lang["ahnentafel_christened_f"] = "kastettiin";
$pgv_lang["ahnentafel_married_m"]	= "ja";
$pgv_lang["ahnentafel_married_f"]	= "ja";
$pgv_lang["ahnentafel_married_post"]	= "avioituivat";
$pgv_lang["ahnentafel_died_m"]	= "kuoli";
$pgv_lang["ahnentafel_died_f"]	= "kuoli";
$pgv_lang["ahnentafel_buried_m"]	= "haudattiin";
$pgv_lang["ahnentafel_buried_f"]	= "haudattiin";
$pgv_lang["ahnentafel_place"]	= " paikassa ";
$pgv_lang["ahnentafel_no_details"]	= "mutta yksityiskohdat puuttuvat";
$pgv_lang["ahnentafel_on"]			= " ";

//-- Changes report
$pgv_lang["changes_report"]		= "Muutosraportti";
$pgv_lang["changes_pending_tot"]	= "Vireillä olevia muutoksia yhteensä: ";
$pgv_lang["changes_accepted_tot"]	= "Hyväksyttyjä muutoksia yhteensä: ";

//-- Descendancy report
$pgv_lang["descend_report"]		= "Jälkipolviraportti";
$pgv_lang["descendancy_header"]	= "Jälkipolviraportti henkilölle ";
$pgv_lang["son_of"]					= " jonka vanhemmat olivat";
$pgv_lang["daughter_of"]			= " jonka vanhemmat olivat";
$pgv_lang["child_of"]				= "Lapsi perheessä ";
$pgv_lang["children_of"]			= "Lapset perheessä ";
$pgv_lang["descendancy_pronoun_m"]	= "Hän ";
$pgv_lang["descendancy_pronoun_f"]	= "Hän ";

$pgv_lang["family_group_report"]    	= "Perheryhmäraportti";
$pgv_lang["page"]                   		= "Sivu";
$pgv_lang["of"]                     		= "/";
$pgv_lang["enter_famid"]            	= "Syötä perhe-ID";
$pgv_lang["show_sources"]           	= "Näytä lähteet?";
$pgv_lang["show_notes"]             	= "Näytä lisätiedot?";
$pgv_lang["show_basic"]             	= "Näytä tyhjät perustapahtumat?";
$pgv_lang["show_photos"]		= "Näytä valokuvat?";
$pgv_lang["relatives_report_ext"]	= "Laajennettu sukulaisraportti";
$pgv_lang["with"]			= "/";
$pgv_lang["on"]			= "-";
$pgv_lang["in"]				= "-";
$pgv_lang["individual_report"]		= "Henkilöraportti";
$pgv_lang["enter_pid"]		= "Syötä henkilö ID";
$pgv_lang["generated_by"]		= "Luontiohjelma: ";
$pgv_lang["list_children"]		= "Luettele kukin lapsi syntymäjärjestyksessä.";
$pgv_lang["birth_report"]		= "Syntymäaika- ja -paikkaraportti";
$pgv_lang["birthplace"]		= "Syntymäpaikka sisältää ";
$pgv_lang["birthdate1"]		= "Syntymäaika-alueen alku";
$pgv_lang["birthdate2"]		= "Syntymäaika-alueen loppu";
$pgv_lang["death_report"]		= "Kuolinpäivä- ja paikkaraportti";
$pgv_lang["deathplace"]		= "Kuolinpaikka sisältää";
$pgv_lang["deathdate1"]		= "Kuolinpäiväalueen alku";
$pgv_lang["deathdate2"]		= "Kuolinpäiväalueen loppu";
$pgv_lang["marr_report"]		= "Avioliittoonvihkimisaika ja -paikkaraportti";
$pgv_lang["marrplace"]		= "Avioliittoonvihkimispaikka sisältää";
$pgv_lang["marrdate1"]		= "Avioliittoonvihkimisajanjakso alkaa";
$pgv_lang["marrdate2"]		= "Avioliittoonvihkimisajanjakso päättyy";
$pgv_lang["sort_by"]			= "Lajittele seuraavan mukaan:";
$pgv_lang["cleanup"]			= "Siivoa";

//-- CONFIGURE (extra) messgaes for programs patriarch, slklist and statistics
$pgv_lang["statistics"]             		= "Tilastot";

//-- Merge Records
$pgv_lang["merge_same"] 		= "Tietueet eivät ole samaa typpiä. Erityyppisiä tietueita ei voi yhdistää.";
$pgv_lang["merge_step1"]		= "Yhdistä - vaihe 1/3 ";
$pgv_lang["merge_step2"]		= "Yhdistä - vaihe 2/3";
$pgv_lang["merge_step3"]		= "Yhdistä - vaihe 3/3";
$pgv_lang["select_gedcom_records"]= "Valitse kaksi GEDCOM-tietuetta yhdistettäväksi. Tietueiden tulee olla samaa tyyppiä.";
$pgv_lang["merge_to"]		= "Yhdistä ID:een:";
$pgv_lang["merge_from"] 		= "Yhdistä ID:stä:";
$pgv_lang["merge_facts_same"]	= "Seuraavat tiedot olivat täsmälleen samanlaiset kummassakin tietueessa ja yhdistetään automaattisesti.";
$pgv_lang["no_matches_found"]	= "Yhtäpitäviä tietoja ei löytynyt.";
$pgv_lang["unmatching_facts"]	= "Seuraavat tiedot eivät ole yhtäpitäviä. Valitse tieto, jonka haluat säilyttää.";
$pgv_lang["record"] 			= "Tietue";
$pgv_lang["adding"] 			= "Lisätään";
$pgv_lang["updating_linked"]		= "Päivitetään yhdistettyä tietuetta";
$pgv_lang["merge_more"] 		= "Yhdistä lisää tietueita.";
$pgv_lang["same_ids"]		= "Kirjoitit saman ID:n. Et voi yhdistää samoja tietueita.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		= "Esipolvikaavio";
$pgv_lang["gen_ancestry_chart"]     	= "#PEDIGREE_GENERATIONS# Sukupolvet esipolvikaaviossa";
$pgv_lang["chart_style"]    		= "Kaavion tyyli";
$pgv_lang["chart_list"]			= "Luettelo";
$pgv_lang["chart_booklet"]   		= "Kirjanen";
$pgv_lang["show_cousins"]		= "Näytä serkut";
// 1st generation
$pgv_lang["sosa_2"] 			= "Isä";
$pgv_lang["sosa_3"] 			= "Äiti";
// 2nd generation
$pgv_lang["sosa_4"] 			= "Isoisä";
$pgv_lang["sosa_5"] 			= "Isoäiti";
$pgv_lang["sosa_6"] 			= "Isoisä";
$pgv_lang["sosa_7"] 			= "Isoäiti";
// 3rd generation
$pgv_lang["sosa_8"] 			= "Isoisänisä";
$pgv_lang["sosa_9"] 			= "Isoisänäiti";
$pgv_lang["sosa_10"]			= "Isoäidinisä";
$pgv_lang["sosa_11"]			= "Isoäidinäiti";
$pgv_lang["sosa_12"]			= "Isoisänisä";
$pgv_lang["sosa_13"]			= "Isoisänäiti";
$pgv_lang["sosa_14"]			= "Isoäidinisä";
$pgv_lang["sosa_15"]			= "Isoäidinäiti";
// 4th generation
$pgv_lang["sosa_16"]              	= "Isänisänisänisä";
$pgv_lang["sosa_17"]              	= "Isänisänisänäiti";
$pgv_lang["sosa_18"]         		= "Isänisänäidinisä";
$pgv_lang["sosa_19"]        	    	= "Isänisänäidinäiti";
$pgv_lang["sosa_20"]              	= "Isänäidinisänisä";
$pgv_lang["sosa_21"]  	            	= "Isänäidinisänäiti";
$pgv_lang["sosa_22"] 	            		= "Isänäidinäidinisä";
$pgv_lang["sosa_23"]   	           	= "Isänäidinäidinäiti";
$pgv_lang["sosa_24"]   	           	= "Äidinisänisänisä";
$pgv_lang["sosa_25"]     	         	= "Äidinisänisänäiti";
$pgv_lang["sosa_26"]       	       	= "Äidinisänäidinisä";
$pgv_lang["sosa_27"]        	      	= "Äidinisänäidinäiti";
$pgv_lang["sosa_28"]         	     	= "Äidinäidinisänisä";
$pgv_lang["sosa_29"]         	     	= "Äidinäidinisänäiti";
$pgv_lang["sosa_30"]          	    	= "Äidinäidinäidinisä";
$pgv_lang["sosa_31"]          	    	= "Äidinäidinäidinäiti";
// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x isoisoisiä";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x isoisoäiti";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x isoisoisiä";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x isoisoäiti";

//-- FAN CHART
$pgv_lang["compact_chart"]		= "Kompakti kaavio";
$pgv_lang["fan_chart"]			= "Viuhkakaavio";
$pgv_lang["gen_fan_chart"]    		= "#PEDIGREE_GENERATIONS# Sukupolviviuhkakaavio";
$pgv_lang["fan_width"]		= "Viuhkakaavion leveys.";
$pgv_lang["gd_library"]       		= "PHP palvelimen virheellinen konfigurointi: vaaditaan GD-kirjastoa  jotta kuvafunktioita voi käyttää.";
$pgv_lang["gd_freetype"]		= "PHP palvelimen virheellinen konfigurointi: vaaditaan Freetype kirjastoa jotta True Type kirjasimia voi käyttää.";
$pgv_lang["gd_helplink"]		= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]   		= "Kirjasintiedostoa ei löytynyt PHP-palvelimelta.";
$pgv_lang["fanchart_IE"]		= "Selaimesi ei kykene tulostamaan tätä viuhkakaaviota suoraan. Klikkaa kakkospainikkeella, tallenna ja tulosta sitten.";

//-- RSS Feed
$pgv_lang["rss_descr"]		= "Uutiset ja linkit #GEDCOM_TITLE# sivustolta.";
$pgv_lang["rss_logo_descr"]		= "Syötteen toteutti PhpGedView";
$pgv_lang["rss_feeds"]		= "RSS-syötteet";
$pgv_lang["no_feed_title"]		= "Syöte ei ole käytettävissä";
$pgv_lang["no_feed"]			= "Tällä PhpGedView-sivustolla ei ole käytettävissä RSS-syötettä.";
$pgv_lang["feed_login"]		= "Mikäli sinulla on käyttäjätili tälle PhpGedView-sivustolle, voit <a href=\"#AUTH_URL#\">kirjautua</a> palvelimelle käyttäen HTTP-autentikointia nähdäksesi yksityisiä tietoja.";
$pgv_lang["authenticated_feed"]	= "Autentikoitu syöte";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] 		= "Avustaja";
$pgv_lang["attending"] 		= "Avustamassa";
$pgv_lang["best_man"] 		= "Best man";
$pgv_lang["bridesmaid"] 		= "Kaaso";
$pgv_lang["buyer"] 			= "Ostaja";
$pgv_lang["circumciser"] 		= "Ympärileikkaaja";
$pgv_lang["civil_registrar"] 		= "Siviilirekisteriviranomainen";
$pgv_lang["friend"] 			= "Ystävä";
$pgv_lang["godfather"] 		= "Kummisetä";
$pgv_lang["godmother"] 		= "Kummitäti";
$pgv_lang["godparent"] 		= "Kummi";
$pgv_lang["godson"]			= "Kummipoika";
$pgv_lang["goddaughter"] 		= "Kummityttö";
$pgv_lang["godchild"]			= "Kummilapsi";
$pgv_lang["informant"] 		= "Tiedon antaja";
$pgv_lang["lodger"] 			= "Asukki";
$pgv_lang["nurse"] 			= "Hoitaja";
$pgv_lang["priest"] 			= "Pappi";
$pgv_lang["rabbi"] 			= "Rabbi";
$pgv_lang["registry_officer"] 		= "Rekisteriviranomainen";
$pgv_lang["seller"] 			= "Myyjä";
$pgv_lang["servant"] 			= "Palvelija";
$pgv_lang["twin"] 			= "Kaksonen";
$pgv_lang["twin_brother"] 		= "Kaksosveli";
$pgv_lang["twin_sister"] 		= "Kaksossisar";
$pgv_lang["witness"] 			= "Todistaja";

//-- statistics utility
$pgv_lang["statutci"]			= "indeksiä ei voi luoda";
$pgv_lang["statnnames"]         		= "Nimien lukumäärä";
$pgv_lang["statnfam"]           		= "Perheiden lukumäärä";
$pgv_lang["statnfemale"]        		= "Naisten lukumäärä";
$pgv_lang["statnmale"]          		= "Miesten lukumäärä";
$pgv_lang["statvars"]			= "Täytä kuvaajaa varten seuraavat muuttujat";
$pgv_lang["statlxa"]			= "Valitse kaavion tyyppi:";
$pgv_lang["statlya"]			= "tulokset:";
$pgv_lang["statlza"]			= "Luokat:";
$pgv_lang["stat_10_none"]		= "Ei mitään";
$pgv_lang["stat_11_mb"]		= "Syntymäkuukausi";
$pgv_lang["stat_12_md"]		= "Kuolinkuukausi";
$pgv_lang["stat_13_mm"]		= "Avioliittoonvihkimiskuukausi.";
$pgv_lang["stat_14_mb1"]		= "Suhteen ensimmäisen lapsen syntymäkuukausi";
$pgv_lang["stat_15_mm1"]		= "Kuukausi, jolloin solmittiin ensimmäinen avioliitto";
$pgv_lang["stat_16_mmb"]		= "Kuukausia vihkimisen ja ensimmäisen lapsen välillä";
$pgv_lang["stat_17_arb"]		= "Ikä suhteessa syntymävuoteen";
$pgv_lang["stat_18_ard"]		= "Ikä suhteessa kuolinvuoteen";
$pgv_lang["stat_19_arm"]		= "Ikä avioliittoonvihkimisvuonna.";
$pgv_lang["stat_20_arm1"]		= "Ikä ensimmäisen avioliittoonvihkimisvuoden aikana";
$pgv_lang["stat_21_nok"]		= "Lasten lukumäärä";
$pgv_lang["stat_200_none"]		= "kaikki (tai tyhjä)";
$pgv_lang["stat_201_num"]		= "lukumäärät";
$pgv_lang["stat_202_perc"]		= "prosenttiosuus";
$pgv_lang["stat_300_none"]		= "ei mitään";
$pgv_lang["stat_301_mf"]		= "sukupuoli";
$pgv_lang["stat_302_cgp"]		= " aikajaksot";
$pgv_lang["statar_xgp"]		= "rajat aikajaksoille:";
$pgv_lang["statar_xgl"]		= "rajat ikäarvoille:";
$pgv_lang["statar_xgm"]		= "tajat kuukausille:";
$pgv_lang["statar_xga"]		= "rajat lukumäärille:";
$pgv_lang["statar_zgp"]		= "rajat aikajaksoille:";
$pgv_lang["statreset"]			= "Palauta alkuperäiset arvot";
$pgv_lang["statsubmit"]		= "Näytä kuvaaja";
$pgv_lang["statistiek_list"]		= "Tilastokuvaaja";

//-- statisticsplot utility
$pgv_lang["stpl"]			 = "...";
$pgv_lang["stplinfo"]			= "muuttujat kuvaajalle:";
$pgv_lang["stpltype"]			= "tyyppi:";
$pgv_lang["stplnoim"]			= "ei toteutettu:";
$pgv_lang["stplmf"]			= " / sukupuoli";
$pgv_lang["stplipot"]			= " aikajaksoa kohti";
$pgv_lang["stplmonth"]		= "kuukausi";
$pgv_lang["stplnumbers"]		= "lukumäärät";
$pgv_lang["stplage"]			= "ikä";
$pgv_lang["stplperc"]			= "prosenttiosuus";
$pgv_lang["stplnumof"]		= "Lukumäärät";
$pgv_lang["stplmarrbirth"]		= "Kuukausia vihkimisestä ensimmäisen lapsen syntymään";

//-- alive in year
$pgv_lang["alive_in_year"]		= "Elossa vuonna";
$pgv_lang["is_alive_in"]		= "Elossa vuonna #YEAR#";
$pgv_lang["alive"]			= "Elossa";
$pgv_lang["dead"]			= "Kuollut";
$pgv_lang["maybe"]			= "Ehkä";
$pgv_lang["both_alive"]		= "Molemmat elossa";
$pgv_lang["both_dead"]		= "Molemmat kuolleet";

//-- Help system
$pgv_lang["definitions"]		= "Määritelmiä";

//-- Index_edit
$pgv_lang["block_desc"]		= "Alueiden kuvaukset";
$pgv_lang["click_here"]		= "Klikkaa tästä jatkaaksesi";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Klikkaa tätä painiketta toteuttaaksesi aiemmin tallentamasi muutokset.<br /><br />Sinut viedään takaisin joko sivulle #pgv_lang[welcome]# tai #pgv_lang[mygedview]#, mutta muutoksiasi ei ehkä näytetä. Voit joutua käyttämään sivun lataamista uudelleen nähdäksesi muutoksesi kunnolla.";
$pgv_lang["block_summaries"]	= "~#pgv_lang[block_desc]#~<br /><br />Tässä on lyhyt selostus jokaisesta alueesta, jonka voit sijoittaa #pgv_lang[welcome]#- tai #pgv_lang[mygedview]#-sivulle.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
$pgv_lang["block_summary_table"]	= "&nbsp;";

//-- Find page
$pgv_lang["total_places"]		= "Paikkoja löytyi";
$pgv_lang["media_contains"]		= "Media sisältää:";
$pgv_lang["repo_contains"]		= "Tietovarasto sisältää:";
$pgv_lang["source_contains"]		= "Lähde sisältää:";
$pgv_lang["display_all"]		= "Näytä kaikki";

// FAQ Page
$pgv_lang["add_faq_header"] 	= "Kysymys";
$pgv_lang["add_faq_body"] 		= "Vastaus";
$pgv_lang["add_faq_order"] 		= "UKK järjestys";
$pgv_lang["add_faq_visibility"] 	= "UKK:n näkyminen";
//clash with rarely used English Netscape/Mozilla English G
$pgv_lang["no_faq_items"] 		= "Kysymysluettelo on tyhjä.";
$pgv_lang["position_item"] 		= "Kysymyksen sijoittelu";
$pgv_lang["faq_list"] 			= "UKK-luettelo";
$pgv_lang["confirm_faq_delete"] 	= "Haluatko varmasti poistaa kysymyksen?";
$pgv_lang["preview"] 			=  "Esikatselu";
$pgv_lang["no_id"] 			= "UKK ID-tunnusta ei ole määritelty!";

// Help search
$pgv_lang["hs_title"] 			= "Hae ohjetekstistä";
$pgv_lang["hs_search"] 		= "Hae";
$pgv_lang["hs_close"] 		= "Sulje ikkuna";
$pgv_lang["hs_results"] 		= "Tuloksia löytyi:";
$pgv_lang["hs_keyword"] 		= "Hae";
$pgv_lang["hs_searchin"]		= "Hae seuraavasta: ";
$pgv_lang["hs_searchuser"]		= "Käyttäjän ohje";
$pgv_lang["hs_searchmodules"]	= "Moduliavuste";
$pgv_lang["hs_searchconfig"]		= "Ylläpitäjän ohje";
$pgv_lang["hs_searchhow"]		= "Hakutyyppi";
$pgv_lang["hs_searchall"]		= "Kaikki sanat";
$pgv_lang["hs_searchany"]		= "Mikä tahansa sanoista";
$pgv_lang["hs_searchsentence"]	= "Täsmällinen ilmaisu";
$pgv_lang["hs_intruehelp"]		= "Vain ohjetekstistä";
$pgv_lang["hs_inallhelp"]		= "Kaikki tekstit";
$pgv_lang["choose"] 			= "Valitse:";
$pgv_lang["account_information"] 	= "Tietoja käyttäjätilistä";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] 		= "Äänitiedosto";
$pgv_lang["TYPE__book"] 		= "Kirja";
$pgv_lang["TYPE__card"] 		= "Kortti";
$pgv_lang["TYPE__certificate"] 	= "Sertifikaatti";
$pgv_lang["TYPE__document"] 	= "Asiakirja";
$pgv_lang["TYPE__electronic"] 	= "Sähköinen";
$pgv_lang["TYPE__fiche"] 		= "Filmikortti";
$pgv_lang["TYPE__film"] 		= "Mikrofilmi";
$pgv_lang["TYPE__magazine"] 	= "Aikakauslehti";
$pgv_lang["TYPE__manuscript"] 	= "Käsikirjoitus";
$pgv_lang["TYPE__map"] 		= "Kartta";
$pgv_lang["TYPE__newspaper"] 	= "Sanomalehti";
$pgv_lang["TYPE__photo"] 		= "Valokuva";
$pgv_lang["TYPE__tombstone"] 	= "Hautakivi";
$pgv_lang["TYPE__video"] 		= "Video";
$pgv_lang["TYPE__painting"] 		= "Maalaus";
$pgv_lang["TYPE__other"] 		= "Muu";

//-- Other media suff
$pgv_lang["view_slideshow"] 		= "Katsele diaesityksenä";
$pgv_lang["download_image"]	= "Lataa tiedosto";
$pgv_lang["no_media"]		= "Mediaa ei löydy";
$pgv_lang["media_privacy"]		= "Yksityisyysrajoitukset estävät tämän kohteen näyttämisen.";
$pgv_lang["relations_heading"]	= "Kuva liittyy:";
$pgv_lang["file_size"]			= "Tiedoston koko";
$pgv_lang["img_size"]			= "Kuvan koko";
$pgv_lang["media_broken"]		= "Tämä mediatiedosto on rikkonainen eikä siihen voi laittaa vesileimaa";
$pgv_lang["unknown_mime"]		= "Mediapalomuurivirhe: >Tuntematon MIMEtype< tiedostolle";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "Tuntematon toiminto: [action].";
$pgv_lang["module_error_unknown_type"] = "Tuntematon modulimuoto.";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] 	= "Näytä elossa olevien henkilöt viitattuna vuonna.";
$pgv_lang["button_BIRT_Y100"] 	= "Näytä henkilöt jotka syntyivät viimeisen sadan vuoden aikana.";
$pgv_lang["button_BIRT_YES"] 	= "Näytä henkilöt jotka syntyivät yli sata vuotta sitten. ";
$pgv_lang["button_DEAT_H"] 	= "Näytä av(i)oparit, joiden miespuolinen partneri on kuollut.";
$pgv_lang["button_DEAT_N"] 	= "Näytä hengissä olevat henkilöt ja sellaiset parit, joissa kummatkin ovat elossa.";
$pgv_lang["button_DEAT_W"] 	= "Näytä sellaisten parit, joissa vain nainen on kuollut.";
$pgv_lang["button_DEAT_Y"] 		= "Näytä kuolleet henkilöt ja sellaiset parit, joissa kummatkin ovat kuolleet.";
$pgv_lang["button_DEAT_Y100"] 	= "Näytä viimeisten sadan vuoden aikana kuolleet henkilöt.";
$pgv_lang["button_DEAT_YES"] 	= "Näytä yli sata vuotta sitten kuolleet henkilöt.";
$pgv_lang["button_MARR_DIV"] 	= "Näytä eronneet av(i)oparit.";
$pgv_lang["button_MARR_U"] 	= "Näytä sellaiset av(i)oparit, joiden vihkimisaika on tuntematon.";
$pgv_lang["button_MARR_Y100"] 	= "Näytä viimeisen sadan vuoden aikana vihityt parit.";
$pgv_lang["button_MARR_YES"] 	= "Näytä yli sata vuotta sitten vihityt parit.";
$pgv_lang["button_reset"] 		= "Palauta oletusarvot.";
$pgv_lang["button_SEX_F"] 		= "Näytä vain naispuoliset.";
$pgv_lang["button_SEX_M"] 		= "Näytä vain miespuoliset.";
$pgv_lang["button_SEX_U"] 		= "Näytä vain tuntematonta sukupuolta olevat henkilöt.";
$pgv_lang["button_TREE_L"] 		= "Näytä &laquo;lehti&raquo;parit tai henkilöt. Nämä ovat elossa olevia henkilöitä, joilla ei ole lapsia tietokannassa. ";
$pgv_lang["button_TREE_R"] 	= "Näytä &laquo;juuri&raquo;parit tai henkilöt. Heitä voi myös kutsua &laquo;patriarkoiksi&raquo;. He ovat henkilöitä, joilla ei ole vanhempia tietokannassa.  ";
$pgv_lang["sort_column"] 		= "Lajittele tämän sarakkeen mukaisesti.";
$pgv_lang["asia_chart"]			= "Aasia";
$pgv_lang["africa_chart"]		= "Afrikka";
$pgv_lang["world_chart"]		= "Maailma";
$pgv_lang["middle_east_chart"]	= "Lähi-itä";
$pgv_lang["europe_chart"]		= "Eurooppa";
$pgv_lang["area_chart"]			= "Maantieteellinen alue";
$pgv_lang["s_america_chart"]	= "Etelä-Amerikka";
$pgv_lang["stat_unknown"]			= "tuntemattomia";
$pgv_lang["contains"]			= "Sisältää";
$pgv_lang["htmlplus_block_ui"]		= "Laajennettu käyttöliittymä";
$pgv_lang["total_unknown"]			= "tuntematon";
$pgv_lang["first_letter_name"]		= "Valitse kirjain, jolla näytettävien perheiden nimi alkaa.";
$pgv_lang["first_letter_iname"]		= "Valitse kirjain, jolla näytettävien henkilöiden sukunimi alkaa.";
$pgv_lang["total_links"]			= "Linkkejä yhteensä";
$pgv_lang["total_changes"]			= "Muutoksia yhteensä";
$pgv_lang["stepparent"]				= "Ottoisä tai -äiti";
$pgv_lang["males"]					= "Miespuolisia";
$pgv_lang["females"]				= "Naispuolisia";
$pgv_lang["others"]					= "Muita";
$pgv_lang["parent_age"] 			= "Vanhempien ikä";
$pgv_lang["father_age"]				= "Isän ikä";
$pgv_lang["mother_age"]				= "Äidin ikä";
$pgv_lang["enter_person_generations"] = "Sukupolvien lukumäärä:";
$pgv_lang["show_marnms"]			= "Sisällytä avionimet";
$pgv_lang["skip_marnms"]			= "Älä sisällytä avionimiä";
$pgv_lang["no_other_link_found"]	= "Muita linkkejä henkilöiden välillä ei löytynyt.";
$pgv_lang["aft_marr"]			= "kuukausia avioliiton jälkeen";
$pgv_lang["show_stats_charts"]		= "Näytä tilastokuvat";
$pgv_lang["avg_age"]				= "Keskimääräinen ikä";
$pgv_lang["employee"] = "Työntekijä";
$pgv_lang["employer"] = "Työnantaja";
$pgv_lang["owner"] = "Omistaja";
$pgv_lang["slave"] = "Orja";
$pgv_lang["less"]				= "alle";
$pgv_lang["over"]				= "yli";
$pgv_lang["g_chart_nobody"]		= "Ei kukaan";
$pgv_lang["interval"]			= "jaksotus";
$pgv_lang["stat_sfam"]			= "Perheitä joilla on lähteitä";
$pgv_lang["stat_sindi"]			= "Henkilöitä joilla on lähteitä";
$pgv_lang["stat_2_map"]			= "Syntymä maan mukaan";
$pgv_lang["stat_3_map"]			= "Kuolema maan mukaan";
$pgv_lang["stat_4_map"]			= "Avioliitto maan mukaan";
$pgv_lang["stat_1_map"]			= "Henkilöiden jakautuminen";
$pgv_lang["one_child"]			= "jaksotus yksi lapsi";
$pgv_lang["two_children"]		= "jaksotus kaksi lasta";
$pgv_lang["surname_distribution_chart"]	= "Sukunimijakautuminen";
$pgv_lang["indi_distribution_chart"]	= "Henkilöjakautuminen";
$pgv_lang["stat_9_indi"]		= "Henkilöt joilla on lähteitä";
$pgv_lang["stat_8_fam"]			= "Perheet joilla on lähteitä";
$pgv_lang["g_chart_high"]		= "Korkein väestö";
$pgv_lang["g_chart_low"]		= "Alhaisin väestö";
$pgv_lang["stplnuch"]			= "lapsia";
$pgv_lang["first_letter_sfname"]	= "Valitse kirjain nähdäksesi perheet, joiden aviopuolison nimi alkaa kyseisellä kirjaimella.";
$pgv_lang["facts"]					= "Tiedot";
$pgv_lang["setperms_fix"]			= "Oikeat luku-/kirjoitus-/suoritusoikeudet";
$pgv_lang["apply_filter"]			= "Suodata";
$pgv_lang["view_fam_nav_notes"]		= "Näytä muistiinpanot";
$pgv_lang["view_fam_nav_sources"]	= "Näytä lähteet";
$pgv_lang["view_fam_nav_media"]		= "Näytä media henkilölle ";
$pgv_lang["view_fam_nav_album"]		= "Näytä kuvasto henkilölle";
$pgv_lang["view_fam_nav_relatives"]	= "Näytä sukulaiset henkilölle";
$pgv_lang["view_fam_nav_tree"]		= "Näytä puu henkilölle";
$pgv_lang["view_fam_nav_map"]		= "Näytä kartta henkilölle ";
$pgv_lang["count"]					= "Lukumäärä";
$pgv_lang["sounds_like"]		= "Kuulostaa tältä";
$pgv_lang["begins_with"]		= "Alkaa näin";
$pgv_lang["advanced_search"] 	= "Tarkennettu haku";
$pgv_lang["view_fam_nav_research"]	= "Näytä tutkimus henkilölle";
$pgv_lang["block_givn_top10_descr"]		= "Tällä alueella näytetään taulukko tietokannan 10 yleisimmästä etunimestä. Näytettävien nimien lukumäärä on valittavissa. ";
$pgv_lang["decade_birth"]			= "Syntymävuosikymmen";
$pgv_lang["decade_death"]			= "Kuolinvuosikymmen";
$pgv_lang["decade_marriage"]		= "Avioitumisvuosikymmen";
$pgv_lang["map_type"]			= "Karttatyyppi";
$pgv_lang["bef_marr"]			= "Kuukausia ennen ja jälkeen avioitumisen";
$pgv_lang["quarters"]			= "Vuosineljänneksiä avioitumisen jälkeen";
$pgv_lang["half_year"]			= "Puolivuosia avioitumisen jälkeen";
$pgv_lang["TYPE__coat"] = "Vaakuna";
$pgv_lang["todo_descr"] = "Tehtävä-blokki listaa kaikki tietokannassa olevat _TODO-tiedot.";
$pgv_lang["todo_descr"] = "Tehtävä-alue listaa kaikki tietokannassa olevien tehtävien kuvaukset.";
$pgv_lang["navigator"]				= "Navigaattori";
$pgv_lang["sortby"]				= "Järjestys";
$pgv_lang["names"]					= "Nimet";
$pgv_lang["shared_note_menu"]		= "Jaetun lisätiedon asetukset";
$pgv_lang["search_notes"]			= "Jaettuja lisätietoja";
$pgv_lang["edit_shared_note"]		= "Muokkaa jaettua lisätietoa";
$pgv_lang["shared_note_list"]		= "Jaetut lisätiedot";
$pgv_lang["shared_notes"]			= "Jaetut lisätiedot";
$pgv_lang["search_shared_notes"]	= "Jaettuja lisätietoja";
$pgv_lang["shared_note"]				= "Jaettu lisätieto";
$pgv_lang["shared_notes_found"]			= "Löytyi jaettuja lisätietoja";
$pgv_lang["find_shared_note"]			= "Etsi jaettu lisätieto";
$pgv_lang["shared_note_info"]			= "Jaetun lisätiedon tiedot";
$pgv_lang["total_shared_notes"]			= "Jaettuja lisätietoja yhteensä";
$pgv_lang["view_fam_nav_spare"]		= "Näytä lisätietoja henkilölle";
$pgv_lang["brothers_wife"]		= "Käly"; // brother's wife
$pgv_lang["delete_shared_note"]		= "Poista tämä jaettu lisätieto";
$pgv_lang["confirm_delete_shared_note"]		= "Haluatko varmasti poistaa tämän jaetun lisätiedon?";
$pgv_lang["shared_note_contains"]	= "Jaettu lisätieto sisältää:";
$pgv_lang["cemetery_report"]		= "Hautausmaaraportti";
$pgv_lang["burialplace"]			= "Hautauspaikka sisältää";
$pgv_lang["landscape_top"]			= "Vanhin ylhäällä";
$pgv_lang["landscape_down"]			= "Vanhin alhaalla";
$pgv_lang["media_private"] 			= "Tiedot tästä mediasta ovat yksityisiä. Tietoja ei sisällytetä.";
$pgv_lang["by_alpha"]				= "Aakkosjärjestyksessä";
$pgv_lang["by_anniv"]				= "Vuosipäiväjärjestyksessä";
$pgv_lang["nanny"] = "Lastenhoitaja";
$pgv_lang["foster_mother"] = "Ottoäiti";
$pgv_lang["foster_father"] = "Ottoisä";
$pgv_lang["foster_child"] = "Ottolapsi";
$pgv_lang["guardian"]	= "Edunvalvoja";
$pgv_lang["lchildren"]				= "lasta";
$pgv_lang["font"]					= "Kirjasin";
$pgv_lang["rootid"] 				= "Esipolvitaulun lähtöhenkilö";
$pgv_lang["random_surn"]					= "Satunnainen sukunimi";
$pgv_lang["branch_list"]			= "Haarat";
$pgv_lang["convertPath"]			= "Muunna median poluiksi";
$pgv_lang["convertSlashes"]			= "Muunna mediakansioiden eroittimiksi";
$pgv_lang["forwardSlashes"]			= "Kauttamerkit : /";
$pgv_lang["backSlashes"]			= "Kenoviivat : \\";
$pgv_lang["repository"] 			= "Tietovarasto";
$pgv_lang["sort_style"]				= "Järjestystapa";
$pgv_lang["individual_with_rela_report"]		= "Raportti läheisistä";
$pgv_lang["ward"] = "Hoidokki";
$pgv_lang["stat_create"]		= "Luo oma kaaviosi";
$pgv_lang["stat_5_birth"]		= "Syntymät vuosisadoittain";
$pgv_lang["stat_6_death"]		= "Kuolemat vuosisadoittain";
$pgv_lang["stat_7_marr"]		= "Avioliitot vuosisadoittain";
$pgv_lang["stat_18_aard"]		= "Keskimääräinen ikä suhteessa kuolinvuosisataan";
$pgv_lang["stat_19_aarm"]		= "Keskimääräinen ikä avioliiton vuosisadalla";
$pgv_lang["stat_22_fwok"]		= "Lapsettomien perheiden lukumäärä";
$pgv_lang["century"]			= "vuosisata";
$pgv_lang["stat_age"]			= "ikä";
$pgv_lang["no_date_fam"]		= "ei tiedossa";
$pgv_lang["use_colors"]				= "Käytä värejä";
$pgv_lang["grandchildren"]			= "lapsenlasta";
$pgv_lang["generation_number"]		= "Sukupolvi";
$pgv_lang["stat_largest_families"] = "Suurimmat perheet";
$pgv_lang["stat_7_div"]			= "Avioerot vuosisadoittain";
$pgv_lang["with_sources"]		= "Lähteiden kanssa";
$pgv_lang["without_sources"]	= "Ilman lähteitä";
$pgv_lang["fam_navigator"]			= "Perhenavigaattori";
?>
