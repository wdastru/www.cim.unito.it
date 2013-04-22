<?php
function sendEMail(&$vars, &$mailer)
{
	$mailer->CharSet = 'utf-8';

	$mailer->Subject = $vars['subject'];

	$host = $_SERVER['SERVER_NAME'];
	$mailer->From = "nobody@$host";
	$mailer->Body = $vars['body'];

	/*
	 to the  ".$vars['name']."\r\n\r\n".
	"Thanks for your registration with ".$this->sitename."\r\n".
	"Please click the link below to confirm your registration.\r\n".
	"$confirm_url\r\n".
	"\r\n".
	"Regards,\r\n".
	"Webmaster\r\n".
	$this->sitename;
	*/

	if(!$mailer->Send())
	{
		return false;
	} else {
		return true;
	}
}
?>