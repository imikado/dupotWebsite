<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class PageHeaderComponent extends ComponentAbstract implements ComponentInterface
{

    protected $title;
    protected $subtitle;
    protected $eyebrow;

    public function __construct(string $title, ?string $subtitle = null, ?string $eyebrow = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->eyebrow = $eyebrow;
    }

    public function render(): string
    {
        return $this->renderViewWithParamList(
            __DIR__ . '/Views/pageHeader.php',
            [
                'title' => $this->title,
                'subtitle' => $this->subtitle,
                'eyebrow' => $this->eyebrow,
            ]
        );
    }
}
