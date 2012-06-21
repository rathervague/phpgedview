<?php

// Tell admin_loader.php that this is indeed a plugin and that it is loaded
define('PUN_PLUGIN_LOADED', 1);

// Load the page-specific language files
require PUN_ROOT.'lang/'.$pun_user['language'].'/help.php';
require PUN_ROOT.'lang/'.$pun_user['language'].'/_easysmilies.php';

// Display the smiley set
require PUN_ROOT.'include/parser.php';

// Are they deleting a smiley?
if (isset($_POST['delete_smiley']))	{
	if (!$_POST['toremove']) {
		message($lang_smiley['Delete Smiley None']);
	}
	else
	{
		global $db;
		$toremove = stripslashes($_POST['toremove']);

		// Remove the selected smiley from the database
		$db->query('DELETE FROM '.$db->prefix."smilies WHERE text = '$toremove'") or error('Unable to delete smiley', __FILE__, __LINE__, $db->error());

		redirect('admin_loader.php?plugin=AP_EasySmiles.php', $lang_smiley['Delete Smiley Redirect']);
	}
}

// If the "Submit Smiley" button was clicked
if (isset($_POST['submit_smiley']))
{
	// Make sure something something was entered
	if (trim($_POST['smiley_code']) == '')
		message($lang_smiley['Create Smiley Code None']);

	if (trim($_POST['smiley_image']) == '')
		message($lang_smiley['Create Smiley Image None']);

	$smiley_code = $_POST['smiley_code'];
	$smiley_image = $_POST['smiley_image'];

	// Insert the new smiley into the database
	$db->query('INSERT INTO '.$db->prefix."smilies (id, image, text) VALUES('', '$smiley_image', '$smiley_code')") or error('Unable to add smiley', __FILE__, __LINE__, $db->error());

	// Display the admin navigation menu
	generate_admin_menu($plugin);

?>
	<div class="block">
		<h2><span>Easy Smiles</span></h2>
		<div class="box">
			<div class="inbox">
				<p><?php echo $lang_smiley['Successful Creation'] ?></p>
				<p><a href="javascript: history.go(-1)">Go back</a></p>
			</div>
		</div>
	</div>
<?php

}
else	// If not, we show the "Show Smiley" form
{
	// Display the admin navigation menu
	generate_admin_menu($plugin);

?>
	<div id="exampleplugin" class="blockform">
		<h2><span>Easy Smiles</span></h2>
		<div class="box">
			<div class="inbox">
				<p><?php echo $lang_smiley['Description 1'] ?></p>
				<p><?php echo $lang_smiley['Description 2'] ?></p>
			</div>
		</div>

		<h2 class="block2"><span><?php echo $lang_smiley['Submit New Smiley'] ?></span></h2>
		<div class="box">
			<form id="example" method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>">
				<div class="inform">
					<fieldset>
						<legend><?php echo $lang_smiley['Instructions'] ?></legend>
						<div class="infldset">
						<table class="aligntop" cellspacing="0">
							<tr>
								<th scope="row"><?php echo $lang_smiley['Smiley Code'] ?></th>
								<td>
									<input type="text" name="smiley_code" size="25" tabindex="1" />
									<span><?php echo $lang_smiley['Smiley Code Description'] ?></span>
								</td>
							</tr>
							<tr>
								<th scope="row"><?php echo $lang_smiley['Smiley Image'] ?><div><input type="submit" name="submit_smiley" value="<?php echo $lang_smiley['Submit Smiley'] ?>" tabindex="2" /></div></th>
								<td>
									<input type="text" name="smiley_image" size="25" tabindex="1" />
									<span><?php echo $lang_smiley['Smiley Image Description'] ?></span>
								</td>
							</tr>
						</table>
						</div>
					</fieldset>
				</div>
			</form>
		</div>

		<h2 class="block2"><span><?php echo $lang_smiley['Current Smilies'] ?></span></h2>
		<div class="box">
			<div class="inform">
				<fieldset>
					<div class="infldset">
					<table class="aligntop" cellspacing="0">
						<tr>
							<th scope="row"><?php echo $lang_smiley['Code'] ?></th>
							<th scope="row"><?php echo $lang_smiley['Image Filename'] ?></th>
							<th scope="row"><?php echo $lang_smiley['Image'] ?></th>
							<th scope="row"></th>
						</tr>
<?php

$num_smilies = count($smiley_text);
for ($i = 0; $i < $num_smilies; ++$i)
{
	// Is there a smiley at the current index?
	if (!isset($smiley_text[$i]))
		continue;

	echo "<tr>";
	echo "<td>".$smiley_text[$i]."</td>";

	// Save the current text and image
	$cur_img = $smiley_img[$i];
	$cur_text = $smiley_text[$i];

	echo "<td>".$cur_img."</td>";
	echo "<td><img src=\"".PUN_ROOT."img/smilies/".$cur_img."\"></td>";
	echo "
	<form id=\"example\" method=\"post\" action=\"$_SERVER[REQUEST_URI]&delsmiley=yes\">
	<td><input type=\"hidden\" name=\"toremove\" value=\"$cur_text\">
		<input type=\"submit\" name=\"delete_smiley\" value=\""; echo $lang_smiley['Delete Smiley']; echo "\" tabindex=\"2\">
	</td>
	</form>";

}

?>
						<tr>
							<th scope="row">Total Smilies: <?php echo $num_smilies ?></th>
							<th scope="row"></th>
							<th scope="row"></th>
							<th scope="row"></th>
						</tr>
					</table>
					</div>
				</fieldset>
			</div>
		</div>
	</div>
<?php

}