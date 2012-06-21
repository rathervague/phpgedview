<?php
/**
 * Slovenian texts
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
 *
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @translator Leon Kos
 * @version $Id: admin.sl.php 6908 2010-02-03 02:17:33Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["module_admin"]		= "Upravljanje dodatkov";
$pgv_lang["mod_admin_installed"]	= "Nameščeni dodatki";
$pgv_lang["mod_admin_tabs"]		= "Uredi zavihke";
$pgv_lang["mod_admin_menus"]		= "Uredi menije";
$pgv_lang["mod_admin_intro"]		= "Spodaj je seznam vseh dodatkov v tej različici PhpGedView.  Dodatki so nameščeni s postavitvijo v imenik <i>modules</i>.  Tukaj lahko nastavite nivo dostopa za vsak GEDCOM in vsak dodatek.  Če dodatek vključuje zavihke za posamezno stran ali menije jim lahko nastavite še nivo dostopa in vrstni red.";
$pgv_lang["mod_admin_active"]		= "Aktiven";
$pgv_lang["mod_admin_name"]		= "Ime dodatka";
$pgv_lang["mod_admin_description"]	= "Opis";
$pgv_lang["mod_admin_version"]		= "Različica / PGV";
$pgv_lang["mod_admin_hastab"]		= "Zavihek?";
$pgv_lang["mod_admin_hasmenu"]		= "Meni?";
$pgv_lang["mod_admin_access_level"]	= "Nivo dostopa";
$pgv_lang["mod_admin_order"]		= "Vrstni red";
$pgv_lang["mod_admin_config"]		= "Nastavitve dod";
$pgv_lang["mod_admin_settings"]		= "Nastavitve dodatka";
$pgv_lang["ret_module_admin"]		= "Vrni se na stran za upravljane dodatkov";
$pgv_lang["ret_admin"]			= "Vrni se na stran za upravljanje";

$pgv_lang["enter_comment"]		= "Tukaj lahko vstavite vaše komentarje.";
$pgv_lang["upload_a_gedcom"] 		= "Naloži datoteko GEDCOM";
$pgv_lang["start_entering"] 		= "Začni vnašati podatke";
$pgv_lang["add_gedcom_from_path"] 	= "Dodaj GEDCOM z imenika";
$pgv_lang["get_started_instructions"]	= "Izberi eno od teh možnosti za začetek dela v PhpGedView";

$pgv_lang["admin_users_exists"]		= "Obstajajo naslednji upravitelji:";
$pgv_lang["install_step_1"] = "Preveri okolje";
$pgv_lang["install_step_2"] = "Povezava z bazo";
$pgv_lang["install_step_3"] = "Izdelaj tabele";
$pgv_lang["install_step_4"] = "Nastavitve spletne strani";
$pgv_lang["install_step_5"] = "Jeziki";
$pgv_lang["install_step_6"] = "Shrani nastavitve";
$pgv_lang["install_step_7"] = "Dodaj upravitelja";
$pgv_lang["install_wizard"] = "Namestitveni čarovnik";
$pgv_lang["basic_site_config"] = "Osnovne nastavitve";
$pgv_lang["adv_site_config"] = "Napredne nastavitve";
$pgv_lang["config_not_saved"] = "*Vaše nastavitve ne bodo<br />shranjene vse do koraka 6";
$pgv_lang["download_config"] = "Potegni config.php";
$pgv_lang["site_unavailable"] = "Spletna stran je trenutno nedostopna";
$pgv_lang["to_manage_users"] = "Za upravljanje uporabnikov uporabite stran <a href=\"useradmin.php\">Upravljanje uporabnikov</a>.";
$pgv_lang["db_tables_created"] = "Tabele podatkovne baze so bile uspešno izdelane";
$pgv_lang["config_saved"] = "Nastavitve so bile uspešno shranjene";
$pgv_lang["checking_errors"]		= "Preverjanje na možne napake...";
$pgv_lang["checking_php_version"]		= "Preverjanje zahtevane različice PHP:";
$pgv_lang["failed"]		= "Neuspešno";
$pgv_lang["pgv_requires_version"]		= "PhpGedView potrebije PHP različico #PGV_REQUIRED_PHP_VERSION# ali višjo.";
$pgv_lang["using_php_version"]		= "Uporabljate PHP različico #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]		= "Preverjanje minimalnih zahtev za podatkovno bazo:";
$pgv_lang["no_db_extensions"]		= "Nimate nobene podprte razširitve za dostop do podatkovne baze.";
$pgv_lang["db_ext_support"]		= "Imate podporo #DBEXT#";
$pgv_lang["checking_config.php"]		= "Preverjanje config.php:";
$pgv_lang["config.php_missing"]		= "Datoteka config.php ni bila najdena.";
$pgv_lang["config.php_missing_instr"]		= "Ta namestitveni čarovnik ne bo mogel zapisati nastavitve v datoteko config.php.  Lahko pa skopirate datoteko config.dist in jo preimenujete v config.php.  Možno je tudi, da po tem, ko končate s tem čarovnikom, prenesete nastavitve in jih naložite v ciljno datoteko config.php.";
$pgv_lang["config.php_not_writable"]		= "config.php ni dostopen za pisanje.";
$pgv_lang["config.php_not_writable_instr"]		= "Ta namestitveni čarovnik ne bo model zapisati vaše nastavitve v datoteko config.php.  Za datoteko lahko nastavite dovoljenje za pisanje ali pa po tem, ko končate s tem čarovnikom, prenesete  nastavitve in jih naložite v ciljno datoteko config.php.";
$pgv_lang["passed"]		= "Preverjeno";
$pgv_lang["config.php_writable"]		= "config.php je dostopen za pisanje.";
$pgv_lang["checking_warnings"]		= "Preverjanje opozoril...";
$pgv_lang["checking_timelimit"]		= "Preverjanje možnosti za spremembo časovne omejitve:";
$pgv_lang["cannot_change_timelimit"]		= "Sprememba časovne omejitve ni možna.";
$pgv_lang["cannot_change_timelimit_instr"]		= "Ne boste mogli poganjati vseh funkcij v veliki bazi z vekiko osebami.";
$pgv_lang["current_max_timelimit"]		= "Vaša časovna omejitev je";
$pgv_lang["check_memlimit"]		= "Preverjanje zmožnosti za spremembo omejitve spomina:";
$pgv_lang["cannot_change_memlimit"]		= "Sprememba omejitve spomina ni možna.";
$pgv_lang["cannot_change_memlimit_instr"]		= "Ne boste mogli poganjati vseh funkcij v veliki bazi z vekiko osebami.";
$pgv_lang["current_max_memlimit"]		= "Vaša trenutna omejitev spomina je";
$pgv_lang["check_upload"]		= "Preverjanje možnosti za nalaganje datotek:";
$pgv_lang["current_max_upload"]		= "Največja velikost naložene datoteke je:";
$pgv_lang["check_gd"]		= "Preverjanje prisotnosti slikovne knjižnice GD:";
$pgv_lang["cannot_use_gd"]		= "Nimate likovne knjižnice GD.  Samodejna izdelava sličic ne bo možna.";
$pgv_lang["check_sax"]		= "Preverjanje prisotnosti knjižnice SAX XML:";
$pgv_lang["cannot_use_sax"]		= "Nimate knjižnice SAX XML.  Ne boste mogli poganjati poročil in še nekaterih pomožnih funkcij.";
$pgv_lang["check_dom"]		= "Preverjanje prisotnosti knjižnice DOM XML:";
$pgv_lang["cannot_use_dom"]		= "Nimate knjižnice DOM XML.  Ne boste mogli izvažati XML.";
$pgv_lang["check_calendar"]		= "Preverjanje na knjižnico Advanced Calendar:";
$pgv_lang["cannot_use_calendar"]	= "Nimate podpore za napredni koledar. Ne boste mogli uporabiti nekatere napredne možnosti koledarja.";
$pgv_lang["warnings_passed"]		= "Preverjena so vsa opozorila.";
$pgv_lang["warning_instr"]		= "Če katero od teh opozoril ni uspelo boste lahko še vedno uporabljali PhpGedView na tem strežniku. Nekatere funkcionalnosti pa bodo izključene ali pa boste zaznali slabšo odzivnost.";

$pgv_lang["associated_files"]		= "Pridružene datoteke:";
$pgv_lang["remove_all_files"]		= "Odstrani vse nepotrebne datoteke";
$pgv_lang["warn_file_delete"]		= "Datoteka vsebuje pomembne podatke, kot npr. jezikovne nastavitve ali še nerazrešene podatkovne spremembe. Ali res želite datoteko izbrisati?";
$pgv_lang["deleted_files"]          = "Izbrisane datoteke:";
$pgv_lang["index_dir_cleanup_inst"]	= "Datoteko ali podimenik iz imenika Index zbrišete tako, da datoteko ali podimenik potegnete v koš ali izberete njegov  okvirček za preverjanje. Za dokončen izbris označenih datotek kliknite gumb za brisanje.<br /><br />Datoteke z oznako <img src=\"./images/RESN_confidential.gif\" alt=\"\" />so nujne za pravilno delovanje, zato jih ni mogoče odstraniti.<br />Datoteteke z oznako <img src=\"./images/RESN_locked.gif\" alt=\"\" /> vsebujejo pomembne nastavitve ali nerazrešene podatkovne spremembe, zato jih izbrišite, le če to resnično želite.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Počisti imenik Index";
$pgv_lang["clear_cache_succes"]		= "Vmesne datote so bile odstranjene.";
$pgv_lang["clear_cache"]			= "Počisti vmesne datoteke";
$pgv_lang["sanity_err0"]			= "Napake:";
$pgv_lang["sanity_err1"]			= "Imeti morate vsaj #PGV_REQUIRED_PHP_VERSION# ali višjo različico PHP.";
$pgv_lang["sanity_err2"]			= "Datoteka ali imenik <i>#GLOBALS[whichFile]#</i> ne obstaja. Prosim preverite ali datoteka oz. imenik obstaja, da ni bila napačno poimenovana in da je dovoljenje za branje pravilno nastavljeno.";
$pgv_lang["sanity_err3"]			= "Datoteka <i>#GLOBALS[whichFile]#</i> se ni pravilno naložila. Datoteko poskusite ponovno naložiti.";
$pgv_lang["sanity_err4"]			= "Datoteka <i>config.php</i> je pokvarjena.";
$pgv_lang["sanity_err5"]			= "Datoteka <i>config.php</i> ni zapisljiva.";
$pgv_lang["sanity_err6"]			= "Imenik <i>#GLOBALS[INDEX_DIRECTORY]#</i> ni zapisljiv.";
$pgv_lang["sanity_warn0"]			= "Opozorila:";
$pgv_lang["sanity_warn1"]			= "Imenik <i>#GLOBALS[MEDIA_DIRECTORY]#</i> ni zapisljiv. Ne boste mogli naložiti fotografij ali izdelati njihovih sličic.";
$pgv_lang["sanity_warn2"]			= "Imenik <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> ni pisljiv. Ne boste mogli naložiti fotografi in izdelati sličic iz njih.";
$pgv_lang["sanity_warn3"]			= "Slikovna knjižnica GD ne obstaja. PhpGedView bo sicer še deloval, brez knjižnice GD pa ne bo mogoče izvajanje določenih funkcij, kot sta izdelava sličic ali krožni prikaz. Za več informacij poglejte <a href='http://www.php.net/manual/en/ref.image.php'>http://www.php.net/manual/en/ref.image.php</a>.";
$pgv_lang["sanity_warn4"]			= "Knjižnica XML Parser ne obstaja.  PhpGedView bo sicer še deloval, brez knjižnice XML Parser pa ne bo mogoče izvajanje določenih funkcij, kot so izdelava poročil ali spletnih storitev. Za več informacij poglejte <a href='http://www.php.net/manual/en/ref.xml.php'>http://www.php.net/manual/en/ref.xml.php</a>.";
$pgv_lang["sanity_warn5"]			= "Knjižnica DOM XML ne obstaja.  PhpGedView bo sicer še deloval, ne bo pa mogoče izvajanje določenih funkcij, kot so možnosti izvoza Gramps v košarici za izreze, prenos  in spletne storitve. Za več informacij poglejte <a href='http://www.php.net/manual/en/ref.domxml.php'>http://www.php.net/manual/en/ref.domxml.php</a>.";
$pgv_lang["sanity_warn6"]			= "Knjižnica Koledar ne obstaja. PhpGedView bo sicer deloval, ne bo pa mogoče izvajanje določenih funkcij, kot je pretvorba koledarjev v drugačne koledarje, npr. v hebrejskega ali francoskega. Ta knjižnica namreč ni bistvena za delovanje programa PhpGedView. Za več informacij poglejte  It is not essential for running PhpGedView. <a href='http://www.php.net/manual/en/ref.calendar.php'>http://www.php.net/manual/en/ref.calendar.php</a>.";
$pgv_lang["ip_address"]				= "IP naslov";
$pgv_lang["date_time"]				= "Datum in čas";
$pgv_lang["log_message"]			= "Sporočilo dnevnika";
$pgv_lang["searchtype"]				= "Tip iskanja";
$pgv_lang["query"]				= "Poizvedba";
$pgv_lang["user"]				= "Prijavljen uporabnik";
$pgv_lang["editors"]				= "Uredniki";
$pgv_lang["gedcom_admins"]			= "GEDCOM Upravitelji";
$pgv_lang["site_admins"]			= "Upravitelji spletne strani";
$pgv_lang["nobody"]				= "Nihče";
$pgv_lang["thumbnail_deleted"]			= "Sličica je bila uspešno izbrisana.";
$pgv_lang["thumbnail_not_deleted"]		= "Sličice ni bilo mogoče izbrisati.";
$pgv_lang["step2"]				= "Korak 2 od 4:";
$pgv_lang["refresh"]				= "Osveži";
$pgv_lang["move_file_success"]			= "Datoteke fotografij in sličic so bile uspešno premeščene.";
$pgv_lang["media_folder_corrupt"]	= "Imenik fotografij je pokvarjen.";
$pgv_lang["media_file_not_deleted"]	= "Datoteka fotografije ne more biti izbrisana.";
$pgv_lang["gedcom_deleted"] 		= "GEDCOM [#GED#] uspešno izbrisan.";
$pgv_lang["gedadmin"]				= "GEDCOM-ov upravitelj";
$pgv_lang["full_name"]				= "Polno ime";
$pgv_lang["error_header"]			= "Datoteka GEDCOM, <b>#GEDCOM#</b>, ne obstaja na podanem mestu.";
$pgv_lang["confirm_delete_file"]	= "Ali res želite izbrisati to datoteko?";
$pgv_lang["confirm_folder_delete"] = "Ali res želite izbrisati ta imenik?";
$pgv_lang["confirm_remove_links"]	= "Ali res želite odstraniti vse povezave s tem medijem?";
$pgv_lang["PRIV_PUBLIC"]			= "Pokaži vsem";
$pgv_lang["PRIV_USER"]				= "Pokaži samo prijavljenim uporabnikom";
$pgv_lang["PRIV_NONE"]				= "Pokaži samo uporabnikom z možnostjo upravljanja.";
$pgv_lang["PRIV_HIDE"]				= "Skrij celo pred uporabniki z možnostjo upravljanja.";
$pgv_lang["manage_gedcoms"] 		= "Upravljaj GEDCOM-e in nastavi zasebnost";
$pgv_lang["keep_media"]				= "Ohrani povezave s fotografijami.";
$pgv_lang["current_links"]			= "Povezave";
$pgv_lang["add_more_links"]			= "Dodaj povezave";
$pgv_lang["enter_pid_or_name"]		= "Vstavi ID osebe ali ime";
$pgv_lang["set_links"]				= "Nastavi povezave";
$pgv_lang["add_or_remove_links"]	= "Upravljaj povezave";

$pgv_lang["keep"]					= "Ohrani";
$pgv_lang["unlink"]					= "Razkleni";
$pgv_lang["nav"]					= "Pregledovalnik";
$pgv_lang["fam_nav"]				= "Družinski pregledovalnik";
$pgv_lang["remove"]					= "Odstrani";
$pgv_lang["keep_link"]				= "Ohrani povezavo na seznamu";
$pgv_lang["remove_link"]			= "Odstrani povezavo s seznama";
$pgv_lang["open_nav"]				= "Odpri družinski pregledovalnik";
$pgv_lang["link_exists"]			= "Ta povezava že obstaja";
$pgv_lang["id_not_valid"]			= "Nepravilni ID osebe, družine ali vira";
$pgv_lang["add_fam_other_links"]	= "Dodaj družino in povezave iskanja";
$pgv_lang["search_add_links"]		= "Išči osebe za vstavitev v seznam povezav.";
$pgv_lang["enter_name"]				= "Vnesi ime";
$pgv_lang["add_indi_to_link_list"]	= "Klikni na ime za vstavitev osebe v seznam povezav.";
$pgv_lang["click_choose_head"]		= "Klikni #GLOBALS[tempStringHead]# za izbor osebe kot glave družine.";
$pgv_lang["click_choose_head_text"]	= "Klikni za izbor osebe kot glave družine.";
$pgv_lang["head"]					= "Glava";
$pgv_lang["id_empty"]				= "Ob dodajanju polje ID osebe ne sme biti prazno.";
$pgv_lang["link_deleted"]			= "Povezava na #GLOBALS[remLinkId]# izbrisana";
$pgv_lang["link_added"]				= "Dodana povezana na #GLOBALS[addLinkId]#";
$pgv_lang["no_update_CHANs"]		= "Ne dodaj zapisov CHAN (Last Change)";
$pgv_lang["no_CHANs_update"]		= "Zapisi CHAN (Last Change) niso bili posodobljeni";

$pgv_lang["files_in_backup"]		= "Datoteke, vključene v ta backup.";
$pgv_lang["created_remotelinks"]	= "Tabela <i>Remotelinks</i> uspešno ustvarjena.";
$pgv_lang["created_remotelinks_fail"] 	= "Tabele <i>Remotelinks</i> ni mogoče ustvariti.";
$pgv_lang["created_indis"]			= "Tabela <i>Individuals</i> uspešno ustvarjena.";
$pgv_lang["created_indis_fail"] 	= "Tabele <i>Individuals</i> ni mogoče ustvariti.";
$pgv_lang["created_fams"]			= "Tabela <i>Families</i> uspešno ustvarjena.";
$pgv_lang["created_fams_fail"]		= "Tabele <i>Families</i> ni bilo mogoče ustvariti.";
$pgv_lang["created_sources"]		= "Tabela <i>Sources</i> uspešno ustvarjena.";
$pgv_lang["created_sources_fail"]	= "Tabele <i>Sources</i> ni bilo mogoče ustvariti.";
$pgv_lang["created_other"]			= "Tabela <i>Other</i> uspešno ustvarjena.";
$pgv_lang["created_other_fail"] 	= "Tabele <i>Other</i> ni bilo mogoče ustvariti.";
$pgv_lang["created_places"] 		= "Tabela <i>Places</i> uspešno ustvarjena.";
$pgv_lang["created_places_fail"]	= "Tabele <i>Places</i> ni bilo mogoče ustvariti.";
$pgv_lang["created_placelinks"] 	= "Tabela <i>Place links</i> uspešno ustvarjena.";
$pgv_lang["created_placelinks_fail"]	= "Tabele <i>Place links</i> ni bilo mogoče ustvariti.";
$pgv_lang["created_media_fail"]	= "Tabela <i>Media</i> uspešno ustvarjena.";
$pgv_lang["created_media_mapping_fail"]	= "Tabele <i>Media mappings</i> ni bilo mogoče ustvariti.";
$pgv_lang["no_thumb_dir"]			= " Imenik sličic ne obstaja in ga ni mogoče ustvariti. ";
$pgv_lang["folder_created"]			= "Imenik ustvarjen";
$pgv_lang["folder_no_create"]		= "Imenika ni bilo mogoče ustvariti";
$pgv_lang["security_no_create"]		= "Varnostno opozorilo: Datoteke <b><i>index.php</i></b> ni bilo mogoče ustvariti v ";
$pgv_lang["security_not_exist"]		= "Varnostno opozorilo: Datoteka <b><i>index.php</i></b> ne obstaja v ";
$pgv_lang["label_delete"]           	= "Izbriši";
$pgv_lang["progress_bars_info"]			= "Spodaj je prikazan potek uvoza. Če se časovna omejitev izteče, se bo uvoz sicer ustavil, vi pa boste imeli možnost, da postopek nadaljujete s pritiskom gumba <b>Nadaljuj</b>. Če gumba <b>Nadaljuj</b> ne vidite, vnovič zaženite uvoz z nižjo vrednostjo časovne omejitve.";
$pgv_lang["upload_replacement"]			= "Naloži zamenjavo";
$pgv_lang["about_user"]					= "Najprej morate ustvariti glavnega upraviteljskega uporabnika. Ta bo imel pravico do obnavljanja datoteke nastavitev, do ogleda zasebnih podatkov in ustvarjanja drugih uporabnikov.";
$pgv_lang["access"]						= "Dostop";
$pgv_lang["add_gedcom"] 				= "Dodaj GEDCOM";
$pgv_lang["add_new_gedcom"] 			= "Naredi nov GEDCOM";
$pgv_lang["add_new_language"]			= "Dodaj datoteke in nastavitve za nov jezik";
$pgv_lang["add_user"]					= "Dodaj novega uporabnika";
$pgv_lang["admin_gedcom"]				= "Upravljaj GEDCOM";
$pgv_lang["admin_gedcoms"]				= "Klikni tu za upravljanje GEDCOM-ov";
$pgv_lang["admin_geds"]					= "Upravljanje podatkov in GEDCOM-ov";
$pgv_lang["admin_info"]					= "Informatiivno";
$pgv_lang["admin_site"]					= "Upravljanje spletne strani";
$pgv_lang["admin_user_warnings"]		= "En ali več računov ima opozorila";
$pgv_lang["admin_verification_waiting"] = "Uporabniški računi čakajo na odobritev upravitelja";
$pgv_lang["administration"] 			= "Upravljanje";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]		= "Dovoli izbiro GEDCOM";
$pgv_lang["ALLOW_USER_THEMES"]			= "Dovoli uporabnikom izbiro teme po lastni želji";
$pgv_lang["ansi_encoding_detected"] 	= "V datoteki je bil zaznan zapis v obliki ANSI. PhpGedView najbolje deluje z datotekami, zapisanimi v obliki UTF-8.";
$pgv_lang["ansi_to_utf8"]				= "Pretvori ta GEDCOM-ov zapis v obliki ANSI v obliko UTF-8?";
$pgv_lang["apply_privacy"]				= "Uporabi nastavitve zasebnosti?";
$pgv_lang["back_useradmin"]				= "Nazaj na upravljanje uporabnikov";
$pgv_lang["bytes_read"] 				= "Število prebranih znakov:";
$pgv_lang["can_admin"]					= "Uporabnik lahko upravlja spletne strani";
$pgv_lang["can_edit"]					= "Raven dostopa";
$pgv_lang["change_id"]					= "Spremeni ID-številko osebe v:";
$pgv_lang["choose_priv"]				= "Izberi stopnjo zasebnosti:";
$pgv_lang["cleanup_places"] 				= "Počisti kraje";
$pgv_lang["cleanup_users"]				= "Počisti uporabnike";
$pgv_lang["click_here_to_continue"]		= "Klikni tu za nadaljevanje.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Klikni tu za družinsko drevo.";
$pgv_lang["comment"]							= "Upraviteljevi komentarji o uporabniku";
$pgv_lang["comment_exp"]						= "Upraviteljevo opozorilo za ";
$pgv_lang["config_help"]						= "Pomoč za nastavitve";
$pgv_lang["config_still_writable"]				= "Vaša datoteka <i>config.php</i> je še vedno zapisljiva. To datoteko po nastavitvi strani zaradi varnosti nastavite na status samo za branje.";
$pgv_lang["configuration"]						= "Nastavitve";
$pgv_lang["configure"]							= "Nastavi PhpGedView";
$pgv_lang["configure_head"]						= "Nastavitve PhpGedView";
$pgv_lang["confirm_gedcom_delete"]				= "Ali res želite izbrisati ta GEDCOM";
$pgv_lang["confirm_user_delete"]				= "Ali res želite izbrisati tega uporabnika";
$pgv_lang["create_user"]						= "Ustvari uporabnika";
$pgv_lang["current_users"]						= "Seznam uporabnikov";
$pgv_lang["daily"]								= "Dnevno";
$pgv_lang["dataset_exists"] 					= "V podatkovno bazo je že bil uvožen GEDCOM s takim imenom datoteke.";
$pgv_lang["unsync_warning"] 					= "Ta datoteka GEDCOM <em>ni</em> sinhronizirana s podatkovno bazo. Mogoče ne vsebuje zadnje različice vaših podatkov. Za ponoven uvoz iz podatkovne baze in ne iz te datoteke jo morate prenesti in vnovič naložiti.";
$pgv_lang["date_registered"]					= "Datum registracije";
$pgv_lang["day_before_month"]					= "Dan pred mesecem (DD MM YYYY)";
$pgv_lang["DEFAULT_GEDCOM"]						= "Privzeti GEDCOM";
$pgv_lang["default_user"]						= "Ustvari privzetega upraviteljskega uporabnika.";
$pgv_lang["del_gedrights"]						= "GEDCOM ni več aktiven, odstranite povezave uporabnikov.";
$pgv_lang["del_proceed"]						= "Nadaljuj";
$pgv_lang["del_unvera"]							= "Uporabnika ni potrdil upravitelj.";
$pgv_lang["del_unveru"]							= "Uporabnik se ni potrdil v tednu dni.";
$pgv_lang["do_not_change"]						= "Ne spreminjaj";
$pgv_lang["download_gedcom"]					= "Prenesi GEDCOM";
$pgv_lang["download_here"]						= "Klikni tu za prenos datoteke.";
$pgv_lang["download_note"]						= "OPOZORILO: Obsežne podatkovne baze zahtevajo pred prenosom daljši čas priprave. Če se čas vmesnika PHP izteče pred koncem prenosa, datoteka mogoče ne bo v celoti prenesena.<br /><br />Če se želite prepričati, ali je datoteka pravilno prenesena, preverite, ali se zadnja vrstica datoteke v obliki GEDCOM glasi <b>0&nbsp;TRLR</b> ali pa da se zadnja vrstica v obliki XML glasi <b></database></b>.  Te datoteke so v tekstni obliki in zato lahko uporabite ustrezen urejevalnik, vendar pazite, da  datoteke <u>ne</u> shranite, potem ko ste jo po prenosu ogledali.<br /><br />V splošnem lahko traja prenos tako dolgo, kot je bilo potrebno za uvoz vaše GEDCOM datoteke.";
$pgv_lang["editaccount"]						= "Dovoli uporabniku, da uredi informacije svojega računa";
$pgv_lang["empty_dataset"]						= "Ali želite izbrisati stare podatke in jih nadomestiti z novimi?";
$pgv_lang["empty_lines_detected"]				= "Zaznane so bile prazne vrstice v GEDCOM datoteki. Pri čiščenju so bile odstranjene te prazne vrstice.";
$pgv_lang["enable_disable_lang"]				= "Nastavi podprte jezike";
$pgv_lang["error_ban_server"]       			= "Napačen IP naslov.";
$pgv_lang["error_delete_person"]   				= "Izbrati morate osebo za katero želite izbrisati oddaljeno povezavo.";
$pgv_lang["error_header_write"] 				= "GEDCOM datoteka, <b>#GEDCOM#</b>, ni pisljiva. Preverite atribute in pravice dostopa.";
$pgv_lang["error_remove_site"]					= "Oddaljeni strežnik ne more biti odstranjen.";
$pgv_lang["error_remove_site_linked"]				= "Oddaljeni strežnik ne more biti ostranjen, ker povezave na spisku povezav niso prazne.";
$pgv_lang["error_remote_duplicate"]				= "Oddaljena baza podatkov je že na spisku kot <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]				= "Neuspešna prijava na oddaljeno spletno stran";
$pgv_lang["error_url_blank"]					= "Prodim, da ne puščate naziv ali URL oddaljenega spretnega mesta prazno";
$pgv_lang["error_view_info"]       				= "Izbrati morate osebo za katero želite pogledati informacije.";
$pgv_lang["example_date"]						= "Primer napačnega datuma v vašem GEDCOM-u:";
$pgv_lang["example_place"]						= "primer napačnega kraja v vašem GEDCOM-u:";
$pgv_lang["fbsql"]							= "FrontBase";
$pgv_lang["found_record"]						= "Najden zapis";
$pgv_lang["ged_download"]						= "Prenos";
$pgv_lang["ged_import"] 						= "Uvoz";
$pgv_lang["ged_export"] 						= "Izvoz";
$pgv_lang["ged_check"] 							= "Preveri";
$pgv_lang["gedcom_adm_head"]					= "Upravljanje GEDCOM-ov";
$pgv_lang["gedcom_config_write_error"]			= "N A P A K A !!!<br />Datoteke <i>#GLOBALS[whichFile]#</i> ni možno zapisati.  Preverite dovoljenje za pisanje.";
$pgv_lang["gedcom_downloadable"] 				= "Ta GEDCOM je možno prenesti preko interneta!<br />Poglejte odstavek o varnosti (SECURITY) v <a href=\"readme.txt\"><b>readme.txt</b></a> za rešitev tega problema";
$pgv_lang["gedcom_file"]						= "GEDCOM datoteka:";
$pgv_lang["gedcom_not_imported"]				= "Ta GEDCOM še ni bil uvožen.";
$pgv_lang["ibase"]								= "InterBase";
$pgv_lang["ifx"]								= "Informix";
$pgv_lang["img_admin_settings"] 				= "Urejaj nastavitve upravljanja s slikami";
$pgv_lang["autoContinue"]					= "Samodejno pritisni gumb «Nadaljuj»";
$pgv_lang["import_complete"]					= "Uvoz končan";
$pgv_lang["import_options"]					= "Možnosti uvoza";
$pgv_lang["import_progress"]					= "Napredovanje uvoza...";
$pgv_lang["import_statistics"]					= "Statistika uvoza";
$pgv_lang["import_time_exceeded"]				= "Omejitev časa izvajanja je bila dosežena.  Kliknite gumb Nadaljuj za obnovitev uvoza GEDCOM datoteke.";
$pgv_lang["inc_languages"]					= " Jeziki";
$pgv_lang["INDEX_DIRECTORY"]					= "Imenik Index";
$pgv_lang["invalid_dates"]					= "Zaznani so napačni zapisi datumov. Ob čiščenju bodo ti spremenjeni v obliko DD MMM YYYY (npr. 1 JAN 2009).";
$pgv_lang["BOM_detected"] 					= "Zaznano je zaporedje Byte Order Mark (BOM) na začetku datoteke. Pri čiščenju bo ta posebna koda odstranjena.";
$pgv_lang["invalid_header"] 					= "Zaznane so vrstce pred GEDCOM glavo <b>0&nbsp;HEAD</b>.  Ob čiščenju bodo te vrstice odstranjene.";
$pgv_lang["label_added_servers"]				= "Oddaljeni strežniki";
$pgv_lang["label_banned_servers"]  				= "Zavrni spletna mesta po IP-jih";
$pgv_lang["label_families"]         				= "Družine";
$pgv_lang["label_gedcom_id2"]       				= "ID baze podatkov:";
$pgv_lang["label_individuals"]      				= "Osebe";
$pgv_lang["label_manual_search_engines"]			= "Ročno označi iskalne stroje po IP-jihh";
$pgv_lang["label_new_server"]     				= "Dodaj novo spletno stran";
$pgv_lang["label_password_id"]					= "Geslo";
$pgv_lang["label_server_info"]     				= "Vse osebe in družine, ki so oddaljeno povezane s to spletno stranjo: ";
$pgv_lang["label_server_url"]       				= "Spletni URL/IP";
$pgv_lang["label_username_id"]					= "Uporabniško ime";
$pgv_lang["label_view_local"]       				= "Poglej lokalne informacije o osebi";
$pgv_lang["label_view_remote"]     			 	= "Poglej oddaljene informacije o osebi";
$pgv_lang["LANG_SELECTION"] 					= "Podprti jeziki";
$pgv_lang["LANGUAGE_DEFAULT"]					= "Niste nastavili jezike, ki jih bo ta spletna stran podpirala.<br />PhpGedView bo uporabil privzete ukrepe.";
$pgv_lang["last_login"]							= "Zadnjič prijavljen";
$pgv_lang["lasttab"]							= "Zavihek zadnjega obiska za uporabnika";
$pgv_lang["leave_blank"]						= "Pustite polja za geslo prazno, če želite ohtaniti trenutno geslo.";
$pgv_lang["link_manage_servers"]   				= "Upravljaj spletne strani";
$pgv_lang["logfile_content"]					= "Vsebina dnevnika";
$pgv_lang["macfile_detected"]					= "Zaznana Macintosh datoteka.  Ob čiščenju vaše datoteke, bo pretvorjena v DOS datoteko.";
$pgv_lang["mailto"]								= "Povezava pošlji-k";
$pgv_lang["merge_records"]						= "Združi zapise";
$pgv_lang["message_to_all"]						= "Pošlji sporočilo vsem uporabnikom";
$pgv_lang["messaging"]							= "PhpGedView interno sporočanje";
$pgv_lang["messaging2"]							= "Internno sporočanje z e-pošto";
$pgv_lang["messaging3"]							= "PhpGedView pošilja e-pošto brez hranjenja";
$pgv_lang["month_before_day"]					= "Dni pred dnem (MM DD YYYY)";
$pgv_lang["monthly"]							= "Mesečno";
$pgv_lang["msql"]								= "Mini SQL";
$pgv_lang["mssql"]								= "Microsoft SQL server";
$pgv_lang["mysql"]								= "MySQL";
$pgv_lang["never"]								= "Nikoli";
$pgv_lang["no_logs"]							= "Izključi beleženje";
$pgv_lang["no_messaging"]						= "Nobenega načina kontakta";
$pgv_lang["oci8"]								= "Oracle 7+";
$pgv_lang["page_views"]							= "&nbsp;&nbsp;ogledov strani v&nbsp;&nbsp;";
$pgv_lang["performing_validation"]					= "Izvajam preverjanje GEDCOM-a...";
$pgv_lang["pgsql"]							= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] 			= "Napaka!!! Ne morem zapisati PhpGedView datoteko nastavitev.  Preverite datoteko in dovoljenje za pisanje v imenik ter poskusite ponovno.";
$pgv_lang["PGV_MEMORY_LIMIT"]					= "Omejitev pomnilnika";
$pgv_lang["PGV_SESSION_SAVE_PATH"]				= "Pot za shranjevanje sej";
$pgv_lang["PGV_SESSION_TIME"]					= "Časovna omejitev seje";
$pgv_lang["PGV_SIMPLE_MAIL"] 					= "Uporabite enostavne poštne glavi in zunanjo pošto";
$pgv_lang["PGV_SMTP_ACTIVE"] 					= "Uporabi SMTP za pošiljanje zunanje pošte";
$pgv_lang["PGV_SMTP_HOST"] 						= "Ime odhodnega (SMTP) strežnika";
$pgv_lang["PGV_SMTP_HELO"] 						= "Ime domene za pošiljanje";
$pgv_lang["PGV_SMTP_PORT"] 						= "SMTP Vrata";
$pgv_lang["PGV_SMTP_AUTH"] 						= "Uporabi ime in geslo";
$pgv_lang["PGV_SMTP_AUTH_USER"] 				= "Uporabniško ime";
$pgv_lang["PGV_SMTP_AUTH_PASS"] 				= "Geslo";
$pgv_lang["PGV_SMTP_SSL"]					= "SSL Prijava";
$pgv_lang["PGV_SMTP_FROM_NAME"]					= "Ime pošiljatelja";
$pgv_lang["PGV_STORE_MESSAGES"]					= "Dovoli, da se sporočila shranijo na spletno stran";
$pgv_lang["phpinfo"]							= "Informacije o PHP";
$pgv_lang["place_cleanup_detected"] 					= "Zaznane napake kodiranja.  Te napake se mora odpraviti";
$pgv_lang["please_be_patient"]						= "Prosim počakaje";
$pgv_lang["privileges"]							= "Privilegiji";
$pgv_lang["reading_file"]						= "Branje datoteke GEDCOM";
$pgv_lang["readme_documentation"]					= "Besedilo README";
$pgv_lang["remove_ip"] 							= "Odstrani IP";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"] 				= "Upravitelj mora odobriti nove prijave uporabnikov.";
$pgv_lang["review_readme"]						= "Preberite datoteko <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> preden nastavite PhpGedView.<br /><br />";
$pgv_lang["seconds"]							= "&nbsp;&nbsp;sekund";
$pgv_lang["select_an_option"]						= "Izberi spodnje možnosti:";
$pgv_lang["SERVER_URL"]							= "PhpGedView URL";
$pgv_lang["show_phpinfo"]						= "Pokaži informacije o PHP";
$pgv_lang["siteadmin"]							= "Upravitel spletne strani";
$pgv_lang["sqlite"]							= "SQLite";
$pgv_lang["sybase"]							= "Sybase";
$pgv_lang["sync_gedcom"]						= "Sinhroniziraj uporabniške nastavitve z GEDCOM podatki";
$pgv_lang["system_time"]						= "Trenutna ura strežnika:";
$pgv_lang["user_time"]							= "Trenutna ura uporabnika:";
$pgv_lang["TBLPREFIX"]							= "Predpona tabel v bazi podatkov";
$pgv_lang["themecustomization"]						= "Prireditev teme";
$pgv_lang["time_limit"]							= "Časovna omejitev:";
$pgv_lang["title_manage_servers"]   					= "Upravljaj spletne strani";
$pgv_lang["title_view_conns"]       					= "Poglej povezave";
$pgv_lang["translator_tools"]						= "Orodja prevajalca";
$pgv_lang["update_myaccount"]						= "Posodobi moj račun";
$pgv_lang["update_user"]						= "Posodobi račun";
$pgv_lang["upload_gedcom"]						= "Naloži GEDCOM";
$pgv_lang["USE_REGISTRATION_MODULE"]					= "Dovoli gostom, da zaprosijo za registracijo računa";
$pgv_lang["user_auto_accept"]						= "Samodejno sprejmi spremembe, ki jih naredi ta uporabnik";
$pgv_lang["user_contact_method"]					= "Zaželjen način kontakta";
$pgv_lang["user_create_error"]						= "Ne morem dodati uporabnika.  Poskusite ponovno.";
$pgv_lang["user_created"]						= "Uporabnik uspešno ustvarjen.";
$pgv_lang["user_default_tab"]						= "Privzeti zavihek za prikaz na strani informacij uporabnika";
$pgv_lang["user_path_length"]						= "Največja dolžina poti zasebnosti";
$pgv_lang["user_relationship_priv"]					= "Omeji dostop na sorodnike";
$pgv_lang["users_admin"]						= "Upraviteljev spletne strani";
$pgv_lang["users_gedadmin"]						= "GEDCOM upravitelji";
$pgv_lang["users_total"]						= "Skupno število uporabnikov";
$pgv_lang["users_unver"]						= "Nepreverjeno s strani uporabnika";
$pgv_lang["users_unver_admin"]						= "Nepreverjeno s strani upravitelja";
$pgv_lang["usr_deleted"]						= "Izbrisan uporabnik: ";
$pgv_lang["usr_idle"]							= "Število mesecev do zadnje prijave v uporabnički račun, da je voden kot neaktiven: ";
$pgv_lang["usr_idle_toolong"]						= "Uporabniški računi, ki so bili predolg neaktivni: ";
$pgv_lang["usr_no_cleanup"]						= "Nič ni najdeno za počistiti";
$pgv_lang["usr_unset_gedcomid"]						= "Odstrani GEDCOM ID za ";
$pgv_lang["usr_unset_rights"]						= "Odstrani GEDCOM pravice za ";
$pgv_lang["usr_unset_rootid"]						= "Odstrani izhodiščni ID za ";
$pgv_lang["valid_gedcom"]						= "Zaznan pravilen GEDCOM. Čiščenje ni potrebno.";
$pgv_lang["validate_gedcom"]						= "Potrdi GEDCOM";
$pgv_lang["verified"]							= "Uporabnik je potrdil sebe";
$pgv_lang["verified_by_admin"]						= "Upravitelj odobril uporabnika";
$pgv_lang["verify_gedcom"]						= "Preveri GEDCOM";
$pgv_lang["verify_upload_instructions"]					= "GEDCOM datoteka z istime imenom že obstaja. Če boste nadaljevali, bo stara GEDCOM datoteka zamenjana z datoteko, ki ste jo naložili in postopek uvoza se bo začel. Če prekinete, bo stari GEDCOM ostal nespremenjen.";
$pgv_lang["view_changelog"]						= "Poglej datoteko changelog.txt";
$pgv_lang["view_logs"]							= "Poglej datoteke dnevnikov";
$pgv_lang["view_readme"]						= "Poglej datoteko readme.txt";
$pgv_lang["visibleonline"]						= "Viden drugim uporabnikom, ko je aktiven na spletni strani";
$pgv_lang["visitor"]							= "Gost";
$pgv_lang["warn_users"]							= "Uporabnikov z opozorilom";
$pgv_lang["weekly"]							= "Tedensko";
$pgv_lang["welcome_new"]						= "Dobrodošli na vašo novo PhpGedView spletno stran.";
$pgv_lang["yearly"]							= "Letno";
$pgv_lang["admin_OK_subject"]						= "Odobritev uporabniškega računa na #SERVER_NAME#";
$pgv_lang["admin_OK_message"]						= "Upravitelj rodovnika na spletni strani #SERVER_NAME# je odobril vaš zahtevek za uporabniški račun. Sedaj se lahko prijavite tako da sledite naslednji povezavi:\r\n\r\n#SERVER_NAME#\r\n";

$pgv_lang["batch_update"]						= "Izdelaj skupke popravkov/ureditev vašega GEDCOM-a";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     = "Gedcom preverjalnik";
$pgv_lang["gedcheck_text"]= "Ta modul preverja format GEDCOM datoteke glede na <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM Specifikacijo</a>.  Preverja tudi pogoste napake v vaših podatkih. Pomnite, da obstaja veliko različic, razširitev in varijacij te specifikacije, zato ne smete biti zaskrbljeni pri vrsticah označenih kot  \"Kritično\".  Razlaga vseh napak po vrstica se najde v specifikaciji, zato popreje preverite tam preden prosite za pomoč.";
$pgv_lang["gedcheck_sync"] = "Popravki v bazi podatkov niso usklajeni z datoteko #GLOBALS[ged]#.  Vsebina datoteke je lahko zastarela.  Lahko jo posodobite z <b><a \"#GLOBALS[ged_link]#\">izvozom</a></b>.";
$pgv_lang["gedcheck_nothing"] = "Na tem nivoju ni napak.";
$pgv_lang["level"]        = "Nivo";			// Levels of checking
$pgv_lang["critical"]     = "Kritično";
$pgv_lang["error"]        = "Napaka";
$pgv_lang["warning"]      = "Opozorilo";
$pgv_lang["info"]         = "Informacije";
$pgv_lang["open_link"]    = "Odpri povezave v";          // Where to open links
$pgv_lang["same_win"]     = "Istem zavihku/oknu";
$pgv_lang["new_win"]      = "Novem zavihku/oknu";
$pgv_lang["context_lines"]= "Vrstic v GEDCOM kontekstu"; // Number of lines either side of error
$pgv_lang["all_rec"]      = "Vse zapise";  		 // What to show
$pgv_lang["err_rec"]      = "Zapisov z napakami";
$pgv_lang["missing"]      = "manjka";			// General error messages
$pgv_lang["multiple"]     = "večkratni";
$pgv_lang["invalid"]      = "napačno";
$pgv_lang["too_many"]     = "preveč";
$pgv_lang["too_few"]      = "premalo";
$pgv_lang["no_link"]      = "se ne povezuje nazaj";
$pgv_lang["data"]         = "podatek";
$pgv_lang["see"]          = "glej";
$pgv_lang["noref"]        = "Nič se ne sklicuje na ta zapis";
$pgv_lang["tag"]          = "oznaka";
$pgv_lang["spacing"]      = "razmik";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Napredno ime dejstev";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Napredno ime dejstev kraja";
$pgv_lang["SURNAME_TRADITION"]		= "Tradicija priimka";
$pgv_lang["tradition_spanish"]		= "Španska";
$pgv_lang["tradition_portuguese"]	= "Portugalska";
$pgv_lang["tradition_icelandic"]	= "Islandska";
$pgv_lang["tradition_paternal"]		= "Očetova";
$pgv_lang["tradition_polish"]		= "Poljska";
$pgv_lang["tradition_none"]		= "Nobena";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]	=	"1 leti";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# letoma";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# leti";
$pgv_lang["elapsedMonth1"]	=	"1 mesecem";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# mesecema";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# meseci";
$pgv_lang["elapsedDay1"]	=	"1 dnevom";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# dnevi";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# dnevi";
$pgv_lang["elapsedHour1"]	=	"1 uro";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# urama";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# urami";
$pgv_lang["elapsedMinute1"]	=	"1 minuto";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# minutami";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# minutami";
$pgv_lang["elapsedAgo"]		=	"pred #pgv_lang[global_string1]#";

?>
