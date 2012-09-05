<?php
session_start();
$filename = "../777/offerte/" . $_GET['file'];
echo "PopupCentrata('" . $filename . "', 450, 150);";
?>