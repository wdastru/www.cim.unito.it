<?php

function cleanAccentsAndApostrophes ($str) {
	$str = str_replace("\'", "'", $str);
	$str = str_replace("�", "A'", $str);
	$str = str_replace("�", "E'", $str);
	$str = str_replace("�", "I'", $str);
	$str = str_replace("�", "O'", $str);
	$str = str_replace("�", "U'", $str);
	$str = str_replace("�", "A'", $str);
	$str = str_replace("�", "E'", $str);
	$str = str_replace("�", "I'", $str);
	$str = str_replace("�", "O'", $str);
	$str = str_replace("�", "U'", $str);
	return $str;
}

?>