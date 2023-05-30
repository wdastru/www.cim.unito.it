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
							<h2 style="text-transform: none; text-align: center;">Innovative
								diagnostic protocols for Fast Field Cycling NMR/MRI</h2>
							<p style="text-align: justify;">Development of an innovative
								diagnostic strategy, based on the measurements of T1 at low and
								ultra-low magnetic fields with Fast Field Cycling (FFC-NMR) to
								obtain quantitative information on tumour aggressiveness and
								metastastatic potential, due to different water content and
								mobility. Differences in T1 are much greater at low field and
								the shape of the relaxation dispersion profiles may be used as a
								reporter of the molecular dynamical processes.</p>
							<div style="text-align: center;">
								<img src="images/overview3.jpg"
									style="max-width: 50%; height: auto;" alt="figure 1">
							</div>
							<div class="20u 12u(mobile)">
								<!-- Spotlight -->
								<h3>
									<span style="text-transform: none;">Evidence for the Role of
										Intracellular Water Lifetime as a Tumour Biomarker Obtained by
										In Vivo Field-Cycling Relaxometry</span>
								</h3>
								<p style="text-align: justify;">It was established through in
									vivo T1 measurements at low magnetic fields that tumour cells
									display proton T1 values that are markedly longer than those
									shown by healthy tissue.</p>
								<div style="text-align: center;">
									<img src="images/figureresearch31.jpg" alt=""
										class="image zooming">
								</div>
								<p style="text-align: justify;">Moreover, it has been found that
									the elongation of T1 parallels the aggressiveness of the
									investigated tumour. The T1 lengthening is associated with an
									enhanced water exchange rate across the transcytolemmal
									membrane through an overexpression/ upregulation of GLUT1 and
									Na+/K+ ATPase transporters. It follows that the intracellular
									water lifetime represents a hallmark of tumour cells that can
									be easily monitored by measuring T1 at different magnetic field
									strengths ranging from 0.2 to 200 mT.</p>
								<div style="text-align: center;">
									<img src="images/figureresearch32.jpg" alt=""
										class="image zooming">
								</div>
								<p style="text-align: justify;">Figure: The water exchange
									regime and the resulting MZ value in a schematic representation
									of the relationship between the compartmentalized system formed
									by the IN and the EX space. In the case of intermediate
									exchange, aS and R1S are the fraction and the rate constant for
									the apparent component with the shorter T1 (R1S=1/T1S); (1
									aS)=aL and R1L are the fraction and rate constant for the
									apparent component with the longer T1 (R1L=1/T1L), and t is the
									running time for recovery by relaxation.</p>
								<a class="html"
									href="https://www.ncbi.nlm.nih.gov/pubmed/29575414?dopt=Abstract"
									target="_blank"><span style="color: blue;">M.R. Ruggiero et al,
										Angew. Chem. Int. Ed. Engl. 57, 7468 (2018)</span></a>
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
				<?php include $localizer . 'includes/PageSpeedTest.inc.php';?>
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