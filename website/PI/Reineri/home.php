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
<title>Home | REINERI LAB</title>
	<?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
	<?php include SITE_PATH . 'PI/Reineri/includes/head_const_reineri.php'; ?>
</head>
<body class="homepage">
	<div id="page-wrapper">
		
		<div id="header-wrapper">
			
			<a href="http://www.unito.it" title="University of Torino"
				target="_blank" id="unito-logo" style="text-decoration: none;">
				<div class="unito-logo-container"></div>
			</a> <a href="<?php echo SITE_ROOT; ?>"
				title="Molecular Imaging Center" style="text-decoration: none;">
				<div class="cim-logo-container"></div>
			</a>
			<div class="container">
				
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
						
						<?php include SITE_PATH . 'PI/Reineri/includes/header_reineri.php';?>
						
						<nav id="nav">
							<?php include SITE_PATH . 'PI/Reineri/includes/menu_reineri.php'; ?>
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
								<div class="12u">
									<p style="line-height: 2; text-align: justify;">
										<b>Hyperpolarization by means of parahydrogen of biologically
											relevant substrates is the main focus of the research group.
											The parahydrogen based hyperpolarization requires the
											development of tailored precursors of the target agent and
											the optimization of a suitable hyperpolarization procedure,
											in order to obtain hyperpolarized molecules that can be used
											in vivo for diagnostic purposes. In the last years, a
											procedure named PHIP-SAH (ParaHydrogen Induced Polarization
											-Side Arm Hydrogenation) has been invented by our group,
											which allows to generate hyperpolarized metabolites through a
											steps sequence (i.e. parahydrogenation reaction, polarization
											transfer, hydrolysis) each of which is investigated in order
											to optimize the procedure. The research focuses also on the
											development of new derivatives of biologically relevant
											molecules, suitable for parahydrogen hyperpolarization.
											Finally, the hyperpolarized products are used for in vitro
											and in vivo studies of different pathologies.<br>
										</b>
									</p>
								</div>
							</div>
							<div class="4u 12u(mobile)">
								<div>
									<div style="width: 140px;">
										<img src="<?php echo SITE_ROOT; ?>images/staff/reineri.webp"
											alt="Francesca Reineri"
											style="width: 140px; height: auto; margin-right: 1em;"
											class="image left">
									</div>
									<div style="padding: 0 0 0 160px;">
										<p style="line-height: 1.2; text-align: left;">
											<span style="font-size: 1.2em; font-weight: 700;">Francesca
												Reineri, PhD</span> <br> <br> Assistance Professor<br>
											Molecular Imaging Center <br> Department of Molecular
											Biotechnologies and Health Science<br> University of Torino <br>
											Via Nizza 52<br> 10126 Torino - Italy<br> Tel: 
											<?php
        echo getStaffData($conn, [
            'Nome' => 'Francesca',
            'Cognome' => 'Reineri'
        ])['Telefono'];
        ?><br> email: <?php
