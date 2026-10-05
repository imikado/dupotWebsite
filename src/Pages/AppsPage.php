<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\AppMobileListComponent;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\PageHeaderComponent;

class AppsPage extends PageAbstract implements PageInterface
{
    const FILENAME = 'mobile.html';

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
                    new PageHeaderComponent('Apps mobile', 'Des applications Android simples et utiles.', 'Android'),
                    new AppMobileListComponent()
                ]
            ]
        );
    }
}
