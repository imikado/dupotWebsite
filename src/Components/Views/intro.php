<?php

// sprites des jeux (bandes horizontales recadrées) : largeur, hauteur, nombre d'images
$spriteList = [
    'gordon-attack' => [48, 38, 4],
    'sheep-walk' => [27, 15, 2],
    'trex-idle' => [55, 30, 4],
    'spider-walk' => [38, 26, 5],
    'ant-walk' => [26, 29, 3],
    'moto-ride' => [64, 36, 3],
];

$sprite = function (string $name, int $scale, string $class = '') use ($spriteList) {
    list($width, $height, $frameCount) = $spriteList[$name];
    return '<span class="px-sprite ' . $class . '" style="--img: url(/images/pixel/' . $name . '.png); --w: ' . $width . '; --h: ' . $height . '; --n: ' . $frameCount . '; --s: ' . $scale . '"></span>';
};

$castList = [
    ['gordon-attack', 'Gordon', 'Le héros de mes jeux'],
    ['sheep-walk', 'Le mouton', 'Save the Sheep'],
    ['trex-idle', 'Le T-Rex', 'Save the Sheep'],
    ['moto-ride', 'Gordon à moto', 'Save the Sheep, niveau bonus'],
    ['spider-walk', "L'araignée", 'Beat Match to Pass'],
    ['ant-walk', 'La fourmi', 'Beat Match to Pass'],
];

$inventoryList = [
    'Langages' => ['PHP', 'Dart', 'GDScript', 'JavaScript', 'Python'],
    'Technologies' => ['Godot', 'Flutter', 'Web'],
    'OS' => ['LMDE', 'GLF OS'],
];

// étoiles du ciel : graine fixe pour garder le même ciel à chaque génération
mt_srand(2000);
?>
<section class="px-hero">
    <div class="px-stars" aria-hidden="true">
        <?php for ($i = 0; $i < 46; $i++) : ?>
            <span style="top: <?php echo mt_rand(2, 70) ?>%; left: <?php echo mt_rand(1, 99) ?>%; --size: <?php echo mt_rand(1, 2) * 3 ?>px; animation-delay: -<?php echo mt_rand(0, 40) / 10 ?>s"></span>
        <?php endfor; ?>
    </div>

    <div class="px-hero-inner">
        <div class="px-portrait px-border">
            <img src="images/pixel/avatar-pixel.png" alt="Portrait de Michael Bertocchi en pixel art">
        </div>

        <div class="px-hero-text">
            <span class="px-label">Player 1</span>
            <h1 class="px-title">Michael Bertocchi</h1>
            <p class="px-lead">Développeur autodidacte, je crée des jeux en pixel art et des logiciels libres pour GNU/Linux, et je partage le code de tout ce que je fais.</p>

            <div class="px-hud">
                <span class="px-hud-item" title="Années de développement, depuis <?php echo $this->paramList['startYear'] ?>"><span>Niv.</span><strong><?php echo $this->paramList['yearCount'] ?></strong></span>
                <a class="px-hud-item" href="<?php echo $this->paramList['gamePage'] ?>"><span>Jeux</span><strong><?php echo $this->paramList['gameCount'] ?></strong></a>
                <a class="px-hud-item" href="<?php echo $this->paramList['appPage'] ?>"><span>Logiciels</span><strong><?php echo $this->paramList['appCount'] ?></strong></a>
                <a class="px-hud-item" href="<?php echo $this->paramList['articlePage'] ?>"><span>Articles</span><strong><?php echo $this->paramList['articleCount'] ?></strong></a>
            </div>
            <p class="px-hud-note">Niveau = années de développement, depuis <?php echo $this->paramList['startYear'] ?></p>
        </div>
    </div>

    <div class="px-scene" aria-hidden="true">
        <div class="px-chase">
            <?php echo $sprite('gordon-attack', 3) ?>
            <?php echo $sprite('trex-idle', 3) ?>
            <?php echo $sprite('sheep-walk', 3) ?>
        </div>
        <div class="px-ground"></div>
    </div>
</section>

<section class="px-section">
    <h2 class="px-heading"><span class="px-heading-icon"></span>Mon histoire</h2>

    <div class="px-dialogs">
        <div class="px-dialog px-border">
            <span class="px-chapter">Chapitre 1</span>
            <h3>Parcours</h3>
            <p>Développeur autodidacte, j'ai commencé à apprendre le développement PHP dans les années 2000, d'abord pour mon premier site personnel, un modeste journal en ligne (L'info est à vous), puis pour d'autres projets personnels divers et variés (roman participatif «&nbsp;Au fil des mots&nbsp;», site de prévention…).</p>
            <p>Féru de nouvelles technologies, j'ai continué avec PHP, JavaScript, puis Flash et son langage ActionScript, d'abord via Macromedia Flash, puis sous GNU/Linux avec MTASC et Haxe pour générer mes swf… Mes divers projets et expériences m'ont permis, petit à petit, d'en faire mon métier.</p>
        </div>

        <div class="px-dialog px-border">
            <span class="px-chapter">Chapitre 2</span>
            <h3>Aujourd'hui</h3>
            <p>Sur mon temps personnel, je crée des jeux et des applications pour Linux, j'écris des articles pour Linux Pratique et GNU/Linux Magazine, je développe mon framework PHP open source, mon site de prévention et d'autres projets libres, tous disponibles sur mon GitHub.</p>
            <p>Je développe au quotidien avec Visual Studio Code et Godot, le tout sous LMDE ou Kubuntu selon l'humeur du moment.</p>
        </div>

        <div class="px-dialog px-border">
            <span class="px-chapter">Chapitre 3</span>
            <h3>Logiciel libre</h3>
            <p>Amateur de logiciel libre, vous avez pu m'entendre en tant qu'animateur du podcast open source nipSource (de la galaxie nipCast, merci à <a href="https://twitter.com/bcurdy" target="_blank">Ben Curdy</a> de nous avoir fait confiance&nbsp;;)</p>
            <p>Et accessoirement&nbsp;: je fais partie de l'équipe de GLF OS, une jeune distribution GNU/Linux française, et je suis membre actif des communautés Gaming Linux FR et TechCafé.</p>
            <span class="px-dialog-next" aria-hidden="true">▼</span>
        </div>
    </div>
</section>

<div class="px-split">
    <section class="px-section">
        <h2 class="px-heading"><span class="px-heading-icon"></span>Inventaire</h2>
        <?php foreach ($inventoryList as $categoryLoop => $itemList) : ?>
            <div class="px-inventory-group">
                <span class="px-chapter"><?php echo $categoryLoop ?></span>
                <div class="px-inventory">
                    <?php foreach ($itemList as $itemLoop) : ?>
                        <span class="px-slot px-border"><?php echo $itemLoop ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="px-section">
        <h2 class="px-heading"><span class="px-heading-icon"></span>Les personnages de mes jeux</h2>
        <div class="px-cast">
            <?php foreach ($castList as $castLoop) : ?>
                <a class="px-cast-tile px-border" href="<?php echo $this->paramList['gamePage'] ?>">
                    <div class="px-cast-stage"><?php echo $sprite($castLoop[0], 2) ?></div>
                    <strong><?php echo $castLoop[1] ?></strong>
                    <span><?php echo $castLoop[2] ?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
</div>
