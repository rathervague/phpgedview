<?php
/**
 * Gallery 2 Random Media Block
 *
 * This block will randomly choose media items and show them in a block
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2003  John Finlay and Others
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
 * @subpackage blocks
 * @version $Id: gallery2_random_media.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Patrick Kellum
 */

if(!defined('PGV_GALLERY2_INIT'))
{
	require_once PGV_ROOT.'modules/gallery2/pgv.php';
	if(PGV_GALLERY2_INIT === false){return;}
}

$PGV_BLOCKS['print_g2_random_media']['name']		= 'Random Media 2';
$PGV_BLOCKS['print_g2_random_media']['descr']		= 'random_media_descr';
$PGV_BLOCKS['print_g2_random_media']['canconfig']	= false;
$PGV_BLOCKS['print_g2_random_media']['config']		= array('cache'=>0);


//-- function to display a random picture from the gedcom
function print_g2_random_media($block = true, $config='', $side, $index)
{
	global $pgv_lang, $GEDCOM, $TEXT_DIRECTION, $PGV_IMAGE_DIR, $PGV_IMAGES, $MEDIA_EXTERNAL, $MEDIA_DIRECTORY, $SHOW_SOURCES;

	mod_gallery2_load(getUserName());

	$params = array(
		'blocks' => 'randomImage',
		'show' => 'title|date|views'
	);
	$g2data = GalleryEmbed::getImageBlock($params);
	$search = array(
		'gbBlock',
		'giThumbnail',
		'giDescription',
		'giInfo'
	);
	$replace = array(
		'',
		'',
		'details2',
		'details2'
	);
	$img = str_replace($search, $replace, $g2data[1]);
	$out = "<div id=\"random_picture\" class=\"block\">"
		."<table class=\"blockheader\" cellspacing=\"0\" cellpadding=\"0\" style=\"direction:ltr;\"><tr>"
		."<td class=\"blockh1\" >&nbsp;</td>"
		."<td class=\"blockh2\" ><div class=\"blockhc\">"
		.print_help_link("index_media_help", "qm", '', false, true)
		."<b>{$pgv_lang['random_picture']}</b>"
		."</div></td>"
		."<td class=\"blockh3\">&nbsp;</td></tr>\n"
		."</table>"
		."<div class=\"blockcontent\">"
		."<table id=\"random_picture_box\" width=\"95%\"><tr><td valign=\"top\""
	;
	if($block){$out .= " align=\"center\" class=\"details1\"";}else{$out .= " class=\"details2\"";}
	$out .= " >"
		.$img
		."</td></tr></table>\n"
		// blockcontent
		."</div>"
		// block
		."</div>"
	;
	print $out;
}
?>
