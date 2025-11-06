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
<title>Home | DELLI CASTELLI LAB</title>
	<?php require ($localizer . 'includes/head_const_new.inc.php'); ?>
	<?php require ($localizer . 'PI/Delli_Castelli/includes/head_const_delli.php'); ?>
</head>
<body class="homepage">
	<div id="page-wrapper">
		<!-- Header -->
		<div id="header-wrapper">
			<!-- logo unito -->
			<a
				href="http://www.unito.it"
				title="University of Torino"
				target="_blank"
				id="unito-logo"
				style="text-decoration: none;">
				<div class="unito-logo-container"></div>
			</a>
			<a
				href="<?php echo $localizer; ?>"
				title="Molecular Imaging Center"
				style="text-decoration: none;">
				<div class="cim-logo-container"></div>
			</a>
			<div class="container">
				<!-- Header -->
				<header
					id="header"
					style="margin: -30px 0 30px 0;">
					<div class="inner">
						<!-- Logo -->
						<?php require ($localizer . 'PI/Delli_Castelli/includes/header_delli.php');?>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Delli_Castelli/includes/menu_delli.php'); ?>
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
									<a class="image left">
										<img
											src="<?php echo $localizer; ?>images/staff/dellicastelli.webp"
											alt="Daniela Delli Castelli"
											style="width: 180px; height: 170px;">
									</a>
									<div>
										<header>
											<h3>Daniela Delli Castelli</h3>
											<span><strong>Principal Investigator</strong></span>
										</header>
										<p style="line-height: 1.2">
											Associate Professor<br> Molecular Imaging Center<br>
											<a
												href="https://www.dmbhs.unito.it/do/docenti.pl/Alias?daniela.dellicastelli#tab-profilo"
												target=_blank>Academic activity</a>
											<br> Phone: +39 0116706493<br> E-mail:
											<a href="mailto:daniela.dellicastelli@unito.it">daniela.dellicastelli@unito.it</a>
										</p>
									</div>
								</article>
								<article class="box excerpt">
									<!-- <a class="image left">
										<img
											src="<?php echo $localizer; ?>images/staff/vassallo.webp"
											alt="Giulia Vassallo"
											style="width: 180px; height: auto;">
									</a>
									<div>
										<header>
											<h3>GIULIA VASSALLO</h3>
											<span>PhD studend</span>
										</header>
										<p style="line-height: 1.2">
											<br>
											<br> Phone: +39 0116706493<br> E-mail:
											<a href="mailto:giulia.vassallo@unito.it">giulia.vassallo@unito.it</a>
										</p>
									</div>
									<div class="showtext">
										<div>My project focuses on ...</div>
										<form>
											<p align="justify">
												<b></b>
											</p>
										</form>
									</div>
								</article>
								<article class="box excerpt">
									<a class="image left">
										<img
											src="<?php echo $localizer; ?>images/staff/quattrociocchi.webp"
											alt="Claudia Quattrociocchi"
											style="width: 180px; height: auto;">
									</a>
									<div>
										<header>
											<h3>CLAUDIA QUATTROCIOCCHI</h3>
											<span>Postgraduate Fellow</span>
										</header>
										<p style="line-height: 1.2">
											<br>
											<br> Phone: +39 0116706493<br> E-mail:
											<a href="mailto:claudia.quattrociocchi@unito.it">claudia.quattrociocchi@unito.it</a>
										</p>
									</div>
									<div class="showtext">
										<div>My research aims at ...</div>
										<form>
											<p align="justify">
												<b></a>
												</b>
											</p>
										</form>
									</div>
								</article> -->
							</div>
						</div>
						<hr></hr>
					</div>
				</div>
			</div>
		</div>
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
	<script
		type="text/javascript"
		src="https://platform.linkedin.com/badges/js/profile.js"
		async
		defer></script>
	<script>
</script>
</body>
</html>