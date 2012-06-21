

	
	

	
	for($number = 0; $number < $_POST['numOfRows']; $number++)
		{
			
			
			
		
			$text .= "\r\n";
			if (!empty($_POST["House".$number])) $text .= "Dwelling number: ".$_POST["House".$number];
			if (!empty($_POST["Families".$number])) $text .= " Family number: ".$_POST["Families".$number];
			if (!empty($_POST["NameOfPeople".$number])) $text .= " Name: ".$_POST["NameOfPeople".$number];
			if (!empty($_POST["Race".$number])) $text .= ", Color: ".$_POST["Race".$number];
			if (!empty($_POST["Gender".$number])) $text .= ", Gender: ".$_POST["Gender".$number];
			if (!empty($_POST["Age".$number])) $text .= ", Age: ".$_POST["Age".$number];
			if (!empty($_POST["Month".$number])) $text .= ", Month: ".$_POST["Month".$number];
			if (!empty($_POST["Relationship".$number])) $text .= ", Relationship: ".$_POST["Relationship".$number];
			if (!empty($_POST["Single".$number])) $text .= ", ".$_POST["Single".$number];
			if (!empty($_POST["Married".$number])) $text .= ", ".$_POST["Married".$number];
			if (!empty($_POST["WidowedDivorced".$number])) $text .= ", ".$_POST["WidowedDivorced".$number];
			if (!empty($_POST["Trade".$number])) $text .= ", Profession, Occupation or Trade: ".$_POST["Trade".$number];
			if (!empty($_POST["TimeEmployed".$number])) $text .= ", Number of months employed: ".$_POST["TimeEmployed".$number];
			if (!empty($_POST["Disablity".$number])) $text .= ", ".$_POST["Disablity".$number];
			if (!empty($_POST["Blind".$number])) $text .= ", ".$_POST["Blind".$number];
			if (!empty($_POST["Deaf".$number])) $text .= ", ".$_POST["Deaf".$number];
			if (!empty($_POST["Idiotic".$number])) $text .= ", ".$_POST["Idiotic".$number];
			if (!empty($_POST["Insane".$number])) $text .= ", ".$_POST["Insane".$number];
			if (!empty($_POST["Maimed".$number])) $text .= ", ".$_POST["Maimed".$number];
			if (!empty($_POST["School".$number])) $text .= ", ".$_POST["School".$number];
			if (!empty($_POST["Read".$number])) $text .= ", ".$_POST["Read".$number];
			if (!empty($_POST["Write".$number])) $text .= ", ".$_POST["Write".$number];
			if (!empty($_POST["PlaceOfBirth".$number])) $text .= ", Place of birth: ".$_POST["PlaceOfBirth".$number];
			if (!empty($_POST["FathersPlaceOfBirth".$number])) $text .= ", Father's Place of birth: ".$_POST["FathersPlaceOfBirth".$number];
			if (!empty($_POST["MothersPlaceOfBirth".$number])) $text .= ", Mother's Place of birth: ".$_POST["MothersPlaceOfBirth".$number];
			
		}

		$citation = array(
			"PAGE"=>"Page: ".$_POST['page'].", Call Number/URL: ".$_POST['CallNumberURL'], 
			"QUAY"=>'', 
			"DATE"=>!empty($_POST['EnumerationDate'])?$_POST['EnumerationDate']:"1880", 
			"TEXT"=>$text, 
			"OBJE"=>$_POST['OBJE'],
			"array"=>array(
			'city'=>$_POST['city'],
			'county'=>$_POST['county'],
			'state'=>$_POST['state'],
			'rows'=>$rows));
		
		return $citation;
	}

}
