
<?php
	$messagesXml = "messages.xml";
	if(file_exists($messagesXml))
	{
		//read the contents into a string
		$str = file_get_contents($messagesXml,"rb");
		$myparser = xml_parser_create();
		xml_parse_into_struct($myparser, $str, $text);
		xml_parser_free($myparser);
		//print_r($text);		
		
		$messagesFound = FALSE;
		for($i=0; $i<count($text); ++$i) {
			if ($text[$i]['tag'] == 'MESSAGE') {
				$messagesFound = TRUE;
			}
		}
			
		if ($messagesFound) {
				
			echo "<div id='marqueeSlowDown'><input class='button' type='button' value='-' onclick='slowDown();' /></div>";
			echo "<div id='marqueeSpeedUp'><input class='button' type='button' value='+' onclick='speedUp();' /></div>";	
			
			echo "<div class='marquee' id='mycrawler'>
					<span style='color: #A9FA05;'>";
					
			for ($i=0; $i < 150; $i++) { 
				echo "-";
			}
			echo "</span>";		
		
			$firstMessage = TRUE;
			for($i=0; $i<count($text); ++$i) {
				if ($text[$i]['tag'] == 'BODY') {
					if ($firstMessage) {
						$firstMessage = FALSE;
					} else {
						echo " &nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;&nbsp;&nbsp; ";
					}
					echo $text[$i]['value'];
				} else if ($text[$i]['tag'] == 'AUTHOR') {
					echo " [" . $text[$i]['value'] . "]";
				}
			}
			echo "</div>";		
			
		} else {
			/*
			 * TODO 
			 * no messaggi
			 * presenti
			 * * * * * * * */
		}
	} else {
		/*
		 * TODO completare ?
		 * * * * * * * * * */
	}
?>
