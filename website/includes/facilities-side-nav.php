<?php

    $facilitiesNav = [

    'mri'       => [
        'url'   => SITE_ROOT . 'facilities/mri.php',
        'label' => 'MRI',
    ],

    'pet-spect-ct'       => [
        'url'   => SITE_ROOT . 'facilities/pet.php',
        'label' => 'PET/SPECT/CT',
    ],
    'oi-us-pa'  => [
        'url'   => SITE_ROOT . 'facilities/oi_us_pa.php',
        'label' => 'Optical/US/PA Imaging',
    ],

    'nmr-relax' => [
        'url'   => SITE_ROOT . 'facilities/nmr_relax.php',
        'label' => 'NMR/Relaxometry',
    ],

    'org-lab'  => [
        'url'   => SITE_ROOT . 'facilities/org_lab.php',
        'label' => 'Organic Laboratory',
    ],

    'cell-lab'  => [
        'url'   => SITE_ROOT . 'facilities/cell_lab.php',
        'label' => 'Cell Laboratory',
    ],

    'service'   => [
        'url'   => SITE_ROOT . 'facilities/service.php',
        'label' => 'Service request',
    ],
    ];

?>

<div id="sidebar">
    <div class="padding">
        <ul id="list">
            <?php foreach ($facilitiesNav as $subsection => $item): ?>
                <li<?php echo $activeSubsection === $subsection ? ' class="subsection_link active"' : ' class="subsection_link"' ?>>
                    <a href="<?php echo $item['url'] ?>"><?php echo $item['label'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
