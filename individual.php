<?php
/**
* Individual Page
*
* Display all of the information about an individual
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
* @version $Id: individual.php 6988 2010-11-09 02:51:44Z canajun2eh $
*/

define('PGV_SCRIPT_NAME', 'individual.php');
require './config.php';
require PGV_ROOT.'includes/controllers/individual_ctrl.php';

// We have finished writing to $_SESSION, so release the lock
session_write_close();

$controller=new IndividualController();
$controller->init();

loadLangFile('lightbox:lang, googlemap:lang');

global $USE_THUMBS_MAIN, $mediacnt, $tabno, $hitCount, $GOOGLEMAP_PH_CONTROLS;

print_header($controller->getPageTitle());

if (!$controller->indi){
	echo "<b>", $pgv_lang["unable_to_find_record"], "</b><br /><br />";
	print_footer();
	exit;
}
else if (!$controller->indi->canDisplayName()) {
	print_privacy_error($CONTACT_EMAIL);
	print_footer();
	exit;
}
$linkToID=$controller->pid; // -- Tell addmedia.php what to link to

?>
<table border="0" cellspacing="0" cellpadding="0" class="facts_table">
	<tr>
	<?php if ($controller->canShowHighlightedObject()) { ?>
		<td <?php if (!$USE_THUMBS_MAIN) echo "rowspan=\"2\" ";?> valign="top">
			<?php echo $controller->getHighlightedObject(); ?>
		</td>
	<?php } ?>
	<td valign="top">
		<?php if ((empty($SEARCH_SPIDER))&&($controller->accept_success)) echo "<b>", $pgv_lang["accept_successful"], "</b><br />"; ?>
		<span class="name_head">
		<?php
		if ($TEXT_DIRECTION=="rtl") echo "&nbsp;";
			echo PrintReady($controller->indi->getFullName());
			echo "&nbsp;&nbsp;";
			echo PrintReady("(".$controller->pid.")");
			if (PGV_USER_IS_ADMIN) {
				$user_id=get_user_from_gedcom_xref(PGV_GED_ID, $controller->pid);
				if ($user_id) {
					$pgvuser=get_user_name($user_id);
					echo "&nbsp;";
					echo printReady("(<a href=\"useradmin.php?action=edituser&amp;username={$pgvuser}\">{$pgvuser}</a>)");
				}
			}
		?>
		</span><br />
		<?php if (strlen($controller->indi->getAddName()) > 0) echo "<span class=\"name_head\">", PrintReady($controller->indi->getAddName()), "</span><br />"; ?>
		<?php if ($controller->indi->canDisplayDetails()) { ?>
		<table><tr>
		<?php
			$col=0; $maxcols=7; // 4 with data and 3 spacers
			$globalfacts=$controller->getGlobalFacts();
			$nameSex = array('NAME', 'SEX');
			foreach ($globalfacts as $key=>$value) {
				$fact = $value->getTag();
				if (in_array($fact, $nameSex)) {
						if ($col>0) {
							echo "<td width=\"10\"><br /></td>";
							++$col;
						}
					if ($fact=="SEX") $controller->print_sex_record($value);
					if ($fact=="NAME") $controller->print_name_record($value);
						++$col;
						if ($col==$maxcols) {
							echo "</tr><tr>";
							$col=0;
						}
					}
			}
			// Display summary birth/death info.
			$summary=$controller->indi->format_first_major_fact(PGV_EVENTS_BIRT, 2);
			if (!($controller->indi->isDead())) {
				// If alive display age
				$bdate=$controller->indi->getBirthDate();
				$age = GedcomDate::GetAgeGedcom($bdate);
				if ($age!="")
					$summary.= "<span class=\"label\">".$pgv_lang["age"].":</span><span class=\"field\"> ".get_age_at_event($age, true)."</span>";
			}
			$summary.=$controller->indi->format_first_major_fact(PGV_EVENTS_DEAT, 2);
			if ($SHOW_LDS_AT_GLANCE) {
				$summary.='<b>'.get_lds_glance($controller->indi->getGedcomRecord()).'</b>';
			}
			if ($summary) {
				++$col;
				echo '<td width="10"><br /></td><td valign="top" colspan="', $maxcols-$col, '">', $summary, '</td>';
			}
		?>
		</tr>
		</table>
		<?php
		if ($hitCount) {
			echo '<br />', $pgv_lang['hit_count'], $hitCount;
		}
		// if individual is a remote individual
		// if information for this information is based on a remote site
		if ($controller->indi->isRemote())
		{
			?><br />
			<?php echo $pgv_lang["indi_is_remote"]; ?><!--<br />--><!--take this out if you want break the remote site and the fact that it was remote into two separate lines-->
			<a href="<?php echo encode_url($controller->indi->getLinkUrl()); ?>"><?php echo $controller->indi->getLinkTitle(); ?></a>
			<?php
		}
		// if indivual is not a remote individual
		// if information for this individual is based on this local site
		// this is not need to be printed, but may be uncommented if desired
		/*else
			echo("This is a local individual.");*/
	}
	if ((!$controller->isPrintPreview())&&(empty($SEARCH_SPIDER))) {
		$showFull = ($PEDIGREE_FULL_DETAILS) ? 1 : 0;
	?>
	</td><td class="<?php echo $TEXT_DIRECTION; ?> noprint" valign="top">
		<?php if (!$PGV_MENUS_AS_LISTS) {?>
		<table class="sublinks_table" cellspacing="4" cellpadding="0">
			<tr>
				<td class="list_label <?php echo $TEXT_DIRECTION; ?>" colspan="5"><?php echo $pgv_lang["indis_charts"]; ?></td>
			</tr>
			<tr>
				<td class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
		<?php } else { ?>
		<div id="optionsmenu" class="sublinks_table">
			<div class="list_label <?php echo $TEXT_DIRECTION; ?>"><?php echo $pgv_lang["indis_charts"]; ?></div>
				<ul class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
		<?php } 
				//-- get charts menu from menubar
				$menubar = new MenuBar();
				$menu = $menubar->getChartsMenu($controller->pid); 
				$menu->printMenu();
				?>
				</<?php if (!$PGV_MENUS_AS_LISTS) {?>td><td<?php } else { ?>ul><ul<?php }?> class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
				<?php
				list($surname)=explode(',', $controller->indi->getSortName());
				if (!$surname) {
					$surname='@N.N.'; // TODO empty surname is not the same as @N.N.
				}
				$menu = $menubar->getListsMenu($surname); 
				$menu->printMenu();
				if (file_exists(PGV_ROOT.'reports/individual.xml')) {?>
				</<?php if (!$PGV_MENUS_AS_LISTS) {?>td><td<?php } else { ?>ul><ul<?php }?> class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
					<?php
					//-- get reports menu from menubar
					$menu = $menubar->getReportsMenu($controller->pid); 
					$menu->printMenu();
				}
				if ($controller->userCanEdit()) {
				?>
				</<?php if (!$PGV_MENUS_AS_LISTS) {?>td><td<?php } else { ?>ul><ul<?php }?> class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
				<?php $menu = $controller->getEditMenu(); 
				$menu->printMenu();
				}
				if ($controller->canShowOtherMenu()) {
				?>
				</<?php if (!$PGV_MENUS_AS_LISTS) {?>td><td<?php } else { ?>ul><ul<?php }?> class="sublinks_cell <?php echo $TEXT_DIRECTION; ?>">
				<?php $menu = $controller->getOtherMenu(); 
				$menu->printMenu();
				}
				?>
		<?php if (!$PGV_MENUS_AS_LISTS) {?>
				</td>
			</tr>
		</table><br />
		<?php } else { ?>
				</ul>
		</div>
		<?php } 
			 } ?>
	</td>
	</tr>
	<tr>
	<td valign="bottom" colspan="3">
	<?php if ($controller->indi->isMarkedDeleted()) echo "<span class=\"error\">", $pgv_lang["record_marked_deleted"], "</span>"; ?>
