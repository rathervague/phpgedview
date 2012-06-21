<?php
/**
 * Defines an array of GEDCOM codes and the Hebrew name facts that they represent.
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
 * @package PhpGedView
 * @subpackage Languages
 * @author Meliza 
 * @version $Id: facts.he.php 6681 2010-01-07 05:33:36Z meliza $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their English values
$factarray["ABBR"] 	= "קיצור";
$factarray["ADDR"] 	= "כתובת";
$factarray["ADR1"] 	= "כתובת 1";
$factarray["ADR2"] 	= "כתובת 2";
$factarray["ADOP"]	= "אימוץ";
$factarray["AGE"] 	= "גיל";
$factarray["AFN"]	= "מספר קובץ אב-אבות (AFN)";
$factarray["AGNC"]	= "סוכנות";
$factarray["ALIA"]	= "שם נרדף";
$factarray["ANCE"]	= "אב-אבות";
$factarray["ANCI"]	= "עניין אב-אבות";
$factarray["ANUL"]	= "ביטול";
$factarray["ASSO"]	= "שותפים";
$factarray["AUTH"] 	= "מחבר";
$factarray["BAPL"]	= "טבילת מורמונים";
$factarray["BAPM"]	= "טבילה";
$factarray["BARM"] 	= "בר מצווה";
$factarray["BASM"] 	= "בת מצווה";
$factarray["BIRT"] 	= "לידה";
$factarray["BLES"]	= "ברכה";
$factarray["BLOB"] 	= "אובייקט נתונים בינארי";
$factarray["BURI"] 	= "קבורה";
$factarray["CALN"]	= "מספר קריאה";
$factarray["CAST"]	= "כת / מעמד חברתי";
$factarray["CAUS"]	= "גורם המוות";
$factarray["CEME"]	= "בית קברות";
$factarray["CENS"]	= "מפקד אוכלוסין";
$factarray["CHAN"]	= "שנוי אחרון";
$factarray["CHAR"] 	= "ערכת תווים";
$factarray["CHIL"] 	= "ילד/ה";
$factarray["CHR"]	= "הטבלה";
$factarray["CHRA"]	= "הטבלת מבוגרים";
$factarray["CITY"] 	= "עיר";
$factarray["CONF"]	= "ברית";
$factarray["CONL"]	= "ברית המורמונים";
$factarray["COPR"] 	= "זכויות יוצרים";
$factarray["CORP"]	= "חברה";
$factarray["CREM"]	= "שריפת גופה";
$factarray["CTRY"] 	= "ארץ";
$factarray["DATA"] 	= "נתונים";
$factarray["DATE"] 	= "תאריך";
$factarray["DEAT"] 	= "פטירה";
$factarray["DESC"]	= "צאצאים";
$factarray["DESI"]	= "עניין הצאצאים";
$factarray["DEST"]	= "יעד";
$factarray["DIV"]	= "גירושין";
$factarray["DIVF"]	= "הגשת בקשה לגירושין";
$factarray["EDUC"]	= "השכלה";
$factarray["DSCR"] 	= "תיאור";
$factarray["EMIG"] 	= "הגירה";
$factarray["ENDL"]	= "סמיכה של מיקדש המורמונים";
$factarray["ENGA"]	= "אירוסין";
$factarray["EVEN"] 	= "אירוע";
$factarray["FAM"] 	= "משפחה";
$factarray["FAMC"]	= "משפחה כילד";
$factarray["FAMF"] 	= "קובץ משפחה";
$factarray["FAMS"]	= "משפחה כבן/בת זוג";
$factarray["FCOM"]	= "הסעודה הראשונה";
$factarray["FILE"]	= "קובץ  חיצוני";
$factarray["FORM"] 	= "תבנית";
$factarray["GIVN"] 	= "שמות פרטיים";
$factarray["GRAD"] 	= "סיום לימודים";
$factarray["HUSB"]	= "בעל";
$factarray["IDNO"] 	= "קוד זיהוי";
$factarray["IMMI"] 	= "עליה";
$factarray["LEGA"]	= "יורש";
$factarray["MARB"]	= "הודעת נישואין";
$factarray["MARC"]	= "כתובה";
$factarray["MARL"] 	= "רישיון נישואין";
$factarray["MEDI"]	= "סוג מדיה";
$factarray["NCHI"] 	= "מספר ילדים";
$factarray["NICK"] 	= "כנוי";
$factarray["NMR"] 	= "מספר נישואין";
$factarray["PAGE"]	= "פירטי ציטוט";
$factarray["PLAC"] 	= "מקום";
$factarray["PHON"] 	= "טלפון";
$factarray["POST"]	= "מיקוד";
$factarray["PUBL"]	= "הוצאה לאור";
$factarray["QUAY"]	= "איכות נתונים";
$factarray["RELI"]	= "דת";
$factarray["ROLE"]	= "תפקיד";
$factarray["REFN"]	= "מספר התייחסות";
$factarray["RELA"]	= "קשר משפחתי";
$factarray["RESN"]	= "הגבלה";
$factarray["RETI"]	= "פרישה";
$factarray["RFN"]	= "מספר קובץ רשום";
$factarray["RIN"]	= "קוד זיהוי רשום (ID)";
$factarray["RESI"]	= "מגורים";
$factarray["REPO"]	= "מאגר";
$factarray["SPFX"]	= "קידומת שם משפחה";
$factarray["SSN"]	= "מספר מזהה (SSN)";
$factarray["STAE"]	= "מדינה";
$factarray["STAT"]	= "סטאטוס";
$factarray["SUBM"]	= "מגיש";
$factarray["SUBN"]	= "הגשה";
$factarray["PROP"]	= "נכס";
$factarray["PROB"]	= "אישור צוואה";
$factarray["SLGC"]	= "חותמת מורמונים של ילד";
$factarray["SLGS"]	= "חותמת מורמונים של בן/בת זוג";
$factarray["SOUR"] 	= "מקור";
$factarray["SURN"] 	= "שם משפחה";
$factarray["TEMP"]	= "מקדש";
$factarray["TEXT"]  	= "טקסט";
$factarray["TIME"] 	= "זמן";
$factarray["TITL"] 	= "כותרת";
$factarray["TYPE"] 	= "סוג";
$factarray["WIFE"] 	= "אישה";
$factarray["WILL"]	= "צוואה";
$factarray["_EMAIL"]	= "דואר אלקטרוני";
$factarray["EMAIL"] 	= "דואר אלקטרוני";
$factarray["_TODO"]	= "משימות";
$factarray["_UID"]	= "מזהה בלעדי גלובלי";
$factarray["SEX"] 	= "מגדר";
$factarray["NAME"] 	= "שם";
$factarray["MARS"]	= "הסדר נישואין";
$factarray["NATI"] 	= "לאום";
$factarray["NATU"] 	= "התאזרחות";
$factarray["MARR"] 	= "נישואין";
$factarray["OCCU"]	= "מקצוע";
$factarray["ORDI"]	= "הסמכה";
$factarray["ORDN"]	= "הסמכה לכמורה";
$factarray["NOTE"] 	= "הערה";
$factarray["NSFX"] 	= "צירוף סופי";
$factarray["NPFX"]	= "צירוף ראשי";
$factarray["OBJE"] 	= "מולטימדיה";
$factarray["PEDI"] 	= "יחוס";
$factarray["_PRIM"]	= "תמונה מודגשת";
$factarray["_DBID"] 	= "קוד זיהוי של מאגר נתונים מקושר";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "תאריך שינוי הסטאטוס";
$factarray["DATA:DATE"] = "תאריך הכניסה במקור";

$factarray["NAME:_HEB"]	= "שם בעברית";
$factarray["PLAC:_HEB"]	= "מקום בעברית";
$factarray["TITL:_HEB"]	= "כותרת בעברית";
$factarray["NAME:ROMN"]	= "שם לטיני";
$factarray["PLAC:ROMN"]	= "מקום לטיני";
$factarray["TITL:ROMN"]	= "כותרת לטינית";
$factarray["NAME:FONE"]	= "שם פונטי";
$factarray["PLAC:FONE"]	= "מקום פונטי";
$factarray["TITL:FONE"]	= "כותרת פונטית";

$factarray["SHARED_NOTE"]	= "הערה משותפת";

//These facts are compounds for the view probabilities page
$factarray["FAMC:HUSB:SURN"] = "שם המשפחה של האב";
$factarray["FAMC:WIFE:SURN"] = "שם המשפחה של האם";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "מקום הלידה של האב";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "מקום הלידה של האם";
$factarray["FAMC:MARR:PLAC"] = "מקום הנישואין של ההורים";
$factarray["FAMC:HUSB:OCCU"] = "המקצוע של האב";
$factarray[":BIRT:PLAC"] = "מקום הלידה";
$factarray["FAMS:MARR:DATE"] = "תאריך הנישואין";
$factarray["FAMS:MARR:PLAC"] = "מקום הנישואין";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "מקום הפטירה של בן/בת הזוג";
$factarray["FAMC:HUSB:GIVN"] = "השם הפרטי של האב";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "מקום הלידה של בן/בת הזוג";
$factarray["FAMC:WIFE:GIVN"] = "השם הפרטי של האם";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "השם הפרטי של הסב מצד האב";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "השם הפרטי של הסבתא מצד האם";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "השם הפרטי של הסב מצד האם";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "השם הפרטי של הסבתא מצד האב";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "מקום הלידה של בן/בת";
$factarray["FAMS:NOTE"] = "הערה עם בן/בת זוג";
$factarray["FAMS:CENS:DATE"] = "תאריך המפקד עם בן/בת זוג";
$factarray["FAMS:CENS:PLAC"] = "מקום המפקד עם בן/בת זוג";
$factarray["FAMS:DIV:DATE"] = "תאריך הגרושין מבן/בת זוג";
$factarray["FAMS:DIV:PLAC"] = "מקום הגירושין מבן/בת זוג";
$factarray["FAMS:SLGS:DATE"] = "תאריך חותמת המורמונים עם בן/בת זוג";
$factarray["FAMS:SLGS:PLAC"] = "מקום חותמת המורמונים עם בן/בת זוג";
$factarray["FAMS:SLGS:TEMP"] = "מקדש חותמת המורמונים עם בן/בת זוג";

// These facts are all colon delimited

$factarray["BIRT:PLAC"] = "מקום הלידה";
$factarray["BIRT:DATE"] = "תאריך הלידה";
$factarray["BIRT:SOUR"] = "מקור הלידה";
$factarray["DEAT:PLAC"] = "מקום הפטירה";
$factarray["DEAT:DATE"] = "תאריך הפטירה";
$factarray["DEAT:SOUR"] = "מקור הפטירה";
$factarray["CHR:PLAC"] = "מקום הטבילה";
$factarray["CHR:DATE"] = "תאריך הטבילה";
$factarray["CHR:SOUR"] = "מקור הטבילה";
$factarray["CONF:DATE"] = "מקום הברית";
$factarray["CONF:PLAC"] = "תאריך הברית";
$factarray["CONF:SOUR"] = "מקור הברית";
$factarray["BAPM:PLAC"] = "מקום ההטבלה";
$factarray["BAPM:DATE"] = "תאריך ההטבלה";
$factarray["BAPM:SOUR"] = "מקור ההטבלה";
$factarray["_BRTM:PLAC"] = "מקום ברית המילה";
$factarray["_BRTM:DATE"] = "תאריך ברית המילה";
$factarray["_BRTM:SOUR"] = "מקור ברית המילה";
$factarray["BARM:PLAC"] = "מקום בר המצווה";
$factarray["BARM:DATE"] = "תאריך בר המצווה";
$factarray["BARM:SOUR"] = "מקור בר המצווה";
$factarray["BASM:PLAC"] = "מקום בת המצווה";
$factarray["BASM:DATE"] = "תאריך בת המצווה";
$factarray["BASM:SOUR"] = "מקור בת המצווה";
$factarray["BURI:PLAC"] = "מקום הקבורה";
$factarray["BURI:DATE"] = "תאריך הקבורה";
$factarray["BURI:SOUR"] = "מקור הקבורה";
$factarray["FCOM:PLAC"] = "מקום הסעודה הראשונה";
$factarray["FCOM:DATE"] = "תאריך הסעודה הראשונה";
$factarray["FCOM:SOUR"] = "מקור הסעודה הראשונה";
$factarray["MARB:DATE"] = "תאריך הודעת נישואין";
$factarray["MARB:PLAC"] = "מקום הודעת נישואין";
$factarray["MARB:SOUR"] = "מקור הודעת נישואין";
$factarray["MARR:PLAC"] = "מקום הנישואין";
$factarray["MARR:DATE"] = "תאריך הנישואין";
$factarray["MARR:SOUR"] = "מקור הנישואין";
$factarray["ENGA:PLAC"] = "מקום הארוסין";
$factarray["ENGA:DATE"] = " תאריך הארוסין";
$factarray["ENGA:SOUR"] = "מקור הארוסין";
//only in Hebrew
$factarray["ADOP:PLAC"] = "מקום האימוץ";
$factarray["ADOP:DATE"] = "תאריך האימוץ";
$factarray["EVEN:PLAC"] = "מקום האירוע";
$factarray["EVEN:DATE"] = "תאריך האירוע";
$factarray["_MILT:PLAC"] = "מקום השרות הצבאי";
$factarray["_MILT:DATE"] = "תאריך השרות הצבאי";
$factarray["NATU:PLAC"] = "מקום ההתאזרחות";
$factarray["NATU:DATE"] = "תאריך ההתאזרחות";
$factarray["EMIG:PLAC"] = "מקום ההגירה";
$factarray["EMIG:DATE"] = "תאריך ההגירה";
$factarray["IMMI:PLAC"] = "מקום העליה";
$factarray["IMMI:DATE"] = "תאריך העליה";
$factarray["CENS:PLAC"] = "מקום מפקד האוכלוסין";
$factarray["CENS:DATE"] = "תאריך מפקד האוכלוסין";
$factarray["RESI:PLAC"] = "מקום המגורים";
$factarray["RESI:DATE"] = "תאריך המגורים";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] 	= "רפואי";
$factarray["_DEG"]	= "דרגה";
$factarray["_MILT"] 	= "שרות צבאי";
$factarray["_SEPR"]	= "פרוד";
$factarray["_DETS"]	= "מוות של אחד מבני הזוג";
$factarray["CITN"]	= "אזרחות";
$factarray["_FA1"] 	= "עובדה 1";
$factarray["_FA2"] 	= "עובדה 2";
$factarray["_FA3"] 	= "עובדה 3";
$factarray["_FA4"] 	= "עובדה 4";
$factarray["_FA5"] 	= "עובדה 5";
$factarray["_FA6"] 	= "עובדה 6";
$factarray["_FA7"] 	= "עובדה 7";
$factarray["_FA8"] 	= "עובדה 8";
$factarray["_FA9"] 	= "עובדה 9";
$factarray["_FA10"] 	= "עובדה 10";
$factarray["_FA11"] 	= "עובדה 11";
$factarray["_FA12"] 	= "עובדה 12";
$factarray["_FA13"] 	= "עובדה 13";
$factarray["_MREL"] 	= "קשר אל אמא";
$factarray["_FREL"] 	= "קשר אל אבא";
$factarray["_MSTAT"] 	= "מעמד תחילת נישואין";
$factarray["_MEND"]  	= "מעמד סיום נישואין";
$factarray["_NAMS"]	= "נקרא על שם";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] 	= "פקס";
$factarray["FACT"] 	= "עובדה";
$factarray["WWW"] 	= "דף בית";
$factarray["MAP"] 	= "מפה";
$factarray["LATI"]	= "קו רוחב";
$factarray["LONG"]	= "קו אורך";
$factarray["FONE"] 	= "פונטי";
$factarray["ROMN"] 	= "לטיני";

// PAF related facts
$factarray["_NAME"] 	= "שם למשלוח דואר";
$factarray["URL"] 	= "URL";
$factarray["_URL"] 	= "URL";
$factarray["_HEB"] 	= "עברי";
$factarray["_SCBK"] 	= "אלבום הדבקות";
$factarray["_TYPE"] 	= "סוג מדיה";
$factarray["_SSHOW"] = "מצגת שקופיות";

// Rootsmagic
$factarray["_SUBQ"] 	= "גרסה קצרה";
$factarray["_BIBL"] 	= "ביבליוגרפיה";

// Reunion
$factarray["EMAL"]	= "כתובת דואר אלקטרוני";

// Other common customized facts
$factarray["_ADPF"] 	= "אמוץ ע\"י אבא";
$factarray["_ADPM"] 	= "אמוץ ע\"י אמא";
$factarray["_AKAN"] 	= "מכונה";
$factarray["_AKA"] 	= "מכונה";
$factarray["_BRTM"] 	= "ברית מילה";
$factarray["_COML"] 	= "ידוע בציבור";
$factarray["_EYEC"] 	= "צבע עיניים";
$factarray["_FNRL"] 	= "הלוויה";
$factarray["_HAIR"]	= "צבע שיער";
$factarray["_HEIG"]	= "גובה";
$factarray["_HOL"] 	= "שואה";
$factarray["_INTE"]	= "קבור";
$factarray["_MARI"] 	= "כוונת נישואין";
$factarray["_MBON"] 	= "קשר נישואין";
$factarray["_MEDC"] 	= "מצב רפואי";
$factarray["_MILI"] 	= "צבא";
$factarray["_NMR"]	= "לא נשוי";
$factarray["_NLIV"] 	= "לא בחיים";
$factarray["_NMAR"] 	= "רווק";
$factarray["_PRMN"] 	= "מספר קבוע";
$factarray["_WEIG"] 	= "משקל";
$factarray["_YART"] 	= "יום השנה";
$factarray["_MARNM"] = "שם נישואין";
$factarray["_MARNM_SURN"] = "שם משפחה  לאחר הנישואין";
$factarray["_STAT"] 	= "מעמד נישואין";
$factarray["COMM"] 	= "הערה";

// Aldfaer related facts
$factarray["MARR_CIVIL"]     		= "נישואין אזרחיים";
$factarray["MARR_RELIGIOUS"] 	= "נישואין דתיים";
$factarray["MARR_PARTNERS"]  	= "שותפות רשמית";
$factarray["MARR_UNKNOWN"]   	= "סוג הנישואין אינו ידוע";

$factarray["_HNM"]    = "שם עברי";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "פטירת בן/בת זוג";
$factarray["_BURI_SPOU"] = "קבורת בן/בת זוג";
$factarray["_CREM_SPOU"] = "שריפת בן/בת זוג";

$factarray["_BIRT_CHIL"] = "לידת בן/בת";
$factarray["_CHR_CHIL"] = "הטבלת בן/בת";
$factarray["_BAPM_CHIL"] = "טבילת בן/בת";
$factarray["__BRTM_CHIL"] = "ברית מילה של בן";
$factarray["_ADOP_CHIL"] = "אמוץ של בן/בת";
$factarray["_MARR_CHIL"] = "נישואי בן/בת";
$factarray["_MARB_CHIL"] = "הודעת נישואין של בן/בת";
$factarray["_DEAT_CHIL"] = "פטירת בן/בת";
$factarray["_BURI_CHIL"] = "קבורת בן/בת";
$factarray["_CREM_CHIL"] = "שריפת בן/בת";

$factarray["_BIRT_GCHI"] = "לידת נכד/ה";
$factarray["_CHR_GCHI"] = "הטבלת נכד/ה";
$factarray["_BAPM_GCHI"] = "טבילת נכד/ה";
$factarray["__BRTM_GCHI"] = "ברית מילה של נכד";
$factarray["_ADOP_GCHI"] = "אמוץ נכד/ה";
$factarray["_MARR_GCHI"] = "נישואי נכד/ה";
$factarray["_MARB_GCHI"] = "הודעת נישואין של נכד/ה";
$factarray["_DEAT_GCHI"] = "פטירת נכד/ה";
$factarray["_BURI_GCHI"] = "קבורת נכד/ה";
$factarray["_CREM_GCHI"] = "שריפת נכד/ה";

$factarray["_BIRT_GGCH"] = "לידת שלש/ה";
$factarray["_CHR_GGCH"] = "הטבלת שלש/ה";
$factarray["_BAPM_GGCH"] = "טבילת שלש/ה";
$factarray["__BRTM_GGCH"] = "ברית מילה של שלש";
$factarray["_ADOP_GGCH"] = "אמוץ שלש/ה";
$factarray["_MARR_GGCH"] = "נישואי שלש/ה";
$factarray["_MARB_GGCH"] = "הודעת נישואין של שלש/ה";
$factarray["_DEAT_GGCH"] = "פטירת שלש/ה";
$factarray["_BURI_GGCH"] = "קבורת שלש/ה";
$factarray["_CREM_GGCH"] = "שריפת שלש/ה";

$factarray["_MARR_FATH"] = "נישואי אב";
$factarray["_MARB_FATH"] = "הודעת נישואין של האב";
$factarray["_DEAT_FATH"] = "פטירת אב";
$factarray["_BURI_FATH"] = "קבורת אב";
$factarray["_CREM_FATH"] = "שריפת אב";

$factarray["_MARR_FAMC"] = "נישואי הורים";
$factarray["_MARB_FAMC"] = "הודעת נישואין של הורים";

$factarray["_MARR_MOTH"] = "נישואי אם";
$factarray["_MARB_MOTH"] = "הודעת נישואין של האם";
$factarray["_DEAT_MOTH"] = "פטירת אם";
$factarray["_BURI_MOTH"] = "קבורת אם";
$factarray["_CREM_MOTH"] = "שריפת אם";

$factarray["_BIRT_SIBL"] = "לידת אח/ות";
$factarray["_CHR_SIBL"] = "הטבלת אח/ות";
$factarray["_BAPM_SIBL"] = "טבילת אח/ות";
$factarray["__BRTM_SIBL"] = "ברית מילה של אח";
$factarray["_ADOP_SIBL"] = "אמוץ אח/ות";
$factarray["_MARR_SIBL"] = "נישואי אח/ות";
$factarray["_MARB_SIBL"] = "הודעת נישואין של אח/ות";
$factarray["_DEAT_SIBL"] = "פטירת אח/ות";
$factarray["_BURI_SIBL"] = "קבורת אח/ות";
$factarray["_CREM_SIBL"] = "שריפת אח/ות";

$factarray["_BIRT_HSIB"] = "לידת אח/ות למחצה";
$factarray["_CHR_HSIB"] = "הטבלת אח/ות למחצה";
$factarray["_BAPM_HSIB"] = "טבילת אח/ות למחצה";
$factarray["__BRTM_HSIB"] = "ברית מילה של אח למחצה";
$factarray["_ADOP_HSIB"] = "אמוץ אח/ות למחצה";
$factarray["_MARR_HSIB"] = "נישואי אח/ות למחצה";
$factarray["_MARB_HSIB"] = "הודעת נישואין של אח/ות למחצה";
$factarray["_DEAT_HSIB"] = "פטירת אח/ות למחצה";
$factarray["_BURI_HSIB"] = "קבורת אח/ות למחצה";
$factarray["_CREM_HSIB"] = "שריפת אח/ות למחצה";

$factarray["_BIRT_NEPH"] = "לידת אחיין/אחיינית";
$factarray["_CHR_NEPH"] = "הטבלת אחיין/אחיינית";
$factarray["_BAPM_NEPH"] = "טבילת אחיין/אחיינית";
$factarray["__BRTM_NEPH"] = "ברית מילה של אחיין";
$factarray["_ADOP_NEPH"] = "אמוץ אחיין/אחיינית";
$factarray["_MARR_NEPH"] = "נישואי אחיין/אחיינית";
$factarray["_MARB_NEPH"] = "הודעת נישואין של אחיין/אחיינית";
$factarray["_DEAT_NEPH"] = "פטירת אחיין/אחיינית";
$factarray["_BURI_NEPH"] = "קבורת אחיין/אחיינית";
$factarray["_CREM_NEPH"] = "שריפת אחיין/אחיינית";

$factarray["_DEAT_GPAR"] = "פטירת סבא/סבתא";
$factarray["_BURI_GPAR"] = "קבורת סבא/סבתא";
$factarray["_CREM_GPAR"] = "שריפת סבא/סבתא";

$factarray["_DEAT_GGPA"] = "פטירת סבא רבא/סבתא רבתא";
$factarray["_BURI_GGPA"] = "קבורת סבא רבא/סבתא רבתא";
$factarray["_CREM_GGPA"] = "שריפת סבא רבא/סבתא רבתא";

$factarray["_BIRT_FSIB"] = "לידת אח/ות האב";
$factarray["_CHR_FSIB"] = "הטבלת אח/ות האב";
$factarray["_BAPM_FSIB"] = "טבילת אח/ות האב";
$factarray["__BRTM_FSIB"] = "ברית מילה של אח האב";
$factarray["_ADOP_FSIB"] = "אמוץ אח/ות האב";
$factarray["_MARR_FSIB"] = "נישואי אח/ות האב";
$factarray["_MARB_FSIB"] = "הודעת נישואין של אח/ות האב";
$factarray["_DEAT_FSIB"] = "פטירת אח/ות האב";
$factarray["_BURI_FSIB"] = "קבורת אח/ות האב";
$factarray["_CREM_FSIB"] = "שריפת אח/ות האב";

$factarray["_BIRT_MSIB"] = "לידת אח/ות האם";
$factarray["_CHR_MSIB"] = "הטבלת אח/ות האם";
$factarray["_BAPM_MSIB"] = "טבילת אח/ות האם";
$factarray["__BRTM_MSIB"] = "ברית מילה של אח האם";
$factarray["_ADOP_MSIB"] = "אמוץ אח/ות האם";
$factarray["_MARR_MSIB"] = "נישואי אח/ות האם";
$factarray["_MARB_MSIB"] = "הודעת נישואין של אח/ות האם";
$factarray["_DEAT_MSIB"] = "פטירת אח/אחות האם";
$factarray["_BURI_MSIB"] = "קבורת אח/ות האם";
$factarray["_CREM_MSIB"] = "שריפת אח/ות האם";

$factarray["_BIRT_COUS"] = "לידת דודן/דודנית מדרגה ראשונה";
$factarray["_CHR_COUS"]  = "הטבלת דודן/דודנית מדרגה ראשונה";
$factarray["_BAPM_COUS"] = "טבילת דודן/דודנית מדרגה ראשונה";
$factarray["__BRTM_COUS"] = "ברית מילה של דודן מדרגה ראשונה";
$factarray["_ADOP_COUS"] = "אמוץ דודן/דודנית מדרגה ראשונה";
$factarray["_MARR_COUS"] = "נישואי דודן/דודנית מדרגה ראשונה";
$factarray["_MARB_COUS"] = "הודעת נישואין של דודן/דודנית מדרגה ראשונה";
$factarray["_DEAT_COUS"] = "פטירת דודן/דודנית מדרגה ראשונה";
$factarray["_BURI_COUS"] = "קבורת דודן/דודנית מדרגה ראשונה";
$factarray["_CREM_COUS"] = "שריפת דודן/דודנית מדרגה ראשונה";

$factarray["_FAMC_EMIG"] = "הגירת הורים";
$factarray["_FAMC_RESI"] = "מגורי הורים";

//-- PGV Only facts
$factarray["_THUM"] = "השתמש תמיד בתמונה הראשית?";
$factarray["_PGVU"] = "ע\"י";
$factarray["SERV"]  = "שרת מרוחק";
$factarray["_GEDF"] = "קובץ GEDCOM";

/*-- Fact abbreviations for use in Chart boxes.  
 *		Use these abbreviations in cases where the standard method of using the first
 *		letter of the spelled-out name results in an undesirable abbreviation or where
 *		you want to produce a different result (eg: "x" instead of "M" for "Married").
 *
 *		You can abbreviate any Fact label this way.  The list of abbreviations is
 *		open-ended.
 *
 *		These abbreviations are user-customizable. Just put them into file "extra.xx.php".
 *		The length of these abbreviations is not restricted to 1 letter.
 */
 
/*-- The following lines have been commented out.  They should serve as examples. 
 
$factAbbrev["BIRT"]		= "B";
$factAbbrev["MARR"]		= "M";
$factAbbrev["DEAT"]		= "D";

 */

?>
