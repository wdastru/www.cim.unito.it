<?php 

echo "
    <meta charset='utf-8' />
    <meta name='MobileOptimized' content='width'>
    <meta name='HandheldFriendly' content='true'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    
    <meta name='description' content='We are interested in (TO DO)' />
        <meta name='keywords' content='(TO DO)' />
            <meta name='robots' content='index, follow'>
            <meta name='revisit-after' content='1 week'>
            
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src='https://www.googletagmanager.com/gtag/js?id=UA-112490720-1'></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                
                gtag('config', 'UA-112490720-1');
            </script>
            
            <!-- imaging, x-ray, tumor -->
            <!--[if lte IE 8]><script src='" . $localizer . "PI/assets/js/ie/html5shiv.js'></script><![endif]-->
            <link rel='stylesheet' href='" . $localizer . "PI/assets/css/main.css' />
            <!--[if lte IE 8]><link rel='stylesheet' href='" . $localizer . "PI/assets/css/ie8.css' /><![endif]-->
            <!--[if lte IE 9]><link rel='stylesheet' href='" . $localizer . "PI/assets/css/ie9.css' /><![endif]-->
            <link rel='SHORTCUT ICON' href='" . $localizer . "images/favicon.ico' type='image/x-icon' />
            <link rel='ICON' href='" . $localizer . "images/favicon.ico' type='image/ico' />
";
?>