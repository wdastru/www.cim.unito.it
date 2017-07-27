<?php
    require ("connect.php");
    require ("variables.php");

    exec('mysqldump -u $DBName catalogo > cimdb_catalogo.sql');
    
    exit;
?>