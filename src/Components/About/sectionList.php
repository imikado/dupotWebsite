<h2 class="subtitle is-2"><?php echo $this->paramList['title'] ?></h2>

<table class="table is-fullwidth">

    <?php foreach ($this->paramList['contentList'] as $content) : ?>
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