<?php
/**
 * Croatian texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2010  PGV Development Team.  All rights reserved.
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
 * @translator Kresimir Puntijar
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: lang.hr.php 6989 2010-11-09 03:26:25Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["gedcomid"]				= "GEDCOM INDI record ID";
$pgv_lang["sortby"]					= "Red";
$pgv_lang["exact"]				= "Točan";
$pgv_lang["begins_with"]		= "Počinje sa";
$pgv_lang["contains"]			= "Sadrži";
$pgv_lang["sounds_like"]		= "Zvuči kao";
$pgv_lang["advanced_search"] 	= "Napredna pretraga";
$pgv_lang["more_fields"]		= "Dodaj više polja";
$pgv_lang["install_step_8"] 		= "Počni";
$pgv_lang["parent_family"]			= "Porodica roditelja";
$pgv_lang["step_parent_family"]		= "Porodica tasta i punice";
$pgv_lang["immediate_family"]		= "Uža porodica";

$pgv_lang["load_full_tree"]			= "Vidi ovo stablo preko cijele strana interaktivnog stabla";
$pgv_lang["hide_show_spouses"]		= "pokaži ili sakrij više supruga";
$pgv_lang["interactive_tree"]		= "Interaktivno stablo";
$pgv_lang["example"]				= "Primjer:";
$pgv_lang["tree"]					= "Stablo";
$pgv_lang["ellipsis"]				= "\xE2\x80\xA6";
$pgv_lang["showUnknown"]			= "Pokaži nepoznati spol";
$pgv_lang["count"]					= "Broji";
$pgv_lang["age_differences"]		= "Pokaži razlike u datumima";
$pgv_lang["multi_site_search"] 		= "Multi Site pretraga";
$pgv_lang["switch_lifespan"]		= "Prikaži Lifespan dijagram";
$pgv_lang["switch_timeline"]		= "Prikaži Timeline dijagram";
$pgv_lang["differences"]			= "Razlike";
$pgv_lang["charts_block"]			= "Charts Block";
$pgv_lang["charts_block_descr"]		= "The Charts block allows you to place a dijagram on the Welcome or the MyGedView portal page.  You can configure the block to show an ancestors, descendants, or hourglass view.  You can also choose the root person for the dijagram.";
$pgv_lang["charts_click_box"]		= "Klikni na bilo koju kućicu da dobiješ više informacija o toj osobi.";
$pgv_lang["chart_type"]				= "Chart Type";
$pgv_lang["changedate1"]			= "Ending range of change dates";
$pgv_lang["changedate2"]			= "Započni range of change dates";
$pgv_lang["search_place_word"]		= "Cijele riječi samo";
$pgv_lang["invalid_search_input"] 	= "Molim unesite a Given name, Last name, or Place in addition to Year";
$pgv_lang["duplicate_username"] 	= "Duplo korisničko ime.  Korisnik s tim korisničkim imenom već postoji.  Molim odaberite drugo korisničko ime.";
$pgv_lang["cache_life"]				= "Cache file life";
$pgv_lang["genealogy"]					= "geneologija";
$pgv_lang["activate"]					= "Activate";
$pgv_lang["deactivate"]					= "Deactivate";
$pgv_lang["play"]					= "Play";
$pgv_lang["stop"]					= "Stop";
$pgv_lang["random_media_start_slide"]	= "Započni slideshow on page load?";
$pgv_lang["random_media_ajax_controls"]	= "Prikaži slideshow controls?";
$pgv_lang["description"]			= "Opis";
$pgv_lang["current_dir"]			= "Current direktorij";
$pgv_lang["SHOW_ID_NUMBERS"]		= "Prikaži ID numbers next to names";
$pgv_lang["SHOW_HIGHLIGHT_IMAGES"]	= "Prikaži highlight images in people boxes";
$pgv_lang["view_img_details"]		= "Vidi detalje slike";
$pgv_lang["server_folder"]			= "Ime mape na serveru";
$pgv_lang["medialist_recursive"]	= "Prikaži datoteke u podmapama";
$pgv_lang["media_options"]			= "Media Opcije";
$pgv_lang["confirm_password"]					= "Morate potvrditi lozinku.";
$pgv_lang["enter_email"]						= "Morate unijeti an email address.";
$pgv_lang["enter_fullname"] 					= "Morate unijeti Ime i Prezime.";
$pgv_lang["name"]					= "Ime";
$pgv_lang["names"]					= "Imena";
$pgv_lang["children"]				= "Djeca";
$pgv_lang["lchildren"]				= "dijete";
$pgv_lang["child"]					= "Dijete";
$pgv_lang["grandchildren"]			= "grandchildren";
$pgv_lang["family"] 				= "Porodica";
$pgv_lang["as_child"]				= "Porodica roditelja";
$pgv_lang["shared_note_menu"]		= "Opcije for shared note";
$pgv_lang["source_menu"]			= "Opcije for source";
$pgv_lang["repo_menu"]			= "Opcije for repository";
$pgv_lang["other_records"]			= "Records that link to this Izvor:";
$pgv_lang["other_repo_records"]		= "Records that link to this Repository:";
$pgv_lang["repo_info"]				= "Repository Information";
$pgv_lang["enter_terms"]			= "Unesi Search terms";
$pgv_lang["search_asso_label"]		= "Associates";
$pgv_lang["search_asso_text"]		= "Prikaži related persons/families";
$pgv_lang["search_DM"]				= "Daitch-Mokotoff";
$pgv_lang["search_fams"]			= "Imena porodica";
$pgv_lang["search_gedcom"]			= "Traži databases";
$pgv_lang["search_geds"]			= "Databases to search in";
$pgv_lang["search_indis"]			= "Imena pojedinaca";
$pgv_lang["search_notes"]			= "Shared Notes";
$pgv_lang["search_inrecs"]			= "Traži";
$pgv_lang["search_prtall"]			= "Sva imena";
$pgv_lang["search_prthit"]			= "Names with hit";
$pgv_lang["results_per_page"]		= "Results per page";
$pgv_lang["firstname_search"]		= "Osobno ime";
$pgv_lang["search_prtnames"]		= "Individuals'<br />names to print:";
$pgv_lang["other_searches"]			= "Other Searches";
$pgv_lang["add_to_cart"]			= "Dodaj to Clippings Cart";
$pgv_lang["view_gedcom"]			= "Vidi GEDCOM Record";
$pgv_lang["welcome"]				= "Dobrodošli";
$pgv_lang["son"]					= "Sin";
$pgv_lang["daughter"]				= "Kćer";
$pgv_lang["welcome_page"]			= "Početna stranica";
$pgv_lang["editowndata"]			= "Moje korisničko ime";
$pgv_lang["user_admin"] 			= "User administration";
$pgv_lang["manage_media"]			= "Manage Media";
$pgv_lang["search_general"]			= "General Search";
$pgv_lang["clipping_privacy"]		= "Some items ne može biti added due to privacy restrictions";
$pgv_lang["chart_new"]				= "Family Tree Chart";
$pgv_lang["loading"]				= "punjenje u toku...";
$pgv_lang["clear_chart"]			= "Clear Chart";
$pgv_lang["file_information"]		= "File Information";
$pgv_lang["choose_file_type"]		= "Odaberi File Type";
$pgv_lang["add_individual_by_id"]		= "Dodaj Individual By ID";
$pgv_lang["advanced_options"]		= "Advanced Options";
$pgv_lang["zip_files"]				= "Zip File(s)";
$pgv_lang["include_media"]			= "Include Media (automatically zips files)";
$pgv_lang["roman_surn"]				= "Romanized Surname";
$pgv_lang["roman_givn"]				= "Romanized Given Names";
$pgv_lang["include"]				= "Include:";
$pgv_lang["page_x_of_y"]				= "Strana #GLOBALS[currentPage]# od #GLOBALS[lastPage]#";
$pgv_lang["options"]				= "Opcije:";
$pgv_lang["config_update_ok"]			= "Configuration file updated uspješno.";
$pgv_lang["page_size"]					= "Veličina stranice";
$pgv_lang["font"]					= "Font";
$pgv_lang["use_colors"]				= "Use colors";
$pgv_lang["record_not_found"]			= "Traženi GEDCOM record ne može biti found.  Ovo could be caused by a link to an invalid person or by a corrupt GEDCOM file.";
$pgv_lang["result_page"]				= "Result Page";
$pgv_lang["edit_media"]					= "Edit Media Item";
$pgv_lang["wiki_main_page"]				= "Wiki Glavni Page";
$pgv_lang["wiki_users_guide"]			= "Wiki User's Guide";
$pgv_lang["wiki_admin_guide"]			= "Wiki Administrator's Guide";
$pgv_lang["no_search_for"]			= "Be sure to select an option to search for.";
$pgv_lang["no_search_site"]			= "Be sure to select at least one remote site.";
$pgv_lang["search_sites"] 			= "Sites to search";
$pgv_lang["site_list"]				= "Site: ";
$pgv_lang["site_had"]				= " contained the following";
$pgv_lang["label_search_engine_detected"]  = "Traži Engine Spider Detected";

$pgv_lang["ex-spouse"] = "Bivši bračni drug";
$pgv_lang["ex-wife"] = "Bivša žena";
$pgv_lang["ex-husband"] = "Bivši suprug";
$pgv_lang["noemail"] 				= "Adrese bez email-a";
$pgv_lang["onlyemail"] 				= "Samo adrese sa email-om";
$pgv_lang["maxviews_exceeded"]		= "Dopušteni pregled stranica od #GLOBALS[MAX_VIEWS]# po #GLOBALS[MAX_VIEW_TIME]# sekundi je prekoračeno.";
$pgv_lang["broadcast_not_logged_6mo"]	= "Pošalji poruku korisnicima koji se nisu prijavili unutar 6 mjeseci";
$pgv_lang["broadcast_never_logged_in"]	= "Pošalji poruku korisnicima who have never logged in";
$pgv_lang["stats_to_show"]			= "Odaberi the stats to show in this block";
$pgv_lang["stat_avg_age_at_death"]	= "Prosječna starost umrlih";
$pgv_lang["stat_longest_life"]		= "Osoba koja je živjela najduže";
$pgv_lang["stat_most_children"]		= "Porodica sa najviše djece";
$pgv_lang["stat_average_children"]	= "Prosječan broj djece po porodici";
$pgv_lang["stat_events"]			= "Ukupno događaja";
$pgv_lang["stat_media"]				= "Multimedijalni objekti";
$pgv_lang["stat_surnames"]			= "Ukupno prezimena";
$pgv_lang["stat_users"]				= "Broj reg. korisnika";
$pgv_lang["no_family_facts"]		= "Nema podataka za ovu porodicu.";
$pgv_lang["stat_males"]				= "Ukupno muškaraca";
$pgv_lang["stat_females"]			= "Ukupno žena";
$pgv_lang["stat_unknown"]			= "Ukupno nepoznatih";
$pgv_lang["stat_link"]				= "Vidi statistiku kao grafikon";
$pgv_lang["print_stat_link"]		= "Prikaži poveznicu na Statističku mapu?";

$pgv_lang["sunday_1st"]				= "Ned";
$pgv_lang["monday_1st"]				= "Pon";
$pgv_lang["tuesday_1st"]			= "Uto";
$pgv_lang["wednesday_1st"]			= "Sre";
$pgv_lang["thursday_1st"]			= "Čet";
$pgv_lang["friday_1st"]				= "Pet";
$pgv_lang["saturday_1st"]			= "Sub";

$pgv_lang["jan_1st"]					= "Jan";
$pgv_lang["feb_1st"]					= "Feb";
$pgv_lang["mar_1st"]					= "Mart";
$pgv_lang["apr_1st"]					= "April";
$pgv_lang["may_1st"]					= "Maj";
$pgv_lang["jun_1st"]					= "Jun";
$pgv_lang["jul_1st"]					= "Jul";
$pgv_lang["aug_1st"]					= "Aug";
$pgv_lang["sep_1st"]					= "Sep";
$pgv_lang["oct_1st"]					= "Okt";
$pgv_lang["nov_1st"]					= "Nov";
$pgv_lang["dec_1st"]					= "Dec";

$pgv_lang["edit_source"]			= "Uredi izvor";
$pgv_lang["edit_shared_note"]		= "Edit Shared Note";
$pgv_lang["familybook_chart"]		= "Family Book Chart";
$pgv_lang["family_of"]				= "Family of:&nbsp;";
$pgv_lang["descent_steps"]			= "Descent Steps";

$pgv_lang["cancel"]					= "Poništi";
$pgv_lang["cookie_help"]			= "Ova stranica koristi cookies kako bi imala podatke o vašem login statusu.<br /><br />Cookies do not appear to be enabled in your browser. You must enable cookies for this site before you can login.  You can consult your browser's help documentation for information on enabling cookies.";
//new stuff
//Individual
$pgv_lang["indi_is_remote"]			= "The information for this individual was linked from a remote site.";
$pgv_lang["link_remote"]            = "Link remote person";
//Add Remote Link
$pgv_lang["title_search_link"]      = "Dodaj Local Link";
$pgv_lang["label_site_url2"]        = "Site URL";
//new stuff

$pgv_lang["delete_family_confirm"]	= "Deleting the family will unlink all of the individuals from each other but will leave the individuals in place.  Jeste li sigurni da želite obrisati ovu family?";
$pgv_lang["delete_family"]			= "Obriši porodicu";
$pgv_lang["add_favorite"]			= "Dodaj novu omiljenu/često posjećivanu stranicu";
$pgv_lang["url"]					= "URL";
$pgv_lang["add_fav_enter_note"]		= "Eventualno napravi bilješku o ovoj stranici";
$pgv_lang["add_fav_or_enter_url"]	= "OR<br />\nEnter a URL and a title";
$pgv_lang["add_fav_enter_id"]		= "Unesi a Person, Family, or Izvor ID";
$pgv_lang["next_email_sent"]		= "Slijedeći email podsjetnik bit će vam poslan nakon ";
$pgv_lang["last_email_sent"]		= "Zadnji email podsjetnik je poslan ";
$pgv_lang["remove_child"]			= "Obriši ovo dijete iz obitelji";
$pgv_lang["link_new_husb"]			= "Dodaj supruga od već unesenih osoba";
$pgv_lang["link_new_wife"]			= "Dodaj suprugu od već unesenih osoba";
$pgv_lang["address_labels"]			= "Address Labels";
$pgv_lang["filter_address"]			= "Prikaži adrese koje sadrže:";
$pgv_lang["address_list"]			= "Lista adresa";
$pgv_lang["index_edit_advice"]		= "Highlight a  block name and then click on one of the arrow icons to move that highlighted block in the indicated direction.";
$pgv_lang["changelog"]				= "Version #VERSION# changes";
$pgv_lang["html_block_descr"]		= "Ovo is a simple HTML block that you can place on your page to add any sort of message you may want.";
$pgv_lang["html_block_sample_part1"]	= "<p class=\"blockhc\"><b>Put your title here</b></p><br /><p>Click the configure button";
$pgv_lang["html_block_sample_part2"]	= "to change what is printed here.</p>";
$pgv_lang["html_block_name"]		= "HTML";
$pgv_lang["htmlplus_block_name"]	= "Advanced HTML";
$pgv_lang["htmlplus_block_descr"]	= "Ovo is an HTML block that you can place on your page to add any sort of message you may want.  You can insert references to information from your GEDCOM into the HTML text.";
$pgv_lang["htmlplus_block_templates"] = "Templates";
$pgv_lang["htmlplus_block_content"] = "Content";
$pgv_lang["htmlplus_block_narrative"] = "Narrative style (English only)";
$pgv_lang["htmlplus_block_custom"]	= "Custom";
$pgv_lang["htmlplus_block_keyword"]	= "Keyword Examples (English only)";
$pgv_lang["htmlplus_block_taglist"]	= "Tag List";
$pgv_lang["htmlplus_block_compat"]	= "Compatibility Mode";
$pgv_lang["htmlplus_block_ui"]		= "Extended Interface";
$pgv_lang["htmlplus_block_current"]	= "Current";
$pgv_lang["htmlplus_block_default"]	= "Default";
$pgv_lang["htmlplus_block_gedcom"]	= "Porodično stablo";
$pgv_lang["htmlplus_block_birth"]	= "rođenje";
$pgv_lang["htmlplus_block_death"]	= "smrt";
$pgv_lang["htmlplus_block_marrage"]	= "sklapanje braka";
$pgv_lang["htmlplus_block_adoption"]= "usvojenje";
$pgv_lang["htmlplus_block_burial"]	= "sahrana";
$pgv_lang["htmlplus_block_census"]	= "census added";
$pgv_lang["num_to_show"]			= "Broj items to show";
$pgv_lang["days_to_show"]			= "Broj days to show";
$pgv_lang["before_or_after"]		= "Place counts before or after name?";
$pgv_lang["before"]					= "prije";
$pgv_lang["after"]					= "poslije";
$pgv_lang["config_block"]			= "Konfiguriraj";
$pgv_lang["enter_comments"]			= "Molim unesite your relationship to the data in the Comments field.";
$pgv_lang["comments"]				= "Primjedbe - Komentari";
$pgv_lang["child-family"]			= "Roditelji i djeca";
$pgv_lang["spouse-family"]			= "Roditelj i djeca";
$pgv_lang["direct-ancestors"]		= "Preci u direktnoj liniji";
$pgv_lang["ancestors"]				= "Preci u direktnoj liniji i njihove porodice";
$pgv_lang["descendants"]			= "Potomci";
$pgv_lang["choose_relatives"]		= "Bliski srodnici";
$pgv_lang["relatives_report"]		= "Pregled srodnika";
$pgv_lang["total_unknown"]			= "Ukupan broj nepoznat";
$pgv_lang["total_living"]			= "Ukupno živih";
$pgv_lang["total_dead"]				= "Ukupno umrlih";
$pgv_lang["total_not_born"]			= "Ukupno nerođenih";
$pgv_lang["remove_custom_tags"]		= "Obriši custom PGV tags? (eg. _PGVU, _THUM)";
$pgv_lang["cookie_login_help"]		= "Ova site remembered you from a previous login.  Ovo allows you to access private information and other user-based features, but in order to edit or administer the site, you must login again for increased security.";
$pgv_lang["remember_me"]			= "Zapamti me na ovom računalu?";
$pgv_lang["fams_with_surname"]		= "Porodice sa prezimenom #surname#";
$pgv_lang["support_contact"]		= "Kontakt za tehničku podršku:";
$pgv_lang["genealogy_contact"]		= "Kontakt za pitanja rodoslova:";
$pgv_lang["common_upload_errors"]	= "Ovaj error probably means that the file you tried to upload exceeded the limit set by your host.  The default limit in PHP is 2MB.  You can contact your host's Support group to have them increase the limit in the php.ini file, or you can upload the file using FTP.  Use the <a href=\"uploadgedcom.php?action=add_form\"><b>Add GEDCOM</b></a> page to add a GEDCOM file you have uploaded using FTP.";
$pgv_lang["total_memory_usage"]		= "Ukupno Memorijsko korištenje:";
$pgv_lang["mothers_family_with"]	= "Mother's Family with ";
$pgv_lang["fathers_family_with"]	= "Očeva porodica sa";
$pgv_lang["family_with"]			= "Porodica sa:";
$pgv_lang["halfsibling"]			= "Polubraća/polusestre";
$pgv_lang["halfbrother"]			= "Polubrat";
$pgv_lang["halfsister"]				= "Polusestra";
$pgv_lang["family_timeline"]		= "Pokaži porodicu na grafikonu kroz vrijeme";
$pgv_lang["children_timeline"]		= "Pokaži djecu na grafikonu kroz vrijeme";
$pgv_lang["other"]					= "Ostalo";
$pgv_lang["others"]					= "Drugi";
$pgv_lang["sort_by_marriage"]		= "Sortiraj po datumu sklapanja braka";
$pgv_lang["reorder_families"]		= "Presortiraj porodice";
$pgv_lang["indis_with_surname"]		= "Pojedinci koji se prezivaju #surname#";
$pgv_lang["first_letter_name"]		= "Izaberi slovo-ime da vidiš porodice čije prezime počinje sa tim slovom.";
$pgv_lang["first_letter_sfname"]	= "Odaberi a letter to show families where a spouse has a given name which starts with that letter.";
$pgv_lang["first_letter_iname"]		= "Izaberi slovo da vidiš porodice čije prezime počinje sa tim slovom.";
$pgv_lang["first_letter_fname"]		= "Izaberi slovo da vidiš porodice ili pojedince čije prezime počinje sa tim slovom.";
$pgv_lang["total_names"]			= "Ukupan broj prezimena";
$pgv_lang["total_changes"]			= "Ukupan broj changes";
$pgv_lang["total_links"]			= "Ukupan broj poveznica";
$pgv_lang["top10_pageviews_nohits"]	= "There are currently no hits to show.";
$pgv_lang["top10_pageviews_msg"]	= "Hit counters must be enabled in the GEDCOM configuration, Display and Layout section, Hide and Show group.";
$pgv_lang["review_changes_descr"]	= "The Pending Changes block will give users with Edit rights a list of the records that have been changed online and that still need to be reviewed and accepted.  These changes are pending acceptance or rejection.<br /><br />If this block is enabled, users with Accept rights will receive an email once a day notifying them that changes need to be reviewed.";
$pgv_lang["review_changes_block"]	= "Promjene u toku";
$pgv_lang["review_changes_email"]	= "Send out reminder emails?";
$pgv_lang["review_changes_email_freq"]	= "Reminder email frequency (days)";
$pgv_lang["review_changes_subject"]	= "Rodoslovlje - Razmotri promjene";
$pgv_lang["review_changes_body"]	= "Izvršene su promjene u bazi podataka ovog rodoslovlja ali iste moraju biti odobrene prije nego što ih vide svi korisnici rodoslovlja. Klikni na link ispod da pristupiš rodoslovlju i razmotriš promjene.";
$pgv_lang["show_pending"]		= "Pokaži promjene u toku";
$pgv_lang["show_spouses"]		= "Pokaži supruge";
$pgv_lang["quick_update_title"] = "Brzo ažuriranje";
$pgv_lang["quick_update_instructions"] = "Ova page allows you to quickly update information for an individual.  You only need to fill out the information that is new or that has changed from what is currently in the database.  After your changes have been submitted they have to be reviewed by an administrator before they will become visible to all.";
$pgv_lang["update_name"] = "Ažuriraj ime";
$pgv_lang["update_fact"] = "Ažuriraj podatak";
$pgv_lang["update_fact_restricted"] = "Ažuriranje ovog podatka nije dozvoljeno:";
$pgv_lang["select_fact"] = "Izaberi podatak...";
$pgv_lang["update_address"] = "Ažuriraj adresu";
$pgv_lang["top10_pageviews_descr"]	= "Ovaj block will show the 10 records that have been viewed the most.  Ovaj block requires that Hit Counters be enabled in the GEDCOM configuration settings.";
$pgv_lang["top10_pageviews"]		= "Most Viewed Items";
$pgv_lang["top10_pageviews_block"]		= "Most Viewed Items";
$pgv_lang["stepparent"]				= "Očuh/maćeha";
$pgv_lang["stepdad"]				= "Očuh";
$pgv_lang["stepmom"]				= "Maćeha";
$pgv_lang["stepsister"]				= "Polusestra";
$pgv_lang["stepbrother"]			= "Polubrat";
$pgv_lang["fams_charts"]			= "Opcije za ovu porodicu";
$pgv_lang["indis_charts"]			= "Opcije za ovog pojedinca";
$pgv_lang["none"]					= "None";
$pgv_lang["facts"]					= "Facts";
$pgv_lang["locked"]					= "Ne mijenjaj";
$pgv_lang["privacy"]				= "Privacy";
$pgv_lang["number_sign"]			= "#";

//-- GENERAL HELP MESSAGES
$pgv_lang["qm"] 					= "?";
$pgv_lang["qm_ah"]					= "?";
$pgv_lang["page_help"]				= "Pomoć";
$pgv_lang["help_for_this_page"] 	= "Help with this page";
$pgv_lang["help_contents"]			= "Help Contents";
$pgv_lang["show_context_help"]		= "Prikaži Contextual Help";
$pgv_lang["hide_context_help"]		= "Sakrij Contextual Help";
$pgv_lang["sorry"]					= "<b>Sorry, Help text for this page or item is not yet available.</b>";
$pgv_lang["help_not_exist"] 		= "<b>Help text for this page or item is not yet available.</b>";
$pgv_lang["var_not_exist"]			= "<span style=\"font-weight: bold\">The language variable does not exist. Please report this as it is an error.</span>";
$pgv_lang["resolution"] 			= "Rezolucija ekrana";
$pgv_lang["menu"]					= "Menu";
$pgv_lang["header"] 				= "Header";
$pgv_lang["imageview"]				= "Image Viewer";

//-- CONFIG FILE MESSAGES
$pgv_lang["login_head"] 			= "Prijava korisnika na rodoslovlje";
$pgv_lang["for_support"]			= "Za tehničku podršku i informacije kontaktirajte";
$pgv_lang["for_contact"]			= "Za pomoć glede genealogijskih pitanja kontaktirajte";
$pgv_lang["for_all_contact"]		= "Za tehničku podršku i pitanja u vezi rodoslovlja kontakt je: ";
$pgv_lang["choose_username"]		= "Korisničko ime po želji";
$pgv_lang["username"]				= "Korisničko ime";
$pgv_lang["invalid_username"]		= "Korisničko ime sadrži neprihvatljive simbole";
$pgv_lang["firstname"]				= "Ime";
$pgv_lang["lastname"]				= "Prezime";
$pgv_lang["choose_password"]		= "Lozinka po izboru";
$pgv_lang["password"]				= "Lozinka";
$pgv_lang["confirm"]				= "Ponovi lozinku";
$pgv_lang["login"]					= "Prijava";
$pgv_lang["logout"] 				= "Odjava";
$pgv_lang["admin"]					= "Admin";
$pgv_lang["logged_in_as"]			= "Prijavljen kao ";
$pgv_lang["my_pedigree"]			= "My Pedigree";
$pgv_lang["my_indi"]				= "Moj osobni upis";
$pgv_lang["yes"]					= "Da";
$pgv_lang["no"] 					= "Ne";
$pgv_lang["change_theme"]			= "Promijeni izgled stranica";

//-- INDEX (PEDIGREE_TREE) FILE MESSAGES
$pgv_lang["index_header"]			= "Pedigree Tree";
$pgv_lang["gen_ped_chart"]			= "#PEDIGREE_GENERATIONS# Generation Pedigree Chart";
$pgv_lang["generations"]			= "Generations";
$pgv_lang["view"]					= "Vidi";
$pgv_lang["fam_spouse"] 			= "Family with spouse";
$pgv_lang["rootid"] 				= "Pedigree Chart Root Person";
$pgv_lang["root_person"]			= "Root Person ID";
$pgv_lang["hide_details"]			= "Sakrij detalje";
$pgv_lang["show_details"]			= "Prikaži detalje";
$pgv_lang["person_links"]			= "Links to dijagrams, families, and close relatives of this person. Click this icon to view this page, starting at this person.";
$pgv_lang["zoom_box"]				= "Zoom in/out on this box.";
$pgv_lang["orientation"]			= "Orijentacija";
$pgv_lang["portrait"]				= "Portret";
$pgv_lang["landscape"]				= "Landscape";
$pgv_lang["landscape_top"]			= "Najstarija at top";
$pgv_lang["landscape_down"]			= "Najstarija at bottom";
$pgv_lang["start_at_parents"]		= "Započni od roditelja";
$pgv_lang["charts"] 				= "Grafikoni";
$pgv_lang["lists"]					= "Liste";
$pgv_lang["box_width"] 				= "Box width";
$pgv_lang["random_surn"]			= "Slučajno prezime";
$pgv_lang["generation_number"]		= "Generations";

//-- FUNCTIONS FILE MESSAGES
$pgv_lang["unable_to_find_family"]	= "Unable to find family with ID";
$pgv_lang["unable_to_find_record"]	= "Unable to find record with ID";
$pgv_lang["title"]					= "Title:";
$pgv_lang["living"] 				= "Living";
$pgv_lang["private"]				= "Private";
$pgv_lang["birth"]					= "Rođen/a:";
$pgv_lang["death"]					= "Umro/la:";
$pgv_lang["descend_chart"]			= "Descendancy Chart";
$pgv_lang["individual_list"]		= "Lista pojedinaca";
$pgv_lang["family_list"]			= "Lista porodica";
$pgv_lang["branch_list"]			= "Branches";
$pgv_lang["source_list"]			= "Lista izvora";
$pgv_lang["shared_note_list"]		= "Shared Notes";
$pgv_lang["place_list"] 			= "Place Hierarchy";
$pgv_lang["place_list_aft"] 		= "Place Hierarchy after";
$pgv_lang["media_list"] 			= "MultiMedia List";
$pgv_lang["repo_list"]				= "Repositories";
$pgv_lang["search"] 				= "Pretraga";
$pgv_lang["clippings_cart"] 		= "Rezanje porodičnog stabla";
$pgv_lang["print_preview"]			= "Printer-friendly Version";
$pgv_lang["cancel_preview"] 		= "Back to normal view";
$pgv_lang["change_lang"]			= "Promijeni jezik";
$pgv_lang["print"]					= "Print";
$pgv_lang["total_queries"]			= "Ukupan broj Database Queries: ";
$pgv_lang["total_privacy_checks"]	= "Ukupan broj privacy checks: ";
$pgv_lang["back"]					= "Back";

//-- INDIVIDUAL FILE MESSAGES
$pgv_lang["aka"]					= "AKAs";
$pgv_lang["male"]					= "Muško";
$pgv_lang["males"]					= "Males";
$pgv_lang["female"] 				= "Žensko";
$pgv_lang["females"]				= "Females";
$pgv_lang["temple"]					= "LDS Temple";
$pgv_lang["temple_code"]			= "LDS Temple Code:";
$pgv_lang["status"] 				= "Status";
$pgv_lang["source"] 				= "Izvor";
$pgv_lang["text"]					= "Izvorni Text:";
$pgv_lang["note"]					= "Bilješka";
$pgv_lang["NN"] 					= "(nepoznato)";
$pgv_lang["PN"] 					= "(nepoznato)";
$pgv_lang["NNhebrew"] 		= "(לא ידוע)";
$pgv_lang["PNhebrew"] 		= "(לא ידוע)";
$pgv_lang["NNarabic"] 		= "(غير معروف)";
$pgv_lang["PNarabic"] 		= "(غير معروف)";
$pgv_lang["NNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["PNgreek"] 			= "(άγνωστος/η)";
$pgv_lang["NNrussian"] 		= "(неопределено)";
$pgv_lang["PNrussian"] 		= "(неопределено)";
$pgv_lang["NNchinese"] 		= "(未知)";
$pgv_lang["PNchinese"] 		= "(未知)";
$pgv_lang["NNvietnamese"] = "(vô danh)";
$pgv_lang["PNvietnamese"] = "(không biết tuổi)";
$pgv_lang["NNthai"] 			= "(nepoznato)";
$pgv_lang["PNthai"] 			= "(nepoznato)";
$pgv_lang["NN"] 					= "(nepoznato)";
$pgv_lang["PN"] 					= "(nepoznato)";
$pgv_lang["unrecognized_code"]		= "Unrecognized GEDCOM Code";
$pgv_lang["unrecognized_code_msg"]	= "Ovo is an error, and we would like to fix it. Please report this error to";
$pgv_lang["indi_info"]				= "Podaci za pojedinca ";
$pgv_lang["pedigree_chart"] 		= "Pedigree Chart";
$pgv_lang["individual"]				= "Pojedinac";
$pgv_lang["as_spouse"]				= "Porodica sa suprugom";
$pgv_lang["privacy_error"]			= "Ovo je privatni podatak i ne može biti prikazan.";
$pgv_lang["more_information"]		= "Za više podataka kontaktirajte";
$pgv_lang["given_name"] 			= "Osobno ime:";
$pgv_lang["surname"]				= "Prezime:";
$pgv_lang["suffix"] 				= "Suffix:";
$pgv_lang["sex"]					= "Spol";
$pgv_lang["personal_facts"] 		= "Osobni podaci";
$pgv_lang["type"]					= "Type";
$pgv_lang["parents"]				= "Roditelji:";
$pgv_lang["siblings"]				= "Sibling";
$pgv_lang["father"] 				= "Otac";
$pgv_lang["mother"] 				= "Majka";
$pgv_lang["parent"] 				= "Roditelj";
$pgv_lang["parent_age"] 			= "Parent's age";
$pgv_lang["father_age"]				= "Father's age";
$pgv_lang["mother_age"]				= "Mother's age";
$pgv_lang["self"] 					= "Self";
$pgv_lang["relatives"]				= "Bliski srodnici";
$pgv_lang["relatives_events"]		= "Događaji bliže rodbine";
$pgv_lang["historical_facts"]		= "Historical facts";
$pgv_lang["partner"] 				= "Partner";
$pgv_lang["spouse"] 				= "Spouse";
$pgv_lang["spouses"] 				= "Spouses";
$pgv_lang["surnames"]				= "Prezimena";
$pgv_lang["adopted"]				= "Usvojen";
$pgv_lang["foster"] 				= "Hranioc";
$pgv_lang["sealing"]				= "Sealing";
$pgv_lang["challenged"]				= "Challenged";
$pgv_lang["disproved"]				= "Disproved";
$pgv_lang["infant"]					= "Infant";
$pgv_lang["stillborn"]				= "Mrtvorođenče";
$pgv_lang["deceased"]				= "Preminuo";
$pgv_lang["link_as_wife"]			= "Dodaj ovu osobu kao suprugu u već upisanu porodicu ";
$pgv_lang["no_tab1"]				= "There are no Facts for this individual.";
$pgv_lang["no_tab2"]				= "There are no Notes for this individual.";
$pgv_lang["no_tab3"]				= "There are no Source citations for this individual.";
$pgv_lang["no_tab4"]				= "There are no media objects for this individual.";
$pgv_lang["no_tab5"]				= "There are no close relatives for this individual.";
$pgv_lang["no_tab6"]				= "There are no research logs attached to this individual.";
$pgv_lang["show_fact_sources"]		= "Vidi sve izvore";
$pgv_lang["show_fact_notes"]		= "Vidi sve bilješke";

//-- FAMILY FILE MESSAGES
$pgv_lang["family_info"]			= "Informacije o porodici";
$pgv_lang["family_group_info"]		= "Grupirani podaci za porodicu";
$pgv_lang["husband"]				= "Suprug";
$pgv_lang["wife"]					= "Supruga";
$pgv_lang["marriage"]				= "Sklapanje braka:";
$pgv_lang["lds_sealing"]			= "LDS Sealing:";
$pgv_lang["marriage_license"]		= "Vjenčani list:";
$pgv_lang["no_children"]			= "Nema upisane djece";
$pgv_lang["childless_family"]		= "Ova family remained childless";
$pgv_lang["parents_timeline"]		= "Prikaži couple on timeline dijagram";

//-- CLIPPINGS FILE MESSAGES
$pgv_lang["clip_cart"]				= "Rezanje stabla ";
$pgv_lang["which_links"]			= "Which other links from this family would you like to add?";
$pgv_lang["just_family"]			= "Dodaj just this family record.";
$pgv_lang["parents_and_family"] 	= "Dodaj roditelje' records together with this family record.";
$pgv_lang["parents_and_child"]		= "Dodaj roditelje' and children's records together with this family record.";
$pgv_lang["parents_desc"]			= "Dodaj roditelje' and all descendants' records together with this family record.";
$pgv_lang["continue"]				= "Nastavi Adding";
$pgv_lang["which_p_links"]			= "Which links from this person would you also like to add?";
$pgv_lang["just_person"]			= "Dodaj ovu osobu.";
$pgv_lang["person_parents_sibs"]	= "Dodaj ovu osobu, his parents, and siblings.";
$pgv_lang["person_ancestors"]		= "Dodaj ovu osobu and his direct line ancestors.";
$pgv_lang["person_ancestor_fams"]	= "Dodaj ovu osobu, his direct line ancestors, and their families.";
$pgv_lang["person_spouse"]			= "Dodaj ovu osobu, his spouse, and children.";
$pgv_lang["person_desc"]			= "Dodaj ovu osobu, his spouse, and all descendants.";
$pgv_lang["which_s_links"]			= "Which records linked to this source should be added?";
$pgv_lang["just_source"]		= "Dodaj just this source.";
$pgv_lang["linked_source"]		= "Dodaj this source and families/people linked to it.";
$pgv_lang["person_private"] 		= "Details about this person are private. Personal details will not be included.";
$pgv_lang["family_private"] 		= "Details about this family are private. Family details will not be included.";
$pgv_lang["media_private"] 			= "Details about this media are private. Media details will not be included.";
$pgv_lang["download"]				= "Right click (control-click on a Macintosh) on the links below and select &quot;Save target as&quot; to download the files.";
$pgv_lang["cart_is_empty"]			= "Your Clippings Cart is empty.";
$pgv_lang["id"] 					= "ID";
$pgv_lang["ID"] 					= "ID";
$pgv_lang["name_description"]		= "Name / Description";
$pgv_lang["remove"] 				= "Obriši";
$pgv_lang["empty_cart"] 			= "Empty Cart";
$pgv_lang["download_now"]			= "Download Now";
$pgv_lang["download_file"]			= "Download file #GLOBALS[whichFile]#";
$pgv_lang["indi_downloaded_from"]	= "Ova Individual was downloaded from:";
$pgv_lang["family_downloaded_from"] = "Ova Family was downloaded from:";
$pgv_lang["source_downloaded_from"] = "Ovaj Izvor was downloaded from:";
$pgv_lang["enter_person_generations"] = "Broj generations:";
$pgv_lang["convertPath"]			= "Convert media path to";
$pgv_lang["convertSlashes"]			= "Convert media folder separators to";
$pgv_lang["forwardSlashes"]			= "Forward slashes : /";
$pgv_lang["backSlashes"]			= "Backslashes : \\";

//-- PLACELIST FILE MESSAGES
$pgv_lang["connections"]			= "Place connections found";
$pgv_lang["top_level"]				= "Najbolji Level";
$pgv_lang["form"]					= "Mjesta are encoded in the form: ";
$pgv_lang["default_form"]			= "City, County, State/Province, Country";
$pgv_lang["default_form_info"]		= "(Default)";
$pgv_lang["unknown"]				= "nepoznato";
$pgv_lang["individuals"]			= "Pojedinci";
$pgv_lang["view_records_in_place"]	= "Vidi all records found in this place";
$pgv_lang["place_list2"] 			= "Place List";
$pgv_lang["show_place_hierarchy"]	= "Prikaži Mjesta in Hierarchy";
$pgv_lang["show_place_list"]		= "Prikaži All Mjesta in a List";
$pgv_lang["total_unic_places"]		= "Ukupan broj Unique Mjesta";

//-- MEDIALIST FILE MESSAGES
$pgv_lang["external_objects"]		= "External objects";
$pgv_lang["multi_title"]			= "MultiMedia Object List";
$pgv_lang["media_found"]			= "Media Objects found";
$pgv_lang["view_person"]			= "Pogledaj upis osobe";
$pgv_lang["view_family"]			= "Pogledaj upis porodice";
$pgv_lang["view_source"]			= "Pogledaj izvor";
$pgv_lang["view_object"]			= "Vidi Object";
$pgv_lang["prev"]					= "&lt; Previous";
$pgv_lang["next"]					= "Slijedeći &gt;";
$pgv_lang["next_image"]				= "Slijedeća slika";
$pgv_lang["file_not_found"] 		= "Datoteka nije nađena.";
$pgv_lang["medialist_show"] 		= "Prikaži";
$pgv_lang["per_page"]				= "media objects per page";
$pgv_lang["media_format"]			= "Media Format";
$pgv_lang["image_size"]				= "Image Dimensions";
$pgv_lang["media_id"]				= "Media ID";
$pgv_lang["invalid_id"]				= "No such ID exists in this GEDCOM file.";
$pgv_lang["record_updated"]			= "Upis #pid# uspešno ažuriran.";
$pgv_lang["record_not_updated"]		= "Record #pid# ne može biti obnovljen.";
$pgv_lang["record_removed"]			= "Record #xref# uspješno obrisan iz GEDCOM.";
$pgv_lang["record_not_removed"]		= "Record #xref# ne može biti obrisan iz GEDCOM.";
$pgv_lang["record_added"]			= "Record #xref# uspješno dodan GEDCOM.";
$pgv_lang["record_not_added"]		= "Record #xref# ne može biti dodan GEDCOM.";

//-- SEARCH FILE MESSAGES
$pgv_lang["soundex_search"] 		= "Traži the way you think the name is written (Soundex)";
$pgv_lang["sources"]				= "Izvori";
$pgv_lang["shared_notes"]			= "Shared Notes";
$pgv_lang["lastname_search"]		= "Prezime";
$pgv_lang["search_place"]			= "Mjesto";
$pgv_lang["search_year"]			= "Godina";
$pgv_lang["no_results"] 			= "No results found.";
$pgv_lang["search_soundex"]			= "Soundex Search";
$pgv_lang["search_replace"]			= "Traži and Replace";
$pgv_lang["search_sources"]			= "Izvori";
$pgv_lang["search_shared_notes"]	= "Shared Notes";
$pgv_lang["search_more_chars"]      = "Molim unesite više od jednog znaka";
$pgv_lang["search_soundextype"]		= "Soundex type:";
$pgv_lang["search_russell"]			= "Basic";
$pgv_lang["search_tagfilter"]		= "Exclude Filter";
$pgv_lang["search_tagfon"]			= "Exclude some non-genealogical data";
$pgv_lang["search_tagfoff"]			= "Off";
$pgv_lang["associate"]				= "associate";
$pgv_lang["search_record"]			= "Entire record";
$pgv_lang["search_to"]				= "to";

//-- SOURCELIST FILE MESSAGES
$pgv_lang["titles_found"]			= "Titles";
$pgv_lang["find_source"]			= "Find izvor";

//-- REPOLIST FILE MESSAGES
$pgv_lang["repo_list"]				= "Repository List";
$pgv_lang["repos_found"]			= "Repositories found";
$pgv_lang["find_repository"]		= "Find Repository";
$pgv_lang["total_repositories"]		= "Ukupan broj Repositories";
$pgv_lang["confirm_delete_repo"]	= "Jeste li sigurni da želite obrisati ovaj Repository from the database?";

//-- SOURCE FILE MESSAGES
$pgv_lang["source_info"]			= "Izvor informacija";
$pgv_lang["people"] 				= "Ljudi";
$pgv_lang["families"]				= "Familije";
$pgv_lang["total_sources"]			= "Ukupan broj izvora";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]		= "Neispravan GEDCOM format";
$pgv_lang["exec_time"]				= "Execution time:";
$pgv_lang["unable_to_create_index"] = "Unable to create Index files.  Make sure Write permissions are set on the PhpGedView direktorij.  Dozvole may be restored once Index files are written.";
$pgv_lang["changes_present"]		= "The current GEDCOM has changes pending review.  If you continue this Import, these pending changes will be posted to the database immediately.  You should review the pending changes before continuing the Import.";
$pgv_lang["sec"]					= "sec.";

//-- BUILDINDEX FILE MESSAGES
$pgv_lang["invalid_gedformat"]		= "Invalid GEDCOM format";
$pgv_lang["exec_time"]				= "Execution time:";
$pgv_lang["unable_to_create_index"] = "Unable to create Index files.  Make sure Write permissions are set on the PhpGedView direktorij.  Dozvole may be restored once Index files are written.";
$pgv_lang["changes_present"]		= "The current GEDCOM has changes pending review.  If you continue this Import, these pending changes will be discarded.  You should review the pending changes before continuing the Import.";
$pgv_lang["sec"]					= "sec.";

//-- INDIVIDUAL AND FAMILYLIST FILE MESSAGES
$pgv_lang["total_fams"] 			= "Ukupno porodica";
$pgv_lang["total_indis"]			= "Ukupno pojedinaca";
$pgv_lang["notes"]					= "Bilješke";
$pgv_lang["ssourcess"]				= "Izvori";
$pgv_lang["media"]					= "Media";
$pgv_lang["name_contains"]			= "Name contains:";
$pgv_lang["filter"] 				= "Filter";
$pgv_lang["apply_filter"]			= "Apply filter";
$pgv_lang["find_individual"]		= "Find Individual ID";
$pgv_lang["find_familyid"]			= "Find Family ID";
$pgv_lang["find_sourceid"]			= "Find Source ID";
$pgv_lang["find_specialchar"]		= "Find Special Characters";
$pgv_lang["magnify"]				= "Povećaj";
$pgv_lang["skip_surnames"]			= "Preskoči listu prezimena";
$pgv_lang["show_surnames"]			= "pokaži listu prezimena";
$pgv_lang["skip_marnms"]			= "Exclude married names";
$pgv_lang["show_marnms"]			= "Include married names";
$pgv_lang["all"]					= "SVE";
$pgv_lang["hidden"]					= "Sakriven";
$pgv_lang["confidential"]			= "Confidential";
$pgv_lang["alpha_index"]			= "Alphabetical Index";
$pgv_lang["name_list"] 				= "Lista imena";
$pgv_lang["firstname_alpha_index"] 	= "Firstname Alphabetical Index";
$pgv_lang["roots"]		 			= "Roots";
$pgv_lang["leaves"] 				= "Leaves";
$pgv_lang["widow"] 					= "Udovac";
$pgv_lang["widower"] 				= "Udovica";
$pgv_lang["show_parents"] 			= "Pokaži roditelje";

//-- TIMELINE FILE MESSAGES
$pgv_lang["age"]					= "Starost";
$pgv_lang["husb_age"]				= "Husband's age";
$pgv_lang["wife_age"]				= "Wife's age";
$pgv_lang["year1"]					= "godina";
$pgv_lang["years2"]					= "god";	// 2 god";
$pgv_lang["years"]					= "god";	// >2 god";
$pgv_lang["month1"]					= "mjesec";
$pgv_lang["months"]					= "mjeseci"; // >2 months
$pgv_lang["week1"]					= "tjedan";
$pgv_lang["weeks"]					= "weeks";
$pgv_lang["day1"]					= "dan";
$pgv_lang["days"]					= "dana";
$pgv_lang["after_death"]        	= "poslije smrti";
$pgv_lang["at_death_day"]      		= "na datum smrti";
$pgv_lang["timeline_title"] 		= "PhpGedView Timeline";
$pgv_lang["timeline_chart"] 		= "Timeline Chart";
$pgv_lang["remove_person"]			= "Obriši Osobu";
$pgv_lang["show_age"]				= "Prikaži Age Marker";
$pgv_lang["add_another"]			= "Dodaj drugu osobu to dijagram:<br />Person ID:";
$pgv_lang["find_id"]				= "Nađi ID";
$pgv_lang["show"]					= "Prikaži";
$pgv_lang["year"]					= "Year:";
$pgv_lang["timeline_instructions"]	= "In most recent browsers you can click and drag the boxes around on the dijagram.";
$pgv_lang["zoom_in"]				= "Zoom In";
$pgv_lang["zoom_out"]				= "Zoom Out";
$pgv_lang["timeline_beginYear"] = "Početna godina";
$pgv_lang["timeline_endYear"] = "Završna godina";
$pgv_lang["timeline_scrollSpeed"] = "Brzina";
$pgv_lang["timeline_controls"] = "Timeline kontrole";
$pgv_lang["include_family"] = "Include Immediate Family";
$pgv_lang["lifespan_chart"] = "Lifespan dijagram";

// calendar conversion options
$pgv_lang["cal_none"]                 = "No calendar conversion";
$pgv_lang["cal_gregorian"]            = "Gregorian";
$pgv_lang["cal_julian"]               = "Julian";
$pgv_lang["cal_french"]               = "French";
$pgv_lang["cal_jewish"]               = "Jewish";
$pgv_lang["cal_hebrew"]               = "Hebrew";
$pgv_lang["cal_jewish_and_gregorian"] = "Jewish and Gregorian";
$pgv_lang["cal_hebrew_and_gregorian"] = "Hebrew and Gregorian";
$pgv_lang["cal_hijri"]                = "Hijri";
$pgv_lang["cal_arabic"]               = "Arabic";

// some religious dates
$pgv_lang["easter"]     = "Easter";
$pgv_lang["ascension"]  = "Ascension";
$pgv_lang["pentecost"]  = "Pentecost";
$pgv_lang["assumption"] = "Assumption";
$pgv_lang["all_saints"] = "All Saints";
$pgv_lang["christmas"]  = "Christmas";

// am/pm suffixes for 12 hour clocks
$pgv_lang["a.m."]         = "am";
$pgv_lang["p.m."]         = "pm";
$pgv_lang["noon"]         = "m";
$pgv_lang["midn"]         = "mn";

//-- MONTH NAMES
$pgv_lang["jan"]		= "siječanj";
$pgv_lang["feb"]		= "veljača";
$pgv_lang["mar"]		= "ožujak";
$pgv_lang["apr"]		= "travanj";
$pgv_lang["may"]		= "svibanj";
$pgv_lang["jun"]		= "lipanj";
$pgv_lang["jul"]		= "srpanj";
$pgv_lang["aug"]		= "kolovoz";
$pgv_lang["sep"]		= "rujan";
$pgv_lang["oct"]		= "listopad";
$pgv_lang["nov"]		= "studeni";
$pgv_lang["dec"]		= "prosinac";

$pgv_lang["vend"]		= "Vendémiaire";
$pgv_lang["brum"]		= "Brumaire";
$pgv_lang["frim"]		= "Frimaire";
$pgv_lang["nivo"]		= "Nivôse";
$pgv_lang["pluv"]		= "Pluviôse";
$pgv_lang["vent"]		= "Ventôse";
$pgv_lang["germ"]		= "Germinal";
$pgv_lang["flor"]		= "Floréal";
$pgv_lang["prai"]		= "Prairial";
$pgv_lang["mess"]		= "Messidor";
$pgv_lang["ther"]		= "Thermidor";
$pgv_lang["fruc"]		= "Fructidor";
$pgv_lang["comp"]		= "jours complémentaires";

$pgv_lang["tsh"]		= "Tishrei";
$pgv_lang["csh"]		= "Heshvan";
$pgv_lang["ksl"]		= "Kislev";
$pgv_lang["tvt"]		= "Tevet";
$pgv_lang["shv"]		= "Shevat";
$pgv_lang["adr"]		= "Adar";
$pgv_lang["adr_leap_year"]= "Adar I";
$pgv_lang["ads"]		= "Adar II";
$pgv_lang["nsn"]		= "Nissan";
$pgv_lang["iyr"]		= "Iyar";
$pgv_lang["svn"]		= "Sivan";
$pgv_lang["tmz"]		= "Tamuz";
$pgv_lang["aav"]		= "Av";
$pgv_lang["ell"]		= "Elul";

$pgv_lang["muhar"]		= "Muharram";
$pgv_lang["safar"]		= "Safar";
$pgv_lang["rabia"]		= "Rabi' al-awwal";
$pgv_lang["rabit"]		= "Rabi' al-thani";
$pgv_lang["jumaa"]		= "Jumada al-awwal";
$pgv_lang["jumat"]		= "Jumada al-thani";
$pgv_lang["rajab"]		= "Rajab";
$pgv_lang["shaab"]		= "Sha'aban";
$pgv_lang["ramad"]		= "Ramadan";
$pgv_lang["shaww"]		= "Shawwal";
$pgv_lang["dhuaq"]		= "Dhu al-Qi'dah";
$pgv_lang["dhuah"]		= "Dhu al-Hijjah";

$pgv_lang["b.c."]         = "B.C.";

$pgv_lang["abt"]		= "o";
$pgv_lang["aft"]		= "poslije";
$pgv_lang["and"]		= "i";
$pgv_lang["bef"]		= "prije";
$pgv_lang["bet"]		= "između";
$pgv_lang["cal"]		= "izvedeno";
$pgv_lang["est"]		= "estimated";
$pgv_lang["from"]		= "od";
$pgv_lang["int"]		= "interpreted";
$pgv_lang["to"]			= "do";
$pgv_lang["cir"]		= "oko";
$pgv_lang["apx"]		= "približno";

//-- Admin File Messages
$pgv_lang["password_mismatch"]		= "Lozinke nisu identične.";
$pgv_lang["enter_username"] 		= "Vi morate unijeti korisničko ime.";
$pgv_lang["enter_password"] 		= "Vi morate unijeti password.";
$pgv_lang["save"]					= "Spremi";
$pgv_lang["saveandgo"]		= "Spremi i idi na slijedeći record";
$pgv_lang["delete"] 				= "Obriši";
$pgv_lang["edit"]					= "Editiraj";
$pgv_lang["no_login"]				= "Unable to authenticate user.";
$pgv_lang["basic_realm"]			= "PhpGedView Authentication Sistem";
$pgv_lang["basic_auth_failure"]		= "Morate ukucati točno korisničko ime i lozinku da pristupite";
$pgv_lang["basic_auth"]				= "Basic Authentication";
$pgv_lang["digest_auth"]				= "Digest Authentication"; //not used in code yet
$pgv_lang["no_auth_needed"]			= "No Authentication";
$pgv_lang["file_not_exists"]		= "Unešeno ime datoteke ne postoji.";
$pgv_lang["research_assistant"]		= "Pomoć u istraživanju";
$pgv_lang["utf8_to_ansi"]			= "Prebaci iz UTF-8 u ANSI (ISO-8859-1)";
$pgv_lang["media_linked"]			= "Ovaj media object je vezan na slijedeći:";
$pgv_lang["media_not_linked"]		= "Ovaj media object is not linked to any GEDCOM record.";
$pgv_lang["media_dir_1"]			= "Ovaj media object is located on an external server";
$pgv_lang["media_dir_2"]			= "Ovaj media object is in the standard media direktorij";
$pgv_lang["media_dir_3"]			= "Ovaj media object is in the protected media direktorij";
$pgv_lang["thumb_dir_1"]			= "Ovaj thumbnail is located on an external server";
$pgv_lang["thumb_dir_2"]			= "Ovaj thumbnail is in the standard media direktorij";
$pgv_lang["thumb_dir_3"]			= "Ovaj thumbnail is in the protected media direktorij";
$pgv_lang["moveto_2"]				= "Prijelaz u protected direktorij";
$pgv_lang["moveto_3"]				= "Prijelaz u standard direktorij";
$pgv_lang["move_standard"]			= "Prijelaz u standard";
$pgv_lang["move_protected"]			= "Prijelaz u protected";
$pgv_lang["move_mediadirs"]			= "Move Media directories";
$pgv_lang["setperms"]				= "Set Media dozvole";
$pgv_lang["setperms_fix"]			= "Popravi read/write/execute dozvole";
$pgv_lang["setperms_success"]		= "Dozvole su postavljeneSet";
$pgv_lang["setperms_failure"]		= "Dozvole nisu postavljene";
$pgv_lang["setperms_time_exceeded"]	= "The execution time limit was reached.  Try the command again on a smaller direktorij.";
$pgv_lang["move_time_exceeded"]		= "The execution time limit was reached.  Try the command again to move the rest of the files.";
$pgv_lang["media_firewall_rootdir_no_exist"]			= "The Media Firewall root direktorij you requested does not exist.  You must create it first.";
$pgv_lang["media_firewall_protected_dir_no_exist"]		= "The protected media direktorij ne može biti created in the Media Firewall root direktorij.  Please create this direktorij and make it world-writable.";
$pgv_lang["media_firewall_protected_dir_not_writable"]	= "The protected media direktorij in the Media Firewall root direktorij is not world writable. ";
$pgv_lang["media_firewall_invalid_dir"]	= "Greška: The Media Firewall was launched from a direktorij other than the media direktorij.";

//-- Relationship chart messages
$pgv_lang["view_fam_nav_details"]	= "Pogledaj detalje za ...";
$pgv_lang["view_fam_nav_notes"]		= "Vidi Notes za ...";
$pgv_lang["view_fam_nav_sources"]	= "Vidi Sources za ...";
$pgv_lang["view_fam_nav_media"]		= "Vidi Media za ...";
$pgv_lang["view_fam_nav_album"]		= "Vidi Album za ...";
$pgv_lang["view_fam_nav_relatives"]	= "Vidi Relatives za ...";
$pgv_lang["view_fam_nav_tree"]		= "Vidi Tree za ...";
$pgv_lang["view_fam_nav_research"]	= "Vidi Research za ...";
$pgv_lang["view_fam_nav_map"]		= "Vidi Map za ...";
$pgv_lang["view_fam_nav_spare"]		= "Vidi Spare-info za ...";
$pgv_lang["navigator"]				= "Navigator";
$pgv_lang["fam_navigator"]			= "Family Navigator";

$pgv_lang["relationship_great"]		= "Great";
$pgv_lang["relationship_chart"] 	= "Relationship Chart";
$pgv_lang["person1"]				= "Person 1";
$pgv_lang["person2"]				= "Person 2";
$pgv_lang["no_link_found"]			= "No link between the two individuals could be found.";
$pgv_lang["no_other_link_found"]	= "No other link between the two individuals could be found.";
$pgv_lang["sibling"]				= "Sibling";
$pgv_lang["follow_spouse"]			= "Check relationships by marriage";
$pgv_lang["timeout_error"]			= "The script timed out before a relationship could be found.";
$pgv_lang["grandchild"]				= "Grandchild";
$pgv_lang["grandson"]				= "Grandson";
$pgv_lang["granddaughter"]			= "Granddaughter";
$pgv_lang["greatgrandchild"]		= "Great grandchild";
$pgv_lang["greatgrandson"]			= "Great grandson";
$pgv_lang["greatgranddaughter"]		= "Great granddaughter";
$pgv_lang["brother"]				= "Brat";
$pgv_lang["sister"] 				= "Sestra";
$pgv_lang["aunt"]					= "Aunt";
$pgv_lang["uncle"]				= "Uncle";
$pgv_lang["nephew"]				= "Nephew";
$pgv_lang["niece"]				= "Niece";
$pgv_lang["firstcousin"]			= "First cousin";
$pgv_lang["femalecousin"]			= "Female cousin";
$pgv_lang["malecousin"]				= "Male cousin";
$pgv_lang["relationship_to_me"] 	= "Relationship to me";
$pgv_lang["rela_husb"]				= "Relationship to husband";
$pgv_lang["rela_wife"]				= "Relationship to wife";
$pgv_lang["next_path"]				= "Find next path";
$pgv_lang["show_path"]				= "Prikaži path";
$pgv_lang["line_up_generations"]	= "Line up the same generations";
$pgv_lang["oldest_top"]             = "Prikaži oldest top";

// %1\$s replaced by first person, %2\$s by the relationship and %3\$s by the second person.
$pgv_lang["relationship_male_1_is_the_2_of_3"] = "%1\$s is the %2\$s of %3\$s.";
$pgv_lang["relationship_female_1_is_the_2_of_3"] = "%1\$s is the %2\$s of %3\$s.";

$pgv_lang["mother_in_law"]		    = "Mother-in-law";
$pgv_lang["father_in_law"]		    = "Father-in-law";
$pgv_lang["brother_in_law"]		    = "Brother-in-law";
$pgv_lang["sister_in_law"]		    = "Sister-in-law";
$pgv_lang["brothers_wife"]		= "Sister-in-law"; // brother's wife
$pgv_lang["son_in_law"]		        = "Son-in-law";
$pgv_lang["daughter_in_law"]		= "Snaha";
$pgv_lang["uncle_in_law"]			= "Uncle-in-law";
$pgv_lang["aunt_in_law"]			= "Aunt-in-law";
$pgv_lang["cousin_in_law"]			= "Cousin-in-law";
$pgv_lang["m_cousin_in_law"]		= "Cousin-in-law";
$pgv_lang["f_cousin_in_law"]		= "Cousin-in-law";
$pgv_lang["step_son"]		        = "step son";
$pgv_lang["step_daughter"]	    	= "step daughter";

// the bosa_brothers_offspring name is used for fraternal nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_brothers_offspring_2"] 				= "nephew";             // brother's son
$pgv_lang["bosa_brothers_offspring_3"] 				= "niece";              // brother's daughter
// 2nd generation
$pgv_lang["bosa_brothers_offspring_4"] 				= "great nephew";       // brother's son's son
$pgv_lang["bosa_brothers_offspring_5"] 				= "great niece";        // brother's son's daughter
$pgv_lang["bosa_brothers_offspring_6"] 				= "great nephew";       // brother's daughter's son
$pgv_lang["bosa_brothers_offspring_7"] 				= "great niece";        // brother's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_brothers_son"]	  = "%2\$d x great nephew";
$pgv_lang["n_x_brothers_daughter"] = "%2\$d x great niece";
// the bosa_sisters_offspring name is used for sisters nephews and nieces - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_sisters_offspring_2"] 				= "nephew";             // sister's son
$pgv_lang["bosa_sisters_offspring_3"] 				= "niece";              // sister's daughter
// 2nd generation
$pgv_lang["bosa_sisters_offspring_4"] 				= "great nephew";       // sister's son's son
$pgv_lang["bosa_sisters_offspring_5"] 				= "great niece";        // sister's son's daughter
$pgv_lang["bosa_sisters_offspring_6"] 				= "great nephew";       // sister's daughter's son
$pgv_lang["bosa_sisters_offspring_7"] 				= "great niece";        // sister's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_sisters_son"]	  = "%2\$d x great nephew";
$pgv_lang["n_x_sisters_daughter"] = "%2\$d x great niece";

// the bosa name is used for offspring - the names below can be extended to any number
// of generations just by adding more translations.
// 1st generation
$pgv_lang["bosa_2"] 				= "son";                   // son
$pgv_lang["bosa_3"] 				= "daughter";              // daughter
// 2nd generation
$pgv_lang["bosa_4"] 				= "grandson";              // son's son
$pgv_lang["bosa_5"] 				= "granddaughter";         // son's daughter
$pgv_lang["bosa_6"] 				= "grandson";              // daughter's son
$pgv_lang["bosa_7"] 				= "granddaughter";         // daughter's daughter
// 3rd generation
$pgv_lang["bosa_8"] 				= "great grandson";        // son's son's son
$pgv_lang["bosa_9"] 				= "great granddaughter";   // son's son's daughter
$pgv_lang["bosa_10"] 				= "great grandson";		   // son's daughter's son
$pgv_lang["bosa_11"] 				= "great granddaughter";   // son's daughter's daughter
$pgv_lang["bosa_12"] 				= "great grandson";        // daughter's son's son
$pgv_lang["bosa_13"] 				= "great granddaughter";   // daughter's son's daughter
$pgv_lang["bosa_14"] 				= "great grandson";		   // daughter's daughter's son
$pgv_lang["bosa_15"] 				= "great granddaughter";   // daughter's daughter's daughter
// for the general case of offspring of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_grandson_from_son"]	  = "%3\$d x great grandson";
$pgv_lang["n_x_granddaughter_from_son"] = "%3\$d x great granddaughter";
$pgv_lang["n_x_grandson_from_daughter"]	  = "%3\$d x great grandson";
$pgv_lang["n_x_granddaughter_from_daughter"] = "%3\$d x great granddaughter";

// the sosa_uncle name is used for uncles - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_2"] 				= "uncle";            // father's brother
$pgv_lang["sosa_uncle_3"] 				= "uncle";            // mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_4"] 				= "great uncle";      // fathers's father's brother
$pgv_lang["sosa_uncle_5"] 				= "great uncle";      // father's mother's brother
$pgv_lang["sosa_uncle_6"] 				= "great uncle";      // mother's father's brother
$pgv_lang["sosa_uncle_7"] 				= "great uncle";      // mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle"]		= "%2\$d x great uncle";
$pgv_lang["n_x_maternal_uncle"]	    = "%2\$d x great uncle";

// the sosa_aunt name is used for aunts - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_2"] 				= "aunt";            // father's sister
$pgv_lang["sosa_aunt_3"] 				= "aunt";            // mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_4"] 				= "great aunt";      // fathers's father's sister
$pgv_lang["sosa_aunt_5"] 				= "great aunt";      // father's mother's sister
$pgv_lang["sosa_aunt_6"] 				= "great aunt";      // mother's father's sister
$pgv_lang["sosa_aunt_7"] 				= "great aunt";      // mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt"]		= "%2\$d x great aunt";
$pgv_lang["n_x_maternal_aunt"]	    = "%2\$d x great aunt";

// the sosa_uncle name is used for uncles(by marriage) - the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and uncles
// 1st generation
$pgv_lang["sosa_uncle_bm_2"] 				= "uncle";            // father's brother
$pgv_lang["sosa_uncle_bm_3"] 				= "uncle";            // mother's brother
// 2nd generation
$pgv_lang["sosa_uncle_bm_4"] 				= "great uncle";      // fathers's father's brother
$pgv_lang["sosa_uncle_bm_5"] 				= "great uncle";      // father's mother's brother
$pgv_lang["sosa_uncle_bm_6"] 				= "great uncle";      // mother's father's brother
$pgv_lang["sosa_uncle_bm_7"] 				= "great uncle";      // mother's mother's brother
// for the general case of uncles of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_uncle_bm"]		= "%2\$d x great uncle";
$pgv_lang["n_x_maternal_uncle_bm"]	    = "%2\$d x great uncle";

// the sosa_aunt name is used for aunts (by marriage)- the names below can be extended to any number
// of generations just by adding more translations.
// to allow fo language variations we specify different relationships for paternal and maternal
// aunts and aunts
// 1st generation
$pgv_lang["sosa_aunt_bm_2"] 				= "aunt";            // father's sister
$pgv_lang["sosa_aunt_bm_3"] 				= "aunt";            // mother's sister
// 2nd generation
$pgv_lang["sosa_aunt_bm_4"] 				= "great aunt";      // fathers's father's sister
$pgv_lang["sosa_aunt_bm_5"] 				= "great aunt";      // father's mother's sister
$pgv_lang["sosa_aunt_bm_6"] 				= "great aunt";      // mother's father's sister
$pgv_lang["sosa_aunt_bm_7"] 				= "great aunt";      // mother's mother's sister
// for the general case of aunts of the nth degree use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["n_x_paternal_aunt_bm"]		= "%2\$d x great aunt";
$pgv_lang["n_x_maternal_aunt_bm"]	    = "%2\$d x great aunt";

// if a specific cousin relationship cannot be represented in a language translate as "";
$pgv_lang["male_cousin_1"]              = "first cousin";
$pgv_lang["male_cousin_2"]              = "second cousin";
$pgv_lang["male_cousin_3"]              = "third cousin";
$pgv_lang["male_cousin_4"]              = "fourth cousin";
$pgv_lang["male_cousin_5"]              = "fifth cousin";
$pgv_lang["male_cousin_6"]              = "sixth cousin";
$pgv_lang["male_cousin_7"]              = "seventh cousin";
$pgv_lang["male_cousin_8"]              = "eighth cousin";
$pgv_lang["male_cousin_9"]              = "ninth cousin";
$pgv_lang["male_cousin_10"]             = "tenth cousin";
$pgv_lang["male_cousin_11"]             = "eleventh cousin";
$pgv_lang["male_cousin_12"]             = "twelfth cousin";
$pgv_lang["male_cousin_13"]             = "thirteenth cousin";
$pgv_lang["male_cousin_14"]             = "fourteenth cousin";
$pgv_lang["male_cousin_15"]             = "fifteenth cousin";
$pgv_lang["male_cousin_16"]             = "sixteenth cousin";
$pgv_lang["male_cousin_17"]             = "seventeenth cousin";
$pgv_lang["male_cousin_18"]             = "eighteenth cousin";
$pgv_lang["male_cousin_19"]             = "nineteenth cousin";
$pgv_lang["male_cousin_20"]             = "twentieth cousin";
$pgv_lang["male_cousin_n"]              = "%d x cousin";
$pgv_lang["female_cousin_1"]            = "first cousin";
$pgv_lang["female_cousin_2"]            = "second cousin";
$pgv_lang["female_cousin_3"]            = "third cousin";
$pgv_lang["female_cousin_4"]            = "fourth cousin";
$pgv_lang["female_cousin_5"]            = "fifth cousin";
$pgv_lang["female_cousin_6"]            = "sixth cousin";
$pgv_lang["female_cousin_7"]            = "seventh cousin";
$pgv_lang["female_cousin_8"]            = "eighth cousin";
$pgv_lang["female_cousin_9"]            = "ninth cousin";
$pgv_lang["female_cousin_10"]           = "tenth cousin";
$pgv_lang["female_cousin_11"]           = "eleventh cousin";
$pgv_lang["female_cousin_12"]           = "twelfth cousin";
$pgv_lang["female_cousin_13"]           = "thirteenth cousin";
$pgv_lang["female_cousin_14"]           = "fourteenth cousin";
$pgv_lang["female_cousin_15"]           = "fifteenth cousin";
$pgv_lang["female_cousin_16"]           = "sixteenth cousin";
$pgv_lang["female_cousin_17"]           = "seventeenth cousin";
$pgv_lang["female_cousin_18"]           = "eighteenth cousin";
$pgv_lang["female_cousin_19"]           = "nineteenth cousin";
$pgv_lang["female_cousin_20"]           = "twentieth cousin";
$pgv_lang["female_cousin_n"]            = "%d x cousin";

// Only referenced from english specific functions
$pgv_lang["removed_ascending_1"]   = " once removed ascending";
$pgv_lang["removed_ascending_2"]   = " twice removed ascending";
$pgv_lang["removed_ascending_3"]   = " three times removed ascending";
$pgv_lang["removed_ascending_4"]   = " four times removed ascending";
$pgv_lang["removed_ascending_5"]   = " five times removed ascending";
$pgv_lang["removed_ascending_6"]   = " six times removed ascending";
$pgv_lang["removed_ascending_7"]   = " seven times removed ascending";
$pgv_lang["removed_ascending_8"]   = " eight times removed ascending";
$pgv_lang["removed_ascending_9"]   = " nine times removed ascending";
$pgv_lang["removed_ascending_10"]  = " ten times removed ascending";
$pgv_lang["removed_ascending_11"]  = " eleven times removed ascending";
$pgv_lang["removed_ascending_12"]  = " twelve times removed ascending";
$pgv_lang["removed_ascending_13"]  = " thirteen times removed ascending";
$pgv_lang["removed_ascending_14"]  = " fourteen times removed ascending";
$pgv_lang["removed_ascending_15"]  = " fifteen times removed ascending";
$pgv_lang["removed_ascending_16"]  = " sixteen times removed ascending";
$pgv_lang["removed_ascending_17"]  = " seventeen times removed ascending";
$pgv_lang["removed_ascending_18"]  = " eighteen times removed ascending";
$pgv_lang["removed_ascending_19"]  = " nineteen times removed ascending";
$pgv_lang["removed_ascending_20"]  = " twenty times removed ascending";
$pgv_lang["removed_descending_1"]  = " once removed descending";
$pgv_lang["removed_descending_2"]  = " twice removed descending";
$pgv_lang["removed_descending_3"]  = " three times removed descending";
$pgv_lang["removed_descending_4"]  = " four times removed descending";
$pgv_lang["removed_descending_5"]  = " five times removed descending";
$pgv_lang["removed_descending_6"]  = " six times removed descending";
$pgv_lang["removed_descending_7"]  = " seven times removed descending";
$pgv_lang["removed_descending_8"]  = " eight times removed descending";
$pgv_lang["removed_descending_9"]  = " nine times removed descending";
$pgv_lang["removed_descending_10"] = " ten times removed descending";
$pgv_lang["removed_descending_11"] = " eleven times removed descending";
$pgv_lang["removed_descending_12"] = " twelve times removed descending";
$pgv_lang["removed_descending_13"] = " thirteen times removed descending";
$pgv_lang["removed_descending_14"] = " fourteen times removed descending";
$pgv_lang["removed_descending_15"] = " fifteen times removed descending";
$pgv_lang["removed_descending_16"] = " sixteen times removed descending";
$pgv_lang["removed_descending_17"] = " seventeen times removed descending";
$pgv_lang["removed_descending_18"] = " eighteen times removed descending";
$pgv_lang["removed_descending_19"] = " nineteen times removed descending";
$pgv_lang["removed_descending_20"] = " twenty times removed descending";

//-- GEDCOM edit utility
$pgv_lang["check_delete"]			= "Jeste li sigurni da želite obrisati ove GEDCOM činjenice?";
$pgv_lang["access_denied"]			= "<b>Pristup zabranjen</b><br />Vi nemate pravo pristupa ovim resursima.";
$pgv_lang["changes_exist"]			= "Changes have been made to this GEDCOM.";
$pgv_lang["find_place"] 			= "Nađi mjesto";
$pgv_lang["close_window"]			= "Zatvori prozor";
$pgv_lang["close_window_without_refresh"] = "Zatvori prozor bez Reloading";
$pgv_lang["place_contains"] 		= "Place contains:";
$pgv_lang["add"]					= "Dodaj";
$pgv_lang["custom_event"]			= "Custom Event";
$pgv_lang["delete_person"]			= "Obriši ovu osobu";
$pgv_lang["confirm_delete_person"]	= "Jeste li sigurni da želite obrisati ovu osobu iz GEDCOM datoteke?";
$pgv_lang["find_media"] 			= "Find Media";
$pgv_lang["set_link"]				= "Set link";
$pgv_lang["delete_source"]			= "Obriši ovaj Source";
$pgv_lang["delete_shared_note"]		= "Obriši ovaj Shared Note";
$pgv_lang["confirm_delete_source"]	= "Jeste li sigurni da želite obrisati ovaj Izvor from the GEDCOM file?";
$pgv_lang["confirm_delete_shared_note"]		= "Jeste li sigurni da želite obrisati ovu Shared Note?";
$pgv_lang["find_family"]			= "Pronađi porodicu";
$pgv_lang["find_fam_list"]			= "Pronađi listu porodica";
$pgv_lang["edit_name"]				= "Editiraj ime";
$pgv_lang["delete_name"]			= "Obriši ime ";
$pgv_lang["select_date"]			= "Izaberi datum";
$pgv_lang["user_cannot_edit"]		= "Ovaj korisnik ne može ispravljati GEDCOM.";
$pgv_lang["ged_noshow"]				= "Ova strana je bila zabranjena od strane administratora.";

//-- calendar.php messages
$pgv_lang["bdm"]					= "Births, Deaths, Marriages";
$pgv_lang["on_this_day"]			= "Na današnji dan ...";
$pgv_lang["in_this_month"]			= "U ovom mjesecu ...";
$pgv_lang["in_this_year"]			= "U ovoj godini ...";
$pgv_lang["year_anniversary"]		= "#year_var# year anniversary";
$pgv_lang["today"]					= "Danas";
$pgv_lang["day"]					= "Day:";
$pgv_lang["month"]					= "Month:";
$pgv_lang["showcal"]				= "Prikaži događaje od:";
$pgv_lang["anniversary"]			= "Godišnjica";
$pgv_lang["anniversary_calendar"]	= "Kalendar godišnjica";
$pgv_lang["sunday"] 				= "Sunday";
$pgv_lang["monday"] 				= "Monday";
$pgv_lang["tuesday"]				= "Tuesday";
$pgv_lang["wednesday"]				= "Wednesday";
$pgv_lang["thursday"]				= "Thursday";
$pgv_lang["friday"] 				= "Friday";
$pgv_lang["saturday"]				= "Saturday";
$pgv_lang["viewday"]				= "Vidi dan";
$pgv_lang["viewmonth"]				= "Vidi mjesec";
$pgv_lang["viewyear"]				= "Vidi godinu";
$pgv_lang["all_people"] 			= "Svi ljudi";
$pgv_lang["living_only"]			= "Živući ljudi";
$pgv_lang["recent_events"]			= "Recent Years (&lt; 100 yrs)";
$pgv_lang["day_not_set"]			= "Dan nije postavljen";

//-- user self registration module
$pgv_lang["lost_password"]			= "Izgubili ste lozinku?";
$pgv_lang["requestpassword"]		= "Zahtjevajte novu lozinku";
$pgv_lang["no_account_yet"] 		= "Nemate korisničko ime?";
$pgv_lang["requestaccount"] 		= "Zahtjevajte novi korisničko ime";
$pgv_lang["emailadress"]			= "Email adresa";
$pgv_lang["mandatory"] 			= "Polja označena sa * su obavezna.";
$pgv_lang["mail01_line01"]			= "Poštovanje #user_fullname# ...";
$pgv_lang["mail01_line02"]			= "Zahtjev je zaprimljen za #SERVER_NAME# zbog otvaranja PhpGedView korisničkog računa sa vašom e-mail adresom: #user_email#.";
$pgv_lang["mail01_line03"]			= "Informacija o zahtjevu je prikazana na poveznici ispod.";
$pgv_lang["mail01_line04"]			= "Molim kliknite na slijedeću poveznicu i ispunite zahtijevane podatke kako bi potvrdili vaš zahtjev i e-mail adresu.";
$pgv_lang["mail01_line05"]			= "Ako niste zatražili otvaranje korisničkog imena, samo obrišite ovu poruku.";
$pgv_lang["mail01_line06"]			= "Vi nećete više dobiti nijednu e-mail poruku s ove web stranice, jer će zahtje za otvaranjem korisničkog računa biti automatski obrisan poslije sedam dana.";
$pgv_lang["mail01_subject"] 		= "Vaša registracija na #SERVER_NAME#";

$pgv_lang["mail02_line01"]			= "Poštovanje Administrator ...";
$pgv_lang["mail02_line02"]			= "A prospective user registered himself with PhpGedView at #SERVER_NAME#.";
$pgv_lang["mail02_line03"]			= "The user received an email with the information necessary to confirm his access request.";
$pgv_lang["mail02_line04"]			= "You will be informed by email when this prospective user has confirmed his request.  You can then complete the process by activating the user name.  The new user will not be able to login until you activate the account.";
$pgv_lang["mail02_line04a"]			= "You will be informed by email when this prospective user has confirmed his request.  After this, the user will be able to login bez any action on your part.";
$pgv_lang["mail02_subject"] 		= "New registration at #SERVER_NAME#";

$pgv_lang["hashcode"]				= "Kod provjere:";
$pgv_lang["thankyou"]				= "Poštovanje #user_fullname# ...<br />Zahvaljujem na registraciji.";
$pgv_lang["pls_note06"] 			= "Poslati ćemo vam potvrdni e-mail na vašu adresu <b>#user_email#</b>. Vi morate provjeriti svoj zahtjev za korisničkim imenom slijedeći instrukcije u emailu potvrde. Ako ne potvrdite vaš zahtjev za korisničkim imenom unutar sedam dana, vaš zahtjev bit će odbačen automatski !  Morati ćete tražiti zahtjev ponovno.<br /><br />Nakon što vi slijedite instrukcije u potvrdnoj e-mail pošti, administrator mora odobriti vaš zahtjev prije nego što se može koristiti vaš račun .<br /><br />Za prijavu na ovu stranicu, vi morate znati svoje korisničko ime i lozinku.<br /><br />";
$pgv_lang["pls_note06a"] 			= "Poslati ćemo vam potvrdni e-mail na vašu adresu <b>#user_email#</b>. Vi morate provjeriti svoj zahtjev za korisničkim imenom slijedeći instrukcije u emailu potvrde. Ako ne potvrdite vaš zahtjev za korisničkim imenom unutar sedam dana, vaš zahtjev bit će odbačen automatski !  Morati ćete tražiti zahtjev ponovno.<br /><br />Nakon što vi slijedite instrukcije u potvrdnoj e-mail pošti, vi se možete prijaviti.  Za prijavu na ovu stranicu, vi morate znati svoje korisničko ime i lozinku.<br /><br />";

$pgv_lang["registernew"]			= "Potvrđivanje novog korisničkog imena";
$pgv_lang["user_verify"]			= "Provjera korisničkog imena";
$pgv_lang["send"]					= "Pošalji";

$pgv_lang["pls_note07"] 			= "~#pgv_lang[user_verify]#~<br /><br />To confirm your account request, please type in your user name, your password, and the verification code you received by email.";
$pgv_lang["pls_note08"] 			= "Podaci za korisnika <b>#user_name#</b> su provjereni.";

$pgv_lang["mail03_line01"]			= "Poštovanje Administrator ...";
$pgv_lang["mail03_line02"]			= "Korisnik #newuser[username]# (#newuser[fullname]#) je potvrdio svoj zahtjevza korisničkim računaom.";
$pgv_lang["mail03_line03"]			= "Molim kliknite na poveznicu dolje za prijavu na vašu stranicu.  You must Edit the user to activate the account so that he can login to your site.";
$pgv_lang["mail03_line03a"]			= "Vi ne morate poduzeti nakakvu akciju; korisnik se sad može prijaviti.";
$pgv_lang["mail03_subject"] 		= "Novi korisnik na #SERVER_NAME#";

$pgv_lang["pls_note09"] 			= "Vi ste potvrdili vaš zahtjev kako bi postali registrirani korisnik.";
$pgv_lang["pls_note10"] 			= "Administrator je upoznat.  Uskoro kad vam izda dozvolu za prijavu, vi ćete moći se prijaviti sa svojim korisničkim imenom i lozinkom.";
$pgv_lang["pls_note10a"]			= "Vi se sad možete prijaviti sa vašim korisničkim imenom i lozinkom.";
$pgv_lang["data_incorrect"] 		= "Podaci nisu u redu, molim pokušajte ponovno";
$pgv_lang["user_not_found"] 		= "Could not verify the information you entered.  Please try again or contact the site administrator for more information.";

$pgv_lang["lost_pw_reset"]			= "Zahtjev za novu lozinku";
$pgv_lang["pls_note11"] 			= "To have your password reset, enter your user name.<br /><br />We will respond by sending you an email to the address registered with your account.  The email will contain a URL and confirmation code for your account. When you visit this URL, you can change your password and login to this site. For security reasons, you should not give this confirmation code to anyone.<br /><br />If you require assistance from the site administrator, please use the contact link below.";

$pgv_lang["mail04_line01"]			= "Poštovanje #user_fullname# ...";
$pgv_lang["mail04_line02"]			= "Nova lozinka je zatražena za vaše korisničko ime.";
$pgv_lang["mail04_line03"]			= "Recommendation:";
$pgv_lang["mail04_line04"]			= "Molim kliknite na poveznicu ispod ili kopirajte ju u vaš browser, login sa novom lozinkom, i promijenite ju odmah da očuvate integritet sigurnosti vaših podataka.";
$pgv_lang["mail04_line05"]			= "Nakon što ste se prijavili, odaberite «#pgv_lang[editowndata]#» poveznicu ispod «#pgv_lang[mygedview]#» meni i ispuni polja lozinki da promijenite vašu lozinku.";
$pgv_lang["mail04_subject"] 		= "Zahtjev za podacima na #SERVER_NAME#";

$pgv_lang["pwreqinfo"]				= "Hello...<br /><br />Email sa novom lozinkom vam je poslan na adresu koju smo umali u datoteci za <b>#user[email]#</b>.<br /><br />Molimo provjerite vaš email račun; vi ćete primiti našu poruku uskoro.<br /><br />Preporuka:<br />Vi biste morali se prijaviti na ovu stranicu sa novom lozinkom što prije, i vi biste trebali promijeniti vašu lozinku da sačuvate svoje podatke sigurnim.";

$pgv_lang["myuserdata"] 			= "Moj korisničko ime";
$pgv_lang["user_theme"] 			= "Moja Tema";
$pgv_lang["mgv"]					= "Moj portal";
$pgv_lang["mygedview"]				= "Moj portal";
$pgv_lang["passwordlength"] 		= "Lozinka mora imati najmanje šest znakova";
$pgv_lang["welcome_text_auth_mode_1"]	= "<center><b>Dobrodošli na Rodoslovlje 1</b></center><br />Rodoslovlju mogu pristupiti svi posjetitelji koji su registrirani.<br /><br />Ako ste već registrirani ovdje se možete prijaviti. Ako još niste registrirani, podnesite zahtjev tako što ćete kliknuti na odgovarajući link na ovoj stranici.<br /><br />Pošto razmotri Vaš zahtjev administrator rodoslovlja će aktivirati Vaše korisničko ime i biti ćete obaviješteni emailom.";
$pgv_lang["welcome_text_auth_mode_2"]	= "<center><b>Dobrodošli na Rodoslovlje 2</b></center><br />Rodoslovlju mogu pristupiti samo <u>ovlašteni</u> korisnici.<br /><br />Ako ste već registrirani ovdje se možete prijaviti. Ako još niste registrirani, podnesite zahtjev tako što ćete kliknuti na odgovarajući link na ovoj stranici.<br /><br />Pošto razmotri Vaš zahtjev administrator će ga ili odobriti ili odbaciti i o tome ćete biti obaviješteni emailom.";
$pgv_lang["welcome_text_auth_mode_3"]	= "<center><b>Dobrodošli na Rodoslovlje 3</b></center><br />Pristup podacima živih osoba u rodoslovlju imaju samo <u>registrirani članovi njihovih porodica</u>.<br /><br />Ako ste već registrirani ovdje se možete prijaviti. Ako još niste registrirani, podnesite zahtjev tako što ćete kliknuti na odgovarajući link na ovoj stranici.<br /><br />Pošto razmotri Vaš zahtjev administrator će ga ili odobriti ili odbaciti i o tome ćete biti obaviješteni emailom.";
$pgv_lang["welcome_text_cust_head"] 	= "<center><b>Dobrodošli na Rodoslovlje 4</b></center><br />Pristup podacima živih osoba u rodoslovlju imaju samo prijavljeni korisnici sa lozinkom.<br />";
$pgv_lang["acceptable_use"]			= "<div class=\"largeError\">Napomena:</div><div class=\"error\">Popunjen i poslani formular podrazumijeva da se slažete sa slijedećim:<ul><li>da ćete poštovati privatnost živih osoba iz rodoslovlja;</li><li>i da ćete podnijeti ili unijeti podatke za osobe koje trebaju da budu u rodoslovlju.</li></ul></div>";


//-- mygedview page
$pgv_lang["upcoming_events"]		= "Predstojeći događaji";
$pgv_lang["living_or_all"]			= "Prikaži only events of living people?";
$pgv_lang["basic_or_all"]			= "Prikaži only Births, Deaths, and Marriages?";
$pgv_lang["style"]					= "Presentation Style";
$pgv_lang["style1"]					= "List";
$pgv_lang["style2"]					= "Table";
$pgv_lang["style3"]					= "Tagcloud";
$pgv_lang["sort_style"]				= "Sort Style";
$pgv_lang["by_anniv"]				= "By Anniversary";
$pgv_lang["by_alpha"]				= "Alphabetically";
$pgv_lang["cal_download"]			= "Allow calendar events download?";
$pgv_lang["no_events_living"]		= "Nema događaja za living people exist for the next #pgv_lang[global_num1]# days.";
$pgv_lang["no_events_living1"]		= "Nema događaja za living people exist for tomorrow.";
$pgv_lang["no_events_all"]			= "Nema događaja exist for the next #pgv_lang[global_num1]# days.";
$pgv_lang["no_events_all1"]			= "Nema događaja exist for tomorrow.";
$pgv_lang["no_events_privacy"]		= "Događaji exist for the next #pgv_lang[global_num1]# days, but privacy restrictions prevent you from seeing them.";
$pgv_lang["no_events_privacy1"]		= "Događaji exist for tomorrow, but privacy restrictions prevent you from seeing them.";
$pgv_lang["more_events_privacy"]	= "<br />More events exist for the next #pgv_lang[global_num1]# days, but privacy restrictions prevent you from seeing them.";
$pgv_lang["more_events_privacy1"]	= "<br />More events exist for tomorrow, but privacy restrictions prevent you from seeing them.";
$pgv_lang["none_today_living"]		= "Nema događaja za živuće ljude za danas.";
$pgv_lang["none_today_all"]			= "Nema događaja za današnji dan.";
$pgv_lang["none_today_privacy"]		= "Značajni događaji za danas postoje ali ih mogu videti samo prijavljeni korisnici.";
$pgv_lang["more_today_privacy"]		= "<br />Još ima značajnih događaja za danas ali ih mogu videti samo prijavljeni korisnici.";
$pgv_lang["chat"]					= "Chat";
$pgv_lang["users_logged_in"]		= "Prijavljeni korisnici";
$pgv_lang["anon_users"]				= "#pgv_lang[global_num1]# anonymous logged-in users";
$pgv_lang["anon_user"]				= "1 anonymous logged-in user";
$pgv_lang["login_user"]				= "1 prijavljen korisnik";
$pgv_lang["login_users"]			= "#pgv_lang[global_num1]# logged-in users";
$pgv_lang["no_login_users"]			= "Nijedan korisnik nije prijavljen";
$pgv_lang["message"]				= "Pošalji poruku";
$pgv_lang["my_messages"]			= "Moje poruke";
$pgv_lang["date_created"]			= "Date Sent:";
$pgv_lang["message_from"]			= "Email Address:";
$pgv_lang["message_from_name"]		= "Vaše Ime:";
$pgv_lang["message_to"] 			= "Poruka za:";
$pgv_lang["message_subject"]		= "Subject:";
$pgv_lang["message_body"]			= "Body:";
$pgv_lang["no_to_user"] 			= "No recipient user was provided.  Cannot continue.";
$pgv_lang["provide_email"]			= "Please provide your email address so that we may contact you in response to this message.  If you do not provide your email address we will not be able to respond to your inquiry.  You email address will not be used in any other way besides responding to this inquiry.";
$pgv_lang["reply"]					= "Reply";
$pgv_lang["message_deleted"]		= "poruka je obrisana";
$pgv_lang["message_sent"]			= "poruka uspješno sent to #TO_USER#";
$pgv_lang["reset"]					= "Početni položaj";
$pgv_lang["site_default"]			= "Site Default";
$pgv_lang["mygedview_desc"] 		= "Stranica Moj portal omogućava da sebi obilježite omiljene upise, da pratite prestojeće događaje i surađujete sa drugim korisnicima ovog rodoslovlja";
$pgv_lang["no_messages"]			= "Vi nemate neriješenih poruka.";
$pgv_lang["clicking_ok"]			= "When you click OK, another window will open and you may contact #user[fullname]#";
$pgv_lang["favorites"]				= "Omiljene stranice";
$pgv_lang["my_favorites"]			= "Moje omiljene stranice";
$pgv_lang["no_favorites"]			= "Niste izabrali nijednu omiljenu stranicu ili upis.<br /><br />Da dodate pojedinačni upis, upis porodice, ili izvora podataka kliknite na <b>#pgv_lang[add_favorite]#</b> link da vam se otvore polja gdje ih možete unijeti ili ih pretraživati da nađete njihov identifikacioni broj. Umesto identifikacionog broja možete unijeti URL ili naslov traženog parametra.";
$pgv_lang["add_to_my_favorites"]	= "Dodaj u moje omiljene stranice";
$pgv_lang["gedcom_favorites"]		= "Često posjećivane stranice na rodoslovlju";
$pgv_lang["no_gedcom_favorites"]	= "Trenutno često posjećivane stranice nisu upisane. Administrator ih može dodati da se vide kada se rodoslovlje otvori.";
$pgv_lang["confirm_fav_remove"] 	= "Are you sure you want to remove this item from your list of Favorites?";
$pgv_lang["invalid_email"]			= "Molim unesite a valid email address.";
$pgv_lang["enter_subject"]			= "Molim unesite a message subject.";
$pgv_lang["enter_body"] 			= "Molim unesite some message text before sending.";
$pgv_lang["confirm_message_delete"] = "Jeste li sigurni da želite obrisati ovu message?  It cannot be retrieved later.";
$pgv_lang["message_email1"] 		= "The following message has been sent to your PhpGedView user account from ";
$pgv_lang["message_email2"] 		= "You sent the following message to a PhpGedView user:";
$pgv_lang["message_email3"] 		= "You sent the following message to a PhpGedView administrator:";
$pgv_lang["viewing_url"]			= "Ova message was sent while viewing the following URL: ";
$pgv_lang["messaging2_help"]		= "When you send this message you will receive a copy sent via email to the address you provided.";
$pgv_lang["random_picture"] 		= "Slučajno izabrana slika";
$pgv_lang["message_instructions"]	= "<b>Please Note:</b> Private information of living individuals will only be given to family relatives and close friends.  You will be asked to verify your relationship before you will receive any private data.  Sometimes information of dead persons may also be private.  If this is the case, it is because there is not enough information known about the person to determine whether they are alive or not and we probaby do not have more information on this person.<br /><br />Before asking a question, please verify that you are inquiring about the correct person by checking dates, places, and close relatives.  If you are submitting changes to the genealogical data, please include the sources where you obtained the data.<br /><br />";
$pgv_lang["sending_to"] 			= "Ova message will be sent to #TO_USER#";
$pgv_lang["preferred_lang"] 		= "Ovaj user prefers to receive messages in #USERLANG#";
$pgv_lang["gedcom_created_using"]	= "Ovo rodoslovlje je napravljeno sa <b>#CREATED_SOFTWARE# #CREATED_VERSION#</b>";
$pgv_lang["gedcom_created_on"]		= "Ovo rodoslovje je započeto <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_created_on2"] 	= " on <b>#CREATED_DATE#</b>";
$pgv_lang["gedcom_stats"]			= "Statistički podaci";
$pgv_lang["stat_individuals"]		= "Pojedinaca";
$pgv_lang["stat_families"]			= "Porodica";
$pgv_lang["stat_sources"]			= "Dokumenata";
$pgv_lang["stat_other"] 			= "Ostalih zapisa";
$pgv_lang["stat_earliest_birth"] 	= "Godina prvog zabilježenog rođenja";
$pgv_lang["stat_latest_birth"] 	= "Godina posljednjeg zabilježenog rođenja";
$pgv_lang["stat_earliest_death"] 	= "Godina prve zabilježene smrti";
$pgv_lang["stat_latest_death"] 	= "Godina zadnje zabilježene smrti";
$pgv_lang["customize_page"] 		= "Promijeni svoj portal";
$pgv_lang["customize_gedcom_page"]	= "Promijeni ovu početnu stranicu";
$pgv_lang["upcoming_events_block"]	= "Nastupajući događaji";
$pgv_lang["upcoming_events_descr"]	= "The Upcoming Events block shows anniversaries of events that will occur in the near future.  You can configure the amount of detail shown, and the administrator can configure how far into the future this block will look.";
$pgv_lang["todays_events_block"]	= "Na današnji dan";
$pgv_lang["todays_events_descr"]	= "Na današnji dan, u vašoj prošlosti... block shows anniversaries of events for today.  Vi možete konfigurirati količinu prikazanih podataka.";
$pgv_lang["todo_block"] = "&quot;To Do&quot; tasks";
$pgv_lang["todo_descr"] = "The To Do block lists all outstanding _TODO facts in the database.";
$pgv_lang["todo_show_other"]     = "Prikaži other users' tasks";
$pgv_lang["todo_show_unassigned"]= "Prikaži unassigned tasks";
$pgv_lang["todo_show_future"]    = "Prikaži future tasks";
$pgv_lang["todo_nothing"]        = "There are no &quot;To Do&quot; tasks.";
$pgv_lang["yahrzeit_block"]			= "Upcoming Yahrzeiten";
$pgv_lang["yahrzeit_descr"]			= "The Upcoming Yahrzeiten block shows anniversaries of death dates that will occur in the near future.  You can configure the period shown, and the Administrator can configure how far into the future this block will look.";
$pgv_lang["logged_in_users_block"]	= "Logged In Users";
$pgv_lang["logged_in_users_descr"]	= "The Logged In Users block shows a list of the users who are currently logged in.";
$pgv_lang["user_messages_block"]	= "User porukas";
$pgv_lang["user_messages_descr"]	= "The User porukas block shows a list of the messages that have been sent to the active user.";
$pgv_lang["user_favorites_block"]	= "User Favorites";
$pgv_lang["user_favorites_descr"]	= "The User Favorites block shows the user a list of his favorite people in the database so that he can easily link to them.";
$pgv_lang["welcome_block"]			= "User Welcome";
$pgv_lang["welcome_descr"]			= "The User Welcome block shows the user the current date and time, quick links to modify his account or go to his own Pedigree dijagram, and a link to customize his MyGedView Portal page.";
$pgv_lang["random_media_block"] 	= "Random Media";
$pgv_lang["random_media_descr"] 	= "The Random Media block randomly selects a photo or other media item from the currently active database and displays it to the user.<br /><br />The administrator determines whether this block can show media items associated with persons or events.";
$pgv_lang["random_media_persons_or_all"]	= "Prikaži only persons, events, or all?";
$pgv_lang["random_media_persons"]	= "Persons";
$pgv_lang["random_media_events"]	= "Događaji";
$pgv_lang["gedcom_block"]			= "GEDCOM Welcome";
$pgv_lang["gedcom_descr"]			= "The GEDCOM Welcome block works the same as the User Welcome block.  It welcomes the visitor to the site and displays the title of the currently active database as well as the current date and time.";
$pgv_lang["gedcom_favorites_block"] = "GEDCOM Favorites";
$pgv_lang["gedcom_favorites_descr"] = "The GEDCOM Favorites block gives the administrator the ability to designate individuals from the database so that their information is easily accessible to all.  Ovo is a way to highlight people who are important in your family history.";
$pgv_lang["gedcom_stats_block"] 	= "GEDCOM Statistika";
$pgv_lang["gedcom_stats_descr"] 	= "The GEDCOM Statistika block shows the visitor some basic information about the database, such as when it was created and how many people are in it.<br /><br />It also has a list of the most frequent surnames.  You can configure this block to not show the Frequent Surnames list, and you can also configure the GEDCOM to remove or add names to this list.  You can set the occurrence threshold for this list in the GEDCOM configuration.";
$pgv_lang["gedcom_stats_show_surnames"]	= "Prikaži common surnames?";
$pgv_lang["portal_config_intructions"]	= "~#pgv_lang[customize_page]# <br /> #pgv_lang[customize_gedcom_page]#~<br /><br />You can customize the page by positioning the blocks on the page the way that you want them.<br /><br />The page is divided into <b>Glavni</b> and <b>Right</b> sections.	The <b>Glavni</b> section blocks appear larger and under the page title.  The <b>Right</b> section starts to the right of the title and goes down the right side of the page.<br /><br />Each section has its own list of blocks that will be printed on the page in the order they are listed.  You can add, remove, and reorder the blocks however you like.<br /><br />When one of the block lists is empty, the remaining blocks will take up the whole width of the page.<br /><br />";
$pgv_lang["login_block"]			= "Prijava";
$pgv_lang["login_descr"]			= "The Login block accepts a user name and password for users to login.";
$pgv_lang["theme_select_block"] 	= "Theme Select";
$pgv_lang["theme_select_descr"] 	= "The Theme Select block displays the Theme selector even when the Change Theme feature is disabled.";
$pgv_lang["block_top10_title"]		= "Najboljih 10 Surnames";
$pgv_lang["block_top10"]			= "Najboljih 10 Surnames";
$pgv_lang["block_top10_descr"]		= "Ovaj block shows a table of the 10 most frequently occurring surnames in the database.  The actual number of surnames shown in this block is configurable.  You can configure the GEDCOM to remove names from this list.";
$pgv_lang["block_givn_top10_title"]		= "Najboljih 10 imena";
$pgv_lang["block_givn_top10"]			= "Najboljih 10 imena";
$pgv_lang["block_givn_top10_descr"]		= "Ovaj block shows a table of the 10 most frequently occurring given names in the database.  The actual number of given names shown in this block is configurable.";

$pgv_lang["gedcom_news_block"]		= "Novo u Rodoslovlju župe";
$pgv_lang["gedcom_news_descr"]		= "The GEDCOM News block shows the visitor news releases or articles posted by an admin user.<br /><br />The News block is a good place to announce a significant database update, a family reunion, or the birth of a child.";
$pgv_lang["gedcom_news_limit"]		= "Ograniči display by:";
$pgv_lang["gedcom_news_limit_nolimit"]	= "No limit";
$pgv_lang["gedcom_news_limit_date"]		= "Age of item";
$pgv_lang["gedcom_news_limit_count"]	= "Broj items";
$pgv_lang["gedcom_news_flag"]		= "Ograničenje:";
$pgv_lang["gedcom_news_archive"] 	= "Vidi arhivu";
$pgv_lang["user_news_block"]		= "User Journal";
$pgv_lang["user_news_descr"]		= "The User Journal block lets the user keep notes or a journal online.";
$pgv_lang["my_journal"] 			= "My Journal";
$pgv_lang["no_journal"] 			= "You have not created any Journal items.";
$pgv_lang["confirm_journal_delete"] = "Jeste li sigurni da želite obrisati ovaj Journal unos?";
$pgv_lang["add_journal"]			= "Dodaj novi Journal unos";
$pgv_lang["gedcom_news"]			= "Obavijesti";
$pgv_lang["confirm_news_delete"]	= "Jeste li sigurni da želite obrisati ovaj News unos?";
$pgv_lang["add_news"]				= "Dodaj a News article";
$pgv_lang["no_news"]				= "No News articles have been submitted.";
$pgv_lang["edit_news"]				= "Add/Edit Journal/News unos";
$pgv_lang["enter_title"]			= "Molim unesite a title.";
$pgv_lang["enter_text"] 			= "Molim unesite some text for this News or Journal unos.";
$pgv_lang["news_saved"] 			= "News/Journal unos uspješno spremljen.";
$pgv_lang["article_text"]			= "Entry Text:";
$pgv_lang["main_section"]			= "Glavni Section Blocks";
$pgv_lang["right_section"]			= "Right Section Blocks";
$pgv_lang["available_blocks"]		= "Available Blocks";
$pgv_lang["move_up"]				= "Move Up";
$pgv_lang["move_down"]				= "Move Down";
$pgv_lang["move_right"] 			= "Move Right";
$pgv_lang["move_left"]				= "Move Left";
$pgv_lang["broadcast_all"]			= "Prenesi svim korisnicima";
$pgv_lang["hit_count"]				= "Broj posjeta:";
$pgv_lang["phpgedview_message"] 	= "PhpGedView poruka";
$pgv_lang["common_surnames"]		= "Najčešća prezimena";
$pgv_lang["default_news_title"] 	= "Dobrodošli na rodoslovlje župe";
$pgv_lang["default_news_text"]		= "Ovo online rodoslovlje sa bazom podataka je standardan geneološki pristup u izradi porodičnih rodoslovlja koji je zamijenio tradicionalnu metodu ispisivanja podataka na papiru. Podaci unešeni preko web stranice omogućuju da se prikažu i ispisuju različiti grafički prikazi, tabele, izvještaji i statistike porodičnog stabla sa pretragom po svim parametrima, uz još mnogo drugih mogućnosti. Svaka upisana osoba ima svoju posebnu stranicu gdje se po potrebi mogu dodavati fotografije, skenirani dokumenti, zvučni i video zapisi.<br /><br />Svatko tko se registra može i sam da unosi, dodaje i ispravlja podatke za sebe, svoje pretke i potomke ali i za sve ostale upisane u bazu podataka. Ovim se stvara mogućnost da svi zajedno pišemo povijest župe onako kako se i dešava. Tehnički je omogućeno da zajednički stvaramo knjigu o sebi sa tako reći dnevnim izdanjima.<br /><br />";
$pgv_lang["reset_default_blocks"]	= "Reset to Default Blocks";
$pgv_lang["recent_changes"] 		= "Recent Changes";
$pgv_lang["recent_changes_block"]	= "Recent Changes";
$pgv_lang["recent_changes_descr"]	= "The Recent Changes block will list all of the changes that have been made to the database in the last month.  Ovaj block can help you stay current with the changes that have been made.  Changes are detected automatically, using the CHAN tag defined in the GEDCOM Standard.";
$pgv_lang["recent_changes_none"]	= "<b>There have been no changes within the last #pgv_lang[global_num1]# days.</b><br />";
$pgv_lang["recent_changes_some"]	= "<b>Changes made within the last #pgv_lang[global_num1]# days</b><br />";
$pgv_lang["show_empty_block"]		= "Should this block be hidden when it is empty?";
$pgv_lang["hide_block_warn"]		= "If you hide an empty block, you will not be able to change its configuration until it becomes visible by no longer being empty.";
$pgv_lang["delete_selected_messages"]	= "Obriši izabrane poruke";
$pgv_lang["use_blocks_for_default"]	= "Use these blocks as the default block configuration for all users?";
$pgv_lang["block_not_configure"]	=	"Ovaj block cannot be configured.";

//-- validate GEDCOM
$pgv_lang["add_media_tool"] 		= "Dodaj Media Tool";

//-- hourglass chart
$pgv_lang["hourglass_chart"]		= "Hourglass Chart";

//-- report engine
$pgv_lang["choose_report"]			= "Odaberi a report to run";
$pgv_lang["enter_report_values"]	= "Unesi report values";
$pgv_lang["selected_report"]		= "Selected izvještaj";
$pgv_lang["select_report"]			= "Odaberi izvještaj";
$pgv_lang["download_report"]		= "Download izvještaj";
$pgv_lang["reports"]				= "Pregledi";
$pgv_lang["pdf_reports"]			= "PDF reports";
$pgv_lang["html_reports"]			= "HTML reports";

//-- Ahnentafel report
$pgv_lang["ahnentafel_report"]		= "Ahnentafel izvještaj";
$pgv_lang["ahnentafel_header"]		= "Ahnentafel Report for ";
$pgv_lang["ahnentafel_generation"]	= "Generation ";
$pgv_lang["ahnentafel_pronoun_m"]	= "On ";
$pgv_lang["ahnentafel_pronoun_f"]	= "Ona ";
$pgv_lang["ahnentafel_born_m"]		= "je rođen";			// male
$pgv_lang["ahnentafel_born_f"]		= "je rođena";			// female
$pgv_lang["ahnentafel_christened_m"] = "je kršten";	// male
$pgv_lang["ahnentafel_christened_f"] = "je krštena";	// female
$pgv_lang["ahnentafel_married_m"]	= "vjenčan";			// male
$pgv_lang["ahnentafel_married_f"]	= "vjenčana";			// female
$pgv_lang["ahnentafel_married_post"]= "&nbsp;";
$pgv_lang["ahnentafel_died_m"]		= "umro";				// male
$pgv_lang["ahnentafel_died_f"]		= "umrla";				// female
$pgv_lang["ahnentafel_buried_m"]	= "was buried";			// male
$pgv_lang["ahnentafel_buried_f"]	= "was buried";			// female
$pgv_lang["ahnentafel_place"]		= " in ";				// place name follows this
$pgv_lang["ahnentafel_no_details"]	= " but the details are unknown";
$pgv_lang["ahnentafel_on"]			= " ";

//-- Changes report
$pgv_lang["changes_report"]			= "Changes izvještaj";
$pgv_lang["changes_pending_tot"]	= "Ukupan broj pending promjena: ";
$pgv_lang["changes_accepted_tot"]	= "Ukupan broj prihvaćenih promjena: ";

//-- Descendancy report
$pgv_lang["descend_report"]		= "Descendancy izvještaj";
$pgv_lang["descendancy_header"]		= "Descendancy Report for ";
$pgv_lang["son_of"]					= "son of";
$pgv_lang["daughter_of"]			= "daughter of";
$pgv_lang["child_of"]				= "Child of ";
$pgv_lang["children_of"]			= "Children of ";
$pgv_lang["descendancy_pronoun_m"]	= "He ";
$pgv_lang["descendancy_pronoun_f"]	= "She ";

$pgv_lang["family_group_report"]	= "Obiteljski izvještaj";
$pgv_lang["page"]					= "Strana";
$pgv_lang["of"] 					= "od";
$pgv_lang["enter_famid"]			= "Unesi Family ID";
$pgv_lang["show_sources"]			= "Prikaži izvore?";
$pgv_lang["show_notes"] 			= "Prikaži bilješke?";
$pgv_lang["show_basic"] 			= "Print basic events when blank?";
$pgv_lang["show_photos"]			= "Prikaži slike?";
$pgv_lang["relatives_report_ext"]	= "Expanded Relatives izvještaj";
$pgv_lang["with"]					= "with";
$pgv_lang["on"]						= "on";			// for precise dates
$pgv_lang["in"]						= "in";			// for imprecise dates
$pgv_lang["individual_report"]		= "Osobni izvještaj";
$pgv_lang["enter_pid"]				= "Unesi osobni ID";
$pgv_lang["generated_by"]			= "Generated by";
$pgv_lang["list_children"]			= "List each child in order of rođenja.";
$pgv_lang["birth_report"]			= "Birth Date and Place izvještaj";
$pgv_lang["birthplace"]				= "Birth Place contains";
$pgv_lang["birthdate1"]				= "Birth Date range start";
$pgv_lang["birthdate2"]				= "Birth Date range end";
$pgv_lang["death_report"]			= "Death Date and Place izvještaj";
$pgv_lang["deathplace"]				= "Death Place contains";
$pgv_lang["deathdate1"]				= "Death Date range start";
$pgv_lang["deathdate2"]				= "Death Date range end";
$pgv_lang["marr_report"]			= "Marriage Date and Place izvještaj";
$pgv_lang["marrplace"]				= "Marriage Place contains";
$pgv_lang["marrdate1"]				= "Marriage Date range start";
$pgv_lang["marrdate2"]				= "Marriage Date range end";
$pgv_lang["sort_by"]				= "Sort by";
$pgv_lang["cemetery_report"]		= "Cemetery Report";
$pgv_lang["burialplace"]			= "Burial Place contains";
$pgv_lang["fact_sources_report"]	= "Fact Sources";
$pgv_lang["missing_facts_report"]	= "Missing relatives facts";
$pgv_lang["sources_to_events"]		= "Sources to the events";
$pgv_lang["test_report"]		= "Test izvještaj";

$pgv_lang["cleanup"]				= "Cleanup";

//-- CONFIGURE (extra) messages for programs patriarch and statistics
$pgv_lang["statistics"]				= "Statistika";
$pgv_lang["show_stats_charts"]		= "Prikaži statistički dijagram";
$pgv_lang["decade_birth"]			= "Desetljeće rođenja";
$pgv_lang["decade_death"]			= "Desetljeće smrti";
$pgv_lang["decade_marriage"]		= "Desetljeće vjenčanja";
$pgv_lang["avg_age"]				= "Average age";

//-- Merge Records
$pgv_lang["merge_same"] 			= "Records are not the same type.  Cannot merge records that are not the same type.";
$pgv_lang["merge_step1"]			= "Spoji Step 1 of 3";
$pgv_lang["merge_step2"]			= "Spoji Step 2 of 3";
$pgv_lang["merge_step3"]			= "Spoji Step 3 of 3";
$pgv_lang["select_gedcom_records"]	= "Odaberi two GEDCOM records to merge.  The records must be of the same type.";
$pgv_lang["merge_to"]				= "Spoji To ID:";
$pgv_lang["merge_from"] 			= "Spoji From ID:";
$pgv_lang["merge_facts_same"]		= "The following facts were exactly the same in both records and will be merged automatically.";
$pgv_lang["no_matches_found"]		= "No matching facts found";
$pgv_lang["unmatching_facts"]		= "The following facts did not match.  Select the information you would like to keep.";
$pgv_lang["record"] 				= "Upis";
$pgv_lang["adding"] 				= "Adding";
$pgv_lang["updating_linked"]		= "Updating linked record";
$pgv_lang["merge_more"] 			= "Spoji more records.";
$pgv_lang["same_ids"]				= "You entered the same IDs.  You cannot merge the same records.";

//-- ANCESTRY FILE MESSAGES
$pgv_lang["ancestry_chart"] 		= "Ancestry Chart";
$pgv_lang["gen_ancestry_chart"]		= "#PEDIGREE_GENERATIONS# Generation Ancestry Chart";
$pgv_lang["chart_style"]			= "Chart style";
$pgv_lang["chart_list"]			= "List";
$pgv_lang["chart_booklet"]   	= "Booklet";
$pgv_lang["show_cousins"]			= "Prikaži cousins";
// 1st generation
$pgv_lang["sosa_2"] 				= "Otac";
$pgv_lang["sosa_3"] 				= "Majka";
// 2nd generation
$pgv_lang["sosa_4"] 				= "Djed";
$pgv_lang["sosa_5"] 				= "Baka";
$pgv_lang["sosa_6"] 				= "Djed";
$pgv_lang["sosa_7"] 				= "Baka";
// 3rd generation
$pgv_lang["sosa_8"] 				= "Great-grandotac";
$pgv_lang["sosa_9"] 				= "Great-grandmajka";
$pgv_lang["sosa_10"]				= "Great-grandotac";
$pgv_lang["sosa_11"]				= "Great-grandmajka";
$pgv_lang["sosa_12"]				= "Great-grandotac";
$pgv_lang["sosa_13"]				= "Great-grandmajka";
$pgv_lang["sosa_14"]				= "Great-grandotac";
$pgv_lang["sosa_15"]				= "Great-grandmajka";
// 4th generation
$pgv_lang["sosa_16"]				= "Great-great-grandotac";
$pgv_lang["sosa_17"]				= "Great-great-grandmajka";
$pgv_lang["sosa_18"]				= "Great-great-grandotac";
$pgv_lang["sosa_19"]				= "Great-great-grandmajka";
$pgv_lang["sosa_20"]				= "Great-great-grandotac";
$pgv_lang["sosa_21"]				= "Great-great-grandmajka";
$pgv_lang["sosa_22"]				= "Great-great-grandotac";
$pgv_lang["sosa_23"]				= "Great-great-grandmajka";
$pgv_lang["sosa_24"]				= "Great-great-grandotac";
$pgv_lang["sosa_25"]				= "Great-great-grandmajka";
$pgv_lang["sosa_26"]				= "Great-great-grandotac";
$pgv_lang["sosa_27"]				= "Great-great-grandmajka";
$pgv_lang["sosa_28"]				= "Great-great-grandotac";
$pgv_lang["sosa_29"]				= "Great-great-grandmajka";
$pgv_lang["sosa_30"]				= "Great-great-grandotac";
$pgv_lang["sosa_31"]				= "Great-great-grandmajka";

// for the general case of ancestors of the nth generation use the text below
// in this text %1\$d is replaced with the number of generations
//              %2\$d is replaced with the number of generations - 1
//              %3\$d is replaced with the number of generations - 2
$pgv_lang["sosa_paternal_male_n_generations"]	= "%3\$d x paternal great grandotac";
$pgv_lang["sosa_paternal_female_n_generations"]	= "%3\$d x paternal great grandmajka";
$pgv_lang["sosa_maternal_male_n_generations"]	= "%3\$d x maternal great grandotac";
$pgv_lang["sosa_maternal_female_n_generations"]	= "%3\$d x maternal great grandmajka";

//-- FAN CHART
$pgv_lang["compact_chart"]			= "Compact Chart";
$pgv_lang["fan_chart"]				= "Circle Diagram";
$pgv_lang["gen_fan_chart"]  		= "#PEDIGREE_GENERATIONS# Generation Circle Diagram";
$pgv_lang["fan_width"]				= "Width";
$pgv_lang["gd_library"]				= "PHP server misconfiguration: GD 2.x library required to use image functions.";
$pgv_lang["gd_freetype"]			= "PHP server misconfiguration: FreeType library required to use TrueType fonts.";
$pgv_lang["gd_helplink"]			= "http://www.php.net/gd";
$pgv_lang["fontfile_error"]			= "Font file not found on PHP server";
$pgv_lang["fanchart_IE"]			= "Ovaj Fandijagram image cannot be printed directly by your browser. Use right-click then save and print.";

//-- RSS Feed
$pgv_lang["rss_descr"]				= "News and links from the #GEDCOM_TITLE# site";
$pgv_lang["rss_logo_descr"]			= "Feed created by PhpGedView";
$pgv_lang["rss_feeds"]				= "RSS Feeds";
$pgv_lang["no_feed_title"]			= "Feed not available";
$pgv_lang["no_feed"]				= "There is no RSS feed available for this PhpGedView site";
$pgv_lang["feed_login"]				= "If you have an account at this PhpGedView site, you can <a href=\"#AUTH_URL#\">log in</a> to the server using Basic HTTP Authentication to view private information.";
$pgv_lang["authenticated_feed"]		= "Authenticated Feed";

//-- ASSOciates RELAtionship
// After any change in the following list, please check $assokeys in edit_interface.php
$pgv_lang["attendant"] = "Attendant";
$pgv_lang["attending"] = "Attending";
$pgv_lang["best_man"] = "Best Man";
$pgv_lang["bridesmaid"] = "Bridesmaid";
$pgv_lang["buyer"] = "Buyer";
$pgv_lang["circumciser"] = "Circumciser";
$pgv_lang["civil_registrar"] = "Civil Registrar";
$pgv_lang["employee"] = "Employee";
$pgv_lang["employer"] = "Employer";
$pgv_lang["foster_child"] = "Foster Child";
$pgv_lang["foster_father"] = "Foster Father";
$pgv_lang["foster_mother"] = "Foster Mother";
$pgv_lang["friend"] = "Friend";
$pgv_lang["godfather"] = "Godotac";
$pgv_lang["godmother"] = "Godmajka";
$pgv_lang["godparent"] = "Godparent";
$pgv_lang["godson"]		= "Godson";
$pgv_lang["goddaughter"] = "Goddaughter";
$pgv_lang["godchild"]	= "Godchild";
$pgv_lang["guardian"]	= "Guardian";
$pgv_lang["informant"] = "Informant";
$pgv_lang["lodger"] = "Lodger";
$pgv_lang["nanny"] = "Nanny";
$pgv_lang["nurse"] = "Nurse";
$pgv_lang["owner"] = "Owner";
$pgv_lang["priest"] = "Priest";
$pgv_lang["rabbi"] = "Rabbi";
$pgv_lang["registry_officer"] = "Registry Officer";
$pgv_lang["seller"] = "Seller";
$pgv_lang["servant"] = "Servant";
$pgv_lang["slave"] = "Slave";
$pgv_lang["twin"] = "Blizanac";
$pgv_lang["twin_brother"] = "Twin brother";
$pgv_lang["twin_sister"] = "Twin sister";
$pgv_lang["ward"] = "Ward";
$pgv_lang["witness"] = "Witness";

//-- statistics utility
$pgv_lang["stat_create"]		= "Izradite vaš dijagram";
$pgv_lang["statutci"]			= "Ne može uraditit index";
$pgv_lang["statnnames"]         = "Ukupan broj osoba";
$pgv_lang["statnfam"]           = "Ukupan broj familija";
$pgv_lang["statnmale"]          = "Ukupan broj muških";
$pgv_lang["statnfemale"]        = "Ukupan broj ženskih";
$pgv_lang["with_sources"]		= "Sa izvorom";
$pgv_lang["without_sources"]	= "Bez izvora";
$pgv_lang["stat_sindi"]			= "Osobe sa izvorom";
$pgv_lang["stat_sfam"]			= "Familije sa izvorima";
$pgv_lang["statvars"]			= "Ispunite slijedeće parametre za iispis";
$pgv_lang["statlxa"]			= "Odaberi dijagram tip:";
$pgv_lang["statlya"]			= "rezultati:";
$pgv_lang["statlza"]			= "Kategorije:";
$pgv_lang["map_type"]			= "Map tip";
$pgv_lang["stat_1_map"]			= "Osobna distribucija";
$pgv_lang["stat_2_map"]			= "Rođenih po državi";
$pgv_lang["stat_3_map"]			= "Umrlih po državi";
$pgv_lang["stat_4_map"]			= "Vjenčanih po državi";
$pgv_lang["stat_5_birth"]		= "Rođenja po stoljeću";
$pgv_lang["stat_6_death"]		= "Smrti po stoljeću";
$pgv_lang["stat_7_marr"]		= "Brakova po stoljeću";
$pgv_lang["stat_7_div"]			= "Razvoda po stoljeću";
$pgv_lang["stat_8_fam"]			= "Familije sa sources";
$pgv_lang["stat_9_indi"]		= "Osoba sa sources";
$pgv_lang["stat_10_none"]		= "none";
$pgv_lang["stat_11_mb"]			= "Mjesec rođenja";
$pgv_lang["stat_12_md"]			= "Mjesec smrti";
$pgv_lang["stat_13_mm"]			= "Mjesec vjenčanja";
$pgv_lang["stat_14_mb1"]		= "Mjesec rođenja prvog djeteta u relation";
$pgv_lang["stat_15_mm1"]		= "Mjesec prvog vjenčanja";
$pgv_lang["stat_16_mmb"]		= "Mjeseci izmeđun vjenčanja i prvog djeteta";
$pgv_lang["stat_17_arb"]		= "Age related to rođenja year";
$pgv_lang["stat_18_ard"]		= "Age related to smrti year";
$pgv_lang["stat_18_aard"]		= "Average age related to death century";
$pgv_lang["stat_19_arm"]		= "Age in year of vjenčanja";
$pgv_lang["stat_19_aarm"]		= "Average age in century of marriage";
$pgv_lang["stat_20_arm1"]		= "Age in year of first vjenčanja";
$pgv_lang["stat_21_nok"]		= "Broj djece";
$pgv_lang["stat_22_fwok"]		= "Broj familija bez children";
$pgv_lang["stat_200_none"]		= "all (or blank)";
$pgv_lang["stat_201_num"]		= "numbers";
$pgv_lang["stat_202_perc"]		= "percentage";
$pgv_lang["stat_300_none"]		= "none";
$pgv_lang["stat_301_mf"]		= "gender";
$pgv_lang["stat_302_cgp"]		= "date periods";
$pgv_lang["century"]			= "stoljeće";
$pgv_lang["stat_age"]			= "Age";
$pgv_lang["no_date_fam"]		= "unknown";
$pgv_lang["statar_xgp"]			= "boundaries for periods:";
$pgv_lang["statar_xgl"]			= "boundaries for ages:";
$pgv_lang["statar_xgm"]			= "boundaries for month:";
$pgv_lang["statar_xga"]			= "boundaries for numbers:";
$pgv_lang["statar_zgp"]			= "boundaries for date periods:";
$pgv_lang["less"]				= "less than";
$pgv_lang["over"]				= "over";
$pgv_lang["interval"]			= "interval";
$pgv_lang["aft_marr"]			= "months after vjenčanja";
$pgv_lang["bef_marr"]			= "months before and after vjenčanja";
$pgv_lang["quarters"]			= "quarters after vjenčanja";
$pgv_lang["half_year"]			= "half-year after vjenčanja";
$pgv_lang["one_child"]			= "interval one child";
$pgv_lang["two_children"]		= "interval two children";
$pgv_lang["statreset"]			= "reset";
$pgv_lang["statsubmit"]			= "Prikaži the plot";
$pgv_lang["stat_largest_families"] = "Najveća familija";

$pgv_lang["stat_own_charts"]		= "Osobni dijagrami";
$pgv_lang["statnliving"]			= "Ukupno živućih";
$pgv_lang["statndead"]				= "Ukupno mrtvih";
$pgv_lang["stat_births"]			= "Ukupno rođenih";
$pgv_lang["stat_marriages"]			= "Ukupno vjenčanih";
$pgv_lang["stat_divorces"]			= "Ukupno razvedenih";
$pgv_lang["stat_deaths"]			= "Ukupno deaths";
$pgv_lang["stat_first_birth"]		= "Najranije rođenje";
$pgv_lang["stat_first_marriage"]	= "Najranije vjenčanje";
$pgv_lang["stat_first_divorce"]		= "Najraniji razvod";
$pgv_lang["stat_first_death"]		= "Najranija smrt";
$pgv_lang["stat_last_birth"]		= "Zadnje rođenje";
$pgv_lang["stat_last_marriage"]		= "Zadnje vjenčanje";
$pgv_lang["stat_last_divorce"]		= "Zadnji razvod";
$pgv_lang["stat_last_death"]		= "Zadnja smrt";
$pgv_lang["stat_lifespan"]			= "Lifespan";
$pgv_lang["stat_lived_longest"]		= "Najbolje godine at death";
$pgv_lang["stat_live_longest"]		= "Najstariji živući čovjek";
$pgv_lang["stat_marr_age"]			= "Length of braka";
$pgv_lang["stat_long_marr_age"]		= "Longest brak";
$pgv_lang["stat_short_marr_age"]	= "Shortest brak";
$pgv_lang["stat_youngest_male"]		= "Najmlađa muška osoba";
$pgv_lang["stat_youngest_female"]	= "Najmlađa ženska osoba";
$pgv_lang["stat_oldest_male"]		= "Najstariji male";
$pgv_lang["stat_oldest_female"]		= "Najstarija female";
$pgv_lang["stat_childbirth_age"]	= "Age at birth of child";
$pgv_lang["stat_youngest_father"]	= "Youngest otac";
$pgv_lang["stat_youngest_mother"]	= "Youngest majka";
$pgv_lang["stat_oldest_father"]		= "Najstariji otac";
$pgv_lang["stat_oldest_mother"]		= "Najstarija majka";
$pgv_lang["stat_children_in_fam"]	= "Children in family";
$pgv_lang["stat_largest_gfamilies"]	= "Largest grandfamilies";
$pgv_lang["stat_age_difference"]	= "Age difference";
$pgv_lang["stat_age_siblings"]		= "Age between siblings";
$pgv_lang["stat_top_age_siblings"]	= "Najbolje age between siblings";
$pgv_lang["stat_age_mf_spouse"]		= "Age between husband and wife";
$pgv_lang["stat_age_fm_spouse"]		= "Age between wife and husband";
$pgv_lang["stat_names"]				= "Names";
$pgv_lang["statnsurnames"]			= "Ukupno prezimena";
$pgv_lang["statngivennames"]		= "Ukupno given names";
$pgv_lang["top_surnames"]			= "Najbolja prezimena";
$pgv_lang["top_givennames"]			= "Najbolja given names";
$pgv_lang["events"]					= "Događaji";
$pgv_lang["stat_records"]			= "Records";
$pgv_lang["stat_notes"]				= "Notes";
$pgv_lang["stat_first_event"]		= "First event";
$pgv_lang["stat_last_event"]		= "Last event";
$pgv_lang["stat_places"]			= "Mjesta";
$pgv_lang["stat_birth_places"]		= "Birth mjesta";
$pgv_lang["stat_marriage_places"]	= "Marriage mjesta";
$pgv_lang["stat_death_places"]		= "Death mjesta";
$pgv_lang["stat_countries"]			= "Događaji u zemljama";

//-- statisticsplot utility
$pgv_lang["statistiek_list"]	= "Statistički Ispis";
$pgv_lang["stpl"]			 	= "...";
$pgv_lang["stplinfo"]			= "plotting information:";
$pgv_lang["stpltype"]			= "type:";
$pgv_lang["stplnoim"]			= " not implemented:";
$pgv_lang["stplmf"]			 	= " per gender";
$pgv_lang["stplipot"]			= " per time period";
$pgv_lang["stplmonth"]			= "month";
$pgv_lang["stplnumbers"]		= "numbers";
$pgv_lang["stplnuch"]			= "children";
$pgv_lang["stplage"]			= "age";
$pgv_lang["stplperc"]			= "percentage";
$pgv_lang["stplnumof"]			= "Counts ";
$pgv_lang["stplmarrbirth"]		 = "Broj mjeseci između sklapanja braka i rođenja prvog djeteta";
$pgv_lang["indi_distribution_chart"]	= "Individual distribution dijagram";
$pgv_lang["surname_distribution_chart"]	= "Surname distribution dijagram";
$pgv_lang["g_chart_high"]		= "Highest Population";
$pgv_lang["g_chart_low"]		= "Lowest Population";
$pgv_lang["g_chart_nobody"]		= "Nobody at all";
$pgv_lang["area_chart"]			= "Geographical area";
$pgv_lang["europe_chart"]		= "Europe";
$pgv_lang["s_america_chart"]	= "South America";
$pgv_lang["asia_chart"]			= "Asia";
$pgv_lang["middle_east_chart"]	= "Middle East";
$pgv_lang["africa_chart"]		= "Africa";
$pgv_lang["world_chart"]		= "World";

//-- alive in year
$pgv_lang["alive_in_year"]			= "Alive in Year";
$pgv_lang["is_alive_in"]			= "Is alive in #YEAR#";
$pgv_lang["alive"]					= "Živi ";
$pgv_lang["dead"]					= "Mrtvi ";
$pgv_lang["maybe"]					= "Možda ";
$pgv_lang["both_alive"]					= "Oboje živi ";
$pgv_lang["both_dead"]					= "Oboje mrtvi ";

//-- Help system
$pgv_lang["definitions"]			= "Definitions";

//-- Index_edit
$pgv_lang["block_desc"]				= "Block Descriptions";
$pgv_lang["click_here"]				= "Klikni ovdje da nastaviš";
$pgv_lang["click_here_help"]		= "~#pgv_lang[click_here]#~<br /><br />Click this button to save your changes.<br /><br />You will be returned to the #pgv_lang[welcome]# or #pgv_lang[mygedview]# page, but your changes may not be shown.  You may need to use the Page Reload function of your browser to view your changes properly.";
$pgv_lang["block_summaries"]		= "~#pgv_lang[block_desc]#~<br /><br />Here is a short description of each of the blocks you can place on the #pgv_lang[welcome]# or #pgv_lang[mygedview]# page.<br /><table border='1' align='center'><tr><td class='list_value'><b>#pgv_lang[name]#</b></td><td class='list_value'><b>#pgv_lang[description]#</b></td></tr>#pgv_lang[block_summary_table]#</table><br /><br />";
// Built in index_edit.php
$pgv_lang["block_summary_table"]	= "&nbsp;";

//-- Find page
$pgv_lang["total_places"]			= "Mjesta found";
$pgv_lang["media_contains"]			= "Media contains:";
$pgv_lang["repo_contains"]			= "Repository contains:";
$pgv_lang["shared_note_contains"]	= "Shared Note contains:";
$pgv_lang["source_contains"]		= "Izvor contains:";
$pgv_lang["display_all"]			= "Display all";

// FAQ Page
$pgv_lang["add_faq_header"] = "FAQ Header";
$pgv_lang["add_faq_body"] = "FAQ Body";
$pgv_lang["add_faq_order"] = "FAQ Position";
$pgv_lang["add_faq_visibility"] = "FAQ Visibility";
$pgv_lang["no_faq_items"] = "The FAQ list is empty.";
$pgv_lang["position_item"] = "Position item";
$pgv_lang["faq_list"] = "FAQ List";
$pgv_lang["confirm_faq_delete"] = "Are you sure you want to delete the FAQ unos";
$pgv_lang["preview"] =  "Preview";
$pgv_lang["no_id"] = "No FAQ ID has been specified !";

// Help search
$pgv_lang["hs_title"] 			= "Traži Help Text";
$pgv_lang["hs_search"] 			= "Traži";
$pgv_lang["hs_close"] 			= "Close window";
$pgv_lang["hs_results"] 		= "Results found:";
$pgv_lang["hs_keyword"] 		= "Traži for";
$pgv_lang["hs_searchin"]		= "Traži in";
$pgv_lang["hs_searchuser"]		= "User Help";
$pgv_lang["hs_searchmodules"]	= "Modules Help";
$pgv_lang["hs_searchconfig"]	= "Administrator Help";
$pgv_lang["hs_searchhow"]		= "Traži type";
$pgv_lang["hs_searchall"]		= "All words";
$pgv_lang["hs_searchany"]		= "Any word";
$pgv_lang["hs_searchsentence"]	= "Točna phrase";
$pgv_lang["hs_intruehelp"]		= "Help text only";
$pgv_lang["hs_inallhelp"]		= "All text";

// Media import
$pgv_lang["choose"] = "Odaberi: ";
$pgv_lang["account_information"] = "Informacije o korisničko imeu";

//-- Media item "TYPE" sub-field
$pgv_lang["TYPE__audio"] = "Audio";
$pgv_lang["TYPE__book"] = "Book";
$pgv_lang["TYPE__card"] = "Card";
$pgv_lang["TYPE__certificate"] = "Certificate";
$pgv_lang["TYPE__coat"] = "Coat of Arms";
$pgv_lang["TYPE__document"] = "Document";
$pgv_lang["TYPE__electronic"] = "Electronic";
$pgv_lang["TYPE__fiche"] = "Microfiche";
$pgv_lang["TYPE__film"] = "Microfilm";
$pgv_lang["TYPE__magazine"] = "Magazine";
$pgv_lang["TYPE__manuscript"] = "Manuscript";
$pgv_lang["TYPE__map"] = "Karta";
$pgv_lang["TYPE__newspaper"] = "Newspaper";
$pgv_lang["TYPE__photo"] = "Photo";
$pgv_lang["TYPE__tombstone"] = "Tombstone";
$pgv_lang["TYPE__video"] = "Video";
$pgv_lang["TYPE__painting"] = "Painting";
$pgv_lang["TYPE__other"] = "Other";

//-- Other media suff
$pgv_lang["view_slideshow"] 		= "Vidi kao slideshow";
$pgv_lang["download_image"]			= "Download File";
$pgv_lang["no_media"]				= "No Media Found";
$pgv_lang["media_privacy"]			= "Privacy restrictions prevent you from viewing this item";
$pgv_lang["relations_heading"]		= "The image relates to:";
$pgv_lang["file_size"]				= "File Size";
$pgv_lang["img_size"]				= "Image Size";
$pgv_lang["media_broken"]			= "Ovaj media file is broken and cannot be watermarked";
$pgv_lang["unknown_mime"]			= "Media Firewall error: >Unknown Mimetype< for file";

//-- Modules
$pgv_lang["module_error_unknown_action_v2"] = "Unknown action: [action].";
$pgv_lang["module_error_unknown_type"] = "Unknown module type.";

//-- sortable tables buttons
$pgv_lang["button_alive_in_year"] = "Prikaži persons alive in the indicated year.";
$pgv_lang["button_BIRT_Y100"] = "Prikaži persons born within the last 100 years.";
$pgv_lang["button_BIRT_YES"] = "Prikaži persons born more than 100 years ago.";
$pgv_lang["button_DEAT_H"] = "Prikaži couples where only the male partner is deceased.";
$pgv_lang["button_DEAT_N"] = "Prikaži people who are alive or couples where both partners are alive.";
$pgv_lang["button_DEAT_W"] = "Prikaži couples where only the female partner is deceased.";
$pgv_lang["button_DEAT_Y"] = "Prikaži people who are dead or couples where both partners are deceased.";
$pgv_lang["button_DEAT_Y100"] = "Prikaži people who died within the last 100 years.";
$pgv_lang["button_DEAT_YES"] = "Prikaži people who died more than 100 years ago.";
$pgv_lang["button_MARR_DIV"] = "Prikaži divorced couples.";
$pgv_lang["button_MARR_U"] = "Prikaži couples with an unknown vjenčanja date.";
$pgv_lang["button_MARR_Y100"] = "Prikaži couples who married within the last 100 years.";
$pgv_lang["button_MARR_YES"] = "Prikaži couples who married more than 100 years ago.";
$pgv_lang["button_reset"] = "Početni položaj liste.";
$pgv_lang["button_SEX_F"] = "Pokaži samo osobe ženskog spola.";
$pgv_lang["button_SEX_M"] = "Pokaži samo osobe muškog spola.";
$pgv_lang["button_SEX_U"] = "Pokaži samo osobe za koje se ne zna spol.";
$pgv_lang["button_TREE_L"] = "Prikaži «leaves» couples or individuals.  These are individuals who are alive but have no children recorded in the database.";
$pgv_lang["button_TREE_R"] = "Prikaži «roots» couples or individuals.  These people may also be called «patriarchs».  They are individuals who have no parents recorded in the database.";
$pgv_lang["sort_column"] = "Sort by this column.";

$pgv_lang["update_photo"] = "Ažuriraj foto";
$pgv_lang["date_of_entry"]			= "Date of unos in original source";
$pgv_lang["autocomplete"]			= "Autocomplete";
$pgv_lang["months2"]				= "mjeseca"; // 2 months
$pgv_lang["hour1"]					= "sat";
$pgv_lang["hours2"]					= "sata"; // 2 hours
$pgv_lang["hours"]					= "sati"; // >2 hours
$pgv_lang["minute1"]				= "minuta";
$pgv_lang["minutes2"]				= "minute"; // 2 minutes
$pgv_lang["minutes"]				= "minuta"; // >2 minutes
$pgv_lang["ago"]					= "ago";

?>
