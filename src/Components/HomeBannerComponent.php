<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class HomeBannerComponent extends ComponentAbstract implements ComponentInterface
{
    public function render(): string
    {
        return $this->renderViewWithParamList(
            __DIR__ . '/Views/banner.php',
            []
        );
    }
}
