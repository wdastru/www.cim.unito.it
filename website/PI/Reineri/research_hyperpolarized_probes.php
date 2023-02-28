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
	<title>Hyperpolarized Probes | REINERI Lab</title>
	<?php require ($localizer . 'PI/Reineri/includes/head_const_reineri.php'); ?>
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
							<a href="<?php echo $localizer; ?>PI/Reineri/home.php" id="logo"> REINERI LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Hyperpolarization - ParaHydrogen - Metabolism</p>

							</div>
						</h1>
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
					<section class="container box feature3">
						<div class="row">

							<article>

								<h3 font style="text-transform: none;">Hyperpolarized Probes</h3>
									
								<p align="justify">Parahydrogen hyperpolarization requires that an unsaturated 
									precursor of the compound of interest can be obtained. The purpose of this 
									research line is the development of new substrates suitable for parahydrogen 
									hyperpolarization. Unsaturated derivatives of metabolites and of biologically 
									relevant molecules are the main focus. The research work aims also to optimize 
									of the parahydrogen-based hyperpolarization procedure. 		
									<div style="text-align: center;">
									<img src="<?php echo $localizer; ?>PI/Reineri/images/research_line_1_1.jpg" style="max-width: 100%; height: auto;"><br/></div>
									<div style="text-align: center;">
									<img src="<?php echo $localizer; ?>PI/Reineri/images/research_line_1_2.jpg" style="max-width: 100%; height: auto;"><br/></div>
									Among the substrates that have been hyperpolarized by means of the “conventional” parahydrogen approach, i.e. 
									through the addition of the parahydrogen protons to the final product,  glucose 
									<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/20441193"
												target="_blank"><font color="blue">[Reineri et al. 2010]</font></a>	
									and choline <a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/22663300"
												target="_blank"><font color="blue">[Reineri et al. 2012]</font></a>
									derivatives must be mentioned.The PHIP-SAH (ParaHydrogen Induced 
									Polarization-Side Arm Hydrogenation) procedure <a class="html" href="https://www.nature.com/articles/ncomms6858"
												target="_blank"><font color="blue">[Reineri et al. 2015]</font></a>, 
									developed in our laboratory, allows 
									to apply parahydrogen-based hyperpolarization to molecules that cannot be hyperpolarized by means of the addition of parahydrogen protons to the final 
									product. Among these substrates, the most important, from a biological point of view, is pyruvate. Then, acetate and lactate 
									<a class="html" href="https://onlinelibrary.wiley.com/doi/full/10.1002/chem.201605329"
												target="_blank"><font color="blue">[Cavallari et al. 2017]</font></a>
									have been hyperpolarized using this method. 
									</p>
									
							</article>

						</div>

					</section>

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