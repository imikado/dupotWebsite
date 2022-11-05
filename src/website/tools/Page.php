<?php

namespace website\tools;

class Page
{

    protected $page;

    const INDEX_ICON = 'icon';
    const INDEX_TITLE = 'title';
    const INDEX_BODY = 'body';

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


    const ABOUT_IMAGE = 'image';
    const ABOUT_TITLE = 'title';
    const ABOUT_BODY = 'body';
    const ABOUT_LINK = 'link';
    const ABOUT_LINK_LABEL = 'link_label';

    public function __construct($page)
    {
        $this->page = $page;
    }

    public function fillView(View $view)
    {
        $method = 'get' . ucfirst(basename($this->page, '.php'));
        $propsList = $this->$method();

        foreach ($propsList as $var => $value) {
            $view->assign($var, $value);
        }
        return $view;
    }

    public function getIndex()
    {
        return [];
    }

    public function getGames()
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

        return ['contentList' => $this->htmlList($contentList)];
    }

    public function getMobile()
    {
        $contentList = array(
            array(
                self::MOBILE_ICON => 'mobile_muscu_icon.png',
                self::MOBILE_IMAGE => 'mobile_muscu_icon.png',
                self::MOBILE_TITLE => 'Carnet d\'entrainement',
                self::MOBILE_BODY => 'Utilisez cette application pour suivre vos évolutions au fil des scéances',
                self::MOBILE_IDPLAYSTORE => 'mika.dupot.muscu',
                self::MOBILE_LAYOUT => self::MOBILE_LAYOUT_VER,

            ),


        );
        return ['contentList' => $this->htmlList($contentList)];
    }

    public function getAbout()
    {
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
        $contentList2 = array(




            array(
                self::ABOUT_IMAGE => 'css/images/about_linuxmag.png',
                self::ABOUT_TITLE => 'Linux Magazine/Pratique',
                self::ABOUT_BODY => $this->encode('Le magazine où vous pouvez me lire'),
                self::ABOUT_LINK => 'https://boutique.ed-diamond.com/',
                self::ABOUT_LINK_LABEL => 'boutique.ed-diamond.com',

            ),

            array(
                self::ABOUT_IMAGE => 'css/images/about_nipsource.png',
                self::ABOUT_TITLE => 'NipSource',
                self::ABOUT_BODY => 'Notre ancien podcast sur l\' opensource',
                self::ABOUT_LINK => 'https://nipcast.com/category/nipsource/',
                self::ABOUT_LINK_LABEL => 'nipcast.com',

            ),

            array(
                self::ABOUT_IMAGE => 'css/images/about_techcafe.png',
                self::ABOUT_TITLE => 'TechCaf&eacute;',
                self::ABOUT_BODY => 'Membre actif sur le podcast TecCaf&eacute;',
                self::ABOUT_LINK => 'https://techcafe.fr/',
                self::ABOUT_LINK_LABEL => 'techcafe.fr',

            ),





        );

        return [
            'contentList' => $this->htmlList($contentList),
            'contentList2' => $this->htmlList($contentList2)

        ];
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
