<?php
/**
* Online UI for editing site configuration variables
*
* phpGedView: Genealogy Viewer
* Copyright (C) 2002 to 2009  PGV Development Team. All rights reserved.
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
* This Page Is Valid XHTML 1.0 Transitional! > 17 September 2005
*
* @package PhpGedView
* @subpackage GoogleMap
* @version $Id: editconfig.php 6643 2009-12-29 18:36:11Z wooc $
*/

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

require PGV_ROOT.'modules/googlemap/defaultconfig.php';

loadLangFile('pgv_lang, pgv_confighelp, pgv_help, googlemap:lang, googlemap:help_text');

if (isset($_REQUEST['action'])) {
	$action  = $_REQUEST['action'];
}

function print_level_config_table($level) {
	global $pgv_lang, $GM_MARKER_COLOR, $GM_MARKER_SIZE, $GM_PREFIX;
	global $GM_POSTFIX, $GM_PRE_POST_MODE, $GM_MAX_NOF_LEVELS, $i;
?>
	<div id="level<?php echo $level;?>" style="display:<?php if ($GM_MAX_NOF_LEVELS >= $level) {echo "block";} else {echo "none";}?>">
		<table class="facts_table">
			<tr>
				<td class="descriptionbox" colspan="2">
					<?php echo $pgv_lang["gm_level"], " ", $level; ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php print_help_link("GM_NAME_PREFIX_help", "qm", "GM_NAME_PREFIX"); echo $pgv_lang["gm_name_prefix"];?>
				</td>
				<td>
					<input type="text" name="NEW_GM_PREFIX_<?php echo $level;?>" value="<?php echo $GM_PREFIX[$level];?>" size="20" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GM_NAME_PREFIX_help');" />
				</td>
			</tr>
			<tr>
				<td>
					<?php print_help_link("GM_NAME_POSTFIX_help", "qm", "GM_NAME_POSTFIX"); echo $pgv_lang["gm_name_postfix"];?>
				</td>
				<td>
					<input type="text" name="NEW_GM_POSTFIX_<?php echo $level;?>" value="<?php echo $GM_POSTFIX[$level];?>" size="20" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GM_NAME_POSTFIX_help');" />
				</td>
			</tr>
			<tr>
				<td>
					<?php print_help_link("GM_NAME_PRE_POST_help", "qm", "GM_NAME_PRE_POST"); echo $pgv_lang["gm_name_pre_post"];?>
				</td>
				<td>
					<select name="NEW_GM_PRE_POST_MODE_<?php echo $level;?>" dir="ltr" tabindex="<?php $i++; echo $i?>" onchange="showSelectedLevels()">
						<option value="0"<?php if ($GM_PRE_POST_MODE[$level] == 0) echo ' selected="selected"';?>><?php echo $pgv_lang["gm_pp_none"];?></option>
						<option value="1"<?php if ($GM_PRE_POST_MODE[$level] == 1) echo ' selected="selected"';?>><?php echo $pgv_lang["gm_pp_n_pr_po_b"];?></option>
						<option value="2"<?php if ($GM_PRE_POST_MODE[$level] == 2) echo ' selected="selected"';?>><?php echo $pgv_lang["gm_pp_n_po_pr_b"];?></option>
						<option value="3"<?php if ($GM_PRE_POST_MODE[$level] == 3) echo ' selected="selected"';?>><?php echo $pgv_lang["gm_pp_pr_po_b_n"];?></option>
						<option value="4"<?php if ($GM_PRE_POST_MODE[$level] == 4) echo ' selected="selected"';?>><?php echo $pgv_lang["gm_pp_po_pr_b_n"];?></option>
						<option value="5"<?php if ($GM_PRE_POST_MODE[$level] == 5) echo ' selected="selected"';?>><?php echo $pgv_lang["gm_pp_pr_po_n_b"];?></option>
						<option value="6"<?php if ($GM_PRE_POST_MODE[$level] == 6) echo ' selected="selected"';?>><?php echo $pgv_lang["gm_pp_po_pr_n_b"];?></option>
					</select>
				</td>
			</tr>
		</table>
	</div>
<?php
}

print_header($pgv_lang["configure_googlemap"]);

