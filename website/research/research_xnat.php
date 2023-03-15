<?php
$localizer = "../";
?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino -
	CIM-XNAT</title>
<meta name="description" content="">
</head>
<body>

	<div id='section1'>
            <?php
            require ('../includes/main-nav.php');
            ?>
            <div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection22">
			<!-- InstanceEndEditable -->
                <?php
                require ('../includes/research-side-nav.php');
                ?>
                <div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							CIM-XNAT
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->
						<b>Welcome to the CIM-XNAT information website!</b>
						<p class="indent">
							A <a href="https://www.xnat.org" target="_blank"
								style="color: #dc6a10">XNAT</a> service for archiving and
							processing preclinical medical images is available at <a
								href="http://eubi-xnat.hpc4ai.unito.it" target="_blank"
								style="color: #dc6a10">EUBI-XNAT</a>. <br> Small animal imaging
							facilities are highly specialized centers that provide the
							research community access to cutting-edge imaging technologies.
							These centers have therefore to deal with the complexity and the
							variety of preclinical image datasets in terms of archiving and
							retrieving image datasets as well as for the management and
							processing. To date, no custom or standard solutions are
							available to imaging centers to fullfill these tasks.<br> XNAT
							natively supports multiple imaging modalities, such as MR, PET,
							CT, and US. We are extending XNAT datatypes to other preclinical
							imaging modalities, such as Optoacoustic (OA) and Optical Imaging
							(OI).
						</p>

						<p style="text-align: center;">
							<img alt="XNAT" src="../images/research_lines/DB.png"
								style="width: 400px; height: auto; margin: 20px;">
						</p>

						<p>We have overcome these limitations through the integration of
							an open-source archiving platform commonly exploited at clinical
							level based on XNAT with customizable tools for automated image
							processing. The developed platform can provide the following
							workflow:</p>
						<ul>
							<li>importing multiple imaging datasets acquired through several
								instrumentations and modalities either in DICOM (1) or
								proprietary formats via DICOM converter (2);</li>
							<li>managing different experimental protocols importing
								user-defined variables (treated/untreated groups, different
								timepoints, doses, ...);</li>
							<li>image processing tool accepting raw data (3) or an XNAT image
								processing pipeline accepting as input DICOM files (4) to
								produce parametric images by calling user-proprietary
								image-analysis script.</li>
						</ul>

						<a
							href="<?php echo $localizer; ?>download/XNAT-PIC-2.0.0-win32.msi"
							download><img
							src="<?php echo $localizer; ?>images/XNAT-PIC-2.0.0-download_button.png" alt="download button created with https://buttonoptimizer.com/"></a>
						<br> <br> In the near future, we offer the following services:
						<ul>
							<li>Each user can, after registration, create his/her own
								projects and upload DICOM data.</li>
							<li>Users can run external applications and shell scripts
								(pipeline) passing the required parameters to the application to
								download the data, process it and import the processed data back
								to XNAT. To date Diffusion Weigthed Imaging (DWI) processing
								pipelines that cun run at project/subject level are available on
								our XNAT instance.</li>
							<li>Users can either use previously imported mask on XNAT or
								create mask directly on XNAT (beta) to obtain parametric images.</li>
						</ul>

						<b>Contact information</b>
						<p class="indent">
							XNAT administrators: <a title="Profile"
								href="../staff/staff_zullino.php"> <b>Sara Zullino</b></a>
						</p>

						<b>Acknowledgements</b> <br>
						<p class="indent">
							<a href="https://www.corbel-project.eu/home.html" target="_blank">
								<img alt="Corbel"
								src="../images/research_lines/figure_research_xnat_corbel.png"
								style="width: 100px; height: auto; margin: 30px 25px; vertical-align: middle;">
							</a> <a href="http://www.eurobioimaging.eu/" target="_blank"> <img
								alt="Euro BioImaging"
								src="../images/research_lines/euro_bio_imaging_logo.jpg"
								style="width: 200px; height: auto; margin: 30px 25px; vertical-align: middle;">
							</a> <a href="http://www.mmmi.unito.it/" target="_blank"> <img
								alt="MMMI" src="../images/research_lines/2logo_MMMI_2.png"
								style="width: 200px; height: auto; margin: 30px 25px; vertical-align: middle;">
							</a> <a href="https://www.eosc-life.eu//" target="_blank"> <img
								alt="EOSC-Life" src="../images/research_lines/eosclogo.png"
								style="width: 100px; height: auto; margin: 30px 25px; vertical-align: middle;">
							</a>
						</p>
						<b>Links/References</b> <br>
						<br>
						<p class="indent">
							XNAT home page: <a title="Profile" href="http://www.xnat.org"
								style="color: #dc6a10"> http://www.xnat.org</a> <br>
						</p>
						<p class="indent">
							User documentation: <a title="Profile"
								href="https://wiki.xnat.org/documentation"
								style="color: #dc6a10"> https://wiki.xnat.org/documentation</a>
						</p>
						<hr>
						<h2 style="text-align: left;">Group Leaders:</h2>
						<a href="../PI/Longo/home.php" target="_blank" title="Dario Longo">
							<img alt="Dario Longo" class="group-leaders-img"
							src="../images/staff/Dario_Longo.jpg">
						</a> <a href="#" target="_blank" title="Walter Dastr&ugrave;"> <img
							alt="Walter Dastr&ugrave;" class="group-leaders-img"
							src="../images/staff/dastru.jpg"></a>
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
