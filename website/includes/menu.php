<?php
    $base        = SITE_ROOT;
    $currentPage = basename($_SERVER['PHP_SELF']); // for active class
    $menu        = [
    'home'         => ['url' => $base . 'index.php', 'label' => 'HOME'],
    'people'       => ['url' => $base . 'people.php', 'label' => 'PEOPLE'],
    'research'     => ['url' => $base . 'research.php', 'label' => 'RESEARCH'],
    'events'       => ['url' => $base . 'events.php', 'label' => 'EVENTS'],
    'facilities'   => ['url' => $base . 'facilities.php', 'label' => 'FACILITIES'],
    'partners'     => ['url' => $base . 'partners.php', 'label' => 'PARTNERS'],
    'projects'     => ['url' => $base . 'projects.php', 'label' => 'PROJECTS'],
    'publications' => ['url' => $base . 'publications.php', 'label' => 'PUBLICATIONS'],
    ];
?>
<nav class="main-menu">
    <button class="main-menu-toggle" aria-label="Open menu"></button>
    <ul class="main-menu-list">
        <?php foreach ($menu as $section => $item): ?>
            <li<?php echo $activeSection === $section ? ' class="active"' : '' ?>>
                <a href="<?php echo $item['url'] ?>"><?php echo $item['label'] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
