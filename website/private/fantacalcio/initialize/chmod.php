<?php
$relocate_string = "../";
require $relocate_string . 'recursiveChmod.inc.php';

@recursiveChmod($relocate_string . '777/');

$where = "Location: " . $relocate_string . "initialize/index.php";
header($where); 
?>