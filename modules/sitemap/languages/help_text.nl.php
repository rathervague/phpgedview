<?php
/**
 * Dutch Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
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
 * @version $Id: help_text.nl.php 3861 2008-09-14 00:01:16Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["SITEMAP"]                = "Sitemap informatie";
$pgv_lang["SITEMAP_help"]           = "~#pgv_lang[SITEMAP]#~<br /><br />Deze pagine genereert een of meer sitemap files. Een sitemap kan gebruikt worden door een zoek machine om het indexeren van een site te vergemakkelijken. Dit wordt gedaan door in de sitemap file links op te nemen naar alle pagina's welke geindexeerd moeten worden.<br />Via deze pagina kan een sitemap per GEDCOM gemaakt worden en (indien er meer dan een sitemap file gemaakt wordt) ook een siteindex file. De gegenereerde files moeten in de phpGedView installatie directory geplaats worden.<br />Op dit moment maakt alleen Google gebruik van sitemap files. Zie deze pagina voor meer informatie:<br /><a href=\"https://www.google.com/webmasters/sitemaps/docs/nl/about.html\"\>Google Sitemaps (beta)</a>";

$pgv_lang["SM_GEDCOM_SELECT"]       = "Selecteer GEDCOMs";
$pgv_lang["SM_GEDCOM_SELECT_help"]  = "~#pgv_lang[SM_GEDCOM_SELECT]#~<br /><br />Selecteer de GEDCOM's waarvan een sitemap file gemaakt moet worden. Selecteer er ten minste een.<br />Indien de optie \"Geen links naar prive informatie\" wordt geselecteerd zullen alleen links worden opgenomen naar pagina's waarvan de informatie publiekelijk beschikbaar is.";

$pgv_lang["SM_ITEM_SELECT"]         = "Selecteer element soorten";
$pgv_lang["SM_ITEM_SELECT_help"]    = "~#pgv_lang[SM_ITEM_SELECT]#~<br /><br />Selecteer de element soorten welke in de sitemap file geplaats moeten worden. Indien een element soort geselcteerd is kan ook de prioriteit van dit element aangegeven worden. Dit is relatief ten opzichte van de andere elementen in de file.<br />Ook de wijzigings frequenty van de data kan worden aangegeven. Dit is de frequenty waarin de gegevens van deze elementen kan wijzigingen. Dit kan de snelheid beinvloeden waarmee de zoek-robot de site weer gaat bekijken, en kan dus invloed hebben op de de hoeveelheid data verkeer.";
?>
