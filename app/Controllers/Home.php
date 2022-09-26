<?php

namespace App\Controllers;

use VanillaPHP\Helpers\Params;
use VanillaPHP\Helpers\View;

class Home
{
    public function index()
    {
        return View::render('Home', []);
    }
}