<?php
/**
 * Class file for a Source (SOUR) object
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
 * @subpackage DataModel
 * @version $Id: class_source.php 6642 2009-12-29 16:39:03Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_CLASS_SOURCE_PHP', '');

require_once PGV_ROOT.'includes/classes/class_gedcomrecord.php';

class Source extends GedcomRecord {
	/**
	 * get the author of this source record
	 * @return string
	 */
	public function getAuth() {
		return get_gedcom_value('AUTH', 1, $this->gedrec, '', false);
	}

	// Generate a URL that links to this record
	public function getLinkUrl() {
		return parent::_getLinkUrl('source.php?sid=');
	}

	// Get an array of structures containing all the names in the record
	public function getAllNames() {
		return parent::_getAllNames('TITL', 1);
	}
}
?>
