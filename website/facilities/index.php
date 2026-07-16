<?php require_once (__DIR__ . '/../config.inc.php'); $activeSection = 'facilities'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>
            Molecular Imaging Center - University of Torino - Facilities
        </title>
        <meta name="description" content="" />
        <link rel="stylesheet" href="hexag.css" />
    </head>
    <body>
        <div id="section3">
            <div id="subsection0">
                <?php include SITE_PATH . 'includes/menu.php'; ?>
                <?php include SITE_PATH . 'includes/header.php'; ?>
                <?php include SITE_PATH . 'includes/facilities-side-nav.php'; ?>
                <?php include SITE_PATH .
                'includes/facilities-side-nav-mobile.php'; ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div class="band">
                            <h1 class="subsectionTitle">
                                Facilities
                            </h1>
                        </div>
                        <div class="paddingInner">
                            <p>
                                The Molecular Imaging Center is well equipped in
                                terms of chemical (synthesis and analytical
                                characterisation), biological (cell culture and
                                animal models) and small animal imaging
                                laboratories for molecular imaging
                                investigations.
                            </p>
                            <p>
                                The lab is equipped with several small animal
                                MRI systems (three 1T, one 3T, two 7T) from
                                Bruker and Aspect Imaging. These systems can be
                                used for contrast enhanced images, DCE, DWI,
                                MRS, CEST and hyperpolarized experiments in mice
                                and rats with high spatial resolution. We are
                                also equipped with a 1T MRI for severe
                                immunocompromised mice under SPF condition. In
                                addition, the lab is equipped with a small
                                animal PET/SPECT/CT high resolution scanner, two
                                whole body optical imaging systems, two
                                ultrasound and two optoacoustic imaging systems.
                            </p>
                            <p>
                                Furthermore, the lab has a state-of-the-art cell
                                culture laboratory including laminar flow and
                                incubator, a gamma counter, a histology and PCR
                                lab and a microscopy lab. We are equipped for
                                custom organic and peptide synthesis for all the
                                imaging modalities. We have access to clinical
                                radiotracers as well as to experimental PET
                                radiotracers. The laboratory is also equipped
                                with high end computer workstations with
                                specialized software, such as PMOD or Paravision
                                but also commercial software packages like
                                Matlab.
                            </p>
                            <div class="container-hex">
                                <div class="left-side">
                                    <div
                                        class="row-hex"
                                        style="padding-left: 80px"
                                    >
                                        <a href="mri.php">
                                            <div class="hex">
                                                <div class="hex-title">MRI</div>
                                                <div class="hex-hide"></div>
                                                <div class="hex-img">
                                                    <img
                                                        alt="generic MRI image"
                                                        src="mri.jpg"
                                                    />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="row-hex"
                                        style="padding-left: 0px"
                                    >
                                        <a href="pet.php">
                                            <div class="hex">
                                                <div class="hex-title">
                                                    PET/SPET/CT
                                                </div>
                                                <div class="hex-hide"></div>
                                                <div class="hex-img">
                                                    <img
                                                        alt="generic PET image"
                                                        src="pet.jpg"
                                                    />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="row-hex"
                                        style="padding-left: 80px"
                                    >
                                        <a href="oi_us_pa.php">
                                            <div class="hex">
                                                <div class="hex-title">
                                                    OI/US/PA imaging
                                                </div>
                                                <div class="hex-hide"></div>
                                                <div class="hex-img">
                                                    <img
                                                        alt="generic OI image"
                                                        src="optical_imaging.jpg"
                                                    />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <div
                                        class="row-hex"
                                        style="padding-left: 0px"
                                    >
                                        <a href="relax.php">
                                            <div class="hex">
                                                <div class="hex-title">
                                                    NMR/Relaxometry
                                                </div>
                                                <div class="hex-hide"></div>
                                                <div class="hex-img">
                                                    <img
                                                        alt="generic 2D NMR spectrum"
                                                        src="nmr.jpg"
                                                    />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="row-hex"
                                        style="padding-left: 80px"
                                    >
                                        <a href="org_lab.php">
                                            <div class="hex">
                                                <div class="hex-title">
                                                    Synthesis
                                                </div>
                                                <div class="hex-hide"></div>
                                                <div class="hex-img">
                                                    <img
                                                        alt="generic molecule formula"
                                                        src="synthesis2.jpg"
                                                        style="max-height: 120%"
                                                    />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="row-hex"
                                        style="padding-left: 0px"
                                    >
                                        <a href="cell_lab.php">
                                            <div class="hex">
                                                <div class="hex-title">
                                                    Cell laboratory
                                                </div>
                                                <div class="hex-hide"></div>
                                                <div class="hex-img">
                                                    <img
                                                        alt="generic cell image"
                                                        src="cell.jpg"
                                                    />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />
                        </div>
                    </div>
                </div>
                
                
                <div id="after"></div>
                <div id="footer">
                    <p>
                        Molecular Imaging Center - Via Nizza, 52 - I-10125
                        Torino - ITALY <br />
                        Fax. Tel. Mail
                    </p>
                    <?php include SITE_PATH .
                    'includes/HTML5_badge_valid.inc.php';?> <?php include
                    SITE_PATH . 'includes/PageSpeedTest.inc.php';?>
                </div>
            </div>
            
        </div>
        
        <script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html>
