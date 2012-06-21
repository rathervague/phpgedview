<?php
/**
* My Tasks Block
*
* This block will print a users tasks
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
* @version $Id: mytasks_block.php 6481 2009-11-28 20:17:25Z fisharebest $
* @package PhpGedView
* @subpackage Blocks
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Activate this block only if the Research Assistant is visible to this user
if ($SHOW_RESEARCH_ASSISTANT>=PGV_USER_ACCESS_LEVEL) {
	loadLangFile("research_assistant:lang");

	if (file_exists(PGV_ROOT.'modules/research_assistant/research_assistant.php')) require_once PGV_ROOT.'modules/research_assistant/research_assistant.php';

	$PGV_BLOCKS["print_mytasks"]["name"] = $pgv_lang["mytasks_block"];
	$PGV_BLOCKS["print_mytasks"]["descr"] = "mytasks_block_descr";
	$PGV_BLOCKS["print_mytasks"]["canconfig"] = true;
	$PGV_BLOCKS["print_mytasks"]['config'] = array(
		"cache"=>0,
		"unassigned"=>"no",
		"completed" => "no"
		);

	//-- print user messages
	function print_mytasks($block=true, $config="", $side, $index) {
		global $pgv_lang, $PGV_IMAGE_DIR, $TEXT_DIRECTION, $TIME_FORMAT, $PGV_STORE_MESSAGES, $PGV_IMAGES;
		global $TBLPREFIX, $PGV_BLOCKS, $ctype, $GEDCOM;

		if (empty($config)) $config = $PGV_BLOCKS["print_mytasks"]["config"];
		if (isset($config["unassigned"])) $unassigned = $config["unassigned"];  // "yes" or "no"
		else $filter = "no";
		if (isset($config["completed"])) $completed = $config["completed"];  // "yes" or "no"
		else $completed = "no";

		$mod = new ra_functions();
		$mod->init();

		$out = "<table class='list_table center'><tr><th></th><th class='descriptionbox'>".$pgv_lang["Task_Name"]."</th><th class='descriptionbox'>".$pgv_lang["Start_Date"]."</th><th class='descriptionbox'>".$pgv_lang["edit"]."</th></tr>";
		//USERS CURRENT TASKS
		$rows=
			PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_username=? AND t_enddate IS NULL")
			->execute(array(PGV_USER_NAME))
			->fetchAll();
		
		$i = 1;
		foreach ($rows as $row) {
			$tasktitle = '<a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$row->t_id.'">'.$row->t_title.'</a>';
			$date=timestamp_to_gedcom_date($row->t_startdate);
			$out .= '<tr><td class="list_value_wrap rela list_item">'.$i.'</td>';
			$out .= '<td class="optionbox '.$TEXT_DIRECTION.'">'.PrintReady($tasktitle).'</td><td class="optionbox">'.$date->Display(false);
			$out .= '</td><td class="optionbox"><a href="module.php?mod=research_assistant&amp;action=edittask&amp;taskid='.$row->t_id.'">'.$pgv_lang["edit"].'</a>';
			$out .= '</td></tr>';
			$i++;
		}
		$out .= '</table>';

		//USERS COMPLETED TASKS
		if($completed =="yes"){
			$rows=
				PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_username=? AND t_enddate IS NOT NULL")
				->execute(array(PGV_USER_NAME))
				->fetchAll();
			
			if (count($rows)>0) {
				$i = 1;
				$out .= "<b><p style='text-align: center;'>".$pgv_lang["completed"]."</p></b><br/><table class='list_table center'><tr><th></th><th class='descriptionbox'>".$pgv_lang["Task_Name"]."</th><th class='descriptionbox'>".$pgv_lang["Start_Date"]."</th><th class='descriptionbox'>".$pgv_lang["edit"]."</th></tr>";
				foreach ($rows as $row) {
					$tasktitle = '<a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$row->t_id.'">'.$row->t_title.'</a>';
					$date=timestamp_to_gedcom_date($row->t_startdate);
					$out .= '<tr><td class="list_value_wrap rela list_item">'.$i.'</td>';
					$out .= '<td class="optionbox '.$TEXT_DIRECTION.'">'.PrintReady($tasktitle).'</td><td class="optionbox">'.$date->Display(false);
					$out .= '</td><td class="optionbox"><a href="module.php?mod=research_assistant&amp;action=edittask&amp;taskid='.$row->t_id.'">'.$pgv_lang["edit"].'</a>';
					$out .= '</td></tr>';
					$i++;
				}
				$out .= '</table>';
			}
		}

		//UNASSIGNED TASKS
		if($unassigned =="yes") {
			$rows=
				PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}tasks WHERE t_username=''")
				->fetchAll();

			if (count($rows)>0) {
				$i = 1;
				$out .= "<b><p style='text-align: center;'>".$pgv_lang["mytasks_unassigned"]."</p></b><br/><table class='list_table center'><tr><th></th><th class='descriptionbox'>".$pgv_lang["Task_Name"]."</th><th class='descriptionbox'>".$pgv_lang["Start_Date"]."</th><th class='descriptionbox'>".$pgv_lang["mytasks_edit"]."</th><th class='descriptionbox'>".$pgv_lang["mytasks_takeOn"]."</th></tr>";
				foreach ($rows as $row) {
					$tasktitle = '<a href="module.php?mod=research_assistant&amp;action=viewtask&amp;taskid='.$row->t_id.'">'.$row->t_title.'</a>';
					$date=timestamp_to_gedcom_date($row->t_startdate);
					$out .= '<tr><td class="list_value_wrap rela list_item">'.$i.'</td>';
					$out .= '<td class="optionbox '.$TEXT_DIRECTION.'">'.PrintReady($tasktitle).'</td><td class="optionbox">'.$date->Display(false);
					$out .= '</td><td class="optionbox"><a href="module.php?mod=research_assistant&amp;action=edittask&amp;taskid='.$row->t_id.'">'.$pgv_lang["edit"].'</a>';
					$out .= '</td></tr>';
					$i++;
				}
				$out .= '</table>';
			}
		}

		// Print heading
		if (getUserName()) {
			print "<div id=\"mytasks_block\" class=\"block\">\n";
			print "<table class=\"blockheader\" cellspacing=\"0\" cellpadding=\"0\" style=\"direction:ltr;\"><tr>";
			print "<td class=\"blockh1\" >&nbsp;</td>";
			print "<td class=\"blockh2\" ><div class=\"blockhc\">";
			print_help_link("mytasks_help", "qm", "my_tasks");

			if ($PGV_BLOCKS["print_mytasks"]["canconfig"]) {
				if ($ctype=="gedcom" && PGV_USER_GEDCOM_ADMIN || $ctype=="user" && PGV_USER_ID) {
					if ($ctype=="gedcom") {
						$name = preg_replace("/'/", "\'", $GEDCOM);
					} else {
						$name = PGV_USER_NAME;
					}
					print "<a href=\"javascript: configure block\" onclick=\"window.open('index_edit.php?name=$name&amp;ctype=$ctype&amp;action=configure&amp;side=$side&amp;index=$index', '_blank', 'top=50,left=50,width=600,height=350,scrollbars=1,resizable=1'); return false;\">";
					print "<img class=\"adminicon\" src=\"$PGV_IMAGE_DIR/".$PGV_IMAGES["admin"]["small"]."\" width=\"15\" height=\"15\" border=\"0\" alt=\"".$pgv_lang["config_block"]."\" /></a>\n";
				}
			}

			print "<b>".$pgv_lang["my_tasks"]."&nbsp;&nbsp;</b>";
			if ($TEXT_DIRECTION=="rtl") print getRLM();
			//Print Tasks
			print "<td class=\"blockh3\"></td></tr></table>\n";

			print "<div class=\"blockcontent\">";
			print $out;
			print "</div></div>";

		}
	}

	function print_mytasks_config($config) {
		global $pgv_lang, $PGV_BLOCKS, $TEXT_DIRECTION;
		if (empty($config)) $config = $PGV_BLOCKS["print_mytasks"]["config"];
		if (!isset($config["unassigned"])) $config["unassigned"] = "no";
		if (!isset($config["completed"])) $config["completed"] = "no";

		print "<tr><td class=\"descriptionbox wrap width33\">".$pgv_lang["mytask_show_tasks"]."</td>";?>
		<td class="optionbox">
	    <select name="unassigned">
	     <option value="no"<?php if ($config["unassigned"]=="no") print " selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
	     <option value="yes"<?php if ($config["unassigned"]=="yes") print " selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
	   </select>
	   </td></tr>

	   <?php
	   print "<tr><td class=\"descriptionbox wrap width33\">".$pgv_lang["mytask_show_completed"]."</td>";?>
	   <td class="optionbox">
	   <select name="completed">
	     <option value="no"<?php if ($config["completed"]=="no") print " selected=\"selected\"";?>><?php print $pgv_lang["no"]; ?></option>
	     <option value="yes"<?php if ($config["completed"]=="yes") print " selected=\"selected\"";?>><?php print $pgv_lang["yes"]; ?></option>
	   </select>
	   </td></tr>
	  <?php
		// Cache file life is not configurable by user:  we'll use "no cache" until we figure out what's right
		print "<input type=\"hidden\" name=\"cache\" value=\"0\" />";
	}
}

?>
