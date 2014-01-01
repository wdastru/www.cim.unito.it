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

<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->
		<h1 class="title">STATISTICHE</h1>
		<br />
		
		<?php 
			$handle = fopen($relocate_string . '777/allTimeStats.txt', 'r');
			$i = 0;
			while (!feof($handle)) {
				$stats[$i] = fgets($handle); 
				$i++;
			}
			fclose($handle);
			
			foreach($stats as $stat) {
				echo "<pre>$stat</pre>";
			}
		?>
		
	</div>
	<?php include $relocate_string . 'include/footer.inc.php'?>
	
	<script type='text/javascript'>toggleExtraScorers();</script>
</body>
<!-- InstanceEnd -->
</html>
