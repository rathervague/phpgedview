<?php
/**
 * Installation and Configuration
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2008 to 2009  PGV Development Team.  All rights reserved.
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
 * @subpackage admin
 * @version $Id: install.php 6908 2010-02-03 02:17:33Z canajun2eh $
 */

/*
 * 1. Environment Check
 * 		PHP version, necessary modules
 * 		Config.php
 * 2. Database Connection
 * 3. Configuration Basic/Advanced/SMTP
 * 4. Create Tables
 * 5. Languages
 * 6. Save configuration
 * 7. Create admin user
 * 8. Get Started
 */

define('PGV_SCRIPT_NAME', 'install.php');
//-- load up the configuration or the default configuration
if (file_exists('./config.php')) {
	require_once './config.php';
} else {
	require_once './config.dist';
}

require_once PGV_ROOT.'includes/functions/functions_import.php';

//-- if we are configured, then make sure that only admins access this page
if (PGV_DB::isConnected() && PGV_ADMIN_USER_EXISTS && !PGV_USER_IS_ADMIN) {
	header("Location: login.php?url=install.php");
	exit;
}

loadLangFile('pgv_admin, pgv_confighelp, pgv_help');

ob_start();  // in order for the download function to work, we have to buffer and discard the regular output

// Build the HTML that needs to precede the </head> tag
$head = '';
$head .= "<link rel=\"stylesheet\" href=\"{$stylesheet}\" type=\"text/css\"></link>\n";
$head .= "<style type=\"text/css\">\n";
$head .= ".imenu {\n";
$head .= "	font-size: 12pt;\n";
$head .= "}\n";
$head .= ".pass {\n";
$head .= "	color: green;\n";
$head .= "}\n";
$head .= "</style>\n";
$head .= "<script language=\"JavaScript\" type=\"text/javascript\">\n";
$head .= "<!--\n";
$head .= "	var helpWin;\n";
$head .= "	function helpPopup(which) {\n";
$head .= "		if ((!helpWin)||(helpWin.closed)) helpWin = window.open('editconfig_help.php?help='+which,'_blank','left=50,top=50,width=500,height=320,resizable=1,scrollbars=1');\n";
$head .= "		else helpWin.location = 'editconfig_help.php?help='+which;\n";
$head .= "		return false;\n";
$head .= "	}\n";
$head .= "	function getHelp(which) {\n";
$head .= "		if ((helpWin)&&(!helpWin.closed)) helpWin.location='editconfig_help.php?help='+which;\n";
$head .= "	}\n";
$head .= "	function closeHelp() {\n";
$head .= "		if (helpWin) helpWin.close();\n";
$head .= "	}\n";
$head .= "	function changeDBtype(dbselect) {\n";
$head .= "		if (dbselect.options[dbselect.selectedIndex].value=='sqlite') {\n";
$head .= "			document.configform.NEW_DBNAME.value='./index/phpgedview.db';\n";
$head .= "		}\n";
$head .= "		else {\n";
$head .= "			document.configform.NEW_DBNAME.value='phpgedview';\n";
$head .= "		}\n";
$head .= "	}\n";
$head .= "	function checkForm(frm) {\n";
$head .= "		if (window.validate) return validate(frm);\n";
$head .= "		return true;\n";
$head .= "	}\n";
$head .= "	//-->\n";
$head .= "</script>\n";

header("Content-Type: text/html; charset=$CHARACTER_SET");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"></link>
<title><?php print $pgv_lang["install_wizard"]; ?></title>

<?php print $head;?>

</head>
<body id="body" dir="<?php print $TEXT_DIRECTION; ?>">
<br />
<table class="list_table person_boxNN width70" style="background-color: none;" cellspacing="0" cellpadding="5">
<?php

