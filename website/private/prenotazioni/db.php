<?php
session_start();

$localizer = "../../../";
include ("variables.php");
include ("connect.php");
include ("functions.php");
include ("instruments.php");

$strumento = $_SESSION['strumento'];
$DBName = $_SESSION['DBName'];

$data = $_POST['data'];
$day = substr($data, 6, 2);
$month = substr($data, 4, 2);
$year = substr($data, 0, 4);

$oraStart = $_POST['oraStart'];
$oraEnd = $_POST['oraEnd'];
if ($oraStart == 2000)
	$oraEnd = 2100;
$ora = $oraStart;

$oraIdxStart = 0;
$oraIdxEnd = 0;
if ($_SESSION['strumento'] == "600MHz") {
	$ore = array(900, 915, 930, 945, 1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000, 2100);
} else if ($_SESSION['strumento'] == "Scanlaf" || $_SESSION['strumento'] == "Telstar") {
    $ore = array(800, 830, 900, 930, 1000, 1030, 1100, 1130, 1200, 1230, 1300, 1330, 1400, 1430, 1500, 1530, 1600, 1630, 1700, 1730, 1800, 1830, 1900, 1930, 2000, 2100);
} else {
	$ore = array(800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000, 2100);
}

$i=0;
foreach ($ore as $now) {
	if ($now == $oraStart) {
		$oraIdxStart = $i;
	} else if ($now == $oraEnd) {
		$oraIdxEnd = $i;
	}
	++$i;
}

$tipo = $_POST['tipo'];
$utente = $_POST['utente'];
$utente = str_replace("#", "", $utente);
$utente = str_replace("\$", "", $utente);
$utente = str_replace("%", "", $utente);
$utente = str_replace("^", "", $utente);
$utente = str_replace("&", "e", $utente);
$utente = str_replace("*", "", $utente);
$utente = str_replace("?", "", $utente);
$utente = str_replace("'", "", $utente);
$utente = str_replace("\"", "", $utente);
$utente = str_replace("\\", "", $utente);
$utente = str_replace("/", "", $utente);

(isset($_POST['note'])) ? $note = $_POST['note'] : $note = "";
(isset($_POST['color'])) ? $color = $color = $_POST['color'] : $Color[rand(0, count($Color) + 1)];

mysql_select_db($DBName, $con);

/* DATABASE OPTIMIZATION */
$sql = "OPTIMIZE TABLE ";
for ($i = 0; $i < count($instrument); $i++) {
	if ($i != count($instrument) - 1)
		$sql = $sql . "`" . $instrument[$i] . "`, ";
	else
		$sql = $sql . "`" . $instrument[$i] . "`";
}
mysql_query($sql, $con);
/* */

$thisday = date("d");
$thismonth = date("m");
$thisyear = date("Y");

//if ($strumento == $instrument[4] || $strumento == $instrument[5] || $strumento == $instrument[6])// PharmaScan, Biospec e PET
//{
	// delete old bookings (more than one year old)
	$month2delete = $thismonth - 1;
	$year2delete = $thisyear - 1;
	$sql = "DELETE FROM `" . $DBName . "`.`" . $strumento . "` WHERE `" . $strumento . "`.`Date` < " . date("Ymd", get_sunday_before($year2delete, $month2delete, $thisday));
	mysql_query($sql, $con);
//} else {
//	// delete old bookings (more than one month old)
//	$month2delete = $thismonth - 1;
//	$sql = "DELETE FROM `" . $DBName . "`.`" . $strumento . "` WHERE `" . $strumento . "`.`Date` < " . date("Ymd", get_sunday_before($thisyear, $month2delete, $thisday));
//	mysql_query($sql, $con);
//}

