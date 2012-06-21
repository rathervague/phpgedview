<?php
/**
 * Footer for SimplyRed theme
 *
 * PhpGedView: Genealogy Viewer
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
 * @subpackage Themes
 * @version $Id: footer.php 6879 2010-01-30 11:35:46Z fisharebest $
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

echo "</div> <!-- closing div id=\"content\" -->\n";//FIXME uncomment as soon as ready
echo "<div id=\"footer\" class=\"$TEXT_DIRECTION\">";
echo "\n\t<br /><div align=\"center\" style=\"width:99%;\">";
echo contact_links();
echo '<br /><a href="', PGV_PHPGEDVIEW_URL, '" target="_blank"><img src="', $PGV_IMAGE_DIR, '/', $PGV_IMAGES['gedview']['other'], '" width="100" height="45" border="0" alt="', PGV_PHPGEDVIEW, PGV_USER_IS_ADMIN? (" - " .PGV_VERSION_TEXT): "" , '" title="', PGV_PHPGEDVIEW , PGV_USER_IS_ADMIN? (" - " .PGV_VERSION_TEXT): "" , '" /></a><br />';

echo "\n\t<br />";
print_help_link("preview_help", "qm");
echo '<a href="', PGV_SCRIPT_NAME, '?view=preview&amp;', get_query_string(), '">', $pgv_lang['print_preview'], '</a>';
echo "<br />";
if ($SHOW_STATS || PGV_DEBUG) {
	echo execution_stats();
}
if (exists_pending_change()) {
	echo "<br />", $pgv_lang["changes_exist"], " <a href=\"javascript:;\" onclick=\"window.open('edit_changes.php', '_blank', 'width=600, height=500, resizable=1, scrollbars=1'); return false;\">", $pgv_lang["accept_changes"], "</a>\n";
}
echo "</div>";
?><!-- <a href="http://validator.w3.org/check/referer">Validate</a> --><?php
echo "</div> <!-- close div id=\"footer\" -->\n";
?>
