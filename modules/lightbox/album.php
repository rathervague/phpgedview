<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2007 to 2009  PGV Development Team.  All rights reserved.
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
 * @version $Id: album.php 6879 2010-01-30 11:35:46Z fisharebest $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

loadLangFile("lightbox:lang");

global $LANGUAGE, $mediatab, $mediacnt;
global $edit, $controller, $tabno, $_REQUEST, $thumb_edit, $n, $LB_URL_WIDTH, $LB_URL_HEIGHT, $LB_TT_BALLOON ;
global $reorder, $rownum, $sort_i, $GEDCOM;

$reorder=safe_get('reorder', '1', '0');

// Get Javascript variables from lb_config.php ---------------------------
require_once PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';
//	require_once PGV_ROOT.'modules/lightbox/functions/browser_detection_php_ar.php';

function cut_html($string)
{
    $a=$string;

    while ($a = strstr($a, '&'))
    {
        //echo "'", $a, "'\n";
        $b=strstr($a, ';');
        if (!$b)
        {
            //echo "couper...\n";
            $nb=strlen($a);
            return substr($string, 0, strlen($string)-$nb);
        }
        $a=substr($a, 1, strlen($a)-1);
    }
    return $string;
}

if (isset($edit)) {
	$edit=$edit;
}else{
	$edit=1;
	}

// Used when sorting media on album tab page ===============================================
if ($reorder==1 ){

$sort_i=0; // Used in sorting on lightbox_print_media_row.php page

?>
	<script type="text/javascript">
	<!--
	// This script saves the dranNdrop reordered info into a hidden form input element (name=order2)
	function saveOrder() {
		// var sections = document.getElementsByClassName('section');
		var sections = $$('.section');
		var order = '';
		sections.each(function(section) {
			order += Sortable.sequence(section) + ',';
			document.getElementById("ord2").value = order;
		});
		//document.getElementById("ord2").value = order;
	};
	//-->
	</script>


	<form name="reorder_form" method="post" action="edit_interface.php">
		<input type="hidden" name="action" value="al_reorder_media_update" />
		<input type="hidden" name="pid" value="<?php print $pid; ?>" />
		<input type="hidden" id="ord2" name="order2" value="" />

		<center>
		<button type="submit" title="<?php print $pgv_lang["reorder_media_save"];?>" onclick="saveOrder();" ><?php print $pgv_lang["save"];?></button>&nbsp;
		<button type="submit" title="<?php print $pgv_lang["reorder_media_reset"];?>" onclick="document.reorder_form.action.value='al_reset_media_update'; document.reorder_form.submit();"><?php print $pgv_lang["reset"];?></button>&nbsp;
		<button type="button" title="<?php print $pgv_lang["reorder_media_cancel"];?>" onClick="location.href='<?php echo PGV_SCRIPT_NAME, "?pid=", $pid, "&tab=", $tabno; ?>'"><?php print $pgv_lang["cancel"];?></button>
<?php
/*
		// Debug ---------------------------------------------------------------------------
		&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="button" onClick="getGroupOrder()" value="Debug: Sorted">
		// ------------------------------------------------------------------------------------
*/
?>
		</center>
	</form>
<?php
}
// =====================================================================================

//------------------------------------------------------------------------------
// Start Main Table
//------------------------------------------------------------------------------
// echo "<table border='0' width='100%' cellpadding=\"0\" ><tr>", "\n\n";

//------------------------------------------------------------------------------
// Build Thumbnail Rows
//------------------------------------------------------------------------------
//	echo "<td valign=\"top\">";
		echo "<table width=\"100%\" cellpadding=\"0\" border=\"0\"><tr>";
		echo "<td width=\"100%\" valign=\"top\" >";
		lightbox_print_media($pid, 0, true, 1);		// map, painting, photo, tombstone)
		lightbox_print_media($pid, 0, true, 2);		// card, certificate, document, magazine, manuscript, newspaper
		lightbox_print_media($pid, 0, true, 3);		// electronic, fiche, film
		lightbox_print_media($pid, 0, true, 4);		// audio, book, coat, video, other
		lightbox_print_media($pid, 0, true, 5);		// footnotes
		echo "</td>";
		echo "</tr></table>";
//	echo "</td>";
//------------------------------------------------------------------------------
// End Thumbnail Rows
//------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// Build Relatives navigator from includes/controllers/individual_ctrl
//------------------------------------------------------------------------------
/*
	echo '<td valign="top" align="center" width="220px">', "\n" ;
		echo "<table cellpadding=\"0\" style=\"margin-top:2px; margin-left:0px;\" ><tr><td width=\"220px\" class=\"optionbox\" align=\"center\">";
		echo "<b>{$pgv_lang['view_lightbox']}</b><br /><br />" . "\n" ;
			$controller->fam_nav();
		echo "<br />";
		echo "</td></tr></table>";
	echo "</td>" . "\n\n" ;
*/
// -----------------------------------------------------------------------------
// end Relatives navigator
// -----------------------------------------------------------------------------


//------------------------------------------------------------------------------
// End Main Table
//------------------------------------------------------------------------------
//echo "</tr></table>";


?>
