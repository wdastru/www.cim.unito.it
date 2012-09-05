<?php

if (!ini_get('date.timezone')) {
  ini_set('date.timezone', 'Europe/Rome');
}

$daysInMonth[1]=31;

if ( date("L") )
{
	$daysInMonth[2]=29;
}
else
{
	$daysInMonth[2]=28;
}

$daysInMonth[3]=31;
$daysInMonth[4]=30;
$daysInMonth[5]=31;
$daysInMonth[6]=30;
$daysInMonth[7]=31;
$daysInMonth[8]=31;
$daysInMonth[9]=30;
$daysInMonth[10]=31;
$daysInMonth[11]=30;
$daysInMonth[12]=31;

$nameOfMonth[1]="Gennaio";
$nameOfMonth[2]="Febbraio";
$nameOfMonth[3]="Marzo";
$nameOfMonth[4]="Aprile";
$nameOfMonth[5]="Maggio";
$nameOfMonth[6]="Giugno";
$nameOfMonth[7]="Luglio";
$nameOfMonth[8]="Agosto";
$nameOfMonth[9]="Settembre";
$nameOfMonth[10]="Ottobre";
$nameOfMonth[11]="Novembre";
$nameOfMonth[12]="Dicembre";

$currentMonth = date("n");

$tableDataStructure =  "
	`Date` INT( 11 ),
	`User` VARCHAR( 20 ),
	`Hour` INT( 2 ),
	`StartHour` INT( 2 ),
	`EndHour` INT( 2 ),
	`Note` VARCHAR( 50 ),
	`Color` VARCHAR( 10 )";
	
$DBName = "cimdb";

$nameOfDay[0]="Dom";
$nameOfDay[1]="Lun";
$nameOfDay[2]="Mar";
$nameOfDay[3]="Mer";
$nameOfDay[4]="Gio";
$nameOfDay[5]="Ven";
$nameOfDay[6]="Sab";

$orarioMat="8-14";
$orarioPom="14-20";
$orarioNot="20-8";
$orarioMat400MHz="8-13";
$orarioPom400MHz="15-20";
$orarioFastExp="13-15";

$parity[0] = "Even";
$parity[1] = "Odd";

$month[0] = "ThisMonth";
$month[1] = "NextMonth";

$Color[0] =  "CCCCFF";
$Color[1] =  "CCFFCC";
$Color[2] =  "FFCC99";
$Color[3] =  "FFFFCC";
$Color[4] =  "FFCCFF";
$Color[5] =  "CCFFFF";
$Color[6] =  "9999FF";
$Color[7] =  "99FF99";
$Color[8] =  "FF9933";
$Color[9] =  "FFFF99";
$Color[10] = "FF99FF";
$Color[11] = "99FFFF";
$Color[12] = "FFFFFF";

$gruppoA = "Prenotazioni riservate al gruppo:<br/><span class='users'>Simonetta, Eliana e Dario</span><br/>Lasciare comunque 5 ore disponibili per l'altro gruppo";
$gruppoB = "Prenotazioni riservate al gruppo:<br/><span class='users'>Enzo e Daniela</span><br/>Lasciare comunque 5 ore disponibili per l'altro gruppo";
             
?>