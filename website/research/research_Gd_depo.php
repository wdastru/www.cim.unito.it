<?php 
require_once (__DIR__ . '/../config.inc.php'); 
$activeSection = 'research'; 
$activeSubsection = 'gd_deposition';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino -
	Gadolinium Retention in the body</title>
<meta
	name="description"
	content="">
</head>
<body>
	<div id='section1'>
		
			<?php include SITE_PATH . 'includes/menu.php'; ?>
                <?php include SITE_PATH . 'includes/header.php'; ?> <div class="main-area">
            <?php include SITE_PATH . 'includes/research-side-nav.php'; ?>
            <?php include SITE_PATH . 'includes/research-side-nav-mobile.php'; ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							Gd retention in the body
						</h1>
					</div>
					<div class='paddingInner'>
						<p class='indent'>
							Gadolinium-based contrast agents (GBCAs) are commonly used in
							clinical settings as they add physiological information to the
							superb anatomical information of MR images. Millions of Contrast
							Enhanced-MRI scans have been acquired in the past three decades
							without reporting clinical evidence for frequent serious acute or
							chronic events. Hence, GBCAs are considered to be among the
							safest parenteral chemicals.<br> However, recently, several
							studies have shown the occurrence of an increased signal
							intensity in non-enhanced T<sub>1</sub>-weighted MRI of some
							brain regions in patients with normal renal function who had
							previously received multiple doses of GBCAs. The observed
							hyperintense signal has been associated with the retention of
							small amounts of gadolinium (Gd) in the brain. There has been
							evidence that both linear and macrocyclic GBCAs can yield
							detectable Gd traces in the brain, with linear neutral agents
							leaving greater quantities. The intrinsic difficulties associated
							with the availability of human biopsies prompted the development
							of animal models to investigate Gd-retention in the brain. It has
							been found that successive administrations of GBCA to rodents
							over periods of few weeks lead to the retention of Gd in the
							brain structures that mimic the pattern observed in patients.<br>
							<br> At CIM the following research area are currently developed:
						</p>
						<br>
						<ul>
							<li>Evaluation of the speciation of Gd-containing species after
								multiple administrations GBCAs through the quantification of the
								amount of intact Gd-complexes and insoluble Gd-containing
								species.</li>
							<li>Investigation of the role of the thermodynamic and kinetic
								stability of the Gd-complexes on the extent of their retention
								in vivo.</li>
							<li>Extension of the investigation of Gd retention to other body
								tissues besides brain in order to get a comprehensive view which
								can help in the understanding of Gd accumulation/excretion
								pathways.</li>
							<li>Investigation of the distribution and speciation of GBCAs in
								the different blood components (Red Blood Cells, Leukocytes and
								serum).</li>
						</ul>
						<hr>
						<h2 style="text-align: left;">Group Leaders:</h2>
						<a
							href="<?php echo SITE_ROOT; ?>PI/Gianolio/home.php"
							title="Eliana Gianolio">
							<img
								alt="Eliana Gianolio"
								class="group-leaders-img"
								src="<?php echo SITE_ROOT; ?>images/staff/gianolio.webp">
						</a>
					</div>
				</div>
			</div>
			
			<div id='after'></div>
			<div id='footer'>
				<p>
					Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
					Fax. Tel. Mail
				</p>
				<?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php';?>
				<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
            </div>
			
		</div>
		
	</div>
	
	<script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
</body>
</html>
