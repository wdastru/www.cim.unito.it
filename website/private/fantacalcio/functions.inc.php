<?php
function readData()
{
	global $super;

	$datiCampionato = array(112); // inizializzazione
	for ($i=0;$i<112;$i++)
	$datiCampionato[$i] = array(6);

	$counter_1 = 0;
	$counter_2 = 0;

	for($t=0; $t<4; $t++)   //A&R
	{
		for($k=0; $k<7; $k++)   // giornate
		{
			for($j=0; $j<4; $j++)   // partita
			{
				for($i=0; $i<2; $i++)   // casa/fuori
				{
					$datiCampionato[$counter_1][$counter_2++] = $super[0][$k][$j][$i];
				}
				for($i=0; $i<2; $i++)   // casa/fuori
				{
					$datiCampionato[$counter_1][$counter_2++] = $super[1][$k][$j][$t][$i];
				}
				for($i=0; $i<2; $i++)   // casa/fuori
				{
					$datiCampionato[$counter_1][$counter_2++] = $super[2][$k][$j][$t][$i];
				}
				$counter_2 = 0;
				$counter_1++;
			}
		}
	}
	return $datiCampionato;
}

function updateSquadra()
{
	global $datiCampionato;
	global $longName;

	$squadra = array(8);
	for ($i=0; $i<8; $i++)
	{
		$squadra[$i] = array(11);
		$squadra[$i][0] = $longName[$i];
		for ($j=1; $j<11; $j++)
		{
			$squadra[$i][$j] = 0;
		}
	}

	for ($i=0; $i<112; $i++)
	{
		if( $datiCampionato[$i][2] > $datiCampionato[$i][3] ) // vittoria squadra in casa
		{
			for ($k=0; $k<8; $k++) // loop sulle squadre
			{
				if ($datiCampionato[$i][0] == $squadra[$k][0])
				{
					$squadra[$k][1] += 3; // punti
					$squadra[$k][2] += 1; // partite giocate
					$squadra[$k][3] += 1; // vinte
					$squadra[$k][6] += $datiCampionato[$i][2]; // goal fatti
					$squadra[$k][7] += $datiCampionato[$i][3]; // goal subiti
					$squadra[$k][8] += ( $datiCampionato[$i][2] - $datiCampionato[$i][3] ); // differenza reti
					$squadra[$k][9] += $datiCampionato[$i][4]; // punti fatti
					$squadra[$k][10] += ( $datiCampionato[$i][4] - $datiCampionato[$i][5] ); // differenza punti
				}
				else if ($datiCampionato[$i][1] == $squadra[$k][0])
				{
					$squadra[$k][2] += 1; // partite giocate
					$squadra[$k][5] += 1; // partite perse
					$squadra[$k][6] += $datiCampionato[$i][3]; // goal fatti
					$squadra[$k][7] += $datiCampionato[$i][2]; // goal subiti
					$squadra[$k][8] += ( $datiCampionato[$i][3] - $datiCampionato[$i][2] ); // differenza reti
					$squadra[$k][9] += $datiCampionato[$i][5]; // punti fatti
					$squadra[$k][10] += ( $datiCampionato[$i][5] - $datiCampionato[$i][4] ); // differenza punti
				}
			}
		}
		else if( $datiCampionato[$i][3] > $datiCampionato[$i][2] ) // vittoria squadra fuori casa
		{
			for ($k=0; $k<8; $k++)
			{
				if ($squadra[$k][0] == $datiCampionato[$i][0])
				{
					$squadra[$k][2] += 1;
					$squadra[$k][5] += 1;
					$squadra[$k][6] += $datiCampionato[$i][2];
					$squadra[$k][7] += $datiCampionato[$i][3];
					$squadra[$k][8] += ($datiCampionato[$i][2] - $datiCampionato[$i][3]);
					$squadra[$k][9] += $datiCampionato[$i][4];
					$squadra[$k][10] += ( $datiCampionato[$i][4] - $datiCampionato[$i][5] );
				}
				else if ($squadra[$k][0] == $datiCampionato[$i][1])
				{
					$squadra[$k][1] += 3;
					$squadra[$k][2] += 1;
					$squadra[$k][3] += 1;
					$squadra[$k][6] += $datiCampionato[$i][3];
					$squadra[$k][7] += $datiCampionato[$i][2];
					$squadra[$k][8] += ($datiCampionato[$i][3] - $datiCampionato[$i][2]);
					$squadra[$k][9] += $datiCampionato[$i][5];
					$squadra[$k][10] += ( $datiCampionato[$i][5] - $datiCampionato[$i][4] );
				}
			}
		}
		else if ( $datiCampionato[$i][2] == $datiCampionato[$i][3] ) // pareggio
		{
			if ($datiCampionato[$i][2] == '-' || $datiCampionato[$i][2] == '')
			{
				for ($k=0; $k<8; $k++)
				{
					if ($squadra[$k][0] == $datiCampionato[$i][0])
					{
						$squadra[$k][1] += 0;
						$squadra[$k][2] += 1;
					}
					else if ($squadra[$k][0] == $datiCampionato[$i][1])
					{
						$squadra[$k][1] += 0;
						$squadra[$k][2] += 1;
					}
				}
				continue;
			}

			for ($k=0; $k<8; $k++)
			{
				if ($squadra[$k][0] == $datiCampionato[$i][0])
				{
					$squadra[$k][1] += 1;
					$squadra[$k][2] += 1;
					$squadra[$k][4] += 1;
					$squadra[$k][6] += $datiCampionato[$i][2];
					$squadra[$k][7] += $datiCampionato[$i][3];
					$squadra[$k][9] += $datiCampionato[$i][4];
					$squadra[$k][10] += ( $datiCampionato[$i][4] - $datiCampionato[$i][5] );
				}
				else if ($squadra[$k][0] == $datiCampionato[$i][1])
				{
					$squadra[$k][1] += 1;
					$squadra[$k][2] += 1;
					$squadra[$k][4] += 1;
					$squadra[$k][6] += $datiCampionato[$i][3];
					$squadra[$k][7] += $datiCampionato[$i][2];
					$squadra[$k][9] += $datiCampionato[$i][5];
					$squadra[$k][10] += ( $datiCampionato[$i][5] - $datiCampionato[$i][4] );
				}
			}
		}
		else // nessun risultato inserito
		{
			;
		}
	}
	return $squadra;
}

