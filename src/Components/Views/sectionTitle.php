<?php

use MyWebsite\Apis\IconApi;
?>
<div class="section-title-row">
    <h2><?php echo $this->paramList['title'] ?></h2>

    <?php if ($this->paramList['seeAllLink']) : ?>
        <a href="<?php echo $this->paramList['seeAllLink'] ?>"><?php echo $this->paramList['seeAllLabel'] ?> <?php echo IconApi::render('arrow-right') ?></a>
    <?php endif; ?>
</div>
