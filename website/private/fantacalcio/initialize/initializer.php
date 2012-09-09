<?php
$relocate_string = "../";

/*
 * elimina offerte
 * * * * * * * * */
system("rm " . $relocate_string . "777//offerte//offerta*.txt");
system("rm " . $relocate_string . "777//offerte//archive//offerta*.txt");

$where = "Location: " . $relocate_string . "initialize/index.php";
header($where); 
?>
