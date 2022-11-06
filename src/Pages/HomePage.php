<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\GameListComponent;
use MyWebsite\Components\HomeBannerComponent;
use MyWebsite\Components\NavComponent;

class HomePage extends PageAbstract implements PageInterface
{
    protected $filename = 'index.html';

    public function render(): string
    {
        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/default.php',
            [
                'nav' => new NavComponent($this->filename),
                'contentList' => [
                    new HomeBannerComponent(),
                    new GameListComponent()
                ]
            ]
        );
    }
}
