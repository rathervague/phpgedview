<?php
/**
 * Random Media Block
 *
 * This block will randomly choose media items and show them in a block
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @version $Id: random_media.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @package PhpGedView
 * @subpackage Blocks
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_RANDOM_MEDIA_PHP', '');

//-- only enable this block if multi media has been enabled
if ($MULTI_MEDIA) {
	$PGV_BLOCKS['print_random_media']['name']		= $pgv_lang['random_media_block'];
	$PGV_BLOCKS['print_random_media']['descr']		= 'random_media_descr';
	$PGV_BLOCKS['print_random_media']['canconfig']	= true;
	$PGV_BLOCKS['print_random_media']['config']		= array(
		'cache'   =>0,
		'filter'  =>'all',
		'controls'=>'yes',
		'start'   =>'no',

		'filter_avi'  =>'no',
		'filter_bmp'  =>'yes',
		'filter_gif'  =>'yes',
		'filter_jpeg' =>'yes',
		'filter_mp3'  =>'no',
		'filter_ole'  =>'yes',
		'filter_pcx'  =>'yes',
		'filter_pdf'  =>'no',
		'filter_png'  =>'yes',
		'filter_tiff' =>'yes',
		'filter_wav'  =>'no',

		'filter_audio'		=>'no',
		'filter_book'		=>'yes',
		'filter_card'		=>'yes',
		'filter_certificate'=>'yes',
		'filter_coat'		=>'yes',
		'filter_document'	=>'yes',
		'filter_electronic'	=>'yes',
		'filter_fiche'		=>'yes',
		'filter_film'		=>'yes',
		'filter_magazine'	=>'yes',
		'filter_manuscript'	=>'yes',
		'filter_map'		=>'yes',
		'filter_newspaper'	=>'yes',
		'filter_other'		=>'yes',
		'filter_painting'	=>'yes',
		'filter_photo'		=>'yes',
		'filter_tombstone'	=>'yes',
		'filter_video'		=>'no'
	);

	require_once PGV_ROOT.'includes/functions/functions_print_facts.php';

	//-- function to display a random picture from the gedcom
	function print_random_media($block = true, $config="", $side, $index) {
		global $pgv_lang, $foundlist, $MULTI_MEDIA, $TEXT_DIRECTION, $PGV_IMAGE_DIR, $PGV_IMAGES;
		global $MEDIA_EXTERNAL, $MEDIA_DIRECTORY, $SHOW_SOURCES;
		global $MEDIATYPE, $THUMBNAIL_WIDTH, $USE_MEDIA_VIEWER;
		global $PGV_BLOCKS, $ctype, $action;
		global $PGV_IMAGE_DIR, $PGV_IMAGES;

		if (!$MULTI_MEDIA) return;

			if (empty($config)) $config = $PGV_BLOCKS["print_random_media"]["config"];
			if (isset($config["filter"])) $filter = $config["filter"];  // indi, event, or all
			else $filter = "all";
			if (!isset($config['controls'])) $config['controls'] ="yes";
			if (!isset($config['start'])) $config['start'] ="no";

		$medialist = array();
		$foundlist = array();

		$medialist = get_medialist(false, '', true, true);
		$ct = count($medialist);
		if ($ct>0) {
			$i=0;
			$disp = false;
			//-- try up to 40 times to get a media to display
			while($i<40) {
				$error = false;
				$value = array_rand($medialist);
				if (PGV_DEBUG) {
					print "<br />";print_r($medialist[$value]);print "<br />";
					print "Trying ".$medialist[$value]["XREF"]."<br />";
				}
				$links = $medialist[$value]["LINKS"];
				$disp = ($medialist[$value]["EXISTS"]>0) && $medialist[$value]["LINKED"] && $medialist[$value]["CHANGE"]!="delete" ;
				if (PGV_DEBUG && !$disp && !$error) {$error = true; print "<span class=\"error\">".$medialist[$value]["XREF"]." File does not exist, or is not linked to anyone, or is marked for deletion.</span><br />";}

				$disp &= displayDetailsById($medialist[$value]["XREF"], "OBJE");
				$disp &= !FactViewRestricted($medialist[$value]["XREF"], $medialist[$value]["GEDCOM"]);

				if (PGV_DEBUG && !$disp && !$error) {$error = true; print "<span class=\"error\">".$medialist[$value]["XREF"]." Failed to pass privacy</span><br />";}

				$isExternal = isFileExternal($medialist[$value]["FILE"]);

				if ($block && !$isExternal) $disp &= ($medialist[$value]["THUMBEXISTS"]>0);
				if (PGV_DEBUG && !$disp && !$error) {$error = true; print "<span class=\"error\">".$medialist[$value]["XREF"]." thumbnail file could not be found</span><br />";}

				// Filter according to format and type  (Default: unless configured otherwise, don't filter)
				if (!empty($medialist[$value]["FORM"]) && isset($config["filter_".$medialist[$value]["FORM"]]) && $config["filter_".$medialist[$value]["FORM"]]!="yes") $disp = false;
				if (!empty($medialist[$value]["TYPE"]) && isset($config["filter_".$medialist[$value]["TYPE"]]) && $config["filter_".$medialist[$value]["TYPE"]]!="yes") $disp = false;
				if (PGV_DEBUG && !$disp && !$error) {$error = true; print "<span class=\"error\">".$medialist[$value]["XREF"]." failed Format or Type filters</span><br />";}

				if ($disp && count($links) != 0){
					/** link privacy allready checked in displayDetailsById
					foreach($links as $key=>$type) {
						$gedrec = find_gedcom_record($key, PGV_GED_ID);
						$disp &= !empty($gedrec);
						//-- source privacy is now available through the display details by id method
						// $disp &= $type!="SOUR";
						$disp &= displayDetailsById($key, $type);
					}
					if (PGV_DEBUG && !$disp && !$error) {$error = true; print "<span class=\"error\">".$medialist[$value]["XREF"]." failed link privacy</span><br />";}
					*/
					if ($disp && $filter!="all") {
						// Apply filter criteria
						$ct = preg_match("/0\s(@.*@)\sOBJE/", $medialist[$value]["GEDCOM"], $match);
						$objectID = $match[1];
						//-- we could probably use the database for this filter
						foreach($links as $key=>$type) {
							$gedrec = find_gedcom_record($key, PGV_GED_ID);
							$ct2 = preg_match("/(\d)\sOBJE\s{$objectID}/", $gedrec, $match2);
							if ($ct2>0) {
								$objectRefLevel = $match2[1];
								if ($filter=="indi" && $objectRefLevel!="1") $disp = false;
								if ($filter=="event" && $objectRefLevel=="1") $disp = false;
								if (PGV_DEBUG && !$disp && !$error) {$error = true; print "<span class=\"error\">".$medialist[$value]["XREF"]." failed to pass config filter</span><br />";}
							}
							else $disp = false;
						}
					}
				}
				//-- leave the loop if we find an image that works
				if ($disp) {
					break;
				}
				//-- otherwise remove the private media item from the list
				else {
					if (PGV_DEBUG) print "<span class=\"error\">".$medialist[$value]["XREF"]." Will not be shown</span><br />";
					unset($medialist[$value]);
				}
				//-- if there are no more media items, then try to get some more
				if (count($medialist)==0) $medialist = get_medialist(false, '', true, true);
				$i++;
			}
			if (!$disp) return false;

				$content = "";
				$id = "";
					$id = "random_picture$index";
					$title = print_help_link("index_media_help", "qm", "random_picture", false, true);
				if ($PGV_BLOCKS["print_random_media"]["canconfig"]) {
					if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
						if ($ctype=="gedcom") {
							$name = PGV_GEDCOM;
						} else {
							$name = PGV_USER_NAME;
						}
							$title .= "<a href=\"javascript: configure block\" onclick=\"window.open('".encode_url("index_edit.php?name={$name}&ctype={$ctype}&action=configure&side={$side}&index={$index}")."', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
							$title .= "<img class=\"adminicon\" src=\"{$PGV_IMAGE_DIR}/{$PGV_IMAGES['admin']['small']}\" width=\"15\" height=\"15\" border=\"0\" alt=\"{$pgv_lang['config_block']}\" /></a>";
					}
				}
				$title .= $pgv_lang["random_picture"];
				$content = "<div id=\"random_picture_container$index\">";
				if ($config['controls']=='yes') {
					if ($config['start']=='yes' || (isset($_COOKIE['rmblockplay'])&&$_COOKIE['rmblockplay']=='true')) $image = "stop";
					else $image = "rarrow";
					$linkNextImage = "<a href=\"javascript: ".$pgv_lang["next_image"]."\" onclick=\"return ajaxBlock('random_picture$index', 'print_random_media', '$side', $index, '$ctype', true);\"><img src=\"{$PGV_IMAGE_DIR}/{$PGV_IMAGES['rdarrow']['other']}\" border=\"0\" alt=\"{$pgv_lang['next_image']}\" title=\"{$pgv_lang['next_image']}\" /></a>";

						$content .= "<div class=\"center\" id=\"random_picture_controls$index\"><br />";
						if ($TEXT_DIRECTION=="rtl") $content .= $linkNextImage;
						$content .= "<a href=\"javascript: ".$pgv_lang["play"]."/".$pgv_lang["stop"]."\" onclick=\"togglePlay(); return false;\">";
						if (isset($PGV_IMAGES[$image]['other'])) $content .= "<img id=\"play_stop\" src=\"{$PGV_IMAGE_DIR}/{$PGV_IMAGES[$image]['other']}\" border=\"0\" alt=\"{$pgv_lang['play']}/{$pgv_lang['stop']}\" title=\"{$pgv_lang['play']}/{$pgv_lang['stop']}\" />";
						else $content .= $pgv_lang["play"]."/".$pgv_lang["stop"];
						$content .= "</a>";
						if ($TEXT_DIRECTION=="ltr") $content .= $linkNextImage;
						$content .= '
					</div>
					<script language="JavaScript" type="text/javascript">
					<!--
						var play = false;
						function togglePlay() {
							if (play) {
								play = false;
								imgid = document.getElementById("play_stop");
								imgid.src = \''.$PGV_IMAGE_DIR."/".$PGV_IMAGES["rarrow"]['other'].'\';
							}
							else {
								play = true;
								playSlideShow();
								imgid = document.getElementById("play_stop");
								imgid.src = \''.$PGV_IMAGE_DIR."/".$PGV_IMAGES["stop"]['other'].'\';
							}
						}

						function playSlideShow() {
							if (play) {
								ajaxBlock(\'random_picture'.$index.'\', \'print_random_media\', \''.$side.'\', '.$index.', \''.$ctype.'\', false);
								window.setTimeout(\'playSlideShow()\', 6000);
							}
						}
					//-->
					</script>';
				}
				if ($config['start']=='yes') {
						$content .= '
					<script language="JavaScript" type="text/javascript">
					<!--
						play = true;
						imgid = document.getElementById("play_stop");
						imgid.src = \''.$PGV_IMAGE_DIR."/".$PGV_IMAGES["stop"]['other'].'\';
						window.setTimeout("playSlideShow()", 6000);
					//-->
					</script>';
				}
					$content .= "<div class=\"center\" id=\"random_picture_content$index\">";
			$imgsize = findImageSize($medialist[$value]["FILE"]);
			$imgwidth = $imgsize[0]+40;
			$imgheight = $imgsize[1]+150;
				$content .= "<table id=\"random_picture_box\" width=\"100%\"><tr><td valign=\"top\"";

				if ($block) $content .= " align=\"center\" class=\"details1\"";
				else $content .= " class=\"details2\"";
			$mediaid = $medialist[$value]["XREF"];

//LBox --------  change for Lightbox Album --------------------------------------------
?>
<script language="JavaScript" type="text/javascript">
<!--
function openPic(filename, width, height) {
		height=height+50;
		screenW = screen.width;
	 	screenH = screen.height;
	 	if (width>screenW-100) width=screenW-100;
	 	if (height>screenH-110) height=screenH-120;
		if ((filename.search(/\.je?pg$/gi)!=-1)||(filename.search(/\.gif$/gi)!=-1)||(filename.search(/\.png$/gi)!=-1)||(filename.search(/\.bmp$/gi)!=-1))
			win02 = window.open('imageview.php?filename='+filename,'win02','top=50,left=150,height='+height+',width='+width+',scrollbars=1,resizable=1');
			// win03.resizeTo(winWidth 2,winHeight 30);
		else window.open(unescape(filename),'win02','top=50,left=150,height='+height+',width='+width+',scrollbars=1,resizable=1');
		win02.focus();
	}
-->
</script><?php

			if (PGV_USE_LIGHTBOX) {
				// $content .= " ><a href=\"javascript:;\" onclick=\"return openPic('".$medialist[$value]["FILE"]."', $imgwidth, $imgheight);\">";
				// $content .= " ><a href=\"javascript:;\" onclick=\"return openImage('".$medialist[$value]["FILE"]."', $imgwidth, $imgheight);\">";
				// $content .= "><a href=\"" . $medialist[$value]["FILE"] . "\" rel=\"clearbox[general_4]\" title=\"" . $mediaid . "\">" . "\n";
				$content .= " ><a href=\"mediaviewer.php?mid=".$mediaid."\">";
				}else
// ---------------------------------------------------------------------------------------------


			if ($USE_MEDIA_VIEWER) {
					$content .= " ><a href=\"mediaviewer.php?mid=".$mediaid."\">";
			}
			else {
					$content .= " ><a href=\"javascript:;\" onclick=\"return openImage('".$medialist[$value]["FILE"]."', $imgwidth, $imgheight);\">";
			}
			$mediaTitle = "";
			if (!empty($medialist[$value]["TITL"])) {
				$mediaTitle = PrintReady($medialist[$value]["TITL"]);
			}
			else $mediaTitle = basename($medialist[$value]["FILE"]);
			if ($block) {
				$content .= "<img src=\"".$medialist[$value]["THUMB"]."\" border=\"0\" class=\"thumbnail\"";
				if ($isExternal) $content .= " width=\"".$THUMBNAIL_WIDTH."\"";
			} else {
				$content .= "<img src=\"".$medialist[$value]["FILE"]."\" border=\"0\" class=\"thumbnail\" ";
				$imgsize = findImageSize($medialist[$value]["FILE"]);
				if ($imgsize[0] > 175) $content .= "width=\"175\" ";
			}
			$content .= " alt=\"{$mediaTitle}\" title=\"{$mediaTitle}\" />";
			$content .= "</a>";
			if ($block) $content .= "<br />";
			else $content .= "</td><td class=\"details2\">";
			$content .= "<a href=\"mediaviewer.php?mid=".$mediaid."\">";
			$content .= "<b>". $mediaTitle ."</b>";
			$content .= "</a><br />";

			ob_start();
			PrintMediaLinks($medialist[$value]["LINKS"], "normal");
			$content .= ob_get_clean();
			$content .= "<br /><div class=\"indent" . ($TEXT_DIRECTION=="rtl"?"_rtl":"") . "\">";
			$content .= print_fact_notes($medialist[$value]["GEDCOM"], "1", false, true);
			$content .= "</div>";
			$content .= "</td></tr></table>";
			$content .= "</div>"; // random_picture_content
			$content .= "</div>"; // random_picture_container
			global $THEME_DIR;
			require $THEME_DIR.'templates/block_main_temp.php';
		}
	}


	function print_random_media_config($config) {
		global $pgv_lang, $factarray, $PGV_BLOCKS, $TEXT_DIRECTION;

		$defaultConfig = $PGV_BLOCKS['print_random_media']['config'];
		if (empty($config)) $config = $defaultConfig;

		// Add options missing from old block configurations
		foreach ($defaultConfig as $option => $setting) {
			if (!isset($config[$option])) $config[$option] = $setting;
		}

		print "<tr><td class=\"descriptionbox wrap width33\">";
			print_help_link("random_media_persons_or_all_help", "qm");
			print $pgv_lang["random_media_persons_or_all"];
		print "</td>";?>
	<td class="optionbox"><select name="filter">
	<option value="indi"
	<?php if ($config["filter"]=="indi") print " selected=\"selected\"";?>><?php print $pgv_lang["random_media_persons"]; ?></option>
	<option value="event"
	<?php if ($config["filter"]=="event") print " selected=\"selected\"";?>><?php print $pgv_lang["random_media_events"]; ?></option>
	<option value="all"
	<?php if ($config["filter"]=="all") print " selected=\"selected\"";?>><?php print $pgv_lang["all"]; ?></option>
	</select></td>
	</tr>

	<tr>
	<td class="descriptionbox wrap width33"><?php print_help_link("random_media_filter_help", "qm"); print $pgv_lang["filter"]; ?></td>
		<td class="optionbox">
			<center><b><?php print $factarray["FORM"]; ?></b></center>
			<table class="width100">
				<tr>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_avi"
				<?php if ($config['filter_avi']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;avi&nbsp;&nbsp;</td>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_bmp"
				<?php if ($config['filter_bmp']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;bmp&nbsp;&nbsp;</td>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_gif"
				<?php if ($config['filter_gif']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;gif&nbsp;&nbsp;</td>
				</tr>
		<tr>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_jpeg"
				<?php if ($config['filter_jpeg']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;jpeg&nbsp;&nbsp;</td>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_mp3"
				<?php if ($config['filter_mp3']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;mp3&nbsp;&nbsp;</td>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_ole"
				<?php if ($config['filter_ole']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;ole&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_pcx"
				<?php if ($config['filter_pcx']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;pcx&nbsp;&nbsp;</td>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_pdf"
				<?php if ($config['filter_pdf']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;pdf&nbsp;&nbsp;</td>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_png"
				<?php if ($config['filter_png']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;png&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_tiff"
				<?php if ($config['filter_tiff']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;tiff&nbsp;&nbsp;</td>
			<td class="width33"><input type="checkbox" value="yes"
				name="filter_wav"
				<?php if ($config['filter_wav']=="yes") print " checked=\"checked\""; ?> />&nbsp;&nbsp;wav&nbsp;&nbsp;</td>
					<td class="width33">&nbsp;</td>
					<td class="width33">&nbsp;</td>
				</tr>
			</table>
			<br />
			<center><b><?php print $factarray["TYPE"]; ?></b></center>
			<table class="width100">
				<tr>
				<?php

				//-- Build array of currently defined values for the Media Type
				foreach ($pgv_lang as $varname => $typeValue) {
					if (substr($varname, 0, 6) == "TYPE__") {
						if ($varname != "TYPE__other") $type[strtolower(substr($varname, 6))] = $typeValue;
					}
				}
				//-- Sort the array into a meaningful order
				array_flip($type);
				asort($type);
				array_flip($type);
				//-- Add "Other" at the end
				$type["other"] = $pgv_lang["TYPE__other"];
				//-- Build the list of checkboxes
				$i = 0;
				foreach ($type as $typeName => $typeValue) {
					$i++;
					if ($i > 3) {
						$i = 1;
						print "</tr><tr>";
					}
					print "<td class=\"width33\"><input type=\"checkbox\" value=\"yes\" name=\"filter_".$typeName."\"";
					if ($config['filter_'.$typeName]=="yes") print " checked=\"checked\"";
					print " />&nbsp;&nbsp;".$typeValue."&nbsp;&nbsp;</td>";
				}
				?>
				</tr>
			</table>
	</td>
	</tr>

	<tr>
	<td class="descriptionbox wrap width33"><?php print_help_link("random_media_ajax_controls_help", "qm"); print $pgv_lang["random_media_ajax_controls"]; ?></td>
		<td class="optionbox"><select name="controls">
		<option value="yes"
		<?php if ($config["controls"]=="yes") print " selected=\"selected\""; ?>><?php print $pgv_lang["yes"]; ?></option>
		<option value="no"
		<?php if ($config["controls"]=="no") print " selected=\"selected\""; ?>><?php print $pgv_lang["no"]; ?></option>
	</select></td>
	</tr>
	<tr>
	<td class="descriptionbox wrap width33"><?php print_help_link("random_media_start_slide_help", "qm"); print $pgv_lang["random_media_start_slide"]; ?></td>
		<td class="optionbox"><select name="start">
		<option value="yes"
		<?php if ($config["start"]=="yes") print " selected=\"selected\""; ?>><?php print $pgv_lang["yes"]; ?></option>
		<option value="no"
		<?php if ($config["start"]=="no") print " selected=\"selected\""; ?>><?php print $pgv_lang["no"]; ?></option>
	</select>
	<input type="hidden" name="cache" value="0" />
	</td></tr>

		<?php
	}

} // if ($MULTI_MEDIA)
?>
