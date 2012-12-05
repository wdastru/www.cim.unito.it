<?php

	$relocate_string = './';
	require_once $relocate_string . "logger.php";

	$file_location = $_FILES['uploaded_file']['tmp_name'];	
	$dir_file = $relocate_string . "777/" . basename($_FILES['uploaded_file']['name']);
	if(move_uploaded_file($file_location,"$dir_file")) {
    		MySingleton::writeToLog("$dirfile saved to $file_location", $relocate_string . 
"777/logs/uploader_FantaCalcGui.log");
	} else{
    		MySingleton::writeToLog("$dirfile not saved to $file_location", $relocate_string . 
"777/logs/uploader_FantaCalcGui.log");
	}
?>
