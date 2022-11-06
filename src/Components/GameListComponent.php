<?php

namespace MyWebsite\Components;

use Dupot\StaticGenerationFramework\Component\ComponentAbstract;
use Dupot\StaticGenerationFramework\Component\ComponentInterface;

class GameListComponent extends ComponentAbstract implements ComponentInterface
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
                self::MOBILE_ICON => 'mobile_littleAdventure_icon.png',
                self::MOBILE_IMAGE => 'mobile_littleAdventure.jpg',
                self::MOBILE_TITLE => 'Little Adventure',
                self::MOBILE_BODY => 'Aidez Gordon &agrave; trouver les pi&egrave;ces pour r&eacute;parer le puit du village',
                self::MOBILE_IDPLAYSTORE => 'dupot.org.mika.littleadventure',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_HOR,
                self::MOBILE_GITHUB => 'https://github.com/imikado/articleLMGodotLittleAdventure',

                self::MOBILE_DEMO => 'https://dupot-org.itch.io/little-adventure'

            ),


            array(
                self::MOBILE_ICON => 'mobile_littleEscape_icon.png',
                self::MOBILE_IMAGE => 'mobile_littleEscape.jpg',
                self::MOBILE_TITLE => 'Little Escape',
                self::MOBILE_BODY => 'Trouvez les différentes clés pour sortir de cet appartement',
                self::MOBILE_IDPLAYSTORE => 'dupot.org.mika.littleescape',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_HOR,
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupotLittleEscape'

            ),

            array(
                self::MOBILE_ICON => 'mobile_littleEscapeVR_icon.png',
                self::MOBILE_IMAGE => 'mobile_littleEscapeVR.jpg',
                self::MOBILE_TITLE => 'Little Escape VR',
                self::MOBILE_BODY => 'Avec un casque de réalité virtuelle, trouvez les différentes clés pour sortir de cet appartement',
                self::MOBILE_IDPLAYSTORE => 'org.godotengine.littleescapevr',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_HOR,
                self::MOBILE_GITHUB => 'https://github.com/imikado/articleLMGodotLittleEscapeVR'

            ),

            array(
                self::MOBILE_ICON => 'mobile_logistiqueenfolie_icon.png',
                self::MOBILE_IMAGE => 'mobile_logistiqueenfolie.png',
                self::MOBILE_TITLE => 'Logistique en folie',
                self::MOBILE_BODY => 'Remplissez les cartons de commande avant leur exp&eacute;dition',
                self::MOBILE_IDPLAYSTORE => 'mika.dupot.logistiqueenfolie',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupotLogistiqueEnFolie',
            ),

            array(
                self::MOBILE_ICON => 'mobile_colaman_icon.png',
                self::MOBILE_IMAGE => 'mobile_colaman.jpg',
                self::MOBILE_TITLE => 'Colaman',
                self::MOBILE_BODY => 'Bomberman-like Bis jouable uniquement en réseau LAN (un des joueurs héberge la partie, et les autres se connecte à son device)',
                self::MOBILE_IDPLAYSTORE => 'mika.dupot.colaman',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupotColaman',
            ),

            array(
                self::MOBILE_ICON => 'mobile_rangelescaisses_icon.png',
                self::MOBILE_IMAGE => 'mobile_rangelescaisses.png',
                self::MOBILE_TITLE => 'Range les caisses',
                self::MOBILE_BODY => 'Pousser les caisses jusqu\'aux emplacements',
                self::MOBILE_IDPLAYSTORE => 'mika.dupot.rangelescaisses',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,
                self::MOBILE_GITHUB => '',
            ),

            array(
                self::MOBILE_ICON => 'mobile_echec_icon.png',
                self::MOBILE_IMAGE => 'mobile_echec.png',
                self::MOBILE_TITLE => 'Jeux d\'echec',
                self::MOBILE_BODY => 'Simple jeu d\'echec',
                self::MOBILE_IDPLAYSTORE => 'com.mkdevs.echec',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupotEchec',
            ),

            array(
                self::MOBILE_ICON => 'mobile_eatman_icon.png',
                self::MOBILE_IMAGE => 'mobile_eatman.jpg',
                self::MOBILE_TITLE => 'Eatman',
                self::MOBILE_BODY => 'Un simple pacman-like',
                self::MOBILE_IDPLAYSTORE => 'org.mkdevs.pacman',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupotPacman',
            ),


            array(
                self::MOBILE_ICON => 'mobile_snake_icon.png',
                self::MOBILE_IMAGE => 'mobile_snake.jpg',
                self::MOBILE_TITLE => 'Snake',
                self::MOBILE_BODY => 'Retrouvez le jeu du 3310',
                self::MOBILE_IDPLAYSTORE => 'org.mkdevs.snake',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupotSnake',
            ),

            array(
                self::MOBILE_ICON => 'mobile_shootthemup_icon.png',
                self::MOBILE_IMAGE => 'mobile_shootthemup.png',
                self::MOBILE_TITLE => 'Shoot Them Up',
                self::MOBILE_BODY => 'Simple shoot Them Up',
                self::MOBILE_IDPLAYSTORE => 'org.mkdevs.shootThemUp',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,
                self::MOBILE_GITHUB => 'https://github.com/imikado/dupotShootThemUp2',
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
