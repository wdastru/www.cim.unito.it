<?php 
$relocate_string = "../../";
include("squadre0910.inc.php");
include("calendario0910.inc.php");
include("classifica0910.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../../favicon.ico">
<link rel="stylesheet" type="text/css" href="../../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="../../documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="../../chromejs/chrome.js"></script>
<script type="text/javascript" src="../../version.js"></script>
<!-- InstanceBeginEditable name="additional css" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="additional js" -->
<!-- InstanceEndEditable -->
</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
      <h1 class="title">XI Campionato Fantacalcio NMR 2009/10</h1>
        <br>
        <br>
        <h2 class='firstClass'>1&deg; Classificato: </h2>
        <h2 class="title">REAL MENTESCARS</h2>
        <br>

<?php

	$handle = fopen("datiCampionato0910.txt",'r');

	while(!feof($handle))
	{
		for($t=0; $t<4; $t++)	//A&R
		{
			for($k=0; $k<7; $k++)	// giornate
			{
				for($j=0; $j<4; $j++)	// partita
				{
					do{	$tmpString = trim(fgets($handle)); 
					}while(substr($tmpString,0,1)=="#");	// commenti
					$str = strtok($tmpString, "/");
					$risultato[0][$j][$k][$t] = strtok("/");
					$risultato[1][$j][$k][$t] = strtok("/");
					$punteggio[0][$j][$k][$t] = strtok("/");
					$punteggio[1][$j][$k][$t] = strtok("/");
				}
			}
		}
	}
		  
	fclose($handle);

	for($t=0; $t<4; $t++)	//A&R
	{
		for($k=0; $k<7; $k++)	// giornate
		{
			for($j=0; $j<4; $j++)	// partita
			{
				if($risultato[0][$j][$k][$t] != "" && $risultato[1][$j][$k][$t] != "" && $risultato[0][$j][$k][$t] != "-" && $risultato[1][$j][$k][$t] != "-")
				{
					if($risultato[0][$j][$k][$t] == $risultato[1][$j][$k][$t]) // pareggio
					{
						for($squadra=0; $squadra<8; $squadra++)
						{
							if($classifica[$squadra][3] == $partita[0][$j][$k])
							{
								$classifica[$squadra][0] += 1;
								$classifica[$squadra][4] += 1;
								$classifica[$squadra][2] += $risultato[0][$j][$k][$t];
								$classifica[$squadra][5] += $risultato[1][$j][$k][$t];
								$classifica[$squadra][1] += 0;
								$classifica[$squadra][6] += 0;
								$classifica[$squadra][7] += 1;
								$classifica[$squadra][8] += 0;
								$classifica[$squadra][9] += $punteggio[0][$j][$k][$t];
								$classifica[$squadra][10] = $classifica[$squadra][9] / $classifica[$squadra][4];
								$classifica[$squadra][11 + $t] += 1;
								$classifica[$squadra][15 + $t] = round((100*$classifica[$squadra][11 + $t] / 21),0);
 							}	
							
							if($classifica[$squadra][3] == $partita[1][$j][$k])
							{
								$classifica[$squadra][0] += 1;
								$classifica[$squadra][4] += 1;
								$classifica[$squadra][2] += $risultato[1][$j][$k][$t];
								$classifica[$squadra][5] += $risultato[0][$j][$k][$t];
								$classifica[$squadra][1] += 0;
								$classifica[$squadra][6] += 0;
								$classifica[$squadra][7] += 1;
								$classifica[$squadra][8] += 0;
								$classifica[$squadra][9] += $punteggio[1][$j][$k][$t];;
								$classifica[$squadra][10] = $classifica[$squadra][9] / $classifica[$squadra][4];
								$classifica[$squadra][11 + $t] += 1;
								$classifica[$squadra][15 + $t] = round((100*$classifica[$squadra][11 + $t] / 21),0);
							}	
						}
					}
					else if($risultato[0][$j][$k][$t] > $risultato[1][$j][$k][$t]) // vittoria "casa"
					{
						for($squadra=0; $squadra<8; $squadra++)
						{
							if($classifica[$squadra][3] == $partita[0][$j][$k])
							{
								$classifica[$squadra][0] += 3;
								$classifica[$squadra][4] += 1;
								$classifica[$squadra][2] += $risultato[0][$j][$k][$t];
								$classifica[$squadra][5] += $risultato[1][$j][$k][$t];
								$classifica[$squadra][1] = $classifica[$squadra][2] - $classifica[$squadra][5];
								$classifica[$squadra][6] += 1;
								$classifica[$squadra][7] += 0;
								$classifica[$squadra][8] += 0;
								$classifica[$squadra][9] += $punteggio[0][$j][$k][$t];;
								$classifica[$squadra][10] = $classifica[$squadra][9] / $classifica[$squadra][4];
								$classifica[$squadra][11 + $t] += 3;
								$classifica[$squadra][15 + $t] = round((100*$classifica[$squadra][11 + $t] / 21),0);
 							}	
							
							if($classifica[$squadra][3] == $partita[1][$j][$k])
							{
								$classifica[$squadra][0] += 0;
								$classifica[$squadra][4] += 1;
								$classifica[$squadra][2] += $risultato[1][$j][$k][$t];
								$classifica[$squadra][5] += $risultato[0][$j][$k][$t];
								$classifica[$squadra][1] = $classifica[$squadra][2] - $classifica[$squadra][5];
								$classifica[$squadra][6] += 0;
								$classifica[$squadra][7] += 0;
								$classifica[$squadra][8] += 1;
								$classifica[$squadra][9] += $punteggio[1][$j][$k][$t];;
								$classifica[$squadra][10] = $classifica[$squadra][9] / $classifica[$squadra][4];
								$classifica[$squadra][11 + $t] += 0;
								$classifica[$squadra][15 + $t] = round((100*$classifica[$squadra][11 + $t] / 21),0);
 							}	
						}
					}
					else														// vittoria "fuori"
					{
						for($squadra=0; $squadra<8; $squadra++)
						{
							if($classifica[$squadra][3] == $partita[0][$j][$k])
							{
								$classifica[$squadra][0] += 0;
								$classifica[$squadra][4] += 1;
								$classifica[$squadra][2] += $risultato[0][$j][$k][$t];
								$classifica[$squadra][5] += $risultato[1][$j][$k][$t];
								$classifica[$squadra][1] = $classifica[$squadra][2] - $classifica[$squadra][5];
								$classifica[$squadra][6] += 0;
								$classifica[$squadra][7] += 0;
								$classifica[$squadra][8] += 1;
								$classifica[$squadra][9] += $punteggio[0][$j][$k][$t];;
								$classifica[$squadra][10] = $classifica[$squadra][9] / $classifica[$squadra][4];
								$classifica[$squadra][11 + $t] += 0;
								$classifica[$squadra][15 + $t] = round((100*$classifica[$squadra][11 + $t] / 21),0);
 							}	
							
							if($classifica[$squadra][3] == $partita[1][$j][$k])
							{
								$classifica[$squadra][0] += 3;
								$classifica[$squadra][4] += 1;
								$classifica[$squadra][2] += $risultato[1][$j][$k][$t];
								$classifica[$squadra][5] += $risultato[0][$j][$k][$t];
								$classifica[$squadra][1] = $classifica[$squadra][2] - $classifica[$squadra][5];
								$classifica[$squadra][6] += 1;
								$classifica[$squadra][7] += 0;
								$classifica[$squadra][8] += 0;
								$classifica[$squadra][9] += $punteggio[1][$j][$k][$t];
								$classifica[$squadra][10] = $classifica[$squadra][9] / $classifica[$squadra][4];
								$classifica[$squadra][11 + $t] += 3;
								$classifica[$squadra][15 + $t] = round((100*$classifica[$squadra][11 + $t] / 21),0);
 							}	
						}
					}
				}
			}	  
		}	  
	}	
	
	array_multisort($classifica, SORT_DESC);
	
      	echo "<table class='classificaBarre'>";
		
		echo "  <tr>";
		for($i=0; $i<$classifica[0][0]+5; $i++)
		{	echo "<td>&nbsp;</td>";	}				
		echo "</tr>";		

		for($i=0; $i<8; $i++)
		{
			echo " <tr>";
        	echo "   <td class='Squadra' colspan='1'>" . $classifica[$i][3] . "</td>";
			echo "   <td colspan='1'>&nbsp;</td>";
        	echo "   <td class='Punti'>" . $classifica[$i][0] . "</td>";
        	echo "   <td colspan='1'>&nbsp;</td>";

			if($classifica[$i][11] != 0 )
				echo "   <td colspan='" . $classifica[$i][11] . "' class='Barra0'>" . $classifica[$i][11] . "&nbsp;</td>";
			else
				echo "<td colspan='1'>&nbsp;</td>";
			
			if($classifica[$i][12] != 0 )
				echo "<td colspan='" . $classifica[$i][12] . "' class='Barra1'>" . $classifica[$i][12] . "&nbsp;</td>";
			
			if($classifica[$i][13] != 0 )
				echo "<td colspan='" . $classifica[$i][13] . "' class='Barra2'>" . $classifica[$i][13] . "&nbsp;</td>";
			
			if($classifica[$i][14] != 0 )
				echo "<td colspan='" . $classifica[$i][14] . "' class='Barra3'>" . $classifica[$i][14] . "&nbsp;</td>";
			
	       	echo "<td colspan='1'>&nbsp;</td>";
        	echo "<td colspan='" . ($classifica[0][0]-$classifica[$i][0]+1) . "'>&nbsp;</td>";
        	echo "</tr>";
		}
      	
		echo "</table>";
?>
      <p>&nbsp;</p>
      <table class='classifica'>
        <tr  class='tableline'>
          <th>&nbsp;</th>
          <th>&nbsp;</th>
          <th>pt</th>
          <th>g</th>
          <th>&nbsp;</th>
          <th>v</th>
          <th>n</th>
          <th>p</th>
          <th>&nbsp;</th>
          <th>gf</th>
          <th>gs</th>
          <th>&Delta;g</th>
          <th>&nbsp;</th>
          <th>tot</th>
          <th>&nbsp;</th>
          <th>media</th>
        </tr>
        <?php            
		for($i=0; $i<8; $i++)
		{
			echo "    <tr>";
			echo "      <td class='Squadra'>" . $classifica[$i][3] . "</td>";
			echo "      <td >&nbsp;</td>";
			echo "      <td class='Dati'>" . $classifica[$i][0] . "</td>";
			echo "      <td class='Dati'>" . $classifica[$i][4] . "</td>";
			echo "      <td class='Dati' >&nbsp;</td>";
			echo "      <td class='Dati'>" . $classifica[$i][6] . "</td>";
			echo "      <td class='Dati'>" . $classifica[$i][7] . "</td>";
			echo "      <td class='Dati'>" . $classifica[$i][8] . "</td>";
			echo "      <td class='Dati' >&nbsp;</td>";
			echo "      <td class='Dati'>" . $classifica[$i][2] . "</td>";
			echo "      <td class='Dati'>" . $classifica[$i][5] . "</td>";
			echo "      <td class='Dati'>" . $classifica[$i][1] . "</td>";
			echo "      <td class='Dati' >&nbsp;</td>";
			echo "      <td class='Dati'>" . $classifica[$i][9] . "</td>";
			echo "      <td class='Dati' >&nbsp;</td>";
			echo "      <td class='Dati'>" . round($classifica[$i][10], 2) . "</td>";
			echo "    </tr>";
		}
?>
      </table>
	  <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
