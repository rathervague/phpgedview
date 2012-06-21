<?php
 /**
 * phpGedView Research Assistant Tool - ra_Configure
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
 * 
 * @author Hector Pena
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';

global $pgv_lang;
loadLangFile("pgv_confighelp");

/**
 * @uses ra_form
 */
 
global $SHOW_MY_TASKS, $SHOW_ADD_TASK, $SHOW_AUTO_GEN_TASK, $SHOW_VIEW_FOLDERS, $SHOW_ADD_FOLDER, $SHOW_ADD_UNLINKED_SOURCE, $SHOW_VIEW_PROBABILITIES;
global $INDEX_DIRECTORY, $GEDCOM, $person_privacy;
require_once PGV_ROOT.'modules/research_assistant/forms/ra_privacy.php';
if (file_exists($INDEX_DIRECTORY.$GEDCOM.'_ra_priv.php')) {
	require_once $INDEX_DIRECTORY.$GEDCOM.'_ra_priv.php';
}

if (isset($_REQUEST['subaction']) && $_REQUEST['subaction']=="submitconfig") {

	$fRAprivacy = "modules/research_assistant/forms/ra_privacy.php";
	
	$configtext = implode('', file($fRAprivacy));
	$configtext = preg_replace('/\$SHOW_MY_TASKS\s*=\s*.*;/',                       "\$SHOW_MY_TASKS = ".$_POST["v_SHOW_MY_TASKS"].";",            $configtext);
	$configtext = preg_replace('/\$SHOW_ADD_TASK\s*=\s*.*;/',                       "\$SHOW_ADD_TASK = ".$_POST["v_SHOW_ADD_TASK"].";",            $configtext);
	$configtext = preg_replace('/\$SHOW_AUTO_GEN_TASK\s*=\s*.*;/',             "\$SHOW_AUTO_GEN_TASK = ".$_POST["v_SHOW_AUTO_GEN_TASK"].";",       $configtext);
	$configtext = preg_replace('/\$SHOW_VIEW_FOLDERS\s*=\s*.*;/',               "\$SHOW_VIEW_FOLDERS = ".$_POST["v_SHOW_VIEW_FOLDERS"].";",        $configtext);
	$configtext = preg_replace('/\$SHOW_ADD_FOLDER\s*=\s*.*;/',                   "\$SHOW_ADD_FOLDER = ".$_POST["v_SHOW_ADD_FOLDER"].";",          $configtext);
	$configtext = preg_replace('/\$SHOW_ADD_UNLINKED_SOURCE\s*=\s*.*;/', "\$SHOW_ADD_UNLINKED_SOURCE = ".$_POST["v_SHOW_ADD_UNLINKED_SOURCE"].";", $configtext);
	$configtext = preg_replace('/\$SHOW_VIEW_PROBABILITIES\s*=\s*.*;/',   "\$SHOW_VIEW_PROBABILITIES = ".$_POST["v_SHOW_VIEW_PROBABILITIES"].";",  $configtext);
	
	$PRIVACY_MODULE = $INDEX_DIRECTORY.$GEDCOM."_ra_priv.php";
	$fp = fopen($PRIVACY_MODULE, "wb");
	if (!$fp) {
		print "<span class=\"error\">";
		print $pgv_lang["gedcom_config_write_error"];
		print "<br /></span>\n";
	}
	else {
		fwrite($fp, $configtext);
		fclose($fp);
	}
	
	require $INDEX_DIRECTORY.$GEDCOM.'_ra_priv.php';
	$logline = AddToLog("Privacy file $PRIVACY_MODULE updated");
	$gedcomprivname = $GEDCOM."_ra_priv.php";
	if (!empty($COMMIT_COMMAND)) check_in($logline, $gedcomprivname, $INDEX_DIRECTORY);

}
?>
    <!--JAVASCRIPT-->
<!--BEGIN CONFIGURE FORM-->
<form action="module.php" method="post">
    <input type="hidden" name="mod" value="research_assistant" />
    <input type="hidden" name="action" value="configurePrivacy" />
     <input type="hidden" name="subaction" value="submitconfig" />
     
     
	<table class="list_table" align="center">
        <tbody>
            <tr>
    <!--HEADING-->
                <td colspan="4" align="right" class="topbottombar"> 
                    <h2><?php print $pgv_lang["configure_privacy"]; print_help_link("ra_configure_privacy_help", "qm", '', false, false);?></h2>
                </td>
            </tr>
   <!--MY TASKS-->
		<tr>
                <td class="descriptionbox">
                    <?php print $pgv_lang["show_my_tasks"]; ?>
                </td>
                <td class="optionbox">
                    <select size="1" name="v_SHOW_MY_TASKS">
                        <?php write_access_option($SHOW_MY_TASKS); ?>
                      </select>   
                </td>
            </tr>       
            
    <!--ADD TASK-->
		<tr>
                <td class="descriptionbox">
                    <?php print $pgv_lang["show_add_task"]; ?>
                </td>
                <td class="optionbox">
                      <select size="1" name="v_SHOW_ADD_TASK">
											<?php write_access_option($SHOW_ADD_TASK); ?>
                      </select>
                </td>
            </tr>
            
    <!--AUTO GENERATE TASK-->
			<tr>
                <td class="descriptionbox">
                    <?php print $pgv_lang["show_auto_gen_task"]; ?>
                </td>
                <td class="optionbox">
                      <select size="1" name="v_SHOW_AUTO_GEN_TASK">
		<?php write_access_option($SHOW_AUTO_GEN_TASK); ?>
                      </select>
                </td>
            </tr>
            
    <!--VIEW FOLDERS-->
			<tr>
                <td class="descriptionbox">
                    <?php print $pgv_lang["show_view_folders"]; ?>
                </td>
                <td class="optionbox">
                 <select size="1" name="v_SHOW_VIEW_FOLDERS">
		<?php write_access_option($SHOW_VIEW_FOLDERS); ?>
                   </select>
                </td>
            </tr>
            
    <!--ADD FOLDER-->
			<tr>
                <td class="descriptionbox">
                    <?php print $pgv_lang["show_add_folder"]; ?>
                </td>
                <td class="optionbox">
                   <select size="1" name="v_SHOW_ADD_FOLDER">
                       <?php write_access_option($SHOW_ADD_FOLDER); ?>
                      </select> 
		</td>
            </tr>
            
   <!--ADD UNLINKED SOURCE-->
			<tr>
                <td class="descriptionbox">
                    <?php print $pgv_lang["show_add_unlinked_source"]; ?>
                </td>
                <td class="optionbox">
                    <select size="1" name="v_SHOW_ADD_UNLINKED_SOURCE">
                        <?php write_access_option($SHOW_ADD_UNLINKED_SOURCE); ?>
                      </select>  
                </td>
            </tr>
                            
   <!--VIEW PROBABILITIES-->
			<tr>
                <td class="descriptionbox">
                    <?php print $pgv_lang["show_view_probabilities"]; ?>
                </td>
                <td class="optionbox">
                    <select size="1" name="v_SHOW_VIEW_PROBABILITIES">
                        <?php write_access_option($SHOW_VIEW_PROBABILITIES); ?>
                      </select> 
                </td>
            </tr>
                   
    <!--SUBMIT BUTTON-->
				 <tr>
                <td colspan="4" align="right" class="topbottombar">
                    <input type="submit" value="<?php print $pgv_lang["submit"]; ?>" onclick="" />
                    <input type="reset" value="<?php print $pgv_lang["reset"]?>" /><br />
	            </td>
            </tr>
            
        </tbody>
	</table>
</form>
<!--END CONFIGURE -->
