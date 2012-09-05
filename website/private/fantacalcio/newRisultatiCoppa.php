<?php
//require_once 'dBug.php';
session_start();

$relocate_string = "./";
require_once ($relocate_string . "logger.php");
$datiCoppaFile = $relocate_string . "777/datiCoppa.txt";

if (!file_exists($datiCoppaFile)) {
	require $relocate_string . 'writeEmptyCoppaFile.php';
}
require $relocate_string . 'readDatiCoppa.php';

$Id=$_POST['Id'];
$goalA=$_POST['goalA'];
$goalB=$_POST['goalB'];
$puntiA=$_POST['puntiA'];
$puntiB=$_POST['puntiB'];

if ($goalA=='')
{	$goalA='-'; }
if ($goalB=='')
{	$goalB='-'; }
if ($puntiA=='')
{	$puntiA='-'; }
if ($puntiB=='')
{	$puntiB='-'; }

$goals[0]=$_POST['goals0'];
$goals[1]=$_POST['goals1'];
$goals[2]=$_POST['goals2'];
$goals[3]=$_POST['goals3'];
$goals[4]=$_POST['goals4'];
$goals[5]=$_POST['goals5'];
$goals[6]=$_POST['goals6'];
$goals[7]=$_POST['goals7'];
$goals[8]=$_POST['goals8'];
$goals[9]=$_POST['goals9'];
$goals[10]=$_POST['goals10'];
$goals[11]=$_POST['goals11'];
$goals[12]=$_POST['goals12'];
$goals[13]=$_POST['goals13'];
$goals[14]=$_POST['goals14'];
$goals[15]=$_POST['goals15'];
$goals[16]=$_POST['goals16'];
$goals[17]=$_POST['goals17'];
$goals[18]=$_POST['goals18'];
$goals[19]=$_POST['goals19'];

// i campi goleador corrispondenti al numero di goal segnati se lasciati vuoti
// vengono riempiti con un -; gli altri vengono svuotati
for($i=0; $i<($goalA+$goalB); $i++)
{
	if($goals[$i]=='')
	$goals[$i]='-';
}

for($i=($goalA+$goalB); $i<count($goals); $i++) {
	$goals[$i]='';
}

require $relocate_string . 'writeDatiCoppa.php';

header('Location: coppa.php');
?>