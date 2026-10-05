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
                    new PageHeaderComponent('Librairies & co', 'Frameworks, plugins et outils que j\'ai développés et que je partage librement.', 'Open source'),
                    new ResourcesListComponent()
                ]
            ]
        );
    }
}
