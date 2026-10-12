<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Apis\TextApi;
use MyWebsite\Pages\TutorialPage;

?>
<div class="grid grid-2">

    <?php foreach ($this->paramList['contentList'] as $content) : ?>

        <a class="card card-link tutorial-card" href="<?php echo TutorialPage::getFilenameById($content->id) ?>">
            <div class="tutorial-card-head">
                <span class="tutorial-card-icon"><?php echo IconApi::render('book') ?></span>
                <span class="tutorial-meta">
                    <?php echo IconApi::render('clock') ?><?php echo $content->readingTime ?> min
                    <span class="tutorial-meta-sep">·</span>
                    <?php echo $content->stepCount ?> étapes
                </span>
            </div>
            <div class="card-body">
                <h3 class="card-title"><?php echo $content->title ?></h3>
                <p><?php echo TextApi::frenchSpacing($content->header) ?></p>
                <?php if (isset($content->tags)) : ?>
                    <div class="card-platforms">
                        <?php foreach ($content->tags as $tagLoop) : ?>
                            <span class="tag-pill"><?php echo $tagLoop ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <span class="card-more">Lire le tuto <?php echo IconApi::render('arrow-right') ?></span>
            </div>
        </a>

    <?php endforeach; ?>
</div>
