<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <meta name="generator"
        content="HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
        <!-- InstanceBeginEditable name="title" -->
        <title>Molecular Imaging Center - University of Torino</title>
        <!-- InstanceEndEditable -->
        <!-- InstanceBeginEditable name="meta description" -->
        <meta name="description"
        content="University of Torino. Website of the Molecular Imaging Center." />
        <!-- InstanceEndEditable -->
        <meta name="google-site-verification"
        content="q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
        <meta http-equiv="Content-Type" content="text/php; charset=us-ascii" />
        <meta name="keywords"
        content="NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia" />
        <link href="<?php echo $localizer;?>stylesheet.css" rel='stylesheet' type='text/css'></link>
        <link href="cost.css" rel='stylesheet' type='text/css'></link>
        <link rel="icon" href="<?php echo $localizer;?>images/favicon.gif" type="image/gif"></link>
        <script type="text/javascript" src="cost.js"></script>
        <script type="text/javascript" src="<?php echo $localizer;?>script.js"></script>

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
            <div id="subsection3">
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <?php
                    require $localizer . 'COST/include/COST-sidebar.inc.php';
                    ?>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <ul>
                                <li>                                	
                                    <h2 style="text-align:left"><a class="link" href="http://www.escdd.eu/">13<sup>th</sup> edition of the European Symposium on Controlled Drug Delivery.</a></h2>
                                    <p>
                                        <span class="underline">Meeting of Working Group 4 (Gerben Konings).</span>
                                        <br />
                                        Location : Hotel Zuiderduin, Egmond aan Zee, The Netherlands.
                                        <br />
                                        Date     : April 16-18, 2014
                                    </p>
                                </li>
                                <li>
                                    <h2 style="text-align:left"><a class='linkExternal' href="http://www.cost.eu/events/pemed/">Personalised Medicine: Better Healthcare for the Future - A Rational Approach Focusing on Bioinformatics, Medicinal Chemistry and Medicine</a></h2>
                                    <p>
                                        Location : Larnaca, Cyprus
                                        <br />
                                        Date     : 17 - 22 June 2012
                                    </p>
                                </li>
                            </ul>
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
