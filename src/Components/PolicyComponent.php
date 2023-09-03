<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class PolicyComponent extends ComponentAbstract implements ComponentInterface
{

    protected $props;

    public function __construct(object $props)
    {
        $this->props = $props;
    }

    public function render(): string
    {
        return $this->renderViewWithParamList(
            __DIR__ . '/Views/policy.php',
            [
                'label' => $this->props->label
            ]
        );
    }
}
