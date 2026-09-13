<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class SectionTitleComponent extends ComponentAbstract implements ComponentInterface
{

    protected $title;
    protected $seeAllLabel;
    protected $seeAllLink;

    public function __construct(string $title, ?string $seeAllLabel = null, ?string $seeAllLink = null)
    {
        $this->title = $title;
        $this->seeAllLabel = $seeAllLabel;
        $this->seeAllLink = $seeAllLink;
    }

    public function render(): string
    {
        return $this->renderViewWithParamList(
            __DIR__ . '/Views/sectionTitle.php',
            [
                'title' => $this->title,
                'seeAllLabel' => $this->seeAllLabel,
                'seeAllLink' => $this->seeAllLink,
            ]
        );
    }
}
