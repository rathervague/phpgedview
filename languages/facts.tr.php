<?php
/**
 * Turkish Language file for PhpGedView.
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
 *
 * @package PhpGedView
 * @author Kurt Norgaz
 * @author Adem GENÇ uzayuydu@gmail.com http://www.muttafi.com
 * @version $Id: facts.tr.php 6250 2009-10-20 22:37:31Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map Gedcom tags with their Turkish values
$factarray["ABBR"]	= "Kısa başlık";
$factarray["ADDR"]	= "Adres";
$factarray["ADR1"]	= "1. adres";
$factarray["ADR2"]	= "2. adres";
$factarray["ADOP"]	= "Evlât edinme";
$factarray["AFN"]	= "Geçmiş Dosya Numara (AFN)";
$factarray["AGE"]	= "Yaşı";
$factarray["AGNC"]	= "Temsilci";
$factarray["ALIA"]	= "Takma adı";
$factarray["ANCE"]	= "Geçmişler / Atalar";
$factarray["ANCI"]	= "Atalar İlgilendirirler";
$factarray["ANUL"]	= "İptal";
$factarray["ASSO"]	= "İş Arkadaşı";
$factarray["AUTH"]	= "Yazar";
$factarray["BAPL"]	= "LDS vaftizi";
$factarray["BAPM"]	= "Vaftiz";
$factarray["BARM"]	= "Koca";
$factarray["BIRT"]	= "Doğum";
$factarray["BLES"]	= "Kutsama";
$factarray["BLOB"]	= "'Binary' veri nesnesi";
$factarray["BURI"]	= "Defin";
$factarray["CALN"]	= "Telefon numarası";
$factarray["CAST"]	= "Kast / Sosyal Durumlar";
$factarray["CAUS"]	= "Vefat nedeni";
$factarray["CEME"]  = "Mezarlık";
$factarray["CENS"]	= "Nüfus sayımı";
$factarray["CHAN"]	= "Son değişiklik";
$factarray["CHAR"]	= "Karakter kümesi";
$factarray["CHIL"]	= "Çocuk";
$factarray["CHR"]	= "Vaftiz";
$factarray["CHRA"]	= "Erişkin vaftizi";
$factarray["CITY"]	= "Şehir";
$factarray["CONF"]	= "Protestanlikta<br />Kiliseye kabul edinme ayini";
$factarray["CONL"]	= "LDS kilisesine kabul edinme ayini";
$factarray["COPR"]	= "Telif hakkı";
$factarray["CORP"]	= "Şirket / Kuruluş";
$factarray["CREM"]	= "Ölüyü yakma";
$factarray["CTRY"]	= "Ülke";
$factarray["DATA"]	= "Veri";
$factarray["DATE"]	= "Tarih";
$factarray["DEAT"]	= "Vefat";
$factarray["DESC"]	= "Soyundan gelen şahıslar";
$factarray["DESI"]	= "Neslinden Olanlar İlgilendirirler";
$factarray["DEST"]	= "Gidilecek yer";
$factarray["DIV"]	= "Boşanma";
$factarray["DIVF"]	= "Boşanma dosyası";
$factarray["DSCR"]	= "Tarif";
$factarray["EDUC"]	= "Eğitim";
$factarray["EMIG"]	= "İçinden göç ettiği ülke";
$factarray["ENDL"]	= "LDS Bağışı";
$factarray["ENGA"]	= "Nişan";
$factarray["EVEN"]	= "Hadise";
$factarray["FAM"]	= "Aile";
$factarray["FAMC"]	= "Çocuk olarak aile";
$factarray["FAMF"]	= "Aile dosyası";
$factarray["FAMS"]	= "Eş olarak aile";
$factarray["FCOM"]	= "Hrist. İlk komünyon";
$factarray["FILE"]	= "Harici dosya";
$factarray["FORM"]	= "Biçim";
$factarray["GIVN"]	= "İsim";
$factarray["GRAD"]	= "Mezuniyet";
$factarray["HUSB"]  = "Koca";
$factarray["IDNO"]	= "GEDCOM varitabanı içindeki tanıtım numarası";
$factarray["IMMI"]	= "İçine göç ettiği ülke";
$factarray["LEGA"]	= "Vasiyette kendisine mal bırakılan kişi";
$factarray["MARB"]	= "Yasaklanılan Evlilik";
$factarray["MARC"]	= "Evlilik kontratı";
$factarray["MARL"]	= "Evlilik Lisansı";
$factarray["MARR"]	= "Nikâh";
$factarray["MARS"]	= "Evlilik Yerleşimi";
$factarray["MEDI"]	= "Multimedya türü";
$factarray["NAME"]	= "Soy isim";
$factarray["NATI"]	= "Vatandaşlık";
$factarray["NATU"]	= "Yeni yurttaşlık";
$factarray["NICK"]	= "Lakabı";
$factarray["NCHI"]	= "Çocuk sayısı";
$factarray["NMR"]	= "Evlilik sayısı";
$factarray["NOTE"]	= "Not";
$factarray["NPFX"]	= "İsmin önüne konulan unvan";
$factarray["NSFX"]	= "İsmin sonuna konan ek";
$factarray["OBJE"]	= "Multimedya nesnesi";
$factarray["OCCU"]	= "Meslek";
$factarray["ORDI"]	= "Düzen";
$factarray["ORDN"]	= "Atanma";
$factarray["PAGE"]	= "Davet Detayları";
$factarray["PEDI"]	= "Soyağacı / Seçere";
$factarray["PLAC"]	= "Yer";
$factarray["PHON"]	= "Telefon";
$factarray["POST"]	= "Posta kodu";
$factarray["PROB"]	= "Vasiyetname";
$factarray["PROP"]	= "Mülkiyet";
$factarray["PUBL"]	= "Yayın";
$factarray["QUAY"]	= "Verinin kalitesi";
$factarray["REPO"]	= "Depolanan yer";
$factarray["REFN"]	= "Kaynak numarası";
$factarray["RELA"]	= "Yakınlık";
$factarray["RELI"]	= "Din";
$factarray["RESI"]	= "Ev";
$factarray["RESN"]	= "Sınırlama";
$factarray["RETI"]	= "Emeklilik";
$factarray["RFN"]	= "Kayıt dosya numarası";
$factarray["RIN"]	= "Kayıt kişisel numarası";
$factarray["ROLE"]	= "Rol";
$factarray["SEX"]	= "Cinsiyet";
$factarray["SLGC"]	= "LDS Çocuk Mühürlemesi";
$factarray["SLGS"]	= "LDS Eş Mühürlemesi";
$factarray["SOUR"]	= "Kaynak";
$factarray["SPFX"]	= "Soyismin sonuna konan ek";
$factarray["SSN"]	= "Sosyal sigorta numarası";
$factarray["STAE"]	= "Durum";
$factarray["STAT"]	= "Durumlar";
$factarray["SUBM"]	= "Gönderen";
$factarray["SUBN"]	= "Teslim";
$factarray["SURN"]	= "Soy isim";
$factarray["TEMP"]	= "Tapınak";
$factarray["TEXT"]	= "Metin";
$factarray["TIME"]	= "Saat";
$factarray["TITL"]	= "Başlık";
$factarray["TYPE"]	= "Tür / Tip";
$factarray["WIFE"]  = "Hanım";
$factarray["WILL"]	= "Vasiyetname";
$factarray["_EMAIL"]	= "E-posta adresi";
$factarray["EMAIL"]	= "E-posta adresi:";
$factarray["_TODO"]	= "Yapılması gereken iş";
$factarray["_UID"]	= "Üniversel tanıtıcı";
$factarray["_PGVU"]	= "Son değişikliği yapan";
$factarray["SERV"] = "Uzak Server";
$factarray["_GEDF"] = "GEDCOM Dosya";
$factarray["_PRIM"]	= "Tercih edilen fotoğraf";
$factarray["_DBID"] = "Veritabanı ID bağlandı";
$factarray["STAT:DATE"] = "İstatistik Değişim Tarihi";
$factarray["FAMC:HUSB:SURN"] = "Babaların Soyadı";
$factarray["FAMC:WIFE:SURN"] = "Annelerin Soyadı";
$factarray["FAMC:HUSB:BIRT:PLAC"] = "Babaların Doğumyeri";
$factarray["FAMC:WIFE:BIRT:PLAC"] = "Annelerin Doğumyeri";
$factarray["FAMC:MARR:PLAC"] = "Ebeveynlerin Evlilik Yeri";
$factarray["FAMC:HUSB:OCCU"] = "Baba Mesleği";
$factarray[":BIRT:PLAC"] = "Doğumyeri";
$factarray["FAMS:MARR:PLAC"] = "Evlilik Yeri";
$factarray["FAMS:SPOUSE:DEAT:PLAC"] = "Hayat Arkadaşı Ölüm Yeri";
$factarray["FAMC:HUSB:GIVN"] = "Babanın İlk Adı";
$factarray["FAMS:SPOUSE:BIRT:PLAC"] = "Hayat Arkadaşın Doğum Yeri";
$factarray["FAMC:WIFE:GIVN"] = "Annenin İlk Adı";
$factarray["FAMC:HUSB:FAMC:HUSB:GIVN"] = "Baba Tarafındaki Büyükbabanın Verilen İsmi ";
$factarray["FAMC:WIFE:FAMC:WIFE:GIVN"] = "Anne Tarafındaki Anneannenin Verilen İsmi ";
$factarray["FAMC:WIFE:FAMC:HUSB:GIVN"] = "Anne Tarafındaki Dedenin Verilen İsmi ";
$factarray["FAMC:HUSB:FAMC:WIFE:GIVN"] = "Baba Tarafındaki Babaannenin Verilen İsmi ";
$factarray["FAMS:CHIL:BIRT:PLAC"] = "Çocukların Doğum Yeri";
$factarray["FAMS:NOTE"] = "Eş Notu";
$factarray["FAMS:CENS:DATE"] = "Eş Sayım Tarihi";
$factarray["FAMS:CENS:PLAC"] = "Eş Sayım Yeri";
$factarray["FAMS:DIV:DATE"] = "Eş Boşanma Tarihi";
$factarray["FAMS:DIV:PLAC"] = "Eş Boşanma Yeri";
$factarray["FAMS:SLGS:DATE"] = "LDS Eş İzinname Tarihi";
$factarray["FAMS:SLGS:PLAC"] = "LDS Eş İzinname Yeri";
$factarray["FAMS:SLGS:TEMP"] = "LDS Eş İzinname İbadethane";

$factarray["BIRT:PLAC"] = "Doğum Yeri";
$factarray["DEAT:PLAC"] = "Ölüm Yeri";
$factarray["CHR:PLAC"] = "Vaftiz eden yer ";
$factarray["BAPM:PLAC"] = "Vaftiz yer";
$factarray["BURI:PLAC"] = "Gömüldüğü Yer";
$factarray["MARR:PLAC"] = "Evlendiği Yer";
$factarray["_THUM"]	= "Tırnak önizleme kullanma?";

// These facts are specific to gedcom exports from Family Tree Maker
$factarray["_MDCL"]	= "Sağlıksal bilgiler";
$factarray["_DEG"]	= "Derece";
$factarray["_MILT"]	= "Askerlik görevi";
$factarray["_SEPR"]	= "Ayrılmış";
$factarray["_WEIG"]	= "Ağırlık";
$factarray["_DETS"]	= "Bir eşin vefatı";
$factarray["CITN"]	= "Vatandaşlık";
$factarray["_FA1"]	= "1. Hadise";
$factarray["_FA2"]	= "2. Hadise";
$factarray["_FA3"]	= "3. Hadise";
$factarray["_FA4"]	= "4. Hadise";
$factarray["_FA5"]	= "5. Hadise";
$factarray["_FA6"]	= "6. Hadise";
$factarray["_FA7"]	= "7. Hadise";
$factarray["_FA8"]	= "8. Hadise";
$factarray["_FA9"]	= "9. Hadise";
$factarray["_FA10"]	= "10. Hadise";
$factarray["_FA11"]	= "11. Hadise";
$factarray["_FA12"]	= "12. Hadise";
$factarray["_FA13"]	= "13. Hadise";
$factarray["_MREL"]	= "Anne'ye akrabalık derecesi";
$factarray["_FREL"]	= "Baba'ya akrabalık derecesi";
$factarray["_MSTAT"]	= "Başlayan Evlilik Durumları";
$factarray["_MEND"]	= "Evlilik Biten Durumlar";
$factarray["FAX"] = "Faks";
$factarray["FACT"] = "Hadise";
$factarray["WWW"]	= "İnternet sitesi";
$factarray["MAP"] = "Harıta";
$factarray["LATI"] = "Enlem";
$factarray["LONG"] = "Boylam";
$factarray["FONE"]	= "Fonetik";
$factarray["_NAME"] = "İsmin Gönder";
$factarray["URL"] = "Web URL";
$factarray["_URL"] = "Web URL";
$factarray["_HEB"]	= "İbranice";
$factarray["_TYPE"] = "Media Tipi";
$factarray["_SSHOW"] = "Kayma Gösteri";
$factarray["_SUBQ"]= "Kısa Versiyon";
$factarray["_BIBL"]	= "Kaynakça";
$factarray["EMAL"]	= "Email Adresi";

// Other common customized facts
$factarray["_ADPF"]	= "Baba tarafından evlât edindi";
$factarray["_ADPM"]	= "Anne tarafından evlât edindi";
$factarray["_AKAN"]	= "Bu isimle de tanınıyor";
$factarray["_AKA"]	= "Bu isimle de tanınıyor";
$factarray["_COML"]	= "Umumi Hukuk Evliliği";
$factarray["_EYEC"]	= "Göz rengi";
$factarray["_FNRL"]	= "Cenaze töreni";
$factarray["_HAIR"]	= "Saç rengi";
$factarray["_HEIG"]	= "Boy";
$factarray["_HOL"]  = "Facia";
$factarray["_INTE"]	= "Defin etme";
$factarray["_MARI"]	= "Evlilik Niyeti";
$factarray["_MBON"]	= "Resmi Evlilik";
$factarray["_MEDC"]	= "Sağlıksal durumu";
$factarray["_MILI"]	= "Askerlik";
$factarray["_NMR"]	= "Evli değil";
$factarray["_NLIV"]	= "Yaşamıyor";
$factarray["_NMAR"]	= "Hiçbir zaman evli değildi";
$factarray["_PRMN"]	= "Kalıcı numarası";
$factarray["_MARNM"]	= "Evlilik soyismi";
$factarray["_MARNM_SURN"] = "Evlilik soyismi";
$factarray["_STAT"]	= "Evlilik durumu";
$factarray["COMM"]	= "Açıklama";
$factarray["MARR_CIVIL"] = "Medeni Nikah";
$factarray["MARR_RELIGIOUS"] = "Dini Evlilik";
$factarray["MARR_PARTNERS"] = "Ortaklık Kaydet";
$factarray["MARR_UNKNOWN"] = "Bilinmeyen Evlilik Tipi";
$factarray["_HNM"] = "İbranice İsim";
$factarray["_DEAT_SPOU"] = "Hayat arkadaşının ölümü";
$factarray["_BIRT_CHIL"] = "Çocuğunun doğumu";
$factarray["_MARR_CHIL"] = "Çocuğunun evliliği";
$factarray["_DEAT_CHIL"] = "Çocuğunun ölümü";
$factarray["_BIRT_GCHI"] = "Torununun doğumu";
$factarray["_MARR_GCHI"] = "Torununun evliliği";
$factarray["_DEAT_GCHI"] = "Torununun ölümü";
$factarray["_MARR_FATH"] = "Babasının evliliği";
$factarray["_DEAT_FATH"] = "Babasının ölümü";
$factarray["_MARR_MOTH"] = "Annesinin evliliği";
$factarray["_DEAT_MOTH"] = "Annesinin ölümü";
$factarray["_BIRT_SIBL"] = "Kardeşinin doğumu";
$factarray["_MARR_SIBL"] = "Kardeşinin evliliği";
$factarray["_BIRT_HSIB"] = "Üvey kardeşinin doğumu";
$factarray["_MARR_HSIB"] = "Üvey kardeşinin evliliği";
$factarray["_DEAT_HSIB"] = "Üvey kardeşinin ölümü";
$factarray["_BIRT_NEPH"] = "Yeğeninin doğumu";
$factarray["_MARR_NEPH"] = "Yeğeninin evliliği";
$factarray["_DEAT_NEPH"] = "Yeğeninin ölümü";
$factarray["_DEAT_SIBL"] = "Kardeşinin ölümü";
$factarray["_DEAT_GPAR"] = "Büyük ebeveynin ölümü";
$factarray["_BIRT_FSIB"] = "Amcasının doğumu";
$factarray["_MARR_FSIB"] = "Amcasının evliliği";
$factarray["_DEAT_FSIB"] = "Amcasının ölümü";
$factarray["_BIRT_MSIB"] = "Anne kardeşin doğumu";
$factarray["_MARR_MSIB"] = "Anne kardeşin evliliği";
$factarray["_DEAT_MSIB"] = "Anne kardeşinin ölümü";
$factarray["_BIRT_COUS"] = "İlk kuzeninin doğumu";
$factarray["_MARR_COUS"] = "İlk kuzeninin evliliği";
$factarray["_DEAT_COUS"] = "İlk kuzeninin ölümü";
$factarray["_FAMC_EMIG"] = "Ebeveynlerin göçü";
$factarray["_FAMC_RESI"] = "Ebeveynlerin ikâmeti";

// GEDCOM 5.5.1 related facts
$factarray["ROMN"] = "Latince";

if (file_exists( "languages/facts.tr.extra.php")) require  "languages/facts.tr.extra.php";

$factarray["FAMS:MARR:DATE"] = "Evlilik Tarihi";
$factarray["BIRT:DATE"] = "Doğum Tarihi";
$factarray["DEAT:DATE"] = "Ölüm Tarihi";
$factarray["CHR:DATE"] = "Vaftiz edildiği Tarih";
$factarray["BAPM:DATE"] = "Vaftiz Tarihi";
$factarray["BURI:DATE"] = "Gömme Tarihi";
$factarray["MARR:DATE"] = "Evlilik Tarihi";
$factarray["_NAMS"]	= "Adaş";
$factarray["_SCBK"] = "Kupür";
$factarray["_BURI_SPOU"] = "Hayat arkadaşının gömmesi";
$factarray["_CREM_SPOU"] = "Hayat arkadaşının ölü yakması";
$factarray["_BAPM_CHIL"] = "Bir çocuğun vaftizi";
$factarray["_ADOP_CHIL"] = "Bir çocuğu evlat edinme";
$factarray["_MARB_CHIL"] = "Bir çocuğu evlat edinme";
$factarray["_BURI_CHIL"] = "Çocuğun defini";
$factarray["_CREM_CHIL"] = "Çocuğun ölü yakılması";
$factarray["_BAPM_GCHI"] = "Torunun vaftizi";
$factarray["_ADOP_GCHI"] = "Bir torunu evlat edinme";
$factarray["_BURI_GCHI"] = "Torunun defini";
$factarray["_CREM_GCHI"] = "Torunun ölü yakılması";
$factarray["_BIRT_GGCH"] = "Büyük-torunun doğumu";
$factarray["_BAPM_GGCH"] = "Büyük-torunun vaftizi";
$factarray["_ADOP_GGCH"] = "Büyük-torunu evlat edinme";
$factarray["_MARR_GGCH"] = "Büyük-torunun evliliği";
$factarray["_DEAT_GGCH"] = "Büyük-torunun ölümü";
$factarray["_BURI_GGCH"] = "Büyük-torunun defni";
$factarray["_CREM_GGCH"] = "Büyük-torunun ölü yakılması";
$factarray["_BURI_FATH"] = "Babanın defni";
$factarray["_CREM_FATH"] = "Babanın ölü yakılması";
$factarray["_MARR_FAMC"] = "Ebeveynlerin evliliği";
$factarray["_BURI_MOTH"] = "Annenin defni";
$factarray["_BAPM_SIBL"] = "Kardeşin vaftizi";
$factarray["_ADOP_SIBL"] = "Kardeşi evlat edinme";
$factarray["_BURI_SIBL"] = "Kardeşin defni";
$factarray["_CREM_SIBL"] = "Kardeşin ölü yakılması";
$factarray["_BAPM_HSIB"] = "Üvey-kardeşin vaftizi";
$factarray["_ADOP_HSIB"] = "Üvey-kardeşi evlat edinme";
$factarray["_BURI_HSIB"] = "Üvey-kardeşin defni";
$factarray["_CREM_HSIB"] = "Üvey-kardeşin ölü yakılması";
$factarray["_BAPM_NEPH"] = "Erkek veya kız yeğenin vaftizi";
$factarray["_CREM_COUS"] = "İlk kuzenin ölü yakılması";
$factarray["_BURI_COUS"] = "İlk kuzenin defni";
$factarray["_ADOP_COUS"] = "İlk kuzenin evlat edilmesi";
$factarray["_BAPM_COUS"] = "İlk kuzenin vaftizi";
$factarray["_CHR_COUS"]  = "İlk kuzenin vaftiz edilişi";
$factarray["_CREM_MSIB"] = "Annenin kardeşi ölü yakılması";
$factarray["_BURI_MSIB"] = "Annenin kardeşi defni";
$factarray["_ADOP_MSIB"] = "Annenin kardeşi evlat edinme";
$factarray["_DEAT_GGPA"] = "Büyük-büyük-ebeveynin ölümü";
$factarray["_MARB_GCHI"] = "Torunun afaroz evliliği";
$factarray["_MARB_GGCH"] = "Büyük torunun afaroz evliliği";
$factarray["_MARB_FATH"] = "Babanın afaroz evliliği";
$factarray["_MARB_FAMC"] = "Ebeveynlerin afaroz evliliği";
$factarray["_MARB_MOTH"] = "Annenin aforoz evliliği";
$factarray["_CREM_MOTH"] = "Annenin ölü yakılması";
$factarray["_MARB_SIBL"] = "Kardeşin aforoz evliliği";
$factarray["_MARB_HSIB"] = "Üvey kardeşin aforoz evliliği";
$factarray["_ADOP_NEPH"] = "Erkek yada kız yeğen evlat edinme";
$factarray["_MARB_NEPH"] = "Erkek yada kız yeğen aforoz evlat edinme";
$factarray["_BURI_NEPH"] = "Erken veya Kız yeğenin defni";
$factarray["_CREM_NEPH"] = "Erken veya Kız yeğenin ölü yakılması";
$factarray["_BURI_GPAR"] = "Büyük ebeveynin defni";
$factarray["_CREM_GPAR"] = "Büyük ebeveynin ölü yakılması";
$factarray["_BURI_GGPA"] = "Büyük büyük ebeveynin defni";
$factarray["_CREM_GGPA"] = "Büyük büyük ebeveynin ölü yakılması";
$factarray["_BAPM_FSIB"] = "Babanın kardeşinin vaftizi";
$factarray["_ADOP_FSIB"] = "Babanın kardeşi evlat edilmesi";
$factarray["_MARB_FSIB"] = "Babanın kardeşi aforoz evliliği";
$factarray["_BURI_FSIB"] = "Babanın kardeşi defni";
$factarray["_CREM_FSIB"] = "Babanın kardeşi ölü yakılması";
$factarray["_BAPM_MSIB"] = "Annenin kardeşi vaftizi";
$factarray["_MARB_MSIB"] = "Annenin kardeşi aforoz evliliği";
$factarray["_MARB_COUS"] = "İlk kuzeninin aforoz evliliği";
$factarray["_BRTM"]	= "Sünnet Olduğu";
$factarray["__BRTM_CHIL"] = "Bir çocuğun sünnet oluşu";
$factarray["__BRTM_GCHI"] = "Bir torunun sünnet oluşu";
$factarray["__BRTM_GGCH"] = "Bir büyük torunun sünnet oluşu";
$factarray["__BRTM_SIBL"] = "Bir kardeşin sünnet oluşu";
$factarray["__BRTM_HSIB"] = "Üvey kardeşin sünnet oluşu";
$factarray["__BRTM_NEPH"] = "Bir erkek yeğenin sünnet oluşu";
$factarray["__BRTM_FSIB"] = "Amcanın sünnet oluşu";
$factarray["__BRTM_MSIB"] = "Dayının sünnet oluşu";
$factarray["__BRTM_COUS"] = "İlk kuzenin sünnet oluşu";
$factarray["_CHR_MSIB"] = "Anne kardeşinin vaftizi";
$factarray["_CHR_FSIB"] = "Baba kardeşinin vaftizi";
$factarray["_CHR_NEPH"] = "Erkek veya Kız yeğenin vaftizi";
$factarray["_CHR_HSIB"] = "Üvey kardeşin vaftizi";
$factarray["_CHR_SIBL"] = "Kardeşin vaftizi";
$factarray["_CHR_GGCH"] = "Büyük torunun vaftizi";
$factarray["_CHR_GCHI"] = "Torunun vaftizi";
$factarray["_CHR_CHIL"] = "Çocuğun vaftizi";
$factarray["SHARED_NOTE"]	= "Paylaşılan not";
$factarray["TITL:FONE"]	= "Fonetik Başlık";
$factarray["PLAC:FONE"]	= "Fonetik Yeri";
$factarray["NAME:FONE"]	= "Fonetik Adı";
$factarray["TITL:_HEB"]	= "Musevi içinde Başlık";
$factarray["PLAC:_HEB"]	= "Musevi içinde Yeri";
$factarray["NAME:_HEB"]	= "Musevi içinde Adı";
$factarray["DATA:DATE"] = "Orijinal kaynak giriş tarihi";
$factarray["NAME:ROMN"]	= "Romanizasyonlarda İsim";
$factarray["PLAC:ROMN"]	= "Romanizasyonlarda Yer";
$factarray["TITL:ROMN"]	= "Romanizasyonlarda Başlık";
?>
