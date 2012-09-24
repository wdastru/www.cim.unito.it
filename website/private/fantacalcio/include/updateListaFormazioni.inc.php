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
        // empty $results could erases listaFormazioni.txt
    }
	
	fclose($hListaFormazioni);
} else {
	echo "Il file " . $listaFormazioni . " non &eacute; apribile!";		
}
/**/
?>