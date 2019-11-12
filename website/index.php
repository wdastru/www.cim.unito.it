<?php
$localizer = "./";
ob_start('ob_gzhandler');
header('Content-Type: text/html;charset=UTF-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
						<h1 id='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							Molecular Imaging Center
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->

						<p>The Molecular Imaging Center (CIM) at the University of Torino,
							directed by Silvio Aime, is a cross-disciplinary chemistry and
							life science lab. Our work at the CIM is to develop imaging
							probes that support preclinical research with focus in several
							life science areas. It was founded by a joined initiative of
							chemists, biologists and physicians approved by the Italian
							Ministry of University and Research in 2001.</p>
						<p>Currently, the CIM is an international imaging science center
							equipped with state-of-the-art imaging instrumentations covering
							all the available imaging modalities as well as multimodality
							imaging.</p>

						<p>
							Since 2016, it coordinates the activities of the <a
								href="http://www.eurobioimaging.eu/"><span class='paperTitle'
								target="_blank">Euro-BioImaging</span></a> multi-sited
							"Multi-Modal Molecular Imaging Italian Node" (MMMI), which offers
							access to Molecular Imaging technologies and related services to
							national and trans-national reasearchers. Users can access our
							services at a discounted rate by applying at the <a
								href="https://www.eurobioimaging-interim.eu/" target="_blank"><span
								class='paperTitle'>Euro-BioImaging Web Access Portal</span></a>.
							More info on the MMMI Node <a href="http://www.mmmi.unito.it/"
								target="_blank"><span class='paperTitle'>website.</span></a>

						</p>
					</div>

					<div id='band'>
						<h1 id='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							Research Areas
							<!-- InstanceEndEditable -->
						</h1>
					</div>

					<div class='paddingInner'>
						<div class="w3-row-padding">
							<div class="w3-container">

								<div class="w3-content w3-display-container"
									style="max-width: 600px">

									<div class="w3-display-container mySlides">
										<a href='research/research_imaging_therapy.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_theranostic.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>Imaging &amp; Therapy</strong>
										</div>
									</div>

									<div class="w3-display-container mySlides">
										<a href='research/research_cest.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_CEST.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>CEST imaging</strong>
										</div>
									</div>

									<div class="w3-display-container mySlides">
										<a href='research/research_enzyme.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_enzyme.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>Imaging enzyme activity</strong>
										</div>
									</div>

									<div class="w3-display-container mySlides">
										<a href='research/research_cell.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_cell_labeling.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>Cell labeling and tracking</strong>
										</div>
									</div>

									<div class="w3-display-container mySlides">
										<a href='research/research_target.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_receptors.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>Targeting receptors</strong>
										</div>
									</div>

									<div class="w3-display-container mySlides">
										<a href='research/research_angiogenesis.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_angiogenesis.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>Tumor angiogenesis</strong>
										</div>
									</div>

									<div class="w3-display-container mySlides">
										<a href='research/research_acidosis.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_tumor_acidosis.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>Tumor acidosis</strong>
										</div>
									</div>

									<div class="w3-display-container mySlides">
										<a href='research/research_metabolism.php'> <img
											class="w3-image-box"
											src="images/research/figure_research_tumor_metabolism.jpg"
											style="width: 50%"></a>
										<div
											class="w3-display-topleft w3-large w3-display-container w3-black-inv">
											<strong>Tumor metabolism</strong>
										</div>
									</div>



									<br />
									<br />
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
						<h1 id='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							News and Events
							<!-- InstanceEndEditable -->
						</h1>
					</div>


					<div class='paddingInner'>

						<div class="w3-container">


							<div class="w3-cell-row" style="margin-top: 2em;">
								<div class="w3-container w3-cell-title" style="width: 250px;">
									<h12>News</h12>
								</div>
								<div class="w3-container w3-cell-title" style="width: 250px;"></div>
								<div class="w3-container w3-cell-title" style="width: 250px;">
									<h14 class="html"> <a href="news.php">More News...</h14>
									</a>
								</div>
							</div>

							<div class="w3-cell-row" style="margin-top: 2em;">
								<div class="w3-container w3-cell" style="width: 250px;">

									<h2 class='punch purple'>
										<span>Euro-BioImaging</span>
									</h2>
									<br /> <a href="http://www.eurobioimaging.eu/"> <img
										style="width: 99%"
										src="images/Euro-Bioimaging-horizontal-RGB-slogan.png"
										alt="Euro-BioImaging logo" /></a> 
										<a href="news.php#EuBIlaunch"><span class='paperTitle'>
										European Commission launched the Euro-Bioimaging ERIC</span></a> 
									<br />
									<br /> 
										<a href="http://www.mmmi.unito.it/"> <span class='paperTitle'>Italian
											Multi-sited Multi-Modal Molecular Imaging (MMMI) Node
											Candidate</span>
									</a> 
									<br /> <a href="news.php#EuBIlaunch"><p
											style="text-align: right; color: blue; font-size: 100%">
											<b>Read more &#8594;</b>
										</p></a>
								</div>

								<div class="w3-container w3-cell" style="width: 250px;">
									<h2 class='punch purple'>
										<span>COST Actions</span>
									</h2>
									<span><b>COST Actions CA15209 - Eurelax</b></span> <br /> <span>&quot;European
										Network on NMR Relaxometry&quot;</span> <br /> <br /> <span><b>COST
											Actions CA16103 - Parenchima</b></span><br /> <span>&quot;Magnetic
										Resonance Imaging Biomarkers for Chronic Kidney Disease&quot;</span>
									<br /> <a href="news.php#COST"><p
											style="text-align: right; color: blue; font-size: 100%">
											<b>Read more &#8594;</b>
										</p></a>
								</div>


								<div class="w3-container w3-cell" style="width: 250px;">
									<h2 class='punch purple'>
										<span>Ongoing Projects</span>
									</h2>


									<div class="cycle-slideshow" data-cycle-fx="fade"
										data-cycle-timeout="3000" data-cycle-slides="
										> div" data-cycle-speed="1000" data-cycle-pause-on-hover="true">
										<div>
											<img style="width: 70%" src="news/glint.svg"> <br /> <span>CIM
													partecipates to the H2020 project <a
													href="http://www.glint-project.eu/" target="_blank"><span
														class='paperTitle'>GLINT</span></a> aimed to investigate
													GlucoCESt imaging as a potentially disruptive new
													diagnostic tool.
											</span> <a href="news.php#GLINT"><p
														style="text-align: right; color: blue; font-size: 100%">
														<b>Read more &#8594;</b>
													</p></a>
										
										</div>
										<div>
											<img style="width: 70%" src="news/Identify_logo.jpg"> <br />
												<span>CIM partecipates to the H2020 project <a
													href="http://www.identify-project.eu/" target="_blank"><span
														class='paperTitle'>IDENTIFY</span></a> aimed to bring Fast
													Field-Cycling MRI (FFC-MRI) to the stage where it can be
													used as a routine tool for clinical diagnosis.
											</span> <a href="news.php#Identify"><p
														style="text-align: right; color: blue; font-size: 100%">
														<b>Read more &#8594;</b>
													</p></a>
										
										</div>
									</div>


									
								</div>

							</div>

							<div class="w3-cell-row" style="margin-top: 2em;">
								<div class="w3-container w3-cell-title" style="width: 250px;">
									<h12>Upcoming events</h12>
								</div>
								<div class="w3-container w3-cell-title" style="width: 250px;"></div>
								<div class="w3-container w3-cell-title" style="width: 250px;">
									<h14 class="html"> <a href="events.php">More events...</h14>
									</a>
								</div>
							</div>

							<div class="w3-cell-row" style="margin-top: 2em;">

								<div class="w3-container w3-cell" style="width: 250px;">
									<h2 class='punch orange'>
										<span>EMIM meeting</span>
									</h2>
									<br /> <img style="width: 99%"
										src="images/meetings/EMIM_2019.jpg"> <a
										href="http://www.e-smi.eu/index.php?id=emim-2019"><span
											class='paperTitle'>14th European Molecular Imaging Meeting</span></a><span
										class="date"> 19-22 March 2019 </span> <span> Glasgow, United
											Kingdom</span>
								
								</div>

								<div class="w3-container w3-cell" style="width: 250px;">
									<h2 class='punch orange'>
										<span>ISMRM meeting</span>
									</h2>
									<br /> <img style="width: 99%; max-height: 80px"
										src="images/meetings/ISMRM_2019.jpg"> <a
										href="https://www.ismrm.org/19m/"><span class='paperTitle'>ISMRM
												27th Annual Meeting 2019</span></a><span class="date"> 11-16
											May 2019 </span> <span> Montreal, QC, Canada</span>
								
								</div>



								<div class="w3-container w3-cell" style="width: 250px;">
									<h2 class='punch orange'>
										<span>WMIC meeting</span>
									</h2>
									<br /> <img style="width: 99%"
										src="images/meetings/WMIC_2019.jpg"> <a
										href="http://www.wmis.org/2019-wmic/"><span class='paperTitle'>World
												Molecular Imaging Congress</span></a><span class="date"> 4-7
											September 2019 </span> <span> Montreal, QC, Canada</span>
								
								</div>
							</div>






							<div class="w3-cell-row" style="margin-top: 2em;">
								<div class="w3-container w3-cell-title" style="width: 250px;">
									<h12>Recent papers</h12>
								</div>
								<div class="w3-container w3-cell-title" style="width: 250px;"></div>
								<div class="w3-container w3-cell-title" style="width: 250px;"></div>
							</div>


							<div class="w3-cell-row" style="margin-top: 2em;">

								<div class="w3-container" style="padding-left: 40px;">

									<div class="animSlides w3-animate-right ">

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/longo2019.png" alt=""
														style="width: 100%">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/30762162"
																	target="_blank"> <b>Imaging tumor acidosis: a survey of
																		the available techniques for mapping in vivo tumor pH.</b>
															
															</h4>
															<span><font color="blue">
																<b>Longo D. et al; </b></font></span>
															<p>
																<font color="blue">Cancer Metastasis Rev. 2019 Feb 14.</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/gianolio_2018.jpg" alt=""
														style="width: 100%">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/30377745"
																	target="_blank"> <b>Gadolinium presence, MRI
																		hyperintensities, and glucose uptake in the
																		hypoperfused rat brain after repeated administrations
																		of gadodiamide.</b>
															
															</h4>
															<span><font color="blue">
																<b>Gianolio E. et al; </b></font></span>
															<p>
																<font color="blue">Neuroradiology. 2018</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/terreno_2018.jpg" alt=""
														style="width: auto; height: 100px">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/30471202"
																	target="_blank"> <b>Indocyanine Green labeling for
																		optical and photoacoustic imaging of Mesenchymal Stem
																		Cells after in vivo transplantation.</b>
															
															</h4>
															<span><font color="blue">
																<b>Terreno E. et al; </b></font></span>
															<p>
																<font color="blue">J Biophotonics. 2018</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

									</div>

									<div class="animSlides w3-animate-right">

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/geninatti_2018.jpg" alt=""
														style="width: 100%">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/30087935"
																	target="_blank"> <b>Efficient Route to Label
																		Mesenchymal Stromal Cell-Derived Extracellular
																		Vesicles.</b>
															
															</h4>
															<span><font color="blue">
																<b>Geninatti S. et al; </b></font></span>
															<p>
																<font color="blue">ACS Omega. 2018 Jul
																31;3(7):8097-8103.</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/reineri_2018.jpg" alt=""
														style="width: 100%">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/30248218"
																	target="_blank"> <b>Metabolic Studies of Tumor Cells
																		Using [1-<sup>13</sup> C] Pyruvate Hyperpolarized by
																		Means of PHIP-Side Arm Hydrogenation.
																</b>
															
															</h4>
															<span><font color="blue">
																<b>Reineri F. et al; </b></font></span>
															<p>
																<font color="blue">Chemphyschem. 2018, 19, 1-9.</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/dellicastelli_2018.jpg" alt=""
														style="width: 100%">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/29411832"
																	target="_blank"> <b>[Yb(AAZTA)(H<sub>2</sub>O)]-: an
																		unconventional ParaCEST MRI probe.
																</b>
															
															</h4>
															<span><font color="blue">
																<b>Delli Castelli D. et al; </b></font></span>
															<p>
																<font color="blue">Chem Commun. 2018 Feb
																20;54(16):2004-2007.</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

									</div>

									<div class="animSlides w3-animate-right">

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/stefania_2018.jpg" alt=""
														style="width: 100%">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/30257047"
																	target="_blank"> <b>An efficient MRI agent targeting
																		extracellular markers in prostate adenocarcinoma.</b>
															
															</h4>
															<span><font color="blue">
																<b>Stefania R et al; </b></font></span>
															<p>
																<font color="blue">Magn Reson Med. 2018; 1-12</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/dastru_2018.jpg" alt=""
														style="width: auto; height: 100px">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://onlinelibrary.wiley.com/doi/full/10.1002/slct.201800283"
																	target="_blank"> <b>Modulation of the Prototropic
																		Exchange Rate in pH-Responsive Yb-HPDO3A Derivatives
																		as ParaCEST Agents</b>
															
															</h4>
															<span><font color="blue">
																<b>Dastru W. et al; </b></font></span>
															<p>
																<font color="blue">ChemistrySelect 2018, 3, 6035-6041</font>
															</p>
															</a>
														</div>
												
												</div>
											</div>
										</div>

										<div class="w3-container w3-cell" style="width: 250px;">
											<div class="w3-card" style="width: 100%">
												<div class="w3-container">
													<img src="images/papers/cutrin_2018.jpg" alt=""
														style="width: 100%">
														<div class="w3-container">
															<h4 style="margin-top: 2px; margin-bottom: 2px;">
																<a title="Open in a new window" class="http"
																	href="https://www.ncbi.nlm.nih.gov/pubmed/29963255"
																	target="_blank"> <b>Cancer cell death induced by
																		ferritins and the peculiar role of their labile iron
																		pool.</b>
															
															</h4>
															<span><font color="blue">
																<b>Cutrin JC et al;</b></font> </span>
															<p>
																<font color="blue">Oncotarget. 2018 Jun 15; 9(46):
																27974-27984</font>
															</p>
															</a>
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
			</div>
			<!-- subsection closing -->
		</div>
		<!-- subsection closing -->
		<div id='after'></div>
		<div id='footer'>
			<p>
				Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br />
				Fax. Tel. Mail
			</p>
		</div>
		<div id='validators'>
			<p>
				<a href="http://validator.w3.org/check?uri=referer"> <img
					src="images/valid-xhtml10-blue_opt.png"
					alt="Valid XHtml 1.0 Transitional" height="31" width="88" />
				</a>
			</p>
			<p>
				<a href="http://jigsaw.w3.org/css-validator/check?uri=referer"> <img
					style="border: 0; width: 88px; height: 31px"
					src="images/vcss-blue_opt.gif" alt="CSS Valido!" />
				</a>
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
