<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
		<title>Molecular Imaging Center - University of Torino</title>
		<meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
        <link href="cost.css" rel='stylesheet' type='text/css'></link>
        <script type="text/javascript" src="cost.js"></script>
        
        <!-- InstanceBeginEditable name="jQuery" -->
        <?php
            require($localizer . 'includes/jQuery.php');
        ?>
        <!-- InstanceEndEditable -->
        
    </head>
    <body>
<?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section5'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection1">
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <?php
                    require $localizer . 'COST/include/COST-sidebar.inc.php';
                    ?>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 id='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <div style="padding: 0 27%">
                                <a class='linkExternal' href="http://www.cost.eu/domains_actions/cmst/Actions/TD1004"> <img src="<?php echo $localizer ?>images/logo-COST.bmp" alt='COST logo' /></a>
                            </div>
                            <br />
                            <br />
                            <h2> COST Action TD1004
                            <br />
                            THERANOSTICS IMAGING AND THERAPY: AN
                            ACTION TO DEVELOP NOVEL NANOSIZED SYSTEMS FOR IMAGING-GUIDED DRUG
                            DELIVERY </h2>
                            <br />
                            <p>
                                The proposed Action brings together the major European research
                                groups working on the development of novel combined
                                diagnostic/therapeutic agents (theranostic agents). Properly
                                designed agents will allow the in vivo quantitative assessment of
                                the amount of drug reaching a pathological region and the
                                visualisation of molecular changes due to the therapeutic effects
                                of the delivered drug.The main objective of the Action is to
                                demonstrate the potential of image-guided therapies in the
                                treatment of diseases with high social impact.Researchers will
                                join efforts to develop novel therapeutic treatments based on the
                                visualisation of drug delivery/release processes and the
                                monitoring of associated therapeutic effects.The Action goals
                                will be reached thanks to a strong interdisciplinary coordination
                                work mostly focused to get a better understanding of crucial
                                aspects of the whole drug delivery process in vivo, in particular
                                regarding the efficiency of drug targeting and release and the
                                relationship with the therapeutic effect.The implementation of
                                therapies and surgical interventions with imaging technologies
                                will provide physicians with an extraordinary tool for
                                accelerating the desirable translation towards molecular and
                                personalized medicine, thus considerably extending the armoury of
                                solutions for successfully combating the diseases.
                            </p>
                            <br />
                            <a href="<?php echo $localizer . 'COST/MoU.pdf'?>"><strong>Memorandum of Understanding</strong></a>
                            <br />
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
