<?php
$handle = fopen($relocate_string . '777//filesGazzetta//' . $nameTxt . '.txt', 'r');

//echo "(readGazFile.inc.php) name   : ".$nameTxt.".txt</br>";

$i=0;
$k=0;
while(!feof($handle))
{
	$tmpStr=trim( fgets( $handle ) );
	
	//echo "(readGazFile.inc.php) \$tmpStr : ".$tmpStr."</br>";
	
	$found="false";
	
	if (strlen($tmpStr)>0) // considera solo stringhe non nulle
	{
		//lettura dati da file gazzetta
		$dati[0]=strtok($tmpStr,"\t"); // codice
		$dati[1]=strtok("\t");	// nome e cognome
		$dati[2]=strtok("\t");	// squadra
		$dati[13]=strtok("\t");	// ruolo (contiene il trequartista)
		$dati[3]=strtok("\t");	// ruolo "classico"
		$dati[4]=strtok("\t");	// stato (non lo uso, ma al suo posto metto il numero di partite giocate)
		$tmptmpStr=strtok("\t");	// quotazione
		$dati[5]=strtok("\t");	// fantavoto
		$dati[6]=strtok("\t");	// voto
		$dati[7]=strtok("\t");	// goal
		$dati[8]=strtok("\t");	// ammonizioni
		$dati[9]=strtok("\t");	// espulsioni
		$dati[10]=strtok("\t");	// rigori
		$dati[11]=strtok("\t");	// autoreti
		$dati[12]=strtok("\t");	// assist
		
		//print_r($dati);
		
		if($firstTime==false)
		{
			for ($k=0; $k<count($playerStats); $k++) // loop su tutti i giocatori in $playerStats (inizialmente vuoto)
			{
				if( strtok($tmpStr,"\t")==strtok($playerStats[$k],"\t") )
				{
					$found="true";
					// lettura vecchi dati da statistics.txt per giocatore individuato
					$datiStat[0]=strtok($playerStats[$k],"\t"); // codice
					$datiStat[1]=strtok("\t");	// nome
					$datiStat[2]=strtok("\t");	// squadra
					$datiStat[3]=strtok("\t");	// ruolo
					$datiStat[4]=strtok("\t");	// giocate
					$datiStat[5]=strtok("\t");	// fantavoto
					$datiStat[6]=strtok("\t");	// voto
					$datiStat[7]=strtok("\t");	// goal
					$datiStat[8]=strtok("\t");	// ammonizioni
					$datiStat[9]=strtok("\t");	// espulsioni
					$datiStat[10]=strtok("\t");	// rigori
					$datiStat[11]=strtok("\t");	// autoreti
					$datiStat[12]=strtok("\t");	// assist
					$datiStat[13]=strtok("\t");	// ruolo (con trequartista)
					
					//print_r($datiStat);
					//echo "<br>";
					//print_r($dati);
					//echo "<br>";
					
					//aggiornamento dati
					// il codice non dovrebbe cambiare (spero!)
					$datiStat[1]=$dati[1];	// nome (puo' cambiare)
					$datiStat[2]=$dati[2];	// squadra
					$datiStat[3]=$dati[3];	// ruolo
					$datiStat[13]=$dati[13];	// ruolo (con trequartista)
					
					if ( !( ($dati[5] == "6" && $dati[6] == "Non Gioc.")/* partita rinviata */ ||
							($dati[5] == "-" && $dati[6] == "-") ||
							($dati[5] == "0" && $dati[6] == "S.V.")/* giocatore non valutato */ ||
							($dati[5] == "" && $dati[6] == "") ) )
					{
						$datiStat[4]+=1;	// giocate
						$datiStat[5]+=$dati[5];	// fantavoto
						$datiStat[6]+=$dati[6];	// voto
						
						if ($datiStat[3] == "P") {
							$datiStat[7] += $dati[7] / - 1.0;  // goal
						} else {
						    $datiStat[7] += $dati[7];  // goal
						}/*else if ($datiStat[3] == "D") {
							$datiStat[7] += $dati[7] / 4.5;   // goal
						} else if ($datiStat[3] == "C") {
							if ($datiStat[13] == 'T')
								$datiStat[7] += $dati[7] / 3.5;   // goal
								else
									$datiStat[7] += $dati[7] / 4.0;   // goal
						} else if ($datiStat[3] == "A") {
							if ($datiStat[13] == 'T')
								$datiStat[7] += $dati[7] / 3.5;   // goal
								else
									$datiStat[7] += $dati[7] / 3.0;   // goal
						} else {
							/*
							 * $dati[3] has wrong value
							 */
						//}
						
						$datiStat[8]+=$dati[8]/(-0.5);	// ammonizioni
						$datiStat[9]+=$dati[9]/(-1.0);	// espulsioni
						$datiStat[10]+=$dati[10]/3.0;	// rigori
						$datiStat[11]+=$dati[11]/(-2.0);	// autoreti
						$datiStat[12]+=$dati[12];	// assist
					}
					
					//print_r($datiStat);
					//echo "<br>";
					
					// riscrive la riga del giocatore aggiornata
					$playerStats[$k]="";
					for ($i=0; $i<count($dati); $i++)
						$playerStats[$k] .= ($datiStat[$i] . "\t");
						
						break; // esci dal loop
				}
			}
			
			if ($found=="false") { // il giocatore non e' stato trovato
				
				/* aggiusta i dati */
				if ( !( ($dati[5] == "6" && $dati[6] == "Non Gioc.") || ($dati[5] == "-" && $dati[6] == "-") || ($dati[5] == "0" && $dati[6] == "S.V.") || ($dati[5] == "" && $dati[6] == "") ) ) // partita rinviata || giocatore non valutato
				{
					$dati[4] += 1;	// giocate
					
					if ($dati [3] == "P") {
						$dati [7] /= - 1; // goal
					} /*else if ($dati [3] == "D") {
						$dati [7] /= 4.5; // goal
					} else if ($dati [3] == "C") {
						if ($dati [13] == 'T')
							$dati [7] /= 3.5; // goal
							else
								$dati [7] /= 4.0; // goal
					} else if ($dati [3] == "A") {
						if ($dati [13] == 'T')
							$dati [7] /= 3.5; // goal
							else
								$dati [7] /= 3.0; // goal
					} else {
						/*
						 * $dati[3] has wrong value
						 */
					//}
					
					$dati[8] /= -0.5;	// ammonizioni
					$dati[9] /= -1.0;	// espulsioni
					$dati[10] /= 3.0;	// rigori
					$dati[11] /= -2.0;	// autoreti
				}
				
				for ($i=0; $i<count($dati); $i++) {
					$dati[$i] == '-0' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
					$dati[$i] == '-' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
					$dati[$i] == '' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
					$dati[$i] == ' ' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
				}
				/**/
				
				$tmpStr="";
				if (
						($dati[5] == "-" && $dati[6] == "-") ||
						($dati[5] == "0" && $dati[6] == "S.V.") ||
						($dati[5] == "" && $dati[6] == "")
						) {
							for ($i=0; $i<count($dati); $i++)
							{
								if ( $i == 4 )
									$tmpStr .= ("0\t");
									else
										$tmpStr .= ($dati[$i] . "\t");
							}
						} else {
							for ($i=0; $i<count($dati); $i++)
							{
								if ( $i == 4 )
									$tmpStr .= ("1\t");
									else
										$tmpStr .= ($dati[$i] . "\t");
							}
						}
						$playerStats[$k] = $tmpStr;
			}
			
		} else { // capita solo la prima giornata ( $firstTime == true ) : tutti i giocatori non sono trovati
			
			/* aggiusta i dati */
			if ( !( ($dati[5] == "6" && $dati[6] == "Non Gioc.") ||
					($dati[5] == "-" && $dati[6] == "-") ||
					($dati[5] == "0" && $dati[6] == "S.V.") ||
					($dati[5] == "" && $dati[6] == "") ) ) // partita rinviata || giocatore non valutato
			{
				$dati[4] += 1;	// giocate
				
				if ($dati [3] == "P") {
					$dati [7] /= - 1; // goal
				} /*else if ($dati [3] == "D") {
					$dati [7] /= 4.5; // goal
				} else if ($dati [3] == "C") {
					if ($dati [13] == 'T')
						$dati [7] /= 3.5; // goal
						else
							$dati [7] /= 4.0; // goal
				} else if ($dati [3] == "A") {
					if ($dati [13] == 'T')
						$dati [7] /= 3.5; // goal
						else
							$dati [7] /= 3.0; // goal
				} else {
					/*
					 * $dati[3] has wrong value
					 */
				//} 
				
				$dati[8] /= -0.5;	// ammonizioni
				$dati[9] /= -1.0;	// espulsioni
				$dati[10] /= 3.0;	// rigori
				$dati[11] /= -2.0;	// autoreti
			}
			for ($i=0; $i<count($dati); $i++)
				$dati[$i] == '-0' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
				/**/
				
				for ($i=0; $i<count($dati); $i++) {
					$dati[$i] == '-0' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
					$dati[$i] == '-' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
					$dati[$i] == '' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
					$dati[$i] == ' ' ? $dati[$i] = '0' : $dati[$i] = $dati[$i];
				}
				
				$tmpStr="";
				if ( ($dati[5] == "-" && $dati[6] == "-") || ($dati[5] == "0" && $dati[6] == "S.V.") || ($dati[5] == "" && $dati[6] == "") )
				{
					for ($i=0; $i<count($dati); $i++)
					{
						if ( $i == 4 )
							$tmpStr .= ("0\t");
							else
								$tmpStr .= ($dati[$i] . "\t");
					}
				}
				else
				{
					for ($i=0; $i<count($dati); $i++)
					{
						if ( $i == 4 )
							$tmpStr .= ("1\t");
							else
								$tmpStr .= ($dati[$i] . "\t");
					}
				}
				$playerStats[$k] = $tmpStr;
				$k++;
		}
	}
}
fclose($handle); // download\...
?>
