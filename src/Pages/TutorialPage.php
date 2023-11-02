<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use Exception;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\TutorialComponent;

class TutorialPage extends PageAbstract implements PageInterface
{
    protected $id = '';

    const FILENAME_PATTERN = 'tutorial_ID.html';

    public static function getFilenameById($id): string
    {
        return str_replace('ID', $id, self::FILENAME_PATTERN);
    }

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getFilename(): string
    {
        return self::getFilenameById($this->id);
    }

    public function render(): string
    {

        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/default.php',
            [
                'nav' => new NavComponent($this->getFilename()),
                'contentList' => [
                    new TutorialComponent((object)['id' => $this->id])
                ]
            ]
        );
    }
}
