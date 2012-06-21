<?php
/**
 * Lithuanian Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
 * @author Arturas Sleinius
 * @version $Id: facts.lt.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map Gedcom tags with their lithuanian values
$factarray["BIRT"]	= "Gimė";
$factarray["BLES"]	= "Palaiminimas";
$factarray["CAUS"]	= "Mirties priežastis";
$factarray["CENS"]	= "Surašymas";
$factarray["CHAR"]	= "Kodų lentelė";
$factarray["CHAN"]	= "Paskutinis pakeitimas";
$factarray["CHIL"]	= "Vaikas";
$factarray["CHRA"]	= "Suaugusio krikštas";
$factarray["CHR"]	= "Krikštas";
$factarray["CITY"]	= "Miestas";
$factarray["COPR"]	= "Autorinės teisės";
$factarray["CTRY"]	= "Šalis";
$factarray["DESI"]	= "Palikuonių pomėgiai";
$factarray["EDUC"]	= "Išsimokslinimas";
$factarray["DSCR"]	= "Aprašymas";
$factarray["DESC"]	= "Palikuonys";
$factarray["DATE"]	= "Data";
$factarray["DEAT"]	= "Mirė";
$factarray["DIV"]	= "Skirybos";
$factarray["EMIG"]	= "Emigravimas";
$factarray["EVEN"]	= "Įvykis";
$factarray["FAM"]	= "Šeima";
$factarray["FAMF"]	= "Šeimos failas";
$factarray["FCOM"]	= "Pirma komunija";
$factarray["FORM"]	= "Formatas";
$factarray["GIVN"]	= "Vardai";
$factarray["HUSB"]  = "Vyras";
$factarray["IMMI"]	= "Imigracija";
$factarray["MARR"]	= "Santuoka";
$factarray["NAME"]	= "Vardas";
$factarray["NATI"]	= "Tautybė";
$factarray["NICK"]	= "Pravardė";
$factarray["NCHI"]	= "Vaikų skaičius";
$factarray["NOTE"]	= "Pastaba";
$factarray["NMR"]	= "Santuokų skaičius";
$factarray["PEDI"]	= "Kilmė";
$factarray["PLAC"]	= "Vietovė";
$factarray["RELA"]	= "Ryšys";
$factarray["PHON"]	= "Telefonas";
$factarray["PROP"]	= "Nuosavybė";
$factarray["REPO"]	= "Saugykla";
$factarray["SEX"]	= "Lytis";
$factarray["SOUR"]	= "Šaltinis";
$factarray["SSN"]	= "SoDra numeris";
$factarray["SURN"]	= "Pavardė";
$factarray["TEXT"]	= "Tekstas";
$factarray["TIME"]	= "Laikas";
$factarray["EMAIL"]	= "Elektroninio pašto adresas";
$factarray["_TODO"]	= "Dar padaryti įrašas";
$factarray["_PGVU"]	= "Paskutinis keitė";
$factarray["SERV"] = "Nutolęs serveris";
$factarray["_GEDF"] = "GEDCOM byla";
$factarray["_PRIM"]	= "Paryškintas paveikslas";
$factarray["_THUM"]	= "Naudoti šį paveikslą kaip maža paveiksliuką?";
$factarray["_DEG"]	= "Laipsnis";
$factarray["_SEPR"]	= "Išsiskyręs";
$factarray["_DETS"]	= "Vieno sutuoktinio mirtis";
$factarray["_FA1"]	= "Įvykis 1";
$factarray["_FA2"]	= "Įvykis 2";
$factarray["_FA3"]	= "Įvykis 3";
$factarray["_FA4"]	= "Įvykis 4";
$factarray["_FA5"]	= "Įvykis 5";
$factarray["_FA6"]	= "Įvykis 6";
$factarray["_FA7"]	= "Įvykis 7";
$factarray["ANCE"]	= "Protėviai";
$factarray["_FA8"]	= "Įvykis 8";
$factarray["_FA9"]	= "Įvykis 9";
$factarray["_FA10"]	= "Įvykis 10";
$factarray["_FA11"]	= "Įvykis 11";
$factarray["_FA12"]	= "Įvykis 12";
$factarray["_FA13"]	= "Įvykis 13";
$factarray["_MREL"]	= "Ryšys su motina";
$factarray["_FREL"]	= "Ryšys su tėvu";
$factarray["FAX"] = "Faksas";
$factarray["FACT"] = "Įvykis";
$factarray["FACT"] = "Faktas";
$factarray["WWW"] = "Interneto namų puslapis";
$factarray["MAP"] = "Žemėlapis";
$factarray["_NAME"] = "Pašto adresas";
$factarray["URL"] = "Interneto URL";
$factarray["EMAL"]	= "Elektroninio pašto adresas";
$factarray["_ADPF"]	= "Įvaikintas tėvo";
$factarray["_ADPM"]	= "Įvaikintas motinos";
$factarray["_AKAN"]	= "Dar žinomas kaip";
$factarray["_AKA"] 	= "Dar žinomas kaip";
$factarray["_FNRL"]	= "Laiduotuvės";
$factarray["_EYEC"]	= "Akių spalva";
$factarray["_HAIR"]	= "Plaukų spalva";
$factarray["_HEIG"]	= "Aukštis";
$factarray["_NMR"]	= "Ne santuokoje";
$factarray["_NMAR"]	= "Nebuvo santuokoje";
$factarray["_WEIG"]	= "Svoris";
$factarray["_MARNM"] = "Pavardė po santuokos";
$factarray["_STAT"]	= "Vedybinis statusas";
$factarray["COMM"]	= "Komenatas";
$factarray["MARR_CIVIL"] = "Civilinė santuoka";
$factarray["MARR_RELIGIOUS"] = "Religinė santuoka";
$factarray["MARR_RELIGIOUS"] = "Religinės vestuvės";
$factarray["MARR_PARTNERS"] = "Registruota partnerystė";
$factarray["_MARR_MSIB"] = "Motinos brolio/sesers santuoka";
$factarray["_DEAT_MSIB"] = "Motinos brolio/sesers mirtis";
$factarray["MARR_UNKNOWN"] = "Santuokos tipas nežinomas";
$factarray["_HNM"] = "Hebrajų vardas";
$factarray["_DEAT_SPOU"] = "Sutuoktinio mirtis";
$factarray["_BIRT_CHIL"] = "Vaiko gimimas";
$factarray["_MARR_CHIL"] = "Vaiko santuoka";
$factarray["_DEAT_CHIL"] = "Vaiko mirtis";
$factarray["_BIRT_GCHI"] = "Anūko gimimas";
$factarray["_MARR_GCHI"] = "Anūko santuoka";
$factarray["_DEAT_GCHI"] = "Anūko mirtis";
$factarray["_MARR_FATH"] = "Tėvo santuoka";
$factarray["_DEAT_FATH"] = "Tėvo mirtis";
$factarray["_MARR_MOTH"] = "Motinos santuoka";
$factarray["_DEAT_MOTH"] = "Motinos mirtis";
$factarray["_BIRT_SIBL"] = "Brolio/sesers gimimas";
$factarray["_MARR_SIBL"] = "Brolio/sesers  santuoka";
$factarray["_DEAT_SIBL"] = "Brolio/sesers mirtis";
$factarray["_DEAT_GPAR"] = "Senelio mirtis";
$factarray["_BIRT_FSIB"] = "Tėvo brolio/sesers gimimas";
$factarray["_MARR_FSIB"] = "Tėvo brolio/sesers santuoka";
$factarray["_DEAT_FSIB"] = "Tėvo brolio/sesers  mirtis";
$factarray["_BIRT_MSIB"] = "Motinos brolio/sesers gimimas";
$factarray["ABBR"]	= "Santrumpa";
$factarray["ADDR"]	= "Adresas";
$factarray["ADR1"]	= "Adresas 1";
$factarray["ADR2"]	= "Adresas 2 ";
$factarray["ADOP"]	= "Įvaikinimas";
$factarray["AGE"]	= "Amžius";
$factarray["AUTH"]	= "Autorius";

?>
