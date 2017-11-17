<?php
session_start();
$relocate_string = "../";

require $relocate_string . 'recursiveChmod.inc.php';
@recursiveChmod($relocate_string . '777/offerte/');

if (isset($_POST['toCancel']))
{
	$toCancel = $_SESSION['toCancel'] = $_POST['toCancel'];

	if($toCancel != "" && file_exists($relocate_string . '777/offerte/' . $toCancel))
	{
		copy($relocate_string . '777/offerte/' . $toCancel, $relocate_string . '777/offerte/archive/' . $toCancel);
		unlink($relocate_string . '777/offerte/' . $toCancel);
	}
}
@recursiveChmod($relocate_string . '777/offerte/');
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
	<script type="text/javascript" src="../dragdrop/ajax.js"></script>
	<script type="text/javascript"
		src="../documentPreProcessor.php?document=javascript.js&type=javascript"></script>
	<!-- InstanceEndEditable -->

</head>
<!-- <body onresize="Count();"> -->
<body>

<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>

	<!-- InstanceBeginEditable name="hiddenBox" -->
	<div id='hiddenPasswordBox' style='visibility: hidden'>
		<br /> <br />
		<form method='post' id='passwordForm' action=''>
			<fieldset class='noBorder'>
				<span id='passwordBoxMainTitle'>PASSWORD</span><br /> <br /> <br />
				<input type='password' id='passwordField' name="PasswordOffer"
					value='' autocomplete='off' onmouseup='enablePasswordButton();'
					onkeyup='enablePasswordButton();' /> <br /> <br /> <br /> <input
					type='button' id='passwordButton' value='Unlock'
					onclick='sendUnlockForm();' disabled="disabled" /> <input
					type='button' value='Close' onclick='hidePasswordBox();' /> <input
					type='hidden' id='offerFile' name='offerFile' value='' />
			</fieldset>
		</form>
	</div>
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->
		<h1 class="title">ELENCO OFFERTE</h1>
		<!-- LISTA FILES -->
		<p>Offerte presentate:</p>
		<input class="button" type="submit" onclick="window.location.href='archivioOfferte.php';" value="Archivio">
		<br />
		<div id='listaOfferte'>
			
		<?php
		if(!file_exists("..//777//offerte//"))
		{
			@mkdir("..//777//offerte//");
		}

		if(!file_exists("..//777//offerte//archive//"))
		{
			@mkdir("..//777//offerte//archive//");
		}

		$dir = "..//777//offerte//*.txt";
		$result = glob($dir);
		
		@recursiveChmod($relocate_string . '777/offerte/');

		if (count($result) > 0) {
			for($i=0; $i<count($result); $i++)
			{
				strtok($result[$i],"//");
				strtok("//");
				strtok("//");
				$filename[$i]=strtok("//");
				strtok($filename[$i],"_");
				strtok("_");
				$day[$i]=strtok("-");
				$time[$i]=strtok("_.");
				$timeStamp[$i]=$day[$i].$time[$i]; 
			}
			
			array_multisort($timeStamp, SORT_NUMERIC, SORT_DESC, $result, $filename);
		}
		
		for($i=0; $i<count($result); $i++)
		{
			echo "<div id='row'>";

			if (strstr($filename[$i], '_locked.txt'))
			{
				echo "<div id='unlock'>
							<input id='unlockBtn' class='button' type='button' value='Sblocca' 
							 	onclick='visualizePasswordBox(\"" . $filename[$i] . "\")'/>
						  </div>";
			} else {
				echo "<div id='view'>
							<input id='viewBtn' class='button' type='button' value='Visualizza' 
								onclick='getJS(\"offerSender.php?file=" . $filename[$i] . "\");'/>
						  </div>";
				echo 	"<div id='archive'>
								<form action='offerte.php' method='post'>
									<input type='hidden' name='toCancel' value='" . $filename[$i] . "'/>
									<input id='archiveBtn' class='button' type='submit' value='Archivia'/>
								</form>
						  	</div>";
			}

			echo" <div id='nomeFile'>&nbsp;&nbsp;" . $filename[$i] . "
				</div>
				</div>";	
		}
		?>
		</div>
		<!-- LISTA FILES -->
		<br /> <br /> <br />

		<!-- InstanceEndEditable -->
	</div>
	
	<?php include $relocate_string . 'include/footer.inc.php'?>
	
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
