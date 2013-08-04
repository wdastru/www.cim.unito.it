
<?php
	$messagesXml = $relocate_string . "777/messages.xml";
	if(file_exists($messagesXml))
	{
		//read the contents into a string
		$str = file_get_contents($messagesXml,"rb");
		$myparser = xml_parser_create();
		xml_parse_into_struct($myparser, $str, $text);
		xml_parser_free($myparser);
		//print_r($text);		
		
		$messagesFound = FALSE;
		$noRecentMessages = FALSE;
		for($i=0; $i<count($text); ++$i) {
			if ($text[$i]['tag'] == 'MESSAGE') {
				$messagesFound = TRUE;
			}
			
			if ($text[$i]['tag'] == 'TIME') {
				if ((mktime() - $text[$i]['value']) < 7*24*60*60) {
					$noRecentMessages = TRUE;
				}
			}
		}
		
		if ($messagesFound) {
			//echo "messages found.";
		}
		
		if ($noRecentMessages) {
			//echo "no recent messages";
		}
		
		if ($messagesFound) {
				
			echo "<div id='slidingBannerWrapper'>";	
			echo "<div id='marqueeSlowDown'><input class='button' type='button' value='-' onclick='slowDown();' /></div>";
			echo "<div id='marqueeSpeedUp'><input class='button' type='button' value='+' onclick='speedUp();' /></div>";	
			
			echo "<div class='marquee' id='mycrawler' onclick='addMessage();'>
					<span id='hyphens'>";
					
			for ($i=0; $i < 150; $i++) { 
				echo "-";
			}
			echo "</span>";		
		
			$firstMessage = TRUE;
			$nMessages = 0;
			$maxNoOfMessages = 5;
			for($i=0; $i<count($text); ++$i) {
				if ($text[$i]['tag'] == 'TIME') {
					if ((mktime() - $text[$i]['value']) > 7*24*60*60 && $nMessages >= $maxNoOfMessages) {
						break; // skip messages older than a week if the $maxNumberOfMessages ha been reached
					}
				} else if ($text[$i]['tag'] == 'BODY') {
					if ($firstMessage) {
						$firstMessage = FALSE;
					} else {
						echo " &nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;&nbsp;&nbsp; ";
					}
					echo $text[$i]['value'];
					$nMessages += 1;
				} else if ($text[$i]['tag'] == 'AUTHOR') {
					echo " [" . $text[$i]['value'] . "]";
				}
			}
			
			echo "
					</div> <!-- end of mycrawler -->
				</div> <!-- end of slidingBannerWrapper -->
				<div id='addMessageBox' style='visibility: hidden'>
					<div id='addMessageBoxTitle'>Aggiungi un nuovo messaggio</div>
					<br />
					<form method='post' id='addMessageForm' action='" . $relocate_string . "addMessage.php'>
						<fieldset class='noBorder'>
							<textarea name='newMessageTextArea' rows='3' ></textarea>
							<br />
							<br />
							Autore:&nbsp; <input type='text' value='' name='author'>
							<br />
							<br />
							<input class='button' type='button'	value='Send' onclick='sendMessage();' />
							&nbsp;&nbsp;&nbsp;
							<input class='button' type='button'	value='Close' onclick='hideAddMessageBox();' />
						</fieldset>
					</form>
				</div>
				";
				
		} else {
			/*
			 * no messaggi
			 * presenti
			 * * * * * * * */
		}
	} else {
		/*
		 * messages.xml
		 * non trovato
		 * * * * * * * */
	}
?>

