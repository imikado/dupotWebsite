<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\AppsPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\ProjectArticlesPage;
use MyWebsite\Pages\ResourcesPage;

class NavComponent extends ComponentAbstract implements ComponentInterface
{

    protected $pageSelected;

    public function __construct($pageSelected)
    {
        $this->pageSelected = $pageSelected;
    }

    public function render(): string
    {
        $linkList = [
            'Jeux' => GamesPage::FILENAME,
            'Apps mobile' => AppsPage::FILENAME,
            'Apps desktop' => AppsDestkopPage::FILENAME,
            'Resources' => ResourcesPage::FILENAME,
            'Article\'s projects' => ProjectArticlesPage::FILENAME,
            'A propos' => AboutPage::FILENAME,
            'Twitter' => 'https://twitter.com/dupot_org',
            'Github' => 'https://github.com/imikado',
            'Itchio' => 'https://dupot-org.itch.io/'

        ];

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/nav.php',
            [
                'linkList' => $linkList,
                'pageSelected' => $this->pageSelected
            ]
        );
    }
}
