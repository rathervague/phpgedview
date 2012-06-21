<?php
/**
 * Danish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team
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
 * @version $Id: help_text.da.php 6911 2010-02-03 13:20:29Z hylle $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_CONFIG"]           = "Konfigurér Google-map";
$pgv_lang["GOOGLEMAP_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />Konfigurér alle områder af Google-map modulet her.";

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Aktiver Google-map";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Denne funktion kan aktivere eller deaktivere brugen af Googlemap.<br/>Når den er deaktiveret vil Kort-fanen på individ siden stadig vises, men vil være tom. Konfigurationslinket for administratorer vil stadig være tilgængelig. Når den er deaktiveret vil stedhieraki vises som normalt";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Google-map API nøgle";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "~#pgv_lang[GOOGLEMAP_API_KEY]#~<br /><br />Indsæt din Google Map API nøgle her.  Du kan bede om en nøgle her: <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\">http://www.google.com/apis/maps/</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]         = "Google-map type";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />Typen af kort der vil vises som standard. Dette kan være kort, sattelit, eller hybrid.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]         = "Google-map størrelse";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Størrelsen på kortet (i pixler) der vises på individ siden.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]         = "Google-map zoom faktor";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Minimum og maksimum zoom faktor for Google kortet. 1 er hele kortet, 15 er på husniveau. Bemærk at 15 kun er tilgængelig i bestemte områder.";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Præcision af længdegrad og breddegrad";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "~#pgv_lang[GOOGLEMAP_PRECISION]#~<br /><br />Dette vælger præcisionen af de forskellige niveauer, når der indtastes nye geografiske stedet. Et land vil for eksempel have en præcision på 0 (=0 decimaler efter decimal tegnet), hvorimod en by skal have 3 eller 4 decimaler.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Standard værdi for topniveau";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Her kan standard niveauet for det højeste niveau defineres. Hvis et sted ikke kan findes, vil dette navn tilføjes som det højeste niveau (land) og der søges igen i databasen.";

$pgv_lang["GM_NOF_LEVELS"]              = "Dette viser antallet af niveauer der bruges i Googlemap";
$pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />Dette felt viser antallet af niveauer i sted-hirakiet der bruges af Googlemap modulerne.<br/>Standard værdien er 4 (land, stat, amt, sted), hvilket normalt er nok. Hvis du ønsker et ekstra nivau (hvis du for eksempel ønsker at tilføje specifikke steder som kirkegårde og skoler) skal du ændre denne værdi. Hvis du ønsker at fjerne et niveau (for eksempel land) kan du også ændre denne værdi, men vær opmærksom på at filerne der indeholder steder er baseret på en 4-niveau's struktur.";

$pgv_lang["GM_NAME_PREFIX"]             = "Præfiks for navne der bruges på dette niveau";
$pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />Denne værdi til blive tilføjet foran navnene på dette niveau. Flere værdier kan bruges, adskilt af semikolon";

$pgv_lang["GM_NAME_POSTFIX"]            = "Postfiks for navne der bruges på dette niveau";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />Denne værdi til blive tilføjet efter navnene på dette niveau. Flere værdier kan bruges, adskilt af semikolon";

$pgv_lang["GM_NAME_PRE_POST"]           = "Rækkefølgen af præ/postfiks der bruges.";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />Dette felt viser rækkefølgen af navne der prøves ved hjælp af præfiks og postfiks. De mulige værdier er:<br/><ul><li>Ingen præ/postfiks</li><li>Normalt navn, Præfiks, Postfiks, begge</li><li>Normalt navn, Postfiks, Præfiks, begge</li><li>Præfiks, Postfiks, begge, Normalt navn</li><li>Postfiks, Præfiks, begge, Normalt navn</li><li>Præfiks, Postfiks, Normalt navn, begge</li><li>Postfiks, Præfiks, Normalt navn, begge</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Rediger eller slet sted";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "Her kan du redigere stedet eller slette stedet. Når du klikker på Rediger vil et nyt vindue åbnes, hvor du kan ændre værdian af det geografiske sted.<br/>Hvis du klikker på slette-ikonet vil posten blive slettet. Dette kan kun gøres hvis der ikke er nogen poster tilknyttet til stedet. Hvis der ikke er nogen poster tilknyttet, vil slette-ikonet være aktivt, eller vil det være inaktivt.";

$pgv_lang["PL_ADD_LOCATION"]            = "Tilføj geografisk sted";
$pgv_lang["PL_ADD_LOCATION_help"]       = "Brug denne til at tilføje et sted til sted tabellen. Stedet vil blive tilføjet på dette niveau.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Importer geografiske steder fra GEDCOM";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "Importer geografiske sted-data fra den aktuelle GEDCOM. Den aktuelle GEDCOM vil blive scannet og alle steder vil blive tilføjet til tabellen. Hvis breddegrad og længdegrad er tilstede vil disse også blive importeret.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Importer geografiske steder fra alle GEDCOM'er";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "Importer geografiske sted-data fra alle GEDCOM'er. Alle GEDCOM-filer vil blive scannet og alle steder vil blive tilføjet til tabellen. Hvis breddegrad og længdegrad er tilstede vil disse også blive importeret.";

$pgv_lang["PL_IMPORT_FILE"]             = "Importer geografiske steder fra fil";
$pgv_lang["PL_IMPORT_FILE_help"]        = "Importer geografiske sted-data fra en fil. Filen bør være formateret som en CSV fil på den lokale computer. Post separatoren der bruges på linjeniveau er ';'.";

$pgv_lang["PL_EXPORT_FILE"]             = "Eksporter steder til fil";
$pgv_lang["PL_EXPORT_FILE_help"]        = "Eksporter sted-data til en fil. Denne funktion vil gemme data fra den aktuelle visning og alle afhængige data til en fil. Dette betyder at hvis der vælges et land og amterne er vist, vil dette funktion gemme amternes data og alle landene der er defineret i disse amter og alle steder i disses kommuner.";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Eksporter alle steder til fil";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "Eksporter alle sted-data til en fil. Denne funktion vil gemme alle sted-data og overføre det til den lokale computer.";

$pgv_lang["GOOGLEMAP_COORD"]           = "Vis kort koordinater";
$pgv_lang["GOOGLEMAP_COORD_help"]      = "~#pgv_lang[GOOGLEMAP_COORD]#~<br /><br />Denne indstilling afgør om der vises længde- og breddegrad på det popup vindue der er tilknyttet kortmarkører";

// Help texts for places_edit.php
$pgv_lang["PLE_EDIT"]                   = "Redigér Googlemap steder";
$pgv_lang["PLE_EDIT_help"]              = "Her kan du tilføje, redigere eller slette Googlemap stedoplysninger.";

$pgv_lang["PLE_PLACES"]                 = "Indtast stednavn";
$pgv_lang["PLE_PLACES_help"]            = "Her kan du indtaste eller ændre navnet på stedet.";

$pgv_lang["PLE_PRECISION"]              = "Indtast præcision";
$pgv_lang["PLE_PRECISION_help"]         = "Her kan du indtaste præcisionen. Baseret på denne indstilling vil antallet af decimaler der bruges i breddegrad og længdegrad blive besluttet.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Indtast breddegrad eller længdegrad";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "Her kan breddegrad og længdegrad indtastes. Først vælges det område du ønsker at se (Ø/V eller N/S). Derefter indtastes værdien for breddegrad eller længdegrad. Dette bør være en decimal værdi.<br/>Decimal værdien kan bestemmes ved at konvertere minutterne og sekunderne ved brug af følgende formel:<br/>grader_decimal = ((sekunder / 60) + minutter) / 60 + grader.";

$pgv_lang["PLE_ZOOM"]                   = "Indtast zoomniveau";
$pgv_lang["PLE_ZOOM_help"]              = "Her kan zoom niveauet indtastes. Denne værdig vil blive brugt som den mindste værdi når dette geografiske sted vises på et kort.";

$pgv_lang["PLE_ICON"]                   = "Vælg et ikon";
$pgv_lang["PLE_ICON_help"]              = "Her kan der tilknyttes eller fjernes et ikon. Ved at bruge dette link kan et flag vælges. Når dette geografiske sted vælges, vil dette ikon vises.";

$pgv_lang["PLE_FLAGS"]                  = "Vælg flag";
$pgv_lang["PLE_FLAGS_help"]             = "Ved at bruge nedrulningsmenuen er det muligt at vælge et land for hvilket et flag kan vælges. Hvis der ikke vises nogen flag, er der ikke defineret nogen flag for dette land.";

$pgv_lang["PLIF_FILENAME"]              = "Indtast filnavn";
$pgv_lang["PLIF_FILENAME_help"]         = "Indtast navnet på den fil der indeholder steder i CSV format.";
$pgv_lang["PLIF_LOCALFILE_help"]        = "Vælg en fil på listen over filer der allerede er på serveren, der indeholder stedplaceringer i CSV formatet.";

$pgv_lang["PLIF_CLEAN"]                 = "Tøm placelocation database";
$pgv_lang["PLIF_CLEAN_help"]            = "Når denne funktion vælges vil databasen blive tømt. Dette betyder at kun de steder der er gemt i denne tabel vil blive slettet. Dette vil ikke ændre noget i GEDCOM filen.";

$pgv_lang["PLIF_UPDATE"]                = "Opdater eksisterende poster";
$pgv_lang["PLIF_UPDATE_help"]           = "Opdater kun eksisterende poster.<br/>Når denne funktion vælges vil kun eksisterende poster blive opdateret. Dette kan bruges til at udfylde breddegrad og længdegrad på steder der er importeret fra en GEDCOM fil. Ingen nye steder vil blive tilføjet til databasen.";

$pgv_lang["PLIF_OVERWRITE"]             = "Overskriv sted-data";
$pgv_lang["PLIF_OVERWRITE_help"]        = "Overskriv sted-data i databasen med data fra filen.<br/>Når denne funktion vælges, vil sted-data i databasen (breddegrad, længdegrad, zoomniveau og flag) blive overskrevet med data fra filen, hvis disse findes. Hvis posten ikke allerede findes i databasen, vil en ny post blive oprettet, medmindre opdaterings funktionen også er valgt.";

$pgv_lang["PLE_ACTIVE"]             = "Vis inaktive steder";
$pgv_lang["PLE_ACTIVE_help"]        = "<strong>Vis steder i GoogleMaps tabellen der ikke bruges af nogen aktuel GEDCOM.</strong><br/><br/>Denne visning er som standard sat til kun at vise de steder der findes både i dine GEDCOM filer og i dine GoogleMap tabeller.<br/><br/>Når denne indstilling er valgt, og der klikkes på \"Vis\", vil listen over steder vise ALLE steder på dette niveau.<br/><br/>Dette er gjort for at øge hastigheden på listen, når der er importeret store stedlister, men hvor ikke alle bruges.<br/><br/>BEMÆRK - hvis denne indstilling er valgt, kan det tage et par minutter at vise den komplette liste";

// Help text for placecheck.php
$pgv_lang["GOOGLEMAP_PLACECHECK"]       = "Stedkontrol værktøj";
$pgv_lang["GOOGLEMAP_PLACECHECK_help"]  = "~#pgv_lang[GOOGLEMAP_PLACECHECK]#~<br /><br /><strong>Dette værktøj</strong> giver en måde hvorpå du kan sammenligne steder i gedcomfilen med overensstemmende indgange i googlemaps 'placelocations' tabel.<br /><br /><strong>Visning</strong> kan opsættes for en specifik gedcomfil; for et specifikt land i den fil og for et specifikt område (f.eks stat eller amt) i det land.<br /><br /><strong>Steder</strong>er vist alfabetisk så mindre stavefejl hurtigt kan opdages og rettes.<br /><br /><strong>Ud</strong> fra resultaterne af sammenligningen kan du klikke på stednavne for en af følgende tre muligheder:<br /><br /><strong>1 - </strong>For steder i gedcomfilen vil du blive ført til Stedhieraki visningen. Her kan du se alle poster der linker til det sted.<br /><br /><strong>2 - </strong>For steder der eksisterer i gedcomfilen, men ikke i googlemap-tabellen (markeret med rødt), vil du se googlemap \"Tilføj sted\" skærmen.<br /><br /><strong>3 - </strong>For steder der eksisterer både i gedcomfilen og i googlemap-tabellen (muligvis uden koordinater) vil du se googlemap \"rediger sted\" skærmen. Her kan du redigere alle dele af stedposten for googlemapvisningen.<br /><br /><strong>Holdes</strong> musen over et sted i googlemap-tabel kolonnerne vil det aktuelt satte zoomniveau vises.";
$pgv_lang["PLACECHECK_FILTER"]          = "Stedkontrol - vis filter indstillinger";
$pgv_lang["PLACECHECK_FILTER_help"]     = "~#pgv_lang[PLACECHECK_FILTER]#~<br /><br />Denne sektion indholder indstillinger til at begrænse eller udvide mængden af viste steder.<br /><br />Der planlægges at tilføje flere indstillinger i fremtiden.";
$pgv_lang["PLACECHECK_MATCH"]           = "Inkluder sammenkørte steder";
$pgv_lang["PLACECHECK_MATCH_help"]      = "~#pgv_lang[PLACECHECK_MATCH]#~<br /><br />Som standard viser listen IKKE steder der er korrekt sammenkørt mellem GEDCOM-filen og GoogleMap-tabellerne.<br />Sammenkørte betyder at alle niveauer eksisterer i både gedcomfilen og i GoogleMap-tabellerne; og at GoogleMap stederne har koordinater for hvert niveau.<br /><br />Markér dette felt for at inkludere disse sammenkørte steder";

//wooc Options for Place Hierarchy display
$pgv_lang["GOOGLEMAP_PH"]               = "Brug Googlemap for stedhieraki";
$pgv_lang["GOOGLEMAP_PH_help"]          = "~#pgv_lang[GOOGLEMAP_PH]#~<br /><br />Ved at bruge denne indstilling kan brugen af Googlemap for stedhieraki aktiveres eller deaktiveres. For at det skal virke skal Googlemap modulet også være aktivt. Før det bruges anbefales det at indsætte alle steder i Googlemap-tabellerne.";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE"]              = "Størrelse på stedhieraki-kort (i pixler)";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE_help"] = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Størrelsen på kortet (i pixler) som vises på stedhieraki siderne.";
$pgv_lang["GOOGLEMAP_PH_MARKER"]                = "Typen af stedmarkører i stedhieraki";
$pgv_lang["GOOGLEMAP_PH_MARKER_help"]   = "~#pgv_lang[GOOGLEMAP_PH_MARKER]#~<br /><br />Her kan du vælge hvilken type markør du ønsker at bruge (standard eller flag). Hvis et sted ikke har noget flag, så brug standardmarkøren.";
$pgv_lang["GM_DISP_SHORT_PLACE"]                = "Vis korte stednavne";
$pgv_lang["GM_DISP_SHORT_PLACE_help"]   = "~#pgv_lang[GM_DISP_SHORT_PLACE]#~<br /><br />Her kan du vælge mellem to måder at vise stednavne i hierakiet. Hvis Ja er valgt vil stedet have et kort navn eller det aktuelle niveaunavn, hvis Nej, det fulde navn.<br /><b>Eksempler:<br />Fulde navn: </b>Chicago, Illinois, USA<br /><b>Kort navn: </b>Chicago<br /><b>Fulde navn: </b>Illinois, USA<br /><b>Kort navn: </b>Illinois";
$pgv_lang["GM_DISP_COUNT"]                              = "Vis individ- og familieoptææling";
$pgv_lang["GM_DISP_COUNT_help"]                 = "~#pgv_lang[GM_DISP_COUNT]#~<br /><br />Her kan du vælge om antallet af individer og familier der er tilknyttet til stedet vises. Hvis GEDCOM-filen indeholder mange personer, anbefales det at slå den fra.";
$pgv_lang["GOOGLEMAP_PH_WHEEL"]                 = "Brug musehjul for zoom";
$pgv_lang["GOOGLEMAP_PH_WHEEL_help"]    = "~#pgv_lang[GOOGLEMAP_PH_WHEEL]#~<br /><br />Her kan du vælge om musehjulet skal bruges til at zoome med.";
$pgv_lang["GOOGLEMAP_PH_CONTROLS"]              = "Skjul kort-kontroller";
$pgv_lang["GOOGLEMAP_PH_CONTROLS_help"] = "~#pgv_lang[GOOGLEMAP_PH_CONTROLS]#~<br /><br />Denne indstilling lader dig skjule kort-kontrollerne (f.eks. korttype valget) hvis musen er uden for kortet.";

// Pedigree map
$pgv_lang["PEDIGREE_MAP_help1"]         = "Sådan bruges kortet";
$pgv_lang["PEDIGREE_MAP_help2"]         = "~#pgv_lang[root_person]#~<br /><br />Vælg det individ du ønsker som <strong>rodperson</strong> enten ved at indtaste dennes ID eller ved bruge <strong>Find ID</strong> ikonet.";
$pgv_lang["PEDIGREE_MAP_help3"]         = "~#pgv_lang[generations]#~<br /><br />Vælg det antal generationer du ønsker at se. Et fornuftigt maksimum er 8, da dette stadig vil vise op til 255 personer.";
$pgv_lang["PEDIGREE_MAP_help4"]         = "Klik på et navn til højre eller på et ikon på kortet for at vise et informationsvindue ved deres fødselssted.";
$pgv_lang["PEDIGREE_MAP_help5"]         = "Klik på detaljer i dette informationsvindue for at at gentegne kortet med denne person som rod.";

$pgv_lang["PEDIGREE_MAP_clustersize"]           = "Klyngestørrelse";
$pgv_lang["PEDIGREE_MAP_clustersize_help"]      = "~#pgv_lang[PEDIGREE_MAP_clustersize]#~<br /><br />Antallet af markører der skal vises på samme sted før en hale af markører startes i en nordøstlig linje bag de yngre generationer. Denne hale er normalt kun synlig ved store zoom værdier.";
$pgv_lang["PEDIGREE_MAP_hidelines"]                     = "Skjul linjer";
$pgv_lang["PEDIGREE_MAP_hidelines_help"]        = "~#pgv_lang[PEDIGREE_MAP_hidelines]#~<br /><br />Skjul de linjer der forbinder barnet til hver forælder hvis de eksistere på kortet.";
$pgv_lang["PEDIGREE_MAP_hideflags"]                     = "Skjul flag";
$pgv_lang["PEDIGREE_MAP_hideflags_help"]        = "~#pgv_lang[PEDIGREE_MAP_hideflags]#~<br /><br />Skjul de flag der er opsat i googlemap modulet. Normalt er de disse for lande og stater.&nbsp; Dette bruges som en visuelt hint om at markørene omkring flaget er fra dette område og ikke det nøjagtige punkt.";
$pgv_lang["PEDIGREE_MAP_help"]                          = "~#pgv_lang[PEDIGREE_MAP_help1]#~<br /><br />#pgv_lang[PEDIGREE_MAP_help4]#<br />#pgv_lang[PEDIGREE_MAP_help5]#<br /><br />#pgv_lang[PEDIGREE_MAP_help2]#<br /><br />#pgv_lang[PEDIGREE_MAP_help3]#<br /><br />#pgv_lang[PEDIGREE_MAP_clustersize_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hidelines_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hideflags_help]#<br /><br />";
?>
