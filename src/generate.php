<?php

use MyWebsite\Apis\DataApi;
use MyWebsite\Components\AppDesktopListComponent;
use MyWebsite\Components\GameListComponent;
use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\AppsPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PolicyPage;
use MyWebsite\Pages\ProjectArticlesPage;
use MyWebsite\Pages\ProjectDetailPage;
use MyWebsite\Pages\ResourcesPage;
use MyWebsite\Pages\TutorialListPage;
use MyWebsite\Pages\TutorialPage;

require __DIR__ . '/../vendor/autoload.php';

$pagesList = [

    new HomePage(),
    new GamesPage(),
    new AppsPage(),
    new AppsDestkopPage(),
    new ResourcesPage(),
    new AboutPage(),
    new ProjectArticlesPage(),
    new TutorialListPage()

];

$policyList = json_decode(file_get_contents(__DIR__ . '/data/PolicyList.json'));
foreach ($policyList as $policyLoop) {
    $id = $policyLoop->id;
    $label = $policyLoop->label;

    $pagesList[] = new PolicyPage($id, $label);
}

foreach (GameListComponent::loadList() as $gameLoop) {
    $pagesList[] = new ProjectDetailPage($gameLoop, 'Jeu', GamesPage::FILENAME, 'Jeux');
}

foreach (AppDesktopListComponent::loadList() as $appDesktopLoop) {
    $pagesList[] = new ProjectDetailPage($appDesktopLoop, 'Application opensource', AppsDestkopPage::FILENAME, 'Logiciels');
}

$appMobileApi = new DataApi(__DIR__ . '/data/AppMobileList.json');
foreach ($appMobileApi->findAll() as $appMobileLoop) {
    if (isset($appMobileLoop->id)) {
        $pagesList[] = new ProjectDetailPage($appMobileLoop, 'Application mobile', AppsPage::FILENAME, 'Apps mobile');
    }
}

foreach ($pagesList as $pageLoop) {
    print("Generate " . $pageLoop->getFilename() . "\n");
    $pageLoop->generateTo(__DIR__ . '/../docs/');
}

$tutorialApi = new DataApi(__DIR__ . '//data/TutorialList.json');
$tutorialList = $tutorialApi->findAll();

foreach ($tutorialList as $tutorialLoop) {
    $tutorialPage = new TutorialPage($tutorialLoop->id);
    print("Generate " . $tutorialPage->getFilename() . "\n");
    $tutorialPage->generateTo(__DIR__ . '/../docs/');
}
