<?php
/**
*  Manage Servers Page
*
*  Allow a user the ability to manage servers i.e. allowing, banning, deleting
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
* @subpackage Admin
* @version $Id: manageservers.php 6879 2010-01-30 11:35:46Z fisharebest $
* @author rbennett
*/

define('PGV_SCRIPT_NAME', 'manageservers.php');
require './config.php';
require_once PGV_ROOT.'includes/functions/functions.php';
require_once PGV_ROOT.'includes/functions/functions_edit.php';
require_once PGV_ROOT.'includes/functions/functions_import.php';
require_once PGV_ROOT.'includes/classes/class_serviceclient.php';

print_header($pgv_lang["title_manage_servers"]);
//-- only allow gedcom admins here
if (!PGV_USER_GEDCOM_ADMIN) {
	print $pgv_lang["access_denied"];
	//-- display messages as to why the editing access was denied
	if (!PGV_USER_GEDCOM_ADMIN) print "<br />".$pgv_lang["user_cannot_edit"];
	print "<br /><br /><div class=\"center\"><a href=\"javascript: ".$pgv_lang["close_window"]."\" onclick=\"window.close();\">".$pgv_lang["close_window"]."</a></div>\n";
	print_footer();
	exit;
}

$banned = array();
if (file_exists($INDEX_DIRECTORY.'banned.php')) {
	require($INDEX_DIRECTORY.'banned.php');
}
$search_engines = array();
if (file_exists($INDEX_DIRECTORY."search_engines.php")) {
	require($INDEX_DIRECTORY.'search_engines.php');
}
$remoteServers = get_server_list();

$action = safe_GET('action');
if (empty($action)) $action = safe_POST('action');
$address = safe_GET('address');
if (empty($address)) $address = safe_POST('address');
$comment = safe_GET('comment');
if (empty($comment)) $comment = safe_POST('comment');
$comment = str_replace(array("\\", "\$", "\""), array("\\\\", "\\\$", "\\\""), $comment);

$deleteBanned = safe_POST('deleteBanned');
if (!empty($deleteBanned)) { // A "remove banned IP" button was pushed
	$action = 'deleteBanned';
	$address = $deleteBanned;
}

$deleteSearch = safe_POST('deleteSearch');
if (!empty($deleteSearch)) { // A "remove search engine IP" button was pushed
	$action = 'deleteSearch';
	$address = $deleteSearch;
}

$deleteServer = safe_POST('deleteServer');
if (!empty($deleteServer)) { // A "remove remote server" button was pushed
	$action = 'deleteServer';
	$address = $deleteServer;
}

if (empty($action)) $action = 'showForm';

/*
* Validate input string to be an IP address
*/
function validIP($address) {
	if (!preg_match('/^\d{1,3}\.(\d{1,3}|\*)\.(\d{1,3}|\*)\.(\d{1,3}|\*)$/', $address)) return false;
	$pieces = explode('.', $address);
	foreach ($pieces as $number) {
		if ($number!="*" && $number>255) return false;
	}
	return true;
}

if ($action=='addBanned' || $action=='addSearch' || $action=='deleteBanned' || $action=='deleteSearch') {
	if (validIP($address)) {
		// Even if we are adding a new record, we must delete the existing one first.
		PGV_DB::prepare(
			"DELETE FROM {$TBLPREFIX}ip_address WHERE ip_address=?"
		)->execute(array($address));
		if ($action=='addBanned') {
			PGV_DB::prepare(
				"INSERT INTO {$TBLPREFIX}ip_address (ip_address, category, comment) VALUES (?, ?, ?)"
			)->execute(array($address, 'banned', $comment));
		}
		if ($action=='addSearch') {
			PGV_DB::prepare(
				"INSERT INTO {$TBLPREFIX}ip_address (ip_address, category, comment) VALUES (?, ?, ?)"
			)->execute(array($address, 'search-engine', $comment));
		}
	} else {
		if ($action=='addBanned') {
			$errorBanned=$pgv_lang['error_ban_server'];
		}
		if ($action=='addSearch') {
			$errorSearch=$pgv_lang['error_ban_server'];
		}
	}
	$action='showForm';
}

