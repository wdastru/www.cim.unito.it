<?php
$handle = fopen($datiCampionatoFile,'r');

for($t=0; $t<4; $t++)   //A&R
{
	for($k=0; $k<7; $k++)   // giornate
	{
		for($j=0; $j<4; $j++)   // partita
		{
			$tmpString = trim(fgets($handle));
			
			$id[$j][$k][$t] = strtok($tmpString, "/"); // ids

			$super[1][$k][$j][$t][0] = strtok("/");
			$super[1][$k][$j][$t][1] = strtok("/");

			$super[2][$k][$j][$t][0] = strtok("/");
			$super[2][$k][$j][$t][1] = strtok("/");

			$i=0;
			while( 1 )
			{
				$tmpStr = strtok("/");

				if ( $tmpStr == '' )
				{
					$super[3][$k][$j][$t][$i] = '';
					break;
				} else {
					$super[3][$k][$j][$t][$i] = str_replace("\'", "'", $tmpStr);
				}

				$i++;
			}
		}
	}
}

fclose($handle);
?>