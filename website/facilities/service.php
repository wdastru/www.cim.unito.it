
<?php
$localizer = "../";
require_once ($localizer . 'includes/class.phpmailer.php');
require $localizer . 'includes/sendEMail.php';
$mailer = new PHPMailer();
$mailer->AddAddress("walter.dastru@gmail.com", "Walter Dastru'");
$body = '';
$eol = "\n";
// $eol = "<br>";
if (isset($_GET['submit'])) {
    if ($_GET['submit'] == 'yes') {
        $regex_valid_mail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        if (preg_match($regex_valid_mail, $_POST['email'])) {
            $valid = (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['institution']) && isset($_POST['description']) && $_POST['name'] != '' && $_POST['email'] != '' && $_POST['institution'] != '' && $_POST['description'] != '');
            $regex_allowed_chars = '/^[a-zA-Z\.,;:-\?\(\)\"\'\s]*$/';
            if ($valid) {
                if (preg_match($regex_allowed_chars, $_POST['name'])) {
                    $body .= "Name        : " . $_POST['name'] . $eol;
                } else {
                    $error_string = "The name contains invalid characters !!!";
                    header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                    exit();
                }
                $body .= "E-mail      : " . $_POST['email'] . $eol;
                if (preg_match($regex_allowed_chars, $_POST['institution'])) {
                    $body .= "Institution : " . $_POST['institution'] . $eol;
                } else {
                    $error_string = "The institution contains invalid characters !!!";
                    header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                    exit();
                }
                if (isset($_POST['NMR'])) {
                    if ($_POST['NMR'] == 'yes') {
                        $body .= "NMR         : yes" . $eol;
                    }
                }
                if (isset($_POST['MRI'])) {
                    if ($_POST['MRI'] == 'yes') {
                        $body .= "MRI         : yes" . $eol;
                    }
                }
                if (isset($_POST['OI'])) {
                    if ($_POST['OI'] == 'yes') {
                        $body .= "OI          : yes" . $eol;
                    }
                }
                if (isset($_POST['US'])) {
                    if ($_POST['US'] == 'yes') {
                        $body .= "US          : yes" . $eol;
                    }
                }
                if (isset($_POST['PET_SPECT'])) {
                    if ($_POST['PET_SPECT'] == 'yes') {
                        $body .= "PET_SPECT   : yes" . $eol;
                    }
                }
                if (preg_match($regex_allowed_chars, $_POST['instruments'])) {
                    $body .= "Instruments : " . $_POST['instruments'] . $eol;
                } else {
                    $error_string = "The required instruments contains invalid characters !!!";
                    header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                    exit();
                }
                if (preg_match($regex_allowed_chars, $_POST['description'])) {
                    $body .= "Description : " . $_POST['description'] . $eol;
                } else {
                    $error_string = "The description contains invalid characters !!!";
                    header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                    exit();
                }
                if (isset($_POST['animal'])) {
                    if ($_POST['animal'] == 'yes') {
                        $body .= "Animal use  : " . $_POST['animal'] . $eol;
                    }
                }
                if (preg_match($regex_allowed_chars, $_POST['consumables'])) {
                    $body .= "Consumables : " . $_POST['consumables'] . $eol;
                } else {
                    $error_string = "The needed consumables contains invalid characters !!!";
                    header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                    exit();
                }
                if (preg_match($regex_allowed_chars, $_POST['notes'])) {
                    $body .= "Notes       : " . $_POST['notes'] . $eol;
                } else {
                    $error_string = "The notes contains invalid characters !!!";
                    header('Location: ' . $localizer . 'facilities/error.php?error_string=' . $error_string);
                    exit();
                }
                $vars = array(
                    'subject' => "Service request.",
                    'body' => $body
                );
                /**
                 * * SEND MAIL **
                 */
                sendEMail($vars, $mailer);
                /**
                 * * SEND MAIL **
                 */
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
<!DOCTYPE html>
<html lang="en">
<!-- InstanceBegin template="/Templates/facilities.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
        <?php require $localizer . 'includes/head_const_new.inc.php'?>
		<title>Molecular Imaging Center - University of Torino - Facilities</title>
<meta name="description" content="">
<link href="<?php echo $localizer; ?>facilities/facilities.css"
	rel='stylesheet' type='text/css'>
</head>
<body>
	<div id='section3'>
		<div id='subsection7'>
			<!-- InstanceBeginEditable name="subsection opening" -->
            <?php require ($localizer . 'includes/main-nav.php'); ?>
            <?php require ($localizer . 'includes/main-nav-mobile.php'); ?>
            <div id='header'></div>
			<!-- InstanceEndEditable -->
			<?php require ($localizer . 'includes/facilities-side-nav.php'); ?>
            <?php require ($localizer . 'includes/facilities-side-nav-mobile.php'); ?>
         	<div id='content'>
				<div class='paddingOuter'>
					<div class='band'>
						<h1 class='subsectionTitle'>
							<!-- InstanceBeginEditable name="subsection title" -->
							Service Request
							<!-- InstanceEndEditable -->
						</h1>
					</div>
					<div class='paddingInner'>
						<!-- InstanceBeginEditable name="subsection content" -->
						<form method='post'
							action='<?php echo $localizer; ?>facilities/service.php?submit=yes'>
							<table>
								<tr>
									<td class='title'>Name (*) :</td>
									<td colspan="4"><input type="text" name="name" value=""></td>
								</tr>
								<tr>
									<td class='title'>Institution (*) :</td>
									<td colspan="4"><input type="text" name="institution" value=""></td>
								</tr>
								<tr>
									<td class='title'>Contact email (*) :</td>
									<td colspan="4"><input type="text" name="email" value=""></td>
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
									<td colspan="4"><input type="text" name="instruments" value=""></td>
								</tr>
								<tr>
									<td colspan="5" class='title'>Brief description of
										experiment(s) to be carried out (*) :</td>
								</tr>
								<tr>
									<td colspan="5"><textarea name="description" rows="4" cols="80"></textarea></td>
								</tr>
								<tr>
									<td class='title'>Estimated machine time :</td>
									<td><input type="text" name="duration" value=""></td>
									<td colspan="3"></td>
								</tr>
								<tr>
									<td class='title'>Animal use :</td>
									<td>
										<table>
											<tr>
												<td style="text-align: right">Yes</td>
												<td><input type="radio" name="animal" value="yes"></td>
												<td style="text-align: right">No</td>
												<td><input type="radio" name="animal" value="no"></td>
											</tr>
										</table>
									</td>
									<td colspan="3"></td>
								</tr>
								<tr>
									<td colspan="5" class='title'>Needed consumables (solvents, NMR
										tubes, ...) :</td>
								</tr>
								<tr>
									<td colspan="5"><textarea name="consumables" rows="4" cols="80"></textarea></td>
								</tr>
								<tr>
									<td colspan="5" class='title'>Notes :</td>
								</tr>
								<tr>
									<td colspan="5"><textarea name="notes" rows="4" cols="80"></textarea></td>
								</tr>
								<tr>
									<td><input type="submit" name="submit" value="Send Request"></td>
									<td colspan="4"></td>
								</tr>
							</table>
						</form>
						<p>(*) = mandatory field</p>
						<!-- InstanceEndEditable -->
					</div>
				</div>
			</div>
			<!-- subsection closing -->
			<div id='after'></div>
			<div id='footer'>
				<p>
					Molecular Imaging Center - Via Nizza, 52 - I-10125 Torino - ITALY <br>
					Fax. Tel. Mail
				</p>
                <?php include $localizer . 'includes/HTML5_badge_valid.inc.php';?>
                <?php include $localizer . 'includes/PageSpeedTest.inc.php';?>
            </div>
			<!-- subsection closing -->
		</div>
		<!-- section closing -->
	</div>
	<!-- section closing -->
	<script>
            //<![CDATA[
            changeSideNavStyles();
            //]]>
        </script>
	<!-- InstanceEnd -->
</body>
</html>
