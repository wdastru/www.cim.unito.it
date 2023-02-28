<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
    <?php require $localizer . 'includes/head_const.inc.php'?>
    <title>Molecular Imaging Center - University of Torino - Private
	section</title>
<meta name="description"
	content="University of Torino. Website of the Molecular Imaging Center.">
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
				<div class='padding'></div>
			</div>
			<div id='content-large'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							PRIVATE AREA
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->
						<p>
							<a class='link'
								href="<?php echo $localizer; ?>private/cataloghi/index.php">Chemicals
								catalog</a>
						</p>
						<p>
							<a class='link'
								href="<?php echo $localizer; ?>private/prenotazioni/index.php">Instrument
								booking</a>
						</p>
						<p>
							<a class='link'
								href="<?php echo $localizer; ?>private/Enzo/index.php">Enzo's
								group</a>
						</p>
						<p>
							<a class='link'
								href="<?php echo $localizer; ?>private/INTA/index.php">INTA
								project</a>
						</p>
						<p>
							<a class='link'
								href="<?php echo $localizer; ?>private/passwords/index.php">Authors'
								Credentials</a>
						</p>
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
			<?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
		</div>

		<!-- section closing -->
	</div>
	<!-- section closing -->
	<script>
			//<![CDATA[
			changeSideNavStyles();
			//]]>
		</script>
	<!-- InstanceEnd -->
</body>
</html>
