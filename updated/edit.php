<?php
$contents = file_get_contents ("prjct.php");
$contents = str_replace('banana', 'apple', $contents);
file_put_contents("prjct.php", $contents);
?>