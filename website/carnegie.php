<?php require_once (__DIR__ . '/config.inc.php');
ob_start('ob_gzhandler');
header('Content-Type: text/html;charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <?php include SITE_PATH . 'includes/head_const.inc.php'; ?>
        <title>Molecular Imaging Center - University of Torino</title>
    </head>
    <body>

        <div id='section0'>
            <?php include SITE_PATH . 'includes/main-nav.php'; ?>
            <div id='header'></div>
            
            <div id="subsection0">
                
                <?php include SITE_PATH . 'includes/niumag-side-nav.php'; ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 class='subsectionTitle'> Carnegie Group delegation visit </h1>
                        </div>
                        <div class='paddingInner'>
						
						On Sept. 29<sup>th</sup> a Carnegie Group delegation (representatives from
						Japan, Canada, South Africa, etc. were present) visited the Center of Excellence 
						for Preclinical Imaging site at Colleretto Giacosa. 
						At the meeting the <a href="http://www.eurobioimaging.eu/"><span class="paperTitle">EuBI</span></a> and Global Imaging network have been presented.
						The Carnegie group is an international organism that gathers ministries and top level
						ministry personnel of the most advanced countries. 
						The Carnegie meeting was one of the most important events organized around the
						G7 Science in Torino.

						<div class='divider'></div>
							<img width="100%" src="<?php echo SITE_ROOT; ?>images/carnegie/CarnegieMeeting ITALY 0103.jpg"></img>
                        	<img width="100%" src="<?php echo SITE_ROOT; ?>images/carnegie/CarnegieMeeting ITALY 0108.jpg"></img>
                            <img width="100%" src="<?php echo SITE_ROOT; ?>images/carnegie/CarnegieMeeting ITALY 0109.jpg"></img>
                            <img width="100%" src="<?php echo SITE_ROOT; ?>images/carnegie/CarnegieMeeting ITALY 0110.jpg"></img>
                            <img width="100%" src="<?php echo SITE_ROOT; ?>images/carnegie/CarnegieMeeting ITALY 0111.jpg"></img>
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
        
    </body>
</html>
