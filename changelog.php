<?php
/**
 * Display changelog file with clickable bugs and RFEs
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2003  John Finlay and Others
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
 * @subpackage Admin
 * @version $Id: changelog.php 6879 2010-01-30 11:35:46Z fisharebest $
 */

define('PGV_SCRIPT_NAME', 'changelog.php');
require './config.php';

if (!PGV_USER_GEDCOM_ADMIN) {
	header('Location: login.php?url=admin.php');
	exit;
}

$search = @$_GET['search'];
echo '<title>PhpGedView : changelog (', htmlentities($search, ENT_COMPAT, 'UTF-8'), ')</title>';

$text = file_get_contents('changelog.txt');
$wait = @file_get_contents('changelog.local.txt');
$text = $wait.$text;

// disable HTML tags
$text = str_replace('<', '&lt;', $text);
$text = str_replace('>', '&gt;', $text);

// highlight search text (caseless)
if (!empty($search)) {
	$text = preg_replace("/(.*)($search)(.*)\r?\n/i", '<span style="background-color:#DADADA">\\1<span style="background-color:Yellow">\\2</span>\\3</span>', $text);
}

// add link to tracker
$text = preg_replace('/RFE(\d{6,7})/', 'RFE \\1', $text);	// RFE1234567 ==> RFE 1234567
$text = preg_replace('/#(\d{6,7})/', '# \\1', $text);		// #1234567 ==> # 1234567
$text = preg_replace('/\[(\d{6,7})/', '[ \\1', $text);		// [1234567 ==> [ 1234567
$text = preg_replace('/(\d{6,7})\]/', '\\1 ]', $text);		// 1234567] ==> 1234567 ]
$text = preg_replace('/\((\d{6,7})/', '( \\1', $text);		// (1234567 ==> ( 1234567
$text = preg_replace('/(\d{6,7})\)/', '\\1 )', $text);		// 1234567) ==> 1234567 )
$text = preg_replace('/(\d{6,7})\,/', '\\1 ,', $text);		// 1234567, ==> 1234567 ,
$text = preg_replace('/ (\d{6,7}) /', ' <a name=\\1 href=http://sourceforge.net/support/tracker.php?aid=\\1#innerframe>\\1</a> ', $text);

$text = preg_replace('/ \(([-\w]{4,13})\)\r?\n/', ' (<a name=\\1 href=?search=\\1>\\1</a>)<br/>', $text);
$text = str_replace('  ', ' ', $text);

echo '<pre>', $text, '</pre>';
?>
