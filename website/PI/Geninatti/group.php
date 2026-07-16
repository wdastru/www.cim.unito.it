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
<title>Group Members | GENINATTI Lab</title>
	<?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
	<?php include SITE_PATH . 'PI/Geninatti/includes/head_const_geninatti.php'; ?>
</head>
<body class="homepage">
	<div id="page-wrapper">
		
		<div id="header-wrapper">
			
			<a href="http://www.unito.it/" title="University of Torino"
				target="_blank" id="unito-logo" style="text-decoration: none;">
				<div class="unito-logo-container"></div>
			</a> <a href="<?php echo SITE_ROOT; ?>"
				title="Molecular Imaging Center" style="text-decoration: none;">
				<div class="cim-logo-container"></div>
			</a>
			<div class="container">
				
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
						
							<?php include SITE_PATH . 'PI/Geninatti/includes/header_geninatti.php'; ?>
						
						<nav id="nav">
							<?php include SITE_PATH . 'PI/Geninatti/includes/menu_geninatti.php'; ?>
						</nav>
					</div>
				</header>
			</div>
		</div>
		
		<div id="main-wrapper">
			<div class="wrapper style3">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="8u 12u(mobile)">
								
								<h2 class="second icon fa-user">Group Members</h2>
								<section class="box article-list">
									
									<article class="box excerpt">
										<a class="image left"><img
											src="<?php echo SITE_ROOT; ?>images/staff/geninatti_crich.webp"
											alt="Simonetta Geninatti"
											style="width: 180px; height: 170px;"></a>
										<div>
											<header>
												<h3 style="text-align: left;">Simonetta Geninatti Crich</h3>
												<span><strong>Principal Investigator</strong></span>
											</header>
											<p style="line-height: 1.2">
												Associate Professor<br> Molecular Imaging Center<br> <a
													href="http://www.dbmss.unito.it/do/docenti.pl/Show?_id=sgeninat#profilo"
													target="_blank"> Academic Activity</a><br> <a
													href="documents/CVSIMOenglish.pdf" target="_blank">
													Curriculum Vitae</a><br> office: 
													<?php
            echo getStaffData($conn, [
                'Nome' => 'Simonetta',
                'Cognome' => 'Geninatti Crich'
            ])['Telefono'];
            ?><br> email: <?php
            echo "<a href=\"mailto:" . getStaffData($conn, [
                'Nome' => 'Simonetta',
                'Cognome' => 'Geninatti Crich'
            ])['Mail'] . "\">" . getStaffData($conn, [
                'Nome' => 'Simonetta',
                'Cognome' => 'Geninatti Crich'
            ])['Mail'] . "</a>";
        ?>
											</p>
										</div>
									</article>
									
									<article class="box excerpt">
										<a class="image left"><img
											src="<?php echo SITE_ROOT; ?>images/staff/alberti.webp"
											alt="Diego Alberti" style="width: 180px; height: auto;"></a>
										<div>
											<header>
												<h3 style="text-align: left;">Diego Alberti</h3>
												<span>Research Fellow</span>
											</header>
											<p style="line-height: 1.2">
												PhD Biochemical Sciences, University of Torino<br> MSc
												Biotechnologies, University of Torino <br> office:
												<?php
            echo getStaffData($conn, [
                'Nome' => 'Diego',
                'Cognome' => 'Alberti'
            ])['Telefono'];
            ?>
            <br> email: <?php
        echo "<a href=\"mailto:" . getStaffData($conn, [
            'Nome' => 'Diego',
            'Cognome' => 'Alberti'
        ])['Mail'] . "\">" . getStaffData($conn, [
            'Nome' => 'Diego',
            'Cognome' => 'Alberti'
        ])['Mail'] . "</a>";
        ?>
											</p>
										</div>
										<div class="showtext">
											<div>My research focuses on ...</div>
											<form style="margin-left: 210px">
												<p style="text-align: justify;">
													<b> My research focuses on the development,
														characterization and in vitro and in vivo studies of
														innovative nano-systems for molecular imaging and
														theranostic applications. Our aim is to improve disease
														diagnosis, to perform therapy (by delivering drugs more
														specifically to the pathological site) but also to
														facilitate (pre-) clinical efficacy and toxicity analyses,
														and to better understand various important aspects of the
														drug delivery process. </b>
												</p>
											</form>
										</div>
									</article>
									
									<article class="box excerpt">
										<a class="image left"><img
											src="<?php echo SITE_ROOT; ?>images/staff/baroni.webp"
											alt="Simona Baroni" style="width: 180px; height: auto;"></a>
										<div>
											<header>
												<h3 style="text-align: left;">Simona Baroni</h3>
												<span>Research Fellow</span>
											</header>
											<p style="line-height: 1.2">
												PhD Biochemical Science, University of Torino<br> MSc
												Chemistry, University of Torino <br> office: <?php
            echo getStaffData($conn, [
                'Nome' => 'Simona',
                'Cognome' => 'Baroni'
            ])['Telefono'];
            ?><br>
												email: <?php
        echo "<a href=\"mailto:" . getStaffData($conn, [
            'Nome' => 'Simona',
            'Cognome' => 'Baroni'
        ])['Mail'] . "\">" . getStaffData($conn, [
            'Nome' => 'Simona',
            'Cognome' => 'Baroni'
        ])['Mail'] . "</a>";
        ?>
											</p>
										</div>
										<div class="showtext">
											<div>Thanks to my previous experience, I have specialized in
												...</div>
											<form style="margin-left: 210px">
												<p style="text-align: justify;">
													<b> Thanks to my previous experience, I have specialized in
														NMR spectroscopy and relaxometry, working mainly in the
														field of synthesis and physicochemical characterization of
														paramagnetic metal complexes, liposomes and nanoparticles
														with potential application as MRI contrast agents.
														Currently, my research focus on the development of a new
														imaging technique for clinical application, the Fast
														Field‐Cycling MRI (FFC‐MRI), where scanners have the
														ability to switch magnetic field rapidly while scanning.
														My research work deals with the development of the theory
														of relaxation in tissue at low magnetic field strengths
														and the in vitro, in vivo study of FFC contrast agents. </b>
												</p>
											</form>
										</div>
									</article>
									<!-- <article class="box excerpt">
										<a class="image left"><img
											src="<?php echo SITE_ROOT; ?>images/staff/ruggiero.webp"
											alt="Maria Rosaria Ruggiero"
											style="width: 180px; height: auto;"></a>
										<div>
											<header>
												<h3 style="text-align: left;">Maria Rosaria Ruggiero</h3>
												<span>Postdoctoral Fellow</span>
											</header>
											<p style="line-height: 1.2">
												PhD Pharmaceutical and Biomolecular Sciences, University of
												Torino<br> MSc Molecular Biotechnology, University of Torino
												<br> office: +39 0116706476<br> email: <a
													href="mailto:mariarosaria.ruggiero@unito.it">mariarosaria.ruggiero@unito.it</a>
											</p>
										</div>
										<div class="showtext">
											<div>My research focus is ...</div>
											<form style="margin-left: 210px">
												<p style="text-align: justify;">
													<b> My research focus is the implementation of advanced
														diagnostic technologies into the field of the FFC
														technique (Fast Field Cycling). The objective of the
														IDentIFY project is to turn FFC-MRI into a routine tool
														for clinical diagnosis. The main goal is to describe and
														understand the new biomarkers that FFC-MRI gives to
														improve early detection, cancer treatment monitoring and
														formation of tumor metastasis. </b>
												</p>
											</form>
										</div>
									</article>
									<article class="box excerpt">
										<a class="image left"><img
											src="<?php echo SITE_ROOT; ?>images/staff/sforzi.webp"
											alt="Jacopo Sforzi" style="width: 180px; height: auto;"></a>
										<div>
											<header>
												<h3 style="text-align: left;">Jacopo Sforzi</h3>
												<span>PhD Student</span>
											</header>
											<p style="line-height: 1.2">
												Msc Molecular Biotechnologies, University of Torino <br>
												office: +39 0116708459<br> email: <a
													href="mailto:jacopo.sforzi@unito.it">jacopo.sforzi@unito.it</a>
											</p>
										</div>
										<div class="showtext">
											<div>The aim of my research is ...</div>
											<form style="margin-left: 210px">
												<p style="text-align: justify;">
													<b> The aim of my research is the development and
														characterization of a fast and reliable fluorimetric assay
														for the detection of nucleic acids biomarkers in
														biological matrixes. We are focusing on the creation of a
														liposome based fluorescent probe, in order to detect very
														low concentrations of biomarkers involved in many
														different disease, from cancer, to infective and
														inflammatory pathologies, trying to improve diagnostic and
														therapeutic insights of common medical protocols and
														procedures. </b>
												</p>
											</form>
										</div>
									</article>
									<article class="box excerpt">
										<div>
											<h2 class="second icon fa-user">Lab Alumni</h2>
											<ul class="divided">
												<li><b>Sahar Rakhshan</b>, MSc Student in Molecular
													Biotechnology</li>
												<li><b>Smeralda Rapisarda</b>, MSc student in Molecular
													Biotechnology</li>
												<li><b>Giampaolo Placidi</b>, MSc student in Molecular
													Biotechnology</li>
												<li><b>Simona Lazzano</b>, MSc student in Molecular
													Biotechnology</li>
												<li><b>Federica Marciano</b>, MSc student in Molecular
													Biotechnology</li>
												<li></li>
											</ul>
										</div>
									</article>
									-->
								</section>
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
	
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/skel-viewport.min.js"></script>
	<script src="assets/js/util.js"></script>
	
	<script src="assets/js/main.js"></script>
	<script src="https://platform.linkedin.com/badges/js/profile.js" async
		defer></script>
	<script>
</script>
</body>
</html>
<?php
$conn->close();
?>