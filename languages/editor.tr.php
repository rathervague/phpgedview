<?php
/**
 * Turkish Language file for PhpGedView.
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
 * @package PhpGedView
 * @author Kurt Norgaz
 * @author Adem GENÇ uzayuydu@gmail.com http://www.muttafi.com
 * @version $Id: editor.tr.php 6700 2010-01-10 02:38:55Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"]		= "Veritabanındaki değişiklikleri kabul/ret et";
$pgv_lang["replace"]			= "Kayıdı değiştir";
$pgv_lang["append"] 			= "Kayıt ekledi";
$pgv_lang["review_changes"]		= "GEDCOM içindeki değişiklikleri göster";
$pgv_lang["remove_object"]			= "Nesneyi Kaldır";
$pgv_lang["remove_links"]			= "Linkleri Kaldır";
$pgv_lang["media_not_deleted"]		= "Media klasörü taşınamadı.";
$pgv_lang["thumbs_not_deleted"]		= "Tırnak önizleme klasörü kaldırılamadı.";
$pgv_lang["thumbs_deleted"]			= "Tırnak önizleme klasörü başarılı biçimde kaldırıldı.";
$pgv_lang["show_thumbnail"]		= "Tırnak resimleri göster";
$pgv_lang["link_media"]			= "Multimedya bağla";
$pgv_lang["to_person"]				= "Kişiden";
$pgv_lang["to_family"]				= "Aileden";
$pgv_lang["to_source"]				= "Kaynaktan";
$pgv_lang["edit_fam"]				= "Aile Düzenle";
$pgv_lang["copy"]					= "Kopyala";
$pgv_lang["cut"]					= "Kes";
$pgv_lang["sort_by_birth"]			= "Doğum tarihi yoluyla sırala";
$pgv_lang["reorder_children"]		= "Çocukları tekrar sırala";
$pgv_lang["add_from_clipboard"]		= "Clipboardan ekle: ";
$pgv_lang["record_copied"]			= "Kayıt clipboarda kopyaladı";
$pgv_lang["add_unlinked_person"]	= "Bağlatısız bir şahıs ekle";
$pgv_lang["add_unlinked_source"]	= "Bağlantısız bir kaynak ekle";
$pgv_lang["server_file"]				= "Sunucudaki dosya ismi";
$pgv_lang["server_file_advice"]			= "Orijinal dosya adı değiştirilemedi duruyor.";
$pgv_lang["server_file_advice2"]		= "&laquo;http://&raquo; ile başlayan URL gire bilirsiniz.";
$pgv_lang["server_folder_advice"]		= "Varsayılan değer olarak &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; izlemek #GLOBALS[MEDIA_DIRECTORY_LEVELS]# dosya isimlerine kadar girebilirsiniz.<br />Girilecek yer dosya isminin &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; bölümüne girme.";
$pgv_lang["server_folder_advice2"]		= "URL kullanılmaz. Bu yükleyeceğiniz media dosyanıza özel klasör açmak için klasör adını girin.";
$pgv_lang["add_linkid_advice"]			= "Bu media bağlı olacağı kişi, aile veya kaynak ID leri bilmiyorsanız arayabilirsiniz.";
$pgv_lang["use_browse_advice"]			= "Yerel bilgisayarınızdan dosya aramak için &laquo;Gözat&raquo; butonunu kullanın.";
$pgv_lang["add_media_other_folder"]		= "Diğer klasör... lütfen adını girin ";
$pgv_lang["add_media_file"]				= "Sunucuda var olan media dosyalar";
$pgv_lang["main_media_ok1"]				= "Ana media dosya <b>#GLOBALS[oldMediaName]#</b> yeniden başarılı biçimde <b>#GLOBALS[newMediaName]#</b> olarak adlandırıldı.";
$pgv_lang["main_media_ok2"]				= "Ana medya <b>#GLOBALS[oldMediaName]#</b> dosyası <b>#GLOBALS[oldMediaFolder]#</b> klasörden <b>#GLOBALS[newMediaFolder]#</b> klasöre başarılı biçimde taşındı.";
$pgv_lang["main_media_ok3"]				= "Ana medya dosyası başarılı biçimde taşındı ve yeniden adlandırıldı <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> dan <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b> ya.";
$pgv_lang["main_media_fail0"]			= "Ana media dosya <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> mevcut değil.";
$pgv_lang["main_media_fail1"]			= "Ana medya <b>#GLOBALS[oldMediaName]#</b> dosyası <b>#GLOBALS[newMediaName]#</b> olarak yeniden adlandırılamadı.";
$pgv_lang["main_media_fail2"]			= "Ana medya <b>#GLOBALS[oldMediaName]#</b> dosyası <b>#GLOBALS[oldMediaFolder]#</b> klasörden <b>#GLOBALS[newMediaFolder]#</b> klasöre taşınamadı.";
$pgv_lang["main_media_fail3"]			= "Ana medya dosyası başarılı biçimde taşınamadı ve yeniden adlandırılamadı <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> dan <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b> ya.";
$pgv_lang["thumb_media_ok1"]			= "Tırnak önizleme dosya <b>#GLOBALS[oldMediaName]#</b> yeniden başarılı biçimde <b>#GLOBALS[newMediaName]#</b> olarak adlandırıldı.";
$pgv_lang["thumb_media_ok2"]			= "Tırnak önizleme <b>#GLOBALS[oldMediaName]#</b> dosyası <b>#GLOBALS[oldThumbFolder]#</b> klasörden <b>#GLOBALS[newThumbFolder]#</b> klasöre başarılı biçimde taşındı.";
$pgv_lang["thumb_media_ok3"]			= "Tırnak önizleme dosyası başarılı biçimde taşındı ve yeniden adlandırıldı  <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> dan <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b> ya.";
$pgv_lang["thumb_media_fail0"]			= "Tırnak önizleme dosya <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> mevcut değil.";
$pgv_lang["thumb_media_fail1"]			= "Tırnak önizleme <b>#GLOBALS[oldMediaName]#</b> dosya <b>#GLOBALS[newMediaName]#</b> olarak yeniden adlandırılamadı.";
$pgv_lang["thumb_media_fail2"]			= "Tırnak önizleme <b>#GLOBALS[oldMediaName]#</b> dosyası <b>#GLOBALS[oldThumbFolder]#</b> klasörden <b>#GLOBALS[newThumbFolder]#</b> klasöre taşınamadı.";
$pgv_lang["thumb_media_fail3"]			= "Tırnak önizleme dosyası başarılı biçimde taşınamadı ve yeniden adlandırılamadı <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> dan <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b> ya.";
$pgv_lang["add_asso"]				= "Yeni bir ilişki / eş ekle";
$pgv_lang["edit_sex"]				= "Cinsiyet Düzenle";
$pgv_lang["add_obje"]			= "Yeni multimedya nesnesini ekle";
$pgv_lang["add_name"]			= "Yeni isim ekle";
$pgv_lang["edit_raw"]			= "Ham GEDCOM kayıdını düzenle";
$pgv_lang["label_add_remote_link"]  = "Link Ekle";
$pgv_lang["label_gedcom_id"]        = "Veritabanı ID";
$pgv_lang["label_local_id"]         = "Kişisel ID";
$pgv_lang["accept"]			= "Kabul et";
$pgv_lang["accept_all"] 		= "Tüm değişiklikleri kabul et";
$pgv_lang["accept_successful"]		= "Değişiklikler başarı ile veritabanına işlenmiştir";
$pgv_lang["add_child"]			= "Çocuk ekle";
$pgv_lang["add_child_to_family"]	= "Bu aileye bir çocuk ekle";
$pgv_lang["add_fact"]			= "Yeni hadise ekle";
$pgv_lang["add_father"]			= "Yeni baba ekle";
$pgv_lang["add_husb"]			= "Erkek eş ekle";
$pgv_lang["add_opf_child"]				= "Bir bir-ebeveyn ailesi oluşturmak için bir çocuk ekle";
$pgv_lang["add_husb_to_family"]		= "Bu aileye erkek eş ekle";
$pgv_lang["add_media"]			= "Yeni multimedya nesne ekle";
$pgv_lang["add_media_lbl"]		= "Multimedya nesne ekle";
$pgv_lang["add_mother"]			= "Yeni anne ekle";
$pgv_lang["add_new_chil"]		= "Yeni çocuk ekle";
$pgv_lang["add_new_husb"]		= "Yeni koca eş ekle";
$pgv_lang["add_new_wife"]		= "Yeni hanım eş ekle";
$pgv_lang["add_note"]			= "Hadiseye not ekle";
$pgv_lang["add_note_lbl"]		= "Not ekle";
$pgv_lang["add_sibling"]		= "Erkek ya da kız kardeş ekle";
$pgv_lang["add_son_daughter"]		= "Erkek ya da kız çocuk ekle";
$pgv_lang["add_source"]			= "Hadiseye yeni bir kaynak alıntısını ekle";
$pgv_lang["add_source_lbl"]		= "Kaynak alıntısını ekle";
$pgv_lang["add_wife"]			= "Hanım eş ekle";
$pgv_lang["add_wife_to_family"]		= "Bu aileye hanım eş ekle";
$pgv_lang["advanced_search_discription"] = "Gelişmiş site arama";
$pgv_lang["auto_thumbnail"]			= "Otomatik tırnak önizleme";
$pgv_lang["basic_search"]			= "ara";
$pgv_lang["basic_search_discription"] = "Basit site arama";
$pgv_lang["birthdate_search"]		= "Doğum tarihi: ";
$pgv_lang["birthplace_search"]		= "Doğum yeri: ";
$pgv_lang["change"]					= "Değiştir";
$pgv_lang["change_family_members"]	= "Aile Üyeleri Değiş";
$pgv_lang["changes_occurred"]		= "Bu şahısın hakkında yapılan değişiklikler";
$pgv_lang["confirm_remove"]			= "Aileden bu kişiyi kaldırmak istediğinizden emin misiniz?";
$pgv_lang["confirm_remove_object"]	= "Databaseden bu nesneyi kaldırmak istediğinizden eminmisiniz?";
$pgv_lang["create_repository"]		= "Saklama yeri oluştur";
$pgv_lang["create_source"]		= "Yeni kaynak ekle";
$pgv_lang["current_person"]         = "Geçerli olarak aynı";
$pgv_lang["date"]			= "Tarih";
$pgv_lang["deathdate_search"]		= "Ölüm tarihi: ";
$pgv_lang["deathplace_search"]		= "Ölüm yeri: ";
$pgv_lang["delete_dir_success"]		= "Media ve tırnak önizleme klasörleri başarılı biçimde kaldırıldı.";
$pgv_lang["delete_file"]			= "Dosya sil";
$pgv_lang["no_upload"]				= "Medya dosyaları yükleme izni verilmedi, Çoklu-medya dosyaları yükleme izni verilmedi veya media dosya yazılabilir değildir.";
$pgv_lang["delete_repo"]			= "Saklama yeri sil";
$pgv_lang["directory_not_empty"]	= "Klasör boş.";
$pgv_lang["directory_not_exist"]	= "Klasör mevcut değil";
$pgv_lang["error_remote"]           = "Bir uzak siteyi seçtiniz.";
$pgv_lang["error_same"]             = "Aynı siteyi seçtiniz.";
$pgv_lang["external_file"]			= "Bu medya nesne bu serverdeki bir dosya olarak mevcut değil. Bu nesne silinmiş, taşınmış veya yeniden adlandırılmış olabilir.";
$pgv_lang["file_missing"]		= "Dosya buraya ulaşmadı. Tekrar yollayın.";
$pgv_lang["file_partial"]		= "Dosya tamamen yollanamadı. Lütfen tekrar deneyin";
$pgv_lang["file_success"]		= "Dosya başarı ile yollandı.";
$pgv_lang["file_too_big"]		= "Yollanılan dosya izin verilen büyüklüğü geçiyor.";
$pgv_lang["folder"]		 			= "Serverdeki klasör";
$pgv_lang["gedcom_editing_disabled"]	= "Bu GEDCOM veritabanının düzenlenmesi sistem yöneticisi tarafından engellenmiştir.";
$pgv_lang["gedrec_deleted"] 		= "GEDCOM kayıtı başarı ile silindi.";
$pgv_lang["gen_thumb"]				= "Tırnak önizleme oluştur";
$pgv_lang["gender_search"]			= "Cinsiyet: ";
$pgv_lang["generate_thumbnail"]		= "Otomatik olarak tırnak önizleme üret ";
$pgv_lang["hebrew_givn"]			= "İbranice Verilmiş İsimler";
$pgv_lang["hebrew_surn"]			= "İbranice Soyad";
$pgv_lang["hide_changes"]		= "Buraya tıklayıp değişiklikleri saklayın.";
$pgv_lang["highlighted"]		= "Vurgulanan resim";
$pgv_lang["illegal_chars"]			= "İsim alanı boş veya geçersiz karakter kullanıldı";
$pgv_lang["invalid_search_multisite_input"] = "Lütfen birini girin: İsim, Doğum Tarihi, Doğum Yeri, Ölüm Tarihi, Ölüm Yeri ve Cinsiyet ";
$pgv_lang["invalid_search_multisite_input_gender"] = "Lütfen daha fazla bilgi için cinsiyet arama yap";
$pgv_lang["label_diff_server"]      = "Farklı Site ";
$pgv_lang["label_location"]         = "Site Konumu ";
$pgv_lang["label_password_id2"]		= "Şifre: ";
$pgv_lang["label_rel_to_current"]   = "Geçerli Kişiye İlişkilendir";

$pgv_lang["label_same_server"]      = "Aynı site";
$pgv_lang["label_site"]             = "Site";
$pgv_lang["label_site_url"]         = "Site URL:";
$pgv_lang["label_username_id2"]		= "Kullanıcı adı: ";
$pgv_lang["lbl_server_list"]        = "Varolan bir siteyi kullan.";
$pgv_lang["lbl_type_server"]         = "Yeni site tipi gir.";
$pgv_lang["link_as_child"]			= "Çocuğu olarak var olan aileye bu kişiyi bağla";
$pgv_lang["link_as_husband"]		= "Kocası olarak var olan aileye bu kişiyi bağla";
$pgv_lang["link_success"]			= "Link başarılı biçimde eklendi";
$pgv_lang["link_to_existing_media"]		= "Var olan medya nesneye bağla";
$pgv_lang["max_media_depth"]		= "Sadece #MEDIA_DIRECTORY_LEVELS# dizinlere derin gidebilirsiniz";
$pgv_lang["max_upload_size"]		= "Enfazla yükleme boyutu: ";
$pgv_lang["media_deleted"]			= "Media klasörü başarılı biçimde kaldırıldı.";
$pgv_lang["media_exists"]			= "Media dosyası zaten var,";
$pgv_lang["media_file"]			= "Medya dosyası";
$pgv_lang["media_file_deleted"]		= "Media dosyası başarılı biçimde silindi.";
$pgv_lang["media_file_moved"]			= "Media dosya taşındı.";
$pgv_lang["media_file_not_moved"]	= "Media dosya taşınamadı.";
$pgv_lang["media_file_not_renamed"]	= "Media dosya taşınamaz veya yeniden adlandırılanmaz.";
$pgv_lang["media_thumb_exists"]		= "Media tırnak önizleme zaten mevcut.";
$pgv_lang["must_provide"]			= "Sağlamalısınız ";
$pgv_lang["name_search"]			= "İsim: ";
$pgv_lang["new_repo_created"]		= "Yeni saklama yeri oluşturuldu";
$pgv_lang["new_source_created"] 	= "Yeni kaynak başarı ile eklenmiştir.";
$pgv_lang["no_changes"]			= "Aktüel olarak yapılmış hiç bir değişiklik yoktur.";
$pgv_lang["no_known_servers"]		= "Bilinen Sunucular değil<br />Hiç bir sonuç bulunamıyor";
$pgv_lang["privacy_prevented_editing"]	= "Mahremiyet ayarları bu kayıtı düzenlemenizi engellemektedir.";
$pgv_lang["record_marked_deleted"]		= "Bu kayıt yönetici onayı üzerine silmek için işaretlendi.";
$pgv_lang["replace_with"]			= "İle değiştir";
$pgv_lang["show_changes"]		= "Bu kayıt güncelleştirilmiştir. Buraya tıklayıp değişiklikleri gözden geçirin.";
$pgv_lang["thumb_genned"]			= "Tırnak önizleme #thumbnail# otomatikman üretildi.";
$pgv_lang["thumbgen_error"]			= "Tırnak önizleme #thumbnail# otomatikman üretilemedi.";
$pgv_lang["thumbnail"]			= "Tırnak resim";
$pgv_lang["title_remote_link"]      = "Uzak link ekle";
$pgv_lang["undo"]			= "Geri al";
$pgv_lang["undo_all"]				= "Tüm değişiklikleri geri al";
$pgv_lang["undo_all_confirm"]		= "Bu GEDCOM daki tüm değişiklikleri geri almak istediğinizden eminmisiniz?";
$pgv_lang["undo_successful"]		= "Değişiklikler geri alındı";
$pgv_lang["update_successful"]		= "Güncelleştirme başarılı";
$pgv_lang["upload"]					= "Yükle";
$pgv_lang["upload_error"]		= "Dosyayı yüklerken bir hata oldu.";
$pgv_lang["upload_media"]		= "Medya dosyaları yükle";
$pgv_lang["upload_successful"]		= "Yükleme başarılı";
$pgv_lang["view_change_diff"]		= "Değiştirilen Dosyaları görüntüle";
$pgv_lang["change_family_instr"]	= "Aile üyelerini değiştirmek veya kaldırmak için bu sayfayı kullan.<br /><br />Her biri için sizin kullanabildiğiniz aile değişimdeki üye doldurana bir farklı lişiyi seçmeyi bağlar ailedeki o rol. Ayrıca ailede o kişiyi kaldırmak için kaldır bağlantıyı kullanabilirsiniz.<br /><br />Değiştirmeyi bitirdiğiniz zaman aile üyeler değişimleri kaydetmek için kaydet düğmesini tıklarlar..<br />";
$pgv_lang["multiple_gedcoms"]		= "Bu dosya bu serverdeki başka soyağacı veritabanına bağlıdır. Bu bağlantıları kaldırmadan taşınamaz, yeniden adlandırılamaz ve silinemez.";
$pgv_lang["paste_rid_into_field"]	= "Bu saklama yerine referans göstermek için baskıya hazırlama alanlarınıza takip eden saklama yeri kimlik bilgisini yapıştırın";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />Serverinize yüklemek için yerel bilgisayarınızdan dosyaları seçin. Dızın <b>#MEDIA_DIRECTORY#</b> ya da onun alt dizininin birisine tüm dosya yüklenecek..<br /><br />Sizin belirttiğiniz dosya adlar #MEDIA_DIRECTORY# ilave edilecekler. örneğin #MEDIA_DIRECTORY#benimailem.Tırnak önizleme dızın var olmazsa otomatik olarak oluşturulacak.";
$pgv_lang["accept_gedcom"]			= "Her bir değişikliği kabul etmek veya red etmek için karar ver.<br /><br /><br /><br />Değişikliklerin tümünü bir kerede katdetmek için aşağıdaki <b>\"Tüm değişiklikleri kabul et\"</b> linkini kullana bilirsiniz ve bilgi alabilirsiniz.<br /><br /><br />Değişiklikler hakkında daha çok bilgi almak için,<br /><br /><b>\"Değiştirilen Dosyayı Görüntüle\"</b> linkini tıkla,<br />veya yeni kayıtları görmek için <b>\"GEDCOM kayıdını göster\"</b> linkini tıklayın.";
$pgv_lang["no_temple"]				= "Tapınak Hayır - Yaşam Emir";
$pgv_lang["privacy_not_granted"]	= "Hiç erişime sahip olamazsınız";
$pgv_lang["admin_override"]			= "Yönetici Seçeneği";
$pgv_lang["no_update_CHAN"]			= "Son değişiklik bilgilerini değiştirme (Son değişiklik)";
$pgv_lang["select_events"]			= "Olayları Seç";
$pgv_lang["source_events"]			= "Bu kaynakla olayları ilişkilendir";
$pgv_lang["advanced_name_fields"]	= "Ek isimler (takma ad, evlilik adı, vs)";
$pgv_lang["edit_concurrency_change"] = "Bu kaydı değiştiren <i>#CHANGEUSER#</i> zamanı #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]	= "Son erişimizden beri kimlik bilgisi #PID# ile başka kullanıcıyla değiştirildi.";
$pgv_lang["edit_concurrency_msg1"]	= "Düzenleme formu oluştururken bir hata meydana geldi. Başka kullanıcı bu kaydı değiştirmiş olabilir siz onu önceden incelediniz.";
$pgv_lang["add_marriage"]			= "Yeni evliliği ekle";
$pgv_lang["reorder_media"]					= "Mediaları yeniden sırala";
$pgv_lang["reorder_media_window"]			= "Mediaları yeniden sırala <br />(yeni pencere)";
$pgv_lang["edit_repo"]				= "Depoyu Düzelt";
$pgv_lang["edit_concurrency_reload"]	= "Lütfen sizin tarayıcının Geri sayfa düğmesini tıklatarak sizin en yeni oluşturulmuş kayıtla çalışıyor olduğundan emin olmak için önceki sayfayı tekrar yükleyin.";
$pgv_lang["reorder_media_cancel"]			= "Çık ve geri gel";
$pgv_lang["reorder_media_reset"]			= "Orijinal düzenine geri dön";
$pgv_lang["reorder_media_save"]				= "Veritabanına sıralanmış medyayı kaydet";
$pgv_lang["reorder_media_title"]			= "Media parçaları yeniden sıralamak için tırnak önizlemeleri sürükle-ve-bırak";
$pgv_lang["reorder_media_window_title"]		= "Bir sıra tıkla, sonra media yeniden sıralamak için sürükle-ve-bırak ";
$pgv_lang["file_no_temp_dir"]		= "PHP geçici rehbere ihtiyaç duyuyor";
$pgv_lang["file_cant_write"]		= "PHP diske yazmakta başarız";
$pgv_lang["file_bad_extension"]		= "PHP uzantılar tarafından dosya engellendi";
$pgv_lang["file_unkown_err"]		= "Bilinmeyen dosya yükleme hata kodu #pgv_lang[global_num1]#. Lütfen bu hatayı rapor edin.";
$pgv_lang["gen_missing_thumbs"]		= "Eksik tırnak önizlemeleri oluştur";
$pgv_lang["gen_missing_thumbs_lbl"]	= "Eksik tırnak önizlemeleri";
$pgv_lang["paste_id_into_field"]	= "Yeni oluşturulan kaydı referans göstermesi için sizin düzenlediğiniz alanların ID numarasını yapıştır ";
$pgv_lang["resn_disabled"]				= "Not: Etki almak bu özelliği 'GEDCOM (RESN) Gizlilik Kısıtlamayı Kullan' kurarak etkinleştirmelisiniz.";
$pgv_lang["copy_error"]				= "Dosya #GLOBALS[whichFile1]# dan #GLOBALS[whichFile2]# ye kopyalanamaz.";
$pgv_lang["shared_note_updated"] 	= "Paylaşılan not başarılı biçimde güncelledi.";
$pgv_lang["new_shared_note_created"] 	= "Yeni paylaşılan not başarılı biçimde oluşturuldu.";
$pgv_lang["create_shared_note"]		= "Yeni paylaşılan not oluştur";
$pgv_lang["add_shared_note_lbl"]	= "Paylaşılan not ekle";
$pgv_lang["add_shared_note"]		= "Yeni paylaşılan not ekle";
$pgv_lang["add_unlinked"]			= "Bağlantısız Kayıtlar";
$pgv_lang["add_unlinked_note"]		= "Bağlantısız not ekle";
$pgv_lang["create_shared_note_assisted"]	= "Yardımcıyı kullanarak yeni paylaşılan not oluştur";
$pgv_lang["to_note"]				= "Paylaşılan Not";
$pgv_lang["to_repository"]			= "Depoya";
$pgv_lang["shared_note_assisted"]	= "Paylaşılmış Not kullanma Asistanı";
$pgv_lang["add_new_event_assisted"]			= "Yeni hadise kullanma Asistanı oluştur";
?>
