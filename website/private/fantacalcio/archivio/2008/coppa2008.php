<?php 
	$relocate_string = "../../";
	include("squadre0708.inc"); 
	include("calendario0708.inc");
	include("squadreCoppa0708.inc"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../../favicon.ico">
<link rel="stylesheet" type="text/css" href="../../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="../../documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="../../chromejs/chrome.js"></script>
<script type="text/javascript" src="../../version.js"></script>
<!-- InstanceBeginEditable name="additional css" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="additional js" -->
<script type="text/javascript" src="../../documentPreProcessor.php?document=archivio/2008/javascript2008.js&type=javascript"></script>
<!-- InstanceEndEditable -->
</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
        <div id='hiddenBoxOld' style='visibility:hidden'>
          <form method='post' name='formRisultati'>
            <input type='button' value='Close this box!' onmousedown='hideBox();'/>
            <br /><br />
            Goal Squadra A : <input type='text' name='goalA' value='' onkeyup="goalsA(event);"/>
            <br /><br />
            Goal Squadra B : <input type='text' name='goalB' value='' onkeyup="goalsB(event);"/>
            <br /><br />
            Punti Squadra A : <input type='text' name='puntiA' value=''/><br /><br />
            Punti Squadra B : <input type='text' name='puntiB' value=''/><br /><br />
            Marcatori:
            <br /><br />
            <?php
			for($i=0; $i<20; $i++)
				echo "<div class='goals'><input type='text' name='goals" . $i . "' value=''/></div>";
			?>
            <input type='hidden' name='Id' value=''/>
          </form>
        </div>
        <?php
$handle = fopen("datiCoppa0708.txt",'r');

for($q=0; $q<8; $q++) // quarti
{
	$tmpString = trim(fgets($handle));
	
	$id[$q] = strtok($tmpString, "/"); // ids
	
	$risultatiCoppa[$q][0] = strtok("/");
	$risultatiCoppa[$q][1] = strtok("/");
	$punteggioCoppa[$q][0] = strtok("/");
	$punteggioCoppa[$q][1] = strtok("/");

	$j=0;
	while( 1 )
	{
		$tmpStr = strtok("/");
		if( $tmpStr == '' )
			break;
		else
			$marcatori[$q][$j] = $tmpStr;
		
		$j++;
	}
}

$q=8;

for($s=0; $s<8; $s++) // semifinali
{
	$tmpString = trim(fgets($handle));
	
	$id[$q+$s] = strtok($tmpString, "/"); // ids
	
	$risultatiCoppa[$q+$s][0] = strtok("/");
	$risultatiCoppa[$q+$s][1] = strtok("/");
	$punteggioCoppa[$q+$s][0] = strtok("/");
	$punteggioCoppa[$q+$s][1] = strtok("/");

	$j=0;
	while( 1 )
	{
		$tmpStr = strtok("/");
		if( $tmpStr == '' )
			break;
		else
			$marcatori[$q+$s][$j] = $tmpStr;
		
		$j++;
	}
}

$s=8;

for($f=0; $f<4; $f++) //finali
{
	$tmpString = trim(fgets($handle));
	
	$id[$q+$s+$f] = strtok($tmpString, "/"); // ids
	
	$risultatiCoppa[$q+$s+$f][0] = strtok("/");
	$risultatiCoppa[$q+$s+$f][1] = strtok("/");
	$punteggioCoppa[$q+$s+$f][0] = strtok("/");
	$punteggioCoppa[$q+$s+$f][1] = strtok("/");

	$j=0;
	while( 1 )
	{
		$tmpStr = strtok("/");
		if( $tmpStr == '' )
			break;
		else
			$marcatori[$q+$s+$f][$j] = $tmpStr;
		
		$j++;
	}
}
	  
fclose($handle);
?>
        <h1 class="title">FANTACOPPA NMR 2007/08</h1>
        <table class="coppa">
          <tr>
            <td class="void-100">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-100">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-37">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-37">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-100">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-25">&nbsp;</td>
            <td class="void-5">&nbsp;</td>
            <td class="void-100">&nbsp;</td>
          </tr>
          <tr>
            <td class="header">Quarti</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">A</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">R</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">Semifinali</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">A</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">R</td>
            <td class="void-5">&nbsp;</td>
            <td colspan="3" class="header">Finali</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">R</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">A</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">Semifinali</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">R</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">A</td>
            <td class="void-5">&nbsp;</td>
            <td class="header">Quarti</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td class="coppaSinistra" id="quarti0C">&nbsp;<?php echo $squadraCoppa[0][0][0] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti0-0" onmousedown="showBoxCoppa('quarti0-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[0][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[0][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[0]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[0][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti4-0" onmousedown="showBoxCoppa('quarti4-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[4][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[4][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[4]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[4][$i] . "</div>";
				?>
            </td>
            <td colspan="22">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
            <td class="coppaSinistra" id="semi0C">&nbsp;<?php echo $squadraCoppa[0][0][1] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="semi0-0" onmousedown="showBoxCoppa('semi0-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[8][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[8][0] . "&nbsp;</div>";
					for($i=0; $i<count($marcatori[8]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[8][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
            <td id="semi4-0" onmousedown="showBoxCoppa('semi4-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[12][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[12][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[12]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[12][$i] . "</div>";
				?></td>
            <td colspan="16">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td class="coppaSinistra" id='quarti0F'>&nbsp;<?php echo $squadraCoppa[1][0][0] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti0-1" onmousedown="showBoxCoppa('quarti0-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[0][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[0][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[0]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[0][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti4-1" onmousedown="showBoxCoppa('quarti4-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[4][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[4][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[4]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[4][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
            <td colspan="21">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="header">1&deg;- 2&deg;</td>
            <td colspan="7">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti5-0" onmousedown="showBoxCoppa('quarti5-0', event);"><?php 
					echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[5][0] . "&nbsp;</div>";
					echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[5][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[5]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[5][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti1-0" onmousedown="showBoxCoppa('quarti1-0', event);"><?php 
					echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[1][0] . "&nbsp;</div>";
					echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[1][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[1]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[1][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id='quarti1C'>&nbsp;<?php echo $squadraCoppa[0][1][0] ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="coppaFinaliSinistra" id="finali0C">&nbsp;<?php echo $squadraCoppa[0][0][2] ?></td>
            <td>&nbsp;</td>
				<td class='datiCoppaDestra' id="semi5-0" onmousedown="showBoxCoppa('semi5-0', event);"><?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[13][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[13][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[13]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[13][$i] . "</div>";
				?>
            </td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="semi1-0" onmousedown="showBoxCoppa('semi1-0', event);">
				<?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[9][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[9][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[9]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[9][$i] . "</div>";
				?>
            </td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id="semi1C">&nbsp;<?php echo $squadraCoppa[0][1][1] ?>&nbsp;</td>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr>
            <td height="286" colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="22">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti5-1" onmousedown="showBoxCoppa('quarti5-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[5][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[5][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[5]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[5][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti1-1" onmousedown="showBoxCoppa('quarti1-1', event);"><?php
            	echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[1][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[1][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[1]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[1][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id='quarti1F'>&nbsp;<?php echo $squadraCoppa[1][1][0] ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="coppaFinaliSinistra" id="finali0-0" onmousedown="showBoxCoppa('finali0-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[16][0] ."&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[16][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[16]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[16][$i] . "</div>";
				?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>	
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="datiCoppaFinali" id="finali0-1" onmousedown="showBoxCoppa('finali0-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[16][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[16][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[16]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[16][$i] . "</div>";
				?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td class="coppaSinistra" id="quarti2C">&nbsp;<?php echo $squadraCoppa[0][2][0] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti2-0" onmousedown="showBoxCoppa('quarti2-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[2][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[2][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[2]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[2][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti6-0" onmousedown="showBoxCoppa('quarti6-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[6][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[6][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[6]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[6][$i] . "</div>";
			?></td>
            <td colspan="22">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
            <td class="coppaSinistra" id="semi0F">&nbsp;<?php echo $squadraCoppa[1][0][1] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="semi0-1" onmousedown="showBoxCoppa('semi0-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[8][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[8][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[8]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[8][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="semi4-1" onmousedown="showBoxCoppa('semi4-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[12][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[12][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[12]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[12][$i] . "</div>";
				?></td>
            <td>&nbsp;</td>
            <td colspan="3" class="coppaFinaliDestra" id="finali0F"><?php echo $squadraCoppa[1][0][2] ?></td>
            <td colspan="12">&nbsp;</td>
          </tr>
          <tr>
            <td class="coppaSinistra" id="quarti2F">&nbsp;<?php echo $squadraCoppa[1][2][0] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti2-1" onmousedown="showBoxCoppa('quarti2-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[2][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[2][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[2]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[2][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="quarti6-1" onmousedown="showBoxCoppa('quarti6-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[6][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[6][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[6]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[6][$i] . "</div>";
				?></td>
            <td colspan="22">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="22">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti7-0" onmousedown="showBoxCoppa('quarti7-0', event);"><?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[7][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[7][0] . "&nbsp;</div>";
				
				if (isset($marcatori[7]))
					for($i=0; $i<count($marcatori[7]); $i++)
						echo "	  <div class='hidden'>" . $marcatori[7][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti3-0" onmousedown="showBoxCoppa('quarti3-0', event);"><?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[3][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[3][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[3]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[3][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id="quarti3C">&nbsp;<?php echo $squadraCoppa[0][3][0] ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="16">&nbsp;</td>
				<td class='datiCoppaDestra' id="semi5-1" onmousedown="showBoxCoppa('semi5-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[13][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[13][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[13]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[13][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="semi1-1" onmousedown="showBoxCoppa('semi1-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[9][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[9][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[9]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[9][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id="semi1F">&nbsp;<?php echo $squadraCoppa[1][1][1] ?>&nbsp;</td>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="11">&nbsp;</td>
            <td colspan="5" class="header">3&deg;- 4&deg;</td>
            <td colspan="6">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti7-1" onmousedown="showBoxCoppa('quarti7-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[7][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[7][1] . "&nbsp;</div>";
				if (isset($marcatori[7]))
					for($i=0; $i<count($marcatori[7]); $i++)
						echo "	  <div class='hidden'>" . $marcatori[7][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="quarti3-1" onmousedown="showBoxCoppa('quarti3-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[3][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[3][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[3]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[3][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id="quarti3F">&nbsp;<?php echo $squadraCoppa[1][3][0] ?>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="coppaFinaliSinistra" id="finali1C"><?php echo $squadraCoppa[0][1][2] ?></td>
            <td colspan="12">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="datiCoppaFinali" id="finali1-0" onmousedown="showBoxCoppa('finali1-0', event);"><?php 
			echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[17][0] . "&nbsp;</div>";
			echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[17][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[17]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[17][$i] . "</div>";
			?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="datiCoppaFinali" id="finali1-1" onmousedown="showBoxCoppa('finali1-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[17][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[17][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[17]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[17][$i] . "</div>";
				?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="coppaFinaliDestra" id="finali1F"><?php echo $squadraCoppa[1][1][2] ?></td>
            <td colspan="12">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
            <td class="coppaSinistra" id="semi2C">&nbsp;<?php echo $squadraCoppa[0][2][1] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="semi2-0" onmousedown="showBoxCoppa('semi2-0', event);"><?php 
			echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[10][0] . "&nbsp;</div>";
			echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[10][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[10]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[10][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="semi6-0" onmousedown="showBoxCoppa('semi6-0', event);"><?php 
			echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[14][0] . "&nbsp;</div>";
			echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[14][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[14]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[14][$i] . "</div>";
			?></td>
            <td colspan="5" class="header">5&deg;- 6&deg;</td>
            <td colspan="11">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="coppaFinaliSinistra" id="finali2C"><?php echo $squadraCoppa[0][2][2] ?></td>
            <td colspan="12">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="6">&nbsp;</td>
            <td class="coppaSinistra" id="semi2F">&nbsp;<?php echo $squadraCoppa[1][2][1] ?>&nbsp;</td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="semi2-1" onmousedown="showBoxCoppa('semi2-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[10][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[10][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[10]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[10][$i] . "</div>";
				?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaSinistra' id="semi6-1" onmousedown="showBoxCoppa('semi6-1', event);"><?php 
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[14][1] . "&nbsp;</div>";
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[14][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[14]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[14][$i] . "</div>";
				?></td>
            <td colspan="16">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="datiCoppaFinali" id="finali2-0" onmousedown="showBoxCoppa('finali2-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[18][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[18][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[18]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[18][$i] . "</div>";
			?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="datiCoppaFinali" id="finali2-1" onmousedown="showBoxCoppa('finali2-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[18][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[18][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[18]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[18][$i] . "</div>";
				?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="16">&nbsp;</td>
				<td class='datiCoppaDestra' id="semi7-0" onmousedown="showBoxCoppa('semi7-0', event);"><?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[15][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;". $punteggioCoppa[15][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[15]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[15][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="semi3-0" onmousedown="showBoxCoppa('semi3-0', event);"><?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[11][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[11][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[11]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[11][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id="semi3C">&nbsp;<?php echo $squadraCoppa[0][3][1] ?>&nbsp;</td>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="coppaFinaliDestra" id="finali2F">&nbsp;<?php echo $squadraCoppa[1][2][2] ?>&nbsp;</td>
            <td colspan="12">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="16">&nbsp;</td>
				<td class='datiCoppaDestra' id="semi7-1" onmousedown="showBoxCoppa('semi7-1', event);"><?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[15][1] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[15][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[15]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[15][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
				<td class='datiCoppaDestra' id="semi3-1" onmousedown="showBoxCoppa('semi3-1', event);"><?php 
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[11][1] . "&nbsp;</div>";
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[11][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[11]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[11][$i] . "</div>";
			?></td>
            <td class="void-5">&nbsp;</td>
            <td class="coppaDestra" id="semi3F">&nbsp;<?php echo $squadraCoppa[1][3][1] ?>&nbsp;</td>
            <td colspan="6">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="11">&nbsp;</td>
            <td colspan="5" class="header">7&deg;- 8&deg;</td>
            <td colspan="11">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="coppaFinaliSinistra" id="finali3C"><?php echo $squadraCoppa[0][3][2] ?></td>
            <td colspan="12">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="datiCoppaFinali" id="finali3-0" onmousedown="showBoxCoppa('finali3-0', event);"><?php 
				echo "<div class='Risultati Sinistra'>&nbsp;" . $risultatiCoppa[19][0] . "&nbsp;</div>";
				echo "<div class='Punteggi Sinistra'>&nbsp;" . $punteggioCoppa[19][0] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[19]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[19][$i] . "</div>";
			?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="13">&nbsp;</td>
				<td class="datiCoppaFinali" id="finali3-1" onmousedown="showBoxCoppa('finali3-1', event);"><?php 
				echo "<div class='Punteggi Destra'>&nbsp;" . $punteggioCoppa[19][1] . "&nbsp;</div>";
				echo "<div class='Risultati Destra'>&nbsp;" . $risultatiCoppa[19][1] . "&nbsp;</div>";
				for($i=0; $i<count($marcatori[19]); $i++)
					echo "	  <div class='hidden'>" . $marcatori[19][$i] . "</div>";
				?></td>
            <td colspan="13">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="12">&nbsp;</td>
            <td colspan="3" class="coppaFinaliDestra" id="finali3F"><?php echo $squadraCoppa[1][3][2] ?>&nbsp;</td>
            <td colspan="12">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="27">&nbsp;</td>
          </tr>
        </table>
        <p class="center">&sup1; ai rigori </p>
        
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

 <script language="javascript">
        	arrangeTeams();
        </script>
        
        <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
