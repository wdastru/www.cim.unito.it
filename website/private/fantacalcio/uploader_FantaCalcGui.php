<?php

	$relocate_string = './';
	require_once $relocate_string . "logger.php";

	$file_location = $_FILES['uploaded_file']['tmp_name'];	
	$dir_file = $relocate_string . "777/" . basename($_FILES['uploaded_file']['name']);
	if(move_uploaded_file($file_location,"$dir_file")) {
		MySingleton::writeToLog(basename($_FILES['uploaded_file']['name']) . " saved to " . $relocate_string . "777/", $relocate_string . 
"777/logs/uploader_FantaCalcGui.log");
		MySingleton::writeToLog("$dir_file");
		chmod("$dir_file", '0777');
	} else{
    	MySingleton::writeToLog(basename($_FILES['uploaded_file']['name']) . " could not be saved to " . $relocate_string . "777/", $relocate_string . 
"777/logs/uploader_FantaCalcGui.log");
	}
?>
