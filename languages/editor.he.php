<?php
/**
 * Hebrew texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team
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
 * @version $Id: editor.he.php 6547 2009-12-11 21:42:35Z meliza $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]		= "הוסף פירטי נישואין";
$pgv_lang["edit_concurrency_change"] = "הרשומה הזו שונתה לאחרונה ע\"י <i>#CHANGEUSER#</i> ב-#CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "הרשומה עם קוד זיהוי #PID# שונתה ע\"י משתמש אחר לאחר שניגשת אליה בפעם האחרונה .";
$pgv_lang["edit_concurrency_msg1"]	= "הייתה שגיאה בזמן יצירת טופס העריכה.  יתכן שהרשומה שונתה ע\"י משתמש אחר אחרי שהסתכלת עליה בפעם הקודמת.";
$pgv_lang["edit_concurrency_reload"] = "העלה מחדש את הדף שהיית בו קודם כדי להבטיח שאתה עובד על רשומה עדכנית ביותר.";
$pgv_lang["admin_override"]		= " אופציית מנהלן";
$pgv_lang["no_update_CHAN"]	= "אין לעדכן רשומת שינוי אחרון CHAN";
$pgv_lang["select_events"]		= "בחר מאורעות";
$pgv_lang["source_events"]		= "קשר מאורעות למקור זה";
$pgv_lang["advanced_name_fields"]	= "שמות נוספים (שם כינוי, שם נישואין, וכו')";
$pgv_lang["accept_changes"]		= "קבל/דחה את השינויים";
$pgv_lang["replace"]			= "החלפת רשומה";
$pgv_lang["append"]			= "הוספת רשומה בסוף";
$pgv_lang["review_changes"]		= "סקור שינויי GEDCOM";
$pgv_lang["remove_object"]		= "הסר ישות מדיה";
$pgv_lang["remove_links"]		= "הסר קישור";
$pgv_lang["media_not_deleted"]	= "תיקיית המדיה לא הוסרה.";
$pgv_lang["thumbs_not_deleted"]	= "תיקיית התמונות המזעריות לא הוסרה.";
$pgv_lang["thumbs_deleted"]		= "תיקיית התמונות המזעריות הוסרה בהצלחה.";
$pgv_lang["show_thumbnail"]		= "הראה תמונות מזעריות";
$pgv_lang["link_media"]		= "קשר מדיה";
$pgv_lang["to_person"]		= "לאדם";
$pgv_lang["to_family"]			= "למשפחה";
$pgv_lang["to_source"]		= "למקור";
$pgv_lang["to_note"]			= "להערה משותפת";
$pgv_lang["to_repository"]		= "למאגר";
$pgv_lang["edit_fam"]			= "ערוך משפחה";
$pgv_lang["edit_repo"]		= "ערוך מאגר";
$pgv_lang["copy"]			= "העתק";
$pgv_lang["cut"]			= "חתוך";
$pgv_lang["sort_by_birth"]		= "מיין לפי תאריכי לידה";
$pgv_lang["reorder_children"]		= "סדר מחדש את הילדים";
$pgv_lang["reorder_media"]		= "סדר מחדש מדיה";
$pgv_lang["reorder_media_title"]	= "גרור ושחרר תמונות ממוזערות כדי לשנות את הסדר של המדיה";
$pgv_lang["reorder_media_window"]	= "סדר מחדש מדיה (חלון)";
$pgv_lang["reorder_media_window_title"] = "הקלק על שורה, אח\"כ \"גרור ושחרר\" כדי לשנות את הסדר של המדיה ";
$pgv_lang["reorder_media_save"]	= "שומר את מיון המדיה למאגר הנתונים";
$pgv_lang["reorder_media_reset"]	= "החזר את הסדר המקורי";
$pgv_lang["reorder_media_cancel"]	= "עזוב וחזור";
$pgv_lang["add_from_clipboard"]	= "הוסף מלוח הגזירים";
$pgv_lang["record_copied"]		= "הרשומה הועתקה ללוח הגזירים";
$pgv_lang["add_unlinked_person"]	= "הוסף אדם לא קשור";
$pgv_lang["add_unlinked_source"]	= "הוסף מקור לא קשור";
$pgv_lang["add_unlinked_note"]	= "הוסף הערה לא קשורה";
$pgv_lang["add_unlinked"]		= "רשומות לא קשורות";
$pgv_lang["server_file"]		= "שם הקובץ בשרת";
$pgv_lang["server_file_advice"]	= "אין לשנות אם ברצונך לשמור על שם הקובץ המקורי.";
$pgv_lang["server_file_advice2"]	= "ניתן להכניס URL שמתחיל ב-<span dir=\"ltr\">&laquo;http://&raquo;</span>.";
$pgv_lang["server_folder_advice"]	= "ניתן להכניס עד ל-#GLOBALS[MEDIA_DIRECTORY_LEVELS]# שמות של תיקיות לאחר ברירת המחדל &laquo;<span dir=\"ltr\">#GLOBALS[MEDIA_DIRECTORY]#</span>&raquo;.<br />אין להכניס את החלק &laquo;<span dir=\"ltr\">#GLOBALS[MEDIA_DIRECTORY]#</span>&raquo; של שם התיקייה בשרת.";
$pgv_lang["server_folder_advice2"]	= "מתעלמים מכניסה זו אם הוכנס URL בשדה שם הקובץ.";
$pgv_lang["add_linkid_advice"]	= "הכנס או חפש את קוד הזיהוי של האדם, המשפחה או המקור שאליו יש לקשר את המדיה הזו.";
$pgv_lang["use_browse_advice"]	= "השתמש בכפתור ה-&laquo;Browse&raquo; כדי לחפש את הקובץ הרצוי במחשב המקומי שלך.";
$pgv_lang["add_media_other_folder"]	= "תיקייה אחרת... נא הקלד";
$pgv_lang["add_media_file"]		= "קובץ מדיה קיים על השרת";
$pgv_lang["main_media_ok1"]	= "השם של קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> שונה בהצלחה ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]	= "קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> הועבר בהצלחה מ-<span dir=\"ltr\"><b>#GLOBALS[oldMediaFolder]#</b></span> אל <span dir=\"ltr\"><b>#GLOBALS[newMediaFolder]#</b></span>.";
$pgv_lang["main_media_ok3"]	= "קובץ המדיה הראשי הועבר ושמו שונה מ-<b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newMediaFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]	= "קובץ המדיה <b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span>#GLOBALS[oldMediaName]#</b> אינו קיים.";
$pgv_lang["main_media_fail1"]	= "לא ניתן לשנות את שמו של קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]	= "לא ניתן להעביר את קובץ המדיה הראשי <b>#GLOBALS[oldMediaName]#</b> מ-<b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span></b> ל-<b><span dir=\"ltr\">#GLOBALS[newMediaFolder]#</span></b>.";
$pgv_lang["main_media_fail3"]	= "לא ניתן להעביר את קובץ המדיה הראשי ולשנות את שמו  מ-<b><span dir=\"ltr\">#GLOBALS[oldMediaFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newMediaFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]		= "הערה: יש לאפשר מאפיין 'השתמש בהגבלת הפרטיות של (GEDCOM (RESN' כדי שהערך הזה יופעל.";
$pgv_lang["thumb_media_ok1"]	= "השם של קובץ המדיה המזערי <b>#GLOBALS[oldMediaName]#</b> שונה בהצלחה ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]	= "קובץ המדיה המזערי <b>#GLOBALS[oldMediaName]#</b> הועבר בהצלחה מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span></b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span></b>.";
$pgv_lang["thumb_media_ok3"]	= "קובץ המדיה המזערי הועבר ושמו שונה מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]	= "הקובץ המזערי <b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span>#GLOBALS[oldMediaName]#</b> אינו קיים.";
$pgv_lang["thumb_media_fail1"]	= "שם קובץ המדיה המזערי לא ניתן לשינוי מ-<b>#GLOBALS[oldMediaName]#</b> ל-<b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]	= "לא ניתן להעביר את קובץ המדיה המזערי <b>#GLOBALS[oldMediaName]#</b> מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span></b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span></b>.";
$pgv_lang["thumb_media_fail3"]	= "לא ניתן לשנות את שמו של קובץ המדיה המזערי מ-<b><span dir=\"ltr\">#GLOBALS[oldThumbFolder]#</span>#GLOBALS[oldMediaName]#</b> ל-<b><span dir=\"ltr\">#GLOBALS[newThumbFolder]#</span>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]		= "הוסף שותף חדש";
$pgv_lang["edit_sex"]			= "ערוך מגדר";
$pgv_lang["add_obje"]		= "הוסף ישות מולטימדיה חדשה";
$pgv_lang["add_name"]		= "הוסף שם";
$pgv_lang["edit_raw"]			= "ערוך את רשומת ה-GEDCOM הלא מעובדת";
$pgv_lang["label_add_remote_link"]  	= "הוסף קשר";
$pgv_lang["label_gedcom_id"]        	= "קוד של מסד הנתונים";
$pgv_lang["label_local_id"]         	= "קוד זיהוי אישי";
$pgv_lang["accept"]			= "אשר";
$pgv_lang["accept_all"]		= "אשר את כל השינויים";
$pgv_lang["accept_gedcom"]              = "החלט עבור כל שינוי אם לאשר או לדחות אותו.<br /><br />ניתן לאשר את כל השינויים בבת אחת ע\"י הקשה על <b>\"אשר את כל השינויים\"</b> בתיבה למטה.<br />כדי לקבל מידע נוסף על השינוי,<br />לחץ על <b>\"התבונן בשינויים\"</b> ותראה את המצב הקודם והמצב החדש <br />או לחץ על <b>\"הצג מידע מ-GEDCOM\"</b> כדי לראות את המצב החדש במבנה ה-GEDCOM.";
$pgv_lang["accept_successful"]	= "השינויים עדכנו בהצלחה את מאגר הנתונים";
$pgv_lang["add_child"]		= "הוסף ילד/ה";
$pgv_lang["add_child_to_family"]	= "הוסף ילד/ה למשפחה";
$pgv_lang["add_fact"]			= "הוסף עובדה חדשה";
$pgv_lang["add_father"]		= "הוסף אבא חדש";
$pgv_lang["add_husb"]		= "הוסף בעל";
$pgv_lang["add_opf_child"]		= "הוסף ילד/ה וצור משפחה חד-הורית";
$pgv_lang["add_husb_to_family"]	= "הוסף בעל למשפחה";
$pgv_lang["add_media"]		= "הוסף מדיה חדשה";
$pgv_lang["add_media_lbl"] 		= "הוסף מדיה";
$pgv_lang["add_mother"]		= "הוסף אמא חדשה";
$pgv_lang["add_new_chil"] 		= "הוסף ילד/ה";
$pgv_lang["add_new_husb"]		= "הוסף בעל חדש";
$pgv_lang["add_new_wife"]		= "הוסף אישה חדשה";
$pgv_lang["add_note"]		= "הוסף הערה חדשה";
$pgv_lang["add_note_lbl"] 		= "הוסף הערה";
$pgv_lang["add_shared_note"]	= "הוסף הערה משותפת חדשה";
$pgv_lang["add_shared_note_lbl"]	= "הוסף הערה משותפת";
$pgv_lang["add_sibling"] 		= "הוסף אח או אחות";
$pgv_lang["add_son_daughter"] 	= "הוסף בן או בת";
$pgv_lang["add_source"]		= "הוסף ציטוט של מקור חדש";
$pgv_lang["add_source_lbl"] 		= "הוסף ציטוט של מקור";
$pgv_lang["add_wife"]			= "הוסף אישה";
$pgv_lang["add_wife_to_family"]	= "הוסף אישה למשפחה";
$pgv_lang["advanced_search_discription"] = "חיפוש מתקדם באתר";
$pgv_lang["auto_thumbnail"]		= "קובץ מזערי אוטומטי";
$pgv_lang["basic_search"]		= "חיפוש";
$pgv_lang["basic_search_discription"] = "חיפוש בסיסי באתר";
$pgv_lang["birthdate_search"]		= "תאריך לידה: ";
$pgv_lang["birthplace_search"]	= "מקום לידה: ";
$pgv_lang["change"]			= "שנה";
$pgv_lang["change_family_instr"]	= "השתמש בדף זה כדי לשנות או להסיר בני משפחה.<br /><br />עבור כל בן משפחה, ניתן להשתמש בקישור \"שנה\" כדי לשנות אדם אחר בתפקיד זה בתוך המשפחה. ניתן גם כן להשתמש בקישור \"הסר\" כדי להסיר את האדם מהמשפחה.<br /><br />אחרי שתסיים לשנות בני משפחה, לחץ על כפתור שמור כדי לשמור את השינויים.<br />";
$pgv_lang["change_family_members"] = "שנה בני משפחה";
$pgv_lang["changes_occurred"]	= "השינויים הבאים בוצעו ברשומה זו:";
$pgv_lang["confirm_remove"]		= "האם אתה בטוח שתרצה להסיר אדם זה מהמשפחה?";
$pgv_lang["confirm_remove_object"]	= "האם אתה בטוח שתרצה להסיר את ישות המדיה הזו ממאגר הנתונים?";
$pgv_lang["create_repository"]	= "צור מאגר";
$pgv_lang["shared_note_assisted"]	= "הערה משותפת חדשה בעזרת מסייע";
$pgv_lang["create_shared_note"]	= "צור הערה משותפת חדשה";
$pgv_lang["create_shared_note_assisted"]	= "צור הערה משותפת חדשה בעזרת מסייע";
$pgv_lang["add_new_event_assisted"] = "צור אירוע חדש בעזרת מסייע";
$pgv_lang["create_source"]		= "צור מקור חדש";
$pgv_lang["current_person"]         	= "כמו הנוכחי";
$pgv_lang["date"]			= "תאריך";
$pgv_lang["deathdate_search"]	= "תאריך פטירה: ";
$pgv_lang["deathplace_search"]	= "מקום פטירה: ";
$pgv_lang["delete_dir_success"]	= "תיקיות המדיה והתמונות המזעריות הוסרו בהצלחה.";
$pgv_lang["delete_file"]		= "מחק קובץ";
$pgv_lang["delete_repo"]		= "מחק מאגר";
$pgv_lang["directory_not_empty"]	= "התיקייה אינה ריקה.";
$pgv_lang["directory_not_exist"]	= "התיקייה אינה קיימת.";
$pgv_lang["error_remote"]           	= "בחרת אתר מרוחק.";
$pgv_lang["error_same"]             	= "בחרת את אותו האתר.";
$pgv_lang["external_file"]		= "המדיה לא קיימת כקובץ על השרת. לא ניתן למחוק, להעביר או לשנות אותה.";
$pgv_lang["file_missing"]		= "שום קובץ לא התקבל. הבא שנית.";
$pgv_lang["file_partial"]		= "הקובץ עלה חלקית, נסה שנית.";
$pgv_lang["file_success"]		= "הקובץ הועלה בהצלחה";
$pgv_lang["file_too_big"]		= "קובץ ההעלאה גדול מהמותר";
$pgv_lang["file_no_temp_dir"]           	= "חסרה תיקייה זמנית של PHP";
$pgv_lang["file_cant_write"]            	= "PHP נכשל בכתיבה לדיסק";
$pgv_lang["file_bad_extension"]         	= "PHP חסם קובץ לפי סיומת";
$pgv_lang["file_unkown_err"]            	= "קוד שגיאה #pgv_lang[global_num1]# בטעינת קובץ לא ידוע. נא דווח על כך כשגיאה.";
$pgv_lang["folder"]		 	= "תיקייה על השרת";
$pgv_lang["gedcom_editing_disabled"] = "אפשרות העריכה של ה-GEDCOM נפסלה ע\"י מנהלן המערכת.";
$pgv_lang["gedrec_deleted"]		= "רשומת ה-GEDCOM נמחקה בהצלחה.";
$pgv_lang["gen_thumb"]		= "צור תמונה מזערית";
$pgv_lang["gen_missing_thumbs"]	= "צור תמונות מזעריות חסרות";
$pgv_lang["gen_missing_thumbs_lbl"] = "תמונות מזעריות חסרות";
$pgv_lang["gender_search"]		= "מגדר: ";
$pgv_lang["generate_thumbnail"]	= "צור תמונה מזערית אוטומטית מ-";
$pgv_lang["hebrew_givn"]		= "שמות פרטיים עבריים";
$pgv_lang["hebrew_surn"]		= "שם משפחה עברי";
$pgv_lang["hide_changes"]		= "לחץ כאן כדי להסתיר את השינויים.";
$pgv_lang["highlighted"]		= "תמונה בהדגשה";
$pgv_lang["illegal_chars"]		= "שם ריק או אותיות לא חוקיות בשם";
$pgv_lang["invalid_search_multisite_input"]  = "הכנס אחד מהפרטים הבאים: שם, תאריך לידה, מקום לידה, תאריך פטירה, מקום פטירה ומגדר ";
$pgv_lang["invalid_search_multisite_input_gender"] 	= "אנא חפש שנית עם יותר נתונים, לא רק מגדר";
$pgv_lang["label_diff_server"]      	= "אתר מרוחק חדש";
$pgv_lang["label_location"]         	= "מיקום האתר";
$pgv_lang["label_password_id2"]	= "סיסמא: ";
$pgv_lang["label_rel_to_current"]   	= "קשר לאדם הנוכחי";
$pgv_lang["label_same_server"]      	= "אתר מקומי";
$pgv_lang["label_site"]             	= "אתר";
$pgv_lang["label_site_url"]         	= "URL של האתר:";
$pgv_lang["label_username_id2"]	= "קוד משתמש: ";
$pgv_lang["lbl_server_list"]        	= "אתר מרוחק קיים";
$pgv_lang["lbl_type_server"]        	= "הקלד אתר חדש.";
$pgv_lang["link_as_child"]		= "קשר אדם זה למשפחה קיימת בתור ילד";
$pgv_lang["link_as_husband"]		= "קשר אדם זה למשפחה קיימת בתור בעל";
$pgv_lang["link_success"]		= "קישור התווסף בהצלחה";
$pgv_lang["link_to_existing_media"]	= "קשר לישות מדיה קיימת";
$pgv_lang["max_media_depth"]	= "לא ניתן להכניס יותר מ-#GLOBALS[MEDIA_DIRECTORY_LEVELS]# רמות של שמות תת-ספריות";
$pgv_lang["max_upload_size"]	= "גודל העלאה מכסימלי: ";
$pgv_lang["media_deleted"]		= "תיקיית המדיה הוסרה בהצלחה.";
$pgv_lang["media_exists"]		= "קובץ המדיה כבר קיים.";
$pgv_lang["media_file"]		= "קובץ מדיה שאותו יש להעלות";
$pgv_lang["media_file_deleted"]	= "קובץ מדיה נמחק בהצלחה.";
$pgv_lang["media_file_moved"]	= "קובץ המדיה הועבר.";
$pgv_lang["media_file_not_moved"]	= "לא ניתן להעביר את קובץ המדיה.";
$pgv_lang["media_file_not_renamed"]= "לא ניתן להעביר את או לשנות את השם של קובץ המדיה.";
$pgv_lang["media_thumb_exists"]	= "תמונה מזערית של המדיה כבר קיימת";
$pgv_lang["multiple_gedcoms"]	= "הקובץ מקושר למאגר נתונים של חקר משפחה אחר על השרת.  לא ניתן למחוק, להעביר או לשנות את שמו עד שהקשרים יוסרו.";
$pgv_lang["must_provide"]		= "יש לספק ";
$pgv_lang["name_search"]		= "שם: ";
$pgv_lang["new_repo_created"]	= "מאגר חדש נוצר";
$pgv_lang["new_shared_note_created"]= "הערה משותפת חדשה נוצרה בהצלחה.";
$pgv_lang["shared_note_updated"] 	= "הערה משותפת חדשה עודכנה בהצלחה.";
$pgv_lang["new_source_created"]	= "מקור חדש נוצר בהצלחה.";
$pgv_lang["no_changes"]		= "אין כרגע שינויים לבדיקה.";
$pgv_lang["no_known_servers"]	= "אין שרתים מוכרים<br />לא תמצאנה תוצאות";
$pgv_lang["no_temple"]		= "אין הסמכה חיה של המקדש";
$pgv_lang["no_upload"]		= "העלאת קובצי מדיה אינה מותרת משום שפריטי מולטי-מדיה נפסלו או משום שלא ניתן לכתוב בתיקיית המדיה.";
$pgv_lang["paste_id_into_field"]	= "הדבק את קוד הזיהוי הבא לשדות העריכה כדי שניתן יהיה להתייחס לרשומה החדשה שנוצרה";
$pgv_lang["paste_rid_into_field"]	= "הדבק את זיהוי המאגר הבא לשדות העריכה כדי להתייחס למאגר זה ";
$pgv_lang["privacy_not_granted"]	= "אין לך גישה ל-";
$pgv_lang["privacy_prevented_editing"] = "הגדרות הפרטיות מונעות ממך לערוך את הרשומה.";
$pgv_lang["record_marked_deleted"]	= "הרשומה הזאת סומנה למחיקה לאחר אישור המנהלן.";
$pgv_lang["replace_with"]		= "החלף ב-";
$pgv_lang["show_changes"]		= "הרשומה עודכנה. הקש כדי לראות את השינויים.";
$pgv_lang["thumb_genned"]		= "תמונה מזערית #thumbnail# נוצרה אוטומטית.";
$pgv_lang["thumbgen_error"]		= "לא ניתן ליצור בצורה אוטומטית תמונה מזערית #thumbnail#.";
$pgv_lang["thumbnail"]		= "תמונה ממוזערת שאותה יש להעלות";
$pgv_lang["title_remote_link"]      	= "הוסף קישור מרוחק";
$pgv_lang["undo"]			= "בטל";
$pgv_lang["undo_all"]			= "בטל את כל השינויים";
$pgv_lang["undo_all_confirm"]	= "האם אתה בטוח שתרצה לבטל את כל השינויים של ה-GEDCOM הזה?";
$pgv_lang["undo_successful"]	= "הביטול הצליח";
$pgv_lang["update_successful"]	= "העדכון הצליח";
$pgv_lang["upload"]			= "העלה";
$pgv_lang["upload_error"]		= "התגלתה שגיאה בהעלאת הקובץ שלך.";
$pgv_lang["copy_error"]		= "לא ניתן להעתיק את קובץ #GLOBALS[whichFile2]# מ-#GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]		= "העלאת קבצי מדיה";
$pgv_lang["upload_media_help"]	= "~#pgv_lang[upload_media]#~<br /><br />בחר קבצים מהמחשב המקומי שלך להעלאה לשרת שלך. כל הקבצים מועלים לתיקיית <b><span dir=\"ltr\">#MEDIA_DIRECTORY#</span></b> או לאחת מהתיקיות מתחתיה.<br /><br />שמות החוצצים שאתה מציין יתווספו ל-<span dir=\"ltr\">#MEDIA_DIRECTORY#</span>, למשל, #MEDIA_DIRECTORY#myfamily. אם תיקיית התמונות המזעריות אינה קיימת, היא תיווצר בצורה אוטומטית.";
$pgv_lang["upload_successful"]	= "ההעלאה הצליחה.";
$pgv_lang["view_change_diff"]	= "התבונן בשינויים ";

?>
