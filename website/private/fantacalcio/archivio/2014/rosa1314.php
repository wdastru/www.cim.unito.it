<?php $relocate_string = "../../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
  <!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <title>Fantacalcio NMR</title>
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
      <h1 class="title">DINAMO CIOFECA 2013/14</h1>
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
          <td class='titolare'>Rafael D.A. (Verona)</td>
          <td class='titolare'>Lichtsteiner (Juventus)</td>
          <td class='titolare'>Cuadrado (Fiorentina)</td>
          <td class='titolare'>Immobile (Torino)</td>
        </tr>
        <tr>
          <td class='riserva'>Rosati (Fiorentina)</td>
          <td class='titolare'>Chiellini (Juventus)</td>
          <td class='titolare'>Pjanic (Roma)</td>
          <td class='titolare'>Llorente (Juventus)</td>
        </tr>
        <tr>
          <td class='tribuna'>Neto (Fiorentina)</td>
          <td class='titolare'>Benatia (Roma)</td>
          <td class='titolare'>Cerci (Torino)</td>
          <td class='titolare'>Rossi G. (Fiorentina)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='titolare'>Rami (Milan)</td>
          <td class='riserva'>Aquilani (Fiorentina)</td>
          <td class='riserva'>Gabbiadini (Sampdoria)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='riserva'>Savic (Fiorentina)</td>
          <td class='riserva'>Jankovic B. (Verona)</td>
          <td class='riserva'>Osvaldo (Juventus)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='riserva'>Moretti (Torino)</td>
          <td class='tribuna'>Conti (Cagliari)</td>
          <td class='tribuna'>Iturbe (Verona)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Albiol (Napoli)</td>
          <td class='tribuna'>Cambiasso (Inter)</td>
          <td class='tribuna'></td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Konko (Lazio)</td>
          <td class='tribuna'>Ljajic (Roma)</td>
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
