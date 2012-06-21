<?php
/**
 * Romanian Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team
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
 * @author Uifălean Mircea
 * @package PhpGedView
 * @version $Id: facts.ro.php 4222 2008-11-02 01:33:01Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Definire array cu fapte pentru a mapa taguri GEDCOM cu valorile lor în română
$factarray["ABBR"]	= "Abreviere";
$factarray["ADDR"]	= "Adresă";
$factarray["ADR1"]	= "Adresă 1";
$factarray["ADR2"]	= "Adresă 2";
$factarray["ADOP"]	= "Adopţie";
$factarray["AFN"]	= "Număr fişier ancestral (AFN)";
$factarray["AGE"]	= "Vârsta";
$factarray["AGNC"]	= "Agenţie";
$factarray["ALIA"]	= "Alias";
$factarray["ANCE"]	= "Strămoşi";
$factarray["ANCI"]	= "Interesele strămoşilor";
$factarray["ANUL"]	= "Reziliere";
$factarray["ASSO"]	= "Asociază";
$factarray["AUTH"]	= "Autor";
$factarray["BAPL"]	= "Botez LDS";
$factarray["BAPM"]	= "Botez";
$factarray["BARM"]	= "Bar Mitzvah";
$factarray["BASM"]	= "Bas Mitzvah";
$factarray["BIRT"]	= "Data naşterii";
$factarray["BLES"]	= "Binecuvântare";
$factarray["BLOB"]	= "Obiect date binare";
$factarray["BURI"]	= "Înmormântare";
$factarray["CALN"]	= "Număr apel";
$factarray["CAST"]	= "Castă / Statut social";
$factarray["CAUS"]	= "Cauza decesului";
$factarray["CEME"]	= "Cimitir";
$factarray["CENS"]	= "Recensământ";
$factarray["CHAN"]	= "Ultima modificare";
$factarray["CHAR"]	= "Setul de caractere";
$factarray["CHIL"]	= "Copil";
$factarray["CHR"]	= "Botezare";
$factarray["CHRA"]	= "Botezare adult";
$factarray["CITY"]	= "Oraş";
$factarray["CONF"]	= "Confirmare";
$factarray["CONL"]	= "Confirmare LDS";
$factarray["COPR"]	= "Drepturi de autor";
$factarray["CORP"]	= "Corporaţie / Companie";
$factarray["CREM"]	= "Incinerare";
$factarray["CTRY"]	= "Ţară";
$factarray["DATA"]	= "Date";
$factarray["DATE"]	= "Data";
$factarray["DEAT"]	= "Dată deces";
$factarray["DESC"]	= "Descendenţi";
$factarray["DESI"]	= "Interesele descendenţilor";
$factarray["DEST"]	= "Destinaţie";
$factarray["DIV"]	= "Divorţ";
$factarray["DIVF"]	= "Înaintare divorţ";
$factarray["DSCR"]	= "Descriere";
$factarray["EDUC"]	= "Educaţie";
$factarray["EMIG"]	= "Emigrare";
$factarray["ENDL"]	= "Dotare (LDS)";
$factarray["ENGA"]	= "Logodnă";
$factarray["EVEN"]	= "Eveniment";
$factarray["FAM"]	= "Familie";
$factarray["FAMC"]	= "Familie ca şi copil";
$factarray["FAMF"]	= "Fişier familie";
$factarray["FAMS"]	= "Familie ca şi soţ";
$factarray["FCOM"]	= "Prima împărtăşanie";
$factarray["FILE"]	= "Fişier extern";
$factarray["FORM"]	= "Format";
$factarray["GIVN"]	= "Prenume";
$factarray["GRAD"]	= "Absolvire";
$factarray["HUSB"]	= "Soţ";
$factarray["IDNO"]	= "Număr identificare";
$factarray["IMMI"]	= "Imigrare";
$factarray["LEGA"]	= "Moştenitor";
$factarray["MARB"]	= "Interzicere căsătorie";
$factarray["MARC"]	= "Contract căsătorie";
$factarray["MARL"]	= "Licenţă căsătorie";
$factarray["MARR"]	= "Căsătorie";
$factarray["MARS"]	= "Acord căsătorie";
$factarray["MEDI"]	= "Tip media";
$factarray["NAME"]	= "Nume";
$factarray["NATI"]	= "Naţionalitate";
$factarray["NATU"]	= "Naturalizare";
$factarray["NCHI"]	= "Numărul de copii";
$factarray["NICK"]	= "Porecla";
$factarray["NMR"]	= "Număr căsătorii";
$factarray["NOTE"]	= "Notă";
$factarray["NPFX"]	= "Prefix";
$factarray["NSFX"]	= "Sufix";
$factarray["OBJE"]	= "Obiect multimedia";
$factarray["OCCU"]	= "Ocupaţie";
$factarray["ORDI"]	= "Ordonanţă";
$factarray["ORDN"]	= "Hirotonisire";
$factarray["PAGE"]	= "Detalii citaţie";
$factarray["PEDI"]	= "Arborele de familie";
$factarray["PLAC"]	= "Localitate";
$factarray["PHON"]	= "Telefon";
$factarray["POST"]	= "Cod poştal";
$factarray["PROB"]	= "Validare";
$factarray["PROP"]	= "Proprietate";
$factarray["PUBL"]	= "Publicaţie";
$factarray["QUAY"]	= "Calitatea informaţiei";
$factarray["REPO"]	= "Depozit";
$factarray["REFN"]	= "Număr referinţă";
$factarray["RELA"]	= "Înrudire";
$factarray["RELI"]	= "Religie";
$factarray["RESI"]	= "Domiciliu";
$factarray["RESN"]	= "Restricţie";
$factarray["RETI"]	= "Pensionare";
$factarray["RFN"]	= "Număr fişier înregistrare";
$factarray["RIN"]	= "Număr ID înregistrare";
$factarray["ROLE"]	= "Rol";
$factarray["SEX"]	= "Sex";
$factarray["SLGC"]	= "(LDS) Sigiliu copil";
$factarray["SLGS"]	= "(LDS) Sigiliu soţ";
$factarray["SOUR"]	= "Sursă";
$factarray["SPFX"]	= "Prefix prenume";
$factarray["SSN"]	= "Număr asigurare socială";
$factarray["STAE"]	= "Stat";
$factarray["STAT"]	= "Statut";
$factarray["SUBM"]	= "Aplicant";
$factarray["SUBN"]	= "Aplicaţie";
$factarray["SURN"]	= "Nume familie";
$factarray["TEMP"]	= "Templu";
$factarray["TEXT"]	= "Text";
$factarray["TIME"]	= "Ora";
$factarray["TITL"]	= "Titlu";
$factarray["TYPE"]	= "Tip";
$factarray["WIFE"]	= "Soţie";
$factarray["WILL"]	= "Testament";
$factarray["_EMAIL"]	= "Adresă email";
$factarray["EMAIL"]	= "Adresă email";
$factarray["_TODO"]	= "Articol de făcut";
$factarray["_UID"]	= "Identificator Universal";
$factarray["_PRIM"]	= "Imagine evidenţiată";
$factarray["_DBID"]	= "ID-ul bazei de date legată";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Dată schimbare statut";

//These facts are compounds for the view probabilities page
$factarray["FAMC:HUSB:SURN"] = "Numele tatălui";
$factarray["FAMC:WIFE:SURN"] = "Numele mamei";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Locul naşterii tatălui";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Locul naşterii mamei";
$factarray["FAMC:MARR:PLAC"] = "Locul căsătoriei părinţilor";
$factarray["FAMC:HUSB:OCCU"] = "Ocupaţia tatălui";
$factarray[":BIRT:PLAC"] = "Locul naşterii";
$factarray["FAMS:MARR:PLAC"] = "Locul căsătoriei";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Locul decesului soţului/soţiei";
$factarray["FAMC:HUSB:GIVN"] = "Prenumele tatălui";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Locul naşterii soţului";
$factarray["FAMC:WIFE:GIVN"] = "Prenumele mamei";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Prenumele bunicului din partea tatălui";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Prenumele bunicii din partea mamei";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Prenumele bunicului din partea mamei"; 
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Prenumele bunicii din partea tatălui";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Locul naşterii copilului";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] = "Locul naşterii";
$factarray["DEAT:PLAC"] = "Locul decesului";
$factarray["CHR:PLAC"] = "Locul botezului";
$factarray["BAPM:PLAC"] = "Locul botezului";
$factarray["BURI:PLAC"] = "Locul înmormântării";
$factarray["MARR:PLAC"] = "Locul căsătoriei";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"]	= "Medical";
$factarray["_DEG"]	= "Grad";
$factarray["_MILT"]	= "Serviciu militar";
$factarray["_SEPR"]	= "Separat";
$factarray["_DETS"]	= "Moartea unu(e)i soţ(ii)";
$factarray["CITN"]	= "Cetăţenie";
$factarray["_FA1"]	= "Fapt 1";
$factarray["_FA2"]	= "Fapt 2";
$factarray["_FA3"]	= "Fapt 3";
$factarray["_FA4"]	= "Fapt 4";
$factarray["_FA5"]	= "Fapt 5";
$factarray["_FA6"]	= "Fapt 6";
$factarray["_FA7"]	= "Fapt 7";
$factarray["_FA8"]	= "Fapt 8";
$factarray["_FA9"]	= "Fapt 9";
$factarray["_FA10"]	= "Fapt 10";
$factarray["_FA11"]	= "Fapt 11";
$factarray["_FA12"]	= "Fapt 12";
$factarray["_FA13"]	= "Fapt 13";
$factarray["_MREL"]	= "Înrudire cu mama";
$factarray["_FREL"]	= "Înrudire cu tata";
$factarray["_MSTAT"]	= "Statut început căsătorie";
$factarray["_MEND"]	= "Statut încheiere căsătorie";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] = "FAX";
$factarray["FACT"] = "Fapt";
$factarray["WWW"] = "Site";
$factarray["MAP"] = "Hartă";
$factarray["LATI"] = "Latitudine";
$factarray["LONG"] = "Longitudine";
$factarray["FONE"] = "Fonetic";
$factarray["ROMN"] = "Romanizat";

// PAF related facts
$factarray["_NAME"] = "Nume";
$factarray["URL"] = "Adresă site";
$factarray["_URL"] = "Adresă site";
$factarray["_HEB"] = "Ebraic";
$factarray["_SCBK"] = "Album";
$factarray["_TYPE"] = "Tip media";
$factarray["_SSHOW"] = "Prezentare";

// Rootsmagic
$factarray["_SUBQ"]= "Versiune prescurtată";
$factarray["_BIBL"] = "Bibliografie";

// Reunion
$factarray["EMAL"]	= "Adresă Email";

// Other common customized facts
$factarray["_ADPF"]	= "Adoptat de către tată";
$factarray["_ADPM"]	= "Adoptat de către mamă";
$factarray["_AKAN"]	= "Nume alternativ";
$factarray["_AKA"] 	= "Nume alternativ";
$factarray["_BRTM"]	= "Circumcizie";
$factarray["_COML"]	= "Căsătorie civilă";
$factarray["_EYEC"]	= "Culoarea ochilor";
$factarray["_FNRL"]	= "Înmormântare";
$factarray["_HAIR"]	= "Culoarea părului";
$factarray["_HEIG"]	= "Înălţime";
$factarray["_HOL"]	= "Holocaust";
$factarray["_INTE"]	= "Înmormântare";
$factarray["_MARI"]	= "Intenţie de căsătorie";
$factarray["_MBON"]	= "Legătură prin căsătorie";
$factarray["_MEDC"]	= "Condiţie medicală";
$factarray["_MILI"]	= "Militar";
$factarray["_NMR"]	= "Necăsătorit";
$factarray["_NLIV"]	= "Decedat";
$factarray["_NMAR"]	= "Necăsătorit până în prezent";
$factarray["_PRMN"]	= "Număr permanent";
$factarray["_WEIG"]	= "Greutate";
$factarray["_YART"]	= "Yahrzeit";
$factarray["_MARNM"]	= "Prenume după căsătorie";
$factarray["_MARNM_SURN"] = "Nume după căsătorie";
$factarray["_STAT"]	= "Statut marital";
$factarray["COMM"]	= "Comentariu";

// Aldfaer related facts
$factarray["MARR_CIVIL"] = "Cununia civilă";
$factarray["MARR_RELIGIOUS"] = "Cununia religioasă";
$factarray["MARR_PARTNERS"] = "Parteneriat înregistrat";
$factarray["MARR_UNKNOWN"] = "Tip de căsătorie necunoscut";

$factarray["_HNM"] = "Nume ebraic";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "Decesul soţului/soţiei";

$factarray["_BIRT_CHIL"] = "Naşterea unui copil";
$factarray["_MARR_CHIL"] = "Căsătoria unui copil";
$factarray["_DEAT_CHIL"] = "Decesul unui copil";

$factarray["_BIRT_GCHI"] = "Naşterea unui nepot";
$factarray["_MARR_GCHI"] = "Căsătoria unui nepot";
$factarray["_DEAT_GCHI"] = "Decesul unui nepot";

$factarray["_BIRT_GGCH"] = "Birth of a great-grandchild";
$factarray["_MARR_GGCH"] = "Marriage of a great-grandchild";
$factarray["_DEAT_GGCH"] = "Death of a great-grandchild";

$factarray["_MARR_FATH"] = "Căsătoria tatălui";
$factarray["_DEAT_FATH"] = "Decesul tatălui";

$factarray["_MARR_MOTH"] = "Căsătoria mamei";
$factarray["_DEAT_MOTH"] = "Decesul mamei";

$factarray["_BIRT_SIBL"] = "Naşterea unui frate";
$factarray["_MARR_SIBL"] = "Căsătoria unui frate";
$factarray["_DEAT_SIBL"] = "Decesul unui frate";

$factarray["_BIRT_HSIB"] = "Naşterea unui frate vitreg";
$factarray["_MARR_HSIB"] = "Căsătoria unui frate vitreg";
$factarray["_DEAT_HSIB"] = "Decesul unui frate vitreg";

$factarray["_BIRT_NEPH"] = "Naşterea unui nepot sau nepoate";
$factarray["_MARR_NEPH"] = "Căsătoria unui nepot sau nepoate";
$factarray["_DEAT_NEPH"] = "Decesul unui nepot sau nepoate";

$factarray["_DEAT_GPAR"] = "Decesul unui/unei bunic/bunici";

$factarray["_DEAT_GGPA"] = "Decesul unui/unei străbunic/străbunică";

$factarray["_BIRT_FSIB"] = "Naşterea unui frate sau a unei surori de-a tatălui";
$factarray["_MARR_FSIB"] = "Căsătoria unui frate sau a unei surori de-a tatălui";
$factarray["_DEAT_FSIB"] = "Decesul unui frate sau a unei surori de-a tatălui";

$factarray["_BIRT_MSIB"] = "Naşterea unui frate sau a unei surori de-a mamei";
$factarray["_MARR_MSIB"] = "Căsătoria unui frate sau a unei surori de-a mamei";
$factarray["_DEAT_MSIB"] = "Decesul unui frate sau a unei surori de-a mamei";

$factarray["_BIRT_COUS"] = "Naşterea unui văr sau verişoară dulce";
$factarray["_MARR_COUS"] = "Căsătoria unui văr sau verişoară dulce";
$factarray["_DEAT_COUS"] = "Decesul unui văr sau verişoară dulce";

$factarray["_FAMC_EMIG"] = "Emigrarea părinţilor";
$factarray["_FAMC_RESI"] = "Rezidenţa părinţilor";

//-- PGV Only facts
$factarray["_THUM"]	= "Folosiţi această imagine ca şi icoană ?";
$factarray["_PGVU"]	= "de către"; // last changed by
$factarray["SERV"]	= "Server de la distanţă";
$factarray["_GEDF"]	= "Fişier GEDCOM";

?>