<script language="JavaScript" type="text/javascript">
// <![CDATA[
// javascript function to open a window with the raw gedcom in it
function show_gedcom_record(shownew) {
	fromfile="";
	if (shownew=="yes") fromfile='&fromfile=1';
	var recwin = window.open("gedrecord.php?pid=<?php echo $controller->pid; ?>"+fromfile, "_blank", "top=50, left=50, width=600,  height=400, scrollbars=1, scrollable=1, resizable=1");
}
<?php if (PGV_USER_CAN_EDIT) { ?>
function open_link_remote(pid){
	window.open("addremotelink.php?pid="+pid, "_blank", "top=50, left=50, width=600, height=500, scrollbars=1, scrollable=1, resizable=1");
	return false;
}

function showchanges() {
	window.location = '<?php echo $controller->indi->getLinkUrl(); ?>&show_changes=yes';
}
<?php } ?>
<!-- ====================== Added for Lightbox Module ===================== -->
<?php
if (PGV_USE_LIGHTBOX) {
	require PGV_ROOT.'modules/lightbox/lb_defaultconfig.php';
	if ($theme_name=="Minimal") {
		// Force icon options to "text" when we're dealing with the Minimal theme
		if ($LB_AL_HEAD_LINKS!="none") { $LB_AL_HEAD_LINKS = "text"; }
		if ($LB_AL_THUMB_LINKS!="none") { $LB_AL_THUMB_LINKS = "text"; }
		if ($LB_ML_THUMB_LINKS!="none") { $LB_ML_THUMB_LINKS = "text"; }
	}
	require_once PGV_ROOT.'modules/lightbox/functions/lb_indi_tabs_'.$mediatab.'.php';
} else {
?>
<!-- ================== End Additions for Lightbox Module ================== -->

	<?php if (file_exists(PGV_ROOT.'modules/googlemap/defaultconfig.php')) {?>
	var tabid = new Array('0', 'facts', 'notes', 'sources', 'media', 'relatives', 'tree', 'researchlog', 'googlemap', 'spare');
	var loadedTabs = new Array(false, false, false, false, false, false, false, false, false, false);
	<?php }else{?>
	var tabid = new Array('0', 'facts', 'notes', 'sources', 'media', 'relatives', 'tree', 'researchlog', 'spare');
	var loadedTabs = new Array(false, false, false, false, false, false, false, false, false);
	<?php }?>

<!-- ====================== Added for Lightbox Module ===================== -->
<?php } ?>
<!-- ================== End Additions for Lightbox Module ================== -->

