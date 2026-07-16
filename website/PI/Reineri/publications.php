<?php
require_once __DIR__ . '/../../config.inc.php';
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
	<?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
	<?php include SITE_PATH . 'PI/Reineri/includes/head_const_reineri.php'; ?>
</head>
<body class="homepage">
	<div id="page-wrapper">
		
		<div id="header-wrapper">
			
			<a href="http://www.unito.it" title="University of Torino"
				target="_blank" id="unito-logo" style="text-decoration: none;">
				<div class="unito-logo-container"></div>
			</a> <a href="<?php echo SITE_ROOT; ?>"
				title="Molecular Imaging Center"
				style="text-decoration: none;">
				<div class="cim-logo-container"></div>
			</a>
			<div class="container">
				
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
						
						<?php include SITE_PATH . 'PI/Reineri/includes/header_reineri.php';?>
						
						<nav id="nav">
							<?php include SITE_PATH . 'PI/Reineri/includes/menu_reineri.php'; ?>
						</nav>
					</div>
				</header>
			</div>
		</div>
		
		<div id="main-wrapper" style="height: 1000px;">
			<div class="wrapper style2">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="10u 12u(mobile)">
								<div id="content">
									
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
				<?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php'; ?>
				<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
			</footer>
		</div>
	</div>
	
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.min.js"></script>
	<script
		src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/skel.min.js"></script>
	<script
		src="<?php echo SITE_ROOT; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/util.js"></script>
	
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/main.js"></script>
</body>
</html>