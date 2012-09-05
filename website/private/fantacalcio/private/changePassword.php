<?php
$relocate_string = "../";
require("../777/setupSquadre.inc.php");
include("../squadre.inc.php");

session_start();

if (isset($_POST['Squadra']))
	$Squadra = $_SESSION['Squadra']=$_POST['Squadra'];
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

if(isset($Modulo))
{	$modulo[0] = $Modulo;	}
	
include("../moduli.inc.php");
include("../777/gazFiles.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="../chromejs/chrome.js"></script>
<script type="text/javascript" src="../version.js"></script>
<!-- InstanceBeginEditable name="additional css" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="additional js" -->

<!-- InstanceEndEditable -->
</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
      <?php
	echo "<h1 class=\"title\">" . $longName[$Squadra] . "</h1>";
	
	echo "
	<div id=\"wrapper-changePassword\">
	<h2 class=\"modify\">CAMBIO PASSWORD</h2>
	<form action=\"../squadre/squadra.php?squadra=" . $Squadra . "\" method=\"post\" target=\"_self\">
	<fieldset class='noBorder'>
		<table>
			<tr>
				<td class=\"right\">vecchia password :</td><td><input type=\"password\" type=\"text\" name=\"oldPassword\" value=\"\" autocomplete=\"off\"/></td>
			</tr>
			<tr>
				<td class=\"right\">nuova password :</td><td><input type=\"password\" type=\"text\" name=\"newPassword\" value=\"\" autocomplete=\"off\"/></td>
			</tr>
			<tr>
				<td class=\"right\">ripeti password :</td><td><input type=\"password\" type=\"text\" name=\"ripetiPassword\" value=\"\" autocomplete=\"off\"/></td>
			</tr>
			<tr>
				<td colspan=\"2\">&nbsp;</td>
			</tr>
			<tr align=\"center\">
				<td colspan=\"2\"><input type=\"submit\" value=\"Invia\"/></td>
			</tr>
		</table>
	<input type=\"hidden\" name=\"Squadra\" value=\"" . $Squadra . "\" />
	<input type=\"hidden\" name=\"changePassword\" value=\"true\" />
	</fieldset>
	</form>
	</div>
	";
?>

	      <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