loadedTabs[<?php echo ($controller->default_tab+1); ?>] = true;

function tempObj(tab, oXmlHttp) {
	this.processFunc = function()
	{
		if (oXmlHttp.readyState==4)
		{
			target = document.getElementById(tabid[tab]+'_content');
			evalAjaxJavascript(oXmlHttp.responseText, target);
			target.style.height = 'auto';
			if (tabid[tab]=='googlemap') {
				if (!loadedTabs[tab]) {
					loadMap();
					<?php if ($GOOGLEMAP_PH_CONTROLS) {?>
					// hide controls
					GEvent.addListener(map, 'mouseout', function()
					{
						map.hideControls();
					});
					// show controls
					GEvent.addListener(map, 'mouseover', function()
					{
						map.showControls();
					});
					GEvent.trigger(map, 'mouseout');
					<?php
					}
					?>
					map.setMapType(GOOGLEMAP_MAP_TYPE);
				}
				SetMarkersAndBounds();
				ResizeMap();
				ResizeMap();
			}
			//-- initialize lightbox tabs if lightbox installed
			<?php if (PGV_USE_LIGHTBOX) { ?>
				// if (tabid[tab]=='lightbox2' || tabid[tab]=='facts' || tabid[tab]=='media' || tabid[tab]=='relatives') {
				CB_Init();
				// }
			<?php } ?>
			loadedTabs[tab] = true;
		}
	};
}


function setfamnav() {
	<?php if (isset($_COOKIE['famnav']) && $_COOKIE['famnav']=="YES" ) { ?>
		document.cookie = "famnav=NO";
	<?php }else{ ?>
		document.cookie = "famnav=YES";
	<?php } ?>
	forceReloadFromServer = true;
	window.location.reload(forceReloadFromServer);
}

