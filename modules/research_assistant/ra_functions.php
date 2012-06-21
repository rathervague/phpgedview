<?php

/**
 * phpGedView Research Assistant Tool - Functions File.
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
 * @version $Id: ra_functions.php 6482 2009-11-28 20:35:36Z fisharebest $
 * @author Jason Porter
 * @author Wade Lasson
 * @author Brandon Gagnon
 * @author Brian Kramer
 * @author Julian Gautier
 * @author Mike Hessick
 * @author Mike Austin
 * @author Gavin Winkler
 * @author David Molton
 * @author Daniel Parker
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

loadLangFile("research_assistant:lang");

require_once PGV_ROOT.'modules/research_assistant/forms/ra_privacy.php';
require_once PGV_ROOT.'modules/research_assistant/forms/ra_RSFunction.php';
require_once PGV_ROOT.'modules/research_assistant/forms/ra_RSSingleFactClass.php';


if (file_exists($INDEX_DIRECTORY.$GEDCOM.'_ra_priv.php')) {
	require_once $INDEX_DIRECTORY.$GEDCOM.'_ra_priv.php';
}
define("BASEPATH", './modules/research_assistant/');
$emptyfacts = array("BIRT","CHR","DEAT","BURI","CREM","ADOP","BAPM","BARM","BASM","BLES","CHRA","CONF","FCOM","ORDN","NATU","EMIG","IMMI","CENS","PROB","WILL","GRAD","RETI","BAPL","CONL","ENDL","SLGC","EVEN","MARR","SLGS","MARL","ANUL","CENS","DIV","DIVF","ENGA","MARB","MARC","MARS","CHAN","_SEPR","RESI", "DATA", "MAP");
$templefacts = array("SLGC","SLGS","BAPL","ENDL","CONL");
$nonplacfacts = array("ENDL","NCHI","SLGC","SLGS","SSN","CHAN","_UID");
$nondatefacts = array("ABBR","ADDR","AFN","AUTH","EMAIL","FAX","NAME","NCHI","NOTE","OBJE","PHON","PUBL","REFN","REPO","SEX","SOUR","SSN","TEXT","TITL","WWW","_EMAIL","_UID");

/**
 * trims a PLAC string to a certain depth for comparison purposes
 */
function trimLocation($loc) {
	$loclevels = 4;  // number of levels of detail to keep
	if (!$loc) return "";
	$newLoc = "";
	// reverse the array so that we get the top level first
	$levels = array_reverse(explode(',', $loc));
	foreach($levels as $pindex=>$ppart) {
		// build the location string in reverse order, up to the requested number of levels
		if ($pindex < $loclevels) $newLoc .= trim($ppart).",";
	}
	// there is an extra comma at the end, but since this string is just used for comparison purposes, it won't hurt anything
	return ($newLoc);
}

/**
 * Base class for the Research Assistant, contains all basic functionality
 */
class ra_functions {

	var $sites = array();
	function Init() {
		try {
			PGV_DB::updateSchema('modules/research_assistant/db_schema/', 'RA_SCHEMA_VERSION', 1);
		} catch (PDOException $ex) {
			// The schema update scripts should never fail.  If they do, there is no clean recovery.
			die($ex);
		}
	}

