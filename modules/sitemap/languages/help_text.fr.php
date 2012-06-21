<?php
/**
 * Language file for PhpGedView.
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
 * @version $Id: help_text.fr.php 3861 2008-09-14 00:01:16Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

#pgv_lang["SITEMAP"]                    = "Sitemap information";
#pgv_lang["SITEMAP_help"]               = "~#pgv_lang[SITEMAP]#~<br /><br />Using this page you can generate a sitemap. A sitemap is can be used by search engines to optimize indexing your site. This is done by providing a file containing links to all pages you want the searchengine to show.<br/>This tool will generate a sitemap file per GEDCOM and (if more than one sitemap file is generated) a siteindex file. The generated files should be place in the root of your phpGedView installation.<br/>At this moment only Google is using the sitemap files. See this page for more information:<br/><a href=\"https://www.google.com/webmasters/sitemaps/docs/en/about.html\">About Google webmaster tools</a>";

#pgv_lang["SM_GEDCOM_SELECT"]           = "Select GEDCOMs";
#pgv_lang["SM_GEDCOM_SELECT_help"]      = "~#pgv_lang[SM_GEDCOM_SELECT]#~<br /><br />Select the GEDCOMs you want to create a sitemap file for. Select at least one.<br/>When the option \"No links to private information\" is selected, only links to data that is publicly available will be included.";

#pgv_lang["SM_ITEM_SELECT"]             = "Select items";
#pgv_lang["SM_ITEM_SELECT_help"]        = "~#pgv_lang[SM_ITEM_SELECT]#~<br /><br />Select the elements to put in the sitemap file. For all selected elements a priority can be given. This priority is relative to the other priorities in the file.<br/>Also the update frequency can be given. This is the frequency the data in these items might change. This can influence the time between visits by the search-engine bot, and thus will influence the amount of traffic the site generates.";

?>
