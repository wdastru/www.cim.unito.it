<?php
echo "<div id='footer'> <br />
  <p> <a class='link' href='http://validator.w3.org/check?uri=referer'><img style='border:none; text-decoration:none;'
        src='";
echo $relocate_string . "figure/Valid XHTML 1.png'
        alt='Valid XHTML 1.1' height='31' width='88' /></a>&nbsp;&nbsp;<a class='link' href='http://jigsaw.w3.org/css-validator/check?uri=referer'><img style='border:none; text-decoration:none;'
          src='";
echo $relocate_string . "figure/Valid CSS 2.png'
          alt='Valid CSS 2.1!' height='31' width='88' /></a> </p>
  <br />
  <p id='version'></p>
  <script type='text/javascript'>print_version();</script>
  <br />
  <br />
</div>";
?>