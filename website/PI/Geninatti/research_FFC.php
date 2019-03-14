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
	<title>Home | GENINATTI LAB</title>
	<?php require ($localizer . 'PI/Geninatti/includes/head_const_geninatti.php'); ?>
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
							<a href="<?php echo $localizer; ?>PI/Geninatti/home.php" id="logo">GENINATTI LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Diagnostic protocols for imaging guided drug delivery and pathology assessment</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Geninatti/includes/menu_geninatti.php'); ?>
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

								<h3 font style="text-transform: none;">Innovative diagnostic protocols for Fast Field Cycling NMR/MRI</h3>
								<p align="justify">Development of an innovative diagnostic strategy, based on the measurements of T1 at low and ultra-low
magnetic fields with Fast Field Cycling (FFC-NMR) to obtain quantitative information on tumour aggressiveness and metastastatic potential, due to different water content and mobility. Differences in T1 are much greater at low field and the shape of the relaxation dispersion profiles may be used as a reporter of the molecular dynamical processes.
								</p>
								
								<div style="text-align: center;">
       							<img src="<?php echo $localizer; ?>PI/Geninatti/images/overview3.jpg" style="max-width: 50%; height: auto;" alt="FYI, image alt text is required" />
   							    </div>


							</article>

							<div class="20u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											
												</a>
											</h3>
											</br>
											<p font style="text-transform: none; font-size:1.3em">Evidence for the Role of Intracellular Water Lifetime as a Tumour
											Biomarker Obtained by In Vivo Field-Cycling Relaxometry</p>
										</header>
										

										<p align="justify">
											It was established through in vivo T1 measurements at low magnetic fields that tumour 
											cells display proton T1 values that are markedly longer than those shown by healthy tissue.</p>
											
										<div style="text-align: center;">		
										<img src="<?php echo $localizer; ?>PI/Geninatti/images/figureresearch31.jpg" alt="" class="image zooming">  
										</div>
										<p align="justify">
											Moreover, it has been found that the elongation of T1 parallels the aggressiveness of the investigated tumour. 
											The T1 lengthening is associated with an enhanced water exchange rate across the transcytolemmal membrane through 
											an overexpression/ upregulation of GLUT1 and Na+/K+ ATPase transporters. It follows that the intracellular water 
											lifetime represents a hallmark of tumour cells that can be easily monitored by measuring T1 at different magnetic 
											field strengths ranging from 0.2 to 200 mT.
										</p>
										<div style="text-align: center;">		
										<img src="<?php echo $localizer; ?>PI/Geninatti/images/figureresearch32.jpg" alt="" class="image zooming">
										</div>
										<p align="justify">Figure: The water exchange regime and the resulting MZ value in a schematic representation of the 
										relationship between the compartmentalized system formed by the IN and the EX space. In the case of intermediate exchange, 
										aS and R1S are the fraction and the rate constant for the apparent component with the shorter T1 (R1S=1/T1S); (1 aS)=aL and 
										R1L are the fraction and rate constant for the apparent component with the longer T1 (R1L=1/T1L), and t is the running time for recovery by relaxation.</p>
										
								<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/29575414?dopt=Abstract"
												target="_blank"><font color="blue">M.R. Ruggiero et al, Angew. Chem. Int. Ed. Engl. 57, 7468 (2018)</font></a>
											</p>
							
										
										
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