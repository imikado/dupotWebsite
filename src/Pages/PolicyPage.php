<?php

namespace MyWebsite\Pages;

use Dupot\StaticGenerationFramework\Page\PageAbstract;
use Dupot\StaticGenerationFramework\Page\PageInterface;
use MyWebsite\Components\PolicyComponent;

class PolicyPage extends PageAbstract implements PageInterface
{

    const PATTERN_GAME = 'GAMEID';
    const FILENAME = 'policy_GAMEID.html';

    protected $id;
    protected $label;

    public function __construct($id, $label)
    {
        $this->id = $id;
        $this->label = $label;
    }

    public function getFilename(): string
    {
        return str_replace(self::PATTERN_GAME, $this->id,   self::FILENAME);
    }

    public function render(): string
    {

        return $this->renderLayoutWithParamList(
            __DIR__ . '/layout/policy.php',
            [
                'contentList' => [
                    new PolicyComponent((object)['label' => $this->label])
                ]
            ]
        );
    }
}
