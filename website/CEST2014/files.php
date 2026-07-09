<?php require_once __DIR__ . '/../config.inc.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino</title>
        <meta
            name="description"
            content="University of Torino. Website of the Molecular Imaging Center."
        />
        <link
            href="<?php echo SITE_ROOT; ?>CEST2014/CEST.css"
            rel="stylesheet"
            type="text/css"
        />
    </head>

    <body>
        <div id="section0">
            <?php include SITE_PATH . 'includes/menu.php'; ?>
                <?php include SITE_PATH . 'includes/header.php'; ?>

            <div id="subsection0">
                <?php include SITE_PATH . 'includes/home-side-nav.php'; ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div class="band">
                            <h1 class="subsectionTitle">CEST 2014</h1>
                        </div>
                        <div id="CEST-section3">
                            <?php require 'include/CEST-nav.php'; ?>
                            <div class="paddingInner">
                                <?php // --> elenco formazioni squadra
                                    $dir   = ".//uploads//*.*";
                                    $files = glob($dir); // <-- elenco formazioni squadra
                                    echo " <ol>
                                    ";for ($i = 0; $i < count($files); $i++) {
                                        strtok($files[$i], "//");
                                        $out =
                                            strtok("//");
                                        $out = strtok("//");
                                        echo "
                                    <li>$out</li>
                                    ";
                                    }
                                echo "
                                </ol>
                                "; ?>
                            </div>
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
        </div>

        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html>
