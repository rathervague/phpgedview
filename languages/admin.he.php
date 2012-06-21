<?php
/**
 * Hebrew texts
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
 *
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: admin.he.php 6908 2010-02-03 02:17:33Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
$pgv_lang["module_admin"]			= "ניהול מודולים";
$pgv_lang["mod_admin_installed"]		= "מודולים שהותקנו";
$pgv_lang["mod_admin_tabs"]		= "נהל חוצצים";
$pgv_lang["mod_admin_menus"]		= "נהל תפריטים";
$pgv_lang["mod_admin_intro"]		= "למטה תמצא את הרשימה של כל המודולים שהותקנו בהתקנה הזו של PhpGedView.  מודולים מותקנים בכך ששמים אותם בתיקיית <i>modules</i>.  כאן ניתן להגדיר את רמת ההרשאות לפי קובץ GEDCOM לכל מודול.  אם המודול כולל חוצצים בדף האישי או תפריטים בסרגל התפריטים, ניתן להגדיר גם את רמת הגישה והסדר של כל אחד מהם.";
$pgv_lang["mod_admin_active"]		= "פעיל";
$pgv_lang["mod_admin_name"]		= "שם המודול";
$pgv_lang["mod_admin_description"]		= "תאור";
$pgv_lang["mod_admin_version"]		= "ורסיה / PGV";
$pgv_lang["mod_admin_hastab"]		= "חוצץ?";
$pgv_lang["mod_admin_hasmenu"]		= "תפריט?";
$pgv_lang["mod_admin_access_level"]	= "רמת גישה";
$pgv_lang["mod_admin_order"]		= "סדר";
$pgv_lang["mod_admin_config"]		= "ערכי מודולים";
$pgv_lang["mod_admin_settings"]		= "ערכי ההגדרות של המודול";
$pgv_lang["ret_module_admin"]		= "חזור לדף ניהול המודולים";
$pgv_lang["ret_admin"]			= "חזור לדף הניהול";

$pgv_lang["enter_comment"]			= "כאן ניתן להכניס הערות.";
$pgv_lang["upload_a_gedcom"] 		= "העלה קובץ GEDCOM";
$pgv_lang["start_entering"] 			= "התחל להכניס נתונים";
$pgv_lang["add_gedcom_from_path"] 	= "הוסף GEDCOM מתיק";
$pgv_lang["get_started_instructions"]		= "בחר באופציה מתחת כדי להתחיל להשתמש ב-PhpGedView";

$pgv_lang["admin_users_exists"]		= "המשתמשים המנהליים הבאים כבר קיימים:";
$pgv_lang["install_step_1"] 			= "בדוק סביבה";
$pgv_lang["install_step_2"] 			= "קשר מאגר מידע";
$pgv_lang["install_step_3"] 			= "צור טבלאות";
$pgv_lang["install_step_4"] 			= "תצורת אתר";
$pgv_lang["install_step_5"] 			= "שפות";
$pgv_lang["install_step_6"] 			= "שמור תצורה";
$pgv_lang["install_step_7"] 			= "צור משתמש של מנהלן";
$pgv_lang["install_wizard"] 			= "אשף התקנה";
$pgv_lang["basic_site_config"] 		= "בסיסי";
$pgv_lang["adv_site_config"] 			= "מתקדם";
$pgv_lang["config_not_saved"] 		= "הגדרותיך לא ישמרו<br />עד שלב 6";
$pgv_lang["download_config"] 		= "הורד config.php";
$pgv_lang["site_unavailable"] 			= "האתר אינו זמין כרגע";
$pgv_lang["to_manage_users"] 		= "כדי לנהל משתמשים, השתמש בדף <a href=\"useradmin.php\">ניהול משתמשים</a>.";
$pgv_lang["db_tables_created"] 		= "טבלאות מאגר המידע נוצרו בהצלחה";
$pgv_lang["config_saved"] 			= "התצורה נשמרה בהצלחה";
$pgv_lang["checking_errors"]			= "בודק שגיאות...";
$pgv_lang["checking_php_version"]		= "בודק גרסת ה-PHP הנדרשת:";
$pgv_lang["failed"]				= "נכשל";
$pgv_lang["pgv_requires_version"]		= "PhpGedView דורש גרסת PHP #PGV_REQUIRED_PHP_VERSION# או גבוהה יותר.";
$pgv_lang["using_php_version"]		= "הנך משתמש בגרסת PHP #PGV_ACTUAL_PHP_VERSION#";
$pgv_lang["checking_db_support"]		= "בודק תמיכה מינימלית של מאגר מידע:";
$pgv_lang["no_db_extensions"]		= "אין לך אף אחת מהסיומות הנתמכות של מאגר המידע";
$pgv_lang["db_ext_support"]			= "יש לך תמיכת #DBEXT#";
$pgv_lang["checking_config.php"]		= "בודק config.php:";
$pgv_lang["config.php_missing"]		= "קובץ config.php לא נימצא.";
$pgv_lang["config.php_missing_instr"]	= "אשף התקנה זה לא יוכל לכתוב את הגדרותיך לקובץ config.php file.  תוכל להכין עותק של קובץ config.dist ולשנות את שמו ל-config.php.  לחלופין, לאחר שתסיים את האשף הזה תהייה לך אופציה להוריד את הגדרותיך ולהעלות את קובץ config.php שנוצר.";
$pgv_lang["config.php_not_writable"]		= "לא ניתן לכתוב ב-config.php.";
$pgv_lang["config.php_not_writable_instr"]	= "אשף התקנה זה לא יוכל לכתוב את הגדרותיך לקובץ config.php file.  תוכל לתת הרשאות כתיבה לקובץ, או לאחר שתסיים את האשף הזה תהייה לך אופציה להוריד את הגדרותיך ולהעלות את קובץ config.php שנוצר.";
$pgv_lang["passed"]				= "עבר בהצלחה";
$pgv_lang["config.php_writable"]		= "config.php קיים וניתן לכתיבה.";
$pgv_lang["checking_warnings"]		= "בודק אזהרות...";
$pgv_lang["checking_timelimit"]		= "בודק אפשרות לשנות הגבלת זמן:";
$pgv_lang["cannot_change_timelimit"]	= "לא ניתן לשנות את הגבלת הזמן.";
$pgv_lang["cannot_change_timelimit_instr"]	= "יתכן ולא תוכל להריץ את כל הפונקציות על מאגרי מידע גדולים עם הרבה אנשים.";
$pgv_lang["current_max_timelimit"]		= "הגבלת הזמן המכסימלית שלך היא";
$pgv_lang["check_memlimit"]			= "בודק אפשרות לשנות גודל הזיכרון";
$pgv_lang["cannot_change_memlimit"]	= "לא ניתן לשנות גודל הזיכרון.";
$pgv_lang["cannot_change_memlimit_instr"]	= "יתכן ולא תוכל להריץ את כל הפונקציות על מאגרי מידע גדולים עם הרבה אנשים.";
$pgv_lang["current_max_memlimit"]		= "גודל הזכרון הנוכחית שלך הוא";
$pgv_lang["check_upload"]			= "בודק אפשרות להעלות קבצים:";
$pgv_lang["current_max_upload"]		= "הגודל המכסימלי של קובץ התקנה שלך הוא:";
$pgv_lang["check_gd"]			= "בודק קיום ספריית GD לתמונות:";
$pgv_lang["cannot_use_gd"]			= "אין לך ספריית GD לתמונות. לא תוכל ליצור בצורה אוטומטית תמונות ממוזערות.";
$pgv_lang["check_sax"]			= "בודק קיום ספריית SAX XML:";
$pgv_lang["cannot_use_sax"]			= "אין לך ספריית SAX XML. לא תוכל להריץ דו\"ות או פונקציות עזר אחרות.";
$pgv_lang["check_dom"]			= "בודק קיום ספריית DOM XML:";
$pgv_lang["cannot_use_dom"]		= "אין לך ספריית DOM XML.  לא תוכל ליצא XML.";
$pgv_lang["check_calendar"]			= "בודק קיום ספריית לוח שנה מתקדם:";
$pgv_lang["cannot_use_calendar"]		= "אין לך תמיכה של לוח שנה מתקדם. לא תוכל להריץ חלק מפונקציות לוח שנה מתקדמות.";
$pgv_lang["warnings_passed"]		= " כל בדיקות האזהרה עברו בהצלחה.";
$pgv_lang["warning_instr"]			= "אם אזהרה כלשהי לא עברה יתכן שעדיין תוכל להריץ PhpGedView על השרת הזה, אבל יתכן שחלק מהפונקציונליות תנוטרל או תתנסה בביצועים גרועים.";
$pgv_lang["associated_files"]			= "קבצים קשורים:";
$pgv_lang["remove_all_files"]			= "הסר את כל הקבצים הבלתי נחוצים";
$pgv_lang["warn_file_delete"]			= "הקובץ הזה מכיל מידע חשוב כגון הגדרת השפות או נתוני שינויים תלויים ועומדים. האם אתה בטוח שאתה רוצה למחוק קובץ זה?";
$pgv_lang["deleted_files"]          		= "קבצים שנמחקו:";
$pgv_lang["index_dir_cleanup_inst"]		= "כדי למחוק קובץ או ספרית משנה מתיקיית אינדקס גרור אותו לפח האשפה או בחר את תיבת הסימון שלו. לחץ על כפתור מחק כדי להסיר לצמיתות את הקבצים המסומנים.<br /><br />קבצים שמסומנים ע\"י <img src=\"./images/RESN_confidential.gif\" alt=\"\" />  נחוצים לפעולה תקינה ולא ניתן למחוק אותם.<br />קבצים מסומנים ע\"י <img src=\"./images/RESN_locked.gif\" alt=\"\" /> כוללים הגדרות חשובות או נתוני שינויים ממתינים ואותם יש למחוק רק אם אתה בטוח שאתה יודע מה שאתה עושה.<br /><br />";
$pgv_lang["index_dir_cleanup"]		= "תיקיית אינדקס לניקוי";
$pgv_lang["clear_cache_succes"]		= "קובצי cache הוסרו.";
$pgv_lang["clear_cache"]			= "cache נקה קובצי";
$pgv_lang["sanity_err0"]			= "שגיאות:";
$pgv_lang["sanity_err1"]			= "אתה צריך מהדורת PHP #PGV_REQUIRED_PHP_VERSION# או גבוהה יותר.";
$pgv_lang["sanity_err2"]			= "קובץ או תיקייה <i>#GLOBALS[whichFile]#</i> אינו קיים. בדוק שהקובץ או התיקייה קיימים, ששמו נכון ושיש הרשאות קריאה.";
$pgv_lang["sanity_err3"]			= "קובץ <i>#GLOBALS[whichFile]#</i> לא הועלה בצורה נכונה. נסה להעלות את הקובץ שנית.";
$pgv_lang["sanity_err4"]			= "קובץ <i>config.php</i> אינו תקין.";
$pgv_lang["sanity_err5"]			= "קובץ <i>config.php</i> אינו בר כתיבה.";
$pgv_lang["sanity_err6"]			= "תיקייה <i>#GLOBALS[INDEX_DIRECTORY]#</i> אינה ברת כתיבה.";
$pgv_lang["sanity_warn0"]			= "אזהרות:";
$pgv_lang["sanity_warn1"]			= "תיקייה <i>#GLOBALS[MEDIA_DIRECTORY]#</i> אינה ברת כתיבה.  לא תוכל להעלות קובצי מדיה או ליצור תמונות מזעריות ב-PhpGedView.";
$pgv_lang["sanity_warn2"]			= "תיקיית <i>#GLOBALS[MEDIA_DIRECTORY]#thumbs</i> לא ניתנת לכתיבה.  אינך יכול להעלות או ליצור קבצים מזעריים ב-PhpGedView.";
$pgv_lang["sanity_warn3"]			= "The GD imaging library does not exist. PhpGedView will still function, but some of the features, such as thumbnail generation and the circle diagram, will not work without the GD library.  Please see <a href='http://www.php.net/manual/en/ref.image.php'>http://www.php.net/manual/en/ref.image.php</a> for more information."; //@#@
$pgv_lang["sanity_warn4"]			= "The XML Parser library does not exist. PhpGedView will still function, but some of the features, such as report generation and web services, will not work without the XML Parser library. Please see <a href='http://www.php.net/manual/en/ref.xml.php'>http://www.php.net/manual/en/ref.xml.php</a> for more information."; //@#@
$pgv_lang["sanity_warn5"]			= "The DOM XML library does not exist. PhpGedView will still function, but some of the features, such as Gramps Export features in the clippings cart, download, and web services, will not work. Please see <a href='http://www.php.net/manual/en/ref.domxml.php'>http://www.php.net/manual/en/ref.domxml.php</a> for more information."; //@#@
$pgv_lang["sanity_warn6"]			= "The Calendar library does not exist. PhpGedView will still function, but some of the features, such as conversion to other calendars such as Hebrew or French, will not work.  It is not essential for running PhpGedView. Please see <a href='http://www.php.net/manual/en/ref.calendar.php'>http://www.php.net/manual/en/ref.calendar.php</a> for more information."; //@#@

$pgv_lang["ip_address"]		= "כתובת IP";
$pgv_lang["date_time"]		= "תאריך וזמן";
$pgv_lang["log_message"]		= "הודעת לוג";	
$pgv_lang["searchtype"]		= "צורת חיפוש";
$pgv_lang["query"]			= "שאילתא";
$pgv_lang["user"]			= "משתמש מאושר";
$pgv_lang["editors"]			= "עורכים";
$pgv_lang["gedcom_admins"]		= "מנהלני GEDCOM";
$pgv_lang["site_admins"]		= "מנהלני אתר";
$pgv_lang["nobody"]			= "אף אחד"; 
$pgv_lang["thumbnail_deleted"]	= "קובץ תמונה מזערית נמחק בהצלחה.";
$pgv_lang["thumbnail_not_deleted"]	= "לא ניתן למחוק את קובץ התמונה המזערית.";
$pgv_lang["step2"]			= "שלב 2 מתוך 4:";
$pgv_lang["refresh"]			= "רענן";
$pgv_lang["move_file_success"]	= "קובצי מדיה והתמונה המזערית הועברו בהצלחה.";
$pgv_lang["media_folder_corrupt"]	= "תיקיית המדיה מקולקלת.";
$pgv_lang["media_file_not_deleted"]	= "לא ניתן למחוק את קובץ המדיה.";
$pgv_lang["gedcom_deleted"]	= "[#GED#] נימחק בהצלחה.";
$pgv_lang["gedadmin"]		= "מנהלן GEDCOM";
$pgv_lang["full_name"]		= "שם מלא";
$pgv_lang["error_header"] 		= "קובץ ה-GEDCOM, <b>#GEDCOM#</b>, לא נימצא במקום שצוין";

$pgv_lang["confirm_delete_file"]	= "אשר שברצונך למחוק קובץ זה.";	
$pgv_lang["confirm_folder_delete"] 	= "אשר שברצונך למחוק תיקיה זו.";	
$pgv_lang["confirm_remove_links"]	= "אשר שברצונך למחוק את כל הקישורים לישות זו.";	

$pgv_lang["PRIV_PUBLIC"]		= "הראה לקהל הרחב";
$pgv_lang["PRIV_USER"]		= "הראה רק למשתמשים מורשים";
$pgv_lang["PRIV_NONE"]		= "הראה רק למנהלנים";
$pgv_lang["PRIV_HIDE"]		= "הסתר אפילו ממנהלנים";
$pgv_lang["manage_gedcoms"]	= "נהל קבצי GEDCOM וערוך פרטיות";
$pgv_lang["keep_media"]		= "שמור קישורי מדיה";
$pgv_lang["current_links"]		= "קישורים";
$pgv_lang["add_more_links"]		= "הוסף קישורים";
$pgv_lang["enter_pid_or_name"]	= "הכנס קוד זיהוי של אדם או שם";
$pgv_lang["set_links"]			= "קשר";
$pgv_lang["add_or_remove_links"]	= "נהל קישורים";
$pgv_lang["keep"]			= "שמור";
$pgv_lang["unlink"]			= "מחק קישור";
$pgv_lang["nav"]			= "נווט";
$pgv_lang["fam_nav"]			= "נווט משפחה";
$pgv_lang["remove"]			= "הסר";
$pgv_lang["keep_link"]		= "שמור קישור ברשימה";
$pgv_lang["remove_link"]		= "הסר קישור מרשימה";
$pgv_lang["open_nav"]		= "פתח נווט משפחה";
$pgv_lang["link_exists"]		= "הקישור כבר קיים";
$pgv_lang["id_not_valid"]		= "קוד הזיהוי של האדם, המשפחה או המקור אינו תקין";
$pgv_lang["add_fam_other_links"]	= "הוסף קישורי משפחה וחיפוש";
$pgv_lang["search_add_links"]	= "חפש אנשים כדי להוסיפם לרשימת הוסף קישורים.";
$pgv_lang["enter_name"]		= "הכנס שם";

$pgv_lang["add_indi_to_link_list"]	= "הקש על שם כדי להוסיף אדם לרשימת הוסף קישורים.";
$pgv_lang["click_choose_head"]	= "הקש על #GLOBALS[tempStringHead]# כדי לבחור אדם כראש משפחה.";
$pgv_lang["click_choose_head_text"]	= "הקש כדי לבחור אדם כראש משפחה.";
$pgv_lang["head"]			= "ראש";
$pgv_lang["id_empty"]			= "כאשר מוסיפים קישור, שדה קוד הזיהוי לא יכול להיות ריק.";
$pgv_lang["link_deleted"]		= "הקישור ל#GLOBALS[remLinkId]# נמחק";
$pgv_lang["link_added"]		= "הקישור ל#GLOBALS[addLinkId]# נוסף";
$pgv_lang["no_update_CHANs"]	= "אל תעדכן רשומות CHAN (שינוי האחרון)";
$pgv_lang["no_CHANs_update"]	= "שום רשומות CHAN (שינוי אחרון) עודכנו";

$pgv_lang["files_in_backup"]		= "קבצים הנכללים בגיבוי זה";
$pgv_lang["created_remotelinks"]	= "טבלת <i>קשרים מרוחקים</i> נוצרה בהצלחה.";
$pgv_lang["created_remotelinks_fail"]	= "לא ניתן ליצור טבלת <i>קשרים מרוחקים</i>.";
$pgv_lang["created_indis"]		= "טבלת <i>אנשים</i> נוצרה בהצלחה.";
$pgv_lang["created_indis_fail"]	= "לא ניתן ליצור טבלת <i>אנשים</i>";
$pgv_lang["created_fams"]		= "טבלת <i>משפחות</i> נוצרה בהצלחה.";
$pgv_lang["created_fams_fail"]	= "לא ניתן ליצור טבלת <i>משפחות</i>";
$pgv_lang["created_sources"]		= "טבלת <i>מקורות</i> נוצרה בהצלחה.";
$pgv_lang["created_sources_fail"]	= "לא ניתן ליצור טבלת <i>מקורות</i>";
$pgv_lang["created_other"]		= "טבלת <i>אחר</i> נוצרה בהצלחה.";
$pgv_lang["created_other_fail"]	= "לא ניתן ליצור טבלת <i>אחר</i>";
$pgv_lang["created_places"]		= "טבלת <i>מקומות</i> נוצרה בהצלחה.";
$pgv_lang["created_places_fail"]	= "לא ניתן ליצור טבלת <i>מקומות</i>";
$pgv_lang["created_placelinks"] 	= "טבלת <i>קישור מקומות</i> נוצרה בהצלחה.";
$pgv_lang["created_placelinks_fail"]	= "לא ניתן ליצור טבלת <i>קישור מקומות</i>.";
$pgv_lang["created_media_fail"]	= "לא ניתן ליצור את טבלת ה<i>מדיה</i>.";
$pgv_lang["created_media_mapping_fail"]  = "לא ניתן ליצור את טבלת ה <i>מיפוי של המדיה</i>.";
$pgv_lang["no_thumb_dir"]		= " תיקיית התמונות המזעריות לא קיימת ולא ניתן ליצור אותה עבורך";
$pgv_lang["folder_created"]		= "תיקייה נוצרה";
$pgv_lang["folder_no_create"]	= "לא ניתן ליצור תיקייה";
$pgv_lang["security_no_create"]	= "התרעת ביטחון: לא ניתן ליצור <b><i>index.php</i></b> בתוך ";
$pgv_lang["security_not_exist"] 	= "התרעת ביטחון: קובץ <b><i>index.php</i></b> לא קיים בתוך ";
$pgv_lang["label_delete"]           	= "מחק";
$pgv_lang["progress_bars_info"]	= "סרגל הסטאטוס שלמטה מאפשר לך לדעת את התקדמות הייבוא. אם תחום הזמן נגמר הייבוא נעצר ותתבקש ללחוץ על כפתור <b>המשך</b>. אם אינך רואה כפתור <b>המשך</b>, חזור אחורה התחל מחדש את היבוא והכנס תחום זמן קטן יותר.";
$pgv_lang["upload_replacement"]	="העלה החלפה";
$pgv_lang["about_user"]		= "עליך ליצור קודם כל משתמש מנהלתי ראשי. למשתמש זה יהיו זכויות לעדכן קבצי תצורה, לראות נתונים אישיים וליצור משתמשים אחרים.";
$pgv_lang["access"]			= "גישה";
$pgv_lang["add_gedcom"]		= "הוסף GEDCOM";
$pgv_lang["add_new_gedcom"]	= "בנה GEDCOM חדש";
$pgv_lang["add_new_language"]	= "הוסף קבצים והגדרות לשפה חדשה";
$pgv_lang["add_user"]		= "הוסף משתמש חדש";
$pgv_lang["admin_gedcom"]		= "ניהול GEDCOM";
$pgv_lang["admin_gedcoms"]		= "הקש כאן כדי לנהל GEDCOM-ים.";
$pgv_lang["admin_geds"]		= "ניהול מידע ו-GEDCOM-ים";
$pgv_lang["admin_info"]		= "אינפורמטיבי";
$pgv_lang["admin_site"]		= "ניהול האתר";
$pgv_lang["admin_user_warnings"]	= "לאחד או יותר משתמשים יש התראות";
$pgv_lang["admin_verification_waiting"] 	= "על המנהלן לאשר קוד/י משתמש.";
$pgv_lang["administration"]		= "ניהול";
$pgv_lang["ALLOW_CHANGE_GEDCOM"]	= "הרשה מעבר בין GEDCOM-ים";
//$pgv_lang["ALLOW_REMEMBER_ME"]	= "הראה את האופציה <b>זכור אותי</b> על דף ההתחברות";
$pgv_lang["ALLOW_USER_THEMES"]	= "אפשר למשתמשים לבחור עיצוב";
$pgv_lang["ansi_encoding_detected"]	= "הקובץ במבנה PhpGedView .ANSI עובד הכי טוב עם קבצים במבנה UTF-8.";
$pgv_lang["ansi_to_utf8"]		= "הסב קובץ GEDCOM זה מ-ANSI ל-UTF-8?";
$pgv_lang["apply_privacy"]		= "הפעל הגדרות פרטיות?";
$pgv_lang["back_useradmin"]		= "חזור לניהול משתמשים";
$pgv_lang["bytes_read"]		= "בתים שנקראו:";
$pgv_lang["can_admin"]		= "המשתמש יכול לנהל";
$pgv_lang["can_edit"]			= "רמת גישה";
$pgv_lang["change_id"]		= "שנה קוד זיהוי אישי ל:";
$pgv_lang["choose_priv"]		= "בחר רמת פרטיות:";
$pgv_lang["cleanup_places"]		= "נקה מקומות";
$pgv_lang["cleanup_users"]		= "ניקוי משתמשים";
$pgv_lang["click_here_to_continue"]	= "הקש כאן כדי להמשיך.";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "הקשה כאן מביאה לאילן יוחסין";
$pgv_lang["comment"]			= "הערות מנהלן על משתמש";
$pgv_lang["comment_exp"]		= "התראה למנהלן בתאריך";
$pgv_lang["config_help"]		= "עזרת תצורה";
$pgv_lang["config_still_writable"]	= "ניתן עדיין לכתוב על קובץ <i>config.php</i> שלך. אם סיימת לעצב את האתר שלך, רצוי שתשנה את ההרשאות של קובץ זה בחזרה לקריאה בלבד מטעמי ביטחון";
$pgv_lang["configuration"]		= "תצורה";
$pgv_lang["configure"]			= "עצב PhpGedView";
$pgv_lang["configure_head"]		= "PhpGedView-תצורת ה";
$pgv_lang["confirm_gedcom_delete"]= "GEDCOM האם ברצונך באמת לבטל";
$pgv_lang["confirm_user_delete"]	= "אשר שברצונך למחוק משתמש";
$pgv_lang["create_user"]		= "בנה משתמש";
$pgv_lang["current_users"]		= "רשימת משתמשים";
$pgv_lang["daily"]			= "יומי";
$pgv_lang["dataset_exists"]		= "קובץ GEDCOM בשם זה הועבר כבר למאגר הנתונים.";
$pgv_lang["unsync_warning"] 		= "קובץ ה-GEDCOM <em>אינו</em> מסונכרן עם מסד הנתונים.  יתכן שהוא אינו כולל את הוורסיה האחרונה של הנתונים שלך.  כדי לייבא מחדש ממסד הנתונים ולא מהקובץ, עליך לייצא ולהעלות מחדש.";
$pgv_lang["date_registered"]		= "תאריך הרשמה";
$pgv_lang["day_before_month"]	= "יום לפני חודש (DD MM YYYY)";
$pgv_lang["DEFAULT_GEDCOM"]	= "ברירת מחדל";
$pgv_lang["default_user"]		= "בנה מנהלן ברירת מחדל.";
$pgv_lang["del_gedrights"]		= "ה-GEDCOM כבר אינו פעיל, הסר קישורי משתמשים.";
$pgv_lang["del_proceed"]		= "המשך";
$pgv_lang["del_unvera"]		= "המשתמש לא אושר ע\"י המנהלן.";
$pgv_lang["del_unveru"]		= "המשתמש לא אישר עצמו תוך 7 ימים.";
$pgv_lang["do_not_change"]		= "אין לשנות";
$pgv_lang["download_gedcom"]	= "הורד GEDCOM";
$pgv_lang["download_here"]		= "לחץ כאן כדי להוריד את הקובץ.";
$pgv_lang["download_note"]		= "הערה: יתכן שזמן העיבוד לפני הורדת מאגרי מידע גדולים לוקח זמן רב.  אם משך הזמן של PHP להורדה אינו מספיק, יתכן והקובץ שהורד אינו שלם.  <br /><br />כדי לוודא שהוא הורד בצורה נכונה, בדוק שהשורה האחרונה של קובץ במבנה GEDCOM היא <b>0&nbsp;TRLR</b> או שהשורה האחרונה של הקובץ במבנה XML היא <b>&lt;/database&gt;</b>.  הקבצים הללו הם טכסט; תוכל להשתמש בעורך טכסט (text editor), מתאים, אבל תודא ש<u>לא</u> תשמור את הקובץ שהורדת אחרי שבדקת אותו.<br /><br />בד\"כ ההורדה אורכת משך זמן דומה למשך ייבוא קובץ ה-GEDCOM המקורי שלך.";
$pgv_lang["editaccount"]		= "הרשאה למשתמש זה לערוך את נתוני המשתמש שלו";
$pgv_lang["empty_dataset"]		= "האם ברצונך לרוקן את מסד הנתונים ולהחליף אותו בנתונים החדשים הללו?";
$pgv_lang["empty_lines_detected"]	= "שורות ריקות התגלו בקובץ ה-GEDCOM שלך. הניקיון ימחק את השורות הריקות הללו.";
$pgv_lang["enable_disable_lang"]	= "הגדר את השפות הנתמכות";
$pgv_lang["error_ban_server"]       	= "כתובת IP שגויה.";
$pgv_lang["error_delete_person"]    	= "עליך לבחור את האדם שאת הקשר המרוחק שלו ברצונך לבטל.";
$pgv_lang["error_header_write"]	= "לא ניתן לכתוב על קובץ ה-GEDCOM, <b>#GEDCOM#</b>. בדוק תכונות והרשאות גישה.";
$pgv_lang["error_remove_site"]	= "לא ניתן להסיר את השרת המרוחק.";
$pgv_lang["error_remove_site_linked"] = "לא ניתן להסיר את השרת המרוחק משום שרשימת הקישורים שלו אינה ריקה.";
$pgv_lang["error_remote_duplicate"] 	= "השרת המרוחק מופיע כבר ברשימה כ-<i>#GLOBALS[whichFile]#</i>";
$pgv_lang["error_siteauth_failed"]	= "האימות לאתר מרוחק נכשל";
$pgv_lang["error_url_blank"]		= "נא לא להשאיר ריק את הכותרת או ה-URL של האתר המרוחק";
$pgv_lang["error_view_info"]        	= "עליך לבחור את האדם שאת נתוניו ברצונך לראות.";
$pgv_lang["example_date"]		= "דוגמא לתאריך שאינו בר-תוקף ב-GEDCOM שלך:";
$pgv_lang["example_place"]		= "דוגמא למקומות שגויים מה-GEDCOM שלך:";
$pgv_lang["fbsql"]			= "FrontBase";
$pgv_lang["found_record"]		= "רשומה נמצאה";
$pgv_lang["ged_download"]		= "הורד";
$pgv_lang["ged_import"] 		= "ייבא";
$pgv_lang["ged_export"] 		= "ייצוא";
$pgv_lang["ged_check"] 		= "בדוק";
$pgv_lang["gedcom_adm_head"]	= "ניהול ה-GEDCOM";
$pgv_lang["gedcom_config_write_error"]	= "ש ג י א ה !!!<br />לא ניתן לכתוב לקובץ <i>#GLOBALS[whichFile]#</i>. נא בדוק שיש הרשאת כתיבה.";
$pgv_lang["gedcom_downloadable"] 	= "את קובץ ה-GEDCOM הזה ניתן להוריד דרך האינטרנט!<br />ראה את פרק ה-SECURITY של קובץ ה-<a href=\"readme.txt\"><b>readme.txt</b></a> כדי לפתור את הבעיה";
$pgv_lang["gedcom_file"]		= "קובץ GEDCOM:";
$pgv_lang["gedcom_not_imported"]	= "ה-GEDCOM הזה טרם יובא.";
$pgv_lang["ibase"]			= "InterBase";
$pgv_lang["ifx"]			= "Informix";
$pgv_lang["img_admin_settings"]	= "ערוך תצורה של פעולה על תמונות";
$pgv_lang["autoContinue"]		= "לחץ על כפתור «המשך» להמשכה בצורה אוטומטית";
$pgv_lang["import_complete"]		= "הייבוא הסתיים";
$pgv_lang["import_options"]		= "אופציות ייבוא";
$pgv_lang["import_progress"]		= "התקדמות הייבוא...";
$pgv_lang["import_statistics"]		= "סטטיסטיקות ייבוא";
$pgv_lang["import_time_exceeded"]	= "עברת את גבול זמן העיבוד. לחץ על כפתור המשך למטה כדי לחדש את הייבוא של קובץ ה-GEDCOM.";
$pgv_lang["inc_languages"]		= " שפות";
$pgv_lang["INDEX_DIRECTORY"]	= "תיקיית קובץ אינדקסים";
$pgv_lang["invalid_dates"]		= "התגלו מבני תאריך לא חוקיים, הניקיון ישנה אותם למבנה DD MMM YYYY (כלומר 01 JAN 2004).";
$pgv_lang["BOM_detected"] 		= "Byte Order Mark (BOM) התגלה בתחילת הקובץ. הקוד המיוחד הזה יוסר כחלק מהניקוי.";
$pgv_lang["invalid_header"]		= "התגלו שורות לפני כותרת ה-GEDCOM <b>0&nbsp;HEAD</b>. הניקיון ימחק את השורות הללו.";
$pgv_lang["label_added_servers"]	= "שרתים מרוחקים";
$pgv_lang["label_banned_servers"]   	= "אסור אתרים לפי IP";
$pgv_lang["label_families"]         	= "משפחות";
$pgv_lang["label_gedcom_id2"]       	= "זיהוי מאגר נתונים:";
$pgv_lang["label_individuals"]      	= "אנשים";
$pgv_lang["label_manual_search_engines"] = "סמן ידנית מנועי חיפוש לפי IP";
$pgv_lang["label_new_server"]       	= "הוסף אתר";
$pgv_lang["label_password_id"]	= "סיסמא";
$pgv_lang["label_username_id"]	= "קוד משתמש";
$pgv_lang["label_server_info"]      	= "כל האנשים והמשפחות הקשורים מרחוק דרך האתר: ";
$pgv_lang["label_server_url"]       	= "URL/IP של האתר";
$pgv_lang["label_view_local"]       	= "ראה מידע מקומי על האדם";
$pgv_lang["label_view_remote"]      	= "ראה מידע מרוחק על האדם";
$pgv_lang["LANG_SELECTION"] 	= "שפות נתמכות";
$pgv_lang["LANGUAGE_DEFAULT"]	= "לא עיצבת את השפות של האתר שלך.<br />PhpGedView ישתמש בפעולות ברירת המחדל.";
$pgv_lang["last_login"]		= "התחברות אחרונה ב-";
$pgv_lang["lasttab"]			= "החוצץ האחרון של האדם שהייה בשימוש";
$pgv_lang["leave_blank"]		= "השאר את תיבת הסיסמא ריקה, אם ברצונך לשמור על הסיסמא הקיימת.";
$pgv_lang["link_manage_servers"]    	= "נהל אתרים";
$pgv_lang["logfile_content"]		= "תוכן קובץ יומן";
$pgv_lang["macfile_detected"]	= "התגלה שהקובץ הוא קובץ מקינטוש. הניקוי ייסב את הקובץ למבנה DOS.";
$pgv_lang["mailto"]			= "קישור דואר אלקטרוני";
$pgv_lang["merge_records"]                = "מזג רשומות";
$pgv_lang["message_to_all"]		= "שלח הודעה לכל המשתמשים";
$pgv_lang["messaging"]		= "הודעות פנימיות של PhpGedView";
$pgv_lang["messaging2"]		= "הודעות פנימיות עם דואר אלקטרוני";
$pgv_lang["messaging3"] 		= "PhpGedView שולח דואר אלקטרוני ללא אחסון";
$pgv_lang["month_before_day"]	= "חודש לפני יום (MM DD YYYY)";
$pgv_lang["monthly"]			= "חדשי";
$pgv_lang["msql"]			= "Mini SQL";
$pgv_lang["mssql"]			= "Microsoft SQL server";
$pgv_lang["mysql"]			= "MySQL";
$pgv_lang["never"]			= "אף פעם לא";
$pgv_lang["no_logs"]			= "נטרל בנית יומנים";
$pgv_lang["no_messaging"]		= "אין שיטת קשר";
$pgv_lang["oci8"]			= "Oracle 7+";
$pgv_lang["page_views"]		= "&nbsp;&nbsp;תצפיות דף ב";
$pgv_lang["performing_validation"]	= "ביצוע בדיקת GEDCOM, בחר באפשרויות הדרושות ולחץ על <b>ניקיון</b>.";
$pgv_lang["pgsql"]			= "PostgreSQL";
$pgv_lang["pgv_config_write_error"]	= "שגיאה בכתיבת קובץ התצורה של PhpGedView. בדוק את ההרשאות של הקובץ והתיקייה ונסה שנית.";
$pgv_lang["PGV_MEMORY_LIMIT"] 	= "גודל הזיכרון המוקצה ל-PHP";
//$pgv_lang["pgv_registry"]		= "התבונן באתרים אחרים המשתמשים ב-PhpGedView";
$pgv_lang["PGV_SESSION_SAVE_PATH"]= "נתיב לשמירת נתונים";
$pgv_lang["PGV_SESSION_TIME"]	= "פסק-זמן מהתחברות עד לניתוק אוטומטי";
$pgv_lang["PGV_SIMPLE_MAIL"] 	= "השתמש בכותרות פשוטות של דואר עבור דואר חיצוני";
$pgv_lang["PGV_SMTP_ACTIVE"] 	= "השתמש ב-SMTP למשלוח מיילים חיצוניים";
$pgv_lang["PGV_SMTP_HOST"] 	= "השם של שרת הדואר היוצא - Outgoing mail server - SMTP";
$pgv_lang["PGV_SMTP_HELO"] 	= "שם הדומיין שולח";
$pgv_lang["PGV_SMTP_PORT"] 	= "SMTP Port";
$pgv_lang["PGV_SMTP_AUTH"] 	= "השתמש בשם וסיסמא";
$pgv_lang["PGV_SMTP_AUTH_USER"]	= "שם משתמש";
$pgv_lang["PGV_SMTP_AUTH_PASS"]	= "סיסמא";
$pgv_lang["PGV_SMTP_SSL"] 	= "חיבור מאובטח";
$pgv_lang["PGV_SMTP_FROM_NAME"]	= "שם השולח";
$pgv_lang["PGV_STORE_MESSAGES"]  = "הרשה שמירת הודעות מקוונת";
$pgv_lang["phpinfo"]			= "נתוני PHP";
$pgv_lang["place_cleanup_detected"]= "התגלו מקומות במבנה שגוי. יש לתקן את השגיאות.";
$pgv_lang["please_be_patient"]	= "סבלנות בבקשה";
$pgv_lang["privileges"]		= "זכויות";
$pgv_lang["reading_file"]		= "קובץ GEDCOM בקריאה";
$pgv_lang["readme_documentation"]	= "תיעוד (Readme)";
$pgv_lang["remove_ip"] 		= "הסר IP";
$pgv_lang["REQUIRE_ADMIN_AUTH_REGISTRATION"]	= "דרוש מהמנהלן לאשר רישום של משתמשים חדשים";
$pgv_lang["review_readme"]		= "עיין תחילה בקובץ <a href=\"readme.txt\" target=\"_blank\">readme.txt</a> לפני שאתה ממשיך להגדיר את PhpGedView.<br /><br />";
$pgv_lang["seconds"]			= "&nbsp;&nbsp;שניות";
$pgv_lang["select_an_option"]	= "בחר באפשרות:";
$pgv_lang["SERVER_URL"]		= "URL של PhpGedView";
$pgv_lang["show_phpinfo"]		= "הראה דף מידע על PHP";
$pgv_lang["siteadmin"]		= "מנהלן אתר";
$pgv_lang["sqlite"]			= "SQLite";
$pgv_lang["sybase"]			= "Sybase";
$pgv_lang["sync_gedcom"]		= "סנכרן הגדרות משתמש עם נתוני GEDCOM";
$pgv_lang["system_time"]		= "הזמן הנוכחי של השרת:";
$pgv_lang["user_time"]		= "הזמן הנוכחי של המשתמש :";
$pgv_lang["TBLPREFIX"]		= "קידומת שמות קבצי מסד הנתונים";
$pgv_lang["themecustomization"]	= "התאמה אישית של העיצוב";
$pgv_lang["time_limit"]		= "הגבלת הזמן:";
$pgv_lang["title_manage_servers"]   	= "נהל אתרים";
$pgv_lang["title_view_conns"]       	= "ראה קישורים";
$pgv_lang["translator_tools"]		= "כלים של מתרגם";
$pgv_lang["update_myaccount"]	= "עדכן המשתמש שלי";
$pgv_lang["update_user"]		= "עדכן נתוני המשתמש";
$pgv_lang["upload_gedcom"]		= "העלה GEDCOM";
$pgv_lang["USE_REGISTRATION_MODULE"]	= "אפשר למשתמשים לבקש רישום באתר";
$pgv_lang["user_auto_accept"]	= "קבל בצורה אוטומטית את השינויים שמשתמש זה עושה";
$pgv_lang["user_contact_method"] 	= "שיטת התקשורת המועדפת";
$pgv_lang["user_create_error"]	= "לא ניתן להוסיף משתמש. נשא שנית .";
$pgv_lang["user_created"]		= "בנית המשתמש הצליחה.";
$pgv_lang["user_default_tab"]		= "חוצץ ברירת המחדל של דף מידע אישי";
$pgv_lang["user_path_length"]	= "האורך המכסימלי של שביל קישור הפרטיות";
$pgv_lang["user_relationship_priv"]	= "הגבלת כניסה רק לקרובי משפחה";
$pgv_lang["users_admin"]		= "מנהלני האתר";
$pgv_lang["users_gedadmin"]		= "מנהלי GEDCOM";
$pgv_lang["users_total"]		= "סה\"כ משתמשים";
$pgv_lang["users_unver"]		= "לא אומת ע\"י משתמש";
$pgv_lang["users_unver_admin"]	= "לא אומת ע\"י מנהלן";
$pgv_lang["usr_deleted"]		= "משתמש מחוק: ";
$pgv_lang["usr_idle"]			= "מספר החודשים מאז ההתחברות האחרונה כדי להתייחס למשתמש כלא פעיל: ";
$pgv_lang["usr_idle_toolong"]		= "המשתמש לא פעיל זמן רב מידי: ";
$pgv_lang["usr_no_cleanup"]		= "לא נמצא כלום לנקות";
$pgv_lang["usr_unset_gedcomid"]	= "הורד קוד זיהוי GEDCOM עבור ";
$pgv_lang["usr_unset_rights"]		= "הורד הרשאות GEDCOM עבור ";
$pgv_lang["usr_unset_rootid"]		= "הורד קוד זיהוי מוצא עבור ";
$pgv_lang["valid_gedcom"]		= "ה-GEDCOM התגלה כתקין. אין צורך בניקיון.";
$pgv_lang["validate_gedcom"]	= "בדוק GEDCOM";
$pgv_lang["verified"]			= "המשתמש אישר את רישומו";
$pgv_lang["verified_by_admin"]	= "המשתמש אושר ע\"י המנהלן";
$pgv_lang["verify_gedcom"]		= "אמת את ה-GEDCOM המעודכן";
$pgv_lang["verify_upload_instructions"]	= "נימצא קובץ GEDCOM בעל שם זהה. אם תבחר להמשיך, קובץ ה-GEDCOM הישן יוחלף בקובץ שהעלית ותהליך היבוא יתחיל שוב. אם תבחר לבטל, קובץ ה-GEDCOM הישן יישאר כפי שהיה.";
$pgv_lang["view_changelog"]		= "התבונן בקובץ השינויים changelog.txt";
$pgv_lang["view_logs"]		= "התבונן בקבצי היומן";
$pgv_lang["view_readme"]		= "התבונן בקובץ תיעוד readme.txt";
$pgv_lang["visibleonline"]		= "גלוי למשתמשים אחרים בהיותו מחובר";
$pgv_lang["visitor"]			= "אורח";
$pgv_lang["warn_users"]		= "משתמשים עם התראות";
$pgv_lang["weekly"]			= "שבועי";
$pgv_lang["welcome_new"]		= "ברוך הבא לאתר האינטרנט החדש PhpGedView שלך.";
$pgv_lang["yearly"]			= "שנתי";
$pgv_lang["admin_OK_subject"]	= "אישור משתמש על #SERVER_NAME#";
$pgv_lang["admin_OK_message"]	= "המנהלן של אתר PhpGedView #SERVER_NAME# אישר את הבקשה שלך לקוד משתמש. תוכל עכשיו להשתמש באתר ע\"י הקישור הבא: \r\n\r\n<a href=\"#SERVER_NAME#\">#SERVER_NAME#</a>\r\n";

$pgv_lang["batch_update"]		= "בצע עדכונים/עריכה באצוה (batch) על קובץ ה-GEDCOM שלך";

// Text for the Gedcom Checker
$pgv_lang["gedcheck"]    	= "בדיקת Gedcom"; 	     // Module title
$pgv_lang["gedcheck_text"]	= "המודול הזה בודק את המבנה של קובץ GEDCOM מול המפרט <a href=\"http://phpgedview.sourceforge.net/ged551-5.pdf\">5.5.1 GEDCOM</a>. הוא בודק גם מספר שגיאות כלליות בנתוניך.  שים לב שקיימות ורסיות, הארכות ווריאציות רבות למפרטים כך שיש צורך לחשוש רק בסוגיות המסומנות כ\"קריטיות\"  את ההסבר לכל השגיאות שורה אחרי שורה תמצא במפרט, כך שבבקשה לעיין שם לפני בקשת עזרה.";
$pgv_lang["gedcheck_sync"]	= "עדכונים שנעשו למאגר הנתונים אינם מסונכרנים לקובץ #GLOBALS[ged]#.  יתכן שתוכן הקובץ אינו עדכני.  תוכל לסנכרן אותו עכשיו עם מאגר הנתונים ע\"י ביצוע  <b><a \"#GLOBALS[ged_link]#\">יצוא</a></b>.";
$pgv_lang["gedcheck_nothing"] = "לא נימצאו שגיאות ברמה זו.";
$pgv_lang["level"]        		= "רמה";
$pgv_lang["critical"]     		= "קריטי";
$pgv_lang["error"]        	= "שגיאה";
$pgv_lang["warning"]      	= "התראה";
$pgv_lang["info"]         		= "מידע";
$pgv_lang["open_link"]    	= "פתח קישורים ב-";  			// Where to open links
$pgv_lang["same_win"]     	= "אותו חוצץ/חלון";
$pgv_lang["new_win"]      	= "חוצץ/חלון חדש";
$pgv_lang["context_lines"]      = "שורות של תוכן GEDCOM"; 	// Number of lines either side of error
$pgv_lang["all_rec"]      	= "כל הרשומות";    // What to show
$pgv_lang["err_rec"]      	= "רשומות עם שגיאות";
$pgv_lang["missing"]      	= "חסר";
$pgv_lang["multiple"]     	= "כפול";
$pgv_lang["invalid"]      	= "לא תקין -";
$pgv_lang["too_many"]     	= "יותר מדי";
$pgv_lang["too_few"]      	= "פחות מדי";
$pgv_lang["no_link"]      	= "אינו מקשר בחזרה";
$pgv_lang["data"]                     = "נתונים";
$pgv_lang["see"]          	= "ראה";
$pgv_lang["noref"]        	= "אין התייחסות לרשומה זו";
$pgv_lang["tag"]          		= "תג";
$pgv_lang["spacing"]      	= "רווחים";
$pgv_lang["ADVANCED_NAME_FACTS"] 	= "עובדות מתקדמות של שם";
$pgv_lang["ADVANCED_PLAC_FACTS"] 	= "עובדות מתקדמות של שם מקום";
$pgv_lang["SURNAME_TRADITION"]	= "מסורת שם משפחה"; // Default surname inheritance
$pgv_lang["tradition_spanish"]		= "ספרדי";
$pgv_lang["tradition_portuguese"]	= "פורטוגזי";
$pgv_lang["tradition_icelandic"]	= "איסלנדי";
$pgv_lang["tradition_paternal"]	= "לפי אב";
$pgv_lang["tradition_polish"]		= "פולני";
$pgv_lang["tradition_none"]		= "אין";

// -- The following text is used to build the phrase "i years, j months, k days, l hours, m minutes"
// -- for use in text such as "xxx ago" or "after xxx" or "in xxx"
$pgv_lang["elapsedYear1"]	=	"שנה 1";
$pgv_lang["elapsedYear2"]	=	"#pgv_lang[global_num1]# שנים";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedYears"]	=	"#pgv_lang[global_num1]# שנים";
$pgv_lang["elapsedMonth1"]	=	"חודש 1";
$pgv_lang["elapsedMonth2"]	=	"#pgv_lang[global_num1]# חודשים";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMonths"]	=	"#pgv_lang[global_num1]# חודשים";
$pgv_lang["elapsedDay1"]	=	"יום 1";
$pgv_lang["elapsedDay2"]	=	"#pgv_lang[global_num1]# ימים";		// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedDays"]	=	"#pgv_lang[global_num1]# ימים";
$pgv_lang["elapsedHour1"]	=	"שעה 1";
$pgv_lang["elapsedHour2"]	=	"#pgv_lang[global_num1]# שעות";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedHours"]	=	"#pgv_lang[global_num1]# שעות";
$pgv_lang["elapsedMinute1"]	=	"דקה 1";
$pgv_lang["elapsedMinute2"]	=	"#pgv_lang[global_num1]# דקות";	// used in Polish for 2,3,4 or 22,23,24 or 32,33,34 etc.
$pgv_lang["elapsedMinutes"]	=	"#pgv_lang[global_num1]# דקות";

$pgv_lang["elapsedAgo"]	=	"לפני #pgv_lang[global_string1]#";
?>
