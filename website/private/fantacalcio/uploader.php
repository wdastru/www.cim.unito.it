<?php
session_start();
$relocate_string = "./";
require_once ('logger.php');
require('777/setupSquadre.inc.php');

if (isset($_POST['submitted']))
{
	MySingleton::writeToLog('$_POST["submitted"] = ' . $_POST['submitted'], $relocate_string . "777/logs/uploader.log");
	$submitted = $_POST['submitted'];
	if ($submitted == 1) // da uploader.php
	{
		if ( md5($_POST['Password']) == $ADMIN['patelavache'] || md5($_POST['Password']) == $ADMIN['real'] || md5($_POST['Password']) == $ADMIN['atletico'] || md5($_POST['Password']) == $ADMIN['ciofeca'] || md5($_POST['Password']) == $ADMIN['bradipo'] || md5($_POST['Password']) == $ADMIN['eporediese'] || md5($_POST['Password']) == $ADMIN['fedora'] || md5($_POST['Password']) == $ADMIN['real'] || md5($_POST['Password']) == $ADMIN['lokomotiv'] )
		{
			if ($_FILES["file1"]["name"] != "")
			{
				move_uploaded_file($_FILES["file1"]["tmp_name"], $_POST['dir'] . $_FILES["file1"]["name"]);
				$_SESSION['uploaded_file'] = $_FILES["file1"]["name"];
				$submitted = "0";

				$where = "Location: ".$relocate_string."excel/fromExcel2Txt.php";
				header($where);
			}
			else
			{
				$where = "Location: ".$relocate_string."errors/error.php?error=missingFile";
				header($where);
			}
		}
		else
		{
			$where = "Location: ".$relocate_string."errors/error.php?error=wrongPass";
			header($where);
		}
		$submitted = "0";
	}
}
else
{
	MySingleton::writeToLog('$_POST["submitted"] is not set.', $relocate_string . "777/logs/uploader.log");
	$submitted = 0;
}
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
	<?php
	echo "
	<form action='uploader.php' method='post' enctype='multipart/form-data'>
		<label for='file1'>Filename:</label>
		<input type='file' name='file1' id='file1' />
		<input type='hidden' name='dir' value='" . $relocate_string;
	echo "777/filesGazzetta/' />
		<br /><br /> 
		<input type='hidden' name='submitted' value='1' />
		<input type='submit' name='submit' value='Submit' />
	<input type='Password' name='Password' value='";
	if (isset($_POST['Password']))
	echo $_POST['Password'];
	echo "' />
	</form>";
	?>
		<!-- InstanceEndEditable -->
	</div>

	<?php include $relocate_string . 'include/footer.inc.php'?>
	<!-- dragHelper for dragdrop.php -->
	<div id='dragHelper' style="position: absolute; visibility: hidden;"></div>
</body>
<!-- InstanceEnd -->
</html>
