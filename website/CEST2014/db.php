<?php
    session_start();
    
    $localizer = "../";

    require_once ($localizer . 'includes/class.phpmailer.php');
    require $localizer . 'includes/sendEMail.php';
    
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
    } else {
        $mailer = new PHPMailer();
        $mailer -> AddAddress("walter.dastru@gmail.com", "Walter Dastru'");
        //$mailer -> AddAddress("paola.bardini@unito.it", "Paola Bardini");
        
        $body = "Arrivals info:\r\n\r\nSurname: " . $_POST['surname'] . "\r\n" . 
        "\r\nName: " . $_POST['name'] . "\r\n" . 
        "\r\nEmail: " . $_POST['email'] . "\r\n" .
        "\r\nAirport: " . $_POST['airport'] . "\r\n" . 
        "\r\nHour: " . $_POST['hour'] . "\r\n" .
        "\r\nLeave: " . $_POST['leave'] . "\r\n" . 
        "\r\nAccompanying: " . $_POST['accompanying'] . "\r\n\r\nRegards,\r\nWebmaster.\r\n";
        
        $vars = array('subject' => "CEST2014: arrivals info update.", 'body' => $body);
        sendEMail($vars, $mailer);
    }
    
    mysql_close($con);
    
    header("Location: attendance.php?confirm=yes");
    exit();
?>
