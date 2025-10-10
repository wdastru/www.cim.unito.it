<?php
{
	$strumento = $_GET['instrument'];
	include ("variables.php");
	include ("connect.php");
	$_SESSION['DBName'] = $DBName;
	mysql_select_db($_SESSION['DBName'], $con);

	$sql = mysql_query("SELECT `Date`,`User`,`StartHour`,`EndHour`,`Note` FROM `" . $strumento . "` ORDER BY `Date`,`StartHour`");
	$count = mysql_num_fields($sql);
	$header = '';
	$data = '';
	
	for ($i = 0; $i < $count; $i++) {
		$header .= mysql_field_name($sql, $i) . "\t";
        
	}
	
	$header .= "Total\t";
    $header .= "Night\t";

	$prevDate = "";
    $prevUser = "";
    $prevStartHour = "";
	$prevEndHour = "";
	$prevNote = "";
		
	while ($row = mysql_fetch_assoc($sql)) {

		$line = '';
		foreach ($row as $key => $value) {
		    
            if ($key == "User") {
				$User = $value;
			} else if ($key == "StartHour") {
				$StartHour = $value;
			} else if ($key == "EndHour") {
				$EndHour = $value;
			} else if ($key == "Note") {
				$Note = $value;
			} else if ($key == "Date") {
                $Date = $value;
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

		if ($Date == $prevDate && $User == $prevUser && $StartHour == $prevStartHour && $EndHour == $prevEndHour && $Note == $prevNote) {
			continue;
		} else {
			$prevDate = $Date;
            $prevUser = $User;
            $prevStartHour = $StartHour;
			$prevEndHour = $EndHour;
        	$prevNote = $Note;
            
            $StartHour = preg_replace("/^([0-9]{1,2})[1][5]$/", "$1 25", $StartHour);
            $StartHour = preg_replace("/^([0-9]{1,2})[3][0]$/", "$1 50", $StartHour);
            $StartHour = preg_replace("/^([0-9]{1,2})[4][5]$/", "$1 75", $StartHour);
            $StartHour = preg_replace("/\s/", "", $StartHour);
            
            $EndHour = preg_replace("/^([0-9]{1,2})[1][5]$/", "$1 25", $EndHour);
            $EndHour = preg_replace("/^([0-9]{1,2})[3][0]$/", "$1 50", $EndHour);
            $EndHour = preg_replace("/^([0-9]{1,2})[4][5]$/", "$1 75", $EndHour);
            $EndHour = preg_replace("/\s/", "", $EndHour);
                
            if ($EndHour == 2100) {
                $Total = (($EndHour - $StartHour)/100 - 1);
                $line .= "\t" . preg_replace("/\./", ",", $Total);
                $line .= "\tnotte";
            } else {
                $Total = (($EndHour - $StartHour)/100);
                preg_replace("/\./", ",", $Total);
                $line .= "\t" . preg_replace("/\./", ",", $Total);    
            }
		}
        
        $data .= $line . "\n";
	}

	if ($data == "") {
		$data = "There is no record inside the table.";
	}

	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=$strumento.xls");
	header("Pragma: no-cache");
	header("Expires: 0");

	echo $header . "\n" . $data;
}
?>