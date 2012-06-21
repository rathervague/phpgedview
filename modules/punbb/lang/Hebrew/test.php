<?php

$s = file_get_contents("common22.php");
$new=mb_convert_encoding($s,"UTF-8","iso-8859-8");
file_put_contents("commons33.php", $new);

?>