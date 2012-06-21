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
 * @subpackage GoogleMap
 * @author Adem GENÇ uzayuydu@gmail.com http://www.muttafi.com 
 * @version $Id: lang.tr.php 4882 2009-01-23 10:28:26Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["googlemap"]              = "Harita";
$pgv_lang["no_gmtab"]               = "Bu kişi için harita verisi yok";
$pgv_lang["gm_disabled"]            = "GoogleMap modülü devredışı";

$pgv_lang["gm_redraw_map"]          = "Haritayı varsayılana getir";
$pgv_lang["gm_map"]                 = "Harita";
$pgv_lang["gm_satellite"]           = "Uydu";
$pgv_lang["gm_hybrid"]              = "Karma";
$pgv_lang["gm_hybrid"]              = "Karışık";

// Configuration texts
$pgv_lang["gm_manage"]              = "Googlemap konfigürasyonu yönetimi";
$pgv_lang["configure_googlemap"]    = "GoogleMap konfigürasyonu";
$pgv_lang["gm_admin_error"]         = "Sadece yöneticileri için bu sayfa";
$pgv_lang["gm_db_error"]            = "Yer konumun tablosu databasede bulunamadı";
$pgv_lang["gm_table_created"]       = "yer konum tabloyu oluştur";
$pgv_lang["googlemap_enable"]       = "GoogleMap Etkin";
$pgv_lang["googlemapkey"]           = "GoogleMap API keyi";
$pgv_lang["gm_map_type"]            = "Varsayılan harita tipi";
$pgv_lang["gm_map_size"]            = "Haritanın büyüklüğü (piksel olarak)";
$pgv_lang["gm_map_size_x"]          = "Genişlik";
$pgv_lang["gm_map_size_y"]          = "Yükseklik";
$pgv_lang["gm_map_zoom"]            = "Haritanın büyültme faktörü";
$pgv_lang["gm_digits"]              = "rakamlar";
$pgv_lang["gm_min"]                 = "Enaz.";
$pgv_lang["gm_max"]                 = "Enfazla.";
$pgv_lang["gm_default_level0"]      = "Varsayılan en üst değer";
$pgv_lang["gm_nof_levels"]          = "Değerlerin sayısı";
$pgv_lang["gm_config_per_level"]    = "Konfigürasyonla değer ";
$pgv_lang["gm_name_prefix"]         = "Önek";
$pgv_lang["gm_name_postfix"]        = "Sonek";
$pgv_lang["gm_name_pre_post"]       = "Önek / Sonek sırala";
$pgv_lang["gm_level"]               = "Değer";
$pgv_lang["gm_pp_none"]             = "Önek/sonek yok";
$pgv_lang["gm_pp_n_pr_po_b"]        = "Normal, önek, sonek, her ikisi";
$pgv_lang["gm_pp_n_po_pr_b"]        = "Normal, sonek, önek, her ikisi";
$pgv_lang["gm_pp_pr_po_b_n"]        = "Önek, sonek, her ikisi, normal";
$pgv_lang["gm_pp_po_pr_b_n"]        = "Sonek, önek, her ikisi, normal";
$pgv_lang["gm_pp_pr_po_n_b"]        = "Önek, sonek, normal, her ikisi";
$pgv_lang["gm_pp_po_pr_n_b"]        = "Sonek, önek, normal, her ikisi";
$pgv_lang["googlemap_coord"]        = "Harita koordinatları göster";

//wooc place hierarchy
$pgv_lang["gm_place_hierarchy"]  	= "Yer Aşaması için Googlemap Kullan";
$pgv_lang["gm_ph_map_size"]			= "Yer Aşaması harıtanın boyutu (piksel içinde)";
$pgv_lang["gm_ph_marker_type"]		= "Yer Aşamanın içinde yer işaretlerin tipi";
$pgv_lang["gm_standard_marker"]		= "Standard";
$pgv_lang["gm_no_coord"]			= "Bu yer hiç bir koordinatlara sahip değil";
$pgv_lang["gm_ph_placenames"]		= "Kısa yer isimleri göster";
$pgv_lang["gm_ph_count"]			= "İndis ve aileler sayısını göster";
$pgv_lang["gm_ph_wheel"]			= "Zum için fare tekerini kullan";
$pgv_lang["gm_ph_controls"]			= "Harıta kontrolleri gizle";

