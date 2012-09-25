<?php
$relocate_string = "../";

//system("echo \"0\\n\" > " . $relocate_string . "777//statistics.txt");

// --> elenco formazioni squadra
$dir = $relocate_string . "777//filesGazzetta//*.txt";
$filesGazzetta = glob($dir);
// <-- elenco formazioni squadra

// --> file formazioni piu' recente
foreach ($filesGazzetta as $file) {
	echo "$file<br>";
	
	require $relocate_string . 'include/updateStatistics.inc.php';
}


//$where = "Location: " . $relocate_string . "initialize/index.php";
//header($where); 
?>
