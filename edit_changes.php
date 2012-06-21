<?php
/**
 * Interface to review/accept/reject changes made by editing online.
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
 * @subpackage Edit
 * @version $Id: edit_changes.php 6879 2010-01-30 11:35:46Z fisharebest $
 */

define('PGV_SCRIPT_NAME', 'edit_changes.php');
require './config.php';
require PGV_ROOT.'includes/functions/functions_edit.php';

if (!PGV_USER_CAN_ACCEPT) {
	header('Location: login.php?url=edit_changes.php');
	exit;
}

require $INDEX_DIRECTORY.'pgv_changes.php';

$action=safe_GET('action');
$cid   =safe_GET('cid');
$index =safe_GET('index');
$ged   =safe_GET('ged');

print_simple_header($pgv_lang['review_changes']);
?>
<script language="JavaScript" type="text/javascript">
<!--
	function show_gedcom_record(xref) {
		var recwin = window.open("gedrecord.php?fromfile=1&pid="+xref, "_blank", "top=50, left=50, width=600, height=400, scrollbars=1, scrollable=1, resizable=1");
	}
	function showchanges() {
		window.location = '<?php echo PGV_SCRIPT_NAME; ?>';
	}

	function show_diff(diffurl) {
		window.opener.location = diffurl;
		return false;
	}
//-->
</script>
<?php
echo '<div class="center"><span class="subheaders">', $pgv_lang['review_changes'], '</span><br /><br />';

switch ($action) {
case 'undo':
	if (undo_change($cid, $index)) {
		echo '<b>', $pgv_lang['undo_successful'], '</b>';
	}
	break;
case 'accept':
	if (accept_changes($cid)) {
		echo '<b>', $pgv_lang['accept_successful'], '</b>';
	}
	break;
case 'undoall':
	//-- alert that we only want to save the file and changes once
	$manual_save = true;
	foreach ($pgv_changes as $cid=>$changes) {
		if ($changes[0]['gedcom']==$ged) {
			undo_change($cid, 0);
		}
	}
	write_changes();
	$manual_save = false;
	echo '<b>', $pgv_lang['undo_successful'], '</b>';
	break;
case 'acceptall':
	//-- only save the file and changes once
	$manual_save = true;
	foreach ($pgv_changes as $cid=>$changes) {
		if ($changes[0]['gedcom']==$ged) {
			accept_changes($cid);
		}
	}
	write_changes();
	$manual_save = false;
	if ($SYNC_GEDCOM_FILE) {
		write_file();
	}
	echo '<b>', $pgv_lang['accept_successful'], '</b>';
	break;
}

