<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino - XNAT </title>
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
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->XNAT 
                             <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                                                                   
                                  <font size="3" ><b>Welcome to the CIM-XNAT information website!</b></font>
                                    <p class="indent">
                                    We installed a <a href= "https://www.xnat.org" target="_blank" style="color:#dc6a10">XNAT</a> service 
                                    available at <a href= "http://cim-xnat.unito.it/app/template/Login.vm" target="_blank" style="color:#dc6a10">http://cim-xnat.unito.it</a>. </br>
                                    Small animal imaging facilities are highly specialized centers that provide the research community access to cutting-edge imaging technologies. 
                                    These centers have therefore to deal with the complexity and the variety of preclinical trial datasets.  Moreover, imaging data analysis requires a 
                                    multidisciplinary effort, in terms of data management and processing. 
                                    Our aim is to overcome this limitation through the integration of an open-source archiving platform with customizable tools for automated image processing. 
                                    The workflow is based on the following steps:
                                    <ul>
     							   <li> retrieving multiple imaging datasets acquired through several instrumentations and modalities either in DICOM (1a) or proprietary formats (1b);</li> 
                                    <li> a direct import of DICOM images to XNAT (2a) or a Bruker ParaVision to DICOM format converter to import images to XNAT (2b); </li> 
                                    <li> an XNAT image processing pipeline accepting as input DICOM files (3a) or an image processing tool accepting raw data (3b) to produce parametric images related to biological aspects.</li> 
                                    </ul>             
									</p>                      
                                    
                                    <img src="../images/research_lines/xnat_workflow.png" style="width: 850px; height: auto;  margin: 20px;" > </img> <br/>
                                    
                                     XNAT natively supports multiple imaging modalities, such as MR, PET, CT, and US. We aim to extend XNAT datatypes to other 
                                    preclinical imaging methods, such as Optoacoustic (OA) and Optical Imaging (OI).</br>
                                    
                                    <p style="text-align:center;"><img src="../images/research_lines/DB.png" style="width: 400px; height: auto;  margin: 20px;" > </img></p>
                                      
                                   We offer the following services:            
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
																					
							<a href="../PI/LONGO/home.html" target="_blankk" title="Dario Longo">
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
