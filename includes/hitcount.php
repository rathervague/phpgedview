<?php
/**
 * Counts how many hits.
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
 * @subpackage Charts
 * @version $Id: hitcount.php 6879 2010-01-30 11:35:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Only record hits for certain pages
switch (PGV_SCRIPT_NAME) {
case 'index.php':
	switch (safe_GET('ctype', '(user|gedcom)')) {
	case 'user':
		$page_parameter='user:'.PGV_USER_ID;
		break;
	default:
		$page_parameter='gedcom:'.PGV_GED_ID;
		break;
	}
	break;
case 'individual.php':
	$page_parameter=safe_GET('pid', PGV_REGEX_XREF);
	break;
case 'family.php':
	$page_parameter=safe_GET('famid', PGV_REGEX_XREF);
	break;
case 'source.php':
	$page_parameter=safe_GET('sid', PGV_REGEX_XREF);
	break;
case 'source.php':
	$page_parameter=safe_GET('sid', PGV_REGEX_XREF);
	break;
case 'repo.php':
	$page_parameter=safe_GET('rid', PGV_REGEX_XREF);
	break;
case 'note.php':
	$page_parameter=safe_GET('nid', PGV_REGEX_XREF);
	break;
case 'mediaviewer.php':
	$page_parameter=safe_GET('mid', PGV_REGEX_XREF);
	break;
default:
	$page_parameter='';
	break;
}
if ($page_parameter) {
	$hitCount=PGV_DB::prepare(
		"SELECT page_count FROM {$TBLPREFIX}hit_counter".
		" WHERE gedcom_id=? AND page_name=? AND page_parameter=?"
	)->execute(array(PGV_GED_ID, PGV_SCRIPT_NAME, $page_parameter))->fetchOne();
	
	// Only record one hit per session
	if ($page_parameter && empty($_SESSION['SESSION_PAGE_HITS'][PGV_SCRIPT_NAME.$page_parameter])) {
		$_SESSION['SESSION_PAGE_HITS'][PGV_SCRIPT_NAME.$page_parameter]=true;
		if (is_null($hitCount)) {
			$hitCount=1;
			PGV_DB::prepare(
				"INSERT INTO {$TBLPREFIX}hit_counter (gedcom_id, page_name, page_parameter, page_count) VALUES (?, ?, ?, ?)"
			)->execute(array(PGV_GED_ID, PGV_SCRIPT_NAME, $page_parameter, $hitCount));
		} else {
			$hitCount++;
			PGV_DB::prepare(
				"UPDATE {$TBLPREFIX}hit_counter SET page_count=?".
				" WHERE gedcom_id=? AND page_name=? AND page_parameter=?"
			)->execute(array($hitCount, PGV_GED_ID, PGV_SCRIPT_NAME, $page_parameter));
		}
	}
} else {
	$hitCount=1;
}

//replace the numbers with their images
if (array_key_exists('0', $PGV_IMAGES)) {
	for ($i=0;$i<10;$i++) {
		$hitCount = str_replace("$i","<img src=\"".$PGV_IMAGE_DIR."/".$PGV_IMAGES[$i]["digit"]."\" alt=\"pgv_counter\" />","$hitCount");
	}
} else {
	$hitCount="<span class=\"hit-counter\">{$hitCount}</span>";
}

if ($TEXT_DIRECTION=='rtl') {
	$hitCount=getLRM().$hitCount.getLRM();
}
unset($page_name, $page_parameter);
