<?php
/**
 * Vietnamese texts
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team.  All rights reserved.
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
 * @author Anton Luu
 * @author Lan Nguyen
 * @version $Id: editor.vi.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"] 		= "Chấp nhận/từ chối Đổi";
$pgv_lang["replace"]				= "Đổi ký lục";
$pgv_lang["append"] 				= "Thêm vào ký lục nửa";
$pgv_lang["review_changes"] 		= "Coi lại những gì đã đổi trong GEDCOM.";
$pgv_lang["show_thumbnail"]			= "Cho xem bức chân dung nhỏ";
$pgv_lang["link_media"]			= "Nối liền môi thể";
$pgv_lang["to_person"]			= "Với Người";
$pgv_lang["to_family"]			= "Với Gia Đình";
$pgv_lang["to_source"]			= "Với Nguồn";
$pgv_lang["edit_fam"]				= "Sửa Gia Đình";
$pgv_lang["copy"]					= "Chép";
$pgv_lang["cut"]					= "Cắt đi";
$pgv_lang["sort_by_birth"]			= "Sắp xếp theo ngày sinh";
$pgv_lang["reorder_children"]		= "Sắp xếp con cái theo thứ tự";
$pgv_lang["add_from_clipboard"]		= " Thêm từ bảng kẹp tạm:";
$pgv_lang["record_copied"]			= "Ký lục chép vào bảng kẹp tạm";
$pgv_lang["add_unlinked_person"]	= "Thêm người lẻ";
$pgv_lang["add_asso"]				= "Thêm người liên kết mới";
$pgv_lang["edit_sex"]				= "Sửa Đổi Giới Tính";
$pgv_lang["add_obje"]				= "Thêm một đồ đa môi thể mới";
$pgv_lang["add_name"]				= "Thêm Tên mới";
$pgv_lang["edit_raw"]				= "Sửa ký lục GEDCOM thô";
$pgv_lang["label_add_remote_link"]  = "Thêm mối liên lạc";
$pgv_lang["accept"] 				= "Chấp Nhận";
$pgv_lang["accept_all"] 			= "Chấp nhận tất cả  chuyện đổi";
$pgv_lang["accept_gedcom"]			= "Quyết định nhận hay từ chối mỗi chuyện đổi.<br /><br /> Đặng chấp nhận tất cả những chuyện đổi cùng một lúc, nhấn <b>\"Chấp nhận tất cả chuyện đổi\"</b> trong cái hộp sau đây. Đặng có thêm chi tiết về một chuyện đổi,<br />nhấn <b>\"Xem Khác Đổi\"</b>đặng xem khác biệt với nhau, <br />hoặc nhấn <b>\"Coi ký lục GEDCOM\"</b> đặng xem dữ liệu mới dưới khổ GEDCOM.";
$pgv_lang["accept_successful"]		= "Thành công nhận chuyện đổi vào kho dữ kiện";
$pgv_lang["add_child"]				= "Thêm con";
$pgv_lang["add_child_to_family"]	= "Thêm con cho gia đình này";
$pgv_lang["add_fact"]				= "Thêm sự kiện";
$pgv_lang["add_father"] 			= "Thêm bố mới";
$pgv_lang["add_husb"]				= "Thêm chồng";
$pgv_lang["add_husb_to_family"] 	= "Thêm chồng mới cho gia đình này";
$pgv_lang["add_media"]				= "Thêm Môi Thể mới";
$pgv_lang["add_media_lbl"]			= "Thêm Môi Thể";
$pgv_lang["add_mother"] 			= "Thêm mẹ mới";
$pgv_lang["add_new_chil"] = "Thêm người con mới";
$pgv_lang["add_new_husb"]			= "Thêm chồng mới";
$pgv_lang["add_new_wife"]			= "Thêm vợ mới";
$pgv_lang["add_note"]				= "Thêm Lời Ghi mới";
$pgv_lang["add_note_lbl"]			= "Thêm Lời Ghi";
$pgv_lang["add_sibling"]			= "Thêm anh(chị) em";
$pgv_lang["add_son_daughter"]		= "Thêm con trai hay con gái";
$pgv_lang["add_source"] 			= "Thêm Nguồn Sự Dẫn mới";
$pgv_lang["add_source_lbl"] 		= "Thêm Nguồn Sự Dẫn";
$pgv_lang["add_wife"]				= "Thêm vợ";
$pgv_lang["add_wife_to_family"] 	= "Thêm vợ mới cho gia đình này";
$pgv_lang["change"]					= "Sửa Đổi";
$pgv_lang["changes_occurred"]		= "Người này đã có những gì sau đây đổi:";
$pgv_lang["create_repository"]		= "Tạo nơi tàng trữ";
$pgv_lang["create_source"]			= "Gây ra nguồn mới";
$pgv_lang["current_person"]         = "Giống như cái Hiện Tại";
$pgv_lang["date"]					= "Ngày Tháng";
$pgv_lang["delete_repo"]			= "Xóa Nơi Tàng Trữ";
$pgv_lang["file_missing"]			= "Không nhận được tập tin nào. Xin gửi lại";
$pgv_lang["file_partial"]			= "Tập tin chỉ gửi lên nửa chừng, xin làm lại";
$pgv_lang["file_success"]			= "Tập tin gửi lên tốt đẹp";
$pgv_lang["file_too_big"]			= "Tập tin đã gửi lên quá hạn chế lượng";
$pgv_lang["folder"]		 			= "Cặp";
$pgv_lang["gedcom_editing_disabled"]	= "Quản lý cho phép sửa đổi gì trong GEDCOM này.";
$pgv_lang["gedcomid"]				= "Nhận Diện của cá nhân trong GEDCOM";
$pgv_lang["gedrec_deleted"] 		= "Xoá bỏ ký lục GEDCOM này đã thành công.";
$pgv_lang["gen_thumb"]				= "Tạo ra bức chân dung nhỏ";
$pgv_lang["generate_thumbnail"]		= "Tự động tạo ra bức chân dung nhỏ từ";
$pgv_lang["hide_changes"]			= "Nhấn vào đây để che khuất những gì đã đổi.";
$pgv_lang["highlighted"]			= "Hình đề cao";
$pgv_lang["illegal_chars"]			= "Kí tự không hợp pháp trong tên";
$pgv_lang["label_diff_server"]      = "Site Khác";
$pgv_lang["label_same_server"]      = "Cùng cái Site";
$pgv_lang["link_as_child"]			= "Kèm người này vào một gia đình hiện tại như là con";
$pgv_lang["link_as_husband"]		= "Kèm người này vào một gia đình hiện tại như là chồng";
$pgv_lang["link_success"]			= "Thêm mối liên lạc thành công.";
$pgv_lang["max_upload_size"]		= "Chỉ gửi lên được nhiều nhất là:";
$pgv_lang["media_file"] 			= "Tập tin Môi Thể";
$pgv_lang["must_provide"]			= "Bạn phải cho một ";
$pgv_lang["new_repo_created"]		= "Nơi tàng trữ mới đã tạo ra";
$pgv_lang["new_source_created"] 	= "Thành công tạo ra nguồn mới.";
$pgv_lang["no_changes"] 			= "Không có chuyện đổi nào cần phải xem lại.";
$pgv_lang["no_temple"]				= "Không có Đền - Sắc lệnh ở chung";
$pgv_lang["no_upload"]				= "Không được quyền gửi lên tập tin môi thể vì những món đa môi thể bị cấm hoặc là không có quyền viết vào mục lục môi thể.";
$pgv_lang["paste_id_into_field"]	= "Dán Nhận Diện Nguồn này vào vùng biên soạn đặng chỉ tới Nguồn này";
$pgv_lang["paste_rid_into_field"]	= "Dán Nhận Diện Nơi Tàng Trữ này vào vùng biên soạn đặng chỉ tới Nơi Tàng Trữ này";
$pgv_lang["photo_replace"] = "Có muốn đổi hình cũ với cái này không?";
$pgv_lang["privacy_not_granted"]	= "Không có quyền đổi đặc quyền cho";
$pgv_lang["privacy_prevented_editing"]	= "Theo mực kín đáo, bạn không có quyền sửa chửa ký lục này.";
$pgv_lang["show_changes"]			= "Ký lục này đã cập nhật. Nhấn vào đây để xem.";
$pgv_lang["thumb_genned"]			= "Bức chân dung nhỏ đã được tự động tạo ra.";
$pgv_lang["thumbgen_error"]			= "Không tạo ra được bức chân dung nhỏ cho";
$pgv_lang["thumbnail"]				= "Bức chân dung nhỏ";
$pgv_lang["title_remote_link"]      = "Thêm Mối Liên Lạc Từ Chỗ Khác.";
$pgv_lang["undo"]					= "Sửa lại";
$pgv_lang["undo_successful"]		= "Sửa lại tốt lành";
$pgv_lang["update_successful"]		= "Cập Nhật thành công";
$pgv_lang["upload"]					= "Gửi lên";
$pgv_lang["upload_error"]			= "Có chuyện sai lầm khi gửi lên tập tin của bạn.";
$pgv_lang["upload_media"]			= "Gửi lên tập tin Môi Thể";
$pgv_lang["upload_successful"]		= "Thành công gửi lên ";
$pgv_lang["view_change_diff"]		= "Xem Khác Đổi";


?>
