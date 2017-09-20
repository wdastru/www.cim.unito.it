<?php 
session_start();

$relocate_string = "./";

require('squadre.inc');
require_once $relocate_string . 'include/updateGazFiles.inc.php';
require('777/gazFiles.inc.php');

$filenameStats="777//statistics.txt";
require('statisticsAllPlayerRead.php'); // definito $allPlayerStats

require('playersInTeamsReader.php'); // definito giocatore[squadra:8][index:25]
require('playersRepeated.php'); // controllla la presenza di giocatori ripetuti in più squadre

if ($_GET['squadra'] != '')
{
	$_SESSION['Squadra']=$_GET['squadra'];
	$Squadra=$_SESSION['Squadra'];
} else {
	$Squadra='Squadra non definita!';
	$nomeEsteso[$Squadra]=$Squadra;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR</title>
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
	<script type="text/javascript"
		src="documentPreProcessor.php?document=javascript.js&type=javascript"></script>
	<script type="text/javascript"
		src="documentPreProcessor.php?document=sorter.js&type=javascript"></script>
	<script type="text/javascript" src="dragdrop/ajax.js"></script>
	<!-- InstanceEndEditable -->

</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
	<!-- InstanceBeginEditable name="hiddenBox" -->
	<div id='hiddenOfferBox' style='visibility: hidden'>
		<br /> <br />
		<form method='post' id='formOffer' action='mercato/newOffer.php?squadra=<?php echo $_GET['squadra']; ?>'>
			<fieldset class='noBorder'>
				<div id='hiddenBoxTitleBox'>
					<span id='offertaBoxMainTitle'><?php echo strtoupper($longName[$_GET['squadra']]); ?></span>
				</div>
				<br /> <br />
				<div class='hiddenBoxSubTitleBox'>
					<span class='offertaBoxTitle'>OFFERTA </span>
				</div>
				<br /> <br /> Giocatore : 
				<input type='text' name='Offerta_gio_in' value='' /> 
				<br /> <br /> Ruolo : 
				<input type='text' name='Offerta_ruo_in' value='' /> 
				<br /> <br /> Squadra :
				<input type='text' name='Offerta_squ_in' value='' /> 
				<br /> <br />Quotazione : 
				<input type='text' id='bidField' name='Offerta_quo_in' value='' onmouseup='enableSendButton();' onkeyup='enableSendButton();' /> 
				<br /> <br /> <br />
				<div class='hiddenBoxSubTitleBox'>
					<span class='offertaBoxTitle'>GIOCATORE TAGLIATO </span>
				</div>
				<br /> <br /> Giocatore : 
				<select id='playerOutField' name='Offerta_gio_out' onmouseup='enableSendButton();' onkeyup='enableSendButton();' onchange='getSelectedPlayer();'>
					<option></option>
					<?php
					for ($i=0; $i<count($allPlayerStats); $i++)
					{
						if ($allPlayerStats[$i][0] != '')
						{
							for ($k=0; $k<25; $k++)
							{
								if (strtoupper($allPlayerStats[$i][0]) == strtoupper($giocatore[$idxSquadra[$Squadra]][$k]))
								{
									echo "<option>" . $allPlayerStats[$i][0] . "</option>";
								}
							}
						}
					}
					?>
				</select> 
				<br /> <br /> Ruolo : 
				<input type='text' id='roleOutField' name='Offerta_ruo_out' value='' onmouseup='enableSendButton();' onkeyup='enableSendButton();' /> 
				<br /> <br /> Squadra : 
				<input type='text' id='teamOutField' name='Offerta_squ_out' value='' onmouseup='enableSendButton();' onkeyup='enableSendButton();' /> 
				<br /> <br /> <br />
				<div class='hiddenBoxSubTitleBox'>
					<span class='offertaBoxTitle'>PASSWORDS </span>
				</div>
				<br /> <br /> 
				<span class='offertaBoxTitle'>Password di squadra :</span>
				<input type='password' id='passwordFieldTeam' name="PasswordTeam" value='' autocomplete='off' onmouseup='enableSendButton();' onkeyup='enableSendButton();' /> 
				<br /> <br /> 
				<span class='offertaBoxTitle'>Password per offerta :</span> 
				<input type='password' id='passwordFieldOffer' name="PasswordOffer" value='' autocomplete='off' onmouseup='enableSendButton();' onkeyup='enableSendButton();' /> 
				<br /> <br /> 
				<span class='offertaBoxTitle'>Ripeti password :</span> 
				<input type='password' id='repeatPasswordFieldOffer' name="RepeatPasswordOffer" value='' autocomplete='off' onmouseup='enableSendButton();' onkeyup='enableSendButton();' /> 
				<br /> <br /> <br /> 
				<input class='button' type='button' id='sendButton' value='Send' onclick='sendOffer();' />
				<input type="hidden" id="returnFromError" name="returnFromError" value="" />
				<input class='button' type='button' value='Close' onclick='hideOfferBox();' /> <input class='button' type='button' value='Reset' onclick='offerBoxResetFields();' /> 
			</fieldset>
		</form>
	</div>
	<!-- InstanceEndEditable -->
	<div id="main">
		<!-- InstanceBeginEditable name="body" -->

		<br />
		<h1 class=title>
		<?php echo $longName[$Squadra]; ?>
		</h1>
		<br /> <br />
		<div id='choosePlayersDiv'>
			<div class='playersDiv' onclick='togglePlayers("por")'>Por</div>
			<div class='playersDiv' onclick='togglePlayers("dif")'>Dif</div>
			<div class='playersDiv' onclick='togglePlayers("cen")'>Cen</div>
			<div class='playersDiv' onclick='togglePlayers("att")'>Att</div>
		</div>
		<br />
		<!-- <div id='sortingWarningBox'>Sorting ... </div> -->
		<br />
		<?php
		$role[0] = 'P';
		$role[1] = 'D';
		$role[2] = 'C';
		$role[3] = 'A';
		$id[0] = 'por';
		$id[1] = 'dif';
		$id[2] = 'cen';
		$id[3] = 'att';
		$headerFirstContent[0] = 'PORTIERI';
		$headerFirstContent[1] = 'DIFENSORI';
		$headerFirstContent[2] = 'CENTROCAMPISTI';
		$headerFirstContent[3] = 'ATTACCANTI';

		for ($k=0; $k<4; $k++) // ruolo
		{
			echo "
		<div class='playersTableWrap' id='" . $id[$k] . "'>
			<div class='headerContainer' id='headerContainer" . $k . "'>
				<div class='headerFirstRow'>" . $headerFirstContent[$k] . "</div>
				<div class='headerSecondRow'>
					<div class='header0' onclick='sortByColumn(\"0\",\"" .$k . "\");'>Nome</div>
					<div class='header1' onclick='sortByColumn(\"1\",\"" .$k . "\");'>Squadra</div>
					<div class='header2' onclick='sortByColumn(\"2\",\"" .$k . "\");'>Stato</div>
					<div class='header3' onclick='sortByColumn(\"3\",\"" .$k . "\");'>Giocate</div>
					<div class='header4' onclick='sortByColumn(\"4\",\"" .$k . "\");'>Media fantavoto</div>
					<div class='header5' onclick='sortByColumn(\"5\",\"" .$k . "\");'>Media voto</div>
					<div class='header6' onclick='sortByColumn(\"6\",\"" .$k . "\");'>Goal fatti/subiti</div>	
					<div class='header7'>&nbsp;</div>
				</div>
				<div class='headerThirdRow'>
					<div id='arrowColumn" . $k . "_0' class='header0' onclick='sortByColumn(\"0\",\"" .$k . "\");'></div>
				    <div id='arrowColumn" . $k . "_1' class='header1' onclick='sortByColumn(\"1\",\"" .$k . "\");'></div> 
				    <div id='arrowColumn" . $k . "_2' class='header2' onclick='sortByColumn(\"2\",\"" .$k . "\");'></div>
				    <div id='arrowColumn" . $k . "_3' class='header3' onclick='sortByColumn(\"3\",\"" .$k . "\");'></div> 
				    <div id='arrowColumn" . $k . "_4' class='header4' onclick='sortByColumn(\"4\",\"" .$k . "\");'></div> 
				    <div id='arrowColumn" . $k . "_5' class='header5' onclick='sortByColumn(\"5\",\"" .$k . "\");'></div> 
				    <div id='arrowColumn" . $k . "_6' class='header6' onclick='sortByColumn(\"6\",\"" .$k . "\");'></div> 
					<div id='arrowColumn" . $k . "_7' class='header7' onclick='sortByColumn(\"7\",\"" .$k . "\");'></div> 
				</div>					
			</div>
			<div class='scrollTableContainer'>
				<table class='scrollTable' width='100%' cellspacing='0' cellpadding='0' border='0'>
					<tbody class='scrollContent'>";
			$row_counter = -1;
			
			for ($i=0; $i<count($allPlayerStats); $i++)
			{
				if ($allPlayerStats[$i][2] == $role[$k])
				{
					
					//print_r($allPlayerStats[$i]);
					//echo "<br/>";
					
					$row_counter = $row_counter + 1;
					if ($i % 2)
						echo "<tr class='normalRow' id='offer_" . $k . "_" . $row_counter . "'>";
					else
						echo "<tr class='alternateRow' id='offer_" . $k . "_" . $row_counter . "'>";
					
					echo "	<td class='bodyColumn0'>" . $allPlayerStats[$i][0] . "</td>
							<td class='bodyColumn1'>" . $allPlayerStats[$i][1] . "</td>";

					$libero = true;
					for ($t=0; $t<8; $t++)
					{
						//echo "<span>### " . $t . " ###</span><br/>";
						for ($j=0; $j<25; $j++)
						{
							//print_r($giocatore[$t][$j]);
							//echo "<br/>";
							
							if($giocatore[$t][$j]==$allPlayerStats[$i][0]){
								echo "<td class='bodyColumn2 owned'>" . $giocatore[$t][25] . "</td>";
								$libero = false;
								break;
							}
						}
					}

					if ($libero)
					echo "<td class='bodyColumn2 free'>libero</td>";

					echo "<td class='bodyColumn3'>" . $allPlayerStats[$i][4] . 
					"</td><td class='bodyColumn4'>" . $allPlayerStats[$i][5] . 
					"</td><td class='bodyColumn5'>" . $allPlayerStats[$i][6] . 
					"</td><td class='bodyColumn6'>" . $allPlayerStats[$i][7] . 
					"</td><td class='bodyColumn7'>";

					if ($libero)
					{
						echo "<input class='button' onclick='offerClicked(" . $k . ", " . $row_counter . ");' type='submit' value='Offri' ";
							
						if ($Squadra=='Squadra non definita!')
						{
							echo"disabled='disabled'";
						}
						echo "/>";
					}
					else
					{
						echo "&nbsp;";
					}

					echo "</td></tr>";
				}
			}

			echo "
					</tbody>
				</table>
			</div>
		</div>";		
		}

		/* TEMP */
		?>
		<br /> <br />
		<script type="text/javascript">readData();</script>
		<script type="text/javascript">enableSendButton();</script>
		<!-- InstanceEndEditable -->
	</div>

	<?php include $relocate_string . 'include/footer.inc.php'?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
