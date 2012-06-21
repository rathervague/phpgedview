<?php
/**
 * phpGedView Research Assistant Tool - ra_GenerateTasks
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  John Finlay and Others
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
 * @version $Id: ra_EditGeneratedTask.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Kris Dymond
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'modules/research_assistant/forms/ra_GeneratedTask.php';

class ra_EditGeneratedTask extends ra_form 
{
	var $task;
    /**
     * content 
     * 
     * @param mixed $folder_id The id of the folder to edit
     * @return mixed
     */
	function content() 
	{
		$tasks = unserialize($_SESSION['genTasks']);
		
		foreach($tasks as $key => $value)
			if($value->getID() == $_REQUEST['genTaskId'])
			     $this->task = $value;
		
		return $this->print_javascipt() . $this->print_header() . $this->print_Content() . $this->print_footer();
	}
	
	function print_header()
	{
		global $pgv_lang;
		$out = '<form name="editGenTask" action="module.php" method="post">' .
		'<input type="hidden" name="mod" value="research_assistant" />' .
        '<input type="hidden" name="action" value="savegentask" />' .
        '<input type="hidden" name="genTaskId" value="' . $_REQUEST['genTaskId'] . '" />' .
				'<table class="list_table" align="center" border="0" width="40%">' .
				'<tr>' .
				'<th colspan="4" align="right" class="topbottombar">' .
					'<h2>'.$pgv_lang["Edit_Gen_Task"] .
					print_help_link("ra_EditGenerateTasks_help", "qm", '', false, true) .
					'</h2>' .
				'</th>' .
			'</tr>';
		return $out;
	}
	
	function print_javascipt()
	{
		global $pgv_lang;
		$out = '<script language="JavaScript" type="text/javascript">
				<!--
				var pastefield;
				var nameElement;
				function paste_id(value) {
				pastefield.value=value;
				}
				function pastename(name) {
				nameElement.innerHTML = \'<a href="source.php?sid=\'+pastefield.value+\'">\'+name+\'</a> <a href="#" onclick="clearname(\\\'\'+pastefield.id+\'\\\', \\\'\'+nameElement.id+\'\\\'); return false;" >' . $pgv_lang['remove'] . '</a><br />\';
				}
				function clearname(hiddenName, name) {
					pastefield = document.getElementById(hiddenName);
						if (pastefield) pastefield.value = \'\';
							nameElement = document.getElementById(name);
							if (nameElement) nameElement.innerHTML = \'\';
							}
				//-->
				</script>';
		return $out;
	}
	
	function print_Content()
	{
		global $pgv_lang;
		$out =
			'<tr>' .
			'<th class="descriptionbox">' .
			$pgv_lang["Task_Name"].':' .
			'</th>' .
			'<th class="optionbox" align="left">' .
			'<input type="text" name="title" value="' . $this->task->getName() . '"size="50"/>' .
			'</th>' .
			'<tr>' .
			'<th class="descriptionbox">' .
			$pgv_lang["TaskDescription"].':' .
			'</th>' .
			'<th class="optionbox" align="left">' .
			'<textarea name="description" cols=25 rows=5 wrap=soft>' . $this->task->getDescription() . '</textarea>' .
			'</th>' .
			'</tr>' .
			'<tr>' .
			'<th class="descriptionbox">' .
			$pgv_lang["people"].':' .
			'</th>' .
			'<th id="peoplecell" class="optionbox" align="left">' .
			'<input type="hidden" id="personid" name="personid" size="3" value="' . $this->task->getPersonId() . '" />' .
			'<div id="peoplelink">';
		$person=Person::getInstance($this->task->getPersonId());
		if ($person) {
			$out .= $person->getFullName();
		}
		$out .=
			'</div>' .
			print_findindi_link("personid", "peoplelink", true) .
			'</th>' .
			'</tr>' .
			'<tr>' .
			'<th class="descriptionbox">' .
			$pgv_lang["sources"].':' .
			'</th>' .
			'<th id="sourcecell" class="optionbox" align="left">' .
			'<input type="hidden" id="sourceid" name="sourceid" size="3" value="" />' .
			'<div id="sourcelink"></div>' .
			print_findsource_link("sourceid", "sourcelink", true) .
			'<br />' .
			'</th>' .
			'</tr>';
		return $out;
	}
	
	function print_footer() 
	{
		global $pgv_lang;
		$onclick = "window.location='module.php?mod=research_assistant&action=genTasks';";
		return '<th colspan=2 class="topbottombar">' .
			'<input type=submit value='.$pgv_lang["save"].'><input type=button value='.$pgv_lang["cancel"].' onclick="' . $onclick . '">' .
		        '</th></table></form>';
	}

    /**
     * Show the form to the user
     * 
     * @return object
     */
	function display_form()
	{
		return $this->content();
	}
 }
?>
