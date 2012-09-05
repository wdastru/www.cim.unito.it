<?php
/*	CAMPIONATO 	array 3D:	in casa /fuori casa		[0-1]
							partita	della giornata	[0-3]
							giornata				[0-6]	*/
				
$giornata[0]="I";
$giornata[1]="II";
$giornata[2]="III";
$giornata[3]="IV";
$giornata[4]="V";
$giornata[5]="VI";
$giornata[6]="VII";				
	
/* I giornata */
$partita[0][0][0]=$a;	$partita[1][0][0]=$b;
$partita[0][1][0]=$c;	$partita[1][1][0]=$d;
$partita[0][2][0]=$e;	$partita[1][2][0]=$f;
$partita[0][3][0]=$g;	$partita[1][3][0]=$h;
/* II giornata */
$partita[0][0][1]=$b;	$partita[1][0][1]=$c;
$partita[0][1][1]=$d;	$partita[1][1][1]=$a;
$partita[0][2][1]=$f;	$partita[1][2][1]=$g;
$partita[0][3][1]=$h;	$partita[1][3][1]=$e;
/* III giornata */	
$partita[0][0][2]=$a;	$partita[1][0][2]=$c;
$partita[0][1][2]=$b;	$partita[1][1][2]=$d;
$partita[0][2][2]=$f;	$partita[1][2][2]=$h;
$partita[0][3][2]=$g;	$partita[1][3][2]=$e;
/* IV giornata */	
$partita[0][0][3]=$h;	$partita[1][0][3]=$a;
$partita[0][1][3]=$c;	$partita[1][1][3]=$f;
$partita[0][2][3]=$e;	$partita[1][2][3]=$b;
$partita[0][3][3]=$d;	$partita[1][3][3]=$g;
/* V giornata */
$partita[0][0][4]=$a;	$partita[1][0][4]=$e;
$partita[0][1][4]=$g;	$partita[1][1][4]=$c;
$partita[0][2][4]=$b;	$partita[1][2][4]=$h;
$partita[0][3][4]=$f;	$partita[1][3][4]=$d;
/* VI giornata */
$partita[0][0][5]=$f;	$partita[1][0][5]=$a;
$partita[0][1][5]=$g;	$partita[1][1][5]=$b;
$partita[0][2][5]=$d;	$partita[1][2][5]=$e;
$partita[0][3][5]=$c;	$partita[1][3][5]=$h;
/* VII giornata */
$partita[0][0][6]=$a;	$partita[1][0][6]=$g;
$partita[0][1][6]=$b;	$partita[1][1][6]=$f;
$partita[0][2][6]=$e;	$partita[1][2][6]=$c;
$partita[0][3][6]=$h;	$partita[1][3][6]=$d;
?>                        