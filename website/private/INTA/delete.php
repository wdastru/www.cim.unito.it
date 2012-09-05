<?php
$relocate_string = '../../';

require_once ($relocate_string . 'includes/class.phpmailer.php');
require $relocate_string . 'includes/sendEMail.php';

$mailer = new PHPMailer();
$mailer -> AddAddress("walter.dastru@unito.it", "Walter Dastru'");

if (isset($_POST['delete'])) {
	if ($_POST['delete'] == 1) {
		if (isset($_POST['file'])) {
			if (unlink($_POST['file'])) {

				$body = $_POST['file'] . " has been deleted.\r\n";
				$vars = array('subject' => "INTA project private area: file delete notification.", 'body' => $body);

				$mailer -> AddAddress("enzo.terreno@unito.it", "Enzo Terreno");

				sendEMail($vars, $mailer);
				header('Location: index.php');
			} else {

				$body = $_POST['file'] . " has not been deleted.\r\n";
				$vars = array('subject' => "INTA project private area: file delete notification.", 'body' => $body);

				sendEMail($vars, $mailer);
				header('Location: error.php?error=fileNotDeleted');
			}
		}
	}
}

?>