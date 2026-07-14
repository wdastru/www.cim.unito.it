<?php

    $eventsNav = [

    'educational' => [
        'url'   => SITE_ROOT . 'educational.php',
        'label' => 'Educational',
    ],

    'news'      => [
        'url'   => SITE_ROOT . 'news.php',
        'label' => 'News',
    ],

    'meetings'      => [
        'url'   => SITE_ROOT . 'meetings.php',
        'label' => 'Meetings',
    ],
    ];

?>

<div id="sidebar">
    <div class="padding">
        <ul id="list">
            <?php foreach ($eventsNav as $subsection => $item): ?>
                <li<?php echo $activeSubsection === $subsection ? ' class="subsection_link active"' : ' class="subsection_link"' ?>>
                    <a href="<?php echo $item['url'] ?>"><?php echo $item['label'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
