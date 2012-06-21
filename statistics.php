<?php
/**
 * Creates some statistics out of the GEDCOM information.
 * We will start with the following possibilities
 * number of persons -> periodes of 50 years from 1700-2000
 * age -> periodes of 10 years (different for 0-1,1-5,5-10,10-20 etc)
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
 * @version $Id: statistics.php 6939 2010-02-20 16:31:05Z wooc $
 * @package PhpGedView
 * @subpackage Lists
 */

define('PGV_SCRIPT_NAME', 'statistics.php');
require './config.php';
require_once PGV_ROOT.'includes/classes/class_stats.php';

print_header($pgv_lang["statistics"]);

/*
 * Initiate the stats object.
 */
$stats = new stats($GEDCOM);

?>
	<h2 class="center"><?php echo $pgv_lang["statistics"]; ?></h2>
	<?php global $pgv_lang, $TEXT_DIRECTION;
	if ($TEXT_DIRECTION=='rtl') $align='right';
	else $align='left';
?>
<script language="JavaScript" type="text/javascript">
<!--
var tab_count = 2;
function switch_tab(tab) {
	for(i=0; i<=tab_count+1; i++) {
		var pagetab = document.getElementById('pagetab'+i);
		var pagetabbottom = document.getElementById('pagetab'+i+'bottom');
		var tabdiv = document.getElementById('tab'+i);
		if (i==tab) {
			pagetab.className='tab_cell_active';
			tabdiv.style.display = 'block';
			pagetabbottom.className='tab_active_bottom';
		}
		else {
			pagetab.className='tab_cell_inactive';
			tabdiv.style.display = 'none';
			pagetabbottom.className='tab_inactive_bottom';
		}
	}
}
//-->
</script>
<table class="tabs_table center width90">
	<tr>
		<td id="pagetab0" class="tab_cell_active"><a href="javascript: <?php echo $pgv_lang["individuals"];?>" onclick="switch_tab(0); return false;"><?php echo $pgv_lang["individuals"];?></a></td>
		<td id="pagetab1" class="tab_cell_inactive"><a href="javascript: <?php echo $pgv_lang["families"];?>" onclick="switch_tab(1); return false;"><?php echo $pgv_lang["families"];?></a></td>
		<td id="pagetab2" class="tab_cell_inactive"><a href="javascript: <?php echo $pgv_lang["others"];?>" onclick="switch_tab(2); return false;"><?php echo $pgv_lang["others"];?></a></td>
		<td id="pagetab3" class="tab_cell_inactive"><a href="javascript: <?php echo $pgv_lang["stat_own_charts"];?>" onclick="switch_tab(3); return false;"><?php echo $pgv_lang["stat_own_charts"];?></a></td>
	</tr>
	<tr>
		<td id="pagetab0bottom" class="tab_active_bottom"><img src="<?php echo $PGV_IMAGE_DIR, "/", $PGV_IMAGES["spacer"]["other"]; ?>" width="1" height="1" alt="" /></td>
		<td id="pagetab1bottom" class="tab_inactive_bottom"><img src="<?php echo $PGV_IMAGE_DIR, "/", $PGV_IMAGES["spacer"]["other"]; ?>" width="1" height="1" alt="" /></td>
		<td id="pagetab2bottom" class="tab_inactive_bottom"><img src="<?php echo $PGV_IMAGE_DIR, "/", $PGV_IMAGES["spacer"]["other"]; ?>" width="1" height="1" alt="" /></td>
		<td id="pagetab3bottom" class="tab_inactive_bottom"><img src="<?php echo $PGV_IMAGE_DIR, "/", $PGV_IMAGES["spacer"]["other"]; ?>" width="1" height="1" alt="" /></td>
		<td class="tab_inactive_bottom_right" style="width:30%;"><img src="<?php echo $PGV_IMAGE_DIR, "/", $PGV_IMAGES["spacer"]["other"]; ?>" width="1" height="1" alt="" /></td>
	</tr>
	<tr><td colspan="5">
