
<div id='banner_wrapper'>

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
				echo "
					<div id='banner" . ++$j . "' class='banner'>
						<h1>" . $text[$i]['value'] ."</h1>
					</div>
				";
			}
		}
	} else {
		/*
		 * TODO completare ?
		 * * * * * * * * * */
	}
	
	?>
	
</div>