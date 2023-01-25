<?php

require($localizer . 'includes/jQuery.php');

echo "
    <meta name='google-site-verification' content='q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0' >
    <meta name='viewport' content='width=device-width, initial-scale=1.0' >
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' >
    <meta name='keywords' content='NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia' >
    <meta name='robots' content='index, follow' >
    <link href='" . $localizer . "stylesheet.css' rel='stylesheet' >
    <link href='" . $localizer . "images/favicon.gif' rel='icon' type='image/gif' >
    <script src='" . $localizer . "jquery.cycle2.min.js'></script>
    <script src='" . $localizer . "script.js'></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
      ga('create', 'UA-42991693-1', 'unito.it');
      ga('send', 'pageview');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=G-MP6S1QL319'></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-MP6S1QL319');
    </script>
";
        
?>