<?php
/* Creazione liste giocatori per ogni squadra */
require_once $relocate_string . 'squadre.inc'; // definito shortName[]

$giocatore = array(array());

for ($j=0; $j<8; $j++)
{
	$filename=$relocate_string . "777//formazioni//" . $shortName[$j] . ".txt";
	if(file_exists($filename)) // il file della squadra esiste quindi legge quello
	{
		$handle=fopen($filename, 'r');
		
		$trash=fgets($handle); // modulo
		$trash=fgets($handle); // titolari (anche se poi non viene usata)
		$trash=fgets($handle); // riserve (anche se poi non viene usata)
		
		for ($i=0; $i<25; $i++)
			$giocatore[$j][$i] = trim(fgets($handle)); // nome
		
		$giocatore[$j][25] = $shortName[$j];
		
		$trash = fgets($handle);
		$trash = fgets($handle);
		
		fclose($handle);
	} else {
		echo "<span>filename " . $filename. " does not exists.</span><br/>";
	}
}
/**/
?>
