<?php
require_once 'logger.php';

if (count($fileGaz) > 0)
{
	$filename="..//777//filesGazzetta//" . $fileGaz[count($fileGaz)-1];
	if(file_exists($filename))
	{
		$handle=fopen($filename, 'r');
		$i=0;
		while(!feof($handle))
		{
			$tmpStr=substr(trim(fgets($handle)), 4);
			$allPlayers[$i][0]=strtok($tmpStr,"\t");	// nome
			$allPlayers[$i][1]=strtok("\t");			// squadra
			$allPlayers[$i][2]=strtok("\t");			// ruolo
			$tmpStr=strtok("\t");
			$tmpStr=strtok("\t");
			$allPlayers[$i][3]="-";
			$allPlayers[$i][4]="-";
			$allPlayers[$i][5]=strtok("\t");			// fantavoto
			if($allPlayers[$i][5]=="-0" || $allPlayers[$i][5]=="0")
			$allPlayers[$i][5]="-";

			$allPlayers[$i][6]=strtok("\t");			// voto
			if($allPlayers[$i][6]=="-0" || $allPlayers[$i][6]=="0")
			$allPlayers[$i][6]="-";

			$allPlayers[$i][7]=strtok("\t");			// goal fatti
			if($allPlayers[$i][7]=="-0" || $allPlayers[$i][7]=="0")
			$allPlayers[$i][7]="-";
			if($allPlayers[$i][2] == "P")
			$allPlayers[$i][7]/=-1;
			else
			$allPlayers[$i][7]/=3;

			$allPlayers[$i][8]=strtok("\t")/-0.5;		// ammonizioni
			if($allPlayers[$i][8]=="-0" || $allPlayers[$i][8]=="0")
			$allPlayers[$i][8]="-";

			$allPlayers[$i][9]=strtok("\t")/-1;			// espulsioni
			if($allPlayers[$i][9]=="-0" || $allPlayers[$i][9]=="0")
			$allPlayers[$i][9]="-";

			$allPlayers[$i][10]=strtok("\t");			// rigori
			if($allPlayers[$i][10]=="-0" || $allPlayers[$i][10]=="0")
			$allPlayers[$i][10]="-";

			$allPlayers[$i][11]=strtok("\t")/-2;			// autoreti
			if($allPlayers[$i][11]=="-0" || $allPlayers[$i][11]=="0")
			$allPlayers[$i][11]="-";

			$allPlayers[$i][12]=strtok("\t");			// assist
			if($allPlayers[$i][12]=="-0" || $allPlayers[$i][12]=="0")
			$allPlayers[$i][12]="-";
			$i++;
		}

		$allPlayerCount=$i-1;

		fclose($handle);
	}
	else
	{
		echo "Errore in lastGazFileAllPlayerRead.php : il file " . $filename . " non esiste!";
		exit();
	}
} else {
	$allPlayerCount = 0;
	MySingleton::writeToLog('count($fileGaz) == 0', $relocate_string . "777/logs/lastGazFileAllPlayerRead.log");
}
?>