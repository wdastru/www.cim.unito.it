<?php

$relocate_string = '../../';

require_once ($relocate_string . 'includes/class.phpmailer.php');
require $relocate_string . 'includes/sendEMail.php';

//The files have a link on a page for downloading
//and filenames are also put in the progress bar so
//the file can be viewed in the browser (ie. PDF files)
//so replace a few characters.  Since the file links are
//loaded onto another page via php and filenames
//are displayed, I wanted to use this method instead
//of url_encode() [just looks funny when displayed]

$SafeFile = $_FILES['ufile']['name'];
$SafeFile = str_replace("#", "No.", $SafeFile);
$SafeFile = str_replace("\$", "Dollar", $SafeFile);
$SafeFile = str_replace("%", "Percent", $SafeFile);
$SafeFile = str_replace("^", "", $SafeFile);
$SafeFile = str_replace("&", "and", $SafeFile);
$SafeFile = str_replace("*", "", $SafeFile);
$SafeFile = str_replace("?", "", $SafeFile);
$SafeFile = str_replace("'", " ", $SafeFile);

$uploaddir = "uploads/";
$path = $uploaddir . $SafeFile;

if ($_FILES['ufile'] != null) {
	//AS LONG AS A FILE WAS SELECTED...

	//GET FILE NAME AND SIZE
	$theFileName = $_FILES['ufile']['name'];
	$theFileSize = $_FILES['ufile']['size'];

	if ($theFileSize > 20000000) {
		header('Location: fileTooBig.php?size=' . $theFileSize);
	} else {

		$mailer = new PHPMailer();
		$mailer -> AddAddress("walter.dastru@unito.it", "Walter Dastru'");

		if (move_uploaded_file($_FILES['ufile']['tmp_name'], $path)) {
			//IF IT HAS BEEN COPIED...

			//round($WhatToRound, $DecimalPlaces)
			if ($theFileSize > 999999) {
				$theDiv = $theFileSize / 1000000;
				$theFileSize = round($theDiv, 1) . " MBytes";
			} else if ($theFileSize > 999) {
				$theDiv = $theFileSize / 1000;
				$theFileSize = round($theDiv, 1) . " kBytes";
			} else {
				$theFileSize = round($theDiv, 1) . " Bytes";
			}

			$body = "A new file has been uploaded:\r\n\r\nfilename: " . $theFileName . "\r\nsize: " . $theFileSize . "\r\ndate: " . date(DATE_RFC822) . "\r\n\nRegards,\r\nWebmaster.\r\n";
			$vars = array('subject' => "INTA project private area: file upload notification.", 'body' => $body);

			$mailer -> AddAddress("enzo.terreno@unito.it", "Enzo Terreno");
			$mailer -> AddAddress("eliana.gianolio@unito.it", "Eliana Gianolio");
			$mailer -> AddAddress("silvia.tagliapietra@unito.it", "Silvia Tagliapietra");
			$mailer -> AddAddress("giancarlo.cravotto@unito.it", "Giancarlo Cravotto");
			$mailer -> AddAddress("alessandro.barge@unito.it", "Alessandro Barge");
			$mailer -> AddAddress("marco.lolli@unito.it", "Marco Lolli");
			$mailer -> AddAddress("roberta.cavalli@unito.it", "Roberta Cavalli");
			$mailer -> AddAddress("david.lembo@unito.it", "David Lembo");
			
		} else {
			$body = "The file has not been uploaded:\r\n\r\nfilename: " . $theFileName . "\r\nsize: " . $theFileSize . "\r\ndate: " . date(DATE_RFC822) . "\r\n\nRegards,\r\nWebmaster.\r\n";
			$vars = array('subject' => "INTA project private area: file upload failure.", 'body' => $body);

			sendEMail($vars, $mailer);
			header('Location: error.php?error=fileNotUploaded');

		}
		sendEMail($vars, $mailer);
		unset($mailer);
		header('Location: index.php');
	}
}

header('Location: index.php');
?>
