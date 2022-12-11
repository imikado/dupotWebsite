<h2 class=""><?php echo $this->paramList['title'] ?></h2>


<ul class="collection">

    <?php foreach ($this->paramList['contentList'] as $content) : ?>



        <li class="collection-item avatar">
            <img src="<?php echo $content['image'] ?>" alt="" class="circle">
            <span class="title"><?php echo $content['title'] ?></span>
            <p><?php echo $content['body'] ?></p>
            <a href="<?php echo $content['link'] ?>" target="_blank" title="<?php echo $content['link_label'] ?>" class="secondary-content"><?php echo $content['link_label'] ?> <i class="material-icons">insert_link</i></a>
        </li>



    <?php endforeach; ?>

</ul>