<?php
$statisticsHandle = fopen ( $relocate_string . '777/statistics.txt', "w" );
//echo "(writeStats.inc.php) giornata : ".($giornate + 1)."</br>";
fwrite ( $statisticsHandle, $giornate + 1 . "\n" );
for($i = 0; $i < count ( $playerStats ); $i ++)
	fwrite ( $statisticsHandle, $playerStats [$i] . "\n" );
fclose ( $statisticsHandle );
?>