// Texts used on the Places location page
$pgv_lang["edit_place_locations"]   = "Coğrafi yer konumları düzenle";
$pgv_lang["pl_no_places_found"]     = "Yerler bulunamadı";
$pgv_lang["pl_zoom_factor"]         = "Büyültme faktör ";
$pgv_lang["pl_place_icon"]          = "İkon";
$pgv_lang["pl_edit"]                = "Coğrafi konumu düzenle";
$pgv_lang["pl_add_place"]           = "Yer ekle";
$pgv_lang["pl_import_gedcom"]       = "Geçerli GEDCOMdan içeri aktar";
$pgv_lang["pl_import_all_gedcom"]   = "Tüm GEDCOMlardan içeri aktar";
$pgv_lang["pl_import_file"]         = "Dosyadan içeri aktar";
$pgv_lang["pl_export_file"]         = "Geçerli görüntülenen dosyadan dışarı ver";
$pgv_lang["pl_export_all_file"]     = "Tüm konumların dosyalarını dışarı ver";
$pgv_lang["pl_north_short"]         = "K";
$pgv_lang["pl_south_short"]         = "G";
$pgv_lang["pl_east_short"]          = "D";
$pgv_lang["pl_west_short"]          = "B";
$pgv_lang["pl_places_localfile"]	  = "Yerleri kapsayan sunucudaki (CSV) dosya yükle";
$pgv_lang["pl_places_filename"]     = "Yerleri kapsayan (CSV) dosya yükle";
$pgv_lang["pl_clean_db"]            = "Konumları içeri aktarmadan önce-Tüm yeri temizle?";
$pgv_lang["pl_update_only"]         = "Sadece var olan yerleri güncelle?";
$pgv_lang["pl_overwrite_data"]      = "Dosyadan veri ile veri-konumun üzerine yaz?";
$pgv_lang["pl_no_places_found"]     = "Yerler bulunamadı";
$pgv_lang["pl_use_this_value"]      = "Bu değeri kullan";
$pgv_lang["pl_precision"]           = "Doğruluk";
$pgv_lang["pl_country"]             = "Ülke";
$pgv_lang["pl_state"]               = "Mevki";
$pgv_lang["pl_city"]                = "Şehir";
$pgv_lang["pl_neighborhood"]        = "Civari";
$pgv_lang["pl_house"]               = "Ev";
$pgv_lang["pl_max"]                 = "Max";
$pgv_lang["pl_delete"]              = "Coğrafi konumu sil";
$pgv_lang["pl_search_level"]		= "Bu duzeyde ara";
$pgv_lang["pl_search_all"]			= "Tümünü ara";
$pgv_lang["pl_unknown"]				= "Bilinmiyor";

$pgv_lang["pl_flag"]                = "Bayrak";
$pgv_lang["flags_edit"]             = "Bayrak seç";
$pgv_lang["pl_change_flag"]         = "Bayrağı değiştir";
$pgv_lang["pl_remove_flag"]         = "Bayrağı kaldır";

$pgv_lang["pl_remove_location"]     = "Bu konumu kaldır?";
$pgv_lang["pl_delete_error"]        = "Konum kaldırılmaz: bu yer alt-konumları kapsar";
$pgv_lang["list_inactive"]        	= "Konumlanmayan yerleri görmek için burayı tıkla";

//Placecheck specific text
$pgv_lang["placecheck"]				= "Yerleri Denetle";
$pgv_lang["placecheck_text"]		= "Bu seçilmiş GEDCOM dosyasından bütün yerleri listeleyecek. Varsayılan yoluyla bu GEDCOM dosyası ve GoogleMap tabloları arasında tamamen eşlenen yerler içermeyecek";
$pgv_lang["placecheck_top"]			= "Üst Yer Değeri";
$pgv_lang["placecheck_one"]			= "Bir Yer Değeri";
$pgv_lang["placecheck_select1"]		= "Üst Değer Seç...";
$pgv_lang["placecheck_select2"]		= "Sonraki Değer Seç...";
$pgv_lang["placecheck_key"]			= "Aşağıda kullanılan durum renkleri";
$pgv_lang["placecheck_key1"]		= "Bu yer ve koordinatları GoogleMap tablolarında yoklar";
$pgv_lang["placecheck_key2"]		= "Bu yer GoogleMap tablolarında mevcutlar, Ancak hiçbir koordinatlara sahip değiller";
$pgv_lang["placecheck_key3"]		= "bu yer değeri GEDCOM dosyanızda boş dur. Eklenmeli<br />GoogleMap ebeveyninden koordinatlar ile \"bilinmeyen (unknown)\" olarak yerleştir<br />Sizden önce düzey sonraki düzeye yeri ekle";
$pgv_lang["placecheck_key4"]		= "bu yer değeri GEDCOM dosyanızda boştur fakat \"bilinmeyen (unknown)\" olarak vardır<br />GoogleMap koordinatlarla tabloya yerleştirir. Hareket gerekli değil<br />eksik değere kadar girebilirsin";
$pgv_lang["placecheck_head"]		= "GEDCOM dosya için yer listesi";
$pgv_lang["placecheck_gedheader"]	= "GEDCOM dosya yer verisi<br/>(2 PLAC tag)";
$pgv_lang["placecheck_gm_header"]	= "GoogleMap yerlerin tablo verisi";
$pgv_lang["placecheck_unique"]		= "Tek yerlerin toplamı";
$pgv_lang["placecheck_zoom"]        = "Zum=";
$pgv_lang["placecheck_options"]     = "Yer liste seçnekleri denetle";
$pgv_lang["placecheck_filter_text"] = "Filitrelenen Seçeneklerin Listesi";
$pgv_lang["placecheck_match"] 		= "Tüm aynı yerler dahil -";
$pgv_lang["placecheck_lati"] 		= "Enlem";
$pgv_lang["placecheck_long"] 		= "Boylam";
?>
