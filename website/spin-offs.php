<?php
    require_once __DIR__ . '/config.inc.php';
    $activeSection = 'partners';
    $activeSubsection = 'spin-offs';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>
            Molecular Imaging Center - University of Torino - Spin-offs
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
                                Spin-offs
                            </h1>
                        </div>
                        <div class="paddingInner">
                        </div>
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
        
        <script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html>
