<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Apis\TextApi;
use MyWebsite\Pages\ProjectDetailPage;

?>
<div class="lib-list">

    <?php foreach ($this->paramList['contentList'] as $content) :
        $detailLink = ProjectDetailPage::getFilenameById($content->id);
    ?>

        <article class="card lib-card">
            <a class="lib-visual" href="<?php echo $detailLink ?>" style="--cover: url('/images/<?php echo $content->icon ?>')">
                <img src="images/<?php echo $content->icon ?>" alt="<?php echo $content->title ?>" loading="lazy">
                <?php if (isset($content->badge)) : ?>
                    <span class="lib-badge"><?php echo $content->badge ?></span>
                <?php endif; ?>
            </a>

            <div class="lib-content">
                <div class="card-platforms">
                    <?php foreach ($content->tags ?? [] as $tagLoop) : ?>
                        <span class="tag-pill"><?php echo $tagLoop ?></span>
                    <?php endforeach; ?>
                </div>

                <h3 class="lib-title"><a href="<?php echo $detailLink ?>"><?php echo $content->title ?></a></h3>
                <p><?php echo TextApi::frenchSpacing($content->body) ?></p>

                <?php if (isset($content->install)) : ?>
                    <div class="lib-install">
                        <span class="lib-install-label"><?php echo $content->install->label ?></span>
                        <?php if (isset($content->install->command)) : ?>
                            <code><span class="lib-install-prompt">$</span> <?php echo $content->install->command ?></code>
                            <button type="button" class="lib-copy" data-copy="<?php echo $content->install->command ?>" aria-label="Copier la commande"><?php echo IconApi::render('copy') ?><span>Copier</span></button>
                        <?php else : ?>
                            <span class="lib-install-text"><?php echo $content->install->text ?></span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <div class="lib-actions">
                    <a class="btn btn-primary" href="<?php echo $detailLink ?>">En savoir plus <?php echo IconApi::render('arrow-right') ?></a>
                    <?php if (isset($content->github)) : ?>
                        <a class="btn btn-ghost btn-repo" href="<?php echo $content->github ?>" target="_blank"><?php echo IconApi::render('github') ?>GitHub</a>
                    <?php endif; ?>
                    <?php if (isset($content->packagist)) : ?>
                        <a class="btn btn-ghost" href="<?php echo $content->packagist ?>" target="_blank"><?php echo IconApi::render('package') ?>Packagist</a>
                    <?php endif; ?>
                </div>
            </div>
        </article>

    <?php endforeach; ?>
</div>