<div id="tab0" class="<?php echo $TEXT_DIRECTION; ?>">
	<fieldset>
		<legend><?php echo $pgv_lang["statnnames"], ': ', $stats->totalIndividuals();?></legend>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["statnmale"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["statnfemale"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["statnliving"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["statndead"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="center"><?php echo $stats->totalSexMales();?></td>
					<td class="facts_value" align="center"><?php echo $stats->totalSexFemales();?></td>
					<td class="facts_value" align="center"><?php echo $stats->totalLiving();?></td>
					<td class="facts_value" align="center"><?php echo $stats->totalDeceased();?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart" colspan="2"><?php echo $stats->chartSex();?></td>
					<td class="facts_value statistics_chart" colspan="2"><?php echo $stats->chartMortality();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["events"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_births"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_deaths"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="center"><?php echo $stats->totalBirths();?></td>
					<td class="facts_value" align="center"><?php echo $stats->totalDeaths();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_5_birth"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_6_death"];?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart"><?php echo $stats->statsBirth();?></td>
					<td class="facts_value statistics_chart"><?php echo $stats->statsDeath();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_first_birth"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_first_death"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->firstBirth();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->firstDeath();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_last_birth"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_last_death"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->lastBirth();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->lastDeath();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_lifespan"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_avg_age_at_death"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_males"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_females"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="center"><?php echo $stats->averageLifespan(true);?></td>
					<td class="facts_value" align="center"><?php echo $stats->averageLifespanMale(true);?></td>
					<td class="facts_value" align="center"><?php echo $stats->averageLifespanFemale(true);?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart" colspan="3"><?php echo $stats->statsAge();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_lived_longest"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["males"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["females"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topTenOldestMaleList();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topTenOldestFemaleList();?></td>
				</tr>
			</table>
			<br />
			<?php
			if (PGV_USER_ID) {
			?>
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_live_longest"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["males"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["females"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topTenOldestMaleListAlive();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topTenOldestFemaleListAlive();?></td>
				</tr>
			</table>
			<br />
			<?php
			}
			?>
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_names"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["statnsurnames"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["statngivennames"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="center"><?php echo $stats->totalSurnames();?></td>
					<td class="facts_value" align="center"><?php echo $stats->totalGivennames();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["top_surnames"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["top_givennames"];?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart"><?php echo $stats->chartCommonSurnames();?></td>
					<td class="facts_value statistics_chart"><?php echo $stats->chartCommonGiven();?></td>
				</tr>
			</table>
		</fieldset>
	<br />
</div>

<div id="tab1" style="display: none;" class="<?php echo $TEXT_DIRECTION; ?>">
	<fieldset>
		<legend><?php echo $pgv_lang["statnfam"], ': ', $stats->totalFamilies();?></legend>
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["events"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_marriages"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_divorces"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="center"><?php echo $stats->totalMarriages();?></td>
					<td class="facts_value" align="center"><?php echo $stats->totalEventsDivorce();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_7_marr"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_7_div"];?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart"><?php echo $stats->statsMarr();?></td>
					<td class="facts_value statistics_chart"><?php echo $stats->statsDiv();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_first_marriage"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_first_divorce"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->firstMarriage();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->firstDivorce();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_last_marriage"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_last_divorce"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->lastMarriage();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->lastDivorce();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_marr_age"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_long_marr_age"]." - ".$stats->topAgeOfMarriage());?></td>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_short_marr_age"]." - ".$stats->minAgeOfMarriage());?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topAgeOfMarriageFamily();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->minAgeOfMarriageFamily();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_19_arm"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_youngest_male"]." - ".$stats->youngestMarriageMaleAge(true));?></td>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_youngest_female"]." - ".$stats->youngestMarriageFemaleAge(true));?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->youngestMarriageMale();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->youngestMarriageFemale();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_oldest_male"]." - ".$stats->oldestMarriageMaleAge(true));?></td>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_oldest_female"]." - ".$stats->oldestMarriageFemaleAge(true));?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->oldestMarriageMale();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->oldestMarriageFemale();?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart" colspan="2"><?php echo $stats->statsMarrAge();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_childbirth_age"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_youngest_father"]." - ".$stats->youngestFatherAge(true));?></td>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_youngest_mother"]." - ".$stats->youngestMotherAge(true));?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->youngestFather();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->youngestMother();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_oldest_father"]." - ".$stats->oldestFatherAge(true));?></td>
					<td class="facts_label"><?php echo PrintReady($pgv_lang["stat_oldest_mother"]." - ".$stats->oldestMotherAge(true));?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->oldestFather();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->oldestMother();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_children_in_fam"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_average_children"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_22_fwok"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="center"><?php echo $stats->averageChildren();?></td>
					<td class="facts_value" align="center"><?php echo $stats->noChildrenFamilies();?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart"><?php echo $stats->statsChildren();?></td>
					<td class="facts_value statistics_chart"><?php echo $stats->chartNoChildrenFamilies();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_largest_families"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_largest_gfamilies"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topTenLargestFamilyList();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topTenLargestGrandFamilyList();?></td>
				</tr>
				<tr>
					<td class="facts_value statistics_chart" colspan="2"><?php echo $stats->chartLargestFamilies();?></td>
				</tr>
			</table>
			<br />
			<div align="<?php echo $align;?>"><b><?php echo $pgv_lang["stat_age_difference"];?></b></div>
			<table class="facts_table">
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_age_siblings"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_top_age_siblings"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topAgeBetweenSiblingsList();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->topAgeBetweenSiblingsFullName();?></td>
				</tr>
				<tr>
					<td class="facts_label"><?php echo $pgv_lang["stat_age_mf_spouse"];?></td>
					<td class="facts_label"><?php echo $pgv_lang["stat_age_fm_spouse"];?></td>
				</tr>
				<tr>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->ageBetweenSpousesMFList();?></td>
					<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->ageBetweenSpousesFMList();?></td>
				</tr>
			</table>
	</fieldset>
	<br />
