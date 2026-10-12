<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;
use MyWebsite\Apis\DataApi;
use MyWebsite\Components\Shared\ArticleCardListComponent;

class TutorialListComponent extends ComponentAbstract implements ComponentInterface
{
    const WORDS_PER_MINUTE = 200;

    public static function loadList()
    {
        $dataApi = new DataApi(__DIR__ . '/../data/TutorialList.json');

        $tutorialList = $dataApi->findAll();
        foreach ($tutorialList as $tutorialLoop) {
            $markdown = file_get_contents(__DIR__ . '/../data/content/' . $tutorialLoop->id . '.md');

            // les étapes du tuto sont les titres de niveau 4
            $tutorialLoop->stepCount = preg_match_all('/^#### /m', $markdown);
            $tutorialLoop->readingTime = max(1, (int)round(str_word_count(strip_tags($markdown)) / self::WORDS_PER_MINUTE));
        }

        return $tutorialList;
    }

    public static function findById($id)
    {
        foreach (self::loadList() as $tutorialLoop) {
            if ($tutorialLoop->id === $id) {
                return $tutorialLoop;
            }
        }

        return null;
    }

    public function render(): string
    {
        $props = (object)[
            'contentList' => self::loadList()
        ];

        $component = new ArticleCardListComponent($props);
        return $component->render();
    }
}
