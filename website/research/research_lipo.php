<?php
$localizer = "./";
?>
<!DOCTYPE html>
<html lang="en">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'
        ?>
        <title>Molecular Imaging Center - University of Torino - Liposomes</title>
    </head>
    <body>

        ?>
        <div id='section1'>
            <?php
            require ('includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection3">
                <!-- InstanceEndEditable -->
                <?php
                    require ('includes/research-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->Liposomes <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                            <!-- InstanceEndEditable -->
                        </div>
                    </div>
                </div>
                <!-- subsection closing -->
            </div>
            <!-- subsection closing -->
            <div id='after'></div>
            <div id='footer'>
                <p>
                    Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino -
                    ITALY
                    <br>
                    Fax. Tel. Mail
                </p>
<?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
            </div>
            
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script><!-- InstanceEnd -->
    </body>
</html>
