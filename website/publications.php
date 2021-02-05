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
</head>  
<body>
<?php //require_once($localizer . 'includes/analyticstracking.php') ?>
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
					/*
					$today = getdate();
					echo "<select id='pubsSelector' onchange='showPubs(this)'>";
					$lastYear = $today['year'];
					$firstYear = 1974;
					for ($year=$lastYear; $year>=$firstYear; $year--)
					echo "<option value='" . $year . "'>" . $year . "</option>";
					echo "</select>";
					*/
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
								<a href='https://scholar.google.com/citations?user=UUy21EsAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Silvio Aime</b></a>
								<br />                                                              
								<a href='https://scholar.google.com/citations?user=za1fQwwAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Enzo Terreno</b></a>
								<br /> 
								<a href='https://scholar.google.com/citations?user=GwU4wk4AAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Simonetta Geninatti Crich</b></a>
								<br /> 
								<a href='https://scholar.google.com/citations?user=RN1TohEAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Walter Dastru'</b></a>
								<br />                                                              
								<a href='https://scholar.google.com/citations?user=ibKYwMAAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Daniela Delli Castelli</b></a>
								<br /> 
								<a href=''><b>Francesca Reineri</b></a>
								<br />	                                                             
								<a href='https://scholar.google.com/citations?user=Lu_4eBIAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Alessandra Viale</b></a>
								<br />				                                                             
								<a href='https://scholar.google.com/citations?user=WEQvUlMAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Eliana Gianolio</b></a>
								<br />                                                              
								<a href='https://scholar.google.com/citations?user=euGug2wAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Dario Longo</b></a>								
								<br /> 
								<a href=''><b>Juan Carlos Cutrin</b></a>								
								<br />   
								                                                           
								<a href='https://scholar.google.com/citations?user=nYlL2XgAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Valeria Menchise</b></a>
								<br />								                                                           								
								
								<a href='https://scholar.google.com/citations?user=9aBErO8AAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Mauro Botta</b></a>
								<br />
								<a href='https://scholar.google.com/citations?user=gjln1k0AAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Lorenzo Tei</b></a>
								<br />
								<a href='https://scholar.google.com/citations?user=o9WVftoAAAAJ&hl=en&view_op=list_works&sortby=pubdate'><b>Giuseppe Digilio</b></a>
								<br />
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
//initPubs();
//]]>
</script>
	<!-- <script type="text/javascript">changeSideNavStyles();</script> -->
	<!-- InstanceEnd -->

</body>
</html>
