<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Components\Shared\GithubCardListComponent;

class ProjectArticleListComponent extends ComponentAbstract implements ComponentInterface
{

    public function render(): string
    {
        $dataApi = new DataApi(__DIR__ . '/../data/ProjectArticleList.json');

        $props = (object)[
            'contentList' => $dataApi->findAll()
        ];

        $component = new GithubCardListComponent($props);
        return $component->render();
    }
}
