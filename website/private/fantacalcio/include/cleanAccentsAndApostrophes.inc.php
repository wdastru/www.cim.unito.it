<?php

function cleanAccentsAndApostrophes ($str) {
	$str = str_replace("\'", "'", $str);
	$str = str_replace("à", "A'", $str);
	$str = str_replace("è", "E'", $str);
	$str = str_replace("ì", "I'", $str);
	$str = str_replace("ò", "O'", $str);
	$str = str_replace("ù", "U'", $str);
	$str = str_replace("á", "A'", $str);
	$str = str_replace("é", "E'", $str);
	$str = str_replace("í", "I'", $str);
	$str = str_replace("ó", "O'", $str);
	$str = str_replace("ú", "U'", $str);
	return $str;
}

?>