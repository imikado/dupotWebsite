<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\AppDesktopListComponent;
use MyWebsite\Components\AppGlfOsListComponent;
use MyWebsite\Components\AppListComponent;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\PageHeaderComponent;
use MyWebsite\Components\SectionTitleComponent;

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
                    new SectionTitleComponent('Pour toutes les distributions', null, null, 'Des applications à installer sur n\'importe quelle distribution GNU/Linux.'),
                    new AppDesktopListComponent(),
                    new SectionTitleComponent('Pour GLF OS', null, null, 'Des outils propres à <a href="https://github.com/Gaming-Linux-FR/GLF-OS" target="_blank">GLF OS</a>, la distribution GNU/Linux basée sur NixOS, et livrés avec elle.'),
                    new AppGlfOsListComponent()
                ]
            ]
        );
    }
}