</div>

<div id="tab2" style="display: none;" class="<?php echo $TEXT_DIRECTION; ?>">
	<fieldset>
		<legend><?php echo $pgv_lang["stat_records"], ': ', $stats->totalRecords();?></legend>
			<table class="facts_table">
			<tr>
				<td class="facts_label"><?php echo $pgv_lang["stat_media"];?></td>
				<td class="facts_label"><?php echo $pgv_lang["stat_sources"];?></td>
				<td class="facts_label"><?php echo $pgv_lang["stat_notes"];?></td>
				<td class="facts_label"><?php echo $pgv_lang["stat_other"];?></td>
			</tr>
			<tr>
				<td class="facts_value" align="center"><?php echo $stats->totalMedia();?></td>
				<td class="facts_value" align="center"><?php echo $stats->totalSources();?></td>
				<td class="facts_value" align="center"><?php echo $stats->totalNotes();?></td>
				<td class="facts_value" align="center"><?php echo $stats->totalOtherRecords();?></td>
			</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend><?php echo $pgv_lang["stat_events"], ': ', $stats->totalEvents();?></legend>
			<table class="facts_table">
			<tr>
				<td class="facts_label"><?php echo $pgv_lang["stat_first_event"], ' - ', $stats->firstEventType();?></td>
				<td class="facts_label"><?php echo $pgv_lang["stat_last_event"], ' - ', $stats->lastEventType();?></td>
			</tr>
			<tr>
				<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->firstEvent();?></td>
				<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->lastEvent();?></td>
			</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend><?php echo $pgv_lang["stat_media"], ': ', $stats->totalMedia();?></legend>
			<table class="facts_table">
			<tr>
				<td class="facts_label"><?php echo $pgv_lang["media"];?></td>
			</tr>
			<tr>
				<td class="facts_value statistics_chart"><?php echo $stats->chartMedia();?></td>
			</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend><?php echo $pgv_lang["stat_sources"], ': ', $stats->totalSources();?></legend>
			<table class="facts_table">
			<tr>
				<td class="facts_label"><?php echo $pgv_lang["stat_9_indi"]; ?></td>
				<td class="facts_label"><?php echo $pgv_lang["stat_8_fam"]; ?></td>
			</tr>
			<tr>
				<td class="facts_value" align="center"><?php echo $stats->totalIndisWithSources();?></td>
				<td class="facts_value" align="center"><?php echo $stats->totalFamsWithSources();?></td>
			</tr>
			<tr>
				<td class="facts_value statistics_chart"><?php echo $stats->chartIndisWithSources();?></td>
				<td class="facts_value statistics_chart"><?php echo $stats->chartFamsWithSources();?></td>
			</tr>
			</table>
		</fieldset>
		<fieldset>
			<legend><?php echo $pgv_lang["stat_places"], ': ', $stats->totalPlaces();?></legend>
			<table class="facts_table">
			<tr>
				<td class="facts_label"><?php echo $pgv_lang["stat_birth_places"];?></td>
				<td class="facts_label"><?php echo $pgv_lang["stat_death_places"];?></td>
			</tr>
			<tr>
				<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->commonBirthPlacesList();?></td>
				<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->commonDeathPlacesList();?></td>
			</tr>
			<tr>
				<td class="facts_label"><?php echo $pgv_lang["stat_marriage_places"];?></td>
				<td class="facts_label"><?php echo $pgv_lang["stat_countries"];?></td>
			</tr>
			<tr>
				<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->commonMarriagePlacesList();?></td>
				<td class="facts_value" align="<?php echo $align;?>"><?php echo $stats->commonCountriesList();?></td>
			</tr>
			<tr>
				<td class="facts_value" colspan="2"><?php echo $stats->chartDistribution();?></td>
			</tr>
		</table>
	</fieldset>
	<br />
