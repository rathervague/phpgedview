<?php
/**
 * Romanian texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  PGV Development Team
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
 * @author Mircea Uifălean
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: editor.ro.php 4222 2008-11-02 01:33:01Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]			= "Adaugă o nouă căsătorie";
$pgv_lang["edit_concurrency_change"] = "Această înregistrare a fost schimbată ultima dată de către <i>#CHANGEUSER#</i> la #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "Înregistrarea cu id-ul #PID# a fost schimbată de un alt utilizator de când aţi accesat-o ultima dată.";
$pgv_lang["edit_concurrency_msg1"]	= "A apărut o eroare când se construia formularul de modificare.  Un alt utilizator s-ar putea să fi schimbat această înregistrare de când aţi vizionat-o ultima dată.";
$pgv_lang["edit_concurrency_reload"]	= "Vă rugăm folosiţi butonul de 'Înapoi' de la navigatorul dumneavoastră şi reîncărcaţi pagina anterioară pentru a fi siguri că lucraţi cu cea mai recentă înregistrare.";
$pgv_lang["admin_override"]			= "Opţiunea de administrator";
$pgv_lang["no_update_CHAN"]			= "Nu actualizaţi înregistrarea CHAN (Ultima schimbare)";
$pgv_lang["select_events"]			= "Aleceţi evenimentele";
$pgv_lang["source_events"]			= "Asociaţi evenimentele cu această sursă";
$pgv_lang["advanced_name_fields"]	= "Nume adiţionale (poreclă, nume după căsătorie, etc.)";
$pgv_lang["accept_changes"] 		= "Acceptă / Respinge schimbările";
$pgv_lang["replace"]				= "Înlocuieşte înregistrarea";
$pgv_lang["append"] 				= "Adaugă înregistrarea";
$pgv_lang["review_changes"] 		= "Revizuieşte schimbările GEDCOM";
$pgv_lang["remove_object"]			= "Şterge obiectul";
$pgv_lang["remove_links"]			= "Şterge linkurile";
$pgv_lang["media_not_deleted"]		= "Directorul Media nu a fost şters.";
$pgv_lang["thumbs_not_deleted"]		= "Directorul cu thumbnailuri nu a fost şters.";
$pgv_lang["thumbs_deleted"]			= "Directorul cu thumbnailuri a fost şters cu succes.";
$pgv_lang["show_thumbnail"]			= "Arată thumbnailuri";
$pgv_lang["link_media"]				= "Leagă media";
$pgv_lang["to_person"]				= "De persoana";
$pgv_lang["to_family"]				= "De familia";
$pgv_lang["to_source"]				= "De sursa";
$pgv_lang["edit_fam"]				= "Modifică familia";
$pgv_lang["copy"]					= "Copiază";
$pgv_lang["cut"]					= "Taie";
$pgv_lang["sort_by_birth"]			= "Sortează după datele naşterii";
$pgv_lang["reorder_children"]		= "Rearanjează copiii";
$pgv_lang["add_from_clipboard"]		= "Adaugă din clipboard: ";
$pgv_lang["record_copied"]			= "Înregistrează ce s-a copiat în clipboard";
$pgv_lang["add_unlinked_person"]	= "Adaugă o persoană nelegată";
$pgv_lang["add_unlinked_source"]	= "Adaugă o sursă nelegată";
$pgv_lang["server_file"]				= "Numele fişierului pe server";
$pgv_lang["server_file_advice"]			= "Nu schimbaţi pentru a păstra numele fişierului original.";
$pgv_lang["server_file_advice2"]		= "Puteţi introduce un URL, începând cu &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]		= "Puteţi introduce până la #GLOBALS[MEDIA_DIRECTORY_LEVELS]# nume de directoare care urmează după &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; impicit.<br />Nu introduceţi partea cu &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; din numele directorului de destinaţie.";
$pgv_lang["server_folder_advice2"]		= "Această intrare este ignorată dacă aţi introdus un URL în câmpul numelui.";
$pgv_lang["add_linkid_advice"]			= "Introduceţi sau căutaţi ID-ul persoanei, familiei, sau sursei cu care ar trebui să fie legat acest articol.";
$pgv_lang["use_browse_advice"]			= "Folosiţi butonul &laquo;Răsfoieşte&raquo; pentru a căuta în calculator fişierul dorit.";
$pgv_lang["add_media_other_folder"]		= "Alt director... vă rugăm tipăriţi";
$pgv_lang["add_media_file"]				= "Fişierul Media existent pe server";
$pgv_lang["main_media_ok1"]				= "Fişierul media principal <b>#GLOBALS[oldMediaName]#</b> a fost redenumit cu succes în <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]				= "Fişierul media principal <b>#GLOBALS[oldMediaName]#</b> a fost mutat cu succes din <b>#GLOBALS[oldMediaFolder]#</b> în <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]				= "Fişierul media principal a fost mutat şi redenumit cu succes din <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> to <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "Fişierul media principal <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> nu există.";
$pgv_lang["main_media_fail1"]			= "Fişierul media principal <b>#GLOBALS[oldMediaName]#</b> nu a putut fi redenumit în <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Fişierul media principal <b>#GLOBALS[oldMediaName]#</b> nu a putut fi mutat din <b>#GLOBALS[oldMediaFolder]#</b> în <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]			= "Fişierul media principal nu a putut fi mutat şi redenumit din <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> în <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Notă: Trebuie să activaţi facilitatea 'Foloseşte restricţia de intimitate GEDCOM (RESN)' pentru ca această setare să aibă efect.";
$pgv_lang["thumb_media_ok1"]			= "Fişierul thumbnail <b>#GLOBALS[oldMediaName]#</b> a fost redenumit cu succes în <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]			= "Fişierul thumbnail <b>#GLOBALS[oldMediaName]#</b> a fost mutat cu succes din <b>#GLOBALS[oldThumbFolder]#</b> în <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]			= "Fişierul thumbnail a fost mutat şi redenumit cu succes din <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> în <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]			= "Fişierul thumbnail <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> nu există.";
$pgv_lang["thumb_media_fail1"]			= "Fişierul thumbnail <b>#GLOBALS[oldMediaName]#</b> nu a putut fi redenumit în <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Fişierul thumbnail <b>#GLOBALS[oldMediaName]#</b> nu a putut fi mutat din <b>#GLOBALS[oldThumbFolder]#</b> în <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]			= "Fişierul thumbnail nu a putut fi mutat şi redenumit din <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> în <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]				= "Adaugă un nou asociat";
$pgv_lang["edit_sex"]				= "Modifică sexul";
$pgv_lang["add_obje"]				= "Adaugă un nou obiect multimedia";
$pgv_lang["add_name"]				= "Adaugă un nou nume";
$pgv_lang["edit_raw"]				= "Modifică înregistrarea GEDCOM în modul brut";
$pgv_lang["label_add_remote_link"]  = "Adaugă link";
$pgv_lang["label_gedcom_id"]        = "ID-ul bazei de date";
$pgv_lang["label_local_id"]         = "ID-ul persoanei";
$pgv_lang["accept"] 				= "Acceptă";
$pgv_lang["accept_all"] 			= "Acceptă toate schimbările";
$pgv_lang["accept_gedcom"]			= "Decide pentru fiecare schimbare dacă o acceptaţi sau o respingeţi.<br /><br />Pentru a accepta toate schimbările odată, daţi click pe <b>\"Acceptă toate schimbările\"</b> în caseta de mai jos.<br />Pentru a primi mai multe informaţii despre o modificare,<br />daţi click pe <b>\"Vezi diferenţele modificării\"</b> pentru a vedea diferenţele,<br />sau daţi click pe <b>\"Vizualizează înregistrarea GEDCOM\"</b> pentru a vedea informaţiile noi în format GEDCOM.";
$pgv_lang["accept_successful"]		= "Modificarea a fost acceptată cu succes în baza de date";
$pgv_lang["add_child"]				= "Adaugă copil";
$pgv_lang["add_child_to_family"]	= "Adaugă un copil la această familie";
$pgv_lang["add_fact"]				= "Adaugă un nou fapt";
$pgv_lang["add_father"] 			= "Adaugă un nou tată";
$pgv_lang["add_husb"]				= "Adaugă soţ";
$pgv_lang["add_husb_to_family"] 	= "Adaugă un soţ acestei familii";
$pgv_lang["add_media"]				= "Adaugă un articol media";
$pgv_lang["add_media_lbl"]			= "Adaugă media";
$pgv_lang["add_mother"] 			= "Adaugă o nouă mamă";
$pgv_lang["add_new_chil"] 			= "Adaugă un nou copil";
$pgv_lang["add_new_husb"]			= "Adaugă un nou soţ";
$pgv_lang["add_new_wife"]			= "Adaugă o nouă soţie";
$pgv_lang["add_note"]				= "Adaugă o notă nouă";
$pgv_lang["add_note_lbl"]			= "Adaugă notă";
$pgv_lang["add_sibling"]			= "Adaugă un frate sau soră";
$pgv_lang["add_son_daughter"]		= "Adaugă un fiu sau o fiică";
$pgv_lang["add_source"] 			= "Adaugă o nouă citaţie de sursă";
$pgv_lang["add_source_lbl"] 		= "Adaugă citaţie de sursă";
$pgv_lang["add_wife"]				= "Adaugă soţie";
$pgv_lang["add_wife_to_family"] 	= "Adaugă o soţie la această familie";
$pgv_lang["advanced_search_discription"] = "Căutare avansată pe site";
$pgv_lang["auto_thumbnail"]			= "Thumbnalil automatic";
$pgv_lang["basic_search"]			= "caută";
$pgv_lang["basic_search_discription"] = "Cautare de bază pe site";
$pgv_lang["birthdate_search"]		= "Data naşterii: ";
$pgv_lang["birthplace_search"]		= "Locul naşterii: ";
$pgv_lang["change"]					= "Schimbă";
$pgv_lang["change_family_instr"]	= "Folosiţi această pagină pentru a schimba sau a şterge membri familiei.<br /><br />Pentru fiecare membru din familie, puteţi folosi linkul Modifică pentru a alege o persoană diferită care să umple acel rol în familie.  Puteţi de-asemenea să folosiţi linkul Şterge pentru a şterge acea persoană din familie.<br /><br />Când aţi terminat de modificat membri familiei, daţi click pe butonul Salvează pentru a salva schimbările.<br />";
$pgv_lang["change_family_members"]	= "Modifică membri familiei";
$pgv_lang["changes_occurred"]		= "Următoarele schimbări au fost făcute pentru această înregistrare:";
$pgv_lang["confirm_remove"]			= "Sunteţi sigur(ă) că doriţi să ştergeţi această persoană din familie ?";
$pgv_lang["confirm_remove_object"]	= "Sunteţi sigur că doriţi să ştergeţi acest obiect din baza de date ?";
$pgv_lang["create_repository"]		= "Crează depozit";
$pgv_lang["create_source"]			= "Crează o nouă sursă";
$pgv_lang["current_person"]         = "La fel ca şi persoana curentă";
$pgv_lang["date"]					= "Data";
$pgv_lang["deathdate_search"]		= "Data decesului: ";
$pgv_lang["deathplace_search"]		= "Locul decesului: ";
$pgv_lang["delete_dir_success"]		= "Directoarele de Media şi thumbnail au fost şterse cu succes.";
$pgv_lang["delete_file"]			= "Şterge fişierul";
$pgv_lang["delete_repo"]			= "Şterge depozitul";
$pgv_lang["directory_not_empty"]	= "Directorul nu este gol.";
$pgv_lang["directory_not_exist"]	= "Directorul nu există.";
$pgv_lang["error_remote"]           = "Aţi ales un site de la distanţă.";
$pgv_lang["error_same"]             = "Aţi ales acelaşi site.";
$pgv_lang["external_file"]			= "Acest obiect media nu există ca fişier pe acest server.  Nu poate fi şters, mutat, sau redenumit.";
$pgv_lang["file_missing"]			= "Nu a fost primit nici un fişier. Vă rugăm uploadaţi din nou.";
$pgv_lang["file_partial"]			= "Fişierul a fost uploadat doar parţial, vă rugăm încercaţi din nou";
$pgv_lang["file_success"]			= "Fişierul a fost uploadat cu succes";
$pgv_lang["file_too_big"]			= "Fişierul uploadat depăşeşte limita permisă";
$pgv_lang["folder"]		 			= "Directorul de pe server";
$pgv_lang["gedcom_editing_disabled"]	= "Editarea acestui GEDCOM a fost dezactivată de către administrator.";
$pgv_lang["gedcomid"]				= "ID-ul înregistrării INDI GEDCOM";
$pgv_lang["gedrec_deleted"] 		= "Înregistrarea GEDCOM a fost ştearsă cu succes.";
$pgv_lang["gen_thumb"]				= "Crează thumbnail";
$pgv_lang["gender_search"]			= "Sex: ";
$pgv_lang["generate_thumbnail"]		= "Generează thumbnail automat din ";
$pgv_lang["hebrew_givn"]			= "Prenumele ebraic";
$pgv_lang["hebrew_surn"]			= "Numele de familie ebraic";
$pgv_lang["hide_changes"]			= "Daţi click aici pentru a ascunde modificările.";
$pgv_lang["highlighted"]			= "Imaginea evidenţiată";
$pgv_lang["illegal_chars"]			= "Nume gol sau caractere ilegale în nume";
$pgv_lang["invalid_search_multisite_input"] = "Vă rugăm introduceţi una din următoarele informaţii:  Nume, Data naşterii, Locul naşterii, Data decesului, Locul decesului, şi sexul ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Vă rugăm căutaţi din nou cu mai multe informaţii decât sexul";
$pgv_lang["label_diff_server"]      = "Site diferit";
$pgv_lang["label_location"]         = "Locaţia siteului";
$pgv_lang["label_password_id2"]		= "Parola: ";
$pgv_lang["label_rel_to_current"]   = "Relaţia cu persoana curentă";
$pgv_lang["label_remote_id"]        = "ID-ul persoanei de la distanţă";
$pgv_lang["label_same_server"]      = "Acelaşi site";
$pgv_lang["label_site"]             = "Site";
$pgv_lang["label_site_url"]         = "URL-ul siteului:";
$pgv_lang["label_username_id2"]		= "Utilizator: ";
$pgv_lang["lbl_server_list"]        = "Foloseşte un site existent.";
$pgv_lang["lbl_type_server"]        = "Tipăriţi un nou site.";
$pgv_lang["link_as_child"]			= "Legaţi această persoană la o familie existentă ca şi copil";
$pgv_lang["link_as_husband"]		= "Legaţi această persoană la o familie existentă ca şi soţ";
$pgv_lang["link_success"]			= "Linkul a fost adăugat cu succes";
$pgv_lang["link_to_existing_media"]	= "Fă legătura cu un articol media existent";
$pgv_lang["max_media_depth"]		= "Puteţi să mergeţi doar #MEDIA_DIRECTORY_LEVELS# directoare în adâncime";
$pgv_lang["max_upload_size"]		= "Marimea de upload maximă: ";
$pgv_lang["media_deleted"]			= "Directorul media a fost şters cu succes.";
$pgv_lang["media_exists"]			= "Fişierul media există deja.";
$pgv_lang["media_file"] 			= "Fişierul media de uploadat";
$pgv_lang["media_file_deleted"]		= "Fişierul media a fost şters cu succes.";
$pgv_lang["media_file_moved"]		= "Fişierul media a fost mutat.";
$pgv_lang["media_file_not_moved"]	= "Fişierul media nu a putut fi mutat.";
$pgv_lang["media_file_not_renamed"]	= "Fişierul media nu a putut fi mutat sau redenumit.";
$pgv_lang["media_thumb_exists"]		= "Thumbnailul media există deja.";
$pgv_lang["multiple_gedcoms"]		= "Acest fişier este legat de o altă bază de date genealogică de pe acest server.  Nu poate fi şters, mutat, sau redenumit până când aceste legături sunt şterse.";
$pgv_lang["must_provide"]			= "Trebuie să furnizaţi ";
$pgv_lang["name_search"]			= "Nume: ";
$pgv_lang["new_repo_created"]		= "Creat depozit nou";
$pgv_lang["new_source_created"] 	= "Sursă noua creată cu succes.";
$pgv_lang["no_changes"] 			= "Nu există în prezent modificări care trebuie revizuite.";
$pgv_lang["no_known_servers"]		= "Nu există servere cunoscute<br />Nici un rezultat nu va fi găsit";
$pgv_lang["no_temple"]				= "Nici un templu - Ordonanţă de viaţă";
$pgv_lang["no_upload"]				= "Uploadarea fişierelor media nu este permisă deoarece articolele multimedia au fost dezactivate sau pentru că directorul media nu are drept de scriere.";
$pgv_lang["paste_id_into_field"]	= "Lipiţi următorul ID în câmpurile dumneavoastră de editare pentru a referi înregistrarea proaspăt creată ";
$pgv_lang["paste_rid_into_field"]	= "Lipiţi următorul ID de depozit în campurile dumneavoastră de editare pentru a referi acest depozit ";
$pgv_lang["photo_replace"] 			= "Doriţi să înlocuiţi o fotografie mai veche cu aceasta ?";
$pgv_lang["privacy_not_granted"]	= "Nu aveţi acces la";
$pgv_lang["privacy_prevented_editing"]	= "Setările de confidenţialitate vă împiedică să modificaţi această înregistrare.";
$pgv_lang["record_marked_deleted"]		= "Această înregistrare a fost marcata pentru ştergere după aprobarea administratorului.";
$pgv_lang["replace_with"]			= "Înlocuieşte cu";
$pgv_lang["show_changes"]			= "Această înregistrare a fost actualizată.  Daţi click aici pentru a arăta schimbările.";
$pgv_lang["thumb_genned"]			= "Thumbnailul #thumbnail# a fost generat automat.";
$pgv_lang["thumbgen_error"]			= "Thumbnailul #thumbnail# nu a putut fi generat automat.";
$pgv_lang["thumbnail"]				= "Thumbnailul de uploadat";
$pgv_lang["title_remote_link"]      = "Adaugă link de la distanţă";
$pgv_lang["undo"]					= "Anulează";
$pgv_lang["undo_all"]				= "Anulează toate schimbările";
$pgv_lang["undo_all_confirm"]		= "Sunteţi sigur(ă) că doriţi să anulaţi toate schimbările pentru acest GEDCOM ?";
$pgv_lang["undo_successful"]		= "Anulare reuşită";
$pgv_lang["update_successful"]		= "Actualizare reuşită";
$pgv_lang["upload"]					= "Upload";
$pgv_lang["upload_error"]			= "A existat o eroare la uploadarea fişierului dumneavoastră.";
$pgv_lang["upload_media"]			= "Uploadează fişiere media";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />Selectaţi fişiere de pe calculatorul dumneavoastră pentru a putea fi uploadate pe serverul dumneavoastră.  Toate fişierele for fi uploadate în directorul <b>#MEDIA_DIRECTORY#</b> sau unul din subdirectoarele lui.<br /><br />Numele directoarelor specificate vor fi adăugate la #MEDIA_DIRECTORY#. De exemplu, #MEDIA_DIRECTORY#familia_mea. Dacă directorul pentru thumbnailuri nu există, este creat automat.";
$pgv_lang["upload_successful"]		= "Upload reuşit.";
$pgv_lang["view_change_diff"]		= "Vezi diferenţele modificării";

?>
