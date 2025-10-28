
<?php

function html_apostrophes($arg) {
    return str_replace("'", "&#39", $arg);
}

unset($hostname);
exec('hostname', $hostname);
if ($hostname[0] == "EPTADONE") {
    session_save_path('D:\Temp');
}
session_start();

foreach ($_POST as $key => $value)
{
    $_POST[$key] = str_replace("\'", "'", $value);
}

$_POST['name_UK2remove']  = html_apostrophes($_POST['name_UK2remove']);          
$_POST['name_IT2remove']  = html_apostrophes($_POST['name_IT2remove']);        
$_POST['place2remove']    = html_apostrophes($_POST['place2remove']);       
$_POST['quantity2remove'] = html_apostrophes($_POST['quantity2remove']);        
$_POST['lab2remove']      = html_apostrophes($_POST['lab2remove']);
$_POST['note2remove']     = html_apostrophes($_POST['note2remove']);
$_POST['CAS2remove']      = html_apostrophes($_POST['CAS2remove']);
$_POST['phrase_H2remove'] = html_apostrophes($_POST['phrase_H2remove']);
$_POST['phrase_R2remove'] = html_apostrophes($_POST['phrase_R2remove']);
$_POST['link2remove']     = html_apostrophes($_POST['link2remove']);

$localizer = "../../../";
?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
<?php require $localizer . 'includes/head_const.inc.php'?>
<title>Molecular Imaging Center - University of Torino</title>
<meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
<link href="../catalog.css" rel='stylesheet' type='text/css' />
</head>
<body>
	<div id='section7'>
	<?php
	require ($localizer . 'includes/main-nav.php');
	?>
		<div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection0">
			<!-- InstanceEndEditable -->
			<div id='sidebar-narrow'>
				<div class='padding'>
				</div>
			</div>
			<div id='content-large'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							CHEMICALS CATALOG
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
					<p class='warning'>Do you really want to remove the following compound from the catalog?</p>
						<form name='remove' method='post' action='../index.php'>
							<table>
                                <tr>
                                    <td>Name (<img src="../en.png" alt="UK" />):</td>
                                    <td><?php echo $_POST['name_UK2remove']; ?></td>
                                </tr>
                                <tr>
                                    <td>Name (<img src="../it.jpg" alt="IT" />):</td>
                                    <td><?php echo $_POST['name_IT2remove']; ?></td>
                                </tr>
								<tr>
									<td>Place :</td>
									<td><?php echo $_POST['place2remove']; ?></td>
								</tr>
								<tr>
									<td>Quantity :</td>
									<td><?php echo $_POST['quantity2remove']; ?></td>
								</tr>
								<tr>
									<td>Laboratory :</td>
									<td><?php echo $_POST['lab2remove'];?></td>
								</tr>
                                <tr>
                                    <td>Note :</td>
                                    <td><?php echo $_POST['note2remove']; ?></td>
                                </tr>
                                <tr>
                                    <td>CAS n&deg; :</td>
                                    <td><?php echo $_POST['CAS2remove']; ?></td>
                                </tr>
                                <tr>
                                    <td>Risk statements (R) :</td>
                                    <td><?php echo $_POST['phrase_R2remove']; ?></td>
                                </tr>
								<tr>
									<td>Hazard statements (H) :</td>
									<td><?php echo $_POST['phrase_H2remove']; ?></td>
								</tr>
								<tr>
									<td>Link to the safety info :</td>
									<td><?php echo $_POST['link2remove']; ?></td>
								</tr>
							</table>
							<br/>
							<input type='hidden' name='removed' value='yes' />
					        <input type='hidden' name='oldname_UK'    value='<?php echo mysql_real_escape_string($_POST['name_UK2remove' ]); ?>'/>
                            <input type='hidden' name='oldname_IT'    value='<?php echo mysql_real_escape_string($_POST['name_IT2remove' ]); ?>'/>
                            <input type='hidden' name='oldplace'      value='<?php echo mysql_real_escape_string($_POST['place2remove'   ]); ?>'/>
                            <input type='hidden' name='oldquantity'   value='<?php echo mysql_real_escape_string($_POST['quantity2remove']); ?>'/>
                            <input type='hidden' name='oldlab'        value='<?php echo mysql_real_escape_string($_POST['lab2remove'     ]); ?>'/>
                            <input type='hidden' name='oldnote'       value='<?php echo mysql_real_escape_string($_POST['note2remove'    ]); ?>'/>
                            <input type='hidden' name='oldCAS'        value='<?php echo mysql_real_escape_string($_POST['CAS2remove'     ]); ?>'/>
                            <input type='hidden' name='oldphrase_H'   value='<?php echo mysql_real_escape_string($_POST['phrase_H2remove']); ?>'/>
                            <input type='hidden' name='oldphrase_R'   value='<?php echo mysql_real_escape_string($_POST['phrase_R2remove']); ?>'/>
                            <input type='hidden' name='oldlink'       value='<?php echo mysql_real_escape_string($_POST['link2remove'    ]); ?>'/> 
							<input type='submit' name='submit' value='Confirm' />
						</form>
						<!-- InstanceEndEditable name="subsection content" -->
					</div>
				</div>
			</div>
			<!-- subsection closing -->
		</div>
		<!-- subsection closing -->
		<div id='after'></div>
		<div id='footer'>
			<p>
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
				Fax. Tel. Mail
			</p>
		</div>
		
		<!-- section closing -->
	</div>
	<!-- section closing -->
	<script type="text/javascript">
			//<![CDATA[
			changeSideNavStyles();
			//]]>
		</script>
	<!-- InstanceEnd -->

</body>
</html>
