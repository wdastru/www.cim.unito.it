
<div class="marquee" id="mycrawler">
	<span style="color: #A9FA05;">
	<?php
			for ($i=0; $i < 150; $i++) { 
			echo "-";
		}
	?>
	</span>
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
			
			$j = 0;
			for($i=0; $i<count($text); ++$i) {
				if ($text[$i]['tag'] == 'MESSAGE') {
					echo $text[$i]['value'] . " --- ";
				}
			}
		} else {
			/*
			 * TODO completare ?
			 * * * * * * * * * */
		}
	?>
</div>
