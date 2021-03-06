<?php
$localizer = "./";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/events.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>        
		<title>Molecular Imaging Center - University of Torino - Meetings</title>
        <meta name="description" content="" />
	</head>
    <body>
<?php //require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section2'>
            <?php
            require ('includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id='subsection2'>
                <!-- InstanceEndEditable -->
                <div id='sidebar'>
                    <div class='padding'>
                        <dl id='list'>
                            <dt id='section2-subsection1' class='subsection_link'>
                                <a href=
                                '<?php echo $localizer ?>educational.php'>Educational</a>
                            </dt>
                            <dt id='section2-subsection2' class='subsection_link'>
                                <a href=
                                '<?php echo $localizer ?>meetings.php'>Meetings</a>
                            </dt>
                            <dt id='section2-subsection3' class='subsection_link'>
							<a href='news.php'>News</a>
						    </dt>
                        </dl>
                    </div>
                </div>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->Meetings<!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                            <ul>
                                <li>
                                    <a href="COST/meetings/COST_TD1004-Feb2012.php">COST TD1004 Meeting - Torino, 17-18 February 2012</a>
                                </li>
                                <li>
                                    <a href="COST/meetings/COST_D38-Mar2011.php">COST Action D38 "Metal-Based Systems for Molecular
                                Imaging Applications" - Working Groups 2 and 6 Joint Meeting - March 24-26, 2011</a>
                                </li>
                                
                            </ul>
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
                    <br />
                    Fax. Tel. Mail
                </p>
            </div>
            <div id='validators'>
                <p>
                    <a href="http://validator.w3.org/check?uri=referer"><img src=
                    "images/valid-xhtml10-blue_opt.png" alt=
                    "Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
                </p>
                <p>
                    <a href=
                    "http://jigsaw.w3.org/css-validator/check?uri=referer"><img style=
                    "border:0;width:88px;height:31px" src="images/vcss-blue_opt.gif"
                    alt="CSS Valido!" /></a>
                </p>
            </div>
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <script type="text/javascript">
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script><!-- InstanceEnd -->
    </body>
</html>
