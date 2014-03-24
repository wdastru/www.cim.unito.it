<?php
    session_start();
    
    //print_r($_POST);
    
    
    if ($_POST['email']=='')
    {
        header("Location: attendance.php?confirm=no");
        exit();
    }
    
    $con = mysql_connect("localhost", "cim_adm","vpsyyAR4jp");
    if (!$con)
    {
        die('Could not connect: ' . mysql_error());
        exit();
    }
    
    $DBName = "cimdb";
    $table = "arrivals";
    
    mysql_select_db($DBName, $con);
    
    $sql = "REPLACE INTO `" . $DBName . "`.`" . $table . "` ( `surname` , `name` , `email` , `airport` , `hour` , `leave` , `accompanying` ) VALUES ( '" . $_POST['surname'] . " ', '" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['airport'] . "', '" . $_POST['hour'] . "', '" . $_POST['leave'] . "', '" . $_POST['accompanying'] . "')";
    
    //echo "<br/>$sql";
    
    $query = mysql_query($sql, $con);
    
    if (!$query)
    {
        die('<br/>Query failed: ' . mysql_error());
        exit();
    }
    
    mysql_close($con);
    
    header("Location: attendance.php?confirm=yes");
    exit();
?>
