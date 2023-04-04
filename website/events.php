<?php $localizer = "./"; ?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
	<?php require $localizer . 'includes/head_const_new.inc.php'?>
	<title>Molecular Imaging Center - University of Torino - Events</title>
<meta name="description"
	content="University of Torino. Website of the Molecular Imaging Center.">
<style>
#calendar {
	max-width: 700px;
	margin: 0 auto;
	font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
	font-size: 16px;
}

#content a {
	color: #fff;
}
</style>
</head>
<body>
	<div id='section2'>
		<?php require ($localizer . 'includes/main-nav.php'); ?>
		<?php require ($localizer . 'includes/main-nav-mobile.php'); ?>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection0">
			<div id='header'></div>
			<!-- InstanceEndEditable -->
			<?php require ($localizer . 'includes/events-side-nav.php'); ?>
            <?php require ($localizer . 'includes/events-side-nav-mobile.php'); ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>Events</h1>
					</div>
					<div class='paddingInner'>
						<iframe
							src="https://calendar.google.com/calendar/embed?src=c_201e4a4ae13e5387c6aff16381253b1a2c81c1cde5813af53e70a72c11f6a33a%40group.calendar.google.com&ctz=Europe%2FRome"
							style="border: 0" width="100%" height="500px" frameborder="0"
							scrolling="no"></iframe>
						<div id='calendar'></div>
					</div>
				</div>
			</div>
			<!-- subsection closing -->
		</div>
		<!-- subsection closing -->
		<div id='after'></div>
		<div id='footer'>
			<p>
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY<br>
				Fax. Tel. Mail
			</p>
<?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
		</div>

		<!-- section closing -->
	</div>
	<!-- section closing -->
	<script src="includes/jQuery/jquery.js"></script>
	<script src="includes/jQuery/monthly.js"></script>
	<script>
//<![CDATA[
changeSideNavStyles();
//]]>
</script>
	<!-- InstanceEnd -->
</body>
</html>