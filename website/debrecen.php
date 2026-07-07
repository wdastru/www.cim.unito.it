<?php require_once (__DIR__ . '/config.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>
            Molecular Imaging Center - University of Torino - Prof. Silvio Aime
            Debrecen Doctor Honoris Causa
        </title>
        <meta
            name="description"
            content="University of Torino. Website of the Molecular Imaging Center."
        />
        <!--include flowplayer JavaScript file that does
		Flash embedding and provides the Flowplayer API. -->
        <script type="text/javascript" src="flowplayer-3.2.6.min.js"></script>
    </head>
    <body>
        <div id="section0">
            <?php include SITE_PATH . 'includes/main-nav.php'; ?>
            <div id="header"></div>

            <div id="subsection0">
                <div id="sidebar">
                    <div class="padding">
                        <dl id="list">
                            <dt
                                class="subsection_link"
                                id="section0-subsection1"
                            >
                                <a href="<?php echo SITE_ROOT; ?>staff.php"
                                    >Staff</a
                                >
                            </dt>
                            <dt
                                class="subsection_link"
                                id="section0-subsection2"
                            >
                                <a href="<?php echo SITE_ROOT; ?>where.php"
                                    >Where</a
                                >
                            </dt>
                            <dt
                                class="subsection_link"
                                id="section0-subsection3"
                            >
                                <a href="<?php echo SITE_ROOT; ?>contacts.php"
                                    >Contacts</a
                                >
                            </dt>
                        </dl>
                    </div>
                </div>
                <div id="content">
                    <div class="paddingOuter">
                        <div class="band">
                            <h1 class="subsectionTitle">
                                Molecular Imaging Center
                            </h1>
                        </div>
                        <div class="paddingInner">
                            <h2>
                                DEBRECEN - June 5, 2010 -
                                <i>Doctor Honoris Causa</i> to Prof. Silvio Aime
                            </h2>
                            <p>
                                <a
                                    href="flowplayer/AimeDebrecen.flv"
                                    style="
                                        display: block;
                                        width: 520px;
                                        height: 390px;
                                    "
                                    id="player"
                                ></a>

                                <script type="text/javascript">
                                    flowplayer(
                                        "player",
                                        "<?php echo SITE_ROOT; ?>flowplayer/flowplayer-3.2.7.swf",
                                    );
                                </script>
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
        </div>

        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
    </body>
</html>
