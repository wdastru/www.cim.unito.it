<?php 
    $isLocal = ($_SERVER['HTTP_HOST'] === 'localhost');
    define(
        'SITE_ROOT',
        $isLocal
            ? '/www.cim.unito.it/website/'
            : '/website/'
    );
    define(
        'SITE_PATH',
        __DIR__ . '/'
    );
?>
