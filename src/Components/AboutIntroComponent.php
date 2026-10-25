<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\ProjectArticlesPage;

class AboutIntroComponent extends ComponentAbstract implements ComponentInterface
{
    const START_YEAR = 2000;

    public function render(): string
    {
        $gameApi = new DataApi(__DIR__ . '/../data/GameMobileList.json');
        $appDesktopApi = new DataApi(__DIR__ . '/../data/AppDesktopList.json');
        $appGlfOsApi = new DataApi(__DIR__ . '/../data/AppGlfOsList.json');
        $articleApi = new DataApi(__DIR__ . '/../data/ProjectArticleList.json');

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/intro.php',
            [
                'startYear' => self::START_YEAR,
                'yearCount' => (int)date('Y') - self::START_YEAR,
                'gameCount' => count($gameApi->findAll()),
                'gamePage' => GamesPage::FILENAME,
                'appCount' => count($appDesktopApi->findAll()) + count($appGlfOsApi->findAll()),
                'appPage' => AppsDestkopPage::FILENAME,
                'articleCount' => count($articleApi->findAll()),
                'articlePage' => ProjectArticlesPage::FILENAME,
            ]
        );
    }
}
