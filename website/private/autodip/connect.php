<?php

/*
$con=mysqli_connect("localhost", "cim_adm", "vpsyyAR4jp");

mysqli_select_db($con, $DBName);
//To select the database

session_start(); //To start the session

$query=mysqli_query($con,your query); 
*/


$con = mysql_connect("localhost","cim_adm","vpsyyAR4jp");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
	exit();
}

?>