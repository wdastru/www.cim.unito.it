<?php
$relocate_string = "../../";
require_once $relocate_string . 'logger.php';
include("squadre1112.inc.php");
include("calendario1112.inc.php");
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
	<!-- InstanceBeginEditable name="additional css" -->
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->
	<script type="text/javascript"
		src="<?php echo $relocate_string; ?>documentPreProcessor.php?document=archivio/2012/javascript2012.js&type=javascript"></script>
	<!-- InstanceEndEditable -->

</head>
<!-- <body onresize="Count();"> -->
<body>
	<?php require $relocate_string . 'include/title.inc.php'; ?>
	<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<div id='hiddenBox' style='visibility: hidden'>
		<br /> 
		<div id='hiddenBoxTitleBox'>
			<span id='squadra1'>squadra1</span>
			<span id='hiddenBoxHyphen'> - </span>
			<span id='squadra2'>squadra2</span>
		</div> 
		<br />
		<br />
		<form method='post' id='formRisultati' action=''>
			<fieldset class='noBorder'>
				<input type='button' value='Close this box!' onclick='hideBox();' />
				<br /> <br /> 
				Goal Squadra A : 
				<input type='text' name='goalA'
					value='' onkeyup="goals();" onmousedown="goals();" /><br /> <br />
				Goal Squadra B : 
				<input type='text' name='goalB' value=''
					onkeyup="goals();" onmousedown="goals();" /><br /> <br /> 
				Punti Squadra A : <input type='text' name='puntiA' value='' /><br /> <br />
				Punti Squadra B : <input type='text' name='puntiB' value='' /><br />
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
		<h1 class="title">RISULTATI FANTACALCIO NMR 2011/12</h1>
		<?php
		$handle = fopen("datiCampionato1112.txt",'r');

		while(!feof($handle))
		{
			for($t=0; $t<4; $t++)   //A&R
			{
				for($k=0; $k<7; $k++)   // giornate
				{
					for($j=0; $j<4; $j++)   // partita
					{
						$tmpString = trim(fgets($handle));

						$id[$j][$k][$t] = strtok($tmpString, "/"); // ids

						$super[1][$k][$j][$t][0] = strtok("/");
						$super[1][$k][$j][$t][1] = strtok("/");

						$super[2][$k][$j][$t][0] = strtok("/");
						$super[2][$k][$j][$t][1] = strtok("/");

						if($super[1][$k][$j][$t][0]=="-")
						$super[1][$k][$j][$t][0]="";
						if($super[1][$k][$j][$t][1]=="-")
						$super[1][$k][$j][$t][1]="";
						if($super[2][$k][$j][$t][0]=="-")
						$super[2][$k][$j][$t][0]="";
						if($super[2][$k][$j][$t][1]=="-")
						$super[2][$k][$j][$t][1]="";

						$i=0;
						while( 1 )
						{
							$tmpStr = strtok("/");

							if ( $tmpStr == '' )
							{
								$super[3][$k][$j][$t][$i] = '';
								break;
							}
							else if ( $tmpStr == '-' )
							$super[3][$k][$j][$t][$i] = '';
							else
							$super[3][$k][$j][$t][$i] = $tmpStr;

							$i++;
						}
					}
				}
			}
		}

		fclose($handle);

		for($giornataIdx = 0; $giornataIdx < 7; $giornataIdx++) // giornata
		{
			echo "<br />";
			echo "<h2 class=\"giornata\">" . $giornata[$giornataIdx] . "</h2>\n";
			echo "<div class=\"center\">\n";
			echo "<table class=\"risultati\">\n";

			for($partitaIdx=0; $partitaIdx<4; $partitaIdx++) // partita
			{
				if ($odd = $partitaIdx % 2)
				echo"<tr class=\"odd\">";

				else
				echo"<tr class=\"even\">";

				for($i=0; $i<2; $i++) // in casa - fuori casa
				echo "<td class=\"Squadra\">" . $super[0][$giornataIdx][$partitaIdx][$i] . "</td>";

				echo "\n";

				for($ARIdx=0; $ARIdx<4; $ARIdx++) //AR
				{
					echo "<td class='Dati' id='a" . $partitaIdx . $giornataIdx . $ARIdx . "' onmousedown='showBoxCampionato(\"a" . $partitaIdx . $giornataIdx . $ARIdx . "\", event);'>";
					echo "    <div class='RisultatiCampionato'>" . $super[1][$giornataIdx][$partitaIdx][$ARIdx][0] . " - " . $super[1][$giornataIdx][$partitaIdx][$ARIdx][1] . "</div>";
					echo "    <div class='PunteggiCampionato'>" . $super[2][$giornataIdx][$partitaIdx][$ARIdx][0] . " - " . $super[2][$giornataIdx][$partitaIdx][$ARIdx][1] . "</div>";

					if ( count($super[3][$giornataIdx][$partitaIdx][$ARIdx]) > 0 )
					{
						for($i=0; $i<count($super[3][$giornataIdx][$partitaIdx][$ARIdx]); $i++)
						echo "  <div class='hidden'>" . $super[3][$giornataIdx][$partitaIdx][$ARIdx][$i] . "</div>";
					}

					for($i=0; $i<2; $i++)
					echo "  <span class='hidden'>" . $super[0][$giornataIdx][$partitaIdx][$i] . "</span>";
					echo "</td>\n";
				}
				echo"</tr>\n";
			}
			echo "</table>";
			echo "</div>\n";
		}
		?>
		<!-- InstanceEndEditable -->
	</div>

	<?php include $relocate_string . 'include/footer.inc.php'?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
