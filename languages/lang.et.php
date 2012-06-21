<?php
/**
 * Estonian texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2006 to 2010  PGV Development Team
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
 * @author Anu Mullari
 * @package PhpGedView
 * @subpackage Languages
 * $Id: lang.et.php 6989 2010-11-09 03:26:25Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["page_x_of_y"]			= "Lk #GLOBALS[currentPage]# / #GLOBALS[lastPage]#";
$pgv_lang["options"]				= "Valikud:";
$pgv_lang["inc_languages"]			= " Keeled";
$pgv_lang["page_size"]			= "Lehekülje suurus";
$pgv_lang["other_searches"]			= "Teised otsingud";
$pgv_lang["basic_search"]			= "otsi";
$pgv_lang["name_search"]			= "Nimi:";
$pgv_lang["birthdate_search"]			= "Sünnikuupäev:";
$pgv_lang["birthplace_search"]			= "Sünnikoht:";
$pgv_lang["deathdate_search"]			= "Surma kuupäev:";
$pgv_lang["deathplace_search"]			= "Surma koht: ";
$pgv_lang["label_location"]         		= "Koht";
$pgv_lang["label_local_id"]         		= "Isiku ID";
$pgv_lang["label_gedcom_id"]        		= "GEDCOM ID";
$pgv_lang["label_gedcom_id2"]      	 	= "GEDCOM ID:";
$pgv_lang["label_username_id"]			= "Kasutajanimi";
$pgv_lang["label_username_id2"]		= "Kasutajanimi: ";
$pgv_lang["label_password_id"]			= "Parool";
$pgv_lang["label_password_id2"]		= "Parool: ";
$pgv_lang["label_delete"]           		= "Kustuta";
$pgv_lang["label_add_server"]       		= "Lisa";
$pgv_lang["label_individuals"]      		= "Isikud";
$pgv_lang["label_families"]         		= "Perekonnad";

$pgv_lang["ex-spouse"] 			= "Eksabikaasa";
$pgv_lang["ex-wife"]				 = "Eksabikaasa";
$pgv_lang["ex-husband"] 			= "Eksabikaasa";
$pgv_lang["noemail"] 			= "E-mailideta aadressid";
$pgv_lang["onlyemail"] 			= "Ainult e-mailidega aadressid";
$pgv_lang["maxviews_exceeded"]		= "Lehekülje vaatamiste määr ületati, proovi hiljem uuesti.";
$pgv_lang["broadcast_not_logged_6mo"]		= "Saada kasutajatele, kes pole 6 kuu jooksul sisse loginud";
$pgv_lang["broadcast_never_logged_in"]		= "Saada kasutajatele, kes pole kunagi sisse loginud";
$pgv_lang["stats_to_show"]			= "Vali selles blokis näidatavad statistikud";
$pgv_lang["stat_avg_age_at_death"]		= "Keskmine vanus";
$pgv_lang["stat_longest_life"]			= "Kõige pikaealisem isik";
$pgv_lang["stat_most_children"]			= "Suurima laste arvuga perekond";
$pgv_lang["stat_average_children"]		= "Keskmine laste arv perekonnas";
$pgv_lang["stat_events"]			= "Sündmusi";
$pgv_lang["stat_media"]			= "Meedia objekte";
$pgv_lang["stat_surnames"]			= "Erinevaid perekonnanimesid";
$pgv_lang["stat_users"]			= "Kasutajaid";
$pgv_lang["no_family_facts"]			= "Selle perekonna kohta pole fakte sisestatud.";

$pgv_lang["sunday_1st"]			= "P";
$pgv_lang["monday_1st"]			= "E";
$pgv_lang["tuesday_1st"]			= "T";
$pgv_lang["wednesday_1st"]			= "K";
$pgv_lang["thursday_1st"]			= "N";
$pgv_lang["friday_1st"]			= "R";
$pgv_lang["saturday_1st"]			= "L";

$pgv_lang["jan_1st"]					= "jaan";
$pgv_lang["feb_1st"]					= "veebr";
$pgv_lang["mar_1st"]					= "märts";
$pgv_lang["apr_1st"]					= "apr";
$pgv_lang["may_1st"]					= "mai";
$pgv_lang["jun_1st"]					= "juuni";
$pgv_lang["jul_1st"]					= "juuli";
$pgv_lang["aug_1st"]					= "aug";
$pgv_lang["sep_1st"]					= "sept";
$pgv_lang["oct_1st"]					= "okt";
$pgv_lang["nov_1st"]					= "nov";
$pgv_lang["dec_1st"]					= "dets";

$pgv_lang["edit_source"]			= "Muuda allikat";
$pgv_lang["source_menu"]			= "Allika valikud";
$pgv_lang["familybook_chart"]			= "Perekond raamatuna";
$pgv_lang["family_of"]			= "Perekond: &nbsp;";
$pgv_lang["descent_steps"]			= "Järeltulijad";

$pgv_lang["user_auto_accept"]			= "Aktsepteeri selle kasutaja muudatusi automaatselt";
$pgv_lang["cancel"]				= "Tühista";

//new stuff
$pgv_lang["change"]				= "Muuda";
$pgv_lang["cancel"]				= "Tühista";
$pgv_lang["change_family_members"]		= "Muuda perekonna liikmeid";
$pgv_lang["delete_family_confirm"]		= "Perekonna kustutamine eemaldab seose perekonnliikmete vahel, kuid perekonnas olevad isikud jätab alles. Kas soovite kindlasti kustutada selle perekonna?";
$pgv_lang["delete_family"]			= "Kustuta perekond";
$pgv_lang["add_favorite"]			= "Lisa uus lemmik";
$pgv_lang["url"]				= "URL";
$pgv_lang["add_fav_enter_note"]		= "Lisa märkus selle lemmiku kohta (pole kohustuslik).";
$pgv_lang["add_fav_or_enter_url"]		= "VÕI<br />\nsisesta URL ja pealkiri";
$pgv_lang["add_fav_enter_id"]			= "Sisesta Isiku, perekonna või allika ID";
$pgv_lang["undo_all_confirm"]			= "Kas soovid kindlasti kõik sellele GEDCOMile tehtud muudatused tühistada?";
$pgv_lang["undo_all"]			= "Tühista kõik muudatused";
$pgv_lang["html_block_name"]			= "HTML";
$pgv_lang["comments"]			= "Märkused";
$pgv_lang["none"]				= "Puudub";
$pgv_lang["child-family"]			= "Vanemad ja õed / vennad";
$pgv_lang["spouse-family"]			= "Abikaasa ja lapsed";
$pgv_lang["direct-ancestors"]			= "Otsesed eelkäijad";
$pgv_lang["ancestors"]			= "Otsesed eelkäijad ja nende perekonnad";
$pgv_lang["descendants"]			= "Järeltulijad";
$pgv_lang["choose_relatives"]			= "Vali sugulased";
$pgv_lang["relatives_report"]			= "Sugulaste raport";
$pgv_lang["total_living"]			= "Kokku elavaid";
$pgv_lang["total_dead"]			= "Kokku surnuid";
$pgv_lang["total_not_born"]			= "Kokku veel sündimata";
$pgv_lang["remove_custom_tags"]		= "Eemalda kohandatud PGV tagid? (näiteks. _PGVU, _THUM)";
$pgv_lang["download_zipped"]			= "Laadi GEDCOM alla ZIP failina?";
$pgv_lang["remember_me"]			= "Mäleta mind sellel arvutil";
$pgv_lang["fams_with_surname"]	= "Perekonnanime #surname# kandvad perekonnad";
$pgv_lang["support_contact"]		= "Tehnilise abi kontakt";
$pgv_lang["genealogy_contact"]		= "Genealoogia kontakt";
$pgv_lang["continue_import"]		= "Jätka importi";
$pgv_lang["importing_places"]		= "Kohtade import";
$pgv_lang["common_upload_errors"]	= "See viga tähendab, et tõenäoliselt ületas üles laaditav fail teenusepakkuja poolt võimaldatud liimiidi.  PHP vaikimisi limiit on 2MB.  Võta ühendust oma teenusepakkuja tehnilise toega, et suurendada seda piiri php.ini failis või laadi see fail üles FTP abil.  Kasuta linki leheküljel <a href=\"uploadgedcom.php?action=add_form\"><b>Lisa GEDCOM</b></a> Ftp abil üleslaaditud GEDCOM-i lisamseks.";
$pgv_lang["total_memory_usage"]	= "Kasutatud kogumälu:";
$pgv_lang["mothers_family_with"]	= "Ema perekond abikaasaga: ";
$pgv_lang["fathers_family_with"]	= "Isa perekond abikaasaga: ";
$pgv_lang["halfsibling"]		= "Poolvend / poolõde";
$pgv_lang["halfbrother"]		= "Poolvend";
$pgv_lang["halfsister"]		= "Poolõde";
$pgv_lang["family_timeline"]		= "Näita perekonna aegrida";
$pgv_lang["children_timeline"]		= "Näita lapsi aegreal";
$pgv_lang["other"]			= "Muud";
$pgv_lang["sort_by_marriage"]		= "Järjesta abiellumise kuupäeva järgi";
$pgv_lang["reorder_families"]		= "Järjesta perekonnad";
$pgv_lang["indis_with_surname"]	= "Perekonnanime #surname# kandvad isikud";
$pgv_lang["first_letter_fname"]		= "Vali täht, millega algavaid perekonnanimesid soovid näha.";
$pgv_lang["import_marr_names"]	= "Impordi nimed peale abiellumist";
$pgv_lang["marr_name_import_instr"]	= "Vajuta allolevat nuppu ainult siis kui soovid, et phpGedView tuletaks GEDCOMis olevatele naistele nimed peale abiellumist. See võimaldab otsida ja loetleda naisi nede abielujärgsete nimedega.  <i>Märkus: Abielujärgseid nimesid näidatakse ainult siis kui see on GEDCOMis seadistatud. <b>Abielujärgste nimede tuletamine on valikuline.</b></i>";
$pgv_lang["calc_marr_names"]		= "Abielujärgsete nimede tuletamine";
$pgv_lang["total_names"]		= "Kokku nimesid";
$pgv_lang["top10_pageviews_nohits"]	= "Ei ole ühtegi vaatamist.";
$pgv_lang["top10_pageviews_msg"]	= "vaatamiste loendurid peavad olema GEDCOMis seadistatud, Sektsioonis Kuva ja paigutus alajaotuses Peida ja näita.";
$pgv_lang["review_changes_descr"]	= "Läbivaatamata muudatuste blokk võimaldab muutmisõigusega kasutajal vaadata muudetud kirjete loendit ja mis tuleb üle vaadata ja kinnitada.  Need muudatused ootavad vastuvõtmist või tühistamist.<br /><br />Kui see blokk on seadistatud, siis kinnitamisõigusega kasutajad saavad kord päevas e-maili, mis teavitab muudatustest.";
$pgv_lang["review_changes_block"]	= "Läbivaatamata muudatused";
$pgv_lang["review_changes_email"]	= "Kas saata välja meeldetuletusi?";
$pgv_lang["review_changes_email_freq"]	= "Meeldetuletuste sagedus (päevades)";
$pgv_lang["review_changes_subject"]	= "PhpGedView - Vaata muudatusi";
$pgv_lang["review_changes_body"]	= "Andmebaasis on tehtud muudatusi.  Need muudtused tulb üle vaadata ja kinnitada enne kui kõik kasutajad neid nägema hakkavad to all users. Kasuta allpool listud linki PhpGedView saidile liikumiseks, sisselogimiseks ja muudatuset ülevaatamiseks.";
$pgv_lang["show_spouses"]		= "Näita abikaasasid";
$pgv_lang["quick_update_title"] 		= "Kiire muutmine";
$pgv_lang["quick_update_instructions"]	= " See leht võimaldab isiku informatsiooni kiiremat muutmist. Sisesta ainult see info, mis on uus või on muutunud võrreldes andmebaasis olevaga.  Peale muudatuste edastamist peab need üle vaatama administraator ja kinnitama, et muudatused oleksid nähtavad kõigile kasutajatele.";
$pgv_lang["update_name"] 		= "Muuda nime";
$pgv_lang["update_fact"] 		= "Muuda fakti";
$pgv_lang["update_fact_restricted"] 	= "Selle fakti muutmine on keelatud:";
$pgv_lang["update_photo"] 		= "Asenda foto";
$pgv_lang["photo_replace"] 		= "Kas soovid asendada vanema foto sellega?";
$pgv_lang["select_fact"] 		= "Vali fakt...";
$pgv_lang["update_address"] 		= "Muuda aadress";
$pgv_lang["add_new_chil"] 		= "Lisa laps";
$pgv_lang["top10_pageviews_descr"]	= "See blokk kuvab 10 tihedamini vaadatud kirjet. See blokk eeldab, et GEDCOM seadistustes on lubatud vaatamiste loendurid.";
$pgv_lang["top10_pageviews"]		= "Kõige enam vaadatud kirjed";
$pgv_lang["top10_pageviews_block"]	= "Kõige enam vaadatud kirjed";
$pgv_lang["user_default_tab"]		= "Isiku informatsioonist vaikimisi näidatav leht";
$pgv_lang["stepfamily"]		= "Poolperekond";
$pgv_lang["stepdad"]			= "Poolisa";
$pgv_lang["stepmom"]		= "Poolema";
$pgv_lang["stepsister"]		= "Poolõde";
$pgv_lang["stepbrother"]		= "Poolvend";
$pgv_lang["max_upload_size"]		= "Maksimaalne üleslaadimise maht: ";
$pgv_lang["edit_fam"]		= "Muuda perekond";
$pgv_lang["fams_charts"]		= "Perekonna valikud";
$pgv_lang["sort_by_birth"]		= "Järjesta sünniaegade järgi";
$pgv_lang["reorder_children"]		= "Muuda laste järjestust";
$pgv_lang["add_from_clipboard"]	= "Lisa lõikelaust: ";
$pgv_lang["record_copied"]		= "Lõikeluda kopeeritud kirje";
$pgv_lang["copy"]			= "Kopeeri";
$pgv_lang["cut"]			= "Lõika";
$pgv_lang["indis_charts"]		= "Isiku valikud";
$pgv_lang["edit_indi"] 		= "Muuda isikut";
$pgv_lang["locked"]			= "Ära muuda";
$pgv_lang["privacy"]			= "Privaatsus";
$pgv_lang["number_sign"]		= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"] 			= "?";
$pgv_lang["qm_ah"]			= "?";
$pgv_lang["page_help"]		= "Spikker";
$pgv_lang["help_for_this_page"] 	= "Selle lehekülje spikker";
$pgv_lang["help_contents"]		= "Spikri sisukord";
$pgv_lang["show_context_help"]	= "Näita spikrit kontekstis";
$pgv_lang["hide_context_help"]		= "Peida konteksti help";
$pgv_lang["sorry"]			= "<b>Vabandust, selle punkti kohta spikker puudub.</b>";
$pgv_lang["help_not_exist"] 		= "<b>Selle lehekülje või punkti kohta spikker puudub.</b>";
$pgv_lang["var_not_exist"]		= "<span style=\"font-weight: bold\">The language variable does not exist. Teata sellest veast.</span>";
$pgv_lang["resolution"] 		= "Ekraani resolutsioon";
$pgv_lang["menu"]			= "Menüü";
$pgv_lang["header"] 			= "Päis";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"] 		= "PhpGedView kasutaja sisselogimine";
$pgv_lang["error_title"]		= "VIGA: Ei saa avada GEDCOM faili";
$pgv_lang["error_header"]		= "GEDCOM fail, <b>#GEDCOM#</b>, ei asu määratud paigas.";
$pgv_lang["error_header_write"] 	= "GEDCOM faili, <b>#GEDCOM#</b>, ei saa kirjutada. Kontrolli faili atrribuute ja juurdepääsuõigusi.";
$pgv_lang["for_support"]		= "Tehnilise abi saamiseks võta ühendust";
$pgv_lang["for_contact"]		= "Genealoogilistes küsimustes võta ühendust";
$pgv_lang["for_all_contact"]		= "Tehnilistes või genealoogilistes küsimustes võta ühendust";
$pgv_lang["build_title"]		= "Indeksfailide koostamine";
$pgv_lang["build_error"]		= "GEDCOM fail on uuendatud.";
$pgv_lang["please_wait"]		= "Oota kuni indeksfailid on uuesti loodud.";
$pgv_lang["choose_gedcom"]		= "Vali GEDCOM andmebaas";
$pgv_lang["username"]		= "Kasutajanimi";
$pgv_lang["invalid_username"]		= "Kasutajanimi sisaldab sobimatuid sümboleid";
$pgv_lang["firstname"]		= "Eesnimi";
$pgv_lang["lastname"]		= "Perekonnanimi";
$pgv_lang["password"]		= "Parool";
$pgv_lang["confirm"]			= "Kinnita parool";
$pgv_lang["user_contact_method"]	= "Eelistatud suhtlusviis";
$pgv_lang["login"]			= "Sisene";
$pgv_lang["login_aut"]		= "Muuda kasutajat";
$pgv_lang["logout"] 			= "Logi välja";
$pgv_lang["admin"]			= "Administreeri";
$pgv_lang["logged_in_as"]		= "Sisse loginud kui ";
$pgv_lang["my_pedigree"]		= "Minu esivanemate puu";
$pgv_lang["my_indi"]			= "Minu isiklik kirje";
$pgv_lang["yes"]			= "Jah";
$pgv_lang["no"] 			= "Ei";
$pgv_lang["add_gedcom"] 		= "Lisa GEDCOM";
$pgv_lang["change_theme"]		= "Muuda kujundust";
$pgv_lang["gedcom_downloadable"] 	= "Seda GEDCOMi saab üle interneti alla laadida!<br />Palun loe failist <a href=\"readme.txt\"><b>readme.txt</b></a> sektsiooni SECURITY selle probleemi lahendamiseks";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]		= "Esivanemate puu";
$pgv_lang["gen_ped_chart"]		= "#PEDIGREE_GENERATIONS# põlvkonna esivanemate puu";
$pgv_lang["generations"]		= "Põlvkondi";
$pgv_lang["view"]			= "Vaata";
$pgv_lang["fam_spouse"] 		= "Perekond abikaasaga";
$pgv_lang["root_person"]		= "Alusta isikust";
$pgv_lang["hide_details"]		= "Peida detailid";
$pgv_lang["show_details"]		= "Näita detaile";
$pgv_lang["person_links"]		= "Viitab selle isiku tabelitele, prekondadele ja lähedastele sugulastele. Kliki seda ikooni, et vaadata seda tabelit sellest isikust alates.";
$pgv_lang["zoom_box"]		= "Suurenda / vähenda.";
$pgv_lang["orientation"]		= "Orientatsioon";
$pgv_lang["portrait"]			= "Püstine";
$pgv_lang["landscape"]		= "Põiki";
$pgv_lang["start_at_parents"]		= "Alusta vanematest";
$pgv_lang["charts"] 			= "Tabelid";
$pgv_lang["lists"]			= "Nimekirjad";
$pgv_lang["welcome_page"]		= "Avalehekülg";
$pgv_lang["max_generation"] 		= "Maksimaalne esivanemate puu põlvkondade arv on #PEDIGREE_GENERATIONS#.";
$pgv_lang["min_generation"] 		= "Minimaalne esivanemate puu põlvkondade arv on 3.";
$pgv_lang["box_width"] 		= "laius";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Ei leia perekonda, mille ID on";
$pgv_lang["unable_to_find_indi"]	= "Ei leia isikut, kelle ID on";
$pgv_lang["unable_to_find_record"]	= "Ei leia kiret, mille ID on";
$pgv_lang["unable_to_find_source"]	= "Ei leia allikat, mille ID on";
$pgv_lang["unable_to_find_repo"]	= "Ei leia hoidlat, mille ID on";
$pgv_lang["repo_name"]		= "Hoidla nimi:";
$pgv_lang["address"]			= "Aadress:";
$pgv_lang["phone"]			= "Telefon:";
$pgv_lang["source_name"]		= "Allika nimi:";
$pgv_lang["title"]			= "Pealkiri";
$pgv_lang["author"] 			= "Autor:";
$pgv_lang["publication"]		= "Avaldatud:";
$pgv_lang["call_number"]		= "Telefoninumber:";
$pgv_lang["living"] 			= "Elus";
$pgv_lang["private"]			= "Privaatne";
$pgv_lang["birth"]			= "Sündinud:";
$pgv_lang["death"]			= "Surnud:";
$pgv_lang["descend_chart"]		= "Järglaste tabel";
$pgv_lang["individual_list"]		= "Isikute nimekiri";
$pgv_lang["family_list"]		= "Perekondade nimekiri";
$pgv_lang["source_list"]		= "Allikate nimekiri";
$pgv_lang["place_list"] 		= "Kohtade hierarhia";
$pgv_lang["place_list_aft"] 		= "Kohtade hierahia: ";
$pgv_lang["media_list"] 		= "Multimeedia nimekiri";
$pgv_lang["search"] 			= "Otsi";
$pgv_lang["clippings_cart"] 		= "Sugupuu väljalõigete korv";
$pgv_lang["print_preview"]		= "Printerisõbralik versioon";
$pgv_lang["cancel_preview"] 		= "Tagasi tavalisele lehele";
$pgv_lang["change_lang"]		= "Muuda keel";
$pgv_lang["print"]			= "Prindi";
$pgv_lang["total_queries"]		= "Kokku andmebaasi päringuid: ";
$pgv_lang["total_privacy_checks"]	= "Kokku privaatsuskontrolle: ";
$pgv_lang["back"]			= "Tagasi";
$pgv_lang["privacy_list_indi_error"]	= "Üks või rohkem isikut on peidetud privaatsusreeglite tõttu.";
$pgv_lang["privacy_list_fam_error"]	 = "Üks või rohkem perekonda on peidetud privaatsusreeglite tõttu.";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]				= "Teised nimed";
$pgv_lang["male"]				= "Mees";
$pgv_lang["female"] 				= "Naine";
$pgv_lang["status"] 				= "Staatus";
$pgv_lang["source"] 				= "Allikas";
$pgv_lang["citation"]				= "Tsitaat:";
$pgv_lang["text"]				= "Allika tekst:";
$pgv_lang["note"]				= "Märkus";
$pgv_lang["NN"] 				= "(teadmata)";
$pgv_lang["PN"] 				= "(teadmata)";
$pgv_lang["unrecognized_code"]		= "Tundmatu GEDCOM kood";
$pgv_lang["unrecognized_code_msg"]		= "See on viga ja sooviksime selle parandada. Palun teata ka sellest veast";
$pgv_lang["indi_info"]			= "Isiku informatsioon";
$pgv_lang["pedigree_chart"] 			= "Esivanemate puu";
$pgv_lang["individual"]			= "Isik";
$pgv_lang["family"] 				= "Perekond";
$pgv_lang["family_with"]			= "Perekond abikaasaga: ";
$pgv_lang["as_spouse"]			= "Perekond abielus";
$pgv_lang["as_child"]			= "Perekond vanematega";
$pgv_lang["view_gedcom"]			= "Vaata GEDCOMi kirjet";
$pgv_lang["add_to_cart"]			= "Lisa väljalõigete korvi";
$pgv_lang["still_living_error"] 			= "See isik on praegu elus või pole tema sünni- või surmaaega salvestatud. Elavate inimeste kohta on kõik andmed avalikkuse eest peidetud.<br />Täiendava invormatsiooni saamiseks võta ühendust";
$pgv_lang["privacy_error"]			= "Selle isiku detailisem info on privaatne.<br />";
$pgv_lang["more_information"]			= "Täiendava informatsioni saamiseks võtke ühendust";
$pgv_lang["name"]				= "Nimi";
$pgv_lang["given_name"] 			= "Eesnimi:";
$pgv_lang["surname"]			= "Perekonnanimi:";
$pgv_lang["suffix"] 				= "Eesliide:";
$pgv_lang["object_note"]			= "Objekti märkus:";
$pgv_lang["sex"]				= "Sugu";
$pgv_lang["personal_facts"] 			= "Isiku faktid ja detailid";
$pgv_lang["type"]				= "Tüüp";
$pgv_lang["date"]				= "Kuupäev";
$pgv_lang["place_description"]			= "Koht / kirjeldus";
$pgv_lang["parents"]				= "Vanemad:";
$pgv_lang["siblings"]				= "Õde / vend";
$pgv_lang["father"] 				= "Isa";
$pgv_lang["mother"] 				= "Ema";
$pgv_lang["parent"] 				= "Vanem";
$pgv_lang["relatives"]			= "Lähemad sugulased";
$pgv_lang["relatives_events"]			= "Lähemate sugulaste sündmused";
$pgv_lang["child"]				= "Laps";
$pgv_lang["spouse"] 				= "Abikaasa";
$pgv_lang["surnames"]			= "Perekonnanimed";
$pgv_lang["adopted"]				= "Lapsendatud";
$pgv_lang["foster"] 				= "Hooldaja";
$pgv_lang["stillborn"]				= "Surnult sündinud";
$pgv_lang["link_as_child"]			= "Lisa see isik olemasolevasse perekonda lapsena";
$pgv_lang["link_as_wife"]			= "Lisa see isik olemasolevasse perekonda naisena";
$pgv_lang["link_as_husband"]			= "Lisa see isik olemasolevasse perekonda mehena";
$pgv_lang["no_tab1"]				= "Selle isiku kohta pole fakte sisestatud";
$pgv_lang["no_tab2"]				= "Selle isiku kohta pole märkusi sisestatud";
$pgv_lang["no_tab3"]				= "Selle isiku kohta pole allikaviiteid sisestatud";
$pgv_lang["no_tab4"]				= "Selle isiku kohta pole meedia objekte sisestatud";
$pgv_lang["no_tab5"]				= "Selle isikule pole lähemaid sugulasi sisestatud.";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]		= "Perekonna informatsioon";
$pgv_lang["family_group_info"]		= "Info perekonna kohta";
$pgv_lang["husband"]		= "Mees";
$pgv_lang["wife"]			= "Naine";
$pgv_lang["marriage"]		= "Abielu:";
$pgv_lang["media_object"]		= "Multimeedia objekt";
$pgv_lang["children"]			= "Lapsed";
$pgv_lang["no_children"]		= "Lapsi pole sisestatud";
$pgv_lang["childless_family"]		= "Perekonnas polnud lapsi";
$pgv_lang["number_children"]		= "Laste arv: ";
$pgv_lang["parents_timeline"]		= "Näita abielupaari aegreal";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]		= "Seoseid kohaga leitud";
$pgv_lang["top_level"]		= "Kõrgeimale tasemele";
$pgv_lang["form"]			= "Kohad on märatletud kujul: ";
$pgv_lang["default_form"]		= "Linn, Maakond, Osariik, Riik";
$pgv_lang["default_form_info"]		= "(Vaikimisi)";
$pgv_lang["gedcom_form_info"]	= "(GEDCOM)";
$pgv_lang["unknown"]		= "teadmata";
$pgv_lang["individuals"]		= "Isikut";
$pgv_lang["view_records_in_place"]	= "Vaata kõiki selle koha kirjeid";
$pgv_lang["place_list2"] 		= "kohtade nimekiri";
$pgv_lang["show_place_hierarchy"]	= "Näita kohad hierarhias";
$pgv_lang["show_place_list"]		= "Näita nimekirjas kõik kohad";
$pgv_lang["total_unic_places"]		= "Kokku erinevaid kohti";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "Välised objektid";
$pgv_lang["multi_title"]		= "Multimeedia objektide nimeiri";
$pgv_lang["media_found"]		= "Meedia objekti leitud";
$pgv_lang["view_person"]		= "Vaata isikut";
$pgv_lang["view_family"]		= "Vaata perekonda";
$pgv_lang["view_source"]		= "Vaata allikat";
$pgv_lang["view_object"]		= "Vaata objekti";
$pgv_lang["prev"]			= "&lt; Eelmine";
$pgv_lang["next"]			= "Järgmine &gt;";
$pgv_lang["file_not_found"] 		= "Faili ei leitud.";
$pgv_lang["medialist_show"] 		= "Näita";
$pgv_lang["per_page"]		= "media objects per page";
$pgv_lang["delete_directory"]		= "Kustuta kaust";
$pgv_lang["remove_object"]		= "Eemalda objekt";

//-- SEARCH FILE MESSAGES
$pgv_lang["search_gedcom"]		= "Otsi andmebaasidest";
$pgv_lang["enter_terms"]		= "Sisesta otsingusõnad";
$pgv_lang["soundex_search"] 		= "Otsi sõna sellisena nagu tead (Soundex)";
$pgv_lang["sources"]			= "Allikad";
$pgv_lang["firstname_search"]		= "Eesnimi";
$pgv_lang["lastname_search"]		= "Perekonnanimi";
$pgv_lang["search_place"]		= "Koht";
$pgv_lang["search_year"]		= "Aasta";
$pgv_lang["no_results"] 		= "Midagi ei leitud.";
$pgv_lang["invalid_search_input"] 	= "Palun sisesta eesnimi, perekonnanimi või koht lisaks aastale";
$pgv_lang["search_options"]		= "Otsingu valikud";
$pgv_lang["search_geds"]		= "Otsi andmebaasist";
$pgv_lang["search_type"]		= "Otsingu tüüp";
$pgv_lang["search_general"]		= "Otsi";
$pgv_lang["search_soundex"]		= "Soundex otsing";
$pgv_lang["search_inrecs"]		= "Otsi";
$pgv_lang["search_fams"]		= "Perekondi";
$pgv_lang["search_indis"]		= "Isikuid";
$pgv_lang["search_sources"]		= "Allikaid";
$pgv_lang["search_more_chars"]      	= "Sisesta rohkem kui üks sümbol";
$pgv_lang["search_soundextype"]	= "Soundexi tüüp:";
$pgv_lang["search_russell"]		= "Tavaline";
$pgv_lang["search_DM"]		= "Daitch-Mokotoff";
$pgv_lang["search_prtnames"]		= "Isikud'<br />näita nimesid:";
$pgv_lang["search_prthit"]		= "Vaadatud nimed";
$pgv_lang["search_prtall"]		= "Kõik nimed";
$pgv_lang["search_tagfilter"]		= "Filtreeri välja";
$pgv_lang["search_tagfon"]		= "Jäta välja mittegenealoogilist infot";
$pgv_lang["search_tagfoff"]		= "Väljas";
$pgv_lang["associate"]		= "partner";
$pgv_lang["search_asso_label"]		= "Partnerid";
$pgv_lang["search_asso_text"]		= "Näita seotud isikuid/perekondi";
$pgv_lang["results_per_page"]		= "Tulemusi leheküljel";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["sources_found"]		= "Allikat leitud:";
$pgv_lang["titles_found"]		= "Pealkirjad";
$pgv_lang["find_source"]		= "Leia allikas";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]		= "Hoidlate nimekiri";
$pgv_lang["repos_found"]		= "Hoidlat leitud";
$pgv_lang["find_repository"]		= "Leia hoidla";
$pgv_lang["total_repositories"]		= "Kokku hoidlaid";
$pgv_lang["repo_info"]		= "Hoidla informatsioon";
$pgv_lang["delete_repo"]		= "Kustuta hoidla";
$pgv_lang["other_repo_records"]	= "Selle hoidlaga seotud kirjed:";
$pgv_lang["create_repository"]		= "Loo hoidla";
$pgv_lang["new_repo_created"]		= "Uus hoidla loodud";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]		= "Allika informatsioon";
$pgv_lang["other_records"]		= "Selle allikaga seotud kirjed:";
$pgv_lang["people"] 			= "Isikuid";
$pgv_lang["families"]			= "Perekondi";
$pgv_lang["total_sources"]		= "Kokku allikaid";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"] 		= "Kokku perekondi";
$pgv_lang["total_indis"]		= "Kokku isikuid";
$pgv_lang["notes_sources_media"]	= "Märkused, allikad ja meedia";
$pgv_lang["notes"]			= "Märkused";
$pgv_lang["ssourcess"]		= "Allikad";
$pgv_lang["media"]			= "Meedia";
$pgv_lang["name_contains"]		= "Nimi sisaldab:";
$pgv_lang["filter"] 			= "Leia";
$pgv_lang["find_individual"]		= "Leia isiku ID";
$pgv_lang["find_familyid"]		= "Leia perekonna ID";
$pgv_lang["find_sourceid"]		= "Leia allika ID";
$pgv_lang["find_specialchar"]		= "Leia erisümbolid";
$pgv_lang["magnify"]			= "Suurenda";
$pgv_lang["skip_surnames"]		= "Jäta perekonanimede loend vahele";
$pgv_lang["show_surnames"]		= "Näita perekonnanimede loendit";
$pgv_lang["all"]			= "KÕIK";
$pgv_lang["hidden"]			= "Peidetud";
$pgv_lang["confidential"]		= "Konfidentsiaalne";
$pgv_lang["alpha_index"]		= "Tähestikuline indeks";
$pgv_lang["name_list"] 		= "Nimede loend";
$pgv_lang["firstname_alpha_index"] 	= "Eesnimede tähestikuline loend";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]			= "vanus";
$pgv_lang["days"]			= "päevi";
$pgv_lang["months"]			= "kuid";
$pgv_lang["years"]			= "aastaid";
$pgv_lang["day1"]			= "päev";
$pgv_lang["month1"]			= "kuu";
$pgv_lang["year1"]			= "aasta";
$pgv_lang["timeline_title"] 		= "PhpGedView aegrida";
$pgv_lang["timeline_chart"] 		= "Aegrea tabel";
$pgv_lang["remove_person"]		= "eemalda isik";
$pgv_lang["show_age"]		= "Näita vanuse markerit";
$pgv_lang["add_another"]		= "Lisa tabelisse isik:<br />Person ID:";
$pgv_lang["find_id"]			= "Leia ID";
$pgv_lang["show"]			= "Näita";
$pgv_lang["year"]			= "Aasta:";
$pgv_lang["timeline_instructions"]	= "Enamikes uuemates brauserites võid kasutada kastikeste liigutamiseks drag-and-drop meetodit.";
$pgv_lang["zoom_in"]		= "Suurenda";
$pgv_lang["zoom_out"]		= "Vähenda";

//-- MONTH NAMES
$pgv_lang["jan"]					= "jaanuar";
$pgv_lang["feb"]					= "veebruar";
$pgv_lang["mar"]					= "märts";
$pgv_lang["apr"]					= "aprill";
$pgv_lang["may"]					= "mai";
$pgv_lang["jun"]					= "juuni";
$pgv_lang["jul"]					= "juuli";
$pgv_lang["aug"]					= "august";
$pgv_lang["sep"]					= "september";
$pgv_lang["oct"]					= "oktoober";
$pgv_lang["nov"]					= "november";
$pgv_lang["dec"]					= "detsember";
$pgv_lang["abt"]					= "umbes";
$pgv_lang["aft"]					= "peale";
$pgv_lang["and"]					= "ja";
$pgv_lang["bef"]					= "enne";
$pgv_lang["bet"]					= "vahel";
$pgv_lang["cal"]					= "arvutatud";
$pgv_lang["est"]					= "hinnatud";
$pgv_lang["from"]					= "alates";
$pgv_lang["int"]					= "interpreteeritud";
$pgv_lang["to"] 					= "kuni";
$pgv_lang["cir"]					= "circa";
$pgv_lang["apx"]					= "umbes";

//-- Admin File Messages
$pgv_lang["select_an_option"]			= "Tee järgnevad valikud:";
$pgv_lang["readme_documentation"]		= "README dokumentatsioon";
$pgv_lang["view_readme"]			= "Vaata faili readme.txt";
$pgv_lang["configuration"]			= "Konfigureerimine";
$pgv_lang["rebuild_indexes"]			= "Indeksite uuestiloomine";
$pgv_lang["user_admin"] 			= "Kasutajate administreerimine";
$pgv_lang["user_created"]			= "Kasutaja loomine õnnestus.";
$pgv_lang["user_create_error"]			= "Kasutajat ei saa lisada.  Proovi uuesti.";
$pgv_lang["password_mismatch"]		= "Paroolid ei sobi kokku.";
$pgv_lang["enter_username"] 			= "Sisesta kasutajanimi.";
$pgv_lang["enter_fullname"] 			= "Sisesta ees- ja perekonnanimi.";
$pgv_lang["enter_password"] 			= "Sisesta parool.";
$pgv_lang["confirm_password"]			= "Kinnita parool.";
$pgv_lang["update_user"]			= "Uuenda kasutaja konto";
$pgv_lang["update_myaccount"]			= "Uuenda minu konto andmed";
$pgv_lang["save"]				= "Salvesta";
$pgv_lang["delete"] 				= "Kustuta";
$pgv_lang["edit"]				= "Muuda";
$pgv_lang["full_name"]			= "Täisnimi";
$pgv_lang["visibleonline"]			= "Veebilehel viibimine teistele kasutajatele nähtav.";
$pgv_lang["comment"]			= "Administraatori kommentaar kasutaja kohta";
$pgv_lang["comment_exp"]			= "Admini hoiatus kuupäeval";
$pgv_lang["editaccount"]			= "Luba kasutajal muuta oma kasutajainfot";
$pgv_lang["admin_gedcom"]			= "Administreeri GEDCOM.";
$pgv_lang["confirm_user_delete"]		= "Kas soovid kindlasti selle kasutaja kustutada?";
$pgv_lang["create_user"]			= "Loo kasutaja";
$pgv_lang["no_login"]			= "Kasutaja tuvastamine ebaõnnestus.";
$pgv_lang["basic_realm"]			= "PhpGedView autentimissüsteem";
$pgv_lang["basic_auth_failure"]			= "Ligipääsemiseks pead sisestama kehtiva kasutaja ID ja parooli";
$pgv_lang["basic_auth"]			= "Lihtne sisselogimine";
$pgv_lang["no_auth_needed"]			= "Sisselogimine pole nõutud";
$pgv_lang["import_gedcom"]			= "Impordi GEDCOM fail";
$pgv_lang["duplicate_username"] 		= "Korduv kasutajanimi. Sellise kasutajanimega kasutaja on juba olemas.  Vali uus kasutajanimi.";
$pgv_lang["gedcomid"]			= "GEDCOM INDI kirje ID";
$pgv_lang["enter_gedcomid"] 			= "Sisesta GEDCOM ID.";
$pgv_lang["user_info"]			= "Minu kasutajainfo";
$pgv_lang["rootid"] 				= "Esivanemate puu algab";
$pgv_lang["download_gedcom"]			= "Laadi GEDCOM fail alla";
$pgv_lang["upload_gedcom"]			= "Laadi GEDCOM üles";
$pgv_lang["add_new_gedcom"] 		= "Loo uus GEDCOM";
$pgv_lang["gedcom_file"]			= "GEDCOM fail:";
$pgv_lang["enter_filename"] 			= "Pead sisestama GEDCOM faili nime.";
$pgv_lang["file_not_exists"]			= "Ei leia sisestatud faili.";
$pgv_lang["file_not_present"]			= "Fail puudub.";
$pgv_lang["visitor"]				= "Külastaja";
$pgv_lang["user"]				= "Autenditud kasutaja";
$pgv_lang["gedadmin"]			= "GEDCOM administraator";
$pgv_lang["siteadmin"]			= "Veebiadministraator";
$pgv_lang["apply_privacy"]			= "Rakenda privaatsusseaded?";
$pgv_lang["choose_priv"]			= "Vali privaatsuse tase:";
$pgv_lang["user_manual"]			= "PhpGedView kasutusjuhend";
$pgv_lang["upgrade"]				= "Uuenda PhpGedView";
$pgv_lang["view_logs"]			= "Vaata logifaile";
$pgv_lang["validate_gedcom"]			= "Kontrolli GEDCOM";
$pgv_lang["pgv_registry"]			= "Vaata teisi saite, mis kasutavad programmi PhpGedView";
$pgv_lang["add_media_records"]		= "Lisa meedia";
$pgv_lang["manage_media_files"]		= "Halda meedia faile";
$pgv_lang["link_media_records"]		= "Seo meedia";
$pgv_lang["add_media_button"]			= "Lisa Media";

//-- Relationship chart messages
$pgv_lang["relationship_chart"] 	= "Sugulus";
$pgv_lang["person1"]				= "Isik 1";
$pgv_lang["person2"]				= "Isik 2";
$pgv_lang["no_link_found"]			= "Nende kahe isiku vahel (järgmist) seost ei leitud.";
$pgv_lang["sibling"]				= "Õde / vend";
$pgv_lang["follow_spouse"]			= "Kontrolli sugulust abielu kaudu";
$pgv_lang["timeout_error"]			= "Aeg sai täis seost leidmata.";
$pgv_lang["son"]				= "Poeg";
$pgv_lang["daughter"]			= "Tütar";
$pgv_lang["son-in-law"]			= "Väimees";
$pgv_lang["daughter-in-law"]			= "Minia";
$pgv_lang["grandchild"]			= "Lapselaps";
$pgv_lang["grandson"]			= "Lapselaps";
$pgv_lang["granddaughter"]			= "Lapselaps";
$pgv_lang["brother"]				= "Vend";
$pgv_lang["sister"] 				= "Õde";
$pgv_lang["brother-in-law"]			= "Õemees";
$pgv_lang["sister-in-law"]			= "Vennanaine";
$pgv_lang["aunt"]				= "Tädi";
$pgv_lang["uncle"]				= "Onu";
$pgv_lang["firstcousin"]			= "Tädi / onu laps";
$pgv_lang["femalecousin"]			= "Tädi / onu tütar";
$pgv_lang["malecousin"]			= "Tädi / onu poeg";
$pgv_lang["cousin-in-law"]			= "Tädi / onu lapse abikaasa";
$pgv_lang["relationship_to_me"] 		= "Seos minuga";
$pgv_lang["rela_husb"]			= "Seos mehega";
$pgv_lang["rela_wife"]			= "Seos naisega";
$pgv_lang["next_path"]			= "Leia järgmine seos";
$pgv_lang["show_path"]			= "Näita käiku";
$pgv_lang["line_up_generations"]		= "Joonda põlvkonnad";
$pgv_lang["oldest_top"]             		= "Näita vanimat kõige esimesena";

//-- GEDCOM edit utility
$pgv_lang["check_delete"]			= "Kas soovid kindlasti selle GEDCOM fakti kustutada?";
$pgv_lang["access_denied"]			= "<b>Juurdepääs keelatud</b><br />Sul ei ole ligipääsu siia.";
$pgv_lang["gedrec_deleted"] 			= "GEDCOM kirje kustutamine õnnestus.";
$pgv_lang["gedcom_deleted"] 			= "GEDCOM [#GED#] kustutamine õnnestus.";
$pgv_lang["changes_exist"]			= "Seda GEDCOMi on muudetud.";
$pgv_lang["accept_changes"] 			= "Sisesta / Tühista muudatused";
$pgv_lang["show_changes"]			= "Seda kirjet on muudetud.  Muudatuste vaatamiseks vajuta siia.";
$pgv_lang["hide_changes"]			= "Muudatuste peitmiseks vajuta siia.";
$pgv_lang["review_changes"] 			= "Vaata üle GEDCOM muudatused";
$pgv_lang["undo_successful"]			= "Taastamine õnnestus";
$pgv_lang["undo"]				= "Taasta";
$pgv_lang["view_change_diff"]			= "Vaata muudatusi";
$pgv_lang["changes_occurred"]			= "Kirjele on tehtud järgmised muudatused:";
$pgv_lang["find_place"] 			= "Leia koht";
$pgv_lang["refresh"]				= "Värskenda";
$pgv_lang["close_window"]			= "Sulge aken";
$pgv_lang["close_window_without_refresh"] 	= "Sulge aken kuva uundamata";
$pgv_lang["place_contains"] 			= "Koht sisaldab:";
$pgv_lang["add_fact"]			= "Lisa uus fakt";
$pgv_lang["add"]				= "Lisa";
$pgv_lang["custom_event"]			= "Kohandatud sündmus";
$pgv_lang["update_successful"]			= "Uuendamine õnnestus";
$pgv_lang["add_child"]			= "Lisa laps";
$pgv_lang["add_child_to_family"]		= "Lisa laps sellesse perekonda";
$pgv_lang["add_sibling"]			= "Lisa õde või vend";
$pgv_lang["add_son_daughter"]			= "Lisa poeg või tütar";
$pgv_lang["must_provide"]			= "Pead sisestama ";
$pgv_lang["delete_person"]			= "Kustuta see isik";
$pgv_lang["confirm_delete_person"]		= "Kas soovid kindlasti selle isiku GEDCOM failist kustutada?";
$pgv_lang["find_media"] 			= "Leia Meedia";
$pgv_lang["set_link"]				= "Seosta";
$pgv_lang["add_source_lbl"] 			= "Lisa allika viide";
$pgv_lang["add_source"] 			= "Lisa uus allika viide";
$pgv_lang["add_note_lbl"]			= "Lisa märkus";
$pgv_lang["add_note"]			= "Lisa uus märkus";
$pgv_lang["add_media_lbl"]			= "Lisa meedia";
$pgv_lang["add_media"]			= "Lisa uus meedia objekt";
$pgv_lang["delete_source"]			= "Kustuta see allikas";
$pgv_lang["confirm_delete_source"]		= "Kas soovid kindlasti valitud allika kustutada GEDCOM failist?";
$pgv_lang["add_husb"]			= "Lisa mees";
$pgv_lang["add_husb_to_family"] 		= "Lisa mees sellesse perekonda";
$pgv_lang["add_wife"]			= "Lisa naine";
$pgv_lang["add_wife_to_family"] 		= "Lisa naine sellesse prekonda";
$pgv_lang["find_family"]			= "Leia perekond";
$pgv_lang["find_fam_list"]			= "Leia perekonnad";
$pgv_lang["add_new_wife"]			= "Lisa uus naine";
$pgv_lang["add_new_husb"]			= "Lisa uus mees";
$pgv_lang["edit_name"]			= "Muuda nime";
$pgv_lang["delete_name"]			= "Kustuta nimi";
$pgv_lang["add_father"] 			= "Lisa uus isa";
$pgv_lang["add_mother"] 			= "Lisa uus ema";
$pgv_lang["add_obje"]			= "Lisa uus multimeedia objekt";
$pgv_lang["no_changes"] 			= "Ei ole ühtegi muudatust.";
$pgv_lang["accept"] 				= "Nõustu";
$pgv_lang["accept_all"] 			= "Nõustu kõigi muudatustega";
$pgv_lang["accept_successful"]			= "Muudatuste lisamine andmebaasi õnnestus";
$pgv_lang["edit_raw"]			= "Muuda GEDCOM Kirjet";
$pgv_lang["select_date"]			= "Vali kuupäev";
$pgv_lang["create_source"]			= "Loo uus allikas";
$pgv_lang["new_source_created"] 		= "Uue allika loomine õnnestus.";
$pgv_lang["add_name"]			= "Lisa uus nimi";
$pgv_lang["privacy_not_granted"]		= "Sul ei ole juurdepääsu";
$pgv_lang["user_cannot_edit"]			= "Kasutajal ei ole õigust muuta GEDCOMi.";
$pgv_lang["gedcom_editing_disabled"]		= "GEDCOM muutmine on administraatori poolt ära keelatud.";
$pgv_lang["privacy_prevented_editing"]		= "Privaatsusseadete tõttu ei saa sa seda kirjet muuta.";
$pgv_lang["add_asso"]			= "Lisa uus partner";
$pgv_lang["edit_sex"]			= "Muuda sugu";
$pgv_lang["ged_noshow"]			= "Veebi administraator on selle saidi blokeerinud.";

//-- calendar.php messages
$pgv_lang["bdm"]				= "Sünnid, surmad, abielud";
$pgv_lang["on_this_day"]			= "Sellel päeval ...";
$pgv_lang["in_this_month"]			= "Sellel kuul ...";
$pgv_lang["in_this_year"]			= "Sellel aastal ...";
$pgv_lang["year_anniversary"]			= "#year_var#. aastapäev";
$pgv_lang["today"]				= "Täna";
$pgv_lang["day"]				= "Päev:";
$pgv_lang["month"]				= "Kuu:";
$pgv_lang["showcal"]			= "Näita sündmusi:";
$pgv_lang["anniversary_calendar"]		= "Tähtpäevade kalender";
$pgv_lang["sunday"] 				= "Pühapäev";
$pgv_lang["monday"] 			= "Esmaspäev";
$pgv_lang["tuesday"]				= "Teisipäev";
$pgv_lang["wednesday"]			= "Kolmapäev";
$pgv_lang["thursday"]			= "Neljapäev";
$pgv_lang["friday"] 				= "Reede";
$pgv_lang["saturday"]			= "Laupäev";
$pgv_lang["viewday"]			= "Vaata päeva";
$pgv_lang["viewmonth"]			= "Vaata kuud";
$pgv_lang["viewyear"]			= "Vaata aastat";
$pgv_lang["all_people"] 			= "Kõik inimesed";
$pgv_lang["living_only"]			= "Elavad inimesed";
$pgv_lang["recent_events"]			= "Viimased aastad (< 100 a)";
$pgv_lang["day_not_set"]			= "Päeva pole valitud";
$pgv_lang["year_error"] 			= "Vabandame, kuupäevi enne 1970 me ei toeta.";

//-- user self registration module
//$pgv_lang["no_pw_or_account"] 		= "Kui sul ei ole kontot või oled unustanud parooli siis vajuta <b>Login</b> nuppu";
$pgv_lang["lost_password"]			= "Unustasid parooli?";
$pgv_lang["requestpassword"]			= "Küsi uus parool";
$pgv_lang["no_account_yet"] 			= "Pole kasutaja?";
$pgv_lang["requestaccount"] 			= "Registreeru kasutajaks";
$pgv_lang["emailadress"]			= "E-mail";
$pgv_lang["mandatory"] 			= "* tähistatud väljad on kohustuslikud";
$pgv_lang["mail01_line01"]			= "Tere #user_fullname# ...";
$pgv_lang["mail01_line02"]			= "Saime soovi luua veebilehe ( #SERVER_NAME# ) kasutamiseks konto teie meiliaadressiga ( #user_email# ).";
$pgv_lang["mail01_line03"]			= "Informatsiooni saab allpoololeval lingil.";
$pgv_lang["mail01_line04"]			= "Oma konto ja mailiaadressi kinnitamiseks klõpsa järgneval lingil ja sisesta nõutavad andmed.";
$pgv_lang["mail01_line05"]			= "Kui te pole meie kasutajakontot soovinud, siis võite käesoleva sõnumi kustutada.";
$pgv_lang["mail01_line06"]			= "Te ei saa sellelt aadressilt rohkem sõnumeid, sest see kontonõue aegub automaatselt seitsme päeva pärast.";
$pgv_lang["mail01_subject"] 			= "Kasutajaks registreerimine aadressil #SERVER_NAME#";

$pgv_lang["mail02_line01"]			= "Tere administraator ...";
$pgv_lang["hashcode"]			= "Kontrollkood:";
$pgv_lang["thankyou"]			= "Tere #user_fullname# ...<br />Täname, et registreerisid end kasutajaks";
$pgv_lang["pls_note06"] 			= "Saadame kinnituseks e-maili aadressil ( #user_email# ). Pead oma soovi kinnitama järgides saadud e-mailis olevaid juhiseid. Kui sa seitsme päeva jooksul kinnitust ei anna, siis keeldutakse sinu kontost automaatselt ja sa pead uuesti soovi avaldama.<br /><br />Kui oled oma kinnituse andnud, siis peab administraator ikkagi sinu konto kinnitama enne kui saad oma kontot kasutada.<br /><br />Sisselogimiseks pead teadma oma kasutajanime ja parooli.<br /><br />";
$pgv_lang["pls_note06a"] 			= "Saadame kinnituseks e-maili aadressil ( #user_email# ). Pead oma soovi kinnitama järgides saadud e-mailis olevaid juhiseid. Kui sa seitsme päeva jooksul kinnitust ei anna, siis keeldutakse sinu kontost automaatselt ja sa pead uuesti soovi avaldama.<br /><br />Kui oled oma kinnituse andnud, siis võid sisse logida. Sisselogimiseks pead teadma oma kasutajanime ja parooli.<br /><br />";

$pgv_lang["user_verify"]			= "Kasutaja kinnitamine";
$pgv_lang["send"]				= "Saada";

$pgv_lang["pls_note08"] 			= "Kasutaja #user_name# andmed on kontrollitud.";

$pgv_lang["pls_note09"] 			= "Oled kinnitanud oma soovi saada registreeritud kasutajaks.";
$pgv_lang["data_incorrect"] 			= "Andmed ei olnud korrektsed. Palun proovi uuesti.";
$pgv_lang["user_not_found"] 			= "Sisestatud info kontrollimine ebaõnnestus. Palun proovi uuesti või võta ühendust administraatoriga täiendava info saamiseks.";
$pgv_lang["lost_pw_reset"]			= "Unustatud parooli küsimine";
$pgv_lang["enter_email"]			= "Pead sisestama e-maili aadressi.";

$pgv_lang["mail04_line01"]			= "Tere #user_fullname# ...";
$pgv_lang["editowndata"]			= "Minu kasutajakonto";
$pgv_lang["savedata"]			= "Salvesta muudetud andmed";
$pgv_lang["datachanged"]			= "Kasutaja info on muudetud";
$pgv_lang["datachanged_name"]		= "Pead oma uue kasutajanimega uuesti sisselogima.";
$pgv_lang["myuserdata"] 			= "Minu konto";
$pgv_lang["user_theme"] 			= "Minu teema";
$pgv_lang["mgv"]				= "Minu GedView";
$pgv_lang["mygedview"]			= "Minu GedView portaal";
$pgv_lang["passwordlength"] 			= "Parool peab sisaldama vähemalt 6 sümbolit.";

//-- mygedview page
$pgv_lang["welcome"]		= "Tere, ";
$pgv_lang["upcoming_events"]		= "Saabuvad sündmused";
$pgv_lang["living_or_all"]		= "Näita ainult elavate inimeste sündmusi";
$pgv_lang["basic_or_all"]		= "Näita ainult sündinud, surnud ja abiellunud";
$pgv_lang["no_events_living"]		= "Järgneva #pgv_lang[global_num1]# päeva jooksul pole ühtegi sündmust elavate inimeste kohta.";
$pgv_lang["no_events_living1"]		= "Homme pole pole ühtegi sündmust elava inimese kohta.";
$pgv_lang["no_events_all"]		= "Järgneva #pgv_lang[global_num1]# päeva jooksul pole ühtegi sündmust.";
$pgv_lang["no_events_all1"]		= "Homme pole ühtegi sündmust.";
$pgv_lang["no_events_privacy"]		= "Järgneva #pgv_lang[global_num1]# päeva jooksul on sündmusi, kuid sa ei saa neid näha privaatsuspiirangute tõttu.";
$pgv_lang["no_events_privacy1"]	= "Homme on sündmusi, kuid sa ei saa neid näha privaatsuspiirangute tõttu.";
$pgv_lang["more_events_privacy"]	= "<br />Järgmise #pgv_lang[global_num1]# päeva jooksul on veel sündmusi, kuid sa ei saa neid näha privaatsuspiirangute tõttu.";
$pgv_lang["more_events_privacy1"]	= "<br />Homme on veel sündmusi, kuid sa ei saa neid näha privaatsuspiirangute tõttu.";
$pgv_lang["none_today_living"]		= "Täna ei ole sündmusi elavate inimeste kohta.";
$pgv_lang["none_today_all"]		= "Täna ei ole sündmusi.";
$pgv_lang["none_today_privacy"]	= "Täna on sündmusi, kuid sa ei saa neid näha privaatsuspiirangute tõttu.";
$pgv_lang["more_today_privacy"]	= "<br />Täna on veel sündmusi, kuid sa ei saa neid näha privaatsuspiirangute tõttu.";
$pgv_lang["chat"]			= "Vestle";
$pgv_lang["users_logged_in"]		= "Sisseloginud kasutajad";
$pgv_lang["anon_user"]		= "1 anonüümne kasutaja";
$pgv_lang["anon_users"]		= "#pgv_lang[global_num1]# anonüümset kasutajat";
$pgv_lang["login_user"]		= "1 sisseloginud kasutaja";
$pgv_lang["login_users"]		= "#pgv_lang[global_num1]# sisseloginud kasutajat";
$pgv_lang["no_login_users"]		= "Pole sisseloginud ega anonüümseid kasutajaid";
$pgv_lang["message"]		= "Saada sõnum";
$pgv_lang["my_messages"]		= "Minu sõnumid";
$pgv_lang["date_created"]		= "Saatmise kuupäev:";
$pgv_lang["message_from"]		= "E-maili aadress:";
$pgv_lang["message_from_name"]	= "Sinu nimi:";
$pgv_lang["message_to"] 		= "Saaja:";
$pgv_lang["message_subject"]		= "Teema:";
$pgv_lang["message_body"]		= "Sisu:";
$pgv_lang["no_to_user"] 		= "Saaja puudub. Pole võimalik jätkata.";
$pgv_lang["provide_email"]		= "Palun lisa ka oma e-maili aadress, et saaksime sellele sõnumile vastamiseks sinuga ühendust võtta. Sinu meiliaadressi ei kasutata ühelgi muul viisil kui ainult sellele päringule vastamiseks.";
$pgv_lang["reply"]			= "Vasta";
$pgv_lang["message_deleted"]		= "Sõnum kustutatud";
$pgv_lang["message_sent"]		= "Sõnumi saatmine kasutajale #TO_USER# õnnestus.";
$pgv_lang["reset"]			= "Taasta";
$pgv_lang["site_default"]		= "Veebilehe vaikimisi teema";
$pgv_lang["mygedview_desc"] 		= "Minu GedView lehekülg võimaldab seada järjehoidjaid tähtsamatele inimestele, jälgida saabuvaid sündmusi ja teha koostööd teiste PhpGedView kasutajatega.";
$pgv_lang["no_messages"]		= "Sul ei ole lugemata kirju.";
$pgv_lang["clicking_ok"]		= "Kui vajutad OK, siis avaneb teine aken, kus saad ühenduse kasutajaga #user[fullname]#";
$pgv_lang["favorites"]		= "Lemmikud";
$pgv_lang["my_favorites"]		= "Minu lemmikud";
$pgv_lang["no_favorites"]		= "Sul ei ole valitud ühtegi lemmikut.<br /><br />Isiku, perekonna või allika lisamiseks oma lemmikute hulka vajuta linki <b>#pgv_lang[add_favorite]#</b>, mis avab väljad ID numbri sisestamiseks või valimiseks. ID numbri asemel võid sisestada URL-i ja pealkirja.";
$pgv_lang["add_to_my_favorites"]	= "Lisa oma lemmikute hulka";
$pgv_lang["gedcom_favorites"]		= "Selle GEDCOM lemmikud";
$pgv_lang["no_gedcom_favorites"]	= "Praegu ei ole ühtegi lemmikut valitud. Alustuseks saab lemmikuid lisada administraator.";
$pgv_lang["confirm_fav_remove"] 	= "Kas soovid kindlasti selle lemmiku nimekirjast eemaldada?";
$pgv_lang["invalid_email"]		= "Palun sisesta sobiv e-maili aadress.";
$pgv_lang["enter_subject"]		= "Palun sisesta sõnumi teema.";
$pgv_lang["enter_body"] 		= "Palun sisesta sõnumi tekst.";
$pgv_lang["confirm_message_delete"] 	= "Kas soovid kindlasti valitud sõnumid kustutada? Kustutatud sõnumit ei saa taastada.";
$pgv_lang["message_email1"] 		= "Järgnev sõnum saadeti sinu PhpGedView kasutajakontole ";
$pgv_lang["message_email2"] 		= "Saatsid järgmise sõnumi PhpGedView kasutajale:";
$pgv_lang["message_email3"] 		= "Saatsid järgmise sõnumi PhpGedView administraatorile:";
$pgv_lang["viewing_url"]		= "See sõnum saadet järgmiselt veebiaadressilt: ";
$pgv_lang["messaging2_help"]		= "Selle sõnumi saatmisel saad e-maili koopia näidatud meiliaadressil.";
$pgv_lang["random_picture"] 		= "Juhuslik pilt";
$pgv_lang["message_instructions"]	= "<b>Pane tähele:</b> Privaatset informatsiooni elavate inimeste kohta väljastatakse ainult sugulastele ja lähedastele sõpradele. Enne privaatse info saatmist kontrollitakse sinu suhet. Mõnikord võib ka surnud isikute info olla privaatne. Võib-olla ei ole nende inimeste kohta treada, kas nad on surnud või elus ja meil puudub informatsioon selle isiku kohta.<br /><br />Enne küsimuste esitamist kinnita palun, et esitad päringu õige isiku kohta, kontrolli kuupäevi, kohti ja lähedasi sugulsi.Kui esitad andmeid genealoogilise info muutmiseks, siis lisa ka allikad, kust informatsiooni said.<br /><br />";
$pgv_lang["sending_to"] 		= "Sõnum saadeti kasutajale #TO_USER#";
$pgv_lang["preferred_lang"] 		= "Selle kasutaja eelistatud keel on: #USERLANG#";
$pgv_lang["gedcom_created_using"]	= "Selle GEDCOMi koostamiseks kasutati <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]	= "GEDCOM koostati <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_created_on2"] 	= ", koostamise aeg <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]		= "GEDCOM statistika";
$pgv_lang["stat_individuals"]		= "Isikuid";
$pgv_lang["stat_families"]		= "Perekondi";
$pgv_lang["stat_sources"]		= "Allikaid";
$pgv_lang["stat_other"] 		= "Muid";
$pgv_lang["stat_earliest_birth"] 	                = "Kõige varem sündinud";
$pgv_lang["stat_latest_birth"] 		= "Viimasena sündinud";
$pgv_lang["stat_earliest_death"] 	= "Kõige varem surnud";
$pgv_lang["stat_latest_death"] 		= "Viimasena surnud";
$pgv_lang["customize_page"] 		= "Kohanda minu GedView portaali";
$pgv_lang["customize_gedcom_page"]	= "Kohanda selle GEDCOM avalehekülge";
$pgv_lang["upcoming_events_block"]	= "Saabuvad sündmused";
$pgv_lang["upcoming_events_descr"]	= "Saabuvate sündmuste plokk näitab lähemas tulevikus saabuvaid sündmuste aastapäevi. Võid muuta näidatavate detailide hulka ning administraator saab määrata, kui kaugele ette tähtpäevi näidatakse.";
$pgv_lang["todays_events_block"]	= "Sellel päeval";
$pgv_lang["todays_events_descr"]	= "Sellel päeval ... plokk näitab tänaseid tähtpäevi. Võid muuta näidatavate detailide hulka.";
$pgv_lang["logged_in_users_block"]	= "Sisseloginud kasutajad";
$pgv_lang["logged_in_users_descr"]	= "Sisseloginud kasutajate blokk kuvab hetkel sisse loginud kasutajad.";
$pgv_lang["user_messages_block"]	= "Kasutaja sõnumid";
$pgv_lang["user_messages_descr"]	= "Kasutaja sõnumite blokk kuvab sõnumid, mis on saadetud sellele kasutajale.";
$pgv_lang["user_favorites_block"]	= "Kasutaja lemmikud";
$pgv_lang["user_favorites_descr"]	= "Kasutaja lemmikute blokk kuvab kasutajale tema tähtsamad isikud andmebaasis, võimaldades neile kergesti ligi pääseda.";
$pgv_lang["welcome_block"]		= "Kasutaja tervitus";
$pgv_lang["welcome_descr"]		= "Kasutaja tervituse blokk näitab kasutajale jooksvat kuupäeva ja kellaaega, kiirlinke kasutajakonto muutmiseks või oma esivanemate tabeli kuvamiseks või oma GedView portaali muutmiseks.";
$pgv_lang["random_media_block"] 	= "Juhuslik pilt";
$pgv_lang["random_media_descr"] 	= "Juhusliku pildi blokk kuvab kasutajale juhuslikult valitud foto või muu meedia objekti andmebaasist.<br /><br />Administraator saab määrata, kas see blokk näitab isikute või sündmustega seotud meedia objekte.";
$pgv_lang["random_media_persons_or_all"]	= "Näita ainult isikuid, sündmusi või kõiki?";
$pgv_lang["random_media_persons"]	= "Isikuid";
$pgv_lang["random_media_events"]	= "Sündmusi";
$pgv_lang["gedcom_block"]		= "GEDCOM Tervitus";
$pgv_lang["gedcom_descr"]		= "GEDCOM tervitusblokk toimib samuti kui kasutaja tervitusblokk.  Siin tervitatakse külastajat, samuti kuvatakse aktiivse andmebaasi nimi, käesolev kuupäev ja kelaaeg.";
$pgv_lang["gedcom_favorites_block"] 	= "Selle GEDCOMi lemmikud";
$pgv_lang["gedcom_favorites_descr"] 	= "Selle GEDCOMi lemmikud võimaldab administraatoril valida andmebaasist isikud, kelle andmed võiksid olla kergesti kättesaadavad kõigile. Sel moel saab välja tuua perekonnaajaloo tähtsamad isikud.";
$pgv_lang["gedcom_stats_block"] 	= "GEDCOMi statistika";
$pgv_lang["gedcom_stats_descr"] 	= "GEDCOM statistika blokk näitab külastajale andmebaasi põhiinfot, näiteks millal andmebaas loodi ja kui palju inimesi on selles.<br /><br />Samuti on seal sagedamini esinevate perekonnanimde loend. Selle bloki konfigureerimisel saab perekonnanimede näitamise ära jätta ja samuti saab sellesse loendisse nimesid lisada ja sealt nimesid eemaldada.  Võid ka määrata nimede esinemissageduse, sellesse loendisse ilmumiseks.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Näita sagedamini esinevaid perekonnanimesid.";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />saad muuta seda lehekulge, paigutades blokke selliseslt nagu neid näha tahad.<br /><br />Lehekülg on jagatud <b>Põhi-</b> ja <b>paremaks</b> sektsiooniks.	<b>Põhisektsiooni</b> blokid on suuremad ja paiknevad lehekülje pealkirja all.  The <b>Parem</b> sektsioon algab pealkirjast paremal ja paikneb lehekülje paremas servas ülalt alla.<br /><br />Kummalgi sektsioonil on oma blokkide nimekiri, mis sellele lehele näidatud järjekorras paigutatakse.  Blokke võid lisada, eemaldada ja ümber paigutada, kuidas soovid.<br /><br /> Kui üks nimekiri on tühi, siis võtab ülejäänud blokkide loend enda alla terve lehekülje laiuse.<br /><br />";
$pgv_lang["login_block"]		= "Logi sisse";
$pgv_lang["login_descr"]		= "Sisselogimise blokis saab sisestada kasutajanime ja parooli, et sisse logida.";
$pgv_lang["theme_select_block"] 	= "Teema valik";
$pgv_lang["theme_select_descr"] 	= "Teema valiku blokk kuvab teema valiku dialoogi ka siis kui teema valik muidu on blokeereitud.";
$pgv_lang["block_top10_title"]		= "10 sagedamini esinevat perekonnanime";
$pgv_lang["block_top10"]		= "10 sagedamini esinevat perekonnanime";
$pgv_lang["block_top10_descr"]		= "See blokk kuvab 10 kõige sagedamini andmebaasis esinevat perekonnanime.  Tegelikult näidatavate perekonnanimede arvu saad määrata.  GEDCOM seadistustes saad selles listis olevaid nimesid eemaldada.";

$pgv_lang["gedcom_news_block"]	= "GEDCOM uudised";
$pgv_lang["gedcom_news_descr"]	= "GEDCOM uudiste blokis kuvatakse kasutajale admin kasutaja poolt postitatud uudisartikleid.<br /><br />Uudiste blokk on hea koht, kus teada anda tähtsamatest andmebaasi uuendustest ja suguvõsa kokkutulekutest või lapse sünnist.";
$pgv_lang["gedcom_news_limit"]	= "Piira uudiseid:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "Piiramata";
$pgv_lang["gedcom_news_limit_date"]	= "Uudise vanusega";
$pgv_lang["gedcom_news_limit_count"]	= "Uudiste arvuga";
$pgv_lang["gedcom_news_flag"]	= "Piirang:";
$pgv_lang["gedcom_news_archive"] 	= "Vaata arhiivi";
$pgv_lang["user_news_block"]		= "Kasutaja päevik";
$pgv_lang["user_news_descr"]		= "Kasutaja päevik võimaldab kasutajal teha märkmeid või pidada päevikut veebis.";
$pgv_lang["my_journal"] 		= "Minu päevik";
$pgv_lang["no_journal"] 		= "Sa ei ole teinud päevikusse ühtegi kannet.";
$pgv_lang["confirm_journal_delete"]	 = "Kas soovid kindlasti selle sissekande tühistada?";
$pgv_lang["add_journal"]		= "Lisa uus kanne päevikusse";
$pgv_lang["gedcom_news"]		= "Uudised";
$pgv_lang["confirm_news_delete"]	= "Kas oled kindel, et soovid selle uudise kustutada?";
$pgv_lang["add_news"]		= "Lisa uudis";
$pgv_lang["no_news"]		= "Ühtegi uudist pole sisestatud.";
$pgv_lang["edit_news"]		= "Lisa/Muuda päeviku/uudiste sissekannet";
$pgv_lang["enter_title"]		= "Palun sisesta pealkiri.";
$pgv_lang["enter_text"] 		= "Palun sisesta selle uudise või päevikukande tekst.";
$pgv_lang["news_saved"] 		= "Uudiste/päeviku sissekande salvestamine õnnestus.";
$pgv_lang["article_text"]		= "Kande tekst:";
$pgv_lang["main_section"]		= "Põhisektsiooni blokid";
$pgv_lang["right_section"]		= "Parema sektsiooni blokid";
$pgv_lang["available_blocks"]		= "Olemasolevad blokid";
$pgv_lang["move_up"]		= "Liiguta üles";
$pgv_lang["move_down"]		= "Liiguta alla";
$pgv_lang["move_right"] 		= "Liiguta paremale";
$pgv_lang["move_left"]		= "Liiguta vasemale";
$pgv_lang["broadcast_all"]		= "Saada kõigile kasutajatele";
$pgv_lang["hit_count"]		= "Külastuste arv:";
$pgv_lang["phpgedview_message"] 	= "PhpGedView sõnum";
$pgv_lang["common_surnames"]	= "Enim kasutatud perekonnanimed";
$pgv_lang["default_news_title"] 	= "Tere tulemast oma suguvõsa lehele";
$pgv_lang["default_news_text"]		= "Selles veebisaidis olevat suguvõsa informatsiooni aitab näidata  genealoogiaprogramm <a href=\"http://www.phpgedview.net/\" target=\"_blank\">PhpGedView</a>. Sellel lehel on on ülevaade suguvõsast.<br /><br />Andmete kasutamiseks vali menüüst sobiv tabel, leia nimekirjast isik või kasuta otsingut nime või koha leidmiseks.<br /><br />Probleemide korral kasuta  Spikri-ikooni abi saamiseks käsiloleva lehe kasutamisel.<br /><br />Tänan, et külastasid seda lehekülge.";
$pgv_lang["reset_default_blocks"]	= "Taasta algsed blokid";
$pgv_lang["recent_changes"] 		= "Viimased muudatused";
$pgv_lang["recent_changes_block"]	= "Viimased muudatused";
$pgv_lang["recent_changes_descr"]	= "Viimaste muudatuste blokk näitab anmebaasis viimase kuu jooksul tehtud muudatusi.  Selle bloki abil saad olla kursis tehtud muudatustega.  Muudatused tehakse kindlaks automaatselt, kasutades GEDCOM standardi CHAN tagi.";
$pgv_lang["recent_changes_none"]	= "<b>Viimase #pgv_lang[global_num1]# päeva jooksul pole muudatusi tehtud.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Viimase #pgv_lang[global_num1]# päeva jooksul tehtud muudatused</b><br />";
$pgv_lang["show_empty_block"]	= "Kas see blokk peaks tühjana olema peidetud?";
$pgv_lang["hide_block_warn"]		= "Kui peidad tühja bloki, siis ei saa sa seda enne uuesti seadistada, kui see blokk ei ole tühi.";
$pgv_lang["delete_selected_messages"]	= "Kustuta valitud sõnumid";
$pgv_lang["use_blocks_for_default"]	= "Kasuta seda seadistust, kui vaikimisi seadet kõikide kasutajate jaoks.";
$pgv_lang["block_not_configure"]	= "Seda blokki ei saa seadistada.";

//-- validate GEDCOM
$pgv_lang["performing_validation"]	= "GEDCOM faili kontrollimine...";
$pgv_lang["changed_places"] 		= "Leiti vigased koha kodeeringud. Puhastatud koha kirjed seatakse vastavusse GEDCOM 5.5 spetsifikatsiooniga. Näide GEDCOM failist:";
$pgv_lang["invalid_dates"]		= "Leiti vigased kuupäevad, puhastamise käigus teisendatakse need formaati DD MMM YYYY (st. 1 JAN 2004).";
$pgv_lang["valid_gedcom"]		= "GEDCOM on vigadeta. Puhastamine pole vajalik.";
$pgv_lang["optional_tools"] 		= "Enne importimist võid käivitada järgmised valikulised vahendid.";
$pgv_lang["optional"]			= "Valikulised vahendid";
$pgv_lang["day_before_month"]		= "Päev enne kuud (DD MM YYYY)";
$pgv_lang["month_before_day"]		= "Kuu enne päeva (MM DD YYYY)";
$pgv_lang["do_not_change"]		= "Ära muuda";
$pgv_lang["change_id"]		= "Muuda isiku ID:";
$pgv_lang["example_place"]		= "Sobimatu koha näidis GEDCOM failist:";
$pgv_lang["example_date"]		= "Sobimatu kuupäeva näide GEDCOM failist:";
$pgv_lang["add_media_tool"] 		= "Meedia lisamine";
$pgv_lang["launch_media_tool"]		= "Meedia lisamise abivahendi käivitamiseks vajuta siia.";
$pgv_lang["add_media_descr"]		= "See vahend lisab meedia OBJE tagid to andmebaasi.  Sulge aken, kui lõpetad meedia lisamise.";
$pgv_lang["inject_media_tool"]		= "Lisa meedia GEDCOM faili";
$pgv_lang["media_table_created"]	= "Tabeli <i>media</i> uuendamine õnnestus.";
$pgv_lang["click_to_add_media"] 	= "Eespool loetletud meedia lisamiseks GEDCOM-ile #GEDCOM# vajuta siia.";
$pgv_lang["adds_completed"] 		= "Meedia lisamine GEDCOM failile õnnestus.";
$pgv_lang["ansi_encoding_detected"] 	= "Leiti ANSI kodeering. PhpGedView töötab paremini UTF-8 kodeeringuga.";
$pgv_lang["invalid_header"] 		= "Avastati read enne GEDCOM-i päist <b>0&nbsp;HEAD</b>.  Puhastamise käigus need read kustutatakse.";
$pgv_lang["macfile_detected"]		= "Tuvastati Macintosh-i fail. Puhastamise käigus teisendatakse see DOS-formaati.";
$pgv_lang["place_cleanup_detected"] = "Leiti sobimatud koha kodeeringud. Vead tuleb parandada.";
$pgv_lang["cleanup_places"] 		= "Puhasta kohad";
$pgv_lang["empty_lines_detected"]	= "GEDCOM failis on tühje ridu. Puhastamise käigus need read kustutatakse.";
$pgv_lang["import_options"]		= "Importimise valikud";
$pgv_lang["import_options_help"] 	= "GEDCOM importimise käigus saad teha täiendavaid valikuid.";
$pgv_lang["verify_gedcom"]		= "Kontrolli GEDCOMi";
$pgv_lang["verify_gedcom_help"]	= "Võid valida, kas jätkad selle GEDCOMi üleslaadimist ja andmete importi või katkestad.";
$pgv_lang["import_statistics"]		= "Impordi statistika";
//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "Liivakella tabel";

//-- report engine
$pgv_lang["choose_report"]		= "Vali raport";
$pgv_lang["enter_report_values"]	= "Tee valikud raporti käivitamiseks";
$pgv_lang["selected_report"]		= "Valitud raport";
$pgv_lang["run_report"] 		= "Vaata raportit";
$pgv_lang["select_report"]		= "Vali raport";
$pgv_lang["download_report"]		= "Laadi raport alla";
$pgv_lang["reports"]			= "Raportid";
$pgv_lang["pdf_reports"]		= "PDF raportid";
$pgv_lang["html_reports"]		= "HTML raportid";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Otseste esivanemate raport";
$pgv_lang["ahnentafel_header"]		= "Otseste esivanemate raport: ";
$pgv_lang["ahnentafel_generation"]	= "Põlvkond ";
$pgv_lang["ahnentafel_pronoun_m"]	= "On ";
$pgv_lang["ahnentafel_pronoun_f"]	= "On ";
$pgv_lang["ahnentafel_born_m"]	= "sündinud";			// male
$pgv_lang["ahnentafel_born_f"]		= "sündinud";			// female
$pgv_lang["ahnentafel_christened_m"]	 = "ristititud";	// male
$pgv_lang["ahnentafel_christened_f"] 	= "ristititud";	// female
$pgv_lang["ahnentafel_married_m"]	= "abiellunud";			// male
$pgv_lang["ahnentafel_married_f"]	= "abiellunud";			// female
$pgv_lang["ahnentafel_died_m"]	= "surnud";				// male
$pgv_lang["ahnentafel_died_f"]		= "surnud";				// female
$pgv_lang["ahnentafel_buried_m"]	= "maetud";			// male
$pgv_lang["ahnentafel_buried_f"]	= "maetud";			// female
$pgv_lang["ahnentafel_place"]		= " -- ";				// place name follows this
$pgv_lang["ahnentafel_no_details"]	= " täpsemad andmed puuduvad";

//-- Descendancy report
$pgv_lang["descend_report"]		= "Järeltulijate raport";
$pgv_lang["descendancy_header"]	= "Järeltulijate raport: ";

$pgv_lang["family_group_report"]	= "Perekonna raport";
$pgv_lang["page"]			= "Lk";
$pgv_lang["of"] 			= " / ";
$pgv_lang["enter_famid"]		= "Sisesta perekonna ID";
$pgv_lang["show_sources"]		= "Näita allikaid";
$pgv_lang["show_notes"] 		= "Näita märkusi";
$pgv_lang["show_basic"] 		= "Trüki põhisündmused tühjalt, kui pole sisestatud";
$pgv_lang["show_photos"]		= "Näita fotosid";
$pgv_lang["relatives_report_ext"]	= "Sugulaste laiendatud raport";
$pgv_lang["individual_report"]		= "Isiku raport";
$pgv_lang["enter_pid"]		= "Sisesta isiku ID";
$pgv_lang["individual_list_report"]	= "isikute nimekiri";
$pgv_lang["generated_by"]		= "Genereeritud programmiga";
$pgv_lang["list_children"]		= "Järjesta lapsed sündimise järjekorras.";
$pgv_lang["birth_report"]		= "Sünnikuupäevade ja -kohtade raport";
$pgv_lang["birthplace"]		= "Sünnikoht sisaldab";
$pgv_lang["birthdate1"]		= "Sünnikuupäevad alates";
$pgv_lang["birthdate2"]		= "Sünnikuupäevad kuni";
$pgv_lang["death_report"]		= "Surma kuupäevade ja kohtade raport";
$pgv_lang["deathplace"]		= "Surma koht sisaldab";
$pgv_lang["deathdate1"]		= "Surmad alates kuupäevast";
$pgv_lang["deathdate2"]		= "Surmad kuupäevani";
$pgv_lang["marr_report"]		= "Abiellumise kuupäevade ja kohtade raport";
$pgv_lang["marrplace"]		= "Abiellumise koht sisaldab";
$pgv_lang["marrdate1"]		= "Abielud alates kuupäevast";
$pgv_lang["marrdate2"]		= "Abielud kuni kuupäevani";
$pgv_lang["sort_by"]			= "Järjesta";

$pgv_lang["cleanup"]			= "Puhasta";
$pgv_lang["skip_cleanup"]		= "Jäta puhastamine vahele";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["dynasty_list"]		= "Perekondade ülevaade";
$pgv_lang["patriarch_list"] 		= "Patriarhide nimekiri";
$pgv_lang["statistics"] 		= "Statistika";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		= "Esivanemate tabel";
$pgv_lang["gen_ancestry_chart"]	= "#PEDIGREE_GENERATIONS# põlvkonna esivanemate tabel";
$pgv_lang["chart_style"]		= "Tabeli stiil";
$pgv_lang["chart_list"]		= "Loend";
$pgv_lang["chart_booklet"]   		= "Raamat";
$pgv_lang["show_cousins"]		= "Näita tädide ja onude lapsi";
// 1st generation
$pgv_lang["sosa_2"] 				= "Isa";
$pgv_lang["sosa_3"] 				= "Ema";
// 2nd generation
$pgv_lang["sosa_4"] 				= "Vanaisa";
$pgv_lang["sosa_5"] 				= "Vanaema";
$pgv_lang["sosa_6"] 				= "Vanaisa";
$pgv_lang["sosa_7"] 				= "Vanaema";
// 3rd generation
$pgv_lang["sosa_8"] 				= "Vana-vanaisa";
$pgv_lang["sosa_9"] 				= "Vana-vanaema";
$pgv_lang["sosa_10"]				= "Vana-vanaisa";
$pgv_lang["sosa_11"]				= "Vana-vanaema";
$pgv_lang["sosa_12"]				= "Vana-vanaisa";
$pgv_lang["sosa_13"]				= "Vana-vanaema";
$pgv_lang["sosa_14"]				= "Vana-vanaisa";
$pgv_lang["sosa_15"]				= "Vana-vanaema";
// 4th generation
$pgv_lang["sosa_16"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_17"]				= "Vana-vana-vanaema";
$pgv_lang["sosa_18"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_19"]				= "Vana-vana-vanaema";
$pgv_lang["sosa_20"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_21"]				= "Vana-vana-vanaema";
$pgv_lang["sosa_22"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_23"]				= "Vana-vana-vanaema";
$pgv_lang["sosa_24"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_25"]				= "Vana-vana-vanaema";
$pgv_lang["sosa_26"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_27"]				= "Vana-vana-vanaema";
$pgv_lang["sosa_28"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_29"]				= "Vana-vana-vanaema";
$pgv_lang["sosa_30"]				= "Vana-vana-vanaisa";
$pgv_lang["sosa_31"]				= "Vana-vana-vanaema";
// 5th generation
$pgv_lang["sosa_32"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_33"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_34"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_35"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_36"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_37"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_38"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_39"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_40"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_41"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_42"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_43"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_44"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_45"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_46"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_47"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_48"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_49"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_50"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_51"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_52"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_53"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_54"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_55"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_56"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_57"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_58"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_59"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_60"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_61"]			   = "Vana-vana-vana-vanaema";
$pgv_lang["sosa_62"]			   = "Vana-vana-vana-vanaisa";
$pgv_lang["sosa_63"]			   = "Vana-vana-vana-vanaema";

//-- FAN CHART
$pgv_lang["compact_chart"]			= "Kompaktne skeem";
$pgv_lang["fan_chart"]			= "Ringdiagramm";
$pgv_lang["gen_fan_chart"]  			= "#PEDIGREE_GENERATIONS# põlvkonna ringdiagramm";
$pgv_lang["fan_width"]			= "Laius";
$pgv_lang["gd_library"]			= "PHP serveri konfiguratsiooni viga: kujutiste jaoks on vaja kasutada GD 2.x library.";
$pgv_lang["gd_freetype"]			= "PHP serveri konfiguratsiooni viga: TrueType fontide kasutamiseks on vaja FreeType library.";
$pgv_lang["gd_helplink"]			= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]			= "PHP serveris puudub kirjatüübi (font) fail";
$pgv_lang["fanchart_IE"]			= "Ringdiagrammi ei saa vahetult brauserist printida. Kasuta paremat hiireklikki kujutise salvestamiseks, prindi kujutis failist.";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["best_man"] = "Isamees";
$pgv_lang["bridesmaid"] = "Pruutneitsi";
$pgv_lang["buyer"] = "Ostja";
$pgv_lang["circumciser"] = "Ümberlõikaja";
$pgv_lang["civil_registrar"] = "Riigi registripidaja";
$pgv_lang["friend"] = "Sõber";
$pgv_lang["godfather"] = "Ristiisa";
$pgv_lang["godmother"] = "Ristiema";
$pgv_lang["godparent"] = "Ristivanem";
$pgv_lang["informant"] = "Koputaja";
$pgv_lang["lodger"] = "Öömajaline";
$pgv_lang["nurse"] = "Lapsehoidja";
$pgv_lang["priest"] = "Preester";
$pgv_lang["rabbi"] = "Rabi";
$pgv_lang["registry_officer"] = "Registreerimisametnik";
$pgv_lang["seller"] = "Müüja";
$pgv_lang["servant"] = "Teenija";
$pgv_lang["twin"] = "Kaksik";
$pgv_lang["twin_brother"] = "Kaksikvend";
$pgv_lang["twin_sister"] = "Kaksikõde";
$pgv_lang["witness"] = "Tunnistaja";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistilised graafikud";
$pgv_lang["stpljpgraphno"]	= "JPgraph moodulid pole kättesaadavad kaustas <i>phpgedview/jpgraph/</i>. Nende saamiseks kasuta linki http://www.aditus.nu/jpgraph/jpdownload.php<br /> <h3>Kõigepealt installeeri JPgraph kausta <i>phpgedview/jpgraph/</i></h3><br />";
$pgv_lang["stplinfo"]		= "graafiku informatsioon:";
$pgv_lang["stpltype"]		= "tüüp:";
$pgv_lang["stplnoim"]	= " pole realiseeritud:";
$pgv_lang["stplmf"]		= " / mees-naine";
$pgv_lang["stplipot"]		= " / ajavahemiku kohta";
$pgv_lang["stplgzas"]		= "serva z-telg:";
$pgv_lang["stplmonth"]	= "kuu";
$pgv_lang["stplnumbers"]	= "arvud perekonna kohta";
$pgv_lang["stplage"]		= "vanus";
$pgv_lang["stplperc"]		= "protsent";
$pgv_lang["stplnumof"]	= "Arv ";
$pgv_lang["stplmarrbirth"]	= "Kuude arv abielu ja esimese lapse sünni vahel";

//-- alive in year
$pgv_lang["alive_in_year"]			= "Elus aastal";
$pgv_lang["is_alive_in"]			= "On elus aastal #YEAR#";
$pgv_lang["alive"]				= "Elus ";
$pgv_lang["dead"]				= "Surnud ";
$pgv_lang["maybe"]				= "Võib olla ";

//-- Help system
$pgv_lang["definitions"]			= "Definitsioonid";

//-- Index_edit
$pgv_lang["description"]			= "Kirjeldus";
$pgv_lang["block_desc"]			= "Ploki kirjeldus";
$pgv_lang["click_here"]			= "Jätkamiseks vajuta siis";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Muudatuste salvestamiseks vajuta siia.<br /><br />Satud tagasi leheküljele #pgv_lang[welcome]# või leheküljele #pgv_lang[mygedview]#, Kuid muudatused võivad sealt puududa.  Muudatuste nägemiseks pead kasutama brauseri värskendamise funktsiooni (refresh).";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Lühidalt on kirjeldatud iga blokki, mida saad paigutada lehtedele #pgv_lang[welcome]# või #pgv_lang[mygedview]#.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]	= "&nbsp;";

//-- Find page
$pgv_lang["total_places"]			= "Kohta leitud";
$pgv_lang["media_contains"]			= "Media sisaldab:";
$pgv_lang["repo_contains"]			= "Hoidla sisaldab:";
$pgv_lang["source_contains"]			= "Allikas sisaldab:";
$pgv_lang["display_all"]			= "Näita kõiki";

// FAQ Page
$pgv_lang["add_faq_header"]	 = "KKK päis";
$pgv_lang["add_faq_body"] 	= "KKK sisu";
$pgv_lang["add_faq_order"] 	= "FAQ Position";
$pgv_lang["no_faq_items"] 	= "KKK loend on tühi.";
$pgv_lang["faq_list"] 		= "KKK loend";
$pgv_lang["confirm_faq_delete"] = "Kas soovid KKK sisestuse kustutada";
$pgv_lang["preview"] 	=  "Eelvaade";
$pgv_lang["no_id"] 	= "KKK ID pole määratud!";

// Help search
$pgv_lang["hs_title"] 			= "Otsi spikri tekstist";
$pgv_lang["hs_search"] 		= "Otsi";
$pgv_lang["hs_close"] 		= "Sulge aken";
$pgv_lang["hs_results"] 		= "Otsingu tulemusi:";
$pgv_lang["hs_keyword"] 		= "Otsi sõna";
$pgv_lang["hs_searchin"]		= "Otsi";
$pgv_lang["hs_searchuser"]		= "Kasutaja sikrist";
$pgv_lang["hs_searchconfig"]		= "Administraatori spikrist";
$pgv_lang["hs_searchhow"]		= "Otsingui viis";
$pgv_lang["hs_searchall"]		= "Kõik sõnad";
$pgv_lang["hs_searchany"]		= "Ükskõik milline sõnadest";
$pgv_lang["hs_searchsentence"]	= "Otsi täpset fraasi";
$pgv_lang["hs_intruehelp"]		= "Osti spikri tekstist";
$pgv_lang["hs_inallhelp"]		= "Otsi kogu teksti hulgast";

// Media import
$pgv_lang["media_import"] 		= "Impordi and konverteeri meedia";
$pgv_lang["confirm_folder_delete"] 	= "Kas soovid kindlasti selle kausta kustutada?";
$pgv_lang["choose"] 			= "Vali: ";
$pgv_lang["account_information"] 	= "Konto informatsioon";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] 		= "Audio";
$pgv_lang["TYPE__book"] 		= "Raamat";
$pgv_lang["TYPE__card"] 		= "Kaart";
$pgv_lang["TYPE__certificate"]	= "Tunnistus";
$pgv_lang["TYPE__document"] 	= "Dokument";
$pgv_lang["TYPE__electronic"] 	= "Elektrooniline";
$pgv_lang["TYPE__fiche"] 		= "Mikrofišš";
$pgv_lang["TYPE__film"] 		= "Mikrofilm";
$pgv_lang["TYPE__magazine"] 	= "Ajakiri";
$pgv_lang["TYPE__manuscript"] 	= "Käsikiri";
$pgv_lang["TYPE__map"] 		= "Kaart";
$pgv_lang["TYPE__newspaper"] 	= "Ajaleht";
$pgv_lang["TYPE__photo"] 		= "Foto";
$pgv_lang["TYPE__tombstone"] 	= "Hauakivi";
$pgv_lang["TYPE__video"] 		= "Video";

?>
