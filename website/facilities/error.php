<?php require_once (__DIR__ . '/../config.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>
            Molecular Imaging Center - University of Torino - Facilities
        </title>
        <meta name="description" content="" />
    </head>
    <body>
        <div id="section3">
            <div id="subsection0">
                <?php include SITE_PATH . 'includes/main-nav.php'; ?>
                <div id="header"></div>

                <?php require ($localizer . 'includes/facilities-side-nav.php');
                ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div class="band">
                            <h1 class="subsectionTitle">Facilities</h1>
                        </div>
                        <div class="paddingInner">
                            <p>ERROR !!! <?php echo $_GET['error_string']?></p>
                            <input
                                class="button"
                                type="button"
                                value="Back"
                                onclick="history.back()"
                            />
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
                    <?php include $localizer .
                    'includes/HTML5_badge_valid.inc.php';?> <?php include
                    $localizer . 'includes/PageSpeedTest.inc.php';?>
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
