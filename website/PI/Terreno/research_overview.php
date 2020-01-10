<?php
	$localizer = "../../";
?>
<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Research | TERRENO Lab</title>
	<?php require ($localizer . 'PI/Terreno/includes/head_const_terreno.php'); ?>
</head>
<body class="homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			
			<!-- logo unito -->
			<a href="http://www.unito.it" title="University of Torino" target="_blank" id="unito-logo" style="text-decoration: none;">
			<div class="unito-logo-container">                   
	          </div></a>
	          
	          <a href="http://www.cim.unito.it" title="Molecular Imaging Center" target="_blank" style="text-decoration: none;" >
	          <div class="cim-logo-container">
	         </div></a>
			
			
			
			<div class="container">
					
				<!-- Header -->
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
					
						<!-- Logo -->
						<h1>
							<a href="<?php echo $localizer; ?>PI/Terreno/home.php" id="logo">TERRENO  LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Theranostics – Multimodal imaging – Nanoprobes</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Terreno/includes/menu_terreno.php'); ?>
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

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>PI/Terreno/images/Figure_Targeting_Overview_1.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>PI/Terreno/research_1.php">Design of targeting imaging probes</a>
												</h3>
											</header>
											<p>This research aims at developing imaging probes conjugated with vectors able to specifically recognize a disease marker.</p>
											<a href="<?php echo $localizer; ?>PI/Terreno/research_1.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>PI/Terreno/images/Figure_drug_release_overview_2.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>										
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>PI/Terreno/research_2.php">MRI visualisation of drug delivery/release</a>
												</h3>
											</header>
											<p>MRI can offer the opportunity to visualize the release of the material entrapped in a nanocarrier.</p>
											<a href="<?php echo $localizer; ?>PI/Terreno/research_2.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>PI/Terreno/images/Figure_cellular_imaging_overview_3.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>PI/Terreno/research_3.php">Development of cellular imaging procedures</a>
												</h3>
											</header>
											<p>Tracking cells by in vivo imaging is a powerful tool in cellular therapies.</p>
											<a href="<?php echo $localizer; ?>PI/Terreno/research_3.php"><p align="right">
													<font color="blue">Continue Reading >></font>
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


	</div>


	</div>

	<!-- Scripts -->

	<script src="<?php echo $localizer; ?>PI/assets/js/jquery.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/skel.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>PI/assets/js/main.js"></script>

</body>
</html>