<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Apis\MarkdownApi;
use MyWebsite\Components\Shared\MobileCardListComponent;

class AppDesktopListComponent extends ComponentAbstract implements ComponentInterface
{

    public function render(): string
    {
        $dataApi = new DataApi(__DIR__ . '/../data/AppDesktopList.json');

        $markdownApi = new MarkdownApi();

        $appDesktopList = $dataApi->findAll();
        foreach ($appDesktopList as $appDesktopLoop) {
            if (isset($appDesktopLoop->modal)) {
                $appDesktopLoop->modalContent = $markdownApi->convertDataFile($appDesktopLoop->modal->src);
            }
        }

        $props = (object)[
            'contentList' => $appDesktopList
        ];

        $component = new MobileCardListComponent($props);
        return $component->render();
    }
}
