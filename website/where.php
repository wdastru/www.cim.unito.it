<?php
    require_once __DIR__ . '/config.inc.php';
    $activeSection    = 'home';
    $activeSubsection = 'where';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>
            Molecular Imaging Center - University of Torino - Where we are
        </title>
        <meta
            name="description"
            content="Where you can find the Molecular Imaging Center"
        />
        <link
            rel="canonical"
            href="https://www.cim.unito.it/website/index.php"
        />
    </head>
    <body>
        <div id="section0">
            <?php include SITE_PATH . 'includes/menu.php'; ?>
            <?php include SITE_PATH . 'includes/header.php'; ?>
            <div class="main-area">
                <?php include SITE_PATH . 'includes/home-side-nav.php'; ?> <?php
 include SITE_PATH . 'includes/home-side-nav-mobile.php'; ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div class="band">
                            <h1 class="subsectionTitle">
                                How to reach the CIM
                            </h1>
                        </div>
                        <div class="paddingInner">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2818.7755057933828!2d7.6738996!3d45.0497773!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d48f2272033%3A0xe5a0d880beff326b!2sVia+Nizza%2C+52%2C+10126+Torino!5e0!3m2!1sit!2sit!4v1464684837561"
                                style="border: 0; width: 100%; height: 400px"
                            ></iframe>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div id="after"></div>
            <div id="footer">
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino -
                    ITALY <br />
                    Fax. Tel. Mail
                </p>
                <?php include SITE_PATH . 'includes/HTML5_badge_valid.inc.php';
                ?> <?php include SITE_PATH . 'includes/PageSpeedTest.inc.php';
 ?>
            </div>
            
        </div>
        
        <script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html>
