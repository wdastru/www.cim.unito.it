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
	<title>Publications | GIANOLIO Lab</title>
	<?php require ($localizer . 'PI/Gianolio/includes/head_const_gianolio.php'); ?>
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
							<a href="<?php echo $localizer; ?>PI/Gianolio/home.php" id="logo">GIANOLIO LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Paramagnetic metal complexes in MRI and Molecular Imaging</p>

							</div>
						</h1>
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

			<div class="wrapper style3">
				<div class="inner">
					<section class="container box feature3">
						<div class="row">

							<article>

								<h3 font style="text-transform: none;">Relaxometric Methods for medical/biological issues</h3>
								<p align="justify">This research line relies on the fact that simple and cheap relaxometric methods 
								can be set-up in order to answer to particular medical or biological needs. The main advantage of the 
								relaxometric methods is that the measure of the observed relaxation rate is fast and straightforward 
								and several types of relaxometer are commercially available at easily affordable costs. </p>


							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											
											<p font style="text-transform: none; font-size:1.3em">Relaxometric method for the re-evaluation of the water exchange lifetime across red blood cell membrane</p>
										</header>
						
										<p align="justify">
											The method for the determination of RBC membrane permeability to water is based on the measurement of T1 or T2 
											of a RBC suspension in the presence of a paramagnetic Gd-complex ions in the suspending medium.
											In principle, the presence of of the paramagnetic complex  make the overallwater proton relaxation curve 
											resolvable into two components, namely, a fast component corresponding to water protons in the extracellular, 
											Gd-doped, compartment and a slow component corresponding to the inner cell compartment whose relaxation is 
											modulated by the rate of water exchange across the cellular membrane. The experimental work-up relies on 
											the fitting of the experimental data to a theoretical bi-exponential curve calculated for the effect of two-site exchange.

											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/26744230"
												target="_blank"><font color="blue">[Gianolio E et al 2016]</font></a>.

										</p>
										<img src="<?php echo $localizer; ?>PI/Gianolio/images/research_2_1.jpg" alt="" class="image zooming">
										
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											
											<p font style="text-transform: none; font-size:1.3em">Relaxometric method for the assessment of
											intestinal permeability based on the oral administration of gadolinium-based MRI contrast agents
</p>
											
										</header>
										
										<p align="justify">
											The extent of urine excretion of the orally injested GBCAs is taken as a reporter to detect 
											intestinal barrier dysfunction. The method proposed here for the quantitative detection of Gd-based 
											probes in urine is very easy to implement because the paramagnetism of the Gd3+ ions causes a decrease in the
											water proton relaxation time (T1) which is proportional to the concentration of the agent. The measurement of the 
											longitudinal relaxation rate (R1=1/T1) can be carried out on any NMR spectrometer or cheaper relaxometer with a 
											semi-automatic procedure which takes 1–5 min, depending on the concentration
											of the paramagnetic probe in urine. As no sample preparation or external calibration is required, the T1-based method 
											results in a much faster procedure with respect to the ‘gold standard’ HPLC or HPLC/MS analysis. The Gd complexes are 
											relatively large molecules (MW, 500–1000 Da), which are highly hydrophilic and are not degraded by colonic bacteria, 
											and so are excellent candidates to report membrane damage along the entire intestinal tract
											<a class="html" href="https://onlinelibrary.wiley.com/doi/full/10.1002/nbm.3471"
												target="_blank"><font color="blue">[Gianolio E et al 2016]</font></a>.											
											</p>
											<img src="<?php echo $localizer; ?>PI/Gianolio/images/research_2_2.jpg" alt="" class="image zooming">
										
									</article>
								</section>
							</div>

												


						</div>

					</section>

				</div>
			</div>
		</div>


	</div>

	<!-- Scripts -->

<?php require ($localizer . 'PI/includes/scripts.php'); ?>

</body>
</html>