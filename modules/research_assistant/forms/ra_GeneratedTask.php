<?php
/**
 * phpGedView Research Assistant Tool - ra_GenerateTasks
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  John Finlay and Others
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
 * @subpackage Research_Assistant
 * @version $Id: ra_GeneratedTask.php 4711 2009-01-07 22:33:09Z fisharebest $
 * @author Kris Dymond
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class GeneratedTask
 {
	var $name = '';
	var $desc = '';
	var $id = -1;
	var $personId = '';
	var $sourceId = '';
	
	function GeneratedTask($name, $desc, $id, $personId='', $sourceId='')
	{
		$this->name = $name;
		$this->desc = $desc;
		$this->id = $id;
		$this->personId = $personId;
		$this->sourceId = $sourceId;
	}
	
	function getName()
	{
		return $this->name;
	}
	
	function setName($name="")
	{
		$this->name = $name;
	}
	
	function getDescription()
	{
		return $this->desc;
	}
	
	function setDescription($desc="")
	{
		$this->desc = $desc;
	}
	
	function getDescriptionForHTML()
	{
		return nl2br($this->desc);
	}
	
	function getID()
	{
		return $this->id;
	}
	
	function setID($id)
	{
		$this->id = $id;
	}
	
	function getPersonId()
	{
		return $this->personId;
	}
	
	function setPersonId($personId="")
	{
		$this->personId = $personId;
	}
	
	function getSourceId()
	{
		return $this->sourceId;
	}
	
	function setSourceId($sourceId="")
	{
		$this->sourceId = $sourceId;
	}
	
	function orderby_desc($a, $b)
	{
		$val1 = strtolower($a->getDescription());
		$val2 = strtolower($b->getDescription());
		if($val1 == $val2)
			return 0;
		else
			return ($val1 > $val2) ? 1 : -1;
	}
	
	function orderby_desc_descending($a, $b)
	{
		$val1 = strtolower($a->getDescription());
		$val2 = strtolower($b->getDescription());
		if($val1 == $val2)
			return 0;
		else
			return ($val1 > $val2) ? -1 : 1;
	}
  
	function orderby_name($a, $b)
	{
		return GedcomRecord::Compare($a, $b);
	}
	
	function orderby_name_descending($a, $b)
	{
		return GedcomRecord::Compare($b, $a);
	}
 }
?>
