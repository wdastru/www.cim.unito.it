<?php
$localizer = "../";
?>
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
            
        <?php
        require $localizer . 'includes/head_const.inc.php';
        ?>
        <title>Molecular Imaging Center - University of Torino - MRI
	sequences</title>
<meta name="description" content="">
</head>
<body>
	<div class='centered' id='hiddenBox'
		style='border-radius: 10px; border: 5px solid black; z-index: 1; width: 600px; display: none; visibility: hidden; font-weight: bold; color: #db6d16; background-color: #000d; padding: 16px;'>
		<form class='table' method="post"
			action="<?php echo $localizer . 'research/MRI_sequences/sequence_request_validator.php' ?>">
			<div class='tableRow'>
				<label class='tableCell firstCol' for="name">Your Name: </label> <input
					class='tableCell secondCol' type="text" id="name" name="name">
			</div>
			<div class='tableRow'>
				<label class='tableCell firstCol' for="organization">Your
					Organization: </label> <input class='tableCell secondCol'
					type="text" id="organization" name="organization">
			</div>
			<div class='tableRow'>
				<label class='tableCell firstCol' for="PI">Your PI/group leader: </label>
				<input class='tableCell secondCol' type="text" id="PI" name="PI">
			</div>
			<div class='tableRow'>
				<label class='tableCell firstCol' for="country">Your Country: </label>
				<input class='tableCell secondCol' type="text" id="country"
					name="country">
			</div>
			<div class='tableRow'>
				<label class='tableCell firstCol' for="area_res">Your primary area
					of research: </label> <input class='tableCell secondCol'
					type="text" id="area_res" name="area_res">
			</div>
			<div class='tableRow'>
				<label class='tableCell firstCol' for="email">Your email address: </label>
				<input class='tableCell secondCol' type="email" id="email"
					name="email">
			</div>
			<div class='tableRow'>&nbsp;</div>
			<div class='tableRow'>
				<input class='tableCell firstCol' style='width: 50%' type="submit"
					value="Submit">
			</div>
			<div class='tableRow'>
				<input class='tableCell firstCol' style='width: 50%' type="button"
					value="Cancel" onmousedown="hideFormBox()">
			</div>
			<input class='tableCell' id='hiddenSeqNameInput' type="hidden"
				name="sequence_name" value="">
		</form>
	</div>

	<div id='section1'>
            <?php
            require ('../includes/main-nav.php');
            ?>
            <div id='header'></div>
		<!-- InstanceBeginEditable name="subsection opening" -->
		<div id="subsection23">
			<!-- InstanceEndEditable -->
                <?php
                require ('../includes/research-side-nav.php');
                ?>
                <div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							MRI Sequence Development
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->
						<p class="indent">
							The MRI sequence development team focuses on the development and
							optimization of new magnetic resonance imaging (MRI) sequences
							and protocols tailored to several preclinical applications for
							Bruker and Aspect Imaging MRI scanners. Led by Dr. Walter Dastr
							&uacute;
							and Dr. Dario Longo, the team specializes in MRI data
							acquisition, image reconstruction and data analysis, covering
							gadolinium-based, <sup>19</sup>F and CEST-MRI applications for
							improving acquisition time, volume coverage and contrast.
							Developed sequences are free for downloading by all interested
							research parties. If the sequences are used for publication
							purposes, acknowledgments in the manuscript about the sequence
							are appreciated.
						</p>
						<div style="margin-left: 30px;">
							<p>
								<b>&bull; A single-shot single-slice sequence for CW-CEST imaging</b><br>A
								single-shot centric encoding RARE-based sequence with an
								implemented frequency offsets loop that allows to store all the
								images sampled with different frequencies (with CW saturation)
								in a single MR scan. This package contains the files and the
								instructions for a multislice CEST sequence installation and
								first use. The sequence is based on a RARE method developed for
								Bruker MRI scanners running with ParaVision 5.1 and with a
								modified Magnetization Transfer module. <br> More information
								about the sequence is available in: <br> <i>"Iopamidol as a
									responsive MRI-chemical exchange saturation transfer contrast
									agent for pH mapping of kidneys: In vivo studies in mice at 7
									T"</i>, Longo DL et al; <br> <i>Magn Reson Med</i>, <b>2011</b>,
								65:202-11, doi: 10.1002/mrm.22608<br> <a class='seq_link'
									onmousedown="showFormBox('CEST_single_slice_PV6.0.1')">Download
									link for ParaVision 6.0.1</a> <br> Contacts: <a
									href="mailto:dario.longo@unito.it">dario.longo@unito.it</a>, <a
									href="mailto:daisy.villano@unito.it">daisy.villano@unito.it</a><br>
							</p>
							<p>
								<b>&bull; A RARE-based sequence for fast multislice CEST imaging</b><br>A
								fast multislice CEST acquisition scheme has been implemented by
								splitting the saturation module into two parts: a first long
								saturation pulse that generates the steady-state and a second
								short saturation pulse, repeated before each slice, to restore
								saturation losses. Each slice is acquired with a
								centric-encoding single-shot fast spin echo (RARE) readout. This
								package contains the files and the instructions for a multislice
								CEST sequence installation and first use. The sequence is based
								on a RARE method developed for Bruker MRI scanners running with
								ParaVision 6.0.1/360.1.1. <br> More information about the
								sequence is available in:<br> <i>"A fast multislice sequence for
									3DMRI-CEST pH imaging"</i>, Villano D et al; <br>
								<i>Magn Reson Med</i>, <b>2021</b>, 85, 1335-1349.
								doi:10.1002/mrm.28516<br> <a class='seq_link'
									onmousedown="showFormBox('CEST_multi_slice_PV6.0.1')">Download
									link for ParaVision 6.0.1</a><br> <a class='seq_link'
									onmousedown="showFormBox('CEST_multi_slice_PV360.1.1')">Download
									link for ParaVision 360.1.1</a> <br>Contacts: <a
									href="mailto:daisy.villano@unito.it">daisy.villano@unito.it</a>
								<a href="mailto:dario.longo@unito.it">dario.longo@unito.it</a>,
							</p>
						</div>
						<br>
						<p>Research groups using our sequences:</p>
						
						<ul>
							<li><b><a href="https://moffitt.org/research-science/researchers/robert-gillies/">Prof. Robert Gillies</a></b> - Moffitt Cancer Center - USA <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/us/shiny/64.png"> --><br></li>
							<li><b>Prof. Hana Lahrech</b> - Universit&eacute; Grenoble Alpes -
								France <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/fr/shiny/64.png">--><br></li>
							<li><b><a href="https://www.pharma.uzh.ch/en/research/functionalimaging/members.html">Dr. Afroditi Eleftheriou</a></b> - Universit&auml;t Z&uuml;rich
								- Switzerland <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/ch/shiny/64.png">--><br></li>
							<li><b><a href="https://iris.ucl.ac.uk/iris/browse/profile?upi=SWALK96">Prof. Simon Walker-Samuel</a></b> - University College London,
								United Kingdom <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/gb/shiny/64.png">--><br></li>
							<li><b><a href="https://www.marionegri.it/personale/gianluigi-forloni">Gianluigi Forloni</a></b> - Istituto di Ricerche
								Farmacologiche Mario Negri - IRCCS, Italy <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/it/shiny/64.png">--><br></li>
							<li><b><a href="https://neuro.polymtl.ca/team/faculty/nikola-stikov">Stikov</a></b> - Montreal Heart Institute - Canada <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/ca/shiny/64.png">--><br></li>
							<li><b><a href="https://warwick.ac.uk/fac/sci/eng/people/joanna_collingwood">Joanna Collingwood</a></b> - Warwick University - United Kingdom <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/gb/shiny/64.png">--><br></li>
							<li><b><a href="https://www.kennedykrieger.org/patient-care/faculty-staff/michael-mcmahon">M.T. McMahon</a></b> - Kennedy Krieger Institute / The Johns Hopkins University School of Medicine - USA <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/us/shiny/64.png">--><br></li>
							<li><b><a href="https://medicine.missouri.edu/faculty/lixin-ma-phd">Lixin Ma</a></b> - University of Missouri, Columbia - USA <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/us/shiny/64.png">--><br></li>
							<li><b><a href="https://www.ifj.edu.pl/en/divisions/no5/nz56.php">W&#322;adys&#322;aw W&#281;glarz</a></b> - Institute of Nuclear Physics PAN - Poland <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/pl/shiny/64.png">--><br></li>
							<li><b>Prof. Aoki Ichio</b> - National Institutes for Quantum and Radiological Science and Technology - Japan <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/jp/shiny/64.png">--><br></li>
							<li><b><a href="https://radnuk.meduniwien.ac.at/allgemeine-informationen/klinikleitung/thomas-helbich/">Thomas Helbich</a></b> - Medical University of Vienna - Austria <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b>Olivier Rh&eacute;aume Roberge</b> - <a href="https://www.usherbrooke.ca/">University of Sherbrooke</a> - Canada <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b>Wendy Oakden</b> - <a href="https://www.usherbrooke.ca/">University of Sherbrooke</a> - Canada <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b>Brian Roman</b> - <a href="https://www.uchicago.edu/">University of Chicago</a> - USA <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b>Salman Shaid</b> - <a href="https://www.iupui.edu/">Indiana University Purdue University at Indianapolis</a> - USA <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b><a href="https://www.fhwn.ac.at/en/employee/poblador-rodriguez-esau">Esa&uacute; Poblador Rodriguez</a></b> - <a href="https://www.fhwn.ac.at/en/">University of Applied Sciences Wiener Neustadt</a> - USA <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b><a href="https://www.weizmann.ac.il/pages/search/people?keywords=Elad%20Goren">Elad Goren</a></b> - <a href="https://www.weizmann.ac.il/pages/">Weizmann Institute of Science</a> - Israel <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b>Pedro Enriquez Navas</b> - <a href="https://www.bms.com/">Bristol Myers Squibb</a> - USA <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
							<li><b>Shaowei Bo</b> - <a href="https://english.jnu.edu.cn/">Jinan University</a> - China <!--<img style="height:20px; vertical-align:top;" src="https://www.countryflags.io/at/shiny/64.png">--><br></li>
						</ul>
						<p>
						The sequences are provided for free but to download them please
						fill out the form. Of course, their use is under the operator's
						responsibility.<br> All information collected will be stored
						securely and will never be used for commercial purposes.</p><br><br>
						<hr>
						<h2 style="text-align: left;">Group Leaders:</h2> <a href="../PI/Longo/home.php" target="_blank" title="Dario Longo">
						<img alt="Dario Longo" class="group-leaders-img" src="../images/staff/Dario_Longo.jpg"></a> 
						<a href="#" target="_blank" title="Walter Dastr&ugrave;"> 
						<img alt="Walter Dastr&ugrave;" class="group-leaders-img" src="../images/staff/dastru.jpg"></a>
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
