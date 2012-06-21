<?php
/**
 * phpGedView Research Assistant Tool - United States Census 1830 File
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
 * @version $Id: Census1830.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author James Dickinson
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/forms/ra_form.php';
require_once PGV_ROOT.'includes/functions/functions_edit.php';

class Census1830 extends ra_form {

    function header($action, $tableAlign, $heading, $showchoose = false) {
		global $pgv_lang;
		$out = "";
		if ($showchoose) {
			//Row Form
			$out = '<form action="module.php" method="post">';
			$out .= '<input type="hidden" name="mod" value="research_assistant" />' .
					'<input type="hidden" name="action" value="printform" />' .
					'<input type="hidden" name="formname" value="Census1830" />' .
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
        $out .= '<table id="Census1830" class="list_table" align="' . $tableAlign . '">';
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
        $out .= '<td colspan="13" class="descriptionbox" align="center">Free White Males</td>';
        $out .= '<td colspan="13" class="descriptionbox" align="center">Free White Females</td>';

//    Next row of description cells
        $out .= '<tr><td class="descriptionbox">under 5</td><td class="descriptionbox">5 to 10</td>';
        $out .= '<td class="descriptionbox">10 to 15</td><td class="descriptionbox">15 to 20</td><td class="descriptionbox">20 to 30</td>';
        $out .= '<td class="descriptionbox">30 to 40</td><td class="descriptionbox">40 to 50</td>';
        $out .= '<td class="descriptionbox">50 to 60</td><td class="descriptionbox">60 to 70</td><td class="descriptionbox">70 to 80</td>';
        $out .='<td class="descriptionbox">80 to 90</td><td class="descriptionbox">90 to 100</td>';
        $out .= '<td class="descriptionbox">100, &c.</td><td class="descriptionbox">under 5</td><td class="descriptionbox">5 to 10</td>';
        $out .= '<td class="descriptionbox">10 to 15</td><td class="descriptionbox">15 to 20</td><td class="descriptionbox">20 to 30</td>';
        $out .= '<td class="descriptionbox">30 to 40</td><td class="descriptionbox">40 to 50</td>';
        $out .= '<td class="descriptionbox">50 to 60</td><td class="descriptionbox">60 to 70</td><td class="descriptionbox">70 to 80</td>';
        $out .='<td class="descriptionbox">80 to 90</td><td class="descriptionbox">90 to 100</td>';
        $out .= '<td class="descriptionbox">100, &c.</td>';

//    Country, City, Page, Head of Family input boxes
		if(!isset($_REQUEST['numOfRows'])) $_REQUEST['numOfRows'] = 1;
        for($i = 0; $i < $_REQUEST['numOfRows']; $i++){
		$row = array();
		if (isset($citation['ts_array']['rows'][$i])) $row = $citation['ts_array']['rows'][$i];

		$value = "";
		if (isset($row['headName'])) $value = $row['headName'];
	        $out .= '<tr><td class="optionbox"><input name="headName'.$i.'" type="text" size="19" value="'.htmlentities($value).'"></td>';
	//        Free white males input boxes
			$value = "";
		if (isset($row['under5M'])) $value = $row['under5M'];
	        $out .= '<td class="optionbox"><input name="under5M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
		if (isset($row['5Thru10M'])) $value = $row['5Thru10M'];
	        $out .= '<td class="optionbox"><input name="5Thru10M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['10Thru15M'])) $value = $row['10Thru15M'];
	        $out .= '<td class="optionbox"><input name="10Thru15M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['15Thru20M'])) $value = $row['15Thru20M'];
	        $out .= '<td class="optionbox"><input name="15Thru20M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['20Thru30M'])) $value = $row['20Thru30M'];
	        $out .= '<td class="optionbox"><input name="20Thru30M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['30Thru40M'])) $value = $row['30Thru40M'];
	        $out .= '<td class="optionbox"><input name="30Thru40M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['40Thru50M'])) $value = $row['40Thru50M'];
	        $out .= '<td class="optionbox"><input name="40Thru50M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['50Thru60M'])) $value = $row['50Thru60M'];
	        $out .= '<td class="optionbox"><input name="50Thru60M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['60Thru70M'])) $value = $row['60Thru70M'];
	        $out .= '<td class="optionbox"><input name="60Thru70M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['70Thru80M'])) $value = $row['70Thru80M'];
	        $out .= '<td class="optionbox"><input name="70Thru80M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['80Thru90M'])) $value = $row['80Thru90M'];
	        $out .= '<td class="optionbox"><input name="80Thru90M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['90Thru100M'])) $value = $row['90Thru100M'];
	        $out .= '<td class="optionbox"><input name="90Thru100M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['100upM'])) $value = $row['100upM'];
	        $out .= '<td class="optionbox"><input name="100upM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';

	//    Free white females input boxes
			$value = "";
		if (isset($row['under5F'])) $value = $row['under5F'];
	        $out .= '<td class="optionbox"><input name="under5F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['5Thru10F'])) $value = $row['5Thru10F'];
	        $out .= '<td class="optionbox"><input name="5Thru10F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['10Thru15F'])) $value = $row['10Thru15F'];
	        $out .= '<td class="optionbox"><input name="10Thru15F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['15Thru20F'])) $value = $row['15Thru20F'];
	        $out .= '<td class="optionbox"><input name="15Thru20F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
		if (isset($row['20Thru30F'])) $value = $row['20Thru30F'];
	        $out .= '<td class="optionbox"><input name="20Thru30F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['30Thru40F'])) $value = $row['30Thru40F'];
	        $out .= '<td class="optionbox"><input name="30Thru40F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['40Thru50F'])) $value = $row['40Thru50F'];
	        $out .= '<td class="optionbox"><input name="40Thru50F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['50Thru60F'])) $value = $row['50Thru60F'];
	        $out .= '<td class="optionbox"><input name="50Thru60F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['60Thru70F'])) $value = $row['60Thru70F'];
	        $out .= '<td class="optionbox"><input name="60Thru70F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['70Thru80F'])) $value = $row['70Thru80F'];
	        $out .= '<td class="optionbox"><input name="70Thru80F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['80Thru90F'])) $value = $row['80Thru90F'];
	        $out .= '<td class="optionbox"><input name="80Thru90F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['90Thru100F'])) $value = $row['90Thru100F'];
	        $out .= '<td class="optionbox"><input name="90Thru100F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['100upF'])) $value = $row['100upF'];
	        $out .= '<td class="optionbox"><input name="100upF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$out .= '</tr><tr>';
			$out .= '<td colspan="6" class="descriptionbox" align="center">Male Slaves</td>';
			$out .= '<td colspan="6" class="descriptionbox" align="center">Female Slaves</td>';
			$out .= '<td colspan="6" class="descriptionbox" align="center">Free Male Colored Persons</td>';
			$out .= '<td colspan="9" class="descriptionbox" align="center">Free Female Colored Persons</td></tr><tr>';

		$out .= '<td class="descriptionbox">Under 10</td><td class="descriptionbox">10 to 24</td><td class="descriptionbox">24 to 36</td>';
        $out .= '<td class="descriptionbox">36 to 55</td><td class="descriptionbox">55 to 100</td>';
        $out .= '<td class="descriptionbox">100 & C.</td>';
        $out .= '<td class="descriptionbox">Under 10</td><td class="descriptionbox">10 to 24</td><td class="descriptionbox">24 to 36</td>';
        $out .= '<td class="descriptionbox">36 to 55</td><td class="descriptionbox">55 to 100</td>';
        $out .= '<td class="descriptionbox">100 & C.</td>';
         $out .= '<td class="descriptionbox">Under 10</td><td class="descriptionbox">10 to 24</td><td class="descriptionbox">24 to 36</td>';
        $out .= '<td class="descriptionbox">36 to 55</td><td class="descriptionbox">55 to 100</td>';
        $out .= '<td class="descriptionbox">100 & C.</td>';
        $out .= '<td class="descriptionbox">Under 10</td><td class="descriptionbox">10 to 24</td><td class="descriptionbox">24 to 36</td>';
        $out .= '<td class="descriptionbox">36 to 55</td><td class="descriptionbox">55 to 100</td>';
        $out .= '<td class="descriptionbox">100 & C.</td></tr><tr>';


	//    Other Persons and Slaves input boxes
	        $value = "";
		if (isset($row['slavesUnder10M'])) $value = $row['slavesUnder10M'];
	        $out .= '<td class="optionbox"><input name="slavesUnder10M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['slaves10To24M'])) $value = $row['slaves10To24M'];
	        $out .= '<td class="optionbox"><input name="slaves10To24M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['slaves24To36M'])) $value = $row['slaves24To36M'];
	        $out .= '<td class="optionbox"><input name="slaves24To36M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['slaves36To55M'])) $value = $row['slaves36To55M'];
	        $out .= '<td class="optionbox"><input name="slaves36To55M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['slaves55To100M'])) $value = $row['slaves55To100M'];
	        $out .= '<td class="optionbox"><input name="slaves55To100M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
		if (isset($row['slaves100upM'])) $value = $row['slaves100upM'];
	        $out .= '<td class="optionbox"><input name="slaves100upM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['slavesUnder10F'])) $value = $row['slavesUnder10F'];
	        $out .= '<td class="optionbox"><input name="slavesUnder10F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['slaves10To24F'])) $value = $row['slaves10To24F'];
	        $out .= '<td class="optionbox"><input name="slaves10To24F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['slaves24To36F'])) $value = $row['slaves24To36F'];
	        $out .= '<td class="optionbox"><input name="slaves24To36F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['slaves36To55F'])) $value = $row['slaves36To55F'];
	        $out .= '<td class="optionbox"><input name="slaves36To55F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['slaves55To100F'])) $value = $row['slaves55To100F'];
	        $out .= '<td class="optionbox"><input name="slaves55To100F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['slaves100upF'])) $value = $row['slaves100upF'];
	        $out .= '<td class="optionbox"><input name="slaves100upF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';

	// Free Colored Persons input boxes
			$value = "";
		if (isset($row['FreeSlavesUnder10M'])) $value = $row['FreeSlavesUnder10M'];
	        $out .= '<td class="optionbox"><input name="FreeSlavesUnder10M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
		if (isset($row['FreeSlaves10To24M'])) $value = $row['FreeSlaves10To24M'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves10To24M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['FreeSlaves24To36M'])) $value = $row['FreeSlaves24To36M'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves24To36M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['FreeSlaves36To55M'])) $value = $row['FreeSlaves36To55M'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves36To55M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['FreeSlaves55To100M'])) $value = $row['FreeSlaves55To100M'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves55To100M'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['FreeSlaves100upM'])) $value = $row['FreeSlaves100upM'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves100upM'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['FreeSlavesUnder10F'])) $value = $row['FreeSlavesUnder10F'];
	        $out .= '<td class="optionbox"><input name="FreeSlavesUnder10F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['FreeSlaves10To24F'])) $value = $row['FreeSlaves10To24F'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves10To24F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['FreeSlaves24To36F'])) $value = $row['FreeSlaves24To36F'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves24To36F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['FreeSlaves36To55F'])) $value = $row['FreeSlaves36To55F'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves36To55F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['FreeSlaves55To100F'])) $value = $row['FreeSlaves55To100F'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves55To100F'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
	       $value = "";
		if (isset($row['FreeSlaves100upF'])) $value = $row['FreeSlaves100upF'];
	        $out .= '<td class="optionbox"><input name="FreeSlaves100upF'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td></tr><tr>';

	         $out .= '<td class="descriptionbox" align="center" rowspan="2">Total</td>';
        $out .= '<td colspan="5" class="descriptionbox" align="center">White Persons included in foregoing.</td>';
        $out .= '<td colspan="15" class="descriptionbox" align="center">Slaves and Colored Persons, included in foregoing.</td></tr><tr>';

          $out .= '<td class="descriptionbox" colspan="2">Who are Deaf & Dumb,<br /> under 14 of age</td>';
        $out .= '<td class="descriptionbox" colspan="3">Who are Deaf & Dumb,<br /> of the age of 14 and under 25</td>';
        $out .= '<td class="descriptionbox" colspan="2">Who are Deaf 25 and up</td>';
        $out .= '<td class="descriptionbox" colspan="2">Who are Blind</td>';
        $out .= '<td class="descriptionbox" colspan="3">ALIENS - Foreigners<br />not naturalized</td>';
        $out .= '<td class="descriptionbox" colspan="2">Who are Deaf & Dumb,<br /> under 14 of age</td>';
        $out .= '<td class="descriptionbox" colspan="2">Who are Deaf & Dumb,<br /> of the age of 14 and under 25</td>';
        $out .= '<td class="descriptionbox" colspan="2">Who are Deaf 25 and up</td>';
        $out .= '<td class="descriptionbox" colspan="2">Who are Blind</td></tr><tr>';

         //Other inputs

	        $value = "";
		if (isset($row['Total'])) $value = $row['Total'];
	        $out .= '<td class="optionbox"><input name="Total'.$i.'" type="text" size="4" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['DeafDumbUnder14'])) $value = $row['DeafDumbUnder14'];
	        $out .= '<td class="optionbox" colspan="2"><input name="DeafDumbUnder14'.$i.'" type="text" size="15" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['DeafDumb14to25'])) $value = $row['DeafDumb14to25'];
	        $out .= '<td class="optionbox" colspan="3"><input name="DeafDumb14to25'.$i.'" type="text" size="23" value="'.htmlentities($value).'"></td>';
			$value = "";
		if (isset($row['Deaf25andUp'])) $value = $row['Deaf25andUp'];
	        $out .= '<td class="optionbox" colspan="2"><input name="Deaf25andUp'.$i.'" type="text" size="16" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['Blind'])) $value = $row['Blind'];
	        $out .= '<td class="optionbox" colspan="2"><input name="Blind'.$i.'" type="text" size="10" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['ALIENS'])) $value = $row['ALIENS'];
	        $out .= '<td class="optionbox" colspan="3"><input name="ALIENS'.$i.'" type="text" size="14" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['DeafDumbUnder14Slaves'])) $value = $row['DeafDumbUnder14Slaves'];
	        $out .= '<td class="optionbox" colspan="2"><input name="DeafDumbUnder14Slaves'.$i.'" type="text" size="16" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['DeafDumb14to25Slaves'])) $value = $row['DeafDumb14to25Slaves'];
	        $out .= '<td class="optionbox" colspan="2"><input name="DeafDumb14to25Slaves'.$i.'" type="text" size="23" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['Deaf25andUpSlaves'])) $value = $row['Deaf25andUpSlaves'];
	        $out .= '<td class="optionbox" colspan="2"><input name="Deaf25andUpSlaves'.$i.'" type="text" size="16" value="'.htmlentities($value).'"></td>';
	        $value = "";
		if (isset($row['BlindSlaves'])) $value = $row['BlindSlaves'];
	        $out .= '<td class="optionbox" colspan="2"><input name="BlindSlaves'.$i.'" type="text" size="10" value="'.htmlentities($value).'"></td>';
        }
        $out .= '</table></td></tr>';
        return $out;
    }

    function footer() {
        return '</table></form>';
    }

    function display_form() {
        $out = $this->header("module.php?mod=research_assistant&form=Census1830&action=func&func=step2&taskid=".$_REQUEST['taskid'], "center", "1830 United States Federal Census", true);
        $out .= $this->sourceCitationForm(5);
        //$out .= $this->content();
        $out .= $this->footer();
        return $out;
    }

  function step2() {
		$this->processSourceCitation();

		$out = $this->header("module.php?mod=research_assistant&form=Census1830&action=func&func=step3&taskid=" . $_REQUEST['taskid'], "center", "1830 United States Federal Census");
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
		$factrec .=!empty($_POST['EnumerationDate'])?$_POST['EnumerationDate']:"1830";
		$factrec .= "\r\n2 PLAC ".$_POST['city'].", ".$_POST['county'].", ".$_POST['state'].", USA";

		$people = $this->getPeople();
		$pids = array_keys($people);
		//-- store the fact associations in the database
		PGV_DB::prepare("INSERT INTO {$TBLPREFIX}taskfacts (tf_id, tf_t_id, tf_factrec, tf_people, tf_multiple, tf_type) VALUES (?, ?, ?, ?, ?, ?)")->execute(array(get_next_id("taskfacts", "tf_id"), $_REQUEST['taskid'], $factrec, implode(";", $pids), 'Y', 'indi'));

		$rows = array();
		$text = $_POST['city'].", ".$_POST['county'].", ".$_POST['state'].", 1830 US Census";
		for($number = 0; $number < $_REQUEST['numOfRows']; $number++)
		{
			$rows[$number] = array(
			'headName'=>$_POST["headName".$number],
			'under5M'=>$_POST["under5M".$number],
			'5Thru10M'=>$_POST["5Thru10M".$number],
			"10Thru15M"=>$_POST["10Thru15M".$number],
			"15Thru20M"=>$_POST["15Thru20M".$number],
			"20Thru30M"=>$_POST["20Thru30M".$number],
			"30Thru40M"=>$_POST["30Thru40M".$number],
			"40Thru50M"=>$_POST["40Thru50M".$number],
			"50Thru60M"=>$_POST["50Thru60M".$number],
			"60Thru70M"=>$_POST["60Thru70M".$number],
			"70Thru80M"=>$_POST["70Thru80M".$number],
			"80Thru90M"=>$_POST["80Thru90M".$number],
			"90Thru100M"=>$_POST["90Thru100M".$number],
			"100upM"=>$_POST["100upM".$number],
			"under5F"=>$_POST["under5F".$number],
			"5Thru10F"=>$_POST["5Thru10F".$number],
			"10Thru15F"=>$_POST["10Thru15F".$number],
			"15Thru20F"=>$_POST["15Thru20F".$number],
			"20Thru30F"=>$_POST["20Thru30F".$number],
			"30Thru40F"=>$_POST["30Thru40F".$number],
			"40Thru50F"=>$_POST["40Thru50F".$number],
			"50Thru60F"=>$_POST["50Thru60F".$number],
			"60Thru70F"=>$_POST["60Thru70F".$number],
			"70Thru80F"=>$_POST["70Thru80F".$number],
			"80Thru90F"=>$_POST["80Thru90F".$number],
			"90Thru100F"=>$_POST["90Thru100F".$number],
			"100upF"=>$_POST["100upF".$number],
			"slavesUnder10M"=>$_POST["slavesUnder10M".$number],
			"slaves10To24M"=>$_POST["slaves10To24M".$number],
			"slaves24To36M"=>$_POST["slaves24To36M".$number],
			"slaves36To55M"=>$_POST["slaves36To55M".$number],
			"slaves55To100M"=>$_POST["slaves55To100M".$number],
			"slaves100upM"=>$_POST["slaves100upM".$number],
			"slavesUnder10F"=>$_POST["slavesUnder10F".$number],
			"slaves10To24F"=>$_POST["slaves10To24F".$number],
			"slaves24To36F"=>$_POST["slaves24To36F".$number],
			"slaves36To55F"=>$_POST["slaves36To55F".$number],
			"slaves55To100F"=>$_POST["slaves55To100F".$number],
			"slaves100upF"=>$_POST["slaves100upF".$number],
			"FreeSlavesUnder10M"=>$_POST["FreeSlavesUnder10M".$number],
			"FreeSlaves10To24M"=>$_POST["FreeSlaves10To24M".$number],
			"FreeSlaves24To36M"=>$_POST["FreeSlaves24To36M".$number],
			"FreeSlaves36To55M"=>$_POST["FreeSlaves36To55M".$number],
			"FreeSlaves55To100M"=>$_POST["FreeSlaves55To100M".$number],
			"FreeSlaves100upM"=>$_POST["FreeSlaves100upM".$number],
			"FreeSlavesUnder10F"=>$_POST["FreeSlavesUnder10F".$number],
			"FreeSlaves10To24F"=>$_POST["FreeSlaves10To24F".$number],
			"FreeSlaves24To36F"=>$_POST["FreeSlaves24To36F".$number],
			"FreeSlaves36To55F"=>$_POST["FreeSlaves36To55F".$number],
			"FreeSlaves55To100F"=>$_POST["FreeSlaves55To100F".$number],
			"FreeSlaves100upF"=>$_POST["FreeSlaves100upF".$number],
			"Total"=>$_POST["Total".$number],
			"DeafDumbUnder14"=>$_POST["DeafDumbUnder14".$number],
			"DeafDumb14to25"=>$_POST["DeafDumb14to25".$number],
			"90Thru100F"=>$_POST["Deaf25andUp".$number],
			"Deaf25andUp"=>$_POST["90Thru100F".$number],
			"Blind"=>$_POST["Blind".$number],
			"ALIENS"=>$_POST["ALIENS".$number],
			"DeafDumbUnder14Slaves"=>$_POST["DeafDumbUnder14Slaves".$number],
			"DeafDumb14to25Slaves"=>$_POST["Deaf25andUpSlaves".$number],
			"BlindSlaves"=>$_POST["BlindSlaves".$number]
			);

			$text .=$number==0?"" :"\r\n";
			$text .= "\r\nHead of Family: ".$_POST["headName".$number];
			$text .= "\r\nMales under 5: ".$_POST["under5M".$number];
			$text .= "\r\nMales 5 thru 10: ".$_POST["5Thru10M".$number];
			$text .= "\r\nMales 10 thru 15: ".$_POST["10Thru15M".$number];
			$text .= "\r\nMales 15 thru 20: ".$_POST["15Thru20M".$number];
			$text .= "\r\nMales 20 thru 30: ".$_POST["20Thru30M".$number];
			$text .= "\r\nMales 30 thru 40: ".$_POST["30Thru40M".$number];
			$text .= "\r\nMales 40 thru 50: ".$_POST["40Thru50M".$number];
			$text .= "\r\nMales 50 thru 60: ".$_POST["50Thru60M".$number];
			$text .= "\r\nMales 60 thru 70: ".$_POST["60Thru70M".$number];
			$text .= "\r\nMales 80 thru 90: ".$_POST["80Thru90M".$number];
			$text .= "\r\nMales 90 thru 100: ".$_POST["90Thru100M".$number];
			$text .= "\r\nMales 100 & over: ".$_POST["100upM".$number];
			$text .= "\r\nFemales under 5: ".$_POST["under5F".$number];
			$text .= "\r\nFemales 5 thru 10: ".$_POST["5Thru10F".$number];
			$text .= "\r\nFemales 10 thru 15: ".$_POST["10Thru15F".$number];
			$text .= "\r\nFemales 15 thru 20: ".$_POST["15Thru20F".$number];
			$text .= "\r\nFemales 20 thru 30: ".$_POST["20Thru30F".$number];
			$text .= "\r\nFemales 30 thru 40: ".$_POST["30Thru40F".$number];
			$text .= "\r\nFemales 40 thru 50: ".$_POST["40Thru50F".$number];
			$text .= "\r\nFemales 50 thru 60: ".$_POST["50Thru60F".$number];
			$text .= "\r\nFemales 60 thru 70: ".$_POST["60Thru70F".$number];
			$text .= "\r\nFemales 70 thru 80: ".$_POST["70Thru80F".$number];
			$text .= "\r\nFeamles 80 thru 90: ".$_POST["80Thru90F".$number];
			$text .= "\r\nFemales 90 thru 100: ".$_POST["90Thru100F".$number];
			$text .= "\r\nFemales 100 and up: ".$_POST["100upF".$number];
			$text .= "\r\nMale Slaves under 10: ".$_POST["slavesUnder10M".$number];
			$text .= "\r\nMale Slaves 10 to 24: ".$_POST["slaves10To24M".$number];
			$text .= "\r\nMale Slaves 24 to 36: ".$_POST["slaves24To36M".$number];
			$text .= "\r\nMale Slaves 36 to 55: ".$_POST["slaves36To55M".$number];
			$text .= "\r\nMale Slaves 55 to 100: ".$_POST["slaves55To100M".$number];
			$text .= "\r\nMale Slaves 100 and up: ".$_POST["slaves100upM".$number];
			$text .= "\r\nFemale Slaves under 10: ".$_POST["slavesUnder10F".$number];
			$text .= "\r\nFemale Slaves 10 to 24: ".$_POST["slaves10To24F".$number];
			$text .= "\r\nFemale Slaves 24 to 36: ".$_POST["slaves24To36F".$number];
			$text .= "\r\nFemale Slaves 36 to 55: ".$_POST["slaves36To55F".$number];
			$text .= "\r\nFemale Slaves 55 to 100: ".$_POST["slaves55To100F".$number];
			$text .= "\r\nFemale Slaves 100 and up: ".$_POST["slaves100upF".$number];
			$text .= "\r\nFree male slaves under 10: ".$_POST["FreeSlavesUnder10M".$number];
			$text .= "\r\nFree male slaves 10 to 24: ".$_POST["FreeSlaves10To24M".$number];
			$text .= "\r\nFree male slaves 24 to 36: ".$_POST["FreeSlaves24To36M".$number];
			$text .= "\r\nFree male slaves 36 to 55: ".$_POST["FreeSlaves36To55M".$number];
			$text .= "\r\nFree male slaves 55 to 100: ".$_POST["FreeSlaves55To100M".$number];
			$text .= "\r\nFree male slaves 100 and up: ".$_POST["FreeSlaves100upM".$number];
			$text .= "\r\nFree female slaves under 10: ".$_POST["FreeSlavesUnder10F".$number];
			$text .= "\r\nFree female slaves 10 to 24: ".$_POST["FreeSlaves10To24F".$number];
			$text .= "\r\nFree female slaves 24 to 36: ".$_POST["FreeSlaves24To36F".$number];
			$text .= "\r\nFree female slaves 36 to 55: ".$_POST["FreeSlaves36To55F".$number];
			$text .= "\r\nFree female slaves 55 to 100: ".$_POST["FreeSlaves55To100F".$number];
			$text .= "\r\nFree female slaves 100 and up: ".$_POST["FreeSlaves100upF".$number];
			$text .= "\r\nTotal: ".$_POST["Total".$number];
			$text .= "\r\nDeaf Dumb under 14: ".$_POST["DeafDumbUnder14".$number];
			$text .= "\r\nDeaf Dumb 14 to 25: ".$_POST["DeafDumb14to25".$number];
			$text .= "\r\nDeaf 25 and up: ".$_POST["Deaf25andUp".$number];
			$text .= "\r\nBlind: ".$_POST["Blind".$number];
			$text .= "\r\nALIENS: ".$_POST["ALIENS".$number];
			$text .= "\r\nDeaf Dumb slaves under 14: ".$_POST["DeafDumbUnder14Slaves".$number];
			$text .= "\r\nDeaf Dumb slaves 14 to 25: ".$_POST["DeafDumb14to25Slaves".$number];
			$text .= "\r\nDeaf Dumb slaves 25 and up: ".$_POST["Deaf25andUpSlaves".$number];
			$text .= "\r\nBlind Slaves: ".$_POST["BlindSlaves".$number];
		}

		$citation = array(
			"PAGE"=>"Page: ".$_POST['page'].", Call Number/URL: ".$_POST['CallNumberURL'],
			"QUAY"=>'',
			"DATE"=>!empty($_POST['EnumerationDate'])?$_POST['EnumerationDate']:"1830",
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
