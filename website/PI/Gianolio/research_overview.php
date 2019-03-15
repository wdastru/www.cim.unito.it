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
			<div class="wrapper style1">
				<div class="inner">
					<div class="container">
						<div class="row">

							<div class="8u 12u(mobile)">

								<!-- Spotlight -->
								<section class="box article-list">
									<h2>RESEARCH OVERVIEW</h2>

									<p>Study of the dynamic and structural properties 
									of paramagnetic metal complexes with potential applications in MRI and Molecular Imaging.</p>


									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>PI/Gianolio/images/research_1_1.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>PI/Gianolio/research_highrelax.php">High Relaxivity Gd-complexes</a>
												</h3>
											</header>
											<p>The sensitivity issue of MRI technique is related the intrinsic Relaxivity of a 
											given Contrast Agent. The chemists have to design systems endowed with structural and 
											dynamic properties that lead to optimized values for those parameters that are relevant 
											for a given contrast enhancing mechanism. Much work has been done and is ongoing  to 
											design structures with high relaxivity.</p>
											<a href="<?php echo $localizer; ?>PI/Gianolio/research_highrelax.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>PI/Gianolio/images/research_2_1.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>										
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>PI/Gianolio/research_relaxmeth.php">Relaxometric Methods for medical/biological issues</a>
												</h3>
											</header>
											<p>This research line relies on the fact that simple and cheap relaxometric methods can be set-up 
											in order to answer to particular medical or biological needs. The main advantage of the relaxometric methods is that the
											 measure of the observed relaxation rate is fast and straightforward and several types of relaxometer
											  are commercially available at easily affordable costs.</p>
											<a href="<?php echo $localizer; ?>PI/Gianolio/research_relaxmeth.php"><p align="right">
													<font color="blue">Continue Reading >></font>
												</p></a>
										</div>
									</article>

									<article class="box excerpt">
										<a ><img src="<?php echo $localizer; ?>PI/Gianolio/images/research_3_1.jpg" alt="" class="image left" style="width: 300px; height: auto;"></a>
										<div>
											<header>
												<h3 font style="text-transform: none;">
													<a href="<?php echo $localizer; ?>PI/Gianolio/research_gdretention.php">Gd retention in the body</a>
												</h3>
											</header>
											<p>Recently, several studies have shown increased signal intensity on unenhanced T1-weighted MR 
											images in some brain regions in patients with normal renal function who had previously
											received multiple doses of GBCAs. The observed hyperintense signal has been associated with the retention of small amounts of gadolinium in 
											the brain. There has been evidence that both linear and macrocyclic GBCAs can yield detectable gadolinium traces
											in the brain, with linear neutral agents leaving greater quantities.</p>
											<a href="<?php echo $localizer; ?>PI/Gianolio/research_gdretention.php"><p align="right">
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

<?php require ($localizer . 'PI/includes/scripts.php'); ?>

</body>
</html>