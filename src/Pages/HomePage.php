<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\GameListComponent;
use MyWebsite\Components\HomeBannerComponent;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\SectionTitleComponent;

class HomePage extends PageAbstract implements PageInterface
{
    const FILENAME = 'index.html';

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
                    new HomeBannerComponent(),
                    new SectionTitleComponent('Jeux en vedette', 'Voir tous les jeux', GamesPage::FILENAME),
                    new GameListComponent()
                ]
            ]
        );
    }
}
