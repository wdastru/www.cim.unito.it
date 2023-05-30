<?php
echo "
        <a
			target='_blank' style='float: right;'
			href='https://pagespeed.web.dev/analysis?url=https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . "'
			rel='nofollow' title='PageSpeed Test this page'><img style='width: 48px;'
			alt='PageSpeed logo' src='https://www.gstatic.com/pagespeed/insights/ui/logo/favicon_48.png'> </a>
";
        
?>