<?php
/**
 * User Blog Block
 *
 * This block allows users to have their own blog
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
 * @subpackage Blocks
 * @version $Id: user_blog.php 6578 2009-12-20 09:51:08Z volschin $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

define('PGV_USER_BLOG_PHP', '');

$PGV_BLOCKS["print_user_news"]["name"]		= $pgv_lang["user_news_block"];
$PGV_BLOCKS["print_user_news"]["descr"]		= "user_news_descr";
$PGV_BLOCKS["print_user_news"]["type"]		= "user";
$PGV_BLOCKS["print_user_news"]["canconfig"]	= false;
$PGV_BLOCKS["print_user_news"]["config"]	= array("cache"=>0);

/**
 * Prints a user news/journal
 *
 */
function print_user_news($block=true, $config="", $side, $index) {
	global $pgv_lang, $PGV_IMAGE_DIR, $PGV_IMAGES, $TEXT_DIRECTION, $ctype;

	$usernews = getUserNews(PGV_USER_ID);

	$id="user_news";
	$title = print_help_link("mygedview_myjournal_help", "qm","",false,true);
	$title .= $pgv_lang["my_journal"];
	$content = "";
	if (count($usernews)==0) {
		$content .= $pgv_lang["no_journal"].' ';
	}
	foreach($usernews as $key=>$news) {
		$day = date("j", $news["date"]);
		$mon = date("M", $news["date"]);
		$year = date("Y", $news["date"]);
		$content .= "<div class=\"person_box\">";
		$ct = preg_match("/#(.+)#/", $news["title"], $match);
		if ($ct>0) {
			if (isset($pgv_lang[$match[1]])) {
				$news["title"] = str_replace($match[0], $pgv_lang[$match[1]], $news["title"]);
			}
		}
		$content .= "<span class=\"news_title\">".PrintReady($news["title"])."</span><br />";
		$content .= "<span class=\"news_date\">".format_timestamp($news["date"])."</span><br /><br />";
		if (preg_match("/#(.+)#/", $news["text"], $match)) {
			if (isset($pgv_lang[$match[1]])) {
				$news["text"] = str_replace($match[0], $pgv_lang[$match[1]], $news["text"]);
			}
		}
		if (preg_match("/#(.+)#/", $news["text"], $match)) {
			if (isset($pgv_lang[$match[1]])) {
				$news["text"] = str_replace($match[0], $pgv_lang[$match[1]], $news["text"]);
			}
			if (isset($$match[1])) {
				$news["text"] = str_replace($match[0], $$match[1], $news["text"]);
			}
		}
		$trans = get_html_translation_table(HTML_SPECIALCHARS);
		$trans = array_flip($trans);
		$news["text"] = strtr($news["text"], $trans);
		$news["text"] = nl2br($news["text"]);
		$content .= PrintReady($news["text"])."<br /><br />";
		$content .= "<a href=\"javascript:;\" onclick=\"editnews('$key'); return false;\">".$pgv_lang["edit"]."</a> | ";
		$content .= "<a href=\"".encode_url("index.php?action=deletenews&news_id={$key}&ctype={$ctype}")."\" onclick=\"return confirm('".$pgv_lang["confirm_journal_delete"]."');\">".$pgv_lang["delete"]."</a><br />";
		$content .= "</div><br />";
	}
	if (PGV_USER_ID) {
		$content .= "<br /><a href=\"javascript:;\" onclick=\"addnews('".PGV_USER_ID."'); return false;\">".$pgv_lang["add_journal"]."</a>";
	}

	global $THEME_DIR;
	if ($block) {
		require $THEME_DIR.'templates/block_small_temp.php';
	} else {
		require $THEME_DIR.'templates/block_main_temp.php';
	}
}
?>
