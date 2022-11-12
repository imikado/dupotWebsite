<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsPage;
use MyWebsite\Pages\GamesPage;

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
            'Apps' => AppsPage::FILENAME,
            'A propos' => AboutPage::FILENAME,
            'Twitter' => 'https://twitter.com/dupot_org',
            'Github' => 'https://github.com/imikado',
            'Itchio' => 'https://dupot-org.itch.io/'

        ];

        return $this->renderViewWithParamList(
            __DIR__ . '/Nav/nav.php',
            [
                'linkList' => $linkList,
                'pageSelected' => $this->pageSelected
            ]
        );
    }
}
