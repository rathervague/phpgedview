<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PHPGedView Development Team
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
 * @version $Id: lang.fr.php 4194 2008-10-30 10:45:46Z fisharebest $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]         = "Configuration de Lightbox";
$pgv_lang["mediatab"]                   = "Page Individu - Etiquette de médias";
$pgv_lang["lb_appearance"]				= "Aspect";
$pgv_lang["lb_linkAppearance"]			= "Aspect de Lien";
$pgv_lang["lb_MP3Only"]					= "(mp3 uniquement)";
$pgv_lang["lb_admin_error"]             = "Réservé aux administrateurs";

$pgv_lang["lb_icon"]                    = "Icone";
$pgv_lang["lb_text"]                    = "Texte";
$pgv_lang["lb_both"]                    = "Les deux";
$pgv_lang["lb_none"]                    = "Aucun";

$pgv_lang["lb_al_head_links"]           = "Page Individu - Onglet Album - Entête";
$pgv_lang["lb_al_thumb_links"]          = "Page Individu - Onglet Album - Vignettes";
$pgv_lang["lb_ml_thumb_links"]          = "Page de Multimedia - Vignettes";
$pgv_lang["lb_music_file"]              = "Fond sonore Lightbox";
$pgv_lang["lb_musicFileAdvice"]         = "(Laisser vide si aucun fond sonore)";
$pgv_lang["lb_ss_speed"]                = "Vitesse du diaporama";
$pgv_lang["lb_ss_SpeedAdvice"]          = "secondes";

// ---------------------------------------------------------------------


$pgv_lang["lb_help"]                    = "Aide d'Album";
$pgv_lang["lightbox"]                   = "Album";
$pgv_lang["showmenu"]                   = "Afficher Menu:";
$pgv_lang["TYPE__other"]                = "Autres";
$pgv_lang["TYPE__footnotes"]            = "Notes de pied-de-page";

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

$pgv_lang["lb_edit_details"]            = "Editer détails";
$pgv_lang["lb_view_details"]            = "Afficher détails";
$pgv_lang["lb_edit_media"]              = "Editer les détails de cet objet Multimedia ";
$pgv_lang["lb_delete_media"]            = "Supprimer cet objet Multimedia - enlève seulement le lien à cet individu - ne supprime pas le fichier ou d'autres liens ";
$pgv_lang["lb_view_media"]              = "Afficher les détails de cet objet Multimedia, \naussi d'autres options média. ";
$pgv_lang["lb_add_media"]               = "Ajouter un nouvel objet Multimedia";
$pgv_lang["lb_add_media_full"]          = "Ajouter de nouveaux objets Multimedia à cet individu ";
$pgv_lang["lb_link_media"]              = "Relier un objet Multimedia existant";
$pgv_lang["lb_link_media_full"]         = "Relier cet individu à un objet Multimedia existant";

$pgv_lang["lb_slide_show"]              = "Projection de diapositives";
$pgv_lang["turn_edit_ON"]               = "Activer le mode «édition»";
$pgv_lang["turn_edit_OFF"]              = "Désactiver le mode «édition»";

$pgv_lang["lb_source_avail"]            = "Source disponible - Cliquez ici";

$pgv_lang["lb_private"]                 = "L'image est liée à<br />un individu privé";
$pgv_lang["lb_view_source_tip"]         = "Afficher la source: ";
$pgv_lang["lb_view_details_tip"]        = "Afficher les détails de l'objet Multimedia: ";
?>
