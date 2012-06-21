<?php
/**
 * German Language file for PhpGedView.
 *
 * PhpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team. All rights reserved.
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
 * @subpackage GoogleMap
 * @translator Christian Helms
 * @translator Gerd Kroll
 * @version $Id: help_text.de.php 3893 2008-09-20 16:54:32Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_CONFIG"]           = "Googlemap konfigurieren";
$pgv_lang["GOOGLEMAP_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />Hier konfigurieren Sie alle Aspekte des Modul Googlemap.";

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Kartendarstellung aktivieren";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "Kartendarstellung aktivieren<br /><br />Diese Option aktiviert oder deaktiviert die Kartendarstellung mit Google-Map.<br />Bei deaktivierter Kartendarstellung bleibt der Karteireiter für die Kartendarstellung zwar leer, der Link um die Darstellung zu verwalten ist aber weiterhin aktiv.";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Google-Map API Schlüssel";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "Google-Map API Schlüssel<br /><br />Tragen Sie hier Ihren Google-Map API Schlüssel (key) ein. Den Schlüssel bekommen Sie auf folgendem URL: <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\" title=\"Hier klicken, um Google-Map Key zu beantragen\">http://www.google.com/apis/maps/</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]	        = "Standard Kartentyp";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "Standard Kartentyp<br /><br />Darstellungstyp der Karte, die normalerweise angezeigt wird. Das ist entweder Straßenkarte, Satellitenfoto oder Kombination.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]	        = "Größe der Karte";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "Größe der Karte<br /><br />Die Abmessungen der Karte (in Pixel), so, wie sie auf der Personenseite gezeigt wird.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]	        = "Zoomfaktor der Karte";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "Zoomfaktor der Karte<br /><br />Kleinster und größter Zoomfaktor der Karte. 1 zeigt die gesamte Erde, 15 zeigt einzelne Häuser. Achtung: Stufe 15 wird von Google noch nicht an allen Orten angeboten!";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Genauigkeit der Breiten- und Längengrade";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "Genauigkeit der Breiten- und Längengrade<br /><br />Hier wird die Genauigkeit (Nachkommastellen) für die jeweilige Hierarchiestufe bestimmt, wenn ein neuer geografischer Ort eingetragen wird. Beispielweise könnte für ein Land (DEU) die Genauigkeit '1' ( = eine Nachkommastelle) eingestellt werden, wogegen eine Stadt 4 oder 5 Stellen benötigt.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Standardwert für oberste Stufe";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "Standardwert für oberste Stufe<br /><br />Hier wird der Standardwert der Genauigkeit für die höchste Stufe in der Orte-Hierarchie bestimmt werden. Wenn ein Ort in der Datenbank nicht gefunden wird, wird sein Name als höchste Stufe (Staat) eingetragen und die Datenbank erneut durchsucht.";

$pgv_lang["GM_NOF_LEVELS"]              = "Anzahl der Stufen, die von Googlemap benutzt werden";
$pgv_lang["GM_NOF_LEVELS_help"]         = "Anzahl der Stufen, die von Googlemap benutzt werden<br /><br />Dieser Wert gibt an, wieviel Stufen in der Orte-Hierarchie von Googlemap genutzt werden.<br />Der Standardwert ist 4 (Staat, Bundesland, State, Kreis / Kreisfreie Stadt, Ort), was im Normalfall ausreicht. Ändern Sie diesen Wert, wenn Sie zusätzliche Stufen (wie z. B. Straßenangaben, Schulen oder Friedhöfe) nutzen wollen. Falls Sie eine Stufe entfernen, muss dieser Wert ebenfalss angepasst werden. Denken Sie aber daran, dass die Datei mit den Ortsdaten eine 4-stufige Struktur hat!";

$pgv_lang["GM_NAME_PREFIX"]             = "Präfix für Namen auf dieser Stufe";
$pgv_lang["GM_NAME_PREFIX_help"]        = "Präfix für Namen auf dieser Stufe<br /><br />Dieser Wert wird allen Namen dieser Stufe vorangestellt. Es können mehrere Werte, durch Semikola getrennt, verwendet werden";

$pgv_lang["GM_NAME_POSTFIX"]            = "Suffix für Namen auf dieser Stufe";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "Suffix für Namen auf dieser Stufe<br /><br />Dieser Wert wird allen Namen dieser Stufe angehängt. Es können mehrere Werte, durch Semikola getrennt, verwendet werden";

$pgv_lang["GM_NAME_PRE_POST"]           = "Reihenfolge für den Gebrauch von Präfix / Suffix.";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "Reihenfolge für den Gebrauch von Präfix / Suffix.<br /><br />Dieses Feld bezeichnet die Reihenfolge, in der die Präfixe / Suffixe bei den Namen angewendet werden sollen. Mögliche Werte:<br /><ul><li>Kein Präfix / Suffix</li><li>Normaler Name, Präfix, Suffix, beide</li><li>Normaler Name, Suffix, Präfix, beidet</li><li>Präfix, Suffix, beide, normaler Name</li><li>Suffix, Präfix, beide, normaler Name</li><li>Präfix, Suffix, normaler Name, beide</li><li>Suffix, Präfix, normaler Name, beide</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Ortsdaten bearbeiten oder löschen";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "Ortsdaten bearbeiten oder löschen<br /><br />Hier können Sie die Ortsdaten ändern oder löschen. Ein Klick auf 'bearbeiten' öffnet ein neues Bearbeitungsfenster für die geografischen Ortsdaten.<br />Ein Klick auf 'löschen' ist nur möglich, wenn keine anderen Orte unterhalb dieser Hierarchie definiert sind.";

$pgv_lang["PL_ADD_LOCATION"]            = "Ortsdaten hinzufügen";
$pgv_lang["PL_ADD_LOCATION_help"]       = "Ortsdaten hinzufügen<br /><br />Hiermit können Sie einen Ort in die Ortetabelle eintragen. Der Ort wird auf der aktuellen Hierarchiestufe hinzugefügt!";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Geografische Ortsdaten aus GEDCOM importieren";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "Geografische Ortsdaten aus GEDCOM importieren<br /><br />Die aktuelle GEDCOM-Datei wird durchsucht und alle Orte werden in die Orte-Tabelle eingetragen. Soweit Breiten- und Längengrade vorhanden sind, werden diese auch importiert.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Geografische Ortsdaten aus allen GEDCOM importieren";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "Geografische Ortsdaten aus allen GEDCOM importieren<br /><br />Alle GEDCOM-Dateien werden durchsucht und alle Orte werden in die Orte-Tabelle eingetragen. Soweit Breiten- und Längengrade vorhanden sind, werden diese auch importiert.";

$pgv_lang["PL_IMPORT_FILE"]             = "Geografische Ortsdaten aus Datei importieren";
$pgv_lang["PL_IMPORT_FILE_help"]        = "Geografische Ortsdaten aus Datei importieren<br /><br />Die Datei muß als CSV-Datei lokal vorliegen. Als Trennzeichen wird ';' (Semikolon) erwartet.";

$pgv_lang["PL_EXPORT_FILE"]             = "Ortsdaten exportieren";
$pgv_lang["PL_EXPORT_FILE_help"]        = "Ortsdaten exportieren<br /><br />Mit dieser Option werden die Ortsdaten der aktuelle Ansicht und aller iht nachgeordneten Hierarchiestufen in eine Datei exportiert. Wenn also z.B. Deutschland ausgewählt ist und alle Bundesländer sichtbar sind, werden die Ortsdaten aller Bundesländer, Kreise/Städte und Gemeinden exportiert.";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Alle Ortsdaten exportieren";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "Alle Ortsdaten exportieren<br /><br />Mit dieser Option werden alle Ortsdaten exportiert und auf den PC heruntergeladen.";

// Help texts for places_edit.php
$pgv_lang["PLE_EDIT"]               	= "Googlemap Orte editieren";
$pgv_lang["PLE_EDIT_help"]              = "~#pgv_lang[PLE_EDIT]#~<br /><br />Hier erfassen, ändern, oder löschen Sie die Orte für das Modul Googlemap.";

$pgv_lang["PLE_PLACES"]                 = "Ortsname";
$pgv_lang["PLE_PLACES_help"]            = "~#pgv_lang[PLE_PLACES]#~<br /><br />Hier kann der Ortsname eingetragen bzw. geändert werden.";

$pgv_lang["PLE_PRECISION"]              = "Genauigkeit";
$pgv_lang["PLE_PRECISION_help"]         = "~#pgv_lang[PLE_PRECISION]#~<br /><br />Hier wird die Detailtiefe (Genauigkeit) der Kartendarstellung eingetragen. Dieser Wert bestimmt die Anzahl der Nachkommastellen für die Längen- und Breitengrade.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Breiten- / Längengrad";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "~#pgv_lang[PLE_LATLON_CTRL]#~<br /><br />Hier können Breiten- und Längengrad eingetragen werden. Zuerst bitte den Bereich (N/S oder O/W) auswählen. Danach den Breiten- oder Längengrad als Dezimalwert eintragen. <br />Der Dezimalwert errechnet sich anhand folgender Formel:<br />Grad_dezimal = ((Sekunden / 60) + Minuten) / 60 + Grad.";

$pgv_lang["PLE_ZOOM"]                   = "Zoomstufe";
$pgv_lang["PLE_ZOOM_help"]              = "~#pgv_lang[PLE_ZOOM]#~<br /><br />Hier wird die Vergrößerungsstufe eingetragen. Der Wert stellt die kleinste Zoomstufe dieses Ortes auf der Karte dar.";

$pgv_lang["PLE_ICON"]                   = "Icon";
$pgv_lang["PLE_ICON_help"]              = "~#pgv_lang[PLE_ICON]#~<br /><br />Hier können Sie ein Icon bestimmen oder entfernen. Mit dem Link kann die Flagge bestimmt werden, die zu diesem Ort angezeigt werden soll.";

$pgv_lang["PLE_FLAGS"]                  = "Flaggen";
$pgv_lang["PLE_FLAGS_help"]             = "~#pgv_lang[PLE_FLAGS]#~<br /><br />Aus dieser Liste wählen Sie das Land aus, aus dessen Flaggen Sie eine auswählen wollen. Wenn keine Flaggen angezeigt werden, sind auch noch keine Flaggen für dieses Land hinterlegt.";

$pgv_lang["PLIF_FILENAME"]              = "Dateiname";
$pgv_lang["PLIF_FILENAME_help"]         = "~#pgv_lang[PLE_FILENAME]#~<br /><br />Durchsuchen Sie Ihren lokalen Computer nach der Datei die Ortsdaten im CSV-Format enthält.";
$pgv_lang["PLIF_LOCALFILE_help"]        = "~#pgv_lang[PLE_FILENAME]#~<br /><br />Wählen Sie aus der Liste der bereits auf dem Server bestehenden Dateien die Datei die Ortsdaten im CSV-Format enthält.";

$pgv_lang["PLIF_CLEAN"]                 = "Bereinigen der Ortsdaten DB";
$pgv_lang["PLIF_CLEAN_help"]            = "~#pgv_lang[PLE_CLEAN]#~<br /><br />Mit dieser Option kann die Ortsdatenbank gelöscht werden. Nur die (zusätzliche) Tabelle mit den Ortsdateninformationen für die Kartendarstellung wird in der Datenbank gelöscht, Die GEDCOM Datei mit ihren Ortsdaten ist davon niocht berührt!";

$pgv_lang["PLIF_UPDATE"]                = "Aktualisieren vorhandener Datensätze";
$pgv_lang["PLIF_UPDATE_help"]           = "~#pgv_lang[PLE_UPDATE]#~<br /><br />Mit dieser Option kann man selektiv nur die vorhandenen Datensätze aktualisieren. Das kann man zum Eintragen der Längen- und Breitengrade von Orten benutzen, die aus einer GEDCOM-Datei importiert wurden. Neue Orte werden nicht in die Datenbank eingefügt.";

$pgv_lang["PLIF_OVERWRITE"]             = "Überschreiben der Ortsdaten";
$pgv_lang["PLIF_OVERWRITE_help"]        = "~#pgv_lang[PLE_OVERWRITE]#~<br /><br />Überschreibt die Ortsdaten in der Datenbank mit den Daten aus der Datei.<br />Diese Option überschreibt Ortsdaten in der DB (Längengrad, Breitengrad, Vergrößerungsstufe und Flagge) mit den Daten aus der Datei, soweit vorhanden. Ist ein Datensatz in der DB noch nicht vorhanden, wird er angelegt, es sei denn, die Option 'Aktualisieren vorhandener Datensätze' ist ausgewählt.";

$pgv_lang["PLE_ACTIVE"]             	= "Liste inaktiver Orte";
$pgv_lang["PLE_ACTIVE_help"]        	= "~#pgv_lang[PLE_ACTIVE]#~<br /><br /><strong>Liste aller Orte in der Googlemap Tabelle, zur Zeit in keiner GEDCOM Datei definiert sind. </strong><br/><br/>Normalerweise werden nur die Orte angezeigt, die <b>sowohl</b> in einer GEDCOM-Datei <b>als auch</b> in der Googlemap-Tabelle definiert sind. <br/><br/>Wenn diese Option aktiviert ist und \"Anzeigen\" wird angeklickt, enthält die Liste ALLE Orte dieser Stufe.<br/><br/>Diese Option wird benutzt, um die Anzeige großer, importierter Listen zu beschleunigen, bei denen noch nicht alle Orte verwendet werden.<br/><br/>ACHTUNG - Mit dieser Option kann die Anzeige großer Listen unter Umständen mehrere Minuten dauern!";

// Help text for placecheck.php
$pgv_lang["GOOGLEMAP_PLACECHECK"] = "Orteüberprüfungswerkzeug";
$pgv_lang["GOOGLEMAP_PLACECHECK_help"] = "~#pgv_lang[GOOGLEMAP_PLACECHECK]#~<br /><br /><strong>This tool</strong> provides a way to compare places in your gedcom file with the matching entries in the googlemaps 'placelocations' table.<BR/><BR/><strong>The display</strong> can be structured for a specific gedcom file; for a specific country within that file; and for a particular area (e.g. state or county) within that country.<BR/><BR/><strong>Places</strong>are listed alphabetically so that minor spelling differences can be easily spotted, and corrected.<BR/><BR/><strong>From</strong> the results of the comparison you can click on place names for one of these three options:<BR/><BR/><strong>1 - </strong>For gedcom file places you will be taken to the Place Heirarchy view. Here you will see all records that are linked to that place.<BR/><BR/><strong>2 - </strong>For places that exist in the gedcom file, but not in the googlemap table (highlighted in red), you will get the googlemap \"Add place\" screen.<BR/><BR/><strong>3 - </strong>For places that exist in both the gedcom file and the googlemap table (perhaps without coordinates) you will get the googlemap \"edit place\" screen. Here you can edit any aspect of the place record for the googlemap display.<BR/><BR/><strong>Hovering</strong> over any place in the googlemap table columns will display the zoom level curently set for that place.";
$pgv_lang["PLACECHECK_FILTER"] = "Orteüberprüfung - Optionen für die Anzeige";
$pgv_lang["PLACECHECK_FILTER_help"] = "~#pgv_lang[PLACECHECK_FILTER]#~<br /><br />This section includes options to limit or extend the scope of the listed places.<br /><br />It is hoped to add more options in the future.";
$pgv_lang["PLACECHECK_MATCH"] = "vollständig definierte Orte mit einschließen";
$pgv_lang["PLACECHECK_MATCH_help"] = "~#pgv_lang[PLACECHECK_MATCH]#~<br /><br />Normalerweise zeigt die Liste keine Orte an, die bereits für jede Stufe vollständig definiert sind.<br/><br/>Wählen Sie diese Option, um diese Orte trotzdem mit anzuzeigen";

//wooc Options for Place Hierarchy display
$pgv_lang["GOOGLEMAP_PH"] = "Googlemap bei den Ortslisten verwenden";
$pgv_lang["GOOGLEMAP_PH_help"] = "~#pgv_lang[GOOGLEMAP_PH]#~<br /><br />Mit dieser Option kann das Modul Googlemap für die Ortslisten ein- oder ausgeschaltet werden. Zur korrekten Verwendung muss das Modul Googlemap natürlich auch aktiviert sein! Vor dem Einsatz empfiehlt es sich, alle Orte in die Googlemap-Tabelle zu laden.";
$pgv_lang["GOOGLEMAP_PH_MARKER"] = "Typ des Orte Markierers in den Ortslisten";
$pgv_lang["GOOGLEMAP_PH_MARKER_help"]	= "~#pgv_lang[GOOGLEMAP_PH_MARKER]#~<br /><br />Hier bestimmen Sie, welche Art Markierer verwendet werden soll (Standard oder Flagge). Wenn dem Ort keine Flagge zugeordnet ist, wird der Standard Markierer verwendet.";
$pgv_lang["GM_DISP_SHORT_PLACE"] = "Verkürzte Orte-Namen anzeigen?";
$pgv_lang["GM_DISP_SHORT_PLACE_help"]	= "~#pgv_lang[GM_DISP_SHORT_PLACE]#~<br /><br />Hier bestimmen Sie, wie die Orte angezeigt werden sollen. Bei Ja werden nur die Namen der aktuellen Stufe angezeigt, bei Nein werden alle Stufennamen angezeigt.";
$pgv_lang["GOOGLEMAP_PH_WHEEL"] = "Mausrad für den Zoom benutzen?";
$pgv_lang["GOOGLEMAP_PH_WHEEL_help"] = "~#pgv_lang[GOOGLEMAP_PH_WHEEL]#~<br /><br />Hier bestimmen Sie, ob das Mausrad für die Zoomfunktion benutzt werden soll.";

?>
