<?php
/**
 * Parses gedcom file and displays a descendancy tree.
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
 * @subpackage Charts
 * @version $Id: descendancy.php 6982 2010-09-12 19:22:44Z okbigkid $
 */

define('PGV_SCRIPT_NAME', 'descendancy.php');
require './config.php';
require PGV_ROOT.'includes/controllers/descendancy_ctrl.php';
require PGV_ROOT.'includes/functions/functions_print_lists.php';

$controller=new DescendancyController();
$controller->init();

print_header($controller->name." ".$pgv_lang["descend_chart"]);

if ($ENABLE_AUTOCOMPLETE) require PGV_ROOT.'js/autocomplete.js.htm';

// LBox =====================================================================================
if (PGV_USE_LIGHTBOX) {
	require PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';
	require PGV_ROOT.'modules/lightbox/functions/lb_call_js.php';
}
// ==========================================================================================

echo '<table><tr><td valign="top"><h2>', $pgv_lang["descend_chart"], ':<br />', PrintReady($controller->name), '</h2>';
echo PGV_JS_START;
echo 'var pastefield; function paste_id(value) {pastefield.value=value;}';
echo PGV_JS_END;

$gencount=0;
if ($view!="preview") {
	$show_famlink = true;
	echo '</td><td width="50px">&nbsp;</td><td><form method="get" name="people" action="?">';
	echo '<input type="hidden" name="show_full" value="', $controller->show_full, '" />';
	echo '<table class="list_table ', $TEXT_DIRECTION, '">';
	echo '<tr><td class="descriptionbox">';
	print_help_link("desc_rootid_help", "qm", "root_person");
	echo $pgv_lang["root_person"], "&nbsp;</td>";
	echo '<td class="optionbox">';
	echo '<input class="pedigree_form" type="text" id="pid" name="pid" size="3" value="', $controller->pid, '" />';
	print_findindi_link("pid", "");
	echo '</td>';
	echo '<td class="descriptionbox">';
	print_help_link("box_width_help", "qm", "box_width");
	print $pgv_lang["box_width"] . "&nbsp;</td>";
	echo '<td class="optionbox"><input type="text" size="3" name="box_width" value="', $controller->box_width, '" />';
	echo '<b>%</b></td>';
	echo '<td rowspan="2" class="descriptionbox">';
	print_help_link("chart_style_help", "qm", "chart_style");
	echo $pgv_lang["displ_layout_conf"];
	echo '</td><td rowspan="2" class="optionbox">';
	echo '<input type="radio" name="chart_style" value="0"';
	if ($controller->chart_style==0) {
		echo ' checked="checked"';
	}
	echo '/>', $pgv_lang["chart_list"];
	echo '<br /><input type="radio" name="chart_style" value="1"';
	if ($controller->chart_style==1) {
		echo ' checked="checked"';
	}
	echo '/>', $pgv_lang["chart_booklet"];
	echo '<br /><input type="radio" name="chart_style" value="2"';
	if ($controller->chart_style==2) {
		echo ' checked="checked"';
	}
	echo ' />', $pgv_lang["individual_list"];
	echo '<br /><input type="radio" name="chart_style" value="3"';
	if ($controller->chart_style==3) {
		echo ' checked="checked"';
	}
	echo ' />', $pgv_lang["family_list"];
	echo '</td><td rowspan="2" class="topbottombar">';
	echo '<input type="submit" value="', $pgv_lang["view"], '" />';
	echo '</td></tr>';
	echo '<tr><td class="descriptionbox">';
	print_help_link("desc_generations_help", "qm", "generations");
	echo $pgv_lang["generations"], '&nbsp;</td>';
	echo '<td class="optionbox"><select name="generations">';
	for ($i=2; $i<=$MAX_DESCENDANCY_GENERATIONS; $i++) {
		echo '<option value="', $i, '"';
		if ($i==$controller->generations) {
			echo ' selected="selected"';
		}
		echo '>', $i, '</option>';
	}
	echo '</select></td><td class="descriptionbox">';
	print_help_link("show_full_help", "qm", "show_details");
	echo $pgv_lang["show_details"];
	echo '</td><td class="optionbox"><input type="checkbox" value="';
	if ($controller->show_full) {
		echo '1" checked="checked" onclick="document.people.show_full.value=\'0\';"';
	} else {
		echo '0" onclick="document.people.show_full.value=\'1\';"';
	}
	echo '/></td></tr></table></form>';
}
echo '</td></tr></table>';
if (is_null($controller->descPerson)) {
	echo '<span class="error">', $pgv_lang["record_not_found"], '</span>';
}

switch ($controller->chart_style) {
case 0: //-- list
	if ($show_full==0) {
		echo '<span class="details2">', $pgv_lang["charts_click_box"], '</span><br /><br />';
	}
	echo '<ul style="list-style: none; display: block;" id="descendancy_chart', $TEXT_DIRECTION=='rtl' ? '_rtl' : '', '">';
	$controller->print_child_descendancy($controller->descPerson, $controller->generations);
	echo '</ul>';
	break;
case 1: //-- booklet
	if ($show_full==0) {
		echo '<span class="details2">', $pgv_lang["charts_click_box"], '</span><br /><br />';
	}
	$show_cousins = true;
	$famids = find_sfamily_ids($controller->pid);
	if (count($famids)) {
		$controller->print_child_family($controller->descPerson, $controller->generations);
	}
	break;
case 2: //-- Individual list
	$descendants=indi_desc($controller->descPerson, $controller->generations, array());
	echo '<div class="center">';
	print_indi_table($descendants, $pgv_lang["descend_chart"].' : '.PrintReady($controller->name));
	echo '</div>';
	break;
case 3: //-- Family list
	$descendants=fam_desc($controller->descPerson, $controller->generations, array());
	echo '<div class="center">';
	print_fam_table($descendants, $pgv_lang["descend_chart"].' : '.PrintReady($controller->name));
	echo '</div>';
	break;
}
print_footer();

function indi_desc($person, $n, $array) {
	if ($n<1) {
		return $array;
	}
	$array[$person->getXref()]=$person;
	foreach ($person->getSpouseFamilies() as $family) {
		$spouse=$family->getSpouse($person);
		if (isset($spouse)) $array[$spouse->getXref()]=$spouse;
		foreach ($family->getChildren() as $child) {
			$array=indi_desc($child, $n-1, $array);
		}
	}
	return $array;
}

function fam_desc($person, $n, $array) {
	if ($n<1) {
		return $array;
	}
	foreach ($person->getSpouseFamilies() as $family) {
		$array[$family->getXref()]=$family;
		foreach ($family->getChildren() as $child) {
			$array=fam_desc($child, $n-1, $array);
		}
	}
	return $array;
}

?>
