<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\GameListComponent;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\PageHeaderComponent;

class GamesPage extends PageAbstract implements PageInterface
{

    const FILENAME = 'games.html';

    public function getFilename(): string
    {
        return self::FILENAME;
    }

    public function render(): string
    {

        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/default.php',
            [
                'nav' => new NavComponent($this->getFilename()),
                'contentList' => [
                    new PageHeaderComponent('Jeux', 'Des jeux d\'action et d\'aventure en pixel art, gratuits et open source, à jouer sur Linux et sur itch.io.', 'Pixel art · Open source'),
                    new GameListComponent()
                ]
            ]
        );
    }
}
