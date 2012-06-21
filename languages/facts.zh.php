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
 * @version $Id: facts.zh.php 4194 2008-10-30 10:45:46Z fisharebest $
 * @translation mr_bobwang
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

// -- Define a fact array to map GEDCOM tags with their chinese values
$factarray["ABBR"] = "简称";
$factarray["ADDR"] = "地址";
$factarray["ADR1"] = "地址一";
$factarray["ADR2"] = "地址二";
$factarray["ADOP"] = "收養";
$factarray["AFN"] = "祖先文件编号 (AFN)";
$factarray["AGE"] = "年龄";
$factarray["AGNC"] = "代辦處";
$factarray["ALIA"] = "別名";
$factarray["ANCE"] = "祖先";
$factarray["ANCI"] = "祖先兴趣";
$factarray["ANUL"] = "取消";
$factarray["ASSO"] = "同事";
$factarray["AUTH"] = "作者";
$factarray["BAPL"] = "LDS 洗禮";
$factarray["BAPM"] = "洗禮";
$factarray["BARM"] = "Bar Mitzvah";
$factarray["BASM"] = "Bas Mitzvah";
$factarray["BIRT"] = "生日";
$factarray["BLES"] = "祝福";
$factarray["BLOB"] = "数码資料";
$factarray["BURI"] = "埋葬";
$factarray["CALN"] = "索書號";
$factarray["CAST"] = "世襲的社會等級/社會狀態";
$factarray["CAUS"] = "死因";
$factarray["CEME"]  = "墓地";
$factarray["CENS"] = "人口調查";
$factarray["CHAN"] = "前更改";
$factarray["CHAR"] = "字符集";
$factarray["CHIL"] = "儿女";
$factarray["CHR"] = "洗礼";
$factarray["CHRA"] = "成人洗礼";
$factarray["CITY"] = "城市";
$factarray["CONF"] = "确认书";
$factarray["CONL"] = "LDS 确认书";
$factarray["COPR"] = "版权";
$factarray["CORP"] = "公司";
$factarray["CREM"] = "火葬";
$factarray["CTRY"] = "国家";
$factarray["DATA"] = "資料";
$factarray["DATE"] = "日期";
$factarray["DEAT"] = "去世";
$factarray["DESC"] = "後裔";
$factarray["DESI"] = "後裔利息";
$factarray["DEST"] = "目的地";
$factarray["DIV"] = "離婚";
$factarray["DIVF"] = "離婚被歸檔";
$factarray["DSCR"] = "說明";
$factarray["EDUC"] = "教育";
$factarray["EMIG"] = "移出";
$factarray["ENDL"] = "LDS 捐贈";
$factarray["ENGA"] = "订婚";
$factarray["EVEN"] = "活動";
$factarray["FAM"] = "家庭";
$factarray["FAMC"] = "家庭里的孩子";
$factarray["FAMF"] = "家庭文件";
$factarray["FAMS"] = "家庭里的配偶";
$factarray["FCOM"] = "第一個聖餐";
$factarray["FILE"] = "外部文件:";
$factarray["FORM"] = "格式:";
$factarray["GIVN"] = "名：";
$factarray["GRAD"] = "毕业典礼";
$factarray["HUSB"]  = "丈夫";
$factarray["IDNO"] = "确认号";
$factarray["IMMI"] = "移民";
$factarray["LEGA"] = "遗产受赠人";
$factarray["MARB"] = "婚姻阻止";
$factarray["MARC"] = "婚姻合同";
$factarray["MARL"] = "結婚证书";
$factarray["MARR"] = "婚姻";
$factarray["MEDI"]	= "媒体类型";
$factarray["MARS"] = "婚姻結算";
$factarray["NAME"] = "名字";
$factarray["NATI"] = "國籍";
$factarray["NATU"] = "归化";
$factarray["NCHI"] = "几个孩子";
$factarray["NICK"] = "昵称";
$factarray["NMR"] = "婚姻次数";
$factarray["NOTE"] = "附注";
$factarray["NPFX"] = "字首";
$factarray["NSFX"] = "接尾辞";
$factarray["OBJE"] = "多媒体";
$factarray["OCCU"] = "职业";
$factarray["ORDI"] = "法令";
$factarray["ORDN"] = "整理";
$factarray["PAGE"] = "引證詳細資料";
$factarray["PEDI"] = "家谱";
$factarray["PLAC"] = "地方";
$factarray["PHON"] = "電話";
$factarray["POST"] = "郵政編碼";
$factarray["PROB"] = "遺囑的認證";
$factarray["PROP"] = "屬性";
$factarray["PUBL"] = "發行";
$factarray["QUAY"] = "資料的可信度";
$factarray["RELA"]	= "关系";
$factarray["REPO"] = "程式库";
$factarray["REFN"] = "參考编码";
$factarray["RELI"] = "宗教信仰";
$factarray["RESI"] = "住宅";
$factarray["RESN"] = "限制";
$factarray["RETI"] = "退休";
$factarray["RFN"] = "記錄文件編號";
$factarray["RIN"] = "記錄身份證編號";
$factarray["ROLE"] = "角色";
$factarray["SEX"] = "性別";
$factarray["SLGC"] = "LDS 兒童海豹捕獵";
$factarray["SLGS"] = "LDS 配偶海豹捕獵";
$factarray["SOUR"] = "來源";
$factarray["SPFX"] = "姓氏稱謂";
$factarray["SSN"] = "社會安全號";
$factarray["STAE"] = "State";
$factarray["STAT"] = "狀態";
$factarray["SUBM"] = "提交者";
$factarray["SUBN"] = "提交";
$factarray["SURN"] = "姓氏";
$factarray["TEMP"] = "寺廟";
$factarray["TEXT"] = "文本";
$factarray["WIFE"]  = "妻子";
$factarray["TIME"] = "时间";
$factarray["TITL"] = "名称";
$factarray["TYPE"] = "类型";
$factarray["WILL"] = "遗书";
$factarray["BURI:PLAC"] = "火葬地点";
$factarray["MARR:PLAC"] = "结婚地点";
$factarray["DEAT:PLAC"] = "去世地点";
$factarray["BIRT:PLAC"] = "出生地点";
$factarray["FAMC:HUSB:SURN"] = "父亲姓";
$factarray["_EMAIL"] = "电子邮件";
$factarray["EMAIL"] = "电子邮件";
$factarray["_TODO"] = "为完成的项目";
$factarray["_UID"] = "普遍标志";

