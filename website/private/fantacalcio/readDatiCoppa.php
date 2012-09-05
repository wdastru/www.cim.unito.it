<?php
$handle = fopen($datiCoppaFile, 'r');

for($q=0; $q<12; $q++)
{
	$tmpString = trim(fgets($handle));

	$id[$q] = strtok($tmpString, "/"); // ids

	$superCoppa[1][$q][0] = strtok("/");
	$superCoppa[1][$q][1] = strtok("/");
	$superCoppa[2][$q][0] = strtok("/");
	$superCoppa[2][$q][1] = strtok("/");

	$j=0;
	while( 1 )
	{
		$tmpStr = strtok("/");
		if( $tmpStr == '' )
		{
			$superCoppa[3][$q][$j] = '';
			break;
		} else {
			/*
			 * Serve solo nel caso ci fosse scritto nel nome
			 * del giocatore \' come in D\'AGOSTINO
			 * Avendo modificato anche writeDatiCoppa.php
			 * probabilmente è lo str_replace è inutile. 
			 */
			$superCoppa[3][$q][$j] = str_replace("\'", "'", $tmpStr);
		}

		$j++;
	}
}

for($s=0; $s<4; $s++)
{
	$tmpString = trim(fgets($handle));

	$id[12+$s] = strtok($tmpString, "/"); // ids

	$superCoppa[1][12+$s][0] = strtok("/");
	$superCoppa[1][12+$s][1] = strtok("/");
	$superCoppa[2][12+$s][0] = strtok("/");
	$superCoppa[2][12+$s][1] = strtok("/");

	$j=0;
	while( 1 )
	{
		$tmpStr = strtok("/");
		if( $tmpStr == '' ) {
			break;
		} else {
			$superCoppa[3][12+$s][$j] = str_replace("\'", "'", $tmpStr);
		}

		$j++;
	}
}

for($f=0; $f<4; $f++)
{
	$tmpString = trim(fgets($handle));

	$id[16+$f] = strtok($tmpString, "/"); // ids

	$superCoppa[1][16+$f][0] = strtok("/");
	$superCoppa[1][16+$f][1] = strtok("/");
	$superCoppa[2][16+$f][0] = strtok("/");
	$superCoppa[2][16+$f][1] = strtok("/");

	$j=0;
	while( 1 )
	{
		$tmpStr = strtok("/");
		if( $tmpStr == '' ) {
			break;
		} else {
			$superCoppa[3][16+$f][$j] = str_replace("\'", "'", $tmpStr);
		}

		$j++;
	}
}

fclose($handle);
?>