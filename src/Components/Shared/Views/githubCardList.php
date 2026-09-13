<div class="grid">

    <?php foreach ($this->paramList['contentList'] as $content) : ?>

        <div class="card magazine-card">

            <?php if (isset($content->icon)) : ?>
                <img src="images/<?php echo $content->icon ?>" alt="">
            <?php endif; ?>

            <div>
                <?php if (isset($content->date) || isset($content->magazine)) : ?>
                    <div class="magazine-meta">
                        <?php if (isset($content->date)) : ?><?php echo $content->date ?> &middot; <?php endif; ?>
                        <?php echo $content->magazine ?? '' ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($content->article)) : ?>
                    <p><strong><?php echo $content->article ?></strong></p>
                <?php endif; ?>

                <?php if (isset($content->body)) : ?>
                    <blockquote><?php echo $content->body ?></blockquote>
                <?php endif; ?>

                <p class="magazine-links">
                    <?php if (isset($content->github)) : ?>
                        <a target="_blank" href="<?php echo $content->github ?>"><img src="css/images/button-github.png" /></a>
                    <?php endif; ?>

                    <?php if (isset($content->flathub)) : ?>
                        <a href="<?php echo $content->flathub ?>" target="_blank"><img src="css/images/flathub-badge-en.png" /></a>
                    <?php endif; ?>
                </p>
            </div>

        </div>

    <?php endforeach; ?>
</div>