	/*
	 * Gets events from within the date range supplied
	 *
	 * @startDate the Starting date you want to look from, in the format yyyymmdd
	 * @endDate the Ending date for the range you want to look, in the format yyyymmdd
	 * @factLookingFor optional fact to narrow to a specific GEDCOM facttype
	 * @place the place you want to narrow your search to.  Comma delimited. I.E(USA,IDAHO,BOISE) Up to 5 total criteria
	 *
	 * @return A multi-dimensional array of the valid dates
	 */
	function getEventsForDates($startDate,$endDate,$factLookingFor = "",$place = "") {
		global $TBLPREFIX;

		if (empty($endDate)) {
			//Add a ten year difference if no end date was sent in
			$endDate = $startDate + 00100000;
		}

		if (empty($factLookingFor)) {
			$sql = "SELECT * FROM {$TBLPREFIX}factlookup WHERE startdate<=? AND enddate>=?";
			$vars=array($endDate, $startDate);
		} else {
			$sql = "SELECT * FROM {$TBLPREFIX}factlookup WHERE startdate<=? AND enddate>=? AND gedcom_fact ".PGV_DB::$LIKE." ?";
			$vars=array($endDate, $startDate, "%{$factLookingFor}%");
		}

		if (!empty($place)) {
			$parts = explode(',', $place);
			for ($i=0; $i<count($parts); $i++) {
				$parts[$i]=trim($parts[$i]);
			}

			if (count($parts) > 0) {
				$numOfParts=count($parts) -1;
				for ($i=0; ($i<count($parts) && $i<5); $i++) {
					if (!empty($parts[$numOfParts])) {
						$sql.=" AND pl_lv".($i+1)." ".PGV_DB::$LIKE." ?";
						$vars[]='%'.$parts[$numOfParts].'%';
					}
					$numOfParts--;
				}

			}
		} else {
			$sql.=" AND PL_LV1 IS NULL";
		}
		return
			PGV_DB::prepare($sql)
			->execute($vars)
			->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * gets the details for a task from the database
	 * @param int taskid
	 * @return array
	 */
	function getTask($taskid) {
		global $TBLPREFIX;

		return
			PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_id=?")
			->execute(array($taskid))
			->fetchOneRow(PDO::FETCH_ASSOC);
	}

	/**
	 * Displays the menu for the research_assistand module
	 *
	 * This function will print the main menu for the research_assistant.
	 * It will also do checks to make sure they are in a folder and display the relevant
	 * menu assications to what the user is doing. That way you cant delete a folder if you aren't in one etc..
	 *
	 * @param string $folderid
	 * @access public
	 * @return mixed
	 */
	function print_menu($folderid = "", $taskid = "") {
		// Grab the global language array for internationalization
		global $pgv_lang, $TBLPREFIX;

		$width = 150;

		if (empty ($folderid) && !empty ($taskid)) {
			$folderid=
				PGV_DB::prepare("SELECT t_fr_id FROM {$TBLPREFIX}tasks WHERE t_id=?")
				->execute(array($taskid))
				->fetchOne();
		}

		// Restrict the column if we are not at the top of the module
		if ($folderid == "") {
			$percent = "";
		} else {
			$percent = " width=\"22%\" ";
		}

		// Display for the menu
		global $SHOW_MY_TASKS, $SHOW_ADD_TASK, $SHOW_AUTO_GEN_TASK, $SHOW_VIEW_FOLDERS, $SHOW_ADD_FOLDER, $SHOW_ADD_UNLINKED_SOURCE, $SHOW_VIEW_PROBABILITIES;//show
		$out = '<table class="list_table" width="100%" cellpadding="2">';
		$out .= '<tr>';
		$out .= '<td align="left"'.$percent.'class="optionbox wrap">'.ra_functions :: print_top_folder($folderid).'</td>';
		$out .= '<td align="center" class="optionbox" width="'.$width.'"><a href="module.php?mod=research_assistant"><img src="modules/research_assistant/images/folder_blue_icon.gif" alt="'.$pgv_lang["research_assistant"].'" border="0"></img><br />'.$pgv_lang["research_assistant"].'</a></td>';
		//button 'My Tasks'
		if (PGV_USER_ACCESS_LEVEL<=$SHOW_MY_TASKS)
			$out .= '<td align="center" class="optionbox" width="'.$width.'"><a href="module.php?mod=research_assistant&amp;action=mytasks"><img src="modules/research_assistant/images/folder_blue_icon.gif" alt="'.$pgv_lang["my_tasks"].'" border="0"></img><br />'.$pgv_lang["my_tasks"].'</a></td>';
		//button 'Add Task''
		if (PGV_USER_ACCESS_LEVEL<=$SHOW_ADD_TASK)
			$out .= '<td align="center" class="optionbox" width="'.$width.'"><a href="module.php?mod=research_assistant&amp;action=addtask&amp;folderid='.$folderid.'"><img src="modules/research_assistant/images/add_task.gif" alt="'.$pgv_lang["add_task"].'" border="0"></img><br />'.$pgv_lang["add_task"].'</a></td>';
		//button 'View Folders'
		if (PGV_USER_ACCESS_LEVEL<=$SHOW_VIEW_FOLDERS)
			$out .= '<td align="center" class="optionbox" width="'.$width.'"><a href="module.php?mod=research_assistant&amp;action=view_folders"><img src="modules/research_assistant/images/folder_blue_icon.gif" alt="'.$pgv_lang["view_folders"].'" border="0"></img><br />'.$pgv_lang["view_folders"].'</a></td>';
		//button 'Add Folder'
		if (PGV_USER_ACCESS_LEVEL<=$SHOW_ADD_FOLDER )
			$out .= '<td align="center" class="optionbox" width="'.$width.'"><a href="module.php?mod=research_assistant&amp;action=addfolder"><img src="modules/research_assistant/images/folder_blue_icon.gif" alt="'.$pgv_lang["add_folder"].'" border="0"></img><br />'.$pgv_lang["add_folder"].'</a></td>';
		// Below here is "in folder" relevant information. These are only shown when the user is inside a folder.
		if (!empty ($folderid)) {
			$folderparent=
				PGV_DB::prepare("SELECT fr_parentid FROM {$TBLPREFIX}folders WHERE fr_id=?")
				->execute(array($folderid))
				->fetchOne();

			// Print folder parent link
			if (!empty ($folderparent))
				$url = '<a href="module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid='.$folderparent.'">';
			else
				$url = '<a href="module.php?mod=research_assistant&amp;action=view_folders">';

			// Finish up the links
			$out .= '<td align="center" class="optionbox" width="'.$width.'">'.$url.'<img src="modules/research_assistant/images/folder_blue_icon.gif" alt="'.$pgv_lang["up_folder"].'" border="0"></img><br />'.$pgv_lang["up_folder"].'</a></td>';
			$out .= '<td align="center" class="optionbox" width="'.$width.'"><a href="module.php?mod=research_assistant&amp;action=editfolder&amp;folderid='.$folderid.'"><img src="modules/research_assistant/images/folder_blue_icon.gif" alt="'.$pgv_lang["edit_folder"].'" border="0" /><br />'.$pgv_lang["edit_folder"].'</a></td>';
		}

		// Close up
		$out .= '<td align="right" class="optionbox">  </td>';
		$out .= '</tr>';
		//$out .= '</table>';

		return $out;
	}

	/**
	 * Status message display
	 *
	 * This function prints a lovely formatted confirmation or error message depending on paramaters passed int
	 *
	 * @param mixed $message The message you want to display.
	 * @param bool $status true, false if the message is success or failure. (This controls the image shown either a check mark, or an X)
	 * @return mixed
	 */
	function printMessage($message, $status) {
		// Setup which kind of message it is
		if ($status) {
			$status = "Success!";
			$output="<br/>";

			//gets each person that was changed and shows their name with a link to their individual page
			if (isset($_REQUEST['personid'])) {
			$thePeopleList=explode(";",$_REQUEST['personid']);
				foreach($thePeopleList as $i=>$pid) {
					if(!empty($pid)) {
							$person=Person::getInstance($pid);
							$output.='<a href="'.$person->getLinkUrl().'">'.$person->getFullName().'</a><br/>';
					}
				}
			}

			$output.="<br/>";
			$div = "<span class=\"warning\">";
			$end = "</span>";
		} else {
			$status = "Error!";
			$image = "modules/research_assistant/images/xbutton.gif";
			$div = "<div class=\"error\">";
			$end = "</div>";
		}

		// The actual message layout
		$out = '<table align="center" width="50%" height="100" valign="center">';
		if (!empty($image)) $out .= '<tr><td class="optionbox" align="center" valign="center"><img src="'.$image.'" /></td></tr>';
		$out .= '<tr><td class="optionbox" valign="center" align="center"><h3>'.$div.''.$message.''.$end.'</h3></td></tr>';
		$out .= '</table>';

		return $out;
	}

	/**
	 * Prints the edit_Folder info to the user
	 *
	 * @param mixed $folder_id
	 * @return mixed
	 */
	function edit_Folder($folder_id) {
		// Get the information from the form and display it to the user
		$editfrm = $this->print_form('ra_EditFolder');

		return $editfrm->content($folder_id);
	}

	/**
	* This is the short Description for the Function
	*
	* @param string $name Name of the form to display
	* @return string HTML of the form
	*/
	function print_form($name = '') {
		$out = "";
		$ext = "";
		// Make sure we have something to display
		if (!empty ($name)) {

			// Add the php extension if it's not there
			if (strstr($name, ".php") === false)
				$ext = ".php";

			$path = BASEPATH."/forms/".$name.$ext;

			// Display or show an error
			if (file_exists($path)) {
				// Load the form.
				require_once $path;
				$form = new $name ();
				$out = $form->display_form();
				return $out;
			} else {
				return '<div class="error">ERROR: File '.BASEPATH.'forms/'.$name.'.php was not found.</div>';
			}
		}

		// Show error
		if (empty ($out))
			$out = '<div class="error">ERROR: There was a problem loading a form, or no form was specified.</div>';

		return $out;
	}

	/**
	 * Basic print_form function that uses the buffer approach
	 *
	 * @param mixed $name
	 * @return mixed
	 */
	function print_simple_form($name) {
		$path = BASEPATH."forms/".$name.".php";

		// Find and print the form otherwise display an error
		if (file_exists($path)) {
			// Load the form.
			return $this->get_include_contents($path);
		} else {
			return "<div class=\"error\">ERROR: File modules/research_assistant/forms/".$name.".php was not found.</div>";
		}
	}

	/**
	 * Gets the contents of a file to display
	 *
	 * Uses the buffer approach to parse a form and return that via a variable
	 * @param mixed $filename
	 * @return mixed
	 */
	function get_include_contents($filename) {
		// Print the form if it exists
		if (is_file($filename)) {
			ob_start();
			require $filename;
			$contents = ob_get_contents();
			ob_end_clean();

			return $contents;
		}
		return false;
	}

	/**
	 * Pulls all of the task data from the database
	 *
	 * @param mixed $folderId folderId to search for
	 * @param String $orderby If passed, querry the database to order by
	 * @return mixed Results from the database
	 */
	function get_folder_list($folderId, $orderby = "") {
		// Obtain the table prefix from the site
		global $TBLPREFIX;

		if (!empty ($orderby)) {
			// Switch order by
			$this->switch_order();

			$sql="SELECT * FROM {$TBLPREFIX}tasks WHERE t_fr_id=? ORDER BY ".$orderby." ".$_REQUEST["type"];
		} else {
			$sql="SELECT * FROM {$TBLPREFIX}tasks WHERE t_fr_id=?";
		}

		return
			PGV_DB::prepare($sql)
			->execute(array($folderId))
			->fetchAll();
	}


	/**
	 * Gets a list of assigned users tasks
	 *
	 *
	 */
	function get_user_tasks($userName) {
		global $TBLPREFIX;
		return
			PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_username=? AND t_enddate IS NULL")
			->execute(array($userName))
			->fetchAll();
	}

	/**
	 * Displays a list of folders and their tasks
	 *
	 * @param mixed $folderId FolderId in the Database
	 * @return string HTML code for the tasks
	 */
	function print_list($folderId, $orderId = "") {
			// Set a defualt order by
	if (!isset ($_REQUEST["type"])) {
			$_REQUEST["type"] = "asc";
		}

		$rows = $this->get_folder_list($folderId, $orderId);

		$out = $this->print_tasks($folderId, $rows);

		if (empty ($out)) {
			$out = "<div class=\"error\">ERROR: Nothing was found in your database.</div>";
		}

		return $out;
	}

	/*
	 * Dipsplay tasks that a user has assigned to them.
	 */
	function print_user_list($userName)
	{

		if(!empty($_REQUEST["Filter"]))
			$filter = $_REQUEST["Filter"];
		else $filter = "Incomplete";

		global $TBLPREFIX, $pgv_lang;
		switch ($filter) {
		case 'Completed':
			$statement=PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_username=? AND t_enddate IS NOT NULL");
			break;
		case 'Incomplete':
			$statement=PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_username=? AND t_enddate IS NULL");
			break;
		case 'All':
		default:
			$statement=PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_username=?");
			break;
		}
		$rows=$statement->execute(array($userName))->fetchAll();

		$out  = "<table id=\"Tasks\" class=\"list_table\" align=\"center\" width=\"700\" border=\"0\">";
		$out .= "<tr><th colspan=\"7\" class=\"topbottombar\"><h2>".$pgv_lang["Task_View"].print_help_link("ra_view_task_help", "qm", '', false, true)."</h2>";
		$out .= "<form name=\"mytasks\" method=\"GET\" action=\"module.php\">\n";
		$out .= "<input type=\"hidden\" name=\"mod\" value=\"research_assistant\" />\n";
		$out .= "<input type=\"hidden\" name=\"action\" value=\"mytasks\" />\n";
		$out .= "<p>".$pgv_lang["FilterBy"].": <select name=\"Filter\" onchange=\"document.mytasks.submit()\">";

		$out .= "<option ";
		if ($filter == "All") $out .= "selected=\"selected\" ";
		$out .= "value=\"All\">".$pgv_lang["all"]."</option>";

		$out .= "<option ";
		if ($filter == "Completed") $out .= "selected=\"selected\" ";
		$out .= "value=\"Completed\">".$pgv_lang["completed"]."</option>";

		$out .= "<option ";
		if ($filter == "Incomplete") $out .= "selected=\"selected\" ";
		$out .= "value=\"Incomplete\">".$pgv_lang["incomplete"]."</option>";

		$out .= "</select></form></th></tr>";
		$out .= "<tr><th class=\"descriptionbox\"><a href=\"module.php?mod=research_assistant&amp;action=mytasks&amp;Filter={$filter}&amp;folderid=&amp;orderby=t_title&amp;type=\">".$pgv_lang["Task_Name"]."</a></th><th class=\"descriptionbox\">
				<a href=\"module.php?mod=research_assistant&amp;action=mytasks&amp;Filter={$filter}&amp;folderid=&amp;orderby=t_description&amp;type=\">".$pgv_lang["description"]."</a></th>"."<th class=\"descriptionbox\">
				<a href=\"module.php?mod=research_assistant&amp;action=mytasks&amp;Filter={$filter}&amp;folderid=&amp;orderby=t_startdate&amp;type=\">".$pgv_lang["Start_Date"]."</a></th>"."<th class=\"descriptionbox\">
				<a href=\"module.php?mod=research_assistant&amp;action=mytasks&amp;Filter={$filter}&amp;folderid=&amp;orderby=t_enddate&amp;type=\">".$pgv_lang["completed"]."</a></th><th class=\"descriptionbox\">".$pgv_lang["edit"]."</th><th class=\"descriptionbox\">".$pgv_lang["delete"]."</th>\n
				<th class=\"descriptionbox\">".$pgv_lang["complete"]."</tr>";

		foreach ($rows as $row) {
			if (empty ($row->t_enddate)) {
				$completeLink = "<a href=\"module.php?mod=research_assistant&amp;action=completeTask&amp;taskid=".$row->t_id."\">".$pgv_lang["complete"]."</a>";
				$date=timestamp_to_gedcom_date($row->t_startdate);
				$out .= '<tr><td class="list_value"><a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$row->t_id.'" class="list_item name2">'.PrintReady($row->t_title).'</a></td>
						<td class="list_value_wrap">'.$row->t_description.'</td>
						<td class="list_value" align="center">'.$date->Display(false).'</td>
						<td class="list_value" align="center">'.$this->checkComplete($row).'</td>
						<td class="list_value" align="center"><a href="module.php?mod=research_assistant&amp;action=edittask&amp;taskid='.$row->t_id.'">'.$pgv_lang["edit"].'</a></td>
						<td class="list_value" align="center"><a href="module.php?mod=research_assistant&amp;action=deletetask&amp;taskid='.$row->t_id.'">'.$pgv_lang["delete"].'</a></td>
						<td class="list_value" align="center">'.$completeLink.'</td></tr>';
			}
			else
			{
				$completeLink = '<a href="module.php?mod=research_assistant&amp;action=completeTask&amp;taskid='.$row->t_id.'">'.$pgv_lang["editform"].'</a>';
				$date=timestamp_to_gedcom_date($row->t_startdate);
				$out .= '<tr><td class="list_value"><a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$row->t_id.'" class="list_item name2">'.PrintReady($row->t_title).'</a></td>
						<td class="list_value_wrap">'.$row->t_description.'</td>
						<td class="list_value" align="center">'.$date->Display(false).'</td>
						<td class="list_value" align="center">'.$this->checkComplete($row).'</td>
						<td class="list_value" align="center"><a href="module.php?mod=research_assistant&amp;action=edittask&amp;taskid='.$row->t_id.'">'.$pgv_lang["edit"].'</a></td>
						<td class="list_value" align="center"><a href="module.php?mod=research_assistant&amp;action=deletetask&amp;taskid='.$row->t_id.'">'.$pgv_lang["delete"].'</a></td>
						<td class="list_value" align="center">'.$completeLink.'</td></tr>';
			}
		}
		$out .= '</table>';
		return $out;
	}

	/**
	 * Return a folder from the database
	 *
	 * @param string $orderby If passed, query the database to order by
	 * @return mixed Results from the database
	 */
	function get_folder($orderby) {
		// Obtain the table prefix from the site
		global $TBLPREFIX;

		// Switch the orderby clause
		if (!empty ($orderby)) {
			$this->switch_order();

			$sql = "SELECT * FROM {$TBLPREFIX}folders WHERE fr_parentid IS NULL ORDER BY ".$orderby." ".$_REQUEST['type'];
		} else {
			$sql = "SELECT * FROM {$TBLPREFIX}folders WHERE fr_parentid IS NULL";
		}

		return
			PGV_DB::prepare($sql)
			->fetchAll();
	}

	/*
	 * Returns if a folder currently has tasks in it and dissallows users from deleting it
	 * @param takes in a given folder id
	 *
	 * @returns true or false
	 */
	function folder_hastasks($folderid){
		global $TBLPREFIX;

		return $folderid &&
			PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_fr_id=?")
			->execute(array($folderid))
			->fetchOne();
	}

	/*
	 * Returns if a folder currently has folders in it and dissallows users from deleting it
	 * @param takes in a given folder id
	 *
	 * @returns true or false
	 */
	function folder_hasfolders($folderid){
		global $TBLPREFIX;

		return $folderid &&
			PGV_DB::prepare("SELECT 1 FROM {$TBLPREFIX}folders WHERE fr_parentid=?")
			->execute(array($folderid))
			->fetchOne();
	}
	/**
	 * Switch the orderby clause
	 *
	 * @return void
	 */
	function switch_order() {
		if ($_REQUEST["type"] == "asc") {
			$_REQUEST["type"] = "desc";
		} else {
			$_REQUEST["type"] = "asc";
		}
	}

	/**
	 * Returns all of the subfolders of a folder from the database
	 *
	 * @param int $parentId The id of the folder to look inn
	 * @param string $orderby If passed, query  the database to order by
	 * @return mixed Results from the database
	 */
	function get_subfolders($parentId, $orderby = "") {
			// Obtain the table prefix from the site
		global $TBLPREFIX;

		if (!empty ($orderby)) {
			// Switch the orderby clause
			$this->switch_order();

			$sql = "SELECT * FROM {$TBLPREFIX}folders WHERE fr_parentid = ".(int) $parentId." ORDER BY ".$orderby." ".$_REQUEST['type'];
		} else {
			$sql = "SELECT * FROM {$TBLPREFIX}folders WHERE fr_parentid = '$parentId'";
		}

		return
			PGV_DB::prepare($sql)
			->execute(array($parentId))
			->fetchAll();
	}

	/**
	 * Returns the the top folder from the database
	 *
	 * @param Int $folderId The folder to look for
	 * @return mixed Results from the database
	 */
	function get_top_folder($folderId) {
		global $TBLPREFIX;

		return
			PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}folders WHERE fr_id=?")
			->execute(array($folderId))
			->fetchOneRow();
	}

