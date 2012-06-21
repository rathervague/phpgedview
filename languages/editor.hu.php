<?php
/**
 * Hungarian texts
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
 * @author PGV Developers
 * @author Hrotkó Gábor <roti@al.pmmf.hu>
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: editor.hu.php 6782 2010-01-19 18:25:35Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"]		= "Változások elfogadása / elvetése";
$pgv_lang["replace"]			= "Rekord cserélése";
$pgv_lang["append"]			= "Rekord hozzáfűzése";
$pgv_lang["review_changes"]		= "A GEDCOM-változások áttekintése";
$pgv_lang["remove_object"]			= "Elem törlés";
$pgv_lang["remove_links"]			= "Kapcsolatok törlés";
$pgv_lang["media_not_deleted"]		= "A média mappa nem lett törölve.";
$pgv_lang["thumbs_not_deleted"]		= "Előnézet mappa nem lett törölve.";
$pgv_lang["thumbs_deleted"]			= "Előnézet mappa sikeresen törölve.";
$pgv_lang["show_thumbnail"]			= "Előnézetek feltüntetése";
$pgv_lang["link_media"]				= "Média kapcsolás";
$pgv_lang["to_person"]				= "Személyhez";
$pgv_lang["to_family"]				= "Családhoz";
$pgv_lang["to_source"]				= "Forráshoz";
$pgv_lang["edit_fam"]				= "Család szerkesztése";
$pgv_lang["copy"]					= "Másol";
$pgv_lang["cut"]					= "Kivág";
$pgv_lang["sort_by_birth"]			= "Sorrend születési dátum szerint";
$pgv_lang["reorder_children"]		= "Gyerekek új sorrendje";
$pgv_lang["add_unlinked_person"]	= "Kapcsolat nélküli személy hozzáadása";
$pgv_lang["add_unlinked_source"]	= "Kapcsolat nélküli forrás hozzáadása";
$pgv_lang["server_file"]				= "Az állomány neve a szerveren";
$pgv_lang["server_file_advice"]			= "Ne változtassa meg hogy, az eredeti neve az állománynak megmaradjon.";
$pgv_lang["add_asso"]				= "Új kapcsolat hozzáadás";
$pgv_lang["edit_sex"]				= "Nem szerkesztése";
$pgv_lang["add_obje"]			= "Új multimédia-elem hozzáadása";
$pgv_lang["add_name"]                   = "Új név hozzáadása";
$pgv_lang["edit_raw"]                   = "A nyers GEDCOM-rekord szerkesztése";
$pgv_lang["label_add_remote_link"]  = "Link hozzáadás";
$pgv_lang["label_gedcom_id"]        = "Adatbázis azonosítószáma";
$pgv_lang["label_local_id"]         = "Személy azonosítószáma";
$pgv_lang["accept"]  		        = "Elfogad";
$pgv_lang["accept_all"]                 = "Mindent elfogad";
$pgv_lang["accept_gedcom"]		= "Ön minden egyes változás megtartásáról vagy elvetéséről dönthet.<br /><br />A változások egyszerre való elfogadásához kattintson a lenti <b>\"Mindet elfogad\"</b> hivatkozásra.<br />További információért<br />kattintson a <b>\"Eltérések\"</b> hivatkozásra, így megtekintheti a régi és az új változat közötti különbséget,<br />vagy kattintson a <b>\"GEDCOM-rekord\"</b> hivatkozásra, hogy GEDCOM-formátumban nézhesse át az újabb állapotot.";
$pgv_lang["accept_successful"]  	= "A változásokat sikeresen mentettük az adatbázisba.";
$pgv_lang["add_child"]			= "Gyermek hozzáadása";
$pgv_lang["add_child_to_family"]	= "Gyermek hozzáadása a családhoz";
$pgv_lang["add_fact"]			= "Új esemény hozzáadása";
$pgv_lang["add_father"]			= "Apa hozzáadása";
$pgv_lang["add_husb"]			= "Férj hozzáadása";
$pgv_lang["add_husb_to_family"]		= "Férj hozzáadása a családhoz";
$pgv_lang["add_media"]			= "Új média-elem hozzáadása";
$pgv_lang["add_media_lbl"]		= "Média hozzáadása";
$pgv_lang["add_mother"]			= "Anya hozzáadása";
$pgv_lang["add_new_chil"] = "Új gyermek hozzáadása";
$pgv_lang["add_new_husb"]		= "Új férj hozzáadása";
$pgv_lang["add_new_wife"]		= "Új feleség hozzáadása";
$pgv_lang["add_note"]			= "Új megjegyzés hozzáfűzése";
$pgv_lang["add_note_lbl"]		= "Jegyzet hozzáadása";
$pgv_lang["add_sibling"]		= "Testvér hozzáadása";
$pgv_lang["add_son_daughter"]		= "Gyermek hozzáadása";
$pgv_lang["add_source"]			= "Új forrás idézés hozzáadása";
$pgv_lang["add_source_lbl"]		= "Forrás idézés hozzáadása";
$pgv_lang["add_wife"]			= "Feleség hozzáadása";
$pgv_lang["add_wife_to_family"]		= "Feleség hozzáadása a családhoz";
$pgv_lang["auto_thumbnail"]			= "Automatikus előnézet";
$pgv_lang["basic_search"]			= "keres";
$pgv_lang["birthdate_search"]		= "Születési dátum: ";
$pgv_lang["birthplace_search"]		= "Születési hely: ";
$pgv_lang["change"]					= "Változtat";
$pgv_lang["change_family_instr"]	= "Használja ezt az oldalt hogy változtasson vagy töröljön családtagokat.<br /><br />Minden családtagnál használhatja a Változtat linket hogy válasszon egy másik személyt a helyében. Az Eltávolít linket használhatja hogy a személyt eltávolítsa a családból.<br /><br />Miután készen van a változtatásokkal, nyomja meg a Mentés gombot, hogy elmentse a változtatásokat.<br />";
$pgv_lang["change_family_members"]	= "Családtagok változtatása";
$pgv_lang["changes_occurred"]		= "A következő változások történtek ezen a személyen:";
$pgv_lang["confirm_remove"]			= "Biztosan el akarja távolítani ezt a személyt ebből a családból?";
$pgv_lang["confirm_remove_object"]	= "Biztosan kívánja ennek az elemnek a törlését az adatbázisból?";
$pgv_lang["create_repository"]		= "Új Szervezet";
$pgv_lang["create_source"]              = "Új forrás létrehozása";
$pgv_lang["current_person"]         = "Aktuálissal azonos";
$pgv_lang["date"]			= "Dátum";
$pgv_lang["deathdate_search"]		= "Halálozási dátum: ";
$pgv_lang["deathplace_search"]		= "Halálozás helye: ";
$pgv_lang["delete_dir_success"]		= "Média és előnézet mappák sikeresen törölve.";
$pgv_lang["delete_file"]			= "Állomány törlése";
$pgv_lang["delete_repo"]			= "Szervezet Törlése";
$pgv_lang["directory_not_empty"]	= "A mappa nem üres.";
$pgv_lang["directory_not_exist"]	= "A mappa nem létezik.";
$pgv_lang["error_remote"]           = "Egy Külső weboldalt választott.";
$pgv_lang["error_same"]             = "Ugyanazt az weboldalt választotta.";
$pgv_lang["file_missing"]		= "Nem érkezett feltöltött állomány. Töltse fel újból.";
$pgv_lang["file_partial"]		= "Az állomány csak részben töltődött fel, kérem próbálja meg újra";
$pgv_lang["file_success"]		= "Az állomány feltöltése sikeresen befejeződött";
$pgv_lang["file_too_big"]		= "A feltölteni kívánt állomány elérte a maximális méretet";
$pgv_lang["folder"]		 			= "Mappa a szerveren";
$pgv_lang["gedcom_editing_disabled"]    = "A rendszer adminisztrátora nem engedélyezi ennek a GEDCOM-nak a szerkesztését.";
$pgv_lang["gedrec_deleted"]		= "A GEDCOM-bejegyzést sikeresen töröltük";
$pgv_lang["gen_thumb"]				= "Előnézet készítés";
$pgv_lang["gender_search"]			= "Neme: ";
$pgv_lang["generate_thumbnail"]		= "Automatikus előnézet generálása:";
$pgv_lang["hide_changes"]               = "A változások elrejtéséhez kattintson ide.";
$pgv_lang["highlighted"]		= "Kijelölt kép";
$pgv_lang["illegal_chars"]			= "Érvénytelen karakterek a névben.";
$pgv_lang["invalid_search_multisite_input"] = "Írja be valamelyiket: Név, Születési dátum, Születés helye, Halálozási dátum, Halálozás helye, és Nem ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Keressen újra de több információval mint csak a nem";
$pgv_lang["label_diff_server"]      = "Másik weboldal";
$pgv_lang["label_location"]         = "Weboldal Helye";
$pgv_lang["label_password_id2"]		= "Jelszó: ";
$pgv_lang["label_rel_to_current"]   = "Kapcsolat az aktuális személyhez";
$pgv_lang["label_same_server"]      = "Azonos weboldal";
$pgv_lang["label_site"]             = "Weboldal";
$pgv_lang["label_site_url"]         = "Weboldal URL:";
$pgv_lang["label_username_id2"]		= "Felhasználónév: ";
$pgv_lang["lbl_server_list"]        = "Használjon egy bejegyzett weboldalt.";
$pgv_lang["lbl_type_server"]        = "Írjon be egy új weboldalt.";
$pgv_lang["link_as_child"]			= "Ezt a személyt hozzákapcsolni egy létező családhoz mint gyermek";
$pgv_lang["link_as_husband"]		= "Ezt a személyt hozzákapcsolni egy létező családhoz mint férj";
$pgv_lang["max_upload_size"]		= "Maximum feltöltési nagyság: ";
$pgv_lang["media_deleted"]			= "A média mappa sikeresen törölve.";
$pgv_lang["media_exists"]			= "A Média állomány már létezik.";
$pgv_lang["media_file"]			= "Média állomány";
$pgv_lang["media_file_deleted"]		= "Média állomány sikeresen törölve.";
$pgv_lang["media_file_not_moved"]	= "Média állományt nem lehetett átrakni.";
$pgv_lang["media_file_not_renamed"]	= "Média állományt nem lehetett átrakni vagy átnevezni.";
$pgv_lang["media_thumb_exists"]		= "A Média előnézet már létezik.";
$pgv_lang["must_provide"]		= "Meg kell adnia egy ";
$pgv_lang["name_search"]			= "Név: ";
$pgv_lang["new_repo_created"]		= "Új Szervezet alkotva";
$pgv_lang["new_source_created"] 	= "Az új forrást sikeresen létrehoztuk.";
$pgv_lang["no_changes"]                 = "Jelenleg nincs olyan változás, melyet ellenőrizni kellene.";
$pgv_lang["no_upload"]				= "Média állományok feltöltése nem megengedett mert multi-média elemek használata nem megengedett vagy mert a média mappa nem irható.";
$pgv_lang["paste_id_into_field"]	= "Illessze be a következő azonosítót a szerkesztett mezőkbe, hogy hivatkozhasson erre a forrásra.";
$pgv_lang["paste_rid_into_field"]	= "Ragassza be ennek a Szervezet azonosítószámát az ön szerkesztési mezőjébe, hogy ez a Szervezet legyen a referencia";
$pgv_lang["privacy_not_granted"]        = "Önnek ehhez nincs jogosultsága: ";
$pgv_lang["privacy_prevented_editing"]  = "A diszkréciós beállítások alapján Ön nem szerkesztheti ezt a rekordot.";
$pgv_lang["show_changes"]		= "A rekordot módosították. A változások megtekintéséhez kattintson ide.";
$pgv_lang["thumb_genned"]			= "Előnézet #thumbnail# automatikusan generálva.";
$pgv_lang["thumbgen_error"]			= "Előnézet #thumbnail# nem lehetett automatikusan generálni.";
$pgv_lang["thumbnail"]			= "Előnézet";
$pgv_lang["title_remote_link"]      = "Külső link hozzáadás";
$pgv_lang["undo"]			= "Visszavonás";
$pgv_lang["undo_all"]				= "Minden Változtatás Visszavonása";
$pgv_lang["undo_all_confirm"]		= "Biztosan vissza von minden változtatást ebben a GEDCOM -ban?";
$pgv_lang["undo_successful"]		= "Sikeres visszavonás";
$pgv_lang["update_successful"]		= "A frissítés sikeresen megtörtént";
$pgv_lang["upload"]					= "Feltöltés";
$pgv_lang["upload_error"]		= "Hiba történt az Ön GEDCOM-állományának feltöltése közben.";
$pgv_lang["upload_media"]		= "Média állomány feltöltése";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />Válasszon állományokat a számítógépéről amit a szerverre fel akar tölteni. Minden álomány a <b>#MEDIA_DIRECTORY#</b> mappába lesz feltöltve vagy az alatta levő mappába.<br /><br />Az ön által választott mappa név a #MEDIA_DIRECTORY# -hoz lesz kapcsolva. Például, #MEDIA_DIRECTORY#csaladom. Ha az előnézet mappa nem létezik akkor létre lesz hozva.";
$pgv_lang["upload_successful"]		= "A feltöltés sikeres volt.";
$pgv_lang["view_change_diff"]		= "Változások megtekintése";


$pgv_lang["hebrew_givn"]			= "Héber keresztnevek";
$pgv_lang["hebrew_surn"]			= "Héber családnevek";
$pgv_lang["to_note"]				= "Közös jegyzethez";
$pgv_lang["to_repository"]			= "Szervezethez";
$pgv_lang["edit_repo"]				= "Szervezet szerkesztése";
$pgv_lang["select_events"]			= "Válasszon eseményt";
$pgv_lang["add_unlinked_note"]		= "Kapcsolat nélküli jegyzet hozzáadása";
$pgv_lang["add_shared_note_lbl"]	= "Közös jegyzet hozzáadása";
$pgv_lang["create_shared_note"]				= "Hozzunk létre egy új Közös jegyzetet";
?>
