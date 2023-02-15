<nav>
    <div class="nav-wrapper white logo">
        <a href="#" class="brand-logo">&nbsp;</a>


        <ul id="nav-mobile" class="sidenav" style="transform: translateX(-105%);">

            <?php foreach ($this->paramList['linkList'] as $label => $link) : ?>
                <li <?php if ($link == $this->paramList['pageSelected']) : ?>class="active" <?php endif; ?>><a href="<?php echo $link ?>"><?php echo $label ?></a></li>
            <?php endforeach; ?>


        </ul>


        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php foreach ($this->paramList['linkList'] as $label => $link) : ?>

                <li <?php if ($link == $this->paramList['pageSelected']) : ?>class="active" <?php endif; ?>>
                    <?php if ($label == 'Github') : ?>
                        <a class="github" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
                    <?php elseif ($label == 'Twitter') : ?>
                        <a class="twitter" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
                    <?php elseif ($label == 'Github') : ?>
                        <a class="github" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
                    <?php elseif ($label == 'Itchio') : ?>
                        <a class="itchio" target="_blank" href="<?php echo $link ?>">&nbsp;</a>
                    <?php else : ?>
                        <a class="orange-text text-darken-4" href="<?php echo $link ?>"><?php echo $label ?></a>

                    <?php endif; ?>
                </li>

            <?php endforeach; ?>

        </ul>

        <a style="float:right" href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons orange-text">menu</i></a>



    </div>
</nav>