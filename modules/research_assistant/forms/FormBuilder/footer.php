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
		if (!is_null($person)) $out .= '<a id="link_'.$pid.'" href="individual.php?pid='.$pid.'">'.$person->getFullName().'</a> <a id="rem_'.$pid.'" href="#" onclick="clearname(\'personid\', \'link_'.$pid.'\', \''.$pid.'\'); return false;" ><img src="images/remove.gif" border="0" alt="" /><br /></a>';
$out .= '</div>
		<input type="hidden" id="personid'.$i.'" name="personid'.$i.'" size="3" value="'.$pid.'" />';
		//To have the pop up box autopopulate the persons name, simply change the last argument to be the location of the value in the citation array.
		// I.E. $citation['ts_array']['rows'][$i]['PersonsName'] would replace the ''
		$out .= print_findindi_link("personid".$i, "peoplelink".$i, true,false,'');
		$out .= '<br /></td>';
	}
	$out .='</tr></table>';
	$out .= '</td></tr>';

	return $out;
}

function footer() {
	return '</table></form>';
}
