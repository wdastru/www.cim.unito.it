<?php
      function cognome($a) {
        if (preg_match("/([A-Z]{2,} )([A-Z]{2,} )([A-Z]{2,} ).*/", $a)) { 
          return preg_replace("/([A-Z]{2,} )([A-Z]{2,} )([A-Z]{2,} ).*/", "\\1\\2\\3", $a);
        } else if (preg_match("/([A-Z]{2,} )([A-Z]{2,} ).*/", $a)) {
          return preg_replace("/([A-Z]{2,} )([A-Z]{2,} ).*/", "\\1\\2", $a);
        } else if (preg_match("/([A-Z]{2,} ).*/", $a)) {
          return preg_replace("/([A-Z]{2,} ).*/", "\\1", $a);
        } else {
          return $a;
        }
      }
?>
     