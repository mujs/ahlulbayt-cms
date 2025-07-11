<?php

/*################################*\
|# - Ahlulbayt Portal             #|\
|# - v1.0 beta                    #|\
|# - Developed by Ahlulbayt Group #|\
|# - 2011                         #|\
\*################################*/

// Includes
require_once __DIR__ . '/../admin_global.php';


use App\Router;
use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\ArticleController;
use App\Controllers\Admin\BlockController;
use App\Controllers\Admin\LinkController;
use App\Controllers\Admin\PageController;
use App\Controllers\Admin\SettingController;

$router = new Router();

// Define routes
$router->add('', DashboardController::class, 'index');
$router->add('home', DashboardController::class, 'index');
$router.add('articles', ArticleController::class, 'index');
$router.add('articles&action=add_article', ArticleController::class, 'addArticleForm');
$router.add('articles&action=start_add_article', ArticleController::class, 'saveArticle');
$router.add('articles&action=show_articles', ArticleController::class, 'showArticles');
$router.add('articles&action=edit_article', ArticleController::class, 'editArticleForm');
$router.add('articles&action=start_edit_article', ArticleController::class, 'updateArticle');
$router.add('articles&action=delete_article', ArticleController::class, 'deleteArticle');
$router.add('blocks', BlockController::class, 'index');
$router.add('blocks&action=add_block', BlockController::class, 'addBlockForm');
$router.add('blocks&action=start_add_block', BlockController::class, 'saveBlock');
$router.add('blocks&action=show_blocks', BlockController::class, 'showBlocks');
$router.add('blocks&action=edit_block', BlockController::class, 'editBlockForm');
$router.add('blocks&action=start_edit_block', BlockController::class, 'updateBlock');
$router.add('blocks&action=delete_block', BlockController::class, 'deleteBlock');
$router.add('links', LinkController::class, 'index');
$router.add('links&action=add_link', LinkController::class, 'addLinkForm');
$router.add('links&action=start_add_link', LinkController::class, 'saveLink');
$router.add('links&action=show_links', LinkController::class, 'showLinks');
$router.add('links&action=edit_link', LinkController::class, 'editLinkForm');
$router.add('links&action=start_edit_link', LinkController::class, 'updateLink');
$router.add('links&action=delete_link', LinkController::class, 'deleteLink');
$router.add('links&action=up_link', LinkController::class, 'moveLinkUp');
$router.add('links&action=down_link', LinkController::class, 'moveLinkDown');
$router.add('pages', PageController::class, 'index');
$router.add('pages&action=add_page', PageController::class, 'addPageForm');
$router.add('pages&action=start_add_page', PageController::class, 'savePage');
$router.add('pages&action=show_pages', PageController::class, 'showPages');
$router.add('pages&action=edit_page', PageController::class, 'editPageForm');
$router.add('pages&action=start_edit_page', PageController::class, 'updatePage');
$router.add('pages&action=delete_page', PageController::class, 'deletePage');
$router.add('settings', SettingController::class, 'index');
$router.add('settings&action=general', SettingController::class, 'showGeneralSettings');
$router.add('settings&action=general_start_edit', SettingController::class, 'updateGeneralSettings');
$router.add('settings&action=messages', SettingController::class, 'showMessages');
$router.add('settings&action=read_message', SettingController::class, 'readMessage');
$router.add('settings&action=delete_message', SettingController::class, 'deleteMessage');

// Dispatch the request
$uri = $_GET['show'] ?? '';
if (isset($_GET['action'])) {
    $uri .= '&action=' . $_GET['action'];
}

$router->dispatch($uri);

$tmpl->display('index.htm');
