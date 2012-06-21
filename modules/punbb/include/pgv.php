<?php
function genurl($url, $header=false, $print=false)
{
	if($header){$sep = '&';}else{$sep = '&amp;';}
	$parts = @parse_url($url);
	if($parts === false){return 'index.php';}
	$action = basename($parts['path'], '.php');
	if(isset($parts['query'])){$query = "{$sep}{$parts['query']}";}else{$query = '';}
	if(isset($parts['fragment'])){$frag = "#{$parts['fragment']}";}else{$frag = '';}
	$modurl = 'module.php?mod='.PUN_MOD_NAME."{$sep}pgvaction={$action}{$query}{$frag}";
	if($print){print $modurl;}else{return $modurl;}
}
