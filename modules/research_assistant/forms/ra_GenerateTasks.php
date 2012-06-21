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
 * @version $Id: ra_GenerateTasks.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Kris Dymond
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'modules/research_assistant/forms/ra_GeneratedTask.php';

class ra_GenerateTasks extends ra_form 
{
	var $tasks = array();
	var $name = '';
	var $desc = '';
    /**
     * content 
     * 
     * @param mixed $folder_id The id of the folder to edit
     * @return mixed
     */
	function content() 
	{
	$out = $this->print_header();
	if(empty($_SESSION['genTasks']))
	{
		$out .= $this->getItems();
	}
	else if($_SESSION['genTasks'] != false)
		$out .= $this->getItemsAfterPostBack();
	$out .= $this->print_footer();
		return $out;
	}
	
	function getItemsAfterPostBack()
	{
		//return array();
		$tasks = unserialize($_SESSION['genTasks']);
		$retval = '';
		$checkedtasks = array();
		$keeptasks = array();
		$folder = '';
		$printed = 0;
		if(!empty($_REQUEST['folder']))
			$folder = $_REQUEST['folder'];
		if(!empty($_REQUEST['checkedtasks']))
			$checkedtasks = $_REQUEST['checkedtasks'];
			
		if(!empty($_REQUEST['orderby']))
	{
		if($_REQUEST['orderby'] == 'desc')
		{
			if($_SESSION['desc_asc'])
			{
				usort($tasks, array('GeneratedTask','orderby_' . $_REQUEST['orderby']));
				$_SESSION['desc_asc'] = false;
			}
			else
			{
				usort($tasks, array('GeneratedTask','orderby_' . $_REQUEST['orderby'] . '_descending'));
				$_SESSION['desc_asc'] = true;
			}
			$_SESSION['name_asc'] = true;
		}
		else if($_REQUEST['orderby'] == 'name')
		{
			if($_SESSION['name_asc'])
			{
				usort($tasks, array('GeneratedTask','orderby_' . $_REQUEST['orderby']));
				$_SESSION['name_asc'] = false;
			}
			else
			{
				usort($tasks, array('GeneratedTask','orderby_' . $_REQUEST['orderby'] . '_descending'));
				$_SESSION['name_asc'] = true;
			}
			$_SESSION['desc_asc'] = true;
		}
	}
	
		foreach($tasks as $key => $value)
		{
			$print = true;
			foreach($checkedtasks as $k => $val)
				if($val == $value->getId())
					$print = false;
			if($print)
			{
				$retval .= $this->print_item($value);
				$keeptasks[] = $value;
			}
			else
				$generateTasks[] = $value;
		}
		if(count($keeptasks) > 0)
			$_SESSION['genTasks'] = serialize($keeptasks);
		else
			$_SESSION['genTasks'] = false;
		return $retval;
	}
	
	function getItems()
	{
		$_SESSION['desc_asc'] = true;
		$_SESSION['name_asc'] = true;
		$tasks = $this->tasks;
	    $todoindis = search_indis(array('1 _TODO '), array(PGV_GED_ID), 'AND', false);
	$temp_id = 0;
	$retval = '';
	foreach($todoindis as $key => $value)
	{
		$todo = $this->get_Todo($todoindis[$key]['gedcom']);
		$lines = preg_split("/[\r\n]+/", $todo);
		$task = new GeneratedTask($lines[0], $todo, $temp_id, $key);
		$tasks[$task->getID()] = $task;
		$temp_id++;
	}
	
	if(!empty($_REQUEST['orderby']))
	{
		usort($tasks, array('GeneratedTask', 'orderby_' . $_REQUEST['orderby']));
	}
	
	foreach($tasks as $key => $value)
	{
		$retval .= $this->print_item($value);
	}
	$_SESSION['genTasks'] = serialize($tasks);
	return $retval;
	}
	
	function get_Todo($gedcom)
	{
		for($i = 0;$i < 10;$i++)
		{
			$todo = get_gedcom_value("_TODO", $i, $gedcom);
			if($todo != '')
				return $todo;
		}
		return $todo;
	}
	
