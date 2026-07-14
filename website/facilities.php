<?php
    require_once __DIR__ . '/config.inc.php';
    $activeSection = 'facilities';
    $activeSubsection = 'facilities';
?>
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
        <?php include SITE_PATH . 'includes/analyticstracking.php'; ?>
        <div id="section3">
            <?php include 'includes/menu.php'; ?>
            <?php include 'includes/header.php'; ?>
            <div class="main-area">
                <?php include 'includes/facilities-side-nav.php'; ?>
                <?php include 'includes/facilities-side-nav-mobile.php'; ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div id="band">
                            <h1 id="subsectionTitle">Facilities</h1>
                        </div>
                        <div class="paddingInner">
                            <p>
                                The Molecular Imaging Center is well equipped in
                                terms of chemical (synthesis and analytical
                                characterisation), biological and imaging
                                laboratories.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="after"></div>
            <div id="footer">
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino -
                    ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            <div id="validators">
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"
                        ><img
                            src="images/valid-xhtml10-blue_opt.png"
                            alt="Valid XHTML 1.0 Transitional"
                            height="31"
                            width="88"
                    /></a>
                </p>
                <p>
                    <a
                        href="http://jigsaw.w3.org/css-validator/check?uri=referer"
                        ><img
                            style="border: 0; width: 88px; height: 31px"
                            src="images/vcss-blue_opt.gif"
                            alt="CSS Valido!"
                    /></a>
                </p>
            </div>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html>
