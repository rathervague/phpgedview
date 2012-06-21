<?php
/**
 * Dutch texts
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
 *
 * @package PhpGedView
 * @subpackage Languages
 * @authors Erik Bent, Jans B. Luder, Boudewijn Sjouke, Eduard Wustenveld
 * @version $Id: admin.nl.php 6979 2010-09-09 02:04:28Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["module_admin"]			= "Module Beheer";
$pgv_lang["mod_admin_installed"]	= "Geïnstalleerde Modules";
$pgv_lang["mod_admin_tabs"]			= "Beheer Tabbladen";
$pgv_lang["mod_admin_menus"]		= "Beheer Menus";
$pgv_lang["mod_admin_intro"]		= "Onderstaand is de lijst met alle geïnstalleerde modules in deze versie van PhpGedView.  Modules worden geïnstalleerd door ze in de <i>modules</i> map te plaatsen.  Hier kunt u het toegansnivo - per GEDCOM - voor elke module instellen.  Als een module tabbladen bevat voor individuele pagina's of menus voor de menubalk, dan kunt u hier ook het toegangsnivo, voor elk item hiervan, instellen.";
$pgv_lang["mod_admin_active"]		= "Actief";
$pgv_lang["mod_admin_name"]			= "Module Naam";
$pgv_lang["mod_admin_description"]	= "Omschrijving";
$pgv_lang["mod_admin_version"]		= "Versie / PGV";
$pgv_lang["mod_admin_hastab"]		= "Tabblad?";
$pgv_lang["mod_admin_hasmenu"]		= "Menu?";
$pgv_lang["mod_admin_access_level"]	= "Toegangs nivo";
$pgv_lang["mod_admin_order"]		= "Volgorde";
$pgv_lang["mod_admin_config"]		= "Module instellingen";
$pgv_lang["mod_admin_settings"]		= "Module Configuratie Instellingen";
$pgv_lang["ret_module_admin"]		= "Terug naar de Module Beheer pagina";
$pgv_lang["ret_admin"]					= "Terug naar de Beheer pagina";

$pgv_lang["enter_comment"]			= "U kunt hier uw commentaar toevoegen.";
$pgv_lang["upload_a_gedcom"] 		= "Upload een GEDCOM bestand";
$pgv_lang["start_entering"] 		= "Start invoeren van data";
$pgv_lang["add_gedcom_from_path"] 	= "Voeg een GEDCOM toe, vanaf een bestands loakatie";
$pgv_lang["get_started_instructions"]	= "Kies een van deze opties om te starten met het gebruik van PhpGedView";

$pgv_lang["admin_users_exists"]		= "De volgende beherende gebruikers bestaan al:";
$pgv_lang["install_step_1"] 		= "Controleer Omgeving";
$pgv_lang["install_step_2"] 		= "Database Verbinding";
$pgv_lang["install_step_3"] 		= "Maak Tabellen";
$pgv_lang["install_step_4"] 		= "Site Configuratie";
$pgv_lang["install_step_5"] 		= "Talen";
$pgv_lang["install_step_6"] 		= "Instellingen Opslaan";
$pgv_lang["install_step_7"] 		= "Maak Beheerder/gebruiker";
$pgv_lang["install_wizard"] 		= "Installatie Hulp";
$pgv_lang["basic_site_config"] 		= "Basis Instellingen";
$pgv_lang["adv_site_config"] 		= "Uitgebreide Instellingen";
$pgv_lang["config_not_saved"] 		= "*Uw instellingen worden<br />pas opgeslagen bij stap 6";
$pgv_lang["download_config"] 		= "Download config.php";
$pgv_lang["site_unavailable"] 		= "Site is momenteel niet beschikbaar";
$pgv_lang["to_manage_users"] 		= "Om gebruikers te beheren, gebruik de <a href=\"useradmin.php\">Gebruikers beheer</a> pagina.";
$pgv_lang["db_tables_created"] 		= "Database Tabellen met succes gemaakt";
$pgv_lang["config_saved"] 			= "Instellingen met succes opgeslagen";
$pgv_lang["checking_errors"]		= "Controleer op fouten...";
$pgv_lang["checking_php_version"]	= "Controleer de vereiste PHP versie:";
$pgv_lang["failed"]					= "FOUT";
$pgv_lang["pgv_requires_version"]	= "PhpGedView vereist PHP versie #PGV_REQUIRED_PHP_VERSION# of hoger.";
$pgv_lang["using_php_version"]			= "U gebruikt PHP versie #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]	= "Controleer op minimale database ondersteuning:";
$pgv_lang["no_db_extensions"]		= "U heeft geen van de ondersteunde database extensies.";
$pgv_lang["db_ext_support"]			= "U heeft #DBEXT# ondersteuning";
$pgv_lang["checking_config.php"]	= "Controleer config.php:";
$pgv_lang["config.php_missing"]					= "config.php bestand is niet gevonden.";
$pgv_lang["config.php_missing_instr"]			= "Deze Installatie Hulp kan uw instellingen niet schrijven naar het config.php bestand.  U kunt een kopie maken vanhet  config.dist bestand en dan hernoemen als config.php.  Vervolgens, na afsluiting van deze Installatie Hulp, heeft u de optie om uw instellingen te downloaden en dan weer het resulterende config.php bestand te uploaden.";
$pgv_lang["config.php_not_writable"]			= "config.php is niet beschrijfbaar.";
$pgv_lang["config.php_not_writable_instr"]		= "Deze Installatie Hulp kan uw instellingen niet schrijven naar het config.php bestand.  U kunt de Schrijf Permissies voor dit bestand zetten, of na afsluiting van deze Installatie Hulp, heeft u de optie om uw instellingen te downloaden en dan weer het resulterende config.php bestand te uploaden.";
$pgv_lang["passed"]					= "Met succes afgerond";
$pgv_lang["config.php_writable"]	= "config.php is aanwezig en beschrijfbaar.";
$pgv_lang["checking_warnings"]		= "Controleer op waarschuwingen...";
$pgv_lang["checking_timelimit"]		= "Controleer op de mogelijkheid om de tijdlimiet te wijzigen:";
$pgv_lang["cannot_change_timelimit"]		= "Niet mogelijk om de tijdlimiet te wijzigen.";
$pgv_lang["cannot_change_timelimit_instr"]	= "Het is wellicht niet mogelijk om alle functies uit te voeren met een grote databases met veel personen.";
$pgv_lang["current_max_timelimit"]		= "Uw maximum tijdlimiet is";
$pgv_lang["check_memlimit"]			= "Controleer op de mogelijkheid om de geheugenlimiet te wijzigen:";
$pgv_lang["cannot_change_memlimit"]			= "Niet mogelijk om de geheugenlimiet te wijzigen.";
$pgv_lang["cannot_change_memlimit_instr"]	= "Het is wellicht niet mogelijk om alle functies uit te voeren met een grote databases met veel personen.";
$pgv_lang["current_max_memlimit"]		= "Uw huidige geheugenlimiet is";
$pgv_lang["check_upload"]			= "Controleer op de mogelijkheid om bestanden te uploaden:";
$pgv_lang["current_max_upload"]			= "Uw maximale upload bestandsgrootte is:";
$pgv_lang["check_gd"]				= "Controleer op GD afbeeldingen bibliotheek:";
$pgv_lang["cannot_use_gd"]			= "U heeft geen GD afbeeldingen bibliotheek.  U zult niet automatisch miniweergaves kunnen maken.";
$pgv_lang["check_sax"]				= "Controleer op SAX XML bibliotheek:";
$pgv_lang["cannot_use_sax"]			= "U heeft geen the SAX XML bibliotheek.  U zult geen rapporten, of sommige andere hulpfuncties, kunnen draaien.";
$pgv_lang["check_dom"]				= "Controleer op DOM XML bibliotheek:";
$pgv_lang["cannot_use_dom"]			= "U heeft geen DOM XML bibliotheek.  U zult geen XML kunnen exporteren.";
$pgv_lang["check_calendar"]			= "Controleer op Geavanceerde Kalender bibliotheek:";
$pgv_lang["cannot_use_calendar"]	= "U heeft geen ondersteuning voor Geavanceerde Kalender. U zult sommige Geavanceerde Kalender functies niet kunnen uitvoeren.";
$pgv_lang["warnings_passed"]		= "Alle waarschuwing controles uitgevoerd.";
$pgv_lang["warning_instr"]			= "Indien een, of meer, van de waarschuwing controles niet succesvol waren, kunt u waarschijnlijk PhpGedView toch wel draaien op deze server, maar sommige  functionaliteit kan zijn uitgeschakeld. Ook kan het zijn dat het programma niet optimaal functioneert of presteert.<br />U zou kontakt kunnen opnemen met de beheerder van uw server, of het mogelijk is om toch bepaalde functionaliteiten voor u in te schakelen.";

$pgv_lang["associated_files"]		= "Geassocieerde bestanden:";
$pgv_lang["remove_all_files"]		= "Verwijder alle niet-noodzakelijke bestanden";
$pgv_lang["warn_file_delete"]		= "Dit bestand bevat belangrijke informatie, zoals taal-instellingen of uitstaande te wijzigen gegevens. Weet u zeker dat u dit bestand wilt verwijderen?";
$pgv_lang["deleted_files"]         	= "Verwijderde bestanden:";
$pgv_lang["index_dir_cleanup_inst"]	= "Om een bestand, of map, te verwijderen uit de Index directory: sleep het naar de prullenbak of vink de checkbox aan.  Klik op de \"Verwijder\" knop om de aangegeven bestanden permanent te verwijderen.<br /><br />Bestanden, gemerkt met <img src=\"./images/RESN_confidential.gif\" alt=\"\" /> zijn vereist voor de goede werking van het programma en kunnen niet worden verwijderd.<br />Bestanden, gemerkt met <img src=\"./images/RESN_locked.gif\" alt=\"\" /> bevatten belangrijke instellingen of gegevens over uitstaande wijzigingen. Verwijder deze alleen als u zeker weet wat de gevolgen zijn.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Index directory opruimen";
$pgv_lang["clear_cache_succes"]		= "De cache bestanden zijn verwijderd.";
$pgv_lang["clear_cache"]			= "Wis cache bestanden";
$pgv_lang["sanity_err0"]			= "Fouten:";
$pgv_lang["sanity_err1"]			= "U moet PHP versie #PGV_REQUIRED_PHP_VERSION# of hoger hebben.";
$pgv_lang["sanity_err2"]			= "Het bestand of map <i>#GLOBALS[whichFile]#</i> bestaat niet. Controleer of het bestand of map bestaat, niet de verkeerde naam heeft en de Lees Permissies correct zijn gezet.";
$pgv_lang["sanity_err3"]			= "Het bestand <i>#GLOBALS[whichFile]#</i> is niet correct ge-uploaded. Probeer het bestand nogmaals te uploaden.";
$pgv_lang["sanity_err4"]			= "Het bestand <i>config.php</i> is beschadigd.";
$pgv_lang["sanity_err5"]			= "Het <i>config.php</i> bestand is niet beschrijfbaar.";
$pgv_lang["sanity_err6"]			= "De <i>#GLOBALS[INDEX_DIRECTORY]#</i> map is niet beschrijfbaar.";
$pgv_lang["sanity_warn0"]			= "Waarschuwingen:";
$pgv_lang["sanity_warn1"]			= "De <i>#GLOBALS[MEDIA_DIRECTORY]#</i> map is niet beschrijfbaar.  U kunt geen media bestanden uploaden of thumbnails genereren in PhpGedView.";
$pgv_lang["sanity_warn2"]			= "The <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> map is niet beschrijfbaar.  U kunt geen thumbnails uploaden of thumbnails genereren in PhpGedView.";
$pgv_lang["sanity_warn3"]			= "GD afbeeldingen bibliotheek bestaat niet. PhpGedView zal wel functioneren, maar sommige functies, zoals het genereren van thumbnails of de taart diagram, zullen niet werken zonder de GD afbeeldingen bibliotheek.  Kijk a.u.b. op <a href='http://www.php.net/manual/en/ref.image.php'>http://www.php.net/manual/en/ref.image.php</a> voor meer informatie.";
$pgv_lang["sanity_warn4"]			= "De XML Parser bibliotheek bestaat niet. PhpGedView zal wel functioneren, maar sommige functies, zoals rapporten genereren en web services, zullen niet werken zonder de XML Parser bibliotheek.  Kijk a.u.b. op <a href='http://www.php.net/manual/en/ref.xml.php'>http://www.php.net/manual/en/ref.xml.php</a> voor meer informatie.";
$pgv_lang["sanity_warn5"]			= "De DOM XML bibliotheek bestaat niet. PhpGedView zal wel functioneren, maar sommige functies, zoals Gramps Export functies in de knipselbak,, download, en web services, zullen niet werken. Kijk a.u.b. op <a href='http://www.php.net/manual/en/ref.domxml.php'>http://www.php.net/manual/en/ref.domxml.php</a> voor meer informatie.";
$pgv_lang["sanity_warn6"]			= "De Kalender bibliotheek bestaat niet. PhpGedView zal wel functioneren, maar sommige functies, zoals conversie maar andere kalenders, zoals Hebreeuws of Frans, zullen niet werken.  Dit is echter niet essentieel om PhpGedView te draaien. Kijk a.u.b. op <a href='http://www.php.net/manual/en/ref.calendar.php'>http://www.php.net/manual/en/ref.calendar.php</a> voor meer informatie.";
$pgv_lang["ip_address"]				= "IP adres";
$pgv_lang["date_time"]				= "Datum en tijd";
$pgv_lang["log_message"]			= "Log Bericht";
$pgv_lang["searchtype"]				= "Zoek soort";
$pgv_lang["query"]					= "Query";
$pgv_lang["user"]					= "Aangemelde gebruiker";
$pgv_lang["editors"]				= "Editors";
$pgv_lang["gedcom_admins"]			= "GEDCOM Beheerders";
$pgv_lang["site_admins"]			= "Site Beheerders";
$pgv_lang["nobody"]					= "Niemand";
$pgv_lang["thumbnail_deleted"]		= "Miniweergave verwijderd.";
$pgv_lang["thumbnail_not_deleted"]	= "Miniweergave kan niet worden verwijderd.";
$pgv_lang["step2"]					= "Stap 2 van 4:";
$pgv_lang["refresh"]				= "Ververs";
$pgv_lang["move_file_success"]		= "Media en miniweergave-bestand verplaatst.";
$pgv_lang["media_folder_corrupt"]	= "De media-map is beschadigd.";
$pgv_lang["media_file_not_deleted"]	= "Mediabestand kan niet worden verwijderd.";
$pgv_lang["gedcom_deleted"]				= "GEDCOM [#GED#] verwijderd.";
$pgv_lang["gedadmin"]				= "GEDCOM-beheerder";
$pgv_lang["full_name"]				= "Volledige naam";
$pgv_lang["error_header"]			= "Het GEDCOM bestand, <b>#GEDCOM#</b>, bestaat niet op de aangegeven locatie.";
$pgv_lang["confirm_delete_file"]		= "Weet u zeker dat u dit bestand wilt verwijderen?";
$pgv_lang["confirm_folder_delete"] 		= "Weet u zeker dat u deze map wilt verwijderen?";
$pgv_lang["confirm_remove_links"]		= "Weet u zeker dat u alle links naar dit object wilt verwijderen?";
$pgv_lang["PRIV_PUBLIC"]			= "Toon aan allen";
$pgv_lang["PRIV_USER"]				= "Toon alleen aan geautoriseerde gebruikers";
$pgv_lang["PRIV_NONE"]				= "Toon alleen aan beheer-gebruikers";
$pgv_lang["PRIV_HIDE"]				= "Verberg zelfs voor beheer-gebruikers";
$pgv_lang["manage_gedcoms"]			= "Beheer GEDCOM-bestanden en privacy-instellingen";
$pgv_lang["keep_media"]				= "Behoudt media links";
$pgv_lang["current_links"]				= "Links";
$pgv_lang["add_more_links"]			= "Links toevoegen";
$pgv_lang["enter_pid_or_name"]		= "Voer persoons ID, of naam, in";
$pgv_lang["set_links"]				= "Links instellen";
$pgv_lang["add_or_remove_links"]	= "Links beheren";

$pgv_lang["keep"]					= "Behoudt";
$pgv_lang["unlink"]					= "Ontkoppel";
$pgv_lang["nav"]					= "Navigator";
$pgv_lang["fam_nav"]				= "Gezins Navigator";
$pgv_lang["remove"]					= "Verwijder";
$pgv_lang["keep_link"]				= "Behoudt Link in lijst";
$pgv_lang["remove_link"]				= "Verwijder Link van list";
$pgv_lang["open_nav"]				= "Open Gezins Navigator";
$pgv_lang["link_exists"]			= "Deze link bestaat al";
$pgv_lang["id_not_valid"]			= "Geen geldige Persoons-, Gezins- of Bron ID";
$pgv_lang["add_fam_other_links"]	= "Voeg Gezin en Zoek links toe";
$pgv_lang["search_add_links"]		= "Zoek naar mensen om aan de Voeg Links Toe lijst.";
$pgv_lang["enter_name"]				= "Voer een naam in";
$pgv_lang["add_indi_to_link_list"]	= "Klik op de Naam om persoon toe te voegen aan Links Toevoegen Lijst.";
$pgv_lang["click_choose_head"]		= " #GLOBALS[tempStringHead]# om een persoon te kiezen als Hoofd van het gezin.";
$pgv_lang["click_choose_head_text"]	= "Klik om een persoon te kiezen als Hoofd van het gezin.";
$pgv_lang["head"]						= "Hoofd";
$pgv_lang["id_empty"]				= "Als u een Link toevoegt, kan het ID veld niet leeg zijn.";
$pgv_lang["link_deleted"]			= "Link naar #GLOBALS[remLinkId]# verwijderd";
$pgv_lang["link_added"]				= "Link naar #GLOBALS[addLinkId]# toegevoegd";
$pgv_lang["no_update_CHANs"]		= "Werk de CHAN (Laatst Gewijzigde) kaarten niet bij";
$pgv_lang["no_CHANs_update"]		= "Geen CHAN (Laatst Gewijzigde) kaarten zijn bijgewerkt";

$pgv_lang["files_in_backup"]		= "Bestanden in deze backup";
$pgv_lang["created_remotelinks"]		= "Maken van tabel <i>Remotelinks</i> geslaagd.";
$pgv_lang["created_remotelinks_fail"] 	= "De tabel <i>Remotelinks</i> kan niet worden aangemaakt.";
$pgv_lang["created_indis"]				= "Maken van tabel <i>Individuals</i> geslaagd.";
$pgv_lang["created_indis_fail"]			= "De tabel <i>Individuals</i> kan niet worden aangemaakt.";
$pgv_lang["created_fams"]				= "Maken van tabel <i>Families</i> geslaagd.";
$pgv_lang["created_fams_fail"]			= "De tabel <i>Families</i> kan niet worden aangemaakt.";
$pgv_lang["created_sources"]			= "Maken van tabel <i>Sources</i> geslaagd.";
$pgv_lang["created_sources_fail"]		= "De tabel <i>Sources</i> kan niet worden aangemaakt.";
$pgv_lang["created_other"]				= "Maken van tabel <i>Other</i> geslaagd.";
$pgv_lang["created_other_fail"]			= "De tabel <i>Other</i> kan niet worden aangemaakt.";
$pgv_lang["created_places"]				= "Maken van tabel <i>Places</i> geslaagd.";
$pgv_lang["created_places_fail"]		= "De tabel <i>Places</i> kan niet worden aangemaakt.";
$pgv_lang["created_placelinks"] 		= "Maken van tabel <i>Placelinks</i> geslaagd.";
$pgv_lang["created_placelinks_fail"]	= "De tabel <i>placelinks</i> kan niet worden aangemaakt.";
$pgv_lang["created_media_fail"]			= "De tabel <i>media</i> kan niet worden aangemaakt.";
$pgv_lang["created_media_mapping_fail"]	= "De tabel <i>media mappings</i> kan niet worden aangemaakt.";
$pgv_lang["no_thumb_dir"]			= " map voor miniweergaves bestaat niet en kan niet worden aangemaakt";
$pgv_lang["folder_created"]			= "Map gemaakt";
$pgv_lang["folder_no_create"]		= "Map kan niet worden aangemaakt";
$pgv_lang["security_no_create"]		= "Beveiligingswaarschuwing: index.php bestaat niet in ";
$pgv_lang["security_not_exist"]		= "Beveiligingswaarschuwing: kan index.php niet aanmaken in ";
$pgv_lang["label_delete"]           = "Verwijder";
$pgv_lang["progress_bars_info"]		= "De Voortgangsbalken hieronder tonen u wat de voortgang is van het Importeren.  Als de tijdlimiet afloopt, zal het Importeren worden gestopt en wordt u gevraagd om op de <b>Doorgaan</b> knop te klikken.  Als u de <b>Doorgaan</b> knop niet ziet, moet u het Importeren herstarten met een kleinere tijdlimiet.";
$pgv_lang["upload_replacement"]		= "Upload Vervanging";
$pgv_lang["about_user"]				= "U moet eerst de beheerder aanmaken. De beheerder heeft de rechten om de instellingen te wijzigen, privé-gegevens te bekijken en andere gebruikers aan te maken.";
$pgv_lang["access"]					= "Toegang";
$pgv_lang["add_gedcom"]				= "GEDCOM-bestand toevoegen";
$pgv_lang["add_new_gedcom"]			= "Nieuw GEDCOM-bestand maken";
$pgv_lang["add_new_language"]		= "Bestanden en instellingen voor nieuwe taal toevoegen";
$pgv_lang["add_user"]				= "Toevoegen van een nieuwe gebruiker";
$pgv_lang["admin_gedcom"]			= "Beheren";
$pgv_lang["admin_gedcoms"]			= "Klik hier om de GEDCOM-bestanden te beheren.";
$pgv_lang["admin_geds"]				= "Beheer GEDCOM's en gegevens";
$pgv_lang["admin_info"]				= "Informatie";
$pgv_lang["admin_site"]				= "Beheer website";
$pgv_lang["admin_user_warnings"]	= "Een of meer gebruikers hebben een waarschuwing";
$pgv_lang["admin_verification_waiting"] = "Er wachten gebruikers op verificatie door de beheerder";
$pgv_lang["administration"]			= "Beheer";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]	= "Sta wisselen van GEDCOM-bestand toe";
$pgv_lang["ALLOW_USER_THEMES"] 		= "Gebruikers toestaan om hun eigen site-opmaak te kiezen";
$pgv_lang["ansi_encoding_detected"]	= "ANSI bestandscodering geconstateerd. PhpGedView werkt het best met bestanden gecodeerd volgens UTF-8.";
$pgv_lang["ansi_to_utf8"]			= "Converteer dit GEDCOM-bestand van ANSI (ISO-8859-1) naar UTF-8?";
$pgv_lang["apply_privacy"]			= "Privacy-instellingen toepassen?";
$pgv_lang["back_useradmin"]			= "Terug naar Beheer gebruikers";
$pgv_lang["bytes_read"]				= "Bytes gelezen:";
$pgv_lang["can_admin"]				= "Mag beheren";
$pgv_lang["can_edit"]				= "Mag wijzigen";
$pgv_lang["change_id"]				= "Wijzig persoons-ID in:";
$pgv_lang["choose_priv"]			= "Kies privacy-niveau:";
$pgv_lang["cleanup_places"]			= "Opschonen locaties";
$pgv_lang["cleanup_users"]			= "Opschonen gebruikers";
$pgv_lang["click_here_to_continue"]				= "Klik hier om door te gaan.";
$pgv_lang["click_here_to_go_to_pedigree_tree"] 	= "Klik hier om naar de kwartierstaat te gaan.";
$pgv_lang["comment"]							= "Commentaar beheerder";
$pgv_lang["comment_exp"]						= "Waarschuw beheerder op datum";
$pgv_lang["config_help"]			= "Configuratie-informatie";
$pgv_lang["config_still_writable"]	= "<br />Uw config.php bestand heeft schrijftoegang.<br />Als u klaar bent met het configureren van uw site, dient u de rechten om beveiligingsredenen te wijzigen in \"alleen lezen\".";
$pgv_lang["configuration"]			= "Instellingen";
$pgv_lang["configure"]				= "Instellen PhpGedView";
$pgv_lang["configure_head"]			= "PhpGedView instellingen";
$pgv_lang["confirm_gedcom_delete"]	= "Weet u zeker dat u dit GEDCOM-bestand wilt verwijderen?";
$pgv_lang["confirm_user_delete"]		= "Weet u zeker dat u deze gebruiker wilt verwijderen?";
$pgv_lang["create_user"]				= "Gebruiker maken";
$pgv_lang["current_users"]			= "Lijst gebruikers";
$pgv_lang["daily"]					= "Dagelijks";
$pgv_lang["dataset_exists"]			= "Een GEDCOM-bestand met deze naam staat reeds in de database.";
$pgv_lang["unsync_warning"] 		= "Dit GEDCOM bestand is <em>niet</em> gesynchroniseerd met de database.  Het bevat mogelijk niet de laatste versie van uw gegevens.  Om opnieuw te importeren van de database i.p.v. vanuit het bestand, moet u het downloaden en dan opnieuw uploaden.";
$pgv_lang["date_registered"]		= "Geregistreerd";
$pgv_lang["day_before_month"]		= "Dag voor maand (DD MM YYYY)";
$pgv_lang["DEFAULT_GEDCOM"]			= "Standaard GEDCOM";
$pgv_lang["default_user"]			= "Aanmaken van de beheerder.";
$pgv_lang["del_gedrights"]			= "GEDCOM niet langer actief, verwijder verwijzingen van gebruikers.";
$pgv_lang["del_proceed"]			= "Doorgaan";
$pgv_lang["del_unvera"]				= "Gebruiker niet geverifieerd door de beheerder.";
$pgv_lang["del_unveru"]				= "Gebruiker heeft zijn gegevens niet binnen 7 dagen geverifieerd.";
$pgv_lang["do_not_change"]			= "Niet wijzigen";
$pgv_lang["download_gedcom"]		= "Download GEDCOM-bestand";
$pgv_lang["download_here"]			= "Klik hier om het bestand te downloaden.";
$pgv_lang["download_note"]			= "LET OP: Bij grote GEDCOM-bestanden kan het lang duren voordat de download gereed is.<br />De toegestane limiet voor de uitvoeringstijd van een PHP-pagina kan hierdoor worden overschreden.<br />Controleer daarom altijd of het gedownloade GEDCOM-bestand als laatste regel '0 TRLR' bevat.";
$pgv_lang["editaccount"]			= "Sta gebruiker toe om gebruikersgegevens te wijzigen";
$pgv_lang["empty_dataset"]			= "Wilt u de oude gegevens verwijderen en de gegevens uit het nieuwe GEDCOM-bestand toevoegen?";
$pgv_lang["empty_lines_detected"]	= "Lege regels ontdekt in uw GEDCOM-bestand. Bij het opschonen worden deze verwijderd.";
$pgv_lang["enable_disable_lang"]	= "In- en uitschakelen talen";
$pgv_lang["error_ban_server"]      	= "Selecteer de site die u wilt blokkeren.";
$pgv_lang["error_delete_person"]   	= "Selecteer de persoon waarvan de externe koppeling verwijderd moet worden.";
$pgv_lang["error_header_write"]		= "Schrijfrechten benodigd op het GEDCOM-bestand [#GEDCOM#], controleer attributen en toegangsrechten.";
$pgv_lang["error_remove_site"]			= "De exteren server kon niet worden verwijderd.";
$pgv_lang["error_remove_site_linked"]	= "De exteren server kon niet worden verwijderd omdat diens lijst met Verbindingen (Connections) niet leeg is.";
$pgv_lang["error_remote_duplicate"]		= "Deze externe database staat al in de lijst als <i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]	= "Aanmelden bij gekoppelde site niet gelukt";
$pgv_lang["error_url_blank"]		= "Gekoppelde site naam of URL niet leeg laten";
$pgv_lang["error_view_info"]        = "Selecteer de persoon waarvan de informatie moet worden getoond.";
$pgv_lang["example_date"]			= "Voorbeeld van een ongeldige datum in uw GEDCOM-bestand:";
$pgv_lang["example_place"]			= "Voorbeeld van een foutieve locatieaanduiding in uw GEDCOM-bestand:";
$pgv_lang["fbsql"]					= "FrontBase";
$pgv_lang["found_record"]			= "Record gevonden";
$pgv_lang["ged_download"]			= "Downloaden";
$pgv_lang["ged_import"]					= "Importeer";
$pgv_lang["ged_export"]				= "Exporteer";
$pgv_lang["ged_check"]				= "Controleer";
$pgv_lang["gedcom_adm_head"]			= "GEDCOM Beheer";
$pgv_lang["gedcom_config_write_error"]	= "Fout! Kan niet schrijven naar GEDCOM-configuratiebestand.";
$pgv_lang["gedcom_downloadable"]	= "Dit GEDCOM-bestand kan worden gedownload vanaf het Internet!<br />Lees de SECURITY-sectie in het <a href=\"readme.txt\">readme.txt</a>-bestand om dit probleem te verhelpen.";
$pgv_lang["gedcom_file"]			= "GEDCOM-bestand";
$pgv_lang["gedcom_not_imported"]	= "Deze GEDCOM is nog niet geïmporteerd.";
$pgv_lang["ibase"]					= "InterBase";
$pgv_lang["ifx"]					= "Informix";
$pgv_lang["img_admin_settings"]		= "Configureren bewerking afbeeldingen";
$pgv_lang["autoContinue"]			= "Automatisch «Doorgaan» knop bedienen";
$pgv_lang["import_complete"]		= "Import gereed";
$pgv_lang["import_options"]			= "Importopties";
$pgv_lang["import_progress"]		= "Voortgang importeren....";
$pgv_lang["import_statistics"]		= "Importeren statistieken";
$pgv_lang["import_time_exceeded"]	= "De maximale uitvoeringstijd is bereikt. Druk op de knop \"Doorgaan\" om de import van het GEDCOM-bestand voort te zetten.";
$pgv_lang["inc_languages"]			= "Talen";
$pgv_lang["INDEX_DIRECTORY"]		= "Map voor indexbestanden";
$pgv_lang["invalid_dates"]			= "Ongeldig datumformaat gevonden. Bij het opschonen worden deze datums gewijzigd in het formaat DD MMM YYYY (bijvoorbeeld 1 JAN 2004).";
$pgv_lang["BOM_detected"]			= "Een Byte Order Mark (BOM) is gedetecteerd aan het begin van het bestand.  Deze speciale zal worden verwijderd tijdens cleanup.";
$pgv_lang["invalid_header"]			= "GEDCOM-regels aanwezig voor de kopregel (0 HEAD). Deze worden bij het opschonen verwijderd.";
$pgv_lang["label_added_servers"]	= "Toegevoegde gekoppelde servers";
$pgv_lang["label_banned_servers"]   = "Geblokkeerde sites";
$pgv_lang["label_families"]         = "Gezinnen";
$pgv_lang["label_gedcom_id2"]       = "GEDCOM-ID:";
$pgv_lang["label_individuals"]      	= "Personen";
$pgv_lang["label_manual_search_engines"]   = "Handmatig zoekmachines markeren op basis van IP adres";
$pgv_lang["label_new_server"]       	= "Site toevoegen";
$pgv_lang["label_password_id"]		= "Wachtwoord";
$pgv_lang["label_server_info"]      = "Alle personen gekoppeld via deze site:";
$pgv_lang["label_server_url"]       = "URL/IP van site";
$pgv_lang["label_username_id"]		= "Gebruikersnaam";
$pgv_lang["label_view_local"]       = "Bekijk lokale informatie van een persoon";
$pgv_lang["label_view_remote"]      = "Bekijk gekoppelde informatie van een persoon";
$pgv_lang["LANG_SELECTION"] 		= "Ondersteunde talen";
$pgv_lang["LANGUAGE_DEFAULT"]		= "U heeft de talen niet ingesteld, die op uw website worden ondersteund.<br />PhpGedView gebruikt de standaardinstellingen.";
$pgv_lang["last_login"]				= "Laatst aangemeld";
$pgv_lang["lasttab"]				= "Laatst bezocht Tabblad voor Personen";
$pgv_lang["leave_blank"]			= "Laat het wachtwoord leeg als u het huidige wachtwoord wilt behouden.";
$pgv_lang["link_manage_servers"]    = "Site-koppelingen beheren";
$pgv_lang["logfile_content"]		= "Inhoud van log-bestand";
$pgv_lang["macfile_detected"]		= "Het bestand is in Macintosh-formaat. Bij het opschonen wordt het omgezet naar DOS-formaat.";
$pgv_lang["mailto"]	 				= "Mailen naar";
$pgv_lang["merge_records"]			= "Gegevens samenvoegen";
$pgv_lang["message_to_all"]			= "Bericht aan alle gebruikers sturen";
$pgv_lang["messaging"]				= "PhpGedView interne berichten";
$pgv_lang["messaging2"]				= "Interne berichten en e-mails";
$pgv_lang["messaging3"]				= "PhpGedView verzendt e-mails zonder opslaan";
$pgv_lang["month_before_day"]		= "Maand voor dag (MM DD YYYY)";
$pgv_lang["monthly"]				= "Maandelijks";
$pgv_lang["msql"]					= "Mini SQL";
$pgv_lang["mssql"]					= "Microsoft SQL Server";
$pgv_lang["mysql"]					= "MySQL";
$pgv_lang["never"]					= "Nooit";
$pgv_lang["no_logs"]				= "Log-bestand uitschakelen";
$pgv_lang["no_messaging"]			= "Geheel geen contact";
$pgv_lang["oci8"]					= "Oracle 7+";
$pgv_lang["page_views"]				= "&nbsp;&nbsp;bekeken pagina's in&nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "GEDCOM-validatie wordt uitgevoerd, selecteer de benodigde opties en klik op \"Opschonen\"";
$pgv_lang["pgsql"]					= "PostgreSQL";
$pgv_lang["pgv_config_write_error"] = "Fout! Kan niet schrijven naar het PhpGedView-configuratiebestand. Controleer de toegangsrechten voor het bestand en de map en probeer opnieuw.";
$pgv_lang["PGV_MEMORY_LIMIT"]		= "Geheugenlimiet";
$pgv_lang["PGV_SESSION_SAVE_PATH"]	= "Map voor sessiebestanden";
$pgv_lang["PGV_SESSION_TIME"]		= "Sessie verlopen";
$pgv_lang["PGV_SIMPLE_MAIL"]		= "Gebruik alleen e-mailadres voor externe berichten";
$pgv_lang["PGV_SMTP_ACTIVE"]		= "Gebruik SMTP om externe mails te verzenden";
$pgv_lang["PGV_SMTP_HOST"]			= "Naam van Uitgaande(SMTP) server";
$pgv_lang["PGV_SMTP_HELO"]			= "Verzendt domain naam";
$pgv_lang["PGV_SMTP_PORT"]			= "SMTP Poort";
$pgv_lang["PGV_SMTP_AUTH"]			= "Gebruik naam en wachtwoord";
$pgv_lang["PGV_SMTP_AUTH_USER"]		= "Gebruiker naam";
$pgv_lang["PGV_SMTP_AUTH_PASS"]		= "Wachtwoord";
$pgv_lang["PGV_SMTP_SSL"]			= "Beveiligde verbinding";
$pgv_lang["PGV_SMTP_FROM_NAME"] 	= "Naam Afzender";
$pgv_lang["PGV_STORE_MESSAGES"]		= "Sta toe dat berichten worden opgeslagen";
$pgv_lang["phpinfo"]				= "Toon PHP-informatie";
$pgv_lang["place_cleanup_detected"]	= "Foutieve locatiecoderingen aanwezig. Deze fouten moeten hersteld worden. Het volgende bestandsdeel geeft de foutieve locatiecodering aan:";
$pgv_lang["please_be_patient"]		= "EVEN GEDULD A.U.B.";
$pgv_lang["privileges"]				= "Rechten";
$pgv_lang["reading_file"]			= "GEDCOM-bestand inlezen";
$pgv_lang["readme_documentation"]	= "README documentatie";
$pgv_lang["remove_ip"] 				= "Verwijder IP adres";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"]	= "Beheerder moet nieuwe aanmeldingen goedkeuren";
$pgv_lang["review_readme"] 			= "Leest u eerst het <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> bestand voordat u verder gaat met het instellen van PhpGedView.<br /><br />";
$pgv_lang["seconds"]				= "&nbsp;&nbsp;seconden";
$pgv_lang["select_an_option"]		= "Selecteer een optie:";
$pgv_lang["SERVER_URL"] 			= "PhpGedView-URL";
$pgv_lang["show_phpinfo"]			= "Toon PHPInfo";
$pgv_lang["siteadmin"]				= "Site-beheerder";
$pgv_lang["sqlite"]					= "SQLite";
$pgv_lang["sybase"]					= "Sybase";
$pgv_lang["sync_gedcom"]			= "Gebruikersgegevens met genealogiegegevens synchroniseren";
$pgv_lang["system_time"]			= "Huidige systeemdatum/tijd: ";
$pgv_lang["user_time"]					= "Huidige tijd Gebruiker:";
$pgv_lang["TBLPREFIX"]				= "Voorvoegsel databasetabellen";
$pgv_lang["themecustomization"]		= "Thema Aanpassing";
$pgv_lang["time_limit"]				= "Tijdslimiet:";
$pgv_lang["title_manage_servers"]   = "Beheer sites";
$pgv_lang["title_view_conns"]       = "Bekijk verbindingen";
$pgv_lang["translator_tools"]		= "Vertaler hulpmiddelen";
$pgv_lang["update_myaccount"]		= "Mijn gegevens bijwerken";
$pgv_lang["update_user"]			= "Aanpassen gebruiker";
$pgv_lang["upload_gedcom"]			= "Upload GEDCOM-bestand";
$pgv_lang["USE_REGISTRATION_MODULE"]	= "Gebruikers toestaan om gebruikersnamen te registreren";
$pgv_lang["user_auto_accept"]		= "Accepteer wijzigingen van deze gebruiker automatisch";
$pgv_lang["user_contact_method"]	= "Gewenste verzendwijze";
$pgv_lang["user_create_error"]		= "Het is niet mogelijk om de gebruiker toe te voegen. Probeer het opnieuw.";
$pgv_lang["user_created"]			= "Gebruiker gemaakt.";
$pgv_lang["user_default_tab"]		= "Standaard tabblad voor persoonspagina";
$pgv_lang["user_path_length"]		= "Max lengte privacy relatie-pad";
$pgv_lang["user_relationship_priv"]	= "Toegang beperken tot verwante personen";
$pgv_lang["users_admin"]			= "Website beheerders";
$pgv_lang["users_gedadmin"]			= "GEDCOM-beheerders";
$pgv_lang["users_total"]			= "Totaal aantal gebruikers";
$pgv_lang["users_unver"]			= "Niet geverifieerd door gebruiker";
$pgv_lang["users_unver_admin"]		= "Niet geverifieerd door beheerder";
$pgv_lang["usr_deleted"]			= "Gebruiker verwijderd: ";
$pgv_lang["usr_idle"]				= "Aantal maanden voordat de gebruiker beschouwd wordt als te lang niet aangemeld: ";
$pgv_lang["usr_idle_toolong"]		= "Deze gebruiker is te lang inactief geweest: ";
$pgv_lang["usr_no_cleanup"]			= "Niets gevonden om op te ruimen";
$pgv_lang["usr_unset_gedcomid"]		= "GEDCOM-ID verwijderd voor ";
$pgv_lang["usr_unset_rights"]		= "GEDCOM-rechten verwijderd voor ";
$pgv_lang["usr_unset_rootid"]		= "Start-ID verwijderd voor ";
$pgv_lang["valid_gedcom"]			= "Geldig GEDCOM-bestand gevonden. Opschonen is niet noodzakelijk.";
$pgv_lang["validate_gedcom"]		= "Valideren GEDCOM-bestand";
$pgv_lang["verified"]				= "Registratie bevestigd";
$pgv_lang["verified_by_admin"]		= "Registratie goedgekeurd";
$pgv_lang["verify_gedcom"]				= "Gedcom verifieren";
$pgv_lang["verify_upload_instructions"]		= "Als u kiest om door te gaan, wordt het oude GEDCOM-bestand overschreven door het GEDCOM-bestand dat u heeft ge-upload, en begint het importeren opnieuw. Als u Annuleren kiest blijft het oude GEDCOM-bestand intact.";
$pgv_lang["view_changelog"]			= "Versie #VERSION# aanpassingen";
$pgv_lang["view_logs"]				= "Bekijk log-bestanden";
$pgv_lang["view_readme"]			= "README documentatie";
$pgv_lang["visibleonline"]			= "Zichtbaar voor anderen als aangemeld";
$pgv_lang["visitor"]				= "Bezoeker";
$pgv_lang["warn_users"]				= "Gebruikers met waarschuwing";
$pgv_lang["weekly"]					= "Wekelijks";
$pgv_lang["welcome_new"] 			= "Welkom bij uw nieuwe PhpGedView website. U ziet deze pagina omdat u PhpGedView met succes op uw webserver heeft geïnstalleerd en kunt nu beginnen met het instellen volgens uw wensen.<br />";
$pgv_lang["yearly"]					= "Jaarlijks";
$pgv_lang["admin_OK_subject"]		= "Goedkeuring van een account op #SERVER_NAME#";
$pgv_lang["admin_OK_message"]		= "De beheerder van de PhpGedView site #SERVER_NAME# heeft uw aanvraag voor een account goedgekeurd.  U kunt nu inloggen als u op de volgende link klikt:\r\n\r\n#SERVER_NAME#\r\n";

$pgv_lang["batch_update"]			="Batch updates/wijzigingen op uw GEDCOM uitvoeren";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]     			= "Gedcom controleur";          // Module title
$pgv_lang["gedcheck_text"]			= "Deze module controleert het formaat van een GEDCOM bestand aan de hand van de <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM Specificatie</a>.  Het controleert ook op een aantal algemene fouten in uw gegevens.  Bedenk dat er veel versies, extensies en variaties op de specificatie. U hoeft u dus geen zorgen te maken, behalve over de items die zijn gemerkt als \"Kritisch\".  De uitleg over alle aangetroffen fouten kan worden gevonden in de specificaties, dus bekijk dat eerst, voordat u vraagt om hulp.";
$pgv_lang["gedcheck_sync"] 			= "De aangebrachte wijzigingen in de database zijn niet gesynchroniseerd met het bestand #GLOBALS[ged]#.  De inhoud van het bestand kan verouderd zijn.  U kunt het nu met de database synchroniseren door een <b><a \"#GLOBALS[ged_link]#\">export uit te voeren</a></b>.";
$pgv_lang["gedcheck_nothing"] 		= "Geen fouten gevonden op dit nivo.";
$pgv_lang["level"]        			= "Nivo";                   // Levels of checking
$pgv_lang["critical"]     				= "Kritisch";
$pgv_lang["error"]        			= "Fout";
$pgv_lang["warning"]      			= "Waarschuwing";
$pgv_lang["info"]         			= "Info";
$pgv_lang["open_link"]    			= "Open links in";           // Where to open links
$pgv_lang["same_win"]     			= "Zelfde tabblad/venster";
$pgv_lang["new_win"]      			= "Nieuw tabblad/venster";
$pgv_lang["context_lines"]				= "Aantal regels GEDCOM context"; // Number of lines either side of error
$pgv_lang["all_rec"]      			= "Alle kaarten";             // What to show
$pgv_lang["err_rec"]      			= "Kaarten met fouten";
$pgv_lang["missing"]      			= "ontbrekend";                 // General error messages
$pgv_lang["multiple"]     			= "meervoudig";
$pgv_lang["invalid"]      			= "ongeldig";
$pgv_lang["too_many"]     			= "teveel";
$pgv_lang["too_few"]      			= "te weinig";
$pgv_lang["no_link"]      			= "linkt niet terug";
$pgv_lang["data"]         			= "gegevens";                    // Specific errors (used with general errors)
$pgv_lang["see"]          			= "kijk";
$pgv_lang["noref"]        			= "Geen referenties naar deze kaart";
$pgv_lang["tag"]          			= "label";
$pgv_lang["spacing"]      			= "tussenruimte";
$pgv_lang["ADVANCED_NAME_FACTS"] 	= "Geavanceerde naam-feiten";
$pgv_lang["ADVANCED_PLAC_FACTS"] 	= "Geavanceerde plaatsnaam-feiten";
$pgv_lang["SURNAME_TRADITION"]		= "Achternaam traditie"; // Default surname inheritance
$pgv_lang["tradition_spanish"]		= "Spaans";
$pgv_lang["tradition_portuguese"]	= "Portugees";
$pgv_lang["tradition_icelandic"]	= "IJslands";
$pgv_lang["tradition_paternal"]		= "Moedertaal";
$pgv_lang["tradition_polish"]		= "Pools";
$pgv_lang["tradition_none"]			= "Geen";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]		=	"1 jaar";
$pgv_lang["elapsedYear2"]		=	"#pgv_lang[global_num1]# jaren";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]		=	"#pgv_lang[global_num1]# jaren";
$pgv_lang["elapsedMonth1"]		=	"1 maand";
$pgv_lang["elapsedMonth2"]		=	"#pgv_lang[global_num1]# maanden";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]		=	"#pgv_lang[global_num1]# maanden";
$pgv_lang["elapsedDay1"]		=	"1 dag";
$pgv_lang["elapsedDay2"]		=	"#pgv_lang[global_num1]# dagen";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]		=	"#pgv_lang[global_num1]# dagen";
$pgv_lang["elapsedHour1"]		=	"1 uur";
$pgv_lang["elapsedHour2"]		=	"#pgv_lang[global_num1]# uren";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]		=	"#pgv_lang[global_num1]# uren";
$pgv_lang["elapsedMinute1"]		=	"1 minuut";
$pgv_lang["elapsedMinute2"]		=	"#pgv_lang[global_num1]# minuten";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]		=	"#pgv_lang[global_num1]# minuten";

$pgv_lang["elapsedAgo"]			=	"#pgv_lang[global_string1]# geleden";

?>