//-- don't allow configuration if the DB is down but the site is configured
if ($CONFIGURED && !PGV_DB::isConnected()) {
	?>
	<tr>
		<td class="center">
			<?php if (file_exists($THEME_DIR."/header.jpg")) { ?>
			<img src="<?php print $THEME_DIR;?>header.jpg" width="281" height="50" alt="PhpGedView" />
			<?php } else { ?>
			<h2>PhpGedView</h2>
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td class="optionbox center">
			<br /><br />
			<h2><?php print $pgv_lang["site_unavailable"] ?></h2>
			<br /><br /><br />
		</td>
	</tr>
	</table>
	</body>
	</html>
	<?php
	ob_end_flush(); // send everything in the output buffer
	exit();
}

$total_steps = 8;
$step = 1;
if (isset($_REQUEST['step'])) $step = $_REQUEST['step'];
else {
	if (PGV_DB::isConnected()) $step = 3;
	if (PGV_ADMIN_USER_EXISTS) $step = 8;
}
if (isset($_REQUEST['prev'])) $step--;
$errors = array();
switch($step) {
	case 1:
		break;
	case 2:
		if (isset($_POST["NEW_DBHOST"])) {
			$_SESSION['install_config']['DBHOST'] = $_POST["NEW_DBHOST"];
			$_SESSION['install_config']['DBNAME'] = $_POST["NEW_DBNAME"];
			$_SESSION['install_config']['DBPASS'] = $_POST["NEW_DBPASS"];
			$_SESSION['install_config']['DB_UTF8_COLLATION'] = $_POST["NEW_DB_UTF8_COLLATION"]=="yes";
			$_SESSION['install_config']['DBPORT'] = $_POST["NEW_DBPORT"];
			$_SESSION['install_config']['DBTYPE'] = $_POST["NEW_DBTYPE"];
			$_SESSION['install_config']['DBUSER'] = $_POST["NEW_DBUSER"];
			$_SESSION['install_config']['TBLPREFIX'] = $_POST["NEW_TBLPREFIX"];
		}
		// no break - need to connect to the DB on both steps 2 and 3
	case 3:
		if (isset($_SESSION['install_config']['DBHOST'])) {
			//-- create db connection
			$TBLPREFIX = $_SESSION['install_config']['TBLPREFIX'];
			try {
				PGV_DB::disconnect(); // from the connect defined in config.php
				PGV_DB::createInstance(
					$_SESSION['install_config']['DBTYPE'], 
					$_SESSION['install_config']['DBHOST'], 
					$_SESSION['install_config']['DBPORT'], 
					$_SESSION['install_config']['DBNAME'], 
					$_SESSION['install_config']['DBUSER'], 
					$_SESSION['install_config']['DBPASS'], 
					$_SESSION['install_config']['DB_UTF8_COLLATION']
				);
			} catch (PDOException $ex) {
				$step=2;	// For any DB error, re-do Step 2
				$errors[]=array(
					'msg'=>$pgv_lang['db_setup_bad'],
					'help'=>$ex->getMessage()
				);
			}
		}

		if (!empty($_SESSION['install_config']['INDEX_DIRECTORY'])
			&& !is_writable($_SESSION['install_config']['INDEX_DIRECTORY'])) {
				$error['msg'] = print_text("sanity_err6",0,1);
				$error['help'] = '';
				$errors[] = $error;
		}
		break;
	case 4:
		if (isset($_POST['NEW_INDEX_DIRECTORY'])) {
			$temp = rtrim(preg_replace('/\\\/','/',trim($_POST['NEW_INDEX_DIRECTORY'])),'/').'/';	// Ensure presence of trailing "/"
			if ($temp=='/') $temp = './index/';
			if ($_POST['NEW_INDEX_DIRECTORY']!=$temp) unset($_REQUEST['next']);		// Force the admin to check the form
			$_SESSION['install_config']['INDEX_DIRECTORY'] = $temp;
			$_SESSION['install_modified'] = true;
		}
		if (isset($_POST['NEW_ALLOW_CHANGE_GEDCOM'])) {
			$_SESSION['install_config']['ALLOW_CHANGE_GEDCOM'] = $_POST['NEW_ALLOW_CHANGE_GEDCOM']=="yes"?true:false;
			$_SESSION['install_modified'] = true;
		}
		if (isset($_POST['NEW_PGV_STORE_MESSAGES'])) $_SESSION['install_config']['PGV_STORE_MESSAGES'] = $_POST['NEW_PGV_STORE_MESSAGES']=="yes"?true:false;
		if (isset($_POST['NEW_USE_REGISTRATION_MODULE'])) $_SESSION['install_config']['USE_REGISTRATION_MODULE'] = $_POST['NEW_USE_REGISTRATION_MODULE']=="yes"?true:false;
		if (isset($_POST['NEW_REQUIRE_ADMIN_AUTH_REGISTRATION'])) $_SESSION['install_config']['REQUIRE_ADMIN_AUTH_REGISTRATION'] = $_POST['NEW_REQUIRE_ADMIN_AUTH_REGISTRATION']=="yes"?true:false;
		if (isset($_POST['NEW_PGV_SIMPLE_MAIL'])) $_SESSION['install_config']['PGV_SIMPLE_MAIL'] = $_POST['NEW_PGV_SIMPLE_MAIL']=="yes"?true:false;
		if (isset($_POST["NEW_PGV_SMTP_ACTIVE"])) $_SESSION['install_config']['PGV_SMTP_ACTIVE'] = $_POST["NEW_PGV_SMTP_ACTIVE"]=="yes"?true:false;
		if (isset($_POST["NEW_PGV_SMTP_HOST"])) $_SESSION['install_config']['PGV_SMTP_HOST'] = $_POST['NEW_PGV_SMTP_HOST'];
		if (isset($_POST["NEW_PGV_SMTP_HELO"])) $_SESSION['install_config']['PGV_SMTP_HELO'] = $_POST["NEW_PGV_SMTP_HELO"];
		if (isset($_POST["NEW_PGV_SMTP_PORT"])) $_SESSION['install_config']['PGV_SMTP_PORT'] = $_POST["NEW_PGV_SMTP_PORT"];
		if (empty($_SESSION['install_config']['PGV_SMTP_PORT'])) $_SESSION['install_config']['PGV_SMTP_PORT'] = '25';
		if (isset($_POST["NEW_PGV_SMTP_AUTH"])) $_SESSION['install_config']['PGV_SMTP_AUTH'] = $_POST["NEW_PGV_SMTP_AUTH"]=="yes"?true:false;
		if (isset($_POST["NEW_PGV_SMTP_AUTH_USER"])) $_SESSION['install_config']['PGV_SMTP_AUTH_USER'] = $_POST["NEW_PGV_SMTP_AUTH_USER"];
		if (isset($_POST["NEW_PGV_SMTP_AUTH_PASS"])) $_SESSION['install_config']['PGV_SMTP_AUTH_PASS'] = $_POST["NEW_PGV_SMTP_AUTH_PASS"];
		if (isset($_POST["NEW_PGV_SMTP_SSL"])) $_SESSION['install_config']['PGV_SMTP_SSL'] = $_POST["NEW_PGV_SMTP_SSL"];
		if (isset($_POST["NEW_PGV_SMTP_FROM_NAME"])) $_SESSION['install_config']['PGV_SMTP_FROM_NAME'] = $_POST["NEW_PGV_SMTP_FROM_NAME"];
		if (isset($_POST['NEW_ALLOW_USER_THEMES'])) $_SESSION['install_config']['ALLOW_USER_THEMES'] = $_POST['NEW_ALLOW_USER_THEMES']=="yes"?true:false;
		if (isset($_POST['NEW_LOGFILE_CREATE'])) $_SESSION['install_config']['LOGFILE_CREATE'] = $_POST['NEW_LOGFILE_CREATE'];
		if (isset($_POST['NEW_SERVER_URL'])) {
			$temp = trim($_POST['NEW_SERVER_URL']);
			if ($temp!='') $temp = trim($temp,'/').'/';		// Ensure presence of trailing "/"
			if ($_POST['NEW_SERVER_URL']!=$temp) {
				unset($_REQUEST['next']);		// Force the admin to check the form
			}
			$_SESSION['install_config']['SERVER_URL'] = $temp;
		}
		if (isset($_POST['NEW_LOGIN_URL'])) $_SESSION['install_config']['LOGIN_URL'] = $_POST['NEW_LOGIN_URL'];
		if (isset($_POST['NEW_PGV_SESSION_SAVE_PATH'])) $_SESSION['install_config']['PGV_SESSION_SAVE_PATH'] = $_POST['NEW_PGV_SESSION_SAVE_PATH'];
		if (isset($_POST['NEW_PGV_SESSION_TIME'])) $_SESSION['install_config']['PGV_SESSION_TIME'] = $_POST['NEW_PGV_SESSION_TIME'];
		if (isset($_POST['NEW_COMMIT_COMMAND'])) $_SESSION['install_config']['COMMIT_COMMAND'] = $_POST['NEW_COMMIT_COMMAND'];
		if (isset($_POST['NEW_PGV_MEMORY_LIMIT'])) $_SESSION['install_config']['PGV_MEMORY_LIMIT'] = $_POST['NEW_PGV_MEMORY_LIMIT'];
		if (isset($_POST['NEW_MAX_VIEWS'])) $_SESSION['install_config']['MAX_VIEWS'] = $_POST['NEW_MAX_VIEWS'];
		if (isset($_POST['NEW_MAX_VIEW_TIME'])) $_SESSION['install_config']['MAX_VIEW_TIME'] = $_POST['NEW_MAX_VIEW_TIME'];

		if (isset($_SESSION['install_config']['INDEX_DIRECTORY'])) {
			$INDEX_DIRECTORY = $_SESSION['install_config']['INDEX_DIRECTORY'];
		}
		if (!is_writable($INDEX_DIRECTORY)) {
			$error['msg'] = print_text("sanity_err6",0,1);
			$error['help'] = '';
			$errors[] = $error;
		}
		if (count($errors)==0) {
			$step = 4;
		}
		break;
	case 5:
		//-- don't break, fall through to step 6
	case 6:
		if (isset($_SESSION['install_config'])) {
			$download = false;
			if (isset($_REQUEST['download'])) $download = true;

			$config_array = $_SESSION['install_config'];
			$config_array['CONFIGURED'] = true;
			
			// Clear the SERVER_URL when it's identical to the calculated value
			$GUESS_URL = PGV_SERVER_NAME.PGV_SCRIPT_PATH;
			if (!isset($config_array['SERVER_URL'])) $config_array['SERVER_URL'] = '';
			$config_array['SERVER_URL'] = rtrim(trim($config_array['SERVER_URL']),'/').'/';
			if ($config_array['SERVER_URL'] == $GUESS_URL || $config_array['SERVER_URL'] == '/') $config_array['SERVER_URL'] = '';

			$ret = update_site_config($config_array, $download);
			if ($download && !is_array($ret)) {
				ob_end_clean(); // discard html currently in output buffer
				header("Pragma: public"); // required
				header("Expires: 0");
				header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
				header("Cache-Control: private",false); // required for certain browsers
				header("Content-Type: text/text");
				header('Content-Disposition: attachment; filename="config.php"');
				header("Content-length: ".strlen($ret));
				header("Content-Transfer-Encoding: binary");
				print $ret;
				exit();
			}

			if (isset($_POST['NEW_LANGS'])) {
				//-- make sure we are using the user's preferred index directory
				if (isset($_SESSION['install_config']['INDEX_DIRECTORY'])) {
					$INDEX_DIRECTORY = $_SESSION['install_config']['INDEX_DIRECTORY'];
				}
				if (isset($_SESSION['install_config']['COMMIT_COMMAND'])) {
					$COMMIT_COMMAND = $_SESSION['install_config']['COMMIT_COMMAND'];
				}

				// Save the languages the user has chosen to have active on the website
				$Filename = $INDEX_DIRECTORY . "lang_settings.php";
				if (!file_exists($Filename)) copy(PGV_ROOT.'includes/lang_settings_std.php', $Filename);

				$NEW_LANGS = $_POST['NEW_LANGS'];
				// Set the chosen languages to active
				foreach ($NEW_LANGS as $key => $name) {
					$pgv_lang_use[$name] = true;
				}

				// Set the other languages to non-active
				foreach ($pgv_lang_use as $name => $value) {
					if (!isset($NEW_LANGS[$name])) $pgv_lang_use[$name] = false;
				}
				$error = update_lang_settings();
				if (!empty($error)) $errors[] = array('msg'=>$pgv_lang[$error]);
			}

			if ($ret===true && count($errors)==0) {
				unset($_SESSION['install_modified']);
			}
			else {
				$errors = array_merge($errors, $ret);
			}
		}
		break;
	case 7:
		if (adminUserExists()) {
			break;
		}
		$username =safe_POST('username', PGV_REGEX_USERNAME);
		$pass1    =safe_POST('pass1', PGV_REGEX_PASSWORD);
		$pass2    =safe_POST('pass2', PGV_REGEX_PASSWORD);
		$email    =safe_POST('emailadress', PGV_REGEX_EMAIL);
		$firstname=safe_POST('firstname');
		$lastname =safe_POST('lastname');
		if ($username && $pass1 && $firstname && $lastname) {
			if ($pass1==$pass2) {
				if ($user_id=create_user($username, crypt($pass1))) {
					set_user_setting($user_id, 'firstname',            $firstname);
					set_user_setting($user_id, 'lastname',             $lastname);
					set_user_setting($user_id, 'canadmin',             'Y');
					set_user_setting($user_id, 'email',                $email);
					set_user_setting($user_id, 'verified',             'yes');
					set_user_setting($user_id, 'verified_by_admin',    'yes');
					set_user_setting($user_id, 'language',             $LANGUAGE);
					set_user_setting($user_id, 'reg_timestamp',        date('U'));
					set_user_setting($user_id, 'loggedin',             'Y');
					set_user_setting($user_id, 'sessiontime',          time());
					set_user_setting($user_id, 'contactmethod',        'messaging2');
					set_user_setting($user_id, 'visibleonline',        'Y');
					set_user_setting($user_id, 'editaccount',          'Y');
					set_user_setting($user_id, 'defaulttab',           '0');
					set_user_setting($user_id, 'sync_gedcom',          'N');
					set_user_setting($user_id, 'relationship_privacy', 'N');
					set_user_setting($user_id, 'max_relation_path',    '2');
					set_user_setting($user_id, 'auto_accept',          'N');
					AddToLog(getUserName()." added user -> {$username} <-");

					$_SESSION["pgv_user"]=$user_id;
				} else {
					$error['msg'] = $pgv_lang["user_create_error"];
					$error['help'] = '';
					$errors[] = $error;
				}
			} else {
				$error['msg'] = $pgv_lang["password_mismatch"];
				$error['help'] = '';
				$errors[] = $error;
			}
			if (count($errors)==0) {
				$step = 7;
			}
		} else {
			$error['msg'] = $pgv_lang["passwordlength"];
			$error['help'] = '';
			$errors[] = $error;
		}
		break;
	case 8:
		//-- nothing to do here
		break;
}

if (count($errors)==0) {
	if (isset($_REQUEST['next'])) $step++;
}

if ($step<1) $step = 1;
if ($step>$total_steps) $step = $total_steps;

$title = $pgv_lang["install_step_".$step];
$errormsg = "";

?>
	<tr>
		<td colspan="2" class="center">
			<?php if (file_exists($THEME_DIR."/header.jpg")) { ?>
			<img src="<?php print $THEME_DIR;?>header.jpg" width="281" height="50" alt="PhpGedView" />
			<?php } else { ?>
			<h1>PhpGedView</h1>
			<?php } ?>
			<h2><?php print $pgv_lang["install_wizard"]; ?></h2>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox">
		<table>
		<?php for($i=1; $i<$total_steps+1; $i++) {
			$class="descriptionbox";
			if ($step==$i) $class="optionbox";
			?>
			<tr>
				<td class="<?php print $class; ?> imenu">
				<a href="install.php?step=<?php print $i; ?>"><?php print $i.". ".$pgv_lang["install_step_".$i]; ?></a>
				</td>
			</tr>
			<?php } ?>
			<?php if (!empty($_SESSION['install_modified'])) { ?>
			<tr>
				<td class="descriptionbox wrap width30"><br />
				<span class="warning"><?php print $pgv_lang["config_not_saved"] ?></span>
				</td>
			</tr>
			<?php } ?>
		</table>
		</td>
		<td class="optionbox width75" style="white-space: normal">
		<h3 class="center"><?php print $title; ?></h3>
		<form name="configform" action="install.php" method="post" onsubmit="return checkForm(this);">
		<input type="hidden" name="step" value="<?php print $step ?>" />
		<?php
			if (count($errors)>0) {
				foreach($errors as $error)
					print '<span class="error">'.$error['msg'].'</span><br />';
					if (isset($error['help'])) print $error['help'];
			}
			$success = true;
			switch($step) {
				case 2:
					$success = printDBForm();
					break;
				case 3:
					try {
						PGV_DB::updateSchema('includes/db_schema/', 'PGV_SCHEMA_VERSION', PGV_SCHEMA_VERSION);
						echo '<span class="pass">', $pgv_lang['db_tables_created'], '</span><br /><br /><br />';
						$success=true;
					} catch (PDOException $ex) {
						echo '<span class="error">', $ex->getMessage(), '</span><br /><br /><br />';
						$success=false;
					}
					break;
				case 4:
					$success = printConfigForm();
					break;
				case 5:
					$success = printLanguageForm();
					break;
				case 6:
					if (count($errors)==0) {
						print "<span class=\"pass\">".$pgv_lang["config_saved"]."</span><br /><br /><br />";
						$success = true;
					}
					print "<input type=\"submit\" name=\"download\" value=\"".$pgv_lang["download_config"]."\" />";
					break;
				case 7:
					$success = printAdminUserForm();
					break;
				case 8:
					require_once PGV_ROOT.'blocks/getting_started.php';
					getting_started_block(false,"",0,0);
					break;
				default:	// case 1
					$success = checkEnvironment();
					break;
			}

			?>
		<br/><br />
		<?php if ($step<$total_steps && $success) {?>
			<div style="float: right;">
			<input type="submit" id="next_button" name="next" value="<?php print $pgv_lang['next'] ?>" />
			<script type="text/javascript">
			<!--
				document.getElementById("next_button").focus();
			//-->
			</script>
			</div>
		<?php } ?>
		<?php if ($step>1) {?>
			<div style="float: left;">
			<input type="submit" name="prev" value="<?php print $pgv_lang['prev'] ?>" />
			</div>
		<?php } ?>
		</form>
		</td>
	</tr>
</table>
<br />
<?php
print "</body></html>";

//-- Start of business functions

/**
 * Check the system environment for the necessary requirements
 *
 * @return boolean
 */
function checkEnvironment() {
	global $pgv_lang;

	$success = true;
	print "<h4>".$pgv_lang["checking_errors"]."</h4>";
	print "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">";
	$phpcheck = (version_compare(PHP_VERSION, PGV_REQUIRED_PHP_VERSION)<0);
	if ($phpcheck) {
		echo '<tr><td valign="top">';
		echo $pgv_lang["checking_php_version"], '<br />';
		echo '<span class="error">', $pgv_lang["failed"], '</span><br />';
		echo print_text("pgv_requires_version", 0, 1), '<br />';
		echo print_text("using_php_version", 0, 1), '</td></tr>';
	}

	// Check we have one or more PDO drivers available
	if (!extension_loaded('pdo') || !PGV_DB::getAvailableDrivers()) {
		print "<tr><td valign=\"top\">";
		print $pgv_lang["checking_db_support"]."<br />";
		print "<span class=\"error\">".$pgv_lang["no_db_extensions"]."</span><br />";
		print "</td></tr>";
	}

	//config.php file
	print "<tr><td valign=\"top\">";
	print $pgv_lang["checking_config.php"]."<br />";
	if (!file_exists(PGV_ROOT.'config.php')) {
		print "<span class=\"error\">".$pgv_lang["config.php_missing"]."</span><br />".$pgv_lang["config.php_missing_instr"];
	}
	else if (!file_is_writeable('config.php')) {
		print "<span class=\"warning\">".$pgv_lang["config.php_not_writable"]."</span><br />".$pgv_lang["config.php_not_writable_instr"];
	}
	else {
		print "<span class=\"pass\">".$pgv_lang["passed"]."</span><br />".$pgv_lang["config.php_writable"];
	}
	print "</td></tr>";
	print "</table>\r\n";

	//-- warnings
	$has_warnings = false;
	print "<h4>".$pgv_lang["checking_warnings"]."</h4>";
	print "<table border=\"0\" cellpadding=\"2\" cellspacing=\"0\">";
	//set timelimit
	//-- to do: This doesn't work if the time limit is already at 300 and can't be changed
	$oldtimelimit = @ini_get("max_execution_time");
	@set_time_limit(300);
	$newtimelimit = @ini_get("max_execution_time");
	if ($newtimelimit!=300) {
		print "<tr><td valign=\"top\">";
		print $pgv_lang["checking_timelimit"]."<br />";
		$has_warnings = true;
		print "<span class=\"warning\">".$pgv_lang["cannot_change_timelimit"]."</span><br />".$pgv_lang["cannot_change_timelimit_instr"]."<br />";
		print $pgv_lang["current_max_timelimit"]." ".$oldtimelimit;
		print "</td></tr>";
	}
	//set memory limit
	//-- to do: This doesn't work if the memory limit is already at 38M and can't be changed
	$oldmemorylimit = @ini_get('memory_limit');
	@ini_set('memory_limit', "38M");
	$memorylimit = @ini_get('memory_limit');
	if ($memorylimit!="38M") {
		$has_warnings = true;
		print "<tr><td valign=\"top\">";
		print $pgv_lang["check_memlimit"]."<br />";

		print "<span class=\"warning\">".$pgv_lang["cannot_change_memlimit"]."</span>".$pgv_lang["cannot_change_memlimit_instr"]."<br />";
		print $pgv_lang["current_max_memlimit"]." ".$oldmemorylimit;
		print "</td></tr>";
	}

	//file uploads
	$uploads = @ini_get("file_uploads");
	if ($uploads!="on" && $uploads!="On" && $uploads!=="1" && $uploads!==1) {
		$has_warnings = true;
		print "<tr><td valign=\"top\">";
		print $pgv_lang["check_upload"]."<br />";

		print $pgv_lang["current_max_upload"]." ".ini_get("upload_max_filesize")."<br />";
		print "</td></tr>";
	}

	// gd library
	if (!function_exists('imagecreatefromjpeg')) {
		$has_warnings = true;
		print "<tr><td valign=\"top\">";
		print $pgv_lang["check_gd"]."<br />";

		print "<span class=\"warning\">".$pgv_lang["cannot_use_gd"]."</span><br />";
		print "</td></tr>";
	}

	//-- xml sax library
	if (!function_exists('xml_parser_create')) {
		$has_warnings = true;
		print "<tr><td valign=\"top\">";
		print $pgv_lang["check_sax"]."<br />";

		print "<span class=\"warning\">".$pgv_lang["cannot_use_sax"]."</span><br />";
		print "</td></tr>";
	}

	if (!class_exists('DomDocument')) {
		$has_warnings = true;
		print "<tr><td valign=\"top\">";
		print $pgv_lang["check_dom"]."<br />";

		print "<span class=\"warning\">".$pgv_lang["cannot_use_dom"]."</span><br />";
		print "</td></tr>";
	}

	if (!function_exists('GregorianToJD')) {
		$has_warnings = true;
		print "<tr><td valign=\"top\">";
		print $pgv_lang["check_calendar"]."<br />";

		print "<span class=\"warning\">".$pgv_lang["cannot_use_calendar"]."</span><br />";
		print "</td></tr>";
	}


		print "<tr><td valign=\"top\">";
		if (!$has_warnings) {
			print "<span class=\"pass\">".$pgv_lang['passed']."</span><br />";
			print $pgv_lang["warnings_passed"];
		}
		else {
			print $pgv_lang["warning_instr"];
		}
		print "</td></tr>";
	print "</table>";

	return $success;
}

function printDBForm() {
	global $DBHOST, $DBNAME, $DBPASS, $DBPORT, $DBTYPE, $DBUSER, $DB_UTF8_COLLATION, $TBLPREFIX;
	global $pgv_lang;
	$i=1;
	if (isset($_SESSION['install_config']['DBHOST'])) $DBHOST = $_SESSION['install_config']['DBHOST'];
	if (isset($_SESSION['install_config']['DBNAME'])) $DBNAME =$_SESSION['install_config']['DBNAME'];
	if (isset($_SESSION['install_config']['DBPASS'])) $DBPASS =	$_SESSION['install_config']['DBPASS'];
	if (isset($_SESSION['install_config']['DB_UTF8_COLLATION'])) $DB_UTF8_COLLATION = $_SESSION['install_config']['DB_UTF8_COLLATION'];
	if (isset($_SESSION['install_config']['DBPORT'])) $DBPORT = $_SESSION['install_config']['DBPORT'];
	if (isset($_SESSION['install_config']['DBTYPE'])) $DBTYPE = $_SESSION['install_config']['DBTYPE'];
	if (isset($_SESSION['install_config']['DBUSER'])) $DBUSER = $_SESSION['install_config']['DBUSER'];
	if (isset($_SESSION['install_config']['TBLPREFIX'])) $TBLPREFIX = $_SESSION['install_config']['TBLPREFIX'];
	?>
	<table>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("DBTYPE_help", "qm", "DBTYPE"); print $pgv_lang["DBTYPE"];?></td>
		<td class="optionbox">
			<select name="NEW_DBTYPE" dir="ltr" tabindex="<?php $i++; print $i?>" onfocus="getHelp('DBTYPE_help');" onchange="changeDBtype(this);">
			<?php
				foreach (PGV_DB::getAvailableDrivers() as $driver) {
					echo '<option value="', $driver, '"';
					if ($DBTYPE==$driver) {
						echo 'selected="selected"';
					}
					echo '>';
					if (array_key_exists($driver, $pgv_lang)) {
						echo $pgv_lang[$driver];
					} else {
						echo $driver;
					}
					echo '</option>';
				}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("DBHOST_help", "qm", "DBHOST"); print $pgv_lang["DBHOST"];?></td>
		<td class="optionbox"><input type="text" dir="ltr" name="NEW_DBHOST" value="<?php print $DBHOST?>" size="40" tabindex="<?php $i++; print $i?>" onfocus="getHelp('DBHOST_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("DBPORT_help", "qm", "DBPORT"); print $pgv_lang["DBPORT"];?></td>
		<td class="optionbox"><input type="text" dir="ltr" name="NEW_DBPORT" value="<?php print $DBPORT?>" size="10" tabindex="<?php $i++; print $i?>" onfocus="getHelp('DBPORT_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("DBUSER_help", "qm", "DBUSER"); print $pgv_lang["DBUSER"];?></td>
		<td class="optionbox"><input type="text" name="NEW_DBUSER" value="<?php print $DBUSER?>" size="40" tabindex="<?php $i++; print $i?>" onfocus="getHelp('DBUSER_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("DBPASS_help", "qm", "DBPASS"); print $pgv_lang["DBPASS"];?></td>
		<td class="optionbox"><input type="password" name="NEW_DBPASS" value="<?php print $DBPASS?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('DBPASS_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("DBNAME_help", "qm", "DBNAME"); print $pgv_lang["DBNAME"];?></td>
		<td class="optionbox"><input type="text" name="NEW_DBNAME" value="<?php print $DBNAME?>" size="40" tabindex="<?php $i++; print $i?>" onfocus="getHelp('DBNAME_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("DB_UTF8_COLLATION_help", "qm", "DB_UTF8_COLLATION"); print $pgv_lang["DB_UTF8_COLLATION"];?></td>
		<td class="optionbox">
			<select name="NEW_DB_UTF8_COLLATION" tabindex="<?php $i++; print $i?>" onfocus="getHelp('DB_UTF8_COLLATION_help');">
				<option value="yes" <?php if ($DB_UTF8_COLLATION) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
				<option value="no" <?php if (!$DB_UTF8_COLLATION) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("TBLPREFIX_help", "qm", "TBLPREFIX"); print $pgv_lang["TBLPREFIX"];?></td>
		<td class="optionbox"><input type="text" name="NEW_TBLPREFIX" value="<?php print $TBLPREFIX?>" size="40" tabindex="<?php $i++; print $i?>" onfocus="getHelp('TBLPREFIX_help');" /></td>
	</tr>

	</table>
	<?php
	return true;
}

function printConfigForm(){
	global $TEXT_DIRECTION, $PGV_DXHTMLTAB_COLORS, $PGV_STORE_MESSAGES, $USE_REGISTRATION_MODULE, $REQUIRE_ADMIN_AUTH_REGISTRATION;
	global $ALLOW_CHANGE_GEDCOM, $PGV_SIMPLE_MAIL, $ALLOW_USER_THEMES, $LOGFILE_CREATE, $SERVER_URL;
	global $PGV_SMTP_ACTIVE, $PGV_SMTP_HOST, $PGV_SMTP_HELO, $PGV_SMTP_PORT, $PGV_SMTP_AUTH, $PGV_SMTP_AUTH_USER, $PGV_SMTP_AUTH_PASS, $PGV_SMTP_SSL, $PGV_SMTP_FROM_NAME;
	global $LOGIN_URL, $PGV_SESSION_SAVE_PATH, $PGV_SESSION_TIME, $COMMIT_COMMAND, $PGV_MEMORY_LIMIT, $MAX_VIEWS;
	global $MAX_VIEW_TIME, $INDEX_DIRECTORY;
	global $BROWSERTYPE;		// MSIE and dhtmlXTabbar don't play friendly at the moment
	global $pgv_lang;

	$i=1;
	if (isset($_SESSION['install_config']['INDEX_DIRECTORY'])) $INDEX_DIRECTORY = $_SESSION['install_config']['INDEX_DIRECTORY'];
	if (isset($_SESSION['install_config']['ALLOW_CHANGE_GEDCOM'])) $ALLOW_CHANGE_GEDCOM = $_SESSION['install_config']['ALLOW_CHANGE_GEDCOM'];
	if (isset($_SESSION['install_config']['PGV_STORE_MESSAGES'])) $PGV_STORE_MESSAGES = $_SESSION['install_config']['PGV_STORE_MESSAGES'];
	if (isset($_SESSION['install_config']['USE_REGISTRATION_MODULE'])) $USE_REGISTRATION_MODULE = $_SESSION['install_config']['USE_REGISTRATION_MODULE'];
	if (isset($_SESSION['install_config']['REQUIRE_ADMIN_AUTH_REGISTRATION'])) $REQUIRE_ADMIN_AUTH_REGISTRATION = $_SESSION['install_config']['REQUIRE_ADMIN_AUTH_REGISTRATION'];
	if (isset($_SESSION['install_config']['PGV_SIMPLE_MAIL'])) $PGV_SIMPLE_MAIL = $_SESSION['install_config']['PGV_SIMPLE_MAIL'];
	if (isset($_SESSION['install_config']['ALLOW_USER_THEMES'])) $ALLOW_USER_THEMES = $_SESSION['install_config']['ALLOW_USER_THEMES'];
	if (isset($_SESSION['install_config']['LOGFILE_CREATE'])) $LOGFILE_CREATE = $_SESSION['install_config']['LOGFILE_CREATE'];
	if (isset($_SESSION['install_config']['SERVER_URL'])) $SERVER_URL = $_SESSION['install_config']['SERVER_URL'];
	if (isset($_SESSION['install_config']['LOGIN_URL'])) $LOGIN_URL = $_SESSION['install_config']['LOGIN_URL'];
	if (isset($_SESSION['install_config']['PGV_SMTP_ACTIVE'])) $PGV_SMTP_ACTIVE = $_SESSION['install_config']['PGV_SMTP_ACTIVE'];
	if (isset($_SESSION['install_config']['PGV_SMTP_HOST'])) $PGV_SMTP_HOST = $_SESSION['install_config']['PGV_SMTP_HOST'];
	if (isset($_SESSION['install_config']['PGV_SMTP_HELO'])) $PGV_SMTP_HELO = $_SESSION['install_config']['PGV_SMTP_HELO'];
	if (isset($_SESSION['install_config']['PGV_SMTP_PORT'])) $PGV_SMTP_PORT = $_SESSION['install_config']['PGV_SMTP_PORT'];
	if (isset($_SESSION['install_config']['PGV_SMTP_AUTH'])) $PGV_SMTP_AUTH = $_SESSION['install_config']['PGV_SMTP_AUTH'];
	if (isset($_SESSION['install_config']['PGV_SMTP_AUTH_USER'])) $PGV_SMTP_AUTH_USER = $_SESSION['install_config']['PGV_SMTP_AUTH_USER'];
	if (isset($_SESSION['install_config']['PGV_SMTP_AUTH_PASS'])) $PGV_SMTP_AUTH_PASS = $_SESSION['install_config']['PGV_SMTP_AUTH_PASS'];
	if (isset($_SESSION['install_config']['PGV_SMTP_SSL'])) $PGV_SMTP_SSL = $_SESSION['install_config']['PGV_SMTP_SSL'];
	if (isset($_SESSION['install_config']['PGV_SMTP_FROM_NAME'])) $PGV_SMTP_FROM_NAME = $_SESSION['install_config']['PGV_SMTP_FROM_NAME'];
	if (isset($_SESSION['install_config']['PGV_SESSION_SAVE_PATH'])) $PGV_SESSION_SAVE_PATH = $_SESSION['install_config']['PGV_SESSION_SAVE_PATH'];
	if (isset($_SESSION['install_config']['PGV_SESSION_TIME'])) $PGV_SESSION_TIME = $_SESSION['install_config']['PGV_SESSION_TIME'];
	if (isset($_SESSION['install_config']['COMMIT_COMMAND'])) $COMMIT_COMMAND = $_SESSION['install_config']['COMMIT_COMMAND'];
	if (isset($_SESSION['install_config']['PGV_MEMORY_LIMIT'])) $PGV_MEMORY_LIMIT = $_SESSION['install_config']['PGV_MEMORY_LIMIT'];
	if (isset($_SESSION['install_config']['MAX_VIEWS'])) $MAX_VIEWS = $_SESSION['install_config']['MAX_VIEWS'];
	if (isset($_SESSION['install_config']['MAX_VIEW_TIME'])) $MAX_VIEW_TIME = $_SESSION['install_config']['MAX_VIEW_TIME'];

	$oldmemorylimit = @ini_get('memory_limit');
	if ($oldmemorylimit > $PGV_MEMORY_LIMIT) $PGV_MEMORY_LIMIT = $oldmemorylimit;

	require_once PGV_ROOT.'js/dhtmlXTabbar.js.htm';
	?>
	<?php if ($BROWSERTYPE!='msie') { ?>
	<div id="conf_tabbar" class="dhtmlxTabBar" <?php if($TEXT_DIRECTION=="rtl") echo ' align="right"'; else echo ' align="left"';?> skinColors="<?php print $PGV_DXHTMLTAB_COLORS; ?>" style="min-width: 450px; height: 380px">
	<?php } ?>
		<div id="conf_basic" name="<?php print $pgv_lang['basic_site_config'];?>" class="indent" >
		<table>
		<?php if ($BROWSERTYPE=='msie') { ?>
			<tr><td colspan="2" class="center"><b><?php print $pgv_lang['basic_site_config'];?></b></td></tr>
		<?php } ?>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("INDEX_DIRECTORY_help", "qm", "INDEX_DIRECTORY"); print $pgv_lang["INDEX_DIRECTORY"];?></td>
				<td class="optionbox"><input type="text" size="50" name="NEW_INDEX_DIRECTORY" value="<?php print $INDEX_DIRECTORY?>" dir="ltr" tabindex="<?php $i++; print $i?>" onfocus="getHelp('INDEX_DIRECTORY_help');" /></td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("SERVER_URL_help", "qm", "SERVER_URL"); print $pgv_lang["SERVER_URL"];?></td>
				<td class="optionbox wrap"><input type="text" name="NEW_SERVER_URL" value="<?php print $SERVER_URL?>" dir="ltr" tabindex="<?php $i++; print $i?>" onfocus="getHelp('SERVER_URL_help');" size="50" />
				<br /><?php
					global $GUESS_URL;
					$GUESS_URL = PGV_SERVER_NAME.PGV_SCRIPT_PATH;
					print_text("server_url_note");
					?>
				</td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("ALLOW_CHANGE_GEDCOM_help", "qm", "ALLOW_CHANGE_GEDCOM"); print $pgv_lang["ALLOW_CHANGE_GEDCOM"];?></td>
				<td class="optionbox">
					<select name="NEW_ALLOW_CHANGE_GEDCOM" tabindex="<?php $i++; print $i?>" onfocus="getHelp('ALLOW_CHANGE_GEDCOM_help');">
						<option value="yes" <?php if ($ALLOW_CHANGE_GEDCOM) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
						<option value="no" <?php if (!$ALLOW_CHANGE_GEDCOM) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("USE_REGISTRATION_MODULE_help", "qm", "USE_REGISTRATION_MODULE"); print $pgv_lang["USE_REGISTRATION_MODULE"];?></td>
				<td class="optionbox">
					<select name="NEW_USE_REGISTRATION_MODULE" tabindex="<?php $i++; print $i?>" onfocus="getHelp('USE_REGISTRATION_MODULE_help');">
						<option value="yes" <?php if ($USE_REGISTRATION_MODULE) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
						<option value="no" <?php if (!$USE_REGISTRATION_MODULE) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
					</select>
				</td>
			</tr>
			<tr>
		 		<td class="descriptionbox wrap width30"><?php print_help_link("REQUIRE_ADMIN_AUTH_REGISTRATION_help", "qm", "REQUIRE_ADMIN_AUTH_REGISTRATION"); print $pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"];?></td>
		 		<td class="optionbox">
		 			<select name="NEW_REQUIRE_ADMIN_AUTH_REGISTRATION" tabindex="<?php $i++; print $i?>" onfocus="getHelp('REQUIRE_ADMIN_AUTH_REGISTRATION_help');">
		 				<option value="yes" <?php if ($REQUIRE_ADMIN_AUTH_REGISTRATION) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
		 				<option value="no" <?php if (!$REQUIRE_ADMIN_AUTH_REGISTRATION) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
					</select>
		 		</td>
		 	</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("ALLOW_USER_THEMES_help", "qm", "ALLOW_USER_THEMES"); print $pgv_lang["ALLOW_USER_THEMES"];?></td>
				<td class="optionbox">
					<select name="NEW_ALLOW_USER_THEMES" tabindex="<?php $i++; print $i?>" onfocus="getHelp('ALLOW_USER_THEMES_help');">
						<option value="yes" <?php if ($ALLOW_USER_THEMES) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
						<option value="no" <?php if (!$ALLOW_USER_THEMES) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
					</select>
				</td>
			</tr>
		</table>
		</div>

		<!--  advanced settings -->
		<div id="conf_advanced" name="<?php print $pgv_lang['adv_site_config'];?>" class="indent">
			<table>
		<?php if ($BROWSERTYPE=='msie') { ?>
			<tr><td colspan="2" class="center"><br /><b><?php print $pgv_lang['adv_site_config'];?></b></td></tr>
		<?php } ?>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("LOGIN_URL_help", "qm", "LOGIN_URL"); print $pgv_lang["LOGIN_URL"];?></td>
				<td class="optionbox"><input type="text" name="NEW_LOGIN_URL" value="<?php print $LOGIN_URL?>" dir="ltr" tabindex="<?php $i++; print $i?>" onfocus="getHelp('LOGIN_URL_help');" size="50" />
				</td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("PGV_STORE_MESSAGES_help", "qm", "PGV_STORE_MESSAGES"); print $pgv_lang["PGV_STORE_MESSAGES"];?></td>
				<td class="optionbox">
					<select name="NEW_PGV_STORE_MESSAGES" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_STORE_MESSAGES_help');">
						<option value="yes" <?php if ($PGV_STORE_MESSAGES) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
						<option value="no" <?php if (!$PGV_STORE_MESSAGES) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SIMPLE_MAIL_help", "qm", "PGV_SIMPLE_MAIL"); print $pgv_lang["PGV_SIMPLE_MAIL"];?></td>
				<td class="optionbox">
					<select name="NEW_PGV_SIMPLE_MAIL" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SIMPLE_MAIL_help');">
						<option value="yes" <?php if ($PGV_SIMPLE_MAIL) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
						<option value="no" <?php if (!$PGV_SIMPLE_MAIL) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("LOGFILE_CREATE_help", "qm", "LOGFILE_CREATE"); print $pgv_lang["LOGFILE_CREATE"];?></td>
				<td class="optionbox">
					<select name="NEW_LOGFILE_CREATE" tabindex="<?php $i++; print $i?>" onfocus="getHelp('LOGFILE_CREATE_help');">
						<option value="none" <?php if ($LOGFILE_CREATE=="none") print "selected=\"selected\""; ?>><?php print $pgv_lang["no_logs"];?></option>
						<option value="daily" <?php if ($LOGFILE_CREATE=="daily") print "selected=\"selected\""; ?>><?php print $pgv_lang["daily"];?></option>
						<option value="weekly" <?php if ($LOGFILE_CREATE=="weekly") print "selected=\"selected\""; ?>><?php print $pgv_lang["weekly"];?></option>
						<option value="monthly" <?php if ($LOGFILE_CREATE=="monthly") print "selected=\"selected\""; ?>><?php print $pgv_lang["monthly"];?></option>
						<option value="yearly" <?php if ($LOGFILE_CREATE=="yearly") print "selected=\"selected\""; ?>><?php print $pgv_lang["yearly"];?></option>
					</select>
				</td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SESSION_SAVE_PATH_help", "qm", "PGV_SESSION_SAVE_PATH"); print $pgv_lang["PGV_SESSION_SAVE_PATH"];?></td>
				<td class="optionbox"><input type="text" dir="ltr" size="50" name="NEW_PGV_SESSION_SAVE_PATH" value="<?php print $PGV_SESSION_SAVE_PATH?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SESSION_SAVE_PATH_help');" /></td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SESSION_TIME_help", "qm", "PGV_SESSION_TIME"); print $pgv_lang["PGV_SESSION_TIME"];?></td>
				<td class="optionbox"><input type="text" name="NEW_PGV_SESSION_TIME" value="<?php print $PGV_SESSION_TIME?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SESSION_TIME_help');" /></td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("MAX_VIEW_RATE_help", "qm", "MAX_VIEW_RATE"); print $pgv_lang["MAX_VIEW_RATE"];?></td>
				<td class="optionbox wrap">
					<input type="text" size="5" name="NEW_MAX_VIEWS" value="<?php print $MAX_VIEWS?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('MAX_VIEW_RATE_help');" />
					<?php
						if ($TEXT_DIRECTION == "ltr") print $pgv_lang["page_views"];
						else print $pgv_lang["seconds"];
					?>
					<input type="text" size="5" name="NEW_MAX_VIEW_TIME" value="<?php print $MAX_VIEW_TIME?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('MAX_VIEW_RATE_help');" />
					<?php
						if ($TEXT_DIRECTION == "ltr") print $pgv_lang["seconds"];
						else print $pgv_lang["page_views"];
					?>
				</td>
			</tr>
			<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("COMMIT_COMMAND_help", "qm", "COMMIT_COMMAND"); print $pgv_lang['COMMIT_COMMAND'];?></td>
		 		<td class="optionbox">
		 			<select name="NEW_COMMIT_COMMAND" tabindex="<?php $i++; print $i?>" onfocus="getHelp('COMMIT_COMMAND_help');">
						<option value="" <?php if ($COMMIT_COMMAND=="") print "selected=\"selected\""; ?>><?php print $pgv_lang["none"];?></option>
						<option value="cvs" <?php if ($COMMIT_COMMAND=="cvs") print "selected=\"selected\""; ?>>CVS</option>
						<option value="svn" <?php if ($COMMIT_COMMAND=="svn") print "selected=\"selected\""; ?>>SVN</option>
					</select>
				</td>
		 	</tr>
		 	<tr>
				<td class="descriptionbox wrap width30"><?php print_help_link("PGV_MEMORY_LIMIT_help", "qm", "PGV_MEMORY_LIMIT"); print $pgv_lang["PGV_MEMORY_LIMIT"];?></td>
				<td class="optionbox"><input type="text" name="NEW_PGV_MEMORY_LIMIT" value="<?php print $PGV_MEMORY_LIMIT?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_MEMORY_LIMIT_help');" /></td>
			</tr>
			</table>
		</div>
	
	<!--  smtp settings -->
	<div id="conf_smtp" name="SMTP" class="indent">
		<table>
	<?php if ($BROWSERTYPE=='msie') { ?>
		<tr><td colspan="2" class="center"><br /><b>SMTP</b></td></tr>
	<?php } ?>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_ACTIVE_help", "qm", "PGV_SMTP_ACTIVE"); print $pgv_lang["PGV_SMTP_ACTIVE"];?></td>
		<td class="optionbox">
			<select name="NEW_PGV_SMTP_ACTIVE" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_ACTIVE_help');">
				<option value="yes" <?php if ($PGV_SMTP_ACTIVE) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
				<option value="no" <?php if (!$PGV_SMTP_ACTIVE) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_HOST_help", "qm", "PGV_SMTP_HOST"); print $pgv_lang["PGV_SMTP_HOST"];?></td>
		<td class="optionbox"><input type="text" dir="ltr" size="50" name="NEW_PGV_SMTP_HOST" value="<?php print $PGV_SMTP_HOST?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_HOST_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_HELO_help", "qm", "PGV_SMTP_HELO"); print $pgv_lang["PGV_SMTP_HELO"];?></td>
		<td class="optionbox"><input type="text" dir="ltr" size="50" name="NEW_PGV_SMTP_HELO" value="<?php print $PGV_SMTP_HELO?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_HELO_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_PORT_help", "qm", "PGV_SMTP_PORT"); print $pgv_lang["PGV_SMTP_PORT"];?></td>
		<td class="optionbox"><input type="text" dir="ltr" size="5" name="NEW_PGV_SMTP_PORT" value="<?php print $PGV_SMTP_PORT?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_PORT_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_AUTH_help", "qm", "PGV_SMTP_AUTH"); print $pgv_lang["PGV_SMTP_AUTH"];?></td>
		<td class="optionbox">
			<select name="NEW_PGV_SMTP_AUTH" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_AUTH_help');">
			<option value="yes" <?php if ($PGV_SMTP_AUTH) print "selected=\"selected\""; ?>><?php print $pgv_lang["yes"];?></option>
			<option value="no" <?php if (!$PGV_SMTP_AUTH) print "selected=\"selected\""; ?>><?php print $pgv_lang["no"];?></option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_AUTH_USER_help", "qm", "PGV_SMTP_AUTH_USER"); print $pgv_lang["PGV_SMTP_AUTH_USER"];?></td>
		<td class="optionbox"><input type="text" dir="ltr" size="50" name="NEW_PGV_SMTP_AUTH_USER" value="<?php print $PGV_SMTP_AUTH_USER?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_AUTH_USER_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_AUTH_PASS_help", "qm", "PGV_SMTP_AUTH_PASS"); print $pgv_lang["PGV_SMTP_AUTH_PASS"];?></td>
		<td class="optionbox"><input type="password" name="NEW_PGV_SMTP_AUTH_PASS" value="<?php print $PGV_SMTP_AUTH_PASS?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_AUTH_PASS_help');" /></td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_SSL_help", "qm", "PGV_SMTP_SSL"); print $pgv_lang["PGV_SMTP_SSL"];?></td>
		<td class="optionbox">
			<select name="NEW_PGV_SMTP_SSL" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_SSL_help');">
				<option value="none" <?php if ($PGV_SMTP_SSL=='none') print "selected=\"selected\""; ?>><?php print $pgv_lang["none"];?></option>
				<option value="ssl" <?php if ($PGV_SMTP_SSL=='ssl') print "selected=\"selected\""; ?>>SSL</option>
				<option value="tls" <?php if ($PGV_SMTP_SSL=='tls') print "selected=\"selected\""; ?>>TLS</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="descriptionbox wrap width30"><?php print_help_link("PGV_SMTP_FROM_NAME_help", "qm", "PGV_SMTP_FROM_NAME"); print $pgv_lang["PGV_SMTP_FROM_NAME"];?></td>
		<td class="optionbox"><input type="text" dir="ltr" size="50" name="NEW_PGV_SMTP_FROM_NAME" value="<?php print $PGV_SMTP_FROM_NAME?>" tabindex="<?php $i++; print $i?>" onfocus="getHelp('PGV_SMTP_FROM_NAME_help');" /></td>
	</tr>
	</table>
		</div>
	<?php if ($BROWSERTYPE!='msie') print '</div>'; ?>
	<?php
	return true;
}

