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
	<title>Tumor pH imaging | Longo Lab</title>
	<?php require ($localizer . 'includes/head_const.inc.php'); ?>
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

			<div class="wrapper style3">
				<div class="inner">
					<section class="container box feature3">
						<div class="row">

							<article>

								<h3 font style="text-transform: none;">Investigating tumor pH imaging as a novel cancer biomarker</h3>
								<p align="justify">Tumor cells that live in conditions of hypoxia show an up-regulated glucose metabolism, because of hypoxia-induced shift toward 
								glycolysis. Tumor cells have evolved several sophisticated mechanisms to regulate pH homeostasis: they eliminate acidic catabolites
								by ion transporters and pumps to preserve a slightly alkaline intracellular pH (pHi), which is optimal for cell proliferation and 
								tumor survival.This behavior leads to enhanced acidification of the extracellular pH (pHe) to values in the range 6.5-7.0, which is
								a distinguishing feature of the tumor microenvironment. Imaging based methods have already been established, at a clinical level, 
								to assess glucose metabolism (by positron emission tomography - PET imaging of 18F-fluorodeoyglucose FDG tumor uptake), providing a
								formidable tool for evaluating treatment response. <br>Conversely, despite the excellent studies regarding tumor acidosis, we still 
								do not have an effective acid-base imaging protocol that allows the quantification of extracellular tumor pH and the assessment 
								of pHe related changes following therapeutic treatment. <br><strong>The focus of our research is to develop non invasive MRI-based tools to assess
								tumor pHe and to investigate tumor pHe heterogeneity as a potential innovative biomarker for evaluating treatment response to drugs targeting tumor metabolism.</strong> </p>


							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Tumor acidosis</font></a>
											</h3>
											</br>
											<p font style="text-transform: none; font-size:1.3em">Tumor acidosis and glycolysis</p>
											</br>
											</br>
										</header>
										
										<p align="justify">
											The vast majority of cancers exhibit increased glucose uptake
										and glycolysis regardless of oxygen availability. This metabolic
										shift leads to an enhanced production of lactic acid that decreases
										extracellular pH (pHe), a hallmark of the tumor microenvironment.
										Despite the fact that aerobic glycolysis and increased extracellular
										acidification are recognized as hallmarks of solid tumors, no clear evidence 
										of this relationship has been reported so far in vivo.
										Thanks to the development of accuate CEST pH responsive agents, we were able to study, for the first time,
										noninvasively the in vivo correlation between tumor 18F-FDG uptake and extracellular pH values in a
										murine model of HER2+ breast cancer
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/27651313"
												target="_blank"><font color="blue">[Longo et al. 2016]</font></a>.

										Tumors with higher FDG uptake show lower pHe values, whereas tumors with lower
										FDG uptake display a less acidic microenvironment
										</p>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/tumor_pH1.jpg" alt="" class="image zooming">

										<p align="justify">We demonstrated the occurrence of tumor pHe changes that
										report on acidification of the interstitial fluid caused by an
										accelerated glycolysis. Combined PET and MRI-CEST images
										reported complementary spatial information of the altered
										glucose metabolism. Notably, a significant inverse correlation
										was found between extracellular tumor pH and 18F-FDG
										uptake, as a high 18F-FDG uptake corresponds to lower
										extracellular pH values. These results show how merging the
										information from 18F-FDG-uptake and extracellular pH
										measurements can improve characterization of the tumor
										microenvironment.</p>
										
										<img src="<?php echo $localizer; ?>/PI/Longo/images/tumor_pH2.jpg" alt="" class="image zooming">
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">pH imaging and tumor metabolism</font></a>
											</h3>
											<p font style="text-transform: none; font-size:1.3em">pH imaging for assessing the efficacy of inhibitors of cancer metabolism</p>
										</header>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/tumor_pH3.jpg" alt="" class="image zooming">

										<p align="justify">Drugs addressing
										specific aspects of the deregulated tumour metabolism have
										been proposed for inhibiting tumour growth and survival.
										Dichloroacetate (DCA), a mitochondria-targeting small
										molecule of 150 Da re-establishes the metabolism of pyruvate into the tricarboxylic acid cycle and
										decreases the lactate accumulation and production.										
										We studied DCA-induced changes in metabolism and tumour acidosis in a murine breast
										cancer model can be monitored non-invasively by MRI-CEST pH mapping. 
										We observed that lactate production was reduced following
										DCA treatment both in vitro, just after 24 h, as well as in vivo,
										with a marked decrease in lactate levels after three days of
										treatment. Notably, these changes in lactate levels were highly
										correlated with changes in pHe in vitro and the same strong correlation was found in vivo, likely reflecting the intertwined
										dependence between glycolysis, lactate levels and tumour acidosis
																					 
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/28714513"
												target="_blank"><font color="blue">[Anemone et al. 2017]</font></a>.											
										</p>

										<img src="<?php echo $localizer; ?>/PI/Longo/images/tumor_pH4.jpg" alt="" class="image zooming">
										
										<p align="justify">We demonstrated that MRI-CEST pH imaging is able
										to detect the early response to DCA by measuring changes in
										tumour pHe. These results suggest that MRI-CEST
										pH imaging may serve as a useful imaging biomarker for
										monitoring changes in metabolism following drugs targeting
										tumour deregulated glycolysis.</p>
										
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
</html>