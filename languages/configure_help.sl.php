<?php
/**
 * Slovenian Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @translator Leon Kos
 * @version $Id: configure_help.sl.php 5350 2009-04-06 17:56:04Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["SHOW_LIST_PLACES"]	= "Nivoji krajev za prikaz v seznamih";

$pgv_lang["new_gedcom_title"]		= "Rodovnik iz [#GEDCOMFILE#]";

$pgv_lang["USE_MEDIA_VIEWER"]			= "Uporabi pregledovalnik medijev";
$pgv_lang["USE_MEDIA_FIREWALL"]			= "Uporabi požarni zid za medije";
$pgv_lang["MEDIA_FIREWALL_ROOTDIR"]		= "Korenski imenik požarnega zidu za medije";
$pgv_lang["MEDIA_FIREWALL_ROOTDIR_note"]	= "Če je to polje prazno, bo uporabljen imenik <b>#GLOBALS[INDEX_DIRECTORY]#</b>.";
$pgv_lang["MEDIA_FIREWALL_THUMBS"]		= "Zaščiti sličice zaščitenih fotografij";
$pgv_lang["SHOW_SPIDER_TAGLINE"]		= "Pokaži vrstico iskalnega pajka";
$pgv_lang["SHOW_PRIVATE_RELATIONSHIPS"]		= "Pokaži zasebne povezave";
$pgv_lang["SYNC_GEDCOM_FILE"]			= "Sinhroniziraj popravke v datoteko GEDCOM";
$pgv_lang["COMMIT_COMMAND"] 			= "Ukaz za vpis v sistem za nadzor verzij";
$pgv_lang["SHOW_MULTISITE_SEARCH"]		= "Pokaži Multi-Site Search";
$pgv_lang["SHOW_NO_WATERMARK"]			= "Kdo lahko gleda slike brez vodnega tiska?";
$pgv_lang["WATERMARK_THUMB"]			= "Sličicam dodaj vodni tisk?";
$pgv_lang["SAVE_WATERMARK_THUMB"]		= "Shrani sličice z vodnim tiskom na strežniku?";
$pgv_lang["SAVE_WATERMARK_IMAGE"]		= "Shrani fotografije z vodnim tiskom na strežniku?";
$pgv_lang["DBPERSIST"]				= "Uporabi trajne povezave na bazo podatkov";
$pgv_lang["INDI_FACTS_ADD"] 			= "Dejstva Dodaj osebo";
$pgv_lang["INDI_FACTS_UNIQUE"] 			= "Dejstva Posebnosti osebe";
$pgv_lang["INDI_FACTS_QUICK"] 			= "Kratka dejstva osebe";
$pgv_lang["FAM_FACTS_ADD"] 			= "Dejstva Dodaj družino";
$pgv_lang["FAM_FACTS_UNIQUE"] 			= "Dejstva Posebnosti družine";
$pgv_lang["FAM_FACTS_QUICK"] 			= "Kratka dejstva družine";
$pgv_lang["SOUR_FACTS_ADD"] 			= "Dejstva Dodaj vir";
$pgv_lang["SOUR_FACTS_UNIQUE"] 			= "Dejstva Unikaten vir";
$pgv_lang["SOUR_FACTS_QUICK"] 			= "Dejstva Posebnosti vira";
$pgv_lang["REPO_FACTS_ADD"] 			= "Dejstva Dodaj skladišče";
$pgv_lang["REPO_FACTS_UNIQUE"] 			= "Dejstva Posebnosti skladišča";
$pgv_lang["REPO_FACTS_QUICK"] 			= "Kratka dejstva skladišča";
$pgv_lang["MEDIA_ID_PREFIX"]			= "Predpona za ID medijev";
$pgv_lang["FAM_ID_PREFIX"]			= "Predpona za ID družin";
$pgv_lang["QUICK_REQUIRED_FAMFACTS"]		= "Dejstva za družine, ki se vedno prikažejo pri Hitri obnovitvi";
$pgv_lang["QUICK_ADD_FAMFACTS"]			= "Dejstva za družine, ki se prikažejo pri Hitri obnovitvi";
$pgv_lang["QUICK_REQUIRED_FACTS"]		= "Zahtevana dejstva za prikaz pri Hitri obnovitvi";
$pgv_lang["QUICK_ADD_FACTS"]			= "Dejstva za prikaz pri Hitri obnovitvi";
$pgv_lang["USE_GEONAMES"]			= "Uporabi podatkovno bazo GeoNames";
$pgv_lang["AUTO_GENERATE_THUMBS"]		= "Samodejno izdelaj sličice";
$pgv_lang["more_help_advice"]			= "<br /><b>Več pomoči</b><br />Več pomoč je na voljo s klikom na <b>?</b> poleg navedkov na strani.<br />";
$pgv_lang["THUMBNAIL_WIDTH"]			= "Širina izdelanih sličic";
$pgv_lang["SHOW_SOURCES"]			= "Pokaži vire";
$pgv_lang["SPLIT_PLACES"]			= "Razdeli mesta v urejevalnem načinu";
$pgv_lang["UNDERLINE_NAME_QUOTES"]		= "Podčrtaj imena v navednicah";
$pgv_lang["PRIVACY_BY_RESN"]			= "Uporabi GEDCOM (RESN) omejitev zasebnosti";
$pgv_lang["SHOW_LDS_AT_GLANCE"]			= "Pokaži kode LDS v okvirčkih predlednic";
$pgv_lang["GEDCOM_DEFAULT_TAB"]			= "Privzeti zavihek za prikaz na strani osebe";
$pgv_lang["SHOW_MARRIED_NAMES"]			= "Pokaži poročna imena na seznamu oseb";
$pgv_lang["SHOW_QUICK_RESN"]			= "Pokaži polja zasebnosti na obrazcu #pgv_lang[quick_update_title]#";
$pgv_lang["USE_QUICK_UPDATE"]			= "Uporabi obrazec #pgv_lang[quick_update_title]#";
$pgv_lang["SEARCHLOG_CREATE"]			= "Arhiviraj dnevnike iskanja";
$pgv_lang["CHANGELOG_CREATE"]			= "Arhiviraj dnevnike sprememb";
$pgv_lang["CHART_BOX_TAGS"]			= "Druga dejstva za prikaz na preglednicah";
$pgv_lang["FULL_SOURCES"]			= "Uporabi polne vire citiranja";
$pgv_lang["PREFER_LEVEL2_SOURCES"]		= "Raje uporabi dejstva virov";


//-- CONFIGURE FILE MESSAGES
$pgv_lang["gedcom_conf"]		= "Osnovne GEDCOM nastavitve";
$pgv_lang["media_conf"]			= "Večpredstavnost";
$pgv_lang["media_general_conf"]		= "Splošno";
$pgv_lang["media_firewall_conf"]	= "Požarni zid medijev";
$pgv_lang["accpriv_conf"]		= "Dostop in zasebnost";
$pgv_lang["displ_conf"]			= "Prikaz in postavitev";
$pgv_lang["displ_names_conf"]		= "Imena";
$pgv_lang["displ_comsurn_conf"] 	= "Skupni priimki";
$pgv_lang["displ_layout_conf"]		= "Postavitev";
$pgv_lang["displ_hide_conf"]		= "Skrij in prikaži";
$pgv_lang["editopt_conf"]		= "Možnosti urejanja";
$pgv_lang["useropt_conf"]		= "Uporabnikove možnosti";
$pgv_lang["contact_conf"]		= "Kontaktni podatki";
$pgv_lang["meta_conf"]			= "Spletna stran in META Tag nastavitve";
$pgv_lang["gedconf_head"]		= "GEDCOM nastavitve";
$pgv_lang["other_theme"]		= "Drugo, prosim vnesite";
$pgv_lang["performing_update"]		= "Obnovitev v teku.";
$pgv_lang["config_file_read"]		= "Datoteka nastavitev je bila prebrana.";
$pgv_lang["does_not_exist"]		= "ne obstaja";
$pgv_lang["media_drive_letter"]		= "Pot za medije ne sme vsebovati črko diska; Mediji ne bodo prikazani.";
$pgv_lang["db_setup_bad"]		= "Vaša trenutna nastavitev baze ni v redu.  Preverite vašo povezavo z bazo in jo ponovno nastavite.";
$pgv_lang["bad_host_user_pass"]		= "PhpGedView ni mogel vzostaviti povezavo do podatkovnega strežnika.  Preverite ali je ime strežnika, uporabniško ime in geslo pravilno";
$pgv_lang["bad_database_name"]		= "PhpGedView se je povezal s podatkovnim strežnikom, vendar ni mogel uporabiti bazo podatkov, ki je bila podana. Preverite ali baza obstaja in da ima vnešeno uporabniško ime ustrezna dovoljenza za to bazo.";
$pgv_lang["db"]				= "Baza podatkov";
$pgv_lang["current_gedcoms"]		= "Trenutni GEDCOM-i";
$pgv_lang["ged_gedcom"]			= "Datoteka GEDCOM";
$pgv_lang["ged_title"]			= "GEDCOM naslov";
$pgv_lang["ged_config"]			= "Nastavitvena datoteka";
$pgv_lang["ged_search"]			= "Datoteka iskalnega dnevnika";
$pgv_lang["ged_change"]			= "Datoteke dnevnikov sprememb";
$pgv_lang["ged_privacy"]		= "Datoteka zasebnosti";
$pgv_lang["disabled"]			= "Izključeno";
$pgv_lang["mouseover"]			= "Ob prehodu z miško";
$pgv_lang["mousedown"]			= "Ob pritisku miške";
$pgv_lang["click"]			= "Ob kliku miške";
$pgv_lang["enter_db_pass"]		= "Zaradi varnosti morate vedno vnesti #pgv_lang[DBUSER]# in #pgv_lang[DBPASS]#, ko spreminjate katero koli vrednost v nastavitvah.";
$pgv_lang["server_url_note"]	= "To naj bi bil URL do vašega PhpGedView imenika.  To nastavitev spremenite le, če veste kaj delate. PhpGedView je ugotovil da je ta vrednost <b>#GUESS_URL#</b>";

$pgv_lang["DBTYPE"]			= "Tip baze podatkov";
$pgv_lang["DBHOST"]			= "Gostitelj baze podatkov";
$pgv_lang["DBPORT"]			= "Vtič baze podatkov";
$pgv_lang["DBUSER"]			= "Uporabniško ime za bazo podatkov";
$pgv_lang["DBPASS"]			= "Geslo za bazo podatkov";
$pgv_lang["DBNAME"]			= "Ime baze podatkov";
$pgv_lang["upload_path"]		= "Pot za naložitev";
$pgv_lang["gedcom_path"]		= "Pot in ime GEDCOM-a na strežniku";
$pgv_lang["CHARACTER_SET"]		= "Kodiranje znakov";
$pgv_lang["LANGUAGE"]			= "Jezik";
$pgv_lang["ENABLE_MULTI_LANGUAGE"]	= "Dovoli uporabniku, da zamenja jezik";
$pgv_lang["CALENDAR_FORMAT"]		= "Oblika koledarja";
$pgv_lang["DISPLAY_JEWISH_THOUSANDS"]	= "Prikaži hebrejske tisočice";
$pgv_lang["DISPLAY_JEWISH_GERESHAYIM"]		= "Prikaži hebrejski Gershayim";
$pgv_lang["JEWISH_ASHKENAZ_PRONUNCIATION"]	= "Židovska Ashkenaz izgovorjava";
$pgv_lang["USE_RTL_FUNCTIONS"]			= "Uporabi obdelavo RTL";
$pgv_lang["DEFAULT_PEDIGREE_GENERATIONS"]	= "Število rodov";
$pgv_lang["MAX_PEDIGREE_GENERATIONS"]		= "Največje število rodov presnikov";
$pgv_lang["MAX_DESCENDANCY_GENERATIONS"]	= "Največje število rodov potomcev";
$pgv_lang["USE_RIN"]			= "Uporabi število RIN namesto GEDCOM ID";
$pgv_lang["GENERATE_GUID"]		= "Samodejno ustvari globalno unikatne ID-je";
$pgv_lang["PEDIGREE_ROOT_ID"]		= "Privzeta oseba za preglednice";
$pgv_lang["GEDCOM_ID_PREFIX"]		= "Predpona za ID oseb";
$pgv_lang["SOURCE_ID_PREFIX"]		= "Predpona za ID virov";
$pgv_lang["REPO_ID_PREFIX"]		= "Predpona za ID skladišča";
$pgv_lang["PEDIGREE_FULL_DETAILS"]	= "Pokaži podrobnosti rojstva in smrt na preglednicah";
$pgv_lang["PEDIGREE_SHOW_GENDER"]	= "Pokaži spol na preglednicah";
$pgv_lang["PEDIGREE_LAYOUT"]		= "Privzeta postavitev preglednice za rodovnik";
$pgv_lang["SHOW_EMPTY_BOXES"]		= "Pokaži prazne okvirčke v rodovniku";
$pgv_lang["ZOOM_BOXES"]			= "Približaj okvirčke na preglednicah";
$pgv_lang["LINK_ICONS"]			= "PopUp povezave na preglednicah";
$pgv_lang["ABBREVIATE_CHART_LABELS"]	= "Okrajšaj oznake na preglednicah";
$pgv_lang["SHOW_AGE_DIFF"]			= "Pokaži razlike datumov";
$pgv_lang["SHOW_PARENTS_AGE"]			= "Pokaži starost staršev poleg rojstnega datuma otroka";
$pgv_lang["SHOW_RELATIVES_EVENTS"]      = "Pokaži dogodke bližnjih sorodnikov za strani osebe";
$pgv_lang["EXPAND_RELATIVES_EVENTS"]      = "Samodejno razširi seznam dogodkov bližnjih sorodnikov";
$pgv_lang["EXPAND_SOURCES"]      	  = "Samodejno razširi vire";
$pgv_lang["EXPAND_NOTES"]      		  = "Samodejno razširi zapiske";
$pgv_lang["SHOW_LEVEL2_NOTES"]      	  = "Pokaži vse zapiske in vire v zavihku Zapiski in viri";
$pgv_lang["HIDE_LIVE_PEOPLE"]		  = "Vključi zasebnost";
$pgv_lang["REQUIRE_AUTHENTICATION"]	  = "Zahteva se prijava gostov";
$pgv_lang["WELCOME_TEXT_AUTH_MODE"]	  = "Pozdravno besedilo na prijavni strani";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT0"]	= "Ni prednastavljenega besedila";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT1"]	= "Prednastavljeno besedilo, ki trdi, da morajo vsi uporabniki zahtevati uporabniki račun";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT2"]	= "Prednastavljeno besedilo, ki trdi, da bo upravitelj odločil o vsaki zahtevi za uporabniški račun.";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT3"]	= "Prednastavljeno besedilo, ki trdi, da lahko le družinski člani zaprosijo za uporabnški račun.";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_OPT4"]	= "Uporabi uporabniško definirano pozdravno besedilo v spodnjem okvirčku";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST"]	= "Uporabniško pozdravno besedilo";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST_HEAD"] = "Standardna glava za uporabniško definirano pozdravno besedilo";
$pgv_lang["SHOW_REGISTER_CAUTION"]		= "Pokaži Sporazum od dovoljeni rabi na strani  «Zahteva nov uporabniški račun»";
$pgv_lang["CHECK_CHILD_DATES"]		= "Preveri datume otrok";
$pgv_lang["MAX_ALIVE_AGE"]		= "Starost pri kateri lahko predpostavimo, da je oseba mrtva";
$pgv_lang["SHOW_GEDCOM_RECORD"]		= "Dovoli uporabnikov vpogled v osnovni GEDCOM zapis";
$pgv_lang["ALLOW_EDIT_GEDCOM"]		= "Omogoči spletno urejanje";
$pgv_lang["EDIT_AUTOCLOSE"]		= "Samodejno zapri okno urejanja";
$pgv_lang["POSTAL_CODE"]  		= "Mesto poštne številke";
$pgv_lang["SUBLIST_TRIGGER_I"]		= "Največje število imen";
$pgv_lang["SUBLIST_TRIGGER_F"]		= "Največje število priimkov";
$pgv_lang["SURNAME_LIST_STYLE"]		= "Stil seznama priimkov";
$pgv_lang["SHOW_LAST_CHANGE"]		= "Pokaži datume zadnjih spremembe GEDCOM zapisov v seznamu";
$pgv_lang["SHOW_EST_LIST_DATES"]	= "Pokaži ocenjene datume za rojstva in smrti";
$pgv_lang["SHOW_PEDIGREE_PLACES"]	= "Postavi nivoje za prikaz v okvirčke oseb";
$pgv_lang["MULTI_MEDIA"]		= "Vključi večpredstavne zmožnosti";
$pgv_lang["MEDIA_EXTERNAL"]		= "Ohrani povezave";
$pgv_lang["MEDIA_DIRECTORY"]		= "Imeni multimedijev";
$pgv_lang["MEDIA_DIRECTORY_LEVELS"]	= "Število nivojev imenikov, ki naj se ohranijo";
$pgv_lang["USE_THUMBS_MAIN"]		= "Uporabi sličice";
$pgv_lang["SHOW_MEDIA_FILENAME"]		= "Pokaži imena datotek v pregedovalniku medijev";
$pgv_lang["SHOW_MEDIA_DOWNLOAD"]		= "Pokaži povezavo prenosa v pregedovalniku medijev";
$pgv_lang["ENABLE_CLIPPINGS_CART"]	= "Vključi košarico za izreze";
$pgv_lang["HIDE_GEDCOM_ERRORS"]		= "Skrij GEDCOM napake";
$pgv_lang["WORD_WRAPPED_NOTES"]		= "Dodaj presledke na mestih, kjer so zapiski prelomljeni";
$pgv_lang["DAYS_TO_SHOW_LIMIT"]		= "Omejitev dni sklopa prihajajočih dogodkov";
$pgv_lang["COMMON_NAMES_THRESHOLD"]	= "Najmanjše št. priimkov da je to \"Pogost priimek\"";
$pgv_lang["COMMON_NAMES_ADD"]		= "Priimki, ki naj se dodajo pogostim priimkom (ločeno z vejico)";
$pgv_lang["COMMON_NAMES_REMOVE"]	= "Priimki, ki se naj odstranijo iz pogostih priimkov (ločeno z vejico)";
$pgv_lang["HOME_SITE_URL"]		= "Glavni URL spletne strani";
$pgv_lang["HOME_SITE_TEXT"]		= "Besedilo glavne spletne strani";
$pgv_lang["CONTACT_EMAIL"]		= "Kontakt za rodoslovje";
$pgv_lang["CONTACT_METHOD"]		= "Način kontakta";
$pgv_lang["PHPGEDVIEW_EMAIL"]		= "PhpGedView naslov za odgovor";
$pgv_lang["WEBMASTER_EMAIL"]		= "Kontakt za podporo";
$pgv_lang["SUPPORT_METHOD"]		= "Način kontakta";
$pgv_lang["SHOW_FACT_ICONS"] 		= "Pokaži ikono dejstva";
$pgv_lang["FAVICON"]			= "Ikona priljubljenih";
$pgv_lang["THEME_DIR"]			= "Imenik tem";
$pgv_lang["TIME_LIMIT"]			= "Omejitev PHP časa";
$pgv_lang["LOGIN_URL"]			= "Prijavni URL";
$pgv_lang["SHOW_STATS"]			= "Pokaži statistiko časa obdelave";
$pgv_lang["SHOW_COUNTER"]		= "Pokaži števce zadetkov";
$pgv_lang["gedcom_title"]			= "#pgv_lang[ged_title]#";
$pgv_lang["LOGFILE_CREATE"]		= "Arhiviraj datoteke dnevnikov";
$pgv_lang["ALLOW_THEME_DROPDOWN"]	= "Pokaži padajoči izbirnik za teme";
$pgv_lang["MAX_VIEW_RATE"]		= "Največja hitrost pregleda strani";
$pgv_lang["META_AUTHOR"]		= "META oznaka avtorja";
$pgv_lang["META_AUTHOR_descr"]		= "Pusti to polje prazno za uporabo polnega imena #pgv_lang[CONTACT_EMAIL]#.";
$pgv_lang["META_PUBLISHER"]		= "META oznaka izdajatelja";
$pgv_lang["META_PUBLISHER_descr"]	= "Pusti to polje prazno za uporabo polnega imena #pgv_lang[CONTACT_EMAIL]#.";
$pgv_lang["META_COPYRIGHT"]		= "META oznaka pravice kopiranja";
$pgv_lang["META_COPYRIGHT_descr"]	= "Pusti to polje prazno za uporabo polnega imena #pgv_lang[CONTACT_EMAIL]#.";
$pgv_lang["META_DESCRIPTION"]		= "META oznaka opisa";
$pgv_lang["META_DESCRIPTION_descr"]	= "Pusti to polje prazno za uporabo naslova trenutno aktivne baze podatkov.";
$pgv_lang["META_PAGE_TOPIC"]		= "META oznaka zvrsti strani";
$pgv_lang["META_PAGE_TOPIC_descr"]	= "Pusti to polje prazno za uporabo naslova trenutno aktivne baze podatkov.";
$pgv_lang["META_AUDIENCE"]		= "META oznaka občestva";
$pgv_lang["META_PAGE_TYPE"]		= "META oznaka tipa strani";
$pgv_lang["META_ROBOTS"]		= "META oznaka za robote";
$pgv_lang["META_REVISIT"]		= "Kako pogosto naj spletni pajki preverijo META oznaka";
$pgv_lang["META_KEYWORDS"]		= "META oznaka ključnih besed";
$pgv_lang["META_SURNAME_KEYWORDS"]		= "Dodaj pogoste priimke v META polje ključnih besed";
$pgv_lang["META_TITLE"]				= "Dodaj k TITLE oznaki";

$pgv_lang["ENABLE_RSS"]				= "Vključi RSS";
$pgv_lang["RSS_FORMAT"]				= "RSS oblika";
$pgv_lang["SECURITY_CHECK_GEDCOM_DOWNLOADABLE"] = "Preveri ali je možno prenesti GEDCOM datoteke";
$pgv_lang["gedcom_download_secure"]	= "#GEDCOM# ni mogoče prenesti.";

$pgv_lang["welcome_new2"]			= "<br /><br />Ker vidite to stran to pomeni, da sete uspešno namestili PhpGedView na vaš strežnik in da lahko začnete z nastavljanjem po vaših zahtevah.<br />";
$pgv_lang["return_editconfig"]		= "Na to nastavitev se lahko vedno vrnete s postavitvijo vašega brskalnika na <i>editconfig.php</i> ali s klikom na povezavo <b>Nastavitve</b> na strani <b>PhpGedView upravljanja</b><br />";
$pgv_lang["return_editconfig_gedcom"]	= "Na to nastavitev se lahko vedno vrnete s postavitvijo vašega brskalnika na <b>Uredi</b> v tabeli <b>#pgv_lang[current_gedcoms]#</b> na strani <b>#pgv_lang[gedcom_adm_head]#</b> ali s postavitvijo vašega brskalnika na <i>editconfig_gedcom.php</i>.<br />";
$pgv_lang["save_config"] 		= "Shrani nastavitve";
$pgv_lang["download_gedconf"]		= "Prenesi GEDCOM nastavitve.";
$pgv_lang["not_writable"]		= "Zaznali smo, da vaša datoteka nastavitev ni pisljiva s PHP-jem.  Lahko pa uporabite gumb <b>#pgv_lang[download_file]#</b> za shranitev vaših nastavitev v datoteko, ki jo lahko naložite ročno.";
$pgv_lang["upload_to_index"]		= "Naloži datoteko v imenik index: ";
$pgv_lang["import_sql"]			= "SQL datotek so bile najdene v imeniku index. Ker verjetno izvirajo iz orodja za migracijo, imate moznost uvoza podatkov v vaši bazo podatkov. Ali želite poskusiti uvoziti te datoteke v bazo podatkov? Vsi obstoječi podatki, ki se naveujejo na uporabnike bodo izgubljeni(uporabniki, novice, priljubljene, izgled sklopov in sporočila).<br /><br />Če boste izbrali nadaljevanje, bo PhpGedView poskusil uvoziti podatke. Če to ne bo uspelo, boste bili vprašani za izdelavo računa upravitelja.<br />";

//-- edit privacy messages
$pgv_lang["edit_privacy"]			= "Uredi zasebnost";
$pgv_lang["edit_privacy_title"]			= "Uredi GEDCOM nastavitve zasebnosti";
$pgv_lang["save_changed_settings"]		= "Shrani spremembe";
$pgv_lang["add_new_pp_setting"]			= "Dodaj nove nastavive zasebnosti po ID";
$pgv_lang["add_new_up_setting"]			= "Dodaj nove nastavite za zasebnost uporabnikov";
$pgv_lang["add_new_gf_setting"]			= "Dodaj nove nastavite za Celotna zasebnost dejstev";
$pgv_lang["add_new_pf_setting"]			= "Dodaj nove nastavitve za Zasebnost dejstev po ID";
$pgv_lang["file_read_error"]			= "N A P A K A !!! Ne morem prebrati datoteko zasebnosti!";
$pgv_lang["edit_exist_person_privacy_settings"]	= "Uredi obstoječe nastavitve za zasebnost po ID";
$pgv_lang["edit_exist_user_privacy_settings"]	= "Uredi obstoječe nastavitve za uporabniško zasebnost";
$pgv_lang["edit_exist_global_facts_settings"]	= "Uredi obstoječe nastavitve za celotno zasebnost dejstev";
$pgv_lang["edit_exist_person_facts_settings"]	= "Uredi obstoječe nastavitve za zasebnost dejstev po ID";
$pgv_lang["general_privacy"]			= "Splošne nastavitve zasebnosti";
$pgv_lang["person_privacy"]				= "Zasebnost dejstev po ID";
$pgv_lang["user_privacy"]				= "Uporabniške nastavitve zasebnosti";
$pgv_lang["global_facts"]				= "Celotna zasebnost dejstev";
$pgv_lang["person_facts"]				= "Zasebnost dejstev po ID";
$pgv_lang["accessible_by"]			= "Pokaži samo?";
$pgv_lang["hide"]				= "Skrij";
$pgv_lang["show_question"]			= "Pokaži?";
$pgv_lang["user_name"]				= "Uporabniško ime";
$pgv_lang["name_of_fact"]			= "Ime dejstva";
$pgv_lang["choice"]				= "Izbor";
$pgv_lang["fact_show"]				= "Pokaži dejstvo";
$pgv_lang["fact_details"]			= "Pokaži podrobnosti dejstva";
$pgv_lang["privacy_header"]			= "Uredi nastavitve zasebnosti";
$pgv_lang["unable_to_find_privacy_indi"]	= "Ni bilo mogoče najti osebo z ID";
$pgv_lang["save_and_import"]			= "Potem, ko boste shranili to GEDCOM nastavitev, boste morali uvoziti GEDCOM s klikom na gumb <b>Uvozi GEDCOM</b> ali obiskom <b>Upravljaj->Upravljaj GEDCOM-e->Uvoz</b>";
$pgv_lang["help_info"]				= "Pomoč za vsak del lahko dobite s klikom na rdeči &quot;?&quot; poleg označbe vsake celice.";
$pgv_lang["SHOW_LIVING_NAMES"]			= "Pokaži imena živečih";
$pgv_lang["SHOW_RESEARCH_ASSISTANT"]		= "Pokaži raziskovalno pomoč";
$pgv_lang["USE_RELATIONSHIP_PRIVACY"]		= "Uporabi zasebnost sorodstva";
$pgv_lang["MAX_RELATION_PATH_LENGTH"]		= "Najvešja dolžina poti sorodstva";
$pgv_lang["CHECK_MARRIAGE_RELATIONS"]		= "Preveri poročne povezave";
$pgv_lang["SHOW_DEAD_PEOPLE"]			= "Pokaži mrtve osebe";
$pgv_lang["select_privacyfile_button"]		= "Izberi datoteko zasebnosti";
$pgv_lang["PRIVACY_BY_YEAR"]			= "Omeji zasebnost s starostjo dogodka";

// Google Translate
$pgv_lang["google_translate"]			= "Google&reg; prevajanje";
$pgv_lang["commit"]				= "Pošlji";
$pgv_lang["commit_google"]			= "Sprejmi Google&reg; prevod";

//-- language edit utility
$pgv_lang["edit_langdiff"]			= "Uredi in nastavi jezikovne datoteke";
$pgv_lang["bom_check"]				= "Kotrola datoteke na Byte Order Mark (BOM)";
$pgv_lang["lang_debug"]				= "Besedilo pomoči in možnost razhroščevanja";

$pgv_lang["lang_debug_use"]		= "Uporabi besedilo pomoči in možnost razhroščevanja";
$pgv_lang["bom_not_found"]		= "Zaporedje BOM ni bilo najdeno.";
$pgv_lang["bom_found"]			= "zaporedje BOM je bilo najdeno v ";
$pgv_lang["edit_lang_utility"]		= "Pripomoček za urejanje datotek jezika";
$pgv_lang["edit_lang_utility_warning"]	= "Pozor!<br /><br />Če uporabite gumb <b>#pgv_lang[close_window_without_refresh]#</b> ne boste videli sprememb, ki ste jih vnesli, dokler ne osvežite stran. Možno je tudi, da bo datoteka za jezik uničena, če dodate sporočilo, ki se še ne nahaja v datoteki ali če ste popreje urejali sporočilo neposredno.<br /><br />Če ne veste kaj delate, potem ne uporabljajte gumba <b>#pgv_lang[close_window_without_refresh]#</b>.";
$pgv_lang["language_to_edit"]		= "Jezik za urejanje";
$pgv_lang["file_to_edit"]		= "Tip datoteke jezika za urejanje";
$pgv_lang["check"]			= "Preveri";
$pgv_lang["lang_save"]			= "Shrani";
$pgv_lang["contents"]			= "Vsebina";
$pgv_lang["listing"]			= "Seznam";
$pgv_lang["no_content"]			= "Ni vsebine";
$pgv_lang["editlang"]			= "Uredi";
$pgv_lang["savelang"]			= "Shrani";
$pgv_lang["original_message"]		= "Izvorno sporočilo";
$pgv_lang["message_to_edit"]		= "Uredi sporočilo";
$pgv_lang["changed_message"]		= "Spremenjena vsebina";
$pgv_lang["message_empty_warning"]	= "-> Opozorilo!!! To sporočilo ne obstaja v #LANGUAGE_FILE# &lt;-";
$pgv_lang["language_to_export"]		= "Jezik za izvoz";
$pgv_lang["export_lang_utility"]	= "Orodje za izvoz datotek jezika";
$pgv_lang["export"]			= "Izvoz";
$pgv_lang["export_ok"]			= "Sporočila pomoči so bila izvožena";
$pgv_lang["compare_lang_utility"]	= "Pripomoček za primerjavo datotek jezikov";
$pgv_lang["new_language"]		= "Izvorni jezik";
$pgv_lang["old_language"]		= "Sekundarni jezik";
$pgv_lang["compare"]			= "Primerjaj";
$pgv_lang["comparing"]			= "Datoteki jezika, ki sta primerjani";
$pgv_lang["additions"]			= "Dodatki";
$pgv_lang["no_additions"]		= "Ni dodatkov";
$pgv_lang["subtractions"]		= "Ostanki";
$pgv_lang["no_subtractions"]		= "Ni ostankov";
$pgv_lang["config_lang_utility"]	= "Nastavitev podprtih jezikov";
$pgv_lang["active"]			= "Aktiven";
$pgv_lang["edit_settings"]		= "Uredi nastavitve";
$pgv_lang["lang_edit"]			= "Uredi";
$pgv_lang["lang_language"]		= "Jezik";
$pgv_lang["export_filename"]		= "Ime izhodne datoteke:";
$pgv_lang["lang_back"]			= "Vrni se na glavni meni za urejanje in nastavljanje datotek jezika";
$pgv_lang["lang_back_admin"]		= "Vrni se na meni upravitelja";
$pgv_lang["lang_back_manage_gedcoms"]	= "Vrni se na meni upravljanja z GEDCOM-i";
$pgv_lang["lang_name_english"]		= "Angleščina";
$pgv_lang["lang_name_german"]		= "Nemščina";
$pgv_lang["lang_name_italian"]		= "Italjanščina";
$pgv_lang["lang_name_slovenian"]	= "Slovenščina";
$pgv_lang["lang_new_language"]		= "Nov jezik";
$pgv_lang["original_lang_name"]		= "Izvorno ime jezika v #D_LANGNAME#";
$pgv_lang["lang_shortcut"]		= "Okrajšava za datoteke jezika";
$pgv_lang["lang_langcode"]		= "Kode zaznave jezika";
$pgv_lang["lang_filenames"]		= "Datoteke jezika";
$pgv_lang["flagsfile"]			= "Datoteka zastave";
$pgv_lang["text_direction"]		= "Smer besedila";
$pgv_lang["date_format"]		= "Zapis datuma";
$pgv_lang["time_format"]		= "Zapis ure";
$pgv_lang["week_start"]			= "Prvi dan v tednu";
$pgv_lang["name_reverse"]		= "Priimek pred imenom";
$pgv_lang["ltr"]			= "Od leve proti desni";
$pgv_lang["rtl"]			= "Od desne proti levi";
$pgv_lang["file_does_not_exist"]	= "NAPAKA! Datoteka ne obstaja...";
$pgv_lang["optional_file_not_exist"]	= "Ta neobvezna datoteka ne obstaja.";
$pgv_lang["alphabet_upper"]		= "Abeceda v velikih črkah";
$pgv_lang["alphabet_lower"]		= "Abeceda v malih črkah";
$pgv_lang["multi_letter_alphabet"]	= "Več-črkovna abeceda";
$pgv_lang["dictionary_sort"]		= "Uporabi pravila slovarja pri razvrščanju";
$pgv_lang["collation"]			= "Ravrščanje črk v bazi podatkov";
$pgv_lang["lang_config_write_error"]	= "Napaka pri shranjevanju nastavitev jezika v datoteko <b>lang_settings.php</b>.  Preverite dovoljenja in poskusite ponovno.";
$pgv_lang["translation_forum"]		= "Forum prevajalcev PhpGedView na SourceForge";
$pgv_lang["lang_set_file_read_error"]	= "N A P A K A !!! Ni možno prebrati <b>lang_settings.php</b>!";
$pgv_lang["add_new_lang_button"]	= "Dodaj nov jezik";
$pgv_lang["hide_translated"]		= "Skrij že prevedeno";
$pgv_lang["lang_file_write_error"]	= "N A P A K A !!!<br /><br />Ni možno zapisati spremembe v izbrano datoteko jezika.  Preverite dovoljenje za pisanje za datoteko <b>#lang_filename#</b>";
$pgv_lang["no_open"]	= "N A P A K A !!!<br /><br />Ne morem odpreti datoteke <b>#lang_filename#</b>";
$pgv_lang["users_langs"]			= "Jeziki uporabnika";
$pgv_lang["configured_languages"]	= "Uporabljeni jeziki";

//-- User Migration Tool messages
$pgv_lang["um_header"] = "Orodje za prenos podatkov uporabnikov";
$pgv_lang["um_proceed"] = "Izberite možnost ali kliknite na spodnjo povezavo za vrnitev v meni upravitelja<br />";
$pgv_lang["um_creating"] = "Izdelava";
$pgv_lang["um_file_create_fail1"] = "Izdelava nove datoteke ni uspela. Datoteka s tem imenom že obstaja:";
$pgv_lang["um_file_create_fail2"] = "Ne morem izdelati";
$pgv_lang["um_file_create_fail3"] = "Preverite pravice za dostov v tem imeniku.";
$pgv_lang["um_file_create_succ1"] = "Izdelava nove datoteke je uspela.";
$pgv_lang["um_file_not_created"] = "Datoteka ni bila ustvarjena.";
$pgv_lang["um_nomsg"] = "Nobenih sporočil ni prsotnih na tem sistemu.";
$pgv_lang["um_nofav"] = "Nobenih priljubljenih ni prsotnih na tem sistemu.";
$pgv_lang["um_nonews"] = "Nobenih novic ni prsotnih na tem sistemu.";
$pgv_lang["um_noblocks"] = "Nobenih sklopov ni prsotnih na tem sistemu.";
$pgv_lang["um_index_sql"] = "To orodje bo uvozilo <i>authenticate.php</i> in druge <i>.dat</i> datotek iz imenika index v vašo bazo podatkov.<br />";
$pgv_lang["um_import"] = "Uvoz";
$pgv_lang["um_export"] = "Izvoz";

$pgv_lang["um_imp_users"] = "Uvoz uporabnikov";
$pgv_lang["um_imp_blocks"] = "Uvoz sklopov";
$pgv_lang["um_imp_favorites"] = "Uvoz priljubljenih";
$pgv_lang["um_imp_messages"] = "Uvoz sporočil";
$pgv_lang["um_imp_news"] = "Novice uvoza";
$pgv_lang["um_nousers"] = "Datoteka <i>authenticate.php</i> ni najdena v imeniku index. Migracija je bila prekinjena.";
$pgv_lang["um_imp_succ"] = "Uvoz je uspel";
$pgv_lang["um_imp_fail"] = "Uvoz ni uspel";
$pgv_lang["um_backup"] = "Rezervna kopija";
$pgv_lang["um_zip_succ"] = "Datoteka ZIP je bila uspešno izdelana.";
$pgv_lang["um_zip_dl"] = "Prenesi ZIP stisnjeno datoteko rezervne kopije ";
$pgv_lang["um_bu_explain"] = "To orodje lahko naredi rezervno kopijo različnih podatkov PhpGedView-a.<br /><br />Potatki, ki jih izberete se združijo v datoteko ZIP, ki jo lahko poberete s klikom na povezavo na dnu strani po tem, ko je se datoteka ZIP uspešno naredi.<br /><br />Datoteka ZIP bo ostala v imeniku Index dokler jo ne boste ročno izbrisali..<br />";
$pgv_lang["um_bu_config"] = "PhpGedView datoteka nastavitev";
$pgv_lang["um_bu_gedcoms"] = "GEDCOM datoteke";
$pgv_lang["um_bu_gedsets"] = "GEDCOM nastavitve, Datoteki nastavitev in zasebnosti";
$pgv_lang["um_bu_logs"] = "GEDCOM števci, Dnevniki iskanja in PhpGedView";
$pgv_lang["um_bu_usinfo"] = "Podatki o uporabnikih, nastavitve sklopov, priljubljene nastavitve, sporočila, novice";
$pgv_lang["um_bu_media"]	= "Datoteke fotografij";
$pgv_lang["um_mk_bu"] = "Izdelaj rezervno kopijo";
$pgv_lang["um_nofiles"] = "Ni datotek za izdelavo rezervne kopije.";
$pgv_lang["um_files_exist"] = "Ena ali več datotek že obstaja. Ali jih želite prepisati?";
$pgv_lang["um_results"]		= "Rezultati";
$pgv_lang["preview_faq_item"] = "Preglej vse FAQ dele";
$pgv_lang["restore_faq_edits"] = "Obnovi možnost urejanja FAQ";
$pgv_lang["add_faq_item"] = "Dodaj FAQ enoto";
$pgv_lang["edit_faq_item"] = "Uredi FAQ enoto";
$pgv_lang["delete_faq_item"] = "Izbriši FAQ delček";
$pgv_lang["moveup_faq_item"] = "Premakni delček FAQ gor";
$pgv_lang["movedown_faq_item"] = "Premakni delček FAQ dol";



// Media items

// editconfig_gedcom.php Option Filter
$pgv_lang["ged_filter_results"] = "Rezultati iskanja";
$pgv_lang["ged_filter_reset"] = "Izbriši iskanje";
$pgv_lang["ged_filter_description"] = "Možnosti besedila iskanja";


?>