</div>

<div id="tab3" style="display: none;" class="<?php echo $TEXT_DIRECTION; ?>">
	<fieldset>
	<legend><?php echo $pgv_lang["stat_create"]; ?></legend>
	<?php 
require_once PGV_ROOT.'includes/functions/functions_places.php';

if ($ENABLE_AUTOCOMPLETE) require PGV_ROOT.'js/autocomplete.js.htm';
?>
<script language="JavaScript" type="text/javascript">
<!--
	function statusHide(sel) {
		var box = document.getElementById(sel);
		box.style.display = "none";
		var box_m = document.getElementById(sel+"_m");
		if (box_m) box_m.style.display = "none";
		if (sel=="map_opt") {
			var box_axes = document.getElementById("axes");
			if (box_axes) box_axes.style.display = "";
			var box_zyaxes = document.getElementById("zyaxes");
			if (box_zyaxes) box_zyaxes.style.display = "";
		}
	}
	function statusShow(sel) {
		var box = document.getElementById(sel);
		box.style.display = "";
		var box_m = document.getElementById(sel+"_m");
		if (box_m) box_m.style.display = "none";
		if (sel=="map_opt") {
			var box_axes = document.getElementById("axes");
			if (box_axes) box_axes.style.display = "none";
			var box_zyaxes = document.getElementById("zyaxes");
			if (box_zyaxes) box_zyaxes.style.display = "none";
		}
	}
	function statusShowSurname(x) {
	    if (x.value == "surname_distribution_chart") {
			var box = document.getElementById("surname_opt");
			box.style.display = "";
		}
		else if (x.value !== "surname_distribution_chart") {
			var box = document.getElementById("surname_opt");
			box.style.display = "none";
		}
	}
	function openPopup(){
		window.open("", "_popup", "top=50, left=50, width=950, height=480, scrollbars=0, scrollable=0");
		return true;
	}
//-->
</script>
<?php

if (!isset($_SESSION[$GEDCOM."nrpers"])) {
	$nrpers = 0;
}
else {
	$nrpers = $_SESSION[$GEDCOM."nrpers"];
	$nrfam = $_SESSION[$GEDCOM."nrfam"];
	$nrmale = $_SESSION[$GEDCOM."nrmale"];
	$nrfemale = $_SESSION[$GEDCOM."nrfemale"];
}

$_SESSION[$GEDCOM."nrpers"] = $stats->totalIndividuals();
$_SESSION[$GEDCOM."nrfam"] = $stats->totalFamilies();
$_SESSION[$GEDCOM."nrmale"] = $stats->totalSexMales();
$_SESSION[$GEDCOM."nrfemale"] = $stats->totalSexFemales();

