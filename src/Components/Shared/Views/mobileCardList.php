<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Apis\TextApi;
use MyWebsite\Pages\ProjectDetailPage;
?>
<?php
// 4 cartes : une grille 2x2 plutôt qu'une carte seule sur la dernière ligne
$cardCount = count($this->paramList['contentList']);
$gridClass = ($cardCount % 3 !== 0 && $cardCount % 2 === 0) ? 'grid-2' : 'grid-3';
?>
<div class="grid <?php echo $gridClass ?>">

    <?php foreach ($this->paramList['contentList'] as $content) :
        $detailLink = isset($content->id) ? ProjectDetailPage::getFilenameById($content->id) : null;
    ?>

        <?php if ($detailLink) : ?>
            <a class="card card-link" href="<?php echo $detailLink ?>">
                <?php if (isset($content->thumbnail)) : ?>
                <div class="card-image card-image-thumbnail">
                    <img src="images/<?php echo $content->thumbnail ?>" alt="<?php echo $content->title ?>" loading="lazy">
                <?php else : ?>
                <div class="card-image" style="--cover: url('/images/<?php echo $content->icon ?>')">
                    <img src="images/<?php echo $content->icon ?>" alt="<?php echo $content->title ?>" loading="lazy">
                <?php endif; ?>
                    <?php if (isset($content->status)) : ?>
                        <span class="status-badge"><?php echo $content->status ?></span>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h3 class="card-title"><?php echo $content->title ?></h3>
                    <p><?php echo TextApi::frenchSpacing($content->body) ?></p>
                    <?php if (isset($content->tags) || isset($content->flathub) || isset($content->snapcraft) || isset($content->itchio)) : ?>
                        <div class="card-platforms">
                            <?php if (isset($content->tags)) : ?>
                                <?php foreach ($content->tags as $tagLoop) : ?>
                                    <span class="tag-pill"><?php echo $tagLoop ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <?php if (isset($content->flathub) || isset($content->snapcraft)) : ?>
                                <span class="platform-pill platform-linux"><?php echo IconApi::render('download') ?>GNU/Linux</span>
                            <?php endif; ?>
                            <?php if (isset($content->itchio)) : ?>
                                <span class="platform-pill platform-online"><?php echo IconApi::render('gamepad') ?>Jouer en ligne</span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <span class="card-more">En savoir plus <?php echo IconApi::render('arrow-right') ?></span>
                </div>
            </a>
        <?php else : ?>
            <div class="card">
                <div class="card-image" style="--cover: url('/images/<?php echo $content->icon ?>')">
                    <img src="images/<?php echo $content->icon ?>" alt="<?php echo $content->title ?>" loading="lazy">
                    <?php if (isset($content->status)) : ?>
                        <span class="status-badge"><?php echo $content->status ?></span>
                    <?php endif; ?>
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