	/**
	 * Display the top folder image and name
	 *
	 * @param Int $folderId The folder you would like to print at the top of the screenn
	 * @return mixed HTML to print the top folder
	 */
	function print_top_folder($folderId) {
		$out = "";

		if (!empty ($folderId)) {
			$row=$this->get_top_folder($folderId);

			$out = '<img src="modules/research_assistant/images/folder_blue_icon.gif" alt="Folder"></img>';
			$out .= "<strong> ".PrintReady($row->fr_name)."</strong>";
		}

		return $out;
	}

	/**
	 * print_folder_view
	 *
	 * @param int $folderId If passed, Gets the subfolders
	 * @param string $orderby If passed, Query the database with an order by clause
	 * @return string HTML to print out the folder view
	 */
	function print_folder_view($folderId = "", $orderby = "") {
		global $pgv_lang, $TBLPREFIX;
		$out = "";

		if (!isset ($_REQUEST["type"])) {
			$_REQUEST["type"] = "asc";
		}

		// Find the folder or sub folders
		if (empty ($folderId)) {
			$rows = $this->get_folder($orderby);
		} else {
			$rows = $this->get_subfolders($folderId, $orderby);
		}

		if ($rows) {
			$out .= '<table class="list_table" align="center" border="0" width="700">';
			$out .= '<tr><th colspan="3" class="topbottombar"><h2>'.$pgv_lang["Folder_View"].print_help_link("ra_fold_name_help", "qm", '', false, true).'</h2></th></tr>';
			$out .= '<tr><th class="descriptionbox"><a href="module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid='.$folderId.'&amp;orderbyfolder=fr_name&amp;type='.$_REQUEST["type"].'">'.$pgv_lang["Folder_Name"].'</a></th>';
			$out .= '<th class="descriptionbox"><a href="module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid='.$folderId.'&amp;orderbyfolder=fr_description&amp;type='.$_REQUEST["type"].'">'.$pgv_lang["description"].'</a></th>';
			$out .= '<th class="descriptionbox">'.$pgv_lang["edit"].'</th></tr>';
		}

		foreach ($rows as $row) {
			$out .= '<tr><td class="optionbox"><a href="module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid='.$row->fr_id.'"><img src="modules/research_assistant/images/folder_blue_icon.gif" border="0" alt="Folder" style="vertical-align: middle;"></img> '.PrintReady($row->fr_name).'</a></td>
					<td class="optionbox wrap"><br />'.nl2br(PrintReady($row->fr_description)).'</td>
					<td class="optionbox" align="center"><a href="module.php?mod=research_assistant&amp;action=editfolder&amp;folderid='.$row->fr_id.'">'.$pgv_lang["edit"].'</a></td></tr>';
		}
		$out .= '</table>';
		return $out;
	}
	/**
	 * Deletes a folder
	 */
	function deleteFolder($folderid) {
		global $TBLPREFIX;

		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}folders WHERE fr_id=?")
			->execute(array($folderid));
	}
	/**
	 * Display the tasks to the users
	 *
	 * @param int $folderId
	 * @param string $res Result from the database
	 * @return string HTML to print out the folder view
	 */
	function print_tasks($folderId, $rows) {
		global $pgv_lang;
		$out = "";

		// Display tasks if we're inside of a folder
		if (!empty ($folderId)) {
			$out .= "<table id=\"Tasks\" class=\"list_table\" align=\"center\" width=\"700\" border=\"0\">";
			$out .= "<tr><th colspan=\"7\" class=\"topbottombar\"><h2>".$pgv_lang["Task_View"].print_help_link("ra_view_task_help", "qm", '', false, true)."</h2></th></tr>";
			$out .= "<tr><th class=\"descriptionbox\"><a href=\"module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid=".$folderId."&amp;orderby=t_title&amp;type=".$_REQUEST["type"]."\">".$pgv_lang["Task_Name"]."</a></th>
					<th class=\"descriptionbox\"><a href=\"module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid=".$folderId."&amp;orderby=t_description&amp;type=".$_REQUEST["type"]."\">".$pgv_lang["description"]."</a></th>\n
					<th class=\"descriptionbox\"><a href=\"module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid=".$folderId."&amp;orderby=t_startdate&amp;type=".$_REQUEST["type"]."\">".$pgv_lang["Start_Date"]."</a></th>\n
					<th class=\"descriptionbox\"><a href=\"module.php?mod=research_assistant&amp;action=viewtasks&amp;folderid=".$folderId."&amp;orderby=t_enddate&amp;type=".$_REQUEST["type"]."\">".$pgv_lang["completed"]."</a></th>\n
					<th class=\"descriptionbox\">".$pgv_lang["edit"]."</th><th class=\"descriptionbox\">".$pgv_lang["delete"]."</th></tr>\n";

		}

		// Loop through the database results and print each task
		foreach ($rows as $row) {
			$out .= '<tr><td class="list_value"><a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$row->t_id.'"class="list_item name2">'.PrintReady($row->t_title).'</a></td>';
			$date=timestamp_to_gedcom_date($row->t_startdate);
			$out .= '<td class="list_value_wrap">'.PrintReady($row->t_description).'</td>';
			$out .= '<td class="list_value" align="center">'.$date->Display(false).'</td>';
			$out .= '<td class="list_value" align="center">'.$this->checkComplete($row).'</td>';
			$out .= '<td class="list_value" align="center"><a href="module.php?mod=research_assistant&amp;action=edittask&amp;taskid='.$row->t_id.'">'.$pgv_lang["edit"].'</a></td>';
			$out .= '<td class="list_value" align="center"><a href="module.php?mod=research_assistant&amp;action=deletetask&amp;taskid='.$row->t_id.'&amp;folder='.$folderId.'">'.$pgv_lang["delete"].'</a></td></tr>';
		}
		$out .= '</table>';

		return $out;
	}
	/*
	 * Deletes a task
	 */
	function deleteTask($taskid) {
		global $TBLPREFIX;

		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}tasks WHERE t_id=?")
			->execute(array($taskid));
		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}comments WHERE c_t_id=?")
			->execute(array($taskid));
		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}tasksource WHERE ts_t_id=?")
			->execute(array($taskid));
		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}taskfacts WHERE tf_t_id=?")
			->execute(array($taskid));
		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}individualtask WHERE it_t_id=?")
			->execute(array($taskid));
	}
	/**
	 * Scans the form dir and prints out all of the forms that we have to add information with
	 *
	 * @param int $pid The person id we need to be linking information to
	 * @param bool $links Tells the function to kick out links or just text
	 * @return mixed The list of links for the forms or false
	 */
	function print_form_list($links = false) {
		$out = '';

		// Display a list of forms for the user
		if ($handle = opendir(BASEPATH."/forms")) {
			while (($file = readdir($handle)) !== false) {
				if (strpos($file, ".")) {
					list ($file, $ext) = explode(".", $file);
					// Make sure we don't show the . and .. nor any forms
					// that start with ra_ as those are forms that we use internally
					if ($file != "." && $file != ".." && !is_dir($file) && (strstr($file, "ra_") === false)) {
						// Setup pretty print for the users
						$fileNoSpaces = preg_replace('/\s+/', '_', $file);
						$fileSpaces = str_replace('_', ' ', $file);

						// Print a link with all the information to connect a person and their data.
						if ($links)
							$out .= '<a href="module.php?mod=research_assistant&amp;action=printform&amp;formname='.$fileNoSpaces.'">'.$fileSpaces.'</a><br/>';
						else
							$out .= $fileSpaces."\n";
					}
				}
			}
			closedir($handle);
		}
		return $out;
	}

	/**
	 * Call any function inside of the form
	 *
	 * @param string $name Name of the class (Form) to create
	 * @param string $func Which function you want to call
	 * @param mixed $args Any arguments to the function
	 * @return mixed
	 */
	function form_function($name = '', $func = '', $args = null) {
		if (empty ($func) || empty ($name))
			return false;

		// Add the php extension if it's not there
		if (strstr($name, ".php") === false)
			$ext = ".php";

		$path = BASEPATH."/forms/".$name.$ext;
		$out = '';

		if (file_exists($path)) {
			// Perform the function
			require_once $path;
			$form = new $name ();
			$out = $form-> $func ($args);
		}

		return $out;
	}

	/**
	* Function that checks to see if a task is complete.
	*
	* @param task Supply this with a DB row of a task, it will auto check to see if it's completed.
	* @return mixed
	*/
	function checkComplete($task) {
		// Globals
		global $pgv_lang;
		// If there is no end date the task is not complete.
		if (empty ($task->t_enddate))
			return $pgv_lang['no'];
		// If there is an end date, it is complete.
		else
			return $pgv_lang['yes'];
	}

	/**
	* Function to complete a task
	*
	* @param taskid for the task to be completed
	*/
	function completeTask($taskid, $form='') {
		global $TBLPREFIX;

		PGV_DB::prepare("UPDATE {$TBLPREFIX}tasks SET t_enddate=?, t_form=? WHERE t_id=?")
			->execute(array(time(), $form, $taskid));
	}
	/**
	 * Function to find missing information
	 * @param Person $person
	 * @return mixed
	 */
	function getMissinginfo(& $person) {
		global $factarray, $templefacts, $nondatefacts, $nonplacfacts, $pgv_lang;

		$perId = $person->getXref();

		$MissingReturn = array (); //Local var for the return string
		if ($person->getSex() == "U") //check for missing sex info
		{
			$MissingReturn[] = array("SEX", $pgv_lang["All"]);
		}
		$birtdate=$person->getBirthDate();
		$birtplac=$person->getBirthPlace();
		if (!$birtplac || !$birtdate->isOK()) { //check for missing birth info
			$probFacts = singleInference($perId,"BIRT");
			$MissingReturn[] = array("BIRT", $pgv_lang["All"],$probFacts);

		}
		$deatdate=$person->getDeathDate();
		$deatplac=$person->getDeathPlace();
		if ((!$deatplac || !$deatdate->isOK()) && $person->isDead()) { //check for missing death info
			$probFacts = singleInference($perId,"DEAT");
			$MissingReturn[] = array("DEAT", $pgv_lang["All"], $probFacts);

		}
		list($lastname, $givennames)=explode(',', $person->getSortName());
		if (substr($givennames,0,1)=='@') {
			$probFacts = singleInference($perId,"GIVN");
			$MissingReturn[] = array("GIVN","",$probFacts);

		}
		if (substr($lastname,0,1)=='@') {
			$probFacts = singleInference($perId,"SURN");
			$MissingReturn[] = array("SURN","",$probFacts);

		}

		$indifacts = $person->getIndiFacts();

		/* @var $far Event */
		foreach ($indifacts as $key => $far) {
			$fact = $far->getTag();
			$event = $far->getDetail();
			if ($fact=="EVEN" || $fact=="FACT") {
				$fact = $far->getType();
			}
			$date = $far->getDate();
			if (empty ($date)) {
				if (!in_array($fact, $nondatefacts)) {
					$MissingReturn[] = array ($fact, "DATE");
				}
			}
			$source = get_gedcom_value("SOUR", 2, $far->getGedComRecord());
			if (empty ($source) && !in_array($fact, $nonplacfacts) && !in_array($fact, $nondatefacts))
				$MissingReturn[] = array ($fact, "SOUR");
			$plac = $far->getPlace();
			if (empty ($plac)) {
				if (in_array($fact, $templefacts)) {
					$plac = $far->getValue("TEMP");
					if (empty($plac)) {
						$MissingReturn[] = array ($fact, "TEMP");
					}
				}
				else {
					if (!in_array($fact, $nonplacfacts)) {
						$probFacts = singleInference($perId,"$fact:PLAC");
						$MissingReturn[] = array ($fact, "PLAC",$probFacts);
					}
				}
			}
		}

		return $MissingReturn; //return of missing info check results empty string if no missing info
	}
	//End of the missing info functions

	/**
	 * Function to print a small table of tasks related to a particular person.
	 *
	 * @param string Person ID that you want to pull out the tasks for
	 * @return mixed
	 */
	function addTaskPeople() {

	}

	/**
	 * Creates a new individual in the database
	 */
	function add_indi_task($tid, $itid, $ids) {
		global $TBLPREFIX;

		PGV_DB::prepare("INSERT INTO {$TBLPREFIX}individualtask (it_t_id, it_i_id, it_i_file) VALUES (?, ?, ?)")
			->execute(array($tid, $itid, $ids));
	}

	/**
	 * Adds a souce to an fact
	 */
	function add_sources($task_id, $sources = -1) {
		global $TBLPREFIX;

		if (!is_array($sources)) {
			$sources = explode(';', $sources);
		}

		foreach ($sources as $source_id) {
			if (!empty($source_id)) {
				PGV_DB::prepare("INSERT INTO {$TBLPREFIX}tasksource (ts_t_id, ts_s_id) VALUES (?, ?)")
					->execute(array($task_id, $source_id));
				//-- only allow one source
				break;
			}
		}
	}
	//Add a task into the database with all of the required information
	function add_task($taskid, $folder, $title, $description, $pid, $userName=null) {
		global $TBLPREFIX;

		$exists=
			PGV_DB::prepare("SELECT 1 FROM {$TBLPREFIX}tasks, {$TBLPREFIX}individualtask WHERE t_title=? AND it_t_id=t_id AND it_i_id=? AND it_i_file=?")
			->execute(array($title, $pid, PGV_GED_ID))
			->fetchOne();

		//make sure the same task does not exist already so we can add an individual task
		if (!$exists) {
			PGV_DB::prepare("INSERT INTO {$TBLPREFIX}tasks (t_id, t_fr_id, t_title, t_description, t_startdate, t_username) VALUES (?, ?, ?, ?, ?, ?)")
				->execute(array($taskid, $folder, $title, $description, time(), $userName));
			return true;
		} else {
			return false;
		}

	}
	//make sure that they are not trying to add no tasks, then loop through and all selected tasks and add them into the task
	// and individual task tables
	function auto_add_task(&$person,$folderID) {
		global $TBLPREFIX;
		if(!empty($_REQUEST['missingName'])){
			$missingName = $_REQUEST['missingName'];
			for($i=0; $i<count($missingName); $i++) {
				$nextTaskID =get_next_id("tasks","t_id");
				$nextItaskId=get_next_id("individualtask","it_t_id");
				$personName = $person->getFullName();
				if($this->add_task($nextTaskID,$folderID,$missingName[$i],$personName." (auto generated)",$person->getXref()))
				$this->add_indi_task($nextItaskId,$person->getXref(), PGV_GED_ID);
			}
		}
	}


	//the inferences function will look for correlations
	//and return an array with each probability
	//so, it will have a meaningful index system such as ['FATHER:BIRT:PLAC']
	//to return the probability that an individual will have the same
	//birth place as their father or ['BIRT:MARR:DEAT'] for the probability that
	//an individual will have the same birth, marriage and death place
	//at each index of the array will be a description as well as a percentage liklihood of the given correlation
	function inferences() {
		global $TBLPREFIX;

		require_once PGV_ROOT.'modules/research_assistant/ra_ViewInferencesArray.php';
		$indilist = get_indilist_indis();

		//various counts
		$total = count($indilist);
		$nnCount = 0;
		$tempCount = 0;
		$tempInd = 0;
		$malesCount = 0;
		$femalesCount = 0;

		foreach ($indilist as $indi) {
			//assign surname, gender, birthplace and occupation for the individual
			$gender = $indi->getSex();
			$locals = array();
			foreach($inferences as $pr_id=>$value) {
				//-- get the local value from the the individual record
				if (!isset($locals[$value['local']])) {
					switch ($value['local']) {
					case 'GIVN':
					case 'SURN':
						list($locals['SURN'], $locals['GIVN'])=explode(',', $indi->getSortName());
						break;
					default:
						$gedvalue = get_gedcom_value($value['local'], 1, $indi->getGedcomRecord(), '', false);
						if ($gedvalue && strpos($value['comp'],':PLAC') !== false) {
							// this is a PLAC string, trim it to a consistent number of levels
							$gedvalue = trimLocation($gedvalue);
						}
						$locals[$value['local']] = $gedvalue;
						break;
					}
				}

				//-- load up the gedcom record we want to compare the data from
				//-- record defaults to the indis record, after this section runs it will be
				//-- set to the record from the inferences table that we want to compare the value to
				$record = $indi;
				if ($record) {
					$rec_tags = explode(':', $value['record']);
					while ($record && $rec_tags) {
						$tag = array_shift($rec_tags);
						if (preg_match("/1 $tag @(.*)@/", $record->getGedcomRecord(), $match)) {
							if ($tag=='FAMS' && $rec_tags && $rec_tags[0]=='SPOUSE') {
								$record=$record->getCurrentSpouse();
								array_shift($rec_tags);
							} else {
								$record=GedcomRecord::getInstance($match[1]);
							}
						} else {
							$record=null;
						}
					}
				}

				if ($record) {
					switch ($value['comp']) {
					case 'SURN':
						list($surn)=explode(',', $record->getSortName());
						if ($surn==$locals['SURN'] && $surn!='@N.N.') {
							$inferences[$pr_id]['value']++;
						}
						break;
					case 'GIVN':
						list($dummy, $givn)=explode(',', $record->getSortName());
						$parts1 = preg_split("/\s+/", $givn);
						$parts2 = preg_split("/\s+/", $locals['GIVN']);
						foreach ($parts1 as $part1) {
							foreach ($parts2 as $part2) {
								if ($part1==$part2 && $part1!='@P.N.') {
									$inferences[$pr_id]['value']++;
									break 2;
								}
							}
						}
						break;
					default:
						$gedvalue = get_gedcom_value($value['local'], 1, $indi->getGedcomRecord(), '', false);
						if ($gedvalue && strpos($value['comp'],':PLAC') !== false) {
							// this is a PLAC string, trim it to a consistent number of levels
							$gedvalue = trimLocation($gedvalue);
						}
						if ($gedvalue && UTF8_strtolower($gedvalue)==UTF8_strtolower($locals[$value['local']])) {
							$inferences[$pr_id]['value']++;
						}
						break;
					}
					$inferences[$pr_id]['count']++;
				}
			}
		}
		/*
		 *The following section is used to store the calculated percentages in the database
		 */
		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}probabilities WHERE pr_file=?")
			->execute(array(PGV_GED_ID));

		/**
		 * pr_id int unsigned NOT NULL auto_increment,
		 * pr_f_lvl varchar(200) NOT NULL,
		 * pr_s_lvl varchar(200),
		 * pr_rel varchar(200) NOT NULL,
		 * pr_matches int
		 * pr_count int
		 * pr_file INT
		 */
		foreach ($inferences as $pr_id=>$value) {
			PGV_DB::prepare("INSERT INTO {$TBLPREFIX}probabilities (pr_id, pr_f_lvl, pr_s_lvl, pr_rel, pr_matches, pr_count, pr_file) VALUES (?, ?, ?, ?, ?, ?, ?)")
				->execute(array(get_next_id("probabilities", "pr_id"), $value['local'], $value['record'], $value['comp'], $value['value'], $value['count'], PGV_GED_ID));
		}
		return $inferences;
	}

	//check to see which of the suggested research tasks have already been added into the database
	function task_check($title, $pid) {
		global $TBLPREFIX;

		return
			PGV_DB::prepare("SELECT t_id FROM {$TBLPREFIX}tasks, {$TBLPREFIX}individualtask WHERE t_title=? AND it_t_id=t_id AND it_i_id=? AND it_i_file=?")
			->execute(array($title, $pid, PGV_GED_ID))
			->fetchOne();
	}

	// call the already created get_folder() function and for each one found create a new option tag to insert into the
	// select tag
	function folder_search() {
		global $TBLPREFIX, $pgv_lang;
		//TODO: Figure out how to display folder Heiarchies correctly
		$rows = $this->get_folder("");
		$out = "";
		foreach ($rows as $row) {
			$out .= "<option value=".$row->fr_id." selected=selected>".$row->fr_name."</option>";
		}
		return $out;
	}

	/**
	 * Get Tasks for Source
	 */
	function getSourceTasks($sId, $legend="") {
		global $pgv_lang, $TBLPREFIX, $TEXT_DIRECTION;

		$legend = "<img src=\"modules/research_assistant/images/view_inferences.gif\" alt=\"\" align=\"middle\" /> ".$pgv_lang["task_list"]." @ ".$legend;
		$out = '<fieldset><legend>'.$legend.'</legend>';
		$out .= '<div id=ra-table" class="'.$TEXT_DIRECTION.'">';
		$rows=
			PGV_DB::prepare("SELECT t_id, t_title, t_description, t_startdate, t_enddate FROM {$TBLPREFIX}tasks, {$TBLPREFIX}tasksource, {$TBLPREFIX}sources WHERE t_id=ts_t_id AND s_id=ts_s_id AND s_id=? AND s_file=?")
			->execute(array($sId, PGV_GED_ID))
			->fetchAll();

		if (!$rows) {
			$out .= "<table width=\"100%\"><tr>";
			$out .= "<thead><th class=\"topbottombar\">".print_help_link("task_list_text", "qm", '', false, true).$pgv_lang["task_list"]."</th></tr>\n";
			$out .= "<tr><td class=\"topbottombar\">".$pgv_lang["no_sour_tasks"]."</td></tr>\n";
		} else {
			$n = 0;
			$out .= "<table class=\"list_table\">";
			$out .= "<thead><tr><td></td><th class=\"topbottombar\" colspan=\"4\">".print_help_link("task_list_text", "qm", '', false, true).$pgv_lang["task_list"]."</th></tr>\n";
			$out .= '<tr><td></td><th class="list_label">'.$pgv_lang["Task_Name"].'</th>';
			$out .= '<th class="list_label">'.$pgv_lang["description"].'</th>';
			$out .= '<th class="list_label">'.$pgv_lang["completed"].'</th>';
			$out .= '<th class="list_label">'.$pgv_lang["created"]."</th></tr></thead>\n<tbody>";
			// Loop through all the task ID's and pull the info we need on them,
			// then format them nicely to show the user.
			foreach ($rows as $row) {
				$date=timestamp_to_gedcom_date($row->t_startdate);
				$out .= '<tr><td class="list_value_wrap rela list_item">'.++$n.'</td>';
				$out .= '<td class="list_value_wrap"><a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$row->t_id.'" class="list_item name2">'.PrintReady($row->t_title).'</a></td>';
				if (UTF8_strlen($row->t_description)<=40) {
					$out .= '<td class="list_value_wrap">'.PrintReady($row->t_description).'</td>';
				}
				else {
					$out .= '<td class="list_value_wrap">'.UTF8_substr(PrintReady($row->t_description), 0, 40).$pgv_lang["ellipsis"].'</td>';
				}
				$out .= '<td class="list_value_wrap center">'.$this->checkComplete($row).'</td>';
				$out .= '<td class="list_value_wrap center">'.$date->Display(false).'</td></tr>';
			}
		}
		$out .= '</tbody></table></div></fieldset>';
		return $out;

	}

	function autoSearchFormOptions() {
		//Load up off site search names here
		//Auto Search Plugin: To load up a new plugin follow the format for the two entries shown below
		// ex $sites["myplugin.php"] = "mywebsite.com";
		$this->sites = array();
		$this->sites["ancestry.php"] = "Ancestry.com";
		$this->sites["ancestrycouk.php"] = "Ancestry.co.uk";
		$this->sites["familysearch.php"] = "FamilySearch.org";
		$this->sites["genealogy.php"] = "Genealogy.com";
		$this->sites["ellisisland.php"] = "EllisIslandRecords.org";
		$this->sites["geneanet.php"] = "GeneaNet.org";
		$this->sites["werelate.php"] = "Werelate.org";
		$this->sites["gensearchhelp.php"] = "Genealogy-Search-Help.com";
		$opts = "";
		$optCount = 1;
		//load up the options into the html
		foreach($this->sites as $key=>$value) {
			$opts .= "<option value=\"".$key."\" class=\"".$optCount."\">".$value."</option>\n";
			$optCount+=1;
		}
		return $opts;
	}

	function determineClosest(&$currentDate, $dateToCompare, $dateCompareAgainst )
	{
		if($dateCompareAgainst > $dateToCompare)
		{
			$compareDiff = $dateCompareAgainst - $dateToCompare;
		}
		else
		{
			$compareDiff = $dateToCompare - $dateCompareAgainst;
		}
		if($dateCompareAgainst > $currentDate)
		{
			$currentDiff = $dateCompareAgainst - $currentDate;
		}
		else
		{
			$currentDiff = $currentDate - $dateCompareAgainst;
		}

		if($compareDiff < $currentDiff)
		{
			return $dateToCompare;
		}
		else
		{
			return $currentDate;
		}
		//var_dump($people);
		return $people;
	}

	/**
	 * tab is the function that builds the display for the different screens.
	 * These screens are identified by a tab
	 * @param Person $person
	 */
	function tab(&$person) {
		// Start our engines.
		global $pgv_lang, $TBLPREFIX;
		global $factarray;

		if (!is_object($person)) return "";
		$bdate = $person->getEstimatedBirthDate();
		$ddate = $person->getEstimatedDeathDate();
		$byear = $bdate->gregorianYear();
		$dyear = $ddate->gregorianYear();

		if (isset ($_REQUEST['action']) && $_REQUEST['action'] == 'ra_addtask')
			$this->auto_add_task($person, $_POST['folder']);

		// gets task id from the database
		try {
			$rows=
				PGV_DB::prepare("SELECT it_t_id FROM {$TBLPREFIX}individualtask WHERE it_i_id=? AND it_i_file=?")
				->execute(array($person->getXref(), PGV_GED_ID))
				->fetchAll();
		} catch (PDOException $ex) {
			return "<span class=\"error\">There was an error with the Research Assistant database.  Click on the <a href=\"module.php?mod=research_assistant\">Research Assistant</a> icon to create the database.<br />&nbsp;</span>";
		}
		// Start of HTML output
		$out = "\n\t<table class=\"list_table\">";
		$out .= "<tr><td class=\"topbottombar\" colspan=\"4\" align=\"center\">".print_help_link("task_list_text", "qm", '', false, true)."<b>".$pgv_lang['task_list']."</b></td></tr>";
		if (!$rows) {
			$out .= "<tr><td class=\"topbottombar\" colspan=\"4\" align=\"center\">".$pgv_lang['no_indi_tasks']."</td></tr>";
		} else {
			$out .= "\n\t\t<tr><td class=\"list_label\"><strong>".$pgv_lang["details"]."</strong></td><td class=\"list_label\"><strong>".$pgv_lang["title"]."</strong></td><td class=\"list_label\"><strong>".$pgv_lang["completed"]."</strong></td><td class=\"list_label\"><strong>".$pgv_lang["created"]."</strong></td></tr>";
			// Loop through all the task ID's and pull the info we need on them,
			// then format them nicely to show the user.
			foreach ($rows as $row) {
				$task=
					PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_id=?")
					->execute(array($row->it_t_id))
					->fetchOneRow();
				
				if ($task) {
					$date=timestamp_to_gedcom_date($task->t_startdate);
					$out .= '<tr><td class="list_label"><a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$task->t_id.'">'.$pgv_lang['details'].'</a></td><td class="list_label">'.PrintReady($task->t_title).'</td><td class="list_label">'.$this->checkComplete($row).'</td><td class="list_label">'.$date->Display(false).'</td></tr>';
				}
			}
		}

		//This is where the missing info check will happen
		$Missing = $this->getMissinginfo($person);
		$out .= "<tr><td class=\"topbottombar\" colspan=\"4\"><a href=\"module.php?mod=research_assistant&amp;action=addtask&amp;pid=".$person->getXref()."\">".$pgv_lang["task_entry"]."</a></td></tr></table>\n";
				//beginning of the missing information table, which gets populated with missing information for that individual and allows the user to "autoadd" tasks
				//a checkbox to view link conversion is included if a piece of missing information is already auto tasked
		$out .='<table align="center"><tr><td valign="top">
						<form name="autotask" action="individual.php?pid='.$person->getXref().'&amp;action=ra_addtask" method="post">
							<table border="0">
									<input type="hidden" name="pid" value="'.$person->getXref().'" />
									<input type="hidden" name="action" value="ra_addtask" />
									<tr>
										<td align="center" colspan="2" class="topbottombar">'.print_help_link("ra_missing_info_help", "qm", '', false, true).'<b>'.$pgv_lang['missing_info'].
										'</td>
									</tr>';
										$bdatea = $person->getEstimatedBirthDate();
										$bdatea = $bdatea->MinDate();
										$bdatea = $bdatea->convert_to_cal('gregorian');
										$bdate  = $bdatea->Format('Y');
										$bdate .= ($bdatea->m) ? $bdatea->Format('m') : '00';
										$bdate .= ($bdatea->d) ? $bdatea->Format('d') : '00';

										$ddatea = $person->getEstimatedDeathDate();
										$ddatea = $ddatea->MinDate();
										$ddatea = $ddatea->convert_to_cal('gregorian');
										$ddate  = $ddatea->Format('Y');
										$ddate .= ($ddatea->m) ? $ddatea->Format('m') : '00';
										$ddate .= ($ddatea->d) ? $ddatea->Format('d') : '00';

										$sourcesInferred = array();
										$sourcesPrinted = array();
										foreach ($Missing as $key => $val) //every missing item gets a checkbox , so you check check it and make a task out of it
										{
											$additionalInfer = array();
											$highest = 0;
											$factsExist = false;
											$compiled = "";
											$tasktitle = "";

											if (isset($factarray[$val[0]])) {
												$tasktitle .= $factarray[$val[0]]." ";
											} elseif (isset($pgv_lang[$val[0]])) {
												$tasktitle .= $pgv_lang[$val[0]]." ";
											} else {
												$tasktitle .= $val[0]." ";
											}
											//print_r($factarray);

											if (isset($factarray[$val[1]])) {
												$tasktitle .= $factarray[$val[1]];
											} elseif (isset($pgv_lang[$val[1]])) {
												$tasktitle .= $pgv_lang[$val[1]];
											} else {
												$tasktitle .= $val[1];
											}
											$taskid = $this->task_check($tasktitle, $person->getXref());
											if (!$taskid) // if the task_check passes, create a check box
												{
												$out .= "<tr><td width=\"20\" class=\"optionbox\"><input type=\"checkbox\" name=\"missingName[]\" value=\"".$tasktitle."\" /></td><td class=\"optionbox\">\n";
												$out .= "<span class=\"fact_label\">".$tasktitle."</span><br />";

												if(isset($val[2])){
													foreach($val[2] as $inferKey=>$inferenceObj)
													{

															if($val[1] === $pgv_lang['All'] || empty($val[1]) || $val[1] === "PLAC")
															{

																if(strstr($inferenceObj->getFactTag(),$val[0]) && $inferenceObj->getAverage() > 0)
																{
																	if($inferenceObj->getFactValue() != "")
																	{
																		$additionalInfer[] = $inferenceObj;
																	}

																	if($highest < $inferenceObj->getAverage() && $inferenceObj->getFactValue() != "")
																	{

																		$compiled = array();
																		$highest = $inferenceObj->getAverage();
																		//print($highest."<br/>");
																		$compiled[0] = $this->decideInferSentence($inferenceObj->getAverage(),$inferenceObj->getFactTag());
																		$compiled[0] .= " <i>".$inferenceObj->getFactValue()."</i>";
																		$compiled[0] .= "<br />";

																		if($inferenceObj->getFactTag() === "DEAT")
																		{
																			$posSources = $this->getEventsForDates($ddate - 5,$ddate+5,"",$inferenceObj->getFactValue());
																		}
																		else
																		{
																			if($inferenceObj->getFactTag() === "BIRT")
																			{
																				$posSources = $this->getEventsForDates($bdate-5,$bdate+5,"",$inferenceObj->getFactValue());
																			}
																			else
																			{
																				$posSources = $this->getEventsForDates($bdate,$ddate,"",$inferenceObj->getFactValue());
																			}
																		}

																		if(count($posSources) > 0)
																		{

																			$compiled[0] .= $pgv_lang["ThereIsChance"]." ";
																			foreach($posSources as $sKey=>$sVal)
																			{
																				if(!in_array($sVal["id"],$sourcesInferred))
																				{
																					$sourcesInferred[$sVal["id"]] = $sVal;
																				}


																				$compiled[0] .= $sVal["description"]."<br />";
																			}
																		}

																		$compiled[1] = $inferenceObj->getFactTag();
																		$compiled[2] = $inferenceObj->getAverage();
																		$compiled[3] = $inferenceObj->getFactValue();

																	}

																}
															}
													}
													if(isset($compiled[0]))
													{
													$out .= $compiled[0];
													}
													if(!empty($additionalInfer))
													{
														$additionalFacts = false;
														$tempAdditional = "";

														foreach($additionalInfer as $addKey=>$addVal)
														{

															if($addVal->getFactValue() !== $compiled[3])
															{

																		if($addVal->getFactTag() === "DEAT")
																		{
																			$posSources = $this->getEventsForDates($ddate - 5,$ddate+5,"",$addVal->getFactValue());
																		}
																		else
																		{
																			if($inferenceObj->getFactTag() === "BIRT")
																			{
																				$posSources = $this->getEventsForDates($bdate-5,$bdate+5,"",$addVal->getFactValue());
																			}
																			else
																			{
																				$posSources = $this->getEventsForDates($bdate,$ddate,"",$addVal->getFactValue());
																			}
																		}
																		if(count($posSources) > 0)
																		{

																			$compiledSources = "";
																			$compiledSources .= $pgv_lang["ThereIsChance"]." ";
																			foreach($posSources as $sKey=>$sVal)
																			{

																				if(!in_array($sVal["id"],$sourcesInferred))
																				{

																					$sourcesInferred[$sVal["id"]] = $sVal;
																				}
																				$compiledSources .= $sVal["description"]."<br />";
																			}
																		}
																$additionalFacts = true;
																$tempAdditional .= $this->decideInferSentence($addVal->getAverage(),$addVal->getFactTag());
																$tempAdditional .= ' <i>'.$addVal->getFactValue().'</i><br />';
																if(!empty($compiledSources)) $tempAdditional .= $compiledSources;
															}
														}
														if($additionalFacts)
														{
															$out .= '<br /><a href="" class="showit">'.$pgv_lang["More"].'<span>';
															$out .= $tempAdditional;
														}
													}

												}

												$out .= "</td></tr>";




											} else // if not allow user to view the already created task

												$out .= "<tr><td width=\"20\" class=\"optionbox\"><a href=\"module.php?mod=research_assistant&amp;action=viewtask&amp;taskid=$taskid\">View</a></td><td class=\"optionbox\">".$tasktitle."</td></tr>\n";
										}
										$factLookups = $this->getPlacesFromPerson($person);
										$person->add_family_facts(false);
										$tempDates = $person->getIndiFacts();

										foreach($sourcesInferred as $sKey=>$sVal)
										{
												$sourcesPrinted[$sVal["id"]] = $sVal;
												$out .= "<tr ><td width=\"20\" class=\"optionbox\">";
												$out .= "<input type=\"checkbox\" name=\"missingName[]\" value=\"".htmlentities($sVal["description"])."\" />";
												$out .= "<td class=\"optionbox\">".$sVal["description"];

												foreach($tempDates as $tKey=>$tVal)
												{

													if(empty($greatest))
													{

														$tempGreatest = get_gedcom_value("DATE",2,$tVal[1]);
														print($tempGreatest);
													}
												}

												$out .= "</td></tr>";
										}


										foreach($factLookups as $factLKey=>$factLValue)
										{
											$tempVal = trim($factLValue);
												//print($tempVal."||");
												$events = $this->getEventsForDates($bdate,$ddate,"",$tempVal);
											if(count($events) > 0)
											{
												foreach($events as $eventKey=>$eventVal)
												{
													if(!isset($sourcesInferred[$eventVal["id"]]))
													{
														$sourcesPrinted[$eventVal["id"]] = $eventVal;
														$out .= "<tr ><td width=\"20\" class=\"optionbox\">";
														$out .= "<input type=\"checkbox\" name=\"missingName[]\" value=\"".htmlentities($eventVal["description"])."\" />";
														$out .= "<td class=\"optionbox\">".$eventVal["description"];
													foreach($tempDates as $tKey=>$tVal)
													{

														if(empty($greatest))
														{
															$tempGreatest = get_gedcom_value("DATE",2,$tVal[1]);
															print($tempGreatest);
														}
													}
														$out .= "</td></tr>";
													}

												}

											}
										}

										$genericEvents = $this->getEventsForDates($bdate,$ddate);
										$lastPlace = null;
										foreach($genericEvents as $gKey=>$gVal)
										{
											if(!isset($sourcesPrinted[$gVal["id"]]))
											{
												$closest = null;
												$offset = null;
												$place = null;

												foreach($tempDates as $tKey=>$tVal)
												{
													$tempDate = $tVal->getDate();
													$tempPlace = $tVal->getPlace();

													$tempDate = $tempDate->date1;
													$sortdate = $tempDate->y;
													$sortdate.=($tempDate->m) ? $tempDate->Format('m') : '00';
													$sortdate.=($tempDate->d) ? $tempDate->Format('d') : '00';

													$place = trim($tempPlace);

													if(empty($closest))
													{
														$closest = $sortdate;
														$place = $tempPlace;
														$lastPlace = $place;
													}
													else
													{
														$temp = $closest;
														$closest = $this->determineClosest($closest,$sortdate,$gVal["startdate"]);

														if($closest != $temp && !empty($tempPlace))
														{
															$place = $tempPlace;
															$lastPlace = $place;
														}

													}
												}

												$out .= "<tr ><td width=\"20\" class=\"optionbox\">";
												$out .= "<input type=\"checkbox\" name=\"missingName[]\" value=\"".htmlentities($gVal["description"])." ".$place."\" />";
												$out .= "<td class=\"optionbox\">".$gVal["description"];
												if(empty($place))
												{
													if(!empty($lastPlace))
													{
														$out .= "<br/>".$pgv_lang["TheMostLikely"]." <i>".$lastPlace."</i>";
													}
												}
												else
												{
														$out .= "<br/>".$pgv_lang["TheMostLikely"]." <i>".$place."</i>";
												}
														$out .= "</td></tr>";
											}
										}


										// Create the selection box and add all the folder names and values
										$out .= "<tr><td class=\"optionbox\" colspan=\"2\" align=\"center\"><h5>".$pgv_lang['Folder']."&nbsp;&nbsp;</h><select name=\"folder\">";
										$out .= $this->folder_search();
										$out .= "</select></td></tr>";
										$out .= "<tr><td colspan=\"2\" class=\"topbottombar\"><input type=\"submit\" value=\"".$pgv_lang["AddTask"]."\" /></td></tr>
							</table>\n
						</form>\n
					</td>
					<td width=\"5%\"><br /></td>\n<td valign=\"top\">
						";
		//Beginning of the auto search feature which gets dynamically populated with an individuals information to be sent to ancestry or familySearch
		$out .= "\n<table border=\"0\">
								<tr>
									<td align=\"center\" class=\"topbottombar\" colspan=\"2\" height=\"50%\"><b>".print_help_link("auto_search", "qm", '', false, true)."<b>".$pgv_lang['auto_search_text']."</b>

									</td>
								</tr>
								<tr>
									<td class=\"topbottombar\">
										<form name=\"selector\" action=\"\" method=\"post\" onsubmit=\"return false;\">
										<select name=\"cbosite\" onchange=\"search_selector('".$person->getXref()."');\">
										" .$this->autoSearchFormOptions().
										"</select>
										</form>
									</td>
								</tr>
							<tr><td>\n

							<div id=\"searchdiv\">";
							foreach($this->sites as $file=>$value) break;
							require_once PGV_ROOT.'modules/research_assistant/search_plugin/'.$file;
							$autosearch=new AutoSearch();
							$out .=  $autosearch->options();
							$out .= "</div>
							</td></tr>\n
							</table>\n
					</td></tr></table>";

		//beginning of FamilySearch results functionality
		if (file_exists(PGV_ROOT.'modules/FamilySearch/RA_AutoMatch.php')) {
			require_once PGV_ROOT.'modules/FamilySearch/RA_AutoMatch.php';
			$matcher = new RA_AutoMatch();
			$out .= $matcher->generateResultsTable($person);
			unset($matcher);
		}

		//Beginning of the comments feature
		if (!empty($_REQUEST['action']) && $_REQUEST['action']=='delete_comment' && !empty($_REQUEST['uc_id'])) {
			PGV_DB::prepare("DELETE FROM {$TBLPREFIX}user_comments WHERE uc_id=?")
				->execute(array($_REQUEST['uc_id']));
		}
		$out .= '<br /><br />
		<table width="50%" align="center"><tr><td class="topbottombar">'.$pgv_lang['comments'].'</td></tr>';
		$out .= '<tr><td class="optionbox">';
		// Display comments
		$rows=
			PGV_DB::prepare("SELECT uc_id, uc_username, uc_datetime, uc_comment FROM {$TBLPREFIX}user_comments WHERE uc_f_id=? AND uc_p_id=? ORDER BY uc_datetime DESC")
			->execute(array(PGV_GED_ID, $person->getXref()))
			->fetchAll();

		foreach ($rows as $row) {
			$date=timestamp_to_gedcom_date($row->uc_datetime);
			$out .= '<div class="blockcontent"><div class="person_box" id="comment1"><span class="news_title">' .
					$row->uc_username.'' . // INSERT username
					'</span><br /><span class="news_date">' .
					$date->Display(false).' - '. date("g:i:s A",(int)$row->uc_datetime). // INSERT datetime
					'</span><br /><br />' .
					nl2br($row->uc_comment).
					'<hr size="1" />';

			if(PGV_USER_IS_ADMIN || PGV_USER_NAME==$row->uc_username){
				$out .= '<a href="javascript:;" onclick="editcomment('.
							$row->uc_id.', \''.$person->getXref().'\'' . // INSERT commentid
							')">'.$pgv_lang["edit"].'</a> | <a href="" onclick="confirm_prompt(\''.$pgv_lang["comment_delete_check"].'\', ' .
							$row->uc_id. // INSERT commentid
							', \''.$person->getXref().'\'); return false;">'.$pgv_lang["delete"].'</a>';
			}
			$out .= '<br /></div></div><br />';
		}
		$out .= '</td></tr><tr><td class="topbottombar">';
		$out .= '<form action="" onsubmit="return false;">
				<input type="button" value="'.$pgv_lang["add_new_comment"].'" onclick="window.open(\'module.php?mod=research_assistant&action=editcomment&pid='.$person->getXref().'\', \'\',\'top=50,left=50,width=600,height=400,resizable=1,scrollbars=1\');"></form>';
		$out .= '</td></tr></table>';
		$out .= "\n\t<br /><br />";
		// Return the goods.
		return $out;
	}

	function parseMonthsToInt($month)
	{
		switch($month){
			case "JAN": return 01;
			break;
			case "FEB": return 02;
			break;
			case "MAR": return 03;
			break;
			case "APR": return 04;
			break;
			case "MAY": return 05;
			break;
			case "JUN": return 06;
			break;
			case "JUL": return 07;
			break;
			case "AUG": return 08;
			break;
			case "SEP": return 09;
			break;
			case "OCT": return 10;
			break;
			case "NOV": return 11;
			break;
			case "DEC": return 12;
			break;
			default: return 00;
			break;

		}
	}

	/*
	 * This will return an array of comma delimited lists of all the PLAC facts for a person
	 *
	 * @person The object for the person you are looking for.
	 *
	 * @return An array containing comma delimited lists of all the PLAC facts found in the GEDCOM for this person.
	 */
	function getPlacesFromPerson($person){
		/*@var $person Person*/
		//Get the GEDCOM for the person
		$personGedcom = $person->getGedcomRecord();
		//Get all the Places for that person
		preg_match_all("/2 PLAC (.*)/",$personGedcom,$places,PREG_SET_ORDER);

		$returnPlaces = array();
		for($i = 0; $i < count($places);$i++)
		{
			if(!in_array($places[$i][1],$returnPlaces))
			{
				$returnPlaces[] = $places[$i][1];
			}
		}

		return $returnPlaces;
	}

	function decideInferSentence($percentage,$fact)
	{
		global $pgv_lang;
		if($fact == "BIRT:PLAC")
		{

			$percentage = sprintf("%.2f%%",$percentage * 100);

			$tempOut = $pgv_lang["InferIndvBirthPlac"];
			$tempOut = str_replace("%PERCENT%",$percentage,$tempOut);
			return $tempOut;
		}
		if($fact == "DEAT:PLAC")
		{

			$percentage = sprintf("%.2f%%",$percentage * 100);

			$tempOut = $pgv_lang["InferIndvDeathPlac"];
			$tempOut = str_replace("%PERCENT%",$percentage,$tempOut);
			return $tempOut;
		}
		if($fact == "SURN")
		{
			$percentage = sprintf("%.2f%%",$percentage * 100);

			$tempOut = $pgv_lang["InferIndvSurn"];
			$tempOut = str_replace("%PERCENT%",$percentage,$tempOut);
			return $tempOut;
		}
		if($fact == "MARR:PLAC")
		{

			$percentage = sprintf("%.2f%%",$percentage * 100);

			$tempOut = $pgv_lang["InferIndvMarriagePlace"];
			$tempOut = str_replace("%PERCENT%",$percentage,$tempOut);
			return $tempOut;
		}
		if($fact == "GIVN")
		{

			$percentage = sprintf("%.2f%%",$percentage * 100);

			$tempOut = $pgv_lang["InferIndvGivn"];
			$tempOut = str_replace("%PERCENT%",$percentage,$tempOut);
			return $tempOut;
		}
	}


	/**
	 * function to handle fact edits/updates for task completion forms
	 * this function is hooked in from the edit_interface.php file.
	 * It requires at least that a ctype variable be put on the request
	 */
	function edit_fact() {
		global $templefacts, $nondatefacts, $nonplacfacts;
		global $factarray, $pgv_lang, $tag, $MULTI_MEDIA;

		if ($_REQUEST['ctype']=='add' && !empty($_REQUEST['fact'])) {
			$fact = $_REQUEST['fact'];
			if (!empty($_REQUEST['type'])) $type = $_REQUEST['type'];
			else $type='indi';

			init_calendar_popup();
			print "<form method=\"post\" action=\"edit_interface.php\" enctype=\"multipart/form-data\">\n";
			print "<input type=\"hidden\" name=\"action\" value=\"mod_edit_fact\" />\n";
			print "<input type=\"hidden\" name=\"mod\" value=\"research_assistant\" />\n";
			print "<input type=\"hidden\" name=\"ctype\" value=\"update\" />\n";
			print "<input type=\"hidden\" name=\"type\" value=\"$type\" />\n";

			print "<br /><input type=\"submit\" value=\"".$pgv_lang["add"]."\" /><br />\n";

			print "<table class=\"facts_table\">";

			create_add_form($fact);

			print "</table>";

			if ($fact!="OBJE") {
				if ($fact!="NOTE") print_add_layer("NOTE");
				if ($fact!="REPO") print_add_layer("OBJE");
			}

			print "<br /><input type=\"submit\" value=\"".$pgv_lang["add"]."\" /><br />\n";
			print "</form>\n";
		}
		if ($_REQUEST['ctype']=='edit' && !empty($_REQUEST['factrec'])) {
			$gedrec = $_REQUEST['factrec'];
			init_calendar_popup();
			print "<form method=\"post\" action=\"edit_interface.php\" enctype=\"multipart/form-data\">\n";
			print "<input type=\"hidden\" name=\"action\" value=\"mod_edit_fact\" />\n";
			print "<input type=\"hidden\" name=\"ctype\" value=\"update\" />\n";
			print "<input type=\"hidden\" name=\"mod\" value=\"research_assistant\" />\n";
			print "<br /><input type=\"submit\" value=\"".$pgv_lang["save"]."\" /><br />\n";
			print "<table class=\"facts_table\">";
			$level0type = "INDI";
			create_edit_form($gedrec, 0, $level0type);
			print "</table>";
			print_add_layer("NOTE");
			print_add_layer("OBJE");

			print "<br /><input type=\"submit\" value=\"".$pgv_lang["save"]."\" /><br />\n";
			print "</form>\n";
		}
		else if ($_REQUEST['ctype']=="update") {
			$factrec = handle_updates('');
			if (!empty($_REQUEST['type'])) $type = $_REQUEST['type'];
			else $type='indi';
			//print "<pre>$factrec</pre>";
			print '<script type="text/javascript">window.opener.paste_edit_data(\''.preg_replace("/\r?\n/", "\\r\\n", $factrec).'\', \''.$factarray[$tag[0]].'\', \''.$type.'\'); window.close();</script>';
		}
	}

	/**
	 * delete all facts associated with the given task id
	 * @param string $taskid the taskid to delete facts for
	 * @param GedcomRecord $record the record to look in
	 * @return string  the updated record without the associated facts
	 */
	function deleteRAFacts($taskid, &$record) {
		$indirec = $record->getGedcomRecord();
		if (preg_match("/\d _RATID ".$taskid."/", $indirec)>0) {
			$lines = preg_split("/[\r\n]/", $indirec);
			$newrec = $lines[0]."\r\n";
			$subrecs = get_all_subrecords($indirec, '', false, false, false);
			foreach($subrecs as $i=>$factrec) {
				if (preg_match("/\d _RATID ".$taskid."/", $factrec)==0) {
					$newrec .= trim($factrec)."\r\n";
				}
			}
			$indirec = $newrec;
		}
		return $indirec;
	}
}
?>
