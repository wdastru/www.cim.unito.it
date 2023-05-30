<?php $localizer = "../"; ?>
<!DOCTYPE html>
<html lang='en'>
<head>
        <?php require $localizer . 'includes/head_const_new.inc.php'?>
		<title>Molecular Imaging Center - University of Torino</title>
<meta
	name="description"
	content="University of Torino. Website of the Molecular Imaging Center." />
<link
	href="<?php echo $localizer; ?>CEST2014/CEST.css"
	rel='stylesheet'
	type='text/css'></link>
</head>
<body>
	<div id='section0'>
		<div id="subsection0">
    		<?php require('includes/main-nav.php'); ?>
    		<?php require('includes/main-nav-mobile.php'); ?>
			<div id='header'></div>
			<?php require ($localizer . 'includes/home-side-nav.php'); ?>
        	<?php require ($localizer . 'includes/home-side-nav-mobile.php'); ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>CEST 2014</h1>
					</div>
					<div id='CEST-section0'>
                            <?php
                            require ('include/CEST-nav.php');
                            ?>
						<div class='paddingInner'>
							<img
								src="images/bioparco_long.jpg"
								style="width: 100%;"
								alt="BioIndustry Park logo">
							<h1 style="line-height: 28px; text-align: center;">
								CEST 2014 <br /> 4<sup>th</sup> International Workshop on
								Chemical Exchange Saturation Transfer Imaging
							</h1>
							<br>
							<p>
								After Turin (2010), Dallas (2011) and Annapolis (2012) the next
								CEST Workshop will be held again in Italy at the Bioindustry
								Park in Colleretto Giacosa (55 km from Turin, Italy) on May 8-9<sup>th</sup>,
								2014.
							</p>
							<p>
								<b style="color: #db6d16">CEST 2014 is jointly organized by the
									University of Turin, the Bioindustry Park and the GIDRM
									(Italian Magnetic Resonance Discussion Group).</b>
							</p>
							<p>
								It will be a satellite-event of the
								<a
									class='linkExternal'
									href="http://www.ismrm.org/14/">
									<span class='underline'>ISMRM Conference</span>
								</a>
								that will take place in Milan (May 10-16<sup>th</sup>, 2014).
							</p>
							<p>
								The workshop is intended to bring together research groups
								worldwide involved in the improvement of CEST imaging and
								spectroscopy and highlight new pulse sequences/imaging schemes,
								contrast agents and applications of this emerging new
								technology. <br /> This workshop will welcome both established
								and new investigators, and aims to provide a broad overview of
								the field, with two days of sessions which include both oral and
								posters presentations.
							</p>
							<ul>
								<li><a href="<?php echo $localizer; ?>CEST2014/about.php">
										<b>About the meeting</b>
									</a></li>
								<li><a href="<?php echo $localizer; ?>CEST2014/attendance.php">
										<b>Attending the meeting</b>
									</a></li>
								<li><a href="<?php echo $localizer; ?>CEST2014/submission.php">
										<b>Abstract submission</b>
									</a></li>
								<li><a href="<?php echo $localizer; ?>CEST2014/register.php">
										<b>Online Registration</b>
									</a></li>
							</ul>
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
				<?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
				<?php include $localizer . 'includes/PageSpeedTest.inc.php';?>
			</div>
			<!-- section closing -->
		</div>
		<!-- section closing -->
	</div>
	<!-- InstanceEnd -->
</body>
</html>
