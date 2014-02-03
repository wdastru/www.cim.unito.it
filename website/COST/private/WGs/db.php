<?php
session_start();

print_r($_POST);
echo "<br />";
print_r($_FILES);

/* script variables */
$localizer = "../../../";
$DBName = "cimdb";
$desc = "";
$addFilename = "";
$delFilename = "";
$type = "";
$table = "";
 /* script variables */

require $localizer . 'recursiveChmod.inc.php';
@recursiveChmod($localizer . 'WG*_docs/');

$con = mysql_connect("localhost", "cim_adm", "vpsyyAR4jp");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
if (isset($_POST['WG'])) {
	if (preg_match('/^[1-5]$/', $_POST['WG'])) {
		$WG = $_POST['WG'];
	} else {
		header("Location: " . $localizer . "COST/private/error.php?error=not_valid_WG");
		exit();
	}
}

echo "<br>WG : " . $WG;

if (isset($_POST['desc'])) {
	$desc = htmlentities($_POST['desc']);
}

echo "<br>desc : " . $desc;

if (isset($_FILES['filename']['name'])) {
    $addFilename = $_FILES['filename']['name'];
} 
else 
{
	header("Location: " . $localizer . "COST/private/error.php?error=missing_upload_file");
	exit();
}

echo "<br>addFilename : " . $addFilename;

if (isset($_POST['date'])) {
    $date = htmlentities($_POST['date']);
}

echo "<br>date : " . $date;

if (isset($_POST['path'])) {
    $path = htmlentities($_POST['path']);
}

echo "<br>path : " . $path;

if (isset($_POST['type'])) {
	if (preg_match('/^(add|del)$/', $_POST['type']))
	{
    	$type = $_POST['type'];
	}
}

echo "<br>type : " . $type;

//if ($type == 'del') {
//    if (isset($_POST['filename'])) {
//        $delFilename = $_POST['filename'];
//    } else { 
//        header("Location: " . $localizer . "COST/private/error.php?error=missing_filename");
//        exit();
//    }
//}
//
//echo "<br>delFilename : " . $delFilename;

if (isset($_POST['$table'])) {
    $table = $_POST['table'];
}
else
{
	header("Location: " . $localizer . "COST/private/error.php?error=missing_db_table_name");
	exit();
}

echo "<br>table : " . $table;

mysql_select_db($DBName, $con);

/* DATABASE OPTIMIZATION */
$sql = "OPTIMIZE TABLE `" . $DBName . "`.`" . $table . "`";
mysql_query($sql, $con);
/* */

if ($type == "add") 
{
	
    if (!file_exists($path . $addFilename)) {

        if (move_uploaded_file($_FILES['filename']['tmp_name'], $path . $addFilename)) {

            $sql = "INSERT INTO `" . $DBName . "`.`" . $table . "` ( `WG`, `desc`, `filename`, `date`, `path` ) VALUES ( '" . $WG . "', '" . $desc . "', '" . $addFilename . "', '" . $date . "', '" . $path . "')";
            $result = mysql_query($sql, $con);

		} 
        else 
        {
			header("Location: " . $localizer . "COST/private/error.php?error=upload");
			exit();
        }
    } 
    else 
    {
        header("Location: " . $localizer . "COST/private/error.php?error=file_exists");
        exit();
    }

} 
else if ($type == "del") 
{
	$sql = "DELETE FROM `" . $DBName . "`.`" . $table . "` WHERE `date` = '" . $date . "' AND `filename` = '" . $delFilename . "' AND `WG` = '" . $WG . "' AND `path` = '" . $path . "' AND `desc` = '" . $desc . "'";
	$result = mysql_query($sql, $con);
	
	if (file_exists($path . $delFilename)) {
		if (!unlink($path . $delFilename)) {
			header("Location: " . $localizer . "COST/private/error.php?error=could_not_delete_file");
			exit();
	    }
	} else {
		header("Location: " . $localizer . "COST/private/error.php?error=file_not_exists");
		exit();
	}

} else {
	header("Location: " . $localizer . "COST/private/error.php?error=invalid_type");
	exit();
}

mysql_close($con);

header("Location: " . $localizer . "COST/private/WGs/WG.php?WG=" . $WG);
?>
