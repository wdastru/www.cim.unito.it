<?php
$localizer = "../../";
include ("connect.php");
include ("variables.php");
include ("instruments.php");
$_SESSION['DBName'] = $DBName;
mysql_select_db($_SESSION['DBName'], $con);

// --> MODIFY TYPES IN DATABASE
/*
for ($j = 0; $j < count($instrument); $j++) {
    $sql = "ALTER TABLE `" . $_SESSION['DBName'] . "`.`" . $instrument[$j] . "` MODIFY `Hour` int(4);";
    echo $sql."<br>";
    if (!mysql_query($sql, $con)) {
        echo "Error in database column modification : " . mysql_error() . "<br>";
        exit();
    }
    $sql = "ALTER TABLE `" . $_SESSION['DBName'] . "`.`" . $instrument[$j] . "` MODIFY `StartHour` int(4);";
    echo $sql."<br>";
    if (!mysql_query($sql, $con)) {
        echo "Error in database column modification : " . mysql_error() . "<br>";
        exit();
    }
    $sql = "ALTER TABLE `" . $_SESSION['DBName'] . "`.`" . $insAutoument[$j] . "` MODIFY `EndHour` int(4);";
    echo $sql."<br>";
    if (!mysql_query($sql, $con)) {
        echo "Error in database column modification : " . mysql_error() . "<br>";
        exit();
    }
}
*/
// <-- MODIFY TYPES IN DATABASE

//  --> MODIFY DATA IN DATABASE
/* 
for ($j = 0; $j < count($instrument); $j++) {
    $sql = "SELECT `Hour`, `StartHour`, `EndHour`, `User`, `Date`, `Color`, `Note` FROM `" . $instrument[$j] . "` WHERE `User`!=\"\"";
    echo $sql . "<br>";
    $result = mysql_query($sql, $con);

    $hour = 0;
    $startHour = 0;
    $endHour = 0;

    while ($row = mysql_fetch_row($result)) {
        if ($row[0] < 25) {
            $hour = $row[0] * 100;
        }
        if ($row[1] < 25) {
            $startHour = $row[1] * 100;
        }
        if ($row[2] < 25) {
            $endHour = $row[2] * 100;
        }

        $sql2 = "UPDATE `cimdb`.`" . $instrument[$j] . "` SET `" . $instrument[$j] . "`.`Hour`='" . $hour . "', `" . $instrument[$j] . "`.`StartHour`='" . $startHour . "', `" . $instrument[$j] . "`.`EndHour`='" . $endHour . "', `" . $instrument[$j] . "`.`User`='" . $row[3] . "', `" . $instrument[$j] . "`.`Date`='" . $row[4] . "', `" . $instrument[$j] . "`.`Color`='" . $row[5] . "', `" . $instrument[$j] . "`.`Note`='" . $row[6] . "' WHERE `" . $instrument[$j] . "`.`Hour`='" . $row[0] . "' AND `" . $instrument[$j] . "`.`StartHour`='" . $row[1] . "' AND `" . $instrument[$j] . "`.`EndHour`='" . $row[2] . "' AND `" . $instrument[$j] . "`.`User`='" . $row[3] . "' AND `" . $instrument[$j] . "`.`Date`='" . $row[4] . "' AND `" . $instrument[$j] . "`.`Color`='" . $row[5] . "' AND `" . $instrument[$j] . "`.`Note`='" . $row[6] . "'";
        //echo $sql2 . "<br>";
        $result2 = mysql_query($sql2, $con);
        if (!$result2) {
            $message = '<br>Invalid query: ' . mysql_error() . "\n";
            $message .= '<br>Whole query: ' . $sql2;
            die($message);
        }
    }
}
/* */
//  <-- MODIFY DATA IN DATABASE
?>
