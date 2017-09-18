<?php
	phpinfo();

	require ("connect.php");
    require ("variables.php");
    
    exec('mysqldump -u cim_adm cimdb catalogo > cimdb_catalogo.sql');
    
?>