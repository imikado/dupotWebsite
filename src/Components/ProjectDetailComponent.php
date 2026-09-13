<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class ProjectDetailComponent extends ComponentAbstract implements ComponentInterface
{

    protected $props;

    public function __construct(object $props)
    {
        $this->props = $props;
    }

    public function render(): string
    {
        return $this->renderViewWithParamList(
            __DIR__ . '/Views/projectDetail.php',
            [
                'content' => $this->props->content,
                'category' => $this->props->category,
                'backFilename' => $this->props->backFilename,
                'backLabel' => $this->props->backLabel,
            ]
        );
    }
}
