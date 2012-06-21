<?php
/**
 * GedFact_assistant module for phpGedView
 *
 * English Language file for GedFact_assistant
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2007 to 2009  PGV Development Team.  All rights reserved.
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
 * @version $Id: lang.en.php 6864 2010-01-27 22:21:26Z windmillway $
 * @author Brian Holland
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
// General headings and labels =============================================
$pgv_lang["head"]				= "Head of Household:";
$pgv_lang["cens_country"]		= "Country";
$pgv_lang["cens_year"]			= "Year";
$pgv_lang["cens_preview"]		= "Click &quot;Preview&quot; to copy Edit Input Fields";
$pgv_lang["cens_proposed"]		= "Proposed Census Text&nbsp;&nbsp;";
$pgv_lang["cens_add_insert"]	= "Add/Insert Blank Row";
$pgv_lang["enter_name"]			= "You must enter a name";



// COMMON Census Parameters ================================================ 

// ---- Header Titles ------------------------------------------------------
$pgv_lang["header_Name"]		= "Name";			// Name		 -	 Name or Married Name
$pgv_lang["header_Rela"]		= "Relation";		// Relation	 -	 Relation to Head of Household = Wife, Son, Daughter etc
$pgv_lang["header_MCond"]		= "MC";				// MCond	 -	 Mariage Condition - M,S,U,W,D
$pgv_lang["header_Age"]			= "Age";			// Age		 -	 Age at last Birthday - 
$pgv_lang["header_Sex"]			= "Sex";			// Sex		 -	 Sex - M,F = Male or Female
$pgv_lang["header_YrsM"]		= "YrsM";			// YrsM		 -	 Years Married - yy
$pgv_lang["header_ChilB"]		= "ChB";			// ChilB	 -	 Children born alive - nn
$pgv_lang["header_ChilL"]		= "ChL";			// ChilL	 -	 Children still living - nn
$pgv_lang["header_AgM"]			= "AgM";			// AgeM		 -	 Age at first Marriage - yy
$pgv_lang["header_Mmth"]		= "Mmth";			// Marr month- 	 mmm = If married within Census year - Month of marriage
$pgv_lang["header_Occu"]		= "Occupation";		// Occu		 -	 Occupation -
$pgv_lang["header_Ind"]			= "Industry";		// Industry  -	 Industry
$pgv_lang["header_Emp"]			= "Employ";			// Employ	 -	 Employment - Yes, No, Worker, Employee etc
$pgv_lang["header_EmR"]			= "EmR";			// EmR		 -	 Employer? - Y/N
$pgv_lang["header_EmD"]			= "EmD";			// EmD		 -	 Employed? - Y/N
$pgv_lang["header_EmN"]			= "EmN";			// EmN		 -	 Unemployed? - Y/N
$pgv_lang["header_Bplace"]		= "Birthplace";		// Bplace	 -	 Birthplace (Full)
$pgv_lang["header_Infirm"]		= "Infirm";			// Infirm	 -	 Infirmaties - 1,2,3,4 (similar to Health)

// ---- View Header Tooltip Messages ---------------------------------------
$pgv_lang["tt_view_Name"]		= "Full Name or Married name if married";
$pgv_lang["tt_view_Rela"]		= "Relationship to Head of Household";
$pgv_lang["tt_view_MCond"]		= "Marital Condition - Married, Single, Unmarried, Widowed or Divorced";
$pgv_lang["tt_view_Age"]		= "Age at last birthday";
$pgv_lang["tt_view_Sex"]		= "Male or Female";
$pgv_lang["tt_view_YrsM"]		= "Years Married, or Y if married in Census Year";
$pgv_lang["tt_view_ChilB"]		= "Children born alive";
$pgv_lang["tt_view_ChilL"]		= "Children still living";
$pgv_lang["tt_view_AgM"]		= "Age at first marriage";
$pgv_lang["tt_view_Occu"]		= "Occupation";
$pgv_lang["tt_view_Ind"]		= "Industry";
$pgv_lang["tt_view_Emp"]		= "Employment";
$pgv_lang["tt_view_EmR"]		= "Employer?";
$pgv_lang["tt_view_EmD"]		= "Employed?";
$pgv_lang["tt_view_EmN"]		= "Unemployed?";
$pgv_lang["tt_view_Bplace"]		= "Birthplace (Full format)";
$pgv_lang["tt_view_Infirm"]		= "Infirmaties - 1.Deaf&Dumb, 2.Blind, 3.Lunatic, 4.Imbecile/feeble-minded";

// ---- Edit Header Tooltip Messages ---------------------------------------
$pgv_lang["tt_edit_Name"]		= "Full Name or Married name if married";
$pgv_lang["tt_edit_Rela"]		= "Relationship to Head of Household - Head, Wife, Son etc";
$pgv_lang["tt_edit_MCond"]		= "Marital Condition - M,S,U,W,D - Married, Single, Unmarried, Widowed or Divorced";
$pgv_lang["tt_edit_Age"]		= "Age at last birthday";
$pgv_lang["tt_edit_Sex"]		= "Male(M) or Female(F)";
$pgv_lang["tt_edit_YrsM"]		= "Years Married or if married in Census Year - yy or Y";
$pgv_lang["tt_edit_ChilB"]		= "Children born alive - nn";
$pgv_lang["tt_edit_ChilL"]		= "Children still living - nn";
$pgv_lang["tt_edit_AgM"]		= "Age at first marriage - yy";
$pgv_lang["tt_edit_Occu"]		= "Occupation";
$pgv_lang["tt_edit_Ind"]		= "Industry";
$pgv_lang["tt_edit_Emp"]		= "Employment - Yes, No, Worker, Employer etc";
$pgv_lang["tt_edit_EmR"]		= "Employer? - Y/N";
$pgv_lang["tt_edit_EmD"]		= "Employed? - Y/N";
$pgv_lang["tt_edit_EmN"]		= "UnEmployed? - Y/N";
$pgv_lang["tt_edit_Bplace"]		= "Birthplace (Full format)";
$pgv_lang["tt_edit_Infirm"]		= "Infirmaties - 1234 - 1.Deaf&Dumb, 2.Blind, 3.Lunatic, 4.Imbecile/feeble-minded";


// UK ONLY Census parameters ===============================================

// ---- Header Titles ------------------------------------------------------
$pgv_lang["header_ChilD"]		= "ChD";			// ChilD	 -	 Children who have died - nn
$pgv_lang["header_EmH"]			= "WH";				// EmH		 -	 Working at Home? - Y/N
$pgv_lang["header_BIC"]			= "BIC";			// BIC		 -	 Born in County - Y/N = (UK 1841 only)
$pgv_lang["header_BOE"]			= "BOE";			// BOE		 -	 Born outside England - SCO,IRE,WAL,FOR = (UK 1841 only)

// ---- View Header Tooltip Messages ---------------------------------------
$pgv_lang["tt_view_ChilD"]		= "Children who have died";
$pgv_lang["tt_view_EmH"]		= "Working at Home?";
$pgv_lang["tt_view_BIC"]		= "Born in County";
$pgv_lang["tt_view_BOE"]		= "Born outside England";

// ---- Edit Header Tooltip Messages ---------------------------------------
$pgv_lang["tt_edit_ChilD"]		= "Children who have died - nn";
$pgv_lang["tt_edit_EmH"]		= "Working at Home? - Y/N";
$pgv_lang["tt_edit_BIC"]		= "Born in County - Y/N - (UK 1841 only)";
$pgv_lang["tt_edit_BOE"]		= "Born outside England - SCO,IRE,WAL,FOReign - (UK 1841 only)";


// USA ONLY Census parameters ==============================================

// ---- Header Titles ------------------------------------------------------
$pgv_lang["header_Asset"]		= "Assets";			// Asset	 -	 Assets - O or R-value or rent-Y-N = Owned or Rented, Value or Rent, Radio, Farm
$pgv_lang["header_Race"]		= "Race";			// Race		 -	 Race or Color - B.W,M,A,I,C = Black, White, Mulatto, Asian, Indian, Chinese etc
$pgv_lang["header_YOB"]			= "DOB";			// DOB 		 -	 Date of Birth -
$pgv_lang["header_Bmth"]		= "Bmth";			// Bmth		 -	 Month Born - mmm
$pgv_lang["header_BP"]			= "BP";				// BP		 -	 Birthplace - xxx = State/Country (Chapman)
$pgv_lang["header_FBP"]			= "FBP";			// FBP		 -	 Father's Birthplace - xxx = State/Country (Chapman)
$pgv_lang["header_MBP"]			= "MBP";			// MBP		 -	 Mother's Birthplace - xxx = State/Country (Chapman)
$pgv_lang["header_NL"]			= "NL";				// NL		 -	 If Foreign Born - Native Language
$pgv_lang["header_YrsUS"]		= "YUS";			// YUS		 -	 If Foreign Born - yy = Years in the USA
$pgv_lang["header_YOI"]			= "YOI";			// YOI		 -	 If Foreign Born - yyyy = Year of Immigration
$pgv_lang["header_NA"]			= "N/A";			// N/A		 -	 If Foreign Born - N/A = Naturalized/Alien
$pgv_lang["header_YON"]			= "YON";			// YON		 -	 If Foreign Born - yyyy = Year of Naturalization
$pgv_lang["header_EngL"]		= "EngL";			// Eng/Lang	 -	 English spoken? if not Native Language
$pgv_lang["header_Health"]		= "Health";			// Health	 -	 Health - 1,2,3,4 = 
$pgv_lang["header_Educ"]		= "Edu";			// Education -	 xxx = At School, Able to read, Able to write
$pgv_lang["header_Eng"]			= "Eng?";			// Eng		 -	 English spoken - Y/N
$pgv_lang["header_Lang"]		= "Lang";			// Lang		 -	 If Foreign Born - Native Language
$pgv_lang["header_Vet"]			= "Vet";			// Vet		 -	 War Veteran? - Y/N
$pgv_lang["header_Tenure"]		= "Ten";			// Tenure	 -	 xx = Owned/Rented, if owned Free/Mortgaged
$pgv_lang["header_Parent"]		= "Par";			// Parentage -	 xx = Father if foreign born Y/N/-, Mother if foreign born Y/N/- eg YY, YN, NY, or -
$pgv_lang["header_Mnse"]		= "MnsE";			// Mnse		 -	 xx = Months employed during Census Year
$pgv_lang["header_Wksu"]		= "WksU";			// Wksu		 -	 xx = Weeks Unemployed during Census Year
$pgv_lang["header_Mnsu"]		= "MnsU";			// Mnsu		 -	 xx = Months Unemployed during Census Year
$pgv_lang["header_Educpre1890"]	= "Edu";			// Educ		 -	 Education (pre 1890 Census)
$pgv_lang["header_Home"]		= "Home";			// Home		 - 	 x-x-x-xxxx = O/R-F/M-F/H-#### = Owned/Rented-Free/Mortgaged-Farm/House-Farm Schedule number
$pgv_lang["header_Situ"]		= "Situ";			// Situation -	 Disease, Infimaty, Convict, Pauper etc
$pgv_lang["header_War"]			= "War";			// War		 -	 War or Expedition
$pgv_lang["header_Infirm1910"]	= "Infirm";			// Infirm	 -	 Whether blind, Whether Deaf and Dumb - xx - Y/N, Y/N

// ---- View Header Tooltip Messages ----------------------------------------
$pgv_lang["tt_view_Asset"]		= "Assets = Owned,Rented - Value,Rent - Radio - Farm";
$pgv_lang["tt_view_Race"]		= "Race or Color - Black, White, Mulatto, Asian, Indian, Chinese etc";
$pgv_lang["tt_view_YOB"]		= "Date of Birth";
$pgv_lang["tt_view_Bmth"]		= "Month of birth - If born within Census year"; 
$pgv_lang["tt_view_BP"]			= "Birthplace - (Chapman format)";
$pgv_lang["tt_view_FBP"]		= "Father's Birthplace - (Chapman format)";
$pgv_lang["tt_view_MBP"]		= "Mother's Birthplace - (Chapman format)";
$pgv_lang["tt_view_NL"]			= "If Foreign Born - Native Language";
$pgv_lang["tt_view_YrsUS"]		= "If Foreign Born - Years in the USA";
$pgv_lang["tt_view_YOI"]		= "If Foreign Born - Year of Immigration";
$pgv_lang["tt_view_NA"]			= "If Foreign Born - Naturalized, Alien";
$pgv_lang["tt_view_YON"]		= "If Foreign Born - Year of Naturalization";
$pgv_lang["tt_view_EngL"]		= "English spoken?, if not, Native Language";
$pgv_lang["tt_view_Health"]		= "Health - 1.Blind, 2.Deaf&Dumb, 3.Idiotic, 4.Insane, 5.Disabled etc";
$pgv_lang["tt_view_Educ"]		= "Education - At School, Can Read, Can Write";
$pgv_lang["tt_view_Eng"]		= "English spoken?";
$pgv_lang["tt_view_Lang"]		= "If Foreign Born - Native Language";
$pgv_lang["tt_view_Vet"]		= "War Veteran?";
$pgv_lang["tt_view_Tenure"]		= "Tenure - Owned/Rented, (if owned)Free/Morgaged";
$pgv_lang["tt_view_Parent"]		= "Parentage - Father if foreign born, Mother if foreign born";
$pgv_lang["tt_view_Mmth"]		= "Month of marriage - If married during Census Year"; 
$pgv_lang["tt_view_Mnse"]		= "Months employed during Census Year";
$pgv_lang["tt_view_Wksu"]		= "Weeks unemployed during Census Year";
$pgv_lang["tt_view_Mnsu"]		= "Months unemployed during Census Year";
$pgv_lang["tt_view_Educpre1890"]= "Education - xxx - At School, Cannot Read, Cannot Write";
$pgv_lang["tt_view_Home"]		= "Home Ownership - Owned/Rented-Free/Mortgaged-Farm/House-Farm Schedule number";
$pgv_lang["tt_view_Situ"]		= "Situation - Disease, Infirmaty, Convict, Pauper etc";
$pgv_lang["tt_view_War"]		= "War or Expedition";
$pgv_lang["tt_view_Infirm1910"]	= "Infirmaties - Whether blind, Whether Deaf and Dumb";

// ---- Edit Header Tooltip Messages ----------------------------------------
$pgv_lang["tt_edit_Asset"]		= "Assets = O,R - value,rent - Y,N,R - Y,N,F  =  Owned,Rented - Value,Rent - Radio - Farm";
$pgv_lang["tt_edit_Race"]		= "Race or Color - B.W,M,A,I,C - Black, White, Mulatto, Asian, Indian, Chinese etc";
$pgv_lang["tt_edit_YOB"]		= "Date of Birth - mmm yyyy";
$pgv_lang["tt_edit_Bmth"]		= "If born within Census year - mmm - Month of birth"; 
$pgv_lang["tt_edit_BP"]			= "Birthplace - xx or xxx - State/Country (Chapman format)";
$pgv_lang["tt_edit_FBP"]		= "Father's Birthplace - xx or xxx - State or Country (Chapman format)";
$pgv_lang["tt_edit_MBP"]		= "Mother's Birthplace - xx or xxx - State or Country (Chapman format)";
$pgv_lang["tt_edit_NL"]			= "If Foreign Born - Native Language";
$pgv_lang["tt_edit_YrsUS"]		= "If Foreign Born - yy -Years in the USA";
$pgv_lang["tt_edit_YOI"]		= "If Foreign Born - yyyy - Year of Immigration";
$pgv_lang["tt_edit_NA"]			= "If Foreign Born - N,A - Naturalized, Alien";
$pgv_lang["tt_edit_YON"]		= "If Foreign Born - yyyy - Year of Naturalization";
$pgv_lang["tt_edit_EngL"]		= "English spoken?, if not, Native Language";
$pgv_lang["tt_edit_Health"]		= "Health - 12345 = 1.Blind, 2.Deaf&Dumb, 3.Idiotic, 4.Insane, 5.Disabled etc";
$pgv_lang["tt_edit_Educ"]		= "Education - xxx - At School? Y/N, Can Read? Y/N, Can Write? Y/N";
$pgv_lang["tt_edit_Eng"]		= "English spoken? - Y/N";
$pgv_lang["tt_edit_Lang"]		= "If Foreign Born - Native Language";
$pgv_lang["tt_edit_Vet"]		= "War Veteran? - Y/N";
$pgv_lang["tt_edit_Tenure"]		= "Tenure - xx - Owned/Rented, (if owned)Free/Mortgaged - eg OM, or R-, or OF";
$pgv_lang["tt_edit_Parent"]		= "Parentage - xx = Father if foreign born Y/N/-, Mother if foreign born Y/N/- = eg YY, YN, NY, or -";
$pgv_lang["tt_edit_Mmth"]		= "Marriage month - mmm = If married within Census year - Month of marriage"; 
$pgv_lang["tt_edit_Mnse"]		= "Months Employed - xx = Months employed during Census Year";
$pgv_lang["tt_edit_Wksu"]		= "Weeks Unemployed - xx = Weeks unemployed during Census Year";
$pgv_lang["tt_edit_Mnsu"]		= "Months Unemployed - xx = Months unemployed during Census Year";
$pgv_lang["tt_edit_Educpre1890"]= "Education - xxx = At School, Cannot Read, Cannot Write = eg x--, xxx, or -xx etc";
$pgv_lang["tt_edit_Home"]		= "Home Ownership - x-x-x-xxxx = O/R-F/M-F/H-#### = Owned/Rented-Free/Mortgaged-Farm/House-Farm Schedule number";
$pgv_lang["tt_edit_Situ"]		= "Situation - 3 parameters - Diseases, Infimaties, Convict/Pauper etc";
$pgv_lang["tt_edit_War"]		= "War or Expedition";
$pgv_lang["tt_edit_Infirm1910"]	= "Infirmaties - xx = Whether blind (both eyes) Y/N, Whether Deaf and Dumb Y/N";


// OTHER COUNTRY only Census parameters =====================================
// ---- Header Titles -------------------------------------------------------
// ---- View Header Tooltip Messages ----------------------------------------
// ---- Edit Header Tooltip Messages ----------------------------------------


// OTHER COUNTRY only Census parameters =====================================
// ---- Header Titles -------------------------------------------------------
// ---- View Header Tooltip Messages ----------------------------------------
// ---- Edit Header Tooltip Messages ----------------------------------------

// OTHER COUNTRY only Census parameters =====================================
// ---- Header Titles -------------------------------------------------------
// ---- View Header Tooltip Messages ----------------------------------------
// ---- Edit Header Tooltip Messages ----------------------------------------


?>
