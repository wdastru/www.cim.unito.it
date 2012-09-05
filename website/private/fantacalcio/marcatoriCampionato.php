<?php
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
<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
	<link rel="stylesheet" type="text/css"
		href="documentPreProcessor.php?document=stylesheet.css&type=css" />
	<script type="text/javascript" src="chromejs/chrome.js"></script>
	<script type="text/javascript" src="version.js"></script>
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
		<h1 class="title">MARCATORI CAMPIONATO</h1>
		<table class="marcatori">
			<tr>
				<th align="center">Goal</th>
				<th align="left">Marcatore</th>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			
			
			
			
			
			
			
			
			
			
			
			
			<?php
			//include "dBug.php";

			$datiCampionatoFile = $relocate_string . "777/datiCampionato.txt";
			if (!file_exists($relocate_string . $datiCampionatoFile)) {
				require $relocate_string . 'createDatiCampionato.php';
			}

			require $relocate_string . 'readDatiCampionato.php';

			$marcatoriCampionato = array();

			$counter = 0; // contatote marcatori totale
			for($t=0; $t<4; $t++)   //A&R
			{
				for($k=0; $k<7; $k++)   // giornate
				{
					for($j=0; $j<4; $j++)   // partita
					{
						$i=0; // contatore marcatori locale
						while( 1 )
						{
							if (isset($super[3][$k][$j][$t][$i])) {
								if ( $super[3][$k][$j][$t][$i] == '' )
								{
									break;
								} else {
									$marcatoriCampionato[$counter] = $super[3][$k][$j][$t][$i];
								}
								$i++;
								$counter++;
							} else {
								break;
							}
						}
					}
				}
			}
			
			$marcatoriCampionato = array_count_values($marcatoriCampionato);
			array_multisort($marcatoriCampionato, SORT_DESC);

			$i = 0;
			foreach ($marcatoriCampionato as $key => $value) {
				if ($i % 2) {
					echo " <tr class=\"odd\">";
					echo "   <td class=\"center\">" . $value . "</td>";
					echo "   <td>" . $key . "</td>";
					echo "   </tr>";
				}
				else {
					echo "   <tr class=\"even\">";
					echo "   <td class=\"center\">" . $value . "</td>";
					echo "   <td>" . $key . "</td>";
					echo"   </tr>";
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
</body>
<!-- InstanceEnd -->
</html>
