<?php

function removeUnwantedChars ($str) {
    return preg_replace("/[\s\.\/\\\"'\?\!]/", "_", $str);
}

?>