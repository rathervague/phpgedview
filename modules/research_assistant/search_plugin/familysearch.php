<?php 
/**
 * Search Plug-in for www.familysearch.org
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008 John Finlay and others. All rights reserved.
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
 * @version $Id: familysearch.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @package PhpGedView
 * @subpackage Research Assistant
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require_once PGV_ROOT.'modules/research_assistant/search_plugin/base_autosearch.php';

class AutoSearch extends Base_AutoSearch {
	function AutoSearch() {
		parent::__construct(
			// Name of this file, without the extension.
			// NB must also define this in $pgv_lang["autosearch_plugin_name_XXXX"]
			basename(__FILE__, '.php'),
			// Search engine URL, ending in "?" or "&"
			'http://www.familysearch.org/Eng/search/ancestorsearchresults.asp?event_index=1&date_range=2&',
			// Form method: GET or POST
			'GET',
			// Array keys are field names for the URL.
			// Array values are:
			//  function = defined in Base_AutoSearch and $pgv_lang["autosearch_XXXX"]
			//  extra    = extra html to add to the checkbox
			array(
				'first_name'             =>array('function'=>'givenname', 'extra'=>'checked="checked"'),
				'last_name'              =>array('function'=>'surname',   'extra'=>'checked="checked"'),
				'event_index=1&from_date'=>array('function'=>'byear',     'extra'=>'id="fs1" onchange="document.getElementById(\'fs2\').checked=false;document.getElementById(\'fs3\').checked=false;" checked="checked"'),
				'event_index=2&from_date'=>array('function'=>'myear',     'extra'=>'id="fs2" onchange="document.getElementById(\'fs1\').checked=false;document.getElementById(\'fs3\').checked=false;"'),
				'event_index=3&from_date'=>array('function'=>'dyear',     'extra'=>'id="fs3" onchange="document.getElementById(\'fs1\').checked=false;document.getElementById(\'fs2\').checked=false;"'),
				'fathers_first_name'     =>array('function'=>'fgivennames'),
				'fathers_last_name'      =>array('function'=>'fsurname'   ),
				'mothers_first_name'     =>array('function'=>'mgivennames'),
				'mothers_last_name'      =>array('function'=>'msurname'   ),
				'spouses_first_name'     =>array('function'=>'sgivennames'),
				'spouses_last_name'      =>array('function'=>'ssurname'   )
			)
		);
	}
}

?>
