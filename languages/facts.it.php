<?php
/**
 * Italian Language file
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
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

 * @package PhpGedView
 * @version $Id: facts.it.php 5933 2009-07-19 23:37:41Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their Italian values
$factarray["ABBR"] = "Abbreviazione";
$factarray["ADDR"] = "Indirizzo";
$factarray["ADR1"] = "Indirizzo 1";
$factarray["ADR2"] = "Indirizzo 2";
$factarray["ADOP"] = "Adozione";
$factarray["AFN"] = "Ancestral File Number (AFN)";
$factarray["AGE"] = "Età";
$factarray["AGNC"] = "Istituzione";
$factarray["ALIA"] = "Alias";
$factarray["ANCE"] = "Antenati";
$factarray["ANCI"] = "Interesse Antenati";
$factarray["ANUL"] = "Annullamento";
$factarray["ASSO"] = "Associati";
$factarray["AUTH"] = "Autore";
$factarray["BAPL"] = "Battesimo Mormone";
$factarray["BAPM"] = "Battesimo";
$factarray["BARM"] = "Bar Mitzvah";
$factarray["BASM"] = "Bas Mitzvah";
$factarray["BIRT"] = "Nascita";
$factarray["BLES"] = "Benedizione";
$factarray["BLOB"] = "Oggetto binario contenente i dati";
$factarray["BURI"] = "Sepoltura";
$factarray["CALN"] = "Numero";
$factarray["CAST"] = "Casta / Stato Sociale";
$factarray["CAUS"] = "Causa della morte";
$factarray["CAUS"] = "Causa della morte";
$factarray["CENS"] = "Censimento";
$factarray["CHAN"] = "Ultima modifica";
$factarray["CHAR"] = "Set di caratteri";
$factarray["CHIL"] = "Bambino";
$factarray["CHR"] = "Cresima";
$factarray["CHRA"] = "Cresima da Adulto";
$factarray["CITY"] = "Città";
$factarray["CONF"] = "Comunione";
$factarray["CONL"] = "Comunione Mormone";
$factarray["COPR"] = "Copyright";
$factarray["CORP"] = "Compagnia / Società";
$factarray["CREM"] = "Cremazione";
$factarray["CTRY"] = "Nazione";
$factarray["DATA"] = "Dati";
$factarray["DATE"]	= "Data";
$factarray["DEAT"] = "Morte";
$factarray["DESC"] = "Discendenti";
$factarray["DESI"] = "Interesse Discendenti";
$factarray["DEST"] = "Destinazione";
$factarray["DIV"] = "Divorzio";
$factarray["DIVF"] = "Dossier Divorzio";
$factarray["DSCR"] = "Descrizione";
$factarray["EDUC"] = "Educazione";
$factarray["EMIG"] = "Emigrazione";
$factarray["ENDL"] = "Costituzione Mormone di dote";
$factarray["ENGA"] = "Fidanzamento";
$factarray["EVEN"] = "Evento";
$factarray["FAM"] = "Famiglia";
$factarray["FAMC"] = "Famiglia da bambino";
$factarray["FAMF"] = "Dossier familiare";
$factarray["FAMS"] = "Famiglia da coniuge";
$factarray["FCOM"] = "Prima comunione";
$factarray["FILE"] = "Dossier esterno";
$factarray["FORM"] = "Formato";
$factarray["GIVN"] = "Nome proprio";
$factarray["GRAD"] = "Laurea";
$factarray["HUSB"]  = "Marito";
$factarray["IDNO"] = "Identificativo";
$factarray["IMMI"] = "Immigrazione";
$factarray["LEGA"] = "Legatario";
$factarray["MARB"] = "Pubblicazioni matrimoniali";
$factarray["MARC"] = "Contratto di matrimonio";
$factarray["MARL"] = "Licenza di matrimonio";
$factarray["MARR"] = "Matrimonio";
$factarray["MARS"] = "Accordo pre-matrimoniale";
$factarray["NAME"] = "Nome";
$factarray["NATI"] = "Nazionalità";
$factarray["NATU"] = "Naturalizzazione";
$factarray["NCHI"] = "Numero di bambini";
$factarray["NICK"] = "Soprannome";
$factarray["NMR"] = "Numero di matrimoni";
$factarray["NOTE"] = "Note";
$factarray["NPFX"] = "Prefisso";
$factarray["NSFX"] = "Suffisso";
$factarray["OBJE"] = "Oggetto multimediale";
$factarray["OCCU"] = "Occupazione";
$factarray["ORDI"] = "Cerimonia";
$factarray["ORDI"]	= "Ordinanza";
$factarray["ORDN"] = "Ordinazione";
$factarray["PAGE"] = "Dettagli";
$factarray["PEDI"] = "Antenati";
$factarray["PLAC"] = "Località";
$factarray["PHON"] = "Telefono";
$factarray["POST"] = "C.A.P.";
$factarray["PROB"] = "Probate";
$factarray["PROP"] = "Proprietà";
$factarray["PUBL"] = "Pubblicazione";
$factarray["QUAY"] = "Qualità dei dati";
$factarray["REPO"]	= "Deposito";
$factarray["REFN"] = "Numero di riferimento";
$factarray["RELA"]	= "Relazione";
$factarray["RELI"] = "Religione";
$factarray["RESI"] = "Residenza";
$factarray["RESN"] = "Restrizione";
$factarray["RETI"] = "Pensionamento";
$factarray["RFN"] = "Numero di archivio del registor";
$factarray["RIN"] = "Numero ID";
$factarray["ROLE"] = "Ruolo";
$factarray["SEX"] = "Sesso";
$factarray["SLGC"] = "Suggellatura del Bambino (Chiesa Mormone)";
$factarray["SLGS"] = "Suggellatura al Coniuge (Chiesa Mormone)";
$factarray["SOUR"] = "Origine";
$factarray["SPFX"] = "Prefisso del Cognome";
$factarray["SSN"] = "Numero di Previdenza Sociale";
$factarray["STAE"] = "Stato";
$factarray["STAT"] = "Stato";
$factarray["SUBM"] = "Inviato da:";
$factarray["SUBN"] = "Dati da trattare";
$factarray["SURN"] = "Cognome";
$factarray["TEMP"] = "Tempio";
$factarray["TEXT"] = "Testo";
$factarray["TIME"] = "Ora";
$factarray["TITL"] = "Titolo";
$factarray["TYPE"]	= "Tipo";
$factarray["WIFE"]  = "Moglie";
$factarray["WILL"] = "Testamento";
$factarray["_EMAIL"] = "Indirizzo e-mail";
$factarray["EMAIL"] = "Indirizzo E-mail";
$factarray["_TODO"] = "Item Da Fare";
$factarray["_UID"] = "Identificatore Universale";
$factarray["_PRIM"]	= "Immagine evidenziata";
$factarray["_DBID"] = "Identificativo Database collegato";

// These facts are used in specific contexts
$factarray["STAT:DATE"] = "Data di cambio status";
$factarray["DATA:DATE"] = "Data di inserimento nella fonte originale";
$factarray["NAME:_HEB"]	= "Nome in ebraico";
$factarray["PLAC:_HEB"]	= "Località in ebraico";
$factarray["TITL:_HEB"]	= "Titolo in ebraico";
$factarray["NAME:ROMN"]	= "Nome latinizzato";
$factarray["PLAC:ROMN"]	= "Località latinizzata";
$factarray["TITL:ROMN"]	= "Titolo latinizzato";
$factarray["NAME:FONE"]	= "Fonetica nome";
$factarray["PLAC:FONE"]	= "Fonetica località";
$factarray["TITL:FONE"]	= "Fonetica titolo";

$factarray["SHARED_NOTE"]	= "Shared Note";

//These facts are compounds for the view probabilities and the advanced search pages
$factarray["FAMC:HUSB:SURN"] = "Cognome del padre";
$factarray["FAMC:WIFE:SURN"] = "Cognome della madre";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Luogo di nascita del padre";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Luogo di nascita della madre";
$factarray["FAMC:MARR:PLAC"] = "Luogo di matrimonio dei genitori";
$factarray["FAMC:HUSB:OCCU"] = "Occupazione del padre";
$factarray[":BIRT:PLAC"] = "Luogo di nascita";
$factarray["FAMS:MARR:PLAC"] = "Luogo di matrimonio";
$factarray["FAMS:MARR:DATE"] = "Data di matrimonio";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Luogo di morte del coniuge";
$factarray["FAMC:HUSB:GIVN"] = "Nome del padre";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Luogo di nascita del coniuge";
$factarray["FAMC:WIFE:GIVN"] = "Nome della madre";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Nome del nonno paterno";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Nome della nonna materna";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Nome del nonno materno";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Nome della nonna paterna";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Luogo di nascita del bambino";
$factarray["FAMS:NOTE"] = "Annotazioni sugli sposi";
$factarray["FAMS:CENS:DATE"] = "Spouse Census Date";
$factarray["FAMS:CENS:PLAC"] = "Spouse Census Place";
$factarray["FAMS:DIV:DATE"] = "Spouse Divorce Date";
$factarray["FAMS:DIV:PLAC"] = "Spouse Divorce Place";




// These facts are all colon delimited
$factarray["BIRT:PLAC"] = "Luogo di nascita";
$factarray["BIRT:DATE"] = "Data di nascita";
$factarray["DEAT:PLAC"] = "Luogo di morte";
$factarray["DEAT:DATE"] = "Data di morte";
$factarray["CHR:PLAC"] = "Luogo di battesimo";
$factarray["CHR:DATE"] = "Data di battesimo";
$factarray["BAPM:DATE"] = "Data di battesimo";
$factarray["BAPM:PLAC"] = "Luogo di battesimo";
$factarray["BURI:PLAC"] = "Luogo di sepoltura";
$factarray["BURI:DATE"] = "Data di sepoltura";
$factarray["MARR:PLAC"] = "Luogo di matrimonio";
$factarray["MARR:DATE"] = "Data di matrimonio";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"]	= "Medical";
$factarray["_DEG"]	= "Grado";
$factarray["_SEPR"] = "Separato";
$factarray["_MILT"]	= "Servizio Militare";
$factarray["_DETS"] = "Morte di un coniuge";
$factarray["CITN"] = "Cittadinanza";
$factarray["_FA1"]	= "Evento 1";
$factarray["_FA2"]	= "Evento 2";
$factarray["_FA3"]	= "Evento 3";
$factarray["_FA4"]	= "Evento 4";
$factarray["_FA5"]	= "Evento 5";
$factarray["_FA6"]	= "Evento 6";
$factarray["_FA7"]	= "Evento 7";
$factarray["_FA8"]	= "Evento 8";
$factarray["_FA8"]	= "Evento 8";
$factarray["_FA9"]	= "Evento 9";
$factarray["_FA10"]	= "Evento 10";
$factarray["_FA11"]	= "Evento 11";
$factarray["_FA12"]	= "Evento 12";
$factarray["_FA13"]	= "Evento 13";
$factarray["_MREL"]	= "Correlato alla madre";
$factarray["_FREL"]	= "Correlato al padre";
$factarray["_MSTAT"]	= "Inizio stato matrimoniale";
$factarray["_MEND"]	= "Fine stato matrimoniale";
$factarray["_NAMS"]	= "Omonimo";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] = "FAX";
$factarray["FACT"] = "Fatto";
$factarray["WWW"] = "Web Home Page";
$factarray["LATI"] = "Latitudine";
$factarray["LONG"] = "Longitudine";
$factarray["MAP"] = "Mappa";
$factarray["FONE"] = "Fonetico";
$factarray["ROMN"] = "Latinizzato";

// PAF related facts
$factarray["_NAME"] = "Nome di posta";
$factarray["URL"] = "URL Web";
$factarray["_URL"] = "URL Web";
$factarray["_HEB"] = "Ebreo";
$factarray["_SCBK"] = "Album-rassegna";
$factarray["_TYPE"] = "Tipo di media";
$factarray["_SSHOW"] = "Slide Show";

// Rootsmagic
$factarray["_SUBQ"]= "Versione breve";
$factarray["_BIBL"] = "Bibliografia";

// Reunion
$factarray["EMAL"]	= "Indirizzo e-mail";

// Other common customized facts
$factarray["_ADPF"] = "Adottato dal padre";
$factarray["_ADPM"] = "Adottato dalla madre";
$factarray["_AKAN"] = "Soprannominato";
$factarray["_AKA"] 	= "Soprannominato";
$factarray["_BRTM"]	= "Brit Mila";
$factarray["_COML"]	= "Matrimonio legale";
$factarray["_EYEC"] = "Colore degli occhi";
$factarray["_FNRL"] = "Funerale";
$factarray["_HAIR"] = "Colore dei capelli";
$factarray["_HEIG"] = "Altezza";
$factarray["_HOL"]  = "Olocausto";
$factarray["_INTE"]	= "Seppellito";
$factarray["_MARI"]	= "Promessa di matrimonio";
$factarray["_MBON"]	= "Legame matrimoniale";
$factarray["_MEDC"]	= "Condizione medica";
$factarray["_MILI"]	= "Servizio militare";
$factarray["_NMR"] = "Non sposato";
$factarray["_NLIV"] = "Non in vita";
$factarray["_NMAR"] = "Mai sposato";
$factarray["_PRMN"]	= "Numero permanente";
$factarray["_WEIG"] = "Peso";

$factarray["_MARNM"] = "Nome coniugale";
$factarray["_MARNM_SURN"] = "Cognome coniugale";
$factarray["_STAT"]	= "Stato matrimoniale";
$factarray["COMM"]	= "Commento";

// Aldfaer related facts
$factarray["MARR_CIVIL"] = "Matrimonio civile";
$factarray["MARR_UNKNOWN"] = "Matrimonio di tipo sconosciuto";
$factarray["MARR_RELIGIOUS"] = "Matrimonio Religioso";
$factarray["MARR_PARTNERS"] = "Relazione riconosciuta";

$factarray["_HNM"] = "Nome ebraico";

// Pseudo-facts for relatives
$factarray["_DEAT_SPOU"] = "Morte del coniuge";
$factarray["_BURI_SPOU"] = "Sepoltura del coniuge";
$factarray["_CREM_SPOU"] = "Cremazione del coniuge";
$factarray["_BIRT_CHIL"] = "Nascita di un figlio";
$factarray["_CHR_CHIL"] = "Battesimo di un figlio";
$factarray["_BAPM_CHIL"] = "Battesimo di un figlio";
$factarray["__BRTM_CHIL"] = "Brit Mila di un figlio";
$factarray["_ADOP_CHIL"] = "Adozione di un figlio ";
$factarray["_MARR_CHIL"] = "Matrimonio di un figlio";
$factarray["_MARB_CHIL"] = "Pubblicazione di matrimonio di un figlio";
$factarray["_DEAT_CHIL"] = "Morte di un figlio";
$factarray["_BURI_CHIL"] = "Sepoltura di un figlio";
$factarray["_CREM_CHIL"] = "Cremazione di un figlio";

$factarray["_BIRT_GCHI"] = "Nascita di un nipote";
$factarray["_CHR_GCHI"] = "Battesimo di un nipote";
$factarray["_BAPM_GCHI"] = "Battesimo di un nipote";
$factarray["__BRTM_GCHI"] = "Brit Mila di un nipote";
$factarray["_ADOP_GCHI"] = "Adozione di un nipote";
$factarray["_MARR_GCHI"] = "Matrimonio di un nipote";
$factarray["_MARB_GCHI"] = "Pubblicazione di matrimonio di un nipote";
$factarray["_DEAT_GCHI"] = "Morte di un nipote";
$factarray["_BURI_GCHI"] = "Sepoltura di un nipote";
$factarray["_CREM_GCHI"] = "Cremazione di un nipote";

$factarray["_BIRT_GGCH"] = "Nascita di un pronipote";
$factarray["_CHR_GGCH"] = "Battesimo di un pronipote";
$factarray["_BAPM_GGCH"] = "Battesimo di un pronipote";
$factarray["__BRTM_GGCH"] = "Brit Mila di un pronipote";
$factarray["_ADOP_GGCH"] = "Adozione di un pronipote";
$factarray["_MARR_GGCH"] = "Matrimonio di un pronipote";
$factarray["_MARB_GGCH"] = "Pubblicazione di matrimonio di un pronipote";
$factarray["_DEAT_GGCH"] = "Morte di un pronipote";
$factarray["_BURI_GGCH"] = "Sepoltura di un pronipote";
$factarray["_CREM_GGCH"] = "Cremazione di un pronipote";

$factarray["_MARR_FATH"] = "Matrimonio del padre";
$factarray["_MARB_FATH"] = "Pubblicazione di matrimonio del padre";
$factarray["_DEAT_FATH"] = "Morte del padre";
$factarray["_BURI_FATH"] = "Sepoltura del padre";
$factarray["_CREM_FATH"] = "Cremazione del padre";

$factarray["_MARR_FAMC"] = "Matrimonio dei genitori";
$factarray["_MARB_FAMC"] = "Pubblicazione di matrimonio dei genitori";

$factarray["_MARR_MOTH"] = "Matrimonio della madre";
$factarray["_MARB_MOTH"] = "Pubblicazione di matrimonio della madre";
$factarray["_DEAT_MOTH"] = "Morte della madre";
$factarray["_BURI_MOTH"] = "Sepoltura della madre";
$factarray["_CREM_MOTH"] = "Cremazione della madre";

$factarray["_BIRT_SIBL"] = "Nascita di fratelli-sorelle";
$factarray["_CHR_SIBL"] = "Battesimo di fratelli-sorelle";
$factarray["_BAPM_SIBL"] = "Battesimo di fratelli-sorelle";
$factarray["__BRTM_SIBL"] = "Brit Mila di fratelli-sorelle";
$factarray["_ADOP_SIBL"] = "Adozione di fratelli-sorelle";
$factarray["_MARR_SIBL"] = "Matrimonio di fratelli-sorelle";
$factarray["_MARB_SIBL"] = "Pubblicazione di matrimonio di fratelli-sorelle";
$factarray["_DEAT_SIBL"] = "Morte di fratelli/sorelle";
$factarray["_BURI_SIBL"] = "Sepoltura di fratelli/sorelle";
$factarray["_CREM_SIBL"] = "Cremazione di fratelli/sorelle";

$factarray["_BIRT_HSIB"] = "Nascita di fratellastri/sorellastre";
$factarray["_CHR_HSIB"] = "Battesimo di fratellastri/sorellastre";
$factarray["_BAPM_HSIB"] = "Battesimo di fratellastri/sorellastre";
$factarray["__BRTM_HSIB"] = "Brit Mila di fratellastri/sorellastre";
$factarray["_ADOP_HSIB"] = "Adozione di fratellastri/sorellastre";
$factarray["_MARR_HSIB"] = "Matrimonio di fratellastri/sorellastre";
$factarray["_MARB_HSIB"] = "Pubblicazione di matrimonio di fratellastri/sorellastre";
$factarray["_DEAT_HSIB"] = "Morte di fratellastri/sorellastre";
$factarray["_BURI_HSIB"] = "Sepoltura di fratellastri/sorellastre";
$factarray["_CREM_HSIB"] = "Cremazione di fratellastri/sorellastre";

$factarray["_BIRT_NEPH"] = "Nascita di nipote";
$factarray["_CHR_NEPH"] = "Battesimo di nipote";
$factarray["_BAPM_NEPH"] = "Battesimo di nipote";
$factarray["__BRTM_NEPH"] = "Brit Mila di nipote";
$factarray["_ADOP_NEPH"] = "Adozione di nipote";
$factarray["_MARR_NEPH"] = "Matrimonio di nipote";
$factarray["_MARB_NEPH"] = "Pubblicazione di matrimonio di nipote";
$factarray["_DEAT_NEPH"] = "Morte di nipote";
$factarray["_BURI_NEPH"] = "Sepoltura di nipote";
$factarray["_CREM_NEPH"] = "Cremazione di nipote";

$factarray["_DEAT_GPAR"] = "Morte di un nonno/nonna";
$factarray["_BURI_GPAR"] = "Sepoltura di un nonno/nonna";
$factarray["_CREM_GPAR"] = "Cremazione di un nonno/nonna";

$factarray["_DEAT_GGPA"] = "Morte di un bisnonno/bisnonna";
$factarray["_BURI_GGPA"] = "Sepoltura di un bisnonno/bisnonna";
$factarray["_CREM_GGPA"] = "Cremazione di un bisnonno/bisnonna";

$factarray["_BIRT_FSIB"] = "Nascita di fratello/sorella del padre";
$factarray["_CHR_FSIB"] = "Battesimo di fratello/sorella del padre";
$factarray["_BAPM_FSIB"] = "Battesimo di fratello/sorella del padre";
$factarray["__BRTM_FSIB"] = "Brit Mila di fratello/sorella del padre";
$factarray["_ADOP_FSIB"] = "Adozione di fratello/sorella del padre";
$factarray["_MARR_FSIB"] = "Matrimonio di fratello/sorella del padre";
$factarray["_MARB_FSIB"] = "Pubblicazione di matrimonio di fratello/sorella del padre";
$factarray["_DEAT_FSIB"] = "Morte di fratello/sorella del padre";
$factarray["_BURI_FSIB"] = "Sepoltura di fratello/sorella del padre";
$factarray["_CREM_FSIB"] = "Cremazione di fratello/sorella del padre";

$factarray["_BIRT_MSIB"] = "Nascita di fratello/sorella della madre";
$factarray["_CHR_MSIB"] = "Battesimo di fratello/sorella della madre";
$factarray["_BAPM_MSIB"] = "Battesimo di fratello/sorella della madre";
$factarray["__BRTM_MSIB"] = "Brit Mila di fratello/sorella della madre";
$factarray["_ADOP_MSIB"] = "Adozione di fratello/sorella della madre";
$factarray["_MARR_MSIB"] = "Matrimonio di fratello/sorella della madre";
$factarray["_MARB_MSIB"] = "Pubblicazione di matrimonio di fratello/sorella della madre";
$factarray["_DEAT_MSIB"] = "Morte di fratello/sorella della madre";
$factarray["_BURI_MSIB"] = "Sepoltura di fratello/sorella della madre";
$factarray["_CREM_MSIB"] = "Cremazione di fratello/sorella della madre";

$factarray["_BIRT_COUS"] = "Nascita di un cugino di primo grado";
$factarray["_CHR_COUS"]  = "Battesimo di un cugino di primo grado";
$factarray["_BAPM_COUS"] = "Battesimo di un cugino di primo grado";
$factarray["__BRTM_COUS"] = "Brit Mila di un cugino di primo grado";
$factarray["_ADOP_COUS"] = "Adozione di un cugino di primo grado";
$factarray["_MARR_COUS"] = "Matrimonio di un cugino di primo grado";
$factarray["_MARB_COUS"] = "Pubblicazione di matrimonio di un cugino di primo grado";
$factarray["_DEAT_COUS"] = "Morte di un cugino di primo grado";
$factarray["_BURI_COUS"] = "Sepoltura di un cugino di primo grado";
$factarray["_CREM_COUS"] = "Cremazione di un cugino di primo grado";

$factarray["_FAMC_EMIG"] = "Emigrazione dei genitori";
$factarray["_FAMC_RESI"] = "Residenza dei genitori";

//-- PGV Only facts
$factarray["_THUM"]	= "Always use main image?";
$factarray["_PGVU"]	= "Ultima modifica di";
$factarray["SERV"] = "Server remoto";
$factarray["_GEDF"] = "File GEDCOM";

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
$factarray["CEME"]  = "Cimitero";

$factarray["MEDI"]	= "Tipo media";
$factarray["_YART"]	= "Yahrzeit";
$factarray["FAMS:SLGS:DATE"] = "Data di sigillatura SUG degli sposi";
$factarray["FAMS:SLGS:PLAC"] = "Luogo di sigillatura SUG degli sposi";
$factarray["FAMS:SLGS:TEMP"] = "Tempio di sigillatura SUG degli sposi";
?>
