<?php
/**
 * Polish Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team. All rights reserved.
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
 * @version $Id: lang.pl.php 6497 2009-11-30 19:06:08Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Admin menu
$pgv_lang["sitemap"]       			= "Mapa witryny";
$pgv_lang["generate_sitemap"]       = "Generuj pliki mapy witryny";

// Sitemap pages
$pgv_lang["selected_item"]          = "Pozycje, które mają być zamieszczone w pliku mapy witryny:";
$pgv_lang["gedcoms_selected"]       = "Pliki GEDCOM do zamieszczenia w pliku mapy witryny:";
$pgv_lang["sitemaps_generated"]     = "Następujące pliki mapy witryny zostały wygenerowane i mogą być pobrane:";
$pgv_lang["sitemaps_placement"]     = "Zamieść wszystkie pliki mapy witryny w katalogu głównym phpGedView.";
$pgv_lang["sm_indi_info"]			= "Informacje osobowe";
$pgv_lang["sm_family_info"]			= "Informacje rodzinne";
$pgv_lang["sm_individual_list"]		= "Lista osób";
$pgv_lang["sm_family_list"]			= "List rodzin";
$pgv_lang["sm_item"]                = "Pozycje";
$pgv_lang["sm_priority"]            = "Priorytet";
$pgv_lang["sm_updates"]             = "Uaktualnienia";
$pgv_lang["sm_always"]              = "ciągłe";
$pgv_lang["sm_hourly"]              = "godzinne";
$pgv_lang["sm_daily"]               = "dzienne";
$pgv_lang["sm_weekly"]              = "tygodniowe";
$pgv_lang["sm_monthly"]             = "miesięczne";
$pgv_lang["sm_yearly"]              = "roczne";
$pgv_lang["sm_never"]               = "nigdy";
$pgv_lang["sm_generate"]            = "Generuj";
$pgv_lang["gedcoms_privacy"]        = "Brak odnośników do informacji prywatnych";

?>
