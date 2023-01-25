<?php $relocate_string = "../../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript"
		src="<?php echo $relocate_string; ?>chromejs/chrome.js"></script>
	<script type="text/javascript"
		src="<?php echo $relocate_string; ?>version.js"></script>
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
		<h1 class="title">Fedora 2017/18</h1>
		<br> <br>
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
			<td class="titolare">Handanovic (Inter)</td>
			<td class="titolare">Ghoulam (Napoli)</td>
			<td class="titolare">Ljajic (Torino)</td>
			<td class="titolare">Higuain (Juventus)</td>
		</tr>
		<tr>
			<td class="riserva">Padelli (Inter)</td>
			<td class="titolare">Albiol (Napoli)</td>
			<td class="titolare">Castro (Chievo)</td>
			<td class="titolare">Dzeko (Roma)</td>
		</tr>
		<tr>
			<td class="tribuna">Gomis (Spal)</td>
			<td class="titolare">Romagnoli (Milan)</td>
			<td class="titolare">Torreira (Sampdoria)</td>
			<td class="riserva">Pandev (Genoa)</td>
		</tr>
		<tr>
			<td class="tribuna"></td>
			<td class="riserva">Marusic (Lazio)</td>
			<td class="titolare">Brozovic (Inter)</td>
			<td class="riserva">Pucciarelli (Chievo)</td>
		</tr>
		<tr>
			<td class="tribuna"></td>
			<td class="riserva">Acerbi (Sassuolo)</td>
			<td class="titolare">Matuidi (Juventus)</td>
			<td class="tribuna">Palacio (Bologna)</td>
		</tr>
		<tr>
			<td class="tribuna"></td>
			<td class="tribuna">Musacchio (Milan)</td>
			<td class="riserva">Lazzari (Spal)</td>
			<td class="tribuna">Taarabt (Genoa)</td>
		</tr>
		<tr>
			<td class="tribuna"></td>
			<td class="tribuna">Nuytinck (Udinese)</td>
			<td class="riserva">Farago' Paolo (Cagliari)</td>
			<td class="tribuna"></td>
		</tr>
		<tr>
			<td class="tribuna"></td>
			<td class="tribuna">Masiello (Atalanta)</td>
			<td class="tribuna">Lulic (Lazio)</td>
			<td class="tribuna"></td>
			</tr>
		</table>
		<br> <br>
		<!-- InstanceEndEditable -->
	</div>
    <?php include $relocate_string . 'include/footer.inc.php'?>
    <!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>

