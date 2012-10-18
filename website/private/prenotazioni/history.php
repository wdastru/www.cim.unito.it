<?php
{
    include ("variables.php");
    include ("connect.php");
    $_SESSION['DBName'] = $DBName;
    mysql_select_db($_SESSION['DBName'], $con);
    
    $sql = mysql_query("SELECT * FROM `300MHz` ORDER BY `Date`");
    $count = mysql_num_fields($sql);
    $header = '';
    $data = '';

    for ($i = 0; $i < $count; $i++) {
        $header .= mysql_field_name($sql, $i) . "\t";
    }

    while ($row = mysql_fetch_assoc($sql)) {
        $line = '';
        foreach ($row as $key => $value) {
            
            //print_r($row);
            //echo "<br>";
            
            if ($key == 'StartHour') {
                continue;
            } else if ($key == 'EndHour') {
                continue;
            } else if ($key == 'Color') {
                continue;
            }
            
            if ($key === 'date_of_reg') {
                $value = '"' . date('d/m/Y', $value) . '"';
            } else {
                $value = '"' . $value . '"';
            }

            if ($line === '') {
                $line = $value;
            } else {
                $line .= "\t" . $value;
            }
        }

        $data .= $line . "\n";
    }

    if ($data == "") {
        $data = "There is no record inside the table.";
    }

    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=student_excel.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    echo $header . "\n" . $data;

}
?>