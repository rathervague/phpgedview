<?php
/**
 * Chinese texts
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
 * @author PGV Developers
 * @package PhpGedView
 * @subpackage Languages
 * @version $Id: editor.zh.php 4194 2008-10-30 10:45:46Z fisharebest $
 * @translation mr_bobwang
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

$pgv_lang["accept_changes"]		= "接受更改";
$pgv_lang["replace"]				= "更换记录";
$pgv_lang["append"] 				= "添加记录";
$pgv_lang["review_changes"]		= "批准家谱的变化";
$pgv_lang["remove_object"]			= "取消文件";
$pgv_lang["remove_links"]			= "取消连接";
$pgv_lang["media_not_deleted"]		= "多媒体文件夹没有被删除。";
$pgv_lang["thumbs_not_deleted"]		= "指图文件夹没有被删除。";
$pgv_lang["thumbs_deleted"]			= "指图文件夹成功被删除。";
$pgv_lang["show_thumbnail"]			= "显示指图";
$pgv_lang["link_media"]				= "连接媒体";
$pgv_lang["to_person"]				= "到个人";
$pgv_lang["to_family"]				= "到家庭";
$pgv_lang["to_source"]				= "到信息源";
$pgv_lang["edit_fam"]				= "编辑家庭";
$pgv_lang["copy"]					= "拷贝";
$pgv_lang["cut"]					= "剪切";
$pgv_lang["sort_by_birth"]			= "按生日排列";
$pgv_lang["reorder_children"]		= "重新排列孩子";
$pgv_lang["add_from_clipboard"]		= "加到记忆板：";
$pgv_lang["record_copied"]			= "记录复制到记忆板";
$pgv_lang["add_unlinked_person"]	= "加入一个没有联接的个人";
$pgv_lang["add_unlinked_source"]	= "加入一个没有联接的来源";
$pgv_lang["server_file"]				= "在服务器上的文件名";
$pgv_lang["server_file_advice"]			= "不要更改源文件名";
$pgv_lang["server_file_advice2"]		= "请输入一个开头为 &laquo;http://&raquo; 的地址。";
$pgv_lang["add_asso"]				= "增添同事";
$pgv_lang["edit_sex"]				= "更改性别";
$pgv_lang["add_obje"]				= "增加媒体文件";
$pgv_lang["add_name"]				= "增加名字";
$pgv_lang["edit_raw"]				= "更改家谱编程源文件";
$pgv_lang["label_add_remote_link"]  = "增加连接";
$pgv_lang["label_gedcom_id"]        = "数据库号";
$pgv_lang["label_local_id"]         = "个人号";
$pgv_lang["accept"] 				= "接受";
$pgv_lang["accept_all"] 			= "接受所有变化";
$pgv_lang["accept_gedcom"]		= "解開更改, 點擊解開連結在它旁邊。  接受所有更改為GEDCOM, 再導入GEDCOM 文件。";
$pgv_lang["accept_successful"]		= "变化成功加入到数据库";
$pgv_lang["add_child"]			= "添加儿女";
$pgv_lang["add_child_to_family"]	= "添加孩子到这个家庭";
$pgv_lang["add_fact"]			= "添加情況";
$pgv_lang["add_father"] 			= "添加爸爸";
$pgv_lang["add_husb"]			= "添加丈夫";
$pgv_lang["add_husb_to_family"]		= "添加一個丈夫到这个家庭";
$pgv_lang["add_media"]				= "添加媒体文件";
$pgv_lang["add_media_lbl"]			= "添加媒体";
$pgv_lang["add_mother"] 			= "添加母亲";
$pgv_lang["add_new_chil"] = "添加儿女";
$pgv_lang["add_new_husb"]		= "添加一個丈夫";
$pgv_lang["add_new_wife"]		= "添加一個妻子";
$pgv_lang["add_note"]			= "添加来源情况小笔记";
$pgv_lang["add_note_lbl"]			= "添加笔记";
$pgv_lang["add_sibling"]			= "添加兄弟姐妹";
$pgv_lang["add_son_daughter"]		= "添加儿女";
$pgv_lang["add_source"]			= "添加來源情況";
$pgv_lang["add_source_lbl"] 		= "添加资料源";
$pgv_lang["add_wife"]			= "添加妻子";
$pgv_lang["add_wife_to_family"]		= "添加一個妻子來這個家庭";
$pgv_lang["advanced_search_discription"] = "详细搜索";
$pgv_lang["auto_thumbnail"]			= "自动指图";
$pgv_lang["basic_search"]			= "搜索";
$pgv_lang["basic_search_discription"] = "简单搜索";
$pgv_lang["birthdate_search"]		= "出生日：";
$pgv_lang["birthplace_search"]		= "出生地：";
$pgv_lang["change"]					= "改变";
$pgv_lang["change_family_instr"]	= "用此页改变或删除家庭成员。<br /><br /> 每个人都可以用改变连接替换为其它人。你可以用删除连接把此人从家庭抽出。<br /><br />但你完成后，请按保存以保存变化。<br />";
$pgv_lang["change_family_members"]	= "改变家庭成员";
$pgv_lang["changes_occurred"]		= "以下更改發生對這單個:";
$pgv_lang["create_repository"]		= "创建新的档案";
$pgv_lang["create_source"]			= "创建新的来源纪录";
$pgv_lang["current_person"]         = "保存为现在的样子";
$pgv_lang["date"]			= "日期";
$pgv_lang["deathdate_search"]		= "去世日期：";
$pgv_lang["deathplace_search"]		= "去世地点：";
$pgv_lang["delete_dir_success"]		= "媒体和指图成功删除。";
$pgv_lang["delete_file"]			= "删除文件";
$pgv_lang["delete_repo"]			= "删除Repository";
$pgv_lang["directory_not_empty"]	= "文件夹不是空的。";
$pgv_lang["directory_not_exist"]	= "文件夹不存在。";
$pgv_lang["family"]			= "家";
$pgv_lang["file_missing"]		= "文件未被接受。 向上作用的負載再。";
$pgv_lang["file_partial"]		= "文件部份地只被上裝了, 請嘗試再";
$pgv_lang["file_success"]		= "文件成功地被上裝";
$pgv_lang["file_too_big"]		= "被上裝的文件超出允許的大小";
$pgv_lang["folder"]		 			= "服务器上的文件夹";
$pgv_lang["gedcom_editing_disabled"]	= "这个家谱文件被管理员禁止更改";
$pgv_lang["gedcomid"]			= "GEDCOM 記錄身份證";
$pgv_lang["gedrec_deleted"]		= "GEDCOM 記錄被刪除";
$pgv_lang["gen_thumb"]				= "创建指图";
$pgv_lang["gender_search"]			= "性别：";
$pgv_lang["generate_thumbnail"]		= "自动创建指图";
$pgv_lang["hide_changes"]			= "隐蔽变化纪录";
$pgv_lang["highlighted"]			= "强调的图片";
$pgv_lang["illegal_chars"]			= "名字里有不允许的字母或是空的";
$pgv_lang["label_password_id2"]		= "密码：";
$pgv_lang["label_site"]             = "网站";
$pgv_lang["label_username_id2"]		= "用户名：";
$pgv_lang["media_file"]			= "媒体文件";
$pgv_lang["must_provide"]		= "您必須提供 ";
$pgv_lang["name_search"]			= "名字：";
$pgv_lang["no_temple"]			= "沒有寺廟。 居住的法令";
$pgv_lang["photo_replace"] = "您想要用這一個替換一張更舊的相片嗎?";
$pgv_lang["show_changes"]		= "這個記錄被更新了。  點擊這裡顯示更改。";
$pgv_lang["thumb_genned"]			= "指圖自動生成了。";
$pgv_lang["thumbgen_error"]			= "無法生成指圖為 ";
$pgv_lang["thumbnail"]			= "指圖";
$pgv_lang["undo"]			= "使复原";
$pgv_lang["undo_all"]				= "返回所有的变化";
$pgv_lang["undo_all_confirm"]		= "确认返回所有的变化？";
$pgv_lang["undo_successful"]		= "使复原成功";
$pgv_lang["update_successful"]		= "更新成功";
$pgv_lang["upload"]					= "上载";
$pgv_lang["upload_error"]		= "上载错误。";
$pgv_lang["upload_media"]		= "上载多媒体文件";
$pgv_lang["upload_media_help"]		= "~#pgv_lang[upload_media]#~<br /><br />选择上载的文件。所有文件会上载到 <b>#MEDIA_DIRECTORY#</b> 或其分目录。<br /><br />这些文件名会到#MEDIA_DIRECTORY#。 例如，#MEDIA_DIRECTORY#myfamily。 如果制图目录不存在，会被自动创建。";
$pgv_lang["upload_successful"]		= "向上作用的負載";
$pgv_lang["view_change_diff"]		= "观看更改差額";


$pgv_lang["add_marriage"]			= "增加婚姻";
$pgv_lang["edit_concurrency_change"] = "这个纪录上次被 <i>#CHANGEUSER#</i>在 #CHANGEDATE# 改过";
$pgv_lang["edit_concurrency_msg2"]	= "该纪录号 #PID# 在你打开后已被其它人更改过";
$pgv_lang["edit_concurrency_msg1"]	= "当创造文件时出现错误。可能在你打开文件后不久有其它人更改过此文件。";
$pgv_lang["edit_concurrency_reload"]	= "请刷新你的浏览器以保证你再变最新的纪录。";
$pgv_lang["admin_override"]			= "管理项目";
$pgv_lang["no_update_CHAN"]			= "不要更改CHAN纪录";
$pgv_lang["select_events"]			= "选择事情";
$pgv_lang["source_events"]			= "联系事务到此资源";
$pgv_lang["advanced_name_fields"]	= "更多的名字 （昵称，婚后名，等。）";
?>
