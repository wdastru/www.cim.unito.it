<?php
session_start();
require_once (__DIR__ . '/../../../config.inc.php');
include SITE_PATH . 'recursiveChmod.inc.php';
recursiveChmod(SITE_PATH . 'COST/private/WGs/WG1_docs');
?>
