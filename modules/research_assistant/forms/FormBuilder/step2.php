function step2() {
		$personid = "";
		for($number = 0; $number < $_POST['numOfRows']; $number++)
		{
			if (!isset($_POST["personid".$number])) $_POST["personid".$number]="";
			$personid .= $_POST["personid".$number].";";
			$_POST["personid".$number] = trim($_POST["personid".$number], '; \r\n\t');
		}
		$_REQUEST['personid'] = $personid;
		$return = $this->processSourceCitation();

		if(empty($return))
		{
		$out = $this->header("module.php?mod=research_assistant&form=%REPLACE%&action=func&func=step3&taskid=" . $_REQUEST['taskid'], "center", "%DESCRIPTION%");
		$out .= $this->editFactsForm(false);
		$out .= $this->footer();
		return $out;
		}
		else
		{
			
		}
	}
