<style>
    .modalContent ul li {

        list-style: square;
        list-style-position: inside;
        margin-left: 20px;
    }

    .logos {
        margin-top: 30px;
    }
</style>

<div class="row">

    <?php foreach ($this->paramList['contentList'] as $i => $content) : ?>


        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                    <img src="images/<?php echo $content->icon ?>" alt="Placeholder image">
                </div>


                <div class="card-content">
                    <?php if (isset($content->modal)) : ?>
                        <a class="waves-effect waves-light card-title modal-trigger" href="#modal<?php echo $i ?>"><?php echo $content->title ?><i class="material-icons right">more_vert</i></a>
                    <?php else : ?>
                        <span class="card-title activator orange-text text-darken-4"><?php echo $content->title ?><i class="material-icons right">more_vert</i></span>
                    <?php endif; ?>
                </div>
                <div class="card-reveal">
                    <span class="card-title orange-text text-darken-4"><?php echo $content->title ?><i class="material-icons right">close</i></span>


                    <p class="is-justified"><?php echo $content->body ?></p>

                    <p class="content-centered logos">

                        <?php if (isset($content->github)) : ?>

                            <a target="_blank" href="<?php echo $content->github ?>"><img src="css/images/button-github.png" /></a>

                        <?php endif; ?>
                        <?php if (isset($content->demo)) : ?>
                            <a class=" btn waves-effect waves-ligh" href="<?php echo $content->demo ?>" target="_blank">DEMO</a>
                        <?php endif; ?>

                        <?php if (isset($content->itchio)) : ?>
                            <a href="<?php echo $content->itchio ?>" target="_blank"><img src="css/images/button-itchio-black.png" /></a>
                        <?php endif; ?>

                        <?php if (isset($content->idplaystore)) : ?>
                            <a href="https://play.google.com/store/apps/details?id=<?php echo $content->idplaystore ?>" target="_blank"><img src="css/images/google-playstore.png" /></a>
                        <?php endif; ?>

                        <?php if (isset($content->flathub)) : ?>
                            <a href="<?php echo $content->flathub ?>" target="_blank"><img src="css/images/flathub-badge-en.png" /></a>
                        <?php endif; ?>

                        <?php if (isset($content->snapcraft)) : ?>
                            <a href="<?php echo $content->snapcraft ?>" target="_blank"><img src="css/images/snap-store-black.png" /></a>
                        <?php endif; ?>
                    </p>


                </div>




            </div>
        </div>


    <?php endforeach; ?>
</div>

<?php foreach ($this->paramList['contentList'] as $i => $content) : ?>

    <?php if (isset($content->modalContent)) : ?>
        <div id="modal<?php echo $i ?>" class="modal">
            <div class="modal-content modalContent">
                <?php echo $content->modalContent ?>
            </div>
            <div class="modal-footer">

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

                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fermer</a>
            </div>
        </div>

    <?php endif; ?>

<?php endforeach; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, []);
    });
</script>