<?php
session_start();
$localizer = "../../../";
require $localizer . 'recursiveChmod.inc.php';
recursiveChmod($localizer . 'COST/private/WGs/WG1_docs');
?>
