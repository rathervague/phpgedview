<?php
/**
 * Catalan language file for PhpGedView
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
 * @translator: Antoni Planas i Vilà
 * @package PhpGedView
 * @subpackage SiteMap
 * @version $Id: lang.ca.php 5586 2009-05-25 23:35:18Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Admin menu
$pgv_lang["sitemap"]       			= "Mapa del lloc";
$pgv_lang["generate_sitemap"]       = "Generació d'arxius de mapa del lloc";

// Sitemap pages
$pgv_lang["selected_item"]          = "Elements seleccionats per incloure al mapa del lloc:";
$pgv_lang["gedcoms_selected"]       = "GEDCOMs a incloure al mapa del lloc:";
$pgv_lang["sitemaps_generated"]     = "S'han generat els següents arxius per al mapa del lloc que ja podeu descarregar:";
$pgv_lang["sitemaps_placement"]     = "Coloqueu tots els arxius a l'arrel de la vostra instal·lació de phpGedView.";
$pgv_lang["sm_indi_info"]			= "Informació de Persones";
$pgv_lang["sm_family_info"]			= "Informació de famílies";
$pgv_lang["sm_individual_list"]		= "Llista de Persones";
$pgv_lang["sm_family_list"]			= "Llista de Famílies";
$pgv_lang["sm_item"]                = "Element";
$pgv_lang["sm_priority"]            = "Prioritat";
$pgv_lang["sm_updates"]             = "Actualitzacions";
$pgv_lang["sm_always"]              = "sempre";
$pgv_lang["sm_hourly"]              = "cada hora";
$pgv_lang["sm_daily"]               = "diariament";
$pgv_lang["sm_weekly"]              = "setmanalment";
$pgv_lang["sm_monthly"]             = "mensualment";
$pgv_lang["sm_yearly"]              = "anualment";
$pgv_lang["sm_never"]               = "mai";
$pgv_lang["sm_generate"]            = "Genera els arxius";
$pgv_lang["gedcoms_privacy"]        = "No hi ha víncles a la informació privada";


?>
