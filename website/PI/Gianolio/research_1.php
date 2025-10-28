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
<title>Gd-complexes | GIANOLIO Lab</title>
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
			</a> <a href="http://www.cim.unito.it/website/"
				title="Molecular Imaging Center" target="_blank"
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
					<h2 style="text-transform: none;">High Relaxivity Gd-complexes</h2>
						<div class="row">
							<article>
								<h3>&nbsp;</h3>
								<p style="text-align: justify;">The sensitivity issue of MRI
									technique is related the intrinsic Relaxivity of a given
									Contrast Agent. The chemists have to design systems endowed
									with structural and dynamic properties that lead to optimized
									values for those parameters that are relevant for a given
									contrast enhancing mechanism. Much work has been done and is
									ongoing to design structures with high relaxivity.</p>
								<div style="text-align: center;">
									<img
										src="<?php echo $localizer; ?>PI/Gianolio/images/research_1_1.jpg"
										style="max-width: 50%; height: auto;" alt="figure 1">
								</div>
							</article>
							<div class="20u 12u(mobile)">
								<!-- Spotlight -->
								<article>
									<h3>&nbsp;</h3>
									<p style="text-align: justify;">
										The efficiency of a given paramagnetic complex is closely
										related to its relaxivity. Relaxivity is the result of a
										complex interplay between the paramagnetic center’s
										structural, dynamic, and electronic properties. Good estimates
										of the determinants of the relaxivity of a given paramagnetic
										complex can be obtained from the analysis of relaxivity data
										as a function of the applied magnetic field (NMRD profiles).
										High relaxivities can be attained, at the clinical field
										strength of 0.5-1.5 T, by lengthening the molecular
										reorientational time, τR. Therefore, macromolecular systems
										were addressed by either the covalent or noncovalent binding
										of paramagnetic chelates to slowly moving substrates <a
											class="html"
											href="https://www.ncbi.nlm.nih.gov/pubmed/24510295"
											target="_blank"><span style="text-align: right; color: blue;">[Gianolio
												E. et al 2014]</span></a>. Another opportunity to increase
										relaxivity is related to the use of bis-hydrated, but still
										highly-stable, Gd-complexes <a class="html"
											href="https://pubs.rsc.org/en/content/articlelanding/2016/cc/c6cc04753j#!divAbstract"
											target="_blank"><span style="text-align: right; color: blue;">
												[Vagner A et al. 2016]</span></a>.
									</p>
								</article>
							</div>
						</div>
					</section>
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