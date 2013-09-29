<?php
	function is_alphanumeric($string) {
		if (preg_match('/^[0-9A-Za-z]+$/', $string)) {
			return TRUE;
		} else return FALSE;
	}

?>