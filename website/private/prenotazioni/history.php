<?php
{
	$strumento = $_GET['instrument'];
	include ("variables.php");
	include ("connect.php");
	$_SESSION['DBName'] = $DBName;
	mysql_select_db($_SESSION['DBName'], $con);

	$sql = mysql_query("SELECT `Date`,`User`,`StartHour`,`EndHour`,`Note` FROM `" . $strumento . "` ORDER BY `Date`");
	$count = mysql_num_fields($sql);
	$header = '';
	$data = '';
	
	//print_r($sql);

	for ($i = 0; $i < $count; $i++) {
		$header .= mysql_field_name($sql, $i) . "\t";
	}

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

		//echo $User . "<br>";
		//echo $StartHour . "<br>";
		//echo $EndHour . "<br>";
		//echo $Note . "<br>";
        
		if ($User == $prevUser && $StartHour == $prevStartHour && $EndHour == $prevEndHour && $Note == $prevNote) {
			continue;
		} else {
			$prevUser = $User;
			$prevStartHour = $StartHour;
			$prevEndHour = $EndHour;
        	$prevNote = $Note;
        
        	$data .= $line . "\n";
		}
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