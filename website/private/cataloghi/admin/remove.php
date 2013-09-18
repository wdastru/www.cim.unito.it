<?php
unset($hostname);
exec('hostname', $hostname);
if ($hostname[0] == "EPTADONE") {
    session_save_path('D:\Temp');
}
session_start();
$_SESSION['oldname_UK'] = $_POST['name_UK2remove'];
$_SESSION['oldname_IT'] = $_POST['name_IT2remove'];
$_SESSION['oldplace'] = $_POST['place2remove'];
$_SESSION['oldquantity'] = $_POST['quantity2remove'];
$_SESSION['oldlab'] = $_POST['lab2remove'];
$_SESSION['oldnote'] = $_POST['note2remove'];
$_SESSION['oldCAS'] = $_POST['CAS2remove'];
$_SESSION['oldphrase_H'] = $_POST['phrase_H2remove'];
$_SESSION['oldphrase_R'] = $_POST['phrase_R2remove'];
$_SESSION['oldlink'] = $_POST['link2remove'];
$localizer = "../../../";
?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
<meta name="generator"
	content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
<!-- InstanceBeginEditable name="title" -->
<title>Molecular Imaging Center - University of Torino</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="meta description" -->
<meta name="description"
	content="University of Torino. Website of the Molecular Imaging Center." />
<!-- InstanceEndEditable -->
<meta name="google-site-verification"
	content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
<meta http-equiv="Content-Type" content="text/php; charset=us-ascii" />
<meta name="keywords"
	content="NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia" />
<link href=<?php echo $localizer . "stylesheet.css"?> rel='stylesheet'
	type='text/css' />
<link href="../catalog.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="script.js"></script>
</head>
<link rel="icon" href="images/favicon.gif" type="image/gif" />
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
					<div id='band'>
						<h1 id='subsectionTitle'>
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
							<input type='hidden' name='removed' value='yes' /> <input
								type='submit' name='submit' value='Confirm' />
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
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br />
				Fax. Tel. Mail
			</p>
		</div>
		<div id='validators'>
			<p>
				<a href="http://validator.w3.org/check?uri=referer"> <img
					src="images/valid-xhtml10-blue_opt.png"
					alt="Valid XHtml 1.0 Transitional" height="31" width="88" /> </a>
			</p>
			<p>
				<a href="http://jigsaw.w3.org/css-validator/check?uri=referer"> <img
					style="border: 0; width: 88px; height: 31px"
					src="images/vcss-blue_opt.gif" alt="CSS Valido!" /> </a>
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
