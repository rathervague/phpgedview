<?php
/**
 * Media Link Assistant Control module for phpGedView
 *
 * Media Link information about an individual
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
 * @package PhpGedView
 * @subpackage GEDFact_assistant
 * @version $Id: media_0_inverselink.php 6829 2010-01-24 16:21:38Z fisharebest $
*/

// GEDFact Media assistant replacement code for inverselink.php: ===========================

//-- extra page parameters and checking
$more_links		= safe_REQUEST($_REQUEST, 'more_links', PGV_REGEX_UNSAFE);
$exist_links	= safe_REQUEST($_REQUEST, 'exist_links', PGV_REGEX_UNSAFE);
$gid			= safe_GET_xref('gid');
$update_CHAN	= safe_REQUEST($_REQUEST, 'preserve_last_changed', PGV_REGEX_UNSAFE);


if (empty($linktoid) || empty($linkto)) {
	$paramok = false;
	$toitems = "";
} else {
	switch ($linkto) {
	case 'person':
		$toitems = $pgv_lang['to_person'];
		break;
	case 'family':
		$toitems = $pgv_lang['to_family'];
		break;
	case 'source':
		$toitems = $pgv_lang['to_source'];
		break;
	}
}
if (PGV_USER_IS_ADMIN) {
	print_simple_header($pgv_lang["link_media"]." ".$toitems);
}else{
	print_simple_header($pgv_lang["admin"]);
	echo $pgv_lang["no_login"];
}

if ($ENABLE_AUTOCOMPLETE) require PGV_ROOT.'js/autocomplete.js.htm';


//-- check for admin
//$paramok =  PGV_USER_CAN_EDIT;
$paramok =  PGV_USER_GEDCOM_ADMIN;
if (!empty($linktoid)) $paramok = displayDetailsById($linktoid);

