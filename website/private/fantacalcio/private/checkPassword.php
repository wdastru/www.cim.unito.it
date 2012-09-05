<?php 
if (md5($_POST['oldPassword']) != $ADMIN[$_POST['Squadra']] ) 
{
	header('Location: ../errors/error.php?error=wrongPass');
}
else if ($_POST['newPassword'] != $_POST['ripetiPassword']) 
{
	header('Location: ../errors/error.php?error=passDoNotMatch');
}
else
{
	$filename="..//777//setupSquadre.inc.php";
	$tmpFile="tmp"; 
	if(file_exists($filename))
	{
		$handle=fopen($filename, 'r');
		$handle2=fopen($tmpFile, 'w');
		fwrite($handle2,"<?php\n");
		$i=0;
		while(!feof($handle))
		{
			$line=fgets($handle);
			strtok($line,"[']");
			$tmp=strtok("[']");
			if($tmp=="")
			{
				continue;	
			}
			
			if($tmp==$_POST['Squadra'])
			{
				fwrite($handle2, "\$ADMIN['" . $_POST['Squadra'] . "'] = \"" . md5($_POST['newPassword']) . "\";\n");
			}
			else
			{
				fwrite($handle2, $line);
			}
			$i++;
		}		
		fwrite($handle2,"?>\n");			
		fclose($handle);
		fclose($handle2);
		
		copy($tmpFile,"..//private//setupSquadre.inc.php");
		unlink($tmpFile);
	}
	else
		exit ("<p>" . $filename . " non esiste!</p><p>Dillo al tuo amministratore del sito!!</p>");
}
?>