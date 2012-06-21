<?php
/**
 * German language file for Lightbox Album module
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2007 to 2008  PGV Development Team.  All rights reserved.
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
 * @version $Id: help_text.de.php 4194 2008-10-30 10:45:46Z fisharebest $
 * @author Brian Holland
 * @translator  Gerd Kroll
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6
$pgv_lang["lb_generalLegend"]		 = "Lightbox-Album - Allgemeine Hilfe";
$pgv_lang["lb_general_help"]		 = "~#pgv_lang[lb_generalLegend]#~<br /><br /><ul>#pgv_lang[lb_general_help1]##pgv_lang[lb_general_help2]##pgv_lang[lb_general_help3]##pgv_lang[lb_general_help4]##pgv_lang[lb_general_help5]##pgv_lang[lb_general_help6]##pgv_lang[lb_general_help7]##pgv_lang[lb_general_help8]##pgv_lang[lb_general_help9]##pgv_lang[lb_general_help10]#</ul>";
$pgv_lang["lb_general_help1"]		 = "<li>~Bemerkungen oder Details über das Bild zeigen~<br /><b>Menü:</b><br />Wenn Sie den Mauspfeil über dem <b>#pgv_lang[lb_viewedit]#</b> Link unter dem Miniaturbild bewegen, erhalten Sie ein Menü.  Die normalen Optionen im Menü sind <b>#pgv_lang[lb_viewnotes]#</b> (wenn Bemerkungen vorhanden sind), <b>#pgv_lang[lb_viewdetails]#</b>, und <b>#pgv_lang[lb_viewsource]#</b>.<br /><br /><b>Betrachten:</b><br />Wenn Sie die Option <b>#pgv_lang[lb_viewnotes]#</b> klicken, erhalten Sie eine #pgv_lang[lb_balloon_true]# mit vorhandenen Bemerkungen. Durch ein zweites Klicken auf dem Link verschwindet die #pgv_lang[lb_balloon_true]#.<br />Wenn Sie die Option <b>#pgv_lang[lb_viewdetails]#</b> klicken, erhalten Sie die Medienbetrachter-Seite. Falls genehmigt, wenn Sie die Option <b>#pgv_lang[lb_viewsource]#</b> klicken, gelangen Sie auf die Quellenangaben-Seite des Medienobjekts.<br /><br /><b>Bearbeiten:</b><br />Benutzer mit Editier-Rechten haben Zugriff auf weitere Optionen die hier nicht beschrieben werden.<br /><br /><b>Medienobjekt im Großformat:</b><br />Wenn Sie das Medienobjekt im Großformat betrachten, befinden sich unter dem Bild <b>#pgv_lang[lb_viewnotes]#</b> und <b>#pgv_lang[lb_viewdetails]#</b> Ikone die Sie anstatt den Menü-Optionen benutzen können.<br /><br /></li>";
$pgv_lang["lb_general_help2"]		 = "<li>~Um Bilder zu betrachten~<br />klicken Sie einfach eins der Miniaturbilder. Der Bildtitel wird dann über dem Bild gezeigt.<br /><br /></li>";
$pgv_lang["lb_general_help3"]		 = "<li>~Zoom (Bild vergrößern oder verkleinern)~<br /><b>Bitte beachten Sie:</b> Der Diavortrag muss halten, bevor die Zoom-Ikone sichtbar werden.<br /><br /><b>Zoom einschalten:</b><br />Wenn das grüne Plus-Symbol unten rechts sichtbar ist, ist Zoom aktiviert. Durch Bewegung des Mausrads können Sie das Bild vergrößern oder verkleinern. (Sie können auch die <b>i</b> und <b>o</b> Tasten benutzen.)  Das Symbol unten rechts verändert sich in ein rotes Minus-Symbol.<br />Ein zu großes Bild kann mit Hilfe der Pfeil-Tasten im Fenster bewegt werden.<br /><br /><b>Zoom ausschalten:</b><br />Wenn Sie das rote Minus-Symbol unten rechts klicken, wird Zoom ausgeschaltet. Sie können auch die <b>z</b> Taste benutzen oder innerhalb dem Bild zweimal klicken.<br /><br /></li>";
$pgv_lang["lb_general_help4"]		 = "<li>~Um den Diavortrag zu beenden~<br />klicken Sie einfach das rote X-Symbol unten rechts. Sie können auch die <b>x</b> Taste benutzen oder außerhalb dem Bild klicken.<br /><br /></li>";
$pgv_lang["lb_general_help5"]		 = "<li>~Voriges oder nächstes Bild~<br />Wenn Zoom NICHT aktiviert ist, erhalten Sie links <b>&lt;</b> und rechts <b>&gt;</b> Symbole durch Bewegung der Maus über dem Bild. Wenn Sie in der rechten Hälfte des Bildes klicken, erhalten Sie das nächste Bild der Serie.  Wenn Sie in der linken Hälfte klicken, erhalten Sie das vorige Bild.<br /><br /></li>";
$pgv_lang["lb_general_help6"]		 = "<li>~Direkter Zugriff zu Bildern~<br />Durch Bewegung der Maus im oberen Bildstreifen, der ungefähr 1 cm hoch ist, (Zoom ist NICHT aktiviert), erhalten Sie einen Streifen von Miniaturbildern die Ihnen zugänglich sind.  Um direkten Zugang zu Ihnen zugänglichen Bildern zu bewirken, müssen Sie nur das gewünschte Miniaturbild klicken. Direkter Zugang oder Aufruf des vorigen oder nächsten Bildes ist jederzeit möglich, wenn Zoom nicht aktiviert ist.<br /><br /></li>";
$pgv_lang["lb_general_help7"]		 = "<li>~Diavortrag~<br />Der Diavortrag beginnt, wenn Sie das Start-Ikon unten links klicken.  Wenn eine Tonspur-Datei vorhanden ist, erhalten Sie das Ihnen bekannte Lautsprecher-Symbol.  Sie können dann das Symbol klicken, um die Tonspur ein- und aus zu schalten. Um den Diavortrag zu unterbrechen, müssen Sie das Pause-Symbol unten links klicken.<br /><br /></li>";
$pgv_lang["lb_general_help8"]		 = "<li>~Navigation ...~<br />Die <b>#pgv_lang[view_lightbox]#</b> Liste rechts neben den Bildern ermöglicht direkten Zugriff zu anderen Photoalben.<br /><br /></li>";
$pgv_lang["lb_general_help9"]		 = "<li>~Bemerk:~<br />Miniaturbilder die NICHT richtige Bilder sind, wie PDF-Dateien, oder Ton, Buch, und Video Medien-Typen, können alleinständig betrachtet werden, aber sind niemals im Diavortrag.<br /><br /></li>";
$pgv_lang["lb_general_help10"]		 = "<li>~Für Verwalter:~<br />Falls Sie Dateien in gewöhnlichen Bild-Formaten (jpg, bmp, gif, usw.), die Bildertypen wie Foto, Urkunde, usw. darstellen, in der <b>Andere</b> Liste finden, haben Sie für diese Objekte vergessen, den richtigen Medien-Typ einzugeben.  Um diesen Fehler zu beheben, müssen Sie die Details des Medien-Objekts bearbeiten.</li>";
//End Lightbox General Help File ----------------------------------------------------------------------------------------------------------------------------- 

$pgv_lang["lb_tt_balloonLegend"]	= "Album Ordner Miniaturbildbereich - Links (oben)";
$pgv_lang["lb_tt_balloon_help"]	= "~#pgv_lang[lb_tt_balloonLegend]#~<br />Durch diese Option können Sie bestimmen, ob die Links über jedem Miniaturbild eine Sprechblase oder einen normalen Tip aufrufen.<br /><br />Diese Links zeigen Ihnen Bemerkungen und Details über das Medien-Objekt.<br />";



$pgv_lang["mediatabLegend"]			= "Multimedia Ordner Darstellung";
$pgv_lang["mediatab_help"]			= "~#pgv_lang[mediatabLegend]#~<br />Hier können Sie bestimmen, ob der gewöhnliche Medien-Ordner auf der #pgv_lang[indi_info]# Seite gezeigt werden soll oder nicht.<br /><br />Wenn Sie <b>#pgv_lang[hide]#</b> wählen, wird nur der <b>#pgv_lang[lightbox]#</b> Ordner gezeigt, und dieser Ordner wird dann auch auf <b>#pgv_lang[media]#</b> umbenannt.<br />";
$pgv_lang["lb_al_head_linksLegend"]	= "Album Ordner Kopfbereich Links-Darstellung";
$pgv_lang["lb_al_head_links_help"]	= "~#pgv_lang[lb_al_head_linksLegend]#~<br />Hier können Sie bestimmen, ob die Links im Kopfbereich des #pgv_lang[lightbox]# Ordners nur mit Ikonen, nur mit Text, oder mit Ikonen und Text dargestellt werden sollen.  Diese Links sind für die Option-Einstellung, oder für das Bearbeiten von neuen Medien-Objekten gedacht.<br /><br />Die <b>#pgv_lang[lb_icon]#</b> Wahl ist wahrscheinlich nicht sehr nützlich, da Sie die Funktion des jeweiligen Ikons nur durch Verschieben des Maus-Pfeils über das Ikon erkennen können.<br />";
$pgv_lang["lb_al_thumb_linksLegend"]= "Album Ordner Miniaturbilder Links-Darstellung";
$pgv_lang["lb_al_thumb_links_help"]	= "~#pgv_lang[lb_al_thumb_linksLegend]#~<br />Hier können Sie bestimmen, ob der Links-Bereich unter jedem Miniaturbild nur Ikone oder nur Text enthalten soll.  Diese Links sind für das Bearbeiten oder Löschen von Medien-Objekten gedacht.<br />";
$pgv_lang["lb_ml_thumb_linksLegend"]= "Minaturbilder Links-Darstellung";
$pgv_lang["lb_ml_thumb_links_help"]	= "~#pgv_lang[lb_ml_thumb_linksLegend]#~<br />Hier können Sie bestimmen, ob links Links über den Details jedes Medien-Objekts in der Medien-Liste nur mit Ikonen, nur mit Text, oder mit Ikonen und Text dargestellt werden sollen.  Diese Links sind für das Bearbeiten oder Löschen von Medien-Objekten gedacht.<br /><br />Wenn Sie hier <b>#pgv_lang[lb_none]#</b> wählen, sind die Links völlig versteckt, genau als ob der Benutzer keine Editier-Rechte hätte.<br />";
$pgv_lang["lb_ss_speedLegend"]		= "Dia-Vortrag Geschwindigkeit";
$pgv_lang["lb_ss_speed_help"]		= "~#pgv_lang[lb_ss_speedLegend]#~<br />Diese Option bestimmt die Wartezeit zwischen Bildern des Dia-Vortrags.<br />";
$pgv_lang["lb_transitionLegend"]	= "Dia-Wechsel Geschwindigkeit";
$pgv_lang["lb_transition_help"]		= "~#pgv_lang[lb_transitionLegend]#~<br />Diese Option bestimmt die Geschwindigkeit des Diawechsels.  Ihre Wahl ist für den laufenden Diavortrag gültig.  Sie ist auch für den manuellen Diawechsel gültig.<br /><br />Die <b>#pgv_lang[lb_none]#</b> Option bestimmt dass das alte Bild sofort durch ein neues ersetzt wird, ohne dass Änderungen der Bildgröße beobachtet werden können.<br />";
$pgv_lang["lb_music_fileLegend"]	= "Dia-Vortrag Tonspur";
$pgv_lang["lb_music_file_help"]		= "~#pgv_lang[lb_music_fileLegend]#~<br />Diese Option bestimmt die Tonspur, die während des Dia-Vortrags gespielt werden soll.  Das leere Feld bestimmt, dass während des Vortrags kein Ton spielt.<br /><br />Bitte beachten Sie, dass nur Dateien im mp3 Format unterstützt sind.<br />";
 
?>
