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
	<title>MRI probes | Longo Lab</title>
	<?php require ($localizer . 'includes/head_const_new.inc.php'); ?>
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
	          
	          <a href="<?php echo $localizer; ?>" title="Molecular Imaging Center" style="text-decoration: none;" >
	          <div class="cim-logo-container">
	         </div></a>
			
			
			<div class="container">
					
				<!-- Header -->
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
					
						<!-- Logo -->
						<h1>
							<a href="<?php echo $localizer; ?>PI/Longo/home.php" id="logo">DARIO LONGO LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Imaging Tumor Microenvironment</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li ><a href="<?php echo $localizer; ?>PI/Longo/home.php">Home</a></li>
								<li class="current_page_item"><a href="<?php echo $localizer; ?>PI/Longo/research_overview.php">Research</a>
									<ul>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_overview.php">Overview</a></li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_probes.php">MRI probes</a></li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_angiogenesis.php">Tumor
												angiogenesis</a>
										</li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_tumor_pH.php" font
											style="text-transform: none;">TUMOR pH IMAGING</a>
										</li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_kidney.php" font
											style="text-transform: none;">RENAL pH IMAGING</a></li>
									</ul></li>
								<li ><a href="<?php echo $localizer; ?>PI/Longo/group.php">Group</a></li>
								<li><a href="<?php echo $localizer; ?>PI/Longo/publications.php">Publications</a></li>
								<li><a href="<?php echo $localizer; ?>PI/Longo/contact.php">Contact us</a></li>
							</ul>
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

								<h3 font style="text-transform: none;">DCE-MRI for assessing tumor angiogenesis and therapeutic response</h3>
								
								<p align="justify">It has become evident the key role that tumor vasculature plays in tumor growth and progression.
								 At the same time, a more detailed understanding of the complex parameters that govern the interactions between the tumour
								and vascular compartments will help to improve anti-angiogenic strategies.
								Dynamic contrast-enhanced magnetic resonance imaging (DCE-MRI) is the methodology of choice for 
								the evaluation of tumor angiogenesis, following the injection of a 
								<a href="<?php echo $localizer; ?>PI/Longo/research_probes.php"><font color="blue">Gd-based contrast agent</font></a> and recording changes in signal intensity along time.
								This non-ivasive imaging-based approach can provide a detailed view of tumor vasculature, including vessel permeability 
								and plasmatic volume.
								<br><strong>Our lab is interested in developing DCE-MRI protocols for accurate assessment of tumor vascuature heterogeneity 
								and in investigating how vasculature changes are correlated with therapeutic response to antiangiogenic treatment.</strong>
								</p>


							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">DCE-MRI for tumor vessel heterogeneity</font></a>
											</h3>
											
											<p font style="text-transform: none; font-size:1.3em">Imaging therapeutic response to antigiogenic drugs</p>
										</header>
										<img src="<?php echo $localizer; ?>PI/Longo/images/angiogenesis1.jpg" alt="" class="image zooming">

										<p align="justify">
											Dynamic contrast-enhanced magnetic resonance imaging
										(DCE-MRI) is the methodology of choice for the evaluation of tumor angiogenesis.
										DCE-MRI allows investigating microvascular structure and function
										by tracking the pharmacokinetics of an injected Gd-based contrast
										agent (CA) as it passes through the tumor vasculature. The obtained
										enhancement patterns reflect vascular perfusion and permeability of
										the tumor. In the quantitative analysis approach, pharmacokinetic models are
										applied to contrast agent concentration data to enable estimates of
										physiological parameters, including plasma volume (vp), forward
										vascular transfer constant (Ktrans) and the reverse vascular transfer
										constant (kep). There is an overall agreement in
										considering tumor heterogeneity as one of the key factors of the
										disease. Conversely,the values of the DCE-MRI estimates are therefore strongly
										dependent on how the tumor ROIs are drawn and on the applied statistic analysis. 
										We addressed this limitation by proposing a clustering approach for assessing tumor heterogeneity and thereof
										changes in the evaluation of the response to a DNA-based antiangiogenic treatment employing a blood-pool contrast agent
										at 1 T 
										<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/26480471"
										target="_blank"><font color="blue">[Longo et al. 2016]</font></a>.
										Within the clustering approach, based on a pixel-by-pixel
										analysis, the whole tumor has been segmented into several
										sub-regions according to their enhancement/permeability properties.
																				
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/25839393"
												target="_blank"><font color="blue">[Longo et al. 2015]</font></a>, 
											
										
										</p>
										<img src="<?php echo $localizer; ?>PI/Longo/images/angiogenesis2.jpg" alt="" class="image zooming">
										<p align="justify">A clustering analysis was performed on a voxel-by-voxel basis
										to evaluate spatial distribution of tumor Ktrans and vp parametric maps.
										This study indicates that improvement in the visualization and
										quantification of heterogeneity in the angiogenic response of tumor
										to therapy can be assessed by a clustering approach, even though
										not-homogeneous permeability changes occurred in different areas of
										a tumor.</p>
										
										<p align="justify">
										We shown that DCE-MRI can also provide assessment of therapeutic response to vaccine targeting tumor vasculature.
										In fact, a DNA vaccine targeting Angiomotin (Amot, an angiostatin receptors expressed by the endothelia of angiogenic tissues)
										resulted in tumor growth inhibition that was associated with an increase of vessels diameter and of vessel permeability,
										as determined by a DCE-MRI approach
											
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/25238643"
												target="_blank"><font color="blue">[Arigoni et al. 2012]</font></a>. 												
										</p>
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Imaging tumor angiogenesis</font></a>
												
											</h3>
											</br>
											<p font style="text-transform: none; font-size:1.3em">Tumor vascularization and angiogenic switch</p>
										</header>

										<p align="justify">
											Tumour progression depends on several sequential events that include the microenvironment remodelling processes and the
											switch to the angiogenic phenotype, leading to new blood vessels recruitment.
											Since tumour microvessels exhibit such unique properties, the real time monitoring of
											alterations in vascularity using DCE-MRI appears to be the most suitable approach to succeed in
											early breast cancer detection and characterization. We showed that DCE-MRI could detect functional tumour
											microenvironment changes along the multistep carcinogenesis process observed in the BALB-neuT model, before palpable
											mass formation, compared to normal mammary glands of BALB/c mice. We demonstrated a significant
											increase in DCE-MRI biomarkers during malignant transformation. This â€œangiogenic switchâ€� coincided with an increase in vessel
											permeability and plasma volume, and histology confirmed that the number of microvessels had increased. These results
											suggest that DCE-MRI may be a valuable tool for early, non-invasive detection of breast cancer
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/26941084"
												target="_blank"><font color="blue"> [Consolino et al. 2016] </font></a> 
											</p>
											
											<img src="<?php echo $localizer; ?>PI/Longo/images/angiogenesis3.jpg" alt="" class="image zooming">
											
											<p align="justify">
											We exploited a similar approach studying gastrointestinal stromal
											tumors (GISTs) that develop resistance to the first-line imatinib
											treatment. Recently, increased vessel density and angiogenic
											markers were reported in GISTs with a poor prognosis,
											suggesting that angiogenesis is implicated in GIST tumor progression and resistance.
											We showed that Imatinib-resistant tumors exhibit increased Ktrans and vp
											values compared to imatinib-sensitive ones, as confirmed
											by our ex vivo quantifications of MVD and MDD in
											GIST430 tumor sections. In addition, a strong positive
											correlation was observed between MRI and histological
											estimates
																					
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/27995483"
												target="_blank"><font color="blue"> [Consolino et al. 2017] </font></a>.
												</p>
										
											<img src="<?php echo $localizer; ?>PI/Longo/images/angiogenesis4.jpg" alt="" class="image zooming">
											
											<p align="justify"> The current study suggests that the assessment of
											angiogenesis could be considered a promising new biomarker
											of response to imatinib treatment.</p>
										
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

	<script src="<?php echo $localizer; ?>/PI/assets/js/jquery.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/skel.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>/PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>/PI/assets/js/main.js"></script>

</body>
