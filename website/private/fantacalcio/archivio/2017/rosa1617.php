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
      <h1 class="title">EPOrediese 2016/17</h1>
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
					<td class="titolare">Szczesny (Roma)</td>
					<td class="titolare">Benatia (Juventus)</td>
					<td class="titolare">Mertens (Napoli)</td>
					<td class="titolare">Maccarone (Empoli)</td>
				</tr>
				<tr>
					<td class="riserva">Alisson (Roma)</td>
					<td class="titolare">Rugani (Juventus)</td>
					<td class="titolare">Khedira (Juventus)</td>
					<td class="titolare">Kalinic (Fiorentina)</td>
				</tr>
				<tr>
					<td class="tribuna">Viviano (Sampdoria)</td>
					<td class="titolare">Castan (Torino)</td>
					<td class="titolare">Iago (Torino)</td>
					<td class="riserva">Caprari (Pescara)</td>
				</tr>
				<tr>
					<td class="tribuna"></td>
					<td class="riserva">Albiol (Napoli)</td>
					<td class="titolare">Hamsik (Napoli)</td>
					<td class="riserva">Sau (Cagliari)</td>
				</tr>
				<tr>
					<td class="tribuna"></td>
					<td class="riserva">Alves (Cagliari)</td>
					<td class="titolare">Anderson (Lazio)</td>
					<td class="tribuna">Pavoletti (Napoli)</td>
				</tr>
				<tr>
					<td class="tribuna"></td>
					<td class="tribuna">Florenzi (Roma)</td>
					<td class="riserva">Perisic (Inter)</td>
					<td class="tribuna">Icardi (Inter)</td>
				</tr>
				<tr>
					<td class="tribuna"></td>
					<td class="tribuna">Zappacosta (Torino)</td>
					<td class="riserva">Marchisio (Juventus)</td>
					<td class="tribuna"></td>
				</tr>
				<tr>
					<td class="tribuna"></td>
					<td class="tribuna">Dainelli (Chievo)</td>
					<td class="tribuna">Brozovic (Inter)</td>
					<td class="tribuna"></td>
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
