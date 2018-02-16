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


<link href='includes/calendar/fullcalendar.min.css' rel='stylesheet' />
<link href='includes/calendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />

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
						<dt id='section2-subsection2' class='subsection_link'>
							<a href='meetings.php'>Meetings</a>
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
					   <p>The Centre of Molecular Imaging hosts several educational, teaching, workshop and scientific events to promote the field of imaging science.</p>
					   <p>In addition, we provide molecular imaging courses within the <a href="http://www.molecularbiotechnology.unito.it/do/home.pl/Home" target="_blank">
					   <span class='paperTitle'>Biotechnology Master degree</span></a> to educate students and to train young investigators.</p> 
					   <br /><br />
					
					
					
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
<script src='includes/calendar/lib/moment.min.js'></script>
<script src='includes/calendar/lib/jquery.min.js'></script>
<script src='includes/calendar/fullcalendar.min.js'></script>
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,listWeek'
      },
      defaultDate: '2018-02-12',
      editable: false,
      navLinks: false, // can click day/week names to navigate views
      eventLimit: true, // allow "more" link when too many events
      events: {
        url: 'includes/calendar/php/get-events.php',
        error: function() {
          $('#script-warning').show();
        }
      },
      eventClick: function(event) {
          if (event.url) {
              window.open(event.url);
              return false;
          }
      },
      loading: function(bool) {
        $('#loading').toggle(bool);
      }
    });

  });

</script>




	<!-- InstanceEnd -->
</body>
</html>

<style>

  
  #calendar {
    max-width: 900px;
    margin: 0 auto;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 16px; 
  }
  
  #content a {
  color: #fff;
  }

</style>