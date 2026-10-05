<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\AppDesktopListComponent;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\PageHeaderComponent;
use MyWebsite\Components\ResourcesListComponent;

class ResourcesPage extends PageAbstract implements PageInterface
{
    const FILENAME = 'resources.html';

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
                    new PageHeaderComponent('Librairies & co', 'Des frameworks PHP légers et des plugins pour accélérer vos projets web et vos créations de jeux. Libres, documentés et prêts à l\'emploi.', 'Pour les développeurs · Open source'),
                    new ResourcesListComponent()
                ]
            ]
        );
    }
}
