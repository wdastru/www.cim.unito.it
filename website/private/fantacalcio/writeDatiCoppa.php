<?php
require_once $relocate_string . 'include/backup.inc.php';
require_once $relocate_string . 'include/cleanAccentsAndApostrophes.inc.php';
backup($relocate_string . $datiCoppaFile);

$handle = fopen($datiCoppaFile,'w');

if($handle)
{
	for($q=0; $q<12; $q++) // quarti
	{
		if( strtok($Id,"_") == ( 'gruppi' . $q ) ) // gruppi0 ... gruppi11
		{
			$superCoppa[1][$q][0] = trim($goalA);
			$superCoppa[1][$q][1] = trim($goalB);
			$superCoppa[2][$q][0] = trim($puntiA);
			$superCoppa[2][$q][1] = trim($puntiB);

			for($j=0; $j<20; $j++){
				$superCoppa[3][$q][$j] = strtoupper(trim($goals[$j]));
			}
		}

		if( $q != 0 ) {
			fwrite($handle, "\n");
		}

		fwrite($handle,  $id[$q] . '/' . $superCoppa[1][$q][0] . '/' . $superCoppa[1][$q][1] . '/' . $superCoppa[2][$q][0] . '/' . $superCoppa[2][$q][1] . '/');

		$i=0;
		while( 1 ) // marcatori
		{
			if( $superCoppa[3][$q][$i] == '' ) {
				break;
			} else {
				fwrite($handle, cleanAccentsAndApostrophes($superCoppa[3][$q][$i]) . '/');
			}
			$i++;
		}
	}

	fwrite($handle, "\n");

	for($s=0; $s<4; $s++) // semifinali
	{
		if( strtok($Id,"_") == ( 'semi' . $s ) ) // semi0 ... semi3
		{
			$superCoppa[1][12+$s][0] = $goalA;
			$superCoppa[1][12+$s][1] = $goalB;
			$superCoppa[2][12+$s][0] = $puntiA;
			$superCoppa[2][12+$s][1] = $puntiB;

			for($j=0; $j<20; $j++){
				$superCoppa[3][12+$s][$j] = strtoupper(trim($goals[$j]));
			}
		}

		if( $s != 0 ) {
			fwrite($handle, "\n");
		}

		fwrite($handle,  $id[12+$s] . '/' . $superCoppa[1][12+$s][0] . '/' . $superCoppa[1][12+$s][1] . '/' . $superCoppa[2][12+$s][0] . '/' . $superCoppa[2][12+$s][1] . '/');

		$i=0;
		while( 1 )
		{
			if (isset($superCoppa[3][12+$s][$i])) {

				if( $superCoppa[3][12+$s][$i] == '' ) {
					break;
				} else {
					fwrite($handle, cleanAccentsAndApostrophes($superCoppa[3][12+$s][$i]) . '/');
				}
				$i++;
			} else {
				break;
			}
		}
	}

	fwrite($handle, "\n");

	for($f=0; $f<4; $f++) // finali
	{
		if( strtok($Id,"_") == ( 'finali' . $f ) ) // finali0 ... finali3
		{
			$superCoppa[1][16+$f][0] = $goalA;
			$superCoppa[1][16+$f][1] = $goalB;
			$superCoppa[2][16+$f][0] = $puntiA;
			$superCoppa[2][16+$f][1] = $puntiB;

			for($j=0; $j<20; $j++){
				$superCoppa[3][16+$f][$j] = strtoupper(trim($goals[$j]));
			}
		}

		if( $f != 0 ) {
			fwrite($handle, "\n");
		}

		fwrite($handle,  $id[16+$f] . '/' . $superCoppa[1][16+$f][0] . '/' . $superCoppa[1][16+$f][1] . '/' . $superCoppa[2][16+$f][0] . '/' . $superCoppa[2][16+$f][1] . '/');

		$i=0;
		while( 1 )
		{
			if (isset($superCoppa[3][16+$f][$i])) {
				if( $superCoppa[3][16+$f][$i] == '' ) {
					break;
				} else {
					fwrite($handle, cleanAccentsAndApostrophes($superCoppa[3][16+$f][$i]) . '/');
				}
				$i++;
			} else {
				break;
			}
		}
	}
} else {
	echo "Il file datiCoppa.txt non &eacute; apribile o esistente!";
}

fwrite($handle, "\n");
fclose($handle);
?>