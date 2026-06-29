<?php
	$localizer = "./";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
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
            <?php require ('includes/main-nav.php'); ?>
            <div id="header"></div>

            <div id="subsection0">
                <div id="sidebar">
                    <div class="padding">
                        <dl id="list">
                            <dt
                                class="subsection_link"
                                id="section0-subsection1"
                            >
                                <a href="staff.php">Staff</a>
                            </dt>
                            <dt
                                class="subsection_link"
                                id="section0-subsection2"
                            >
                                <a href="where.php">Where</a>
                            </dt>
                            <dt
                                class="subsection_link"
                                id="section0-subsection3"
                            >
                                <a href="contacts.php">Contacts</a>
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
                                        "flowplayer/flowplayer-3.2.7.swf",
                                    );
                                </script>
                            </p>
                            <!--
							<h2>UPCOMING EVENTS</h2>
							<ul>
							<li>
							<p><a target="_new" href="http://www.cost.esf.org/domains_actions/cmst/Actions/Metal-Based_Systems_for_Molecular">COST D38 Action "Metal-Based Systems for Molecular Imaging Applications"</a><br>
							<a href="meetings.php">JOINT WORKING GROUPS 2 AND 6 MEETING - 24<sup>th</sup>-26<sup>th</sup> March 2011</a></p>
							</li></ul>
							-->
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
