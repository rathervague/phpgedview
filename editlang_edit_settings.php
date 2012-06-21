<?php
/**
 * File to edit the language settings of PHPGedView
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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
 * @subpackage Admin
 * @version $Id: editlang_edit_settings.php 6946 2010-03-23 02:51:54Z canajun2eh $
 */

define('PGV_SCRIPT_NAME', 'editlang_edit_settings.php');
require './config.php';

loadLangFile("pgv_confighelp");

$action              =safe_REQUEST($_REQUEST, 'action',                PGV_REGEX_UNSAFE);
$ln                  =safe_REQUEST($_REQUEST, 'ln',                    PGV_REGEX_UNSAFE);
$new_shortcut        =safe_REQUEST($_REQUEST, 'new_shortcut',          PGV_REGEX_UNSAFE);
$v_flagsfile         =safe_REQUEST($_REQUEST, 'v_flagsfile',           PGV_REGEX_UNSAFE);
$v_original_lang_name=safe_REQUEST($_REQUEST, 'v_original_lang_name',  PGV_REGEX_UNSAFE);
$v_lang_shortcut     =safe_REQUEST($_REQUEST, 'v_lang_shortcut',       PGV_REGEX_UNSAFE);

if ($action == "" and $ln == "") {
	header("Location: admin.php");
	exit;
}

if ($action == "cancel") {
	header("Location: changelanguage.php");
	exit;
}

//-- make sure that they have admin status before they can use this page
//-- otherwise have them login again
if (!PGV_USER_IS_ADMIN) {
	echo "Please close this window and do a Login in the former window first...";
	exit;
}

// Create array with configured languages in gedcoms and users
$configuredlanguages = array();

// Read gedcoms configuration and collect language data
foreach (get_all_gedcoms() as $ged_id=>$gedcom) {
	require get_config_file($ged_id);
	$configuredlanguages["gedcom"][$LANGUAGE][$gedcom] = true;
}
// Read user configuration and collect language data
foreach(get_all_users() as $user_id=>$user_name) {
	$configuredlanguages["users"][get_user_setting($user_id,'language')][$user_id] = true;
}

// Determine whether this language's Active status should be protected
$protectActive = false;
if (array_key_exists($ln, $configuredlanguages["gedcom"]) or
	array_key_exists($ln, $configuredlanguages["users"])) {
	$protectActive = true;
}

$d_LangName = "lang_name_" . $ln;
$sentHeader = false;    // Indicates whether HTML headers have been sent
if ($action !="save" and $action != "toggleActive") {
	print_simple_header($pgv_lang["edit_lang_utility"]);
	$sentHeader = true;

	echo PGV_JS_START, "self.focus();", PGV_JS_END;

	//print "<style type=\"text/css\">FORM { margin-top: 0px; margin-bottom: 0px; }</style>";
	echo '<div class="center"><center>';
}

/* ------------------------------------------------------------------------------------- */
function write_td_with_textdir_check(){
	global $TEXT_DIRECTION;

	if ($TEXT_DIRECTION == "ltr") {
		echo '<td class="facts_value" style="text-align:left; " >';
	} else {
		echo '<td class="facts_value" style="text-align:right; ">';
	}
}

/* ------------------------------------------------------------------------------------- */

