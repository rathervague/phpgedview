<?php
/**
* phpGedView Research Assistant Tool - ra_ViewTasks
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
* @subpackage Research_Assistant
* @version $Id: ra_ViewTask.php 6481 2009-11-28 20:17:25Z fisharebest $:
* @author Jason Porter
* @author Wade Lasson
* @author Brandon Gagnon
* @author Brian Kramer
* @author Julian Gautier
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'includes/classes/class_person.php';
global $pgv_lang;

	/**
	* GETS the TITLE of the task with the given taskid
	*
	* @return mixed title of the task
	*/
function getTitle(){
	global $TBLPREFIX;

	return
		PGV_DB::prepare("SELECT t_title FROM {$TBLPREFIX}tasks WHERE t_id=?")
		->execute(array($_REQUEST['taskid']))
		->fetchOne();
}

/**
* GETS the DATES of the task with the given taskid
*
* @return mixed dates of the task
*/
function getDates(){
	global $TBLPREFIX;

	$s_date=
		PGV_DB::prepare("SELECT t_startdate FROM {$TBLPREFIX}tasks WHERE t_id=?")
		->execute(array($_REQUEST['taskid']))
		->fetchOne();
	$e_date=
		PGV_DB::prepare("SELECT t_enddate FROM {$TBLPREFIX}tasks WHERE t_id=?")
		->execute(array($_REQUEST['taskid']))
		->fetchOne();

	// Display either the starting and ending date or just the ending date
	if (empty($e_date)) {
		return "opened: $s_date";
	} else {
		return "$s_date - $e_date";
	}
}

/**
* GETS a list of all available FOLDERS with the folder that the current task is in, on top
*
* @return mixed list of available folders
*/
function getFolders() {
	global $TBLPREFIX;

	$rows=PGV_DB::prepare("SELECT fr_name, fr_id FROM {$TBLPREFIX}folders")->fetchAll();

	$out = "";
	foreach ($rows as $row) {
		$out.='<option value="'.htmlspecialchars($row->fr_id).'">'.htmlspecialchars($row->fr_name).'</option>';
	}
	return $out;
}

/**
* GETS all PEOPLE associated with the task given taskid
*
* @return mixed people associated with the task
*/
function getPeople(){
	global $TBLPREFIX;

	$ids=
		PGV_DB::prepare("SELECT it_i_id FROM {$TBLPREFIX}individualtask WHERE it_t_id=?")
		->execute(array($_REQUEST['taskid']))
		->fetchOneColumn();

	$out="";
	foreach ($ids as $id) {
		$person=Person::getInstance($id);
		if ($person) {
			$bdate=$person->getEstimatedBirthDate();
			$byear=$bdate->gregorianYear();
			$out.='<a href="'.$person->getLinkUrl().'">'.PrintReady($person->getFullName()." - ".$byear).'</a><br />';
		}
	}

	return $out;
}

/**
* GETS the DESCRIPTION of the task with the given taskid
*
* @return mixed description of the task
*/
function getDescription(){
	global $TBLPREFIX;

	return
		PGV_DB::prepare("SELECT t_description FROM {$TBLPREFIX}tasks WHERE t_id=?")
		->execute(array($_REQUEST['taskid']))
		->fetchOne();
}

/**
* GETS the results of the task with the given taskid
*
* @return mixed description of the task
*/
function getResults(){
	global $TBLPREFIX;

	return
		PGV_DB::prepare("SELECT t_results FROM {$TBLPREFIX}tasks WHERE t_id=?")
		->execute(array($_REQUEST['taskid']))
		->fetchOne();
}

/**
* GETS all SOURCES associated with the task given taskid
*
* @return sources associated with the task
*/
function getSources(){
	global $TBLPREFIX;

	$rows=
		PGV_DB::prepare("SELECT s_name, s_id FROM {$TBLPREFIX}sources, {$TBLPREFIX}tasksource WHERE s_file=? AND ts_s_id=s_id AND ts_t_id=?")
		->execute(array(PGV_GED_ID, $_REQUEST['taskid']))
		->fetchAll();

	$sources = array();
	foreach ($rows as $row) {
		$sources[$row->s_id]=$row->s_name;
	}
	return $sources;
}

/**
* GETS all COMMENTS associated with the task
*
* @return mixed comments associated with the task
*/
function getComments(){
	global $TBLPREFIX, $pgv_lang;

	$rows=
		PGV_DB::prepare("SELECT c_u_username, c_body, c_datetime, c_id FROM {$TBLPREFIX}comments WHERE c_t_id='" . $_REQUEST["taskid"] . "' ORDER BY c_datetime DESC")
		->fetchAll();

	$out='';
	foreach ($rows as $row) {
		$date=timestamp_to_gedcom_date($row->c_datetime);
		$out .= '<div class="blockcontent"><div class="person_box" id="comment1"><span class="news_title">' .
			$row->c_u_username .  // INSERT username
			'</span><br /><span class="news_date">' .
			$date->Display(false).' - '. date("g:i:s A",(int)$row->c_datetime). // INSERT datetime
			'</span><br /><br />' .
			nl2br($row->c_body) . // INSERT body
			'<hr size="1" />';

		if(PGV_USER_IS_ADMIN || PGV_USER_NAME==$row->c_u_username){
			$out .= '<a href="javascript:;" onclick="editcomment(' .
				$row->c_id . // INSERT commentid
				')">'.$pgv_lang["edit"].'</a> | <a href="" onclick="confirm_prompt(\''.$pgv_lang["comment_delete_check"].'\', ' .
				$row->c_id . // INSERT commentid
				'); return false;">'.$pgv_lang["delete"].'</a>';
		}
		$out .= '<br /></div></div><br/>';
	}
	return $out;
}


