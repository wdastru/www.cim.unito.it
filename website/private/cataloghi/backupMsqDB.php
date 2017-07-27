<?php
    require ("connect.php");
    require ("variables.php");

    exec('mysqldump -u $DBName catalogo > $DBName_catalogo.sql');
    
    exit;
?>