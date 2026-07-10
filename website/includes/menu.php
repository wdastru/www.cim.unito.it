<?php
    $base = SITE_ROOT;
    $menu = [
    $base . 'index.php'        => 'HOME',
    $base . 'people.php'       => 'PEOPLE',
    $base . 'research.php'     => 'RESEARCH',
    $base . 'events.php'       => 'EVENTS',
    $base . 'facilities.php'   => 'FACILITIES',
    $base . 'partners.php'     => 'PARTNERS',
    $base . 'projects.php'     => 'PROJECTS',
    $base . 'publications.php' => 'PUBLICATIONS',
    ];
?>
<nav class="main-menu">
    <button class="main-menu-toggle" aria-label="Open menu"></button>
    <ul class="main-menu-list">
        <?php foreach ($menu as $url => $label): ?>
            <li><a href="<?php echo $url ?>"><?php echo $label ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