echo "<a href=\"mailto:" . getStaffData($conn, [
    'Nome' => 'Francesca',
    'Cognome' => 'Reineri'
])['Mail'] . "\">" . getStaffData($conn, [
    'Nome' => 'Francesca',
    'Cognome' => 'Reineri'
])['Mail'] . "</a>";
?>
										</p>
									</div>
								</div>
							</div>
							<header class="major"> </header>
							<div class="row">
								<div class="3u 6u(mobile)">
									<section>
										<h4 style="text-align: center; margin-bottom: 2em;">Hyperpolarized
											Probes</h4>
										<a
											href="<?php echo SITE_ROOT; ?>PI/Reineri/research_hyperpolarized_probes.php">
											<img
											src="<?php echo SITE_ROOT; ?>PI/Reineri/images/hyperpolarized_probes.jpg"
											alt="Hyperpolarized probes" class="image featured">
										</a> <a
											href="<?php echo SITE_ROOT; ?>PI/Reineri/research_hyperpolarized_probes.php">
											<span style="color: blue;">Read more >></span>
										</a>
									</section>
								</div>
								<div class="3u 6u(mobile)">
									<section>
										<h4 style="text-align: center; margin-bottom: 2em;">Imaging
											Metabolism</h4>
										<a
											href="<?php echo SITE_ROOT; ?>PI/Reineri/research_imaging_metabolism.php">
											<img
											src="<?php echo SITE_ROOT; ?>PI/Reineri/images/imaging_metabolism.jpg"
											alt="Imaging metabolism" class="image featured">
										</a> <a
											href="<?php echo SITE_ROOT; ?>PI/Reineri/research_imaging_metabolism.php">
											<span style="color: blue;">Read more >></span>
										</a>
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
									
									<section class="box article-list">
										<h2 class="icon fa-file-text-o">Upcoming Events</h2>
										<ul class="divided">
											<li>
												<div class="date-icon">
													<span class="month">March</span>
													<h3 class="day">24-27</h3>
												</div> <a href="http://www.e-smi.eu/index.php?id=emim-2020"
												style="vertical-align: middle; padding-left: 10px"
												target="_blank"> <strong>15<sup>th</sup> European Molecular
														Imaging Meeting 2020
												</strong>
											</a>
											</li>
											<li>
												<div class="date-icon">
													<span class="month">April</span>
													<h3 class="day">18-23</h3>
												</div> <a href="https://www.ismrm.org/20m/"
												style="vertical-align: middle; padding-left: 10px"
												target="_blank"> <strong>ISMRM 28th Annual Meeting 2020</strong>
											</a>
											</li>
											<li>
												<div class="date-icon">
													<span class="month">October</span>
													<h3 class="day">7-10</h3>
												</div> <a href="https://wmis.org/highlights-wmic-virtual-2020/"
												style="vertical-align: middle; padding-left: 10px"
												target="_blank"> <strong>World Molecular Imaging Congress
														WMIC 2020</strong>
											</a>
											</li>
										</ul>
									</section>
								</div>
								<div class="5u 12u(mobile)">
									<section class="box spotlight">
										<h2 class="icon fa-file-text-o">NEWS</h2>
										<ul class="divided">
											<li><span style="font-weight: bold; color: #404248;">New
													journal article published in </span><a
												title="Open in a new window" class="http"
												href="https://onlinelibrary.wiley.com/doi/full/10.1002/cphc.201800652"
												target="_blank"> <span
													style="color: blue; font-style: italic; font-weight: bold;">Chemphyschem</span>
											</a></li>
											<li><span style="font-weight: bold; color: #404248;">The
													hyperpolarization group is a partner of the MSCA-ITN (Marie
													Slodowska Curie Action, Innovative Training Network) ZULF
													(Zero and Ultra Low Field). The project involves 9 european
													partners, renowned groups in the field of NMR and
													magnetometry. The project aims to the formation of 11 Early
													Stage Researchers in the innovative fields of Ultra Low
													Field NMR and Hyperpolarization. For more info visit </span><a
												title="Open in a new window" class="http"
												href="https://cordis.europa.eu/project/id/766402" target="_blank"> <span
													style="color: blue; font-style: italic; font-weight: bold;">https://zulf.eu</span></a>
											</li>
										</ul>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="footer-wrapper">
			<footer id="footer" class="container">
				<div class="12u">
					<ul class="menu">
						<li>&copy; 2020 Molecular Imaging Center. All rights reserved</li>
						<li>Design adapted from: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
				<?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php'; ?>
				<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
			</footer>
		</div>
	</div>
	
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.min.js"></script>
	<script
		src="<?php echo SITE_ROOT; ?>PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/skel.min.js"></script>
	<script
		src="<?php echo SITE_ROOT; ?>PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/util.js"></script>
	
	<script src="<?php echo SITE_ROOT; ?>PI/assets/js/main.js"></script>
</body>
</html>
<?php
$conn->close();
?>