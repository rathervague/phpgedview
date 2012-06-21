<?php
/**
 * Chinese language file for PhpGedView
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2008  PGV Development Team. All rights reserved.
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
 * @subpackage Lightbox
 * @version $Id: help_text.zh.php 4194 2008-10-30 10:45:46Z fisharebest $
 * @translator: mr_bobwang
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

echo "<font size=2 face=\"Verdana\"> ";
echo "<h3>图片播放器帮助： </h3>";
echo "<ol> ";

echo "<li>";
echo "<b><font color=\"blue\">如果想看一个图片</font></b><br />";
echo "点击任何指图。图片的标题会出现在图片的周围。";
echo "<br /><br /></li>";

echo "<li>";
echo "<b><font color=\"blue\">如果想用放大功能</font></b><br />" ;
echo "注意：图片集播放必须停止后才可以看到放大点击键。<br />";
echo "<b> Enable Zoom: </b><br />";
echo "如果绿加号的点击键出现在图片的右下方那放大功能已经被启动。你可以用鼠标轮来控制放大和缩小。（或者用 <b>i</b> 和 <b>o</b>） 点击键会变成红减号。<br /> ";
echo "当图片尺寸比页面大时，你可以用方向键盘来移动图片。<br />";
echo "<b> 关闭放大功能：</b><br />";
echo "点击在图片右下方的红减号后会关闭放大功能。（或者用 <b>z</b> 键盘）";
echo "<br /><br /></li>";

echo "<li>";
echo "<b><font color=\"blue\">选择图片 </font></b><br />";
echo "点击右下方红色的 X 点击键。";
echo "<br /><br /></li>";

echo "<li>";
echo "<b><font color=\"blue\">看下一个或上一个图片</font></b><br />";
echo "不再放大模式时，如果鼠标放在图片上， 一个 <b>&lt;</b> 记号会出现在左侧， 和一个 <b>&gt;</b> 会出现在右侧。 点击右半侧任何地方会到下一个图片。点击左半侧任何地方会到上一个图片。";
echo "<br /><br /></li>";

echo "<li>";
echo "<b><font color=\"blue\">如果你想跳到任何其他图片集的图片</font></b><br />";
echo "当没有在放大模式时，鼠标在图片上方一厘米之内，一个指图表会出现。如果需要，可以移动鼠标向左或右到图片标的其他部分。点击图片指图会打开那个图片。<b>下一个</b>, <b>上一个</b> 和 <b>跳到</b> 在图片播放或停止的情况下都可以用。";
echo "<br /><br /></li>";

echo "<li>";
echo "<b><font color=\"blue\">播放图片</font></b><br />";
echo "点击左下侧的开始键。如果有音乐文件被设置，那么一个喇叭点击键会出现。点击喇叭键可以关闭声音。点击停止键可以停止图片播放。";
echo "<br /><br /></li>";

echo "<li>";
echo "<b><font color=\"blue\">连接系统 ...</font></b><br />";
echo "用右侧的试图图片集表可以连接到其它人的个人图片集。";
echo "<br /><br /></li>";

echo "</ol>";
echo "<ul>";

echo "<li>";
echo "<b>注意：</b><br />";
echo "不是图片的指图，比如PDF和声音，书本，和录像文件，可以单个观看，但不能再图片播放器播放观看。";
echo "<br /><br /></li>";

echo "<li>";
echo "<b>给管理员的信息：</b><br />";
echo "如果代表照片，证书，书写文件的任何视图文件 (jpg, bmp, gif ...) 出现在 <b>其它</b> 的笔表内, 那么你忘记设定媒体文件的格式。设置他们的格式后可以把他们分配到各自的格式表格内。";
echo "<br /><br /></li>";

echo "</ul>";
 ?>
