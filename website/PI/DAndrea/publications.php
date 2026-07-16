<?php
	require_once __DIR__ . '/../../config.inc.php';
?>
<!DOCTYPE html>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
<head>
    <title>Publications | D'Andrea Lab</title>
    <?php include SITE_PATH . 'PI/Reineri/includes/head_const_reineri.php'; ?>
</head>
<body class="homepage">
	<div id="page-wrapper">
		
		<div id="header-wrapper">
			
			<a href="http://www.unito.it" title="University of Torino" target="_blank" id="unito-logo" style="text-decoration: none;">
			<div class="unito-logo-container">                   
	          </div></a>
	          <a href="http://www.cim.unito.it" title="Molecular Imaging Center" target="_blank" style="text-decoration: none;" >
	          <div class="cim-logo-container">
	         </div></a>
			<div class="container">
				
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
						
						<h1>
							<a href="<?php echo SITE_ROOT; ?>PI/DAndrea/home.php" id="logo">LUCA D'ANDREA LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Peptides and proteins for diagnostic and therapeutic applications</p>
							</div>
						</h1>
						
						<nav id="nav">
							<?php include SITE_PATH . 'PI/DAndrea/includes/menu_dandrea.php'; ?>
						</nav>
					</div>
				</header>
			</div>
		</div>
		
		<div id="main-wrapper">
			<div class="wrapper style1">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="8u 12u(mobile)">
							
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
	
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/skel.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/util.js"></script>
	
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/main.js"></script>
</body>
</html>