echo '<span class="subheaders">', $pgv_lang['configure_googlemap'], '</span>';

if (!PGV_USER_IS_ADMIN) {
	echo "<table class=\"facts_table\">";
	echo "<tr><td colspan=\"2\" class=\"facts_value\">", $pgv_lang["gm_admin_error"];
	echo "</td></tr></table>";
	echo "<br /><br /><br />";
	print_footer();
	exit;
}

if ($action=="update" && !isset($security_user)) {
	set_site_setting('GM_ENABLED',           $_POST['NEW_GM_ENABLE']);
	set_site_setting('GM_API_KEY',           $_POST['NEW_GM_API_KEY']);
	set_site_setting('GM_MAP_TYPE',          $_POST['NEW_GM_MAP_TYPE']);
	set_site_setting('GM_MIN_ZOOM',          $_POST['NEW_GM_MIN_ZOOM']);
	set_site_setting('GM_MAX_ZOOM',          $_POST['NEW_GM_MAX_ZOOM']);
	set_site_setting('GM_XSIZE',             $_POST['NEW_GM_XSIZE']);
	set_site_setting('GM_YSIZE',             $_POST['NEW_GM_YSIZE']);
	set_site_setting('GM_PRECISION_0',       $_POST['NEW_GM_PRECISION_0']);
	set_site_setting('GM_PRECISION_1',       $_POST['NEW_GM_PRECISION_1']);
	set_site_setting('GM_PRECISION_2',       $_POST['NEW_GM_PRECISION_2']);
	set_site_setting('GM_PRECISION_3',       $_POST['NEW_GM_PRECISION_3']);
	set_site_setting('GM_PRECISION_4',       $_POST['NEW_GM_PRECISION_4']);
	set_site_setting('GM_PRECISION_5',       $_POST['NEW_GM_PRECISION_5']);
	set_site_setting('GM_DEFAULT_TOP_VALUE', $_POST['NEW_GM_DEFAULT_TOP_LEVEL']);
	set_site_setting('GM_MAX_NOF_LEVELS',    $_POST['NEW_GM_LEVEL_COUNT']);
	set_site_setting('GM_COORD',             $_POST['NEW_GM_COORD']);
	set_site_setting('GM_PLACE_HIERARCHY',   $_POST['NEW_GM_PLACE_HIERARCHY']);
	set_site_setting('GM_PH_XSIZE',          $_POST['NEW_GM_PH_XSIZE']);
	set_site_setting('GM_PH_YSIZE',          $_POST['NEW_GM_PH_YSIZE']);
	set_site_setting('GM_PH_MARKER',         $_POST['NEW_GM_PH_MARKER']);
	set_site_setting('GM_DISP_SHORT_PLACE',  $_POST['NEW_GM_DISP_SHORT_PLACE']);
	set_site_setting('GM_PH_WHEEL',          $_POST['NEW_GM_PH_WHEEL']);
	set_site_setting('GM_PH_CONTROLS',       $_POST['NEW_GM_PH_CONTROLS']);
	set_site_setting('GM_DISP_COUNT',        $_POST['NEW_GM_DISP_COUNT']);

	for ($i=1; $i<=9; $i++) {
		set_site_setting('GM_PREFIX_'.$i,        $_POST['NEW_GM_PREFIX_'.$i]);
		set_site_setting('GM_POSTFIX_'.$i,       $_POST['NEW_GM_POSTFIX_'.$i]);
		set_site_setting('GM_PRE_POST_MODE_'.$i, $_POST['NEW_GM_PRE_POST_MODE_'.$i]);
	}

	AddToLog('Googlemap config updated');
	// read the config file again, to set the vars
	require PGV_ROOT.'modules/googlemap/defaultconfig.php';
}

$i = 0;

