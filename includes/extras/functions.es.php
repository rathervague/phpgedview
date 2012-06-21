<?php
/**
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.
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
 * @version $Id: functions.es.php 5867 2009-07-08 20:29:12Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_FUNCTIONS_ES_PHP', '');

// Localise the AGNC fact.
function fact_AGNC_localisation_es($fact, $main_fact) {
	global $factarray;

	if ($main_fact == "CHR") {
		$factarray[$fact] = "Parroquia";
	}
}

// localise century (uppercase roman numerals are customarily used)
// simple version, needs fixing for year 10.000 and later
// unclear what to do for negative centuries, the calling code
// seems not to support this at all, it is unlikely to matter
function century_localisation_es($n) {
	$ha = array('','C','CC','CCC','CD','D','DC','DCC','DCCC','CM');
	$ta = array('','X','XX','XXX','XL','L','LX','LXX','LXXX','XC'); 
	$ua = array('','I','II','III','IV','V','VI','VII','VIII','IX'); 
	$d = (int) ($n / 100);
	$n = $n % 100;
	$r = $ha[$d]; 
	$d = (int) ($n / 10);
	$n = $n % 10;
	$r .= $ta[$d]; 
	$d = $n;
	$r .= $ua[$d]; 
        return $r;
}

// Create an ordinal suffix for a number.
// This is only used for dates, so it is only needed in the masculine form
// It is unlikely to be used in Spanish, though, since ordinals for days
// are not used
function ordinal_suffix_es($n) {
        return 'º';
}

// This is only called from relationship.php and the context is inside
// a sentence, so it should not start with an uppercase letter.
// Most, if not all, strings used for $relationshipDescription
// start with an uppercase letter, so we fix it here
function getRelationshipText_es($relationshipDescription, $node, $pid1, $pid2) {
        if ($relationshipDescription != false) {
                return UTF8_strtolower($relationshipDescription);
        }
        return false;    
}

?>
