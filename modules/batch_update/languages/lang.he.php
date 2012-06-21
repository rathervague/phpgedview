<?php
/**
 * Hebrew Language file for PhpGedView.
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
 * @package PhpGedView
 * @subpackage BatchUpdate
 * @translator Meliza Amity
 * @version $Id: lang.he.php 5068 2009-02-18 16:00:06Z meliza $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]		="עדכון אצוה (Batch)";
$pgv_lang["bu_update_chan"]		="עדכן רשומת CHAN";
$pgv_lang["bu_nothing"]		="לא נימצא כלום.";
$pgv_lang["bu__desc"]		="בחר עדכון אצוה מרשימה זו.";
$pgv_lang["bu_button_update"]	="עדכן";
$pgv_lang["bu_button_update_all"]	="עדכן הכל";
$pgv_lang["bu_button_delete"]	="מחק";
$pgv_lang["bu_button_delete_all"]	="מחק הכל";

$pgv_lang["bu_search_replace"]	="חפש והחלף";
$pgv_lang["bu_search_replace_desc"]="חפש ו-/או החלף נתונים בקובץ ה-GEDCOM שלך ע\"י שימוש בחיפוש פשוט או התאמת תבנית מתקדמת .";
$pgv_lang["bu_search"]		="חפש טכסט/תבנית";
$pgv_lang["bu_replace"]		="טכסט החלפה";
$pgv_lang["bu_method"]		="שיטת החיפוש";
$pgv_lang["bu_exact"]			="טכסט מדויק";
$pgv_lang["bu_exact_desc"]		="התאם את הטכסט המדויק גם אם הוא נימצא באמצע מילה.";
$pgv_lang["bu_words"]		="מילים שלמות בלבד";
$pgv_lang["bu_words_desc"]		="התאם את הטכסט המדויק רק אם הוא לא נימצא באמצע מילה";
$pgv_lang["bu_wildcards"]		="ג'וקרים";
$pgv_lang["bu_wildcards_desc"]	="השתמש ב-&laquo;?&raquo; כדי להתאים תו בודד, השתמש ב-&laquo;*&raquo; כדי להתאים אפס או יותר תוים.";
$pgv_lang["bu_regex"]		="ביטויים רגילים";
$pgv_lang["bu_regex_desc"]		="ביטויים רגילים הם טכנית התאמה מתקדמת.  ראה <a href=\"http://php.net/manual/en/regexp.reference.php\" target=\"_new\">php.net/manual/en/regexp.reference.php</a> לפרטים נוספים.";
$pgv_lang["bu_regex_bad"]		="נראה שבביטוי הרגיל יש שגיאה. לא ניתן להשתמש בו.";
$pgv_lang["bu_case"]			="אין רגישות לאותיות הלועזיות הקטנות והגדולות";
$pgv_lang["bu_case_desc"]		="סמן את התיבה כדי להתאים אותיות לועזיות קטנות וגדולות.";

$pgv_lang["bu_birth_y"]		="הוסף רשומות לידה חסרות";
$pgv_lang["bu_birth_y_desc"]		="תוכל לשפר את ביצוע ה-PGV ע\"י כך שתבטיח שלכל האנשים יש ארוע של &laquo;תחילת החיים&raquo;.";

$pgv_lang["bu_death_y"]		="הוסף רשומות פטירה חסרות";
$pgv_lang["bu_death_y_desc"]	="תוכל לשפר את ביצוע ה-PGV ע\"י כך שתבטיח שלכל האנשים יש (אם מתאים) ארוע של &laquo;סוף החיים&raquo;.";

$pgv_lang["bu_married_names"]	="הוסף שמות נישואין חסרים";
$pgv_lang["bu_married_names_desc"]="תוכל להקל על חיפוש של נשים נשואות ע\"י רישום שם הנישואין שלהן.<br/>אך לא כל הנשים משתמשות בשם המשפחה של בעליהן, כך שיש להיזהר לא להוסיף נתונים שגויים לקובץ ה-GEDCOM שלך.";
$pgv_lang["bu_surname_option"]	="אופצית שם משפחה";
$pgv_lang["bu_surname_replace"]	="שם המשפחה של האשה מוחלף בשם המשפחה של הבעל";
$pgv_lang["bu_surname_add"]	="שם הנעורים של האשה הופך לשם פרטי חדש";

$pgv_lang["bu_name_format"]	="תקן לוכסנים ורווחים בשמות";
$pgv_lang["bu_name_format_desc"]	="תקן רשומות NAME שהם במבנה 'John/DOE/' או 'John /DOE', שנוצרות ע\"י תוכניות חקר משפחה ישנות.";

$pgv_lang["bu_duplicate_links"]	="הסר קישורים כפולים";
$pgv_lang["bu_duplicate_links_desc"]="שגיאה כללית  של GEDCOM היא קיום קישורים מרובים לאותה רשומה, למשל רישום אותו ילד יותר מפעם אחד ברשומת משפחה.";
$pgv_lang["bu_tmglatlon"]		="תקן נתוני קו רוחב וקו אורך של TMG";
$pgv_lang["bu_tmglatlon_desc"]	="מסב נתוני קו הרוחב וקו האורך של The Master Genealogist למבנה סטנדרטי של GEDCOM 5.5.1 ש-PGV יכול לקרוא.  הערה: השינויים אינם מודגשים בפלט הסופי המוצג למטה.";

?>
