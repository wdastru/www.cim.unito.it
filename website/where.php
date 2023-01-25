<?php $localizer = "./"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
		<title>Molecular Imaging Center - University of Torino - Where we are</title>
        </head>
    <body>

        <div id='section0'>
            <?php
            require ('includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id='subsection3'>
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/home-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->How to reach
                            the CIM <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2818.7755057933828!2d7.6738996!3d45.0497773!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886d48f2272033%3A0xe5a0d880beff326b!2sVia+Nizza%2C+52%2C+10126+Torino!5e0!3m2!1sit!2sit!4v1464684837561" width="600" height="450" style="border:0" allowfullscreen></iframe>
                            <!-- <form action="http://maps.google.it/" target="_blank" method="get">
                            <p>
                            <label for="saddr">Where we are and how to reach us (Google Maps) </label>
                            <input type="submit" value="Go" class='button' />
                            <input type="hidden" name="daddr" value="Torino via Nizza, 52" />
                            <input type="hidden" name="hl" value="en" />
                            </p>
                            </form> -->
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
