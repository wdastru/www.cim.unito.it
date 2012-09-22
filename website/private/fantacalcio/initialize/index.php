<?php
	$relocate_string = "../";
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
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
		<p><center>
			<h2>INITIALIZE</h2>
		  </center>
		</p>
        <p>
        	<center>
	          <table width="450" border="0">
	              <tr>
	                  <td>
	                  	<center>
	                  		<form method="post" action="initializer.php">
						  		<input class='button' type='submit' value='Initialize' />
						  	</form>
	                    </center>
	                  </td>            
	              </tr>
	              <tr>
	                  <td>
	                  	<center>
	                  		<form method="post" action="chmod.php">
						  		<input class='button' type='submit' value='chmod 777 to 777/' />
						  	</form>
	                    </center>
	                  </td>            
	              </tr>
	          </table>
        	</center>
        </p>
        <br/>
          		
        <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
</body>
</html>
