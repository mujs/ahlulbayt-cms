<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        // Add admin-specific logic here, e.g., authentication check
        if (!isset($_SESSION['username'])) {
            header('Location: login.php');
            exit();
        }
    }
}
