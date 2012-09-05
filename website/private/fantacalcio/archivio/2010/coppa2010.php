<?php
$relocate_string = "../../";
include("squadre0910.inc.php");
include("calendarioCoppa0910.inc.php");
//include "../../dBug.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../../favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="../../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="../../documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="../../chromejs/chrome.js"></script>
	<script type="text/javascript" src="../../version.js"></script>
	<!-- InstanceBeginEditable name="additional css" -->
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->
	<script type="text/javascript"
		src="../../documentPreProcessor.php?document=archivio/2010/javascript2010.js&type=javascript"></script>
	<script type="text/javascript"
		src="../../documentPreProcessor.php?document=archivio/2010/coppa2010.js&type=javascript"></script>
	<!-- InstanceEndEditable -->

</head>
<!-- <body onresize="Count();"> -->
<body>
	<?php require $relocate_string . 'include/title.inc.php'; ?>
	<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<div id='hiddenBox' style='visibility: hidden'>
		<span id='squadra1'>squadra1</span><span id='hiddenBoxHyphen'> - </span><span
			id='squadra2'>squadra2</span> <br /> <br />
		<form method='post' id='formRisultati' action=''>
			<fieldset class='noBorder'>
				<input type='button' value='Close this box!' onclick='hideBox();' />
				<br /> <br /> Goal Squadra A : <input type='text' name='goalA'
					value='' onkeyup="goals();" onmousedown="goals();" /> <br /> <br />
				Goal Squadra B : <input type='text' name='goalB' value=''
					onkeyup="goals();" onmousedown="goals();" /> <br /> <br /> Punti
				Squadra A : <input type='text' name='puntiA' value='' /> <br /> <br />
				Punti Squadra B : <input type='text' name='puntiB' value='' /> <br />
				<br /> <br />
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

	// --> leggi file datiCoppa0910.txt
	$handle = fopen("datiCoppa0910.txt",'r');
	for($q=0; $q<12; $q++) // gruppi
	{
		$tmpString = trim(fgets($handle));

		$id[$q] = strtok($tmpString, "/"); // ids

		$risultatiCoppa[$q][0] = strtok("/");
		$risultatiCoppa[$q][1] = strtok("/");
		$punteggioCoppa[$q][0] = strtok("/");
		$punteggioCoppa[$q][1] = strtok("/");

		if ($risultatiCoppa[$q][0]=='')
		$risultatiCoppa[$q][0]='&nbsp;';
		if ($risultatiCoppa[$q][1]=='')
		$risultatiCoppa[$q][1]='&nbsp;';
		if ($punteggioCoppa[$q][0]=='')
		$punteggioCoppa[$q][0]='&nbsp;';
		if ($punteggioCoppa[$q][1]=='')
		$punteggioCoppa[$q][1]='&nbsp;';

		$j=0;
		while( 1 )
		{
			$tmpStr = strtok("/");
			if( $tmpStr == '' )
			{
				$marcatori[$q][$j] = '';
				break;
			}
			else
			$marcatori[$q][$j] = $tmpStr;

			$j++;
		}
	}

	$q=12;

	for($s=0; $s<4; $s++) // semifinali
	{
		$tmpString = trim(fgets($handle));

		$id[$q+$s] = strtok($tmpString, "/"); // ids

		$risultatiCoppa[$q+$s][0] = strtok("/");
		$risultatiCoppa[$q+$s][1] = strtok("/");
		$punteggioCoppa[$q+$s][0] = strtok("/");
		$punteggioCoppa[$q+$s][1] = strtok("/");

		if ($risultatiCoppa[$q+$s][0]=='')
		$risultatiCoppa[$q+$s][0]='&nbsp;';
		if ($risultatiCoppa[$q+$s][1]=='')
		$risultatiCoppa[$q+$s][1]='&nbsp;';
		if ($punteggioCoppa[$q+$s][0]=='')
		$punteggioCoppa[$q+$s][0]='&nbsp;';
		if ($punteggioCoppa[$q+$s][1]=='')
		$punteggioCoppa[$q+$s][1]='&nbsp;';

		$j=0;
		while( 1 )
		{
			$tmpStr = strtok("/");
			if( $tmpStr == '' )
			{
				$marcatori[$q+$s][$j] = '';
				break;
			}
			else
			$marcatori[$q+$s][$j] = $tmpStr;

			$j++;
		}
	}

	$s=4;

	for($f=0; $f<4; $f++) //finali
	{
		$tmpString = trim(fgets($handle));

		$id[$q+$s+$f] = strtok($tmpString, "/"); // ids

		$risultatiCoppa[$q+$s+$f][0] = strtok("/");
		$risultatiCoppa[$q+$s+$f][1] = strtok("/");
		$punteggioCoppa[$q+$s+$f][0] = strtok("/");
		$punteggioCoppa[$q+$s+$f][1] = strtok("/");

		if ($risultatiCoppa[$q+$s+$f][0]=='')
		$risultatiCoppa[$q+$s+$f][0]='&nbsp;';
		if ($risultatiCoppa[$q+$s+$f][1]=='')
		$risultatiCoppa[$q+$s+$f][1]='&nbsp;';
		if ($punteggioCoppa[$q+$s+$f][0]=='')
		$punteggioCoppa[$q+$s+$f][0]='&nbsp;';
		if ($punteggioCoppa[$q+$s+$f][1]=='')
		$punteggioCoppa[$q+$s+$f][1]='&nbsp;';


		$j=0;
		while( 1 )
		{
			$tmpStr = strtok("/");
			if( $tmpStr == '' )
			{
				$marcatori[$q+$s+$f][$j] = '';
				break;
			}
			else
			$marcatori[$q+$s+$f][$j] = $tmpStr;

			$j++;
		}
	}
	fclose($handle);
	// <-- leggi file datiCoppa0910.txt
	?>
		<h1 class="title">FANTACOPPA NMR 2009/10</h1>
		<br /> <br />
		<!-- fase a gruppi -->
		<table id='coppa_gruppi'>
		<?php
		for ($i=0; $i<3; $i++) // loop turni
		{
			echo "
					<tr>
						<td colspan='7' class='center'>" . $turno[$i] . "</td>
					</tr>
					<tr><td colspan='7'>&nbsp;</td></tr>";
			for ($j=0; $j<4; $j++) // loop partite
			{
				if ($j==0)
				echo "<tr><td colspan='7'>Gruppo A</td></tr>";
				if ($j==2)
				echo "<tr><td colspan='7'>Gruppo B</td></tr>";

				echo "
					<tr>
						<td class='coppaSinistra' id='" . $id[$i*4+$j] . "_C_nome'>&nbsp;" . $partita[$i][$j][0] . "</td>
						<td class='void-5'>&nbsp;</td>
						<td class='pointer' id='" . $id[$i*4+$j] . "_C_dati' onmousedown='showBoxCoppa(\"". $id[$i*4+$j] . "_C_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $risultatiCoppa[$i*4+$j][0] . "&nbsp;</div>	
							<div class='PunteggiCoppa'>&nbsp;" . $punteggioCoppa[$i*4+$j][0] . "&nbsp;</div>";
					
				for($k=0; $k<count($marcatori[$i*4+$j]); $k++)
				echo "<div class='hidden'>" . $marcatori[$i*4+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='pointer' id='" . $id[$i*4+$j] . "_F_dati' onmousedown='showBoxCoppa(\"" . $id[$i*4+$j] . "_F_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $risultatiCoppa[$i*4+$j][1] . "&nbsp;</div>
							<div class='PunteggiCoppa'>&nbsp;" . $punteggioCoppa[$i*4+$j][1] . "&nbsp;</div>";
				for($k=0; $k<count($marcatori[$i*4+$j]); $k++)
				echo "<div class='hidden'>" . $marcatori[$i*4+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='coppaDestra' id='" . $id[$i*4+$j] . "_F_nome'>" . $partita[$i][$j][1] . "&nbsp;</td>
						<td class='void-5'>&nbsp;</td>
					</tr>";
				if ($j==1 || $j==3)
				echo "<tr><td colspan='7'>&nbsp;</td></tr>";
				/**/
			}
		}
		?>
		</table>
		<!-- fase a gruppi -->
		<br /> <br />
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
							<!--<th>punti</th>-->
						</tr>
						<?php
						for($i=0; $i<4; $i++)
						{
							echo "    <tr id='posizioneA" . $i . "'>";
							echo "      <td class='Squadra invlink'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati giocate'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							//echo "      <td class='Dati'>&nbsp;</td>";
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
							<!--<th>punti</th>-->
						</tr>
						<?php
						for($i=0; $i<4; $i++)
						{
							echo "    <tr id='posizioneB" . $i . "'>";
							echo "      <td class='Squadra invlink'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati giocate'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							echo "      <td class='Dati'>&nbsp;</td>";
							//echo "      <td class='Dati'>&nbsp;</td>";
							echo "    </tr>";
						}
						?>
					</table></td>
			</tr>
		</table>
		<!-- classifiche gruppi -->
		<br />
		<!-- semifinali -->
		<table id='semifinali_coppa'>

		<?php
		echo "	<tr>
					<td colspan='7' class='center'>SEMIFINALI</td>
				</tr>
				<tr>
					<td colspan='7'>&nbsp;</td>
				</tr>";

		for ($j=0; $j<4; $j++) // loop partite
		{
			echo "
					<tr id='semifinale" . $j . "'>
						<td class='coppaSinistra' id='" . $id[12+$j] . "_C_nome'>&nbsp;" . $partita[3][$j][0] . "</td>
						<td class='void-5'>&nbsp;</td>
						<td class='pointer' id='" . $id[12+$j] . "_C_dati' onmousedown='showBoxCoppa(\"". $id[12+$j] . "_C_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $risultatiCoppa[12+$j][0] . "&nbsp;</div>	
							<div class='PunteggiCoppa'>&nbsp;" . $punteggioCoppa[12+$j][0] . "&nbsp;</div>";

			for($k=0; $k<count($marcatori[12+$j]); $k++)
			echo "<div class='hidden'>" . $marcatori[12+$j][$k] . "</div>";
			echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='pointer' id='" . $id[12+$j] . "_F_dati' onmousedown='showBoxCoppa(\"" . $id[12+$j] . "_F_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $risultatiCoppa[12+$j][1] . "&nbsp;</div>
							<div class='PunteggiCoppa'>&nbsp;" . $punteggioCoppa[12+$j][1] . "&nbsp;</div>";
			for($k=0; $k<count($marcatori[12+$j]); $k++)
			echo "<div class='hidden'>" . $marcatori[12+$j][$k] . "</div>";
			echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='coppaDestra' id='" . $id[12+$j] . "_F_nome'>" . $partita[3][$j][1] . "&nbsp;</td>
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
						<td class='coppaSinistra' id='" . $id[16+$j] . "_C_nome'>&nbsp;" . $partita[4][$j][0] . "</td>
						<td class='void-5'>&nbsp;</td>
						<td class='pointer' id='" . $id[16+$j] . "_C_dati' onmousedown='showBoxCoppa(\"". $id[16+$j] . "_C_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $risultatiCoppa[16+$j][0] . "&nbsp;</div>	
							<div class='PunteggiCoppa'>&nbsp;" . $punteggioCoppa[16+$j][0] . "&nbsp;</div>";
					
				for($k=0; $k<count($marcatori[16+$j]); $k++)
				echo "<div class='hidden'>" . $marcatori[16+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='pointer' id='" . $id[16+$j] . "_F_dati' onmousedown='showBoxCoppa(\"" . $id[16+$j] . "_F_dati\", event);'>
							<div class='RisultatiCoppa'>&nbsp;" . $risultatiCoppa[16+$j][1] . "&nbsp;</div>
							<div class='PunteggiCoppa'>&nbsp;" . $punteggioCoppa[16+$j][1] . "&nbsp;</div>";
				for($k=0; $k<count($marcatori[16+$j]); $k++)
				echo "<div class='hidden'>" . $marcatori[16+$j][$k] . "</div>";
				echo "
						</td>
						<td class='void-5'>&nbsp;</td>
						<td class='coppaDestra' id='" . $id[16+$j] . "_F_nome'>" . $partita[4][$j][1] . "&nbsp;</td>
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

		<?php
		$_POST['Id']='';
		$_POST['goalA']='';
		$_POST['goalB']='';
		$_POST['puntiA']='';
		$_POST['puntiB']='';
		$_POST['goals1']='';
		$_POST['goals2']='';
		$_POST['goals3']='';
		$_POST['goals4']='';
		$_POST['goals5']='';
		$_POST['goals6']='';
		$_POST['goals7']='';
		$_POST['goals8']='';
		$_POST['goals9']='';
		$_POST['goals10']='';
		$_POST['goals11']='';
		$_POST['goals12']='';
		$_POST['goals13']='';
		$_POST['goals14']='';
		$_POST['goals15']='';
		$_POST['goals16']='';
		$_POST['goals17']='';
		$_POST['goals18']='';
		$_POST['goals19']='';
		$_POST['goals20']='';

		$Id='';
		$goalA='';
		$goalB='';
		$puntiA='';
		$puntiB='';
		$goals[0]='';
		$goals[1]='';
		$goals[2]='';
		$goals[3]='';
		$goals[4]='';
		$goals[5]='';
		$goals[6]='';
		$goals[7]='';
		$goals[8]='';
		$goals[9]='';
		$goals[10]='';
		$goals[11]='';
		$goals[12]='';
		$goals[13]='';
		$goals[14]='';
		$goals[15]='';
		$goals[16]='';
		$goals[17]='';
		$goals[18]='';
		$goals[19]='';

		?>
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
