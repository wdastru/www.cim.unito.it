<?php
	$localizer = "../../";
?>
<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
	<title>Gallery | Longo Lab</title>
	
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<?php require ($localizer . 'includes/head_const.inc.php'); ?>
	<?php require ($localizer . 'PI/Longo/includes/head_const_longo.php'); ?>
	
	
<!--  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<!--  <link rel='stylesheet' href='../../PI/Longo/includes/w3.css' /> -->


<style>
div.gallery {
    border: 2px solid #ccc;
   
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
    max-height: 150px;
    
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}


.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}



.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

.w3-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
.w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0px;outline:0;width:600px}


</style>
	
	
</head>
<body class="homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper">

			<!-- logo unito -->
			<a href="http://www.unito.it" title="University of Torino"
				target="_blank" id="unito-logo" style="text-decoration: none;">
				<div class="unito-logo-container"></div>
			</a> <a href="http://www.cim.unito.it"
				title="Molecular Imaging Center" target="_blank"
				style="text-decoration: none;">
				<div class="cim-logo-container"></div>
			</a>


			<div class="container">

				<!-- Header -->
				<header id="header" style="margin: -30px 0 30px 0;">
					<div class="inner">

						<!-- Logo -->
						<h1>
							<a href="<?php echo $localizer; ?>PI/Longo/home.php" id="logo">DARIO
								LONGO LAB</a>
							<div>
								<p style="color: gray;">Imaging Tumor Microenvironment</p>

							</div>
						</h1>
						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li ><a href="<?php echo $localizer; ?>PI/Longo/home.php">Home</a></li>
								<li><a href="<?php echo $localizer; ?>PI/Longo/research_overview.php">Research</a>
									<ul>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_overview.php">Overview</a></li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_probes.php">MRI probes</a></li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_angiogenesis.php">Tumor
												angiogenesis</a>
										<li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_tumor_pH.php" font
											style="text-transform: none;">TUMOR pH IMAGING</a>
										<li>
										<li><a href="<?php echo $localizer; ?>PI/Longo/research_kidney.php" font
											style="text-transform: none;">RENAL pH IMAGING</a></li>
									</ul></li>
								<li class="current_page_item"><a href="<?php echo $localizer; ?>PI/Longo/group.php">Group</a></li>
								<li><a href="<?php echo $localizer; ?>PI/Longo/publications.php">Publications</a></li>
								<li><a href="<?php echo $localizer; ?>PI/Longo/contact.php">Contact us</a></li>
							</ul>
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
				
				
				
				 <ul class="style2" style="float: right;">
							<li><a href="#group"><b>Group Photo</b></a></li>
							<li><a href="#congress"><b>Congress Photo</b></a></li>
														
							</ul>
				  
				<h2>Photo Gallery</h2>

