<?php
/**
 * Hebrew language file for Lightbox Album module
 *
 * Display media Items using Lightbox
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PhpGedView developers
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
 * @version $Id: help_text.he.php 5068 2009-02-18 16:00:06Z meliza $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// Added in VERSION 4.1.6

$pgv_lang["LIGHTBOX_CONFIG"]           	= "הגדרות Lightbox";
$pgv_lang["LIGHTBOX_CONFIG_help"]      	= "~#pgv_lang[LIGHTBOX_CONFIG]#~<br /><br />הגדר כאן את כל ההיבטים של המודול Lightbox.";


// Lightbox general help file  ---------------------------------------------------------------------------------------------------------
$pgv_lang["lb_generalLegend"]		= "עזרה כללית לאלבום-Lightbox";
$pgv_lang["lb_general_help"]		 	= "~#pgv_lang[lb_generalLegend]#~<br /><br /><ul>#pgv_lang[lb_general_help1]##pgv_lang[lb_general_help2]##pgv_lang[lb_general_help3]##pgv_lang[lb_general_help4]##pgv_lang[lb_general_help5]##pgv_lang[lb_general_help6]##pgv_lang[lb_general_help7]##pgv_lang[lb_general_help8]##pgv_lang[lb_general_help9]##pgv_lang[lb_general_help10]#</ul>";
$pgv_lang["lb_general_help1"]		 = "<li>~כדי לראות הערות או פירוט, או מקור קשור לתמונה~<br /><b>תפריט נפתח:</b><br />רחף מעל הקישור <b>#pgv_lang[lb_viewedit]#</b> מתחת לתמונה הממוזערת ויופיע תפריט נפתח. הברירות הן <b>#pgv_lang[lb_viewnotes]#</b> (אם קיימים), <b>#pgv_lang[lb_viewdetails]#</b> וגם <b>#pgv_lang[lb_viewsource]#</b>.<br /><br /><b>צפיה:</b><br />לחיצה על <b>#pgv_lang[lb_viewnotes]#</b> מציגה <b>#pgv_lang[lb_balloon_true]#</b> עם נתוני ההערה בתוכה. לחץ שנית כדי לסגור את ה<b>#pgv_lang[lb_balloon_true]#</b>.<br />לחיצה על <b>#pgv_lang[lb_viewdetails]#</b> מעבירה אותך לדף מבט מדיה (Mediaviewer), ו<b>#pgv_lang[lb_viewsource]#</b> יקח אותך (אם מורשה) אל דף המקור של פריט המדיה.<br /><br /><b>עריכה:</b><br />(קיימות אופציות עריכה נוספות החל מרמת עורכים)<br /><br /><b>תמונת Lightbox פתוחה:</b><br />כאשר מסתכלים על תמונת Lightbox פתוחה, ניתן ללחוץ על צלמיות <b>#pgv_lang[lb_viewnotes]#</b> ו<b>#pgv_lang[lb_viewdetails]#</b> על הגבול מתחת לתמונה.<br /><br /></li>";
$pgv_lang["lb_general_help2"]		 = "<li>~לראות תמונה~<br />לחץ על תמונה ממוזערת כלשהי. כותרת התמונה תופיע בחלק העליון של התמונה המכסה.<br /><br /></li>";
$pgv_lang["lb_general_help3"]		 = "<li>~להשתמש בצורת זום~<br /><b>הערה:</b><br />יש לעצור את מצגת השקפים כדי לראות את צלמיות הזום.<br /><br /><b>אפשר זום:</b><br />כאשר רואים את הצלמית הירוקה של פלוס בתחתית התמונה בצד ימין, הזום כבר פעיל. השתמש בגלגל העכבר למעלה ולמטה כדי לשנות את הגודל. (או השתמש במקשי <b>i</b> ו-<b>o</b>). הצלמית תשתנה למינוס אדום.<br />כאשר התמונה תשונה לגודל גדול מהדף המוצג, גרור ושחרר את התמונה, או השתמש במקשי החצים להזיז את התמונה.<br /><br /><b>מנע זום:</b><br />לחץ פעמיים בתוך התמונה, או לחץ על הצלמית מינוס האדומה בתחתית מימין כדי לצאת מאופן הזום. (או השתמש במקש <b>z</b>)<br /><br /></li>";
$pgv_lang["lb_general_help4"]		 = "<li>~סגירת תמונה~<br />לחץ מחוץ לתמונה, או, לחץ על הצלמית האדומה <b>X</b> בתחתית מימין, או השתמש במקש <b>x</b>.<br /><br /></li>";
$pgv_lang["lb_general_help5"]		 = "<li>~הצגת התמונה הקודמת או הבאה~<br />כאשר תעביר את העכבר מעל התמונה לא בצורת הזום תופיע תווית <b>&gt;</b> בצד שמאל ותווית <b>&lt;</b>  בצד ימין. לחץ על הצד הימני של התמונה כדי לראות את התמונה הבאה. לחץ על הצד השמאלי של התמונה כדי לראות את התמונה הקודמת.<br /><br /></li>";
$pgv_lang["lb_general_help6"]		 = "<li>~לעבור לתמונה אחרת באלבום~<br />כאשר תעביר את העכבר כסנטימטר אחד מעל החלק העליון של התמונה (לא בצורת הזום), תופיע הגלריה. אם צריך, העבר את סמן העכבר שמאלה וימינה כדי להראות חלקים אחרים של גלריית התמונות הממוזערות. לחץ על תמונה ממוזערת כלשהי מהגלריה כדי לקפוץ ישירות לתמונה הקשורה.<br /><br />ניתן לבצע <b>הבא</b>, <b>הקודם</b> ו<b>קפוץ</b> כאשר מצגת השקפים רצה או מופסקת.<br /><br /></li>";
$pgv_lang["lb_general_help7"]		 = "<li>~להריץ מצגת שקפים~<br />לחץ על צלמית התחל בתחתית בצד שמאל. אם קיים קובץ מוסיקה, צלמית הרמקול מופיעה. לחץ על צלמית הרמקול כדי להפעיל ולסגור את הקול. לחץ על צלמית הפסק כדי לעצור את המצגת.<br /><br /></li>";
$pgv_lang["lb_general_help8"]		 = "<li>~נווט ...~<br />השתמש בטבלת <b>#pgv_lang[view_lightbox]#</b> משמאל לטבלת צלמיות של התמונות כדי לבחור ישירות מראה אלבום של אדם אחר.<br /><br /></li>";
$pgv_lang["lb_general_help9"]		 = "<li>~הערות:~<br />תמונות ממוזערות שהן אינן תמונות, לדוגמא קובצי מדיה מסוג PDF, אודיו, ספר, ווידאו, ניתן לראות בצורה פרטנית, אבל הן אינן במצגת השקפים.<br /><br /></li>";
$pgv_lang["lb_general_help10"]		 = "<li>~הערה למנהלנים:~<br />אם קבצים מצורות רגילות של תמונות (jpg, bmp, gif, וכו') אשר מייצגות סוגי תמונות כגון תמונה, תעודה  מסמך וכו' מופיעות בשורת ה<b>אחר</b>, ערך ה<b>#factarray[TYPE]#</b> הוגדר עבור הפריטים הללו.  יתכן ותרצה להגדיר את סוג המדיה של הפריטים הללו כדי להגדיר ערך זה.</li>";
//End Lightbox General Help File ----------------------------------------------------------------------------------------------------------------------------- 

$pgv_lang["lb_tt_balloonLegend"]	= "חוצץ אלבום תמונה ממוזערת - Tooltip של הערות";
$pgv_lang["lb_tt_balloon_help"]	= "~#pgv_lang[lb_tt_balloonLegend]#~<br />האופציה מאפשרת לקבוע אם הקישור ה\"ראה הערות\" יראה Tooltip \"בלון\" או Tooltip \"רגיל \" כאשר לוחצים עליוl.<br /><br />הקישורים המוצגים כאן מראים את ההערות הקשורות לישות מדיה או הקישורים לפירוט ומקור של ישות המדיה (אם קיימים).<br />";


// VERSION 4.1.3 
$pgv_lang["mediatabLegend"]		= "הופעת חוצץ מדיה";
$pgv_lang["mediatab_help"]		= "~#pgv_lang[mediatab]#~<br />הבחירה מאפשרת לך לקבוע אם להראות את חוצץ המדיה על דף #pgv_lang[indi_info]#.<br /><br />כאשר הערך הוא <b>#pgv_lang[hide]#</b>, מראים רק את החוצץ <b>#pgv_lang[lightbox]#</b>.<br />";
$pgv_lang["lb_al_head_linksLegend"]	= "הופעת קישור חוצץ כותרת של אלבום";
$pgv_lang["lb_al_head_links_help"]		= "~#pgv_lang[lb_al_head_linksLegend]#~<br />הבחירה מאפשרת לקבוע אם אזור הכותרת של ה#pgv_lang[lightbox]# tab, אשר מכיל קישורים לשליטת היבטים שונים של מודול ה-Lightbox, יכלול רק צלמיות, רק טכסט או שניהם.<br /><br />הבחירה <b>#pgv_lang[lb_icon]#</b> אינה שימושית מאוד, מכיוון שלא רואים שום סימן לשימוש של הצלמיות עד שהעכבר מרחף מעל הצלמית.<br />";
$pgv_lang["lb_al_thumb_linksLegend"]	= "הופעת קישור חוצץ עמוד תמונות ממוזערות של אלבום ";
$pgv_lang["lb_al_thumb_links_help"]		= "~#pgv_lang[lb_al_thumb_linksLegend]#~<br />הבחירה מאפשרת לקבוע אם אזור הקישורים מתחת לכל תמונה ממוזערת יראה צלמית או טכסט.  הקישורים שאותם רואים כאן מאפשרים עריכה של פירטי ישות מדיה או מחיקתה.<br />";
$pgv_lang["lb_ml_thumb_linksLegend"]	= "הופעת קישור תמונות ממוזערות";
$pgv_lang["lb_ml_thumb_links_help"]	= "~#pgv_lang[lb_ml_thumb_linksLegend]#~<br />הבחירה מאפשרת לקבוע אם אזור הקישורים מעל לפירוט פריטי מדיה ברשימת מולטימדיה יכלול רק צלמיות, רק טכסט או שניהם.  הקישורים המוצגים כאן מאפשרים לבצע פעולות עריכה שונות עבור ישות המדיה הספציפית.<br /><br />הבחירה <b>#pgv_lang[lb_none]#</b> מחביאה את הקשורים הללו לחלוטין ולכן מתנהגת כאילו למשתמש אין הרשאות עריכה.<br />";
$pgv_lang["lb_ss_speedLegend"]		= "מהירות מצגת שקופיות";
$pgv_lang["lb_ss_speed_help"]		= "~#pgv_lang[lb_ss_speedLegend]#~<br />הבחירה קובעת את אורך הזמן שיש להציג כל תמונה לפני שמצגת השקופיות תציג את התמונה הבאה לפי הסדר.<br />";
$pgv_lang["lb_music_fileLegend"]		= "פס קול של מצגת שקופיות";
$pgv_lang["lb_music_file_help"]		= "~#pgv_lang[lb_music_fileLegend]#~<br />הבחירה מאפשרת לקבוע קובץ פס קול שינוגן כאשר מצגת השקופיות פעילה. אם תשאיר שדה זה ריק, לא יושמע קול בזמן מצגת השקופיות.<br /><br />המאפיין הזה תומך רק בקבצים במבנה mp3.<br />";
$pgv_lang["lb_transitionLegend"]		= "מהירות המעבר מתמונה לתמונה";
$pgv_lang["lb_transition_help"]		= "~#pgv_lang[lb_transitionLegend]#~<br />האופציה מאפשרת לקבוע את מהירות המעבר מתמונה לתמונה. הבחירה מופעלת בזמן מצגת שקופיות. היא מופעלת גם כן כאשר עוברים ידנית לתמונה הקודמת או הבאה כאשר מצגת התמונות אינה מופעלת.<br /><br />אופציית <b>#pgv_lang[lb_none]#</b> מונעת מעבר בין תמונות כך שהתמונה החדשה מחליפה מידית את הישנה ללא שינוי ניראה לעין במימדי התמונה.<br />";

$pgv_lang["lb_url_dimensionsLegend"]	= "מימדי חלון Lightbox URL";
$pgv_lang["lb_url_dimensions_help"]	= "~#pgv_lang[lb_url_dimensionsLegend]#~<br />כאשר לוחצים על תמונה ממוזערת של URL, הבחירה מאפשרת לקבוע את מימדי חלון Lightbox URL בפיקסלים.<br /><br />בדרך כלל זה יהיה פחות ממימדי החלון הנוכחי בדפדפת, ובוודאי פחות מרזולוציית המסך.<br />";
 
?>
