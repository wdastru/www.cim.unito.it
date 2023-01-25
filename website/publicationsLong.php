<?php
	$localizer = "./";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/publications.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<?php require $localizer . 'includes/head_const.inc.php'?>
<title>Molecular Imaging Center - University of Torino - Publications</title>
<meta name="description" content="Publications from people at the Molecular Imaging Center" />
<script src="scriptLongPubs.js" type="text/javascript">
</script>
</head>  
<body>

	<div id='section6'>
	<?php require('includes/main-nav.php'); ?>
		<div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id='pubSubSectOpen'>
			<!-- InstanceEndEditable -->
			<div id="subsection0">
				<div id='sidebar-narrow'>
					<div class='padding'>
					<?php
					$today = getdate();
					echo "<select id='pubsSelector' onchange='showPubs(this)'>";
					$lastYear = $today['year'];
					$firstYear = 1974;
					for ($year=$lastYear; $year>=$firstYear; $year--)
					echo "<option value='" . $year . "'>" . $year . "</option>";
					echo "</select>";
					?>
					</div>
				</div>
				<div id='content-large'>
					<div class='paddingOuter'>
						<div class='band'>
							<h1 class='subsectionTitle'>
								<!-- InstanceBeginEditable name="subsection title" -->
								Publications
								<!-- InstanceEndEditable -->
							</h1>
							<h1 id='publicationYear'></h1>
						</div>
						<div class='paddingInner'>
							<!-- InstanceBeginEditable name="subsection content" -->
							<div id="publicationsContainer">
								<!-- 
									
									-->
								
							</div>
						</div>
						<!-- InstanceEndEditable -->
					</div>
				</div>
			</div>
			<!-- subsection closing -->
		</div>
		<!-- subsection closing -->
		<div id='after'></div>
		<div id='footer'>
			<p>
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY<br />
				Fax. Tel. Mail
			</p>
		</div>
		
		<!-- section closing -->
	</div>
	<!-- section closing -->
	<script type="text/javascript">
//<![CDATA[
initPubs();
//]]>
</script>
	<!-- <script type="text/javascript">changeSideNavStyles();</script> -->
	<!-- InstanceEnd -->

</body>
</html>
