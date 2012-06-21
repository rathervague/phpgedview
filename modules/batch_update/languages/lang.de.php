<?php
/**
 * German Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2010  PGV Development Team. All rights reserved.
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
 * @package PhpGedView
 * @subpackage BatchUpdate
 * @version $Id: lang.de.php 6931 2010-02-12 20:45:23Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]="Stapel-Bearbeitung";
$pgv_lang["bu_update_chan"]="Alle CHAN (letzte Änderung) Daten aktualisieren";
$pgv_lang["bu_nothing"]="Nichts gefunden.";
$pgv_lang["bu__desc"]="Bitte wählen Sie eine dieser Stapel-Bearbeitungen.";
$pgv_lang["bu_button_update"]="Bearbeiten";
$pgv_lang["bu_button_update_all"]="Alles bearbeiten";
$pgv_lang["bu_button_delete"]="Löschen";
$pgv_lang["bu_button_delete_all"]="Alles löschen";

$pgv_lang["bu_search_replace"]="Suchen und Ersätzen";
$pgv_lang["bu_search_replace_desc"]="Daten in Ihrer Datenbank, einfachen oder komplizierten Regeln folgend, suchen oder ersetzen.";
$pgv_lang["bu_search"]="Such-Regel oder -Text";
$pgv_lang["bu_replace"]="Ersatz-Text";
$pgv_lang["bu_method"]="Such-Methode";
$pgv_lang["bu_exact"]="Genauer Text";
$pgv_lang["bu_exact_desc"]="Genauer Text, selbst wenn dieser mitten im Wort vorkommt.";
$pgv_lang["bu_words"]="Genaues Wort";
$pgv_lang["bu_words_desc"]="Genauer Text, wenn dieser nicht mitten im Wort vorkommt.";
$pgv_lang["bu_wildcards"]="Wildcards";
$pgv_lang["bu_wildcards_desc"]="&laquo;?&raquo; ist einem einzelnen beliebigen Zeichen gleich; &laquo;*&raquo; ist einem oder mehreren beliebigen Zeichen gleich.";
$pgv_lang["bu_regex"]="Regulärer Ausdruck";
$pgv_lang["bu_regex_desc"]="Reguläre Ausdrücke sind Muster die dem komplizierten Durchsuchen von Texten dienen.  Bitte wenden Sie sich and die <a href='http://php.net/manual/de/regexp.reference.php' target='_new'>php.net/manual/de/regexp.reference.php</a> Webseite um mehr Auskunft ûber dieses Thema zu erhalten.";
$pgv_lang["bu_regex_bad"]="Dieser reguläre Ausdruck (regex) enthält Fehler und ist deshalb nicht brauchbar.";
$pgv_lang["bu_case"]="Groß- und Kleinschrift nicht berücksichtigen";
$pgv_lang["bu_case_desc"]="Dieses Kästchen ankreuzen, um groß und kleingeschriebene Buchstaben beim Suchen gleich zu behandeln.";

$pgv_lang["bu_birth_y"]="Fehlende BIRT (Geburt) Datensätze hinzufügen";
$pgv_lang["bu_birth_y_desc"]="PhpGedView kann womöglich etwas schneller laufen, wenn alle Personen ein &laquo;Lebensanfang&raquo; Ereignis haben.";

$pgv_lang["bu_death_y"]="Fehlende DEAT (Tod) Datensätze hinzufügen";
$pgv_lang["bu_death_y_desc"]="PhpGedView kann womöglich etwas schneller laufen, wenn alle verstorbene Personen ein &laquo;Lebensende&raquo; Ereignis haben.";

$pgv_lang["bu_married_names"]="Fehlende Ehenamen hinzufügen";
$pgv_lang["bu_married_names_desc"]="Das Suchen nach verheirateten Frauen kann erleichtert werden, wenn die Datenbank nicht nur Geburtsnamen sondern auch Ehenamen enthält.<br />Da nicht alle verheiratete Frauen den Nachnamen des Gatten nehmen, sollten Sie diese Option vielleicht nicht benutzen;  Sie könnten dadurch falsche Daten in Ihre Datenbank einfügen.";
$pgv_lang["bu_surname_option"]="Nachnamen-Behandlung";
$pgv_lang["bu_surname_replace"]="Nachname der Frau mit dem des Gatten ersetzen";
$pgv_lang["bu_surname_add"]="Geburtsname der Frau als Vorname behalten, und Nachname des Gattens auch als Nachname der Frau benutzen";

$pgv_lang["bu_name_format"]="Schräg- und Leerzeichen in Namen korrigieren";
$pgv_lang["bu_name_format_desc"]="Fehlerhafte NAME Datensätze, wie zum Beispiel 'Hans/Müller/' oder 'Hans /Müller', korrigieren.";

$pgv_lang["bu_duplicate_links"]="Doppelte Verbindungen löschen";
$pgv_lang["bu_duplicate_links_desc"]="Oft vorkommende Fehler sind mehrfache Verbindungen zwischen den selben Datensätzen.  Zum Beispiel, ein Kind das mehr als einmal in der selben Familie eingetragen ist.";

$pgv_lang["bu_tmglatlon"]="TMG Breiten- und Längengrade korrigieren";
$pgv_lang["bu_tmglatlon_desc"]="Das Programm &laquo;The Master Genealogist&raquo; (TMG) benutzt Breiten- und Längengrade die nicht dem GEDCOM 5.5.1 Standard, dem PhpGedView sich anpaßt, entsprechen.  Bitte beachten Sie, daß diese Korrekturen nicht in den unten stehenden Änderungen gezeigt werden.";
?>
