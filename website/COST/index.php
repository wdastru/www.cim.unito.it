<?php $localizer = '../'; ?>
<!DOCTYPE html>
<html lang='en'>
<!-- InstanceBegin template='/Templates/home.dwt' codeOutsidephpIsLocked='false' -->
<head>
    <?php require $localizer . 'includes/head_const_new.inc.php'?>
	<title>Molecular Imaging Center - University of Torino</title>
<meta
	name='description'
	content='University of Torino. Website of the Molecular Imaging Center.'>
<link
	href=''<?php echo $localizer;?>/COST/cost.css'
	rel='stylesheet'
	type='text/css'>
<script src='cost.js'></script>
</head>
<body>
	<div id='section5'>
		<div id='subsection1'>
    		<?php require $localizer . 'includes/main-nav.php'; ?>
    		<?php require $localizer . 'includes/main-nav-mobile.php'; ?>
			<div id='header'></div>
		    <?php require $localizer . 'COST/include/COST-sidebar.php'; ?>
            <?php require $localizer . 'COST/include/COST-sidebar-mobile.php'; ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>COST Action TD1004</h1>
					</div>
					<div class='cost paddingInner'>
						<a
							class='cost'
							href='http://www.cost.eu/domains_actions/cmst/Actions/TD1004'>
							<img
								src='<?php echo $localizer ?>images/logo-COST.bmp'
								alt='COST logo'>
						</a>
						<h2 class='cost'>
							COST Action TD1004 <br> THERANOSTICS IMAGING AND THERAPY: AN
							ACTION TO DEVELOP NOVEL NANOSIZED SYSTEMS FOR IMAGING-GUIDED DRUG
							DELIVERY
						</h2>
						<p class='cost'>The proposed Action brings together the major
							European research groups working on the development of novel
							combined diagnostic/therapeutic agents (theranostic agents).
							Properly designed agents will allow the in vivo quantitative
							assessment of the amount of drug reaching a pathological region
							and the visualisation of molecular changes due to the therapeutic
							effects of the delivered drug.The main objective of the Action is
							to demonstrate the potential of image-guided therapies in the
							treatment of diseases with high social impact. Researchers will
							join efforts to develop novel therapeutic treatments based on the
							visualisation of drug delivery/release processes and the
							monitoring of associated therapeutic effects.The Action goals
							will be reached thanks to a strong interdisciplinary coordination
							work mostly focused to get a better understanding of crucial
							aspects of the whole drug delivery process in vivo, in particular
							regarding the efficiency of drug targeting and release and the
							relationship with the therapeutic effect.The implementation of
							therapies and surgical interventions with imaging technologies
							will provide physicians with an extraordinary tool for
							accelerating the desirable translation towards molecular and
							personalized medicine, thus considerably extending the armoury of
							solutions for successfully combating the diseases.</p>
						<a class='cost' href='<?php echo $localizer . 'COST/MoU.pdf'?>'>
							<strong>Memorandum of Understanding</strong>
						</a>
						<br>
					</div>
				</div>
			</div>
			<!-- subsection closing -->
		</div>
		<!-- subsection closing -->
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
	<script>
        //<![CDATA[
        changeSideNavStyles();
        //]]>
    </script>
	<!-- InstanceEnd -->
</body>
</html>
