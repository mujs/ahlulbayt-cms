<?php

/*################################*\
|# - Ahlulbayt Portal             #|
|# - v1.0 beta                    #|
|# - Developed by Ahlulbayt Group #|
|# - 2011                         #|
*################################*/

session_start();

// Includes
require_once(__DIR__ . '/includes/config.php');
require_once(__DIR__ . '/vendor/autoload.php');

use App\Blocks\MainMenuBlock;

if (!isset($_SESSION['username']) && stripos($_SERVER['PHP_SELF'], 'admin_login.php') === false) {
    header('Location: admin_login.php');
    exit();
}

// Script Settings
$tmpl = new Smarty();
$tmpl->template_dir = __DIR__ . '/control/style/';
$tmpl->compile_dir = __DIR__ . '/templates_c/';

// Fetch settings using PDO
try {
    $stmt = $pdo->query("SELECT * FROM settings");
    $settings = $stmt->fetch(PDO::FETCH_ASSOC);
    $tmpl->assign('settings', $settings);
} catch (PDOException $e) {
    // Handle database query errors
    die("Database query failed: " . $e->getMessage());
}

// Fetch main menu links for admin panel (if needed, otherwise remove)
$mainMenu = new MainMenuBlock($pdo);
$tmpl->assign('main_menu_links', $mainMenu->getData());

// Global Functions
function msg($msg, $redirect = '', $time = 1) {
    global $tmpl;
    $tmpl->assign('msg', $msg);
    if (!empty($redirect)) $tmpl->assign('meta_redirect', "<meta http-equiv='refresh' content='$time; url=$redirect' />");
    $tmpl->assign('tmp_page', 'msg.htm');
}

// Security Redirection
if (stripos($_SERVER['PHP_SELF'], 'admin_global.php') !== false) {
    header('Location: index.php');
    exit();
}