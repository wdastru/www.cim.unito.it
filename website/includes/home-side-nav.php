<?php

    $homeNav = [
    'aboutus'  => [
        'url'   => SITE_ROOT . 'aboutus.php',
        'label' => 'About Us',
    ],
    'where'    => [
        'url'   => SITE_ROOT . 'where.php',
        'label' => 'Where',
    ],
    'contacts' => [
        'url'   => SITE_ROOT . 'contacts.php',
        'label' => 'Contacts',
    ],
    ];

?>

<div id="sidebar">
    <div class="padding">
        <ul id="list">
            <?php foreach ($homeNav as $subsection => $item): ?>
                <li<?php echo $activeSubsection === $subsection ? ' class="subsection_link active"' : ' class="subsection_link"' ?>>
                    <a href="<?php echo $item['url'] ?>"><?php echo $item['label'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
