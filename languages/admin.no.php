<?php
/**
 * Norwegian texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
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
 * # $Id: admin.no.php 6908 2010-02-03 02:17:33Z canajun2eh $
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

$pgv_lang["upload_a_gedcom"] 		= "Last opp en GEDCOM-fil";
$pgv_lang["start_entering"] 		= "Begynn å legge inn data";
$pgv_lang["add_gedcom_from_path"] 	= "Legg til en GEDCOM fra en sti";
$pgv_lang["get_started_instructions"]	= "Velg en av disse mulighetene for å¨begynne å bruke PhpGedView";

$pgv_lang["admin_users_exists"]		= "Følgende administrator-bruker finnes allerede:";
$pgv_lang["install_step_1"] = "Sjekk miljø";
$pgv_lang["install_step_2"] = "Databaseforbindelse";
$pgv_lang["install_step_3"] = "Opprett tabeller";
$pgv_lang["install_step_4"] = "Nettstedinnstillinger";
$pgv_lang["install_step_5"] = "Språk";
$pgv_lang["install_step_6"] = "Lagre innstillinger";
$pgv_lang["install_step_7"] = "Opprett admin-bruker";
$pgv_lang["install_wizard"] = "Installeringshjelp";
$pgv_lang["basic_site_config"] = "Vanlige innstillinger";
$pgv_lang["adv_site_config"] = "Avanserte innstillinger";
$pgv_lang["config_not_saved"] = "*Instillingene vil ikke<br />bli lagret før i steg 6";
$pgv_lang["download_config"] = "Last ned config.php";
$pgv_lang["site_unavailable"] = "Nettstedet er for tiden utilgjengelig";
$pgv_lang["to_manage_users"] = "For å administrere brukere, bruk siden <a href=\"useradmin.php\">Brukeradministrasjon</a>.";
$pgv_lang["db_tables_created"] = "Databasetabeller er opprettet";
$pgv_lang["config_saved"] = "Konfigurasjonen er lagret";
$pgv_lang["checking_errors"]		= "Sjekker etter feil...";
$pgv_lang["checking_php_version"]		= "Sjekker PHP-versjon som kreves:";
$pgv_lang["failed"]		= "Feilet";
$pgv_lang["pgv_requires_version"]		= "PhpGedView krever PHP versjon #PGV_REQUIRED_PHP_VERSION# eller høyere.";
$pgv_lang["using_php_version"]		= "Du bruker PHP versjon #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]		= "Sjekker minimum database-støtte:";
$pgv_lang["no_db_extensions"]		= "Du har ingen av de støttede databasetilleggene.";
$pgv_lang["db_ext_support"]		= "Du har #DBEXT#-støtte ";
$pgv_lang["checking_config.php"]		= "Sjekker config.php:";
$pgv_lang["config.php_missing"]		= "config.php ble ikke funnet.";
$pgv_lang["config.php_missing_instr"]		= "Denne installasjonsveiledningen vil ikke kunne skrive dine instillinger til config.php filen.  Du kan ta en kopi av config.dist filen og endre navnet til config.php.  Alternativt, etter at du har fullført denne installasjonsveiledningen kan du bruke valget Last ned config.php til å laste ned dine innstillinger og laste opp instillingene i config.php til din server.";
$pgv_lang["config.php_not_writable"]		= "config.php er skrivebeskyttet.";
$pgv_lang["config.php_not_writable_instr"]		= "Denne installasjonsveiledningen vil ikke kunne skrive dine instillinger til config.php filen.  Du kan sette skrivetilgang på fila, eller når du har fullført denne installasjonsveiledningen kan du bruke valget Last ned config.php til å laste ned dine innstillinger og laste opp instillingene i config.php til din server.";
$pgv_lang["passed"]		= "Passed";
$pgv_lang["config.php_writable"]		= "config.php finnes og er skrivbar.";
$pgv_lang["checking_warnings"]		= "Sjekker for advarsler...";
$pgv_lang["checking_timelimit"]		= "Undersøker muligheten for å endre tidsbegrensning:";
$pgv_lang["cannot_change_timelimit"]		= "Ikke mulig å endre verdi for tidsbegrensning.";
$pgv_lang["cannot_change_timelimit_instr"]		= "You may not be able to run all functions on large databases with many individuals.";
$pgv_lang["current_max_timelimit"]		= "Din maksimale tidsbegrensning er";
$pgv_lang["check_memlimit"]		= "Undersøker muligheten for å endre maks tillatt minne:";
$pgv_lang["cannot_change_memlimit"]		= "Ikke mulig å endre maks tillatt minne.";
$pgv_lang["cannot_change_memlimit_instr"]		= "You may not be able to run all functions on large databases with many individuals.";
$pgv_lang["current_max_memlimit"]		= "Din minnebegresning er";
$pgv_lang["check_upload"]		= "Undersøker muligheten for å laste opp filer:";
$pgv_lang["current_max_upload"]		= "Din største filstørrelse for opplastning av filer er:";
$pgv_lang["check_gd"]		= "Ser etter GD bildebehandlingsrutiner:";
$pgv_lang["cannot_use_gd"]		= "You do not have the GD image library.  You will not be able to automatically create image thumbnails.";
$pgv_lang["check_sax"]		= "Checking for SAX XML library:";
$pgv_lang["cannot_use_sax"]		= "You do not have the SAX XML library.  You will not be able to run any reports or some other auxiliary functions.";
$pgv_lang["check_dom"]		= "Checking for DOM XML library:";
$pgv_lang["cannot_use_dom"]		= "You do not have the DOM XML library.  You will not be able to export XML.";
$pgv_lang["check_calendar"]		= "Checking for Advanced Calendar library:";
$pgv_lang["cannot_use_calendar"]		= "You do not have the advanced calendar support. You will not be able to run some advanced calendar functions.";
$pgv_lang["warnings_passed"]		= "Alle forhåndskontroller utført OK.";
$pgv_lang["warning_instr"]		= "If any of the warnings do not pass you may still be able to run PhpGedView on this server, but some functionality may be disabled or you may experience poor performance.";

$pgv_lang["associated_files"]		= "Tilhørende filer:";
$pgv_lang["remove_all_files"]		= "Slett alle unødvendige filer";
$pgv_lang["warn_file_delete"]		= "Denne filen inneholder viktige data slik som språkvalg eller endringer som venter på godkjenning.  Er du sikker på at du vil slette denne filen?";
$pgv_lang["deleted_files"]          = "Slettede filer:";
$pgv_lang["index_dir_cleanup_inst"]	= "For å slette en fil eller en undermappe fra Index-mappen,  dra og slipp den på papirkurven eller huk den av.  Klikk Slett-knappen for å fjerne de merkede filene permanent.<br /><br />Filer merket med <img src=\"./images/RESN_confidential.gif\" alt=\"\" /> er påkrevet for normal bruk av systemet og kan ikke slettes.<br />Filer merket med <img src=\"./images/RESN_locked.gif\" alt=\"\" /> inneholder viktige innstillinger eller ventende endringer og må ikke slettes uten at du er HELT sikker på hva du gjør.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Opprydning i Indexmappen";
$pgv_lang["clear_cache_succes"]		= "Hurtigminne-filen er slettet.";
$pgv_lang["clear_cache"]			= "Rens hurtigminne-filen";
$pgv_lang["sanity_err0"]			= "Feil:";
$pgv_lang["sanity_err1"]			= "Du må ha PHP versjon #PGV_REQUIRED_PHP_VERSION# eller høyere.";
$pgv_lang["sanity_err2"]			= "Filen eller mappen <i>#GLOBALS[whichFile]#</i> finnes ikke. Vennligst forsikre deg om at filen eller mappen eksisterer, ikke er feilskrevet, og at Les-tilganger er satt korrekt.";
$pgv_lang["sanity_err3"]			= "Filen <i>#GLOBALS[whichFile]#</i> ble ikke lastet opp korrekt. Forsøk å laste opp filen på nytt.";
$pgv_lang["sanity_err4"]			= "Filen <i>config.php</i> er ødelagt.";
$pgv_lang["sanity_err5"]			= "<i>config.php</i>-filen er skrivebeskyttet.";
$pgv_lang["sanity_err6"]			= "<i>#GLOBALS[INDEX_DIRECTORY]#</i>-mappen er skrivebeskyttet.";
$pgv_lang["sanity_warn0"]			= "advarsler:";
$pgv_lang["sanity_warn1"]			= "<i>#GLOBALS[MEDIA_DIRECTORY]#</i>-mappen er skrivebeskyytet.  Du vil ikke kunne laste opp mediafiler eller generere miniatyrbilder i PhpGedView.";
$pgv_lang["sanity_warn2"]			= "<i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i>-mappen er skrivebeskyttet.  Du vil ikke kunne laste opp miniatyrbilder eller generere miniatyrbilder i PhpGedView.";
$pgv_lang["sanity_warn3"]			= "GD imaging-biblioteket finnes ikke. PhpGedView vil fungere uten, men noen av funksjonene, slik som generering av miniatyrbilder og sirkeldiagrammet, vil ikke fungere uten GD-biblioteket.  Vennligst se <a href='http://www.php.net/manual/en/ref.image.php'>http://www.php.net/manual/en/ref.image.php</a> for mer informasjon.";
$pgv_lang["sanity_warn4"]			= "XML Parser-biblioteket finnes ikke. PhpGedView vil fungere uten, men noen av funksjonene, slik som rapportgenerering og webtjenester, vil ikke fungere uten XML Parser library. Vennligst se <a href='http://www.php.net/manual/en/ref.xml.php'>http://www.php.net/manual/en/ref.xml.php</a> for mer informasjon.";
$pgv_lang["sanity_warn5"]			= "DOM XML-biblioteket finnes ikke. PhpGedView vil fungere uten, men noen av funksjonene, slik som Gramps Eksport-funksjonen i handlekurven, nedlasting, og webtjenester vil ikke fungere. Vennligst se <a href='http://www.php.net/manual/en/ref.domxml.php'>http://www.php.net/manual/en/ref.domxml.php</a> for mer informasjon.";
$pgv_lang["sanity_warn6"]			= "Kalender-biblioteket finnes ikke. PhpGedView vil fungere uten, men noen av funksjonene, slik som convertering til andre kalendere som Hebraisk eller Fransk, vil ikke fungere.  Det er ikke essensielt for å kjøre PhpGedView. Vennligst se <a href='http://www.php.net/manual/en/ref.calendar.php'>http://www.php.net/manual/en/ref.calendar.php</a> for mer informasjon.";
$pgv_lang["ip_address"]				= "IP-adresse";
$pgv_lang["date_time"]				= "Dato og tid";
$pgv_lang["log_message"]			= "Logg-melding";
$pgv_lang["searchtype"]				= "Type søk";
$pgv_lang["query"]					= "Spørring";
$pgv_lang["user"]					= "Godkjent bruker";
$pgv_lang["editors"]				= "Redigerer";
$pgv_lang["gedcom_admins"]			= "GEDCOM administratorer";
$pgv_lang["site_admins"]			= "Nettstedadministratorer";
$pgv_lang["nobody"]					= "Ingen";
$pgv_lang["thumbnail_deleted"]		= "Miniatyrbilde-fil er nå slettet.";
$pgv_lang["thumbnail_not_deleted"]	= "Klarte ikke å slette miniatyrbilde-fil.";
$pgv_lang["step2"]					= "Del 2 av 4:";
$pgv_lang["refresh"]			= "Oppdater";
$pgv_lang["move_file_success"]	= "Media- og miniatyrbilde-filer er nå flyttet.";
$pgv_lang["media_folder_corrupt"]	= "Det er en feil med mediamappen.";
$pgv_lang["media_file_not_deleted"]	= "Klarte ikke å slette mediafil.";
$pgv_lang["gedcom_deleted"]		= "Slektsfilen [#GED#] er nå slettet.";
$pgv_lang["gedadmin"]				= "Administrator av slektsfilen";
$pgv_lang["full_name"]				= "Fullt navn";
$pgv_lang["error_header"] 		= "Slektsfilen [#GEDCOM#], finnes ikke på det angitte stedet.";
$pgv_lang["confirm_delete_file"]	= "Er du sikker på at du vil slette denne filen?";
$pgv_lang["confirm_folder_delete"] = "Er du sikker på at du vil slette denne mappen?";
$pgv_lang["confirm_remove_links"]	= "Er du sikker på at du vil fjerne alle koblinger til dette objektet?";
$pgv_lang["PRIV_PUBLIC"]				= "Vis til alle";
$pgv_lang["PRIV_USER"]					= "Vis kun til godkjente brukere";
$pgv_lang["PRIV_NONE"]					= "Vis kun til administratorer";
$pgv_lang["PRIV_HIDE"]					= "Skjul selv for administrative brukere";
$pgv_lang["manage_gedcoms"]			= "Slektsfil(er) og personvern";
$pgv_lang["keep_media"]				= "Behold medialenker";
$pgv_lang["files_in_backup"]		= "Filer som er inkludert i dette backup-settet";
$pgv_lang["created_remotelinks"]	= "Opprettet tabellen <i>Eksterne koblinger</i>.";
$pgv_lang["created_remotelinks_fail"] 	= "Klarte ikke å opprette tabellen <i>Eksterne koblinger</i>.";
$pgv_lang["created_indis"]		= "Opprettet tabellen <i>Personer</i>.";
$pgv_lang["created_indis_fail"]	= "Klarte ikke å opprette tabellen <i>Personer</i>!";
$pgv_lang["created_fams"]		= "Opprettet tabellen <i>Familier</i>.";
$pgv_lang["created_fams_fail"]	= "Klarte ikke å opprette tabellen <i>Familier</i>!";
$pgv_lang["created_sources"]	= "Opprettet tabellen <i>Kilder</i>.";
$pgv_lang["created_sources_fail"]	= "Klarte ikke å opprette tabellen <i>Kilder</i>!";
$pgv_lang["created_other"]		= "Opprettet tabellen <i>Annet</i>.";
$pgv_lang["created_other_fail"]	= "Klarte ikke å opprette tabellen <i>Annet</i>!";
$pgv_lang["created_places"]		= "Opprettet tabellen <i>Steder</i>.";
$pgv_lang["created_places_fail"]	= "Klarte ikke å opprette tabellen <i>Steder</i>!";
$pgv_lang["created_placelinks"] 	= "Opprettet tabellen <i>Stedskoblinger</i>.";
$pgv_lang["created_placelinks_fail"]	= "Klarte ikke å opprette tabellen <i>Stedskoblinger</i>.";
$pgv_lang["created_media_fail"]	= "Klarte ikke å opprette tabellen <i>Media</i>.";
$pgv_lang["created_media_mapping_fail"]	= "Klarte ikke å opprette tabellen <i>Media-mapper</i>.";
$pgv_lang["no_thumb_dir"]		= " mappen/katalogen for miniatyrbilde(r) finnes ikke og den kunne heller ikke opprettes.";
$pgv_lang["folder_created"]		= "Opprettet mappe";
$pgv_lang["folder_no_create"]	= "Kan ikke opprette mappe";
$pgv_lang["security_no_create"]	= "Sikkerhetsadvarsel: Filen <b><i>index.php</i></b> finnes ikke i ";
$pgv_lang["security_not_exist"]	= "Sikkerhetsadvarsel: Klarte ikke å lage filen <b><i>index.php</i></b> i ";
$pgv_lang["label_delete"]           = "Slett";
$pgv_lang["progress_bars_info"]			= "Fremdriftsindikatoren under vil vise deg hvordan importen forløper.  Dersom tidsbegrensningen utløper vil importen stoppe og du vil bli bedt om å trykke <b>Fortsett</b>-knappen.  Hvis du ikke ser <b>Fortsett</b>-knappen, må du starte importen på nyttt med en mindre verdi for tidsbegrensning.";
$pgv_lang["upload_replacement"]			= "Last opp erstatningsfil";
$pgv_lang["about_user"]					= "Du skal først opprette din hovedadministrator.  Denne bruker har rettigheter til å oppdatere konfigurasjonsfiler, se private data, og opprette andre brukere.";
$pgv_lang["access"]						= "Innsyn";
$pgv_lang["add_gedcom"]			= "Legg til en slektsfil";
$pgv_lang["add_new_gedcom"]			= "Lag en ny slektsfil";
$pgv_lang["add_new_language"]			= "Legg til filer og oppsett for et nytt språk";
$pgv_lang["add_user"]					= "Legg til ny bruker";
$pgv_lang["admin_gedcom"]			= "Administrere";
$pgv_lang["admin_gedcoms"]				= "Klikk her for å gå til administrasjon av Slektsfil(er) og personvern";
$pgv_lang["admin_geds"]				= "Data- og slektsfil-administrasjon";
$pgv_lang["admin_info"]				= "Informasjon";
$pgv_lang["admin_site"]				= "Administrasjon av nettstedet";
$pgv_lang["admin_user_warnings"]		= "En eller flere brukerkontoer har advarsler";
$pgv_lang["admin_verification_waiting"] = "Brukerkonto(er) på vent for godkjenning av admin";
$pgv_lang["administration"]			= "Administrasjon";
$pgv_lang["ALLOW_CHANGE_GEDCOM"] 		= "Tillat bytting av slektsbaser";
$pgv_lang["ALLOW_REMEMBER_ME"]			= "Vis valget <b>Husk meg</b> på siden Logg inn";
$pgv_lang["ALLOW_USER_THEMES"] 			= "Tillat brukere å velge<br />deres egen stil";
$pgv_lang["ansi_encoding_detected"]	= "Oppdaget ANSI tekstkoding.  PhpGedView fungerer best med filer som er kodet med UTF-8.";
$pgv_lang["ansi_to_utf8"]			= "Konvertere fra ANSI til UTF-8 tegnsett?";
$pgv_lang["apply_privacy"]			= "Legge til nye innstillinger for personvern?";
$pgv_lang["back_useradmin"]			= "Tilbake til Brukere og rettigheter";
$pgv_lang["bytes_read"]			= "Bytes lest:";
$pgv_lang["can_admin"]					= "Bruker kan administrere";
$pgv_lang["can_edit"]					= "Nivå for rettigheter";
$pgv_lang["change_id"]				= "Endre personID til:";
$pgv_lang["choose_priv"]			= "Velg nivå for personvern:";
$pgv_lang["cleanup_places"]			= "Rydd opp i stedene";
$pgv_lang["cleanup_users"]			= "Rydd opp i brukere";
$pgv_lang["click_here_to_continue"]		= "Klikk her for å fortsette.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Klikk her for å gå til slektstreet.";
$pgv_lang["comment"]				= "Kommentar fra admin til bruker";
$pgv_lang["comment_exp"]			= "Advarsel fra admin om dato";
$pgv_lang["config_help"]				= "Konfigurasjonshjelp";
$pgv_lang["config_still_writable"]		= "Filen <i>config.php</i> er fremdeles skrivbar !<br />Dersom du er ferdig med å konfigurere siden din,<br />bør du av hensyn til sikkerheten, sette rettighetene til denne filen tilbake til <i>kun</i> lesbar!";
$pgv_lang["configuration"]			= "Program-innstillinger";
$pgv_lang["configure"]					= "Konfigurer PhpGedView";
$pgv_lang["configure_head"]				= "Oppsett for PhpGedView";
$pgv_lang["confirm_gedcom_delete"]		= "Er du sikker på at du vil slette GEDCOMfilen:";
$pgv_lang["confirm_user_delete"]	= "Er du sikker på at du vil slette brukeren";
$pgv_lang["create_user"]			= "Opprett bruker";
$pgv_lang["current_users"]				= "Aktiverte brukere";
$pgv_lang["daily"]						= "Daglig";
$pgv_lang["dataset_exists"]		= "Det er allerede importert en slektsfil i databasen med navnet ";
$pgv_lang["unsync_warning"] 					= "Denne GEDCOM-filen er <em>ikke</em> synkronisert med databasen.  Det kan hende den ikke inneholder siste versjon av dine data.  For å reimportere fra databasen istedenfor filen, må du først eksportere og så laste opp.";
$pgv_lang["date_registered"]			= "Dato registert";
$pgv_lang["day_before_month"]		= "Dag før måned (DD MM ÅÅÅÅ)";
$pgv_lang["DEFAULT_GEDCOM"] 			= "Standard slektsbase ";
$pgv_lang["default_user"]				= "Opprett hovedadministratoren.";
$pgv_lang["del_gedrights"]			= "Slektsbasen er ikke aktiv lengre. Fjern rettighetene til brukeren.";
$pgv_lang["del_proceed"]			= "Fortsett";
$pgv_lang["del_unvera"]				= "Bruker ikke godkjent av administrator.";
$pgv_lang["del_unveru"]				= "Brukeren bekreftet ikke innen 7 dager.";
$pgv_lang["do_not_change"]			= "Ikke gjør endringer";
$pgv_lang["download_gedcom"]		= "Laste ned (download) slektsfil (GEDCOM)";
$pgv_lang["download_here"]				= "Klikk her for å laste ned fil (download).";
$pgv_lang["download_note"]			= "NB! Store slektsfiler (GEDCOM) kan ta lang tid å forberede før en nedlastning (download).  Dersom PHP melder at tiden har gått ut før nedlastningen er ferdig, så kan det være at du ikke har mottatt hele filen.  For å sjekke om den nedlastede slektsfilen er korrekt, kan se om filen inneholder linjen <b>0 TRLR</b> på slutten.  Som en tommelfinger-regel vil tiden det tar å laste ned slektsfilen, være like lang som det tok å importere den (avhengig av hastigheten på internett-tilkoblingen din).";
$pgv_lang["editaccount"]			= "Gi denne brukeren rettighet til å endre brukerkontoen sin";
$pgv_lang["empty_dataset"]		= "Vil du tømme den nåværende slektsbasen og legge data inn på nytt?";
$pgv_lang["empty_lines_detected"]	= "Oppdaget tomme linjer i slektsfilen din.  Under oppryddingen vil disse tomme linjene bli fjernet.";
$pgv_lang["enable_disable_lang"]	= "Konfigurere støttede språk";
$pgv_lang["error_ban_server"]       = "Ugyldig IP-adresse.";
$pgv_lang["error_delete_person"]    = "Du må velge personen som du ønsker å slette den eksterne koblingen til.";
$pgv_lang["error_header_write"]	= "Slektsfilen [#GEDCOM#], er ikke skrivbar. Sjekk attributter og tilgangsrettigheter.";
$pgv_lang["error_remove_site"]					= "Fjerntjeneren kunne ikke slettes.";
$pgv_lang["error_remove_site_linked"]			= "Fjerntjeneren kan ikke slettes fordi forbindelseslisten ikke er tom.";
$pgv_lang["error_remote_duplicate"]				= "Denne fjerndatabasen er allerede i listen som <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]	= "Fikk ikke tilgang til eksternt nettsted";
$pgv_lang["error_url_blank"]		= "Tittel og URL til eksternt nettsted må fylles ut";
$pgv_lang["error_view_info"]        = "Du må velge personen som du ønsker å se opplysninger om.";
$pgv_lang["example_date"]			= "Eksempel på ugyldig dato fra slektsfilen din:";
$pgv_lang["example_place"]			= "Eksempel på ugyldig stedsnavn fra slektsfilen din:";
$pgv_lang["fbsql"]						= "FrontBase";
$pgv_lang["found_record"]		= "dataposter funnet";
$pgv_lang["ged_download"]				= "Last ned (download)";
$pgv_lang["ged_import"]			= "Importer";
$pgv_lang["ged_export"] 						= "Eksport";
$pgv_lang["ged_check"] 							= "Sjekk";
$pgv_lang["gedcom_adm_head"]			= "Oppsett for slekts- / GEDCOM-fil";
$pgv_lang["gedcom_config_write_error"]			= "F E I L !!!<br />Kunne ikke skrive til filen <i>#GLOBALS[whichFile]#</i>.  Kontroller korrekte skrivetilganger.";
$pgv_lang["gedcom_downloadable"]	= "<br />Besøkende på nettstedet ditt kan laste ned (download) denne slektsfilen!<br />Les mer om dette i filen <a href=\"".(file_exists('readme-norsk.txt')?"readme-norsk.txt":"readme.txt")."\">readme".(file_exists('readme-norsk.txt')?"-norsk":"").".txt</a> i avsnittet 12. SIKKERHET / PERSONVERN<br />for å finne en løsning på dette.";
$pgv_lang["gedcom_file"]			= "Slektsfil:";
$pgv_lang["gedcom_not_imported"]		= "Denne GEDCOM-filen er ikke blitt importet enda.";
$pgv_lang["ibase"]						= "InterBase";
$pgv_lang["ifx"]						= "Informix";
$pgv_lang["img_admin_settings"]		= "Endre innstillingene for bilde-behandling";
$pgv_lang["autoContinue"]						= "Automatisk trykk på «Fortsett»-knappen";
$pgv_lang["import_complete"]	= "Import ferdig";
$pgv_lang["import_options"]			= "Valg for import";
$pgv_lang["import_progress"]	= "Import utført...";
$pgv_lang["import_statistics"]		= "Statistikk for importen";
$pgv_lang["import_time_exceeded"]	= "Maks utføringstid for en handling er nådd !<br />- Klikk på knappen \"Fortsett\" for å gjenoppta importen av slektsfilen (som ny handling).";
$pgv_lang["inc_languages"]			= " Språk";
$pgv_lang["INDEX_DIRECTORY"] 			= "Mappe for indekseringsfil";
$pgv_lang["invalid_dates"]			= "Oppdaget ugyldig dato-format. Ved rydding vil disse bli endret til formatet DD MMM ÅÅÅÅ (f.eks. 1 JAN 2004).";
$pgv_lang["BOM_detected"] 						= "En Byte Order Mark (BOM) ble oppdaget ved begynnelsen av filen. Ved cleanup, vil denne spesialkoden bli fjernet.";
$pgv_lang["invalid_header"]			= "Oppdaget at det er linjer før startlinjen (0 HEAD) i slektsfilen.  Under oppryddingen vil disse linjene bli fjernet.";
$pgv_lang["label_added_servers"]	= "Eksterne nettsteder som er lagt til";
$pgv_lang["label_banned_servers"]   = "Bannlys nettsteder ved IP";
$pgv_lang["label_families"]         = "Familier";
$pgv_lang["label_gedcom_id2"]       = "GEDCOM-ID:";
$pgv_lang["label_individuals"]      = "Personer";
$pgv_lang["label_manual_search_engines"]   = "Merk søkemaskiner manuelt ved IP";
$pgv_lang["label_new_server"]       = "Legg til nytt nettsted";
$pgv_lang["label_password_id"]		= "Passord";
$pgv_lang["label_server_info"]      = "Alle personer som har en kobling til dette nettstedet:";
$pgv_lang["label_server_url"]       = "URL/IP til nettsted";
$pgv_lang["label_username_id"]		= "Brukernavn";
$pgv_lang["label_view_local"]       = "Vis opplysninger om personen som er lagre lokalt";
$pgv_lang["label_view_remote"]      = "Vis opplysninger om personen som er lagret eksternt";
$pgv_lang["LANG_SELECTION"] 					= "Støttede språk";
$pgv_lang["LANGUAGE_DEFAULT"]		= "Du har ikke angitt språkene som nettstedet ditt skal støtte.<br />PhpGedView vil derfor bruke standard oppsett.";
$pgv_lang["last_login"]					= "Sist logget inn";
$pgv_lang["lasttab"]							= "Sist besøkte fane for person";
$pgv_lang["leave_blank"]				= "La feltet for passord være tomt, hvis du vil bevare det eksisterende passordet.";
$pgv_lang["link_manage_servers"]    = "Oppsett for nettsteder";
$pgv_lang["logfile_content"]		= "Innhold i logg-filen";
$pgv_lang["macfile_detected"]		= "Oppdaget Macintosh-fil.  Under oppryddingen vil denne filen bli konvertert til en DOS-fil.";
$pgv_lang["mailto"]						= "Besøkende sitt eget e-post-program";
$pgv_lang["merge_records"]		= "Flette data (dobbelregisterte)";
$pgv_lang["message_to_all"]						= "Send melding til alle brukere";
$pgv_lang["messaging"]					= "PhpGedView interne beskjeder";
$pgv_lang["messaging2"]					= "PhpGedView interne beskjeder med e-post-kopi";
$pgv_lang["messaging3"]					= "PhpGedView ekstern e-post";
$pgv_lang["month_before_day"]		= "Måned før dag (MM DD YYYY)";
$pgv_lang["monthly"]					= "Månedlig";
$pgv_lang["msql"]						= "Mini SQL";
$pgv_lang["mssql"]						= "Microsoft SQL Server";
$pgv_lang["mysql"]						= "MySQL";
$pgv_lang["mysqli"]						= "MySQL 4.1+ og PHP 5";
$pgv_lang["never"]						= "Aldri";
$pgv_lang["no_logs"]					= "Ingen logging";
$pgv_lang["no_messaging"]				= "Ingen kontaktlink";
$pgv_lang["oci8"]						= "Oracle 7+";
$pgv_lang["page_views"]							= "&nbsp;&nbsp;siden vises i&nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "Sjekken er utført...!  Gjør de nødvendige valgene og klikk deretter på 'Rydd'";
$pgv_lang["pgsql"]						= "PostgreSQL";
$pgv_lang["pgv_config_write_error"]		= "Feil!!! Kan ikke skrive til konfigurasjonsfilen til PhpGedView. Sjekk fil- og katalog-rettigheter og prøv igjen.";
$pgv_lang["PGV_MEMORY_LIMIT"]			= "Maks Minnegrense";
$pgv_lang["pgv_registry"]			= "Vis andre nettsteder som bruker PhpGedView";
$pgv_lang["PGV_SESSION_SAVE_PATH"] 		= "Logg-lagrings-sti";
$pgv_lang["PGV_SESSION_TIME"] 			= "Logg-inn timeout";
$pgv_lang["PGV_SIMPLE_MAIL"]			= "Bruk enkel epost-hode i eksterne epost-meldinger";
$pgv_lang["PGV_SMTP_ACTIVE"] 					= "Bruk SMTP for å sende ekstern e-post";
$pgv_lang["PGV_SMTP_HOST"] 						= "Utgående servernavn (SMTP)";
$pgv_lang["PGV_SMTP_HELO"] 						= "Sendende domenenavn";
$pgv_lang["PGV_SMTP_PORT"] 						= "SMTP Port";
$pgv_lang["PGV_SMTP_AUTH"] 						= "Brukernavn og passord";
$pgv_lang["PGV_SMTP_AUTH_USER"] 				= "Brukernavn";
$pgv_lang["PGV_SMTP_AUTH_PASS"] 				= "Passord";
$pgv_lang["PGV_SMTP_FROM_NAME"] 				= "Avsendernavn";
$pgv_lang["PGV_STORE_MESSAGES"]			= "Tillat at beskjeder<br />blir lagret online";
$pgv_lang["phpinfo"]				= "PHPInfo";
$pgv_lang["place_cleanup_detected"]	= "Oppdaget ugyldig stedskoder.  Disse bør endres!  Følgende steder er ugyldige: ";
$pgv_lang["please_be_patient"]	= "Vennligst VENT...";
$pgv_lang["privileges"]					= "Rettigheter";
$pgv_lang["reading_file"]		= "Leser slektsfilen";
$pgv_lang["readme_documentation"]	= "ReadMe-dokumentasjon (Engelsk)";
$pgv_lang["remove_ip"] 				= "Fjern IP";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"]	= "Krever at en administrator godkjenner nye brukeroppføringer";
$pgv_lang["review_readme"] 				= "Du bør lese gjennom tekstfilen <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> før du fortsetter med å konfigurere PhpGedView.";
$pgv_lang["rootid"]					= "ID til startperson<br />i slektsbasen";
$pgv_lang["seconds"]							= "&nbsp;&nbsp;sekunder";
$pgv_lang["select_an_option"]		= "Alternativer:";
$pgv_lang["SERVER_URL"] 				= "PhpGedView URL";
$pgv_lang["show_phpinfo"]				= "Vis info om PHP";
$pgv_lang["siteadmin"]				= "Administrator av nettstedet";
$pgv_lang["sqlite"]						= "SQLite";
$pgv_lang["sybase"]						= "Sybase";
$pgv_lang["sync_gedcom"]		= "Kopier innstillingene for slektsbasen";
$pgv_lang["system_time"]				= "Gjeldende systemtid:";
$pgv_lang["user_time"]							= "Klokke for bruker:";
$pgv_lang["TBLPREFIX"] 					= "Database Table Prefiks";
$pgv_lang["themecustomization"]					= "Theme-tilpasninger";
$pgv_lang["time_limit"]			= "Tidsgrense:";
$pgv_lang["title_manage_servers"]   = "Oppsett for nettsteder";
$pgv_lang["title_view_conns"]       = "Vis tilkoblinger";
$pgv_lang["translator_tools"]	= "Verktøy for å oversette";
$pgv_lang["update_myaccount"]		= "Oppdater Min konto";
$pgv_lang["update_user"]			= "Oppdater brukerkonto";
$pgv_lang["upload_gedcom"]			= "Hente (upload) slektsfil(er) (GEDCOM)";
$pgv_lang["USE_REGISTRATION_MODULE"]	= "Gir besøkende muligheten til å be om en brukerkonto";
$pgv_lang["user_auto_accept"]		= "Godkjenn automatisk endringer gjort av denne brukeren";
$pgv_lang["user_contact_method"]	= "Ønsket kontaktmetode";
$pgv_lang["user_create_error"]		= "Bruker kan ikke opprettes. Gå tilbake og prøv på nytt.";
$pgv_lang["user_created"]			= "Bruker er opprettet.";
$pgv_lang["user_default_tab"]		= "Arkfanen som skal vises som standard på faktasiden til personer";
$pgv_lang["user_path_length"]	= "Maks antall ledd for personvern for slektninger";
$pgv_lang["user_relationship_priv"]	= "Begrens tilgangen til slektninger";
$pgv_lang["users_admin"]			= "Administratorer til nettstedet";
$pgv_lang["users_gedadmin"]			= "Administratorer til slektsfilen";
$pgv_lang["users_total"]			= "Totalt antall brukere";
$pgv_lang["users_unver"]			= "Ikke bekreftet av bruker";
$pgv_lang["users_unver_admin"]		= "Ikke bekreftet av administrator";
$pgv_lang["usr_deleted"]			= "Slettet bruker: ";
$pgv_lang["usr_idle"]				= "Antall måneder en bruker kan la vær å logge seg inn før brukerkontoen ansees som inaktiv: ";
$pgv_lang["usr_idle_toolong"]		= "Kontoen til brukeren har vært inaktiv for lenge: ";
$pgv_lang["usr_no_cleanup"]			= "Fant ikke noe å rydde";
$pgv_lang["usr_unset_gedcomid"]		= "Fjern slektsfilID for ";
$pgv_lang["usr_unset_rights"]		= "Fjern rettigheter til slektsfilen for ";
$pgv_lang["usr_unset_rootid"]		= "Fjern hovedID for ";
$pgv_lang["valid_gedcom"]			= "Gyldig slektsfil funnet.  Det er ikke nødvendig å gjøre endringer.";
$pgv_lang["validate_gedcom"]		= "Sjekker kvaliteten til slektsfilen";
$pgv_lang["verified"]			= "Bruker har<br />bekreftet søknaden";
$pgv_lang["verified_by_admin"]	= "Godkjent bruker<br />[av Admin]";
$pgv_lang["verify_gedcom"]			= "Sjekk slektsfilen (GEDCOM)";
$pgv_lang["verify_upload_instructions"]	= "Dersom du velger å fortsette, vil den eksisterende slektsfilen bli erstattet med den filen som du har valgt å laste opp. Den nye filen vil deretter bli importert inn i PhpGedView.<br />Velger du å avbryte, vil den eksisterende slektsfilen forbli uforandret.";
$pgv_lang["view_changelog"]			= "Vis filen changelog.txt";
$pgv_lang["view_logs"]				= "Vis logg-fil ";
$pgv_lang["view_readme"]			= "Vis filen readme.txt";
$pgv_lang["visibleonline"]			= "Vis andre at du er pålogget";
$pgv_lang["visitor"]				= "Besøkende";
$pgv_lang["warn_users"]				= "Brukere med advarsler";
$pgv_lang["weekly"]						= "Ukentlig";
$pgv_lang["welcome_new"]			= "Velkommen til din nye nettsted med PhpGedView.";
$pgv_lang["yearly"]						= "Årlig";
$pgv_lang["admin_OK_subject"]					= "Godkjenning av konto hos #SERVER_NAME#";
$pgv_lang["admin_OK_message"]					= "Administratoren ved PhpGedView-nettstedet  #SERVER_NAME# har godkjent din søknad om en konto.  Du kan nå logge inn ved å gå til følgende lenke:\r\n\r\n#SERVER_NAME#\r\n";

$pgv_lang["batch_update"]="Utfør batch-oppdateringer/endringer i din GEDCOM";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     = "Gedcomsjekk";          // Module title
$pgv_lang["gedcheck_text"]= "Denne modulen kontrollerer formatet på en GEDCOM-fil mot <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM spesifikasjon</a>.  Den sjekker også en rekke vanlige feil i dine data.  Merk at det er mange versjoner, utvidelser og variasjoner av spesifikasjonen så du skal ikke være bekymret for andre feil enn de som er flagget som \"Kritiske\".  Forklaring for alle linje-for-linje-feil finnes i spesifikasjonen, så vennligst sjekk der før du ber om hjelp.";
$pgv_lang["level"]        = "Nivå";                   // Levels of checking
$pgv_lang["critical"]     = "Kritisk";
$pgv_lang["error"]        = "Feil";
$pgv_lang["warning"]      = "Varsel";
$pgv_lang["info"]         = "Info";
$pgv_lang["open_link"]    = "Åpne lenke i";           // Where to open links
$pgv_lang["same_win"]     = "Samme fane/vindu";
$pgv_lang["new_win"]      = "Ny fane/vindu";
$pgv_lang["context_lines"]= "Rader med GEDCOM-kontekst"; // Number of lines either side of error
$pgv_lang["all_rec"]      = "Alle poster";             // What to show
$pgv_lang["err_rec"]      = "Poster med feil";
$pgv_lang["missing"]      = "mangler";                 // General error messages
$pgv_lang["multiple"]     = "fler";
$pgv_lang["invalid"]      = "ugyldig";
$pgv_lang["too_many"]     = "for mange";
$pgv_lang["too_few"]      = "for få";
$pgv_lang["no_link"]      = "linker ikke tilbake";
$pgv_lang["data"]         = "data";                    // Specific errors (used with general errors)
$pgv_lang["see"]          = "se";
$pgv_lang["noref"]        = "Ingenting refererer til denne posten";
$pgv_lang["tag"]          = "tag";
$pgv_lang["spacing"]      = "mellomrom";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Avanserte navnefakta";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Avanserte stednavnfakta";
$pgv_lang["SURNAME_TRADITION"]		= "Etternavnstradisjon"; // Default surname inheritance
$pgv_lang["tradition_spanish"]		= "Spansk";
$pgv_lang["tradition_portuguese"]	= "Portugisisk";
$pgv_lang["tradition_icelandic"]	= "Islandsk";
$pgv_lang["tradition_paternal"]		= "Patronymikon";
$pgv_lang["tradition_polish"]		= "Polsk";
$pgv_lang["tradition_none"]			= "Ingen";

?>
