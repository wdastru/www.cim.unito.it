<?php $localizer = "../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>
            Molecular Imaging Center - University of Torino - NMR facilities
        </title>
        <meta name="description" content="" />
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id="section3">
            <?php require ($localizer . 'includes/main-nav.php'); ?>
            <div id="header"></div>

            <div id="subsection4">
                <?php require ($localizer . 'includes/facilities-side-nav.php');
                ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div id="band">
                            <h1 id="subsectionTitle">NMR Instruments</h1>
                        </div>
                        <div class="paddingInner">
                            <ul>
                                <li>Bruker Avance 600MHz</li>
                                <li>JEOL EX-400</li>
                            </ul>
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
