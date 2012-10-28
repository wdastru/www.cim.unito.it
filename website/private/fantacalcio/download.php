<?php
$relocate_string = "./";
require_once $relocate_string . 'include/updateGazFiles.inc.php';
require_once $relocate_string . '777/gazFiles.inc.php';
require $relocate_string . '777/setupSquadre.inc.php';
require_once ($relocate_string . "logger.php");
//include "dBug.php";

$numeriRomani = array( "", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII", "XIII", "XIV", "XV", "XVI", "XVII", "XVIII", "XIX", "XX", "XXI", "XXII", "XXIII", "XXIV", "XXV", "XXVI", "XXVII", "XXVIII", "XXIX", "XXX", "XXXI", "XXXII", "XXXIII", "XXXIV", "XXXV", "XXXVI", "XXXVII", "XXXVIII", "XL" );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="chromejs/chrome.js"></script>
	<script type="text/javascript" src="version.js"></script>
	<!-- InstanceBeginEditable name="jQuery" -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $relocate_string; ?>menu_jquery.js"></script>		
	<!-- InstanceBeginEditable name="additional css" -->
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->

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
		<h1 class="title">FANTA CALCOLATORE GUI</h1>
		<p style="color: #333333; font-size: 14px">per Windows
			98(?)/2000(?)/XP/Vista/7</p>
		<br />

		<table id='downloads' style="margin: auto; padding: 10px;">
			<tr><td><img class='new' src='figure/new.gif'></td><td class='left'><a href="download/FantaCalcGui_v3.3.1_Setup.exe">FantaCalcGui v3.3.1 (installer)</a></td></tr>
            <tr><td><img class='new' src='figure/new.gif'></td><td class='left'><a href="download/FantaCalcGui_v3.3.1.zip">FantaCalcGui v3.3.1.zip</a></td></tr>
			<tr><td></td><td class='left'><a href="download/FantaCalcGui_v3.3.0_Setup.exe">FantaCalcGui v3.3.0 (installer)</a></td></tr>
            <tr><td></td><td class='left'><a href="download/FantaCalcGui_v3.3.0.zip">FantaCalcGui v3.3.0.zip</a></td></tr>
            <tr><td></td><td class='left'><a href="download/FantaCalcGui_v3.2.1_Setup.exe">FantaCalcGui v3.2.1 (installer)</a></td></tr>
            <tr><td></td><td class='left'><a href="download/FantaCalcGui_v3.2.1.zip">FantaCalcGui v3.2.1.zip</a></td></tr>
        </table>


		<br /> <br />
		<h1 class="title">FILES GAZZETTA</h1>
		<br /> <input class='button' type="submit"
			onclick="window.location.href='uploader.php';" value="Upload" /> <br />
		<br />
				
		<?php

		$nPreCampionato = 2;
		if ($nPreCampionato!=0)
		{
			//MySingleton::writeToLog('$nPreCampionato = ' . $nPreCampionato, $relocate_string . "777/logs/download.log");

			echo "<p class='center' style='color:FF6600'> PRECAMPIONATO </p>
				<table id='download_pre'>
					<tr>";
			for($i=0; $i<$nPreCampionato; $i++)
			{
				echo "<td class='link' style='width:" . 100/$nPreCampionato . "%'>";
				if(isset($fileGaz[$i])) {
					//MySingleton::writeToLog('$fileGaz[' . $i . '] = "' . $fileGaz[$i] . '"', $relocate_string . "777/logs/download.logs");
					if($fileGaz[$i] != "")
					echo "<a href='777/filesGazzetta/" . $fileGaz[$i] . "'>" . $numeriRomani[$i+1] . "</a></td>";
					else
					echo "</td>";
				} else {
					//MySingleton::writeToLog($i . " is not set", $relocate_string . "777/logs/download.log");
					;
				}
			}
			echo "		</tr>
				</table>";
		}

		?>
		<p class="center" style="color: FF6600">COPPA</p>
		<table id="download_coppa">
			<tr class="tableline">
				<th>Quarti</th>
				<th>Semifinali</th>
				<th>Finali</th>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td class="link"><?php if(isset($fileGaz[0 + $nPreCampionato])) echo "<a href='777/filesGazzetta/" . $fileGaz[0 + $nPreCampionato] . "'>andata</a>"; ?>
				</td>
				<td class="link"><?php if(isset($fileGaz[16 + $nPreCampionato])) echo "<a href='777/filesGazzetta/" . $fileGaz[16 + $nPreCampionato] . "'>andata</a>"; ?>
				</td>
				<td class="link"><?php if(isset($fileGaz[32 + $nPreCampionato])) echo "<a href='777/filesGazzetta/" . $fileGaz[32 + $nPreCampionato] . "'>coppa</a>"; ?>
				</td>
			</tr>
			<tr>
				<td class="link"><?php if(isset($fileGaz[8 + $nPreCampionato])) echo "<a href='777/filesGazzetta/" . $fileGaz[8 + $nPreCampionato] . "'>ritorno</a>"; ?>
				</td>
				<td class="link"><?php if(isset($fileGaz[24 + $nPreCampionato])) echo "<a href='777/filesGazzetta/" . $fileGaz[24 + $nPreCampionato] . "'>ritorno</a>"; ?>
				</td>
				<td class="link"><?php if(isset($fileGaz[33 + $nPreCampionato])) echo "<a href='777/filesGazzetta/" . $fileGaz[33 + $nPreCampionato] . "'>supercoppa</a>"; ?>
				</td>
			</tr>
		</table>
		<p class="center" style="color: FF6600">CAMPIONATO</p>
		<table id="download_campionato">
			<tr class="tableline">
				<th>Andata 1</th>
				<th>Ritorno 1</th>
				<th>Andata 2</th>
				<th>Ritorno 2</th>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<?php
			for ($i = 1; $i < 8; $i++)
			{
				echo "<tr>\n";
				for ($j = 0; $j < 4; $j++)
				{
					if(isset($fileGaz[ $i + 8 * $j + $nPreCampionato ]))
					echo "<td class='link'><a href='777/filesGazzetta/" . $fileGaz[ $i + 8 * $j + $nPreCampionato ] . "'>" . $numeriRomani[ $i + 7 * $j ] . " giornata</a></td>\n";
					else
					echo "<td class='link'>&nbsp;</td>\n";
				}
				echo "</tr>\n";
			}
			?>
		</table>
		<br />
		<!-- InstanceEndEditable -->
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	<?php include $relocate_string . 'include/footer.inc.php'?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