?>
<script language="JavaScript" type="text/javascript">
<!--
	var helpWin;
	function helpPopup(which) {
		if ((!helpWin)||(helpWin.closed)) helpWin = window.open('module.php?mod=googlemap&pgvaction=editconfig_help&help='+which, '_blank', 'left=50, top=50, width=500, height=320, resizable=1, scrollbars=1');
		else helpWin.location = 'modules/googlemap/editconfig_help.php?help='+which;
		return false;
	}
	function getHelp(which) {
		if ((helpWin)&&(!helpWin.closed)) helpWin.location='module.php?mod=googlemap&pgvaction=editconfig_help&help='+which;
	}

	function closeHelp() {
		if (helpWin) helpWin.close();
	}

	function showSelectedLevels() {
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 1) {
			document.getElementById('level1').style.display = 'block';
		} else {
			document.getElementById('level1').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 2) {
			document.getElementById('level2').style.display = 'block';
		} else {
			document.getElementById('level2').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 3) {
			document.getElementById('level3').style.display = 'block';
		} else {
			document.getElementById('level3').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 4) {
			document.getElementById('level4').style.display = 'block';
		} else {
			document.getElementById('level4').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 5) {
			document.getElementById('level5').style.display = 'block';
		} else {
			document.getElementById('level5').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 6) {
			document.getElementById('level6').style.display = 'block';
		} else {
			document.getElementById('level6').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 7) {
			document.getElementById('level7').style.display = 'block';
		} else {
			document.getElementById('level7').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 8) {
			document.getElementById('level8').style.display = 'block';
		} else {
			document.getElementById('level8').style.display = 'none';
		}
		if (document.configform.NEW_GM_LEVEL_COUNT.value >= 9) {
			document.getElementById('level9').style.display = 'block';
		} else {
			document.getElementById('level9').style.display = 'none';
		}
	}

	//-->
</script>

<form method="post" name="configform" action="module.php?mod=googlemap&pgvaction=editconfig">
<input type="hidden" name="action" value="update" />

