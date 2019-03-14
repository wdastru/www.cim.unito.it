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
					<div class="wrapper style1">
						<div class="inner">
							<section class="container box feature2">
									<div class="row">
										<div class="6u 12u(mobile)">
											<section>
												
													<h2>Contact Us</h2>
													
												
												<p align="left" style="line-height: 2";>
												<strong> 
												<a title="Molecular Imaging Center" class="http" href="http://www.cim.unito.it/website/index.php" target="_blank"> 
												Molecular Imaging Center</a><br />
												<a title="Dept. Mol Biotec Health Sciences" class="http" href="https://www.mbc.unito.it" target="_blank"> 												
												Department of Molecular Biotechnologies and Health Science</a><br />
												<a title="University of Torino" class="http" href="https://www.unito.it" target="_blank"> 
												University of Torino</a><br>
												Via Nizza, 52<br>
												10126 - Torino, Italy </strong></p>
												<p style="color:dark gray; line-height: 2" align="left">
												Tel: +39 011 6706473<br > 
												Fax: +39 011 6706458<br > 
												<a href="mailto:simonetta.geninatti@unito.it">simonetta.geninatti@unito.it</a></font>
												</p>
												
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
											<br/><br/><br/>		
											<img src="<?php echo $localizer; ?>PI/images/MBC.jpg"  width="500" height="auto"/>
											<br/><br/>								
											
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.778737105892!2d7.672811341275943!3d45.04971173278425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d48f330bf1b%3A0x5944d69f41d987b7!2sUniversit%C3%A0+degli+Studi+di+Torino+-+Dipartimento+di+Biotecnologie!5e0!3m2!1sit!2sit!4v1514739376078" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
										
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