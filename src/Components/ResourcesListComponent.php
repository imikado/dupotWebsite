<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Apis\MarkdownApi;
use MyWebsite\Components\Shared\MobileCardListComponent;

class ResourcesListComponent extends ComponentAbstract implements ComponentInterface
{

    public static function loadList()
    {
        $dataApi = new DataApi(__DIR__ . '/../data/ResourcesList.json');
        $markdownApi = new MarkdownApi();

        $resourceList = $dataApi->findAll();
        foreach ($resourceList as $resourceLoop) {
            if (isset($resourceLoop->modal)) {
                $resourceLoop->modalContent = $markdownApi->convertDataFile($resourceLoop->modal->src);
            }
        }

        return $resourceList;
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
