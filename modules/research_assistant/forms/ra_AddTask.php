<?php
/**
 * phpGedView Research Assistant Tool - ra_AddTask
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
 * @version $Id: ra_AddTask.php 6481 2009-11-28 20:17:25Z fisharebest $:
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

require_once PGV_ROOT.'includes/functions/functions_db.php';

// Grab the global vars we need
global $pgv_lang, $TBLPREFIX, $SOURCE_ID_PREFIX;

	/**
	 * GETS all available FOLDERS and creates a combo box with the folders listed.
	 *
	 * @return all available folders
	 */

	function getFolders() {
		global $TBLPREFIX;

		$rows=
			PGV_DB::prepare("select fr_name, fr_id from {$TBLPREFIX}folders")
			->fetchAll();

		$out = "";
		foreach ($rows as $row) {
			$out .= '<option value="'.$row->fr_id.'"';
			if (!empty($_REQUEST['folderid']) && $_REQUEST['folderid']==$row->fr_id) {
				$out .= '" selected="selected"';
			}
			$out .= '>'.$row->fr_name.'</option>';
		}
		return $out;
	}

	function truncate($trunstring, $max = 30, $rep = '...')
	{
       if(strlen($trunstring) < 1)
       {
           $string = $rep;
       }
       else
       {
           $string = $trunstring;
       }
       $count = $max - strlen($rep);

       if(strlen($string) > $max)
       {
           return substr_replace($string, $rep, $count);
       }
       else
       {
           return $string;
       }

   }

?>

<!--JAVASCRIPT-->



<!--BEGIN ADD NEW TASK FORM-->

<form action="module.php" method="post" name="addtaskfrm">
    <input type="hidden" name="mod" value="research_assistant" />
    <input type="hidden" name="action" value="submittask" />
    <input type="hidden" name="complete" value="0" />
	<table class="list_table" align="center">
        <tbody>
            <tr>
    <!--HEADING-->
                <td colspan="4" align="right" class="topbottombar">
                    <h2><?php print $pgv_lang["add_new_task"]; print_help_link("ra_add_task_help", "qm", '', false, false); ?></h2>
                </td>
            </tr>
            <tr>
    <!--TITLE-->
                <td class="descriptionbox">
                    <?php print $pgv_lang["title"]; ?>
                </td>
                <td class="optionbox"><input type="text" name="title" value="" size="35"/></td>
    <!--FOLDER-->
                <td class="descriptionbox">
                    <?php print $pgv_lang["folder"]; ?>
                </td>
                <td class="optionbox">
                    <select name="folder">
                        <?php
                            // Gets a list of all available folders in the format { <option value="folderid">foldername }
                            print getFolders();
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
    <!-- ASSIGN TASK -->
		<tr>
			<td class="descriptionbox">
				<?php print $pgv_lang["assign_task"]; ?>
			</td>
			<td class="optionbox" colspan=3>
			<select name="Users"> <option value=""></option>
			<?php
				foreach(get_all_users() as $username) {
					print "<option value=\"$username\">".getUserFullName($username)."</option>";
				}
			?>
			</select>

			</td>
		<tr>
		</tr>
    <!--DESCRIPTION-->
                <td class="descriptionbox">
                    <?php print $pgv_lang["description"]; ?>
                </td>
                <td class="optionbox" colspan="3"><textarea name="desc" rows="3" cols="55"></textarea></td>
            </tr>
            <tr>

    <!--SOURCES-->
                <td class="descriptionbox" >
                    <?php  print $pgv_lang["source"]; ?>
                </td>
                <td class="optionbox" colspan="3">
                <script language="JavaScript" type="text/javascript">
	//<!--
	var pastefield;
	var nameElement;
	var lastId;
	function paste_id(value) {
		lastId = value;
		pastefield.value =  pastefield.value + ';' + value;
	}
	function pastename(name) {
		if (lastId.substring(0,1) == '<?php print $SOURCE_ID_PREFIX?>')
			nameElement.innerHTML = nameElement.innerHTML + '<a id="link_'+lastId+'" href="source.php?sid='+lastId+'">'+name+'</a> <a id="rem_'+lastId+'" href="#" onclick="clearname(\''+pastefield.value+'\', \'link_'+lastId+'\', \''+lastId+'\'); return false;" ><img src="images/remove.gif" border="0" alt="" /><br /></a>\n';
		else nameElement.innerHTML = nameElement.innerHTML + '<a id="link_'+lastId+'" href="individual.php?pid='+lastId+'">'+name+'</a> <a id="rem_'+lastId+'" href="#" onclick="clearname(\''+pastefield.value+'\', \'link_'+lastId+'\', \''+lastId+'\'); return false;" ><img src="images/remove.gif" border="0" alt="" /><br /></a>\n';
	}
	function clearname(hiddenName, name, id) {
		pastefield = document.getElementById(hiddenName);
		if (pastefield) {
			pos1 = pastefield.value.indexOf(";"+id);
			if (pos1>-1) {
				pos2 = pastefield.value.indexOf(";", pos1+1);
				if (pos2==-1) pos2 = pastefield.value.length;
				pastefield.value = pastefield.value.substring(0, pos1)+pastefield.value.substring(pos2);
			}
		}
		nameElement = document.getElementById(name);
		if (nameElement) {
			nameElement.innerHTML = '';
		}
		nameElement = document.getElementById('rem_'+id);
		if (nameElement) {
			nameElement.innerHTML = '';
		}
	}
	//-->
	</script>
                   <input type="hidden" id="sourceid" name="sourceid" size="3" value="" />
                   <div id="sourcelink"></div>
                     <?php print_findsource_link("sourceid", "sourcelink"); ?>
                    <br />
                </td>
            </tr>
            <tr>
    <!--PEOPLE-->
                <td class="descriptionbox">
										<?php
										echo $pgv_lang['people'];
										$person=Person::getInstance(safe_GET('pid'));
										$pid=$person ? $person->getXref() : ''
                    ?>
                </td>
                <td id="peoplecell" class="optionbox" colspan="3">
                   <input type="hidden" id="personid" name="personid" value="<?php echo $pid; ?>" />
                   <div id="peoplelink">
										<?php
										if ($person) {
											echo'<a id="link_', $pid, '" href="'.$person->getLinkUrl(), '">', $person->getFullName(), '</a> <a id="rem_', $pid, '" href="#" onclick="clearname(\'', $pid, '\', \'link_', $pid, '\', \'', $pid, '\'); return false;" ><img src="images/remove.gif" border="0" alt="" /><br /></a>';
										}
										?>
                   </div>
                     <?php print_findindi_link("personid", "peoplelink", false, true,'',''); ?>
                    <br />
                </td>
            </tr>
            <tr>
    <!--SUBMIT-->
                <th colspan="4" align="right" class="topbottombar">
                    <input type="submit" value="<?php print $pgv_lang["submit"]; ?>" />
                    <input type="submit" value="<?php print $pgv_lang["save_and_complete"]; ?>" onclick="document.addtaskfrm.complete.value='1';" />
                   <!--<input type="button" value="Complete" name="complete" onclick="window.location='module.php?mod=research_assistant&amp;action=completeTask&amp;taskid=<?php //print $_REQUEST['taskid'] ?>'" />
                -->
                </th>
            </tr>
        </tbody>
	</table>
</form>

<!--END ADD NEW TASK FORM-->
