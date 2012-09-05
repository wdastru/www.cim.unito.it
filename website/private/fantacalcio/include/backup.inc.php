<?php
function backup($file) {
	for ($i = 19; $i > 1; $i--) {
		$j = $i - 1;
		$src = copy($file . "." . $j, $file . "." . $i);
	}
	copy($file, $file . "." . $i);
}
?>