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
<title>Hyperpolarized Probes | REINERI Lab</title>
	<?php require ($localizer . 'includes/head_const_new.inc.php'); ?>
	<?php require ($localizer . 'PI/Reineri/includes/head_const_reineri.php'); ?>
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
						<?php require ($localizer . 'PI/Reineri/includes/header_reineri.php');?>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Reineri/includes/menu_reineri.php'); ?>
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
							<h2 style="text-transform: none;">Hyperpolarized Probes</h2>
							<p style="text-align: justify;">Parahydrogen hyperpolarization
								requires that an unsaturated precursor of the compound of
								interest can be obtained. The purpose of this research line is
								the development of new substrates suitable for parahydrogen
								hyperpolarization. Unsaturated derivatives of metabolites and of
								biologically relevant molecules are the main focus. The research
								work aims also to optimize of the parahydrogen-based
								hyperpolarization procedure.</p>
							<div style="text-align: center;">
								<img
									src="<?php echo $localizer; ?>PI/Reineri/images/research_line_1_1.jpg"
									alt="image 1" style="max-width: 100%; height: auto;"><br> <img
									src="<?php echo $localizer; ?>PI/Reineri/images/research_line_1_2.jpg"
									alt="image 2" style="max-width: 100%; height: auto;"><br>
							</div>
							<p style="text-align: justify;">
								Among the substrates that have been hyperpolarized by means of
								the “conventional” parahydrogen approach, i.e. through the
								addition of the parahydrogen protons to the final product,
								glucose <a class="html"
									href="https://www.ncbi.nlm.nih.gov/pubmed/20441193"
									target="_blank"><span style="color: blue;">[Reineri et al.
										2010]</span></a> and choline <a class="html"
									href="https://www.ncbi.nlm.nih.gov/pubmed/22663300"
									target="_blank"><span style="color: blue;">[Reineri et al.
										2012]</span></a> derivatives must be mentioned.The PHIP-SAH
								(ParaHydrogen Induced Polarization-Side Arm Hydrogenation)
								procedure <a class="html"
									href="https://www.nature.com/articles/ncomms6858"
									target="_blank"><span style="color: blue;">[Reineri et al.
										2015]</span></a> , developed in our laboratory, allows to
								apply parahydrogen-based hyperpolarization to molecules that
								cannot be hyperpolarized by means of the addition of
								parahydrogen protons to the final product. Among these
								substrates, the most important, from a biological point of view,
								is pyruvate. Then, acetate and lactate <a class="html"
									href="https://onlinelibrary.wiley.com/doi/full/10.1002/chem.201605329"
									target="_blank"><span style="color: blue;">[Cavallari et al.
										2017]</span></a> have been hyperpolarized using this method.
							</p>
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
	<script src="<?php echo $localizer; ?>PI/assets/js/jquery.min.js"></script>
	<script
		src="<?php echo $localizer; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/skel.min.js"></script>
	<script
		src="<?php echo $localizer; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>PI/assets/js/main.js"></script>
</body>
</html>