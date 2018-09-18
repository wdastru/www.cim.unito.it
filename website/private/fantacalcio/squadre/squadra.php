<?php
//include "../dBug.php";
session_start();

//print_r($_POST);

$relocate_string = "../";
require_once $relocate_string . 'logger.php';

$numeroToAdjective[1]='primo';
$numeroToAdjective[2]='secondo';
$numeroToAdjective[3]='terzo';
$numeroToAdjective[4]='quarto';
$numeroToAdjective[5]='quinto';
$numeroToAdjective[6]='sesto';
$numeroToAdjective[7]='settimo';
$numeroToAdjective[8]='ottavo';

require $relocate_string . "777/setupSquadre.inc.php";

$_SESSION['nomefiletxt']=$_GET['squadra'] . ".txt";
$_SESSION['nomesquadra']=$_GET['squadra'] . "";
$_SESSION['nomefilephp']=$_GET['squadra'] . ".php";
if (! file_exists ( $relocate_string . '777/gazFiles.inc.php' ) || 
	! file_exists ( $relocate_string . '777/filesGazzetta/listaGazFiles.txt' )) {
		
	require $relocate_string . 'include/createGazFilesAndList.inc.php';
}

require $relocate_string . "777/gazFiles.inc.php";
require $relocate_string . "squadre.inc";

$filenameStats="..//777//statistics.txt";
require $relocate_string . "statisticsAllPlayerRead.php"; // legge statistics.txt; popola $allPlayerStats
require $relocate_string . "lastGazFileAllPlayerRead.php"; // legge l'ultimo file gazzetta; popola $allPlayers

if ( isset($_POST['changeTeam']) ) // modifica rosa da modify.php
{
	if ($_POST['changeTeam']=="true")
	{
		if (md5($_POST['Password']) != $ADMIN[$_GET['squadra']] )
		header('Location: ../errors/error.php?error=wrongPass&returnFromError=../private/modify.php?squadra=' . $_GET['squadra']);
	}
}

if ( isset($_POST['changePassword']) )
{
	if ($_POST['changePassword']=="true")
	{
		require($relocate_string . "private/checkPassword.php");
		$_POST['changePassword']="false";
	}
}

$fileSquadreXml = $_GET['squadra'] . ".xml";
if(file_exists($fileSquadreXml))
{
    
    $xml=simplexml_load_file($fileSquadreXml)/* or die("Error: Cannot create object")*/;
    //print_r($xml);
	$imgSquadra = $xml->squadra->img;
	
} else {
	echo "Il file " . $fileSquadreXml . " non esiste!";
	exit();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="../documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="../chromejs/chrome.js"></script>
	<script type="text/javascript" src="../version.js"></script>
	<!-- InstanceBeginEditable name="additional css" -->
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->
	<script type="text/javascript"
		src="../documentPreProcessor.php?document=javascript.js&type=javascript"></script>
	<!-- InstanceEndEditable -->
	
	<!-- InstanceBeginEditable name="jQuery" -->
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>	

</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->
		<table class="mainSquadre">
			<colgroup span="3">
				<col width="270" />
				<col width="270" />
				<col width="270" />
			</colgroup>
			<tr>
				<td class="Nome"><?php echo $longName[$_GET['squadra']]; ?></td>
				<td class="Immagine"><img
					src="<?php echo $relocate_string; ?>figure/<?php echo $imgSquadra; ?>"
					height="150" alt="<?php echo $imgSquadra; ?>" /></td>
				<td class="Storico"><table>
						<tr>
							<td><?php
							
							foreach($xml->squadra->storico->children() as $stagione) {
							    echo "<div class='stagione'>
							            <span class='stagione'>"
                                    . $stagione['year'] .
                                    " : </span>";
                                echo "<span class='"
                                . $numeroToAdjective[(int)$stagione->posizione] . "'>&nbsp;"
                                . $stagione->posizione . "&deg;&nbsp;</span>";
                                
                                if (isset( $stagione->coppa ))
                                    echo "<span class='coppe'>&nbsp" . $stagione->coppa . "&nbsp;</span>";
                                
                                    if (isset( $stagione->supercoppa ))
                                        echo "<span class='coppe'>&nbsp" . $stagione->supercoppa . "&nbsp;</span>";
                                    
                                    if (isset( $stagione->champions ))
                                        echo "<span class='coppe'>&nbsp" . $stagione->champions . "&nbsp;</span>";
                                    
                                    if (isset( $stagione->vecchio_nome ))
                                        echo "<span class='oldName'>&nbsp" . $stagione->vecchio_nome . "&nbsp;</span>";
                                                
                                echo "</div>";
							}
                                    
							?></td>
						</tr>
					</table></td>
			</tr>
		</table>
		<br />
		<?php 
			require $relocate_string . 'playersInTeamsReader.php'; // definito giocatore[squadra:8][index:25]
			require $relocate_string . 'playersRepeated.php'; // controlla la presenza di giocatori ripetuti in più squadre 
		?>
		<br />
	<?php include($relocate_string . "squadre/generatoreSquadra.php"); ?>
		<!-- InstanceEndEditable -->
	</div>
	<?php include $relocate_string . "include/footer.inc.php"?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
