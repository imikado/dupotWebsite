<div class="row">

    <?php foreach ($this->paramList['contentList'] as $i => $content) : ?>


        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="images/<?php echo $content->icon ?>" alt="Placeholder image">
                </div>




                <div class="card-content">
                    <span class="card-title activator orange-text text-darken-4"><?php echo $content->title ?><i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal">
                    <span class="card-title orange-text text-darken-4"><?php echo $content->title ?><i class="material-icons right">close</i></span>


                    <p class="is-justified"><?php echo $content->body ?></p>



                    <?php if (isset($content->github)) : ?>
                        <p class="content-centered">
                            <a class="github-repo btn waves-effect waves-ligh" target="_blank" href="<?php echo $content->github ?>">Projet Github</a>
                        </p>
                    <?php endif; ?>
                    <?php if (isset($content->demo)) : ?>
                        <p class="content-centered">
                            <a class=" btn waves-effect waves-ligh" href="<?php echo $content->demo ?>" target="_blank">DEMO</a>
                        </p>
                    <?php endif; ?>

                    <?php if (isset($content->idplaystore)) : ?>
                        <p class="content-centered">
                            <a href="https://play.google.com/store/apps/details?id=<?php echo $content->idplaystore ?>" target="_blank"><img src="css/images/google-playstore.png" /></a>
                        </p>
                    <?php endif; ?>

                </div>




            </div>
        </div>


    <?php endforeach; ?>
</div>