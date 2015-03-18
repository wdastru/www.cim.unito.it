<?php
echo "

	<script type='text/javascript' src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script type='text/javascript' src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
    
    <title>Molecular Imaging Center - University of Torino</title>
    <meta name='description' content='University of Torino. Website of the Molecular Imaging Center.' />
    <meta name='google-site-verification' content='q6BWA8Ypxz6kFHheH3kr6xrFvLXopTTQNMlEEV3vGF0' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta http-equiv='Cache-control' content='public'>
    <meta name='keywords' content='NMR, MRI, Imaging Molecolare, Molecular Imaging, Molecular, Imaging, Hyperpolarization, Liposomes, Targeting, Contrast Agents, Positron Emission Tomography, PET, microPET, Diagnostic Imaging, Optical Imaging, CIM, Torino, Italy, Liposomi, risonanza, magnetica, Italia' />
    <link id='size-stylesheet' href='" . $localizer . "stylesheet.css' rel='stylesheet' type='text/css' />
    <link href='" . $localizer . "images/favicon.gif' rel='icon' type='image/gif' />

        <script type='text/javascript'>
            function adjustStyle(width) {
                //width = parseInt(width);
                if (width < 701) {
                    $('#size-stylesheet').attr('href', '" . $localizer . "smaller.css');
                } else {
                   $('#size-stylesheet').attr('href', '" . $localizer . "stylesheet.css');
                }
            }
        
            $(window).load(function () {
            //$(window).beforeunload(function () {
            //$(function() {
                adjustStyle($(this).width());
                $(window).resize(function() {
                    adjustStyle($(this).width());
                });
            });
        </script>
    
    
    
    
    
    <script src='" . $localizer . "script.js' type='text/javascript' />
    
    ";
    
    //require($localizer . 'includes/jQuery.php');
        
?>