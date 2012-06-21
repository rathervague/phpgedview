<?php
/**
 * User Account Edit Interface.
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
 * @version $Id: edituser.php 6879 2010-01-30 11:35:46Z fisharebest $
 */

define('PGV_SCRIPT_NAME', 'edituser.php');
require './config.php';
require PGV_ROOT.'includes/functions/functions_print_lists.php';
require PGV_ROOT.'includes/functions/functions_edit.php';

// prevent users with editing account disabled from being able to edit their account
if (get_user_setting(PGV_USER_ID, 'editaccount')!='Y') {
	header('Location: index.php?ctype=user');
	exit;
}

// Load language variables
loadLangFile('pgv_confighelp, pgv_admin, pgv_editor');

// Valid values for form variables
$ALL_ACTIONS=array('update');
$ALL_CONTACT_METHODS=array('messaging', 'messaging2', 'messaging3', 'mailto', 'none');
$ALL_DEFAULT_TABS=array(0=>'personal_facts', 1=>'notes', 2=>'ssourcess', 3=>'media', 4=>'relatives', -1=>'all', -2=>'lasttab');
$ALL_THEMES_DIRS=array();
foreach (get_theme_names() as $themename=>$themedir) {
	$ALL_THEME_DIRS[]=$themedir;
}

// Extract form variables
$form_action        =safe_POST('form_action'   );
$form_username      =safe_POST('form_username',       PGV_REGEX_USERNAME);
$form_firstname     =safe_POST('form_firstname');
$form_lastname      =safe_POST('form_lastname' );
$form_pass1         =safe_POST('form_pass1',          PGV_REGEX_PASSWORD);
$form_pass2         =safe_POST('form_pass2',          PGV_REGEX_PASSWORD);
$form_email         =safe_POST('form_email',          PGV_REGEX_EMAIL,               'email@example.com');
$form_rootid        =safe_POST('form_rootid',         PGV_REGEX_XREF,                PGV_USER_ROOT_ID   );
$form_theme         =safe_POST('form_theme',          $ALL_THEME_DIRS,               $THEME_DIR         );
$form_language      =safe_POST('form_language',       array_keys($pgv_language),     $LANGUAGE          );
$form_contact_method=safe_POST('form_contact_method', $ALL_CONTACT_METHODS,          $CONTACT_METHOD    );
$form_default_tab   =safe_POST('form_default_tab',    array_keys($ALL_DEFAULT_TABS), $GEDCOM_DEFAULT_TAB);
$form_visible_online=safe_POST('form_visible_online', 'Y', 'N');

// Respond to form action
if ($form_action=='update') {
	if ($form_username!=PGV_USER_NAME && get_user_id($form_username)) {
		print_header($pgv_lang['user_admin']);
		echo '<span class="error">', $pgv_lang['duplicate_username'], '</span><br />';
	} else {
		$alphabet=getAlphabet().'_-. ';
		$i=1;
		$pass=true;
		while (strlen($form_username) > $i) {
			if (stristr($alphabet, $form_username{$i})===false) {
				$pass=false;
				break;
			}
			$i++;
		}
		if (!$pass) {
			print_header($pgv_lang['user_admin']);
			echo '<span class="error">', $pgv_lang['invalid_username'], '</span><br />';
		} else {
			// Change password
			if (!empty($form_pass1)) {
				AddToLog('User changed password');
				set_user_password(PGV_USER_ID, crypt($form_pass1));
			}
			$old_firstname=get_user_setting(PGV_USER_ID, 'firstname');
			$old_lastname =get_user_setting(PGV_USER_ID, 'lastname');
			$old_email    =get_user_setting(PGV_USER_ID, 'email');
			// Change other settings
			set_user_setting(PGV_USER_ID, 'firstname',     $form_firstname);
			set_user_setting(PGV_USER_ID, 'lastname',      $form_lastname);
			set_user_setting(PGV_USER_ID, 'email',         $form_email);
			set_user_setting(PGV_USER_ID, 'theme',         $form_theme);
			set_user_setting(PGV_USER_ID, 'language',      $form_language);
			set_user_setting(PGV_USER_ID, 'contactmethod', $form_contact_method);
			set_user_setting(PGV_USER_ID, 'visibleonline', $form_visible_online);
			set_user_setting(PGV_USER_ID, 'defaulttab',    $form_default_tab);
			set_user_gedcom_setting(PGV_USER_ID, PGV_GED_ID, 'rootid', $form_rootid);

			// update gedcom record with new email address
			if (get_user_setting(PGV_USER_ID, 'sync_gedcom')=='Y') {
				if ($form_email!=$old_email) {
					foreach (get_all_gedcoms() as $ged_id=>$ged_name) {
						$myid=get_user_gedcom_setting(PGV_USER_ID, $ged_id, 'gedcomid');
						if ($myid) {
							$OLDGEDCOM=$GEDCOM;
							$GEDCOM=$ged_name;
							$person=Person::getInstance($myid);
							if ($person) {
								if (preg_match('/\d _?EMAIL/', $person->getGedcomRecord())) {
									replace_gedrec($myid, preg_replace("/(\n\d _?EMAIL).*/", '$1 '.$form_email, $person->getGedcomRecord()));
								} else {
									replace_gedrec($myid, $person->getGedcomRecord()."\n1 EMAIL ".$form_email);
								}
							}
							$GEDCOM=$OLDGEDCOM;
						}
					}
				}
				if ($form_firstname!=$old_firstname || $form_lastname!=$old_lastname) {
					// update gedcom record with new name
					// Is this functionality required?
				}
			}
			// Change username
			if ($form_username!=PGV_USER_NAME) {
				AddToLog('User renamed to ->'.$form_username.'<-');
				rename_user(PGV_USER_ID, $form_username);
				$_SESSION['pgv_user']=$form_username;
			}
			// Reload page to pick up changes such as theme and user_id
			header('Location: edituser.php');
			exit;
		}
	}
} else {
	print_header($pgv_lang['user_admin']);

	if ($ENABLE_AUTOCOMPLETE) require PGV_ROOT.'js/autocomplete.js.htm';
}

