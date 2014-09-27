<?php
	$localizer = "./";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/publications.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta name="generator"
	content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
<!-- InstanceBeginEditable name="title" -->
<title>Molecular Imaging Center - University of Torino - Publications</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="meta description" -->
<meta name="description"
	content="Publications from people at the Molecular Imaging Center" />
<!-- InstanceEndEditable -->
<meta name="google-site-verification"
	content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
<meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
<meta name="keywords"
	content="NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia" />
<link href="stylesheet.css" rel='stylesheet' type='text/css' />
<script src="scriptLongPubs.js" type="text/javascript">
</script>
</head>  
<body>
<?php require_once($localizer . 'includes/analyticstracking.php') ?>
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
						<div id='band'>
							<h1 id='subsectionTitle'>
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
		<div id='validators'>
			<p>
				<a href="http://validator.w3.org/check?uri=referer"><img
					src="images/valid-xhtml10-blue_opt.png"
					alt="Valid XHTML 1.0 Transitional" height="31" width="88" /> </a>
			</p>
			<p>
				<a href="http://jigsaw.w3.org/css-validator/check?uri=referer"><img
					style="border: 0; width: 88px; height: 31px"
					src="images/vcss-blue_opt.gif" alt="CSS Valido!" /> </a>
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