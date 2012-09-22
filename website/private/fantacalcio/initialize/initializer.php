<?php
$relocate_string = "../";

/*
 * elimina offerte
 * * * * * * * * * */
system("rm " . $relocate_string . "777//offerte//offerta*.txt");
system("rm " . $relocate_string . "777//offerte//archive//offerta*.txt");

/*
 * pulizia datiCampionato.txt,
 * datiCoppa.txt e
 * statistics.txt
 * * * * * * * * * * * * * * */
system("rm " . $relocate_string . "777//datiCampionato.txt*");
system("rm " . $relocate_string . "777//datiCoppa.txt*");
system("rm " . $relocate_string . "777//statistics.txt*");
include($relocate_string . "createDatiCampionato.php");
include($relocate_string . "createDatiCoppa.php");
system("echo \"0\\n\" > " . $relocate_string . "777//statistics.txt");

/*
 * rimozione gazFiles
 * * * * * * * * * * * * */
system("rm " . $relocate_string . "777//gazFiles.inc.php*");
  
/*
 * pulizia filesGazzetta
 * * * * * * * * * * * * */
system("rm " . $relocate_string . "777//filesGazzetta//*.*");

/*
 * pulizia formazioni
 * * * * * * * * * * */
system("rm " . $relocate_string . "777//formazioni//*_*.txt");
system("rm " . $relocate_string . "777//formazioni//listaFormazioni.txt");
system("rm " . $relocate_string . "777//formazioni//archive//*.*");

$where = "Location: " . $relocate_string . "initialize/index.php";
header($where); 
?>
