<?php

namespace MyWebsite\Apis;

use Parsedown;

class MarkdownApi
{

    protected $markdownLib = null;

    public function __construct()
    {
        $this->markdownLib = new Parsedown();
    }

    public function convertDataFile($dataFile)
    {
        $absolutePath = __DIR__ . '/../' . $dataFile;
        $content = file_get_contents($absolutePath);

        return $this->convert($content);
    }

    public function convert($content)
    {

        return $this->markdownLib->text($content);
    }
}
