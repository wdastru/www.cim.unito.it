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
        <title>Molecular Imaging Center - University of Torino</title>
    </head>
    <body>
        <?php //require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section0'>
            <?php
            require ('includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection0">
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/niumag-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Carnegie Group delegation visit <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->
						On Sept. 29<sup>th</sup> a Carnegie Group delegation (representatives from
						Japan, Canada, South Africa, etc. were present) visited the Center of Excellence 
						for Preclinical Imaging site at Colleretto Giacosa. 
						At the meeting the <a href="http://www.eurobioimaging.eu/"><span class="paperTitle">EuBI</span></a> and Global Imaging network have been presented.
						The Carnegie group is an international organism that gathers ministries and top level
						ministry personnel of the most advanced countries. 
						The Carnegie meeting was one of the most important events organized around the
						G7 Science in Torino.

						<div class='divider'></div>
							<img width="100%" src="<?php echo $localizer; ?>images/carnegie/CarnegieMeeting ITALY 0103.jpg"></img>
                        	<img width="100%" src="<?php echo $localizer; ?>images/carnegie/CarnegieMeeting ITALY 0108.jpg"></img>
                            <img width="100%" src="<?php echo $localizer; ?>images/carnegie/CarnegieMeeting ITALY 0109.jpg"></img>
                            <img width="100%" src="<?php echo $localizer; ?>images/carnegie/CarnegieMeeting ITALY 0110.jpg"></img>
                            <img width="100%" src="<?php echo $localizer; ?>images/carnegie/CarnegieMeeting ITALY 0111.jpg"></img>
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
