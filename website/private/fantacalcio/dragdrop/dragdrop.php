<?php
session_start();
//include '../dBug.php';
$relocate_string = "../";

$toCancel = '';

if (isset($_GET['squadra'])) {
	$Squadra = $_SESSION['Squadra'] = $_GET['squadra'];
} else {
	$Squadra = '';
}

if (isset($_POST['File'])) {
	$File = $_SESSION['File'] = $_POST['File'];
}

// --> ARCHIVE FILE
if (isset($_POST['toCancel'])) {
	$toCancel = $_SESSION['toCancel'] = $_POST['toCancel'];

	if ($toCancel != "" && file_exists("../777/formazioni/" . $toCancel)) {
		if (!file_exists("..//777//formazioni//archive//"))
			@mkdir("..//777//formazioni//archive//");

		copy("..//777//formazioni//" . $toCancel, "..//777//formazioni//archive//" . $toCancel);
		unlink("..//777//formazioni//" . $toCancel);
		require ($relocate_string . "include//updateListaFormazioni.inc.php");
	}
}
// <-- ARCHIVE FILE

// --> elenco formazioni squadra
$dir = "..//777//formazioni//" . $_SESSION['nomesquadra'] . "*.*";
$formazioniSquadra = glob($dir);
// <-- elenco formazioni squadra

// --> file formazioni piu' recente
$i = 0;
foreach ($formazioniSquadra as $file) {
	$lines = file($file);
	$line = $lines[count($lines) - 1];
	$formazioniSquadraDate[$i] = strtotime(str_replace("-", "", $line));
	
	//echo "$line - $formazioniSquadraDate[$i] - " . date("D d M Y - H:i:s", $formazioniSquadraDate[$i]) . "<br>";
	//$formazioniSquadraDate[$i] = trim($lines[count($lines) - 1]);
	$i++;
}

array_multisort($formazioniSquadraDate, SORT_NUMERIC, SORT_DESC, $formazioniSquadra);

$path_parts = pathinfo($formazioniSquadra[0]);
$lastFormazBasename = $path_parts['basename'];
// <-- file formazioni piu' recente

if (isset($_POST['File'])) {
	$File = $_SESSION['File'] = $_POST['File'];
} else {
	$File = $lastFormazBasename;
}

include ($relocate_string . "squadre.inc");
include ($relocate_string . "moduli.inc.php");

$ruolo[0] = 3;
$ruolo[1] = 8;
$ruolo[2] = 8;
$ruolo[3] = 6;

$titolari = array();
$riserve = array();

if ($File == $toCancel) {
	$filename = "../777/formazioni/" . $lastFormazBasename;
} else if ($File != "") {
	$filename = "../777/formazioni/" . $File;
} else {
	$filename = "../777/formazioni/" . $Squadra . ".txt";
	// default
}

$filename_parts = pathinfo($filename);
$filenameBasename = $filename_parts['basename'];

if (!file_exists($filename))// se il file della squadra non esiste lo crea
{
	@mkdir("..//777//formazioni//");
	$handle = fopen($filename, 'w');
	if ($handle) {
		fwrite($handle, "4 - 4 - 2\n");
		fwrite($handle, "1 - 4 - 4 - 2\n");
		fwrite($handle, "1 - 2 - 2 - 2\n");
		for ($i = 0; $i < 25; $i++)
			fwrite($handle, "?\n");
		fwrite($handle, "\n");
		fwrite($handle, "\n");
		fwrite($handle, date("D d M Y - H:i:s", time()) . "\n");
		fclose($handle);
	} else {
		echo "dragdrop.php : il file " . $filename . " non &eacute; apribile o esistente!";
	}
}

$handle = fopen($filename, 'r');

$modulo = trim(fgets($handle));

array_push($titolari, trim(fgets($handle)));
array_push($titolari, substr($titolari[0], 0, 1));
array_push($titolari, substr($titolari[0], 4, 1));
array_push($titolari, substr($titolari[0], 8, 1));
array_push($titolari, substr($titolari[0], 12, 1));

array_push($riserve, trim(fgets($handle)));
array_push($riserve, substr($riserve[0], 0, 1));
array_push($riserve, substr($riserve[0], 4, 1));
array_push($riserve, substr($riserve[0], 8, 1));
array_push($riserve, substr($riserve[0], 12, 1));

