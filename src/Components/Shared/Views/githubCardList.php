<style>
    .modalContent ul li {

        list-style: square;
        list-style-position: inside;
        margin-left: 20px;
    }
</style>

<div class="row">

    <?php foreach ($this->paramList['contentList'] as $i => $content) : ?>


        <div class="col s12">
            <div class="card">
                <?php if (isset($content->icon)) : ?>
                    <div class="card-image">
                        <img src="images/<?php echo $content->icon ?>" alt="Placeholder image">
                    </div>
                <?php endif; ?>

                <div class="card-content">
                    <?php if (isset($content->modal)) : ?>
                        <a class="waves-effect waves-light card-title modal-trigger" href="#modal<?php echo $i ?>"><?php echo $content->title ?><i class="material-icons right">more_vert</i></a>
                    <?php else : ?>
                        <span class="card-title activator orange-text text-darken-4">

                            <?php if (isset($content->date)) : ?>
                                <?php echo $content->date ?><br />
                            <?php endif; ?>

                            <?php echo $content->magazine ?></span>
                    <?php endif; ?>

                    <?php if (isset($content->article)) : ?>
                        <p><?php echo $content->article ?></p>

                        <?php if (isset($content->body)) : ?>

                            <blockquote><?php echo $content->body ?></blockquote>
                        <?php endif; ?>
                        <p>&nbsp;</p>
                        <p class="content-end">
                            <?php if (isset($content->github)) : ?>
                                <a target="_blank" href="<?php echo $content->github ?>"><img src="css/images/button-github.png" /></a>
                            <?php endif; ?>

                            <?php if (isset($content->flathub)) : ?>
                                <a href="<?php echo $content->flathub ?>" target="_blank"><img src="css/images/flathub-badge-en.png" /></a>
                            <?php endif; ?>
                        </p>

                    <?php endif; ?>

                </div>




            </div>
        </div>


    <?php endforeach; ?>
</div>