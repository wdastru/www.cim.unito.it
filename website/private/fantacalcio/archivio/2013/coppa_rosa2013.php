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
		<?php require $relocate_string . 'include/title.inc.php'; ?>
		<?php require $relocate_string . 'include/menu.inc.php'; ?>
		<!-- InstanceBeginEditable name="hiddenBox" -->
		<!-- InstanceEndEditable -->
		<div id="main">
			<!-- InstanceBeginEditable name="body" -->
			<h1 class="title">EPOREDIESE 2012/13</h1>
			<br>
			<br>
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
						<td class="titolare">Andujar (Catania)</td>
						<td class="titolare">Spolli (Catania)</td>
						<td class="titolare">Hamsik (Napoli)</td>
						<td class="titolare">Di Natale (Udinese)</td>
					</tr>
					<tr>
						<td class="riserva">Frison (Catania)</td>
						<td class="titolare">Peluso (Juventus)</td>
						<td class="titolare">Kovacic (Inter)</td>
						<td class="titolare">El Shaarawy (Milan)</td>
					</tr>
					<tr>
						<td class="tribuna">Agazzi (Cagliari)</td>
						<td class="titolare">Marquinhos (Roma)</td>
						<td class="titolare">Pereyra (Udinese)</td>
						<td class="titolare">Pandev (Napoli)</td>
					</tr>
					<tr>
						<td class="tribuna"></td>
						<td class="riserva">Astori (Cagliari)</td>
						<td class="titolare">Boateng (Milan)</td>
						<td class="riserva">Amauri (Parma)</td>
					</tr>
					<tr>
						<td class="tribuna"></td>
						<td class="riserva">Rossettini (Cagliari)</td>
						<td class="riserva">Parolo (Parma)</td>
						<td class="riserva">Quagliarella (Juventus)</td>
					</tr>
					<tr>
						<td class="tribuna"></td>
						<td class="tribuna">Bovo (Genoa)</td>
						<td class="riserva">Cossu (Cagliari)</td>
						<td class="tribuna">Vucinic (Juventus)</td>
					</tr>
					<tr>
						<td class="tribuna"></td>
						<td class="tribuna">Campagnaro (Napoli)</td>
						<td class="tribuna">Isla (Juventus)</td>
						<td class="tribuna"></td>
					</tr>
					<tr>
						<td class="tribuna"></td>
						<td class="tribuna">Bellusci (Catania)</td>
						<td class="tribuna">Kone P. (Bologna)</td>
						<td class="tribuna"></td>
					</tr>
				</tbody>
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
