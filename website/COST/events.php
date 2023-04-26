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
                        <div class='band'>
                            <h1 class='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <ul>
                                <li>                                	
                                    <h2 style="text-align:left"><a class='linkExternal' href="http://www.escdd.eu/">13<sup>th</sup> edition of the European Symposium on Controlled Drug Delivery.</a></h2>
                                    <p>
                                        <span style="text-decoration: underline;">Meeting of Working Group 4 (Gerben Konings).</span>
                                        <br>
                                        Location : Hotel Zuiderduin, Egmond aan Zee, The Netherlands.
                                        <br>
                                        Date     : April 16-18, 2014
                                    </p>
                                </li>
                                <li>
                                    <h2 style="text-align:left"><a class='linkExternal' href="http://www.cost.eu/events/pemed/">Personalised Medicine: Better Healthcare for the Future - A Rational Approach Focusing on Bioinformatics, Medicinal Chemistry and Medicine</a></h2>
                                    <p>
                                        Location : Larnaca, Cyprus
                                        <br>
                                        Date     : 17 - 22 June 2012
                                    </p>
                                </li>
                            </ul>
                            <br>
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
                    <br>
                    Fax. Tel. Mail
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
