<?php
/**
 * Defines an array of GEDCOM codes and the Estonian name facts that they represent.
 *
 * PhpGedView: Genealogy Viewer
 * Copyright (C) 2006  PGV Development Team
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
 * @author Anu Mullari
 * @created 2006-07-27
 * $Id: facts.et.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Estonian values
$factarray["ABBR"]	= "Lühend";
$factarray["ADDR"]	= "Aadress";
$factarray["ADR1"]	= "Aadress 1";
$factarray["AGE"]	= "Vanus";
$factarray["BIRT"]	= "Sündinud";
$factarray["CHAN"]	= "Viimati muudetud";
$factarray["CTRY"]	= "Riik";
$factarray["DATE"]	= "Kuupäev";
$factarray["DEAT"]	= "Surnud";
$factarray["DESC"]	= "Järeltulijad";
$factarray["ENGA"]	= "Kihlus";
$factarray["EVEN"]	= "Sündmus";
$factarray["FAM"]	= "Perekond";
$factarray["FAMC"]	= "Perekond lapsena";
$factarray["FAMS"]	= "Perekond abielus";
$factarray["FORM"]	= "Formaat";
$factarray["GIVN"]	= "Eesnimed";
$factarray["HUSB"]  = "Mees";
$factarray["IMMI"]	= "Sisseränne";
$factarray["MARR"]	= "Abiellunud";
$factarray["NAME"]	= "Nimi";
$factarray["NATI"]	= "Kodakondsus";
$factarray["NCHI"]	= "Laste arv";
$factarray["NICK"]	= "Hüüdnimi";
$factarray["NMR"]	= "Abielude arv";
$factarray["NOTE"]	= "Märkused";
$factarray["NPFX"]	= "Eesliide";
$factarray["NSFX"]	= "Järelliide";
$factarray["OBJE"]	= "Multimeedia objekt";
$factarray["OCCU"]	= "Amet";
$factarray["PAGE"]	= "Tsitaadi detailid";
$factarray["PEDI"]	= "Esivanemate puu";
$factarray["PLAC"]	= "Koht";
$factarray["PUBL"]	= "Avaldatud";
$factarray["QUAY"]	= "Andmete kvaliteet";
$factarray["REPO"]	= "Hoidla";
$factarray["RELA"]	= "Sugulus";
$factarray["RELI"]	= "Usk";
$factarray["RESI"]	= "Elukoht";
$factarray["SEX"]	= "Sugu";
$factarray["SOUR"]	= "Allikas";
$factarray["SSN"]	= "Isikukood";
$factarray["SURN"]	= "Perekonnanimi";
$factarray["TEMP"]	= "Pühakoda";
$factarray["TEXT"]	= "Tekst";
$factarray["TIME"]	= "Kellaaeg";
$factarray["TITL"]	= "Pealkiri";
$factarray["TYPE"]	= "Tüüp";
$factarray["WIFE"]  = "Naine";
$factarray["WILL"]	= "Testament";
$factarray["FAX"] = "Faks";
$factarray["FACT"] = "Fakt";
$factarray["URL"] = "Veebiaadress";
$factarray["_HEB"] = "Heebrea";
$factarray["_SCBK"] = "Väljalõigete raamat";
$factarray["_TYPE"] = "Meedia tüüp";
$factarray["_SSHOW"] = "Slaidišõu";
$factarray["_SUBQ"]= "Lühiversioon";
$factarray["_BIBL"] = "Bibliograafia";
$factarray["EMAL"]	= "e-maili aadress";
$factarray["_ADPF"]	= "Lapsendanud isa";
$factarray["_ADPM"]	= "Lapsendanud ema";
$factarray["_AKAN"]	= "Tuntud ka kui";
$factarray["_AKA"] 	= "Tuntud ka kui";
$factarray["_EYEC"]	= "Silmavärv";
$factarray["_FNRL"]	= "Matus";
$factarray["_HAIR"]	= "Juuksevärv";
$factarray["_HEIG"]	= "Pikkus";
$factarray["_MARI"]	= "Abielu plaan";
$factarray["_MBON"]	= "Abieluside";
$factarray["_MEDC"]	= "Tervis";
$factarray["_MILI"]	= "Sõjaväelane";
$factarray["_NMR"]	= "Vallaline";
$factarray["_NLIV"]	= "Surnud";
$factarray["_NMAR"]	= "Pole abielus olnud";
$factarray["_WEIG"]	= "Kaal";
$factarray["_MARNM"] = "Nimi peale abiellumist";
$factarray["_STAT"]	= "Abielu staatus";
$factarray["COMM"]	= "Märkus";
$factarray["MARR_CIVIL"] = "Ilmalik abielu";
$factarray["MARR_RELIGIOUS"] = "Kiriklik abielu";
$factarray["MARR_PARTNERS"] = "Registreeritud partnerlus";
$factarray["MARR_UNKNOWN"] = "Abielu tüüp teadmata";
$factarray["_HNM"] = "Heebrea nimi";
$factarray["_DEAT_SPOU"] = "Abikaasa surm";
$factarray["_BIRT_CHIL"] = "Lapse sünd";
$factarray["_MARR_CHIL"] = "Lapse abielu";
$factarray["_DEAT_CHIL"] = "Lapse surm";
$factarray["_BIRT_GCHI"] = "Lapselapse sünd";
$factarray["_MARR_GCHI"] = "Lapselapse abielu";
$factarray["_DEAT_GCHI"] = "Lapselapse surm";
$factarray["_MARR_FATH"] = "Isa abielu";
$factarray["_MARR_MOTH"] = "Ema abiellumine";
$factarray["_DEAT_MOTH"] = "Ema surm";
$factarray["_BIRT_SIBL"] = "Õe  / venna sünd";
$factarray["_DEAT_GPAR"] = "Vana-vanema surm";
$factarray["_BIRT_FSIB"] = "Isapoolse tädi / onu sünd";
$factarray["_MARR_FSIB"] = "Isapoolse tädi / onu abiellumine";
$factarray["_DEAT_FSIB"] = "Isapoolse tädi / onu surm";
$factarray["_BIRT_MSIB"] = "Emapoolse tädi / onu sünd";
$factarray["_MARR_MSIB"] = "Emapoolse tädi / onu abiellumine";
$factarray["_DEAT_MSIB"] = "Emapoolse tädi / onu surm";
$factarray["_BIRT_COUS"] = "Tädi / onu lapse sünd";
$factarray["_MARR_COUS"] = "Tädi / onu lapse abielu";
$factarray["_DEAT_COUS"] = "Tädi / onu lapse surm";
$factarray["_THUM"]	= "Kas kasutada seda kujutust pisipildina?";
$factarray["_PGVU"]	= "Viimati muutis";
$factarray["SERV"] = "Teine server";
$factarray["_GEDF"] = "GEDCOM fail";
$factarray["_MARR_SIBL"] = "Õe / venna abiellumine";
$factarray["_DEAT_SIBL"] = "Poolõe / -venna surm";
$factarray["_BIRT_HSIB"] = "Poolõe / -venna sünd";
$factarray["_MARR_HSIB"] = "Poolõe / -venna abielu";
$factarray["_DEAT_HSIB"] = "Poolõe / -venna surm";
$factarray["_DEAT_FATH"] = "Isa surm";
$factarray["ANCE"]	= "Esivanemad";

?>
