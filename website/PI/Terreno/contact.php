<?php
require_once __DIR__ . '/../../config.inc.php';
include SITE_PATH . 'includes/staff_db.inc.php'; // retreive $mail and $telefono from db
?>
<!DOCTYPE html>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
	<head>
		<title>Contact Us | TERRENO Lab</title>
	<?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
	<?php include SITE_PATH . 'PI/Terreno/includes/head_const_terreno.php'; ?>
	</head>
	<body class="homepage">
		<div id="page-wrapper">
			
		<div id="header-wrapper">
			
			<a href="http://www.unito.it" title="University of Torino" target="_blank" id="unito-logo" style="text-decoration: none;">
			<div class="unito-logo-container">                   
	          </div></a>
	          <a href="<?php echo SITE_ROOT; ?>" title="Molecular Imaging Center" target="_blank" style="text-decoration: none;" >
	          <div class="cim-logo-container">
	         </div></a>
			<div class="container">
				
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
						
						<?php include SITE_PATH . 'PI/Terreno/includes/header_terreno.php';?>
						
						<nav id="nav">
						<?php include SITE_PATH . 'PI/Terreno/includes/menu_terreno.php'; ?>
						</nav>
					</div>
				</header>
			</div>
		</div>
			
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
												<a title="Molecular Imaging Center" class="http" href="<?php echo SITE_ROOT; ?>"> 
												Molecular Imaging Center</a><br>
												<a title="Dept. Mol Biotec Health Sciences" class="http" href="https://www.mbc.unito.it" target="_blank"> 												
												Department of Molecular Biotechnologies and Health Science</a><br>
												<a title="University of Torino" class="http" href="https://www.unito.it" target="_blank"> 
												University of Torino</a><br>
												Via Nizza, 52<br>
												10126 - Torino, Italy </strong></p>
												<p style="color:dark gray; line-height: 2" align="left">
												Tel: 
<?php
echo getStaffData($conn, [
    'Nome' => 'Enzo',
    'Cognome' => 'Terreno'
])['Telefono'];
?><br> email: <?php
echo "<a href=\"mailto:" . getStaffData($conn, [
    'Nome' => 'Enzo',
    'Cognome' => 'Terreno'
])['Mail'] . "\">" . getStaffData($conn, [
    'Nome' => 'Enzo',
    'Cognome' => 'Terreno'
])['Mail'] . "</a>";
?>
												</p>
											</section>
										</div>
										<div class="6u 12u(mobile)">
											<section>
											<br/><br/><br/>		
											<img src="images/MBC.jpg"  width="500" height="auto"/>
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
		
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/skel.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/util.js"></script>
	
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/main.js"></script>
	</body>
</html>
<?php 
    $conn->close();
?>