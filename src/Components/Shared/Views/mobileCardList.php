<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Pages\ProjectDetailPage;
?>
<div class="grid grid-3">

    <?php foreach ($this->paramList['contentList'] as $content) :
        $detailLink = isset($content->id) ? ProjectDetailPage::getFilenameById($content->id) : null;
    ?>

        <?php if ($detailLink) : ?>
            <a class="card card-link" href="<?php echo $detailLink ?>">
                <div class="card-image">
                    <img src="images/<?php echo $content->icon ?>" alt="<?php echo $content->title ?>">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $content->title ?></h3>
                    <p><?php echo $content->body ?></p>
                    <span class="card-more">En savoir plus <?php echo IconApi::render('arrow-right') ?></span>
                </div>
            </a>
        <?php else : ?>
            <div class="card">
                <div class="card-image">
                    <img src="images/<?php echo $content->icon ?>" alt="<?php echo $content->title ?>">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $content->title ?></h3>
                    <p><?php echo $content->body ?></p>
                </div>
                <div class="card-links">
                    <?php if (isset($content->github)) : ?>
                        <a target="_blank" href="<?php echo $content->github ?>"><img src="css/images/button-github.png" /></a>
                    <?php endif; ?>
                    <?php if (isset($content->demo)) : ?>
                        <a class="btn btn-ghost" href="<?php echo $content->demo ?>" target="_blank">DEMO</a>
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
        <?php endif; ?>

    <?php endforeach; ?>
</div>
