<?php
/**
 * phpGedView Research Assistant Tool - World War 1 Draft Card A
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
 * @version $Id: WW1DraftA.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Brandon Gagnon
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'includes/functions/functions_edit.php';

class WW1DraftA extends ra_form {

	function header($action, $tableAlign, $heading, $showchoose = false) {
		global $pgv_lang;
		$out = "";
		if ($showchoose) {
	   //Row Form
			$out = '<form action="module.php" method="post">';
			$out .= '<input type="hidden" name="mod" value="research_assistant" />' .
	    '<input type="hidden" name="action" value="printform" />' .
	    '<input type="hidden" name="formname" value="WW1DraftA" />' .
	    '<input type="hidden" name="taskid" value="'.$_REQUEST['taskid'].'" />';
			if (!isset($_REQUEST['numOfRows'])) $_REQUEST['numOfRows'] = count($this->getPeople());
			if ($_REQUEST['numOfRows']<1) $_REQUEST['numOfRows']=1;

			$out .= '</form>';
		}

		// Split action and use it for hidden inputs
		$action = parse_url($action);
		$params = array();
		parse_str(html_entity_decode($action["query"]), $params);

        // Setup for our form to go through the module system
		$out .= '<script language="JavaScript" type="text/javascript">
<!--
function ValidateForm(myForm){ if(myForm.sourceid && myForm.sourceid.value == ""){ alert("You must enter a source");
return false;}return true;}
//-->
</script>';
		$out .=  '<form action="' . $action["path"] . '" method="post" onsubmit="return ValidateForm(this)">';
		$out .= '<input type="hidden" name="numOfRows" value="'.$_REQUEST['numOfRows'].'" />';
		foreach ($params as $key => $value) {
			$out .= '<input type="hidden" name="' . $key . '" value="' . $value . '">';
		}
		$out .= '<table id="WW1DraftA" class="list_table" align="' . $tableAlign . '">';
		$out .= '<tr>';
		$out .= '<th colspan="6" align="right"class="topbottombar"><h2>' . $heading . '</h2></th>';
		$out .= '</tr>';
		return $out;
	}

	 function createPerson($i)
    {
    $indiFact = "0 @new@ INDI\r\n";
    $indiFact .= "1 NAME ".$_POST["NameOfPeople".$i]."\r\n";

    if(!empty($_POST["Age".$i]))
    {
    $age = 1930 - $_POST["Age".$i];
    $indiFact .= "1 BIRT\r\n";
    $indiFact .= "2 DATE ABT ".$age;
    }

    if(!empty($_POST["PlaceOfBirth".$i]))
    {
    $indiFact .= "2 PLAC ".$_POST["PlaceOfBirth"];
    }

    if(!empty($_POST["Gender".$i]))
    {
    $indiFact .= "1 SEX ".$_POST["Gender".$i];
    }

    return $indiFact;

    }

	function getFieldValue($j, $lines) {
		$value = "";
		if (empty($lines[$j])) return $value;
		$line = $lines[$j];
		$ct = preg_match("/: (.*)/", $line, $match);
		if ($ct>0) $value = trim($match[1]);
		return $value;
	}

	/**
	 * override method from ra_form.php
	 */
	function simpleCitationForm($citation) {
		global $pgv_lang, $factarray;
		if (empty($_POST['data']))
		$data = array();
		if (empty($_REQUEST['row'])) {
			$people = $this->getPeople();
			$row = count($people);
		}

		$citation = $this->getSourceCitationData();
		$page = "";
		$callno = "";
		$date = $citation['ts_date'];
		$ct = preg_match("/Page: (.*), .*: (.*)/", $citation['ts_page'], $match);
		if ($ct > 0) {
			$page = trim($match[1]);
			$callno = trim($match[2]);
		}

		$city = "";
		$county = "";
		$state = "";
		if (!empty($citation['ts_array']['city'])) $city = $citation['ts_array']['city'];
		if (!empty($citation['ts_array']['county'])) $county = $citation['ts_array']['county'];
		if (!empty($citation['ts_array']['state'])) $state = $citation['ts_array']['state'];

		$out = '<tr>
			<td class="descriptionbox">'.print_help_link("edit_media_help", "qm",'',false,true).$factarray['OBJE'].'</td>
			<td class="optionbox" colspan="5"><input type="text" name="OBJE" id="OBJE" size="5" value="'.$citation['ts_obje'].'"/>';
		$out .= print_findmedia_link("OBJE", true, '', true);
		$out .= '<br /><a href="javascript:;" onclick="pastefield=document.getElementById(\'OBJE\'); window.open(\'addmedia.php?action=showmediaform\', \'\', \'top=50,left=50,width=600,height=500,resizable=1,scrollbars=1\'); return false;">'.$pgv_lang["add_media"].'</a>';
		$out .= '</td></tr>';
		$out .= '<tr><td class="descriptionbox">'.$pgv_lang["ra_no"].'</td><td class="optionbox"><input type="text" name="page" /></td></tr>';

//        Next Table
		$out .= '<tr><td colspan="6">';

        $out .= '<table  align="left" dir="ltr">
 <tr>
  <td class="descriptionbox">Name in Full</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Name'])) $value = $citation['ts_array']['rows'][$i]['Name'];
			$out.='<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Name'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Address</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Address'])) $value = $citation['ts_array']['rows'][$i]['Address'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Address'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>

<tr>
  <td class="descriptionbox">City</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['city'])) $value = $citation['ts_array']['rows'][$i]['city'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="city'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
<tr>
  <td class="descriptionbox">State</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['state'])) $value = $citation['ts_array']['rows'][$i]['state'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="state'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>
  <td class="descriptionbox">Zipcode</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Zipcode'])) $value = $citation['ts_array']['rows'][$i]['Zipcode'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Zipcode'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
  <td class="descriptionbox">Date of Birth</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['DOB'])) $value = $citation['ts_array']['rows'][$i]['DOB'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="23" name = "DOB'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Are you: </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Citizen'])) $value = $citation['ts_array']['rows'][$i]['Citizen'];
			$out .= '<td class="optionbox"><select name="Citizen'.$i.'">
		<option value="1"'.($value=='1'?' selected="selected"':'').'>Natural Born Citizen</option>
		<option value="2"'.($value=='2'?' selected="selected"':'').'>Naturalized Citizen</option>
		<option value="3"'.($value=='3'?' selected="selected"':'').'>Alien</option>
		<option value="4"'.($value=='4'?' selected="selected"':'').'>Declared Intention</option>
	</select>
  </td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Where were you born?</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['PlaceOfBirth'])) $value = $citation['ts_array']['rows'][$i]['PlaceOfBirth'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "PlaceOfBirth'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">If not a citizen, of what nation are you a citizen or subject?</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Nationality'])) $value = $citation['ts_array']['rows'][$i]['Nationality'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Nationality'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">What if your present trade, occupation or office?</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Trade'])) $value = $citation['ts_array']['rows'][$i]['Trade'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Trade'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">By Whom Employed?</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Employer'])) $value = $citation['ts_array']['rows'][$i]['Employer'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Employer'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
<tr>
  <td class="descriptionbox">Where Employed?</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['PlaceOfEmployment'])) $value = $citation['ts_array']['rows'][$i]['PlaceOfEmployment'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "PlaceOfEmployment'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>
  <td class="descriptionbox">Dependents?</td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Dependents'])) $value = $citation['ts_array']['rows'][$i]['Dependents'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Dependents'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>

  <td class="descriptionbox">Married
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Married'])) $value = $citation['ts_array']['rows'][$i]['Married'];
			$out .= '<td class="optionbox"><INPUT TYPE="CHECKBOX" name="Married'.$i.'" value="Married"'.($value=='Married'?' checked="checked"':'').' /></td>';
		}
		$out .='</tr>

 <tr>
  <td class="descriptionbox">Race
   </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Race'])) $value = $citation['ts_array']['rows'][$i]['Race'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Race'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Military Rank:
   </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Rank'])) $value = $citation['ts_array']['rows'][$i]['Rank'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Rank'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Military Branch:
   </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Branch'])) $value = $citation['ts_array']['rows'][$i]['Branch'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Branch'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Years of Service:
   </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['YearsOfService'])) $value = $citation['ts_array']['rows'][$i]['YearsOfService'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="YearsOfService'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Nation or state:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Nation'])) $value = $citation['ts_array']['rows'][$i]['Nation'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Nation'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
 <tr>
  <td class="descriptionbox">Do you claim exception from draft?
 </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Exempt'])) $value = $citation['ts_array']['rows'][$i]['Exempt'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name = "Exempt'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>';
		$out .= '<tr><th colspan="2" align="right"class="topbottombar"><h2>' . "Registrar's Report" . '</h2></th>';
		$out .= '</tr>
<tr>
  <td class="descriptionbox">Are you: </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['size'])) $value = $citation['ts_array']['rows'][$i]['size'];
			$out .= '<td class="optionbox"><select name="size'.$i.'">
		<option value="Tall"'.($value=='Tall'?' selected="selected"':'').'>Tall</option>
		<option value="Medium"'.($value=='Medium'?' selected="selected"':'').'>Medium</option>
		<option value="Short"'.($value=='Short'?' selected="selected"':'').'>Short</option>
	</select>
  </td>
 <tr>';

		}
		$out .='</tr>
