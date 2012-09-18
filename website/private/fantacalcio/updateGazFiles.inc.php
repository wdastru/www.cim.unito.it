<?php
/* Creazione e salvataggio di 777/gazFiles.inc.php */

/*
 *  NON INDICARE $relocate_string in questo file !!!
 */
require_once ($relocate_string . "logger.php");
$gazFileInc = $relocate_string . "777/gazFiles.inc.php";
$gazFileList = $relocate_string . "777/filesGazzetta/listaGazFiles.txt";

//MySingleton::writeToLog('$gazFileInc = ' . $gazFileInc, $relocate_string . "777/logs/updateGazFiles.inc.php.log");

if (!file_exists($gazFileInc))
{
	$handle = fopen($gazFileInc, 'w');
	fclose( $handle );
}
	
if (!file_exists($gazFileList))
{
	@mkdir($relocate_string . "777/filesGazzetta/");
	$handle = fopen($gazFileList, 'w');
	fclose( $handle );
}

$hGazFileList = fopen($gazFileList, 'w');
$hGazFileInc = fopen($gazFileInc, 'w');
fwrite($hGazFileInc, "<?php\n \$fileGaz=array(");

$dir = $relocate_string . "777//filesGazzetta//*.txt"; // lista dei file della Gazzetta presenti
$result = glob($dir);

//MySingleton::writeToLog('count($result) = ' . count($result), $relocate_string . "777/logs/updateGazFiles.inc.php.log");

if ($hGazFileInc) 
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
	
	fwrite($hGazFileInc, "); \n?>");
	fwrite($hGazFileList, "\n");
	fclose($hGazFileInc);
	fclose($hGazFileList);
} else {
	echo "Il file " . $gazFileInc . " non &eacute; apribile!";		
}
/**/
?>