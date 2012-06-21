<?php
/**
 * Catalan language file for PhpGedView
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 to 2009  PGV Development Team.  All rights reserved.
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
 * @translator: Antoni Plans i Vilà
 * @package PhpGedView
 * @subpackage GoogleMap
 * @version $Id: help_text.ca.php 6487 2009-11-29 17:39:54Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["GOOGLEMAP_CONFIG"]           = "Configurar Google-map";
$pgv_lang["GOOGLEMAP_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />Configureu aquí tots els aspectes del mòdul GoogleMap.";

$pgv_lang["GOOGLEMAP_ENABLE"]           = "Activar GoogleMap";
$pgv_lang["GOOGLEMAP_ENABLE_help"]      = "~#pgv_lang[GOOGLEMAP_ENABLE]#~<br /><br />Amb aquesta opció podeu activar o desactivar la funcionalitat de GoogleMap.<br/>Si la desactiveu, la pestanya Mapa de la pàgina personal encara es veurà, però sortirà buida. El víncle de configuració pels administradors restarà disponible.";

$pgv_lang["GOOGLEMAP_API_KEY"]          = "Clau per a l'API de Google-map";
$pgv_lang["GOOGLEMAP_API_KEY_help"]     = "~#pgv_lang[GOOGLEMAP_API_KEY]#~<br /><br />Poseu aquí la vostra clau per a l'API de Google Maps. Si no la teniu, podeu damanar-la a: <a target=\"_blank\" href=\"http://www.google.com/apis/maps/\">http://www.google.com/apis/maps/</a>";

$pgv_lang["GOOGLEMAP_MAP_TYPE"]         = "Tipus de Google-map";
$pgv_lang["GOOGLEMAP_MAP_TYPE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_TYPE]#~<br /><br />El tipus de mapa que es mostrarà per defecte. Pot ser Mapa, Satèl·lit o Híbrid.";

$pgv_lang["GOOGLEMAP_MAP_SIZE"]         = "Mides de Google-map";
$pgv_lang["GOOGLEMAP_MAP_SIZE_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />Mida del mapa (en píxels) a la pàgina personal.";

$pgv_lang["GOOGLEMAP_MAP_ZOOM"]         = "Factor d'augment de Google-map";
$pgv_lang["GOOGLEMAP_MAP_ZOOM_help"]    = "~#pgv_lang[GOOGLEMAP_MAP_ZOOM]#~<br /><br />Els factors màxim i mínim d'augment per al mapa Google. Un 1 indica el mapa complert, 15 seria un edifici específic. Penseu que el 15 solament és disponible en algunes àrees.";

$pgv_lang["GOOGLEMAP_PRECISION"]        = "Precisió de la latitud i la longitud";
$pgv_lang["GOOGLEMAP_PRECISION_help"]   = "~#pgv_lang[GOOGLEMAP_PRECISION]#~<br /><br />Això especifica la precisió dels diferents nivells al introduir noves ubicacions geogràfiques. Per exemple, un país s'especificaria amb precisió 0 (=0 dígits darrera la coma decimal), mentre que a una població li calen 3 o 4 dígits.";

$pgv_lang["GM_DEFAULT_LEVEL_0"]         = "Valor predeterminat pel nivell més alt";
$pgv_lang["GM_DEFAULT_LEVEL_0_help"]    = "~#pgv_lang[GM_DEFAULT_LEVEL_0]#~<br /><br />Aquí es defineix el valor predeterminat pel nivell més alt de la jerarquia de llocs. Si un lloc no pot localitzar-se, aquest nom se li afegeix com nivell més alt (país) i es recerca a la base de dades de nou.";

$pgv_lang["GM_NOF_LEVELS"]              = "Aquest camp indica el nombre de nivells a utilitzar a Googlemap";
$pgv_lang["GM_NOF_LEVELS_help"]         = "~#pgv_lang[GM_NOF_LEVELS]#~<br /><br />Aquest camp indica el nombre de nivells a la jerarquia de llocs que s'utilitza als mòduls Googlemap.<br/>El valor predeterminat és 4 (País, Estat/Província, Comtat, Lloc) i que generalment és adequat. Si voleu afegir un nivell extra (per ejemple, per afegir llocs específics com cementiris o escoles) canvieu aquest valor. Si voleu eliminar un nivell (per exemple, comtat) també podeu canviar aquest valor, però tingueu en compte que els arxius que contenen les ubicacions dels llocs tenen una estructura de quatre nivells.";

$pgv_lang["GM_NAME_PREFIX"]             = "Prefix pels noms emprats en aquest nivell";
$pgv_lang["GM_NAME_PREFIX_help"]        = "~#pgv_lang[GM_NAME_PREFIX]#~<br /><br />Aquest valor por avantposar-se als noms d'aquest nivell. Podeu emprar diversos valors, separats per punt i coma";

$pgv_lang["GM_NAME_POSTFIX"]            = "Sufix pels noms emprats en aquest nivell";
$pgv_lang["GM_NAME_POSTFIX_help"]       = "~#pgv_lang[GM_NAME_POSTFIX]#~<br /><br />Aquest valor s'afegirà darrere dels noms d'aquest nivell. Podeu emprar diversos valors, separats per punt i coma";

$pgv_lang["GM_NAME_PRE_POST"]           = "Ordre de prefix i sufxo a emprar.";
$pgv_lang["GM_NAME_PRE_POST_help"]      = "~#pgv_lang[GM_NAME_PRE_POST]#~<br /><br />Aquest camp indica l'ordre en que es proven els noms emprant el prefix i el sufix. El valors possibles son:<br/><ul><li>Ni prefix ni sufix</li><li>Nom normal, Prefix, Sufix, ambdòs</li><li>Nom normal, Sufix, Prefix, ambdòs</li><li>Prefix, Sufix, ambdòs, Nom normal</li><li>Sufix, Prefix, ambdòs, Nom normal</li><li>Prefix, Sufix, Nom normal, ambdòs</li><li>Sufix, Prefix, Nom normal, ambdòs</li></ul>";

$pgv_lang["PL_EDIT_LOCATION"]           = "Modificar o esborrar posició";
$pgv_lang["PL_EDIT_LOCATION_help"]      = "Aquí podeu modificar la ubicació o esborrar-la. Si polseu a Modificar, s'obrirà una nova finestra en la que podreu canviar els valors de la posició geogràfica.<br/>Si polseu a la icona d'Esborrar, el registre s'esborrarà. Solament podeu fer-ho si no hi ha altres registres vinculats amb aquesta ubicació. La icona s'activa o es desactiva segons sigui possible emprar-la o no.";
$pgv_lang["PL_ADD_LOCATION"]            = "Afegir posició geogràfica";
$pgv_lang["PL_ADD_LOCATION_help"]       = "Feu-ho servir per afegir un lloc a la taula de posicions. La posició s'afegirà a aquest nivell.";

$pgv_lang["PL_IMPORT_GEDCOM"]           = "Importar posicions geogràfiques del GEDCOM";
$pgv_lang["PL_IMPORT_GEDCOM_help"]      = "Importar dades de posició geogràfica del GEDCOM actual. S'analitzarà el GEDCOM actual i tots els llocs s'afegiran a la taula. Si hi ha dades de latitud i longitud, també s'importaran.";

$pgv_lang["PL_IMPORT_ALL_GEDCOM"]       = "Importar posicions geogràfiques de tots els GEDCOM";
$pgv_lang["PL_IMPORT_ALL_GEDCOM_help"]  = "Importar dades de posició geogràfica de tots els GEDCOM. S'analitzaran tots els GEDCOM i tots els llocs s'afegiran a la taula. Si hi ha dades de latitud i longitud, també s'importaran.";

$pgv_lang["PL_IMPORT_FILE"]             = "Importar posicions geogràfiques d'un arxiu";
$pgv_lang["PL_IMPORT_FILE_help"]        = "Importar les dades de posició geogràfiques d'un arxiu. L'arxiu cal que tingui format CSV a l'equip local. El separador de registres utilitzat dins de les línees és ';'.";

$pgv_lang["PL_EXPORT_FILE"]             = "Exportar posicions a un arxiu";
$pgv_lang["PL_EXPORT_FILE_help"]        = "Exportar les dades de posició a un arxiu. Aquesta opció salvarà les dades de la vista actual i totes les dependents a un arxiu. Això vol dir que si seleccioneu un país i s'hi mostren els estats o províncies, aquesta opció salvarà les dades dels estats o províncies, tots els comtats definits en aquests estats o províncies i tots els llocs en aquests comtats.";

$pgv_lang["PL_EXPORT_ALL_FILE"]         = "Exportar totes les posicions a un arxiu";
$pgv_lang["PL_EXPORT_ALL_FILE_help"]    = "Exportar totes les dades de posició a un arxiu. Aquesta opció salvarà totes les dades de posoció i les transferirà al vostre equip local.";

$pgv_lang["GOOGLEMAP_COORD"]            = "Mostrar coordenades del mapa";
$pgv_lang["GOOGLEMAP_COORD_help"]       = "~#pgv_lang[GOOGLEMAP_COORD]#~<br /><br />Aquesta opció determina si es mostren o no la latitud i la longitud a la finestra emergent associada als marcadors del mapa";

// Help texts for places_edit.php
$pgv_lang["PLE_EDIT"]               	= "Modificar els llocs de Google Map";
$pgv_lang["PLE_EDIT_help"]              = "Aquí podeu afegir, modificar o esborrar els detalls dels llocs per a Google Map.";

$pgv_lang["PLE_PLACES"]                 = "Introduiu el nom del lloc";
$pgv_lang["PLE_PLACES_help"]            = "Aquí podeu introduir o canviar el nom del lloc.";

$pgv_lang["PLE_PRECISION"]              = "Introduiu la precisió";
$pgv_lang["PLE_PRECISION_help"]         = "Aquí podeu introduir la precisió. En funció d'aquest ajust es determina el nombre de dígits que es farà servir per a la latitud i la longitud.";

$pgv_lang["PLE_LATLON_CTRL"]            = "Introduiu latitud o longitud";
$pgv_lang["PLE_LATLON_CTRL_help"]       = "Aquí podeu introduir la latitud i la longitud. Seleccioneu primer la coordenada que desitgeu fixar (E/O o N/S). Introduiu tot seguit el seu valor. El format és en graus y fracció decimal.<br/>El valor segons aquests format podeu determinar-lo convertint els minuts i segons amb la següent fórmula:<br/>graus_i_fracció_decimal = ((segons / 60) + minuts) / 60 + graus.";

$pgv_lang["PLE_ZOOM"]                   = "Aquí podeu introduir el nivell d'augment. Aquest valor es farà servir com el mínim al mostrar aquesta posició geogràfica en un mapa.";
$pgv_lang["PLE_ZOOM_help"]              = "Aquí podeu introduir el nivell d'augment. Aquest valor es farà servir com el mínim al mostrar aquesta posició geogràfica en un mapa.";

$pgv_lang["PLE_ICON"]                   = "Seleccioneu una icona";
$pgv_lang["PLE_ICON_help"]              = "Aquí podeu fixar o eliminar una icona. Emprant aquest vincle podeu seleccionar una bandera. Quan es mostri aquesta posició geogàfica, també es mostrarà la bandera.";

$pgv_lang["PLE_FLAGS"]                  = "Seleccioneu bandera";
$pgv_lang["PLE_FLAGS_help"]             = "Emprant el menú desplegable és possible seleccionar un país, per al que podeu seleccionar-hi una bandera. Si no hi surt cap bandera, vol dir que no n'hi ha de definides per a aquest país.";

$pgv_lang["PLIF_FILENAME"]              = "Introduiu nom d'arxiu";
$pgv_lang["PLIF_FILENAME_help"]         = "Introduiu el nom de l'arxiu que conté les posicions dels llocs en format CSV.";
$pgv_lang["PLIF_LOCALFILE_help"]        = "Seleccioneu un arxiu de la llista d'arxius ja presents al servidor que contingui les localitzacions dels llocs en format CSV.";

$pgv_lang["PLIF_CLEAN"]                 = "Netejar la base de dades de posicions de llocs";
$pgv_lang["PLIF_CLEAN_help"]            = "Si seleccioneu aquesta opció s'esborrarà la base de dades 'placelocation'. Això suposa que solament s'esborrarà la posició emmagatzemada en aquesta taula. Això no canvia res al GEDCOM.";

$pgv_lang["PLIF_UPDATE"]                = "Actualitzar els registres existents";
$pgv_lang["PLIF_UPDATE_help"]           = "Solament actualitzar els registres existents.<br/>Si seleccioneu aquesta opció, solament s'actualitzaran els registres existents. Es pot fer servir per omplir la latitud i longitud dels llocs que heu importat d'un GEDCOM. No s'afegiran nous llocs a la base de dades.";

$pgv_lang["PLIF_OVERWRITE"]             = "Sobreescriure les dades de posició";
$pgv_lang["PLIF_OVERWRITE_help"]        = "Sobreescriure les dades de posició de la base de dades amb les d'un arxiu.<br/>Si seleccioneu aquesta opció, les dades de posició a la base de dades ((latitud, longitud, nivell d'ampliació i bandera) se sobreescriuen a les dades de l'arxiu, si estan disponibles. Si el registre no és ja a la base de dades, se'n crearà un de nou, a no ser que seleccioneu també la opció de Solament Actualitzar.";

$pgv_lang["PLE_ACTIVE"]             	= "Llistar llocs inactius";
$pgv_lang["PLE_ACTIVE_help"]        	= "<strong>Llista els llocs a la taula GoogleMaps que no s'estan fent servir per cap GEDCOM actual.</strong><br/><br/>La presentació es fixa, per defecte, per mostrar i modificar solament els llocs que existen tant als vostres arxius GEDCOM como a les vostres taules GoogleMaps.<br/><br/>Si marqueu aquesta opció i polseu a \"Veure-ho\", la llista de llocs mostrarà TOTS els llocs d'aquest nivell.<br/><br/>Això s'ha dissenyat per accelerar la presentació de la llista quan hom ha importat llistes de llocs grans, pero no s'han fet servir tots.<br/><br/>NOTA - si marqueu aquesta opció, pot trigar estona a sortir la llista completa";

// Help text for placecheck.php
$pgv_lang["GOOGLEMAP_PLACECHECK"]       = "Eina de comprovació de llocs";
$pgv_lang["GOOGLEMAP_PLACECHECK_help"]  = "~#pgv_lang[GOOGLEMAP_PLACECHECK]#~<br /><br /><strong>Aquesta eina</strong> proporciona una forma de comparar els llocs del vostre arxiu GEDCOM amb les entrades coincidents de la taula 'placelocations' de GoogleMaps.<BR/><BR/><strong>La presentació</strong> pot estructurar-se per un arxiu GEDCOM específic, per un país específic dins d'aquest arxiu i per a una àrea particular (p.ex. estat o comtat) d'aquest país.<BR/><BR/><strong>Els llocs </strong>es llisten alfabèticament, perqué les petites diferències d'escriptura puguin detectar-se fàcilment i corregir-se.<BR/><BR/><strong>A partir dels </strong> resultats de la comparació podeu polsar sobre els noms de llocs per aquestes tres opcions:<BR/><BR/><strong>1 - </strong>Pels llocs de l'arxiu GEDCOM us menarà a la vista de Jerarquia de Llocs. Aquí veureu tots els registres vinculats amb aquest lloc.<BR/><BR/><strong>2 - </strong>Pels llocs que existeixen a l'arxiu GEDCOM però no a la taula GoogleMap (ressaltada en vermell), obtindreu la pantalla \"Afegir lloc\" a GoogleMap.<BR/><BR/><strong>3 - </strong>Pels llocs que existeixen tant a l'arxiu GEDCOM com a la taula GoogleMap (potser sense coordenades) obtindreu la pantalla de GoogleMap \"modificar lloc\". Aquí podeu modificar qualsevol aspecte del registre del lloc per a la presentació GoogleMap.<BR/><BR/><strong>Passant pre sobre</strong> el punter del ratolí sobre qualsevol lloc de les columnes de la taula GoogleMap es mostrarà el nivell d'ampliació fixat actualment per aquest lloc.";
$pgv_lang["PLACECHECK_FILTER"]       	= "Comprovació de llocs - Opcions de filtratge de la llista";
$pgv_lang["PLACECHECK_FILTER_help"]  	= "~#pgv_lang[PLACECHECK_FILTER]#~<br /><br />Aquesta opció inclou opcions per limitar o extendre l'abast dels llocs llistats.<br /><br />Hom espera afegir-hi més opcions en el futur.";
$pgv_lang["PLACECHECK_MATCH"]       	= "Incloure llocs amb correspondència";
$pgv_lang["PLACECHECK_MATCH_help"]  	= "~#pgv_lang[PLACECHECK_MATCH]#~<br /><br />Per defecte, la llista NO INCOU llocs que es correspoguin completament entre l'arxiu GEDCOM y les taules de GoogleMap.<br/>Las correspondències complertes son aquelles en les que tots els nivells existeixen tant a l'arxiu GEDCOM como a les taules de GoogleMap i els llocs de GoogleMap tenen coordenades per cada nivell.<br/><br/>Marqueu aquesta casella per incloure també aquests llocs";

$pgv_lang["GOOGLEMAP_PH"]             	= "Empra Googlemap per a la jerarquia de llocs";
$pgv_lang["GOOGLEMAP_PH_help"]        	= "~#pgv_lang[GOOGLEMAP_PH]#~<br /><br />Empreu aquesta opció per activar (Si) o desactivar (No) la possibilitat d'emprar Googlemap per comptes del sistema normal de PhpGedView per a la jerarquia de llocs. Per a poder activar aquesta opció, el mòdul Googlemap cal que també estigui actiu. Abans de fer.la servir recomanem afegir tots els llocs ja existents als vostres GEDCOMs a les taules de Googlemap";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE"]		= "Mida del mapa de jerarquia de llocs (en píxels)";
$pgv_lang["GOOGLEMAP_PH_MAP_SIZE_help"]	= "~#pgv_lang[GOOGLEMAP_MAP_SIZE]#~<br /><br />La mida del mapa (en píxels) tal com surt a les pàgines de jerarquia de llocs.";
$pgv_lang["GOOGLEMAP_PH_MARKER"]		= "Tipus de marcadors de llocs en la jerarquia de llocs";
$pgv_lang["GOOGLEMAP_PH_MARKER_help"]	= "~#pgv_lang[GOOGLEMAP_PH_MARKER]#~<br /><br />Aquí podeu especificar quin tipus de marcadors voleu emprar  (estàndar o bandera). Si el lloc no té bandera, es farà servir l'estàndar.";
$pgv_lang["GM_DISP_SHORT_PLACE"]		= "Mostra noms de lloc abreujats";
$pgv_lang["GM_DISP_SHORT_PLACE_help"]	= "~#pgv_lang[GM_DISP_SHORT_PLACE]#~<br /><br />Aquí podeu escollir entre dues formes de mostrar rls noms de lloc jeràrquicament. Si es posa a SI el lloc farà servir un nom abreujat o el nom del nivell. Si és a NO, el nom complet.<br /><b>Exemples:<br />Nom complet: </b>Chicago, Illinois, USA<br /><b>Abreujat: </b>Chicago<br /><b>Complet: </b>Illinois, USA<br /><b>Abreujat: </b>Illinois";
$pgv_lang["GM_DISP_COUNT"]				= "Mostra el comptador de persones i famílies";
$pgv_lang["GM_DISP_COUNT_help"]			= "~#pgv_lang[GM_DISP_COUNT]#~<br /><br />Aquí podeu especificar si es mostren o no els comptadors de les persones o famílies vinculades als llocs. Tanmateix si el fitxer GEDCOM file conté molta gent és recomanable desactivar-ho.";
$pgv_lang["GOOGLEMAP_PH_WHEEL"]			= "Roda del ratolí per acostar i allunyar";
$pgv_lang["GOOGLEMAP_PH_WHEEL_help"]	= "~#pgv_lang[GOOGLEMAP_PH_WHEEL]#~<br /><br />Aquí podeu determinar si la roda del ratolí manipula o no l'ampliació del mapa.";
$pgv_lang["GOOGLEMAP_PH_CONTROLS"]		= "Amaga els controls del mapa";
$pgv_lang["GOOGLEMAP_PH_CONTROLS_help"]	= "~#pgv_lang[GOOGLEMAP_PH_CONTROLS]#~<br /><br />Aquesta opció permet amagar els controls del mapa (p.e. l'elecció de tipus de mapa) quan el ratolí és fora del mapa.";
?>
