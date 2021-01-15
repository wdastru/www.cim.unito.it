<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino - Image Processing </title>
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
            <div id="subsection21">
                <!-- InstanceEndEditable -->
                <?php
                    require ('../includes/research-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->Image Processing 
                             <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                            <p class='indent'>
                               
                               Extraction of information from raw images (coming from several modalities) is a fundamental step in molecular imaging applications. In our center we develop novel image processing 
                               methods and use them in several applications. These applications are mainly focused on quantitative MRI analysis. Our research cover several imaging applications:<br />
 
 							   <ul>
 							   <li><b>DCE-MRI</b>
                                    <p class="indent">
                                     This research line covers different approaches to analyze DCE-MRI experiments for assessing tumor vasculature properties. We have developed both semi-quantitative 
                                     (shape analysis) and quantitative (Tofts&#39; compartment models) approaches implemented in Matalb and C++ languages for preclinical DCE-MRI studies acquired with Bruker or
                                      Aspect MRI scanners. These methods have been integrated in the open source KMaps software (link github), based on the 
                                      <a href= "http://mitk.org/wiki/The_Medical_Imaging_Interaction_Toolkit_(MITK)" target="_blank" style="color:#dc6a10">MITK</a> (The Medical Imaging Interaction Toolkit) libraries. 
                                      This software allows image registration, automatic AIF (arterial input function) extraction and clustering of parametric images.                            
                                    </p></li>
                                
                                 <li><b>CEST-MRI</b>
                                    <p class="indent">
                                    This research area cover several approaches for an accurate quantification of CEST contrast. We have developed matlab-based tools for reading MR images
                                     (for all Bruker MRI scanners and both PV5.1 and PV6), Z-spectra interpolation, B<sub>0</sub>-shift correction, removal of noisy data and several approaches for enhanced quantification 
                                     of the CEST contrast. These tools are used extensively by several groups worldwide.                                
                                    </p></li>
                                    
                                 <li><b>Quantitative MRI</b>
                                    <p class="indent">
                                    This theme cover the post-processing of different MRI approaches. We have developed several tools (Matlab and C++ based) for model fitting to any quantitative MRI technique, 
                                    such as T<sub>1</sub> relaxometry (saturation recovery, inversion recovery, variable flip angle), T<sub>2</sub> relaxometry, diffusion imaging (including IWIM approach), contrast enhanced images, 
                                    <sup>19</sup>F-probes quantification, hyperpolarized image quantification and kinetic analysis, compartment modelling, for both Bruker and Aspect obtained MR images.                           
                                    </p></li>
                                    
                                 <li><b>Fat imaging</b>
                                    <p class="indent">
                                     We have developed clustering-based algorithms to segment T<sub>1</sub>-weighted images and extract fat volume.
                                    </p></li>  
                                    
                                  
                                    
                                    </ol>
                                    </p></li>      
                                    
                                
                               </ul>
                               
                               
                            </p>
							
							
                            
                            <hr></hr>
                            
							<h2 style="text-align:left;"> Group Leaders: </h2>					
																					
							<a href="../PI/Longo/home.php" target="_blank" title="Dario Longo">
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