// These facts are specific to GEDCOM exports from Family Tree Maker
$factarray["_MDCL"] = "医疗";
$factarray["_DEG"] = "程度";
$factarray["_MILT"] = "兵役";
$factarray["_SEPR"] = "分離";
$factarray["_DETS"] = "一個配偶死亡";
$factarray["CITN"] = "公民身份";
$factarray["EMAL"]	= "电子邮件";

// Other common customized facts
$factarray["_ADPF"] = "由父亲拎养";
$factarray["_ADPM"] = "由母亲拎养";
$factarray["_AKAN"] = "昵称";
$factarray["_AKA"] 	= "又被名为";
$factarray["_BRTM"] = "Brit mila";
$factarray["_COML"] = "普通法婚姻";
$factarray["_EYEC"] = "眼睛顏色";
$factarray["_FNRL"] = "葬禮";
$factarray["_HAIR"] = "头发颜色";
$factarray["_HEIG"] = "身高";
$factarray["_INTE"] = "入暮";
$factarray["_MARI"] = "婚姻目的";
$factarray["_MBON"] = "婚姻集资";
$factarray["_MEDC"] = "健康情况";
$factarray["_MILI"] = "軍事";
$factarray["_NMR"] = "未婚";
$factarray["_NLIV"] = "已故";
$factarray["_NMAR"] = "从来没有结婚";
$factarray["_PRMN"] = "永久号码";
$factarray["_WEIG"] = "体重";
$factarray["_YART"] = "Yartzeit";
$factarray["_MARNM"] = "婚后名字";
$factarray["COMM"]	= "短纪录";
$factarray["_BIRT_CHIL"] = "孩子出生";
$factarray["_MARR_CHIL"] = "孩子结婚";
$factarray["_DEAT_CHIL"] = "孩子去世";
$factarray["_GEDF"] = "家谱文件";

// GEDCOM 5.5.1 related facts
$factarray["FAX"] = "传真";
$factarray["FACT"] = "实况";
$factarray["WWW"] = "网站";
$factarray["MAP"] = "地图";
$factarray["LATI"] = "地球横度";
$factarray["LONG"] = "地球竖度";
$factarray["FONE"] = "发音";
$factarray["ROMN"] = "罗马化";

?>
