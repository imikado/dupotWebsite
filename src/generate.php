<?php

use MyWebsite\Pages\AboutPage;
use MyWebsite\Pages\AppsPage;
use MyWebsite\Pages\GamesPage;
use MyWebsite\Pages\HomePage;

require __DIR__ . '/../vendor/autoload.php';

$pagesList = [

    new HomePage(),
    new GamesPage(),
    new AppsPage(),
    new AboutPage()

];

foreach ($pagesList as $pageLoop) {
    print("Generate " . $pageLoop->getFilename() . "\n");
    $pageLoop->generateTo(__DIR__ . '/../docs/');
}
