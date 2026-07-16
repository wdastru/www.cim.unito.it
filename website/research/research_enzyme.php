<?php
    require_once __DIR__ . '/../config.inc.php';
    $activeSection    = 'research';
    $activeSubsection = 'enzyme';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino - Imaging
	Enzymatic acticity</title>
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
							Imaging Enzymatic Activity
						</h1>
					</div>
					<div class='paddingInner'>
						<p class='indent'>The assessment of matrix remodelling in solid
							tumors is of utmost importance to stratify patients and to
							personalize therapy. This line of research deals with the
							synthesis, characterization and validation of MRI contrast agents
							responsive to the activity of Matrix Metalloproteinases (MMPs).
							Probes being developed are based on relaxation agents (for
							T1w-MRI) or chemical exchange saturation transfer agents (for the
							CEST-MRI modality) whose MRI properties change upon probe
							cleavage by MMPs.</p>
						<hr>
						<h2 style="text-align: left;">Group Leaders:</h2>
						
						<a>
							<img
								alt="Giuseppe Digilio"
								class="group-leaders-img"
								src="../images/staff/digilio.webp">
						</a>
					</div>
				</div>
			</div>
			
			</div>
<div id='after'></div>
			<div id='footer'>
				<p>
					Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
					Fax. Tel. Mail
				</p>
<?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php'; ?>
<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
            </div>
		
	</div>
	
	<script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
</body>
</html>
