<?php
/**
 * French Language file for Google map module
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
 * @package PhpGedView
 * @subpackage GoogleMap
 * @version $Id: help_text.fr.php 6661 2010-01-03 14:15:53Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_CONFIG"]           = "Configurer GoogleMap";
$pgv_lang["GOOGLEMAP_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />Configurer les paramètres généraux du module GoogleMap.";

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Activer GoogleMap";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Option pour activer ou désactiver GoogleMap.<br/>L'onglet reste visible sur la page 'individu' mais il est vide quand l'option est déactivée. Le lien de configuration pour l'administrateur reste disponible.";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Clé API Google Maps";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "~#pgv_lang[googlemapkey]#~<br /><br />Insérez votre clé API Google Maps ici.";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]         = "Type de carte";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />Le type de la carte qui sera montrée par défaut. La carte peut être de type Plan, Satellite, ou Hybride.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]         = "Taille de la carte";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />La taille de la carte (en pixels) telle qu'elle apparaitra sur la page Individu.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]         = "Facteur de zoom";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Facteur de zoom mini et maxi applicable à la carte. 1 correspond à une vue de la carte entière, 15 permet de voir juste une maison. Notez qu'un zoom de 15 n'est disponible que dans certains endroits.";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Précision de la latitude et de la longitude";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "~#pgv_lang[GOOGLEMAP_PRECISION]#~<br /><br />Ceci précise le degré de précision des coordonnées. Par exemple, un pays entier sera spécifié avec une précision 0 (i.e. 0 chiffres après la virgule), alors qu'une ville a besoin de trois ou quatre chiffres.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Valeur par défaut pour le premier niveau";
#pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Here the default level for the highest level in the place-hierarchy can be defined. If a place cannot be found this name is added as the highest level (country) and the database is searched again.";

$pgv_lang["GM_NOF_LEVELS"]              = "Nombre de niveaux";
#pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />This field indicates the number of levels in the places-hierarchy that is being used by the Googlemap modules.<br/>The default value is 4 (Country, State, County, Place), which is usually good enough. If you want to add an extra level (for example to add specific location like cemeteries or schools) change this value. If you want to remove a level (for example county) you can also change this value, but keep in mind that the files containing the place-locations contain a 4-level structure.";

$pgv_lang["GM_NAME_PREFIX"]             = "Préfixe";
#pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />This value will be added to the front of the names on this level. Multiple values can be used, seperated by semicolons";

$pgv_lang["GM_NAME_POSTFIX"]            = "Suffixe";
#pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />This value will be added to the back of the names on this level. Multiple values can be used, seperated by semilcolons";

$pgv_lang["GM_NAME_PRE_POST"]           = "Ordre préfixe/suffixe";
#pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />This field indicates the order in which names are tried using the prefix and postfix. The possible values are:<br/><ul><li>No pre/postfix</li><li>Normal name, Prefix, Postfix, both</li><li>Normal name, Postfix, Prefix, both</li><li>Prefix, Postfix, both, Normal name</li><li>Postfix, Prefix, both, Normal name</li><li>Prefix, Postfix, Normal name, both</li><li>Postfix, Prefix, Normal name, both</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Éditer ou effacer un lieu";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "Permet d'éditer ou de supprimer un lieu. Une nouvelle fenêtre s'affiche et permet de modifier les données.<br />Si vous cliquer sur l'icône de suppression, cet enregistrement sera supprimé. Cette opération n'est possible que si aucun évènement n'est en relation avec ce lieu. Si c'est bien le cas, l'icône de suppression est active, sinon elle est inactive.";

$pgv_lang["PL_ADD_LOCATION"]            = "Ajouter un lieu";
$pgv_lang["PL_ADD_LOCATION_help"]       = "Utiliser cette fonction pour ajouter une entrée à la table qui contient tous les lieux.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Importer depuis le GEDCOM en cours";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "Permet d'importer des lieux depuis le GEDCOM en cours. Le GEDCOM en cours est parcouru et tous les lieux rencontrés sont ajoutées à la table de la base de données. Si une latitude et une longitude sont trouvées, celles-ci sont aussi importées.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Importer depuis tous les GEDCOMs";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "Permet d'importer des lieux depuis tous les GEDCOMs. Tous les GEDCOMs sont parcourus et tous les lieux trouvés sont ajoutés à la table de la base de données. Si une latitude et une longitude sont trouvées, celles-ci sont aussi importées.";

$pgv_lang["PL_IMPORT_FILE"]             = "Importer depuis un fichier";
$pgv_lang["PL_IMPORT_FILE_help"]        = "Permet d'importer des lieux depuis un fichier. Ce fichier doit être au format CSV et être hébergé sur l'ordinateur local. Le séparateur de champs est le point-virgule.";

$pgv_lang["PL_EXPORT_FILE"]             = "Exporter la vue courante vers un fichier";
$pgv_lang["PL_EXPORT_FILE_help"]        = "Permet d'exporter les lieux vers un fichier. Cette option enregistre les données de la vue en cours, ainsi que toutes les données qui en dépendent. Par exemple, si la France choisie en tant que pays et que les régions sont visibles, cette option sauvera les données de ces régions et de leurs départements, ainsi que les communes de ces départements";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Exporter tous les lieux vers un fichier";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "Permet d'exporter tous les lieux vers un fichier et de le transférer vers l'ordinateur local.";

$pgv_lang["GOOGLEMAP_COORD"]            = "Afficher les coordonnées";
#pgv_lang["GOOGLEMAP_COORD_help"]       = "~#pgv_lang[GOOGLEMAP_COORD]#~<br /><br />This options sets whether Latitude and Longitude are displayed on the pop-up window attached to map markers";

// Help texts for places_edit.php
$pgv_lang["PLE_EDIT"]                   = "Mettre à jour les lieux";
#pgv_lang["PLE_EDIT_help"]              = "Here you can add, edit or delete Google Map place details.";

$pgv_lang["PLE_PLACES"]                 = "Nom du lieu";
$pgv_lang["PLE_PLACES_help"]            = "Permet de définir ou de modifier le nom du lieu.";

$pgv_lang["PLE_PRECISION"]              = "Précision";
$pgv_lang["PLE_PRECISION_help"]         = "Permet de définir la précision. Cette valeur est utilisée pour déterminer le nombre de chiffres significatifs de la latitude et de la longitude.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Latitude ou longitude";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "Permet d'entrer la latitude et la longitude du lieu. Sélectionnez d'abord la coordonnée (E/W ou N/S). Entrez ensuite la valeur pour la latitude ou la longitude. Elles doivent être exprimées en degrés décimaux.<br />Les degrés décimaux peuvent être déduits des degrés/minutes/secondes grâce à la formule suivante:<br />degrés_décimaux = ((secondes / 60) + minutes) / 60 + degrés.";

$pgv_lang["PLE_ZOOM"]                   = "Facteur de zoom";
$pgv_lang["PLE_ZOOM_help"]              = "Permet de définir le facteur de zoom. Cette valeur définit le facteur minimal lors de l'affichage de ce lieu sur la carte.";

$pgv_lang["PLE_ICON"]                   = "Icône";
$pgv_lang["PLE_ICON_help"]              = "Permet de choisir ou de supprimer une icône. Lorsque ce lieu est affiché, l'icône choisie apparait";

$pgv_lang["PLE_FLAGS"]                  = "Drapeau";
$pgv_lang["PLE_FLAGS_help"]             = "Ce menu déroulant permet de choisir un pays et de sélectionner son drapeau. Si aucun drapeau n'est défini pour ce pays aucun drapeau n'est montré.";

$pgv_lang["PLIF_FILENAME"]              = "Nom du fichier";
#pgv_lang["PLIF_FILENAME_help"]         = "Enter the name of the file containing the place locations in CSV format.";

$pgv_lang["PLIF_CLEAN"]                 = "Vider la table placelocation";
#pgv_lang["PLIF_CLEAN_help"]            = "When this option is selected the placelocation database will be cleared. This means that only the location stored in this table will be deleted. This will not change anything in the GEDCOM.";

#pgv_lang["PLIF_UPDATE"]                = "Update existing records";
#pgv_lang["PLIF_UPDATE_help"]           = "Only update existing records.<br/>When this option is selected only existing records will be updated. This can be used to fill in latitude and longitude of places that have been imported from a GEDCOM. No new places will be added to the database.";

#pgv_lang["PLIF_OVERWRITE"]             = "Overwrite location data";
#pgv_lang["PLIF_OVERWRITE_help"]        = "Overwrite location data in the database with data from the file.<br/>When this option is selected, the location data in the database (latitude, longitude, zoomlevel and flag) are overwritten with the data in the file, if available. If the record is not already in the database a new record will be created, unless the Update-only  option is also selected.";

$pgv_lang["PLE_ACTIVE"]                 = "Liste des lieux inutilisés";
#pgv_lang["PLE_ACTIVE_help"]            = "<strong>List places in the GoogleMaps table that are not used by any current GEDCOM(s).</strong><br/><br/>The display is set, by default, to only display for editing here those places that exist on BOTH your GEDCOM files and your GoogleMap tables.<br/><br/>When this option is checked, and \"View\" clicked, the list of places will display ALL places at this level.<br/><br/>This is designed to speed up the display of the list when large place lists have been imported, but not all used.<br/><br/>NOTE - if the option is checked the full list may take a few minutes to display";

// Help text for placecheck.php
$pgv_lang["GOOGLEMAP_PLACECHECK"]       = "Outil de vérification des lieux";
#pgv_lang["GOOGLEMAP_PLACECHECK_help"]  = "~#pgv_lang[GOOGLEMAP_PLACECHECK]#~<br /><br /><strong>This tool</strong> provides a way to compare places in your gedcom file with the matching entries in the googlemaps 'placelocations' table.<BR/><BR/><strong>The display</strong> can be structured for a specific gedcom file; for a specific country within that file; and for a particular area (e.g. state or county) within that country.<BR/><BR/><strong>Places</strong>are listed alphabetically so that minor spelling differences can be easily spotted, and corrected.<BR/><BR/><strong>From</strong> the results of the comparison you can click on place names for one of these three options:<BR/><BR/><strong>1 - </strong>For gedcom file places you will be taken to the Place Heirarchy view. Here you will see all records that are linked to that place.<BR/><BR/><strong>2 - </strong>For places that exist in the gedcom file, but not in the googlemap table (highlighted in red), you will get the googlemap \"Add place\" screen.<BR/><BR/><strong>3 - </strong>For places that exist in both the gedcom file and the googlemap table (perhaps without coordinates) you will get the googlemap \"edit place\" screen. Here you can edit any aspect of the place record for the googlemap display.<BR/><BR/><strong>Hovering</strong> over any place in the googlemap table columns will display the zoom level curently set for that place.";
#pgv_lang["PLACECHECK_FILTER"]          = "Place Check - List Filtering Optons";
#pgv_lang["PLACECHECK_FILTER_help"]     = "~#pgv_lang[PLACECHECK_FILTER]#~<br /><br />This section includes options to limit or extend the scope of the listed places.<br /><br />It is hoped to add more options in the future.";
#pgv_lang["PLACECHECK_MATCH"]           = "Include matched places";
#pgv_lang["PLACECHECK_MATCH_help"]      = "~#pgv_lang[PLACECHECK_MATCH]#~<br /><br />By default the list does NOT INCLUDE places that are fully matched between the GEDCOM file and the GoogleMap tables.<br/>Fully matched means all levels exist in both the gedcom file and the GoogleMap tables; and the GoogleMap places have coordinates for every level.<br/><br/>Check this block to include those matched places";

// Pedigree map
$pgv_lang["PEDIGREE_MAP_help1"]				= "Pour utiliser la carte";
$pgv_lang["PEDIGREE_MAP_help2"]				= "~#pgv_lang[root_person]#~<br /><br />Sélectionnez l'individu que vous voulez en tant que <strong>personne racine</strong> ou bien en entrant son ID, ou bien en utilisant l'icône <strong>Choisir</strong>.";
$pgv_lang["PEDIGREE_MAP_help3"]				= "~#pgv_lang[generations]#~<br /><br />Paramétrez le nombre de générations que vous voulez visualiser. Le nombre maximum raisonnable est de 8, car il est possible d'afficher au maximum 255 personnes.";
$pgv_lang["PEDIGREE_MAP_help4"]				= "Cliquez sur un nom dans le bandeau de droite ou sur n'importe quelle icône affichée sur la carte pour afficher une fenêtre d'information sur leur lieu de naissance.";
$pgv_lang["PEDIGREE_MAP_help5"]				= "Cliquez sur les détails dans cette fenêtre d'information pour redessiner la carte avec cette personne en tant que racine.";

$pgv_lang["PEDIGREE_MAP_clustersize"]		= "Taille du cluster";
$pgv_lang["PEDIGREE_MAP_clustersize_help"]	= "~#pgv_lang[PEDIGREE_MAP_clustersize]#~<br /><br />Représente le nombre de marqueurs (1,3 ou 5) qui doivent être placés sur un point de la carte avant qu'une trace de pins ne soit tracée vers les générations les plus jeunes.&nbsp La 'trace' n'est normalement visible que pour des valeurs de zoom élevées.";
$pgv_lang["PEDIGREE_MAP_hidelines"]			= "Masquer les lignes";
$pgv_lang["PEDIGREE_MAP_hidelines_help"]	= "~#pgv_lang[PEDIGREE_MAP_hidelines]#~<br /><br />Si vous cochez la case Masquer les lignes, vous faites disparaître les lignes reliant les enfants à chaque parent s'ils existent sur la carte.";
$pgv_lang["PEDIGREE_MAP_hideflags"]			= "Masquer les drapeaux";
$pgv_lang["PEDIGREE_MAP_hideflags_help"]	= "~#pgv_lang[PEDIGREE_MAP_hideflags]#~<br /><br />Si vous cochez la case Masquer les drapeaux, les drapeaux qui sont configurés dans le module googlemap seront masqués.  Normalement ces drapeaux existent pour les pays et les états. &nbsp; ";
$pgv_lang["PEDIGREE_MAP_help"]				= "~#pgv_lang[PEDIGREE_MAP_help1]#~<br /><br />#pgv_lang[PEDIGREE_MAP_help4]#<br />#pgv_lang[PEDIGREE_MAP_help5]#<br /><br />#pgv_lang[PEDIGREE_MAP_help2]#<br /><br />#pgv_lang[PEDIGREE_MAP_help3]#<br /><br />#pgv_lang[PEDIGREE_MAP_clustersize_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hidelines_help]#<br /><br />#pgv_lang[PEDIGREE_MAP_hideflags_help]#<br /><br />";
?>
