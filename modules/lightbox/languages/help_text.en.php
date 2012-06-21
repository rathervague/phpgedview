<?php
/**
 * English language file for Lightbox Album module
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
 * @version $Id: help_text.en.php 4194 2008-10-30 10:45:46Z fisharebest $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6

$pgv_lang["LIGHTBOX_CONFIG"]           = "Configure Lightbox";
$pgv_lang["LIGHTBOX_CONFIG_help"]      = "~#pgv_lang[LIGHTBOX_CONFIG]#~<br /><br />Configure all aspects of the Lightbox module here.";


// Lightbox general help file  ---------------------------------------------------------------------------------------------------------
$pgv_lang["lb_generalLegend"]		 = "Lightbox Album - General Help";
$pgv_lang["lb_general_help"]		 = "~#pgv_lang[lb_generalLegend]#~<br /><br /><ul>#pgv_lang[lb_general_help1]##pgv_lang[lb_general_help2]##pgv_lang[lb_general_help3]##pgv_lang[lb_general_help4]##pgv_lang[lb_general_help5]##pgv_lang[lb_general_help6]##pgv_lang[lb_general_help7]##pgv_lang[lb_general_help8]##pgv_lang[lb_general_help9]##pgv_lang[lb_general_help10]#</ul>";
$pgv_lang["lb_general_help1"]		 = "<li>~To view the notes, details, or source associated with an image~<br /><b>Drop-Down Menu:</b><br />Hover over the <b>#pgv_lang[lb_viewedit]#</b> link below the thumbnail and a dropdown menu will appear. The options are <b>#pgv_lang[lb_viewnotes]#</b> (If there are any), <b>#pgv_lang[lb_viewdetails]#</b> and also <b>#pgv_lang[lb_viewsource]#</b>.<br /><br /><b>Viewing:</b><br />Clicking <b>#pgv_lang[lb_viewnotes]#</b> will show a <b>#pgv_lang[lb_balloon_true]#</b> with the Note information inside. Click again to turn off the <b>#pgv_lang[lb_balloon_true]#</b>.<br />Clicking <b>#pgv_lang[lb_viewdetails]#</b> will take you to the Mediaviewer page, and <b>#pgv_lang[lb_viewsource]#</b> will (if authorized) take you to the Source page for the media item.<br /><br /><b>Editing:</b><br />(There are additional Edit options for Editors and above)<br /><br /><b>Opened Lightbox Image:</b><br />When viewing an opened Lightbox image, the <b>#pgv_lang[lb_viewnotes]#</b> and <b>#pgv_lang[lb_viewdetails]#</b> icons can be clicked on the border below the image.<br /><br /></li>";
$pgv_lang["lb_general_help2"]		 = "<li>~To view an image~<br />Click on any thumbnail. The title of the image will appear at the top of the overlaid image.<br /><br /></li>";
$pgv_lang["lb_general_help3"]		 = "<li>~To use zoom mode~<br /><b>NOTE:</b><br />The slideshow must be paused to see the Zoom icon.<br /><br /><b>Enable Zoom:</b><br />When the green Plus icon at the bottom right of the image is visible, Zoom is already enabled. Use the mouse wheel up and down to resize. (Or use keys <b>i</b> and <b>o</b>) The icon will change to a red Minus.<br />When the image is re-sized larger than the viewed page, drag and drop the image, or use the arrow keys to move the image around.<br /><br /><b>Disable Zoom:</b><br />Doubleclick inside the image, or click on the red Minus icon at the bottom right, to get out of Zoom mode. (Or use the <b>z</b> key)<br /><br /></li>";
$pgv_lang["lb_general_help4"]		 = "<li>~To close an image~<br />Click outside of the image, or, click on the red <b>X</b> icon at bottom right, or use the <b>x</b> key.<br /><br /></li>";
$pgv_lang["lb_general_help5"]		 = "<li>~To view the next or previous image~<br />As you mouse over the image when NOT in Zoom mode, a <b>&lt;</b> symbol will appear on the left side, and a <b>&gt;</b> on the right. Click anywhere in the right half of the image to see the next image. Click anywhere in the left half to see the previous one.<br /><br /></li>";
$pgv_lang["lb_general_help6"]		 = "<li>~To jump to any other image in the Album~<br />As you mouse over the top 1 cm of the image when NOT in Zoom mode, a thumbnail Gallery will appear. If necessary, move the mouse cursor left and right to make other sections of this thumbnail Gallery show.  Click any Gallery thumbnail to jump directly to the associated image.<br /><br /><b>Next</b>, <b>Previous</b> and <b>Jump</b> may be done whether the slideshow is running or paused.<br /><br /></li>";
$pgv_lang["lb_general_help7"]		 = "<li>~To run the slide show~<br />Click on the Start icon at bottom left. If there is a sound track file, the Speaker icon will appear.  Click on the Speaker icon to toggle the sound track on and off. Click on the Pause icon to stop the slide show.<br /><br /></li>";
$pgv_lang["lb_general_help8"]		 = "<li>~Navigation ...~<br />Use the <b>#pgv_lang[view_lightbox]#</b> table at the right of the image icon table to directly choose another person's Album view.<br /><br /></li>";
$pgv_lang["lb_general_help9"]		 = "<li>~Note:~<br />Thumbnails which are NOT images, such as PDF files and audio, book, and video Media types, may be viewed individually, but will not be in the slide show.<br /><br /></li>";
$pgv_lang["lb_general_help10"]		 = "<li>~Note for Administrator:~<br />If any files of the usual image formats (jpg, bmp, gif, etc.) representing image types such as photo, certificate, document, etc. appear in the <b>Other</b> row, the <b>#factarray[TYPE]#</b> value has not been set for these Media objects.  You may wish to edit the Media object's details to set this value.</li>";
//End Lightbox General Help File ----------------------------------------------------------------------------------------------------------------------------- 

$pgv_lang["lb_tt_balloonLegend"]		= "Album Tab Thumbnail - Notes Link Tooltip";
$pgv_lang["lb_tt_balloon_help"]			= "~#pgv_lang[lb_tt_balloonLegend]#~<br />This option lets you determine whether the \"View Notes\" link should show a \"Balloon\" Tooltip or \"Normal\" Tooltip when clicked. <br /><br />The link shown here show you the Notes associated with a Media item(if available).<br />";


// VERSION 4.1.3 
$pgv_lang["mediatabLegend"]				= "Media Tab Appearance";
$pgv_lang["mediatab_help"]				= "~#pgv_lang[mediatab]#~<br />This option lets you determine whether the Media tab should be shown on the #pgv_lang[indi_info]# page.<br /><br />When this option is set to <b>#pgv_lang[hide]#</b>, only the <b>#pgv_lang[lightbox]#</b> tab will be shown.<br />";
$pgv_lang["lb_al_head_linksLegend"]		= "Album Tab Header Link appearance";
$pgv_lang["lb_al_head_links_help"]		= "~#pgv_lang[lb_al_head_linksLegend]#~<br />This option lets you determine whether the header area of the #pgv_lang[lightbox]# tab, which contains links to control various aspects of the Lightbox module, should contain only icons, only text, or both.<br /><br />The <b>#pgv_lang[lb_icon]#</b> option is probably not very useful, since you won't see any indication of each icon's function until your mouse hovers over the icon.<br />";
$pgv_lang["lb_al_thumb_linksLegend"]	= "Album Tab Thumbnails Link appearance";
$pgv_lang["lb_al_thumb_links_help"]		= "~#pgv_lang[lb_al_thumb_linksLegend]#~<br />This option lets you determine whether the links area below each thumbnail should show an icon or text.  The links shown here let you edit the Media object's details or delete it.<br />";
$pgv_lang["lb_ml_thumb_linksLegend"]	= "Thumbnails Link appearance";
$pgv_lang["lb_ml_thumb_links_help"]		= "~#pgv_lang[lb_ml_thumb_linksLegend]#~<br />This option lets you determine whether the Links area above the Media object's details in the MultiMedia list should contain only icons, only text, or both.  The links shown here let you perform various editing actions on the Media object in question.<br /><br />The <b>#pgv_lang[lb_none]#</b> option completely hides these links, and thus acts as if the user did not have any editing rights.<br />";
$pgv_lang["lb_ss_speedLegend"]			= "Slide Show speed";
$pgv_lang["lb_ss_speed_help"]			= "~#pgv_lang[lb_ss_speedLegend]#~<br />This option determines the length of time each image should be displayed before the Slide Show displays the next image in the sequence.<br />";
$pgv_lang["lb_music_fileLegend"]		= "Slideshow Sound Track";
$pgv_lang["lb_music_file_help"]			= "~#pgv_lang[lb_music_fileLegend]#~<br />This option lets you specify a sound track to be played whenever the slide show is active.  When you leave this field blank, no sound will play during the slide show.<br /><br />This feature only supports files in the mp3 format.<br />";
$pgv_lang["lb_transitionLegend"]		= "Image Transition speed";
$pgv_lang["lb_transition_help"]			= "~#pgv_lang[lb_transitionLegend]#~<br />This option lets you specify the transition speed when the image changes.  This selection is applied during the slideshow.  It is also applied when you move to the next or previous image when the slideshow is not running.<br /><br />The <b>#pgv_lang[lb_none]#</b> option eliminates image transitions so that the new image immediately replaces the old without visible adjustment of the new image's dimensions.<br />";
$pgv_lang["lb_url_dimensionsLegend"]	= "Lightbox URL Window dimensions"; 
$pgv_lang["lb_url_dimensions_help"]		= "~#pgv_lang[lb_url_dimensionsLegend]#~<br />When clicking on a URL image thumbnail, this option lets you specify the Lightbox URL Window dimensions in pixels.<br /><br />This should normally be less than your current browser window dimensions, and certainly less than your screen resolution.<br />";

?>
