<nav class="navbar navbar-wrapper navbar-default navbar-fade is-transparent" role="navigation" aria-label="main navigation">





    <div class="navbar-brand">
        <a class="navbar-item" href="index.html">
            <img src="css/images/logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>



    <div class="navbar-menu  " id="navbar-menu">

        <?php foreach ($this->propsList['linkList'] as $label => $link) : ?>




            <?php if ($label == 'Github') : ?>
                <a class="navbar-item github" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
            <?php elseif ($label == 'Twitter') : ?>
                <a class="navbar-item twitter" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
            <?php elseif ($label == 'Github') : ?>
                <a class="navbar-item github" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
            <?php elseif ($label == 'Itchio') : ?>
                <a class="navbar-item itchio" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
            <?php else : ?>
                <a class="navbar-item <?php if ($link == $this->propsList['pageSelected']) : ?>is-active<?php endif; ?>" href="<?php echo $link ?>"><?php echo $label ?></a>

            <?php endif; ?>
        <?php endforeach; ?>

    </div>


</nav>