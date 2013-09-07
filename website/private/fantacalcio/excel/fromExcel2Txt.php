<?php
session_start();

$relocate_string = "../";
// Test CVS

require_once('Excel/reader.php');

// ExcelFile($filename, $encoding);
$data = new Spreadsheet_Excel_Reader();


// Set output Encoding.
$data->setOutputEncoding('CP1251');

/***
* if you want you can change 'iconv' to mb_convert_encoding:
* $data->setUTFEncoder('mb');
*
**/

/***
* By default rows & cols indeces start with 1
* For change initial index use:
* $data->setRowColOffset(0);
*
**/



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
$dir = "../777/filesGazzetta/";
$filter = "*.xls";
$result = glob($dir . $filter);

//print_r($result);
//exit();

if (count($result) != 1)
{
	unlink($dir . $_SESSION['uploaded_file']);
	unset($_SESSION['uploaded_file']);
	header('Location: ../errors/error.php?error=excelErrorNoFilesFound');
	exit();
}
else
{
	$parts = pathinfo($result[0]);
	$filename = strtok($parts['basename'], '.'); // sul server la versione di php e' probabilmente vecchia e non esiste filename 
	
	//if( !preg_match('/MCCMicro[P|p]agamenti/', $filename) )
	if( !preg_match('/quotazioni_gazzetta_[0-9]{2}/', $filename) )
	{
		unlink($result[0]);
		header('Location: ../errors/error.php?error=excelError');
		exit();
	} else {
		$nameTxt = strtok($filename, '_');
		$nameTxt = strtok('_');
		$nameTxt = strtok('_');
	}
	
	$data->read($result[0]);
}
	
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

$handle = fopen('..//777//filesGazzetta//' . $nameTxt . '.txt', 'w');
	
if ($handle)
{
	for ($i = 4; $i <= $data->sheets[0]['numRows']; $i++) 
	{
		for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) 
			fwrite($handle, $data->sheets[0]['cells'][$i][$j] . "\t");
		
		fwrite($handle, "\n");
	}
	
	fclose($handle);
} else {
	header('Location: ../errors/error.php?error=excelErrorEmptyFileName');
	exit();	
}

unlink($result[0]);

require $relocate_string . "include/updateStatistics.inc.php";
require $relocate_string . 'include/updateGazFiles.inc.php';

header('Location: ' . $relocate_string . 'download.php');

//print_r($data);
//print_r($data->formatRecords);
?>
