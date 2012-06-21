<?php
/**
 * Danish Language file for PhpGedView.
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
 * @version $Id: help_text.da.php 3861 2008-09-14 00:01:16Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["SITEMAP"]                = "Sitemap information";
$pgv_lang["SITEMAP_help"]           = "~#pgv_lang[SITEMAP]#~<br /><br />Ved hjælp af denne side, kan du oprette et sitemap.. Et sitemap kan bruges af søgemaskiner til at optimere deres indeksering af dit websted. Dette gøres ved at levere en fil der indeholder links til alle de sider du ønsker at søgemaskinen skal vise.<br/>Dette værktøj vil oprette en sitemap-fil per GEDCOM og (hvis der oprettes mere end en sitemap-fil) en siteindex-fil. De oprettede filer bør placeres i roden af din phpGedView installation.<br/>I øjeblikket er det kun Google der bruger sitemap-filerne. Se denne side for yderligere information:<br/><a href=\"https://www.google.com/webmasters/sitemaps/docs/da/about.html\">Om Google webmasterværktøjer</a>";

$pgv_lang["SM_GEDCOM_SELECT"]       = "Vælg GEDCOM'er";
$pgv_lang["SM_GEDCOM_SELECT_help"]  = "~#pgv_lang[SM_GEDCOM_SELECT]#~<br /><br />Vælg de GEDCOM'er du ønsker at oprette sitemap filer for. Vælg minimum en.<br/>Når indstillingen \"Ingen links til private oplysninger\" er valgt, vil der kun tilføjes links til offentlige data.";

$pgv_lang["SM_ITEM_SELECT"]         = "Vælg emner";
$pgv_lang["SM_ITEM_SELECT_help"]    = "~#pgv_lang[SM_ITEM_SELECT]#~<br /><br />Vælg de emner der skal placeres i sitemap filen. Der kan vælges en prioritet for alle de valgte emner. Denne prioritet er relativ i forhold til de andre prioriteter i filen.<br/>Derudover kan opdateringshyppigheden angives. Dette er hyppigheden hvormed data i disse emner kan ændres. Dette kan have indflydelse på den tid der går imellem besøg af søgemaskine-robotten, og dermed have indflydelse på hvor meget traffik webstedet gennerer.";

?>
