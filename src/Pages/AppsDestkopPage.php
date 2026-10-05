<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\AppDesktopListComponent;
use MyWebsite\Components\AppListComponent;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\PageHeaderComponent;

class AppsDestkopPage extends PageAbstract implements PageInterface
{
    const FILENAME = 'desktop.html';

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
                    new PageHeaderComponent('Logiciels', 'Des applications libres pour GNU/Linux, pensées pour simplifier votre quotidien d\'utilisateur comme de développeur.', 'GNU/Linux · Open source'),
                    new AppDesktopListComponent()
                ]
            ]
        );
    }
}
