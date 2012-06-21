<?php
/**
 * phpGedView Gallery 2 Module.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2005  John Finlay and Others
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
 * @subpackage Gallery2
 * @version $Id: index.php 6481 2009-11-28 20:17:25Z fisharebest $
 * @author Patrick Kellum
 */

if(!defined('PGV_GALLERY2_INIT'))
{
	require_once PGV_ROOT.'modules/gallery2/pgv.php';
	if(PGV_GALLERY2_INIT === false){header('Location: index.php'); print ' '; exit;}
}

mod_gallery2_run();

function mod_gallery2_run()
{
	// load user and create a g2 user if required
	mod_gallery2_load(getUserId());

	$data = GalleryEmbed::handleRequest();
	if($data['isDone']){exit;}
	$head = GalleryEmbed::parseHead($data['headHtml']);
	print_header($head[0], join("\n", $head[1])."\n".join("\n", $head[2]));
	print $data['bodyHtml'];
	print_footer();
	return true;
}