function tabswitch(n) {
// alert(n);
document.cookie = "lastclick="+n;
	if (!tabid[n]) n = 1;
	for (var i=1; i<tabid.length; i++) {
		var disp='none'; // reset inactive tabs
		if (i==n || n==0) disp='block'; // active tab(s) : one or all
		document.getElementById(tabid[i]).style.display=disp;
		if (disp=='block' && !loadedTabs[i]) {
			// -- load ajax
			if (tabid[i]=='tree') {
				treetab.newRoot('<?php echo $controller->pid; ?>', treetab.innerPort, '<?php echo $GEDCOM; ?>');
				loadedTabs[i] = true;
			}
			else if (document.getElementById(tabid[i]+'_content')) {
				var oXmlHttp = createXMLHttp();
				var link = "individual.php?action=ajax&pid=<?php echo $controller->pid; ?>&tab="+i+"&show_changes=<?php if ($controller->show_changes) echo 'yes'?>";
				oXmlHttp.open("get", link, true);
				temp = new tempObj(i, oXmlHttp);
				oXmlHttp.onreadystatechange=temp.processFunc;
					oXmlHttp.send(null);
				}
			}
	}
	// empty tabs
	for (i=0; i<tabid.length; i++) {
		var elt = document.getElementById('door'+i);
		if (elt) {
			if (document.getElementById('no_tab'+i)) { // empty ?
				if (<?php if (PGV_USER_CAN_EDIT) echo 'true'; else echo 'false';?>) {
					elt.style.display='block';
					elt.style.opacity='0.4';
					elt.style.filter='alpha(opacity=40)';
				}
				else elt.style.display='none'; // empty and not editable ==> hide
				//if (i==3 && <?php if ($SHOW_SOURCES>=PGV_USER_ACCESS_LEVEL) echo 'true'; else echo 'false';?>) elt.style.display='none'; // no sources
				if (i==4 && <?php if (!$MULTI_MEDIA) echo 'true'; else echo 'false';?>) elt.style.display='none'; // no multimedia
				if (i==7) elt.style.display='none'; // hide researchlog
				if (i==9 && <?php if (!$MULTI_MEDIA) echo 'true'; else echo 'false';?>) elt.style.display='none'; // no multimedia (for Album tab)
				// ALL : hide empty contents
				if (n==0) document.getElementById(tabid[i]).style.display='none';
			}
			else elt.style.display='block';
		}
	}
	// current door
	for (i=0; i<tabid.length; i++) {
		var elt = document.getElementById('door'+i);
		if (elt) elt.className='door optionbox rela';
	}
	document.getElementById('door'+n).className='door optionbox';
	// set a cookie which stores the last tab they clicked on
	document.cookie = "lasttabs=<?php echo $controller->getCookieTabString().$controller->pid; ?>="+n;
	return false;
}

