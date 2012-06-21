<?php
/**
 * Chinese Language file for PhpGedView.
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
 * @package PhpGedView
 * @version $Id: configure_help.zh.php 4194 2008-10-30 10:45:46Z fisharebest $
 * @translation mr_bobwang
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

//-- CONFIGURE FILE MESSAGES
$pgv_lang["configure"]			= "Configure PhpGedView";

//-- edit privacy messages
$pgv_lang["edit_privacy"]		= "Configuration of the privacy-file";
$pgv_lang["SHOW_LIVING_NAMES"]			= "显示健在人员名单";

//-- language edit utility

//-- language edit utility
$pgv_lang["edit_langdiff"]		= "编辑语言文件";
$pgv_lang["edit_lang_utility"]		= "语言编辑工具";
$pgv_lang["edit_lang_utility_help"]	= "您能使用這項公共事業編輯語言文件的內容由使用內容英國一個。<br />它將列出您原始的英語文件的內容和您選上的語言內容<br />在點擊在您選上的文件消息以後一個新窗口將打開您能改變和保存您選上的語言消息的地方。";
$pgv_lang["language_to_edit"]		= "编辑的语言";
$pgv_lang["file_to_edit"]		= "编辑的语言文件";
$pgv_lang["check"]			= "检查";
$pgv_lang["lang_save"]			= "保存";
$pgv_lang["contents"]			= "內容";
$pgv_lang["listing"]			= "目录";
$pgv_lang["no_content"]			= "沒有內容";
$pgv_lang["editlang"]			= "编辑";
$pgv_lang["editlang_help"]		= "~#pgv_lang[editlang]#~<br /><br />编辑语言文件的信息<br />";
$pgv_lang["savelang"]			= "保存";
$pgv_lang["cancel"]			= "取消";
$pgv_lang["savelang_help"]		= "#pgv_lang[savelang]#~<br /><br />保存信息到语言文件。<br />";
$pgv_lang["original_message"]		= "原始的消息";
$pgv_lang["message_to_edit"]		= "编辑的信息";
$pgv_lang["changed_message"]		= "改变后的信息";
$pgv_lang["message_empty_warning"]	= "-> 警告!!! 这个信息没有在 #LANGUAGE_FILE# <- 里面。";
$pgv_lang["language_to_export"]		= "读出的语言";
$pgv_lang["export_lang_utility"]	= "读出语言文件";
$pgv_lang["export"]			= "读出";
$pgv_lang["compare_lang_utility"]	= "语言比较";
$pgv_lang["new_language"]		= "原语言";
$pgv_lang["compare"]			= "比较";
$pgv_lang["comparing"]			= "比较的语言文件";
$pgv_lang["config_lang_utility"]	= "设置支持的语言";
$pgv_lang["active"]			= "工作状态中";
$pgv_lang["edit_settings"]		= "编辑设置";
$pgv_lang["lang_edit"]			= "编辑";
$pgv_lang["lang_language"]		= "语言";
$pgv_lang["export_filename"]		= "读出的文件名：";
$pgv_lang["lang_name_chinese"]		= "中文";
$pgv_lang["lang_name_english"]		= "英文";
$pgv_lang["lang_new_language"]		= "新的语言";
$pgv_lang["lang_langcode"]		= "语言的网页代码号";
$pgv_lang["lang_filenames"]		= "语言文件";
$pgv_lang["flagsfile"]			= "国旗文件";
$pgv_lang["text_direction"]		= "写字方向";
$pgv_lang["date_format"]			= "年月日格式";
$pgv_lang["time_format"]		= "时间格式";
$pgv_lang["week_start"]			= "一周的开始日";
$pgv_lang["name_reverse"]		= "姓在前";
$pgv_lang["ltr"]			= "从左到右";
$pgv_lang["rtl"]			= "从右到左";
$pgv_lang["file_does_not_exist"]	= "错误！文件不存在...";
$pgv_lang["optional_file_not_exist"]	= "多选的文件不存在。";
$pgv_lang["multi_letter_alphabet"]		= "多字母的单字";
$pgv_lang["dictionary_sort"]		= "用字典的格式来排列";
$pgv_lang["add_new_lang_button"]	= "增加新语言";
$pgv_lang["hide_translated"]		= "不要显示翻译过的信息";
$pgv_lang["users_langs"]			= "用户的语言";
$pgv_lang["configured_languages"]	= "被用的语言";
$pgv_lang["um_header"] = "用户转移工具";
$pgv_lang["um_creating"] = "创建中";
$pgv_lang["um_file_create_fail2"] = "不可以创建";
$pgv_lang["um_import"] = "读入";
$pgv_lang["um_export"] = "读出";
$pgv_lang["um_imp_succ"] = "读入成功";
$pgv_lang["um_imp_fail"] = "读入失败";
$pgv_lang["um_backup"] = "备份";
$pgv_lang["um_zip_succ"] = "压缩的文件成果创建";
$pgv_lang["um_zip_dl"] = "下载压缩的备份文件";
$pgv_lang["um_bu_config"] = "家谱设置文件";
$pgv_lang["um_bu_gedcoms"] = "家谱文件";
$pgv_lang["um_bu_media"]	= "多媒体文件";
$pgv_lang["um_mk_bu"] = "创建悲愤";
$pgv_lang["um_results"]		= "结果";
$pgv_lang["ged_filter_results"] = "搜索结果";
$pgv_lang["ged_filter_reset"] = "清除搜索";
$pgv_lang["ged_filter_description"] = "搜索选项";

$pgv_lang["new_gedcom_title"]		= "家谱来自于 [#GEDCOMFILE#] 文件";
$pgv_lang["USE_MEDIA_VIEWER"]			= "使用媒体展览器";
$pgv_lang["SHOW_PRIVATE_RELATIONSHIPS"]	= "显示个人关系";
$pgv_lang["AUTO_GENERATE_THUMBS"]			= "自动创造指图";
$pgv_lang["SHOW_SOURCES"]			= "显示来源";
$pgv_lang["UNDERLINE_NAME_QUOTES"]		= "名字底下划线";
$pgv_lang["gedcom_conf"]		= "家谱简单信息";
$pgv_lang["media_conf"]			= "多媒体";
$pgv_lang["media_general_conf"]	= "普通";
$pgv_lang["displ_names_conf"]	= "名字";
$pgv_lang["displ_layout_conf"]	= "格式";
$pgv_lang["contact_conf"]		= "联系方法";
$pgv_lang["DBUSER"]			= "数据库用户名";
$pgv_lang["DBNAME"]			= "数据库名称";
$pgv_lang["upload_path"]			= "上载文件夹";
$pgv_lang["LANGUAGE"]			= "语言";
$pgv_lang["ENABLE_MULTI_LANGUAGE"]	= "允许用户改变语言";
$pgv_lang["CALENDAR_FORMAT"]		= "日历格式";
$pgv_lang["DEFAULT_PEDIGREE_GENERATIONS"]	= "几代人";
$pgv_lang["MAX_DESCENDANCY_GENERATIONS"]	= "最大几代人限度";
$pgv_lang["GENERATE_GUID"]		= "自动创造新代码号";
$pgv_lang["GEDCOM_ID_PREFIX"]		= "个人的代码号编码";
$pgv_lang["SOURCE_ID_PREFIX"]		= "来源的代码号编码";
$pgv_lang["REPO_ID_PREFIX"]		= "文件夹的代码号编码";
$pgv_lang["PEDIGREE_FULL_DETAILS"]	= "在表中显示出生和去世日";
$pgv_lang["PEDIGREE_SHOW_GENDER"]	= "表中显示性别标志";
$pgv_lang["ZOOM_BOXES"]			= "表中有放大功能";
$pgv_lang["SHOW_AGE_DIFF"]			= "显示日期不同";
$pgv_lang["HIDE_LIVE_PEOPLE"]		= "用隐私功能";
$pgv_lang["REQUIRE_AUTHENTICATION"]	= "需要用户登陆";
$pgv_lang["WELCOME_TEXT_AUTH_MODE"]	= "登陆页有欢迎短信";
$pgv_lang["WELCOME_TEXT_AUTH_MODE_CUST"]	= "自己的欢迎短信";
$pgv_lang["ALLOW_EDIT_GEDCOM"]		= "允许在网络上更改编辑";
$pgv_lang["EDIT_AUTOCLOSE"]		= "自动关闭编辑窗口";
$pgv_lang["POSTAL_CODE"]  = "邮编号码位置";
$pgv_lang["SUBLIST_TRIGGER_I"]		= "最多姓";
$pgv_lang["SUBLIST_TRIGGER_F"]		= "最多的姓";
$pgv_lang["SURNAME_LIST_STYLE"]		= "姓列表的格式";
$pgv_lang["NAME_FROM_GEDCOM"]		= "从家铺文件中读取姓名";
$pgv_lang["SHOW_LAST_CHANGE"]		= "选择家谱记录近期改变的日期";
?>
