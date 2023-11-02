<?php

use MyWebsite\Apis\DataApi;
use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\AppsPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PolicyPage;
use MyWebsite\Pages\ProjectArticlesPage;
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
