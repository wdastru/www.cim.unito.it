<?php

$localizer = "../../../";

session_start();

$DBName = "cimdb";

$con = mysql_connect("localhost", "cim_adm", "vpsyyAR4jp");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}

if (!isset($WG)) {
    $WG = $_POST['WG'];
}
if (!isset($desc)) {
    $desc = $_POST['desc'];
}
if (!isset($addFilename)) {
    if (isset($_FILES['filename']['name'])) {
        $addFilename = $_FILES['filename']['name'];
    } else {; // TODO error !!!
    }
}
if (!isset($delFilename)) {
    if (isset($_POST['filename'])) {
        $delFilename = $_POST['filename'];
    } else {; // TODO error !!!
    }
}
if (!isset($date)) {
    $date = $_POST['date'];
}
if (!isset($path)) {
    $path = $_POST['path'];
}
if (!isset($type)) {
    $type = $_POST['type'];
}
if (!isset($table)) {
    $table = $_POST['table'];
}

mysql_select_db($DBName, $con);

/* DATABASE OPTIMIZATION */
$sql = "OPTIMIZE TABLE `" . $DBName . "`.`" . $table . "`";
mysql_query($sql, $con);
/* */

if ($type == "add") {

    if (!file_exists($path . $addFilename)) {

        if (move_uploaded_file($_FILES['filename']['tmp_name'], $path . $addFilename)) {

            $sql = "INSERT INTO `" . $DBName . "`.`" . $table . "` ( `WG`, `desc`, `filename`, `date`, `path` ) VALUES ( '" . $WG . "', '" . $desc . "', '" . $addFilename . "', '" . $date . "', '" . $path . "')";
            $result = mysql_query($sql, $con);

        } else {; // TODO file upload error !!!
        }
    } else {;// TODO file exists !!!

        header("Location: " . $localizer . "COST/private/error.php?error=file_exists");
        exit();

    }

} else if ($type == "del") {

    if (unlink($path . $delFilename)) {

        $sql = "DELETE FROM `" . $DBName . "`.`" . $table . "` WHERE `date` = '" . $date . "' AND `filename` = '" . $delFilename . "' AND `WG` = '" . $WG . "' AND `path` = '" . $path . "' AND `desc` = '" . $desc . "'";
        $result = mysql_query($sql, $con);

    } else {;// TODO error !!!
    }

} else {
    // TODO error !!!
}

mysql_close($con);

header("Location: " . $localizer . "COST/private/WGs/WG.php?WG=" . $WG);
?>
