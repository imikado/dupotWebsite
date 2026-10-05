<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\PageHeaderComponent;
use MyWebsite\Components\ProjectArticleListComponent;

class ProjectArticlesPage extends PageAbstract implements PageInterface
{
    const FILENAME = 'project_article.html';

    public function getFilename(): string
    {
        return self::FILENAME;
    }

    public function render(): string
    {
        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/default.php',
            [
                'nav' => new NavComponent($this->getFilename()),
                'contentList' => [
                    new PageHeaderComponent('Ressources d\'articles', 'Le code source complet de mes articles publiés dans Linux Pratique et GNU/Linux Magazine.', 'Linux Pratique · GNU/Linux Magazine'),
                    new ProjectArticleListComponent()
                ]
            ]
        );
    }
}
