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
<title>Contact Us | REINERI Lab</title>
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
			<div class="wrapper style1">
				<div class="inner">
					<section class="container box feature2">
						<div class="row">
							<div class="6u 12u(mobile)">
								<h2>Contact Us</h2>
								<p style="text-align: left; line-height: 2;">
									<strong> <a title="Molecular Imaging Center" class="http"
										href="http://www.cim.unito.it/website//website/index.php"
										target="_blank"> Molecular Imaging Center</a><br> <a
										title="Dept. Mol Biotec Health Sciences" class="http"
										href="https://www.mbc.unito.it" target="_blank"> Department of
											Molecular Biotechnologies and Health Science</a><br> <a
										title="University of Torino" class="http"
										href="https://www.unito.it" target="_blank"> University of
											Torino</a><br> Via Nizza, 52<br> 10126 - Torino, Italy
									</strong>
								</p>
								<p style="color: gray; line-height: 2; text-align: left">
									Tel: +39 011 6706473<br> Fax: +39 011 6706458<br> <a
										href="mailto:francesca.reineri@unito.it">francesca.reineri@unito.it</a>
								</p>
							</div>
							<div class="6u 12u(mobile)">
								<br> <br> <br> <img src="images/MBC.jpg"
									alt="Aerial view of MBC" style="width: 500px; height: auto;"> <br>
								<br>
								<iframe
									src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.778737105892!2d7.672811341275943!3d45.04971173278425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d48f330bf1b%3A0x5944d69f41d987b7!2sUniversit%C3%A0+degli+Studi+di+Torino+-+Dipartimento+di+Biotecnologie!5e0!3m2!1sit!2sit!4v1514739376078"
									style="width: 500px; height: 350px; border: 0"></iframe>
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