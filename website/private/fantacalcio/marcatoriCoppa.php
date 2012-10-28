<?php
//require_once 'dBug.php';
$relocate_string = "./";
require_once ("logger.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="<?php $relocate_string; ?>favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="<?php $relocate_string; ?>documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="<?php $relocate_string; ?>documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="<?php $relocate_string; ?>chromejs/chrome.js"></script>
	<script type="text/javascript" src="<?php $relocate_string; ?>version.js"></script>
	<!-- InstanceBeginEditable name="jQuery" -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $relocate_string; ?>menu_jquery.js"></script>		
	<!-- InstanceBeginEditable name="additional css" -->
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="additional js" -->
	<script type="text/javascript" src="<?php $relocate_string; ?>marcatori.js"></script>
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
		<h1 class="title">MARCATORI COPPA</h1>
		<br />
		<div class="button" id='showAll' onclick=toggleExtraScorers();>
			Mostra tutti
		</div>
		<br />
		<table class="marcatori">
			<tr>
				<th align="center">Goal</th>
				<th align="left">Marcatore</th>
			</tr>
			<?php

			$datiCoppaFile = $relocate_string . "777/datiCoppa.txt";
			if (!file_exists($relocate_string . $datiCoppaFile)) {
				require $relocate_string . 'createDatiCoppa.php';
			}

			require $relocate_string . 'readDatiCoppa.php';
			
			$marcatoriCoppa = array();

			$totMarcatori = 0; // contatore globale
			
			for($q=0; $q<12; $q++)
			{
				$i=0;
				while( 1 )
				{
					if (isset($superCoppa[3][$q][$i])) {
						if ( $superCoppa[3][$q][$i] == '' )
						{
							break;
						} else {
							$marcatoriCoppa[$totMarcatori] = $superCoppa[3][$q][$i];
							$totMarcatori++;
						}
						$i++;
					} else {
						break;
					}
				}
			}

			for($s=0; $s<4; $s++)
			{
				$i=0;
				while( 1 )
				{
					if (isset($superCoppa[3][12+$s][$i])) {
						if ( $superCoppa[3][12+$s][$i] == '' )
						{
							break;
						} else {
							$marcatoriCoppa[$totMarcatori] = $superCoppa[3][12+$s][$i];
							$totMarcatori++;
						}
						$i++;
					} else {
						break;
					}
				}
			}

			for($f=0; $f<4; $f++)
			{
				$i=0;
				while( 1 )
				{
					if (isset($superCoppa[3][16+$f][$i])) {
						if ( $superCoppa[3][16+$f][$i] == '' )
						{
							break;
						} else {
							$marcatoriCoppa[$totMarcatori] = $superCoppa[3][16+$s][$i];
							$totMarcatori++;
						}
						$i++;
					} else {
						break;
					}
				}
			}

			$marcatoriCoppa = array_count_values($marcatoriCoppa);
			array_multisort($marcatoriCoppa, SORT_DESC);

			$i = 0;
			foreach ($marcatoriCoppa as $key => $value) {
				
				if ($key == "" || $key == "-") {
					continue;
				}

				$display = 'table-row';
				
				if ($i % 2) {
					echo " <tr class='odd' style='display:$display;'>";
					echo "   <td class='center'>" . $value . "</td>";
					echo "   <td>" . $key . "</td>";
					echo " </tr>";
				}
				else {
					echo " <tr class='even' style='display:$display;'>";
					echo "   <td class='center'>" . $value . "</td>";
					echo "   <td>" . $key . "</td>";
					echo"  </tr>";
				}
				$i++;
			}
			?>
		</table>

		<!-- InstanceEndEditable -->
	</div>

	<?php include $relocate_string . 'include/footer.inc.php'?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
	
    <script type='text/javascript'>toggleExtraScorers();</script>

</body>
<!-- InstanceEnd -->
</html>
