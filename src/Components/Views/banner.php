<?php

use MyWebsite\Apis\IconApi;

$gameCount = $this->paramList['gameCount'];
$gamePage = $this->paramList['gamePage'];
$appCount = $this->paramList['appCount'];
$appPage = $this->paramList['appPage'];
?>
<div class="hero">
    <h1>Création de jeux vidéo <br />&amp; applications opensource</h1>
    <p>Développeur passionné, je développe des jeux mobiles et des logiciels libres pour Linux, partagés gratuitement avec leur code source.</p>
</div>

<div class="grid grid-2 activity-grid">
    <a class="activity-card is-games" href="<?php echo $gamePage ?>">
        <span class="activity-icon"><?php echo IconApi::render('gamepad') ?></span>
        <h3>Jeux</h3>
        <p><?php echo $gameCount ?> jeu<?php echo $gameCount > 1 ? 'x' : '' ?> à découvrir</p>
    </a>
    <a class="activity-card is-apps" href="<?php echo $appPage ?>">
        <span class="activity-icon"><?php echo IconApi::render('code') ?></span>
        <h3>Applications opensource</h3>
        <p><?php echo $appCount ?> application<?php echo $appCount > 1 ? 's' : '' ?> à découvrir</p>
    </a>
</div>