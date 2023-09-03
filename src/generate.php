<?php

use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\AppsPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\HomePage;
use MyWebsite\Pages\PolicyPage;
use MyWebsite\Pages\ProjectArticlesPage;
use MyWebsite\Pages\ResourcesPage;

require __DIR__ . '/../vendor/autoload.php';

$pagesList = [

    new HomePage(),
    new GamesPage(),
    new AppsPage(),
    new AppsDestkopPage(),
    new ResourcesPage(),
    new AboutPage(),
    new ProjectArticlesPage(),

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
