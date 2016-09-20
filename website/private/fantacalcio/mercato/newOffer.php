<?php 
session_start();

$relocate_string = "../";
require($relocate_string . '777/setupSquadre.inc.php');
require('addEncryptClasses.php');
require $relocate_string . 'recursiveChmod.inc.php';


if ( !(md5($_POST['PasswordTeam']) != $ADMIN[$_GET['squadra']] || 
		md5($_POST['PasswordTeam']) != $ADMIN['admin']) ) {
	header('Location: ../errors/error.php?error=wrongPass&returnFromError=' . $_POST['returnFromError']);
	exit(); 
} else if ( $_POST['PasswordOffer'] != $_POST['RepeatPasswordOffer'] ) {
	header('Location: ../errors/error.php?error=passDoNotMatch&returnFromError=' . $_POST['returnFromError']);
	exit();
}


if(!file_exists("..//777//offerte//")) 
{ 
	@mkdir("..//777//offerte//");
} 

$file2save = '../777/offerte/offerta_' . $_GET['squadra'] . "_" . date("Ymd-His",time()) . "_locked.txt";
$handle = fopen($file2save, 'w');
if($handle)
{
	/* uso della classe cls_encrypt */
	$obj = new cls_encrypt();
	$str = strtoupper("GoodPassword!!!" . $_GET['squadra']) . ' - ' . date("D d M Y - H:i:s",time()) . "\n\n" . $_POST['Offerta_quo_in'] . ' fantamiliardi per : ' . stripcslashes($_POST['Offerta_gio_in']) . ' (' . $_POST['Offerta_squ_in'] . ', ' . $_POST['Offerta_ruo_in'] . ")\n" . 'al posto di : ' . stripcslashes(strtoupper($_POST['Offerta_gio_out'])) . ' (' . strtoupper($_POST['Offerta_squ_out']) . ', ' . strtoupper($_POST['Offerta_ruo_out']) . ")\n";
	$pass = $_POST['PasswordOffer'];
	$str = $obj->encrypt_value($str, $pass . $ADMIN['real']);
	/* uso della classe cls_encrypt */
	
	/* uso della funzione encrypt_decrypt
	$str = encrypt_decrypt(strtoupper($_GET['squadra']) . ' - ' . date("D d M Y - H:i:s",time()) . "\n\n" . $_POST['Offerta_quo_in'] . ' fantamiliardi per : ' . $_POST['Offerta_gio_in'] . ' (' . $_POST['Offerta_squ_in'] . ', ' . $_POST['Offerta_ruo_in'] . ")\n" . 'al posto di : ' . strtoupper($_POST['Offerta_gio_out']) . ' (' . strtoupper($_POST['Offerta_squ_out']) . ', ' . strtoupper($_POST['Offerta_ruo_out']) . ")\n");
	/* uso della funzione encrypt_decrypt */
	
	fwrite($handle, $str);
	
	@recursiveChmod($relocate_string . '777/offerte/');
}
else
{
	echo "Il file " . $file2save . " non &eacute; apribile!";
	exit();		
}
fclose($handle);

$href='offerte.php';
echo "<script type='text/javascript'>window.location.href='" . $href . "';</script>";
?>