echo "\n";
echo '<form method="post" name="form" action="statisticsplot.php?action=newform" target="_popup" onsubmit="return openPopup()">';
echo "\n";
echo '<input type="hidden" name="action" value="update" />';
echo "\n";
echo "<table width=\"100%\">";

if (!isset($plottype)) $plottype = 11;
if (!isset($charttype)) $charttype = 1;
if (!isset($plotshow)) $plotshow = 302;
if (!isset($plotnp)) $plotnp = 201;

if (isset($_SESSION[$GEDCOM."statTicks"])) {
	$xasGrLeeftijden = $_SESSION[$GEDCOM."statTicks"]["xasGrLeeftijden"];
	$xasGrMaanden = $_SESSION[$GEDCOM."statTicks"]["xasGrMaanden"];
	$xasGrAantallen = $_SESSION[$GEDCOM."statTicks"]["xasGrAantallen"];
	$zasGrPeriode = $_SESSION[$GEDCOM."statTicks"]["zasGrPeriode"];
}
else {
	$xasGrLeeftijden = "1,5,10,20,30,40,50,60,70,80,90,100";
	$xasGrMaanden = "-24,-12,0,8,12,18,24,48";
	$xasGrAantallen = "1,2,3,4,5,6,7,8,9,10";
	$zasGrPeriode = "1700,1750,1800,1850,1900,1950,2000";
}
if (isset($_SESSION[$GEDCOM."statTicks1"])) {
	$chart_shows = $_SESSION[$GEDCOM."statTicks1"]["chart_shows"];
	$chart_type = $_SESSION[$GEDCOM."statTicks1"]["chart_type"];
	$surname = $_SESSION[$GEDCOM."statTicks1"]["surname"];
}
else {
	$chart_shows = "world";
	$chart_type = "indi_distribution_chart";
	$surname = $stats->getCommonSurname();
}

