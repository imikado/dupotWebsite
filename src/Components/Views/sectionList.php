<?php

use MyWebsite\Apis\IconApi;
?>
<section class="about-link-section">
<h2 class="px-heading px-heading-small"><span class="px-heading-icon"></span><?php echo $this->paramList['title'] ?></h2>

<div class="about-link-grid">

    <?php foreach ($this->paramList['contentList'] as $content) : ?>

        <a class="about-link-tile px-border" href="<?php echo $content['link'] ?>" target="_blank">
            <img src="<?php echo $content['image'] ?>" alt="">
            <div class="about-link-text">
                <strong><?php echo $content['title'] ?></strong>
                <span><?php echo $content['body'] ?></span>
                <span class="about-link-url"><?php echo $content['link_label'] ?> <?php echo IconApi::render('link-external') ?></span>
            </div>
        </a>

    <?php endforeach; ?>

</div>
</section>
