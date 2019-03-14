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
    <title>Research | Longo Lab</title>
	<?php require ($localizer . 'PI/Longo/includes/head_const_longo.php'); ?>
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
							<a href="<?php echo $localizer; ?>/PI/Longo/home.php" id="logo">DARIO LONGO LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Imaging Tumor Microenvironment</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Longo/includes/menu_longo.php'); ?>
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
										<a ><img src="<?php echo $localizer; ?>/PI/Longo/images/overview_probes.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>/PI/Longo/research_probes.php">Developing MRI probes</a>
												</h3>
											</header>
											<p>Development of high-relaxivity Gd-based probes and responsive
												CEST contrast agents.</p>
											<a href="<?php echo $localizer; ?>/PI/Longo/research_probes.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>/PI/Longo/images/overview_angiogenesi.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>										
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>/PI/Longo/research_angiogenesis.php">Tumor angiogenesis</a>
												</h3>
											</header>
											<p>Investigating DCE-MRI for early detection of the angiogenic switch
												and for monitoring treatment response to antiangiogenic drugs.</p>
											<a href="<?php echo $localizer; ?>/PI/Longo/research_angiogenesis.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>/PI/Longo/images/overview_tumor_pH.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>/PI/Longo/research_tumor_pH.php">Imaging tumor pH and metabolism</a>
												</h3>
											</header>
											<p>MRI-CEST tumor pH (acidosis) mapping for assessing heterogenity in tumor metabolism and for monitoring response
												to drugs targeting cancer metabolism.</p>
											<a href="<?php echo $localizer; ?>/PI/Longo/research_tumor_pH.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>/PI/Longo/images/overview_kidney.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>/PI/Longo/research_kidney.php">Renal pH imaging</a>
												</h3>
											</header>
											<p>MRI-CEST renal pH imaging for early detection of kidney injury and for monitoring longitudinal evolution.</p>
											<a href="<?php echo $localizer; ?>/PI/Longo/research_kidney.html"><p align="right">
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

			<div class="wrapper style2">
				<div class="inner">
					<div class="container">

						<div id="content">

							<h2>RESEARCH SUPPORT</h2>

							<ul.default>
								<li>AIRC MFAG 2017 N.20153: Multidimensional MRI mapping of
									tumor acidosis: tracking spatial heterogeneity and temporal
									evolution,<strong> PI: Dario Longo </strong>
								</li>
								<li>CSTO165925: Imaging extracellular pH as a MRI
									diagnostic tool,<strong> PI: Walter Dastrù, Co-PI:
										Dario Longo</strong>
								</li>
								<!--  <li>EU H2020 N.667510: GlucoCEST Imaging in Neoplastic Tumours (GLINT), <strong>PI: Xavier Golay </strong>(UCL)</li>  -->
							</ul>

						</div>

					</div>
				</div>
			</div>
		</div>


	</div>


	</div>

	<!-- Scripts -->

	<script src="<?php echo $localizer; ?>/PI/assets/js/jquery.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/skel.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>/PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>/PI/assets/js/main.js"></script>

</body>
</html>