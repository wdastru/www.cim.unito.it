<?php
$relocate_string = "../";
require $relocate_string . 'include/recursiveChmod.inc.php';

@recursiveChmod($relocate_string . '777/');

$where = "Location: " . $relocate_string . "initialize/index.php";
header($where); 
?>
