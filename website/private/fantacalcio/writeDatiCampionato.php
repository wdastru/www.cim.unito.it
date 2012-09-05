<?php
require_once $relocate_string . 'include/backup.inc.php';
require_once $relocate_string . 'include/cleanAccentsAndApostrophes.inc.php';
backup($relocate_string . $datiCampionatoFile);

$handle = fopen($datiCampionatoFile, 'w');

if($handle)
{
	for($t=0; $t<4; $t++)	//A&R
	{
		for($k=0; $k<7; $k++)	// giornate
		{
			for($j=0; $j<4; $j++)	// partita
			{
				if( $j + $k + $t == 0 ) {
					// la prima riga non va a capo, dopo sì
					fwrite($handle, "a");
				} else {
					fwrite($handle, "\na");
				}

				if($Id == $id[$j][$k][$t])
				{
					$super[1][$k][$j][$t][0] = $goalA;
					$super[1][$k][$j][$t][1] = $goalB;
					$super[2][$k][$j][$t][0] = $puntiA;
					$super[2][$k][$j][$t][1] = $puntiB;

					if($super[1][$k][$j][$t][0] == '')
					$super[1][$k][$j][$t][0] = 0;
					if($super[1][$k][$j][$t][1] == '')
					$super[1][$k][$j][$t][1] = 0;

					if($super[2][$k][$j][$t][0] == '')
					$super[2][$k][$j][$t][0] = 0;
					if($super[2][$k][$j][$t][1] == '')
					$super[2][$k][$j][$t][1] = 0;

					for($i=0; $i<20; $i++){
						$super[3][$k][$j][$t][$i] = $goals[$i];
					}
				}

				fwrite($handle,  $j . $k . $t . '/' . $super[1][$k][$j][$t][0] . '/' . $super[1][$k][$j][$t][1] . '/' . $super[2][$k][$j][$t][0] . '/' . $super[2][$k][$j][$t][1] . '/');

				$i=0;
				while( $i < count($super[3][$k][$j][$t]) )
				{
					if( $super[3][$k][$j][$t][$i] == '' )
					{
						$i++;
						continue;
					}
					else
					{
						fwrite($handle, strtoupper(cleanAccentsAndApostrophes($super[3][$k][$j][$t][$i])) . '/');
					}
					$i++;
				}
			}
		}
	}
}
else
{
	echo "file non apribile!";
}
fclose($handle);

?>