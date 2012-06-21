<?php
/**
 * Slovak Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
 * @package PhpGedView
 * @subpackage Languages
 * @author Peter Moravčík
 * @version $Id: editor.sk.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["admin_override"]		= "Administrátorské voľby";
$pgv_lang["no_update_CHAN"]		= "Neaktualizuj CHAN záznam (Posledná zmena).";
$pgv_lang["select_events"]		= "Vyber udalosť";
$pgv_lang["source_events"]		= "Asociuj udalosť s týmto zdrojom";
$pgv_lang["advanced_name_fields"]	= "Dodatočné mená (prezývka, meno po sňatku, atd.)";
$pgv_lang["accept_changes"]		= "Prijať / Odmietnuť zmeny";
$pgv_lang["replace"]			= "Nahradiť záznam";
$pgv_lang["append"]			= "Pripojiť záznam";
$pgv_lang["review_changes"]		= "Revízia zmien v GEDCOM súboroch";
$pgv_lang["remove_object"]		= "Odstrániť objekt";
$pgv_lang["remove_links"]		= "Odstrániť prepojenia";
$pgv_lang["media_not_deleted"]		= "Adresár medií nebol odstránený.";
$pgv_lang["thumbs_not_deleted"]		= "Adresár náhľadov nebol odstránený.";
$pgv_lang["thumbs_deleted"]		= "Adresár náhľadov bol úspešne odstránený.";
$pgv_lang["show_thumbnail"]		= "Zobraz náhľad";
$pgv_lang["link_media"]			= "Priraď média";
$pgv_lang["to_person"]			= "ku osobe";
$pgv_lang["to_family"]			= "ku rodine";
$pgv_lang["to_source"]			= "ku zdroju";
$pgv_lang["edit_fam"]			= "Upraviť rodinu";
$pgv_lang["copy"]			= "Kopíruj";
$pgv_lang["cut"]			= "Vystrihnúť";
$pgv_lang["sort_by_birth"]		= "Triediť podľa dátumu narodenia";
$pgv_lang["reorder_children"]		= "Znovu usporiadať deti";
$pgv_lang["add_from_clipboard"]		= "Pridať zo schránky:";
$pgv_lang["record_copied"]		= "Záznam bol skopírovaný do schránky";
$pgv_lang["add_unlinked_person"]	= "Pridať nezávislú osobu";
$pgv_lang["add_unlinked_source"]	= "Pridať nezávislý zdroj";
$pgv_lang["server_file"]		= "Meno súboru na servere";
$pgv_lang["server_file_advice"]		= "Nemeňte uložené orginálne meno súboru.";
$pgv_lang["server_file_advice2"]	= "Musíte vložiť URL začínajúcu na &laquo;http://&raquo;.<br />";
$pgv_lang["server_folder_advice"]	= "You can enter up to #GLOBALS[MEDIA_DIRECTORY_LEVELS]# folder names to follow the default &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Do not enter the &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; part of the destination folder name.";
$pgv_lang["server_folder_advice2"]	= "Tento vstup je ignorovaný, ak ste zadali URL do poľa pre meno súboru.";
$pgv_lang["add_linkid_advice"]		= "Vložte alebo vyhľadajte ID osoby, rodiny alebo zdroja, ku ktorému má byť tento súbor médií pripojený.";
$pgv_lang["use_browse_advice"]		= "Použite tlačítko &laquo;Prehľadať&raquo; na vyhľadanie vašeho lokálneho počítača pre žiadaný súbor.";
$pgv_lang["add_media_other_folder"]	= "Ďalší adresár... prosím zadajte";
$pgv_lang["add_media_file"]		= "Existujúci súbor médii na servere";
$pgv_lang["main_media_ok1"]		= "Hlavný súbor medií <b>#GLOBALS[oldMediaName]#</b> bol úspešne premenovaný na <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]		= "Hlavný súbor médií <b>#GLOBALS[oldMediaName]#</b> bol úspešne presunutý z <b>#GLOBALS[oldMediaFolder]#</b> do <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]		= "Hlavný súbor médií bol úspešne presunutý a premenovaný z <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]		= "Hlavný súbor médií <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> neexistuje.";
$pgv_lang["main_media_fail1"]		= "Hlavný súbor médií <b>#GLOBALS[oldMediaName]#</b> nemôže byť premenovaný na <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]		= "Hlavný súbor médií <b>#GLOBALS[oldMediaName]#</b> nemôže byť presunutý z <b>#GLOBALS[oldMediaFolder]#</b> do <b>#GLOBALS[newMediaFolder]#.";
$pgv_lang["main_media_fail3"]		= "Hlavný súbor médií nemôže byť presunutý a premenovaný z <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]		= "Poznámka: Musíte aktivovať funkčnosť 'Použiť GEDCOM (RESN) utajenie' aby bolo toto nastavenie účinné.";
$pgv_lang["thumb_media_ok1"]		= "Súbor náhľadu <b>#GLOBALS[oldMediaName]#</b> bol úspešne premenovaný na <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]		= "Súbor náhľadu <b>#GLOBALS[oldMediaName]#</b> bol úspešne presunutý z <b>#GLOBALS[oldThumbFolder]#</b> do <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]		= "Súbor náhľadu bol úspešne presunutý a premenovaný z  <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]		= "Súbor náhľadu <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> neexistuje.";
$pgv_lang["thumb_media_fail1"]		= "Súbor náhľadu <b>#GLOBALS[oldMediaName]#</b> nemôže byť premenovaný na <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]		= "Súbor náhľadu <b>#GLOBALS[oldMediaName]#</b> nemôže byť presunutý z <b>#GLOBALS[oldThumbFolder]#</b> do <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]		= "Súbor náhľadu nemôže byť presunutý a premenovaný z  <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> na <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]			= "Pridať novú osobu";
$pgv_lang["edit_sex"]			= "Opraviť pohlavie";
$pgv_lang["add_obje"]			= "Pridať nový multimediálny súbor";
$pgv_lang["add_name"]			= "Pridať nové meno";
$pgv_lang["edit_raw"]			= "Upraviť priamo záznam GEDCOM";
$pgv_lang["label_add_remote_link"] 	= "Pridať link";
$pgv_lang["label_gedcom_id"]        	= "GEDCOM ID";
$pgv_lang["label_local_id"]         	= "ID osoby";
$pgv_lang["accept"]			= "Prijať";
$pgv_lang["accept_all"]			= "Prijať všetky zmeny";
$pgv_lang["accept_gedcom"]		= "U každej zmeny sa rozhodnite, či ju chcete prijať, alebo zamietnuť.<br />Ak chcete prijať všetky zmeny naraz, kliknite na \"Prijať všetky zmeny\" v políčku dolu.<br />Ak chcete viacej informácií k niektorej úprave, kliknite na \"Zobraziť rozdiely\" a uvidíte rozdiely medzi starou a novou verziou, <br /> alebo kliknite na \"Zobraziť priamo záznam GEDCOM\" a uvidíte novú verziu zapísanú priamo vo formáte GEDCOM.";
$pgv_lang["accept_successful"]		= "Zmeny boly prijaté a nové údaje zapísané do databáze";
$pgv_lang["add_child"]			= "Pridať dieťa";
$pgv_lang["add_child_to_family"]	= "Pridať dieťa k tejto rodine";
$pgv_lang["add_fact"]			= "Pridať nový údaj";
$pgv_lang["add_father"]			= "Pridať nového otca";
$pgv_lang["add_husb"]			= "Pridať manžela";
$pgv_lang["add_husb_to_family"]		= "Pridať manžela k tejto rodine";
$pgv_lang["add_media"]			= "Pridať do médií novú položku";
$pgv_lang["add_media_lbl"]		= "Pridať média";
$pgv_lang["add_mother"]			= "Pridať novú matku";
$pgv_lang["add_new_chil"] 		= "Pridať nové dieťa";
$pgv_lang["add_new_husb"]		= "Pridať nového manžela";
$pgv_lang["add_new_wife"]		= "Pridať novú manželku";
$pgv_lang["add_note"]			= "Pridať novú poznámku";
$pgv_lang["add_note_lbl"]		= "Pridať poznámku";
$pgv_lang["add_sibling"]		= "Pridať brata alebo sestru";
$pgv_lang["add_son_daughter"]		= "Pridať syna alebo dcéru";
$pgv_lang["add_source"]			= "Pridať novú citáciu ku zdroju";
$pgv_lang["add_source_lbl"]		= "Pridať citáciu ku zdroju";
$pgv_lang["add_wife"]			= "Pridať manželku";
$pgv_lang["add_wife_to_family"]		= "Pridať manželku k tejto rodine";
$pgv_lang["advanced_search_discription"] = "Rozšírené hľadanie stránky";
$pgv_lang["auto_thumbnail"]		= "Automatický náhľad";
$pgv_lang["basic_search"]		= "hľadanie";
$pgv_lang["basic_search_discription"] 	= "Základné hľadanie stránky";
$pgv_lang["birthdate_search"]		= "Dátum narodenia:";
$pgv_lang["birthplace_search"]		= "Miesto narodenia:";
$pgv_lang["change"]			= "Zmeniť";
$pgv_lang["change_family_instr"]	= "Použite túto stránku ku zmene, alebo zmazaniu členov rodiny.<br /><br />Pre každého člena rodiny môžete použiť link Zmena na výber inej osoby, ktorá plní túto rolu v rodine. Môžete tiež použiť link Odstrániť ku zmazaniu tejto osoby z rodiny.<br /><br />Keď skončíte zmeny členov rodiny, kliknite na tlačítko Uložiť, pre uloženie vykonaných zmien.<br />";
$pgv_lang["change_family_members"]	= "Zmeniť členov rodiny";
$pgv_lang["changes_occurred"]		= "U tejto osoby boly urobené nasledujúce zmeny:";
$pgv_lang["confirm_remove"]		= "Ste si istý, že chcete odstrániť túto osobu z rodiny?";
$pgv_lang["confirm_remove_object"]	= "Ste si istý, že chcete odstrániť tento objekt z databázy?";
$pgv_lang["create_repository"]		= "Založiť prameň";
$pgv_lang["create_source"]		= "Vytvoriť nový zdroj";
$pgv_lang["current_person"]         	= "Rovnaký ako aktuálny";
$pgv_lang["date"]			= "Dátum";
$pgv_lang["deathdate_search"]		= "Dátum úmrtia:";
$pgv_lang["deathplace_search"]		= "Miesto úmrtia:";
$pgv_lang["delete_dir_success"]		= "Adresáre medií a náhľadov boli úspešne odstránené.";
$pgv_lang["delete_file"]		= "Zmazať súbor";
$pgv_lang["delete_repo"]		= "Zmazať prameň";
$pgv_lang["directory_not_empty"]	= "Adresár nie je prázdny:";
$pgv_lang["directory_not_exist"]	= "Adresár neexistuje.";
$pgv_lang["error_remote"]           	= "Máte vybranú vzdialenú stránku.";
$pgv_lang["error_same"]             	= "Máte vybranú totožnú stránku.";
$pgv_lang["external_file"]		= "Tento objekt médií neexistuje na serveri ako súbor. Nemôže byť preto zmazný, presunutý alebo premenovaný.";
$pgv_lang["file_missing"]		= "Žiadny súbor k načítaniu. Nahrajte ho znovu";
$pgv_lang["file_partial"]		= "Súbor bol nahraný iba čiastočne, prosím skúste to znovu";
$pgv_lang["file_success"]		= "Súbor bol úspešne nahraný";
$pgv_lang["file_too_big"]		= "Nahraný súbor presiahol povolenú veľkosť";
$pgv_lang["folder"]		 	= "Adresár na serveri";
$pgv_lang["gedcom_editing_disabled"]	= "Upravovanie tohoto GEDCOMu bolo zakázané administrátorom systému.";
$pgv_lang["gedcomid"]			= "ID osoby";
$pgv_lang["gedrec_deleted"]		= "Záznam bol úspešne zmazaný.";
$pgv_lang["gen_thumb"]			= "Vytvor náhľad";
$pgv_lang["gender_search"]		= "Pohlavie:";
$pgv_lang["generate_thumbnail"]		= "Vytvor náhľad automaticky z";
$pgv_lang["hebrew_givn"]		= "Židovské meno";
$pgv_lang["hebrew_surn"]		= "Židovské priezvisko";
$pgv_lang["hide_changes"]		= "Ak chcete skryť zmeny, kliknite sem.";
$pgv_lang["highlighted"]		= "Zvýraznený obrázok";
$pgv_lang["illegal_chars"]		= "Neprípustné znaky v mene";
$pgv_lang["invalid_search_multisite_input"] = "Prosím vložte niektorý z následujúcich údajov: meno, dátum narodenia, miesto narodenia, datum úmrtia, miesto úmrtia, pohlavie.";
$pgv_lang["invalid_search_multisite_input_gender"] = "Prosím hľadajte ešte raz z viac informáciami než iba pohlavím";
$pgv_lang["label_diff_server"]      	= "Iná stránka";
$pgv_lang["label_location"]         	= "Umiestnenie";
$pgv_lang["label_password_id2"]		= "Heslo:";
$pgv_lang["label_rel_to_current"]   	= "Vzťah k aktuálnej osobe";
$pgv_lang["label_remote_id"]        	= "ID vzdialenej osoby";
$pgv_lang["label_same_server"]      	= "Tá istá stránka";
$pgv_lang["label_site"]             	= "Stránka";
$pgv_lang["label_site_url"]         	= "URL stránky:";
$pgv_lang["label_username_id2"]		= "Uživateľské meno:";
$pgv_lang["lbl_server_list"]        	= "Použiť existujúcu stránku.";
$pgv_lang["lbl_type_server"]        	= "Vložte novú stránku.";
$pgv_lang["link_as_child"]		= "Pridať túto osobu k existujúcej rodine ako dieťa";
$pgv_lang["link_as_husband"]		= "Pridať túto osobu k existujúcej rodine ako manžela";
$pgv_lang["link_success"]		= "Úspešne pridané pripojenie";
$pgv_lang["link_to_existing_media"]	= "Link na existujúcu položku médií";
$pgv_lang["max_media_depth"]		= "Môžete ísť iba do #MEDIA_DIRECTORY_LEVELS# úrovne adresárov";
$pgv_lang["max_upload_size"]		= "Maximálna veľkosť uploadu:";
$pgv_lang["media_deleted"]		= "Adresár médií bol úspešne odstránený.";
$pgv_lang["media_exists"]		= "Súbor médií už existuje.";
$pgv_lang["media_file"]			= "Súbory médií";
$pgv_lang["media_file_deleted"]		= "Súbor médií bol úspešne zmazaný.";
$pgv_lang["media_file_moved"]			= "Súbor médií bol presunutý.";
$pgv_lang["media_file_not_moved"]	= "Súbor médií nemôže byť presunutý.";
$pgv_lang["media_file_not_renamed"]	= "Súbor médií nemôže byť presunutý alebo premenovaný.";
$pgv_lang["media_thumb_exists"]		= "Náhľad médií už existuje.";
$pgv_lang["multiple_gedcoms"]		= "Tento súbor je spojený s inou genealogickou databázou na tomto servere. Nemôže byť zmazaný, presunutý alebo premenovaný skôr než budú tieto spojenia odstránené.";
$pgv_lang["must_provide"]		= "Musíte poskytnúť";
$pgv_lang["name_search"]		= "Meno:";
$pgv_lang["new_repo_created"]		= "Nový prameň bol založený";
$pgv_lang["new_source_created"]		= "Nový zdroj bol vytvorený.";
$pgv_lang["no_changes"]			= "Zatiaľ neboly urobené žiadne zmeny, ktoré by se maly preskúmať.";
$pgv_lang["no_known_servers"]		= "Žiadny známy server <br /> Nebudú nájdené žiadne výsledoky";
$pgv_lang["no_temple"]			= "No Temple - Living Ordinance";
$pgv_lang["no_upload"]			= "Nie je povolené načítať súbory médií, pretože nie sú povolené multimediálne položky v konfigurácii, alebo zložka Media je chránená proti zápisu.";
$pgv_lang["paste_id_into_field"]	= "Vložte toto ID zdroja do políčok, z ktorých sa chcete odvolávať na tento zdroj.";
$pgv_lang["paste_rid_into_field"]	= "Vložte toto ID prameňa do políčok, z ktorých sa chcete odvolávať na tento prameň.";
$pgv_lang["photo_replace"] 		= "Chcete prepísať starú fotku touto novou?";
$pgv_lang["privacy_not_granted"]	= "Nemáte prístup k";
$pgv_lang["privacy_prevented_editing"]	= "Nastavenie utajenia vám neumožňuje upravovať tento záznam.";
$pgv_lang["record_marked_deleted"]	= "Tento záznam je označený na zmazanie, po schválení administrátorom.";
$pgv_lang["replace_with"]		= "Prepísať s";
$pgv_lang["show_changes"]		= "Tento záznam bol aktualizovaný. Kliknite sem pre zobrazenie zmien.";
$pgv_lang["thumb_genned"]		= "Náhľad bol automaticky generovaný";
$pgv_lang["thumbgen_error"]		= "Nie je možné vytvoriť náhľad pre";
$pgv_lang["thumbnail"]			= "Zmenšenina";
$pgv_lang["title_remote_link"]      	= "Pridať vzdialené pripojenie";
$pgv_lang["undo"]			= "Späť";
$pgv_lang["undo_all"]			= "Zrušiť všetky zmeny";
$pgv_lang["undo_all_confirm"]		= "Ste si istý, že chcete zrušiť všetky zmeny pre tento GEDCOM?";
$pgv_lang["undo_successful"]		= "Návrat bol úspešný";
$pgv_lang["update_successful"]		= "Aktualizácia bola úspešná";
$pgv_lang["upload"]			= "Import";
$pgv_lang["upload_error"]		= "V priebehu nahrávania vášho súboru sa objavila chyba.";
$pgv_lang["upload_media"]		= "Nahrať multimediálne súbory";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />Vyberte súbory na vašom lokálnom počítači pre načítanie na váš server. Všetky súbory budú načítané do adresára <b>#MEDIA_DIRECTORY#</b> alebo do niektorého z poddaresárov.<br /><br />Adresár, ktorého meno ste zadali, bude pridaný do #MEDIA_DIRECTORY#. Napríklad, #MEDIA_DIRECTORY#mojarodina. Ak adresár náhľadov neexistuje, bude založený automaticky.";
$pgv_lang["upload_successful"]		= "Nahranie bolo úspešné";
$pgv_lang["view_change_diff"]		= "Prehliadnúť si zmeny";
$pgv_lang["edit_concurrency_change"] = "Tento záznam bol naposledy zmenený <i>#CHANGEUSER#</i> dňa #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "Záznam s ID #PID# bol zmenený iným užívateľom medzitým než ste si ho otvoril.";
$pgv_lang["edit_concurrency_msg1"]	= "Vyskytla sa chyba pri otvorení formulára Zmena. Iný užívateľ zmenil  tento záznam v dobe keď ste si ho prezeral. ";
$pgv_lang["edit_concurrency_reload"]	= "Prosím použite tlačidlo vašeho prehliadača Predchádzajúca stránka pre opätovné načítanie predchádzajúcej stránky, aby ste sa uistil, že pracujete najnovším záznamom. ";
?>