if ($action == "new_lang") {
	require PGV_ROOT.'includes/lang_codes_std.php';
	$ln = strtolower($lng_codes[$new_shortcut][0]);

	$d_LangName      = "lang_name_" . $ln;
	$languages[$ln]     = $ln;
	$pgv_lang_use[$ln]    = true;
	$pgv_lang_self[$ln]    = $lng_codes[$new_shortcut][0];
	$lang_short_cut[$ln]    = $new_shortcut;
	$lang_langcode[$ln]    = $new_shortcut . ";";
	if (array_key_exists($new_shortcut, $lng_synonyms)) {
		$lang_langcode[$ln] .= $lng_synonyms[$new_shortcut];
	}
	$pgv_language[$ln]    = "languages/lang.".$new_shortcut.".php";
	$confighelpfile[$ln]  = "languages/configure_help.".$new_shortcut.".php";
	$helptextfile[$ln]    = "languages/help_text.".$new_shortcut.".php";
	$adminfile[$ln]    = "languages/admin.".$new_shortcut.".php";
	$editorfile[$ln]    = "languages/editor.".$new_shortcut.".php";
	$countryfile[$ln]    = "languages/countries.".$new_shortcut.".php";
	$faqlistfile[$ln]    = "languages/faqlist.".$new_shortcut.".php";
	$extrafile[$ln]    = "languages/extra.".$new_shortcut.".php";


	// Suggest a suitable flag file
	$temp = strtolower($lng_codes[$new_shortcut][1]).".gif";
	if (file_exists(PGV_ROOT.'images/flags/'.$temp)) {
		$flag = $temp;						// long name takes precedence
	} elseif (file_exists(PGV_ROOT.'images/flags/'.$new_shortcut.".gif")) {
		$flag = $new_shortcut.".gif";		// use short name if long name doesn't exist
	} else {
		$flag = "new.gif";				// default if neither a long nor a short name exist
	}
	$flagsfile[$ln] = "images/flags/" . $flag;
	$v_flagsfile=$flagsfile[$ln];

	$factsfile[$ln]    = "languages/facts.".$new_shortcut.".php";
	$DATE_FORMAT_array[$ln]  = "j F Y";
	$TIME_FORMAT_array[$ln]  = "h:i:s";
	$WEEK_START_array[$ln]  = "1";
	$TEXT_DIRECTION_array[$ln]  = "ltr";
	$NAME_REVERSE_array[$ln]  = false;
	$ALPHABET_upper[$ln]    = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$ALPHABET_lower[$ln]    = "abcdefghijklmnopqrstuvwxyz";
	$MULTI_LETTER_ALPHABET[$ln] = "";
	$MULTI_LETTER_EQUIV[$ln] = "";
	$DICTIONARY_SORT[$ln]   = true;
	$COLLATION[$ln]   = 'utf8_unicode_ci';

	$pgv_lang[$d_LangName]  = $lng_codes[$new_shortcut][0];
}

