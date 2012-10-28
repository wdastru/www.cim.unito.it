<?php
$relocate_string = "../../";

require_once ($relocate_string . "logger.php");
include("squadre1112.inc.php");
include("calendarioCoppa1112.inc.php");
//require_once ("dBug.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="<?php echo $relocate_string; ?>favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="<?php echo $relocate_string; ?>chromejs/chrome.js"></script>
	<script type="text/javascript" src="<?php echo $relocate_string; ?>version.js"></script>
	<!-- InstanceBeginEditable name="jQuery" -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $relocate_string; ?>menu_jquery.js"></script>		
	<!-- InstanceBeginEditable name="additional css" -->
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->
	<script type="text/javascript"
		src="<?php echo $relocate_string; ?>documentPreProcessor.php?document=archivio/2012/javascript2012.js&type=javascript"></script>
	<script type="text/javascript"
		src="<?php echo $relocate_string; ?>documentPreProcessor.php?document=archivio/2012/coppa1112.js&type=javascript"></script>
	<!-- InstanceEndEditable -->

</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<div id='hiddenBox' style='visibility: hidden'>
		<span id='squadra1'>squadra1</span><span id='hiddenBoxHyphen'> - </span><span
			id='squadra2'>squadra2</span> <br /> <br />
		<form method='post' id='formRisultati' action=''>
			<fieldset class='noBorder'>
				<input
					type='button' value='Close this box!' onclick='hideBox();' /> <br /> <br /> Goal Squadra A : <input
					type='text' name='goalA' value='' onkeyup="goals();"
					onmousedown="goals();" /> <br /> <br /> Goal Squadra B : <input
					type='text' name='goalB' value='' onkeyup="goals();"
					onmousedown="goals();" /> <br /> <br /> Punti Squadra A : <input
					type='text' name='puntiA' value='' /> <br /> <br /> Punti Squadra B
				: <input type='text' name='puntiB' value='' /> <br /> <br /> <br />
				Marcatori:<br /> <br />  
					<?php
					for($i=0; $i<20; $i++)
					echo "<div class='goals'><input type='text' name='goals" . $i . "' value=''/></div>";
					?>
				<input type='hidden' name='Id' value='' />
			</fieldset>
		</form>
	</div>
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->
	<?php

	$finali[0] = '1&deg; - 2&deg;';
	$finali[1] = '3&deg; - 4&deg;';
	$finali[2] = '5&deg; - 6&deg;';
	$finali[3] = '7&deg; - 8&deg;';

	// --> leggi file datiCoppa.txt
	$handle = fopen("datiCoppa1112.txt",'r');
	for($q=0; $q<12; $q++) // gruppi
	{
		$tmpString = trim(fgets($handle));

		$id[$q] = strtok($tmpString, "/"); // ids

		$superCoppa[1][$q][0] = strtok("/");
		$superCoppa[1][$q][1] = strtok("/");
		$superCoppa[2][$q][0] = strtok("/");
		$superCoppa[2][$q][1] = strtok("/");

		if ($superCoppa[1][$q][0]=='')
		$superCoppa[1][$q][0]='&nbsp;';
		if ($superCoppa[1][$q][1]=='')
		$superCoppa[1][$q][1]='&nbsp;';
		if ($superCoppa[2][$q][0]=='')
		$superCoppa[2][$q][0]='&nbsp;';
		if ($superCoppa[2][$q][1]=='')
		$superCoppa[2][$q][1]='&nbsp;';

		$j=0;
		while( 1 )
		{
			$tmpStr = strtok("/");
			if( $tmpStr == '' )
			{
				$superCoppa[3][$q][$j] = '';
				break;
			}
			else
			$superCoppa[3][$q][$j] = $tmpStr;

			$j++;
		}
	}

	$q=12;

	for($s=0; $s<4; $s++) // semifinali
	{
		$tmpString = trim(fgets($handle));

		$id[$q+$s] = strtok($tmpString, "/"); // ids

		$superCoppa[1][$q+$s][0] = strtok("/");
		$superCoppa[1][$q+$s][1] = strtok("/");
		$superCoppa[2][$q+$s][0] = strtok("/");
		$superCoppa[2][$q+$s][1] = strtok("/");

		if ($superCoppa[1][$q+$s][0]=='')
		$superCoppa[1][$q+$s][0]='&nbsp;';
		if ($superCoppa[1][$q+$s][1]=='')
		$superCoppa[1][$q+$s][1]='&nbsp;';
		if ($superCoppa[2][$q+$s][0]=='')
		$superCoppa[2][$q+$s][0]='&nbsp;';
		if ($superCoppa[2][$q+$s][1]=='')
		$superCoppa[2][$q+$s][1]='&nbsp;';

		$j=0;
		while( 1 )
		{
			$tmpStr = strtok("/");
			if( $tmpStr == '' )
			{
				$superCoppa[3][$q+$s][$j] = '';
				break;
			}
			else
			$superCoppa[3][$q+$s][$j] = $tmpStr;

			$j++;
		}
	}

	$s=4;

	for($f=0; $f<4; $f++) //finali
	{
		$tmpString = trim(fgets($handle));

		$id[$q+$s+$f] = strtok($tmpString, "/"); // ids

		$superCoppa[1][$q+$s+$f][0] = strtok("/");
		$superCoppa[1][$q+$s+$f][1] = strtok("/");
		$superCoppa[2][$q+$s+$f][0] = strtok("/");
		$superCoppa[2][$q+$s+$f][1] = strtok("/");

		if ($superCoppa[1][$q+$s+$f][0]=='')
		$superCoppa[1][$q+$s+$f][0]='&nbsp;';
		if ($superCoppa[1][$q+$s+$f][1]=='')
		$superCoppa[1][$q+$s+$f][1]='&nbsp;';
		if ($superCoppa[2][$q+$s+$f][0]=='')
		$superCoppa[2][$q+$s+$f][0]='&nbsp;';
		if ($superCoppa[2][$q+$s+$f][1]=='')
		$superCoppa[2][$q+$s+$f][1]='&nbsp;';


		$j=0;
		while( 1 )
		{
			$tmpStr = strtok("/");
			if( $tmpStr == '' )
			{
				$superCoppa[3][$q+$s+$f][$j] = '';
				break;
			}
			else
			$superCoppa[3][$q+$s+$f][$j] = $tmpStr;

			$j++;
		}
	}
	fclose($handle);
	// <-- leggi file datiCoppa.txt
	?>
		<h1 class="title">FANTACOPPA NMR 2011/12</h1>
		<br /> <br />
		<!-- fase a gruppi -->
		<table id='coppa_gruppi'>
		<?php
		for ($i=0; $i<3; $i++) // loop turni fase a gruppi
		{
			echo "
					<tr>
						<td colspan='7' class='center'>" . $turno[$i] . "</td>
					</tr>
					<tr><td colspan='7'>&nbsp;</td></tr>";
			for ($j=0; $j<4; $j++) // loop partite x turno (2 x gruppo A e 2 x gruppo B)
			{
				if ($j==0)
				echo "<tr><td colspan='7'>Gruppo A</td></tr>";
				if ($j==2)
				echo "<tr><td colspan='7'>Gruppo B</td></tr>";

				echo "
					<tr>
						<td class='coppaSinistra' id='" . $id[$i*4+$j] . "_C_nome'>&nbsp;" . $superCoppa[0][$i*4+$j][0] . "</td>
						<td class='void-5'>&nbsp;</td>
						<td class='datiCoppaSinistra' id='" . $id[$i*4+$j] . "_C_dati' onmousedown='showBoxCoppa(\"". $id[$i*4+$j] . "_C_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $superCoppa[1][$i*4+$j][0] . "&nbsp;</div>	
							<div class='PunteggiCoppa'>&nbsp;" . $superCoppa[2][$i*4+$j][0] . "&nbsp;</div>";

				for($k=0; $k<count($superCoppa[3][$i*4+$j]); $k++)
				echo "<div class='hidden'>" . $superCoppa[3][$i*4+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='datiCoppaDestra' id='" . $id[$i*4+$j] . "_F_dati' onmousedown='showBoxCoppa(\"" . $id[$i*4+$j] . "_F_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $superCoppa[1][$i*4+$j][1] . "&nbsp;</div>
							<div class='PunteggiCoppa'>&nbsp;" . $superCoppa[2][$i*4+$j][1] . "&nbsp;</div>";
				for($k=0; $k<count($superCoppa[3][$i*4+$j]); $k++)
				echo "<div class='hidden'>" . $superCoppa[3][$i*4+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='coppaDestra' id='" . $id[$i*4+$j] . "_F_nome'>" . $superCoppa[0][$i*4+$j][1] . "&nbsp;</td>
						<td class='void-5'>&nbsp;</td>
					</tr>";
				if ($j==1 || $j==3)
				echo "<tr><td colspan='7'>&nbsp;</td></tr>";
			}
		}
		?>
		</table>
		<!-- fase a gruppi -->
		<br />
		<!-- classifiche avulse -->
		<div id='avulse_wrapper'>
			<input type='button' value='Mostra/Nascondi classifiche avulse'
				onclick='toggleAvulse();' /> <br /> <br />
			<div id='avulse'>
				<table id='avulsa0' class='classifica'>
					<tr class='tableline'>
					<?php
					$header[0] = "&nbsp;";
					$header[1] = "pt";
					$header[2] = "g";
					$header[3] = "v";
					$header[4] = "n";
					$header[5] = "p";
					$header[6] = "gf";
					$header[7] = "gs";
					$header[8] = "&Delta;g";
					$header[9] = "P";
					$header[10] = "&Delta;P";

					for ($i=0; $i<11; $i++)
					echo "<th>" . $header[$i] . "</th>";

					for ($i=0; $i<8; $i++)
					{
						echo "<tr>";
						for ($j=0; $j<9; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='Dati'>&nbsp;</td>";
						}
						for ($j=9; $j<11; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='DatiWide'>&nbsp;</td>";
						}
						echo "</tr>";
					}
					?>
					</tr>
				</table>
				<br /> <br />
				<table id='avulsa1' class='classifica'>
					<tr class='tableline'>
					<?php
					for ($i=0; $i<11; $i++)
					echo "<th>" . $header[$i] . "</th>";

					for ($i=0; $i<8; $i++)
					{
						echo "<tr>";
						for ($j=0; $j<9; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='Dati'>&nbsp;</td>";
						}
						for ($j=9; $j<11; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='DatiWide'>&nbsp;</td>";
						}
						echo "</tr>";
					}
					?>
					</tr>
				</table>
				<table id='avulsa2' class='classifica'>
					<tr class='tableline'>
					<?php
					$header[0] = "&nbsp;";
					$header[1] = "pt";
					$header[2] = "g";
					$header[3] = "v";
					$header[4] = "n";
					$header[5] = "p";
					$header[6] = "gf";
					$header[7] = "gs";
					$header[8] = "&Delta;g";
					$header[9] = "P";
					$header[10] = "&Delta;P";

					for ($i=0; $i<11; $i++)
					echo "<th>" . $header[$i] . "</th>";

					for ($i=0; $i<8; $i++)
					{
						echo "<tr>";
						for ($j=0; $j<9; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='Dati'>&nbsp;</td>";
						}
						for ($j=9; $j<11; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='DatiWide'>&nbsp;</td>";
						}
						echo "</tr>";
					}
					?>
					</tr>
				</table>
				<br /> <br />
				<table id='avulsa3' class='classifica'>
					<tr class='tableline'>
					<?php
					$header[0] = "&nbsp;";
					$header[1] = "pt";
					$header[2] = "g";
					$header[3] = "v";
					$header[4] = "n";
					$header[5] = "p";
					$header[6] = "gf";
					$header[7] = "gs";
					$header[8] = "&Delta;g";
					$header[9] = "P";
					$header[10] = "&Delta;P";

					for ($i=0; $i<11; $i++)
					echo "<th>" . $header[$i] . "</th>";

					for ($i=0; $i<8; $i++)
					{
						echo "<tr>";
						for ($j=0; $j<9; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='Dati'>&nbsp;</td>";
						}
						for ($j=9; $j<11; $j++)
						{
							if ($j == 0)
							echo "<td class='Squadra'>&nbsp;</td>";
							else
							echo "<td class='DatiWide'>&nbsp;</td>";
						}

						echo "</tr>";
					}
					?>
					</tr>
				</table>
				<br /> <br />
			</div>
		</div>
		<br />
		<!-- classifiche avulse -->

		<!-- classifiche gruppi -->
		<table id='classifica_gruppi'>
			<tr>
				<td class="center">CLASSIFICA GRUPPO A</td>
				</td>
				<td class="center">CLASSIFICA GRUPPO B</td>
				</td>
			</tr>
			<tr>
				<td><table class='classifica' id='classifica_gruppo_1'>
						<tr class='tableline'>
							<th>&nbsp;</th>
							<th>pt</th>
							<th>g</th>
							<th>v</th>
							<th>n</th>
							<th>p</th>
							<th>gf</th>
							<th>gs</th>
							<th>&Delta;g</th>
							<th>P</th>
							<th>&Delta;P</th>
						</tr>
						<?php
						for($i=0; $i<4; $i++)
						{
							echo "    <tr id='posizioneA" . $i . "'>";
							echo "      <td class='Squadra'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati giocate'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='DatiWide'>&nbsp;</td>";
							echo "      <td class='DatiWide'>&nbsp;</td>";
							echo "    </tr>";
						}
						?>
					</table></td>
				<td><table class='classifica' id='classifica_gruppo_2'>
						<tr class='tableline'>
							<th>&nbsp;</th>
							<th>pt</th>
							<th>g</th>
							<th>v</th>
							<th>n</th>
							<th>p</th>
							<th>gf</th>
							<th>gs</th>
							<th>&Delta;g</th>
							<th>P</th>
							<th>&Delta;P</th>
						</tr>
						<?php
						for($i=0; $i<4; $i++)
						{
							echo "    <tr id='posizioneB" . $i . "'>";
							echo "      <td class='Squadra'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati giocate'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='DatiWide'>&nbsp;</td>";
							echo "      <td class='DatiWide'>&nbsp;</td>";
							echo "    </tr>";
						}
						?>
					</table></td>
			</tr>
		</table>
		<!-- classifiche gruppi -->
		<br /> <br />
		<!-- semifinali -->
		<table id='semifinali_coppa'>

		<?php

		echo "<tr>
				<td colspan='7' class='center'>SEMIFINALI</td>
			</tr>
			<tr><td colspan='7'>&nbsp;</td></tr>";

		for ($j=0; $j<4; $j++) // loop partite
		{
			echo "
			<tr id='semifinale" . $j . "'>
				<td class='coppaSinistra' id='" . $id[12+$j] . "_C_nome'>&nbsp;" . $superCoppa[0][12+$j][0] . "</td>
				<td class='void-5'>&nbsp;</td>
				<td class='datiCoppaSinistra' id='" . $id[12+$j] . "_C_dati' onmousedown='showBoxCoppa(\"". $id[12+$j] . "_C_dati\", event);'>
					<div class='RisultatiCoppa'>&nbsp;" . $superCoppa[1][12+$j][0] . "&nbsp;</div>	
					<div class='PunteggiCoppa'>&nbsp;" . $superCoppa[2][12+$j][0] . "&nbsp;</div>";

			for($k=0; $k<count($superCoppa[3][12+$j]); $k++)
			echo "<div class='hidden'>" . $superCoppa[3][12+$j][$k] . "</div>";
			echo "
				</td>
				<td class='void-5'>&nbsp;</td>
				<td class='datiCoppaDestra' id='" . $id[12+$j] . "_F_dati' onmousedown='showBoxCoppa(\"" . $id[12+$j] . "_F_dati\", event);'>
					<div class='RisultatiCoppa'>&nbsp;" . $superCoppa[1][12+$j][1] . "&nbsp;</div>
					<div class='PunteggiCoppa'>&nbsp;" . $superCoppa[2][12+$j][1] . "&nbsp;</div>";
			for($k=0; $k<count($superCoppa[3][12+$j]); $k++)
			echo "<div class='hidden'>" . $superCoppa[3][12+$j][$k] . "</div>";
			echo "
				</td>
				<td class='void-5'>&nbsp;</td>
				<td class='coppaDestra' id='" . $id[12+$j] . "_F_nome'>" . $superCoppa[0][12+$j][1] . "&nbsp;</td>
			</tr>";
		}
		?>

		</table>
		<!-- semifinali -->
		<br />
		<!-- finali -->
		<table id='finali_coppa'>

		<?php
		for ($i=0; $i<1; $i++) // loop finali
		{
			echo "
					<tr>
						<td colspan='7' class='center'>FINALI</td>
					</tr>
					<tr>
						<td colspan='7' class='center'>&nbsp;</td>
					</tr>";
			for ($j=0; $j<4; $j++) // loop partite
			{
				echo "
					<tr>
						<td colspan='7' class='center'>" . $finali[$j] . "</td>
					</tr>
					<tr id='finali" . $j . "'>
						<td class='coppaSinistra' id='" . $id[16+$j] . "_C_nome'>&nbsp;" . $superCoppa[0][16+$j][0] . "</td>
						<td class='void-5'>&nbsp;</td>
						<td class='datiCoppaSinistra' id='" . $id[16+$j] . "_C_dati' onmousedown='showBoxCoppa(\"". $id[16+$j] . "_C_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $superCoppa[1][16+$j][0] . "&nbsp;</div>	
							<div class='PunteggiCoppa'>&nbsp;" . $superCoppa[2][16+$j][0] . "&nbsp;</div>";
					
				for($k=0; $k<count($superCoppa[3][16+$j]); $k++)
				echo "<div class='hidden'>" . $superCoppa[3][16+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='datiCoppaDestra' id='" . $id[16+$j] . "_F_dati' onmousedown='showBoxCoppa(\"" . $id[16+$j] . "_F_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $superCoppa[1][16+$j][1] . "&nbsp;</div>
							<div class='PunteggiCoppa'>&nbsp;" . $superCoppa[2][16+$j][1] . "&nbsp;</div>";
				for($k=0; $k<count($superCoppa[3][16+$j]); $k++)
				echo "<div class='hidden'>" . $superCoppa[3][16+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='coppaDestra' id='" . $id[16+$j] . "_F_nome'>" . $superCoppa[0][16+$j][1] . "&nbsp;</td>
					</tr>
					<tr>
						<td colspan='7' class='center'>&nbsp;</td>
					</tr>";
				/**/
			}
		}
		?>

		</table>
		<!-- finali -->

		<script type="text/javascript">
        	arrangeTeams();
        </script>
		<!-- InstanceEndEditable -->
	</div>

	<?php include $relocate_string . 'include/footer.inc.php'?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
