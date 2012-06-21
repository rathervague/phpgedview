<?php
/**
 * phpGedView Research Assistant Tool - United States Census 1820 File
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
 * @version $Id: Census1820.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author James Dickinson
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'includes/functions/functions_edit.php';

class Census1820 extends ra_form {

    function header($action, $tableAlign, $heading, $showchoose = false) {
     global $pgv_lang;
     $out = "";
     if ($showchoose) {
	     //Row Form
	     $out = '<form action="module.php" method="post">';
				$out .= '<input type="hidden" name="mod" value="research_assistant" />' .
						'<input type="hidden" name="action" value="printform" />' .
						'<input type="hidden" name="formname" value="Census1820" />' .
						'<input type="hidden" name="taskid" value="'.$_REQUEST['taskid'].'" />';
				if (!isset($_REQUEST['numOfRows'])) $_REQUEST['numOfRows'] = 1;
				$out .= '<table align="center"><tr><td class="descriptionbox">'.$pgv_lang["rows"].'</td><td class="optionbox"><select name="numOfRows">';
				for($i = 1; $i <= 20; $i++){
					$out .= '<option value="'.$i;
					if ($_REQUEST['numOfRows']==$i) $out .= " selected=\"selected\"";
					$out .= '">'.$i;
				}
				$out .= '</select></td></tr><tr><td colspan="2" class="topbottombar"><input type="submit" value="'.$pgv_lang["okay"].'"/></td></tr></table>';
				$out .= '</form>';
			}

		// Split action and use it for hidden inputs
        $action = parse_url($action);
        global $params;
        parse_str(html_entity_decode($action["query"]), $params);

        // Setup for our form to go through the module system
        $out .=  '<form action="' . $action["path"] . '" method="post">';
		$out .= '<input type="hidden" name="numOfRows" value="'.$_REQUEST['numOfRows'].'" />';
        foreach ($params as $key => $value) {
            $out .= '<input type="hidden" name="' . $key . '" value="' . $value . '">';
        }
        $out .= '<table id="Census1820" class="list_table" align="' . $tableAlign . '">';
        $out .= '<tr>';
        $out .= '<th colspan="12" align="right"class="topbottombar"><h2>' . $heading . '</h2></th>';
        $out .= '</tr>';
        return $out;
    }

	/**
	 * override method from ra_form.php
	 */
    function simpleCitationForm($citation) {
			global $pgv_lang, $factarray;
			if (empty($_POST['data']))
				$data = array();
			if (empty($_REQUEST['row']))
				$row = 1;

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

//        Start of Table
		$out = '<tr>
			<td class="descriptionbox">'.print_help_link("edit_media_help", "qm",'',false,true).$factarray['OBJE'].'</td>
			<td class="optionbox" colspan="5"><input type="hidden" name="OBJE" id="OBJE" value="'.$citation['ts_obje'].'"/>';
			$out .= "<div id=\"censusPicDiv\" style=\"display";
			if(!empty($citation['ts_obje']))
			{
				$out .= ":block\">";
				/*@var $picture Media*/
				$picture = Media::getInstance($citation['ts_obje']);
				if(!is_null($picture))
				{
					$out .= "<span id=\"censusImgSpan\">".$picture->getFullName().'</span><br/><img id="censusImage" src="'.$picture->getThumbnail().'" />';
				}
				else
				{
					$out .= "<span id=\"censusImgSpan\"></span><br /><img id=\"censusImage\" src=\"\" />";
				}
			}
			else
			{
				$out .= ":none\">";
				$out .= "<span id=\"censusImgSpan\"></span><br /><img id=\"censusImage\" src=\"\" />";
			}
			$out .="</div>";
		$out .= print_findmedia_link("OBJE", true, '', true);
		$out .= '<br /><a href="javascript:;" onclick="pastefield=document.getElementById(\'OBJE\'); window.open(\'addmedia.php?action=showmediaform\', \'\', \'top=50,left=50,width=600,height=500,resizable=1,scrollbars=1\'); return false;">'.$pgv_lang["add_media"].'</a>';
		$out .= '</td></tr>';
        $out .= '<tr><td class="descriptionbox">'.$pgv_lang["state"].'</td><td class="optionbox"><input name="state" type="text" size="27"  value="'.htmlentities($state).'"></td>';
        $out .= '<td class="descriptionbox">'.$pgv_lang["call/url"].'</td><td class="optionbox"><input name="CallNumberURL" type="text" size="27" value="'.htmlentities($callno).'"></td>';
        $out .= '<td class="descriptionbox">'.$pgv_lang["enumDate"].'</td><td class="optionbox"><input name="EnumerationDate" type="text" size="27" value="'.htmlentities($date).'"></td></tr>';
        $out .= '<tr><td class="descriptionbox">'.$pgv_lang["county"].'</td><td class="optionbox"><input name="county" type="text" size="27" value="'.htmlentities($county).'"></td>';
        $out .= '<td class="descriptionbox">'.$pgv_lang["city"].'</td><td class="optionbox"><input name="city" type="text" size="27" value="'.htmlentities($city).'"></td>';
        $out .= '<td class="descriptionbox">'.$pgv_lang["page"].'</td><td class="optionbox"><input name="page" type="text" size="5" value="'.htmlentities($page).'"></td></tr>';
//        Next Table
        $out .= '<tr><td colspan="6"><table align="center" id="inputTable" dir="ltr">';
        $out .= '<td class="descriptionbox" align="center" rowspan="2">Names of heads of families</td>';
        $out .= '<td colspan="5" class="descriptionbox" align="center">Free White Males</td>';
        $out .= '<td colspan="5" class="descriptionbox" align="center">Free White Females</td>';
        $out .= '<td colspan="4" class="descriptionbox" align="center">Slaves</td>';
        $out .= '<td colspan="4" class="descriptionbox" align="center">Free Colored Persons</td>';

        $out .= '<td class="descriptionbox" align="center" rowspan="2">Foreigners not noturalized</td>';
        $out .= '<td class="descriptionbox" align="center" rowspan="2">Numbers of persons<br />engaged in Agriculture</td>';
        $out .= '<td class="descriptionbox" align="center" rowspan="2">Numbers of persons<br />engaged in Commerce</td>';
        $out .= '<td class="descriptionbox" align="center" rowspan="2">Numbers of persons<br />engaged in Manufactures</td>';
        $out .= '<td class="descriptionbox" align="center" rowspan="2">All other persons<br />except Indians not taxed</td></tr>';
// Next row of description cells
        $out .= '<tr><td class="descriptionbox">Under 10</td><td class="descriptionbox">10 thru 15</td>';
        $out .= '<td class="descriptionbox">16 thru 25</td><td class="descriptionbox">26 thru 44</td><td class="descriptionbox">45 and over</td>';
        $out .= '<td class="descriptionbox">Under 10</td><td class="descriptionbox">10 thru 15</td>';
        $out .= '<td class="descriptionbox">16 thru 25</td><td class="descriptionbox">26 thru 44</td><td class="descriptionbox">45 and over</td>';
        $out .='<td class="descriptionbox">To 14</td><td class="descriptionbox">To 26</td>';
        $out .= '<td class="descriptionbox">To 45</td><td class="descriptionbox">45 and older</td>';
        $out .='<td class="descriptionbox">To 14</td><td class="descriptionbox">To 26</td>';
        $out .= '<td class="descriptionbox">To 45</td><td class="descriptionbox">45 and older</td></tr>';
// Country, City, Page, Head of Family input boxes
		if(!isset($_REQUEST['numOfRows'])) $_REQUEST['numOfRows'] = 1;
        for($i = 0; $i < $_REQUEST['numOfRows']; $i++){
         $row = array();
         if (isset($citation['ts_array']['rows'][$i])) $row = $citation['ts_array']['rows'][$i];

         $value = "";
         if (isset($row['headName'])) $value = $row['headName'];
	        $out .= '<tr><td class="optionbox"><input name="headName'.$i.'" type="text" size="19" value="'.htmlentities($value).'"></td>';
	//        Free white males input boxes
			$value = "";
         if (isset($row['underTenM'])) $value = $row['underTenM'];
	        $out .= '<td class="optionbox"><input name="underTenM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['tenThruFifteenM'])) $value = $row['tenThruFifteenM'];
	        $out .= '<td class="optionbox"><input name="tenThruFifteenM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['sixteenThruTwentyfiveM'])) $value = $row['sixteenThruTwentyfiveM'];
	        $out .= '<td class="optionbox"><input name="sixteenThruTwentyfiveM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['twentysixThruFortyfourM'])) $value = $row['twentysixThruFortyfourM'];
	        $out .= '<td class="optionbox"><input name="twentysixThruFortyfourM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
         if (isset($row['fortyfiveAndOverM'])) $value = $row['fortyfiveAndOverM'];
	        $out .= '<td class="optionbox"><input name="fortyfiveAndOverM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	// Free white females input boxes
			$value = "";
         if (isset($row['underTenF'])) $value = $row['underTenF'];
	        $out .= '<td class="optionbox"><input name="underTenF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['tenThruFifteenF'])) $value = $row['tenThruFifteenF'];
	        $out .= '<td class="optionbox"><input name="tenThruFifteenF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['sixteenThruTwentyfiveF'])) $value = $row['sixteenThruTwentyfiveF'];
	        $out .= '<td class="optionbox"><input name="sixteenThruTwentyfiveF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['twentysixThruFortyfourF'])) $value = $row['twentysixThruFortyfourF'];
	        $out .= '<td class="optionbox"><input name="twentysixThruFortyfourF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['fortyfiveAndOverF'])) $value = $row['fortyfiveAndOverF'];
	        $out .= '<td class="optionbox"><input name="fortyfiveAndOverF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	//   Other Persons and Slaves input boxes
	        $value = "";
         if (isset($row['slavesTo14'])) $value = $row['slavesTo14'];
	        $out .= '<td class="optionbox"><input name="slavesTo14'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	      $value = "";
         if (isset($row['slavesTo26'])) $value = $row['slavesTo26'];
	        $out .= '<td class="optionbox"><input name="slavesTo26'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
         if (isset($row['slavesTo45'])) $value = $row['slavesTo45'];
	        $out .= '<td class="optionbox"><input name="slavesTo45'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
         if (isset($row['slaves45Older'])) $value = $row['slaves45Older'];
	        $out .= '<td class="optionbox"><input name="slaves45Older'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	//  Free Colored Persons input boxes
			$value = "";
         if (isset($row['FreeColoredPersonsTo14'])) $value = $row['FreeColoredPersonsTo14'];
	        $out .= '<td class="optionbox"><input name="FreeColoredPersonsTo14'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
         if (isset($row['FreeColoredPersonsTo26'])) $value = $row['FreeColoredPersonsTo26'];
	        $out .= '<td class="optionbox"><input name="FreeColoredPersonsTo26'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
         if (isset($row['FreeColoredPersonsTo45'])) $value = $row['FreeColoredPersonsTo45'];
	        $out .= '<td class="optionbox"><input name="FreeColoredPersonsTo45'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
         if (isset($row['FreeColoredPersons45Older'])) $value = $row['FreeColoredPersons45Older'];
	        $out .= '<td class="optionbox"><input name="FreeColoredPersons45Older'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
         if (isset($row['Foreigners'])) $value = $row['Foreigners'];
	        $out .= '<td class="optionbox"><input name="Foreigners'.$i.'" type="text" size="17" value="'.htmlentities($value).'"></td>';
			$value = "";
         if (isset($row['Agriculture'])) $value = $row['Agriculture'];
	        $out .= '<td class="optionbox"><input name="Agriculture'.$i.'" type="text" size="15" value="'.htmlentities($value).'"></td>';
			$value = "";
         if (isset($row['Commerce'])) $value = $row['Commerce'];
	        $out .= '<td class="optionbox"><input name="Commerce'.$i.'" type="text" size="16" value="'.htmlentities($value).'"></td>';
			$value = "";
         if (isset($row['Manufactures'])) $value = $row['Manufactures'];
	        $out .= '<td class="optionbox"><input name="Manufactures'.$i.'" type="text" size="17" value="'.htmlentities($value).'"></td>';
			$value = "";
         if (isset($row['AllOther'])) $value = $row['AllOther'];
	        $out .= '<td class="optionbox"><input name="AllOther'.$i.'" type="text" size="17" value="'.htmlentities($value).'"></td>';

        }
        $out .= '</table></td></tr>';
        return $out;
    }

    function footer() {
        return '</table></form>';
    }

    function display_form() {
        $out = $this->header("module.php?mod=research_assistant&form=Census1820&action=func&func=step2&taskid=".$_REQUEST['taskid'], "center", "1820 United States Federal Census", true);
        $out .= $this->sourceCitationForm(5);
        //$out .= $this->content();
        $out .= $this->footer();
        return $out;
    }

  function step2() {
		$this->processSourceCitation();

		$out = $this->header("module.php?mod=research_assistant&form=Census1820&action=func&func=step3&taskid=" . $_REQUEST['taskid'], "center", "1820 United States Federal Census");
		$out .= $this->editFactsForm();
		$out .= $this->footer();
		return $out;
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

	/**
	 * Override method from ra_form
	 */
  function processSimpleCitation() {
		global $TBLPREFIX;
		//-- delete any old census records
		PGV_DB::prepare("DELETE FROM {$TBLPREFIX}taskfacts WHERE tf_t_id=? AND tf_factrec ".PGV_DB::$LIKE." ?")->execute(array($_REQUEST['taskid'], '1 CENS%'));

		// Set our output to nothing, this supresses a warning that we would otherwise get.
		$out = "";
		$factrec = "1 CENS";
		$factrec .= "\r\n2 DATE ";
		$factrec .=!empty($_POST['EnumerationDate'])?$_POST['EnumerationDate']:"1820";
		$factrec .= "\r\n2 PLAC ".$_POST['city'].", ".$_POST['county'].", ".$_POST['state'].", USA";

		$people = $this->getPeople();
		$pids = array_keys($people);
		//-- store the fact associations in the database
		PGV_DB::prepare("INSERT INTO {$TBLPREFIX}taskfacts (tf_id, tf_t_id, tf_factrec, tf_people, tf_multiple, tf_type) VALUES (?, ?, ?, ?, ?, ?)")->execute(array(get_next_id("taskfacts", "tf_id"), $_REQUEST['taskid'], $factrec, implode(";", $pids), 'Y', 'indi'));

		$rows = array();
		$text = $_POST['city'].", ".$_POST['county'].", ".$_POST['state'].", 1820 US Census";
		for($number = 0; $number < $_REQUEST['numOfRows']; $number++)
		{
			$rows[$number] = array(
			'headName'=>$_POST["headName".$number],
			'underTenM'=>$_POST["underTenM".$number],
			'tenThruFifteenM'=>$_POST["tenThruFifteenM".$number],
			"sixteenThruTwentyfiveM"=>$_POST["sixteenThruTwentyfiveM".$number],
			"twentysixThruFortyfourM"=>$_POST["twentysixThruFortyfourM".$number],
			"fortyfiveAndOverM"=>$_POST["fortyfiveAndOverM".$number],
			"underTenF"=>$_POST["underTenF".$number],
			"tenThruFifteenF"=>$_POST["tenThruFifteenF".$number],
			"sixteenThruTwentyfiveF"=>$_POST["sixteenThruTwentyfiveF".$number],
			"twentysixThruFortyfourF"=>$_POST["twentysixThruFortyfourF".$number],
			"fortyfiveAndOverF"=>$_POST["fortyfiveAndOverF".$number],
			//"otherPersons"=>$_POST["otherPersons".$number],
			//"slaves"=>$_POST["slaves".$number]
			"slavesTo14"=>$_POST["slavesTo14".$number],
			"slavesTo26"=>$_POST["slavesTo26".$number],
			"slavesTo45"=>$_POST["slavesTo45".$number],
			"slaves45Older"=>$_POST["slaves45Older".$number],
			"FreeColoredPersonsTo14"=>$_POST["FreeColoredPersonsTo14".$number],
			"FreeColoredPersonsTo26"=>$_POST["FreeColoredPersonsTo26".$number],
			"FreeColoredPersonsTo45"=>$_POST["FreeColoredPersonsTo45".$number],
			"FreeColoredPersons45Older"=>$_POST["FreeColoredPersons45Older".$number],
			"Foreigners"=>$_POST["Foreigners".$number],
			"Agriculture"=>$_POST["Agriculture".$number],
			"Commerce"=>$_POST["Commerce".$number],
			"Manufactures"=>$_POST["Manufactures".$number],
			"AllOther"=>$_POST["AllOther".$number],
			);

			$text .=$number==0?"" :"\r\n";
			$text .= "\r\nHead of Family: ".$_POST["headName".$number];
			$text .= "\r\nMales under 10: ".$_POST["underTenM".$number];
			$text .= "\r\nMales Ten thru fifteen: ".$_POST["tenThruFifteenM".$number];
			$text .= "\r\nMales Sixteen thru Twenty five: ".$_POST["sixteenThruTwentyfiveM".$number];
			$text .= "\r\nMales Twenty six thru Forty four: ".$_POST["twentysixThruFortyfourM".$number];
			$text .= "\r\nMales Forty five and Over: ".$_POST["fortyfiveAndOverM".$number];
			$text .= "\r\nFemales under 10: ".$_POST["underTenF".$number];
			$text .= "\r\nFemales Ten thru fifteen: ".$_POST["tenThruFifteenF".$number];
			$text .= "\r\nFemales Sixteen thru Twenty five: ".$_POST["sixteenThruTwentyfiveF".$number];
			$text .= "\r\nFemales Twentysix thru Forty four: ".$_POST["twentysixThruFortyfourF".$number];
			$text .= "\r\nFemales Forty five and Over: ".$_POST["fortyfiveAndOverF".$number];
			//$text .= "\r\nAll other Free Persons: ".$_POST["otherPersons".$number];
			//$text .= "\r\nSlaves: ".$_POST["slaves".$number];
			$text .= "\r\nSlaves up to 14: ".$_POST["slavesTo14".$number];
			$text .= "\r\nSlaves up to 26: ".$_POST["slavesTo26".$number];
			$text .= "\r\nSlaves up to 45: ".$_POST["slavesTo45".$number];
			$text .= "\r\nSlaves 45 & older: ".$_POST["slaves45Older".$number];
			$text .= "\r\nFree Colored Persons up to 14: ".$_POST["FreeColoredPersonsTo14".$number];
			$text .= "\r\nFree Colored Persons up to 26: ".$_POST["FreeColoredPersonsTo26".$number];
			$text .= "\r\nFree Colored Persons up to 45: ".$_POST["FreeColoredPersonsTo45".$number];
			$text .= "\r\nFree Colored Persons 45 & older: ".$_POST["FreeColoredPersons45Older".$number];
			$text .= "\r\nForeigners: ".$_POST["Foreigners".$number];
			$text .= "\r\nCommerce: ".$_POST["Commerce".$number];
			$text .= "\r\nManufactures: ".$_POST["Manufactures".$number];
			$text .= "\r\nAllOther: ".$_POST["AllOther".$number];
		}

		$citation = array(
			"PAGE"=>"Page: ".$_POST['page'].", Call Number/URL: ".$_POST['CallNumberURL'],
			"QUAY"=>'',
     "DATE"=>!empty($_POST['EnumerationDate'])?$_POST['EnumerationDate']:"1820",
			"TEXT"=>$text,
			"OBJE"=>'',
			"array"=>array(
			'city'=>$_POST['city'],
			'county'=>$_POST['county'],
			'state'=>$_POST['state'],
			'rows'=>$rows));

		return $citation;
    }

}
?>
