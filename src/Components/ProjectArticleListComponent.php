<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;

class ProjectArticleListComponent extends ComponentAbstract implements ComponentInterface
{

    public function render(): string
    {
        $dataApi = new DataApi(__DIR__ . '/../data/ProjectArticleList.json');
        $articleList = $dataApi->findAll();

        // frise : les articles regroupés par année, du plus récent au plus ancien
        $articleListByYear = [];
        $repoCount = 0;
        foreach ($articleList as $articleLoop) {
            $articleListByYear[$articleLoop->year][] = $articleLoop;
            $repoCount += count($articleLoop->repos);
        }
        krsort($articleListByYear);

        $yearList = array_keys($articleListByYear);

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/articleList.php',
            [
                'articleListByYear' => $articleListByYear,
                'articleCount' => count($articleList),
                'repoCount' => $repoCount,
                'firstYear' => end($yearList),
                'lastYear' => reset($yearList),
            ]
        );
    }
}
