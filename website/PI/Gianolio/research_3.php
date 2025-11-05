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
<title>Gd retention | GIANOLIO Lab</title>
	<?php require ($localizer . 'includes/head_const_new.inc.php'); ?>
	<?php require ($localizer . 'PI/Gianolio/includes/head_const_gianolio.php'); ?>
</head>
<body class="homepage">
	<div id="page-wrapper">
		<!-- Header -->
		<div id="header-wrapper">
			<!-- logo unito -->
			<a href="http://www.unito.it" title="University of Torino"
				target="_blank" id="unito-logo" style="text-decoration: none;">
				<div class="unito-logo-container"></div>
			</a> <a href="<?php echo $localizer; ?>"
				title="Molecular Imaging Center"
				style="text-decoration: none;">
				<div class="cim-logo-container"></div>
			</a>
			<div class="container">
				<!-- Header -->
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
						<!-- Logo -->
							<?php require ($localizer . 'PI/Gianolio/includes/header_gianolio.php'); ?>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Gianolio/includes/menu_gianolio.php'); ?>
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
							<article>
								<h2 style="text-transform: none;">Gd retention in the body</h2>
								<p style="text-align: justify;">Recently, several studies have
									shown increased signal intensity on unenhanced T1-weighted MR
									images in some brain regions in patients with normal renal
									function who had previously received multiple doses of GBCAs.
									The observed hyperintense signal has been associated with the
									retention of small amounts of gadolinium in the brain. There
									has been evidence that both linear and macrocyclic GBCAs can
									yield detectable gadolinium traces in the brain, with linear
									neutral agents leaving greater quantities.</p>
							</article>
							<div class="6u 12u(mobile)">
								<!-- Spotlight -->
								<div>
									<h3>
										<span style="text-transform: none;">Assessment of the Amounts
											of Insoluble Gadolinium-containing Species and Intact
											Gadolinium Complexes after Repeated Administration of
											Gadolinium-based Contrast Agents</span>
									</h3>
									<p style="text-align: justify;">
										The purpose of this study was to evaluate the speciation of
										gadolinium containing species in the brain after multiple
										administrations of gadodiamide and gadoteridol and to quantify
										the amount of intact gadolinium complexes and insoluble
										gadolinium-containing species. While the entire fraction of
										retained gadolinium was in the form of the intact parent
										complex in animals treated with gadoteridol, the majority of
										retained gadolinium was in the form of insoluble species and,
										in part, of a macromolecular system endowed with very high
										relaxivity in animals treated with gadodiamide <a class="html"
											href="https://www.ncbi.nlm.nih.gov/pubmed/28873047"
											target="_blank"><span style="color: blue;">[Gianolio et al.
												2017]</span></a>. <img src="images/research_3_1.jpg" alt=""
											class="image zooming">
									</p>
								</div>
							</div>
							<div class="6u 12u(mobile)">
								<!-- Spotlight -->
								<div>
									<h3>
										<span style="text-transform: none;">Insights on the Role of
											Metal Complex Stability by Comparing Metal Uptake in Murine
											Tissues Upon the Concomitant Administration of Lanthanum- and
											Gadolinium-DTPA</span>
									</h3>
									<p style="text-align: justify;">
										The aim of the study was to explore the role of the stability
										of metal complexes in the processes that lead to the metal
										retention in the brain and other tissues of mice administered
										with lanthanides-based contrast agents. This issue was tackled
										by the simultaneous injection of Gd- DTPA and La-DTPA, which
										have the same charge and structure but differ in their
										thermodynamic stability by 3 orders of magnitude <a
											class="html"
											href="https://www.ncbi.nlm.nih.gov/pubmed/28990973"
											target="_blank"><span style="color: blue;">[Di Gregorio E et
												al. 2018]</span></a>. <img src="images/research_3_2.jpg"
											alt="" class="image zooming">
									</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
		<div id="footer-wrapper">
			<footer id="footer" class="container">
				<div class="12u">
					<ul class="menu">
						<li>&copy; 2020 Molecular Imaging Center. All rights reserved</li>
						<li>Design adapted from: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
				<?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
				<?php include $localizer . 'includes/PageSpeedTest.inc.php';?>
				</footer>
		</div>
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