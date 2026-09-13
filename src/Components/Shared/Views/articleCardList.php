<?php

use MyWebsite\Apis\IconApi;
use MyWebsite\Pages\TutorialPage;

?>
<div class="grid grid-2">

    <?php foreach ($this->paramList['contentList'] as $content) : ?>

        <a class="card card-link" href="<?php echo TutorialPage::getFilenameById($content->id) ?>">
            <div class="card-body">
                <h3 class="card-title"><?php echo $content->title ?></h3>
                <p><?php echo $content->header ?></p>
                <span class="card-more">Lire la suite <?php echo IconApi::render('arrow-right') ?></span>
            </div>
        </a>

    <?php endforeach; ?>
</div>
