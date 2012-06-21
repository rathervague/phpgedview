<?php
/**
 * English Language file for PhpGedView.
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
 * @subpackage BatchUpdate
 * @author Adem GENÇ uzayuydu@gmail.com http://www.muttafi.com 
 * @version $Id: lang.tr.php 4946 2009-01-29 12:18:22Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["batch_update"]="Küme Güncelle";
$pgv_lang["bu_update_chan"]="DEĞİŞEN kaydı güncelle";
$pgv_lang["bu_nothing"]="Hiç bir şey bulunamadı.";
$pgv_lang["bu__desc"]="Bu listeden küme güncelleştirilmesini seç";
$pgv_lang["bu_button_update"]="Güncelle";
$pgv_lang["bu_button_update_all"]="Tümü güncelle";
$pgv_lang["bu_button_delete"]="Sil";
$pgv_lang["bu_button_delete_all"]="Tümü sil";

$pgv_lang["bu_search_replace"]="Bul ve Değiştir";
$pgv_lang["bu_search_replace_desc"]="Basit arama veya gelişmiş aynısı eşlemesini kullanarak GEDCOM içindeki veriyi ara ve/veya değiştir yapabilirsiniz.";
$pgv_lang["bu_search"]="Aranacak metin/aynısı";
$pgv_lang["bu_replace"]="Yerine konacak metin";
$pgv_lang["bu_method"]="Arama Metodu";
$pgv_lang["bu_exact"]="Metin Çıkart";
$pgv_lang["bu_exact_desc"]="Eğer ki kelimenin ortasında gerçekleşse bile tam metni eşle.";
$pgv_lang["bu_words"]="Sadece tüm kelime";
$pgv_lang["bu_words_desc"]="Kelimenin ortasında gerçekleşmedikçe tam metni eşle.";
$pgv_lang["bu_wildcards"]="Özel karakter";
$pgv_lang["bu_wildcards_desc"]="Sıfır veya daha çok karakterleri eşlemek için &laquo;*&raquo; karakter kullanın, tek karakter eşlemek için &laquo;?&raquo; karakteri kullanın.";
$pgv_lang["bu_regex"]="Düzenli ifade";
$pgv_lang["bu_regex_desc"]="Düzenli ifade kullanımı ileri düzey kullanıcıları için tekniğidir.  Tekniğin detayını görmek için <a href=\"http://php.net/manual/en/regexp.reference.php\" target=\"_new\">php.net/manual/en/regexp.reference.php</a> tıklayın.";
$pgv_lang["bu_regex_bad"]="The regex Düzenli ifadede bir hata içerdiği belirlendi. Kullanamaz.";
$pgv_lang["bu_case"]="Duyarsız arama";
$pgv_lang["bu_case_desc"]="Aradığınız metin küçük ve büyük harf karakterleri ile eşlemek için bu kutuyu işaretleyin.";

$pgv_lang["bu_birth_y"]="Girilmemiş doğum kayıtları ekle";
$pgv_lang["bu_birth_y_desc"]="Tüm bireyler &laquo;yaşam olayının başlamasına&raquo; sahip olduğuna güvence vererek PGV performansını geliştirebilirsiniz.";

$pgv_lang["bu_death_y"]="Girilmemiş ölüm kayıtları ekle";
$pgv_lang["bu_death_y_desc"]="Tüm bireyler &laquo;yaşam olayının ölümüne&raquo; sahip olduğuna güvence vererek PGV performansını geliştirebilirsiniz.";

$pgv_lang["bu_married_names"]="Girilmemiş evli kadına soyadı ekle";
$pgv_lang["bu_married_names_desc"]="Evli kadınların soy adlarını kaydederek evli kadınları daha kolay arayabileceksiniz.<br />Yinede tüm kadınlar kocalarının soyadlarını almaz veya kullanmazlar bundan dolay GEDCOM da yanlış veri kaydetmekten sakının.";
$pgv_lang["bu_surname_option"]="Soyad Seçeneği";
$pgv_lang["bu_surname_replace"]="Hanımının soyadı kocasının soyadı ile yer değiştir";
$pgv_lang["bu_surname_add"]="Hanımının kızlık soyadı yeni soyadı olarak belirle";

$pgv_lang["bu_name_format"]="İsim kesikleri ve boşlukları ayarla";
$pgv_lang["bu_name_format_desc"]="Doğru İSİM kayıtları 'Adem/GENÇ' veya 'Adem /GENÇ' olarak formdan eski soyağaco programı tarafından üretilir.";

$pgv_lang["bu_duplicate_links"]="Kopya Linkleri Kaldır";
$pgv_lang["bu_duplicate_links_desc"]="Aynı kayıtta birden fazla linklere sahip olmak ortak bir gedcom hatasıdır, örnek bir çocuk birden fazla ailede kayıt edilip listelenmesi.";

?>
