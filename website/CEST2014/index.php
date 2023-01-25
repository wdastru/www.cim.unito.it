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
        <!-- InstanceBeginEditable name="jQuery" -->
        <?php
            require($localizer . 'includes/jQuery.php');
        ?>
        <!-- InstanceEndEditable -->
                
    </head>
    <body>

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
                            <h1 class='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> CEST 2014 <!-- InstanceEndEditable --></h1>
                        </div>
                        <div id='CEST-section0'>
                            <?php
                                require ('include/CEST-nav.php');
                            ?>
                            <div class='paddingInner'>
                                
                                <img src="images/bioparco_long.jpg" style="width:100%;" alt="BioIndustry Park logo"/>
    
                                <h1 style="line-height: 28px; text-align: center;">CEST 2014
                                    <br/>
                                    4<sup>th</sup> International Workshop on Chemical Exchange Saturation Transfer Imaging</h1>
    
                                <br>
                                <p>
                                    After Turin (2010), Dallas (2011) and Annapolis (2012) the next CEST Workshop will be held again in Italy at the Bioindustry Park in Colleretto Giacosa 
                                    (55 km from Turin, Italy) on May 8-9<sup>th</sup>, 2014.
                                </p>
                                <p>
                                    <b style="color: #db6d16">CEST 2014 is jointly organized by the University of Turin, the Bioindustry Park and the GIDRM (Italian Magnetic Resonance Discussion Group).</b>
                                </p>
                                <p>
                                    It will be a satellite-event of the <a class='linkExternal' href="http://www.ismrm.org/14/"><span class='underline'>ISMRM Conference</span></a> that will take place in Milan (May 10-16<sup>th</sup>, 2014).
                                </p>
    
                                <p>
                                    The workshop is intended to bring together research groups worldwide involved in the improvement of CEST imaging and spectroscopy and highlight 
                                    new pulse sequences/imaging schemes, contrast agents and applications of this emerging new technology.
                                    <br/>
                                    This workshop will welcome both established and new investigators, and aims to provide a broad overview of the field, with two days of sessions 
                                    which include both oral and posters presentations.
                                </p>
                                
                                <ul>
                                    <li>
                                        <a href="<?php echo $localizer; ?>CEST2014/about.php"><b>About the meeting</b></a>
                                    </li>
                                    <li>
                                       <a href="<?php echo $localizer; ?>CEST2014/attendance.php"><b>Attending the meeting</b></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $localizer; ?>CEST2014/submission.php"><b>Abstract submission</b></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $localizer; ?>CEST2014/register.php"><b>Online Registration</b></a>
                                    </li>
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
                    <br>
                    Fax. Tel. Mail
                </p>
            </div>
            
            <!-- section closing -->
        </div>
        <!-- section closing -->
        <!-- InstanceEnd -->
    </body>
</html>
