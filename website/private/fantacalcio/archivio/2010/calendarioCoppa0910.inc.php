<?php
/*	COPPA 	array 3D:		turno				[0-2]
							partita	del turno	[0-3]
							casa/fuori			[0-1]
							*/
				
$turno[0]="I&deg; TURNO";
$turno[1]="II&deg; TURNO";
$turno[2]="III&deg; TURNO";
	
/* I° turno */
$partita[0][0][0]=$aCoppa;	$partita[0][0][1]=$bCoppa;
$partita[0][1][0]=$cCoppa;	$partita[0][1][1]=$dCoppa;
$partita[0][2][0]=$eCoppa;	$partita[0][2][1]=$fCoppa;
$partita[0][3][0]=$gCoppa;	$partita[0][3][1]=$hCoppa;
/* II°  turno */                
$partita[1][0][0]=$aCoppa;	$partita[1][0][1]=$cCoppa;
$partita[1][1][0]=$bCoppa;	$partita[1][1][1]=$dCoppa;
$partita[1][2][0]=$eCoppa;	$partita[1][2][1]=$gCoppa;
$partita[1][3][0]=$fCoppa;	$partita[1][3][1]=$hCoppa;
/* III ° turno  */	               
$partita[2][0][0]=$aCoppa;	$partita[2][0][1]=$dCoppa;
$partita[2][1][0]=$bCoppa;	$partita[2][1][1]=$cCoppa;
$partita[2][2][0]=$eCoppa;	$partita[2][2][1]=$hCoppa;
$partita[2][3][0]=$fCoppa;	$partita[2][3][1]=$gCoppa;
/* semifinali */                
$partita[3][0][0] = '';	$partita[3][0][1] = '';
$partita[3][1][0] = '';	$partita[3][1][1] = '';
$partita[3][2][0] = '';	$partita[3][2][1] = '';
$partita[3][3][0] = '';	$partita[3][3][1] = '';
/* finali  */	               
$partita[4][0][0] = '';	$partita[4][0][1] = '';
$partita[4][1][0] = '';	$partita[4][1][1] = '';
$partita[4][2][0] = '';	$partita[4][2][1] = '';
$partita[4][3][0] = '';	$partita[4][3][1] = '';
?>                            