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
<title>Publications | REINERI Lab</title>
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
		<div id="main-wrapper" style="height: 1000px;">
			<div class="wrapper style2">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="10u 12u(mobile)">
								<div id="content">
									<!-- Content -->
									<article>
										<h2 class="icon fa-file-text-o">Journal Papers</h2>
										<div style="line-height: 1.5">
											<p>
												Full list of publications are available at <a
													title="Open in a new window"
													href="https://scholar.google.it/citations?user=mJK0H8cAAAAJ&hl=en"
													target="_blank">Google Scholar</a>
											</p>
										</div>
									</article>
									<header class="major"> </header>
								</div>
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