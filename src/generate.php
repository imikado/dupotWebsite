<?php

use MyWebsite\Apis\AssetVersionApi;
use MyWebsite\Apis\DataApi;
use MyWebsite\Components\AppDesktopListComponent;
use MyWebsite\Components\AppGlfOsListComponent;
use MyWebsite\Components\GameListComponent;
use MyWebsite\Components\ResourcesListComponent;
use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PolicyPage;
use MyWebsite\Pages\ProjectArticlesPage;
use MyWebsite\Pages\ProjectDetailPage;
use MyWebsite\Pages\ResourcesPage;
use MyWebsite\Pages\TutorialListPage;
use MyWebsite\Pages\TutorialPage;

require __DIR__ . '/../vendor/autoload.php';

$docsPath = __DIR__ . '/../docs';

function generatePage($page, string $docsPath): void
{
    print("Generate " . $page->getFilename() . "\n");
    file_put_contents($docsPath . '/' . $page->getFilename(), AssetVersionApi::apply($page->render(), $docsPath));
}

$pagesList = [

    new HomePage(),
    new GamesPage(),
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

foreach (AppGlfOsListComponent::loadList() as $appGlfOsLoop) {
    $pagesList[] = new ProjectDetailPage($appGlfOsLoop, 'Application GLF OS', AppsDestkopPage::FILENAME, 'Logiciels');
}

foreach (ResourcesListComponent::loadList() as $resourceLoop) {
    $pagesList[] = new ProjectDetailPage($resourceLoop, 'Librairie opensource', ResourcesPage::FILENAME, 'Librairies & co');
}

foreach ($pagesList as $pageLoop) {
    generatePage($pageLoop, $docsPath);
}

$tutorialApi = new DataApi(__DIR__ . '//data/TutorialList.json');
$tutorialList = $tutorialApi->findAll();

foreach ($tutorialList as $tutorialLoop) {
    $tutorialPage = new TutorialPage($tutorialLoop->id);
    generatePage($tutorialPage, $docsPath);
}
