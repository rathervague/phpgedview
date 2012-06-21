<?php
/**
 * Indonesian texts
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
 *
 * @author PGV Developers
 * @translator alfarq
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: editor.id.php 4933 2009-01-28 16:58:50Z canajun2eh $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["add_marriage"]				= "Tambahkan rincian nikah";
$pgv_lang["edit_concurrency_change"] 			= "Rekaman ini terakhir diubah oleh <i>#CHANGEUSER#</i> pada #CHANGEDATE#";
$pgv_lang["edit_concurrency_msg2"]			= "Rekaman dengan id #PID# diubah oleh pengguna lain semenjak Anda terakhir kali mengaksesnya.";
$pgv_lang["edit_concurrency_msg1"]			= "Kesalahan terjadi saat membuat formulir Sunting. Pengguna lain mungkin mengganti rekaman ini semenjak sebelumnya Anda tampilkan.";
$pgv_lang["edit_concurrency_reload"]			= "Silakan gunakan tombol Halaman Sebelumnya perambah Anda dan muatkembali halaman sebelumnya untuk memastikan Anda bekerja dengan rekaman terkini.";
$pgv_lang["admin_override"]				= "Pilihan Admin";
$pgv_lang["no_update_CHAN"]				= "Jangan mutakhirkan rekaman CHAN (Perubahan Terakhir)";
$pgv_lang["select_events"]				= "Pilih Peristiwa";
$pgv_lang["source_events"]				= "Peristiwa yang terkait dengan sumber ini";
$pgv_lang["advanced_name_fields"]			= "Nama tambahan (nama panggilan, nama pernikahan, dll.)";
$pgv_lang["accept_changes"] 				= "Terima / Tolak Perubahan";
$pgv_lang["replace"]					= "Tumpuk rekaman";
$pgv_lang["append"] 					= "Tunda rekaman";
$pgv_lang["review_changes"] 				= "Teliti Perubahan GEDCOM";
$pgv_lang["remove_object"]				= "Buang objek";
$pgv_lang["remove_links"]				= "Buang pranala";
$pgv_lang["media_not_deleted"]				= "Direktori media tidak dibuang.";
$pgv_lang["thumbs_not_deleted"]				= "Direktori thumbnail tidak dibuang.";
$pgv_lang["thumbs_deleted"]				= "Direktori thumbnail berhasil dibuang.";
$pgv_lang["show_thumbnail"]				= "Perlihatkan thumbnail";
$pgv_lang["link_media"]					= "Pranala Media";
$pgv_lang["to_person"]					= "Ke Orang";
$pgv_lang["to_family"]					= "Ke Kekeluarga";
$pgv_lang["to_source"]					= "Ke Sumber";
$pgv_lang["edit_fam"]					= "Sunting Keluarga";
$pgv_lang["edit_repo"]					= "Sunting Repositori";
$pgv_lang["copy"]					= "Salin";
$pgv_lang["cut"]					= "Potong";
$pgv_lang["sort_by_birth"]				= "Urutkan berdasarkan tanggal lahir";
$pgv_lang["reorder_children"]				= "Susun anak";
$pgv_lang["reorder_media"]				= "Susun media";
$pgv_lang["reorder_media_title"]			= "Seret dan lepas thumbnail untuk menyusunkembali item media";
$pgv_lang["reorder_media_window"]			= "Susunkembali media (jendela)";
$pgv_lang["reorder_media_window_title"]			= "Klik sebuah baris, kemudian seret dan lepas untuk menyusunkembali media ";
$pgv_lang["reorder_media_save"]				= "Simpan media yang diurutkan ke basisdata";
$pgv_lang["reorder_media_reset"]			= "Kembalikan ke susunan awal";
$pgv_lang["reorder_media_cancel"]			= "Keluar dan kembali";
$pgv_lang["add_from_clipboard"]				= "Tambahkan dari Papanklip: ";
$pgv_lang["record_copied"]				= "Rekaman tersalin ke papanklib";
$pgv_lang["add_unlinked_person"]			= "Tambahkan orang yang tidak terkait";
$pgv_lang["add_unlinked_source"]			= "Tambahkan sumber yang tidak terkait";
$pgv_lang["server_file"]				= "Nama berkas pada server";
$pgv_lang["server_file_advice"]				= "Jangan ganti nama berkas awal.";
$pgv_lang["server_file_advice2"]			= "Anda dapat memasukkan URL, dimulai dengan &laquo;http://&raquo;.";
$pgv_lang["server_folder_advice"]			= "Anda dapat memasukkan hingga #GLOBALS[MEDIA_DIRECTORY_LEVELS]# nama folder untuk mengikuti default &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo;.<br />Jangan memasukkan &laquo;#GLOBALS[MEDIA_DIRECTORY]#&raquo; bagian dari tujuan nama folder.";
$pgv_lang["server_folder_advice2"]			= "Isian ini diabaikan jika Anda memasukkan URL ke isian nama berkas.";
$pgv_lang["add_linkid_advice"]				= "Masukkan atau cari ID orang, keluarga, atau sumber yang akan dikaitkan dengan item media ini.";
$pgv_lang["use_browse_advice"]				= "Gunakan tombol &laquo;Browse&raquo; mencari berkas yang diinginkan di komputer lokal Anda.";
$pgv_lang["add_media_other_folder"]			= "Folder lain... silakan ketik";
$pgv_lang["add_media_file"]				= "Berkas Media yang ada di server";
$pgv_lang["main_media_ok1"]				= "Berkas media utama <b>#GLOBALS[oldMediaName]#</b> berhasil digantinama menjadi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_ok2"]				= "Berkas media utama <b>#GLOBALS[oldMediaName]#</b> berhasil dipindah dari <b>#GLOBALS[oldMediaFolder]#</b> ke <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_ok3"]				= "Berkas media utama berhasil dipindah dan digantinama dari <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> ke <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail0"]				= "Berkas media utama <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> tidak ada.";
$pgv_lang["main_media_fail1"]				= "Berkas media utama <b>#GLOBALS[oldMediaName]#</b> tidak dapat digantinama menjadi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["main_media_fail2"]				= "Berkas media utama <b>#GLOBALS[oldMediaName]#</b> tidak dapat dipindah dari <b>#GLOBALS[oldMediaFolder]#</b> ke <b>#GLOBALS[newMediaFolder]#</b>.";
$pgv_lang["main_media_fail3"]				= "Berkas media utama tidak dapat dipindah dan dinamai dari <b>#GLOBALS[oldMediaFolder]##GLOBALS[oldMediaName]#</b> ke <b>#GLOBALS[newMediaFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["resn_disabled"]				= "Catatan: Anda harus mengaktifkan fitur 'Gunakan Pembatasan privasi GEDCOM (RESN)' untuk penyetelan ini agar menimbulkan efek.";
$pgv_lang["thumb_media_ok1"]				= "Berkas thumbnail <b>#GLOBALS[oldMediaName]#</b> berhasil digantinama menjadi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_ok2"]				= "Berkas thumbnail <b>#GLOBALS[oldMediaName]#</b> berhasil dipindah dari <b>#GLOBALS[oldThumbFolder]#</b> ke <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_ok3"]				= "Berkas thumbnail berhasil dipindah dan digantinama dari <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> menjadi <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail0"]				= "Berkas thumbnail <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> tidak ada.";
$pgv_lang["thumb_media_fail1"]				= "Berkas thumbnail <b>#GLOBALS[oldMediaName]#</b> tidak dapat digantinama menjadi <b>#GLOBALS[newMediaName]#</b>.";
$pgv_lang["thumb_media_fail2"]				= "Berkas thumbnail <b>#GLOBALS[oldMediaName]#</b> tidak dapat dipindah dari <b>#GLOBALS[oldThumbFolder]#</b> ke <b>#GLOBALS[newThumbFolder]#</b>.";
$pgv_lang["thumb_media_fail3"]				= "Berkas thumbnail tidak dapat dipindah dan digantinama dari <b>#GLOBALS[oldThumbFolder]##GLOBALS[oldMediaName]#</b> ke <b>#GLOBALS[newThumbFolder]##GLOBALS[newMediaName]#</b>.";
$pgv_lang["add_asso"]					= "Tambahkan Asosiasi baru";
$pgv_lang["edit_sex"]					= "Sunting Jender";
$pgv_lang["add_obje"]					= "Tambahkan objek Multimedia baru";
$pgv_lang["add_name"]					= "Tambahkan Nama baru";
$pgv_lang["edit_raw"]					= "Sunting bahan rekaman GEDCOM";
$pgv_lang["label_add_remote_link"]  			= "Tambahkan Kaitan";
$pgv_lang["label_gedcom_id"]        			= "ID Basisdata";
$pgv_lang["label_local_id"]         			= "ID Orang";
$pgv_lang["accept"] 					= "Terima";
$pgv_lang["accept_all"] 				= "Terima semua perubahan";
$pgv_lang["accept_gedcom"]				= "Putuskan untuk tiap perubahan diterima atau ditolak.<br /><br />Untuk menerima semua perubahan sekaligus, klik <b>\"Terima semua perubahan\"</b> pada kotak di bawah.<br />Untuk memeroleh informasi lebih lanjut tentang perubahan,<br />klik <b>\"Tampilkan perbedaan perubahan\"</b> untuk melihat perbedaannya,<br />atau klik <b>\"Tampilkan rekaman GEDCOM\"</b> untuk melihat data baru dalam format GEDCOM.";
$pgv_lang["accept_successful"]				= "Perubahan berhasil diterima ke dalam basisdata";
$pgv_lang["add_child"]					= "Tambahkan anak";
$pgv_lang["add_child_to_family"]			= "Tambahkan anak ke keluarga ini";
$pgv_lang["add_fact"]					= "Tambahkan fakta baru";
$pgv_lang["add_father"] 				= "Tambahkan ayah baru";
$pgv_lang["add_husb"]					= "Tambahkan husband";
$pgv_lang["add_husb_to_family"] 			= "Tambahkan suami ke keluarga ini";
$pgv_lang["add_media"]					= "Tambahkan item Media baru";
$pgv_lang["add_media_lbl"]				= "Tambahkan Media";
$pgv_lang["add_mother"] 				= "Tambahkan ibu baru";
$pgv_lang["add_new_chil"] 				= "Tambahkan anak baru";
$pgv_lang["add_new_husb"]				= "Tambahkan suami baru";
$pgv_lang["add_new_wife"]				= "Tambahkan istri baru";
$pgv_lang["add_note"]					= "Tambahkan Catatan baru";
$pgv_lang["add_note_lbl"]				= "Tambahkan Catatan";
$pgv_lang["add_sibling"]				= "Tambahkan saudara atau saudari";
$pgv_lang["add_son_daughter"]				= "Tambahkan anak lelaki atau perempuan";
$pgv_lang["add_source"] 				= "Tambahkan Kutipan Sumber baru";
$pgv_lang["add_source_lbl"] 				= "Tambahkan Kutipan Sumber";
$pgv_lang["add_wife"]					= "Tambahkan istri";
$pgv_lang["add_wife_to_family"] 			= "Tambahkan istri ke keluarga ini";
$pgv_lang["advanced_search_discription"]		= "Pencarian situs mahir";
$pgv_lang["auto_thumbnail"]				= "Thumbnail otomatis";
$pgv_lang["basic_search"]				= "cari";
$pgv_lang["basic_search_discription"] 			= "Pencarian situs dasar";
$pgv_lang["birthdate_search"]				= "Tanggal lahir: ";
$pgv_lang["birthplace_search"]				= "Tempat lahir: ";
$pgv_lang["change"]					= "Perubahan";
$pgv_lang["change_family_instr"]			= "Gunakan halaman ini untuk mengubah atau atau membuang anggota keluarga.<br /><br />Untuk tiap anggota dalam keluarga, Anda dapat menggunakan Ubah kaitan untuk memilih orang yang berbeda untuk mengisi peran tersebut dalam keluarga. Anda juga dapat menggunakan Buang kaitan untuk membuang orang itu dari keluarga.<br /><br />Jika Anda selesai mengubah anggota keluarga, klik tombol Simpan untuk menyimpan perubahan.<br />";
$pgv_lang["change_family_members"]			= "Ganti Anggota Keluarga";
$pgv_lang["changes_occurred"]				= "Perubahan berikut dibuat terhadap rekaman ini:";
$pgv_lang["confirm_remove"]				= "Apakah Anda yakin ingin membuang orang ini dari keluarga?";
$pgv_lang["confirm_remove_object"]			= "Apakah Anda yakin ingin membuang objek ini dari basisdata?";
$pgv_lang["create_repository"]				= "Ciptakan Repositori";
$pgv_lang["create_source"]				= "Ciptakan sumber baru";
$pgv_lang["current_person"]         			= "Sama seperti yang berlaku";
$pgv_lang["date"]					= "Tanggal";
$pgv_lang["deathdate_search"]				= "Tanggal wafat: ";
$pgv_lang["deathplace_search"]				= "Tempat wafat: ";
$pgv_lang["delete_dir_success"]				= "Media dan direktori thumbnail berhasil dibuang.";
$pgv_lang["delete_file"]				= "Hapus berkas";
$pgv_lang["delete_repo"]				= "Hapus Repositori";
$pgv_lang["directory_not_empty"]			= "Direktori tidak kosong.";
$pgv_lang["directory_not_exist"]			= "Direktori tidak ada.";
$pgv_lang["error_remote"]           			= "Anda telah memilih situs luar.";
$pgv_lang["error_same"]             			= "Anda telah memilih situs yang sama.";
$pgv_lang["external_file"]				= "Objek media ini tidak ada sebagai berkas pada server ini. Ia tidak dapat dihapus, dipindah, atau digantinama.";
$pgv_lang["file_missing"]				= "Tidak ada berkas yang diterima. Silakan unggah lagi.";
$pgv_lang["file_partial"]				= "Berkas hanya diunggah sebagian, silakan coba lagi";
$pgv_lang["file_success"]				= "Berkas berhasil diunggah";
$pgv_lang["file_too_big"]				= "Berkas yang diunggah melampaui ukuran yang diperbolehkan";
$pgv_lang["file_no_temp_dir"]				= "Kehilangan direktori sementara PHP";
$pgv_lang["file_cant_write"]				= "PHP gagal menulis ke kandar";
$pgv_lang["file_bad_extension"]				= "PHP mencegah berkas berdasarkan ekstensi";
$pgv_lang["file_unkown_err"]				= "Kode kesalahan unggah berkas tidak diketahui #pgv_lang[global_num1]#. Silakan laporkan hal ini sebagai bug.";
$pgv_lang["folder"]		 			= "Folder di server";
$pgv_lang["gedcom_editing_disabled"]			= "Penyuntingan GEDCOM ini telah dinonaktifkan oleh administrator.";
$pgv_lang["gedcomid"]					= "ID rekaman GEDCOM INDI";
$pgv_lang["gedrec_deleted"] 				= "Rekaman GEDCOM berhasil dihapus.";
$pgv_lang["gen_thumb"]					= "Ciptakan thumbnail";
$pgv_lang["gen_missing_thumbs"]				= "Ciptakan thumbnail yang hilang";
$pgv_lang["gen_missing_thumbs_lbl"]			= "Thumbnail yang hilang";
$pgv_lang["gender_search"]				= "Jender: ";
$pgv_lang["generate_thumbnail"]				= "Bangun thumbnail otomatis dari ";
$pgv_lang["hebrew_givn"]				= "Nama Depan Yahudi";
$pgv_lang["hebrew_surn"]				= "Marga Yahudi";
$pgv_lang["hide_changes"]				= "Klik di sini untuk menyembunyikan perubahan.";
$pgv_lang["highlighted"]				= "Gambar Terhighlight";
$pgv_lang["illegal_chars"]				= "Nama kosong atau karakter ilegal pada nama";
$pgv_lang["invalid_search_multisite_input"] 		= "Silakan masukkan salah satu berikut: Nama, Tanggal Lahir, Tempat Lahir, Tanggal Wafat, Tempat Wafat, dan Jender ";
$pgv_lang["invalid_search_multisite_input_gender"]	= "Silakan cari lagir dengan informasi lebih dari sekedar jender saja";
$pgv_lang["label_diff_server"]      			= "Situs luar baru";
$pgv_lang["label_location"]         			= "Lokasi Situs";
$pgv_lang["label_password_id2"]				= "Sandi: ";
$pgv_lang["label_rel_to_current"]   			= "Hubungan terhadap orang ini";
$pgv_lang["label_same_server"]      			= "Situs lokal";
$pgv_lang["label_site"]             			= "Situs";
$pgv_lang["label_site_url"]         			= "URL Situs:";
$pgv_lang["label_username_id2"]				= "Namapengguna: ";
$pgv_lang["lbl_server_list"]        			= "Situs luar yang ada";
$pgv_lang["lbl_type_server"]				= "Ketik situs baru.";
$pgv_lang["link_as_child"]				= "Kaitkan orang ini kepada keluarga yang ada sebagai anak";
$pgv_lang["link_as_husband"]				= "Kaitkan orang ini kepada keluarga yang ada sebagai suami";
$pgv_lang["link_success"]				= "Berhasil menambahkan kaitan";
$pgv_lang["link_to_existing_media"]			= "Kaitkan ke item Media yang ada";
$pgv_lang["max_media_depth"]				= "Anda dapat memasukkan tidak lebih dari #GLOBALS[MEDIA_DIRECTORY_LEVELS]# nama subdirektori";
$pgv_lang["max_upload_size"]				= "Ukuran unggah maksimum: ";
$pgv_lang["media_deleted"]				= "Direktori Media berhasil dibuang.";
$pgv_lang["media_exists"]				= "Berkas Media sudah ada.";
$pgv_lang["media_file"] 				= "Berkas Media untuk diunggah";
$pgv_lang["media_file_deleted"]				= "Berkas Media berhasil dihapus.";
$pgv_lang["media_file_moved"]				= "Berkas Media dipindahkan.";
$pgv_lang["media_file_not_moved"]			= "Berkas Media tidak dapat dipindahkan.";
$pgv_lang["media_file_not_renamed"]			= "Berkas Media tidak dapat dipindahkan atau digantinama.";
$pgv_lang["media_thumb_exists"]				= "Thumbnail Media sudah ada.";
$pgv_lang["multiple_gedcoms"]				= "Berkas ini terkait ke basisdata genealogis lain di server ini. Ia tidak dapat dihapus, dipindah, atau digantinama hingga kaitan ini dibuang.";
$pgv_lang["must_provide"]				= "Anda harus menyediakan ";
$pgv_lang["name_search"]				= "Nama: ";
$pgv_lang["new_repo_created"]				= "Repositori Baru diciptakan";
$pgv_lang["new_source_created"] 			= "Sumber baru berhasil diciptakan.";
$pgv_lang["no_changes"] 				= "Saat ini tidak ada perubahan untuk diteliti.";
$pgv_lang["no_known_servers"]				= "Tidak ada Server yang dikenal<br />Tidak ada hasil yang akan ditemukan";
$pgv_lang["no_temple"]					= "Tidak ada Kuil - Ordinansi Hidup";
$pgv_lang["no_upload"]					= "Pengunggahan berkas media tidak diperbolehkan karena item multi-media dinonaktifkan atau karena direktori media tidak dapat ditulisi.";
$pgv_lang["paste_id_into_field"]			= "Tempel ID beriktu ke field suntingan Anda untuk merujuk rekaman yang baru diciptakan ";
$pgv_lang["paste_rid_into_field"]			= "Tempel ID Repositori berikut ke field suntingan Anda untuk merujuk Repositori ini ";
$pgv_lang["photo_replace"]				= "Apakah Anda ingin mengganti foto lama dengan foto ini?";
$pgv_lang["privacy_not_granted"]			= "Anda tidak mempunyai akses ke";
$pgv_lang["privacy_prevented_editing"]			= "Setelan privasi mencegah Anda menyunting rekaman ini.";
$pgv_lang["record_marked_deleted"]			= "Rekaman ini telah ditandai untuk penghapusan atas persetujuan admin.";
$pgv_lang["replace_with"]				= "Ganti dengan";
$pgv_lang["show_changes"]				= "Rekaman ini telah dimutakhirkan. Klik di sini untuk memperlihatkan perubahan.";
$pgv_lang["thumb_genned"]				= "Thumbnail #thumbnail# dibangun secara otomatis.";
$pgv_lang["thumbgen_error"]				= "Thumbnail #thumbnail# tidak dapat dibangun secara otomatis.";
$pgv_lang["thumbnail"]					= "Thumbnail untuk diunggah";
$pgv_lang["title_remote_link"]      			= "Tambahkan Pranala Luar";
$pgv_lang["undo"]					= "Urungkan";
$pgv_lang["undo_all"]					= "Urungkan semua perubahan";
$pgv_lang["undo_all_confirm"]				= "Apakah Anda yakin ingin mengurungkan semua perubahan untuk GEDCOM ini?";
$pgv_lang["undo_successful"]				= "Pengurungan berhasil";
$pgv_lang["update_successful"]				= "Pemutakhiran berhasil";
$pgv_lang["upload"]					= "Unggah";
$pgv_lang["upload_error"]				= "Ada kesalahan pengunggahan berkas Anda.";
$pgv_lang["copy_error"]					= "Berkas #GLOBALS[whichFile2]# tidak dapat disalin dari #GLOBALS[whichFile1]#";
$pgv_lang["upload_media"]				= "Unggah berkas Media";
$pgv_lang["upload_media_help"]				= "~#pgv_lang[upload_media]#~<br /><br />Pilih berkas dari komputer lokal Anda untuk diunggah ke server Anda. Semua berkas akan diunggah ke directori <b>#MEDIA_DIRECTORY#</b> atau ke salah satu sub-direktorinya.<br /><br />Nama folder yang Anda tentukan akan diterapkan ke #MEDIA_DIRECTORY#. Misalnya, #MEDIA_DIRECTORY#myfamily. Jika tidak ada, direktori thumbnail otomatis akan diciptakan.";
$pgv_lang["upload_successful"]				= "Pengunggahan berhasil.";
$pgv_lang["view_change_diff"]				= "Tampilkan Perbedaan Perubahan";

?>
