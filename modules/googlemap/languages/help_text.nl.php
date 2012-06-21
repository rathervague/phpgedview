<?php
/**
 * Dutch Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  PGV Development Team
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
 * @version $Id: help_text.nl.php 3859 2008-09-13 23:42:23Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Google-map aanzetten";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Via deze optie is het mogelijk om de Googlemap module aan of uit te zetten.<br />Indien de module uitgezet is zal de kaart-tab wel zichtbaar zijn, maar deze blijft leeg. De link naar de configuratie pagina zal wel beschikbaar blijven, maar alleen voor beheerders";

$pgv_lang["GOOGLEMAP_API_KEY"]      = "Google-map API code";
$pgv_lang["GOOGLEMAP_API_KEY_help"] = "~#pgv_lang[GOOGLEMAP_API_KEY]#~<br /><br />Voer hier uw Google Map API code in. U kunt een code aanvragen op <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\">http://www.google.com/apis/maps/</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]         = "Google-map type";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />Het type kaart dat standaard word getoond. Dit kan zijn Kaart, Satelliet of Combinatie";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]         = "Google-map afmeting";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />De afmeting van de kaart (in pixels) zoals deze getoond word op de pagina met Persoonsinformatie";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]         = "Google-map zoom factor";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Minimum en maximum zoom factor van de Google map. 1 is de gehele aarde, 15 is enkele huizen. Houd er rekeing mee dat factor 15 niet overal beschikbaar is.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Standaard waarde voor het hoogste nivo";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Hier kan de standaard waarde voor het hoogste nivo worden gedefinieerd. Indien een plaats niet kan worden gevonden zal deze waarde als hoogste nivo (dus als land) worden toegevoegd en zal er opnieuw worden gezocht.";

$pgv_lang["GM_NOF_LEVELS"]              = "Aantal locatie-nivo's in gebruik
bij Googlemap";
$pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />Het aantal lokatie-nivo's welke in gebruik is in de Googlemap modules.<br />De standaard waarde is 4 (Land, Provncie/staat, Gemeente, Plaats), welke onder normale omstandigheden voldoet. De waarde kan gewijzigd worden om een extra nivo toe te voegen (bijvoorbeeld om lokaties binnen een plaats aan te kunnen geven, zoals een begraafplaats of een school) of om een nivo te verwijderen (bijvoorbeeld gemeente). Houdt er echter wel rekening mee dat de aangeleverde files over het algemeen de standaard 4-nivo structuur gebruiken.";

$pgv_lang["GM_NAME_PREFIX"]             = "Te gebruiken Voorvoegsel";
$pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />De waarde zal worden toegevoegd voor de namen op dit nivo. Er mogen meerdere waardes worden gespecificeerd, gescheiden door een puntkomma.";

$pgv_lang["GM_NAME_POSTFIX"]            = "Te gebruiken Achtervoegsel";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />De waarde zal worden toegevoegd achter de namen op dit nivo. Er mogen meerdere waardes worden gespecificeerd, gescheiden door een puntkomma.";

$pgv_lang["GM_NAME_PRE_POST"]           = "Volgorde van zoeken naar namen";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />Dit veld geeft aan in welke volgorde er gezocht zal worden naar de naam. De mogelijk waardes zijn:<br /><ul><li>Geen pre/postfix</li><li>Normale naam, met voorvoegsel, met achtervoegsel, beide</li><li>Normale naam, met achtervoegsel met voorvoegsel, beide</li><li>Met voorvoegsel, met achtervoegsel, beide, normale naam</li><li>Met achtervoegsel, met voorvoegsel, beide, normale naam</li><li>Met voorvoegsel, met achtervoegsel, normale naam, beide</li><li>Met achtervoegsel, met voorvoegsel, normale naam, beide</ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Wijzig of verwijder locatie";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "Hier kunnen de gegevens van een locatie worden aangepast of kan een locatie worden verwijderd. Vie de Wijzig-link wordt een nieuw venster geopend, waarin de waardes van de locatie kunnen worden aangepast.<br />Via het ikoon \"Verwijderen\" kan de betreffende locatie worden verwijderd. Dit is echter alleen mogelijk indien er geen locaties afhankelijk zijn van deze locatie. Indien een locatie verwijderd kan worden is deze actief, anders is het ikoon inactief.";

$pgv_lang["PL_ADD_LOCATION"]            = "Locatie toevoegen";
$pgv_lang["PL_ADD_LOCATION_help"]       = "Gebruik deze link om een locatie toe te voegen aan de tabel.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Importeer data uit GEDCOM";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "Via deze link worden alle locaties uit de huidige GEDCOM ingelezen in de tabel. De huidge GEDCOM wordt ingelezen en alle locaties (in PLAC records) worden toegevoegd aan de tabel. Van locaties waar de lengte en breedtegraad beschikbaar is worden deze ook overgenomen.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Importeer data uit alle GEDCOM-bestanden";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "Via deze link worden alle locaties uit alle GEDCOM-bestanden ingelezen in de tabel. Alle GEDCOM-bestanden wordt ingelezen en alle locaties (in PLAC records) worden toegevoegd aan de tabel. Van locaties waar de lengte en breedtegraad beschikbaar is worden deze ook overgenomen.";

$pgv_lang["PL_IMPORT_FILE"]             = "Importeer data uit file";
$pgv_lang["PL_IMPORT_FILE_help"]        = "Importeer gegevens uit een file. De file moet als CSV file zijn opgeslagen op de lokale computer. Het gebruikte scheidingsteken tussen de velden is een ';'.";

$pgv_lang["PL_EXPORT_FILE"]             = "Exporteer data naar file";
$pgv_lang["PL_EXPORT_FILE_help"]        = "Schrijf de gegevens naar een file en download deze naar de lokale computer. De gegevens welke in de file geschreven worden zijn de gegevens van de huidige tabel, en alle onderliggende gegevens. Als er bijvoorbeeld een land is geselecteerd, dan worden nu de provicies getoond. Via deze optie zullen de gegevens van dit provincie, van de gemeentes en de plaatsen worden opgeslagen.";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Exporteer alle data naar file";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "Schrijf alle gegevens naar een file en download deze naar de lokale computer. Via deze optie is het mogelijk om alle locatie gegevens op te slaan op de lokale computer.";

// Help texts for places_edit.php

$pgv_lang["PLE_PLACES"]                 = "Voer plaatsnaam in";
$pgv_lang["PLE_PLACES_help"]            = "Hier kan een plaatsnaam worden ingevoerd of gewijzigd.";

$pgv_lang["PLE_PRECISION"]              = "Voer precisie in";
$pgv_lang["PLE_PRECISION_help"]         = "Hier kan de precisie worden ingevoerd. Deze waarde wordt gebruikt om het aantal cijfers te bepalen wat gebruikt wordt voor de lengtebraad en breedtegraad.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Voer lengte en breedtegraad in";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "Hier kan de lengte en breedtegraad worden ingevoerd. Selecteer eerst het kwadrant (N/Z en O/W), daarna kan de waarde voor lengte en breedtegraad worden ingevoerd. Deze waarde moet decimaal worden ingevoerd.<br />De decimale waarde kan worden bepaald door de minuten en seconden om te zetten volgend de volgende formule:<br />decimale_waarde = ((seconden / 60) _ minuten ) / 60 + geheel aantal graden.";

$pgv_lang["PLE_ZOOM"]                   = "Voer zoom-factor in";
$pgv_lang["PLE_ZOOM_help"]              = "Hier kan de zoom-factor worden ingevoerd. Met deze waarde wordt de maximale zoomfactor bepaald als deze locatie op een kaart wordt getoond.";

$pgv_lang["PLE_ICON"]                   = "Selecteer vlag";
$pgv_lang["PLE_ICON_help"]              = "Hier kan een vlag worden geselcteerd. Deze vlag zal worden getoond in plaats van het standaard symbool.";

$pgv_lang["PLE_FLAGS"]                  = "Selecteer vlag";
$pgv_lang["PLE_FLAGS_help"]             = "Via het pulldown menu kan een land worden geselcteerd, waarvan daarna een vlag kan worden geselecteerd. Indien geen vlaggen worden getoond, zijn er voor dit land geen vlaggen gedefinieerd.";

$pgv_lang["PLIF_FILENAME"]              = "Voer bestandsnaam in";
$pgv_lang["PLIF_FILENAME_help"]         = "Voer de naam van het bestand in waar de gegevens van de plaatsen in staan. Dit bestand moet in het CSV-formaat zijn.";

$pgv_lang["PLIF_CLEAN"]                 = "Plaats-database leegmaken";
$pgv_lang["PLIF_CLEAN_help"]            = "Als deze optie is geselecteerd zal de database met plaats-gegevens worden leeggemaakt. Deze bevat alleen de gegevens van de plaatsen. Er zullen geen wijzigingen in de GEDCOM gegevens worden aangebracht.";

$pgv_lang["PLIF_UPDATE"]                = "Alleen bijwerken bestaande gegevens";
$pgv_lang["PLIF_UPDATE_help"]           = "Alleen bijwerken van bestaande gegevens.<br />Als deze optie wordt geselecteerd zullen alleen de gegevens bijgewerkt worden welke al in de database aanwezig zijn. Er zullen geen nieuwe plaatsen toegevoegd worden aan de database.";

$pgv_lang["PLIF_OVERWRITE"]             = "Overschrijf locatie gegevens";
$pgv_lang["PLIF_OVERWRITE_help"]        = "Overschrijf locatie gegevens in de database met gegevens uit de file.<br />Indien deze optie is geselcteerd zullen de gegevens (indien aanwezig in de database) worden overschreven met de gegevens uit de file. Indien de gegevens niet aanwezig zijn zal een nieuwe plaats worden aangemaakt, tenzij de optie Alleen bijwerken ook is geselcteerd.";

?>
