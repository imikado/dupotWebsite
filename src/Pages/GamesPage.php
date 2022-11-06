<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\GameListComponent;
use MyWebsite\Components\NavComponent;

class GamesPage extends PageAbstract implements PageInterface
{
    protected $filename = 'games.html';

    public function render(): string
    {
        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/default.php',
            [
                'nav' => new NavComponent($this->filename),
                'contentList' => [
                    new GameListComponent()
                ]
            ]
        );
    }
}
