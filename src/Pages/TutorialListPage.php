<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\PageHeaderComponent;
use MyWebsite\Components\TutorialListComponent;

class TutorialListPage extends PageAbstract implements PageInterface
{

    const FILENAME = 'tutorials.html';

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
                    new PageHeaderComponent('Tutos', 'Des guides pas à pas pour publier et distribuer vos applications Linux.', 'Guides'),
                    new TutorialListComponent()
                ]
            ]
        );
    }
}
