<?php
/**
 * User Messages Block
 *
 * This block will print a users messages
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
 * @version $Id: user_messages.php 6855 2010-01-26 16:26:38Z fisharebest $
 * @package PhpGedView
 * @subpackage Blocks
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_USER_MESSAGES_PHP', '');

require_once PGV_ROOT.'includes/functions/functions_print_facts.php';

$PGV_BLOCKS["print_user_messages"]["name"]		= $pgv_lang["user_messages_block"];
$PGV_BLOCKS["print_user_messages"]["descr"]		= "user_messages_descr";
$PGV_BLOCKS["print_user_messages"]["type"]		= "user";
$PGV_BLOCKS["print_user_messages"]["canconfig"]	= false;
$PGV_BLOCKS["print_user_messages"]["config"]	= array("cache"=>0);

//-- print user messages
function print_user_messages($block=true, $config="", $side, $index) {
	global $pgv_lang, $PGV_IMAGE_DIR, $TEXT_DIRECTION, $PGV_STORE_MESSAGES, $PGV_IMAGES;

	$usermessages = getUserMessages(PGV_USER_NAME);

	$id="user_messages";
	$title = print_help_link("mygedview_message_help", "qm", "", false, true);
	$title .= $pgv_lang["my_messages"]."&nbsp;&nbsp;";
	if ($TEXT_DIRECTION=="rtl") $title .= getRLM();
	$title .= "(".count($usermessages).")";
	if ($TEXT_DIRECTION=="rtl") $title .= getRLM();

	$content = "";
	$content .= "<form name=\"messageform\" action=\"\" onsubmit=\"return confirm('".$pgv_lang["confirm_message_delete"]."');\">";
	if (count($usermessages)==0) {
		$content .= $pgv_lang["no_messages"]."<br />";
	} else {
		$content .= '
			<script language="JavaScript" type="text/javascript">
			<!--
				function select_all() {
					';
		foreach($usermessages as $key=>$message) {
			if (isset($message["id"])) $key = $message["id"];
			$content .= '
						var cb = document.getElementById("cb_message'.$key.'");
						if (cb) {
							if (!cb.checked) cb.checked = true;
							else cb.checked = false;
						}
						';
		}
		$content .= '
				return false;
			}
			//-->
			</script>
		';
		$content .= "<input type=\"hidden\" name=\"action\" value=\"deletemessage\" />";
		$content .= "<table class=\"list_table\"><tr>";
		$content .= "<td class=\"list_label\">".$pgv_lang["delete"]."<br /><a href=\"javascript:;\" onclick=\"return select_all();\">".$pgv_lang["all"]."</a></td>";
		$content .= "<td class=\"list_label\">".$pgv_lang["message_subject"]."</td>";
		$content .= "<td class=\"list_label\">".$pgv_lang["date_created"]."</td>";
		$content .= "<td class=\"list_label\">".$pgv_lang["message_from"]."</td>";
		$content .= "</tr>";
		foreach($usermessages as $key=>$message) {
			if (isset($message["id"])) $key = $message["id"];
			$content .= "<tr>";
			$content .= "<td class=\"list_value_wrap\"><input type=\"checkbox\" id=\"cb_message$key\" name=\"message_id[]\" value=\"$key\" /></td>";
			$showmsg=preg_replace("/(\w)\/(\w)/","\$1/<span style=\"font-size:1px;\"> </span>\$2",PrintReady($message["subject"]));
			$showmsg=str_replace("@","@<span style=\"font-size:1px;\"> </span>",$showmsg);
			$content .= "<td class=\"list_value_wrap\"><a href=\"javascript:;\" onclick=\"expand_layer('message$key'); return false;\"><img id=\"message${key}_img\" src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES["plus"]["other"]."\" border=\"0\" alt=\"".$pgv_lang["show_details"]."\" title=\"".$pgv_lang["show_details"]."\" /> <b>".$showmsg."</b></a></td>";
			if (!empty($message["created"])) {
				$time = strtotime($message["created"]);
			} else {
				$time = time();
			}
			$content .= "<td class=\"list_value_wrap\">".format_timestamp($time)."</td>";
			$content .= "<td class=\"list_value_wrap\">";
			$user_id=get_user_id($message["from"]);
			if ($user_id) {
				$content .= PrintReady(getUserFullName($user_id));
				if ($TEXT_DIRECTION=="ltr") {
					$content .= " " . getLRM() . " - ".htmlspecialchars($user_id,ENT_COMPAT,'UTF-8') . getLRM();
				} else {
					$content .= " " . getRLM() . " - ".htmlspecialchars($user_id,ENT_COMPAT,'UTF-8') . getRLM();
				}
			} else {
				$content .= "<a href=\"mailto:".$message["from"]."\">".str_replace("@","@<span style=\"font-size:1px;\"> </span>",$message["from"])."</a>";
			}
			$content .= "</td>";
			$content .= "</tr>";
			$content .= "<tr><td class=\"list_value_wrap\" colspan=\"5\"><div id=\"message$key\" style=\"display: none;\">";
			$message["body"] = nl2br(htmlspecialchars($message["body"],ENT_COMPAT,'UTF-8'));
			$message["body"] = expand_urls($message["body"]);

			$content .= PrintReady($message["body"])."<br /><br />";
			if (strpos($message["subject"], "RE:")===false) {
				$message["subject"]="RE:".$message["subject"];
			}
			if ($user_id) {
				$content .= "<a href=\"javascript:;\" onclick=\"reply('".$user_id."', '".$message["subject"]."'); return false;\">".$pgv_lang["reply"]."</a> | ";
			}
			$content .= "<a href=\"".encode_url("index.php?action=deletemessage&message_id={$key}")."\" onclick=\"return confirm('".$pgv_lang["confirm_message_delete"]."');\">".$pgv_lang["delete"]."</a></div></td></tr>";
		}
		$content .= "</table>";
		$content .= "<input type=\"submit\" value=\"".$pgv_lang["delete_selected_messages"]."\" /><br /><br />";
	}
	if (get_user_count()>1) {
		$content .= $pgv_lang["message"]." <select name=\"touser\">";
		if (PGV_USER_IS_ADMIN) {
			$content .= "<option value=\"all\">".$pgv_lang["broadcast_all"]."</option>";
			$content .= "<option value=\"never_logged\">".$pgv_lang["broadcast_never_logged_in"]."</option>";
			$content .= "<option value=\"last_6mo\">".$pgv_lang["broadcast_not_logged_6mo"]."</option>";
		}
		foreach (get_all_users() as $user_id=>$user_name) {
			if ($user_id!=PGV_USER_ID && get_user_setting($user_id, 'verified_by_admin')=='yes' && get_user_setting($user_id, 'contactmethod')!='none') {
				$content .= "<option value=\"".$user_name."\">".PrintReady(getUserFullName($user_id))." ";
				if ($TEXT_DIRECTION=="ltr") {
					$content .= stripLRMRLM(getLRM()." - ".$user_name.getLRM());
				} else {
					$content .= stripLRMRLM(getRLM()." - ".$user_name.getRLM());
				}
				$content .= "</option>";
			}
		}
		$content .= "</select><input type=\"button\" value=\"".$pgv_lang["send"]."\" onclick=\"message(document.messageform.touser.options[document.messageform.touser.selectedIndex].value, 'messaging2', ''); return false;\" />";
	}
	$content .= "</form>";

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}
?>
