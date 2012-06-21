<?php
/**
 * Batch Update plugin for phpGedView - add missing 1 BIRT/DEAT Y
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
 * $Id: birth_y.php 3857 2008-09-13 23:30:24Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class plugin extends base_plugin {
	static function doesRecordNeedUpdate($xref, $gedrec) {
		return !preg_match('/^1\s+'.PGV_EVENTS_BIRT.'\b/m', $gedrec);
	}

	static function updateRecord($xref, $gedrec) {
		return $gedrec."\n1 BIRT Y";
	}
}
