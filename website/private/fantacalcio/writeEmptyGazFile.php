<?php 
	$handle = fopen($relocate_string . '777/gazFiles.inc.php', 'w');
	if ($handle) {
		fwrite($handle, '<?php $fileGaz=array(); ?>');
	}
	fclose($handle);
?>