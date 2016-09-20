<?php
session_start();
$relocate_string = "../";
require $relocate_string . 'recursiveChmod.inc.php';
require $relocate_string . 'include/removeUnwantedChars.inc.php';
require $relocate_string . '777/setupSquadre.inc.php';

//echo $ADMIN['admin']." ";
//echo md5($_POST['Password'])." ";
//echo $_POST['Password']." ";
//exit();

if ( !( md5($_POST['Password']) != $ADMIN[$_GET['squadra']] || md5($_POST['Password']) != $ADMIN['admin'] ) )
{
	if (isset($_POST['returnFromError'])) {
		header('Location: ../errors/error.php?error=wrongPass&returnFromError=' . $_POST['returnFromError']);
		exit(); 
	} else if (isset($_POST['returnFromErrorTipo'])) {
		header('Location: ../errors/error.php?error=wrongPass&returnFromError=' . $_POST['returnFromErrorTipo']);
		exit(); 
	}
}

$squadraSubmitted = $_POST['squadraSubmitted'];
$squadraSubmittedTipo = $_POST['squadraSubmittedTipo'];

$path=$relocate_string . "777//formazioni//";

if ($squadraSubmitted=='true') {
	if ($_POST['spec'] != '') {
	    $_POST['spec'] = removeUnwantedChars($_POST['spec']);
		$file2save = $path . $_SESSION['Squadra'] . "_" . $_POST['spec'] . ".txt";
    } else {
		$file2save = $path . $_SESSION['Squadra'] . "_" . date("Ymd-His",time()) . ".txt";
    }
} else if ($squadraSubmittedTipo=='true') {
	copy($path . $_SESSION['Squadra'] . ".txt", $path . $_SESSION['Squadra'] . "_tipo_valida_fino_" . date("Ymd-His",time()) . ".txt");
	$file2save = $path . $_SESSION['Squadra'] . ".txt";
}

$handle=fopen($file2save, 'w');

$ruolo[0] = 3;
$ruolo[1] = 8;
$ruolo[2] = 8;
$ruolo[3] = 6;

$player[0] = $_POST['player0'];
$player[1] = $_POST['player1'];
$player[2] = $_POST['player2'];
$player[3] = $_POST['player3'];
$player[4] = $_POST['player4'];
$player[5] = $_POST['player5'];
$player[6] = $_POST['player6'];
$player[7] = $_POST['player7'];
$player[8] = $_POST['player8'];
$player[9] = $_POST['player9'];
$player[10] = $_POST['player10'];
$player[11] = $_POST['player11'];
$player[12] = $_POST['player12'];
$player[13] = $_POST['player13'];
$player[14] = $_POST['player14'];
$player[15] = $_POST['player15'];
$player[16] = $_POST['player16'];
$player[17] = $_POST['player17'];
$player[18] = $_POST['player18'];
$player[19] = $_POST['player19'];
$player[20] = $_POST['player20'];
$player[21] = $_POST['player21'];
$player[22] = $_POST['player22'];
$player[23] = $_POST['player23'];
$player[24] = $_POST['player24'];

fwrite($handle, $_POST['Modulo'] . "\n");
fwrite($handle, $_POST['Titolari'] . "\n");
fwrite($handle, $_POST['Riserve'] . "\n");	

$t=0;
for ($i=0; $i<4; $i++)
{
	for ($j=0; $j<$ruolo[$i]; $j++)
	{
		$player[$t] = str_replace('\\', '', $player[$t]);
		fwrite($handle, $player[$t] . "\n");
		$t++;
	}
}

fwrite($handle, $_POST['Capitale'] . "\n");
fwrite($handle, $_POST['Telefono'] . "\n");
fwrite($handle, date("D d M Y - H:i:s",time()) . "\n");

fclose($handle);

require ($relocate_string . "include//updateListaFormazioni.inc.php");

$squadraSubmitted=='false';
$squadraSubmittedTipo=='false';

//@recursiveChmod($relocate_string . '777/');

$where = "Location: ../dragdrop/dragdrop.php?squadra=" . $_SESSION['Squadra'];
header($where);
?>