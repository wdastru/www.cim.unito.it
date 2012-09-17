<?php
	$file_location = $_FILES['uploaded_file']['tmp_name'];	
	$dir_file = "./777/" . basename($_FILES['uploaded_file']['name']);
	if(move_uploaded_file($file_location,"$dir_file")) {
    	echo "File was uploaded";
	}
	else{
    	echo "File was not uploaded";
	}	
?>