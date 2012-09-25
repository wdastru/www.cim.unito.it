<?php
/* salva lista formazioni disponibili */
$listaFormazioni = $relocate_string . "777//formazioni//listaFormazioni.txt";

$hListaFormazioni=fopen($listaFormazioni, 'w');

if ($hListaFormazioni) 
{
	$dir = "..//777//formazioni//*.txt"; 
	$result = glob($dir);
    
    if (count($result) != 0) {
    	for($i=0; $i<count($result); $i++)
    	{
    		$out=pathinfo($result[$i],PATHINFO_BASENAME); // solo nome file dal path
    		if ($out=='listaFormazioni.txt')
    				continue;
    		
    		fwrite($hListaFormazioni, $out . "\n");
    	}
    } else {
        MySingleton::writeToLog(exec('date') . " : count(\$result) is empty\n", $relocate_string . "777/logs/updateListaFormazioni.log");
    }
	
	fclose($hListaFormazioni);
} else {
	MySingleton::writeToLog(exec('date') . " : \$hListaFormazioni is false\n", $relocate_string . "777/logs/updateListaFormazioni.log");		
}
/**/
?>