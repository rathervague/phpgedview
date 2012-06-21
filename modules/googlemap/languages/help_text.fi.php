<?php
/**
 * Finnish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008 PGV Development Team
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
 * @translator Jani Miettinen and Matti Valve
 * @version $Id: help_text.fi.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_CONFIG"]           = "Konfiguroi Google-kartta";
$pgv_lang["GOOGLEMAP_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />Konfiguroi kaikki Google kartan ominaisuudet täällä.";

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Google-kartta käytössä";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Käytä tätä valintaa laittaaksesi Google-kartan päälle ja pois.<br />Kun toiminto on pois päältä niin kartta välilehti nakyy henkilötiedoissa mutta sivu on tyhjä. Konfigurointi linkki on silti näkyvissä ylläpitosivulla.";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Google-kartta API avain";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "~#pgv_lang[GOOGLEMAP_API_KEY]#~<br /><br />Liitä sinun Google kartta API avain tähän. Voit hankkia avaimen täältä: <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\">http://www.google.com/apis/maps/</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]         = "Google-kartta tyyppi";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />Oletuksena näkyvä kartan tyyppi. Tämä voi olla Kartta, Satelliitti tai hybridi.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]         = "Google-kartta koko";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />The size of the map (in pixels) as shown on the Individual page.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]         = "Google-kartta zoomaus kerroin";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Minimi ja maksimi zoomaus kerroin Google kartalle. 1 on täysi kartta ja 15 on yksittäinen talo. Huomioi että 15 on saatavilla vain yksittäisillä alueilla.";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Leveys- ja pituusasteet tarkasti";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "~#pgv_lang[GOOGLEMAP_PRECISION]#~<br /><br />This specifies the precision of the different levels when entering new geographic locations. For example a country will be specified with precision 0 (=0 digits after the decimal point), while a town needs 3 or 4 digits.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Oletus arvo ylimmälle tasolle";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Here the default level for the highest level in the place-hierarchy can be defined. If a place cannot be found this name is added as the highest level (country) and the database is searched again.";

$pgv_lang["GM_NOF_LEVELS"]              = "tämä indikoi käytettyjen tasojen määrää Googlekartalla";
$pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />This field indicates the number of levels in the places-hierarchy that is being used by the Googlemap modules.<br />The default value is 4 (Country, State, County, Place), which is usually good enough. If you want to add an extra level (for example to add specific location like cemeteries or schools) change this value. If you want to remove a level (for example county) you can also change this value, but keep in mind that the files containing the place-locations contain a 4-level structure.";

$pgv_lang["GM_NAME_PREFIX"]             = "Nimien etuliite joka on käytössä tällä tasolla";
$pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />This value will be added to the front of the names on this level. Multiple values can be used, seperated by semicolons";

$pgv_lang["GM_NAME_POSTFIX"]            = "Nimien jälkiliite joka on käytössä tällä tasolla";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />This value will be added to the back of the names on this level. Multiple values can be used, seperated by semilcolons";

$pgv_lang["GM_NAME_PRE_POST"]           = "Etuliite / jälkiliite järjestys";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />This field indicates the order in which names are tried using the prefix and postfix. The possible values are:<br /><ul><li>No pre/postfix</li><li>Normal name, Prefix, Postfix, both</li><li>Normal name, Postfix, Prefix, both</li><li>Prefix, Postfix, both, Normal name</li><li>Postfix, Prefix, both, Normal name</li><li>Prefix, Postfix, Normal name, both</li><li>Postfix, Prefix, Normal name, both</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Muokkaa tai poista sijainti";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Here you can edit the location or delete the location. When you click on Edit a new window will open where you can change the values of the geographic location.<br />If you click on the delete-icon the record will be deleted. This can only be done if there are no records connected to this location. If no records are connected the delete-icon is active, otherwise it is inactive.";

$pgv_lang["PL_ADD_LOCATION"]            = "Lisää sijaintipaikka";
$pgv_lang["PL_ADD_LOCATION_help"]       = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Use this to add a place to the location table. The location will be added at this level.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Tuo sijaitipaikat GEDCOM:sta";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Import geographic location-data from current GEDCOM. The current GEDCOM will be scanned and all places will be added to the table. If latitude and longitude are available these will also be imported.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Tuo sijaitipaikat kaikista GEDCOMeista";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Import geographic location-data from all GEDCOMs. All GEDCOMs will be scanned and all places will be added to the table. If latitude and longitude are available these will also be imported.";

$pgv_lang["PL_IMPORT_FILE"]             = "Tuo sijaitipaikat tiedostosta";
$pgv_lang["PL_IMPORT_FILE_help"]        = "Import geographic location data from a file. The file should be formatted as CSV file on the local computer. The record separator used within the lines is ';'.";

$pgv_lang["PL_EXPORT_FILE"]             = "Vie sijaitipaikat tiedostoon";
$pgv_lang["PL_EXPORT_FILE_help"]        = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Export location data to a file. This option will save the data from the current view and all dependant data to a file. This means that if a country is selected and the states are shown, this option will save the data of the states, all the counties that are defined in those states and all places within those counties.";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Vie kaikki sijaitipaikat tiedostoon";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Export all location data to a file. This option will save all location data and transfer it to the local computer.";

$pgv_lang["GOOGLEMAP_COORD"]            = "Näytä karttakordinaatit";
$pgv_lang["GOOGLEMAP_COORD_help"]       = "~#pgv_lang[GOOGLEMAP_COORD]#~<br /><br />This options sets whether Latitude and Longitude are displayed on the pop-up window attached to map markers";

// Help texts for places_edit.php
$pgv_lang["PLE_EDIT"]               	= "Muokkaa Google kartta paikkoja";
$pgv_lang["PLE_EDIT_help"]              = "Here you can add, edit or delete Google Map place details.";

$pgv_lang["PLE_PLACES"]                 = "Syötä paikan nimi";
$pgv_lang["PLE_PLACES_help"]            = "Tässä voit syöttää tai muuttaa paikan nimeä.";
//@@<br />The 'Search on this level' option allow to search the latitude and longitude of entered place name only among the places with that level.<br />The 'Search on this level' option allow to search the latitude and longitude of all places having entered name. Some the lower levels places can not be displayed with this method of search.";

$pgv_lang["PLE_PRECISION"]              = "Syötä tarkkus";
$pgv_lang["PLE_PRECISION_help"]         = "~#pgv_lang[PLE_PRECISION]#~<br /><br />Here you can enter the precision. Based on this setting the number of digits that will be used in the latitude and longitude is determined.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Syötä levays- tai pituusasteet";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "~#pgv_lang[PLE_LATLON_CTRL]#~<br /><br />Here the latitude and longitude can be entered. First select the area you want to set (E/W or N/S). Next enter the value for latitude or longitude. This should be a decimal value.<br />The decimal value can be determined by converting the minutes and seconds using the following formula:<br />degrees_decimal = ((seconds / 60) + minutes) / 60 + degrees.";

$pgv_lang["PLE_ZOOM"]                   = "Syötä zoomaus taso";
$pgv_lang["PLE_ZOOM_help"]              = "~#pgv_lang[PLE_ZOOM]#~<br /><br />Here the zoom level can be entered. This value will be used as the minimal value when displaying this geographic location on a map.";

$pgv_lang["PLE_ICON"]                   = "Valitse ikoni";
$pgv_lang["PLE_ICON_help"]              = "~#pgv_lang[PLE_ICON]#~<br /><br />Here an icon can be set or removed. Using this link a flag can be selected. When this geographic location is shown, this flag will be displayed.";

$pgv_lang["PLE_FLAGS"]                  = "Valitse lippu";
$pgv_lang["PLE_FLAGS_help"]             = "~#pgv_lang[PLE_FLAGS]#~<br /><br />Using the pull down menu it is possible to select a country, of which a flag can be selected. If no flags are shown, then there are no flags defined for this country.";

$pgv_lang["PLIF_FILENAME"]              = "Lisää tiedostonimi";
$pgv_lang["PLIF_FILENAME_help"]         = "Enter the name of the file containing the place locations in CSV format.";
$pgv_lang["PLIF_LOCALFILE_help"]        = "~#pgv_lang[PLIF_FILENAME]#~<br /><br />Valitse palvelimella jo olevista tiedostoista se tiedosto, joka sisältää paikkatiedot CSV-muodossa.";

$pgv_lang["PLIF_CLEAN"]                 = "Siivoa paikkatieto tietokanta";
$pgv_lang["PLIF_CLEAN_help"]            = "~#pgv_lang[PLIF_CLEAN]#~<br /><br />When this option is selected the placelocation database will be cleared. This means that only the location stored in this table will be deleted. This will not change anything in the GEDCOM.";

$pgv_lang["PLIF_UPDATE"]                = "Päivitä olemassa olevat tallenteet";
$pgv_lang["PLIF_UPDATE_help"]           = "~#pgv_lang[PLIF_UPDATE]#~<br /><br />Only update existing records.<br />When this option is selected only existing records will be updated. This can be used to fill in latitude and longitude of places that have been imported from a GEDCOM. No new places will be added to the database.";

$pgv_lang["PLIF_OVERWRITE"]             = "Ylikirjoita sijainti tiedot";
$pgv_lang["PLIF_OVERWRITE_help"]        = "~#pgv_lang[PLIF_OVERWRITE]#~<br /><br />Overwrite location data in the database with data from the file.<br />When this option is selected, the location data in the database (latitude, longitude, zoomlevel and flag) are overwritten with the data in the file, if available. If the record is not already in the database a new record will be created, unless the Update-only  option is also selected.";

$pgv_lang["PLE_ACTIVE"]             	= "Näytä joutilaat paikat";
$pgv_lang["PLE_ACTIVE_help"]        	= "~#pgv_lang[PLE_ACTIVE]#~<br /><br /><strong>List places in the GoogleMaps table that are not used by any current GEDCOM(s).</strong><br /><br />The display is set, by default, to only display for editing here those places that exist on BOTH your GEDCOM files and your GoogleMap tables.<br /><br />When this option is checked, and \"View\" clicked, the list of places will display ALL places at this level.<br /><br />This is designed to speed up the display of the list when large place lists have been imported, but not all used.<br /><br />NOTE - if the option is checked the full list may take a few minutes to display";

// Help text for placecheck.php
$pgv_lang["GOOGLEMAP_PLACECHECK"]       = "Paikka tarkistus työkalu";
$pgv_lang["GOOGLEMAP_PLACECHECK_help"]  = "~#pgv_lang[GOOGLEMAP_PLACECHECK]#~<br /><br /><strong>This tool</strong> provides a way to compare places in your gedcom file with the matching entries in the googlemaps 'placelocations' table.<br /><br /><strong>The display</strong> can be structured for a specific gedcom file; for a specific country within that file; and for a particular area (e.g. state or county) within that country.<br /><br /><strong>Places</strong>are listed alphabetically so that minor spelling differences can be easily spotted, and corrected.<br /><br /><strong>From</strong> the results of the comparison you can click on place names for one of these three options:<br /><br /><strong>1 - </strong>For gedcom file places you will be taken to the Place Heirarchy view. Here you will see all records that are linked to that place.<br /><br /><strong>2 - </strong>For places that exist in the gedcom file, but not in the googlemap table (highlighted in red), you will get the googlemap \"Add place\" screen.<br /><br /><strong>3 - </strong>For places that exist in both the gedcom file and the googlemap table (perhaps without coordinates) you will get the googlemap \"edit place\" screen. Here you can edit any aspect of the place record for the googlemap display.<br /><br /><strong>Hovering</strong> over any place in the googlemap table columns will display the zoom level curently set for that place.";

$pgv_lang["PLACECHECK_FILTER"]       	= "Paikka tarkistus - Listaus suodatus valinnat";
$pgv_lang["PLACECHECK_FILTER_help"]  	= "~#pgv_lang[PLACECHECK_FILTER]#~<br /><br />This section includes options to limit or extend the scope of the listed places.<br /><br />It is hoped to add more options in the future.";

$pgv_lang["PLACECHECK_MATCH"]       	= "Sisällytä yhteensopivat paikat";
$pgv_lang["PLACECHECK_MATCH_help"]  	= "~#pgv_lang[PLACECHECK_MATCH]#~<br /><br />By default the list does NOT INCLUDE places that are fully matched between the GEDCOM file and the GoogleMap tables.<br />Fully matched means all levels exist in both the gedcom file and the GoogleMap tables; and the GoogleMap places have coordinates for every level.<br /><br />Check this block to include those matched places";

//wooc Options for Place Hierarchy display
$pgv_lang["GOOGLEMAP_PH"]                 = "Käytä Googlemapia paikkahierarkiaa varten";
$pgv_lang["GOOGLEMAP_PH_help"]                    = "~#pgv_lang[GOOGLEMAP_PH]#~<br /><br />Tälla vaihtoehdolla kytketään Googlemapin toiminto paikkahierarkian käytössä päälle tai pois. Ennen käyttöä suositellaan kaikkien paikkojen lisäämistä Googlemap-taulukoihin.";
//@@Tämän vaihtoehdon päällä (Kyllä) tai pois (Ei) kyky korvaa Googlemapilla PhpGedViewn tavanomaisen Paikat. Jotta voitaisiin asettaa tämän vaihtoehdon Kyllä, Googlemap-moduulin on myös oltava käytössä. VAROITUS: Ennen käyttöä suositellaan kaikkien paikkojen lisäämistä Googlemap-taulukoihin.";
//@@$pgv_lang["GOOGLEMAP_PH_help"]          = "~#pgv_lang[GOOGLEMAP_PH]#~<br /><br />Use this option to enable (Yes) or disable (No) the ability to substitute Googlemap for PhpGEDView's usual Place Hierarchy. To be able to set this option to YES, the Googlemap module must be also be enabled. CAUTION: Before using this option, it is recommended that you insert all places currently existing in your GED into the Googlemap tables.";

$pgv_lang["GOOGLEMAP_PH_MAP_SIZE"]                   = "Paikkahierarkiakartan koko (pikseleinä)";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE_help"]           = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Kartan koko (pikseleinä) näytettynä paikkahierarkiasivuilla.";

$pgv_lang["GOOGLEMAP_PH_MARKER"]                     = "Paikkamerkitsimien tyypit paikkahierarkiassa";
$pgv_lang["GOOGLEMAP_PH_MARKER_help"] = "~#pgv_lang[GOOGLEMAP_PH_MARKER]#~<br /><br />Tässä voit määritellä, minkä tyyppisiä merkitsimiä (vakio tai lippu) voit käyttää. Mikäli paikalla ei ole lippua, käytä vakiomerkitsimiä..";

$pgv_lang["GM_DISP_SHORT_PLACE"]              = "Näytä lyhyet paikannimet";
$pgv_lang["GM_DISP_SHORT_PLACE_help"]     = "~#pgv_lang[GM_DISP_SHORT_PLACE]#~<br /><br />Tässä voit valita kahdesta tavasta näyttää paikannimet hierarkiassa. Mikäli valitset Kyllä, näytetään lyhytnimi tai käytössä oleva tason nimi. Mikäli valitset Ei, näytetään koko nimi.<br /><b>Esimerkkejä: </b>Chicago, Illinois, USA<br /><b>Lyhytnimi: </b>Chicago<br /><b>Koko nimi: </b>Illinois, USA<br /><b>Lyhytnimi: </b>Illinois";

$pgv_lang["GM_DISP_COUNT"]                                        = "Näytä henkilö- ja perheluvut";
$pgv_lang["GM_DISP_COUNT_help"]                                = "~#pgv_lang[GM_DISP_COUNT]#~<br /><br />Tässä voit määritellä, näytetäänkö paikkaan liittyvien henkilöiden ja perheiden lukumäärä. Mikäli GEDCOM-tiedosto sisältää paljon henkilöitä, tämä kannattaa kytkeä pois.";

$pgv_lang["GOOGLEMAP_PH_WHEEL"]                         = "Käytä hiiren vieritysrullaa zoomaukseen";
$pgv_lang["GOOGLEMAP_PH_WHEEL_help"]    = "~#pgv_lang[GOOGLEMAP_PH_WHEEL]#~<br /><br />Tässä voit määritellä, käytetäänkö hiiren vieritysrullaa zoomaukseen.";

$pgv_lang["GOOGLEMAP_PH_CONTROLS"]                 = "Piilota karttasäätimet";
$pgv_lang["GOOGLEMAP_PH_CONTROLS_help"]         = "~#pgv_lang[GOOGLEMAP_PH_CONTROLS]#~<br /><br />Tällä vaihtoehdolla voit piilottaa karttasäätimet (esim. karttatyypin valinta) mikäli kursori on kartan ulkopuolella.";

?>
