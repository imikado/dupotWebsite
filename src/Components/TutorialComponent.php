<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\MarkdownApi;
use MyWebsite\Pages\TutorialListPage;

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
        $tutorial = TutorialListComponent::findById($this->props->id);

        $content = $markdownApi->convertDataFile('data/content/' . $this->props->id . '.md');

        // le titre est affiché dans l'en-tête : on retire le premier h2 du markdown
        $content = preg_replace('#^\s*<h2[^>]*>.*?</h2>#s', '', $content, 1);

        // chaque titre d'étape (h4) reçoit une ancre pour le sommaire
        $stepList = [];
        $content = preg_replace_callback('#<h4>(.*?)</h4>#s', function ($match) use (&$stepList) {
            $stepList[] = $match[1];
            return '<h4 id="etape-' . count($stepList) . '">' . $match[1] . '</h4>';
        }, $content);

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/tutorial.php',
            [
                'tutorial' => $tutorial,
                'content' => $content,
                'stepList' => $stepList,
                'backFilename' => TutorialListPage::FILENAME,
            ]
        );
    }
}
