<?php require_once (__DIR__ . '/../config.inc.php'); ?>
<!DOCTYPE html>
<html lang='en'>
<head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
		<title>Molecular Imaging Center - University of Torino</title>
<meta
	name="description"
	content="University of Torino. Website of the Molecular Imaging Center.">
<link
	href="cost.css"
	rel='stylesheet'
	type='text/css'>
<script src="cost.js"></script>
</head>
<body>
	<div id='section5'>
		<div id="subsection3">
            <?php require SITE_PATH . 'includes/main-nav.php'; ?>
    		<?php require SITE_PATH . 'includes/main-nav-mobile.php'; ?>
			<div id='header'></div>
            <?php require SITE_PATH . 'COST/include/COST-sidebar.php'; ?>
            <?php require SITE_PATH . 'COST/include/COST-sidebar-mobile.php'; ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>COST Action TD1004</h1>
					</div>
					<div class='paddingInner'>
						<ul>
							<li>
								<h2 style="text-align: left">
									<a
										class='linkExternal'
										href="http://www.escdd.eu/">
										13<sup>th</sup> edition of the European Symposium on
										Controlled Drug Delivery.
									</a>
								</h2>
								<p>
									<span style="text-decoration: underline;">Meeting of Working
										Group 4 (Gerben Konings).</span> <br> Location : Hotel
										Zuiderduin, Egmond aan Zee, The Netherlands. <br> Date : April
											16-18, 2014 
								</p>
							</li>
							<li>
								<h2 style="text-align: left">
									<a
										class='linkExternal'
										href="http://www.cost.eu/events/pemed/">Personalised Medicine:
										Better Healthcare for the Future - A Rational Approach
										Focusing on Bioinformatics, Medicinal Chemistry and Medicine</a>
								</h2>
								<p>
									Location : Larnaca, Cyprus <br> Date : 17 - 22 June 2012 
								</p>
							</li>
						</ul>
						<br>
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
				<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php';?>
			</div>
			
		</div>
	</div>
	
	<script>
        changeSideNavStyles();
    </script>
</body>
</html>
