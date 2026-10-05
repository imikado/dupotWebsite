<?php

use MyWebsite\Apis\IconApi;

$gameCount = $this->paramList['gameCount'];
$gamePage = $this->paramList['gamePage'];
$appCount = $this->paramList['appCount'];
$appPage = $this->paramList['appPage'];
$libCount = $this->paramList['libCount'];
$libPage = $this->paramList['libPage'];
?>
<div class="hero">
    <span class="eyebrow">Libre · Gratuit · Fait main</span>
    <h1>Création de jeux vidéo <br />&amp; applications opensource</h1>
    <p>Développeur passionné, je crée des jeux, des logiciels libres pour Linux et des librairies pour développeurs, partagés gratuitement avec leur code source.</p>
    <div class="hero-actions">
        <a class="btn btn-primary" href="<?php echo $gamePage ?>"><?php echo IconApi::render('gamepad') ?>Découvrir les jeux</a>
        <a class="btn btn-ghost" href="<?php echo $appPage ?>"><?php echo IconApi::render('code') ?>Voir les logiciels</a>
        <a class="btn btn-ghost" href="<?php echo $libPage ?>"><?php echo IconApi::render('package') ?>Librairies</a>
    </div>
</div>

<div class="grid grid-3 activity-grid">
    <a class="activity-card is-games" href="<?php echo $gamePage ?>">
        <span class="activity-icon"><?php echo IconApi::render('gamepad') ?></span>
        <h3>Jeux</h3>
        <p><?php echo $gameCount ?> jeu<?php echo $gameCount > 1 ? 'x' : '' ?> à découvrir</p>
        <span class="activity-arrow"><?php echo IconApi::render('arrow-right') ?></span>
    </a>
    <a class="activity-card is-apps" href="<?php echo $appPage ?>">
        <span class="activity-icon"><?php echo IconApi::render('code') ?></span>
        <h3>Logiciels</h3>
        <p><?php echo $appCount ?> application<?php echo $appCount > 1 ? 's' : '' ?> à découvrir</p>
        <span class="activity-arrow"><?php echo IconApi::render('arrow-right') ?></span>
    </a>
    <a class="activity-card is-libs" href="<?php echo $libPage ?>">
        <span class="activity-icon"><?php echo IconApi::render('package') ?></span>
        <h3>Librairies &amp; outils</h3>
        <p><?php echo $libCount ?> projet<?php echo $libCount > 1 ? 's' : '' ?> pour développeurs</p>
        <span class="activity-arrow"><?php echo IconApi::render('arrow-right') ?></span>
    </a>
</div>