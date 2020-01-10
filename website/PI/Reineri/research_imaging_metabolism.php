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
	<title>Imaging Metabolism | REINERI Lab</title>
	<?php require ($localizer . 'PI/Reineri/includes/head_const_reineri.php'); ?>
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
							<a href="<?php echo $localizer; ?>PI/Reineri/home.php" id="logo"> REINERI LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Hyperpolarization - ParaHydrogen - Metabolism</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Reineri/includes/menu_reineri.php'); ?>
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

								<h3 font style="text-transform: none;">Imaging Metabolism</h3>
									
								<p align="justify">Altered metabolism is a general feature of diseased tissues, not only cancer, 
									but also other diseases such as genetic predisposition to heart failure. Hyperpolarized pyruvate, 
									obtained through the affordable and easy to handle PHIP-SAH approach, has been applied to investigate 
									these metabolic changes. 	
									<div style="text-align: center;">
									<img src="<?php echo $localizer; ?>PI/Reineri/images/research_line_2_1.jpg" style="max-width: 100%; height: auto;"><br/></div>
									Hyperpolarized pyruvate, obtained by means of the PHIP-SAH approach, has been used to investigate metabolism in transgenic mice 
									that are a model of heart failure <a class="html" href="https://www.nature.com/articles/s41598-018-26583-2"
												target="_blank"><font color="blue">[Cavallari et al. 2018]</font></a>. 
									This is the first in vivo application
									of PHIP-SAH hyperpolarized pyruvate and it demonstrate that this pathology can be detected, using HP-pyruvate, few weeks before than
									using a conventional method (i.e. echography). The so-called Warburg effect, i.e. an up-regulated conversion of pyruvate into lactate, 
									even in the presence of oxygen, is a common feature of cancer tissues. HP-pyruvate, obtained using parahydrogen, has been used to
									investigate these metabolic changes in cancer cell lines characterized by different aggressiveness 
									<a class="html" href="https://onlinelibrary.wiley.com/doi/full/10.1002/cphc.201800652"
												target="_blank"><font color="blue">[Cavallari et al. 2019]</font></a>. 
												<div style="text-align: center;">
									<img src="<?php echo $localizer; ?>PI/Reineri/images/research_line_2_2.jpg" style="max-width: 100%; height: auto;"><br/></div>
									</p>
									
							</article>

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