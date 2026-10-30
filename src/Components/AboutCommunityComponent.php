<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class AboutCommunityComponent extends ComponentAbstract implements ComponentInterface
{
    const ABOUT_IMAGE = 'image';
    const ABOUT_TITLE = 'title';
    const ABOUT_BODY = 'body';
    const ABOUT_LINK = 'link';
    const ABOUT_LINK_LABEL = 'link_label';

    public function render(): string
    {
        $title = 'Communautés';

        $contentList = array(

            array(
                self::ABOUT_IMAGE => 'css/images/about_glf.png',
                self::ABOUT_TITLE => 'Gaming Linux FR',
                self::ABOUT_BODY => 'Membre actif de la communauté Gaming Linux FR',
                self::ABOUT_LINK => 'https://www.gaminglinux.fr',
                self::ABOUT_LINK_LABEL => 'www.gaminglinux.fr',

            ),

            array(
                self::ABOUT_IMAGE => 'css/images/about_techcafe.png',
                self::ABOUT_TITLE => 'TechCaf&eacute;',
                self::ABOUT_BODY => 'Membre actif de la communauté TechCaf&eacute;',
                self::ABOUT_LINK => 'https://techcafe.fr/',
                self::ABOUT_LINK_LABEL => 'techcafe.fr',

            ),

        );

        return $this->renderViewWithParamList(
            __DIR__ . '/Views/sectionList.php',
            [
                'title' => $title,
                'contentList' => $this->htmlList($contentList),
            ]
        );
    }

    private function htmlList($array)
    {
        foreach ($array as $i => $detail) {

            if ($detail == 'break') continue;

            $array[$i][self::ABOUT_TITLE] = $this->encode($array[$i][self::ABOUT_TITLE]);
            $array[$i][self::ABOUT_BODY] = $this->encode($array[$i][self::ABOUT_BODY]);
        }
        return $array;
    }

    public function encode($text)
    {
        return htmlentities($text, ENT_QUOTES, 'UTF-8', false);
    }
}
