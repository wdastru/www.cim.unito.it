<?php
    require_once __DIR__ . '/config.inc.php';
    $activeSection = 'partners';
	$activeSubsection = 'partners';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
    <title>Molecular Imaging Center - University of Torino - Partners</title>
</head>
<body>
	<div id='section4'>
		<?php include 'includes/menu.php'; ?>
		<?php include 'includes/header.php'; ?>
		<div class="main-area">
			<?php include SITE_PATH . 'includes/partners-side-nav.php'; ?>
			<?php include SITE_PATH . 'includes/partners-side-nav-mobile.php'; ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							Partners
						</h1>
					</div>
					<div class='paddingInner'>
						<p>The Molecular Imaging Center has long-standing partnership with
							several national and international institutions, as well as with
							companies working in the field of molecular imaging probes,
							contrast agents and imaging instrumentations.</p>
					</div>
				</div>
			</div>
			<div id='after'></div>
			<div id='footer'>
				<p>
					Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY<br>
					Fax. Tel. Mail
				</p>
			<?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php'; ?>
			<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
			</div>
		</div>
		<!-- subsection closing -->
	</div>
	<!-- section closing -->
	<script>
//
<![CDATA[
changeSideNavStyles();
//]]>
</script>
</body>
</html>
