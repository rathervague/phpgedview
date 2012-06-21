<?php
/**
 * Class file for a single fact inference
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007 John Finlay and Others
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
 * @version $Id: ra_RSSingleFactClass.php 4711 2009-01-07 22:33:09Z fisharebest $
 * @author Christopher Stolworthy
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class FactInference{
	
	var $globalFactPercentage;
	var $globalFactCount;
	var $localFactPercentage;
	var $localFactCount;
	var $pid;
	var $factType;
	var $factRelation;
	var $compareFact;
	var $factValue;
	
	function FactInference($globalPercentage,$globalCount,$localPercentage,$localCount,$factTag,$relation,$compare,$pid,$factVal = "")
	{
		$this->globalFactPercentage = $globalPercentage;
		$this->localFactPercentage = $localPercentage;
		$this->factType = $factTag;
		$this->factRelation = $relation;
		$this->compareFact = $compare;
		$this->localFactCount = $localCount;
		$this->globalFactCount = $globalCount;
		$this->pid = $pid;
		
	}
	
	function getFactValue()
	{
		if(isset($this->factValue))
		{
		return $this->factValue;
		}
		else
		{
			return "";
		}
	}
	
	function setFactValue($factVal)
	{
		$this->factValue = $factVal;
	}
	
	function setGlobalFactPercentage($factPerc)
	{
		$this->globalFactPercentage = $factPerc;
	}
	
	function setGlobalFactCount($factCount)
	{
		$this->globalFactCount = $factCount;
	}
	
	function getCompareTag()
	{
		return $this->compareFact;
	}
	
	function getRelationTag()
	{
		return $this->factRelation;
	}
	
	function getFactTag()
	{
		return $this->factType;
	}
	
	function getLocalPercentage()
	{
		return $this->localFactPercentage;
	}
	
	function getGlobalPercentage()
	{
		return $this->globalFactPercentage;
	}
	
	function getAverage()
	{
		global $pgv_lang;
		
		if($this->globalFactPercentage != 0 && $this->localFactPercentage != 0)
		{
			return (($this->globalFactPercentage + $this->localFactPercentage) /2);
		}
		else
		{
			if($this->globalFactPercentage != 0)
			{
				return $this->globalFactPercentage;
			}
			else {
				if($this->localFactPercentage != 0)
				{
					return $this->localFactPercentage;
				}
				else
				{
					if($this->globalFactCount != 0 || $this->localFactCount != 0)
					{
					 return 0;
					}
					else
					{
						return $pgv_lang['NotEnoughData'];
					}
				}
			}
		}
	}
}


 ?>
