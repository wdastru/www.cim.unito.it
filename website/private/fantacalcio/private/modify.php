<?php
$relocate_string = "../";
require("../777/setupSquadre.inc.php");
require("../squadre.inc");
//include "../dBug.php";

session_start();

if (isset($_GET['squadra']))
	$Squadra = $_SESSION['Squadra']=$_GET['squadra'];
if (isset($_POST['Modulo']))
	$Modulo = $_SESSION['Modulo']=$_POST['Modulo'];
if (isset($_POST['Telefono']))
	$Telefono = $_SESSION['Telefono']=$_POST['Telefono'];
if (isset($_POST['Capitale']))
	$Capitale = $_SESSION['Capitale']=$_POST['Capitale'];
if (isset($_POST['Password']))
	$Password = $_POST['Password'];
else
	$Password = "";

$modulo = array();
if(isset($Modulo))
	array_push($modulo, $Modulo);

require("../moduli.inc.php");
require("../777/gazFiles.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="../chromejs/chrome.js"></script>
<script type="text/javascript" src="../version.js"></script>
<!-- InstanceBeginEditable name="additional css" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="additional js" -->
<script type="text/javascript" src="../documentPreProcessor.php?document=javascript.js&type=javascript"></script>
<!-- InstanceEndEditable -->
</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
      <?php
    $filename=$relocate_string . "777//filesGazzetta//" . $fileGaz[count($fileGaz)-1];
    
	//echo $filename."<br>";
	
	if(file_exists($filename))
	{
		$handle=fopen($filename, 'r');
		$i=0;
		while(!feof($handle))
		{
			$tmpStr=substr(trim(fgets($handle)), 4);
			$allPlayers[$i][0]=strtok($tmpStr,"\t");	// nome
			$allPlayers[$i][1]=strtok("\t");			// squadra
			$allPlayers[$i][2]=strtok("\t");			// ruolo
			//echo $allPlayers[$i][0]." - ";
			//echo $allPlayers[$i][1]." - ";
			//echo $allPlayers[$i][2]."<br>";
			$i++;	
		}		
		
		$allPlayerCount=$i-1;
	
		fclose($handle);
	}
	else
		exit ("<p>" . $filename . " non esiste!</p><p>Dillo al tuo amministratore del sito!!</p>");
	
	$filename=$relocate_string . "777//formazioni//" . $Squadra . ".txt";
	if(file_exists($filename)) // il file della squadra esiste quindi legge quello
	{
		$handle=fopen($filename, 'r');
		
		//echo $filename."<br>";
		
		if (!isset($modulo[0]))
			array_push($modulo, trim(fgets($handle)));
		else 
			$trash=fgets($handle); // se il modulo e' settato, devo lo stesso leggere la prima riga (il modulo appunto)

		array_push($modulo, 1);
		array_push($modulo, substr($modulo[0], 0, 1));
		array_push($modulo, substr($modulo[0], 4, 1));
		array_push($modulo, substr($modulo[0], 8, 1));
		
		$trash=fgets($handle); // legge la riga dei titolari (anche se poi non viene usata)
		$trash=fgets($handle); // legge la riga delle riserve (anche se poi non viene usata)
		
		for ($j=0; $j<4; $j++)
		{
			for ($i=0; $i<$ruolo[$j][0]; $i++) {
				$giocatore[$j][$i] = trim(fgets($handle)); // nome
				//echo $giocatore[$j][$i]."<br>";
			}		
		}
		
		$capitale = trim(fgets($handle));
		$telefono = trim(fgets($handle));
		
		fclose($handle);
	} else if (isset($Modulo)) { // il file squadra non esiste, ma e' gia' stato scelto un modulo
		$modulo[1] = 1;
		$modulo[2] = substr($modulo[0], 0, 1);
		$modulo[3] = substr($modulo[0], 4, 1);
		$modulo[4] = substr($modulo[0], 8, 1);

		for ($j=0;$j<4; $j++)
		{
			for ($i=0;$i<$ruolo[$j][0]; $i++)
				$giocatore[$j][$i] = ""; // nome
		}
	} else { // il file squadra non esiste ed e' la prima volta che si accede alla pagina (4 - 4 - 2 di default)
		$modulo[0] = "4 - 4 - 2";
		$modulo[1] = 1;
		$modulo[2] = substr($modulo[0], 0, 1);
		$modulo[3] = substr($modulo[0], 4, 1);
		$modulo[4] = substr($modulo[0], 8, 1);

		for ($j=0;$j<4; $j++)
		{
			for ($i=0;$i<$ruolo[$j][0]; $i++)
				$giocatore[$j][$i] = ""; // nome
		}
	}
	
	echo "<h1 class='title'>" . $longName[$Squadra] . "</h1><br />";
	
	echo "
	<div id='wrapper-moduli'>
	<form action='modify.php?squadra=$Squadra' method='post' target='_self'>
	<fieldset class='noBorder'>";
	$checked="";
	echo "
	<h2 class='modify'>MODULO</h2>
	<table id='moduli'>
	<tr>";
	for ($i=0; $i<7; $i++)
	{	
		echo "<td>";
		if ($moduli[$i] == $modulo[0])
		{
			$checked="checked";
			echo "	<input type='radio' name='Modulo' value='" . $moduli[$i] . "' checked='" . $checked . "'/>";
			$checked="";
		}
		else
		{	echo "	<input type='radio' name='Modulo' value='" . $moduli[$i] . "'/>&nbsp;";	}
		echo "</td>";
	}
	echo "
	</tr>
	<tr>";
	for ($i=0; $i<7; $i++)
	{	
		echo "<td>" . $moduli[$i] . "</td>";
	}
	echo "
	</tr>
	</table>
	<input type='hidden' name='Password' value='" . $Password . "' />
	<br/>
	<br/>
	<input class='button' type='submit' value='Invia'/>
	</fieldset>
	</form>
	</div>
	
	<br/>
	<br/>
	
	<form action='../squadre/squadra.php?squadra=" . $Squadra . "' method='post' target='_self'>";

	$t=0;
	
	echo "
	<div id='wrapper-ruoli'>
	<h2 class='modify'>GESTIONE ROSA</h2>
	<div>Giocatore non presente nelle liste della Gazzetta : <input id='txtInput' type='text' onkeyup='AddListItem(this)'/></div>";
	
	for ($i=0; $i<4; $i++) // loop sui ruoli
	{
		echo "
		<div id='ruolo" . $i . "'>
		<h2 class='modify'>" . $ruolo[$i][2] . "</h2>";
		for ($j=0; $j<$ruolo[$i][0]; $j++) // loop sui giocatori del ruolo
		{
			echo "
			<p>
			<select id='select" . $t . "' name='player" . $t . "'>";
			$found = false;
			for ($k=0; $k<$allPlayerCount; $k++) // loop su tutti i giocatori del file gazzetta
			{
				if($ruolo[$i][1] == $allPlayers[$k][2]) // mostra solo quelli con il ruolo giusto
				{
					if ( $allPlayers[$k][0] == $giocatore[$i][$j] ) // se il giocatore coincide con quello trovato nel file
					{
						echo "<option value=\"" . $allPlayers[$k][0] . "\" selected='selected'>" . $allPlayers[$k][0] . "</option> ";
						$found = true;
					} else {
						echo "<option value=\"" . $allPlayers[$k][0] . "\">" . $allPlayers[$k][0] . "</option> ";
					}
				}
				
			}
			if (!$found)
				echo "<option value=\"" . $giocatore[$i][$j] . "\" selected='selected'>" . $giocatore[$i][$j] . "</option> ";
			echo "</select>
			&nbsp";
			
			$t++;
	
			if($j < $modulo[$i+1])
			{
				echo"
				<span class='titolare'>titolare</span></p>";
			}
			else if( $i != 0 && $j >= $modulo[$i+1] && $j < $modulo[$i+1]+2 )
			{
				echo"
				<span class='riserva'>riserva</span></p>";
			}
			else if( $i == 0 && $j >= $modulo[$i+1] && $j < $modulo[$i+1]+1 )
			{
				echo"
				<span class='riserva'>riserva</span></p>";
			}
			else
			{
				echo"
				<span class='tribuna'>tribuna</span></p>";
			}
		}
		echo "</div>";
	}
	
	echo " 	
	<br/>
	<br/>
	
	<table id='gestRosaSend'>
		<tr>
			<td class='right'>capitale :</td><td><input type='text' name='Capitale' value='" . $capitale . "'/></td>
		</tr>
		<tr>
			<td class='right'>telefono :</td><td><input type='text' name='Telefono' value='" . $telefono . "'/></td>
		</tr>
		<tr>
			<td class='right'>password :</td><td><input type='password' name='Password' value=''  autocomplete='off'/></td>
		</tr>
	</table>
	<br/>
	<br/>
	<input type='hidden' name='Modulo' value='" . $modulo[0] . "' />
	<input type='hidden' name='changeTeam' value='true' />
	<input type='hidden' name='fromModifyPhp' value='1' />
	<input class='button' type='submit' value='Invia'/>
	</div>
	</form>
		
	<br/>
	<br/>
	";
?>

	      <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
