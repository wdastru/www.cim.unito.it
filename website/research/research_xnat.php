<<<<<<< Updated upstream
<?php $localizer = "../"; ?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
        <?php require $localizer . 'includes/head_const_new.inc.php'?>
        <title>Molecular Imaging Center - University of Torino -
	CIM-XNAT</title>
<meta
	name="description"
	content="">
</head>
<body>
	<div id='section1'>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection22">
			<?php require ($localizer . 'includes/main-nav.php'); ?>
			<?php require ($localizer . 'includes/main-nav-mobile.php'); ?>
 			<div id='header'></div>
			<!-- InstanceEndEditable -->
            <?php require ($localizer . 'includes/research-side-nav.php'); ?>
            <?php require ($localizer . 'includes/research-side-nav-mobile.php'); ?>
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
						<h2>Welcome to the CIM-XNAT information website!</h2>
						<p class="indent">
							Small animal imaging facilities are highly specialized centers
							that provide the research community access to cutting-edge
							imaging technologies. These centers have therefore to deal with
							the complexity and the variety of preclinical image datasets in
							terms of archiving and retrieving image datasets as well as for
							the management and processing. Whereas at clinical level
							<a
								href="https://www.xnat.org"
								target="_blank"
								style="color: #dc6a10">XNAT</a>
							, an open-source imaging informatics software platform dedicated
							for importing, archiving, processing and securely distributing
							imaging and related study data is available and widely exploited,
							to date, no custom or standard solutions are available to
							preclinical imaging centers to fulfill these tasks. Therefore, we
							have overcome these limitations by developing dedicated tools for
							XNAT to facilitate image storage, annotation, and processing at
							preclinical level. A XNAT instance for archiving and processing
							preclinical medical images is available at
							<a
								href="http://eubi-xnat.hpc4ai.unito.it"
								target="_blank"
								style="color: #dc6a10">EUBI-XNAT</a>
							.
						</p>
						<div class="imgCenter">
							<img
								alt="XNAT"
								src="<?php echo $localizer; ?>/images/research_lines/xnat/xnat_workflow.png">
						</div>
						<h2>XNAT-PIC</h2>
						<p class="indent">XNAT for Preclinical Imaging Centers (XNAT-PIC)
							is a free and open-source Windows desktop application (GNU
							General Public License – GPL, v3), which offers several tools to
							expand the XNAT core functionalities to support the preclinical
							imaging community and to promote open science practices. The
							adoption of these tools will improve the findability, the access,
							the interoperability, and reusability (FAIR) of preclinical image
							datasets.</p>
						<h2>Which features does XNAT-PIC offer?</h2>
						<div class='xnat-features'>
							<div class='feature'>
								<img
									alt='uploader'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/uploader.png'>
								<div>
									<h4>Uploader</h4>
									to easily import DICOM image datasets into the XNAT platform.
									It supports upload of whole projects, or of sessions, subjects
									and experiments (scans).
								</div>
							</div>
							<div class='feature'>
								<img
									alt='annotation'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/annotation.png'>
								<div>
									<h4>Grouping Annotation Interface</h4>
									to efficiently cope with different experimental protocols by
									labelling subjects with dedicated Custom Variables to manage
									several types of cohorts (e.g. treated/untreated, timepoints,
									doses, etc..).
								</div>
							</div>
							<div class='feature'>
								<img
									alt='converter'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/converter.png'>
								<div>
									<h4>MRI2DICOM Converter</h4>
									to convert Bruker raw data to DICOM standard, including DICOM
									tags for new MRI modalities, such as Chemical Exchange
									Saturation Transfer (CEST).
								</div>
							</div>
						</div>
						<h2>Let’s Start! Download and start using XNAT-PIC!</h2>
						<div style="padding-left: 2.00rem;">
							<a
								href="<?php echo $localizer; ?>download/XNAT-PIC-2.0.0-win32.msi"
								download>
								<img
									src="<?php echo $localizer; ?>images/XNAT-PIC-2.0.0-download_button.png"
									alt="download button created with https://buttonoptimizer.com/"
									style="max-width: 100%;">
							</a>
							<br>
							<a
								style='font-size: 1.00rem; font-weight: bold;'
								href="<?php echo $localizer; ?>download/XNAT-PIC_v2_UserInstruction.docx">USER
								INSTRUCTIONS</a>
							<br>
							<p style="font-size: 1.00rem; font-weight: bold;">
								Find our code on GitHub!
								<a href="https://github.com/cim-unito/XNAT-PIC">cim-unito/XNAT-PIC</a>
							</p>
						</div>
						<h2>Versions</h2>
						<h3 style='text-align: left; padding-left: 30px;'>XNAT-PIC v2.0</h3>
						<div class='xnat-features'>
							<div class='feature'>
								<img
									alt='xnat-feature-1'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/1.png'>
								<div>
									<h4>Stand-alone SW</h4>
									XNAT-PIC is available for download and immediately usable
									without requiring additional setup.
								</div>
							</div>
							<div class="feature">
								<img
									alt='xnat-feature-2'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/2.png'>
								<div>
									<h4>User-friendly interface</h4>
									We have designed an interface that is easy to navigate and
									understand, which facilitates user interaction with the system.
								</div>
							</div>
							<div class="feature">
								<img
									alt='xnat-feature-3'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/3.png'>
								<div>
									<h4>Secure Access</h4>
									Credentials to connect to an XNAT instance to load images
									dataset from the desktop client are protected by cryptographic
									algorithm.
								</div>
							</div>
							<div class="feature">
								<img
									alt='xnat-feature-4'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/4.png'>
								<div>
									<h4>Additional Files</h4>
									Ability to upload non-DICOM files such as parametric maps,
									results, etc. to the XNAT platform.
								</div>
							</div>
							<div class="feature">
								<img
									alt='xnat-feature-5'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/5.png'>
								<div>
									<h4>Improved Speed</h4>
									The addition of multicore processing has enhanced the
									conversion speed of raw MRI file formats to the DICOM.
								</div>
							</div>
							<div class="feature">
								<img
									alt='xnat-feature-6'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/6.png'>
								<div>
									<h4>More objects</h4>
									The user can convert, upload, or create an entire project,
									single subject, or experiment (scans) on XNAT.
								</div>
							</div>
							<div class="feature">
								<img
									alt='xnat-feature-7'
									src='<?php echo $localizer; ?>/images/research_lines/xnat/7.png'>
								<div>
									<h4>Interface for grouping annotation</h4>
									Interface designed with features and functions that allow users
									to easily group and categorize information regarding
									preclinical images.
								</div>
							</div>
						</div>
						<h3 style='text-align: left; padding-left: 30px;'>XNAT-PIC v1.0</h3>
						Functionality of XNAT-PIC:
						<ul>
							<li>Convert experiments (pool of scans) from BRUKER format to
								standard DICOM.</li>
							<li>Upload experiments to XNAT platform.</li>
							<li>The custom variables are edited based on the folder
								structure.</li>
						</ul>
						GitHub:
						<a href='https://github.com/szullino/XNAT-PIC'>GIT-HUB Sara
							Zullino</a>
						<br> <br>
						<h2>Contact information</h2>
						<p>
							XNAT administrator:<b>Kranthi Thej Kandula</b> <br>Research
							Fellow at University of Turin <br>mail:
							<a
								title="Profile"
								href="mailto:kranthithej.kandula@unito.it">kranthithej.kandula@unito.it
							</a>
						</p>
						<p>
							XNAT-PIC developer: <b>Francesco Gammaraccio</b><br>Research
							Fellow at University of Turin <br>mail:
							<a
								title="Profile"
								href="mailto:francesco.gammaraccio@unito.it">
								francesco.gammaraccio@unito.it</a>
						</p>
						<h2>Acknowledgements</h2>
						<p>European Union’s Horizon 2020 research and innovation programme
							under grant agreements #824087 (EOSC-LIFE project), #965345
							(HealthyCloud project), #101058427 (EOSC4Cancer project) and #
							1011100633 (EUCAIM project).</p>
						<br>
						<div class="flex-container-row">
							<div class="xnat-acknowledgements">
								<a
									href="https://www.eosc-life.eu//"
									target="_blank">
									<img
										alt="EOSC-Life"
										src="../images/research_lines/eosclogo.png">
								</a>
							</div>
							<div class="xnat-acknowledgements">
								<a
									href="https://healthycloud.eu/"
									target="_blank">
									<img
										alt="healthyCloud"
										src="../images/research_lines/xnat/healthycloud.jpg">
								</a>
							</div>
							<div class="xnat-acknowledgements">
								<a
									href="https://eosc4cancer.eu/"
									target="_blank">
									<img
										alt="EOSC-Cancer"
										src="../images/research_lines/xnat/eosc-cancer.png">
								</a>
							</div>
							<div class="xnat-acknowledgements">
								<a
									href="https://www.eibir.org/projects/eucaim/"
									target="_blank">
									<img
										alt="EUCAIM"
										src="../images/research_lines/xnat/eucaim.png">
								</a>
							</div>
							<div class="xnat-acknowledgements">
								<a
									href="https://european-union.europa.eu/index_en"
									target="_blank">
									<img
										alt="EU-logo"
										src="../images/research_lines/xnat/EU-logo.svg">
								</a>
							</div>
						</div>
						<!-- <b>Links/References</b> <br> <br>
						<p class="indent">
							XNAT home page:
							<a
								title="Profile"
								href="http://www.xnat.org"
								style="color: #dc6a10"> http://www.xnat.org</a>
							<br>
						</p>
						<p class="indent">
							User documentation:
							<a
								title="Profile"
								href="https://wiki.xnat.org/documentation"
								style="color: #dc6a10"> https://wiki.xnat.org/documentation</a>
						</p> -->
						<hr>
						<h2 style="text-align: left;">Group Leaders:</h2>
						<a
							href="../PI/Longo/home.php"
							target="_blank"
							title="Dario Longo">
							<img
								alt="Dario Longo"
								class="group-leaders-img"
								src="../images/staff/Dario_Longo.webp">
						</a>
						<a
							href="#"
							target="_blank"
							title="Walter Dastr&ugrave;">
							<img
								alt="Walter Dastr&ugrave;"
								class="group-leaders-img"
								src="../images/staff/dastru.webp">
						</a>
						<!-- InstanceEndEditable -->
					</div>
				</div>
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
			<!-- subsection closing -->
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
||||||| Stash base
<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino - CIM-XNAT </title>
        <meta name="description" content="" />
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
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
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->CIM-XNAT 
                             <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                                                                   
                                  <font size="3" ><b>Welcome to the CIM-XNAT information website!</b></font>
                                    <p class="indent">
                                    A <a href= "https://www.xnat.org" target="_blank" style="color:#dc6a10">XNAT</a> service for archiving and processing preclinical medical images is
                                    available at <a href= "http://cim-xnat.unito.it/app/template/Login.vm" target="_blank" style="color:#dc6a10">http://cim-xnat.unito.it</a>. </br>
                                    Small animal imaging facilities are highly specialized centers that provide the research community access to cutting-edge imaging technologies. 
                                    These centers have therefore to deal with the complexity and the variety of preclinical image datasets in terms of archiving and retrieving image datasets as well as
									for the management and processing. To date, no custom or standard solutions are available to imaging centers to fullfill these tasks.</br>
									
									XNAT natively supports multiple imaging modalities, such as MR, PET, CT, and US. We are extending XNAT datatypes to other 
                                    preclinical imaging modalities, such as Optoacoustic (OA) and Optical Imaging (OI).</br>
                                    
                                    <p style="text-align:center;"><img src="../images/research_lines/DB.png" style="width: 400px; height: auto;  margin: 20px;" > </img></p>
                                    
									
									We have overcome these limitations through the integration of an open-source archiving platform commonly exploited at clinical level based on XNAT with customizable tools for automated image processing. 
                                    
									The developed platform can provide the following workflow:
                                    <ul>
     							   <li> importing multiple imaging datasets acquired through several instrumentations and modalities either in DICOM (1) or proprietary formats via DICOM converter (2);</li> 
                                    <li> managing different experimental protocols importing user-defined variables (treated/untreated groups, different timepoints, doses, ...); </li> 
                                    <li> image processing tool accepting raw data (3) or an XNAT image processing pipeline accepting as input DICOM files (4) to produce parametric images by calling user-proprietary image-analysis script.</li> 
                                    </ul>             
									</p>                      
                                    
                                    <img src="../images/research_lines/xnat_workflow.png" style="width: 850px; height: auto;  margin: 20px;" > </img> <br/>
                                    
                                      
                                    In the near future, we offer the following services:            
     							   <ul>
     							   <li>Each user can, after registration, create his/her own projects and upload DICOM data. </li> 
     							   <li>Users can run external applications and shell scripts (pipeline) passing the required parameters to the application to 
     							   download the data, process it and import the processed data back to XNAT. To date Diffusion Weigthed Imaging (DWI) processing pipelines that cun run at project/subject level are available on our XNAT instance.</li>
									<li>Users can either use previously imported mask on XNAT or create mask directly on XNAT (beta) to obtain parametric images.</li>
                                     </ul>
                                    
									
                                    <font size="3" ><b>Contact information</b></font>
                                     <p class="indent">
                                    XNAT administrators:
                                    <a title="Profile" href="../staff/staff_zullino.php">								
									<b>Sara Zullino</b></a>,
									<a title="Profile" href="../staff/staff_paglialonga.php">								
									<b>Alessandro Paglialonga</b></a></p>
									
									

									<font size="3" >
                                    <b>Acknowledgements</b><br/></font>
                                    <p class="indent">
                                    <a href="https://www.corbel-project.eu/home.html" target="_blankk">
                                    <img src="../images/research_lines/figure_research_xnat_corbel.png" style="width: 100px; height: auto;  margin: 30px;" > </img></a>                                
                                    <a href="http://www.eurobioimaging.eu/" target="_blankk">
                                    <img src="../images/research_lines/euro_bio_imaging_logo.jpg" style="width: 230px; height: auto;  margin: 30px;" > </img></a>
                                    <a href="http://www.mmmi.unito.it/" target="_blankk">
                                    <img src="../images/research_lines/2logo_MMMI_2.png" style="width: 230px; height: auto;  margin: 30px;" > </img></a> </p>
                                                                         

									<font size="3" >
                                    <b>Links/References</b><br/></font></p>
                                    <p class="indent">
                                    XNAT home page:
                                    <a title="Profile" href="http://www.xnat.org" style="color:#dc6a10">								
									http://www.xnat.org</a></p>
									
									<p class="indent">
                                    User documentation:
                                    <a title="Profile" href="https://wiki.xnat.org/documentation" style="color:#dc6a10">								
									https://wiki.xnat.org/documentation</a></p>
                                    
                                    
                                    
                                    
                                    
                                
                            
                              
                               
                            </p>
							
							
                            
                            <hr></hr>
                            
							<h2 style="text-align:left;"> Group Leaders: </h2>					
																					
							<a href="../PI/Longo/home.php" target="_blankk" title="Dario Longo">
							<img src="../images/staff/Dario_Longo.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
							
							<a href="#" target="_blank" title="Walter Dastr&ugrave;">
							<img src="../images/staff/dastru.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
							
							
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
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino -
                    ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            <div id='validators'>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"><img src=
                    "images/valid-xhtml10-blue_opt.png" alt=
                    "Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
                </p>
                <p>
                    <a href=
                    "http://jigsaw.w3.org/css-validator/check?uri=referer"><img style=
                    "border:0;width:88px;height:31px" src="images/vcss-blue_opt.gif"
                    alt="CSS Valido!" /></a>
                </p>
            </div>
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script><!-- InstanceEnd -->
    </body>
