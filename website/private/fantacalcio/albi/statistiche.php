<?php
$relocate_string = "../";
//require_once ("logger.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="<?php echo $relocate_string; ?>favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="<?php echo $relocate_string; ?>chromejs/chrome.js"></script>
<script type="text/javascript" src="<?php echo $relocate_string; ?>version.js"></script>
<!-- InstanceEndEditable -->

</head>
<!-- <body onresize="Count();"> -->
<body>

<?php	

//$files[0] = $relocate_string . 'website/private/fantacalcio/777/datiCampionato.txt';
//$files[1] = $relocate_string . 'website/private/fantacalcio/archivio/2008/datiCampionato0708.txt';
//$files[2] = $relocate_string . 'website/private/fantacalcio/archivio/2009/datiCampionato0809.txt';
//$files[3] = $relocate_string . 'website/private/fantacalcio/archivio/2010/datiCampionato0910.txt';
//$files[4] = $relocate_string . 'website/private/fantacalcio/archivio/2011/datiCampionato1011.txt';
//$files[5] = $relocate_string . 'website/private/fantacalcio/archivio/2012/datiCampionato1112.txt';
//$files[6] = $relocate_string . 'website/private/fantacalcio/archivio/2013/datiCampionato1213.txt';
//
//foreach ($files as $file) {
//	system("cat '$file'");
//	echo '<br />';
//}

?>

<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->
		<h1 class="title">STATISTICHE</h1>
		<br />
	</div>
	<?php include $relocate_string . 'include/footer.inc.php'?>
	
	<script type='text/javascript'>toggleExtraScorers();</script>
</body>
<!-- InstanceEnd -->
</html>
