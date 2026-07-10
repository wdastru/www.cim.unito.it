<?php require_once (__DIR__ . '/../config.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino -
	Theranostic Agents</title>
<meta
	name="description"
	content="">
</head>
<body>
	<div id='section1'>
		<div id="subsection8">
			<?php include SITE_PATH . 'includes/menu.php'; ?>
                <?php include SITE_PATH . 'includes/header.php'; ?>
            <?php include SITE_PATH . 'includes/research-side-nav.php'; ?>
            <?php include SITE_PATH . 'includes/research-side-nav-mobile.php'; ?>
                <div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							Theranostic Agents
						</h1>
					</div>
					<div class='paddingInner'>
						<p class="indent">The possibility to guide a therapeutic treatment
							with imaging is an extremely interesting opportunity. A really
							important advance in this field was represented by the advent of
							MRI tomographs coupled with high frequency ultrasound systems for
							iperthermia localized treatments. Our activities in the files
							are:</p>
						<br>
						<ul>
							<li><b>Drug releasing liposomes</b>
								<p class='indent'>Liposomes loaded with both MRI contrast agents
									and drug molecules are used. They are administered to model
									animals and their MRI visualization permits to quantify the
									number of liposomes (hence drug molecules) that are present at
									the site of interest. The liposomes are engineered in order to
									release (possibly triggered) the drug and the contrast agent.
									The liposomes could be further engineered in order to be a
									reporter of the therapeutic efficacy of the drug. To reach this
									goal, both Gd and CEST MRI probes will be used.</p></li>
							<li><b>Neutron Capture Therapy and Imaging</b>
								<p class='indent'>
									The Neutron Capture Therapy (NCT) approach is of great interest
									mostly for brain tumors, and is based on the ability of a
									number of nuclei (among them <sup>10</sup>B) to absorb neutrons
									to start a nuclear reaction that causes the destruction of the
									cells. The success of the treatment is dependent on the
									quantity of active compound that reaches the ill cell, with
									respect to the quantity that distributes among vases and
									healthy cells. To this goal B and Gd containing probes are
									synthesized; from the MRI images it is possible to know the
									concentration of Gd and then calculate that of B. The probes
									contain carboranes, Gd complexes and a vector to drive them to
									the target of interest. It is worth noting that Gd exists in a
									form ( <sup>157</sup>Gd) that is sensible to neutron capture,
									and its presence in the probe represents a strengthening of the
									therapeutic action.
								</p></li>
							<li><b>Controlled Gd release systems</b>
								<p class='indent'>
									It is well known that the free Gd <sup>3+</sup>ion is really
									toxic; for this reason, it is used in the MRI applications only
									complexed in extremely stable compounds. This line of activity
									exploits the cytotoxicity of Gd <sup>3+</sup>by allowing the
									ion to be released in a controlled way at the site of interest.
									We are now considering probes that can recognise targets on the
									tumoral cells and then release the Gd <sup>3+</sup>inside the
									cell. In order to reduce the systemic toxicity of the metal
									ion, the probe is engineered to be deactivated (with respect to
									the release of Gd <sup>3+</sup>) shortly after reaching its
									target.
								</p></li>
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
						<a
							href="<?php echo SITE_ROOT; ?>PI/Geninatti/home.php"
							title="Simonetta Geninatti">
							<img
								alt="Simonetta Geninatti"
								class="group-leaders-img"
								src="<?php echo SITE_ROOT; ?>images/staff/geninatti_crich.webp">
						</a>
						<a
							href="<?php echo SITE_ROOT; ?>PI/Cutrin/home.php"
							title="Juan Carlos Cutrin">
							<img
								alt="Juan Carlos Cutrin"
								class="group-leaders-img"
								src="<?php echo SITE_ROOT; ?>images/staff/cutrin.webp">
						</a>
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
<?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php';?>
<?php include SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
            </div>
			<!-- section closing -->
		</div>
		<!-- subsection closing -->
	</div>
	<!-- section closing -->
	<script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
</body>
</html>
