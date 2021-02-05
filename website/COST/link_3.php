<?php
$localizer = "../";
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
<link href="cost.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="cost.js"></script>
</head>

<body>
<?php require_once($localizer . 'includes/analyticstracking.php') ?>
	<div id='section5'>




	<?php
	require ($localizer . 'includes/main-nav.php');
	?>
		<div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection3">
			<!-- InstanceEndEditable -->
			<div id='sidebar'>
				<div class='padding'>
					<dl id='list'>
						<!-- -->
						<dt class='subsection_link' id='section5-subsection1'>
							<a href='<?php echo $localizer . "COST/link_1.php"?>'>link 1</a>
						</dt>
						<dt class='subsection_link' id='section5-subsection2'>
							<a href='<?php echo $localizer . "COST/link_2.php"?>'>link 2</a>
						</dt>
						<dt class='subsection_link' id='section5-subsection3'>
							<a href='<?php echo $localizer . "COST/link_3.php"?>'>link 3</a>
						</dt>
						<!-- -->
					</dl>
				</div>
			</div>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>COST Action TD1004</h1>
					</div>
					<div class='paddingInner'>
						<h2>page 3</h2>
						<br />
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
					alt="Valid XHtml 1.0 Transitional" height="31" width="88" />
				</a>
			</p>
			<p>
				<a href="http://jigsaw.w3.org/css-validator/check?uri=referer"> <img
					style="border: 0; width: 88px; height: 31px"
					src="images/vcss-blue_opt.gif" alt="CSS Valido!" />
				</a>
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
