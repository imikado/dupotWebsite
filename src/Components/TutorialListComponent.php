<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Components\Shared\ArticleCardListComponent;

class TutorialListComponent extends ComponentAbstract implements ComponentInterface
{
    public function render(): string
    {
        $dataApi = new DataApi(__DIR__ . '/../data/TutorialList.json');

        $props = (object)[
            'contentList' => $dataApi->findAll()
        ];

        $component = new ArticleCardListComponent($props);
        return $component->render();
    }
}
