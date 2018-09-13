<?php

function cognome($a)
{
    if (preg_match("/(^([A-Z�-�]{2,})(( [A-Z�-�]{2,})?)+).*/", $a)) { // "AAA BBBB CCCCC .*"
        return preg_replace("/(^([A-Z�-�]{2,})(( [A-Z�-�]{2,})?)+).*/", "\\1", $a);
    } else {
        return $a;
    }
}
?>
     