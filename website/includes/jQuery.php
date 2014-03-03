<?php
    echo "
    <script type='text/javascript' src='http://code.jquery.com/jquery-2.1.0.min.js'></script>
    <script type='text/javascript' src='http://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>
    ";

    unset($hostname);
    exec('hostname', $hostname);
    if ($hostname[0] == "PESTODURO") {
        echo "<script type='text/javascript' src='" . $relocate_string . "jQuery/lib/jquery-1.10.1.min.js'></script>";  
    }

    echo "
    <script type='text/javascript'>
        $(function(){
            $('a.linkExternal').on('click',function(e){
                e.preventDefault();
                window.open($(this).attr('href'));
            });
        });
    </script>
    ";
?>