<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\ResourcesPage;

class HomeBannerComponent extends ComponentAbstract implements ComponentInterface
{
    public function render(): string
    {
        $gameApi = new DataApi(__DIR__ . '/../data/GameMobileList.json');
        $appDesktopApi = new DataApi(__DIR__ . '/../data/AppDesktopList.json');
        $appGlfOsApi = new DataApi(__DIR__ . '/../data/AppGlfOsList.json');
        $resourceApi = new DataApi(__DIR__ . '/../data/ResourcesList.json');

        // les 3 derniers jeux avec une vignette illustrent le bandeau
        $showcaseList = array_slice(array_values(array_filter($gameApi->findAll(), function ($game) {
            return isset($game->thumbnail);
        })), 0, 3);

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/banner.php',
            [
                'showcaseList' => $showcaseList,
                'gameCount' => count($gameApi->findAll()),
                'gamePage' => GamesPage::FILENAME,
                'appCount' => count($appDesktopApi->findAll()) + count($appGlfOsApi->findAll()),
                'appPage' => AppsDestkopPage::FILENAME,
                'libCount' => count($resourceApi->findAll()),
                'libPage' => ResourcesPage::FILENAME,
            ]
        );
    }
}
