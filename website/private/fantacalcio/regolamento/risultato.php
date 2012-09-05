<?php $relocate_string = "../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="../chromejs/chrome.js"></script>
<script type="text/javascript" src="../version.js"></script>
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
	<h1 class="title">Risultato</h1>
      <table class="regole">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="justify">
            <p>Ad ogni punteggio di squadra corrisponde un numero di gol segnati. </p>
            <p>Questa &eacute; la tabella di conversione: </p>
            <table class="center" width="150">
              <tr>
                <td class='regoleTitoli left'>punteggio</td>
                <td class='regoleTitoli'> gol </td>
              </tr>
			  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              <tr>
                <td align="left">meno di 66</td>
                <td align="center">0</td>
              </tr>
              <tr>
                <td align="left">da 66 a 71,5</td>
                <td align="center">1</td>
              </tr>
              <tr>
                <td align="left">da 72 a 77,5</td>
                <td align="center">2</td>
              </tr>
              <tr>
                <td align="left">da 78 a 83,5</td>
                <td align="center">3</td>
              </tr>
              <tr>
                <td align="left">da 84 a 89,5 </td>
                <td align="center">4</td>
              </tr>
              <tr>
                <td align="left">da 90 a 95.5</td>
                <td align="center">5</td>
              </tr>
              <tr>
                <td align="left">da 96 a 101.5 </td>
                <td align="center">6</td>
              </tr>
              <tr>
                <td align="left">... </td>
                <td align="center">...</td>
              </tr>
            </table>
            <p>e cosi via; ogni fascia &eacute; larga 6 punti. </p>
			<p class="justify">Se tutti e due i giocatori fanno meno di 66 (quindi sarebbe 0-0) e se una delle due squadre ha fatto almeno 6 punti pi&uacute; dell'altra le si assegna un gol.</p>


            </td>
        </tr>
      </table>
<!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
