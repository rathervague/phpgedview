<?php
/**
 * Lithuanian texts
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
 * @author Arturas Sleinius
 * @version $Id: editor.lt.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"] 		= "Patvirtinti/Atmesti pakeitimus";
$pgv_lang["replace"]				= "Pakeisti įrašą";
$pgv_lang["append"] 				= "Pridėti prie įrašo";
$pgv_lang["remove_object"]			= "Išmesti objektą";
$pgv_lang["remove_links"]			= "Išrinti nuorodas";
$pgv_lang["show_thumbnail"]			= "Rodyti mažus paveiksliukus";
$pgv_lang["link_media"]			= "Susieti Media";
$pgv_lang["to_person"]			= "Į asmenį";
$pgv_lang["to_family"]			= "Į šeimą";
$pgv_lang["to_source"]			= "Į šaltinį";
$pgv_lang["edit_fam"]				= "Keisti šeimą";
$pgv_lang["copy"]					= "Kopijuoti";
$pgv_lang["cut"]					= "Iškirpti";
$pgv_lang["sort_by_birth"]			= "Rūšiuoti pagal gimimo datas";
$pgv_lang["reorder_children"]		= "Perrūšiuoti vaikus";
$pgv_lang["add_from_clipboard"]		= "Pridėti iš laikinos atminties:";
$pgv_lang["record_copied"]			= "Įrašas nukopijuotas į laikiną atmintį";
$pgv_lang["add_unlinked_person"]	= "Pridėti nenusijusį asmenį";
$pgv_lang["server_file_advice"]			= "Jei norite išsaugoti orginalų vardą, tai nekeisti.";
$pgv_lang["server_file_advice2"]		= "Jūs galite suvesti URL, prasidedantį nuo &laquo;http://&raquo;.";
$pgv_lang["add_media_other_folder"]		= "Kita direktorija...  Prašom suvesti";
$pgv_lang["add_media_file"]				= "Egsiztuojanti audio/video byla serveryje";
$pgv_lang["main_media_ok1"]				= "Pagrindinė media byla <b>#GLOBALS[oldMediaName]#</b> sėkmingai pakeista į  <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]				= "Pagrindinė media byla <b>#GLOBALS[oldMediaName]#</b> sėkmingai perkelta iš <b>#GLOBALS[oldMediaFolder]#</b>  į   <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["add_obje"]				= "Pridėti naują multimedia(audio/video/foto) objektą";
$pgv_lang["edit_raw"]				= "Taisyti patį GEDCOM įrašą";
$pgv_lang["label_add_remote_link"]  = "Pridėti nuorodą";
$pgv_lang["label_gedcom_id"]        = "GEDCOM ID";
$pgv_lang["label_local_id"]         = "Asmens ID";
$pgv_lang["accept"] 				= "Priimti";
$pgv_lang["accept_all"] 			= "Priimti visus pakeitimus";
$pgv_lang["accept_successful"]		= "Šioje DB pakeitimai patvirtinti sėkmingai";
$pgv_lang["add_child"]				= "Pridėti vaiką";
$pgv_lang["add_child_to_family"]	= "Į šeimą pridėti vaiką";
$pgv_lang["add_father"] 			= "Pridėti naują tėvą";
$pgv_lang["add_husb"]				= "Pridėti vyrą";
$pgv_lang["add_husb_to_family"] 	= "Į šią šeimą pridėti vyrą";
$pgv_lang["add_media"]				= "Pridėti naują media objektą";
$pgv_lang["add_media_lbl"]			= "Pridėti media objektą";
$pgv_lang["add_mother"] 			= "Pridėti naują motiną";
$pgv_lang["add_new_chil"] = "Pridėti naują vaiką";
$pgv_lang["add_new_husb"]			= "Pridėti naują vyrą";
$pgv_lang["add_new_wife"]			= "Pridėti naują žmoną";
$pgv_lang["add_note"]				= "Pridėti naują pastabą";
$pgv_lang["add_note_lbl"]			= "Pridėti pastabą";
$pgv_lang["add_sibling"]			= "Pridėti brolį arba seserį";
$pgv_lang["add_son_daughter"]		= "Pridėti sūnų arba dukrą";
$pgv_lang["add_wife"]				= "Pridėti žmoną";
$pgv_lang["add_wife_to_family"] 	= "Į šią šeimą įrašyti žmoną";
$pgv_lang["advanced_search_discription"] = "Išplėstinė svetainės paieška";
$pgv_lang["basic_search"]			= "paieška";
$pgv_lang["basic_search_discription"] = "Bazinė svetainės paieška";
$pgv_lang["birthdate_search"]		= "Gimimo data:";
$pgv_lang["birthplace_search"]		= "Gimimo vieta:";
$pgv_lang["create_repository"]		= "Sukurti saugyklą";
$pgv_lang["create_source"]			= "Sukurti naują šaltinį";
$pgv_lang["date"]					= "Data";
$pgv_lang["deathdate_search"]		= "Mirties data:";
$pgv_lang["deathplace_search"]		= "Mirties vieta:";
$pgv_lang["delete_file"]			= "Ištrinti bylą";
$pgv_lang["delete_repo"]			= "Ištrinti saugyklą";
$pgv_lang["directory_not_empty"]	= "Katalogas nėra tuščias.";
$pgv_lang["directory_not_exist"]	= "Katalogas neegzistuoja.";
$pgv_lang["error_remote"]           = "Jūs pasirinkote nutolusią svetainę.";
$pgv_lang["error_same"]             = "Jūs pasirinkote tą pačią svetainę.";
$pgv_lang["file_missing"]			= "Negauta failo. Siųskite iš naujo.";
$pgv_lang["file_partial"]			= "Nusiųsta tik failo dalis, bandykite iš naujo";
$pgv_lang["file_success"]			= "Failas sėkmingai nusiųstas";
$pgv_lang["file_too_big"]			= "Siunčiamas failas viršijo maksimalų leistiną dydį";
$pgv_lang["gedcom_editing_disabled"]	= "Šio GEDCOM (giminės medžio) taisymas yra administratoriaus uždraustas.";
$pgv_lang["gen_thumb"]				= "Sugeneruoti mažą paveiksliuką.";
$pgv_lang["gender_search"]			= "Lytis:";
$pgv_lang["generate_thumbnail"]		= "Sugeneruoti mažą paveiksliuką automatiškai iš";
$pgv_lang["highlighted"]			= "Paryškintas paveikslas";
$pgv_lang["illegal_chars"]			= "Varde yra neleistinų simbolių";
$pgv_lang["label_diff_server"]      = "Kita svetainė";
$pgv_lang["label_password_id2"]		= "Slaptažodis:";
$pgv_lang["label_rel_to_current"]   = "Ryšys su dabartiniu asmeniu";
$pgv_lang["label_remote_id"]        = "Nutolusio asmens ID";
$pgv_lang["label_same_server"]      = "Ta pati svetainė";
$pgv_lang["label_site"]             = "Svetainė";
$pgv_lang["label_site_url"]         = "Svetainės URL:";
$pgv_lang["label_username_id2"]		= "Naudotojas:";
$pgv_lang["lbl_server_list"]        = "Naudoti egzistuojančią svetainę";
$pgv_lang["lbl_type_server"]        = "Suvesti naują svetainę.";
$pgv_lang["link_to_existing_media"]		= "Susieti su egzistuojančiu media įrašu";
$pgv_lang["max_upload_size"]		= "Didžiausias siunčiamas failas:";
$pgv_lang["media_file"] 			= "Media failas";
$pgv_lang["name_search"]			= "Vardas:";
$pgv_lang["new_repo_created"]		= "Nauja saugykla sukurta";
$pgv_lang["new_source_created"] 	= "Naujas šaltinis sukurtas sėkmingai.";
$pgv_lang["no_changes"] 			= "Šiuo metu nėra pakeitimų, kuriuos reikia peržiūrėti.";
$pgv_lang["no_upload"]				= "Media failų užkrovimas negalimas nes multi-media įrašai yra uždrausti arba media direktorija nėra įrašoma.";
$pgv_lang["photo_replace"] = "Ar norite pakeisti senesnę nuotrauką į naują?";
$pgv_lang["privacy_not_granted"]	= "Jūs neturite priėjimo prie";
$pgv_lang["thumb_genned"]			= "Mažas paveiksliukas automatiškai sugeneruotas.";
$pgv_lang["thumbgen_error"]			= "Negalima sugeneruoti mažo paveiksliuko iš ";
$pgv_lang["thumbnail"]				= "Mažas paveikslas";
$pgv_lang["upload_error"]			= "Buvo klaida nusiunčiant failą. ";
$pgv_lang["upload_media"]			= "Nusiųsti Media (audio/video/foto)  failus";
$pgv_lang["upload_successful"]		= "Nusiųsta sėkmingai";


?>
