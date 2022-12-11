<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Components\Shared\MobileCardListComponent;

class AppMobileListComponent extends ComponentAbstract implements ComponentInterface
{

    public function render(): string
    {
        $dataApi = new DataApi(__DIR__ . '/../data/AppMobileList.json');

        $props = (object)[
            'contentList' => $dataApi->findAll()
        ];

        $component = new MobileCardListComponent($props);
        return $component->render();
    }
}
