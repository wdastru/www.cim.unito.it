<?php
$localizer = "../";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/research.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
        <title>Molecular Imaging Center - University of Torino - MRI sequences </title>
        <meta name="description" content="" />
    </head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section1'>
            <?php
            require ('../includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection23">
                <!-- InstanceEndEditable -->
                <?php
                    require ('../includes/research-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div id='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" -->MRI sequences 
                             <!-- InstanceEndEditable --></h1>
                        </div>
                        <div class='paddingInner'>
                            <!-- InstanceBeginEditable name="subsection content" -->
                                            
							<p>The sequence is provided for free but to download our software please fill out this form.</p><br>
							<p>All information collected will be stored securely and will never be used for commercial purposes.</p><br><br> 

						<form method="post" action="<?php echo $localizer . 'includes/sequence_request_validator.php' ?>">
							<label for="nname">Your Name:</label><br/> 
							<input type="text" id="name" name="name"><br/> 
							<label for="organization">Your Organization:</label><br/>
							<input type="text" id="organization" name="organization"><br/> 
							<label for="country">Your Country:</label><br/>
							<input type="text" id="country" name="country"><br/> 
							<label for="area_res">Your primary area of research:</label><br/>
							<input type="text" id="area_res" name="area_res"><br/> 
							<label for="email">Your email address:</label><br>
							<input type="email" id="email" name="email"><br><br>
							<input type="submit" value="Submit">
						</form>					                                            
                                                              
                            <hr></hr>
                            
							<h2 style="text-align:left;"> Group Leaders: </h2>					
																					
							<a href="../PI/Longo/home.php" target="_blankk" title="Dario Longo">
							<img src="../images/staff/Dario_Longo.jpg" height="100px;" width="100px;" style="border-radius:50%"></a>
													
							
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
