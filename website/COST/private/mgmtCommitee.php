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
        <link href="<?php echo $localizer;?>/COST/cost.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="<?php echo $localizer;?>COST/private/cost.js"></script>
    </head>
    <body>
        <div id='confirmDeletionHiddenBox' style="visibility: hidden">
            <h1>WARNING !!!</h1>
            <p style="font-weight: bold;">
                The file will be deleted.
            </p>
            <form method='post' id='confirmDeletion' action=''>
                <input type='button' id='deleteButton' value='Delete' onclick='sendForm();' />
                <input type='button' value='Cancel' onclick="hideBox();" />
                <input type='hidden' name='Id' value='' />
            </form>
        </div>
        <div id='section5'>
            <?php require ($localizer . 'includes/main-nav.php'); ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection4">
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <?php require $localizer . 'COST/include/COST-sidebar.inc.php'; ?>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'>COST Action TD1004</h1>
                        </div>
                        <div class='paddingInner'>
                            <div id='costContainer'></div>
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
            fillCOSTContainer();
            //]]>
        </script>
        <!-- InstanceEnd -->
    </body>
</html>
