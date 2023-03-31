<?php
	echo "
    	<div id='header-mobile'>
          <a href='' class='logo'>Molecular Imaging Center</a>
          <input class='menu-btn' type='checkbox' id='menu-btn'>
          <label class='menu-icon' for='menu-btn'><span class='navicon'></span></label>
          <ul class='menu'>
            <li><a class='mobile-menu-link' href='" . $localizer . "index.php'>HOME</a></li>
            <li><a class='mobile-menu-link' href='" . $localizer . "staff.php'>STAFF</a></li>
            <li><a class='mobile-menu-link' href='" . $localizer . "research.php'>RESEARCH</a></li>
            <li><a class='mobile-menu-link' href='" . $localizer . "events.php'>EVENTS</a></li>
            <li><a class='mobile-menu-link' href='" . $localizer . "facilities/index.php'>FACILITIES</a></li>
            <li><a class='mobile-menu-link' href='" . $localizer . "partners.php'>PARTNERS</a></li>
            <li><a class='mobile-menu-link' href='" . $localizer . "projects.php'>PROJECTS</a></li>
            <li><a class='mobile-menu-link' href='" . $localizer . "publications.php'>PUBLICATIONS</a></li>
          </ul>
        </div>
    	";
?>
