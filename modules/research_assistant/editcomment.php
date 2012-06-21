<?php
/**
 * PopUp Window to allow editing of comments.
 *
 * phpGedView: Genealogy Viewer
 * Copyright (C) 2002 to 2007  John Finlay and Others
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
 * This Page Is Valid XHTML 1.0 Transitional! > 19 August 2005
 *
 * @package PhpGedView
 * @subpackage Edit
 * @version $Id: editcomment.php 5489 2009-05-11 15:47:51Z fisharebest $
 */

loadLangFile("research_assistant:lang");

/***********************************************************************************************************
 *                                        AUTHENTICATING                                                   *
 ***********************************************************************************************************/

 	//**********************************************************************************************
 	// If the user doesnt have access then take them to the index.
 	if ($SHOW_RESEARCH_ASSISTANT < PGV_USER_ACCESS_LEVEL){
 		header("Location: index.php");
 		exit;
 	}

/***********************************************************************************************************
 *                                           REQUESTS                                                      *
 ***********************************************************************************************************/
	//**********************************************************************************************
	//TODO: on new comment, change 'admin' to whoever is logged in.
	// Check if anything is being SUBMITted to the form.
	if (isset($_REQUEST['submit']) && $_REQUEST['submit'] != "") {

		// If we are adding a NEW comment, do an INSERT statement.
		if ($_REQUEST['submit']=="new"){
			if ($_REQUEST['type']=='task') {
				PGV_DB::prepare("INSERT INTO {$TBLPREFIX}comments (c_id, c_t_id, c_u_username, c_body, c_datetime) VALUES (?, ?, ? , ?, ?)")
					->execute(array(get_next_id("comments", "c_id"), $_REQUEST['id'], PGV_USER_NAME, $_POST['body'], time()));
			} else {
				PGV_DB::prepare("INSERT INTO {$TBLPREFIX}user_comments (uc_id,uc_username,uc_comment,uc_datetime,uc_p_id,uc_f_id) VALUES (?, ?, ?, ?, ?, ?)")
					->execute(array(get_next_id("user_comments", "uc_id"), PGV_USER_NAME, $_POST['body'], time(), $_REQUEST['id'], PGV_GED_ID));
			}
			print $pgv_lang["comment_success"];
		}

 		// If we are EDITing, do an UPDATE statement.
		else {
			verify_user();
			if ($_REQUEST['type']=='task') {
				PGV_DB::prepare("UPDATE {$TBLPREFIX}comments SET c_body=? WHERE c_id=?")
					->execute(array($_POST['body'], $_REQUEST['commentid']));
			} else {
				PGV_DB::prepare("UPDATE {$TBLPREFIX}user_comments SET uc_comment=? WHERE uc_id=?")
					->execute(array($_POST['body'], $_REQUEST['commentid']));
			}
			print $pgv_lang["comment_success"];
		}
	}

	//**********************************************************************************************
	// If nothing is being submitted then check if the user is EDITing an existing COMMENT.
	elseif (isset($_REQUEST['commentid']) && $_REQUEST['commentid'] != ""){
		verify_user();
		$html=
			PGV_DB::prepare("SELECT c_body FROM {$TBLPREFIX}comments WHERE c_id=?")
			->execute(array($_REQUEST['commentid']))
			->fetchOne();
		print_simple_header($pgv_lang["edit_comment"]);
		print '<span class="subheaders">'.$pgv_lang["edit_comment"].'</span>';
		print print_comment_body($html, 'task', $_REQUEST['commentid'], $_REQUEST['taskid']);
	}
	//**********************************************************************************************
	// If nothing is being submitted then check if the user is EDITing an existing COMMENT.
	elseif (isset($_REQUEST['ucommentid']) && $_REQUEST['ucommentid'] != "") {
		verify_user();
		$html=
			PGV_DB::prepare("SELECT uc_comment FROM {$TBLPREFIX}user_comments WHERE uc_id=?")
			->execute(array($_REQUEST['ucommentid']))
			->fetchOne();
		print_simple_header($pgv_lang["edit_comment"]);
		print '<span class="subheaders">'.$pgv_lang["edit_comment"].'</span>';
		print print_comment_body($html, 'person', $_REQUEST['ucommentid'], $_REQUEST['pid']);
	}
	//**********************************************************************************************
	// If the user is not editing an existing comment, check if the user is adding a NEW comment.
	elseif (isset($_REQUEST['taskid']) && $_REQUEST['taskid'] != ""){
		print_simple_header($pgv_lang["add_new_comment"]);
		print '<span class="subheaders">'.$pgv_lang["add_new_comment"].'</span>';
		print print_comment_body('', 'task', 'new', $_REQUEST['taskid']);
	}
	//**********************************************************************************************
	// If the user is not editing an existing comment, check if the user is adding a NEW person comment.
	elseif (isset($_REQUEST['pid']) && $_REQUEST['pid'] != ""){
		print_simple_header($pgv_lang["add_new_comment"]);
		print '<span class="subheaders">'.$pgv_lang["add_new_comment"].'</span>';
		print print_comment_body('', 'person', 'new', $_REQUEST['pid']);
	}

	//**********************************************************************************************
	// If none of the above occur, then give an error message.
	else{
		print_simple_header("Error");
		print "An error has occured.";

	}

/***********************************************************************************************************
 *                                           FUNCTIONS                                                     *
 ***********************************************************************************************************/


	/****************************************************************************************
	* Prints a textarea containing $body or blank if not supplied.
	*
	* @param optional $body to be placed as text into the text area
	* @param string $type	the type of comment being added
	* @param string $commentid	the id of the comment
	* @param string $id	the id of the task or person
	* @return textsarea with existing comment or a blank textarea for adding a new comment
	*/
	function print_comment_body($body = '', $type='task', $commentid='new', $id=''){
	global $pgv_lang;
		$out = '<form action="module.php?mod=research_assistant&action=editcomment" method="post">';
		$out .= '<input type="hidden" name="id" value="'.$id.'" />';
		$out .= '<input type="hidden" name="type" value="'.$type.'" />';
		$out .= '<input type="hidden" name="commentid" value="'.$commentid.'" />';
		$out .= '<input type="hidden" name="submit" value="'.$commentid.'" />';
		$out .= '<table><tr><td valign="top" align="right">' .
			$pgv_lang['comment_body'] .
			'</td><td><textarea name="body" rows="6" cols="60" wrap="on">';
		$out .= $body;
		$out .= '</textarea></td></tr><tr><td></td><td><input type="submit" value="' .
				$pgv_lang['save'] .
				'"/></td></tr></table></form>';

		return $out;
	}


	/****************************************************************************************
	* Verify if the user has permission to edit the current comment.
	*
	* @return true if the user can edit the comment, false otherwise.
	*/
	function verify_user(){
		global $TBLPREFIX;

		if (PGV_USER_IS_ADMIN) {
			return;
		}

		$c_u_username=
			PGV_DB::prepare("SELECT c_u_username FROM {$TBLPREFIX}comments WHERE c_id=?")
			->execute(array($_REQUEST['commentid']))
			->fetchOne();

		if (PGV_USER_NAME==$c_u_username) {
			return;
		} else {
			header("Location: index.php");
 			exit;
		}
	}

/***********************************************************************************************************
*                                           FOOTER                                                         *
***********************************************************************************************************/

 	// Refreshes the opener window, which then displays any edited changes or new comments.
 	print "<center><br /><br /><a href=\"#\" onclick=\"if (window.opener.showchanges) window.opener.showchanges(); window.close();\">".$pgv_lang["close_window"]."</a><br /></center>";

?>
