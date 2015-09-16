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
      <h1 class="title">EPOrediese 2014/15</h1>
      <br />
      <br />
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
          <td class='titolare'>Karnezis (Udinese)</td>
          <td class='titolare'>Burdisso (Genoa)</td>
          <td class='titolare'>Felipe Anderson (Lazio)</td>
          <td class='titolare'>Icardi (Inter)</td>
        </tr>
        <tr>
          <td class='riserva'>Scuffet (Udinese)</td>
          <td class='titolare'>Vrsaljko (Sassuolo)</td>
          <td class='titolare'>Pereyra (Juventus)</td>
          <td class='titolare'>Zaza (Sassuolo)</td>
        </tr>
        <tr>
          <td class='tribuna'>Marchetti (Lazio)</td>
          <td class='titolare'>Hysaj (Empoli)</td>
          <td class='titolare'>Hamsik (Napoli)</td>
          <td class='titolare'>El Shaarawy (Milan)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='riserva'>Mario Rui (Empoli)</td>
          <td class='titolare'>Honda (Milan)</td>
          <td class='riserva'>Di Natale (Udinese)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='riserva'>Koulibaly (Napoli)</td>
          <td class='riserva'>Cigarini (Atalanta)</td>
          <td class='riserva'>Morata (Juventus)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Marchese (Genoa)</td>
          <td class='riserva'>Kone (Udinese)</td>
          <td class='tribuna'>Djuric (Cesena)</td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Heurtaux (Udinese)</td>
          <td class='tribuna'>Strootman (Roma)</td>
          <td class='tribuna'></td>
        </tr>
        <tr>
          <td class='tribuna'></td>
          <td class='tribuna'>Bovo (Torino)</td>
          <td class='tribuna'>Christodoulopoulos (Verona)</td>
          <td class='tribuna'></td>
        </tr>
      </table>
      <br />
      <br />
      <!-- InstanceEndEditable -->
    </div>
    <?php include $relocate_string . 'include/footer.inc.php'?>
    <!-- dragHelper for dragdrop.php -->
    <div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
  </body>
  <!-- InstanceEnd -->
</html>
