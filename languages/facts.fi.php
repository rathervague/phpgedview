<?php
/**
 * Finnish Language file for PhpGedView.
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
 * @package PhpGedView
 * @subpackage Languages
 * @author Jaakko Sarell, Matti Valve, Marko Kohtala
 * @version $Id: facts.fi.php 5891 2009-07-12 22:30:31Z meliza $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Finnish values
$factarray["ABBR"]	= "Lyhenne";
$factarray["ADDR"]	= "Osoite";
$factarray["ADR1"]	= "Osoite 1";
$factarray["ADR2"]	= "Osoite 2";
$factarray["ADOP"]	= "Adoptio";
$factarray["AFN"]	= "Esipolvitiedoston numero (AFN)";
$factarray["AGE"]	= "Ikä";
$factarray["AGNC"]	= "Viranomainen";
$factarray["ALIA"]	= "Alias";
$factarray["ANCE"]	= "Esivanhemmat";
$factarray["ANCI"]	= "Esivanhempien selvitys";
$factarray["ANUL"]	= "Kumoaminen";
$factarray["ASSO"]	= "Kumppanit";
$factarray["AUTH"]	= "Tekijä";
$factarray["BAPL"]	= "MAP kaste";
$factarray["BAPM"]	= "Kaste";
$factarray["BARM"]	= "Bar Mitzvah";
$factarray["BASM"]	= "Bat Mitzvah";
$factarray["BIRT"]	= "Syntymä";
$factarray["BLES"]	= "Siunaus";
$factarray["BLOB"]	= "Binääridataobjekti";
$factarray["BURI"]	= "Hautaaminen";
$factarray["CALN"]	= "Puhelinnumero";
$factarray["CAST"]	= "Luokka / Sosiaalinen asema";
$factarray["CAUS"]	= "Kuolinsyy";
$factarray["CEME"]  	= "Hautausmaa";
$factarray["CENS"]	= "Väestölaskenta";
$factarray["CHAN"]	= "Muutettu viimeksi";
$factarray["CHAR"]	= "Merkistö";
$factarray["CHIL"]	= "Lapsi";
$factarray["CHR"]	= "Ristiminen";
$factarray["CHRA"]	= "Aikuiskaste";
$factarray["CITY"]	= "Kaupunki";
$factarray["CONF"]	= "Rippi";
$factarray["CONL"]	= "MAP rippi";
$factarray["COPR"]	= "Tekijänoikeus";
$factarray["CORP"]	= "Yhtiö";
$factarray["CREM"]	= "Polttohautaus";
$factarray["CTRY"]	= "Maa";
$factarray["DATA"]	= "Data";
$factarray["DATE"]	= "Päiväys";
$factarray["DEAT"]	= "Kuolema";
$factarray["DESC"]	= "Jälkeläiset";
$factarray["DESI"]	= "Jälkeläisten selvitys";
$factarray["DEST"]	= "Vastaanottaja";
$factarray["DIV"]	= "Avioero";
$factarray["DIVF"]	= "Avioeron hakeminen";
$factarray["DSCR"]	= "Kuvaus";
$factarray["EDUC"]	= "Koulutus";
$factarray["EMIG"]	= "Maastamuutto";
$factarray["ENDL"]	= "MAP endaumentti";
$factarray["ENGA"]	= "Kihlaus";
$factarray["EVEN"]	= "Tapahtuma";
$factarray["FAM"]	= "Perhe";
$factarray["FAMC"]	= "Lapsuusperhe";
$factarray["FAMF"]	= "Perhetiedosto";
$factarray["FAMS"]	= "Avioperhe";
$factarray["FCOM"]	= "Ensimmäinen rippi";
$factarray["FILE"]	= "Ulkoinen tiedosto";
$factarray["FORM"]	= "Siirtomuoto";
$factarray["GIVN"]	= "Etunimet";
$factarray["GRAD"]	= "Tutkinto";
$factarray["HUSB"]  	= "Mies";
$factarray["IDNO"]	= "Henkilönumero";
$factarray["IMMI"]	= "Maahanmuutto";
$factarray["LEGA"]	= "Perinnönsaaja";
$factarray["MARB"]	= "Aviokuulutus";
$factarray["MARC"]	= "Avioliittosopimus";
$factarray["MARL"]	= "Avioliittolupa";
$factarray["MARR"]	= "Avioliitto";
$factarray["MARS"]	= "Avioehto";
$factarray["MEDI"]	= "Mediatyyppi";
$factarray["NAME"]	= "Nimi";
$factarray["NATI"]	= "Kansallisuus";
$factarray["NATU"]	= "Kansalaistaminen";
$factarray["NCHI"]	= "Lasten määrä";
$factarray["NICK"]	= "Lempinimi";
$factarray["NMR"]	= "Avioliittojen määrä";
$factarray["NOTE"]	= "Kommentti";
$factarray["NPFX"]	= "Etuliite";
$factarray["NSFX"]	= "Pääte";
$factarray["OBJE"]	= "Multimediaobjekti";
$factarray["OCCU"]	= "Ammatti";
$factarray["ORDI"]	= "Uskonnollinen toimitus";
$factarray["ORDN"]	= "Papiksivihkiminen";
$factarray["PAGE"]	= "Sivu";
$factarray["PEDI"]	= "Lapsuusperhesuhde";
$factarray["PLAC"]	= "Paikannimi";
$factarray["PHON"]	= "Puhelinnumero";
$factarray["POST"]	= "Postinumero";
$factarray["PROB"]	= "Testamentin vahvistus";
$factarray["PROP"]	= "Omaisuus";
$factarray["PUBL"]	= "Julkaisu";
$factarray["QUAY"]	= "Tiedon laatu";
$factarray["REPO"]	= "Tallennuspaikka";
$factarray["REFN"]	= "Viitenumero";
$factarray["RELA"]	= "Sukulaisuussuhde";
$factarray["RELI"]	= "Uskonto";
$factarray["RESI"]	= "Asuinpaikka";
$factarray["RESN"]	= "Käyttörajoitus";
$factarray["RETI"]	= "Eläke";
$factarray["RFN"]	= "Tietueen numero";
$factarray["RIN"]	= "Tietueen tunniste";
$factarray["ROLE"]	= "Rooli";
$factarray["SEX"]	= "Sukupuoli";
$factarray["SLGC"]	= "MAP lapsen sinetöinti";
$factarray["SLGS"]	= "MAP puolison sinetöinti";
$factarray["SOUR"]	= "Lähde";
$factarray["SPFX"]	= "Sukunimen etuliite";
$factarray["SSN"]	= "Henkilötunnus";
$factarray["STAE"]	= "Osavaltio";
$factarray["STAT"]	= "Tila/kunto";
$factarray["SUBM"]	= "Lähettäjä/toimittaja";
$factarray["SUBN"]	= "Lähetys/toimitus";
$factarray["SURN"]	= "Sukunimi";
$factarray["TEMP"]	= "Temppeli";
$factarray["TEXT"]	= "Teksti";
$factarray["TIME"]	= "Aika";
$factarray["TITL"]	= "Nimike";
$factarray["TYPE"]	= "Tyyppi";
$factarray["WIFE"]  	= "Vaimo";
$factarray["WILL"]	= "Testamentti";
$factarray["_EMAIL"]	= "Sähköpostiosoite";
$factarray["EMAIL"]	= "Sähköpostiosoite";
$factarray["_TODO"]	= "Työlistalla";
$factarray["_UID"]	= "Yleistunniste";
$factarray["_GEDF"] 	= "GEDCOM-tiedosto";
$factarray["_PRIM"]	= "Korostettu kuva";
$factarray["_DBID"] 	= "Yhdistetyn tietokannan ID";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Tilan muutosaika";

$factarray["NAME:_HEB"]	= "Nimi hepreaksi";
$factarray["PLAC:_HEB"]	= "Paikka hepreaksi";
$factarray["TITL:_HEB"]	= "Otsikko hepreaksi";
$factarray["NAME:ROMN"]	= "Romanisoitu nimi";
$factarray["PLAC:ROMN"]	= "Romanisoitu paikka";
$factarray["TITL:ROMN"]	= "Romanisoitu otsikko";
$factarray["NAME:FONE"]	= "Foneettinen nimi";
$factarray["PLAC:FONE"]	= "Foneettinen paikka";
$factarray["TITL:FONE"]	= "Foneettinen otsikko";

//These facts are compounds for the view probabilities page
$factarray["FAMC:HUSB:SURN"] 		= "Isän sukunimi";
$factarray["FAMC:WIFE:SURN"] 		= "Äidin sukunimi";
$factarray["FAMC:HUSB:BIRT:PLAC"] 	= "Isän syntymäpaikka";
$factarray["FAMC:WIFE:BIRT:PLAC"] 	= "Äidin syntymäpaikka";
$factarray["FAMC:MARR:PLAC"] 		= "Vanhempien hääpaikka";
$factarray["FAMC:HUSB:OCCU"] 		= "Isän ammatti";
$factarray[":BIRT:PLAC"] 			= "Syntymäpaikka";
$factarray["FAMS:MARR:PLAC"] 		= "Hääpaikka";
$factarray["FAMS:MARR:DATE"] 		= "Hääpäivä";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] 	= "Puolison kuolinpaikka";
$factarray["FAMC:HUSB:GIVN"] 		= "Isän etunimi";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] 	= "Puolison syntymäpaikka";
$factarray["FAMC:WIFE:GIVN"] 		= "Äidin etunimi";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Isänisän etunimi";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Äidinäidin etunimi";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Äidinisän etunimi";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Isänäidin etunimi";
$factarray["FAMS:CHIL:BIRT:PLAC"] 	= "Lapsen syntymäpaikka";

// These facts are all colon delimited
$factarray["BIRT:PLAC"] 	= "Syntymäpaikka";
$factarray["BIRT:DATE"] 	= "Syntymäpäivä";
$factarray["DEAT:PLAC"] 	= "Kuolinpaikka";
$factarray["DEAT:DATE"] 	= "Kuolinpäivä";
$factarray["CHR:PLAC"] 	= "Ristiäispaikka";
$factarray["CHR:DATE"] 	= "Ristiäispäivä";
$factarray["BAPM:PLAC"] 	= "Kastepaikka";
$factarray["BAPM:DATE"] 	= "Kastepäivä";
$factarray["BURI:PLAC"] 	= "Hautauspaikka";
$factarray["BURI:DATE"] 	= "Hautauspäivä";
$factarray["MARR:PLAC"] 	= "Hääpaikka";
$factarray["MARR:DATE"] 	= "Hääpäivä";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"]	= "Lääketieteellinen";
$factarray["_DEG"]	= "Tutkinto";
$factarray["_MILT"]	= "Asepalvelus";
$factarray["_SEPR"]	= "Asumusero";
$factarray["_DETS"]	= "Puolison kuolema";
$factarray["CITN"]	= "Kansalaisuus";
$factarray["_FA1"] 	= "Fakta 1";
$factarray["_FA2"] 	= "Fakta 2";
$factarray["_FA3"] 	= "Fakta 3";
$factarray["_FA4"] 	= "Fakta 4";
$factarray["_FA5"] 	= "Fakta 5";
$factarray["_FA6"] 	= "Fakta 6";
$factarray["_FA7"] 	= "Fakta 7";
$factarray["_FA8"] 	= "Fakta 8";
$factarray["_FA9"] 	= "Fakta 9";
$factarray["_FA10"] 	= "Fakta 10";
$factarray["_FA11"] 	= "Fakta 11";
$factarray["_FA12"] 	= "Fakta 12";
$factarray["_FA13"] 	= "Fakta 13";
$factarray["_MREL"] 	= "Suhde äitiin";
$factarray["_FREL"] 	= "Suhde isään";
$factarray["_MSTAT"] 	= "Avioliiton alkutilanne";
$factarray["_MEND"] 	= "Avioliiton lopputilanne";
$factarray["_NAMS"]	= "Kaima";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] 	= "Faksi";
$factarray["FACT"] 	= "Tieto";
$factarray["WWW"] 	= "Kotisivu";
$factarray["MAP"] 	= "Kartta";
$factarray["LATI"] 	= "Leveysaste";
$factarray["LONG"] 	= "Pituusaste";
$factarray["FONE"] 	= "Foneettinen";
$factarray["ROMN"] 	= "Romanisoitu";

// PAF related facts
$factarray["_NAME"] 	= "Postinimi";
$factarray["URL"] 	= "Verkko-osoite URL";
$factarray["_URL"] 	= "Verkko-osoite URL";
$factarray["_HEB"] 	= "Heprealainen";
$factarray["_SCBK"] 	= "Leikekirja";
$factarray["_TYPE"] 	= "Mediatyyppi";
$factarray["_SSHOW"] = "Kuvasarjaesitys";

// Rootsmagic
$factarray["_SUBQ"]	= "Lyhyt versio";
$factarray["_BIBL"] 	= "Bibliografia";

// Reunion
$factarray["EMAL"]	= "Sähköpostiosoite";

// Other common customized facts
$factarray["_ADPF"]	= "Isän adoptoima";
$factarray["_ADPM"]	= "Äidin adoptoima";
$factarray["_AKAN"]	= "Toiselta nimeltä";
$factarray["_AKA"] 	= "Toiselta nimeltä";
$factarray["_BRTM"]	= "Brit mila";
$factarray["_COML"]	= "Avoliitto";
$factarray["_EYEC"]	= "Silmien väri";
$factarray["_FNRL"]	= "Hautajaiset";
$factarray["_HAIR"]	= "Hiusten väri";
$factarray["_HEIG"]	= "Pituus";
$factarray["_HOL"]  	= "Holokausti";
$factarray["_INTE"]	= "Hautaaminen";
$factarray["_MARI"]	= "Avioliittoaikomus";
$factarray["_MBON"]	= "Aviollinen side";
$factarray["_MEDC"]	= "Terveydellinen tila";
$factarray["_MILI"]	= "Sotilaallinen";
$factarray["_NMR"]	= "Naimaton";
$factarray["_NLIV"]	= "Ei elossa";
$factarray["_NMAR"]	= "Ei koskaan naimisissa";
$factarray["_PRMN"]	= "Pysyvä numero";
$factarray["_WEIG"]	= "Paino";
$factarray["_YART"]	= "Jortsait";
$factarray["_MARNM"]	= "Avionimi";
$factarray["_MARNM_SURN"] = "Aviosukunimi";
$factarray["_STAT"]	= "Aviosääty";
$factarray["COMM"]	= "Huomautus";

// Aldfaer related facts
$factarray["MARR_CIVIL"] 		= "Siviiliavioliitto";
$factarray["MARR_RELIGIOUS"] 	= "Kirkollinen avioliitto";
$factarray["MARR_PARTNERS"] 	= "Rekisteröity suhde";
$factarray["MARR_UNKNOWN"] 	= "Avioliiton tyyppi tuntematon";

$factarray["_HNM"] 		= "Heprealainen nimi";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"]	= "Puolison kuolema";
$factarray["_BURI_SPOU"] 	= "Puolison hautaaminen";
$factarray["_CREM_SPOU"] 	= "Puolison polttohautaus";

$factarray["_BIRT_CHIL"] 	= "Lapsen syntymä";
$factarray["_CHR_CHIL"] 	= "Lapsen ristiminen";
$factarray["_BAPM_CHIL"] 	= "Lapsen kaste";
$factarray["__BRTM_CHIL"] 	= "Lapsen Brit mila";
$factarray["_ADOP_CHIL"] 	= "Lapsen adoptio";
$factarray["_MARR_CHIL"] 	= "Lapsen avioliitto";
$factarray["_MARB_CHIL"] 	= "Lapsen avioliittoon kuuluttaminen";
$factarray["_DEAT_CHIL"] 	= "Lapsen kuolema";
$factarray["_BURI_CHIL"] 	= "Lapsen hautaaminen";
$factarray["_CREM_CHIL"] 	= "Lapsen polttohautaus";

$factarray["_BIRT_GCHI"] 	= "Lapsenlapsen syntymä";
$factarray["_CHR_GCHI"] 	= "Lapsenlapsen ristiminen";
$factarray["_BAPM_GCHI"] 	= "Lapsenlapsen kaste";
$factarray["__BRTM_GCHI"] 	= "Lapsenlapsen Brit mila";
$factarray["_ADOP_GCHI"] 	= "Lapsenlapsen adoptio";
$factarray["_MARR_GCHI"] 	= "Lapsenlapsen avioliitto";
$factarray["_MARB_GCHI"] 	= "Lapsenlapsen avioliittoon kuuluttaminen";
$factarray["_DEAT_GCHI"] 	= "Lapsenlapsen kuolema";
$factarray["_BURI_GCHI"] 	= "Lapsenlapsen hautaaminen";
$factarray["_CREM_GCHI"] 	= "Lapsenlapsen polttohautaus";

$factarray["_BIRT_GGCH"] 	= "Lapsenlapsen lapsen syntymä";
$factarray["_CHR_GGCH"] 	= "Lapsenlapsen lapsen ristiminen";
$factarray["_BAPM_GGCH"] 	= "Lapsenlapsen lapsen kaste";
$factarray["__BRTM_GGCH"] = "Lapsenlapsen lapsen Brit mila";
$factarray["_ADOP_GGCH"] 	= "Lapsenlapsen lapsen adoptio";
$factarray["_MARR_GGCH"] 	= "Lapsenlapsen lapsen avioliitto";
$factarray["_MARB_GGCH"] 	= "Lapsenlapsen lapsen avioliitton kuuluttaminen";
$factarray["_DEAT_GGCH"] 	= "Lapsenlapsen lapsen kuolema";
$factarray["_BURI_GGCH"] 	= "Lapsenlapsen lapsen hautaaminen";
$factarray["_CREM_GGCH"] 	= "Lapsenlapsen lapsen polttohautaus";

$factarray["_MARR_FATH"] 	= "Isän avioliitto";
$factarray["_MARB_FATH"] 	= "Isän avioliittoon kuuluttaminen";
$factarray["_DEAT_FATH"] 	= "Isän kuolema";
$factarray["_BURI_FATH"] 	= "Isän hautaaminen";
$factarray["_CREM_FATH"] 	= "Ison polttohautaus";

$factarray["_MARR_FAMC"] 	= "Vanhempien avioliitto";
$factarray["_MARB_FAMC"] 	= "Vanhempien avioliittoon kuuluttaminen";

$factarray["_MARR_MOTH"] 	= "Äidin avioliitto";
$factarray["_MARB_MOTH"] 	= "Äidin avioliittoon kuuluttaminen";
$factarray["_DEAT_MOTH"] 	= "Äidin kuolema";
$factarray["_BURI_MOTH"]	= "Äidin hautaaminen";
$factarray["_CREM_MOTH"] 	= "Äidin polttohautaus";

$factarray["_BIRT_SIBL"] 	= "Sisaruksen syntymä";
$factarray["_CHR_SIBL"] 	= "Sisaruksen ristiminen";
$factarray["_BAPM_SIBL"] 	= "Sisaruksen kaste";
$factarray["__BRTM_SIBL"] 	= "Sisaruksen Brit mila";
$factarray["_ADOP_SIBL"] 	= "Sisaruksen adoptointi";
$factarray["_MARR_SIBL"] 	= "Sisaruksen avioliitto";
$factarray["_MARB_SIBL"] 	= "Sisaruksen avioliittoon kuuluttaminen";
$factarray["_DEAT_SIBL"] 	= "Sisaruksen kuolema";
$factarray["_BURI_SIBL"] 	= "Sisaruksen hautaaminen";
$factarray["_CREM_SIBL"] 	= "Sisaruksen polttohautaus";

$factarray["_BIRT_HSIB"] 	= "Puolisisaruksen syntymä";
$factarray["_CHR_HSIB"] 	= "Puolisisaruksen ristiminen";
$factarray["_BAPM_HSIB"] 	= "Puolisisaruksen kaste";
$factarray["__BRTM_HSIB"] 	= "Puolisisaruksen Brit mila";
$factarray["_ADOP_HSIB"] 	= "Puolisisaruksen adoptointi";
$factarray["_MARR_HSIB"] 	= "Puolisisaruksen avioliitto";
$factarray["_MARB_HSIB"] 	= "Puolisisaruksen avioliittoon kuuluttaminen";
$factarray["_DEAT_HSIB"] 	= "Puolisisaruksen kuolema";
$factarray["_BURI_HSIB"] 	= "Puolisisaruksen hautaaminen";
$factarray["_CREM_HSIB"] 	= "Puolisisaruksen polttohautaus";

$factarray["_BIRT_NEPH"] 	= "Sisaruksen lapsen syntymä";
$factarray["_CHR_NEPH"] 	= "Sisaruksen lapsen ristiminen";
$factarray["_BAPM_NEPH"] 	= "Sisaruksen lapsen kaste";
$factarray["__BRTM_NEPH"] 	= "Sisaruksen lapsen Brit mila";
$factarray["_ADOP_NEPH"] 	= "Sisaruksen lapsen adoptio";
$factarray["_MARR_NEPH"] 	= "Sisaruksen lapsen avioliitto";
$factarray["_MARB_NEPH"] 	= "Sisaruksen lapsen avioliittoon kuuluttaminen";
$factarray["_DEAT_NEPH"] 	= "Sisaruksen lapsen kuolema";
$factarray["_BURI_NEPH"] 	= "Sisaruksen lapsen hautaaminen";
$factarray["_CREM_NEPH"] 	= "Sisaruksen lapsen polttohautaus";

$factarray["_DEAT_GPAR"] 	= "Isovanhemman kuolema";
$factarray["_BURI_GPAR"] 	= "Isovanhemman hautaaminen";
$factarray["_CREM_GPAR"] 	= "Isovanhemman polttohautaus";

$factarray["_DEAT_GGPA"] 	= "Iso-isovanhemman kuolema";
$factarray["_BURI_GGPA"] 	= "Iso-isovanhemman hautaaminen";
$factarray["_CREM_GGPA"] 	= "Iso-isovanhemman polttohautaus";

$factarray["_BIRT_FSIB"] 	= "Isän sisaruksen syntymä";
$factarray["_CHR_FSIB"] 	= "Isän sisaruksen ristiminen";
$factarray["_BAPM_FSIB"] 	= "Isän sisaruksen kaste";
$factarray["__BRTM_FSIB"] 	= "Isän sisaruksen Brit mila";
$factarray["_ADOP_FSIB"] 	= "Isän sisaruksen adoptio";
$factarray["_MARR_FSIB"] 	= "Isän sisaruksen avioliitto";
$factarray["_MARB_FSIB"] 	= "Isän sisaruksen avioliittoon kuuluttaminen";
$factarray["_DEAT_FSIB"] 	= "Isän sisaruksen kuolema";
$factarray["_BURI_FSIB"] 	= "Isän sisaruksen hautaaminen";
$factarray["_CREM_FSIB"] 	= "Isän sisaruksen polttohautaus";

$factarray["_BIRT_MSIB"] 	= "Äidin sisaruksen syntymä";
$factarray["_CHR_MSIB"] 	= "Äidin sisaruksen ristiminen";
$factarray["_BAPM_MSIB"] 	= "Äidin sisaruksen kaste";
$factarray["__BRTM_MSIB"] 	= "Äidin sisaruksen Brit mila";
$factarray["_ADOP_MSIB"] 	= "Äidin sisaruksen adoptio";
$factarray["_MARR_MSIB"] 	= "Äidin sisaruksen avioliitto";
$factarray["_MARB_MSIB"] 	= "Äidin sisaruksen avioliittoon kuuluttaminen";
$factarray["_DEAT_MSIB"] 	= "Äidin sisaruksen kuolema";
$factarray["_BURI_MSIB"] 	= "Äidin sisaruksen hautaaminen";
$factarray["_CREM_MSIB"] 	= "Äidin sisaruksen polttohautaus";

$factarray["_BIRT_COUS"] 	= "Serkun syntymä";
$factarray["_CHR_COUS"]  	= "Serkun ristiminen";
$factarray["_BAPM_COUS"] 	= "Serkun kaste";
$factarray["__BRTM_COUS"] 	= "Serkun Brit mila";
$factarray["_ADOP_COUS"] 	= "Serkun adoptio";
$factarray["_MARR_COUS"] 	= "Serkun avioliitto";
$factarray["_MARB_COUS"] 	= "Serkun avioliittoon kuuluttaminen";
$factarray["_DEAT_COUS"] 	= "Serkun kuolema";
$factarray["_BURI_COUS"] 	= "Serkun hautaaminen";
$factarray["_CREM_COUS"] 	= "Serkun polttohautaus";

$factarray["_FAMC_EMIG"] 	= "Vanhempien maastamuutto";
$factarray["_FAMC_RESI"] 	= "Vanhempien asuinpaikka";

//-- PGV Only facts
$factarray["_THUM"]	= "Käytä tätä kuvaa pienoiskuvana?";
$factarray["_PGVU"]	= "muuttaja";
$factarray["SERV"] 	= "Ulkoinen palvelin";
$factarray["_GEDF"] 	= "GEDCOM-tiedosto";
$factarray["FAMS:DIV:DATE"] = "Puolison avioeropäivä";
$factarray["FAMS:DIV:PLAC"] = "Puolison avioeropaikka";
$factarray["FAMS:NOTE"] = "Puolison kommentti";
$factarray["FAMS:CENS:DATE"] = "Puolison väestölaskentapäivä";
$factarray["FAMS:CENS:PLAC"] = "Puolison väestölaskentapaikka";
$factarray["FAMS:SLGS:DATE"] = "MAP puolison sinetöintipäivä";
$factarray["FAMS:SLGS:PLAC"] = "MAP puolison sinetöintipaikka";
$factarray["FAMS:SLGS:TEMP"] = "MAP puolison sinetöintitemppeli";
$factarray["DATA:DATE"] = "Kirjauspäivä alkuperäisessä lähteessä";
$factarray["SHARED_NOTE"]	= "Jaettu lisätieto";
?>