// function is required by cloudy theme
function resize_content_div(i) {
	// check for container ..
	var cont = document.getElementById("content");
	if (!cont) cont = document.getElementById("container");
	if (cont) {
		if (document.getElementById("marker"+i)) {
			var y = getAbsoluteTop("marker"+i);
			if (y<300) y=600;
			cont.style.height =y.toString()+'px';
		}
	}
}
//]]>
</script>
<script src="js/phpgedview.js" language="JavaScript" type="text/javascript"></script>
<?php
function loading_message() {
	global $pgv_lang;
	echo "<p style=\"margin: 20px 20px 20px 20px\">";
	echo "<img src=\"images/loading.gif\" alt=\"", $pgv_lang["loading"], "\" title=\"", $pgv_lang["loading"], "\" />";
	echo "</p>";
}
if ((!$controller->isPrintPreview())&&(empty($SEARCH_SPIDER))) {
?>
<div class="door">
<dl>

<!-- ====================== Added for Lightbox Module ===================== -->
<?php
if (PGV_USE_LIGHTBOX) {
	require_once PGV_ROOT.'modules/lightbox/functions/lb_indi_doors_'.$mediatab.'.php';
} else {
?>
<!-- ================== End Additions for Lightbox Module ================== -->

	<dd id="door1"><a href="javascript:;" onclick="tabswitch(1); return false;" ><?php echo $pgv_lang["personal_facts"]?></a></dd>
	<dd id="door2"><a href="javascript:;" onclick="tabswitch(2); return false;" ><?php echo $pgv_lang["notes"]?></a></dd>
	<dd id="door3"><a href="javascript:;" onclick="tabswitch(3); return false;" ><?php echo $pgv_lang["ssourcess"]?></a></dd>
	<dd id="door4"><a href="javascript:;" onclick="tabswitch(4); return false;" ><?php echo $pgv_lang["media"]?></a></dd>
	<dd id="door5"><a href="javascript:;" onclick="tabswitch(5); return false;" ><?php echo $pgv_lang["relatives"]?></a></dd>
	<dd id="door6"><a href="javascript:;" onclick="tabswitch(6); return false;" ><?php echo $pgv_lang["tree"]?></a></dd>
	<dd id="door7"><a href="javascript:;" onclick="tabswitch(7); return false;" ><?php echo $pgv_lang["research_assistant"]?></a></dd>
	<?php if (file_exists(PGV_ROOT.'modules/googlemap/defaultconfig.php')) {?>
<!-- <dd id="door9"><a href="javascript:;" onclick="tabswitch(9); return false;" ><?php echo "Spare" ?></a></dd> -->
	<dd id="door8"><a href="javascript:;" onclick="tabswitch(8); if (loadedTabs[8]) {ResizeMap(); ResizeMap();} return false;" ><?php echo $pgv_lang["googlemap"]?></a></dd>
	<?php }else{?>
<!-- <dd id="door8"><a href="javascript:;" onclick="tabswitch(8); return false;" ><?php echo "Spare" ?></a></dd> -->
	<?php }?>
	<dd id="door0"><a href="javascript:;" onclick="tabswitch(0); if (loadedTabs[8]) {ResizeMap(); ResizeMap();} return false;" ><?php echo $pgv_lang["all"]?></a></dd>

<!-- ====================== Added for Lightbox Module ===================== -->
<?php } ?>
<!-- ================== End Additions for Lightbox Module ================== -->

</dl>
</div>
<br />
<?php
}
?>
</td></tr></table>
<!-- ======================== Start Tab 0 individual page ============ Personal Facts and Details -->
<?php
if(empty($SEARCH_SPIDER))
	echo "<div id=\"facts\" class=\"tab_page\" style=\"display:none;\" >";
else
	echo "<div id=\"facts\" class=\"tab_page\" style=\"display:block;\" >";
echo "<span class=\"subheaders\">", $pgv_lang["personal_facts"], "</span><div id=\"facts_content\">";
if (($controller->default_tab==0)||(!empty($SEARCH_SPIDER))) $controller->getTab(0);
else loading_message();
?>
</div>
</div>

<!-- ======================== Start Tab 1 individual page ==== Notes ======= -->
<?php
if(empty($SEARCH_SPIDER))
	echo "<div id=\"notes\" class=\"tab_page\" style=\"display:none;\" >";
else
	echo "<div id=\"notes\" class=\"tab_page\" style=\"display:block;\" >";
echo "<span class=\"subheaders\">", $pgv_lang["notes"], "</span><div id=\"notes_content\">";
if (($controller->default_tab==1)||(!empty($SEARCH_SPIDER))) $controller->getTab(1);
else {
	if ($controller->get_note_count()>0) loading_message();
	else echo "<span id=\"no_tab2\">", $pgv_lang["no_tab2"], "</span>";
	}
?>
</div>
</div>

<!-- =========================== Start Tab 2 individual page === Sources -->
<?php
if(empty($SEARCH_SPIDER))
	echo "<div id=\"sources\" class=\"tab_page\" style=\"display:none;\" >";
else
	echo "<div id=\"sources\" class=\"tab_page\" style=\"display:block;\" >";
if ($SHOW_SOURCES>=PGV_USER_ACCESS_LEVEL) {
	echo "<span class=\"subheaders\">", $pgv_lang["ssourcess"], "</span><div id=\"sources_content\">";
	if (($controller->default_tab==2)||(!empty($SEARCH_SPIDER))) $controller->getTab(2);
	else {
		if ($controller->get_source_count()>0) loading_message();
		else echo "<span id=\"no_tab3\">", $pgv_lang["no_tab3"], "</span>";
	}
	echo "</div>";
}
?>
</div>

<!-- ==================== Start Tab 3 individual page ==== Media -->
<?php
if(empty($SEARCH_SPIDER))
	echo "<div id=\"media\" class=\"tab_page\" style=\"display:none;\" >";
