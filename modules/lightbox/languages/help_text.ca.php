<?php
/**
 * Lightbox Album module for phpGedView
 * Catalan language file
 * Display media Items using Lightbox
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
 * @package PhpGedView
 * @subpackage Module
 * @version $Id: help_text.ca.php 5586 2009-05-25 23:35:18Z canajun2eh $
 * @author Brian Holland
 * @translator: Antoni Planas i Vilà
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6
$pgv_lang["LIGHTBOX_CONFIG"]           = "Configuració del Projector d'Imatges";
$pgv_lang["LIGHTBOX_CONFIG_help"]      = "~#pgv_lang[LIGHTBOX_CONFIG]#~<br /><br />Configureu aquí tots els aspectes del Projector d'Imatges.";

// Lightbox general help file  ---------------------------------------------------------------------------------------------------------
$pgv_lang["lb_generalLegend"]		 = "Projector d'Imatges - Ajuda General";
$pgv_lang["lb_general_help1"]		 = "<li>~Per veure notes, detalls o fonts associades a una imatge~<br /><b>Menú desplegable:</b><br />Passeu per sobre l'enllaç <b>#pgv_lang[lb_viewedit]#</b> de sota de la miniatura i apareixerà un menú desplegable. Les opcions son <b>#pgv_lang[lb_viewnotes]#</b> (Si n'hi han), <b>#pgv_lang[lb_viewdetails]#</b> i també <b>#pgv_lang[lb_viewsource]#</b>.<br /><br /><b>Visualització:</b><br />Polsant <b>#pgv_lang[lb_viewnotes]#</b> mostrarà un <b>#pgv_lang[lb_balloon_true]#</b> amb la informació de la Nota dins. Torneu a polsar per tancart el <b>#pgv_lang[lb_balloon_true]#</b>.<br />Polsant <b>#pgv_lang[lb_viewdetails]#</b> us mena a la pàgina del visor multimèdia i <b>#pgv_lang[lb_viewsource]#</b> us mena (si esteu autoritzat) a la pàgina de font de l'ítem multimèdia.<br /><br /><b>Edició:</b><br />(Hi ha opcions d'Edició especials per a editors i superiors)<br /><br /><b>Imatge oberta per Lightbox</b><br />Quan hom esta visionant una imatge oberta amb  Lightbox, les icones <b>#pgv_lang[lb_viewnotes]#</b> i <b>#pgv_lang[lb_viewdetails]#</b> poden polsar-se al merge inferior de la imatge.<br /><br /></li>";
$pgv_lang["lb_general_help"]		 = "~#pgv_lang[lb_generalLegend]#~<br /><br /><ul>#pgv_lang[lb_general_help1]##pgv_lang[lb_general_help2]##pgv_lang[lb_general_help3]##pgv_lang[lb_general_help4]##pgv_lang[lb_general_help5]##pgv_lang[lb_general_help6]##pgv_lang[lb_general_help7]##pgv_lang[lb_general_help8]##pgv_lang[lb_general_help9]##pgv_lang[lb_general_help10]#</ul>";
$pgv_lang["lb_general_help2"]		 = "<li>~Per veure una imatge~<br />Polsant a qualsevol miniatura. El títol de la imatge apareix a la part superior de la imatge superposada<br /><br /></li>";
$pgv_lang["lb_general_help3"]		 = "<li>~Per utilitzar el mode de zoom~<br /><b>NOTA:</b><br />La projecció d'imatges ha d'estar detinguda per veure la icona de zoom<br /><br /><b>Activar el Zoom:</b><br />Quan la icona verda Més del marge inferior dret de la imatge és visible, el Zoom és activat. Gireu la roda del ratolí amunt i avall per redimensionar. (O les tecles <b>i</b> i <b>o</b>) La icona canviarà a Menys vermell.<br />Quan la imatge es fa de mida més gran que la pàgina visualitzada, arrossegueu i deixeu anar la imatge, o utilitzeu les tecles del cursor per moure-la imatge.<br /><br /><b>Desactiver el  Zoom:</b><br />Per sortir del modus Zoom, doble polsada sobre la imatge o polseu a la icona Menys vermella del cantó inferior dret. Doubleclick inside the image, or click on the red Minus icon at the bottom right. (O fer servir la tecla <b>z</b>)<br /><br /></li>";
$pgv_lang["lb_general_help4"]		 = "<li>~Per tancar una imatge~<br />Polseu per fora de la imatge o polseu la icona <b>X</b> vermella del marge inferior dret o feu servir la tecla  <b>x</b>.<br /><br /></li>";
$pgv_lang["lb_general_help5"]		 = "<li>~Per veure la propera o imatge o la prèvia~<br />Quan passeu amb el ratolí per sobre la imatge, quan NO esteu en modus Zooom, un símbol <b>&lt;</b> apareix a l'esquerra de la imatge i un altre  <b>&gt;</b> a la dreta. Polseu qualsevol punt de la meitat dreta de la imatge per veure la següent i qualsevol punt de la meitat esquerra per veure la prèvia.<br /><br /></li>";
$pgv_lang["lb_general_help6"]		 = "<li>~Per saltar a qualsevol altra imatge a l'àlbum~<br />Amb el ratolí sobre el centímetre superior de la imatge quan NO esteu en modus Zoom, apareix una Geleria miniatura. Si cal, moveu el cursor del ratolí a l'esquerra o la dreta per visionar altres seccions de la galeria. Polseu qualsevol miniatura de la Galeria per saltar directament a la imatge associada.<br /><br /><b>Següent</b>, <b>Prèvia</b> i <b>Salta</b> es poden fer servir tant si s'està executant el passi d'imatges com si s'està en pausa.<br /><br /></li>";
$pgv_lang["lb_general_help7"]		 = "<li>~Per engegar el passi d'imatges~<br />Polseu la icona Engegar al marge inferior esquerra. Si hi ha un fitxer de so apareixerà la icona de l'altaveu. Polseu-la per sentir el so o per parar-lo. Polseu la icona de Pausa per detenir la projecció.<br /><br /></li>";
$pgv_lang["lb_general_help8"]		 = "<li>~Navegació ...~<br />Feu servir la taula  <b>#pgv_lang[view_lightbox]#</b> a la dreta de la imatge de la taula d'icones d'imatge per triar directament l'àlbum d'una altra persona<br /><br /></li>";
$pgv_lang["lb_general_help9"]		 = "<li>~Nota:~<br />Les miniatures que NO son imatges, com per exemple fitxers PDF, d'audio, llibres i video, poden visionar-se individualment, però no en la projecció d'imatges.<br /><br /></li>";
$pgv_lang["lb_general_help10"]		 = "<li>~Nota per a Administradors:~<br />Si arxius de formats d'imatge habituals (JPG, BMP, GIF, etc), que representen tipus d'imatges com la foto, certificat, document, etc apareixen a la filla <b>Altres</b>, vol dir que el valor <b>#factarray[TYPE]#</b> no s'ha fixat per a aquests objectes multimèdia. Si voleu, podeu editar els detalls de l'objecte multimèdia per tal d'establir aquest valor.</li>";
//End Lightbox General Help File -----------------------------------------------------------------------------------------------------------------------------

$pgv_lang["lb_tt_balloonLegend"]		= "Pestanya de l'Àlbum de Miniatures - Notes de l'enllaç a l'eina d'ajuda visual";
$pgv_lang["lb_tt_balloon_help"]			= "~#pgv_lang[lb_tt_balloonLegend]#~<br />Aquesta opció us permet determinar si l'enllaç  \"Mostra Notes\" ha d'incorporar una ajuda visual tipus\"Globus\" o Ajuda visual \"Normal\" quan el polseu. <br /><br />Aquest enllaç mostra les notes relacionades amb l'objecte multimèdia (si n'hi ha).<br />";

// VERSION 4.1.3
$pgv_lang["mediatabLegend"]				= "Aspecte de la pestanya d'objectes";
$pgv_lang["mediatab_help"]				= "~#pgv_lang[mediatabLegend]#~<br />Aquesta opció us permet determinar si es mostra la pestaña d'Objectes a la pàgina #pgv_lang[indi_info]#.<br /><br />Si es deixa a <b>#pgv_lang[hide]#</b>, solament veureu la pestanya <b>#pgv_lang[lightbox]#</b> i, a més, sortirà com <b>#pgv_lang[media]#</b>.<br />";
$pgv_lang["lb_al_head_linksLegend"]		= "Aspecte de la pestanya de Capçalera de vincles de l'Àlbum";
$pgv_lang["lb_al_head_links_help"]		= "~#pgv_lang[lb_al_head_linksLegend]#~<br />Aquesta opció us permet determinar si l'àrea d'encapçalament de la pestanya #pgv_lang[lightbox]#, que conté vincles per controlar diversos aspectes del mòdul Projector d'Imatges, ha de contenir solament icones, solament text o ambdós.<br /><br />La opció <b>#pgv_lang[lb_icon]#</b> probablement no és gaire útil, dons no veureu cap indicació de la funció de cada icona fins que el vostre punter passi per sobre d'alguna.<br />";
$pgv_lang["lb_al_thumb_linksLegend"]	= "Aspecte de la pestanya de Miniatures de l'Àlbum";
$pgv_lang["lb_al_thumb_links_help"]		= "~#pgv_lang[lb_al_thumb_linksLegend]#~<br />Aquesta opció us permet determinar si els víncles de sota de cada miniatura han de mostrar una icona o text. Els vincles que es mostrin aquí us permeten modificar els detalls d'un objecte o eliminar-lo.<br />";
$pgv_lang["lb_ml_thumb_linksLegend"]	= "Aspecte dels Vincles de Miniatures";
$pgv_lang["lb_ml_thumb_links_help"]		= "~#pgv_lang[lb_ml_thumb_linksLegend]#~<br />Aquesta opció us permet determinar si l'àrea de víncles sobre els detalls de l'objecte audiovisual cal que continguin solament icones, solament text o o ambdòs. Els vincles que es mostrin aquí us permeten realitzar diverses accions de modificació sobre l'objecte en questió.<br /><br />L'opció <b>#pgv_lang[lb_none]#</b> amaga completament aquests víncles i, per tant, actua como si l'usuari no tingués privilegis de modificació.<br />";
$pgv_lang["lb_ss_speedLegend"]			= "Velocitat de la projecció dimatges";
$pgv_lang["lb_ss_speed_help"]			= "~#pgv_lang[lb_ss_speedLegend]#~<br />Aquesta opció determina quan de temps es mostrarà cada imatge a la presentació, abans de passar a la següent.<br />";
$pgv_lang["lb_music_fileLegend"]		= "Pista de so de la projecció d'imatges";
$pgv_lang["lb_music_file_help"]			= "~#pgv_lang[lb_music_fileLegend]#~<br />Aquesta opció us permet especificar una banda o fons sonor a reproduir cada cop que s'activi la presentación. Si deixeu aquest camp en blanc, no es reproduirá cap só durant la presentació.<br /><br />Solament admet arxius en format mp3.<br />";
$pgv_lang["lb_transitionLegend"]		= "Velocitat de transició entre imatges";
$pgv_lang["lb_transition_help"]			= "~#pgv_lang[lb_transitionLegend]#~<br />Aquesta opció us permet especificar la velocitat de transició en el canvi d'imatges. Aquesta selecció s'aplica durant la presentació. També s'aplica si aneu a la imatge anterior o posterior, si la presentació està detinguda.<br /><br />La opció <b>#pgv_lang[lb_none]#</b> elimina les transicions entre imatges de forma que la nova imatge substitueix de forma immediata a l'anterior, sense adaptació perceptible a les mides de la nova imatge.<br />";
$pgv_lang["lb_url_dimensionsLegend"]	= "Mides de les finestres per a la URL del Projector d'Imatges";
$pgv_lang["lb_url_dimensions_help"]		= "~#pgv_lang[lb_url_dimensionsLegend]#~<br />Si polseu sobre la miniatura d'una imatge que correspon a una URL, aquesta opció us permet especificar les mides en píxels de la finestra del Projector d'Imatges per la URL.<br /><br />Les mides cal que siguin més petites que les de la finestra actual del navegador i, tanmateix, més petites que les de la vostra pantalla.<br />";

?>
