<?php require_once (__DIR__ . '/../../config.inc.php'); ?>
<!DOCTYPE html>
<html lang='en'>
<head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino</title>
<meta
	name="description"
	content="University of Torino. Website of the Molecular Imaging Center.">
<link
	href="<?php echo SITE_ROOT;;?>/COST/cost.css"
	rel='stylesheet'
	type='text/css'>
</head>
<body>
	<div id='section5'>
		<div id="subsection2">
    		<?php include SITE_PATH . 'includes/menu.php'; ?>
			<?php include SITE_PATH . 'includes/header.php'; ?>
			<?php include SITE_PATH . 'COST/include/COST-sidebar.php'; ?>
            <?php include SITE_PATH . 'COST/include/COST-sidebar-mobile.php'; ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>COST Action TD1004</h1>
					</div>
					<div class='paddingInner'>
						<ul>
							<li><a
									href="<?php echo SITE_ROOT; ?>COST/meetings/COST_TD1004-Sep2013.php">COST
									TD1004 Annual Meeting - Instanbul, 3-5 October 2014</a></li>
							<li><a
									href="<?php echo SITE_ROOT; ?>COST/meetings/COST_TD1004-Sep2013.php">COST
									TD1004 Annual Meeting - Athens, 1-3 September 2013</a></li>
							<li><a
									href="<?php echo SITE_ROOT; ?>COST/meetings/COST_TD1004-May2013.php">Inter
									WG COST Action TD1004 EMIM2013 - Torino, 26-28 May 2013</a></li>
							<li><a
									href="<?php echo SITE_ROOT; ?>COST/meetings/COST_TD1004-Oct2012.php">COST
									TD1004 Meeting - London, 28-30 October 2012</a></li>
							<li><a
									href="<?php echo SITE_ROOT; ?>COST/meetings/COST_TD1004-Feb2012.php">COST
									TD1004 Meeting - Torino, 17-18 February 2012</a></li>
						</ul>
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
        //<![CDATA[
        changeSideNavStyles();
        //]]>
	</script>
</body>
</html>