else
	echo "<div id=\"media\" class=\"tab_page\" style=\"display:block;\" >";
if ($MULTI_MEDIA) {
	echo "<span class=\"subheaders\">", $pgv_lang["media"], "</span>";
	// For Reorder media ------------------------------------
	if (PGV_USER_CAN_EDIT) {
		echo "<center>";
		require_once PGV_ROOT.'includes/media_tab_head.php';
		echo "</center>";
	}
	// -----------------------------------------------------------
	echo "<div id=\"media_content\">";
	if (($controller->default_tab==3)||(!empty($SEARCH_SPIDER))) $controller->getTab(3);
	else {
		if ($controller->get_media_count()>0) loading_message();
		else echo "<span id=\"no_tab4\">", $pgv_lang["no_tab4"], "</span>";
	}
	echo "</div>";
}
?>
</div>

<!-- ============================= Start Tab 4 individual page ==== Close relatives -->
<?php
if(empty($SEARCH_SPIDER))
	echo "<div id=\"relatives\" class=\"tab_page\" style=\"display:none;\" >";
else
	echo "<div id=\"relatives\" class=\"tab_page\" style=\"display:block;\" >";
?>
<div id="relatives_content">
<?php
	if (($controller->default_tab==4)||(!empty($SEARCH_SPIDER))) $controller->getTab(4);
	else loading_message();
?>
</div>
</div>

<!-- ============================= Start Tab 5 individual page ==== Tree -->
<?php
if(empty($SEARCH_SPIDER)) { 
	echo "<div id=\"tree\" class=\"tab_page\" style=\"display:none; border: solid blue 1px;\" >";
?>
<div id="tree_content">
<?php
	require_once PGV_ROOT.'includes/classes/class_treenav.php';
	if ($controller->default_tab==5) {
		$inav = new TreeNav($controller->pid, 'treetab');
	}
	else {
		$inav = new TreeNav('none', 'treetab');
	}
	$inav->generations = 7;
	$inav->zoomLevel = -1;
	$inav->drawViewport('treetab', "100%", "600px");
?>
</div>
</div>
<?php } ?>


<!-- ============================ Start Tab 6 individual page === Research Assistant -->
<?php
// Only show this section if we are not talking to a search engine.
if(empty($SEARCH_SPIDER)) {
	echo "<div id=\"researchlog\" class=\"tab_page\" style=\"display:none;\" >";
	echo "<span class=\"subheaders\">", $pgv_lang["research_assistant"], "</span>";
	echo "<div id=\"researchlog_content\">";

	if (file_exists(PGV_ROOT.'modules/research_assistant/research_assistant.php') && ($SHOW_RESEARCH_ASSISTANT>=PGV_USER_ACCESS_LEVEL)) {
		if (version_compare(PGV_VERSION, '4.1')<0) echo "<script src=\"compat.js\" language\"JavaScript\" type=\"text/javascript\"></script>";
		echo "<script type=\"text/javascript\" src=\"modules/research_assistant/research_assistant.js\"></script>";
		if ($controller->default_tab==6) $controller->getTab(6);
		else loading_message();
	}
	else {
		echo "<table class=\"facts_table\"><tr><td id=\"no_tab7\" colspan=\"2\" class=\"facts_value\">", $pgv_lang["no_tab6"], "</td></tr></table>";
	}
	echo "</div>";
	echo "</div>";
}
?>

<!-- =========================== Start Tab 7 individual page ==== GoogleMaps -->
<?php

// Only show this section if we are not talking to a search engine.
if (empty($SEARCH_SPIDER)) {
	echo "<div id=\"googlemap\" class=\"tab_page\" style=\"display:none;\" >";
	// Header Info ------------------------------------------------------------------------------------
	if (file_exists(PGV_ROOT.'modules/googlemap/defaultconfig.php')) {
		//Content Info ------------------------------------------------------------
		echo "<div id=\"gg_map_content\">";
		echo "<table border=\"0\" width=\"100%\" ><tr><td >";
		require_once PGV_ROOT.'modules/googlemap/gg_map_content.php';
		echo "</td>";
		echo "</tr></table>";
		echo "</div>";
	} else {
		echo "<div id=\"googlemap_content\" class=\"tab_page\" style=\"display:block; \" >";
		echo "MAPS NOT INSTALLED";
		echo "</div>";
	}
	echo "</div>";
}

