<?php 
    $localizer = "../";
    require_once ($localizer . 'includes/class.phpmailer.php');
    require $localizer . 'includes/sendEMail.php';
    $mailer = new PHPMailer();
    $mailer -> AddAddress("walter.dastru@gmail.com", "Walter Dastru'");
    $body = '';
    $eol = "\n";
    //$eol = "<br />";
    
    if (isset($_GET['submit'])) {
        if ($_GET['submit'] == 'yes') {
            
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
            // Run the preg_match() function on regex against the email address
            if (preg_match($regex, $_POST['email'])) {
                
                $valid = (
                         isset($_POST['name']) && 
                         isset($_POST['email']) &&
                         isset($_POST['institution']) && 
                         isset($_POST['description']) && 
                         $_POST['name'] != '' &&
                         $_POST['email'] != '' &&
                         $_POST['institution'] != '' &&
                         $_POST['description'] != ''
                     );
                     
                if ($valid) {
                    $body .= "Name        : " . htmlentities($_POST['name']        ) . $eol;
                    $body .= "E-mail      : " . htmlentities($_POST['email']       ) . $eol;
                    $body .= "Institution : " . htmlentities($_POST['institution'] ) . $eol;
                    if (isset($_POST['NMR'])) {
                        if ($_POST['NMR'] == 'yes') {
                            $body .= "NMR         : " . htmlentities($_POST['NMR']         ) . $eol;
                        }
                    }
                    if (isset($_POST['MRI'])) {
                        if ($_POST['MRI'] == 'yes') {
                            $body .= "MRI         : " . htmlentities($_POST['MRI']         ) . $eol;
                        }
                    }
                    if (isset($_POST['OI'])) {
                        if ($_POST['OI'] == 'yes') {
                            $body .= "OI          : " . htmlentities($_POST['OI']          ) . $eol;
                        }
                    }
                    if (isset($_POST['US'])) {
                        if ($_POST['US'] == 'yes') {
                            $body .= "US          : " . htmlentities($_POST['US']          ) . $eol;
                        }
                    }
                    if (isset($_POST['PET_SPECT'])) {
                        if ($_POST['PET_SPECT'] == 'yes') {
                            $body .= "PET_SPECT   : " . htmlentities($_POST['PET_SPECT']   ) . $eol;
                        }
                    }
                    $body .= "Instruments : " . htmlentities($_POST['instruments'] ) . $eol;
                    $body .= "Description : " . htmlentities($_POST['description'] ) . $eol;
                    $body .= "Animal use  : " . htmlentities($_POST['animal']      ) . $eol;
                    $body .= "Consumables : " . htmlentities($_POST['consumables'] ) . $eol;
                    $body .= "Notes       : " . htmlentities($_POST['notes']       ) . $eol;
                    $vars = array('subject' => "Service request.", 'body' => $body);
                    
                    /*** SEND MAIL ***/
                    sendEMail($vars, $mailer);
                    /*** SEND MAIL ***/
                    
                    echo $body;
                    exit();                    
                    
                    header('Location: ' . $localizer . 'facilities/service.php');
                } else {
                    $error_string = "Mandatory fields are missing !!!";
                    header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                    exit();
                }
                
                unset($_POST);
                $body = '';
                
            } else {
                $error_string = "e-mail field is invalid !!!";
                header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                exit();
            }
        }
    }
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/facilities.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta name="generator" content=
        "HTML Tidy for Windows (vers 14 February 2006), see www.w3.org" />
        <!-- InstanceBeginEditable name="title" -->
        <title>Molecular Imaging Center - University of Torino -
            Facilities</title>
        <!-- InstanceEndEditable -->
        <!-- InstanceBeginEditable name="meta description" -->
        <meta name="description" content="" />
        <!-- InstanceEndEditable -->
        <meta name="google-site-verification" content=
        "q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0" />
        <meta http-equiv="Content-Type" content=
        "text/html; charset=us-ascii" />
        <meta name="keywords" content=
        "NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia" />
        <link href="<?php echo $localizer; ?>stylesheet.css" rel='stylesheet' type='text/css' />
        <link href="<?php echo $localizer; ?>facilities/facilities.css" rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="<?php echo $localizer; ?>script.js"></script>
    </head>
    <body>
