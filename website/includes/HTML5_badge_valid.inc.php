<?php
echo "
        <a
			target='_blank' style='float: right;'
			href='https://validator.w3.org/nu/?doc=https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . "'
			rel='nofollow' title='Validate as HTML5'><img style='width: 50px;'
			alt='HTML5 logo' src='" . $localizer . "images/HTML5_logo_and_wordmark.png'> </a>
";
        
?>