	function print_header()
	{
		global $pgv_lang;
		$retval = '<form action="module.php?mod=research_assistant&action=genTasks" method="post">
			   <input type="hidden" name="mod" value="research_assistant" />
			   <input type="hidden" name="action" value="generatetask" />';
		$retval .= '<table class="list_table" align="center" border="0" width="40%">';
		$retval .= '<tr>';
		$retval .= '<th colspan="5" align="right" class="topbottombar">';
	$retval .= '<h2>';
	$retval .= $pgv_lang["ra_generate_tasks"] .   
			print_help_link("ra_GenerateTasks_help", "qm", '', false, true);
	$retval .= '</h2>';
	$retval .= '</th>';
	$retval .= '</tr>';
	$retval .= '<tr>';
	$retval .= '<th class="descriptionbox">';
	$retval .= $pgv_lang["ra_generate"];
	$retval .= '</th>';
	$retval .= '<th class="descriptionbox">';
	$retval .= '<a href="module.php?mod=research_assistant&amp;action=genTasks&amp;orderby=name">'.$pgv_lang["Task_Name"].'</a>';
	$retval .= '</th>';
	$retval .= '<th class="descriptionbox">';
	$retval .= '<a href="module.php?mod=research_assistant&amp;action=genTasks&amp;orderby=desc">'.$pgv_lang["TaskDescription"].'</a>';
	$retval .= '</th>';
	$retval .= '<th class="descriptionbox">';
	$retval .= $pgv_lang["edit_task"];
	$retval .= '</th>';
	
	return $retval;
	}
	
	function print_footer()
	{
		global $pgv_lang;
		$onclick = "window.location='module.php?mod=research_assistant';";
		return  '<tr>'  .
				'<td align=right class="descriptionbox" colspan="4">&nbsp;&nbsp;' .
				$pgv_lang["SelectFolder"].'&nbsp;&nbsp;<select name=folder>' .
				$this->getFolders() .
				'</select>' .
				'</td></tr>' .
				'<tr>' .
				'<td class="topbottombar" colspan="4">' .
				'&nbsp;&nbsp;<input type=submit value='.$pgv_lang["ra_generate"].'>' .
				'&nbsp;&nbsp;<input type=button value='.$pgv_lang["ra_done"].' onclick="' . $onclick . '">' .
				'</td></tr></table></form>';
	}
	
	function print_item($task)
	{
		global $pgv_lang;
		$retval = '<tr><TD class="optionbox" align="left">';
		$retval .= '<input type="checkbox" id="' . $task->getID() . '" name="checkedtasks[]" value=' . $task->getID();
		$retval .= '</td>';
		$retval .= '<TD class="optionbox">';
		$retval .= $task->getName();
		$retval .= '</td>';
		$retval .= '<TD class="optionbox">';
		$retval .= $task->getDescriptionForHTML();
		$retval .= '</td>';
		$retval .= '<TD align="right" class="optionbox">';
		$retval .= '<a name="edit" href="module.php?mod=research_assistant&amp;action=editgenTasks&amp;genTaskId=' . $task->getID() . '">'.$pgv_lang["edit"].'</a>';
		$retval .= '</td></tr>';
		
		return $retval;
	}
	
	/**
	 * GETS all available FOLDERS and creates a combo box with the folders listed.
	 * 
	 * @return all available folders
	 */
	function getFolders() {
		global $TBLPREFIX;

		$rows=
			PGV_DB::prepare("SELECT fr_name, fr_id FROM {$TBLPREFIX}folders")
			->fetchAll();

		$out = "";
		foreach ($rows as $row) {
			$out .= '<option value="'.$row->fr_id.'"';
			if(!empty($_REQUEST['folder'])) {
				if ($_REQUEST['folder']==$row->fr_id) {
					$out .= '" selected="selected"';
				}
			}
			$out .= '>';
			if(strlen($row->fr_name) < 30) {
				$out .= PrintReady($row->fr_name);
			} else {
				$out .= PrintReady($this->truncate($row->fr_name));
			}
			$out .= '</option>';
		}

		return $out;
	}
	
	function truncate($trunstring, $max = 30, $rep = '...') 
	{
       if(strlen($trunstring) < 1)
           $string = $rep;
       else
           $string = $trunstring;
       $count = $max - strlen($rep);
      
       if(strlen($string) > $max)
           return substr_replace($string, $rep, $count);
       else
           return $string;
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
