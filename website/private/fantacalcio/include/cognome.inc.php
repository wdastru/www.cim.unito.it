<?php

function cognome($a)
{
    if (preg_match("/(^([A-ZÀ-Ü]{2,})(( [A-ZÀ-Ü]{2,})?)+).*/", $a)) { // "AAA BBBB CCCCC .*"
        return preg_replace("/(^([A-ZÀ-Ü]{2,})(( [A-ZÀ-Ü]{2,})?)+).*/", "\\1", $a);
    } else {
        return $a;
    }
}
?>
     