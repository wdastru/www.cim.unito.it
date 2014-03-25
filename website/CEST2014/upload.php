<?php
$relocate_string = '../';

require_once ($relocate_string . 'includes/class.phpmailer.php');
require $relocate_string . 'includes/sendEMail.php';

//The files have a link on a page for downloading
//and filenames are also put in the progress bar so
//the file can be viewed in the browser (ie. PDF files)
//so replace a few characters.  Since the file links are
//loaded onto another page via php and filenames
//are displayed, I wanted to use this method instead
//of url_encode() [just looks funny when displayed]

$SafeFile = date("dmy-Hi_", time()) . "_" . $_POST['submitter'] . "_" . $_FILES['file1']['name'];
$SafeFile = str_replace("#", "No.", $SafeFile);
$SafeFile = str_replace(" ", "_", $SafeFile);
$SafeFile = str_replace("\$", "Dollar", $SafeFile);
$SafeFile = str_replace("%", "Percent", $SafeFile);
$SafeFile = str_replace("^", "", $SafeFile);
$SafeFile = str_replace("&", "and", $SafeFile);
$SafeFile = str_replace("*", "", $SafeFile);
$SafeFile = str_replace("?", "", $SafeFile);
$SafeFile = str_replace("'", " ", $SafeFile);

$uploaddir = "uploads/";
$path = $uploaddir . $SafeFile;

if ($_FILES['file1'] != null) {
	//AS LONG AS A FILE WAS SELECTED...

	//GET FILE NAME AND SIZE
	$theFileName = $_FILES['file1']['name'];
    $theFileSize = $_FILES['file1']['size'];

	$mailer = new PHPMailer();
	$mailer -> AddAddress("walter.dastru@gmail.com", "Walter Dastru'");

	if (move_uploaded_file($_FILES['file1']['tmp_name'], $path)) {
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

		$body = "A new file has been uploaded:\r\n\r\nsubmitter: " . $_POST['submitter'] . "\r\nfilename: " . $theFileName . "\r\nsize: " . $theFileSize . "\r\ndate: " . date(DATE_RFC822) . "\r\n\nRegards,\r\nWebmaster.\r\n";
		$vars = array('subject' => "CEST2014: file upload notification.", 'body' => $body);

        	$mailer -> AddAddress("paola.bardini@unito.it", "Paola Bardini");
        	$mailer -> AddAttachment($path);
 
		} else {
			$body = "The file has not been uploaded:\r\n\r\nfilename: " . $theFileName . "\r\nsize: " . $theFileSize . "\r\ndate: " . date(DATE_RFC822) . "\r\n\nRegards,\r\nWebmaster.\r\n";
		$vars = array('subject' => "CEST2014: file upload failure.", 'body' => $body);

		sendEMail($vars, $mailer);
		header('Location: submissionError.php');

	}
	sendEMail($vars, $mailer);
	unset($mailer);
	header('Location: submissionOK.php');
}

header('Location: submissionOK.php');
?>
