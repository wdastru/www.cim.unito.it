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
	<title>Home | Longo LAB</title>
	
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
					<div class="inner" >
					
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
								<li class="current_page_item"><a href="<?php echo $localizer; ?>PI/Longo/home.php">Home</a></li>
								<li><a href="<?php echo $localizer; ?>PI/Longo/research_overview.php">Research</a>
									<ul>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_overview.php">Overview</a></li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_probes.php">MRI probes</a></li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_angiogenesis.php">Tumor
												angiogenesis</a>
										<li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_tumor_pH.php" font
											style="text-transform: none;">TUMOR pH IMAGING</a>
										<li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_kidney.php" font
											style="text-transform: none;">RENAL pH IMAGING</a></li>
									</ul></li>
								<li><a href="<?php echo $localizer; ?>PI/Longo/group.php">Group</a></li>
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
			<div class="wrapper style1">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="7u 12u(mobile)">
								<section class="content">
									<div class="12u">
										<p align="justify" style="line-height: 2">
											<b>Our lab aims to develop novel magnetic resonance
												imaging (MRI)-based methods for characterizing tumor
												microenvironment properties (acidosis, vascularization, hypoxia) in
												murine tumor models. We are interested in developing
												and validating non-invasive MRI procedures and probes for
												improving diagnosis and assessment of treatment effects with
												a special focus on tumor metabolism and on antiangiogenic
												drugs. Our studies also focus on assessing pH imaging
												as a novel biomarker in cancer and in renal diseases.<br />
												Our lab bridges theoretical and experimental aspects of
												biological research, combining chemistry, biology and
												medicine with in vitro and in vivo preclinical studies.
											</b>
										</p>
									</div>

								</section>
							</div>

							<div class="5u 12u(mobile)">

								<section class="box article-list">

									<div>
										<div style="width: 140px;">
											<img
												src="<?php echo $localizer; ?>PI/Longo/images/Dario_Longo.jpg"
												alt=""
												style="width: 140px; height: auto; margin-right: 1em;"
												class="image left" /> 
											<img
												src="<?php echo $localizer; ?>PI/Longo/images/Logo-CNR-2010-Quadrato-ENG-high.png"
												alt=""
												style="width: 140px; height: auto; margin-right: 1em;"
												class="image left" />
										</div>
										<div style="padding: 0 0 0 160px;">
											<p align="left" style="line-height: 1.4">
												<strong><font size="4em">Dario Longo, PhD</font></strong> <br />
												<br /> <font color="#333" > <b>Head, Research Unit of Torino</b> <br /> Institute of Biostructures
												and Bioimaging (IBB)<br /> Italian National Research Council
												(CNR)<br /> <br />Via Nizza, 52<br /> 10126 Torino - Italy<br />
												Tel: +39 011 6706473<br /> Fax: +39 011 6706458<br /></font>
												<a href="mailto:dariolivio.longo@cnr.it"><font color="#1e799f"> dariolivio.longo@cnr.it </font></a>
												<a href="mailto:dario.longo@unito.it"><font color="#1e799f"> dario.longo@unito.it</font></a>
												
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
										<h4 align="center">Developing MRI-based probes</h4>
									</header>
									<a href="<?php echo $localizer; ?>PI/Longo/research_probes.php"><img src="<?php echo $localizer; ?>PI/Longo/images/overview_probes.jpg" alt="" class="image featured" /></a>
									<a href="<?php echo $localizer; ?>PI/Longo/research_probes.php"><font color="blue">Read more >></font></a>
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 align="center">Imaging Tumor Acidosis</h4>
									</header>
									<a href="<?php echo $localizer; ?>PI/Longo/research_tumor_pH.php"><img src="<?php echo $localizer; ?>PI/Longo/images/overview_tumor_pH.jpg" alt="" class="image featured" /></a>
									<a href="<?php echo $localizer; ?>PI/Longo/research_tumor_pH.php"><font color="blue">Read more >></font></a>
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 font style="text-transform: none;" align="center">MRI-CEST RENAL pH
											IMAGING</h4>
									</header>
									<a href="<?php echo $localizer; ?>PI/Longo/research_kidney.php"><img src="<?php echo $localizer; ?>PI/Longo/images/overview_kidney.jpg" alt="" class="image featured" /></a>
									<a href="<?php echo $localizer; ?>PI/Longo/research_kidney.php"><font color="blue">Read more >></font></a>
									
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 align="center">Imaging Tumor Angiogenesis</h4>
									</header>
									<a href="<?php echo $localizer; ?>PI/Longo/research_angiogenesis.php"><img src="<?php echo $localizer; ?>PI/Longo/images/overview_angiogenesi.jpg" alt="" class="image featured" /></a> <a
									   href="<?php echo $localizer; ?>PI/Longo/research_angiogenesis.php"><font color="blue">Read more >></font></a>
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
											<span class="month">August</span>
											<h1 class="day">24-27</h1>
										</div>											 
									<a href="http://www.e-smi.eu/index.php?id=emim-2021" style="vertical-align:middle; padding-left:10px" target="_blank"><strong>16th
											European Molecular Imaging Meeting 2021</strong></a></li>
									<li>										
									<div class="date-icon">												
											<span class="month">May</span>
											<h1 class="day">15-20</h1>
										</div>
									<a href="https://www.ismrm.org/21m/" style="vertical-align:middle; padding-left:10px" target="_blank">
									<strong>ISMRM 2021 Annual Meeting</strong></a></li>
											
									<li>										
									<div class="date-icon">												
											<span class="month">September</span>
											<h1 class="day">16-20</h1>
										</div>
									<a href="https://www.wmis.org/news-room/other-molecular-imaging-conferences-meetings/" style="vertical-align:middle; padding-left:10px" target="_blank"><strong>World
											Molecular Imaging Congress WMIC 2021</strong></a></li>									
								</ul>

							</section>
							</div>
							<div class="5u 12u(mobile)">
								<section class="box spotlight">
									<h2 class="icon fa-file-text-o">NEWS</h2>

									<ul class="divided">
									
									<!--  
						 			  	  	<li><img src="<?php echo $localizer; ?>PI/Longo/images/wearehiring3.jpg" align="left" height="70px" style="margin-right:10px">
										    
											<b><font color="red" size="4em">Positions available!</font><br>We are looking for enthusiastic and talented researchers for<br> 
											i) <a href="<?php echo $localizer; ?>PI/Longo/documents/position_informatico.pdf"><font color="red">Research Fellow position in Software development</a></font><br>
											<!-- ii) <a href="<?php echo $localizer; ?>PI/Longo/documents/Unito_CIM_computational_science.pdf"><font color="red">Research Fellow Position in Database Developer for Preclinical Medical Images</a></font><br> -->
										   <!-- iii) <a href="<?php echo $localizer; ?>PI/Longo/documents/Position_cancer_biology_imaging2.pdf"><font color="red">Research Fellow position in cancer biology and imaging</a></font></b>
										   
											 
											</li>
											-->
											
											<li><b>New research article on a novel multislice sequence for 3D MRI-CEST pH imaging published in </b>  
											<a title="Open in a new window" class="http" href="https://pubmed.ncbi.nlm.nih.gov/33031591" target="_blank">							
											<em><font color="blue">Magnetic Resonance in Medicine 2021; 85:1335-1349.</font></em></a>
											</li>
											
											<li><b>New research article on a combined approach for evaluating renal perfusion and pH published in </b>  
											<a title="Open in a new window" class="http" href="https://pubmed.ncbi.nlm.nih.gov/32153058" target="_blank">							
											<em><font color="blue">NRM in Biomedicine, 2020, 33, e4287.</font></em></a>
											</li>
											
											<li><b>New research article on a novel melanin-based probe for optoacoustic imaging published in </b>  
											<a title="Open in a new window" class="http" href="https://www.mdpi.com/2076-3417/10/23/8313" target="_blank">							
											<em><font color="blue">Applied Sciences 2020, 10, 8313.</font></em></a>
											</li>
											
											<li><b>New review focussing on imaging tumor metabolism published in </b><a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/32133295" target="_blank">							
											<em><font color="blue">Frontiers in Oncology, 2020, 10, 161</font></em></a>
											</li>
											
											<li><b>New review focussing on imaging tumor acidosis published in </b><a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/30762162" target="_blank">							
											<em><font color="blue">Cancer Metastasis Review 2019; 38:25-49</font></em></a>
											</li>
											
											<!--  <li><b><a title="Open in a new window" class="http" href="https://www.fondazioneveronesi.it/ricerca" target="_blank">							
											<em><font color="blue">Umberto Veronesi Foundation Postdoctoral Fellowship </font></em></a>recipient, Lorena Consolino:  
											congratulations!</b>
											</li> -->
											
											<li><img src="<?php echo $localizer; ?>PI/Longo/images/book_chapter_CEST.jpg" align="left" height="80px" style="margin-right:10px">
											<b>New book chapter in CEST imaging: </b>
											<a title="Open in a new window" class="http" href="https://www.crcpress.com/Chemical-Exchange-Saturation-Transfer-Imaging-Advances-and-Applications/McMahon-Gilad-Bulte-Zijl/p/book/9789814745703" target="_blank">							
											<em><font color="blue">"Iodinated Contrast Media as pH-Responsive CEST Agents" In: Chemical Exchange Saturation Transfer Imaging: Advances and Applications.</font></em></a>
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
						<li>&copy; 2021 Molecular Imaging Center. All rights reserved</li>
						<li>Design adapted from: <a href="http://html5up.net">HTML5 UP</a></li>
						<li>Updated: 4 January 2021</li>
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