<?php

/*################################*\
|# - Ahlulbayt Portal             #|\n|# - v1.0 beta                    #|\n|# - Developed by Ahlulbayt Group #|\n|# - 2011                         #|\n\*################################*/

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/global.php');

use App\Controllers\Admin\LoginController;

$controller = new LoginController();

if (isset($_GET['action']) && $_GET['action'] == 'login') {
    $controller->login();
} elseif (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $controller->logout();
} else {
    $controller->showLoginForm();
}

