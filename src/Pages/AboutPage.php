<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\AboutContributionComponent;
use MyWebsite\Components\AboutIntroComponent;
use MyWebsite\Components\AboutSiteListComponent;
use MyWebsite\Components\NavComponent;

class AboutPage extends PageAbstract implements PageInterface
{

    const FILENAME = 'about.html';

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
                    new AboutIntroComponent(),
                    new AboutSiteListComponent(),
                    new AboutContributionComponent()
                ]
            ]
        );
    }
}
