<?php

use MyWebsite\Apis\IconApi;

$content = $this->paramList['content'];
$category = $this->paramList['category'];
$backFilename = $this->paramList['backFilename'];
$backLabel = $this->paramList['backLabel'];

// le titre est affiché dans l'en-tête : on retire le premier h2 du markdown
$modalContent = isset($content->modalContent) ? preg_replace('#^\s*<h2[^>]*>.*?</h2>#s', '', $content->modalContent, 1) : null;
?>
<a class="back-link" href="<?php echo $backFilename ?>"><?php echo IconApi::render('arrow-left') ?><?php echo $backLabel ?></a>

<div class="project-hero" style="--cover: url('/images/<?php echo $content->icon ?>')">
    <img class="project-icon" src="images/<?php echo $content->icon ?>" alt="<?php echo $content->title ?>">

    <div class="project-hero-text">
        <span class="chip"><?php echo $category ?></span>
        <h1><?php echo $content->title ?></h1>
        <p class="project-lead"><?php echo $content->body ?></p>

        <div class="project-links">

            <?php if (isset($content->github)) : ?>
                <a target="_blank" href="<?php echo $content->github ?>"><img src="css/images/button-github.png" alt="Disponible sur GitHub" /></a>
            <?php endif; ?>

            <?php if (isset($content->demo)) : ?>
                <a class="btn btn-primary" href="<?php echo $content->demo ?>" target="_blank">DEMO</a>
            <?php endif; ?>

            <?php if (isset($content->itchio)) : ?>
                <a href="<?php echo $content->itchio ?>" target="_blank"><img src="css/images/button-itchio-black.png" alt="Disponible sur itch.io" /></a>
            <?php endif; ?>

            <?php if (isset($content->idplaystore)) : ?>
                <a href="https://play.google.com/store/apps/details?id=<?php echo $content->idplaystore ?>" target="_blank"><img src="css/images/google-playstore.png" alt="Disponible sur Google Play" /></a>
            <?php endif; ?>

            <?php if (isset($content->flathub)) : ?>
                <a href="<?php echo $content->flathub ?>" target="_blank"><img src="css/images/flathub-badge-en.png" alt="Disponible sur Flathub" /></a>
            <?php endif; ?>

            <?php if (isset($content->snapcraft)) : ?>
                <a href="<?php echo $content->snapcraft ?>" target="_blank"><img src="css/images/snap-store-black.png" alt="Disponible sur le Snap Store" /></a>
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
