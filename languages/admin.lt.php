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
 * @version $Id: admin.lt.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["user"]					= "Pasisveikinęs vartotojas";
$pgv_lang["step2"]					= "Žingsnis 2 iš 4:";
$pgv_lang["gedadmin"]				= "GEDCOM administratorius";
$pgv_lang["full_name"]				= "Pilnas vardas";
$pgv_lang["error_header"]			= "GEDCOM failas , <b>#GEDCOM#</b>,  nurodytoje vietoje neegzistuoja.";
$pgv_lang["confirm_folder_delete"] = "Ar Jūs įsitikinęs, kad norite ištrinti šį katalogą?";
$pgv_lang["manage_gedcoms"] 		= "Tvarkyti GEDCOM'us ir taisyti saugumo informaciją";
$pgv_lang["no_thumb_dir"]			= "Mažų paveiksliukų direktorija neegzistuoja ir negali būti sukurta.";
$pgv_lang["move_to"]				= "Eiti į -->";
$pgv_lang["folder_created"] 		= "Sukurta direktorija";
$pgv_lang["folder_no_create"]		= "Katalogas negali būti sukurti";
$pgv_lang["security_no_create"]		= "Saugumo įspėjimas: Failas <b><i>index.php</i></b> neegzistuoja direktorijoje ";
$pgv_lang["security_not_exist"]		= "Saugumo įspėjimas: Negalima sukurti failo  <b><i>index.php</i></b> direktorijoje ";
$pgv_lang["label_add_server"]       = "Pridėti";
$pgv_lang["label_delete"]           = "Ištrinti";
$pgv_lang["add_gedcom"] 			= "Pridėti GEDCOM";
$pgv_lang["add_new_gedcom"] 		= "Sukurti naują GEDCOM'ą";
$pgv_lang["admin_approved"] 		= "Jūsų prisijungimo vardas serveryje  #SERVER_NAME# buvo patvirtintas ";
$pgv_lang["admin_gedcom"]			= "Adminstruoti GEDCOM";
$pgv_lang["admin_geds"]				= "Duomenų ir GEDCOM administravimas";
$pgv_lang["admin_info"]				= "Informaciniai";
$pgv_lang["admin_site"]				= "Puslapio administravimas";
$pgv_lang["administration"] 		= "Administravimas";
$pgv_lang["ansi_encoding_detected"] = "Aptiktas ANSI failo kodavimas. PhpGedView geriausiai dirba su failais koduotais UTF-8.";
$pgv_lang["apply_privacy"]			= "Pritaikyti saugumo nustatymus?";
$pgv_lang["bytes_read"] 			= "Nuskaityta baitų:";
$pgv_lang["calc_marr_names"]		= "Skaičiuoja pavardes po santuokos";
$pgv_lang["change_id"]				= "Pakeisti asmens ID į:";
$pgv_lang["choose_priv"]			= "Pasirinkite privatumo lygį:";
$pgv_lang["cleanup_places"] 		= "Išvalyti vietoves";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Norėdami patekti į kilmės medį spauskite čia.";
$pgv_lang["configuration"]			= "Nustatymai";
$pgv_lang["confirm_user_delete"]	= "Ar tikrai norite išmesti naudotoją";
$pgv_lang["create_user"]			= "Sukurti varotoją";
$pgv_lang["dataset_exists"] 		= "GEDCOM'as su tokiu vardu jau buvo įkeltas į šią duomenų bazę.";
$pgv_lang["do_not_change"]			= "Nekeisti";
$pgv_lang["download_gedcom"]		= "Persisiųsti GEDCOM'ą";
$pgv_lang["empty_dataset"]			= "Ar norite ištrinti senus duomenis ir pakeisti juos naujais?";
$pgv_lang["empty_lines_detected"]	= "GEDCOM faile aptikta tuščių eilučių. Išvalant šios tuščios eilutės bus ištrintos.";
$pgv_lang["error_ban_server"]       = "Blogas IP adresas.";
$pgv_lang["error_header_write"] 	= "GEDCOM (giminės medžio) failas,  <b>#GEDCOM#</b>,  neturi įrašymo teisių. Patikrinkite failo parametrus ir priėjimo teises.";
$pgv_lang["error_siteauth_failed"]	= "Nepavyko autentifikuotis į nutolusią svetainę";
$pgv_lang["error_url_blank"]		= "Prašom nepalikti nutolusios svetainės antrašės ir URL tuščių";
$pgv_lang["example_date"]			= "Blogos datos iš Jūsų GEDCOM failo pavyzdys:";
$pgv_lang["found_record"]			= "Įrašas rastas";
$pgv_lang["gedcom_config_write_error"]	= "KLAIDA!!! Negalima įrašyti į  GEDCOM nustatymų failą.";
$pgv_lang["gedcom_downloadable"] 	= "Šis GEDCOM failas gali būti paimtas per internetą !<br /> Problemai ištaisyti pažiūrėkite SECURITY dalį faile  <a href=\"readme.txt\"><b>readme.txt</b></a>";
$pgv_lang["gedcom_file"]			= "GEDCOM failas:";
$pgv_lang["import_complete"]		= "Įkėlimas baigtas";
$pgv_lang["import_marr_names"]		= "Įkelti pavardes po santuokos";
$pgv_lang["import_progress"]		= "Įkėlimas vyksta ...";
$pgv_lang["inc_languages"]			= "Kalbos";
$pgv_lang["label_added_servers"]	= "Pridėti nutolę serveriai";
$pgv_lang["label_banned_servers"]   = "Uždrausti svetaines pagal IP";
$pgv_lang["label_families"]         = "Šeimos";
$pgv_lang["label_gedcom_id2"]       = "GEDCOM ID:";
$pgv_lang["label_individuals"]      = "Asmenys";
$pgv_lang["label_new_server"]       = "Pridėti naują svetainę";
$pgv_lang["label_password_id"]		= "Slaptažodis";
$pgv_lang["label_remove_ip"]		= "Uždrausti IP Adresą (Pvz: 198.128.*.*):";
$pgv_lang["label_server_url"]       = "Svetainės URL/IP";
$pgv_lang["label_username_id"]		= "Naudotojas";
$pgv_lang["logfile_content"]		= "Log failo turinys";
$pgv_lang["merge_records"]			= "Sujungti įrašus";
$pgv_lang["performing_validation"]	= "Atliekamas GEDCOM patikrinimas...";
$pgv_lang["pgv_registry"]			= "Žiūrėti kitus puslapius, kurie naudoja PhpGedView";
$pgv_lang["phpinfo"]				= "PHP informacija";
$pgv_lang["please_be_patient"]		= "Kantrybės";
$pgv_lang["reading_file"]			= "Skaitome GEDCOM failą";
$pgv_lang["readme_documentation"]	= "README dokumentacija";
$pgv_lang["rootid"] 				= "Kilmės medžio pagrindinis asmuo";
$pgv_lang["select_an_option"]		= "Pasirinkite iš sąrašo:";
$pgv_lang["siteadmin"]				= "Svetainės administratorius";
$pgv_lang["skip_cleanup"]			= "Praleisti išvalymą";
$pgv_lang["time_limit"]				= "Laiko apribojimas:";
$pgv_lang["title_manage_servers"]   = "Valdyti svetaines";
$pgv_lang["update_myaccount"]		= "Atnaujinti mano prisijungimo informaciją";
$pgv_lang["update_user"]			= "Atnaujinti naudotojo prisijungimo informaciją";
$pgv_lang["upload_gedcom"]			= "Nusiųsti GEDCOM'ą";
$pgv_lang["user_contact_method"]	= "Kokiam susisiekimo metodui teikiate primenybę";
$pgv_lang["user_create_error"]		= "Negalima pridėti naudotojo. Bandykite  iš naujo.";
$pgv_lang["user_created"]			= "Naudotojas sėkmingai sukurtas.";
$pgv_lang["user_default_tab"]		= "Kortelė, kuri rodoma asmens informacijos puslapyje";
$pgv_lang["validate_gedcom"]		= "Tikrinamas GEDCOM";
$pgv_lang["verified"]				= "Naudotojas save patvirtino";
$pgv_lang["verified_by_admin"]		= "Administratorius patvirtino naudotoją";
$pgv_lang["view_logs"]				= "Žiūrėti log failus";
$pgv_lang["view_readme"]			= "Žiūrėti readme.txt failą";
$pgv_lang["visibleonline"]			= "Kai prisijungęs, matomas kitiems naudotojams";
$pgv_lang["visitor"]				= "Lankytojas";
$pgv_lang["you_may_login"]			= "puslapio administratoriaus. Dabar Jūs galite prisijungti prie PhpGedView naudojant nuorodą:";


?>
