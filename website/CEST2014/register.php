<?php $localizer = "../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html
xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/home.dwt" codeOutsidephpIsLocked="false" -->
    <head>
        <?php require $localizer . 'includes/head_const.inc.php'?>
		<title>Molecular Imaging Center - University of Torino</title>
        <meta name="description" content="University of Torino. Website of the Molecular Imaging Center." />
        <link href="<?php echo $localizer; ?>CEST2014/CEST.css" rel='stylesheet' type='text/css'></link>
	</head>
    <body>
        <?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section0'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id="subsection0">
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/home-side-nav.php');
                ?>
                <div id='content'>
                    <div class='paddingOuter'>
                        <div class='band'>
                            <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Molecular Imaging Center <!-- InstanceEndEditable --></h1>
                        </div>
                        <div id='CEST-section4'>
                            <?php
                                require ('include/CEST-nav.php');
                            ?>
                            <div class='paddingInner'>
                                
                                <h1 style="line-height: 28px; text-align: center;">Registration</h1>
                                <br />
                                <p>
                                    The registation fee (<span class='underline' style="color: #DB6D16">150&euro;</span>) will cover the costs of coffee-breaks, lunches and transport on May 8-9<sup>th</sup>, 2014 and the annual subscription fee to the GIDRM (Italian Magnetic Resonance Discussion Group).
                                    <br/>
                                    After April 11<sup>th</sup> the fee will increase to <span class='underline' style="color: #DB6D16">200&euro;</span>.
                                </p>
                                <p>
                                    GIDRM takes care of the registration/payment procedure.
                                    <br/><br/>
                                    <span>Procedure</span>
                                    <br/>
                                    Please proceed to the registration by doing the following:
                                </p>
                                <ul>
                                    <li><a class='linkExternal' href="http://www.gidrm.org/gidrmvending/index.php?route=account/register">Create a GIDRM account</a></li>
                                    <li><a class='linkExternal' href='http://www.gidrm.org/gidrmvending/index.php?route=product/product&amp;product_id=67'>Buy the CEST 2014 event</a></li>
                                    <li><a class='linkExternal' href="http://www.gidrm.org/index.php/activities/cest2014-the-4th-international-workshop-on-chemical-exchange-saturation-transfer-imaging/cest2014-submission-form">Fill in the Submission form</a></li>
                                </ul>
                            </div>
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
        <!-- InstanceEnd -->
    </body>
</html>
