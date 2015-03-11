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
                                    <!--<h2 class='punch orange'><span>RECENT PUBS</span></h2><span class="paperTitle">Gadolinium-doped LipoCEST agents: Apotential novel class of dual 1H-MRI probes</span><br />Terreno E., Boffa C., Menchise V., Fedeli F., Carrera C.,Castelli D.D., Digilio G., Aime S.<br /><span class="paperJnl">ChemicalCommunications</span><br />4667-4669, <span class="paperVol">47</span><span class="paperVol">(16)</span> , <span>2011</span><div class='divider'></div>-->
                                    <h2 class='punch purple'><span>COST Action TD1004</span></h2>
                                    <a href="<?php echo $localizer; ?>COST/index.php">&quot;Theragnostics Imaging and Therapy: An Action to Develop Novel Nanosized Systems for Imaging-Guided Drug Delivery&quot; </a>
                                    <div class='divider'></div>
                                    <a class="link" href="http://www.escdd.eu/">13<sup>th</sup> edition of the European Symposium on Controlled Drug Delivery, April 16-18, 2014 - Hotel Zuiderduin, Egmond aan Zee, The Netherlands.</a>
                                    <div class='divider'></div>
                                    2<sup>nd</sup> NanoFar Autumn School, October 21-25, 2013
                                    <br/>
                                    University of Santiago de Compostela, Spain
                                    <br />
                                    <a href="documenti/Nanofar_Flyer_USC_2013.pdf"> <span class='paperTitle'>Flyer</span> </a>
                                    <br />
                                </div>
                                <div id='col2'>
                                    <h2 class='punch orange'><span>LATEST NEWS</span></h2>
                                    The University of Torino has joined the EMIDS programme, an integrated European doctoral programme leading to a double or joint PhD degree in Molecular Imaging.
                                    <a href="http://www.emids.eu/"> <img style="width: 99%" src="images/Emids_Logo.jpg" alt="EMIDS logo" /></a>
                                    <div class='divider'></div>
                                    <span class="date">Apr 29, 2011</span><a href='eindhoven.php'> Prof. Silvio Aime has been awarded a <i>"Doctor Honoris Causa"</i> by the Eindhoven University of Technology (NL). </a>
                                    <div class='divider'></div>
                                    <span class="date">Jun 5, 2010</span><a href='debrecen.php'> Prof. Silvio Aime has been awarded a <i>"Doctor Honoris Causa"</i> by the Debrecen University (HU). </a>
                                </div>
                                <div id='col3'>
                                    <h2 class='punch orange'><span>EVENTS</span></h2>
                                    <span class="date">September, 10<sup>th</sup>-12<sup>th</sup> 2014</span>
                                    <a href='<?php echo $localizer; ?>EMIDS/EMIDS_September_2014.php' ><span class="paperTitle">The breakthrough of Molecular Imaging in the field of the future in vivo diagnostic procedures</span></a>
                                    <br />
                                    Torino - Italy
                                    <br />
                                    <a href="http://www.emids.eu/"> <img style="width: 99%" src="images/Emids_Logo.jpg" alt="EMIDS logo" /></a>
                                    <div class='divider'></div>
                                    <span class="date">October, 3<sup>rd</sup>-5<sup>th</sup> 2014</span>
                                    <a href='<?php echo $localizer; ?>COST/meetings/COST_TD1004-Oct2014.php' ><span class="paperTitle">Annual Workshop of the COST Action TD1004 (&quot;Theranostics&quot;)</span></a>
                                    Istanbul - Turkey
                                    <br />
                                    <div class='divider'></div>
                                    <span class="date">May, 8<sup>th</sup>-9<sup>th</sup> 2014</span>
                                    <a href='<?php echo $localizer; ?>CEST2014/index.php' ><span class="paperTitle">CEST 2014 - 4<sup>th</sup> International Workshop on Chemical Exchange Saturation Transfer Imaging</span></a>
                                    <div class='divider'></div>
                                    <span class="date">Feb, 2013</span>
                                    Marie Curie Action
                                    <br />
                                    From february 2013 dr., He HU from Shangai University<sup>*</sup> has joined the Center of Molecular Imaging
                                    for carrying out a research project on &quot;Design and Testing of Gd<sup>3+</sup>-Loaded Ultrasmall Mesoporous Silica Nanosphere
                                    Platform as High Sensitivity Probes for Targeted Magnetic Resonance Imaging of Tumor In Vivo&quot;.
                                    <br />
                                    <span style='font-size: 10px; font-style: italic;'>* Dept. of Chemistry - Shangai Normal University - China</span>
                                    <!--<div class='divider'></div><span class="date">26 to 28 May, 2013</span><img style="width: 99%" src="images/ESMI_logo_imaging_life.jpg" alt="ESMI logo" /><div class='divider'></div><span class="date">6 March, 2013</span>EMIDS Kick-off Meeting<a class="linkExternal" href="http://www.emids.eu/"><img style="width: 99%" src="images/Emids_Logo.jpg" alt="EMIDS logo"/></a>--><!-- <div class='divider'></div> -->
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
