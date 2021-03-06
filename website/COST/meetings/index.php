<?php
$localizer = "../../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino</title>
        <meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
        <link href="<?php echo $localizer;?>/COST/cost.css" rel='stylesheet' type='text/css'></link>
    </head>
    <body>
<?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section5'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection2">
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <?php
                    require $localizer . 'COST/include/COST-sidebar.inc.php';
                    ?>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <ul>
                                <li>
                                    <a href="<?php echo $localizer;?>COST/meetings/COST_TD1004-Sep2013.php">COST TD1004 Annual Meeting - Instanbul, 3-5 October 2014</a>
                                </li>
                                <li>
                                    <a href="<?php echo $localizer;?>COST/meetings/COST_TD1004-Sep2013.php">COST TD1004 Annual Meeting - Athens, 1-3 September 2013</a>
                                </li>
                                <li>
                                    <a href="<?php echo $localizer;?>COST/meetings/COST_TD1004-May2013.php">Inter WG COST Action TD1004 EMIM2013 - Torino, 26-28 May 2013</a>
                                </li>
                                <li>
                                    <a href="<?php echo $localizer;?>COST/meetings/COST_TD1004-Oct2012.php">COST TD1004 Meeting - London, 28-30 October 2012</a>
                                </li>
                                <li>
                                    <a href="<?php echo $localizer;?>COST/meetings/COST_TD1004-Feb2012.php">COST TD1004 Meeting - Torino, 17-18 February 2012</a>
                                </li>
                                
                            </ul>
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
        <script type="text/javascript">
            //<![CDATA[
            //fillMinutesContainer();
            //]]>
        </script>
        <!-- InstanceEnd -->
    </body>
</html>
