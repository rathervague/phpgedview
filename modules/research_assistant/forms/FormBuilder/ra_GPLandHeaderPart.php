<?php
/**
 * phpGedView Research Assistant Tool - %FORMNAME%
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
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'includes/functions/functions_edit.php';

class %FORMNAME% extends ra_form {

    function header($action, $tableAlign, $heading, $showchoose = false) {
    global $pgv_lang;
    $out = "";
    if ($showchoose) {
	    //Row Form
	    $out = '<form action="module.php" method="post">';
	    $out .= '<input type="hidden" name="mod" value="research_assistant" />' .
	    '<input type="hidden" name="action" value="printform" />' .
	    '<input type="hidden" name="formname" value="%FORMNAME%" />' .
	    '<input type="hidden" name="taskid" value="'.$_REQUEST['taskid'].'" />';

