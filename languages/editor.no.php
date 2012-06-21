<?php
/**
 * Norwegian texts
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
 * # $Id: editor.no.php 4944 2009-01-29 03:04:28Z canajun2eh $
 *
 * @translator Geir Håkon Eikland
 * @translator Thomas Rindal
 * @package PhpGedView
 * @subpackage Languages
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]			= "Legg til detaljer om ekteskapet";
$pgv_lang["edit_concurrency_change"] = "Denne posten ble sist endret av <i>#CHANGEUSER#</i> den #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "Posten med id #PID# ble endret av en annen bruker siden du åpnet den.";
$pgv_lang["edit_concurrency_msg1"]	= "En feil oppsto under dannelsen av endringsskjemaet.  En annen bruker kan ha endret denne posten siden forrige gang du så på den.";
$pgv_lang["edit_concurrency_reload"]	= "Vennligst last den forrige siden på nytt for å sikre at du arbeider med nyeste versjon av posten.";
$pgv_lang["admin_override"]			= "Admin-valg";
$pgv_lang["no_update_CHAN"]			= "Ikke oppdater CHAN (Last Change) posten";
$pgv_lang["select_events"]			= "Velg hendelse";
$pgv_lang["source_events"]			= "Knytt hendelse til denne kilden";
$pgv_lang["advanced_name_fields"]	= "Ytterligere navn (kallenavn, navn som gift, etc.)";
$pgv_lang["accept_changes"]		= "Godta / Avvis endring(ene)";
$pgv_lang["replace"]			= "Erstatt oppføring";
$pgv_lang["append"]				= "Legg til en ny oppføring";
$pgv_lang["review_changes"]		= "Vis endringer i slektsbasen";
$pgv_lang["remove_object"]			= "Fjern objekt";
$pgv_lang["remove_links"]			= "Fjern koblinger";
$pgv_lang["media_not_deleted"]	= "Media-mappen ble ikke slettet.";
$pgv_lang["thumbs_not_deleted"]	= "Mappen for minityrbildene ble ikke slettet.";
$pgv_lang["thumbs_deleted"]		= "Mappen for minityrbildene er nå slettet.";
$pgv_lang["show_thumbnail"]		= "Vis miniatyrbilde(r)";
$pgv_lang["link_media"]			= "Kobling av Media";
$pgv_lang["to_person"]			= "Til person";
$pgv_lang["to_family"]			= "Til familie";
$pgv_lang["to_source"]			= "Til kilde";
$pgv_lang["edit_fam"]				= "Endre familie";
$pgv_lang["edit_repo"]				= "Rediger oppbevaringssted";
$pgv_lang["copy"]					= "Kopier";
$pgv_lang["cut"]					= "Klipp ut";
$pgv_lang["sort_by_birth"]			= "Sorter på fødselsdato";
$pgv_lang["reorder_children"]		= "Vis barn i annen rekkefølge";
$pgv_lang["reorder_media"]					= "Endre rekkefølge på media";
$pgv_lang["reorder_media_title"]			= "Dra og slipp miniatyrbilder for å endre rekkefølgen på medieobjektene";
$pgv_lang["reorder_media_window"]			= "Endre rekkefølge på media (vindu)";
$pgv_lang["reorder_media_window_title"]		= "Klikk en rad, dra og slipp deretter for å endre rekkefølgen på medieobjektene ";
$pgv_lang["reorder_media_save"]				= "Lagrer de sorterte medieobjektene i databasen";
$pgv_lang["reorder_media_reset"]			= "Sett tilbake til den opprinnelige rekkefølgen";
$pgv_lang["reorder_media_cancel"]			= "Avslutt og gå tilbake";
$pgv_lang["add_from_clipboard"]		= "Legg til fra klippebordet: ";
$pgv_lang["record_copied"]			= "Data er kopiert til klippebordet";
$pgv_lang["add_unlinked_person"]	= "Legg til en person som ikke er knyttet til en familie";
$pgv_lang["add_unlinked_source"]	= "Legg til en kilde som ikke er knyttet til noen";
$pgv_lang["server_file"]				= "Filnavn på server";
$pgv_lang["server_file_advice"]			= "Ikke bytt for å beholde originalt filnavn.";
$pgv_lang["server_file_advice2"]		= "Du kan angi en URL, som starter med &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]		= "Du kan angi opptil #GLOBALS[MEDIA_DIRECTORY_LEVELS]# mappenavn under standardmappen &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Ikke angi &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; -delen av navnet til målmappen.";
$pgv_lang["server_folder_advice2"]		= "Denne oppføringen vil bli ignorert dersom du har angitt en URL i feltet for filnavn.";
$pgv_lang["add_linkid_advice"]			= "Angi eller søk etter IDen til personen, familien eller kilden som dette mediaobjektet skal kobles til.";
$pgv_lang["use_browse_advice"]			= "Bruk knappen &laquo;Bla gjennom&raquo; for å finne ønsket fil på din lokale datamaskin.";
$pgv_lang["add_media_other_folder"]		= "Andre mapper... - skriv inn";
$pgv_lang["add_media_file"]				= "Eksisterende mediafil på server";
$pgv_lang["main_media_ok1"]			= "Hovedmediafilen <b>#GLOBALS[oldMediaName]#</b> heter nå <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]			= "Hovedmediafilen <b>#GLOBALS[oldMediaName]#</b> er nå flyttet fra <b>#GLOBALS[oldMediaFolder]#</b> til <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]			= "Hovedmediafilen er flyttet eller gitt nytt navn fra <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]			= "Hovedmediafilen <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> finnes ikke.";
$pgv_lang["main_media_fail1"]			= "Klarte ikke å gi hovedmediafilen <b>#GLOBALS[oldMediaName]#</b> det nye navnet <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]			= "Klarte ikke å flytte hovedmediafilen <b>#GLOBALS[oldMediaName]#</b> fra <b>#GLOBALS[oldMediaFolder]#</b> til <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]			= "Klarte ikke å flytte eller å gi nytt navn til hovedmediafilen fra <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Merk: Du må slå på 'Bruk GEDCOM (RESN) Personvern' funksjonaliteten for at denne settingen skal ha effekt.";
$pgv_lang["thumb_media_ok1"]			= "Miniatyrbildefilen <b>#GLOBALS[oldMediaName]#</b> heter nå <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]			= "Miniatyrbildefilen <b>#GLOBALS[oldMediaName]#</b> er nå flyttet fra <b>#GLOBALS[oldThumbFolder]#</b> til <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]			= "Miniatyrbildefilen er flyttet eller gitt nytt navn fra <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]			= "Miniatyrbildefilen <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> finnes ikke.";
$pgv_lang["thumb_media_fail1"]			= "Klarte ikke å gi miniatyrbildefilen <b>#GLOBALS[oldMediaName]#</b> det nye navnet <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]			= "Klarte ikke å flytte miniatyrbildefilen <b>#GLOBALS[oldMediaName]#</b> fra <b>#GLOBALS[oldThumbFolder]#</b> til <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]			= "Klarte ikke å flytte eller å gi nytt navn til miniatyrbildefilen fra <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> til <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]			= "Legg til en ny tilknyttet person";
$pgv_lang["edit_sex"]			= "Endre kjønn";
$pgv_lang["add_obje"]			= "Legg til et nytt bilde / media";
$pgv_lang["add_name"]			= "Legg til nytt navn";
$pgv_lang["edit_raw"]			= "Endre opplysninger direkte i slektsfilen";
$pgv_lang["label_add_remote_link"]  = "Legg til kobling";
$pgv_lang["label_gedcom_id"]        = "GEDCOM-ID";
$pgv_lang["label_local_id"]         = "Lokal-ID";
$pgv_lang["accept"]				= "Godkjenn";
$pgv_lang["accept_all"]			= "Godkjenn alle endringer";
$pgv_lang["accept_gedcom"]		= "Bestem deg for om du vil godkjenne eller avvise de enkelte endringene.<dl><dt>For å godta <i>alle</i> endringene på en gang</dt><dd>Klikk på linken <b>#pgv_lang[accept_all]#</b> i boksen under.</dd><dt>For å få mer informasjon om en endring kan du klikke på:</dt><dd><b>#pgv_lang[view_change_diff]#</b> for å se på forskjellen mellom gammelt og nytt innhold.<br /><b>#pgv_lang[view_gedcom]#</b> for å se på det nye innholdet i slektsfil-oppsett (GEDCOM).</dd></dl>";
$pgv_lang["accept_successful"]	= "Godkjente endringer er lagt til databasen";
$pgv_lang["add_child"]			= "Legg til barn";
$pgv_lang["add_child_to_family"]	= "Legg til et barn i denne familien";
$pgv_lang["add_fact"]			= "Legg til nye fakta";
$pgv_lang["add_father"]			= "Legg til en ny far";
$pgv_lang["add_husb"]			= "Legg til ektemann";
$pgv_lang["add_opf_child"]				= "Legg til et barn for å opprette en aleneforeldre-familie";
$pgv_lang["add_husb_to_family"]	= "Legg til en ektemann/far til denne familien";
$pgv_lang["add_media"]			= "Legg til en ny bilde- / mediefil";
$pgv_lang["add_media_lbl"]		= "Legg til bilder/andre medier";
$pgv_lang["add_mother"]			= "Legg til en ny mor";
$pgv_lang["add_new_chil"] 			= "Legg til et barn";
$pgv_lang["add_new_husb"]		= "Legg til en ny ektemann";
$pgv_lang["add_new_wife"]		= "Legg til en ny hustru";
$pgv_lang["add_note"]			= "Legg til en ny note";
$pgv_lang["add_note_lbl"]		= "Legg til note";
$pgv_lang["add_sibling"]		= "Legg til en bror eller søster";
$pgv_lang["add_son_daughter"]	= "Legg til en sønn eller datter";
$pgv_lang["add_source"]			= "Legg til en ny kildehenvisning";
$pgv_lang["add_source_lbl"]		= "Legg til kildehenvisning";
$pgv_lang["add_wife"]			= "Legg til hustru";
$pgv_lang["add_wife_to_family"]	= "Legg til en hustru/mor til denne familien";
$pgv_lang["advanced_search_discription"] = "Avansert søk på nettsteder";
$pgv_lang["auto_thumbnail"]		= "Automatisk miniatyrbilde";
$pgv_lang["basic_search"]			= "søk";
$pgv_lang["basic_search_discription"] = "Enkelt søk på nettsteder";
$pgv_lang["birthdate_search"]		= "Fødselsdato: ";
$pgv_lang["birthplace_search"]		= "Fødselssted: ";
$pgv_lang["change"]					= "Endre";
$pgv_lang["change_family_instr"]	= "Bruk denne siden til å endre eller fjerne familiemedlemmer.<br /><br />For hvert medlem i familien kan du bruke valget Endre for å velge en annen person som skal ta denne rollen i familien.  Du kan også bruke valget Fjern for å fjerne denne personen fra familien.<br /><br />Når du er ferdig med å gjøre endringer for familiemedlemmene, klikker du på knappen Lagre for å lagre endringene.<br />";
$pgv_lang["change_family_members"]	= "Bytt medlemmer av familien";
$pgv_lang["changes_occurred"]	= "Følgende endring(er) er gjort for denne personen:";
$pgv_lang["confirm_remove"]			= "Er du sikker på at du vil fjerne koblingen til familien for denne personen?";
$pgv_lang["confirm_remove_object"]	= "Er du sikker på at du vil fjerne dette objektet fra slektsbasen?";
$pgv_lang["create_repository"]		= "Opprett nytt oppbevaringssted";
$pgv_lang["create_source"]		= "Opprett en ny kilde";
$pgv_lang["current_person"]         = "Samme som nåværende";
$pgv_lang["date"]				= "Dato";
$pgv_lang["deathdate_search"]		= "Dødsdato: ";
$pgv_lang["deathplace_search"]		= "Dødssted: ";
$pgv_lang["delete_dir_success"]	= "Mappene for media og minityrbilder er nå slettet.";
$pgv_lang["delete_file"]		= "Slett fil";
$pgv_lang["delete_repo"]			= "Slett oppbevaringssted";
$pgv_lang["directory_not_empty"]	= "Mappen er ikke tom.";
$pgv_lang["directory_not_exist"]	= "Mappen finnes ikke.";
$pgv_lang["error_remote"]           = "Du har valgt et eksternt nettsted.";
$pgv_lang["error_same"]             = "Du har valgt det samme nettstedet.";
$pgv_lang["external_file"]		= "Dette mediaobjektet finnes ikke som en fil på dette nettstedet.  Den kan derfor ikke slettes, flyttes eller gis nytt navn.";
$pgv_lang["file_missing"]			= "Det ble ikke mottatt noen fil. Hent filen på nytt.";
$pgv_lang["file_partial"]			= "Filen ble bare delvis lastet opp, forsøk på nytt";
$pgv_lang["file_success"]			= "Filen er lastet opp";
$pgv_lang["file_too_big"]			= "Opplastet fil overskrider tillatt størrelse";
$pgv_lang["file_no_temp_dir"]		= "Manglende PHP midlertdig mappe";
$pgv_lang["file_cant_write"]		= "PHP mislyktes med å skrive til disk";
$pgv_lang["file_bad_extension"]		= "PHP blokkerte filen med utvidelsen";
$pgv_lang["file_unkown_err"]		= "Ukjent filopplastingsfeilkode #pgv_lang[global_num1]#. Vennligst rapporter dette som en bug.";
$pgv_lang["folder"]		 		= "Mappe";
$pgv_lang["gedcom_editing_disabled"]	= "Muligheten til å gjøre endringer i denne slektsbase er blitt deaktivert av system-administratoren.";
$pgv_lang["gedcomid"]				= "Bruker ID<br />i slektsbasen";
$pgv_lang["gedrec_deleted"]		= "Oppføringen i slektsfilen er nå slettet.";
$pgv_lang["gen_thumb"]			= "Lag miniatyrbilde(r)";
$pgv_lang["gen_missing_thumbs"]		= "Lag manglende miniatyrbilder";
$pgv_lang["gen_missing_thumbs_lbl"]	= "Manglende miniatyrbilder";
$pgv_lang["gender_search"]			= "Kjønn: ";
$pgv_lang["generate_thumbnail"]	= "Lag miniatyrbilde(r) automatisk fra ";
$pgv_lang["hebrew_givn"]			= "Hebraisk fornavn";
$pgv_lang["hebrew_surn"]			= "Hebraisk etternavn";
$pgv_lang["hide_changes"]		= "Klikk her for å skjule endringer.";
$pgv_lang["highlighted"]			= "Bruke som hovedbilde";
$pgv_lang["illegal_chars"]		= "Ugyldige tegn i navn";
$pgv_lang["invalid_search_multisite_input"] = "Du må angi en av disse:  Navn, fødselsdato, fødselssted, dødsdato, dødssted eller kjønn ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Du må søke på nytt med flere opplysninger enn bare kjønn";
$pgv_lang["label_diff_server"]      = "Annet nettsted";
$pgv_lang["label_location"]         = "Plassering";
$pgv_lang["label_password_id2"]		= "Passord: ";
$pgv_lang["label_rel_to_current"]   = "Tilknytning til nåværende person";
$pgv_lang["label_same_server"]      = "Lokalt nettsted";
$pgv_lang["label_site"]             = "Nettsted";
$pgv_lang["label_site_url"]         = "URL til nettsted:";
$pgv_lang["label_username_id2"]		= "Brukernavn: ";
$pgv_lang["lbl_server_list"]        = "Eksisterende fjerntjener";
$pgv_lang["lbl_type_server"]		= "Skriv inn navnet på det nye nettstedet.";
$pgv_lang["link_as_child"]			= "Koble denne personen til en eksisterende familie som et barn";
$pgv_lang["link_as_husband"]		= "Koble denne personen til en eksisterende familie som ektemann";
$pgv_lang["link_success"]			= "Lenken ble lagt til";
$pgv_lang["link_to_existing_media"]		= "Lenke til et eksisterende Mediaobjekt";
$pgv_lang["max_media_depth"]		= "Du kan ikke ha fler enn #GLOBALS[MEDIA_DIRECTORY_LEVELS]# undermapper for media";
$pgv_lang["max_upload_size"]		= "Maks størrelse for opplasting: ";
$pgv_lang["media_deleted"]			= "Mediamappe ble slettet.";
$pgv_lang["media_exists"]			= "Mediafilen finnes fra før.";
$pgv_lang["media_file"] 			= "Mediafil for opplasting";
$pgv_lang["media_file_deleted"]		= "Mediafil ble slettet.";
$pgv_lang["media_file_moved"]			= "Mediafilen er flyttet.";
$pgv_lang["media_file_not_moved"]	= "Mediafilen kunne ikke flyttes.";
$pgv_lang["media_file_not_renamed"]	= "Klarte ikke å flytte eller å gi mediafilen et nytt navn.";
$pgv_lang["media_thumb_exists"]	= "Media-miniatyrbilde finnes fra før.";
$pgv_lang["multiple_gedcoms"]	= "Denne filen har en kobling til en annen slektsbase på dette nettstedet.  Filen kan derfor ikke slettes, flyttes eller gis nytt navn før disse koblingene er fjernet.";
$pgv_lang["must_provide"]		= "Du må sørge for et ";
$pgv_lang["name_search"]			= "Navn: ";
$pgv_lang["new_repo_created"]		= "Nytt oppbevaringssted er opprettet";
$pgv_lang["new_source_created"]	= "Den nye kilden er lagret!";
$pgv_lang["no_changes"]			= "Det er ikke noen endringer som det er nødvendig å vise på nytt.";
$pgv_lang["no_known_servers"]		= "Ingen kjente tjenere<br />Ingen resultater vil vises";
$pgv_lang["no_temple"]			= "Ingen Tempel-Living tilordning";
$pgv_lang["no_upload"]			= "Klarte ikke å laste opp (upload) mediafiler fordi multi-media-filer ikke er aktivert eller fordi mediamappen/-katalogen ikke har skriverettighet.";
$pgv_lang["paste_id_into_field"]= "Legg inn følgende kilde-ID inn i endringsfeltet som en referanse til denne kilden ";
$pgv_lang["paste_rid_into_field"]	= "Lim inn følgende ID for oppbevaringsstedet til aktuelle koblings-feltet for ulike kilder: ";
$pgv_lang["photo_replace"] 			= "Ønsker du å erstatte et eldre bilde med dette?";
$pgv_lang["privacy_not_granted"]	= "Du har ikke tilgang til";
$pgv_lang["privacy_prevented_editing"]	= "På grunn av hensyn til personvern, kan du ikke endre opplysningene.";
$pgv_lang["record_marked_deleted"]		= "Denne oppføringen er merket for sletting og venter på godkjenning av admin.";
$pgv_lang["replace_with"]			= "Erstatt med";
$pgv_lang["show_changes"]		= "Denne oppføringen er blitt oppdatert. Klikk her for å se endring(ene).";
$pgv_lang["thumb_genned"]		= "Miniatyrbilde(r) er lagd automatisk.";
$pgv_lang["thumbgen_error"]		= "Klarte ikke å lage miniatyrbilde(r) for ";
$pgv_lang["thumbnail"]			= "Miniatyrbilde(r)";
$pgv_lang["title_remote_link"]      = "Legg til ekstern kobling";
$pgv_lang["undo"]				= "Angre";
$pgv_lang["undo_all"]				= "Angre alle endinger";
$pgv_lang["undo_all_confirm"]		= "Er du sikker på at du ønker å angre alle endringer for denne slektsbasen?";
$pgv_lang["undo_successful"]	= "Angring er utført";
$pgv_lang["update_successful"]	= "Oppdatering er utført";
$pgv_lang["upload"]				= "Hent (last opp)";
$pgv_lang["upload_error"]			= "Det oppstod en FEIL under henting (opplasting) av filen din.";
$pgv_lang["copy_error"]				= "Filen #GLOBALS[whichFile2]# kunne ikke kopieres fra #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]		= "Hent (upload) bilde- / mediefiler";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />Velg en fil fra din lokale PC <b>#MEDIA_DIRECTORY#</b> eller i en av undermappene til denne.<br /><br />Navn på mapper du angir vil bli lagt til #MEDIA_DIRECTORY#. (Eksempel: #MEDIA_DIRECTORY#minfamilie)<br />Dersom mappen for miniatyrbilder ikke finnes fra før, vil denne bli lagd automatisk.";
$pgv_lang["upload_successful"]	= "Overføring (opplasting) er utført";
$pgv_lang["view_change_diff"]	= "Vis endring(er), forskjell(er)";

?>
