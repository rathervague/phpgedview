<?php
/**
 * English texts
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
 *
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: admin.sv.php 4999 2009-02-06 03:01:07Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["user"]					= "Inloggade användare";
$pgv_lang["thumbnail_deleted"]		= "Miniatyrbild raderades.";
$pgv_lang["thumbnail_not_deleted"]	= "Miniatyrbild kunde inte raderas.";
$pgv_lang["step2"]				= "Steg 2 av 4:";
$pgv_lang["refresh"]				= "Ladda om";
$pgv_lang["move_file_success"]		= "Media- och miniatyrfiler flyttades korrekt.";
$pgv_lang["media_folder_corrupt"]	= "Mediamappen är skadad.";
$pgv_lang["media_file_not_deleted"]	= "Mediafil kunde inte raderas.";
$pgv_lang["gedcom_deleted"]		= "Radering av GEDCOM [#GED#] lyckades.";
$pgv_lang["gedadmin"]				= "GEDCOM-administratör";
$pgv_lang["full_name"]			= "Fullständigt namn";
$pgv_lang["error_header"] 		= "GEDCOM-filen, <b>[#GEDCOM#]</b>, finns inte på den angivna platsen.";
$pgv_lang["confirm_delete_file"]	= "Är du säker på at du vill radera denna fil?";
$pgv_lang["confirm_folder_delete"] = "Är du säker på att du vill radera denna mapp?";
$pgv_lang["confirm_remove_links"]	= "Är du säker på att du vill ta bort alla länkar till detta objekt?";
$pgv_lang["PRIV_PUBLIC"]			= "Visa för alla";
$pgv_lang["PRIV_USER"]				= "Visa endast för inloggade användare";
$pgv_lang["PRIV_NONE"]				= "Visa endast för administratörer";
$pgv_lang["PRIV_HIDE"]				= "Dölj även för administratörer";
$pgv_lang["manage_gedcoms"]		= "Administrera GEDCOM-filer och integritetsinställningar";
$pgv_lang["keep_media"]				= "Behåll medialänkar";
$pgv_lang["files_in_backup"]		= "Filer inkluderade i denna backup<br />";
$pgv_lang["created_remotelinks"]	= "Lyckades skapa <i>Fjärrlänk</i> tabellen.";
$pgv_lang["created_remotelinks_fail"] 	= "Kunde inte skapa <i>Fjärrlänk</i> tabellen.";
$pgv_lang["created_indis"]		= "Skapande av <i>Persontabell</i> lyckades.";
$pgv_lang["created_indis_fail"]	= "Kunde inte skapa <i>Persontabellen</i>.";
$pgv_lang["created_fams"]		= "Skapande av <i>Familjetabell</i> lyckades.";
$pgv_lang["created_fams_fail"]	= "Kunde inte skapa <i>Familjetabellen<i>.";
$pgv_lang["created_sources"]	= "Skapande av <i>Källtabell</i> lyckades.";
$pgv_lang["created_sources_fail"]	= "Kunde inte skapa <i>Källtabellen</i>.";
$pgv_lang["created_other"]		= "Skapande av <i>Diversetabell</i> lyckades.";
$pgv_lang["created_other_fail"]	= "Kunde inte skapa <i>diversetabellen</i>.";
$pgv_lang["created_places"]		= "Skapande av <i>Ortstabell</i> lyckades.";
$pgv_lang["created_places_fail"]= "Kunde inte skapa <i>Ortstabellen</i>.";
$pgv_lang["created_placelinks"] 	= "<i>Ortlänkstabellen</i> skapades utan problem.";
$pgv_lang["created_placelinks_fail"]	= "Kan inte skapa <i>ortlänkstabellen</i>.";
$pgv_lang["created_media_fail"]	= "Kan inte skapa <i>Mediatabell</i>.";
$pgv_lang["created_media_mapping_fail"]	= "Kan inte skapa <i>Mediamappningstabellen.</i>";
$pgv_lang["no_thumb_dir"]		= "miniatyrbildsmappen existerar inte och det gick inte att skapa en.";
$pgv_lang["folder_created"]		= "Skapad mapp";
$pgv_lang["folder_no_create"]		= "Kan inte skapa mapp";
$pgv_lang["security_no_create"]	= "Säkerhetsvarning: Filen <b><i>index.php</i></b> finns inte i ";
$pgv_lang["security_not_exist"]	= "Säkerhetsvarning, kan inte skapa <b><i>index.php</i></b> i ";
$pgv_lang["label_add_search_server"]	= "Lägg till IP-adress";
$pgv_lang["label_add_server"]       = "Lägga till";
$pgv_lang["label_ban_server"] 		= "Skicka";
$pgv_lang["label_delete"]           = "Radera";
$pgv_lang["progress_bars_info"]			= "Förloppsindikatorn nedan berättar hur långt importen kommit. Om tidsgränsen nås stoppas importen och du kommer att behöva trycka på en fortsätt-knapp. Om du inte ser en fortsätt-knapp. Gör om importen med en kortare tidsgräns.";
$pgv_lang["upload_replacement"]		="Ladda upp ersättningsfil";
$pgv_lang["about_user"]					= "Du måste först skapa din administratörsanvändare. Denna användare kommer att ha rättigheter att uppdatera konfigurationsfiler, att se privata data och skapa andra användare.";
$pgv_lang["access"]						= "Access";
$pgv_lang["add_gedcom"]			= "Lägg till GEDCOM-fil";
$pgv_lang["add_new_gedcom"]		= "Skapa ny GEDCOM-fil";
$pgv_lang["add_new_language"]			= "Lägg till filer och inställningar för ett nytt språk";
$pgv_lang["add_user"]					= "Lägg till en ny användare";
$pgv_lang["admin_gedcom"]		= "Administrera GEDCOM";
$pgv_lang["admin_gedcoms"]				= "Klicka här för att administrera GEDCOM-filer";
$pgv_lang["admin_geds"]				= "Data och GEDCOM-administration";
$pgv_lang["admin_info"]				= "Information";
$pgv_lang["admin_site"]				= "Sajtadministration";
$pgv_lang["admin_user_warnings"]		= "Ett eller flera användarkonton har varningar";
$pgv_lang["admin_verification_waiting"] = "Användarkonton som väntar på att verifieras av administratören";
$pgv_lang["administration"]		= "Administration";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]		= "Tillåt byte av GEDCOM";
$pgv_lang["ALLOW_REMEMBER_ME"]			= "Visa <b>Kom ihåg mig</b> val på inloggningssidan";
$pgv_lang["ALLOW_USER_THEMES"]			= "Tillåt användare att välja sitt eget tema";
$pgv_lang["ansi_encoding_detected"]	= "ANSIkodning upptäckt i filen. PhpGedView fungerar bäst med teckenkodningen UTF-8.";
$pgv_lang["ansi_to_utf8"]		= "Konvertera denna ANSI(iso-8859-1) kodade GEDCOM till UTF-8?";
$pgv_lang["apply_privacy"]			= "Tillämpa integritetsinställningar?";
$pgv_lang["back_useradmin"]				= "Tillbaka till användaradministration";
$pgv_lang["bytes_read"]			= "Bytes lästa:";
$pgv_lang["calc_marr_names"]	= "Beräknar namn för vigda";
$pgv_lang["can_admin"]					= "Användare kan administrera";
$pgv_lang["can_edit"]					= "Accessnivå";
$pgv_lang["change_id"]				= "Ändra person ID till:";
$pgv_lang["choose_priv"]			= "Välj integritetsnivå:";
$pgv_lang["cleanup_places"]		= "Städa orter";
$pgv_lang["cleanup_users"]				= "Rensa bland användare";
$pgv_lang["click_here_to_continue"]		= "Klicka här för att fortsätta.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] = "Klicka här för att gå till antavlan.";
$pgv_lang["comment"]			= "Administratörens kommentarer om användaren";
$pgv_lang["comment_exp"]			= "Adminstratörvarning utfärdad den";
$pgv_lang["config_help"]						= "Konfigurationshjälp";
$pgv_lang["config_still_writable"]				= "Din <i>config.php</i> fil är fortfarande skrivbar. För att öka säkerheten bör du sätta rättigheterna för denna fil till endast läsbar när du har konfigurerat färdigt sajten.";
$pgv_lang["configuration"]		= "Konfiguration";
$pgv_lang["configure"]							= "Konfigurera PhpGedView";
$pgv_lang["configure_head"]						= "PhpGedView-konfiguration";
$pgv_lang["confirm_gedcom_delete"]				= "Är du säker på att du vill radera denna GEDCOM-fil";
$pgv_lang["confirm_user_delete"]= "Är det säkert att du vill ta bort denna användare";
$pgv_lang["create_user"]		= "Skapa ny användare";
$pgv_lang["current_users"]						= "Användarlista";
$pgv_lang["daily"]								= "Daglig";
$pgv_lang["dataset_exists"]		= "En GEDCOM-fil med detta namn är redan importerad i databasen.";
$pgv_lang["unsync_warning"] 					= "GEDCOM-filen är <em>inte</em> synkroniserad med databasen. Den innehåller kanske inte den senaste datan. För att åter-importera från databasen istället för från filen så ska du först ladda ner och sedan ladda upp igen.  ";
$pgv_lang["date_registered"]					= "Registreringsdatum";
$pgv_lang["day_before_month"]		= "Dag före månad (DD MM ÅÅÅÅ)";
$pgv_lang["DEFAULT_GEDCOM"]						= "Standard-GEDCOM";
$pgv_lang["default_user"]						= "Skapa normal-administratörsanvändaren.";
$pgv_lang["del_gedrights"]						= "GEDCOM är inte längre aktiv, tabort användarreferenser.";
$pgv_lang["del_proceed"]						= "Fortsätt";
$pgv_lang["del_unvera"]							= "Användare är inte verifierade av administratören.";
$pgv_lang["del_unveru"]							= "Användare har inte verifierat sig inom 7 dagar.";
$pgv_lang["do_not_change"]			= "Ändra inte";
$pgv_lang["download_gedcom"]	= "Ladda ner GEDCOM-fil";
$pgv_lang["download_here"]						= "Klicka här för att ladda ner filer.";
$pgv_lang["download_note"]		= "NOTERING: Stora GEDCOM kan ta lång tid att processa innan nerladdning. Om PHP-tidsinställningen är för kort är det inte säkert att din nerladdning blir komplett.<br /><br />Du kan kontrollera din nerladdad GEDCOM-fil efter <b>0 TRLR</b> raden i slutet av filen för att försäkra dig om att filen är komplett. GEDCOM-filen är text, du kan använda en texteditor, men var försiktig så att du <u>inte</u> sparar GEDCOM-filen efter du kontrollerat den.<br /><br />Vanligtvis kan det ta lika lång tid att ladda ner som det tog att importera din GEDCOM.";
$pgv_lang["editaccount"]		= "Tillåt användaren att redigera sin kontoinformation";
$pgv_lang["empty_dataset"]		= "Vill du radera den gamla datan och ersätta den med den nya datan?";
$pgv_lang["empty_lines_detected"]	= "Tomma rader upptäcktes i din GEDCOM-fil. Vid städning kommer dessa tomma rader att tas bort.";
$pgv_lang["enable_disable_lang"]				= "Konfigurera stödda språk";
$pgv_lang["error_ban_server"]       = "Felaktig IPadress.";
$pgv_lang["error_delete_person"]    = "Du måste välja person vars länk ska raderas.";
$pgv_lang["error_header_write"]	= "GEDCOM-filen, <b>[#GEDCOM#]</b>, är inte skrivbar. Kontrollera fil- och access-rättigheter.";
$pgv_lang["error_siteauth_failed"]	= "Kunde inte logga in på sajten";
$pgv_lang["error_url_blank"]		= "Lämna inte sajt titel eller URL tom";
$pgv_lang["error_view_info"]        = "Du måste välja personen som du vill visa information om.";
$pgv_lang["example_date"]			= "Exempel på ogiltigt datum från din GEDCOM-fil:";
$pgv_lang["example_place"]			= "Exempel på en felaktig ort från din GEDCOM:";
$pgv_lang["fbsql"]								= "FrontBase";
$pgv_lang["found_record"]		= "Hittade poster";
$pgv_lang["ged_download"]						= "Ladda ner";
$pgv_lang["ged_import"]			= "Importera";
$pgv_lang["ged_check"] 							= "Kontrollera";
$pgv_lang["gedcom_adm_head"]					= "GEDCOM-administration";
$pgv_lang["gedcom_config_write_error"]			= "FEL!!!<br />Kunde inte skriva till filen <i>#GLOBALS[whichFile]#</i>.Kontrollera att filen har skrivrättighter.";
$pgv_lang["gedcom_downloadable"] 	= "Denna GEDCOM-fil är nerladdningsbar över internet!<br />Var vänlig läs Säkerhetssektionen i <a href=\"readme.txt\">readme.txt</a> för att rätta till problemet";
$pgv_lang["gedcom_file"]		= "GEDCOM-fil:";
$pgv_lang["gedcom_not_imported"]				= "Denna GEDOM-fil har inte blivit importerad ännu.";
$pgv_lang["ibase"]								= "Interbase";
$pgv_lang["ifx"]								= "Informix";
$pgv_lang["img_admin_settings"]	= "Ändra bildmanipuleringskonfigurationen";
$pgv_lang["autoContinue"]						= "Tryck på knappen <<fortsätt>> automatiskt";
$pgv_lang["import_complete"]	= "Importen är färdig";
$pgv_lang["import_marr_names"]	= "Importera namn från vigsel";
$pgv_lang["import_options"]		= "Importeringsval";
$pgv_lang["import_progress"]	= "Import framsteg...";
$pgv_lang["import_statistics"]	= "Importeringsstatistik";
$pgv_lang["import_time_exceeded"]	= "Exekveringstidens gräns nåddes. Klicka på fortsätt nedan för att fortsätta importera GEDCOM-filen.";
$pgv_lang["inc_languages"]				= "Språk";
$pgv_lang["INDEX_DIRECTORY"]					= "Indexkatalog";
$pgv_lang["invalid_dates"]			= "Upptäckte ogiltigt datumformat, vid upprensning kommer formatet att ändras till DD MMM ÅÅÅÅ(t.ex. 1 JAN 2004).";
$pgv_lang["BOM_detected"] 						= "Ett Byte Order Mark(BOM) hittades i början av filen. Denna speciella kod kommer att tas bort vid rensning.";
$pgv_lang["invalid_header"]		= "Upptäckt rader före GEDCOM-headern (0 HEAD). Dessa rader kommer att raderas vid städning.";
$pgv_lang["label_added_servers"]	= "Lagt till server";
$pgv_lang["label_banned_servers"]   = "Förbjud sajter via IP";
$pgv_lang["label_families"]         = "Familjer";
$pgv_lang["label_gedcom_id2"]       = "DatabasID:";
$pgv_lang["label_individuals"]      = "Personer";
$pgv_lang["label_manual_search_engines"]   = "Markera manuellt Sökmotorspindlar via IP-adress";
$pgv_lang["label_new_server"]       = "Lägg till ny sajt";
$pgv_lang["label_password_id"]		= "Lösenord";
$pgv_lang["label_remove_ip"]		= "Förbjud IPAdress(t.ex. 198.128.*.*): ";
$pgv_lang["label_remove_search"]	= "Markera IP-Adress som en sökmotorspindel: ";
$pgv_lang["label_server_info"]      = "Alla personer som är länkade från andra sajter:";
$pgv_lang["label_server_url"]       = "Sajt URL/IP";
$pgv_lang["label_username_id"]		= "Användarnamn";
$pgv_lang["label_view_local"]       = "Visa lokal information om person";
$pgv_lang["label_view_remote"]      = "Visa inforamtion från annan sajt om person";
$pgv_lang["LANG_SELECTION"] 					= "Stödda språk";
$pgv_lang["LANGUAGE_DEFAULT"]					= "Du har inte konfigurerat språken som din sajt ska stödja.<br />PhpGedView kommer att använda sina standardinställningar.";
$pgv_lang["last_login"]							= "Senast inloggad";
$pgv_lang["lasttab"]							= "Senast besökta flik för personer";
$pgv_lang["leave_blank"]						= "Lämna lösenordsfältet tomt om du vill behålla det nuvarande lösenordet.";
$pgv_lang["link_manage_servers"]    = "Hantera sajter";
$pgv_lang["logfile_content"]	= "Innehåll i loggfil";
$pgv_lang["macfile_detected"]	= "Macintosh fil upptäckt. Filen kommer att konverteras till en DOS-fil vid städning.";
$pgv_lang["mailto"]								= "Epost till länk";
$pgv_lang["merge_records"]      = "Slå ihop poster";
$pgv_lang["message_to_all"]						= "Skicka meddelande till alla användare";
$pgv_lang["messaging"]							= "PhpGedView intern meddelandehantering";
$pgv_lang["messaging2"]							= "Intern meddelandehantering med epost";
$pgv_lang["messaging3"]							= "PhpGedView skickar epost utan att spara dem";
$pgv_lang["month_before_day"]		= "Månad före dag (MM DD ÅÅÅÅ)";
$pgv_lang["monthly"]							= "Månatlig";
$pgv_lang["msql"]								= "Mini SQL";
$pgv_lang["mssql"]								= "Microsoft SQL server";
$pgv_lang["mysql"]								= "MySQL";
$pgv_lang["mysqli"]								= "MySQL 4.1+ och PHP 5";
$pgv_lang["never"]								= "Aldrig";
$pgv_lang["no_logs"]							= "Stäng av loggning";
$pgv_lang["no_messaging"]						= "Ingen kontaktmetod";
$pgv_lang["oci8"]								= "Oracle 7+";
$pgv_lang["page_views"]							= "&nbsp;&nbsp;Sidvisningar under&nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "Genomför GEDCOM-validering...";
$pgv_lang["pgsql"]								= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] 			= "FEL!!! Kan inte skriva till PhpGedViews konfigurationfil. Kontrollera fil och katalogrättigheter och försök igen.";
$pgv_lang["PGV_MEMORY_LIMIT"]					= "Minnesgräns";
$pgv_lang["pgv_registry"]		= "Visa andra PhpGedView-sajter";
$pgv_lang["PGV_SESSION_SAVE_PATH"]				= "Sessions sökväg för att spara sessionsinformations";
$pgv_lang["PGV_SESSION_TIME"]					= "Sessionstidsgräns";
$pgv_lang["PGV_SIMPLE_MAIL"] 					= "Använd enkel eposthuvud i externa epost";
$pgv_lang["PGV_STORE_MESSAGES"]					= "Tillåt meddelande att sparas online";
$pgv_lang["phpinfo"]				= "PHP Info";
$pgv_lang["place_cleanup_detected"]	= "Felaktig ortskodning upptäckt. Dessa fel bör rättas till. Följande prov visar den felaktiga orten som upptäcktes:";
$pgv_lang["please_be_patient"]	= "Var god vänta...";
$pgv_lang["privileges"]							= "Rättigheter";
$pgv_lang["reading_file"]		= "Läser GEDCOM-fil";
$pgv_lang["readme_documentation"]	= "README-dokumentation";
$pgv_lang["remove_ip"] 			= "Tabort IP-adress";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"] 	= "Administratören behöver godkänna nya användarregistreringar";
$pgv_lang["review_readme"]						= "Du bör läsa igenom <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> filen innan du fortsätter med konfigureringen av phpGedView.<br /><br />";
$pgv_lang["rootid"]				= "Startperson för antavla";
$pgv_lang["seconds"]							= "&nbsp;&nbsp;sekunder";
$pgv_lang["select_an_option"]	= "Välj alternativ nedan:";
$pgv_lang["SERVER_URL"]							= "PhpGedView URL";
$pgv_lang["show_phpinfo"]						= "Visa PHP informationssida";
$pgv_lang["siteadmin"]				= "Sajt-administratör";
$pgv_lang["skip_cleanup"]		= "Hoppa över städning";
$pgv_lang["sqlite"]								= "SQLite";
$pgv_lang["sybase"]								= "Sybase";
$pgv_lang["sync_gedcom"]						= "Synkronisera användarinställningar med GEDCOM-data";
$pgv_lang["system_time"]						= "Nuvarande servertid:";
$pgv_lang["user_time"]							= "Nuvarande användartid:";
$pgv_lang["TBLPREFIX"]							= "Databastabellprefix";
$pgv_lang["themecustomization"]					= "Temaanpassning";
$pgv_lang["time_limit"]				= "Tidsgräns:";
$pgv_lang["title_manage_servers"]   = "Hantera sajter";
$pgv_lang["title_view_conns"]       = "Visa kopplingar";
$pgv_lang["translator_tools"]					= "Översätningsverktyg";
$pgv_lang["update_myaccount"]	= "Uppdatera mitt konto";
$pgv_lang["update_user"]		= "Uppdatera användarkonto";
$pgv_lang["upload_gedcom"]		= "Ladda upp GEDCOM-fil";
$pgv_lang["USE_REGISTRATION_MODULE"]			= "Tillåt besökare att registera ett användarkonto";
$pgv_lang["user_auto_accept"]		= "Acceptera automatiskt ändringar gjorda av denna användare";
$pgv_lang["user_contact_method"]= "Föredragen kontaktmetod";
$pgv_lang["user_create_error"]	= "Går inte att skapa användare.  Var snäll gå tillbaka och försök igen.";
$pgv_lang["user_created"]		= "Ny användare skapad.";
$pgv_lang["user_default_tab"]	= "Den flik som visas som standard på ansedelsidan";
$pgv_lang["user_path_length"]					= "Maximal relationssekretess sökvägslängd";
$pgv_lang["user_relationship_priv"]				= "Begränsa access till besläktade personer";
$pgv_lang["users_admin"]						= "Sajtadministratörer";
$pgv_lang["users_gedadmin"]						= "GEDCOM-Administratörer";
$pgv_lang["users_total"]						= "Totalt antal användare";
$pgv_lang["users_unver"]						= "Ej verifierad av användare";
$pgv_lang["users_unver_admin"]					= "Ej verifierad av administratör";
$pgv_lang["usr_deleted"]						= "Radera användare:";
$pgv_lang["usr_idle"]							= "Antal månader sedan senaste inloggning innan ett användarkonto anses inaktivt: ";
$pgv_lang["usr_idle_toolong"]					= "Användarkonto har varit inaktivt för länge: ";
$pgv_lang["usr_no_cleanup"]						= "Ingenting hittades som kräver uppstädning";
$pgv_lang["usr_unset_gedcomid"]					= "Tabort GEDCOM ID för ";
$pgv_lang["usr_unset_rights"]					= "Tabort GEDCOM-rättigheter för ";
$pgv_lang["usr_unset_rootid"]					= "Tabort Root-ID för ";
$pgv_lang["valid_gedcom"]			= "Godkänd GEDCOM-fil upptäckt. Ingen rensning behövs.";
$pgv_lang["validate_gedcom"]	= "Validera GEDCOM-filen";
$pgv_lang["verified"]			= "Användaren verifierade sig själv";
$pgv_lang["verified_by_admin"]	= "Användare godkänd av admin";
$pgv_lang["verify_gedcom"]		= "Verifiera GEDCOM";
$pgv_lang["verify_upload_instructions"]	= "Om du väljer att fortsätta kommer den gamla GEDCOM-filen att ersättas med filen du har laddat upp och importprocessen kommer att börja igen. Om du väljer att avbryta kommer den gamla GEDCOM-filen att förbli oförändrad.";
$pgv_lang["view_changelog"]		= "Visa changelog.txt-filen";
$pgv_lang["view_logs"]			= "Visa loggfiler";
$pgv_lang["view_readme"]			= "Visa readme.txt-fil";
$pgv_lang["visibleonline"]		= "Synlig för andra användare när du är online";
$pgv_lang["visitor"]			= "Besökare";
$pgv_lang["warn_users"]			= "Användare med varning";
$pgv_lang["weekly"]				= "Veckovis";
$pgv_lang["welcome_new"]		= "Välkommen till din nya PhpGedView sajt.";
$pgv_lang["yearly"]				= "Årlig";
$pgv_lang["admin_OK_subject"]					= "Godkännande av konto på #SERVER_NAME#";
$pgv_lang["admin_OK_message"]					= "Administratören på PhpGedViewsajten #SERVER_NAME# har godkänt din ansökan om ett konto. Du kan nu logga in genom att följande link:\r\n\r\n#SERVER_NAME#\r\n";
$pgv_lang["gedcheck"]     = "GEDCOM kontroll";

$pgv_lang["gedcheck_text"]= 	"Denna modul kontrollera formatet i GEDCOM-filen mot <a \"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM Specifikationen</a>. Den kollar också efter ett antal vanliga fel i din data. Observera att det finns flera versioner, utökningar och variationer på specifikationen så du bör inte oroa dig för andra fel en de som är flaggade kritiska. Förklaringen till rad-för-rad felen finns i specifikationen, så kolla den först innan du frågar efter hjälp.";
$pgv_lang["level"]        = "Nivå";
$pgv_lang["tag"]          = "tag";
$pgv_lang["spacing"]      = "mellanrum";
$pgv_lang["ADVANCED_NAME_FACTS"] = "Avancerade namnfakta";
$pgv_lang["ADVANCED_PLAC_FACTS"] = "Avancerade ortsnamnfakta";
$pgv_lang["SURNAME_TRADITION"]		= "Efternamnstradition";
$pgv_lang["tradition_spanish"]		= "Spanska";
$pgv_lang["tradition_portuguese"]	= "Portugisiska";
$pgv_lang["tradition_icelandic"]	= "Isländska";
$pgv_lang["tradition_paternal"]		= "Faders";
$pgv_lang["tradition_none"]			= "Inga";
$pgv_lang["critical"]     = "Kritiskt";
$pgv_lang["error"]        = "Fel";
$pgv_lang["warning"]      = "Varning";
$pgv_lang["info"]         = "Info";
$pgv_lang["open_link"]    = "Öppna länkar med";
$pgv_lang["same_win"]     = "Samma flik/fönster";
$pgv_lang["new_win"]      = "Ny flik/fönster";
$pgv_lang["context_lines"]= "Rader med GEDCOM-innehåll";
$pgv_lang["all_rec"]      = "Alla poster";
$pgv_lang["err_rec"]      = "Poster med fel";
$pgv_lang["missing"]      = "fattas";
$pgv_lang["multiple"]     = "multipla";
$pgv_lang["invalid"]      = "felaktig";
$pgv_lang["too_many"]     = "för många";
$pgv_lang["too_few"]      = "för få";
$pgv_lang["no_link"]      = "länkar inte tillbaka";
$pgv_lang["data"]         = "data";
$pgv_lang["see"]          = "se";
$pgv_lang["noref"]        = "Det finns inga refernser till detta objekt";

$pgv_lang["ip_address"]				= "IPadress";
$pgv_lang["date_time"]				= "Datum och tid";
$pgv_lang["log_message"]			= "Logmeddelande";
$pgv_lang["searchtype"]				= "Söktyp";
$pgv_lang["query"]					= "Fråga";
$pgv_lang["sanity_err0"]			= "Fel:";
$pgv_lang["sanity_err1"]			= "Du behöver PHP version 4.3 eller nyare.";
$pgv_lang["sanity_err2"]			= "Filen eller katalogen <i>#GLOBALS[whichFile]#</i> finns inte. Kontrollera att filen eller katalogen finns, inte var felstavad och läsrättigheter är satta korrekt.";
$pgv_lang["sanity_err3"]			= "Filen <i>#GLOBALS[whichFile]#</i> laddades inte upp korrekt. Försök ladda upp den igen.";
$pgv_lang["sanity_err4"]			= "Filen <i>config.php</i> är skadad.";
$pgv_lang["sanity_err5"]			= "Filen <i>config.php</i> är inte skrivbar.";
$pgv_lang["sanity_err6"]			= "Katalogen <i>#GLOBALS[INDEX_DIRECTORY]#</i> är inte skrivbar.";
$pgv_lang["sanity_warn0"]			= "Varningar:";
$pgv_lang["sanity_warn1"]			= "Katalogen <i>#GLOBALS[MEDIA_DIRECTORY]#</i> är inte skrivbar. Du kommer inte kunna ladda upp mediafiler eller skapa miniatyrbilder.";
$pgv_lang["sanity_warn2"]			= "Katalogen <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> är inte skrivbar. Du kommer inte kunna ladda upp eller skapa miniatyrbilder i PhpGedView.";
$pgv_lang["sanity_warn3"]			= "GD bildbiblioteket finns inte. PhpGedView kommer att fungera men vissa funktioner som miniatyrbildsskapning och cirkeltavlan kommer inte fungera. Läs <a href=\"http://www.php.net/manual/en/ref.image.php\">http://www.php.net/manual/en/ref.image.php</a> för mer information.";
$pgv_lang["sanity_warn4"]			= "XML parsningsbiblioteket finns inte. PhpGedView kommer fortfarande att fungera men vissa funktioner som rapportgenerering och web service kommer inte fungera. Läs <a href=\"http://www.php.net/manual/en/ref.xml.php\">http://www.php.net/manual/en/ref.xml.php</a> för mer information.";
$pgv_lang["sanity_warn5"]			= "DOM XML biblioteket finns inte. PhpGedView kommer fortfarande att fungera men vissa funktioner som GRAMPS export urklippskorgen, nerladdning och web service kommer inte fungera. Läs <a href=\"http://www.php.net/manual/en/ref.dom.php\">http://www.php.net/manual/en/ref.dom.php</a> för mer information.";
$pgv_lang["sanity_warn6"]			= "Kalender biblioteket finns inte. PhpGedView kommer fortfarande att fungera men vissa funktioner som Konverteringar till andra kalendrar som hebreisk och fransk inte fungera. Läs <a href=\"http://www.php.net/manual/en/ref.calendar.php\">http://www.php.net/manual/en/ref.calendar.php</a> för mer information.";
$pgv_lang["clear_cache_succes"]		= "Cache-filerna har tagits bort.";
$pgv_lang["clear_cache"]			= "Töm cache-filerna";

$pgv_lang["associated_files"]		= "Associerade filer: ";
$pgv_lang["remove_all_files"]		= "Ta bort alla onödiga filer";
$pgv_lang["warn_file_delete"]		= "Denna fil innehåller viktig information om språkinställningar eller information om väntande ändringar. Är du säker på att du vill ta bort filen?";
$pgv_lang["deleted_files"]          = "Borttagna filer:";
$pgv_lang["index_dir_cleanup_inst"]	= "För att radera filer eller katalog från indexmappen dra den till papperskorgen eller välj dess kryssruta. Klicka på radera-knappenför att permanent tabort de markerade filerna.<br /><br />Filer markerade med <img src=\"./images/RESN_confidential.gif\" /> krävs för att programmet ska fungera och kan inte tas bort.<br />filer markerade med <img src=\"./images/RESN_locked.gif\" /> innehåller viktiga inställningar eller ändrade data och bör endast raderas om du är säker på vad du gör.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Rensa indexmappen";
?>