/**
* Adds a server to the outbound remote linking list
*/
if ($action=='addServer') {
	$serverTitle = safe_POST('serverTitle', '[^<>"%{};]+'); // same as PGV_REGEX_NOSCRIPT, but allow ampersand in title
	$serverURL = safe_POST('serverURL', PGV_REGEX_URL);
	$gedcom_id = safe_POST('gedcom_id');
	$username  = safe_POST('username', PGV_REGEX_USERNAME);
	$password  = safe_POST('password', PGV_REGEX_PASSWORD);

	if (!$serverTitle=="" || !$serverURL=="") {
		$errorServer = '';
		$turl = preg_replace("~^\w+://~", "", $serverURL);
		//-- check the existing server list
		foreach ($remoteServers as $server) {
			if (stristr($server['url'], $turl)) {
				if (empty($gedcom_id) || (strpos($server['gedcom'], "_DBID $gedcom_id")!==false)) {
					$whichFile = $server['name'];
					$errorServer = print_text("error_remote_duplicate",0,1);
					break;
				}
			}
		}
		if (empty($errorServer)) {
			$gedcom_string = "0 @new@ SOUR\n";
			$gedcom_string.= "1 TITL ".$serverTitle."\n";
			$gedcom_string.= "1 URL ".$serverURL."\n";
			$gedcom_string.= "1 _DBID ".$gedcom_id."\n";
			$gedcom_string.= "2 _USER ".$username."\n";
			$gedcom_string.= "2 _PASS ".$password."\n";
			//-- only allow admin users to see password
			$gedcom_string.= "3 RESN confidential\n";

			$service = new ServiceClient($gedcom_string);
			$sid = $service->authenticate();
			if (empty($sid) || PEAR::isError($sid)) {
				$errorServer = $pgv_lang["error_siteauth_failed"];
			} else {
				$serverID = append_gedrec($gedcom_string);
				accept_changes($serverID."_".$GEDCOM);
				$remoteServers = get_server_list(); // refresh the list
			}
		}
	} else $errorServer = $pgv_lang["error_url_blank"];

	$action = 'showForm';
}

/**
* Removes a server from the remote linking outbound list
*/
if ($action=='deleteServer') {
	if (!empty($address)) {
		$sid = $address;

		if (count_linked_indi($sid, 'SOUR', PGV_GED_ID) || count_linked_fam($sid, 'SOUR', PGV_GED_ID)) {
			$errorDelete = $pgv_lang["error_remove_site_linked"];
		} else {
			// No references exist:  it's OK to delete this source
			if (delete_gedrec($sid)) {
				accept_changes($sid."_".$GEDCOM);
			} else {
				$errorDelete = $pgv_lang["error_remove_site"];
			}
		}
	}

	$remoteServers = get_server_list(); // refresh the list
	$action = 'showForm';
}

?>

<script language="JavaScript" type="text/javascript">
<!--
function showSite(siteID) {
	buttonShow = document.getElementById("buttonShow_"+siteID);
	siteDetails = document.getElementById("siteDetails_"+siteID);
	if (siteDetails.style.display=='none') {
		buttonShow.innerHTML='<?php echo $pgv_lang["hide_details"];?>';
		siteDetails.style.display='block';
	} else {
		buttonShow.innerHTML='<?php echo $pgv_lang["show_details"];?>';
		siteDetails.style.display='none';
	}
}
//-->
</script>


<!-- Search Engine IP address table -->
<table class="width66" align="center">
<tr>
	<td colspan="2" class="title" align="center">
	<?php echo $pgv_lang["title_manage_servers"];?>
	</td>
</tr>
<tr>
	<td>
	<form name="searchengineform" action="manageservers.php" method="post">
	<table class="width100" align="center">
		<tr>
		<td class="facts_label">
			<?php print_help_link("help_manual_search_engines", "qm"); ?>
			<b><?php echo $pgv_lang["label_manual_search_engines"];?></b>
		</td>
		</tr>
		<tr>
		<td class="facts_value">
			<table align="center">
<?php
	$sql="SELECT ip_address, comment FROM {$TBLPREFIX}ip_address WHERE category='search-engine'";
	if ($DBTYPE=='mysql') {
		$sql.=" ORDER BY INET_ATON(ip_address)";
	} else {
		$sql.=" ORDER BY comment";
	}
	$index=0;
	$search_engines=PGV_DB::prepare($sql)->fetchAssoc();
	foreach ($search_engines as $ip_address=>$ip_comment) {
		echo '<tr><td>';
		if (isset($PGV_IMAGES["remove"]["other"])) {
			echo '<input type="image" src="', $PGV_IMAGE_DIR, '/', $PGV_IMAGES["remove"]["other"], '" alt="', $pgv_lang['delete'], '" name="deleteSearch" value="', $ip_address, '">';
		} else {
			echo '<button name="deleteSearch" value="', $ip_address, '" type="submit">', $pgv_lang["remove"], '</button>';
		}
		echo '</td><td><span dir="ltr"><input type="text" name="address', ++$index, '" size="16" value="', $ip_address, '" readonly /></span></td>';
		echo '<td><input type="text" name="comment', ++$index, '" size="60" value="', $ip_comment, '" readonly /></td></tr>';
	}
	echo '<tr><td valign="top"><input name="action" type="hidden" value="addSearch"/>';
	if (isset($PGV_IMAGES["add"]["other"])) {
		echo '<input type="image" src="', $PGV_IMAGE_DIR, '/', $PGV_IMAGES["add"]["other"], '" alt="', $pgv_lang['add'], '">';
	} else {
		echo '<input type="submit" value="', $pgv_lang['add'], '" />';
	}
	echo '</td><td valign="top"><span dir="ltr"><input type="text" id="txtAddIp" name="address" size="16"  value="', empty($errorSearch) ? '':$address, '" /></span></td>';
	echo '<td><input type="text" id="txtAddComment" name="comment" size="60"  value="" />';
	echo '<br />', $pgv_lang["enter_comment"], '</td></tr>';

	if (!empty($errorSearch)) {
		print '<tr><td colspan="2"><span class="warning">';
		print $errorSearch;
		print '</span></td></tr>';
		$errorSearch = '';
	}
	echo '</table></td></tr></table></form></td></tr></table>';
