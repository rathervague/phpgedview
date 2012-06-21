<?php
/**
 * English Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team. All right reserved.
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
 * @version $Id: help_text.en.php 6661 2010-01-03 14:15:53Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_CONFIG"]           = "Configure Google-map";
$pgv_lang["GOOGLEMAP_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />Configure all aspects of the Google Map module here.";

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Enable Google-map";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Using this option the functionality of the Googlemap can be enabled or disabled.<br />When disabled the Map-tab on the individual page is still shown, but will be left empty. The configuration link for administrators is still available. When disabled the Place Hierarchy has standard show";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Google-map API key";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "~#pgv_lang[GOOGLEMAP_API_KEY]#~<br /><br />Insert your Google Map API key here.  You can request a key here: <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\">http://www.google.com/apis/maps/</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]         = "Google-map type";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />The type of map that will be shown by default. This can be Map, Satellite, Hybrid or Terrain.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]         = "Google-map size";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />The size of the map (in pixels) as shown on the Individual pages.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]         = "Google-map zoom factor";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Minimum and maximum zoom factor for the Google map. 1 is the full map, 15 is single house. Note that 15 is only available in certain areas.";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Precision of the latitude and longitude";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "~#pgv_lang[GOOGLEMAP_PRECISION]#~<br /><br />This specifies the precision of the different levels when entering new geographic locations. For example a country will be specified with precision 0 (=0 digits after the decimal point), while a town needs 3 or 4 digits.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Default value for top-level";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Here the default level for the highest level in the place-hierarchy can be defined. If a place cannot be found this name is added as the highest level (country) and the database is searched again.";

$pgv_lang["GM_NOF_LEVELS"]              = "This indicates the number of levels used within Googlemap";
$pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />This field indicates the number of levels in the places-hierarchy that is being used by the Googlemap modules.<br />The default value is 4 (Country, State, County, Place), which is usually good enough. If you want to add an extra level (for example to add specific location like cemeteries or schools) change this value. If you want to remove a level (for example county) you can also change this value, but keep in mind that the files containing the place-locations contain a 4-level structure.";

$pgv_lang["GM_NAME_PREFIX"]             = "Prefix for names used on this level";
$pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />This value will be added to the front of the names on this level. Multiple values can be used, seperated by semicolons";

$pgv_lang["GM_NAME_POSTFIX"]            = "Postfix for names used on this level";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />This value will be added to the back of the names on this level. Multiple values can be used, seperated by semilcolons";

$pgv_lang["GM_NAME_PRE_POST"]           = "Order of the pre/postfix to use.";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />This field indicates the order in which names are tried using the prefix and postfix. The possible values are:<br /><ul><li>No pre/postfix</li><li>Normal name, Prefix, Postfix, both</li><li>Normal name, Postfix, Prefix, both</li><li>Prefix, Postfix, both, Normal name</li><li>Postfix, Prefix, both, Normal name</li><li>Prefix, Postfix, Normal name, both</li><li>Postfix, Prefix, Normal name, both</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Edit or delete location";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Here you can edit the location or delete the location. When you click on Edit a new window will open where you can change the values of the geographic location.<br />If you click on the delete-icon the record will be deleted. This can only be done if there are no records connected to this location. If no records are connected the delete-icon is active, otherwise it is inactive.";

$pgv_lang["PL_ADD_LOCATION"]            = "Add geographic location";
$pgv_lang["PL_ADD_LOCATION_help"]       = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Use this to add a place to the location table. The location will be added at this level.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Import geographic locations from GEDCOM";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Import geographic location-data from current GEDCOM. The current GEDCOM will be scanned and all places will be added to the table. If latitude and longitude are available these will also be imported.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Import geographic locations from all GEDCOMs";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Import geographic location-data from all GEDCOMs. All GEDCOMs will be scanned and all places will be added to the table. If latitude and longitude are available these will also be imported.";

$pgv_lang["PL_IMPORT_FILE"]             = "Import geographic locations from file";
$pgv_lang["PL_IMPORT_FILE_help"]        = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Import geographic location data from a file. The file should be formatted as CSV file on the local computer. The record separator used within the lines is ';'.";

$pgv_lang["PL_EXPORT_FILE"]             = "Export locations to file";
$pgv_lang["PL_EXPORT_FILE_help"]        = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Export location data to a file. This option will save the data from the current view and all dependant data to a file. This means that if a country is selected and the states are shown, this option will save the data of the states, all the counties that are defined in those states and all places within those counties.";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Export all locations to file";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Export all location data to a file. This option will save all location data and transfer it to the local computer.";

$pgv_lang["GOOGLEMAP_COORD"]            = "Display Map Coordinates";
$pgv_lang["GOOGLEMAP_COORD_help"]       = "~#pgv_lang[GOOGLEMAP_COORD]#~<br /><br />This options sets whether Latitude and Longitude are displayed on the pop-up window attached to map markers";

// Help texts for places_edit.php
$pgv_lang["PLE_EDIT"]               	= "Edit Google Map Places";
$pgv_lang["PLE_EDIT_help"]              = "~#pgv_lang[PLE_EDIT]#~<br /><br />Here you can add, edit or delete Google Map place details.";

$pgv_lang["PLE_PLACES"]                 = "Enter place name";
$pgv_lang["PLE_PLACES_help"]            = "~#pgv_lang[PLE_PLACES]#~<br /><br />Here you can enter or change the name of the place.<br />The 'Search on this level' option allow to search the latitude and longitude of entered place name only among the places with that level.<br />The 'Search on this level' option allow to search the latitude and longitude of all places having entered name. Some the lower levels places can not be displayed with this method of search.";

$pgv_lang["PLE_PRECISION"]              = "Enter precision";
$pgv_lang["PLE_PRECISION_help"]         = "~#pgv_lang[PLE_PRECISION]#~<br /><br />Here you can enter the precision. Based on this setting the number of digits that will be used in the latitude and longitude is determined.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Enter latitude or Longitude";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "~#pgv_lang[PLE_LATLON_CTRL]#~<br /><br />Here the latitude and longitude can be entered. First select the area you want to set (E/W or N/S). Next enter the value for latitude or longitude. This should be a decimal value.<br />The decimal value can be determined by converting the minutes and seconds using the following formula:<br />degrees_decimal = ((seconds / 60) + minutes) / 60 + degrees.";

$pgv_lang["PLE_ZOOM"]                   = "Enter zoom level";
$pgv_lang["PLE_ZOOM_help"]              = "~#pgv_lang[PLE_ZOOM]#~<br /><br />Here the zoom level can be entered. This value will be used as the minimal value when displaying this geographic location on a map.";

$pgv_lang["PLE_ICON"]                   = "Select an icon";
$pgv_lang["PLE_ICON_help"]              = "~#pgv_lang[PLE_ICON]#~<br /><br />Here an icon can be set or removed. Using this link a flag can be selected. When this geographic location is shown, this flag will be displayed.";

$pgv_lang["PLE_FLAGS"]                  = "Select flag";
$pgv_lang["PLE_FLAGS_help"]             = "~#pgv_lang[PLE_FLAGS]#~<br /><br />Using the pull down menu it is possible to select a country, of which a flag can be selected. If no flags are shown, then there are no flags defined for this country.";

$pgv_lang["PLIF_FILENAME"]              = "Enter filename";
$pgv_lang["PLIF_FILENAME_help"]         = "~#pgv_lang[PLIF_FILENAME]#~<br /><br />Browse for the file on your computer which contains the place locations in CSV format.";
$pgv_lang["PLIF_LOCALFILE_help"]        = "~#pgv_lang[PLIF_FILENAME]#~<br /><br />Select a file from the list of files already on the server which contains the place locations in CSV format.";

$pgv_lang["PLIF_CLEAN"]                 = "Clean placelocation database";
$pgv_lang["PLIF_CLEAN_help"]            = "~#pgv_lang[PLIF_CLEAN]#~<br /><br />When this option is selected the placelocation database will be cleared. This means that only the location stored in this table will be deleted. This will not change anything in the GEDCOM.";

$pgv_lang["PLIF_UPDATE"]                = "Update existing records";
$pgv_lang["PLIF_UPDATE_help"]           = "~#pgv_lang[PLIF_UPDATE]#~<br /><br />Only update existing records.<br />When this option is selected only existing records will be updated. This can be used to fill in latitude and longitude of places that have been imported from a GEDCOM. No new places will be added to the database.";

$pgv_lang["PLIF_OVERWRITE"]             = "Overwrite location data";
$pgv_lang["PLIF_OVERWRITE_help"]        = "~#pgv_lang[PLIF_OVERWRITE]#~<br /><br />Overwrite location data in the database with data from the file.<br />When this option is selected, the location data in the database (latitude, longitude, zoomlevel and flag) are overwritten with the data in the file, if available. If the record is not already in the database a new record will be created, unless the Update-only  option is also selected.";

$pgv_lang["PLE_ACTIVE"]             	= "List inactive places";
$pgv_lang["PLE_ACTIVE_help"]        	= "~#pgv_lang[PLE_ACTIVE]#~<br /><br /><strong>List places in the GoogleMaps table that are not used by any current GEDCOM(s).</strong><br /><br />The display is set, by default, to only display for editing here those places that exist on BOTH your GEDCOM files and your GoogleMap tables.<br /><br />When this option is checked, and \"View\" clicked, the list of places will display ALL places at this level.<br /><br />This is designed to speed up the display of the list when large place lists have been imported, but not all used.<br /><br />NOTE - if the option is checked the full list may take a few minutes to display";

// Help text for placecheck.php
$pgv_lang["GOOGLEMAP_PLACECHECK"]       = "Place Checking Tool";
$pgv_lang["GOOGLEMAP_PLACECHECK_help"]  = "~#pgv_lang[GOOGLEMAP_PLACECHECK]#~<br /><br /><strong>This tool</strong> provides a way to compare places in your gedcom file with the matching entries in the googlemaps 'placelocations' table.<br /><br /><strong>The display</strong> can be structured for a specific gedcom file; for a specific country within that file; and for a particular area (e.g. state or county) within that country.<br /><br /><strong>Places</strong>are listed alphabetically so that minor spelling differences can be easily spotted, and corrected.<br /><br /><strong>From</strong> the results of the comparison you can click on place names for one of these three options:<br /><br /><strong>1 - </strong>For gedcom file places you will be taken to the Place Heirarchy view. Here you will see all records that are linked to that place.<br /><br /><strong>2 - </strong>For places that exist in the gedcom file, but not in the googlemap table (highlighted in red), you will get the googlemap \"Add place\" screen.<br /><br /><strong>3 - </strong>For places that exist in both the gedcom file and the googlemap table (perhaps without coordinates) you will get the googlemap \"edit place\" screen. Here you can edit any aspect of the place record for the googlemap display.<br /><br /><strong>Hovering</strong> over any place in the googlemap table columns will display the zoom level curently set for that place.";
$pgv_lang["PLACECHECK_FILTER"]       	= "Place Check - List Filtering Optons";
$pgv_lang["PLACECHECK_FILTER_help"]  	= "~#pgv_lang[PLACECHECK_FILTER]#~<br /><br />This section includes options to limit or extend the scope of the listed places.<br /><br />It is hoped to add more options in the future.";
$pgv_lang["PLACECHECK_MATCH"]       	= "Include matched places";
$pgv_lang["PLACECHECK_MATCH_help"]  	= "~#pgv_lang[PLACECHECK_MATCH]#~<br /><br />By default the list does NOT INCLUDE places that are fully matched between the GEDCOM file and the GoogleMap tables.<br />Fully matched means all levels exist in both the gedcom file and the GoogleMap tables; and the GoogleMap places have coordinates for every level.<br /><br />Check this block to include those matched places";

//wooc Options for Place Hierarchy display
$pgv_lang["GOOGLEMAP_PH"]             	= "Use Googlemap for Place Hierarchy";
$pgv_lang["GOOGLEMAP_PH_help"]        	= "~#pgv_lang[GOOGLEMAP_PH]#~<br /><br />Use this option to enable (Yes) or disable (No) the ability to substitute Googlemap for PhpGEDView's usual Place Hierarchy. To be able to set this option to YES, the Googlemap module must be also be enabled. CAUTION: Before using this option, it is recommended that you insert all places currently existing in your GED into the Googlemap tables.";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE"]		= "Size of Place Hierarchy map (in pixels)";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE_help"]	= "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />The size of the map (in pixels) as shown on the Place Hierarchy pages.";
$pgv_lang["GOOGLEMAP_PH_MARKER"]		= "Type of place markers in Place Hierarchy";
$pgv_lang["GOOGLEMAP_PH_MARKER_help"]	= "~#pgv_lang[GOOGLEMAP_PH_MARKER]#~<br /><br />Here you can specify what type of marker be able to use (standard or flag). If place has no flag, use standard marker.";
$pgv_lang["GM_DISP_SHORT_PLACE"]		= "Display short placenames";
$pgv_lang["GM_DISP_SHORT_PLACE_help"]	= "~#pgv_lang[GM_DISP_SHORT_PLACE]#~<br /><br />Here you can choose between two types of displaying places names in hierarchy. If set Yes the place has short name or actual level name, if No - full name.<br /><b>Examples:<br />Full name: </b>Chicago, Illinois, USA<br /><b>Short name: </b>Chicago<br /><b>Full name: </b>Illinois, USA<br /><b>Short name: </b>Illinois";
$pgv_lang["GM_DISP_COUNT"]				= "Display indis and families counts";
$pgv_lang["GM_DISP_COUNT_help"]			= "~#pgv_lang[GM_DISP_COUNT]#~<br /><br />Here you can specify if the counts of indis and families connected to the place is displayed. Now if GEDCOM file contains many people is recomended to turn it off.";
$pgv_lang["GOOGLEMAP_PH_WHEEL"]			= "Use mouse wheel for zoom";
$pgv_lang["GOOGLEMAP_PH_WHEEL_help"]	= "~#pgv_lang[GOOGLEMAP_PH_WHEEL]#~<br /><br />Here you can specify if the mouse wheel is enebled for zooming.";
$pgv_lang["GOOGLEMAP_PH_CONTROLS"]		= "Hide map controls";
$pgv_lang["GOOGLEMAP_PH_CONTROLS_help"]	= "~#pgv_lang[GOOGLEMAP_PH_CONTROLS]#~<br /><br />This option allow to hide map controls (i.e. the map type choice) if mouse is outside the map.";

// Pedigree map
$pgv_lang["PEDIGREE_MAP_help1"]		= "To use the map";
$pgv_lang["PEDIGREE_MAP_help2"]		= "~#pgv_lang[root_person]#~<br /><br />Select the individual you want as <strong>root person</strong> either by entering their ID, or use the <strong>Find ID</strong> icon.";
$pgv_lang["PEDIGREE_MAP_help3"]		= "~#pgv_lang[generations]#~<br /><br />Set the number of generations you want to see. A sensible maximum would be 8, as this still displays up to 255 people.";
$pgv_lang["PEDIGREE_MAP_help4"]		= "Click on a name on the right or any icon on the map to display an information window at their birth place.";
$pgv_lang["PEDIGREE_MAP_help5"]		= "Click on the details in that info window to re-draw the map with that person as the root.";

$pgv_lang["PEDIGREE_MAP_clustersize"]		= "Cluster Size";
$pgv_lang["PEDIGREE_MAP_clustersize_help"]	= "~#pgv_lang[PEDIGREE_MAP_clustersize]#~<br /><br />The number of markers to be placed at one point before a trail of pins is started in a north east line behind the younger generations.  The 'trail' is usually only visable at high zoom values.";
$pgv_lang["PEDIGREE_MAP_hidelines"]			= "Hide lines";
$pgv_lang["PEDIGREE_MAP_hidelines_help"]	= "~#pgv_lang[PEDIGREE_MAP_hidelines]#~<br /><br />Hide the lines connecting the child to each parent if they exist on the map.";
$pgv_lang["PEDIGREE_MAP_hideflags"]			= "Hide flags";
$pgv_lang["PEDIGREE_MAP_hideflags_help"]	= "~#pgv_lang[PEDIGREE_MAP_hideflags]#~<br /><br />Hide the flags that are configured in the googlemap module.  Ususally these are for countries and states.&nbsp; This serves as a visual queue that the markers around the flag are from the general area, and not the specific spot.";
$pgv_lang["PEDIGREE_MAP_help"]				= "~#pgv_lang[PEDIGREE_MAP_help1]#~<br /><br />#pgv_lang[PEDIGREE_MAP_help4]#<br />#pgv_lang[PEDIGREE_MAP_help5]#<br /><br />#pgv_lang[PEDIGREE_MAP_help2]#<br /><br />#pgv_lang[PEDIGREE_MAP_help3]#<br /><br />#pgv_lang[PEDIGREE_MAP_clustersize_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hidelines_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hideflags_help]#<br /><br />";
?>
