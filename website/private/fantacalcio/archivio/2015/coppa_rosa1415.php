<?php $relocate_string = "../../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
  <!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <title>Fantacalcio NMR</title>
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
    <!-- InstanceEndEditable -->

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
    <!-- InstanceEndEditable -->
    <div id="main">
      <!-- InstanceBeginEditable name="body" -->
      <h1 class="title">LOKOMOTIV PECCORINO 2014/15</h1>
      <br>
      <br>
      <table id='tableRosa' class="rosa">
        <colgroup span="4">
          <col width="200" />
          <col width="200" />
          <col width="200" />
          <col width="200" />
        </colgroup>
        <tr class="tableline">
          <th>Portieri</th>
          <th>Difensori</th>
          <th>Centrocampisti</th>
          <th>Attaccanti</th>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class='titolare'>Buffon (Juventus)</td>
          <td class='titolare'>De Vrij (Lazio)</td>
          <td class='titolare'>Borja Valero (Fiorentina)</td>
          <td class='titolare'>Tevez (Juventus)</td>
        </tr>
        <tr>
          <td class='riserva'>Storari (Juventus)</td>
          <td class='titolare'>Ogbonna (Juventus)</td>
          <td class='titolare'>Bonaventura (Milan)</td>
          <td class='titolare'>Thereau (Udinese)</td>
        </tr>
        <tr>
          <td class='tribuna'>De Sanctis (Roma)</td>
          <td class='titolare'>Evra (Juventus)</td>
          <td class='titolare'>Tachtsidis (Verona)</td>
          <td class='titolare'>Klose (Lazio)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='riserva'>Maggio (Napoli)</td>
          <td class='titolare'>Joaquin (Fiorentina)</td>
          <td class='riserva'>Okaka (Sampdoria)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='riserva'>Paletta (Milan)</td>
          <td class='riserva'>Sturaro (Juventus)</td>
          <td class='riserva'>Niang (Genoa)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Holebas (Roma)</td>
          <td class='riserva'>De Rossi (Roma)</td>
          <td class='tribuna'>Quagliarella (Torino)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Tomovic (Fiorentina)</td>
          <td class='tribuna'>Coman (Juventus)</td>
          <td class='tribuna'></td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Gabriel Silva (Udinese)</td>
          <td class='tribuna'>Verdi (Empoli)</td>
          <td class='tribuna'></td>
        </tr>
      </table>
      <br>
      <br>
      <!-- InstanceEndEditable -->
    </div>
    <?php include $relocate_string . 'include/footer.inc.php'?>
    <!-- dragHelper for dragdrop.php -->
    <div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
  </body>
  <!-- InstanceEnd -->
</html>
