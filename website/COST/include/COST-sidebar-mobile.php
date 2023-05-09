<?php 
	echo "

		<div id='sidebar-mobile'>
			<input class='menu-btn' type='checkbox' id='sidebar-menu-btn'>
            <label class='menu-icon' for='sidebar-menu-btn'><span class='navicon'></span></label>
			<ul class='menu'>
        		<li><a href='" . $localizer . "COST/index.php'>Home</a></li>
				<li><a href='" . $localizer . "COST/meetings/index.php'>Meetings</a></li>
                <li><a href='" . $localizer . "COST/events.php'>Events</a></li>
			</ul>
		</div>
";
?>