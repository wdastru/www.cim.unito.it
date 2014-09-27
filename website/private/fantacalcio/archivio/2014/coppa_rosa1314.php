<?php $relocate_string = "../../"; ?>
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
      <h1 class="title">REAL MENTESCARS 2013/14</h1>
      <br />
      <br />
      <table id="tableRosa" class="rosa">
        <colgroup span="4">
          <col width="200">
          <col width="200">
          <col width="200">
          <col width="200">
        </colgroup>
        <tbody>
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
            <td class='titolare'>Amelia (Milan)</td>
            <td class='titolare'>Palombo (Sampdoria)</td>
            <td class='titolare'>Taarabt (Milan)</td>
            <td class='titolare'>Cassano (Parma)</td>
          </tr>
          <tr>
            <td class='riserva'>Perin (Genoa)</td>
            <td class='titolare'>Bonucci (Juventus)</td>
            <td class='titolare'>Parolo (Parma)</td>
            <td class='titolare'>Palacio (Inter)</td>
          </tr>
          <tr>
            <td class='tribuna'>Abbiati (Milan)</td>
            <td class='titolare'>Antonelli (Genoa)</td>
            <td class='titolare'>Montolivo (Milan)</td>
            <td class='titolare'>Paloschi (Chievo)</td>
          </tr>
          <tr>
            <td class='tribuna'></td>
            <td class='riserva'>Barzagli (Juventus)</td>
            <td class='titolare'>Lodi (Catania)</td>
            <td class='riserva'>Keita (Lazio)</td>
          </tr>
          <tr>
            <td class='tribuna'></td>
            <td class='riserva'>Drame' (Chievo)</td>
            <td class='riserva'>Vargas (Fiorentina)</td>
            <td class='riserva'>Eder (Sampdoria)</td>
          </tr>
          <tr>
            <td class='tribuna'></td>
            <td class='tribuna'>Cacciatore (Verona)</td>
            <td class='riserva'>Muntari (Milan)</td>
            <td class='tribuna'>Gomez M. (Fiorentina)</td>
          </tr>
          <tr>
            <td class='tribuna'></td>
            <td class='tribuna'>Abate (Milan)</td>
            <td class='tribuna'>Alvarez R. (Inter)</td>
            <td class='tribuna'></td>
          </tr>
          <tr>
            <td class='tribuna'></td>
            <td class='tribuna'>Brivio (Atalanta)</td>
            <td class='tribuna'>Matuzalem (Genoa)</td>
            <td class='tribuna'></td>
          </tr>
        </tbody>
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