if ($action != "save" && $action != "toggleActive") {
	echo PGV_JS_START, "var helpWin;\n";
	echo "function helpPopup(which) {\n";
	echo "if ((!helpWin)||(helpWin.closed)) helpWin = window.open('editconfig_help.php?help='+which,'_blank','left=50,top=50,width=500,height=320,resizable=1,scrollbars=1');\n";
	echo "else helpWin.location = 'editconfig_help.php?help='+which;\n";
	echo "return false;\n";
	echo "}\n";
	echo "function CheckFileSelect() {\n";
	echo "if (document.Form1.v_u_lang_filename.value != \"\"){\n";
	echo "document.Form1.v_lang_filename.value = document.Form1.v_u_lang_filename.value;\n";
	echo "}\n";
	echo "}\n";
	echo PGV_JS_END;

	if ($action == "new_lang") {
		echo "<h2>", $pgv_lang["add_new_language"], "</h2>";
	} else {
		echo "<h2>", $pgv_lang["config_lang_utility"], "</h2>";
	}
	// If we've added a new language, but haven't defined its name in the current language,
	// then display something to indicate what is required, rather than an error.
	if (!array_key_exists($d_LangName, $pgv_lang)) {
		$pgv_lang[$d_LangName]="\$pgv_lang['$d_LangName']";
	}
	echo '<div class="center"><b>', $pgv_lang[$d_LangName], "</b></div>";

	echo '<form name="Form1" method="post" action="editlang_edit_settings.php">';
	echo '<input type="hidden" name="', session_name(), '" value="', session_id(), '" />';
	echo '<input type="hidden" name="action" value="save" />';
	echo '<input type="hidden" name="ln" value="', $ln, '" />';
	if ($action == "new_lang") {
		echo '<input type="hidden" name="new_old" value="new" />';
	} else {
		echo '<input type="hidden" name="new_old" value="old" />';
	}

	echo "<br /><center>";
	echo '<input type="submit" value="', $pgv_lang["lang_save"], '" />';
	echo "&nbsp;&nbsp;";
	echo '<input type="submit" value="', $pgv_lang["cancel"], "\" onclick=\"document.Form1.action.value='cancel'\" />";
	echo "</center><br />";

	echo '<table class="facts_table">';

	if ($protectActive) {
		$v_lang_use = true;
	}
	if (!isset($v_lang_use)) {
		$v_lang_use = $pgv_lang_use[$ln];
	}
	echo "<tr>";
	echo '<td class="facts_label" >', print_help_link("active_help", "qm"), $pgv_lang["active"], "</td>";
	write_td_with_textdir_check();

	if ($v_lang_use) {
		echo "<input";
		if ($protectActive) {
			echo ' disabled="disabled"';
		}
		echo ' type="checkbox" name="v_lang_use" value="true" checked="checked" />';
	} else {
		echo '<input type="checkbox" name="v_lang_use" value="true" />';
	}
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_original_lang_name)) {
		$v_original_lang_name = $pgv_lang_self[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("original_lang_name_help", "qm");
	echo str_replace("#D_LANGNAME#", $pgv_lang[$d_LangName], $pgv_lang["original_lang_name"]);
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_original_lang_name" size="30" value="', $v_original_lang_name, '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_lang_shortcut)) {
		$v_lang_shortcut = $lang_short_cut[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("lang_shortcut_help", "qm");
	echo $pgv_lang["lang_shortcut"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_lang_shortcut" size="2" value="', $v_lang_shortcut, "\" onchange=\"document.Form1.action.value=''; submit();\" />";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_lang_langcode)) {
		$v_lang_langcode = $lang_langcode[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("lang_langcode_help", "qm");
	echo $pgv_lang["lang_langcode"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_lang_langcode" size="70" value="', $v_lang_langcode, '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_flagsfile)) {
		$v_flagsfile = $flagsfile[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("flagsfile_help", "qm");
	echo $pgv_lang["flagsfile"];
	echo "</td>";
	write_td_with_textdir_check();
	$dire = "images/flags";
	if (($handle = opendir($dire))) {
		$flagfiles = array();
		$sortedflags = array();
		$cf=0;
		print $dire."/";
		while (false !== ($file = readdir($handle))) {
			$pos1 = strpos($file, "gif");
			if ($file != "." && $file != ".." && $pos1) {
				$filelang = substr($file, 0, $pos1-1);
				$fileflag = $dire."/".$filelang.".gif";
				$flagfiles["file"][$cf]=$file;
				$flagfiles["path"][$cf]=$fileflag;
				$sortedflags[$file]=$cf;
				$cf++;
			}
		}
		closedir($handle);
		$sortedflags = array_flip($sortedflags);
		asort($sortedflags);
		$sortedflags = array_flip($sortedflags);
		reset($sortedflags);
		if ($action != "new_lang") {
			echo "&nbsp;&nbsp;&nbsp;<select name=\"v_flagsfile\" id=\"v_flagsfile\" onchange=\"document.getElementById('flag').src=document.getElementById('v_flagsfile').value;\">\n";
			foreach ($sortedflags as $key=>$value) {
				$i = $sortedflags[$key];
				echo '<option value="', $flagfiles["path"][$i], '"';
				if ($v_flagsfile == $flagfiles["path"][$i]){
					echo ' selected="selected"';
					$flag_i = $i;
				}
				echo ">", filename_encode($flagfiles["file"][$i]), "</option>\n";
			}
			echo "</select>\n";
		} else {
			foreach ($sortedflags as $key=>$value) {
				$i = $sortedflags[$key];
				if ($v_flagsfile == $flagfiles["path"][$i]){
					$flag_i = $i;
					break;
				}
			}
			echo '<input type="hidden" name="v_flagsfile" value="', $v_flagsfile, '">';
			echo $flagfiles["file"][$i];
		}
	}
	if (isset($flag_i) && isset($flagfiles["path"][$flag_i])){
		echo '<div style="display: inline; padding-left: 7px;">';
		echo ' <img id="flag" src="', $flagfiles["path"][$flag_i], '" alt="" class="brightflag border1" /></div>';
	}
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_date_format)) {
		$v_date_format = $DATE_FORMAT_array[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("date_format_help", "qm");
	echo $pgv_lang["date_format"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_date_format" size="30" value="', $v_date_format. '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_time_format)) {
		$v_time_format = $TIME_FORMAT_array[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("time_format_help", "qm");
	echo $pgv_lang["time_format"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_time_format" size="30" value="', $v_time_format, '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_week_start)) {
		$v_week_start = $WEEK_START_array[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("week_start_help", "qm");
	echo $pgv_lang["week_start"];
	echo "</td>";
	write_td_with_textdir_check();

	echo '<select size="1" name="v_week_start">';
	$dayArray = array($pgv_lang["sunday"],$pgv_lang["monday"],$pgv_lang["tuesday"],$pgv_lang["wednesday"],$pgv_lang["thursday"],$pgv_lang["friday"],$pgv_lang["saturday"]);

	for ($x = 0; $x <= 6; $x++)  {
		echo "<option";
		if ($v_week_start == $x) {
			echo ' selected="selected"';
		}
		echo ' value="', $x, '">', $dayArray[$x];
		echo "</option>";
	}
	echo "</select>";

	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_text_direction)) {
		$v_text_direction = $TEXT_DIRECTION_array[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("text_direction_help", "qm");
	echo $pgv_lang["text_direction"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<select size="1" name="v_text_direction">';
	echo "<option";
	if ($v_text_direction == "ltr") {
		echo ' selected="selected"';
	}
	echo ' value="0">', $pgv_lang["ltr"], "</option>";
	echo "<option";
	if ($v_text_direction == "rtl") {
		echo ' selected="selected"';
	}
	echo ' value="1">', $pgv_lang["rtl"], "</option>";
	echo "</select>";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_name_reverse)) {
		$v_name_reverse = $NAME_REVERSE_array[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("name_reverse_help", "qm");
	echo $pgv_lang["name_reverse"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<select size="1" name="v_name_reverse">';
	echo "<option";
	if (!$v_name_reverse) {
		echo ' selected="selected"';
	}
	echo ' value="0">', $pgv_lang["no"], "</option>";
	echo "<option";
	if ($v_name_reverse) {
		echo ' selected="selected"';
	}
	echo ' value="1">', $pgv_lang["yes"], "</option>";
	echo "</select>";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_alphabet_upper)) {
		$v_alphabet_upper = $ALPHABET_upper[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("alphabet_upper_help", "qm");
	echo $pgv_lang["alphabet_upper"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_alphabet_upper" size="80" value="', $v_alphabet_upper, '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_alphabet_lower)) {
		$v_alphabet_lower = $ALPHABET_lower[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("alphabet_lower_help", "qm");
	echo $pgv_lang["alphabet_lower"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_alphabet_lower" size="80" value="', $v_alphabet_lower, '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_multi_letter_alphabet)) {
		$v_multi_letter_alphabet = $MULTI_LETTER_ALPHABET[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("multi_letter_alphabet_help", "qm");
	echo $pgv_lang["multi_letter_alphabet"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_multi_letter_alphabet" size="50" value="', $v_multi_letter_alphabet, '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_multi_letter_equiv)) {
		$v_multi_letter_equiv = $MULTI_LETTER_EQUIV[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("multi_letter_equiv_help", "qm");
	echo $pgv_lang["multi_letter_equiv"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_multi_letter_equiv" size="50" value="', $v_multi_letter_equiv, '" />';
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_dictionary_sort)) {
		$v_dictionary_sort = $DICTIONARY_SORT[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("dictionary_sort_help", "qm");
	echo $pgv_lang["dictionary_sort"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<select size="1" name="v_dictionary_sort">';
	echo "<option";
	if (!$v_dictionary_sort) {
		echo ' selected="selected"';
	}
	echo ' value="0">', $pgv_lang["no"], "</option>";
	echo "<option";
	if ($v_dictionary_sort) {
		echo ' selected="selected"';
	}
	echo ' value="1">',	$pgv_lang["yes"], "</option>";
	echo "</select>";
	echo "</td>";
	echo "</tr>";

	echo "<tr>";
	if (!isset($v_collation)) {
		$v_collation = $COLLATION[$ln];
	}
	echo '<td class="facts_label" >';
	print_help_link("collation_help", "qm");
	echo $pgv_lang["collation"];
	echo "</td>";
	write_td_with_textdir_check();
	echo '<input type="text" name="v_collation" size="30" value="', $v_collation, '" />';
	echo "</td>";
	echo "</tr>";

	if (!isset($v_lang_filename)) $v_lang_filename = "languages/lang.".$v_lang_shortcut.".php";
	if (!isset($v_config_filename)) $v_config_filename = "languages/configure_help.".$v_lang_shortcut.".php";
	if (!isset($v_factsfile)) $v_factsfile = "languages/facts.".$v_lang_shortcut.".php";
	if (!isset($v_helpfile)) $v_helpfile = "languages/help_text.".$v_lang_shortcut.".php";
	if (!isset($v_adminfile)) $v_adminfile = "languages/admin.".$v_lang_shortcut.".php";
	if (!isset($v_editorfile)) $v_editorfile = "languages/editor.".$v_lang_shortcut.".php";
	if (!isset($v_countryfile)) $v_countryfile = "languages/countries.".$v_lang_shortcut.".php";
	if (!isset($v_faqlistfile)) $v_faqlistfile = "languages/faqlist.".$v_lang_shortcut.".php";
	if (!isset($v_extrafile)) $v_extrafile = "languages/extra.".$v_lang_shortcut.".php";

	if ($action != "new_lang") {
		echo '<tr><td class="facts_label" >';
		print_help_link("lang_filenames_help", "qm");
		echo $pgv_lang["lang_filenames"];
		echo '</td>';
		write_td_with_textdir_check();

		// Look for missing required language files
		foreach(array($v_adminfile, $v_config_filename, $v_countryfile, $v_editorfile, $v_factsfile, $v_helpfile, $v_lang_filename) as $key => $fileName) {
			echo $fileName;
			if (!file_exists($fileName)) {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;<b class="error">', $pgv_lang["file_does_not_exist"], '</b>';
			}
			echo '<br />';
		}

		// Look for missing optional language files
		foreach(array($v_faqlistfile, $v_extrafile) as $key => $fileName) {
			echo $fileName;
			if (!file_exists($fileName)) {
				echo '&nbsp;&nbsp;&nbsp;&nbsp;', $pgv_lang["optional_file_not_exist"];
			}
			echo '<br />';
		}
		echo '</td></tr>';
	}

	echo "</table>";

	echo "<br />";
	echo "<center>";
	echo '<input type="submit" value="', $pgv_lang["lang_save"], '" />&nbsp;&nbsp;';
	echo '<input type="submit" value="', $pgv_lang["cancel"], "\" onclick=\"document.Form1.action.value='cancel'\" />";
	echo "</center>";
	echo "</form>";
}

if ($action == "toggleActive") {
	if ($language_settings[$ln]["pgv_lang_use"] == true) {
		$pgv_lang_use[$ln] = false;
	} else {
		$pgv_lang_use[$ln] = true;
	}
}

if ($action == "save") {
	if ($protectActive) {
		$_POST["v_lang_use"] = true;
	}
	if (!isset($_POST["v_lang_use"])) {
		$_POST["v_lang_use"] = false;
	}
	if ($_POST["new_old"] == "new") {
		$lang = array();
		$d_LangName      = "lang_name_".$ln;
		$pgv_lang_self[$d_LangName]  = $v_original_lang_name;
		$pgv_language[$ln]    = "languages/lang.".$v_lang_shortcut.".php";
		$confighelpfile[$ln]  = "languages/configure_help.".$v_lang_shortcut.".php";
		$helptextfile[$ln]    = "languages/help_text.".$v_lang_shortcut.".php";
		$factsfile[$ln]    = "languages/facts.".$v_lang_shortcut.".php";
		$adminfile[$ln]    = "languages/admin.".$v_lang_shortcut.".php";
		$editorfile[$ln]    = "languages/editor.".$v_lang_shortcut.".php";
		$countryfile[$ln]    = "languages/countries.".$v_lang_shortcut.".php";
		$faqlistfile[$ln]    = "languages/faqlist.".$v_lang_shortcut.".php";
		$extrafile[$ln]    = "languages/extra.".$v_lang_shortcut.".php";
		$language_settings[$ln]  = $lang;
		$languages[$ln]    = $ln;
	}

	$flagsfile[$ln]    = $v_flagsfile;
	$pgv_lang_self[$ln]  = $_POST["v_original_lang_name"];
	$pgv_lang_use[$ln]  = $_POST["v_lang_use"];
	$lang_short_cut[$ln]  = $_POST["v_lang_shortcut"];
	$lang_langcode[$ln]  = $_POST["v_lang_langcode"];

	if (substr($lang_langcode[$ln],strlen($lang_langcode[$ln])-1,1) != ";") {
		$lang_langcode[$ln] .= ";";
	}

	$ALPHABET_upper[$ln]  = $_POST["v_alphabet_upper"];
	$ALPHABET_lower[$ln]  = $_POST["v_alphabet_lower"];
	$MULTI_LETTER_ALPHABET[$ln]  = $_POST["v_multi_letter_alphabet"];
	$MULTI_LETTER_EQUIV[$ln]  = $_POST["v_multi_letter_equiv"];
	$DICTIONARY_SORT[$ln]  = $_POST["v_dictionary_sort"];
	$COLLATION[$ln]  = $_POST["v_collation"];
	$DATE_FORMAT_array[$ln]  = $_POST["v_date_format"];
	$TIME_FORMAT_array[$ln]  = $_POST["v_time_format"];
	$WEEK_START_array[$ln]  = $_POST["v_week_start"];
	if ($_POST["v_text_direction"] == "0") {
		$TEXT_DIRECTION_array[$ln] = "ltr"; 
	} else {
		$TEXT_DIRECTION_array[$ln] = "rtl";
	}
	$NAME_REVERSE_array[$ln]  = $_POST["v_name_reverse"];
}

if ($action == "save" or $action=="toggleActive") {
	$error = update_lang_settings();

	if ($error != "") {
		if (!$sentHeader) {
			print_simple_header($pgv_lang["config_lang_utility"]);
			$sentHeader = true;
			echo '<div class="center"><center>';
		}
		echo '<span class="error">', $pgv_lang[$error], '</span><br /><br />';
		echo '<form name="Form2" method="post" action="', PGV_SCRIPT_NAME, '">';
		echo '<table class="facts_table">';
		echo '<tr><td class="facts_value" style="text-align:center; " >';
		srand((double)microtime()*1000000);
		echo '<input type="submit" value="', $pgv_lang["close_window"], '" onclick="window.opener.showchanges(); self.close();" />';
		echo '</td></tr>';
		echo '</table>';
		echo '</form>';
	}

}
if ($sentHeader) {
	echo "</center></div>";

	print_simple_footer();
} else {
	header("Location: changelanguage.php");
	exit;
}

?>