<?php require_once($localizer . 'includes/analyticstracking.php') ?>
        <div id='section3'>
            <?php
            require ($localizer . 'includes/main-nav.php');
            ?>
            <div id='header'></div>
            <!-- InstanceBeginEditable name="subsection opening" -->
            <div id='subsection6'>
                <!-- InstanceEndEditable -->
                <?php
                require ($localizer . 'includes/facilities-side-nav.php');
                ?>
                <div id='content'>
                <div class='paddingOuter'>
                <div id='band'>
                <h1 id='subsectionTitle'><!-- InstanceBeginEditable name="subsection title" --> Service Request <!-- InstanceEndEditable --></h1>
                </div>
                <div class='paddingInner'>
                <!-- InstanceBeginEditable name="subsection content" -->
                <form method='post' action='<?php echo $localizer; ?>facilities/service.php?submit=yes'>
                <table>
                    <tr>
                        <td class='title'>Name (*) :</td>
                        <td colspan="4"><input type="text" name="name" value=""/></td>
                    </tr>
                    <tr>
                        <td class='title'>Institution (*) :</td>
                        <td colspan="4"><input type="text" name="institution" value=""/></td>
                    </tr>
                    <tr>
                        <td class='title'>Contact email (*) :</td>
                        <td colspan="4"><input type="text" name="email" value=""/></td>
                    </tr>
                    <tr>
                        <td class='col1 title'>Service requested :</td>
                        <td class='col2'>NMR</td>
                        <td class='col3'>&nbsp;</td>
                        <td class='col4'><input type="checkbox" name="NMR" value="yes"></td>
                        <td class='col5'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>Imaging</td>
                        <td>MRI</td>
                        <td><input type="checkbox" name="MRI" value="yes"></td>
                        <td class='col5'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>Optical Imaging</td>
                        <td><input type="checkbox" name="OI" value="yes"></td>
                        <td class='col5'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>Ultrasound</td>
                        <td><input type="checkbox" name="US" value="yes"></td>
                        <td class='col5'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>PET/SPECT</td>
                        <td><input type="checkbox" name="PET_SPECT" value="yes"></td>
                        <td class='col5'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class='title'>Required instruments :</td>
                        <td colspan="4"><input type="text" name="instruments" value=""/></td>
                    </tr>
                    <tr>
                        <td colspan="5" class='title'>Brief description of experiment(s) to be carried out (*) :</td>
                    </tr>
                    <tr>
                        <td colspan="5"><textarea name="description"></textarea></td>
                    </tr>
                    <tr>
                        <td class='title'>Estimated machine time :</td>
                        <td><input type="text" name="duration" value=""/></td>
                    </tr>
                    <tr>
                        <td class='title'>Animal use :</td>
                        <td>
                            <table>
                                <tr>
                                    <td style="text-align: right">Yes</td><td><input type="radio" name="animal" value="yes"/></td>
                                    <td style="text-align: right">No</td><td><input type="radio" name="animal" value="no"/></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" class='title'>Needed consumables (solvents, NMR tubes, ...) :</td>
                    </tr>
                    <tr>
                        <td colspan="5"><textarea name="consumables"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="5" class='title'>Notes :</td>
                    </tr>
                    <tr>
                        <td colspan="5"><textarea name="notes"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Send Request"/></td>
                        <td></td>
                        <td></td>
                    </tr>                    
                </table>
                </form>
                <p>(*) = mandatory field</p>
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
                    "border: 0; width: 88px; height: 31px" src=
                    "images/vcss-blue_opt.gif" alt="CSS Valido!" /></a>
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