if (isset($_REQUEST['delete']) && !empty($_REQUEST['delete'])){
	// TODO: Verify user
	PGV_DB::prepare("DELETE FROM {$TBLPREFIX}comments WHERE c_id=?")
		->execute(array($_REQUEST['delete']));
}
?>

<!--JAVASCRIPT-->
<script language="JavaScript" type="text/javascript"><!--
	function showchanges() {
		window.location = 'module.php?mod=research_assistant&action=edittask&taskid=<?php print $_REQUEST['taskid']; ?>';
	}
	function editcomment(commentid) {
	window.open('module.php?mod=research_assistant&action=editcomment&taskid=<?php print $_REQUEST['taskid']; ?>&commentid='+commentid, '', 'top=50,left=50,width=800,height=500,resizable=1,scrollbars=1');
	}
	function confirm_prompt(text, commentid) {
		if (confirm(text)) {
			window.location = 'module.php?mod=research_assistant&action=viewtask&delete='+commentid+'&taskid=<?php print $_REQUEST['taskid']; ?>';
		}
	}
//-->
</script>
<!--BEGIN VIEW TASK FORM-->
<form action="module.php" method="post">
	<input type="hidden" name="mod" value="research_assistant" />
	<input type="hidden" name="action" value="updatetask" />
	<input type="hidden" name="taskid" value="<?php print $_REQUEST['taskid'] ?>" />
	<table class="list_table" align="center" border="0" width="40%">
	<tr>
<!--HEADING-->
	<th colspan="4" align="right" class="topbottombar">
	<h2>
	<?php  print $pgv_lang["view_task"]; print_help_link("ra_task_view_help", "qm", '', false, false);?>
	</h2>
	</th>
	</tr>
	<tr>
<!----- todo: print RTL title, description, people and source right justified ----->
<!--TITLE-->
			<th class="descriptionbox">
	<?php print $pgv_lang["title"]; ?>
	</th>
	<th class="optionbox" colspan="3" align="left">

	<?php
	// get title, given taskid
	print PrintReady(getTitle());
	?>
	</th>
	</tr>
	<tr>
<!--DESCRIPTION-->
			<th class="descriptionbox">
	<?php print $pgv_lang["description"]; ?>
	</th>
	<td class="optionbox" colspan="3" align="left">
	<?php
	print PrintReady(nl2br(getDescription()));
	?>
	</td>
	</tr>
	<tr>
<!--PEOPLE-->
			<th class="descriptionbox">
	<?php print $pgv_lang["people"]; ?>
	</th>
	<td class="optionbox" colspan="3" align="left">
	<?php
	// Get people, given taskid
	print getPeople();
	?>
	</td>
	</tr>
	<tr>
<!--SOURCES-->
			<th class="descriptionbox">
	<?php print $pgv_lang["source"]; ?>
	</th>
			<td class="optionbox" colspan="3" align="left">
	<?php
	$sources = getSources();
	$sval = '';
	foreach($sources as $sid=>$source) {
	$sval .= ';'.$sid;
	print '<a id="link_'.$sid.'" href="source.php?sid='.$sid.'">'.$source.'</a>';
	}
	?>
	</td>
	</tr>
	<?php $results = getResults();
	if (!empty($results)) { ?>
	<tr>
<!--results-->
			<th class="descriptionbox">
	<?php print $pgv_lang["result"]; ?>
	</th>
	<td class="optionbox" colspan="3" >
	<?php
	print $results;
	?>
	</td>
	</tr>
	<?php } ?>
	<tr>
<!--EDIT-->
	<th colspan="4" align="right" class="topbottombar"><input type="button" value="<?php print $pgv_lang["edit_task"]; ?>"
	onclick="window.location.href='module.php?mod=research_assistant&amp;action=edittask&amp;taskid=<?php print $_REQUEST['taskid']; ?>'"/></th>
	</tr>

	<tr>
	<td colspan="4">
	<br />
	</td>
	</tr>
	<tr>
<!--HEADING-->
	<th colspan="4" align="right" class="topbottombar">
	<h3>
	<?php print $pgv_lang["comments"]; print_help_link("ra_comments_help", "qm", '', false, false);?>
	</h3>
	</th>
	</tr>
	<tr>
	<td colspan="4">
<!--COMMENT SECTION-->
	<div id="gedcom_news" class="block">
		<table class="blockheader" cellspacing="0" cellpadding="0">
			<tr>
				<td class="blockh1" >&nbsp;</td>
				<td class="blockh2" >
					<div class="blockhc">
					</div>
				</td>
				<td class="blockh3">&nbsp;</td>
			</tr>
		</table>
	<?php print PrintReady(getComments()); ?>

	</div>
<!--END COMMENT SECTION-->
</td>
</tr>
<tr class="topbottombar">
	<td colspan="4">
<input type="button" value="<?php print $pgv_lang["add_new_comment"]; ?>" name="Add New Comment" onclick="window.open('module.php?mod=research_assistant&action=editcomment&taskid='+<?php print $_REQUEST['taskid']; ?>, '',
	'top=50,left=50,width=800,height=500,resizable=1,scrollbars=1');">
	</td>
	</tr>
	</table>
	</form>

<!--END VIEW TASK FORM-->
