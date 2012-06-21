<?php
/**
 * Danish texts
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
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: editor.da.php 6911 2010-02-03 13:20:29Z hylle $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["advanced_name_fields"]	= "Yderligere navne (kaldenavn, giftenavn, osv.)";
$pgv_lang["accept_changes"]		= "Godkend / Afvis ændring(er)";
$pgv_lang["replace"]			= "Erstat post";
$pgv_lang["append"]				= "Tilføj post";
$pgv_lang["review_changes"]		= "Vis ændringer i slægtsdatabasen en gang til";
$pgv_lang["remove_object"]			= "Fjern objekt";
$pgv_lang["remove_links"]			= "Fjern links";
$pgv_lang["media_not_deleted"]		= "Mappen med mediefiler blev ikke fjernet.";
$pgv_lang["thumbs_not_deleted"]		= "Mappe med miniaturebilleder ikke fjernet.";
$pgv_lang["thumbs_deleted"]			= "Mappe med miniaturebilleder blev fjernet.";
$pgv_lang["show_thumbnail"]			= "Vis miniaturebilleder";
$pgv_lang["link_media"]				= "Tilknyt mediefil";
$pgv_lang["to_person"]				= "Til person";
$pgv_lang["to_family"]				= "Til familie";
$pgv_lang["to_source"]				= "Til kilde";
$pgv_lang["edit_fam"]				= "Ret familie";
$pgv_lang["edit_repo"]				= "Redigér opbevaringssted";
$pgv_lang["copy"]					= "Kopier";
$pgv_lang["cut"]					= "Klip ud";
$pgv_lang["sort_by_birth"]			= "Sortér efter fødselsdato";
$pgv_lang["reorder_children"]		= "Vis børn i anden rækkefølge";
$pgv_lang["reorder_media"]					= "Gensortér medier";
$pgv_lang["reorder_media_title"]			= "Træk og slip miniaturer for at gensortere medieemner";
$pgv_lang["reorder_media_window"]			= "Gensortér medier (vindue)";
$pgv_lang["reorder_media_window_title"]		= "Klik på en række og træk-og-slip for at gensortere medier";
$pgv_lang["reorder_media_save"]				= "Gemmer de sorterede medier i databasen";
$pgv_lang["reorder_media_reset"]			= "Nultil til den oprindelige rækkefølge";
$pgv_lang["reorder_media_cancel"]			= "Afslut og returnér";
$pgv_lang["add_from_clipboard"]		= "Tilføj fra udklipsholderen";
$pgv_lang["record_copied"]			= "Posten er kopieret til udklipsholderen";
$pgv_lang["add_unlinked_person"]	= "Tilføj en person som ikke er knyttet til en familie";
$pgv_lang["add_unlinked_source"]	= "Tilføj en kilde der ikke er tilknyttet";
$pgv_lang["server_file"]				= "Filnavn på server";
$pgv_lang["server_file_advice"]			= "Lad være med at ændre for at beholde det originale filnavn.";
$pgv_lang["server_file_advice2"]		= "Du kan indtaste en URL der starter med &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]		= "Du kan indtaste op til #GLOBALS[MEDIA_DIRECTORY_LEVELS]# mappenavne der skal efterfølge &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Indtast ikke &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; delen af destinationsmappens navn.";
$pgv_lang["server_folder_advice2"]		= "Denne indtastning ignoreres hvis du har indtastet en URL i filnavn feltet.";
$pgv_lang["add_linkid_advice"]			= "Indtast eller søg efter ID på den person, familie eller kilde til hvilken dette medieemne skal tilknyttes.";
$pgv_lang["use_browse_advice"]			= "Brug &laquo;Gennemse&raquo; knappen til at søge på din lokale computer efter den ønskede fil.";
$pgv_lang["add_media_file"]				= "Eksisterende mediefil på server";
$pgv_lang["main_media_ok2"]				= "Mediefilen <b>#GLOBALS[oldMediaName]#</b> er flyttet korrekt fra <b>#GLOBALS[oldMediaFolder]#</b> til <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]				= "Mediefilen blev korrekt flyttet og omdøbt fra <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "Mediefilen <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> eksisterer ikke.";
$pgv_lang["main_media_fail1"]			= "Mediefilen <b>#GLOBALS[oldMediaName]#</b> kunne ikke omdøbes til <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Mediefilen <b>#GLOBALS[oldMediaName]#</b> kunne ikke flyttes fra <b>#GLOBALS[oldMediaFolder]#</b> til <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]			= "Mediefilen kunne ikke flyttes og omdøbes fra <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok1"]				= "Mediefilen <b>#GLOBALS[oldMediaName]#</b> er korrekt omdøbt til <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Bemærk: Du skal aktiver 'Brug GEDCOM (RESN) Privat indstillinger feature, før denne indstillinge kan have effect.";
$pgv_lang["add_media_other_folder"]		= "Anden mappe... indtast venligst";
$pgv_lang["thumb_media_ok1"]			= "Miniaturefilen <b>#GLOBALS[oldMediaName]#</b> er korrekt omdøbt til <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]			= "Miniaturefilen <b>#GLOBALS[oldMediaName]#</b> er korrekt flyttet fra <b>#GLOBALS[oldThumbFolder]#</b> til <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]			= "Miniaturefilen er korrekt flyttet og omdøbt fra <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]			= "Miniaturefilen <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> does not exist.";
$pgv_lang["thumb_media_fail1"]			= "Miniaturefilen <b>#GLOBALS[oldMediaName]#</b> kunne ikke omdøbes til <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Miniaturefilen <b>#GLOBALS[oldMediaName]#</b> kunne ikke flyttes fra <b>#GLOBALS[oldThumbFolder]#</b> til <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]			= "Miniaturefilen kunne ikke flyttes og omdøbes fra <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]			= "Tilføj en ny tilknyttet person";
$pgv_lang["edit_sex"]				= "Ret køn";
$pgv_lang["add_obje"]			= "Tilføj et nyt billede eller mediefil";
$pgv_lang["add_name"]			= "Tilføj nyt navn";
$pgv_lang["edit_raw"]			= "Ændre oplysninger direkte i GEDCOM-filen";
$pgv_lang["label_add_remote_link"]  = "Tilføj link";
$pgv_lang["label_gedcom_id"]        = "GEDCOM-ID";
$pgv_lang["label_local_id"]         = "Person-ID";
$pgv_lang["accept"]				= "Godkend";
$pgv_lang["accept_all"]			= "Godkend alle ændringer";
$pgv_lang["accept_gedcom"]		= "Bestem dig for om du vil godkende eller afvise de enkelte ændringer.<dl><dt>For at godkende <i>alle</i> ændringer på en gang</dt><dd>Klik på linket <b>#pgv_lang[accept_all]#</b> i boksen nedenunder.</dd><dt>For at få mere information om en ændring kan du klikke på:</dt><dd><b>#pgv_lang[view_change_diff]#</b> for at se på forskellen mellem gammelt og nyt indhold.<br /><b>#pgv_lang[view_gedcom]#</b> for at se på det nye indhold i GEDCOM-format.</dd></dl>";
$pgv_lang["accept_successful"]	= "Godkendte ændringer er lagt i databasen";
$pgv_lang["add_child"]			= "Tilføj barn";
$pgv_lang["add_child_to_family"]	= "Tilføj et barn til denne familie";
$pgv_lang["add_fact"]			= "Tilføj nye oplysninger";
$pgv_lang["add_father"]			= "Tilføj en ny far";
$pgv_lang["add_husb"]			= "Tilføj ægtemand";
$pgv_lang["add_husb_to_family"]	= "Tilføj en ægtemand/far til denne familie";
$pgv_lang["add_media"]			= "Tilføj nye mediefiler";
$pgv_lang["add_media_lbl"]		= "Tilføj nye mediefiler";
$pgv_lang["add_mother"]			= "Tilføj en ny mor";
$pgv_lang["add_new_chil"] 			= "Tilføj et nyt barn";
$pgv_lang["add_new_husb"]		= "Tilføj en ny ægtemand";
$pgv_lang["add_new_wife"]		= "Tilføj en ny hustru";
$pgv_lang["add_note"]			= "Tilføj en ny note";
$pgv_lang["add_note_lbl"]		= "Tilføj note";
$pgv_lang["add_sibling"]		= "Tilføj en bror eller søster";
$pgv_lang["add_son_daughter"]	= "Tilføj en søn eller datter";
$pgv_lang["add_source"]			= "Tilføj en ny kildehenvisning";
$pgv_lang["add_source_lbl"]		= "Tilføj kildehenvisning";
$pgv_lang["add_wife"]			= "Tilføj hustru";
$pgv_lang["add_wife_to_family"]	= "Tilføj en hustru/mor til denne familie";
$pgv_lang["advanced_search_discription"] = "Avanceret søgning";
$pgv_lang["auto_thumbnail"]			= "Automatisk miniature";
$pgv_lang["basic_search"]			= "Enkel søgning";
$pgv_lang["basic_search_discription"] = "Enkel søgning";
$pgv_lang["birthdate_search"]		= "Fødselsdato: ";
$pgv_lang["birthplace_search"]		= "Fødested: ";
$pgv_lang["change"]					= "Tilpas";
$pgv_lang["change_family_instr"]	= "Brug denne side til at redigere eller fjerne familiemedlemmer.<br /><br />For hver medlem af familien kan du bruge linket: Rediger for at udskifte en person med en anden.  Du kan også bruge linket: Fjern til at fjerne personen fra familien.<br /><br />Klik på knappen: Gem, når du er færdig med at redigere familiemedlemmerne.<br />";
$pgv_lang["change_family_members"]	= "Rediger familiemedlemmer";
$pgv_lang["changes_occurred"]	= "Følgende ændringer er udført for denne person:";
$pgv_lang["confirm_remove"]			= "Er du sikker på at du vil fjerne denne person fra familien?";
$pgv_lang["confirm_remove_object"]	= "Er du sikker på at du ønsker at fjerne dette objekt fra databasen?";
$pgv_lang["create_repository"]		= "Opret nyt opbevaringssted";
$pgv_lang["create_source"]		= "Opret en ny kilde";
$pgv_lang["current_person"]         = "Samme som den aktuelle";
$pgv_lang["date"]				= "Dato";
$pgv_lang["deathdate_search"]		= "Dødsdato: ";
$pgv_lang["deathplace_search"]		= "Dødssted: ";
$pgv_lang["delete_dir_success"]		= "Mapperne til mediefiler og miniaturebilleder blev fjernet.";
$pgv_lang["delete_file"]			= "Slet fil";
$pgv_lang["delete_repo"]			= "Slet opbevaringssted";
$pgv_lang["directory_not_empty"]	= "Mappen er ikke tom.";
$pgv_lang["directory_not_exist"]	= "Mappen findes ikke.";
$pgv_lang["error_remote"]           = "Du har valgt en ekstern site.";
$pgv_lang["error_same"]             = "Du har valgt den samme site.";
$pgv_lang["external_file"]			= "Dette medieobjekt findes ikke som en fil på denne server.  Det kan ikke slettes, flyttes eller omdøbes.";
$pgv_lang["file_missing"]			= "Der blev ikke modtaget nogen fil. Hent filen igen.";
$pgv_lang["file_partial"]			= "Filen blev kun uploadet delvist, forsøg igen";
$pgv_lang["file_success"]			= "Filen er uploadet";
$pgv_lang["file_too_big"]			= "Den uploadede fil overskrider den tilladte størrelse";
$pgv_lang["file_unkown_err"]		= "Ukendt filupload fejlkode #pgv_lang[global_num1]#. Rapportér venligst dette som en fejl.";
$pgv_lang["file_bad_extension"]		= "PHP blokkerede filen på efternavnet";
$pgv_lang["file_cant_write"]		= "PHP kunne ikke skrive til disken";
$pgv_lang["file_no_temp_dir"]		= "Manglende midlertidig PHP mappe";
$pgv_lang["folder"]		 			= "Mappe på server";
$pgv_lang["gedcom_editing_disabled"]	= "Muligheden for at ændre denne slægtsdatabase (GEDCOM) er blevet deaktiveret af system-administratoren.";
$pgv_lang["gedrec_deleted"]		= "GEDCOM-post er nu slettet.";
$pgv_lang["gen_thumb"]				= "Opret miniaturebilleder";
$pgv_lang["gender_search"]			= "Køn: ";
$pgv_lang["generate_thumbnail"]		= "Opret miniature automatisk fra ";
$pgv_lang["hebrew_givn"]			= "Hebræiske fornavne";
$pgv_lang["hebrew_surn"]			= "Hebræisk efternavn";
$pgv_lang["hide_changes"]		= "Klik her for at skjule ændringer.";
$pgv_lang["highlighted"]			= "Anvende som hovedbillede";
$pgv_lang["illegal_chars"]			= "Ikke tilladte karakterer i navn";
$pgv_lang["invalid_search_multisite_input"] = "Venligst indtast en af de følgende oplysninger:  Navn, fødested, fødselsdato, fødested, dødsdato, dødssted, og køn ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Venligst søg igen med mere information end blot køn";
$pgv_lang["label_diff_server"]      = "Anden site";
$pgv_lang["label_location"]         = "Placering";
$pgv_lang["label_password_id2"]		  = "Adgangskode: ";
$pgv_lang["label_rel_to_current"]   = "Relation til aktuel person";
$pgv_lang["label_same_server"]      = "Samme hjemmeside";
$pgv_lang["label_site"]             = "Hjemmeside";
$pgv_lang["label_site_url"]         = "URL-adresse";
$pgv_lang["label_username_id2"]		  = "Brugernavn ";
$pgv_lang["lbl_server_list"]        = "Brug en eksisterende site.";
$pgv_lang["lbl_type_server"]        = "Indtast en ny hjemmeside.";
$pgv_lang["link_as_child"]		= "Knyt denne person til en familie som et barn";
$pgv_lang["link_as_husband"]		= "Knyt denne person til en eksisterende familie som en ægtemand";
$pgv_lang["link_success"]		         = "Link blev tilføjet";
$pgv_lang["link_to_existing_media"]		= "Link til et eksisterende medieemne";
$pgv_lang["max_media_depth"]		= "Du kan kun gå #MEDIA_DIRECTORY_LEVELS# mapper ned";
$pgv_lang["max_upload_size"]		= "Maks størrelse for uploading: ";
$pgv_lang["media_deleted"]			= "Folderen med mediefiler blev fjernet.";
$pgv_lang["media_exists"]			= "Mediefilen findes allerede.";
$pgv_lang["media_file"] 			= "Mediefil";
$pgv_lang["media_file_deleted"]		= "Mediefil blev slettet.";
$pgv_lang["media_file_moved"]			= "Mediefil flyttet.";
$pgv_lang["media_file_not_moved"]	= "Mediefilen kunne ikke flyttes.";
$pgv_lang["media_file_not_renamed"]	= "Mediefilen kunne ikke flyttes eller omd�";
$pgv_lang["media_thumb_exists"]		= "Miniaturebillede findes allerede.";
$pgv_lang["multiple_gedcoms"]		= "Denne fil er linket til en anden genealogisk database på denne server. Den kan ikke slettes, flyttes eller omdøbes, før disse links er fjernet.";
$pgv_lang["must_provide"]		= "Du skal sørge for et ";
$pgv_lang["name_search"]			= "Navn: ";
$pgv_lang["new_repo_created"]		= "Nyt opbevaringssted er oprettet";
$pgv_lang["new_source_created"]	= "Den nye kilde er oprettet!";
$pgv_lang["no_changes"]			= "Der er ingen ændringer, der er nødvendige at vise igen.";
$pgv_lang["no_known_servers"]		= "Ingen kendte servere<br />Ingen resultater vil blive fundet";
$pgv_lang["no_temple"]			= "Ingen Tempel-Living tilordning";
$pgv_lang["no_upload"]		= "Det er ikke tilladt at uploade mediefiler fordi der er blokeret for multimedie objekter eller fordi der ikke kan skrives til mediefilernes mappe.";
$pgv_lang["paste_id_into_field"]= "Indsæt følgende kilde-ID i ændringsfeltet som en reference til denne kilde ";
$pgv_lang["paste_rid_into_field"]	= "Indsæt følgende ID for opbevaringsstedet i det aktuelle felt for at kunne referere til det: ";
$pgv_lang["privacy_not_granted"]	= "Du har ikke adgang til";
$pgv_lang["privacy_prevented_editing"]	= "Af hensyn til beskyttelse af privatlivet, kan du ikke ændre oplysningerne.";
$pgv_lang["record_marked_deleted"]		= "Denne post er afmærket til at blive slettet efter admin har godkendt det.";
$pgv_lang["replace_with"]			= "Erstat med";
$pgv_lang["show_changes"]		= "Denne post er blevet opdateret. Klik her for at se ændringerne.";
$pgv_lang["thumb_genned"]			= "Miniaturebillede #thumbnail# blev oprettet automatisk.";
$pgv_lang["thumbgen_error"]			= "Miniaturebillede #thumbnail# kunne ikke oprettes automatisk.";
$pgv_lang["thumbnail"]				= "Miniaturebillede";
$pgv_lang["title_remote_link"]      = "Tilføj ekstern link";
$pgv_lang["undo"]				= "Fortryd";
$pgv_lang["undo_all"]				= "Fortryd alle ændringer";
$pgv_lang["undo_all_confirm"]		= "Er du sikker på, at du vil fortryde alle ændringer for denne GEDCOM-fil?";
$pgv_lang["undo_successful"]	= "Fortryd udført";
$pgv_lang["update_successful"]	= "Opdatering er udført";
$pgv_lang["upload"]					= "Upload";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />Vælg filer fra din lokale computer der skal uploades til din server. Alle filer vil blive uploadet til mappen <b>#MEDIA_DIRECTORY#</b> eller til en af dens undermapper.<br /><br />De mappenavne du angiver vil blive tilføjet til #MEDIA_DIRECTORY#. For eksempel, #MEDIA_DIRECTORY#minfamilie. Hvis miniature mappen ikke eksisterer, vil den blive oprettet automatisk.";
$pgv_lang["upload_error"]			= "Der opstod en FEJL under uploading af din fil.";
$pgv_lang["upload_media"]			= "Upload mediefiler";
$pgv_lang["upload_successful"]		= "Upload fuldført.";
$pgv_lang["view_change_diff"]	= "Vis ændring, forskelle";
$pgv_lang["admin_override"]			= "Admin indstilling";
$pgv_lang["no_update_CHAN"]			= "Opdatér ikke CHAN (sidst ændret) posten";
$pgv_lang["select_events"]			= "Vælg hændelser";
$pgv_lang["edit_concurrency_change"] = "Posten blev sidst ændret af <i>#CHANGEUSER#</i> den #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "Posten med id #PID# er blevet ændret af en anden bruger siden du sidst tilgik den.";
$pgv_lang["edit_concurrency_msg1"]	= "En fejl opstod ved oprettelse af Redigering form. En anden bruger er måske igang med at lave ændringer.";
$pgv_lang["edit_concurrency_reload"]	= "Brug venligst din browsers Forige side knap og genindlæs den forrige side for at sikre at du arbejder med den nyeste post.";
$pgv_lang["add_marriage"]			= "Tilføj ny giftemål";
$pgv_lang["source_events"]			= "Tilknyt hændelser med denne kilde";
$pgv_lang["gen_missing_thumbs_lbl"]	= "Manglende miniaturer";
$pgv_lang["gen_missing_thumbs"]		= "Opret manglende miniaturer";
$pgv_lang["copy_error"]				= "Filen #GLOBALS[whichFile2]# kunne ikke kopieres fra #GLOBALS[whichFile1]#";
$pgv_lang["to_note"]				= "Til delt note";
$pgv_lang["add_unlinked_note"]		= "Tilføj en ulænket note";
$pgv_lang["add_unlinked"]			= "Ulænkede poster";
$pgv_lang["add_opf_child"]				= "Tilføj et barn til en én-forælders-familie";
$pgv_lang["add_shared_note_lbl"]	= "Tilføj delt note";
$pgv_lang["shared_note_assisted"]	= "Delt note via assistent";
$pgv_lang["create_shared_note"]				= "Opret en ny delt note";
$pgv_lang["create_shared_note_assisted"]	= "Opret en ny delt note via assistent";
$pgv_lang["add_new_event_assisted"]			= "Opret en ny hændelse via assistent";
$pgv_lang["new_shared_note_created"] 	= "Ny delt note er oprettet korrekt.";
$pgv_lang["shared_note_updated"] 	= "Delt nore er opdateret korrekt.";
$pgv_lang["add_shared_note"]		= "Tilføj en ny delt note";
$pgv_lang["to_repository"]			= "Til opbevaringssted";
?>
