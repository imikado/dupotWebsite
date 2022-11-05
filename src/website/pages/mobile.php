<div class="columns  is-multiline  ">

    <?php foreach ($this->propsList['contentList'] as $i => $content) : ?>


        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="images/<?php echo $content['icon'] ?>" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">

                        <div class="media-content">
                            <p class="title is-4"><?php echo $content['title'] ?></p>
                        </div>
                    </div>

                    <div class="content">
                        <p class="is-justified"><?php echo $content['body'] ?></p>


                        <p class="content-centered">
                            <a class="github-repo button is-info " href="#">Projet Github</a>
                        </p>
                        <p class="content-centered">
                            <a href="https://play.google.com/store/apps/details?id=<?php echo $content['idplaystore'] ?>" target="_blank"><img src="css/images/google-playstore.png" /></a>
                        </p>

                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>