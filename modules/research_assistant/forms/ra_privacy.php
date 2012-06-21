<?php
/*
 * Created on May 18, 2006
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

 global $PRIV_HIDE, $PRIV_PUBLIC, $PRIV_USER, $PRIV_NONE;
 
 $SHOW_MY_TASKS              = $PRIV_USER;
 
 $SHOW_ADD_TASK              = $PRIV_USER;
 
 $SHOW_AUTO_GEN_TASK         = $PRIV_USER;
 
 $SHOW_VIEW_FOLDERS          = $PRIV_USER;
 
 $SHOW_ADD_FOLDER            = $PRIV_USER;
 
 $SHOW_ADD_UNLINKED_SOURCE   = $PRIV_USER;
  
 $SHOW_VIEW_PROBABILITIES    = $PRIV_USER;
?>
