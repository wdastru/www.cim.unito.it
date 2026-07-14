<?php

    $partnersNav = [

    'academic' => [
        'url'   => SITE_ROOT . 'academic.php',
        'label' => 'Academic',
    ],

    'industrial'        => [
        'url'   => SITE_ROOT . 'industrial.php',
        'label' => 'Industrial',
    ],

    'spin-offs'    => [
        'url'   => SITE_ROOT . 'spin-offs.php',
        'label' => 'Spin-Offs',
    ],
    ];

?>

<div id="sidebar">
    <div class="padding">
        <ul id="list">
            <?php foreach ($partnersNav as $subsection => $item): ?>
                <li<?php echo $activeSubsection === $subsection ? ' class="subsection_link active"' : ' class="subsection_link"' ?>>
                    <a href="<?php echo $item['url'] ?>"><?php echo $item['label'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
