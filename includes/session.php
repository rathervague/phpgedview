<?php
/**
 * Startup and session logic
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2011  PGV Development Team.  All rights reserved.
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
 * @version $Id: session.php 7007 2011-01-08 02:03:07Z canajun2eh $
 */

// PGV_SCRIPT_NAME is defined in each script that the user is permitted to load.
if (!defined('PGV_SCRIPT_NAME')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Identify ourself
define('PGV_PHPGEDVIEW',      'PhpGedView');
define('PGV_VERSION',         '4.2.4');
define('PGV_VERSION_RELEASE', 'stable'); // 'svn', 'beta', 'rc1', '', etc.
define('PGV_VERSION_TEXT',    trim(PGV_VERSION.' '.PGV_VERSION_RELEASE));
define('PGV_PHPGEDVIEW_URL',  'http://www.phpgedview.net');
define('PGV_PHPGEDVIEW_WIKI', 'http://wiki.phpgedview.net');
define('PGV_TRANSLATORS_URL', 'https://sourceforge.net/projects/phpgedview/forums/forum/294245');

// Enable debugging output?
define('PGV_DEBUG',      false);
define('PGV_DEBUG_SQL',  false);
define('PGV_DEBUG_PRIV', false);

// Error reporting
define('PGV_ERROR_LEVEL', 2); // 0=none, 1=minimal, 2=full

// Required version of database tables/columns/indexes/etc.
define('PGV_SCHEMA_VERSION', 14);

// Environmental requirements
define('PGV_REQUIRED_PHP_VERSION',     '5.2.0'); // 5.2.3 is recommended
define('PGV_REQUIRED_MYSQL_VERSION',   '4.1');   // Not enforced
define('PGV_REQUIRED_SQLITE_VERSION',  '3.2.6'); // Not enforced, PHP5.2.0/PDO is 3.3.7
define('PGV_REQUIRED_PRIVACY_VERSION', '3.1');
define('PGV_ACTUAL_PHP_VERSION',       PHP_VERSION);	// Function print_text() needs this

// Regular expressions for validating user input, etc.
define('PGV_REGEX_XREF',     '[A-Za-z0-9:_-]+');
define('PGV_REGEX_MODNAME',  '[A-Za-z0-9_-]+');
define('PGV_REGEX_TAG',      '[_A-Z][_A-Z0-9]*');
define('PGV_REGEX_INTEGER',  '-?\d+');
define('PGV_REGEX_ALPHA',    '[a-zA-Z]+');
define('PGV_REGEX_ALPHANUM', '[a-zA-Z0-9]+');
define('PGV_REGEX_BYTES',    '[0-9]+[bBkKmMgG]?');
define('PGV_REGEX_USERNAME', '[^<>"%{};]+');
define('PGV_REGEX_PASSWORD', '.{6,}');
define('PGV_REGEX_NOSCRIPT', '[^<>"&%{};]+');
define('PGV_REGEX_URL',      '[\/0-9A-Za-z_!~*\'().;?:@&=+$,%#-]+'); // Simple list of valid chars
define('PGV_REGEX_EMAIL',    '[^\s<>"&%{};@]+@[^\s<>"&%{};@]+');
define('PGV_REGEX_UNSAFE',   '[\x00-\xFF]*'); // Use with care and apply additional validation!

// UTF8 representation of various characters
define('PGV_UTF8_BOM',    "\xEF\xBB\xBF"); // U+FEFF
define('PGV_UTF8_MALE',   "\xE2\x99\x82"); // U+2642
define('PGV_UTF8_FEMALE', "\xE2\x99\x80"); // U+2640

// UTF8 control codes affecting the BiDirectional algorithm (see http://www.unicode.org/reports/tr9/)
define('PGV_UTF8_LRM',    "\xE2\x80\x8E"); // U+200E  (Left to Right mark:  zero-width character with LTR directionality)
define('PGV_UTF8_RLM',    "\xE2\x80\x8F"); // U+200F  (Right to Left mark:  zero-width character with RTL directionality)
define('PGV_UTF8_LRO',    "\xE2\x80\xAD"); // U+202D  (Left to Right override: force everything following to LTR mode)
define('PGV_UTF8_RLO',    "\xE2\x80\xAE"); // U+202E  (Right to Left override: force everything following to RTL mode)
define('PGV_UTF8_LRE',    "\xE2\x80\xAA"); // U+202A  (Left to Right embedding: treat everything following as LTR text)
define('PGV_UTF8_RLE',    "\xE2\x80\xAB"); // U+202B  (Right to Left embedding: treat everything following as RTL text)
define('PGV_UTF8_PDF',    "\xE2\x80\xAC"); // U+202C  (Pop directional formatting: restore state prior to last LRO, RLO, LRE, RLE)

// Alternatives to BMD events for lists, charts, etc.
define('PGV_EVENTS_BIRT', 'BIRT|CHR|BAPM|_BRTM|ADOP');
define('PGV_EVENTS_DEAT', 'DEAT|BURI|CREM');
define('PGV_EVENTS_MARR', 'MARR|MARB');
define('PGV_EVENTS_DIV',  'DIV|ANUL|_SEPR');

// Use these line endings when writing files on the server
define('PGV_EOL', "\r\n");

// Gedcom specification/definitions
define ('PGV_GEDCOM_LINE_LENGTH', 255-strlen(PGV_EOL)); // Characters, not bytes

// Use these tags to wrap embedded javascript consistently
define('PGV_JS_START', "\n<script type=\"text/javascript\">\n//<![CDATA[\n");
define('PGV_JS_END',   "\n//]]>\n</script>\n");

// Used in Google charts
define ('PGV_GOOGLE_CHART_ENCODING', 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-.');

// Maximum number of results in auto-complete fields
define('PGV_AUTOCOMPLETE_LIMIT', 500);

// Privacy constants
define('PGV_PRIV_PUBLIC',  2); // Allows non-authenticated public visitors to view the marked information
define('PGV_PRIV_USER',    1); // Allows authenticated users to access the marked information
define('PGV_PRIV_NONE',    0); // Allows admin users to access the marked information
define('PGV_PRIV_HIDE',   -1); // Hide the item to all users including the admin
// Older config files use variables instead of constants
$PRIV_PUBLIC = PGV_PRIV_PUBLIC;
$PRIV_USER   = PGV_PRIV_USER;
$PRIV_NONE   = PGV_PRIV_NONE;
$PRIV_HIDE   = PGV_PRIV_HIDE;

// For performance, it is quicker to refer to files using absolute paths
define ('PGV_ROOT', realpath(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR);

// New setting, added to config.php in 4.2.0
if (!isset($DB_UTF8_COLLATION)) {
	$DB_UTF8_COLLATION=false;
}

// New setting, added to config.php in 4.1.4
if (!isset($DBPORT)) {
	$DBPORT='';
}

@ini_set('arg_separator.output', '&amp;');
@ini_set('error_reporting', 0);
@ini_set('display_errors', '1');
@error_reporting(0);

// Check configuration issues that affect older versions of PHP
// We can't use any PHP5 functions until after this point.
if (version_compare(PHP_VERSION, '6.0.0', '<')) {
	// PHP too old?
	if (version_compare(PHP_VERSION, PGV_REQUIRED_PHP_VERSION)<0) {
		die ('<html><body><p style="color: red;">PhpGedView requires PHP version '.PGV_REQUIRED_PHP_VERSION.' or later.</p><p>Your server is running PHP version '.PHP_VERSION.'.  Please ask your server\'s Administrator to upgrade the PHP installation.</p></body></html>');
	}

	// register_globals was deprecated in PHP5.3.0 and removed in PHP6.0.0
	// For servers with this feature enabled in php.ini, check it is not being abused.
	foreach (array(
		'DBTYPE', 'DBHOST', 'DBUSER', 'DBPASS', 'DBNAME', 'TBLPREFIX',
		'INDEX_DIRECTORY', 'AUTHENTICATION_MODULE', 'USE_REGISTRATION_MODULE',
		'ALLOW_USER_THEMES', 'ALLOW_CHANGE_GEDCOM', 'LOGFILE_CREATE',
		'PGV_SESSION_SAVE_PATH', 'PGV_SESSION_TIME', 'SERVER_URL', 'LOGIN_URL',
		'PGV_MEMORY_LIMIT', 'PGV_STORE_MESSAGES', 'PGV_SIMPLE_MAIL',
		'CONFIGURED', 'MANUAL_SESSON_START', 'REQUIRE_ADMIN_AUTH_REGISTRATION',
		'COMMIT_COMMAND'
	) as $var) {
		if (isset($_REQUEST[$var])) {
			if (!ini_get('register_globals') || strtolower(ini_get('register_globals'))=='off') {
				require_once PGV_ROOT.'includes/authentication.php';
				AddToLog('MSG>Configuration override detected; script terminated.');
				AddToLog("UA>{$_SERVER['HTTP_USER_AGENT']}<");
				AddToLog("URI>{$_SERVER['REQUEST_URI']}<");
			}
			header('HTTP/1.0 403 Forbidden');
			die('Invalid request.');
		}
	}

	// magic quotes were deprecated in PHP5.3.0 and removed in PHP6.0.0
	if (version_compare(PHP_VERSION, '5.3.0', '<')) {
		set_magic_quotes_runtime(0);

		// magic_quotes_gpc can't be disabled at run-time, so clean them up as necessary.
		if (function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc() ||
			ini_get('magic_quotes_sybase') && strtolower(ini_get('magic_quotes_sybase'))!='off') {
			$in = array(&$_GET, &$_POST, &$_REQUEST, &$_COOKIE);
			while (list($k,$v) = each($in)) {
				foreach ($v as $key => $val) {
					if (!is_array($val)) {
						$in[$k][$key] = stripslashes($val);
						continue;
					}
					$in[] =& $in[$k][$key];
				}
			}
			unset($in);
		}
	}
}

//-- setup execution timer
$start_time=microtime(true);

// Split the request "protocol://host:port/path/to/script.php?var=value" into parts
// PGV_SERVER_NAME  = protocol://host:port
// PGV_SCRIPT_PATH  = /path/to/   (begins and ends with /)
// PGV_SCRIPT_NAME  = script.php  (already defined in the calling script)
// PGV_QUERY_STRING = ?var=value (still TODO - need to refactor REQUEST_URI and QUERY_STRING)

define('PGV_SERVER_NAME',
	(empty($_SERVER['HTTPS']) || !in_array($_SERVER['HTTPS'], array('1', 'on', 'On', 'ON')) ?  'http://' : 'https://').
	(empty($_SERVER['SERVER_NAME']) ? '' : $_SERVER['SERVER_NAME']).
	(empty($_SERVER['SERVER_PORT']) || $_SERVER['SERVER_PORT']==80 ? '' : ':'.$_SERVER['SERVER_PORT'])
);

// SCRIPT_NAME should always be correct, but is not always present.
// PHP_SELF should always be present, but may have trailing path: /path/to/script.php/FOO/BAR
if (!empty($_SERVER['SCRIPT_NAME'])) {
	// PHP 5.3 only
	//define('PGV_SCRIPT_PATH', stristr($_SERVER['SCRIPT_NAME'], PGV_SCRIPT_NAME, true));
	define('PGV_SCRIPT_PATH', substr($_SERVER['SCRIPT_NAME'], 0, stripos($_SERVER['SCRIPT_NAME'], PGV_SCRIPT_NAME)));
} elseif (!empty($_SERVER['PHP_SELF'])) {
	// PHP 5.3 only
	//define('PGV_SCRIPT_PATH', stristr($_SERVER['PHP_SELF'], PGV_SCRIPT_NAME, true));
	define('PGV_SCRIPT_PATH', substr($_SERVER['PHP_SELF'], 0, stripos($_SERVER['PHP_SELF'], PGV_SCRIPT_NAME)));
} else {
	// No server settings - probably running as a command line script
	define('PGV_SCRIPT_PATH', '/');
}

// If we have a preferred URL (e.g. https instead of http, or www.example.com instead of
// www.isp.com/~example), then redirect to it.
if (!empty($SERVER_URL) && $SERVER_URL != PGV_SERVER_NAME.PGV_SCRIPT_PATH) {
	header('Location: '.$SERVER_URL);
	exit;
}

// Microsoft IIS servers don't set REQUEST_URI, so generate it for them.
if (!isset($_SERVER['REQUEST_URI']))  {
	$_SERVER['REQUEST_URI']=substr($_SERVER['PHP_SELF'], 1);
	if (isset($_SERVER['QUERY_STRING'])) {
		$_SERVER['REQUEST_URI'].='?'.$_SERVER['QUERY_STRING'];
	}
}

//-- load file for language settings
require PGV_ROOT.'includes/lang_settings_std.php';
$Languages_Default = true;
if (file_exists($INDEX_DIRECTORY.'lang_settings.php')) {
	$DefaultSettings = $language_settings; // Save default settings, so we can merge properly
	require $INDEX_DIRECTORY.'lang_settings.php';
	$ConfiguredSettings = $language_settings; // Save configured settings, same reason
	$language_settings = array_merge($DefaultSettings, $ConfiguredSettings); // Copy new langs into config
	// Now copy new language settings into existing configuration
	foreach ($DefaultSettings as $lang => $settings) {
		foreach ($settings as $key => $value) {
			if (!isset($language_settings[$lang][$key])) {
				$language_settings[$lang][$key] = $value;
			}
		}
	}
	unset($DefaultSettings);
	unset($ConfiguredSettings); // We don't need these any more
	$Languages_Default = false;
}

//-- build array of active languages (required for config override check)
$pgv_lang_use = array();
foreach ($language_settings as $key => $value) {
	$pgv_lang_use[$key] = $value['pgv_lang_use'];
}
// Don't let incoming request change to an unsupported or inactive language
if (isset($_REQUEST['NEWLANGUAGE'])) {
	if (empty($pgv_lang_use[$_REQUEST['NEWLANGUAGE']])) {
		unset($_REQUEST['NEWLANGUAGE']);
	} elseif (!$pgv_lang_use[$_REQUEST['NEWLANGUAGE']]) {
		unset($_REQUEST['NEWLANGUAGE']);
	}
}

/**
 * Cleanup some variables
 */

if (empty($_SERVER['QUERY_STRING'])) {
	$QUERY_STRING='';
} else {
	$QUERY_STRING=str_replace(
		array('&','<', 'show_context_help=no', 'show_context_help=yes'),
		array('&amp;','&lt;', '', ''),
		$_SERVER['QUERY_STRING']
	);
}

//-- if not configured then redirect to the configuration script
if (!$CONFIGURED) {
	if (PGV_SCRIPT_NAME!='admin.php'
	&& PGV_SCRIPT_NAME!='login.php'
	&& PGV_SCRIPT_NAME!='install.php'
	&& PGV_SCRIPT_NAME!='editconfig_help.php') {
		header('Location: install.php');
		exit;
	}
}
//-- allow user to cancel
ignore_user_abort(false);

// try and set the memory limit
if (empty($PGV_MEMORY_LIMIT)) $PGV_MEMORY_LIMIT = '32M';
@ini_set('memory_limit', $PGV_MEMORY_LIMIT);

// Application configuration data - things that aren't (yet) user-editable
require PGV_ROOT.'includes/config_data.php';

//--load common functions
require  PGV_ROOT.'includes/functions/functions.php';
require  PGV_ROOT.'includes/functions/functions_name.php';
//-- set the error handler
set_error_handler('pgv_error_handler');


// Connect to the database
require PGV_ROOT.'includes/functions/functions_db.php';
require PGV_ROOT.'includes/classes/class_pgv_db.php';
//-- don't try to connect to the DB if not configured
if ($CONFIGURED) {
try {
	// remove escape codes before using PW
	$DBPASS=str_replace(array("\\\\", "\\\"", "\\\$"), array("\\", "\"", "\$"), $DBPASS);
	PGV_DB::createInstance($DBTYPE, $DBHOST, $DBPORT, $DBNAME, $DBUSER, $DBPASS, $DB_UTF8_COLLATION);
	unset($DBUSER, $DBPASS);
	try {
		PGV_DB::updateSchema(PGV_ROOT.'includes/db_schema/', 'PGV_SCHEMA_VERSION', PGV_SCHEMA_VERSION);
	} catch (PDOException $ex) {
		// The schema update scripts should never fail.  If they do, there is no clean recovery.
		die($ex);
	}
} catch (PDOException $ex) {
	// Can't connect to the DB?  We'll get redirected to install.php later.....
}
}

// The authentication interface includes logging - which may be to the database
require PGV_ROOT.'includes/authentication.php';
 
// Determine browser type
$BROWSERTYPE = 'other';
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
	if (stristr($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
		$BROWSERTYPE = 'opera';
	} elseif (stristr($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
		$BROWSERTYPE = 'netscape';
	} elseif (stristr($_SERVER['HTTP_USER_AGENT'], 'Gecko')) {
		$BROWSERTYPE = 'mozilla';
	} elseif (stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
		$BROWSERTYPE = 'msie';
	}
}

//-- load up the code to check for spiders
require PGV_ROOT.'includes/session_spider.php';

// Start the php session
session_set_cookie_params(date('D M j H:i:s T Y', time()+$PGV_SESSION_TIME), PGV_SCRIPT_PATH);

if ($PGV_SESSION_TIME>0) {
	session_cache_expire($PGV_SESSION_TIME/60);
}
if (!empty($PGV_SESSION_SAVE_PATH)) {
	session_save_path($PGV_SESSION_SAVE_PATH);
}
if (isset($MANUAL_SESSION_START) && !empty($SID)) {
	session_id($SID);
}

session_start();

if (!$SEARCH_SPIDER && !isset($_SESSION['initiated'])) {
	// A new session, so prevent session fixation attacks by choosing a new PHPSESSID.
	session_regenerate_id(true);
	$_SESSION['initiated']=true;
} else {
	// An existing session
}

// Set the active GEDCOM
if (isset($_REQUEST['ged'])) {
	// .... from the URL or form action
	$GEDCOM=$_REQUEST['ged'];
} elseif (isset($_REQUEST['GEDCOM'])) {
	// .... is this used ????
	$GEDCOM=$_REQUEST['GEDCOM'];
} elseif (isset($_SESSION['GEDCOM'])) {
	// .... the most recently used one
	$GEDCOM=$_SESSION['GEDCOM'];
} else {
	// .... we'll need to query the DB to find one
	$GEDCOM='';
}

require PGV_ROOT.'config_gedcom.php'; // Load default gedcom settings

// Missing/invalid gedcom - pick any one!
try {
	// Does the requested GEDCOM exist?
	$ged_id=get_id_from_gedcom($GEDCOM);
	if (!$ged_id) {
		// Try the site default
		$GEDCOM=get_site_setting('DEFAULT_GEDCOM');
		$ged_id=get_id_from_gedcom($GEDCOM);
		// Try any one
		if (!$ged_id) {
			foreach (get_all_gedcoms() as $ged_id=>$GEDCOM) {
				if (get_gedcom_setting($ged_id, 'imported')) {
					break;
				}
			}
		}
	}
	define('PGV_GEDCOM', $GEDCOM);
	define('PGV_GED_ID', $ged_id);
	load_privacy_file(PGV_GED_ID);
	require get_config_file(PGV_GED_ID); // Load current gedcom settings
} catch (PDOException $ex) {
	// No DB available?
	require 'privacy.php';
	define('PGV_GEDCOM', '');
	define('PGV_GED_ID', 0);
}

// Set our gedcom selection as a default for the next page
$_SESSION['GEDCOM']=PGV_GEDCOM;

if (empty($PHPGEDVIEW_EMAIL)) {
	$PHPGEDVIEW_EMAIL='phpgedview-noreply@'.preg_replace('/^www\./i', '', $_SERVER['SERVER_NAME']);
}

require PGV_ROOT.'includes/functions/functions_print.php';
require PGV_ROOT.'includes/functions/functions_rtl.php';

if ($MULTI_MEDIA) {
	require PGV_ROOT.'includes/functions/functions_mediadb.php';
}
require PGV_ROOT.'includes/functions/functions_date.php';

if (empty($PEDIGREE_GENERATIONS)) {
	$PEDIGREE_GENERATIONS=$DEFAULT_PEDIGREE_GENERATIONS;
}

/* Re-build the various language-related arrays
 *  Note:
 *  This code existed in both lang_settings_std.php and in lang_settings.php.
 *  It has been removed from both files and inserted here, where it belongs.
 */
$languages            =array();
$pgv_lang_use         =array();
$pgv_lang_self        =array();
$lang_short_cut       =array();
$lang_langcode        =array();
$pgv_language         =array();
$confighelpfile       =array();
$helptextfile         =array();
$flagsfile            =array();
$factsfile            =array();
$adminfile            =array();
$editorfile           =array();
$countryfile          =array();
$faqlistfile          =array();
$extrafile            =array();
$factsarray           =array();
$pgv_lang_name        =array();
$ALPHABET_upper       =array();
$ALPHABET_lower       =array();
$MULTI_LETTER_ALPHABET=array();
$MULTI_LETTER_EQUIV   =array();
$DICTIONARY_SORT      =array();
$COLLATION            =array();
$DATE_FORMAT_array    =array();
$TIME_FORMAT_array    =array();
$WEEK_START_array     =array();
$TEXT_DIRECTION_array =array();
$NAME_REVERSE_array   =array();

foreach ($language_settings as $key => $value) {
	if (!isset($value['pgv_lang_self']) || !isset($value['pgv_language'])) continue;
	$languages[$key]            =$value['pgv_langname'];
	$pgv_lang_use[$key]         =$value['pgv_lang_use'];
	$pgv_lang_self[$key]        =$value['pgv_lang_self'];
	$lang_short_cut[$key]       =$value['lang_short_cut'];
	$lang_langcode[$key]        =$value['langcode'];
	$pgv_language[$key]         =$value['pgv_language'];
	$confighelpfile[$key]       =$value['confighelpfile'];
	$helptextfile[$key]         =$value['helptextfile'];
	$flagsfile[$key]            =$value['flagsfile'];
	$factsfile[$key]            =$value['factsfile'];
	$adminfile[$key]            =$value['adminfile'];
	$editorfile[$key]           =$value['editorfile'];
	$countryfile[$key]          =$value['countryfile'];
	$faqlistfile[$key]          =$value['faqlistfile'];
	$extrafile[$key]            =$value['extrafile'];
	$ALPHABET_upper[$key]       =$value['ALPHABET_upper'];
	$ALPHABET_lower[$key]       =$value['ALPHABET_lower'];
	$MULTI_LETTER_ALPHABET[$key]=$value['MULTI_LETTER_ALPHABET'];
	$MULTI_LETTER_EQUIV[$key]   =$value['MULTI_LETTER_EQUIV'];
	$DICTIONARY_SORT[$key]      =$value['DICTIONARY_SORT'];
	$COLLATION[$key]            =$value['COLLATION'];
	$DATE_FORMAT_array[$key]    =$value['DATE_FORMAT'];
	$TIME_FORMAT_array[$key]    =$value['TIME_FORMAT'];
	$WEEK_START_array[$key]     =$value['WEEK_START'];
	$TEXT_DIRECTION_array[$key] =$value['TEXT_DIRECTION'];
	$NAME_REVERSE_array[$key]   =$value['NAME_REVERSE'];

	$pgv_lang["lang_name_$key"] =$value['pgv_lang_self'];
}

// -- Determine which of PGV's supported languages is topmost in the browser's language list
if ((empty($LANGUAGE) || $ENABLE_MULTI_LANGUAGE) && empty($_SESSION['CLANGUAGE']) && empty($SEARCH_SPIDER)) {
	if (isset($HTTP_ACCEPT_LANGUAGE)) {
		$browserLangPrefs = $HTTP_ACCEPT_LANGUAGE;
	} elseif (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$browserLangPrefs = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
	} else {
		$browserLangPrefs = 'en';
	}
	// Seach list of supported languages for this Browser's preferred page languages
	$browserLangList = preg_split('/(,\s*)|(;\s*)/', $browserLangPrefs);
	if (empty($LANGUAGE)) $LANGUAGE = 'english';		// Use English if we can't match any of the browser's preferred languages
	foreach ($browserLangList as $browserLang) {
		$browserLang = ';'.strtolower(trim($browserLang));
		foreach ($pgv_lang_use as $language => $active) {
			if ($CONFIGURED && !$active) continue;	// Don't consider any language marked as "inactive"
			if (strpos(';'.$lang_langcode[$language], $browserLang) === false) continue;
			$LANGUAGE = $language;	// We have a match
			break 2;
		}
	}
}

// -- If the user's profile specifies a preference, use that
$thisUser = getUserId();
if ($thisUser) $LANGUAGE = get_user_setting($thisUser, 'language');

// -- If the user previously selected a language from the menu, use that
if (empty($SEARCH_SPIDER)) {
	if (!empty($_SESSION['CLANGUAGE'])) {
		$LANGUAGE = $_SESSION['CLANGUAGE'];
	} else {
		$_SESSION['CLANGUAGE'] = $LANGUAGE;
	}
}

// -- Finally, we'll see whether the user has now selected a preferred language from the menu
if ($ENABLE_MULTI_LANGUAGE && empty($SEARCH_SPIDER)) {
	if (isset($_REQUEST['changelanguage']) && strtolower($_REQUEST['changelanguage'])=='yes') {
		if (!empty($_REQUEST['NEWLANGUAGE']) && isset($pgv_language[strtolower($_REQUEST['NEWLANGUAGE'])])) {
			$LANGUAGE = strtolower($_REQUEST['NEWLANGUAGE']);
			$_SESSION['CLANGUAGE'] = $LANGUAGE;
		}
	}
}

//-- load the privacy functions
require PGV_ROOT.'includes/functions/functions_privacy.php';

// The curren't user's profile - from functions in authentication.php
define('PGV_USER_ID',           getUserId     ());
if (PGV_DB::isConnected()) {
	define('PGV_USER_NAME',         getUserName   ());
	define('PGV_USER_IS_ADMIN',     userIsAdmin   (PGV_USER_ID));
	define('PGV_USER_AUTO_ACCEPT',  userAutoAccept(PGV_USER_ID));
	define('PGV_ADMIN_USER_EXISTS', PGV_USER_IS_ADMIN     || adminUserExists());
	define('PGV_USER_GEDCOM_ADMIN', PGV_USER_IS_ADMIN     || userGedcomAdmin(PGV_USER_ID, PGV_GED_ID));
	define('PGV_USER_CAN_ACCEPT',   PGV_USER_GEDCOM_ADMIN || userCanAccept  (PGV_USER_ID, PGV_GED_ID));
	define('PGV_USER_CAN_EDIT',     PGV_USER_CAN_ACCEPT   || userCanEdit    (PGV_USER_ID, PGV_GED_ID));
	define('PGV_USER_CAN_ACCESS',   PGV_USER_CAN_EDIT     || userCanAccess  (PGV_USER_ID, PGV_GED_ID));
	define('PGV_USER_ACCESS_LEVEL', getUserAccessLevel(PGV_USER_ID, PGV_GED_ID));
	define('PGV_USER_GEDCOM_ID',    getUserGedcomId   (PGV_USER_ID, PGV_GED_ID));
	define('PGV_USER_ROOT_ID',      getUserRootId     (PGV_USER_ID, PGV_GED_ID));
} else {
	// No DB?  Just set the basics, for install.php
	define('PGV_ADMIN_USER_EXISTS', false);
}

// If we are logged in, and logout=1 has been added to the URL, log out
if (PGV_USER_ID && safe_GET_bool('logout')) {
	userLogout(PGV_USER_ID);
	header("Location: ".PGV_SERVER_NAME.PGV_SCRIPT_PATH);
	exit;
}

// Load all the language variables and language-specific functions
loadLanguage($LANGUAGE, true);

// Check for page views exceeding the limit
CheckPageViews();

$show_context_help = '';
if (!empty($_REQUEST['show_context_help'])) $show_context_help = $_REQUEST['show_context_help'];
if (!isset($_SESSION['show_context_help'])) $_SESSION['show_context_help'] = $SHOW_CONTEXT_HELP;
if (!isset($_SESSION['pgv_user'])) $_SESSION['pgv_user'] = '';
if (isset($SHOW_CONTEXT_HELP) && $show_context_help==='yes') $_SESSION['show_context_help'] = true;
if (isset($SHOW_CONTEXT_HELP) && $show_context_help==='no') $_SESSION['show_context_help'] = false;
if (!isset($USE_THUMBS_MAIN)) $USE_THUMBS_MAIN = false;
if (PGV_SCRIPT_NAME!='install.php' && PGV_SCRIPT_NAME!='editconfig_help.php') {
	if (!PGV_DB::isConnected() || !PGV_ADMIN_USER_EXISTS) {
		header('Location: install.php');
		exit;
	}

	if (!get_gedcom_setting(PGV_GED_ID, 'imported') && !in_array(PGV_SCRIPT_NAME, array('editconfig_gedcom.php', 'help_text.php', 'editconfig_help.php', 'editgedcoms.php', 'downloadgedcom.php', 'uploadgedcom.php', 'login.php', 'admin.php', 'config_download.php', 'addnewgedcom.php', 'validategedcom.php', 'addmedia.php', 'importgedcom.php', 'client.php', 'edit_privacy.php', 'gedcheck.php', 'printlog.php', 'editlang.php', 'editlang_edit.php' ,'useradmin.php', 'export_gedcom.php', 'edit_changes.php'))) {
		header('Location: editgedcoms.php');
		exit;
	}

	if ($REQUIRE_AUTHENTICATION && !PGV_USER_ID && !in_array(PGV_SCRIPT_NAME, array('login.php', 'login_register.php', 'client.php', 'genservice.php', 'help_text.php', 'message.php'))) {
		if (!empty($_REQUEST['auth']) && $_REQUEST['auth']=='basic') {
			// if user is attempting basic authentication
			// TODO: Update if digest auth is ever implemented
			basicHTTPAuthenticateUser();
		} else {
			if (PGV_SCRIPT_NAME=='index.php') {
				$url='index.php?ctype=gedcom&ged='.PGV_GEDCOM;
			} else {
				$url=PGV_SCRIPT_NAME.'?'.$QUERY_STRING;
			}
			if ($LOGIN_URL) {
				// Specify an absolute URL, as $LOGIN_URL could be anywhere
				header('Location: '.$LOGIN_URL.'?url='.urlencode(PGV_SERVER_NAME.PGV_SCRIPT_PATH.$url));
			} else {
				header('Location: login.php?url='.urlencode($url));
			}
			exit;
		}
	}

	// -- setup session information for tree clippings cart features
	if ((!isset($_SESSION['cart'])) || (!empty($_SESSION['last_spider_name']))) { // reset cart everytime for spiders
		$_SESSION['cart'] = array();
	}
	$cart = $_SESSION['cart'];

	$_SESSION['CLANGUAGE'] = $LANGUAGE;
	if (!isset($_SESSION['timediff'])) {
		$_SESSION['timediff'] = 0;
	}

	//-- load any editing changes
	if (PGV_USER_CAN_EDIT && file_exists("{$INDEX_DIRECTORY}pgv_changes.php")) {
		require $INDEX_DIRECTORY.'pgv_changes.php';
	} else {
		$pgv_changes = array();
	}

	if (empty($LOGIN_URL)) {
		$LOGIN_URL = 'login.php';
	}
}

//-- load the user specific theme
if (PGV_USER_ID) {
	//-- update the login time every 5 minutes
	if (!isset($_SESSION['activity_time']) || (time()-$_SESSION['activity_time'])>300) {
		userUpdateLogin(PGV_USER_ID);
		$_SESSION['activity_time'] = time();
	}

	$usertheme = get_user_setting(PGV_USER_ID, 'theme');
	if ((!empty($_POST['user_theme']))&&(!empty($_POST['oldusername']))&&($_POST['oldusername']==PGV_USER_ID)) $usertheme = $_POST['user_theme'];
	if ((!empty($usertheme)) && (file_exists($usertheme.'theme.php')))  {
		$THEME_DIR = $usertheme;
	}
}

if (isset($_SESSION['theme_dir'])) {
	$THEME_DIR = $_SESSION['theme_dir'];
	if (PGV_USER_ID) {
		if (get_user_setting(PGV_USER_ID, 'editaccount')=='Y') unset($_SESSION['theme_dir']);
	}
}

if (empty($THEME_DIR) || !file_exists("{$THEME_DIR}theme.php")) {
	$THEME_DIR = 'themes/standard/';
}

define('PGV_THEME_DIR', $THEME_DIR);

require PGV_THEME_DIR.'theme.php';

// Page hit counter - load after theme, as we need theme formatting
if ($SHOW_COUNTER && !$SEARCH_SPIDER) {
	require PGV_ROOT.'includes/hitcount.php';
} else {
	$hitCount='';
}

if ($Languages_Default) {            // If Languages not yet configured
	$pgv_lang_use['english'] = false;  //  disable English
	$pgv_lang_use[$LANGUAGE] = true; //  and enable according to Browser pref.
	$language_settings['english']['pgv_lang_use'] = false;
	$language_settings[$LANGUAGE]['pgv_lang_use'] = true;
}

// Characters with weak-directionality can confuse the browser's BIDI algorithm.
// Make sure that they follow the directionality of the page, not that of the
// enclosed text.
if ($TEXT_DIRECTION=='ltr') {
	define ('PGV_LPARENS', '&lrm;(');
	define ('PGV_RPARENS', ')&lrm;');
} else {
	define ('PGV_LPARENS', '&rlm;(');
	define ('PGV_RPARENS', ')&rlm;');
}

// define constants to be used when setting permissions after creating files/directories
if (substr(PHP_SAPI, 0, 3) == 'cgi') {  // cgi-mode, should only be writable by owner
	define('PGV_PERM_EXE',  0755);  // to be used on directories, php files and htaccess files
	define('PGV_PERM_FILE', 0644);  // to be used on images, text files, etc
} else { // mod_php mode, should be writable by everyone
	define('PGV_PERM_EXE',  0777);
	define('PGV_PERM_FILE', 0666);
}

// Lightbox needs custom integration in many places.  Only check for the module once.
define('PGV_USE_LIGHTBOX', !$SEARCH_SPIDER && $MULTI_MEDIA && file_exists(PGV_ROOT.'modules/lightbox.php') && is_dir(PGV_ROOT.'modules/lightbox'));

?>
