<?php
$localizer = "./";
ob_start('ob_gzhandler');
header('Content-Type: text/html;charset=UTF-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino</title>
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section0'>
            <?php
            require ('includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection0">
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/home-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Molecular Imaging Center <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->

						<p> The Molecular Imaging Center (CIM) at the University of Torino, directed by Silvio Aime, 
							is a cross-disciplinary chemistry and life science lab. Our work at the CIM is to develop imaging probes that support 
							preclinical research with focus in several life science areas. 
							It  was founded by a joined initiative of chemists, biologists and physicians approved by the Italian
							Ministry of University and Research in 2001.</p>
							<p>
							Currently, the CIM is an international imaging science center equipped with state-of-the-art imaging instrumentations covering all the available imaging modalities
							as well as multimodality imaging.
							</p>
						
						<p>
							Since 2016, it coordinates the activities of the <a
								href="http://www.eurobioimaging.eu/"><span class='paperTitle'>Euro-BioImaging</span></a>
							multi-sited "Multi-Modal Molecular Imaging Italian Node" (MMMI),
							which offers access to Molecular Imaging technologies and related
							services to national and trans-national reasearchers. Users can
							access our services at a discounted rate by applying at the <a
								href="https://www.eurobioimaging-interim.eu/"><span
								class='paperTitle'>Euro-BioImaging Web Access Portal</span></a>.
							More info on the MMMI Node <a href="http://www.mmmi.unito.it/"><span
								class='paperTitle'>website.</span></a> 
						
						</p>
						</div>

						<div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Research Areas <!-- InstanceEndEditable --></h1>
                        </div>

     					<div class='paddingInner'>
						<div class="w3-row-padding">
						<div class="w3-container">
						
						<div class="w3-content w3-display-container" style="max-width: 600px">
							
							<div class="w3-display-container mySlides">
							<a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_theranostic.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-black-inv"><strong>Imaging &amp; Therapy</strong>
                              </div>
                            </div>
                            
							<div class="w3-display-container mySlides">
							<a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_CEST.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-black-inv"><strong>CEST imaging</strong>
                              </div>
                            </div>
                            
                            <div class="w3-display-container mySlides">
                            <a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_enzyme.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-black-inv"><strong>Imaging enzyme activity</strong>
                              </div>
                            </div>
							
							<div class="w3-display-container mySlides">
							<a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_cell_labeling.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-black-inv"><strong>Cell labeling and tracking</strong>
                              </div>
                            </div>
                            
							<div class="w3-display-container mySlides">
							<a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_receptors.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-black-inv"><strong>Targeting receptors</strong>
                              </div>
                            </div>
                            
                            <div class="w3-display-container mySlides">
                            <a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_angiogenesis.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-black-inv"><strong>Tumor angiogenesis</strong>
                              </div>
                            </div>
							
							<div class="w3-display-container mySlides">
							<a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_tumor_acidosis.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-black-inv"><strong>Tumor acidosis</strong>
                              </div>
                            </div>
                            
                            <div class="w3-display-container mySlides">
                            <a href='research_cest.php' target="_blank">
							<img class="w3-image-box" src="images/figure_research_tumor_metabolism.jpg" style="width: 50%"> </a>
							<div class="w3-display-topleft w3-large w3-display-container w3-gray-inv"><strong>Tumor metabolism</strong>
                              </div>
                            </div>
                            
                            
                            
                            <br/><br/>
     									<div
											class="w3-center w3-container w3-section w3-large w3-text-black w3-display-bottommiddle"
											style="width: 60%">
											
									<!-- 		<div class="w3-left w3-hover-text-khaki"
												onclick="plusDivs(-1)">&#10094;</div>
											<div class="w3-right w3-hover-text-khaki"
												onclick="plusDivs(1)">&#10095;</div> -->
											<span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(1)"></span> <span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(2)"></span> <span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(3)"></span> <span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(4)"></span> <span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(5)"></span> <span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(6)"></span> <span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(7)"></span> <span
												class="w3-badge demo w3-border w3-transparent w3-hover-gray"
												onclick="currentDiv(8)"></span>
										</div>
						
						</div>
						 </div>
						</div>
					</div>

					<div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> News and Events <!-- InstanceEndEditable --></h1>
                        </div>


					<div class='paddingInner'>

						<div class="w3-container">
						
						
							<div class="w3-cell-row" style="margin-top:2em;">
								<div class="w3-container w3-cell-title" style="width:250px;">
									<h12>News</h12>
								</div>
								<div class="w3-container w3-cell-title" style="width:250px;">
									
								</div>
								<div class="w3-container w3-cell-title" style="width:250px;">
									<h14 class="html"> <a href="news.php">More News...</h14></a>
								</div>
							</div>
							
							<div class="w3-cell-row" style="margin-top:2em;">
								<div class="w3-container w3-cell" style="width:250px;">
									
									<h2 class='punch purple'><span>Euro-BioImaging</span></h2>
                                    <br/>
                                    <a href="http://www.eurobioimaging.eu/"> <img style="width: 99%" src="images/Euro-BioImaging_Logo_CMYK.gif" alt="Euro-BioImaging logo" /></a>                                   
                                    <br/>
                                    <a href="http://www.mmmi.unito.it/"> <span class='paperTitle'>Italian Multi-sited Multi-Modal Molecular Imaging (MMMI) Node Candidate</span> </a>                                   									
								</div>
																
								<div class="w3-container w3-cell" style="width:250px;">
									 <h2 class='punch purple'><span>COST Actions</span></h2>
									 <span ><b>COST Actions CA15209 - Eurelax</b></span>
									 <br />
                                    <a href="http://www.cost.eu/COST_Actions/ca/CA15209"><span class='paperTitle'>&quot;European Network on NMR Relaxometry&quot;</span> </a>
									<br /><br />
									<span ><b>COST Actions  CA16103 - Parenchima</b></span><br />
								    <a href="http://www.cost.eu/COST_Actions/ca/CA16103"><span class='paperTitle'>&quot;Magnetic Resonance Imaging Biomarkers for Chronic Kidney Disease&quot;</span> </a>
                                   
								</div>
								
								<div class="w3-container w3-cell" style="width:250px;">
									<h2 class='punch purple'><span>Veronesi Foundation Fellowship</span></h2>
									<span><b>Lorena Consolino</b> and <b>Eleonora Cavallari</b> are recipients of the 
									<a title="Open in a new window" href="https://www.fondazioneveronesi.it/ricerca" target="_blank">
									<span class='paperTitle'>Umberto Veronesi Foundation Postdoctoral Fellowships</span></a> congratulations!</span>
                                    
								</div>	
																												
							</div>
							
							<div class="w3-cell-row" style="margin-top:2em;">
								<div class="w3-container w3-cell-title" style="width:250px;">
									<h12>Upcoming events</h12>
								</div>
								<div class="w3-container w3-cell-title" style="width:250px;">
									
								</div>
								<div class="w3-container w3-cell-title" style="width:250px;">
									<h14 class="html"> <a href="events.php">More events...</h14></a>
								</div>
							</div>
							
							<div class="w3-cell-row" style="margin-top:2em;">
							
								<div class="w3-container w3-cell" style="width:250px;">
									<h2 class='punch orange'><span>TOPIM meeting</span></h2>
								<br/>
								<img style="width: 99%; max-height:80px" src="images/meetings/TOPIM_2018.jpg">
                                 <a href="http://www.e-smi.eu/index.php?id=topim-2018"><span class='paperTitle'>12th ESMI Winter Conference "hot TOPIics in IMaging - TOPIM 2018,</span></a><span class="date">  21-26 January 2018 </span>
												<span> Les Houches, France</span>    	

								</div>
							
								<div class="w3-container w3-cell" style="width:250px;">
								<h2 class='punch orange'><span>EMIM meeting</span></h2>
								<br/>
								<img style="width: 99%" src="images/meetings/EMIM_2018.jpg">
                                 <a href="http://www.e-smi.eu/index.php?id=emim-2018"><span class='paperTitle'>13th
												European Molecular Imaging Meeting,</span></a><span class="date"> 20-23 March 2018 </span>
												<span> San Sebastian, Spain</span>    	
								</div>
								
								
								
								<div class="w3-container w3-cell" style="width:250px;">
								<div class="fadeImage zero">
									
								 	<h2 class='punch orange'><span>ISMRM meeting</span></h2>
								<br/>
								<img style="width: 99%" src="images/meetings/ISMRM_2018.jpg" >
                                 <a href="https://www.ismrm.org/18m/"><span class='paperTitle'>Joint Annual Meeting ISMRM-ESMRMB 2018,</span></a><span class="date">  16-21 June 2018 </span>
												<span> Paris, France</span> 
									 	
								</div>
								
								<div class="fadeImage first">	
								<h2 class='punch orange'><span>WMIC meeting</span></h2>
								<br/>
								<img style="width: 99%" src="images/meetings/WMIC_2018.jpg">
                                 <a href="http://www.wmis.org/2018-wmic"><span class='paperTitle'>World
												Molecular Imaging Congress,</span></a><span class="date">  12-15 September 2018 </span>
												<span> Seattle, USA</span>    
								
								</div>
								</div>		
																		
								 									
								</div>
								
							
							
							<div class="w3-cell-row" style="margin-top:2em;">
								<div class="w3-container w3-cell-title" style="width:250px;">
									<h12>Recent papers</h12>
								</div>
								<div class="w3-container w3-cell-title" style="width:250px;">
									
								</div>
								<div class="w3-container w3-cell-title" style="width:250px;">
									
								</div>
							</div>
							
							
							<div class="w3-cell-row" style="margin-top:2em;">
																
								<div class="animSlides w3-animate-right ">
								
								<div class="w3-container w3-cell" style="width:250px;">
									<div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/longo_JMR2018.jpg" alt="" style="width:100%">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/29272735" target="_blank">
                                      <b>Flip-angle based ratiometric approach for pulsed CEST-MRI pH imaging</b></h4>
                                      <span><font color="blue"><b>Longo D. et al; </b></font></span>
                                      <p><font color="blue">J Magnetic Resonance 2017, 187, 1</font></p></a>
                                    </div>
                                  </div>
								 </div>
								  </div>
								 
								 <div class="w3-container w3-cell" style="width:250px;">
									<div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/gianolio_2018.jpg" alt="" style="width:100%">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/28873047" target="_blank">
                                      <b>Gadolinium Retention in the Rat Brain: Assessment of the Amounts of Insoluble Gadolinium-containing Species and Intact Gadolinium Complexes after Repeated Administration of Gadolinium-based Contrast Agents.</b></h4>
                                      <span><font color="blue"><b>Gianolio E. et al; </b></font></span>
                                      <p><font color="blue">Radiology. 2017 Dec;285(3):839</font></p></a>
                                    </div>
                                  </div>
								 </div>
								  </div>
								  
								   <div class="w3-container w3-cell" style="width:250px;">
								 <div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/terreno_2018.jpg" alt="" style="width:auto; height:100px">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/29079529" target="_blank">
                                      <b>MRI visualization of neuroinflammation using VCAM-1 targeted paramagnetic micelles.</b></h4>
                                      <span><font color="blue"><b>Terreno E. et al; </b></font></span>
                                      <p><font color="blue">Nanomedicine. 2017, S1549-9634(17)30181</font></p></a>
                                    </div>
                                  </div>
								 </div>
								 </div>
								 
							</div>
							
							<div class="animSlides w3-animate-right">
								
								<div class="w3-container w3-cell" style="width:250px;">
									<div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/geninatti_2018.jpg" alt="" style="width:100%">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/28301933" target="_blank">
                                      <b>Ferritin Decorated PLGA/Paclitaxel Loaded Nanoparticles Endowed with an Enhanced Toxicity Toward MCF-7 Breast Tumor Cells.</b></h4>
                                      <span><font color="blue"><b>Geninatti S. et al; </b></font></span>
                                      <p><font color="blue">Bioconjug Chem. 2017, 28, 1283</font></p></a>
                                    </div>
                                  </div>
								 </div>
								  </div>
								 
								 <div class="w3-container w3-cell" style="width:250px;">
									<div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/reineri_2018.jpg" alt="" style="width:100%">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/27870463" target="_blank">
                                      <b>13C MR Hyperpolarization of Lactate by Using ParaHydrogen and Metabolic Transformation in Vitro.</b></h4>
                                      <span><font color="blue"><b>Reineri F. et al; </b></font></span>
                                      <p><font color="blue">Chemistry. 2017, 23, 1200</font></p></a>
                                    </div>
                                  </div>
								 </div>
								  </div>
								  
								   <div class="w3-container w3-cell" style="width:250px;">
								 <div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/dellicastelli_2018.jpg" alt="" style="width:100%">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/27049069" target="_blank">
                                      <b>The release of Doxorubicin from liposomes monitored by MRI and triggered by a combination of US stimuli led to a complete tumor regression in a breast cancer mouse model.</b></h4>
                                      <span><font color="blue"><b>Delli Castelli D. et al; </b></font></span>
                                      <p><font color="blue">J Control Release. 2016, 230,57</font></p></a>
                                    </div>
                                  </div>
								 </div>
								 </div>
								 
							</div>
							
							<div class="animSlides w3-animate-right">
								
								<div class="w3-container w3-cell" style="width:250px;">
									<div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/stefania_2018.jpg" alt="" style="width:100%">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/28783106" target="_blank">
                                      <b>Melanin-Based Contrast Agents for Biomedical Optoacoustic Imaging and Theranostic Applications.</b></h4>
                                      <span><font color="blue"><b>Stefania R et al; </b></font></span>
                                      <p><font color="blue">Int J Mol Sci. 2017, 18, E1719</font></p></a>
                                    </div>
                                  </div>
								 </div>
								  </div>
								 
								 <div class="w3-container w3-cell" style="width:250px; ">
									<div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/dastru_2018.jpg" alt="" style="width:auto; height:100px">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/27995483" target="_blank">
                                      <b>Assessing tumor vascularization as a potential biomarker of imatinib resistance in gastrointestinal stromal tumors by dynamic contrast-enhanced magnetic resonance imaging</b></h4>
                                      <span><font color="blue"><b>Dastru' W. et al; </b></font></span>
                                      <p><font color="blue">Gastric Cancer. 2017, 20, 629</font></p></a>
                                    </div>
                                  </div>
								 </div>
								  </div>
								  
								   <div class="w3-container w3-cell" style="width:250px;">
								 <div class="w3-card" style="width:100%">
									<div class="w3-container">
                                    <img src="images/papers/cutrin_2018.jpg" alt="" style="width:100%">
                                    <div class="w3-container">
                                      <h4 style="margin-top: 2px;margin-bottom: 2px;">
                                      <a title="Open in a new window" class="http" href="https://www.ncbi.nlm.nih.gov/pubmed/28301933" target="_blank">
                                      <b>Ferritin Decorated PLGA/Paclitaxel Loaded Nanoparticles Endowed with an Enhanced Toxicity Toward MCF-7 Breast Tumor Cells.</b></h4>
                                      <span><font color="blue"><b>Cutrin JC et al;</b></font> </span>
                                      <p><font color="blue">Bioconjug Chem. 2017, 28, 1283</font></p></a>
                                    </div>
                                  </div>
								 </div>
								 </div>
								 
							</div>
							
							
							
							

						</div>
					</div>





					</div>
				</div>
                </div>
                <!-- subsection closing -->
            </div>
            <!-- subsection closing -->
            <div id='after'></div>
            <div id='footer'>
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            <div id='validators'>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"> <img
                    src="images/valid-xhtml10-blue_opt.png"
                    alt="Valid XHtml 1.0 Transitional" height="31" width="88" /> </a>
                </p>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer"> <img
                    style="border: 0; width: 88px; height: 31px"
                    src="images/vcss-blue_opt.gif" alt="CSS Valido!" /> </a>
                </p>
            </div>
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script type="text/javascript">
//<![CDATA[
changeSideNavStyles();
//]]>

var slideIndex = 1;
showDivs();

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
     dots[i].className = dots[i].className.replace(" w3-dark-gray", "");
     
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}    
  x[slideIndex-1].style.display = "block";  
  setTimeout(showDivs, 2000); // Change image every 2 seconds
	  x[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " w3-dark-gray";
}

var myIndex = 0;
carousel();

function carousel() {
    var i;
    var y = document.getElementsByClassName("animSlides");
    for (i = 0; i < y.length; i++) {
      y[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > y.length) {myIndex = 1}    
    y[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);
     
}


        </script>
        <!-- InstanceEnd -->
    </body>
</html>
