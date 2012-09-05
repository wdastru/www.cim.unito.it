<?php
require_once('squadre.inc.php');

//require_once 'dBug.php';
/*
 * superCoppa :		dati					(5)
 * 						[0] --> squadre
 * 						[1] --> risultato
 * 						[2] --> punteggio
 * 						[3] --> marcatori
 *	 				partita (12q + 4s + 4f)	(20)
 * 					in casa /fuori casa		(2)
 */

$turno[0] = "I&deg; TURNO";
$turno[1] = "II&deg; TURNO";
$turno[2] = "III&deg; TURNO";

/*
 * 'a' = 'atletico';       
 * 'b' = 'eporediese';     
 * 'c' = 'ciofeca';        
 * 'd' = 'patelavache';    
 * 'e' = 'bradipo';        
 * 'f' = 'lokomotiv';      
 * 'g' = 'fedora';
 * 'h' = 'real';
 *         
 */

$aCoppa = $longName['b'];
$bCoppa = $longName['e'];
$cCoppa = $longName['d'];
$dCoppa = $longName['c'];
$eCoppa = $longName['h'];
$fCoppa = $longName['a'];
$gCoppa = $longName['f'];
$hCoppa = $longName['g'];

$superCoppa = array();
array_push($superCoppa, array());
array_push($superCoppa, array());
array_push($superCoppa, array());

/* I� turno */
$superCoppa[0][0][0] = $aCoppa;	$superCoppa[0][0][1] = $bCoppa;
$superCoppa[0][1][0] = $cCoppa;	$superCoppa[0][1][1] = $dCoppa;
$superCoppa[0][2][0] = $eCoppa;	$superCoppa[0][2][1] = $fCoppa;
$superCoppa[0][3][0] = $gCoppa;	$superCoppa[0][3][1] = $hCoppa;
/* II�  turno */
$superCoppa[0][4][0] = $aCoppa;	$superCoppa[0][4][1] = $cCoppa;
$superCoppa[0][5][0] = $bCoppa;	$superCoppa[0][5][1] = $dCoppa;
$superCoppa[0][6][0] = $eCoppa;	$superCoppa[0][6][1] = $gCoppa;
$superCoppa[0][7][0] = $fCoppa;	$superCoppa[0][7][1] = $hCoppa;
/* III � turno  */
$superCoppa[0][8][0] = $aCoppa;  $superCoppa[0][8][1] = $dCoppa;
$superCoppa[0][9][0] = $bCoppa;  $superCoppa[0][9][1] = $cCoppa;
$superCoppa[0][10][0] = $eCoppa; $superCoppa[0][10][1] = $hCoppa;
$superCoppa[0][11][0] = $fCoppa; $superCoppa[0][11][1] = $gCoppa;
/* semifinali */
$superCoppa[0][12][0] = '';	$superCoppa[0][12][1] = '';
$superCoppa[0][13][0] = '';	$superCoppa[0][13][1] = '';
$superCoppa[0][14][0] = '';	$superCoppa[0][14][1] = '';
$superCoppa[0][15][0] = '';	$superCoppa[0][15][1] = '';
/* finali  */                                
$superCoppa[0][16][0] = '';	$superCoppa[0][16][1] = '';
$superCoppa[0][17][0] = '';	$superCoppa[0][17][1] = '';
$superCoppa[0][18][0] = '';	$superCoppa[0][18][1] = '';
$superCoppa[0][19][0] = '';	$superCoppa[0][19][1] = '';

?>