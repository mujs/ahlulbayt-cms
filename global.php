<?php

/*################################*\
|# - Ahlulbayt Portal             #|
|# - v1.0 beta                    #|
|# - Developed by Ahlulbayt Group #|
|# - 2011                         #|
\*################################*/

session_start();

// Includes
require_once('includes/config.php');
require_once('vendor/autoload.php');

use App\Blocks\MainMenuBlock;
use App\Blocks\NoorBlock;
use App\Blocks\OnlineBlock;

// Script Settings
$tmpl = new Smarty();

// Fetch settings using PDO
try {
    $stmt = $pdo->query("SELECT * FROM settings");
    $settings = $stmt->fetch(PDO::FETCH_ASSOC);
    $tmpl->assign('settings', $settings);
    $style = $settings['style'];
    $tmpl->assign('style', $style);
} catch (PDOException $e) {
    // Handle database query errors
    die("Database query failed: " . $e->getMessage());
}

$tmpl->template_dir = __DIR__ . '/templates/' . $settings['style'] . '/';
$tmpl->compile_dir = __DIR__ . '/templates_c/';

// Fetch main menu links
$mainMenu = new MainMenuBlock();
$tmpl->assign('main_menu_links', $mainMenu->getData());

// Fetch random quote
$noorBlock = new NoorBlock();
$tmpl->assign('noor', $noorBlock->getRandomQuote());

// Fetch online users count
$onlineBlock = new OnlineBlock($pdo);
$tmpl->assign('online_users', $onlineBlock->getOnlineUsersCount());

// Global Functions
function msg($msg)
{
    global $tmpl;
    $tmpl->assign('msg', $msg);
    $tmpl->assign('tmp_page', 'msg.htm');
}

if (stripos($_SERVER['PHP_SELF'], 'global.php') !== false) {
    header('Location: index.php');
    exit();
}