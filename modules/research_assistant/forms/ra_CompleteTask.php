<?php
/**
 * phpGedView Research Assistant Tool - ra_CompleteTask
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
 * @version $Id: ra_CompleteTask.php 6481 2009-11-28 20:17:25Z fisharebest $
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

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';

 /**
  * Complete a Task Form
  * 
  * @uses ra_form
  */
 class ra_CompleteTask extends ra_form
 {
    /**
     * Form contents
     * 
     * @return mixed
     */
		function contents()
    {
			global $pgv_lang;
		
        $temp = ra_functions::print_form_list();
        $filenames = explode("\n",$temp);
        $out = '<form name="frmSelect" method="post"><input type="hidden" name="mod" value="research_assistant" />'
            . '<input type="hidden" name="action" value="completeTask" />'
            . '<input type="hidden" name="taskid" value="' . $_REQUEST['taskid'] . '" />'
            . '<table align="center">'
            . '<tr><th class="descriptionbox" colspan="2"><h2>'.$pgv_lang['complete_title'].'</h2></th></tr>'
            . '<tr><td class="optionbox">'.$pgv_lang['choose_form_label'].'</td><td>';
        
        $out .= '<select name="commonFrm" onchange="document.forms[\'frmSelect\'].submit();">';

        // Show all of the form options
        $out .= "<option>".$pgv_lang['select_form']."</option>";
        for($i=0; $i<count($filenames); $i++)
        {
            if (!empty($filenames[$i])  )
            {
                $optVal=$filenames[$i];
                if(!empty($_POST['commonFrm']) && $filenames[$i]==str_replace('_', ' ', $_POST['commonFrm']))
                {
                $out .= '<option value="'. preg_replace('/\s+/', '_',$optVal).'" selected="selected">'.$filenames[$i].'</option>';
                }
            else
            {
                $out .= '<option value="'. preg_replace('/\s+/', '_', $optVal).'">'.$filenames[$i].'</option>';
            }
            }
        }

        $out .= '</select></table></form>';

        if(!empty($_POST['commonFrm']) && $_POST['commonFrm']!=$pgv_lang['select_form'])
            $out .= ra_functions::print_form($_POST['commonFrm']);

        return $out;
		}

    /**
     * display_form 
     * 
     * @access public
     * @return void
     */
		function display_form()
		{
			return $this->contents();
		}
 }
?>
