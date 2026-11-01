<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Apis\TextApi;

$content = $this->paramList['content'];
$category = $this->paramList['category'];
$backFilename = $this->paramList['backFilename'];
$backLabel = $this->paramList['backLabel'];

// le titre est affiché dans l'en-tête : on retire le premier h2 du markdown
$modalContent = isset($content->modalContent) ? preg_replace('#^\s*<h2[^>]*>.*?</h2>#s', '', $content->modalContent, 1) : null;
?>
<a class="back-link" href="<?php echo $backFilename ?>"><?php echo IconApi::render('arrow-left') ?><?php echo $backLabel ?></a>

<div class="project-hero">
    <img class="project-icon" src="images/<?php echo $content->icon ?>" alt="<?php echo $content->title ?>">

    <div class="project-hero-text">
        <span class="chip"><?php echo $category ?></span>
        <?php if (isset($content->status)) : ?>
            <span class="status-badge"><?php echo $content->status ?></span>
        <?php endif; ?>
        <?php if (isset($content->tags)) : ?>
            <?php foreach ($content->tags as $tagLoop) : ?>
                <span class="tag-pill"><?php echo $tagLoop ?></span>
            <?php endforeach; ?>
        <?php endif; ?>
        <h1><?php echo $content->title ?></h1>
        <p class="project-lead"><?php echo TextApi::frenchSpacing($content->body) ?></p>

        <div class="project-actions">
            <?php if (isset($content->itchio)) : ?>
                <a class="btn btn-primary" href="<?php echo $content->itchio ?>" target="_blank"><?php echo IconApi::render('gamepad') ?>Jouer en ligne</a>
            <?php endif; ?>
            <?php if (isset($content->demo)) : ?>
                <a class="btn btn-primary" href="<?php echo $content->demo ?>" target="_blank"><?php echo IconApi::render('gamepad') ?>Démo en ligne</a>
            <?php endif; ?>
            <?php if (isset($content->flathub)) : ?>
                <a class="btn btn-ghost" href="<?php echo $content->flathub ?>" target="_blank"><?php echo IconApi::render('download') ?>Flathub</a>
            <?php endif; ?>
            <?php if (isset($content->snapcraft)) : ?>
                <a class="btn btn-ghost" href="<?php echo $content->snapcraft ?>" target="_blank"><?php echo IconApi::render('download') ?>Snap Store</a>
            <?php endif; ?>
            <?php if (isset($content->packagist)) : ?>
                <a class="btn btn-ghost" href="<?php echo $content->packagist ?>" target="_blank"><?php echo IconApi::render('package') ?>Packagist</a>
            <?php endif; ?>
            <?php if (isset($content->github)) : ?>
                <a class="btn btn-ghost" href="<?php echo $content->github ?>" target="_blank"><?php echo IconApi::render('code') ?>Code source</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if ($modalContent) : ?>
    <div class="card content-card">
        <div class="project-body">
            <?php echo $modalContent ?>
        </div>
    </div>
<?php endif; ?>