<br>

				<h4 id='group'>Group Photo</h4>

				
				<div class="responsive">
							<div class="gallery">

								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/group_2021.jpg"
									alt="Group 2021" width="600" height="auto"
									title="From left to right: Dario, Daisy Villano, Sara Zullino, Elena Botto, Alessia Corrado, Giulia Caranta, Antonella Carella, Feriel Ramdhane, Elisa Pirotta, Kranthi Kandula."
									
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Lab group 2021</b></div>
							</div>
						</div>
				
				<div class="clearfix"></div>
				<br>
				
						<div class="responsive">
							<div class="gallery">

								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/group_2020_covid.jpg"
									alt="Group 2020" width="600" height="auto"
									
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Lab group 2020 - Covid19</b></div>
							</div>
						</div>


						<div class="responsive">
							<div class="gallery">

								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/group_2020.jpg"
									alt="Group 2020" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Lab group 2020</b></div>
							</div>
						</div>

						<div class="responsive">
							<div class="gallery">

								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/group_2019.jpg"
									alt="Group 2019" width="600" height="400"
									title="From left to right: Miriam Roberto, Noemi Salmistraro, Martina Maltone, Deborah Ambrosecchia, Feriel Ramdhane, Daisy Villano, Pietro Irrera, Sara Zullino, Annasofia Anemone and Dario."
									
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Lab group 2019</b></div>
							</div>
						</div>

						<div class="responsive">
							<div class="gallery">

								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/group_2018.jpg"
									alt="Group 2018" width="600" height="400"
									title="From left to right: Martina Bracesco, MArtina Capozza, Feriel Ramdhane, Sara Zullino, Daisy Villano, Pietro Irrera, Bhavna Singh, Amerigo Pagoto, Lorena Consolino, Chetan Dhakan and Dario."
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Lab group 2018</b></div>
							</div>
						</div>
						
						

				<div class="clearfix"></div>
				<br>

					<h4 id='congress'>Congress Photo</h4>

					
					
					
					<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_EMIM_2021.jpg"
									alt="EMIM 2021" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>European Molecular Imaging Meeting -EMIM 2021- Gottingen</b></div>
							</div>
						</div>
						
					<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_renal_imaging_2021.jpg"
									alt="Renal Imaging 2021" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>4th International Renal Imaging meeting 2021 - Lisbon</b></div>
							</div>
						</div>
					
					
					<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_CEST_2020.jpg"
									alt="CEST 2020" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>virtual CEST workshop -      2020           </b></div>
							</div>
						</div>


			<div class="clearfix"></div>
			<br>

						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_renal_imaging_2019.jpg"
									alt="Renal Imaging 2019" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>3rd International Renal Imaging meeting 2019 - Nottingham</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/Longo_ESMRMB_2019.jpg"
									alt="ESMRMB 2019" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>36th ESMRMB 2019 meeting - Rotterdam</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_EMIM_2019.jpg"
									alt="EMIM 2019" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>European Molecular Imaging Meeting - EMIM 2019 - Glasgow</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_renal_imaging_2018.jpg"
									alt="Renal Imaging 2018" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>2nd International Renal Imaging meeting 2018 - Berlin</b></div>
							</div>
						</div>
						
			<div class="clearfix"></div>
			<br>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/Longo_CEST_2018.jpg"
									alt="CEST 2018" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>7th CEST workshop 2018 - Beijing</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_EUSARC_2018.jpg"
									alt="EUSARC 2018" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>EUSARC congress 2018 - Bertinoro</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/Longo_CMR_2017.jpg"
									alt="CMR 2017" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Contrast Media Research 2017 - Durango</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_CEST_2017.jpg"
									alt="CEST 2017" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>6th CEST workshop 2017 - Nashville</b></div>
							</div>
						</div>
						
			<div class="clearfix"></div>
			<br>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_COST_2017b.jpg"
									alt="COST 2017" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b><br>COST project PARENCHIMA kick-off meeting 2017 - Brussels</b></div>
							</div>
						</div>

						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/Longo_ECR_2015.jpg"
									alt="ECR 2015" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>European Congress Radiology - ECR 2015 - Vienna</b></div>
							</div>
						</div>

						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_EMIM_2015.jpg"
									alt="EMIM 2015" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>European Molecular Imaging Meeting - EMIM 2015 - Tubingen</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/Longo_WMIC_2014.jpg"
									alt="WMIC 2014" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>World Molecular Imaging Congress - WMIC 2014 - Seoul</b></div>
							</div>
						</div>
						
		<div class="clearfix"></div>
		<br>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_EMIM_2013.jpg"
									alt="EMIM 2013" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>European Molecular Imaging Meeting - EMIM 2013 - Torino</b></div>
							</div>
						</div>
						
	
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_IP_2013.jpg"
									alt="IP 2013" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Intensive Programme "Imaging therapy" 2013 - Torino</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_IP_2012.jpg"
									alt="IP 2012" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Intensive Programme "Imaging therapy" 2012 - Torino</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_IP_2011.jpg"
									alt="IP 2011" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Intensive Programme "Imaging probes" 2011 - Torino</b></div>
							</div>
						</div>		
						
							
		<div class="clearfix"></div>
		<br>
											
						<div class="responsive">
							<div class="gallery">

								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/Longo_CMR_2011.jpg"
									alt="CMR 2011" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Contrast Media Research 2011 - Galveston</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_IP_2010.jpg"
									alt="IP 2010" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Intensive Programme "Imaging probes" 2010 - Torino</b></div>
							</div>
						</div>
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_IP_2009.jpg"
									alt="IP 2009" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Intensive Programme "Imaging probes" 2009 - Torino</b></div>
							</div>
						</div>		
						
						<div class="responsive">
							<div class="gallery">
								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_WMIC_2009.jpg"
									alt="WMIC 2009" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>World Molecular Imaging Congress WMIC 2009 - Montreal</b></div>
							</div>
						</div>
						
						
		<div class="clearfix"></div>
						<br>
						
		<div class="responsive">
							<div class="gallery">

								<img
									src="<?php echo $localizer; ?>PI/Longo/gallery/meeting_GRC_2008.jpg"
									alt="GRC 2008" width="600" height="auto"
									style="cursor: pointer" onclick="onClick(this)"
									class="w3-hover-opacity">
								<div class="desc"><b>Gordon Research Conference 2008 - Andover</b></div>
							</div>
						</div>
						

<div class="clearfix"></div>

<div id="modal01" class="w3-modal" onclick="this.style.display='none'">
<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom">
    <img id="img01" style="width:150%">
  </div>
</div>

<!--  
<div style="padding:6px;">
<p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
<p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div>
-->


</section>



</div>

</div>

</div>
</div>

	<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>


</body>
</html>
