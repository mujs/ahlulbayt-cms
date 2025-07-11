<?php

/*################################*\
|# - Ahlulbayt Portal             #|
|# - v1.0 beta                    #|
|# - Developed by Ahlulbayt Group #|
|# - 2011                         #|
\*################################*/

// Includes
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../global.php';

use App\Router;
use App\Controllers\HomeController;
use App\Controllers\ArticleController;
use App\Controllers\ContactController;
use App\Controllers\PageController;
use App\Controllers\GalleryController;

$router = new Router();

// Define routes
$router->add('', HomeController::class, 'index');
$router->add('home', HomeController::class, 'index');
$router->add('articles&show=cat', ArticleController::class, 'showCategory');
$router->add('articles&show=article', ArticleController::class, 'showArticle');
$router->add('contact', ContactController::class, 'showForm');
$router->add('contact&do=send', ContactController::class, 'sendMessage');
$router->add('pages', PageController::class, 'showPage');
$router->add('gallery', GalleryController::class, 'showCategories');
$router->add('gallery&show=cat', GalleryController::class, 'showCategoryImages');
$router->add('gallery&show=image', GalleryController::class, 'showImage');

// Dispatch the request
$uri = $_GET['act'] ?? '';
if (isset($_GET['show'])) {
    $uri .= '&show=' . $_GET['show'];
}
if (isset($_GET['do'])) {
    $uri .= '&do=' . $_GET['do'];
}

$router->dispatch($uri);

$tmpl->display("$style/index.htm");
