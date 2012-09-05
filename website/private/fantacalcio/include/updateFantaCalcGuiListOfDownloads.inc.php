<?php
/* Creazione e salvataggio di 777/gazFiles.inc.php */

/*
 *  NON INDICARE $relocate_string in questo file !!!
*/
$downloadsList = $relocate_string . "777/downloads.txt";

if (!file_exists($downloadsList))
{
	$handle = fopen($downloadsList, 'w');
	fclose( $handle );
}

$hDownloadsList = fopen($downloadsList, 'w');

$exe = $relocate_string . "download/*.exe"; // lista dei file .exe di installazione
$resultEXE = glob($exe);
// $zip = $relocate_string . "download/*.zip"; // lista dei file .zip di installazione
// $resultZIP = glob($zip);

// $downloadResults = array_merge($resultEXE, $resultZIP);
$downloadResults = array_merge($resultEXE);

if ($hDownloadsList)
{
	for($i=0; $i<count($downloadResults); $i++)
	{
		$out=pathinfo($downloadResults[$i],PATHINFO_BASENAME); // solo nome file dal path
		fwrite($hDownloadsList, $out . "\n");
	}

	fclose($hDownloadsList);
} else {
	echo "Il file " . $downloadsList . " non &eacute; apribile!";
}
/**/
?>