</html>
=======
<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino - CIM-XNAT </title>
        <meta name="description" content="" />
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
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
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->CIM-XNAT 
                             <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                                                                   
                                  <font size="3" ><b>Welcome to the CIM-XNAT information website!</b></font>
                                    <p class="indent">
                                    A <a href= "https://www.xnat.org" target="_blank" style="color:#dc6a10">XNAT</a> service for archiving and processing preclinical medical images is
                                    available at <a href= "http://cim-xnat.unito.it/app/template/Login.vm" target="_blank" style="color:#dc6a10">http://cim-xnat.unito.it</a>. </br>
                                    Small animal imaging facilities are highly specialized centers that provide the research community access to cutting-edge imaging technologies. 
                                    These centers have therefore to deal with the complexity and the variety of preclinical image datasets in terms of archiving and retrieving image datasets as well as
									for the management and processing. To date, no custom or standard solutions are available to imaging centers to fullfill these tasks.</br>
									
									XNAT natively supports multiple imaging modalities, such as MR, PET, CT, and US. We are extending XNAT datatypes to other 
                                    preclinical imaging modalities, such as Optoacoustic (OA) and Optical Imaging (OI).</br>
                                    
                                    <p style="text-align:center;"><img src="../images/research_lines/DB.png" style="width: 400px; height: auto;  margin: 20px;" > </img></p>
                                    
									
									We have overcome these limitations through the integration of an open-source archiving platform commonly exploited at clinical level based on XNAT with customizable tools for automated image processing. 
                                    
									The developed platform can provide the following workflow:
                                    <ul>
     							   <li> importing multiple imaging datasets acquired through several instrumentations and modalities either in DICOM (1) or proprietary formats via DICOM converter (2);</li> 
                                    <li> managing different experimental protocols importing user-defined variables (treated/untreated groups, different timepoints, doses, ...); </li> 
                                    <li> image processing tool accepting raw data (3) or an XNAT image processing pipeline accepting as input DICOM files (4) to produce parametric images by calling user-proprietary image-analysis script.</li> 
                                    </ul>             
									</p>                      
                                    
                                    <img src="../images/research_lines/xnat_workflow.png" style="width: 850px; height: auto;  margin: 20px;" > </img> <br/>
                                    
                                      
                                    In the near future, we offer the following services:            
     							   <ul>
     							   <li>Each user can, after registration, create his/her own projects and upload DICOM data. </li> 
     							   <li>Users can run external applications and shell scripts (pipeline) passing the required parameters to the application to 
     							   download the data, process it and import the processed data back to XNAT. To date Diffusion Weigthed Imaging (DWI) processing pipelines that cun run at project/subject level are available on our XNAT instance.</li>
									<li>Users can either use previously imported mask on XNAT or create mask directly on XNAT (beta) to obtain parametric images.</li>
                                     </ul>
                                    
									
                                    <font size="3" ><b>Contact information</b></font>
                                     <p class="indent">
                                    XNAT administrators:
                                    <a title="Profile" href="../staff/staff_zullino.php">								
									<b>Sara Zullino</b></a>,
									<a title="Profile" href="../staff/staff_paglialonga.php">								
									<b>Alessandro Paglialonga</b></a></p>
									
									

									<font size="3" >
                                    <b>Acknowledgements</b><br/></font>
                                    <p class="indent">
                                    <a href="https://www.corbel-project.eu/home.html" target="_blankk">
                                    <img src="../images/research_lines/figure_research_xnat_corbel.png" style="width: 100px; height: auto;  margin: 30px;" > </img></a>                                
                                    <a href="http://www.eurobioimaging.eu/" target="_blankk">
                                    <img src="../images/research_lines/euro_bio_imaging_logo.jpg" style="width: 230px; height: auto;  margin: 30px;" > </img></a>
                                    <a href="http://www.mmmi.unito.it/" target="_blankk">
                                    <img src="../images/research_lines/2logo_MMMI_2.png" style="width: 230px; height: auto;  margin: 30px;" > </img></a> </p>
                                                                         

									<font size="3" >
                                    <b>Links/References</b><br/></font></p>
                                    <p class="indent">
                                    XNAT home page:
                                    <a title="Profile" href="http://www.xnat.org" style="color:#dc6a10">								
									http://www.xnat.org</a></p>
									
									<p class="indent">
                                    User documentation:
                                    <a title="Profile" href="https://wiki.xnat.org/documentation" style="color:#dc6a10">								
									https://wiki.xnat.org/documentation</a></p>
                                    
                                    
                                    
                                    
                                    
                                
                            
                              
                               
                            </p>
							
							
                            
                            <hr></hr>
                            
							<h2 style="text-align:left;"> Group Leaders: </h2>					
																					
							<a href="../PI/Longo/home.php" target="_blankk" title="Dario Longo">
							<img src="../images/staff/Dario_Longo.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
							
							<a href="#" target="_blank" title="Walter Dastr&ugrave;">
							<img src="../images/staff/dastru.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
							
							
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
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino -
                    ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            <div id='validators'>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"><img src=
                    "images/valid-xhtml10-blue_opt.png" alt=
                    "Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
                </p>
                <p>
                    <a href=
                    "http://jigsaw.w3.org/css-validator/check?uri=referer"><img style=
                    "border:0;width:88px;height:31px" src="images/vcss-blue_opt.gif"
                    alt="CSS Valido!" /></a>
                </p>
            </div>
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script><!-- InstanceEnd -->
    </body>
</html>
>>>>>>> Stashed changes
