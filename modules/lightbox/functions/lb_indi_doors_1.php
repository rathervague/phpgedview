<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
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
 * @subpackage Module
 * @version $Id: lb_indi_doors_1.php 5600 2009-05-29 14:11:48Z windmillway $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

?>
	<dd id="door1"><a href="javascript:;" onclick="tabswitch(1); return false;" ><?php echo $pgv_lang["personal_facts"]?></a></dd>
	<dd id="door2"><a href="javascript:;" onclick="tabswitch(2); return false;" ><?php echo $pgv_lang["notes"]?></a></dd>
	<dd id="door3"><a href="javascript:;" onclick="tabswitch(3); return false;" ><?php echo $pgv_lang["ssourcess"]?></a></dd>

<?php
	if ($MULTI_MEDIA){
		if (!file_exists("modules/googlemap/defaultconfig.php")) {  ?>
			<?php if (file_exists("modules/lightbox/album.php") ) {?>
				<dd id="door4"><a href="javascript:;" onclick="tabswitch(4); return false;" ><?php print $pgv_lang["media"] ?></a></dd>
				<dd id="door8"><a href="javascript:;" onclick="tabswitch(8); return false;" ><?php print $pgv_lang["lightbox"] ?></a></dd>
			<?php }
		}elseif (file_exists("modules/googlemap/defaultconfig.php")) {  ?>
			<?php if (file_exists("modules/lightbox/album.php") ) {?>
				<dd id="door4"><a href="javascript:;" onclick="tabswitch(4); return false;" ><?php print $pgv_lang["media"] ?></a></dd>
				<dd id="door9"><a href="javascript:;" onclick="tabswitch(9); return false;" ><?php print $pgv_lang["lightbox"] ?></a></dd>
			<?php }
		}
	}
 ?>

	<dd id="door5"><a href="javascript:;" onclick="tabswitch(5); return false;" ><?php print $pgv_lang["relatives"]?></a></dd>
	<dd id="door6"><a href="javascript:;" onclick="tabswitch(6); return false;" ><?php print $pgv_lang["tree"]?></a></dd>
	<dd id="door7"><a href="javascript:;" onclick="tabswitch(7); return false;" ><?php print $pgv_lang["research_assistant"]?></a></dd>
	<?php if (file_exists("modules/googlemap/defaultconfig.php")) { ?>
		<dd id="door8"><a href="javascript:;" onclick="tabswitch(8); if (loadedTabs[8]) {ResizeMap(); ResizeMap();} return false;" ><?php print $pgv_lang["googlemap"]?></a></dd>
	<?php } ?>
<!--	<dd id="door10"><a href="javascript:;" onclick="tabswitch(10); return false;" ><?php print "Spare Tab" ?></a></dd> -->
	
	<dd id="door0"><a href="javascript:;" onclick="tabswitch(0); if (loadedTabs[8]) {ResizeMap(); ResizeMap();} return false;" ><?php print $pgv_lang["all"]?></a></dd> 
  



