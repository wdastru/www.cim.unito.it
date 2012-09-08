<?php
	$relocate_string = "../";
	require('errors.inc.php');
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
		<p><center>
			<h2>ERROR</h2>
		  </center></p>
          <p><center>
            <table width="450" border="0">
                <tr>
                    <td><center>
						<?php echo $error[$_GET['error']];?>
                        </center></td>            
                </tr>
            </table>
          </center></p>
          <br/>
          
          <?php if (isset($_GET['returnFromError'])) {
          		echo "<input class='button' type='button' value='Back' onclick='window.location.href=\"" . $_GET['returnFromError'] . "\"' />";
          	} else {
           		echo "<input class='button' type='button' value='Back' onclick='history.back();' />";
			}
		  ?>
		
        <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
