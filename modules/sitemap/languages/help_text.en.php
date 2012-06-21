<?php
/**
 * English Language file for PhpGedView.
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
 * @version $Id: help_text.en.php 3861 2008-09-14 00:01:16Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["SITEMAP"]                = "Sitemap information";
$pgv_lang["SITEMAP_help"]           = "~#pgv_lang[SITEMAP]#~<br />This module generates Sitemap files for use by search engines. Currently, only the Google search engine supports Sitemap files.<br /><br />There is a Sitemap file for each GEDCOM on your site, and when your site has more than one GEDCOM there is also an index Sitemap file that points to each of the GEDCOMs.  The Sitemap files contain links to pages of your site that you want the search engine to index.<br /><br />After this module has generated the Sitemap files, you should inspect them and make whatever changes are necessary.  You should copy these files to the server directory where PhpGedView is installed, and then log into the <a href=\"https://www.google.com/webmasters/sitemaps/\" target=\"_blank\">Google webmaster tools</a> site to make Google aware of their presence.<br /><br />For more information on Google and Sitemap files, visit the <a href=\"https://www.google.com/webmasters/sitemaps/docs/en/about.html\" target=\"_blank\">Google webmaster tools</a> site.";

$pgv_lang["SM_GEDCOM_SELECT"]       = "Select GEDCOMs";
$pgv_lang["SM_GEDCOM_SELECT_help"]  = "~#pgv_lang[SM_GEDCOM_SELECT]#~<br />Select the GEDCOMs for which you want to create a Sitemap file. You must select at least one.<br /><br />When the <b>No links to private information</b> option is selected, only links to data that is publicly available will be included.";

$pgv_lang["SM_ITEM_SELECT"]         = "Select items";
$pgv_lang["SM_ITEM_SELECT_help"]    = "~#pgv_lang[SM_ITEM_SELECT]#~<br />Select the elements to be included in the Sitemap file.<br /><br />A priority can be specified for all selected elements. This priority is relative to the other priorities in the file.  The update frequency can also be specified. This is an indication of how frequently the data in these items might change. This can influence the time between visits by the search engine, and thus will influence the amount of traffic the site generates.";

?>
