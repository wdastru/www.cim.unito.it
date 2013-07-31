<?php
session_start();

require ("connect.php");
require ("variables.php");
mysql_select_db($DBName, $con) or die('Not connected : ' . mysql_error());
                        
$sql = "CREATE TABLE IF NOT EXISTS `catalogo_new` (
  `name_UK` varchar(50) NOT NULL,
  `name_IT` varchar(50) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `quantity` varchar(2) DEFAULT NULL,
  `lab` varchar(10) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `CAS` varchar(100) NOT NULL,
  `phrase_R` varchar(100) NOT NULL,
  `phrase_H` varchar(100) NOT NULL,
  `scheda` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8";
$data = mysql_query($sql);

$relocate_string = "../../";
// Test CVS

require_once ($relocate_string . '/private/fantacalcio/excel/Excel/reader.php');

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
$data->setOutputEncoding('CP1251');

/***
* if you want you can change 'iconv' to mb_convert_encoding:
* $data->setUTFEncoder('mb');
*
*

/***
* By default rows & cols indeces start with 1
* For change initial index use:
* $data->setRowColOffset(0);
*
*

/***
*  Some function for formatting output.
* $data->setDefaultFormat('%.2f');
* setDefaultFormat - set format for columns with unknown formatting
*
* $data->setColumnFormat(4, '%.3f');
* setColumnFormat - set format for column (apply only to number fields)
*
**/

/**/
$dir = $relocate_string . 'private/cataloghi/safety_info/';
$filter = "*.xls";
$result = glob($dir . $filter);

//echo count($result) . '<br />';
//print_r($result) . '<br />';

if (count($result) != 1)
{
	//echo 'in if <br />';
	//unlink($dir . $_SESSION['uploaded_file']);
	//unset($_SESSION['uploaded_file']);
	//header('Location: ../errors/error.php?error=excelErrorNoFilesFound');
	exit();
}
else
{
    //echo 'in else <br />';
	//$parts = pathinfo($result[0]);
    //echo $parts . '<br />';
	//$filename = strtok($parts['basename'], '.'); // sul server la versione di php e' probabilmente vecchia e non esiste filename
	//echo $filename . '<br />'; 
	//$nameTxt = strtok($filename, '-');
    //echo $nameTxt . '<br />';

	//if( !preg_match('/MCCMicro[P|p]agamenti/', $filename) )
	//{
	//	unlink($result[0]);
	//	header('Location: ../errors/error.php?error=excelError');
	//	exit();
	//}
	
	$data->read($result[0]);
}

//print_r($data);
//exit();
	
/**/


/*
 $data->sheets[0]['numRows'] - count rows
 $data->sheets[0]['numCols'] - count columns
 $data->sheets[0]['cells'][$i][$j] - data from $i-row $j-column

 $data->sheets[0]['cellsInfo'][$i][$j] - extended info about cell
    
    $data->sheets[0]['cellsInfo'][$i][$j]['type'] = "date" | "number" | "unknown"
        if 'type' == "unknown" - use 'raw' value, because  cell contain value with format '0.00';
    $data->sheets[0]['cellsInfo'][$i][$j]['raw'] = value if cell without format 
    $data->sheets[0]['cellsInfo'][$i][$j]['colspan'] 
    $data->sheets[0]['cellsInfo'][$i][$j]['rowspan'] 
/**/

error_reporting(E_ALL ^ E_NOTICE);

//$handle = fopen($relocate_string . 'private/cataloghi/safety_info/' . $nameTxt . '.txt', 'w');

//if ($handle)
//{
    $sql_const = "INSERT INTO `catalogo_new` (`";
    for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++)
    {
        if ($j != $data->sheets[0]['numCols']) {
            $sql_const .= $data->sheets[0]['cells'][1][$j] . '`, `';
        } else {
            $sql_const .= $data->sheets[0]['cells'][1][$j] . '`) VALUES ';
        }
    }    
    
	for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) 
	{
	    $sql = $sql_const . "(";
    	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++)
        {
            if ($j != $data->sheets[0]['numCols']) {
                $sql .= "'" . $data->sheets[0]['cells'][$i][$j] . "', ";
            } else {
                $sql .= "'" . $data->sheets[0]['cells'][$i][$j] . "')";
            }
        }
        
        echo $sql . '<br/>';
        mysql_query($sql) or die('Error : ' . mysql_error());
    }
        //fwrite($handle, "\n");

//	fclose($handle);
//echo $sql . '<br/>';
    
//} else {
//	header('Location: ../errors/error.php?error=excelErrorEmptyFileName');
//	exit();	
//}

//unlink($result[0]);

//require $relocate_string . "include/updateStatistics.inc.php";
//require $relocate_string . 'include/updateGazFiles.inc.php';
//
//header('Location: ' . $relocate_string . 'download.php');

//print_r($data);
//print_r($data->formatRecords);
?>
