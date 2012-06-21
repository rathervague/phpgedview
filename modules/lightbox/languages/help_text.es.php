<?php
/**
 * Spanish language file for Lightbox Album module
 *
 * Display media Items using Lightbox
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
 * @subpackage Module
 * @version $Id: help_text.es.php 6968 2010-06-30 23:39:23Z jsanchez $
 * @author Brian Holland
 * @translator: Julio Sánchez Fernández
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6

// Lightbox general help file  ---------------------------------------------------------------------------------------------------------
$pgv_lang["LIGHTBOX_CONFIG"]           = "Configuración de Lightbox";
$pgv_lang["LIGHTBOX_CONFIG_help"]      = "~#pgv_lang[GOOGLEMAP_CONFIG]#~<br /><br />Configure todos los aspectos del módulo Lightbox aquí.";


// Lightbox general help file  ---------------------------------------------------------------------------------------------------------
$pgv_lang["lb_generalLegend"]		 = "Álbum Lightbox - Ayuda general";
$pgv_lang["lb_general_help"]		 = "~#pgv_lang[lb_generalLegend]#~<br /><br /><ul>#pgv_lang[lb_general_help1]##pgv_lang[lb_general_help2]##pgv_lang[lb_general_help3]##pgv_lang[lb_general_help4]##pgv_lang[lb_general_help5]##pgv_lang[lb_general_help6]##pgv_lang[lb_general_help7]##pgv_lang[lb_general_help8]##pgv_lang[lb_general_help9]##pgv_lang[lb_general_help10]#</ul>";
$pgv_lang["lb_general_help1"]		 = "<li>~Ver notas o detalles asociados a una imagen~<br /><b>Menú desplegable:</b><br />Deje flotar el puntero sobre el vínculo <b>#pgv_lang[lb_viewedit]#</b> bajo la miniatura y aparecerá un menú desplegable. Las opciones son <b>#pgv_lang[lb_viewnotes]#</b> (Si hay alguna), <b>#pgv_lang[lb_viewdetails]#</b> (predeterminado) y también <b>#pgv_lang[lb_viewsource]#</b> (si se ha identificado y hay una fuente).<br /><br /><b>Ver:</b><br />Al hacer clic en <b>#pgv_lang[lb_viewnotes]#</b> se mostrará un <b>#pgv_lang[lb_balloon_true]#</b> con la información de la nota en su interior. Haga clic de nuevo para hacer desaparecer el <b>#pgv_lang[lb_balloon_true]#</b>.<br />Al hacer clic en <b>#pgv_lang[lb_viewdetails]#</b> se pasará a la página del visor de objetos y <b>#pgv_lang[lb_viewsource]#</b> le llevará (si está autorizado) a la página de la fuente para el objeto.<br /><br /><b>Modificar:</b><br />(Hay opciones adicionales para modificación para los usuarios con privilegios apropiados)<br /><br /><b>Imagen abierta de Lightbox:</b><br />Al ver una imagen abierta de Lightbox, se puede hacer clic en los iconos <b>#pgv_lang[lb_viewnotes]#</b> y <b>#pgv_lang[lb_viewdetails]#</b> en el marco bajo la imagen.<br /><br /></li>";
$pgv_lang["lb_general_help2"]		 = "<li>~Ver una imagen~<br />Haga clic en cualquier miniatura. El título de la imagen aparecerá en lo alto de la imagen superpuesta.<br /><br /></li>";
$pgv_lang["lb_general_help3"]		 = "<li>~Usar modo acercar/alejar~<br /><b>NOTA:</b><br />La presentación debe estar en pausa para poder ver el icono de Acercar/Alejar.<br /><br /><b>Activar Acercar/Alejar:</b><br />Si es visible el icono Más en la esquina inferior derecha de la imagen, el modo Acercar/Alejar está activado ya. Use la rueda del #pgv_lang[pgv_lang_es_mouse] para acercar o alejar. (O utilice las teclas <b>i</b> y <b>o</b>) El icono cambiará a un Menos rojo.<br />Si la imagen ampliada resulta más grande que la página visualizada, arrastre y suelte la imagen o use las teclas de flechas para desplazar la imagen.<br /><br /><b>Desactivar Acercar/Alejar:</b><br />Haga doble clic dentro de la imagen o haga clic en el icono rojo Menos abajo a la derecha para salir del modo Acercar/Alejar. (O utilice la tecla <b>z</b>)<br /><br /></li>";
$pgv_lang["lb_general_help4"]		 = "<li>~Cerrar una imagen~<br />Haga clic fuera de la imagen o haga clic en el icono rojo <b>X</b> abajo a la derecha o use la tecla <b>x</b>.<br /><br /></li>";
$pgv_lang["lb_general_help5"]		 = "<li>~Ver la imagen siguiente o anterior~<br />Si deja el puntero sobre la imagen no estando en modo Acercar/Alejar, aparecerá a la izquierda un símbolo <b>&lt;</b> y un símbolo <b>&gt;</b> a la derecha. Haga clic en cualquier punto de la mitad derecha de la imagen para ver la siguiente imagen. Haga clic en cualquier punto de la mitad izquierda para ver la anterior.<br /><br /></li>";
$pgv_lang["lb_general_help6"]		 = "<li>~Saltar a cualquier otra imagen en el Álbum~<br />Al colocar el puntero sobre el centímetro superior de la imagen no estando en modo Acercar/Alejar, aparecerá una galería de miniaturas. Si fuera necesario, mueva el puntero a izquierda y derecha para mostrar otras secciones de esta galería de miniaturas.  Haga clic en cualquier miniatura de la galería para ir directamente a la imagen asociada.<br /><br /><b>Siguiente</b>, <b>Anterior</b> y <b>Saltar</b> se pueden usar tanto si la presentación está en marcha como si está en pausa.<br /><br /></li>";
$pgv_lang["lb_general_help7"]		 = "<li>~Ver la presentación~<br />Haga clic en el icono Arrancar abajo a la izquierda. Si hay un archivo de sonido asociado, aparecerá el icono Altavoz.  Haga clic en el icono Altavoz para activar o desactivar el sonido. Haga clic en el icono Pausa para parar la presentación.<br /><br /></li>";
$pgv_lang["lb_general_help8"]		 = "<li>~Navegación ...~<br />Use la tabla <b>#pgv_lang[view_lightbox]#</b> a la derecha de la tabla de iconos de imágenes para escoger directamente el Álbum de otra persona.<br /><br /></li>";
$pgv_lang["lb_general_help9"]		 = "<li>~Nota:~<br />Las miniaturas que no son imágenes, sino archivos PDF y objetos de tipo audio, libro o vídeo, pueden visualizarse individualmente, pero no aparecerán en la presentación.<br /><br /></li>";
$pgv_lang["lb_general_help10"]		 = "<li>~Nota para el administrador:~<br />Si algún archivo de los formatos de imagen habituales (jpg, bmp, gif, etc.) contiene un tipo de imagen como foto, certificado, documento, etc. y aparece en la fila <b>Otros</b>, se debe a que no se ha fijado el valor <b>#factarray[TYPE]#</b> para estos objetos.  Puede desear modificar los detalles del objeto para fijar este valor.</li>";
//End Lightbox General Help File -----------------------------------------------------------------------------------------------------------------------------

$pgv_lang["lb_tt_balloonLegend"]		= "Miniatura de pestaña de álbum - Ayuda de enlaces superiores";
$pgv_lang["lb_tt_balloon_help"]			= "~#pgv_lang[lb_tt_balloonLegend]#~<br />Esta opción le permite determinar si los vínculos sobre cada miniatura deben mostrar una ayuda tipo \"Globo\" o \"Normal\" al hacer clic en ellos. <br /><br />Estos vínculos le muestran las notas asociadas a un objeto o los vínculos a los detalles o fuentes (si existen) de los objetos.<br />";


// VERSION 4.1.3
$pgv_lang["mediatabLegend"]				= "Apariencia de la pestaña de objetos";
$pgv_lang["mediatab_help"]				= "~#pgv_lang[mediatabLegend]#~<br />Esta opción le permite determinar si se muestra la pestaña de Objetos en la página #pgv_lang[indi_info]#.<br /><br />Si se fija esta opción a <b>#pgv_lang[hide]#</b>, sólo se muestra la pestaña <b>#pgv_lang[lightbox]#</b>.<br />";
$pgv_lang["lb_al_head_linksLegend"]		= "Apariencia del vínculo al encabezamiento en la pestaña Álbum";
$pgv_lang["lb_al_head_links_help"]		= "~#pgv_lang[lb_al_head_linksLegend]#~<br />Esta opción le permite determinar si el área de encabezamientos de la pestaña #pgv_lang[lightbox]#, que contiene vínculos para controlar diversos aspectos del módulo Lightbox, debe contener sólo iconos, sólo texto o ambos.<br /><br />La opción <b>#pgv_lang[lb_icon]#</b> probablemente no es muy útil, pues no verá ninguna indicación de la función de cada icono hasta que su puntero flote sobre el icono.<br />";
$pgv_lang["lb_al_thumb_linksLegend"]	= "Apariencia del vínculo a las miniaturas en la pestaña Álbum";
$pgv_lang["lb_al_thumb_links_help"]		= "~#pgv_lang[lb_al_thumb_linksLegend]#~<br />Esta opción le permite determinar si los vínculos bajo cada miniatura deben mostrar un icono o texto.  Los vínculos que se muestran aquí le permiten modificar los detalles de un objeto o eliminarlo.<br />";
$pgv_lang["lb_ml_thumb_linksLegend"]	= "Apariencia del enlace a miniaturas";
$pgv_lang["lb_ml_thumb_links_help"]		= "~#pgv_lang[lb_ml_thumb_linksLegend]#~<br />Esta opción le permite determinar si el área de vínculos sobre los detalles del objeto audiovisual debe contener sólo iconos, sólo texto o ambos.  Los vínculos que se muestran aquí le permiten realizar varias acciones de modificación sobre el objeto en cuestión.<br /><br />La opción <b>#pgv_lang[lb_none]#</b> oculta completamente estos vínculos y, por tanto, actúa como si el usuario no tuviera privilegios de modificación.<br />";
$pgv_lang["lb_ss_speedLegend"]			= "Velocidad de la presentación";
$pgv_lang["lb_ss_speed_help"]			= "~#pgv_lang[lb_ss_speedLegend]#~<br />Esta opción determina cuánto tiempo se mostrará cada imagen en la presentación antes de pasar a la siguiente imagen.<br />";
$pgv_lang["lb_music_fileLegend"]		= "Pista de sonido para la presentación";
$pgv_lang["lb_music_file_help"]			= "~#pgv_lang[lb_music_fileLegend]#~<br />Esta opción le permite especificar una banda sonora a reproducir cada vez que se active la presentación.  Si deja este campo en blanco, no se reproducirá ningún sonido durante la presentación.<br /><br />Esta característica sólo admite archivos en formato mp3.<br />";
$pgv_lang["lb_transitionLegend"]		= "Velocidad de transición entre imágenes";
$pgv_lang["lb_transition_help"]			= "~#pgv_lang[lb_transitionLegend]#~<br />Esta opción le permite especificar la velocidad de transición en los cambios de imagen.  Esta selección se aplica durante la presentación.  También se aplica si se desplaza a la imagen anterior o posterior si la presentación está detenida.<br /><br />La opción <b>#pgv_lang[lb_none]#</b> elimina las transiciones entre imágenes de modo que la nueva imagen sustituye de forma inmediata la anterior sin adaptación perceptible a las dimensiones de la nueva imagen.<br />";
$pgv_lang["lb_url_dimensionsLegend"]	= "Dimensiones para las ventanas para URL de Lightbox";
$pgv_lang["lb_url_dimensions_help"]		= "~#pgv_lang[lb_url_dimensionsLegend]#~<br />Si se hace clic en la miniatura de una imagen que corresponde a una URL, esta opción le permite especificar las dimensiones en píxeles de la ventana de Lightbox para la URL.<br /><br />Las dimensiones deberían ser menores que las de la ventana actual de navegador y, desde luego, menores que las de su pantalla.<br />";

?>
