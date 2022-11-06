<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class AppListComponent extends ComponentAbstract implements ComponentInterface
{
    const MOBILE_BREAK = 'break';

    const MOBILE_ICON = 'icon';
    const MOBILE_IMAGE = 'image';
    const MOBILE_TITLE = 'title';
    const MOBILE_BODY = 'body';
    const MOBILE_IDPLAYSTORE = 'idplaystore';
    const MOBILE_LAYOUT = 'layout';
    const MOBILE_GITHUB = 'github';

    const MOBILE_DEMO = 'demo';

    const MOBILE_LAYOUT_VER = 'vertical';
    const MOBILE_LAYOUT_HOR = 'horizontal';

    public function render(): string
    {
        $contentList = array(
            array(
                self::MOBILE_ICON => 'mobile_muscu_icon.png',
                self::MOBILE_IMAGE => 'mobile_muscu_icon.png',
                self::MOBILE_TITLE => 'Carnet d\'entrainement',
                self::MOBILE_BODY => 'Utilisez cette application pour suivre vos évolutions au fil des scéances',
                self::MOBILE_IDPLAYSTORE => 'mika.dupot.muscu',
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupot_muscuSupercapote',

                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,

            ),


        );

        return $this->renderViewWithParamList(
            __DIR__ . '/Shared/mobileCardList.php',
            [
                'contentList' => $this->htmlList($contentList),
            ]
        );
    }

    private function htmlList($array)
    {
        foreach ($array as $i => $detail) {

            if ($detail == 'break') continue;

            $array[$i][self::MOBILE_TITLE] = $this->encode($array[$i][self::MOBILE_TITLE]);
            $array[$i][self::MOBILE_BODY] = $this->encode($array[$i][self::MOBILE_BODY]);
        }
        return $array;
    }

    public function encode($text)
    {
        return htmlentities($text, ENT_QUOTES, 'UTF-8', false);
    }
}
