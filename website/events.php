<?php
	$localizer = "./";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
	xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
<head>
<?php require $localizer . 'includes/head_const.inc.php'?>
<title>Molecular Imaging Center - University of Torino - Events</title>
<meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />





</head>
<body>
<?php require_once($localizer . 'includes/analyticstracking.php') ?>
	<div id='section2'>
	<?php require('includes/main-nav.php'); ?>
		<div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection0">
			<!-- InstanceEndEditable -->
			<div id='sidebar'>
				<div class='padding'>
					<dl id='list'>
						<dt id='section2-subsection1' class='subsection_link'>
							<a href='educational.php'>Educational</a>
						</dt>
						<dt id='section2-subsection3' class='subsection_link'>
							<a href='news.php'>News</a>
						</dt>
						
					</dl>
				</div>
			</div>
			<div id='content'>
				<div class='paddingOuter'>
					<div id='band'>
						<h1 id='subsectionTitle'>
							Events
						</h1>
					</div>
					<div class='paddingInner'>
					   
					   <br /><br />
<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23ccccff&amp;src=unito.it_rhlc94gnpnlqnus7u9e9i61120%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Europe%2FRome" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>					<!-- calendario preso da https://fullcalendar.io/  -->
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
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY<br />
				Fax. Tel. Mail
			</p>
		</div>
		<div id='validators'>
			<p>
				<a href="http://validator.w3.org/check?uri=referer"><img
					src="images/valid-xhtml10-blue_opt.png"
					alt="Valid XHtml 1.0 Transitional" height="31" width="88" /> </a>
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
	<script type="text/javascript" src="includes/jQuery/jquery.js"></script>
<script type="text/javascript" src="includes/jQuery/monthly.js"></script>
	<script type="text/javascript">
//<![CDATA[
changeSideNavStyles();
//]]>
</script>




	<!-- InstanceEnd -->
</body>
</html>

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