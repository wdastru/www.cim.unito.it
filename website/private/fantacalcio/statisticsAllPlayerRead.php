<?php
if(file_exists($filenameStats))
{
	$handle=fopen($filenameStats, 'r');
	$i=0;
	while(!feof($handle))
	{
		$tmpStr=substr(trim(fgets($handle)), 4);
		$allPlayerStats[$i][0]=strtok($tmpStr,"\t");	// nome
		$allPlayerStats[$i][1]=strtok("\t");			// squadra
		$allPlayerStats[$i][2]=strtok("\t");			// ruolo

		$allPlayerStats[$i][3]="-";
		
		$allPlayerStats[$i][4]=strtok("\t");			// giocate
		if($allPlayerStats[$i][4]=="0")
			$allPlayerStats[$i][4]="-";

		$allPlayerStats[$i][5]=strtok("\t");			// fantavoto
		if($allPlayerStats[$i][5]=="0" || $allPlayerStats[$i][4]=="-")
			$allPlayerStats[$i][5]="-";
		else 
			$allPlayerStats[$i][5]=round($allPlayerStats[$i][5]/$allPlayerStats[$i][4],2);
		
		$allPlayerStats[$i][6]=strtok("\t");			// voto
		if($allPlayerStats[$i][6]=="0" || $allPlayerStats[$i][4]=="-")
			$allPlayerStats[$i][6]="-";
		else
			$allPlayerStats[$i][6]=round($allPlayerStats[$i][6]/$allPlayerStats[$i][4],2);

		$allPlayerStats[$i][7]=strtok("\t");			// goal fatti
		if($allPlayerStats[$i][7]=="-0" || $allPlayerStats[$i][7]=="0")
			$allPlayerStats[$i][7]="-";
			
		$allPlayerStats[$i][8]=strtok("\t");		// ammonizioni
		if($allPlayerStats[$i][8]=="-0" || $allPlayerStats[$i][8]=="0")
			$allPlayerStats[$i][8]="-";
			
		$allPlayerStats[$i][9]=strtok("\t");			// espulsioni		
		if($allPlayerStats[$i][9]=="-0" || $allPlayerStats[$i][9]=="0")
			$allPlayerStats[$i][9]="-";
			
			
		$allPlayerStats[$i][10]=strtok("\t");			// rigori		
		if($allPlayerStats[$i][10]=="-0" || $allPlayerStats[$i][10]=="0")
			$allPlayerStats[$i][10]="-";
			
		$allPlayerStats[$i][11]=strtok("\t");			// autoreti		
		if($allPlayerStats[$i][11]=="-0" || $allPlayerStats[$i][11]=="0")
			$allPlayerStats[$i][11]="-";
			
		$allPlayerStats[$i][12]=strtok("\t");			// assist
		if($allPlayerStats[$i][12]=="-0" || $allPlayerStats[$i][12]=="0")
			$allPlayerStats[$i][12]="-";
			
		$i++;
	}		
	
	$allPlayerStatsCount=$i-1;

	fclose($handle);
}
else
{
	echo "Il file " . $filenameStats . " non esiste!";
	exit();
}
?>