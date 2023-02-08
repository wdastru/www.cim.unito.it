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
    <title>Home | TERRENO LAB</title>
	<?php require ($localizer . 'includes/head_const.inc.php'); ?>
	<?php require ($localizer . 'PI/Terreno/includes/head_const_terreno.php'); ?>
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
							<a href="<?php echo $localizer; ?>PI/Terreno/home.php" id="logo">TERRENO LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Theranostics - Multimodal imaging - Nanoprobes</p>
							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Terreno/includes/menu_terreno.php'); ?>
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
								<section class="content">
									<div class="12u">
										<p align="justify" style="line-height: 2">
											<b>The research of the group is mainly focused on the design, synthesis, and in vitro/in vivo 
											characterization of contrast agents for diagnostic and theranostic applications at preclinical level.
											Besides the use of small-sized paramagnetic Gd(III) complexes, new nanosystems aimed at the MRI visualization 
											of specific biomarker, or drug release have been prepared. Another research line deals with the development 
											of procedures for cellular imaging.
											</b>
										</p>
									</div>

								</section>
							</div>

							<div class="4u 12u(mobile)">

								<section class="box article-list">

									<a href="#"><img src="<?php echo $localizer; ?>PI/Terreno/images/Terreno.jpg" alt=""
										style="width: 140px; height: auto;" class="image left" /></a>
										<div style="padding: 0 0 0 180px;">
									<p align="left" style="line-height: 1.2";>
										<strong><font size="4em">Enzo Terreno, PhD</font></strong>
										<br><br>Full Professor,<br> Molecular Imaging Center,<br> Department of
										Molecular Biotechnologies and Health Science,<br>
										University of Torino,<br> Via Nizza 52, </br > Torino 10126, Italy<br> Tel:
										+39 011 6706452<br> Fax: +39 011 6706487<br> <a
											href="mailto:enzo.terreno@unito.it">enzo.terreno@unito.it</a>
									</p>
									</div>

									<p></p>

								</section>
							</div>
						</div>
						<header class="major"> </header>


						<div class="row">
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 align="center">Design of targeting imaging probes</h4>
									</header>
									<a href="<?php echo $localizer; ?>PI/Terreno/research_1.php"><img src="<?php echo $localizer; ?>PI/Terreno/images/Figure_Targeting_Overview_1.jpg" alt="" class="image featured" /></a>
									<a href="<?php echo $localizer; ?>PI/Terreno/research_1.php"><font color="blue">Read more >></font></a>
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 align="center">MRI visualisation of drug delivery/release</h4>
									</header>
									<a href="<?php echo $localizer; ?>PI/Terreno/research_2.php"><img src="<?php echo $localizer; ?>PI/Terreno/images/Figure_drug_release_overview_2.jpg" alt="" class="image featured" /></a>
									<a href="<?php echo $localizer; ?>PI/Terreno/research_2.php"><font color="blue">Read more >></font></a>
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 align="center">Development of cellular imaging procedures</h4>
									</header>
									<a href="<?php echo $localizer; ?>PI/Terreno/research_3.php"><img src="<?php echo $localizer; ?>PI/Terreno/images/Figure_cellular_imaging_overview_3.jpg" alt="" class="image featured" /></a>
									<a href="<?php echo $localizer; ?>PI/Terreno/research_3.php"><font color="blue">Read more >></font></a>
									
								</section>
							</div>
						</div>


					</div>

				</div>
			</div>


			<div class="wrapper style2">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="7u 12u(mobile)">

								<!-- Article list -->
								<section class="box article-list">
									<h2 class="icon fa-file-text-o">Upcoming Events</h2>

									<ul class="divided">

										<li>
											<div class="date-icon">
												<span class="month">March</span>
												<h1 class="day">24-27</h1>
											</div> <a href="http://www.e-smi.eu/index.php?id=emim-2020"
											style="vertical-align: middle; padding-left: 10px"
											target="_blank"><strong>15th European Molecular Imaging
													Meeting 2020</strong></a>
										</li>
										<li>
											<div class="date-icon">
												<span class="month">April</span>
												<h1 class="day">18-23</h1>
											</div> <a href="https://www.ismrm.org/20m/"
											style="vertical-align: middle; padding-left: 10px"
											target="_blank"> <strong>ISMRM 28th Annual Meeting 2020</strong></a>
										</li>

										<li>
											<div class="date-icon">
												<span class="month">October</span>
												<h1 class="day">7-10</h1>
											</div> <strong>World Molecular Imaging Congress WMIC 2020</strong>
										</li>
									</ul>

								</section>
								</div>
							<div class="5u 12u(mobile)">
								<section class="box spotlight">
									<h2 class="icon fa-file-text-o">NEWS</h2>

									<ul class="divided">
																					
											<li><b>New journal article on MRI visualization of neuroinflammation published in  
											<a title="Open in a new window" class="http" href="https://www.sciencedirect.com/science/article/pii/S1549963417301818" target="_blank">							
											<em><font color="blue">Nanotechnology, Biology and Medicine</font></em></b></a>
											</li>
											
											
											<li><img src="images/book_chapter_cest.jpg" align="left" height="80px" style="margin-right:10px">
											<b>New book chapter in CEST imaging: </b>
											<a title="Open in a new window" class="http" href="https://www.crcpress.com/Chemical-Exchange-Saturation-Transfer-Imaging-Advances-and-Applications/McMahon-Gilad-Bulte-Zijl/p/book/9789814745703" target="_blank">							
											<em><font color="blue">"Saturating Compartmentalized Water Protons: Liposome- and Cell-Based CEST Agents" In: Chemical Exchange Saturation Transfer Imaging: Advances and Applications.</font></em></a>
											</li>


									</ul>

								</section>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer Wrapper -->
		<div id="footer-wrapper">
			<footer id="footer" class="container">
				<div class="12u">

					<ul class="menu">
						<li>&copy; 2020 Molecular Imaging Center. All rights reserved</li>
						<li>Design adapted from: <a href="http://html5up.net">HTML5 UP</a></li>
						<li>Updated: 15 January 2020</li>
					</ul>
				</div>
			</footer>
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