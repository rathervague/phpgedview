<?php
/**
 * English Language Configure Help file for PHPGedView
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2009  PGV Development Team. All rights reserved.
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
 * @version $Id: sitemap_help.php 6497 2009-11-30 19:06:08Z wooc $
 * @package PhpGedView
 * @subpackage Admin
 */

if (!defined('PGV_PHPGEDVIEW')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

loadLangFile("pgv_confighelp, pgv_help, sitemap:help_text");

if (isset($_REQUEST['help'])) $help=$_REQUEST['help'];

require PGV_ROOT.'includes/help_text_vars.php';
print_simple_header($pgv_lang["config_help"]);
echo '<span class="helpheader">';
print_text("config_help");
echo '</span><br /><br /><span class="helptext">';
if ($help == "help_contents_help") {
		if (PGV_USER_IS_ADMIN) {
		$help = "admin_help_contents_help";
		print_text("admin_help_contents_head_help");
	}
	else print_text("help_contents_head_help");
	print_help_index($help);
}
else {
	if ($help == "help_uploadgedcom.php") $help = "help_addgedcom.php";
print_text($help);
}
echo "</span><br /><br />";
echo "<a href=\"help_text.php?help=help_contents_help\"><b>";
print_text("help_contents");
echo "</b></a><br />";
echo "<a href=\"javascript:;\" onclick=\"window.close();\"><b>";
print_text("close_window");
echo "</b></a>";
print_simple_footer();
?>
