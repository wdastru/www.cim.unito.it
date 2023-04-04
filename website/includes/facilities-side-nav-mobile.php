 <?php
echo "
		<div id='sidebar-mobile'>
			<input class='menu-btn' type='checkbox' id='sidebar-menu-btn'>
            <label class='menu-icon' for='sidebar-menu-btn'><span class='navicon'></span></label>
			<ul class='menu'>
        		<li><a href='" . $localizer . "facilities/mri.php'>MRI</a></li>
				<li><a href='" . $localizer . "facilities/pet.php'>PET/SPECT/CT</a></li>
				<li><a href='" . $localizer . "facilities/oi_us_pa.php'>OI/US/PAI</a></li>
                <li><a href='" . $localizer . "facilities/nmr_relax.php'>NMR/Relaxometry</a></li>
				<li><a href='" . $localizer . "facilities/org_lab.php'>Organic Lab</a></li>
				<li><a href='" . $localizer . "facilities/cell_lab.php'>Cell Lab</a></li>
                <li><a href='" . $localizer . "facilities/service.php'>Service</a></li>
			</ul>
		</div>
";
?>              
