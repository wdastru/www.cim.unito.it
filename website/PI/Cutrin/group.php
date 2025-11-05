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
<title>Members | CUTRIN LAB</title>
	<?php require ($localizer . 'includes/head_const_new.inc.php'); ?>
	<?php require ($localizer . 'PI/Cutrin/includes/head_const_cutrin.php'); ?>
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
							<?php require ($localizer . 'PI/Cutrin/includes/header_cutrin.php'); ?>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Cutrin/includes/menu_cutrin.php'); ?>
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
							<div class="8u 12u(mobile)">
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
									<img src="<?php echo $localizer; ?>images/staff/cutrin.jpg"
										alt="Juan Carlos Cutrin"
										style="width: 180px; height: auto; margin-bottom: 80px;"
										class="image left">
									<div class="w3-row">
										<div class="w3-threequarter">
											<header>
												<h3>Juan Carlos Cutrin</h3>
												<span><strong>Principal Investigator</strong></span>
											</header>
											<p style="line-height: 1.2">
												Research Fellow<br> Molecular Imaging Center<br> Academic
												activity: <a
													href="http://www.dbmss.unito.it/do/docenti.pl/Show?_id=jcutrin#profilo"
													target=_blank>Dept. Molecular Biotechnology and Health
													Sciences</a><br> Phone: +39 0116706473<br> E-mail: <a
													href="mailto:juancarlos.cutrin@unito.it">juancarlos.cutrin@unito.it</a>
											</p>
										</div>
									</div>
								</article>
							</div>
						</div>
						<hr></hr>
						<div class="row">
							<div class="8u 12u(mobile)">
								<article class="box excerpt">
									<!-- <img src="<?php echo $localizer; ?>images/staff/bitonto.jpg"
										alt="Valeria Bitonto"
										style="width: 180px; height: auto; margin-bottom: 120px;"
										class="image left" />
									<div>
										<header>
											<h3>Valeria Bitonto</h3>
											<span>PhD student</span>
										</header>
										<p style="line-height: 1.2">
											Phone: +39 0116706476<br> E-mail: <a
												href="mailto:valeria.bitonto@unito.it">valeria.bitonto@unito.it</a>
										</p>
									</div> -->
								</article> 
							</div>
						</div>
						<hr></hr>
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
	<script src="<?php echo $localizer; ?>PI/assets/js/jquery.min.js"></script>
	<script
		src="<?php echo $localizer; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/skel.min.js"></script>
	<script
		src="<?php echo $localizer; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>PI/assets/js/main.js"></script>
	<script type="text/javascript"
		src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
	<script>
</script>
</body>
</html>