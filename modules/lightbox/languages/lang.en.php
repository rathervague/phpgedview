<?php
/**
 * Lightbox Album module for phpGedView
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
 * @version $Id: lang.en.php 6582 2009-12-21 09:56:49Z windmillway $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.2.2
$pgv_lang["TYPE__notinDB"]			= "Not in DB";
$pgv_lang["ROW_TYPE__notinDB"]		= $pgv_lang["TYPE__notinDB"];


// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]	= "Return to Admin Page";
$pgv_lang["lb_manage"]				= "Manage Lightbox configuration";
$pgv_lang["lb_generalhelp"]			= "Individual Page - Lightbox General Help";
$pgv_lang["lb_viewedit"]			= "View/Edit";
$pgv_lang["lb_viewnotes"]			= "View Notes";
$pgv_lang["lb_viewdetails"]			= "View Details";
$pgv_lang["lb_viewsource"]			= "View Source";
$pgv_lang["lb_editmedia"]			= "Edit Media";
$pgv_lang["lb_unlinkmedia"]			= "Unlink Media";
$pgv_lang["lb_balloon_true"]		= "Balloon";
$pgv_lang["lb_balloon_false"]		= "Normal";
$pgv_lang["lb_tt_balloon"]			= "Individual Page - Album Tab Thumbnail - Notes Tooltip";
$pgv_lang["lb_ttAppearance"]		= "Notes - Tooltip appearance";
$pgv_lang["view_lightbox"]			= "View Album of ...";
$pgv_lang["lb_notes"]				= "Notes";
$pgv_lang["lb_notes_info"]			= "";
 

// Added in VERSION 4.1.4 
$pgv_lang["lb_details"]			= "Details";
$pgv_lang["lb_detail_info"]		= "View this Media Item Details ...  Plus other Media Options - MediaViewer page";
$pgv_lang["lb_pause_ss"]		= "Pause Slideshow";
$pgv_lang["lb_start_ss"]		= "Start Slideshow";
$pgv_lang["lb_music"]			= "Turn Music On/Off";
$pgv_lang["lb_zoom_off"]		= "Disable Zoom";
$pgv_lang["lb_zoom_on"]			= "Zoom is enabled ... Use mousewheel or i and o keys to zoom in and out";
$pgv_lang["lb_close_win"]		= "Close Lightbox window";


// VERSION 4.1.3 
// Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]			= "Lightbox-Album Configuration";
$pgv_lang["mediatab"]       			= "Individual Page - Media Tab";
$pgv_lang["lb_appearance"]				= "Appearance";
$pgv_lang["lb_linkAppearance"]			= "Link appearance";
$pgv_lang["lb_MP3Only"]					= "(mp3 only)";
$pgv_lang["lb_admin_error"]				= "Page only for Administrators";
$pgv_lang["lb_toAlbumPage"]				= "Return to Album page";

$pgv_lang["lb_icon"]					= "Icon";
$pgv_lang["lb_text"]					= "Text";
$pgv_lang["lb_both"]					= "Both";
$pgv_lang["lb_none"]					= "None";

$pgv_lang["lb_al_head_links"]			= "Individual Page - Album Tab Header";
$pgv_lang["lb_al_thumb_links"]			= "Individual Page - Album Tab Thumbnails";
$pgv_lang["lb_ml_thumb_links"]			= "Multimedia Page - Thumbnails";
$pgv_lang["lb_music_file"]				= "Slideshow sound track";
$pgv_lang["lb_musicFileAdvice"]			= "Location of sound track file (Leave blank for no sound track)";
$pgv_lang["lb_ss_speed"]				= "Slide Show speed";
$pgv_lang["lb_ss_SpeedAdvice"]			= "Slide show timing in seconds";

$pgv_lang["lb_transition"]				= "Image Transition speed";
$pgv_lang["lb_normal"]					= "Normal";
$pgv_lang["lb_double"]					= "Double";
$pgv_lang["lb_warp"]					= "Warp";
$pgv_lang["lb_url_dimensions"]			= "URL Window dimensions";
$pgv_lang["lb_url_dimensionsAdvice"]	= "Width and height of URL window in pixels";
$pgv_lang["lb_width"]					= "Width";
$pgv_lang["lb_height"]					= "Height";
									
									
									
// ---------------------------------------------------------------------
$pgv_lang["lb_help"] 		 = "Album Help";
$pgv_lang["lightbox"]		 = "Album";
$pgv_lang["showmenu"] 		 = "Show Menu:";

// $pgv_lang["TYPE__other"] 			= "Other";
$pgv_lang["TYPE__footnotes"]		= "Footnotes";

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

$pgv_lang["census_text"]  	 = "\"UK census images have been obtained from \"The National Archives\", the custodian of the original records, ";
$pgv_lang["census_text"] 	.= "and appear here with their approval on the condition that no commercial use is made of them without permission." . "\n" ;
$pgv_lang["census_text"] 	.= "Requests for commercial publication of these or other UK census images appearing on this website should be directed to: ";
$pgv_lang["census_text"] 	.= "Image Library, The National Archives, Kew, Surrey, TW9 4DU, United Kingdom.\"" . "\n" ;
// $pgv_lang["census_text"]  	 = "";

$pgv_lang["lb_edit_details"] 	= "Edit Details";
$pgv_lang["lb_view_details"] 	= "View Details";
$pgv_lang["lb_edit_media"] 		= "Edit this Media Item's Details";
$pgv_lang["lb_delete_media"] 	= "Remove this Media Item - Only Removes link to this individual - Does not delete Media File or other links";
$pgv_lang["lb_view_media"] 		= "View this Media Item's Details \nPlus other Media Options - MediaViewer page";
$pgv_lang["lb_add_media"] 		= "Add a new Media Object";
$pgv_lang["lb_add_media_full"] 	= "Add a new Multimedia Object to this Individual";
$pgv_lang["lb_link_media"] 		= "Link to an existing Media Object";
$pgv_lang["lb_link_media_full"] = "Link this Individual to an existing Multimedia Object";

$pgv_lang["lb_slide_show"] 		= "Slide Show";
$pgv_lang["turn_edit_ON"] 		= "Turn Edit Mode ON";
$pgv_lang["turn_edit_OFF"] 		= "Turn Edit Mode OFF";

$pgv_lang["lb_source_avail"] 	= "Source information available - Click here.";

$pgv_lang["lb_private"] 		= "Image linked <br /> to a Private Individual";
$pgv_lang["lb_view_source_tip"] = "View Source : ";
$pgv_lang["lb_view_details_tip"] = "View Media Details : ";



?>
