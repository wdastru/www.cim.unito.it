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
<title>Members | REINERI Lab</title>
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
			<div class="wrapper style3">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="8u 10u(mobile)">
								<!-- Article list -->
								<section class="box article-list">
									<h2 class="second icon fa-user">Group Members</h2>
								</section>
							</div>
						</div>
						<!-- Excerpt -->
						<div class="row">
							<div class="8u 12u(mobile)">
								<article class="box excerpt">
									<img src="<?php echo $localizer; ?>images/staff/reineri.jpg"
										alt="Francesca Reineri"
										style="width: 180px; height: auto; margin-bottom: 80px;"
										class="image left">
									<header>
										<h3 style="text-align: left;">Francesca Reineri</h3>
										<span><strong>Principal Investigator</strong></span>
									</header>
									<p style="line-height: 1.2">
										Associate Professor<br> Molecular Imaging Center<br> Academic
										activity: <a
											href="https://www.dmbhs.unito.it/do/docenti.pl/Alias?francesca.reineri#tab-profilo"
											target=_blank>Dept. Molecular Biotechnology and Health
											Sciences</a><br> Ph.D. Chemistry, University of Torino, Italy<br>
										M.Sc. Chemistry, University of Torino, Italy<br> Phone: +39
										0116706473<br> E-mail: <a
											href="mailto:francesca.reineri@unito.it">francesca.reineri@unito.it</a>
									</p>
								</article>
							</div>
							<div class="4u 6u(mobile)">
								<br>
								<h4 style="margin: 0 0 0 4em;">Research Topics</h4>
								<img
									src="<?php echo $localizer; ?>PI/Reineri/images/reineri_wordcloud.png"
									alt="wordcloud" class="w3-image" style="max-width: 250px;">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="8u 12u(mobile)">
								<!-- Excerpt -->
								<article class="box excerpt">
									<img src="<?php echo $localizer; ?>images/staff/cavallari.jpg"
										alt="Eleonora Cavallari"
										style="width: 180px; height: auto; margin-bottom: 60px;"
										class="image left">
									<div>
										<header>
											<h3 style="text-align: left;">Eleonora Cavallari</h3>
											<span>Postdoctoral Fellow</span>
										</header>
										<p style="line-height: 1.2em">
											PhD Pharmaceutical and Biomolecular Sciences, University of
											Torino, Italy<br> MSc Physics, University of Torino, Italy<br>
											Phone: +39 0116706452<br> E-mail: <a
												href="mailto:eleonora.cavallari@unito.it">eleonora.cavallari@unito.it</a>
										</p>
									</div>
									<div class="showtext">
										<div>My project focuses on ...</div>
										<form>
											<p style="text-align: justify">
												<b>My research is focused to the development of the
													parahydrogen-based hyperpolarization method named PHIP-Said
													Arm Hydrogenation (PHIP-SAH), to the visualization of
													metabolic processes in real time and the detection of
													altered metabolic conditions in several diseases. I am
													particularly interested in improving the heteronuclear
													polarization transfer and whole production process of
													hyperpolarized (HP) imaging probes. My ultimate goal is to
													refine this promising diagnostic tool that gives the
													opportunity of a wide application of HP molecules to
													medical research. </b>
											</p>
										</form>
									</div>
								</article>
							</div>
							<div class="4u 6u(mobile)">
								<br>
								<h4 style="margin: 0 0 0 4em;">Research Topics</h4>
								<img
									src="<?php echo $localizer; ?>PI/Reineri/images/cavallari_wordcloud.png"
									alt="wordcloud" class="w3-image" style="max-width: 250px;">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="8u 12u(mobile)">
								<!-- Excerpt -->
								<article class="box excerpt">
									<img src="<?php echo $localizer; ?>images/staff/carrera.jpg"
										alt="Carla Carrera"
										style="width: 180px; height: auto; margin-bottom: 60px;"
										class="image left">
									<div>
										<header>
											<h3 style="text-align: left;">Carla Carrera</h3>
											<span>Senior Research Scientist</span>
										</header>
										<p style="line-height: 1.2">
											PhD Pharmaceutical and Biomolecular Sciences, University of
											Torino, Italy<br> MSc Pharmaceutical Chemistry, University of
											Torino, Italy <br> Phone: +39 0116706493<br> E-mail: <a
												href="mailto:carla.carrera@unito.it">carla.carrera@unito.it</a>
										</p>
									</div>
									<div class="showtext">
										<div>My research aims at ...</div>
										<form>
											<p style="text-align: justify">
												<b> My research focuses on the design and synthesis of new
													contrast agents for MRI and their charaterization. My
													expertise covers the synthesis, among others, of Lantanide
													Complexes used as classic imaging probes, and innovative
													Hyperpolarized molecules exploited to visualize in real
													time the metabolic transformations of biomolecules in
													physiological and pathological pathways. I am personally
													involved in the complete workflow, starting from the
													synthesis and purification of the molecules, their
													charaterization by means of HPLC, Mass and NMR spectoscopy,
													and their use as molecular probes for in vitro and in vivo
													MRI experiments. </b>
											</p>
										</form>
									</div>
								</article>
							</div>
							<div class="4u 6u(mobile)">
								<br>
								<h4 style="margin: 0 0 0 4em;">Research Topics</h4>
								<img
									src="<?php echo $localizer; ?>PI/Reineri/images/carrera_wordcloud.png"
									alt="wordcloud" class="w3-image" style="max-width: 250px;">
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="8u 12u(mobile)">
								<!-- Excerpt -->
								<article class="box excerpt">
									<img src="<?php echo $localizer; ?>images/staff/bondar.jpg"
										alt="Oksana Bondar"
										style="width: 180px; height: auto; margin-bottom: 60px;"
										class="image left">
									<div>
										<header>
											<h3 style="text-align: left;">Oksana Bondar</h3>
											<span>PhD Student</span>
										</header>
										<p style="line-height: 1.2">
											Inorganic chemistry, Taras Shevchenko National University of
											Kyiv, Ukraine <br> Phone: +39 0116706493<br> E-mail: <a
												href="mailto:oksana.bondar@unito.it">oksana.bondar@unito.it</a>
										</p>
									</div>
									<div class="showtext">
										<div>My research focuses on ...</div>
										<form>
											<p style="text-align: justify">
												<b> Early stage researcher (PhD student), within the <a
													title="Open in a new window" class="http"
													href="https://zulf.eu/" target="_blank"> ZULF</a> project,
													at the Molecular Imaging Center. My scientific experience
													is organic and inorganic synthesis. My current project is
													devoted to the development of the hyperpolarization method
													named PHIP-SAH (ParaHydrogen Induced Polarization- Side Arm
													Hydrogenation) and on the ZULF NMR detection of these
													hyperpolarized molecule of metabolites.
												</b>
											</p>
										</form>
									</div>
								</article>
							</div>
						</div>
						<hr>
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
	<script src="https://platform.linkedin.com/badges/js/profile.js" async
		defer></script>
	<script>
</script>
</body>
</html>