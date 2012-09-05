<?php 
	$relocate_string = "../../";
	include("squadre0809.inc");
	include("calendario0809.inc"); 
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
<script type="text/javascript" src="../../documentPreProcessor.php?document=archivio/2009/javascript2009.js&type=javascript"></script>
<!-- InstanceEndEditable -->
</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
			<div id='hiddenBox' style='visibility:hidden'><br />
          <span id='squadra1'>squadra1</span><span> - </span><span id='squadra2'>squadra2</span> <br />
          <br />
			<form method='post' name='formRisultati'>
			<input type='hidden' value='Send'>&nbsp;&nbsp;&nbsp;
			<input type='button' value='Close this box!' onclick='hideBox();'/>&nbsp;&nbsp;&nbsp;
			<input type='hidden' value='Reset' /><br /><br />
			Goal Squadra A : <input type='text' name='goalA' value='' onkeyup="goalsA(event);"/><br /><br />
			Goal Squadra B : <input type='text' name='goalB' value='' onkeyup="goalsB(event);"/><br /><br />
			Punti Squadra A : <input type='text' name='puntiA' value=''/><br /><br />
			Punti Squadra B : <input type='text' name='puntiB' value=''/><br /><br />
			Marcatori:<input type='hidden' value='Aggiungi un marcatore' onclick='addFieldA();'/>&nbsp;&nbsp;&nbsp;&nbsp;
			<input type='hidden' value='Togli un marcatore' onclick='deleteFieldA();'/><br /><br />
			<?php
			for($i=0; $i<20; $i++)
				echo "<div class='goals'><input type='text' name='goals" . $i . "' value=''/></div>";
			?>
			<input type='hidden' name='Id' value=''/>
			</form></div>
          <h1 class="title">RISULTATI FANTACALCIO NMR 2008/09</h1>
        <?php
	$handle = fopen("datiCampionato0809.txt",'r');

	while(!feof($handle))
	{
		for($t=0; $t<4; $t++)	//A&R
		{
			for($k=0; $k<7; $k++)	// giornate
			{
				for($j=0; $j<4; $j++)	// partita
				{
					$tmpString = trim(fgets($handle));
					
					$id[$j][$k][$t] = strtok($tmpString, "/"); // ids
					
					$risultato[0][$j][$k][$t] = strtok("/");
					if($risultato[0][$j][$k][$t]=="-")
						$risultato[0][$j][$k][$t]="";
						
					$risultato[1][$j][$k][$t] = strtok("/");
					if($risultato[1][$j][$k][$t]=="-")
						$risultato[1][$j][$k][$t]="";
						
					$punteggio[0][$j][$k][$t] = strtok("/");
					if($punteggio[0][$j][$k][$t]=="-")
						$punteggio[0][$j][$k][$t]="";

					$punteggio[1][$j][$k][$t] = strtok("/");
					if($punteggio[1][$j][$k][$t]=="-")
						$punteggio[1][$j][$k][$t]="";
					
					$i=0;
					while( 1 )
					{
						$tmpStr = strtok("/");
						if( $tmpStr == '' )
							break;
						else
							$marcatori[$j][$k][$t][$i] = $tmpStr;
						
						$i++;
					}
				}
			}
		}
	}
		  
	fclose($handle);
	
	for($k=0; $k<7; $k++) // giornata
	{	
      	echo "<br />";
      	echo "<h2 class=\"giornata\">" . $giornata[$k] . "</h2>\n";
      	echo "<div class=\"center\">\n";
      	echo "<table class=\"risultati\">\n";

		for($j=0; $j<4; $j++) // partita
		{
			if ($odd = $j % 2)
				echo"<tr class=\"odd\">";
			else
				echo"<tr class=\"even\">";
				
			for($i=0; $i<2; $i++)
				echo "<td class=\"Squadra\">" . $partita[$i][$j][$k] . "</td>";
			
			echo "\n";
			
			for($t=0; $t<4; $t++) //AR
			{
				echo "<td class='Dati' id='a" . $j . $k . $t . "' onmousedown='showBoxCampionato(\"a" . $j . $k . $t . "\", event);'>";
				echo "    <div class='Risultati'>" . $risultato[0][$j][$k][$t] . " - " . $risultato[1][$j][$k][$t] . "</div>";
				echo "	  <div class='Punteggi'>" . $punteggio[0][$j][$k][$t] . " - " . $punteggio[1][$j][$k][$t] . "</div>";
				
				if (isset($marcatori[$j][$k][$t]))
					for($i=0; $i<count($marcatori[$j][$k][$t]); $i++)
						echo "	  <div class='hidden'>" . $marcatori[$j][$k][$t][$i] . "</div>";
						
				for($i=0; $i<2; $i++)
						echo "  <span class='hidden'>" . $partita[$i][$j][$k] . "</span>";
				echo "</td>\n";
			}
			echo"</tr>\n";
		}
      	echo "</table>";
	  	echo "</div>\n";
	 }
?>

<!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
