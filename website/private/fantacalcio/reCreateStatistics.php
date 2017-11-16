<?php
$relocate_string = "./";

require_once $relocate_string . 'squadre.inc';
require_once $relocate_string . 'calendario.inc';
require_once $relocate_string . 'classifica.inc.php';

require_once $relocate_string . '777/gazFiles.inc.php';

unlink($relocate_string . '777/statistics.txt');

$statisticsHandle = fopen ( $relocate_string . '777/statistics.txt', 'w' );
fclose ( $statisticsHandle );

$firstTime = true;

foreach ($fileGaz as $file) {
	
	$nameTxt = strtok($file, '.');
	
	if ($firstTime == true) {
		echo "first time $nameTxt $giornate</br>";
		require $relocate_string . "include/readGazFile.inc.php";
		$firstTime = false;	
	} else {
		echo "$nameTxt $giornate</br>";
		require_once $relocate_string . 'include/readExistingStats.inc.php';
		require $relocate_string . "include/readGazFile.inc.php";
	}
	
	require_once $relocate_string . 'include/writeStats.inc.php';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
	<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
	<head>
		<title>Fantacalcio NMR</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo $relocate_string; ?>favicon.ico">
		<link rel="stylesheet" type="text/css"
		href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
		<link rel="stylesheet" type="text/css"
		href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=stylesheet.css&type=css" />
		<script type="text/javascript" src="<?php echo $relocate_string; ?>chromejs/chrome.js"></script>
		<script type="text/javascript" src="<?php echo $relocate_string; ?>version.js"></script>
		<!-- InstanceBeginEditable name="additional css" -->
		<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=<?php echo $relocate_string; ?>crawler.css&type=css" />
		<!-- InstanceEndEditable -->
		<!-- InstanceBeginEditable name="additional js" -->
		<script type="text/javascript"
		src="documentPreProcessor.php?document=<?php echo $relocate_string; ?>crawler.js&type=javascript"></script>
		<script type="text/javascript"
		src="documentPreProcessor.php?document=<?php echo $relocate_string; ?>javascript.js&type=javascript"></script>
		<!-- <script type="text/javascript"
		src="documentPreProcessor.php?document=<?php echo $relocate_string; ?>banner.js&type=javascript"></script> -->
		<!-- InstanceEndEditable -->

		<!-- InstanceBeginEditable name="jQuery" -->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<?php
			unset($hostname);
			exec('hostname', $hostname);
			if ($hostname[0] == "PESTODURO" || $hostname[0] == "VORTICE") {
				echo "<script type='text/javascript' src='" . $relocate_string . "jQuery/lib/jquery-1.10.1.min.js'></script>";	
			}
		 ?>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#avulseToggleButton').click(function () {
					$('#avulse').toggle('fast');
				});
			});
		</script>
		<!-- InstanceEndEditable -->
		
	</head>
	<!--<body onload="startBanner(1)">-->
		<body>
			
		<?php
			require $relocate_string . 'include/title.inc.php';
			require $relocate_string . 'include/menu.inc.php';
 			require $relocate_string . 'include/banner_slider.inc.php';
		 ?>

		<?php require $relocate_string . 'include/footer.inc.php'?>
		<!-- dragHelper for dragdrop.php -->
		<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
	</body>
	<!-- InstanceEnd -->
</html>