if (empty($pgv_changes)) {
	echo '<br /><br /><b>', $pgv_lang['no_changes'], '</b>';
} else {
	$output = '<br /><br /><table class="list_table"><tr><td class="list_value '.$TEXT_DIRECTION.'">';
	$changedgedcoms = array();
	foreach ($pgv_changes as $cid=>$changes) {
		foreach ($changes as $i=>$change) {
			if ($i==0) {
				$changedgedcoms[$change['gedcom']] = true;
				$GEDCOM=$change['gedcom'];

				$record=GedcomRecord::getInstance($change['gid']);
				$output.='<b>'.PrintReady($record->getFullName()).'</b> '.getLRM().'('.$record->getXref().')'.getLRM().'<br />';
				$output.='<a href="javascript:;" onclick="return show_diff(\''.encode_url($record->getLinkUrl().'&show_changes=yes').'\');">'.$pgv_lang['view_change_diff'].'</a> | ';
				$output.="<a href=\"javascript:show_gedcom_record('".$change['gid']."');\">".$pgv_lang['view_gedcom']."</a> | ";
				$output.="<a href=\"javascript:;\" onclick=\"return edit_raw('".$change['gid']."');\">".$pgv_lang['edit_raw']."</a><br />";
				$output.='<div class="indent">';
				$output.=$pgv_lang['changes_occurred'].'<br />';
				$output.='<table class="list_table"><tr>';
				$output.='<td class="list_label">'.$pgv_lang['accept'].'</td>';
				$output.='<td class="list_label">'.$pgv_lang['type'].'</td>';
				$output.='<td class="list_label">'.$pgv_lang['username'].'</td>';
				$output.='<td class="list_label">'.$pgv_lang['date'].'</td>';
				$output.='<td class="list_label">GEDCOM</td>';
				$output.='<td class="list_label">'.$pgv_lang['undo'].'</td>';
				$output.='</tr>';
			}
			if ($i==count($changes)-1) {
				$output .= "<td class=\"list_value $TEXT_DIRECTION\"><a href=\"".encode_url("edit_changes.php?action=accept&cid={$cid}")."\">".$pgv_lang['accept']."</a></td>";
			} else {
				$output .= "<td class=\"list_value $TEXT_DIRECTION\">&nbsp;</td>";
			}
			$output .= "<td class=\"list_value $TEXT_DIRECTION\"><b>".$pgv_lang[$change['type']]."</b></td>";
			$output .= "<td class=\"list_value $TEXT_DIRECTION\"><a href=\"javascript:;\" onclick=\"return reply('".$change['user']."', '".$pgv_lang['review_changes']."')\" alt=\"".$pgv_lang['message']."\">";
			if ($user_id=get_user_id($change['user'])) {
				$output.=PrintReady(getUserFullName($user_id));
			}
 			$output .= PrintReady("&nbsp;(".$change['user'].")")."</a></td>";
 			$output .= "<td class=\"list_value $TEXT_DIRECTION\">".format_timestamp($change['time'])."</td>";
			$output .= "<td class=\"list_value $TEXT_DIRECTION\">".$change['gedcom']."</td>";
			if ($i==count($changes)-1) {
				$output .= "<td class=\"list_value $TEXT_DIRECTION\"><a href=\"".encode_url("edit_changes.php?action=undo&cid={$cid}&index={$i}")."\">".$pgv_lang['undo']."</a></td>";
			} else {
				$output .= "<td class=\"list_value $TEXT_DIRECTION\">&nbsp;</td>";
			}
			$output.='</tr>';
			if ($i==count($changes)-1) {
				$output.='</table></div><br />';
			}
		}
	}
	$output .= "</td></tr></table>";

	//-- Now for the global Action bar:
	$output2 = "<br /><table class=\"list_table\">";
	// Row 1 column 1: title "Accept all"
	$output2 .= "<tr><td class=\"list_label\">".$pgv_lang['accept_all']."</td>";
	// Row 1 column 2: separator
	$output2 .= "<td class=\"list_label width25\">&nbsp;</td>";
	// Row 1 column 3: title "Undo all"
	$output2 .= "<td class=\"list_label\">".$pgv_lang['undo_all']."</td></tr>";

	// Row 2 column 1: action "Accept all"
	$output2 .= "<tr><td class=\"list_value\">";
	$count = 0;
	foreach ($changedgedcoms as $ged=>$value) {
		if ($count!=0) $output2.="<br /><br />";
		$output2 .= "<a href=\"".encode_url("edit_changes.php?action=acceptall&ged={$ged}")."\">$ged - ".$pgv_lang['accept_all']."</a>";
		$count ++;
	}
	$output2 .= "</td>";
	// Row 2 column 2: separator
	$output2 .= "<td class=\"list_value width25\">&nbsp;</td>";
	// Row 2 column 3: action "Undo all"
	$output2 .= "<td class=\"list_value\">";
	$count = 0;
	foreach ($changedgedcoms as $ged=>$value) {
		if ($count!=0) $output2.="<br /><br />";
		$output2 .= "<a href=\"".encode_url("edit_changes.php?action=undoall&ged={$ged}")."\" onclick=\"return confirm('".$pgv_lang['undo_all_confirm']."');\">$ged - ".$pgv_lang['undo_all']."</a>";
		$count ++;
	}
	$output2 .= '</td></tr></table>';

	echo '<center>', $pgv_lang['accept_gedcom'], '<br />', $output2, $output, $output2, '</center>';
}

echo '</div>';

echo "<br /><br /><center><a href=\"javascript:;\" onclick=\"if (window.opener.showchanges) window.opener.showchanges(); window.close();\">", $pgv_lang['close_window'], '</a><br /></center>';
print_simple_footer();
?>