<table class="facts_table">
	<tr>
		<td class="descriptionbox"><?php print_help_link("GOOGLEMAP_ENABLE_help", "qm", "GOOGLEMAP_ENABLE"); echo $pgv_lang["googlemap_enable"];?></td>
		<td class="optionbox">
			<select name="NEW_GM_ENABLE" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_ENABLED_help');">
				<option value="0" <?php if ($GOOGLEMAP_ENABLED=="0") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["no"];?></option>
				<option value="1" <?php if ($GOOGLEMAP_ENABLED=="1") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["yes"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox"><?php print_help_link("GOOGLEMAP_API_KEY_help", "qm", "GOOGLEMAP_API_KEY"); echo $pgv_lang["googlemapkey"];?></td>
		<td class="optionbox"><input type="text" name="NEW_GM_API_KEY" value="<?php echo $GOOGLEMAP_API_KEY;?>" size="60" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_API_KEY_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox"><?php print_help_link("GOOGLEMAP_MAP_TYPE_help", "qm", "GOOGLEMAP_MAP_TYPE"); echo $pgv_lang["gm_map_type"];?></td>
		<td class="optionbox">
			<select name="NEW_GM_MAP_TYPE" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_MAP_TYPE_help');">
				<option value="G_NORMAL_MAP" <?php if ($GOOGLEMAP_MAP_TYPE=="G_NORMAL_MAP") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["gm_map"];?></option>
				<option value="G_SATELLITE_MAP" <?php if ($GOOGLEMAP_MAP_TYPE=="G_SATELLITE_MAP") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["gm_satellite"];?></option>
				<option value="G_HYBRID_MAP" <?php if ($GOOGLEMAP_MAP_TYPE=="G_HYBRID_MAP") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["gm_hybrid"];?></option>
				<option value="G_PHYSICAL_MAP" <?php if ($GOOGLEMAP_MAP_TYPE=="G_PHYSICAL_MAP") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["gm_physical"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox"><?php print_help_link("GOOGLEMAP_MAP_SIZE_help", "qm", "GOOGLEMAP_MAP_SIZE"); echo $pgv_lang["gm_map_size"];?></td>
		<td class="optionbox">
			<?php echo $pgv_lang["gm_map_size_x"]; ?>
			<input type="text" name="NEW_GM_XSIZE" value="<?php echo $GOOGLEMAP_XSIZE;?>" size="10" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_MAP_SIZE_help');" />
			<?php echo $pgv_lang["gm_map_size_y"]; ?>
			<input type="text" name="NEW_GM_YSIZE" value="<?php echo $GOOGLEMAP_YSIZE;?>" size="10" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_MAP_SIZE_help');" />
		</td>
	</tr>
	<tr>
		<td class="descriptionbox"><?php print_help_link("GOOGLEMAP_PH_help", "qm", "GOOGLEMAP_PH"); echo $pgv_lang["gm_place_hierarchy"];?></td>
		<td class="optionbox">
			<select name="NEW_GM_PLACE_HIERARCHY" tabindex="<?php $i++; echo $i?>;">
				<option value="0" <?php if ($GOOGLEMAP_PLACE_HIERARCHY=="0") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["no"];?></option>
				<option value="1" <?php if ($GOOGLEMAP_PLACE_HIERARCHY=="1") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["yes"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GOOGLEMAP_PH_MAP_SIZE_help", "qm", "GOOGLEMAP_PH_MAP_SIZE"); echo $pgv_lang["gm_ph_map_size"];?>
		</td>
		<td class="optionbox">
			<?php echo $pgv_lang["gm_map_size_x"]; ?>
			<input type="text" name="NEW_GM_PH_XSIZE" value="<?php echo $GOOGLEMAP_PH_XSIZE;?>" size="10" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PH_MAP_SIZE_help');" />
			<?php echo $pgv_lang["gm_map_size_y"]; ?>
			<input type="text" name="NEW_GM_PH_YSIZE" value="<?php echo $GOOGLEMAP_PH_YSIZE;?>" size="10" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PH_MAP_SIZE_help');" />
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GOOGLEMAP_PH_MARKER_help", "qm", "GOOGLEMAP_PH_MARKER"); echo $pgv_lang["gm_ph_marker_type"];?>
		</td>
		<td class="optionbox">
			<select name="NEW_GM_PH_MARKER" tabindex="<?php $i++; echo $i?>;">
				<option value="G_DEFAULT_ICON" <?php if ($GOOGLEMAP_PH_MARKER=="G_DEFAULT_ICON") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["gm_standard_marker"];?></option>
				<option value="G_FLAG" <?php if ($GOOGLEMAP_PH_MARKER=="G_FLAG") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["pl_flag"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GM_DISP_SHORT_PLACE_help", "qm", "GM_DISP_SHORT_PLACE"); echo $pgv_lang["gm_ph_placenames"];?>
		</td>
		<td class="optionbox">
			<select name="NEW_GM_DISP_SHORT_PLACE" tabindex="<?php $i++; echo $i?>;">
				<option value="0" <?php if ($GM_DISP_SHORT_PLACE=="0") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["no"];?></option>
				<option value="1" <?php if ($GM_DISP_SHORT_PLACE=="1") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["yes"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GM_DISP_COUNT_help", "qm", "GM_DISP_COUNT"); echo $pgv_lang["gm_ph_count"];?>
		</td>
		<td class="optionbox">
			<select name="NEW_GM_DISP_COUNT" tabindex="<?php $i++; echo $i?>;">
				<option value="0" <?php if ($GM_DISP_COUNT=="0") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["no"];?></option>
				<option value="1" <?php if ($GM_DISP_COUNT=="1") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["yes"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GOOGLEMAP_PH_WHEEL_help", "qm", "GOOGLEMAP_PH_WHEEL"); echo $pgv_lang["gm_ph_wheel"];?>
		</td>
		<td class="optionbox">
			<select name="NEW_GM_PH_WHEEL" tabindex="<?php $i++; echo $i?>;">
				<option value="0" <?php if ($GOOGLEMAP_PH_WHEEL=="0") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["no"];?></option>
				<option value="1" <?php if ($GOOGLEMAP_PH_WHEEL=="1") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["yes"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GOOGLEMAP_PH_CONTROLS_help", "qm", "GOOGLEMAP_PH_CONTROLS"); echo $pgv_lang["gm_ph_controls"];?>
		</td>
		<td class="optionbox">
			<select name="NEW_GM_PH_CONTROLS" tabindex="<?php $i++; echo $i?>;">
				<option value="0" <?php if ($GOOGLEMAP_PH_CONTROLS=="0") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["no"];?></option>
				<option value="1" <?php if ($GOOGLEMAP_PH_CONTROLS=="1") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["yes"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GOOGLEMAP_COORD_help", "qm", "GOOGLEMAP_COORD"); echo $pgv_lang["googlemap_coord"];?>
		</td>
		<td class="optionbox">
			<select name="NEW_GM_COORD" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_COORD_help');">
				<option value="0" <?php if ($GOOGLEMAP_COORD=="0") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["no"];?></option>
				<option value="1" <?php if ($GOOGLEMAP_COORD=="1") echo "selected=\"selected\""; ?>><?php echo $pgv_lang["yes"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GOOGLEMAP_MAP_ZOOM_help", "qm", "GOOGLEMAP_MAP_ZOOM"); echo $pgv_lang["gm_map_zoom"];?>
		</td>
		<td class="optionbox">
			<?php echo $pgv_lang["gm_min"];?>: <select name="NEW_GM_MIN_ZOOM" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_MAP_ZOOM_help');">
			<?php for ($j=1; $j < 15; $j++) { ?>
			<option value="<?php echo $j, "\""; if ($GOOGLEMAP_MIN_ZOOM==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
			<?php } ?>
			</select>
			<?php echo $pgv_lang["gm_max"];?>: <select name="NEW_GM_MAX_ZOOM" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_MAP_ZOOM_help');">
			<?php for ($j=1; $j < 15; $j++) { ?>
			<option value="<?php echo $j, "\""; if ($GOOGLEMAP_MAX_ZOOM==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
			<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php print_help_link("GOOGLEMAP_PRECISION_help", "qm", "GOOGLEMAP_PRECISION"); echo $pgv_lang["pl_precision"];?>
		</td>
		<td class="optionbox">
			<table>
				<tr>
					<td><?php echo $pgv_lang["pl_country"];?>&nbsp;&nbsp;</td>
					<td><select name="NEW_GM_PRECISION_0" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PRECISION_help');">
						<?php for ($j=0; $j < 10; $j++) { ?>
						<option value="<?php echo $j;?>"<?php if ($GOOGLEMAP_PRECISION_0==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
						<?php } ?>
						</select>&nbsp;&nbsp;<?php echo $pgv_lang["gm_digits"];?>
					</td>
				</tr>
				<tr>
					<td><?php echo $pgv_lang["pl_state"];?>&nbsp;&nbsp;</td>
					<td><select name="NEW_GM_PRECISION_1" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PRECISION_help');">
						<?php for ($j=0; $j < 10; $j++) { ?>
						<option value="<?php echo $j;?>"<?php if ($GOOGLEMAP_PRECISION_1==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
						<?php } ?>
						</select>&nbsp;&nbsp;<?php echo $pgv_lang["gm_digits"];?>
					</td>
				</tr>
				<tr>
					<td><?php echo $pgv_lang["pl_city"];?>&nbsp;&nbsp;</td>
					<td><select name="NEW_GM_PRECISION_2" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PRECISION_help');">
						<?php for ($j=0; $j < 10; $j++) { ?>
						<option value="<?php echo $j;?>"<?php if ($GOOGLEMAP_PRECISION_2==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
						<?php } ?>
						</select>&nbsp;&nbsp;<?php echo $pgv_lang["gm_digits"];?>
					</td>
				</tr>
				<tr><td><?php echo $pgv_lang["pl_neighborhood"];?>&nbsp;&nbsp;</td>
					<td><select name="NEW_GM_PRECISION_3" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PRECISION_help');">
						<?php for ($j=0; $j < 10; $j++) { ?>
						<option value="<?php echo $j;?>"<?php if ($GOOGLEMAP_PRECISION_3==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
						<?php } ?>
						</select>&nbsp;&nbsp;<?php echo $pgv_lang["gm_digits"];?>
					</td>
				</tr>
				<tr><td><?php echo $pgv_lang["pl_house"];?>&nbsp;&nbsp;</td>
					<td><select name="NEW_GM_PRECISION_4" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PRECISION_help');">
						<?php for ($j=0; $j < 10; $j++) { ?>
						<option value="<?php echo $j;?>"<?php if ($GOOGLEMAP_PRECISION_4==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
						<?php } ?>
						</select>&nbsp;&nbsp;<?php echo $pgv_lang["gm_digits"];?>
					</td>
				</tr>
				<tr><td><?php echo $pgv_lang["pl_max"];?>&nbsp;&nbsp;</td>
					<td><select name="NEW_GM_PRECISION_5" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GOOGLEMAP_PRECISION_help');">
						<?php for ($j=0; $j < 10; $j++) { ?>
						<option value="<?php echo $j;?>"<?php if ($GOOGLEMAP_PRECISION_5==$j) echo " selected=\"selected\""; echo ">", $j;?></option>
						<?php } ?>
						</select>&nbsp;&nbsp;<?php echo $pgv_lang["gm_digits"];?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox"><?php print_help_link("GM_DEFAULT_LEVEL_0_help", "qm", "GM_DEFAULT_LEVEL_0"); echo $pgv_lang["gm_default_level0"];?></td>
		<td class="optionbox"><input type="text" name="NEW_GM_DEFAULT_TOP_LEVEL" value="<?php echo $GM_DEFAULT_TOP_VALUE;?>" size="20" tabindex="<?php $i++; echo $i?>" onfocus="getHelp('GM_DEFAULT_LEVEL_0_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox"><?php print_help_link("GM_NOF_LEVELS_help", "qm", "GM_NOF_LEVELS"); echo $pgv_lang["gm_nof_levels"];?></td>
		<td class="optionbox">
			<select name="NEW_GM_LEVEL_COUNT" dir="ltr" tabindex="<?php $i++; echo $i?>" onchange="showSelectedLevels()">
				<option value="1"<?php if ($GM_MAX_NOF_LEVELS == 1) echo " selected=\"selected\"";?>>1</option>
				<option value="2"<?php if ($GM_MAX_NOF_LEVELS == 2) echo " selected=\"selected\"";?>>2</option>
				<option value="3"<?php if ($GM_MAX_NOF_LEVELS == 3) echo " selected=\"selected\"";?>>3</option>
				<option value="4"<?php if ($GM_MAX_NOF_LEVELS == 4) echo " selected=\"selected\"";?>>4</option>
				<option value="5"<?php if ($GM_MAX_NOF_LEVELS == 5) echo " selected=\"selected\"";?>>5</option>
				<option value="6"<?php if ($GM_MAX_NOF_LEVELS == 6) echo " selected=\"selected\"";?>>6</option>
				<option value="7"<?php if ($GM_MAX_NOF_LEVELS == 7) echo " selected=\"selected\"";?>>7</option>
				<option value="8"<?php if ($GM_MAX_NOF_LEVELS == 8) echo " selected=\"selected\"";?>>8</option>
				<option value="9"<?php if ($GM_MAX_NOF_LEVELS == 9) echo " selected=\"selected\"";?>>9</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
			<?php echo $pgv_lang["gm_config_per_level"];?>
		</td>
		<td class="optionbox">
			<?php
				print_level_config_table(1, $i);
				print_level_config_table(2, $i);
				print_level_config_table(3, $i);
				print_level_config_table(4, $i);
				print_level_config_table(5, $i);
				print_level_config_table(6, $i);
				print_level_config_table(7, $i);
				print_level_config_table(8, $i);
				print_level_config_table(9, $i);
			?>
		</td>
	</tr>
</table>
<table class="facts_table">
	<tr>
		<td class="descriptionbox" colspan="2" align="center">
			<a href="module.php?mod=googlemap&pgvaction=places"><?php echo $pgv_lang["edit_place_locations"];?></a>
		</td>
	<tr>
		<td class="descriptionbox" colspan="2" align="center">
			<input type="submit" tabindex="<?php $i++; echo $i?>" value="<?php echo $pgv_lang["save_config"];?>" onclick="closeHelp();" />
			&nbsp;&nbsp;
			<input type="reset" tabindex="<?php $i++; echo $i?>" value="<?php echo $pgv_lang["reset"];?>" />
		</td>
	</tr>
</table>
</form>
<?php
				
if (empty($SEARCH_SPIDER)) {
	print_footer();
} else {
	echo $pgv_lang["label_search_engine_detected"], ": ", $SEARCH_SPIDER;
	echo "</div></body></html>";
}

?>
