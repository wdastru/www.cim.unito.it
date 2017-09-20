<?php
/* Creazione liste giocatori per ogni squadra */

require_once  $relocate_string . 'squadre.inc'; // definito shortName[]

for ($j=0; $j<8; $j++)
{
	//echo "A-" . $j . "-" . $giocatore[$j][25]."-A</br>";
	
	for ($i=0; $i<25; $i++)
	{
		//echo "A-" . $i . "-" . $giocatore[$j][$i]."-A</br>";
			
		for ($k=$j; $k<8; $k++)
		{
			//echo "B-" . $k . "-" . $giocatore[$k][25]."-B</br>";
			
			$start = $k==$j ? $i+1 : 0;
			for ($m=$start; $m<25; $m++)
			{
				//echo "B-" . $m . "-" . $giocatore[$k][$m]."-B</br>";
				
				if ($giocatore[$j][$i] == $giocatore[$k][$m]) {
					echo "<span class='ripetuto'>" . $giocatore[$j][$i]. " ripetuto - " . $giocatore[$j][25] . " - " . $giocatore[$k][25] . "</span><br/>";
				}
			}
		}
	}
}


/**/
?>
