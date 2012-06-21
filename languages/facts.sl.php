<?php
/**
 * Slovenian Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009 PGV Development Team. All rights reserved.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms the GNU General Public License as published by
 * the Free Software Foundation; either version 2 the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @package PhpGedView
 * @translator Leon Kos
 * @version $Id: facts.sl.php 5366 2009-04-09 17:40:32Z wooc $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their English values
$factarray["ABBR"]	= "Okrajšava";
$factarray["ADDR"]	= "Naslov";
$factarray["ADR1"]	= "Naslov 1";
$factarray["ADR2"]	= "Naslov 2";
$factarray["ADOP"]	= "Posvojitev";
$factarray["AFN"]	= "Številka datoteke prednika (AFN)";
$factarray["AGE"]	= "Starost";
$factarray["AGNC"]	= "Agencija";
$factarray["ALIA"]	= "Vzdevek";
$factarray["ANCE"]	= "Predniki";
$factarray["ANCI"]	= "Poklic prednikov";
$factarray["ANUL"]	= "Razveljavitev zakona";
$factarray["ASSO"]	= "Znanec";
$factarray["AUTH"]	= "Avtor";
$factarray["BAPL"]	= "LDS krst";
$factarray["BAPM"]	= "Krst";
$factarray["BARM"]	= "Bar Mitzvah";
$factarray["BASM"]	= "Bas Mitzvah";
$factarray["BIRT"]	= "Rojstvo";
$factarray["BLES"]	= "Blagoslov";
$factarray["BLOB"]	= "Podatki binarne oblike";
$factarray["BURI"]	= "Pogreb";
$factarray["CALN"]	= "Klicna številka";
$factarray["CAST"]	= "Kasta / Družbeni položaj";
$factarray["CAUS"]	= "Vzrok smrti";
$factarray["CEME"]      = "Pokopališče";
$factarray["CENS"]	= "Popis prebivalstva";
$factarray["CHAN"]	= "Zadnja sprememba";
$factarray["CHAR"]	= "Nabor znakov";
$factarray["CHIL"]	= "Otrok";
$factarray["CHR"]	= "Krst";
$factarray["CHRA"]	= "Krst odraslega";
$factarray["CITY"]	= "Mesto";
$factarray["CONF"]	= "Potrditev";
$factarray["CONL"]	= "Potrditev LDS";
$factarray["COPR"]	= "Pravica kopiranja";
$factarray["CORP"]	= "Korporacija / Družba";
$factarray["CREM"]	= "Upepelitev";
$factarray["CTRY"]	= "Država";
$factarray["DATA"]	= "Podatki";
$factarray["DATE"]	= "Datum";
$factarray["DEAT"]	= "Smrt";
$factarray["DESC"]	= "Potomci";
$factarray["DESI"]	= "Poklic potomcev";
$factarray["DEST"]	= "Destinacija";
$factarray["DIV"]	= "Ločitev";
$factarray["DIVF"]	= "Zahtevana ločitev";
$factarray["DSCR"]	= "Opis";
$factarray["EDUC"]	= "Izobrazba";
$factarray["EMIG"]	= "Izselitev";
$factarray["ENDL"]	= "Obdaritev LDS";
$factarray["ENGA"]	= "Obveznost";
$factarray["EVEN"]	= "Dogodek";
$factarray["FAM"]	= "Družina";
$factarray["FAMC"]	= "Družina kot otrok";
$factarray["FAMF"]	= "Poročni list";
$factarray["FAMS"]	= "Družina kot soprog/a";
$factarray["FCOM"]	= "Prvotna skupnost";
$factarray["FILE"]	= "Zunanja datoteka";
$factarray["FORM"]	= "Oblika";
$factarray["GIVN"]	= "Ime";
$factarray["GRAD"]	= "Diplomiranje";
$factarray["HUSB"]  	= "Mož";
$factarray["IDNO"]	= "Identifikacijska številka";
$factarray["IMMI"]	= "Priselitev";
$factarray["LEGA"]	= "Dedič";
$factarray["MARB"]	= "Poročno oznanilo";
$factarray["MARC"]	= "Poročna pogodba";
$factarray["MARL"]	= "Poročni list";
$factarray["MARR"]	= "Poroka";
$factarray["MARS"]	= "Poročna poravnava";
$factarray["MEDI"]	= "Tip medija";
$factarray["NAME"]	= "Ime";
$factarray["NATI"]	= "Narodnost";
$factarray["NATU"]	= "Naturalizacija";
$factarray["NCHI"]	= "Število otrok";
$factarray["NICK"]	= "Vzdevek";
$factarray["NMR"]	= "Štvilo porok";
$factarray["NOTE"]	= "Zapisek";
$factarray["NPFX"]	= "Predpona";
$factarray["NSFX"]	= "Pripona";
$factarray["OBJE"]	= "Multimedijski objekt";
$factarray["OCCU"]	= "Poklic";
$factarray["ORDI"]	= "Odlok";
$factarray["ORDN"]	= "Imenovanje";
$factarray["PAGE"]	= "Podrobnosti navedb";
$factarray["PEDI"]	= "Rodovnik";
$factarray["PLAC"]	= "Kraj";
$factarray["PHON"]	= "Telefon";
$factarray["POST"]	= "Poštna številka";
$factarray["PROB"]	= "Overitev oporoke";
$factarray["PROP"]	= "Posest";
$factarray["PUBL"]	= "Publikacija";
$factarray["QUAY"]	= "Kvaliteta podatkov";
$factarray["REPO"]	= "Skladišče";
$factarray["REFN"]	= "Številka sklica";
$factarray["RELA"]	= "Sorodstvo";
$factarray["RELI"]	= "Religija";
$factarray["RESI"]	= "Bivališče";
$factarray["RESN"]	= "Omejitev";
$factarray["RETI"]	= "Upokojitev";
$factarray["RFN"]	= "Številka datoteke zapisa";
$factarray["RIN"]	= "ID zapisa";
$factarray["ROLE"]	= "Vloga";
$factarray["SEX"]	= "Spol";
$factarray["SLGC"]	= "LDS potrditev otroka";
$factarray["SLGS"]	= "LDS potrditev soproga/e";
$factarray["SOUR"]	= "Vir";
$factarray["SPFX"]	= "Predpona priimka";
$factarray["SSN"]	= "Številka zdravstvenega zavarovanja";
$factarray["STAE"]	= "Država";
$factarray["STAT"]	= "Status";
$factarray["SUBM"]	= "Predlagatelj";
$factarray["SUBN"]	= "Predlog";
$factarray["SURN"]	= "Priimek";
$factarray["TEMP"]	= "Svetišče (cerkev)";
$factarray["TEXT"]	= "Besedilo";
$factarray["TIME"]	= "Ura";
$factarray["TITL"]	= "Naziv";
$factarray["TYPE"]	= "Tip";
$factarray["WIFE"]  	= "Žena";
$factarray["WILL"]	= "Oporoka";
$factarray["_EMAIL"]	= "E-poštni naslov";
$factarray["EMAIL"]	= "E-poštni naslov";
$factarray["_TODO"]	= "Za narediti";
$factarray["_UID"]	= "Globalno unikatni identifikator";
$factarray["_PRIM"]	= "Vodilna slika";
$factarray["_DBID"]     = "ID povezane podatkovne baze";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Datum spremembe statusa";
$factarray["DATA:DATE"] = "Date of entry in original source";

$factarray["NAME:_HEB"]		= "Ime v hebrejščini";
$factarray["PLAC:_HEB"]		= "Kraj v hebrejščini";
$factarray["TITL:_HEB"]		= "Naziv v hebrejščini";
$factarray["NAME:ROMN"]		= "Romanizirano ime";
$factarray["PLAC:ROMN"]		= "Romaniziran kraj";
$factarray["TITL:ROMN"]		= "Romaniziran naziv";
$factarray["NAME:FONE"]		= "Fonetično ime";
$factarray["PLAC:FONE"]		= "Fonetičen kraj";
$factarray["TITL:FONE"]		= "Fonetičen naziv";

$factarray["SHARED_NOTE"]	= "Deljen zapisek";

//These facts are compounds for the view probabilities and the advanced search page
$factarray["FAMC:HUSB:SURN"] = "Očetov priimek";
$factarray["FAMC:WIFE:SURN"] = "Mamin priimek";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Očetov rojstni kraj";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Mamin rojstni kraj";
$factarray["FAMC:MARR:PLAC"] = "Mesto poroke staršev";
$factarray["FAMC:HUSB:OCCU"] = "Poklic očeta";
$factarray[":BIRT:PLAC"] = "Rojstni kraj";
$factarray["FAMS:MARR:PLAC"] = "Kraj poroke";
$factarray["FAMS:MARR:DATE"] = "Datum poroke";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Kraj smrti soproga/e";
$factarray["FAMC:HUSB:GIVN"] = "Očetovo ime";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Rojstni kraj soproga/e";
$factarray["FAMC:WIFE:GIVN"] = "Materino ime";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Osebno ime starege očeta";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Osebno ime babice";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Mamino osebno ime starega očeta"; 
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Očetovo osebno ime babice";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Rojstni kraj otroka";
$factarray["FAMS:NOTE"] = "Zapis zakončev";
$factarray["FAMS:CENS:DATE"] = "Datum popisa zakoncev";
$factarray["FAMS:CENS:PLAC"] = "Kraj popisa zakoncev";
$factarray["FAMS:DIV:DATE"] = "Datum ločitve zakoncev";
$factarray["FAMS:DIV:PLAC"] = "Kraj ločitve zakoncev";
$factarray["FAMS:SLGS:DATE"] = "Datum mormonske poroke";
$factarray["FAMS:SLGS:PLAC"] = "Kraj mormonske poroke";
$factarray["FAMS:SLGS:TEMP"] = "Cerkev mormonske poroke";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] = "Kraj rojstva";
$factarray["BIRT:DATE"] = "Datum rojstva";
$factarray["DEAT:PLAC"] = "Kraj smrti";
$factarray["DEAT:DATE"] = "Datum smrti";
$factarray["CHR:PLAC"] = "Kraj krsta";
$factarray["CHR:DATE"] = "Datum krsta";
$factarray["BAPM:PLAC"] = "Kraj krsta";
$factarray["BAPM:DATE"] = "Datum krsta";
$factarray["BURI:PLAC"] = "Kraj pokopa";
$factarray["BURI:DATE"] = "Datum pokopa";
$factarray["MARR:PLAC"] = "Kraj poroke";
$factarray["MARR:DATE"] = "Datum poroke";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"]	= "Zdravnik";
$factarray["_DEG"]	= "Stopnja";
$factarray["_MILT"]	= "Vojaški rok";
$factarray["_SEPR"]	= "Ločen/a";
$factarray["_DETS"]	= "Smrt soproga";
$factarray["CITN"]	= "Državljanstvo";
$factarray["_FA1"]	= "Dejstvo 1";
$factarray["_FA2"]	= "Dejstvo 2";
$factarray["_FA3"]	= "Dejstvo 3";
$factarray["_FA4"]	= "Dejstvo 4";
$factarray["_FA5"]	= "Dejstvo 5";
$factarray["_FA6"]	= "Dejstvo 6";
$factarray["_FA7"]	= "Dejstvo 7";
$factarray["_FA8"]	= "Dejstvo 8";
$factarray["_FA9"]	= "Dejstvo 9";
$factarray["_FA10"]	= "Dejstvo 10";
$factarray["_FA11"]	= "Dejstvo 11";
$factarray["_FA12"]	= "Dejstvo 12";
$factarray["_FA13"]	= "Dejstvo 13";
$factarray["_MREL"]	= "Sorodstvo do matere";
$factarray["_FREL"]	= "Sorodsto do očeta";
$factarray["_MSTAT"]	= "Status začetka poroke";
$factarray["_MEND"]	= "Status konca poroke";
$factarray["_NAMS"]	= "Soimenjak";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] = "Faks";
$factarray["FACT"] = "Dejstvo";
$factarray["WWW"] = "Domača spletna stran";
$factarray["MAP"] = "Karta";
$factarray["LATI"] = "Zemljepisna širina";
$factarray["LONG"] = "Zemljepisna dolžina";
$factarray["FONE"] = "Fonetičen";
$factarray["ROMN"] = "Romanizirana pisava";

// PAF related facts
$factarray["_NAME"] = "Poštni naslov";
$factarray["URL"] = "Omrežni URL";
$factarray["_URL"] = "Omrežni URL";
$factarray["_HEB"] = "hebrejski";
$factarray["_SCBK"] = "Knjiga izrezkov";
$factarray["_TYPE"] = "Tip medija";
$factarray["_SSHOW"] = "Prikaz diapozitivov";

// Rootsmagic
$factarray["_SUBQ"]= "Kratka verzija";
$factarray["_BIBL"] = "Literatura";

// Reunion
$factarray["EMAL"]	= "E-poštni naslov";

// Other common customized facts
$factarray["_ADPF"]	= "Posvojen po očetu";
$factarray["_ADPM"]	= "Posvojen po materi";
$factarray["_AKAN"]	= "Znan tudi kot";
$factarray["_AKA"] 	= "Znan tudi kot";
$factarray["_BRTM"]	= "Brit Mila";
$factarray["_COML"]	= "Civilna poroka";
$factarray["_EYEC"]	= "Barva oči";
$factarray["_FNRL"]	= "Pogreb";
$factarray["_HAIR"]	= "Barva las";
$factarray["_HEIG"]	= "Višina";
$factarray["_HOL"]      = "Holokaust";
$factarray["_INTE"]	= "Pokop";
$factarray["_MARI"]	= "Namen poroke";
$factarray["_MBON"]	= "Poročna zaveza";
$factarray["_MEDC"]	= "Zdravstveno stanje";
$factarray["_MILI"]	= "Vojska";
$factarray["_NMR"]	= "Neporočen/a";
$factarray["_NLIV"]	= "Neživeč/a";
$factarray["_NMAR"]	= "Nikoli poročen/a";
$factarray["_PRMN"]	= "Trajna številka";
$factarray["_WEIG"]	= "Teža";
$factarray["_YART"]	= "jehova";
$factarray["_MARNM"] = "Poročno ime";
$factarray["_MARNM_SURN"] = "Poročni priimek";
$factarray["_STAT"]	= "Status poroke";
$factarray["COMM"]	= "Komentar";

// Aldfaer related facts
$factarray["MARR_CIVIL"] = "Civilna poroka";
$factarray["MARR_RELIGIOUS"] = "Cerkvena poroka";
$factarray["MARR_PARTNERS"] = "Prijavljeno partnerstvo";
$factarray["MARR_UNKNOWN"] = "Tip poroke neznan";

$factarray["_HNM"] = "Hebrew Name";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "Smrt soproga";
$factarray["_BURI_SPOU"] = "Pokop soproga";
$factarray["_CREM_SPOU"] = "Upepelitev soproga";

$factarray["_BIRT_CHIL"] = "Rojstvo otroka";
$factarray["_CHR_CHIL"] = "Krst otroka";
$factarray["_BAPM_CHIL"] = "Baptizem otroka";
$factarray["__BRTM_CHIL"] = "Brit Mila otroka";
$factarray["_ADOP_CHIL"] = "Posvojitev otroka";
$factarray["_MARR_CHIL"] = "Poroka otroka";
$factarray["_MARB_CHIL"] = "Oznanilo o poroki otroka";
$factarray["_DEAT_CHIL"] = "Smrt otroka";
$factarray["_BURI_CHIL"] = "Pokop otroka";
$factarray["_CREM_CHIL"] = "Upepelitev otroka";

$factarray["_BIRT_GCHI"] = "Rojstvo vnuka";
$factarray["_CHR_GCHI"] = "Krst vnuka";
$factarray["_BAPM_GCHI"] = "Krst vnuka";
$factarray["__BRTM_GCHI"] = "Brit Mila vnuka";
$factarray["_ADOP_GCHI"] = "Posvojitev vnuka";
$factarray["_MARR_GCHI"] = "Poroka vnuka";
$factarray["_MARB_GCHI"] = "Oznanilo o poroki vnuka";
$factarray["_DEAT_GCHI"] = "Smrt vnuka";
$factarray["_BURI_GCHI"] = "Pokop vnuka";
$factarray["_CREM_GCHI"] = "Upepelitev vnuka";

$factarray["_BIRT_GGCH"] = "Rojstvo pravnuk";
$factarray["_CHR_GGCH"] = "Krst pravnuka";
$factarray["_BAPM_GGCH"] = "Krst pravnuka";
$factarray["__BRTM_GGCH"] = "Brit Mila pravnuka";
$factarray["_ADOP_GGCH"] = "Posvojitev pravnuka";
$factarray["_MARR_GGCH"] = "Poroka pravnuka";
$factarray["_MARB_GGCH"] = "Oznanilo poroke pravnuka";
$factarray["_DEAT_GGCH"] = "Smrt pravnuka";
$factarray["_BURI_GGCH"] = "Pokop pravnuka";
$factarray["_CREM_GGCH"] = "Upepelitev pravnuka";

$factarray["_MARR_FATH"] = "Poroka očeta";
$factarray["_MARB_FATH"] = "Oznanilo poroke očeta";
$factarray["_DEAT_FATH"] = "Smrt očeta";
$factarray["_BURI_FATH"] = "Pokop očeta";
$factarray["_CREM_FATH"] = "Upepelitev očeta";

$factarray["_MARR_FAMC"] = "Poroka staršev";
$factarray["_MARB_FAMC"] = "Oznanilo poroke staršev";

$factarray["_MARR_MOTH"] = "Poroka matere";
$factarray["_MARB_MOTH"] = "Oznanilo poroke matere";
$factarray["_DEAT_MOTH"] = "Smrt matere";
$factarray["_BURI_MOTH"] = "Pokop matere";
$factarray["_CREM_MOTH"] = "Upepelitev matere";

$factarray["_BIRT_SIBL"] = "Rojstvo brata/sestre";
$factarray["_CHR_SIBL"] = "Krst brata/sestre";
$factarray["_BAPM_SIBL"] = "Krst brata/sestre";
$factarray["__BRTM_SIBL"] = "Brit Mila brata/sestre";
$factarray["_ADOP_SIBL"] = "Posvojitev brata/sestre";
$factarray["_MARR_SIBL"] = "Poroka brata/sestre";
$factarray["_MARB_SIBL"] = "Oznanilo poroke brata/sestre";
$factarray["_DEAT_SIBL"] = "Smrt brata/sestre";
$factarray["_BURI_SIBL"] = "Pokop brata/sestre";
$factarray["_CREM_SIBL"] = "Upepelitev brata/sestre";

$factarray["_BIRT_HSIB"] = "Rojstvo polbrata/polsestre";
$factarray["_CHR_HSIB"] = "Krst polbrata/polsestre";
$factarray["_BAPM_HSIB"] = "Krst polbrata/polsestre";
$factarray["__BRTM_HSIB"] = "Brit Mila polbrata/polsestre";
$factarray["_ADOP_HSIB"] = "Posvojitev polbrata/polsestre";
$factarray["_MARR_HSIB"] = "Poroka polbrata/polsestre";
$factarray["_MARB_HSIB"] = "Oznanilo poroke polbrata/polsestre";
$factarray["_DEAT_HSIB"] = "Smrt polbrata/polsestre";
$factarray["_BURI_HSIB"] = "Pokop polbrata/polsestre";
$factarray["_CREM_HSIB"] = "Upepelitev polbrata/polsestre";

$factarray["_BIRT_NEPH"] = "Rojstvo nečaka ali nečakinje";
$factarray["_CHR_NEPH"] = "Krst nečaka ali nečakinje";
$factarray["_BAPM_NEPH"] = "Krst nečaka ali nečakinje";
$factarray["__BRTM_NEPH"] = "Brit Mila a nephew";
$factarray["_ADOP_NEPH"] = "Posvojitev nečaka ali nečakinje";
$factarray["_MARR_NEPH"] = "Poroka nečaka ali nečakinje";
$factarray["_MARB_NEPH"] = "Oznanilo poroke nečaka ali nečakinje";
$factarray["_DEAT_NEPH"] = "Smrt nečaka ali nečakinje";
$factarray["_BURI_NEPH"] = "Pokop nečaka ali nečakinje";
$factarray["_CREM_NEPH"] = "Upepelitev nečaka ali nečakinje";

$factarray["_DEAT_GPAR"] = "Smrt prastarša";
$factarray["_BURI_GPAR"] = "Pokop prastarša";
$factarray["_CREM_GPAR"] = "Upepelitev prastarša";

$factarray["_DEAT_GGPA"] = "Smrt praprastarša";
$factarray["_BURI_GGPA"] = "Pokop praprastarša";
$factarray["_CREM_GGPA"] = "Upepelitev praprastarša";

$factarray["_BIRT_FSIB"] = "Rojstvo očetovega brata/sestre";
$factarray["_CHR_FSIB"] = "Krst očetovega brata/sestre";
$factarray["_BAPM_FSIB"] = "Krst očetovega brata/sestre";
$factarray["__BRTM_FSIB"] = "Brit Mila očetovega brata/sestre";
$factarray["_ADOP_FSIB"] = "Posvojitev očetovega brata/sestre";
$factarray["_MARR_FSIB"] = "Poroka očetovega brata/sestre";
$factarray["_MARB_FSIB"] = "Oznanilo poroke očetovega brata/sestre";
$factarray["_DEAT_FSIB"] = "Smrt očetovega brata/sestre";
$factarray["_BURI_FSIB"] = "Pokop očetovega brata/sestre";
$factarray["_CREM_FSIB"] = "Upepelitev očetovega brata/sestre";

$factarray["_BIRT_MSIB"] = "Rojstvo materine sestre/brata";
$factarray["_CHR_MSIB"] = "Krst materine sestre/brata";
$factarray["_BAPM_MSIB"] = "Krst materine sestre/brata";
$factarray["__BRTM_MSIB"] = "Brit Mila materine sestre/brata";
$factarray["_ADOP_MSIB"] = "Posvojitev materine sestre/brata";
$factarray["_MARR_MSIB"] = "Poroka materine sestre/brata";
$factarray["_MARB_MSIB"] = "Oznanilo poroke materine sestre/brata";
$factarray["_DEAT_MSIB"] = "Smrt materine sestre/brata";
$factarray["_BURI_MSIB"] = "Pokop materine sestre/brata";
$factarray["_CREM_MSIB"] = "Upepelitev materine sestre/brata";

$factarray["_BIRT_COUS"] = "Rojstvo bratranca/sestrične";
$factarray["_CHR_COUS"]  = "Krst bratranca/sestrične";
$factarray["_BAPM_COUS"] = "Krst bratranca/sestrične";
$factarray["__BRTM_COUS"] = "Brit Mila bratranca/sestrične";
$factarray["_ADOP_COUS"] = "Posvojitev bratranca/sestrične";
$factarray["_MARR_COUS"] = "Poroka bratranca/sestrične";
$factarray["_MARB_COUS"] = "Oznanilo poroke bratranca/sestrične";
$factarray["_DEAT_COUS"] = "Smrt bratranca/sestrične";
$factarray["_BURI_COUS"] = "Pokop bratranca/sestrične";
$factarray["_CREM_COUS"] = "Upepelitev bratranca/sestrične";

$factarray["_FAMC_EMIG"] = "Izselitev staršev";
$factarray["_FAMC_RESI"] = "Domovanje staršev";

//-- PGV Only facts
$factarray["_THUM"]	= "Uporabi kot sličico?";
$factarray["_PGVU"]	= " "; // last changed by
$factarray["SERV"] = "Oddaljeni strežnik";
$factarray["_GEDF"] = "GEDCOM datoteka";

/*-- Fact abbreviations for use in Chart boxes.  
 *		Use these abbreviations in cases where the standard method using the first
 *		letter the spelled-out name results in an undesirable abbreviation or where
 *		you want to produce a different result (eg: "x" instead "M" for "Married").
 *
 *		You can abbreviate any Fact label this way.  The list abbreviations is
 *		open-ended.
 *
 *		These abbreviations are user-customizable. Just put them into file "extra.xx.php".
 *		The length of these abbreviations is not restricted to 1 letter.
 */
 
/*-- The following lines have been commented out.  They should serve as examples. 
 
$factAbbrev["BIRT"]		= "R";
$factAbbrev["MARR"]		= "P";
$factAbbrev["DEAT"]		= "S";

 */

$factarray["_WEB"] = "Spletna stran";
$factarray["_DCAUSE"] = "Vzrok smrti";
$factarray["Address-skupni"] = "Skupni naslov";
$factarray["address-share"] = "Skupni naslov";
$factarray["Phone Number-shared"] = "Skupna tel. številka";
?>
