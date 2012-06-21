<?php
/**
 * Norwegian Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2006  PGV Development Team
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
 * @version $Id: help_text.no.php 3859 2008-09-13 23:42:23Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Aktivere Google Map";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Her kan du aktivere eller deaktivere funksjonene til som bruker Google Map.<br />Arkfanen Kart på siden for opplysninger om en person vil bli vist uansett, men den vil være tom dersom dette valget er deaktivert. Valget for oppsett på siden for administrasjon vil uansett være tilgjengelig.";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Google kart - API-nøkkel";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "~#pgv_lang[GOOGLEMAP_API_KEY]#~<br /><br />Oppgi nøkkelen din til Google Map API her.  Dersom du ikke har en nøkkel, kan du be om å få en på nettsiden til <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\">Google kart</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]	        = "Google kart - type";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />Type kart som vil bli vist som standard.  Valgene er Kart, Satelitt eller Kombinert.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]	        = "Google kart - størrelse";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Størrelsen på kartet (i punkter) som vil vises på siden med opplysninger for en person.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]	        = "Google kart - zoom-faktor";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Her angir du hvilken forstørrelse kortet skal vise med.<br />1 viser hele jordkloden<br />15 viser enkelte hus<br /><br />NB! Det er ikke alle områder som har tilgjengelig kart som kan vise forstørrelse på 15.";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Nøyaktighet for lengde- og breddegrad";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "~#pgv_lang[GOOGLEMAP_PRECISION]#~<br /><br />Dette angir hvor nøyaktig de forskjellige nivåene skal benevnes når en registerer nye steder. For eksempel vil et land bli angitt med nøyaktighet 0 (dvs. 0 siffer etter desimaltegnet), mens en by trenger 3 eller 4 siffer.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Standard verdi for toppnivå";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Her kan du definere standard nivå for det høyeste nivå i steds-hierarkiet. Dersom et sted ikke finnes i stedsbasen, vil stedsnavnet bli lagt angitt med høyeste nivå (land). Deretter vil det bli startet et nytt søk.";

$pgv_lang["GM_NOF_LEVELS"]              = "Dette angir antall nivåer som brukes av modulen Google Map";
$pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />This field indicates the number of levels in the places-hierarchy that is being used by the Googlemap modules.<br />Standard verdi for steds-hirarki er 4 (land, fylke, kommune, sted), som til vanlig er godt nok. Dersom du ønsker å legge til et ekstra nivå (f.eks. for å legge til en kirkegård, skole eller lignende), kan du endre dene verdien. Du kan også fjerne et nivå (f.eks. sted), men dette er ikke å anbefale fordi stedene er lagret med en struktur på 4 nivå.";

$pgv_lang["GM_NAME_PREFIX"]             = "Prefiks for navn brukt på dette nivået";
$pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />Denne verdien vil bli lagt til forran navnet for dette nivået. Du kan angi flere verdier, separert med semikolon";

$pgv_lang["GM_NAME_POSTFIX"]            = "Postfiks for navn brukt på dette nivået";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />Denne verdien vil bli lagt til etter navnet for dette nivået. Du kan angi flere verdier, separert med semikolon";

$pgv_lang["GM_NAME_PRE_POST"]           = "Rekkefølgen som skal brukes for pre-/postfiks";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />Dette feltet angir rekkefølgen for hvordan navn skal vises sammen med pre- og postfiks. Mulige kombinasjoner er:<br /><ul><li>Ingen pre-/postfiks</li><li>Normalt navn, prefiks, postfiks, begge</li><li>Normalt navn, postfiks, prefiks, begge</li><li>Prefiks, postfiks, begge, normalt navn</li><li>Postfiks, prefiks, begge, normalt navn</li><li>Prefiks, postfiks, normalt navn, begge</li><li>Postfiks, prefiks, normalt navn, begge</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Redigere eller slette et sted";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "Her kan du enten:<br /><dl><dt>Redigere</dt><dd>Du vil få opp et nytt vindu der du kan endre verdiene til stedet.</dd><dt>Slette</dt><dd>Stedet vil bli slettet.<br />NB! Dette kan bare gjøres dersom det ikke er registrert andre steder \"under\" dette stedet (f.eks. kommuner i et fylke). Velget vil være deaktivert hvis dette er tilfelle.</dd></dl>";

$pgv_lang["PL_ADD_LOCATION"]            = "Legg til sted";
$pgv_lang["PL_ADD_LOCATION_help"]       = "Bruk dette valget for å legge til et nytt sted. Stedet vil bli lagt til på dette nivået.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Importer steder fra slektsfil (GED)";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "Her kan du importere alle stedene fra den aktive slektsbasen. Dersom bredde-og lengdegrad er tilgjengelig, vil disse også bli importert.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Importer steder fra alle slektsfiler (GED)";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "Her kan du importere alle stedene fra alle tilgjengelige slektsbaser. Dersom bredde-og lengdegrad er tilgjengelig, vil disse også bli importert.";

$pgv_lang["PL_IMPORT_FILE"]             = "Importer steder fra fil";
$pgv_lang["PL_IMPORT_FILE_help"]        = "Her kan du importere stedsdata fra en tekstfil. Filen bør være formatert som en CSV-fil (feltene på en stedslinje er separert med ';') på datamaskinen din..";

$pgv_lang["PL_EXPORT_FILE"]             = "Eksportere steder til fil";
$pgv_lang["PL_EXPORT_FILE_help"]        = "Her kan du eksportere stedsdata til en fil. Dette valget vil lagre opplysninger fra det viste stedet i en fil (CSV-format). Det vil for eksempel bety at dersom et land er valgt og fylkene vises, vil dette valget lagre dataene til alle fylkene, alle kommuner og alle stedene som er registert tilhørende dette landet, og overføre dem til din lokale datamaskin.";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Eksporter alla steder til fil";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "Her kan du eksportere alle stedsdata til en fil (CSV-format). Dette valget vil lagre alle stedsdata og overføre dem til din lokale datamaskin.";

// Help texts for places_edit.php

$pgv_lang["PLE_PLACES"]                 = "Angi stedsnavn";
$pgv_lang["PLE_PLACES_help"]            = "Her kan du angi eller endre navnet til stedet.";

$pgv_lang["PLE_PRECISION"]              = "Angi nøyaktighet";
$pgv_lang["PLE_PRECISION_help"]         = "Her kan du angi hvor nøyaktig et sted skal benevnes. Basert på denne innstillingen, vil dette bestemme hvor mange siffer som skal brukes i lengde- og breddegradene for stedet.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Angi lengde- og breddegrad";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "Her kan du angi lengde- og breddegraden til stedet. Først velger du området du ønsker å angi (Ø/V eller N/S). Deretter angir du verdien for lengde- eller breddegraden. Dett bør være en desimalverdi.<br />Desimalverdien kan bestemmes ved å konvertere minuttene og sekundene ved å bruke følgende format:<br />degrees_decimal = ((sekunder / 60) + minutter) / 60 + grader.";

$pgv_lang["PLE_ZOOM"]                   = "Angi nivå for zoom";
$pgv_lang["PLE_ZOOM_help"]              = "Her angir du ønsket nivå for zoom av kartutsnitt. Denne verdien vil bli brukt som minimumsverdi når stedet blir vist på et kart.";

$pgv_lang["PLE_ICON"]                   = "Velg et ikon";
$pgv_lang["PLE_ICON_help"]              = "Her kan du angi hva slags markering som skal brukes for å angi stedet. Ikonet kan også være et flagg.";

$pgv_lang["PLE_FLAGS"]                  = "Velg flagg";
$pgv_lang["PLE_FLAGS_help"]             = "Her kan du velge et land hvor flagget skal brukes. Dersom ingen flagg blir vist, er det ikke bestemt noe flagg for dette landet.";

$pgv_lang["PLIF_FILENAME"]              = "Angi filnavn";
$pgv_lang["PLIF_FILENAME_help"]         = "Oppgi navnet på filen som inneholder opplysninger om steder i CSV format.";

$pgv_lang["PLIF_CLEAN"]                 = "Tøm tabellen i databasen med stedsopplysninger";
$pgv_lang["PLIF_CLEAN_help"]            = "Her kan du du velge å tømme tabellen med stedsopplysninger i databasen. Det betyr at <u>kun</u> innholdet i tabellen blir fjernet, mens slektsfilen (GED) vil forbli inntakt.";

$pgv_lang["PLIF_UPDATE"]                = "Oppdatere bare steder som finnes fra før";
$pgv_lang["PLIF_UPDATE_help"]           = "Her kan du oppdatere steder som er registrert fra før.<br />Dette valget kan brukes for å fylle ut lengde- og breddegrad for steder som allerede er importert fra en slektsfil. Det vil ikke bli lagt til noen nye steder.";

$pgv_lang["PLIF_OVERWRITE"]             = "Overskrive kartreferanser";
$pgv_lang["PLIF_OVERWRITE_help"]        = "Her kan du legge inn kartreferanser på nytt fra datafilen.<br />Dersom du velger dette, vil kartreferansene (lengde- og breddegrader, zoomnivå og flagg) til de ulike stedene bli overskrevet med dataene fra filen. Dersom valget \"Oppdatere bare steder som finnes fra før\" ikke er markert, vil også steder som ikke finnes fra før, bli importert.";

?>
