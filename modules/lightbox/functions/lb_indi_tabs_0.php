<?php
/**
 * Individual Page
 *
 * Display all of the information about an individual
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  PHPGedView Development Team
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
 * @version $Id: lb_indi_tabs_0.php 4650 2009-01-04 05:17:08Z windmillway $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

if (file_exists("modules/googlemap/defaultconfig.php") && file_exists("modules/lightbox/album.php")) { ?>
       var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','googlemap','lightbox2','spare');
       var loadedTabs = new Array(false,false,false,false,false,false,false,false,false,false,false);
<?php }else if (file_exists("modules/googlemap/defaultconfig.php") && !file_exists("modules/lightbox/album.php")) { ?>
       var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','googlemap','spare');
       var loadedTabs = new Array(false,false,false,false,false,false,false,false,false,false);
<?php }else if (!file_exists("modules/googlemap/defaultconfig.php") && file_exists("modules/lightbox/album.php")) { ?>
       var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','lightbox2','spare');
       var loadedTabs = new Array(false,false,false,false,false,false,false,false,false,false);
<?php }else{ ?>
       var tabid = new Array('0','facts','notes','sources','media','relatives','tree','researchlog','spare');
       var loadedTabs = new Array(false,false,false,false,false,false,false,false,false);
<?php } ?>
