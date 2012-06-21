<?php
/**
 * Dutch Language file for PhpGedView.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2010  PGV Development Team.  All rights reserved.
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
 * @authors Erik Bent, Jans B. Luder, Boudewijn Sjouke, Eduard Wustenveld
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Dutch values
$factarray["ABBR"] 		= "Afkorting";
$factarray["ADDR"] 		= "Adres";
$factarray["ADR1"] 		= "Adres 1";
$factarray["ADR2"] 		= "Adres 2";
$factarray["ADOP"] 		= "Adoptie";
$factarray["AFN"] 		= "Bestandsnummer stamvaders (AFN)";
$factarray["AGE"] 		= "Leeftijd";
$factarray["AGNC"] 		= "Instantie";
$factarray["ALIA"] 		= "Verwijzing";
$factarray["ANCE"] 		= "Voorouders";
$factarray["ANCI"] 		= "Onderzoek naar voorouders";
$factarray["ANUL"] 		= "Vernietiging";
$factarray["ASSO"] 		= "Gerelateerd persoon";
$factarray["AUTH"] 		= "Auteur";
$factarray["BAPL"] 		= "HLD Doop";
$factarray["BAPM"] 		= "Gedoopt";
$factarray["BARM"] 		= "Bar mitswa";
$factarray["BASM"] 		= "Bas mitswa";
$factarray["BIRT"] 		= "Geboorte";
$factarray["BLES"] 		= "Zegening";
$factarray["BLOB"] 		= "Binaire data";
$factarray["BURI"] 		= "Begrafenis";
$factarray["CALN"] 		= "Inventarisnummer";
$factarray["CAST"] 		= "Kaste / sociale status";
$factarray["CAUS"] 		= "Doodsoorzaak";
$factarray["CEME"]  	= "Begraafplaats";
$factarray["CENS"] 		= "Volkstelling";
$factarray["CHAN"] 		= "Laatste wijziging";
$factarray["CHAR"] 		= "Karakterset";
$factarray["CHIL"] 		= "Kind";
$factarray["CHR"] 		= "Doop";
$factarray["CHRA"] 		= "Volwassen doop";
$factarray["CITY"] 		= "Stad";
$factarray["CONF"] 		= "Bevestiging";
$factarray["CONL"] 		= "HLD bevestiging";
$factarray["COPR"] 		= "Copyright";
$factarray["CORP"] 		= "Bedrijf";
$factarray["CREM"] 		= "Crematie";
$factarray["CTRY"] 		= "Land";
$factarray["DATA"] 		= "Data";
$factarray["DATE"] 		= "Datum";
$factarray["DEAT"] 		= "Overleden";
$factarray["DESC"] 		= "Nakomelingen";
$factarray["DESI"] 		= "Onderzoek naar nakomelingen";
$factarray["DEST"] 		= "Bestemming";
$factarray["DIV"] 		= "Scheiding";
$factarray["DIVF"] 		= "Scheiding ingediend";
$factarray["DSCR"] 		= "Fysieke beschrijving";
$factarray["EDUC"] 		= "Opleiding";
$factarray["EMIG"] 		= "Emigratie";
$factarray["ENDL"] 		= "HLD gave";
$factarray["ENGA"] 		= "Verloving";
$factarray["EVEN"] 		= "Gebeurtenis";
$factarray["FAM"] 		= "Gezin";
$factarray["FAMC"] 		= "Gezinsleden van kind";
$factarray["FAMF"] 		= "Gezinsbestand";
$factarray["FAMS"] 		= "Gezinsleden van ega";
$factarray["FCOM"] 		= "Eerste communie";
$factarray["FILE"] 		= "Extern bestand";
$factarray["FORM"] 		= "Formaat";
$factarray["GIVN"] 		= "Voorna(a)m(en)";
$factarray["GRAD"] 		= "Geslaagd";
$factarray["HUSB"]  	= "Partner";
$factarray["IDNO"] 		= "Identificatienummer";
$factarray["IMMI"] 		= "Immigratie";
$factarray["LEGA"] 		= "Legataris";
$factarray["MARB"] 		= "Ondertrouw";
$factarray["MARC"] 		= "Huwelijkscontract";
$factarray["MARL"]		= "Huwelijkstoestemming";
$factarray["MARR"]		= "Huwelijk";
$factarray["MARS"] 		= "Huwelijksvoorwaarden";
$factarray["MEDI"]		= "Multimediatype";
$factarray["NAME"] 		= "Naam";
$factarray["NATI"] 		= "Nationaliteit";
$factarray["NATU"] 		= "Naturalisatie";
$factarray["NCHI"] 		= "Aantal kinderen";
$factarray["NICK"] 		= "Roepnaam";
$factarray["NMR"] 		= "Aantal huwelijken";
$factarray["NOTE"] 		= "Notitie";
$factarray["NPFX"] 		= "Voorvoegsel";
$factarray["NSFX"] 		= "Achtervoegsel";
$factarray["OBJE"] 		= "Multimedia-object";
$factarray["OCCU"] 		= "Beroep";
$factarray["ORDI"] 		= "Ritueel";
$factarray["ORDN"] 		= "Wijding";
$factarray["PAGE"] 		= "Details citaat";
$factarray["PEDI"] 		= "Kwartierstaat";
$factarray["PLAC"] 		= "Plaats";
$factarray["PHON"] 		= "Telefoon";
$factarray["POST"] 		= "Postcode";
$factarray["PROB"] 		= "Wilserkenning";
$factarray["PROP"] 		= "Eigendom";
$factarray["PUBL"] 		= "Publicatie";
$factarray["QUAY"] 		= "Kwaliteit van de gegevens";
$factarray["REPO"] 		= "Bewaarplaats";
$factarray["REFN"] 		= "Referentienummer";
$factarray["RELA"]		= "Relatie";
$factarray["RELI"] 		= "Religie";
$factarray["RESI"] 		= "Woonplaats";
$factarray["RESN"] 		= "Beperking";
$factarray["RETI"] 		= "Pensioen";
$factarray["RFN"] 		= "Record bestandsnummer";
$factarray["RIN"] 		= "Record ID nummer";
$factarray["ROLE"] 		= "Rol";
$factarray["SEX"] 		= "Geslacht";
$factarray["SLGC"] 		= "HLD kind verzegeling";
$factarray["SLGS"] 		= "HLD ega verzegeling";
$factarray["SOUR"] 		= "Bron";
$factarray["SPFX"] 		= "Voorvoegsel achternaam";
$factarray["SSN"] 		= "SOFI nummer";
$factarray["STAE"] 		= "Staat";
$factarray["STAT"] 		= "Status";
$factarray["SUBM"] 		= "Aangeleverd door";
$factarray["SUBN"] 		= "Aanlevering";
$factarray["SURN"] 		= "Achternaam";
$factarray["TEMP"] 		= "Tempel";
$factarray["TEXT"] 		= "Tekst";
$factarray["TIME"] 		= "Tijd";
$factarray["TITL"] 		= "Titel";
$factarray["TYPE"] 		= "Type";
$factarray["WIFE"]  	= "Partner";
$factarray["WILL"] 		= "Testament";
$factarray["_EMAIL"]	= "E-mailadres";
$factarray["EMAIL"] 	= "E-mailadres";
$factarray["_TODO"] 	= "Te doen";
$factarray["_UID"] 		= "Universeel kenmerk (UID)";
$factarray["_PRIM"]		= "Geaccentueerde afbeelding";
$factarray["_DBID"] 	= "Gekoppelde database ID";

// These facts are used in specific contexts
$factarray["STAT:DATE"] 	= "Datum van Status Wijziging";
$factarray["DATA:DATE"] 	= "Invoerdatum in orginele bron";

$factarray["NAME:_HEB"]		= "Naam in Hebreeuws";
$factarray["PLAC:_HEB"]		= "Plaats in Hebreeuws";
$factarray["TITL:_HEB"]		= "Titel in Hebreeuws";
$factarray["NAME:ROMN"]		= "Geromaniseerde Naam";
$factarray["PLAC:ROMN"]		= "Geromaniseerde Plaats";
$factarray["TITL:ROMN"]		= "Geromaniseerde Titel";
$factarray["NAME:FONE"]		= "Phonetische Naam";
$factarray["PLAC:FONE"]		= "Phonetische Plaats";
$factarray["TITL:FONE"]		= "Phonetische Titel";

$factarray["SHARED_NOTE"]	= "Gedeelde Notitie";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"] 			= "Vader's Achternaam";
$factarray["FAMC:WIFE:SURN"] 			= "Moeder's Achternaam";
$factarray["FAMC:HUSB:BIRT:PLAC"] 		= "Vader's Geboorteplaats";
$factarray["FAMC:WIFE:BIRT:PLAC"] 		= "Moeder's Geboorteplaats";
$factarray["FAMC:MARR:PLAC"] 			= "Ouders' Huwelijks plaats";
$factarray["FAMC:HUSB:OCCU"] 			= "Vader's Beroep";
$factarray[":BIRT:PLAC"] 				= "Geboorteplaats";
$factarray["FAMS:MARR:DATE"] 			= "Huwelijks datum";
$factarray["FAMS:MARR:PLAC"] 			= "Huwelijks plaats";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] 	= "Partner's Plaats v. overlijden";
$factarray["FAMC:HUSB:GIVN"] 			= "Vader's Voornaam";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] 	= "Partner's Geboorteplaats";
$factarray["FAMC:WIFE:GIVN"] 			= "Moeder's Voornaam";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] 	= "(Vaders zijde) Grootvader's Voornaam";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] 	= "(Moeders zijde) Grootmoeder's Voornaam";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] 	= "(Moeders zijde) Grootvader's Voornaam"; 
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] 	= "(Vaders zijde) Grootmoeder's Voornaam";
$factarray["FAMS:CHIL:BIRT:PLAC"] 		= "Geboorteplaats Kind";
$factarray["FAMS:NOTE"] 				= "Partner's Notitie";
$factarray["FAMS:CENS:DATE"] 			= "Partner's Volkstelling Datum";
$factarray["FAMS:CENS:PLAC"] 			= "Partner's Volkstelling Plaats";
$factarray["FAMS:DIV:DATE"] 			= "Partner's Scheidings Datum";
$factarray["FAMS:DIV:PLAC"] 			= "Partner's Scheidings Plaats";
$factarray["FAMS:SLGS:DATE"] 			= "HLD Partner's Verzegeling Datum";
$factarray["FAMS:SLGS:PLAC"] 			= "HLD Partner's Verzegeling Plaats";
$factarray["FAMS:SLGS:TEMP"] 			= "HLD Partner's Verzegeling Tempel";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] 	= "Plaats v. geboorte";
$factarray["BIRT:DATE"] 	= "Datum v. geboorte";
$factarray["BIRT:SOUR"] 	= "Bron v. geboorte";
$factarray["DEAT:PLAC"] 	= "Plaats v. overlijden";
$factarray["DEAT:DATE"] 	= "Datum v. overlijden";
$factarray["DEAT:SOUR"] 	= "Bron v. overlijden";
$factarray["CHR:PLAC"] 		= "Plaats v. Doopsel";
$factarray["CHR:DATE"] 		= "Datum v. Doopsel";
$factarray["CHR:SOUR"]		= "Bron v. Doopsel";
$factarray["CONF:PLAC"]		= "Plaats v. bevestiging";
$factarray["CONF:DATE"]		= "Datum v. bevestiging";
$factarray["CONF:SOUR"]		= "Bron v. bevestiging";
$factarray["BAPM:PLAC"] 	= "Plaats v. doop";
$factarray["BAPM:DATE"] 	= "Datum v. doop";
$factarray["BAPM:SOUR"]		= "Bron v. doop";
$factarray["_BRTM:PLAC"]	= "Plaats v. besnijdenis";
$factarray["_BRTM:DATE"]	= "Datum v. besnijdenis";
$factarray["_BRTM:SOUR"]	= "Bron v. besnijdenis";
$factarray["BARM:PLAC"]		= "Plaats v. Bar Mitzvah";
$factarray["BARM:DATE"]		= "Datum v. Bar Mitzvah";
$factarray["BARM:SOUR"]		= "Bron v. Bar Mitzvah";
$factarray["BASM:PLAC"]		= "Plaats v. Bas Mitzvah";
$factarray["BASM:DATE"]		= "Datum v. Bas Mitzvah";
$factarray["BASM:SOUR"]		= "Bron v. Bas Mitzvah";
$factarray["BURI:PLAC"] 	= "Plaats v. begrafenis";
$factarray["BURI:DATE"] 	= "Datum v. begrafenis";
$factarray["BURI:SOUR"]		= "Bron v. begrafenis";
$factarray["FCOM:PLAC"]		= "Plaats v. eerste communie";
$factarray["FCOM:DATE"]		= "Datum v. eerste communie";
$factarray["FCOM:SOUR"]		= "Bron v. eerste communie";
$factarray["MARB:PLAC"]		= "Plaats v. ondertrouw";
$factarray["MARB:DATE"]		= "Datum v. ondertrouw";
$factarray["MARB:SOUR"]		= "Bron v. ondertrouwn";
$factarray["MARR:PLAC"] 	= "Plaats v. huwelijk";
$factarray["MARR:DATE"] 	= "Datum v. huwelijk";
$factarray["MARR:SOUR"] 	= "Bron v. huwelijk";
$factarray["ENGA:PLAC"]		= "Plaats v. verloving";
$factarray["ENGA:DATE"]		= "Datum v. verloving";
$factarray["ENGA:SOUR"]		= "Bron v. verloving";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] 	= "Medisch";
$factarray["_DEG"] 		= "Graad";
$factarray["_MILT"] 	= "Militaire dienst";
$factarray["_SEPR"] 	= "Gescheiden";
$factarray["_DETS"] 	= "Dood van een partner";
$factarray["CITN"] 		= "Staatsburgerschap";
$factarray["_FA1"] 		= "Feit 1";
$factarray["_FA2"] 		= "Feit 2";
$factarray["_FA3"] 		= "Feit 3";
$factarray["_FA4"] 		= "Feit 4";
$factarray["_FA5"] 		= "Feit 5";
$factarray["_FA6"] 		= "Feit 6";
$factarray["_FA7"] 		= "Feit 7";
$factarray["_FA8"] 		= "Feit 8";
$factarray["_FA9"] 		= "Feit 9";
$factarray["_FA10"]		= "Feit 10";
$factarray["_FA11"] 	= "Feit 11";
$factarray["_FA12"] 	= "Feit 12";
$factarray["_FA13"] 	= "Feit 13";
$factarray["_MREL"]	 	= "Relatie met moeder";
$factarray["_FREL"] 	= "Relatie met vader";
$factarray["_MSTAT"]	= "Status aanvang huwelijk";
$factarray["_MEND"] 	= "Status einde huwelijk";
$factarray["_NAMS"]		= "Naamgenoot";

// GEDCOM 5.5.1 related facts
$factarray["FAX"]		= "Fax";
$factarray["FACT"]		= "Feit";
$factarray["WWW"]		= "Internetpagina";
$factarray["MAP"]		= "Landkaart";
$factarray["LATI"]		= "Breedtegraad";
$factarray["LONG"]		= "Lengtegraad";
$factarray["FONE"]		= "Fonetisch";
$factarray["ROMN"]		= "Geromaniseerd";

// PAF related facts
$factarray["_NAME"] 	= "E-mail naam";
$factarray["URL"]		= "Web URL";
$factarray["_URL"] 		= "Web URL";
$factarray["_HEB"]		= "Hebreeuwse naam";
$factarray["_SCBK"] 	= "Aantekenboek";
$factarray["_TYPE"] 	= "Multimediatype";
$factarray["_SSHOW"]	= "Diavoorstelling";

// Rootsmagic
$factarray["_SUBQ"]		= "Verkorte versie";
$factarray["_BIBL"] 	= "Bibliografie";

// Reunion
$factarray["EMAL"]		= "E-mailadres";

// Other common customized facts
$factarray["_ADPF"] 		= "Geadopteerd door de vader";
$factarray["_ADPM"] 		= "Geadopteerd door de moeder";
$factarray["_AKAN"] 		= "Ook bekend als";
$factarray["_AKA"]			= "Ook bekend als";
$factarray["_BRTM"] 		= "Besnijdenis";
$factarray["_COML"] 		= "Erkend partnerschap";
$factarray["_EYEC"] 		= "Kleur ogen";
$factarray["_FNRL"] 		= "Begrafenis";
$factarray["_HAIR"] 		= "Kleur haar";
$factarray["_HEIG"] 		= "Lengte";
$factarray["_HOL"]  		= "Holocaust";
$factarray["_INTE"] 		= "Bijgezet";
$factarray["_MARI"] 		= "Huwelijksvoornemen";
$factarray["_MBON"] 		= "Ondertrouw";
$factarray["_MEDC"] 		= "Medische toestand";
$factarray["_MILI"] 		= "Militaire dienst";
$factarray["_NMR"] 			= "Ongehuwd";
$factarray["_NLIV"] 		= "Overleden";
$factarray["_NMAR"] 		= "Nooit gehuwd";
$factarray["_PRMN"] 		= "Permanent nummer";
$factarray["_WEIG"] 		= "Gewicht";
$factarray["_YART"] 		= "Yartzeit";
$factarray["_MARNM"]		= "Naam in huwelijk";
$factarray["_MARNM_SURN"] 	= "Achteraam in huwelijk";
$factarray["_STAT"]			= "Burgerlijke staat";
$factarray["COMM"]			= "Commentaar";

// Aldfaer related facts
$factarray["MARR_CIVIL"]	= "Burgerlijk huwelijk";
$factarray["MARR_RELIGIOUS"]= "Kerkelijk huwelijk";
$factarray["MARR_PARTNERS"] = "Geregistreerd partnerschap";
$factarray["MARR_UNKNOWN"] 	= "Soort huwelijk onbekend";

$factarray["_HNM"] 		= "Hebreeuwse naam";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] 	= "Overlijden van een partner";
$factarray["_BURI_SPOU"]	= "Begrafenis van partner";
$factarray["_CREM_SPOU"]	= "Crematie van partner";

$factarray["_BIRT_CHIL"] 	= "Geboorte van een kind";
$factarray["_CHR_CHIL"]		= "Doop van een kind";
$factarray["_BAPM_CHIL"] 	= "Doop van een kind";
$factarray["__BRTM_CHIL"]	= "Besnijdenis van een kind";
$factarray["_ADOP_CHIL"] 	= "Adoptie van een kind";
$factarray["_MARR_CHIL"] 	= "Huwelijk van een kind";
$factarray["_MARB_CHIL"]	= "Ondertrouw van een kind";
$factarray["_DEAT_CHIL"] 	= "Overlijden van een kind";
$factarray["_BURI_CHIL"]	= "Begrafenis van een kind";
$factarray["_CREM_CHIL"]	= "Crematie van een kind";

$factarray["_BIRT_GCHI"] 	= "Geboorte van een kleinkind";
$factarray["_CHR_GCHI"]		= "Doop van een kleinkind";
$factarray["_BAPM_GCHI"] 	= "Doop van een kleinkind";
$factarray["__BRTM_GCHI"]	= "Besnijdenis van een kleinkind";
$factarray["_ADOP_GCHI"] 	= "Adoptie van eenkleinkind";
$factarray["_MARR_GCHI"] 	= "Huwelijk van een kleinkind";
$factarray["_MARB_GCHI"]	= "Ondertrouw van een kleinkind";
$factarray["_DEAT_GCHI"]	= "Overlijden van een kleinkind";
$factarray["_BURI_GCHI"]	= "Begrafenis van een kleinkind";
$factarray["_CREM_GCHI"]	= "Crematie van een kleinkind";

$factarray["_BIRT_GGCH"] 	= "Geboorte van een achterkleinkind";
$factarray["_CHR_GGCH"]		= "Doop van een achterkleinkind";
$factarray["_BAPM_GGCH"] 	= "Doop van een achterkleinkind";
$factarray["__BRTM_GGCH"]	= "Besnijdenis van een achterkleinkind";
$factarray["_ADOP_GGCH"] 	= "Adoptie van een achterkleinkind";
$factarray["_MARR_GGCH"] 	= "Huwelijk van een achterkleinkind";
$factarray["_MARB_GGCH"]	= "Ondertrouw van een achterkleinkind";
$factarray["_DEAT_GGCH"] 	= "Overlijden van een achterkleinkind";
$factarray["_BURI_GGCH"]	= "Begrafenis van een achterkleinkind";
$factarray["_CREM_GGCH"]	= "Crematie van een achterkleinkind";

$factarray["_MARR_FATH"] 	= "Huwelijk van vader";
$factarray["_MARB_FATH"]	= "Ondertrouw van vader";
$factarray["_DEAT_FATH"] 	= "Overlijden van vader";
$factarray["_BURI_FATH"]	= "Begrafenis van vader";
$factarray["_CREM_FATH"]	= "Crematie van vader";

$factarray["_MARR_FAMC"] 	= "Huwelijk van ouders";
$factarray["_MARB_FAMC"]	= "Ondertrouw van ouders";

$factarray["_MARR_MOTH"] 	= "Huwelijk van moeder";
$factarray["_MARB_MOTH"]	= "Ondertrouw van moeder";
$factarray["_DEAT_MOTH"] 	= "Overlijden van moeder";
$factarray["_BURI_MOTH"]	= "Begrafenis van moeder";
$factarray["_CREM_MOTH"]	= "Crematie van moeder";

$factarray["_BIRT_SIBL"] 	= "Geboorte van een broer/zus";
$factarray["_CHR_SIBL"]		= "Doop van broer/zus";
$factarray["_BAPM_SIBL"] 	= "Doop van broer/zus";
$factarray["__BRTM_SIBL"]	= "Besnijdenis van broer/zus";
$factarray["_ADOP_SIBL"] 	= "Adoptie van broer/zus";
$factarray["_MARR_SIBL"] 	= "Huwelijk van een broer/zus";
$factarray["_MARB_SIBL"]	= "Ondertrouw van broer/zus";
$factarray["_DEAT_SIBL"] 	= "Overlijden van een broer/zus";
$factarray["_BURI_SIBL"]	= "Begrafenis van broer/zus";
$factarray["_CREM_SIBL"]	= "Crematie van broer/zus";

$factarray["_BIRT_HSIB"] 	= "Geboorte van een half-broer/zus";
$factarray["_CHR_HSIB"]		= "Doop van half-broer/zus";
$factarray["_BAPM_HSIB"] 	= "Doop van een half-broer/zus";
$factarray["__BRTM_HSIB"]	= "Besnijdenis van half-broer/zus";
$factarray["_ADOP_HSIB"] 	= "Adoptie van half-broer/zus";
$factarray["_MARR_HSIB"] 	= "Huwelijk van een halfbroer/-zus";
$factarray["_MARB_HSIB"]	= "Ondertrouw van half-broer/zus";
$factarray["_DEAT_HSIB"] 	= "Overlijden van een halfbroer/-zus";
$factarray["_BURI_HSIB"]	= "Begrafenis van half-broer/zus";
$factarray["_CREM_HSIB"]	= "Crematie van half-broer/zus";

$factarray["_BIRT_NEPH"] 	= "Geboorte van een neef/nicht";
$factarray["_CHR_NEPH"]		= "Doop van een neef/nicht";
$factarray["_BAPM_NEPH"] 	= "Doop van een neef/nicht";
$factarray["__BRTM_NEPH"]	= "Besnijdenis van een neef";
$factarray["_ADOP_NEPH"] 	= "Adoptie van een neef/nicht";
$factarray["_MARR_NEPH"] 	= "Huwelijk van een neef of nicht";
$factarray["_MARB_NEPH"]	= "Ondertrouw van een neef of nicht";
$factarray["_DEAT_NEPH"] 	= "Overlijden van een neef of nicht";
$factarray["_BURI_NEPH"]	= "Begrafenis van een neef of nicht";
$factarray["_CREM_NEPH"]	= "Crematie van een neef of nicht";

$factarray["_DEAT_GPAR"] 	= "Overlijden van een grootouder";
$factarray["_BURI_GPAR"]	= "Begrafenis van een grootouder";
$factarray["_CREM_GPAR"]	= "Crematie van een grootouder";

$factarray["_DEAT_GGPA"] 	= "Overlijden van een overgrootouder";
$factarray["_BURI_GGPA"]	= "Begrafenis van een overgrootouder";
$factarray["_CREM_GGPA"]	= "Crematie van een overgrootouder";

$factarray["_BIRT_FSIB"] 	= "Geboorte van een oom/tante";
$factarray["_CHR_FSIB"]		= "Doop van vader's broer/zus";
$factarray["_BAPM_FSIB"] 	= "Doop van vader's broer/zus";
$factarray["__BRTM_FSIB"]	= "Besnijdenis van vader's broer/zus";
$factarray["_ADOP_FSIB"] 	= "Adoptie van vader's broer/zus";
$factarray["_MARR_FSIB"] 	= "Huwelijk van een oom/tante";
$factarray["_MARB_FSIB"]	= "Ondertrouw van vader's broer/zus";
$factarray["_DEAT_FSIB"] 	= "Overlijden van een oom/tante";
$factarray["_BURI_FSIB"]	= "Begrafenis van vader's broer/zus";
$factarray["_CREM_FSIB"]	= "Crematie van vader's broer/zus";

$factarray["_BIRT_MSIB"] 	= "Geboorte van een oom/tante";
$factarray["_CHR_MSIB"]		= "Doop van moeder's broer/zus";
$factarray["_BAPM_MSIB"] 	= "Doop van moeder's broer/zus";
$factarray["__BRTM_MSIB"]	= "Besnijdenis van moeder's broer/zus";
$factarray["_ADOP_MSIB"] 	= "Adoptie van moeder's broer/zus";
$factarray["_MARR_MSIB"] 	= "Huwelijk van een oom/tante";
$factarray["_MARB_MSIB"]	= "Ondertrouw van moeder's broer/zus";
$factarray["_DEAT_MSIB"] 	= "Overlijden van een oom/tante";
$factarray["_BURI_MSIB"]	= "Begrafenis van moeder's broer/zus";
$factarray["_CREM_MSIB"]	= "Crematie van moeder's broer/zus";

$factarray["_BIRT_COUS"] 	= "Geboorte van een neef/nicht";
$factarray["_CHR_COUS"]		= "Doop van een neef/nicht";
$factarray["_BAPM_COUS"] 	= "Doop van een neef/nicht";
$factarray["__BRTM_COUS"]	= "Besnijdenis van een neef/nicht";
$factarray["_ADOP_COUS"] 	= "Adoptie van een neef";
$factarray["_MARR_COUS"] 	= "Huwelijk van een neef/nicht";
$factarray["_MARB_COUS"]	= "Ondertrouw van een neef/nicht";
$factarray["_DEAT_COUS"] 	= "Overlijden van een neef/nicht";
$factarray["_BURI_COUS"]	= "Begrafenis van een neef/nicht";
$factarray["_CREM_COUS"]	= "Crematie van een neef/nicht";

$factarray["_FAMC_EMIG"]	= "Emigratie van ouders";
$factarray["_FAMC_RESI"]	= "Domicilie van ouders";

//-- PGV Only facts
$factarray["_THUM"]		= "Gebruik deze afbeelding als de miniweergave?";
$factarray["_PGVU"]		= "Laatst gewijzigd door";
$factarray["SERV"] 		= "Server op afstand";
$factarray["_GEDF"] 	= "GEDCOM-bestand";

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
