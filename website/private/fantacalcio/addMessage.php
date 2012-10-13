<?php
	$relocate_string = "./";
	
	$success = TRUE;
	
	$messagesXml = $relocate_string . "777/messages.xml";
	if(file_exists($messagesXml))
	{
		//read the contents into a string
		$str = file_get_contents($messagesXml,"rb");
		$myparser = xml_parser_create();
		xml_parse_into_struct($myparser, $str, $text);
		xml_parser_free($myparser);
		
		$handle = fopen($messagesXml, 'w');
		if($handle)
		{
			fwrite($handle, "<?xml version='1.0' encoding='utf-8'?>\n");
			for ($i=0; $i<count($text) ; $i++) { 
				if ($text[$i]['type'] == 'open') {
					fwrite($handle, "<" . strtolower($text[$i]['tag']) . ">\n");
					if ($text[$i]['tag'] == 'MESSAGES') {
						fwrite($handle, "<message>\n<body>" . str_replace("\n", "", $_POST['newMessageTextArea']) . "</body>\n<author>" . $_POST['author'] . "</author>\n<time>" . mktime() . "</time>\n</message>\n");
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