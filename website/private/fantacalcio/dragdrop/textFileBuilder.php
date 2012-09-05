<?php
$filename = "../777/formazioni/" . $_GET['file'];

//echo "alert('" . $filename . "')";

/**/
if(file_exists($filename)) // se il file della squadra esiste lo legge
{
	$handle=fopen($filename, 'r');
	
	$modulo = trim(fgets($handle));
	$titolari = trim(fgets($handle));
	$riserve = trim(fgets($handle)); //  riserve

	for ($i=0; $i<25; $i++)
	{
		$giocatore[$i] = trim(fgets($handle)); // nome
	}
	
	$capitale = trim(fgets($handle));
	$telefono = trim(fgets($handle));
	$lastModified = trim(fgets($handle));
	
	fclose($handle);
} else {
	echo $filename . " non esiste!";
	exit;
}

/**/
$tmpFile = "../777/temp.txt";
$handle = fopen($tmpFile, 'w');

if ($handle)
{
	strtok($filename, "_./");
	strtok("_./");
	fwrite($handle, "nome squadra : " . strtok("_./") . "\n");
	fwrite($handle, "modulo : " . substr($titolari, 4) . "\n\n");
	fwrite($handle, "(in casa ?)\n\n");
	
	for ($i=0; $i<25; $i++) 
	{
		$giocatore[$i] = str_replace('\\', '', $giocatore[$i]);
		fwrite($handle, $giocatore[$i] . "\n");
	}
}

fclose($handle);

echo "PopupCentrata('" . $tmpFile . "', 400, 600);";
/**/
?>