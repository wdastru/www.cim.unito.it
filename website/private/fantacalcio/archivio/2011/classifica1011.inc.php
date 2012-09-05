<?php
require_once('squadre1011.inc.php');
/*
	array 8x20
	righe 	: 8 squadre
	colonne : 	0  - punti
				1  - differenza reti
				2  - goal fatti
				3  - nome esteso (longName)
				4  - giocate
				5  - goal subiti
				6  - vinte
				7  - pareggiate
				8  - perse
				9  - fantapunti
				10 - fantamedia	
				11 - punti AA
				12 - punti AR	
				13 - punti RA
				14 - punti RR
				15 - percentuale punti guadagnati AA
				16 - percentuale punti guadagnati AR	
				17 - percentuale punti guadagnati RA
				18 - percentuale punti guadagnati RR	
				19 - link (shortName)
*/							
							
for ($i=0;$i<8;$i++)
{
	for ($j=0;$j<20;$j++)
	{
		if ($j == 3)
			$classifica[$i][$j] = $longName[$i];
		else if ($j == 19)
			$classifica[$i][$j] = $shortName[$i];
		else
			$classifica[$i][$j] = 0;
	}
}
?>