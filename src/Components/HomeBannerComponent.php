<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\GamesPage;

class HomeBannerComponent extends ComponentAbstract implements ComponentInterface
{
    public function render(): string
    {
        $gameApi = new DataApi(__DIR__ . '/../data/GameMobileList.json');
        $appDesktopApi = new DataApi(__DIR__ . '/../data/AppDesktopList.json');

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/banner.php',
            [
                'gameCount' => count($gameApi->findAll()),
                'gamePage' => GamesPage::FILENAME,
                'appCount' => count($appDesktopApi->findAll()),
                'appPage' => AppsDestkopPage::FILENAME,
            ]
        );
    }
}
