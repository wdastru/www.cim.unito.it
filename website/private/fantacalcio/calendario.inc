<?php
require_once('squadre.inc');
/*	
 * super [5] :	dati					(4)
 * 					[0] --> squadre
 * 					[1] --> risultato
 * 					[2] --> punteggio
 * 					[3] --> marcatori
 * 				giornata				(7)
 * 				partita	della giornata	(4)
 * 				A&R						(4) (non per dati[0])
 * 				in casa /fuori casa		(2)
 */
				
$giornata[0]="I";
$giornata[1]="II";
$giornata[2]="III";
$giornata[3]="IV";
$giornata[4]="V";
$giornata[5]="VI";
$giornata[6]="VII";		

$super = array();
array_push($super, array());
array_push($super, array());
array_push($super, array());
array_push($super, array());

/*
 * 'a' = 'ciofeca';     
 * 'b' = 'real';        
 * 'c' = 'patelavache'; 
 * 'd' = 'lokomotiv';   
 * 'e' = 'eporediese';  
 * 'f' = 'fedora';      
 * 'g' = 'bradipo';     
 * 'h' = 'atletico';    
 * 
 * * * * * * * * * * * * */

$super[0][0][0][0] = $longName['a'];	$super[0][0][0][1] = $longName['g'];
$super[0][0][1][0] = $longName['d'];	$super[0][0][1][1] = $longName['h'];
$super[0][0][2][0] = $longName['c'];	$super[0][0][2][1] = $longName['b'];
$super[0][0][3][0] = $longName['f'];	$super[0][0][3][1] = $longName['e'];

$super[0][1][0][0] = $longName['g'];	$super[0][1][0][1] = $longName['d'];
$super[0][1][1][0] = $longName['h'];	$super[0][1][1][1] = $longName['a'];
$super[0][1][2][0] = $longName['b'];	$super[0][1][2][1] = $longName['f'];
$super[0][1][3][0] = $longName['e'];	$super[0][1][3][1] = $longName['c'];

$super[0][2][0][0] = $longName['a'];	$super[0][2][0][1] = $longName['d'];
$super[0][2][1][0] = $longName['g'];	$super[0][2][1][1] = $longName['h'];
$super[0][2][2][0] = $longName['b'];	$super[0][2][2][1] = $longName['e'];
$super[0][2][3][0] = $longName['f'];	$super[0][2][3][1] = $longName['c'];

$super[0][3][0][0] = $longName['e'];	$super[0][3][0][1] = $longName['a'];
$super[0][3][1][0] = $longName['d'];	$super[0][3][1][1] = $longName['b'];
$super[0][3][2][0] = $longName['c'];	$super[0][3][2][1] = $longName['g'];
$super[0][3][3][0] = $longName['h'];	$super[0][3][3][1] = $longName['f'];

$super[0][4][0][0] = $longName['a'];	$super[0][4][0][1] = $longName['c'];
$super[0][4][1][0] = $longName['f'];	$super[0][4][1][1] = $longName['d'];
$super[0][4][2][0] = $longName['g'];	$super[0][4][2][1] = $longName['e'];
$super[0][4][3][0] = $longName['b'];	$super[0][4][3][1] = $longName['h'];

$super[0][5][0][0] = $longName['b'];	$super[0][5][0][1] = $longName['a'];
$super[0][5][1][0] = $longName['f'];	$super[0][5][1][1] = $longName['g'];
$super[0][5][2][0] = $longName['h'];	$super[0][5][2][1] = $longName['c'];
$super[0][5][3][0] = $longName['d'];	$super[0][5][3][1] = $longName['e'];

$super[0][6][0][0] = $longName['a'];	$super[0][6][0][1] = $longName['f'];
$super[0][6][1][0] = $longName['g'];	$super[0][6][1][1] = $longName['b'];
$super[0][6][2][0] = $longName['c'];	$super[0][6][2][1] = $longName['d'];
$super[0][6][3][0] = $longName['e'];	$super[0][6][3][1] = $longName['h'];

?>                        
