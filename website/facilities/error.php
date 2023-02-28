<?php
$localizer = "../";
?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/facilities.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
<title>Molecular Imaging Center - University of Torino - Facilities</title>
<meta name="description" content="">
</head>
<body>

	<div id='section3'>
            <?php require ($localizer . 'includes/main-nav.php'); ?>
            <div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id='subsection0'>
			<!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/facilities-side-nav.php');
                ?>
                <div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							Facilities
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->
						<p>ERROR !!! <?php echo $_GET['error_string']?></p>
						<input class='button' type='button' value='Back'
							onclick='history.back();'>
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
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
					Fax. Tel. Mail 
			
			</p>
                <?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
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
