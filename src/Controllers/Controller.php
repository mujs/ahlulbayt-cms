<?php

namespace App\Controllers;

use Smarty;

class Controller
{
    protected $tmpl;

    public function __construct()
    {
        global $tmpl;
        $this->tmpl = $tmpl;
    }
}
