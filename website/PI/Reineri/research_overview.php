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
<title>Research | REINERI Lab</title>
	<?php require ($localizer . 'includes/head_const.inc.php'); ?>
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
			<div class="wrapper style1">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="8u 12u(mobile)">
								<!-- Spotlight -->
								<section class="box article-list">
									<h2>RESEARCH OVERVIEW</h2>
									<p></p>
									<article class="box excerpt">
										<a><img
											src="<?php echo $localizer; ?>/PI/Reineri/images/hyperpolarized_probes.jpg"
											alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 style="text-transform: none;">
													<a
														href="<?php echo $localizer; ?>/PI/Reineri/research_hyperpolarized_probes.php">Hyperpolarized
														Probes</a>
												</h3>
											</header>
											<p>The purpose of this research line is the development of
												new substrates suitable for parahydrogen hyperpolarization.
												Unsaturated derivatives of metabolites and of biologically
												relevant molecules are the main focus. The research work
												aims also to optimize of the parahydrogen-based
												hyperpolarization procedure.</p>
											<a
												href="<?php echo $localizer; ?>/PI/Reineri/research_hyperpolarized_probes.php"><p
													style="text-align: right;">
													<span style="color: blue;">Continue Reading >></span>
												</p></a>
										</div>
									</article>
									<article class="box excerpt">
										<a><img
											src="<?php echo $localizer; ?>/PI/Reineri/images/imaging_metabolism.jpg"
											alt="Imaging metabolism" class="image left"
											style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 style="text-transform: none;">
													<a
														href="<?php echo $localizer; ?>/PI/Reineri/research_imaging_metabolism.php">Imaging
														Metabolism</a>
												</h3>
											</header>
											<p>The hyperpolarized metabolites (and, in particular,
												pyruvate) obtained by means of the PHIP-SAH method are used
												to investigate metabolism in different pathologies (e.g.
												heart failure, cancer), in cells cultures and in vivo.</p>
											<a
												href="<?php echo $localizer; ?>/PI/Reineri/research_imaging_metabolism.php"><p
													style="text-align: right;">
													<span style="color: blue;">Continue Reading >></span>
												</p></a>
										</div>
									</article>
								</section>
							</div>
						</div>
					</div>
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
	<script src="<?php echo $localizer; ?>/PI/assets/js/jquery.min.js"></script>
	<script
		src="<?php echo $localizer; ?>/PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/skel.min.js"></script>
	<script
		src="<?php echo $localizer; ?>/PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>/PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>/PI/assets/js/main.js"></script>

</body>
</html>