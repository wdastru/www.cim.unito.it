<?php
	$localizer = "../../";
?>
<!DOCTYPE html>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
<head>
	<title>Peptide Modification | D'Andrea Lab</title>
	<?php require ($localizer . 'PI/DAndrea/includes/head_const_dandrea.php'); ?>
</head>
<body class="homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">
			
			<!-- logo unito -->
			<a href="http://www.unito.it" title="University of Torino" target="_blank" id="unito-logo" style="text-decoration: none;">
			<div class="unito-logo-container">                   
	          </div></a>
	          
	          <a href="http://www.cim.unito.it" title="Molecular Imaging Center" target="_blank" style="text-decoration: none;" >
	          <div class="cim-logo-container">
	         </div></a>
			
			
			<div class="container">
					
				<!-- Header -->
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">
					
						<!-- Logo -->
						<h1>
							<a href="<?php echo $localizer; ?>/PI/DAndrea/home.php" id="logo">Luca D'Andrea LAB</a>
							<div>
								<p style="color: gray; font-size=12px;" >Peptides and proteins for diagnostic and therapeutic applications</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<?php require ($localizer . 'PI/DAndrea/includes/menu_dandrea.php'); ?>
						</nav>

					</div>
				</header>

			</div>
		</div>


		<!-- Main Wrapper -->
		<div id="main-wrapper">

			<div class="wrapper style3">
				<div class="inner">
					<section class="container box feature3">
						<div class="row">

							<article>

								<h3 font style="text-transform: none;">Site-selective modification of peptides and proteins</h3>
								
								<p align="justify">The ability to selectively modify a peptide/protein molecule opens the way to a plethora of novel 
								applications for the target biomolecule and helps in understanding its structural/functional role.  Proteins can be 
								modified introducing unnatural amino acids, fluorophores, labeled atoms/residues, post-translation modifications, 
								chelating units, polymers, nanoparticles, ect. The site-selective modifications are introduced using chemo-selective 
								reactions, such as chemical ligation, in order to obtain a homogenous product. We are especially interested in the 
								bioconjugation of the molecules of interest with imaging probes for application in optical and medical imaging.
								</p>

								<div style="text-align: center;">
									<img src="<?php echo $localizer; ?>PI/DAndrea/images/figure_research_overview_2.jpg" style="max-width: 50%; height: auto;"><br/></div>


							</article>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<p font style="text-transform: none; font-size:1.3em">VEGFR1D2 bioconjugation: a tool for VEGF targeting</p>
										</header>
										<img src="<?php echo $localizer; ?>/PI/DAndrea/images/research_2_1.jpg" alt="" class="image zooming">

										<p align="justify">
										We report the use of a chemical ligation based strategy for the site-selective and covalent modification 
										of the second domain of VEGFR1D2, an Ig-like domain directly involved in the ligand binding in vivo. 
										VEGF/VEGFR biological system is the main regulator of angiogenesis, a physiological process controlling 
										the sprouting of new blood vessels from existing ones and whose impairment contributes to the onset, 
										development and progression of several diseases. VEGF and its receptors are considered excellent candidates 
										for the monitoring and the treatment of pathological angiogenesis. We have developed a bioconjugation strategy, 
										based on the use of an oxime-ligation reaction, to site-selectively label the VEGFR1D2 N-terminal site. 
										The N-terminal serine residue was selectively oxidized to aldehyde and then a molecular probe harboring 
										an alkoxyamine function was conjugated. VEGFR1D2 suitably modified with convenient molecular probes can 
										be used as a tool for VEGF targeting with both diagnostic and therapeutic applications.																					 												
										</p>
										
									</article>
								</section>
							</div>

							<div class="4u 12u(mobile)">

								<!-- Spotlight -->
								<section>

									<article>

										<header>
											<p font style="text-transform: none; font-size:1.3em">Site-specific protein double labeling by expressed protein ligation: applications to repeat proteins</p>
										</header>

										<p align="justify">
										We reported a semi-synthetic strategy based on expressed protein ligation to prepare proteins, in high purity and homogeneity, with 
										two different molecular probes incorporated specifically at any desired position
										<a class="html" href="https://pubs.rsc.org/en/content/articlelanding/2012/ob/c1ob06397a#!divAbstract"
												target="_blank"><font color="blue">[De Rosa et al. 2012]</font></a>. 
										Remarkably, this approach can be adapted to the introduction of more than two molecular probes. We applied this methodology to 
										the preparation of different versions of cTPR, a designed repeat protein
											<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/12737816"
												target="_blank"><font color="blue">[Main et al. 2003]</font></a>, 
										double labeled with fluorophores in order to analyze its folding mechanism by single molecules FRET (smFRET). The protein was split in two 
										halves. The N-terminal fragment was expressed as intein construct. The C-terminal fragment was prepared by recombinant expression or solid 
										phase peptide synthesis. After intein splicing the N-terminal fragment was labeled in solution on the single Cys residue using 
										the maleimide-thiol chemistry. Then, the two fragments were ligated by a native chemical ligation reaction and the junction-site Cys 
										was exploited for the second labeling (maleimide-thiol). We made four different cTPR variants which were analyzed by smFRET 										
										<a class="html" href="https://www.ncbi.nlm.nih.gov/pubmed/26207891"
												target="_blank"><font color="blue">[Cohen et al. 2015]</font></a>. 
												Based on this study we highlighted on the molecular basis for the elasticity of repeat proteins 
										in general and TPRs in particular, demonstrating that it can be modulated by weakening hydrophobic interactions at the interfaces between repeat units. 
											
										 <img src="<?php echo $localizer; ?>/PI/DAndrea/images/research_2_2_1.jpg" alt="" class="image zooming">
										 <img src="<?php echo $localizer; ?>/PI/DAndrea/images/research_2_2_2.jpg" alt="" class="image zooming">
											
											
									</article>
								</section>
							</div>

							

							


						</div>

					</section>

				</div>
			</div>
		</div>


	</div>

	<!-- Scripts -->

	<script src="<?php echo $localizer; ?>/PI/assets/js/jquery.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/jquery.dropotron.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/skel.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/skel-viewport.min.js"></script>
	<script src="<?php echo $localizer; ?>/PI/assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="<?php echo $localizer; ?>/PI/assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="<?php echo $localizer; ?>/PI/assets/js/main.js"></script>

</body>
</html>