function switchSquadre($squadra, $a, $b)
{
	for ( $k=0; $k<count($squadra[0]); $k++ )
	{
		$tmp = $squadra[$a][$k];
		$squadra[$a][$k] = $squadra[$b][$k];
		$squadra[$b][$k] = $tmp;
	}
	return $squadra;
}

function classifica(/* variable number of arguments, the first has to be the array name */)
{
	global $classifica_calls_counter;
	global $datiCampionato;
	global $squadra;

	$local_call_number = $classifica_calls_counter;
	$classifica_calls_counter++;

	for ($i=0;$i<112;$i++)
	{
		$datiPerAvulsa[] = array();
		for ($j=0;$j<6;$j++)
		$datiPerAvulsa[$i][] = "";
	}

	for ($i=0;$i<112;$i++)
	{
		for ($j=0;$j<6;$j++)
		{
			if ($datiCampionato[$i][$j]=="-" || $datiCampionato[$i][$j]=="")
			$datiPerAvulsa[$i][$j] = 0; // pone i NaN a zero per la classifica avulsa
			else
			$datiPerAvulsa[$i][$j] = $datiCampionato[$i][$j];
		}
	}

	$idx = func_get_arg(1);
	$argList = '';
	for ($i=0; $i<count($idx); $i++)
	$argList .= $squadra[$idx[$i]][0];

	//		$avulsa[$i][0] -> nome
	//		$avulsa[$i][1] -> punti
	//		$avulsa[$i][2] -> giocate
	//		$avulsa[$i][3] -> vinte
	//		$avulsa[$i][4] -> pareggiate
	//		$avulsa[$i][5] -> perse
	//		$avulsa[$i][6] -> fatti
	//		$avulsa[$i][7] -> subiti
	//		$avulsa[$i][8] -> diffReti
	//		$avulsa[$i][9] -> punti fatti
	//		$avulsa[$i][10] -> differenza punti
	//		$avulsa[$i][11] -> array[12] dati squadra
	
	for ($i=0;$i<8;$i++)
	{
		$avulsa[] = array();
		$avulsa[$i][] = $squadra[$i][0];

		for ($j=1;$j<11;$j++)
			$avulsa[$i][] = 0;
		$avulsa[$i][11] = array();
		
		for ($j=0;$j<12;$j++)
			$avulsa[$i][11][$j] = $squadra[$i][$j];		
	}

	$counter = 0;
	// --> aggiorna classifica avulsa
	for ($i=0;$i<112;$i++) // partite
	{
		if ( strstr($argList, $datiPerAvulsa[$i][0])==false || strstr($argList, $datiPerAvulsa[$i][1])==false )
		continue;

		if( $datiPerAvulsa[$i][2] > $datiPerAvulsa[$i][3] ) // vittoria "casa"
		{
			for ($k = $idx[0];$k <= $idx[count($idx)-1];$k++)
			{
				if ($avulsa[$k][0] == $datiPerAvulsa[$i][0])
				{
					$avulsa[$k][1] += 3;
					$avulsa[$k][2] += 1;
					$avulsa[$k][3] += 1;
					$avulsa[$k][6] += $datiPerAvulsa[$i][2];
					$avulsa[$k][7] += $datiPerAvulsa[$i][3];
					$avulsa[$k][8] += ($datiPerAvulsa[$i][2] - $datiPerAvulsa[$i][3]);
					$avulsa[$k][9] += $datiPerAvulsa[$i][4];
					$avulsa[$k][10] += ($datiPerAvulsa[$i][4] - $datiPerAvulsa[$i][5]);
				}
				else if ($avulsa[$k][0] == $datiPerAvulsa[$i][1])
				{
					$avulsa[$k][2] += 1;
					$avulsa[$k][5] += 1;
					$avulsa[$k][6] += $datiPerAvulsa[$i][3];
					$avulsa[$k][7] += $datiPerAvulsa[$i][2];
					$avulsa[$k][8] += ( $datiPerAvulsa[$i][3] - $datiPerAvulsa[$i][2] );
					$avulsa[$k][9] += $datiPerAvulsa[$i][5];
					$avulsa[$k][10] += ($datiPerAvulsa[$i][5] - $datiPerAvulsa[$i][4]);
				}
			}
		}
		else if( $datiPerAvulsa[$i][3] > $datiPerAvulsa[$i][2] ) // vittoria "fuori"
		{
			//echo "fuori<br><br>";
			for ($k = $idx[0];$k <= $idx[count($idx)-1];$k++)
			{
				if ($avulsa[$k][0] == $datiPerAvulsa[$i][0])
				{
					$avulsa[$k][2] += 1;
					$avulsa[$k][5] += 1;
					$avulsa[$k][6] += $datiPerAvulsa[$i][2];
					$avulsa[$k][7] += $datiPerAvulsa[$i][3];
					$avulsa[$k][8] += ( $datiPerAvulsa[$i][2] - $datiPerAvulsa[$i][3] );
					$avulsa[$k][9] += $datiPerAvulsa[$i][4];
					$avulsa[$k][10] += ($datiPerAvulsa[$i][4] - $datiPerAvulsa[$i][5]);
				}
				else if ($avulsa[$k][0] == $datiPerAvulsa[$i][1])
				{
					$avulsa[$k][1] += 3;
					$avulsa[$k][2] += 1;
					$avulsa[$k][3] += 1;
					$avulsa[$k][6] += $datiPerAvulsa[$i][3];
					$avulsa[$k][7] += $datiPerAvulsa[$i][2];
					$avulsa[$k][8] += ($datiPerAvulsa[$i][3] - $datiPerAvulsa[$i][2]);
					$avulsa[$k][9] += $datiPerAvulsa[$i][5];
					$avulsa[$k][10] += ($datiPerAvulsa[$i][5] - $datiPerAvulsa[$i][4]);
				}
			}
		}
		else if ( $datiPerAvulsa[$i][3] == $datiPerAvulsa[$i][2] ) // pareggio
		{
			for ($k = $idx[0];$k <= $idx[count($idx)-1];$k++)
			{
				if ($avulsa[$k][0] == $datiPerAvulsa[$i][0])
				{
					$avulsa[$k][1] += 1;
					$avulsa[$k][2] += 1;
					$avulsa[$k][4] += 1;
					$avulsa[$k][6] += $datiPerAvulsa[$i][2];
					$avulsa[$k][7] += $datiPerAvulsa[$i][3];
					$avulsa[$k][9] += $datiPerAvulsa[$i][4];
					$avulsa[$k][10] += ($datiPerAvulsa[$i][4] - $datiPerAvulsa[$i][5]);
				}
				else if ($avulsa[$k][0] == $datiPerAvulsa[$i][1])
				{
					$avulsa[$k][1] += 1;
					$avulsa[$k][2] += 1;
					$avulsa[$k][4] += 1;
					$avulsa[$k][6] += $datiPerAvulsa[$i][3];
					$avulsa[$k][7] += $datiPerAvulsa[$i][2];
					$avulsa[$k][9] += $datiPerAvulsa[$i][5];
					$avulsa[$k][10] += ($datiPerAvulsa[$i][5] - $datiPerAvulsa[$i][4]);
				}
			}
		}
		else
		{
			echo "!! Chiamate qualcuno !!<br><br>";
		}
	}
	// <-- aggiorna classifica avulsa

	// --> sort x punti
	$xx = count($idx)-1;
	for ( $j=$idx[0]; $j<$idx[$xx]; $j++ )
	{
		for ( $i=$idx[0]; $i<($idx[0]+$idx[$xx]-$j); $i++ )
		{
			if ($avulsa[$i][1] < $avulsa[$i+1][1]) // punti
			$avulsa = switchSquadre($avulsa, $i, $i+1);
		}
	}
	// <-- sort x punti

	// --> applica correzione a squadra[][]
	for ($i=$idx[0]; $i<=$idx[$xx]; $i++)
	{
		for ($j=$idx[0]; $j<=$idx[$xx]; $j++)
		{
			if ($squadra[$i][0] == $avulsa[$j][0])
			{
				$squadra = switchSquadre($squadra, $i, $j);
				break;
			}
		}
	}
	// <-- applica correzione a squadra[][]

	// --> ricerca gruppi per chiamata ricorsiva a classifica
	$containers = array();
	for($i=0; $i<count($idx); $i++)
	array_push($containers, array());

	$j=0;
	$containers[$j][0] = $idx[0]; // la prima squadra sara' sicuramente nel primo contenitore

	for($i=$idx[0]; $i<($idx[0]+count($idx)-1); $i++)
	{
		if(($avulsa[$i][1] == $avulsa[$i+1][1]))
		array_push($containers[$j], $i+1);
		else
		{
			$j++;
			array_push($containers[$j], $i+1);
		}
	}
	// <-- ricerca gruppi per classifica avulsa

	// --> risoluzione gruppi
	for($i=0; $i<count($containers); $i++)
	{
		if (count($containers[$i])>1)
		{
			if ( ( count($containers[$i]) > 1) && ( count($containers[$i]) < count($idx) ) )
			classifica($squadra, $containers[$i]);
		}
	}
	// <-- risoluzione gruppi

	$sorteggio = 0;

	// --> sort avulsa
	for ( $j=0; $j<$idx[$xx]-$idx[0]; $j++ )
	{
		for ( $i=$idx[0]; $i<$idx[$xx]-$j; $i++ )
		{
			// **** DATI AVULSA *** //
			if ($avulsa[$i][1] < $avulsa[$i+1][1]) // punti
			{
				$avulsa = switchSquadre($avulsa, $i, $i+1);
			}
			else if ($avulsa[$i][1] == $avulsa[$i+1][1]) // punti
			{
				if ($avulsa[$i][8] < $avulsa[$i+1][8]) // diff reti
				{
					$avulsa = switchSquadre($avulsa, $i, $i+1);
				}
				else if ($avulsa[$i][8] == $avulsa[$i+1][8]) // diff reti
				{
					if ($avulsa[$i][6] < $avulsa[$i+1][6]) // goal fatti
					{
						$avulsa = switchSquadre($avulsa, $i, $i+1);
					}
					else if ($avulsa[$i][6] == $avulsa[$i+1][6]) // goal fatti
					{
						// **** DATI GLOBALI *** //
						if ($avulsa[$i][11][8] < $avulsa[$i+1][11][8]) // diff reti
						{
							$avulsa = switchSquadre($avulsa, $i, $i+1);
						}
						else if ($avulsa[$i][11][8] == $avulsa[$i+1][11][8]) // diff reti
						{
							if ($avulsa[$i][11][6] < $avulsa[$i+1][11][6]) // goal totali
							{
								$avulsa = switchSquadre($avulsa, $i, $i+1);
							}
							else // sorteggio
							{
								$sorteggio += 1;
							}
						}
					}
				}
			}
		}
	}
	// <-- sort avulsa

	// --> visualizzazione classifica avulsa
	echo "<table class='classifica'>";

	if ($sorteggio > 0) {
		echo "<tr><td colspan='11' class='sorteggio'>--- SORTEGGIARE !!! ---</td></tr>";
	} else {
		echo "<tr><td colspan='11'>--------- OK ----------</td></tr>";
	}

	echo "<tr  class='tableline'><th>avulsa n&deg;";
	echo $local_call_number+1;
	echo " </th><th>pt</th><th>g</th><th>v</th><th>n</th><th>p</th><th>gf</th><th>gs</th><th>&Delta;g</th><th>pt</th><th>&Delta;p</th></tr>";
	echo "    <tr>";
	for($i=0; $i<8; $i++)
	{
		if ($avulsa[$i][2] == 0)
		continue;

		echo "<td class='Squadra'>" . $avulsa[$i][0] . "</td>";
		for($j=1; $j<11; $j++)
		echo "<td class='Dati'>" . $avulsa[$i][$j] . "</td>";
		echo "    </tr>";
	}
	echo "</table>";
	echo "<br /><br />";
	// <-- visualizzazione classifica avulsa

	// --> applica correzione a squadra[][]
	for ($i=$idx[0]; $i<=$idx[$xx]; $i++)
	{
		for ($j=$idx[0]; $j<=$idx[$xx]; $j++)
		{
			if ($squadra[$i][0] == $avulsa[$j][0])
			{
				$squadra = switchSquadre($squadra, $i, $j);
				break;
			}
		}
	}
	// <-- applica correzione a squadra[][]
}
?>