if ($tipo == "preno") {
	$sql = "SELECT * FROM `" . $strumento . "` WHERE `Date` = " . $data . " AND `Hour` >= " . $oraStart . " AND `Hour` < " . $oraEnd;
	$result = mysql_query($sql, $con);

	while ($temp = mysql_fetch_array($result)) {
		if (count($temp) == 0) {
			continue;
		} else {
			$_SESSION['conflict'] = 1;
			
			if ($_SESSION['strumento'] == "Auto") {
			    header("Location: " . $localizer . "private/autodip/index.php");
			} else {
			    header("Location: " . $localizer . "private/prenotazioni/index.php");
			}
			exit();
		}
	}

	for ($j = $oraIdxStart; $j < $oraIdxEnd; $j++) {
		if ($utente != NULL) {
			$result = '';
			$sql = "SELECT * FROM `" . $DBName . "`.`" . $strumento . "` WHERE ( `Date` = '" . $data . "' AND `Hour` = '" . $ore[$j] . "')";
			$result = mysql_query($sql, $con);
			$temp = mysql_fetch_array($result);

			if ($temp[0] == NULL)// non c'è una prenotazione allo stesso posto: inserisce la nuova
			{
				$sql = "INSERT INTO `" . $DBName . "`.`" . $strumento . "` ( `Date` , `User` , `Hour` , `StartHour` , `EndHour`, `Note`, `Color` ) VALUES ( '" . $data . " ', '" . $utente . "', '" . $ore[$j] . "', '" . $oraStart . "', '" . $oraEnd . "', '" . $note . "', '" . $color . "')";
				mysql_query($sql, $con);

				//$handle = fopen('db.log', 'a');
				//fwrite($handle, "\n" . date("d-m-Y H:i:s") . " (+) " . $sql);
				//fclose($handle);
			} else// c'e' gia' una prenotazione: si ferma e aggiorna la EndHour
			{
				//prima legge le informazioni presenti
				$sql = "SELECT * FROM `" . $DBName . "`.`" . $strumento . "` WHERE `" . $strumento . "`.`Date` = '" . $data . "' AND `" . $strumento . "`.`User` = '" . $utente . "' AND `" . $strumento . "`.`Hour` = '" . $ore[$j] . "' AND `" . $strumento . "`.`StartHour` = '" . $oraStart . "' AND `" . $strumento . "`.`EndHour` = '" . $oraEnd . "'";

				$result = mysql_query($sql, $con);
				$temp = mysql_fetch_row($result);

				// poi aggiorna la prima ora delle prenotazioni
				$sql = "UPDATE `" . $DBName . "`.`" . $strumento . "` SET `" . $strumento . "`.`EndHour` = '" . $ore[$j] . "' WHERE `" . $strumento . "`.`Date` = '" . $data . "' AND `" . $strumento . "`.`User` = '" . $utente . "' AND `" . $strumento . "`.`Hour` = '" . $oraStart . "' AND `" . $strumento . "`.`StartHour` = '" . $oraStart . "' AND `" . $strumento . "`.`EndHour` = '" . $oraEnd . "'";
				//				echo $sql;
				$result = mysql_query($sql, $con);

				//$handle = fopen('db.log', 'a');
				//fwrite($handle, "\n" . date("d-m-Y H:i:s") . " (+) " . $sql);
				//fclose($handle);

				break;
			}
		} else {
		    if ($_SESSION['strumento'] == "Auto") {
		        header("Location: " . $localizer . "private/autodip/index.php?date=" . get_sunday_before($year, $month, $day));
		    } else {
		        header("Location: " . $localizer . "private/prenotazioni/index.php?date=" . get_sunday_before($year, $month, $day));
		    }
		    //header("Location: index.php?date=" . get_sunday_before($year, $month, $day));
			exit();
		}
	}

	/* READ FROM XML
	 $doc = new DOMDocument();
	 $doc->load( 'prova.xml' );

	 $employees = $doc->getElementsByTagName( "employee" );
	 foreach( $employees as $employee )
	 {
	 $names = $employee->getElementsByTagName( "name" );
	 $name = $names->item(0)->nodeValue;

	 $ages= $employee->getElementsByTagName( "age" );
	 $age= $ages->item(0)->nodeValue;

	 $salaries = $employee->getElementsByTagName( "salary" );
	 $salary = $salaries->item(0)->nodeValue;

	 echo "<b>$name - $age - $salary\n</b><br>";
	 }
	 /*   */

	/* WRITE TO XML
	$doc = new DOMDocument();
	$doc -> formatOutput = true;

	$queries = $doc -> createElement("queries");
	$doc -> appendChild($queries);
	$query = $doc -> createElement("query");
	$queries -> appendChild($query);

	$user = $doc -> createElement("user");
	$user -> appendChild($doc -> createTextNode($utente));
	$date = $doc -> createElement("data");
	$date -> appendChild($doc -> createTextNode($data));
	$start = $doc -> createElement("start");
	$start -> appendChild($doc -> createTextNode($oraStart));
	$end = $doc -> createElement("end");
	$end -> appendChild($doc -> createTextNode($oraEnd));
	$inst = $doc -> createElement("instrument");
	$inst -> appendChild($doc -> createTextNode($strumento));

	$query -> appendChild($user);
	$query -> appendChild($date);
	$query -> appendChild($inst);
	$query -> appendChild($start);
	$query -> appendChild($end);

	$doc -> save("db.xml");
	/* */
} else if ($tipo == "canc") {
	
	for ($i=$oraIdxStart; $i<$oraIdxEnd; ++$i) {
		$sql = "DELETE FROM `" . $DBName . "`.`" . $strumento . "` WHERE `" . $strumento . "`.`Date` = " . $data . " AND `" . $strumento . "`.`User` = '" . $_POST['utente'] . "' AND `" . $strumento . "`.`Hour` = " . $ore[$i];
		$result = mysql_query($sql, $con);

		//$handle = fopen('db.log', 'a');
		//fwrite($handle, "\n" . date("d-m-Y H:i:s") . " (-) " . $sql);
		//fclose($handle);
	}
} else if ($tipo == "skip") {;
}

mysql_close($con);

if ($_SESSION['strumento'] == "Auto") {
    header("Location: " . $localizer . "private/autodip/index.php?date=" . get_sunday_before($year, $month, $day));
} else {
    header("Location: " . $localizer . "private/prenotazioni/index.php?date=" . get_sunday_before($year, $month, $day));
}

exit();
?>
