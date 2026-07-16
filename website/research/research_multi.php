<?php
    require_once __DIR__ . '/../config.inc.php';
    $activeSection    = 'research';
    $activeSubsection = 'multi';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino - CEST
	agents</title>
<meta
	name="description"
	content="">
</head>
<body>
	<div id='section1'>

			<?php include SITE_PATH . 'includes/menu.php'; ?>
                <?php include SITE_PATH . 'includes/header.php'; ?> <div class="main-area">
            <?php include SITE_PATH . 'includes/research-side-nav.php'; ?>
            <?php include SITE_PATH . 'includes/research-side-nav-mobile.php'; ?>
			<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							Multi-modality Contrast Agents
						</h1>
					</div>
					<div class='paddingInner'>
						<div class="imgLeft">
							<img
								alt="Multimodal imaging"
								src="../images/research_lines/multimodality_probes1.jpg">
							<span><b>Figure 1.</b> Multimodality techniques</span><span>(Rieffel
								j et al., Small 2015, 11:4445)</span>
						</div>
						<p class='indent'>The technological progresses in biomedical
							imaging has led to the development of integrated multimodal
							scanners, where two or even more imaging modalities can fully
							display their complementarity. The functional/molecular
							techniques of photoacoustic imaging (PAI), fluorescence molecular
							tomography (FMT), positron emission tomography (PET), and single
							photon emission computed tomography (SPECT) in association with
							each other or with the anatomic reference provided by computed
							tomography (CT) as well as with anatomic and functional
							information provided by magnetic resonance imaging (MRI) have all
							been proficiently applied to animal models of human disease
							(Figure 1). The long-term aim of multimodality is to improve the
							overall performance of the exam by increasing the number of data
							acquired and by optimizing post-processing analysis of the
							(co)registered images. Combined modalities could allow
							researchers to monitor more biological events (morphological,
							functional, molecular) in the same imaging session, thus reducing
							the number of animals necessary in each experiment.In the recent
							years, a growing number of multimodal probes have been reported
							and validated on animal models of human diseases. As a multimodal
							agent has to contain different chemical entitiesdepending on the
							imaging signal it has to generate, the large majority of the
							multimodal probes are nanoparticles. An example of a multimodal
							nanoparticle is sketched in Figure 2. The system is based on a
							gold metal core that can be detected in CT scans (and likely in
							photoacoustic imaging too). Gold is surrounded by a silica
							coating that was made lipophilic and further coated with
							amphiphilic MRI and Near InfraRed Fluorescent (NIRF) probes.
						<ul>
							<li>i) nanosystems for dual MRI and US detection (e.g.
								nanobubbles loaded with amphiphilic Gd(III) complexes),</li>
							<li>ii) nanosystems for dual MRI and photoacoustic imaging
								detection (e.g. core-shell particles containing iron oxides and
								gold),</li>
							<li>iii) dual MRI/NIRF probes to be used for surgery preparation
								and intraoperative guiding in surgery oncology.</li>
						</ul>
						<hr>
						<h2 style="text-align: left;">Group Leaders:</h2>
						<a
							href="<?php echo SITE_ROOT; ?>PI/Terreno/home.php"
							title="Enzo Terreno">
							<img
								alt="Enzo Terreno"
								class="group-leaders-img"
								src="<?php echo SITE_ROOT; ?>images/staff/terreno.webp">
						</a>
					</div>
				</div>
			</div>
			
			</div>
<div id='after'></div>
			<div id='footer'>
				<p>
					Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
					Fax. Tel. Mail
				</p>
<?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php'; ?>
<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
            </div>
		
	</div>
	
	<script>
            //<![
						CDATA[
            changeSideNavStyles();
            //]]>
        </script>
</body>
</html>