?>

<!-- Banned IP address table -->
<table class="width66" align="center">
<tr>
	<td>
	<form name="banIPform" action="manageservers.php" method="post">
	<table class="width100" align="center">
		<tr>
		<td class="facts_label">
			<?php print_help_link("help_banning", "qm"); ?>
			<b><?php echo $pgv_lang["label_banned_servers"];?></b>
		</td>
		</tr>
		<tr>
		<td class="facts_value">
			<table align="center">
<?php
	$sql="SELECT ip_address, comment FROM {$TBLPREFIX}ip_address WHERE category='banned'";
	if ($DBTYPE=='mysql') {
		$sql.=" ORDER BY INET_ATON(ip_address)";
	} else {
		$sql.=" ORDER BY comment";
	}
	$banned=PGV_DB::prepare($sql)->fetchAssoc();
	foreach ($banned as $ip_address=>$ip_comment) {
		echo '<tr><td>';
		if (isset($PGV_IMAGES["remove"]["other"])) {
			echo '<input type="image" src="', $PGV_IMAGE_DIR, '/', $PGV_IMAGES["remove"]["other"], '" alt="', $pgv_lang['delete'], '" name="deleteBanned" value="', $ip_address, '">';
		} else {
			echo '<button name="deleteBanned" value="', $ip_address, '" type="submit">', $pgv_lang["remove"], '</button>';
		}
		echo '</td><td><span dir="ltr"><input type="text" name="address', ++$index, '" size="16" value="', $ip_address, '" readonly /></span></td>';
		echo '<td><input type="text" name="comment', ++$index, '" size="60" value="', $ip_comment, '" readonly /></td></tr>';
	}
	echo '<tr><td valign="top"><input name="action" type="hidden" value="addBanned"/>';
	if (isset($PGV_IMAGES["add"]["other"])) {
		echo '<input type="image" src="', $PGV_IMAGE_DIR, '/', $PGV_IMAGES["add"]["other"], '" alt="', $pgv_lang['add'], '">';
	} else {
		echo '<input type="submit" value="', $pgv_lang['add'], '" />';
	}
	echo '</td><td valign="top"><span dir="ltr"><input type="text" id="txtAddIp" name="address" size="16"  value="', empty($errorBanned) ? '':$address, '" /></span></td>';
	echo '<td><input type="text" id="txtAddComment" name="comment" size="60"  value="" />';
	echo '<br />', $pgv_lang["enter_comment"], '</td></tr>';

	if (!empty($errorBanned)) {
		print '<tr><td colspan="2"><span class="warning">';
		print $errorBanned;
		print '</span></td></tr>';
		$errorBanned = '';
	}
	echo '</table></td></tr></table></form></td></tr></table>';
?>

<!-- remote server list -->
<table class="width66" align="center">
<tr>
	<td>
	<form name="serverlistform" action="manageservers.php" method="post">
	<table class="width100">
		<tr>
		<td class="facts_label">
			<b><?php echo $pgv_lang["label_added_servers"];?></b>
		</td>
		</tr>
		<tr>
		<td class="facts_value">
			<table>
