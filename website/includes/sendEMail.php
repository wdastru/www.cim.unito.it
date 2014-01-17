<?php
function sendEMail(&$vars, &$mailer)
{
	$mailer->CharSet = 'utf-8';

	$mailer->Subject = $vars['subject'];

	$host = $_SERVER['SERVER_NAME'];
	$mailer->From = "nobody@$host";
	$mailer->Body = $vars['body'];

	if(!$mailer->Send())
	{
		return false;
	} else {
		return true;
	}
}
?>