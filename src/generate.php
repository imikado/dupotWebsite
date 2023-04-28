<?php

use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsDestkopPage;
use MyWebsite\Pages\AppsPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\HomePage;
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

foreach ($pagesList as $pageLoop) {
    print("Generate " . $pageLoop->getFilename() . "\n");
    $pageLoop->generateTo(__DIR__ . '/../docs/');
}
