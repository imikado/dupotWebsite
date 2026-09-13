<?php

use MyWebsite\Apis\IconApi;

$linkList = $this->paramList['linkList'];
$pageSelected = $this->paramList['pageSelected'];

$externalLabels = ['Itchio'];
$iconOnlyLabels = ['Github', 'Itchio'];
$socialIcons = [
    'Github' => 'css/images/GitHub-Mark-Light-32px.png',
    'Itchio' => 'css/images/itchio-textless-white.png',
];
?>
<nav class="site-nav">
    <div class="nav-inner">
        <a href="index.html" class="brand"><span class="brand-mark">d</span>uPot.org</a>

        <ul class="nav-links">
            <?php foreach ($linkList as $label => $link) : ?>
                <?php if (in_array($label, $iconOnlyLabels)) continue; ?>
                <li <?php if ($link == $pageSelected) : ?>class="active"<?php endif; ?>>
                    <a <?php if (in_array($label, $externalLabels)) : ?>target="_blank"<?php endif; ?> href="<?php echo $link ?>"><?php echo $label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="nav-social">
            <?php foreach ($linkList as $label => $link) : ?>
                <?php if (isset($socialIcons[$label])) : ?>
                    <a class="nav-icon" title="<?php echo $label ?>" target="_blank" href="<?php echo $link ?>"><img src="<?php echo $socialIcons[$label] ?>" alt="<?php echo $label ?>"></a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <button type="button" class="nav-toggle" aria-label="Menu" aria-expanded="false">
            <?php echo IconApi::render('menu') ?>
        </button>
    </div>

    <div class="nav-mobile">
        <ul>
            <?php foreach ($linkList as $label => $link) : ?>
                <li <?php if ($link == $pageSelected) : ?>class="active"<?php endif; ?>>
                    <a <?php if (in_array($label, $externalLabels)) : ?>target="_blank"<?php endif; ?> href="<?php echo $link ?>"><?php echo $label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>
