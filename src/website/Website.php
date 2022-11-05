<?php

namespace website;

use website\tools\Page;
use website\tools\View;

class Website
{

    public function generate(string $targetPath)
    {

        $pageList = scandir(__DIR__ . '/pages/');
        foreach ($pageList as $pageLoop) {

            if (substr($pageLoop, 0, 1) == '.') continue;

            $htmlPage = substr(basename($pageLoop), 0, -4) . '.html';

            $page = new Page($pageLoop);
            $view = $page->fillView(new View('pages/' . $pageLoop));

            $this->generatePage($view, $targetPath, $htmlPage);
        }
    }

    public function generatePage($view, $targetPath, $htmlPage)
    {
        $layout = file_get_contents(__DIR__ . '/../layout/default.html');
        $main = $view->show();
        $nav = $this->getNavForPage($htmlPage);

        $page = str_replace(['#nav', '#content'], [$nav, $main], $layout);

        file_put_contents($targetPath . '/' . $htmlPage, $page);
    }

    public function getNavForPage($pageSelected)
    {

        $linkList = [
            'Jeux' => 'games.html',
            'Apps' => 'mobile.html',
            'A propos' => 'about.html',
            'Twitter' => 'https://twitter.com/dupot_org',
            'Github' => 'https://github.com/imikado',
            'Itchio' => 'https://dupot-org.itch.io/'

        ];

        $view = new View('fragment/nav.php');
        $view->assign('linkList', $linkList);
        $view->assign('pageSelected', $pageSelected);

        return $view->show();
    }
}
