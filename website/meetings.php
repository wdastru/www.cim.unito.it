<?php
    require_once __DIR__ . '/config.inc.php';
    $activeSection    = 'events';
    $activeSubsection = 'meetings';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
		<title>Molecular Imaging Center - University of Torino - Meetings</title>
<meta
	name='description'
	content=''>
</head>
<body>
	<div id='section2'>
		<?php include SITE_PATH . 'includes/menu.php'; ?>
		<?php include SITE_PATH . 'includes/header.php'; ?>
		<div class="main-area">
		<?php include SITE_PATH . 'includes/events-side-nav.php'; ?>
		<?php include SITE_PATH . 'includes/events-side-nav-mobile.php'; ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							Meetings
						</h1>
					</div>
					<div class='paddingInner'>
						<ul>
							<li><a href='COST/meetings/COST_TD1004-Feb2012.php'>COST TD1004
									Meeting - Torino, 17-18 February 2012</a></li>
							<li><a href='COST/meetings/COST_D38-Mar2011.php'>COST Action D38
									'Metal-Based Systems for Molecular Imaging Applications' -
									Working Groups 2 and 6 Joint Meeting - March 24-26, 2011</a></li>
						</ul>
					</div>
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
	
	<script>
        //<![CDATA[
        changeSideNavStyles();
        //]]>
    </script>
</body>
</html>
