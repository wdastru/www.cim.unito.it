<?php

function removeUnwantedChars ($str) {
	$str = str_replace("\\", "_", $str);
	return preg_replace("/[\s\.\/\"'\?\!]/", "_", $str);
}

?>