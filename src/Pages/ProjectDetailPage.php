<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\NavComponent;
use MyWebsite\Components\ProjectDetailComponent;

class ProjectDetailPage extends PageAbstract implements PageInterface
{

    const FILENAME_PATTERN = 'app_ID.html';

    protected $content;
    protected $category;
    protected $backFilename;
    protected $backLabel;

    public static function getFilenameById($id): string
    {
        return str_replace('ID', $id, self::FILENAME_PATTERN);
    }

    public function __construct($content, string $category, string $backFilename, string $backLabel)
    {
        $this->content = $content;
        $this->category = $category;
        $this->backFilename = $backFilename;
        $this->backLabel = $backLabel;
    }

    public function getFilename(): string
    {
        return self::getFilenameById($this->content->id);
    }

    public function render(): string
    {
        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/default.php',
            [
                'nav' => new NavComponent($this->backFilename),
                'contentList' => [
                    new ProjectDetailComponent((object)[
                        'content' => $this->content,
                        'category' => $this->category,
                        'backFilename' => $this->backFilename,
                        'backLabel' => $this->backLabel,
                    ])
                ]
            ]
        );
    }
}
