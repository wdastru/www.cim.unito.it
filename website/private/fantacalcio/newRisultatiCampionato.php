<?php
//require_once ("dBug.php");
session_start();
$relocate_string = "./";
require_once ($relocate_string . "logger.php");

$datiCampionatoFile = "777/datiCampionato.txt";
if (!file_exists($datiCampionatoFile)) {
	require $relocate_string . 'createDatiCampionato.php';
}

include $relocate_string . 'readDatiCampionato.php';

$Id=trim($_POST['Id']);
$goalA=trim($_POST['goalA']);
$goalB=trim($_POST['goalB']);
$puntiA=trim($_POST['puntiA']);
$puntiB=trim($_POST['puntiB']);

if ($goalA=='')
{	$goalA='-'; }
if ($goalB=='')
{	$goalB='-'; }
if ($puntiA=='')
{	$puntiA='-'; }
if ($puntiB=='')
{	$puntiB='-'; }

$goals[0]=trim($_POST['goals0']);
$goals[1]=trim($_POST['goals1']);
$goals[2]=trim($_POST['goals2']);
$goals[3]=trim($_POST['goals3']);
$goals[4]=trim($_POST['goals4']);
$goals[5]=trim($_POST['goals5']);
$goals[6]=trim($_POST['goals6']);
$goals[7]=trim($_POST['goals7']);
$goals[8]=trim($_POST['goals8']);
$goals[9]=trim($_POST['goals9']);
$goals[10]=trim($_POST['goals10']);
$goals[11]=trim($_POST['goals11']);
$goals[12]=trim($_POST['goals12']);
$goals[13]=trim($_POST['goals13']);
$goals[14]=trim($_POST['goals14']);
$goals[15]=trim($_POST['goals15']);
$goals[16]=trim($_POST['goals16']);
$goals[17]=trim($_POST['goals17']);
$goals[18]=trim($_POST['goals18']);
$goals[19]=trim($_POST['goals19']);

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

require $relocate_string . 'writeDatiCampionato.php';

header('Location: risultati.php');
?>