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
<meta charset="utf-8" />
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description"
	content="We are interested in developing novel MRI contrast agents (Gd-based, CEST) for assessing tumor microenvironment (vascularization, acidosis) properties." />
<meta name="keywords"
	content="molecular imaging, tumor, gadolinium, contrast agent, X-ray, radiographic, kidney, acidosis, metabolism, acute kidney injury, angiogenesis, MRI, magnetic resonance imaging, CEST, vascularization" />
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="1 week">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112490720-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112490720-1');
</script>

<!-- imaging, x-ray, tumor -->
<!--[if lte IE 8]><script src="<?php echo $localizer; ?>PI/assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="<?php echo $localizer; ?>PI/assets/css/main.css" />
<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $localizer; ?>PI/assets/css/ie8.css" /><![endif]-->
<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo $localizer; ?>PI/assets/css/ie9.css" /><![endif]-->
<link rel="SHORTCUT ICON" href="images/favicon.ico" type="image/x-icon" />
<link rel="ICON" href="images/favicon.ico" type="image/ico" />

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
							<?php require ($localizer . 'PI/Longo/includes/menu.php'); ?>
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
											<b>Our lab aims to develop novel magnetic resonance
												imaging (MRI)-based methods for characterizing tumor
												microenvironment properties (acidosis, vascularization, hypoxia) in
												murine tumor models. We are interested in developing
												and validating non-invasive MRI procedures and probes for
												improving diagnosis and assessment of treatment effects with
												a special focus on tumor metabolism and on antiangiogenic
												drugs.<br /> Our studies also focus on assessing pH imaging
												as a novel biomarker in cancer and in renal diseases.<br />
												Our lab bridges theoretical and experimental aspects of
												biological research, combining chemistry, biology and
												medicine with in vitro and in vivo preclinical studies.
											</b>
										</p>
									</div>

								</section>
							</div>

							<div class="4u 12u(mobile)">

								<section class="box article-list">

									<a href="#"><img src="<?php echo $localizer; ?>PI/Longo/images/Dario_Longo.jpg" alt=""
										style="width: 140px; height: auto; margin-bottom: 8em;margin-right: 1em;" class="image left" /></a>
										<div style="padding: 0 0 0 160px;">
									<p align="left" style="line-height: 1.2";>
										<strong><font size="4em">Dario Longo, PhD</font></strong>
										<br><br> Research
										Fellow,<br /> Molecular Imaging Center<br /> Department of
										Molecular Biotechnologies and Health Science<br />
										University of Torino<br /> Torino 10126, Italy<br /> Tel:
										+39 011 6706473<br /> Fax: +39 011 6706458<br /> <a
											href="mailto:dario.longo@unito.it">dario.longo@unito.it</a>
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
									<a href="research_probes.php"><img src="<?php echo $localizer; ?>PI/Longo/images/overview_probes.jpg" alt="" class="image featured" /></a>
									<a href="research_probes.php"><font color="blue">Read more >></font></a>
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 align="center">Imaging Tumor Acidosis</h4>
									</header>
									<a href="research_tumor_pH.php"><img src="images/overview_tumor_pH.jpg" alt="" class="image featured" /></a>
									<a href="research_tumor_pH.php"><font color="blue">Read more >></font></a>
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 font style="text-transform: none;" align="center">MRI-CEST RENAL pH
											IMAGING</h4>
									</header>
									<a href="research_kidney.php"><img src="images/overview_kidney.jpg" alt="" class="image featured" /></a>
									<a href="research_kidney.php"><font color="blue">Read more >></font></a>
									
								</section>
							</div>
							<div class="3u 6u(mobile)">
								<section>
									<header>
										<h4 align="center">Imaging Tumor Angiogenesis</h4>
									</header>
									<a href="research_angiogenesis.php"><img src="images/overview_angiogenesi.jpg" alt="" class="image featured" /></a> <a
									   href="research_angiogenesis.php"><font color="blue">Read more >></font></a>
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
												<h1 class="day">19-22</h1>
											</div>											 
										<a href="http://www.e-smi.eu/index.php?id=emim-2018" style="vertical-align:middle; padding-left:10px" target="_blank"><strong>14th
												European Molecular Imaging Meeting 2019</strong></a></li>
										<li>										
										<div class="date-icon">												
												<span class="month">May</span>
												<h1 class="day">11-16</h1>
											</div>
										<a href="https://www.ismrm.org/19m/" style="vertical-align:middle; padding-left:10px" target="_blank">
										<strong>Joint Annual Meeting ISMRM-ESMRMB 2019</strong></a></li>
												
										<li>										
										<div class="date-icon">												
												<span class="month">September</span>
												<h1 class="day">4-7</h1>
											</div>
										<a href="http://www.wmis.org/2019-wmic/" style="vertical-align:middle; padding-left:10px" target="_blank"><strong>World
												Molecular Imaging Congress WMIC 2019</strong></a></li>									
									</ul>

								</section>
							</div>
							<div class="5u 12u(mobile)">
								<section class="box spotlight">
									<h2 class="icon fa-file-text-o">NEWS</h2>

									<ul class="divided">
										<li><img src="images/wearehiring3.jpg" align="left" height="70px" style="margin-right:10px">
										    
											<b><font color="red" size="4em">Positions available!</font><br>We are looking for enthusiastic and talented researchers for<br> 
											i) <a href="documents/Position_cancer_biology_imaging.pdf"><font color="red">postdoctoral Research Fellow position in cancer biology and imaging</a></font><br>
											ii) <a href="documents/Position_MRI_physics.pdf"><font color="red">Research Fellow position in MRI physics</a></font><br>
											iii) <a href="documents/Position_cancer_biology_imaging2.pdf"><font color="red">Research Fellow position in cancer biology and imaging</a></font></b>
											
											</li>
											
											<li><b>New journal article on a novel ratiometric approach for pH imaging published in  
											<a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/29272735" target="_blank">							
											<em><font color="blue">J Magnetic Resonance</font></em></b></a>
											</li>
											
											<li><b><a title="Open in a new window" class="http" href="https://www.fondazioneveronesi.it/ricerca" target="_blank">							
											<em><font color="blue">Umberto Veronesi Foundation Postdoctoral Fellowship </font></em></a>recipient, Lorena Consolino:  
											congratulations!</b>
											</li>
											
											<li><img src="images/book_chapter_CEST.jpg" align="left" height="80px" style="margin-right:10px">
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
						<li>&copy; 2017 Molecular Imaging Center. All rights reserved</li>
						<li>Design adapted from: <a href="http://html5up.net">HTML5 UP</a></li>
						<li>Updated: 28 December 2017</li>
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