?>


<!-- ========================== Start Tab 8 individual page ==== Album ======== -->
<?php
if (PGV_USE_LIGHTBOX) {
	// Header Info ---------------------------------------------------------------------
	echo "<div id=\"lightbox2\" class=\"tab_page\" style=\"display:none;\" >";
	echo "<span class=\"subheaders\">" . $pgv_lang["lightbox"] . "</span>";
	echo "&nbsp;&nbsp;";
	// ---------- Help link --------------------
	print_help_link("lb_general_help", "qm", "lb_help", true);
	// --------- Header include -------------
	$mediacnt = $controller->get_media_count();
	if ($mediacnt!=0) {
		require_once PGV_ROOT.'modules/lightbox/functions/lb_head.php';
	} else {
		require_once PGV_ROOT.'modules/lightbox/functions/lb_head.php';
		echo "<table class=\"facts_table\"><tr><td id=\"no_tab9\" colspan=\"2\" class=\"facts_value\">", $pgv_lang["no_tab4"], "</td></tr></table>";
	}
		
	// Content info ---------------------------------------------------
	echo "<div id=\"lightbox2_content\">";
	if ($mediacnt!=0) {
		// LB Fix if googlemaps ========================================================
		if (file_exists(PGV_ROOT.'modules/googlemap/googlemap.php')) {
			if ($controller->default_tab==8 || !empty($SEARCH_SPIDER)) {
				$controller->getTab(8) ;
			} else {
				loading_message();
			}
		} else {
			if ($controller->default_tab==7 || !empty($SEARCH_SPIDER)) {
				$controller->getTab(7) ;
			} else {
				loading_message();
			}
		}
		// LB Fix if googlemaps ========================================================
	}
	echo "</div>";
	echo "</div>";
}
?>


<!-- ============================= Start Tab 9 individual page ==== Spare -->
<?php
if(empty($SEARCH_SPIDER)) {
	echo "<div id=\"spare\" class=\"tab_page\" style=\"display:none; border: solid transparent 0px;\" >";

// *** Section <span> sunheader temporarily removed as it will become redundant when new Tabs Management function is released ***
//		echo "<span class=\"subheaders\">Spare Tab</span>";
//		echo "&nbsp;&nbsp;";
		
		// ---------- Help link --------------------
		// print_help_link("lb_general_help", "qm", "lb_help", true); // (Temp removed to stop Error log reporting when Lightbox not installed)
		
		echo "<div id='spare_content'>";
			// Fix if no googlemaps ========================================================
			if (file_exists(PGV_ROOT.'modules/googlemap/googlemap.php')) {
				if (($controller->default_tab==9)||(!empty($SEARCH_SPIDER))) {
					$controller->getTab(9) ;
				}else{
					loading_message();
				}
			}else{
				if (($controller->default_tab==8)||(!empty($SEARCH_SPIDER))) {
					$controller->getTab(8) ;
				}else{
					loading_message();
				}
			}
			// end Fix if no googlemaps ========================================================
		echo "</div>";

	echo "</div>";
}

echo '<!-- ============================   End Tabs - individual page   ============ -->';
echo PGV_JS_START;
echo 'var catch_and_ignore; function paste_id(value) {catch_and_ignore = value;}';
//-- make sure googlemap is reloaded
if ($controller->default_tab==7) {
	echo "loadedTabs[", ($controller->default_tab+1), "] = false;";
}
if ($controller->isPrintPreview()) {
	echo "tabswitch(0);";
} else {
	echo "tabswitch(", ($controller->default_tab+1) , ");";
}
if ($controller->default_tab==5) {
	echo "treetab.sizeLines();";
}
echo 'if (typeof toggleByClassName == "undefined") {';
echo 'alert("phpgedview.js: A javascript function is missing.  Please clear your Web browser cache");';
echo '}';
echo PGV_JS_END;

if ($SEARCH_SPIDER) {
	if($SHOW_SPIDER_TAGLINE)
		echo $pgv_lang["label_search_engine_detected"], ": ", $SEARCH_SPIDER;
	echo "</div></body></html>";
} else {
	print_footer();
}

?>
