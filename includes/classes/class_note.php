<?php
/**
 * Class file for a Shared Note (NOTE) object
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2009  PGV Development Team.  All rights reserved.
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
 * @subpackage DataModel
 * @version $Id: class_note.php 6642 2009-12-29 16:39:03Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_CLASS_NOTE_PHP', '');

require_once PGV_ROOT.'includes/classes/class_gedcomrecord.php';

class Note extends GedcomRecord {
	// Generate a URL that links to this record
	public function getLinkUrl() {
		return parent::_getLinkUrl('note.php?nid=');
	}

	// The 'name' of a note record is the first line.  This can be
	// somewhat unwieldy if lots of CONC records are used.  Limit to 100 chars
	protected function _addName($type, $value, $gedrec) {
		global $pgv_lang;
		if (UTF8_strlen($value)<100) {
			parent::_addName($type, $value, $gedrec);
		} else {
			parent::_addName($type, UTF8_substr($value, 0, 100).$pgv_lang['ellipsis'], $gedrec);
		}
	}

	// Get an array of structures containing all the names in the record
	public function getAllNames() {
		// Uniquely, the NOTE objects have data in their level 0 record.
		// Hence the REGEX passed in the second parameter
		return parent::_getAllNames('NOTE', '0 @'.PGV_REGEX_XREF.'@');
	}
}
?>