if ($action == "choose" && $paramok) {

global $pgv_lang;

	?>
	<script language="JavaScript" type="text/javascript">
	<!--
	// Javascript variables
	var id_empty = "<?php echo $pgv_lang['id_empty']; ?>";
	
	var pastefield;
	var language_filter, magnify;
	language_filter = "";
	magnify = "";

	function openerpasteid(id) {
		window.opener.paste_id(id);
		window.close();
	}

	function paste_id(value) {
		pastefield.value = value;
	}

	function paste_char(value, lang, mag) {
		pastefield.value += value;
		language_filter = lang;
		magnify = mag;
	}
	
	function blankwin() {
		if (document.getElementById('gid').value == "" || document.getElementById('gid').value.length<=1) {
			alert(id_empty);
		}else{
			var iid = document.getElementById('gid').value;
			var winblank = window.open('module.php?mod=GEDFact_assistant&pgvaction=_MEDIA/media_query_3a&iid='+iid, 'winblank', 'top=100, left=200, width=400, height=20, toolbar=0, directories=0, location=0, status=0, menubar=0, resizable=1, scrollbars=1');
		}
	}
	
	var GEDFact_assist = "installed";
//-->
	</script>
	<script src="phpgedview.js" language="JavaScript" type="text/javascript"></script>
	<link href ="modules/GEDFact_assistant/css/media_0_inverselink.css" 	rel="stylesheet" type="text/css" media="screen" />

	<?php
	echo '<form name="link" method="get" action="inverselink.php">';
	// echo '<input type="hidden" name="action" value="choose" />';
	echo '<input type="hidden" name="action" value="update" />';
	if (!empty($mediaid)) {
		echo '<input type="hidden" name="mediaid" value="', $mediaid, '" />';
	}
	if (!empty($linktoid)) {
		echo '<input type="hidden" name="linktoid" value="', $linktoid, '" />';
	}
	echo '<input type="hidden" name="linkto" value="', $linkto, '" />';
	echo '<input type="hidden" name="ged" value="', $GEDCOM, '" />';
	echo '<table class="facts_table center ', $TEXT_DIRECTION, '">';
	echo '<tr><td class="topbottombar" colspan="2">';
	print_help_link("add_media_linkid", "qm", "link_media");
	echo $pgv_lang["link_media"], ' ', $toitems, '</td></tr>';
	echo '<tr><td class="descriptionbox width20 wrap">', $pgv_lang["media_id"], '</td>';
	echo '<td class="optionbox wrap">';
	if (!empty($mediaid)) {
		//-- Get the title of this existing Media item
		$title=
			PGV_DB::prepare("SELECT m_titl FROM {$TBLPREFIX}media where m_media=? AND m_gedfile=?")
			->execute(array($mediaid, PGV_GED_ID))
			->fetchOne();
		if ($title) {
			echo '<b>', PrintReady($title), '</b>&nbsp;&nbsp;&nbsp;';
			if ($TEXT_DIRECTION=="rtl") echo getRLM();
			echo '(', $mediaid, ')';
			if ($TEXT_DIRECTION=="rtl") echo getRLM();
		} else {
			echo '<b>', $mediaid, '</b>';
		}
		echo '<table><tr><td>';
		//-- Get the filename of this existing Media item
		$filename=
			PGV_DB::prepare("SELECT m_file FROM {$TBLPREFIX}media where m_media=? AND m_gedfile=?")
			->execute(array($mediaid, PGV_GED_ID))
			->fetchOne();
		$filename = str_replace(" ", "%20", $filename);
		$thumbnail = thumbnail_file($filename, false, false);
		echo '<img src = ', $thumbnail, ' class="thumbheight" />';
		echo '</td></tr></table>';
		echo '</td></tr>';
		echo '<tr><td class="descriptionbox width20 wrap">', $pgv_lang["current_links"], '</td>';
		echo '<td class="optionbox wrap">';
		require 'modules/GEDFact_assistant/_MEDIA/media_query_1a.php';
		echo '</td></tr>';
	}
	
	if (!isset($linktoid)) { $linktoid = ""; }
	
	echo '<tr><td class="descriptionbox wrap">';
	echo $pgv_lang["add_more_links"];
	echo '<td class="optionbox wrap ">';
	if ($linktoid=="") {
		// ----
	} else {
		$record=Person::getInstance($linktoid);
		echo '<b>', PrintReady($record->getFullName()), '</b>&nbsp;&nbsp;&nbsp;';
		if ($TEXT_DIRECTION=="rtl") print getRLM();
		echo '(', $linktoid, ')';
		if ($TEXT_DIRECTION=="rtl") print getRLM();
	}
	echo '<table><tr><td>';
		print "<input type=\"text\" name=\"gid\" id=\"gid\" size=\"6\" value=\"\" />";
		// echo ' Enter Name or ID &nbsp; &nbsp; &nbsp; <b>OR</b> &nbsp; &nbsp; &nbsp;Search for ID ';
	echo '</td><td style=" padding-bottom:2px; vertical-align:middle">';
		echo '&nbsp;';
		if (isset($PGV_IMAGES["add"]["other"])) { 
			echo '<a href="#"><img style="border-style:none;" src="', $PGV_IMAGE_DIR, '/', $PGV_IMAGES["add"]["other"], '" alt="', $pgv_lang['add'], ' "title="', $pgv_lang['add'], '" align="middle" name="addLink" value="" onClick="javascript:blankwin(); return false;" />';
			} else {
			echo '<button name="addLink" value="" type="button" onClick="javascript:blankwin(); return false;">', $pgv_lang["add"], '</button>';
		}
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		print_findindi_link("gid", "");
		echo '&nbsp;';
		print_findfamily_link("gid");
		echo '&nbsp;';
		print_findsource_link("gid");
	echo '</td></tr></table>';
	print "<sub>" . $pgv_lang["add_linkid_advice"] . "</sub>";

	
	echo '<br /><br />';
	echo '<input type="hidden" name="idName" id="idName" size="36" value="Name of ID" />';
	require 'modules/GEDFact_assistant/_MEDIA/media_query_2a.php';
	echo '</td></tr>';
	// Admin Option CHAN log update override =======================
	if (PGV_USER_IS_ADMIN) {
		echo "<tr><td class=\"descriptionbox ", $TEXT_DIRECTION, " wrap width25\">";
		print_help_link("no_update_CHAN_help", "qm");
		echo $pgv_lang["admin_override"], "</td><td class=\"optionbox wrap\">\n";
		echo "<input type=\"checkbox\" name=\"preserve_last_changed\" value=\"no_change\"/ >\n";
		echo $pgv_lang["no_update_CHANs"], "<br /><br />\n";
		echo "</td></tr>\n";
	}
	echo '</tr>';
	echo '<input type="hidden" name="more_links" value="No_Values" />';
	echo '<input type="hidden" name="exist_links" value="No_Values" />';
	echo '<tr><td colspan="2">';
	echo '</td></tr>';
	echo '<tr><td class="topbottombar" colspan="2">';
	echo '<center><input type="submit" value="', $pgv_lang["save"], '" onclick="javascript:shiftlinks();" />';
	echo '</center></td></tr>';
	require 'modules/GEDFact_assistant/_MEDIA/media_7_parse_addLinksTbl.php';
	echo '</table>';
	echo '</form>';
	echo '<br/><br/><center><a href="javascript:;" onclick="if (window.opener.showchanges) window.opener.showchanges(); window.close(); winNav.close(); ">', $pgv_lang["close_window"], '</a><br /></center>';
	// print_simple_footer();
	
} elseif ($action == "update" && $paramok) {

	echo "<b>", $mediaid, "</b><br/><br />";
	
	// Unlink records indicated by radio button =========
	if (isset($exist_links) && $exist_links!="No_Values") {
		$exist_links = substr($exist_links, 0, -1);
		$rem_exist_links = (explode(", ", $exist_links));
		foreach ($rem_exist_links as $remLinkId) {
			global $linkToId;
			$linkToId = PrintReady($remLinkId);
			print_text("link_deleted");
			echo '<br />';
			if ($update_CHAN=='no_change') {
				unlinkMedia($remLinkId, 'OBJE', $mediaid, 1, false);
			} else {
				unlinkMedia($remLinkId, 'OBJE', $mediaid, 1, true);
			}
		}
		echo '<br />';
	}else{
		// echo nothing and do nothing
	}
	
	// Add new Links ====================================
	if (isset($more_links) && $more_links!="No_Values" && $more_links!=",") {
		$more_links = substr($more_links, 0, -1);
		$add_more_links = (explode(", ", $more_links));
		foreach ($add_more_links as $addLinkId) {
			global $unlinkFromId;
			$$unlinkFromId = PrintReady($addLinkId);
			print_text("link_added");
			if ($update_CHAN=='no_change') {
				linkMedia($mediaid, $addLinkId, 1, false);
			} else {
				linkMedia($mediaid, $addLinkId, 1, true);
			}
			echo '<br />';
		}
		echo '<br />';
	}else if ($more_links==",") {
		// echo nothing and do nothing
	}else{
		//	echo $mediaid, $pgv_lang["media_now_linked to"], '(', $gid, ')<br />';
		//	linkMedia($mediaid, $gid);
	}
	
	if ($update_CHAN=='no_change') {
		echo $pgv_lang["no_CHANs_update"];
		echo '<br />';
	}
	
	echo '<br/><br/><center><a href="javascript:;" onclick="if (window.opener.showchanges) window.opener.showchanges(); window.close(); winNav.close(); ">', $pgv_lang["close_window"], '</a><br /></center>';
	print_simple_footer();
		
} else {
	// echo '<center>You must be logged in as an Administrator<center>';
	echo '<br/><br/><center><a href="javascript:;" onclick="if (window.opener.showchanges) window.opener.showchanges(); window.close(); winNav.close();">', $pgv_lang["close_window"], '</a><br /></center>';
	//print_simple_footer();
}

?>
