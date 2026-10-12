<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

// regroupe les sections de liens (sites, participations...) en colonnes côte à côte
class AboutLinkSectionsComponent extends ComponentAbstract implements ComponentInterface
{
    protected $componentList;

    public function __construct(array $componentList)
    {
        $this->componentList = $componentList;
    }

    public function render(): string
    {
        $html = '';
        foreach ($this->componentList as $componentLoop) {
            $html .= $componentLoop->render();
        }

        return '<div class="about-link-sections">' . $html . '</div>';
    }
}
