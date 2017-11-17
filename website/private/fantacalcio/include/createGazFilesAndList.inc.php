<?php
/* 
 * Creazione e salvataggio di 777/gazFiles.inc.php
 *
 * NON INDICARE $relocate_string in questo file !!!
 */

//require_once ($relocate_string . "logger.php");
$gazFileInc = $relocate_string . "777/gazFiles.inc.php";
$gazFileList = $relocate_string . "777/filesGazzetta/listaGazFiles.txt";

$hGazFileList = fopen($gazFileList, 'w');
$hGazFileInc = fopen($gazFileInc, 'w');

fwrite($hGazFileInc, "<?php\n \$fileGaz=array(");

$dir = $relocate_string . "777//filesGazzetta//*.txt"; // lista dei file della Gazzetta presenti
$result = glob($dir);

if ($hGazFileInc && $hGazFileList) 
{
	for($i=0; $i<count($result); $i++)
	{
		$out=pathinfo($result[$i],PATHINFO_BASENAME); // solo nome file dal path
		if($out!="listaGazFiles.txt")
		{
			fwrite($hGazFileList, $out . "\n");
		
			if ($i != count($result)-1)
				fwrite($hGazFileInc, "\"" . $out . "\", ");
			else
				fwrite($hGazFileInc, "\"" . $out . "\"");
		}
	}
	
	fwrite ( $hGazFileInc, "); \n?>" );
	fwrite ( $hGazFileList, "\n" );
	fclose ( $hGazFileInc );
	fclose ( $hGazFileList );
} else {
	
	if (! $hGazFileInc)
		echo "Il file " . $gazFileInc . " non e' apribile!";
	if (! $hGazFileList)
		echo "Il file " . $gazFileList . " non e' apribile!";
}
/**/
?>