<?php

namespace App\Controllers;

use VanillaPHP\Helpers\Params;
use VanillaPHP\Helpers\View;

class About
{
    public function index()
    {
        return View::render('About', []);
    }
}