<?php
//MySingleton::writeToLog('creazione di datiCoppa.txt', $relocate_string . "777/logs/createDatiCoppa.php.log");

$handle = fopen($relocate_string . "777/datiCoppa.txt", 'w');
for ($i=0; $i<12; $i++) {
	fwrite($handle, 'gruppi' . $i . "/-/-/-/-/\n");
}
for ($i=0; $i<4; $i++) {
	fwrite($handle, 'semi' . $i . "/-/-/-/-/\n");
}
for ($i=0; $i<4; $i++) {
	fwrite($handle, 'finali' . $i . "/-/-/-/-/\n");
}
fclose( $handle );
?>