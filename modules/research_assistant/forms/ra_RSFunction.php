<?php

/**
 * phpGedView Research Assistant Tool - RecordSearch.
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
 * @subpackage Research_Assistant
 * @version $Id: ra_RSFunction.php 6482 2009-11-28 20:35:36Z fisharebest $
 * @author Christopher Stolworthy
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

loadLangFile("research_assistant:lang");

require_once PGV_ROOT.'modules/research_assistant/forms/ra_privacy.php';
require_once PGV_ROOT.'includes/classes/class_person.php';

	//the inferences function will look for correlations
	//and return an array with each probability
	//so, it will have a meaningful index system such as ['FATHER:BIRT:PLAC']
	//to return the probability that an individual will have the same
	//birth place as their father or ['BIRT:MARR:DEAT'] for the probability that
	//an individual will have the same birth, marriage and death place
	//at each index of the array will be a description as well as a percentage liklihood of the given correlation
	function personalinferences($pid) {
		global $TBLPREFIX, $indilist, $famlist;

		$inferences[] = array('local'=>'SURN', 'record'=>'FAMC:HUSB', 'comp'=>'SURN', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'SURN', 'record'=>'FAMC:WIFE', 'comp'=>'SURN', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMC:HUSB', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMC:WIFE', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMC', 'comp'=>'MARR:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'OCCU', 'record'=>'FAMC:HUSB', 'comp'=>'OCCU', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'OCCU', 'record'=>'FAMC:WIFE', 'comp'=>'OCCU', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'DEAT:PLAC', 'record'=>'', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'DEAT:PLAC', 'record'=>'FAMS', 'comp'=>'MARR:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMS', 'comp'=>'MARR:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'DEAT:PLAC', 'record'=>'FAMS:SPOUSE', 'comp'=>'DEAT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMS:SPOUSE', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'CHR:PLAC', 'record'=>'', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'BAPM:PLAC', 'record'=>'', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'BURI:PLAC', 'record'=>'', 'comp'=>'DEAT:PLAC', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:HUSB', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:WIFE', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:HUSB:FAMC:HUSB', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);
		$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:WIFE:FAMC:WIFE', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);

		//Create an array to put our data in
		$myindilist = array();
		//Create a family array to put our family data in
		$myfamlist = array();
		/*@var $person Person */
		//Hit the database so that the person's data is loaded into the cache.
		$person = Person::getInstance($pid);
		//Put the person's information from the cache into our array in the postion of their person ID.
		$myindilist[$pid] = $person;
		//Get the person's family so we can get the children and spouse
		$personsFamily = $person->getSpouseFamilies();
		//Get the person's families where they were a child
		$childFamilies = $person->getChildFamilies();
		foreach($childFamilies as $famid=>$family) {
			$father = $family->getHusband();
			if (!is_null($father)) $personsFamily = array_merge($personsFamily, $father->getChildFamilies());
			$mother = $family->getWife();
			if (!is_null($mother)) $personsFamily = array_merge($personsFamily, $mother->getChildFamilies());
		}
		//Merge the ChildFamilies and the personsFamily array's.
		//This is done simply for easier processing
		$personsFamily = array_merge($personsFamily,$childFamilies);
		//Iterate over the array of Families that was returned
		foreach ($personsFamily as $famid=>$family) {
			$myindilist[$family->getHusbId()]=$family->getHusband();
			$myindilist[$family->getWifeId()]=$family->getWife();
						foreach ($family->getChildren() as $child) {
				$myindilist[$child->getXref()]=$child;
			}
			$myfamlist[] = $family;
		}

		//various counts
		$total = count($indilist);
		$nnCount = 0;
		$tempCount = 0;
		$tempInd = 0;
		$malesCount = 0;
		$femalesCount = 0;

		foreach ($myindilist as $pid=>$indi) {
			if ($indi) {
				//assign surname, gender, birthplace and occupation for the individual
				$gender = $indi->getSex();
				$locals = array();
				foreach($inferences as $pr_id=>$value) {
					//-- get the local value from the the individual record
					if (!isset($locals[$value['local']])) {
						switch ($value['local']) {
						case 'GIVN':
						case 'SURN':
							list($locals['SURN'], $locals['GIVN'])=explode(',', $indi->getSortName());
							break;
						default:
							$locals[$value['local']] = get_gedcom_value($value['local'], 1, $indi->getGedcomRecord(), '', false);
							break;
						}
					}

					$record = getRecord($value['record'],$pid);

					if (!empty($record)) {
						if (strpos($value['comp'], "SURN")!==false) {
							$ct = preg_match("/0 @(.*)@/", $record, $match);
							if ($ct>0) {
								$gid = $match[1];
							$person = Person::getInstance($gid);
							if (!is_null($person)) {
								list($gedval) = explode(',', $person->getSortName());
								if (UTF8_strtolower($locals[$value['local']])==UTF8_strtolower($gedval)) $inferences[$pr_id]['value']++;
								$inferences[$pr_id]['count']++;
							}
						}
					}
						else if (strpos($value['comp'], "GIVN")!==false) {
								$ct = preg_match("/0 @(.*)@/", $record, $match);
								if ($ct>0) {
									$gid = $match[1];
							$person = Person::getInstance($gid);
							if (!is_null($person)) {
									list($dummy, $gedval) = explode(',', $person->getSortName());
									$parts1 = preg_split("/\s+/", $gedval);
									$parts2 = preg_split("/\s+/", $locals['GIVN']);
									foreach($parts1 as $p1=>$part1) {
										foreach($parts2 as $p2=>$part2) {
											if (UTF8_strtolower($part1)==UTF8_strtolower($part2)) $inferences[$pr_id]['value']++;
											$inferences[$pr_id]['count']++;
										}
									}
								}
						}
					}
						else {
							$gedval = get_gedcom_value($value['comp'], 1, $record, '', false);
							if (!empty($gedval) && !empty($locals[$value['local']])) {
								if (UTF8_strtolower($locals[$value['local']])==UTF8_strtolower($gedval)) $inferences[$pr_id]['value']++;
								$inferences[$pr_id]['count']++;
							}
						}
					}
				}
			}
		}

		return $inferences;
	}

	function getRecord($recordTag,$pid)
	{
		global $indilist,$famlist;
		/*@var $per Person*/
		$per = Person::getInstance($pid);
				//-- load up the gedcom record we want to compare the data from
				//-- record defaults to the indis record, after this section runs it will be
				//-- set to the record from the inferences table that we want to compare the value to
				$record = $per->getGedcomRecord();
				//check the array of record types coming in to make sure there is something there
				if ($recordTag!='') {
					//try and split the tag we are searching for in case of a colon.
					$rec_tags = explode(':', $recordTag);
					//iterate over the count of the number of tags
					for($i=0; $i<count($rec_tags); $i++) {
						//set tag to the value in $rec_tags in the position of current loop position
						$tag = $rec_tags[$i];
						//Is the tag for a spouse?
						if ($tag=="SPOUSE") {
							//Get the parents of the person from this record
							$parents = find_parents_in_record($record);
							//if the Husband in the record is the same person as we are looking for
							// then set $id to the Wife's PID
							if ($parents['HUSB']==$pid) $id = $parents['WIFE'];
							//Otherwise set $id to the husbands ID
							else $id = $parents['HUSB'];
							//if we didn't find an ID set the record to nothing
							if (empty($id)) {
								$record = '';
							} else {
								//check and see if the person is in the indilist, if they are
								//set $record to their gedcom
								if (isset($indilist[$id]['gedcom'])) {
									$record = $indilist[$id]['gedcom'];
								}
								//otherwise null the $record
								else {
									$record = '';
								}
							}
						} else {
							$match = array();
							//Try and get the ID of the TAG
							$ct = preg_match("/1 $tag @(.*)@/", $record, $match);
							//if nothing was returned set $record to nothings
							if ($ct==0) {
								$record = "";
							} else {
								//set the ID to element in position 1
								$id = $match[1];
								//if the person exists in the indilist set the $record to them
								if (isset($indilist[$id]['gedcom'])) {
									$record = $indilist[$id]['gedcom'];
								}
								//if the ID exists in the famlist set the record to that
								elseif (isset($famlist[$id]['gedcom'])) {
									$record = $famlist[$id]['gedcom'];
								}
								//otherwise try and find the gedcom record of the ID
								else {
									$record = find_gedcom_record($id, PGV_GED_ID);
								}
							}
						}
					}
				}
				return $record;
	}

	/*
	 * This method will return a multi-dimensional array of the probabilities and fact types,
	 * based on the fact type supplied.
	 * * I.E If you look for a BIRT:PLAC fact you will get back an array that would have in the local array a
	 * .43 chance, and the second index would be Boise, ID
	 * $return['GlobalProb'][0][0] would have the percentage
	 * $return['GlobalProb'][0][1] would have the place
	 * Substitute LocalProb in place of GlobalProb for the localized probabilities
	 * @pid The persons ID
	 * @factType The type of fact you want probabilities for
	 * @return An array that contains two more arrays, one for global inferences and one for local inferences
	 * Both the global and local contain first the probability, and second the value of what you are looking for

	 */
	function singleInference($pid,$factType) {
		global $TBLPREFIX;

		//Run the fact check
		$tempArray = personalinferences($pid);
		//create an array to hold our data to put it in the actual array
		$tempFullArray = array();
		//iterate over the facts that were returned

		foreach($tempArray as $tempKey=>$localValue)
		{

			if(strstr($localValue['local'],$factType))
			{

				if($localValue['count'] != 0 && $localValue['value'] != 0)
				{
					//calculate the probability
					$localProb = $localValue['value'] /$localValue['count'];
				}
				else
				{
					$localProb = 0;
				}

				//add that related fact to our $tempMultiArray
				$factInfer = new FactInference(0,0,$localProb,$localValue['count'],$localValue['local'],$localValue['record'],$localValue['comp'],$pid);

				//if ($localProb>0) {
					//get the related gedcom for the fact type we are looking for
					$relatedGedcom = getRecord($localValue['record'],$pid);
					//get the value of the tag in the related gedcom
				if($factType != "SURN")
				{
					$factRelation =get_gedcom_value($localValue['comp'],1,$relatedGedcom);

					$factInfer->setFactValue($factRelation);
				}
				else
				{
					if($factType == "SURN")
					{
						$person = new Person($relatedGedcom);
						list($factRelation)=explode(',', $person->getListName());
					}
					else if ($factType=='GIVN'){
						$person = new Person($relatedGedcom);
						list($dummy, $factRelation)=explode(',', $person->getListName());
					}
					$factInfer->setFactValue($factRelation);
				}
				//}

				$tempFullArray[] = $factInfer;
			}
		}
		$rows=
			PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}probabilities WHERE pr_file=? AND pr_f_lvl ".PGV_DB::$LIKE." ? ORDER BY (pr_matches/pr_count) DESC")
			->execute(array(PGV_GED_ID, "{$factType}%"))
			->fetchAll();

		//Create an array to hold global inferences
		$globalInference = array();
		//Check and see if global inferences have been run
		foreach ($rows as $row) {
			foreach($tempFullArray as $tempInferKey=>$inferVal) {

				if($inferVal->getFactTag() === $row->pr_f_lvl && $inferVal->getRelationTag() === $row->pr_s_lvl && $inferVal->getCompareTag() === $row->pr_rel) {
					if($row->pr_count != 0) {
						$tempAvg = $row->pr_matches / $row->pr_count;
					} else {
						$tempAvg = 0;
					}
					$inferVal->setGlobalFactPercentage($tempAvg);
					$inferVal->setGlobalFactCount($row->pr_count);
				}
			}
		}
		return $tempFullArray;
	}



	function run($pid)
	{
		//Get the inferences for the data
		$tempResult = personalinferences($pid);
		//Get the global inferences
		$globalInf = getGlobalinferences();

		//Init an array for us to return that is nicely formatted
		$niceData = array();
		//iterate over the results of the inferences
	 foreach($tempResult as $pr_id=>$value) {
		//Init a temporary array to hold data until inserted
		$tempArray = array();
		//Get the probability
		$prob = computeProb($value['count'],$value['value']);
		//add our information to the array
		$tempArray[0] = $value['local'];
		$tempArray[1] = $value['record'];
		$tempArray[2] = $value['comp'];
		$tempArray['LocalCount'] = $value['count'];
		$tempArray["Prob"] = $prob * 100;

		if($globalInf != false)
		{
		foreach($globalInf as $tempKey=>$tempVal)
		{
				if(($tempVal[1] == $value['record']) && ($tempVal[0] == $value['local']) && ($tempVal[2] == $value['comp']))
				{
					$tempArray["GlobalProb"] = $tempVal['GlobalProb'];
					$tempArray["GlobalCount"] = $tempVal['GlobalCount'];
				}
		}
		}
		//Add our array to our nice data array
		$niceData[] = $tempArray;
		 }


		 return $niceData;
	}

	function computeProb($count, $matches)
	{
		if($matches != 0)
		{
		$count = $matches / $count;
		}
		else
		{
			return 0;
		}
		return $count;
	}

	function getGlobalinferences()
	{
		global $TBLPREFIX, $LANGUAGE, $factarray, $pgv_lang;

		$rows=
			PGV_DB::prepare("SELECT * FROM {$TBLPREFIX}probabilities WHERE pr_file=? ORDER BY (pr_matches/pr_count) DESC")
			->execute(array(PGV_GED_ID))
			->fetchAll();

		if (empty($rows)) {
			return false;
		}
		
		$inferenceArray = array();
		foreach ($rows as $row) {
			$tempArray = array();
			$tempArray[] = $row->pr_f_lvl;
			$tempArray[] = $row->pr_s_lvl;
			$tempArray[] = $row->pr_rel;
			if($row->pr_matches != 0 && $row->pr_count != 0) {
				$tempArray["GlobalProb"] = $row->pr_matches / $row->pr_count;
				$tempArray["GlobalCount"] = $row->pr_matches;
			} else {
				$tempArray["GlobalProb"] = 0;
				$tempArray["GlobalCount"] = 0;
			}
			$inferenceArray[]=$tempArray;
		}
		return $inferenceArray;
	}

	function getPartsTranslation($input) {
		global $factarray, $pgv_lang;
		if ($input=="FAMC:HUSB") $input = "father";
		if ($input=="FAMC:WIFE") $input = "mother";
		if ($input=="FAMS:SPOUSE") $input = "spouse";
		$parts = explode(':', $input);
		$out = "";
		foreach($parts as $part) {
			if (isset($factarray[$part])) {
				$out .= $factarray[$part];
			} elseif (isset($pgv_lang[$part])) {
				$out .= $pgv_lang[$part];
			} else {
				$out .= $part;
			}
			$out .= " ";
		}
		return $out;
	}

