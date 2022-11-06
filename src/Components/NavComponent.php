<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

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
            'Jeux' => 'games.html',
            'Apps' => 'mobile.html',
            'A propos' => 'about.html',
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
