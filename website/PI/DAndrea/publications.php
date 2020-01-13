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
    <title>Publications | D'ANDREA Lab</title>
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
							<a href="<?php echo $localizer; ?>PI/D'Andrea/home.php" id="logo">D'ANDREA LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Peptides and proteins for diagnostic and therapeutic applications</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/DAndrea/includes/menu_dandrea.php'); ?>
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

							<!-- Content -->
							<article>								
									<h2 class="icon fa-file-text-o">Journal Papers</h2>
									<ol class="default" reversed=true>
									<div style="line-height: 1.5">
										<p>Full list of publications are available at 
										<a title="Open in a new window" href="https://www.ncbi.nlm.nih.gov/pubmed/?term=luca+domenico+d%27andrea" target="_blank">PubMed</a>
										</p>
									</div>
								</ol>
							</article>				
						</div>
					</div>
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