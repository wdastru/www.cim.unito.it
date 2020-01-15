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
    <title>Research | D'ANDREA Lab</title>
	<?php require ($localizer . 'PI/DAndrea/includes/head_const_dandrea.php'); ?>
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
							<a href="<?php echo $localizer; ?>/PI/DAndrea/home.php" id="logo">LUCA D'ANDREA LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Peptides and proteins for diagnostic and therapeutic applications</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/DAndrea/includes/menu_dandrea.php'); ?>
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
										<a ><img src="<?php echo $localizer; ?>/PI/DAndrea/images/figure_research_overview_1.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>/PI/DAndrea/research_1.php">Development of protein binders by mirror-image phage display peptide library</a>
												</h3>
											</header>
											<p>Stable D-peptide binders are found screening a phage display peptide library against the D-enantiomer of the protein target. 
											The all-D protein is synthesized by native chemical ligation.</p>
											<a href="<?php echo $localizer; ?>/PI/DAndrea/research_probes.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>/PI/DAndrea/images/figure_research_overview_2.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>										
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>/PI/DAndrea/research_2.php">Site-selective modification of peptides and proteins</a>
												</h3>
											</header>
											<p>Chemical ligation and other chemo-selective reactions are used to selectively modify a biomolecule. Unnatural amino acids, fluorophores, post-translation modifications, 
											chelating units can be introduced in the target biomolecule, endowing it  of novel properties.  </p>
											<a href="<?php echo $localizer; ?>/PI/DAndrea/research_2.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>/PI/DAndrea/images/figure_research_overview_3.jpg" alt="" class="image left" style="width: 300px; height: 190px;"></a>										
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>/PI/DAndrea/research_3.php">Design and synthesis of VEGF/VEGF receptors targeting compounds</a>
												</h3>
											</header>
											<p>Using structure-based design approaches, we develop peptides and proteins able to modulate the VEGF-dependent angiogenesis as diagnostic or 
											therapeutic agents in regenerative medicine and oncology.  </p>
											<a href="<?php echo $localizer; ?>/PI/DAndrea/research_3.php"><p align="right">
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

							<!-- <ul.default>
								<li>AIRC MFAG 2017 N.20153: Multidimensional MRI mapping of
									tumor acidosis: tracking spatial heterogeneity and temporal
									evolution,<strong> PI: Dario Longo </strong>
								</li>
								<li>CSTO165925: Imaging extracellular pH as a MRI
									diagnostic tool,<strong> PI: Walter Dastrù, Co-PI:
										Dario Longo</strong>
								</li>
								<li>EU H2020 N.667510: GlucoCEST Imaging in Neoplastic Tumours (GLINT), <strong>PI: Xavier Golay </strong>(UCL)</li>  
							</ul> -->

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