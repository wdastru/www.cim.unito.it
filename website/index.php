<?php
$localizer = "./";
ob_start('ob_gzhandler');
header('Content-Type: text/html;charset=UTF-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section0'>
            <?php
            require ('includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection0">
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/home-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Molecular Imaging Center <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                            <p>
                                The Molecular Imaging Center was founded by a joined initiative of chemists, biologists and physicians approved by the Italian Ministry of University and Research in 2001
                            </p>
                            <p>
                                The Molecular Imaging Center gathers ca. 30 researchers whit projects supported by National and Regional Agencies, EU and Industries
                            </p>
                            <p>
                                The Molecular Imaging Center hosts many foreign researchers (BE, CZ, SK, F, HUN, GR, UK, Japan and India)
                            </p>
                            <div class='divider'></div>
                            <div id='columnWrapper'>
                                <div id='col1'>
                                    <h2 class='punch purple'><span>COST Action TD1004</span></h2>
                                    <a href="<?php echo $localizer; ?>COST/index.php">&quot;Theragnostics Imaging and Therapy: An Action to Develop Novel Nanosized Systems for Imaging-Guided Drug Delivery&quot; </a>
                                    <div class='divider'></div>
                                    <span class="date">September 10<sup>th</sup>-11<sup>th</sup>, 2015</span>The Annual Workshop of the TD1004 Action will be held in Belgrade, at the <a target="_blank" href="http://www.sanu.ac.rs/English/Index.aspx" ><span class="paperTitle">Serbian Academy of Sciences and Arts (SASA)</span></a> 
                                    <br />The local organizer is <br />Magdalena Stefanovic <a href="mailto:magdalena.stefanovic@itn.sanu.ac.rs">magdalena.stefanovic@itn.sanu.ac.rs</a>.
                                </div>
                                <div id='col2'>
                                    <h2 class='punch orange'><span>LATEST NEWS</span></h2>
                                    The University of Torino has joined the EMIDS programme, an integrated European doctoral programme leading to a double or joint PhD degree in Molecular Imaging.
                                    <a target="_blank" href="http://www.emids.eu/"> <img style="width: 99%" src="images/Emids_Logo.jpg" alt="EMIDS logo" /></a>
                                    <div class='divider'></div>
                                    <span class="date">April 29, 2011</span><a href='eindhoven.php'> Prof. Silvio Aime has been awarded a <i>"Doctor Honoris Causa"</i> by the Eindhoven University of Technology (NL). </a>
                                    <div class='divider'></div>
                                    <span class="date">June 5, 2010</span><a href='debrecen.php'> Prof. Silvio Aime has been awarded a <i>"Doctor Honoris Causa"</i> by the Debrecen University (HU). </a>
                                </div>
                                <div id='col3'>
                                    <h2 class='punch orange'><span>EVENTS</span></h2>
                                    <span class="date">September, 10<sup>th</sup>-12<sup>th</sup> 2014</span>
                                    <a href='<?php echo $localizer; ?>EMIDS/EMIDS_September_2014.php' ><span class="paperTitle">The breakthrough of Molecular Imaging in the field of the future in vivo diagnostic procedures</span></a>
                                    <br />
                                    Torino - Italy
                                    <br />
                                    <a target="_blank" href="http://www.emids.eu/"> <img style="width: 99%" src="images/Emids_Logo.jpg" alt="EMIDS logo" /></a>
                                    <div class='divider'></div>
                                    <span class="date">October, 3<sup>rd</sup>-5<sup>th</sup> 2014</span>
                                    <a href='<?php echo $localizer; ?>COST/meetings/COST_TD1004-Oct2014.php' ><span class="paperTitle">Annual Workshop of the COST Action TD1004 (&quot;Theranostics&quot;)</span></a>
                                    Istanbul - Turkey
                                    <br />
                                    <div class='divider'></div>
                                    <span class="date">May, 8<sup>th</sup>-9<sup>th</sup> 2014</span>
                                    <a href='<?php echo $localizer; ?>CEST2014/index.php' ><span class="paperTitle">CEST 2014 - 4<sup>th</sup> International Workshop on Chemical Exchange Saturation Transfer Imaging</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- subsection closing -->
            </div>
            <!-- subsection closing -->
            <div id='after'></div>
            <div id='footer'>
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            <div id='validators'>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"> <img
                    src="images/valid-xhtml10-blue_opt.png"
                    alt="Valid XHtml 1.0 Transitional" height="31" width="88" /> </a>
                </p>
                <p>
                    <a href="http://jigsaw.w3.org/css-validator/check?uri=referer"> <img
                    style="border: 0; width: 88px; height: 31px"
                    src="images/vcss-blue_opt.gif" alt="CSS Valido!" /> </a>
                </p>
            </div>
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script type="text/javascript">
//<![CDATA[
changeSideNavStyles();
//]]>
        </script>
        <!-- InstanceEnd -->
    </body>
</html>
