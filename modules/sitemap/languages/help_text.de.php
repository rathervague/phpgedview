<?php
/**
 * German Language file for PhpGedView.
 *
 * PhpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  PGV Development Team
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
 * @subpackage SiteMap
 * @translator Gerd Kroll
 * @version $Id: help_text.de.php 3861 2008-09-14 00:01:16Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["SITEMAP"]                = "Sitemap Information";
$pgv_lang["SITEMAP_help"]           = "~#pgv_lang[SITEMAP]#~<br /><br />Mit diesem Modul können Sie Sitemap-Dateien erstellen.  Im Moment sind diese Dateien leider nur von Google unterstützt.<br /><br />Jede GEDCOM-Datei hat seine eigene Sitemap-Datei, und wenn Ihre Site mehrere GEDCOMs unterstützt, ist dann auch noch eine weitere Index Sitemap-Datei vorhanden.  Sitemap-Dateien enthalten Links zu Seiten, zu denen Sie Suchmaschinen-Besuche erwünschen.<br /><br />Nachdem die Sitemap-Dateien erstellt sind, sollten Sie feststellen, dass deren Inhalt in Ordnung ist.  Danach sollten Sie die Sitemap-Dateien ins PhpGedView-Verzeichnis übertragen und dann sich bei <a href=\"https://www.google.com/webmasters/sitemaps/\" target=\"_blank\">Google webmaster tools</a> anmelden um die neuen Sitemap-Dateien dort anzukündigen.<br /><br />Ausführliche Auskunft über Sitemap ist in englischer Sprache bei der <a href=\"https://www.google.com/webmasters/sitemaps/docs/en/about.html\" target=\"_blank\">Google webmaster tools</a> Seite erhältlich.";

$pgv_lang["SM_GEDCOM_SELECT"]       = "GEDCOMs wählen";
$pgv_lang["SM_GEDCOM_SELECT_help"]  = "~#pgv_lang[SM_GEDCOM_SELECT]#~<br />Wählen Sie hier die GEDCOMs, für welche Sie Sitemap-Dateien erstellen möchten.  Sie müssen mindestens eine GEDCOM wählen.<br /><br />Wenn die <b>Nur öffentlich zugreifbare Seiten zeigen</b> Option angekreuzt ist, enthalten die Sitemap-Dateien nur Links zu Seiten, die öffentlich zugreifbar sind.";

$pgv_lang["SM_ITEM_SELECT"]         = "Seiten wählen";
$pgv_lang["SM_ITEM_SELECT_help"]    = "~#pgv_lang[SM_ITEM_SELECT]#~<br />Select the elements to be included in the Sitemap file.<br /><br />A priority can be specified for all selected elements. This priority is relative to the other priorities in the file.  The update frequency can also be specified. This is an indication of how frequently the data in these items might change. This can influence the time between visits by the search engine, and thus will influence the amount of traffic the site generates.";
$pgv_lang["SM_ITEM_SELECT_help"]    = "~#pgv_lang[SM_ITEM_SELECT]#~<br />Bitte wählen Sie die Seitentypen zu denen Sie Links in den Sitemap-Dateien erstellen möchten.<br /><br />Für alle gewählten Seiten können Sie die Wichtigkeit relativ zu anderen Seiten der Sitemap bestimmen.  Sie können den Suchmaschinen auch andeuten, wie oft der Seiteninhalt sich gewöhnlich ändert. Das beeinflusst natürlich auch die Häufigkeit der Suchmaschinen-Besuche und beeinflusst so den Verkehr, den die Seite erzeugt.";

?>
