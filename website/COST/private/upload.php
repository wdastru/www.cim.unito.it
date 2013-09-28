<?php
$localizer = '../../';

print_r($_POST);
exit();

require_once($localizer . 'includes/class.phpmailer.php');
require $localizer . 'includes/sendEMail.php';

$uploaddir = "uploads/";
$costXml = "cost.xml";

$uploader = htmlentities($_POST['uploader']);
$desc = htmlentities($_POST['desc']);
$file = htmlentities($_POST['file']);
if (is_numeric($_POST['MAX_FILE_SIZE'])) {
	$max_file_size = $_POST['MAX_FILE_SIZE'];
}

$mailer = new PHPMailer();
$mailer->AddAddress("walter.dastru@unito.it", "Walter Dastru'");

if (!isset($_FILES['ufile']['name']) || $_FILES['ufile']['name'] == '') {
	if (!isset($_POST['delete'])) {
		header('Location: error.php');
	} else {
		if ($_POST['delete'] == 1) {
			if (file_exists($costXml)) {
				$str = file_get_contents($costXml);

				preg_match('/<cost>.+?' . $uploader . '/s', $str, $before);
				preg_match('/' . $uploader . '.+?<\/cost>/s', $str, $after);

				$pos = strrpos($before[0], "<person>");
				$start = substr($before[0], $pos);
				$before[0] = substr($before[0], 0, $pos);

				$pos = strpos($after[0], "</person>");
				/*
				 * bisogna togliere strlen($uploader) caratteri
				* per evitare la ripetizione di $uploader
				* 9 � la lunghezza di </person>
				*/
				$end = substr($after[0], strlen($uploader), $pos + 9 - strlen($uploader));
				$after[0] = substr($after[0], $pos + 9);

				$person = $start . $end;

				preg_match('/<resources>.*?<\/resources>/s', $person, $resources);

				if (isset($resources[0])) {
					$pattern = "/<resource>([^>]*>){3}[^>]*" . $file . ".+?<\/resource>/s";
					$person = preg_replace($pattern, "", $person);
				}

				$file = fopen("cost.xml", "w");
				fwrite($file, $before[0] . $person . $after[0]);
				fclose($file);

				if (!@unlink($file))
				{
					$body = "The file could not be deleted:\r\n\r\nfilename: " . $file . "\r\nuploader: " . $uploader;
				} else {
					$body = "A file has been deleted:\r\n\r\nfilename: " . $file . "\r\nuploader: " . $uploader;
				}

				$vars = array(
								'subject'=>'COST: file deletion.',
								'body'=> $body
				);

				if (!sendEMail($vars, $mailer)) {
					;// issue a notification!
				}

				unset($mailer);

			}
		}
	}
} else {

	//The files have a link on a page for downloading
	//and filenames are also put in the progress bar so
	//the file can be viewed in the browser (ie. PDF files)
	//so replace a few characters.  Since the file links are
	//loaded onto another page via php and filenames
	//are displayed, I wanted to use this method instead
	//of url_encode() [just looks funny when displayed]

	$SafeFile = $_FILES['ufile']['name'];
	$SafeFile = str_replace("#", "No.", $SafeFile);
	$SafeFile = str_replace("$", "Dollar", $SafeFile);
	$SafeFile = str_replace("%", "Percent", $SafeFile);
	$SafeFile = str_replace("^", "", $SafeFile);
	$SafeFile = str_replace("&", "and", $SafeFile);
	$SafeFile = str_replace("*", "", $SafeFile);
	$SafeFile = str_replace("?", "", $SafeFile);

	$path = $uploaddir . $SafeFile;

	if ($_FILES['ufile'] != null) {
		//AS LONG AS A FILE WAS SELECTED...

		//if (copy($_FILES['ufile']['tmp_name'], $path)) {
		if (move_uploaded_file($_FILES['ufile']['tmp_name'], $path)) {
			//IF IT HAS BEEN COPIED...

			//GET FILE NAME
			$theFileName = $_FILES['ufile']['name'];

			//GET FILE SIZE
			$theFileSize = $_FILES['ufile']['size'];

			if ($theFileSize > 20000000) {
				header('Location: fileTooBig.php?size=' . $theFileSize);
			} else if ($theFileSize > 999999) {
				//IF GREATER THAN 999KB, DISPLAY AS MB
				$theDiv = $theFileSize / 1000000;
				$theFileSize = round($theDiv, 1) . " MB";
				//round($WhatToRound, $DecimalPlaces)
			} else {//OTHERWISE DISPLAY AS KB
				$theDiv = $theFileSize / 1000;
				$theFileSize = round($theDiv, 1) . " KB";
				//round($WhatToRound, $DecimalPlaces)
			}

			if (file_exists($costXml)) {
				$str = file_get_contents($costXml);

				preg_match('/<cost>.+?' . $uploader . '/s', $str, $before);
				preg_match('/' . $uploader . '.+?<\/cost>/s', $str, $after);

				$pos = strrpos($before[0], "<person>");
				$start = substr($before[0], $pos);
				$before[0] = substr($before[0], 0, $pos);

				$pos = strpos($after[0], "</person>");
				/*
				 * bisogna togliere strlen($uploader) caratteri
				* per evitare la ripetizione di $uploader
				*
				* 9 � la lunghezza di </person>
				*/
				$end = substr($after[0], strlen($uploader), $pos + 9 - strlen($uploader));
				$after[0] = substr($after[0], $pos + 9);

				$person = $start . $end;
				$toAdd = "\n<resource>\n<desc>" . $_POST['desc'] . "</desc>\n<file>" . $SafeFile . "</file>\n</resource>";

				preg_match('/<resources>.*?<\/resources>/s', $person, $resources);

				if (isset($resources[0])) {
					$person = substr($person, 0, strpos($person, "</resources>")) . $toAdd . "\n</resources>\n</person>";
				}

				$file = fopen("cost.xml", "w");
				$content = $before[0] . $person . $after[0];
				/*
				 * rimuovere ripetizioni di \n
				*/
				//$content = str_replace("\n\n", "\n", $content); // rimuovere ripetizioni di \n
				fwrite($file, $content);
				fclose($file);

			} else {
				echo "
				<table cellpadding='5' width='80%'> 
				<tr> 
				<td align='Center' colspan='2'><font color=\'#C80000\'><b>cost.xml is not found!</b></font></td> 
				</tr> 
				
				</table>";
			}
			$body = "A new file has been uploaded:\r\n\r\nfilename: " . 
					$theFileName . "\r\nsize: " . $theFileSize . "\r\nuploader: " . 
					$uploader . "\r\ndate: " . date(DATE_RFC822) . "\r\n";
		} else {
			$body = "The file has been uploaded:\r\n\r\nfilename: " . 
					$theFileName . "\r\nsize: " . $theFileSize . "\r\nuploader: " . 
					$uploader . "\r\ndate: " . date(DATE_RFC822) . "\r\n";
			//PRINT AN ERROR IF THE FILE COULD NOT BE COPIED
			header('Location: error.php');
		}

		$vars = array(
			'subject'=>'COST: file upload notification.',
			'body'=> $body
		);
		if (!sendEMail($vars, $mailer)) {
			; // issue a notification!
		}
	} else {
		; // $_FILES['ufile'] is null
	}
}

header("Location: " . $localizer . "COST/private/mgmtCommitee.php");

?>
