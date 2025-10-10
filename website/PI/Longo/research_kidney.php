<<<<<<< Updated upstream
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
	<title>Kidney Imaging | Longo Lab</title>
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
							<a href="<?php echo $localizer; ?>PI/Longo/home.php" id="logo">DARIO LONGO LAB</a>
							<div>
								<p style="color: gray;">Imaging Tumor Microenvironment</p>

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

								<h3 font style="text-transform: none;">Imaging renal pH</h3>
								<p align="justify">
									The kidney is a highly complex organ consisting of welldefined
									structures that function in a deeply coordinate
									fashion to allow for fine regulation of pH homeostasis.
									The role of the kidney in acid-base balance depends
									on the capacity of the renal tubule to reclaim filtered
									bicarbonate and to excrete net protons as titratable acids
									and ammonium.</br>
									Although the principal role of the kidney is the maintenance of
									acid–base balance, current imaging approaches are unable to
									assess this important parameter and clinical biomarkers are not
									robust enough in evaluating the severity of kidney damage.
									Therefore, our lab is developing novel noninvasive imaging approaches
									to assess the acid–base homeostasis in vivo and to monitor pH evolution following kidney injury. 
									Our lab is also actively involved in the <b>COST Action "PARENCHIMA"</b> 
									<a	href="http://www.cost.eu/COST_Actions/ca/CA16103"
										target="_blank"><font color="blue">CA16103 </font></a>
									(Magnetic Resonance Imaging Biomarkers for Chronic Kidney
									Disease).<br><strong> We aim to demonstrate the biological validity
									of renal pH imaging as a novel biomarker of kidney diseases.</strong>
								</p>


							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Renal pH imaging</font></a>
											</h3>
											</br>
											<p font style="text-transform: none; font-size:1.3em">Imaging the pH evolution in an acute kidney injury model </p>
											</br>
										</header>
										<img src="<?php echo $localizer; ?>PI/Longo/images/kidney1.jpg" alt="" class="image zooming">

										<p align="justify">
											Our previous studies have shown the ability of a
											iodinated CA, Iopamidol, to measure pH values and
											induced pH alterations in healthy mice 
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/20949634"
												target="_blank"><font color="blue">[Longo et al. 2011]</font></a>. 
											In this study we employed the glycerol-induced AKI model due to the
											multiple ischemic, toxic, and obstructive tubular insults
											caused, pathophysiologically similar to the acute tubular
											necrosis that occurs in humans. According to the
											elicited damage, this model shows an inherent capability
											to recover from the damage, therefore allowing to image
											pH variations both at the acute stage of the injury and
											during the recovery period. We observed an increase
											of pH levels reaching a peak at day 3 that correlates well
											with the corresponding BUN raise and a complete recovery 21 days following the damage
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/23059893"
												target="_blank"><font color="blue">[Longo et al. 2013]</font></a>.
										
										</p>
										<img src="<?php echo $localizer; ?>PI/Longo/images/kidney2.jpg" alt="" class="image zooming">
										<p align="justify">We have demonstrated that the use of Iopamidol
											as a CEST-MRI pH responsive CA provides a
											good estimate of the kidney pH evolution both in healthy
											and in pathological conditions. CEST-MRI pH imaging is
											a suitable method for the noninvasive and longitudinal
											investigation of renal injury and may provide useful
											insight on monitoring functional recovery. Moreover, the
											proposed method provides spatial information on single
											kidney function and integrity, and not just an average of
											the kidneys’ functionality as with clinical biomarker
											such as serum creatinine and BUN.</p>
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Single kidney functional pH imaging</font></a>
											</h3>
											
											<p font style="text-transform: none; font-size:1.3em">Evaluation of renal pH homeostasis after ischemia reperfusion injury</p>
										</header>
										<img src="<?php echo $localizer; ?>PI/Longo/images/kidney3.jpg" alt="" class="image zooming">

										<p align="justify">
											Ischemic renal injury is a severe clinical problem in nephrology and the
											major cause of acute kidney injury (AKI). We investigated whether MRI-CEST renal pH mapping
											can detect early renal damage and distinguish AKI recovery from irreversible damage
											in a unilateral kidney ischemia reperfusion injury (KIRI) model. The advantage of this model is that 
											only one kidney is damaged, whereas the contralateral kidney is not affected. Consequently, 
											in this model of post-ischemic AKI, serum biomarkers are minimally affected, since the contralateral
											kidney can compensate for the reduced renal functionality.
											We shown that MRI-CEST pH mapping can detect the early onset of acute
											kidney damage and distinguish between the recovery and persistence
											of the damage following unilateral ischemia reperfusion injury in mice.
										<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/28370530" target="_blank"><font color="blue">[Longo et al. 2017]</font></a>.
											Morover, MRI-CEST renal pH values were significantly correlated
											with histological scores, reflecting renal damage.
										</p>
										<img src="<?php echo $localizer; ?>PI/Longo/images/kidney4.jpg" alt="" class="image zooming">
										<p align="justify">The results reported herein show, for the first time, that MRI-CEST
											pH mapping allows the noninvasive detection and monitoring of
											renal function impairment after unilateral ischemia-induced AKI.
											The derangement of pH regulation was correlated to the decay
											of renal filtration function and to the severity of the morphological
											damage.</p>
										
									</article>
								</section>
							</div>


						<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Dual assessment of kidney perfusion and pH </font></a>
											</h3>
											
											<p font style="text-transform: none; font-size:1.3em">Dynamic CEST-MRI approach in an acute kidney ischemia reperfusion injury murine model</p>
										</header>
										<img src="<?php echo $localizer; ?>PI/Longo/images/kidney5.jpg" alt="" class="image zooming">

										<p align="justify">
											We investigated the exploitation of a single contrast agent injection with a dynamic CEST acquisition
											for a combined quantification of renal perfusion and pH homeostasis in a unilateral kidney ischemia
											reperfusion injury (KIRI) model. Thus, a dynamic-CEST approach has been implemented in the 
											acquisition protocol and semi-quantitative estimates (peak, area under the curve AUC and slope) 
											were calculated from the dynamic curves. These measurements have been compared to those obtained with 
											a standard Dynamic Contrast Enhanced (DCE)-MRI approach following Gd-based injection.
											Compared with the contralateral kidneys, the clamped ones showed a significant decrease in renal perfusion,
											as measured using the DCE-MRI approach, which is consistent with reduced filtration capability. 
											Dynamic CEST-MRI findings reported similar results, indicating that the clamped kidneys displayed
											significantly reduced renal filtration that persisted up to 7 days after the damage.
										<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/32153058" target="_blank"><font color="blue">[Irrera et al. 2020]</font></a>.
											In addition, CEST-MRI pH imaging showed that the clamped kidneys displayed significantly increased pH values,
											reflecting the disturbance to pH homeostasis. 
										</p>
										<img src="<?php echo $localizer; ?>PI/Longo/images/kidney6.jpg" alt="" class="image zooming">
										<p align="justify">Our results demonstrate that a single CEST-MRI contrast agent can provide multiple types 
										    of information related to renal function and can discern healthy kidneys from pathological ones by 
										    combining perfusion measurements with renal pH mapping.</p>
										
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
||||||| Stash base
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
	<title>Kidney Imaging | Longo Lab</title>
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
								<p style="color: gray;">Imaging Tumor Microenvironment</p>

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

								<h3 font style="text-transform: none;">Imaging renal pH</h3>
								<p align="justify">
									The kidney is a highly complex organ consisting of welldefined
									structures that function in a deeply coordinate
									fashion to allow for fine regulation of pH homeostasis.
									The role of the kidney in acid-base balance depends
									on the capacity of the renal tubule to reclaim filtered
									bicarbonate and to excrete net protons as titratable acids
									and ammonium.</br>
									Although the principal role of the kidney is the maintenance of
									acid–base balance, current imaging approaches are unable to
									assess this important parameter and clinical biomarkers are not
									robust enough in evaluating the severity of kidney damage.
									Therefore, our lab is developing novel noninvasive imaging approaches
									to assess the acid–base homeostasis in vivo and to monitor pH evolution following kidney injury. 
									Our lab is also actively involved in the <b>COST Action "PARENCHIMA"</b> 
									<a	href="http://www.cost.eu/COST_Actions/ca/CA16103"
										target="_blank"><font color="blue">CA16103 </font></a>
									(Magnetic Resonance Imaging Biomarkers for Chronic Kidney
									Disease).<br><strong> We aim to demonstrate the biological validity
									of renal pH imaging as a novel biomarker of kidney diseases.</strong>
								</p>


							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Renal pH imaging</font></a>
											</h3>
											</br>
											<p font style="text-transform: none; font-size:1.3em">Imaging the pH evolution in an acute kidney injury model </p>
											</br>
										</header>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney1.jpg" alt="" class="image zooming">

										<p align="justify">
											Our previous studies have shown the ability of a
											iodinated CA, Iopamidol, to measure pH values and
											induced pH alterations in healthy mice 
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/20949634"
												target="_blank"><font color="blue">[Longo et al. 2011]</font></a>. 
											In this study we employed the glycerol-induced AKI model due to the
											multiple ischemic, toxic, and obstructive tubular insults
											caused, pathophysiologically similar to the acute tubular
											necrosis that occurs in humans. According to the
											elicited damage, this model shows an inherent capability
											to recover from the damage, therefore allowing to image
											pH variations both at the acute stage of the injury and
											during the recovery period. We observed an increase
											of pH levels reaching a peak at day 3 that correlates well
											with the corresponding BUN raise and a complete recovery 21 days following the damage
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/23059893"
												target="_blank"><font color="blue">[Longo et al. 2013]</font></a>.
										
										</p>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney2.jpg" alt="" class="image zooming">
										<p align="justify">We have demonstrated that the use of Iopamidol
											as a CEST-MRI pH responsive CA provides a
											good estimate of the kidney pH evolution both in healthy
											and in pathological conditions. CEST-MRI pH imaging is
											a suitable method for the noninvasive and longitudinal
											investigation of renal injury and may provide useful
											insight on monitoring functional recovery. Moreover, the
											proposed method provides spatial information on single
											kidney function and integrity, and not just an average of
											the kidneys’ functionality as with clinical biomarker
											such as serum creatinine and BUN.</p>
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Single kidney functional pH imaging</font></a>
											</h3>
											
											<p font style="text-transform: none; font-size:1.3em">Evaluation of renal pH homeostasis after ischemia reperfusion injury</p>
										</header>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney3.jpg" alt="" class="image zooming">

										<p align="justify">
											Ischemic renal injury is a severe clinical problem in nephrology and the
											major cause of acute kidney injury (AKI). We investigated whether MRI-CEST renal pH mapping
											can detect early renal damage and distinguish AKI recovery from irreversible damage
											in a unilateral kidney ischemia reperfusion injury (KIRI) model. The advantage of this model is that 
											only one kidney is damaged, whereas the contralateral kidney is not affected. Consequently, 
											in this model of post-ischemic AKI, serum biomarkers are minimally affected, since the contralateral
											kidney can compensate for the reduced renal functionality.
											We shown that MRI-CEST pH mapping can detect the early onset of acute
											kidney damage and distinguish between the recovery and persistence
											of the damage following unilateral ischemia reperfusion injury in mice.
										<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/28370530" target="_blank"><font color="blue">[Longo et al. 2017]</font></a>.
											Morover, MRI-CEST renal pH values were significantly correlated
											with histological scores, reflecting renal damage.
										</p>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney4.jpg" alt="" class="image zooming">
										<p align="justify">The results reported herein show, for the first time, that MRI-CEST
											pH mapping allows the noninvasive detection and monitoring of
											renal function impairment after unilateral ischemia-induced AKI.
											The derangement of pH regulation was correlated to the decay
											of renal filtration function and to the severity of the morphological
											damage.</p>
										
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
=======
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
	<title>Kidney Imaging | Longo Lab</title>
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
								<p style="color: gray;">Imaging Tumor Microenvironment</p>

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

								<h3 font style="text-transform: none;">Imaging renal pH</h3>
								<p align="justify">
									The kidney is a highly complex organ consisting of welldefined
									structures that function in a deeply coordinate
									fashion to allow for fine regulation of pH homeostasis.
									The role of the kidney in acid-base balance depends
									on the capacity of the renal tubule to reclaim filtered
									bicarbonate and to excrete net protons as titratable acids
									and ammonium.</br>
									Although the principal role of the kidney is the maintenance of
									acid–base balance, current imaging approaches are unable to
									assess this important parameter and clinical biomarkers are not
									robust enough in evaluating the severity of kidney damage.
									Therefore, our lab is developing novel noninvasive imaging approaches
									to assess the acid–base homeostasis in vivo and to monitor pH evolution following kidney injury. 
									Our lab is also actively involved in the <b>COST Action "PARENCHIMA"</b> 
									<a	href="http://www.cost.eu/COST_Actions/ca/CA16103"
										target="_blank"><font color="blue">CA16103 </font></a>
									(Magnetic Resonance Imaging Biomarkers for Chronic Kidney
									Disease).<br><strong> We aim to demonstrate the biological validity
									of renal pH imaging as a novel biomarker of kidney diseases.</strong>
								</p>


							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Renal pH imaging</font></a>
											</h3>
											</br>
											<p font style="text-transform: none; font-size:1.3em">Imaging the pH evolution in an acute kidney injury model </p>
											</br>
										</header>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney1.jpg" alt="" class="image zooming">

										<p align="justify">
											Our previous studies have shown the ability of a
											iodinated CA, Iopamidol, to measure pH values and
											induced pH alterations in healthy mice 
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/20949634"
												target="_blank"><font color="blue">[Longo et al. 2011]</font></a>. 
											In this study we employed the glycerol-induced AKI model due to the
											multiple ischemic, toxic, and obstructive tubular insults
											caused, pathophysiologically similar to the acute tubular
											necrosis that occurs in humans. According to the
											elicited damage, this model shows an inherent capability
											to recover from the damage, therefore allowing to image
											pH variations both at the acute stage of the injury and
											during the recovery period. We observed an increase
											of pH levels reaching a peak at day 3 that correlates well
											with the corresponding BUN raise and a complete recovery 21 days following the damage
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/23059893"
												target="_blank"><font color="blue">[Longo et al. 2013]</font></a>.
										
										</p>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney2.jpg" alt="" class="image zooming">
										<p align="justify">We have demonstrated that the use of Iopamidol
											as a CEST-MRI pH responsive CA provides a
											good estimate of the kidney pH evolution both in healthy
											and in pathological conditions. CEST-MRI pH imaging is
											a suitable method for the noninvasive and longitudinal
											investigation of renal injury and may provide useful
											insight on monitoring functional recovery. Moreover, the
											proposed method provides spatial information on single
											kidney function and integrity, and not just an average of
											the kidneys’ functionality as with clinical biomarker
											such as serum creatinine and BUN.</p>
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Single kidney functional pH imaging</font></a>
											</h3>
											
											<p font style="text-transform: none; font-size:1.3em">Evaluation of renal pH homeostasis after ischemia reperfusion injury</p>
										</header>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney3.jpg" alt="" class="image zooming">

										<p align="justify">
											Ischemic renal injury is a severe clinical problem in nephrology and the
											major cause of acute kidney injury (AKI). We investigated whether MRI-CEST renal pH mapping
											can detect early renal damage and distinguish AKI recovery from irreversible damage
											in a unilateral kidney ischemia reperfusion injury (KIRI) model. The advantage of this model is that 
											only one kidney is damaged, whereas the contralateral kidney is not affected. Consequently, 
											in this model of post-ischemic AKI, serum biomarkers are minimally affected, since the contralateral
											kidney can compensate for the reduced renal functionality.
											We shown that MRI-CEST pH mapping can detect the early onset of acute
											kidney damage and distinguish between the recovery and persistence
											of the damage following unilateral ischemia reperfusion injury in mice.
										<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/28370530" target="_blank"><font color="blue">[Longo et al. 2017]</font></a>.
											Morover, MRI-CEST renal pH values were significantly correlated
											with histological scores, reflecting renal damage.
										</p>
										<img src="<?php echo $localizer; ?>/PI/Longo/images/kidney4.jpg" alt="" class="image zooming">
										<p align="justify">The results reported herein show, for the first time, that MRI-CEST
											pH mapping allows the noninvasive detection and monitoring of
											renal function impairment after unilateral ischemia-induced AKI.
											The derangement of pH regulation was correlated to the decay
											of renal filtration function and to the severity of the morphological
											damage.</p>
										
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
>>>>>>> Stashed changes
</html>