<?php
/**
 * Batch Update plugin for phpGedView - fix spacing in names, particularly that before/after the surname slashes
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 Greg Roach.  All rights reserved.
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
 * @subpackage Module
 * $Id: name_format.php 6135 2009-09-25 22:06:03Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class plugin extends base_plugin {
	static function doesRecordNeedUpdate($xref, $gedrec) {
		return
			preg_match('/^(?:1 NAME|2 _MARNM|2 _AKA) [^\/\n]*\/[^\/\n]*$/m', $gedrec) ||
			preg_match('/^(?:1 NAME|2 _MARNM|2 _AKA) [^\/\n]*[^\/ ]\//m', $gedrec);
	}

	static function updateRecord($xref, $gedrec) {
		return preg_replace(
			array(
				'/^((?:1 NAME|2 _MARNM|2 _AKA) [^\/\n]*\/[^\/\n]*)$/m',
				'/^((?:1 NAME|2 _MARNM|2 _AKA) [^\/\n]*[^\/ ])(\/)/m'
			),
			array(
				'$1/',
				'$1 $2'
			),
			$gedrec
		);
	}
}
