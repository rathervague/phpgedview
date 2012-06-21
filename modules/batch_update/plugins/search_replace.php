<?php
/**
 * Batch Update plugin for phpGedView - search/replace
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
 * $Id: search_replace.php 3904 2008-09-21 21:54:58Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

class plugin extends base_plugin {
	var $search =null; // Search string
	var $replace=null; // Replace string
	var $method =null; // simple/wildcards/regex
	var $regex  =null; // Search string, converted to a regex
	var $case   =null; // "i" for case insensitive, "" for case sensitive
	var $error  =null; // Message for bad user parameters

	// Default is to operate on INDI records
	function getRecordTypesToUpdate() {
		return array('INDI', 'FAM', 'SOUR', 'REPO', 'NOTE', 'OBJE');
	}

	function doesRecordNeedUpdate($xref, $gedrec) {
		return !$this->error && preg_match('/(?:'.$this->regex.')/'.$this->case, $gedrec);
	}

	function updateRecord($xref, $gedrec) {
		return preg_replace('/'.$this->regex.'/'.$this->case, $this->replace, $gedrec);
	}

	function getOptions() {
		parent::getOptions();
		$this->search =safe_GET('search');
		$this->replace=safe_GET('replace');
		$this->method =safe_GET('method', array('exact', 'words', 'wildcards', 'regex'), 'exact');
		$this->case   =safe_GET('case', 'i');

		$this->error='';
		switch ($this->method) {
		case 'exact':
			$this->regex=preg_quote($this->search, '/');
			break;
		case 'words':
			$this->regex='\b'.preg_quote($this->search, '/').'\b';
			break;
		case 'wildcards':
			$this->regex='\b'.str_replace(array('\*', '\?'), array('.*', '.'), preg_quote($this->search, '/')).'\b';
			break;
		case 'regex':
			$this->regex=$this->search;
			// Check for invalid regexes
			// If the regex is bad, $ct will be left at -1
			$ct=-1;
			$ct=@preg_match('/'.$this->search.'/', '');
			if ($ct==-1) {
				$this->error='<br/><span class="error">'.$pgv_lang['bu_regex_bad'].'</span>';
			}
			break;
		}
	}

	function getOptionsForm() {
		global $pgv_lang;

		return
			'<tr valign="top"><td class="list_label width20">'.$pgv_lang['bu_search'].':</td>'.
			'<td class="optionbox wrap">'.
			'<input name="search" size="40" value="'.htmlspecialchars($this->search).
			'" onchange="this.form.submit();"></td></tr>'.

			'<tr valign="top"><td class="list_label width20">'.$pgv_lang['bu_replace'].':</td>'.
			'<td class="optionbox wrap">'.
			'<input name="replace" size="40" value="'.htmlspecialchars($this->replace).
			'" onchange="this.form.submit();"></td></tr>'.

			'<tr valign="top"><td class="list_label width20">'.$pgv_lang['bu_method'].':</td>'.
			'<td class="optionbox wrap"><select name="method" onchange="this.form.submit();">'.
			'<option value="exact"'    .($this->method=='exact'     ? ' selected="selected"' : '').'>'.$pgv_lang['bu_exact']    .'</option>'.
			'<option value="words"'    .($this->method=='words'     ? ' selected="selected"' : '').'>'.$pgv_lang['bu_words']    .'</option>'.
			'<option value="wildcards"'.($this->method=='wildcards' ? ' selected="selected"' : '').'>'.$pgv_lang['bu_wildcards'].'</option>'.
			'<option value="regex"'    .($this->method=='regex'     ? ' selected="selected"' : '').'>'.$pgv_lang['bu_regex']    .'</option>'.
			'</select><br/><i>'.$pgv_lang['bu_'.$this->method.'_desc'].'</i>'.$this->error.'</td></tr>'.

			'<tr valign="top"><td class="list_label width20">'.$pgv_lang['bu_case'].':</td>'.
			'<td class="optionbox wrap">'.
			'<input type="checkbox" name="case" value="i" '.($this->case=='i' ? 'checked="checked"' : '').'" onchange="this.form.submit();">'.
			'<br/><i>'.$pgv_lang['bu_case_desc'].'</i></td></tr>'.
			parent::getOptionsForm();
	}
}
