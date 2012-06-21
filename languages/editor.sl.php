<?php
/**
 * Slovenian texts
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
 *
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @translator Leon Kos
 * @version $Id: editor.sl.php 6442 2009-11-24 19:45:23Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]			= "Dodaj podrobnosti poroke";
$pgv_lang["edit_concurrency_change"] 		= "Ta zapis je nazadnje spremenil/a <i>#CHANGEUSER#</i> dne #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]		= "Zapis z id #PID# je med tem spremenil drugi uporabnik.";
$pgv_lang["edit_concurrency_msg1"]		= "Napaka pri izdelavi obrazca Urejanje.  Lahko da je drug uporabnik med tem spremenil zapis.";
$pgv_lang["edit_concurrency_reload"]		= "Uporabite gumb za prejšnjo starn v brskalniku in obnovite stran, da si zagotovite delo s svežim zapisom.";
$pgv_lang["admin_override"]			= "Možnost upravitelja";
$pgv_lang["no_update_CHAN"]			= "Ne obnovi zapisa CHAN (Zadnja sprememba)";
$pgv_lang["select_events"]			= "Izberi dogodke";
$pgv_lang["source_events"]			= "Poveži dogodke s tem virom";
$pgv_lang["advanced_name_fields"]		= "Dodatna imena (vzdevek, poročno ime, itd.)";
$pgv_lang["accept_changes"] 			= "Sprejmi / Zavrni spremembe";
$pgv_lang["replace"]				= "Zamenjaj zapis";
$pgv_lang["append"] 				= "Dodaj zapisu";
$pgv_lang["review_changes"] 			= "Preglej spremembe GEDCOM";
$pgv_lang["remove_object"]			= "Odstrani objekt";
$pgv_lang["remove_links"]			= "Odstrani povezave";
$pgv_lang["media_not_deleted"]			= "Imenik fotografij ni bil odstranjen.";
$pgv_lang["thumbs_not_deleted"]			= "Imenik sličic ni bil odstranjen.";
$pgv_lang["thumbs_deleted"]			= "Imenik sličic je bil uspešno odstranjen.";
$pgv_lang["show_thumbnail"]			= "Pokaži sličice";
$pgv_lang["link_media"]				= "Poveži fotografijo";
$pgv_lang["to_person"]				= "Na osebo";
$pgv_lang["to_family"]				= "Na družino";
$pgv_lang["to_source"]				= "Na vir";
$pgv_lang["to_note"]				= "V skupni zapisek";
$pgv_lang["to_repository"]			= "V kraj počitka";
$pgv_lang["edit_fam"]				= "Uredi družino";
$pgv_lang["edit_repo"]				= "Uredi skladišče";
$pgv_lang["copy"]				= "Kopiraj";
$pgv_lang["cut"]				= "Izreži";
$pgv_lang["sort_by_birth"]			= "Razvrsti po rojstnih datumih";
$pgv_lang["reorder_children"]			= "Razporedi otroke";
$pgv_lang["reorder_media"]			= "Razvrsti fotografije";
$pgv_lang["reorder_media_title"]		= "Povleci-in-spusti sličice za razporeditev fotografij.";
$pgv_lang["reorder_media_window"]		= "Razvrsti fotografije (okno)";
$pgv_lang["reorder_media_window_title"]		= "Klikni na vrstico, nato povleci-in-spusti za razvrstitev fotografij ";
$pgv_lang["reorder_media_save"]			= "Shrani razvrščene fotografije v bazo.";
$pgv_lang["reorder_media_reset"]		= "Ponastavi prvotni vrstni red";
$pgv_lang["reorder_media_cancel"]		= "Prekini in vrni se";
$pgv_lang["add_from_clipboard"]			= "Dodaj v odložišče: ";
$pgv_lang["record_copied"]			= "Zapis je bil shranjen v odložišče";
$pgv_lang["add_unlinked_person"]		= "Dodaj nepovezano osebo";
$pgv_lang["add_unlinked_source"]		= "Dodaj nepovezan vir";
$pgv_lang["add_unlinked_note"]			= "Dodaj nepovezan zapisek";
$pgv_lang["add_unlinked"]			= "Nepovezani  zapisi";
$pgv_lang["server_file"]			= "Ime datoteke na strežniku";
$pgv_lang["server_file_advice"]			= "Ne spreminjaj za ohranitev prvotnega imena datoteke.";
$pgv_lang["server_file_advice2"]		= "Lahko vnesete URL, ki se začne z &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]		= "Lahko vnesete do #GLOBALS[MEDIA_DIRECTORY_LEVELS]# nivojev imenikov, ki sledijo privzetemu &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Ne vnestite &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; del ciljnega imenika.";
$pgv_lang["server_folder_advice2"]		= "Ta vnos je prezrt, če ste vnesli URL v polje za ime datoteke.";
$pgv_lang["add_linkid_advice"]			= "Vnesi ali išči ID osebe, družine ali vira za povezavo na to fotografijo.";
$pgv_lang["use_browse_advice"]			= "Uporabite gumb &laquo;Brskaj&raquo; za iskanje datoteke na lokalnem računalniku.";
$pgv_lang["add_media_other_folder"]		= "Drug imenik... Prosim, natipkajte";
$pgv_lang["add_media_file"]			= "Existing Media file on server";
$pgv_lang["main_media_ok1"]			= "Osnovna datoteka fotografije <b>#GLOBALS[oldMediaName]#</b> uspešno preimenovana v <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]			= "Osnovna datoteka fotografije <b>#GLOBALS[oldMediaName]#</b> uspešno premaknjena iz <b>#GLOBALS[oldMediaFolder]#</b> v <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]			= "Osnovna datoteka fotografije je bila uspešno premaknjena in preimenovana iz <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> v <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "Osnovna datoteka fotografije <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> does not exist.";
$pgv_lang["main_media_fail1"]			= "Osnovna datoteka fotografije <b>#GLOBALS[oldMediaName]#</b> ne more biti preimenovana v <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Osnovna datoteka fotografije <b>#GLOBALS[oldMediaName]#</b> ne more biti premaknjena iz <b>#GLOBALS[oldMediaFolder]#</b> v <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]			= "Osnovna datoteka fotografije ne more biti premaknjena in preimenovana iz <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> v <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]			= "Opomba: Vključiti morate možnost 'Uporabi GEDCOM (RESN) omejitev zasebnosti', da bodo nastavitve upoštevane.";
$pgv_lang["thumb_media_ok1"]			= "Datoteka sličice <b>#GLOBALS[oldMediaName]#</b> uspešno preimenovana v <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]			= "Datoteka sličice <b>#GLOBALS[oldMediaName]#</b> uspešno premaknjena iz <b>#GLOBALS[oldThumbFolder]#</b> to <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]			= "Datoteka sličice je bila uspešno premaknjena in preimenovana iz <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> v <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]			= "Datoteka sličice <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> ne obstaja.";
$pgv_lang["thumb_media_fail1"]			= "Datoteka sličice <b>#GLOBALS[oldMediaName]#</b> ne more biti preimenovana v <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Datoteka sličice <b>#GLOBALS[oldMediaName]#</b> ne more biti premaknjena iz <b>#GLOBALS[oldThumbFolder]#</b> v <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]			= "Datoteka sličice ne more biti premaknjena in preimenovana iz <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> v <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]				= "Dodaj povezano osebo";
$pgv_lang["edit_sex"]				= "Določi spol";
$pgv_lang["add_obje"]				= "Dodaj novo fotografijo";
$pgv_lang["add_name"]				= "Dodaj novo ime";
$pgv_lang["edit_raw"]				= "Uredi zapis GEDCOM";
$pgv_lang["label_add_remote_link"]  		= "Dodaj povezavo";
$pgv_lang["label_gedcom_id"]        		= "ID baze";
$pgv_lang["label_local_id"]         		= "ID osebe";
$pgv_lang["accept"] 				= "Sprejmi spremembe";
$pgv_lang["accept_all"] 			= "Sprejmi vse spremembe";
$pgv_lang["accept_gedcom"]			= "Za vsako spremembo se lahko odločite ali jo sprejmete ali zavrnete.<br /><br />Za sprejetje vseh sprememb kliknite na <b>\"Sprejmi vse spremembe\"</b> v okvirčku spodaj.<br />Za podrobnosti o spremembi kliknite <br />click <b>\"Poglej izpis razlik\"</b> za izpis razlik<br />ali pa kliknite <b>\"Poglej zapis GEDCOM \"</b> za ogled vseh podatkov v obliki GEDCOM.";
$pgv_lang["accept_successful"]			= "Spremembe so bile uspešno sprejete v podatkovno bazo.";
$pgv_lang["add_child"]				= "Dodaj otroka";
$pgv_lang["add_child_to_family"]		= "Dodaj otroka tej družini";
$pgv_lang["add_fact"]				= "Dodaj novo dejstvo";
$pgv_lang["add_father"] 			= "Dodaj novega očeta";
$pgv_lang["add_husb"]				= "Dodaj moža";
$pgv_lang["add_husb_to_family"] 		= "Dodaj očeta tej družini";
$pgv_lang["add_media"]				= "Dodaj novo fotografijo";
$pgv_lang["add_media_lbl"]			= "Dodaj fotografijo";
$pgv_lang["add_mother"] 			= "Dodaj novo mater";
$pgv_lang["add_new_chil"] 			= "Dodaj novega otroka";
$pgv_lang["add_new_husb"]			= "Dodaj moža";
$pgv_lang["add_new_wife"]			= "Dodaj novo ženo";
$pgv_lang["add_note"]				= "Dodaj novo opombo";
$pgv_lang["add_note_lbl"]			= "Dodaj opombo";
$pgv_lang["add_shared_note"]			= "Dodaj nov skupen zapisek";
$pgv_lang["add_shared_note_lbl"]		= "Dodaj skupen zapisek";
$pgv_lang["add_sibling"]			= "Dodaj brata ali sestro";
$pgv_lang["add_son_daughter"]			= "Dodaj sina ali hčer";
$pgv_lang["add_source"] 			= "Dodaj vir sklicevanja";
$pgv_lang["add_source_lbl"] 			= "Dodaj vir sklicevanja";
$pgv_lang["add_wife"]				= "Dodaj ženo";
$pgv_lang["add_wife_to_family"] 		= "Dodaj ženo tej družini";
$pgv_lang["advanced_search_discription"] 	= "Napredno iskanje po straneh";
$pgv_lang["auto_thumbnail"]			= "Samodejna sličica";
$pgv_lang["basic_search"]			= "išči";
$pgv_lang["basic_search_discription"] 		= "Osnovno iskanje po straneh";
$pgv_lang["birthdate_search"]			= "Datum rojstva: ";
$pgv_lang["birthplace_search"]			= "Kraj rojstva: ";
$pgv_lang["change"]				= "Spremeni";
$pgv_lang["change_family_instr"]		= "Uporabi to stran ua spreminjanje ali odstranjevanje družinskih članov.<br /><br />Za vsakega člana družine lahko  uporabite Spremeni povezavo za izbor druge osebe, ki bo nadomestila vlogo v družini.  Izberete lahko tudi Odstrani povezavo za odstranitev osebe iu družine.<br /><br />Ko končate s spremembami na družinskih članih, kliknite gumb Shrani za shranitev sprememb.<br />";
$pgv_lang["change_family_members"]		= "Spremeni družinske člane";
$pgv_lang["changes_occurred"]			= "Na zapsu so bile narejene naslednje spremembe:";
$pgv_lang["confirm_remove"]			= "Ali res želite odstraniti to osebo iz družine?";
$pgv_lang["confirm_remove_object"]		= "Ali res želite odstraniti ta objekt iz baze podatkov?";
$pgv_lang["create_repository"]			= "Ustvari skladišče";
$pgv_lang["create_shared_note"]			= "Ustvari nov skupen zapisek";
$pgv_lang["create_shared_note_assisted"]	= "S pomočnikom ustvari nov skupen zapisek";
$pgv_lang["add_new_event_assisted"]		= "S pomočnikom ustvari nov dogodek";
$pgv_lang["create_source"]			= "Izdelaj nov vir";
$pgv_lang["current_person"]         		= "Isto kot tekoči";
$pgv_lang["date"]				= "Datum";
$pgv_lang["deathdate_search"]			= "Datum smrti: ";
$pgv_lang["deathplace_search"]			= "Kraj smrti: ";
$pgv_lang["delete_dir_success"]			= "Imenik fotografij in sličic je bil uspešno odstranjen.";
$pgv_lang["delete_file"]			= "Izbriši datoteko";
$pgv_lang["delete_repo"]			= "Izbriši skladišče";
$pgv_lang["directory_not_empty"]		= "Imenik ni prazen.";
$pgv_lang["directory_not_exist"]		= "Imenik ne obstaja.";
$pgv_lang["error_remote"]           		= "Izbrali ste oddaljene strani.";
$pgv_lang["error_same"]             		= "Izbrali ste isto mesto.";
$pgv_lang["external_file"]			= "Ta fotografija ne obstaja na tem strežniku.  Ne morete jo pobrisati, premakniti ali preimenovati.";
$pgv_lang["file_missing"]			= "Datoteka ni bila sprejeta. Naložite jo ponovno.";
$pgv_lang["file_partial"]			= "Datoteka je bila le delno naložena. Poskusite ponovno";
$pgv_lang["file_success"]			= "Datoteka je bila uspešno naložena";
$pgv_lang["file_too_big"]			= "Naložena datoteka presega dovojeno velikost";
$pgv_lang["file_no_temp_dir"]			= "Manjka začasni imenik za PHP";
$pgv_lang["file_cant_write"]			= "PHP ne more pisati na disk";
$pgv_lang["file_bad_extension"]			= "PHP je zvrnil datoteko po končnici";
$pgv_lang["file_unkown_err"]			= "Neznana napaka nalaganja datoteke s kodo #pgv_lang[global_num1]#. Prosim, sporočite to kot napako.";
$pgv_lang["folder"]		 		= "Imenik na strežniku";
$pgv_lang["gedcom_editing_disabled"]		= "Urejenje tega zapisa GEDCOM je izključil upravitelj.";
$pgv_lang["gedrec_deleted"] 			= "Zapis GEDCOM je bil uspešno izbrisan.";
$pgv_lang["gen_thumb"]				= "Izdelaj sličico";
$pgv_lang["gen_missing_thumbs"]			= "Izdelaj manjkajoče sličice";
$pgv_lang["gen_missing_thumbs_lbl"]		= "Manjkajoče sličice";
$pgv_lang["gender_search"]			= "Spol: ";
$pgv_lang["generate_thumbnail"]			= "Samodejno izdelaj sličice iz ";
$pgv_lang["hebrew_givn"]			= "Hebrejsko ime";
$pgv_lang["hebrew_surn"]			= "Hebrejski priimek";
$pgv_lang["hide_changes"]			= "Klikni sem za skritje sprememb.";
$pgv_lang["highlighted"]			= "Vodilna slika";
$pgv_lang["illegal_chars"]			= "Prazno ime ali nedovoljene črke v imenu";
$pgv_lang["invalid_search_multisite_input"] 	= "Uporabite eno od:  Ime, Datum rojstva, Kraj rojstva, Datum smrti, Kraj smrti,  spol ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Prosim iščite ponovno z več podatki kot samo spol";
$pgv_lang["label_diff_server"]      		= "Dodaj oddaljeno mesto";
$pgv_lang["label_location"]         		= "Lokacija strežnika";
$pgv_lang["label_password_id2"]			= "Geslo: ";
$pgv_lang["label_rel_to_current"]   		= "Sorodstveno razmerje do trenutne osebe";
$pgv_lang["label_same_server"]      		= "Lokalni stežnik";
$pgv_lang["label_site"]             		= "Spletne strani";
$pgv_lang["label_site_url"]         		= "URL spletne strani:";
$pgv_lang["label_username_id2"]			= "Uporabniško ime: ";
$pgv_lang["lbl_server_list"]        		= "Obstoječe oddaljene spletne strani";
$pgv_lang["lbl_type_server"]			= "Vstavite novo spletno stan";
$pgv_lang["link_as_child"]			= "Poveži to osebo v obstoječo družino kot otroka";
$pgv_lang["link_as_husband"]			= "Poveži to osebo v obstoječo družino kot moža";
$pgv_lang["link_success"]			= "Povezava uspešno dodana.";
$pgv_lang["link_to_existing_media"]		= "Poveži na obstoječo fotografijo";
$pgv_lang["max_media_depth"]			= "Ne morete vnesti več kot  #GLOBALS[MEDIA_DIRECTORY_LEVELS]# podimenikov";
$pgv_lang["max_upload_size"]			= "Največja velikost naložene datoteke: ";
$pgv_lang["media_deleted"]			= "Imenik fotografij je bil uspešno odstranjen.";
$pgv_lang["media_exists"]			= "Datoteka fotografije že obstaja.";
$pgv_lang["media_file"] 			= "Datoteka fotografije za naložitev";
$pgv_lang["media_file_deleted"]			= "Datoteka fotografije uspešno izbrisana.";
$pgv_lang["media_file_moved"]			= "Datoteka fotografije je bila premaknjena.";
$pgv_lang["media_file_not_moved"]		= "Datoteka fotografije ne more biti premaknjena.";
$pgv_lang["media_file_not_renamed"]		= "Datoteka fotografije ne more biti premaknjena in preimenovana.";
$pgv_lang["media_thumb_exists"]			= "Sličica fotografije že obstaja.";
$pgv_lang["multiple_gedcoms"]			= "Ta datoteka je povezana na drug rodovnik na tem strežniku. Ne more biti izbrisama, premaknjena ali preimenovana dokler niso odstranjene te povezave.";
$pgv_lang["must_provide"]			= "Podati morate ";
$pgv_lang["name_search"]			= "Ime: ";
$pgv_lang["new_repo_created"]			= "Novo skladišče je narejeno";
$pgv_lang["new_shared_note_created"]		= "Nov skupen zapisek je bil uspešno ustvarjen.";
$pgv_lang["shared_note_updated"]		= "Skupen zapisek je bil uspešno popravljen.";
$pgv_lang["new_source_created"] 		= "Nov vir je bil uspešno narejen.";
$pgv_lang["no_changes"] 			= "Trenutno ni nobenih sprememb za pregled.";
$pgv_lang["no_known_servers"]			= "Ni znanih strežnikov<br />Rezultati iskanja bodo nični";
$pgv_lang["no_temple"]				= "Ni cerkve - verskih obredov";
$pgv_lang["no_upload"]				= "Nalaganje fotografij ni dovoljeno, ker so bile multimedijske enote izključene ali ker imenik fotografij ni na voljo za pisanje.";
$pgv_lang["paste_id_into_field"]		= "Prilepite naslednji ID v polja za urejane za referenco novo izdelanega zapisa ";
$pgv_lang["paste_rid_into_field"]		= "Prilepite naslendji ID skladišča v polja za urejane za referenco novo izdelanega skladišča ";
$pgv_lang["privacy_not_granted"]		= "Nimate dostopa do";
$pgv_lang["privacy_prevented_editing"]		= "Nastavitve zasebnosti vam preprečujejo urejanje tega zapisa.";
$pgv_lang["record_marked_deleted"]		= "Ta zapis je bil označen za izbris in čaka upraviteljevo odobritev.";
$pgv_lang["replace_with"]			= "Zamenjaj z";
$pgv_lang["show_changes"]			= "Ta zapis je bil popravljen.  Klikni tukaj za prikaz sprememb.";
$pgv_lang["thumb_genned"]			= "Sličica #thumbnail# je bila samodejno izdelana.";
$pgv_lang["thumbgen_error"]			= "Sličica #thumbnail# ne more biti samodejno izdelana.";
$pgv_lang["thumbnail"]				= "Sličica za naložitev";
$pgv_lang["title_remote_link"]     		= "Dodaj oddaljeno povezavo";
$pgv_lang["undo"]				= "Razveljavi";
$pgv_lang["undo_all"]				= "Razveljavi vse spreembe";
$pgv_lang["undo_all_confirm"]			= "Ali resnično želite razveljaviti vse spremembe za ta GEDCOM?";
$pgv_lang["undo_successful"]			= "Razveljavitev je uspela";
$pgv_lang["update_successful"]			= "Naložitev je uspela";
$pgv_lang["upload"]				= "Naloži";
$pgv_lang["upload_error"]			= "Zgodila se je napaka pri nalaganju vaše datoteke.";
$pgv_lang["copy_error"]				= "Datoteka #GLOBALS[whichFile2]# ne more biti kopirana iz #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]			= "Naloži datoteke fotografij";
$pgv_lang["upload_media_help"]			= "~#pgv_lang[upload_media]#~<br /><br />Izberi datoteke na lokalnem računalniku za naložitev na strežnik. Vse datoteke bodo naložene v imenik <b>#MEDIA_DIRECTORY#</b> ali v enega od podimenikov.<br /><br />Podana imena datotek bodo dodana k #MEDIA_DIRECTORY#. Na primer, #MEDIA_DIRECTORY#druzina. Če imenik sličic ne obstaja, bo narejen avtomatsko.";
$pgv_lang["upload_successful"]			= "Naložitev je uspela.";
$pgv_lang["view_change_diff"]			= "Poglej izpis razlik";
$pgv_lang["add_opf_child"]			= "Dodaj otroka enostarševski družini";

?>