function printLanguageForm() {
	global $pgv_lang, $pgv_language, $pgv_lang_use, $pgv_lang_self;

	//-- override old values with session values
	if (isset($_SESSION['install_config']['NEW_LANGS'])) {
		foreach($pgv_lang_use as $lang=>$languse) {
			if (isset($_SESSION['install_config']['NEW_LANGS'][$lang])
				&& $_SESSION['install_config']['NEW_LANGS'][$lang]==true)
				$pgv_lang_use[$lang] = true;
			else $pgv_lang_use[$lang] = false;
		}
	}

	print_help_link("LANG_SELECTION_help", "qm", "LANG_SELECTION"); print $pgv_lang["LANG_SELECTION"];?>
	<table>
	<tr>
		<td class="optionbox">
			<table class="facts_table">
			<?php
			// Build a sorted list of language names in the currently active language
			foreach ($pgv_language as $key => $value){
				$d_LangName = "lang_name_".$key;
				$SortedLangs[$key] = $pgv_lang[$d_LangName];
			}
			asort($SortedLangs);

			// Build sorted list of languages, using numeric index
			// If necessary, insert one blank filler at the end of the 2nd column
			// Always insert a blank filler at the end of the 3rd column
			$lines = ceil(count($pgv_language) / 3);
			$BlankHere = 0;
			if (($lines * 3) != count($pgv_language)) {
				$BlankHere = $lines + $lines;
			}
			$i = 1;
			$LangsList = array();
			foreach ($SortedLangs as $key => $value) {
				$LangsList[$i] = $SortedLangs[$key];
				$i++;
				if ($i == $BlankHere) {
					$LangsList[$i] = "";
					$i++;
				}
			}
			$LangsList[$i] = "";

			// Print the languages in three columns
			$curline = 1;
			$SortedLangs = array_flip($SortedLangs);

			while ($curline <= $lines) {
				// Start each table row
				print "<tr>";
				$curcol = 0;
				// Print each column
				while ($curcol < 3) {
					$j = $curline + $lines * $curcol;
					$LocalName = $LangsList[$j];
					if ($LocalName != "") {
						$LangName = $SortedLangs[$LocalName];
						print "<td class=\"optionbox\"><input type=\"checkbox\" name=\"NEW_LANGS[".$LangName."]\" value=\"".$LangName."\"";
						if ($pgv_lang_use[$LangName] == true) {
							print "checked=\"checked\"";
						}
						print "/></td>";
						print "<td class=\"descriptionbox width30\">".PrintReady($pgv_lang_self[$LangName])."&nbsp;[".PrintReady($LocalName)."]</td>";
					} else {
						print "<td class=\"optionbox\">&nbsp;</td>";
						print "<td class=\"descriptionbox width30\">&nbsp;</td>";
					}
					$curcol++;
				}
				// Finish the table row
				print "</tr>";
				$curline++;
			}
			?>
			</table>
		</td>
	</tr>
	</table>
	<?php
	return true;
}

