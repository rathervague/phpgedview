<?php
/**
 * Research Assistant Guide
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
 * @version $Id: ra_guide.php 6481 2009-11-28 20:17:25Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';

/**
 * Edit Folder class for the editfolder form
 * 
 * @uses ra_form
 */
class ra_guide extends ra_form {
  
    /**
     * Show the form to the user
     * 
     * @return object
     */
	function display_form()
	{
		global $TEXT_DIRECTION, $PGV_IMAGE_DIR, $PGV_IMAGES;
		// Obtain the global vars needed
		global $pgv_lang, $factarray, $PGV_DXHTMLTAB_COLORS;
		$out = '';
		ob_start();
		require_once PGV_ROOT.'js/dhtmlXTabbar.js.htm';
		?>
		<script language="JavaScript" type="text/javascript">
		<!--
		var pastefield;
		function paste_id(value) {
			pastefield.value=value;
		}
		//-->
		</script>
		<div align="center">
		<h2><?php print $pgv_lang['research_assistant']; ?></h2>
		<div id="guide_tabbar" class="dhtmlxTabBar" <?php if($TEXT_DIRECTION=="rtl") echo ' align="right"'; else echo ' align="left"';?> skinColors="<?php print $PGV_DXHTMLTAB_COLORS; ?>" style="width: 65%; margin-left: 25px;">
			<div id="guide_analyze" name="<?php print $pgv_lang['analyze_data'];?>" class="indent" >
				<fieldset>
					<legend> <?php print $pgv_lang["analyze_people"]; ?></legend>
					<form method="get" action="individual.php">
					<br /><?php print $pgv_lang["pid_know_more"]; ?><br />
					<input type="hidden" name="tab" value="6" />
					<input type="text" id="pid" name="pid" size="5" /><?php print_findindi_link("pid", ""); ?>
					<input type="submit" value="<?php print $pgv_lang['view']; ?>" />
					</form>
				</fieldset>
				<fieldset>
					<legend> <?php print $pgv_lang["analyze_database"];?></legend>
						<a href="module.php?mod=research_assistant&amp;action=viewProbabilities">
						<img src="modules/research_assistant/images/view_inferences.gif" alt="<?php print $pgv_lang["view_probabilities"]; ?>" border="0"></img>
					<?php print $pgv_lang["view_probabilities"]; ?></a>
				</fieldset>
			</div>
			<div id="guide_sources" name="<?php print $pgv_lang["determine_sources"];?>" class="indent" >
				<fieldset>
					<legend> <?php print $pgv_lang["search_fhl"];?></legend>
					<form name="f1" target="_blank" action="http://www.familysearch.org/Eng/Library/fhlcatalog/supermainframeset.asp" method="get" accept-charset="utf-8">
						<input type="hidden" value="localityhitlist" name="display"/>
						<input type="hidden" value="*,0,0" name="columns"/>
						<input type="hidden" value="" name="PLACE"/>
						<input type="hidden" value="" name="PARTOF"/>
					
						<?php print $factarray['PLAC']; ?> <input type="text" value="" name="prePLACE" /><br />
						<?php print $pgv_lang["part_of"]; ?> <input type="text" value="" name="prePARTOF" /><br />
						<input type="submit" value="<?php print $pgv_lang['search']; ?>" />
					</form>
				</fieldset>
				<fieldset>
					<legend> <?php print $pgv_lang["manage_sources"]; ?></legend>
					<a href="sourcelist.php"><img src="<?php print $PGV_IMAGE_DIR."/".$PGV_IMAGES['source']['small']; ?>" border="0" alt="<?php print $pgv_lang['source_list']; ?>"/><?php print $pgv_lang['source_list']; ?></a><br />
					<a href="javascript: <?php print $pgv_lang["add_unlinked_source"];?>" onclick="addnewsource(''); return false;"><img src="<?php print $PGV_IMAGE_DIR."/".$PGV_IMAGES["addsource"]["button"];?>" alt="<?php print $pgv_lang["add_unlinked_source"];?>" border="0" width="25"></img><?php print $pgv_lang["add_unlinked_source"];?></a><br />
				</fieldset>
			</div>
			<div id="guide_research" name="<?php print $pgv_lang["manage_research"];?>" class="indent" >
				<fieldset>
					<legend> <?php print $pgv_lang["manage_research"]; ?></legend>
						<?php print $pgv_lang["manage_research_inst"];?><br />
						<table>
						<tr>
						<td>
						<a href="module.php?mod=research_assistant&amp;action=mytasks">
						<img src="modules/research_assistant/images/folder_blue_icon.gif" alt="<?php print $pgv_lang["my_tasks"]; ?>" border="0"></img>
						<?php print $pgv_lang["my_tasks"]; ?></a>
						</td>
						<td>
						<a href="module.php?mod=research_assistant&amp;action=view_folders">
						<img src="modules/research_assistant/images/folder_blue_icon.gif" alt="<?php print $pgv_lang["view_folders"]; ?>" border="0"></img>
						<?php print $pgv_lang["view_folders"]; ?></a>
						</td>
						<td>
						<a href="module.php?mod=research_assistant&amp;action=addfolder">
						<img src="modules/research_assistant/images/folder_blue_icon.gif" alt="<?php print $pgv_lang["add_folder"]; ?>" border="0"></img>
						<?php print $pgv_lang["add_folder"]; ?></a>
						</td>
						<td>
						<a href="module.php?mod=research_assistant&amp;action=addtask">
						<img src="modules/research_assistant/images/add_task.gif" alt="<?php print $pgv_lang["add_task"];?>" border="0"></img>
						<?php print $pgv_lang["add_task"];?></a>
						</td>
						</tr>
						</table>
				</fieldset>
				<fieldset>
					<legend> <?php print $pgv_lang["auto_search_text"]; ?></legend>
					<form name="selector" action="" method="post" onsubmit="return false;">
					<?php print $pgv_lang["pid_search_for"]; ?><br />
					<input type="text" name="aspid" id="aspid" size="5" onchange="search_selector(this.value);"/><?php print_findindi_link("aspid",""); ?>
					<select name="cbosite" onchange="search_selector(document.getElementById('aspid').value);">
					<option value=""><?php print $pgv_lang["choose_search_site"];?></option>
					<?php print ra_functions::autoSearchFormOptions(); ?>
					</select> 
					</form>
					<div id="searchdiv"></div>
				</fieldset>
				<fieldset>
					<legend> <?php print $pgv_lang["gen_tasks"]; ?></legend>
					<?php print $pgv_lang["auto_gen_inst"]; ?><br />
					<a href="module.php?mod=research_assistant&amp;action=genTasks">
					<img src="modules/research_assistant/images/add_task.gif" alt="<?php print $pgv_lang["gen_tasks"]; ?>" border="0"></img> 
					<?php print $pgv_lang["gen_tasks"]; ?></a><br />
				</fieldset>
			</div>
			<div id="guide_results" name="<?php print $pgv_lang["enter_results"]; ?>" class="indent" >
				<fieldset>
					<legend> <?php print $pgv_lang["complete_title"]; ?></legend>
					<?php print $pgv_lang["complete_task_inst"]; ?><br /><br />
					<?php $tasks=ra_functions::get_user_tasks(getUserName());
					foreach ($tasks as $task) {
						?>
						<a href="module.php?mod=research_assistant&amp;action=completeTask&amp;taskid=<?php print $task->t_id;?>"><?php print $task->t_title; ?></a><br />
					<?php }
					?>
				</fieldset>
				<fieldset>
					<legend> <?php print $pgv_lang["add_task"];?></legend>
					<?php print $pgv_lang["add_task_inst"]; ?>
					<br /><a href="module.php?mod=research_assistant&amp;action=addtask">
						<img src="modules/research_assistant/images/add_task.gif" alt="<?php print $pgv_lang["add_task"];?>" border="0"></img>
						<?php print $pgv_lang["add_task"];?></a><br />
				</fieldset>
			</div>
		</div>
		</div>
		<?php
		$out .= ob_get_contents();
		ob_end_clean();
		return $out;
	}
 }
?>
