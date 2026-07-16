<?php
    require_once __DIR__ . '/config.inc.php';
    $activeSection = 'partners';
    $activeSubsection = 'academic';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>
            Molecular Imaging Center - University of Torino - Institutional
            partners
        </title>
        <meta name="description" content="" />
    </head>
    <body>
        <div id="section4">
            <?php include SITE_PATH . 'includes/menu.php'; ?>
            <?php include SITE_PATH . 'includes/header.php'; ?>
            <div class="main-area">
                <?php include SITE_PATH . 'includes/partners-side-nav.php'; ?>
                <?php include SITE_PATH .
                'includes/partners-side-nav-mobile.php'; ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div class="band">
                            <h1 class="subsectionTitle">
                                Academic Partners
                            </h1>
                        </div>
                        <div class="paddingInner">
                            <h1>
                                <span style="text-align: left"
                                    >Partners in Italy</span
                                >
                            </h1>
                            <ul>
                                <li>
                                    Department of Biotechnology, University of
                                    Verona (Prof. Michael Assfalg)
                                </li>
                                <li>
                                    Istituto Biostrutture e Bioimmagini,
                                    IBB-CNR, Napoli (Prof. Mancini)
                                </li>
                                <li>
                                    Istituto di Cristallografia, CNR, Bari (Dr.
                                    M. Saviano)
                                </li>
                                <li>
                                    Dipartimento di Scienze ed Innovazione
                                    Tecnologica, Universit&agrave; del Piemonte
                                    Orientale "A. Avogadro", Alessandria (Prof.
                                    M. Botta)
                                </li>
                            </ul>
                            <h1>
                                <span style="text-align: left"
                                    >Partners in Europe</span
                                >
                            </h1>
                            <ul>
                                <li>
                                    Department of Biological Regulation,
                                    Weizmann Institute of Science, Rehovot
                                    (Prof. Michal Neeman)
                                </li>
                                <li>
                                    Medical Faculty Mannheim, Heidelberg
                                    University (Prof. Frank Zoellner)
                                </li>
                                <li>
                                    Biomedical Imaging Group, Erasmus MC -
                                    University, Rotterdam (Prof. Stefan Klein)
                                </li>
                                <li>
                                    Institute of Technical Sciences of the
                                    Serbian Academy of Sciences and Arts,
                                    Belgrade, Serbia (Dr. Magdalena Stevanovic)
                                </li>
                                <li>
                                    Service d'Imagerie Diagnostique et
                                    Th&eacute;rapeutique, Universit&eacute;
                                    Claude Bernard Lyon 1, Lyon, France (Prof.
                                    P. Douek)
                                </li>
                                <li>
                                    School of Biomedical Engineering and Imaging
                                    Sciences, King's College, London, UK (Prof.
                                    R. Botnar)
                                </li>
                            </ul>
                            <h1>
                                <span style="text-align: left"
                                    >Partners in USA</span
                                >
                            </h1>
                            <ul>
                                <li>
                                    Athinoula A. Martinos Center for Biomedical
                                    Imaging, Massachussets General Hospital,
                                    Boston, MA (Prof. Phillip Zhe Sun)
                                </li>
                                <li>
                                    Department of Cancer Imaging and Metabolism,
                                    Moffit Cancer Center, Tampa, FL (Prof.
                                    Robert Gillies)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="after"></div>
                <div id="footer">
                    <p>
                        Molecular Imaging Center - Via Nizza, 52 - I-10125
                        Torino - ITALY<br />
                        Fax. Tel. Mail
                    </p>
                    <?php include SITE_PATH .
                    'includes/HTML5_badge_valid.inc.php'; ?> <?php include
                    SITE_PATH . 'includes/PageSpeedTest.inc.php'; ?>
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