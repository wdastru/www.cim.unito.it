<?php
	
	$relocate_string = "./";
	$success = TRUE;
	
	foreach ($_POST as $key => $value) {
		$_POST[$key] = str_replace("\r\n", "", $_POST[$key]);
		$_POST[$key] = str_replace("à", "a'",  $_POST[$key]);
		$_POST[$key] = str_replace("è", "e'",  $_POST[$key]);
		$_POST[$key] = str_replace("é", "e'",  $_POST[$key]);
		$_POST[$key] = str_replace("ì", "i'",  $_POST[$key]);
		$_POST[$key] = str_replace("ò", "o'",  $_POST[$key]);
		$_POST[$key] = str_replace("ù", "u'",  $_POST[$key]);
		$_POST[$key] = str_replace("<", "",    $_POST[$key]);
		$_POST[$key] = str_replace(">", "",    $_POST[$key]);
		$_POST[$key] = str_replace("/", "",    $_POST[$key]);
		$_POST[$key] = str_replace("\\", "",   $_POST[$key]);
		$_POST[$key] = str_replace("&", "",    $_POST[$key]);
		$_POST[$key] = str_replace("\"", "'",    $_POST[$key]);
	}
	
	$messagesXml = $relocate_string . "777/messages.xml";
	if(file_exists($messagesXml))
	{
		//read the contents into a string
		$str = file_get_contents($messagesXml,"rb");
		$myparser = xml_parser_create();
		xml_parse_into_struct($myparser, $str, $text);
		xml_parser_free($myparser);
		
		
		$handle = fopen($messagesXml, 'w');
		//$handle = fopen($relocate_string . "777/messages_out.xml", 'w');
		if($handle)
		{
			fwrite($handle, "<?xml version='1.0' encoding='utf-8'?>\n");
			for ($i=0; $i<count($text) ; $i++) { 
				if ($text[$i]['type'] == 'open') {
					fwrite($handle, "<" . strtolower($text[$i]['tag']) . ">\n");
					if ($text[$i]['tag'] == 'MESSAGES') {
						fwrite($handle, "<message>\n<time>" . mktime() . "</time>\n<body>" . $_POST['newMessageTextArea'] . "</body>\n<author>" . $_POST['author'] . "</author>\n</message>\n");
					}	
				} else if ($text[$i]['type'] == 'complete') {
					fwrite($handle, "<" . strtolower($text[$i]['tag']) . ">" . $text[$i]['value'] . "</" . strtolower($text[$i]['tag']) . ">\n");
				} else if ($text[$i]['type'] == 'close') {
					fwrite($handle, "</" . strtolower($text[$i]['tag']) . ">\n");
				} else if ($text[$i]['type'] == 'cdata') {
					; // skip these tags
				} else {
					$success = FALSE;
				}
				
			}
		} else {
			$success = FALSE;
		}
		fclose($handle);
				
	} else {
		/*
		 * TODO
		 * specificare meglio
		 * l'errore ?
		 * * * * * * * * * * */
		$success = FALSE;
	}
	
	if ($success) {
		header('Location: ' . $relocate_string . 'index.php');
	} else {
		header('Location: ' . $relocate_string . 'errors/error.php?error=addMessageErr&returnFromError=../index.php');
	}
?>