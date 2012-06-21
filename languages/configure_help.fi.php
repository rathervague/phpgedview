<?php
/**
 * Finnish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team
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
 * @author Matti Valve, Jani Miettinen, Marko Kohtala
 * @version $Id: configure_help.fi.php 5891 2009-07-12 22:30:31Z meliza $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
$pgv_lang["SHOW_LIST_PLACES"]	= "Kuinka monta tasoa paikkatietoja näytetään";
$pgv_lang["SHOW_LIST_PLACES_help"]	= "~#pgv_lang[SHOW_LIST_PLACES]#~<br /><br />Tämä määrittää, kuinka paljon paikkatietoa näytetään paikka-kentissä listoilla.<br /><br />Asettamalla arvoon <b>9</b> varmistat, että kaikki paikkatiedot tulevat näkyviin. Asettamalla arvoon <b>0</b> (nolla) piilotat kaikki paikkatiedot. Asettamalla arvoon <b>1</b> näkyy vain ylin taso, joka on tavallisesti maa. Arvolla <b>2</b> näkyy kaksi ylintä tasoa. Toinen taso maan alapuolella on usein osavaltio, maakunta, tai lääni.<br />";
$pgv_lang["new_gedcom_title"]		= "Sukututkimus tiedostosta [#GEDCOMFILE#]";
$pgv_lang["SYNC_GEDCOM_FILE_help"] 	= "~#pgv_lang[SYNC_GEDCOM_FILE]#~<br /><br />Aikaisemmissa PhpGedView versioissa vireillä olevat muutokset tallennettiin GEDCOM-tiedostoon ja muuttuneet tiedot sitten \"hyväksyttiin\" tietokantaan. Versiosta v4.1 alkaen vireillä olevia muutoksia ei enää tallenneta GEDCOM-tiedostoon, vaan muutokset-tiedostoon.<br /><br />Asettamalla tämän arvon todeksi, GEDCOM-tiedosto päivitetään kun muutokset hyväksytään tietokantaan. Tämä pitää GEDCOM tiedoston synkronoituna tietokantaan. Yhteensopivuuden vuoksi aikaisempien versioiden kanssa tämä on oletusarvoisesti päällä.<br /><br />Voit halutessasi ottaa sen pois päältä ja pienentää muistin kulutusta kun hyväksyt muutoksia.<br />";
$pgv_lang["SYNC_GEDCOM_FILE"]		= "Synkronoi muutokset GEDCOM-tiedostoon";
$pgv_lang["COMMIT_COMMAND_help"] 	= "~#pgv_lang[COMMIT_COMMAND]#~<br /><br />Mikäli haluat käyttää versionhallintajärjestelmää kuten CVS arkistoidaksesi muutokset GEDCOM-tiedostossasi, asetuksissasi tai yksityisyysaksetuksissasi, kirjoita komento tähän. Jätä lokero tyhjäksi mikäli et halua käyttää versionhallintajärjestelmää. Hyväksyttävät vaihtoehdot ovat <b>cvs</b> ja <b>svn</b>.<br />";
$pgv_lang["COMMIT_COMMAND"] 		= "Versionhallintajärjestelmä";
$pgv_lang["SHOW_MULTISITE_SEARCH_help"]= "~#pgv_lang[SHOW_MULTISITE_SEARCH]#~<br /><br />Usean sivuston haku sallii käyttäjien etsiä useilta eri PhpGedView web-sivustoilta, jotka olet määritellyt Palvelimien ylläpito ylläpitoalueella tai joihin on tehty ulkoinen yhteys. Tämä valinta vaikuttaa onko usean sivuston haku -toiminto käytettävissä kaikille vai vain todennetuille käyttäjille.<br />";
$pgv_lang["SHOW_MULTISITE_SEARCH"]	= "Näytä usean sivuston haku";
$pgv_lang["MEDIA_ID_PREFIX"]		= "Median ID etuliite";
$pgv_lang["FAM_ID_PREFIX"]		= "Perheen ID etuliite";
$pgv_lang["AUTO_GENERATE_THUMBS"]	= "Automaattisesti kehitetyt pikkukuvat ";
$pgv_lang["THUMBNAIL_WIDTH"]		= "Kehitettyjen pikkukuvien leveys";
$pgv_lang["THUMBNAIL_WIDTH_help"]	= "~#pgv_lang[THUMBNAIL_WIDTH]#~<br /><br />Kun ohjelma kehittää automaattisesti pikkukuvan, niin se käyttää tätä leveyttä (pikseleinä). Vakiona asetus on 100.";
$pgv_lang["SHOW_SOURCES"]		= "Näytä lähde";
$pgv_lang["UNDERLINE_NAME_QUOTES"]	= "Alleviivaa nimet lainausmerkeissä";
$pgv_lang["GEDCOM_DEFAULT_TAB"]	= "Oletusvälilehti näytettäessä henkilön sivu";
$pgv_lang["SHOW_MARRIED_NAMES"]	= "Näytä avionimet henkilöluettelossa";
$pgv_lang["SHOW_MARRIED_NAMES_help"]= "~#pgv_lang[SHOW_MARRIED_NAMES]#~<br /><br />Tämä valinta näyttää naisten avionimet henkilöluettelossa. Tämä valinta vaatii, että avionimet lasketaan, kun GEDCOM-tiedosto tuodaan.<br />";
$pgv_lang["USE_QUICK_UPDATE"]		= "Käytä #pgv_lang[quick_update_title]# lomaketta";
$pgv_lang["SEARCHLOG_CREATE"]	= "Arkistoi HakuLoki-tiedostot";
$pgv_lang["SEARCHLOG_CREATE_help"]	= "~#pgv_lang[SEARCHLOG_CREATE]#~<br /><br />Kuinka usein ohjelma arkistoi HakuLoki-tiedostot.<br />";
$pgv_lang["CHANGELOG_CREATE"]	= "Arkistoi MuutosLoki-tiedostot";

//-- CONFIGURE FILE MESSAGES
$pgv_lang["gedcom_conf"]		= "GEDCOM Perustiedot";
$pgv_lang["media_conf"]		= "Multimedia";
$pgv_lang["accpriv_conf"]		= "Yhteys ja yksityisyys";
$pgv_lang["displ_conf"]		= "Näyttö ja näkymä";
$pgv_lang["displ_names_conf"]	= "Nimet";
$pgv_lang["displ_comsurn_conf"] 	= "Yleisimmät sukunimet";
$pgv_lang["displ_layout_conf"]	= "Näkymä";
$pgv_lang["displ_hide_conf"]		= "Piilota ja näytä";
$pgv_lang["editopt_conf"]		= "Muokkaa asetuksia";
$pgv_lang["useropt_conf"]		= "Käyttäjäasetukset";
$pgv_lang["contact_conf"]		= "Yhteystiedot";
$pgv_lang["meta_conf"]		= "Web-sivusto ja META Tag -asetukset";
$pgv_lang["gedconf_head"]		= "GEDCOM konfiguraatio";
$pgv_lang["performing_update"]	= "Suorittaa päivityksen.";
$pgv_lang["config_file_read"]		= "Konfiguraatiotiedosto luettu.";
$pgv_lang["does_not_exist"]		= "ei saatavilla";
$pgv_lang["media_drive_letter"]	= "Media polku ei saa sisältää asema tunnusta; Media ei saata näkyä.";
$pgv_lang["db"]			= "Tietokanta";
$pgv_lang["current_gedcoms"]	= "Nykyiset GEDCOM:t";
$pgv_lang["ged_gedcom"]		= "GEDCOM-tiedosto";
$pgv_lang["ged_title"]			= "GEDCOM-otsake";
$pgv_lang["ged_config"]		= "Konfiguraatiotiedosto";
$pgv_lang["ged_search"]		= "HakuLoki-tiedostot";
$pgv_lang["ged_change"]		= "MuutosLoki-tiedosto";
$pgv_lang["ged_privacy"]		= "Yksityisyystiedosto";
$pgv_lang["disabled"]			= "Estetty";
$pgv_lang["mouseover"]		= "Hiiri päällä";
$pgv_lang["click"]			= "Hiiren klikkaus";

$pgv_lang["DBTYPE"]			= "Tietokannan tyyppi";
$pgv_lang["DBTYPE_help"]		= "~#pgv_lang[DBTYPE]#~<br /><br />PEAR tuetut tietokanta tyypit joihin kytkeytyä.<br /><br />PhpGedView tukee MySQL, PostgreSQL ja SQLite tietokantoja. MySQL ja PostgreSQL vaativat, että PHP:ssä on asennettuna kirjastot niille. SQLite on vakiona asennettuna PHP 5:ssä. <br /><br />SQLiten kanssa sinun ei tarvitse konfiguroida #pgv_lang[DBHOST]#ta, #pgv_lang[DBUSER]#a tai #pgv_lang[DBPASS]#a, mutta sinun täytyy asetella polku tietokannallesi #pgv_lang[DBNAME]# kenttään.<br /><br />Tämä asettaa \$DBTYPE <i>config.php</i>:ssa.<br />";

$pgv_lang["DBHOST"]		= "Tietokannan palvelin";
$pgv_lang["DBUSER"]		= "Tietokannan käyttäjä";
$pgv_lang["DBPASS"]			= "Tietokannan salasana";
$pgv_lang["DBNAME"]		= "Tietokannan nimi";

$pgv_lang["upload_path"]			= "Lähetyspolku";
$pgv_lang["upload_path_help"]		= "~#pgv_lang[upload_path]#~<br /><br />Tästä polusta löytyy GEDCOM-tiedosto jonka haluat lähettää. Asettaaksesi polun paina <b>Selaa</b> ja valitse sinun GEDCOM-tiedosto ja paina <b>Avaa</b>.";
$pgv_lang["gedcom_path"]			= "GEDCOM-palvelimen polku ja nimi";
$pgv_lang["CHARACTER_SET"]		= "Merkistökoodaus";
$pgv_lang["LANGUAGE"]			= "Kieli";
$pgv_lang["ENABLE_MULTI_LANGUAGE"]	= "Salli käyttäjän vaihtaa kieli";
$pgv_lang["CALENDAR_FORMAT"]		= "Kalenterin muoto";
$pgv_lang["DISPLAY_JEWISH_THOUSANDS"]	= "Näytä heprealaiset tuhannet";
$pgv_lang["DEFAULT_PEDIGREE_GENERATIONS"]	= "Sukupuun sukupolvien määrä";
$pgv_lang["MAX_PEDIGREE_GENERATIONS"]		= "Suurin määrä esipolvia";
$pgv_lang["ZOOM_BOXES"]			= "Lähennä laatikot kaaviossa";
$pgv_lang["HIDE_LIVE_PEOPLE"]		= "Salli yksityisyys";
$pgv_lang["MEDIA_DIRECTORY"]		= "Multimediakansio";
$pgv_lang["THEME_DIR"]			= "Teemakansio";
$pgv_lang["TIME_LIMIT"]			= "PHP aikaraja";
$pgv_lang["LOGIN_URL"]			= "Kirjautumis URL";
$pgv_lang["SHOW_COUNTER"]		= "Näytä osumalaskurit";
$pgv_lang["LOGFILE_CREATE"]		= "Arkistoi lokitiedostot";
$pgv_lang["MAX_VIEW_RATE"]		= "Sivujen näyttömäärän maksimiraja";
$pgv_lang["META_AUTHOR"]		= "Tekijän META-tagi";
$pgv_lang["META_PUBLISHER"]		= "Julkaisijan META-tagi";
$pgv_lang["META_COPYRIGHT"]		= "Kopiosuoja META-tagi";
$pgv_lang["META_DESCRIPTION"]		= "Kuvaus META-tagi";
$pgv_lang["META_ROBOTS"]		= "Hakurobotti META-tagi";
$pgv_lang["META_KEYWORDS"]		= "Avainsana META-tagi";
$pgv_lang["ENABLE_RSS"]			= "Salli RSS";
$pgv_lang["RSS_FORMAT"]			= "RSS Formaatti";

$pgv_lang["SECURITY_CHECK_GEDCOM_DOWNLOADABLE"] = "Tarkista ovatko GEDCOM-tiedostot ladattavissa";
$pgv_lang["SECURITY_CHECK_GEDCOM_DOWNLOADABLE_help"] = "~#pgv_lang[SECURITY_CHECK_GEDCOM_DOWNLOADABLE]#~<br /><br />Tietoturvan vuoksi GEDCOM-tiedostoja ei saisi pitää paikassa josta ne voi ladata suoraan tietosuojatarkistusten ohi. Klikkaamalla tätä linkkiä voit tarkistaa jos GEDCOM-tiedostot voi ladata verkon yli.<br /><br />Joillain järjestelmillä tämä kestää todella pitkän ajan tai ei edes tule koskaan valmiiksi. Jos sinun osaltasi on näin, sitten sinun tulisi yrittää osoittaa selaimesi suoraan GEDCOM-tiedostoosi nähdäksesi voiko sen ladata.<br />";

$pgv_lang["upload_to_index"]			= "Lähetä tiedosto index-kansioon:";
$pgv_lang["download_gedconf"]		= "Lataa GEDCOM-konfiguraatio";
$pgv_lang["save_config"] 			= "Tallenna konfiguraatio";

//-- edit privacy messages
$pgv_lang["edit_privacy"]			= "Muokkaa yksityisyyttä";
$pgv_lang["hide"]				= "Piilota";
$pgv_lang["show_question"]			= "Näytä?";
$pgv_lang["user_name"]			= "Tunnus";
$pgv_lang["choice"]				= "Valitse";
$pgv_lang["privacy_header"]			= "Muokkaa yksityisyys asetuksia";
$pgv_lang["SHOW_DEAD_PEOPLE"]	= "Näytä kuolleet ihmiset";

//-- language edit utility
$pgv_lang["lang_edit_help"]			= "~Tällä sivulla ylläpidetään kielitiedostoja~<br />Voit kääntää, verrata ja viedä kielitiedostoja.<br />Lisäksi voit tehdä asetuksia ohjelman tukemiin kieliin.<br /><br />Voit käyttää seuraavia vaihtoehtoja ja työkaluja:";
$pgv_lang["edit_langdiff"]			= "Muokkaa ja konfiguroi kielitiedostoja";
$pgv_lang["edit_lang_utility"]			= "Kielitiedoston muokkaustyökalu";
$pgv_lang["language_to_edit"]		= "Muokattava kieli";
$pgv_lang["language_to_edit_help"]		= "~#pgv_lang[language_to_edit]#~<br /><br />Tästä pudotusvalikosta voit valita minkä kielisiä viestejä haluat muokata.<br />";
$pgv_lang["file_to_edit"]			= "Muokattavan kielitiedoston tyyppi";
$pgv_lang["check"]				= "Tarkista";
$pgv_lang["lang_save"]			= "Talleta";
$pgv_lang["contents"]				= "Sisältö";
$pgv_lang["listing"]				= "Listaus";
$pgv_lang["no_content"]			= "Ei sisältöä";
$pgv_lang["editlang"]				= "Muokkaa";
$pgv_lang["savelang"]				= "Talleta";
$pgv_lang["original_message"]		= "Alkuperäinen teksti";
$pgv_lang["message_to_edit"]		= "Muokattava teksti";
$pgv_lang["changed_message"]		= "Muutettu sisältö";
$pgv_lang["message_empty_warning"]	= "-> Varoitus!!! Tämä viesti on tyhjä #LANGUAGE_FILE# &lt;-";
$pgv_lang["language_to_export"]		= "Vietävä kieli";
$pgv_lang["export_lang_utility"]		= "Kielitiedoston vientityökalu";
$pgv_lang["export"]				= "Vie";
$pgv_lang["export_ok"]			= "Ohjeviestit vietiin";
$pgv_lang["compare_lang_utility"]		= "Kielitiedostojen vertailutyökalu";
$pgv_lang["new_language"]			= "Lähdekieli";
$pgv_lang["new_language_help"]		= "#pgv_lang[compare_lang_utility]# >> <b>#pgv_lang[new_language]#</b><br /><br />Tästä pudotusvalikosta voit valita sen kielen, jonka haluat lähteeksi verrataksesi sitä toiseen kieleen.<br /><br />Kaikki muutokset ja lisäykset tehdään ensin <b>englanninkieliseen</b> kielitiedostoon.";
$pgv_lang["old_language"]			= "Verrattava kieli";
$pgv_lang["old_language_help"]		= "#pgv_lang[compare_lang_utility]# >> <b>#pgv_lang[old_language]#</b><br /><br />Tästä pudotusvalikosta voit valita kielen jota haluat verrata <b>lähteen</b> pudotusvalikosta valittuun kieleen.<br /><br />Kun ole tehnyt valinnan, klikkaa <b>vertaa</b> painiketta ja saat luettelon kaikista lisäyksistä ja poistoista.<br /><br />Varmuudeksi:<br /><b>lisäys</b> tarkoittaa: se <b>on jo olemassa</b> lähdetiedostossa mutta <b>ei</b> vertailutiedostossa.<br /><br /><b>Poistaminen</b> tarkoittaa: se <b>ei</b> ole enää lähdetiedostossa, mutta <b>on</b> (vielä) vertailutiedostossa.";
$pgv_lang["compare"]				= "Vertaile";
$pgv_lang["comparing"]			= "Vertailtavat kielitiedostot";
$pgv_lang["additions"]				= "Lisäykset";
$pgv_lang["no_additions"]			= "Ei lisäyksiä";
$pgv_lang["subtractions"]			= "Vähentäminen";
$pgv_lang["no_subtractions"]			= "Ei vähentämistä";
$pgv_lang["config_lang_utility"]		= "Tuettujen kielien hallinta";
$pgv_lang["active"]				= "Aktiivinen";
$pgv_lang["active_help"]			= "~#pgv_lang[active]#~<br /><br />Sallii käyttäjän valita kielen jos <b>#pgv_lang[ENABLE_MULTI_LANGUAGE]#</b> -valinta on päällä.<br />";
$pgv_lang["edit_settings"]			= "Muokkaa asetuksia";
$pgv_lang["lang_edit"]				= "Muokkaa";
$pgv_lang["lang_language"]			= "Kieli";
$pgv_lang["export_filename"]			= "Vientitiedoston nimi:";
$pgv_lang["lang_back"]			= "Palaa päävalikkoon muokataksesi ja hallitaksesi kielitiedostoja";
$pgv_lang["lang_back_admin"]		= "Palaa ylläpitovalikkoon";
$pgv_lang["lang_back_manage_gedcoms"]	= "Palaa GEDCOM-hallintavalikkoon";

$pgv_lang["lang_name_catalan"]		= "Katalaani (Valencia)";
$pgv_lang["lang_name_chinese"]		= "Kiina";
$pgv_lang["lang_name_czech"]		= "Tšekki";
$pgv_lang["lang_name_swedish"]		= "Ruotsi";
$pgv_lang["lang_name_slovak"]		= "Slovakia";
$pgv_lang["lang_name_vietnamese"]		= "Vietnam";
$pgv_lang["lang_name_lithuanian"]		= "Liettua";
$pgv_lang["lang_name_arabic"]		= "Arabia";
$pgv_lang["lang_name_greek"]		= "Kreikka";
$pgv_lang["lang_name_turkish"]		= "Turkki";
$pgv_lang["lang_name_dutch"]		= "Hollanti";
$pgv_lang["lang_name_estonian"]		= "Eesti";
$pgv_lang["lang_name_french"]		= "Ranska";
$pgv_lang["lang_name_spanish-ar"]		= "Espanja (Latinalainen Amerikka)";
$pgv_lang["lang_name_spanish"]		= "Espanja";
$pgv_lang["lang_name_russian"]		= "Venäjä";
$pgv_lang["lang_name_portuguese"]		= "Portugali";
$pgv_lang["lang_name_polish"]		= "Puola";
$pgv_lang["lang_name_norwegian"]		= "Norja";
$pgv_lang["lang_name_italian"]		= "Italia";
$pgv_lang["lang_name_hungarian"]		= "Unkari";
$pgv_lang["lang_name_hebrew"]		= "Heprea";
$pgv_lang["lang_name_danish"]		= "Tanska";
$pgv_lang["lang_name_english"]		= "Englanti";
$pgv_lang["lang_name_finnish"]		= "Suomi";
$pgv_lang["lang_name_german"]		= "Saksa";
$pgv_lang["lang_new_language"]		= "Uusi kieli";
$pgv_lang["original_lang_name"]		= "Alkuperäinen kielen nimi #D_LANGNAME#";
$pgv_lang["lang_langcode"]			= "Kielentunnistuskoodit";
$pgv_lang["lang_filenames"]			= "Kielitiedostot";
$pgv_lang["flagsfile"]				= "Lipputiedosto";
$pgv_lang["text_direction"]			= "Tekstin suunta";
$pgv_lang["date_format"]			= "Päivämäärän muoto";

$pgv_lang["time_format"]			= "Ajan muoto";

$pgv_lang["week_start"]			= "Viikon ensimmäinen päivä";
$pgv_lang["name_reverse"]			= "Sukunimi ensin";
$pgv_lang["ltr"]					= "Vasemmalta oikealle";
$pgv_lang["rtl"]					= "Oikealta vasemmalle";
$pgv_lang["file_does_not_exist"]		= "VIRHE! Tiedostoa ei ole...";
$pgv_lang["alphabet_upper"]			= "Aakkoset isoin kirjaimin";
$pgv_lang["alphabet_upper_help"]		= "~#pgv_lang[alphabet_upper]#~<br /><br />Tämän kielen isot kirjaimet. Näitä kirjaimia käytetään kun lajitellaan nimilistoja.<br />";
$pgv_lang["alphabet_lower"]			= "Aakkoset pienin kirjaimin";
$pgv_lang["alphabet_lower_help"]		= "~#pgv_lang[alphabet_lower]#~<br /><br />Tämän kielen pienet kirjaimet. Näitä kirjaimia käytetään kun lajitellaan nimilistoja.<br />";
$pgv_lang["multi_letter_alphabet"]		= "Monimerkkiaakkoset";
$pgv_lang["dictionary_sort"]			= "Käytä sanakirjasääntöä lajittelussa";
$pgv_lang["lang_config_write_error"]		= "Virhe kirjoitettaessa kieliasetuksia tiedostoon <b>lang_settings.php</b>. Tarkista oikeudet ja yritä uudelleen.";
$pgv_lang["translation_forum"]		= "PhpGedView Käännös -keskusteluryhmä SourceForge:ssa";
$pgv_lang["translation_forum_desc"]		= "Tämä <a href=\"http://sourceforge.net/forum/forum.php?forum_id=294245\" target=\"_blank\"><b>linkki</b></a> avautuu uuteen selainikkunaan. Sinut uudelleenohjataan PhpGedView Käännös -keskusteluryhmään, jossa voit keskustella käännöksistä.";
$pgv_lang["lang_set_file_read_error"]	= "V I R H E !!! Ei pysty lukemaan tiedostoa <b>lang_settings.php</b>!";
$pgv_lang["add_new_lang_button"]		= "Lisää uusi kieli";
$pgv_lang["hide_translated"]			= "Piilota käännetyt";
$pgv_lang["hide_translated_help"]		= "~#pgv_lang[hide_translated]#~<br /><br />Mikäli vastaat kyllä, näkyvät vain ne valitsemasi kielen viestit joita ei ole käännetty eli joita ei vielä ole valitsemassasi kielitiedostossa.<br />Kun viesti on kielitiedostossa (vaikka vielä kääntämättä) tätä ei enää näytetä luettelossa.<br />";
$pgv_lang["lang_file_write_error"]		= "V I R H E !!!<br /><br />Ei pysty kirjoittamaan muutoksia valittuun kielitiedostoon. Tarkista tiedoston <b>#lang_filename#</b> kirjoitus oikeudet";
$pgv_lang["no_open"]				= "V I R H E !!!<br /><br />Ei pysty avaamaan tiedostoa <b>#lang_filename#</b>";
$pgv_lang["users_langs"]			= "Käyttäjien kielet";
$pgv_lang["configured_languages"]		= "Käytettävät kielet";

//-- User Migration Tool messages
$pgv_lang["um_header"] 		= "Käyttäjätietojen integrointityökalu";
$pgv_lang["um_creating"] 		= "Tekee";
$pgv_lang["um_file_create_succ1"] 	= "Luotu uusi tiedosto onnistuneesti:";
$pgv_lang["um_file_not_created"] 	= "Tiedostoa ei luotu.";
$pgv_lang["um_imp_blocks"] 		= "Tuo lohkot";
$pgv_lang["um_nousers"] 		= "Tiedostoa <i>authenticate.php</i> ei löytynyt index-kansiosta. Siirto peruutettu.";
$pgv_lang["um_imp_news"] 		= "Tuo uutiset";
$pgv_lang["um_imp_messages"] 	= "Tuo viestit";
$pgv_lang["um_imp_favorites"] 	= "Tuo suosikit";
$pgv_lang["um_imp_users"] 		= "Tuo käyttäjät";
$pgv_lang["um_tool_help"] 		= "~#pgv_lang[um_header]#~<br /><br />#pgv_lang[um_explain]#";
$pgv_lang["um_imp_fail"] 		= "Tuonti epäonnistui.";
$pgv_lang["um_zip_dl"] 		= "Lataa ZIPattu varmuuskopiotiedosto";
$pgv_lang["um_zip_succ"] 		= "ZIP-tiedosto onnistuneesti tehty.";
$pgv_lang["um_bu_explain"] 		= "Tällä työkalulla voi tehdä muutamista erilaisista tiedoista varmuuskopioita phpGedView:ssä.<br /><br />Valitsemasi varmuuskopioitavat tiedot kerätään ZIP-tiedostoon, jonka voit ladata sivun lopussa olevasta linkistä kun varmuuskopiointi on tehty.<br /><br />ZIP-tiedosto jää sinun index-kansioon kunnes sen manuaalisesti poistat.";
$pgv_lang["um_bu_help"] 		= "~#pgv_lang[um_backup]#~<br /><br />#pgv_lang[um_bu_explain]#";
$pgv_lang["um_bu_config"] 		= "PhpGedView konfiguraatiotiedosto";
$pgv_lang["um_bu_gedcoms"] 	= "GEDCOM-tiedostot";
$pgv_lang["um_bu_gedsets"] 		= "GEDCOM asetus-, konfiguraatio- ja yksityisyystiedostot";
$pgv_lang["um_bu_logs"] 		= "GEDCOM-laskurit, -hakulokit ja PhpGedView-lokit";
$pgv_lang["um_file_create_fail1"] 	= "Uuden tiedoston luonti epäonnistui. Samanniminen tiedosto on jo olemassa:";
$pgv_lang["um_file_create_fail2"] 	= "Luonti ei onnistu";
$pgv_lang["um_file_create_fail3"] 	= "Tarkista tämän kansion käyttöoikeudet.";
$pgv_lang["um_import"] 		= "Tuo";
$pgv_lang["um_export"] 		= "Vie";
$pgv_lang["um_sql_index_help"] 	= "~Siirtää käyttäjät SQL:stä indeksi-muotoon~<br /><br />#pgv_lang[um_sql_index]#";
$pgv_lang["um_index_sql_help"] 	= "~Siirrä käyttäjät indeksistä SQL-muotoon~<br /><br />#pgv_lang[um_index_sql]#";
$pgv_lang["um_imp_succ"] 		= "Tuonti onnistui";
$pgv_lang["um_backup"] 		= "Varmuuskopio";
$pgv_lang["um_bu_usinfo"] 		= "Käyttäjä määritykset, lohko asetukset, suosikit, viestit, uutiset";
$pgv_lang["um_bu_media"]		= "Media tiedostot";
$pgv_lang["um_mk_bu"] 		= "Tee varmuuskopio";
$pgv_lang["um_nofiles"] 		= "Varmuuskopioon ei löytynyt tiedostoja.";
$pgv_lang["um_files_exist"] 		= "Yksi tai useampi tiedosto on jo saatavilla. Haluatko ylikirjoittaa ne?";
$pgv_lang["um_results"]		= "Tulokset";
$pgv_lang["preview_faq_item"] 	= "Esikatsele kaikki kysymykset";
$pgv_lang["edit_faq_item"] 		= "Muokkaa kysymystä";
$pgv_lang["edit_faq_item_help"] 	= "~#pgv_lang[edit_faq_item]#~<br />Tämä valinta sallii sinun muokata kysymystä tai sen vastausta.<br />";
$pgv_lang["restore_faq_edits"] 	= "Palauta kysymysten muokkaustoiminta";
$pgv_lang["restore_faq_edits_help"] 	= "~#pgv_lang[restore_faq_edits]#~<br />Tämä valinta palauttaa UKK-sivun ylläpidon näkemään tilaan, jotta yksittäistä kysymystä voi muokata.<br />";
$pgv_lang["add_faq_item"] 		= "Lisää kysymys";
$pgv_lang["add_faq_item_help"] 	= "~#pgv_lang[add_faq_item]#~<br />Tämä valinta sallii sinun lisätä kysymyksen UKK-sivulle.<br />";
$pgv_lang["delete_faq_item"] 		= "Poista kysymys";
$pgv_lang["delete_faq_item_help"] 	= "~#pgv_lang[delete_faq_item]#~<br />Tämä valinta sallii sinun poistaa kysymyksen UKK-sivulta.<br />";
$pgv_lang["moveup_faq_item"] 	= "Siirrä kysymys ylös";
$pgv_lang["movedown_faq_item"] 	= "Siirrä kysymys alas";
$pgv_lang["time_limit_help"]		= "~#pgv_lang[time_limit]#~<br /><br />Tuonnille sallittu maksimiaika käsitellessä GEDCOM-tiedostoa.";

// Media items

// editconfig_gedcom.php Option Filter
$pgv_lang["ged_filter_results"] 	= "Tuloksia löytyi";
$pgv_lang["ged_filter_reset"] 		= "Tyhjennä haku";
$pgv_lang["ged_filter_description"] 	= "Hae asetuksen kuvauksesta";
$pgv_lang["ged_filter_description_help"] = "~#pgv_lang[ged_filter_description]#~<br />Tämä kenttä antaa sinun hakea asetuksia joiden kuvaus sisältää kirjoittamasi tekstin.<br /><br />Kun kirjoitat kirjaimia, haku etsii kaikki asetukset jotka sisältävät antamasi kirjainsarjan.  Haku tulee tarkemmaksi kirjoittaessasi lisää kirjaimia.<br />";
$pgv_lang["lang_name_slovenian"]	= "Slovenia";
$pgv_lang["lang_name_serbian-la"]	= "Serbia (Latinalaiset aakkoset)";
$pgv_lang["lang_name_romanian"]		= "Romania";
$pgv_lang["lang_name_indonesian"]	= "Indonesia";
$pgv_lang["edit_privacy_title"]			= "Muokkaa GEDCOMin tietosuoja-asetukset";
$pgv_lang["more_help_advice"]			= "<br /> <b>Lisäohje</b><br />Lisää apua on saatavilla napsauttamalla <b>?</b> sivulla kohteiden vieressä.<br />";
$pgv_lang["bom_check"]		= "Byte Order Mark (BOM) tarkastus";
$pgv_lang["USE_MEDIA_VIEWER"]			= "Käytä Media Vieweriä";
$pgv_lang["WATERMARK_THUMB"]			= "Lisää vesileimat pikkukuviin?";
$pgv_lang["WATERMARK_THUMB_help"]		= "~#pgv_lang[WATERMARK_THUMB]#~<br /><br />Jos Media Firewall on päällä, tuleeko pikkukuviin lisätä vesileima? Medialistasi latautuvat nopeammin jos et vesileimaa pikkukuvia.<br />";
$pgv_lang["DB_UTF8_COLLATION"]			= "Käytä tietokantaa UTF-8 aakkosjärjestyksen tuottamiseen";
$pgv_lang["INDI_FACTS_ADD"] 			= "Henkilöön lisättävät tiedot";
$pgv_lang["INDI_FACTS_UNIQUE"] 			= "Henkilöön kerran lisättävät tiedot";
$pgv_lang["INDI_FACTS_QUICK"] 			= "Henkilöön nopeasti lisättävät tiedot";
$pgv_lang["INDI_FACTS_QUICK_help"]	= "~#pgv_lang[INDI_FACTS_QUICK]#~<br /><br />Tämä lista GEDCOM tietoja näkyy täydellisen listan vieressä ja niistä voi lisätä tietoja yhdellä klikkauksella.<br />";
$pgv_lang["FAM_FACTS_ADD"] 			= "Perheeseen lisättävät tiedot";
$pgv_lang["FAM_FACTS_UNIQUE"] 			= "Perheeseen kerran lisättävät tiedot";
$pgv_lang["FAM_FACTS_QUICK"] 			= "Perheeseen nopeasti lisättävät tiedot";
$pgv_lang["FAM_FACTS_QUICK_help"]	= "~#pgv_lang[FAM_FACTS_QUICK]#~<br /><br />Tämä lista perhetietoja näkyy täyden listan vieressä ja siitä voi lisätä tiedon yhdellä klikkauksella.<br />";
$pgv_lang["editlang_help"]		= "~#pgv_lang[editlang]#~<br /><br />Muokkaa viestiä kielitiedostosta.<br />";
$pgv_lang["savelang_help"]		= "~#pgv_lang[savelang]#~<br /><br />Tallenna muokattu viesti kielitiedostoon.<br />";
$pgv_lang["lang_shortcut"]		= "Lyhenne kielitiedostoille";
$pgv_lang["multi_letter_equiv"]		= "Usean merkin yhtäläisyydet";
$pgv_lang["collation"]		= "Tietokannan aakkosjärjestys";
$pgv_lang["um_nomsg"] = "Järjestelmässä ei ole viestejä.";
$pgv_lang["um_nofav"] = "Järjestelmässä ei näytä olevan suosikkeja.";
$pgv_lang["um_nomsg"] = "Järjestelmässä ei näytä olevan viestejä.";
$pgv_lang["lang_debug"]			= "Ohjeiden vianhaun asetus";
$pgv_lang["SOUR_FACTS_ADD"] 			= "Lähteeseen lisättävät tiedot";
$pgv_lang["SOUR_FACTS_UNIQUE"] 			= "Lähteeseen kerran lisättävät tiedot";
$pgv_lang["REPO_FACTS_ADD"] 			= "Tietovarastoon lisättävät tiedot";
$pgv_lang["REPO_FACTS_UNIQUE"] 			= "Tietovarastoon kerran lisättävät tiedot";
$pgv_lang["REPO_FACTS_QUICK"] 			= "Tietovarastoon nopeasti lisättävät tiedot";
$pgv_lang["SOUR_FACTS_QUICK"] 			= "Lähteeseen nopeasti lisättävät tiedot";
$pgv_lang["QUICK_REQUIRED_FAMFACTS"]			= "Perheen pikapäivityksessä aina näytettävät tiedot";
$pgv_lang["QUICK_ADD_FAMFACTS"]			= "Perheen pikapäivityksessä näytettävät tiedot";
$pgv_lang["QUICK_REQUIRED_FACTS"]			= "Pikapäivityksessä aina näytettävät tiedot";
$pgv_lang["QUICK_ADD_FACTS"]			= "Pikapäivityksessä näytettävät tiedot";
$pgv_lang["USE_GEONAMES"]				= "Käytä GeoNames tietokantaa";
$pgv_lang["SPLIT_PLACES"]		= "Pilko paikannimet muokkaustilassa";
$pgv_lang["PRIVACY_BY_RESN"]		= "Käytä GEDCOM (RESN) yksityisyysrajoitusta";
$pgv_lang["CHART_BOX_TAGS"]		= "Muut tiedot kaavioissa";
$pgv_lang["GEDCOM_ID_PREFIX"]		= "Henkilön tunnuksen etuliite";
$pgv_lang["MAX_DESCENDANCY_GENERATIONS"]	= "Suurin määrä jälkipolvia";
$pgv_lang["USE_RIN"]			= "Käytä RIN -numeroa GEDCOM tunnisteen sijaan";
$pgv_lang["PEDIGREE_ROOT_ID"]		= "Oletushenkilö esi- ja jälkipolvikaavioissa";
$pgv_lang["SOURCE_ID_PREFIX"]		= "Lähteen tunnuksen etuliite";
$pgv_lang["REPO_ID_PREFIX"]		= "Tietovaraston tunnuksen etuliite";
$pgv_lang["PEDIGREE_FULL_DETAILS"]	= "Näytä syntymän ja kuoleman yksityiskohdat kaavioilla";
$pgv_lang["PEDIGREE_SHOW_GENDER"]	= "Näytä sukupuoli-ikonit kaavioilla";
$pgv_lang["PEDIGREE_LAYOUT"]		= "Oletus esipolvitaulun asettelu";
$pgv_lang["SHOW_EMPTY_BOXES"]		= "Näytä tyhjät laatikot esipolvitaulussa";
$pgv_lang["SHOW_AGE_DIFF"]			= "Näytä ikäerot";
$pgv_lang["SHOW_PARENTS_AGE"]			= "Näytä vanhempien iät lapsen syntymäpäivän vieressä";
$pgv_lang["SHOW_RELATIVES_EVENTS"]      = "Näytä lähisukulaisten tapahtumat henkilön sivulla";
$pgv_lang["EXPAND_RELATIVES_EVENTS"]      = "Automaattisesti laajenna lähisukulaisten tapahtumalista";
$pgv_lang["EXPAND_SOURCES"]      = "Automaattisesti laajenna lähdetiedot";
$pgv_lang["EXPAND_NOTES"]      = "Automaattisesti laajenna lisätiedot";
$pgv_lang["SHOW_LEVEL2_NOTES"]      = "Näytä kaikki lisätiedot ja lähdeviitteet lisätiedot ja lähteet välilehdillä";
$pgv_lang["REQUIRE_AUTHENTICATION"]	= "Vaadi vierailijoita kirjautumaan";
$pgv_lang["PAGE_AFTER_LOGIN"]		= "Kirjautumisen jälkeen näytettävä sivu";
$pgv_lang["WELCOME_TEXT_AUTH_MODE"]	= "Kirjautumissivun tervehdysteksti";
$pgv_lang["CHECK_CHILD_DATES"]		= "Tarkista lasten päiväykset";
?>
