<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Apis\MarkdownApi;
use MyWebsite\Components\Shared\MobileCardListComponent;

class AppGlfOsListComponent extends ComponentAbstract implements ComponentInterface
{

    public static function loadList()
    {
        $dataApi = new DataApi(__DIR__ . '/../data/AppGlfOsList.json');
        $markdownApi = new MarkdownApi();

        $appGlfOsList = $dataApi->findAll();
        foreach ($appGlfOsList as $appGlfOsLoop) {
            if (isset($appGlfOsLoop->modal)) {
                $appGlfOsLoop->modalContent = $markdownApi->convertDataFile($appGlfOsLoop->modal->src);
            }
        }

        return $appGlfOsList;
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
