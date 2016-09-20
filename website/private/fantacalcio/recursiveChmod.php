<?php
	$relocate_string = "./";
	require_once $relocate_string . 'recursiveChmod.inc.php';
	@recursiveChmod($relocate_string . '777/');
?>