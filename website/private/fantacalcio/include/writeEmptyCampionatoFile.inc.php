<?php 
	$handle = fopen("777/datiCampionato.txt", 'w');
	for ($i = 0; $i < 4; $i++) {
		for ($j = 0; $j < 7; $j++) {
			for ($k = 0; $k < 4; $k++) {
				fwrite($handle, 'a' . $k . $j . $i . "/////\n");
			}
		}
	}
	fclose($handle);
?>