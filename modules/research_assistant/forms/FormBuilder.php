<?php
/**
 * phpGedView Research Assistant Tool - United States Census 1880 File
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
 * @subpackage FormBuilder
 * @version $Id: FormBuilder.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Christopher Stolworthy
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'includes/functions/functions_edit.php';

class FormBuilder extends ra_form {

	function header($action, $tableAlign, $heading, $showchoose = false) {
		global $pgv_lang;
		$out = "";
		if ($showchoose) {
			//Row Form
			$out = '<form action="module.php" method="post">';
			$out .= '<input type="hidden" name="mod" value="research_assistant" />' .
	    '<input type="hidden" name="action" value="printform" />' .
	    '<input type="hidden" name="formname" value="FormBuilder" />';
	    if (!isset($_REQUEST['numOfRows'])) $_REQUEST['numOfRows'] = 1;
	    if ($_REQUEST['numOfRows']<1) $_REQUEST['numOfRows']=1;
	    $out .= '<table align="center"><tr><td class="descriptionbox">'.$pgv_lang["Fields"].'</td><td class="optionbox"><select name="numOfRows">';
	    for($i = 1; $i <= 20; $i++){
	    $out .= '<option value="'.$i.'"';
	    if ($_REQUEST['numOfRows']==$i) $out .= " selected=\"selected\"";
	    $out .= '>'.$i;
	    }
	    $out .= '</select></td></tr><tr><td colspan="2" class="topbottombar"><input type="submit" value="'.$pgv_lang["okay"].'"/></td></tr></table>';
	    $out .= '</form>';
		}

		// Split action and use it for hidden inputs
		$action = parse_url($action);
		$params = array();
		parse_str(html_entity_decode($action["query"]), $params);

		// Setup for our form to go through the module system
		$out .=  '<form action="' . $action["path"] . '" method="post">';
		$out .= '<input type="hidden" name="numOfRows" value="'.$_REQUEST['numOfRows'].'" />';
		foreach ($params as $key => $value) {
			$out .= '<input type="hidden" name="' . $key . '" value="' . $value . '">';
		}
		$out .= '<table id="FormBuilder" class="list_table" align="' . $tableAlign . '">';
		$out .= '<tr>';
		$out .= '<th colspan="6" align="right"class="topbottombar"><h2>' . $heading . '</h2></th>';
		$out .= '</tr>';

		return $out;
	}

	function completeheader($action, $tableAlign, $heading, $showchoose = false) {
		global $pgv_lang;
		$out = "";
		if ($showchoose) {
			//Row Form
			$out = '<form action="module.php" method="post">';
			$out .= '<input type="hidden" name="mod" value="research_assistant" />' .
	    '<input type="hidden" name="action" value="printform" />' .
	    '<input type="hidden" name="formname" value="FormBuilder" />';
	    if (!isset($_REQUEST['numOfRows'])) $_REQUEST['numOfRows'] = 1;
	    if ($_REQUEST['numOfRows']<1) $_REQUEST['numOfRows']=1;
	    $out .= '</form>';
		}

		// Split action and use it for hidden inputs
		$action = parse_url($action);
		$params = array();
		parse_str(html_entity_decode($action["query"]), $params);

		// Setup for our form to go through the module system
		$out .=  '<form action="' . $action["path"] . '" method="post">';
		$out .= '<input type="hidden" name="numOfRows" value="'.$_REQUEST['numOfRows'].'" />';
		foreach ($params as $key => $value) {
			$out .= '<input type="hidden" name="' . $key . '" value="' . $value . '">';
		}
		$out .= '<table id="FormBuilder" class="list_table" align="' . $tableAlign . '">';
		$out .= '<tr>';
		$out .= '<th colspan="6" align="right"class="topbottombar"><h2>' . $heading . '</h2></th>';
		$out .= '</tr>';

		return $out;
	}

	function getFieldValue($j, $lines) {
		$value = "";
		if (empty($lines[$j])) return $value;
		$line = $lines[$j];
		$ct = preg_match("/: (.*)/", $line, $match);
		if ($ct>0) $value = trim($match[1]);
		return $value;
	}

	function getSelectBox($i) {
		global $pgv_lang;

		$out = '<select name="inputType'.$i.'" id="'.$i.'" onchange="checkShowField(this)">';
		$out .= '<option value="Text">'.$pgv_lang["txt"].'</option>';
		$out .= '<option value="ChkBox">'.$pgv_lang["checkbox"].'</option>';
		$out .= '<option value="RdoButton">'.$pgv_lang["radiobutton"].'</option>';
		$out .= '</select>';

		return $out;
	}

	/**
	 * override method from ra_form.php
	 */
	function simpleCitationForm() {
		global $pgv_lang;

		//        Next Table
		$out = '<tr>';
		if(isset($_POST["errorMsg"])) $out .='<td><h3>'.$_POST["errorMsg"].'</h3></td>';
		$out .= '<td colspan="6">';

        $out .= '<table align="left" dir="ltr">';
		$out .= '<tr><td class="optionbox">'.$pgv_lang["FormName"].'</td><td class="optionbox"><input type="text" name="formName"/></td></tr>';
		$out .= '<tr><td class="optionbox">'.$pgv_lang["MultiplePeople"].'</td>';
		$out .= '<td class="optionbox">'.$pgv_lang["yes"].'<input type="radio" value="Y" name="MultiPeople" checked="checked" />';
		$out .= $pgv_lang["no"].'<input type="radio" value="N" name="MultiPeople" /></td></tr>';
		$out .= '<tr><td class="optionbox">'.$pgv_lang['EnterGEDCOMExtension'].'</td><td class="optionbox"><input type="text" name="factType" /></td>';
		$out .= '<tr><td class="optionbox">'.$pgv_lang['FormDesciption'].'</td><td class="optionbox"><input type="text" name="formDescription"/></tr>';
		$out .= '<tr><td class="descriptionbox">'.$pgv_lang["FieldName"].'</td>';
		$out .= '<td class="descriptionbox">'.$pgv_lang["InputType"].'</td>';
		$out .= '<td class="descriptionbox">'.$pgv_lang["CustomField"].'</td>';
		$out .= '</tr>';
		$out .= '<script language="Javascript" type="text/javascript">';
		$out .= "<!--\n";
		$out .= 'function checkShowField(input){';
		$out .= 'var div;';
		$out .= 'if(input.selectedIndex == 1 || input.selectedIndex == 2 )';
		$out .= '{ div = document.getElementById("div"+input.id);';
		$out .= 'div.style.display = "block"; }';
		$out .= 'else{';
		$out .= 'div = document.getElementById("div"+input.id);';
		$out .= 'div.style.display = "none"; } }';
		$out .= 'function showOption(input){';
		$out .= 'var div = document.getElementById("customName"+input.id);';
		$out .= 'if(input.checked){';
		$out .= 'div.style.display = "block";';
		$out .= '}else{';
		$out .= 'div.style.display = "none";';
		$out .= '}';
		$out .= '}';
		$out .= "\n//-->\n</script>";

		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$out .= '<tr>';
			$out .= '<td class="optionbox">';
			$out .= '<input type="text" size="22" name="FieldName'.$i.'"/>';
			$out .= '</td>';
			$out .= '<td class="optionbox">';
			$out .= $this->getSelectBox($i);
			$out .= '<div style="display:none" id="div'.$i.'"><input type="text" size="22" name = "SelectOptions'.$i.'"/></div>';
			$out .= '</td>';
			$out .= '<td class="optionbox">';
			$out .= '<input type="checkbox" id="'.$i.'" name="cbxCustomName'.$i.'" onClick="showOption(this)"/><div style="display:none" id="customName'.$i.'"><input type="text" size="22" name="customFieldName'.$i.'"</div>';
		}
		$out .='</tr>';

		$out .='</tr></table>';
		$out .= '</td></tr>';
		$out .= '<tr><td class="optionbox"><input type="submit" value="'.$pgv_lang["complete"].'"/></td></tr>';

		return $out;
	}

	function footer() {
		return '</table></form>';
	}

	function WriteFile($fileContents,$fileName)
	{
		$filePointer = fopen($fileName,"wb");
		fwrite($filePointer,$fileContents);
		fclose($filePointer);
	}

	function display_form() {
		global $pgv_lang;
		$out = $this->header("module.php?mod=research_assistant&form=FormBuilder&action=func&func=step2", "center", $pgv_lang["FormBuilder"], true);
		$out .= $this->simpleCitationForm();
		$out .= $this->footer();
		return $out;
	}

	function generate_form()
	{
		//Get our form name
		$formName = $_REQUEST["formName"];
		$multiplePeople = $_REQUEST["MultiPeople"];

		//Grab the file contents for the GPL and part of the header
		$temp = file_get_contents("modules/research_assistant/forms/FormBuilder/ra_GPLandHeaderPart.php");

		//Replace the delimeters with the formname
		$out = str_replace("%FORMNAME%",$formName,$temp);

		$tempForm = file_get_contents("modules/research_assistant/forms/FormBuilder/ra_SimpleCitationDummy.php");
		$tempForm = str_replace("%FORMNAME%",$formName,$tempForm);

		if($multiplePeople == "Y")
		{
			$out .= 'if (!isset($_REQUEST[\'numOfRows\'])) $_REQUEST[\'numOfRows\'] = count($this->getPeople());';
			$out .= 'if ($_REQUEST[\'numOfRows\']<1) $_REQUEST[\'numOfRows\']=1;';
			$out .= file_get_contents("modules/research_assistant/forms/FormBuilder/ra_MultiplePeople.php");
			$out .= str_replace("%ADDCURLY%","",$tempForm);
		}
		else
		{
			$out .= 'if (!isset($_REQUEST[\'numOfRows\'])) $_REQUEST[\'numOfRows\'] = 1;';
			$out .= 'if ($_REQUEST[\'numOfRows\']<1) $_REQUEST[\'numOfRows\']=1;';
			$out .= str_replace("%ADDCURLY%","}",$tempForm);
		}



		for($i = 0; $i <$_REQUEST['numOfRows'];$i++)
		{
			$control = $_REQUEST['inputType'.$i];

			if($control == "Text")
			{
				$_REQUEST["FieldName".$i] = addcslashes($_REQUEST["FieldName".$i],"'");
				$out .= '<tr><td class="descriptionbox">'.$_REQUEST["FieldName".$i].'</td>\';'."\n";
				$out .= 'for($i=0; $i<$_REQUEST[\'numOfRows\']; $i++) {'."\n";
				$out .= '$value = "";'."\n";

				if(empty($_REQUEST["customFieldName".$i]))
				{
					$out .= 'if (isset($citation[\'ts_array\'][\'rows\'][$i][\''."TextField".$i.'\'])) $value = $citation[\'ts_array\'][\'rows\'][$i][\''."TextField".$i.'\'];'."\n";
					$out .= '$out .= \'<td class="optionbox">';
					$out .= '<INPUT TYPE="TEXT" SIZE="22" name="'."TextField".$i.'\'.$i.\'" value="\'.htmlentities($value).\'" />';
				}
				else
				{
					$out .= 'if (isset($citation[\'ts_array\'][\'rows\'][$i][\''.$_REQUEST["customFieldName".$i].'\'])) $value = $citation[\'ts_array\'][\'rows\'][$i][\''.$_REQUEST["customFieldName".$i].'\'];'."\n";
					$out .= '$out .= \'<td class="optionbox">';
					$out .= '<INPUT TYPE="TEXT" SIZE="22" name="'.$_REQUEST["customFieldName".$i].'\'.$i.\'" value="\'.htmlentities($value).\'" />';
				}

				$out .= '</td>\';'."\n";
				$out .= '}'."\n";
				$out .= '$out .=\'</tr>'."\n";
			}
			if($control == "ChkBox")
			{
				$_REQUEST["FieldName".$i] = addcslashes($_REQUEST["FieldName".$i],"'");
				$out .= '<tr><td class="descriptionbox">'.$_REQUEST["FieldName".$i].'</td>\';'."\n";
				$out .= 'for($i=0; $i<$_REQUEST[\'numOfRows\']; $i++) {'."\n";
				$out .= '$value = "";'."\n";
				if(empty($_REQUEST["customFieldName".$i]))
				{
				$out .= 'if (isset($citation[\'ts_array\'][\'rows\'][$i][\''."CheckBox".$i.'\'])) $value = $citation[\'ts_array\'][\'rows\'][$i][\''."CheckBox".$i.'\'];'."\n";
				}
				else
				{
				$out .= 'if (isset($citation[\'ts_array\'][\'rows\'][$i][\''.$_REQUEST["customFieldName".$i].'\'])) $value = $citation[\'ts_array\'][\'rows\'][$i][\''.$_REQUEST["customFieldName".$i].'\'];'."\n";
				}

				$out .= '$out .= \'<td class="optionbox">'."\n";

				if(!empty($_REQUEST["SelectOptions".$i]))
				{
					$options = explode(",",$_REQUEST["SelectOptions".$i]);
				}
				else
				{
					$options = array();
				}
				foreach($options as $key=>$value)
				{
					$value = addcslashes($value,"'");
					if(empty($_REQUEST["customFieldName".$i]))
					{
						$out .= $value.'<input type="checkbox" name="'."CheckBox".$i.'\'.$i.\'" value="'."CheckBox".$i.'"\'.($value==\'CheckBox'.$i.'\'?\' checked="checked"\':\'\').\'/>'."\n";
					}
					else
					{
						$out .= $value.'<input type="checkbox" name="'.$_REQUEST["customFieldName".$i].'\'.$i.\'" value="'."CheckBox".$i.'"\'.($value==\'CheckBox'.$i.'\'?\' checked="checked"\':\'\').\'/>'."\n";
					}
					$out .= '<br />';
				}
				$out .='</td>\';} $out .=\'</tr>';
			}

			if($control == "RdoButton")
			{
				$_REQUEST["FieldName".$i] = addcslashes($_REQUEST["FieldName".$i],"'");
				$out .= '<tr><td class="descriptionbox">'.$_REQUEST["FieldName".$i].'</td>\';'."\n";
				$out .= 'for($i=0; $i<$_REQUEST[\'numOfRows\']; $i++) {'."\n";
				$out .= '$value = "";'."\n";
				if(empty($_REQUEST["customFieldName".$i]))
					{
						$out .= 'if (isset($citation[\'ts_array\'][\'rows\'][$i][\''."Radio".$i.'\'])) $value = $citation[\'ts_array\'][\'rows\'][$i][\''."Radio".$i.'\'];'."\n";
					}
				else
					{
						$out .= 'if (isset($citation[\'ts_array\'][\'rows\'][$i][\''.$_REQUEST["customFieldName".$i].'\'])) $value = $citation[\'ts_array\'][\'rows\'][$i][\''.$_REQUEST["customFieldName".$i].'\'];'."\n";
					}
				$out .= '$out .= \'<td class="optionbox">'."\n";
				if(!empty($_REQUEST["SelectOptions".$i]))
				{
					$options = explode(",",$_REQUEST["SelectOptions".$i]);
				}
				else
				{
					$options = array();
				}
				foreach($options as $key=>$value)
				{
					$value = addcslashes($value,"'");
					if(empty($_REQUEST["customFieldName".$i]))
					{
					$out .= $value.'<input type="radio" value="'.$value.'" name="'."Radio".$i.'\'.$i.\'"\'.($value==\''.$value.'\'?\' checked="checked"\':\'\').\' />'."\n";
					}
					else
					{
						$out .= $value.'<input type="radio" value="'.$value.'" name="'.$_REQUEST["customFieldName".$i].'\'.$i.\'"\'.($value==\''.$value.'\'?\' checked="checked"\':\'\').\' />'."\n";
					}
					$out .= '<br />';
				}
				$out .= '\';}$out .=\'</tr>';
			}
		}
		$out .= file_get_contents("modules/research_assistant/forms/FormBuilder/footer.php");

		$dispForm = file_get_contents("modules/research_assistant/forms/FormBuilder/display_form.php");

		$dispForm = str_replace("%REPLACE%",$formName,$dispForm);

		$out .= str_replace("%DESCRIPTION%",$_REQUEST['formDescription'],$dispForm);

		$step2 = file_get_contents("modules/research_assistant/forms/FormBuilder/step2.php");

		$step2 = str_replace("%REPLACE%",$formName,$step2);

		$out .= str_replace("%DESCRIPTION%",$_REQUEST['formDescription'],$step2);

		$out .= $this->getEditFactsFormAndStep3();

		$simpleCit = file_get_contents("modules/research_assistant/forms/FormBuilder/processSimpleCitation.php");

		$simpleCit = str_replace("%FACTTYPE%",$_REQUEST['factType'],$simpleCit);

		$out .= str_replace("%FORMNAME%", $formName, $simpleCit);

		$out .= 'for($number = 0; $number < $_POST[\'numOfRows\']; $number++){';

		for($i = 0; $i <$_REQUEST['numOfRows'];$i++)
		{
			$control = $_REQUEST['inputType'.$i];

			if($control == "Text")
			{
				$out .= 'if (!isset($_POST["TextField'.$i.'".$number])) $_POST["TextField'.$i.'".$number]="";';
			}

			if($control == "ChkBox")
			{
				$out .= 'if (!isset($_POST["CheckBox'.$i.'".$number])) $_POST["CheckBox'.$i.'".$number]="";';
			}

			if($control == "RdoButton")
			{
				$out .= 'if (!isset($_POST["Radio'.$i.'".$number])) $_POST["Radio'.$i.'".$number]="";';
			}


		}

		$out .= "\n".'$rows[$number] = array(';

		for($i = 0; $i <$_REQUEST['numOfRows'];$i++)
		{
			$control = $_REQUEST['inputType'.$i];
			if($control == "Text")
			{
				$out .= '\'TextField'.$i.'\'=>$_POST["TextField'.$i.'".$number],';
			}
			if($control == "ChkBox")
			{
				$out .= '\'CheckBox'.$i.'\'=>$_POST["CheckBox'.$i.'".$number],';
			}

			if($control == "RdoButton")
			{
				$out .= '\'Radio'.$i.'\'=>$_POST["Radio'.$i.'".$number],';
			}
		}
		$out = substr($out, 0, strlen($out)-1);
		$out .= ');';

		$out .= "\n".'$text .= "\r\n";'."\r\n";

		for($i = 0; $i <$_REQUEST['numOfRows'];$i++)
		{
			if($control == "Text")
			{
				$out .= 'if (!empty($_POST["TextField'.$i.'".$number])) $text .= "'.$_REQUEST['FieldName'.$i].': ".$_POST["TextField'.$i.'".$number];';
			}
			if($control == "ChkBox")
			{
				$out .= 'if (!empty($_POST["CheckBox'.$i.'".$number])) $text .= "'.$_REQUEST['FieldName'.$i].': ".$_POST["CheckBox'.$i.'".$number];';
			}

			if($control == "RdoButton")
			{
				$out .= 'if (!empty($_POST["Radio'.$i.'".$number])) $text .= "'.$_REQUEST['FieldName'.$i].': ".$_POST["Radio'.$i.'".$number];';
			}
		}
		$out .= '}';

		$out .= '$citation = array(
			"PAGE"=>"Page: ".$_POST[\'page\'].", Call Number/URL: ".$_POST[\'CallNumberURL\'],
			"QUAY"=>\'\',
     "DATE"=>!empty($_POST[\'EnumerationDate\'])?$_POST[\'EnumerationDate\']:"Unknown",
			"TEXT"=>$text,
			"OBJE"=>$_POST[\'OBJE\'],
			"array"=>array(
		\'city\'=>$_POST[\'city\'],
			\'county\'=>$_POST[\'county\'],
			\'state\'=>$_POST[\'state\'],
			\'rows\'=>$rows));

		return $citation;
    }} ?>';
		if(strstr($formName,'\\') || strstr($formName,'/'))
		{

		}
		else
		{
			$this->WriteFile($out,"modules/research_assistant/forms/".$formName.".php");
		}
	}

	function getEditFactsFormAndStep3()
	{
		$temp = 'function editFactsForm($printButton = true)
	{
		global $factarray;

		$facts = $this->getFactData();
		$citation = $this->getSourceCitationData();
		$out = parent::editFactsForm(false);
		$rows = $citation[\'ts_array\'][\'rows\'];

		$out .= \'<tr><td class="descriptionbox" align="center" colspan="4"><input type="submit" value=\'.$pgv_lang["complete"].\'></td></tr>\';
		return $out;
	}


	function step3() {
		global $pgv_lang;

		$out = $this->processFactsForm();

		// Complete the Task.
		ra_functions::completeTask($_REQUEST[\'taskid\'], $_REQUEST[\'form\']);
		// Tell the user their form submitted successfully.
		$out .= ra_functions::print_menu();
		$out .= ra_functions::printMessage($pgv_lang["success"],true);

		// Return it to the buffer.
		return $out;
	}

	function getOccupation($gedcomRecord)
	{
		$occupation = get_gedcom_value("OCCU", 1, $gedcomRecord);
		return $occupation;
	}';

		return $temp;

	}

	function generateTextBox($i)
	{
		$out = '<input type="text" size="22" name="TextField'.$i.'"/>';
	}

	function step2() {

		$out = $this->completeheader("module.php?mod=research_assistant&form=FormBuilder&action=func&func=step2", "center", "FormBuilder", true);
		$this->generate_form();
		$out .= $this->editFactsForm(false);

		$out .= $this->footer();

		return $out;
	}



	function editFactsForm($printButton = true)
	{
		global $pgv_lang;
		$out = '<tr><td class="descriptionbox align="center"><h2>'.$pgv_lang["FormGeneration"].'</h2></td></tr>';

		return $out;
	}
	}


?>
