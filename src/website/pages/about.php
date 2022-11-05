<h1 class="title  is-1">Pr&eacute;sentation</h1>
<div style="margin-left:10px;float:right">
    <figure class="image is-72x72"><img class="is-rounded" src="css/images/avatarpro_web.jpg" /></figure>
</div>

<div class="content" style="text-align:justify">
    <?php echo str_replace('Ben Curdy', '<a href="https://twitter.com/bcurdy" target="_blank">Ben Curdy</a>', nl2br(htmlentities("Développeur autodidacte, j'ai commencé à apprendre le developpement php dans les années 2000, d'abord pour mon premier site personnel, un modeste journal en ligne puis pour faire d'autres projets personnels divers et variés (roman participatif..).
Féru de nouvelles technologies, j'ai continué mon apprentissage du javascript, puis Flash et son language dynamique actionscript... 
Mes diverses expériences m'ont permis petit à petit d'en faire aujourd'hui mon métier.

Sur mon temps personnel, je créé des applications/jeux mobiles, écris pour le magazine Linux Pratique/Magazine, développe mon framework php opensource et mon site de prévention.

Amateur de logiciel libre, vous avez pu m'entendre en tant qu'animateur du podcast opensource nipSource (de la galaxie nipCast, merci à Ben Curdy de nous avoir fait confiance ;)
Je développe au quotidien avec des solutions libres comme Visual Studio Code, Godot, Android Studio le tout sous Linux Mint

Et accessoirement: membre actif de la communauté TechCafé
"))); ?></div>


<php $contentList=array( );?>

    <h2 class="subtitle is-2">Mes sites</h2>

    <table class="table is-fullwidth">

        <?php foreach ($this->propsList['contentList'] as $content) : ?>
            <tr>
                <td class="icon-td">
                    <figure class="image is-48x48"><img class="is-rounded" src="<?php echo $content['image'] ?>" alt="" /></figure>
                </td>

                <td>
                    <h3 class="subtitle is-4"><?php echo $content['title'] ?></h3>
                    <p><?php echo $content['body'] ?></p>
                    <p><a href="<?php echo $content['link'] ?>" target="_blank" class="secondary-content"><i class="material-icons"><?php echo $content['link_label'] ?></i></a></p>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>

    <h2 class="subtitle is-2">En savoir plus</h2>

    <table class="table is-fullwidth">

        <?php foreach ($this->propsList['contentList2'] as $content) : ?>
            <tr>
                <td class="icon-td">
                    <figure class="image is-48x48"><img class="is-rounded" src="<?php echo $content['image'] ?>" alt="" /></figure>
                </td>

                <td>
                    <h3 class="subtitle is-4"><?php echo $content['title'] ?></h3>
                    <p><?php echo $content['body'] ?></p>
                    <p><a href="<?php echo $content['link'] ?>" target="_blank" class="secondary-content"><i class="material-icons"><?php echo $content['link_label'] ?></i></a></p>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>