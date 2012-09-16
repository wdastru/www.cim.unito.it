<?php
//include "../dBug.php";
session_start();

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

if( ! file_exists($relocate_string . '777/gazFiles.inc.php') ) {
	require $relocate_string . 'updateGazFiles.inc.php';
}

require $relocate_string . "777/gazFiles.inc.php";
require $relocate_string . "squadre.inc";

$filenameStats="..//777//statistics.txt";
require $relocate_string . "statisticsAllPlayerRead.php";
require $relocate_string . "lastGazFileAllPlayerRead.php";

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
	//read the contents into a string
	$str = file_get_contents($fileSquadreXml,"rb");
	$myparser = xml_parser_create();
	xml_parse_into_struct($myparser, $str, $text);
	xml_parser_free($myparser);
	//print_r($text);

	$imgSquadra = $text[4]['value'];

	$j=0;
	for ($i=0;$i<count($text);$i++)
	{
		if ($text[$i]['tag'] == 'CAMPIONATO' && $text[$i]['type'] == 'open')
		{
			if ($text[$i+1]['tag'] == 'STAGIONE')
			$storico[$j]['stagione'] = $text[$i+1]['value'];
			if ($text[$i+3]['tag'] == 'POSIZIONE')
			$storico[$j]['posizione'] = $text[$i+3]['value'];
			if ($text[$i+5]['tag'] == 'VECCHIO_NOME')
			$storico[$j]['vecchio_nome'] = $text[$i+5]['value'];
			if ($text[$i+7]['tag'] == 'COPPA' || $text[$i+7]['tag'] == 'SUPERCOPPA' || $text[$i+7]['tag'] == 'CHAMPIONS')
			$storico[$j]['coppa'] = $text[$i+7]['value'];
			if ($text[$i+9]['tag'] == 'COPPA' || $text[$i+9]['tag'] == 'SUPERCOPPA' || $text[$i+9]['tag'] == 'CHAMPIONS')
			$storico[$j]['supercoppa'] = $text[$i+9]['value'];
			if ($text[$i+11]['tag'] == 'COPPA' || $text[$i+11]['tag'] == 'SUPERCOPPA' || $text[$i+11]['tag'] == 'CHAMPIONS')
			$storico[$j]['champions'] = $text[$i+11]['value'];

			$j++;
		}
	}
	//show the contents
	//print_r($storico);
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
<title>Fantacalcio NMR 2011/12</title>
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
							for ($i=0; $i<count($storico); $i++)
							{
								echo "
						<div class='stagione'>
						  <span class='stagione'>" . $storico[$i]['stagione'] . " :</span>
						  <span class='" . $numeroToAdjective[$storico[$i]['posizione']] . "'>&nbsp;" . $storico[$i]['posizione'] . "&deg;&nbsp;</span>";

						  if ( isset($storico[$i]['coppa']) && $storico[$i]['coppa'] != '' )
						  echo "<span class='coppe'>&nbsp;" . $storico[$i]['coppa'] . "&nbsp;</span>";
						  if ( isset($storico[$i]['supercoppa']) && $storico[$i]['supercoppa'] != '' )
						  echo "<span class='coppe'>&nbsp;" . $storico[$i]['supercoppa'] . "&nbsp;</span>";
						  if ( isset($storico[$i]['champions']) && $storico[$i]['champions'] != '' )
						  echo "<span class='coppe'>&nbsp;" . $storico[$i]['champions'] . "&nbsp;</span>";
						  if ( isset($storico[$i]['vecchio_nome']) && $storico[$i]['vecchio_nome'] != '' )
						  echo "<span class='oldName'>&nbsp;" . $storico[$i]['vecchio_nome'] . "&nbsp;</span>";
						  	
						  echo "</div>";
							}
							?></td>
						</tr>
					</table></td>
			</tr>
		</table>
		<br /> <br />
	<?php include($relocate_string . "squadre/generatoreSquadra.php"); ?>
		<!-- InstanceEndEditable -->
	</div>
	<?php include $relocate_string . "include/footer.inc.php"?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
