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
    <title>Publications | DELLI CASTELLI Lab</title>
    <?php require ($localizer . 'PI/Delli_Castelli/includes/head_const_delli.php'); ?>
</head>
<body class="homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			
			<!-- logo unito -->
			<a href="http://www.unito.it" title="University of Torino" target="_blank" id="unito-logo" style="text-decoration: none;">
			<div class="unito-logo-container">                   
	          </div></a>
	          
	          <a href="http://www.cim.unito.it/website/" title="Molecular Imaging Center" target="_blank" style="text-decoration: none;" >
	          <div class="cim-logo-container">
	         </div></a>
			
			
			
			<div class="container">
					
				<!-- Header -->
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
					
						<!-- Logo -->
						<h1>
							<a href="<?php echo $localizer; ?>PI/Delli_Castelli/home.php" id="logo">DELLI CASTELLI LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Quella roba bella che fa la Delli Castelli...</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/Delli_Castelli/includes/menu_delli.php'); ?>
						</nav>

					</div>
				</header>

			</div>
		</div>

		<!-- Main Wrapper -->
		<div id="main-wrapper" style="height: 1000px;">
			<div class="wrapper style2">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="10u 12u(mobile)">
								<div id="content">

									<!-- Content -->
									<article>

										<h2 class="icon fa-file-text-o">Journal Papers</h2>

										<ul class="default">
											<li><a title="Open in a new window"
												href="https://scholar.google.com/citations?hl=en&user=ibKYwMAAAAAJ&view_op=list_works&sortby=pubdate"
												target="_blank">Full list of publications are available at
													Google Scholar</a></li>
										</ul>
									</article>
									<header class="major"> </header>
								</div>
							</div>
							<!-- 
							<div class="2u 12u(mobile)">
								<div id="sidebar">
									<section></section>
								</div>
							</div> 
							-->

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