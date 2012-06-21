<?php
/**
 * phpGedView Research Assistant Tool - Form Loader Engine.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  John Finlay and Others
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
 * @subpackage Research_Assistant
 * @version $Id: lang.he.php 5068 2009-02-18 16:00:06Z meliza $
 * @translator Meliza Amity
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["autosearch_ssurname"] 	= "כלול שם משפחה של בן/בת זוג:";
$pgv_lang["autosearch_sgivennames"] = "כלול שמות פרטיים של בן/בת זוג:";
$pgv_lang["autosearch_sfullname"] 	= "כלול שם בן/בת זוג:";
$pgv_lang["autosearch_plugin_name_gensearchhelp"] = "חיבור Genealogy-Search-Help.com";

$pgv_lang["add_task_inst"]		= "אם משימה לתוצאות המחקר שלך עדיין לא נוצרה, עלך ליצור קודם כל את המשימה ואח\"כ לבחור את האופציה של שמירת וסיום המשימה.";
$pgv_lang["complete_task_inst"]	= "בחר משימה מרשימת המשימות שלך שלמטה כדי לסים את המשימה ולהכניס את תוצאותיך:";
$pgv_lang["enter_results"]		= "מלא את התוצאות";
$pgv_lang["auto_gen_inst"]		= "תוכניות אחדות מאפשרות למלא משימות מחקר כישויות TODO בקובץ ה-GEDCOM שלך. האופציה הזו סורקת את קובץ ה-GEDCOM שלך ומסבה בצורה אוטומטית ישויות TODO למשימות מחקר.";
$pgv_lang["choose_search_site"]	= "בחר אתר חיפוש";
$pgv_lang["pid_search_for"]		= "את מי אתה רוצה לחפש?";
$pgv_lang["manage_research_inst"]	= "הישויות הללו תעזורנה לך בניהול משימות המחקר שלך. משימות מחקר יעזרו לך לעקוב אחרי המחקר שלך ובשיתוף הפעולה עם חוקרים אחרים.";
$pgv_lang["manage_research"]	= "נהל מחקר";
$pgv_lang["manage_sources"]	= "נהל מקורות";
$pgv_lang["part_of"]			= "חלק מ- (אופציונאלי)";
$pgv_lang["search_fhl"]		= "חפש את הקטלוג של Family History Library";
$pgv_lang["determine_sources"]	= "קבע מקורות אפשריים";
$pgv_lang["analyze_database"]	= "נתח את מאגר הנתונים";
$pgv_lang["pid_know_more"]		= "על מי אתה רוצה ללמוד יותר?";
$pgv_lang["analyze_people"]		= "נתח אנשים";
$pgv_lang["analyze_data"]		= "נתח את הנתונים שלי";
$pgv_lang["missing_info"] 		= "חסר מידע";
$pgv_lang["auto_search"]		= "המאפיין הזה מחפש בצורה אוטומטית ב-Ancestry וב-FamilySearch. ניתן לחפש לפי שם ולפי תאריך לידה/פטירה<br />";
$pgv_lang["auto_search_text"]	= "חיפוש אוטומטי";
$pgv_lang["task_list"]			= "משימות";
$pgv_lang["task_list_text"]		= "האזור מציג משימות שיצרת, לחץ על 'התבונן' כדי לראות משימות";

// -- MENU ITEM MESSAGES
$pgv_lang["my_tasks"]		= "עוזר מחקר";
$pgv_lang["add_task"]			= "הוסף משימה";
$pgv_lang["view_folders"]		= "התבונן בתיקיות"; ///////
$pgv_lang["view_probabilities"]	= "התבונן בהסתברויות";
$pgv_lang["up_folder"]		= "עלה תיקיה";
$pgv_lang["edit_folder"]		= "הוסף/עדכן תיקיה";
$pgv_lang["gen_tasks"]		= "צור משימות אוטומטית";

// -- RA GENERAL MESSAGES
$pgv_lang["edit_task"]			= "ערוך משימה";
$pgv_lang["completed"]		= "סיום";
$pgv_lang["complete"]			= "סיים";
$pgv_lang["incomplete"]		= "חלקי";
$pgv_lang["created"]			= "נוצר";
$pgv_lang["details"]			= "פירוט";
$pgv_lang["result"]                     	= "תוצאה";
$pgv_lang["okay"]                               	= "OK";
$pgv_lang["editform"]			= "ערוך את נתוני הטופס";
$pgv_lang["FilterBy"]			= "סנן לפי";
$pgv_lang["Recalculate"]		= "חשב מחדש";
$pgv_lang["LocalData"]		= "נתונים מקומיים";
$pgv_lang["RelatedRecord"]		= "רשומה קשורה";
$pgv_lang["RelatedData"]		= "נתונים קשורים";
$pgv_lang["Percent"]			= "אחוז";
$pgv_lang["Fields"]			= "מספר השדות";
$pgv_lang["FieldName"]		= "שם השדה";
$pgv_lang["InputType"]		= "סוג הקלט";
$pgv_lang["Values"]			= "ערכים";
$pgv_lang["FormBuilder"]		= "בונה טופס";
$pgv_lang["FormName"]		= "הכנס את שם הטופס";
$pgv_lang["MultiplePeople"]		= "האם הטופס משמש מספר אנשים?";
$pgv_lang["EnterGEDCOMExtension"]	= "נא הכנס את סיומת ה-GEDCOM לסוג העובדה של הטופס";
$pgv_lang["FormDesciption"]		= "נא הכנס תאור לטופס";
$pgv_lang["FormGeneration"]		= "יצירת הטופס הסתיימה!";
$pgv_lang["CustomField"]		= "שם שדה פרטי";
$pgv_lang["txt"]			= "טכסט";
$pgv_lang["checkbox"]		= "תיבת בחירה";
$pgv_lang["radiobutton"]		= "כפתור רדיו";
$pgv_lang["EnterResults"]		= "הכנס תוצאות";
$pgv_lang["ra_submit"]		= "הגש";
$pgv_lang["ra_generate_tasks"]	= "צור משימות מ-TODO";
$pgv_lang["TaskDescription"]		= "תאור משימה";
$pgv_lang["SelectFolder"]                    = "בחר תיקיה:";
$pgv_lang["ra_done"]			= "עשוי";
$pgv_lang["ra_generate"]		= "צור";
$pgv_lang["LocalPercent"]		= "אחוז מקומי";
$pgv_lang["GlobalPercent"]		= "אחוז גלובלי";
$pgv_lang["Average"]			= "ממוצע";
$pgv_lang["NoData"]			= "אין נתונים!";
$pgv_lang["NotEnoughData"]		= "אין מספיק נתונים!";
$pgv_lang["InferIndvBirthPlac"]	= "יש %PERCENT% סיכוי שמקום הלידה הוא:";
$pgv_lang["InferIndvDeathPlac"]	= "יש %PERCENT% סיכוי שמקום הפטירה הוא:";
$pgv_lang["InferIndvSurn"]		= "יש %PERCENT% סיכוי ששם המשפחה הוא:";
$pgv_lang["InferIndvMarriagePlace"]	= "יש %PERCENT% סיכוי שמקום הנישואין הוא:";
$pgv_lang["InferIndvGivn"]		= "יש %PERCENT% סיכוי שהשם הפרטי הוא:";
$pgv_lang["All"]			= "של כולם";
$pgv_lang["More"]			= " עוד";
$pgv_lang["ThereIsChance"]		= "מקורות אפשריים יכולים לכלול:";
$pgv_lang["TheMostLikely"]		= "המקום הסביר ביותר למקור זה הוא:";

// -- RA EXPLANATION
$pgv_lang["DataCorrelations"]		= "התאמת נתונים";
$pgv_lang["ViewProbExplanation"]	= "דף זה מנתח את נתוני קובץ ה-GEDCOM הפעיל ומראה את היחס בין הנתונים השונים. לדוגמא, תתכן קורלציה של 95% ששם משפחה ברשומה זהה לשם משפחה ברשומה של האב. משמעות הדבר של95% של האנשים בקובץ ה-GEDCOM הזה יש את אותו שם משפחה כמו לאביהם. בגרסה הזו של עוזר המחקר, החישובים הללו אינם משמשים בחלקים אחרים של התוכנה ומחשבים אותם רק כדי לעזור לך במחקרך. בעתיד אנחנו מתכננים להשתמש בנתונים האלו כדי להציע לך היכן כדאי להתרכז במחקרך העתידי.";

// -- RA_FOLDER MESSAGES
$pgv_lang["Folder"]                             	= "תיקיה:";
$pgv_lang["Edit_Gen_Task"]               	= "ערוך משימה שנוצרה";
$pgv_lang["Start_Date"]                 	= "תאריך התחלה";
$pgv_lang["Task_Name"]                	= "שם משימה";
$pgv_lang["Folder_Name"]                	= "שם תיקיה";
$pgv_lang["Folder_View"]                	= "מבט תיקיות"; /////
$pgv_lang["Task_View"]                  	= "מבט משימות";
$pgv_lang["page_header"]		= "תיקיות עוזר מחקר";
$pgv_lang["no_folder_name"]             	= "יש למלא את שם התיקיה.";
$pgv_lang["add_folder"]                 	= "הוסף תיקיה";
$pgv_lang["folder_name"]                	= "שם תיקיה:";
$pgv_lang["Parent_Folder:"]             	= "תיקית הורה:";
$pgv_lang["No_Parent"]                  	= "אין הורה";
$pgv_lang["Folder_Description:"]        	= "תאור התיקיה:";
$pgv_lang["Folder_names_must_be_unique"] = "שם תיקיה יכול להופיע רק פעם אחת.";
$pgv_lang["folder_submitted"]          	= "התיקיה שלך נמסרה";
$pgv_lang["folder_problem"]             	= "התגלתה תקלה בהוספת התיקיה שלך, נסה שנית";

// -- Missing Information Help 
$pgv_lang["ra_missing_info_help"] 	= "האזור מציג מידע חסר על הרשומה. בחר תיבת סימון ותיקיה ולחץ <b>הוסף משימה</b> עבור הנתון החסר. המשימות שכבר נוצרו תוצגנה עם <b>התבונן</b> במקום עם תיבת סימון <br />";

// -- RA_LISTLOGS MESSAGES
$pgv_lang["task_entry"]		= "צור משימה חדשה.";

//-- ERROR MESSAGES
$pgv_lang["no_folder"]		= "שום תיקיה אינה קיימת עדיין. צור תיקיה חדשה תחילה.";

//-- HELP MESSAGES
$pgv_lang["ra_fold_name_help"]	= "~מבט תיקיות~<ul><li><b>שם תיקיה:</b> העמוד הזה כולל את השמות של כל התיקיות שיצרת.</li><li><b>תאור:</b> העמוד הזה כולל את התיאור של התיקיות.</li></ul>";
$pgv_lang["ra_add_task_help"]	= "~הוסף משימה~<ul><li><b>כותרת:</b> כאן תמלא את הכותרת של המשימה שאותה אתה מוסיף.</li><li><b>תיקיה:</b> בשדה זה ניתן להקצות את התיקיה שבה יש לשים את המשימה החדשה.</li><li><b>תאור:</b> הכנס את תאור המשימה שאותה אתה מוסיף.</li><li><b>מקורות:</b>  הקצה מקורות למשימה.</li><li><b>אנשים:</b> הקצה אנשים הקשורים למשימה החדשה.</li></ul>";
$pgv_lang["ra_edit_folder_help"]	= "~ערוך תיקיה~<ul><li><b>שם התיקיה:</b> כאן תמלא את הכותרת של המשימה שאותה אתה עורך.</li><li><b>תיקית הורה:</b> תוכל להקצות תיקית הורה לתיקיה שאתה עורך.</li><li><b>תאור התיקיה:</b> תאור המשימה שאותה אתה עורך.</li></ul>";
$pgv_lang["ra_add_folder_help"]	= "~הוסף תיקיה~<ul><li><b>שם תיקיה:</b> כאן תמלא את הכותרת של התיקיה שאותה אתה מוסיף.</li><li><b>תיקית הורה:</b> תוכל להקצות תיקית הורה לתיקיה שאתה מוסיף.</li><li><b>תאור התיקיה:</b> כאן תרשום את תאור התיקיה שאתה מוסיף.</li></ul>";
$pgv_lang["ra_view_task_help"]	= "~מבט משימות~<ul><li><b>שם משימה:</b> העמודה כוללת את השמות של המשימות שלך.</li><li><b>תאריך התחלה:</b> כאן רשומים תאריכי ההתחלה של המשימות.</li><li><b>סיום:</b> כאן תראה אם המשימה הסתיימה.</li><li><b>ערוך:</b> מעביר אותך לעריכת המשימה</li><li><b>מחק:</b> מחיקת המשימה.</li>><li><b>סיים:</b> מעביר אותך מידית לבחירת טופס ועריכת משימה</li></ul>";
$pgv_lang["ra_task_view_help"]	= "~התבונן במשימה~<ul><li><b>כותרת:</b> כאן תמלא את הכותרת של המשימה שאותה אתה מוסיף.</li><li><b>אנשים:</b> הקצה אנשים הקשורים למשימה החדשה.</li><li><b>תאור:</b> הכנס את תאור המשימה שאותה אתה מוסיף.</li><li><b>מקורות:</b> הקצה מקורות למשימה.</li><li>לחץ על כפתור <b>ערוך משימה</b> כדי לערוך את הפרטים של המשימה.</li></ul>";
$pgv_lang["ra_comments_help"]	= "~הערות~<ul><li>כאן תוסיף הערות הקשורות למשימה. לחץ על כפתור <b>הוסף הערה חדשה</b> כדי להוסיף הערות.</li></ul>";
$pgv_lang["ra_GenerateTasks_help"]		= "~צור משימות~<p> הטופס הזה יוצר משימות מתגי <span dir=\"ltr\">_TODO</span> בקובץ ה-GEDCOM שלך.</p><ul><li><b>צור:</b> סמן כל משימה שברצונך ליצור כאשר תלחץ על הכפתור צור.</li><li><b>שם המשימה:</b> השם שהמשימה תקבל.  ברירת המחדל היא הטכסט בתג <span dir=\"ltr\">_TODO</span>, ללא תגי CONT</li><li><b>תאור המשימה:</b> התיאור שהמשימה תקבל.  התיאור נוצר מהטכסט בתג <span dir=\"ltr\">_TODO</span> ביחד עם תגי CONT הקשורים.</li><li><b>ערוך:</b> לחץ על הקישור כדי לערוך את המשימה.</li><li><b>בחר תיקיה:</b> בחר תיקיה עבור המשימות הנוצרות.</li><li><b>צור:</b> יוצר את המשימות שסומנו.</li><li><b>סיום:</b> מעביר אותך לדף התבונן בתיקיות.</li></ul>";
$pgv_lang["ra_EditGenerateTasks_help"] 	= "~ערוך משימה שנוצרה~<p>הטופס מאפשר עריכת משימה שנוצרה מתגי <span dir=\"ltr\">_TODO</span> בקובץ ה-GEDCOM שלך.</p><ul><li><b>שם המשימה:</b> השם שניתן למשימה.  </li><li><b>תאור המשימה:</b> התיאור שניתן למשימה. </li><li><b>אנשים:</b> לחץ על הקישור כדי לבחור את האדם הקשור למשימה.</li><li><b>מקור:</b> לחץ על הקישור כדי לבחור מקור הקשור למשימה.</li><li><b>שמור:</b> שומר את כל השינויים ומעביר לדף יצירת משימות.</li><li><b>בטל:</b> מבטל את כל השינויים ומעביר לדף יצירת משימות.</li></ul>";
$pgv_lang["ra_configure_privacy_help"]	= "~עצב פרטיות:~<ul><li><b>#pgv_lang[PRIV_PUBLIC]#:</b> גורם לכך שמשימות ספציפיות תהיינה זמינות לכולם.</li><li><b>#pgv_lang[PRIV_USER]#:</b> גורם לכך שמשימות ספציפיות תהיינה זמינות למשתמשים מאושרים בלבד.</li><li><b>#pgv_lang[PRIV_NONE]#:</b> גורם לכך שמשימות ספציפיות תהיינה זמינות למשתמשים מנהלנים בלבד.</li><li><b>#pgv_lang[PRIV_HIDE]#:</b> גורם לכך שמשימות ספציפיות לא תהיינה זמינות לאף אחד.</li></ul>";
$pgv_lang["ra_edit_task_help"]		= "~ערוך משימה~<ul><li><b>כותרת:</b> כאן תמלא את הכותרת של המשימה שאותה אתה עורך.</li><li><b>תיקיה:</b> בשדה זה ניתן להקצות את התיקיה שבה יש לשים את המשימה החדשה.</li><li><b>תאור:</b> הכנס תאור למשימה שאותה אתה עורך.</li><li><b>מקורות:</b> הקצה או ערוך מקורות למשימה.</li><li><b>אנשים:</b> הקצה או ערוך אנשים הקשורים למשימה.</li></ul>";

//-- RA_VIEWTASK MESSAGES
$pgv_lang["view_task"]		= "התבונן במשימה";
$pgv_lang["add_new_comment"]	= "הוסף הערה חדשה";
$pgv_lang["no_indi_tasks"]		= "אין משימות השייכות לאדם זה.";
$pgv_lang["no_sour_tasks"]		= "אין משימות הקשורות למקור זה.";
$pgv_lang["edit_comment"]		= "ערוך הערה";
$pgv_lang["comment_success"]	= "הערתך הוספה בהצלחה.";
$pgv_lang["comment_body"]		= 'הערה';

//-- RA_COMMENT MESSAGES
$pgv_lang["comment_delete_check"]	= "האם באמת תרצה למחוק את ההערה?";

//-- RA_ADDTASK MESSAGES
$pgv_lang["add_new_task"]		= "הוסף משימה";
$pgv_lang["submit"]			= "שמור";
$pgv_lang["save_and_complete"]       	= "שמור וסיים";
$pgv_lang["assign_task"]		= "הקצה משימה";
$pgv_lang["AddTask"]			= "הוסף משימה";

//-- RA_CONFIGURE PRIVACY MESSAGES
$pgv_lang["configure_privacy"]	= "עצב פרטיות";
$pgv_lang["show_my_tasks"]              	= "הראה את המשימות שלי";
$pgv_lang["show_add_task"]		= "הראה הוסף משימה";
$pgv_lang["show_auto_gen_task"]      = "הראה צור משימות אוטומטית";
$pgv_lang["show_view_folders"]	= "הראה התבונן בתיקיות ";
$pgv_lang["show_add_folder"]	= "הראה הוסף תיקיה";
$pgv_lang["show_add_unlinked_source"]   = "הראה מבט הוסף מקור לא קשור";
$pgv_lang["show_view_probabilities"]	= "הערה התבונן בהסתברויות";

//-- Census Forms
$pgv_lang["rows"]                       	= "מספר שורות";
$pgv_lang["state"]                      	= "מדינה";
$pgv_lang["call/url"]                   	= "מספר סידורי/URL";
$pgv_lang["enumDate"]                   	= "תאריך מספור";
$pgv_lang["county"]                     	= "מחוז";
$pgv_lang["city"]                       		= "עיר";
$pgv_lang["complete_title"]		= "סיים משימה";
$pgv_lang["select_form"]		= "בחר טופס";
$pgv_lang["choose_form_label"]	= "בחר טופס מחקר משותף ";
$pgv_lang["book"]                 		= "ספר";
$pgv_lang["folio"]                   		= "פוליו";
$pgv_lang["uk_county"]		= "מחוז";
$pgv_lang["uk_boro"]			= "עיר";
$pgv_lang["uk_place"]			= "מקום";

$pgv_lang["AssIndiFacts"]		= "קשר עובדות אישיות";
$pgv_lang["AssFamFacts"]		= "קשר עובדות משפחתיות";
$pgv_lang["ra_facts"]			= "עובדות";
$pgv_lang["ra_fact"]			= "עובדה";
$pgv_lang["ra_remove"]		= "הורד";
$pgv_lang["ra_inferred_facts"]	= "עובדות שהוסקו";
$pgv_lang["ra_person"]		= "אנשים";
$pgv_lang["ra_reason"]		= "סיבה";
$pgv_lang["success"]			= "הצלחה!";

$pgv_lang["registration_no"]		= "מספר רישום";
$pgv_lang["serial_no"]			= "מספר סידורי";
$pgv_lang["ra_no"]			= "מספר";
$pgv_lang["order_no"]			= "מספר הזמנה";

//-- MY TASK BLOCK 
$pgv_lang["mytasks_block_descr"]	= "אזור ה#pgv_lang[my_tasks]# מראה משימות של המשתמש הנוכחי. ניתן לעצב אותו כך שניתן לראות משימות שהסתיימו או משימות שטרם  הוקצו.";
$pgv_lang["mytasks_block"]		= "עוזר מחקר";
$pgv_lang["mytasks_edit"]               	= "ערוך";
$pgv_lang["mytasks_unassigned"]	= "לא מיוחסים";
$pgv_lang["mytasks_takeOn"]		= "תפוס";
$pgv_lang["mytasks_help"]		= "~#pgv_lang[my_tasks]#~<br /><br />#pgv_lang[mytasks_block_descr]#";
$pgv_lang["mytask_show_tasks"]   	= "האם להציג משימות שאינן מיוחסות?";
$pgv_lang["mytask_show_completed"]	= "האם להציג משימות שהסתיימו?";

//-- Auto Search Assistant 
$pgv_lang["autosearch_surname"]	= "כלול שם משפחה:";
$pgv_lang["autosearch_givenname"]	= "כלול שמות פרטיים:";
$pgv_lang["autosearch_byear"]	= "כלול שנת לידה:";
$pgv_lang["autosearch_bloc"]		= "כלול מקום לידה:";
$pgv_lang["autosearch_myear"]	= "כלול שנת נישואין:";
$pgv_lang["autosearch_mloc"]	= "כלול מקום נישואין:";
$pgv_lang["autosearch_dyear"]	= "כלול שנת פטירה:";
$pgv_lang["autosearch_dloc"]		= "כלול מקום פטירה:";
$pgv_lang["autosearch_gender"]         = "כלול מגדר:";
$pgv_lang["autosearch_plugin_name"]     	= "";
$pgv_lang["autosearch_fsurname"]	= "כלול שם משפחה של האב:";
$pgv_lang["autosearch_fgivennames"]	= "כלול שמות פרטיים של האב:";
$pgv_lang["autosearch_ffullname"]	= "כלול שם האב:";
$pgv_lang["autosearch_msurname"]	= "כלול שם משפחה של האם:";
$pgv_lang["autosearch_mgivennames"]	= "כלול שמות פרטיים של האם:";
$pgv_lang["autosearch_mfullname"]	= "כלול שם האם:";
$pgv_lang["autosearch_country"]  	= "כלול ארץ:";
$pgv_lang["autosearch_plugin_name_ancestry"]	= "חיבור Ancestry.com";
$pgv_lang["autosearch_plugin_name_ancestrycouk"]	= "חיבור Ancestry.co.uk";
$pgv_lang["autosearch_plugin_name_ellisisland"] 	= "חיבור EllisIslandRecords.org";
$pgv_lang["autosearch_plugin_name_geneanet"] 	= "חיבור GeneaNet.com";
$pgv_lang["autosearch_plugin_name_genealogy"]  	= "חיבור Genealogy.com";
$pgv_lang["autosearch_plugin_name_familysearch"] 	= "חיבור FamilySearch.org";
$pgv_lang["autosearch_plugin_name_werelate"]   	= "חיבור Werelate.org";
$pgv_lang["autosearch_search"]         	= "חפש";
$pgv_lang["autosearch_keywords"] 	= "מילות מפתח:";

//Folder deletion error messages
$pgv_lang["has_tasks"]                 	="התיקיה מכילה משימות ולא ניתן למחוק אותה";
$pgv_lang["has_folders"]               	="התיקיה מכילה תיקיות ולא ניתן למחוק אותה";
?>
