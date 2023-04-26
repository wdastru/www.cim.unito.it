<?php
$localizer = './';
ob_start('ob_gzhandler');
header('Content-Type: text/html;charset=UTF-8');
?>
<!DOCTYPE html>
<html lang='en'>
<!-- InstanceBegin template='/Templates/home.dwt' codeOutsidephpIsLocked='false' -->
<head>
        <?php require $localizer . 'includes/head_const_new.inc.php'?>
        <meta
	name='description'
	content='Home page of the Molecular Imaging Center, a cross-disciplinary chemistry and life science lab at the University of Torino, Italy.'>
<title>Molecular Imaging Center - University of Torino</title>
</head>
<body>
	<div id='section0'>
		<div id='subsection0'>
    		<?php require('includes/main-nav.php'); ?>
    		<?php require('includes/main-nav-mobile.php'); ?>
		<!-- InstanceBeginEditable name='subsection opening' -->
			<div id='header'></div>
			<!-- InstanceEndEditable -->
			<?php require ($localizer . 'includes/home-side-nav.php'); ?>
        	<?php require ($localizer . 'includes/home-side-nav-mobile.php'); ?>
			<div id='content'>
				<div class="paddingOuter">
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name='subsection title' -->
							Molecular Imaging Center
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name='subsection content' -->
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
							Since 2016, it coordinates the activities of the
							<a
								href='http://www.eurobioimaging.eu/'
								target='_blank'>
								<span class='paperTitle'>Euro-BioImaging</span>
							</a>
							multi-sited 'Multi-Modal Molecular Imaging Italian Node' (MMMI),
							which offers access to Molecular Imaging technologies and related
							services to national and trans-national reasearchers. Users can
							access our services at a discounted rate by applying at the
							<a
								href='https://www.eurobioimaging-interim.eu/'
								target='_blank'>
								<span class='paperTitle'>Euro-BioImaging Web Access Portal</span>
							</a>
							. More info on the MMMI Node
							<a
								href='http://www.mmmi.unito.it/'
								target='_blank'>
								<span class='paperTitle'>website.</span>
							</a>
						</p>
					</div>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name='subsection title' -->
							Research Areas
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='home paddingInner'>
						<div class='animSlides2 w3-animate-fading'>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<div>
											<h3 class='punch purple'>
												<a href='research/research_imaging_therapy.php'>
													<span><strong>Imaging &amp; Therapy</strong></span> <br> <br>
													<img
														class='w3-image-box-noshadow'
														src='images/research/figure_research_theranostic.jpg'
														alt='Theranostic dendrimersomes'
														style='width: 100%'>
												</a>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<div>
											<h3 class='punch purple'>
												<a href='research/research_cest.php'>
													<span><strong>CEST imaging</strong></span> <br> <br>
													<img
														class='w3-image-box-noshadow'
														src='images/research/figure_research_CEST.jpg'
														alt='Graphic representing DIACEST, PARACEST and LIPOCEST agents'
														style='width: 100%'>
												</a>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<div>
											<h3 class='punch purple'>
												<a href='research/research_enzyme.php'>
													<span><strong id='imaging_enzyme_activity_title'></strong></span>
													<br> <br>
													<img
														class='w3-image-box-noshadow'
														src='images/research/figure_research_enzyme.jpg'
														alt='Scheme representing the action of an enzyme to form a product by connecting two substrates togheter'
														style='width: 100%'>
												</a>
											</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='animSlides2 w3-animate-fading '>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<div>
											<h3 class='punch purple'>
												<a href='research/research_cell.php'>
													<span><strong>Cell labeling and tracking</strong></span> <br>
													<br>
													<img
														class='w3-image-box-noshadow'
														src='images/research/figure_research_cell_labeling.jpg'
														alt='Scheme representing negative Gd-containing particles electrostatically bonded to cationic polypeptide chains sorrounding a cell'
														style='width: 100%'>
												</a>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<div>
											<h3 class='punch purple'>
												<a href='research/research_angiogenesis.php'>
													<span><strong>Tumor angiogenesis</strong></span> <br> <br>
													<img
														class='w3-image-box-noshadow'
														src='images/research/figure_research_angiogenesis.jpg'
														alt='Scheme representing neoangiogenic vessels connecting a tumor mass to a main vessel'
														style='width: 100%'>
												</a>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<div>
											<h3 class='punch purple'>
												<a href='research/research_acidosis.php'>
													<span><strong>Tumor acidosis</strong></span> <br> <br>
													<img
														class='w3-image-box-noshadow'
														src='images/research/figure_research_tumor_acidosis.jpg'
														alt='Scheme representing some of the methabolism involved in tumor acidosis'
														style='width: 100%'>
												</a>
											</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='animSlides2 w3-animate-fading '>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<div>
											<h3 class='punch purple'>
												<a href='research/research_metabolism.php'>
													<span><strong>Tumor metabolism</strong></span> <br> <br>
													<img
														class='w3-image-box-noshadow'
														src='images/research/figure_research_tumor_metabolism.jpg'
														alt='Scheme representing tumor metabolism'
														style='width: 100%'>
												</a>
											</h3>
										</div>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'></div>
							<div class='w3-container w3-cell'></div>
						</div>
					</div>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name='subsection title' -->
							News and Events
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<div class='w3-container'>
							<div
								class='w3-cell-row'
								style='margin-top: 2em;'>
								<div class='w3-container w3-cell-title'>
									<h2>News</h2>
								</div>
								<div class='w3-container w3-cell-title'></div>
								<div class='w3-container w3-cell-title'>
									<h2 class='html'>
										<a href='news.php'>More News... </a>
									</h2>
								</div>
							</div>
							<div
								class='w3-cell-row'
								style='margin-top: 2em;'>
								<div class='w3-container w3-cell'>
									<h3 class='punch purple'>
										<span>Euro-BioImaging</span>
									</h3>
									<br>
									<a href='http://www.eurobioimaging.eu/'>
										<img
											style='width: 99%'
											src='images/Euro-Bioimaging-horizontal-RGB-slogan.png'
											alt='Euro-BioImaging logo'>
									</a>
									<a href='news.php#EuBIlaunch'>
										<span class='paperTitle'> European Commission launched the
											Euro-Bioimaging ERIC</span>
									</a>
									<br> <br>
									<a href='http://www.mmmi.unito.it/'>
										<span class='paperTitle'>Italian Multi-sited Multi-Modal
											Molecular Imaging (MMMI) Node Candidate</span>
									</a>
									<br>
									<p style='text-align: right; color: blue; font-size: 100%'>
										<a href='news.php#EuBIlaunch'>
											<b>Read more &#8594;</b>
										</a>
									</p>
								</div>
								<div class='w3-container w3-cell'>
									<h3 class='punch purple'>
										<span>COST Actions</span>
									</h3>
									<span><b>COST Actions CA15209 - Eurelax</b></span> <br> <span>&quot;European
										Network on NMR Relaxometry&quot;</span> <br> <br> <span><b>COST
											Actions CA16103 - Parenchima</b></span><br> <span>&quot;Magnetic
										Resonance Imaging Biomarkers for Chronic Kidney Disease&quot;</span>
									<br>
									<p style='text-align: right; color: blue; font-size: 100%'>
										<a href='news.php#COST'>
											<b>Read more &#8594;</b>
										</a>
									</p>
								</div>
								<div class='w3-container w3-cell'>
									<h3 class='punch purple'>
										<span>Ongoing Projects</span>
									</h3>
									<!-- 
									   Cycle2 slideshow plugin for jQuery
									   required jquery.cycle2.min.js
									   from http://jquery.malsup.com/cycle2/
									-->
									<div
										class='cycle-slideshow'
										data-cycle-fx='fade'
										data-cycle-timeout='3000'
										data-cycle-slides='
										> div'
										data-cycle-speed='1000'
										data-cycle-pause-on-hover='true'>
										<div>
											<img
												style='width: 70%'
												src='news/glint.svg'
												alt='GLINT logo'>
											<br> <span>CIM partecipates to the H2020 project <a
													href='http://www.glint-project.eu/'
													target='_blank'>
													<span class='paperTitle'>GLINT</span>
												</a> aimed to investigate GlucoCESt imaging as a potentially
												disruptive new diagnostic tool.
											</span>
											<p style='text-align: right; color: blue; font-size: 100%'>
												<a href='news.php#GLINT'>
													<b>Read more &#8594;</b>
												</a>
											</p>
										</div>
										<div>
											<img
												style='width: 70%'
												src='news/primoGAIA-logo.png'
												alt='Primo GAIA logo'>
											<br> <span>CIM partecipates to the H2020 project <a
													href='http://www.primogaia.eu/'
													target='_blank'>
													<span class='paperTitle'>Primo GAIA</span>
												</a> Prepolarized MRI at Earth Field to seek new contrasts
												linked to molecular events for very early detection of
												pathologies
											</span>
											<p style='text-align: right; color: blue; font-size: 100%'>
												<a href='news.php#PrimoGAIA'>
													<b>Read more &#8594;</b>
												</a>
											</p>
										</div>
									</div>
									<!-- END of Cycle2 -->
								</div>
							</div>
							<div
								class='w3-cell-row'
								style='margin-top: 2em;'>
								<div class='w3-container w3-cell-title'>
									<h2>Upcoming events</h2>
								</div>
								<div class='w3-container w3-cell-title'></div>
								<div class='w3-container w3-cell-title'>
									<h2 class='html'>
										<a href='events.php'>More events... </a>
									</h2>
								</div>
							</div>
							<div
								class='w3-cell-row'
								style='margin-top: 2em;'>
								<div class='w3-container w3-cell'>
									<h3 class='punch orange'>
										<span>EMIM meeting</span>
									</h3>
									<br>
									<img
										style='width: 99%'
										src='images/meetings/EMIM_2020.jpg'
										alt='15th European Molecular Imaging Meeting 2020 image'>
									<a href='http://www.e-smi.eu/index.php?id=emim-2020'>
										<span class='paperTitle'>15th European Molecular Imaging
											Meeting</span>
									</a>
									<span class='date'> 24-27 March 2020 </span> <span>
										Thessaloniki, Greece</span>
								</div>
								<div class='w3-container w3-cell'>
									<h3 class='punch orange'>
										<span>ISMRM meeting</span>
									</h3>
									<br>
									<img
										style='width: 99%; max-height: 80px'
										src='images/meetings/ISMRM_2020.jpg'
										alt='ISMRM 28th Annual Meeting 2020 image'>
									<a href='https://www.ismrm.org/20m/'>
										<span class='paperTitle'>ISMRM 28th Annual Meeting 2020</span>
									</a>
									<span class='date'> 18-23 April 2020 </span> <span> Sydney,
										Australia</span>
								</div>
								<div class='w3-container w3-cell'>
									<h3 class='punch orange'>
										<span>WMIC meeting</span>
									</h3>
									<br>
									<img
										style='width: 99%'
										src='images/meetings/WMIC-2023-Web-Banner-1-Oct6.jpg'
										alt='World Molecular Imaging Congress 2023 image'>
									<a href='https://www.wmis.org/wmic-2023-about/'>
										<span class='paperTitle'>World Molecular Imaging Congress 2023</span>
									</a>
									<span class='date'> 5-9 October 2020 </span> <span> Prague,
										Czech Republic</span>
								</div>
							</div>
						</div>
					</div>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name='subsection title' -->
							Recent papers
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<div class='animSlides w3-animate-fading '>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<a
											title='Open in a new window'
											class='http'
											href='https://www.nature.com/articles/s41598-020-76370-1'
											target='_blank'>
											<img
												src='images/papers/geninatti_2020_1.webp'
												alt=''
												style='width: 100%'>
											<b>In vitro and in vivo BNCT investigations using a carborane
												containing sulfonamide targeting CAIX epitopes on malignant
												pleural mesothelioma and breast cancer cells.</b> <br> <span
												class='w3-text-blue'> <b>Geninatti Crich S et al;</b> <br>
												Sci Rep 10, 19274 (2020)
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<img
											src='images/papers/geninatti_2020_2.jpg'
											alt=''
											style='width: 100%'>
										<div class='w3-container'>
											<a
												title='Open in a new window'
												class='http'
												href='https://onlinelibrary.wiley.com/doi/abs/10.1002/anie.202011513'
												target='_blank'>
												<b>A novel class of <sup>1</sup>H-MRI Contrast Agents based
													on the relaxation enhancement induced on water protons by <sup>14</sup>N
													imidazole moieties.
												</b> <span class='w3-text-blue'> <br> <b>Geninatti Crich S
														et al;</b> <br>Angew. Chem. Int. Ed. Accepted
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<a
											title='Open in a new window'
											class='http'
											href='https://www.ncbi.nlm.nih.gov/pubmed/30762162'
											target='_blank'>
											<img
												src='images/papers/longo2019.png'
												alt=''
												style='width: 100%'>
											<b>Imaging tumor acidosis: a survey of the available
												techniques for mapping in vivo tumor pH.</b> <span
												class='w3-text-blue'> <br> <b>Longo D. et al; </b><br>Cancer
												Metastasis Rev. 2019 Feb 14.
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class='animSlides w3-animate-fading'>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<a
											title='Open in a new window'
											class='http'
											href='https://www.ncbi.nlm.nih.gov/pubmed/30377745'
											target='_blank'>
											<img
												src='images/papers/gianolio_2018.jpg'
												alt=''
												style='width: 100%'>
											<b>Gadolinium presence, MRI hyperintensities, and glucose
												uptake in the hypoperfused rat brain after repeated
												administrations of gadodiamide.</b> <span
												class='w3-text-blue'> <br> <b>Gianolio E. et al; </b><br>Neuroradiology.
												2018
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<a
											title='Open in a new window'
											class='http'
											href='https://www.ncbi.nlm.nih.gov/pubmed/30471202'
											target='_blank'>
											<img
												src='images/papers/terreno_2018.jpg'
												alt=''
												style='width: auto; height: 100px'>
											<b>Indocyanine Green labeling for optical and photoacoustic
												imaging of Mesenchymal Stem Cells after in vivo
												transplantation.</b> <span class='w3-text-blue'> <br> <b>Terreno
													E. et al; </b><br>J Biophotonics. 2018
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<a
											title='Open in a new window'
											class='http'
											href='https://www.ncbi.nlm.nih.gov/pubmed/30087935'
											target='_blank'>
											<img
												src='images/papers/geninatti_2018.jpg'
												alt=''
												style='width: 100%'>
											<b>Efficient Route to Label Mesenchymal Stromal Cell-Derived
												Extracellular Vesicles.</b> <span class='w3-text-blue'> <b>Geninatti
													S. et al; </b><br> ACS Omega. 2018 Jul 31;3(7):8097-8103.
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class='animSlides w3-animate-fading'>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<a
											title='Open in a new window'
											class='http'
											href='https://www.ncbi.nlm.nih.gov/pubmed/30248218'
											target='_blank'>
											<img
												src='images/papers/reineri_2018.jpg'
												alt=''
												style='width: 100%'>
											<b>Metabolic Studies of Tumor Cells Using [1-<sup>13</sup> C]
												Pyruvate Hyperpolarized by Means of PHIP-Side Arm
												Hydrogenation.
											</b> <span class='w3-text-blue'> <br> <b>Reineri F. et al; </b><br>Chemphyschem.
												2018, 19, 1-9.
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<a
											title='Open in a new window'
											class='http'
											href='https://www.ncbi.nlm.nih.gov/pubmed/29411832'
											target='_blank'>
											<img
												src='images/papers/dellicastelli_2018.jpg'
												alt=''
												style='width: 100%'>
											<b>[Yb(AAZTA)(H<sub>2</sub>O)]-: an unconventional ParaCEST
												MRI probe.
											</b> <span class='w3-text-blue'> <br> <b>Delli Castelli D. et
													al; </b><br>Chem Commun. 2018 Feb 20;54(16):2004-2007.
											</span>
										</a>
									</div>
								</div>
							</div>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<img
											src='images/papers/stefania_2018.jpg'
											alt=''
											style='width: 100%'>
										<div class='w3-container'>
											<a
												title='Open in a new window'
												class='http'
												href='https://www.ncbi.nlm.nih.gov/pubmed/30257047'
												target='_blank'>
												<b>An efficient MRI agent targeting extracellular markers in
													prostate adenocarcinoma.</b> <span class='w3-text-blue'> <br>
													<b>Stefania R et al; </b><br>Magn Reson Med. 2018; 1-12
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class='animSlides w3-animate-fading'>
							<div class='w3-container w3-cell'>
								<div
									class='w3-card'
									style='width: 100%'>
									<div class='w3-container'>
										<img
											src='images/papers/cutrin_2018.jpg'
											alt=''
											style='width: 100%'>
										<div class='w3-container'>
											<a
												title='Open in a new window'
												class='http'
												href='https://www.ncbi.nlm.nih.gov/pubmed/29963255'
												target='_blank'>
												<b>Cancer cell death induced by ferritins and the peculiar
													role of their labile iron pool.</b> <span
													class='w3-text-blue'> <br> <b>Cutrin JC et al;</b> <br>Oncotarget.
													2018 Jun 15; 9(46): 27974-27984
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id='after'></div>
			<div id='footer'>
				<p>
					Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
					Fax. Tel. Mail
				</p 
    			<?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
			
			
			
			
			
			</div>
		</div>
	</div>
	</div>
	<!-- section closing -->
	<script>
//<![CDATA[
changeSideNavStyles();
//]]>
var myIndex_1 = 0;
var myIndex_2 = 0;
carousel();
function carousel() {
    var i;
    var y;
    y = document.getElementsByClassName('animSlides');
    //alert(y.length);
    for (i = 0; i < y.length; i++) {
      y[i].style.display = 'none';  
    }
    myIndex_1++;
    if (myIndex_1 > y.length) {myIndex_1 = 1}    
    y[myIndex_1 - 1].style.display = 'flex';  
    y = document.getElementsByClassName('animSlides2');
    //alert(y.length);
    for (i = 0; i < y.length; i++) {
      y[i].style.display = 'none';  
    }
    myIndex_2++;
    if (myIndex_2 > y.length) {myIndex_2 = 1}    
    y[myIndex_2 - 1].style.display = 'flex';  
    setTimeout(carousel, 5000);
}
        </script>
	<!-- InstanceEnd -->
</body>
</html>