for ($j = 0; $j < 4; $j++) {
	for ($i = 0; $i < $ruolo[$j]; $i++) {
		$giocatore[$i][$j] = trim(fgets($handle));
		// nome
	}
}

$capitale = trim(fgets($handle));
$telefono = trim(fgets($handle));
$lastModified = trim(fgets($handle));

fclose($handle);
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
		<link rel="stylesheet" type="text/css"
		href="../documentPreProcessor.php?document=dragdrop/dragdrop.css&type=css" />
		<!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="additional js" -->
		<script type="text/javascript"
		src="../documentPreProcessor.php?document=dragdrop/dragdrop.js&type=javascript"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript"
		src="../documentPreProcessor.php?document=javascript.js&type=javascript"></script>
		<!-- InstanceEndEditable -->
	</head>
	<!-- <body onresize="Count();"> -->
	<body>
		<?php
		require $relocate_string . 'include/title.inc.php';
		?>

		<?php
		require $relocate_string . 'include/menu.inc.php';
		?>
		<!-- InstanceBeginEditable name="hiddenBox" -->
		<!-- InstanceEndEditable -->
		<div id="main">
			<!-- InstanceBeginEditable name="body" -->
			<?php
			echo "<h1 class=\"title\">" . $longName[$Squadra] . "</h1>";

			echo "<p>$filenameBasename <br/><span class='data'>($lastModified)</span></p><br/>";
			?>
			<!--  BEGIN CONTAINER DIV  -->
			<div id='container'>
				<!-- BEGIN SCELTA MODULI -->
				<div id='sceltaModuli'>
					<table id='modulesChoiceTable'>
						<tr>
							<?php
							$moduleChoice = array("5 - 3 - 2", "5 - 4 - 1", "4 - 4 - 2", "4 - 3 - 3", "4 - 5 - 1", "3 - 5 - 2", "3 - 4 - 3");
							$defaultModule = $modulo;
							for ($i = 0; $i < 7; $i++) {
								if ($moduleChoice[$i] != $defaultModule)
									echo "<td class='moduloBox' id='" . $moduleChoice[$i] . "' onclick='toggleModule(\"" . $moduleChoice[$i] . "\");'>" . $moduleChoice[$i] . "</td>";
								else
									echo "<td class='moduloBox defaultModule' id='" . $moduleChoice[$i] . "' onclick='toggleModule(\"" . $moduleChoice[$i] . "\");'>" . $moduleChoice[$i] . "</td>";

							}
							echo "<td id='chosenModule'>" . $defaultModule . "</td>";
							?>
						</tr>
					</table>
				</div>
				<!-- END SCELTA MODULI -->
        <?php require $relocate_string . "include/cognome.inc.php"; ?>
				<fieldset id='Demo4'>
					<div style="text-align: center;">
						<!-- BEGIN CAMPO -->
						<div id='campo'>
							<div dropobj="0" class="DragContainer" id="PorTitolari"
							overclass="OverDragContainer" style="clear: both">
								<div id="counterPorTitolari">
									<?php echo $titolari[1];?>
								</div>
								<?php
								for ($i = 0; $i < $titolari[1]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][0]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="DifTitolari"
							overclass="OverDragContainer" style="clear: both">
								<div id="counterDifTitolari">
									<?php echo $titolari[2];?>
								</div>
								<?php
								for ($i = 0; $i < $titolari[2]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][1]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="CenTitolari"
							overclass="OverDragContainer" style="clear: both">
								<div id="counterCenTitolari">
									<?php echo $titolari[3];?>
								</div>
								<?php
								for ($i = 0; $i < $titolari[3]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][2]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="AttTitolari"
							overclass="OverDragContainer" style="clear: both">
								<div id="counterAttTitolari">
									<?php echo $titolari[4];?>
								</div>
								<?php
								for ($i = 0; $i < $titolari[4]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][3]) . "</div>";
								}
								?>
							</div>
						</div>
						<!-- END CAMPO -->
						<div style="clear: both"></div>
						<!-- BEGIN PANCHINA -->
						<div id='bench'>
							<div dropobj="0" class="DragContainer" id="PorRiserve"
							overclass="OverDragContainer">
								<div id="counterPorRiserve">
									<?php echo $riserve[1];?>
								</div>
								<?php
								for ($i = $titolari[1]; $i < $titolari[1] + $riserve[1]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][0]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="DifRiserve"
							overclass="OverDragContainer">
								<div id="counterDifRiserve">
									<?php echo $riserve[2];?>
								</div>
								<?php
								for ($i = $titolari[2]; $i < $titolari[2] + $riserve[2]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][1]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="CenRiserve"
							overclass="OverDragContainer">
								<div id="counterCenRiserve">
									<?php echo $riserve[3];?>
								</div>
								<?php
								for ($i = $titolari[3]; $i < $titolari[3] + $riserve[3]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][2]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="AttRiserve"
							overclass="OverDragContainer">
								<div id="counterAttRiserve">
									<?php echo $riserve[4];?>
								</div>
								<?php
								for ($i = $titolari[4]; $i < $titolari[4] + $riserve[4]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][3]) . "</div>";
								}
								?>
							</div>
						</div>
						<!-- END PANCHINA -->
						<div style="clear: both"></div>
						<!-- BEGIN TRIBUNA -->
						<div id='tribuna'>
							<div dropobj="0" class="DragContainer" id="PorTribuna"
							overclass="OverDragContainer">
								<div id="counterPorTribuna">
									1
								</div>
								<?php
								for ($i = $titolari[1] + $riserve[1]; $i < $ruolo[0]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][0]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="DifTribuna"
							overclass="OverDragContainer">
								<div id="counterDifTribuna">
									<?php echo $ruolo[1] - $titolari[2] - 2;?>
								</div>
								<?php
								for ($i = $titolari[2] + $riserve[2]; $i < $ruolo[1]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][1]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="CenTribuna"
							overclass="OverDragContainer">
								<div id="counterCenTribuna">
									<?php echo $ruolo[2] - $titolari[3] - 2; ?>
								</div>
								<?php
								for ($i = $titolari[3] + $riserve[3]; $i < $ruolo[2]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][2]) . "</div>";
								}
								?>
							</div>
							<div dropobj="0" class="DragContainer" id="AttTribuna"
							overclass="OverDragContainer">
								<div id="counterAttTribuna">
									<?php echo $ruolo[3] - $titolari[4] - 2;?>
								</div>
								<?php
								for ($i = $titolari[4] + $riserve[4]; $i < $ruolo[3]; $i++) {
									echo "<div dragobj='0' class='DragBox' id='Item1' overclass='OverDragBox' dragclass='DragDragBox'>" . cognome($giocatore[$i][3]) . "</div>";
								}
								?>
							</div>
						</div>
						<!-- END TRIBUNA -->
					</div>
				</fieldset>
			</div>
			<br />
			<table id='gestFormazSend'>
				<!-- DATI FORMAZIONE -->
				<tr>
					<td>
					<form id="saveData" method="post" action="savedata.php?squadra=<?php echo $Squadra;?>">
						<input type="hidden" name="squadraSubmitted" value="true" />
						<?php
						echo "
							<input type='hidden' id='modulo' name='Modulo' value='" . $modulo . "' />
							<input type='hidden' id='titolari' name='Titolari' value='" . $titolari[0] . "' />
							<input type='hidden' id='riserve' name='Riserve' value='" . $riserve[0] . "' />
							";
						$t = 0;
						for ($i = 0; $i < 4; $i++)// loop sui ruoli
						{
							for ($j = 0; $j < $ruolo[$i]; $j++)// loop sui giocatori del ruolo
							{
								echo "<input type='hidden' value='' name='player" . $t . "' />\n";
								$t++;
							}
						}

						echo "
							<input type='hidden' id='capitale' name='Capitale' value='" . $capitale . "' />
							<input type='hidden' id='telefono' name='Telefono' value='" . $telefono . "' />
							";
						?>
						<input type="hidden" id="file2save" name="file2save" value="<?php echo $Squadra;?>" />
						<input type="hidden" id="file" name="File" value="<?php echo $File;?>" />
						<span>password :</span>
						<input type="password" id="password" name="Password" value="" autocomplete="off" />
						<span>id (facoltativo):</span>
						<input type="text" id="spec" name="spec" value="" />
						<input type="hidden" id="returnFromError" name="returnFromError" value="" />
						<input class="button" type="button" value="Salva dati formazione" onclick="saveData('<?php echo $Squadra;?>');" />
					</form></td>
				</tr>
				<!-- DATI FORMAZIONE -->
				<!-- DATI FORMAZIONE TIPO-->
				<tr>
					<td>
					<form id="saveDataTipo" method="post" action="savedata.php?squadra=<?php echo $Squadra;?>">
						<input type="hidden" name="squadraSubmittedTipo" value="true" />
						<?php
						echo "
							<input type='hidden' id='moduloTipo' name='Modulo' value='" . $modulo . "' />
							<input type='hidden' id='titolariTipo' name='Titolari' value='" . $titolari[0] . "' />
							<input type='hidden' id='riserveTipo' name='Riserve' value='" . $riserve[0] . "' />
							";
						$t = 0;
						for ($i = 0; $i < 4; $i++)// loop sui ruoli
						{
							for ($j = 0; $j < $ruolo[$i]; $j++)// loop sui giocatori del ruolo
							{
								echo "<input type='hidden' value='' name='player" . $t . "' />\n";
								$t++;
							}
						}

						echo "
							<input type='hidden' id='capitale' name='Capitale' value='" . $capitale . "' />
							<input type='hidden' id='telefono' name='Telefono' value='" . $telefono . "' />
							";
						?>
						<input type="hidden" id="file2save" name="file2saveTipo" value="<?php echo $Squadra;?>" />
						<input type="hidden" id="file" name="File" value="<?php echo $File;?>" />
						<input type="hidden" id="returnFromErrorTipo" name="returnFromErrorTipo" value="" />
						<span>password :</span>
						<input type="password" id="passwordTipo" name="Password" value="" autocomplete="off" />
						<input class="button" type="button" value="Salva formazione tipo" onclick="saveDataTipo('<?php echo $Squadra;?>');" />
					</form></td>
				</tr>
				<!-- DATI FORMAZIONE TIPO-->
			</table>
			<br />
			<br />
			<!-- LISTA FILES -->
			<p>
				Lista files disponibili:
			</p>
			<div id='listaFilesDisp'>
				<?php
				for ($i = 0; $i < count($formazioniSquadra); $i++) {
					echo "<div id='row'>";
					strtok($formazioniSquadra[$i], "//");
					strtok("//");
					strtok("//");
					$out = strtok("//");

					if ($out != ($_SESSION['nomesquadra'] . ".txt")) {
						echo "<div id='archive'>
								<form action='dragdrop.php?squadra=" . $_SESSION['nomesquadra'] . "' method='post'>
								<input type='hidden' name='toCancel' value='" . $out . "'/>
								<input type='hidden' name='File' value='" . $out . "'/>
								<input class='button' type='submit' value='Archivia'/>
								</form>
							  </div>";
					} else {
						echo "<div id='archive'>&nbsp;</div>";
					}

					echo "<div id='view'>
							<input class='button' type='button' value='Visualizza' onclick='getJS(\"textFileBuilder.php?file=" . $out . "\")'/>
						  </div>
						  <div id='usa'>
							<form action='dragdrop.php?squadra=" . $_SESSION['nomesquadra'] . "' method='post'>
							<input class='button' type='submit' value='Usa'/>
							<input type='hidden' name='File' value='" . $out . "'/>
							</form>
						  </div>
						  <div id='nomeFile'>&nbsp;&nbsp;" . $out . "&nbsp;&nbsp;<span class='data'>(" . date("D d M Y - H:i:s", $formazioniSquadraDate[$i]) . ")</span>
							</div>
						  </div>";
				}
				?>
			</div>
			<!-- LISTA FILES -->
			<br />
			<br />
			<br />
			<!--  END CONTAINER DIV  -->
			<script type="text/javascript">
				Count();

			</script>
			<!-- InstanceEndEditable -->
		</div>
		<?php include $relocate_string . 'include/footer.inc.php'
		?>
		<!-- dragHelper for dragdrop.php -->
		<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
	</body>
	<!-- InstanceEnd -->
</html>
