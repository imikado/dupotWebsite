<?php

use MyWebsite\Apis\IconApi;

$showcaseList = $this->paramList['showcaseList'];
$gameCount = $this->paramList['gameCount'];
$gamePage = $this->paramList['gamePage'];
$appCount = $this->paramList['appCount'];
$appPage = $this->paramList['appPage'];
$libCount = $this->paramList['libCount'];
$libPage = $this->paramList['libPage'];
?>
<div class="hero">
    <div class="hero-text">
        <span class="eyebrow">libre · gratuit · fait main</span>
        <h1>Création de jeux vidéo
            & applications opensource</h1>
        <p>Développeur passionné, je crée des jeux, des logiciels pour Linux et des librairies pour développeurs, partagés gratuitement avec leur code source.</p>
        <div class="hero-actions">
            <a class="btn btn-primary" href="<?php echo $gamePage ?>">Découvrir les jeux<?php echo IconApi::render('arrow-right') ?></a>
            <a class="btn btn-ghost" href="<?php echo $appPage ?>">Voir les logiciels</a>
        </div>
        <dl class="hero-stats">
            <div>
                <dt><?php echo $gameCount ?></dt>
                <dd>jeu<?php echo $gameCount > 1 ? 'x' : '' ?></dd>
            </div>
            <div>
                <dt><?php echo $appCount ?></dt>
                <dd>logiciel<?php echo $appCount > 1 ? 's' : '' ?></dd>
            </div>
            <div>
                <dt><?php echo $libCount ?></dt>
                <dd>librairie<?php echo $libCount > 1 ? 's' : '' ?></dd>
            </div>
            <div>
                <dt>100&nbsp;%</dt>
                <dd>open source</dd>
            </div>
        </dl>
    </div>

    <?php if ($showcaseList) : ?>
        <div class="hero-showcase">
            <?php foreach ($showcaseList as $gameLoop) : ?>
                <a href="app_<?php echo $gameLoop->id ?>.html"><img src="images/<?php echo $gameLoop->thumbnail ?>" alt="<?php echo $gameLoop->title ?>"></a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<div class="grid grid-3 activity-grid">
    <a class="activity-card is-games" href="<?php echo $gamePage ?>">
        <span class="activity-index">01 — jeux</span>
        <h3>Jeux vidéo</h3>
        <p>Aventure, réflexion, arcade&nbsp;: jouables sur Linux et dans le navigateur.</p>
        <span class="activity-more"><?php echo $gameCount ?> jeu<?php echo $gameCount > 1 ? 'x' : '' ?><?php echo IconApi::render('arrow-right') ?></span>
    </a>
    <a class="activity-card is-apps" href="<?php echo $appPage ?>">
        <span class="activity-index">02 — logiciels</span>
        <h3>Logiciels Linux</h3>
        <p>Des applications natives pour simplifier le quotidien, publiées sur Flathub.</p>
        <span class="activity-more"><?php echo $appCount ?> application<?php echo $appCount > 1 ? 's' : '' ?><?php echo IconApi::render('arrow-right') ?></span>
    </a>
    <a class="activity-card is-libs" href="<?php echo $libPage ?>">
        <span class="activity-index">03 — librairies</span>
        <h3>Librairies &amp; outils</h3>
        <p>Frameworks PHP et plugins pour les développeurs et les graphistes.</p>
        <span class="activity-more"><?php echo $libCount ?> projet<?php echo $libCount > 1 ? 's' : '' ?><?php echo IconApi::render('arrow-right') ?></span>
    </a>
</div>