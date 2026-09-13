<?php

use MyWebsite\Apis\IconApi;

$content = $this->paramList['content'];
$category = $this->paramList['category'];
$backFilename = $this->paramList['backFilename'];
$backLabel = $this->paramList['backLabel'];
?>
<a class="back-link" href="<?php echo $backFilename ?>"><?php echo IconApi::render('arrow-left') ?><?php echo $backLabel ?></a>

<div class="card content-card">

    <div class="project-body">
        <?php if (isset($content->modalContent)) : ?>
            <?php echo $content->modalContent ?>
        <?php else : ?>
            <p><?php echo $content->body ?></p>
        <?php endif; ?>
    </div>

    <div class="project-links">

        <?php if (isset($content->github)) : ?>
            <a target="_blank" href="<?php echo $content->github ?>"><img src="css/images/button-github.png" /></a>
        <?php endif; ?>

        <?php if (isset($content->demo)) : ?>
            <a class="btn btn-primary" href="<?php echo $content->demo ?>" target="_blank">DEMO</a>
        <?php endif; ?>

        <?php if (isset($content->itchio)) : ?>
            <a href="<?php echo $content->itchio ?>" target="_blank"><img src="css/images/button-itchio-black.png" /></a>
        <?php endif; ?>

        <?php if (isset($content->idplaystore)) : ?>
            <a href="https://play.google.com/store/apps/details?id=<?php echo $content->idplaystore ?>" target="_blank"><img src="css/images/google-playstore.png" /></a>
        <?php endif; ?>

        <?php if (isset($content->flathub)) : ?>
            <a href="<?php echo $content->flathub ?>" target="_blank"><img src="css/images/flathub-badge-en.png" /></a>
        <?php endif; ?>

        <?php if (isset($content->snapcraft)) : ?>
            <a href="<?php echo $content->snapcraft ?>" target="_blank"><img src="css/images/snap-store-black.png" /></a>
        <?php endif; ?>

    </div>

</div>