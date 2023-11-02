<style>
    .modalContent ul li {

        list-style: square;
        list-style-position: inside;
        margin-left: 20px;
    }

    .logos {
        margin-top: 30px;
    }

    .block {
        height: 180px;
    }
</style>


<?php

use MyWebsite\Pages\TutorialPage;

foreach ($this->paramList['contentList'] as $i => $content) : ?>



    <div class="row">

        <div class="card darken-1">
            <div class="card-content">
                <span class="card-title"><?php echo $content->title ?></span>
                <p><?php echo $content->header ?></p>
            </div>
            <div class="card-action">
                <a href="<?php echo TutorialPage::getFilenameById($content->id) ?>">Lire la suite...</a>
            </div>
        </div>
    </div>




<?php endforeach; ?>