<?php require_once (__DIR__ . '/config.inc.php');
ob_start('ob_gzhandler');
header('Content-Type: text/html;charset=UTF-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino</title>
    </head>
    <body>
        <?php include SITE_PATH . 'includes/analyticstracking.php' ?>
        <div id="section0">
            <?php include SITE_PATH . 'includes/menu.php'; ?>
                <?php include SITE_PATH . 'includes/header.php'; ?>

            <div id="subsection0">
                <?php include SITE_PATH . 'includes/niumag-side-nav.php'; ?>
                <div id="content">
                    <div class="paddingOuter">
                        <div id="band">
                            <h1 id="subsectionTitle">NIUMAG</h1>
                        </div>
                        <div class="paddingInner">
                            <div class="divider"></div>
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
                    <a href="http://validator.w3.org/check?uri=referer">
                        <img
                            src="<?php echo SITE_ROOT; ?>images/valid-xhtml10-blue_opt.png"
                            alt="Valid XHtml 1.0 Transitional"
                            height="31"
                            width="88"
                        />
                    </a>
                </p>
                <p>
                    <a
                        href="http://jigsaw.w3.org/css-validator/check?uri=referer"
                    >
                        <img
                            style="border: 0; width: 88px; height: 31px"
                            src="<?php echo SITE_ROOT; ?>images/vcss-blue_opt.gif"
                            alt="CSS Valido!"
                        />
                    </a>
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
