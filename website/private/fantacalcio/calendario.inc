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
 * classifica anno precedente:
 * 
 * 1. Dinamo Ciofeca         ==> 'a' (da squadre.inc)
 * 2. Atletico? No Grazie!   ==> 'h' (da squadre.inc)
 * 3. Fedora                 ==> 'f' (da squadre.inc)
 * 4. Real Mentescars        ==> 'b' (da squadre.inc)
 * 5. Lokomotiv Peccorino    ==> 'd' (da squadre.inc)
 * 6. Ij Patelavache         ==> 'c' (da squadre.inc)
 * 7. EPOrediese             ==> 'e' (da squadre.inc)
 * 8. Bradipo                ==> 'g' (da squadre.inc)
 * 
 * * * * * * * * * * * * * * * * * */
 
/*
 * tabella di conversione
 */
$longName['A'] = $longName['e'];
$longName['B'] = $longName['h'];
$longName['C'] = $longName['b'];
$longName['D'] = $longName['c'];
$longName['E'] = $longName['d'];
$longName['F'] = $longName['a'];
$longName['G'] = $longName['f'];
$longName['H'] = $longName['g'];
   
/*
 * $super rispecchia il calendario campionato come da regolamento
 */
$super[0][0][0][0] = $longName['A'];	$super[0][0][0][1] = $longName['B'];
$super[0][0][1][0] = $longName['C'];	$super[0][0][1][1] = $longName['D'];
$super[0][0][2][0] = $longName['E'];	$super[0][0][2][1] = $longName['F'];
$super[0][0][3][0] = $longName['G'];	$super[0][0][3][1] = $longName['H'];

$super[0][1][0][0] = $longName['B'];	$super[0][1][0][1] = $longName['C'];
$super[0][1][1][0] = $longName['D'];	$super[0][1][1][1] = $longName['A'];
$super[0][1][2][0] = $longName['F'];	$super[0][1][2][1] = $longName['G'];
$super[0][1][3][0] = $longName['H'];	$super[0][1][3][1] = $longName['E'];

$super[0][2][0][0] = $longName['A'];	$super[0][2][0][1] = $longName['C'];
$super[0][2][1][0] = $longName['B'];	$super[0][2][1][1] = $longName['D'];
$super[0][2][2][0] = $longName['F'];	$super[0][2][2][1] = $longName['H'];
$super[0][2][3][0] = $longName['G'];	$super[0][2][3][1] = $longName['E'];

$super[0][3][0][0] = $longName['H'];	$super[0][3][0][1] = $longName['A'];
$super[0][3][1][0] = $longName['C'];	$super[0][3][1][1] = $longName['F'];
$super[0][3][2][0] = $longName['E'];	$super[0][3][2][1] = $longName['B'];
$super[0][3][3][0] = $longName['D'];	$super[0][3][3][1] = $longName['G'];

$super[0][4][0][0] = $longName['A'];	$super[0][4][0][1] = $longName['E'];
$super[0][4][1][0] = $longName['G'];	$super[0][4][1][1] = $longName['C'];
$super[0][4][2][0] = $longName['B'];	$super[0][4][2][1] = $longName['H'];
$super[0][4][3][0] = $longName['F'];	$super[0][4][3][1] = $longName['D'];

$super[0][5][0][0] = $longName['F'];	$super[0][5][0][1] = $longName['A'];
$super[0][5][1][0] = $longName['G'];	$super[0][5][1][1] = $longName['B'];
$super[0][5][2][0] = $longName['D'];	$super[0][5][2][1] = $longName['E'];
$super[0][5][3][0] = $longName['C'];	$super[0][5][3][1] = $longName['H'];

$super[0][6][0][0] = $longName['A'];	$super[0][6][0][1] = $longName['G'];
$super[0][6][1][0] = $longName['B'];	$super[0][6][1][1] = $longName['F'];
$super[0][6][2][0] = $longName['E'];	$super[0][6][2][1] = $longName['C'];
$super[0][6][3][0] = $longName['H'];	$super[0][6][3][1] = $longName['D'];

?>                        
