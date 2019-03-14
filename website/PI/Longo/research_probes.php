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
	<title>MRI probes | Longo Lab</title>
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

								<h3 font style="text-transform: none;">Development of
									high-relaxivity Gd-based and responsive CEST contrast agents</h3>
									
								<p align="justify">MRI-based contrast agents are often required in order to improve the diagnostic content of the tomographic image.
								Currently used small molecular weigth Gd-complexes, optimized for the clinical scenario, have been used in pre-clinical settings to report on 
								vessel architecture and on <a href="<?php echo $localizer; ?>PI/Longo/research_angiogenesis.php"><font color="blue">tumor vessel permeability</font></a>. 
								Such Gd-based complexes have, unfortunately, sub-optimal contrast properties 
								when used with low-field (1 Tesla) pre-clinical MRI scanners in addition to sub-optimal binding properties to mouse serum albumin.
								<br>
								Despite Gd-based agents are an indispensable part of MRI examinations, in the past decades, two major clinical studies questioned their safety profiles 
								and alternatives to Gd-based agents are not readily available. Our lab discovered that Iodinated contrast media, playing a key-role in oncological
								imaging can provide contrast enhancement in tumors (by exploiting the MRI-CEST approach) that is correlated with corresponding CT enhanced images.
								In addition, we have demosntrated that most of them can be exploited as <a href="<?php echo $localizer; ?>PI/Longo/research_acidosis.php"><font color="blue">pH-responsive contrast agents</font></a>.
								
								
								<br/>
								<strong>We are interested in developing novel blood-pool Gd-based and CEST-based contrast agents with a focus for preclinical imaging applications.
								In addition, we are exploring radiographic contrast media as novel MRI contrast agents for assessing tumor perfusion and acidosis.</strong></p>

							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">New Gd-based blood-pool agent</font></a>
											</h3>
											</br>
											<p font style="text-transform: none; font-size:1.3em">Gd-AAZTA-MADEC, an improved blood pool agent for
												DCE-MRI studies on mice</p>
										</header>
										<img src="<?php echo $localizer; ?>PI/Longo/images/probes1.jpg" alt="" class="image zooming">

										<p align="justify">
											In the past years several blood pool Gd-complexes, optimized
											for the clinical scenario, have been used in pre-clinical
											settings to report on vessel architecture and on tumor vessel
											permeability. Such Gd-based complexes have, unfortunately,
											sub-optimal contrast properties when used with the recently
											developed low-field (1 Tesla) pre-clinical MRI scanners in
											addition to sub-optimal binding properties to mouse serum
											albumin. We have developed a new blood pool Gd(III)-based CA
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/26480471"
												target="_blank"><font color="blue">[Longo et al. 2016]</font></a>, 
											comparing its remarkable MRI contrast properties in
											comparison to the clinically approved MS-325 (Vasovist or
											Ablavar) and to B22956/1.
										</p>
										<img src="<?php echo $localizer; ?>PI/Longo/images/probes2.jpg" alt="" class="image zooming">
										<p align="justify">Gd-AAZTA-MADEC showed stronger binding
											affinity to HSA, higher relaxivity both with human and with
											mouse serum albumin (at 40 MHz and 37°C), as well as more
											prolonged blood circulation time with respect to the other
											CAs. These properties turned out into brightest and prolonged
											MIP angiographic images.</p>
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Transforming CT to MRI-CEST
													contrast agents</font></a>
											</h3>
											<p font style="text-transform: none; font-size:1.3em">Nonionic Iodinated Radiographic Molecules as MRI-CEST
												Tumor Perfusion Agents</p>
										</header>
										<img src="<?php echo $localizer; ?>PI/Longo/images/probes3.jpg" alt="" class="image zooming">

										<p align="justify">
											Gd-based agents are an indispensable part of MRI examinations
											to characterize tumor physiology and delineate tumor margins.
											Iodinated contrast media (CM) are commonly used x-ray contrast agents, playing a
											key-role in oncological imaging. Recently we have shown 
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/26460826"
												target="_blank"><font color="blue"> [Longo et al. 2016] </font></a> 
												that iodinated CM can provide contrast enhancement
											in tumors (by exploiting the MRI-CEST approach) that is
											correlated with corresponding CT enhanced images. In
											addition, both iodinated and Gd-based CM have similar
											molecular weights, likely possessing similar tumor perfusion
											properties. We demonstrated that iodinated CM can provide MR enhanced-tumor images and
											perfusion values comparable to that provided by a Gd-based contrast agent 
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/27572810"
												target="_blank"><font color="blue"> [Anemone et al. 2017] </font></a>.
										</p>
										<img src="<?php echo $localizer; ?>PI/Longo/images/probes4.jpg" alt="" class="image zooming">
										<p align="justify">This work is the first comparison of
											tumor contrast enhancements and tumor perfusion values using
											iodinated CM and a Gd-based agent in a preclinical breast
											tumor model. The obtained enhancement and perfusion maps by
											both MRI-based approaches proved that the spatial information
											was similar, suggesting that iodinated CM, within the
											MRI-CEST approach, might be able to replace Gd-based agents.</p>
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<h3 font style="text-transform: none;">
												<font color="red">Novel pH-responsive CEST contrast agents</font></a>
											</h3>
											
											<p font style="text-transform: none; font-size:1.3em">pH responsive agents owing a single exchanging proton pool</p>
											<br>
										</header>
										<p align="justify">
										Responsive agents capable of reporting physicochemical properties of diagnostic interest 
										of the microenvironment in which they distribute (such as pH, temperature, metabolites,..) 
										require multiple magnetically non-equivalent protons in order to apply a ratiometric approach to rule out the concentration term.
										We have proposed a novel ratiometric pH MRI method based on the analysis of CEST effects under different radio
										frequency irradiation power levels to a CEST molecule possessing a single proton pool. 
										We demonstrated that the proposed RF power-based ratiometric pH MRI method extends conventional ratiometric pH MRI to CEST agents
										with at least one exchangeable site, with enhanced pH sensitivity
											
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/25238643"
												target="_blank"><font color="blue">[Longo et al. 2014]</font></a>. 												
										</p>
										
										<img src="<?php echo $localizer; ?>PI/Longo/images/probes5.jpg" alt="" class="image zooming">										
										
										<p align="justify">
										All these ratiometric methods have been demonstrated by using a continuous wave saturation scheme
										that limits its translation to clinical scanners. We have developed a new ratiometric CEST-MRI pH-mapping approach
										based on a pulsed CEST saturation scheme for a radiographic contrast agent (iodixanol) possessing a single chemical exchange
										site. This approach is based on the ratio of the CEST contrast effects at two different flip angles combinations
										(180/360 and 180/720), keeping constant the mean irradiation RF power (Bavg power). The proposed ratiometric approach index 
										is concentration independent and it showed good pH sensitivity and accuracy in the physiological range between 6.0 and 7.4 
											
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/29272735"
												target="_blank"><font color="blue">[Arena et al. 2018]</font></a>.
											.</p>
										
										<img src="<?php echo $localizer; ?>PI/Longo/images/probes6.jpg" alt="" class="image zooming">
										
										
										
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

	<script src="<?php echo $localizer; ?>PI/assets/js/jquery.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/skel.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>PI/assets/js/main.js"></script>

</body>
</html>