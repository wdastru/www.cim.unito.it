<?php $relocate_string = "./";
//require_once ($relocate_string . "dBug.php");
require_once ($relocate_string . "logger.php");
require($relocate_string . "squadre.inc");
require($relocate_string . "calendario.inc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
  <!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <title>Fantacalcio NMR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css"
    href="documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
    <link rel="stylesheet" type="text/css"
    href="documentPreProcessor.php?document=stylesheet.css&type=css" />
    <script type="text/javascript" src="chromejs/chrome.js"></script>
    <script type="text/javascript" src="version.js"></script>
    <!-- InstanceBeginEditable name="additional css" -->
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="additional js" -->
    <script type="text/javascript"
    src="documentPreProcessor.php?document=javascript.js&type=javascript"></script>
    <script type="text/javascript"
    src="documentPreProcessor.php?document=<?php echo $relocate_string; ?>banner.js&type=javascript"></script>
    <!-- InstanceEndEditable -->

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <?php unset($hostname);
    exec('hostname', $hostname);
    if ($hostname[0] == "PESTODURO" || $hostname[0] == "VORTICE" ) {
      echo "<script type='text/javascript' src='" . $relocate_string . "jQuery/lib/jquery-1.10.1.min.js'></script>";
    }
    require $relocate_string . 'include/jquery.fancybox.inc.php';
    ?>
    <!-- jQuery -->
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
    <div id='hiddenBox' style='width:600px; display: none; visibility: hidden;'>
      <br />
      <div id='hiddenBoxTitleBox'>
        <span id='squadra1'>squadra1</span><span id='hiddenBoxHyphen'> - </span><span
        id='squadra2'>squadra2</span>
      </div>
      <br />
      <br />
      <form method='post' id='formRisultati' action=''>
        <fieldset class='noBorder'>
          <input class='button' type='button' id='sendButton' value='Send'
          onclick='validate( "campionato" )' />
          <input id='closeBtn' class='button' type='button'
          value='Close this box!' onclick='hideBox();' />
          <input class='button'
          type='button' value='Reset' onclick="resetFields();" />
          <br />
          <br />
          Goal Squadra A :
          <input type='text' name='goalA' value=''
          onkeyup="goals();" onmousedown="goals();" />
          <br />
          <br />
          Goal
          Squadra B :
          <input type='text' name='goalB' value=''
          onkeyup="goals();" onmousedown="goals();" />
          <br />
          <br />
          Punti
          Squadra A :
          <input type='text' name='puntiA' value='' />
          <br />
          <br />
          Punti Squadra B :
          <input type='text' name='puntiB' value='' />
          <br />
          <br />
          <br />
          Marcatori:
          <br />
          <br />
          <input class='button' type='button'
          style="display: inline" value='Aggiungi un marcatore'
          onclick='manualAddField();' />
          &nbsp;
          <input class='button' type='button'
          style="display: inline" value='Togli un marcatore'
          onclick='manualDeleteField();' />
          <br />
          <br />
          <?php
          for ($i = 0; $i < 20; $i++)
            echo "<div class='goals'><input type='text' name='goals" . $i . "' value=''/></div>";
          ?>
          <input type='hidden' name='Id' value='' />
        </fieldset>
      </form>
    </div>
    <!-- InstanceEndEditable -->
    <div id="main">
    <!-- InstanceBeginEditable name="body" -->
    <h1 class="title">CALENDARIO</h1>

    <?php
		
		$datiCampionatoFile = $relocate_string . '777/datiCampionato.txt';
		if (!file_exists($datiCampionatoFile)) {
			require $relocate_string . 'createDatiCampionato.php';
		}

		require $relocate_string . 'readDatiCampionato.php';
        
    for($giornataIdx = 0; $giornataIdx < 7; $giornataIdx++) // giornata 0-6
		{
			echo "<br />";
			echo "<h2 class=\"giornata\">" . $giornata[$giornataIdx] . "</h2>\n";
			echo "<div class=\"center\">\n";
			echo "<table class=\"risultati\">\n";
            
			for($partitaIdx=0; $partitaIdx<4; $partitaIdx++) // partita 0-3
			{
				if ($odd = $partitaIdx % 2){
					echo"<tr class=\"odd\">";
					for($i=0; $i<2; $i++) { // in casa - fuori casa 0-1
						echo "<td class=\"Squadra\"><a href='squadre/squadra.php?squadra=" . $shortName[$super[0][$giornataIdx][$partitaIdx][$i]] . "'>" . $super[0][$giornataIdx][$partitaIdx][$i] . "</a></td>";
					}
				} else {
					echo"<tr class=\"even\">";
					for($i=0; $i<2; $i++) { // in casa - fuori casa 0-1
						echo "<td class=\"Squadra\"><a href='squadre/squadra.php?squadra=" . $shortName[$super[0][$giornataIdx][$partitaIdx][$i]] . "'>" . $super[0][$giornataIdx][$partitaIdx][$i] . "</a></td>";
					}
				}
				
				for($ARIdx=0; $ARIdx<4; $ARIdx++) //AR
				{
					echo "<td href='#hiddenBox' class='Dati fancybox' id='a" . $partitaIdx . $giornataIdx . $ARIdx . "' onmousedown='showBoxCampionato(\"a" . $partitaIdx . $giornataIdx . $ARIdx . "\", event);'>";

					echo "    <div class='RisultatiCampionato'>";
					if ($super[1][$giornataIdx][$partitaIdx][$ARIdx][0] == "-") {
						echo "";
					} else {
						echo $super[1][$giornataIdx][$partitaIdx][$ARIdx][0];
					}
					echo " - ";
					if ($super[1][$giornataIdx][$partitaIdx][$ARIdx][1] == "-") {
						echo "";
					} else {
						echo $super[1][$giornataIdx][$partitaIdx][$ARIdx][1];
					}
					echo "</div>";

					echo "    <div class='PunteggiCampionato'>";
					if ($super[2][$giornataIdx][$partitaIdx][$ARIdx][0] == "-") {
						echo "";
					} else {
						echo $super[2][$giornataIdx][$partitaIdx][$ARIdx][0];
					}
					echo " - ";
					if ($super[2][$giornataIdx][$partitaIdx][$ARIdx][1] == "-") {
						echo "";
					} else {
						echo $super[2][$giornataIdx][$partitaIdx][$ARIdx][1];
					}
					echo "</div>";

					if ( count($super[3][$giornataIdx][$partitaIdx][$ARIdx]) > 0 )
					{
						for($i=0; $i<count($super[3][$giornataIdx][$partitaIdx][$ARIdx]); $i++) {
							echo "  <div class='hidden'>";
							if ($super[3][$giornataIdx][$partitaIdx][$ARIdx][$i] == "-") {
							} else {
								echo $super[3][$giornataIdx][$partitaIdx][$ARIdx][$i];
								if ($super[3][$giornataIdx][$partitaIdx][$ARIdx][$i] != '') {
								}
							}
							echo "</div>";
						}
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
		
		$createOldStats = 0;
		if ($createOldStats) {
			$files[8] = $relocate_string . 'archivio/2016/datiCampionato1516.txt';
      $files[7] = $relocate_string . 'archivio/2015/datiCampionato1415.txt';
      $files[6] = $relocate_string . 'archivio/2014/datiCampionato1314.txt';
      $files[5] = $relocate_string . 'archivio/2013/datiCampionato1213.txt';
      $files[4] = $relocate_string . 'archivio/2012/datiCampionato1112.txt';
			$files[3] = $relocate_string . 'archivio/2011/datiCampionato1011.txt';
			$files[2] = $relocate_string . 'archivio/2010/datiCampionato0910.txt';
			$files[1] = $relocate_string . 'archivio/2009/datiCampionato0809.txt';
			$files[0] = $relocate_string . 'archivio/2008/datiCampionato0708.txt';
			$year[8] = '1516';
			$year[7] = '1415';
      $year[6] = '1314';
      $year[5] = '1213';
			$year[4] = '1112';
			$year[3] = '1011';
			$year[2] = '0910';
			$year[1] = '0809';
			$year[0] = '0708';
			$allTimeStatsHandle = fopen($relocate_string . "allTimeStatsOld.txt", 'w');
		} else {
			$files[0] = $relocate_string . '777/datiCampionato.txt';
			$year[0] = '1617';
			if (copy($relocate_string . "allTimeStatsOld.txt", $relocate_string . "777/allTimeStats.txt")) {
				$allTimeStatsHandle = fopen($relocate_string . "777/allTimeStats.txt", 'a');
			} else {
				/* throw exception
				 * if file copy
				 * fails
				 */
			}
		}
		
		for($filesCounter=0; $filesCounter<count($files); $filesCounter++) {
		
			$datiCampionatoFile = $relocate_string . $files[$filesCounter];
			if (!file_exists($datiCampionatoFile)) {
				require $relocate_string . 'createDatiCampionato.php';
			}
	
			require $relocate_string . 'readDatiCampionato.php';
			
			for($giornataIdx = 0; $giornataIdx < 7; $giornataIdx++) // giornata
			{
				for($partitaIdx=0; $partitaIdx<4; $partitaIdx++) // partita
				{
					for($ARIdx=0; $ARIdx<4; $ARIdx++) //AR
					{
						$string =  $year[$filesCounter] . "/";
						for($i=0; $i<2; $i++) { // in casa - fuori casa
							$string .= $super[0][$giornataIdx][$partitaIdx][$i] . "/";
						}
						
						// goal A
						if ($super[1][$giornataIdx][$partitaIdx][$ARIdx][0] == "-") {
							$string .= "-/";
						} else {
							$string .= $super[1][$giornataIdx][$partitaIdx][$ARIdx][0] . "/";
						}
				
						// goal B
						if ($super[1][$giornataIdx][$partitaIdx][$ARIdx][1] == "-") {
							$string .= "-/";
						} else {
							$string .= $super[1][$giornataIdx][$partitaIdx][$ARIdx][1] . "/";
						}
				
						// punti A
						if ($super[2][$giornataIdx][$partitaIdx][$ARIdx][0] == "-") {
							$string .= "-/";
						} else {
							$string .= $super[2][$giornataIdx][$partitaIdx][$ARIdx][0] . "/";
						}
				
						// punti B
						if ($super[2][$giornataIdx][$partitaIdx][$ARIdx][1] == "-") {
							$string .= "-/";
						} else {
							$string .= $super[2][$giornataIdx][$partitaIdx][$ARIdx][1] . "/";
						}
						
						// casa
						if ($ARIdx == 0 || $ARIdx == 2) {
							$string .= "1/";
						} else {
							$string .= "0/";
						}
						
						// marcatori
						if ( count($super[3][$giornataIdx][$partitaIdx][$ARIdx]) > 0 )
						{
							for($i=0; $i<count($super[3][$giornataIdx][$partitaIdx][$ARIdx]); $i++) {
								if ($super[3][$giornataIdx][$partitaIdx][$ARIdx][$i] == "-") {
									$string .= "-/";
								} else {
									if ($super[3][$giornataIdx][$partitaIdx][$ARIdx][$i] != '') {
										$string .= $super[3][$giornataIdx][$partitaIdx][$ARIdx][$i] . "/";
									}
								}
							}
						}
						$string .= "\n";
						//if (!strstr($string, "/////")) {
							fwrite($allTimeStatsHandle, $string);
						//}
					}
				}
			}
	
		}
		fclose($allTimeStatsHandle);

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
    <!-- InstanceEndEditable -->
    </div>

    <?php include $relocate_string . 'include/footer.inc.php'?>
    <!-- dragHelper for dragdrop.php -->
    <div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
  </body>
  <!-- InstanceEnd -->
</html>
