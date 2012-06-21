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
 * @version $Id: admin.vi.php 4194 2008-10-30 10:45:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["step2"]					= "Bước 2 của  4:";
$pgv_lang["gedcom_deleted"] 		= "GEDCOM [#GED#] xoá bỏ tốt lành.";
$pgv_lang["full_name"]				= "Tên Toàn Diện";
$pgv_lang["error_header"]			= "Cái tập tin GEDCOM, <b>#GEDCOM#</b>, không có ở nơi chỉ định.";
$pgv_lang["manage_gedcoms"] 		= " Quản xuyến GEDCOMs và đặt mực kín đáo";
$pgv_lang["created_indis"]			= "Tạo ra được bản <i>Individuals</i>.";
$pgv_lang["created_indis_fail"] 	= "Không tạo ra được bản <i>Individuals</i>.";
$pgv_lang["created_fams"]			= "Tạo ra được bản <i>Families</i>.";
$pgv_lang["created_fams_fail"]		= "Không gây ra được bản <i>Families</i>.";
$pgv_lang["created_sources"]		= "Tạo ra được bản <i>Sources</i>.";
$pgv_lang["created_sources_fail"]	= "Không tạo ra được bản <i>Sources</i>.";
$pgv_lang["created_other"]			= "Tạo ra được bản <i>Other</i>.";
$pgv_lang["created_other_fail"] 	= "Không tạo ra được bản <i>Other</i>.";
$pgv_lang["created_places"] 		= "Tạo ra được bản <i>Places</i>.";
$pgv_lang["created_places_fail"]	= "Không tạo ra được bản <i>Places</i>.";
$pgv_lang["no_thumb_dir"]			= "mục lục bức chân dung nhỏ không có và không tạo ra được.";
$pgv_lang["move_to"]				= "Di chuyển tới -->";
$pgv_lang["folder_created"] 		= "Gây ra được hồ sơ";
$pgv_lang["security_no_create"]		= "Cảnh Cáo An Ninh: Tập Tin <b><i>index.php</i></b> không có trong";
$pgv_lang["security_not_exist"]		= "Cảnh Cáo An Ninh: Không gây ra được  tập tin <b><i>index.php</i></b> trong";
$pgv_lang["add_gedcom"] 			= "Thêm GEDCOM";
$pgv_lang["add_new_gedcom"] 		= "Tạo một GEDCOM mới";
$pgv_lang["admin_approved"] 		= "Tài khoản của bạn tại #SERVER_NAME# đã được chấp thuận";
$pgv_lang["admin_gedcom"]			= "Quản trị GEDCOM";
$pgv_lang["admin_geds"]				= "Quản trị dữ liệu và GEDCOM";
$pgv_lang["admin_info"]				= "Nhận biết tổng quát";
$pgv_lang["admin_site"]				= "Quản trị WebSite";
$pgv_lang["administration"] 		= "Quản trị";
$pgv_lang["ansi_encoding_detected"] = "Nhận thấy là tập tin dùng khổ ANSI. PhpGedView chạy tốt nhất với những tập tin dùng khổ UTF-8.";
$pgv_lang["ansi_to_utf8"]			= "Chuyển hoán cái GEDCOM biên mã ANSI thành UTF-8?";
$pgv_lang["bytes_read"] 			= "Bytes đã đọc";
$pgv_lang["calc_marr_names"]		= "Đếm những Tên Sau Khi Lập Gia-Đình";
$pgv_lang["change_id"]				= "Thay đổi Nhận Diện Người thành:";
$pgv_lang["cleanup_places"] 		= "Thu dọn những Nơi";
$pgv_lang["click_here_to_go_to_pedigree_tree"]	= "Nhấn vào đây để đi tới đồ thị Dòng Giống.";
$pgv_lang["configuration"]			= "Cấu Hình";
$pgv_lang["confirm_user_delete"]	= "Bạn có chắc là muốn xóa thành viên";
$pgv_lang["create_user"]			= "Tạo Thành Viên";
$pgv_lang["dataset_exists"] 		= "Đã thu nhập một  tập tin GEDCOM trước với tên này vào kho dữ kiện.";
$pgv_lang["day_before_month"]		= "Ngày trước tháng (NN TT NNNN)";
$pgv_lang["do_not_change"]			= "Đừng đổi";
$pgv_lang["download_gedcom"]		= "Lấy xuống GEDCOM";
$pgv_lang["download_note"]			= "Xin chú ý: Những tập tin GEDCOM lớn sẽ lấy nhiều thời gian đặng gom trước khi lấy xuống được. Nếu PHP chấm dứt trước khi việc lấy xuống hoàn tất, có thể là bạn sẽ không có một tập tin hoàn diện.<br /><br /> Đặng chắc chắn là tập tin lấy xuống hoàn diện, kiểm soát rằng hàng cuối cùng là <b>0&nbsp;TRLR</b>. Trong những tập tin GEDCOM chỉ có chữ thường và bạn có thể dùng chương trình đọc/viết nào cũng được, nhưng xin <u>đừng</u> đổi sau khi xem.<br /><br />Thông thường, sẽ cần cùng thời gian đặng lấy xuống như lúc gửi tập tin GEDCOM lên.";
$pgv_lang["editaccount"]			= "Cho người dùng này sửa tài khoản của mình";
$pgv_lang["empty_dataset"]			= "Có muốn xoá dữ liệu cũ và thay với dữ liệu mới này?";
$pgv_lang["empty_lines_detected"]	= "Khám phá hàng trống trong tập tin GEDCOM.  Sau khi thu dọn, sẽ bỏ đi những hàng trống.";
$pgv_lang["error_header_write"] 	= "Cái tập tin GEDCOM, <b>#GEDCOM#</b>, không viết xuống được. Xin kiểm thuộc tính và quyền sài.";
$pgv_lang["example_date"]			= "Ví dụ ngày tháng không hợp pháp trong GEDCOM:";
$pgv_lang["example_place"]			= "Ví dụ nơi không hợp pháp trong GEDCOM:";
$pgv_lang["found_record"]			= "Kiếm được ký lục";
$pgv_lang["ged_import"] 			= "Thu Nhập";
$pgv_lang["gedcom_config_write_error"]	= "Có sự sai lầm!!! Không viết vào tập tin Cấu Hình GEDCOM được.";
$pgv_lang["gedcom_downloadable"] 	= "Có thể lấy cái tập tin GEDCOM này xuống  từ  internet!<br />. Xin đọc đoạn SECURITY trong tập tin <a href=\"readme.txt\"><b>readme.txt</b></a> đặng sửa chuyện trục trặc này.";
$pgv_lang["gedcom_file"]			= "Tập tin GEDCOM:";
$pgv_lang["img_admin_settings"] 	= "Sửa Môi Trường Vận Dụng Hình";
$pgv_lang["import_complete"]		= "Thu nhận hoàn tất.";
$pgv_lang["import_marr_names"]		= "Lấy vào những Tên Sau Khi Lập Gia-Đình";
$pgv_lang["import_progress"]		= "Tiến hành  thu nhận...";
$pgv_lang["inc_languages"]			= "Ngôn ngữ";
$pgv_lang["invalid_dates"]			= "Nhận thấy ngày tháng không hợp lệ, khi thu dọn, sẽ dùng khổ NN TTT NNNN (thí dụ 1 JAN 2004).";
$pgv_lang["invalid_header"] 		= "Khám phá hàng đằng trước cái góp điện GEDCOM  <b>0&nbsp;HEAD</b>. Sau khi dọn dẹp, sẽ bỏ đi những hàng này.";
$pgv_lang["logfile_content"]		= "Nội dung của tập tin nhật ký";
$pgv_lang["macfile_detected"]		= "Nhận thấy là tập tin mẫu Macintosh. Sau khi dọn dẹp, sẽ đổi tập tin sang mẫu DOS.";
$pgv_lang["merge_records"]			= "Hoà Ký Lục vào cùng nhau";
$pgv_lang["month_before_day"]		= "Tháng trước ngày (TT NN NNNN)";
$pgv_lang["performing_validation"]	= "Đang hợp lệ hóa GEDCOM; xin kén chọn món cần thiết và nhấn vào <b>Thu Dọn</b>.";
$pgv_lang["pgv_registry"]			= "Viếng những nơi khác dùng PhpGedView";
$pgv_lang["phpinfo"]				= "Nhận biết PHP";
$pgv_lang["place_cleanup_detected"] = "Cách ghi những nơi không đúng. Phải hiệu chỉnh những sự sai lầm này.<br />Cái ví dụ sau đây bày tỏ cái nơi viết xai lầm đã tìm thấy:";
$pgv_lang["please_be_patient"]		= "Xin kiên nhẩn";
$pgv_lang["reading_file"]			= "Đang đọc tập tin GEDCOM";
$pgv_lang["readme_documentation"]	= "Tài liệu về chương trình này";
$pgv_lang["rootid"] 				= "Người Bắt Đầu Dòng Giống";
$pgv_lang["select_an_option"]		= "Chọn một món dưới đây";
$pgv_lang["skip_cleanup"]			= "Khỏi thu dọn";
$pgv_lang["time_limit"]				= "Hạn chế thời gian:";
$pgv_lang["update_myaccount"]		= "Hiện Đại Hoá Tài Khoản của Tôi";
$pgv_lang["update_user"]			= "Hiện Đại Hoá Tài Khoản Thành Viên";
$pgv_lang["upload_gedcom"]			= "Gửi lên GEDCOM";
$pgv_lang["user_auto_accept"]		= "Tự động chấp nhận những gì sửa đổi bởi thành viên này";
$pgv_lang["user_contact_method"]	= "Cách Giao Thiệp Ưu Tiên ";
$pgv_lang["user_create_error"]		= "Không thêm thành viên được. Xin thử lại.";
$pgv_lang["user_created"]			= "Tạo thành viên thành công.";
$pgv_lang["user_default_tab"]		= "Nhãn mặc định dùng cho trang Chi Tiết Cá Nhân";
$pgv_lang["valid_gedcom"]			= "Nhận thấy GEDCOM hợp lệ. Không cần thu dọn.";
$pgv_lang["validate_gedcom"]		= "Phê chuẩn GEDCOM";
$pgv_lang["verified"]				= "Thành viên đã tự kiểm mình";
$pgv_lang["verified_by_admin"]		= "Thành viên được chấp thuận bởi quản lý";
$pgv_lang["verify_upload_instructions"]	= "Nếu bạn muốn tiếp tục, cái tập tin bạn gửi lên sẽ thay thế tập tin GEDCOM cũ và việc thu nhận sẽ tiếp tục. Nếu bạn thôi, cái tập tin GEDCOM cũ sẽ giữ hoàn diện.";
$pgv_lang["view_logs"]				= "Xem tập tin nhật ký";
$pgv_lang["view_readme"]			= "Xem tập tin readme.txt";
$pgv_lang["visibleonline"]			= "Xem thấy được bởi những người dùng khác khi nào trực tuyến";
$pgv_lang["visitor"]				= "Khách";
$pgv_lang["you_may_login"]			= "bởi quản lý của website này. Bây giờ có thể bạn truy nhập website PhpGedView bằng mối dưới này.";


?>
