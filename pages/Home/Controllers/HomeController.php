<?php

namespace VanillaPHP\PageControllers;

use VanillaPHP\Helpers\Params;
use VanillaPHP\Helpers\View;

class HomeController
{
    public function index()
    {
        return View::render('Home', []);
    }
}