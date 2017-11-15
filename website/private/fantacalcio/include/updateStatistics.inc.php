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
require_once $relocate_string . 'include/readExistingStats.inc.php';

// print_r($playerStats);
// exit();

/* --> aggiornamento delle statistiche */
require_once $relocate_string . 'include/addStat.inc.php';

/* --> crea backup di statistics.txt */
// backup($relocate_string . '777/statistics.txt');

/* --> scrittura delle nuove statistiche */
$statisticsHandle = fopen ( $relocate_string . '777/statistics.txt', "w" );
fwrite ( $statisticsHandle, $giornate + 1 . "\n" );
for($i = 0; $i < count ( $playerStats ); $i ++)
	fwrite ( $statisticsHandle, $playerStats [$i] . "\n" );
fclose ( $statisticsHandle );
/* <-- scrittura delle nuove statistiche */
?>
