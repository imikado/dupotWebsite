<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class AboutSiteListComponent extends ComponentAbstract implements ComponentInterface
{
    const ABOUT_IMAGE = 'image';
    const ABOUT_TITLE = 'title';
    const ABOUT_BODY = 'body';
    const ABOUT_LINK = 'link';
    const ABOUT_LINK_LABEL = 'link_label';

    public function render(): string
    {
        $title = 'Sites';
        $contentList = array(
            array(
                self::ABOUT_IMAGE => 'css/images/about_supercapote.png',
                self::ABOUT_TITLE => 'Supercapote',
                self::ABOUT_BODY => $this->encode('Mon site de prévention'),
                self::ABOUT_LINK => 'https://supercapote.com',
                self::ABOUT_LINK_LABEL => 'supercapote.com',

            ),

            array(
                self::ABOUT_IMAGE => 'css/images/about_mkframework.png',
                self::ABOUT_TITLE => 'MkFramework',
                self::ABOUT_BODY => 'Framework php opensource, rétrocompatible depuis 2009',
                self::ABOUT_LINK => 'https://mkframework.com/',
                self::ABOUT_LINK_LABEL => 'mkframework.com',
            ),



        );
        return $this->renderViewWithParamList(
            __DIR__ . '/About/sectionList.php',
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
