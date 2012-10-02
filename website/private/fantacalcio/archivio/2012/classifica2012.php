<?php 
	$relocate_string = "../../";
	include("squadre1112.inc.php");
	include("calendario1112.inc.php");
	include("classifica1112.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="../../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="../../documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="../../chromejs/chrome.js"></script>
<script type="text/javascript" src="../../version.js"></script>
<!-- InstanceBeginEditable name="additional css" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="additional js" -->
<script type="text/javascript" src="../../documentPreProcessor.php?document=javascript2012.js&type=javascript"></script>
<!-- InstanceEndEditable -->
</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
<h1 class="title">XIII&deg; Campionato Fantacalcio NMR 2011/12</h1>
        <br />
        <br />
        <h2 style="color:#333333">1&deg; Classificato: </h2>
        <h2 class="title">DINAMO CIOFECA</h2>
        <br />
<?php
	/*
	 *  lettura file datiCampionato
	 */
	$handle = fopen("datiCampionato1112.txt",'r');
	
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
					$super[1][$k][$j][$t][0] = strtok("/");
					$super[1][$k][$j][$t][1] = strtok("/");
					$super[2][$k][$j][$t][0] = strtok("/");
					$super[2][$k][$j][$t][1] = strtok("/");
				}
			}
		}
	}
		  
	fclose($handle);
	
	/*
	 *  aggiornamento classifica[][] (definito in classifica.inc.php)
	 */
	
	for($t=0; $t<4; $t++)	//A&R
	{
		for($k=0; $k<7; $k++)	// giornate
		{
			for($j=0; $j<4; $j++)	// partita
			{
				if($super[1][$k][$j][$t][0] != "" && $super[1][$k][$j][$t][1] != "" && $super[1][$k][$j][$t][0] != "-" && $super[1][$k][$j][$t][1] != "-")
				{
					if($super[1][$k][$j][$t][0] == $super[1][$k][$j][$t][1]) // pareggio
					{
						for($i=0; $i<8; $i++)
						{
							if($classifica[$i][3] == $super[0][$k][$j][0])
							{
								$classifica[$i][0] += 1;
								$classifica[$i][4] += 1;
								$classifica[$i][2] += $super[1][$k][$j][$t][0];
								$classifica[$i][5] += $super[1][$k][$j][$t][1];
								$classifica[$i][1] += 0;
								$classifica[$i][6] += 0;
								$classifica[$i][7] += 1;
								$classifica[$i][8] += 0;
								$classifica[$i][9] += $super[2][$k][$j][$t][0];
								$classifica[$i][10] = $classifica[$i][9] / $classifica[$i][4];
								$classifica[$i][11 + $t] += 1;
								$classifica[$i][15 + $t] = round((100*$classifica[$i][11 + $t] / 21),0);
 							}	
							
							if($classifica[$i][3] == $super[0][$k][$j][1])
							{
								$classifica[$i][0] += 1;
								$classifica[$i][4] += 1;
								$classifica[$i][2] += $super[1][$k][$j][$t][1];
								$classifica[$i][5] += $super[1][$k][$j][$t][0];
								$classifica[$i][1] += 0;
								$classifica[$i][6] += 0;
								$classifica[$i][7] += 1;
								$classifica[$i][8] += 0;
								$classifica[$i][9] += $super[2][$k][$j][$t][1];;
								$classifica[$i][10] = $classifica[$i][9] / $classifica[$i][4];
								$classifica[$i][11 + $t] += 1;
								$classifica[$i][15 + $t] = round((100*$classifica[$i][11 + $t] / 21),0);
							}	
						}
					}
					else if($super[1][$k][$j][$t][0] > $super[1][$k][$j][$t][1]) // vittoria "casa"
					{
						for($i=0; $i<8; $i++)
						{
							if($classifica[$i][3] == $super[0][$k][$j][0])
							{
								$classifica[$i][0] += 3;
								$classifica[$i][4] += 1;
								$classifica[$i][2] += $super[1][$k][$j][$t][0];
								$classifica[$i][5] += $super[1][$k][$j][$t][1];
								$classifica[$i][1] = $classifica[$i][2] - $classifica[$i][5];
								$classifica[$i][6] += 1;
								$classifica[$i][7] += 0;
								$classifica[$i][8] += 0;
								$classifica[$i][9] += $super[2][$k][$j][$t][0];;
								$classifica[$i][10] = $classifica[$i][9] / $classifica[$i][4];
								$classifica[$i][11 + $t] += 3;
								$classifica[$i][15 + $t] = round((100*$classifica[$i][11 + $t] / 21),0);
 							}	
							
							if($classifica[$i][3] == $super[0][$k][$j][1])
							{
								$classifica[$i][0] += 0;
								$classifica[$i][4] += 1;
								$classifica[$i][2] += $super[1][$k][$j][$t][1];
								$classifica[$i][5] += $super[1][$k][$j][$t][0];
								$classifica[$i][1] = $classifica[$i][2] - $classifica[$i][5];
								$classifica[$i][6] += 0;
								$classifica[$i][7] += 0;
								$classifica[$i][8] += 1;
								$classifica[$i][9] += $super[2][$k][$j][$t][1];;
								$classifica[$i][10] = $classifica[$i][9] / $classifica[$i][4];
								$classifica[$i][11 + $t] += 0;
								$classifica[$i][15 + $t] = round((100*$classifica[$i][11 + $t] / 21),0);
 							}	
						}
					}
					else														// vittoria "fuori"
					{
						for($i=0; $i<8; $i++)
						{
							if($classifica[$i][3] == $super[0][$k][$j][0])
							{
								$classifica[$i][0] += 0;
								$classifica[$i][4] += 1;
								$classifica[$i][2] += $super[1][$k][$j][$t][0];
								$classifica[$i][5] += $super[1][$k][$j][$t][1];
								$classifica[$i][1] = $classifica[$i][2] - $classifica[$i][5];
								$classifica[$i][6] += 0;
								$classifica[$i][7] += 0;
								$classifica[$i][8] += 1;
								$classifica[$i][9] += $super[2][$k][$j][$t][0];;
								$classifica[$i][10] = $classifica[$i][9] / $classifica[$i][4];
								$classifica[$i][11 + $t] += 0;
								$classifica[$i][15 + $t] = round((100*$classifica[$i][11 + $t] / 21),0);
 							}	
							
							if($classifica[$i][3] == $super[0][$k][$j][1])
							{
								$classifica[$i][0] += 3;
								$classifica[$i][4] += 1;
								$classifica[$i][2] += $super[1][$k][$j][$t][1];
								$classifica[$i][5] += $super[1][$k][$j][$t][0];
								$classifica[$i][1] = $classifica[$i][2] - $classifica[$i][5];
								$classifica[$i][6] += 1;
								$classifica[$i][7] += 0;
								$classifica[$i][8] += 0;
								$classifica[$i][9] += $super[2][$k][$j][$t][1];
								$classifica[$i][10] = $classifica[$i][9] / $classifica[$i][4];
								$classifica[$i][11 + $t] += 3;
								$classifica[$i][15 + $t] = round((100*$classifica[$i][11 + $t] / 21),0);
 							}	
						}
					}
				}
			}	  
		}	  
	}	
	
	/*
	 *  Sorting di classifica[][]
	 */

	include("functions1112.inc.php");

	$datiCampionato = readData();
	$squadra = updateSquadra($datiCampionato);
	
	// --> sort x punti
	$xx = 7;
	for ( $j=0; $j<$xx; $j++ )
	{
		for ( $i=0; $i<$xx-$j; $i++ )
		{
			if ($squadra[$i][1] < $squadra[$i+1][1]) // punti
				$squadra = switchSquadre($squadra, $i, $i+1);
		}
	}
	// <-- sort x punti
	
	// --> ricerca gruppi per classifica avulsa
	$containers = array();
	for($i=0; $i<8; $i++)
		array_push($containers, array());	
	
	$j=0;
	$containers[$j][0] = "0"; // la prima squadra sara' sicuramente nel primo contenitore
	
	for($i=0; $i<7; $i++)
	{	
		if(($squadra[$i][1] == $squadra[$i+1][1]))
			array_push($containers[$j], $i+1);
		else
		{
			$j++;
			array_push($containers[$j], $i+1);
		}
	}
	// <-- ricerca gruppi per classifica avulsa
	
	$classifica_calls_counter = 0;
	
	echo "<div id='avulse_wrapper'>
			<input id='avulseToggleButton' type='button' value='Mostra/Nascondi classifiche avulse' onclick='toggleAvulse();' />
			<br /><br />
		<div id='avulse'>";
		
	// --> risoluzione gruppi 
	for($i=0; $i<count($containers); $i++)
	{
		if (count($containers[$i]) > 1)
			classifica($squadra, $containers[$i]);
	}
	// <-- risoluzione gruppi 	
	
	// --> applica correzione a classifica[][]
	for ($i=0; $i<8; $i++)
	{
		for ($j=0; $j<8; $j++)
		{
			if ($squadra[$i][0] == $classifica[$j][3])
			{
				$classifica = switchSquadre($classifica, $i, $j);
				break;
			}
		}
	}
	// <-- applica correzione a classifica[][]	
	
	echo "</div></div>";
	
	/*
	 *  Visualizzazione della classifica con le barre
	 */
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

<!--  
	Visualizzazione della classifica in tabella
-->
      <p>&nbsp;</p>
        <?php            
      echo "<table class='classifica'>
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
        </tr>";

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

      echo "</table><br/>";
  
	  if ($classifica_calls_counter != 0)
	  	echo "<script type='text/javascript'>showAvulseToggleButton();</script>";
	  	
?>      
<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>