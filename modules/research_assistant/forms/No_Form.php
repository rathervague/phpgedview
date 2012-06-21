<?php
/**
 * phpGedView Research Assistant Tool - Generic_Form
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
 * @version $Id: No_Form.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Brandon Gagnon
 * @author Wade Lasson
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'includes/functions/functions_edit.php';


/**
 * Generic_Form
 *
 * @uses ra_form
 */
class No_Form extends ra_form {
    /**
	 * Contains all the information that we want to print out in the header.
     *
	 * How-To: This function is used to pint out specific things at the top of a custom input form. You
	 * must provide this or your form will not work. It must also contain a user specified action, alignment,
	 * and heading to appear properly. Anything inside the form must be assigned to the $out variable, and
     *
     * @param mixed $action The action you want the form to perform
     * @param string $tableAlign The alignment of the table, default is center
     * @param mixed $heading Heading at the top of the table
     * @return mixed
     */
    function header($action, $tableAlign = "center", $heading) {
        // Split action and use it for hidden inputs
        $action = parse_url($action);
        global $params;
        parse_str(html_entity_decode($action["query"]), $params);

        // Setup for our form to go through the module system
        $out =  '<form action="' . $action["path"] . '" method="post">';

        foreach ($params as $key => $value) {
            $out .= '<input type="hidden" name="' . $key . '" value="' . $value . '">';
        }

		$out .= '<table id="genericform" class="list_table" align="'.$tableAlign.'" border="0">';
		$out .= '<tr>';
		$out .= '<td colspan="4" class="topbottombar">'.$heading.'</td>';
		$out .= '</tr>';
		return $out;
	}

	/**
	 * Contains all the main content that were going to print out.
	 *
     * This function is usually what the user will fill full of
     * information before they submit the form.
     *
     * @return void
	 */
	function content() {

		return '<tr><td colspan="4" class="optionbox"><textarea name="results" rows="5" cols="55"></textarea></td>';
	}

	/**
	 * Contains all the information for the footer.
	 *
	 * Anything that you want to print out in the footer of your form.
     *
     * @return mixed
	 */
	function footer() {
		global $pgv_lang;
		$out = '<tr><td class="descriptionbox" align="center" colspan="2"><input type="submit" value='.$pgv_lang["ra_submit"].'></td></tr>';
		$out .= '</table></form>';
		return $out;
	}

	/**
	 * Function that actually controls the printing of yuor form, and sends it back to the output buffer to print properly.
	 *
	 * <p>This is probably the most important function that your form has to have. This will control what is printed out and where,
	 * you will also tell the header function what its method and action are here, as well as give your form a name. As you can see in this file
	 * we want it to post back to itself and call the save method, the table align is center, and the form title is "Generic Information".
	 * When we are done with this function, just like any else inside here we need to return the $out variable to make sure we have everything that we
     * neede to print in the right order.</p>
     *
     * return mixed
	 */
	function display_form() {
		global $pgv_lang;
		$out = $this->header("module.php?mod=research_assistant&form=No_Form&action=func&func=save&taskid=" . $_REQUEST['taskid'], "center", $pgv_lang['EnterResults']);
		$out .= $this->content();
		$out .= $this->footer();
		return $out;
	}

	/**
	 * The save function, this is where all the complicated stuff happens.
	 *
	 * <p>In here we put all the code we need to in order to save to the database or the gedcom file itself.
	 * This is probably the most complicated part of making a common research form. Advanced users will probably have
     * to complete this for you or you can use this part as a reference.</p>
     *
     * @return mixed
	 */
	function save() {
		// Specify the global var GEDCOM so we know what file were using.
		global $TBLPREFIX, $mod;

		// Set our output to nothing, this supresses a warning that we would otherwise get.
		$out = "";

		// Complete the Task.
		ra_functions::completeTask($_REQUEST['taskid'], $_REQUEST['results']);
		// Tell the user their form submitted successfully.
		$out .= $mod->print_menu("", $_REQUEST['taskid']);
		//$out .= ra_functions::printMessage("Success!",true);
		$folderid=
			PGV_DB::prepare("SELECT t_fr_id FROM {$TBLPREFIX}tasks WHERE t_id=?")
			->execute(array($_REQUEST['taskid']))
			->fetchOne();
		$out .= $mod->print_folder_view($folderid);
		$out .= $mod->print_list($folderid);

		// Return it to the buffer.
		return $out;
	}
}
?>
