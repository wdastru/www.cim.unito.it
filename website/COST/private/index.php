<?php
$localizer = "../../";
?>
<!DOCTYPE PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
		<?php require $localizer . 'includes/head_const.inc.php'?>
		<title>Molecular Imaging Center - University of Torino</title>
        <meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
        <link href="<?php echo $localizer;?>COST/cost.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="<?php echo $localizer;?>COST/private/cost.js"></script>
    </head>
    <body>
        <div id='section5'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection4">
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <?php
                    require $localizer . 'COST/include/COST-sidebar.php';
                    ?>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <h2 id="mgmtTitle">Private area</h2>
                            <br>
                            <ul>
                                <li>
                                    <a class='link' href="<?php echo $localizer;?>COST/private/mgmtCommitee.php">Management Commitee</a>
                                </li>
                                <li>
                                    <a class='link' href="<?php echo $localizer;?>COST/private/minutes.php">Minutes of the Management Commitee meetings</a>
                                </li>
                                <li>
                                    Working groups
                                    <ul>
                                        <li><a href="<?php echo $localizer;?>COST/private/WGs/WG.php?WG=1">WG1 - &quot;Imaging reporters for theranostic agents&quot;</a></li>
                                        <li><a href="<?php echo $localizer;?>COST/private/WGs/WG.php?WG=2">WG2 - &quot;Nanocarrires for theranostic agents&quot;</a></li>
                                        <li><a href="<?php echo $localizer;?>COST/private/WGs/WG.php?WG=3">WG3 - &quot;Preparation and selection of targeting vectors&quot;</a></li>
                                        <li><a href="<?php echo $localizer;?>COST/private/WGs/WG.php?WG=4">WG4 - &quot;Theranostic agents responsive to endogenous and external stimuli&quot;</a></li>
                                        <li><a href="<?php echo $localizer;?>COST/private/WGs/WG.php?WG=5">WG5 - &quot;Set-up of preclinical theranostic protocols&quot;</a></li>
                                    </ul>
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