function printAdminUserForm() {
	global $pgv_lang;
	if (!adminUserExists()) {
	?>
			<script language="JavaScript" type="text/javascript">
				function validate(frm) {
					if (frm.username.value=="") {
						alert("<?php print $pgv_lang["enter_username"]; ?>");
						frm.username.focus();
						return false;
					}
					if (frm.firstname.value=="") {
						alert("<?php print $pgv_lang["enter_fullname"]; ?>");
						frm.firstname.focus();
						return false;
					}
					if (frm.lastname.value=="") {
						alert("<?php print $pgv_lang["enter_fullname"]; ?>");
						frm.lastname.focus();
						return false;
					}
					if (frm.pass1.value=="") {
						alert("<?php print $pgv_lang["enter_password"]; ?>");
						frm.pass1.focus();
						return false;
					}
					if (frm.pass2.value=="") {
						alert("<?php print $pgv_lang["confirm_password"]; ?>");
						frm.pass2.focus();
						return false;
					}
					return true;
				}
			</script>
			<b><?php print $pgv_lang["default_user"];?></b><br />
			<?php print $pgv_lang["about_user"];?><br /><br />
			<table>
				<tr><td class="descriptionbox"><?php print $pgv_lang["username"];?></td>
				<td class="optionbox"><input type="text" name="username" /></td></tr>
				<tr><td class="descriptionbox"><?php print $pgv_lang["firstname"];?></td>
				<td class="optionbox"><input type="text" name="firstname" /></td></tr>
				<tr><td class="descriptionbox"><?php print $pgv_lang["lastname"];?></td>
				<td class="optionbox"><input type="text" name="lastname" /></td></tr>
				<tr><td class="descriptionbox"><?php print $pgv_lang["password"];?></td>
				<td class="optionbox"><input type="password" name="pass1" /></td></tr>
				<tr><td class="descriptionbox"><?php print $pgv_lang["confirm"];?></td>
				<td class="optionbox"><input type="password" name="pass2" /></td></tr>
				<tr><td class="descriptionbox"><?php print $pgv_lang["emailadress"];?></td>
				<td class="optionbox"><input type="text" name="emailadress" size="45" /></td></tr>
			</table>
			<?php
	}
	else {
		?>
		<?php print $pgv_lang["admin_users_exists"]	; ?>
		<table>
		<tr>
			<td class="topbottombar"><?php print $pgv_lang["username"];?></td>
			<td class="topbottombar"><?php print $pgv_lang["firstname"];?></td>
			<td class="topbottombar"><?php print $pgv_lang["lastname"];?></td>
			<td class="topbottombar"><?php print $pgv_lang["emailadress"];?></td>
		</tr>
		<?php foreach(get_all_users() as $user_id=>$user_name) {
		if (userIsAdmin($user_id)) {?>
		<tr>
			<td class="optionbox"><?php print $user_name;?></td>
			<td class="optionbox"><?php print get_user_setting($user_id, "firstname");?></td>
			<td class="optionbox"><?php print get_user_setting($user_id, "lastname");?></td>
			<td class="optionbox"><?php print get_user_setting($user_id, "email");?></td>
		</tr>
		<?php }
		 } ?>
		</table>
		<br />
		<?php
		print $pgv_lang['to_manage_users'];
	}
	return true;
}
ob_end_flush(); // send everything in the output buffer
?>
