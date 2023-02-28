<?php
$localizer = "../../";
?>
<!DOCTYPE html>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
<head>
<title>BNCT therapy | GENINATTI Lab</title>
	<?php require ($localizer . 'includes/head_const.inc.php'); ?>
	<?php require ($localizer . 'PI/Geninatti/includes/head_const_geninatti.php'); ?>
</head>
<body class="homepage">
	<div id="page-wrapper">
		<!-- Header -->
		<div id="header-wrapper">
			<!-- logo unito -->
			<a href="http://www.unito.it" title="University of Torino"
				target="_blank" id="unito-logo" style="text-decoration: none;">
				<div class="unito-logo-container"></div>
			</a> <a href="http://www.cim.unito.it"
				title="Molecular Imaging Center" target="_blank"
				style="text-decoration: none;">
				<div class="cim-logo-container"></div>
			</a>
			<div class="container">
				<!-- Header -->
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
						<!-- Logo -->
						<?php require ($localizer . 'PI/Geninatti/includes/header_geninatti.php'); ?>
						<!-- Nav -->
						<nav id="nav">
						<?php require ($localizer . 'PI/Geninatti/includes/menu_geninatti.php'); ?>
						</nav>
					</div>
				</header>
			</div>
		</div>
		<!-- Main Wrapper -->
		<div id="main-wrapper">
			<div class="wrapper style3">
				<div class="inner">
					<section class="container box feature3">
						<div class="row">
							<h2 style="text-transform: none; text-align: center;">Fluorescent
								liposomal assay for “in vitro” detection of tumour DNA or other
								biomarkers in different biological matrixes</h2>
							<p style="text-align: justify;">The development of a diagnostic
								quantitative tool for the detection of ssDNA in body fluids
								might be highly helpful for the diagnosis and treatment of
								diseases such as cancer and inflammatory pathologies. The new
								assay proposed in this assay is based on the use of
								dye-encapsulating liposomes.</p>
							<div style="text-align: center;">
								<img src="images/overview5.jpg"
									style="max-width: 50%; height: auto;" alt="figure 1">
							</div>
							<div class="20u 12u(mobile)">
								<!-- Spotlight -->
								<p style="text-align: justify;">Interest in molecular markers
									present in biological fluids has seen a wide increase during
									the past decades. Because of their low invasiveness, analysis
									of molecules present in blood and urine samples is nowadays
									used for therapeutic and diagnostic purposes. Ranging from
									cancer to inflammatory diseases, new pathology-specific markers
									are discovered and characterized every year. In this regard,
									nucleic acid fragments present in biological fluids are used
									for the detection of DNA and RNA sequences, suggesting the
									presence of specific diseases, leading to early diagnosis and
									personalized therapy choices. DNA and RNA analysis is in many
									cases difficult to manipulate, cost and time consuming. Our
									research group is currently trying to overcome these issues
									with the development of a fluorescent assay, able to recognize
									specific nucleic acid sequences at the low concentration of
									10-12 M. Exploiting artificial ssDNA probes, connected with
									liposomes encapsulating fluorescent dyes, it is possible to
									observe a quantitative signal directly related to the presence
									of a specific ssDNA sequence. Moreover, experiments showed a
									robust answer of the assay in presence of different
									interferences, such as unspecific nucleotidic sequences and
									major serum components. Thus, the possibility to exploit a
									reliable and fast assay for common laboratory procedures might
									open new possibilities for the “in vitro” detection of
									important tumoral and non-tumoral markers.</p>
								<div style="text-align: center;">
									<img src="images/research_51.jpg"
										style="max-width: 50%; height: auto;" alt="figure 2">
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Wrapper -->
	<div id="footer-wrapper">
		<footer id="footer" class="container">
			<div class="12u">
				<ul class="menu">
					<li>&copy; 2020 Molecular Imaging Center. All rights reserved</li>
					<li>Design adapted from: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
				<?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
			</footer>
	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-viewport.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
</body>
</html>