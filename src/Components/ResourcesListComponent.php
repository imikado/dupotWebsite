<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Apis\MarkdownApi;
use MyWebsite\Components\Shared\MobileCardListComponent;

class ResourcesListComponent extends ComponentAbstract implements ComponentInterface
{

    public static function loadList()
    {
        $dataApi = new DataApi(__DIR__ . '/../data/ResourcesList.json');
        $markdownApi = new MarkdownApi();

        $resourceList = $dataApi->findAll();
        foreach ($resourceList as $resourceLoop) {
            if (isset($resourceLoop->modal)) {
                $resourceLoop->modalContent = $markdownApi->convertDataFile($resourceLoop->modal->src);
            }
        }

        return $resourceList;
    }

    protected $isCompact;

    // version compacte (cartes) pour l'accueil, version détaillée pour la page Librairies & co
    public function __construct(bool $isCompact = false)
    {
        $this->isCompact = $isCompact;
    }

    public function render(): string
    {
        $props = (object)[
            'contentList' => self::loadList()
        ];

        if ($this->isCompact) {
            $component = new MobileCardListComponent($props);
            return $component->render();
        }

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/resourceList.php',
            [
                'contentList' => $props->contentList,
            ]
        );
    }
}