<?php
	foreach ($remoteServers as $sid=>$server) {
		$serverTitle = $server['name'];
		$serverURL = $server['url'];
		$gedcom_id = get_gedcom_value('_DBID', 1, $server['gedcom']);
		$username = get_gedcom_value('_USER', 2, $server['gedcom']);
?>
			<tr>
				<td>
				<button type="submit" onclick="return (confirm('<?php echo $pgv_lang["confirm_delete_source"];?>'))" name="deleteServer" value="<?php echo $sid;?>"><?php echo $pgv_lang["remove"];?></button>
				&nbsp;&nbsp;
				<button id="buttonShow_<?php echo $sid;?>" type="button" onclick="showSite('<?php echo $sid;?>');"><?php echo $pgv_lang["show_details"];?></button>
				&nbsp;&nbsp;
				<button type="button" onclick="window.open('source.php?sid=<?php echo $sid;?>&ged=<?php echo $GEDCOM;?>')"><?php echo $pgv_lang["title_view_conns"];?></button>
				&nbsp;&nbsp;
				<?php echo PrintReady($serverTitle); ?>
				<div id="siteDetails_<?php echo $sid;?>" style="display:none">
					<br />
					<table>
					<tr>
						<td class="facts_label width20">
						<?php print $pgv_lang["id"];?>
						</td>
						<td class="facts_value">
						<?php echo $sid;?>
						</td>
					</tr>
					<tr>
						<td class="facts_label width20">
						<?php print $pgv_lang["title"];?>
						</td>
						<td class="facts_value">
						<?php echo PrintReady($serverTitle);?>
						</td>
					</tr>
					<tr>
						<td class="facts_label width20">
						<?php print $pgv_lang["label_server_url"];?>
						</td>
						<td class="facts_value">
						<?php echo PrintReady($serverURL);?>
						</td>
					</tr>
					<tr>
						<td class="facts_label width20">
						<?php echo $pgv_lang["label_gedcom_id2"];?>
						</td>
						<td class="facts_value">
						<?php echo PrintReady($gedcom_id);?>
						</td>
					</tr>
					<tr>
						<td class="facts_label width20">
						<?php print $pgv_lang["label_username_id"];?>
						</td>
						<td class="facts_value">
						<?php echo PrintReady($username);?>
						</td>
					</tr>
					</table>
					<br />
				</div>
				</td>
			</tr>
<?php
			}
	if (!empty($errorDelete)) {
		print '<tr><td colspan="2"><span class="warning">';
		print $errorDelete;
		print '</span></td></tr>';
		$errorDelete = '';
	}
?>
			</table>
		</td>
		</tr>
	</table>
	</form>
	</td>
</tr>
</table>

<!-- Add remote server form -->
<?php
if (empty($errorServer)) {
	$serverTitle = '';
	$serverURL = '';
	$gedcom_id = '';
	$username = '';
}
?>
<form name="addserversform" action="manageservers.php" method="post"">
<table class="width66" align="center">
<tr>
	<td valign="top">
	<table class="width100">
		<tr>
		<td class="facts_label" colspan="2">
			<?php print_help_link("help_remotesites", "qm"); ?>
			<b><?php print $pgv_lang["label_new_server"];?></b>
		</td>
		</tr>
		<tr>
		<td class="facts_label width20">
			<?php print $pgv_lang["title"];?>
		</td>
		<td class="facts_value">
			<input type="text" size="66" name="serverTitle" value="<?php echo PrintReady($serverTitle);?>" />
		</td>
		</tr>
		<tr>
		<td class="facts_label width20">
			<?php print_help_link('link_remote_site_help', 'qm');?>
			<?php print $pgv_lang["label_server_url"];?>
		</td>
		<td class="facts_value">
			<input type="text" size="66" name="serverURL" value="<?php echo PrintReady($serverURL);?>" />
			<br /><?php echo $pgv_lang["example"];?>&nbsp;&nbsp;http://www.remotesite.com/phpGedView/genservice.php?wsdl
		</td>
		</tr>
		<tr>
		<td class="facts_label width20">
			<?php echo $pgv_lang["label_gedcom_id2"];?>
		</td>
		<td class="facts_value">
			<input type="text" name="gedcom_id" value="<?php echo PrintReady($gedcom_id);?>" />
		</td>
		</tr>
		<tr>
		<td class="facts_label width20">
			<?php print $pgv_lang["label_username_id"];?>
		</td>
		<td class="facts_value">
			<input type="text" name="username" value="<?php echo PrintReady($username);?>" />
		</td>
		</tr>
		<tr>
		<td class="facts_label width20">
			<?php print $pgv_lang["label_password_id"];?>
		</td>
		<td class="facts_value">
			<input type="password" name="password" />
		</td>
		</tr>
		<tr>
		<td class="facts_value" align="center" colspan="2">
			<input type="submit" value="<?php echo $pgv_lang['add'];?>" />
			<input name="action" type="hidden" value="addServer"/>
<?php
	if (!empty($errorServer)) {
		print '<br /><br /><span class="warning">';
		print $errorServer;
		print '</span>';
		$errorServer = '';
	}
?>
		</td>
		</tr>
	</table>
	</td>
</tr>
</table>
</form>
<?php
	print_footer();
?>
