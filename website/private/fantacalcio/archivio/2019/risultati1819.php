<?php
$relocate_string = "../../";
require($relocate_string . "archivio/2019/squadre1819.inc");
require($relocate_string . "archivio/2019/calendario1819.inc");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <title>Fantacalcio NMR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=stylesheet.css&type=css" />
    <script type="text/javascript" src="<?php echo $relocate_string; ?>chromejs/chrome.js"></script>
    <script type="text/javascript" src="<?php echo $relocate_string; ?>version.js"></script>
    <!-- InstanceBeginEditable name="additional css" -->
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="additional js" -->
    <script type="text/javascript" src="<?php echo $relocate_string; ?>documentPreProcessor.php?document=javascript.js&type=javascript"></script>
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
      <br>
      <div id='hiddenBoxTitleBox'>
        <span id='squadra1'>squadra1</span><span id='hiddenBoxHyphen'> - </span><span
        id='squadra2'>squadra2</span>
      </div>
      <br>
      <br>
      <form method='post' id='formRisultati' action=''>
        <fieldset class='noBorder'>
          <input style="display: inline; visibility: hidden;" class='button' type='button' id='sendButton' value='Send' onclick='validate( "campionato" )' />
          <input style="display: inline; visibility: hidden;" id='closeBtn' class='button' type='button' value='Close this box!' onclick='hideBox();' />
          <input style="display: inline; visibility: hidden;" class='button'
          type='button' value='Reset' onclick="resetFields();" />
          <br>
          <br>
          Goal Squadra A :
          <input type='text' name='goalA' value=''
          onkeyup="goals();" onmousedown="goals();" />
          <br>
          <br>
          Goal
          Squadra B :
          <input type='text' name='goalB' value=''
          onkeyup="goals();" onmousedown="goals();" />
          <br>
          <br>
          Punti
          Squadra A :
          <input type='text' name='puntiA' value='' />
          <br>
          <br>
          Punti Squadra B :
          <input type='text' name='puntiB' value='' />
          <br>
          <br>
          <br>
          Marcatori:
          <br>
          <br>
          <input class='button' type='button'
          style="display: inline; visibility:hidden;" value='Aggiungi un marcatore'
          onclick='manualAddField();' />
          &nbsp;
          <input class='button' type='button'
          style="display: inline; visibility:hidden;" value='Togli un marcatore'
          onclick='manualDeleteField();' />
          <br>
          <br>
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
		
		$datiCampionatoFile = $relocate_string . 'archivio/2019/datiCampionato1819.txt';
		if (!file_exists($datiCampionatoFile)) {
			require $relocate_string . 'createDatiCampionato.php';
		}

		require $relocate_string . 'readDatiCampionato.php';
        
    for($giornataIdx = 0; $giornataIdx < 7; $giornataIdx++) // giornata 0-6
		{
			echo "<br>";
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
		
    ?>
    <!-- InstanceEndEditable -->
    </div>

    <?php include $relocate_string . 'include/footer.inc.php'?>
    <!-- dragHelper for dragdrop.php -->
    <div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
  </body>
  <!-- InstanceEnd -->
</html>
