<?php
/**
 * Lightbox Album module for phpGedView
 *
 * Display media Items using Lightbox
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
 * @subpackage Module
 * @version $Id: lang.he.php 6616 2009-12-24 16:32:30Z meliza $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
// Added in VERSION 4.2.2
$pgv_lang["TYPE__notinDB"]		= "לא במאגר הנתונים"; 
$pgv_lang["ROW_TYPE__notinDB"]	= $pgv_lang["TYPE__notinDB"];

// Added in VERSION 4.1.6
$pgv_lang["lb_toAdminConfigPage"]	= "חזור לדף ניהול";
$pgv_lang["lb_manage"]		= "ניהול הגדרות Lightbox";
$pgv_lang["lb_generalhelp"]     	= "דף אישי - עזרה כללית של Lightbox";
$pgv_lang["lb_viewedit"]		= "ראה/ערוך";
$pgv_lang["lb_viewnotes"]		= "ראה הערות";
$pgv_lang["lb_viewdetails"]		= "ראה פירוט";
$pgv_lang["lb_viewsource"]		= "ראה מקור";
$pgv_lang["lb_editmedia"]		= "ערוך מדיה";
$pgv_lang["lb_unlinkmedia"]		= "התר קישור מדיה";
$pgv_lang["lb_balloon_true"]		= "בלון";
$pgv_lang["lb_balloon_false"]		= "רגיל";
$pgv_lang["lb_tt_balloon"]		= "דף אישי - חוצץ אלבום תמונה ממוזערת - Tooltip של הערות";
$pgv_lang["lb_ttAppearance"]		= "הערות - הופעת Tooltip";
$pgv_lang["view_lightbox"]		= "ראה אלבום של ...";
$pgv_lang["lb_notes"]			= "הערות";
$pgv_lang["lb_notes_info"]		= "";


// Added in VERSION 4.1.4 
$pgv_lang["lb_details"]		= "פירוטים";
$pgv_lang["lb_detail_info"]		= " ראה את פירוטי ישות מדיה זו ... ואופציות מדיה נוספות - דף מציג מדיה";
$pgv_lang["lb_pause_ss"]		= "הפסק מצגת שקפים";
$pgv_lang["lb_start_ss"]		= "התחל מצגת שקפים";
$pgv_lang["lb_music"]			= "הפעל/כבה מוסיקה";
$pgv_lang["lb_zoom_off"]		= "מנע זום";
$pgv_lang["lb_zoom_on"]		= "זום אופשר ... השתמש בגלגל של העכבר או במקשי ן ו-ם כדי להפעיל הגדלה או הקטנה של זום";
$pgv_lang["lb_close_win"]		= "סגור חלון מדיה - תיבת אור";

// VERSION 4.1.3 

//Config Parameters -------------------------------------
$pgv_lang["configure_lightbox"]	= "ערוך אלבום תיבת אור - Lightbox";
$pgv_lang["mediatab"]       		= "דף אישי - חציץ מדיה";
$pgv_lang["lb_appearance"]		= "צורה";
$pgv_lang["lb_linkAppearance"]	= "קישר";
$pgv_lang["lb_MP3Only"]		= "(רק mp3)";
$pgv_lang["lb_admin_error"]         	= "דף רק עבור מנהלנים";
$pgv_lang["lb_toAlbumPage"]		= "חזור לדף האלבום";

$pgv_lang["lb_icon"]			= "צלמית";
$pgv_lang["lb_text"]			= "טכסט";
$pgv_lang["lb_both"]			= "שניהם";
$pgv_lang["lb_none"]			= "אף אחד";

$pgv_lang["lb_al_head_links"]		= "דף אישי - חציץ כותרת של האלבום";
$pgv_lang["lb_al_thumb_links"]	= "דף אישי - חציץ תמונות ממוזערות של האלבום";
$pgv_lang["lb_ml_thumb_links"]	= "דף מולטימדיה - תמונות ממוזערות";
$pgv_lang["lb_music_file"]		= "פס קול של מצגת שקופיות";
$pgv_lang["lb_musicFileAdvice"]	= "מיקום קובץ פס קול (השאר ריק עבור שום פס קול)";
$pgv_lang["lb_ss_speed"]		= "מהירות מצגת שקופיות";
$pgv_lang["lb_ss_SpeedAdvice"]	= "משך תזמון מצגת שקפים בשניות";

$pgv_lang["lb_transition"]		= "מהירות המעבר מתמונה לתמונה";
$pgv_lang["lb_normal"]		= "רגיל";
$pgv_lang["lb_double"]		= "כפול";
$pgv_lang["lb_warp"]			= "גרירה";
$pgv_lang["lb_url_dimensions"]	= "מימדי חלון URL";
$pgv_lang["lb_url_dimensionsAdvice"]= "רוחב וגובה של חלון URL בפיקסלים";
$pgv_lang["lb_width"]			= "רוחב";
$pgv_lang["lb_height"]			= "גובה";

// ---------------------------------------------------------------------

$pgv_lang["lb_help"] 			= "עזרת אלבום";
$pgv_lang["lightbox"] 			= "אלבום";
$pgv_lang["showmenu"] 		= "הראה תפריט:";
$pgv_lang["TYPE__other"] 		= "אחר";
$pgv_lang["TYPE__footnotes"] 	= "הערות שוליים";

$pgv_lang["ROW_TYPE__photo"] 		= $pgv_lang["TYPE__photo"];
$pgv_lang["ROW_TYPE__document"] 	= $pgv_lang["TYPE__document"];
$pgv_lang["ROW_TYPE__census"] 		= $factarray["CENS"];
$pgv_lang["ROW_TYPE__other"] 		= $pgv_lang["TYPE__other"];
$pgv_lang["ROW_TYPE__footnotes"]	= $pgv_lang["TYPE__footnotes"];

$pgv_lang["census_text"]  		= "\"תמונות המפקד האלו התקבלו מ\"הארכיון הלאומי\", השומר על הרשומות המקוריות, ";
$pgv_lang["census_text"] 		.= "והן מופיעות כאן כולל אישור שלהן בתנאי שלא יעשה בהן שום שימוש מסחרי ללא אישור ." . "\n" ;
$pgv_lang["census_text"] 		.= "בקשות לפרסום מסחרי של תמונות מפקד אלו או תמונות מפקד אחרות שמופיעות באתר זה יש לשלוח אל: ";
$pgv_lang["census_text"] 		.= "Image Library, The National Archives, Kew, Surrey, TW9 4DU, United Kingdom.\"" . "\n" ;

$pgv_lang["lb_edit_details"] 		= "ערוך פרטים";
$pgv_lang["lb_view_details"] 		= "ראה פרטים";
$pgv_lang["lb_edit_media"] 		= "ערוך את הפרטים של פריט המדיה הזה";
$pgv_lang["lb_delete_media"] 	= "הסר פריט מדיה זה - מוריד רק את הקישור לאדם זה - אינו מוחק את קובץ המדיה או קישורים אחרים";
$pgv_lang["lb_view_media"] 		= "ראה פירוט של פריט מדיה זה. \nואופציות מדיה נוספות - דף התבוננות מדיה";
$pgv_lang["lb_add_media"] 		= "הוסף ישות מדיה";
$pgv_lang["lb_add_media_full"] 	= "הוסף ישות מולטימדיה חדשה לאדם זה";
$pgv_lang["lb_link_media"] 		= "קשר לישות מדיה קיימת";
$pgv_lang["lb_link_media_full"] 	= "קשר אדם זה לישות מדיה קיימת";

$pgv_lang["lb_slide_show"] 		= "מצגת שקופיות";
$pgv_lang["turn_edit_ON"] 		= "הפעל צורת עריכה";
$pgv_lang["turn_edit_OFF"] 		= "הפסק צורת עריכה";

$pgv_lang["lb_source_avail"] 		= "קיימים נתוני מקור - לחץ כאן.";

$pgv_lang["lb_private"] 		= "התמונה קשורה<br />לאדם פרטי";
$pgv_lang["lb_view_source_tip"] 	= "הראה מקור: ";
$pgv_lang["lb_view_details_tip"] 	= "הראה פרטי מדיה: ";

?>
