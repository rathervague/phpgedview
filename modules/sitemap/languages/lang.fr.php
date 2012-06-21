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
 * @version $Id: lang.fr.php 3861 2008-09-14 00:01:16Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Admin menu
$pgv_lang["generate_sitemap"]           = "Générer mes fichiers 'Sitemap'";

// Sitemap pages
$pgv_lang["selected_item"]              = "Eléments à inclure dans Sitemap:";
$pgv_lang["gedcoms_selected"]           = "Fichiers GEDCOM à prendre en compte:";
$pgv_lang["sitemaps_generated"]         = "Les 'Sitemaps' suivants ont été générés et peuvent ête téléchargés:";
$pgv_lang["sitemaps_placement"]         = "Placer tous les fichiers à la racine de votre installation PhpGedView.";
$pgv_lang["sm_indi_info"]               = "Information Individu";
$pgv_lang["sm_family_info"]             = "Information Famille";
$pgv_lang["sm_individual_list"]         = "Liste des individus";
$pgv_lang["sm_family_list"]             = "Liste des familles";
$pgv_lang["sm_item"]                    = "Elément";
$pgv_lang["sm_priority"]                = "Priorité";
$pgv_lang["sm_updates"]                 = "Mises à jour";
$pgv_lang["sm_always"]                  = "toujours";
$pgv_lang["sm_hourly"]                  = "chaque heure";
$pgv_lang["sm_daily"]                   = "chaque jour";
$pgv_lang["sm_weekly"]                  = "chaque semaine";
$pgv_lang["sm_monthly"]                 = "chaque mois";
$pgv_lang["sm_yearly"]                  = "chaque année";
$pgv_lang["sm_never"]                   = "jamais";
$pgv_lang["sm_generate"]                = "Générer";
$pgv_lang["gedcoms_privacy"]            = "Pas de lien vers les détails privés";

?>