// Form validation
?>
<script language="JavaScript" type="text/javascript">
<!--
function checkform(frm) {
	if (frm.form_username.value=="") {
		alert("<?php print $pgv_lang['enter_username'];?>");
		frm.form_username.focus();
		return false;
	}
	if (frm.form_firstname.value=="") {
		alert("<?php print $pgv_lang['enter_fullname'];?>");
		frm.form_firstname.focus();
		return false;
	}
	if (frm.form_lastname.value=="") {
		alert("<?php print $pgv_lang['enter_fullname'];?>");
		frm.form_lastname.focus();
		return false;
	}
	if (frm.form_email.value.indexOf("@")==-1) {
		alert("<?php print $pgv_lang['enter_email'];?>");
		frm.user_email.focus();
		return false;
	}
	if (frm.form_pass1.value!=frm.form_pass2.value) {
		alert("<?php print $pgv_lang['password_mismatch'];?>");
		frm.form_pass1.focus();
		return false;
	}
	if (frm.form_pass1.value.length > 0 && frm.form_pass1.value.length < 6) {
		alert("<?php print $pgv_lang['passwordlength'];?>");
		frm.form_pass1.focus();
		return false;
	}
	return true;
}
var pastefield;
function paste_id(value) {
	pastefield.value=value;
}
-->
</script>
<?php

// show the form to edit a user account details
$tab=0;
echo '<form name="editform" method="post" action="" onsubmit="return checkform(this);">';
echo '<input type="hidden" name="form_action" value="update" />';
echo '<table class="list_table center ', $TEXT_DIRECTION, '">';

echo '<tr><td class="topbottombar" colspan="2"><h2>', $pgv_lang['editowndata'], '</h2></td></tr>';

echo '<tr><td class="topbottombar" colspan="2"><input type="submit" tabindex="', ++$tab, '" value="', $pgv_lang['update_myaccount'], '" /></td></tr>';

echo '<tr><td class="descriptionbox width20 wrap">';
echo print_help_link('edituser_username_help', 'qm', '', false, true);
echo $pgv_lang['username'], '</td><td class="optionbox">';
echo '<input type="text" name="form_username" tabindex="', ++$tab, '" value="', PGV_USER_NAME, '" />';
echo '</td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_firstname_help', 'qm', '', false, true);
echo $pgv_lang['firstname'], '</td><td class="optionbox">';
echo '<input type="text" name="form_firstname" tabindex="', ++$tab, '" value="', get_user_setting(PGV_USER_ID, 'firstname'), '" />';
echo '</td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_lastname_help', 'qm', '', false, true);
echo $pgv_lang['lastname'], '</td><td class="optionbox">';
echo '<input type="text" name="form_lastname" tabindex="', ++$tab, '" value="', get_user_setting(PGV_USER_ID, 'lastname'), '" />';
echo '</td></tr>';

$person=Person::getInstance(PGV_USER_GEDCOM_ID);
if ($person) {
	echo '<tr><td class="descriptionbox wrap">';
	echo print_help_link("edituser_gedcomid_help", "qm", '', false, true);
	echo $pgv_lang['gedcomid'], '</td><td class="optionbox">';
	echo $person->format_list('span');
	echo '</td></tr>';
}