?>
	<tr>
		<td class="descriptionbox" colspan="4"><?php print_help_link("stat_help", "qm", "statistiek_list"); ?> <?php echo $pgv_lang["statvars"]; ?></td>
	</tr>
	<tr>
	<td class="descriptionbox width25 wrap"><?php print_help_link("stat_help_x", "qm", "statistiek_list"); ?> <?php echo $pgv_lang["statlxa"]; ?> </td>
	<td class="optionbox">
	<input type="radio" id="stat_11" name="x-as" value="11"
	<?php
	if ($plottype == "11") echo " checked=\"checked\"";
	echo " onclick=\"{statusEnable('z_sex'); statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_11\">", $pgv_lang["stat_11_mb"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_12\" name=\"x-as\" value=\"12\"";
	if ($plottype == "12") echo " checked=\"checked\"";
	echo " onclick=\"{statusEnable('z_sex'); statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_12\">", $pgv_lang["stat_12_md"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_13\" name=\"x-as\" value=\"13\"";
	if ($plottype == "13") echo " checked=\"checked\"";
	echo " onclick=\"{statusChecked('z_none'); statusDisable('z_sex'); statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_13\">", $pgv_lang["stat_13_mm"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_15\" name=\"x-as\" value=\"15\"";
	if ($plottype == "15") echo " checked=\"checked\"";
	echo " onclick=\"{statusChecked('z_none'); statusDisable('z_sex'); statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_15\">", $pgv_lang["stat_15_mm1"], "</label><br />";
//	echo "<input type=\"radio\" id=\"stat_14\" name=\"x-as\" value=\"14\"";
//	if ($plottype == "14") echo " checked=\"checked\"";
//	echo " onclick=\"{statusEnable('z_sex'); statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
//	echo "\" /><label for=\"stat_14\">", $pgv_lang["stat_14_mb1"], "</label><br />";
//	echo "<input type=\"radio\" id=\"stat_16\" name=\"x-as\" value=\"16\"";
//	if ($plottype == "16") echo " checked=\"checked\"";
//	echo " onclick=\"{statusEnable('z_sex'); statusHide('x_years'); statusShow('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
//	echo "\" /><label for=\"stat_16\">", $pgv_lang["stat_16_mmb"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_17\" name=\"x-as\" value=\"17\"";
	if ($plottype == "17") echo " checked=\"checked\"";
	echo " onclick=\"{statusEnable('z_sex'); statusShow('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_17\">", $pgv_lang["stat_17_arb"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_18\" name=\"x-as\" value=\"18\"";
	if ($plottype == "18") echo " checked=\"checked\"";
	echo " onclick=\"{statusEnable('z_sex'); statusShow('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_18\">", $pgv_lang["stat_18_ard"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_19\" name=\"x-as\" value=\"19\"";
	if ($plottype == "19") echo " checked=\"checked\"";
	echo " onclick=\"{statusEnable('z_sex'); statusHide('x_years'); statusShow('x_years_m'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_19\">", $pgv_lang["stat_19_arm"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_20\" name=\"x-as\" value=\"20\"";
	if ($plottype == "20") echo " checked=\"checked\"";
	echo " onclick=\"{statusEnable('z_sex'); statusHide('x_years'); statusShow('x_years_m'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_20\">", $pgv_lang["stat_20_arm1"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_21\" name=\"x-as\" value=\"21\"";
	if ($plottype == "21") echo " checked=\"checked\"";
	echo " onclick=\"{statusEnable('z_sex'); statusHide('x_years'); statusHide('x_months'); statusShow('x_numbers'); statusHide('map_opt');}";
	echo "\" /><label for=\"stat_21\">", $pgv_lang["stat_21_nok"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_1\" name=\"x-as\" value=\"1\"";
	if ($plottype == "1") echo " checked=\"checked\"";
	echo " onclick=\"{statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusShow('map_opt'); statusShow('chart_type'); statusHide('axes');}";
	echo "\" /><label for=\"stat_1\">", $pgv_lang["stat_1_map"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_2\" name=\"x-as\" value=\"2\"";
	if ($plottype == "2") echo " checked=\"checked\"";
	echo " onclick=\"{statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusShow('map_opt'); statusHide('chart_type'); statusHide('surname_opt');}";
	echo "\" /><label for=\"stat_2\">", $pgv_lang["stat_2_map"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_4\" name=\"x-as\" value=\"4\"";
	if ($plottype == "4") echo " checked=\"checked\"";
	echo " onclick=\"{statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusShow('map_opt'); statusHide('chart_type'); statusHide('surname_opt');}";
	echo "\" /><label for=\"stat_4\">", $pgv_lang["stat_4_map"], "</label><br />";
	echo "<input type=\"radio\" id=\"stat_3\" name=\"x-as\" value=\"3\"";
	if ($plottype == "3") echo " checked=\"checked\"";
	echo " onclick=\"{statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusShow('map_opt'); statusHide('chart_type'); statusHide('surname_opt');}";
	echo "\" /><label for=\"stat_3\">", $pgv_lang["stat_3_map"], "</label><br />";
	?>
	<br />
	<div id="x_years" style="display:none;">
	<?php
	print_help_link("stat_help_gax", "qm", "statistiek_list");
	echo $pgv_lang["statar_xgl"];
	?>
	<br /><select id="xas-grenzen-leeftijden" name="xas-grenzen-leeftijden">
		<option value="1,5,10,20,30,40,50,60,70,80,90,100" selected="selected"><?php
			echo $pgv_lang["interval"], " 10 ", $pgv_lang["years"];?></option>
		<option value="5,20,40,60,75,80,85,90"><?php
			echo $pgv_lang["interval"], " 20 ", $pgv_lang["years"];?></option>
		<option value="10,25,50,75,100"><?php
			echo $pgv_lang["interval"], " 25 ", $pgv_lang["years"];?></option>
	</select><br />
	</div>
	<div id="x_years_m" style="display:none;">
	<?php
	print_help_link("stat_help_gbx", "qm", "statistiek_list");
	echo $pgv_lang["statar_xgl"];
	?>
	<br /><select id="xas-grenzen-leeftijden_m" name="xas-grenzen-leeftijden_m">
		<option value="16,18,20,22,24,26,28,30,32,35,40,50" selected="selected"><?php
			echo $pgv_lang["interval"], " 2 ", $pgv_lang["years2"];?></option>
		<option value="20,25,30,35,40,45,50"><?php
			echo $pgv_lang["interval"], " 5 ", $pgv_lang["years"];?></option>
	</select><br />
	</div>
	<div id="x_months" style="display:none;">
	<?php
	print_help_link("stat_help_gwx", "qm", "statistiek_list");
	echo $pgv_lang["statar_xgm"];
	?>
	<br /><select id="xas-grenzen-maanden" name="xas-grenzen-maanden">
		<option value="0,8,12,15,18,24,48" selected="selected"><?php echo $pgv_lang["aft_marr"];?></option>
		<option value="-24,-12,0,8,12,18,24,48"><?php echo $pgv_lang["bef_marr"];?></option>
		<option value="0,6,9,12,15,18,21,24"><?php echo $pgv_lang["quarters"];?></option>
		<option value="0,6,12,18,24"><?php echo $pgv_lang["half_year"];?></option>
	</select><br />
	</div>
	<div id="x_numbers" style="display:none;">
	<?php
	print_help_link("stat_help_gcx", "qm", "statistiek_list");
	echo $pgv_lang["statar_xga"];
	?>
	<br /><select id="xas-grenzen-aantallen" name="xas-grenzen-aantallen">
		<option value="1,2,3,4,5,6,7,8,9,10" selected="selected"><?php echo $pgv_lang["one_child"];?></option>
		<option value="2,4,6,8,10,12"><?php echo $pgv_lang["two_children"];?></option>
	</select>
	<br />
	</div>
	<div id="map_opt" style="display:none;">
	<div id="chart_type">
	<?php
	print_help_link('chart_type_help', 'qm', "statistiek_list");
	echo $pgv_lang["map_type"]
	?>
	<br /><select name="chart_type" onchange="statusShowSurname(this);">
		<option value="indi_distribution_chart" selected="selected">
			<?php echo $pgv_lang["indi_distribution_chart"]; ?></option>
		<option value="surname_distribution_chart">
			<?php echo $pgv_lang["surname_distribution_chart"]; ?></option>
	</select>
	<br />
	</div>
	<div id="surname_opt" style="display:none;">
	<?php
	print_help_link('google_chart_surname_help', 'qm', "statistiek_list");
	echo $factarray['SURN'], '<br /><input type="text" name="SURN" size="20" />';
	?>
	<br />
	</div>
	<?php
	print_help_link('chart_area_help', 'qm', "statistiek_list");
	echo $pgv_lang["area_chart"]
	?>
	<br /><select id="chart_shows" name="chart_shows">
		<option value="world" selected="selected"><?php echo $pgv_lang["world_chart"]; ?></option>
		<option value="europe"><?php echo $pgv_lang["europe_chart"]; ?></option>
		<option value="south_america"><?php echo $pgv_lang["s_america_chart"]; ?></option>
		<option value="asia"><?php echo $pgv_lang["asia_chart"]; ?></option>
		<option value="middle_east"><?php echo $pgv_lang["middle_east_chart"]; ?></option>
		<option value="africa"><?php echo $pgv_lang["africa_chart"]; ?></option>
	</select>
	</div>
	</td>
	<td class="descriptionbox width20 wrap" id="axes"><?php print_help_link("stat_help_z", "qm", "statistiek_list"); ?> <?php echo $pgv_lang["statlza"]; ?>  </td>
	<td class="optionbox width30" id="zyaxes">
	<input type="radio" id="z_none" name="z-as" value="300"
	<?php
	if ($plotshow == "300") echo " checked=\"checked\"";
	echo " onclick=\"statusDisable('zas-grenzen-periode');";
	echo "\" /><label for=\"z_none\">", $pgv_lang["stat_300_none"], "</label><br />";
	echo "<input type=\"radio\" id=\"z_sex\" name=\"z-as\" value=\"301\"";
	if ($plotshow == "301") echo " checked=\"checked\"";
	echo " onclick=\"statusDisable('zas-grenzen-periode');";
	echo "\" /><label for=\"z_sex\">", $pgv_lang["stat_301_mf"], "</label><br />";
	echo "<input type=\"radio\" id=\"z_time\" name=\"z-as\" value=\"302\"";
	if ($plotshow == "302") echo " checked=\"checked\"";
	echo " onclick=\"statusEnable('zas-grenzen-periode');";
	echo "\" /><label for=\"z_time\">", $pgv_lang["stat_302_cgp"], "</label><br /><br />";
	print_help_link("stat_help_gwz", "qm", "statistiek_list");
	echo $pgv_lang["statar_zgp"], "<br />";

	// Allow special processing for different languages
	$func="date_localisation_{$lang_short_cut[$LANGUAGE]}";
	if (!function_exists($func))
		$func="DefaultDateLocalisation";
	// Localise the date
	$q1='from'; $d1='';
	$q2=''; $d2=''; $q3='';
	$func($q1, $d1, $q2, $d2, $q3);
	?>
	<select id="zas-grenzen-periode" name="zas-grenzen-periode">
		<option value="1700,1750,1800,1850,1900,1950,2000" selected="selected"><?php
			$d1 = 1700;
			echo trim("{$q1} {$d1} {$q2} {$d2} {$q3}"), " ", $pgv_lang["interval"], " 50 ", $pgv_lang["years"];?></option>
		<option value="1800,1840,1880,1920,1950,1970,2000"><?php
			$d1 = 1800;
			echo trim("{$q1} {$d1} {$q2} {$d2} {$q3}"), " ", $pgv_lang["interval"], " 40 ", $pgv_lang["years"];?></option>
		<option value="1800,1850,1900,1950,2000"><?php
			$d1 = 1800;
			echo trim("{$q1} {$d1} {$q2} {$d2} {$q3}"), " ", $pgv_lang["interval"], " 50 ", $pgv_lang["years"];?></option>
		<option value="1900,1920,1940,1960,1980,1990,2000"><?php
			$d1 = 1900;
			echo trim("{$q1} {$d1} {$q2} {$d2} {$q3}"), " ", $pgv_lang["interval"], " 20 ", $pgv_lang["years"];?></option>
		<option value="1900,1925,1950,1975,2000"><?php
			$d1 = 1900;
			echo trim("{$q1} {$d1} {$q2} {$d2} {$q3}"), " ", $pgv_lang["interval"], " 25 ", $pgv_lang["years"];?></option>
		<option value="1940,1950,1960,1970,1980,1990,2000"><?php
			$d1 = 1940;
			echo trim("{$q1} {$d1} {$q2} {$d2} {$q3}"), " ", $pgv_lang["interval"], " 10 ", $pgv_lang["years"];?></option>
	</select>
	<br /><br />
	<?php
	print_help_link("stat_help_y", "qm", "statistiek_list");
	echo $pgv_lang["statlya"], "<br />";
	?>
	<input type="radio" id="y_num" name="y-as" value="201"
	<?php
	if ($plotnp == "201") echo " checked=\"checked\"";
	echo " /><label for=\"y_num\">", $pgv_lang["stat_201_num"], "</label><br />";
	echo "<input type=\"radio\" id=\"y_perc\" name=\"y-as\" value=\"202\"";
	if ($plotnp == "202") echo " checked=\"checked\"";
	echo " /><label for=\"y_perc\">", $pgv_lang["stat_202_perc"], "</label><br />";
	?>
	</td>
	</tr>
	</table>
	<table width="100%">
	<tr align="center"><td>
		<br/>
		<input type="submit" value="<?php echo $pgv_lang["statsubmit"]; ?> " onclick="closeHelp();" />
		<input type="reset"  value=" <?php echo $pgv_lang["statreset"]; ?> " onclick="{statusEnable('z_sex'); statusHide('x_years'); statusHide('x_months'); statusHide('x_numbers'); statusHide('map_opt');}" /><br/>
	</td>
	</tr>
</table>
</form>
<?php
$_SESSION["plottype"]=$plottype;
$_SESSION["plotshow"]=$plotshow;
$_SESSION["plotnp"]=$plotnp;
?>
	</fieldset>
	<br />
	</div>
</td>
</tr>
</table>
<?php
echo "<br/><br/>";
print_footer();
?>