<tr>
  <td class="descriptionbox">Color of Eyes:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['EyeColor'])) $value = $citation['ts_array']['rows'][$i]['EyeColor'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="EyeColor'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>
  <td class="descriptionbox">Color of Hair:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['HairColor'])) $value = $citation['ts_array']['rows'][$i]['HairColor'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="HairColor'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>

  <td class="descriptionbox">Bald
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Bald'])) $value = $citation['ts_array']['rows'][$i]['Bald'];
			$out .= '<td class="optionbox"><INPUT TYPE="CHECKBOX" name="Bald'.$i.'" value="Bald"'.($value=='Bald'?' checked="checked"':'').' /></td>';
		}
		$out .='</tr>

<tr>
  <td class="descriptionbox">Lost Appendage?:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Appendage'])) $value = $citation['ts_array']['rows'][$i]['Appendage'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Appendage'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>
  <td class="descriptionbox">Date:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Date'])) $value = $citation['ts_array']['rows'][$i]['Date'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Date'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>
<tr>
  <td class="descriptionbox">Precinct:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Precinct'])) $value = $citation['ts_array']['rows'][$i]['Precinct'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Precinct'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>
  <td class="descriptionbox">City Or County:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['county'])) $value = $citation['ts_array']['rows'][$i]['county'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="county'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
<tr>
  <td class="descriptionbox">state:
  </td>';
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$value = "";
			if (isset($citation['ts_array']['rows'][$i]['Regstate'])) $value = $citation['ts_array']['rows'][$i]['Regstate'];
			$out .= '<td class="optionbox"><INPUT TYPE="TEXT" SIZE="22" name="Regstate'.$i.'" value="'.htmlentities($value).'" /></td>';
		}
		$out .='</tr>
  <td class="descriptionbox">Person
  </td>';
		$people = $this->getPeople();
		$persons = array_values($people);
		for($i=0; $i<$_REQUEST['numOfRows']; $i++) {
			$pid = "";
			if (isset($citation['ts_array']['rows'][$i]['personid'])) $pid = $citation['ts_array']['rows'][$i]['personid'];
			if (empty($pid)) {
				if (isset($persons[$i])) $pid = $persons[$i]->getXref();
			}
			$person = Person::GetInstance($pid);

			$out .= '
	            <td id="peoplecell" class="optionbox">
	                   <div id="peoplelink'.$i.'">';
			if (!is_null($person)) $out .= '<a id="link_'.$pid.'" href="'.$person->getLinkUrl().'">'.$person->getFullName().'</a> <a id="rem_'.$pid.'" href="#" onclick="clearname(\'personid\', \'link_'.$pid.'\', \''.$pid.'\'); return false;" ><img src="images/remove.gif" border="0" alt="" /><br /></a>';
			$out .= '</div>
	                   <input type="hidden" id="personid'.$i.'" name="personid'.$i.'" size="3" value="'.$pid.'" />';
			if(isset($citation['ts_array']['rows'][$i]['Name'])) $searchName = $citation['ts_array']['rows'][$i]['Name'];
			else $searchName = '';
			$out .= print_findindi_link("personid".$i, "peoplelink".$i, true,false,'',$searchName);
            $out .= "<br />Create New Person: <input type=\"checkbox\" value=\"newPerson\"/>";
			$out .= '<br /></td>';

		}
		$out .='</tr></table>';
		$out .= '</td></tr>';

		return $out;
	}

	function footer() {
		return '</table></form>';
	}

	function display_form() {
		$out = $this->header("module.php?mod=research_assistant&form=WW1DraftA&action=func&func=step2&taskid=$_REQUEST[taskid]", "center", "World War 1 Draft Card A", true);
		$out .= $this->sourceCitationForm(5, false);
        //$out .= $this->content();
		$out .= $this->footer();
		return $out;
	}

	function step2() {
		$personid = "";
		for($number = 0; $number < $_POST['numOfRows']; $number++)
		{
			if(!empty($_POST["newPerson".$number]))
			{
				$tempPerson = $this->createPerson($number);
				$_POST["personid".$number] = append_gedrec($tempPerson,true,'');
			}

			if (!isset($_POST["personid".$number])) $_POST["personid".$number]="";
			$personid .= $_POST["personid".$number].";";
			$_POST["personid".$number] = trim($_POST["personid".$number], '; \r\n\t');
		}
		$_REQUEST['personid'] = $personid;
		$return = $this->processSourceCitation();

			$out = $this->header("module.php?mod=research_assistant&form=WW1DraftA&action=func&func=step3&taskid=" . $_REQUEST['taskid'], "center", "World War 1 Draft Card A");
			$out .= $this->editFactsForm(true);
			$out .= $this->footer();
			return $out;
	}

	function inferFacts($rows){
		$people = array();


		return $people;


	}


	function editFactsForm($printButton = true)
	{
		global $factarray, $pgv_lang;

		$facts = $this->getFactData();
		$citation = $this->getSourceCitationData();
		$out = parent::editFactsForm(false);
		$rows = $citation['ts_array']['rows'];
		$inferFacts = $this->inferFacts($rows);

		if(!empty($inferFacts))
		{

		$out .= '<tr><td colspan="2" id="inferData"><table class="list_table"><tbody><tr><td colspan="4" class="topbottombar">'.$pgv_lang["ra_inferred_facts"].'</td></tr>
<tr><td class="descriptionbox">'.$pgv_lang["ra_fact"].'</td><td class="descriptionbox">'.$pgv_lang["ra_person"].'</td><td class="descriptionbox">'.$pgv_lang["ra_reason"].'</td><td class="descriptionbox">'.$pgv_lang["add"].'</td></tr>';
			$completeFact = true;
			$occufact = true;
			foreach($inferFacts as $key=>$inferredFacts) {
				foreach($inferredFacts as $id=>$value) {
					$completeFact = true;
					foreach($facts as $factKey=>$factValues)
					{
						$ct = preg_match("/1 (\w+)/", $factValues['tf_factrec'], $match);
						$factname = trim($match[1]);

						if($factValues["tf_people"] == $key  && $factname == $value["factType"])
						{
							$completeFact = false;
						}
					}

					if($completeFact)
					{
						$out .='<tr>';
						$out .="<td class=\"optionbox\">".$factarray[$value['factType']]." ".$value['date']."</td>";
						$out .="<td class=\"optionbox\">".$value["Person"]."</td>";
						$out .="<td class=\"optionbox\">".$value["Reason"]."</td>";
						$out .="<td class=\"optionbox\">".'<input type="Checkbox" id="'.$value['PersonID'].$value['factType'].'" onclick="add_ra_fact_inferred(this,\''.preg_replace("/\r?\n/", "\\r\\n",$value["Fact"]).'\',\''.$value['PersonID'].'\',\''.$value['factType'].'\',\''.htmlentities($value["Person"]).'\',\''.$value["factPeople"].'\')"></td>'."\n";
						$out .="</tr>";
					}

				}
			}
		    $out .= '<tr><td class="descriptionbox" align="center" colspan="4"><input type="submit" value='.$pgv_lang["complete"].'></td></tr>';
			return $out;
		}
		else
		{
		$out .= '<tr><td class="descriptionbox" align="center" colspan="4"><input type="submit" value='.$pgv_lang["complete"].'></td></tr>';
		return $out;
		}
	}

	function step3() {
		global $pgv_lang;

		$out = $this->processFactsForm();

		// Complete the Task.
		ra_functions::completeTask($_REQUEST['taskid'], $_REQUEST['form']);
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
	}

	/**
	 * This is a function that will attempt to infer facts from the census form.
	 * If any facts can be inferred then it will attempt to validate them against the database.
	 * If a fact differs from that in the database, or there is no fact present in the databse,
	 * this function will suggest the facts to the user.
	 */


	/**
	 * Override method from ra_form
	 */
	function processSimpleCitation() {
		global $TBLPREFIX;
		//-- delete any old census records
		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}taskfacts WHERE tf_t_id=? AND tf_factrec ".PGV_DB::$LIKE." ?")->execute(array($_REQUEST['taskid'], '1 _MILI%'));

		// Set our output to nothing, this supresses a warning that we would otherwise get.
		$out = "";
		$factrec = "1 _MILI";
		$factrec .= "\r\n2 DATE ";
		$factrec .=!empty($_POST['Date0'])?$_POST['Date0']:"WW1";
		$factrec .= "\r\n2 PLAC ".$_POST['city0'].", ".$_POST['county0'].", ".$_POST['state0'].", USA";

		$people = $this->getPeople();
		$pids = array_keys($people);
		//-- store the fact associations in the database
		PGV_DB::prepare("INSERT INTO {$TBLPREFIX}taskfacts (tf_id, tf_t_id, tf_factrec, tf_people, tf_multiple, tf_type) VALUES (?, ?, ?, ?, ?, ?)")->execute(array(get_next_id("taskfacts", "tf_id"), $_REQUEST['taskid'], $factrec, implode(";", $pids), 'Y', 'indi'));

		$rows = array();
		$text = $_POST['city0'].", ".$_POST['county0'].", ".$_POST['state0'].", World War 1 Draft Card A";
		for($number = 0; $number < $_POST['numOfRows']; $number++)
		{
			if (!isset($_POST["Name".$number])) $_POST["Name".$number]="";
			if (!isset($_POST["Address".$number])) $_POST["Address".$number]="";
			if (!isset($_POST["DOB".$number])) $_POST["DOB".$number]="";
			if (!isset($_POST["Race".$number])) $_POST["Race".$number]="";
			if (!isset($_POST["PlaceOfBirth".$number])) $_POST["PlaceOfBirth".$number]="";
			if (!isset($_POST["Nationality".$number])) $_POST["Nationality".$number]="";
			if (!isset($_POST["Trade".$number])) $_POST["Trade".$number]="";
			if (!isset($_POST["Employer".$number])) $_POST["Employer".$number]="";
			if (!isset($_POST["PlaceOfEmployment".$number])) $_POST["PlaceOfEmployment".$number]="";
			if (!isset($_POST["Dependents".$number])) $_POST["Dependents".$number]="";
			if (!isset($_POST["Married".$number])) $_POST["Married".$number]="";
			if (!isset($_POST["Rank".$number])) $_POST["Rank".$number]="";
			if (!isset($_POST["Branch".$number])) $_POST["Branch".$number]="";
			if (!isset($_POST["YearsOfService".$number])) $_POST["YearsOfService".$number]="";
			if (!isset($_POST["Nation".$number])) $_POST["Nation".$number]="";
			if (!isset($_POST["Exempt".$number])) $_POST["Exempt".$number]="";
			if (!isset($_POST["Appendage".$number])) $_POST["Appendage".$number]="";
			if (!isset($_POST["Bald".$number])) $_POST["Bald".$number]="";
			if (!isset($_POST["HairColor".$number])) $_POST["HairColor".$number]="";
			if (!isset($_POST["EyeColor".$number])) $_POST["EyeColor".$number]="";
			if (!isset($_POST["size".$number])) $_POST["size".$number]="";
			if (!isset($_POST["city".$number])) $_POST["city".$number]="";
			if (!isset($_POST["state".$number])) $_POST["state".$number]="";
			if (!isset($_POST["Zipcode".$number])) $_POST["Zipcode".$number]="";
			if (!isset($_POST["personid".$number])) $_POST["personid".$number]="";
			if (!isset($_POST["Date".$number])) $_POST["Date".$number]="";
			if (!isset($_POST["Precinct".$number])) $_POST["Precinct".$number]="";
			if (!isset($_POST["county".$number])) $_POST["county".$number]="";
			if (!isset($_POST["Regstate".$number])) $_POST["Regstate".$number]="";
			if (!isset($_POST["HairColor".$number])) $_POST["HairColor".$number]="";
			if (!isset($_POST["EyeColor".$number])) $_POST["EyeColor".$number]="";
			if (!isset($_POST["Citizen".$number])) $_POST["Citizen".$number]="";


			$rows[$number] = array(
			'Name'=>$_POST["Name".$number],
			'Address'=>$_POST["Address".$number],
			"DOB"=>$_POST["DOB".$number],
			"Race"=>$_POST["Race".$number],
			"PlaceOfBirth"=>$_POST["PlaceOfBirth".$number],
			"Nationality"=>$_POST["Nationality".$number],
			"Trade"=>$_POST["Trade".$number],
			"Employer"=>$_POST["Employer".$number],
			"PlaceOfEmployment"=>$_POST["PlaceOfEmployment".$number],
			"Dependents"=>$_POST["Dependents".$number],
			"Married"=>$_POST["Married".$number],
			"Rank"=>$_POST["Rank".$number],
			"Branch"=>$_POST["Branch".$number],
			"YearsOfService"=>$_POST["YearsOfService".$number],
			"Nation"=>$_POST["Nation".$number],
			"Exempt"=>$_POST["Exempt".$number],
			"size"=>$_POST["size".$number],
			"city"=>$_POST["city".$number],
			"state"=>$_POST["state".$number],
			"Zipcode"=>$_POST["Zipcode".$number],
			"personid"=>$_POST["personid".$number],
			"Date"=>$_POST["Date".$number],
			"Precinct"=>$_POST["Precinct".$number],
			"county"=>$_POST["county".$number],
			"HairColor"=>$_POST["HairColor".$number],
			"EyeColor"=>$_POST["EyeColor".$number],
			"Appendage"=>$_POST["Appendage".$number],
			"Bald"=>$_POST["Bald".$number],
			"Citizen"=>$_POST["Citizen".$number],
			"Regstate"=>$_POST["Regstate".$number]
			);

			$text .= "\r\n";
			if (!empty($_POST["Name".$number])) $text .= "Name: ".$_POST["Name".$number];
			if (!empty($_POST["Address".$number])) $text .= "Address: ".$_POST["Address".$number];
			if (!empty($_POST["DOB".$number])) $text .= " DOB: ".$_POST["DOB".$number];
			if (!empty($_POST["Race".$number])) $text .= ", Color: ".$_POST["Race".$number];
			if (!empty($_POST["Gender".$number])) $text .= ", Gender: ".$_POST["Gender".$number];
			if (!empty($_POST["PlaceOfBirth".$number])) $text .= ", Place of Birth: ".$_POST["PlaceOfBirth".$number];
			if (!empty($_POST["Nationality".$number])) $text .= ", Nationality: ".$_POST["Nationality".$number];
			if (!empty($_POST["Trade".$number])) $text .= ", Trade: ".$_POST["Trade".$number];
			if (!empty($_POST["Employer".$number])) $text .= ", ".$_POST["Employer".$number];
			if (!empty($_POST["PlaceOfEmployment".$number])) $text .= ", ".$_POST["PlaceOfEmployment".$number];
			if (!empty($_POST["Dependents".$number])) $text .= ", ".$_POST["Dependents".$number];
			if (!empty($_POST["Married".$number])) $text .= ", Married: ".$_POST["Married".$number];
			if (!empty($_POST["Rank".$number])) $text .= ", Military Rank: ".$_POST["Rank".$number];
			if (!empty($_POST["Branch".$number])) $text .= ", ".$_POST["Branch".$number];
			if (!empty($_POST["YearsOfService".$number])) $text .= ", ".$_POST["YearsOfService".$number];
			if (!empty($_POST["Nation".$number])) $text .= ", ".$_POST["Nation".$number];
			if (!empty($_POST["Exempt".$number])) $text .= ", ".$_POST["Exempt".$number];
			if (!empty($_POST["size".$number])) $text .= ", ".$_POST["size".$number];
			if (!empty($_POST["city".$number])) $text .= ", ".$_POST["city".$number];
			if (!empty($_POST["state".$number])) $text .= ", ".$_POST["state".$number];
			if (!empty($_POST["HairColor".$number])) $text .= ", ".$_POST["HairColor".$number];
			if (!empty($_POST["Zipcode".$number])) $text .= ", ".$_POST["Zipcode".$number];
			if (!empty($_POST["Bald".$number])) $text .= ", ".$_POST["Bald".$number];
			if (!empty($_POST["Appendage".$number])) $text .= ", ".$_POST["Appendage".$number];
		}

		$citation = array(
			"PAGE"=>"Page: ".$_POST['page'],
			"QUAY"=>'',
			"DATE"=>!empty($_POST['EnumerationDate'])?$_POST['EnumerationDate']:"1880",
			"TEXT"=>$text,
			"OBJE"=>$_POST['OBJE'],
			"array"=>array(
			'city'=>"",
			'county'=>"",
			'state'=>"",
			'rows'=>$rows));

		return $citation;
	}

}
?>
