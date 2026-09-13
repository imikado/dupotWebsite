<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Apis\MarkdownApi;
use MyWebsite\Components\Shared\MobileCardListComponent;

class GameListComponent extends ComponentAbstract implements ComponentInterface
{

    public static function loadList()
    {
        $dataApi = new DataApi(__DIR__ . '/../data/GameMobileList.json');
        $markdownApi = new MarkdownApi();

        $gameList = $dataApi->findAll();
        foreach ($gameList as $gameLoop) {
            if (isset($gameLoop->modal)) {
                $gameLoop->modalContent = $markdownApi->convertDataFile($gameLoop->modal->src);
            }
        }

        return $gameList;
    }

    public function render(): string
    {
        $props = (object)[
            'contentList' => self::loadList()
        ];

        $component = new MobileCardListComponent($props);
        return $component->render();
    }
}
