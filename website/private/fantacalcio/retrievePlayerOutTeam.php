<?php 

$player=stripslashes($_GET['player']);
$player=stripslashes($player);

require('squadre.inc');
require('777/gazFiles.inc.php');

$filenameStats="777//statistics.txt";
require('statisticsAllPlayerRead.php');

require('playersInTeamsReader.php'); // definito giocatore[squadra:8][index:25]

$found = 0;

for ($i=0; $i<count($allPlayerStats); $i++)
{
	if ($allPlayerStats[$i][0] != '')
	{
		for ($k=0; $k<25; $k++)
		{
			if (strtoupper($allPlayerStats[$i][0]) == strtoupper($player))
			{
				{
					echo $allPlayerStats[$i][1];
					$found = 1;
					exit();
				}
			}
		}
	}
}

if ($found == 0) {
	echo "Player not found!";
}
?>