<?php

namespace website\tools;

use stdClass;

class View
{
    protected $path;

    protected $propsList = [];

    public function __construct(string $viewPath)
    {
        $this->path = __DIR__ . '/../' . $viewPath;
    }

    public function assign($var, $value)
    {
        $this->propsList[$var] = $value;
    }

    public function show()
    {
        ob_start();
        include($this->path);
        $content = ob_get_contents();
        ob_end_clean();


        return $content;
    }
}
