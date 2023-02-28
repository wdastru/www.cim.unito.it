<?php
	$localizer = "./";
?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
<?php require $localizer . 'includes/head_const.inc.php'?>
<title>Molecular Imaging Center - University of Torino - Events</title>
<meta name="description" content="University of Torino. Website of the Molecular Imaging Center.">
<style>
  #calendar {
    max-width: 700px;
    margin: 0 auto;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 16px; 
  }
  
  #content a {
  color: #fff;
  }
</style>
</head>
<body>

	<div id='section2'>
	<?php require('includes/main-nav.php'); ?>
		<div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection0">
			<!-- InstanceEndEditable -->
			<div id='sidebar'>
				<div class='padding'>
					<ul id='list'>
						<li id='section2-subsection1' class='subsection_link'><a
							href='educational.php'>Educational</a></li>
						<li id='section2-subsection2' class='subsection_link'><a
							href='news.php'>News</a></li>
					</ul>
				</div>
			</div>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>Events</h1>
					</div>
					<div class='paddingInner'>

						<br>
						<br>
						<iframe
							src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;hl=en&amp;bgcolor=%23ccccff&amp;src=unito.it_rhlc94gnpnlqnus7u9e9i61120%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FRome"
							style="border-width: 0" width="800" height="600"></iframe>
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