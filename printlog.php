<?php
/**
 * Print logfiles
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  John Finlay and Others
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
 * @version $Id: printlog.php 6879 2010-01-30 11:35:46Z fisharebest $
 */

define('PGV_SCRIPT_NAME', 'printlog.php');
require './config.php';

//-- only allow admins
if (!PGV_USER_GEDCOM_ADMIN) {
	header("Location: login.php?url=admin.php");
	exit;
}

loadLangFile("pgv_confighelp");

print_simple_header("Print logfile");

$logfile=safe_GET('logfile');

// Check for logtype
if (!isset($logfile)) {
	exit;
}
if (substr($logfile, -4) != ".log") {
	exit;
}
if (substr($logfile, 0, 4) == "pgv-") {
	$logtype = "syslog";
} elseif (substr($logfile, 0, 4) == "srch") {
	$logtype = "searchlog";
} elseif (substr($logfile, 0, 4) == "ged-") {
	$logtype = "gedlog";
}
if (!isset($logtype)) {
	exit;
}

// if it's a gedlog or searchlog, get the gedcom name from the filename
if ($logtype == "gedlog") {
	$p2 = strpos($logfile, ".ged");
	$gedname = substr($logfile, 4, $p2);
}
if ($logtype == "searchlog") {
	$p2 = strpos($logfile, ".ged");
	$gedname = substr($logfile, 5, $p2-1);
}

//-- make sure that they have admin status before they can use this page
$auth = false;
if (($logtype == "syslog") && PGV_USER_IS_ADMIN) {
	$auth = true;
}
if ((($logtype == "gedlog") || ($logtype == "searchlog")) && (userGedcomAdmin(PGV_USER_ID, get_gedcom_from_id($gedname)))) {
	$auth = true;
}

if ($auth) {
	// Read the file
	$lines=file($INDEX_DIRECTORY . $logfile);
	$lines = array_reverse($lines);
	$num = sizeof($lines);

	// Print
	echo "<table class=\"facts_table ", $TEXT_DIRECTION, "\">";

	if (($logtype == "syslog") || ($logtype == "gedlog")) {
		echo "<tr><td colspan=\"3\" class=\"topbottombar\">", $pgv_lang["logfile_content"], " [", getLRM(), $INDEX_DIRECTORY, $logfile, "]</td></tr>";
		echo "<tr><td colspan=\"3\" class=\"topbottombar\">";
		echo "<input type=\"button\" value=\"", $pgv_lang["back"], "\" onclick='self.close()';/>&nbsp;<input type=\"button\" value=\"", $pgv_lang["refresh"], "\" onclick='window.location.reload()';/></td></tr>";
		echo "<tr><td class=\"list_label width10\">", $pgv_lang["date_time"], "</td><td class=\"list_label width10\">", $pgv_lang["ip_address"], "</td><td class=\"list_label width80\">", $pgv_lang["log_message"], "</td></tr>";
		for ($i = 0; $i < $num ; $i++)	{
			echo "<tr>";
			$result = explode(' - ', $lines[$i], 3);
			//-- properly handle lines that may not have the correct format
			if (count($result)<3) {
				echo "<td class=\"optionbox\" colspan=\"3\" dir=\"ltr\">", PrintReady($lines[$i]), "</td>";
			} else {
				$result[2] = PrintReady($result[2]);
				for ($j = 0; $j < 3; $j++) {
					echo "<td class=\"optionbox\" dir=\"ltr\">", $result[$j], "</td>";
				}
			}
			echo "</tr>";
		}
		echo "<tr><td colspan=\"3\" class=\"topbottombar\">";
	}

	if ($logtype == "searchlog") {
		echo "<tr><td colspan=\"6\" class=\"topbottombar\">", $pgv_lang["logfile_content"], " [", getLRM(), $INDEX_DIRECTORY, $logfile, "]</td></tr>";
		echo "<tr><td colspan=\"6\" class=\"topbottombar\">";
		echo "<input type=\"button\" value=\"", $pgv_lang["back"], "\" onclick='self.close()';/>&nbsp;<input type=\"button\" value=\"", $pgv_lang["refresh"], "\" onclick='window.location.reload()';/></td></tr>";
		echo "<tr><td class=\"list_label width10\">", $pgv_lang["date_time"], "</td><td class=\"list_label width10\">", $pgv_lang["ip_address"], "</td><td class=\"list_label width10\">", $pgv_lang["user_name"], "</td><td class=\"list_label width10\">", $pgv_lang["searchtype"], "</td><td class=\"list_label width10\">", $pgv_lang["type"], "</td><td class=\"list_label width50\">", $pgv_lang["query"], "</td></tr>";
		for ($i = 0; $i < $num ; $i++) {
			echo "<tr>";
			$result1 = explode('<br />', $lines[$i], 4);
			$result2 = explode(' - ', $result1[0], 3);
			echo "<td class=\"optionbox\" dir=\"ltr\">", substr($result2[0], 13), "</td>";
			echo "<td class=\"optionbox\" dir=\"ltr\">", substr($result2[1], 4), "</td>";
			echo "<td class=\"optionbox\" dir=\"ltr\">";
			$suser = substr($result2[2], 6);
			if (empty($suser)) {
				echo "&nbsp;";
			} else {
				echo $suser;
			}
			echo "</td>";
			if (substr($result1[1], 0, 4) == "Type") {
				echo "<td class=\"optionbox\" dir=\"ltr\">&nbsp;</td>";
				echo "<td class=\"optionbox\" dir=\"ltr\">", substr($result1[1], 6), "</td>";
				$result1[2] = trim($result1[2]);
				while (substr($result1[2], -6) == "<br />") {
					$result1[2] = substr($result1[2], 0, -6);
				}
				if (substr($result1[1], -7) == "General") {
					echo "<td class=\"optionbox\" dir=\"ltr\">", substr($result1[2], 7), "</td>";
				} else {
					echo "<td class=\"optionbox\">", $result1[2], "</td>";
				}
			} else {
				echo "<td class=\"optionbox\" dir=\"ltr\">", substr($result1[1], 12), "</td>";
				echo "<td class=\"optionbox\" dir=\"ltr\">", substr($result1[2], 6), "</td>";
				$result1[3] = trim($result1[3]);
				while (substr($result1[3], -6) == "<br />") {
					$result1[3] = substr($result1[3], 0, -6);
				}
				if (substr($result1[2], -7) == "General"){
					echo "<td class=\"optionbox\" dir=\"ltr\">", substr($result1[3], 7), "</td>";
				} else {
					echo "<td class=\"optionbox\" dir=\"ltr\">", $result1[3], "</td>";
				}
			}
			echo "</tr>";
		}
		echo "<tr><td colspan=\"6\" class=\"topbottombar\">";
	}
	echo"<input type=\"button\" value=\"", $pgv_lang["back"], "\" onclick='self.close()';/>&nbsp;<input type=\"button\" value=\"", $pgv_lang["refresh"], "\" onclick='window.location.reload()';/></td></tr>";
	echo "</table>";
	echo "<br /><br />";
} else {
	echo "Not authorized!<br /><br />";
	echo "<input type=\"button\" value=\"", $pgv_lang["back"], "\" onclick='self.close()';/><br /><br />";
}

print_simple_footer();
?>
