<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\MarkdownApi;

class TutorialComponent extends ComponentAbstract implements ComponentInterface
{

    protected $props;

    public function __construct(object $props)
    {
        $this->props = $props;
    }

    public function render(): string
    {
        $markdownApi = new MarkdownApi();

        $content = $markdownApi->convertDataFile('data/content/' . $this->props->id . '.md');


        return $this->renderViewWithParamList(
            __DIR__ . '/Views/markdown.php',
            [
                'title' => $this->props->id,
                'content' => $content
            ]
        );
    }
}
