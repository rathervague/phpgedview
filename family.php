<?php
/**
 * Parses gedcom file and displays information about a family.
 *
 * You must supply a $famid value with the identifier for the family.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
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
 * @version $Id: family.php 6988 2010-11-09 02:51:44Z canajun2eh $
 */

define('PGV_SCRIPT_NAME', 'family.php');
require './config.php';
require_once PGV_ROOT.'includes/controllers/family_ctrl.php';

$controller = new FamilyController();
$controller->init();

print_header($controller->getPageTitle());
// completely prevent display if privacy dictates so
if (!$controller->family){
	echo "<b>", $pgv_lang["unable_to_find_record"], "</b><br /><br />";
	print_footer();
	exit;
}
else if (!$controller->family->canDisplayDetails()) {
	print_privacy_error($CONTACT_EMAIL);
	print_footer();
	exit;
}

// LB added for Lightbox viewer ==============================================================
if (PGV_USE_LIGHTBOX) {
	require PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';
	require_once PGV_ROOT.'modules/lightbox/functions/lb_call_js.php';
}
// LB ======================================================================================

$PEDIGREE_FULL_DETAILS = "1";		// Override GEDCOM configuration
$show_full = "1";

if ($TEXT_DIRECTION == 'ltr')
	 $align = 'left';
else $align = 'right';

?>
<?php if ($controller->family->isMarkedDeleted()) echo "<span class=\"error\">".$pgv_lang["record_marked_deleted"]."</span>"; ?>
<script language="JavaScript" type="text/javascript">
<!--
	function show_gedcom_record(shownew) {
		fromfile="";
		if (shownew=="yes") fromfile='&fromfile=1';
		var recwin = window.open("gedrecord.php?pid=<?php echo $controller->getFamilyID(); ?>"+fromfile, "_blank", "top=50, left=50, width=600, height=400, scrollbars=1, scrollable=1, resizable=1");
	}
	function showchanges() {
		window.location = 'family.php?famid=<?php echo $controller->famid; ?>&show_changes=yes';
	}
//-->
</script>
<table align="center" width="95%">
	<tr>
		<td>
		<?php
		print_family_header($controller->famid);
		?>
		</td>
		<td>
			<?php
			if (empty($SEARCH_SPIDER) && !$controller->isPrintPreview()) {
			?>
<?php if (!$PGV_MENUS_AS_LISTS) {?>
			<table class="sublinks_table" cellspacing="4" cellpadding="0">
				<tr>
					<td class="list_label <?php echo $TEXT_DIRECTION?>" colspan="4"><?php echo $pgv_lang['fams_charts']?></td>
				</tr>
				<tr>
					<td class="sublinks_cell <?php echo $TEXT_DIRECTION?>">
		<?php } else { ?>
		<div id="optionsmenu" class="sublinks_table">
			<div class="list_label <?php echo $TEXT_DIRECTION; ?>"><?php echo $pgv_lang["fams_charts"]; ?></div>
				<ul class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
		<?php } 
					$menu = $controller->getChartsMenu(); $menu->printMenu();
					if (file_exists(PGV_ROOT.'reports/familygroup.xml')) :
					?>
				</<?php if (!$PGV_MENUS_AS_LISTS) {?>td><td<?php } else { ?>ul><ul<?php }?> class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
					<?php
					//-- get reports menu from menubar
					$menubar = new MenuBar(); $menu = $menubar->getReportsMenu("", $controller->getFamilyID()); $menu->printMenu();
					//$menu = $controller->getReportsMenu();
					//$menu->printMenu();
					endif; // reports
					if (PGV_USER_CAN_EDIT && ($controller->display)) :
					?>
				</<?php if (!$PGV_MENUS_AS_LISTS) {?>td><td<?php } else { ?>ul><ul<?php }?> class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
					<?php
					$menu = $controller->getEditMenu();
					$menu->printMenu();
					endif; // edit_fam
					if ($controller->display && ($SHOW_GEDCOM_RECORD || $ENABLE_CLIPPINGS_CART >= PGV_USER_ACCESS_LEVEL)) :
					?>
				</<?php if (!$PGV_MENUS_AS_LISTS) {?>td><td<?php } else { ?>ul><ul<?php }?> class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
					<?php
					$menu = $controller->getOtherMenu();
					$menu->printMenu();
					endif; // other
					?>
		<?php if (!$PGV_MENUS_AS_LISTS) {?>
					</td>
				</tr>
			</table>
		<?php } else { ?>
				</ul>
		</div>
		<?php } 
			}	// view != preview
			?>
		</td>
	</tr>
</table>
<table align="center" width="95%">
	<tr valign="top">
		<td align="<?php echo $align;?>" valign="top" style="width: <?php echo $pbwidth+30 ?>px;"><!--//List of children//-->
			<?php print_family_children($controller->getFamilyID());?>
		</td>
		<td> <!--//parents pedigree chart and Family Details//-->
			<table align="<?php echo $align;?>" width="100%">
				<tr>
					<td class="subheaders" valign="top"><?php echo $pgv_lang["parents"];?></td>
					<td class="subheaders" valign="top"><?php echo $pgv_lang["gparents"];?></td>
				</tr>
				<tr>
					<td colspan="2">
						<table><tr><td> <!--//parents pedigree chart //-->
						<?php
						echo print_family_parents($controller->getFamilyID());
						if (!$controller->isPrintPreview() && $controller->display && PGV_USER_CAN_EDIT) {
							$husb = $controller->getHusband();
							if (empty($husb)) { ?>
								<?php print_help_link("edit_add_parent_help", "qm"); ?>
			<a href="javascript <?php echo $pgv_lang["add_father"]; ?>" onclick="return addnewparentfamily('', 'HUSB', '<?php echo $controller->famid; ?>');"><?php echo $pgv_lang["add_father"]; ?></a><br />
						<?php }
							$wife = $controller->getWife();
							if (empty($wife))  { ?>
								<?php print_help_link("edit_add_parent_help", "qm"); ?>
			<a href="javascript <?php echo $pgv_lang["add_mother"]; ?>" onclick="return addnewparentfamily('', 'WIFE', '<?php echo $controller->famid; ?>');"><?php echo $pgv_lang["add_mother"]; ?></a><br />
						<?php }
						}
						?>
						</td></tr></table>
					</td>
				</tr>
				<tr>
					<td align="<?php echo $align; ?>" colspan="2">
						<br /><hr />
						<?php print_family_facts($controller->family);?>
					</td>
				</tr>
			</table>
		</td>
		<td class="noprint">
			<?php
				if ($controller->accept_success) {
					echo "<b>".$pgv_lang["accept_successful"]."</b><br />";
				}
			?>
		</td>
	</tr>
</table>
<br />
<?php
if(empty($SEARCH_SPIDER))
	print_footer();
else {
	if($SHOW_SPIDER_TAGLINE)
		echo $pgv_lang["label_search_engine_detected"].": ".$SEARCH_SPIDER;
	echo "\n</div>\n\t</body>\n</html>";
}
