<?php

use MyWebsite\Apis\IconApi;
?>
<h2 style="margin-top: 20px;"><?php echo $this->paramList['title'] ?></h2>

<ul class="link-list">

    <?php foreach ($this->paramList['contentList'] as $content) : ?>

        <li>
            <img src="<?php echo $content['image'] ?>" alt="">
            <div class="link-list-text">
                <strong><?php echo $content['title'] ?></strong>
                <span><?php echo $content['body'] ?></span>
            </div>
            <a class="link-list-action" href="<?php echo $content['link'] ?>" target="_blank" title="<?php echo $content['link_label'] ?>">
                <?php echo $content['link_label'] ?> <?php echo IconApi::render('link-external') ?>
            </a>
        </li>

    <?php endforeach; ?>

</ul>