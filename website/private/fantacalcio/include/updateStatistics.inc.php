<?php
require_once $relocate_string . "logger.php";
require_once $relocate_string . '777/gazFiles.inc.php';

foreach ( $fileGaz as $file ) {
	if ($file == ($nameTxt . '.txt')) {
		header ( "Location: " . $relocate_string . "errors/error.php?error=gazFileAlreadyPresent&returnFromError=" . $relocate_string . "download.php" );
		exit ();
	}
}

/* --> legge le statistiche esistenti */
if (count ( $fileGaz ) == 0) {
	$firstTime = true; // prima giornata
} else {
	require $relocate_string . 'include/readExistingStats.inc.php';
}

// print_r($playerStats);
// exit();

/* --> aggiornamento delle statistiche */
require $relocate_string . 'include/readGazFile.inc.php';

/* --> crea backup di statistics.txt */
// backup($relocate_string . '777/statistics.txt');

/* --> scrittura delle nuove statistiche */
require $relocate_string . 'include/writeStats.inc.php';
?>
