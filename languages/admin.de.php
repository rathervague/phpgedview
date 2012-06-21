<?php
/**
 * German texts
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
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: admin.de.php 6908 2010-02-03 02:17:33Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["enter_comment"]	= "Sie können hier eine Gedächtnishilfe eingeben.";
$pgv_lang["upload_a_gedcom"] 		= "GEDCOM-Datei hochladen";
$pgv_lang["start_entering"] 		= "Neue Daten eingeben";
$pgv_lang["add_gedcom_from_path"] 	= "Bereits auf dem Server vorhandene GEDCOM-Datei einfügen";
$pgv_lang["get_started_instructions"]	= "Bitte wählen Sie eine der folgenden Optionen um anzufangen mit PhpGedView zu arbeiten";

$pgv_lang["admin_users_exists"]		= "Folgende Verwalter sind bereits eingetragen:";
$pgv_lang["install_step_1"]			= "Verifizierung des Betriebssytems";
$pgv_lang["install_step_2"]			= "Datenbank-Anschluß";
$pgv_lang["install_step_3"]			= "Datenbank-Tabellen";
$pgv_lang["install_step_4"]			= "Konfiguration der Site";
$pgv_lang["install_step_5"]			= "Sprachen";
$pgv_lang["install_step_6"]			= "Speichern der Site-Konfiguration";
$pgv_lang["install_step_7"]			= "Erstellung des Haupt-Verwalters";
$pgv_lang["install_wizard"]			= "Installations-Assistent";
$pgv_lang["basic_site_config"]		= "Grundeinstellungen";
$pgv_lang["adv_site_config"]		= "Erweiterte Optionen";
$pgv_lang["config_not_saved"]		= "*Ihre Einstellungen werden erst in Schritt 6 gespeichert";
$pgv_lang["download_config"]		= "Konfigurationsdatei config.php herunterladen";
$pgv_lang["site_unavailable"]		= "Die Webseite ist momentan nicht erreichbar";
$pgv_lang["to_manage_users"]		= "<a href=\"useradmin.php\">Zur Benutzerverwaltung</a>.";
$pgv_lang["db_tables_created"]		= "Die Datenbanktabellen wurden erstellt";
$pgv_lang["config_saved"]			= "Die Einstellungen wurden gespeichert";
$pgv_lang["checking_errors"]		= "Fehlersuche...";
$pgv_lang["checking_php_version"]	= "Überprüfe PHP-Version:";
$pgv_lang["failed"]					= "Fehler";
$pgv_lang["pgv_requires_version"]	= "PhpGedView erfordert mindestens die PHP-Version #PGV_REQUIRED_PHP_VERSION#";
$pgv_lang["using_php_version"]		= "Ihr Server unterstützt nur PHP-Version #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]	= "Überprüfe Datenbankerweiterungen:";
$pgv_lang["no_db_extensions"]		= "Ihr Server verfügt über keine Datenbankerweiterung, die von PhpGedView unterstützt wird.";
$pgv_lang["db_ext_support"]			= "Ihr Server verfügt über die Datenbankerweiterung #DBEXT#.";
$pgv_lang["checking_config.php"]	= "Überprüfung der Konfigurationsdatei config.php:";
$pgv_lang["config.php_missing"]		= "Die Konfigurationsdatei config.php ist nicht vorhanden.";
$pgv_lang["config.php_missing_instr"]	= "Ihre Einstellungen können nicht in der Konfigurationsdatei config.php gespeichert werden. Sie können nun die fehlende Datei config.php erstellen, indem Sie die Datei config.dist kopieren und umbenennen. Alternativ erhalten Sie im Anschluss Gelegenheit, Ihre Einstellungen herunterzuladen und diese in einer Datei config.php auf Ihren Server hochzuladen.";
$pgv_lang["config.php_not_writable"]	= "Die Datei config.php ist nicht überschreibbar.";
$pgv_lang["config.php_not_writable_instr"]	= "Ihre Einstellungen können nicht in der Konfigurationsdatei config.php gespeichert werden. Sie können nun die Schreibrechte auf Ihrem Server einstellen. Alternativ erhalten Sie im Anschluss Gelegenheit, Ihre Einstellungen herunterzuladen und diese in einer Datei config.php auf Ihren Server hochzuladen.";
$pgv_lang["passed"]					= "Keine Fehler";
$pgv_lang["config.php_writable"]	= "Die Konfigurationsdatei config.php existiert und kann überschrieben werden.";
$pgv_lang["checking_warnings"]		= "Suche nach Warnhinweisen...";
$pgv_lang["checking_timelimit"]		= "Versuch, Laufzeitlimit zu ändern:";
$pgv_lang["cannot_change_timelimit"]	= "Laufzeitlimit kann nicht geändert werden.";
$pgv_lang["cannot_change_timelimit_instr"]	= "Es ist möglich, dass bei größeren Datenbanken mit vielen Personen nicht alle Funktionen einwandfrei ausgeführt werden.";
$pgv_lang["current_max_timelimit"]	= "Aktuelles, vom Server bestimmtes Laufzeitlimit:";
$pgv_lang["check_memlimit"]			= "Versuch, Hauptspeicherlimit zu ändern:";
$pgv_lang["cannot_change_memlimit"] = "Hauptspeicherlimit kann nicht geändert werden.";
$pgv_lang["cannot_change_memlimit_instr"]	= "Es ist möglich, dass bei größeren Datenbanken mit vielen Personen nicht alle Funktionen einwandfrei ausgeführt werden.";
$pgv_lang["current_max_memlimit"]	= "Aktuelles, vom Server bestimmtes Hauptspeicherlimit:";
$pgv_lang["check_upload"]			= "Versuch, Hochladenlimit zu ermitteln:";
$pgv_lang["current_max_upload"]		= "Maximale Größe von hochzuladenen Dateien:";
$pgv_lang["check_gd"]				= "Versuch, die GD-Bildbibliothek zu ermitteln:";
$pgv_lang["cannot_use_gd"]			= "Die GD-Bildbibliothek wird von Ihrem Server nicht unterstützt. PhpGedView kann Miniaturbilder nicht automatisch erstellen.";
$pgv_lang["check_sax"]				= "Versuch, die XML-Bibliothek SAX zu ermitteln:";
$pgv_lang["cannot_use_sax"]			= "Die XML-Bibliothek SAX wird von Ihrem Server nicht unterstützt. PhpGedView kann keine Berichte erstellen. Einige andere Funktionen fehlen ebenfalls.";
$pgv_lang["check_dom"]				= "Versuch, die XML-Bibliothek DOM zu ermitteln:";
$pgv_lang["cannot_use_dom"]			= "Die XML-Bibliothek DOM wird von Ihrem Server nicht unterstützt. PhpGedView kann keine Dateien im XML-Format exportieren.";
$pgv_lang["check_calendar"]			= "Versuch, die Fähigkeit Kalender und Daten zu bearbeiten zu ermitteln:";
$pgv_lang["cannot_use_calendar"]	= "Ihr Server unterstützt nur das Bearbeiten von normalen Kalendern und Daten.  Besondere Daten, die zum Beispiel in jüdischen oder arabischen Kalendern vorkommen, können nicht bearbeitet werden.";
$pgv_lang["warnings_passed"]		= "Die Suche nach Warnhinweisen ist beendet.";
$pgv_lang["warning_instr"]			= "Falls Sie Warnhinweise erhalten haben, können Sie das Programm trotzdem mit eingeschränkten Funktionen benutzen.";

$pgv_lang["associated_files"]		= "Verwandte Dateien:";
$pgv_lang["remove_all_files"]		= "Alle nicht unbedingt erforderliche Dateien löschen";
$pgv_lang["warn_file_delete"]		= "Diese Datei enthält wichtige Daten wie zum Beispiel die Spracheinstellungen oder noch nicht eingetragene Änderungen der Datenbank. Sind Sie sicher, dass Sie diese Datei löschen möchten?";
$pgv_lang["deleted_files"]          = "Gelöschte Dateien:";
$pgv_lang["index_dir_cleanup_inst"]	= "Dateien oder Unterverzeichnisse werden aus dem Index-Verzeichnis gelöscht, indem Sie die Namen in den Papierkorb verlegen oder sie in der Liste ankreuzen. Die so gekennzeichneten Dateien werden unwiderruflich gelöscht, wenn Sie auf den «Löschen» Button klicken.<br /><br />Unbedingt erforderliche Dateien sind mit <img src=\"./images/RESN_confidential.gif\" alt=\"\" /> gekennzeichnet; sie dürfen nicht gelöscht werden.<br />Dateien, die mit <img src=\"./images/RESN_locked.gif\" alt=\"\" /> gekennzeichnet sind, enthalten wichtige Datensätze und sollten nur gelöscht werden, wenn Sie sich dessen sicher sind.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "Indexverzeichnis aufräumen";
$pgv_lang["clear_cache_succes"]		= "Die Cachedateien wurden gelöscht.";
$pgv_lang["clear_cache"]			= "Cachedateien löschen";
$pgv_lang["sanity_err0"]			= "Fehler:";
$pgv_lang["sanity_err1"]			= "Ihre PHP-Version muss mindestens #PGV_REQUIRED_PHP_VERSION# sein.";
$pgv_lang["sanity_err2"]			= "Datei oder Verzeichnis <i>#GLOBALS[whichFile]#</i> ist nicht vorhanden. Bitte prüfen Sie, ob diese Datei oder dieses Verzeichnis wirklich nicht vorhanden ist, ob der Name korrekt ist und ausreichende Rechte für den Lesezugriff bestehen.";
$pgv_lang["sanity_err3"]			= "Die Datei <i>#GLOBALS[whichFile]#</i> wurde nicht richtig auf den Server hochgeladen. Bitte wiederholen Sie das Hochladen.";
$pgv_lang["sanity_err4"]			= "Die Datei <i>config.php</i> enthält Fehler.";
$pgv_lang["sanity_err5"]			= "Die Datei <i>config.php</i> kann nicht geschrieben werden.";
$pgv_lang["sanity_err6"]			= "Das Verzeichnis <i>#GLOBALS[INDEX_DIRECTORY]#</i> hat unzureichende Schreibrechte.";
$pgv_lang["sanity_warn0"]			= "Warnhinweise:";
$pgv_lang["sanity_warn1"]			= "Das Medienverzeichnis <i>#GLOBALS[MEDIA_DIRECTORY]#</i> hat unzureichende Schreibrechte. Sie können durch PhpGedView keine Medien-Dateien hochladen oder Miniaturbilder erstellen.";
$pgv_lang["sanity_warn2"]			= "Das Miniaturbildverzeichnis <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> hat unzureichende Schreibrechte. Sie können durch PhpGedView keine Miniaturbilder hochladen oder erstellen.";
$pgv_lang["sanity_warn3"]			= "Werkzeuge zur Bearbeitung von Bildern (GD-Bibliothek) sind nicht vorhanden. PhpGedView funktioniert, aber einige Programmbestandteile, z.B. Miniaturbilderstellung und Kreisdiagramm, benötigen die GD-Bibliothek. Bitte besuchen Sie <a href='http://www.php.net/manual/de/ref.image.php'>http://www.php.net/manual/de/ref.image.php</a> für eine ausführlichere Auskunft.";
$pgv_lang["sanity_warn4"]			= "Werkzeuge zur Bearbeitung von XML Dateien (XML-Parser) sind nicht vorhanden. PhpGedView funktioniert, aber einige Programmbestandteile, z.B. Erstellung von Berichten und Verbindungen zu anderen PhpGedView-Webseiten, benötigen die XML-Parser Werkzeuge. Bitte besuchen Sie <a href='http://www.php.net/manual/de/ref.xml.php'>http://www.php.net/manual/de/ref.xml.php</a> für eine ausführlichere Auskunft.";
$pgv_lang["sanity_warn5"]			= "Werkzeuge zur Bearbeitung von XML Dateien (XML-Bibliothek DOM) sind nicht vorhanden. PhpGedView funktioniert, aber einige Programmbestandteile, z.B. GRAMPS-Funtionen wie Exportieren, Herunterladen und Verbindungen zu anderen PhpGedView-Webeiten, benötigen die XML-Bibliothek DOM. Bitte besuchen Sie <a href='http://www.php.net/manual/de/ref.domxml.php'>http://www.php.net/manual/de/ref.domxml.php</a> für eine ausführlichere Auskunft.";
$pgv_lang["sanity_warn6"]			= "Spezielle Kalenderfunktionen fehlen. PhpGedView funktioniert, aber einige Programmbestandteile, z.B. Bearbeitung von Hebräischen oder Französischen Daten, benötigen die Kalender-Bibliothek. Die Kalender-Bibliothek ist oft nicht notwendig für das Funktionieren von PhpGedView. Bitte besuchen Sie <a href='http://www.php.net/manual/de/ref.calendar.php'>http://www.php.net/manual/de/ref.calendar.php</a> für eine ausführlichere Auskunft.";
$pgv_lang["ip_address"]				= "IP-Adresse";
$pgv_lang["date_time"]				= "Datum und Uhrzeit";
$pgv_lang["log_message"]			= "Mitteilung";
$pgv_lang["searchtype"]				= "Art der Suche";
$pgv_lang["query"]					= "Abfrage";
$pgv_lang["user"]					= "Benutzer bestätigt";
$pgv_lang["editors"]				= "Benutzer mit Bearbeitungsrechten";
$pgv_lang["gedcom_admins"]			= "GEDCOM-Verwalter";
$pgv_lang["site_admins"]			= "Site-Verwalter";
$pgv_lang["nobody"]					= "Niemand";
$pgv_lang["thumbnail_deleted"]		= "Miniaturbild wurde gelöscht.";
$pgv_lang["thumbnail_not_deleted"]	= "Miniaturbild konnte nicht gelöscht werden.";
$pgv_lang["step2"]					= "Schritt 2 von 4:";
$pgv_lang["refresh"]				= "Erneuern";
$pgv_lang["move_file_success"]		= "Medien- und Miniaturbilddateien wurden entfernt.";
$pgv_lang["media_folder_corrupt"]	= "Das Medienverzeichnis ist defekt.";
$pgv_lang["media_file_not_deleted"]	= "Mediendatei konnte nicht gelöscht werden.";
$pgv_lang["gedcom_deleted"]			= "GEDCOM [#GED#] wurde gelöscht.";
$pgv_lang["gedadmin"]				= "GEDCOM-Verwalter";
$pgv_lang["full_name"]				= "Vollständiger Name";
$pgv_lang["error_header"]			= "Die GEDCOM-Datei <b>#GEDCOM#</b> befindet sich nicht am angegebenen Ort.";
$pgv_lang["confirm_delete_file"]	= "Möchten Sie diese Datei wirklich löschen?";
$pgv_lang["confirm_folder_delete"]	= "Möchten Sie dieses Verzeichnis wirklich löschen?";
$pgv_lang["confirm_remove_links"]	= "Möchten Sie wirklich alle Verbindungen zu diesem Objekt löschen?";
$pgv_lang["PRIV_PUBLIC"]			= "Allen Besuchern zeigen";
$pgv_lang["PRIV_USER"]				= "Nur angemeldeten Besuchern zeigen";
$pgv_lang["PRIV_NONE"]				= "Nur Verwaltern zeigen";
$pgv_lang["PRIV_HIDE"]				= "Auch Verwaltern nicht zeigen";
$pgv_lang["manage_gedcoms"]			= "GEDCOM-Dateien und Datenschutzeinstellungen verwalten";
$pgv_lang["keep_media"]				= "Verbindungen zu Medienobjekten bewahren";
$pgv_lang["current_links"]			= "Verbindungen";
$pgv_lang["add_more_links"]			= "Neue Verbindungen";
$pgv_lang["enter_pid_or_name"]		= "Personen-ID oder Name";
$pgv_lang["set_links"]				= "Neue Verbindungen speichern";
$pgv_lang["add_or_remove_links"]	= "Verbindungen bearbeiten";

$pgv_lang["keep"]					= "Behalten";
$pgv_lang["unlink"]					= "Löschen";
$pgv_lang["nav"]					= "Lotse";
$pgv_lang["fam_nav"]				= "Familienlotse";
$pgv_lang["remove"]					= "Entfernen";
$pgv_lang["keep_link"]				= "Verbindung behalten";
$pgv_lang["remove_link"]			= "Verbindung löschen";
$pgv_lang["open_nav"]				= "Familienlotse starten";
$pgv_lang["link_exists"]			= "Diese Verbindung besteht bereits";
$pgv_lang["id_not_valid"]			= "Diese Personen-, Familien- oder Qellennummer ist ungültig";
$pgv_lang["add_fam_other_links"]	= "Weitere zu verbindende Familien suchen";
$pgv_lang["search_add_links"]		= "Weitere zu verbindende Personen suchen";
$pgv_lang["enter_name"]				= "Bitte den Namen eingeben";
$pgv_lang["add_indi_to_link_list"]	= "Namen klicken, um diese Person der Liste neuer Verbindungen hinzuzufügen";
$pgv_lang["click_choose_head"]		= "#GLOBALS[tempStringHead]# klicken um diese Person als Familienhaupt zu wählen.";
$pgv_lang["click_choose_head_text"]	= "Klicken um diese Person als Familienhaupt zu wählen.";
$pgv_lang["head"]					= "Familienhaupt";
$pgv_lang["id_empty"]				= "ID-Nummer fehlt.  Befehl kann nicht ausgeführt werden.";
$pgv_lang["link_deleted"]			= "Verbindung mit #GLOBALS[remLinkId]# gelöscht";
$pgv_lang["link_added"]				= "Verbindung mit #GLOBALS[addLinkId]# erstellt";
$pgv_lang["no_update_CHANs"]		= "CHAN (Letzte Änderung) Datensätze nicht aktualisieren";
$pgv_lang["no_CHANs_update"]		= "CHAN (Letzte Änderung) Datensätze wurden nicht aktualisiert";

$pgv_lang["files_in_backup"]		= "Inhalt dieser Sicherheitskopie";
$pgv_lang["created_remotelinks"]	= "Die Tabelle <i>Remotelinks</i> wurde erstellt.";
$pgv_lang["created_remotelinks_fail"]	= "Die Tabelle <i>Remotelinks</i> konnte nicht erstellt werden.";
$pgv_lang["created_indis"]			= "Die Tabelle <i>Individuals</i> wurde erstellt.";
$pgv_lang["created_indis_fail"]		= "Die Tabelle <i>Individuals</i> konnte nicht erstellt werden.";
$pgv_lang["created_fams"]			= "Die Tabelle <i>Families</i> wurde erstellt.";
$pgv_lang["created_fams_fail"]		= "Die Tabelle <i>Families</i> konnte nicht erstellt werden.";
$pgv_lang["created_sources"]		= "Die Tabelle <i>Sources</i> wurde erstellt.";
$pgv_lang["created_sources_fail"]	= "Die Tabelle <i>Sources</i> konnte nicht erstellt werden.";
$pgv_lang["created_other"]			= "Die Tabelle <i>Other</i> wurde erstellt.";
$pgv_lang["created_other_fail"]		= "Die Tabelle <i>Other</i> konnte nicht erstellt werden.";
$pgv_lang["created_places"]			= "Die Tabelle <i>Places</i> wurde erstellt.";
$pgv_lang["created_places_fail"]	= "Die Tabelle <i>Places</i> konnte nicht erstellt werden.";
$pgv_lang["created_placelinks"]		= "Die Tabelle <i>Place links</i> wurde erstellt.";
$pgv_lang["created_placelinks_fail"]	= "Die <i>Place links</i> Tabelle konnte nicht erstellt werden.";
$pgv_lang["created_media_fail"]		= "Die Tabelle <i>Media</i> konnte nicht erstellt werden.";
$pgv_lang["created_media_mapping_fail"]	= "Die Tabelle <i>Media mappings</i> konnte nicht erstellt werden.";
$pgv_lang["no_thumb_dir"]			= "Das Miniaturbildverzeichnis existiert nicht und konnte auch nicht erstellt werden.";
$pgv_lang["folder_created"]			= "Verzeichnis erstellt";
$pgv_lang["folder_no_create"]		= "Verzeichnis konnte nicht erstellt werden";
$pgv_lang["security_no_create"]		= "Sicherheitshinweis: Die Datei <b><i>index.php</i></b> konnte nicht erstellt werden im Verzeichnis ";
$pgv_lang["security_not_exist"]		= "Sicherheitshinweis: Die Datei <b><i>index.php</i></b> existiert nicht im Verzeichnis ";
$pgv_lang["label_delete"]			= "Löschen";
$pgv_lang["progress_bars_info"]		= "Der Fortschrittsbalken unten zeigt den Fortschritt des Datenimports an. Wenn das angegebene Zeitlimit erreicht ist, wird der Import unterbrochen. Sie können dann auf einen Button «Fortsetzen» klicken. Falls Ihnen dieser Button nicht zugänglich ist, müssen Sie den Datenimport mit einer kleineren Zeitlimit neu starten.";
$pgv_lang["upload_replacement"]		= "Aktualisierte Datei hochladen";
$pgv_lang["about_user"]				= "Sie müssen zunächst den Hauptverwalter erstellen. Dieser Benutzer wird das Recht erhalten, Konfigurationsdateien zu verändern, private Daten einzusehen oder andere Benutzer zu erstellen.";
$pgv_lang["access"]					= "Zugriff";
$pgv_lang["add_gedcom"]				= "GEDCOM-Datei hinzufügen";
$pgv_lang["add_new_gedcom"]			= "Neue GEDCOM-Datei erstellen";
$pgv_lang["add_new_language"]		= "Dateien und Einstellungen für eine neue Sprache hinzufügen";
$pgv_lang["add_user"]				= "Neuen Benutzer hinzufügen";
$pgv_lang["admin_gedcom"]			= "GEDCOM verwalten";
$pgv_lang["admin_gedcoms"]			= "Hier klicken, um GEDCOM-Dateien zu verwalten.";
$pgv_lang["admin_geds"]				= "Daten- und GEDCOM-Verwaltung";
$pgv_lang["admin_info"]				= "zur Information";
$pgv_lang["admin_site"]				= "Webseitenverwaltung";
$pgv_lang["admin_user_warnings"]	= "Es sind Warnhinweise zu Benutzern vorhanden";
$pgv_lang["admin_verification_waiting"]	= "Offene Anträge für Benutzerzugang";
$pgv_lang["administration"]			= "Verwaltung";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]	= "Zugang zu mehreren GEDCOM-Dateien freigeben";
$pgv_lang["ALLOW_USER_THEMES"]		= "Besuchern die Auswahl eines Themas erlauben";
$pgv_lang["ansi_encoding_detected"]	= "ANSI-Codierung der Datei entdeckt. PhpGedView arbeitet nur optimal mit Dateien im UTF-8 Zeichensatz.";
$pgv_lang["ansi_to_utf8"]			= "Soll diese ANSI-codierte GEDCOM-Datei in den UTF-8 Zeichensatz konvertiert werden?";
$pgv_lang["apply_privacy"]			= "Datenschutzeinstellungen verwenden?";
$pgv_lang["back_useradmin"]			= "Zurück zur Benutzerverwaltung";
$pgv_lang["bytes_read"]				= "Gelesene Bytes:";
$pgv_lang["can_admin"]				= "darf verwalten";
$pgv_lang["can_edit"]				= "Zugriffsrechte";
$pgv_lang["change_id"]				= "Persönliche ID ändern in:";
$pgv_lang["choose_priv"]			= "Datenschutzgrad wählen:";
$pgv_lang["cleanup_places"]			= "Ortsangaben korrigieren";
$pgv_lang["cleanup_users"]			= "Benutzerliste bearbeiten";
$pgv_lang["click_here_to_continue"]	= "Hier klicken, um fortzufahren.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Hier klicken, um zum Stammbaum zu gelangen.";
$pgv_lang["comment"]				= "Bemerkungen des Verwalters zu diesem Benutzer";
$pgv_lang["comment_exp"]			= "Verwalter erinnern am Datum";
$pgv_lang["config_help"]			= "Hilfe zur Konfiguration";
$pgv_lang["config_still_writable"]	= "Für die Datei <i>config.php</i> bestehen noch Schreibrechte. Wenn die Konfiguration beendet ist, sollten Sie die Rechte sicherheitshalber wieder auf Nur-Lesen setzen.";
$pgv_lang["configuration"]			= "Konfiguration";
$pgv_lang["configure"]				= "PhpGedView konfigurieren";
$pgv_lang["configure_head"]			= "PhpGedView Konfiguration";
$pgv_lang["confirm_gedcom_delete"]	= "Möchten Sie diese GEDCOM-Datei wirklich löschen";
$pgv_lang["confirm_user_delete"]	= "Möchten Sie den Benutzer wirklich löschen";
$pgv_lang["create_user"]			= "Benutzer erstellen";
$pgv_lang["current_users"]			= "Benutzerliste";
$pgv_lang["daily"]					= "Täglich";
$pgv_lang["dataset_exists"]			= "Eine GEDCOM-Datei mit diesem Namen wurde bereits in die Datenbank importiert.";
$pgv_lang["unsync_warning"]			= "Diese GEDCOM-Datei ist <em>nicht</em> mit der Datenbank synchronisiert.  Es ist möglich, dass die GEDCOM-Datei nicht alle aktuellen Daten enthält.  Um die Daten der Datenbank neu zu importieren, müssen Sie die Datenbank als GEDCOM exportieren, und dann die so heruntergeladene Datei neu auf den Server hochladen.";
$pgv_lang["date_registered"]		= "Datum der Registrierung";
$pgv_lang["day_before_month"]		= "Tag vor Monat (DD MM YYYY)";
$pgv_lang["DEFAULT_GEDCOM"]			= "Voreingestellte GEDCOM-Datei";
$pgv_lang["default_user"]			= "Erstellen Sie den Hauptverwalter.";
$pgv_lang["del_gedrights"]			= "GEDCOM-Datei nicht mehr vorhanden, Benutzerverweise dazu löschen.";
$pgv_lang["del_proceed"]			= "Fortsetzen";
$pgv_lang["del_unvera"]				= "Vom Verwalter unbestätigter Benutzer";
$pgv_lang["del_unveru"]				= "Anmeldungsantrag nicht selbst bestätigt";
$pgv_lang["do_not_change"]			= "Nicht ändern";
$pgv_lang["download_gedcom"]		= "GEDCOM-Datei herunterladen";
$pgv_lang["download_here"]			= "Hier klicken um Datei herunterzuladen";
$pgv_lang["download_note"]			= "ANMERKUNG: Große Datenbanken benötigen vor dem Herunterladen u.U. eine längere Berechnungszeit. Wenn dabei ein PHP-Timeout auftritt, ist die Datei vermutlich nicht vollständig.<br /><br />Prüfen Sie daher, ob die heruntergeladene Datei im GEDCOM-Format in der letzten Zeile <b>0&nbsp;TRLR</b> enthält. Dateien im XML-Format enthalten als letzte Zeile <b>&lt;/database&gt;</b>. Diese Dateien sind Textdateien, die mit einem einfachen Texteditor geöffnet werden können. Aber achten Sie darauf, die Datei nach dem Öffnen <u>nicht</u> zu speichern.<br /><br />Üblicherweise benötigt das Herunterladen etwa ebensolang wie der Importvorgang.";
$pgv_lang["editaccount"]			= "Benutzer darf seine eigenen Benutzerdaten ändern";
$pgv_lang["empty_dataset"]			= "Möchten Sie den alten Datensatz löschen und durch diese neue Daten ersetzen?";
$pgv_lang["empty_lines_detected"]	= "In der GEDCOM-Datei wurden Leerzeilen entdeckt. Beim Korrigieren werden diese Zeilen entfernt.";
$pgv_lang["enable_disable_lang"]	= "Einstellungen für unterstützte Sprachen";
$pgv_lang["error_ban_server"]		= "Ungültige IP Adresse.";
$pgv_lang["error_delete_person"]	= "Sie müssen die Person wählen, dessen ferne Verbindung Sie löschen möchten.";
$pgv_lang["error_header_write"]		= "Die GEDCOM-Datei <b>#GEDCOM#</b> kann nicht gespeichert werden. Bitte prüfen Sie die Schreibrechte und Dateiattribute.";
$pgv_lang["error_remove_site"]		= "Der Eintrag konnte nicht gelöscht werden.";
$pgv_lang["error_remove_site_linked"]	= "Der Eintrag konnte nicht gelöscht werden weil die Verbindungsliste nicht leer ist.";
$pgv_lang["error_remote_duplicate"]	= "Diese ferne Datenbank ist schon als <i>#GLOBALS[whichFile]#</i> bekannt.";
$pgv_lang["error_siteauth_failed"]	= "Die ferne Datenbank hat dem Zugriff nicht zugesagt.";
$pgv_lang["error_url_blank"]		= "Bitte lassen Sie nicht den Titel oder die Adresse der fernen Datenbank leer.";
$pgv_lang["error_view_info"]		= "Sie müssen die Person wählen, dessen Informationen Sie sehen möchten.";
$pgv_lang["example_date"]			= "Beispiel eines ungültigen Datums aus Ihrer GEDCOM-Datei:";
$pgv_lang["example_place"]			= "Beispiel eines ungültigen Ortes aus Ihrer GEDCOM-Datei:";
$pgv_lang["fbsql"]					= "FrontBase";
$pgv_lang["found_record"]			= "Datensatz gefunden";
$pgv_lang["ged_download"]			= "Herunterladen";
$pgv_lang["ged_import"]				= "Import";
$pgv_lang["ged_export"] 			= "Export";
$pgv_lang["ged_check"]				= "Verifizieren";
$pgv_lang["gedcom_adm_head"]		= "GEDCOM-Verwaltung";
$pgv_lang["gedcom_config_write_error"]	= "F E H L E R !!!<br />Die Datei <i>#GLOBALS[whichFile]#</i> konnte nicht geschrieben werden.  Bitte prüfen Sie, ob diese Datei die richtigen Schreib-Rechte hat.";
$pgv_lang["gedcom_downloadable"]	= "Diese GEDCOM-Datei könnte über das Internet heruntergeladen werden!<br />Bitte lesen Sie im Bereich «SECURITY» der Datei <a href=\"readme.txt\"><b>readme.txt</b></a> nach, wie Sie dieses Problem vermeiden können.";
$pgv_lang["gedcom_file"]			= "GEDCOM-Datei:";
$pgv_lang["gedcom_not_imported"]	= "Diese GEDCOM-Datei wurde noch nicht importiert.";
$pgv_lang["ibase"]					= "InterBase";
$pgv_lang["ifx"]					= "Informix";
$pgv_lang["img_admin_settings"]		= "Bild-Veränderungs-Konfiguration bearbeiten";
$pgv_lang["autoContinue"]			= "«Fortsetzen» Button automatisch drücken";
$pgv_lang["import_complete"]		= "Import beendet";
$pgv_lang["import_options"]			= "Import Optionen";
$pgv_lang["import_progress"]		= "Import Fortschritt...";
$pgv_lang["import_statistics"]		= "Import Statistiken";
$pgv_lang["import_time_exceeded"]	= "Die maximale Ausführungszeit wurde erreicht. Drücken Sie unten den <b>Fortsetzen</b> Button zur Wiederaufnahme der Einfuhr der GEDCOM-Datei.";
$pgv_lang["inc_languages"]			= " Sprachen";
$pgv_lang["INDEX_DIRECTORY"]		= "Verzeichnis der Index-Dateien";
$pgv_lang["invalid_dates"]			= "Ungültige Datums Formate entdeckt. Diese werden bei der Korrektur in das von GEDCOM 5.5 erforderliche Format DD MMM YYYY (z.B. 1 JAN 2004) geändert.";
$pgv_lang["BOM_detected"]			= "Byte Order Mark (BOM-Zeichen) am Anfang der Datei entdeckt.  Bei der Korrektur wird das besondere Zeichen entfernt.";
$pgv_lang["invalid_header"]			= "In der Datei wurden Zeilen vor dem GEDCOM-Header <b>0&nbsp;HEAD</b> entdeckt. Beim Korrigieren werden diese Zeilen gelöscht.";
$pgv_lang["label_added_servers"]	= "Fremde Server";
$pgv_lang["label_banned_servers"]	= "Internetseiten entsprechend deren Adressen abweisen";
$pgv_lang["label_families"]			= "Familien";
$pgv_lang["label_gedcom_id2"]		= "Datenbank ID:";
$pgv_lang["label_individuals"]		= "Personen";
$pgv_lang["label_manual_search_engines"]	= "Manuelles Markieren der IP für Suchmaschinen";
$pgv_lang["label_new_server"]		= "Neuen Server hinzufügen";
$pgv_lang["label_password_id"]		= "Kennwort";
$pgv_lang["label_server_info"]		= "Alle Personen und Familien, die durch diesen Server verbunden sind: ";
$pgv_lang["label_server_url"]		= "URL oder IP Adresse des fremden Servers";
$pgv_lang["label_username_id"]		= "Benutzername";
$pgv_lang["label_view_local"]		= "Hiesige Informationen dieser Person zeigen";
$pgv_lang["label_view_remote"]		= "Ferne Informationen dieser Person zeigen";
$pgv_lang["LANG_SELECTION"]			= "Unterstützte Sprachen";
$pgv_lang["LANGUAGE_DEFAULT"]		= "Sie haben noch nicht die Liste der bei Ihrer Seite unterstützten Sprachen konfiguriert.  PhpGedView benutzt deshalb die Standard-Liste.";
$pgv_lang["last_login"]				= "Letzte Anmeldung";
$pgv_lang["lasttab"]				= "Zuletzt benutztes Register auf der Personendetails-Seite";
$pgv_lang["leave_blank"]			= "Kennwort leer lassen, um das aktuelle Kennwort beizubehalten.";
$pgv_lang["link_manage_servers"]	= "Internetseiten verwalten";
$pgv_lang["logfile_content"]		= "Inhalt der Logdatei";
$pgv_lang["macfile_detected"]		= "Macintosh Datei erkannt. Beim Korrigieren wird Ihre Datei ins DOS Format konvertiert.";
$pgv_lang["mailto"]					= "Mail";
$pgv_lang["merge_records"]			= "Datensätze zusammenfügen";
$pgv_lang["message_to_all"]			= "Allen Benutzern eine Nachricht senden";
$pgv_lang["messaging"]				= "Interne Nachrichten-Funktion von PhpGedView";
$pgv_lang["messaging2"]				= "Interne Nachrichten-Funktion und Mail";
$pgv_lang["messaging3"]				= "PhpGedView sendet Mails ohne sie zu speichern";
$pgv_lang["month_before_day"]		= "Monat vor Tag (MM DD YYYY)";
$pgv_lang["monthly"]				= "Monatlich";
$pgv_lang["msql"]					= "Mini SQL";
$pgv_lang["mssql"]					= "Microsoft SQL server";
$pgv_lang["mysql"]					= "MySQL";
$pgv_lang["never"]					= "Nie";
$pgv_lang["no_logs"]				= "Logging deaktivieren";
$pgv_lang["no_messaging"]			= "keine Nachrichten-Funktion";
$pgv_lang["oci8"]					= "Oracle 7+";
$pgv_lang["page_views"]				= "&nbsp;&nbsp;Seiten innerhalb&nbsp;&nbsp;";
$pgv_lang["performing_validation"]	= "GEDCOM Überprüfung wird durchgeführt, bitte wählen Sie die gewünschten Optionen und klicken Sie auf <b>Korrigieren</b>";
$pgv_lang["pgsql"]					= "PostgreSQL";
$pgv_lang["pgv_config_write_error"]	= "Fehler!!! Die PhpGedView-Konfigurationsdatei kann nicht geschrieben werden. Bitte Lese- und Schreib-Berechtigungen überprüfen und neu versuchen.";
$pgv_lang["PGV_MEMORY_LIMIT"]		= "Max. Speicher Begrenzung";
$pgv_lang["PGV_SESSION_SAVE_PATH"]	= "Pfad für die Session-Speicherung";
$pgv_lang["PGV_SESSION_TIME"]		= "Session timeout";
$pgv_lang["PGV_SIMPLE_MAIL"]		= "Einfache Mail-Header bei Mails verwenden";
$pgv_lang["PGV_SMTP_ACTIVE"] 		= "Mails durch SMTP senden";
$pgv_lang["PGV_SMTP_HOST"] 			= "Name des SMTP Servers";
$pgv_lang["PGV_SMTP_HELO"] 			= "Sendentes Domain";
$pgv_lang["PGV_SMTP_PORT"] 			= "TCP Port (SMTP)";
$pgv_lang["PGV_SMTP_AUTH"] 			= "Name und Kennwort benutzen";
$pgv_lang["PGV_SMTP_AUTH_USER"] 	= "Name";
$pgv_lang["PGV_SMTP_AUTH_PASS"] 	= "Kennwort";
$pgv_lang["PGV_SMTP_SSL"] 			= "Gesicherte (SSL) Verbindung";
$pgv_lang["PGV_SMTP_FROM_NAME"] 	= "Absender";
$pgv_lang["PGV_STORE_MESSAGES"]		= "Erlauben Nachrichten online zu speichern";
$pgv_lang["phpinfo"]				= "PHP Informationen";
$pgv_lang["place_cleanup_detected"]	= "Ungültige Orts Angaben entdeckt. Diese Fehler sollten behoben werden. Beispiel einer ungültigen Ortsangabe:";
$pgv_lang["please_be_patient"]		= "Etwas Geduld, bitte";
$pgv_lang["privileges"]				= "Rechte";
$pgv_lang["reading_file"]			= "GEDCOM-Datei wird gelesen";
$pgv_lang["readme_documentation"]	= "README Datei / Dokumentation";
$pgv_lang["remove_ip"]				= "IP entfernen";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"]	= "Verwalterzustimmung zu neuen Benutzeranträgen erforderlich";
$pgv_lang["review_readme"]			= "Sie sollten zunächst die Datei <a href='readme.txt' target='_blank'>readme.txt</a> durchlesen, bevor Sie die Konfiguration von PhpGedView fortsetzen.<br /><br />";
$pgv_lang["seconds"]				= "&nbsp;&nbsp;Sekunden";
$pgv_lang["select_an_option"]		= "Wählen Sie bitte eine der unten aufgeführten Optionen:";
$pgv_lang["SERVER_URL"]				= "PhpGedView URL";
$pgv_lang["show_phpinfo"]			= "PHPInfo-Seite zeigen";
$pgv_lang["siteadmin"]				= "Verwalter";
$pgv_lang["sqlite"]					= "SQLite";
$pgv_lang["sybase"]					= "Sybase";
$pgv_lang["sync_gedcom"]			= "Benutzer Einstellungen mit den GEDCOM Daten synchronisieren";
$pgv_lang["system_time"]			= "Aktuelle Zeit des Systems:";
$pgv_lang["user_time"]				= "Aktuelle Zeit beim Benutzer:";
$pgv_lang["TBLPREFIX"]				= "Präfix der Datenbank Tabellennamen";
$pgv_lang["themecustomization"]		= "Anpassung der Theme";
$pgv_lang["time_limit"]				= "Zeitbeschränkung:";
$pgv_lang["title_manage_servers"]	= "Fremde Server verwalten";
$pgv_lang["title_view_conns"]		= "Verbindungen zeigen";
$pgv_lang["translator_tools"]		= "Übersetzertool";
$pgv_lang["update_myaccount"]		= "Meine Benutzerdaten bearbeiten";
$pgv_lang["update_user"]			= "Benutzerdaten bearbeiten";
$pgv_lang["upload_gedcom"]			= "GEDCOM-Datei auf Ihren Server laden (upload)";
$pgv_lang["USE_REGISTRATION_MODULE"]	= "Besuchern erlauben, einen Zugang anzufordern";
$pgv_lang["user_auto_accept"]		= "Alle Änderungen dieses Benutzers automatisch annehmen";
$pgv_lang["user_contact_method"]	= "Bevorzugte Kontaktaufnahme";
$pgv_lang["user_create_error"]		= "Der Benutzer konnte nicht angelegt werden. Bitte nochmal versuchen.";
$pgv_lang["user_created"]			= "Benutzer wurde angelegt.";
$pgv_lang["user_default_tab"]		= "Defaultregister der Personen-Informationsseite";
$pgv_lang["user_path_length"]		= "Max. Länge des Pfads der Datenschutzermittlung";
$pgv_lang["user_relationship_priv"]	= "Zugang nur Verwandten erlauben";
$pgv_lang["users_admin"]			= "Verwalter der Seite";
$pgv_lang["users_gedadmin"]			= "GEDCOM-Verwalter";
$pgv_lang["users_total"]			= "Gesamtanzahl der Benutzer";
$pgv_lang["users_unver"]			= "Noch nicht selbstbestätigt";
$pgv_lang["users_unver_admin"]		= "Noch nicht vom Verwalter bestätigt";
$pgv_lang["usr_deleted"]			= "Gelöschter Benutzer:";
$pgv_lang["usr_idle"]				= "Monate seit dem letzten Zugriff des Benutzers nach denen dieser Benutzer als nicht mehr tätig erkannt wird: ";
$pgv_lang["usr_idle_toolong"]		= "Dieser Benutzer ist nicht mehr aktiv: ";
$pgv_lang["usr_no_cleanup"]			= "Nichts zum Bereinigen gefunden";
$pgv_lang["usr_unset_gedcomid"]		= "GEDCOM ID-Nummer löschen für ";
$pgv_lang["usr_unset_rights"]		= "GEDCOM Zugriffsrechte löschen für ";
$pgv_lang["usr_unset_rootid"]		= "Ausgangs-Nummer löschen für ";
$pgv_lang["valid_gedcom"]			= "Fehlerlose GEDCOM-Datei erkannt. Keine Korrektur notwendig.";
$pgv_lang["validate_gedcom"]		= "GEDCOM-Datei überprüfen";
$pgv_lang["verified"]				= "Benutzer hat sich selber verifiziert";
$pgv_lang["verified_by_admin"]		= "Benutzer wurde vom Verwalter freigegeben";
$pgv_lang["verify_gedcom"]			= "GEDCOM prüfen";
$pgv_lang["verify_upload_instructions"]	= "Eine gleichnamige GEDCOM-Datei existiert bereits. Wenn Sie fortfahren, wird die alte GEDCOM-Datei durch die neu hochgeladene Datei ersetzt und der Import-Prozess beginnt erneut. Wenn Sie abbrechen, bleibt die alte GEDCOM-Datei unverändert.";
$pgv_lang["view_changelog"]			= "Datei changelog.txt ansehen";
$pgv_lang["view_logs"]				= "Log Dateien ansehen";
$pgv_lang["view_readme"]			= "Datei readme.txt ansehen";
$pgv_lang["visibleonline"]			= "Für andere Benutzer sichtbar, wenn angemeldet";
$pgv_lang["visitor"]				= "Besucher";
$pgv_lang["warn_users"]				= "Verwarnte Benutzer";
$pgv_lang["weekly"]					= "Wöchentlich";
$pgv_lang["welcome_new"]			= "Willkommen auf Ihrer neuen PhpGedView-Website.";
$pgv_lang["yearly"]					= "Jährlich";
$pgv_lang["admin_OK_subject"]		= "Zugangserlaubnis bei #SERVER_NAME#";
$pgv_lang["admin_OK_message"]		= "Der Verwalter von PhpGedView bei #SERVER_NAME# hat Ihren Zugangsantrag erlaubt.  Sie können sich jetzt mit dem folgenden Link anmelden:\r\n\r\n#SERVER_NAME#\r\n";

$pgv_lang["batch_update"]			= "Ihre Datenbank mittels Stapelverarbeitung aktualisieren oder ändern";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]				= "GEDCOM Verifizierungs-Modul";
$pgv_lang["gedcheck_text"]			= "Dieses Modul verifiziert GEDCOM Dateien gegen den <a href='http://phpgedview.sourceforge.net/ged551-5.pdf'>GEDCOM 5.5.1 Standard</a>.  Es sucht auch nach oft vorkommenden Fehlern.<br /><br />Bitte beachten Sie, dass viele Programme den GEDCOM 5.5.1 Standard erweitert haben.  Deshalb sollten Sie sich zuerst nur mit «kritischen» Fehlern befassen.  Den Grund der meisten Fehlermeldungen können Sie durch gündliches Lesen des Standards ermitteln.  Wenn absolut notwending, können Sie auch Ihre Fragen im <a href='https://sourceforge.net/forum/forum.php?forum_id=185166'>Help-Forum</a> stellen.";
$pgv_lang["gedcheck_sync"]			= "Die GEDCOM-Datei #GLOBALS[ged]# ist nicht mit der Datenbank synchronisiert;  die Datei ist womöglich nicht aktuell.  Sie können die Datei aktualisieren indem Sie die Datenbank jetzt <b><a \"#GLOBALS[ged_link]#\">exportieren</a></b>.";
$pgv_lang["gedcheck_nothing"]		= "Keine Fehler gefunden.";
$pgv_lang["level"]					= "Level";
$pgv_lang["critical"]				= "Kritisch";
$pgv_lang["error"]					= "Fehler";
$pgv_lang["warning"]				= "Warnung";
$pgv_lang["info"]					= "Information";
$pgv_lang["open_link"]				= "Links öffnen im ...";
$pgv_lang["same_win"]				= "selbes Fenster/Register";
$pgv_lang["new_win"]				= "neues Fenster/Register";
$pgv_lang["context_lines"]			= "Zusammenhang in der GEDCOM-Datei";
$pgv_lang["all_rec"]				= "Alle Datensätze";
$pgv_lang["err_rec"]				= "Fehlerhafte Datensätze";
$pgv_lang["missing"]				= "fehlend";
$pgv_lang["multiple"]				= "mehrmals vorkommend";
$pgv_lang["invalid"]				= "ungültig";
$pgv_lang["too_many"]				= "zu viele";
$pgv_lang["too_few"]				= "zu wenige";
$pgv_lang["no_link"]				= "Rückverbindung fehlt";
$pgv_lang["data"]					= "Daten";
$pgv_lang["see"]					= "zeigen";
$pgv_lang["noref"]					= "Dieser Datensatz ist nirgends verbunden -- er ist eigenständig.";
$pgv_lang["tag"]					= "GEDCOM-Tag";
$pgv_lang["spacing"]				= "Abstand";
$pgv_lang["ADVANCED_NAME_FACTS"]	= "Besondere Namens-Fakten";
$pgv_lang["ADVANCED_PLAC_FACTS"]	= "Besondere Ortsnamen-Fakten";
$pgv_lang["SURNAME_TRADITION"]		= "Nachnamens-Tradition";
$pgv_lang["tradition_spanish"]		= "spanische";
$pgv_lang["tradition_portuguese"]	= "portugiesische";
$pgv_lang["tradition_icelandic"]	= "isländische";
$pgv_lang["tradition_paternal"]		= "väterliche";
$pgv_lang["tradition_polish"]		= "polnische";
$pgv_lang["tradition_none"]			= "keine";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]	=	"1 Jahr";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# Jahren";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# Jahren";
$pgv_lang["elapsedMonth1"]	=	"1 Monat";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# Monaten";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# Monaten";
$pgv_lang["elapsedDay1"]	=	"1 Tag";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# Tagen";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# Tagen";
$pgv_lang["elapsedHour1"]	=	"1 Stunde";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# Stunden";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# Stunden";
$pgv_lang["elapsedMinute1"]	=	"1 Minute";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# Minuten";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# Minuten";

$pgv_lang["elapsedAgo"]		=	"vor #pgv_lang[global_string1]#";

?>
