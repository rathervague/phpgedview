<?php

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$inferences[] = array('local'=>'SURN', 'record'=>'FAMC:HUSB', 'comp'=>'SURN', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'SURN', 'record'=>'FAMC:WIFE', 'comp'=>'SURN', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMC:HUSB', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMC:WIFE', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMC', 'comp'=>'MARR:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMS', 'comp'=>'MARR:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'BIRT:PLAC', 'record'=>'FAMS:SPOUSE', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'OCCU', 'record'=>'FAMC:HUSB', 'comp'=>'OCCU', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'OCCU', 'record'=>'FAMC:WIFE', 'comp'=>'OCCU', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'DEAT:PLAC', 'record'=>'', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'DEAT:PLAC', 'record'=>'FAMS', 'comp'=>'MARR:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'DEAT:PLAC', 'record'=>'FAMS:CHIL', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'DEAT:PLAC', 'record'=>'FAMS:SPOUSE', 'comp'=>'DEAT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'CHR:PLAC', 'record'=>'', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'BAPM:PLAC', 'record'=>'', 'comp'=>'BIRT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'BURI:PLAC', 'record'=>'', 'comp'=>'DEAT:PLAC', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:HUSB', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:WIFE', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:HUSB:FAMC:HUSB', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:WIFE:FAMC:WIFE', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);
$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:WIFE:FAMC:HUSB', 'comp'=>'GIVN', 'value'=>0, 'count'=>0);  
$inferences[] = array('local'=>'GIVN', 'record'=>'FAMC:HUSB:FAMC:WIFE', 'comp'=>'GIVN', 'value'=>0, 'count'=>0); 
?>
