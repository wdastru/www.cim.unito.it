<?php
session_start();

require('addEncryptClasses.php');
require('../777/setupSquadre.inc.php');

$filename = "../777/offerte/" . $_POST['offerFile'];

$str = file_get_contents($filename);
$obj = new cls_encrypt();
$str = $obj->encrypt_value($str, $_POST['PasswordOffer'] . $ADMIN['real']);
//$str = $obj->encrypt_value($str, $_POST['PasswordOffer'] . $_POST['AdminPasswordOffer']);  
$str = $str . "\nFile sbloccato il : " . date("D d M Y - H:i:s",time()) . "\n";

if (strstr($str, "GOODPASSWORD!!!"))
{
	$str = str_replace("GOODPASSWORD!!!", "", $str);
} else {
	header('Location: ../errors/error.php?error=wrongPass');
	exit();	
}

$newFile = str_replace("_locked.", ".", $filename);
$handle = fopen($newFile, 'w');
if($handle)
{	
	if (fwrite($handle, $str))
		unlink($filename);
}
else
{
	echo "Il file " . $newFile . " non &eacute; apribile!";
	exit();		
}
fclose($handle);	
header('Location: offerte.php');
?>