$person=Person::getInstance(PGV_USER_ROOT_ID);
echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_rootid_help', 'qm', '', false, true);
echo $pgv_lang['rootid'], '</td><td class="optionbox">';
echo '<input type="text" name="form_rootid" id="rootid" tabindex="', ++$tab, '" value="', PGV_USER_ROOT_ID, '" />';
echo print_findindi_link('rootid', '', true), '<br/>';
if ($person) {
	echo $person->format_list('span');
}
echo '</td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_password_help', 'qm', '', false, true);
echo $pgv_lang['password'], '</td><td class="optionbox">';
echo '<input type="password" name="form_pass1" tabindex="', ++$tab, '" /> ', $pgv_lang['leave_blank'], '</td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_conf_password_help', 'qm', '', false, true);
echo $pgv_lang['confirm'], '</td><td class="optionbox">';
echo '<input type="password" name="form_pass2" tabindex="', ++$tab, '" /></td></tr>';

if ($ENABLE_MULTI_LANGUAGE) {
	echo '<tr><td class="descriptionbox wrap">';
	echo print_help_link('edituser_change_lang_help', 'qm', '', false, true);
	echo $pgv_lang['change_lang'], '</td><td class="optionbox" valign="top">';
	echo '<select name="form_language" tabindex="', ++$tab, '">';
	foreach ($pgv_language as $key=> $value) {
		if ($language_settings[$key]["pgv_lang_use"]) {
			echo '<option value="', $key, '"';
			if ($key==get_user_setting(PGV_USER_ID, 'language')) {
				echo ' selected="selected"';
			}
			echo '>', $pgv_lang[$key], '</option>';
		}
	}
	echo '</select></td></tr>';
}

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_email_help', 'qm', '', false, true);
echo $pgv_lang['emailadress'], '</td><td class="optionbox" valign="top">';
echo '<input type="text" name="form_email" tabindex="', ++$tab, '" value="', get_user_setting(PGV_USER_ID, 'email'), '" size="50" /></td></tr>';

if ($ALLOW_USER_THEMES) {
	echo '<tr><td class="descriptionbox wrap">';
	echo print_help_link('edituser_user_theme_help', 'qm', '', false, true);
	echo $pgv_lang['user_theme'], '</td><td class="optionbox" valign="top">';
	echo '<select name="form_theme" tabindex="', ++$tab, '">';
		echo '<option value="">', $pgv_lang['site_default'], '</option>';
		foreach (get_theme_names() as $themename=>$themedir) {
			echo '<option value="', $themedir, '"';
			if ($themedir==get_user_setting(PGV_USER_ID, 'theme')) {
				echo ' selected="selected"';
			}
			echo '>', $themename, '</option>';
		}
		echo '</select></td></tr>';
}

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('edituser_user_contact_help', 'qm', '', false, true);
echo $pgv_lang['user_contact_method'], '</td><td class="optionbox">';
echo '<select name="form_contact_method" tabindex="', ++$tab, '">';
foreach ($ALL_CONTACT_METHODS as $key=>$value) {
	if ($PGV_STORE_MESSAGES || $key>=2) {
		echo '<option value="', $value, '"';
		if ($value==get_user_setting(PGV_USER_ID, 'contactmethod')) {
			echo ' selected="selected"';
		}
		echo '>', $pgv_lang[$value], '</option>';
	}
}
echo '</select></td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link('useradmin_visibleonline_help', 'qm', '', false, true);
echo $pgv_lang['visibleonline'], '</td><td class="optionbox">';
echo '<input type="checkbox" name="form_visible_online" tabindex="', ++$tab, '" value="Y"';
if (get_user_setting(PGV_USER_ID, 'visibleonline')=='Y') {
	echo ' checked="checked"';
}
echo ' /></td></tr>';

echo '<tr><td class="descriptionbox wrap">';
echo print_help_link("edituser_user_default_tab_help", "qm", '', false, true);
echo $pgv_lang['user_default_tab'], '</td><td class="optionbox">';
echo '<select name="form_default_tab" tabindex="', ++$tab, '">';
foreach ($ALL_DEFAULT_TABS as $key=>$value) {
	echo '<option value="', $key,'"';
	if ($key==get_user_setting(PGV_USER_ID, 'defaulttab')) {
		echo ' selected="selected"';
	}
	echo '>', $pgv_lang[$value], '</option>';
}
echo '</select></td></tr>';

echo '<tr><td class="topbottombar" colspan="2"><input type="submit" tabindex="', ++$tab, '" value="', $pgv_lang['update_myaccount'], '" /></td></tr>';

echo '</table></form>';

print_footer();
?>
