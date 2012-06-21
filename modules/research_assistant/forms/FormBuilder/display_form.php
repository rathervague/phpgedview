function display_form() {
	$out = $this->header("module.php?mod=research_assistant&form=%REPLACE%&action=func&func=step2&taskid=".$_REQUEST['taskid'], "center", "%DESCRIPTION%", true);
	$out .= $this->sourceCitationForm(5, false);
	//$out .= $this->content();
	$out .= $this->footer();
	return $out;
}
