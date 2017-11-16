<?php
$statisticsHandle = fopen ( $relocate_string . '777/statistics.txt', "w" );
fwrite ( $statisticsHandle, $giornate + 1 . "\n" );
for($i = 0; $i < count ( $playerStats ); $i ++)
	fwrite ( $statisticsHandle, $playerStats [$i] . "\n" );
fclose ( $statisticsHandle );
?>
