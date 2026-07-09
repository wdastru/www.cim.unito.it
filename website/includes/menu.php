<?php
$base = '/www.cim.unito.it/website/';
$menu = [
    $base . 'index.php' => 'HOME',
    $base . 'people.php' => 'PEOPLE',
    $base . 'research.php' => 'RESEARCH',
    $base . 'events.php' => 'EVENTS',
    $base . 'facilities.php' => 'FACILITIES',
    $base . 'partners.php' => 'PARTNERS',
    $base . 'projects.php' => 'PROJECTS',
    $base . 'publications.php' => 'PUBLICATIONS'
];
?>
<nav class="menu">
    <ul>
        <?php foreach ($menu as $url => $label): ?>
            <li><a href="<?= $url ?>"><?= $label ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
