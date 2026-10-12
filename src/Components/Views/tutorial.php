<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Apis\TextApi;

$tutorial = $this->paramList['tutorial'];
$stepList = $this->paramList['stepList'];
?>
<a class="back-link" href="<?php echo $this->paramList['backFilename'] ?>"><?php echo IconApi::render('arrow-left') ?>Tutos</a>

<header class="tutorial-hero">
    <span class="chip">Tuto</span>
    <h1><?php echo $tutorial->title ?></h1>
    <p class="project-lead"><?php echo TextApi::frenchSpacing($tutorial->header) ?></p>

    <div class="tutorial-hero-meta">
        <span class="tutorial-meta"><?php echo IconApi::render('clock') ?><?php echo $tutorial->readingTime ?> min de lecture</span>
        <span class="tutorial-meta"><?php echo IconApi::render('list') ?><?php echo count($stepList) ?> étapes</span>
        <?php if (isset($tutorial->tags)) : ?>
            <?php foreach ($tutorial->tags as $tagLoop) : ?>
                <span class="tag-pill"><?php echo $tagLoop ?></span>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</header>

<div class="tutorial-layout">
    <?php if ($stepList) : ?>
        <nav class="tutorial-toc card" aria-label="Sommaire">
            <span class="availability-label"><?php echo IconApi::render('list') ?>Au programme</span>
            <ol>
                <?php foreach ($stepList as $index => $stepLoop) : ?>
                    <li><a href="#etape-<?php echo $index + 1 ?>"><?php echo strip_tags($stepLoop) ?></a></li>
                <?php endforeach; ?>
            </ol>
        </nav>
    <?php endif; ?>

    <div class="card content-card">
        <div class="project-body tutorial-body">
            <?php echo $this->paramList['content'] ?>
        </div>
    </div>
</div>
