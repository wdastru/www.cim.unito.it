<?php
	$statisticsHandle = fopen ( $relocate_string . '777/statistics.txt', 'r' );
	$giornate = trim ( fgets ( $statisticsHandle ) ); // la prima riga va letta perche' contiene il numero delle giornate gia' analizzate, ma in questo momento il dato non serve

	$k = 0;
	while ( ! feof ( $statisticsHandle ) ) {
		$tmpStr = trim ( fgets ( $statisticsHandle ) );
		$playerStats [$k] = $tmpStr;
		$k ++;
	}
	$firstTime = false; // non prima giornata
	fclose ( $statisticsHandle );
?>
